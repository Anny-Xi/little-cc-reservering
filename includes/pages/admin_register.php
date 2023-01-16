<?php
//If already logged in, no need to be here
/** @var System\Utils\Session $session */
if ($session->keyExists('admin')) {
    header('Location: admin_home');
    exit;
}

//Set default empty Admin users & load POST logic
$admin = new \System\Users\Admin();
require_once dirname(__FILE__) . '/includes/admin_register-post-data.php';

//When no error, set session variable, redirect & exit script
/** @var System\Users\Admin $admin */
if (isset($formData) && empty($errors)) {

    //Init the database
    $db = new \System\Database\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //Save the record to the db
    if (\System\Users\Admin::create($admin, $db->getConnection())) {
        $success = 'Your new album has been created in the database!';
        //Override to see a new empty form
        $admin = new \System\Users\Admin('', '');
    } else {
        $errors[] = 'Database error info: ' . $db->getConnection()->errorInfo()[0];
    }

}

//Default page title
$pageTitle = 'Admin Login';

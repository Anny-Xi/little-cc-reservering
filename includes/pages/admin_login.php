<?php
//If already logged in, no need to be here
/** @var System\Utils\Session $session */
if ($session->keyExists('admin')) {
    header('Location: admin_home');
    exit;
}

//Validation
require_once dirname(__FILE__) . '/includes/login-post-data.php';

//When no error, set session variable, redirect & exit script
/** @var System\Users\User $user */
if (isset($formData) && empty($errors)) {
    $session->set('user', $user);
    header('Location: admin_home');
    exit;
}

//Default page title
$pageTitle = 'Admin Login';

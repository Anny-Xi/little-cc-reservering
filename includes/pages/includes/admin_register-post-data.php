<?php

use System\Form\Data;
use System\Users\Admin;

//Check if Post isset, else do nothing
if (isset($_POST['submit'])) {
    //Require form classes
    require_once dirname(__FILE__) . '/../../classes/System/Form/Data.php';
    require_once dirname(__FILE__) . '/../../classes/System/Form/Validation/Validator.php';
    require_once dirname(__FILE__) . '/../../classes/System/Form/Validation/AlbumValidator.php';

    //Set form data
    $formData = new Data($_POST);

    //Set post variables
    /** @var Admin $admin */
    $admin->username = $formData->getPostVar('username');
    $admin->password = $formData->getPostVar('password');


    //checks for register
    $validator = new \System\Form\Validation\AdminRegisterValidator($admin);
    $validator->validate();
    $errors = $validator->getErrors();
}

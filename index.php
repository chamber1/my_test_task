<?php


spl_autoload_register(function($class) {
    
    $filename = 'classes/' . $class . '.php';
    if (file_exists($filename)){ 
        require $filename; 
    }
});


/* uncomment to test login form
$form = new LoginForm();
$form->login = "11";
$form->password = "22";
$form->validateFields();
*/


/*Registration form*/

$form2 = new RegisterForm();
$form2->login = "23232";
$form2->email = "yurenkoyura@gmail.com";
$form2->password = "22";
$form2->validateFields();




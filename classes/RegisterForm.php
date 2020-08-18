<?php

/**
 * Class RegisterForm
 *
 * @author YuriyYurenko
 * <yurenkoyura@gmail.com>
 */
class RegisterForm extends AbstractForm{
    
    
    
    /** @var string login */
    public $login;
    /** @var string email */
    public $email;
    /** @var string  password */
    public $password;
    
   
    /**
     * Make a validation form fields.
     *
     * @return array result
     */
    public function validateFields() {
        
        $login_validator = new LoginValidator();
        $login_validator->login = $this->login;
        $validate_login_result = $login_validator->validate();
        echo "Login validate result</br>";
        var_dump($validate_login_result);
        
        $email_validator = new EmailValidator();
        $email_validator->email = $this->email;
        $validate_email_result = $email_validator->validate();
        echo "</br>Email validate result</br>";
        var_dump($validate_email_result);
        
        
        $password_validator = new PasswordValidator();
        $password_validator->password = $this->password;
        $validate_password_result = $password_validator->validate();
        echo "</br>Password validate result</br>";
        var_dump($validate_password_result);
    }
   
    
}

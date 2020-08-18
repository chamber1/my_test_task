<?php

/**
 * Class LoginForm
 *
 * @author YuriyYurenko
 * <yurenkoyura@gmail.com>
 */
class LoginForm extends AbstractForm{
    
    
    
    /** @var string login */
    public $login;
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
        
        $password_validator = new PasswordValidator();
        $password_validator->password = $this->password;
        $validate_password_result = $password_validator->validate();
        echo "</br>Password validate result</br>";
        var_dump($validate_password_result);
    }
   
    
}

<?php
/**
 * Class PasswordValidator
 *
 * @author YuriyYurenko
 * <yurenkoyura@gmail.com>
 */
class PasswordValidator implements AbstractValidator{
   
    /** @var string  password */
    public $password;
    /** @var string  error message */
    public $error_message;
    
    
    /**
     * Array with predefined password rules.
     *
     */
    protected $password_rules =[
        'min_length' =>6,
        'max_length' =>15,
    ];
    
    
    
    /**
     * Make a validation form fields.
     *
     * @return array result
     */
    public function validate() {
        
        $this->error_message = NULL;
  
        if (strlen($this->password) < $this->password_rules['min_length']) {
       
            $this->error_message = "Password should be at least ".$this->password_rules['min_length']." characters";
            
        }elseif(strlen($this->password) > $this->password_rules['max_length']){
            
            $this->error_message = "Password should be not more than ".$this->password_rules['max_length']." characters";
            
        }
        
        if(is_null($this->error_message)){
            
            return [
                'result' => true   
            ];
        
        }else{
            
            return [
                'result' => false,
                'message' => $this->error_message
            ];
        }
        
        
    }
    
    
    
}

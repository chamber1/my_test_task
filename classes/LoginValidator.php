<?php
/**
 * Class LoginValidator.
 */
class LoginValidator implements AbstractValidator{
   
    /** @var string login */
    public $login;
    
    /** @var string error message */
    public $error_message;
    
    
    /** @var array login rules */
    private $login_rules =[
        'min_length' => 4,
        'max_length' => 8,
    ];
    
    /**
     * Make a validation.
     *
     * @return array result
     */
    public function validate() {
        
        $this->error_message = NULL;
  
        if (strlen($this->login) < $this->login_rules['min_length']) {
       
            $this->error_message = "Login should be at least ".$this->login_rules['min_length']." characters";
            
        }elseif(strlen($this->login) > $this->login_rules['max_length']){
            
            $this->error_message = "Login should be not more than ".$this->login_rules['max_length']." characters";
            
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

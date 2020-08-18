<?php
/**
 * Class EmailValidator.
 */
class EmailValidator implements AbstractValidator{
   
    public $error_message;
    
    public $email;
    
    
    
    /**
     * Make a validation.
     *
     * @return array result
     */
    public function validate() {
    
        $this->error_message = NULL;
            
        if (!preg_match("/[0-9a-z]+@[a-z]/", $this->email)) {
       
            $this->error_message ="Email is not correct";
            
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

<?php namespace App\Http\Middleware;
    
    /**
    * Middleware para usuario normal
    */
    class IsInvited extends IsType
    {
        public function getType()
        {
            $this->getRedirect();
            
            return 2;    
        }
        
    }
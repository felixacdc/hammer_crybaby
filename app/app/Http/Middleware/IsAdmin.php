<?php namespace App\Http\Middleware; 
    
    /**
    * Middleware para administrador
    */
    class IsAdmin extends IsType
    {
        public function getType()
        {
            $this->getRedirect();

            return 1;
        }
    }

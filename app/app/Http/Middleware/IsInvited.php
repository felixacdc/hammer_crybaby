<?php namespace App\Http\Middleware;
    
    /**
    * Middleware para usuario normal
    */
    class IsInvited extends IsType
    {
        $this->getRedirect();

        return 2;
    }
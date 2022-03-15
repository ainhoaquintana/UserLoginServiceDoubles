<?php

namespace UserLoginService\Tests\Doubles;

use mysql_xdevapi\Exception;
use UserLoginService\Application\SessionManager;

class SecureSessionManager implements SessionManager
{
    public function login(string $userName): bool   //Esta nos la hemos inventado un poco
    {
        if($userName == "usuario" ){
            throw new Exception("Incorrect password");
        }
        if($userName != "" ){
            throw new Exception("User doesn't exist");
        }
        if(true ){//Servicio externo no responde
            throw new Exception("External service is not responding");
        }

    }

    public function getSessions(): int
    {
    }
    public function logout(string $username): bool
    {
    }
}
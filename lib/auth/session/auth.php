<?php
class Auth implements IAuth {
    private $cookie = '__USUARIO__';
    private $tiempo = 1; // Expresado en horas
    
    public function autenticar($usuario) {
        if(!is_object($usuario)) {
            throw new Exception("Fallo autenticación");
        } else if(empty($usuario->identificacion)){
            throw new Exception("Fallo autenticación");
        }
        
        $extraParaElToken = $usuario->identificacion . $usuario->usuario;
        
        setcookie(
            $this->cookie,
            json_encode(
                (object) [
                    'id' => $usuario->identificacion,
                    'Usuario' => $usuario->usuario,
                    'Token' => $this->token($extraParaElToken)
                ]
            ),
            time() + (3600 * $this->tiempo)
        );
    }
    
    public function estaAutenticado() {
        if(!empty($_COOKIE[$this->cookie])) {
            $json = json_decode($_COOKIE[$this->cookie]);
            
            if(empty($json)){
                throw new Exception("No esta autenticado");
            }
            
            if(empty($json->Token)) {
                throw new Exception("No esta autenticado");
            }
            
            $extraParaElToken = $json->identificacion . $json->usuario;
            
            if($json->Token !== $this->token($extraParaElToken)) {
                throw new Exception("No esta autenticado");
            }
        } else {
            throw new Exception("No esta autenticado");
        }
    }
    
    public function destruir() {
        $this->EstaAutenticado();
        
        unset($_COOKIE[$this->cookie]);
        setcookie($this->cookie, null, -1);
    }
    
    public function usuario() {
        $this->EstaAutenticado();
        
        return json_decode($_COOKIE[$this->cookie]);
    }
    
    private function token($extra){
        return sha1(tokenPorCliente() . $extra);
    }
}
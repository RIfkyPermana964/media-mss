<?php
class User {
    
    public function login($username, $password) {
        if($username === 'admin' && $password === 'admin123') {
            return true;
        } else {
            return false;
        }
    }
}
?>

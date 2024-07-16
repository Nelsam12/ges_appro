<?php
namespace Core;

class Session{
    public  static function ouvrirSession() : void
    {
        if (session_status() == PHP_SESSION_NONE){
            session_start();
        }
    }

    public static function add(string $key, mixed $value){
        $_SESSION[$key] = $value;
    }

    public static function get(string $key) : mixed{
        if (isset($_SESSION[$key])){
            return $_SESSION[$key];
        }
        return false;
    }

    public static function remove(string $key) : bool{
        if (isset($_SESSION[$key])){
            unset($_SESSION[$key]);
            return true;
        }
        return false;
    }


    public  static function fermerSession() : void
    {
        if (session_status() != PHP_SESSION_NONE){
            // Détruire l'utilisateur connecté
            Session::remove('userConnect');
            session_destroy();
        }
    }
}
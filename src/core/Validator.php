<?php

class Validator {
    public static array $errors = [];

    public static function isValide() : bool {
        return empty(self::$errors);
    }

    // Obligato
}
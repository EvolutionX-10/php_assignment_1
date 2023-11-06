<?php

class DBConnection
{
    public static function make(): PDO
    {
        return new PDO(
            'mysql:host=127.0.0.1;dbname=formdata',
            'root',
            ''
        );
    }
}
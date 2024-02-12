<?php

class DbConnection
{
    public function __construct()
    {
    }

    public function getConnection(): PDO
    {
        return new PDO('pgsql:host=localhost;port=5432;dbname=student;user=student;password=101010');
    }
}
<?php

class FeedbackRepository
{
    private DbConnection $connection;
    public function __construct(DbConnection $connection)
    {
        $this->connection = $connection;
    }

    public function insert()
    {
        $do_insert = $this->connection->prepare("INSERT INTO test1(username, email, password, number, description)  VALUES (:name, :email, :password, :number, :description)");
        $do_insert -> execute(array(':name' => $name, ':email' =>$email, ':password'=>$password, ':number'=>$number, ':description'=>$description));
//
    }
}
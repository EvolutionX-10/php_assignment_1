<?php
require 'DBConnection.php';

class UserData
{
    public PDO $pdo;

    public function __construct()
    {
        $this->pdo = DBConnection::make();
    }

    public function add($data): void
    {
        $statement = $this->pdo->prepare('SELECT * FROM users');
        $statement->execute();
        $users = $statement->fetchAll(PDO::FETCH_OBJ);
        // if the user exists, do nothing else add the user
        foreach ($users as $user) {
            if ($user->email === $data['email']) {
                echo '<script>alert("User with this email already exists")</script>';
                return;
            }
        }
        // add the user
        $sql = "INSERT INTO users (name, email, gender, city) VALUES (:name, :email, :gender, :city)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }

    public function fetchAll(): array
    {
        $statement = $this->pdo->prepare('SELECT * FROM users ORDER BY name');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}

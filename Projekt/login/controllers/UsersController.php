<?php
require_once '../config/Database.php';

class UsersController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD Form Code

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from users');

        return $query->fetchAll();
    }

    public function insert($request){
        $query = $this->db->pdo->prepare('INSERT INTO users (fname, username, email, pass) 
        VALUES (:fname, :username, :email, :pass)');

        $query->bindParam(':fname', $request['fname']);
        $query->bindParam(':username', $request['username']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':pass', $request['pass']);
        $query->execute();

        return header('Location: test.php');
    }

    public function register($request){
        $query = $this->db->pdo->prepare('INSERT INTO users (fname, username, email, pass) 
        VALUES (:fname, :username, :email, :pass)');

        $query->bindParam(':fname', $request['fname']);
        $query->bindParam(':username', $request['username']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':pass', $request['pass']);
        $query->execute();

        return header('Location: index.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from users WHERE ID = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }
    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE users SET fname = :fname, username = :username, email = :email, pass = :pass 
        WHERE ID = :id');

        $query->bindParam(':fname', $request['fname']);
        $query->bindParam(':username', $request['username']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':pass', $request['pass']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: test.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from users WHERE ID = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: test.php');
    }
}
?>
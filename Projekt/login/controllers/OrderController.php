<?php
require_once '../config/Database.php';

class OrderController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD Form Code

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from orders');

        return $query->fetchAll();
    }

    public function insert($request){
        $query = $this->db->pdo->prepare('INSERT INTO orders (name,tel,message,address ) 
        VALUES (:name, :tel, :message, :address )');

        $query->bindParam(':name', $request['name']);
        $query->bindParam(':tel', $request['tel']);
        $query->bindParam(':message', $request['message']);
        $query->bindParam(':address', $request['address']);
        
        $query->execute();

        return header('Location: testO.php');
    }

    public function order($request){
        $query = $this->db->pdo->prepare('INSERT INTO orders (name,tel,message,address) 
        VALUES (:name, :tel, :message, :address)');

        $query->bindParam(':name', $request['name']);
        $query->bindParam(':tel', $request['tel']);
        $query->bindParam(':message', $request['message']);
        $query->bindParam(':address', $request['address']);
        $query->execute();


        return header('Location: Home.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from orders WHERE ID = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }
    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE orders SET name = :name, tel = :tel, message = :message, address = :address
        WHERE ID = :id');

        $query->bindParam(':name', $request['name']);
        $query->bindParam(':tel', $request['tel']);
        $query->bindParam(':message', $request['message']);
        $query->bindParam(':address', $request['address']);
       
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: testO.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from orders WHERE ID = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: testO.php');
    }
}
?>
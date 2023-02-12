<?php
require_once '../config/Database.php';

class ColumnController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD Form Code

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from img_columns');

        return $query->fetchAll();
    }

    public function insert($request){
        $request['img'] = 'img/'.$request['img'];
        $query = $this->db->pdo->prepare('INSERT INTO img_columns (img, title, description) 
        VALUES (:img, :title, :description)');

        $query->bindParam(':img', $request['img']);
        $query->bindParam(':title', $request['title']);
        $query->bindParam(':description', $request['description']);
        $query->execute();

        return header('Location: testC.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from img_columns WHERE ID = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }
    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE img_columns SET img = :img, title = :title, description = :description 
        WHERE ID = :id');

        $query->bindParam(':img', $request['img']);
        $query->bindParam(':title', $request['title']);
        $query->bindParam(':description', $request['description']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: testC.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from img_columns WHERE ID = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: testC.php');
    }
}
?>
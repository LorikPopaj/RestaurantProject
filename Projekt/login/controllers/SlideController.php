<?php
require_once '../config/Database.php';

class SlideController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD Form Code

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from slideshow');

        return $query->fetchAll();
    }

    public function insert($request){
        $request['img'] = 'img/'.$request['img'];
        $query = $this->db->pdo->prepare('INSERT INTO slideshow (img) 
        VALUES (:img)');

        $query->bindParam(':img', $request['img']);
        $query->execute();

        return header('Location: test2.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from slideshow WHERE ID = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }
    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE slideshow SET img = :img 
        WHERE ID = :id');

        $query->bindParam(':img', $request['img']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: test2.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from slideshow WHERE ID = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: test2.php');
    }
}
?>
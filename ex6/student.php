<?php
require_once("connexion.php");
require_once("repository.php");
class Student{
    
    protected $db;
    protected $tableName;
    protected $repository;
    public function __construct()
    {
        $this->db = connexion::getInstance();
        $this->tableName = "student";
        $this->repository = new repository();
       
    }
    public function findAll()
    {
        $elements = $this->repository->findAll($this->tableName);
        return $elements;
    }
    public function findById($id)
    {
        $stmt=$this->repository->findById($id,$this->tableName);
        return $stmt;
    }
    public function delete( $id)
    {
        $this->repository->delete($this->tableName, $id);
    }
    public function create($data)
    {   
        $this->repository->create($this->tableName, $data);
    }
}
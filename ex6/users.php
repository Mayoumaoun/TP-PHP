<?php
require_once("connexion.php");
class User{
    
    protected $db;
    protected $tableName;
    protected $repository;
    public function __construct()
    {
        $this->db = connexion::getInstance();
        $this->tableName = "user";
        $this->repository = new repository();
       
    }
    public function findAll()
    {
        $elements = $this->repository->findAll($this->tableName);
        return $elements;
    }
    public function findById($id)
    {
       $elements=$this->repository->findById($id,$this->tableName);
        return $elements;
    }
    public function delete( $id)
    {
        $this->repository->delete($this->tableName, $id);
    }
    public function create($data)
    {   
        $elements=$this->repository->create($this->tableName, $data);
        
        return $elements; 
    }
   
}
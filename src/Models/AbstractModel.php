<?php
namespace Danilo\Receitas\Models;
use Danilo\Receitas\Helpers\Database\Database;

abstract class AbstractModel{
    
    public $table;
    protected Database $database;
    protected $connect;
    public function __construct(){
        $this->database = new Database();
        $this->connect = $this->database->execute();
    }

    public function create($data){
        try{
            $colunm = "";
            $values = "";
            foreach($data as $key=>$value){
                $colunm .= "$key,";
                $values .= ":$key,";
            }
            $colunm = rtrim($colunm,",");
            $values = rtrim($values,",");
            $table = $this->table;
            $sql = "INSERT INTO $table ($colunm) VALUES ($values)";
            $stmt = $this->connect->prepare($sql);
            if ($stmt->execute($data)){
                return $this->connect->lastInsertId();

            }
            return false;
        }catch(\Exception $e){
            return false;  

        }
    }

    public function findOne($condition, $colunm = "*"){
        $where = "";
        foreach($condition as $key => $value){
            $where.= "$key =:$key AND ";
            
        }
        $where = rtrim($where, "AND ");
        $table = $this->table;
        $sql = "SELECT $colunm FROM $table WHERE ".$where;

        $stmt = $this->connect->prepare($sql);
        $stmt->execute($condition);    
        return $stmt->fetchObject();

    }

    public function findAll($condition = "1", $colunm = "*"){
        $where = "";
        if($condition !="1"){
            $where = "";
            foreach($condition as $key => $value){
                $where.= "$key = :$key AND ";
                
            }
            $where = rtrim($where, "AND ");
        } else {
            $where = "1";
        }
        
        $table = $this->table;
        $sql = "SELECT $colunm FROM $table WHERE" .$where;
        $stmt = $this->connect->prepare($sql);
        if($condition !="1"){
            $stmt->execute($condition); 
        }
        else{
            $stmt->execute();
        }  
        return $stmt->fetchAll();
    }

    public function update(){

    }

    public function delete(){
    
    }
}
?>
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

    public function findOne(){

    }

    public function findAll(){
        
    }

    public function update(){

    }

    public function delete(){
    
    }
}
?>
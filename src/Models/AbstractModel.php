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

        return $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
    }

    public function findAll($condition = [], $column = "*")
    { 
        $where = "";
        if (count($condition) > 0) {
            foreach ($condition as $key => $value) {
                $where.= "$key = :$key AND ";
            }
            $where = rtrim($where, "AND ");
        } else {
            $where = "1";
        }
      
        $table = $this->table;
        $sql = "SELECT $column FROM $table WHERE " .$where;
        $stmt = $this->connect->prepare($sql);
        if (count($condition) > 0)  {
            $stmt->execute($condition);
        } else {
            $stmt->execute();
        }
        
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function update($data, $id)
    {
        try {
            $set = "";
            foreach($data as $key => $value) {
                $set .= "$key = :$key,";
            }
            
            $set = rtrim($set, ",");
            $table = $this->table;
            $sql = "UPDATE $table SET $set WHERE id = :id";
         
            $stmt = $this->connect->prepare($sql);
            $data["id"] = $id;
            if ($stmt->execute(params: $data)) {
                return true;
            }

            return false;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete($id){
        $table = $this->table;
        $sql = "DELETE FROM $table WHERE id= :id";

        $stmt = $this->connect->prepare($sql);
        $response = $stmt->execute([
            'id'=> $id
        ]);
        if($response){
            return true;
        }
        return false;
    }
}
?>
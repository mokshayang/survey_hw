<?php
date_default_timezone_set("Asia/Taipei");
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
function q($sql){
    global $pdo;
    $dsn="mysql:host=localhost;charset=utf8;dbname=opinion";
    $pdo=new PDO($dsn,'root','');
    return $pdo->query($sql)->fetchAll();
}
function to($location){
    header("location:$location");
}

class DB
{
    protected $table;
    protected $dsn="mysql:host=localhost;charset=utf8;dbname=opinion";
    protected $pdo;
    function __construct($table)
    {
        $this->pdo=new PDO($this->dsn,'root','');
        $this->table=$table;
    }
    //for public each
    private function arrayToSqlArray($array){
        foreach ($array as $key => $value) {
            $tmp[]="`$key`='$value'";
        }
        return $tmp;
    }
    //for public math
    private function mathSql($math,$col,...$arg){
        if(isset($arg[0])){
            foreach ($arg[0] as $key => $value) {
                $tmp[]="`$key`='$value'";
            }
            $sql = "SELECT $math($col) FROM $this->table WHERE ";
            $sql .= join(" && ",$tmp);
        }else{
            $sql = "SELECT $math($col) FROM $this->table";
        }
        return $sql;
    }
    //CRUD
    function all(...$args){
        $sql="SELECT * FROM $this->table";
        if(isset($args[0])){
            if(is_array($args[0])){
                $tmp = $this->arrayToSqlArray($args[0]);
                $sql .=" WHERE " . join(" && ",$tmp);
            }else{
                $sql .= $args[0];
            } 
        }
        if(isset($args[1])){
            $sql .= $args[1];
        }
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    function find($id){
        $sql = "SELECT * FROM $this->table ";
        if(is_array($id)){
            $tmp = $this->arrayToSqlArray($id);
            $sql .= " WHERE " . join(" && ", $tmp);
        }else{
            $sql .= " WHERE `id` = $id ";  
        }
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    function del($id){
        $sql = "DELETE FROM $this->table ";
        if(is_array($id)){
            $tmp = $this->arrayToSqlArray($id);
            $sql .= " WHERE " .join(" && ", $tmp);
        }else{
            $sql .= " WHERE `id` = '$id'";
        }
        return $this->pdo->exec($sql);
    }
    function save($array){
        if(isset($array['id'])){
            $id=$array['id'];
            unset($array['id']);
            $tmp = $this->arrayToSqlArray($array);
            $sql = "UPDATE $this->table SET ";
            $sql .= join(" , ", $tmp);
            $sql .= " WHERE `id` = $id";
        }else{
            $cols = array_keys($array);
            $sql = "INSERT INTO $this->table (`" . join("`,`" , $cols) . "`)
                                    VALUES ('" . join("','" , $array) . "')";
        }
        dd($sql);
        return $this->pdo->exec($sql);
    }
    //math mod
    function sum($col,...$arg){
        $sql=$this->mathSql("sum",$col,...$arg);
        return $this->pdo->query($sql)->fetchColumn();
    }
    function min($col,...$arg){
        $sql=$this->mathSql("min",$col,...$arg);
        return $this->pdo->query($sql)->fetchColumn();
    }
    function max($col,...$arg){
        $sql=$this->mathSql("max",$col,...$arg);
        return $this->pdo->query($sql)->fetchColumn();
    }
    function avg($col,...$arg){
        $sql=$this->mathSql("avg",$col,...$arg);
        return $this->pdo->query($sql)->fetchColumn();
    }
    function count(...$arg){
        $sql=$this->mathSql("count","*",...$arg);
        return $this->pdo->query($sql)->fetchColumn();
    }


}
$user = new DB("users_hw");
$admin = new DB("admin_hw");
$subject = new DB("survey_subject_hw");
$options= new DB("survey_options_hw");
$log = new DB("survey_log_tw");

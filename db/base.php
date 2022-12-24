<?php
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
    //for public
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
        dd($sql);
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    



}
$user = new DB("users_hw");
$admin = new DB("admin_hw");
$subject = new DB("survey_subject_hw");
$options= new DB("survey_options_hw");
$log = new DB("survey_log_tw");
$a=$user->all(['pw'=>123],"order by `id` desc ");
dd($a);
echo "<hr>";
$b=$admin->all();
dd($b);


?>
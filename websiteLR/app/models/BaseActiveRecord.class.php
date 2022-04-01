<?php
class BaseActiveRecord{
    public static $pdo;
    protected static $order;
    protected static $tablename;
    protected static $dbfields = array();
    protected static $fieldsVal= array();
    public function __construct() {
    }
    public static function send(){
        static::setupConnection();
        static::save();
    }

    public static function setupConnection() {
        if (!isset(static::$pdo)) {
            try {
                static::$pdo = new PDO('mysql:host=localhost;dbname=review', 'root', 'daria23122001', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                echo "ок";
            } catch (PDOException $ex) {
                die("Ошибка подключения к БД: $ex");
            }

        }
    }
    public function select(){
        self::setupConnection();
        $sql="SELECT * FROM ".static::$tablename.static::$order;
        echo"$sql";
        echo "<br>";
        $stmt=static::$pdo->query($sql);
        while ($row=$stmt->fetch()){
            foreach (static::$dbfields as $colum ){
            echo $row[$colum]." ";
            }
            echo "<br>";
            echo"-------------------------------------------------------------------";
            echo "<br>";

        }
    }
    public function selectReturn(){
        self::setupConnection();
        $sql="SELECT * FROM ".static::$tablename.static::$order;
        echo"$sql";
        echo "<br>";
        $stmt=static::$pdo->query($sql);
            echo"-------------------------------------------------------------------";
            echo "<br>";
            return $stmt;

        }
    public function findBy($fieldName,$fieldVale){
        $sql="SELECT * FROM ".static::$tablename." WHERE ".$fieldName."=:value";
        $stmt=static::$pdo->prepare($sql);
        $stmt->execute([':value'=>$fieldVale]);
        $pageData=$stmt->fetch();
        $this->setValues($pageData);
    }


    public function setValues($values){
        foreach (static::$dbfields as $fieldName){
            $this->$fieldName=$values[$fieldName];
            echo"$fieldName=$values[$fieldName]; ";
        }
    }

    public static function save() {
        echo ("hfjd");
        $value=[];
        foreach (static::$fieldsVal as &$value){
            $value="'$value'";
        }
        $val_str=implode(", ",static::$fieldsVal );
        echo"$val_str";
        try {
            $myPDO = new PDO('mysql:host=localhost;dbname=review', 'root', 'daria23122001', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $sql = "INSERT INTO ".static::$tablename." VALUES ($val_str)";
            $statement = $myPDO->query($sql);
            echo "Запись сохранена";
        }
        catch(PDOException $ex){
            die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
        }
    }
    public function delete($fielDName,$fielDel){
        $sql = "DELETE FROM ".static::$tablename." WHERE ". $fielDName."= '".$fielDel."'";
        echo $sql;
        $stmt = static::$pdo->query($sql);
        if($stmt){
            echo"Deleted";
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }else{
            print_r(static::$pdo->errorInfo());
        }
    }
}
/*class BaseActiveRecord{
    public static $pdo;
    protected static $tablename;
    protected static $dbfields = array();
    protected static $fieldsVal= array();
    public function __construct() {
        static::setupConnection();
        $this->save();
    }

    public static function setupConnection() {
        if (!isset(static::$pdo)) {
            $eror = false;
            try {
                static::$pdo =new PDO('mysql:host=localhost;dbname=review', 'root', 'daria23122001', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (PDOException $ex) {
                die("Ошибка подключения к БД: $ex");
            }
        }
    }

    public function save() {
        $sql = "INSERT INTO".static::$tablename." VALUES ('gvg','1','2','3','4','5')";
        $statement = static::$pdo->prepare($sql);
        if($statement){
            return $statement->fetch(PDO::FETCH_ASSOC);
        }else{
            print_r(static::$pdo->errorInfo());
        }
    }
    public function findBy($fieldName,$fieldVale){
        $sql="SELECT * FROM ".static::$tablename."WHERE ".$fieldName."=:value";
        $stmt=static::$pdo->prepare($sql);
        $stmt->execute([':value'=>$fieldVale]);
        $pageData=$stmt->fetch();
        $this->setValues($pageData);
    }

    public function setValues($values){
        foreach (static::$dbfields as $fieldName){
            $this->$fieldName=$values[$fieldName];
        }

    }
/*
    public function __construct() {
        if (!static::$tablename){
            return ;
        }
        static::setupConnection();
        static::getFields();
    }

    public static function getFields() {
        $stmt = static::$pdo->query("SHOW FIELDS FROM ".static::$tablename);
        while ($row = $stmt->fetch()) {
            static::$dbfields[$row['Field']] = $row['Type'];
        }
    }

    public static function setupConnection() {
        if (!isset(static::$pdo)) {
            $eror = false;
            try {
                static::$pdo =new PDO('mysql:host=localhost;dbname=review', 'root', 'daria23122001', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (PDOException $ex) {
                die("Ошибка подключения к БД: $ex");
            }
        }
    }

    public static function find($id){
        $sql = "SELECT * FROM ".static::$tablename." WHERE id=$id";
        $stmt = static::$pdo->query($sql);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
 $ar_obj = new static();
 foreach ($row as $key => $value) {
     $ar_obj ->$key = $value;
 }
 return $ar_obj;
 }

    public function save() {
    $sql = "INSERT INTO".static::$tablename." VALUES (".$this->id.");";
        $stmt = static::$pdo->query($sql);
        if($stmt){
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }else{
            print_r(static::$pdo->errorInfo());
        }
    }

    public function delete(){
        $sql = "DELETE FROM".static::$tablename." WHERE ID=".$this->id.");";
        $stmt = static::$pdo->query($sql);
        if($stmt){
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }else{
            print_r(static::$pdo->errorInfo());
        }
    }*/


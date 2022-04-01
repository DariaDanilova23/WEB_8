<?php
Class VizitorModel extends BaseActiveRecord
{
    private $fio;
    private $p;
    private $email;
    private $message;
    private $date;
public function start($post){
    $p=$post;
    $fio=$p['fio'];
    $email=$p['email'];
    $date=date("d.m.y");
    $message=$p['message'];
    static::$tablename = 'messages';
    static::$fieldsVal = [
        $fio,
        $date,
        $email,
        $message
    ];
    echo"<br>";
    echo  " $message";
    $set=new BaseActiveRecord();
    $set->send();
    echo"<br>";
}
    public function post_review(){
    echo"hear";
        static::$order=' ORDER BY dateM';
        static::$dbfields=[
            'fio',
            'dateM',
            'email',
            'textM'
        ];
        static::$tablename = 'messages';
        $set=new BaseActiveRecord();
        $set->select();
    }
}
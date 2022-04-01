<?php
Class Test extends BaseActiveRecord
{
    public function saveAnwsers($post)
    {
        $p = $post;
        $fio = $p['FIO'];
        $Q1 = $p['q1'];
        $Q2 =  $p['q2'];
        $Q3 = $p['q3'];
        $Q4 = $p['q4'];
        $Q5 = $p['q5'];
        static::$tablename = 'testanswers';
        static::$fieldsVal = [
            $fio,
            $Q1,
            $Q2,
            $Q3,
            $Q4,
            $Q5
        ];
        static::$dbfields=[
            'fio','q1','q2','q3','q4','q5'
        ];
        $save=new BaseActiveRecord;
        $save->send();
    }
   /* public function show()
    {

        static::$order=" WHERE fio=1";
        static::$dbfields=[
            'fio',
            'q1',
            'q2',
            'q3',
            'q4',
            'q5'
        ];
        static::$tablename = 'testanswers';
        $set=new BaseActiveRecord();
        $set->select();
    }*/
}
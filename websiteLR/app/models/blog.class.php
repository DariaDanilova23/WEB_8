<?php
class Blog extends BaseActiveRecord {
    public function write($post){
        $date=date('d.m.y');
        $text=$post['textB'];
        echo"$text";
        static::$tablename = 'blog';
        static::$fieldsVal = [
            $date,
            $text
        ];
        $save=new BaseActiveRecord();
        $save->send();

    }
    public function show(){
        static::$order=' ORDER BY date';
        static::$tablename = 'blog';
        static::$dbfields=[
            'date','text'
        ];
        $s=new BaseActiveRecord();
        $r=$s->selectReturn();
        return $r;
    }
    public function del($texts){
        static::$tablename = 'blog';
        static::$dbfields=[
            'date','text'
        ];
        $delete=new BaseActiveRecord();
        $delete->delete('text',$texts);
    }
}

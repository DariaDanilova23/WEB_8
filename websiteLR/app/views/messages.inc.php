<?php

 /*   if (isset($_POST['submit'])){
        $fio=$_POST['fio'];
        $email=$_POST['email'];
        $message=$_POST['message'];

    }*/

$fio= $email=$message='new_7';
include("../core/BaseActiveRecord.class.php");
include("../models/vizitorModel.class.php");
$send=new vizitor($fio,$email,$message);
header("location:../vizitorModel.class.php?error=none");


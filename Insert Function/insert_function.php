<?php
require_once 'database_config.php';
$con=connect();
if(isset($_POST['submit'])){
    $insert=insert($con,$_POST['table'],
        array(
            'fname' => $_POST['fname'],
            'lname' => $_POST['lname'],
            'city' => $_POST['city'],
        ));
    if($insert){
        header('location:index.php?success');
    }else{
        header('location:index.php?error');
    }
}else{
    header('location : index.php');
}

function insert($connect,$table,$assoc_array){
    foreach($assoc_array as $key => $value){
        $k[]=$key;
        $v[]="'".$value."'";
    }
    $k=implode(",",$k);
    $v=implode(",",$v);
    $sql="INSERT INTO $table($k) VALUES($v)";
    $exe=mysqli_query($connect,$sql);
    if($exe){
        return true;
    }else{
        return false;
    }
}
?>
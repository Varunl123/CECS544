<?php
    $connection=mysqli_connect("localhost","root","","bughound");
    mysqli_set_charset($connection,'utf-8');
    $id=isset($_GET['id'])?$_GET['id']:"";
    $query="SELECT * FROM attachment where attachment_id='$id'";
    $result=mysqli_query($connection,$query) or die("Erro,query failed");
    list($attachment_id,$name,$type,$content)=mysqli_fetch_array($result);
    header("Content-type:$type");
    header("Content-Disposition:inline;filename=$name");
    header("Content-Transfer-Encoding: binary\n");
    echo $content;
    
?>
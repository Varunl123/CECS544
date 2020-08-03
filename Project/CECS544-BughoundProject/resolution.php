<?php
    $output='';
    $count=1;
    $output.='<option value="">Select Resolution Version</option>';
    while($count<=10){
    $output.='<option value="'.$count.'">'.$count.'</option>';
    $count=$count+1;
    }
    echo $output;
?>
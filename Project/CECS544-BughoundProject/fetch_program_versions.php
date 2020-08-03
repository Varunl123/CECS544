<?php
$connect=mysqli_connect("localhost","root","","bughound");
$output='';
$sql="SELECT * FROM program where prog_id='".$_POST["programId"]."'";
$result=mysqli_query($connect,$sql);
$rowCount=mysqli_num_rows($result);

if($rowCount>0){
    $output.='<option value="">Select resolution Versions</option>';
while($row=mysqli_fetch_array($result)){
    $output.='<option value="'.$row["program_release"].' '.$row["program_version"].'">'.$row["program_release"].' '.$row["program_version"].'</option>';

}
echo $output;
}
else{
    echo '<option value="">version not available</option>';
}
?>
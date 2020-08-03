<?php   
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"bughound");
$connect=mysqli_connect('localhost','root','','bughound');
?>
<?php   
       
        if(isset($_POST['btn'])){
            $dbh=new PDO("mysql:host=localhost;dbname=bughound","root","");
            if($_FILES['myfile']['name']==""){
              echo '<script>alert("Please select a file to upload !")</script>';
            }
            else{
                $name=$_FILES['myfile']['name'];
                $type=$_FILES['myfile']['type'];
            $data=file_get_contents($_FILES['myfile']['tmp_name']);
            $stmt=$dbh->prepare("INSERT INTO attachment values('',?,?,?,?)");
            $stmt->bindParam(1,$name);
            $stmt->bindParam(2,$type);
            $stmt->bindParam(3,$data);
            $stmt->bindParam(4,$_GET['data']);

            if($stmt->execute())
            {
                echo '<script> alert("File uploaded successfully !")</script>';
            }
            else
                echo '<script> alert("File Upload failed !")</script>';
         }
    }
?>
<?php
if(isset($_POST['cancel'])){
    header("Location:welcome.php");
}
if(isset($_POST['B4'])){

    if(isset($_POST['programs'])){
        $programs=mysqli_real_escape_string($connect,$_POST['programs']);
    }
    if(isset($_POST['reportType'])){
        $reportType=mysqli_real_escape_string($connect,$_POST['reportType']);
    }
    if(isset($_POST['severity']))
    {
      $severity=mysqli_real_escape_string($connect,$_POST['severity']);
    }
    if(isset($_POST['problem_summary'])){
        $problem_summary=mysqli_real_escape_string($connect,$_POST['problem_summary']);
    }
    if(isset($_POST['problem'])){
        $problem=mysqli_real_escape_string($connect,$_POST['problem']);
    }
    if(isset($_POST['suggestedFix'])){
        $suggestedFix=mysqli_real_escape_string($connect,$_POST['suggestedFix']);
    }
    if(isset($_POST['reportedBy'])){
        $reportedBy=mysqli_real_escape_string($connect,$_POST['reportedBy']);
    }
    if(isset($_POST['reportedDate'])){
        $reportedDate=mysqli_real_escape_string($connect,$_POST['reportedDate']);
    }
    if(isset($_POST['functionalAreas'])){
        $functionalAreas=mysqli_real_escape_string($connect,$_POST['functionalAreas']);
    }
    if(isset($_POST['assignedTo'])){
        $assignedTo=mysqli_real_escape_string($connect,$_POST['assignedTo']);
    }
    if(isset($_POST['status'])){
        $status=mysqli_real_escape_string($connect,$_POST['status']);
    }
    if(isset($_POST['priority'])){
        $priority=mysqli_real_escape_string($connect,$_POST['priority']);
    }
    if(isset($_POST['resolution'])){
        $resolution=mysqli_real_escape_string($connect,$_POST['resolution']);
    }
    if(isset($_POST['resolutionVersion'])){
        $resolutionVersion=mysqli_real_escape_string($connect,$_POST['resolutionVersion']);
    }
    if(isset($_POST['resolvedBy'])){
        $resolvedBy=mysqli_real_escape_string($connect,$_POST['resolvedBy']);
    }
    if(isset($_POST['resolvedDate'])){
        $resolvedDate=mysqli_real_escape_string($connect,$_POST['resolvedDate']);
    }
    if(isset($_POST['testedBy'])){
        $testedBy=mysqli_real_escape_string($connect,$_POST['testedBy']);
    }
    if(isset($_POST['testedDate'])){
        $testedDate=mysqli_real_escape_string($connect,$_POST['testedDate']);
    }
    if(isset($_POST['comments'])){
        $comments=mysqli_real_escape_string($connect,$_POST['comments']);
    }
    if(isset($_POST['reproducible'])){
        $reproducible=mysqli_real_escape_string($connect,$_POST['reproducible']);
    }
    if(isset($_POST['deferred'])){
        $deferred=mysqli_real_escape_string($connect,$_POST['deferred']);
    }
    $programs=!empty($programs)? "'$programs'":"NULL";
    $reportedBy=!empty($reportedBy)? "'$reportedBy'":"NULL";
    $functionalAreas=!empty($functionalAreas)? "'$functionalAreas'":"NULL";
    $assignedTo=!empty($assignedTo)? "'$assignedTo'":"NULL";
    $resolvedBy=!empty($resolvedBy)? "'$resolvedBy'":"NULL";
    $testedBy=!empty($testedBy)? "'$testedBy'":"NULL";

    $connect=mysqli_connect('localhost','root',"",'bughound');
 
    if(mysqli_connect_errno($connect))
    {
        echo 'Failed to connect';
    }
    $bug=$_GET['data'];
    $query="UPDATE `bug` SET 
    `Program`=$programs,
    `Report_type`='$reportType',
    `Severity`='$severity',
    `Functional_area`=$functionalAreas,
    `Assigned_to`=$assignedTo,
    `Status`='$status',
    `Priority`='$priority',
    `Resolution`='$resolution',
    `Reported_by`=$reportedBy,
    `Report_date`='$reportedDate',
    `Resolved_by`=$resolvedBy,
    `Tested_by`=$testedBy,
    `Resolved_date`='$resolvedDate',
    `Tested_date`='$testedDate',
    `Problem_summary`='$problem_summary',
    `Suggested_fix`='$suggestedFix',
    `Resolution_version`='$resolutionVersion',
    `Problem`='$problem',
    `Comments`='$comments',
    `Reproducible`='$reproducible',
    `Treat as deferred?`='$deferred' WHERE `BugID`='$bug'";
    if(mysqli_query($connect,$query)){
        
        echo '<script language="javascript">';
        echo 'alert("Bug record updated successfully")';
        echo '</script>';
    }
    else{
        echo "No records updated!";
    }

}
?>
<?php

$bugID=$_GET['data'];


$conn=new mysqli("localhost","root","","bughound");
if($conn->connect_error)
{ 
 die("connection failed:" . $conn->connect_error);
}

$q="SELECT * from bug where `BugID`=$bugID";
$r=$conn->query($q);    
$n=$r->num_rows;    
if($n>0){
    while($ro=mysqli_fetch_row($r)) {
        $prog=$ro[1];
        $area=$ro[4];
        $rtype=$ro[2];
        $sev=$ro[3];
        $assTo=$ro[5];
        $st=$ro[6];
        $pr=$ro[7];
        $res=$ro[8];
        $reportby=$ro[9];
        $testby=$ro[12];
        $resolveby=$ro[11];
        $resver=$ro[17];
        $reportdate=$ro[10];
        $prob_summary=mysqli_real_escape_string($conn,$ro[15]);
        $prob=mysqli_real_escape_string($conn,$ro[18]);
        $comm=mysqli_real_escape_string($conn,$ro[19]);
        $suggest_fix=mysqli_real_escape_string($conn,$ro[16]);
        $reportd=$ro[10];
        $testd=$ro[14];
        $resold=$ro[13];
        $repoduce=$ro[20];
        $treat=$ro[21];
    }
    
}
?>
<html>
<head>
<title>Bug Update Page </title>
<style>
.container{
    background-color: lightgrey;
  width: 300px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
    
}
</style>
<script src="jquery-3.4.1.min.js"></script>
<script type="text/javascript">
function fun(){
    var element=document.getElementById('displayAttach').value;
    var url="view.php?id="+element;
    window.location.href=url;
}
</script>

<script type="text/javascript">
$(document).ready(function(){
    $('#programs').on('change',function(){
        var program_id=$(this).val();
        if(program_id){
            $.ajax({
                url:'fetch_areas.php',
                type:'POST',
                data:'programId='+program_id,
                dataType:'text',
                success:function(html){
                     $('#functionalAreas').html(html);
                               
                }
         });
        }
        else{
            $('#functionalAreas').html('<option value="">Select program first</option>');    
        }
    }); 
});

$(document).ready(function(){
    $('#resolution').on('change',function(){
        var resolution_id=$(this).val();
        if(resolution_id){
                $.ajax({
                                url:'resolution.php',
                                type:'POST',
                                data:'resolutionId='+resolution_id,
                                
                                dataType:'text',
                                success:function(html){
                                $('#resolutionVersion').html(html);
                                
                                }
                        });
                        
        
        }
        else{
            $('#resolutionVersion').html('<option value="">Select resolution first</option>');
           
        }
    });
    
});
</script>
<script type="text/javascript">
    var rtype="<?php echo $rtype ?>";
    var sev="<?php echo $sev ?>";
    var assTo="<?php echo $assTo ?>";
    var st="<?php echo $st ?>";
    var pr="<?php echo  $pr ?>";
    var res="<?php echo  $res ?>";
    var reportby="<?php echo $reportby ?>";
    var testby="<?php echo  $testby ?>";
    var resolveby="<?php echo $resolveby ?>";
    var resver="<?php echo $resver ?>";
    var prog="<?php echo $prog ?>";
    var area="<?php echo $area ?>";
    var prob_summary="<?php echo $prob_summary ?>";
    var comm="<?php echo $comm ?>";
    var suggest_fix="<?php echo $suggest_fix ?>";
    var prob="<?php echo $prob ?>";
    var reportd="<?php echo $reportd ?>";
    var resold="<?php echo $resold ?>";
    var testd="<?php echo $testd ?>";
    var repoduce="<?php echo $repoduce ?>";
    var treat="<?php echo $treat ?>";
    $(document).ready(function(){
    $('select[name="programs"]').first().val(prog);
   // $('#functionalAreas option[value='area']').attr('selected','selected');
    $('select[name="functionalAreas"]').first().val(area);
    $('select[name="reportType"]').first().val(rtype); 
    $('select[name="severity"]').first().val(sev);
    $('select[name="assignedTo"]').first().val(assTo);
    $('select[name="status"]').first().val(st);
    $('select[name="priority"]').first().val(pr);
    $('select[name="resolution"]').first().val(res);
    $('select[name="reportedBy"]').first().val(reportby);
    $('select[name="testedBy"]').first().val(testby);
    $('select[name="resolvedBy"]').first().val(resolveby);
    //$('#resolutionVersion option[value='resver']').attr('selected','selected');
    $('#resolutionVersion').first().val(resver);
    $('select[name="reproducible"]').first().val(repoduce);
    $('select[name="deferred"]').first().val(treat);
    $('#problem_summary').val(prob_summary);
    $('#problem').val(prob);
    $('#suggestedFix').val(suggest_fix);
    $('#comments').val(comm);
    $('#dateReported').val(reportd);
    $('#dateTested').val(testd);
    $('#dateResolved').val(resold);
});
</script>
</head>
 
<body bgcolor="#FFFFFF">
    <form name="Edit" action="" method="post">
        <table align="center" width=60% width="100%" cellspacing="4" cellpadding="2" border="5">
            <tr>
                <td colspan="4" align="center"><b>Bug Update Page</b></td>
 
            </tr>
            <tr>
                <td align="left" valign="top" width="100%">Program</td>
                <td width="60%">
                <select name="programs" id="programs" required>
                        <option value="">Select Programs</option>
                        <?php 
                            $result=mysqli_query($link,"select * from program");
                            $rowCount=mysqli_num_rows($result);
                            if($rowCount>0){
                            while($row=mysqli_fetch_array($result))
                            {
                                ?>
                            <option value=<?php echo $row["prog_id"];?>><?php echo $row["program_name"]." ".$row["program_release"]." ".$row["program_version"];?></option>
                            <?php
                                }
                            }
                            else{
                                echo '<option value="">Programs not available</option>';
                            }
                         ?>
                </select>
                </td>
            </tr>
            <tr>
        		<td align="left" valign="top" width="41%">Report Type</td>
        		<td width="57%"><select name="reportType" required>
                    <option value="">Select</option>
					<option value="Coding Error">Coding Error</option>
					<option value="Design Issue">Design Issue</option>
					<option value="Suggestion">Suggestion</option>
					<option value="Documentation">Documentation</option> 
					<option value="Hardware">Hardware</option>
					<option value="Query">Query</option>
					</select></td>
 			</tr>
 			<tr>
        		<td align="left" valign="top" width="41%">Severity</td>
        		<td width="57%"><select name="severity" required>
                    <option value="">Select Severity</option>
					<option value="Fatal">Fatal</option>
					<option value="Serious">Serious</option>
					<option value="Minor">Minor</option>
					</select></td>
 			</tr>
            <tr>
                <td align="left" valign="top" width="35%">Problem Summary</td>
 
                <td width="57%"><textarea rows="4" maxlen="200" name="problem_summary" cols="50" id="problem_summary" required></textarea></td>
                <td><label>Reproducible?</label><select name="reproducible"><option value="">Select</option><option value="YES">YES</option><option value="NO">NO</option></td>
             </tr >
             <tr>
                <td align="left" valign="top" width="35%">Problem</td>
 
                <td width="57%"><textarea rows="4" maxlen="200" name="problem" cols="50" id="problem" required></textarea></td>
            </tr >
            <tr>
                <td align="left" valign="top" width="35%">Suggested Fix(Optional)</td>
 
                <td width="57%"><textarea rows="4" maxlen="200" name="suggestedFix" id="suggestedFix" cols="50"></textarea></td>
            </tr >
            <tr>
                <td align="left" valign="top" width="35%">Reported By</td>
 
                <td width="57%">
                
                <select name="reportedBy" required>
                        <option value="">Select User</option>
                        <?php 
                            $result=mysqli_query($link,"select * from employee");
                        
                            while($row=mysqli_fetch_array($result))
                            {
                                ?>
                            <option value=<?php echo $row["emp_id"];?>><?php echo $row["name"];?></option>
                            <?php
                            }
                            ?>
                </select>
                </td>    

                <td align="left" valign="top" width="60%">Date</td>
 
                <td width="57%"><input type="date" id="dateReported" name="reportedDate"  required></td>
            </tr>
            <tr>
                <td align="left" valign="top" width="35%">Functional Area</td>
 
                <td width="57%">
                <select name="functionalAreas" id="functionalAreas">
                        <option value="">Select Areas</option>
                        <?php 
                            $result=mysqli_query($link,"SELECT * from area where prog_id=$prog");
                            $rowCount=mysqli_num_rows($result);
                            if($rowCount>0){
                            while($row=mysqli_fetch_array($result))
                            {
                                ?>
                            <option value=<?php echo $row["area_id"];?>><?php echo $row["functional_area"]?></option>
                            <?php
                                }
                            }
                            else{
                                echo '<option value="">Areas not available</option>';
                            }
                         ?>
                </select>
            
                
                </td>
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">Assigned to</td>
 
                <td width="57%">
                
                <select name="assignedTo" >
                        <option value="">Select User</option>
                        <?php 
                            $result=mysqli_query($link,"select * from employee");
                        
                            while($row=mysqli_fetch_array($result))
                            {
                                ?>
                            <option value=<?php echo $row["emp_id"];?>><?php echo $row["name"];?></option>
                            <?php
                            }
                            ?>
                </select>
                
                </td>
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">Comments</td>
 
                <td width="57%"><textarea rows="4" maxlen="200" name="comments" id="comments" cols="20" ></textarea></td>
            </tr >
            <tr>
                <td align="left" valign="top" width="41%">Status</td>
                <td width="57%"><select name="status" >
                    <option value="Open">Open</option>
                    <option value="Closed">Closed</option>
                    <option value="Resolved">Resolved</option>
                    </select></td>
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">Priority</td>
                <td width="57%"><select name="priority">
                <option value="">Select Priority</option>
                    <option value="1">Fix immediately</option>
                    <option value="2">Fix as soon as possible</option>
                    <option value="3">Fix before next milestone</option>
                    <option value="4">Fix before release</option>
                    <option value="5">Fix if possible</option>
                    <option value="6">Optional</option>
                    </select></td>
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">Resolution</td>
                <td width="57%"><select name="resolution" id="resolution">
                <option value="">Select Resolution</option>
                    <option value="Pending">Pending</option>
                    <option value="Fixed">Fixed</option>
                    <option value="Irreproducible">Irreproducible</option>
                    <option value="Deferred">Deferred</option> 
                    <option value="As assigned">As assigned</option>
                    <option value="Cant fix">Can't fix</option>
                    <option value="Withdrawn by Reporter">Withdrawn by Reporter</option> 
                    <option value="Need more Info">Need more Info</option>
                    <option value="Disagree with suggestion">Disagree with suggestion</option>
                    <option value="Duplicate">Duplicate</option>
                    </select></td>
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">Resolution Version</td>
                <td width="57%"><select name="resolutionVersion" id="resolutionVersion" >
                    <option value="">Select Resolution Version</option>
                    <?php 
                           $count=1;
                            if($res){
                            while($count<=10)
                            {
                                ?>
                            <option value=<?php echo $count;?>><?php echo $count?></option>
                            <?php
                            $count=$count+1;
                                }
                            }
                           
                         ?>
                    </select></td>
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">Resolved By</td>
 
                <td width="57%">
                
                <select name="resolvedBy" >
                        <option value="">Select User</option>
                        <?php 
                            $result=mysqli_query($link,"select * from employee");
                        
                            while($row=mysqli_fetch_array($result))
                            {
                                ?>
                            <option value=<?php echo $row["emp_id"];?>><?php echo $row["name"];?></option>
                            <?php
                            }
                            ?>
                </select>
                
                </td>
                <td align="left" valign="top" width="41%">Date</td>
 
                <td width="57%"><input type="date" id="dateResolved" name="resolvedDate" ></td>
            </tr>
            <tr>
                <td align="left" valign="top" width="41%" >Tested By</td>
 
                <td width="57%">
                
                <select name="testedBy">
                        <option value="">Select User</option>
                        <?php 
                            $result=mysqli_query($link,"select * from employee");
                        
                            while($row=mysqli_fetch_array($result))
                            {
                                ?>
                            <option value=<?php echo $row["emp_id"];?>><?php echo $row["name"];?></option>
                            <?php
                            }
                            ?>
                </select>
                
                </td>
                <td align="left" valign="top" width="41%">Date</td>
 
                <td width="57%"><input type="date" id="dateTested" name="testedDate" ></td>
            </tr>
                <tr>
                    <td><label for="check"> Treat as Deferred ? </label><select name="deferred"><option value="">Select</option><option value="YES">YES</option><option value="NO">NO</option></select>
                    </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p align="center">
                        <input type="submit" value="  Submit" name="B4">
                        <input type="reset" value="  Reset All   " name="reset"></td>
                        
            </tr>
            
        </table>
    </form>
    <div align="center">
        <label for="displayAttach">Open Attachments:</label>
        <select id="displayAttach" >
        <option value="">None</option>
        <?php 
         $conn=new mysqli("localhost","root","","bughound");
         if($conn->connect_error)
         { 
          die("connection failed:" . $conn->connect_error);
         }
            $i=$_GET['data'];
            $query3="SELECT * from attachment where `Bugid`=$i";
            $attachment_result=$conn->query($query3);
            $output="";
            while($arows=mysqli_fetch_row($attachment_result)){
                $output.='<option value="'.$arows[0].'">'.$arows[1].'</option>';
            }
            $output.='</select>';
            echo $output;
            
        ?>
        <button name="viewAttachments" onclick="fun();">Open</button>
        <br>
        <br>
    </div>
    
    <form method="post" enctype="multipart/form-data">
            
        <div align="center">
        <label for="myfile">Attachments:</label>
        <input type="file" id="myfile" name="myfile"/>
        <button name="btn">Upload</button>
        <br>
        <br>
        </div>
    </form>
    <div align="center">
    <button onclick="location.href='Display.php'">Display Records </button>
    <button onclick="location.href='welcome.php'">Cancel</button>
    <button onclick="location.href='logout.php'">Logout</button>
    </div>

</body>
 
</html>

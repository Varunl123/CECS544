

<?php

if(isset($_POST["submit"]))
{
    $program_id=$_POST["programs"];
}
?>

<html>
<body>
<form action="AddedArea.php?data=<?php echo $program_id?>" method="post">

<table align="center" width=40% width="100%" cellspacing="2" cellpadding="2" border="5">
            <tr>
                <td colspan="2" align="center"><b>Edit Area to ID <?php echo $program_id; ?></b></td>
 
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">Area Name</td>
                <td width="57%"><input type="text" value="" name="name" size="24"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <p align="center">
                        <input type="submit" value="submit" name="B4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
            </tr>
</table>
</form>
<button onclick="location.href='dbmaintainence.php'">cancel</button>
</body>
<html>


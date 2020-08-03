<?php
    if(isset($_POST["export"]))
    {
        $tablename=$_POST["table"];
        $connect=mysqli_connect("localhost","root","","bughound");
        if(mysqli_connect_errno($connect))
        {
                echo 'Failed to connect';
        }
        if(isset($_POST['table'])){
            $tablename=$_POST['table'];
            if($tablename=="employee"){
                $query="SELECT * from employee";
                $result=mysqli_query($connect,$query);
                $xml=new DOMDocument("1.0");
                $xml->formatOutput=true;
                $employees=$xml->createElement("employees");
                $xml->appendChild($employees);
            while($row=mysqli_fetch_array($result)){
                $employee=$xml->createElement("employee");
                $employees->appendChild($employee);
                $id=$xml->createElement("EmployeeId",$row['emp_id']);
                $employee->appendChild($id);
                $name=$xml->createElement("EmployeeName",$row['name']);
                $employee->appendChild($name);
                $level=$xml->createElement("Userlevel",$row['level']);
                $employee->appendChild($level); 
            }
            echo "<xmp>".$xml->saveXML()."</xmp>";
            $xml->save("reports.xml");
            
        }
        if($tablename=="area"){

            $query="SELECT * from area";
            $result=mysqli_query($connect,$query);
            $xml=new DOMDocument("1.0");
            $xml->formatOutput=true;
            $areas=$xml->createElement("areas");
            $xml->appendChild($areas);
        while($row=mysqli_fetch_array($result)){
            $area=$xml->createElement("area");
            $areas->appendChild($area);
            $id=$xml->createElement("areaId",$row['area_id']);
            $area->appendChild($id);
            $name=$xml->createElement("FunctionalArea",$row['functional_area']);
            $area->appendChild($name);
            
        }
        echo "<xmp>".$xml->saveXML()."</xmp>";
            $xml->save("reports.xml");
            

        }
        if($tablename=="program"){

            $query="SELECT * from program";
            $result=mysqli_query($connect,$query);
            $xml=new DOMDocument("1.0");
            $xml->formatOutput=true;
            $programs=$xml->createElement("programs");
            $xml->appendChild($programs);
        while($row=mysqli_fetch_array($result)){
            $program=$xml->createElement("area");
            $programs->appendChild($program);
            $id=$xml->createElement("programId",$row['prog_id']);
            $program->appendChild($id);
            $name=$xml->createElement("prograrmName",$row['program_name']);
            $program->appendChild($name);
            $release=$xml->createElement("programRelease",$row['program_release']);
            $program->appendChild($release);
            $version=$xml->createElement("prograrmVersion",$row['program_version']);
            $program->appendChild($version);
            
        }
        echo "<xmp>".$xml->saveXML()."</xmp>";
            $xml->save("reports.xml");
            

        }
    }
        
}
?>
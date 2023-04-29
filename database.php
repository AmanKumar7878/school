<?php $ser_name = "localhost";
$user_name = "root";
$user_password = "";

//  for fetching data from form

$sname=$_POST['s_name'];
$fname=$_POST['s_fname'];
$mname=$_POST['s_mname'];
$uid=$_POST['s_uid'];
$email=$_POST['s_email'];
$address=$_POST['s_address'];
$mobile=$_POST['s_mobile'];
$dob=$_POST['s_dob'];
$class=$_POST['s_class'];

// for making connection to the server

$connection_data = mysqli_connect($ser_name,$user_name,$user_password,"school");
if(!$connection_data){
    echo "Server not connected";
}
else{
    
    // check button is clicked
    

    if(isset($_POST['Register'])){
        
        // insert query


        $insert_query = "INSERT INTO registration(sname,fname,mname,uidno,email,adrs,mobile,dob,class) VALUES('$sname','$fname','$mname','$uid','$email','$address','$mobile','$dob','$class')";
        if(mysqli_query($connection_data,$insert_query)){
            echo'<script> alert("Successfully Stored Data") </script>';
            header("refresh:1,url=onlineform.php");
        }
        else{
            echo "unable to store the data";
            header("refresh:1,url=onlineform.php");
        }
    }
    
} 
?>
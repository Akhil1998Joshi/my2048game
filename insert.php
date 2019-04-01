<?php
$fname = $_POST['name'];
$email = $_POST['email'];
$phn=$_POST['phone'];
$sub=$_POST['message'];
$stars=$_POST['star'];

if (!empty($fname) || !empty($email) || !empty($phn)|| !empty($sub) || !empty($stars)){
    $host ="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="form";
    
    //create connection
    $conn =new mysqli($host,$dbUsername,$dbPassword,$dbname);
    
    if(mysqli_connect_error()){
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        
    }
    else{
        $sql = "INSERT INTO detas (name,email,phone,message,star) values('$fname','$email','$phn','$sub','$stars')";
if ($conn->query($sql)){
echo "Message Sent";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
    
} else{
    echo "All field are required";
    die();
}
?>
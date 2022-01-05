<?php
$name=$_POST['name'];
$mail=$_POST['email'];
$phone=$_POST['number'];
$msg=$_POST['message'];


$servername="localhost";
$username="root";
$password="";
$database="ngo";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
die("failed: ".mysqli_connect_error());
}

$sql="select * from contactform where (email='$mail');";

      $res=mysqli_query($con,$sql);

      if (mysqli_num_rows($res) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($res);
        if($mail==$row['Email'])
        {
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Email Already Exists !');
                window.location.href='contact_us.php';
                </script>");
        }

       } else{ 
                $sql="INSERT INTO contactform(Name,Email,Phone,Massage)
                VALUES('$name','$mail','$phone','$msg')"; 
                $result=mysqli_query($con,$sql);

                if($result){
                        echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Massage Delivered !');
                        window.location.href='contact_us.php';
                        </script>");
                        
                }else{
                        echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Failed To Delivered Massage!');
                        window.location.href='contact_us.php';
                        </script>");
                }
        }


mysqli_close($con);
?>
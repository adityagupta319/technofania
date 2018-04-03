<?php
session_start();
$sign_in=0;
if(($_POST['name']==NULL) || ($_POST['confpass']==NULL) || ($_POST['email']==NULL))
{
  $sign_in=1;
}
else
{
 $sign_in=2;
}
 $localhost="localhost";
 $username="root";
 $password="123456";
 $dbname="techno";
 $conn=mysqli_connect($localhost,$username,$password,$dbname);
 
 if(!$conn)
{
die("connection failed:".$conn->connect_error);
}
if($_SESSION['log']==1)
{
  	echo "<script>alert('Already Log-in');window.location.href='signin.html'</script>";
   exit(1);
}
if ($sign_in==1)
{
$sql = "SELECT * FROM register";
$result = $conn->query($sql);	
		

				if ($result->num_rows > 0) {	
				
					while($row = $result->fetch_assoc()) {
						   if( $row['rollno']==$_POST['roll'] &&  $row['pass'] == $_POST['pass'])
						{
						echo "<script>alert('Welcome User');window.location.href='index.php'</script>";
            $_SESSION['log']=1; 
             $_SESSION['roll']=$row['rollno']; 
                                        
						exit();
						}
				}
        }
         $_SESSION['log']=0;  
         $conn->close();
         echo "<script>alert('your user name or password is in-valid');window.location.href='signin.html'</script>";
         
}
else if($sign_in==2)
{
  $uname=$_POST['name'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
 $conpass=$_POST['confpass'];
	$roll=$_POST['roll'];
 if (!preg_match("/^[a-zA-Z ]*$/",$uname)) {
                    echo "<script>alert('Only letters and white space allowed');window.location.href='signin.html#up'</script>";
						   exit();
   
    }
                if($_POST['pass']!= $_POST['confpass'])
              {
                echo "<script>alert('Password doesn't match');window.location.href='signin.html#up'</script>";
						exit();


}
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       echo "<script>alert('Invalid email');window.location.href='signin.html#up'</script>";
       exit();

    }
    if(strlen($pass) < 8){
	echo "<script>alert('password length must be greater than 8');window.location.href='signin.html#up'</script>";
       exit();
}
 $sql = "SELECT * FROM register";
$result = $conn->query($sql);	
if ($result->num_rows > 0) {	
				
					while($row = $result->fetch_assoc()) {
						if($row['rollno'] == $roll){
							echo "<script>alert('roll number is already exits');window.location.href='signin.html#up'</script>";
						
						exit();
						}
	                    if($row['email'] == $email){
                         							
						echo "<script>alert('email already exits');window.location.href='signin.html#up'</script>";
						
						exit();
						}
                    
  }
  

}

$sql="INSERT INTO register (rollno,name,pass,email) VALUES ('$roll','$uname','$pass','$email')";
if ($conn->query($sql) === TRUE) {
	echo "<script>alert('Registration successfull');window.location.href='index.php'</script>"; 
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

?>
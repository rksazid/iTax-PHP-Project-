<?php
session_start();
$con = mysql_connect("localhost","root","");
    if(!$con){
        die('Could not connect :'. mysql_error());
    }
    mysql_select_db("my_db",$con);
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				$fname = $_POST["fname"];
                
				$lname = $_POST["lname"]; 
                
				$email = $_POST["eMail"]; 
                
				$date = $_POST["date"];
                
                $month = $_POST["month"];
                
                $year = $_POST["year"];
                
				$city = $_POST["city"]; 
                
				$nationality = $_POST["nationality"]; 
               
				$gender = $_POST["gender"];
                
				$uname = $_POST["uname"]; 
                
				$pword = $_POST["pword"];
                
				$rpword = $_POST["rpword"];
                
                $birthday = $date."-".$month."-".$year;
				if($pword === $rpword){
                    move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
                    $file="images/".$_FILES["image"]["name"];
					$sql = "INSERT INTO USER1 VALUES('$fname','$lname','$email','$birthday','$city','$nationality','$gender','$uname','$pword','$file',CURRENT_TIMESTAMP)";
					if(mysql_query($sql,$con)){
						 $sql = "INSERT INTO USER_STATUS VALUES('$uname','offline',CURRENT_TIMESTAMP)";
						 mysql_query($sql,$con);
						 $_SESSION['uname'] = $uname;
						 header('Location:login.php');
						 exit();
					}
					else echo mysql_error();
				}else{
					$_SESSION['password_not_match'] = 1;
					$_SESSION['fname'] = $fname;
					$_SESSION['lname'] = $lname;
					$_SESSION['email'] = $email;
					$_SESSION['date'] = $date;
					$_SESSION['month'] = $month;
					$_SESSION['year'] = $year;
					$_SESSION['city'] = $city;
					$_SESSION['nationality'] = $nationality;
					$_SESSION['gender'] = $gender;
					$_SESSION['uname'] = $uname;
					$_SESSION['pword'] = $pword;
					$_SESSION['rpword'] = $rpword;
					header('Location:create-account.php');
					exit();
				}
			}
		?>
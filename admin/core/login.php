<?php

include("koneksi.php"); //Establishing connection with our database
session_start();
    // Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];





$login     = mysql_query("SELECT * FROM `admin` where username = '$username' and password = '$password' ;");


$ceklogin = mysql_num_rows( $login );


if($ceklogin == 1){
  while ($data=mysql_fetch_array($login)) {
                    $_SESSION['username'] = $username ; // Initializing Session
                    $_SESSION['id_organisasi'] = $data['id_organisasi'];
                    
                }
                echo '<script>window.location = "index.php"</script>';
            } else {

                echo '<script>window.location = "login.php"</script>';
            }





            ?>

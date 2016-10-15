<?php
require_once('connect.php');
session_start();
if (isset($_POST['nim'])) {
  $nim = $_POST['nim'];
  $password = $_POST['password'];
 mysqli_select_db($connect, "k5442245_bnec");
  if($nim && $password)
  {
      $passwordmd5=md5($password);
      $result=mysqli_query($connect,"SELECT * FROM bom WHERE nim='$nim' AND password='$passwordmd5' ");
      $rowAccount=mysqli_fetch_array($result);

      if($rowAccount)
      {
        $_SESSION['name']=$rowAccount['name'];
        $_SESSION['nim']=$rowAccount['nim'];
        header("location:start.php");
      }
      else
      {
        $msg= "Please insert correct NIM and password!";
      } 
  }
  else if(!$nim)
  {
    $msg=  "Please insert your NIM";
  }
  else if(!$password){
    $msg=  "Please insert your Password";
  }


}

?>

<html>
  <head>
  	<?php
  	$title = 'BoM Website - Login';
  	echo "<title>".$title."
  	</title>";
  	?>
  	<?php
  	if(isset($sub)){
  		echo "<link rel='stylesheet' href='../media/bootstrap/css/bootstrap.min.css'>
  			<link rel='stylesheet' href='../media/styles.css'>";
  		}else{
  			echo "<link rel='stylesheet' href='media/bootstrap/css/bootstrap.min.css'>
  			<link rel='stylesheet' href='media/styles.css'>";
  		}
  	?>
  	<meta name="viewport" content="width=device-width, initial-scale=1">	
  	
  	
  </head>

  <body style="background-color:#FAFAFA;">
	   
     <div class="container">
       <div class="row">
          <div class="col-md-12">
            <center>
              <img src="media/images/logo_compress.png" alt="Logo BNEC" width="400" height="142" style="margin-top:5%;" />            
              <div class="login-box" style="margin-top:70px;">

                  
                  <div class="col-md-12 col-xs-12" style="margin-top:40px;">
                    <form action="" method="post">                    
                    <div class="col-md-12 col-xs-12">
                      <input type="text" class="form-control" required name="nim" placeholder="1801405172">
                    </div>
                  </div>
                  <div class="col-md-12 col-xs-12" style="margin-top:15px;">                    
                    <div class="col-md-12 col-xs-12">
                      <input type="password" class="form-control" required name="password" placeholder="mypassword">
                    </div>
                  </div>                  
                  <div class="col-md-12 col-xs-12" style="margin-top:40px;">
                      <input type="submit" value="SIGN IN" class="btn btn-default btn-lg theme-color">
                  </div>
                  </form>
              </div>                          
              </center>
          </div>
       </div>
     </div>
 	 
  </body>
</html>
	<!-- NAV END -->
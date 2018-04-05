<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login to Complain Box</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="icon" href="../pictures/icon/complain.png">
   <!-- <link rel="stylesheet" type="text/css" href="SERVER_PHP/myCss/style002.css"> -->


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

    <script type="text/javascript">
      function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }  
    </script>



    


   
  </head>

  <body>

    

  <div class="container" style="margin-top: 100px">  
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
              <div id="header-div" style="text-align: center;">
                <img id="logo" style="height: 70px; width: 70px; margin-bottom: 20px;" src="../pictures/icon/complain.png">
              </div>
              <h4 id="header-information" style="text-align: center;">Login to Complain Box</h4>

              <br><hr>
              <form action="../serverPHP/adminLoginTest.php" method="POST">
                <div class="form-group" class="tmp">
                  <h4>Email address</h4>
                  <?php  
                    if(isset($_GET['error']) == true) {
                      if($_GET['error'] == 1) {
                        echo '<p style="color:red;">Wrong admin email provided !!!</p>';
                      }
                  
                    }

                  ?>
                  <input type="email" name="email" class="form-control" placeholder="" required>
                </div>


                

                <div class="form-group">
                  <h4>Password</h4>
                  <?php  
                    if(isset($_GET['error']) == true) {
                      if($_GET['error'] == 2) {
                        echo '<p style="color:red;">Wrong Password !!!</p>';
                      }
                    }

                  ?>
                  <input type="password" name="password" id="myInput" class="form-control" placeholder="" required>
                  <input type="checkbox" onclick="myFunction()">Show Password
                </div>

                <div class="form-group">
                  
                  <input type="submit" name="submit" class="btn btn-success btn-lg btn-block btn-sm" value="Login">
                </div>
                <a href="forgotPassword.php">Forgot password?</a>
                 
            </form> 
          </div> 
          <!--<div class="lock"><i class="fa fa-lock fa-3x"></i></div>
          <div class="label">Login Form</div> -->
        </div> 
      </div> 
    </div> 
  </div> <!-- /container -->


  <?php  
                    if(isset($_GET['message']) == true) {
                      //if($_GET['error'] == 2) {
                        echo '<script>window.alert("Recover password link has been sent to your email address. Please recover your password from that link.");</script>';
                      //}
                    }

                  ?>

  </body>
</html>
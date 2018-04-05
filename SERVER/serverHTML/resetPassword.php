







<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Reset Password - Complain Box</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="icon" href="../pictures/icon/complain.png">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   
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
              <h4 id="header-information" style="text-align: center;">Reset Password</h4>
              <br><hr>
              <form method="POST">
                <div class="form-group" class="tmp">
                  <h4>Enter new admin password.</h4>
                  <?php 

                    $id = $_GET['recoveryid'];
                    require_once('../serverPHP/dbConnection.php');

                    $sql = "SELECT * FROM recovery WHERE id = '$id'";
                    $result = mysqli_query($db,$sql);
                    $row = mysqli_fetch_array($result, MYSQLI_NUM);

                    if($row[2] == 'no') {
                      //

                      $date = date('m/d/Y h:i:s a', time());
                      $currrent_time = strtotime($date);
                      $previous_time = strtotime($row[1]);

                      $diff = ($currrent_time - $previous_time)/60;

                      if($diff < 120) {
                        //



                      } 

                      else {
                          header("location: ../../index.php");
                      }


                    } else {
                      header("location: ../../index.php");

                    } 

                    if(isset($_POST['password'])) {

                      //echo "paichi";
                          //UPDATE `Table_A` SET `text` = 'three' WHERE `num` = 3;
                      $sql = "UPDATE recovery SET used = 'yes' WHERE id = '$id'";
                      $result = mysqli_query($db,$sql);

                      $new_pass = $_POST['password'];
                      $enc_pass = md5($new_pass);
                      $sql = "UPDATE admin SET password = '$enc_pass' WHERE email = '$row[3]'";
                      $result = mysqli_query($db,$sql);


                      header("location: login.php");



                    }

                    
                       

                    

                  ?>
                  <input type="password" name="password" class="form-control" placeholder="" required>
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-success btn-lg btn-block btn-sm" value="Reset New Password">
                </div>
               

            </form> 
          </div> 
        </div> 
      </div> 
    </div> 
  </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
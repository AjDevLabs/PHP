<?php 
  session_start();
  if(isset($_SESSION["login"])){
      header("Location:dashboard.php");                            
  }
  require_once "db.php";
  if(isset($_POST['submit'])){
      $username =  trim($_POST['username']);
      $password =  trim($_POST['password']);
      $msg=null;
      $sql = "SELECT * FROM users WHERE username='{$username}' AND password='{$password}'";
      $query = $conn->query($sql);
      $res = $query->fetchAll();
      if(count($res)>=1)
      {
          $_SESSION["login"]=1;
          // echo "You have sucessfully loggged in<br/>";
          header('Location:dashboard.php');
      }else{

          $msg= "Invalid Username or Password<br>";
      }

  }
 ?>

<?php  require_once("header.php"); ?>
  </head>
  <body class="">
  <div class="container" style="margin-top:120px;">
    <div class="row">
      <div class="col-sm-4">&nbsp;</div>
      <div class="col-sm-4">
        <div class="panel panel-info">
          <div class="panel-heading">
              <h3 class="panel-title text-center">Todo - App Login</h3>
            </div>
          <div class="panel-body">
            <?php if(isset($msg)){ ?>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?= $msg ?> 
            </div>
            <?php }?>
            <form action="" method="POST" role="form">
    
              <div class="form-group">
                <label for="">Username : </label>
                <input type="text" class="form-control" name="username" id="" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="">Password : </label>
                <input type="password" name="password" id="" placeholder="Password" class="form-control">
              </div>
              <button type="submit" name="submit" class="btn btn-lg btn-success" style="width:100%">signin</button>
              <br/>
              <br />
              <a href="signup.php"><button type="button" class="btn btn-lg btn-info" style="width:100%">signup</button></a>
            </form>
          </div>
        </div>

      </div>
      <div class="col-sm-4">&nbsp;</div>            
    </div>
  </div>


  <?php  require_once("footer.php"); ?>

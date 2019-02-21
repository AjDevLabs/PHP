<?php
  require_once 'db.php'; 
  if(isset($_POST['signup']))
  {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);
    $name_error = null;
    $validation_erro = flase;
    if($username==""){
      $name_error = "Invalid username";
      $validation_erro = true;
    }

    if(!$validation_erro){
    $sql = "INSERT INTO users VALUES(null,:username,:password,:email,:mobile)";
    $query = $conn->prepare($sql);
    $query->bindParam(':username',$username);
    $query->bindParam(':password',$password);
    $query->bindParam(':email',$email);
    $query->bindParam(':mobile',$mobile);

    $query->execute();


     echo "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><strong>Sucessful!</strong> {$username} Account sucessfully created</div>";

  }
}
 ?>

<?php  require_once("header.php"); ?>
  </head>
  <body class="">
  <div class="container" style="margin-top:5%;">
    <div class="row">
      <div class="col-sm-4">&nbsp;</div>
      <div class="col-sm-4">
        <div class="panel panel-info">
          <div class="panel-heading">
              <h3 class="panel-title text-center">Todo - App Login</h3>
            </div>
          <div class="panel-body">
            <form action="" method="POST" role="form">
    
              <div class="form-group">
                <label for="">Username : </label>
                <input type="text" class="form-control" name="username" id="" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="">Email : </label>
                <input type="email" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <label>Mobile : </label>
                <input type="text" class="form-control" name="mobile" placeholder="mobile" maxlength="10">
              </div>
              <div class="form-group">
                <label for="">Password : </label>
                <input type="password" name="password" id="" placeholder="Password" class="form-control">
              </div>
            
              <button type="submit" name="signup" class="btn btn-lg btn-info" style="width:100%">signup</button>
              <br/>
              <br />
              <p class="text-center">Already registered <a href="index.php">Login</a></p>
            </form>
          </div>
        </div>

      </div>
      <div class="col-sm-4">&nbsp;</div>            
    </div>
  </div>


  <?php  require_once("footer.php"); ?>
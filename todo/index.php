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
            <form action="" method="POST" role="form">
    
              <div class="form-group">
                <label for="">Username : </label>
                <input type="text" class="form-control" id="" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="">Password : </label>
                <input type="password" name="passwd" id="" placeholder="Password" class="form-control">
              </div>
              <button type="submit" class="btn btn-lg btn-success" style="width:100%">signin</button>
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

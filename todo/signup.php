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
                <input type="text" class="form-control" id="" placeholder="Username">
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
                <input type="password" name="passwd" id="" placeholder="Password" class="form-control">
              </div>
            
              <button type="button" class="btn btn-lg btn-info" style="width:100%">signup</button>
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
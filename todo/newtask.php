<?php 
 session_start();
 require_once("header.php");
 require_once("db.php");

	function getnewTaskID(){
		$sql = "SELECT max(id) as id FROM tasks";
		try{
		$res = $conn->query($sql);
		$row = $res->fetch();
		return $res[id]+1;
		
		}catch(PDOException $e){
			

		}
	}
	if(isset($_POST['submit'])){
		$tname = $_POST['tname'];
		$descp = $_POST['descp'];
		$edate = $_POST['edate'];
		$priority = $_POST['priority'];

		echo "<br>{$tname},{$descp},{$edate},{$priority}";
		$id = 1;
		$sql1 = "SELECT max(id) as id FROM tasks";
		try{
			$res = $conn->query($sql1);
			$row = $res->fetch();
			$id = $row["id"]+1;
		}catch(PDOException $e){
			
		}
		$sql = "INSERT INTO tasks VALUES({$id},'{$tname}','{$descp}','{$edate}','{$priority}',now(),{$_SESSION['uid']},0)";
		echo "<br>{$sql}<br>";
		try{
		$conn->query($sql);
		echo "<script>alert('Sucessfully created task');</script>";
		}catch(PDOException $e){
			echo "<script>alert('failed to create task');</script>".$e->getMessage();

		}
	}



 ?>
<style type="text/css" media="screen">

</style>
</head>
<body>
<div class="header">
	<h1 class="text-center">
		Todo Application
	</h1>
</div>
<div class="content">
	<div class="row">
		<div class="col-sm-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<ul class="nav navbar-nav">
							<li class=""><a href="#">Dashboard</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Task <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="newtask.php">New Task</a></li>
									<li><a href="view_task.php">View All</a></li>
								</ul>
							</li>
						</ul>
						
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#"><?php echo 'Anand' ?></a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">View Profile</a></li>
									<li><a href="#">Change Password</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</div>
	</div>

    <div class="col-sm-4">
    	&nbsp;
    </div>
    <div class="col-sm-4">
    	
	<form action="" method="POST" class="form" role="form">
			<div class="form-group">
                <label for="">Task Name : </label>
                <input type="text" class="form-control" id="" name="tname" placeholder="Task Name">
             </div>
             <div class="form-group">
             	<label>Description : </label>
             	<textarea id="input" class="form-control" name="descp" rows="3" ></textarea>
             </div>
			<div class="form-group">
				<label for="">Expected Date : </label>
				<input type="date" name="edate" id="input" class="form-control" value="" title="">
			</div>
			<div class="form-group">
				<label>Priority</label>
				<select name="priority" id="input" class="form-control" required="required">
					<option value="HIGH">High</option>
					<option value="MEDIUM">Medium</option>
					<option value="LOW">Low</option>
				</select>
			</div>
			<div class="form-group">
					<button type="submit" style="width:100%" name="submit" class="btn btn-primary">new task</button>
			</div>
	</form>

    </div>
<div class="col-sm-4">
    	&nbsp;
    </div>

</div>
<div class="footer">
	
</div>

<?php  require_once("footer.php"); ?>
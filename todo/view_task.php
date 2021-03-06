<?php  
		session_start();
		require_once("header.php"); 

		require_once("db.php");
		$id = $_SESSION['uid'];
		$sql = "SELECT * FROM tasks WHERE user_id={$id}";
		try{
			$res = $conn->query($sql);
		}catch(PDOException $e)
		{

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
						
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
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
									<li><a href="#">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</div>
	</div>

    <div class="col-sm-12">
    	<table class="table table-hover table-bordered table-striped">
    		<thead>
    			<tr>
    				<th>sr.no</th>
    				<th>Task Name</th>
    				<th>Description</th>
    				<th>Expected Date</th>
    				<th>Priority</th>
    				<th>Created On</th>
    				<th>Status</th>
    				<th>Action</th>
    			</tr>
    		</thead>
    		<tbody>
    			
    				<?php $sno =  1;

    					while($row = $res->fetch())
    					{
    				 ?>
    			<tr>
    				<td><?=$sno?></td>
    				<td><?=$row['name']?></td>
    				<td><?=$row['descp']?></td>
    				<td><?=$row['expected_date']?></td>
    				<td><span class="badge" style="background-color:teal !important;"><?=$row['priority']?></span></td>
    				<td><?=$row['created_on']?></td>
    				<td><span class="label label-success">Active</span></td>
    				<td><button type="button" class="btn btn-info">Edit</button>&nbsp;<button type="button" class="btn btn-danger">Delete</button></td>
    			</tr>
    			<?php 
    				}
    			 ?>
    		</tbody>
    	</table>
    </div>

</div>
<div class="footer">
	
</div>

<?php  require_once("footer.php"); ?>
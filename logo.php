<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<!DOCTYPE html>
<html ng-app="myapp">
<html>
<head>
<title></title>
  <meta charset="utf-8">
  <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <link rel="stylesheet" href="default.css">
  <link rel="stylesheet" href="logo.css">
 </head>
	
<body ng-controller="mycontroller">
	 <?php
        echo "Watch the page reload itself in 10 second!";
    ?>
	 <nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"><img src="images/logo.png" id="b1"></a>
			</div>
			<div class="collapse navbar-collapse" id="main-navbar">
				<ul class="nav navbar-nav" >
					<li><a id="menu-toggle" class="fa fa-align-justify fa-2x"></i></a></li>
					<li><a href="#"><i class="fa fa-expand"></i></a></li>
					
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li id="b"><a><i class="fa fa-bell fa-regular fa-x"></i></a></li>
					<li id="a">Main 170002.800,DMR<span><i class="fas fa-rupee-sign"></i></span>115844.000</li>
					<li><img src="images/avatar-4.jpg" ></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">My Profile</a></li>
							<li><a href="#">Log in History</a></li>
							<li><a href="#">Change Password</a></li>
							<li><a href="#">Change Pin</a></li>
							<li><a href="#">Logout</a></li>
							
						</ul>
					</li>
				</ul>
			</div>
		</div>
	 </nav>
	<div id="wrapper" >
		<div id="sidebar-wrapper" > 
			<div class="sidenav">
				  <a href="#about">Dashbard</a>
				  <button class="dropdown-btn">Branding
					<i class="fa fa-caret-down"></i>
				  </button>
				  <div class="dropdown-container">
					<a href="#">Website Logo</a>
					<a href="#">Pages</a>
				  </div>
				  <button class="dropdown-btn">Manager
					<i class="fa fa-caret-down"></i>
				  </button>
				  <div class="dropdown-container">
					<a href="#">Bank</a>
					<a href="#">Bank Details</a>
					<a href="#">SMS API</a>
					<a href="#">News</a>
					<a href="#">About Us</a>
					<a href="#">Admin Settings</a>
					<a href="#">Message settings</a>
					<a href="#">Android Banner</a>
				  </div>
				  <button class="dropdown-btn">Recharge
					<i class="fa fa-caret-down"></i>
				  </button>
				  <div class="dropdown-container">
					<a href="#">Add Balance</a>
					<a href="#">Recharge API</a>
					<a href="#">Add operator code</a>
					<a href="#">Operators</a>
					<a href="#">Admin Comm.</a>
					<a href="#">Comm. Packages</a>
					<a href="#">Set Commission</a>
					<a href="#">Mobile Series</a>
					<a href="#">Change API</a>
					<a href="#">State</a>
					<a href="#">Exact Amount</a>
					<a href="#">Valid Amount</a>
					<a href="#">User Operators Bank</a>
				  </div>
				  <button class="dropdown-btn">Users
					<i class="fa fa-caret-down"></i>
				  </button>
				  <div class="dropdown-container">
					<a href="#">Add Customer</a>
					<a href="#">Super Distributor</a>
					<a href="#">Distributor</a>
					<a href="#">Users</a>
					<a href="#">API Users</a>
					<a href="#">Credits/Debits</a>
					<a href="#">Bal Limits</a>
					<a href="#">Inquiry</a>
					<a href="#">Upload KYC</a>
					<a href="#">Send SMS</a>
					<a href="#">Upgrade User</a>
				  </div>
				   <button class="dropdown-btn">Reports
					<i class="fa fa-caret-down"></i>
				  </button>
				  <div class="dropdown-container">
					<a href="#">Recharge Reports</a>
					<a href="#">Transaction Reports</a>
					<a href="#">Account Reports</a>
					<a href="#">Daily Reports</a>
					<a href="#">SMS Reports</a>
				  </div>
				  <button class="dropdown-btn">DMR
					<i class="fa fa-caret-down"></i>
				  </button>
				  <div class="dropdown-container">
					<a href="#">Add DMR Balance</a>
					<a href="#">Credits/Debits</a>
					<a href="#">Transaction Reports</a>
					<a href="#">DMR Packages</a>
					<a href="#">DMR Commission</a>
					<a href="#">Transactions</a>
				  </div>
					<button class="dropdown-btn">Support
					<i class="fa fa-caret-down"></i>
				  </button>
				  <div class="dropdown-container">
					<a href="#">Veiw Tickets</a>
				  </div>
				  <button class="dropdown-btn">Payement
					<i class="fa fa-caret-down"></i>
				  </button>
				  <div class="dropdown-container">
					<a href="#">Payments Request</a>
				  </div>
				  
		    </div>
		</div>
		<div id="page-content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="container-fluid" id="c1">
							<div class="row" id="r1">
								<div class="col-md-12">
								<h3>Manager</h3>
								<h4>Bank Details</h4>
								</div>
							</div>
							<button class="btn btn-primary" 
							<div class="row" id="r2">
								<table id="customers";> 
									<tr>
									<th>Bank</th>
									<th>Manage</th>
									</tr>
									
									<tr ng-repeat="sh in showdata">
									<td>{{sh.name}}</td>

									<td><a href="javascript:void(0)" ng-click="RecordDelete(sh.id)">Delete</a>
									 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><a href="javascript:void(0)" ng-click="recordedit(sh.id)" class="edit1">Manage</a></</button><td>
									</tr>
							   </table>
								<div class="modal fade" id="myModal" role="dialog">
									<div class="modal-dialog">
									  <!-- Modal content-->
									  <div class="modal-content">
										<div class="modal-header">
										<div class="modal-body">
										  <div class="form-group">
											<input type="hidden" ng-model="t11" name="id">
											   <label for="name" class="h1">BankName</label>
											  <input type="text"  class="form-control" id="name"  ng-model="t1"required>
											</div>
											 <button type="submit" class="btn btn-success btn" ng-click="insert(t11,t1)">Update</button>
										</div>
										</div>
										<div class="modal-footer">
										  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									  </div>
									  
									</div>
								</div>

							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
var conn=angular.module('myapp',[]);
conn.controller('mycontroller',function($scope,$http)
{
var selsuccess=function(ret)
	{

	$scope.showdata=ret.data;
	}
	
	
		var error=function(error)
		{
			alert(error)
		}
		
 var selRec=function()
{
$http(
{
	url:'/TRp/ajax.php',
	data:{func:'select1'},
	method:'post'
	}
	).then(selsuccess,error)
	}
	selRec();

	var success=function(ret)
	{
	debugger;
	if(ret.data>0)
	{
		
		alert("Data has been submitted");
		}
		else
		{
		alert('submit data again');
	
		}
	
	}	
	 var error=function(error)
	{
		alert(error)
	}

	/*delete*****/
	
	 var delsuccess=function(ret)
	  {
	debugger;
	if(ret.data>0)
	{
		
		alert("data is delete");
		}
		else
		{
		
		alert('data is not delete');
		}
	}
		
	$scope.RecordDelete=function(id)
     {
	debugger
		$http(
        {
	url:'/TRp/ajax.php',
	data:{id:id,func:'del'},
	method:'post'
	}
	).then(delsuccess,error)
	}
	/*****Edit*****/
	
	var edsuccess=function(ret)
	{
		debugger
		$scope.t11=ret.data.id;
		console.log($scope.t11)
		//alert($scope.t5)
		$scope.t1=ret.data.name;
	
	}
	 var error=function(error)
	{
		alert(error)
	}
	$scope.recordedit=function(id)
	{
		debugger
		$http(
     {
	url:'/TRp/ajax.php',
	data:{id:id, func:'edit'},
	method:'post'
	}
	).then(edsuccess,error)

	}
	$scope.insert=function(id,name)
{
	debugger;
$http(
{
	url:'/TRp/ajax.php',
	data:{id:id,name:name,func:'save3'},
	method:'post'
	
	}
	).then(success,error)
			}
	
});

</script>
 </body>
 </html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Settings</title>
	<link rel="stylesheet" href="css/index.css">
	<link href="css/style.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			  $(".wrapper").toggleClass("active")
			})
		});
	</script>

</head>
<body>

<div class="wrapper">

	<div class="top_navbar">
		<a href="indexCEO.php"><div class="logo">
			<img src="img/logo.png" style="max-width: 130px; margin-left:23%;">
		</div></a>
		<div class="top_menu">
			<div class="home_link">
				
			</div>
			<div class="right_info">
				<a href="personalsres.php">
				<div class="icon_wrap tooltip">
					<div class="icon">
						<img src="img/CEO.png" style="width:50px; height:50px;">
						<span class="tooltiptext">Personal area</span>
					</div>
				</div></a>
				<a href="settings.php">
				<div class="icon_wrap tooltip" style="margin-top:20px">
					<div class="icon">
						<i class="fas fa-cog"></i>
						<span class="tooltiptext">Settings</span>
					</div>
				</div></a>
			</div>
		</div>
	</div>

	<div class="main_body">
		
		<div class="sidebar_menu">
	        <div class="inner__sidebar_menu">
	        	
	        	<ul>
				  <li class="tooltip">
					<a href="indexCEO.php">
						<span class="icon">
						<i class="fas fa-home"></i></span>
						<span class="list">Dashboard</span>
						<span class="tooltiptext">Dashboard</span>
					</a>
				  </li>
				  
				  <li>
					<hr class="solid">
				  </li>
				  
		          <li class="tooltip">
		            <a href="employees.php">
		              <span class="icon">
		              	<i class="fas fa-users"></i></span>
		              <span class="list">Employees</span>
		              <span class="tooltiptext">Employees</span>
		            </a>
		          </li>
				  
		          <li class="tooltip">
		            <a href="revenue.php">
		              <span class="icon"><i class="fas fa-chart-pie"></i></span>
		              <span class="list">Revenue</span>
		              <span class="tooltiptext">Revenue</span>
		            </a>
		          </li>
				  
		          <li class="tooltip">
		            <a href="costs.php">
		              <span class="icon"><i class="fas fa-address-book"></i></span>
		              <span class="list">Costs</span>
		              <span class="tooltiptext">Costs</span>
		            </a>
		          </li>
				  
				  <li >
					<hr class="solid">
				  </li>	
				  
		           <li class="tooltip">
				    <a href="departments.php">
		              <!--<span class="icon"><i class="fas fa-sitemap"></i></span>-->
					  <span><img src="img/dept.png" style="max-width: 50px;"></span>
		              <span class="list">Departments</span>
		              <span class="tooltiptext">Departments</span>
		            </a>
					<ul>
						<li class="tooltip">
							<a href="accounts.php">
								<span><img src="img/accounts2.png" style="max-width: 23px;"></span>
								<span class="list">Accounts</span>
								<span class="tooltiptext">Accounts</span>
							</a>
						</li>
						<li class="tooltip">
							<a href="hr.php">
								<span><img src="img/hr2.png" style="max-width: 27px;"></span>
								<span class="list">HR</span>
								<span class="tooltiptext">HR</span>
							</a>
						</li>
						
						<li class="tooltip">
							<a href="marketing.php">
								<span><img src="img/marketing2.png" style="max-width: 29px;"></span>
								<span class="list">Marketing</span>
								<span class="tooltiptext">Marketing</span>
							</a>
						</li>
						<li class="tooltip">
							<a href="ppss.php">
								<span><img src="img/ppss2.png" style="max-width: 23px;"></span>
								<span class="list">Professional services</span>
								<span class="tooltiptext">Professional services</span>
							</a>
						</li>
						<li class="tooltip">
							<a href="sales.php">
								
								<span><img src="img/sales2.png" style="max-width: 23px;"></span>
								<span class="list ">Sales</span>
								<span class="tooltiptext">Sales</span>
							</a>
						</li>
						<li class="tooltip">
							<a href="deptManagers.php">
								
								<span><i class="fas fa-briefcase"></i></span>
								<span class="list ">Department Managers</span>
								<span class="tooltiptext">Department Managers</span>
							</a>
						</li>
						

					</ul>

		          </li>
		          
		        </ul>

		        <div class="hamburger">
			        <div class="inner_hamburger">
			            <span class="arrow">
			                <i class="fas fa-long-arrow-alt-left"></i>
			                <i class="fas fa-long-arrow-alt-right"></i>
			            </span>
			        </div>
			    </div>

	        </div>
	    </div>

	    <div class="container">
			<embed src="settingsTable.php" style="width: -webkit-fill-available;height: -webkit-fill-available;">
	    </div>
	</div>
</div>




	

</body>
</html>

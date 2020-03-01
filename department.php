
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Departments</title>
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
	<style>
	.card .card_image img {
    width: inherit;
    height: 70%;
	margin:8%;
    border-radius: 40px;
    object-fit: cover;
	}
	
	.card .card_title {
	  color: #9193AB;
	}

	</style>
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
				    <a href="departments.php" class="active">
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
	    	<div class="cards-list">
  
				<a href="accounts.php">
				<div class="card 1" style=" margin-left:5%;  box-shadow: 12px 15px 24px 0px #8B2AFF73;" >
					<div class="card_image">
						<img src="img/accounts2.png" style="margin-left:18%">
					</div>
					<div class="card_title">
						<p>Accounts</p>
					</div>
				</div></a>

				<a href="hr.php">
				<div class="card 2" style="box-shadow: 12px 15px 24px 0px #03C40073;">
					<div class="card_image">
						<img src="img/hr2.png" style="margin-left:18%">
					</div>
					<div class="card_title ">
						<p>HR</p>
					</div>
				</div></a>

				<a href="marketing.php">
				<div class="card 3" style="box-shadow: 12px 15px 24px 0px #FF710073;">
					<div class="card_image">
						<img src="img/marketing2.png" style="margin-left:0%">
					</div>
					<div class="card_title ">
						<p>Marketing</p>
					</div>
				</div></a>

				<a href="ppss.php">
				<div class="card 4" style="box-shadow: 12px 15px 24px 0px #FF040073;">
					<div class="card_image">
						<img src="img/ppss2.png" style="margin-left:18%">
						
					</div>
					<div  class="card_title">
						<p>Professional services</p>
					</div>
				</div></a>
				
				<a href="sales.php">
				<div class="card 5" style="box-shadow: 12px 15px 24px 0px #0062FF73;">
					<div class="card_image">
						<img src="img/sales2.png" style="margin-left:12%">
						
					</div>
					<div class="card_title"> <!-- style="color:#0062FF;" -->
						<p>Sales</p>
					</div>
				</div></a>
			</div>
	    </div>
	</div>
</div>

</body>
</html>

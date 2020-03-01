
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personal Area</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/style.css" >
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
<br><br><h1>Coming soon...I hope tomorrow!</h1>
	

		
	    </div>
		
		
	</div>
</div>



  <script>
    let myChart = document.getElementById('myChart').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type:'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Sales','Marketing', 'PS', 'Accounts', 'HR'],
        datasets:[{
          label:'Population',
          data:[
            617594,
            181045,
            153060,
            106519,
            105162
          ],

          //backgroundColor:'green',
          backgroundColor:[
            '#8B2AFF',
            '#03C400',
            '#FF7100',
            '#FF0400',
            '#0062FF'
          ],
          borderWidth:0.3,
          borderColor:'#FFF',
          hoverBorderWidth:3,
          hoverBorderColor:'#Fff'
        }]
      },
      options:{
        title:{
          display:true,
          text:'£1.163.380',
          fontSize:25
        },
        legend:{
          display:true,
          position:'bottom',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:5,
            right:5,
            bottom:5,
            top:5
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
    <script>
    let myChart2 = document.getElementById('myChart2').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart2 = new Chart(myChart2, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Sales','Marketing', 'PS', 'Accounts', 'HR'],
        datasets:[{
          label:'Costs',
          data:[
            117594,
            181045,
            153060,
            106519,
            105162
          ],

          //backgroundColor:'green',
          backgroundColor:[
            '#8B2AFF',
            '#03C400',
            '#FF7100',
            '#FF0400',
            '#0062FF'
          ],
          borderWidth:0.3,
          borderColor:'#FFF',
          hoverBorderWidth:3,
          hoverBorderColor:'#Fff'
        }]
      },
      options:{
        title:{
          display:true,
          text:'£1.163.380',
          fontSize:25
        },
        legend:{
          display:false,
          position:'bottom',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:5,
            right:5,
            bottom:5,
            top:5
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
  <script>
    let myChart3 = document.getElementById('myChart3').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart3 = new Chart(myChart3, {
      type:'polarArea', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Sales','Marketing', 'PS', 'Accounts', 'HR'],
        datasets:[{
          label:'Population',
          data:[
            217594,
            181045,
            153060,
            106519,
            105162
          ],

          //backgroundColor:'green',
          backgroundColor:[
            '#8B2AFF',
            '#03C400',
            '#FF7100',
            '#FF0400',
            '#0062FF'
          ],
          borderWidth:0.3,
          borderColor:'#FFF',
          hoverBorderWidth:3,
          hoverBorderColor:'#Fff'
        }]
      },
      options:{
        title:{
          display:true,
          text:'£1.163.380',
          fontSize:25
        },
        legend:{
          display:true,
          position:'bottom',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:5,
            right:5,
            bottom:5,
            top:5
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>  

	

</body>
</html>

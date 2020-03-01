<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 250px;
  height: 250px;

}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  border-radius: 20px;
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
  border-radius: 20px;
}

.flip-card-front, .flip-card-back1, .flip-card-back2, .flip-card-back3, .flip-card-back4, .flip-card-back5 {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border-radius: 20px;
}

.flip-card-front {
  background-color: #fff;
  color: black;
  border-radius: 20px;
}

.flip-card-back1 {
  background-color: #8B2AFF;
  color: white;
  transform: rotateY(180deg);
  border-radius: 20px;
}
.flip-card-back2 {
  background-color: #03C400;
  color: white;
  transform: rotateY(180deg);
  border-radius: 20px;
}
.flip-card-back3 {
  background-color: #FF7100;
  color: white;
  transform: rotateY(180deg);
  border-radius: 20px;
}
.flip-card-back4 {
  background-color: #FF0400;
  color: white;
  transform: rotateY(180deg);
  border-radius: 20px;
}
.flip-card-back5 {
  background-color: #0062FF;
  color: white;
  transform: rotateY(180deg);
  border-radius: 20px;
}
div.gallery {
  float: left;
  width: 180px;
  padding: 1.5% 6% 0% 6%;
}


</style>
</head>
<body>

<div class="gallery">
	<div class="flip-card">
	  <div class="flip-card-inner">
		<div class="flip-card-front">
			<!--<img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">-->
			<p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
			<h4 class="card-title">Jane Doe</h4>
			<p class="card-text">Accounts Department</p>                             
		</div>
		<div class="flip-card-back1">
		  <h2>Accounts Manager</h2> 
		  <p>Some info</p> 
		  <a href="#"><i class="fas fa-at"></i></a>  accmanager@adelphi.ac.uk  </p><br>
		  <a href="#"><i class="fas fa-phone-alt"></i></a>  +0131 556 43690 ext: 501
		</div>
	  </div>
	</div>
</div>
<div class="gallery">
	<div class="flip-card">
	  <div class="flip-card-inner">
		<div class="flip-card-front">
			<!--<img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">-->
			<p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="card image"></p>
			<h4 class="card-title">Jane Doe</h4>
			<p class="card-text">HR Department</p>                            
		</div>
		<div class="flip-card-back2">
		  <h2>HR Manager</h2> 
		  <p>Some info</p> 
		  <a href="#"><i class="fas fa-at"></i></a>  hrmanager@adelphi.ac.uk </p> <br>
		  <a href="#"><i class="fas fa-phone-alt"></i></a>  +0131 556 43690 ext: 502
		</div>
	  </div>
	</div>
</div>

<div class="gallery">
	<div class="flip-card">
	  <div class="flip-card-inner">
		<div class="flip-card-front">
			<!--<img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">-->
			<p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="card image"></p>
			<h4 class="card-title">Jane Doe</h4>
			<p class="card-text">Marketing Department</p>                         
		</div>
		<div class="flip-card-back3">
		  <h2>Marketing Manager</h2> 
		  <p>Some info</p> 
		  <a href="#"><i class="fas fa-at"></i></a>  markmanager@adelphi.ac.uk </p> <br>
		  <a href="#"><i class="fas fa-phone-alt"></i></a>  +0131 556 43690 ext: 503
		</div>
	  </div>
	</div>
</div>
<div class="gallery">
	<div class="flip-card">
	  <div class="flip-card-inner">
		<div class="flip-card-front">
			<!--<img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">-->
			<p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_04.jpg" alt="card image"></p>
			<h4 class="card-title">Jane Doe</h4>
			<p class="card-text">Professional Services Department</p>                          
		</div>
		<div class="flip-card-back4">
		  <h2>Prof. Serv. Manager</h2> 
		  <p>Some info</p> 
		  <a href="#"><i class="fas fa-at"></i></a>  ppssmanager@adelphi.ac.uk</p><br>
		  <a href="#"><i class="fas fa-phone-alt"></i></a>  +0131 556 43690 ext: 504
		</div>
	  </div>
	</div>
</div>

<div class="gallery">
	<div class="flip-card">
	  <div class="flip-card-inner">
		<div class="flip-card-front">
			<!--<img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">-->
			<p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_05.png" alt="card image"></p>
			<h4 class="card-title">Jane Doe</h4>
			<p class="card-text">Sales Department</p>								
		</div>
		<div class="flip-card-back5">
		  <h2>Sales Manager</h2> 
		  <p>Some info</p> 
		  <a href="#"><i class="fas fa-at "></i></a>  salesmanager@adelphi.ac.uk</p> <br>
		  <a href="#"><i class="fas fa-phone-alt"></i></a>  +0131 556 43690 ext: 505
		  
		</div>
	  </div>
	</div>
</div>

</body>
</html>

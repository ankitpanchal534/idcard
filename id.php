<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<title>Id card</title>
</head>
<body>
	<div class="main">
		<p class="header-text">Newton School</p>
		<p class="header-text-2">A Portal to print Newton School's Student ID Card</p>
		<div class="text">
			<logo ><img  class="logo" src="https://i.ibb.co/vXH43fs/logo1.png"> </logo>
			<h2>Welcome To <br>unOfficial Page of <br></h2><h1> Newton School </h1>
		</div>
		<div class="container">
		    <form > 
		        <img src="https://i.ibb.co/nMcYg8q/logo.jpg" id="logo_img">
		        <h3>Student Identy Card</h3>
		        <div class="stu_img"> <img src="https://i.ibb.co/0sWzsgf/sdsd.jpg" id="logo_img1"> </div>
		        <div class="stu_info"><br>
	<b>             Name :- &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST['name'] ?>          </b><br><br>
	<b>             Father :- &nbsp;&nbsp;&nbsp;&nbsp;  <?php echo $_POST['fname']	?>            </b><br><br>
	<b>             DOB :-  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; <?php echo $_POST['dob']	?>          </b><br><br>
	<b>             Gender :- &nbsp;&nbsp;&nbsp;   <?php echo $_POST['gender']	?>          </b><br><br>
	<b>          Mobile :-  &nbsp;&nbsp;&nbsp;&nbsp;    <?php echo $_POST['mobile']	?>      </b><br><br>
	<b>           Course :-  <?php echo $_POST['course'] ?>     </b><br><br>
	<b>             Batch :- <?php echo $_POST['batch']	?>          </b><br><br>
	
	        	</div>  
</div>

</form>



		</div>
		<img src="https://i.ibb.co/YThXh46/tech-JPG.webp" id="img1">
		
	</div>
<footer>
<img id="img2"  src="https://i.ibb.co/vXH43fs/logo1.png" style="width:40px; height: 40px;"><br>
<p id="text-1"> © 2021 Made with Love By Future Coder
All rights reserved. (Terms) </p>

</footer>
</body>

<style type="text/css">
    
    b{margin-left:13%; padding-top:10px; color:blue;}
    #logo_img1{width:130px; height:140px;}
   h3{margin-left:20%;}
    .stu_img{width:120px; height:120px; 
    border-radius:100%; border:1px solid black; 
    margin-left:30%; margin-top:3vh; overflow:hidden; }
	#img2{margin-left: 20%; }
	#text-1{margin-top: -40px; margin-left: 25%;;}
	footer{margin-top: 30px;
	       height: 50px;

	}
	#logo_img{ width:300px; height:40px;}
	.header-text-2{font-size: 20px;
		text-align: center;
		color: red;
		margin-top: -30px;
		font-weight: bold;}
	.header-text{
		font-size: 35px;
		text-align: center;
		color: blue;
		font-weight: bold;
	}
	.logo{width: 70px;
		height: 70px;}
	h1{ color: blue;
		font-size: 35px;margin-top: -20px;
	}
	.text{text-align: center;
		margin-left: 25px;
		width: 380px;
		height: 580px;
		float: left;
		background-image: url(https://i.ibb.co/fkmx4t7/1.jpg);
		background-repeat: no-repeat;
		background-size: 350px 450px;
	}
	#img1{width: 380px;
		height: 300px; float: right; 
		margin-top: -380px;	
		margin-right:80px;}
	@media print {
  body * {
    visibility: hidden;
  }
  .container * {
    visibility: visible;
  }
  .container{
    position: absolute;
    left: 0;
    top: 0;
  }
}
form{
	    background-image:url(https://i.ibb.co/R0shxHs/bg-img.png);
	    background-size:350px 526px;
		padding: 10px;
		background-color: white;
		width: 300px;
		box-shadow: 0px 0px 8px ;
		border-radius: 25px;
		margin-left: 38%;
		margin-top: 70px;

	}
	ul{
		list-style-type: none;


	}
	button{margin-left: 6%; 
		width: 150px; height: 30px;
		background-color: #344ceb;
		color: white; border-radius: 10px;
			}

	li{padding: 10px; }
	input{padding: 5px; display: flex; }
	body{background-color: white;
	 background-image: url();
	 background-blend-mode: darken;
	 font-family: 'Ubuntu', sans-serif;
	}

	@media only screen and (max-width: 600px){
		form{margin-left: 5%;
	}
	.text{display: none;}
	#img1{display: none;}
	form{margin-top: 20px;}
	
	    
	    
	    
	}
	
</style>
</html>
		width: 380px;
		height: 580px;
		float: left;
		background-image: url(https://i.ibb.co/fkmx4t7/1.jpg);
		background-repeat: no-repeat;
		background-size: 350px 450px;
	}
	#img1{width: 380px;
		height: 300px; float: right; 
		margin-top: -380px;	
		margin-right:80px;}
	form{
		padding: 10px;
		background-color: white;
		width: 300px;
		box-shadow: 0px 0px 8px ;
		border-radius: 25px;
		margin-left: 36%;
		margin-top: 10px;

	}
	ul{
		list-style-type: none;


	}
	button{margin-left: 6%; 
		width: 150px; height: 30px;
		background-color: #344ceb;
		color: white; border-radius: 10px;
			}

	li{padding: 10px; }
	input{padding: 5px; display: flex; }
	body{background-color: white;
	 background-image: url();
	 background-blend-mode: darken;
	 font-family: 'Ubuntu', sans-serif;
	  }





	@media only screen and (max-width: 600px){
		form{margin-left: 5%;
	}
	.text{display: none;}
	#img1{display: none;}
	form{margin-top: 20px; }
</style>
</html>

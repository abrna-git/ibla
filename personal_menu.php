<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

/*menubar stylesheet*/

* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #4F5055;
  padding: 15px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
  font-family: "Lucida Console", "Courier New", monospace;
  color:#F4F3F7
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* menu */

body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/mac.jpg");
  min-height: 100%;
}
input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.w3-bar .w3-button {
  padding: 16px;
}
input[type=cancel] {
  width: 100%;
  background-color: #A9A9A9;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=cancel]:hover {
  background-color: #808080;
}

</style>
</head>
<body>

<div class="header">
  <a href="mainmenu.php" class="logo">I-BLA.com</a>
  <div class="header-right">
    <a class="active" href="login.php">Logout</a>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
  </div>
</div>

<div class="w3-container w3-center w3-dark-grey" style="padding:25px 16px" id="menu">
  <h3>We've been waiting with awesome offers for you!</h3>
  <p class="w3-large"><h2>Type of employment</h2></p>

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="personal1.png" alt="John" style="width:100%">
      <h3>Salaried</h3>
      <p class="w3-opacity">Earn Regular Monthly Income</p>
      <p><button onclick="myFunction1()" class="w3-button w3-light-grey w3-block">Select</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="personal2.png" alt="Jane" style="width:100%">
      <h3>Business Owner</h3>
      <p class="w3-opacity">Run own Business</p>
      <p><button onclick="myFunction2()" class="w3-button w3-light-grey w3-block">Select</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="personal5.png" alt="Mike" style="width:101%">
      <h3>Self-Employeed Professional</h3>
      <p class="w3-opacity">Own a Practice(Eg. Doctor,C.A,etc)</p>
      <p><button onclick="myFunction3()" class="w3-button w3-light-grey w3-block">Select</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="personal3.jpg" alt="Dan" style="width:94%">
      <h3>Independent Worker</h3>
      <p class="w3-opacity">(Eg.Driver,Electrician,Farmer,Shopkeeper,etc.)</p>
      <p><button onclick="myFunction4()" class="w3-button w3-light-grey w3-block">Select</button></p>
    </div>
  </div>
  <input type="cancel" value="BACK" onclick="myFunction5()">
</div>
<script>
	function myFunction1()
	{ 
		location.replace("personal_menu1.php")
	}
	function myFunction2()
	{ 	
		location.replace("personal_menu2.php")
	}
	function myFunction3()
	{ 	
		location.replace("personal_menu3.php")
	}
	function myFunction4()
	{ 	
		location.replace("personal_menu3.php")
	}
	function myFunction5()
	{ 	
		location.replace("menu.php")
	}
</script>
</body>
</html>
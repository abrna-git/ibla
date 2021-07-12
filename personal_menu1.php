<html>
<head>

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

/* details */
body {
  font-family: Arial;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
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

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
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

<div class="container">
  <form method="POST" action="summary_personal.php">
    <label for="salary">Your Net Monthly Salary</label>
    <input type="text" id="salary" name="salary" placeholder="Your Monthly Salary.." required>

    <label for="company">Employeed Company/Organisation Name</label>
    <input type="text" id="company" name="company" placeholder="Your company/organisation name.." required>
	
	<label for="payslip">Do you have Last Six Months Pay Slip?</label><br><br>
    <input type="radio" id="yes" name="payslip" value="yes">
	<label for="yes">Yes</label><br>
	<input type="radio" id="no" name="payslip" value="no">
	<label for="no">No</label><br><br>
	
	<label for="age">Age</label>
    <input type="text" placeholder="Enter Correct Age" name="age" required>
	
	<label for="pincode">Your current residential pincode</label>
    <input type="text" id="pincode" name="pincode" placeholder="Your pincode.." required>
	
	
	<label for="account">Do you have current (Salary) accounts?</label><br><br>
    <input type="radio" id="yes" name="accounts" value="yes">
	<label for="yes">Yes</label><br>
	<input type="radio" id="no" name="accounts" value="no">
	<label for="no">No</label><br><br>
	
	<label for="loan">Loan Amount?</label>
    <input type="text" id="loan" name="loan" placeholder="Loan amount your looking for.." required>
	
	<label for="emi">Loan Tenure(In Years)</label>
    <input type="text" id="emi" name="emi" placeholder="EMI Months You Repay the loan.." required>
	
	<label for="emi">Your Current Credit Score</label>
	<br><br>
	<img src="credit2.png" width="300" height="100"usemap="#workmap">
	<map name="workmap">
		<area shape="rect" coords="0,0,5697,2161" alt="Computer" href="https://www.cibil.com/">
	</map>
    <input type="text" id="creditscore" name="creditscore" placeholder="Your Current Credit Score or Click on the Image to now your Current Credit Score.." required>
	
	<label for="account">Tell us about your residence type?</label><br><br>
    <input type="radio" id="yes" name="residence" value="yes">
	<label for="yes">Owned by parent/sibling</label><br>
	<input type="radio" id="yes" name="residence" value="yes">
	<label for="yes">Rented - With Family</label><br>
	<input type="radio" id="yes" name="residence" value="yes">
	<label for="yes">Owned by self/spouse</label><br>
	<input type="radio" id="yes" name="residence" value="yes">
	<label for="yes">Rented - Staying alone</label><br>
	<input type="radio" id="yes" name="residence" value="yes">
	<label for="yes">Rented - With Friends</label><br>
	<input type="radio" id="no" name="residence" value="no">
	<label for="no">Company provided</label><br><br>
	
    <input type="submit" value="Submit">
	<input type="cancel" value="Cancel" onclick="myFunction()">
  </form>
</div>
<script>
function myFunction() {
  location.replace("personal_menu.php");
}
</script>

<?php
require "conn.php";
if(isset($_POST["creditscore"]))
{
	$creditscore=$_POST["creditscore"];
	
	  $mysql_qry = "SELECT credit_score FROM personal_loan WHERE '$creditscore' > credit_score;";
    $result = mysqli_query($con ,$mysql_qry);
    //echo "<script>alert('$result');</script>";
	if (mysqli_num_rows($result)>0) 
	{
		echo "<script type=\"text/javascript\">location.replace('summary_personal.php');</script>";
		echo "Success!";
	}
    else 
	{
		echo "<script type=\"text/javascript\">location.replace('sorry.php');</script>";
		echo "No Data";
    }
	
}
?>
</body>
</html>




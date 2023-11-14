<html>
<head> <title>Assignment 3</title>
</head>

<style>
body 
{
background: lightgrey;

}
h1
{


}
.solid
{
	border-style:solid;
}

</style>
<body>
<h1 class = "solid">  <center> More Information </center> </h1>
<!-- gets users inputted name and is displayed on screen-->
<?php

		$name = $_POST["name"];
		echo "Hello, " . $name . "! Below are links to learn more about Kevin Horton and other Tech Heros";

?>
<!-- websites are all linked -->
<h4><u>Articles on Kevin:</u></h4>

<p> <a href = "https://afrotech.com/founder-kevin-horton-is-gamifying-education-through-nomadd-group"> Afro Tech - Learn more who Kevin is</a>
</p>

<h4><u> Contact Kevin Horton: </u></h4>

<p> <a href = "https://www.linkedin.com/posts/kev-the-brand-man-horton-_stemeducation-stemforall-stemmovement-activity-7029884279513841664-4MF4/"> Kevin's LinkedIn</a>
</p>

<h4> <u>More Tech Heros:</u></h4>

<p> <a href = "https://peopleofcolorintech.com/"> Other Tech Heros</a>
</p>
<!-- creating a valid email used this website https://www.w3schools.com/php/php_form_url_email.asp-->
<p>
<form action="lastpage.php" method = "post">
		Enter your email for the news letter: <input type = "email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
		<input type = "submit">
</form>
<p>


<form action="index.php" method = "post">
		<button name = "button" onclick = "button"> Return Home</button>		
</form>

</body>


</html>
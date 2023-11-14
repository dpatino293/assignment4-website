<html>

<head>
<title> Tech Hero </title>

<style>

body 
{
background: lightgrey;

}
.image
{
float: left;
margin-right: 10px;
}
.solid {

border-style: solid;

}

</style>

</head>

<body>

<h1 class = "solid"> <center> Tech Hero </center> </h1>
<!-- This section gives the user the date and time learned off of here https://www.w3schools.com/php/php_date.asp-->

<?php
$todaysDate = date('d-m-Y');
echo "Current date is: " . $todaysDate . " ";


$hour = date('G');

if ($hour >= 5 && $hour < 12){
	echo "Good Morning";
}else if ($hour > 12 && $hour < 18) {
	echo "Good Afternoon";
} else{
	echo "Good night";
}


?>

<!-- A little bit about Kevin Horton -->
<h4> Today you will be learning more about Kevin Horton</h4>

<div class ="image">
<img src= "https://cms.afrotech.com/wp-content/uploads/2023/08/Kevin-Horton-1568x882.jpg" alt="Tech Hero Picture" width="400" height="205">
</div>

<p>
Kevin Horton is my Tech Hero because we share similar backgrounds and goals. We both come from an underrepresented race, and we want to give back to the community. Kevin created the company Nomadd Group to help bring STEM to underprivileged schools. Kevin wants to give these students an opportunity to have a better future, by providing them with a proper education. I grew up attending Chicago Public Schools and saw from a first-person point of view how hard it was to have equal access to resources that private schools had. By challenging the disadvantages of marginalized groups, he is minimizing the wage gap between white people and non-white employees. Kevin also touches on the school-to-prison pipeline and is working towards preventing these disadvantages from continuing.    
</p>

<h4> Kevin's Methods of Challenging Education Inequalities (each time you refresh you get a new method)</h4>

<!-- Using arrays to change what the user sees everytime they refresh used this video to help https://youtu.be/E4FUeWa3WQk?si=pNM5T83I6UNgtAzh-->
<?php
$kevinsMethods = ['In-Shool Stem - Implementing STEM courses and learning experiences for Students during the regular school days. This includes the 5 STEM program models.', 'CTE programs - Implementing Career and Technical Education programs for Engineering & Innovation, Aerospace & Advanced Air Mobility, and Esports & Entertainment.', 'OST programs - Implementing STEM courses and learning experiences for out-of-school time (OST) programs such as After-School programs, Summer programs, STEM Saturdays, Cohorts, Community Design Projects, and more.'];
$differentArray = array_rand($kevinsMethods);
echo $kevinsMethods[$differentArray];


?>

<p>
<a href = "https://nomaddgroup.com/education-programs/"> Learn more of his methods here </a>
</p>

<?php
	
	

	$printOutStatement = true;

	if($printOutStatement == true ){
		echo "<u> More Tech Heros: </u>" . '<br />';
	}
	else{
		echo "Learn more tech heros";
	}

	$moreTechHeros = ['Sarah Bond', 'Kimberly Bryant', 'Erica Joy'];
	for($i = 0; $i <count($moreTechHeros); $i++){
		echo $moreTechHeros[$i] . '<br />';
	}

?>
<!-- code manipulated from https://youtu.be/hxYQA-nuIXY?si=PJBT3DngYc6PdCn1-->

<p>
<form action="process.php" method = "post">
		Enter your name to learn more about other tech heros: <input name = "name" type = "text">
		<input type = "submit">
</form>

</p>
<!-- code manipulated from https://youtu.be/ZdP0KM49IVk?si=xRgm1fzwgWGE-Q-1 -->



</body>

</html>
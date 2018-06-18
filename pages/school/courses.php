<?php require("../../nav/index.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Saransh Grover</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- stylesheet css -->
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/font-awesome.min.css">
	<link rel="stylesheet" href="../../css/style.css">
	<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>	
<script src="../../js/jquery.backstretch.min.js"></script>
	
</head>
	
<h2>Filter by Course Tags!</h2>

<button  class="btn btn-primary" onclick="All()">All</button>
<button class="btn btn-primary" onclick="CS()">CS</button>
<button class="btn btn-primary" onclick="Business()">Business</button>
<button class="btn btn-primary" onclick="Math()">Math</button>
<button class="btn btn-primary" onclick="DigitalArts()">Digital Arts</button>

<br><br>
<style>
	.courses {
		background-color: coral;
	}
</style>
<div class="container courses">
	<div id="CS" style="display:block">
		<div class ="panel panel-default">
			<div class="panel heading"> CSE 114: Introduction to Java</div>
		</div>
		<div class="panel panel-default">
			<div class="panel panel-body"> CSE 214: Java Fundamentals </div>
		</div>
		<div class="panel panel-default">
			<div class="panel panel-body"> CSE 215: Discrete Mathematics </div>
		</div>
		<div class="panel panel-default">
			<div class="panel panel-body"> CSE 219: System Fundamentals </div>
		</div>
	</div>
	<div id="Business" style="display:block">
		<div class ="panel panel-info">
			<div class="panel panel-body"> BUS 115: Introduction to Business </div>
		</div>
	</div>
	<div id="Math" style="display:block">
		<div class ="panel panel-success">
			<div class="panel panel-body"> MAT 132: Calculus II </div>
		</div>
		<div class ="panel panel-success">
			<div class="panel panel-body"> AMS 210: Linear Algebra </div>
		</div>
		<div class ="panel panel-success">
			<div class="panel panel-body"> AMS 310: Probability </div>
		</div>
	</div>
	<div id="DigitalArts" style="display:block">
		<div class ="panel panel-warning">
			<div class="panel panel-body"> ARH 207: Digital Media: History/Theory </div>
		</div>
		<div class ="panel panel-warning">
			<div class="panel panel-body"> EGL 194: Global Film Traditions </div>
		</div>
	</div>
</div>


<script>
function CS() {
    var one = document.getElementById("CS");
    if (one.style.display == "none") {
        one.style.display = "block";
    } 
    var two = document.getElementById("Business");
    if (two.style.display == "block") {
        two.style.display = "none";
    }
    var three = document.getElementById("Math");
    if (three.style.display == "block") {
        three.style.display = "none";
    }
    var four = document.getElementById("DigitalArts");
    if (four.style.display == "block") {
        four.style.display = "none";
    } 
}
function DigitalArts() {
    var one = document.getElementById("DigitalArts");
    if (one.style.display == "none") {
        one.style.display = "block";
    } 
    var two = document.getElementById("Business");
    if (two.style.display == "block") {
        two.style.display = "none";
    }
    var three = document.getElementById("Math");
    if (three.style.display == "block") {
        three.style.display = "none";
    }
    var four = document.getElementById("CS");
    if (four.style.display == "block") {
        four.style.display = "none";
    } 
}
function Business() {
    var one = document.getElementById("Business");
    if (one.style.display == "none") {
        one.style.display = "block";
    } 
    var two = document.getElementById("CS");
    if (two.style.display == "block") {
        two.style.display = "none";
    }
    var three = document.getElementById("Math");
    if (three.style.display == "block") {
        three.style.display = "none";
    }
    var four = document.getElementById("DigitalArts");
    if (four.style.display == "block") {
        four.style.display = "none";
    }
}
function Math() {
    var one = document.getElementById("Math");
    if (one.style.display == "none") {
        one.style.display = "block";
    } 
    var two = document.getElementById("CS");
    if (two.style.display == "block") {
        two.style.display == "none";
    }
    var three = document.getElementById("Business");
    if (three.style.display == "block") {
        three.style.display = "none";
    }
    var four = document.getElementById("DigitalArts");
    if (four.style.display == "block") {
        four.style.display = "none";
    }
}
function All() {
var one = document.getElementById("CS");
    if (one.style.display == "none") {
        one.style.display = "block";
    } 
var two = document.getElementById("Business");
    if (two.style.display == "none") {
        two.style.display = "block";
    } 
var three = document.getElementById("Math");
    if (three.style.display == "none") {
        three.style.display = "block";
    }
var four = document.getElementById("DigitalArts");
    if (four.style.display == "none") {
        four.style.display = "block";
    }    
}
</script>

</body>
	  	<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>saranshgrover.com V0.1.0 | Made with <i class="fa fa-heart"></i>  by Saransh Grover &copy; Powered by github.com </p>
			</div>
		</div>
	</div>
</footer>
</html>
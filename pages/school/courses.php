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
	<div class="preloader">
	<div class="sk-spinner sk-spinner-wordpress">
       <span class="sk-inner-circle"></span>
     </div>
</div>
	
</head>
	<body>
		<div class="panel panel-header"> <h1 style="text-align: left">Courses Taken</h1></div>
		<ul class="filters">
  <li data-filter-by="all">All</li>
  <li data-filter-by="one">One</li>
  <li data-filter-by="two">Two</li>
  <li data-filter-by="three">Three</li>
</ul>

<div class="item" data-filter="one">1</div>
<div class="item" data-filter="two">2</div>
<div class="item" data-filter="three">3</div>
<style>
		@import "compass/css3";

.filters {
  margin: 10px;
  
  & li {
    padding: 10px;
    cursor: pointer;
  }
}

.item {
  width: 200px;
  height: 200px;
  background: red;
  float: left;
  margin: 10px;
  text-align: center;
  line-height: 200px;
  color: #fff;
  font-size: 38px;
}
		</style>
	
<script>
		$('.filters li').on('click',function() {
  var $fVal = $(this).attr('data-filter-by');
  $('.item').each(function(){
    var $iVal = $(this).attr('data-filter');
    if ($fVal == 'all') {
      $(this).fadeIn(200);
    } else if ($fVal !== $iVal) {
      $(this).fadeOut(200);
    } else {
      $(this).fadeIn(200);
    }
  });
});
		</script>
<!-- javascript js -->	
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>	
<script src="../../js/jquery.backstretch.min.js"></script>
<script src="../../js/custom.js"></script>

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
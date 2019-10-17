<?php
define('ROOT',dirname(__FILE__));
require_once(ROOT.'/search.php');
$result = new search();
$data=$result->getDataFromIMDB();
?>
<!DOCTYPE html>
<html lang="ru">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Pavel Shilin">
  <script type="text/javascript" src="jquery.js"></script>

  
  <title>IMBD search</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">IMBD search</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Добро пожаловать</h1>
      <p class="lead">Введите название фильма</p>
	  <p class="lead">
	   <form action="/result.php" method="POST">
			<input name="StringSearch" type="text" /><br><br>
			<input type="submit" value="Поиск">
			</form>
			</p>
    </div>
  </header>

  <section id="about">

  </section>
  





  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright Pavel Shilin 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>



<!--
<script>
$(document).ready(function() {
	$('#robot').hide();
}); 
 </script>
 
<script>
$('#clickme').click(function(){
  $('#robot').show(); 
});
</script>
  -->

</body>

</html>

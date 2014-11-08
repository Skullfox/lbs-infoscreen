<!DOCTYPE html>
<html>
<head>
<title></title>

<link rel="stylesheet" href="assets/co/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/be/css/style.css">

<script src="assets/co/js/jquery-2.1.1.min.js"></script>
<script src="assets/fe/js/fe.js"></script>
<script src="assets/be/js/be.js"></script>
<script src="assets/co/js/co.js"></script>
<script src="assets/be/js/jquery-ui.min.js"></script>



<script src="assets/fe/js/cheet.min.js"></script>

<script src="assets/co/js/bootstrap.js"></script>

</head>

<?php 
$json_data = file_get_contents('./server/template/order/order.json');
$json = json_decode($json_data,TRUE);


$array = $json;

?>
<body>
</div>


<div class="be">
  <div ="container">
  <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Infoscreen</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" data-site="order">Reihenfolge</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Seiten<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">                            
          <?php 
          foreach ($array as $data => $infoArray) {
          ?>
          <li><a href="#" data-site="<?php echo $data ?>"><?php echo utf8_decode($infoArray["lng"]) ?></a></li>
          <?php
          }
          ?>
          <li class="divider"></li>
          <li><a href="#">Optionen</a></li>

          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="col-lg-8">
      
      <div class="content"></div>
    </div>


  
  </div>
</div>



</body>

</html>
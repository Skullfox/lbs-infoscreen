<?php 
$path_parts = pathinfo(__FILE__);

$json_data = file_get_contents('files/info.json');
$json = json_decode($json_data,TRUE);

?>
<div class="item <?php echo $path_parts['filename'] ?>">

<?php file_put_contents('filename.json', json_encode('dddd')); ?>

<div class="page-header">
  <h1>Beratungslehrer <small>Subtext</small></h1>
</div>

<div class="row">
	<div class="col-lg-6 ">
		<div class="image-md-container">
			<img  class="img-responsive" src="./<?php echo $json['counsellor']["image"]; ?>">
		</div>		
	</div>
	<div class="col-lg-6 ">
		<?php echo $json['counsellor']["text"]; ?>
	</div>
</div>

</div>   

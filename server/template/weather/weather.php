<?php 
$path_parts = pathinfo(__FILE__);
// http://openweathermap.org/current
?>


<div class="item <?php echo $path_parts['filename'] ?>">

<script type="text/javascript">
		 	$.ajax({
	 		  type: "POST",
	 		  url: "http://api.openweathermap.org/data/2.5/weather?id=2766824&lang=de",
	 		  async: true,
	 		  dataType: 'json', 
	 		  success: function(data,status,xhr) {
	 			 
	 			  console.log(data);

	        }
 		  	
 		})
</script>

<?php	

/*
$data =  file_get_contents('http://api.openweathermap.org/data/2.5/weather?id=2766824&lang=de');

var_dump($data);

$weather = json_decode(data,TRUE);

var_dump($weather);

*/
?>




</div>   

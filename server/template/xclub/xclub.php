

<?php 
$path_parts = pathinfo(__FILE__);

$json_data = file_get_contents('files/info.json');
$json = json_decode($json_data,TRUE);

?>
<div class="item <?php echo $path_parts['filename'] ?>">

<div class="raika">
  <img src="./uploads/<?php echo $json["image"]?>" alt="">
</div>

</div>   



<?php 
$json_data = file_get_contents('order.json');
$json = json_decode($json_data,TRUE);


$array = $json;

?>

 <script type="text/javascript">
  $(function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  });
  </script>


<div class="row">

<div class="col-lg-4">
<ul class="list-group" id="sortable">
<?php 

  foreach ($array as $data => $infoArray) {

    ?>
      <li class="list-group-item">
         <span class="tpl-list" data-order="<?php echo $data ?>"><?php echo $infoArray["lng"] ?></span>
         <span>
         <input type="checkbox" checked="<?php echo $infoArray["active"]?>">
         
         </span>
      </li>
    <?php
  }
?>
</ul>
</div>
<div class="col-lg-4">

  <button type="button" class="btn btn-primary save-order">Speichern</button>

</div>

</div>




<?php 
$json_data = file_get_contents('./files/info.json');
$json = json_decode($json_data,TRUE);
?>

<div class="row">

<div class="col-lg-4">

<form role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">/uploads/</label>
    <input type="text" class="form-control xclub" value="<?php echo $json["image"]?>">
  </div>
</form>

</div>
<div class="col-lg-4">

  <button type="button" class="btn btn-primary save-xclub">Speichern</button>

</div>

</div>




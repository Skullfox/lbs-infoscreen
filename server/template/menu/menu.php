<div class="item">
<?php	
$json_data = file_get_contents('files/menu.json');
$todayMenu = json_decode($json_data,TRUE);


$today = date('D',strtotime("now"));
$tomorrow = date('D',strtotime("+1 day"));

?>

<div class="row">
  <div class="col-lg-8 col-lg-offset-2">
    



<div class="row">
<div class="col-lg-6">
    <div class="row">
        <div class="col-lg-12 ">
          <div class="panel panel-default">
            <div class="panel-body">
             Heute
            </div>
          </div>
        <div class="panel panel-info">
         <div class="panel-heading">Vorspeise</div>
            <div class="panel-body">
              <?php echo $todayMenu[$today]['starter']; ?>
            </div>
        </div>
      </div>

       <div class="col-lg-12">
        <div class="panel panel-info">
         <div class="panel-heading">Menü 1</div>
            <div class="panel-body">
              <?php echo $todayMenu[$today]['menu1']; ?>
            </div>
        </div>
      </div>
      
       <div class="col-lg-12 ">
        <div class="panel panel-info">
         <div class="panel-heading">Menü 2</div>
            <div class="panel-body">
              <?php echo $todayMenu[$today]['menu2']; ?>
            </div>
        </div>
      </div>
      
       <div class="col-lg-12 ">
        <div class="panel panel-info">
         <div class="panel-heading">Dessert</div>
            <div class="panel-body">
              <?php echo $todayMenu[$today]['dessert']; ?>
            </div>
        </div>
      </div> 
  </div>
</div>  

<div class="col-lg-6">
    <div class="row">
        <div class="col-lg-12 ">
            <div class="panel panel-default">
              <div class="panel-body">
               Morgen
              </div>
            </div>
        <div class="panel panel-info">
         <div class="panel-heading">Vorspeise</div>
            <div class="panel-body">
              <?php echo $todayMenu[$tomorrow]['starter']; ?>
            </div>
        </div>
      </div>

       <div class="col-lg-12">
        <div class="panel panel-info">
         <div class="panel-heading">Menü 1</div>
            <div class="panel-body">
              <?php echo $todayMenu[$tomorrow]['menu1']; ?>
            </div>
        </div>
      </div>
      
       <div class="col-lg-12 ">
        <div class="panel panel-info">
         <div class="panel-heading">Menü 2</div>
            <div class="panel-body">
              <?php echo $todayMenu[$tomorrow]['menu2']; ?>
            </div>
        </div>
      </div>
      
       <div class="col-lg-12 ">
        <div class="panel panel-info">
         <div class="panel-heading">Dessert</div>
            <div class="panel-body">
              <?php echo $todayMenu[$tomorrow]['dessert']; ?>
            </div>
        </div>
      </div> 
  </div>



</div>  





</div>   

  </div>
</div>

</div><!-- item -->
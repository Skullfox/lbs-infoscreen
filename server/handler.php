<?php


include 'fnc.php';

if(isset($_GET['call']) == null)
	die();

$fnc = $_GET['call'];
$arg = $_POST;

$fnc($arg);



header('Content-type: application/json');


/**
 *
 * Returns object to sender request
 *
 * @param    string Function
 * @param    array Argument
 * @return   object return to sender
 *
 */
function returnToSender($fnc,$argArray){

	$return = array();
	
	array_push($return,$fnc);
	array_push($return,$argArray);

	echo json_encode($return); // RETURN OBJECT NEVER FORGET !!!!

}


/**
 *
 * Returns object to sender request
 *
 * @param    array
 * @return   nothing
 *
 */
function demo($arg){

	print_r($arg);
	$arg = json_decode($arg);

	returnToSender('demo',$arg);
	
};


function getTemplates(){

	$path = 'template/';

	$results = scandir($path);
	$folder = array();

	foreach ($results as $result) {
		if(  ($result != '.' ) && ($result != '..' ) ){
			array_push($folder, $result);
		}

	}

	returnToSender('requestTemplates',$folder);

};


function saveOrder($arg){

 	$check = file_put_contents('./template/order/order.json', json_encode($arg));

 	returnToSender('check',true);
}

function saveXclub($arg){

 	$check = file_put_contents('./template/xclub/files/info.json', json_encode($arg));

 	returnToSender('check',true);
}

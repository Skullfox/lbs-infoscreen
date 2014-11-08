$( document ).ready(function() {



	$( "a" ).click(function() {
	 
		if ($(this).attr('data-site')) {
		 	var site = $(this).data('site');
			console.warn(site);
			loadBeTemplate(site)
	  }


	});

	function loadBeTemplate(site){
		$( ".content" ).load( "./server/template/" + site + "/admin.php" );

	}






	//save order
	$(".content").on("click",".save-order", function(){
	 
	 var arg = new Object();

	 $.each( $('.tpl-list'), function( index, value ) {
		var data = $(this).data('order');
		var str = $(this).text();
		var status = $(this,'input').is(':checked');//Parent Element !!

		arg[data] = { "lng": str, "active": status  };
		
	});

	 	console.log(arg);
		//callApi('saveOrder',arg);

	});

	//save raika
	$(".content").on("click",".save-xclub", function(){
	
		var image = $('.xclub').val();

	 	console.log(image);
		var xclub = { "image": image }
		console.log(xclub);
		callApi('saveXclub',xclub);

	});



window.check = function(data){
	console.log(data[0]);
	if(data[0] == true){

		alert('Daten gespeichert');

	}

	}

})


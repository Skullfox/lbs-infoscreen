$( document ).ready(function() {

		

	console.log('Jquery is ready to work, have fun ');


	
	init();

	konami();

	function konami(){

		$('body').after('<div class="konami" style="display:none;"></div>');
		//cheet('a a', function () {
		cheet('↑ ↑ ↓ ↓ ← → ← → b a', function () {
				window.scrollTo(0,0);
				$('.konami').delay( 1500 ).fadeIn().delay( 3500 ).fadeOut();
		});
	}

		function loadOrder(){

		$.getJSON( "./server/template/order/order.json", function( data ) {
			
			console.warn(data);
			requestTemplates(data);

		});

	}


	function init(){
		console.log('init done');

		loadOrder();


		//callApi('getTemplates');

		height = screen.height;
		$('.carousel-inner').css('height',height + 'px')


		$(document).ajaxStop(function () {
			    $('.pre-loader').hide();
		    	console.warn('All ajax stuff done');

		    	
				$('.carousel').carousel({
					 interval: 2800,
					 pause: "false"
				});

		  });
	}





	/* +++++++++++++++++++++++++++++++++++++++++++++++++ */

	function callApi(fnc, arg){

	 	$.ajax({
	 		  type: "POST",
	 		  url: "./server/handler.php?call=" + fnc,
	 		  async: true,
	 		  dataType: 'json', 
	 		  data: arg,
	 		  success: function(data,status,xhr) {
	 			 
	 			  ajaxReHandler(data)

	        }
 		  	
 		})
 		
 	};

 	function ajaxReHandler(data){
 			console.log(data[0]);
 			var fnc = data[0];
			data.shift(),
		
			console.log('AjaxRehandler ' + data);

			fncStr = eval(fnc);

			fncStr(data);

 		
 	};

	/* +++++++++++++++++++++++++++++++++++++++++++++++++ */
 	/* SOME CRAZY SHIT HERE */


 	function getTemplate(data){
 		console.log(data);
		$( ".content" ).load( "./server/template/" + data + "/" + data + ".php" );


 	}

 	function requestTemplates(data){

 		console.log(data);
 		console.warn('######');
 		var counter = 0;
		var start = '';




		$.each(data, function( index, value ) {  

			if(counter == 0){
				var start = 'active';
			}else{
				var start = '';
			};


			$( '<div class="item ' + start + '" id="' + index + '"></div>' ).appendTo( ".carousel-inner" );
			$( ".carousel div#" + index ).load( "./server/template/" + index + "/" + index + ".php",'',function(){console.log('ajax done')} );

			counter++;
		});



 	}



});




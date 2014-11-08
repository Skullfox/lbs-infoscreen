$( document ).ready(function() {


	/* DONT TOUCH IT !!!! ONLY AJAX STUFF */

 	/* 
		var arg = new Object();
		arg.folder = folder;
		
		callApi('fnc as php function',Arg as Object);
 	*/



	window.callApi = function(fnc, arg){

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
		
			console.warn('AjaxRehandler ' + data);

			fncStr = eval(fnc);

			fncStr(data);

 		
 	};


})

//Outside jQuery

function demo(data){
	console.error(data);

}



function sleep(millis, callback) {
    setTimeout(function()
            { callback(); }
    , millis);
}
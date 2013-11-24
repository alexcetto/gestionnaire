var roomVar = '';

$(function(){

    $("input.occup").click(function a(){

		var phrase;
			phrase = "./assets/updateOccup.php?id=" + $(this).attr('id');
		
		var upReq = $.ajax(phrase)
			.done(function() {
				console.log( "success" );
			})
			.fail(function() {
				console.log( "error" );
			});
	});
	
	 $("input.pres").click(function a(){

		var phrase;
			phrase = "./assets/updatePres.php?id=" + $(this).attr('id');
		
		var upReq = $.ajax(phrase)
			.done(function() {
				console.log( "success" );
			})
			.fail(function() {
				console.log( "error" );
			});
	});

	 $("#roomVar").keyup(function(){ roomVar = $(this).val();});

});


function refreshTable(){
    $('#contenu').load('./assets/refreshStatus.php?r='+roomVar, function(){
    	setTimeout(refreshTable, 1000);
    });
}
function refreshTableGlobal(){
    $('#contenuGlobal').load('./assets/refreshstatusglobal.php', function(){
    	setTimeout(refreshTableGlobal, 1000);
    });
}
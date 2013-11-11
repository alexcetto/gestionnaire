$(function(){

    $("input").click(function a(){

		var phrase;
			phrase = "./assets/updater.php?id=" + $(this).attr('id');
		
		var upReq = $.ajax(phrase)
			.done(function() {
				console.log( "success" );
			})
			.fail(function() {
				console.log( "error" );
			});
	});
});

function refreshTable(){
    $('#contenu').load('./assets/refreshStatus.php', function(){
    	setTimeout(refreshTable, 50);
    	// A CHANGER APRÈS, LÀ C'EST 1000 FOIS TROP
    });
}
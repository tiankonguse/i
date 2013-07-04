

function showMessage(message,cb,now){
	$message = $("#message");
	$message.find(".modal-body>p").text(message);
	$message.modal("show");
	$message.on("hide",cb);
	if(now > 0){
		setTimeout(cb,now);
	}
	setTimeout(function(){$message.modal('hide');},5000);
}











jQuery(document).ready(function($) {
	$('#submit-email-form').on('click', function(){
		var form = $('.email-form').serializeArray();
		console.log(emailApp.createFormObject(form));
	});
});


var EmailForm = function(){};
var emailApp = new EmailForm();
 
EmailForm.prototype.createFormObject = function(o){
	var formObject = {};
	for(var i = 0; i < o.length; i++){
		formObject[o[i]['name']] = o[i].value;
	}
	return formObject;
}
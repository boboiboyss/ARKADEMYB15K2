function is_username_valid(username){
	var name = /^[a-z]{5,9}$/g;
	if(name.test(username))
		return true;
	else
		return false
	}

function is_password_valid(password){
	var hk = /[a-z]/g;
	var hb = /[A-Z]{1}/g;
	var num = /[0-9]{1}/g;
	var kar = /[!@#$%&_-]{1}/g;
	if(hk.test(password) && hb.test(password) && num.test(password) && kar.test(password) && password.length >= 8){
		return true
	}
	else 
		return false

	}

	console.log(is_username_valid('cod3r')); //false
	console.log(is_username_valid('siska')); // true
	console.log(is_password_valid('p4s$gW')); //false
	console.log(is_password_valid('codeYourFuture!123')); //true
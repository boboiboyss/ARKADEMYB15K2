function ganti_kata(str1, str2, str3){
	var arr;
	var output = '';
	if(typeof(str1) === 'string' && typeof(str2)==='string' && typeof(str3)=== 'string'){
		arr = str1.split('');
		for(i=0; i<arr.length; i++){
			if(arr[i] === str2){
				arr[i] = str3;
			}
			output += arr[i];
		}
			return output;	
	}
     else{
        return 'Parameter harus bertipe string';
    }
}
	console.log(ganti_kata("Tuban", 'a', 'u'));
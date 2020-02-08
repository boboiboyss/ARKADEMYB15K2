function count_vowels(string){
	var str = string;
	var huruf = '';
	var output = '';
	for(i=0; i<str.length; i++){
		if(str[i].match(/[aeiou]/g))
			huruf += str[i];
		else
			output = '0';

	}
	return output = huruf.length;
}
	console.log(count_vowels('programmer')); //3
	console.log(count_vowels('hmm...')); //0
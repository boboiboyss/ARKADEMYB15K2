function fibo(col, rows){

    var a = 0, b = 1, tampung, hasil = '';
    for (var i = 1; i < col; i++){
        hasil = '';
        for(var j = 0; j <= rows; j++){
                tampung = a;
                a = a + b
                b = tampung;
                hasil += `${b}, `; 
        }
            console.log(hasil);
    }
    return ''; 
};

console.log(fibo(4, 3)); //0, 1, 1, 2,
                         //3, 5, 8, 13,
                         //21, 34, 55, 89,
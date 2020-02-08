function getBiodata(nama, umur){

	 return {
        name: nama,
        age: umur,
        address: 'Jl. Tempuling, Pancing',
        hobbies: ['Memancing','Coding', 'Sepak Bola', 'Futsal', 'Badminton'],
        is_married: false,
        list_school: [
            {'name' : 'SDN 102 Muara Bungo',        'year_in' : 2004, 'year_out' : 2010, 'major' : null},
            {'name' : 'SMP Xaverius Muara Bungo',   'year_in' : 2010, 'year_out' : 2013, 'major' : null},
            {'name' : 'SMAN 2 Muara Bungo',         'year_in' : 2013, 'year_out' : 2016, 'major' : 'IPS'},
            {'name' : 'STMIK - STIE MIKROSKIL MEDAN','year_in' : 2017, 'major' : 'Sistem Informasi'},       

        ],
        skills: [
            {'skill_name' : 'HTML',      'level' : 'advanced'},
            {'skill_name' : 'CSS',       'level' : 'advanced'},
            {'skill_name' : 'JAVASCRIPT','level' : 'beginner'},
            {'skill_name' : 'PHP',       'level' : 'beginner'},
            {'skill_name' : 'ReactJs',   'level' : 'beginner'},
            {'skill_name' : 'NodeJs',    'level' : 'beginner'},
            {'skill_name' : 'ExpressJs', 'level' : 'beginner'}


        ],
        interest_in_coding: true
    };
}

console.log(getBiodata('Yan Dwi Boy Simbolon', 22));
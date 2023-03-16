function getPilihanComputer() {
	const comp = Math.random();

	if( comp < 0.34 ) return 'gajah';
	if( comp >= 0.34 && comp < 0.67 ) return 'orang';
	return 'semut';
}

function getHasil(comp, player) {
	if( player ==  comp ) return "SERI!";
	if( player == 'gajah' ) return ( comp == 'orang' ) ? 'MENANG!' : 'KALAH!';
	if( player == 'orang' ) return ( comp == 'gajah' ) ? 'KALAH!' : 'MENANG!';
	if( player == 'semut' ) return ( comp == 'orang' ) ? 'KALAH!' : 'MENANG!';
}

const img = document.querySelectorAll('div.pilihan img');
img.forEach(function(pilihan) {
	pilihan.addEventListener('click', function() {
		const pilihanComputer = getPilihanComputer();
		const pilihanPlayer = pilihan.className;
		const hasil = getHasil( pilihanComputer, pilihanPlayer );

		const imgComputer = document.querySelector('#jumbo');
		imgComputer.setAttribute('src', 'http://localhost:8080/phpmvc - Copy/public/img/' + pilihanComputer + '.png');

		const info = document.querySelector('.info');
		info.innerHTML = hasil;
		// console.log(info);
		// console.log(hasil);
		// console.log(pilihanPlayer)
	});
});


// const img = document.querySelectorAll('div.pilihan img');


// ambil semua yang dibutuhkan
// const container = document.querySelector('.container');
// const header = document.querySelector('.header');
// const jumbo = document.getElementById('jumbo');
// const info = document.getElementById('info');
// const img = document.querySelectorAll('div.pilihan img');



// function getHasil(comp, player) {
// 	if( player ==  comp ) return "SERI!";
// 	if( player == 'gajah' ) return ( comp == 'orang' ) ? 'MENANG!' : 'KALAH!';
// 	if( player == 'orang' ) return ( comp == 'gajah' ) ? 'KALAH!' : 'MENANG!';
// 	if( player == 'semut' ) return ( comp == 'orang' ) ? 'KALAH!' : 'MENANG!';
// }

// buat eventnya
// img.forEach(function (pilihan) {
// 	pilihan.addEventListener('click', function() {
// 		// buat system AInya
// 		let camp = Math.round(Math.random() * 10) + 1;
// 		let hasil;
// 		if (camp < 4){
// 			const comp = jumbo.src = jempol.src;
// 			// const jempol= 'jempol';
// 			// return "jempol";
// 		}
// 		else if (camp > 3 && camp < 7){
// 			const comp = jumbo.src = telunjuk.src;
// 			// const telunjuk = 'telunjuk';
// 			// return "telunjuk";
// 		}
// 		else if (camp > 6 && camp < 11){
// 			const comp = jumbo.src = kelingking.src;
// 			// const kelingking = 'kelingking';
// 			// return "kelingking";
// 		}
// 		if (pilihan.id == comp) {
// 			keterangan.innerHTML('SERI!')
// 		}
// 		console.log(pilihan);
// 	});
// });


// 	// buat system hasilnya
// function hasil() {
// }
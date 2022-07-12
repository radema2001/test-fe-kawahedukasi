//  Nama : Radema Panjaitan
// Alamat Email: rademapanjaitan09@gmail.com
// Waktu Mulai :13.00
// Waktu Selesai :14.00 

var data1 = [2,3,2,2,5,7,5,2,2,2,5,5];
var data2 = [2, 1, 2, 2, 2, 8, 1, 1 ];
var data3 = [3, 3, 3, 3, 2, 4, 1, 1 ];

function findMostNumber(data) {
var count = {};
var jumlah = 0;
var filtered = [];
var hasil;
  for (var num in data) {
    count[data[num]] = (count[data[num]] || 0) + 1;
    if(count[data[num]] > jumlah) {
      jumlah = count[data[num]];
      hasil = data[num]
      filtered.push(data[num])
    }
  }
  return "total data paling banyak keluar adalah " + hasil + " dengan jumlah " + jumlah
}
console.log("Soal ke-1 : " + findMostNumber(data1));
console.log("Soal ke-2 : " + findMostNumber(data2));
console.log("Soal ke-3 : " + findMostNumber(data3));
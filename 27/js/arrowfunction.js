
let fungsi = function (nama) {
    console.log("Belajar Function" + nama);
};

fungsi("Joni");

let contoh = (nama) => {
    console.log("Belajar Function" + nama);
};

contoh("Budi");

let tambah = function (a,b) {
    return a + b;
};

console.log(tambah(2+3));

let plus = (a,b) =>  a+b;

console.log(plus(2,3));

let hasil = (a) => a * 2;

console.log(hasil(4));

let lagi = () =>console.log("coba lagi");

lagi();

let belajar =() => {
    console.log("baris satu");
    console.log("baris dua");
    console.log("baris tiga");
    console.log("baris baris selanjutnya");
};

belajar();

let nilai = 4;

let uji = (nilai < 7 ) ? ()=> predikat="gagal":() => predikat="Lulus";
console.log(uji());

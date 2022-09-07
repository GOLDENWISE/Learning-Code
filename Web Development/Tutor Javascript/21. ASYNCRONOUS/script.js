//javascript merupakan single-threaded, non-blocking, asyncronous and concurrent language
//single-thread: suatu proses dijalankan secara tahap bertahap oleh satu thread
//multi-thread: suatu proses dijalankan secara tahap bertahap oleh banyak thread secara bergantian
//blocking: saat ada proses sedang berjalan, semisal proses pertama belum selesai diproses, maka proses selanjutnya tidak bisa diproses terlebih dahulu
//non-blocking: walaupun proses pertama sedang diproses atau belum selesai diproses, proses selanjutnya tetap bisa diproses 
//syncronous: proses pertama dan proses selanjutnya harus diproses secara bertahap
//asyncronous: proses pertama dan proses selanjutnya tidak harus diproses secara bertahap atau dengan kata lain bergantian
//asyncronous pada single-thread akan memproses suatu proses secara bergantian pada satu thread, inilah yang akan disebut concurency
//asyncronous pada multi-thread akan memproses suatu proses secara bergantian pada multi thread hingga terlihat dikerjakan secara bersamaan. ini akan disebut sebagai paralel
//perbedaan syncronous/asyncronous dan blocking/non-blocking adalah, syncronous/asyncronous berhubungan dengan HTTP request
//sedangkan blocking/non-blocking berhubungan dengan IO (input output)
//didalam javascript, terdapat sebuah mesin yang disebut V8 Engine yang ditanam ke web browser
//V8 ini terdapat 2 hal yaitu heap(digunakan untuk alokasi memory, tempat penyimpanan variabel, function) dan stack(tempat pemanggilan dan eksekusi function)
//untuk membuat sebuah asyncronous ini dengan tujuan agar proses dikerjakan secara bergantian, kita dapat menggunakan function setTimeout();

//callback: function yang dikirimkan sebagai parameter pada function yang lain atau function yang dieksekusi setelah function lain dijalankan
//synchronous callback

// function halo(nama) {
//     alert(`halo ${nama}`);
// }
// function tampilkanPesan(callback) { //parameter callback ini disebut sebagai callback
//     const nama = prompt('Masukkan nama: ');
//     callback(nama);
// }
// tampilkanPesan(halo); //halo = function, yang bisa juga disebut sebagai callback

//Asynchronous callback: mengambil data lewat API (Application Programming Interface)

function getDataGame(url, success, error) {
    let xhr = new XMLHttpRequest(); //request ke HTTP lewat XML
    xhr.onreadystatechange = function() { //perintah yang dijalankan ketika state sudah siap. (state yang ready disini adalah HttpRequest)
        if(xhr.readyState === 4) { //perubahan state itu berubah dari 0 hingga 4, yang mana masing-masing state punya keadaannya masing - masing
            if(xhr.status === 200) { //status http request dinyatakan ok jika statusnya adalah 200
                success(xhr.response);
            } else if (xhr.status === 404) { //status http page not found (error) adalah 404
                error();
            }
        }
    }
    xhr.open('get', url) //namavariabelHttpRequest.open('method yang akan digunakan', url/link akses API). tujuannya adalah untuk membuka akses ke API
    xhr.send();//mengirimkan hal telah dibuka(.open()) sebelumnya ke WEB API
    //method diatas (xhr.onreadystatechange, xhr.open, xhr.send) merupakan ajax dengan menggunakan vanila javascript (javascript murni)    
}
//untuk test asyncronus nya, uncomment comment berikut
// console.log('uncomment: mulai');
getDataGame('SYSTEMAPI/datagame.json', (result) => {
    const dataGame = JSON.parse(result); //JSON.parse(result): untuk mengubah data yang ada pada file JSON menjadi object di javascript
    dataGame.forEach(e => console.log(`game ${e.game}, nicknya adalah ${e.nick} dengan rank atau level ${e.rank}`));
}, () => {
    console.log('error');
});
// console.log('uncomment: selesai');



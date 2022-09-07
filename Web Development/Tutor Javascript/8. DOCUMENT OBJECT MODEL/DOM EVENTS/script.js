const p3 = document.querySelector('.p3');
function styleColor(){
    p3.style.backgroundColor = 'royalblue';
}
//menggunakan method inline html: dapat dilihat pada index.html
const p2 = document.querySelector('.p2');
function styleColorp2(){
    p2.style.backgroundColor = 'lightblue';
}
p2.onclick = styleColorp2; //syntax --> variabel elemen.onclick = nama function yang menjalankan operasi mengubah warna. bisa menggunakan function declaration atau function expression

//method addEventListener(). syntax --> variabel elemen.addEventListener('event. bisa berupa click atau sebagainya', 'function yang menjalankan operasi. bisa menggunakan function expression atau function declaration')
const p4= document.querySelector('section#b p'); 
p4.addEventListener('click', function(){
    const li = document.createElement('li');
    const text = document.createTextNode('Item baru setelah diclick dengan method addEventListener()');
    li.appendChild(text);
    const ul = document.querySelector('section#b ul');
    ul.appendChild(li);
});
//perbedaan menggunakan addEventListener dan onclick adalah, onclick bekerja dengan menimpa operasi sebelumnya
//semisal, operasi onclick diawal merubah warna background, kemudian operasi onclick kedua merubah warna tulisan
//maka operasi onclick yang dijalankan hanya operasi onclick paling akhir, yaitu merubah warna tulisan
//sedangkan addEventListener akan menjalankan keduanya

//event - event
//on+ input
//on+ change
//mouse event
/*
-on+ click
-on+ dblclick
-on+ mouseover
-on+ mouseenter
-on+ mouseup
-on+ wheel
*/
//keyboard event
/*
-on+ keydown
-on+ keypress
-on+ keyup
*/
//resources event
//focus event
//view event
/* 
-on+ resize
-on+ scroll
*/
//form event
/* 
-on+ reset
-on+ submit
*/
//css animation & transition event
//drag & drop event
//jangan gunakan "on" pada addEventListener
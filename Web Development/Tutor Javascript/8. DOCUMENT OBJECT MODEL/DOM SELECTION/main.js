//DOM Selection Method:
/*
document.getElementById(): memilih element berdasarkan id ==> element
document.getElementsByTagName(): memilih element-element berdasarkan tag ==> HTMLCollection
document.getElementsByClassName(): memilih element-element berdasarkan class ==> HTMLCollection
document.querySelector(): mencari element berdasarkan selectornya ==> element
document.querySelectorAll(): mencari semua element berdasarkan selectornya ==> nodelist
*/

// document.getElementById()
console.log('document.getElementById(\'judul\')');
var a = document.getElementById('judul');
console.log(a);
//mengubah style tulisan atau background pada sebuah id menggunakan javascript
a.style.color = 'red'; //style yang dibuat dengan javascript bersifat inline
a.style.backgroundColor = 'blue';
//mengubah tulisan pada html menggunakan javascript
//before: #judul = Hello World
a.innerHTML = 'Abdullah Ahmad Hafiz';
//after: #judul = Abdullah Ahmad Hafiz

//document.getElementsByTagName()
console.log('document.getElementsByTagName(\'p\')');
var b = document.getElementsByTagName('p');
console.log(b);
//mengubah style tulisan atau background pada sebuah id menggunakan javascript
//element spesifik
b[0].style.color = 'royalblue';
b[0].style.backgroundColor = '#E2252B';
var e = document.getElementsByTagName('h1');
console.log(e);
var c = document.getElementsByTagName('h1')[0];
console.log(c);
c.style.fontSize = '50px';
//semua element
for(var i = 1; i < b.length; i++){
    b[i].style.color = 'red';
    b[i].style.backgroundColor = 'blue';
}

//document.getElementsByClassName()
console.log('document.getElementsByClassName(\'p1\')');
var d = document.getElementsByClassName('p1');
console.log(d);
d[0].innerHTML = 'ini diubah oleh javascript';

//document.querySelector()
console.log('document.querySelector(\'#b p\')');
var f = document.querySelector('#b p'); //element pada html dengan id=b, dan elemen p
console.log(f);
f.style.color = 'white';
f.style.fontSize = '20px';
var g = document.querySelector('section#b ul li:nth-child(2)'); //section id=b, element parent ul dengan child-2 li
console.log(g);
g.style.backgroundColor = 'royalblue';

//document.querySelectorAll()
console.log('document.querySelectorAll(\'section#b ul li\')'); //section id=b, element parent ul dengan semua anak ul yaitu li 
var h = document.querySelectorAll('section#b ul li');
console.log(h);
for(var i = 0; i < h.length; i++){
    if(i === 1){
        continue;
    }
    h[i].style.backgroundColor = 'green';
}
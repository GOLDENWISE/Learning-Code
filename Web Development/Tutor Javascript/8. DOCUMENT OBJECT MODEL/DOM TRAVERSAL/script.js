//cara menghapus sebuah elemen. syntax dibawah hanya dapat menghapus element pertama saja
// const container = document.getElementsByClassName('container')[0];
// const card = container.getElementsByClassName('card')[0];
// const close = container.getElementsByClassName('close')[0];
// close.addEventListener('click', function(){
//     container.removeChild(card);
// });

//dengan menggunakan DOM Transversal, elemen pertama, kedua, dsb juga dapat dilakukan operasi
//DOM Transversal: menelusuri
const close = document.querySelectorAll('.close');
let parentClose;
for(let i = 0; i < close.length; i++){
    close[i].addEventListener('click', function(el){
        parentClose = el.target.parentElement; //cara mengetahui siapakah element parent dari suatu element
        container = parentClose.parentElement;
        container.removeChild(parentClose);
        el.preventDefault(); //mencegah aksi default yang terjadi pada suatu element, dikenal dengan prevent default
        el.stopPropagation(); //menghentikan aksi atau event yang dilakukan oleh element parent jika yang event yang ingin dikerjakan hanya event element child 
    });
}

const cards = document.querySelectorAll('.card');
for(let i = 0; i < cards.length; i++){
    cards[i].addEventListener('click', function(card){
            alert('ok');
    });
}

//method DOM Transversal: penerapan
const nama = document.querySelector('.nama');
console.log('ini class nama: ');
console.log(nama);
console.log('ini parent node: ')
console.log(nama.parentNode);
console.log('ini parent element: ')
console.log(nama.parentElement);
console.log('ini next sibling: ')
console.log(nama.nextSibling);
console.log('ini next element sibling: ')
console.log(nama.nextElementSibling);
console.log('ini previous sibling: ')
console.log(nama.previousSibling);
console.log('ini previous element sibling: ')
console.log(nama.previousElementSibling);

//DOM Transversal Method: penjelasan
//parentNode: menelusuri element parent dari suatu elemen (node)
//parentElement: menelusuri element parent dari suatu elemen (element html)
//nextSibling: menelusuri element saudara selanjutnya dari suatu elemen (node)
//nextElementSibling: menelusuri element saudara selanjutnya dari suatu elemen (element html)
//previousSibling: menelusuri element saudara sebelumnya dari suatu  (node)
//previousElementSibling: menelusuri element saudara sebelumnya dari suatu elemen (element html)

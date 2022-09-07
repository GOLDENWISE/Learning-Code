//membuat button untuk melihat warna favorit
const tombol = document.querySelector('#tombol');
const body = document.querySelector('body');
tombol.addEventListener('click', function(){
    body.classList.toggle('royalBlue');
});

//membuat button random color
const random = document.createElement('button');
const textRandom = document.createTextNode('Random Color');
random.appendChild(textRandom);
random.setAttribute('type', 'button');
tombol.after(random);
random.addEventListener('click', function(){
    const r = Math.round(Math.random() * 255 + 1);
    const g = Math.round(Math.random() * 255 + 1);
    const b = Math.round(Math.random() * 255 + 1);
    body.style.backgroundColor = 'rgb('+ r +', '+ g +', '+ b +')';
});
//fungsi Math
//.random: mengacak bilangan dalam skala 0 hingga 1
//.floor: pembulatan kebawah
//.ceil: pembulatan keatas
//.round: pembulatan sesuai MTK(jika lebih kecil dari 0.5, dibulatkan kebawah, jika lebih atau sama dengan 0.5 dibulatkan keatas)

//membuat button color dengan kadar warnat tertentu
const Merah = document.querySelector('input[name=sMerah]');
const Hijau = document.querySelector('input[name=sHijau]');
const Biru = document.querySelector('input[name=sBiru]');
Merah.addEventListener('input', function(){
    const wMerah = Merah.value;
    const wHijau = Hijau.value;
    const wBiru = Biru.value;
    body.style.backgroundColor = 'rgb('+ wMerah +','+ wHijau +', '+ wBiru +')';
});
Hijau.addEventListener('input', function(){
    const wMerah = Merah.value;
    const wHijau = Hijau.value;
    const wBiru = Biru.value;
    body.style.backgroundColor = 'rgb('+ wMerah +','+ wHijau +', '+ wBiru +')';
});
Biru.addEventListener('input', function(){
    const wMerah = Merah.value;
    const wHijau = Hijau.value;
    const wBiru = Biru.value;
    body.style.backgroundColor = 'rgb('+ wMerah +','+ wHijau +', '+ wBiru +')';
});

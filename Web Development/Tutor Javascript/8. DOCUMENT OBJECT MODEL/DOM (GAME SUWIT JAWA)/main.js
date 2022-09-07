// //tampilkan hasilnya
let skorPlayer = 0, 
skorComputer = 0,
optionPlayer,
optionComputer;
//menentukan pilihan dari user
const gajah = document.querySelector('img[name=Gajah]');
const manusia = document.querySelector('img[name=Manusia');
const semut = document.querySelector('img[name=Semut]');
let img;
gajah.addEventListener('click', function(){
    optionPlayer = "gajah";
    optionComputer = Math.random(); //syntax ini digunakan untuk menentukan bilangan secara random. dengan bilangan tersebut < 1
    
    //pilihan dari computer : secara acak/random
    const computer = document.querySelector('.computer');
    if(optionComputer < 0.34){
        optionComputer = "semut";
        const imgSemut = document.createElement('img');
        imgSemut.setAttribute('src', 'semut.jpg');
        imgSemut.setAttribute('alt', 'Semut');
        imgSemut.setAttribute('name', 'Semut');

        if(skorComputer+skorPlayer === 0){
            computer.appendChild(imgSemut);
            img = imgSemut;
        }else{
            computer.replaceChild(imgSemut, img);
            img = imgSemut;
        }
    }else if(optionComputer >= 0.34 && optionComputer < 0.67){
        optionComputer = "manusia";
        const imgManusia = document.createElement('img');
        imgManusia.setAttribute('src', 'manusia.jpg');
        imgManusia.setAttribute('alt', 'Manusia');
        imgManusia.setAttribute('name', 'Manusia');
        if(skorComputer+skorPlayer === 0){
            computer.appendChild(imgManusia);
            img = imgManusia;
        }else{
            computer.replaceChild(imgManusia, img);
            img = imgManusia;
        }
    }else{
        optionComputer = "gajah";
        const imgGajah = document.createElement('img');
        imgGajah.setAttribute('src', 'gajah.jpg');
        imgGajah.setAttribute('alt', 'Gajah');
        imgGajah.setAttribute('name', 'Gajah');
        if(skorComputer+skorPlayer === 0){
            computer.appendChild(imgGajah);
            img = imgGajah;
        }else{
            computer.replaceChild(imgGajah, img);
            img = imgGajah;
        }
    }

    //hasil
    if(optionComputer === 'manusia'){
        skorPlayer = skorPlayer + 1;
    }else if(optionComputer === 'semut'){
        skorComputer = skorComputer + 1;
    }else if(optionPlayer === optionComputer){
        skorPlayer = skorPlayer + 1;
        skorComputer = skorComputer + 1;
    }

    //menampilkan hasil
    const skor = document.getElementsByClassName('skor')[0];

    const parentBot = skor.getElementsByClassName('bot')[0];
    const childBot = parentBot.querySelector('span.skorBot');
    let updateChildBot = document.createElement('span');
    updateChildBot.setAttribute('class', 'skorBot');
    let skorBot = document.createTextNode(skorComputer);
    updateChildBot.appendChild(skorBot);
    parentBot.replaceChild(updateChildBot, childBot);
    
    const parentReal = skor.getElementsByClassName('real')[0];
    const childReal = parentReal.querySelector('span.skorReal');
    let updateChildReal = document.createElement('span');
    updateChildReal.setAttribute('class', 'skorReal');
    let skorReal = document.createTextNode(skorPlayer);
    updateChildReal.appendChild(skorReal);
    parentReal.replaceChild(updateChildReal, childReal);

});
manusia.addEventListener('click', function(){
    optionPlayer = "manusia";
    optionComputer = Math.random(); //syntax ini digunakan untuk menentukan bilangan secara random. dengan bilangan tersebut < 1
    
    //pilihan dari computer : secara acak/random
    const computer = document.querySelector('.computer');
    if(optionComputer < 0.34){
        optionComputer = "semut";
        const imgSemut = document.createElement('img');
        imgSemut.setAttribute('src', 'semut.jpg');
        imgSemut.setAttribute('alt', 'Semut');
        imgSemut.setAttribute('name', 'Semut');

        if(skorComputer+skorPlayer === 0){
            computer.appendChild(imgSemut);
            img = imgSemut;
        }else{
            computer.replaceChild(imgSemut, img);
            img = imgSemut;
        }
    }else if(optionComputer >= 0.34 && optionComputer < 0.67){
        optionComputer = "manusia";
        const imgManusia = document.createElement('img');
        imgManusia.setAttribute('src', 'manusia.jpg');
        imgManusia.setAttribute('alt', 'Manusia');
        imgManusia.setAttribute('name', 'Manusia');
        if(skorComputer+skorPlayer === 0){
            computer.appendChild(imgManusia);
            img = imgManusia;
        }else{
            computer.replaceChild(imgManusia, img);
            img = imgManusia;
        }
    }else{
        optionComputer = "gajah";
        const imgGajah = document.createElement('img');
        imgGajah.setAttribute('src', 'gajah.jpg');
        imgGajah.setAttribute('alt', 'Gajah');
        imgGajah.setAttribute('name', 'Gajah');
        if(skorComputer+skorPlayer === 0){
            computer.appendChild(imgGajah);
            img = imgGajah;
        }else{
            computer.replaceChild(imgGajah, img);
            img = imgGajah;
        }
    }
    
    //hasil
    if(optionComputer === 'semut'){
        skorPlayer = skorPlayer + 1;
    }else if(optionComputer === 'gajah'){
        skorComputer = skorComputer + 1;
    }else if(optionPlayer === optionComputer){
        skorPlayer = skorPlayer + 1;
        skorComputer = skorComputer + 1;
    }

    //menampilkan hasil
    const skor = document.getElementsByClassName('skor')[0];

    const parentBot = skor.getElementsByClassName('bot')[0];
    const childBot = parentBot.querySelector('span.skorBot');
    let updateChildBot = document.createElement('span');
    updateChildBot.setAttribute('class', 'skorBot');
    let skorBot = document.createTextNode(skorComputer);
    updateChildBot.appendChild(skorBot);
    parentBot.replaceChild(updateChildBot, childBot);
        
    const parentReal = skor.getElementsByClassName('real')[0];
    const childReal = parentReal.querySelector('span.skorReal');
    let updateChildReal = document.createElement('span');
    updateChildReal.setAttribute('class', 'skorReal');
    let skorReal = document.createTextNode(skorPlayer);
    updateChildReal.appendChild(skorReal);
    parentReal.replaceChild(updateChildReal, childReal);
});
semut.addEventListener('click', function(){
    optionPlayer = "semut";
    optionComputer = Math.random(); //syntax ini digunakan untuk menentukan bilangan secara random. dengan bilangan tersebut < 1
    
    //pilihan dari computer : secara acak/random
    const computer = document.querySelector('.computer');
    if(optionComputer < 0.34){
        optionComputer = "semut";
        const imgSemut = document.createElement('img');
        imgSemut.setAttribute('src', 'semut.jpg');
        imgSemut.setAttribute('alt', 'Semut');
        imgSemut.setAttribute('name', 'Semut');

        if(skorComputer+skorPlayer === 0){
            computer.appendChild(imgSemut);
            img = imgSemut;
        }else{
            computer.replaceChild(imgSemut, img);
            img = imgSemut;
        }
    }else if(optionComputer >= 0.34 && optionComputer < 0.67){
        optionComputer = "manusia";
        const imgManusia = document.createElement('img');
        imgManusia.setAttribute('src', 'manusia.jpg');
        imgManusia.setAttribute('alt', 'Manusia');
        imgManusia.setAttribute('name', 'Manusia');
        if(skorComputer+skorPlayer === 0){
            computer.appendChild(imgManusia);
            img = imgManusia;
        }else{
            computer.replaceChild(imgManusia, img);
            img = imgManusia;
        }
    }else{
        optionComputer = "gajah";
        const imgGajah = document.createElement('img');
        imgGajah.setAttribute('src', 'gajah.jpg');
        imgGajah.setAttribute('alt', 'Gajah');
        imgGajah.setAttribute('name', 'Gajah');
        if(skorComputer+skorPlayer === 0){
            computer.appendChild(imgGajah);
            img = imgGajah;
        }else{
            computer.replaceChild(imgGajah, img);
            img = imgGajah;
        }
    }

    //hasil
    if(optionComputer === 'gajah'){
        skorPlayer = skorPlayer + 1;
    }else if(optionComputer === 'manusia'){
        skorComputer = skorComputer + 1;
    }else if(optionPlayer === optionComputer){
        skorPlayer = skorPlayer + 1;
        skorComputer = skorComputer + 1;
    }

    //menampilkan hasil
    const skor = document.getElementsByClassName('skor')[0];

    const parentBot = skor.getElementsByClassName('bot')[0];
    const childBot = parentBot.querySelector('span.skorBot');
    let updateChildBot = document.createElement('span');
    updateChildBot.setAttribute('class', 'skorBot');
    let skorBot = document.createTextNode(skorComputer);
    updateChildBot.appendChild(skorBot);
    parentBot.replaceChild(updateChildBot, childBot);
        
    const parentReal = skor.getElementsByClassName('real')[0];
    const childReal = parentReal.querySelector('span.skorReal');
    let updateChildReal = document.createElement('span');
    updateChildReal.setAttribute('class', 'skorReal');
    let skorReal = document.createTextNode(skorPlayer);
    updateChildReal.appendChild(skorReal);
    parentReal.replaceChild(updateChildReal, childReal);
}); 
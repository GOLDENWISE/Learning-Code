//tampilkan hasilnya
var opsi = true,
    skorPlayer = 0, 
    skorComputer = 0;
while(opsi == true){
    //menentukan pilihan dari user
    var player = prompt("Masukkan pilihan anda : (gajah, semut, manusia) ");
    //pilihan dari computer : secara acak/random
    var computer = Math.random(); //syntax ini digunakan untuk menentukan bilangan secara random. dengan bilangan tersebut < 1
    if(computer < 0.34){
        computer = "semut";
    }else if(computer >= 0.34 && computer < 0.67){
        computer = "manusia";
    }else{
        computer = "gajah";
    }
    if(((player == "manusia") && (computer == "semut")) || ((player == "semut") && (computer == "gajah")) || ((player == "gajah") && (computer == "manusia"))){
        alert("Anda menang!");
        skorPlayer = skorPlayer + 1;
    }else if(((player == "manusia") && (computer == "gajah")) || ((player == "gajah") && (computer == "semut")) || ((player == "semut") && (computer == "manusia"))){
        alert("Anda kalah");
        skorComputer = skorComputer + 1;
    }else if(player == computer){
        alert("SERI");
    }else{
        alert("pilihan yang anda masukkan tidak sesuai!");
    }
    opsi = confirm("lanjut?");
}
alert("(player - computer): " + skorPlayer + " - " + skorComputer);
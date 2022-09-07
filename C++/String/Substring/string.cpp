#include <iostream>
#include <string>
using namespace std;
int main()
{
    string kalimat_1("Selamat Hari Raya Idul Fitri ya kawan ya");
    string kalimat_2("Mohon Maaf lahir dan batin");
    cout << kalimat_1 << "\n";
    /*mengambil huruf atau kata dari suatu string dapat dijalankan dengan memasukkan kode
    "Variabel suatu string.substr(index,panjang);". semisal mengambil kata Raya maka indexnya dihitung per huruf(termasuk spasi)
    dari S hingga R (S,e,l,a,m,a,t, ,H,a,r,i, ,). sehingga, indexnya ada 13. dan panjang dihitung berdasarkan panjang kata yang ingin diambil
    atau ditampilkan. Yang mana, kata "Raya" memiliki panjang = 4. sehingga kode yang dimasukkan seperti dibawah ini */
    //menampilkan kata "Raya"
    cout << kalimat_1.substr(13,4)<<"\n";
    //menampilkan kata "lahir"
    cout << kalimat_2.substr(11,5)<<"\n";

    //untuk mencari index dari suatu string, bisa menggunakan kode "variabel suatu string.find("string yang dicari");"
    //contoh, mencari index kata "Raya"
    cout <<"Posisi kata raya : "<< kalimat_1.find("Raya")<<"\n";
    //mencari posisi index dari suatu string menggunakan integer
    //posisi index yang ditampilkan adalah posisi string pada posisi pertama
    int a = kalimat_1.find("ya");
    cout << a << "\n";
    //mencari posisi index dari suatu string yang sama lebih dari 1
    //semisal mencari kata "ya" pada posisi kedua
    cout << kalimat_1.find("ya", a + 1) <<"\n";
    //kata "ya" pada posisi ketiga
    int b = kalimat_1.find("ya", a + 1);
    cout << kalimat_1.find("ya", b + 1 ) <<"\n";
    //mencari kata "ya" pada posisi terakhir, gunakan syntax "variabel suatu string.rfind("kalimat yang dicari");"
    cout << kalimat_1.rfind("ya") <<"\n";
    return 0;
}

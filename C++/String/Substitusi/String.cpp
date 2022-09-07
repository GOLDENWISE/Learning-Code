#include <iostream>
#include <string>
using namespace std;
int main()
{
    string kalimat_1("Selamat Hari Raya Idul Fitri ya kawan ya");
    string kalimat_2("Mohon Maaf lahir dan batin");
    cout <<"1 : "<< kalimat_1 << "\n";
    cout <<"2 : "<< kalimat_2 << "\n";
    //swap string
    //untuk menukar suatu string dengan string yang lain, dapat menggunakan syntax "variabel suatu string yang ingin diganti.swap(variabel pengganti dari variabel suatu string yang ingin diganti);"
    cout <<"Swap String\n";
    kalimat_1.swap(kalimat_2);
    cout <<"1 : "<< kalimat_1 << "\n";
    cout <<"2 : "<< kalimat_2 << "\n";
    //replace string
    //untuk mengganti string pada suatu variabel dengan string yang lain, gunakan syntax "variabel suatu string yang ingin diganti.replace(index,panjang,"kalimat pengganti");"
    cout << kalimat_2.find("kawan")<<"\n"; //mengetahui posisi string "kawan"
    cout <<"Replace string\n";
    kalimat_2.replace(32,5, "teman");//mengganti string "kawan" menjadi "teman"
    cout <<"2 : "<< kalimat_2 << "\n";
    //insert string (menyisipkan atau menambahkan string)
    //gunakan syntax "variabel suatu string.insert(index,"kalimat tambahan");"
    //index yang diinput merupakan tempat dari string setelah kalimat yang diganti
    //semisal string = nama ku hafiz. jika ingin menambahkan ahmad, sehingga outputnya menjadi ahmad hafiz.
    //index yang digunakan adalah index pada kalimat hafiz
    cout << "Insert String\n";
    kalimat_2.insert(kalimat_2.find(" ya ")," dihari senin");
    cout <<"2 : "<< kalimat_2 << "\n";
    return 0;

}

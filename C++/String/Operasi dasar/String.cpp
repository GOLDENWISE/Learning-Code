#include <iostream>
#include <string>
using namespace std;
int main()
{
    string kata("cat");
    cout << kata << endl; //menampilkan kata

    //menampilkan kata berdasarkan indeks
    cout << "indeks 0 : " << kata[0] << endl;
    cout << "indeks 1 : " << kata[1] << endl;
    cout << "indeks 2 : " << kata[2] << endl;

    //merubah karakter pada index tertentu
    kata[1] = 'e';
    cout << kata << endl;

    //konkatenasi
    string kata2(kata + "ar");
    cout << kata2 << endl;

    string kata3(" membahana");
    kata2.append(kata3); //menampilkan string pada variabel kata3 di belakang kata2
    cout << kata2 << endl;

    string kata4("ahay!");
    kata2 += " " + kata4; //menambahkan string pada kata 2 dengan variabel kata4 dan spasi
    cout << kata2 << endl;

    return 0;
}

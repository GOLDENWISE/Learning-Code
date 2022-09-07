#include <iostream>
#include <fstream> //library untuk stream ke file external. dimana didalamnya terdapat ofstream, ifstream dan fstream itu sendiri
using namespace std;
int main()
{
    ofstream myFile;
    /*
    ios::out = default, operasi output
    ios::app = menuliskan pada akhir baris
    ios::trunc = default, membuat file jika tidak ada dan kalau ada akan dihapus dan dibuat baru
    */
    myFile.open("data3.txt", ios::app);
    myFile <<"Menuliskan pada baris kedua\n"; //menambah teks baru
    myFile.close();
    myFile.open("data1.txt", ios::out);
    myFile <<"Menuliskan pada baris kedua\n"; //overwrite
    myFile.close();
    myFile.open("data2.txt", ios::trunc);
    myFile <<"Menuliskan pada baris kedua\n";  //overwrite
    myFile.close();

    return 0;
}

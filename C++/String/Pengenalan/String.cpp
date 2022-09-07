#include <iostream>
#include <string>
using namespace std;
int main()
{
    char kata[5] = {'m','o','b','i','l'}; //elemen karakter pada array
    cout << kata << " "; //output string berdasarkan banyak karakter pada array

    string Kata("cat"); //menggunakan library string
    cout << Kata << endl;

    string data;
    cout <<"Masukkan kata : "; cin >> data;
    cout <<"Kata yang di input adalah : "<< data << endl;

    return 0;
}

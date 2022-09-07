#include <iostream>
#include <string>
using namespace std;
//ternary operator = tanda tanya (?)
//(kondisi) ? hasil1 : hasil2 
//jika kondisi == true, hasil1 akan diambil, jika kondisi == false, hasil2 yang akan diambil
/*
ternary memiliki kesamaan dengan syntax if else, yaitu
if(kondisi)
{
    output = hasil1;
}
else
{
    output = hasil2;
}
*/
int main()
{
    int a,b;
    string hasil1, hasil2, output;
    hasil1="a lebih kecil dari b";
    hasil2="a lebih besar dari b";
    cout << "Masukkan nilai a : "; cin >> a;
    cout << "Masukkan nilai b : "; cin >> b;    
    output = (a < b) ? hasil1 : hasil2;
    cout << output << "\n";

    return 0;
}

#include <iostream>
using namespace std;

int main(){

    int a = 6;
    int b = 4;

    int hasil;

    //operatornya ; +, -, *, /, %

    //penjumlahan
    hasil = a + b;
    cout << a << " + " <<  b << " = " << hasil << endl;

    //pengurangan 
    hasil = a - b;
    cout << a << " - " << b << " = " << hasil << endl;

    //perkalian
    hasil = a * b;
    cout << a << " x " << b << " = " << hasil << endl;

    //pembagian
    hasil = a / b;
    cout << a << " / " << b << " = " << hasil << endl;

    //modulus atau sisa pembagian ( % )
    // modulus tidak berlaku jika terdapat float pada salah satu data (semua data harus int)

    hasil = a % b;
    cout << a << " % " << b << " = " << hasil << endl;
     
    // urutan eksekusi
    hasil = a + b * b;
    cout << a << " + " << b << " x " << b << " = " << hasil << endl;
    
    hasil = ( a + b ) * b;
    cout << " ( " << a << " + " << b << " ) " << " x " << b << " = " << hasil << endl;

    cin.get();
    return 0;
}
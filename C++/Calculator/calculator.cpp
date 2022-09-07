#include <iostream>
using namespace std;
int main(){
    system("");
    int lanjut;
    float a,b,hasil;
    char aritmatika;

    cout << "SELAMAT DATANG DI PROGRAM CLACULATOR \n";
    cout << "masukkan operasi hitung yang ingin anda lakukan \n \n";


    cout <<  "Masukkan Nilai pertama : ";
    cin >> a;
    cout << " Pilih Operator +,-,*,/";
    cin >> aritmatika;
    cout << "masukkan nilai kedua :";
    cin >> b;


    if (aritmatika == '+'){
        hasil = a + b;
        cout << a << "+" << b << "=" << hasil << endl;

    } else if (aritmatika == '-'){
        hasil = a - b;
        cout << a << "-" << b << "=" << hasil << endl;
    } else if (aritmatika == '*'){
        hasil = a * b;
        cout << a << "x" << b << "=" << hasil << endl;
    } else if (aritmatika == '/'){
        hasil = a / b;
        cout << a << ":" << b << "=" << hasil << endl;
    } else {
        cout << "operator tidak terdeteksi" << endl;
    }
    return 0;
}

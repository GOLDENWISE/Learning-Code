#include <iostream>
using namespace std;

int kuadrat(int x){
    int y;
    y = x*x;
    return y;
}
int tambah(int a, int b){
    int c;
    c = a + b;
    return c;
}
int main(){

    int input, hasil, a, b, hasil2;
    cout << "Masukkan Nilai yang mau dikuadratkan : "; cin >> input;
    hasil = kuadrat(input);

    cout <<"Hasil kuadratnya : " << hasil << endl;

    cout << "Masukkan Nilai A : "; cin >> a;
    cout << "Masukkan Nilai B : "; cin >> b;

    hasil2 = tambah(a,b);

    cout << "A + B = " << hasil2 << endl;

    cin.get();
    return 0;
}

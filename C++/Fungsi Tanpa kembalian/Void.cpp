#include <iostream>

using namespace std;

int kuadrat(int x){
    int y;
    y = x*x;
    return y;
}
void tampilkan(int input){
    cout <<"Hasilnya adalah : ";
    cout << input << endl;
}
int main(){
    int input, hasil;
    cout <<"Masukkan nilai yang mau dikuadratkan : ";cin >> input;
    hasil = kuadrat(input);
    tampilkan(hasil);

    cin.get();
    return 0;
}

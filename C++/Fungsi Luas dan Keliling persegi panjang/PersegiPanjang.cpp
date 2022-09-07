#include <iostream>
using namespace std;

double hitung_luas(double p, double l){
    double luas = p*l;
    return luas;
}
double hitung_keliling(double p, double l){
    double keliling = p + l;
    return keliling;
}
void tampilkan_luas(double luas){
    cout << "luas : "<< luas <<endl;
}
void tampilkan_keliling(double keliling){
    cout << "keliling : "<< keliling <<endl;
}
int main(){
    double panjang, lebar, luas, keliling;
    cout << "Panjang : "; cin >> panjang;
    cout << "Lebar : "; cin >> lebar;
    luas = hitung_luas(panjang, lebar);
    tampilkan_luas(luas);

    keliling = hitung_keliling(panjang, lebar);
    tampilkan_keliling(keliling);

    cin.get();
    return 0;
}

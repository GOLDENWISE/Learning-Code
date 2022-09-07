#include <iostream>
using namespace std;

//overloading = menimpa

//basic function
int luas_kotak(int panjang, int lebar){
    int luas = panjang * lebar;
    return luas;
}
//overload function
int luas_kotak(int sisi){
    int luas = sisi * sisi;
    return luas;
}
double luas_kotak(double sisi){
    double luas = sisi * sisi;
    return luas;
}
int main(){

    cout << "Luas Kotak 2x3 : "<<luas_kotak(2,3)<<endl;
    cout << "Luas kotak 2x2 (persegi) : "<<luas_kotak(2)<<endl;
    cout << "Luas Kotak 2.5x2.5 (Persegi) : "<<luas_kotak(2.5)<<endl;
    cin.get();
    return 0;
}

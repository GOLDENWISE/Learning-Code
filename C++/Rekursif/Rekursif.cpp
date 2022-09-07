#include <iostream>
using namespace std;
//iterasi
int pangkatIterasi(int a, int b){
    int hasil = a;
    for(int i = 1; i < b; i++){
        hasil = hasil * a;
    } return hasil;
}
//rekursif = pengulangan
int pangkatRekursif(int a, int b){
    if(b <= 1){
        return a; //--> ini adalah hasil dari perpangkatan dengan metode rekursif.
    }else{
        return a * pangkatRekursif(a,(b-1)); //--> ini adalah batas dari perpangkatan.
    }
}
int main(){
    int a;
    int b;
    cout<<"angka : ";cin >> a;
    cout<<"Pangkat : ";cin >> b;
    cout<<"Hasil dari pangkat iterasi : "<<pangkatIterasi(a,b)<<endl;
    cout<<"Hasil dari pangkat rekursif : "<<pangkatRekursif(a,b)<<endl;

    cin.get();
    return 0;
}

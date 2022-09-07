#include <iostream>
using namespace std;

int Faktorial(int a){
    int hasil = a;
    if(a <= 1){
        cout << a <<" : ";
        return hasil;
    }else{
        cout << a << "*";
        return a * Faktorial(a-1);
    }
}
int main(){
    int a;
    cout << "Masukkan Nilai Faktorial : ";cin >> a;
    cout <<"Faktorial dari "<< a << " adalah : "<<Faktorial(a)<<endl;
    cin.get();
    return 0;
}

#include <iostream>
using namespace std;

int main(){
    int a = 5;
    //pointer
    int *e = &a;

    cout << "Nilai dari a : " << a << endl;
    cout << "Alamat dari a : " << e << endl;

    //null pointer
    int *b = nullptr;
    cout << "Null pointer : " << b << endl;
    b = &a;
    cout << "Alamat dari a : " << b << endl;

    //dereferencing, mengambil sebuah data dari sebuah pointer
    a = 10;
    cout << "Mengambil dari pointer e : " << *e << endl;

    cin.get();
    return 0;
}

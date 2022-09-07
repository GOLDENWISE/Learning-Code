#include <iostream>
using namespace std;

int main(){
    //variabel
    int a = 5;
    cout << "Nilai dari a : " << a << endl;
    cout << "Address dari a : " << &a <<endl<<endl;

    // referencing
    int &b = a;
    cout << "Nilai dari b : " << b << endl;
    cout << "Address dari b : "<<&b<<endl<<endl;
    b = 10;
    cout << "Nilai dari a : " << a <<endl;
    cout << "Nilai dari b : " << b <<endl<<endl;
    a = 20;
    cout << "Nilai dari a : " << a << endl;
    cout << "Nilai dari b : " << b << endl;
    //sehingga, dengan adanya reference, nilai a dan b menjadi berkaitan atau sama.
    //semisalnya kita ingin memasukkan nilai a awalnya adalah 5, dan nilai b sama dengan a yaitu 5. saat kita merubah nilai b menjadi 10, dengan referencing nilai a juga menjadi 10.
    //begitu juga sebaliknya, jika nilai a kita ubah menjadi 20, nilai b juga akan berubah menjadi 20
    cin.get();
    return 0;
}

#include <iostream>
using namespace std;

int main(){
    
    //increment dan decrement
    //preincrement dan post increment

    int a = 5;
    int b = 5;

    //postincrement (a++ : a = a + 1, dimana hasil yang diambil adalah hasil 'sebelum ditambah 1')
    cout << "nilai awal a : " << a << endl;
    cout << a++ << endl;
    cout << "hasil penanda a++ : " << a << endl;

    //preincrement(++b : b = b + 1, dimana hasil yang diambil adalah hasil 'setelah ditambah 1')
    cout << "nilai awal b : " << b << endl;
    cout << ++b << endl;
    cout << "hasil penanda ++b : " << b << endl;

    //postdecrement (a-- : a = a - 1, sama seperti postincrement, hanya saja decrement dikurang)
    cout << "nilai awal a : " << a << endl;
    cout << a-- << endl;
    cout << "hasil penanda a-- : " << a << endl;

    //predecrement (--b)
    cout << "nilai awal b : " << b << endl;
    cout << --b << endl;
    cout << "hasil penanda --b : " << b << endl;

    //PENTING!! untuk algoritma diatas harus berurutan, karena jika sudah tidak berurutan,
    //hasilnya bisa kacau,
    //karena nilai integer diatas jika sudah kena a++ / ++b, maka a--/--b akan melakukan input data sesuai data a++/++b

    cin.get();
    return 0;
}
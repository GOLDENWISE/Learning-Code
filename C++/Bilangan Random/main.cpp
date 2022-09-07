#include <iostream>
#include <cstdlib> //library c++ yang didalamnya mengandung syntax bilangan random
#include <ctime> //library c++ yang digunakan untuk mendapatkan nilai per detik pada waktu sistem kita
using namespace std;

int main(){

    for(int i=0; i<10; i++){
        cout << rand() << endl;
    }
    cout << endl;
    //bilangan random pada jarak yang ditentukan
    //contoh dibawah menginginkan jarak dari 1 dan 2
    for(int i=0; i<5; i++){
        cout << 1 + (rand() % 2) << endl;
    }
    cout << endl;
    //srand
    srand(100);
    for(int i=0; i<10; i++){
        cout << rand() << endl;
    }
    cout << endl;
    //srand(time(0))
    srand(time(0));
    for(int i=0; i<10; i++){
        cout << rand() << endl;
    }
    return 0;
}

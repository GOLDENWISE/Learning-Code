#include <iostream>
using namespace std;

int main(){   
    int a;
    cout << "2 + 1 =..." << endl;
    cout << " masukkan angka =";
    cin >> a;
    
    //if statement
    
    if (a == 3)
    {
        cout << "Jawaban anda benar" << endl;
    } else if ( a <= 3){
        cout << "Jawaban Anda Mendekati benar \n";
        cout << "Coba Lagi" << endl;
    }  else {
        cout << "Jawaban anda salah \n";
        cout << "Coba lagi" << endl;
    }

    cin.get();
    return 0;

}

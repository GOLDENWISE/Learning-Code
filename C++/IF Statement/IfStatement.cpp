#include <iostream>
using namespace std;

int main()
{   
    int a;
    cout << "2 + 1 =..." << endl;
    cout << " masukkan angka =";
    cin >> a;
    
    //if statement
    
    if (a == 3)
    {
        cout << "Jawaban anda benar" << endl;
    }

    if (a != 3)
    {
        cout << "Jawaban anda salah" << endl;
    }
    cout << "Selesai" << endl;

    cin.get();
    return 0;

}
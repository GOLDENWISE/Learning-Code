#include <iostream>
using namespace std;

int main(){
    
    int a = 10;
    cout << "nilai awal a adalah "  << a << endl;
    
    //assignment
    // variabel operator = ekspresi
    //     a     +,-,*,/ = (1,2,3,4,dst) // <= pemisalan
    a += 3;
    cout << "ditambahkan dengan 3 menjadi " << a << endl;

    a -= 4;
    cout << "setelah itu dikurangkan dengan 4 menjadi " << a << endl;

    a /= 3;
    cout << "lalu dibagi dengan 3 menjadi " << a << endl;

    a *= 5;
    cout << "terakhir dikali dengan 5 menjadi " << a << endl;

    a %= 4;
    cout << "sisa pembagian / modulus dari 15 jika dibagi dengan 4 adalah " << a << endl;






    cin.get();
    return 0;
}
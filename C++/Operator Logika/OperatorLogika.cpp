#include <iostream>
using namespace std;

int main()
{
    int a = 3;
    int b = 6;

    bool hasil1, hasil2, hasil3, hasil4, hasil5, hasil6;

  //operator logika : or, and, not
  // not ( ! )
    hasil1 = !(a == 3);
  // and ( && ) salah satu salah maka salah
    hasil2 =  ( a == 3 ) && ( b == 6 );
    hasil6 = ( a == 3 ) && ( b == 2 );
  // or ( || ) salah satu benar tetap benar
    hasil3 = ( a == 3 ) || ( b == 6 );
    hasil4 = ( a == 3 ) || ( b == 2 );
    hasil5 = ( a == 1 ) || ( b == 2 );

    cout << " contoh operator logika 'not' a ==3,  " << "0=benar, 1=salah \n";
    cout << " dengan a = 3 " << endl;
    cout << hasil1 << endl;
    cout << "contoh operator logika 'and' a == 3 and b == 6, " << "1=benar, 0=salah \n";
    cout << "dengan b = 6" << endl;
    cout << hasil2 << endl;
    cout << "contoh operator logika 'and' a == 3 and b == 2, " << "1=benar, 0=salah" <<endl;
    cout << hasil6 << endl;
    cout << "contoh operator logika 'or' a == 3 and b == 6, " << "1=benar, 0=salah" <<endl;
    cout << hasil3 << endl;
    cout << "contoh operator logika 'or' a == 3 and b == 2, " << "1=benar, 0=salah" <<endl;
    cout << hasil4 << endl;
    cout << "contoh operator logika 'or' a == 1 and b == 2, " << "1=benar, 0=salah" <<endl;
    cout << hasil5 << endl;

    


    
    cin.get();
    return 0;
}

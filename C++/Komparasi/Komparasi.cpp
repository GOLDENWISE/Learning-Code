#include <iostream>
using namespace std;

int main()
{
    int a = 2;
    int b = 2;

    bool hasil1, hasil2, hasil3, hasil4, hasil5, hasil6;

    //komparasi, relation expression

    //sebanding ( == )
    hasil1 = a == b;
    // tidak sebanding ( != )
    hasil2 = a != b;
    // kurang dari (  <  )
    hasil3 = a < b;
    // kurang dari sama dengan ( <= )
    hasil5 = a <= b;
    // lebih dari ( > )
    hasil4 = a > b;
    // lebih dari sama dengan ( >= )
    hasil6 = a >= b;

    cout << "a sama dengan b," << "dengan 1 = benar, 0 = salah" << endl;
    cout << hasil1 << endl;
    cout << "a berbeda dengan  b," << "dengan 1 = benar, 0 = salah" << endl;
    cout << hasil2 << endl;
    cout << "a lebih kecil dari b," << "dengan 1 = benar, 0 = salah" << endl;
    cout << hasil3 << endl;
    cout << "a lebih besar dari b," << "dengan 1 = benar, 0 = salah" << endl;
    cout << hasil4 << endl;
    cout << "a lebih kecil atau sama dengan b," << "dengan 1 = benar, 0 = salah" << endl;
    cout << hasil5 << endl;
    cout << "a lebih besar atau sama dengan b," << "dengan 1 = benar, 0 = salah" << endl;
    cout << hasil6 << endl;






    
    cin.get();
    return 0;
}
#include <iostream>
#include <limits>

using namespace std;

int main(){

    /* bilangan bulat */
     int a = 1;           // 32-bit
     long long b = 2;     //64-bit
     short c = 3;         //16-bit
     unsigned int f = 7;  //tidak bertanda

     /* Bilangan Desimal */
     float d = 1.7;
     double e = 2.5;
    
    cout << a << endl;
    cout << sizeof(a) << "byte" << endl;
    cout << numeric_limits<int>::max() << endl;
    cout << numeric_limits<int>::min() << endl;
    
    cout << "\n\n"<<endl;

    cout << b << endl;
    cout << sizeof (b) << "byte" << endl;
    cout << numeric_limits<long long>::max() << endl;
    cout << numeric_limits<long long>::min() << endl;

    cout << "\n\n" << endl;

    cout << c << endl;
    cout << sizeof(c) << "byte" << endl;
    cout << numeric_limits<short>::max() << endl;
    cout << numeric_limits<short>::min() << endl;

    cout << "\n\n" << endl;
    
    cout << f << endl;
    cout << sizeof(f) << "byte" << endl;
    cout << numeric_limits<unsigned int>::max() << endl;
    cout << numeric_limits<unsigned int>::min() << endl;

    cout << "\n\n" << endl;

    cout << d << endl;

    cout << "\n\n" << endl;

    cout << e << endl;
    cin.get();
    return 0; 
}
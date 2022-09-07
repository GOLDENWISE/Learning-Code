#include <iostream>
using namespace std;

int main()
{
    //typedef adalah memberikan alias pada suatu tipe data
    typedef int I; // typedef tipe data integer
    I a = 10;
    I b = 12;
    typedef int K[2]; // typedef tipe data array yang berisi 2 bisa diisi dengan 2 bilangan integer
    K c = {13, 14};
    typedef unsigned long ulong;// typedef tipe data unsigned long (tipe data integer yang penulisan angkanya besar)
    ulong d = 1234567689101112;
    ulong g = 12347856745679614;
    typedef float J; // typedef tipe data float
    J e = 1.2;
    J f = 1.4;
    //selain menggunakan syntax typedef, bisa menggunakan syntax using
    //dengan format syntax nya "using <nama variabel> = <nama typedata >"
    using numbers = double;
    numbers h = 10.6575;
    numbers i = 11.6575;
    cout <<"NIlai a = "<< a << endl;
    cout <<"Nilai b = "<< b << endl;
    cout <<"Nilai c = "<< c[0] <<" dan "<< c[1] << endl;
    cout <<"NIlai d = "<< d << endl;
    cout <<"Nilai e = "<< e << endl;
    cout <<"Nilai f = "<< f << endl;
    cout <<"Nilai g = "<< g << endl;
    cout <<"Nilai h = "<< h << endl;
    cout <<"NIlai i = "<< i << endl;
    return 0;
}
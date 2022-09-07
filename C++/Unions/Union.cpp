#include <iostream>
using namespace std;
//satu data punya beberapa bentuk
union data
{
    int a;
    char b[4]; //karena int = 4 bit dan char = 1 bit, maka char b dibikin array dengan 4 kolom
};
int main()
{
    data dataUnion;
    dataUnion.a=12;
    cout << "Data a : "<< dataUnion.a << "\n";
    cout << "Data b : "<< dataUnion.b << "\n";
    dataUnion.b[0]='a';
    dataUnion.b[1]='b';
    dataUnion.b[2]='c';
    dataUnion.b[3]='d';
    cout << "Data a : "<< dataUnion.a << "\n";
    cout << "Data b : "<< dataUnion.b << "\n";


    return 0;
}

#include <iostream>
#include <string>
using namespace std;
template<typename T, typename U>
auto max(T a, U b)
{
    return (a > b) ? a : b;
}
int main()
{
    //auto digunakan untuk mendeklarasikan suatu tipe data yang digunakan
    int a = 10;
    string b = "test";
    double c = 15.432;
    auto d = 14.5;
    auto e = max(a, c);
    cout << a << endl;
    cout << b << endl;
    cout << c << endl;
    cout << d << endl;
    cout << e << endl;
    return 0;
}

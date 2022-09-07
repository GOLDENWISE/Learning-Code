#include <iostream>
#include <string>
using namespace std;
void print(int data);
void print(double data);
void print(char data); 
//untuk membuat sebuah subprogram yang bisa mencetak semua tipe data bisa menggunakan syntax 'template<typename <nama variabel>>'
//dalam fungsi prototipe, sintax ini harus mengikuti fungsi yang digunakan seperti contoh dibawah
template<typename H>
void Print(H data);
template<typename T>
int toINT(T data);
template<typename T, typename U>
T max(T a, U b);
int main()
{
    print(10); // menggunakan void print yang memiliki tipe data int
    print(1.5656); // menggunakan void print yang memiliki tipe data double
    print('k'); // menggunakan void print yang memiliki tipe data char
    // menggunakan void Print yang memiliki tipe data bebas(bisa char, bisa int, bisa string,dsb)
    Print('G'); 
    Print(12);
    Print(toINT(10.897583490)); //mengkonversi bilangan double menjadi bilangan integer.
    Print(max(10,103.89)); // mendeteksi bilangan yang lebih besar
    Print<int>(10.097890); //mengkonversi semua jenis tipe data menjadi integer
    cout << max<double, int>(11.0738, 12.290)<<endl;
    return 0;
}
void print(int data)
{
    cout << data << endl;
}
void print(double data)
{
    cout << data << endl;
}
void print(char data)
{
    cout << data << endl;
}
template<typename H>
void Print(H data)
{
    cout << data << endl;
}
template<typename T>
int toINT(T data)
{
    return int(data);
}
template<typename T, typename U>
T max(T a, U b)
{
    return a > b ? a : b;
}
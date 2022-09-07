#include <iostream>
#include <string>
using namespace std;

struct aktor
{
  string nama;
  int tahunLahir;
};
struct film
{
    string judul;
    string genre;
    int tahun;
    //struct aktor;
    aktor pemeran1;
    aktor pemeran2;
};
int main()
{
    aktor aktor1, aktor2;
    film film1;
    aktor1.nama = "Michael Jackson";
    aktor1.tahunLahir = 1992;

    aktor2.nama = "Sandra Bulog";
    aktor2.tahunLahir = 1995;

    film1.judul = "Pengabdi Wakanda";
    film1.genre = "Dokumenter";
    film1.tahun = 2018;
    film1.pemeran1 = aktor1;
    film1.pemeran2 = aktor2;

    cout <<" "<< film1.judul <<" \n";
    cout << film1.tahun <<"\n";
    cout << film1.pemeran1.nama <<"\n";
    cout << aktor1.tahunLahir <<"\n";
    cout << film1.pemeran2.nama <<"\n";
    cout << aktor2.tahunLahir <<"\n";
    cout << film1.genre;

    return 0;
}

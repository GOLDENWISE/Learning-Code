#include <iostream>
#include <string>
using namespace std;

//struct = data yang dibentuk oleh beberapa bentuk data
//punya beberapa komponen
//cth jeruk = buah, memiliki komponen jeruk = warna, jeruk = rasa, dsb
struct buah
{
    string warna;
    float berat;
    int harga;
    string rasa;
};
int main()
{
    buah mangga;
    mangga.warna = "Orange";
    mangga.berat = 100;
    mangga.harga = 5000;
    mangga.rasa = "Asam Asam Manis";

    cout << "Buah mangga berwarna "<< mangga.warna <<".";
    cout << " Beratnya "<< mangga.berat << " gram.";
    cout << " harga pergramnya Rp" << mangga.harga <<".";
    cout << " berasa " << mangga.rasa <<"\n";\

    buah Apel;
    Apel.warna = "merah";
    Apel.berat = 150;
    Apel.harga = 7500;
    Apel.rasa = "Manis kesat";

    cout << "Buah Apel berwarna "<< Apel.warna <<".";
    cout << " Beratnya "<< Apel.berat << " gram.";
    cout << " harga pergramnya Rp" << Apel.harga <<".";
    cout << " berasa " << Apel.rasa <<"\n";
    return 0;
}

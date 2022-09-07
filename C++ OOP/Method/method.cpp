#include <iostream>
#include <string>
using namespace std;

class Mahasiswa{
    public :
        string nama;
        double ipk;

        Mahasiswa(string inputnama, double IPK){
            Mahasiswa::nama = inputnama;
            Mahasiswa::ipk = IPK;
        }
        //method tanpa parameter dan tanpa return
        void tampilkanData(){
            cout <<"Nama saya : "<<nama << endl;
            cout <<"IPK : "<< ipk << endl;
        }
        //method dengan parameter dan tanpa return
        void ubahNama(const char* namaBaru){
            Mahasiswa::nama = namaBaru;
        }
        //method tanpa parameter dengan return 
        string getNama(){
            return Mahasiswa::nama;
        }
        double getIPK(){
            return Mahasiswa::ipk;
        }
        //method dengan parameter dan return 
        double katrolIPK(const double &tambahanNilai){
            return Mahasiswa::ipk + tambahanNilai;
        }
};

int main(int argc, char const *argv[]){

    Mahasiswa mahasiswa1 = Mahasiswa("ucup", 2.5);
    Mahasiswa mahasiswa2 = Mahasiswa("otong", 4.0);
    mahasiswa1.tampilkanData();
    mahasiswa2.tampilkanData();
    mahasiswa1.ubahNama("Mario");
    mahasiswa1.tampilkanData();
    string dataNama = mahasiswa1.getNama();
    cout <<"dataNama : "<< dataNama << endl;
    double dataIPK = mahasiswa1.getIPK();
    cout <<"dataIPK : "<< dataIPK << endl;
    cout <<"Nilai katrol : "<< mahasiswa2.katrolIPK(-2.23) << endl;
    return 0;
}
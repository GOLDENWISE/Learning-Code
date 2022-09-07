#include <iostream>
#include <string>
#include <chrono> //library untuk membuat timer

using namespace std;
using Clock = std::chrono::high_resolution_clock; //membuat clock dari library chrono dengan high resolution
using TimePoint = std::chrono::time_point<Clock>; //setting time point berdasarkan Clock

class Kosong {
    public:

        int data () {
            return 1;
        } 
};

class Isi {
    public:
        int dataInt; //4byte
        double dataDouble; //8byte
        string dataStr;//32byte
        
        
};
//pada pengalokasian memory, function seperti void dan sejenisnya tidak mempengaruhi manajemen memory
//sehingga, yang mempengaruhi besar memory yang digunakan adalah variabel

class Mahasiswa {
    public:
        string nama;
        
        Mahasiswa (const char* Nama) {
            Mahasiswa::nama = Nama;
        }

};
int main () {
    
    // menampilkan besar memory pada class kosong
    cout << "Alokasi class kosong: " << sizeof(Kosong) << " byte" << endl;

    //menampilkan besar memory pada class yang berisi data int 
    cout << "Alokasi class Isi: " << sizeof(Isi) << " byte" << endl;

    //address
    cout << "Address stack:"<< endl;
    string a, b;
    Mahasiswa object1 = Mahasiswa("Stack");
    Mahasiswa* object2 = new Mahasiswa("Heap"); //pointer variabel ada distack, namun isi variabelnya ada di heap
    //dengan kata lain, object2 disini dialokasikan distack, sedangkan new Mahasiswa nya dialokasikan di heap
    string c, d; 
    cout << "Address a : " << &a << endl;
    cout << "Address b : " << &b << endl;
    cout << "Address object1 : " << &object1 << endl;
    cout << "Address pointer object2: " << &object2 << endl;
    cout << "Address object2 : " << object2 << endl; //saat suatu variabel diberikan pointer, maka untuk melihat alamat variabelnya cukup menuliskan nama variabelnya saja
    cout << "Address c : " << &c << endl;
    cout << "Address d : " << &d << endl;

    //Kecepatan membuat object pada masing-masing memory

    //membuat stopwatch
    //pada stack
    TimePoint *tStackStart = new TimePoint();
    TimePoint *tStackEnd = new TimePoint();

    //pada heap
    TimePoint *tHeapStart = new TimePoint();
    TimePoint *tHeapEnd = new TimePoint();
    
    cin.get();
    *tStackStart = Clock::now();
    Mahasiswa object3 = Mahasiswa("Stack");
    *tStackEnd = Clock::now();

    cin.get();
    *tHeapStart = Clock::now();
    Mahasiswa* object4 = new Mahasiswa("Heap");
    *tHeapEnd = Clock::now();

    chrono::duration<double> durasi = *tStackEnd - *tStackStart;
    cout << "Waktu pembuatan object di stack : " << durasi.count() << endl;

    durasi = *tHeapEnd - *tHeapStart;
    cout << "Waktu pembuatan object di heap : " << durasi.count() << endl;

    //berdasarkan hal diatas, dapat dilihat kecepatan stack lebih cepat dibandingkan dengan heap
    //namun, memory pada stack terbatas, sedangkan heap tidak
    //yang mana, jika penggunaan stack digunakan terus menerus, dapat menyebabkan kepenuhan pada stack

    return 0;
}
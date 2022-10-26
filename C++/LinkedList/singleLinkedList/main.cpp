#include <iostream>
using namespace std;

struct identitas {

    string nama;
    long nim;
    int angkatan;
    identitas *next;

};

int main() {

    //Pembuatan node dengan single linked list
    identitas *node1, *node2, *node3;
    node1 = new identitas();
    node2 = new identitas(); //metode deklarasi single list kedua
    node3 = new identitas();

    //pengisian node
    node1->nama = "Farel"; //data awal atau disebut head
    node1->nim = 1052210;
    node1->angkatan = 21;
    node1->next = node2; //pengisian data ke node selanjutnya

    node2->nama = "Adit";
    node2->nim = 105221032;
    node2->angkatan = 21;
    node2->next = node3;

    node3->nama = "Hafiz";
    node3->nim = 105221026;
    node3->angkatan = 21;
    node3->next = NULL; //data ujung atau disebut tail, pastikan isinya NULL

    //menampilkan data pada single linked list
    identitas *cur;
    cur = node1;

    cout <<"IDENTITAS ANAK KOS IJO"<< endl;
    while( cur != NULL ) {

        cout <<"Nama : "<< cur->nama << endl;
        cout <<"NIM : "<< cur->nim << endl;
        cout <<"Angkatan : "<< cur->angkatan << endl;
        cout << endl;

        //membuat nilai cur merujuk ke pointer selanjutnya
        cur = cur->next;

    }

    return 0;

}

/*
KESIMPULAN
SINGLE LINKED LIST BERISI SEKUMPULAN DATA, YANG CARA AKSESNYA BERDASARKAN POINTER YANG ADA
PADA SINGLE LINKED LIST, HANYA MEMILIKI SATU VARIABEL POINTER YANG MERUPAKAN NEXT DARI DATA SELANJUTNYA
MEMILIKI SIFAT YANG SAMA SEPERTI ARRAY, HANYA SAJA, DENGAN MENGGUNAKAN LINKED LIST,PENGGUNAAN MEMORY AKAN LEBIH EFISIEN
*/
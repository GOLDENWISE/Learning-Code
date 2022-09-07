#include <iostream>
#include "bersama.h"
#include "foo.h"
//pragma ada dalam file bar.h
//untuk mengecek pragma, jadikan #include "foo.h" menjadi //#include "foo.h"
#include "bar.h"
//ifdef : kondisi if yang akan dijalankan jika suatu variabel sudah didefinisi
#ifdef FOO
#define TEST_FOO "ada" //dijalankan ketika FOO sudah didefinisikan
#else
#define TEST_FOO "tidak ada" //dijalankan ketika FOO belum didefinisikan
#endif
//ifndef
#ifndef FOO
#define FOO 5
#endif
using namespace std;
int main()
{
    Mahasiswa Test;
    Test.NIM = 14;
    cout << Test.NIM << endl;
    cout <<TEST_FOO<<endl;
    cout << FOO << endl;
    return 0;
}

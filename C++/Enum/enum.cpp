#include <iostream>
using namespace std;
//enum = data yang nilainya pasti dan Programmer yang menjabarkannya
enum warna{merah=1, putih, hitam, coklat, kuning, biru};
         //  x       x+1    x+2     x+3    x+4     x+5
         // nilai enum akan terus bertambah dari satu variable ke variabel lain 
         // jika pada kolom putih atau hitam atau coklat atau kuning atau biru 
         // telah ditentukan nilainya oleh programmer, maka nilainya akan sesuai pada variabel
         // yang ditentukan programmer dan jika nilai setelah variabel tersebut belum ditentukan
         // maka isi dari variabelnya akan diisi dengan nilai variabel sebelumnya ditambah 1
int main()
{
   warna baju;
   baju = merah;
   cout <<"baju = merah : "<< baju << "\n";
   if(baju == merah)
   {
      cout <<"Warna baju adalah merah\n";
   }
   baju = putih;
   cout <<"baju = putih : "<< baju << "\n";
   baju = hitam;
   cout <<"baju = hitam : "<< baju << "\n";
   baju = coklat;
   cout <<"baju = hitam : "<< baju << "\n";
   baju = kuning;
   cout <<"baju = hitam : "<< baju << "\n";
   baju = biru;
   cout <<"baju = hitam : "<< baju << "\n";
   
   return 0;
}


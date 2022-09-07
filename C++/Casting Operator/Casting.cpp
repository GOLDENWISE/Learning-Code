#include <iostream>
using namespace std;
int main()
{
  int a = 5;
  float b = 6.67f;
  char c = 'd';
  cout << a + b << endl; //output dari integer + float = float. kasus ini dikenal sebagai implicit Casting
  int hasil;
  hasil = a + b;
  cout << hasil << endl; //output menghasilkan bilangan integer. karena programmer meminta sistem untuk mengeluarkan hasil dalam bentuk integer sebelumnya
  cout << a + (int)b << endl; // melakukan casting dengan output bilangan integer
  cout << (char)(c + a) << endl; //output adalah i. karena,c+a dicasting hasilnya menjadi char, dan berdasarkan char c, jarak d ke i adalah 5. sehingga, d+5=i (e,f,g,h,i)
  cout << (int)c << endl;
  cout << (int)c + a << endl; //output adalah bilangan integer. karena, variabel c yang sebelumnya char, dicasting menjadi integer
  return 0;
}

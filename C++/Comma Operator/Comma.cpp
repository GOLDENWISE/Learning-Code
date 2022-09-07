#include <iostream>
#include <string>
using namespace std;
//dengan menggunakan comma operator, pengekspresian suatu program akan terlihat menjadi lebih singkat
/*
semisal yang awalnya 
cout << "b = "; cin >> b;
cout << "c = "; cin >> c;
a = b+c;
bisa ditulis menjadi 
a = (cout << "b = " , cin>>b , cout << "c = " ,  cin>>c , (b+c)); //dengan catatan bahwa pengekspresian a=b+c ditulis paling akhir
*/
void printData(int val)
{
  cout << val << endl;
}
int main()
{
  int a, b, c;
  a = (cin>>b , cout << "b = " , printData(b) , cin>>c , cout << "c = " , printData(c) , (b+c));
  cout << "a = "<< a <<"\n";
  return 0;
}

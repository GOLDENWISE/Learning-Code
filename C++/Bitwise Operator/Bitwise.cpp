#include <iostream>
#include <bitset> //library untuk menampilkan nilai bit dari sebuah data
#include <string>
using namespace std;
/*
operator bitwise
& AND Bitwise AND 1 1 = 1, 0 1 = 0, 0 0 = 0
| OR Bitwise Inclusive OR --> 1 0 = 1, 1 1 = 1, 0 0 = 0
^ XOR Bitwise Exclusive OR --> 1 0 = 1, 1 1 = 0, 0 0 = 0
~ NOT 
<< SHL Shift bits left
>> SHR Shift bits Right
*/
//cara konversi dari bit sendiri : 
//contoh 
/*
7 = 0 0 0 0 0 1 1 1 --binary
    7 6 5 4 3 2 1 0 --pangkat 2
7 = 2^0 + 2^1 + 2^2
7 = 1 + 2 + 4. 
*/
/*
Pada pengoperasian bitwise, suatu variabel di operasikan perkolom. misal
0 0 0 0 0 1 1 1   0 0 0 0 0 1 1 1  
      &                 |
0 0 0 0 0 0 1 0   0 0 0 0 0 0 1 0
      =                 =
0 0 0 0 0 0 1 0   0 0 0 0 0 1 1 1

      ~           0 0 0 0 0 1 1 1   0 0 0 0 0 1 1 1         
0 0 0 0 0 1 1 1         >> 1              << 1
      =                 =                  = 
1 1 1 1 1 0 0 0   0 0 0 0 0 0 1 1   0 0 0 0 1 1 1 0 
*/
void printBinary (unsigned short val, string name)
{
  cout << name << " : " << bitset<8>(val) << endl;
}
int main()
{
  unsigned short a = 6;
  unsigned short b = 10;
  unsigned short c;
  cout <<"& = Bitwise AND\n";
  c = a & b;
  printBinary(a,"a");
  printBinary(b,"b");
  printBinary(c,"c");
  cout <<"c = "<< c ;
  cout <<"\n| = Bitwise OR\n";
  c = a | b;
  printBinary(a,"a");
  printBinary(b,"b");
  printBinary(c,"c");
  cout <<"c = "<< c ;
  cout <<"\n^ = Bitwise Exclusive OR\n";
  c = a ^ b;
  printBinary(a,"a");
  printBinary(b,"b");
  printBinary(c,"c");
  cout <<"c = "<< c ;
  cout <<"\n~ = Bitwise NOT \n";
  c = ~a;
  printBinary(a,"a");
  printBinary(c,"c");
  cout <<"c = "<< c;
  cout <<"\n<< = Bitwise SHL \n";
  c = a << 1;
  printBinary(a,"a");
  printBinary(c,"c");
  cout <<"c = "<< c ;
  cout <<"\n>> = Bitwise SHR \n";
  c = a >> 1;
  printBinary(a,"a");
  printBinary(c,"c");
  cout << "c = " << c << endl; 

  return 0;
}

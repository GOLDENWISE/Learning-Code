#include <iostream>
#include <array>
using namespace std;
int main()
{
    array < array <int,3>, 2> nilaiMD = {0,1,2,3,4,5}; //array < array <int,kolom>, baris> nilaiMD = {....}. dengan catatan, nilaiMD merupakan variabel
    cout<< nilaiMD[0][0] <<" "<< nilaiMD[0][1] <<" "<< nilaiMD[0][2] << endl;
    cout<< nilaiMD[1][0] <<" "<< nilaiMD[1][1] <<" "<< nilaiMD[1][2] << endl;
    return 0;
}

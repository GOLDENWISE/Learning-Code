#include <iostream>
#include <string>
using namespace std;
int main()
{
    string input;
    // getline(cin,variabel). cin merupakan mode yang dipilih
    getline(cin,input); //merupakan bagian dari library iostream
    cout <<"input anda : "<< input <<"\n";
    // jumlah kata dari input
    int index = 0;
    int jumlah = 0;
    while(true)
    {
        index = input.find(" ",index + 1);
        jumlah++;
        if(index<0)
        {
            break;
        }

    }
    cout <<"Banyak kata dari inputan adalah : "<< jumlah << "\n";
    return 0;
}

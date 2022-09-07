#include <iostream>
#include <string>
using namespace std;
int main()
{
    string kata("ucup");
    string input;
    while(true)
    {
        cout <<"Tebak nama : "; cin >> input;
        if(input == kata)
        {
            cout<<"Tebakan anda benar\n";
            break;
        }
        cout <<"Tebakan anda salah\n";
    }
    if(kata == "ucup")
    {
        cout <<"Berhasil"<<endl;
    }
    else
    {
        cout <<"Gagal"<<endl;
    }
    return 0;
}

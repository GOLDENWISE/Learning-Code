#include <iostream>
using namespace std;

int main(){
    
    int a;

    cout << "masukkan nilai= " <<endl;
    cin >> a; //jika diinput nilai 1, maka case yg keluar adalah satu,dan begitu seterusnya

    switch(a){
        case 1:
           cout << "a = 1" << endl;
           break;    //buat membatasi nilai case.jika tidak digunakan, semisalnya angka yg dimasukkan 1 atau yg paling atas, maka semua angka yg dibawahnya akan terinput didata
        case 2:
           cout << "a = 2" << endl;
           break;
        case 3:
           cout << "a = 3" << endl;
           break;
        case 4:
           cout << "a = 4" << endl;
           break;
        case 5:
           cout << "a = 5" << endl;
           break;
        default:
           cout << "anda salah, coba ulangi lagi dengan mengetik 'SwitchCase'" << endl; //jika tidak ada input case yang sesuai

    }
    
    
    cin.get();
    return 0;
}
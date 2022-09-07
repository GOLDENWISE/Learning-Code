#include <iostream>
#include <cstdlib> //mengandung fungsi random
using namespace std;

int main(){

    char lanjut;
    int x;
    while(true){
    cout << "MAU JUDI?? y/n : ";cin>>lanjut;
    if(lanjut == 'y'){
        cout <<"PILIH ANGKA APA LU BANG, GAUSAH SOK-SOKAN NTAR KALAH : "; cin >> x;
        1 + (rand() % 6);
        if(x <= 6){
          cout << x <<endl;
          cout << 1 + (rand() % 6) <<endl;
          if(x > 1 + (rand() % 6)){
              cout << "Dih Sombong lu" <<endl;
          }else if(x < 1 + (rand() % 6)){
              cout << "Kan gw udh bilang, gw menang. Jangan nangis ya :)"<<endl;
          }else{
              cout << "ANJING SENGIT COKK"<<endl;
          }
        }else{
            cout <<"GAUSAH CURANG LU ANJING"<<endl;
        }
    }else if(lanjut == 'n'){
        break;
    }else{
        cout << "KETIK YANG BENER YA BANG JAGO!!" << endl;
    }
    }
    cin.get();
    return 0;
}

#include <iostream>
using namespace std;

int main(){

    for (int i = 0; i <= 10; i++){

        if(i == 5){
            continue;
        }else if(i == 10){
         break;
        }cout << i << endl;
    }

    cout <<"selesai"<<endl;
    cin.get();
    return 0;
}

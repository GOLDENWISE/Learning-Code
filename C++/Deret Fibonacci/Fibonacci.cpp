#include <iostream>
using namespace std;

int main(){

    int n, f_n, f_n1, f_n2;
    cout <<"Masukkan Nilai N : "; cin >> n;

    f_n2 = 0;
    f_n1 = 1;
    cout << f_n2 <<" ";
    cout << f_n1 <<" ";

    for(int i = 1; i < n; i++){
       f_n = f_n1 + f_n2;
       f_n2 = f_n1;
       f_n1 = f_n;
       cout << f_n <<" ";
    }


    cin.get();
    return 0;
}

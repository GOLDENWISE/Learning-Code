#include <iostream>
using namespace std;

int Fibonacci(int a){
    if((a == 0)||(a == 1)){
        return a;
    }else{
        return Fibonacci(a-1) + Fibonacci(a-2);
    }
}
int main(){
    int a;
    cout << "Masukkan suku ke-n deret fibonacci : ";cin >> a;
    cout << "Suku ke -"<< a << " deret fibonacci adalah " << Fibonacci(a) << endl;

    cin.get();
    return 0;
}

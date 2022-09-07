#include <iostream>
using namespace std;

//global scope

int x = 10;//variable global

//local scope
int ambil_global(){
    return x; //variable local yang mengambil nilai global
}
int x_local(){
    int x = 5; //variable local x_local
    return x;
}
int main(){

    cout << "1. Variable Global : " << x << endl;
    int x = 8; //variable local main
    cout << "2. Variable Local Main : "<< x << endl;
    cout << "3. Variable ambil global : "<< ambil_global() << endl;
    cout << "4. Variable x_local : "<< x_local() << endl;
    {
        cout << "5. Variable local main : " << x << endl;
        int x = 1;//block scope atau variable local
        cout << "6. Variable local block : " << x << endl;
        cout <<"7. Variable global : "<< ::x << endl; //cara mengambil nilai global scope, bisa menggunakan titik 2 (:) sebanyak 2 kali (::) serta variable yang sesuai dengan global scope
    }
    cout << "8. Variable local main : "<< x <<endl;
    cin.get();
    return 0;

}

#include <iostream>
#include <cmath>
using namespace std;
/* Library cmath :
    1. ceil(x) --> Pembulatan keatas
    2. cos(x)  --> Cosinus
    3. exp(x)  --> Eksponen
    4. fabs(x) --> Nilai Absolut dalam float
    5. floor(x)--> Pembulatan ke Bawah
    6. fmod(x) --> modulus dalam float
    7. log(x)  --> logaritma dengan basis natural
    8. log10(x)--> logaritma dengan basis 10
    9. pow(x,y)--> x pangkat y
    10.sin(x)  --> sinus
    11.sqrt(x) --> akar kuadrat
    12.tan(x)  --> Tangen
    */
int main(){

    int x;
    int y;
    cout << "Mengevaluasi nilai X \n";
    cout << "Masukkan Nilai X : "; cin >> x;
    cout << "Masukkan Nilai Y : "; cin >> y;

    cout << "Nilai dari akarnya adalah : "<< sqrt(x) << endl;
    cout << "Nilai kuadrat : "<< pow(x,y) << endl;
    cout << "Nilai Sinus, Cosinus, dan tangen : "<< sin(x)<<","<< cos(x)<<","<<tan(x)<<endl;
    cout << "Nilai Logaritma basis 10 dan Natural : "<< log10(x) <<","<<log(x)<< endl;
    cout << "Nilai Eksponen : "<< exp(x) <<endl;


    cin.get();
    return 0;
}

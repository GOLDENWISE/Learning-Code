#include <iostream>
using namespace std;

void fungsi(int *b){
    cout << "Address dari b : "<< b <<endl;
    cout << "  Nilai dari b : "<< *b <<endl; //dereferencing
}
void kuadrat(int *valPtr){
    *valPtr = (*valPtr) * (*valPtr);//pointer dalam fungsi
}
int main(){

    int a = 5;
    cout << "Address dari a : "<< &a <<endl;
    cout << "  Nilai dari a : "<< a <<endl<<endl;
    fungsi(&a);
    cout << endl;

    kuadrat(&a);
    cout << "Hasil kuadrat dari a : "<< a << endl;

    cin.get();
    return 0;
}

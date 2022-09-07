#include <iostream>
using namespace std;

double volume_kubus(double p = 1, double l = 1, double t = 1);//--> default argument. Default argumen merupakan nilai standar dari suatu fungsi yang akan dikerjakan tanpa di masukkan atau di input oleh user / programmer
int main(){

    cout << "Volume kubus : " << volume_kubus(3,4,5)<<endl;//contoh eksekusi program yang telah ditentukan atau bukan default
    cout << "Volume kubus : " << volume_kubus(3,4)<<endl;//contoh eksekusi program yang default atau menggunakan nilai yang telah ditentukan oleh sistem yang ditulis oleh pengguna atau programmer
    cout << "Volume kubus : " << volume_kubus(3)<<endl;
    cout << "Volume kubus : " << volume_kubus()<<endl;
    cin.get();
    return 0;
}

double volume_kubus(double p, double l, double t){
    return p*l*t;
}

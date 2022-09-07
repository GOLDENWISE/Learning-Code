#include <iostream>
#include <string>
using namespace std;

class denganConstructor{
    public:
        string data;

        denganConstructor(const char* data){
            denganConstructor::data = data;
        }

        void show(){
            cout << "Ini " << denganConstructor::data << endl;
        }
};

class tanpaConstructor{
    public:
        string data;

        void show(){
            cout <<"Ini "<< tanpaConstructor::data << endl;
        }
};
int main(){
    //object tanpa constructor
    tanpaConstructor object1;
    object1.data = "tanpa constructor";
    object1.show();

    //object dengan constructor
    denganConstructor object2 = denganConstructor("dengan constructor");
    object2.show();

    //cara lain membuat object dengan constructor -- lebih simple
    denganConstructor object3("dengan constructor lebih simple");
    object3.show();

    //alokasi memory diatas terdapat pada stack
    //cara membuat object pada heap memory (bukan distack)
    denganConstructor* object4 = new denganConstructor("dengan constructor pada heap memory, cara akses dereference");
    (*object4).show(); //cara akses dengan dereference

    denganConstructor* object5 = new denganConstructor("dengan constructor pada heap memory, cara akses dengan arrow operator");
    object5->show(); //variabelClass->dataAtauFunctionPadaClass;
    cout << object5->data << endl;
    string data = object5->data;
    cout << data << endl;
    return 0;
}

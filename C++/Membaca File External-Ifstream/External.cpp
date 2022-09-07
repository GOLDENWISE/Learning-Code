#include <iostream>
#include <fstream>
#include <string>
using namespace std;
int main()
{
    ifstream myFile;
    string data, buffer;
    bool isdata = false;
    int no;
    string nama;
    /*
    ios::in => default
    ios::ate => mulai dari akhir file
    ios::binary => membaca file binary
    */
    /* menampilkan data per kata dan perbaris
    myFile.open("data.txt");
    myFile >> data;
    cout << data << endl; //menampilkan data perkata
    getline(myFile,data); //baris pertama
    getline(myFile,data); //baris kedua
    cout << data << endl; //menampilkan data perbaris
    myFile.close();
    */
    //menampilkan semua data.txt
    myFile.open("data.txt");
    while(!isdata)
    {
        getline(myFile, buffer);
        data.append(buffer + "\n");
        if(buffer == "data")
        {
            isdata = true;
        }
    }
    cout << data << endl;
    getline(myFile,buffer);
    cout << buffer << endl;
    while(!myFile.eof())
    {
        myFile >> no;
        myFile >> nama;
        cout << no <<"  "<< nama << endl;
    }
    return 0;
}

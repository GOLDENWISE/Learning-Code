#include <iostream>
#include "otong.h"

using namespace otong; //mempersingkat penulisan syntax namespace otong.
                       //semisal memanggil variabel b pada namespace otong. yang awalnya otong::b; cukup menggunakan syntax b;
void fungsi2()
{
	std::cout << "ini adalah fungsi biasa" << std::endl;
}

int main()
{
	fungsi2();
	std::cout << b << std::endl;
	fungsi();
	cout(100);
	std::cin.get();
	return 0;
}

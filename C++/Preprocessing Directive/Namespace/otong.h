//membentuk namespace
//fungsi namespace : sebagai scope untuk sebuah fungsi yang isinya merangkum beberapa fungsi
namespace otong
{
	int b = 10;

	void fungsi()
	{
		std::cout << "ini adalah fungsi si otong" << std::endl;
	}

	void cout(int a)
	{
		std::cout << a << std::endl;
	}
}
//untuk memanggil fungsi namespace, gunakan syntax "nama_namespace::variabel/fungsi yang dipanggil;"
//misal memanggil variabel b dalam namespace otong. maka syntaxnya "otong::b;"

data = input("Masukkan data: ")
print("data: ", data, "type: ", type(data)) #memiliki tipe string

data = int(data) #jika ingin menghasilkan data integer, lakukan casting ke integer
print("data: ", data, "type: ", type(data))

#jika ingin menerima input data integer, maka lakukan casting pada input
angka = int(input("Masukkan angka: "))
print("angka: ", angka, "type: ", type(angka))

 #jika ingin menerima input berupa boolean, maka lakukan casting dari input ke integer kemudian ke bool
biner = bool(int(input("Masukkan data boolean: ")))
print("bool: ", biner, "type: ", type(biner))

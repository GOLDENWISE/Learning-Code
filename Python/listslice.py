data = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
#menampilkan output dari data index ke berapa hingga index keberapa+1
print(data[2:6])
print(data[7:8])

#menampilkan output dari data dari awal hingga index ke berapa + 1
print(data[:6])
#menampilkan output dimulai dari index keberapa
print(data[2:])

#menampilkan output data pada kelipatan berapa
print(data[::2])

#menampilkan output data dengan jarak index berapa
print(data[2:8:4])#indeks ke-2 dan 4 index kedepannya. dengan pengecualian, jika sudah sampai diindex-8, maka index yang ditampilkan dari index 2 dan 7 

#menampilkan output data dari index ke berapa, hingga index keberapa dari akhir(negative values)
print(data[2:-2])#data yang ditampilkan adalah data index ke-2 dari awal, dan index ke-2 dari akhir (Penghitungan dimulai dari 0)

#menampilkan output data dari index ke berapa dari awal, hingga index ke berapa dari akhir dengan pengecualian
print(data[7:1:-2])#menampilkan output dari index awal ke berapa, dan index dari akhir ke berapa dimulai dari index 5 dari awal

#menampilkan output data dimulai dari akhir ke awal
print(data[::-1])


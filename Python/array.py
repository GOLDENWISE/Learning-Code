#array string
kata = ["lagi", "hobi", "nyatir"] #[0, 1, 2]
print(kata[0] + " " + kata[1] + " " + kata[2])

#array int
angka = [5, 4, 3, 2, 1] #(0, 1, 2, 3, 4)
print(angka[2])

#array multidimensi
multidimensi = [
               [1, 2, 3], #((0)(0), (0)(1), (0)(2))
               [4, 5, 6]  #((1)(0), (1)(1), (1)(2))
               ]
print(multidimensi[1][2])
multidimensi = [
               "text", #(0)
               0, #(1)
               [1, 2, 8], #((2)(0), (2)(1), (2)(2))
               4.56 #(3)
               ]
print(multidimensi[0])
print(multidimensi[1])
print(multidimensi[2][0])
print(multidimensi[2][1])
print(multidimensi[2][2])
print(multidimensi[3])

#penjabaran karakter dari suatu kalimat menggunakan array
kalimat = "Halo dunia!" #(0='H')(1='a')(2='l')(3'o')(4='')(5='d')(6='u')(7='n')(8='i')(9='a')
print(kalimat[0])
print(kalimat[1])
print(kalimat[2])
print(kalimat[3])
print(kalimat[4])
print(kalimat[5])
print(kalimat[6])
print(kalimat[7])
print(kalimat[8])
print(kalimat[9])

#print semua array
kata1 = ["lagi", "hobi", "nyatir"]
print(kata1)

#mengganti data array
kata2 = ["lagi", "hobi", "nyatir"]
kata2[1] = "cari korban"
kata2[2] = "satir"
print(kata2)

#menambah anggota array pada output
angka1 = [0, 1, 2, 3]
print(angka1 + [4, 5, 6])
print(angka1)

#menambah anggota array
angka2 = [1, 2, 3]
angka2 += [4, 5, 6]
print(angka2)

#perkalian array = pengulangan
perkalian = [1, 2, 3]
print(perkalian * 3) #output : 1 2 3 1 2 3 1 2 3
perkalian *= 3
print(perkalian)

#untuk memeriksa apakah suatu string atau data ada pada array, gunakan in <nama variabel>. jika true, maka data tersebut ada. jika false, data tersebut tidak ada
data = ["aku", "anak", "sehat"]
print("aku" in data)
print("anak" in data)
print("hilang" in data)
print("sehat" in data)
print("pinter" not in data)
print(not "pinter" in data)
print("sehat" not in data)
print(not "sehat" in data)


#hal tersebut juga dapat digunakan pada percabangan if
#cth
angka3 = [1, 2, 3, 4]
angka3[0] = angka3[2] - angka3[1]
if 5 in angka3:
    print("data ditemukan")
else:
    print("data tidak ditemukan")

#implementasi
judi = [100, 120]
taruhan = int(input())
if taruhan in judi:
    print("Hoki lu banh (emot batu)")
else:
    print("mampus, kalah kan lu")

#for loop pada array
data1 = ["aku", "anak", "sehat"]
for output in data1:
    print(output)

number1 = [2, 3, 4, 5]
for i in number1:
    print(i)

#for loop menggunakan break
number2 = [0, 1, 2, 3, 4]
for i in number2:
    if i == 2:
        break
    else:
        print(i)

#for loop menggunakan continue
number3 = [0, 1, 2, 3, 4]
for i in number3:
    if i == 2:
        continue
    else:
        print(i)

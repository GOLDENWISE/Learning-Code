angka = range(10)
print(angka) #memasukkan output "range(0,10)" pada variabel angka

numbers = list(range(10)) #memasukkan nilai 0 hingga 9 ke variabel numbers secara berurutan
print(numbers)
print(numbers[2]) #mengeluarkan output pada array index 2 pada variabel tersebut
                  #kenapa memiliki array? karena, dengan menggunaklan list(range(..)), secara otomatis nilai pada variabel tersebut akan bertipe array

number = list(range(10, 15)) #memasukkan nilai 10 hingga 14 ke variabel
print(number); #mengeluarkan nilai dari 10 hingga 14 

Angka = list(range(10, 15, 3))  #memasukkan nilai dimulai dari 10 hingga 14 dan selalu dijumlahkan 3. 
print(Angka) 

mundur = list(range(7, 3, -1)) #memasukkan nilai dimulai dari 7 hingga 3 secara mundur atau dikurangi 1
print(mundur)

#implementasi dalam for loop
for i in range(2, 6, 2): 
    print(i) #pengulangan ini akan menghasilkan bilangan genap dari angka 2 hingga 5



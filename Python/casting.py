print("casting data integer")
data_int = 9
print("data: ", data_int, "type: ", type(data_int))
data_float = float(data_int) #melakukan casting dari int ke float
print("data: ", data_float, "type: ", type(data_float))
data_string = str(data_int) #melakukan casting dari int ke string
print("data: ", data_string, "type: ", type(data_string))
data_bool = bool(data_int) #melakukan casting dari integer ke boolean. akan false jika nilai integer = 0
print("data: ", data_bool, "type: ", type(data_bool))

print("casting data float")
data_float=9.9
data_int = int(data_float) # melakukan casting dari float ke integer
print("data: ", data_int, "type: ", type(data_int))
print("data: ", data_float, "type: ", type(data_float))
data_string = str(data_float) #melakukan casting dari float ke string
print("data: ", data_string, "type: ", type(data_string))
data_bool = bool(data_float) #melakukan casting dari float ke boolean. akan false jika nilai integer = 0
print("data: ", data_bool, "type: ", type(data_bool))

print("casting data boolean = false")
data_bool = False
data_int = int(data_bool) # melakukan casting dari boolean ke integer
print("data: ", data_int, "type: ", type(data_int))
data_float = float(data_bool) # melakukan casting dari boolean ke float
print("data: ", data_float, "type: ", type(data_float))
data_string = str(data_bool) #melakukan casting dari boolean ke string
print("data: ", data_string, "type: ", type(data_string))
print("data: ", data_bool, "type: ", type(data_bool))

print("casting data boolean = true")
data_bool = False
data_bool = True
data_int = int(data_bool) # melakukan casting dari boolen ke integer
print("data: ", data_int, "type: ", type(data_int))
data_float = float(data_bool) #melakukan casting dari boolean ke float
print("data: ", data_float, "type: ", type(data_float))
data_string = str(data_bool) #melakukan casting dari boolean ke string
print("data: ", data_string, "type: ", type(data_string))
print("data: ", data_bool, "type: ", type(data_bool))

#casting dari string ke integer tidak bisa dilakukan. kecuali string memiliki teks berupa angka
#casting dari string ke bool akan menghasilkan true. kecuali string tidak memiliki isi atau berupa data kosong. maka boolean akan memiliki output false

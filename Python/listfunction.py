nums = [1, 3, 5, 2, 4]
print(len(nums))

nums.append(4)
print(nums)

#insert(index, data yang diselipkan)
nums.insert(1, 2)
print(nums)

print(nums.index(3))
print(nums.index(2))

print(min(nums))
print(max(nums))

#count(angka yang banyaknya ingin dihitung)
print(nums.count(2))
#remove(angka yang ingin dihapus)
nums.remove(4)
print(nums)
nums.reverse();
print(nums)

#string formating
msg = "Numbers: {0} {1} {2}". format(nums[0], nums[1], nums[2])
print(msg)

a = "{x}, {y}" .format(x = 5, y = 12)
print (a)

#join
x = " - " .join(['Spam', 'eggs', 'ham'])
print(x)
x = ", " .join(['Spam', 'eggs', 'ham'])
print(x)

#split
str = "some text goes here"
x = str.split(' ')
print(x)

#replace
x = "Hello ME"
print(x.replace("ME", "world")) #(kata yang ingin diganti, kata pengganti)

#upper and lower
print("This is a sentence.".upper()) #huruf besar semua
print("AN ALL CAPS SENTENCE".lower()) #huruf kecil semua


#only while
i = 1
while i <= 5:
    print(i)
    i += 1
print("Finished")
#while with if else statement
number = int(input("number: "))
while number >= 0:
    print(number)
    if (number > 0) and (number % 2 == 0):
        print("Even number")
    elif number == 0:
        print("Zero number")
    else:
        print("Odd Number")
    number -= 1
#while with break and continue
#break
while True:
    a = input("Give me string: ")
    y = input("finish?: ")
    if y == "Yes":
        print(a)
        break
    else:
        print(a)
#continue
x = 5
while x > 0:
    x -= 1
    if(x == 3):
        continue
    print(x)



    
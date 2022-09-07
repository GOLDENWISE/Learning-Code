#if condition:
#       statements
#else:
#    statements
x = 5
if x > 5: 
    print("x is greater than 5")
    if x == 7:
        print("x is equal to 7")
    else:
        print("x is not equal to 7")
elif x == 5:
    print("x is equal to 5")
else:
    print("x is lower than 5")
    if x == 4:
        print("x is equal to 4")
    else:
        print("x is not equal to 4")

y = 5
z = 4
if (x == y) and (x != z):
    print("x is equal from y, but different from z")
if (x == z or x == y):
    print("x is equal from x or y")


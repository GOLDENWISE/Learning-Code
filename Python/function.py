#without arguments
def myFunc():
    print('this is')
    print(' myFunc')

myFunc()

#with arguments
def parameters(this):
    print(this)

This = input()
parameters(This)

#function with return 
def sum(x, y):
    return x+y

a = sum(2, 4)
print(a)

if(sum(2, 4) == 6):
    print('that equal')
else:
    print('its different')

print(sum(3, 4))

def arr(a, b):
    return [a*2, b*2]

z = arr(2, 4)
print(z)
print(z[0])
print(z[1])

'''
comment multi line
'''

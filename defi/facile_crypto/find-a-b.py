charset = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ{}_-!@#$()[]<>/"
FLAG = "CTF"
def f(a,b,n,x):
	return (a*x+b)%n

def encrypt(message,a,b,n):
	encrypted = ""
	for char in message:
		x = charset.index(char)
		x = f(a,b,n,x)
		encrypted += charset[x]

	return encrypted

n = len(charset)

for a in range(1,n):
    for b in range(1,n):
        if encrypt(FLAG,a,b,n) == "I7G":
            print(a,b)


# ENCRYPTED FLAG : I7G1#1F1sP1P1I0TrOi1HX1paF0l1P1PR
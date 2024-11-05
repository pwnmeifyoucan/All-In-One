charset = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ{}_-!@#$()[]<>/"

def mod_inverse(a, n):
    for x in range(1, n):
        if (a * x) % n == 1:
            return x
    return None  

def decrypt(encrypted_message, a, b, n):
    decrypted = ""
    a_inv = mod_inverse(a, n)  
    
    if a_inv is None:
        raise ValueError("No inverse of a modulo n found.")
    
    for char in encrypted_message:
        x = charset.index(char)
        x = a_inv * (x - b) % n  
        decrypted += charset[x]
    
    return decrypted

a = 25 
b = 18 
n = len(charset) 

encrypted_message = "I7G1#1F1sP1P1I0TrOi1HX1paF0l1P1PR"

decrypted_message = decrypt(encrypted_message, a, b, n)

print(decrypted_message)

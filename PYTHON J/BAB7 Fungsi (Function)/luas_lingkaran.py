import math

def luas_lingkaran(r):
    return math.pi * r * r

def volume_kubus(s):
    return s ** 3

def volume_kerucut(r, t):
    return (1/3) * math.pi * r * r * t

jari = 10
print("Luas lingkaran:", luas_lingkaran(jari))

sisi = 5
print("Volume kubus:", (sisi))

jari = 10
tinggi = 15
print("Volume kerucut:", volume_kerucut(jari, tinggi))

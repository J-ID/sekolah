import math

def menu():
    print("kalkulator rumus:")
    print("====================")
    print("1. Luas Persegi")
    print("2. Keliling Persegi")
    print("3. Luas Lingkaran")
    print("4. Keliling Lingkaran")
    print("5. Volume Balok")
    print("6. Keluar")

def hitung_luas_persegi():
    sisi = float(input("Masukkan panjang sisi persegi: "))
    luas = sisi * sisi
    print(f"Luas persegi dengan sisi {sisi} adalah: {luas}")

def hitung_keliling_persegi():
    sisi = float(input("Masukkan panjang sisi persegi: "))
    keliling = 4 * sisi
    print(f"Keliling persegi dengan sisi {sisi} adalah: {keliling}")

def hitung_luas_lingkaran():
    jari_jari = float(input("Masukkan panjang jari-jari lingkaran: "))
    luas = math.pi * (jari_jari ** 2)
    print(f"Luas lingkaran dengan jari-jari {jari_jari} adalah: {luas}")

def hitung_keliling_lingkaran():
    jari_jari = float(input("Masukkan panjang jari-jari lingkaran: "))
    keliling = 2 * math.pi * jari_jari
    print(f"Keliling lingkaran dengan jari-jari {jari_jari} adalah: {keliling}")

def hitung_volume_balok():
    panjang = float(input("Masukkan panjang balok: "))
    lebar = float(input("Masukkan lebar balok: "))
    tinggi = float(input("Masukkan tinggi balok: "))
    volume = panjang * lebar * tinggi
    print(f"volume balok dengan panjang {panjang}, lebar {lebar} dan tinggi {tinggi} adalah: {volume}")

while True:
    menu()
    pilihan = input("Masukkan Pilihan (1-6): ")
    if pilihan == '1':
        hitung_luas_persegi()
    elif pilihan == '2':
        hitung_keliling_persegi()
    elif pilihan == '3':
        hitung_luas_lingkaran()
    elif pilihan == '4':
        hitung_keliling_lingkaran()
    elif pilihan == '5':
        hitung_volume_balok()
    elif pilihan == '6':
        print("Terima kasih telah menggunakan program ini.")
        break
    else:
        print("Pilihan tidak valid, silakan coba lagi.")
    print()
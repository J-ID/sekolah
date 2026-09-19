siswa = {"Nama": "Budi", "Umur" : "16"}

print("Nama siswa:", siswa["Nama"])
siswa["kelas"] = "X RPL"

for key, value in siswa.items():
    print(key, ":", value)

siswa["Alamat"] = "Tuban"
siswa["No.HP"] = "08102413645"

for key, value in siswa.items():
    print(key, ":", value)

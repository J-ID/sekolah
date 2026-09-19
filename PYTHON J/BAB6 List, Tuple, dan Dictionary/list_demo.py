buah = ["apel", "jeruk", "mangga"]

print("Daftar buah: ")
for b in buah:
    print("-", b)

buah.append("pisang")
print("Setelah ditambah:", buah)

buah.remove("jeruk")
print("Setelah dihapus:", buah)

print("Buah[2]:", buah[2])

buah[0] = "Durian"
print("Setelah Diubah:", buah)
is_member = True
is_vvip = False
total_belanja = 300000
hari_transaksi = "Senin"

dapat_diskon = (is_member and (total_belanja > 250000) and (hari_transaksi != "Sabtu" and hari_transaksi != "Minggu")) or (is_vvip and total_belanja >= 1000000)

print(f"Status mendapat diskon: {dapat_diskon}")
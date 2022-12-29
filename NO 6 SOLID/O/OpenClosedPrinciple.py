import math
import json
import base64

class BangunDatar:

    def luas():
        pass

class Lingkaran:

    def __init__(self, radius):
        self.radius = radius

    def luas(self):
        return math.pi * pow(self.radius, 2)

class Persegi(BangunDatar):

    def __init__(self, panjang):
        self.panjang = panjang

    def luas(self):
        return pow(self.panjang, 2)

class Kalkulasi:

    def __init__(self, *args):
        self.bangunDatar = args

    def calculate(self):
        listLuas = []
        for objek in self.bangunDatar:
            if isinstance(objek, BangunDatar):
                luas = objek.luas()
                listLuas.append(luas)
                continue

            raise Exception("This Object (",object,") Not Implementation of BangunDatar")
            
        return sum(listLuas)

    def output(self):
        return self.calculate()

class OutputKalkulasi:

    def __init__(self, kalkulasi):
        self.kalkulasi = kalkulasi

    def toJSON(self):
        result = {
            "result" : self.kalkulasi.output()
        }
        return json.dumps(result)

    def toText(self):
        with open('result.txt', 'w') as f:
            f.write(self.kalkulasi.output())

    def toBase64(self):
        result = base64.encode(self.kalkulasi.output())
        return result

class Main:
    result = Kalkulasi(
        Lingkaran(2),
        Persegi(5),
        Persegi(6)
    )

    print("Jumlah luas dari bangunan ", result.output())

    calc_output = OutputKalkulasi(result)
    print("Dalam Bentuk JSON : ", calc_output.toJSON())
import math
import json
import base64

class Lingkaran:

    def __init__(self, radius):
        self.radius = radius

class Persegi:

    def __init__(self, panjang):
        self.panjang = panjang

class Kalkulasi:

    def __init__(self, *args):
        self.bangunDatar = args

    def calculate(self):
        listLuas = []
        for objek in self.bangunDatar:
            luas = 0
            if type(objek).__name__ == 'Persegi':
                luas = math.pow(objek.panjang, 2)
            elif type(objek).__name__ == 'Lingkaran':
                luas = math.pi * math.pow(objek.radius, 2)
            listLuas.append(luas)

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

    print("Jumlah luas dari bangunan tersebut ", result.output())

    calc_output = OutputKalkulasi(result)
    print("Konversi dalam Bentuk JSON : ", calc_output.toJSON())
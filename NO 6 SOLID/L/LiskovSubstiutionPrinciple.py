class Burung:

    def __init__(self):
        pass

class BurungTerbang(Burung):

    def __init__(self):
        pass

    def terbang(self):
        ''' Logic untuk terbang '''
        return True

class Elang(BurungTerbang):
    def __init__(self):
        pass

#walapun penguin termasuk dalam anggota burung, tapi penguin tidak termasuk burung yang bisa terbang maka harus dibedakan
class Penguin(Burung):
    def __init__(self):
        pass
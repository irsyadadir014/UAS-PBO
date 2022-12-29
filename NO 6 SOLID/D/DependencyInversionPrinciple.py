class Koneksi:

    def connect():
        pass

class MySQLConnection(Koneksi):

    def connect():
        # Logic untuk menghandle database connection
        return "Database Connection"

class ModelApp:

    def __init__(self, connection : Koneksi):
        # self connection
        self.connection = connection
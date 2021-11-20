from mongoengine import connect, Document, StringField, IntField, FloatField

class Heart(Document):
    age = IntField(required=True)
    sex = IntField(required=True)
    cp = IntField(required=True)
    trestbps = IntField(required=True)
    chol = IntField(required=True)
    fbs = IntField(required=True)
    restecg = IntField(required=True)
    thalach = IntField(required=True)
    exang = IntField(required=True)
    oldpeak = FloatField(required=True)
    slope = IntField(required=True)
    ca = IntField(required=True)
    thal = IntField(required=True)
    target = StringField(required=True, max_length=255)

class Database:
    # method yang digunakan untuk koneksi database
    def __init__(self):
        try:
            self.connection = connect(
                db="skripsi",
                host="localhost",
                port=27017
            )
        except Exception as e:
            print(f"kesalahan gagal koneksi : {e}")

    # method yang digunakan untuk melihat semua databaru
    def showAllDataHeart(self):
        try:
            return Heart.objects().all().to_json()
        except Exception as e:
            print(f"kesalahan function showAllDataHeart: {e}")
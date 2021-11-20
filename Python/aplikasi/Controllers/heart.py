from Models.heart import Database as DatabaseHeart
from Models.databaru import Database as DatabaseBaru
import json
import pickle
import pandas as pd
import matplotlib.pyplot as plt

db_heart = DatabaseHeart()
db_baru = DatabaseBaru()

model = pickle.load(open(r'C:\Users\ROG\Documents\skripsi\Codingan\aplikasi\Controllers\model_xgb.pkl', 'rb'))

# function yang digunakan untuk merubah ObjectID ke String
def ObjToStr(obj):
    try:
        return str(obj["_id"]["$oid"])
    except Exception as e:
        print(f"kesalahan function ObjToStr: {e}")

# function yang digunakan untuk melihat semua data
def viewAllDataHeart():
    try:
        dbhasil = db_heart.showAllDataHeart()
        hasil = json.loads(dbhasil)
        data_list = []
        for data in hasil:
            data["id"] = ObjToStr(data)
            data_list.append(data)
        dataDict = {
            "message" : "success",
            "data" : data_list
        }
        return dataDict
    except Exception as e:
        print(f"kesalahan function viewAllDataHeart: {e}")

# function yang digunakan untuk melihat semua databaru
def viewAllDataBaru():
    try:
        dbhasil = db_baru.showAllDatabaru()
        hasil = json.loads(dbhasil)
        data_list = []
        for data in hasil:
            data["id"] = ObjToStr(data)
            data_list.append(data)
        return data_list
    except Exception as e:
        print(f"kesalahan function viewAllDataBaru: {e}")

# function yang digunakan untuk insert ke databaru
def tambahDataBaru(**params):
    try:
        db_baru.insertDatabaru(**params)
        data = {
            "msg" : "ok"
        }
        return data
    except Exception as e:
        print(f"kesalahan function tambahDataBaru: {e}")

# function yang digunakan untuk memprediksi data
def prediksiData(**params):
    try:
        dataParams = [[
            int(params["age"]),
            int(params["sex"]),
            int(params["cp"]),
            int(params["trestbps"]),
            int(params["chol"]),
            int(params["fbs"]),
            int(params["restecg"]),
            int(params["thalach"]),
            int(params["exang"]),
            float(params["oldpeak"]),
            int(params["slope"]),
            int(params["ca"]),
            int(params["thal"])
        ]]
        dataTesting = pd.DataFrame(dataParams, index=[1], columns=['age', 'sex', 'cp', 'trestbps', 'chol', 'fbs', 'restecg', 'thalach', 'exang', 'oldpeak', 'slope', 'ca', 'thal'])
        hasil_prediksi = model.predict(dataTesting)[0]
        if hasil_prediksi == 0:
            prediksi = "Tidak Terkena Penyakit Jantung"
        else:
            prediksi = "Terkena Penyakit Jantung"
        
        dataInsert = {
            "age": str(params["age"]),
            "sex": int(params["sex"]),
            "cp": int(params["cp"]),
            "trestbps": int(params["trestbps"]),
            "chol": int(params["chol"]),
            "fbs": int(params["fbs"]),
            "restecg": int(params["restecg"]),
            "thalach": int(params["thalach"]),
            "exang": int(params["exang"]),
            "oldpeak": float(params["oldpeak"]),
            "slope": int(params["slope"]),
            "ca": int(params["ca"]),
            "thal": int(params["thal"]),
            "target": str(hasil_prediksi)
        }
        hasilinsert = tambahDataBaru(**dataInsert)
        dataRespon = {
            "msg" : "ok",
            "prediksi" : prediksi,
            "hasil_insert": hasilinsert
        }
        return dataRespon
    except Exception as e:
        print(f"kesalahan function PrediksiData{e}")
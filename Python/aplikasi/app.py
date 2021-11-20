from fastapi import FastAPI, Request
from Controllers import heart, preprocessing
import uvicorn
from fastapi.middleware.cors import CORSMiddleware

app = FastAPI()

origins = [
    "http://localhost:8000"
]

app.add_middleware(
    CORSMiddleware,
    allow_origins=origins,
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

# route API untuk melihat semua data
@app.get("/heart/all")
async def lihatSemuaDataHeart():
    try:
        hasil = heart.viewAllDataHeart()
        return hasil
    except Exception as e:
        print(f"kesalahan function lihatSemuaData: {e}")

# route API untuk melihat prediksi data
@app.get("/predict")
async def prediksiData(age: int, sex: int, cp: int, trestbps: int, chol: int, fbs: int, restecg: int, thalach: int, exang: int, oldpeak: float, slope: int, ca: int, thal: int):
    try:
        params = {
            "age": age,
            "sex": sex,
            "cp": cp,
            "trestbps": trestbps,
            "chol": chol,
            "fbs": fbs,
            "restecg": restecg,
            "thalach": thalach,
            "exang": exang,
            "oldpeak": oldpeak,
            "slope": slope,
            "ca": ca,
            "thal": thal
            }
        return heart.prediksiData(**params)
    except Exception as e:
        print(f"kesalahan function prediksiData: {e}")

# route API untuk melihat data df hasil hapus outlier
@app.get("/preprocessing/hapusoutlier")
async def showDfHapusOutlier():
    try:
        return preprocessing.showDfHapusOutlier()
    except Exception as e:
        print(f"kesalahan function showDfHapusOutlier: {e}")

# route API yang digunakan untuk menampilkan X
@app.get("/preprocessing/x")
async def showX():
    try:
        return preprocessing.showX()
    except Exception as e:
        print(f"kesalahan function API showX: {e}")

# route API yang digunakan untuk menamppilkan y
@app.get("/preprocessing/y")
async def showY():
    try:
        return preprocessing.showY()
    except Exception as e:
        print(f"kesalahan function API showY: {e}")

# route API yang digunakan untuk menampilkan X_train
@app.get("/preprocessing/xtrain")
async def showXtrain():
    try:
        return preprocessing.showXtrain()
    except Exception as e:
        print(f"kesalahan function API showXtrain: {e}")

# route API yang digunakan untuk menampilkan X_train hasil scaling
@app.get("/preprocessing/scaling")
async def showXtrainScaling():
    try:
        return preprocessing.showXtrainScaling()
    except Exception as e:
        print(f"kesalahan function API showXtrainScaling: {e}")

# route API yang digunakan untuk menampilkan X_train hasil OneHotEncoder
@app.get("/preprocessing/onehot")
async def showXtrainOneHot():
    try:
        return preprocessing.showXtrainOneHot()
    except Exception as e:
        print(f"kesalahan function API showXtrainoneHot: {e}")

# route API yang digunakan untuk menampilkan X_train hasil preprocessing
@app.get("/preprocessing/hasil")
async def showXtrainHasilPreprocessing():
    try:
        return preprocessing.showXtrainHasilPreprocessing()
    except Exception as e:
        print(f"kesalahan function API showXtrainHasilPreprocesing: {e}")

# route API yang digunakan untuk menampilkan contoh data train
@app.get("/contohdatatrain")
async def showContohDataTrain():
    try:
        return preprocessing.showContohDataTrain()
    except Exception as e:
        print(f"kesalahan function API showContohDataTrain: {e}")

# route API yang digunakan untuk menampilkan contoh data train + residual
@app.get("/residual")
async def showContohDataTrainResidual():
    try:
        return preprocessing.showContohDataTrainingResidual()
    except Exception as e:
        print(f"kesalahan function API showDataTrainResidual: {e}")

if __name__ == "__main__":
    uvicorn.run("app:app", host="0.0.0.0", port=8005, reload=True)
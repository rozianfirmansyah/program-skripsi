import pandas as pd
import json

# fungsi yang digunakan untuk menampilkan df hasil hapus outlier
def showDfHapusOutlier():
    hasil =  pd.read_feather(r"C:\Users\ROG\Documents\skripsi\Datasets\df_hasil_hapus_outlier.feather").to_dict(orient="records")
    data = {
        "message" : "success",
        "data" : hasil
    }
    return data

# function yang digunakan untuk menampilkan dataframe X (features)
def showX():
    try:
        hasil =  pd.read_feather(r"C:\Users\ROG\Documents\skripsi\Datasets\X.feather").to_dict(orient="records")
        data = {
            "message": "success",
            "data": hasil
        }
        return data
    except Exception as e:
        print(f"kesalahan function showX: {e}")

# fucntion yang digunakan untuk menampilkan dataframe y (target)
def showY():
    try:
        return pd.read_csv(r"C:\Users\ROG\Documents\skripsi\Datasets\y.csv").to_dict(orient="records")
    except Exception as e:
        print(f"kesalahan function showY: {e}")

#function yang digunakan untuk menampilkan X_train
def showXtrain():
    try:
        hasil =  pd.read_feather(r"C:\Users\ROG\Documents\skripsi\Datasets\X_train.feather").to_dict(orient="records")
        data = {
            "message": "success",
            "data": hasil
        }
        return data
    except Exception as e:
        print(f"kesalahan function showXtrain: {e}")

# fucntion yang digunakan untuk menampilkan data X_train hasil scaling
def showXtrainScaling():
    try:
        hasil = pd.read_feather(r"C:\Users\ROG\Documents\skripsi\Datasets\X_train_scaling.feather").to_dict(orient="records")
        data = {
            "message": "success",
            "data": hasil
        }
        return data
    except Exception as e:
        print(f"kesalahan function showXtrainScaling: {e}")

# function yang digunakan untuk menampilkan data X_train hasil onehot
def showXtrainOneHot():
    try:
        hasil = pd.read_csv(r"C:\Users\ROG\Documents\skripsi\Datasets\X_train_onehot.csv").to_dict(orient="records")
        data = {
            "message": "success",
            "data": hasil
        }
        return data
    except Exception as e:
        print(f"kesalahan function showXtrainOneHot: {e}")

# function yang digunakan untuk menampilkan X_train hasil preprocessing
def showXtrainHasilPreprocessing():
    try:
        hasil = pd.read_csv(r"C:\Users\ROG\Documents\skripsi\Datasets\X_train_hasil_preprocessing.csv").to_dict(orient="records")
        data = {
            "message": "success",
            "data": hasil
        }
        return data
    except Exception as e:
        print(f"kesalahan function showXtrainHasilPreprocessing: {e}")

# fucntion yang digunakan untuk menampilkan contoh data Training
def showContohDataTrain():
    try:
        hasil = pd.read_csv(r"C:\Users\ROG\Documents\skripsi\Datasets\contoh_data_training.csv").to_dict(orient="records")
        data = {
            "message": "success",
            "data" : hasil
        }
        return data
    except Exception as e:
        print(f"kesalahan function showContohDataTrain: {e}")

# function yang digunakan untuk menampilkan contoh data training + residual
def showContohDataTrainingResidual():
    try:
        hasil = pd.read_csv(r"C:\Users\ROG\Documents\skripsi\Datasets\contoh_data_training_residual.csv").to_dict(orient="records")
        data = {
            "message": "success",
            "data": hasil
        }
        return data
    except Exception as e:
        print(f"kesalahan function showContohDataTrainResidual: {e}")
from flask import Flask, render_template, request
import pickle
import numpy as np
import pandas as pd
app = Flask(__name__)

@app.route("/")
def main():
    return render_template('index.html')

def ValuePredictor(umur, cp, trestbps, restecg, exang, oldpeak, ca, thal):
    to_predict = [umur,cp,trestbps,restecg,exang,oldpeak,ca,thal]
    to_predict = np.array([[umur,cp,trestbps,restecg,exang,oldpeak,ca,thal]])
    to_predict = pd.DataFrame(to_predict)

    #Kategorisasi
    to_predict[0]=pd.cut(to_predict[0],
                        bins = [23,29,34.3,39.6,44.9,50.2,55.4,60.7,66,71.3,76.6,81.9],
                        labels = ['29','34.3','39.6','44.9','50.2','55.4','60.7','66','71.3','76.6','81.9'])
    to_predict[1]=pd.cut(to_predict[1],
                        bins = [-1,0,1,2,3],
                        labels = ['0','1','2','3'])
    to_predict[2]=pd.cut(to_predict[2],
                        bins = [82.3,94,105.7,117.4,129,140.7,152.4,164.1,175.7,187.4,199.1,210.8],
                        labels = ['94','105.7','117','129','140.7','152.4','164.1','175.7','187.4','199.1','210.8'])                    
    to_predict[3]=pd.cut(to_predict[3],
                        bins = [-1,0,1,2],
                        labels = ['0','1','2'])
    to_predict[4]=pd.cut(to_predict[4],
                        bins = [-1,0,1],
                        labels = ['0','1'])
    to_predict[5]=pd.cut(to_predict[5],
                        bins = [-1,0.7,1.4,2,2.7,3.4,4.1,4.8,6.1,6.8],
                        labels = ['0.7','1.4','2','2.7','3.4','4.1','4.8','6.1','6.8'])                    
    to_predict[6]=pd.cut(to_predict[6],
                        bins = [-1,0,1,2,3],
                        labels = ['0','1','2','3'])
    to_predict[7]=pd.cut(to_predict[7],
                        bins = [-1,0,1,2],
                        labels = ['0','1','2'])

    #Load model
    loaded_model = pickle.load(open('model.sav', 'rb'))

    #Predict
    result = loaded_model.predict(to_predict)
    result = int(result[0])                    
    return result

@app.route("/data")
def data():
    return render_template('data.html')

@app.route("/form")
def form():
    return render_template('form.html')

@app.route("/model")
def model():
    return render_template('model.html')

@app.route("/dataset")
def dataset():
    return render_template('tabel.html')

@app.route("/info")
def info():
    return render_template('info.html')

@app.route('/form',methods = ['POST', 'GET'])
def result():
   if request.method == 'POST':
    nama = request.form['nama']
    nama = str(nama)
    jk = request.form['kelamin']
    jk = int(jk)
    if jk == 0 :
        jk = 'Perempuan'
    else:
        jk = 'Laki-Laki'
    alamat = request.form['alamat']
    alamat = str(alamat)
    umur = request.form['umur']
    umur=float(umur)
    if umur <= 23 :
        umur = 29
    elif umur > 81.9:
        umur = 81.9
    else:
        umur = umur
    cp = request.form['cp']
    cp=float(cp)
    trestbps = request.form['trestbps']
    trestbps=float(trestbps)
    if trestbps <= 82.3 :
        trestbps = 94
    elif trestbps > 210.8:
        trestbps = 210.8
    else:
        trestbps = trestbps
    restecg = request.form['restecg']
    restecg=float(restecg)
    exang = request.form['exang']
    exang=float(exang)
    oldpeak = request.form['oldpeak']
    oldpeak=float(oldpeak)
    if oldpeak <= -1 :
        oldpeak = 0.7
    elif oldpeak > 6.8:
       oldpeak = 6.8
    else:
        oldpeak = oldpeak
    ca = request.form['ca']
    ca=float(ca)
    thal = request.form['thal']
    thal=float(thal)
    result = int(ValuePredictor(umur, cp, trestbps, restecg, exang, oldpeak, ca, thal))
    if result == 0:
        return render_template("tidak_menderita.html", nama=nama, umur=umur, jk=jk, alamat=alamat)
    else:
        return render_template("menderita.html", result=result, nama=nama, umur=umur, jk=jk, alamat=alamat)

if __name__ == "__main__":
    app.run(debug=True)
from flask_wtf import FlaskForm
from wtforms import StringField, PasswordField, SubmitField, BooleanField, SelectField
from wtforms.validators import DataRequired, Length, Email, EqualTo

class Form(FlaskForm):
    nama = StringField('Nama', render_kw={"placeholder": "Masukkan Nama"},
                           validators=[DataRequired()])
    umur = StringField('Berapa umur anda?', render_kw={"placeholder": "Masukkan Umur"},
                           validators=[DataRequired()])
    # kelamin= StringField('Jenis Kelamin',
    #                        validators=[DataRequired()])
    kelamin= SelectField(u'Jenis Kelamin', default='Jenis Kelamin',
                        choices=[('0', 'Perempuan'), ('1', 'Laki-Laki')],
                        validators=[DataRequired()])
    alamat = StringField('Alamat tempat tinggal', render_kw={"placeholder": "Masukkan Alamat"},
                           validators=[DataRequired()])
    cp =  SelectField(u'Jenis nyeri di dada (cp)',
                        choices=[('0', 'Angina Khas'), ('1', 'Angina Tipikal'), ('2', 'Nyeri non-Angin'), ('3', 'Asimptomatik')],
                           validators=[DataRequired()])
    trestbps = StringField('Berapa tekanan darah saat istirahat?(trestbps)', render_kw={"placeholder": "Masukkan tekanan darah saat istirahat"},
                           validators=[DataRequired()])
    restecg = SelectField(u'Kondisi elektrodiografi jantung (restecg)',
                        choices=[('0', 'Normal'), ('1', 'Kelainan'), ('2', 'Hipertrofi ventrikel kiri')],
                           validators=[DataRequired()])
    exang = SelectField(u'Jantung nyeri saat berolahraga (exang)',
                        choices=[('0', 'Ya'), ('1', 'Tidak')],
                           validators=[DataRequired()])
    oldpeak = StringField('Berapa penurunan STEMI akibat olah raga? (oldpeak)', render_kw={"placeholder": "Masukkan penurunan STEMI saat berolahraga"},
                           validators=[DataRequired()])
    ca = StringField('Banyaknya nadi utama yang terdeteksi (ca)', render_kw={"placeholder": "Masukkan angka 0-3"},
                           validators=[DataRequired()])
    thal = SelectField(u'Kondisi detak jantung pasien (thal)',
                        choices=[('0', 'Normal'), ('1', 'Cacat Tetap'), ('2', 'Cacat Sementara')],
                           validators=[DataRequired()])
    submit = SubmitField('Submit')
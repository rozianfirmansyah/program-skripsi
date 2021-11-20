from flask import Flask, render_template
app = Flask(__name__)

@app.route("/")
def hello():
    return 'hello world'

@app.route("/profil")
def profil():
    return render_template('Profil.html')

if __name__ == "__main__":
    app.run()
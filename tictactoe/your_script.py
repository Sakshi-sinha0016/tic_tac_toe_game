from flask import Flask, render_template
import subprocess

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('redirect.html')

@app.route('/run_c_code')
def run_c_code():
    result = subprocess.check_output('./Tic_tac_toe.c', shell=True)
    return result

if __name__ == '__main__':
    app.run(debug=True)

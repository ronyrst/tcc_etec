# https://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-iii-web-forms
# https://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-iv-database
# https://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-v-user-logins
# https://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-vi-profile-page-and-avatars
# https://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-vii-unit-testing
# https://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-viii-followers-contacts-and-friends
# https://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-ix-pagination
# https://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-x-full-text-search
# https://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-xi-email-support
# https://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-xii-facelift
# https://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-xiii-dates-and-times
# https://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-xiv-i18n-and-l10n
# https://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-xv-ajax
# https://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-xvi-debugging-testing-and-profiling
# https://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-xvii-deployment-on-linux-even-on-the-raspberry-pi
# https://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-xviii-deployment-on-the-heroku-cloud
# 
# 
# https://flask.palletsprojects.com/en/2.0.x/



from flask import Flask
app = Flask(__name__)

@app.route("/")
@app.route("/index")
@app.route("/index/")
def index():
    user = {'username': 'Miguel'}
    return render_template('index.html', title='Home', user=user)


@app.route("/fale_conosco")
@app.route("/fale_conosco/")
def fale_conosco():
    return render_template('fale_conosco.html')


@app.route("/login")
@app.route("/login/")
def logando():
    return render_template('login.html')


@app.route("/cadastro")
@app.route("/cadastro/")
def xama():
    return render_template('cadastro.html')


@app.route("/area_hospital")
@app.route("/area_hospital/")
def xama():
    return render_template('area_hospital.html')


@app.route("/area_doador")
@app.route("/area_doador/")
def xama():
    return render_template('area_doador.html')


@app.route("/backdoor")
@app.route("/backdoor/")
def xama():
    return render_template('backdoor.html')


if __name__ == "__main__":
    app.run()
from flask import Flask, render_template

# Inicializa a aplicação Flask
app = Flask(__name__)

# -------------------------
# Rotas do site
# -------------------------

# Rota principal -> http://127.0.0.1:5000/
@app.route("/")
def homepage():
    return render_template("homepage.html")

# Rota de contatos -> http://127.0.0.1:5000/contatos
@app.route("/contatos")
def contatos():
    return render_template("contatos.html")

# Rota dinâmica -> ex: http://127.0.0.1:5000/usuarios/Orlando
@app.route("/usuarios/<nome_usuario>")
def usuarios(nome_usuario):
    return render_template("usuarios.html", nome_usuario=nome_usuario)

# -------------------------
# Inicialização do servidor
# -------------------------
if __name__ == "__main__":
    # debug=True reinicia o servidor automaticamente a cada alteração no código
    # apenas para desenvolvimento (não usar em produção!)
    app.run(debug=True)

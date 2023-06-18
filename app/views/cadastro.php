<div class="row container">
    <div class="col s12">
        <h3 class="light">Cadastro.</h3>
    </div>

    <!-- Criando formulario -->
    <div class="cols 12">
        <form action="?router=Site/cadastro/" method="post">
            <div class="input-field col s12 m6">
                <input placeholder="Digite seu nome" id="nome" name="nome" type="text" class="validate" required>
                <label for="nome">Digite seu nome</label>
            </div>

            <div class="input-field col s12 m6">
                <input placeholder="Digite seu e-mail" id="email" name="email" type="email" class="validate" required>
                <label for="email">Digite seu e-mail</label>

                <div class="input-field col s12">
                    <input type="submit" value="enviar" class="btn-small">
                    <input type="reset" value="limpar" class="btn-small red">
                </div>
            </div>
        </form>
    </div>

</div>
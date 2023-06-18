<div class="row container">
    <div class="col s12">
        <h3 class="light">Edição de registros.</h3>
        <!-- Mostrando o valor da vareavel foto que está no controller -->
    </div>
    <div class="col s12">
        <form action="?router=Site/alterar/" method="Post">
            <!-- Foreach vai remover os valores duplicados -->
            <?php foreach ($editarForm as $registro) : ?>

                <!-- Pegando o valor de ID de forma oculta -->
                <input type="hidden" name="id" value="<?php echo $registro["id"];?>">

                <div class="input-field col s12 m6">

                    <input placeholder="Digite seu nome" id="nome" name="nome" type="text" class="validate" value="<?php
                    echo $registro['nome']?>" required>

                    <label for="nome">Digite seu nome</label>
                </div>

                <div class="input-field col s12 m6">
                <input placeholder="Digite seu nome" id="email" name="email" type="text" class="validate" value="<?php
                    echo $registro['email']?>" required>
                    <label for="email">Digite seu e-mail</label>

                    <div class="input-field col s12">
                        <input type="submit" value="Salvar alterações" class="btn-small">
                        <input type="reset" value="limpar" class="btn-small red">
                    </div>

                <?php endforeach; ?>
        </form>
    </div>
</div>
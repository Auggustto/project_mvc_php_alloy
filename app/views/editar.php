<div class="container-sm">

    <h3 class="light">Edit of arquives.</h3>
    <!-- Mostrando o valor da vareavel foto que está no controller -->

    <form action="?router=Site/alterar/" method="Post">
        <!-- Foreach vai remover os valores duplicados -->
        <?php foreach ($editarForm as $registro) : ?>

            <!-- Pegando o valor de ID de forma oculta -->
            <input type="hidden" name="id" value="<?php echo $registro["id"]; ?>">

                <!-- Criando os botões e chamando os metodos -->
                <input name="nome" type="text" class="form-control" placeholder="Input you Name" aria-label="nome" value="<?php echo $registro['nome'] ?>" required>
                <input name="email" type="text" class="form-control" placeholder="Input you E-mail" aria-label="nome" value="<?php echo $registro['email'] ?>" required>
            
                <div class="btn-group">
                    <input type="submit" value="Salvar alterações" class="btn btn-success">
                    <input type="reset" value="limpar" class="btn btn-danger">
                </div>

            <?php endforeach; ?>
    </form>
</div>
</div>
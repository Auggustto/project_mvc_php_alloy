<div class="container-sm">

    <h3 class="light">Consult.</h3>

    <div class="div col s12">
        <table class="table table-hover table-bordered">
            <tr>
                <th>NAME</th>
                <th>E-MAIL</th>
                <th>EDIT</th>
            </tr>

            <!-- Utilizando o foreach para remover os dados duplicados do array -->
            <?php foreach ($consulta as $registro) : ?>
                <tr>
                    <td><?php echo $registro['nome'] ?></td>
                    <td><?php echo $registro['email'] ?></td>

                    <!-- Botão de editar, vamos pegar o id que desejamos editrar os dados -->
                    <td>
                        <!-- Vamos utilizar o base64_encode para criptografar o ID -->
                        <a href="?router=Site/editar/&id=<?php echo base64_encode($registro['id']) ?>" class="btn btn-primary">Editar</a>
                        <a href="?router=Site/confirmaDelete/&id=<?php echo base64_encode($registro['id']) ?>" class="btn btn-danger">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>
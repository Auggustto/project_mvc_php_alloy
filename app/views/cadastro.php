<div class="container-sm">

    <h3 class="light">Register Users.</h3>

    <form action="?router=Site/cadastro/" method="post">
        <div class="row">
            <div class="col">
                <input name="nome" type="text" class="form-control" placeholder="Input you Name" aria-label="nome" required>
            </div>
            <div class="col">
                <input name="email" class="form-control" placeholder="Input you E-mail" aria-label="email" required>
            </div>
            <input type="submit" value="enviar" class="btn btn-primary">
            <input type="reset" value="limpar" class="btn btn-danger">
        </div>
    </form>

</div>
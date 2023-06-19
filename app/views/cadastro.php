<div class="container-sm">
    <div class="col s12">
        <h3 class="light">Register Users.</h3>
    </div>

    <form action="?router=Site/cadastro/" method="post">
        <!-- <div class="input-group flex-nowrap">
            <input name="nome" class="form-control" placeholder="Input you Name" aria-label="Username" aria-describedby="addon-wrapping" required>
            <input name="email" class="form-control" placeholder="Input you E-mail" aria-label="Username" aria-describedby="addon-wrapping" required>
            <input type="submit" value="enviar" class="btn btn-primary">
            <input type="reset" value="limpar" class="btn btn-danger">
        </div> -->
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
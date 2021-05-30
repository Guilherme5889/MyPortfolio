<!-- general form elements -->
<?php
Config::updateConfig();

$config = Config::getConfig();
?>
<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Configurações</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
            <label for="exampleInputEmail1">Título da Página</label>
            <input type="text" class="form-control" name="titulo" id="exampleInputEmail1" value="<?php echo $config["titulo"]; ?>" placeholder="Título">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Email Contato</label>
            <input type="email" class="form-control" name="email" id="exampleInputPassword1" value="<?php echo $config["email"]; ?>" placeholder="Email Contato">
            </div>
            <div class="form-group">
            <label for="exampleInputFile">Imagem de Perfil</label>
            <div class="input-group">
                <input type="file" name="imagem">
            </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" name="update" class="btn btn-primary">Atualizar Dados</button>
        </div>
    </form>
</div>
<!-- /.card -->

          
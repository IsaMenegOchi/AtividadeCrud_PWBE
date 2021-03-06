<?php
    include('../componentes/header.php');
    require_once("../dataBase/conexao.php");
    require_once("../login/funcoesSessao.php");

    verificarLogin();

    $sql = "SELECT * FROM tbl_pessoa";

    $mandarBanco = mysqli_query($conexao, $sql);
?>

<div class="container">

    <br/>
    
    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Celular</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            // if(isset()){

            // }

            while($pessoa = mysqli_fetch_array($mandarBanco)){
            echo $pessoa["cod_pessoa"]
            ?>
                <tr>
                    <th><?=$pessoa["cod_pessoa"]?></th>
                    <th><?=$pessoa["nome"]?></th>
                    <th><?=$pessoa["sobrenome"]?></th>
                    <th><?=$pessoa["email"]?></th>
                    <th><?=$pessoa["celular"]?></th>
                
                    <th>

                        <form method="post" action="../cadastro/editar.php">
                            <button class="btn btn-warning">Editar</button>
                            <input type="hidden" name="idPessoa" value="<?=$pessoa["cod_pessoa"]?>">
                            <input type="hidden" name="acao" value="editar">
                        </form>

                        <form action="../cadastro/acoes.php" method="post" style="display: inline;">
                            <input type="hidden" name="idPessoa" value="<?=$pessoa["cod_pessoa"]?>">
                            <input type="hidden" name="acao" value="deletar">
                            <button class="btn btn-danger">Excluir</button>
                        </form>
                        
                    </th>

                </tr>

            <?php }?>

        </tbody>

    </table>

</div>

<?php
    include('../componentes/footer.php');
?>
<?php

    include('../componentes/header.php');
?>

    <div class="container-geral">
    
        <div class="container-form">
    
                <form action="processa_login.php?acao=login" method="POST">
                    
                    <div class="form-group">
                        <label for="txt_usuario">USUÁRIO</label>
                        <input type="text" class="form-control" name="txt_usuario" id="txt_usuario">
                    </div>

                    <div class="form-group">
                        <label for="txt_senha">SENHA</label>
                        <input type="password" class="form-control" name="txt_senha" id="txt_senha">
                    </div>

                    <div class="form-group">
                      <button class="btn btn-primary" type="submit">LOGAR</button>
                    </div>
                    <?php
                   

                    if(isset($_GET["erro"])){
                    ?>
                        <script lang="javascript"> 
                        
                            "use script"

                            function alertar(){
                                alert("usuário ou senha incorretos");
                            }
                            
                            alertar();
                            </script>
                        <?php
                    }
                    ?>
                </form>

            </div>

        </div>

    </div>

<?php
    include('../componentes/footer.php');
?>
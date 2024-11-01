<?php

include_once '../model/Endereco.php';
include_once '../model/database/DAO/enderecoDAO.php';

if (isset($_REQUEST['acao'])){ //verifica se o hidden chegou

$acao = $_REQUEST['acao'];
    
switch ($acao) {
        case 'inserir':
            //inserindo um endereco;
   if (isset($_POST['combo']) && 
        isset ($_POST['txtestado'])&&
        !empty($_POST['txtestado']) &&
        isset ($_POST['cidade'])&&
        isset ($_POST['bairro'])&&
        isset ($_POST['cep'])&&   
        isset ($_POST['rua'])&&   
        isset ($_POST['numero'])&&   
        isset ($_POST['complemento'])){
             
          $dao = new EnderecoDAO();
          $objeto = new Endereco();
          $objeto->nome = $_POST['txtnome'];
          $objeto->validade = $_POST['data'];
          $objeto->valor = $_POST['valor'];
          $objeto->idingredientes = $_POST['combo'];
          
          if($dao->insert($objeto)){
                    ?>
                    <script type="text/javascript">
                        alert('Endereco salvo com sucesso.');
                        location.href = '../view/listaitens.php';
                    </script>
                    <?php
                }else{
                    ?>
                    <script type="text/javascript">
                        alert('Problema ao salvar o endereco!');
                        history.go(-1);
                    </script>
                    <?php
                }
            }else{
                ?>
                    <script type="text/javascript">
                        alert('Prencha os campos adequadamente.');
                        history.go(-1);
                    </script>
                <?php
            }
            break;
            
            
            
        case 'alterar':
           if (isset($_POST['combo']) && 
                isset ($_POST['txtnome'])&&
                !empty($_POST['txtnome']) &&
                isset ($_POST['data'])&&
                isset ($_POST['valor'])&&
                isset($_POST['idendereco'])){
             
                    $dao = new EnderecoDAO();
                    $objeto = new Endereco();
                    $objeto->nome = $_POST['txtnome'];
                    $objeto->validade = $_POST['data'];
                    $objeto->valor = $_POST['valor'];
                    $objeto->idingredientes = $_POST['combo'];
                    $objeto->idendereco = $_POST ['idendereco'];
                    
                    if($dao->update($objeto)){
                    ?>
                    
                    <script type="text/javascript">
                            alert('Endereco alterado com sucesso!');
                            location.href = '../view/listaendereco.php';
                        </script>
                    <?php
                    }else{
                    ?>
                        <script type="text/javascript">
                            alert('Problema ao alterar o endereco!');
                            history.go(-1);
                        </script>    
                    <?php
                    }
                }else{
                    ?>
                    <script type="text/javascript">
                        alert('Prencha o campo adequadamente.');
                        history.go(-1);
                    </script>
                <?php
                }
            break;
        case 'deletar':
            if (isset($_GET['idendereco'])){
                $dao = new EnderecoDAO();
                $id = $_GET['idendereco'];
                if($dao->delete($id)){
                    ?>
                    <script type="text/javascript">
                        alert('Endereco excluído com sucesso.');
                        location.href = '../view/listaendereco.php';
                    </script>
                    <?php
                }else{
                    ?>
                    <script type="text/javascript">
                        alert('Problema ao excluir o endereco.');
                        history.go(-1);
                    </script>
                    <?php
                }
            }
            break;
        default:
            break;

            }        
}       

?>

      
        
        
        
        
<?php
include_once '../model/Doacao.php';
include_once '../model/database/doacaoDAO.php';

if (isset($_REQUEST['acao'])){ //verifica se o hidden chegou

$acao = $_REQUEST['acao'];
    
    switch ($acao) {
        case 'inserir':
            // Verifica se todos os campos necessários estão definidos e não vazios
            if (isset($_POST['descricao_inicial'], $_POST['descricao_final'], $_POST['data_entrada'], 
                    $_POST['status'], $_POST['tipo_equipamento'], $_POST['observacoes']) 
                && !empty($_POST['descricao_inicial']) && !empty($_POST['descricao_final']) && 
                    !empty($_POST['data_entrada']) 
                && !empty($_POST['status']) && 
                    !empty($_POST['tipo_equipamento'])) {

                // Cria um array associativo com os dados do formulário
                $dadosDoacao = [
                    'descricao_inicial' => $_POST['descricao_inicial'],
                    'descricao_final' => $_POST['descricao_final'],
                    'data_entrada' => new DateTime($_POST['data_entrada']),
                    'data_saida' => isset($_POST['data_saida']) ? new DateTime($_POST['data_saida']) : null,
                    'status' => $_POST['status'],
                    'tipo_equipamento' => $_POST['tipo_equipamento'],
                    'observacoes' => $_POST['observacoes'],
                ];

                // Cria um objeto Doacao e atribui os valores do array
                $doacao = new Doacao();
                foreach ($dadosDoacao as $key => $value) {
                    $doacao->$key = $value;
                }

                if($dao->insert($objeto)){
                    ?>
                    <script type="text/javascript">
                        alert('Doação salva com sucesso.');
                        location.href = '../view/listas/listadoacao.php';
                    </script>
                    <?php
                }else{
                    ?>
                    <script type="text/javascript">
                        alert('Problema ao salvar a doação!');
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
        case 'alterar':
    if (isset($_POST['idDoacao']) && isset($_POST['descricao_inicial']) && !empty($_POST['descricao_inicial'])) {
        // Cria um objeto Doacao e atribui os valores dos campos do formulário
        $doacao = new Doacao();
        $doacao->idDoacao = $_POST['idDoacao'];
        $doacao->descricao_inicial = $_POST['descricao_inicial'];
        $doacao->descricao_final = $_POST['descricao_final'];
        $doacao->data_entrada = new DateTime($_POST['data_entrada']); // Convertendo para objeto DateTime
        $doacao->data_saida = isset($_POST['data_saida']) ? new DateTime($_POST['data_saida']) : null;
        $doacao->status = $_POST['status'];
        $doacao->tipo_equipamento = $_POST['tipo_equipamento'];
        $doacao->observacoes = $_POST['observacoes'];
        
        // Cria uma instância da classe doacaoDAO
        $dao = new doacaoDAO();
                
            if($dao->update($objeto)){
                    ?>
                        <script type="text/javascript">
                            alert('Doação alterada com sucesso!');
                            location.href = '../view/listadoacao.php';
                        </script>
                    <?php
                    }else{
                    ?>
                        <script type="text/javascript">
                            alert('Problema ao alterar a doação!');
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
            if (isset($_GET['idDoacao'])){
                $dao = new doacaoDAO();
                $id = $_GET['idDoacao'];
                if($dao->delete($id)){
                    ?>
                    <script type="text/javascript">
                        alert('Doação excluída com sucesso.');
                        location.href = '../view/listadoacao.php';
                    </script>
                    <?php
                }else{
                    ?>
                    <script type="text/javascript">
                        alert('Problema ao excluir a doação.');
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

<?php
date_default_timezone_set('America/Sao_Paulo');

// conecta ao banco de dados lanches

include "conexao.php";

//recebe TAG do aluno
$tag = $_GET['tag'];
//$matriculaReserva = $_POST['matricula'];

//verifica se aluno está cadastrado no sistema
$sql1 = 'SELECT * FROM aluno WHERE aluno_tag = '. $tag;

$verifica = mysqli_query($connection, $sql1);

//pega a matrícula e nome associada a TAG encontrada
$pegaMat = mysqli_fetch_assoc($verifica);
$matriculaDesseAluno = $pegaMat['matricula'];
$nomeDesseAluno = $pegaMat['nomeAluno'];

if (mysqli_num_rows($verifica) == 0){  
    //não achou o aluno
    echo "<script>alert('Matricula não encontrada! Tente novamente...');". 
    "javascript:window.location='index.php';</script>";
    //echo mysqli_error($connection);
    // mata a execução do php
    die();

}else{ // ACHOU ALUNO
      
     //pega a data da reserva do sistema
     $data_reserva = date('Y-m-d');
     //pega a hora atual do sistema
     $hora_reserva = date('H:i:s');
     $lanche = 1;
 
     //verifica se existe reserva para matricula no dia vigente
     $sql2 = "SELECT * FROM reserva WHERE Aluno_matricula = ".$matriculaDesseAluno." AND dataReserva = '".$data_reserva."'";

     $verificaReserva = mysqli_query($connection, $sql2);
 
    
     if (mysqli_num_rows($verificaReserva) == 0){
             //não reservou no dia atual
             
             //TESTE DE HORA
             if ( $hora_reserva > '09:00:00' ){
                    //fora do horário da reserva 
                    echo "<script>alert('Horário limite para reserva esgotado! :(');". 
                    "javascript:window.location='index.php';</script>";
                    
                    echo "erro_ao_salvar"; //mensagem ao NODEMCU/ARDUINO

                    }else{
                
                        //dentro do horário - ENFIM Reservar lanche 
                        $sql = "INSERT INTO reserva (Aluno_matricula,Lanche_idLanche,dataReserva,horaReserva)
                        VALUES (".$matriculaDesseAluno." ,".$lanche.",'".$data_reserva."','".$hora_reserva."')";
                        $gravado = mysqli_query($connection, $sql);
    
                        //Testa se gravou com sucesso
                        if ($gravado == true) {
                            // redireciona para a index.php
                        echo "<script>alert('Reserva feita com sucesso! \n $nomeDesseAluno ');". 
                            "javascript:window.location='index.php';</script>";
    
                        }else{

                        //algo aconteceu e não gravou no BD
                        echo mysqli_error($connection);
                       echo "<script>alert('Não reservou :( !');".
                        "javascript:window.location='index.php';</script>";

                        echo "erro_ao_salvar"; //mensagem ao NODEMCU/ARDUINO

                     // mata a execução do php
                         die();
                        }}
            }else{
                 //Achou reserva
                 echo "<script>alert('Reserva para este aluno já foi feita hoje!');". 
                        "javascript:window.location='index.php';</script>";

                        echo "erro_ao_salvar"; //mensagem ao NODEMCU/ARDUINO
            }
    
     } //FECHA TODOS OS TESTES
        


// fecha a conexão com o banco de dados
mysqli_close($connection);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lanches IFFar 2019</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script type="text/javascript" src="Hora.js"></script>
  
  </head>
  <body>
<div class="container">  
  <form id="contact" action="" method="post">
  <h3>LANCHES IFFAR - UG</h3>
  <h3> <span id="tempo">00/00/0000 - 00:00:00</span> </h3>
  <h3>Relação de Alunos</h3>
  <fieldset>
     <a class="botao" href="insert.php" >Novo aluno</a>  
    </fieldset>
	<fieldset>
     <a class="botao" href="admin.php" >HOME</a> 
  </fieldset>


  <table border=1>
            <thead>
                <tr>
                    <th>MATRÍCULA</th>
                    <th>NOME</th>
                    <th>TELEFONE</th>
                    <th colspan="2">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "conexao.php";

                $todosAlunos = mysqli_query($connection, "SELECT * FROM aluno");

                // para cada aluno de todos os alunos
                while ($aluno = mysqli_fetch_assoc($todosAlunos)) {
                    echo "<tr>";
                    echo "<td>" . $aluno['matricula'] . "</td>";
                    echo "<td>" . $aluno['nomeAluno'] . "</td>";
                    echo "<td>" . $aluno['foneAluno'] . "</td>";
                    echo "<td><a href='alter_aluno.php?matricula=" . $aluno['matricula'] . "'>"
                            . "Alterar</a></td>";
                    echo "<td><a href='delete_aluno.php?matricula=" . $aluno['matricula'] . "'>Excluir</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
  </form>

</div>

  </body>
</html>
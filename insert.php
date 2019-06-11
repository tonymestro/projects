<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lanches IFFar 2019</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script type="text/javascript" src="Hora.js"></script>
  
  </head>
  <body>
<div class="container">  
  <form id="contact" action="insere_aluno.php" method="post">
  <h3>LANCHES IFFAR - UG</h3>
    <h3> <span id="tempo">00/00/0000 - 00:00:00</span> </h3>
    <h2>INSERIR - novo aluno(a) </h2>

    <h4 class>Matrícula do aluno(a)</h4>
    <fieldset>
      <input name="matricula" placeholder="Informe a matrícula" type="text" maxlength=10 tabindex="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required autofocus>
    </fieldset>
    <h4 class>Nome do aluno(a)</h4>
    <fieldset>
      <input name="nomeAluno" placeholder="Informe o nome completo" type="text" tabindex="1">
    </fieldset>
    <h4 class>Fone do aluno(a)</h4>
    <fieldset>
      <input name="foneAluno" placeholder="Informe o telefone" type="tel" maxlength="15">
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Cadastrar</button>
    </fieldset>
    <p class="copyright">Designed by <a href="http://sig.iffarroupilha.edu.br" target="_blank" title="SIG">SIG</a></p>
     <p class="link"><a href="login.php" title="Adm">Admin</a></p>
  </form>

</div>

  </body>
</html>



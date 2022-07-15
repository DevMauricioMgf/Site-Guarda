<?php
  //Variáveis
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$mensagem</p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "contato@chalesdaguardadoembau.com";
  $assunto = "Contato pelo Site";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>Chalés da Guarda do Embaú</title>
    <link rel="stylesheet" href="css/style.css" />
    
      
  </head>
  <body>
    <header>
      <nav>
        <a class="logo" href="index.html">chalés da guarda do embau</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="index.html">Início</a></li>
          <li><a href="sobre.html">Sobre</a></li>
          <li><a href="acomodacoes.html">Acomodações</a></li>
          <li><a href="contato.html">Contato</a></li>
        </ul>
      </nav>
    </header>
    <section>
        <a class="whattsapp-link" href="https://wa.me/c/554899728700" target="_blank">
            <i class="fa fa-whatsapp"></i>
        </a>      
    </section>
    <div class="capa-contato">
      <div class="espaco">
        <div class="conteudo-titulo">
          <span class="titulo">Contato</span>
        </div>
      </div>
    </div>
  <section id="area-contato">
    <div id="formulario-contato">
      <h3>Envie uma mensagem</h3>
      <p> Faça alguma duvida ou nos de um feedback </p>
      

        <!-- Início cartão -->
        <div class=" border border-success">
            <p class="text-center text-success">Mensagem enviada com sucesso!</p>
        </div>
        <li style="list-style: none; padding-top: 30px;"><h5 style="font-size: 0.9rem;"> <span class="material-icons">
        phone
        </span>&nbsp; +55 51 999728700</h5>
        </li>
        <li style="list-style: none;"><h5 style="font-size: 0.9rem;"> <span class="material-icons">
        mail
        </span>&nbsp; contato@chalesdaguardadoembau.com </h5>
        </li>
    </div>
   
    

  <div id="formulario-localizacao" class="area-localizacao">
      <h3>Localização</h3>
      <p class="text-center">R. Aderbal Ramos da Silva, 2533 - Guarda do Embaú, Palhoça - SC</p>
      <iframe class= "map-mg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2493.254649517713!2d-48.60019037105927!3d-27.90214088094554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9526d70f8ff03e01%3A0x7623ac7bdb913c9b!2sChal%C3%A9s%20da%20Guarda%20do%20Emba%C3%BA!5e0!3m2!1spt-BR!2sbr!4v1657755840562!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      <iframe class= "map-sm" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2493.254649517713!2d-48.60019037105927!3d-27.90214088094554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9526d70f8ff03e01%3A0x7623ac7bdb913c9b!2sChal%C3%A9s%20da%20Guarda%20do%20Emba%C3%BA!5e0!3m2!1spt-BR!2sbr!4v1657756361056!5m2!1spt-BR!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>  
  </section>
    <!-- cartoes -->

    

  <!-- Rodapé -->

  <footer style="background: rgb(224, 224, 224);" class="footer mb-0">
    <div class="logo-footer text-center">
      <img id="logo-footer" src="images/foto-logo-guarda.png" alt="logo" width="25%">
    </div>
    <div class="reserva-host text-center">
      <img id="host" class="mr-5" id="logo-footer" src="images/reserva.png" alt="logo" width="20%">
      <img id="reserva" class="ml-5" id="logo-footer" src="images/superhost.png" alt="logo" width="20%">
    </div>
    <p class="text-center pt-5">R. Aderbal Ramos da Silva, 2533 - Guarda do Embaú, Palhoça - SC, 88139-351</p>
    <p class="text-center ">Instagram @chales_da_guarda_do_embau</p>
    <p class="text-center ">&copy; Todos os direitos reservados - 2022</p>
  </footer>
    
    <script src="js/mobile-navbar.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

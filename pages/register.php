<!DOCTYPE html>
<html lang="pt-br">

<head>

    <?php
        include_once ('header.php');
    ?>

</head>

<style type="text/css">
	* { margin:0; padding:0;}
	#slide { width: 650px; overflow: hidden; height: 300px; margin: 50px auto; box-shadow: 0 0 8px #000;position: relative;}
	#slide img {position: absolute;z-index: 1; display: none; left: 0;}
	#slide p {z-index:2;position: absolute; bottom: 0; left: 0; width: 100%; padding: 10px; font-family: Arial; font-size: 14px; background: rgba(0,0,0,0.7);  color: #fff;}
</style>

<body class = "back-register">

  <nav class="navbar navbar-inverse">
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.php"><i class="fa fa-address-book"></i>  Voltar</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div backgroud-color: "black">
    <figure id="slide">
      <img src="http://localhost:80/perfil_junior/img/mecatronica.jpg" alt="Mecatrônica">
      <img src="http://localhost:80/perfil_junior/img/mecanica.jpg" alt="Mecânica">
      <img src="http://localhost:80/perfil_junior/img/analise.jpg" alt="Análise e Desenvolvimento de Sistemas">
    </figure>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#slide img:eq(0)").addClass("ativo").show();

        var texto = $(".ativo").attr("alt");
        $("#slide").prepend("<p>"+texto+"</p>");

        setInterval(slide,7000);

        function slide(){
          if($(".ativo").next().size()){
            $(".ativo").fadeOut().removeClass("ativo").next().fadeIn().addClass("ativo");
          }else{
            $(".ativo").fadeOut().removeClass("ativo");
            $("#slide img:eq(0)").fadeIn().addClass("ativo");
          }
          
          var texto = $(".ativo").attr("alt");
          $("#slide p").hide().html(texto).delay(500).fadeIn();
        }
      });
    </script>
  </div>

  <div align = "center" class = "fundo-tela">

      <table width = "1200px" border = "3">
        <tbody class = "text-align center">
          <tr class = "text-align center">
            <span class = "titulo">Formação em Técnico em Mecatrônica<br></span>
            <span class = "texto">Unidade Escolar: UNITAU<br>
                   Duração: 2 anos (2011 - 2012)<br>
                   Participa no desenvolvimento de projetos de máquinas, dispositivos e equipamentos de automação e sistemas robotizados. Realiza manutenção, medições e testes e integra processos mecânicos e eletrônicos, aplicando programas de computação. <br></span>
          </tr>
          <br><br><br><br>
          <tr>
            <span class = "titulo">Formação em Técnico em Mecânica<br></span>
            <span class = "texto">Unidade Escolar: SENAI Taubaté<br>
                   Duração: 2 anos (2014 - 2015)<br>
                   O técnico em Mecânica é o profissional habilitado que atua nos serviços de instalação e manutenção de máquinas e equipamentos industriais, coordenando equipes de trabalhos e auxiliando na elaboração de projetos e na execução de desenhos de equipamentos industriais e seus componentes. Prestar serviços nas áreas de usinagem e manutenção de máquinas e equipamentos.<br></span>
          </tr>
          <br><br><br><br>
          <tr>
            <span class = "titulo">Formação em Análise e Desenvolvimento de Sistemas<br></span>
            <span class = "texto">Unidade Escolar: Faculdade de Tecnologia de Taubaté<br>
                   Duração: 3 anos (2016 - 2018)<br>
                   O tecnólogo com esta formação desenvolve, analisa, projeta, implementa e atualiza sistemas de informação. Tem noções de gerenciamento, mas sua especialidade é a criação de sistemas informatizados: programação de computadores e desenvolvimento de softwares para ampliar a capacidade dos recursos do equipamento. <br></span>
          </tr>
          <br><br><br><br>
          <tr align="center">
            <td>
              <p>
                <span class = "subtitulo1">Habilidades Profissionais<br></span>
              </p>
              <span class = "subtitulo1">Durante o curso de Técnico em Mecatrônica, mantive o foco na parte de instrumentação eletrônica e na parte de metrologia, que seria a mais utilizada em uma experiência profissional.<br>
                                         No curso de Técnico em Mecânica, o foco foi a parte de desenhos técnicos por meio de ferramentas como AutoCAD e Inventor.<br>
                                         No Curso superior de Análise e Desenvolvimento de Sistemas, a principal área é a de programação orientada a objetos.</span>
				    </td>
          <td>
            <p>
              <span class = "subtitulo1">Línguas<br></span>
            </p>
            <span class = "subtitulo1">Inglês Intermediário, com facilidade na leitura e escrita<br></span>
          </td>
          <td>
            <p>
              <span class = "subtitulo1">Hobbies<br></span>
            </p>
            <span class = "subtitulo1">Nas horas vagas, pratico instrumentos musicais, como guitarra e bateria, com foco principal na guitarra.<br>Também aproveito para jogar jogos eletrônicos<br></span>
          </td>
              </td>
            </tr>
          </tbody>
        </table>

  </div>

  <?php
    include_once('js.php');   
  ?>

</body>

</html>
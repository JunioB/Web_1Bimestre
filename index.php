<!DOCTYPE html>
<html lang="pt_br">
    
<head>
  
  <?php
    include_once ('pages/header.php');  
  ?>

</head>

<body class="back-page">

  <nav class="navbar navbar-inverse">
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="pages/register.php"><i class="fa fa-address-book"></i> Perfil Profissional</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>


    <div align = "center" class="fundo_tela">
      <section>
        <h1 class="titulo"><br><br><br><br>Junior Breve</h1>
      </section>
      <section>
        <h2 class="texto">
          <span class="roles"></span>
          <span class="role">Estudante de Análise e Desenvolvimento de Sistemas<br><br>
                            Pagina desenvolvida para a aula  de Programação Web, na Faculdade de Tecnologia de Taubaté</span>
          <span class="location">São Paulo, Brasil</span></span>
        </h2>
      </section>
    </div>


    <footer class="main-footer footer-landpage">
    
      <div class="pull-right hidden-xs">
        <div style="text-align: right">
            <strong>Curso de Análise e Desenvolvimento de Sistemas&nbsp; &nbsp; &nbsp;</strong>
            <br>
            Desenvolvido por: Gilmar Breve Junior&nbsp; &nbsp; &nbsp;
        </div>
      </div>
      <strong>
        &nbsp; &nbsp; &nbsp;Fatec Taubaté
      </strong>
      <br>
    
      &nbsp; &nbsp; &nbsp;&copy; <?php echo date ('Y'); ?>. Todos os direitos reservados.
    
    </footer>

    <?php
      include_once('pages/js.php');
    ?>

</body>

</html>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?c=Portada&token=<?php echo @$_GET['token']; ?>">Observatorio Municipal de Dosquebradas</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="?c=Portada&a=Politicas&token=<?php echo @$_GET['token']; ?>">Guia de políticas públicas municipales | </a></li>
        <li><a href="?c=Auth&a=Index&token=<?php echo @$_GET['token']; ?>">Usuarios registrados</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  
  </div><!-- /.container-fluid -->
</nav>
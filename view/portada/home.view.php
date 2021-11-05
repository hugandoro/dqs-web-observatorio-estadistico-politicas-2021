        <!-- Aumentamos en 1 el contador de visitas -->
        <?php
        $archivo = "contador.txt"; //el archivo que contiene en numero
        $f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
        if ($f) {
            $contador = fread($f, filesize($archivo)); //leemos el archivo
            $contador = $contador + 1; //sumamos +1 al contador
            fclose($f);
        }
        $f = fopen($archivo, "w+");
        if ($f) {
            fwrite($f, $contador);
            fclose($f);
        }
        ?>
        <!-- Fin lectura contador visitas-->

        <div class="row">
            <div class="col-lg-1 col-md-0 col-xs-0" align="center"></div>
            <div class="col-lg-5 col-md-12 col-xs-12" align="center">
                <br><br><br><br>
                <hr>
                <a href="?c=Portada&a=Politicas&token=<?php echo @$_GET['token']; ?>"><img src="assets/img/politicas_publicas.png" width="100%"></a>
                <hr>
                <br><br><br><br>
            </div>
            <div class="col-lg-5 col-md-12 col-xs-12" align="center">
                <a href="?c=Portada&a=Politicas&token=<?php echo @$_GET['token']; ?>"><img src="assets/img/portada.png" width="100%"></a>
            </div>
            <div class="col-lg-1 col-md-0 col-xs-0" align="center"></div>
        </div>

        <div class="row">
            <div class="col-lg-1 col-md-0 col-xs-0" align="center"></div>
            <div class="col-lg-10 col-md-12 col-xs-12" align="center">
                <hr>
                <h3>Las políticas públicas son los proyectos que un Estado diseña y gestiona a través de la administración con fines de contribuir al abordaje de las necesidades de la sociedad.</h3>
                <hr>
            </div>
            <div class="col-lg-1 col-md-0 col-xs-0" align="center"></div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12" align="center">
                <div><a href="https://www.funcionpublica.gov.co/documents/35000242/38598841/Resultados_pnga_2021.pdf/42709c0f-ee16-b018-d02c-b2ade919010e?t=1635550747007"><img src="assets/img//banner_alta_gerencia_2021.jpg" width="100%"></a></div><br>
            </div>
        </div>
        <hr>

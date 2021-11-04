<!-- Vista para pantalla de login -->
<div class="row">
    <div class="col-sm-12">
        <h2 align="Center">Historico planillas de asistencia generadas</h2>
    </div>
</div>

<div class="row">
    <div class="col-sm-1"></div>

    <div class="col-sm-10">

        <br><br>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Fecha</th>
                    <th>Evento</th>
                    <th>Lugar</th>
                    <th>Politica impactada</th>
                    <th style="width:20px;"></th>
                </tr>
            </thead>
            <tbody>

                <?php
                // Recorrido de todos los registros para clasificar y mover los contadores segun estado de las PQR
                //echo $this->auth->usuario()->identificacion;
                foreach ($this->modelPlanilla->Listar($this->auth->usuario()->identificacion) as $r) {
                    echo "<tr>";
                    echo "<td>$r->id</td>";
                    echo "<td>$r->fecha</td>";
                    echo "<td>$r->titulo</td>";
                    echo "<td>$r->lugar</td>";

                    if ($r->politica == 1) echo "<td>Equidad de genero</td>";
                    if ($r->politica == 2) echo "<td>Discapacidad</td>";
                    if ($r->politica == 3) echo "<td>Seguridad y convivencia</td>";
                    if ($r->politica == 4) echo "<td>Primera infancia</td>";
                    if ($r->politica == 5) echo "<td>Juventudes</td>";
                    if ($r->politica == 6) echo "<td>Presupuesto participativo</td>";
                    if ($r->politica == 7) echo "<td>Migraciones</td>";
                    if ($r->politica == 8) echo "<td>Adulto mayor</td>";

                    ?>

                    <?php if ($r->estado_planilla == 'Abierta') { ?>
                    <td>
                        <a href='?c=Planillas&a=cargarAsistentes&id=<?php echo $r->id; ?>&token=<?php echo @$_GET['token']; ?>'>
                        <button class="btn btn-success btn-xs" name="btn-filtrar" id="btn-filtrar">Cargar asistentes</button>
                        </a>
                    </td>
                    <?php } ?>

                    <?php if ($r->estado_planilla == 'Cerrada') { ?>
                    <td>
                        <a href='?c=Planillas&a=cargarAsistentes&id=<?php echo $r->id; ?>&token=<?php echo @$_GET['token']; ?>'>
                        <button class="btn btn-info btn-xs" name="btn-filtrar" id="btn-filtrar">Planilla cerrada</button>
                        </a>
                    </td>
                    <?php } ?>

                    
                <?php
                }
                ?>
            </tbody>
        </table>

        <br><br>

    </div>

    <div class="col-sm-1"></div>
</div>
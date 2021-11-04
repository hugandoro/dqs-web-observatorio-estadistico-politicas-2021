<!-- Vista para pantalla de login -->
<div class="row">
    <div class="col-sm-12">
        <h2 align="Center">Nueva planilla de asistencia</h2>
    </div>
</div>

<div class="row">
    <div class="col-sm-2"></div>

    <div class="col-sm-8">
        
    <form method="post" action="?c=Planillas&a=guardarPlanilla&token=<?php echo @$_GET['token']; ?>">
            <div class="form-group">
                <input type="date" class="form-control form-control-lg" style="font-size: 16pt;" name="fechaReunion" placeholder="" required value="" autocomplete="off" />
                <small id="emailHelp" class="form-text text-muted">Fecha de la actividad</small><br><br>

                <input type="text" class="form-control form-control-lg" style="font-size: 16pt;" name="tituloReunion" placeholder="" required value="" autocomplete="off" />
                <small id="emailHelp" class="form-text text-muted">Digite un titulo para la reunion/actividad/evento</small><br><br>

                <input type="text" class="form-control form-control-lg" style="font-size: 16pt;" name="descripcionReunion" placeholder="" required value="" autocomplete="off" />
                <small id="emailHelp" class="form-text text-muted">Digite una breve descripcion de los temas a tratar</small><br><br>

                <input type="text" class="form-control form-control-lg" style="font-size: 16pt;" name="lugarReunion" placeholder="" required value="" autocomplete="off" />
                <small id="emailHelp" class="form-text text-muted">Digite la direccion donde se lleva a cabo la reunion/actividad/evento</small><br><br>

                <select class="form-control form-control-lg" style="font-size: 12pt;" name="politicaImpactada" placeholder="" required value="" autocomplete="off" />
                    <option value="1">Equidad de genero</option>
                    <option value="2">Discapacidad</option>
                    <option value="3">Seguridad y convivencia</option>
                    <option value="4">Primera infancia</option>
                    <option value="5">Juventudes</option>
                    <option value="6">Presupuesto participativo</option>
                    <option value="7">Migraciones</option>
                    <option value="8">Adulto mayor</option>
                </select>                
                <small id="emailHelp" class="form-text text-muted">Seleccione la politica publica en la que se enmarca la actividad</small>

                <br><br>
            </div>
            <br>
            <button type="submit" class="btn btn-success btn-lg btn-block" name="go" class="btn btn-lg btn-default btn-block">Guardar planilla</button>
        </form>

    </div>

    <div class="col-sm-2"></div>
</div>



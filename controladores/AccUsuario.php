
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?=URLBASE?>/controladores/AccActualizaDatosUsuario.php" method="POST">
            <div>
                <!-- 
               DIV Id Camp
                --> 
                <br>
                <div>
                    <div>
                        <label>Id Campeonato</label>

                        <input type="text" name="txtIdCampeonato" placeholder="Ingrese Id">
                    </div>

                </div> 
                <!-- 
                DIV CODIGO
                --> 
                <br>
                <div>
                    <div>
                        <label>codigo</label>

                        <input type="text" name="txtCodigo" placeholder="Ingrese Codigo">
                    </div>

                </div>  

                <!-- 
                DIV NOMBRE
                --> 
                <br>
                <div>
                    <div>
                        <label>Nombre</label>

                        <input type="text" name="txtNombre" placeholder="Ingrese Nombre">
                    </div>

                </div>
                <!-- 
                DIV Fecha INICIO
                --> 
                <br>
                <div>
                    <div>
                        <label>Fecha de inicio</label>

                        <input type="text" name="txtFechaInicio" placeholder="0000-00-00">
                    </div>

                </div>
                <!-- 
                DIV Fecha TERMINO
                --> 
                <br>
                <div>
                    <div>
                        <label>Fecha de Termino</label>

                        <input type="text" name="txtFechaTermino" placeholder="0000-00-00">
                    </div>

                </div>
                <!-- 
                DIV Cantidad de Partidos
                --> 
                <br>
                <div>
                    <div>
                        <label>Cantidad de partidos</label>

                        <input type="number" name="txtCantidadPartidos" placeholder="XX">
                    </div>

                </div>
            </div>
        </form>
    </body>
</html>

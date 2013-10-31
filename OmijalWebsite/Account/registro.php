<?php
    
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Registro OMIJAL 2014</title>
        <link href="Styles/main.css" media="all" type="text/css" rel="stylesheet" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    </head>
    <body>
        <header id="main-header">

            <script type="text/javascript">
            function validaInfo(form){
                form.validate();
                var nombre = $('#nombre').val();
                var apellido = $('#apellido').val();
                var nick = $('#nick').val();
                var email = $('#email').val();
                var remail = $('#remail').val();
                var dia = $('#dia').val();
                var mes = $('#selectMes').val();
                var anio = $('#selectAnio').val();
                var grado = $('#selectGrado').val();
                var tPlayera = $('#selectPlayera').val();
                var calle = $('#calle').val();
                var colonia = $('#colonia').val();
                var ciudad = $('#ciudad').val();
                var cp = $('#cp').val();
                var telefono = $('#telefono').val();
                
                var escuela = $('#escuela').val();
                var nescuela = $('#nescuela').val();
                var ciudadE = $('#ciudadE').val();
                var estadoE = $('#estadoE').val();
                var direccionE = $('#direccionE').val();
                var paginaE = $('#paginaE').val();

                var nombreAsesor = $('#nombreA').val();
                var puesto = document.getElementsByName("puesto");
                var respSI= document.getElementById("SI");
                var respNO = document.getElementById("NO");
                var poster = document.getElementById("poster");
                var internet = document.getElementById("internet");
                var profesor = document.getElementById("profesor");
                var amigo = document.getElementById("amigo");
                var television = document.getElementById("television");
                var radio = document.getElementById("radio");
                var otro = document.getElementById("otro");
                var comentario = $('#comentario').val();

                $.ajax({
                    url : './validaciones.php',
                    type: 'post',
                    dataType: 'text',
                    data: '&nombre='+nombre+'&apellido='+apellido+'&nick='+nick+'&email='+email+'&remail='+remail+'&dia='+dia+'&mes='+mes+'&anio='+anio+'&grado='+grado+'&tPlayera='+tPlayera+'&calle='+calle+'&colonia='+colonia+'&ciudad='+ciudad+'&cp='+cp+'&telefono='+telefono+'&escuela='+escuela+'&nescuela='+nescuela+'&ciudadE='+ciudadE+'&estadoE='+estadoE+'&direccionE='+direccionE+'&paginaE='+paginaE+'&nombreAsesor='+nombreAsesor+'&puesto='+puesto+'&respSI='+respSI+'&respNO='+respNO+'&poster='+poster+'&internet='+internet+'&profesor='+profesor+'&amigo='+amigo+'&television='+television+'&radio='+radio+'&otro='+otro+'&comentario='+comentario,
                    success: function(res){
                    alert(res);
                        alert(res);
                        location.href="registro.php";
                    },error: function(){
                    alert("Error");
                        alert('Error al conectar al servidor...');
                    }           
                });//termina ajax
            }
            </script>
            <section>
            </section>
            <section>
                <div class="main-wraper">
                    <h1>Registro OMIJAL 2014</h1>
                </div>
            </section>
            <style type="text/css">
                div {
                    margin: .4em 0;
                }
                div label {
                    width: 25%;
                    float: left;
                }
            </style>
        </header>
        
        <section id="main-container">
            <section id="slider">
            </section>
            <section id="sub-container">
                <section id="content" class="main-wraper">
                    <div id = "formulario" name = "formulario">
                        <form method = "post" name = "registro" id = "registro">
                            <fieldset>
                                <legend>Registro</legend>
                                <div>
                                    <label for="nombre"><b>*Nombre(s):</b></label> <input type="text" id="nombre" name="nombre" SIZE = "45"/><br />
                                    
                                    
                                    <label for="apellido"><b>*Apellidos:</b></label> <input type="text" id="apellido" name="apellido" SIZE = "45"/><br />
                                   
                                    <label for="nick"><b>*Nick:</b></label> <input type="text" id="nick" name="nick" SIZE = "45"/><br />
                                    <label for="email"><b>*E-MAIL:</b></label> <input type="text" id="email" name="email" SIZE = "45" /><br />
                                    <label for="remail"><b>*Repite E-MAIL:</b></label> <input type="text" id="remail" name="remail" SIZE = "45"/><br />
                                </div>
                                    <label for="nacimiento"><b>*Fecha de nacimiento:</b></label>
                                </br>
                                <div>    
                                    <label for="dia">*Día:</label> <input type="text" id="dia" name="dia" SIZE = "3"/>
                                </div>
                                <div>
                                    <label for="mes">*Mes:</label><select class = "menuSelect" name= "selectMes" id = "selectMes">
                                        <option selected value= 1 >--Enero--</option>
                                        <option value="2">Febrero</option>
                                        <option value="3">Marzo</option>
                                        <option value="4">Abril</option>
                                        <option value="5">Mayo</option>
                                        <option value="6">Junio</option>
                                        <option value="7">Julio</option>
                                        <option value="8">Agosto</option>
                                        <option value="9">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>
                                </div>
                                    <label for="anio">*Año:</label><select class = "menuSelect" required name= "selectAnio" id = "selectAnio">
                                        <option selected value= 1990 >--1990--</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                    </select><br />
                                <div>    
                                    <label for="grado"><b>*Grado Escolar:</b></label><select class = "menuSelect" name= "selectGrado" id = "selectGrado">
                                            <option selected value= 0 >--Seleccione un grado escolar--</option>
                                            <option value="primaria">Primaria</option>
                                            <option value="secundario">Secundaria</option>
                                            <option value="preparatoria">Preparatoria</option>
                                        </select><br />

                                    <label for="tamanioPlayera"><b>*Tamaño playera participante:</b></label><select class = "menuSelect" name= "selectPlayera" id = "selectPlayera">
                                            <option selected value= 0 >--Seleccione un tamaño--</option>
                                            <option value="chica">Chica</option>
                                            <option value="mediana">Mediana</option>
                                            <option value="grande">Grande</option>
                                            <option value="extra">Extra grande</option>
                                        </select><br />
                                    <label for="calle"><b>*Calle y Num:</b></label> <input type="text" id="calle" name="calle" SIZE = "45"/><br />
                                    <label for="colonia"><b>*Colonia:</b></label> <input type="text" id="colonia" name="colonia" SIZE = "45"/><br />
                                    <label for="ciudad"><b>*Ciudad:</b></label> <input type="text" id="ciudad" name="ciudad" SIZE = "45"/><br />
                                    <label for="cp"><b>*Código Postal:</b></label> <input type="text" id="cp" name="cp" SIZE = "5"/><br />
                                    <label for="telefono"><b>*Télefono(lada)num:</b></label> <input type="text" id="telefono" name="telefono" SIZE = "45"/><br />

                                    <br/>
                                    <label for="escuela"><b>*Escuela:</b></label> <input type="text" id="escuela" name="escuela" SIZE = "45"/><br />
                                    <label for="nescuela"><b>*Nombre Escuela:</b></label> <input type="text" id="nescuela" name="nescuela" SIZE = "45"/><br />
                                    <label for="ciudad"><b>*Ciudad:</b></label> <input type="text" id="ciudadE" name="ciudadE" SIZE = "45"/><br />
                                    <label for="estado"><b>*Estado:</b></label> <input type="text" id="estadoE" name="estadoE" SIZE = "45"/><br />
                                    <label for="direccion"><b>Dirección:</b></label> <input type="text" id="direccionE" name="direccionE" SIZE = "45"/><br />
                                    <label for="pagina"><b>Página WEB:</b></label> <input type="text" id="paginaE" name="paginaE" SIZE = "45"/><br />

                                    <br/>
                                    <label for="nombreA"><b>*Nombre:</b></label> <input type="text" id="nombreA" name="nombreA" SIZE = "45"/><br />
                                </div>
                                <div>
                                    <label for="nombreA"><b>*Puesto:</b></label></br>
                                </div>
                                <div>
                                    <label for="profesor">Profesor:</label><input type="radio" id="profesor" name="profesor" value = "Profesor" />
                                </div>
                                <div>
                                    <label for="coordinador">Coordinador:</label><input type="radio" id="puesto" name="coordinador" value = "Coordinador" />
                                </div>
                                <div>
                                    <label for="directivo">Directivo:</label><input type="radio" id="puesto" name="directivo" value = "Directivo" />
                                </div>
                                <div>
                                    <label for="familiar">Familiar:</label><input type="radio" id="puesto" name="familiar" value = "Familiar" />
                                </div>
                                <div>
                                    <label for="otro">Otro:</label><input type="radio" id="otro" name="puesto" value = "Otro" />
                                </div>
                                <div>
                                    </br>
                                    </br>
                                    <label for="ka"><b>*Sabes programar Karel:</b></label> 
                                </div>
                                </br>
                                <div>
                                    <label for="si">Si</label><input type="radio" id="rsi" name="rsi" value = "SI" />
                                </div>
                                <div>
                                    <label for="no">No</label><input type="radio" id="rno" name="rno" value = "NO" /><br/>
                                </div>
                                <div>
                                    <label for="pregunta"><b>¿Cómo te enteraste de OMIJAL?:</b></label> <br/>
                                    </br><input type="checkbox" id="poster" name="poster" value = "Poster" /><label for = "poster">Poster</label><br/>
                                    <input type="checkbox" id="internet" name="internet" value = "Internet" /><label for = "internet">Internet</label><br/>
                                    <input type="checkbox" id="profesor" name="profesor" value = "Profesor" /><label for = "profesor">Profesor</label><br/>
                                    <input type="checkbox" id="amigo" name="amigo" value = "Amigo" /><label for = "amigo">Amigo</label><br/>
                                    <input type="checkbox" id="television" name="television" value = "television" /><label for = "television">Televisión</label><br/><input type="checkbox" id="radio" name="radio" value = "radio" /><label for = "radio">Radio</label><br/>
                                    <input type="checkbox" id="periodico" name="periodico" value = "periodico" /><label for = "periodico">Periódico</label><br/>
                                    <input type="checkbox" id="otro" name="otro" value = "otro" /><label for = "otro">Otro</label><br/>
                                    <label for="comentario"><b>Comentario:</b></label><br/><textarea id = "comentario" name="comentario" cols="50" rows="5"></textarea><br/>
                                    <input type="checkbox" id="deacuerdo" name="deacuerdo" value = "Deacuerdo" /><label for = "deacuerdo"><b>Acepto los terminos y condiciones que rigen a OMIJAL 2013</b></label><br/>
                                </div>
                            </fieldset>
                        </form>
                        <input onClick="validaInfo(this); return false;" type="submit" name="btnSend" value="Enviar" class=""/>
                    </div><!--menu registro-->
                </section>
            </section>

        </section>
        <section id="ribbon">
            <section class="main-wraper">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat dolor augue, condimentum ultrices leo imperdiet vel. Etiam euismod scelerisque quam eu elementum. Pellentesque quis hendrerit sem, a dapibus ligula. Nam scelerisque eget nulla id viverra. Aenean in sodales velit, nec rhoncus eros. Nam non lacinia eros, eget placerat urna. Mauris in posuere felis, ut vestibulum quam. Donec lacus libero, scelerisque id tortor ac, lacinia porta metus.</p>
            </section>
        </section>
        <footer>

        </footer>
        <!--scripts-->
        <script src="/Scripts/main.js" type="text/javascript"></script>
    </body>
</html>

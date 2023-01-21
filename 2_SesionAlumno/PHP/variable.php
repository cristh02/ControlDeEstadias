    <HTML>
        <head>
            <link rel="stylesheet" type="text/css" href="docPDF.css">
            <img class="fond2" src="Imagenes/sev.jpg">
            <img class="fondo1" src="Imagenes/utsv.png">
            <img class="fondo3" src="Imagenes/images.jpeg">
            <TITLE>ESTADIA</TITLE>
		</head>
        <body class="doc">
			<center><h1 class="ache">FORMATO DE SOLICITUD DE ESTADIAS</h1><h1 id="segundo" class="ache">UTSV-DVI-FO-02</h1></center>
                <p class="fecha">Nanchital, ver. a</p><input type="date" name="fecha" > </p>
                    <a class="dro">DRA.SILVIA ELENA LÒPEZ VALLEJO </a><br>
                    <a class="dro">DIRECTORA DE VINCULACIÓN </a><br>
                    <a class="dro">PRESENTE.-</a>
                <p>Solicito su apoyo para que se pueda elaborar la carta de presentación para mis Estadias. Los datos son los siguientes:</p>
                <p>
	            <div id="contenedor">
                        <fieldset>
						<legend> DATOS DE LA EMPRESA</legend>
						<br>
                        <label for="nombre">Nombre de la Empresa:</label>
                        <input type="text" class="Empresa" name="nombre" required>  
                        <p>
							<table class="check">
								<tr>
								<th><label class="selec" >GIRO:</label></th>
								<th><label class="selec" >TAMAÑO:</label></th>
								<th><label class="selec" >SECTOR:</label></th>
</tr>
									<th>
                        <div class="seccion" id="seleccion 1">
                            <input type="checkbox" value="1" id="giro-1-1" name="check" />Industrial<br/>
                            <input type="checkbox" value="2" id="giro-1-2" name="check" />Comercial<br/>
                            <input type="checkbox" value="3" id="giro-1-3" name="check" />Servicios<br/>
						</div></th>
						<th>	
                        <div class="seccion" id="seleccion 2">
                            <input type="checkbox" value="1" id="tam-2-1" name="check" />Micro<br/>
                            <input type="checkbox" value="2" id="tam-2-2" name="check" />Pequeña<br/>
                            <input type="checkbox" value="3" id="tam-2-3" name="check" />Mediana<br/>
                            <input type="checkbox" value="4" id="tam-2-4" name="check" />Grande <br/>
						</div></th>
						<th>
                        <div class="seccion" id="seleccion 3">
                            <input type="checkbox" value="1" id="sect-3-1" name="check" />Privado<br/>
                            <input type="checkbox" value="2" id="sect-3-2" name="check" />Publico<br/>
                            <input type="checkbox" value="3" id="tam-3-3" name="check" />Social<br/> 
						</div></th>
						<table>
                        <br>
                        <p><label for="Dirigido"> Dirigido a: </label> <input type="text" name="Dirigido" size=50 required>
                        <p> 
                        <label for="Cargo"> Cargo:</label>
                        <input type="text" name="Cargo" size=30 required>
                        <p>
                        <label for="Direc"> Dirección: </label>
                        <input type="text" name="Direc" size=100>
                        <br>
                        <p><label for="Municipio"> Municipio:</label> <input type="text" name="Municipio" size=40>
                        <p> <label> E-mail:</label>  <input type="email" name="correo"  size=30 required>
                        <p>
                        <p><label>Telefono:</label> <input type="tel" name="telefono">
                        <p>
                        <label for="RFC">RFC:</label>  
                        <input type="text" name="CURP" required onkeyup="this.value=this.value.toUpperCase();">
                        <br>
                        <br>
                        <input type="radio" name="boton" value="local">Local &nbsp; <input type="radio" name="boton" value="foranea">Foranea &nbsp;
                        <label for="Estado"> ESTADO:</label> 
                        <input type="text" name="Estado" size=30><p>
                        </fieldset>
                        <p>

                        <fieldset>
                        <legend> DATOS DEL ALUMNO</legend>
                        <label for="Nombre">Nombre del Alumno:</label>
                        <input type="text" name="Nombre" size=30 required >
                        <p> 
                        <label>Carrera:</label>
                        <select name="menu">
                            <option value="0">
                            <option>TSU Mantenimiento Área Industrial</option>
                                <option>ING.Mantenimiento Industrial</option>
                                    <option>TSU Mecatrónica	Área Automatización</option>
                                <option>ING. Mecatrónica</option>
                                    <option>TSU Tecnologías De la Información Área DSM</option>
                                <option>ING. Tecnologías de la Información</option>
                                    <option>TSU Química Área Industrial</option>
                                <option>ING. Química</option>
                                    <option>TSU Contaduría</option>
                                    <option>TSU Administración Área Capital Humano</option>
                                    <option>TSU Mecánica Área Automotriz</option>
                                <option>ING. Metal Mecánica</option>
                                    <option>TSU Energías Renovables</option>		
                                </select> 
                                <p> <label for="Grup"> Grupo:</label>  <input type="text" name="Grup" size=10 required> 
                                <p>
                               <label for="Matricula">Matricula </label>
                               <input type="text" name="Matricula" size=20 required>  <p> 
                               <label for="Periodo"> Periodo de Estadia:  
                               <input type="text" name="Periodo" size=30 required>
                               <p>
                               <p>E-mail: <input type="email" name="correo" size=40> 
                               <p> Celular: <input type="tel" name="telefono">
                               <p>
                               <label> Municipio: </label>
                               <select name="menu">
                                    <option value="0">
                                    <option> Acayucan</option>
                                    <option> Angel R. Cabada</option>
                                    <option> Coatzacoalcos</option>
                                    <option> Cosoleacaque</option>
                                    <option> Cuichapa</option>
                                    <option>Chinameca</option>
                                    <option> Las Choapas</option>
                                    <option> Emiliano Zapata</option>
                                    <option> Hidalgotitlán</option>
                                    <option> Ignacio de la Llave</option>
                                    <option> Ixhuatlán del Sureste</option>
                                    <option> Jáltipan </option>
                                    <option> Jesús Carranza</option>
                                    <option> Minatitlán</option>
                                    <option> Moloacan</option>
                                    <option> Agua Dulce</option>
                                    <option> Mapachapa- Minatitlán</option>
                                    <option> Villa Allende</option>
                                    <option> Hueyapan de Ocampo</option>
                                    <option> Las Barrillas</option>
                                    <option> Zapopan</option>
                                </select> 
                                &nbsp; <label for="CURP">CURP</label> 
                                <input type="text" name="CURP" required onkeyup="this.value=this.value.toUpperCase();">
                                </fieldset>
                                <p>
                                <p>
                    </form>
				</div>
				<br>
				<table class="firmas" border="1">
					<tr>
						<th> ____________________ </th>
						<th> ____________________ </th>
					</tr>
					<tr>
						<td>FIRMA DEL SOLICITANTE</td>
						<td>RECIBIDO POR DIRECCIÓN <BR> DE VINCULACIÓN</td>
					</tr>
				</table>
				      <br>
                    <p> Al firmar la presente solicitud, acepto plena y conscientemente mi interés y obligación por realizar mi Estadía en la empresa arriba 
                        señalada, entendido que, en caso contrario, podre afectuar un solo cambio si surgiese un problema ajeno a mis circunstancias, previa 
						autorización. Así mismo estoy conciente y en acuerdo a lo que indica el Art.75 de nuestro reglamento escolar vigente.
					</p>
 </body>
</html>
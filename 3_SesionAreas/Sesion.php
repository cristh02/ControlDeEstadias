<div class="login-form">
<center><h2>Iniciar Sesion</h2><center>
<from method="post">
<label>Email</label>
<input type="text" name="txt_email" placeholder="Ingrese email"/>
</div>
<div>
<label>password</label>
<input type="password" name="txt_Password" palceholder="Ingrese password"/>
</div>
<div>
<label>Seleccionar rol</label>
<select classs="from-control" name="txt_role">
<option value="" selected="selected"> - Seleccionar rol - </option>
<option value="Admin">Administrador</option>
<option value="Otro">OtraArie</option>
<option value="Alumno">Alumno</option>
</select>
</div>
<div>
<input type="submit" name="btn_login" value="Iniciar Sesion">
¿No tienes unacuenta? <a href ="registro.php"></a>
</div>
</from>
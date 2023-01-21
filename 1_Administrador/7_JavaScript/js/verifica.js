function DameAjxInst() 
{
	var InstAjax=false;
    try 
    { 
		InstAjax =new ActiveXObject("Msxml2.XMLHTTP"); 		
	}
    catch(e) 
    {
		try 
		{ 
			InstAjax =new ActiveXObject("Microsoft.XMLHTTP"); 
		}
        catch(E) 
        {
			if (!InstAjax && typeof XMLHttpRequest!='undefined')
               InstAjax =new XMLHttpRequest();
		}
    }
	return InstAjax;;
}
  
function ValidaUsuario(usuario,password) 
{
	var ajax= DameAjxInst ();
    var mensaje ="invalido";
    ajax.open("GET", "valida.php?clave="+usuario + "&password=" + password, false);
    ajax.onreadystatechange=function() 
    {
		if (ajax.readyState==4)
			mensaje=ajax.responseText;
    }
    ajax.send(null);
    alert("El usuario es: " + mensaje);
    return null;
}

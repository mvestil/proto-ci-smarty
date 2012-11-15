{include file="header.tpl"}

<h3>Inicio de sesión avanzado:</h3><br><br>

<form method=post>
<input type=hidden name=a value="security">
<input type=hidden name=action value="save">
Cambiar sensibilidad de detectar dirección de IP<br>
<input type=radio name=ip value=disabled {if $security.detect_ip == 'disabled'}checked{/if}>Desabilitado<br>
<input type=radio name=ip value=medium {if $security.detect_ip == 'medium'}checked{/if}>Medio<br>
<input type=radio name=ip value=high {if $security.detect_ip == 'high'}checked{/if}>Alto<br><br>

Detectar cambios en el buscador<br>
<input type=radio name=browser value=disabled {if $security.detect_browser == 'disabled'}checked{/if}>Desabilitado<br>
<input type=radio name=browser value=enabled {if $security.detect_browser == 'enabled'}checked{/if}>Habilitado<br><br>
<input type=submit value="Guardar" class=sbmt>
</form>


{include file="footer.tpl"}

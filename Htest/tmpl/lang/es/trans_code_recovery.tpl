{include file="header.tpl"}



<h3>Recuperación de Código de transacción:</h3><br>
{if $say == 'sent'}
Su código de transacción ha sido enviado a usted. Por favor, consulte su e-mail<br><br>
{/if}

{if $error == 'wrong_secret_answer'}
Respuesta secreta erronea<br><br>
{/if}


Si has olvidado tu contraseña alternativa, puede recuperarla aquí. <br>
<br>

Introduzca su "respuesta secreta" abajo y presione el boton "recuperar".<br><br>

<form method=post>
<input type=hidden name=a value="trans_code_recovery">
<input type=hidden name=action value=recovery>
<input type=text name="sec_answer" value="" class=inpts size=50><br><br>

<input type=submit value="Recover" class=sbmt>
</form>


{include file="footer.tpl"}

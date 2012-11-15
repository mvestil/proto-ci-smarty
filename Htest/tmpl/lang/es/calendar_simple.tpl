<html>
<head>
<title>Calculator</title>
<link href="style.css" rel="stylesheet" type="text/css">
{if $error eq ''}
{literal}
<script>
var percents = new Array;
{/literal}
{section name=p loop=$plans}
percents[{$plans[p].i}] = new Array({$plans[p].min_deposit}, {$plans[p].max_deposit}, {$plans[p].percent});
{/section}
{literal}
var maxdays = {/literal}{$type.q_days}{literal};
var Amount = {/literal}{$type.min_deposit}{literal};
var returnprofit = {/literal}{$type.return_profit}{literal};

function CalculatePercent()
{
  Percent = 0;
  var LastPercent = percents[0][2];
  for (var i = 0; i < percents.length; i++)
  {
    if (Amount < percents[i][0])
    {
      Percent = LastPercent;
    }
    else
    {
      LastPercent = percents[i][2];
      if ((Amount >= percents[i][0]) && ((Amount <= percents[i][1]) || (percents[i][1] == 0)))
      {
        Percent = percents[i][2];
      }
    }
  }
}

function CalculateProfit() 
{
  Amount = new Number(document.data.amount.value);
  CalculatePercent();

  if (Percent == 0)
  {
    if (Amount < percents[0][0])
    {
      alert('Provided amount is too small. ' + percents[0][0] + ' es mínima!');
      document.data.amount.value = percents[0][0];
      CalculateProfit();
    }
    else if (percents[percents.length-1][1] != 0 && Amount > percents[percents.length-1][1])
    {
      alert('Provided amount is too big. ' + percents[percents.length-1][1] + ' es maxima!');
      document.data.amount.value = percents[percents.length-1][1];
      CalculateProfit();
    }
    else
    {
      alert('Importe previsto no se ajustan a cualquier rango');
    }
    return;
  }

  document.getElementById('percent').childNodes[0].data = Percent + '%';

  Profit = Math.round(Amount * Percent) / 100;
  if (returnprofit)
  {
    Profit += Amount;
  }
  document.getElementById('profit').childNodes[0].data = Profit;
}
function Spend()
{
  if (opener && opener.spendform && opener.spendform.amount)
  {
    opener.spendform.amount.value = document.data.amount.value;
    window.close();
  }
  else
  {
    alert('Por favor, vuela a la pagina para hacer el deposito!');
  }
}
</script>
{/literal}
{/if}
</head>
<body>
{if $error}
<center>
{if $error eq 'type_not_found'}
Programa no encontrado.
{/if}
</center>
{else}
<form name="data" onsubmit="CalculateProfit(); return false;">
<table>
<tr>
  <td>Desde:</td><td><b>{$type.from_date}</b></td>
</tr>
<tr>
  <td>Hasta:</td><td><b>{$type.to_date}</b></td>
</tr>
</tr>
  <td>Cantidad:</td><td nowrap>{$currency_sign} <input type="text" name="amount" value="{$type.min_deposit}" size=5 class=inpts> <input type="button" value="Calcular" onclick="CalculateProfit()" class=sbmt></td>
</tr>
<tr>
  <td>Porcentaje:</td><td><b><span id="percent">N/A</span></b></td>
</tr>
<tr>
  <td>Ganacia {$currency_sign}:</td><td><b><span id="profit">N/A</span></b></td>
</tr>
{if $userinfo.logged}
<tr>
  <td><input type="button" value="Gastar" onclick="Spend();" class=sbmt></td>
</tr>
{/if}
</table>
<script>
CalculatePercent();
CalculateProfit();
</script>
</form>
{/if}
</body>
</html>
<html>
<head>
<title>Calculadora</title>
<link href="style.css" rel="stylesheet" type="text/css"></head><body>
{literal}
<script>
var colorBlank       = '#FFFFFF';
var colorActive      = '#FFFFFF';
var colorActiveHover = '#FFD39D';
var colorPast        = '#E2E2E2';
var colorToday       = '#FEAE68';
var colorToDate      = '#FFEA00';
var colorPayDate     = '#FBF7CC';

var CurDate = new Date();
CurDate = new Date(CurDate.getFullYear(), CurDate.getMonth(), CurDate.getDate());
var ToDate = new Date(CurDate.getFullYear(), CurDate.getMonth(), CurDate.getDate());
var WantDate = new Date(CurDate.getFullYear(), CurDate.getMonth(), CurDate.getDate());
var Percent = 0;
var Amount = 10;
var Diff = 0;
var FirstDay;
var LastDay;
var lastrow = '';

var percents = new Array;
{/literal}
{section name=p loop=$plans}
percents[{$plans[p].i}] = new Array({$plans[p].min_deposit}, {$plans[p].max_deposit}, {$plans[p].percent});
{/section}
{literal}
paymentperiod = '{/literal}{$type.period}{literal}'; // 'd' - Diario, 'w' - Semanal, 'bw' - Cada Semana, 'm' - Mensual, 'y' - Anual
var maxdays = {/literal}{$type.q_days+$type.delay}{literal};
var returnprofit = {/literal}{$type.return_profit}{literal};
var compound = {/literal}{$type.use_compound}{literal};
var delay = {/literal}{$type.delay}{literal};

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

function CalculateDiff(row)
{
  var ToDate;
  var Diff;

  if (row)
  {
    var obj = document.getElementById(row);
    tToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);

    if (maxdays > 0 && Math.ceil((tToDate.getTime() - CurDate.getTime())/(24*60*60*1000)) > maxdays)
    {
      return new Array(tToDate, -1);
    }

    if (paymentperiod == 'w')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
      Diff = Math.ceil((ToDate.getTime() - CurDate.getTime())/(24*60*60*1000) - delay);
      Diff = Math.floor(Diff / 7) * 7;
      ToDate = new Date(CurDate.getTime() + (Diff+delay) * (24*60*60*1000) + 2*60*60*1000);
      ToDate = new Date(ToDate.getFullYear(), ToDate.getMonth(), ToDate.getDate());

      Diff = Math.ceil((ToDate.getTime() - CurDate.getTime())/(24*60*60*1000) - delay) / 7;
    }
    else if (paymentperiod == 'w-d')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
      wd = ToDate.getDay();
      if (wd == 6)
      {
        ToDate = new Date(ToDate.getTime() - (24*60*60*1000) + 2*60*60*1000);
      }
      if (wd == 0)
      {
        ToDate = new Date(ToDate.getTime() - 2 * (24*60*60*1000) + 2*60*60*1000);
      }
      Diff = Math.floor((ToDate.getTime() - CurDate.getTime())/(24*60*60*1000)-delay);
      Weeks = Math.floor(Diff / 7);
      if (ToDate.getDay() < CurDate.getDay()+delay % 7) Weeks++;
      Diff -= Weeks * 2;

      ToDate = new Date(ToDate.getFullYear(), ToDate.getMonth(), ToDate.getDate());
    }
    else if (paymentperiod == 'b-w')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
      Diff = Math.ceil((ToDate.getTime() - CurDate.getTime())/(24*60*60*1000) - delay);
      Diff = Math.floor(Diff / 14) * 14;
      ToDate = new Date(CurDate.getTime() + (Diff+delay) * (24*60*60*1000) + 2*60*60*1000);
      ToDate = new Date(ToDate.getFullYear(), ToDate.getMonth(), ToDate.getDate());

      Diff = Math.ceil((ToDate.getTime() - CurDate.getTime())/(24*60*60*1000) - delay) / 14;
    }
    else if (paymentperiod == 'm')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
      tLastDay = GetDaysInMonth(ToDate.getMonth(), ToDate.getFullYear()); 
      var day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      var month = ToDate.getMonth()
      if (ToDate.getDate() < day)
      {
        month--;
        tLastDay = GetDaysInMonth(month, document.data.years.value); 
        day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      }
      ToDate = new Date(document.data.years.value, month, day);

      Diff = (ToDate.getFullYear() - CurDate.getFullYear()) * 12 + ToDate.getMonth() - CurDate.getMonth();
    }
    else if (paymentperiod == '2m')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);

      ToDateMonth = ToDate.getMonth();
      tLastDay = GetDaysInMonth(ToDate.getMonth(), ToDate.getFullYear()); 
      if (ToDate.getDate() < CurDate.getDate() && ToDate.getDate() < tLastDay)
      {
        ToDateMonth -= 1;
      }
      var cmonths = Math.floor(((ToDate.getFullYear() - CurDate.getFullYear()) * 12 + ToDateMonth - CurDate.getMonth()) / 2) * 2;

      var cyears = Math.floor(cmonths / 12);
      cmonths -= cyears * 12;
      var month = CurDate.getMonth() + cmonths;
      if (month > 11)
      {
        month -= 12;
        cyears++;
      }

      ToDate = new Date(cyears + CurDate.getFullYear(), month, ToDate.getDate());

      tLastDay = GetDaysInMonth(ToDate.getMonth(), ToDate.getFullYear()); 
      var day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      if (ToDate.getDate() < day)
      {
        tLastDay = GetDaysInMonth(month, document.data.years.value); 
        day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      }
      ToDate = new Date(cyears + CurDate.getFullYear(), month, day);

      Diff = (ToDate.getFullYear() - CurDate.getFullYear()) * 6 + Math.floor((ToDate.getMonth() - CurDate.getMonth())/2);
    }
    else if (paymentperiod == '3m')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);

      ToDateMonth = ToDate.getMonth();
      tLastDay = GetDaysInMonth(ToDate.getMonth(), ToDate.getFullYear()); 
      if (ToDate.getDate() < CurDate.getDate() && ToDate.getDate() < tLastDay)
      {
        ToDateMonth -= 1;
      }
      var cmonths = Math.floor(((ToDate.getFullYear() - CurDate.getFullYear()) * 12 + ToDateMonth - CurDate.getMonth()) / 3) * 3;

      var cyears = Math.floor(cmonths / 12);
      cmonths -= cyears * 12;
      var month = CurDate.getMonth() + cmonths;
      if (month > 11)
      {
        month -= 12;
        cyears++;
      }

      ToDate = new Date(cyears + CurDate.getFullYear(), month, ToDate.getDate());

      tLastDay = GetDaysInMonth(ToDate.getMonth(), ToDate.getFullYear()); 
      var day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      if (ToDate.getDate() < day)
      {
        tLastDay = GetDaysInMonth(month, document.data.years.value); 
        day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      }
      ToDate = new Date(cyears + CurDate.getFullYear(), month, day);

      Diff = (ToDate.getFullYear() - CurDate.getFullYear()) * 4 + Math.floor((ToDate.getMonth() - CurDate.getMonth())/3);
    }
    else if (paymentperiod == '6m')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);

      ToDateMonth = ToDate.getMonth();
      tLastDay = GetDaysInMonth(ToDate.getMonth(), ToDate.getFullYear()); 
      if (ToDate.getDate() < CurDate.getDate() && ToDate.getDate() < tLastDay)
      {
        ToDateMonth -= 1;
      }
      var cmonths = Math.floor(((ToDate.getFullYear() - CurDate.getFullYear()) * 12 + ToDateMonth - CurDate.getMonth()) / 6) * 6;

      var cyears = Math.floor(cmonths / 12);
      cmonths -= cyears * 12;
      var month = CurDate.getMonth() + cmonths;
      if (month > 11)
      {
        month -= 12;
        cyears++;
      }

      ToDate = new Date(cyears + CurDate.getFullYear(), month, ToDate.getDate());

      tLastDay = GetDaysInMonth(ToDate.getMonth(), ToDate.getFullYear()); 
      var day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      if (ToDate.getDate() < day)
      {
        tLastDay = GetDaysInMonth(month, document.data.years.value); 
        day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      }
      ToDate = new Date(cyears + CurDate.getFullYear(), month, day);

      Diff = (ToDate.getFullYear() - CurDate.getFullYear()) * 2 + Math.floor((ToDate.getMonth() - CurDate.getMonth())/6);
    }
    else if (paymentperiod == 'y')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
      year = (ToDate.getMonth() < CurDate.getMonth()) ? document.data.years.value - 1 : document.data.years.value;

      ToDate = new Date(year, document.data.monthes.value-1, obj.childNodes[0].data);
      tLastDay = GetDaysInMonth(CurDate.getMonth(), year); 
      day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      year = (CurDate.getMonth() == ToDate.getMonth() && ToDate.getDate() < day) ? document.data.years.value - 1 : document.data.years.value;
      month = CurDate.getMonth();
      if (ToDate.getDate() < day)
      {
        tLastDay = GetDaysInMonth(month, year); 
        day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      }
      ToDate = new Date(year, month, day);

      Diff = (ToDate.getFullYear() - CurDate.getFullYear());
    }
    else if (paymentperiod == 'h')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
      Diff = Math.ceil((ToDate.getTime() - CurDate.getTime())/(24*60*60*1000)-delay)*24;
    }
    else
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
      Diff = Math.ceil((ToDate.getTime() - CurDate.getTime())/(24*60*60*1000)-delay);
    }

    if (ToDate.getTime() - CurDate.getTime() <= delay*24*60*60*1000)
    {
      ToDate = CurDate;
      Diff = 0;
    }

  }

  if (ToDate)
  {
    return new Array(ToDate, Diff);
  }
}

function CalculateProfit(row) 
{
  if (row)
  {
    obj = document.getElementById(row);
    if (!obj || !obj.childNodes[0].data) return;
    WantDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
  }

  var t = CalculateDiff(row);
  if (t)
  {
    ToDate = t[0];
    Diff = t[1];
  }

  if (Diff < 0)
  {
    return;
  }

  if (row)
  {
    if (lastrow)
    {
      obj = document.getElementById(lastrow);

      if (obj)
      {
        tDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
        tDiff = Math.ceil((tDate.getTime() - CurDate.getTime())/(24*60*60*1000));
        if (tDiff > 0)
        {
          var t = CalculateDiff(lastrow);
          tToDate = t[0];
          tDiff = t[1];
          if (tToDate.getTime() == tDate.getTime())
          {
            obj.style.backgroundColor = colorPayDate;
          }
          else
          {
            obj.style.backgroundColor = colorActive;
          }
        }
      }
    }
    if (ToDate.getTime() != CurDate.getTime() && ToDate.getMonth()+1 == document.data.monthes.value && ToDate.getFullYear() == document.data.years.value)
    {
      point = FirstDay - 1 + ToDate.getDate();
      lastrow = "td"+point;

      obj = document.getElementById("td"+point);
      obj.style.backgroundColor = colorToDate;
      obj.alt = colorToDate;
    }
  }

  document.getElementById('to').childNodes[0].data = WantDate.getMonth()+1 + '/' + WantDate.getDate() + '/' + WantDate.getFullYear();
  document.getElementById('days').childNodes[0].data = Diff;

  Amount = new Number(document.data.amount.value);
  CalculatePercent();

  if (Percent == 0)
  {
    if (Amount < percents[0][0])
    {
      alert('The provided amount is too small. ' + percents[0][0] + ' is the minimum!');
      document.data.amount.value = percents[0][0];
      CalculateProfit(row);
    }
    else if (percents[percents.length-1][1] != 0 && Amount > percents[percents.length-1][1])
    {
      alert('The provided amount is too large. ' + percents[percents.length-1][1] + ' is the maximum!');
      document.data.amount.value = percents[percents.length-1][1];
      CalculateProfit(row);
    }
    else
    {
      alert('The provided amount does not meet any range.');
    }
    return;
  }

  document.getElementById('percent').childNodes[0].data = Percent + '%';
  var Profit = 0;

  if (compound)
  {
    var CompoundPercent = new Number(document.data.compounding_percent.value);
    CompoundPercent = (CompoundPercent / 100);
    Percent = Percent / 100;
    if ((CompoundPercent > 1) || (CompoundPercent < 0))
    {
      alert('the Compounding Percent should be from 0 to 100.');
      return;
    }
    Deposit = Math.round(Amount * Math.pow((1 + Percent * CompoundPercent), Diff) * 10000) / 10000;

    for (i = 1; i <= Diff; i++)
    {
      Profit += Amount * Math.pow(1 + Percent * CompoundPercent, i-1);
    }

    Profit = Math.round(Profit * Percent * (1 - CompoundPercent) * 100) / 100;
  }
  else
  {
    Deposit = Amount;
    Profit = Math.round(Amount * Percent * Diff) / 100;
  }

  if (returnprofit)
  {
    day = ToDate.getDate();
    if (row)
    {
      obj = document.getElementById(row);
      day = obj.childNodes[0].data;
    }

    tDiff = Math.ceil((WantDate.getTime() - CurDate.getTime())/(24*60*60*1000));
    if (tDiff == maxdays)
    {
      Profit += Deposit;
      Deposit = 0;
    }
  }
  Profit = Math.round(Profit * 100) / 100;

  document.getElementById('deposit').childNodes[0].data = Deposit;
  document.getElementById('profit').childNodes[0].data = Profit;
}

function GetDaysInMonth(Month, Year)
{
  var PrevDate = new Date(Year, Month+1, 0);
  return PrevDate.getDate();
}

function tdUpdateBg(row, flag) 
{
  obj = document.getElementById(row);

  tToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
  tDiff = Math.ceil((tToDate.getTime() - CurDate.getTime())/(24*60*60*1000));

  if (maxdays > 0 && Math.ceil((tToDate.getTime() - CurDate.getTime())/(24*60*60*1000)) > maxdays)
  {
    tDiff = -1;
  }

  if (obj.childNodes[0].data && tDiff > 0)
  {
    tDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
    var t = CalculateDiff(row);
    tToDate = t[0];
    tDiff = t[1];

    if (flag)
    {
      obj.alt = obj.style.backgroundColor;
      obj.style.backgroundColor = colorActiveHover;
    }
    else
    {
      if (tToDate.getTime() == tDate.getTime() && tDate.getTime() != ToDate.getTime())
      {
        obj.style.backgroundColor = colorPayDate;
      }
      else
      {
        obj.style.backgroundColor = obj.alt;
      }
    }
  }

}

function PrevMonth()
{
  var Month = document.data.monthes.selectedIndex - 1;
  var Year = document.data.years.value;
  if (Month < 0)
  {
    Month = 11;
    Year--;
  }
  if (Year - CurDate.getFullYear() < 0)
  {
    Month = CurDate.getMonth();
    Year = CurDate.getFullYear();
  }

  document.data.monthes.options[Month].selected = true;
  document.data.years.options[Year - CurDate.getFullYear()].selected = true;
  InitCalendar(Month+1, Year);
}
function NextMonth()
{
  var Month = document.data.monthes.selectedIndex + 1;
  var Year = document.data.years.value;
  if (Month > 11)
  {
    Month = 0;
    Year++;
  }
  if (Year - CurDate.getFullYear() > 5)
  {
    Month = CurDate.getMonth();
    Year = CurDate.getFullYear();
  }

  document.data.monthes.options[Month].selected = true;
  document.data.years.options[Year - CurDate.getFullYear()].selected = true;
  InitCalendar(Month+1, Year);
}

function InitCalendar(Month, Year)
{
  Month--;
  var TDate = new Date(Year, Month, 1);

  FirstDay = TDate.getDay();
  FirstDay++;
  if (FirstDay == 8) FirstDay = 1;
  LastDay = GetDaysInMonth(Month, Year);
  var d, w, obj;

  var aMonth = new Array();
  aMonth[0] = new Array(5);
  aMonth[1] = new Array(5);
  aMonth[2] = new Array(5);
  aMonth[3] = new Array(5);
  aMonth[4] = new Array(5);
  aMonth[5] = new Array(5);
  aMonth[6] = new Array(5);

  var VarDate = 1;
  var DateNum = 1;
  for (w = 0; w < 6; w++) 
  {
    for (d = 0; d < 7; d++)
    {
      if (VarDate < FirstDay)
      {
        VarDate++;
        continue;
      }
      if (DateNum <= LastDay)
      {
        aMonth[w][d] = DateNum;
        VarDate++;
        DateNum++;
      }
      else
      {
        aMonth[w][d] = 'x';
      }
    }
  }
  for (w = 0; w < 6; w++)
  {
    for (d = 0; d < 7; d++)
    {
      point = (7*w)+d+1;

      if (!isNaN(aMonth[w][d]))
      {
        obj = document.getElementById("td"+point);
        if (obj.childNodes.length == 0)
        {
          var txt = document.createTextNode(aMonth[w][d]);
          obj.appendChild(txt);
        }
        else
        {
          obj.childNodes[0].data = aMonth[w][d];
        }
        obj.style.backgroundColor = colorActive;
        obj.style.cursor = 'hand';
      }
      else
      {
        obj = document.getElementById("td"+point);
        if (obj.childNodes.length == 0)
        {
          var txt = document.createTextNode('');
          obj.appendChild(txt);
        }
        else
        {
          obj.childNodes[0].data = '';
        }
        obj.style.backgroundColor = colorBlank;
        obj.style.cursor = '';
      }

      if (!isNaN(aMonth[w][d]))
      {
        tDate = new Date(document.data.years.value, document.data.monthes.value-1, aMonth[w][d]);

        if (tDate.getTime() < CurDate.getTime())
        {
          obj.style.backgroundColor = colorPast;
          obj.style.cursor = '';
        }
        else if (tDate.getTime() == CurDate.getTime())
        {
          obj.style.backgroundColor = colorToday;
          obj.style.cursor = '';
        }
        else if (maxdays > 0 && Math.ceil((tDate.getTime() - CurDate.getTime())/(24*60*60*1000)) > maxdays)
        {
          obj.style.backgroundColor = colorPast;
          obj.style.cursor = '';
        }
        else if (tDate.getTime() == ToDate.getTime())
        {
          obj.style.backgroundColor = colorToDate;
          lastrow = "td"+point;
        }
        else
        {
          var t = CalculateDiff("td"+point);
          tToDate = t[0];
          tDiff = t[1];
          if (tToDate.getTime() == tDate.getTime())
          {
            obj.style.backgroundColor = colorPayDate;
          }
        }
      }
    }
  }
}
function Spend()
{
  if (opener && opener.spendform && opener.spendform.amount)
  {
    opener.spendform.amount.value = document.data.amount.value;
    if (compound && opener.spendform.compound)
    {
      opener.spendform.compound.value = document.data.compounding_percent.value;
    }
    window.close();
  }
  else
  {
    alert('Por favor, vuelva a la página de depósitos!');
  }
}
</script>
{/literal}


<form name="data" onsubmit="CalculateProfit(); return false;">
<table cellspacing=1 cellpadding=0 border=0 width=210>
<tr>
  <td><a href="javascript:PrevMonth()"><<</a></td>
  <td align=center>
   <select name="monthes" onchange="{literal}InitCalendar(document.data.monthes.value, document.data.years.value){/literal}" class=inpts>
    <option value=1>Ene</option>
    <option value=2>Feb</option>
    <option value=3>Mar</option>
    <option value=4>Apr</option>
    <option value=5>May</option>
    <option value=6>Jun</option>
    <option value=7>Jul</option>
    <option value=8>Ago</option>
    <option value=9>Sep</option>
    <option value=10>Oct</option>
    <option value=11>Nov</option>
    <option value=12>Dic</option>
   </select>
   <select name="years" onchange="{literal}InitCalendar(document.data.monthes.value, document.data.years.value){/literal}" class=inpts>
   </select>
  </td>
  <td><a href="javascript:NextMonth()">>></a></td>
</tr>
</table>

<table cellspacing=1 cellpadding=0 border=0 class=calendartable><tr><td class=calendartablebg>
<table cellspacing=1 cellpadding=2 border=0>
  <tr>
   <td class=calendarweek>Dom</td>
   <td class=calendarweek>Lun</td>
   <td class=calendarweek>Mar</td>
   <td class=calendarweek>Mie</td>
   <td class=calendarweek>Jue</td>
   <td class=calendarweek>Vie</td>
   <td class=calendarweek>Sab</td>
  </tr>                 
  <tr>
   <td align="center" id="td1" onmouseover="tdUpdateBg('td1', 1)" onmouseout="tdUpdateBg('td1', 0)" onclick="CalculateProfit('td1')"></td>
   <td align="center" id="td2" onmouseover="tdUpdateBg('td2', 1)" onmouseout="tdUpdateBg('td2', 0)" onclick="CalculateProfit('td2')"></td>
   <td align="center" id="td3" onmouseover="tdUpdateBg('td3', 1)" onmouseout="tdUpdateBg('td3', 0)" onclick="CalculateProfit('td3')"></td>
   <td align="center" id="td4" onmouseover="tdUpdateBg('td4', 1)" onmouseout="tdUpdateBg('td4', 0)" onclick="CalculateProfit('td4')"></td>
   <td align="center" id="td5" onmouseover="tdUpdateBg('td5', 1)" onmouseout="tdUpdateBg('td5', 0)" onclick="CalculateProfit('td5')"></td>
   <td align="center" id="td6" onmouseover="tdUpdateBg('td6', 1)" onmouseout="tdUpdateBg('td6', 0)" onclick="CalculateProfit('td6')"></td>
   <td align="center" id="td7" onmouseover="tdUpdateBg('td7', 1)" onmouseout="tdUpdateBg('td7', 0)" onclick="CalculateProfit('td7')"></td>
  </tr>                                                                                             
  <tr>                                                                                              
   <td align="center" id="td8"  onMouseOver="tdUpdateBg('td8', 1)" onmouseout="tdUpdateBg('td8', 0)"   onClick="CalculateProfit('td8')"></td>
   <td align="center" id="td9"  onMouseOver="tdUpdateBg('td9', 1)" onmouseout="tdUpdateBg('td9', 0)"   onClick="CalculateProfit('td9')"></td>
   <td align="center" id="td10" onmouseover="tdUpdateBg('td10', 1)" onmouseout="tdUpdateBg('td10', 0)" onclick="CalculateProfit('td10')"></td>
   <td align="center" id="td11" onmouseover="tdUpdateBg('td11', 1)" onmouseout="tdUpdateBg('td11', 0)" onclick="CalculateProfit('td11')"></td>
   <td align="center" id="td12" onmouseover="tdUpdateBg('td12', 1)" onmouseout="tdUpdateBg('td12', 0)" onclick="CalculateProfit('td12')"></td>
   <td align="center" id="td13" onmouseover="tdUpdateBg('td13', 1)" onmouseout="tdUpdateBg('td13', 0)" onclick="CalculateProfit('td13')"></td>
   <td align="center" id="td14" onmouseover="tdUpdateBg('td14', 1)" onmouseout="tdUpdateBg('td14', 0)" onclick="CalculateProfit('td14')"></td>
  </tr>
  <tr>
   <td align="center" id="td15" onmouseover="tdUpdateBg('td15', 1)" onmouseout="tdUpdateBg('td15', 0)" onclick="CalculateProfit('td15')"></td>
   <td align="center" id="td16" onmouseover="tdUpdateBg('td16', 1)" onmouseout="tdUpdateBg('td16', 0)" onclick="CalculateProfit('td16')"></td>
   <td align="center" id="td17" onmouseover="tdUpdateBg('td17', 1)" onmouseout="tdUpdateBg('td17', 0)" onclick="CalculateProfit('td17')"></td>
   <td align="center" id="td18" onmouseover="tdUpdateBg('td18', 1)" onmouseout="tdUpdateBg('td18', 0)" onclick="CalculateProfit('td18')"></td>
   <td align="center" id="td19" onmouseover="tdUpdateBg('td19', 1)" onmouseout="tdUpdateBg('td19', 0)" onclick="CalculateProfit('td19')"></td>
   <td align="center" id="td20" onmouseover="tdUpdateBg('td20', 1)" onmouseout="tdUpdateBg('td20', 0)" onclick="CalculateProfit('td20')"></td>
   <td align="center" id="td21" onmouseover="tdUpdateBg('td21', 1)" onmouseout="tdUpdateBg('td21', 0)" onclick="CalculateProfit('td21')"></td>
  </tr>
  <tr>
   <td align="center" id="td22" onmouseover="tdUpdateBg('td22', 1)" onmouseout="tdUpdateBg('td22', 0)" onclick="CalculateProfit('td22')"></td>
   <td align="center" id="td23" onmouseover="tdUpdateBg('td23', 1)" onmouseout="tdUpdateBg('td23', 0)" onclick="CalculateProfit('td23')"></td>
   <td align="center" id="td24" onmouseover="tdUpdateBg('td24', 1)" onmouseout="tdUpdateBg('td24', 0)" onclick="CalculateProfit('td24')"></td>
   <td align="center" id="td25" onmouseover="tdUpdateBg('td25', 1)" onmouseout="tdUpdateBg('td25', 0)" onclick="CalculateProfit('td25')"></td>
   <td align="center" id="td26" onmouseover="tdUpdateBg('td26', 1)" onmouseout="tdUpdateBg('td26', 0)" onclick="CalculateProfit('td26')"></td>
   <td align="center" id="td27" onmouseover="tdUpdateBg('td27', 1)" onmouseout="tdUpdateBg('td27', 0)" onclick="CalculateProfit('td27')"></td>
   <td align="center" id="td28" onmouseover="tdUpdateBg('td28', 1)" onmouseout="tdUpdateBg('td28', 0)" onclick="CalculateProfit('td28')"></td>
  </tr>                                                                                                                              
  <tr>                                                                                                                               
   <td align="center" id="td29" onmouseover="tdUpdateBg('td29', 1)" onmouseout="tdUpdateBg('td29', 0)" onclick="CalculateProfit('td29')"></td>
   <td align="center" id="td30" onmouseover="tdUpdateBg('td30', 1)" onmouseout="tdUpdateBg('td30', 0)" onclick="CalculateProfit('td30')"></td>
   <td align="center" id="td31" onmouseover="tdUpdateBg('td31', 1)" onmouseout="tdUpdateBg('td31', 0)" onclick="CalculateProfit('td31')"></td>
   <td align="center" id="td32" onmouseover="tdUpdateBg('td32', 1)" onmouseout="tdUpdateBg('td32', 0)" onclick="CalculateProfit('td32')"></td>
   <td align="center" id="td33" onmouseover="tdUpdateBg('td33', 1)" onmouseout="tdUpdateBg('td33', 0)" onclick="CalculateProfit('td33')"></td>
   <td align="center" id="td34" onmouseover="tdUpdateBg('td34', 1)" onmouseout="tdUpdateBg('td34', 0)" onclick="CalculateProfit('td34')"></td>
   <td align="center" id="td35" onmouseover="tdUpdateBg('td35', 1)" onmouseout="tdUpdateBg('td35', 0)" onclick="CalculateProfit('td35')"></td>
  </tr>                                                                                                                              
  <tr>                                                                                                                               
   <td align="center" id="td36" onmouseover="tdUpdateBg('td36', 1)" onmouseout="tdUpdateBg('td36', 0)" onclick="CalculateProfit('td36')"></td>
   <td align="center" id="td37" onmouseover="tdUpdateBg('td37', 1)" onmouseout="tdUpdateBg('td37', 0)" onclick="CalculateProfit('td37')"></td>
   <td align="center" id="td38" onmouseover="tdUpdateBg('td38', 1)" onmouseout="tdUpdateBg('td38', 0)" onclick="CalculateProfit('td38')"></td>
   <td align="center" id="td39" onmouseover="tdUpdateBg('td39', 1)" onmouseout="tdUpdateBg('td39', 0)" onclick="CalculateProfit('td39')"></td>
   <td align="center" id="td40" onmouseover="tdUpdateBg('td40', 1)" onmouseout="tdUpdateBg('td40', 0)" onclick="CalculateProfit('td40')"></td>
   <td align="center" id="td41" onmouseover="tdUpdateBg('td41', 1)" onmouseout="tdUpdateBg('td41', 0)" onclick="CalculateProfit('td41')"></td>
   <td align="center" id="td42" onmouseover="tdUpdateBg('td42', 1)" onmouseout="tdUpdateBg('td42', 0)" onclick="CalculateProfit('td42')"></td>
  </tr>
</table>
</td></tr></table>
{literal}
<script>
document.data.monthes.options[CurDate.getMonth()].selected = true;
for (var i = CurDate.getFullYear(); i < CurDate.getFullYear() + 10; i++)
{
  document.data.years.options[document.data.years.options.length] = new Option(i,i);
}
InitCalendar(CurDate.getMonth()+1, CurDate.getFullYear());
</script>
{/literal}
<table>
<tr>
  <td>Desde:</td><td><b><script>document.write(CurDate.getMonth()+1 + '/' + CurDate.getDate() + '/' + CurDate.getFullYear())</script></b></td>
</tr>
<tr>
  <td>Hasta:</td><td><b><span id="to">Seleccione en el calendario</span></b></td>
</tr>
<tr>
  <td>{$type.period_name}:</td><td><b><span id="days">N/A</span></b></td>
</tr>

  <td>Cantidad:</td><td nowrap>{$currency_sign} <input type="text" name="amount" value="{$type.min_deposit}" size=5 class=inpts> <input type="button" value="Calcular" onclick="CalculateProfit()" class=sbmt></td>
</tr>
{if $type.use_compound}
<tr>
  <td>Porcentaje de la capitalización:</td><td nowrap><input type="text" name="compounding_percent" value="10" size=5 class=inpts> % <input type="button" value="Calcular" onclick="CalculateProfit()" class=sbmt></td>
</tr>
{/if}
<tr>
  <td>Porcentaje:</td><td><b><span id="percent">N/A</span></b></td>
</tr>
<tr>
  <td>Ganacia {$currency_sign}:</td><td><b><span id="profit">N/A</span></b></td>
</tr>
<tr>
  <td nowrap>Deposito {$currency_sign}:</td><td><b><span id="deposit">N/A</span></b></td>
</tr>

{if $userinfo.logged}
<tr>
  <td><input type="button" value="Gastar" onclick="Spend();" class=sbmt></td>
</tr>
{/if}
</table>
<script>
Calcular Porcentaje();
</script>
</form>
</body>
</html>
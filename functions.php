<?php

if (isset($_REQUEST['analyze'])) {
    
    function word_validation($string){

        if (!empty($string)) {
            if (strlen($string) > 2) {
                if (preg_match('/^[A-zšđčćžŠĐČĆŽ]+$/', $string)) {
                    return $string;
                }else{
                    return 'Riječ za analizu ne smije sadržavati brojeve ili posebne znakove.';
                }
            }else{
                return 'Riječ za analizu mora sadržavati najmanje 3 slova';
            }
        }else{
            
        }
    }
    //To UPPERCASE
    function to_uppercase($string){
        return strtoupper($string);
    }
    //RAZDVOJI SA |
    function separate_into_letters($string){
        $len = strlen($string);
        for($i = 0; $i < $len; ++$i)
            echo $string[$i]."\n |";
    }
    //Samoglasnici +
    function vowels($string){
        preg_match_all('/[aeiou]/i', $string, $matches);
        return count($matches[0]);
    }
    //Suglasnici +
    function consonants($string){
        preg_match_all('/[b-df-hj-np-tv-zč]/i', $string, $matches);
        return count($matches[0]);
        }
   //CRO letters
  //  function cro_letters($string){
   //     preg_match_all('/\s+/', $string, $matches);
    //    $result = array_map('strlen', $matches[0]);
    //    return $result[0];
    //    }
    function pr($string){
        echo $word = ' Velika slova: '.to_uppercase($_REQUEST['word']);
        echo $word = ' Po slovima: '.separate_into_letters($_REQUEST['word']);
        echo $word = ' Broj samoglasnika: '.vowels($_REQUEST['word']);
        echo $word = ' Broj suglasnika: '.consonants($_REQUEST['word']);
    }
   

}

?>
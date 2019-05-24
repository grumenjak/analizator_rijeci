<?php

if (isset($_REQUEST['analyze'])) {
    
    function word_validation($string){
        if (!empty($string)) {
            if (strlen($string) > 2) {
                if (preg_match('/^[A-zšđčćžŠĐČĆŽ]+$/', $string)) {
                    return $string;
                }else {
                    return 'Riječ za analizu ne smije sadržavati brojeve i znakove';
                }
            }else {
                return 'Riječ za analizu mora sadržavati najmanje 3 slova';
            }
        }else {
            return 'Morate upisati riječ u polje';
        }
    }

    function to_uppercase($string){
        return strtoupper($string);
    }
    function separate_into_letters($string){   //riječ treba razdvojiti na slova ... npr mirko ->> m,i,r,k,o  ALI ako postoji lj ili nj onda je to jedna rije i piše se lj npr.. ljubav -->lj,u,b,a,v
        //str len vidimo koliko je dugačak pa onda svaki char ipsiujemo []
        // ili sa ubstr uzme samo jedan karakter sa for petljom
        //funkcija implode()
                
    }
    function vowels($string){
        //izbrojati samoglasnike
        //if a ei ou count = +1 else
        
    }
    function consonants($string){
        //izbrojati suglasnike
        
    }
    function cro_letters($string){
        //ako u riječi postoje hrvatska slova onda ih treba ispisati, ako ne postoje onda reći ne postoje hrv slova
        
    }
    function print($string){   //da ispisuje sve gornje funkcije
        
    }
}

?>
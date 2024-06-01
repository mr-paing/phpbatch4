<?php

// => Super Global Variables 
    // 1. $GLOBALS[""]
    // 2. $_SERVER[""]
    // 3. $_REQUEST 
    // 4. $_POST 
    // 5. $_GET 
    // 6. $_FILES 
    // 7. $_ENV 
    // 8. $_COOKIE 
    // 9. $_SESSION



//=> 1 . $GLOBALS

    $x = 100;
    $y = 200;

// error 
    // function sumresultone(){
    //     $total = $x + $y;
    //     return $total;
    // }

    // echo sumresultone();
    // echo $total;


    function sumresultone(){
        $GLOBALS['total'] = $GLOBALS['x'] + $GLOBALS['y'];
        return $GLOBALS['total'];
    }

    echo sumresultone();        // 300
    echo $total;                // 300
    echo $GLOBALS['total'];     // 300

    echo "<br/>";

// => $_SERVER (same user_argent in js)
    echo $_SERVER["PHP_SELF"]; ///phpbatch4/l12superglobalvariables.php (ဖိုင် ပတ်လမ်းေကြာင်းကို ရသည်)
echo "<br/>";
    echo $_SERVER["HTTP_USER_AGENT"]; // Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36
echo "<br/>";
    echo $_SERVER["HTTP_HOST"]; // localhost
echo "<br/>";
    echo $_SERVER["SERVER_NAME"]; // localhost
echo "<br/>";
    echo $_SERVER["SERVER_SOFTWARE"]; // Apache/2.4.58 (Unix) OpenSSL/1.1.1w PHP/8.2.12 mod_perl/2.0.12 Perl/v5.34.1
echo "<br/>";
    echo $_SERVER["SERVER_PORT"]; // 80
echo "<br/>";
    echo $_SERVER["SERVER_PROTOCOL"]; // HTTP/1.1
echo "<br/>";
    echo $_SERVER["SERVER_SIGNATURE"]; // 
echo "<br/>";
    echo $_SERVER["REQUEST_METHOD"]; // GET
echo "<br/>";
    echo $_SERVER["REMOTE_ADDR"]; // ::1
echo "<br/>";
    echo $_SERVER["SCRIPT_FILENAME"]; // localhost
echo "<br/>";
    echo $_SERVER["SCRIPT_NAME"]; // /opt/lampp/htdocs/phpbatch4/l12superglobalvariables.php
echo "<br/>";
    echo $_SERVER["QUERY_STRING"]; // /phpbatch4/l12superglobalvariables.php
echo "<br/>";



    


?>
<?php 

// password_has()

    // PASSWORD_DEFAULT 

function setpassword($plaintext){
    $passcode = $plaintext;
    echo $passcode;
};

setpassword("password123");


function setpassworddef($plaintext){
    $passcode = password_hash($plaintext,PASSWORD_DEFAULT); // dynamic code 
    echo "Before Encrypt = {$plaintext} " , "<br/>"; // password123
    echo "after Encrypt = {$passcode}" , "<br/>"; // $2y$10$qlXMR7Jwks9jtXrHfTlh0e.VPZzB2YCInU.QBSdcpomSim8f1ixgS
    echo strlen($passcode) , "<br/>"; // 60

}
setpassworddef("password123");


    // PASSWORD_BCRYPT

function setpasswordbcr($plaintext){
    $passcode = password_hash($plaintext,PASSWORD_BCRYPT); // dynamic code 
    echo "Before Encrypt = {$plaintext} " , "<br/>"; // password123
    echo "after Encrypt = {$passcode}" , "<br/>"; // $2y$10$UnHWKNVU3k5khRaB2.EQBO8uSnRyvZaX9pgxQo9S5vxfbmEZgNNAW
    echo strlen($passcode); // 60

}
setpasswordbcr("password123");

function passworddecry(){
    $plaintextone = "password123";
    $enccodeone = password_hash($plaintextone,PASSWORD_DEFAULT);

    $plaintexttwo = "password123";
    $enccodetwo = password_hash($plainetxttwo,PASSWORD_BCRYPT);

    echo "<br/>";

    // echo "Encrypt Code One = {$enccodeone} " , "<br/>"; //  $2y$10$nS3qlk/0pWziZspBNLAKL.yqgRbcmYS.poBhxhwKYQRFe812HoLJ.
    // echo "Encrypt Code Two = {$enccodetwo} " , "<br/>"; // $2y$10$BAC7mXqqHGewexk1NT1g.OmOkrTwESWFSYuhZ9jB76uHtCLoA7ORe

    // $verify = password_verify($plaintextone,$enccodetwo); // Failed
    $verify = password_verify($plaintextone,$enccodeone); // Oki
    if($verify){
        echo "Oki";
    }else{
        echo "Failed";
    }

}

passworddecry();

// -------------------------------------------------------------------------


echo "<br/>";

    // md5()

function fasswordmd5($plaintext){
    //Message-Digiet = md5(string,binary)
    // Note:: binary = TRUE/true False/false; 
    // TURE/true = RAW 16 characters binary format 
    // FALSE/false = DEFAULT 32 charachers hax number 

    $passcode1 = md5($plaintext); // static
    echo "Before Encrypt = {$plaintext} , After encript md5 = {$passcode1} ";  // Before Encrypt = password123 , After encript md5 = 482c811da5d5b4bc6d497ffa98491e38
    echo strlen($passcode1); //32


    $passcode2 = md5($plaintext,FALSE); //static
    echo "Before Encrypt = {$plaintext} , After encript md5 = {$passcode2} ";  // Before Encrypt = password123 , After encript md5 = 482c811da5d5b4bc6d497ffa98491e38
    echo strlen($passcode2); //32

    $passcode3 = md5($plaintext,TRUE); //static
    echo "Before Encrypt = {$plaintext} , After encript md5 = {$passcode3} ";  // Before Encrypt = password123 , After encript md5 = H,��մ�mI��I8
    echo strlen($passcode3); //16
}

fasswordmd5("password123");

echo "<br/>";

function passwordmd5verify($plaintext){
    $getpassword = "482c811da5d5b4bc6d497ffa98491e38";

    if($getpassword === md5($plaintext)){
        echo "Password match with 32 chars hax number";
    }elseif($getpassword === md5($plaintext,TRUE)){
        echo "Password match with 16 chars binary format"; // can't match it's a binary
    }else{
        echo "Passwrod do not match";
    }
}

passwordmd5verify("password123"); // Password match with 32 chars hax number

// -------------------------------------------------------------------------

echo "<br/>";

// sha1()


function passwrodsh1($plaintext){
    //Secure Hash Algorithm = sha1(string,binary)
    //     Note::Binary = TRUE/true FALSE/false 
    // TRUE/true = RAW 20 characters binary format 
    // FALSE/false = DEFAULT 40 characters hax number 

    $passcode1 = sha1($plaintext); //static
    echo "Before Encrypt = {$plaintext} , After Encrypt sha1 = {$passcode1} "; // Before Encrypt = password123 , After Encrypt sha1 = cbfdac6008f9cab4083784cbd1874f76618d2a97
    echo strlen($passcode1) , "<br/>"; // 40

    $passcode2 = sha1($plaintext,FALSE); //static
    echo "Before Encrypt = {$plaintext} , After Encrypt sha1 = {$passcode2} "; // Before Encrypt = password123 , After Encrypt sha1 = cbfdac6008f9cab4083784cbd1874f76618d2a97
    echo strlen($passcode2) , "<br/>"; // 40

    $passcode1 = sha1($plaintext,TRUE); //static
    echo "Before Encrypt = {$plaintext} , After Encrypt sha1 = {$passcode1} "; // Before Encrypt = password123 , After Encrypt sha1 = ���`�ʴ7��чOva�*� 
    echo strlen($passcode1) , "<br/>"; // 20


}

passwrodsh1("password123");

function passwordshaverify($plaintext){
    $getpassword = "cbfdac6008f9cab4083784cbd1874f76618d2a97";
    if($getpassword === sha1($plaintext)){
        echo "Password match with 40 chars hax number";
    }elseif($getpassword === sha1($plaintext,TRUE)){
        echo "Password match with 20 chars binary format";
    }else{
        echo "Password do not match";
    }
}

passwordshaverify("password123"); // Password match with 40 chars hax number

// -------------------------------------------------------------------------

echo "<br/>";

// crypt(string,key);

function passwordcrypt($plaintext){
    $crykey = "456789ABCDEFG";
    $passcode = crypt($plaintext,$crykey); // static
    echo "Before Encrypt = {$plaintext}, After Encrypt = {$passcode} "; // 45X0h1uT9HvTw
    echo strlen($passcode); // 13
}

passwordcrypt("password123");

echo "<br/>";

function passwordcryptverify($plaintext){
    
    $getpassword = "45X0h1uT9HvTw";
    $crykey = "456789ABCDEFG";

    
    if($getpassword === crypt($plaintext,$crykey)){
        echo "Password match";
    }else{
        echo "Password do not match";
    }
}

passwordcryptverify("password123"); // Password match


// -------------------------------------------------------------------------

echo "<br/>";

function strongpassword($plaintext){

    $cryptkey = "456789ABCDEFG";
    $newpassword = crypt(sha1(md5($plaintext)),$cryptkey);

    // $newpassword = md5($plaintext);
    // $newpassword = sha1($newpassword);
    // $newpassword = crypt($newpassword,$newpassword);

    echo "Before Encrypt = {$plaintext} , After Encrypt = {$newpassword}"; // Before Encrypt = password , After Encrypt = 45QUhSRh116Mw
    echo strlen($newpassword); // 13

}

strongpassword("password123");

echo "<br/>";

function strongpasswordverify($plaintext){

    $getpassword = "45QUhSRh116Mw";
    $cryptkey = "456789ABCDEFG";

    if($getpassword === crypt(sha1(md5($plaintext)),$cryptkey)){
        echo "Password match";
    }else{
        echo "Password do not match";
    }

    // $getpassword = "926wQBSqLwkTE";
    // if($getpassword === crypt(sha1(md5($plaintext)),sha1(md5($plaintext)))){
    //     echo "Password match";
    // }  else{
    //     echo "Password do not match";
    // }

}

strongpasswordverify("password123");

?>
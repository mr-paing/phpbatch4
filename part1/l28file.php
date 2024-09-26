<?php 

// READ 

 echo readfile("l28file.txt");
 echo "<hr/>";

 echo filesize("l28file.txt");

 echo "<hr/>";

 $fileopen = fopen("l28file.txt","r"); // fopen(filepath,action); r = read
 if($fileopen){
    echo "File exists";
    echo '<br/> <br/>';

    $filesize = filesize("l28file.txt");
    $fileread = fread($fileopen,$filesize); // fread(fileopen,filesize)
                fclose($fileopen);

    echo $fileread;
 }else{
    echo "File doesn't exist";
 }


 echo "<hr/>";

//  For Linux (if permission needed)
    //  sudo chmod 777 -R /var/www/html
    //  sudo chmod 775 -R /var/www/html 

$fileopen = fopen("l28files.txt","w");
if($fileopen){
    echo "File exists";
    echo "<br/>";

    // fwrite($fileopen,"Hello guys!!! I created new file");
    fwrite($fileopen,"Hello gyus!!! are you ready to learn file system in php");

    $fileopen = fopen('l28files.txt','r');
    $fileread = fread($fileopen,filesize('l28files.txt'));
    fclose($fileopen);

    echo $fileread;

}else{
    echo "File doesn't exist";
}

echo '<hr/>';

// -----------------------------------------------

// Note :: "x" create file only, return FALSE if file already exists.

$fileopen = fopen('l28newfiles.txt','x');
if($fileopen){

    echo "File exists";
    echo '<br/>';

}else{
    echo "File doesn't exist";
}

echo '<hr/>';

// -----------------------------------------------


// Note :: "c" create file only, can't write and override
// Note :: "c+" create file and can read , write and override

// $fileopen = fopen('l28yourfiles.txt','c');
$fileopen = fopen('l28yourfiles.txt','c+');
if($fileopen){
    echo "File Exists";
    echo '<br/>';

    // $filewrite = fwrite($fileopen,"Hello guys!!! I created new file");
    $filewrite = fwrite($fileopen,"Hello gyus!!! are you ready to learn file system in php");

    $fileopen = fopen("l28yourfiles.txt",'c+');
    $fileread = fread($fileopen,filesize("l28yourfiles.txt"));
    fclose($fileopen);

    echo $fileread;

}else{
    echo "File Doesn't Exists";
}

echo '<hr/>';
// .................................................................

$fileopen = fopen("l28ourfiles.txt","w");
if($fileopen){
    echo "File exists";
    echo '<br/>';


    // $filewrite = fwrite($fileopen,"Hello \n");
    // $filewrite = fwrite($fileopen,"World");

    $message = "Welcome to our class \n";
    $filewrite = fwrite($fileopen,$message);
    $message = "Thank you for using php file system";
    $filewrite = fwrite($fileopen,$message);

    $fileopen = fopen("l28ourfiles.txt","r");
    $fileread = fread($fileopen,filesize("l28ourfiles.txt"));
    fclose($fileopen);

    echo $fileread;

}else{
    echo "File doesn't exists";
}

echo '<hr/>';

//------------------------------------------------------------

// Append 

$fileopen = fopen("l28theirfiles.txt","a");
if($fileopen){
    echo "File Exists";
    echo "<br/>";

    // $filewrite = fwrite($fileopen,"Hello \n");
    // $filewrite = fwrite($fileopen,"World");

    $message = "Welcome to our class \n";
    $filewrite = fwrite($fileopen,$message);
    $message = "Thank you for using php file system";
    $filewrite = fwrite($fileopen,$message);

    $fileopen = fopen("l28theirfiles.txt","r");
    // $fileread = fread($fileopen,filesize(5));
    $fileread = fread($fileopen,filesize("l28theirfiles.txt"));
    fclose($fileopen);

    echo $fileread;


}else{
    echo "File Doesn't Exists";
}

echo '<hr/>';
// ---------------------------------------------------------


// => Other File's Useful Functions 

        // file_get_contents(file)          = Read 
        // file_put_contents(file,string)   = Write 
        // file_exists() / is_file()        = check file exists or not 
        // copy(main,copy)                  = copies a file 
        // rename(main,newfilename)         = rename a file 
        // unlink(main)                     = delete a file 

    echo file_get_contents("l28file.txt");

    echo '<hr/>';

    // sudo chmod 777 -R l28softfile.txt/

    $existingfile = "l28file.txt";
    $namefile = "l28softfile.txt";
    $message = file_get_contents($existingfile);

    $message .= "\n Thanks for using php file system \n";

    file_put_contents($namefile,$message) or die("Unable ot oopen file");


    $existingfile = "l28file.txt";
    $namefile = "l28headfile.txt";

    if(file_exists($existingfile)){
        echo "File Exists";

        $message = file_get_contents($existingfile);
        $message = "\n Thanks for using php file system";
        file_put_contents($namefile,$message) or die("Unable to open file");

    }else{
        echo "File not found";
    }
echo "<hr/>";

    // => copy(main,copy);
    $existingfile = "l28file.txt"; 
    copy($existingfile,"l28subfile.txt");
    echo file_get_contents("l28subfile.txt");


echo '<hr/>';

    // => rename(main,newfilename);

    $existingfile = "l28subfile.txt";
    rename($existingfile,"l28webfile.txt");
    echo file_get_contents("l28webfile.txt");


    echo '<hr/>';
// => unlink(main)

    $existingfile = "l28webfile.txt";
    if(file_exists($existingfile)){
        unlink($existingfile);
        echo "File Delete Successfully";
    }else{
        echo "File not found";
    }


// => Shw All Files 
    // glob()
    echo "<pre>".print_r(glob("*.txt"),true)."</pre>";

    echo "<pre>".print_r(glob("*.php"),true)."</pre>";

    echo "<pre>".print_r(glob("*.*"),true)."</pre>";

// ---------------------------------------------------------

?>
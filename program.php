    <?php
        $username = $_GET["username"]; //You have to get the form data
        $email = $_GET["email"];
        $message = $_GET["message"];
        $file = fopen('configurationSettings.txt', 'a'); //Open your .txt file
        /*ftruncate($file, 0); //Clear the file to 0bit*/
        $content = $username. PHP_EOL .$email. PHP_EOL .$message;
        fwrite($file , $content); //Now lets write it in there
        fclose($file ); //Finally close our .txt
        die(header("Location: ".$_SERVER["HTTP_REFERER"]));
    ?>
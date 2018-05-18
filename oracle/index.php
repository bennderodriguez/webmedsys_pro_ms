<?php
if( ($fp = popen("llamaOracle.bat", "r")) ) {
    while( !feof($fp) ){
        echo fread($fp, 1024).'<br>';
        flush(); // you have to flush buffer
    }
    fclose($fp);
}
?>
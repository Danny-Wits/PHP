<!-- Downloading file using php -->
<?php
    //DOWNLOAD.PHP
        // header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="download.pdf"');
        readfile('new.pdf');
    
?>
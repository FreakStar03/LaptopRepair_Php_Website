<?php
    require_once(realpath(dirname(__FILE__) . "/../config.php"));
 
    function renderLayoutWithContentFile($contentFile)
    {
        $contentFileFullPath = TEMPLATES_PATH . "/" . $contentFile;

     
        require_once(TEMPLATES_PATH . "/document.php");
        require_once(TEMPLATES_PATH . "/header.php");

        echo "<div id=\"container\">\n"
           . "\t<div id=\"content\">\n";
     
        if (file_exists($contentFileFullPath)) {
            require_once($contentFileFullPath);
        } else {
            /*
                If the file isn't found the error can be handled in lots of ways.
                In this case we will just include an error template.
            */
            require_once(TEMPLATES_PATH . "/error.php");
        }
     
        // close content div
        echo "\t</div>\n";
    
     
        require_once(TEMPLATES_PATH . "/footer.php");
    }



    

?>
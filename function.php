<?php
function csvToHtml($fileName) {
    $file = file_get_contents($fileName);
    $class = explode(".",$fileName)[0];
    $htmlTable = "<table class='$class'>";
    $htmlTable .= "<thead> <tr>";
    $thead = explode(",",$file[0]);
    foreach($thead as $collTitle){
        $htmlTable .= "<th>$callTitle</th>";
    }
    $htmlTable .= "</tr></thead><tbody>";
for ($i=1; $i < count($file); $i++) { 
    $line = explode(",",$file[$î])
}
    $htmlTable .= "</tbody></table>";






    $htmlTable .= "</table>"
}

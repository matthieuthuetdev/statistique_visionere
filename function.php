<?php
function csvToHtml($_fileName)
{
    $fileName = "./stat/$_fileName.csv";
    $file = file_get_contents($fileName);
    $file = explode("\n", $file);
    $htmlTable = "<table id='stat'><thead>";
    $htmlTable .= "<tr>". "<th>". str_replace(",","</th><th>",$file[0]). "</th></tr>";
    $htmlTable .= "</thead><tbody>";
    for ($i=1; $i <count($file) ; $i++) { 
    $htmlTable .= "<tr>". "<td>". str_replace(",","</td><td>",$file[$i]). "</td></tr>";
    }
    $htmlTable .= "</tbody></table>";
    return $htmlTable;
}

<?php
function csvToHtml($_fileName)
{
$fileName = "./stat/$_fileName.csv"; 
    $file = file_get_contents($fileName);
    $file = explode("\n", $file);
    $htmlTable = "<div class='$_fileName'><table><thead><tr>";
    $thead = explode(",", $file[0]);
    foreach ($thead as $collTitle) {
        $htmlTable .= "<th>$collTitle</th>";
    }
    $htmlTable .= "</tr></thead><tbody>";
    for ($i = 1; $i < count($file); $i++) {
        $line = explode(",", $file[$i]);
        foreach ($line as $l) {
            $htmlTable .= "<td>" . $line[$i] . "</td>";
        }
    }
    $htmlTable .= "</tbody></table></div>";






    $htmlTable .= "</table>";
    return $htmlTable;
}

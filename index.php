<?php
if (!isset($_GET["code"]) || $_GET["code"] != "Vision3745") {
    require "./error.php";
} else {
    require "./stats.php";
}

<?php
if (!isset($_GET["pwd"]) || $_GET["pwd"] != "Vision3745") {
    require "location: ./error.php";
} else {
    require "./stats.php";
}

<?php
include_once 'conn.php';
foreach (glob("user/*.php") as $filename) {
    include $filename;
}
foreach (glob("functions/*.php") as $filename) {
    include $filename;
}
foreach (glob("functions/clientside/*.php") as $filename) {
    include $filename;
}

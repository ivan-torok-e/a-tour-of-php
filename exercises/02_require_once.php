<?php

// require_once allow you to include php files content other than yours
// to get the current file's directory, you can use the following example: dirname(__FILE__)
// to concat two string use the "." expression. For example: "red" . " " . "fox" // "red fox"
// the file that you need to load is in the ./02_require_once/example.php
//
// The require() function is identical to include(),
// except that it handles errors differently.
// If an error occurs, the include() function generates a warning,
// but the script will continue execution.
// The require() generates a fatal error, and the script will stop.
<<<<<<< HEAD

require_once(dirname(__FILE__) . "/02_require_once/example.php");
=======
require_once(dirname(__FILE__) . "/02_require_once/example.php");
?>
>>>>>>> 1134542fb76f934aa5c87dcf3fccdb7cd3d1549d

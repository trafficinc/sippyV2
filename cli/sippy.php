<?php
/**
 * Sippy 2.0
 * Quick and Very Dirty CLI
 */

error_reporting(0);

define('BASE_DIR', dirname(__DIR__));

require 'actions/Clear.php';

$arguments = array_slice($argv, 1);
$flags = [];
//all main commands need a ':'
$mainCommand = '';
foreach ($arguments as $id) {
    if (strpos($id, ':') !== false) {
        /** @var string $mainCommand */
        $mainCommand = $id;
    }
    if (strpos($id, '-') !== false) {
        /** @var array $flags */
        $flags[] = $id;
    }

}

if (!empty($mainCommand)) {
    $command = explode(":", $mainCommand);

    if ($command[0] === 'clear') {
        // Clear things
        if ($command[1] === 'viewcache') {
            $clear = new Clear(BASE_DIR);
            $cleared = $clear->viewCache();
            $dirCleared = count($cleared[0]);
            $filesCleared = count($cleared[1]);

            echo <<<RES
Directories Cleared: $dirCleared
Files Cleared: $filesCleared
View caches cleared successfully \n
RES;
        }

//    Add more main commands

    }
}

if (!empty($flags)) {
    foreach ($flags as $flag) {
        $flag = str_replace("-", '', $flag);

        if ($flag === 'help') {
            echo <<<USAGE
 Usage: php cli/sippy.php [options]
  clear:viewcache   Clear View caches, if they are enabled
  
  -help              This help \n
USAGE;
        }

//    Add more flags

    }
}
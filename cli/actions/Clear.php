<?php
/**
 * Sippy 2.0 CLI
 */

class Clear {

    public $baseDir;

    public function __construct($baseDir)
    {
        $this->baseDir = $baseDir;
    }

    public function viewCache() {
        $dirPerms = 0755;
        $dir = $this->baseDir."/app/Views/cache";
        $newDir = $this->baseDir."/app/Views";

        if ( file_exists($dir) ) {
            $it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
            $files = new RecursiveIteratorIterator($it,RecursiveIteratorIterator::CHILD_FIRST);
            $removedDir = [];
            $unlinked = [];
            foreach ($files as $file) {
                if ($file->isDir()) {
                    $removedDir[] = rmdir($file->getRealPath());
                } else {
                    $unlinked[] = unlink($file->getRealPath());
                }
            }
            return [$removedDir,$unlinked];
        } else {
            mkdir($newDir.'/cache', $dirPerms);
        }
    }
}
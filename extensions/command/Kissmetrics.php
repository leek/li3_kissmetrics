<?php

namespace li3_kissmetrics\extensions\command;

use lithium\core\Environment;
use \KM;

/**
 * Send Kissmetrics statistics
 */
class Kissmetrics extends \lithium\console\Command
{
    public $key;
    public $logdir;

    public function sendLoggedQueries()
    {
        if ($this->key) {
            KM::$key = $this->key;
        }

        if ($this->logdir) {
            KM::$log_dir = $this->logdir;
        }

        $this->header('Kissmetrics');
        $this->out(" - Using Environment: \t" . Environment::get());
        $this->out(" - Using log_dir: \t" . KM::$log_dir);
        $this->out("\nSending...");
        KM::send_logged_queries();
    }
}

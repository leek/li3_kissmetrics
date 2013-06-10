<?php

use lithium\core\Libraries;

$_config = Libraries::get('li3_kissmetrics');

if (isset($_config['key']) && !empty($_config['key'])) {
    if (!isset($_config['options'])) {
        $_config['options'] = array();
    }
    if (!isset($_config['options']['log_dir']) || empty($_config['options']['log_dir'])) {
        $_config['options']['log_dir'] = Libraries::get(true, 'resources') . '/tmp/logs';
    }

    \KM::init($_config['key'], $_config['options']);
}

unset($_config);

# li3_kissmetrics

Simple [Kissmetrics](http://kissmetrics.com) integration for [Lithium](http://lithify.me).

## Installation

Load `li3_kissmetrics` by updating `config/bootstrap/libraries.php`:

```php
<?php

// ... snip ...

// Kissmetrics
Libraries::add('li3_kissmetrics', array('key' => '-> INSERT API KEY <-'));
```

### Overriding Options

By default, the `log_dir` option for the `KM` class is set for you.
If you need to override this value (or other options), update the `bootstrap/libraries.php`:

```php
<?php

// ... snip ...

// Kissmetrics
Libraries::add('li3_kissmetrics', array(
    'key' => '-> INSERT API KEY <-',
    'options' => array(
        'log_dir'   => '/tmp',
        'use_cron'  => false,
        'to_stderr' => true,
    ),
));
```

### Using CRON for Sending

Override the `use_cron` option key (see above) to `true`.

Then setup a cron job to execute this command: `li3 kissmetrics sendLoggedQueries`

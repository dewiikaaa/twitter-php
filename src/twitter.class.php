<?php

declare(strict_types=1);

require_once __DIR__ . '/OAuth.php';
require_once __DIR__ . '/Twitter.php';

class_alias('DIS\Twitter\Twitter', 'Twitter');
class_alias('DIS\Twitter\Exception', 'TwitterException');

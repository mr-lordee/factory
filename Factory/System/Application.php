<?php

namespace Factory\System;

use Factory\Interfaces\ApplicationInterface;

class Application implements ApplicationInterface {
    public function run()
    {
        return 'Ку';
    }
}
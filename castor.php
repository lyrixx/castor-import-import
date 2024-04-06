<?php

namespace pyrech;

use Castor\Attribute\AsTask;

use function Castor\import;

#[AsTask()]
function intermediate()
{
}

import('package://pyrech/foobar', source: [
    'url' => 'https://github.com/pyrech/castor-example-misc.git',
    'type' => 'git',
    'reference' => 'main', //  commit id, branch or tag name
]);

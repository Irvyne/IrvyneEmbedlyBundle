<?php

namespace Irvyne\EmbedlyBundle\Service;

use Embedly\Embedly;

class EmbedlyService extends Embedly
{
    public function __construct($key)
    {
        parent::__construct(array('key' => $key));
    }
}
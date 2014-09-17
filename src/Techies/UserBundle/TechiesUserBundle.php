<?php

namespace Techies\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TechiesUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

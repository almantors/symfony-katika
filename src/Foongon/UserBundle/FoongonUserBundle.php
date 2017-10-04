<?php

namespace Foongon\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FoongonUserBundle extends Bundle
{
    public function getParent()
  {
    return 'FOSUserBundle';
  }
}

<?php

namespace Foongon\ChallengeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FoongonChallengeBundle:Default:index.html.twig');
    }
}

<?php

namespace Foongon\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
      $mailer = $this->get('mailer');
      $message = \Swift_Message::newInstance()
      ->setSubject('bonjour')
      ->setFrom('boris.wandja@gmail.com')
      ->setTo('b.wandja@yahoo.fr')
      ->setBody('Coucou, voici un email que vous venez de recevoir!');
      $mailer->send($message);
        return $this->render('FoongonUserBundle:Default:index.html.twig');
    }
}

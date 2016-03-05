<?php

namespace ClashOfClans\APIWrapperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ClashOfClansAPIWrapperBundle:Default:index.html.twig');
    }
}

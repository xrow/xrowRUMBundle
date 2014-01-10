<?php

namespace xrow\RUMBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('xrowRUMBundle:Default:index.html.twig', array('name' => $name));
    }
}

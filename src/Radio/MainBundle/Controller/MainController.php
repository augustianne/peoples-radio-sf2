<?php

namespace Radio\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('RadioMainBundle:Main:index.html.twig');
    }
}
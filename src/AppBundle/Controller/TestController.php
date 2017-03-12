<?php


namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TestController
{
    /**
     * Matches /test/*
     *
     * @Route("/test/{slug}", name="test_show")
     */
    public function showAction($slug)
    {
        return new Response('<html><body>Hello '.$slug.'!</body></html>');
    }
} 
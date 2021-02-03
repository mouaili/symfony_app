<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HelloController extends AbstractController
{
    /**
     * @Route("hello/{param}", requirements={"param"="\d+"}, methods={"GET", "POST"})
     */
    public function helloNumber($param)
    {
        return new Response($param);
    }

    /**
     * @Route("hello/{param}")
     */
    public function helloDfault($param)
    {
        return new Response("Hello " . $param);
    }
}

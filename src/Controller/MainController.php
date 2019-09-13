<?php

namespace App\Controller;

use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
    /**
     * @Route("/", name="main")
     */
    public function __invoke(ContainerBagInterface $parameters)
    {
        return new Response('Password: "'.$parameters->get('password').'"');
    }
}

<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
    /**
     * @Route("/", name="main")
     * @Template("main/index.html.twig")
     */
    public function __invoke(string $password): array
    {
        return compact('password');
    }
}

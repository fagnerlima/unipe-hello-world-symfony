<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/aula", name="aula")
 */
class AulaController extends AbstractController
{
    /**
     * @Route("/teste/{nome}")
     */
    public function hello(string $nome): Response
    {
        return new Response(sprintf('Hello, %s!', $nome));
    }
}

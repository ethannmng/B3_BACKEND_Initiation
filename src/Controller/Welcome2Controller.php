<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Welcome2Controller extends AbstractController
{
    #[Route('/welcome2/{name}', name: 'app_welcome2')]
    public function index(string $name): Response
    {
        return $this->render('welcome/index2.html.twig', [
            'name' => $name,
        ]);
    }
}
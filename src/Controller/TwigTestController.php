<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TwigTestController extends AbstractController
{
    #[Route('/test', name: 'test_twig')]
    public function index(): Response
    {
        $users = [
            ['name' => 'Alice', 'isAdmin' => true, 'post' => 52],
            ['name' => 'Bob', 'isAdmin' => false, 'post' => 0],
            ['name' => 'Charlie', 'isAdmin' => false, 'post' => 2],
        ];

        return $this->render('welcome/decouverte.html.twig', [
            'page_title' => 'Page de Démonstration',
            'users' => $users,
            'simple_text' => 'Ceci est un texte simple.'
        ]);
    }
}
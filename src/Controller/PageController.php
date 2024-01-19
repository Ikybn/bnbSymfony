<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'paris')]
    public function paris(): Response
    {
        return $this->render('page/city.html.twig', [
            'title' => 'Paris',
            'background' => 'paris',
        ]);
    }
    #[Route('/', name: 'lasvegas')]
    public function lasvegas(): Response
    {
        return $this->render('page/city.html.twig', [
            'title' => 'Las Vegas',
            'background' => 'Las Vegas',
        ]);
    }
    #[Route('/', name: 'kyoto')]
    public function kyoto(): Response
    {
        return $this->render('page/city.html.twig', [
            'title' => 'Kyoto',
            'subtitle' => '京都',
            'background' => 'Kyoto',
        ]);
    }
    #[Route('/', name: 'sydney')]
    public function sydney(): Response
    {
        return $this->render('page/city.html.twig', [
            'title' => 'Sydney',
            'background' => 'Sydney',
        ]);
    }
    #[Route('/', name: 'hongkong')]
    public function hongkong(): Response
    {
        return $this->render('page/city.html.twig', [
            'title' => 'Hong Kong',
            'subtitle' => '香港',
            'background' => 'Hong Kong',
        ]);
    }
}

<?php

namespace App\Controller;

use App\Repository\ChaussureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'index.index', methods: ['GET'])]
    public function index(ChaussureRepository $repository): Response
    {
        return $this->render('main/index.html.twig', [
            'chaussure' => $repository->findAll()
        ]);
    }
}
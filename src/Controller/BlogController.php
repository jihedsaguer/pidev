<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/admin', name: 'app_admin')]
    public function indexadmin(): Response
    {
        return $this->render('admin/index.html.twig'
            
        );
    }
    #[Route('/client', name: 'app_client')]
    public function indexclient(): Response
    {
        return $this->render('client/index.html.twig'
            
        );
    }
}

<?php

namespace WA\BoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public function homePageAction()
    {
        $em = $this->getDoctrine()->getManager();

        //exit(var_dump($categories));
        $categories ="bonjour";

        return $this->render('WABoBundle:Pages:homePage.html.twig', array
            ('categories' => $categories

            ));

    }

    public function homeAction()
    {
        return $this->render('WABoBundle:Pages:home.html.twig');
    }
}
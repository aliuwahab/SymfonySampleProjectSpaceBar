<?php
/**
 * Created by PhpStorm.
 * User: aliuwahab
 * Date: 26/02/2019
 * Time: 11:36 AM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response("OMG, I am here");
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            'This is comment one',
            'This is comment two',
            'This is comment three',
            'This is comment four',
            'This is comment five',
        ];
        return $this->render('articles/show.html.twig', [
           'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments
        ]);
    }





}
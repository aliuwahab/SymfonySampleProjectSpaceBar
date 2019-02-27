<?php
/**
 * Created by PhpStorm.
 * User: aliuwahab
 * Date: 26/02/2019
 * Time: 11:36 AM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
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
        return new Response('Future page to show '. $slug);
    }





}
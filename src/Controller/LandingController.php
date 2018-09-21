<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LandingController
{
    /** 
     * @Route("/promocion")
     */
    public function promocion()
    {
        return new Response('<html><body><h1>prueba</h1></body></html>');
    }    
}
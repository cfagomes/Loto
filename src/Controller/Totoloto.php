<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
* Class Totoloto
* @package App\Controller
*/

class Totoloto
{
    
    /**
    * @Route("/Totoloto")
    * @return Response
    */
    public function numbers()
    {
    return new Response(
        "<h2>Totoloto</h2>
            <ul> 
            <li>23</li>
            </ul>"
        );
    }
}

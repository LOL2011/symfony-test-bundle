<?php

namespace TestController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TestController extends AbstractController
{
    /**
     * @Route("/page1", name="test_page_1")
     */

	
    public function page1Action(): Response
    {

        return new Response(
            '<html><body>Click here: <a href="/page2">Page 2</a></body></html>'
        );
    }
    
     /**
     * @Route("/page2", name="test_page_2")
     */

    public function page2Action(): Response
    {

        return new Response(
            '<html><body>Click here: <a href="/page1">Page 1</a></body></html>'
        );
    }
}

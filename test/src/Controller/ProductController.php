<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use TestBundle;


class ProductController extends AbstractController
{
     /**
     * @Route("/listing-products", name="product_list")
     */

    public function listingProductsAction(): Response
    {
	return new Response(
            '<html><body>Hello:  <a href="/page1">Page 1</a> /  <a href="/page2">Page 2</a>
            
            
            
            </body></html>'
        );
    }
    
}

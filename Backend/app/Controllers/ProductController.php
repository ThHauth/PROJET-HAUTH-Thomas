<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use \Firebase\JWT\JWT;
use Doctrine\ORM\EntityManager;
use Product;

class ProductController
{
    private $entityManager;

    public function __construct(EntityManager $em)
    {
        $this->entityManager = $em;
    }

    function getProducts(Request $request,Response $response) {
        $productRepository= $this->entityManager->getRepository('Product');

        $products = $productRepository->findAll();
        $productsArray = [];
        foreach($products as $product){
            array_push($productsArray,[
                "id"=>$product->getIdProduct(),
                "nom"=>$product->getNom(),
                "imageSource"=>$product->getImageSource(),
                "description"=>$product->getDescription(),
                "prix"=>$product->getPrix(),
                "disponible"=>$product->getDisponible(),
                "plateforme"=>$product->getPlateforme()
            ]);
        }
                
        $response->getBody()->write(json_encode($productsArray));
        return $response->withStatus(200);
        
          
        } 
}
<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    #[Route('/cart', name: 'cart')]
    public function index()
    {
        $cart = $this->getDoctrine()->getRepository(Cart::class)->findAll();
        return $this->render(
            'cart/index.html.twig',
            [
                'cart' => $cart
            ]
        );

    }
    #[Route('/cart/add/{id}', name: 'cart_add')]
    public function addToCart($id)
    {
        $cart = new Cart();
        $products = $this->getDoctrine()->getRepository(Product::class)->find($id);
        $cart->addProduct($products);
        $manager = $this->getDoctrine()->getManager();
        $manager->persist($cart);
        $manager->flush();
        $this->addFlash('Success', "Add Product to Cart successfully");

        return $this->redirectToRoute('index');
    }
}

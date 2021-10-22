<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'index')]
    public function index(): Response
    {
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();
        return $this->render('product/index.html.twig', ['products' =>$products]); 
    }

    #[Route('/product/detail/{id}', name: 'detail')]
    public function detail($id): Response
    {
       $product = $this ->getDoctrine()->getRepository(Product::class)->find($id);
       if($product==null){
           $this->addFlash('Error','Book is not existed!');
           return $this->redirectToRoute('index');
       }
       else{
           return $this->render('product/detail.html.twig', ['product'=>$product]);
       }
    }
    
    #[Route('/product/delete/{id}', name: 'delete')]
    public function delete($id): Response
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        if($product==null){
            $this->addFlash('Error','Product is not existed!');
        }
        else{
            $manager = $this->getDoctrine()->getManager();
            $manager->remove($id);
            $this->addFlash('Error','Delete successfully');
        }
        return $this->redirectToRoute('index');
    }

    #[Route('/product/add', name: 'add')]
    public function add(Request $request)
    {
       $product = new Product();
       $form = $this->createForm(Product::class,$product);
       $this->$form->handleRequest($request);
       
       if ($form->isSubmitted() && $form->isValid()) { 
           
       }
    }

    #[Route('/product/edit/{id}', name: 'edit')]
    public function edit(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}

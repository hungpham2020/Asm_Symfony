<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

use function PHPUnit\Framework\throwException;

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
            $manager->remove($product);
            $manager->flush();
            $this->addFlash('Success','Delete successfully!');
        }
        return $this->redirectToRoute('index');
    }



    #[Route('/product/add', name: 'add')]
    public function add(Request $request): Response
    {
       $product = new Product();
       $form = $this->createForm(ProductType::class,$product);
       $form->handleRequest($request);
       
       if ($form->isSubmitted() && $form->isValid()) { 
           $img = $product->getImg();
           $imgName = uniqid();
           $imgExtension =$img->guessExtension();
           $imageName = $imgName.".".$imgExtension;

           try{
               $img->move($this->getParameter('product_img'), $imageName);
           }
           catch(FileException $e)
           {
                throwException($e);
           }

           $product ->setImg($imageName);

           $manager = $this->getDoctrine()->getManager();
           $manager->persist($product);
           $manager->flush();

           $this->addFlash('Success',"Add success product!");
           return $this->redirectToRoute('index');
       }
       return $this->render("product/add.html.twig",["form" => $form->createView()]);
    }



    #[Route('/product/edit/{id}', name: 'edit')]
    public function edit(Request $request, $id): Response
    {
      $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
      $form =$this->createForm(ProductType::class, $product);
      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid()){
          $file = $form['img']->getData();
          if($file !=null){
              $img = $product->getImg();
              $imgName = uniqid();
              $imgExtension = $img->guessExtension();
              $imageName = $imgName.".".$imgExtension;

              try{
                  $img -> move($this -> getParameter('product_img'),$imageName);
              }
              catch(FileException $e)
              {
                    throwException($e);
              }
              $product -> setImg($imageName);
          }

          $manager = $this->getDoctrine()->getManager();
          $manager-> persist($product);
          $manager-> flush();

          $this ->addFlash('Success',"Edit product success!");
          return $this ->redirectToRoute('index');
      }
      return $this ->render("product/edit.html.twig",["form"=> $form->createView()]);
    }
}

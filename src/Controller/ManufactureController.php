<?php

namespace App\Controller;

use App\Entity\Manufacture;
use App\Form\ManufactureType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
/**
 * @IsGranted("ROLE_ADMIN")
 */
class ManufactureController extends AbstractController
{
    #[Route('/manufacture', name: 'manufacture')]
    public function index(): Response
    {
        $manufactures = $this->getDoctrine()->getRepository(Manufacture::class)->findAll();
        return $this->render('manufacture/index.html.twig', ['manufactures' =>$manufactures]); 
    }

    #[Route('/manufacture/detail/{id}', name:'manufacture_detail')]
    public function detail($id){
        $manufacture = $this->getDoctrine()->getRepository(Manufacture::class)->find($id);
        if($manufacture == null){
            $this->addFlash('Error',"This manufacture is not exist!");
            return $this->redirectToRoute('manufacture');
        }
        else{
            return $this->render('manufacture/detail.html.twig',['manufacture'=>$manufacture]);
        }
    }

    #[Route('manufacture/delete/{id}',name:'manufacture_delete')]
    public function delete($id){
        $manufacture = $this->getDoctrine()->getRepository(Manufacture::class)->find($id);
        if($manufacture==null){
            $this->addFlash('Error','This manufacture is not existed!');
            return $this->redirectToRoute('manufacture');
        }
        else{
            $manager = $this->getDoctrine()->getManager();
            $manager ->remove($manufacture);
            $manager->flush();
            $this->addFlash('Success','Delete successfully!');
        }
        return $this->redirectToRoute('manufacture');
    }

    #[Route('manufacture/add',name:'manufacture_add')]
    public function add(Request $request){
        $manufacture = new Manufacture();
        $form = $this->createForm(ManufactureType::class,$manufacture);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manage = $this->getDoctrine()->getManager();
            $manage->persist($manufacture);
            $manage->flush();

            $this->addFlash('Success',"Add success manufacture!");
           return $this->redirectToRoute('manufacture');
        }

        return $this->render("manufacture/add.html.twig",["form" => $form->createView()]);
    }


    #[Route('manufacture/edit/{id}',name:'manufacture_edit')]
    public function edit(Request $request, $id){
        $manufacture = $this->getDoctrine()->getRepository(Manufacture::class)->find($id);
        $form = $this->createForm(ManufactureType::class,$manufacture);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manage = $this->getDoctrine()->getManager();
            $manage->persist($manufacture);
            $manage->flush();

            $this->addFlash('Success',"Edit success manufacture!");
           return $this->redirectToRoute('manufacture');
        }

        return $this->render("manufacture/add.html.twig",["form" => $form->createView()]);
    }
}



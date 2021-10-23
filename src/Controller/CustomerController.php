<?php

namespace App\Controller;

use App\Entity\Customer;
use App\Form\CustomerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use function PHPUnit\Framework\throwException;
/**
 * @IsGranted("ROLE_ADMIN")
 */
class CustomerController extends AbstractController
{
    
    #[Route('/customer', name: 'customer_index')]
    public function customerIndex(): Response
    {
        $cuses = $this->getDoctrine()->getRepository(Customer::class)->findAll();
        return $this->render('customer/index.html.twig', [
            'cuses' => $cuses
        ]);
    }
    #[Route('/customer/view/{id}', name: 'customer_detail')]
    public function customerDetail($id)
    {
        $cus = $this->getDoctrine()->getRepository(Customer::class)->find($id);
        if($cus == null)
        {
            $this->addFlash("Error", "Customer is not existed");
            return $this->redirectToRoute('customer_index');
        }
        else
        {
            return $this->render(
                'customer/detail.html.twig',
                [
                    'cus' => $cus
                ]
            );
        }
    }

    #[Route('/customer/delete/{id}', name: 'customer_delete')]
    public function cusDelete($id)
    {
        $cus = $this->getDoctrine()->getRepository(Customer::class)->find($id);
        if($cus == null)
        {
            $this->addFlash('Error', "Customer is not existed");
        }
        else
        {
            $manager = $this->getDoctrine()->getManager();
            $manager->remove($cus);
            $manager->flush();
            $this->addFlash('Success', "Delete customer successfully");
        }
        return $this->redirectToRoute('customer_index');
    }

    #[Route('/customer/add', name: 'customer_add')]
    public function customerAdd(Request $request)
    {
        $cus = new Customer();
        $form = $this->createForm(CustomerType::class, $cus);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $image = $cus->getAvatar();

            $imgName = uniqid();

            $imgExtension = $image->guessExtension();

            $imageName = $imgName. "." . $imgExtension;

            try{
                $image->move($this->getParameter('cus_avt'),$imageName);
            }
            catch(FileException $e){
                throwException($e);
            }

            $cus->setAvatar($imageName);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cus);
            $manager->flush();

            $this->addFlash('Success', "Add new Customer successfull");
            return $this->redirectToRoute('customer_index');
        }
        return $this->render(
            "customer/add.html.twig",
            [
                "form" =>$form->createView()
            ]
        );
    }
    #[Route('/customer/edit/{id}', name: 'customer_edit')]
    public function cusEdit($id, Request $request)
    {
        $cus = $this->getDoctrine()->getRepository(Customer::class)->find($id);
        $form = $this ->createForm(CustomerType::class, $cus);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $upload = $form['avatar']->getData();
            if($upload != null)
            {
                $image = $cus->getAvatar();
                $imgName = uniqid();

                $imgExtension = $image->guessExtension();

                $imageName = $imgName. "." .$imgExtension;

                try{
                    $image->move($this->getParameter('cus_avt'),$imageName);
                }
                catch(FileException $e){
                    throwException($e);
                }

                $cus->setAvatar($imageName);
            }

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cus);
            $manager->flush();

            $this->addFlash('Success', "Update customer successfully");
            return $this->redirectToRoute('customer_index');
        }
        return $this->render(
            "customer/edit.html.twig",
            [
                "form" => $form->createView()
            ]
        );
    }
}
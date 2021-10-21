<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @IsGranted("ROLE_USER")
 */
class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category_index")
     */
    public function categoryIndex()
    {
        $cats = $this->getDoctrine()->getRepository(Category::class)->findAll();
        return $this->render(
            'category/index.html.twig',
            [
                'cats' => $cats
            ]
        );
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/category/delete/{id}", name = "category_delete")
     */
    public function categoryDelete ($id) {
        $cats = $this->getDoctrine()->getRepository(Category::class)->find($id);
        if ($cats == null) {
            $this->addFlash('Error', 'category is not existed');
        } else {
            $manager = $this->getDoctrine()->getManager();
            $manager->remove($cats);
            $manager->flush();
            $this->addFlash('Success', 'Category has been deleted successfully !');   
        }
        return $this->redirectToRoute('category_index');
    }

    /**
     * @IsGranted("ROLE_MANAGER")
     * @Route("/category/add", name="category_add")
     */
    public function categoryAdd(Request $request) {
        $cats = new Category();
        $form = $this->createForm(CategoryType::class,$cats);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cats);
            $manager->flush();

            $this->addFlash("Success","Add new category successfully!!");
            return $this->redirectToRoute('category_index');
        }

        return $this->render(
            "category/add.html.twig",
            [
                "form" => $form->createView()
            ]
            );
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/category/edit/{id}", name="category_edit")
     */
    public function categoryEdit(Request $request, $id) {
        $cats = $this->getDoctrine()-> getRepository(Category::class)->find($id);
        $form = $this->createForm(CategoryType::class,$cats);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cats);
            $manager->flush();

            $this->addFlash("Success","Edit magazine successfully!!");
            return $this->redirectToRoute('category_index');
        }

        return $this->render(
            "category/edit.html.twig",
            [
                "form" => $form->createView()
            ]
            );
    }
}

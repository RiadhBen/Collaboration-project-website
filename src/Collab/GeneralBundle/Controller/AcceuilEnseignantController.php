<?php
/**
 * Created by PhpStorm.
 * User: riadh
 * Date: 02/04/15
 * Time: 16:33
 */

namespace Collab\GeneralBundle\Controller;


use Collab\GeneralBundle\Entity\Sujet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Collab\GeneralBundle\Form\SujetType;



Class AcceuilEnseignantController extends Controller
{

    /**
     * @Route("enseignant/acceuil")
     * @Template()
     */
    public function acceuilEnsAction()
    {

        return $this->render('CollabGeneralBundle::acceuil_enseignant.html.twig');
    }
    /**
     * @Route("enseignant/ajout/sujets")
     * @Template()
     */
    public  function ajoutSujetsAction(Request $request)
    {
        $sujet = new Sujet();
        $form = $this->get('form.factory')->create(new SujetType(), $sujet);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sujet);
            $em->flush();
            return $this->redirect($this->generateUrl('collab_general_acceuilenseignant_acceuilens'));//redirect win t7eb
            $em->flush();
        }
        return $this->render('CollabGeneralBundle::ajoutSujet.html.twig',array('form' => $form->createView(),));
    }

//
//    /**
//     * @Route("enseignant/ajout/sujets")
//     * @Template()
//     */
//    public function ajoutSujetAction(Request $request)
//    {
//
//        $sujet = new Sujet();
//        $sujet->setName('Write a blog post');
//        $sujet->setDateAjout(new \DateTime('tomorrow'));
//        $sujet->setDescription('Write a blog post');
//        $sujet->setFiliere('Write a blog post');
//
//        $form = $this->createFormBuilder($sujet)
//            ->add('name', 'text')
//            ->add('description', 'text')
//            ->add('filiere', 'text')
//            ->add('date_ajout', 'date')
//            ->add('save', 'submit')
//            ->getForm();
//
//        $form->handleRequest($request);
//
//        if ($form->isValid()) {
//            // perform some action, such as saving the task to the database
//
//            return $this->redirectToRoute('task_success');
//        }
//            return $this->render('CollabGeneralBundle::AcceuilEnseignant:ajoutSujet.html.twig'
//                , array(
//                    'form' => $form->createView(),
//                ));
//    }
}
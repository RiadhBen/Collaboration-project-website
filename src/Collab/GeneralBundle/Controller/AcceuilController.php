<?php
/**
 * Created by PhpStorm.
 * User: riadh
 * Date: 02/04/15
 * Time: 16:33
 */

namespace Collab\GeneralBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

Class AcceuilController extends Controller{

    /**
     * @Route("etudiant/acceuil")
     * @Template()
     */
public  function acceuilAction()
{

    return $this->render('CollabGeneralBundle::acceuil.html.twig');
}
    /**
     * @Route("etudiant/sujets")
     * @Template()
     */
    public  function sujetsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository('CollabGeneralBundle:Sujet');
        $sujets = $rep->findAll();
        return $this->render('CollabGeneralBundle::sujets.html.twig',array(
            'sujets'=>$sujets
        ));
    }

    /**
     * @Route("etudiant/sujets/{id}/description")
     * @Template()
     */
    public  function sujetsDescriptionAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository('CollabGeneralBundle:Sujet');
        $sujets = $rep->find($id);
        return $this->render('CollabGeneralBundle::description.html.twig',array('sujets'=>$sujets));
    }


}
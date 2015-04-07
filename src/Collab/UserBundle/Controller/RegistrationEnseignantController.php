<?php

namespace Collab\UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class RegistrationEnseignantController extends Controller
{


    /**
     * @Route("/register/enseignant")
     * @Template()
     */

    public function registerAction()
    {
        return $this->container
            ->get('pugx_multi_user.registration_manager')
            ->register('Collab\UserBundle\Entity\Enseignant');
    }
}
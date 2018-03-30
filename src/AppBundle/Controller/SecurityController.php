<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;


class SecurityController extends Controller
{
    /**
     * @Route("/login")
     * @Method("GET")
     *
     */
    public function loginAction()
    {
        $authentification = $this->get('security.authentication_utils');

        return $this->render('security/login.html.twig', array(
            'lastUsername' => $authentification->getLastUsername(),
            'error' => $authentification->getLastAuthenticationError()
        ));
    }

    /**
     * @Route("/login_check")
     * @Method("POST")
     * @throws \Exception
     */
    public function loginCheckAction()
    {
        throw new \Exception('this method must never be call');
    }

    /**
     * @Route("/logout")
     * @Method("GET")
     * @throws \Exception
     */
    public function logOutAction()
    {
        throw new \Exception('this method must never be called even in log out');
    }
}

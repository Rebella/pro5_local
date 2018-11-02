<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $utils)
    {
        // replace this example code with whatever you need
        $error = $utils->getLastAuthenticationError();

        $lastUsername = $utils->getLastUsername();


        return $this->render('pages/login.html.twig', [
            'error' => $error,
            'last_username' => $lastUsername
            ]);
    }

    /**
     * @Route("/logout", name="logout")
     * @throws \RuntimeException
     */
    public function logoutAction() {
        throw new \RuntimeException('This should never be called directly.');
    }
}

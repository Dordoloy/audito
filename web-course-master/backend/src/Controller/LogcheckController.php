<?php

namespace App\Controller;

use Lexik\Bundle\JWTAuthenticationBundle\Security\Guard\JWTTokenAuthenticator;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LogcheckController extends AbstractController
{
    /**
     * @Route("/logcheck", name="logcheck")
     */
    public function index(Request $request)
    {
        /*$preAuthToken = $jwtAuthenticator->getCredentials($request);
        $response['user'] = $jwtManager->decode($preAuthToken);
        return $this->json($response);*/
        //$token = $this->container->get('security.token_storage')->getToken();
        //$user = $token->getUser();
        //return $this->json($this->getUser()->getFirstnameUser());
        /*$preAuthToken = $this->container->get('security.token_storage')->getToken();
        $tmp = $this->container->get('lexik_jwt_authentication.jwt_manager')->decode($preAuthToken);
        return $this->json($tmp);*/
        return new Response($this->getUser());
    }
}

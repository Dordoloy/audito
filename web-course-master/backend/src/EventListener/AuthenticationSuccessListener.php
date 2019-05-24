<?php
// src/App/EventListener/AuthenticationSuccessListener.php

namespace App\EventListener;

use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;
use Symfony\Component\Security\Core\User\UserInterface;

class AuthenticationSuccessListener {
	/**
	* @param AuthenticationSuccessEvent $event
	*/
	public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event)
	{
		$data = $event->getData();
		$user = $event->getUser();

		if (!$user instanceof UserInterface) {
		return;
		}

		$data['user'] = array(
		'roles' => $user->getRoles(),
        'id' => $user->getId(),
        'usertype' => $user->getIdUsertype(),
        'firstname' => $user->getFirstnameUser(),
        'lastname' => $user->getLastnameUser(),
        'phone' => $user->getPhoneUser(),
        'email' => $user->getEmail(),
            'type' => $user->getType(),
		);

		$event->setData($data);
	}
}

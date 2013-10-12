<?php

namespace Ahs\BlogBundle\Controller;

use Ahs\BlogBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        $user = new User();
        $user->setUsername('olivierparent');

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user); // Manage a User object for persistence.
        $entityManager->flush(); // Actually persist all objects that need to be persisted.
        
        return $user->getId();
    }
}

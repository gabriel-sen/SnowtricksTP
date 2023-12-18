<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AccountCreationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountCreationController extends AbstractController
{
    #[Route('/account/creation', name: 'app_account_creation')]
    public function index(): Response
    {
        // On créer un noubeau compte
        $account = new User();
        //on créer le formulaire 
        $accountCreationForm = $this->createForm(AccountCreationType::class, $account);

        return $this->render('account_creation/index.html.twig', [
            'accountCreationForm' => $accountCreationForm ->createView()
        ]);
    }
}

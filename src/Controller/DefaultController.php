<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Service\RuleManager;
use App\Service\IsNumericRule;
use App\Service\GreaterThanRule;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="Landingpage")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}

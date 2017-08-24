<?php

namespace AppBundle\Controller;


use AppBundle\Entity\classList;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SingleClassController extends Controller
{
    /**
     * @Route("/panel", name="panel")
     */
    public function indexAction(Request $request,$className)
    {
        $repository = $this->getDoctrine()->getRepository(classList::class);
        $classList = $repository->findAll();



        // replace this example code with whatever you need
        return $this->render('home/index.html.twig',[
            'classList'=>$classList,
        ]);
    }
}

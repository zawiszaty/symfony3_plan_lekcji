<?php

namespace AppBundle\Controller;


use AppBundle\Entity\classList;
use AppBundle\Entity\plan;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PanelController extends Controller
{
    /**
     * @Route("/panel", name="panel")
     */
    public function indexAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(classList::class);
        $classList = $repository->findAll();



        // replace this example code with whatever you need
        return $this->render('panel/index.html.twig',[
            'classList'=>$classList,
        ]);
    }

    /**
     * @Route("/panel/edit/{className}", name="editSingleClass")
     */
    public function singleClassAction(Request $request,$className)
    {
        $repository = $this->getDoctrine()->getRepository(plan::class);
        $plan = $repository->findByClass($className);

dump($plan);

        // replace this example code with whatever you need
        return $this->render('edit/index.html.twig',[
            'classList'=>$plan,
        ]);
    }
}

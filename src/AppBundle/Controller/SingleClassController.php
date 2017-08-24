<?php

namespace AppBundle\Controller;


use AppBundle\Entity\plan;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SingleClassController extends Controller
{
    /**
     * @Route("/{className}", name="singleClass")
     */
    public function indexAction(Request $request,$className)
    {
        $repository = $this->getDoctrine()->getRepository(plan::class);
        $plan = $repository->findByClass($className);



        // replace this example code with whatever you need
        return $this->render('home/single.html.twig',[
            'classList'=>$plan,
        ]);
    }
}

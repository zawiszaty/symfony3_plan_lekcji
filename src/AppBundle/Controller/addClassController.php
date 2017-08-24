<?php
/**
 * Created by PhpStorm.
 * User: zawisza
 * Date: 24.08.2017
 * Time: 10:57
 */

namespace AppBundle\Controller;

use AppBundle\Entity\classList;
use AppBundle\Entity\plan;
use AppBundle\Form\addType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class addClassController extends Controller
{
    /**
     * @Route("/panel/add", name="addClass")
     */
    public function indexAction(Request $request)
    {
        $classList = new classList();
        $form = $this->createForm(addType::class, $classList);
        $form->add('save', SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $class = $form->getData();


            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $em = $this->getDoctrine()->getManager();
            $em->persist($class);
            $em->flush();

            for ($i = 0; $i < 9; $i++) {
                $plan = new plan();
                $plan->setClass($class->getClassName());
                $plan->setPoniedzialek('brak');
                $plan->setSalap('brak');
                $plan->setWtorek('brak');
                $plan->setSalaw('brak');
                $plan->setSroda('brak');
                $plan->setSalas('brak');
                $plan->setCzwartek('brak');
                $plan->setSalac('brak');
                $plan->setPiatek('brak');
                $plan->setSalapi('brak');
                $em->persist($plan);
                $em->flush();
            }


            $this->addFlash(
                'notice',
                'Class ' . $class->getClassName() . ' Added'
            );
            return $this->redirectToRoute('panel');
        }
        // replace this example code with whatever you need
        return $this->render('add/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
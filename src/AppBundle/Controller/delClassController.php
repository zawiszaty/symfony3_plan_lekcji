<?php
/**
 * Created by PhpStorm.
 * User: zawisza
 * Date: 24.08.2017
 * Time: 11:36
 */

namespace AppBundle\Controller;


use AppBundle\Entity\classList;
use AppBundle\Entity\plan;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class delClassController extends Controller
{
    /**
     *
     * @Route("/panel/del/{id}", name="delClass")
     *
     */
    public function indexAction(Request $request, $id)
    {
        $repositoryClassList = $this->getDoctrine()->getRepository(classList::class);
        $repositoryPlan = $this->getDoctrine()->getRepository(plan::class);

        $class = $repositoryClassList->find($id);









        $em = $this->getDoctrine()->getManager();
        $em->remove($class);
        $em->flush();
        $plan = $repositoryPlan->findByClass( $class->getClassName());
        foreach ($plan as $item)
        {
            $em->remove($item);
            $em->flush();
        }
        $this->addFlash(
            'notice',
            'Class ' . $class->getClassName() . ' deleted'
        );
        return $this->redirectToRoute('panel');
    }


}
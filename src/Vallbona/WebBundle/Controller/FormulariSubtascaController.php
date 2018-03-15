<?php 

namespace Vallbona\WebBundle\Controller;
use Vallbona\WebBundle\Entity\Subtasca;
use Vallbona\WebBundle\Form\SubtascaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormulariSubtascaController extends Controller
{
    public function indexAction()
    {
        return $this->render('VallbonaWebBundle:form:createSubtasca.html.twig');
    }

    public function createAction(Request $request) {
    	$titol = "titol del formulari"; 
    	$subtasca = new Subtasca(); 
    	$form = $this->createForm(SubtascaType::class, $subtasca);
        $form->handleRequest($request);
        if($form->isValid()){
        $status = "Formulari vàlid";
        //enviem les dades a la vista per visualitzar-les
            $subtasca->setNom($form->get('nom')->getData());
            $subtasca->setDescripcio($form->get('descripcio')->getData());
            $subtasca->setDataInici($form->get('dataInici')->getData());
            $subtasca->setDataFinal($form->get('dataFinal')->getData());
            $em = $this->getDoctrine()->getManager();
            $em->persist($subtasca);
            $flush = $em->flush();
        }
        else{
        $status = null;
        $data = null;
        }
    	return $this->render('VallbonaWebBundle:form:createSubtasca.html.twig', array( 
    		'titol' => $titol, 
    		'form' =>$form->createView(),
    		'status' => $status,
    		
    	));
    }
}
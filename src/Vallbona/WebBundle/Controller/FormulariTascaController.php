<?php 

namespace Vallbona\WebBundle\Controller;
use Vallbona\WebBundle\Entity\Tasca;
use Vallbona\WebBundle\Form\TascaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormulariTascaController extends Controller
{
    public function indexAction()
    {
        return $this->render('VallbonaWebBundle:form:createTasca.html.twig');
    }

    public function createAction(Request $request) {
    	$titol = "titol del formulari"; 
    	$tasca = new Tasca(); 
    	$form = $this->createForm(TascaType::class, $tasca);
        $form->handleRequest($request);
        if($form->isValid()){
        $status = "Formulari vàlid";
        //enviem les dades a la vista per visualitzar-les
            $tasca->setNom($form->get('nom')->getData());
            $tasca->setDescripcio($form->get('descripcio')->getData());
            $tasca->setDataInici($form->get('dataInici')->getData());
            $tasca->setDataFinal($form->get('dataFinal')->getData());
            $em = $this->getDoctrine()->getManager();
            $em->persist($tasca);
            $flush = $em->flush();
        }
        else{
        $status = null;
        $data = null;
        }

    	return $this->render('VallbonaWebBundle:form:createTasca.html.twig', array( 
    		'titol' => $titol, 
    		'form' =>$form->createView(),
    		'status' => $status,
    		
    	));
    }

 public function listarAction()
    {
        $tasques = $this->getDoctrine()->getRepository('VallbonaWebBundle:Tasca')->findAll(); 
        return $this->render('VallbonaWebBundle:lista:listaTasques.html.twig', array('tasques' => $tasques));

    }

}
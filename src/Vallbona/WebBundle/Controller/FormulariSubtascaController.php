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
        $data = array(
        'nom' => $form->get('nom')->getData(),
        'descripcio' => $form->get('descripcio')->getData(),
        'dataInici' => $form->get('dataInici')->getData(),
        'dataFinal' => $form->get('dataFinal')->getData(),    
        'idTasca' =>$form->get('idTasca')->getData(),
        );
        }
        else{
        $status = null;
        $data = null;
        }

    	return $this->render('VallbonaWebBundle:form:createSubtasca.html.twig', array( 
    		'titol' => $titol, 
    		'form' =>$form->createView(),
    		'status' => $status,
    		'data' => $data, 
    	));
    }
}
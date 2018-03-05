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
        $data = array(
        'nom' => $form->get('nom')->getData(),
        'dataInici' => $form->get('dataInici')->getData(),
        'dataFinal' => $form->get('dataFinal')->getData(),
        'descripcio' => $form->get('descripcio')->getData(),
        );
        }
        else{
        $status = null;
        $data = null;
        }

    	return $this->render('VallbonaWebBundle:form:createTasca.html.twig', array( 
    		'titol' => $titol, 
    		'form' =>$form->createView(),
    		'status' => $status,
    		'data' => $data, 
    	));
    }
}
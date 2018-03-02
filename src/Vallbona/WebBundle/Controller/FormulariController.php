<?php 

namespace Vallbona\WebBundle\Controller;
use Vallbona\WebBundle\Entity\Usuari;
use Vallbona\WebBundle\Form\UsuariType;
use Symfony\Component\HttpFoundation\Request;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormulariController extends Controller
{
    public function indexAction()
    {
        return $this->render('VallbonaWebBundle:form:create.html.twig');
    }

    public function createAction(Request $request) {
    	$titol = "titol del formulari"; 
    	$usuari = new Usuari(); 
    	$form = $this->createForm(UsuariType::class, $usuari);

$form->handleRequest($request);
if($form->isValid()){
$status = "Formulari vàlid";
//enviem les dades a la vista per visualitzar-les
$data = array(
'nom' => $form->get('nom')->getData(),
'cognom' => $form->get('cognom')->getData(),
'correo' => $form->get('correo')->getData(),
);
}else{
$status = null;
$data = null;
}

    	return $this->render('VallbonaWebBundle:form:create.html.twig', array( 
    		'titol' => $titol, 
    		'form' =>$form->createView(),
    		'status' => $status,
    		'data' => $data, 
    	));
    }
}
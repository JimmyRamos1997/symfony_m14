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
        $data ="";
        $form->handleRequest($request);
        if($form->isValid()){
            $status = "Formulari vàlid";
            $usuari->setNom($form->get('nom')->getData());
            $usuari->setCognom($form->get('cognom')->getData());
            $usuari->setCorreo($form->get('correo')->getData());
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuari);
            $flush = $em->flush();
        }else{
            $status = null;
            $data = null;
        }

        return $this->render('VallbonaWebBundle:form:create.html.twig', array( 
          'titol' => $titol, 
          'form' =>$form->createView(),
          'status' => $status,
          ));
    }
    public function listarAction()
    {
        $users = $this->getDoctrine()->getRepository('VallbonaWebBundle:Usuari')->findAll(); 
        return $this->render('VallbonaWebBundle:lista:listaUsuarios.html.twig', array('users' => $users));

    }

}
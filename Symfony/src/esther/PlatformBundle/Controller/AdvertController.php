<?php
// src/esther/PlatformBundle/Controller/AdvertController.php
namespace esther\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller; //contrôleur de base de Symfony
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
    	//Cette syntaxe $this->get('mon_service') depuis les contrôleurs retourne un objet dont le nom est "mon_service" ,
    	//cet objet permet ensuite d'effectuer quelques actions. Par exemple ici l'objet "templating" permet de récupérer
    	//le contenu d'un template grâce à sa méthode render .
    	$content = $this->get('templating')->render('estherPlatformBundle:Advert:index.html.twig',
    		array(
    			'pseudo' => 'esther44'
    			)
    		);
        return new Response($content);
    }

    public function byebyeAction()
    {
    	$content = $this->get('templating')->render('estherPlatformBundle:Advert:byebye-world.html.twig',
    		array(
    			'pseudo' => 'esther44',
    			'prenom' => 'esther',
    			'age'	 => 24
    			)
    		);
        return new Response($content);
    }
}

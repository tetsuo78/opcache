<?php

namespace OpcacheBundle\Controller;

use OpcacheBundle\Entity\Opcache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * @Route("/", name="opcache_index")
	 */
    public function indexAction()

    {
		$dataModel = new Opcache();


		return $this->render('OpcacheBundle:Default:index.html.twig',['dataModel' => $dataModel]);
    }


	/**
	 * @Route("/reset/", name="opcache_reset")
	 */
	public function resetAction()
	{
		$reset= opcache_reset();


		return $this->redirectToRoute('opcache_index');
	}


}

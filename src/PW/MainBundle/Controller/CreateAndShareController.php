<?php

namespace PW\MainBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use PW\MainBundle\Entity\Message;
use PW\MainBundle\Entity\Document;


class CreateAndShareController extends Controller
{


	public function indexAction()
	{

		$user = $this->getUser();

		$repository = $this
		->getDoctrine()
		->getManager()
		->getRepository('PWMainBundle:Groupe')
		;

		$listGroupes = $repository->findAll();

		$arraygrp = [];

		$em = $this->getDoctrine()->getManager();

		foreach ($listGroupes as $group) 
		{
			$id = $group->getId();
			$url = $this->get('router')->generate(
            	'pw_main_chat', // 1er argument : le nom de la route
            	array('idg' => $id)); // 2e argument : les valeurs des paramètres

			$arraygrp[] = array(
				'id' => $group->getId(),
				'titre' => $group->getTitre(),
				'url' => $url
			);

		}

		

		return $this->render('PWMainBundle:Default:index.html.twig',array('name' =>$user->getUsername(), 'arraygrp' => $arraygrp));
	}


	public function authAction()
	{
		
	}












	public function chatAction($idg, Request $request)


	{

		$em = $this->getDoctrine()->getManager();



		$message = new Message();


		$formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $message);

		$formBuilder
		->add('content',   TextareaType::class)
		->add('envoyer',      SubmitType::class)
		;

		$form = $formBuilder->getForm();


		$repository = $em->getRepository('PWMainBundle:Groupe')
		;

		$listGroupes = $repository->findAll();

		$arraygrp = [];

		$em = $this->getDoctrine()->getManager();

		foreach ($listGroupes as $group) 
		{
			$id = $group->getId();
			$url = $this->get('router')->generate(
            	'pw_main_chat', // 1er argument : le nom de la route
            	array('idg' => $id)); // 2e argument : les valeurs des paramètres

			$arraygrp[] = array(
				'id' => $group->getId(),
				'titre' => $group->getTitre(),
				'url' => $url
			);

		}

		$user = $this->getUser();
		$currGroup = $repository->find($idg);

		$urlChat = $this->get('router')->generate(
            	'pw_main_chat', // 1er argument : le nom de la route
            	array('idg' => $id));

		$urlFiles = $this->get('router')->generate(
            	'pw_main_files', // 1er argument : le nom de la route
            	array('idg' => $id));

		$urlProject = $this->get('router')->generate(
            	'pw_main_project', // 1er argument : le nom de la route
            	array('idg' => $id));

		$sections = ['chat' => $urlChat, 'files' => $urlFiles, 'project' => $urlProject];


		if ($request->isMethod('POST')) {

			$form->handleRequest($request);

			if ($form->isValid()) {

				$message->setGroup($currGroup);
				$message->setUser($user);
				$message->setAuthor($user->getUsername());
				$em->persist($message);
				$em->flush();

				$request->getSession()->getFlashBag()->add('notice', 'Message envoye');
			}
		}


		/*
		$message1 = new Message();
		$message1->setAuthor('Anna');
		$message1->setContent('Bien le bonjour');
		$message1->setGroup($currGroup);
		$message1->setUser($user);

		$message2 = new Message();
		$message2->setAuthor('Anna');
		$message2->setContent('hey hey');
		$message2->setGroup($currGroup);
		$message2->setUser($user);

		$em->persist($currGroup);
		$em->persist($user);

		$em->persist($message1);
		$em->persist($message2);

		$em->flush();


		*/

		if ($currGroup === null)
		{
			throw new NotFoundHttpException('Le groupe d\'id'.$idg.'n\'existe pas.');
		}


		$listMessages = $em
		->getRepository('PWMainBundle:Message')
		->findBy(array('group' => $currGroup))
		;
		



		return $this->render('PWMainBundle:Default:chat.html.twig', array(
			'group' => $currGroup,
			'listMessages' => array_reverse($listMessages),
			'arraygrp' => $arraygrp,
			'form' => $form->createView(),
			'sections' => $sections
		));
	}












	public function filesAction($idg, Request $request)
	{
		$document = new Document();
		$form = $this->createFormBuilder($document)
		->add('name')
		->add('file')
		->getForm();

		$em = $this->getDoctrine()->getEntityManager();
		$repository = $em->getRepository('PWMainBundle:Groupe');


		if ($request->isMethod('POST')) 
		{
			$form->handleRequest($request);

			if ($form->isValid()) {

				

				$user = $this->getUser();
				$currGroup = $repository->find($idg);

				$document->setUser($user);
				$document->setGroup($currGroup);

				$document->upload();
				$em->persist($document);
				$em->flush();
			}
		}

		$arraygrp = [];
		$listGroupes = $repository->findAll();

		foreach ($listGroupes as $group) 
		{
			$id = $group->getId();
			$url = $this->get('router')->generate(
				'pw_main_chat', 
				array('idg' => $id)); 

			$arraygrp[] = array(
				'id' => $group->getId(),
				'titre' => $group->getTitre(),
				'url' => $url
			);

		}


		$currGroup = $repository->find($idg);


		$documentsRepository = $em->getRepository('PWMainBundle:Document');
		$listDocuments = $documentsRepository->findBy(array('group' => $currGroup));
		$docsinf = [];

		foreach ($listDocuments as $doc) 
		{
			$id = $doc->getId();
			$name = $doc->getName();
			$url = $this->get('router')->generate(
				'pw_main_download', 
				array('id' => $id)); 
			$docsinf[] = array(
				'name' => $name,
				'url' => $url
			);

		}

		$urlChat = $this->get('router')->generate(
            	'pw_main_chat', // 1er argument : le nom de la route
            	array('idg' => $id));

		$urlFiles = $this->get('router')->generate(
            	'pw_main_files', // 1er argument : le nom de la route
            	array('idg' => $id));

		$urlProject = $this->get('router')->generate(
            	'pw_main_project', // 1er argument : le nom de la route
            	array('idg' => $id));

		$sections = ['chat' => $urlChat, 'files' => $urlFiles, 'project' => $urlProject];




		return $this->render('PWMainBundle:Default:fichiers.html.twig',
			array(
				'form' => $form->createView(),
				'listdocs' => array_reverse($docsinf),
				'arraygrp' => $arraygrp,
				'sections' => $sections
			)

		);

	}






	public function downloadAction($id)
	{
		$user = $this->getUser();

		$repository = $this
		->getDoctrine()
		->getManager()
		->getRepository('PWMainBundle:Document')
		;

		$doc = $repository->find($id);
		$file = $doc->getWebPath();

		$response = new BinaryFileResponse($file);
		$response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);

		return $response;
	}

}
<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\Document;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function homeAction()
    {

	    return $this->render('index.html.twig'
		    );
    }


    /**
     * @Route("/logged", name="logged")
     */
    public function loggedAction()
    {

	    return $this->render('confirmed.html.twig'
		    );
    }




    /**
     *
     * @Method({"GET", "POST"})
     * @Route("/documents", name="ajax_snippet_image_send")
     */
    public function ajaxSnippetImageSendAction(Request $request)
    {
        $em = $this->container->get("doctrine.orm.default_entity_manager");

        $document = new Document();

        
        $media = $request->files->get('file');
        
        $document->setFile($media);
        $document->setPath($media->getPathName());
        $document->setName($media->getClientOriginalName());
        $document->upload();
        
        $em->persist($document);
        $em->flush();
        
        //infos sur le document envoyé
        //var_dump($request->files->get('file'));die;
        return new JsonResponse(array('success' => true));

    }
    
}

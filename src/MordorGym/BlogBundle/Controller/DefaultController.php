<?php

namespace MordorGym\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction($name)
    {
       return array('name' => $name);
        #return $this->render('BlogBundle:Default:index.html.twig', array('name' => $name));
    } 
 
}

<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Default:index.html.twig');
    }
    
    /**
     * @Route("/clock", name="clock")
     */
    public function clockAction(Request $request)
    {
        return $this->render('AppBundle:Default:clock.html.twig');
    }
    
    /**
     * @Route("/globe", name="globe")
     */
    public function globeAction(Request $request)
    {
        return $this->render('AppBundle:Default:globe.html.twig');
    }
    
    /**
     * @Route("/float", name="float")
     */
    public function floatAction(Request $request)
    {
        return $this->render('AppBundle:Default:float.html.twig');
    }
    
    /**
     * @Route("/ocean", name="ocean")
     */
    public function oceanAction(Request $request)
    {
        return $this->render('AppBundle:Default:ocean.html.twig');
    }
    
    /**
     * @Route("/bttn", name="bttn")
     */
    public function bttnAction(Request $request)
    {
        # Implement bttn action

        $secret = $request->request->get('secret', null);

        if ($secret == 'bigsecret'){

            return $this->render('AppBundle:Default:bttn.html.twig');

        } else {

            return $this->render('AppBundle:Default:index.html.twig');

        }

    }
}

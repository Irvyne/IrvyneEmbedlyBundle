<?php

namespace Irvyne\EmbedlyBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Embedly controller.
 *
 */
class EmbedlyController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $oembed = $this->container->get('irvyne.embedly')->oembed(array(
            'url' => 'https://github.com'
        ));

        return $this->render('IrvyneEmbedlyBundle:OEmbed:show.html.twig', array('oembed' => $oembed));
    }

    /**
     * @param $url
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($url)
    {
        $oembed = $this->container->get('irvyne.embedly')->oembed(array(
            'url' => $url
        ));

        return $this->render('IrvyneEmbedlyBundle:OEmbed:show.html.twig', array('oembed' => $oembed));
    }
}
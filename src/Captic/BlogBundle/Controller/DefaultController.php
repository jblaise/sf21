<?php

namespace Captic\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Captic\BlogBundle\Entity\Post;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="welcome")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/hello/{name}", name="greetings", defaults={"name":"world"})
     * @Template()
     */
    public function helloAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/posts", name="posts")
     * @Template()
     */
    public function postsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $posts = $em->getRepository('CapticBlogBundle:Post')->findAll();
        return array('posts' => $posts);
    }
}

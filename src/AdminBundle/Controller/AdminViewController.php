<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of ViewsController
 *
 * @author maddyson
 */
class AdminViewController extends Controller {
//
//    /**
//     * @Route("/admin/accueil", name="adminHome")
//     * @Template("AdminBundle::accueil.html.twig")
//     */
//    public function accueil() {
//        
//    }

    /**
     * @Route("/template", name="template")
     */
    public function template() {

        return $this->render('template.html.twig', array(
                    "categories" => $this->getDoctrine()->getRepository('AdminBundle:Categorie')->findAll(),
//                    "articles" => $this->getDoctrine()->getRepository('AdminBundle:Article')->findBy(array(), array("date"=>"desc")),
        ));
    }

    /**
     * @Route("/admin/{id}/profil/detailsArticles")
     * @Template("AdminBundle::detailsArticles.html.twig")
     */
    public function detailsArticles() {
        return $this->render('detailsArticles.html.twig', array(
                    "categories" => $this->getDoctrine()->getRepository('AdminBundle:Categorie')->findAll(),
//                    "articles" => $this->getDoctrine()->getRepository('AdminBundle:Article')->findBy(array(), array("date"=>"desc")),
        ));
    }

    /**
     * @Route("/admin/{id}/profil/likesprofil", name="mesLikes")
     * @Template(".html.twig")
     */
    public function likesProfil() {
        return $this->render('AdminBundle::likes.html.twig', array(
                    "categories" => $this->getDoctrine()->getRepository('AdminBundle:Categorie')->findAll(),
//                    "articles" => $this->getDoctrine()->getRepository('AdminBundle:Article')->findBy(array(), array("date"=>"desc")),
        ));
    }

    /**
     * @Route("/admin/{id}/profil/articles", name="mesArticles")
     */
    public function articleLol() {
        return $this->render('AdminBundle::article.html.twig', array(
                    "categories" => $this->getDoctrine()->getRepository('AdminBundle:Categorie')->findAll(),
//                    "articles" => $this->getDoctrine()->getRepository('AdminBundle:Article')->findBy(array(), array("date"=>"desc")),
        ));
    }

    /**
     * @Route("/admin/{id}/profil/articlesBrouillons", name="mesBrouillons")
     */
    public function articleBrouillons() {
        return $this->render('AdminBundle::articlesBrouillons.html.twig', array(
                    "categories" => $this->getDoctrine()->getRepository('AdminBundle:Categorie')->findAll(),
//                    "articles" => $this->getDoctrine()->getRepository('AdminBundle:Article')->findBy(array(), array("date"=>"desc")),
        ));
    }

    /**
     * @Route("/admin/{id}/profil/commentaires", name="mesComs")
     */
    public function commentairesProfil() {
        return $this->render('AdminBundle::autreprofil.html.twig', array(
                    "categories" => $this->getDoctrine()->getRepository('AdminBundle:Categorie')->findAll(),
//                    "articles" => $this->getDoctrine()->getRepository('AdminBundle:Article')->findBy(array(), array("date"=>"desc")),
        ));
    }

}

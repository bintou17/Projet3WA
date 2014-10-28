<?php

namespace WA\BoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use WA\BoBundle\Entity\Movies;
use WA\BoBundle\Form\MoviesType;

/**
 * Movies controller.
 *
 */
class MoviesController extends Controller
{

    /**
     * Lists all Movies entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $movies = $em->getRepository('WABoBundle:Movies')->findAll();

        return $this->render('WABoBundle:Movies:index.html.twig', array(
            'movies' => $movies,
        ));
    }
    /**
     * Creates a new Movies entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Movies();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('movies_show', array('id' => $entity->getId())));
        }

        return $this->render('WABoBundle:Movies:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Movies entity.
     *
     * @param Movies $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Movies $entity)
    {
        $form = $this->createForm(new MoviesType(), $entity, array(
            'action' => $this->generateUrl('movies_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Movies entity.
     *
     */
    public function newAction()
    {
        $entity = new Movies();
        $form   = $this->createCreateForm($entity);

        return $this->render('WABoBundle:Movies:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Movies entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WABoBundle:Movies')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Movies entity.');
        }


        // traitement de l'affichage de like ou unlike

        $class="";
        $usercurrent = $this->getUser();

        // si le film n'est pas déja present dans la liste des films selectionné de l'utilisateur
        // courant
        if($usercurrent->getMovies()->contains($entity) !=true)
        {
          $class ="fa fa-heart-o";
        }

        else
        {
           $class = "fa fa-heart" ;
        }




        $deleteForm = $this->createDeleteForm($id);

        return $this->render('WABoBundle:Movies:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'class'       => $class
        ));
    }

    /**
     * Displays a form to edit an existing Movies entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WABoBundle:Movies')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Movies entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('WABoBundle:Movies:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Movies entity.
    *
    * @param Movies $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Movies $entity)
    {
        $form = $this->createForm(new MoviesType(), $entity, array(
            'action' => $this->generateUrl('movies_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Movies entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WABoBundle:Movies')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Movies entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('movies_edit', array('id' => $id)));
        }

        return $this->render('WABoBundle:Movies:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Movies entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('WABoBundle:Movies')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Movies entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('movies'));
    }

    /**
     * Creates a form to delete a Movies entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('movies_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
   /** les fonctions concernant le cart(panier d'achat: achat en ligne: panier virtuel :
    * système de panier d'achat virtuel,principe mis en place
    * pour un magasin virtuel
    * un panier d'achat est un logiciel qui accepte la commande du client et ses informations de paiement
    * /livraison et facilite la distribution de cette information aux commerçants et aux processeurs du paiement
    * tous les paniers d'achats disposent d'une licence et sont hébergés sur un serveur
    * Les paniers d'achats sont de type licence(le commerçant paie la licence et souvent une seule fois
    * ou hébergé( le commerçant paie des frais mensuels récurrents pour l'accès au logiciel
    * un panier d'achat virtuel constitue l'interface entre le site de la société et son système de paiement
    *Le panier d'achat désigne la fonctionalité ou l'application chargée de conserver les choix d'articles
    *Le panier d'achat moyen est en fait le montant moyen d'une commande sur un site marchand
    * le panier moyen(le montant de transaction moyen observé par les principaux intermédiaires du paiement
    * en ligne
    **/

    public function addCartAction( Request $request, $id)
    {
        // connexion à la base de donnée
        $em = $this->getDoctrine()->getManager();

        // recupération de la session en cours
        $session = $request->getSession();

        // Définition de l'attribut cart dans la session
        // la valeur de la variable cart sera initialisé à un tableau qui va contenir les articles du panier
        $panier = $session->get('panier', array());
        // on met dans un tableau id films
        // pour traiter si un article déja present ou nom dans la session
        // enfin de ne pas ajouter une deuxieme fois dans la session
        $tabIds = $session->get('tabIds', array());


        $tabIds = $session->get('tabIds');
        // soit le panier est vide
        // soit il ne l'ai pas

        //Le panier n'est pas vide
        if(!empty($panier))
        {
            // si le film n'est pas déjà dans le panier
            // si il n'est pas présent dans la table des id
            // récupération des informations relatives à cet article
            // mise en session de cet article

//            exit(var_dump($tabIds));
            if (!in_array($id, $tabIds))
            {
                //exit(var_dump($tabIds));
               // connexion à la base de donnée
              // Récuperation des informations relatives au film selectionné
               $infoOneArticle = $em->getRepository('WABoBundle:Movies')->find($id);

               // Les informations relatives au film selectionné
                    $panierOneArticle = array(
                        "id" => $id,
                        "title" =>$infoOneArticle->getTitle(),
                        "price" => $infoOneArticle->getPrice(),
                        "quantity" => 1,
                    );

                   // on met l'article selectinné dans le panier
                    $panier[] = $panierOneArticle;
                    // on ajoute id de l'article dans le tableau d'id
                    $tabIds[] = $id;

                    // on place panier et tabIds dans la session
                    $session->set('panier', $panier);
                    $session->set('tabIds', $tabIds);

                  // exit(var_dump($tabIds()));
                    // on ajoute un message dans la session
                   // pour spécifier que l'article a ete bien ajouté
                    $this->get('session')->getFlashBag()->add(
                        'notice',
                        'Film ajouté!'
                    );
            }
            //exit(var_dump($tabIds));
          // le panier est vide et pas de films ajoutés
        } else {


            //exit(var_dump($tabIds));
            // Récuperation des informations relatives au film selectionné

              $infoOneArticle = $em->getRepository('WABoBundle:Movies')->find($id);

               // Les informations relatives au film selectionné
                    $panierOneArticle = array(
                        "id" => $id,
                        "title" =>$infoOneArticle->getTitle(),
                        "price" => $infoOneArticle->getPrice(),
                        "quantity" => 1,
                    );

                   // on met l'article selectinné dans le panier
                    $panier[] = $panierOneArticle;
                    // on ajoute id de l'article dans le tableau d'id
                    $tabIds[] = $id;

                    // on place panier et tabIds dans la session
                    $session->set('panier', $panier);
                    $session->set('tabIds', $tabIds);

                    // on ajoute un message dans la session
                   // pour spécifier que l'article a ete bien ajouté
                    $this->get('session')->getFlashBag()->add(
                        'notice',
                        'Film ajouté!'
                    );
        //exit(var_dump($tabIds));
        }
        //exit(var_dump($tabIds));
        //exit(var_dump($panier));

      return $this->redirect($this->generateUrl('movies'));


    }// fin de la fonction addCart

    public function showCartAction(Request $request )
    {

        $paybox = $this->get('lexik_paybox.request_handler');
        $paybox->setParameters(array(
            'PBX_CMD'          => 'CMD'.time(),
            'PBX_DEVISE'       => '978',
            'PBX_PORTEUR'      => 'test@paybox.com',
            'PBX_RETOUR'       => 'Mt:M;Ref:R;Auto:A;Erreur:E',
            'PBX_TOTAL'        => '1000',
            'PBX_TYPEPAIEMENT' => 'CARTE',
            'PBX_TYPECARTE'    => 'CB',
            'PBX_EFFECTUE'     => $this->generateUrl('movies_showCart', array('status' => 'success'), true),
            'PBX_REFUSE'       => $this->generateUrl('movies_showCart', array('status' => 'denied'), true),
            'PBX_ANNULE'       => $this->generateUrl('movies_showCart', array('status' => 'canceled'), true),
            'PBX_RUF1'         => 'POST',
            'PBX_REPONDRE_A'   => $this->generateUrl('movies_showCart', array('time' => time()), true),
        ));

        // récupération de la session en cours
        $session = $request->getSession();

     // on récupère le panier en cours
        $panier = $session->get('panier');
        return $this->render('WABoBundle:Movies:cart.html.twig',array(
            'url'  => $paybox->getUrl(),
            'form' => $paybox->getForm()->createView(),
        ));

    } // fin de la fonction showCart

    public function plusAction( Request $request, $id)
    {

        // récupération de la session en cours
        $session = $request->getSession();

        // on récupère le panier en cours
        $panier = $session->get('panier');

       // var_dump($panier);
        // je vais parcourir le panier pour savoir di element est present
        foreach ($panier as $key => $value)
        {
            if($value['id'] == $id){

                $panier[$key]['quantity'] = $panier[$key]['quantity'] + 1;
            }
            //var_dump($value['id']);
        }

        // on place panier dans la session
        $session->set('panier', $panier);
        return $this->render('WABoBundle:Movies:cart.html.twig');

    } // fin de la fonction plusaction


    public function minusAction( Request $request, $id)
    {

        // récupération de la session en cours
        $session = $request->getSession();

        // on récupère le panier en cours
        $panier = $session->get('panier');

        // je vais parcourir le panier

        //var_dump($panier);
         foreach ($panier as $key => $value)
         {
            if($value['id'] == $id){

               // var_dump($value['id']);

                if( $panier[$key]['quantity']>1) {
                $panier[$key]['quantity'] = $panier[$key]['quantity'] -1;

                }

            }

         }


        // on place panier et tabIds dans la session
        $session->set('panier', $panier);

        return $this->render('WABoBundle:Movies:cart.html.twig');
    } // fin de la fonction minusAction



    // supprimer un film de la carte
    public function delCartAction( Request $request, $id)
    {
        // récupération de la session en cours
        $session = $request->getSession();

        // on récupère le panier en cours
        $panier = $session->get('panier');

        // on récupère le tableau des Id
        $tabIds = $session->get('tabIds');


        // je parcours le panier pour chercher l'id du film
        // et le supprimer

        foreach ($panier as $key => $value)
        {
            if($value['id'] == $id){
                // on supprime id associé au film
                unset($panier[$key]);

            }

        }
        //exit(var_dump($tabIds));
        // parcours de l'id du film dans le tableau des id
        // et le supprime
        foreach ($tabIds as $key => $value)
        {   //exit(var_dump($value));
            //exit(var_dump($value));
            if($value == $id){
                // on supprime id associé au tableau des id
                unset($tabIds[$key]);

            }

        }
       // exit(var_dump($tabIds));

        // mettre dans le panier
        $session->set('panier', $panier);

        //mettre en session le tableau des id
        $session->set('tabIds', $tabIds);

       // exit(var_dump('je suis la'));
        return $this->redirect($this->generateUrl('movies_showCart'));

    } // fin de la fonction like

    //
    public function likeAction( Request $request, $movie_id)
    {

        // connexion à la base de donnée
        $em = $this->getDoctrine()->getManager();

        $movie = $em->getRepository('WABoBundle:Movies')->find($movie_id);
        // recuperation de l'utilisateur courant authentifié
         $usercurrent = $this->getUser();

        // si le film n'est pas déja present dans la liste des films selectionné de l'utilisateur
        // courant
        if($usercurrent->getMovies()->contains($movie) !=true)
        {
            // Ajout du film
            $usercurrent->addMovie($movie);
            $em->persist($usercurrent);
            $em->flush($usercurrent);
            exit(var_dump('je suis bien like'));
        }

        else
        {
            $usercurrent->removeMovie($movie);
            $em->persist($usercurrent);
            $em->flush($usercurrent);
            exit(var_dump('je suis  unlike'));
        }


        // generation d'url avec movie_id
        return $this->redirect($this->generateUrl('show.html.twig',
         array('movie_id' =>$movie_id)
        ));

    }

    public function UnLikeAction( Request $request, $movie_id)
    {



    }



}

<?php
/**
 * Created by PhpStorm.
 * User: TOSH
 * Date: 12/01/2016
 * Time: 22:51
 */

namespace Product\Bundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function testroutingAction()
    {
        return new Response("Mon test est yopi :-)!");
    }

    // On récupère tous les paramètres en arguments de la méthode
    public function viewSlugAction()
    {
       /* return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$format."."
        );*/
        // On modifie viewAction, car elle existe déjà

        // On crée la réponse sans lui donner de contenu pour le moment
        $response = new Response(

        );

        // On définit le contenu
        $response->setContent("Ceci est une page d'erreur 404");

        // On définit le code HTTP à « Not Found » (erreur 404)
        $response->setStatusCode(404,'NOT_FOUND');

        // On retourne la réponse
        return $response;
    }

   /* public function viewAction($id)
    {
        return $this->render(
            'ProductBundle:Default:view.html.twig',
            array('id'  => $id)
        );
    }*/


   /* public function viewAction($id)
    {
        $url = $this->get('router')->generate('hello_the_world');

        return new RedirectResponse($url);
    }*/
    public function viewAction($id, Request $request)
    {
        // Récupération de la session
        $session = $request->getSession();

        // On récupère le contenu de la variable user_id
        $userId = $session->get('user_id');

        // On définit une nouvelle valeur pour cette variable user_id
        $session->set('user_id', 91);

        // On n'oublie pas de renvoyer une réponse
       // return new Response("Je suis une page de test, je n'ai rien à dire");
        return $this->render(
            'ProductBundle:Default:view.html.twig',
            array('id'  => $id));
    }
    public function addAction(Request $request)
    {
        // On récupère le service
        $antispam = $this->container->get('Product.antispam');
        // Je pars du principe que $text contient le texte d'un message quelconque
        $text = '...';
        if ($antispam->isSpam($text)) {
            $message="hello tu es un spam";
         }

        // Ici le message n'est pas un spam


        $session = $request->getSession();

        // Bien sûr, cette méthode devra réellement ajouter l'annonce

        // Mais faisons comme si c'était le cas
        $session->getFlashBag()->add('info', 'Annonce bien enregistrée');

        // Le « flashBag » est ce qui contient les messages flash dans la session
        // Il peut bien sûr contenir plusieurs messages :
        $session->getFlashBag()->add('info', 'Oui oui, elle est bien enregistrée !');

        // Puis on redirige vers la page de visualisation de cette annonce
        return $this->render('ProductBundle:Default:add.html.twig', array('id' => 5,'spam'=>$message));
    }

}
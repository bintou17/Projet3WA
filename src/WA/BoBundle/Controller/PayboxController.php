<?php

namespace WA\BoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use WA\BoBundle\Entity\Categories;
use WA\BoBundle\Form\CategoriesType;

/**
 * Categories controller.
 *
 */
class PayboxController extends Controller
{

    /**
     * Sample action to call a payment.
     * It create the form to submit with all parameters.
     */
    public function callAction()
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
            'PBX_EFFECTUE'     => $this->generateUrl('lexik_paybox_sample_return', array('status' => 'success'), true),
            'PBX_REFUSE'       => $this->generateUrl('lexik_paybox_sample_return', array('status' => 'denied'), true),
            'PBX_ANNULE'       => $this->generateUrl('lexik_paybox_sample_return', array('status' => 'canceled'), true),
            'PBX_RUF1'         => 'POST',
            'PBX_REPONDRE_A'   => $this->generateUrl('lexik_paybox_ipn', array('time' => time()), true),
        ));

        return $this->render(
            'LexikPayboxBundle:Sample:index.html.twig',
            array(
                'url'  => $paybox->getUrl(),
                'form' => $paybox->getForm()->createView(),
            )
        );
    }

    /**
     * Sample action of a confirmation payment page on witch the user is sent
     * after he seizes his payment informations on the Paybox's platform.
     * This action must only containts presentation logic.
     */
    public function responseAction($status)
    {
        return $this->render(
            'LexikPayboxBundle:Sample:return.html.twig',
            array(
                'status'     => $status,
                'parameters' => $this->getRequest()->query,
            )
        );
    }

}

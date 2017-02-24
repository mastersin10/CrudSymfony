<?php

namespace ExamenBundle\Controller;

use ExamenBundle\Entity\Direccion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Direccion controller.
 *
 */
class DireccionController extends Controller
{
    /**
     * Lists all direccion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $direccions = $em->getRepository('ExamenBundle:Direccion')->findAll();

        return $this->render('direccion/index.html.twig', array(
            'direccions' => $direccions,
        ));
    }

    /**
     * Creates a new direccion entity.
     *
     */
    public function newAction(Request $request)
    {
        $direccion = new Direccion();
        $form = $this->createForm('ExamenBundle\Form\DireccionType', $direccion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($direccion);
            $em->flush($direccion);

            return $this->redirectToRoute('direccion_show', array('id' => $direccion->getId()));
        }

        return $this->render('direccion/new.html.twig', array(
            'direccion' => $direccion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a direccion entity.
     *
     */
    public function showAction(Direccion $direccion)
    {
        $deleteForm = $this->createDeleteForm($direccion);

        return $this->render('direccion/show.html.twig', array(
            'direccion' => $direccion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing direccion entity.
     *
     */
    public function editAction(Request $request, Direccion $direccion)
    {
        $deleteForm = $this->createDeleteForm($direccion);
        $editForm = $this->createForm('ExamenBundle\Form\DireccionType', $direccion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('direccion_edit', array('id' => $direccion->getId()));
        }

        return $this->render('direccion/edit.html.twig', array(
            'direccion' => $direccion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a direccion entity.
     *
     */
    public function deleteAction(Request $request, Direccion $direccion)
    {
        $form = $this->createDeleteForm($direccion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($direccion);
            $em->flush($direccion);
        }

        return $this->redirectToRoute('direccion_index');
    }

    /**
     * Creates a form to delete a direccion entity.
     *
     * @param Direccion $direccion The direccion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Direccion $direccion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('direccion_delete', array('id' => $direccion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

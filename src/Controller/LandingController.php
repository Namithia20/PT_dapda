<?php

namespace App\Controller;

//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

use Symfony\Component\Form\FormEvent;
//use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvents;
//use Symfony\Bridge\Doctrine\Form\Type\EntityType;
//use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Client;

class LandingController extends AbstractController
{
    /** 
     * @Route("/promocion", name="promo")
     */
    public function promocion(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $client = new Client();

        $form = $this->createFormBuilder($client, array('attr'=>array('id' =>'promoForm')))
            ->add('Name', TextType::class, array('label' => 'Nombre'))
            ->add('Surname', TextType::class, array('label' => 'Apellidos'))
            ->add('Phone', TextType::class, array(
                'label' => 'Telefono',
                'required' => false,             
                'constraints' => array(
                    new Assert\Regex(array(
                        'pattern' => '/^[9|6|7][0-9]{8}$/',
                        'message' => 'Indique un numero valido'))
            )))
            ->add('Email', EmailType::class, array('label' => 'Email'))
            ->add('Car_type', ChoiceType::class, array( 
                'label' => 'Tipo de vehículo',
                'placeholder' => 'Seleccione tipo',
                'choices' => array(
                    'Turismo' => 0,
                    'Todo terreno' => 1,
                    'Comercial' => 2
                ),
                'attr' => array('class' => 'carType')
            )) 
            ->add('Car', ChoiceType::class, array( 
                'label' => 'Vehículo',
                'placeholder' => 'Seleccione marca',
                'disabled' => true, 
                'choices' => array(),
                'attr' => array('class' => 'car')
            ))  
            ->add('Preference_call', ChoiceType::class, array( 
                'label' => 'Preferencia',
                'placeholder' => 'Seleccione preferencia',
                'choices' => array(
                    'Mañana' => 0,
                    'Tarde' => 1,
                    'Noche' => 2
                ),
                'disabled' => false
            ))             
            ->add('Send', SubmitType::class, array('label' => 'Enviar'))
            ->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {    
            try{        
                $client = $form->getData();
                
                $preference = $request->query->get('preferencia');
                if($preference != NULL)
                {                     
                    $val;
                    switch($preference)
                    {
                        case "mañana":  
                            $val = 0;                            
                        break;
                        case "tarde":  
                            $val = 1;  
                        break;
                        case "noche": 
                            $val = 2;   
                        break;
                        default: break;
                    }
                    $client->setPreferenceCall($val);
                }                

                $entityManager->persist($client);
                $entityManager->flush();

                return $this->redirectToRoute('gracias');
            }
            catch(Exception $e){

            }
        }
        
            $preference = $request->query->get('preferencia');
            if($preference != NULL)
            {
                $options = $form->get('Preference_call')->getConfig()->getOptions();                      
                $val;
                switch($preference)
                {
                    case "mañana":  
                        $options['data']  = 0; 
                        $options['empty_data']  = 'Mañana';
                        $val = 0;                            
                    break;
                    case "tarde": 
                        $options['data']  = 1;
                        $options['empty_data']  = 'Tarde';   
                        $val = 1;  
                    break;
                    case "noche": 
                        $options['data']  = 2;
                        $options['empty_data']  = 'Noche';  
                        $val = 2;   
                    break;
                    default: break;
                }

                //$options['attr'] = array('readonly' => true);
                $options['disabled'] = true;
                $form->add('Preference_call', ChoiceType::class, $options);
            }                

            return $this->render('promocion.html.twig', array(
                'form' => $form->createView(),
        
        ));
    }   
    
    function onPreSubmit(FormEvent $event) 
    {
       $form = $event->getForm();
       $val_type = $event->getData()['Car_type'];

       

        //var_dump($val_type);
       if($val_type!="" || $val_type == null)
       {
            $options = $form->get('Car')->getConfig()->getOptions();
            $options['disabled'] = false;

            if($val_type == '1') 
            { $options['choices'] = array('mokka' => 0, 'crossland' => 1); }
            else
            { $options['choices'] = array('corsa' => 0, 'astra' => 1); }
                        
            $form->add('Car', ChoiceType::class, $options);
       } 
       else
       {
            $options = $form->get('Car')->getConfig()->getOptions();
            $options['disabled'] = true;
            $form->add('Car', ChoiceType::class, $options);
       }   
    }

    /** 
     * @Route("/gracias-promocion", name="gracias")
     */
    public function gracias(Request $request)
    {
        $referer = $request->headers->get('referer');

        if($referer != NULL && strpos($referer, 'promocion') != false)
        {
            return $this->render('gracias.html.twig');
        }
        
        return $this->redirectToRoute('promo');       
    }

}
<?php

namespace App\Controller;

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
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use App\Entity\Client;

class LandingController extends AbstractController
{
    /** 
     * @Route("/promocion", name="promo")
     */
    public function promocion(Request $request, \Swift_Mailer $mailer)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $client = new Client();

        $form = $this->createFormBuilder($client, array('attr'=>array('id' =>'promoForm')))
            ->add('Name', TextType::class, array(
                'label' => 'Nombre',
                'attr' =>array('class'=>'form-control'),
                'label_attr' => array('class' =>'control-label')
                ))
            ->add('Surname', TextType::class, array(
                'label' => 'Apellidos',
                'attr' =>array('class'=>'form-control'),
                'label_attr' => array('class' =>'control-label')
                ))
            ->add('Phone', TextType::class, array(
                'label' => 'Telefono',
                'required' => false,
                'attr' =>array('class'=>'form-control'),
                'label_attr' => array('class' =>'control-label'),             
                'constraints' => array(
                    new Assert\Regex(array(
                        'pattern' => '/^[9|6|7][0-9]{8}$/',
                        'message' => 'Indique un numero valido'))
            )))
            ->add('Email', EmailType::class, array(
                'label' => 'Email',
                'attr' =>array('class'=>'form-control'),
                'label_attr' => array('class' =>'control-label')
                ))
            ->add('Car_type', ChoiceType::class, array( 
                'label' => 'Tipo de vehículo',
                'placeholder' => 'Seleccione tipo',
                'choices' => array(
                    'Turismo' => 0,
                    'Todo terreno' => 1,
                    'Comercial' => 2
                ),
                'attr' => array('class' => 'carType form-control'),
                'label_attr' => array('class' =>'control-label')
            )) 
            ->add('Car', ChoiceType::class, array( 
                'label' => 'Vehículo',
                'placeholder' => 'Seleccione marca',
                'disabled' => true, 
                'choices' => array(),
                'attr' => array('class' => 'car form-control'),
                'label_attr' => array('class' =>'control-label')
            ))  
            ->add('Preference_call', ChoiceType::class, array( 
                'label' => 'Preferencia',
                'placeholder' => 'Seleccione preferencia',
                'attr' =>array('class'=>'form-control'),
                'label_attr' => array('class' =>'control-label'),
                'choices' => array(
                    'Mañana' => 0,
                    'Tarde' => 1,
                    'Noche' => 2
                ),
                'disabled' => false
            ))             
            ->add('Send', SubmitType::class, array(
                'label' => 'Enviar',
                'attr' =>array('class'=>'btn btn-warning')
                ))
            ->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {    
            //try{        
                $client = $form->getData();  
                $entityManager->persist($client);
                $entityManager->flush();

                $this->sendEmail($client->getName(), $client->getSurname(), $client->getEmail(), $mailer);

                return $this->redirectToRoute('gracias');
            //}
            //catch(Exception $e){

            //}
        }
        
            $preference = $request->query->get('preferencia');
            if($preference != NULL)
            {                    
                $val=-1;
                switch($preference)
                {
                    case "mañana":  
                        $val = "Mañana";                            
                    break;
                    case "tarde":    
                        $val = "Tarde";  
                    break;
                    case "noche": 
                        $val = "Noche";   
                    break;
                }

                $options['attr'] = array('readonly' => true);
                $form->add('Preference_call', TextType::class, array(
                    'attr' => array('readonly' => true),
                    'label' => 'Preferencia',
                    'data' => $val
                ));
            }                

            return $this->render('promocion.html.twig', array(
                'form' => $form->createView(),
        
        ));
    }   
    
    function onPreSubmit(FormEvent $event) 
    {
       $form = $event->getForm();
       $val_type = $event->getData()['Car_type'];       

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
       $data = $event->getData();
       $val_pref = $data['Preference_call']; 

       if($val_pref!="" || $val_pref == null)
       {
            switch($val_pref)
            {
                case "Mañana":  
                    $data['Preference_call'] = 0;                            
                break;
                case "Tarde":  
                    $data['Preference_call'] = 1;
                break;
                case "Noche":  
                 $data['Preference_call'] = 2;
                break;
            }
       }
       $event->setData($data);
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

    public function sendEmail($name, $surname, $email, $mailer)
    { 
        $message =(new \Swift_Message('Prueba'))           
            ->setFrom('emailpersonaltesting@gmail.com')
            ->setTo($email)
            ->setBody(
                $this->renderView(
                    'email.html.twig',
                    array('name' => $name, 'surname' => $surname)
                ),
                'text/html'
            )            
        ;
        $mailer->send($message);
    }

}
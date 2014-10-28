<?php

namespace WA\BoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActorsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('dob')
            ->add('city')
            ->add('image')
            ->add('fb')
            ->add('nationality')
            ->add('biography')
            ->add('roles')
            ->add('slug')
            ->add('qi')
            ->add('recompenses')
            ->add('dateCreated')
            ->add('dateDeleted')
            ->add('movies')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WA\BoBundle\Entity\Actors'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'wa_bobundle_actors';
    }
}

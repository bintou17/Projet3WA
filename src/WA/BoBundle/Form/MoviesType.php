<?php

namespace WA\BoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MoviesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeFilm')
            ->add('title')
            ->add('synopsis')
            ->add('description')
            ->add('image')
            ->add('trailer')
            ->add('languages')
            ->add('distributeur')
            ->add('bo')
            ->add('annee')
            ->add('budget')
            ->add('duree')
            ->add('dateRelease')
            ->add('notePresse')
            ->add('visible')
            ->add('cover')
            ->add('shop')
            ->add('slug')
            ->add('views')
            ->add('dateCreated')
            ->add('dateUpdated')
            ->add('dateDeleted')
            ->add('ref')
            ->add('price')
            ->add('quantity')
            ->add('taxe')
            ->add('shopMode')
            ->add('shopTypeDvd')
            ->add('shopDate')
            ->add('categories')
            ->add('actors')
            ->add('cinemas')
            ->add('directors')
            ->add('moviesRelated')
            ->add('tags')
            ->add('user')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WA\BoBundle\Entity\Movies'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'wa_bobundle_movies';
    }
}

<?php

namespace PIL\TaskerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CheckListOptionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('optionText')
            ->add('checked')
            ->add('position')
            ->add('checkList')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PIL\TaskerBundle\Entity\CheckListOption'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pil_taskerbundle_checklistoption';
    }
}

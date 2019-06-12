<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 12/06/19
 * Time: 19:12
 */

namespace App\Form;


class IdType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', TextType::class, [
                'required' => 'required',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Introduce Id'
                ]
            ]);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class'=>'App\Entity\Employee']);
    }
}
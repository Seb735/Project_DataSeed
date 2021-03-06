<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, [
                'constraints'=> new NotBlank(),
            ])

            ->add('lastName', TextType::class, [
                'constraints'=> new NotBlank(),
            ])

            ->add('email', EmailType::class, [
                'constraints'=> [
                    new NotBlank(),
                    new Email(
                        ['message' => "L'E-mail '{{ value }}' n'est pas une E-mail valide."]
                    ),
                ]
            ])

            ->add('password', PasswordType::class, [
                'constraints'=> [
                    new NotBlank(),
                    new Regex(
                        [   
                            'pattern' => "/^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z]).{8,}$/i",
                            'htmlPattern' => "^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z]).{8,}$"
                        ]
                    ),
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'attr' => ['novalidate' => 'novalidate'],
        ]);
    }
}

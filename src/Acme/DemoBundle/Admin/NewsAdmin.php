<?php

namespace Acme\DemoBundle\Admin;

use Msi\CmfBundle\Admin\Admin;
use Msi\CmfBundle\Grid\GridBuilder;
use Symfony\Component\Form\FormBuilder;

class NewsAdmin extends Admin
{
    public function buildGrid(GridBuilder $builder)
    {
        $builder
            ->add('photo', 'image')
            ->add('picture', 'image')
            ->add('createdAt', 'date', ['format' => 'H:i:s'])
            ->add('updatedAt', 'date', ['format' => 'H:i:s'])
            ->add('', 'action')
        ;
    }

    public function buildForm(FormBuilder $builder)
    {
        $builder
            ->add('photoFile', 'file')
            ->add('pictureFile', 'file')
        ;
    }
}

<?php

namespace Arbo\CoreBundle\Admin;

use Msi\CmfBundle\Admin\Admin;
use Msi\CmfBundle\Grid\GridBuilder;
use Symfony\Component\Form\FormBuilder;

class EstimateAdmin extends Admin
{
    public function buildGrid(GridBuilder $builder)
    {
        $builder
            // ->add('name')
            ->add('', 'action')
        ;
    }

    public function buildForm(FormBuilder $builder)
    {
        $builder
            // ->add('name')
        ;
    }
}

<?php

namespace App\Controller\Admin;

use App\Entity\ProExpe;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;

class ProExpeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProExpe::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
         
            Field::new('description')
            
        ];
    }
    
}

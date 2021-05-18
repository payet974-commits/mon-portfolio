<?php

namespace App\Controller\Admin;

use App\Entity\Hobbies;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;

class HobbiesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Hobbies::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
         
            Field::new('type')
            
        ];
    }
}

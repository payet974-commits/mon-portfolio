<?php

namespace App\Controller\Admin;

use App\Entity\Hobbies;
use App\Entity\ProExpe;
use App\Entity\Education;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Mon Portfolio');
    }

    public function configureMenuItems(): iterable
    {
     return [
        MenuItem::linkToCrud('XpPro', 'fa fa-tags', ProExpe::class),
        MenuItem::linkToCrud('Hobbies', 'fa fa-tags', Hobbies::class),
        MenuItem::linkToCrud('Education', 'fa fa-tags', Education::class)
     ];
       
    }
}

<?php

namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route(path: '/', name: 'page_home')]
    public function accueil()
    {
        return $this->render('index.html.twig');
    }

    #[Route(path: '/abonnements', name: 'page_abonnements')]
    public function abonnements()
    {
        return $this->render('abonnements.html.twig');
    }

    #[Route(path: '/admin', name: 'page_admin')]
    public function admin()
    {
        return $this->render('admin.html.twig');
    }

    #[Route(path: '/admin/add-films', name: 'page_admin_add_films')]
    public function adminAddFilms()
    {
        return $this->render('admin_add_films.html.twig');
    }

    #[Route(path: '/admin/films', name: 'page_admin_films')]
    public function adminFilms()
    {
        return $this->render('admin_films.html.twig');
    }

    #[Route(path: '/admin/users', name: 'page_admin_users')]
    public function adminUsers()
    {
        return $this->render('admin_users.html.twig');
    }

    #[Route(path: '/category', name: 'page_category')]
    public function category()
    {
        return $this->render('category.html.twig');
    }

    #[Route(path: '/confirm', name: 'page_confirm')]
    public function confirm()
    {
        return $this->render('confirm.html.twig');
    }

    #[Route(path: '/default', name: 'page_default')]
    public function default()
    {
        return $this->render('default.html.twig');
    }

    #[Route(path: '/detail', name: 'page_detail')]
    public function detail()
    {
        return $this->render('detail.html.twig');
    }

    #[Route(path: '/detail-serie', name: 'page_detail_serie')]
    public function detailSerie()
    {
        return $this->render('detail_serie.html.twig');
    }

    #[Route(path: '/discover', name: 'page_discover')]
    public function discover()
    {
        return $this->render('discover.html.twig');
    }

    #[Route(path: '/forgot', name: 'page_forgot')]
    public function forgot()
    {
        return $this->render('forgot.html.twig');
    }

    #[Route(path: '/lists', name: 'page_lists')]
    public function lists()
    {
        return $this->render('lists.html.twig');
    }

    #[Route(path: '/login', name: 'page_login')]
    public function login()
    {
        return $this->render('login.html.twig');
    }

    #[Route(path: '/register', name: 'page_register')]
    public function register()
    {
        return $this->render('register.html.twig');
    }

    #[Route(path: '/reset', name: 'page_reset')]
    public function reset()
    {
        return $this->render('reset.html.twig');
    }

    #[Route(path: '/upload', name: 'page_upload')]
    public function upload()
    {
        return $this->render('upload.html.twig');
    }
}
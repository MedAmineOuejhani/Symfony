<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
private  $authors=array(
    array('id' => 1, 'picture' => '/image/Victor-Hugo.jpeg','username' => ' Victor
    Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
    array('id' => 2, 'picture' => '/image/William Shakespear.jpeg','username' => '
    William Shakespeare', 'email' => ' william.shakespeare@gmail.com', 'nb_books' =>
    200 ),
    array('id' => 3, 'picture' => '/image/Taha Hussein.jpeg','username' => ' Taha
   Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),); 


    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }


    #[Route('/showAuthor/{name}',name:'show_Author')]
    public function showAuthor($name)
       {
       return $this->render('author/show.html.twig',['author'=>$name]);
       }

       #[Route('/Authorlist',name:'Author_list')]
       public function List()
       {
        return $this->render('author/list.html.twig',['authorslist'=>$this->authors]); 
       }
       
       #[Route('/authorDetails/{id}',name:'authorDetails')]
    public function AuthorDeatails($id)
       {
       return $this->render('author/showAuthor.html.twig',['id'=>$id,'authorslist'=>$this->authors]);
       }
}

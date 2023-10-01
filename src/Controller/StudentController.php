<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController  
{
    #[Route('/student', name: 'app_student')]
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }

    #[Route('/showTeacher/{name}',name:'show_teacher')]
    public function showTeacherWithName($name){
        return new Response ('Bonjour '.$name);
    }

    #[Route('/showStudentTwig',name:'show_teacher_twig')]
    public function showTWIG()
       {
        $title = 'List of teachers';
        $teacher = array( 
            array('id'=>1,'name'=>'Teacher 1','nb_class'=>4),
        array('id'=>2,'name'=>'Teacher 2','nb_class'=>5),
        array('id'=>3,'name'=>'Teacher 3','nb_class'=>6)
    );
       //return $this->render('student/cours.html.twig',['t'=>$title]);
       return $this->render('student/cours.html.twig',['t'=>$title,'tt'=>$teacher]);
       }
}

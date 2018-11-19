<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\Routing\Annotation\Route;
class UsersController extends Controller{
    /**
     * @Route("/home",name="home")
     */
    public function usersAction(Request $request)
    {   
        $users = $this->get('users_api')->getUsers();  
        return $this->render('users/index.html.twig',array('users' => $users )); 
   
    }
   
     /**
     * @Route("/user/{id}", name="user")
     */  
    public function userAction(Request $request,$id)
    {
        $user = $this->get('users_api')->getUser($id);
        //var_dump($user);Die();
        return $this->render('users/user.html.twig',array('user' => $user ) );
    }


}



?>
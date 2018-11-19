<?php
namespace AppBundle\Controller;
use AppBundle\Service\UsersApi;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class UsersController extends Controller{

    /**
     * @Route("/home",name="home")
     */
    public function usersAction(UsersApi $usersApi)
    {
        $users =$usersApi->getUsers();
        return $this->render('users/index.html.twig',array('users' => $users ));
   
    }
   
     /**
     * @Route("/user/{id}", name="user", options={"expose"= true})
     */  
    public function userAction(Request $request,$id, UsersApi $usersApi)
    {

        $user =$usersApi->getUser($id);
        //var_dump($user);Die();
        $content = $this->renderView('users/user.html.twig',array('user' => $user ) );
        $data = new Response($content);
        return $data;
    }


}




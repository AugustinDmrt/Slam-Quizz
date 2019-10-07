<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/user")
 */
class UserController extends AbstractController {
    /**
    * @Route("/index", name="user_index")
    */
    public function index (){
        $userList =array();
        $userList[0]['first_name']= 'Bob';
        $userList[0]['last_name']= 'Léponge';

        $userList[1]['first_name']= 'Patrick';
        $userList[1]['last_name']= 'LétoileDeMer';

        $userList[2]['first_name']= 'Sandy';
        $userList[2]['last_name']= 'Ecureuil';

        $userList[3]['first_name']= 'Carlo';
        $userList[3]['last_name']= 'Tentacule';
        return $this->render("user/user.html.twig",[
            'users_list' => $userList,
            ]);
    }
} 
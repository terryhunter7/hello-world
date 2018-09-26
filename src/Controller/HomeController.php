<?php
/**
 * Created by PhpStorm.
 * User: terry
 * Date: 9/24/2018
 * Time: 7:11 PM
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function IndexAction(){

        $hello = 'hello11111';

        return $this->render('/home/home.html.twig', array('hello' => $hello));

    }

}
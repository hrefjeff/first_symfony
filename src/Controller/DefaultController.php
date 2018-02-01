<?php
/**
 * Created by PhpStorm.
 * User: jeffreyallen
 * Date: 1/9/18
 * Time: 8:34 AM
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{

    /* Must return a symfony response object
    public function index(){
        return new response('This Way by Dilated People.');
    }
    */

    /**
     * @Route("/hello/{name}")
     */
    public function index($name = 'Yooooo'){
        return new Response($name . '! You should go listen to This Way by Dilated People.');
    }

    /**
     * @Route("/simple")
     */
    public function simple(){
        return new Response('Great song: Tryin\' to breath by Dilated People.');
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: jeffreyallen
 * Date: 1/9/18
 * Time: 8:34 AM
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{

    /* Must return a symfony response object
    public function index(){
        return new response('This Way by Dilated People.');
    }
    */

    // Must return a symfony response object
    public function index($name = 'Yooooo'){
        return new response($name . '! You should go listen to This Way by Dilated People.');
    }

    public function anotherController(){
        return new Response('Tryin\' to breath by Dilated People.');
    }

}
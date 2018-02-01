<?php
/**
 * Created by PhpStorm.
 * User: jeffreyallen
 * Date: 1/8/18
 * Time: 1:38 PM
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{

    public function number()
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body>Lucky numer:'. $number .'</body></html>'
        );
    }

}
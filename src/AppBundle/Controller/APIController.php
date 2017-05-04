<?php

/**
 * Created by PhpStorm.
 * User: PaisanRietbroek
 * Date: 3-5-2017
 * Time: 16:58
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class APIController extends Controller
{

    /**
     * @Route("/test")
     * @Method("GET")
     */
    public function test() {
        return new JsonResponse("called");
    }

    /**
     * @Route("/api/test")
     * @Method("GET")
     */
    public function testapi() {
        return new JsonResponse("called api");
    }

}
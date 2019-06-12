<?php

namespace App\Controller;

use App\Entity\Employee;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Request;

class LocalizarEmpleadoController extends AbstractController
{
    /**
     * @Route("/empleado", name="localizar_empleado")
     */
    public function index()
    {
        return $this->render('Employee/index', [
            'controller_name' => 'LocalizarEmpleadoController',
        ]);

    }

    /**
     * @param Request $request
     * @param AuthenticationUtils $authUtils
     * @Route("/search",name="app_search")
     */
    public function buscar(Request $request, AuthenticationUtils $authUtils){
        $error=$authUtils->getLastAuthenticationError();
        $employee=$authUtils->getId();
        return $this->render('templates/base.html.twig',[
            'Error'=>$error, //No recuerdo hacerlo en la caja de resultado pero esto lo notificará en toda.
            'employee'=>$employee
        ]);
    }


}

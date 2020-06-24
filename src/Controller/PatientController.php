<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Patient;

    /**
     * @Route("/patient")
     */
class PatientController extends AbstractController
{
    /**
     * @Route("/", name="patient_interface")
     */
    public function interface(Patient $patient)
    {
        return $this->render('patient/interface.html.twig', [
            'patient' => $patient,
        ]);
    }
}

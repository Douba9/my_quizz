<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $rowNo = 1;

        if (($fp = fopen("/home/marius/delivery/my_quizz/QuizzApp/src/Controller/questions.csv", "r")) !== FALSE) {
        while (($row = fgetcsv($fp, 1000, ",")) !== FALSE) {
        $num = count($row);
        $rowNo++;
        for ($c=0; $c < $num; $c++) {
        echo $row[$c] . "<br />\n";
        }
        }
        fclose($fp);
        }

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}

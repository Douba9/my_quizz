<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HarryPotterController extends AbstractController
{
    #[Route('/Harry_Potter', name: 'app_harry_potter')]
    public function index(): Response
    {
        $rowNo = 1;
        $questions = [];

        if (($fp = fopen("/home/marius/delivery/my_quizz/QuizzApp/src/Controller/questions.csv", "r")) !== FALSE) {
            while (($row = fgetcsv($fp, 1000, ",")) !== FALSE) {
                $num = count($row);
                $rowNo++;
                for ($c = 0; $c < $num; $c++) {
                    if($row[$c] == ";;;"){
                        goto a;
                    }else{
                        $sep = explode(";", $row[$c]);
                        foreach($sep as $i){
                            echo utf8_encode($i."<br>");
                        }
                    }
                }
            }
            fclose($fp);
        }

        a:

        return $this->render('harry_potter/index.html.twig', [
            'controller_name' => 'HarryPotterController',
            'questions' => $questions,
        ]);
    }
}

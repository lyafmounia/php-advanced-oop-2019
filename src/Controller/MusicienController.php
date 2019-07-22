<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use http\Env\Response;

class MusicienController extends AbstractController
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
        public function defaultAction()
        {
//        $ret = [];
            $aMusiciens = array(
                "1" => "Jean",
                "2" => "Jack",
                "3" => "Paul",
                "5" => "Alex",
                "6" => "Julien",
            );
            $aGroupes = array(
                "1" => "Groupe1",
                "2" => "Groupe2",
                "3" => "Groupe3",
                "4" => "Groupe4",
                "5" => "Groupe5",
            );
            $aInstruments = array(
                "1" => "Guitare",
                "2" => "Piano",
                "3" => "Batterie",
                "4" => "flute",
                "5" => "Violon",
            );
            for ($i = 0; $i <= 3; $i++) {
                $randMusicien = rand(1, 6);
                $randGroupe = rand(1, 5);
                $randInstument = rand(1, 5);
                $ret[] = array(
                    "Musiciens" => $aMusiciens[$randMusicien],
                    "Groupes" => $aGroupes[$randGroupe],
                    "Instruments" => $aInstruments[$randInstument]
                );
            }


        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}

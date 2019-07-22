<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Instrument;
use App\Entity\Musicien;
use App\Entity\Groupe;
use App\Entity\Concert;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index( Instrument $instrument, Musicien $musicien, Groupe $groupe, Concert $concert)
    {
        $instrument = new Instrument();
        $musicien = new Musicien();
        $groupe = new  Groupe();
        $concert = new Concert();

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}

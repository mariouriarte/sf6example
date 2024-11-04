<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class MultiRoutesController extends AbstractController
{
    #[Route('/browse1', name: 'browser1')]
    public function browse1(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 1',
        ]);
    }

    #[Route('/browse2', name: 'browser2')]
    public function browse2(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 2',
        ]);
    }

    #[Route('/browse3', name: 'browser3')]
    public function browse3(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 3',
        ]);
    }

    #[Route('/browse4', name: 'browser4')]
    public function browse4(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 4',
        ]);
    }

    #[Route('/browse5', name: 'browser5')]
    public function browse5(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 5',
        ]);
    }

    #[Route('/browse6', name: 'browser6')]
    public function browse6(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 6',
        ]);
    }

    #[Route('/browse7', name: 'browser7')]
    public function browse7(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 7',
        ]);
    }

    #[Route('/browse8', name: 'browser8')]
    public function browse8(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 8',
        ]);
    }

    #[Route('/browse9', name: 'browser9')]
    public function browse9(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 9',
        ]);
    }

    #[Route('/browse10', name: 'browser10')]
    public function browse10(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 10',
        ]);
    }

    #[Route('/browse11', name: 'browser11')]
    public function browse11(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 11',
        ]);
    }

    #[Route('/browse12', name: 'browser12')]
    public function browse12(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 12',
        ]);
    }

    #[Route('/browse13', name: 'browser13')]
    public function browse13(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 13',
        ]);
    }

    #[Route('/browse14', name: 'browser14')]
    public function browse14(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 14',
        ]);
    }

    #[Route('/browse15', name: 'browser15')]
    public function browse15(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 15',
        ]);
    }

    #[Route('/browse16', name: 'browser16')]
    public function browse16(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 16',
        ]);
    }

    #[Route('/browse17', name: 'browser17')]
    public function browse17(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 17',
        ]);
    }

    #[Route('/browse18', name: 'browser18')]
    public function browse18(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 18',
        ]);
    }

    #[Route('/browse19', name: 'browser19')]
    public function browse19(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 19',
        ]);
    }

    #[Route('/browse20', name: 'browser20')]
    public function browse20(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 20',
        ]);
    }

    #[Route('/browse21', name: 'browser21')]
    public function browse21(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 21',
        ]);
    }

    #[Route('/browse22', name: 'browser22')]
    public function browse22(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 22',
        ]);
    }

    #[Route('/browse23', name: 'browser23')]
    public function browse23(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 23',
        ]);
    }

    #[Route('/browse24', name: 'browser24')]
    public function browse24(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 24',
        ]);
    }

    #[Route('/browse25', name: 'browser25')]
    public function browse25(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 25',
        ]);
    }

    #[Route('/browse26', name: 'browser26')]
    public function browse26(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 26',
        ]);
    }

    #[Route('/browse27', name: 'browser27')]
    public function browse27(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 27',
        ]);
    }

    #[Route('/browse28', name: 'browser28')]
    public function browse28(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 28',
        ]);
    }

    #[Route('/browse29', name: 'browser29')]
    public function browse29(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 29',
        ]);
    }

    #[Route('/browse30', name: 'browser30')]
    public function browse30(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 30',
        ]);
    }

    #[Route('/browse31', name: 'browser31')]
    public function browse31(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 31',
        ]);
    }

    #[Route('/browse32', name: 'browser32')]
    public function browse32(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 32',
        ]);
    }

    #[Route('/browse33', name: 'browser33')]
    public function browse33(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 33',
        ]);
    }

    #[Route('/browse34', name: 'browser34')]
    public function browse34(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 34',
        ]);
    }

    #[Route('/browse35', name: 'browser35')]
    public function browse35(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 35',
        ]);
    }

    #[Route('/browse36', name: 'browser36')]
    public function browse36(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 36',
        ]);
    }

    #[Route('/browse37', name: 'browser37')]
    public function browse37(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 37',
        ]);
    }

    #[Route('/browse38', name: 'browser38')]
    public function browse38(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 38',
        ]);
    }

    #[Route('/browse39', name: 'browser39')]
    public function browse39(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 39',
        ]);
    }

    #[Route('/browse40', name: 'browser40')]
    public function browse40(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 40',
        ]);
    }

    #[Route('/browse41', name: 'browser41')]
    public function browse41(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 41',
        ]);
    }

    #[Route('/browse42', name: 'browser42')]
    public function browse42(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 42',
        ]);
    }

    #[Route('/browse43', name: 'browser43')]
    public function browse43(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 43',
        ]);
    }

    #[Route('/browse44', name: 'browser44')]
    public function browse44(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 44',
        ]);
    }

    #[Route('/browse45', name: 'browser45')]
    public function browse45(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 45',
        ]);
    }

    #[Route('/browse46', name: 'browser46')]
    public function browse46(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 46',
        ]);
    }

    #[Route('/browse47', name: 'browser47')]
    public function browse47(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 47',
        ]);
    }

    #[Route('/browse48', name: 'browser48')]
    public function browse48(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 48',
        ]);
    }

    #[Route('/browse49', name: 'browser49')]
    public function browse49(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 49',
        ]);
    }

    #[Route('/browse50', name: 'browser50')]
    public function browse50(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 50',
        ]);
    }

    #[Route('/browse51', name: 'browser51')]
    public function browse51(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 51',
        ]);
    }

    #[Route('/browse52', name: 'browser52')]
    public function browse52(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 52',
        ]);
    }

    #[Route('/browse53', name: 'browser53')]
    public function browse53(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 53',
        ]);
    }

    #[Route('/browse54', name: 'browser54')]
    public function browse54(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 54',
        ]);
    }

    #[Route('/browse55', name: 'browser55')]
    public function browse55(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 55',
        ]);
    }

    #[Route('/browse56', name: 'browser56')]
    public function browse56(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 56',
        ]);
    }

    #[Route('/browse57', name: 'browser57')]
    public function browse57(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 57',
        ]);
    }

    #[Route('/browse58', name: 'browser58')]
    public function browse58(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 58',
        ]);
    }

    #[Route('/browse59', name: 'browser59')]
    public function browse59(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 59',
        ]);
    }

    #[Route('/browse60', name: 'browser60')]
    public function browse60(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 60',
        ]);
    }

    #[Route('/browse61', name: 'browser61')]
    public function browse61(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 61',
        ]);
    }

    #[Route('/browse62', name: 'browser62')]
    public function browse62(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 62',
        ]);
    }

    #[Route('/browse63', name: 'browser63')]
    public function browse63(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 63',
        ]);
    }

    #[Route('/browse64', name: 'browser64')]
    public function browse64(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 64',
        ]);
    }

    #[Route('/browse65', name: 'browser65')]
    public function browse65(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 65',
        ]);
    }

    #[Route('/browse66', name: 'browser66')]
    public function browse66(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 66',
        ]);
    }

    #[Route('/browse67', name: 'browser67')]
    public function browse67(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 67',
        ]);
    }

    #[Route('/browse68', name: 'browser68')]
    public function browse68(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 68',
        ]);
    }

    #[Route('/browse69', name: 'browser69')]
    public function browse69(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 69',
        ]);
    }

    #[Route('/browse70', name: 'browser70')]
    public function browse70(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 70',
        ]);
    }

    #[Route('/browse71', name: 'browser71')]
    public function browse71(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 71',
        ]);
    }

    #[Route('/browse72', name: 'browser72')]
    public function browse72(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 72',
        ]);
    }

    #[Route('/browse73', name: 'browser73')]
    public function browse73(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 73',
        ]);
    }

    #[Route('/browse74', name: 'browser74')]
    public function browse74(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 74',
        ]);
    }

    #[Route('/browse75', name: 'browser75')]
    public function browse75(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 75',
        ]);
    }

    #[Route('/browse76', name: 'browser76')]
    public function browse76(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 76',
        ]);
    }

    #[Route('/browse77', name: 'browser77')]
    public function browse77(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 77',
        ]);
    }

    #[Route('/browse78', name: 'browser78')]
    public function browse78(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 78',
        ]);
    }

    #[Route('/browse79', name: 'browser79')]
    public function browse79(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 79',
        ]);
    }

    #[Route('/browse80', name: 'browser80')]
    public function browse80(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 80',
        ]);
    }

    #[Route('/browse81', name: 'browser81')]
    public function browse81(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 81',
        ]);
    }

    #[Route('/browse82', name: 'browser82')]
    public function browse82(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 82',
        ]);
    }

    #[Route('/browse83', name: 'browser83')]
    public function browse83(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 83',
        ]);
    }

    #[Route('/browse84', name: 'browser84')]
    public function browse84(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 84',
        ]);
    }

    #[Route('/browse85', name: 'browser85')]
    public function browse85(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 85',
        ]);
    }

    #[Route('/browse86', name: 'browser86')]
    public function browse86(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 86',
        ]);
    }

    #[Route('/browse87', name: 'browser87')]
    public function browse87(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 87',
        ]);
    }

    #[Route('/browse88', name: 'browser88')]
    public function browse88(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 88',
        ]);
    }

    #[Route('/browse89', name: 'browser89')]
    public function browse89(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 89',
        ]);
    }

    #[Route('/browse90', name: 'browser90')]
    public function browse90(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 90',
        ]);
    }

    #[Route('/browse91', name: 'browser91')]
    public function browse91(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 91',
        ]);
    }

    #[Route('/browse92', name: 'browser92')]
    public function browse92(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 92',
        ]);
    }

    #[Route('/browse93', name: 'browser93')]
    public function browse93(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 93',
        ]);
    }

    #[Route('/browse94', name: 'browser94')]
    public function browse94(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 94',
        ]);
    }

    #[Route('/browse95', name: 'browser95')]
    public function browse95(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 95',
        ]);
    }

    #[Route('/browse96', name: 'browser96')]
    public function browse96(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 96',
        ]);
    }

    #[Route('/browse97', name: 'browser97')]
    public function browse97(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 97',
        ]);
    }

    #[Route('/browse98', name: 'browser98')]
    public function browse98(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 98',
        ]);
    }

    #[Route('/browse99', name: 'browser99')]
    public function browse99(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 99',
        ]);
    }

    #[Route('/browse100', name: 'browser100')]
    public function browse100(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 100',
        ]);
    }

    #[Route('/browse101', name: 'browser101')]
    public function browse101(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 101',
        ]);
    }

    #[Route('/browse102', name: 'browser102')]
    public function browse102(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 102',
        ]);
    }

    #[Route('/browse103', name: 'browser103')]
    public function browse103(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 103',
        ]);
    }

    #[Route('/browse104', name: 'browser104')]
    public function browse104(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 104',
        ]);
    }

    #[Route('/browse105', name: 'browser105')]
    public function browse105(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 105',
        ]);
    }

    #[Route('/browse106', name: 'browser106')]
    public function browse106(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 106',
        ]);
    }

    #[Route('/browse107', name: 'browser107')]
    public function browse107(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 107',
        ]);
    }

    #[Route('/browse108', name: 'browser108')]
    public function browse108(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 108',
        ]);
    }

    #[Route('/browse109', name: 'browser109')]
    public function browse109(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 109',
        ]);
    }

    #[Route('/browse110', name: 'browser110')]
    public function browse110(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 110',
        ]);
    }

    #[Route('/browse111', name: 'browser111')]
    public function browse111(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 111',
        ]);
    }

    #[Route('/browse112', name: 'browser112')]
    public function browse112(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 112',
        ]);
    }

    #[Route('/browse113', name: 'browser113')]
    public function browse113(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 113',
        ]);
    }

    #[Route('/browse114', name: 'browser114')]
    public function browse114(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 114',
        ]);
    }

    #[Route('/browse115', name: 'browser115')]
    public function browse115(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 115',
        ]);
    }

    #[Route('/browse116', name: 'browser116')]
    public function browse116(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 116',
        ]);
    }

    #[Route('/browse117', name: 'browser117')]
    public function browse117(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 117',
        ]);
    }

    #[Route('/browse118', name: 'browser118')]
    public function browse118(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 118',
        ]);
    }

    #[Route('/browse119', name: 'browser119')]
    public function browse119(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 119',
        ]);
    }

    #[Route('/browse120', name: 'browser120')]
    public function browse120(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 120',
        ]);
    }

    #[Route('/browse121', name: 'browser121')]
    public function browse121(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 121',
        ]);
    }

    #[Route('/browse122', name: 'browser122')]
    public function browse122(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 122',
        ]);
    }

    #[Route('/browse123', name: 'browser123')]
    public function browse123(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 123',
        ]);
    }

    #[Route('/browse124', name: 'browser124')]
    public function browse124(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 124',
        ]);
    }

    #[Route('/browse125', name: 'browser125')]
    public function browse125(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 125',
        ]);
    }

    #[Route('/browse126', name: 'browser126')]
    public function browse126(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 126',
        ]);
    }

    #[Route('/browse127', name: 'browser127')]
    public function browse127(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 127',
        ]);
    }

    #[Route('/browse128', name: 'browser128')]
    public function browse128(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 128',
        ]);
    }

    #[Route('/browse129', name: 'browser129')]
    public function browse129(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 129',
        ]);
    }

    #[Route('/browse130', name: 'browser130')]
    public function browse130(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 130',
        ]);
    }

    #[Route('/browse131', name: 'browser131')]
    public function browse131(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 131',
        ]);
    }

    #[Route('/browse132', name: 'browser132')]
    public function browse132(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 132',
        ]);
    }

    #[Route('/browse133', name: 'browser133')]
    public function browse133(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 133',
        ]);
    }

    #[Route('/browse134', name: 'browser134')]
    public function browse134(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 134',
        ]);
    }

    #[Route('/browse135', name: 'browser135')]
    public function browse135(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 135',
        ]);
    }

    #[Route('/browse136', name: 'browser136')]
    public function browse136(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 136',
        ]);
    }

    #[Route('/browse137', name: 'browser137')]
    public function browse137(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 137',
        ]);
    }

    #[Route('/browse138', name: 'browser138')]
    public function browse138(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 138',
        ]);
    }

    #[Route('/browse139', name: 'browser139')]
    public function browse139(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 139',
        ]);
    }

    #[Route('/browse140', name: 'browser140')]
    public function browse140(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 140',
        ]);
    }

    #[Route('/browse141', name: 'browser141')]
    public function browse141(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 141',
        ]);
    }

    #[Route('/browse142', name: 'browser142')]
    public function browse142(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 142',
        ]);
    }

    #[Route('/browse143', name: 'browser143')]
    public function browse143(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 143',
        ]);
    }

    #[Route('/browse144', name: 'browser144')]
    public function browse144(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 144',
        ]);
    }

    #[Route('/browse145', name: 'browser145')]
    public function browse145(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 145',
        ]);
    }

    #[Route('/browse146', name: 'browser146')]
    public function browse146(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 146',
        ]);
    }

    #[Route('/browse147', name: 'browser147')]
    public function browse147(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 147',
        ]);
    }

    #[Route('/browse148', name: 'browser148')]
    public function browse148(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 148',
        ]);
    }

    #[Route('/browse149', name: 'browser149')]
    public function browse149(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 149',
        ]);
    }

    #[Route('/browse150', name: 'browser150')]
    public function browse150(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 150',
        ]);
    }

    #[Route('/browse151', name: 'browser151')]
    public function browse151(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 151',
        ]);
    }

    #[Route('/browse152', name: 'browser152')]
    public function browse152(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 152',
        ]);
    }

    #[Route('/browse153', name: 'browser153')]
    public function browse153(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 153',
        ]);
    }

    #[Route('/browse154', name: 'browser154')]
    public function browse154(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 154',
        ]);
    }

    #[Route('/browse155', name: 'browser155')]
    public function browse155(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 155',
        ]);
    }

    #[Route('/browse156', name: 'browser156')]
    public function browse156(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 156',
        ]);
    }

    #[Route('/browse157', name: 'browser157')]
    public function browse157(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 157',
        ]);
    }

    #[Route('/browse158', name: 'browser158')]
    public function browse158(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 158',
        ]);
    }

    #[Route('/browse159', name: 'browser159')]
    public function browse159(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 159',
        ]);
    }

    #[Route('/browse160', name: 'browser160')]
    public function browse160(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 160',
        ]);
    }

    #[Route('/browse161', name: 'browser161')]
    public function browse161(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 161',
        ]);
    }

    #[Route('/browse162', name: 'browser162')]
    public function browse162(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 162',
        ]);
    }

    #[Route('/browse163', name: 'browser163')]
    public function browse163(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 163',
        ]);
    }

    #[Route('/browse164', name: 'browser164')]
    public function browse164(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 164',
        ]);
    }

    #[Route('/browse165', name: 'browser165')]
    public function browse165(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 165',
        ]);
    }

    #[Route('/browse166', name: 'browser166')]
    public function browse166(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 166',
        ]);
    }

    #[Route('/browse167', name: 'browser167')]
    public function browse167(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 167',
        ]);
    }

    #[Route('/browse168', name: 'browser168')]
    public function browse168(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 168',
        ]);
    }

    #[Route('/browse169', name: 'browser169')]
    public function browse169(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 169',
        ]);
    }

    #[Route('/browse170', name: 'browser170')]
    public function browse170(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 170',
        ]);
    }

    #[Route('/browse171', name: 'browser171')]
    public function browse171(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 171',
        ]);
    }

    #[Route('/browse172', name: 'browser172')]
    public function browse172(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 172',
        ]);
    }

    #[Route('/browse173', name: 'browser173')]
    public function browse173(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 173',
        ]);
    }

    #[Route('/browse174', name: 'browser174')]
    public function browse174(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 174',
        ]);
    }

    #[Route('/browse175', name: 'browser175')]
    public function browse175(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 175',
        ]);
    }

    #[Route('/browse176', name: 'browser176')]
    public function browse176(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 176',
        ]);
    }

    #[Route('/browse177', name: 'browser177')]
    public function browse177(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 177',
        ]);
    }

    #[Route('/browse178', name: 'browser178')]
    public function browse178(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 178',
        ]);
    }

    #[Route('/browse179', name: 'browser179')]
    public function browse179(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 179',
        ]);
    }

    #[Route('/browse180', name: 'browser180')]
    public function browse180(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 180',
        ]);
    }

    #[Route('/browse181', name: 'browser181')]
    public function browse181(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 181',
        ]);
    }

    #[Route('/browse182', name: 'browser182')]
    public function browse182(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 182',
        ]);
    }

    #[Route('/browse183', name: 'browser183')]
    public function browse183(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 183',
        ]);
    }

    #[Route('/browse184', name: 'browser184')]
    public function browse184(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 184',
        ]);
    }

    #[Route('/browse185', name: 'browser185')]
    public function browse185(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 185',
        ]);
    }

    #[Route('/browse186', name: 'browser186')]
    public function browse186(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 186',
        ]);
    }

    #[Route('/browse187', name: 'browser187')]
    public function browse187(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 187',
        ]);
    }

    #[Route('/browse188', name: 'browser188')]
    public function browse188(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 188',
        ]);
    }

    #[Route('/browse189', name: 'browser189')]
    public function browse189(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 189',
        ]);
    }

    #[Route('/browse190', name: 'browser190')]
    public function browse190(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 190',
        ]);
    }

    #[Route('/browse191', name: 'browser191')]
    public function browse191(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 191',
        ]);
    }

    #[Route('/browse192', name: 'browser192')]
    public function browse192(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 192',
        ]);
    }

    #[Route('/browse193', name: 'browser193')]
    public function browse193(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 193',
        ]);
    }

    #[Route('/browse194', name: 'browser194')]
    public function browse194(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 194',
        ]);
    }

    #[Route('/browse195', name: 'browser195')]
    public function browse195(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 195',
        ]);
    }

    #[Route('/browse196', name: 'browser196')]
    public function browse196(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 196',
        ]);
    }

    #[Route('/browse197', name: 'browser197')]
    public function browse197(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 197',
        ]);
    }

    #[Route('/browse198', name: 'browser198')]
    public function browse198(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 198',
        ]);
    }

    #[Route('/browse199', name: 'browser199')]
    public function browse199(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 199',
        ]);
    }

    #[Route('/browse200', name: 'browser200')]
    public function browse200(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 200',
        ]);
    }

    #[Route('/browse201', name: 'browser201')]
    public function browse201(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 201',
        ]);
    }

    #[Route('/browse202', name: 'browser202')]
    public function browse202(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 202',
        ]);
    }

    #[Route('/browse203', name: 'browser203')]
    public function browse203(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 203',
        ]);
    }

    #[Route('/browse204', name: 'browser204')]
    public function browse204(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 204',
        ]);
    }

    #[Route('/browse205', name: 'browser205')]
    public function browse205(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 205',
        ]);
    }

    #[Route('/browse206', name: 'browser206')]
    public function browse206(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 206',
        ]);
    }

    #[Route('/browse207', name: 'browser207')]
    public function browse207(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 207',
        ]);
    }

    #[Route('/browse208', name: 'browser208')]
    public function browse208(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 208',
        ]);
    }

    #[Route('/browse209', name: 'browser209')]
    public function browse209(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 209',
        ]);
    }

    #[Route('/browse210', name: 'browser210')]
    public function browse210(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 210',
        ]);
    }

    #[Route('/browse211', name: 'browser211')]
    public function browse211(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 211',
        ]);
    }

    #[Route('/browse212', name: 'browser212')]
    public function browse212(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 212',
        ]);
    }

    #[Route('/browse213', name: 'browser213')]
    public function browse213(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 213',
        ]);
    }

    #[Route('/browse214', name: 'browser214')]
    public function browse214(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 214',
        ]);
    }

    #[Route('/browse215', name: 'browser215')]
    public function browse215(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 215',
        ]);
    }

    #[Route('/browse216', name: 'browser216')]
    public function browse216(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 216',
        ]);
    }

    #[Route('/browse217', name: 'browser217')]
    public function browse217(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 217',
        ]);
    }

    #[Route('/browse218', name: 'browser218')]
    public function browse218(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 218',
        ]);
    }

    #[Route('/browse219', name: 'browser219')]
    public function browse219(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 219',
        ]);
    }

    #[Route('/browse220', name: 'browser220')]
    public function browse220(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 220',
        ]);
    }

    #[Route('/browse221', name: 'browser221')]
    public function browse221(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 221',
        ]);
    }

    #[Route('/browse222', name: 'browser222')]
    public function browse222(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 222',
        ]);
    }

    #[Route('/browse223', name: 'browser223')]
    public function browse223(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 223',
        ]);
    }

    #[Route('/browse224', name: 'browser224')]
    public function browse224(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 224',
        ]);
    }

    #[Route('/browse225', name: 'browser225')]
    public function browse225(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 225',
        ]);
    }

    #[Route('/browse226', name: 'browser226')]
    public function browse226(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 226',
        ]);
    }

    #[Route('/browse227', name: 'browser227')]
    public function browse227(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 227',
        ]);
    }

    #[Route('/browse228', name: 'browser228')]
    public function browse228(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 228',
        ]);
    }

    #[Route('/browse229', name: 'browser229')]
    public function browse229(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 229',
        ]);
    }

    #[Route('/browse230', name: 'browser230')]
    public function browse230(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 230',
        ]);
    }

    #[Route('/browse231', name: 'browser231')]
    public function browse231(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 231',
        ]);
    }

    #[Route('/browse232', name: 'browser232')]
    public function browse232(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 232',
        ]);
    }

    #[Route('/browse233', name: 'browser233')]
    public function browse233(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 233',
        ]);
    }

    #[Route('/browse234', name: 'browser234')]
    public function browse234(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 234',
        ]);
    }

    #[Route('/browse235', name: 'browser235')]
    public function browse235(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 235',
        ]);
    }

    #[Route('/browse236', name: 'browser236')]
    public function browse236(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 236',
        ]);
    }

    #[Route('/browse237', name: 'browser237')]
    public function browse237(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 237',
        ]);
    }

    #[Route('/browse238', name: 'browser238')]
    public function browse238(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 238',
        ]);
    }

    #[Route('/browse239', name: 'browser239')]
    public function browse239(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 239',
        ]);
    }

    #[Route('/browse240', name: 'browser240')]
    public function browse240(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 240',
        ]);
    }

    #[Route('/browse241', name: 'browser241')]
    public function browse241(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 241',
        ]);
    }

    #[Route('/browse242', name: 'browser242')]
    public function browse242(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 242',
        ]);
    }

    #[Route('/browse243', name: 'browser243')]
    public function browse243(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 243',
        ]);
    }

    #[Route('/browse244', name: 'browser244')]
    public function browse244(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 244',
        ]);
    }

    #[Route('/browse245', name: 'browser245')]
    public function browse245(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 245',
        ]);
    }

    #[Route('/browse246', name: 'browser246')]
    public function browse246(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 246',
        ]);
    }

    #[Route('/browse247', name: 'browser247')]
    public function browse247(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 247',
        ]);
    }

    #[Route('/browse248', name: 'browser248')]
    public function browse248(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 248',
        ]);
    }

    #[Route('/browse249', name: 'browser249')]
    public function browse249(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 249',
        ]);
    }

    #[Route('/browse250', name: 'browser250')]
    public function browse250(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 250',
        ]);
    }

    #[Route('/browse251', name: 'browser251')]
    public function browse251(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 251',
        ]);
    }

    #[Route('/browse252', name: 'browser252')]
    public function browse252(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 252',
        ]);
    }

    #[Route('/browse253', name: 'browser253')]
    public function browse253(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 253',
        ]);
    }

    #[Route('/browse254', name: 'browser254')]
    public function browse254(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 254',
        ]);
    }

    #[Route('/browse255', name: 'browser255')]
    public function browse255(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 255',
        ]);
    }

    #[Route('/browse256', name: 'browser256')]
    public function browse256(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 256',
        ]);
    }

    #[Route('/browse257', name: 'browser257')]
    public function browse257(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 257',
        ]);
    }

    #[Route('/browse258', name: 'browser258')]
    public function browse258(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 258',
        ]);
    }

    #[Route('/browse259', name: 'browser259')]
    public function browse259(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 259',
        ]);
    }

    #[Route('/browse260', name: 'browser260')]
    public function browse260(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 260',
        ]);
    }

    #[Route('/browse261', name: 'browser261')]
    public function browse261(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 261',
        ]);
    }

    #[Route('/browse262', name: 'browser262')]
    public function browse262(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 262',
        ]);
    }

    #[Route('/browse263', name: 'browser263')]
    public function browse263(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 263',
        ]);
    }

    #[Route('/browse264', name: 'browser264')]
    public function browse264(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 264',
        ]);
    }

    #[Route('/browse265', name: 'browser265')]
    public function browse265(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 265',
        ]);
    }

    #[Route('/browse266', name: 'browser266')]
    public function browse266(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 266',
        ]);
    }

    #[Route('/browse267', name: 'browser267')]
    public function browse267(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 267',
        ]);
    }

    #[Route('/browse268', name: 'browser268')]
    public function browse268(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 268',
        ]);
    }

    #[Route('/browse269', name: 'browser269')]
    public function browse269(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 269',
        ]);
    }

    #[Route('/browse270', name: 'browser270')]
    public function browse270(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 270',
        ]);
    }

    #[Route('/browse271', name: 'browser271')]
    public function browse271(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 271',
        ]);
    }

    #[Route('/browse272', name: 'browser272')]
    public function browse272(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 272',
        ]);
    }

    #[Route('/browse273', name: 'browser273')]
    public function browse273(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 273',
        ]);
    }

    #[Route('/browse274', name: 'browser274')]
    public function browse274(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 274',
        ]);
    }

    #[Route('/browse275', name: 'browser275')]
    public function browse275(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 275',
        ]);
    }

    #[Route('/browse276', name: 'browser276')]
    public function browse276(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 276',
        ]);
    }

    #[Route('/browse277', name: 'browser277')]
    public function browse277(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 277',
        ]);
    }

    #[Route('/browse278', name: 'browser278')]
    public function browse278(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 278',
        ]);
    }

    #[Route('/browse279', name: 'browser279')]
    public function browse279(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 279',
        ]);
    }

    #[Route('/browse280', name: 'browser280')]
    public function browse280(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 280',
        ]);
    }

    #[Route('/browse281', name: 'browser281')]
    public function browse281(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 281',
        ]);
    }

    #[Route('/browse282', name: 'browser282')]
    public function browse282(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 282',
        ]);
    }

    #[Route('/browse283', name: 'browser283')]
    public function browse283(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 283',
        ]);
    }

    #[Route('/browse284', name: 'browser284')]
    public function browse284(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 284',
        ]);
    }

    #[Route('/browse285', name: 'browser285')]
    public function browse285(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 285',
        ]);
    }

    #[Route('/browse286', name: 'browser286')]
    public function browse286(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 286',
        ]);
    }

    #[Route('/browse287', name: 'browser287')]
    public function browse287(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 287',
        ]);
    }

    #[Route('/browse288', name: 'browser288')]
    public function browse288(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 288',
        ]);
    }

    #[Route('/browse289', name: 'browser289')]
    public function browse289(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 289',
        ]);
    }

    #[Route('/browse290', name: 'browser290')]
    public function browse290(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 290',
        ]);
    }

    #[Route('/browse291', name: 'browser291')]
    public function browse291(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 291',
        ]);
    }

    #[Route('/browse292', name: 'browser292')]
    public function browse292(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 292',
        ]);
    }

    #[Route('/browse293', name: 'browser293')]
    public function browse293(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 293',
        ]);
    }

    #[Route('/browse294', name: 'browser294')]
    public function browse294(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 294',
        ]);
    }

    #[Route('/browse295', name: 'browser295')]
    public function browse295(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 295',
        ]);
    }

    #[Route('/browse296', name: 'browser296')]
    public function browse296(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 296',
        ]);
    }

    #[Route('/browse297', name: 'browser297')]
    public function browse297(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 297',
        ]);
    }

    #[Route('/browse298', name: 'browser298')]
    public function browse298(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 298',
        ]);
    }

    #[Route('/browse299', name: 'browser299')]
    public function browse299(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 299',
        ]);
    }

    #[Route('/browse300', name: 'browser300')]
    public function browse300(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 300',
        ]);
    }

    #[Route('/browse301', name: 'browser301')]
    public function browse301(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 301',
        ]);
    }

    #[Route('/browse302', name: 'browser302')]
    public function browse302(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 302',
        ]);
    }

    #[Route('/browse303', name: 'browser303')]
    public function browse303(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 303',
        ]);
    }

    #[Route('/browse304', name: 'browser304')]
    public function browse304(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 304',
        ]);
    }

    #[Route('/browse305', name: 'browser305')]
    public function browse305(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 305',
        ]);
    }

    #[Route('/browse306', name: 'browser306')]
    public function browse306(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 306',
        ]);
    }

    #[Route('/browse307', name: 'browser307')]
    public function browse307(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 307',
        ]);
    }

    #[Route('/browse308', name: 'browser308')]
    public function browse308(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 308',
        ]);
    }

    #[Route('/browse309', name: 'browser309')]
    public function browse309(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 309',
        ]);
    }

    #[Route('/browse310', name: 'browser310')]
    public function browse310(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 310',
        ]);
    }

    #[Route('/browse311', name: 'browser311')]
    public function browse311(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 311',
        ]);
    }

    #[Route('/browse312', name: 'browser312')]
    public function browse312(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 312',
        ]);
    }

    #[Route('/browse313', name: 'browser313')]
    public function browse313(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 313',
        ]);
    }

    #[Route('/browse314', name: 'browser314')]
    public function browse314(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 314',
        ]);
    }

    #[Route('/browse315', name: 'browser315')]
    public function browse315(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 315',
        ]);
    }

    #[Route('/browse316', name: 'browser316')]
    public function browse316(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 316',
        ]);
    }

    #[Route('/browse317', name: 'browser317')]
    public function browse317(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 317',
        ]);
    }

    #[Route('/browse318', name: 'browser318')]
    public function browse318(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 318',
        ]);
    }

    #[Route('/browse319', name: 'browser319')]
    public function browse319(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 319',
        ]);
    }

    #[Route('/browse320', name: 'browser320')]
    public function browse320(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 320',
        ]);
    }

    #[Route('/browse321', name: 'browser321')]
    public function browse321(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 321',
        ]);
    }

    #[Route('/browse322', name: 'browser322')]
    public function browse322(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 322',
        ]);
    }

    #[Route('/browse323', name: 'browser323')]
    public function browse323(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 323',
        ]);
    }

    #[Route('/browse324', name: 'browser324')]
    public function browse324(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 324',
        ]);
    }

    #[Route('/browse325', name: 'browser325')]
    public function browse325(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 325',
        ]);
    }

    #[Route('/browse326', name: 'browser326')]
    public function browse326(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 326',
        ]);
    }

    #[Route('/browse327', name: 'browser327')]
    public function browse327(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 327',
        ]);
    }

    #[Route('/browse328', name: 'browser328')]
    public function browse328(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 328',
        ]);
    }

    #[Route('/browse329', name: 'browser329')]
    public function browse329(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 329',
        ]);
    }

    #[Route('/browse330', name: 'browser330')]
    public function browse330(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 330',
        ]);
    }

    #[Route('/browse331', name: 'browser331')]
    public function browse331(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 331',
        ]);
    }

    #[Route('/browse332', name: 'browser332')]
    public function browse332(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 332',
        ]);
    }

    #[Route('/browse333', name: 'browser333')]
    public function browse333(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 333',
        ]);
    }

    #[Route('/browse334', name: 'browser334')]
    public function browse334(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 334',
        ]);
    }

    #[Route('/browse335', name: 'browser335')]
    public function browse335(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 335',
        ]);
    }

    #[Route('/browse336', name: 'browser336')]
    public function browse336(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 336',
        ]);
    }

    #[Route('/browse337', name: 'browser337')]
    public function browse337(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 337',
        ]);
    }

    #[Route('/browse338', name: 'browser338')]
    public function browse338(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 338',
        ]);
    }

    #[Route('/browse339', name: 'browser339')]
    public function browse339(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 339',
        ]);
    }

    #[Route('/browse340', name: 'browser340')]
    public function browse340(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 340',
        ]);
    }

    #[Route('/browse341', name: 'browser341')]
    public function browse341(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 341',
        ]);
    }

    #[Route('/browse342', name: 'browser342')]
    public function browse342(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 342',
        ]);
    }

    #[Route('/browse343', name: 'browser343')]
    public function browse343(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 343',
        ]);
    }

    #[Route('/browse344', name: 'browser344')]
    public function browse344(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 344',
        ]);
    }

    #[Route('/browse345', name: 'browser345')]
    public function browse345(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 345',
        ]);
    }

    #[Route('/browse346', name: 'browser346')]
    public function browse346(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 346',
        ]);
    }

    #[Route('/browse347', name: 'browser347')]
    public function browse347(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 347',
        ]);
    }

    #[Route('/browse348', name: 'browser348')]
    public function browse348(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 348',
        ]);
    }

    #[Route('/browse349', name: 'browser349')]
    public function browse349(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 349',
        ]);
    }

    #[Route('/browse350', name: 'browser350')]
    public function browse350(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 350',
        ]);
    }

    #[Route('/browse351', name: 'browser351')]
    public function browse351(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 351',
        ]);
    }

    #[Route('/browse352', name: 'browser352')]
    public function browse352(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 352',
        ]);
    }

    #[Route('/browse353', name: 'browser353')]
    public function browse353(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 353',
        ]);
    }

    #[Route('/browse354', name: 'browser354')]
    public function browse354(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 354',
        ]);
    }

    #[Route('/browse355', name: 'browser355')]
    public function browse355(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 355',
        ]);
    }

    #[Route('/browse356', name: 'browser356')]
    public function browse356(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 356',
        ]);
    }

    #[Route('/browse357', name: 'browser357')]
    public function browse357(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 357',
        ]);
    }

    #[Route('/browse358', name: 'browser358')]
    public function browse358(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 358',
        ]);
    }

    #[Route('/browse359', name: 'browser359')]
    public function browse359(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 359',
        ]);
    }

    #[Route('/browse360', name: 'browser360')]
    public function browse360(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 360',
        ]);
    }

    #[Route('/browse361', name: 'browser361')]
    public function browse361(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 361',
        ]);
    }

    #[Route('/browse362', name: 'browser362')]
    public function browse362(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 362',
        ]);
    }

    #[Route('/browse363', name: 'browser363')]
    public function browse363(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 363',
        ]);
    }

    #[Route('/browse364', name: 'browser364')]
    public function browse364(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 364',
        ]);
    }

    #[Route('/browse365', name: 'browser365')]
    public function browse365(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 365',
        ]);
    }

    #[Route('/browse366', name: 'browser366')]
    public function browse366(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 366',
        ]);
    }

    #[Route('/browse367', name: 'browser367')]
    public function browse367(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 367',
        ]);
    }

    #[Route('/browse368', name: 'browser368')]
    public function browse368(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 368',
        ]);
    }

    #[Route('/browse369', name: 'browser369')]
    public function browse369(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 369',
        ]);
    }

    #[Route('/browse370', name: 'browser370')]
    public function browse370(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 370',
        ]);
    }

    #[Route('/browse371', name: 'browser371')]
    public function browse371(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 371',
        ]);
    }

    #[Route('/browse372', name: 'browser372')]
    public function browse372(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 372',
        ]);
    }

    #[Route('/browse373', name: 'browser373')]
    public function browse373(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 373',
        ]);
    }

    #[Route('/browse374', name: 'browser374')]
    public function browse374(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 374',
        ]);
    }

    #[Route('/browse375', name: 'browser375')]
    public function browse375(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 375',
        ]);
    }

    #[Route('/browse376', name: 'browser376')]
    public function browse376(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 376',
        ]);
    }

    #[Route('/browse377', name: 'browser377')]
    public function browse377(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 377',
        ]);
    }

    #[Route('/browse378', name: 'browser378')]
    public function browse378(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 378',
        ]);
    }

    #[Route('/browse379', name: 'browser379')]
    public function browse379(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 379',
        ]);
    }

    #[Route('/browse380', name: 'browser380')]
    public function browse380(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 380',
        ]);
    }

    #[Route('/browse381', name: 'browser381')]
    public function browse381(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 381',
        ]);
    }

    #[Route('/browse382', name: 'browser382')]
    public function browse382(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 382',
        ]);
    }

    #[Route('/browse383', name: 'browser383')]
    public function browse383(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 383',
        ]);
    }

    #[Route('/browse384', name: 'browser384')]
    public function browse384(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 384',
        ]);
    }

    #[Route('/browse385', name: 'browser385')]
    public function browse385(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 385',
        ]);
    }

    #[Route('/browse386', name: 'browser386')]
    public function browse386(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 386',
        ]);
    }

    #[Route('/browse387', name: 'browser387')]
    public function browse387(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 387',
        ]);
    }

    #[Route('/browse388', name: 'browser388')]
    public function browse388(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 388',
        ]);
    }

    #[Route('/browse389', name: 'browser389')]
    public function browse389(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 389',
        ]);
    }

    #[Route('/browse390', name: 'browser390')]
    public function browse390(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 390',
        ]);
    }

    #[Route('/browse391', name: 'browser391')]
    public function browse391(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 391',
        ]);
    }

    #[Route('/browse392', name: 'browser392')]
    public function browse392(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 392',
        ]);
    }

    #[Route('/browse393', name: 'browser393')]
    public function browse393(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 393',
        ]);
    }

    #[Route('/browse394', name: 'browser394')]
    public function browse394(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 394',
        ]);
    }

    #[Route('/browse395', name: 'browser395')]
    public function browse395(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 395',
        ]);
    }

    #[Route('/browse396', name: 'browser396')]
    public function browse396(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 396',
        ]);
    }

    #[Route('/browse397', name: 'browser397')]
    public function browse397(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 397',
        ]);
    }

    #[Route('/browse398', name: 'browser398')]
    public function browse398(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 398',
        ]);
    }

    #[Route('/browse399', name: 'browser399')]
    public function browse399(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 399',
        ]);
    }

    #[Route('/browse400', name: 'browser400')]
    public function browse400(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 400',
        ]);
    }

    #[Route('/browse401', name: 'browser401')]
    public function browse401(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 401',
        ]);
    }

    #[Route('/browse402', name: 'browser402')]
    public function browse402(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 402',
        ]);
    }

    #[Route('/browse403', name: 'browser403')]
    public function browse403(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 403',
        ]);
    }

    #[Route('/browse404', name: 'browser404')]
    public function browse404(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 404',
        ]);
    }

    #[Route('/browse405', name: 'browser405')]
    public function browse405(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 405',
        ]);
    }

    #[Route('/browse406', name: 'browser406')]
    public function browse406(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 406',
        ]);
    }

    #[Route('/browse407', name: 'browser407')]
    public function browse407(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 407',
        ]);
    }

    #[Route('/browse408', name: 'browser408')]
    public function browse408(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 408',
        ]);
    }

    #[Route('/browse409', name: 'browser409')]
    public function browse409(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 409',
        ]);
    }

    #[Route('/browse410', name: 'browser410')]
    public function browse410(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 410',
        ]);
    }

    #[Route('/browse411', name: 'browser411')]
    public function browse411(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 411',
        ]);
    }

    #[Route('/browse412', name: 'browser412')]
    public function browse412(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 412',
        ]);
    }

    #[Route('/browse413', name: 'browser413')]
    public function browse413(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 413',
        ]);
    }

    #[Route('/browse414', name: 'browser414')]
    public function browse414(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 414',
        ]);
    }

    #[Route('/browse415', name: 'browser415')]
    public function browse415(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 415',
        ]);
    }

    #[Route('/browse416', name: 'browser416')]
    public function browse416(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 416',
        ]);
    }

    #[Route('/browse417', name: 'browser417')]
    public function browse417(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 417',
        ]);
    }

    #[Route('/browse418', name: 'browser418')]
    public function browse418(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 418',
        ]);
    }

    #[Route('/browse419', name: 'browser419')]
    public function browse419(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 419',
        ]);
    }

    #[Route('/browse420', name: 'browser420')]
    public function browse420(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 420',
        ]);
    }

    #[Route('/browse421', name: 'browser421')]
    public function browse421(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 421',
        ]);
    }

    #[Route('/browse422', name: 'browser422')]
    public function browse422(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 422',
        ]);
    }

    #[Route('/browse423', name: 'browser423')]
    public function browse423(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 423',
        ]);
    }

    #[Route('/browse424', name: 'browser424')]
    public function browse424(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 424',
        ]);
    }

    #[Route('/browse425', name: 'browser425')]
    public function browse425(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 425',
        ]);
    }

    #[Route('/browse426', name: 'browser426')]
    public function browse426(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 426',
        ]);
    }

    #[Route('/browse427', name: 'browser427')]
    public function browse427(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 427',
        ]);
    }

    #[Route('/browse428', name: 'browser428')]
    public function browse428(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 428',
        ]);
    }

    #[Route('/browse429', name: 'browser429')]
    public function browse429(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 429',
        ]);
    }

    #[Route('/browse430', name: 'browser430')]
    public function browse430(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 430',
        ]);
    }

    #[Route('/browse431', name: 'browser431')]
    public function browse431(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 431',
        ]);
    }

    #[Route('/browse432', name: 'browser432')]
    public function browse432(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 432',
        ]);
    }

    #[Route('/browse433', name: 'browser433')]
    public function browse433(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 433',
        ]);
    }

    #[Route('/browse434', name: 'browser434')]
    public function browse434(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 434',
        ]);
    }

    #[Route('/browse435', name: 'browser435')]
    public function browse435(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 435',
        ]);
    }

    #[Route('/browse436', name: 'browser436')]
    public function browse436(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 436',
        ]);
    }

    #[Route('/browse437', name: 'browser437')]
    public function browse437(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 437',
        ]);
    }

    #[Route('/browse438', name: 'browser438')]
    public function browse438(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 438',
        ]);
    }

    #[Route('/browse439', name: 'browser439')]
    public function browse439(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 439',
        ]);
    }

    #[Route('/browse440', name: 'browser440')]
    public function browse440(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 440',
        ]);
    }

    #[Route('/browse441', name: 'browser441')]
    public function browse441(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 441',
        ]);
    }

    #[Route('/browse442', name: 'browser442')]
    public function browse442(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 442',
        ]);
    }

    #[Route('/browse443', name: 'browser443')]
    public function browse443(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 443',
        ]);
    }

    #[Route('/browse444', name: 'browser444')]
    public function browse444(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 444',
        ]);
    }

    #[Route('/browse445', name: 'browser445')]
    public function browse445(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 445',
        ]);
    }

    #[Route('/browse446', name: 'browser446')]
    public function browse446(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 446',
        ]);
    }

    #[Route('/browse447', name: 'browser447')]
    public function browse447(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 447',
        ]);
    }

    #[Route('/browse448', name: 'browser448')]
    public function browse448(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 448',
        ]);
    }

    #[Route('/browse449', name: 'browser449')]
    public function browse449(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 449',
        ]);
    }

    #[Route('/browse450', name: 'browser450')]
    public function browse450(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 450',
        ]);
    }

    #[Route('/browse451', name: 'browser451')]
    public function browse451(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 451',
        ]);
    }

    #[Route('/browse452', name: 'browser452')]
    public function browse452(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 452',
        ]);
    }

    #[Route('/browse453', name: 'browser453')]
    public function browse453(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 453',
        ]);
    }

    #[Route('/browse454', name: 'browser454')]
    public function browse454(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 454',
        ]);
    }

    #[Route('/browse455', name: 'browser455')]
    public function browse455(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 455',
        ]);
    }

    #[Route('/browse456', name: 'browser456')]
    public function browse456(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 456',
        ]);
    }

    #[Route('/browse457', name: 'browser457')]
    public function browse457(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 457',
        ]);
    }

    #[Route('/browse458', name: 'browser458')]
    public function browse458(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 458',
        ]);
    }

    #[Route('/browse459', name: 'browser459')]
    public function browse459(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 459',
        ]);
    }

    #[Route('/browse460', name: 'browser460')]
    public function browse460(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 460',
        ]);
    }

    #[Route('/browse461', name: 'browser461')]
    public function browse461(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 461',
        ]);
    }

    #[Route('/browse462', name: 'browser462')]
    public function browse462(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 462',
        ]);
    }

    #[Route('/browse463', name: 'browser463')]
    public function browse463(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 463',
        ]);
    }

    #[Route('/browse464', name: 'browser464')]
    public function browse464(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 464',
        ]);
    }

    #[Route('/browse465', name: 'browser465')]
    public function browse465(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 465',
        ]);
    }

    #[Route('/browse466', name: 'browser466')]
    public function browse466(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 466',
        ]);
    }

    #[Route('/browse467', name: 'browser467')]
    public function browse467(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 467',
        ]);
    }

    #[Route('/browse468', name: 'browser468')]
    public function browse468(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 468',
        ]);
    }

    #[Route('/browse469', name: 'browser469')]
    public function browse469(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 469',
        ]);
    }

    #[Route('/browse470', name: 'browser470')]
    public function browse470(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 470',
        ]);
    }

    #[Route('/browse471', name: 'browser471')]
    public function browse471(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 471',
        ]);
    }

    #[Route('/browse472', name: 'browser472')]
    public function browse472(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 472',
        ]);
    }

    #[Route('/browse473', name: 'browser473')]
    public function browse473(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 473',
        ]);
    }

    #[Route('/browse474', name: 'browser474')]
    public function browse474(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 474',
        ]);
    }

    #[Route('/browse475', name: 'browser475')]
    public function browse475(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 475',
        ]);
    }

    #[Route('/browse476', name: 'browser476')]
    public function browse476(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 476',
        ]);
    }

    #[Route('/browse477', name: 'browser477')]
    public function browse477(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 477',
        ]);
    }

    #[Route('/browse478', name: 'browser478')]
    public function browse478(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 478',
        ]);
    }

    #[Route('/browse479', name: 'browser479')]
    public function browse479(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 479',
        ]);
    }

    #[Route('/browse480', name: 'browser480')]
    public function browse480(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 480',
        ]);
    }

    #[Route('/browse481', name: 'browser481')]
    public function browse481(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 481',
        ]);
    }

    #[Route('/browse482', name: 'browser482')]
    public function browse482(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 482',
        ]);
    }

    #[Route('/browse483', name: 'browser483')]
    public function browse483(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 483',
        ]);
    }

    #[Route('/browse484', name: 'browser484')]
    public function browse484(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 484',
        ]);
    }

    #[Route('/browse485', name: 'browser485')]
    public function browse485(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 485',
        ]);
    }

    #[Route('/browse486', name: 'browser486')]
    public function browse486(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 486',
        ]);
    }

    #[Route('/browse487', name: 'browser487')]
    public function browse487(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 487',
        ]);
    }

    #[Route('/browse488', name: 'browser488')]
    public function browse488(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 488',
        ]);
    }

    #[Route('/browse489', name: 'browser489')]
    public function browse489(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 489',
        ]);
    }

    #[Route('/browse490', name: 'browser490')]
    public function browse490(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 490',
        ]);
    }

    #[Route('/browse491', name: 'browser491')]
    public function browse491(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 491',
        ]);
    }

    #[Route('/browse492', name: 'browser492')]
    public function browse492(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 492',
        ]);
    }

    #[Route('/browse493', name: 'browser493')]
    public function browse493(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 493',
        ]);
    }

    #[Route('/browse494', name: 'browser494')]
    public function browse494(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 494',
        ]);
    }

    #[Route('/browse495', name: 'browser495')]
    public function browse495(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 495',
        ]);
    }

    #[Route('/browse496', name: 'browser496')]
    public function browse496(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 496',
        ]);
    }

    #[Route('/browse497', name: 'browser497')]
    public function browse497(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 497',
        ]);
    }

    #[Route('/browse498', name: 'browser498')]
    public function browse498(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 498',
        ]);
    }

    #[Route('/browse499', name: 'browser499')]
    public function browse499(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 499',
        ]);
    }

    #[Route('/browse500', name: 'browser500')]
    public function browse500(): Response
    {
        return $this->render('vinyl/browser.html.twig', [
            'title' => 'browser 500',
        ]);
    }
}

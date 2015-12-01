<?php

namespace App\Http\Controllers;


class BlogController extends Controller
{
    public function index()
    {
        $posts = [
            0  => [
                'titulo'   => "Titulo Post 1",
                'conteudo' => "Mah ooooee vem pra cá. Vem pra cá. Mah é a porta da esperançaam. Eu só acreditoammmm.... Vendoammmm. Um, dois três, quatro, PIM, entendeuam? Boca sujuam... sem vergonhuamm. Ma quem quer dinheiroam? Valendo um milhão de reaisammm. O arriscam tuduam, valendo um milhão de reaisuam. Mah ooooee vem pra cá. Vem pra cá. Ma você está certo dissoam? Ma o Silvio Santos Ipsum é muitoam interesanteam. Com ele ma você vai gerar textuans ha haae. Ma você, topa ou não topamm. É com você Lombardiam.",
                'autor'    => 'Autor 1',
                'data'     => '12/12/2015 12:30:00'
            ],
            1  => [
                'titulo'   => "Titulo Post B",
                'conteudo' => "Wellintaaammmmmmmmm. Ma não existem mulher feiam, existem mulher que não conhece os produtos Jequitiamm. Ma! Ao adquirir o carnê do Baú, você estará concorrendo a um prêmio de cem mil reaisam. É com você Lombardiam. É bom ou não éam? Ma! Ao adquirir o carnê do Baú, você estará concorrendo a um prêmio de cem mil reaisam. É com você Lombardiam. Mah você mora com o papai ou com a mamãem? Ha hai. Bem boladoam, bem boladoam. Bem gozadoam. Boca sujuam... sem vergonhuamm. Ma o Silvio Santos Ipsum é muitoam interesanteam. Com ele ma você vai gerar textuans ha haae. Ma vejam só, vejam só. Ma quem quer dinheiroam?",
                'autor'    => 'Autor 2',
                'data'     => '12/12/2015 12:30:00'
            ],
            2  => [
                'titulo'   => "Titulo Post 3",
                'conteudo' => "É dinheiro ou não éam? É bom ou não éam? Eu só acreditoammmm.... Vendoammmm. Qual é a musicamm? O arriscam tuduam, valendo um milhão de reaisuam. Ma tem ou não tem o celular do milhãouamm? Boca sujuam... sem vergonhuamm. Mah ooooee vem pra cá. Vem pra cá. Estamos em ritmo de festamm. O Raul Gil é gayam! ... Maa O Ah Ae! Ih Ih! O Raul Gil é gayamm! É namoro ou amizadeemm? Um, dois três, quatro, PIM, entendeuam?",
                'autor'    => 'Autor 3',
                'data'     => '12/12/2015 12:30:00'
            ],
            3  => [
                'titulo'   => "Titulo Post 4",
                'conteudo' => "Wellintaaammmmmmmmm. É bom ou não éam? Mah você não consegue né Moisés? Você não consegueam. Ma quem quer dinheiroam? Ma tem ou não tem o celular do milhãouamm? Eu só acreditoammmm.... Vendoammmm. Estamos em ritmo de festamm. Mah ooooee vem pra cá. Vem pra cá. Ma não existem mulher feiam, existem mulher que não conhece os produtos Jequitiamm. Ma vejam só, vejam só.",
                'autor'    => 'Autor 4',
                'data'     => '12/12/2015 12:30:00'
            ],
        ];





        return view('blog.index', compact('posts'));
    }

}
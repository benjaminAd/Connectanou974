@extends('layout')
@section('title')
    <title>CONNECTANOU-Porteurs de Projets</title>
@endsection
@section('body')
@include('navbar')
<section class="py-5  mt-5 text-justify">
    <div class="container text-justify"><br><br>

        <h1 style="text-align: center;">Vous êtes un porteur de projet ?</h1><br><br>
    <!-- <img src="{{ asset('img/landing_por.png')}}"  style="align-items: center;" class="col-md-10 col-lg-10 col-sm-10 col-xs-10"><br><br> -->
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <FONT size="4pt">
                <p>Vous voulez monter une startup ? Vous mettre à votre compte ? Mais vous ne savez pas faire un
                    business plan ou une étude de marché ? Vous voulez développer votre <strong>entreprise</strong>? Vous avez besoin de conseil particulier ou besoin de
                    quelqu'un pour vous faire votre site web , une application mobile ? Ou même votre logo ?</p>
                    <img src="{{ asset('img/landing_por.png')}}"  style="align-items: center;" class="col-md-10 col-lg-10 col-sm-10 col-xs-10"><br><br>

                <h2>Une communauté de jeunes réunionnais au service de vos projets.</h2>
                <p>
                Faites <strong>confiance</strong> à la <a href="{{{url('landingRea')}}}">jeunesse réunionnaise</a>, vous leur permettez de monter en
                    compétences sur un de vos projets et votre projet vous coutera bien moins cher qu'un expert.
                    Attention, il faut leur laisser un peu de temps afin que le <strong>produit</strong> réponde à
                    vos attentes...
                    Soyez rassurés, ceux-ci sont <strong>accompagnés</strong>, aidés et suivis par les experts de
                    <strong>CONNECTANOU</strong>. Exemples de types de projets proposés : <strong>site web, flyers,application mobile, référencement, étude de marché, traduction, télésécrétariat, etc.</strong> Nous vous conseillons d'aller voirs <a href="#">les projets existants</a>.
                </p>

                <h2>CONNECTANOU, Comment ça fonctionne concrètement ?</h2>
                <p>
                Afin de déposer votre mission, il suffit de vous <a href="{{{route('PortProjetSub')}}}">inscrire</a> sur <strong>CONNECTANOU</strong> et
                remplir le formulaire de <a href="{{{url('annonce')}}}">dépôt de projet</a>. Vous allez recevoir un mail de validation ou de
                    modification selon les conseils de Connectanou. Un devis et un nombre de points sera attribué à
                    votre projet, que vous pouvez accepter ou refuser. Une fois le projet publié, nos jeunes talents
                    pourront entrer en contact avec les porteurs des projets qui les intéresse. A vous de valider le ou
                    les <strong>réalisateurs</strong> pour votre <strong>projet</strong>.
                </p>
                <p>
                    Une fois le projet réalisé, vous recevez la facture, le(s) jeune(s) reçoit les points en échange de
                    votre paiement. Vous pouvez choisir de payer en une fois ou un abonnement mensuel. N'oubliez pas
                    d'évaluer le(s) réalisateur et de le remercier.
                </p>

                <p>
                    Si vous ne pouvez pas financer votre projet dans son intégralité, vous pouvez de devenir <Strong>partenaires</Strong>
                    et proposer des réductions, vos services que les étudiants pourront échanger contre des points. Cela
                    permet également de faire une bonne publicité et permettre à des personnes de tester vos produits.
                </p>
                <p>
                    Par exemple, vous êtes boulanger ? proposer des baguettes pour 2 points, ou des gateaux anniversaire
                    contre 10 points.
                </p>
                <P>
                    Si vous souhaitez être accompagné pour définir votre <strong>besoin</strong>, nous pouvons aussi vous
                aider pour la rédaction de votre cahier des charges. N’hésitez pas à nous <a href="{{{url('contact')}}}">contacter</a>.
                </p>
            </FONT>
            <p> &nbsp;</p>
            <p> &nbsp;</p>
            <p> &nbsp;</p>
        </div>
    </div>
</section>
@include('footer')
@endsection
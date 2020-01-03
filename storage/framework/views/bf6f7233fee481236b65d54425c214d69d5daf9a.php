<?php $__env->startSection('title'); ?>
    <title>CONNECTANOU-Réalisateur de Projets</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<section class="py-5  mt-5 ">
    <div class="container text-justify"><br><br>
        <h1 style="text-align: center;">Vous êtes étudiant ou jeune diplomé ?</h1><br><br>
    <!-- <div class="container-fluid ml-5">
            <img src="<?php echo e(asset('img/landing_rea.png')); ?>" class="col-md-10 col-lg-10 col-sm-10 col-xs-10" style="width: 90%" class="center-block" alt="realisateur de projets"><br><br>
          </div> -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

                <FONT size="4pt">

                    <p>Tu dois réaliser un<strong> projet</strong> à l’école mais tu n’as pas de sujet ? Tu cherches un
                        emploi mais tu n'as pas assez d'<strong>expérience</strong> ? Les employeurs ne te font pas
                        <strong>confiance</strong> ? Tu recherches de la mise en pratique sur une mission sympa ? Tu ne
                        trouves pas de stages ? alternance ? Travail ? Alors comment embellir ton CV ?</p><br>
                <div class="container-fluid ml-5">
                    <img src="<?php echo e(asset('img/landing_rea.png')); ?>" class="col-md-10 col-lg-10 col-sm-10 col-xs-10" style="width: 90%" class="center-block" alt="realisateur de projets"><br><br>
                </div>
                    <p><strong>Connectanou</strong> te propose des missions qui proviennent des <strong>projets de
                    <a href="<?php echo e(url('landingPor')); ?>">petites entreprises</a> ou associations réunionnaises</strong> qui n'ont pas forcément les
                        moyens et les compétences. L'idée est de les aider tout en montant en
                        <strong>compétences.</strong><br>
                        Nos projets peuvent se réaliser à distance, en <strong>télétravail</strong> depuis chez toi ou à
                        l'école, seul ou à plusieurs. Vous choisissez les projets qui vous intéresse et les petites
                        entreprises que vous voulez aider.Voir les types de projets proposés (exemple :<strong> site
                            web, logo,application mobile, référencement, étude de marché, sécrétariat, etc...</strong>).
                    </p>
                    <br>
                    <P>Chaque contribution vous rapporte des points. Plus vous avez de points, plus vous monter de
                        niveaux, plus vous êtes pris au sérieux. Vous pouvez échanger vos points contre des bons cadeaux
                        ou réduction(s) chez<strong> CONNECTANOU </strong>ou chez nos <strong> partenaires.</strong></P>
                    <br>

                    <h2>CONNECTANOU Comment ça marche concrètement?</h2><br>
                    <p>Vous pouvez <a href="<?php echo e(url('annonce')); ?>">rechercher</a> et parcourir tous les <strong>projets</strong> déposés par les <strong>entrepreneurs</strong>,
                        choisir celui ou ceux qui répondent à vos compétences ou vos valeurs. Par contre, pour entrer en
                    contact et négocier avec le porteur de projet, il faut être <a href="<?php echo e(route('SubscribeRea')); ?>">inscrit</a> sur
                        <strong>CONNECTANOU</strong>. Une fois le projet réalisé, vous recevrez le nombre de points sur
                        votre profil. Si l'évaluation est excellente, vous recevrez des points supplémentaires.</p><br>
                    <p>Vous pourrez également rédiger des articles (conseils sur une de vos compétences) pour
                        <a href="#">le blog de Connectanou</a>, vous serez récompensez également en points. Vous rencontrez un problème lors de la Réalisation d'un projet. Vous n'êtes pas seul(e)!! Profitez de la communauté de Connectanou et n'hésitez pas à utiliser le <a href="#">forum</a>.</p>
                    <br>


                    <p>Tu es <strong>formateur</strong> et tu recherches des <strong>projets enrichissants</strong> à
                        donner en TP à tes élèves ? Marre des exercices fictifs à donner à tes élèves ? Tu souhaites
                        motiver tes étudiants sur des<strong> projets sympas</strong> et qui ont du sens ? Choisir un ou
                        plusieurs projets à donner à tes classes et <strong>accompagne</strong> les à
                        <strong>réaliser</strong> leur <strong>mission</strong>.</p><br>
                    <p>N’hésitez pas à nous <a href="<?php echo e(url('contact')); ?>">contacter</a>.</p>
                </FONT>
                <p> &nbsp; </p>
                <p> &nbsp;</p>
                <p> &nbsp;</p>
            </div>
        </div>
    </div>
</section>
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
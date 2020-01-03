<?php $__env->startSection('title'); ?>
    <title>Inscription d'une Organisation</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link'); ?>
    <link rel="stylesheet" href="./css/style_SubOrg.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<br/><br/><br/><br/>
    <!-- Default form login -->
    <div class="d-flex justify-content-center align-items-center divCon mt-5">
        <form class="border border-light p-5 divConnect needs-validation" enctype="multipart/form-data" method="post"
              action="<?php echo e(url('Organisation')); ?>"
              novalidate>
            <?php echo e(csrf_field()); ?>

            <img class="img-fluid rounded-circle mx-auto d-block" src="./img/fav_png150vct.png" alt="Logo"/>
            <p class="h4 mb-4 text-center">Inscrivez votre Organisation</p>
            <div class="form-group">
                <label>SIRET</label>
                <input type="number" name="siret" class="form-control" id="siret" placeholder="ex : 36252187900034" data-toggle="tooltip" data-placement="right" title="Évitez les espaces dans le Siret"/>
                 <?php if($errors->has('siret')): ?> <div class="alert alert-danger"><?php echo e($errors->first('siret')); ?></div> <?php endif; ?>
            </div>
            <div class="form-group">
                <label>Raison sociale<span id="important">*</span></label>
                <div class="form-group">
                <div class="form-inline" id="Organisation">
                    <select name="typeOrganisation" class="custom-select col-3" id="typeOrganisation">
                        <option value="organisation" selected>Type</option>
                        
                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($type->Id); ?>"><?php echo e($type->TypeOrganisation); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    &nbsp;&nbsp;&nbsp;
                    <input type="text" name="RaisonSociale" class="form-control col" id="label"
                        placeholder="ex : Connectanou" value="<?php echo e(old('RaisonSociale')); ?>"
                           />
                </div>
                 <?php if($errors->has('RaisonSociale')): ?> <div class="alert alert-danger"><?php echo e($errors->first('RaisonSociale')); ?></div> <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <label>Téléphone<span id="important">*</span></label>
            <input type="tel" name="telephone" id="telephone" class="form-control" placeholder="ex : 0262xxxxxx" value="<?php echo e(old('telephone')); ?>"
                       />
             <?php if($errors->has('telephone')): ?> <div class="alert alert-danger"><?php echo e($errors->first('telephone')); ?></div> <?php endif; ?>
            </div>
            <div class="form-group">
                <label>Lien vers le site Internet de l'Organisation<span id="important">*</span></label>
            <input type="url" name="site" id="site" class="form-control" placeholder="ex : connectanou.re" value="<?php echo e(old('site')); ?>"
                       />
            <?php if($errors->has('site')): ?> <div class="alert alert-danger"><?php echo e($errors->first('site')); ?></div> <?php endif; ?>
            </div>
            <div class="form-group">
                <label>Adresse de l'Organisation<span id="important">*</span></label>
                <input type="text" name="adresse" id="adresse" class="form-control"
            placeholder="ex : 70 Avenue Georges Brassens" value="<?php echo e(old('adresse')); ?>"
                       />
                <?php if($errors->has('adresse')): ?> <div class="alert alert-danger"><?php echo e($errors->first('adresse')); ?></div> <?php endif; ?>
            </div>
            
             <div class="row" id="Organisation">
                <div class="form-group col">
                    <label>Code Postal<span id="important">*</span></label>
                    <div class="ui-widget">
                        <input type="number" id="IdCP" name="CodePostal"class="form-control col" placeholder="ex : 97490" value="<?php echo e(old('CodePostal')); ?>" />
                    </div>
                    <?php if($errors->has('CodePostal')): ?> <div class="alert alert-danger"><?php echo e($errors->first('CodePostal')); ?></div> <?php endif; ?>
                </div>
                <div class="form-group col">
                    <label class="text-left">Ville<span id="important">*</span></label>
                    <input type="text" id="IdVille" name="Ville" class="form-control col" placeholder="ex : Sainte-Clotilde" value="<?php echo e(old('IdVille')); ?>"
                           />
                    <?php if($errors->has('Ville')): ?> <div class="alert alert-danger"><?php echo e($errors->first('Ville')); ?></div> <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <label>Nombre de personnes</label>
                <input type="number" name="salariés" id="salarié" class="form-control" placeholder="ex : 60" />
                 <?php if($errors->has('salariés')): ?> <div class="alert alert-danger"><?php echo e($errors->first('salariés')); ?></div> <?php endif; ?>
            </div>
            <div class="form-group">
                <label>Activité de l'Organisation<span id="important">*</span></label>
                <textarea class="form-control" name="activite" id="activite" rows="3" placeholder="Ex : Association qui permet à de jeunes étudiants
en informatique à gérer différents projets comme la création d'un site internet ou la création d'une application mobile pour des Petites et Moyennes Entreprises. "
                          ></textarea>
                <?php if($errors->has('activite')): ?> <div class="alert alert-danger"><?php echo e($errors->first('activite')); ?></div> <?php endif; ?>
            </div>
            <div class="form-group files">
                <label>Importez votre Logo</label>
                <input type="file" name="select_file" class="form-control" >
                 <?php if($errors->has('select_file')): ?> <div class="alert alert-danger"><?php echo e($errors->first('select_file')); ?></div> <?php endif; ?>
            </div>
            <div class="custom-control custom-checkbox form-group">
                <input type="checkbox" class="custom-control-input" id="customCheck1" name="checkbox" />
                <label class="custom-control-label" for="customCheck1">En cochant cette case, j'accepte que mes
                    informations saisies soient utilisées<br/> uniquement dans le cadre <a href="#"
                                                                                           class="lien">légale</a> dans
                    l'association.
                 <?php if($errors->has('checkbox')): ?> <div class="alert alert-danger"><?php echo e($errors->first('checkbox')); ?></div> <?php endif; ?>
            </div>
          <div class="form-group">
            <div class="g-recaptcha" data-sitekey="<?php echo e(env('CAPTCHA_KEY')); ?>"></div>
            <?php if($errors->has('g-recaptcha-response')): ?>
                 <div class="alert alert-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></div>
            <?php endif; ?>
            </div>
            <button class="btn btn-info btn-block my-4 " type="submit" id="bouton">
                Inscrire
            </button>
        </form>
    </div>
    <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
        $(function () {
            var ArrayCodePostaux = new Array();
            var ArrayVilles = new Array();
            <?php echo e($i=0); ?>

            <?php $__currentLoopData = $codePostaux; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $codePostal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                ArrayCodePostaux[<?php echo e($i); ?>] = '<?php echo e($codePostal->CodePostal); ?>';
                ArrayVilles[<?php echo e($i); ?>] = '<?php echo e($codePostal->Ville); ?>'
                <?php echo e($i++); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            $("#IdCP").autocomplete({
                source: ArrayCodePostaux,
                minLength: 4
            });
            $("#IdVille").autocomplete({
                source: ArrayVilles,
                minLength: 3
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
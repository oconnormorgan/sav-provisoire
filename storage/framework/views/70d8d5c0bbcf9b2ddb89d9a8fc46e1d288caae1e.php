<?php $__env->startSection('title', 'Accueil'); ?>

<?php $__env->startSection('content'); ?>
<section class="m-3 d-flex flex-column">
    <h2>Liste des clients : </h2>
    <div class="d-flex flex-row justify-content-center flex-wrap">
        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="m-2 p-2 w-100 card text-black bg-light mb-3" style="max-width: 18rem;">

            <div class="card-body d-flex flex-column">
                <p class="card-text"><?php echo e($client->nom); ?></p>
                <p class="card-text"><?php echo e($client->prenom); ?></p>
                <p class="card-text d-flex justify-content-end"><a href="<?php echo e($client->id); ?>" class="text-black">Détails</a></p>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/cyberun-8/STOCKAGE/projet/SAV/resources/views/clients/accueil.blade.php ENDPATH**/ ?>
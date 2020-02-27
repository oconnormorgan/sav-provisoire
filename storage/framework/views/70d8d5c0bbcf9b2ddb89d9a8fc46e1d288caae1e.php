<?php $__env->startSection('title', 'Accueil'); ?>

<?php $__env->startSection('content'); ?>
<section class="m-3 d-flex flex-column">
    <h2>Liste des clients : </h2>
    <div class="d-flex flex-row justify-content-center flex-wrap">
        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="m-2 w-100 card text-black bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header d-flex justify-content-start align-items-center">
                <div class="flex-grow-1"><?php echo e($client->nom); ?> <?php echo e($client->prenom); ?></div>
                <a href="<?php echo e($client->id); ?>" class="rounded-circle text-secondary"><i class="fas fa-info-circle fa-2x"></i></a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/cyberun-8/STOCKAGE/projet/SAV/resources/views/clients/accueil.blade.php ENDPATH**/ ?>
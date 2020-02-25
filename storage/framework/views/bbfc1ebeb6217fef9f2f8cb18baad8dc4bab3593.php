<?php $__env->startSection('title', "Client"); ?>

<?php $__env->startSection('content'); ?>
<section class="m-3 d-flex flex-row justify-content-center flex-wrap">
    <div class="m-2 p-2 card text-black bg-light mb-3 w-100 h-100">
        <div class="card-body d-flex flex-column">
            <p class="card-text"><?php echo e($client->nom); ?></p>
            <p class="card-text"><?php echo e($client->prenom); ?></p>
            <p class="card-text">Numéro : <?php echo e($client->telephone); ?></p>
            <p class="card-text">E-mail : <?php echo e($client->mail); ?></p>
        </div>
    </div>
</section>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app',['id'=>'client'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/cyberun-8/STOCKAGE/projet/SAV/resources/views/clients/client.blade.php ENDPATH**/ ?>
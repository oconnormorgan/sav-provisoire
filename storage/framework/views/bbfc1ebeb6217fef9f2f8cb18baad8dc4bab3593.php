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
    <?php $__currentLoopData = $exchanges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exchange): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="m-2 p-2 w-100 card text-black bg-light mb-3" style="max-width: 18rem;">

        <div class="card-body d-flex flex-column">
            <p class="card-text"><?php echo e($exchange->date); ?></p>
            <p class="card-text"><?php echo e($exchange->commentaire); ?></p>
            <p class="card-text"><?php echo e($exchange->id_type_exchange); ?></p>
            <p class="card-text"><?php echo e($exchange->id_user); ?></p>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app',['id'=>'client'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/cyberun-8/STOCKAGE/projet/SAV/resources/views/clients/client.blade.php ENDPATH**/ ?>
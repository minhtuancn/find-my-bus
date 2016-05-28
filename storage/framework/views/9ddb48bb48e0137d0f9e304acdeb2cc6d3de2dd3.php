<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-6"><strong>Welcome <?php echo e(Auth::user()->name); ?>!</strong></div>
                        <div class="col-sm-6 text-right">
                            Nearest Stop: <strong><?php echo e($getNearStop->stop_name); ?></strong> | <?php echo e(round($getNearStop->distance/3, 2)); ?> Mins. <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="left" title="Walking distance at 3 KPH"></i>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            
                            <p data-toggle="tooltip" data-placement="left" title="To change IP: Config > constants.php"><strong>Your Current IP</strong> <i class="glyphicon glyphicon-info-sign"></i></p>

                            <p><?php echo e($location->ip); ?></p>

                            <ul class="list-group">
                                <li class="list-group-item"><strong>Your Current Location</strong></li>
                                <li class="list-group-item"><?php echo e($location->cityName); ?></li>
                                <li class="list-group-item"><?php echo e($location->regionName .' - '. $location->postalCode); ?></li>
                                <li class="list-group-item"><?php echo e($location->countryName); ?></li>
                            </ul>

                        </div>

                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Nearest Bus Stop</strong></li>
                                <li class="list-group-item"><?php echo e($getNearStop->stop_name); ?></li>
                                <li class="list-group-item">Next bus will reach the stop in: <?php echo e(round($getTime, 2)); ?> Mins. @ <?php echo e($busSpeed); ?> KPH</li>
                                <li class="list-group-item">Bus distance to reach the stop: <?php echo e(round($nextBus, 2)); ?> km</li>
                                <li class="list-group-item">You will reach the bus stop in: <?php echo e(round($getNearStop->distance/3, 2)); ?> Mins @ 3 KPH</li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <?php if(count($getStopList) > 0): ?>
                                <ul class="list-group">
                                    <li class="list-group-item"><strong>Nearest 5 Bus Stops</strong></li>
                                    <?php foreach($getStopList as $stops_key => $stops_val): ?>
                                        <li class="list-group-item"><?php echo e($stops_val->stop_name .' - '. round($stops_val->distance, 2) .' km'); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                No nearest bus stops available!!
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
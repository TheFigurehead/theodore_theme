<?php
foreach($vehicles as $vehicle):
?>
    <div class="rc_grid-col">
        <div class="rc_grid-col-wrapper">

            <div class="rc_grid-col-image">
                <?=get_the_post_thumbnail( $vehicle->ID, 'medium' )?>
            </div>
            
            <h2><?=$vehicle->post_title?>, <?=get_field('year', $vehicle->ID)?></h2>
            
            <div class="rc_grid-col-props">
                <div class="rc_grid-col-props-col info">
                    <div class="rc_grid-col-props-prop">
                        <b>Year:</b> <?=get_field('year', $vehicle->ID)?>
                    </div>
                    <div class="rc_grid-col-props-prop">
                        <b>Manufacturer:</b> <?=get_the_terms( $vehicle->ID, 'manufacturer' )[0]->name?>
                    </div>
                    <div class="rc_grid-col-props-prop">
                        <b>Class:</b> <?=get_the_terms( $vehicle->ID, 'class' )[0]->name?>
                    </div>
                </div>
                <div class="rc_grid-col-props-col price">
                    <div class="rc_grid-col-price">$<?=number_format(get_field('vehicle_price', $vehicle->ID),0,'.',',')?></div>
                </div>
            </div>
        </div>
    </div>
<?php 
    endforeach;
?>
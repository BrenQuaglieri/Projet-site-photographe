<div class="content__event__alone col-12">
    <div class="content__event__alone__fl col-12 row justify-content-between">
        <h3><?php echo get_the_title(); ?></h3>
        <p class="content__event__alone__fl__eventtype"><?php echo the_field('lieu_event'); ?></p>
    </div>
    <p class="content__event__alone__eventdate"><?php echo the_field('date_event'); ?></p>
</div>

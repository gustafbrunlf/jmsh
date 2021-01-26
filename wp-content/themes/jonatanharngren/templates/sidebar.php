<?php
    $all_projects = get_field('menu', 'option');
    if($all_projects) :
    $color = get_field('menu_color', get_the_id()) ? ' style="color:' . get_field('menu_color', get_the_id()) . ';"' : '';
?>
<div class="sidebar">
    <ul class="sidebar__wrapper sidebar__wrapper--menu"<?= $color; ?>>
    <?php foreach($all_projects as $key => $project) : ?>
        <li class="sidebar__item"<?= $color; ?>>
            <button type="button" class="<?= $key == 0 ? 'active' : ''; ?>" data-project-name="<?= strtolower($project['menu-name']); ?>"><?= $project['menu-name']; ?></button>
        </li>
    <?php endforeach; ?>
    </ul>
<?php foreach($all_projects as $key => $project) : ?>
        <ul class="sidebar__wrapper" data-project-ul="<?= strtolower($project['menu-name']); ?>"<?= $key == 0 ? ' style="display:block;"' : ''; ?>>
            <?php foreach ($project['menu-project'] as $project) :
                $current_page = get_the_id() == $project['project']->ID ? true : false;
            ?>
                <li class="sidebar__item<?= ( $current_page ) ? ' sidebar__item--active' : ''; ?>"<?= $color; ?>>
                    <?= !$current_page ? '<a href="' . get_post_permalink($project['project']->ID) . '"' . $color . '>' : ''; ?>
                        <?php if(get_field('menu_name', $project['project']->ID)) : ?>
                            <?= get_field('menu_name', $project['project']->ID); ?>
                        <?php endif; ?>
                    <?= !$current_page ? '</a>' : ''; ?>
                </li>
            <?php endforeach; ?>
        </ul>
<?php
    endforeach;
?>
</div>
<?php
    endif;
?>

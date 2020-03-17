<?php
$hero_content = get_field('hero_content');

$button_link_data = $hero_content['button']['link'][0];

if(empty($button_link_data)){
    $button_link = '#';
}else{
    $button_link = ($button_link_data['acf_fc_layout'] == 'inner_link') ? $button_link_data['post'] : $button_link_data['url'];
}

// Load placeholder if the image isn't set
$hero_image_url = (!empty($hero_content['hero_image'])) ? $hero_content['hero_image']['url'] : 'https://via.placeholder.com/850x450';

?>
<div class="cr_hero">
    <div class="grid-container container">
        <div class="cr_hero_wrapper">
            <div class="cr_hero-content">
                <div class="cr_hero-content-heading">
                    <h1><?=$hero_content['title']?></h1>
                </div>
                <div class="cr_hero-content-button">
                    <a href="<?=$button_link?>"><?=$hero_content['button']['text']?></a>
                </div>
                <div class="cr_hero-content-scroll_down">
                    <a href="#footer"><span class="cr_hero-content-scroll_down-arrow">←</span><?=$hero_content['scroll_down_label']?></a>
                </div>
            </div>  
            <div class="cr_hero-image">
                <img src="<?=$hero_image_url?>" alt="<?=get_the_title()?>">
            </div>
        </div>
    </div>
</div>
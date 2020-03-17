<div class="grid-container container">

    <div id="cr_filter" class="cr_filter">

        <form id="cr_filter_form" action="">
            <div class="rc_grid">
                <div class="rc_grid-col">
                    <div class="rc_grid-col-wrapper nopadding">
                        <select name="class" id="cr_class">
                            <option value="0">Select class</option>
                            <?php
                                $classes = get_terms( 'class', array(
                                    'hide_empty' => false,
                                ) );
                                foreach($classes as $class):
                            ?>
                                <option value="<?=$class->term_id?>"><?=$class->name?></option>
                            <?php
                                endforeach;
                            ?>
                        </select>
                    </div>
                </div>
                <div class="rc_grid-col">
                    <div class="rc_grid-col-wrapper nopadding">
                        <select name="manufacturer" id="cr_manufacturer">
                            <option value="0">Select manufacturer</option>
                            <?php
                                $manufacturers = get_terms( 'manufacturer', array(
                                    'hide_empty' => false,
                                ) );
                                foreach($manufacturers as $manufacturer):
                            ?>
                                <option value="<?=$manufacturer->term_id?>"><?=$manufacturer->name?></option>
                            <?php
                                endforeach;
                            ?>
                        </select>
                    </div>
                </div>
                <div class="rc_grid-col">
                    <div class="rc_grid-col-wrapper nopadding">
                        <input id="cr_filter_form_submit" type="submit" value="Search">
                    </div>
                </div>
            </div>
        </form>

    </div>

</div>
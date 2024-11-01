<?php
if (!empty($timetable)) {
    ?>
    <table class="table table-stripped">
        <thead>
            <tr>
                <?php
                foreach ($timetable as $tm_key => $tm_value) {
                    ?>

                    <th class="text text-center"><?php echo $tm_key; ?></th>
                    <?php
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                foreach ($timetable as $tm_key => $tm_value) {
                    ?>
                    <td class="text text-center" width="14%">

                        <?php
                        if (!$timetable[$tm_key]) {
                            ?>
                            <div class="attachment-block clearfix">
                                <b class="text text-center"><?php echo $this->lang->line('not'); ?> <br><?php echo $this->lang->line('scheduled'); ?></b><br>
                            </div>
                            <?php
                        } else {
                            foreach ($timetable[$tm_key] as $tm_k => $tm_kue) {
                                ?>
                                <div class="attachment-block clearfix">
                                    <strong class="text-green"><?php echo $this->lang->line('class') ?>: <?php echo $tm_kue->class . "(" . $tm_kue->section . ")"; ?></strong><br>
                                    <b class="text-green"><?php echo $this->lang->line('subject') ?>: <?php
                                        echo $tm_kue->subject_name;
                                        if ($tm_kue->subject_code != '') {
                                            echo " (" . $tm_kue->subject_code . ")";
                                        }
                                        ?>

                                    </b><br>


                                </div>
                                <?php
                            }
                        }
                        ?>
                    </td>
                    <?php
                }
                ?>
            </tr>
        </tbody>
    </table>
    <?php
} else {
    ?>
    <div class="alert alert-info">
    <?php echo $this->lang->line('no_record_found'); ?>
    </div>
    <?php
}
?>
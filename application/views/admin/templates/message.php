<?php if ($this->session->has_userdata('pesan')) { ?>
    <div class="alert alert-success alert-dismissible">
        <button class="close" type="button"><i class="fa fa-close small"></i></button>
        <?php echo $this->session->flashdata('pesan') ?>
    </div>
<?php }

<div class="col">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <!-- <a href="<?php echo base_url('Pages/Result_Test_Page/') . $nama ?>">tes</a> -->
        <div>
            <?php foreach ($fuzzy as $f) : ?>
                <p><?php echo $f->nilai_output ?></p>
                <p><?php echo $f->pz ?></p>
            <?php endforeach ?>
            <!-- <a class="btn btn-danger" href="<?php echo base_url('Pages/Result/Delete_Data') . $id_pengguna ?>"></a> -->
        </div>
    </div>
</div>
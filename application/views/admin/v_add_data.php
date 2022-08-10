<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <form action="<?php echo base_url() . 'admin/room/simpan_room_data' ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Publish</h3>
                        </div>
                        <div class="block-content">

                            <div class="form-group">
                                <select name="xtype" class="form-control" required>
                                    <option value="">Room</option>
                                    <?php
                                    foreach ($room->result() as $row) :
                                    ?>
                                        <option value="<?php echo $row->kd_compare; ?>"><?php echo $row->type.' - '. $row->bed.' bed'; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="room" class="form-control" placeholder="Room number" required>
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-md bg-body-light">
                            <button type="submit" class="btn btn-primary btn-square btn-block">Save</button>
                        </div>
                    </div>

                </div>

            </div>
        </form>



    </div>
    <!-- END Page Content -->
</main>
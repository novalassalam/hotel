            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Info Contact</h3>
                                    <div class="block-options">
                                        <button class="btn btn-primary" id="btn-add-new"><span class="fa fa-pencil"></span> Edit</button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <!-- Addresses -->
                                    <div class="block">
                                        <?php 
                                            $query=$this->db->query("SELECT * FROM kontak");
                                            $k=$query->row_array();
                                        ?>
                                            <address>
                                                <strong>MHOTEL.</strong><br>
                                                <?php echo $k['des'];?><br>
                                                <abbr title="Alamat">Alamat:</abbr> <?php echo $k['alamat'];?><br>
                                                <abbr title="Phone">Phone:</abbr> <?php echo $k['telp'];?>
                                            </address>
                                            <address>
                                                <strong>E-Mail</strong><br>
                                                <a href="mailto:#"><?php echo $k['email'];?></a>
                                            </address>
                                    </div>
                                    <!-- END Addresses -->
                                </div>
                            </div>
                        </div>
                    </div>
                  
                 
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
   

        <!-- Modal Hapus -->
        <form action="<?php echo base_url().'admin/contact/update_contact'?>" method="post">
        <div class="modal" id="ModalAddNew" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Edit Info Contact</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group">
                                <input type="text" name="xemail" value="<?php echo $k['email'];?>" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="xalamat" value="<?php echo $k['alamat'];?>" class="form-control" placeholder="Alamat" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="xtelp" value="<?php echo $k['telp'];?>" class="form-control" placeholder="Telp" required>
                            </div>
                            <div class="form-group">
                                <textarea name="xdesc" class="form-control" placeholder="Description" required><?php echo $k['des'];?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="kode" value="<?php echo $k['kd_kontak'];?>">
                        <button type="button" class="btn btn-default btn-square" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-square">Update</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- END Normal Modal -->  

        <script src="<?php echo base_url().'assets/js/core/jquery.min.js'?>"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                //Show Modal Add New
                $('#btn-add-new').on('click',function(){ 
                    $('#ModalAddNew').modal('show');
                });

                //Show Modal Update Kategori
                $('.btn-edit').on('click',function(){
                    var kategori_id=$(this).data('id');
                    var kategori_nama=$(this).data('kategori');
                    $('#ModalUpdate').modal('show');
                    $('[name="xkode"]').val(kategori_id);
                    $('[name="xkategori2"]').val(kategori_nama);
                });

                //Show Konfirmasi modal hapus record
                $('.btn-hapus').on('click',function(){
                    var kategori_id=$(this).data('id');
                    $('#Modalhapus').modal('show');
                    $('[name="kode"]').val(kategori_id);
                });  

            });
        </script>

    </body>
</html>
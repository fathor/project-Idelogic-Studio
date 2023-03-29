
<!-- MAIN -->
<div class="main">
   <!-- MAIN CONTENT -->
   <div class="main-content">
      <div class="container-fluid">
         <div class="panel panel-headline">
            <div class="panel-heading">
               <h3 class="panel-title">Data Kebutuhan Bahan Baku</h3>
               <p class="panel-subtitle">Period: <?php echo date('d-F-Y'); ?></p>
            </div>
            <div class="panel-body">
               <div class="panel">
                  <div class="panel-heading">
                     <h3 class="panel-title">Form Groups</h3>
                  </div>
                  <div class="panel-body">
                     <div class="form-group">
                        <label  class="col-sm-3" >Kategori Pekerjaan</label>
                        <div class="col-sm-9">
                           <select class="form-control input-lg" id="kp" onchange="get_produk()">
                              <option value='0' selected="">-Pilih-</option>
                              <?php 
                              $query = $this->db->query("SELECT * from kategori_pekerjaan");
                              foreach ($query->result() as $row) { 
                               echo"<option value='".$row->id."'>".$row->kategori."</option>";
                             } ?>
                           </select>
                        </div>
                     </div>
                     <br><br><br>
                     <div class="form-group">
                        <label  class="col-sm-3" >Nama Produk</label>
                        <div class="col-sm-9">
                           <select class="form-control input-lg" id="produk">
                           </select>
                        </div>
                     </div>
                     <br><br><br>
                     <div class="form-group">
                        <label  class="col-sm-3" >Jumlah Pesanan</label>
                        <div class="col-sm-9">
                           <div class="input-group">
                              <input class="form-control" type="number" id="pesan" onchange="get_pesanan()">
                              <span class="input-group-addon">Lembar</span>
                           </div>
                        </div>
                     </div>
                     <br><br><br>
                     <div class="form-group">
                        <label  class="col-sm-3" >Harga</label>
                        <div class="col-sm-9">
                              <label id="harga" name="harga"></label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- END OVERVIEW -->
   </div>
</div>
<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
<div class="clearfix"></div>
<footer>
   <div class="container-fluid">
      <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
   </div>
</footer>
</div>
<script>


   function load_table(){
      table = $('#table').DataTable({
         "ajax": {
            "url": "<?php echo site_url('biaya/load_data')?>",
            "type": "POST",  
            "data": function ( data ) {
               data.tipe = $('#tipe').val();
               data.year = $('#year').val();
               data.id_rm = $('#id_rm').val();
            },
         },
      } );
   }

   function reload_table(){
      table.ajax.reload(null, false);
   }

   function addform(){ 
      $('#form_add')[0].reset(); 
      $('#modal_add').modal('show');
   }

   function get_produk(){
      $("#produk").load("<?php echo site_url('soal3/get_produk')?>/"+$("#kp").val());
   }

   function get_pesanan() {
      var jumlah = $("#pesan").val();
      var id_produk = $("#produk").val();

      $.ajax({
         url : "<?php echo site_url('soal3/hasil')?>",
         type: "POST",
         data: {"jumlah":jumlah,"id_produk" : id_produk},
         dataType: "JSON",
         success: function(data){
            var hasil = jumlah * data.harga;
            $('[name="harga"]').text('Rp. '+hasil);
         },
         error: function (jqXHR, textStatus, errorThrown){
            alert('Error get data from ajax');
         }
      });
   }

</script>
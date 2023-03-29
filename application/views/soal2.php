
<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <div class="panel panel-headline">
        <div class="panel-heading">
          <h3 class="panel-title">SELECT b.id,b.nama_produk,c.kategori FROM mapping a JOIN produk b ON a.id_produk = b.id JOIN kategori_pekerjaan c ON a.id_kategori=c.id</h3>
        </div>
      </div>

      <!-- OVERVIEW -->
      <div class="panel panel-headline">
        <div class="panel-body">
          <div class="row">

            <div class="box-body">
              <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Nama Kategori</th>
                  </tr>
                </thead>
              </table>
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
  var table;
  $(document).ready(function() {
    load_table();
  });

  function load_table(){
    table = $('#table').DataTable({
      "ajax": {
        "url": "<?php echo site_url('soal2/load_data')?>",
        "type": "POST",  
      },
    });
  }

  function reload_table(){
    table.ajax.reload(null, false);
  }

</script>
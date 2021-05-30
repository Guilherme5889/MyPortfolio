        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Usuários Online</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>IP</th>
                    <th>Token</th>
                    <th>Último Acesso</th>
                    <th>O.S</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $users = Online::listarUsuariosOnline();
                    foreach($users as $user){
                  ?>
                  <tr>
                    <td><?php echo $user["ip"]; ?></td>
                    <td><?php echo $user["token"]; ?></td>
                    <td><?php echo $user["hora"]; ?></td>
                    <td><?php echo $user["OS"]; ?></td>
                  </tr>
                  <?php } ?>
                 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

</div>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

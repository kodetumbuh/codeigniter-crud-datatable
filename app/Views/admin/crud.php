<!-- load all modules css -->
<?= $this->include('admin/components/head') ?>

<!-- load navbar -->
<?= $this->include('admin/components/navbar') ?>

<!-- content -->
<div class="container">
    <br/>
    <h2>CI4 Datatables Server-Side</h2>
    <br/>
    <table class="table table-striped" id="get-table-user">
      <thead>
        <tr class="overflow-hidden">
          <th data-visible="false">ID</th>
          <th>Username</th>
          <th>Email</th>
          <th>Level User</th>
          <th>Action</th>
      </thead>
      <tbody></tbody>
    </table>
  </div>

<!-- load end body -->
<?= $this->include('admin/components/body') ?>

<!-- jquery datatable -->
<script>
    var site_url = "<?php echo site_url(); ?>";
    $(document).ready( function () {
        $('#get-table-user').DataTable({
          lengthMenu: [[ 10, 20, 30, ], [ 10, 20, 30,]],
          bProcessing: true,
          serverSide: true,
          scrollCollapse: true,
          ordering: false,
          ajax: {
            url: site_url + "/ajax-load-data",
            type: "post",
            data: {
            }
          },
          columns: [
            { data: "id"},
            { data: "username" },
            { data: "email" },
            { data: "level_user"},
            { data: "id" , render : function ( data, type, row, meta ) {
              return type === 'display'  ?
                '<a href="facebook.com" class="btn btn-success btn-sm">Update</a> <a href="google.com" class="btn btn-danger btn-sm">Delete</a>' :
                data;
            }},
          ],
          columnDefs: [
            { orderable: false, targets: [0, 1, 2, 3] }
          ],
          bFilter: true,
        });
    });
  </script>
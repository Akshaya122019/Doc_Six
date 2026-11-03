@extends('admin.layout.side-nav')
@section('content')
<div class="container mt-4">
<div class="content-wrapper ">
<section class="content">
    <div class="container">
      <div class="card card-outline card-primary">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="totaldata-table">
                  <thead class="table-dark">
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>File Download</th>
                      <th>Message</th>
                      <th>Page</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

   
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <!-- DataTables -->
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/select/1.6.2/js/dataTables.select.min.js"></script>

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
  <script type="text/javascript">
(function($){
    $(document).ready(function() {
        $('#totaldata-table').DataTable({
            dom: 'Blfrtip',
            buttons: [  
              'copyHtml5',
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'
            ],
            processing: true,
            serverSide: true,
            lengthMenu: [
              [10, 25, 50, 100, -1],
              [10, 25, 50, 100, 'All']
            ],
            order: [[0, "desc"]],
            ajax: "{{ route('data_all_form') }}",
            columns: [
                { data: 'name', name: 'name' },
                { data: 'mail', name: 'mail' },
                { data: 'phone', name: 'phone' },
                { data: 'download', name: 'download', orderable: false, searchable: false },
                { data: 'message', name: 'message' },
                { data: 'page', name: 'page' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
   


})(jQuery);
</script>
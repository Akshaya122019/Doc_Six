@extends('admin.layout.side-nav')

@section('content')
<div class="content-wrapper ">


  <!-- User Table Section -->
  <section class="content">
    <div class="container">
      <div class="card card-outline card-primary">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="totaluser-table">
                  <thead class="table-dark">
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
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
@endsection
@push('scripts')
 
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
       
        $('#totaluser-table').DataTable({
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
            ajax: "{{ route('data_all_user') }}",
            columns: [
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
   


})(jQuery);
</script>


@endpush

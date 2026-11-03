@extends('admin.layout.side-nav')
@section('content')
<div class="container mt-4">
    {{-- Flash messages --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

   <div class="content-wrapper ">


  <!-- blog Table Section -->
  <section class="content">
    <div class="container">
      <div class="card card-outline card-primary">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="totalblog-table">
                  <thead class="table-dark">
                    <tr>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Url</th>
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
        $('#totalblog-table').DataTable({
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
            ajax: "{{ route('data_all_blog') }}",
            columns: [
                { data: 'title', name: 'title' },
                { data: 'description', name: 'description' },
                { data: 'url', name: 'url' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
   


})(jQuery);
</script>
<script>
  // Auto close after 5 seconds (5000 ms)
  setTimeout(() => {
      let alerts = document.querySelectorAll('.alert');
      alerts.forEach((alert) => {
          alert.classList.remove('show'); // fade out
          setTimeout(() => alert.remove(), 500); // remove from DOM after fade
      });
  }, 5000);
</script>
@endpush
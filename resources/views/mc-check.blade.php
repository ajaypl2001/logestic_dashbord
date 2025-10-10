@include('header')
<!-- ==================================================== -->
<!-- Start right Content here -->
<!-- ==================================================== -->
<div class="page-content">
<!-- Start Container Fluid -->
<div class="container-fluid">
   @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" id="flash-message">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" id="flash-message">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif
   <div class="row">
      <div class="col-xl-12">
         <div class="card">
            <div class="card-header">
               <div class="d-flex flex-wrap justify-content-between gap-3">
                  <h4 class="card-title d-flex align-items-center gap-1" id="hidden_column">MC Check</h4>
                  <a href="{{ route('add-mc-check')}}" class="btn btn-primary"><i class="bx bx-plus me-1"></i>Add MC</a>
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table  id="customerTable" class="table align-middle mb-0 table-hover table-centered">
                     <thead class="table-dark">
                        <tr>
                           <th>Carrier Name</th>
                           <th>Commodity Value</th>
                           <th>Commodity Type</th>
                           <th>Equipment Type</th>
                           <th>Approval Status</th>
                           <th>Date Added</th>
                           {{-- <th>Added By User</th> --}}
                           {{-- <th>Team Lead</th>
                           <th>Team Manager</th> --}}
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($mc_data as $mc_dataa)
                            
                        <tr>
                           <td>{{ $mc_dataa->carrier_name}}</td>
                           <td>{{ $mc_dataa->commodity_value}}</td>
                           <td>{{ $mc_dataa->commodity_type}}</td>
                           <td>{{ $mc_dataa->equ_type}}</td>
                           <td><span class="badge bg-success">Approved</span></td>
                           <td>{{ $mc_dataa->created_datetime}}</td>
                           {{-- <td>John Smith</td>
                           <td>Tom</td> --}}
                           {{-- <td></td> --}}
                           <td>
                              <div class="d-flex gap-2">
                                 <a href="{{ route('edit_mc', ['id' => base64_encode($mc_dataa->id)]) }}" class="btn btn-soft-primary btn-sm">
                                    <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        @endforeach 
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end row -->
</div>
<!-- End Container Fluid -->
@include('footer')
<script>

    setTimeout(function() {
        var flashMessage = document.getElementById('flash-message');
        if(flashMessage){

            var alert = new bootstrap.Alert(flashMessage);
            alert.close();
        }
    }, 10000);
</script>
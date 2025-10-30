@include('header')
<div class="page-content">
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
                  <h4 class="card-title d-flex align-items-center gap-1" id="hidden_column">Customer Listing</h4>
                  <a href="{{ route('AddLoadCustomer')}}" class="btn btn-primary btn-sm"><i class="bx bx-plus me-1"></i>Add Customer</a>
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table  id="customerTable" class="table align-middle mb-0 table-hover table-centered">
                     <thead class="table-dark">
                        <tr>
                           <th>Customer Name</th>
                           <th>Address</th>
                           <th>Country</th>
                           <th>City</th>
                           <th>State</th>
                           <th>Zip</th>
                           <th>Telephone</th>
                           <th>Status</th>
                           <th>Date Added</th>
                           <th>Added By User</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>

                           @foreach ($Customers as $Customer)
     
                        <tr>
                           <td>{{ $Customer->customer_name}}</td>
                           <td>{{ $Customer->address}}</td>
                           <td>{{ $Customer->country}}</td>
                           <td>{{ $Customer->city}}</td>
                           <td>{{ $Customer->state}}</td>
                           <td>{{ $Customer->zip_code}}</td>
                           <td>{{ $Customer->telephone}}</td>
                          
                           <td>
                              @if($Customer->acc_sts == 1)
                                    <span class="badge bg-success">Active</span>
                                       @else
                                          <span class="badge bg-danger">Deactive</span>
                                       @endif
                           </td>
                           <td>{{ $Customer->created_at ? $Customer->created_at->format('Y-m-d') : 'N/A' }}</td>
                           <td>{{ $Customer->created_by }}</td>
                           <td>
                              <div class="d-flex gap-2">
                                 <!-- <a href="" class="btn btn-light btn-sm">
                                    <iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                 </a> -->
                                 <a href="{{ route('EditLoadCustomer', ['id'=>base64_encode($Customer->id)]) }}" class="btn btn-soft-primary btn-sm">
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
</div>

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
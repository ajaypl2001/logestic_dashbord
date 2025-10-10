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
                                   <h4 class="card-title d-flex align-items-center gap-1" id="hidden_column"> External Carrier </h4>
                                       <a href="{{ route('add_carrier')}}" class="btn btn-primary"><i class="bx bx-plus me-1"></i>Add Carrier</a>
                               </div>
                            </div>
                            <div class="card-body">
                                           <div class="table-responsive">
                                             <table  id="customerTable" class="table align-middle mb-0 table-hover table-centered">
                                                  <thead class="table-dark">
                                                      <tr>
                                                          <th>Carrier Name</th>
                                                          <th>MC/FF No</th>
                                                          <th>Load Type</th>
                                                          <th>Address</th>
                                                          <th>City</th>
                                                          <th>State</th>
                                                          <th>Zip</th>
                                                          <th>Telephone</th>
                                                          <th>Status</th>
                                                          {{-- <th>Approval Status</th> --}}
                                                          <th>Date Added</th>
                                                          <th>Added By User</th>
                                                        
                                                          <th>Actions</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    @foreach ($carrier_data as $carrier_datas)
                                                        <tr>
                                                            <td>{{ $carrier_datas->carrier_name}}</td>
                                                            <td>{{ $carrier_datas->mc_ff_hidden}}</td>
                                                            <td>{{ $carrier_datas->load_type}}</td>
                                                            <td>{{ $carrier_datas->address}}</td>
                                                            <td>{{ $carrier_datas->city}}</td>
                                                            <td>{{ $carrier_datas->state}}</td>
                                                            <td>{{ $carrier_datas->zip_code}}</td>
                                                            <td>{{ $carrier_datas->telephone}}</td>
                                                                <td> 
                                                                      @if($carrier_datas->acc_sts == 1)
                                                                      <span class="badge bg-success">Active</span>
                                                                      @else
                                                                      <span class="badge bg-danger">Deactive</span>
                                                                      @endif
                                                                 </td>
                                                            {{-- <td><span class="badge bg-warning text-dark">Pending Approval</span></td> --}}
                                                            <td>{{ $carrier_datas->created_at}}</td>
                                                            <td>Admin</td>
                                                            
                                                            <td>
                                                             <div class="d-flex gap-2">
                                                                <a href="{{ route('edit_carrier', ['id' => base64_encode($carrier_datas->id)]) }}" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
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
                        


                </div> <!-- end row -->

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
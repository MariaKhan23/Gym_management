@include('layouts.header')


<!-- Main Body -->
<div class="page-wrapper">
    <!-- Header Start -->

    <!-- here you can add top bar   -->
    @include('layouts.topbar')
    <!-- here you can add top bar   -->

    <!-- here you can add sidebar -->
    @include('layouts.sidebar')
    <!-- here you can add sidebar -->


    <!-- Container Start -->
    <div class="page-wrapper">
        <div class="main-content">
            <!-- Page Title Start -->


            <!-- Dashboard Start -->


            <!-- Products Orders Start -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Equipment<h4>
                                        <!-- <p class="card-desc">Here are examples of form add <code>.separate-form</code> tag with inputs.</p> -->
                            </div>
                            <div class="card-body">

                                <form class="separate-form" method="POST" action="{{route('admin.equipment.save')}}">
                                    @csrf

                                    <!-- alert  -->
                                    @if(session('success-message'))
                                    <div class="alert alert-success alert-dismissible" id="successMessage" style="text-align: center;">
                                        {{(session('success-message'))}}
                                    </div>

                                    <script>
                                        // After 6 seconds, remove the success message
                                        setTimeout(function() {
                                            document.getElementById('successMessage').style.display = 'none';
                                        }, 2000); // 6000 milliseconds = 6 seconds
                                    </script>
                                    @endif
                                    <!-- alert end  -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h5 class="from-title mb-1">Equipment Info</h5>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="member-name" class="col-form-label">Equipment Name</label>
                                                    <input class="form-control" type="text" placeholder="Enter Your Name" id="member-name" name="equipment_name">
                                                </div>
                                            </div>

                                            <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="member-email" class="col-form-label">equipment Categorie</label>
                                                    <input class="form-control" type="email" placeholder="Enter Your Email" id="member-email" name="vendor_email">
                                                </div>
                                            </div>   -->
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Equipment Categorie</label>
                                            <select name="equipment_categories" class="form-control">
                                                <option >Select a Equipment Categorie</option>
                                                @foreach($equipments_categories as $equipments_categories)
                                                <option value="{{ $equipments_categories->id }}">{{ $equipments_categories->equipment_categorie_name }} </option>
                                                @endforeach 
                                            </select> 
                                        </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="company-name" class="col-form-label">Description</label>
                                                    <input class="form-control" type="text" placeholder="Company Name" id="company-name" name="equipment_description">
                                                </div>
                                            </div> 


                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="another-number" class="col-form-label">Equipment QTY</label>
                                                    <input class="form-control" type="number" placeholder="Contact Number" id="another-number" name="equipment_quantity">
                                                </div>
                                            </div>


                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="member-name" class="col-form-label">Purchase Date</label>
                                                    <input class="form-control" type="date" placeholder="Enter Your Name" id="member-name" name="equipment_purchase_date">
                                                </div>
                                            </div>


                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="member-name" class="col-form-label">Expire Date</label>
                                                    <input class="form-control" type="date" placeholder="Enter Your Name" id="member-name" name="equipment_expire_date">
                                                </div>  
                                            </div>


                                            <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="member-name" class="col-form-label">Vendor Name</label>
                                                    <input class="form-control" type="text" placeholder="Enter Your Name" id="member-name" name="vendor_name">
                                                </div>  
                                            </div> -->

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Vendor</label>
                                            <select name="vendor" class="form-control" id="provinceSelect">
                                                <option>Select a Vendor</option>
                                                @foreach($vendors as $vendors)
                                                <option value="{{ $vendors->id }}">{{ $vendors->vendor_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                            </div>




                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="member-name" class="col-form-label">Cost of per Equipment</label>
                                                    <input class="form-control" type="number" placeholder="cost of per equipment " id="member-name" name="equipment_piece_cost">
                                                </div>   
                                            </div>

                                        </div>


                                        <div class="form-group mb-0">
                                            <!-- <button class="btn btn-primary" type="button">reset</button> -->
                                            <input class="btn btn-danger" type="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <!-- here you can add bottom bar  -->
            @include('layouts.bottombar')

            <!-- here you can add bottom bar  -->


        </div>
    </div>

</div>

<!-- main body end  -->



@include('layouts.footer')
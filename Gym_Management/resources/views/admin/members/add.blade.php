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
                                <h4>Add Member<h4>
                                        <!-- <p class="card-desc">Here are examples of form add <code>.separate-form</code> tag with inputs.</p> -->
                            </div>
                            <div class="card-body">

                                <form class="separate-form" method="POST" action="{{route('admin.staff.save')}}">
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
                                        <h5 class="from-title mb-1">Member Registration Form </h5>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="member-name" class="col-form-label">Full Name</label>
                                                    <input class="form-control" type="text" placeholder="Staff Full Name" id="member-name" name="member_name">
                                                </div>
                                            </div>


                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="company-name" class="col-form-label">Contact</label>
                                                    <input class="form-control" type="number" placeholder="Staff Contact" id="company-name" name="staff_contact">
                                                </div>
                                            </div>


                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="another-number" class="col-form-label">Email</label>
                                                    <input class="form-control" type="email" placeholder="Staff Email" id="another-number" name="staff_email">
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="another-number" class="col-form-label">Date Of Birth</label>
                                                    <input class="form-control" type="number" placeholder="Contact Number" id="another-number" name="equipment_quantity">
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="address" class="col-form-label">mebrship Plan</label>
                                                    <select class="form-control" id="address" name="address">
                                                        <option value="Option 1">Option 1</option>
                                                        <option value="Option 2">Option 2</option>
                                                        <option value="Option 3">Option 3</option>

                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="another-number" class="col-form-label">Membership price</label>
                                                    <input class="form-control" type="number" placeholder="Contact Number" id="another-number" name="equipment_quantity">
                                                </div>
                                            </div>


                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="address" class="col-form-label">mebrship Plan payment status</label>
                                                    <select class="form-control" id="address" name="address">
                                                        <option value="Option 1">Paid</option>
                                                        <option value="Option 2">Not Paid</option>


                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="another-number" class="col-form-label">Address</label>
                                                    <textarea class="form-control" placeholder="Enter Quantity" id="another-number" name="membership_benefits"></textarea>
                                                </div>
                                            </div>

                                            <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="another-number" class="col-form-label">Date Of Birth</label>
                                                    <input class="form-control" type="number" placeholder="Contact Number" id="another-number" name="equipment_quantity">
                                                </div>
                                            </div> -->






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
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
                                    <h4>Equipment Categorie Add</h4>
                                    <!-- <p class="card-desc">Here are examples of form add <code>.separate-form</code> tag with inputs.</p> -->
                                </div>
                                <div class="card-body">

                                    <form class="separate-form" method="POST" action="{{route('admin.equipment.categorie.save')}}">
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
                                            <h5 class="from-title mb-1">Equipment Categorie Info</h5>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label for="member-name" class="col-form-label">Categorie Name</label>
                                                        <input class="form-control" type="text" placeholder="Enter Your Name" id="member-name" name="equipment_categorie_name">
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
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
                                <h4>Add Class<h4>
                                        <!-- <p class="card-desc">Here are examples of form add <code>.separate-form</code> tag with inputs.</p> -->
                            </div>
                            <div class="card-body">

                                <form class="separate-form" method="POST" action="{{route('admin.class.save')}}">
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
                                        <h5 class="from-title mb-1">Class Info</h5>
                                        <div class="row">  

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="company-name" class="col-form-label">Class Name</label>
                                                    <input class="form-control" type="text" placeholder="Class Name" id="company-name" name="class_name">
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Trainer</label>
                                                    <select name="trainer" class="form-control">
                                                        <option>Select a Trainer For Class</option>
                                                        @foreach($trainer as $trainer)
                                                        <option value="{{ $trainer->id }}">{{ $trainer->staff_name }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="company-name" class="col-form-label">Class Duration</label>
                                                    <input class="form-control" type="text" placeholder="Class Duration" id="company-name" name="class_duration">
                                                </div>
                                            </div> -->


                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="class-duration" class="col-form-label">Class Duration</label>
                                                    <div class="time-input">
                                                        <select class="form-control" name="hours">
                                                            <?php for ($i = 0; $i < 24; $i++) : ?>
                                                                <option value="<?= $i; ?>"><?= str_pad($i, 2, '0', STR_PAD_LEFT); ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <span>Hours</span>
                                                        <select class="form-control" name="minutes">
                                                            <?php for ($i = 0; $i < 60; $i += 5) : ?>
                                                                <option value="<?= $i; ?>"><?= str_pad($i, 2, '0', STR_PAD_LEFT); ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <span>Minutes</span>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="another-number" class="col-form-label">Class Capacity</label>
                                                    <input class="form-control" type="number" placeholder="Class Capacity" id="another-number" name="class_capacity">
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
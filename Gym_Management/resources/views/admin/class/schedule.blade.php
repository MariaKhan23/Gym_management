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
                        <!-- <div class="card">
                            <div class="card-header">
                                <h4>Add Equipment<h4>
                                        
                            </div>
                           
                          <br><br> 
           


                        </div> -->
                        <div id="calendar"></div>

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

<!-- Modal to display upon date click -->
<!-- <div id="myModal" class="modal">
    <div class="modal-content">
       
        This is the modal content.
    </div>  
</div> -->



<div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('save-schedule') }}" method="POST" id="">
                @csrf 
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <label for="">Class</label>
                <input type="text" name="class_name" class="form-control" id="classer"> <br> -->
                <select class="form-select" aria-label="Default select example" id="class" name="class">
                    <option selected>select a class </option>
                    <option value="1">One</option>
                </select> 

                <label for="">Trainer</label>
                <input type="text" name="trainer_name" class="form-control" id="trainer"> <br>
                <input type="hidden" name="trainer_id" class="form-control" id="trainer_id"> <br>

                <label for="">Hours</label>
                <input type="text" name="class_hours" class="form-control" id="start_time"> <br>

                <label for="">Minutes</label>
                <input type="text" name="class_minutes" class="form-control" id="end_time"> <br>

                <label for="">class Capacity</label>
                <input type="text" name="class_capacity" class="form-control" id="capacity"> <br> 

                
                <label for="">Start Date</label>
                <input type="date" name="from_start" class="form-control" id="start_date"> <br> 

                
                <label for="">End Date</label>
                <input type="date" name="to_end" class="form-control" id="end_date"> <br> 
 
                <input type="text" id="date" name="date">
            </div>
            <div class="modal-footer"> 
                <button type="submit" class="btn btn-primary" id="submitSchedule">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> 
            </form> 
        </div>

    </div>  
</div>  

<!-- edit modal  -->
<!-- Edit Event Modal -->
<div class="modal fade" id="editEventModal" tabindex="-1" role="dialog" aria-labelledby="editEventModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <form action="{{ route('update-schedule') }}" method="POST" id="">
        @csrf 
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEventModalLabel">Edit Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           

            <div class="modal-body">
                
                <!-- <label for="">Class</label>
                <input type="text" name="class_name" class="form-control" id="classer"> <br> -->
                <label for="" id="old_class_name"></label> <br>
                <input type="hidden" id="id" name="id">
                <label for="">New Class Name</label>
                <select class="form-select" aria-label="Default select example" id="classer" name="classer">
                    <option selected>select a class </option>
                    <option value="1">One</option>
                </select>  
 

                <input type="hidden" id="class_names" name="class_names">
                <label for="">Trainer</label>
                <input type="text" name="trainerer" class="form-control" id="trainerer"> <br>
                <input type="hidden" name="trainer_ider" class="form-control" id="trainer_ider"> <br>

                <label for="">Hours</label>
                <input type="text" name="start_timeer" class="form-control" id="start_timeer"> <br>

                <label for="">Minutes</label>
                <input type="text" name="end_timeer" class="form-control" id="end_timeer"> <br>
 
                <label for="">class Capacity</label>
                <input type="text" name="capacityer" class="form-control" id="capacityer"> <br> 

                <label for="" id="old_start_dateer">old start Date</label> <br>
                <label for="">Start Date</label>
                <input type="date" name="start_dateer" class="form-control" id="start_dateer"> <br> 

                <label for="" id="old_end_dateer">old start Date</label> <br> 
                
                <label for="">End Date</label>
                <input type="date" name="end_dateer" class="form-control" id="end_dateer"> <br> 
 
                <input type="hidden" id="dateer" name="dateer">
            </div>    

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="updateEventBtn">Update Event</button>

            </div> 
        </div> 
    </form> 
    </div>
</div>

<!-- edit modal  -->

@include('layouts.footer')

<script>
      $(document).ready(function() {
        $('#submitSchedule').submit(function(e) {
            e.preventDefault();
            // var startDate = $('#Start_date').val();
            // var endDate = $('#End_date').val();

            var  start_date = $('#start_date').val();
            var  end_date = $('#end_date').val(); 
            var  trainer = $('#trainer_id').val();
            var  start_time = $('#start_time').val();
            var  end_time =  $('#end_time').val();
            var  capacity = $('#capacity').val();
            var  date = $('#date').val();   

            // alert(start_date); 
            $.ajax({  
                type: 'POST',
                url: '{{ route("save-schedule") }}',
                data: {  
                    "_token": "{{ csrf_token() }}",
                    "start_date": start_date,
                    "end_date": end_date,
                    "trainer": trainer, 
                    "start_time": start_time,
                    "end_time": end_time,
                    "capacity": capacity,
                    "date":date, 
                }, 
                  
                success: function(response) {
                    // console.log(response);  
                    alert("saved successfully");
                }, 

                error: function(error) {  
                    console.log("Error:", error);
                },

            }); 
        });
    }); 

</script>




<script>
    // $('#submitSchedule').on('click', function() {
    //     // AJAX request to handle form submission
    //     $.ajax({
    //         url: '{{ route('save-schedule') }}',
    //         method: 'POST',
    //         data: {
               
    //             // Other form fields as needed  end_time capacity
    //         },  
    //         success: function(response) {
    //             console.log("mariya Loves Bilal"); 
    //         },
    //         error: function(error) { 
    //             console.log("Error:", error);
    //         }
    //     });
    // }); 

</script>



<script>
      $(document).ready(function() {
        $('#updateEventBtn').submit(function(e) {
            e.preventDefault();
            // var startDate = $('#Start_date').val();
            // var endDate = $('#End_date').val();
            var   id = $('#id').val(); 
            var  start_date = $('#start_dateer').val();
            var  end_date = $('#end_dateer').val(); 
            var  trainer = $('#trainer_ider').val();
            var  start_time = $('#start_timeer').val(); //hours
            var  end_time =  $('#end_timeer').val(); //minutes
            var  capacity = $('#capacityer').val();
            var  date = $('#dateer').val();   
            var Class = $('class_names').val();

          
            $.ajax({  
                type: 'POST', 
                url: '{{ route("update-schedule") }}',
                data: {  
                    "_token": "{{ csrf_token() }}",
                    "id": id,
                    "start_date": start_date,
                    "end_date": end_date,   
                    "trainer": trainer, 
                    "start_time": start_time,
                    "end_time": end_time,
                    "capacity": capacity, 
                    "date":date, 
                    
                }, 
                  
                success: function(response) {
                    // console.log(response);  
                    alert("saved successfully");
                }, 

                error: function(error) { 
                    console.log("Error:", error);
                },

            }); 
        });
    }); 

</script>
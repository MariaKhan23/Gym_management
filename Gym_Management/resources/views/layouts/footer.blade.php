 <!-- Script Start -->
 <!-- <script src="assets/js/jquery.min.js"></script> -->
 <script src="{{ asset('admin_assets') }}/js/jquery.min.js"></script>

 <!-- <script src="assets/js/popper.min.js"></script> -->
 <script src="{{ asset('admin_assets') }}/js/popper.min.js"></script>

 <!-- <script src="assets/js/bootstrap.min.js"></script> -->
 <script src="{{ asset('admin_assets') }}/js/bootstrap.min.js"></script>

 <!-- <script src="assets/js/swiper.min.js"></script> -->
 <script src="{{ asset('admin_assets') }}/js/swiper.min.js"></script>

 <!-- <script src="assets/js/apexchart/apexcharts.min.js"></script> -->
 <script src="{{ asset('admin_assets') }}/js/apexchart/apexcharts.min.js"></script>

 <!-- <script src="assets/js/apexchart/control-chart-apexcharts.js"></script> -->
 <script src="{{ asset('admin_assets') }}/js/apexchart/control-chart-apexcharts.js"></script>

 <!-- Page Specific -->
 <!-- <script src="assets/js/nice-select.min.js"></script> -->
 <script src="{{ asset('admin_assets') }}/js/nice-select.min.js"></script>

 <!-- Custom Script -->
 <!-- <script src="assets/js/custom.js"></script> -->
 <script src="{{ asset('admin_assets') }}/js/custom.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.min.js"></script>

 </body>

 <script>
     // document.addEventListener('DOMContentLoaded', function() {
     //     var calendarEl = document.getElementById('calendar');

     //     var calendar = new FullCalendar.Calendar(calendarEl, {
     //         initialView: 'dayGridMonth', 

     //     });

     //     calendar.render(); 
     // });




     // document.addEventListener('DOMContentLoaded', function() {
     //     var calendarEl = document.getElementById('calendar');

     //     var calendar = new FullCalendar.Calendar(calendarEl, {
     //         initialView: 'dayGridMonth', 
     //         views: {
     //             timeGridWeek: {
     //                 type: 'timeGrid',
     //                 duration: { weeks: 1 }, 
     //                 buttonText: 'Week' 
     //             }

     //         },

     //         headerToolbar: {
     //             left: 'prev,next today',
     //             center: 'title',
     //             right: 'dayGridMonth,timeGridWeek' 
     //         }

     //     });

     //     calendar.render(); 
     // });
 </script>

 <script>
     document.addEventListener('DOMContentLoaded', function() {
         var calendarEl = document.getElementById('calendar');
         var modal = document.getElementById('myModal');

         var calendar = new FullCalendar.Calendar(calendarEl, {
             initialView: 'dayGridMonth',
             editable: true,
             selectable: true,
             selectHelper: true,

             events: {
                 url: '{{ route("get-events-for-calendar") }}',
                 method: 'GET'
             },

             //      eventRender: function(info) {
             //     var description = info.event.extendedProps.description;
             //     var location = info.event.extendedProps.location;

             //     // Set the event title (assuming the 'title' property exists)
             //     info.el.querySelector('.fc-title').innerHTML = info.event.title;

             //     // Display additional information below the title
             //     var eventDetails = '<div>' + description + '</div><div>' + location + '</div>';
             //     info.el.querySelector('.fc-content').innerHTML += eventDetails;
             // },

             // Your FullCalendar configurations

             // dateClick: function(info) {
             //     // Handle date click
             //     modal.style.display = "block"; // Open the modal
             //     // You can pass the clicked date 'info.date' to the modal for use if needed
             //     console.log('Clicked on: ' + info.dateStr);
             //     // alert("hello"); 
             // }


             //          eventClick: function(info) {

             //             // alert(info); 
             //         // var eventId = info.event.id;
             //         // alert(eventId); 

             //         var eventId = info.event.id; 
             // // console.log('Event ID:', eventId);  
             // // alert(eventId);  

             //         // Make an AJAX request to fetch the details of the clicked event
             //         $.ajax({
             //             url: '/edit-schedules/' + eventId, 
             //             method: 'GET',
             //             success: function(data) {  
             //                 alert(data); 
             //                 // Populate the modal form with the event data
             //                 $('#myModal #class').val(data.event_data.class_name);
             //                 $('#myModal #trainer_id').val(data.event_data.description);
             //                 $('#myModal #start_time').val(data.event_data.location);
             //                 $('#myModal #end_time').val(data.event_data.location);
             //                 $('#myModal #capacity').val(data.event_data.location);
             //                 $('#myModal #from_start').val(data.event_data.location);
             //                 $('#myModal #to_end').val(data.event_data.location);
             //                 $('#myModal #date').val(data.event_data.location);
             //                 // Add more fields as needed

             //                 $('#myModal').modal('show');
             //             },
             //             error: function(error) {
             //                 console.log("Error:", error);
             //             }
             //         });
             //     },


             //  eventClick: function(info) {
             //      var eventId = info.event.id;
             //      $.ajax({
             //         //  url: '/edit_schedules/' + eventId,
             //         url: `/test/${eventId}`,
             //         // url: 'http://gym_management.test/edit_schedules/' + eventId,
             //          method: 'GET',
             //          success: function(data) {
             //              // Handle the data received
             //          },
             //          error: function(error) {
             //              // Handle error
             //          }  
             //      });  
             //  },


             eventClick: function(info) {
                 var eventId = info.event.id;
                 fetchEventData(eventId); // Call the function to perform the AJAX request
             },

             dateClick: function(info) {

                 var modal = document.getElementById('myModal');
                 $('#date').val(info.dateStr);

                 $.ajax({
                     url: '{{route("get-classes")}}',
                     method: 'GET',
                     data: {
                         date: info.dateStr
                     },

                     //  success: function(response) {
                     //      console.log(response);
                     //      // console.log(response[0].class_name);

                     //      // console.log(response.class_name); 
                     //      // modal.style.display = "block";
                     //      // $('#class').val(response.class_name); 
                     //      // $('#modalContent').html(response); 


                     //      modal.style.display = "block";
                     //      //  $('#classer').val(response[0].class_name); 
                     //      var selectDropdown = $('#classer');
                     //      selectDropdown.empty();


                     //      response.forEach(function(classObj) {
                     //          var option = $('<option></option>'); // Create a new option element



                     //          option.val(classObj.class_name); // Set the value for the option
                     //          option.text(classObj.class_name); // Set the displayed text for the option

                     //          selectDropdown.append(option); // Append the option to the dropdown
                     //      });

                     //      $('#modalContent').html(response);
                     //      if (response.length > 0) {
                     //          selectDropdown.val(response[0].class_name);
                     //      }
                     //  },
                     //  error: function(error) {
                     //      console.log(error);
                     //  }

                     success: function(response) {
                         console.log("Response:", response);

                         modal.style.display = "block";

                         var selectDropdown = $('#class');
                         selectDropdown.empty(); 
                         selectDropdown.append($('<option></option>').attr('value', '').text('Select a class')); // Default "Select a class" option

                         response.forEach(function(classObj) {
                             var option = $('<option></option>').attr('value', classObj.class_name).text(classObj.class_name);
                             selectDropdown.append(option);
                         });

                         $('#class').on('change', function() {
                             var selectedClass = $(this).val();

                             if (selectedClass !== '') {
                                 var selectedClassObj = response.find(function(classObj) {
                                     return classObj.class_name === selectedClass;
                                 });

                                 console.log("Selected Class Object:", selectedClassObj);

                                 if (selectedClassObj) {
                                     console.log("Trainer:", selectedClassObj.trainer);
                                     console.log("Start Time:", selectedClassObj.hours);
                                     console.log("End Time:", selectedClassObj.minutes);

                                     //  $('#trainer').val(selectedClassObj.trainer);
                                     $('#date').val(info.dateStr);
                                     $('#trainer_id').val(selectedClassObj.trainer);
                                     $('#trainer').val(selectedClassObj.staffer.staff_name);
                                     $('#start_time').val(selectedClassObj.hours);
                                     $('#end_time').val(selectedClassObj.minutes);
                                     $('#capacity').val(selectedClassObj.class_capacity);
                                     //  $class->staffer->staff_name

                                 }
                             }
                         });

                         $('#modalContent').html(response);
                     },
                     error: function(error) {
                         console.log("Error:", error);
                     }

                 });
  
             }


         });



         calendar.render();
     });



     // Close the modal when clicking outside of it
     window.onclick = function(event) {
         var modal = document.getElementById('myModal');
         if (event.target === modal) {
             modal.style.display = "none";
         }
     }
 </script>




 <script>
     function fetchEventData(eventId) {
         // alert(eventId);  
         let actionUrl = "{{ route('test', ['eventId' => 'EVENTID']) }}";
         actionUrl = actionUrl.replace('EVENTID', eventId);

         // console.log(actionUrl) 

         $.ajax({
             // url: "route ('/test/${eventId})",   
             url: actionUrl,
             method: 'GET',
             success: function(data) {  
                 // $('#class').val(data.event_data.class_name); 
                 // $('#myModal').modal('show');  
                 $('#classer').val(data.event_data.class_name);
                 

                 // For the staffer information 
                 // $('#trainerer').val(data.event_data.staffer.staff_name);
                 $('#old_class_name').text("old class name    : " + "  "  + data.event_data.class_name);
                 $('#old_start_dateer').text("old Start Date    : " + "  "  + data.event_data.from_start);
                 $('#old_end_dateer').text("old End Date    : " + "  "  + data.event_data.to_end);
                 $('#dateer').val(data.event_data.date);
                 $('#id').val(data.event_data.id);
                 $('#editEventModal').modal('show');
                 fetchAndPopulateClasses();

             },
             error: function(error) {
                 // Handle error 
                 console.error('Error:', error);
             }
         });
     }



     function fetchAndPopulateClasses() {
         $.ajax({
             url: "{{ route('all-classes') }}", // Use the correct route to fetch all classes
             method: 'GET',
             success: function(classes) {
                 var selectDropdown = $('#classer');
                 selectDropdown.empty();

                 classes.forEach(function(classObj) {
                     var option = $('<option></option>').attr('value', classObj.id).text(classObj.class_name);
                     selectDropdown.append(option);
                 });                
             },   

             error: function(error) {
                 console.error('Error:', error);   
             }   
         });
     }  

  

function updateModalFields(selectedClass) {
        // Make an AJAX request to fetch details of the selected class
        $.ajax({
            url: "{{ route('get-class-details') }}", // Replace with your route to get class details
            method: 'GET', 
            data: { class_id: selectedClass }, // Send the selected class ID
            success: function(classDetails) {


                // hello ("world"); 
                // Assuming you have fields in the modal to display class details
                // $('#trainerer').val(classDetails.hours); 
                // Update other fields as needed
            },
            error: function(error) {
                console.error('Error:', error);
            }
        });
    }





    $('#classer').on('change', function() {
        var selectedClass = $(this).val();

        // Use another AJAX request to get details of the selected class
        $.ajax({
            url: "{{ route('get-class-details') }}",
            method: 'GET',
            data: { selectedClass: selectedClass },
            success: function(selectedClassObj) {
                // console.log("Selected Class Object:", selectedClassObj); 

                // console.log(selectedClassObj); 

                // Populate fields with the details of the selected class
                $('#class_names').val(selectedClassObj.class_name);
                $('#trainerer').val(selectedClassObj.staffer.staff_name);
                $('#trainer_ider').val(selectedClassObj.trainer); 
                $('#start_timeer').val(selectedClassObj.hours);
                $('#end_timeer').val(selectedClassObj.minutes);  
                $('#capacityer').val(selectedClassObj.class_capacity);
                // $('#old_start_dateer').val(selectedClassObj.class_capacity);
            }, 
            error: function(error) {  
                console.error('Error fetching class details:', error);
            }
        });
    });         
 </script>



 </html>
<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Class_Schedule;
use App\Models\GymClass;
use App\Models\staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    //


    public function classes(Request $request)
    {
        // $classes = GymClass::all(); 
        $classes = GymClass::with('staffer')->latest()->get();
        // dd($classes); 

        return view('admin.class.list',['classes' => $classes]);
    }

    public function add_class(Request $request)
    {
        $trainer = staff::all();

        return view('admin.class.add',['trainer' => $trainer]);
    }



    public function save_class(Request $request){
        // dd($request);  
        $validatedData = $request->validate([
            'class_name' => 'required|unique:gym_classes,class_name',
            'trainer' => 'required',
            'hours' => 'required', 
            'minutes' => 'required',
            'class_capacity' => 'required',
        ]); 
 
        // If validation passes, create the application
        GymClass::create([
            'class_name' => $validatedData['class_name'],
            'trainer' => $validatedData['trainer'],
            'hours' => $validatedData['hours'],
            'minutes' => $validatedData['minutes'],
            'class_capacity' => $validatedData['class_capacity'],
        ]);
        return redirect()->back()->with('success-message','Class Added successfully');
    }


    public function edit_class(Request $request,$id){
        // dd($id);  
        $trainer = staff::all();

        $id_finder = GymClass::find($id)->with('staffer')->first();
        // dd($id_finder); 
        if ($id_finder) {
           return view('admin.class.edit',['id_finder' => $id_finder, 'trainer' => $trainer]);
        }
        else {
            return redirect()->back()->with('success-message','failed to find record');

        }

    }




    public function delete_class(Request $request, $id){
        // dd($id); 
        $get_id = GymClass::find($id);
        // dd($get_id);   
        if ($get_id) {
            
            $get_id->delete();
            return redirect()->back()->with('success-message', 'Class deleted successfully');
        }
        else{
            return redirect()->back()->with('success-message', 'failed to delete');
        }

    }




  public function update_class(Request $request, $id){
    // dd($request);   
    $validatedData = $request->validate([
        'class_name' => 'required|unique:gym_classes,class_name,' . $id,
         'trainer' => 'required',
         'hours' => 'required',
         'minutes' => 'required',
         'class_capacity' => 'required',
    ]);

    $class = GymClass::find($id);
    // dd($class);   
    if ($class) { 
        $class->update($validatedData);
        return redirect()->back()->with('success-message', 'class updated successfully');
    } else {
        return redirect()->back()->with('success-message', 'class not found');
    }

  }




  public function class_schedule(Request $request){
    return view('admin.class.schedule');
  }




  public function class_get(Request $request){
    // $class = GymClass::all();  
    $class = GymClass::with('staffer')->latest()->get();

    return response()->json($class);
  
  }




//   public function class_wise_data(Request $request)
//   {
//     $class_name = $request->input('class_name');
    
//     $data = GymClass::where('class_name', $class_name)
//                     ->select('trainer', 'hours', 'minutes','class_capacity	') // Add additional columns you want
//                     ->get();

//     return response()->json($data);  
//   }  




public function save_schedule(Request $request)
{
    $class_name = $request->input('class'); 
    $start_date = $request->input('from_start');
    $end_date = $request->input('to_end'); 
    $trainer = $request->input('trainer_name');
    $trainer_id = $request->input('trainer_id');
    $start_time = $request->input('class_hours');
    $end_time = $request->input('class_minutes'); 
    $capacity = $request->input('class_capacity');  
    $date = $request->input('date');  

    
    Class_Schedule::create([  
        'class_name' => $class_name,
        'trainer' => $trainer_id,
        'hours' =>  $start_time,
        'minutes' => $end_time,
        'capacity' => $capacity,
        'from_start' => $start_date,
        'to_end' => $end_date,
        'date'=>$date,
       
    ]);
     
    // Return a response or success message as needed
    return response()->json(['message' => 'Schedule saved successfully']);
}
  
    





public function getEventsForCalendar()
{
    $events = Class_Schedule::with('staffer')->get(); 
    // $classes = GymClass::with('staffer')->latest()->get(); 

    // Fetch all events from the database

    // Group the events by date to structure them for FullCalendar
    $groupedEvents = $events->groupBy('date'); 

    $formattedEvents = [];
    foreach ($groupedEvents as $date => $events) {
        foreach ($events as $event) {  
            $formattedEvents[] = [
                'id' => $event->id,
                'title' => $event->class_name,
                'description' => $event->staffer->staff_name, 
                'location' => "Timings: " . "00". $event->hours . "." . "0". $event->minutes,
                'start' => $date, 
            //     'description' => $event->description, 
            // 'location' => $event->location, 
                
            ];
        }
    }  

    return response()->json($formattedEvents);
}




public function edit_schedules(Request $request,$eventId){

    $event = Class_Schedule::find($eventId);
  

    if ($event) {
      
        $formattedDatas = [
            'class_name' => $event->class_name,
            'trainer' => $event->trainer,
            'hours' => $event->hours,
            'minutes' => $event->minutes,
            'capacity' => $event->capacity,
            'from_start' => $event->from_start,
            'to_end' => $event->to_end,
            'date' => $event->date,
            // Add more properties as needed
        ]; 

        return response()->json(['event_data' => $formattedDatas]);
    }

    return response()->json(['error' => 'Event not found'], 404);
}



public function test(Request $request,$eventId){
   
    $eventData = Class_Schedule::with('staffer')->find($eventId);

    // Return the data as JSON
    return response()->json(['event_data' => $eventData]);
    
}




// getAllClasses
public function getAllClasses()
{  
    $classes = GymClass::with('staffer')->get();
    return response()->json($classes); // Return the classes as JSON
}   




// getClassDetails
public function getClassDetails(Request $request)
{
    $selectedClass = $request->input('selectedClass');
    // $hello = "hello";
    // Fetch details of the class using $classId
    // $classDetails = Class_Schedule::find($classId);
    // $classDetailer = GymClass::find($selectedClass);
    $classDetailer = GymClass::with('staffer')->find($selectedClass); 

    return response()->json($classDetailer);    
} 
 




public function update_schedule(Request $request){

    // dd($request);   

    $id = $request->input('id');
    $class_name = $request->input('classer');
    $start_date = $request->input('start_dateer'); //hour
     $end_date = $request->input('end_dateer');    //minues 
    // $trainer = $request->input('trainer_name');
    $trainer_id = $request->input('trainer_ider');
    $start_time = $request->input('start_timeer');
    $end_time = $request->input('end_timeer'); 
    $capacity = $request->input('capacityer');  
    $date = $request->input('dateer');  
    $class_name = $request->input('class_names');


    // var id = $('#id').val(); 
    // var  start_date = $('#start_dateer').val();
    // var  end_date = $('#end_dateer').val(); 
    // var  trainer = $('#trainer_ider').val();
    // var  start_time = $('#start_timeer').val(); 
    // var  end_time =  $('#end_timeer').val(); 
    // var  capacity = $('#capacityer').val();
    // var  date = $('#dateer').val();   
    // var Class = $('classer').val();




    // Class_Schedule::create([  
    //     'class_name' => $class_name,
    //     'trainer' => $trainer_id,
    //     'hours' =>  $start_time,
    //     'minutes' => $end_time,
    //     'capacity' => $capacity,
    //     'from_start' => $start_date,
    //     'to_end' => $end_date,
    //     'date'=>$date,
       
    // ]);


    $affected = DB::table('class__schedules')
    ->where('id', $id)
    ->update([  
        'class_name' => $class_name,
        'trainer' => $trainer_id,
        'hours' => $start_time,
        'minutes' => $end_time,
        'capacity' => $capacity,
        'from_start' => $start_date,
        'to_end' => $end_date,
        'date' => $date
    ]);   
     

    if ($affected) {
        return response()->json(['message' => 'Schedule updated successfully']);
    } else {
        return response()->json(['message' => 'Schedule not found or no updates applied'], 404);
    }

    // Return a response or success message as needed
    // return response()->json(['message' => 'Schedule Updated successfully']);
}

}

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
                    <div class="card chart-card">
                        <div class="card-header">
                            <h4>Equipments List</h4>
                            <button type="button" class="btn btn-primary squer-btn sm-btn mt-2 mr-2" style="float:inline-end;"><a href="{{ route('admin.equipment.add') }}" style="text-decoration: none; color:white;">Add Equipment</button>

                        </div>
                        <div class="card-body pb-4">
                            <div class="chart-holder">
                                <div class="table-responsive">
                                    <table class="table table-styled mb-0">
                                        <thead>
                                            <tr>

                                                <th>S.No</th>
                                                <th>Equipment Name</th>
                                             
                                                <th>Equipment Categorie</th>
                                                <th>Equipment Description</th>
                                                <th>Equipment Quantity</th>
                                                <th>Equipment Purchase Date</th>
                                                <th>Equipment Expire Date</th>
                                                <th>Vendor</th>
                                                <th>Cost of per equipment</th>
                                               
                                                <th>Action</th>
                                            </tr> 
                                        </thead>
                                        <tbody>
                                            @foreach($abc as $index => $data)
                                           
                                            <tr>
                                                <td>{{$index + 1}}</td>
                                                <td>{{$data->equipment_name}}</td>
                                                <td>{{$data->val_fun->equipment_categorie_name}}</td>

                                                <td>{{$data->equipment_description}}</td>
                                                <td>{{$data->equipment_quantity}}</td>
                                                <td>{{$data->equipment_purchase_date}}</td>
                                                <td>{{$data->equipment_expire_date}}</td>
                                                <td>{{$data->ven_name->vendor_name}}</td>
                                                <td>{{$data->equipment_piece_cost}}</td>
                                               


                                                <td class="relative">
                                                    <a class="action-btn " href="javascript:void(0); ">
                                                        <svg class="default-size " viewBox="0 0 341.333 341.333 ">
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M170.667,85.333c23.573,0,42.667-19.093,42.667-42.667C213.333,19.093,194.24,0,170.667,0S128,19.093,128,42.667 C128,66.24,147.093,85.333,170.667,85.333z "></path>
                                                                        <path d="M170.667,128C147.093,128,128,147.093,128,170.667s19.093,42.667,42.667,42.667s42.667-19.093,42.667-42.667 S194.24,128,170.667,128z "></path>
                                                                        <path d="M170.667,256C147.093,256,128,275.093,128,298.667c0,23.573,19.093,42.667,42.667,42.667s42.667-19.093,42.667-42.667 C213.333,275.093,194.24,256,170.667,256z "></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    <div class="action-option ">
                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('admin.equipment.edit',['id' => $data->id ])}}"><i class="far fa-edit mr-2 "></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('admin.equipment.delete',['id' => $data->id ])}}"><i class="far fa-trash-alt mr-2 "></i>Delete</a>
                                                            </li>
                                                        </ul>
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


            <!-- here you can add bottom bar  -->
            @include('layouts.bottombar')

            <!-- here you can add bottom bar  -->


        </div>
    </div>

</div>

<!-- main body end  -->



@include('layouts.footer')
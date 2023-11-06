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
                            <h4>Newest Orders </h4>
                            <button type="button" class="btn btn-primary squer-btn sm-btn mt-2 mr-2" style="float:inline-end;"><a href="{{ route('admin.vendor.add') }}" style="text-decoration: none; color:white;">Add Vendor</button>

                        </div>
                        <div class="card-body pb-4">
                            <div class="chart-holder">
                                <div class="table-responsive">
                                    <table class="table table-styled mb-0">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </th>
                                                <th>Order ID</th>
                                                <th>Billing Name</th>
                                                <th>Date</th>
                                                <th>Total</th>
                                                <th>Payment Status</th>
                                                <th>Payment Method</th>
                                                <th>View Details</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox2" type="checkbox">
                                                        <label for="checkbox2"></label>
                                                    </div>
                                                </td>
                                                <td>#JH2033</td>
                                                <td>
                                                    <span class="img-thumb ">
                                                        <!-- <img src="assets/images/table/1.jpg" alt=" "> -->
                                              <img src="{{ asset('admin_assets') }}/images/table/1.jpg" alt="">

                                                        <span class="ml-2 ">Emily Arnold</span>
                                                    </span>
                                                </td>
                                                <td>22/06/2022</td>
                                                <td>$600</td>
                                                <td>
                                                    <label class="mb-0 badge badge-primary" title="" data-original-title="Pending">Pending</label>
                                                </td>
                                                <td>
                                                    <span class="img-thumb">
                                                        <i class="fab fa-cc-paypal"></i>
                                                        <span class="ml-2">Paypal</span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <label class="mb-0 badge badge-primary" title="" data-original-title="Pending">View Detail</label>
                                                </td>
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
                                                                <a href="javascript:void(0); "><i class="far fa-edit mr-2 "></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0); "><i class="far fa-trash-alt mr-2 "></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox3" type="checkbox">
                                                        <label for="checkbox3"></label>
                                                    </div>
                                                </td>
                                                <td>#MK4433</td>
                                                <td>
                                                    <span class="img-thumb ">
                                                        <!-- <img src="assets/images/table/4.jpg" alt=" "> -->
                                              <img src="{{ asset('admin_assets') }}/images/table/4.jpg" alt="">

                                                        <span class="ml-2 ">Mark Doe</span>
                                                    </span>
                                                </td>
                                                <td>14/07/2022</td>
                                                <td>$700</td>
                                                <td>
                                                    <label class="mb-0 badge badge-success" title="" data-original-title="Pending">Success</label>
                                                </td>
                                                <td>
                                                    <span class="img-thumb">
                                                        <i class="fab fa-cc-visa"></i>
                                                        <span class="ml-2">Visa</span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <label class="mb-0 badge badge-primary" title="" data-original-title="Pending">View Detail</label>
                                                </td>
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
                                                    <div class="action-option">
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0);"><i class="far fa-edit mr-2 "></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"><i class="far fa-trash-alt mr-2 "></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox4" type="checkbox">
                                                        <label for="checkbox4"></label>
                                                    </div>
                                                </td>
                                                <td>#MD4578</td>
                                                <td>
                                                    <span class="img-thumb">
                                                        <!-- <img src="assets/images/table/7.jpg" alt=" "> -->
                                              <img src="{{ asset('admin_assets') }}/images/table/7.jpg" alt="">

                                                        <span class="ml-2 ">Mark Smith</span>
                                                    </span>
                                                </td>
                                                <td>28/08/2022</td>
                                                <td>$800</td>
                                                <td>
                                                    <label class="mb-0 badge badge-danger" title="" data-original-title="Pending">Cancel</label>
                                                </td>
                                                <td>
                                                    <span class="img-thumb">
                                                        <i class="fas fa-credit-card"></i>
                                                        <span class="ml-2">Credit Card</span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <label class="mb-0 badge badge-primary" title="" data-original-title="Pending">View Detail</label>
                                                </td>
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
                                                                <a href="javascript:void(0); "><i class="far fa-edit mr-2 "></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0); "><i class="far fa-trash-alt mr-2 "></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox5" type="checkbox">
                                                        <label for="checkbox5"></label>
                                                    </div>
                                                </td>
                                                <td>#DD1048</td>
                                                <td>
                                                    <span class="img-thumb ">
                                                        <!-- <img src="assets/images/table/1.jpg" alt=" "> -->
                                              <img src="{{ asset('admin_assets') }}/images/table/1.jpg" alt="">

                                                        <span class="ml-2 ">Mike Wood</span>
                                                    </span>
                                                </td>  
                                                <td>13/04/2022</td>
                                                <td>$880</td>
                                                <td>
                                                    <label class="mb-0 badge badge-primary" title="" data-original-title="Pending">Pending</label>
                                                </td>
                                                <td>
                                                    <span class="img-thumb">
                                                        <i class="fab fa-cc-mastercard"></i>
                                                        <span class="ml-2">Mastercard</span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <label class="mb-0 badge badge-primary" title="" data-original-title="Pending">View Detail</label>
                                                </td>
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
                                                                <a href="javascript:void(0); "><i class="far fa-edit mr-2 "></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0); "><i class="far fa-trash-alt mr-2 "></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox6" type="checkbox">
                                                        <label for="checkbox6"></label>
                                                    </div>
                                                </td>
                                                <td>#JH2033</td>
                                                <td>
                                                    <span class="img-thumb ">
                                                        <!-- <img src="assets/images/table/3.jpg" alt=" "> -->
                                                    <img src="{{ asset('admin_assets') }}/images/table/3.jpg" alt="">

                                                        <span class="ml-2 ">Emily Arnold</span>
                                                    </span>
                                                </td>
                                                <td>22/06/2022</td>
                                                <td>$600</td>
                                                <td>
                                                    <label class="mb-0 badge badge-success" title="" data-original-title="Pending">Success</label>
                                                </td>
                                                <td>
                                                    <span class="img-thumb">
                                                        <i class="fab fa-cc-paypal"></i>
                                                        <span class="ml-2">Paypal</span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <label class="mb-0 badge badge-primary" title="" data-original-title="Pending">View Detail</label>
                                                </td>
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
                                                                <a href="javascript:void(0); "><i class="far fa-edit mr-2 "></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0); "><i class="far fa-trash-alt mr-2 "></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox7" type="checkbox">
                                                        <label for="checkbox7"></label>
                                                    </div>
                                                </td>
                                                <td>#MK4433</td>
                                                <td>
                                                    <span class="img-thumb ">
                                                        <!-- <img src="assets/images/table/1.jpg" alt=" "> -->
                                                    <img src="{{ asset('admin_assets') }}/images/table/1.jpg" alt="">

                                                        <span class="ml-2 ">John Doe</span>
                                                    </span>
                                                </td>
                                                <td>14/07/2022</td>
                                                <td>$700</td>
                                                <td>
                                                    <label class="mb-0 badge badge-danger" title="" data-original-title="Pending">Cancel</label>
                                                </td>
                                                <td>
                                                    <span class="img-thumb">
                                                        <i class="fab fa-cc-visa"></i>
                                                        <span class="ml-2">Visa</span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <label class="mb-0 badge badge-primary" title="" data-original-title="Pending">View Detail</label>
                                                </td>
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
                                                                <a href="javascript:void(0); "><i class="far fa-edit mr-2 "></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0); "><i class="far fa-trash-alt mr-2 "></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox8" type="checkbox">
                                                        <label for="checkbox8"></label>
                                                    </div>
                                                </td>
                                                <td>#MD4578</td>
                                                <td>
                                                    <span class="img-thumb ">
                                                        <!-- <img src="assets/images/table/7.jpg" alt=" "> -->
                                                    <img src="{{ asset('admin_assets') }}/images/table/7.jpg" alt="">

                                                        <span class="ml-2 ">Mark Smith</span>
                                                    </span>
                                                </td>
                                                <td>28/08/2022</td>
                                                <td>$800</td>
                                                <td>
                                                    <label class="mb-0 badge badge-success" title="" data-original-title="Pending">Success</label>
                                                </td>
                                                <td>
                                                    <span class="img-thumb">
                                                        <i class="fas fa-credit-card"></i>
                                                        <span class="ml-2">Credit Card</span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <label class="mb-0 badge badge-primary" title="" data-original-title="Pending">View Detail</label>
                                                </td>
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
                                                                <a href="javascript:void(0); "><i class="far fa-edit mr-2 "></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0); "><i class="far fa-trash-alt mr-2 "></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox9" type="checkbox">
                                                        <label for="checkbox9"></label>
                                                    </div>
                                                </td>
                                                <td>#DD1048</td>
                                                <td>
                                                    <span class="img-thumb ">
                                                        <!-- <img src="assets/images/table/4.jpg" alt=" "> -->
                                                    <img src="{{ asset('admin_assets') }}/images/table/4.jpg" alt="">

                                                        <span class="ml-2 ">Mike Wood</span>
                                                    </span>
                                                </td>
                                                <td>13/04/2022</td>
                                                <td>$880</td>
                                                <td>
                                                    <label class="mb-0 badge badge-primary" title="" data-original-title="Pending">Pending</label>
                                                </td>
                                                <td>
                                                    <span class="img-thumb">
                                                        <i class="fab fa-cc-mastercard"></i>
                                                        <span class="ml-2">Mastercard</span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <label class="mb-0 badge badge-primary" title="" data-original-title="Pending">View Detail</label>
                                                </td>
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
                                                                <a href="javascript:void(0); "><i class="far fa-edit mr-2 "></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0); "><i class="far fa-trash-alt mr-2 "></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
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
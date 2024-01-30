<div class="main-container">

    <div class="pd-ltr-10">
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <img src="artisan/vendors/images/t1.png" alt="" />
                </div>
                <div class="col-md-4">
                    <h4 class="font-20 weight-500 mb-10 text-capitalize">
                        Welcome back
                        <div class="weight-600 font-30" style="color: rgb(250, 206, 84);">{{ Auth::user()->name }}!</div>

                    </h4>
                    <p class="font-18 max-width-600">

                    </p>
                </div>
            </div>
        </div>





                <div class="card-box pb-10">
                    <div class="h5 pd-20 mb-0">Recent Customers</div>
                    <table class="data-table table nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus">Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Payment status</th>
                                <th>Delivery status</th>

                               
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($orders as $data)
                            <tr>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">
                                        <div class="avatar mr-2 flex-shrink-0">
                                            <img
                                                src="{{ asset($data->image) }}"
                                                class="border-radius-100 shadow"
                                                width="40"
                                                height="40"
                                                alt=""
                                            />
                                        </div>
                                        <div class="txt">
                                            <div class="weight-600">{{ $data->name }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->address }}</td>
                                <td>{{ $data->quantity }}</td>
                                <td>{{ $data->price }} D.A</td>
                                <td>{{ $data->payment_status }}</td>
                                <td>

                                    @if($data->delivery_status=="processing")
                                    <a class="btn btn-primary" href="{{ url('list_deliveryman') . '/' . $data->id }}" >list deliverymans</a></td>
                                      @else
                                        <a>Delivered</a>
                                      @endif
                                </td>

                            </tr>
                            @empty
                            <tr>
                              <td colspan="16">Data Not Found</td>
                            </tr>
                          @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="title pb-20 pt-20">
                    <h2 class="h3 mb-0">Quick Start</h2>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-20">
                        <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                            <div class="img pb-30">
                                <img src="artisan/vendors/images/y1.png" alt="" />
                            </div>
                            <div class="content">
                                <h3 class="h4">Services</h3>
                                <p class="max-width-200">
                                    We provide superior health care in a compassionate maner
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-20">
                        <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                            <div class="img pb-30">
                                <img src="artisan/vendors/images/hj.png" alt="" />
                            </div>
                            <div class="content">
                                <h3 class="h4">Medications</h3>
                                <p class="max-width-200">
                                    Look for prescription and over-the-counter drug information.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-20">
                        <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                            <div class="img pb-30">
                                <img src="artisan/vendors/images/x1.png" alt="" />
                            </div>
                            <div class="content">
                                <h3 class="h4">Locations</h3>
                                <p class="max-width-200">
                                    Convenient locations when and where you need them.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>


			</div>
		</div>

        <script src="artisan/vendors/scripts/core.js"></script>
		<script src="artisan/vendors/scripts/script.min.js"></script>
		<script src="artisan/vendors/scripts/process.js"></script>
		<script src="artisan/vendors/scripts/layout-settings.js"></script>

		<!-- add sweet alert js & css in footer -->
		<script src="artisan/src/plugins/sweetalert2/sweetalert2.all.js"></script>
		<script src="artisan/src/plugins/sweetalert2/sweet-alert.init.js"></script>
    </div>
</div>

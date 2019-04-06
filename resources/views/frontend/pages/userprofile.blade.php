@extends('frontend.layouts.layout')
@section('post1234')

                
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                                <img src="/thumbnail/{{ $data->filename }}" alt="" />
                            </div>
                            <div class="profile-details-hr">
                               
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            <p><b>Name</b><br /> {{ $data->name }} </p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            <p><b>Email</b><br /> {{ $data->email }} </p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                               
                                <li><a href="#INFORMATION">Update Details</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">

                                    </div>
                                </div>



                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            


 											<form enctype="multipart/form-data" id="signup-form" class="signup-form" method="post" action="{{ URL::to('userupdate',['id'=>$data->id]) }}">
                							{{csrf_field()}} 


                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" value="{{$data->name}}"class="form-control" name="name" id="name">
                                                        </div>
                                                        
                                                       
                                                       
                                                       
                                                       
                                                         <div class="form-group col-lg-12">
                                                            <label>Choose image</label>
                                                           
                                                                <input type="file" id="file" name="filename" class="form-control" onchange="loadFile(event)">
                                                                 <img id="output" width="110px"/>
                                                                 <script>
                                                                  var loadFile = function(event) {
                                                                    var output = document.getElementById('output');
                                                                    output.src = URL.createObjectURL(event.target.files[0]);
                                                                  };
                                                                </script>
                                                           
                                                           
                                                        
                                                        </div>


                                                    </div>
                                                   
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress mg-t-15">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


</form>










                                        </div>
                                    </div>







                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>

@endsection
         
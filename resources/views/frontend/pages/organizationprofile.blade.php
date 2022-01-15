
@extends('frontend.layouts.layout')
@section('post1234')



 <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <h3 style="position: relative;left: 5px">{{ $data->name }}</h3>
                                    <p style="position: relative;left: 15px">{{ $data->category }}</br> <i class="fas fa-map-marker-alt"></i> {{ $data->address }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                                <img src="/thumbnail/{{ $data->filename }}" alt="" />
                            </div>
                             
                            <div class="profile-details-hr">

                            	<div class="row" >
                                    <div class="col-lg-12">
                                        <div class="row">
                                     <div class="card-body">
                                        <div class="chart-area">
                   

<hr style="border:3px solid #f1f1f1">
<h3>About</h3>
<hr class="sidebar-divider">
                                        <div class="abc" style="text-align: center;">
                                             @if($data->rating==5)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                             <span class="fa fa-star checked"></span>
                                             @else
                                            @endif

                                             @if($data->rating<5 && $data->rating>=4)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                             <span class="fa fa-star "></span>
                                             @else
                                            @endif

                                             @if($data->rating<4 && $data->rating>=3)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star "></span>
                                             <span class="fa fa-star "></span>
                                             @else
                                            @endif

                                            @if($data->rating<3 && $data->rating>=2)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star "></span>
                                            <span class="fa fa-star "></span>
                                             <span class="fa fa-star "></span>
                                             @else
                                            @endif

                                             @if($data->rating<2 && $data->rating>=1)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star "></span>
                                            <span class="fa fa-star "></span>
                                            <span class="fa fa-star "></span>
                                             <span class="fa fa-star "></span>
                                             @else
                                            @endif

                                            @if($data->rating<1 && $data->rating>=0)
                                             <span class="fa fa-star "></span>
                                            <span class="fa fa-star "></span>
                                            <span class="fa fa-star "></span>
                                            <span class="fa fa-star "></span>
                                             <span class="fa fa-star "></span>
                                             @else
                                            @endif

                                            <p>{{$data->rating}} average based on {{$data2->abc}} reviews.</p>
                                            <hr class="sidebar-divider">

                                            
                                            </div>

    



                                              </div>
                                            </div>
                                     </div>


                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            <p>{{ $data->description }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            <p><b>Email</b><br />{{ $data->email }}</p>
                                        </div>
                                    </div>
                                </div>

                               
                              

                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Reviews</a></li>

                                @if(Session::get('userrole')==2)
                               <li><a href="#INFORMATION">Update Details</a></li>
                                @endif
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">

                                     @if(Session::get('userrole')==1)
                                    <div class="row">
                                        <div class="card-body">

                  <div class="chart-pie pt-4 pb-2">
                    <div>

                        <span  onmouseover="starmark(this)" onclick="starmark(this)" id="1one" style="font-size:30px;cursor:pointer;"  class="fa fa-star checked"></span>
                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="2one"  style="font-size:30px;cursor:pointer;" class="fa fa-star "></span>
                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="3one"  style="font-size:30px;cursor:pointer;" class="fa fa-star "></span>
                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="4one"  style="font-size:30px;cursor:pointer;" class="fa fa-star"></span>
                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="5one"  style="font-size:30px;cursor:pointer;" class="fa fa-star"></span>
                        <br/>
                        <form id="str" method="post" action="{{ route('storereview',['oid'=>$data->id]) }}">
                        {{csrf_field()}}
                        <input type="hidden" name="hdstar" id="hdstar" />
                        <textarea  style="margin-top:5px;" class="form-control" rows="3" id="comment" name="comment" placeholder="Enter your review"></textarea>

                        <button  onclick="result()" type="submit" style="margin-top:10px;margin-left:5px;" class="btn btn-lg btn-success">Submit</button>

                        </form>
                        
                        <script>
                        var count;
                        function starmark(item)
                        {
                        count=item.id[0];
                        sessionStorage.starRating = count;
                        var subid= item.id.substring(1);
                        for(var i=0;i<5;i++)
                        {
                        if(i<count)
                        {
                        document.getElementById((i+1)+subid).style.color="orange";
                        }
                        else
                        {
                        document.getElementById((i+1)+subid).style.color="black";
                        }
                        }
                        }
                        function result()
                        {
                        //Rating : Count
                        //Review : Comment(id)
                        
                        document.getElementById("hdstar").value = count;
                        //alert("Rating : "+count+"\nReview : "+document.getElementById("comment").value+" "+document.getElementById("hdstar").value);
                        }
                        
                        </script>
                    </div>

                  </div>
                  
                </div>
                                    </div>


                                     <hr style="border:3px solid #f1f1f1">
                                     @endif

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="chat-discussion" style="height: auto">
                                                    
                                                    


                                                   
                                                    <div style="height: 500px;overflow: scroll;background-color: white">

                                                         @if(count($data2)>0)
                                                            @foreach($data2 as $d)

                                                                <div class="chat-message">
                                                                <div class="profile-hdtc">


                                                                     <img class="message-avatar" src="/thumbnail/{{ $d->ufilename }}" alt="">
                                                                </div>
                                                                <div class="message">
                                                                    <a class="message-author" href="{{ route('userprofile',['id'=>$d->uid]) }}"> {{ $d->uname}} </a>
                                                                    @if($d->star==5)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                             <span class="fa fa-star checked"></span>
                                             @else
                                            @endif

                                             @if($d->star<5 && $d->star>=4)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                             <span class="fa fa-star "></span>
                                             @else
                                            @endif

                                             @if($d->star<4 && $d->star>=3)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star "></span>
                                             <span class="fa fa-star "></span>
                                             @else
                                            @endif

                                            @if($d->star<3 && $d->star>=2)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star "></span>
                                            <span class="fa fa-star "></span>
                                             <span class="fa fa-star "></span>
                                             @else
                                            @endif

                                             @if($d->star<2 && $d->star>=1)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star "></span>
                                            <span class="fa fa-star "></span>
                                            <span class="fa fa-star "></span>
                                             <span class="fa fa-star "></span>
                                             @else
                                            @endif

                                            @if($d->star<1 && $d->star>=0)
                                             <span class="fa fa-star "></span>
                                            <span class="fa fa-star "></span>
                                            <span class="fa fa-star "></span>
                                            <span class="fa fa-star "></span>
                                             <span class="fa fa-star "></span>
                                             @else
                                            @endif
                                                                    <span class="message-date">  {{ $d->updated_at }} </span>
                                                                    <span class="message-content">
                                                                            {{$d->review}}
                                                                            </span>
                                                                </div>
                                                                </div>
                                                            @endforeach
                                                             <div style="margin: 0 auto;text-align: left;width: 500px;">
                          {!! $data2->links()!!}
                        </div>
        @else
        @endif
                      
                                                    </div>


                                                   
                                                   
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Organization Name</b><br />{{ $data->name }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b></b><br /> </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Email</b><br />{{ $data->email }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Location</b><br /> {{ $data->address }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="content-profile">
                                                            <p>{{ $data->description }}</p>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mg-b-15">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="skill-title">
                                                                    <h2>Skill Set</h2>
                                                                    <hr />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-skill">
                                                            <h2>Java</h2>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 90%;" class="progress-bar progress-yellow"></div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-skill">
                                                            <h2>Php</h2>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 80%;" class="progress-bar progress-green"></div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-skill">
                                                            <h2>Apps</h2>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 70%;" class="progress-bar progress-blue"></div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-skill">
                                                            <h2>C#</h2>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 60%;" class="progress-bar progress-red"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mg-b-15">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="skill-title">
                                                                    <h2>Education</h2>
                                                                    <hr />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="row mg-b-15">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="skill-title">
                                                                    <h2>Experience</h2>
                                                                    <hr />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="skill-title">
                                                                    <h2>Subjects</h2>
                                                                    <hr />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                       


<form enctype="multipart/form-data" id="signup-form" class="signup-form" method="post" action="{{ URL::to('organizationupdate',['id'=>$data->id]) }}">
     {{csrf_field()}} 



                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
             <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Organization Name</label>
                                                            <input type="text" value="{{$data->name}}"class="form-control" name="name" id="name">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input type="text" value="{{$data->address}}"class="form-control" name="address" id="address">
                                                        </div>
                                                        <div class="form-group">
                                                             <label>Description</label>
                                                            <textarea type="text"  name="description" class="input--style-5" id="" cols="55" rows="5">{{ $data->description }}</textarea>
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
                                        </div>
</form>                                        












                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






@endsection
@extends('backend.layouts.layout')
@section('post12')

<div class="list-group">

 <!-- <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div align="right">
                      <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search..." title="Type in a name" align="right" style="border-color:#4e73df!important;width: 20%;">

                      
                    </div>
                </div>
            </div>-->

            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func" >
                                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..." class="search-int form-control" align="right" style="background-color: white;">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
              
            </div>

<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div align="right">
                      <p></p>
                    </div>
                </div>
            </div>            

   <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div style="height: 500px;overflow: scroll;background-color: white">
                        <ul id="myUL" >
                          @if(count($data)>0)
                            @foreach($data as $d)
            
                              <li><a href="" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#exampleModalLong"><h4>{{ $d->name}}</h4>({{$d->category}})&nbsp;&nbsp;{{ $d->description }}</a></li>
                            @endforeach
                          @else
                          @endif
                        </ul>
                        <div style="margin: 0 auto;text-align: left;width: 500px;">
                          {!! $data->links()!!}
                        </div>
                      </div>
                    </div>
                  </div>
     
</div>






<!-- Button trigger modal -->

<!-- Modal -->

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                                @if(count($data)>0)

      <div class="modal-body">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="profile-info-inner" >
                            <div class="profile-img" style="position: relative;left: 75px;">
                                <img src="thumbnail/{{ $d->filename }}" alt="" />

                            </div>
                            <div class="profile-details-hr" style="position: relative;left: 75px;">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Name</b><br /> {{ $d->name}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Category</b><br /> {{ $d->category}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            <p><b>Email</b><br /> {{ $d->email }} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            <p><b>Address</b><br /> {{ $d->address }} </p>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            <p><b>Description</b><br /> {{$d->description}} </p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="{{ URL::to('accept',['id'=>$d->id]) }}"><button type="button" class="btn btn-primary">Accept</button></a>
                                            <a href="{{ URL::to('reject',['id'=>$d->id]) }}"><button type="button" class="btn btn-danger">Reject</button></a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                       
                    </div>
      </div>
      @else
                          @endif
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

@endsection
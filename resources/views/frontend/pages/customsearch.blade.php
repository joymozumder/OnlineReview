@extends('frontend.pages.dashboard')

@section('search1234')

<div class="list-group">

 
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
              
                                      <li><a href="{{ route('organizationprofile',['id'=>$d->id]) }}" class="list-group-item list-group-item-action"><h4>{{ $d->name}}</h4>({{$d->category}}).{{ $d->description }}</a></li>
                                    @endforeach
                                      @else
                                      <h2>not found</h2>
                                     @endif
                        </ul>
                        <div style="margin: 0 auto;text-align: left;width: 500px;">
                          {!! $data->links()!!}
                        </div>
                      </div>
                    </div>
                  </div>
     
</div>



@endsection
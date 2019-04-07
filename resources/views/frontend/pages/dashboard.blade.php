@extends('frontend.layouts.layout')
@section('post1234')
<form id="Login" method="post" action="{{ URL::to('customsearch' )}}">
            {{csrf_field()}}

                <div class="row" style="background-color:#006df0;height: 150px; ">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="position: relative;top:50px;left: 70px;">
                             <input class="form-control text-slt" type="text" name="area" placeholder="Area">

                            
                           </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"style="position: relative;top:50px;left: 70px;">
                        <select class="form-control search-slt" id="exampleFormControlSelect1" name="category" placeholder=" <option>What are you looking for?</option>">
                                 <option> </option>
                                <option>Hospital</option>
                                <option>Restaurant</option>
                                <option>Hotel</option>
                                <option>Community Center</option>
                                <option>Isp</option>
                               
                            </select>

                            
                           </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"style="position: relative;top:50px;left: 70px;">
                            
                                <button type="submit" class="btn btn-custon-two btn-success">Search</button>
                            
                           </div>
                    
                </div>
                 </form>
                 @yield('search1234')
@endsection
         
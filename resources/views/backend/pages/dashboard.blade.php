@extends('frontend.layouts.layout')
@section('post1234')

                <div class="row" style="background-color: #237847;height: 150px; ">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="position: relative;top:50px;left: 70px;">
                             <input class="form-control text-slt" type="text" name="area" placeholder="Area">

                            
                           </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"style="position: relative;top:50px;left: 70px;">
                        <select class="form-control search-slt" id="exampleFormControlSelect1" name="category">
                                <option>Category</option>
                                <option>Hospital</option>
                                <option>Restaurant</option>
                                <option>Hotel</option>
                                <option>Community Center</option>
                                <option>Isp</option>
                               
                            </select>

                            
                           </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"style="position: relative;top:50px;left: 70px;">
                            
                                <button type="button" onclick="location.href='#'" class="btn btn-custon-two btn-success">Search</button>
                            
                           </div>
                    
                </div>
@endsection
         
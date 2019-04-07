<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="{{asset('frontend/img/logo/logo.png')}}" alt="" /></a>
                <strong><a href="index.html"><img src="{{asset('frontend/img/logo/logosn.png')}}" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <hr class="sidebar-divider">

                        
                        <li>
                            <a title="Landing Page" href="{{ URL::to('dashboard' )}}" aria-expanded="false"><i class="fas fa-tachometer-alt" ></i> <span class="mini-click-non">Dashboard</span></a>
                        </li>
                         <hr class="sidebar-divider">

                        <li>
                            <a href=" {{ route('list',['category'=>'Hospital']) }} " aria-expanded="false"><i class="fas fa-hospital"></i> <span class="mini-click-non">Hospital</span></a>
                            
                        </li>

                         <li>
                            <a href=" {{ route('list',['category'=>'Restaurant']) }} " aria-expanded="false"><i class="fas fa-utensils"></i> <span class="mini-click-non">Restaurant</span></a>
                            
                        </li>

                         <li>
                            <a href=" {{ route('list',['category'=>'Hotel']) }} " aria-expanded="false"><i class="fas fa-hotel"></i> <span class="mini-click-non">Hotel</span></a>
                            
                        </li>

                         <li>
                            <a href=" {{ route('list',['category'=>'CommunityCenter']) }} " aria-expanded="false"><i class="far fa-building"></i> <span class="mini-click-non">Community Center</span></a>
                            
                        </li>

                         <li>
                            <a href=" {{ route('list',['category'=>'Isp']) }} " aria-expanded="false"><i class="fas fa-wifi"></i> <span class="mini-click-non">ISP</span></a>
                            
                        </li>

                        
                        
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>

    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="{{asset('frontend/img/logo/logo.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
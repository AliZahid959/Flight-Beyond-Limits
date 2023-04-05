@php
$services = App\Models\Service::take(6)->get();
$software = App\Models\Software::take(3)->get();
$product_categories = App\Models\ProductCategory::all();
@endphp
<header id="header" class="header-transparent header-transparent-dark-bottom-border header-transparent-dark-bottom-border-1 header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
   <div class="header-body border-top-0 bg-dark box-shadow-none pb-4 pt-2 ">
      <div class="header-container">
         <div class="header-row">
            <div class="header-column d-lg-none">
               <div class="header-row">
                  <a href="{{ url('/') }}" style="position: relative;
                     background: transparent !important;">
                  <img alt="" src="{{$setting->site_logo}}"
                     style="height: 70px; width:195px;">
                  </a>
               </div>
            </div>
            <div class="header-column">
               <div class="header-row justify-content-end">
                  <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text justify-content-center">
                     <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                        <nav class="collapse">
                           <ul class="nav nav-pills py-2" id="mainNav">
                              <li class="mr-5">
                                 <a href="{{ url('/') }}" style="
                                    background: transparent !important; margin-top:0px !important;" class="d-lg-block d-none mt-0">
                                 <img alt="" src="{{$setting->site_logo}}"
                                    style="height: 70px; width:195px;">
                                 </a>
                              </li>
                              <li class="ml-lg-5 ml-0" style="">
                                 <a style="margin-left: 0px !important;" class="nav-link" href="{{ url('/') }}">
                                 Home
                                 </a>
                              </li>
                              <li>
                                <a style="margin-left:0px !important;" class="nav-link" href="{{ route('front.page.about') }}">
                                About Us
                                </a>
                             </li>
                              <li class="dropdown dropdown-full-color dropdown-primary dropdown-mega">
                                 <a style="margin-left:0px !important;" class="dropdown-item dropdown-toggle current-page-active"
                                    href="{{ route('front.page.services') }}">
                                 Services
                                 <i class="fas fa-chevron-down"></i></a>
                                 <ul class="dropdown-menu mt-5" style="margin-left: 0px;">
                                    <li>
                                       <div class="dropdown-mega-content pt-3 p-0 px-3">
                                          <div class="row">
                                             @foreach ($services as $item)
                                             <div class="col-lg-4 col-12 p-lg-3 p-0">
                                                <a href="{{ route('front.page.service.show' , $item) }}" class="p-0">
                                                   <div class="feature-box feature-box-style-2">
                                                      <img src="{{$item->dropdown_service_image}}"
                                                         height="100px" width="150px"
                                                         class="">
                                                      <div class="feature-box-info">
                                                         <h4
                                                            class="font-weight-bold text-4 mb-0 mt-3">
                                                            {{$item->service_name}}
                                                         </h4>
                                                         <p class="mb-0 text-3"> {{ Str::limit($item->description, 20) }}
                                                         </p>
                                                <a href="{{  route('front.page.service.show' , $item)  }}"
                                                   class="btn btn-outline pl-0">View
                                                More</a>
                                                </div>
                                                </div>
                                                </a>
                                             </div>
                                             @endforeach
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </li>



                              <li class="dropdown ">
                                <a class="dropdown-item dropdown-toggle" href="#">
                                    Solutions
                                </a>
                                <ul class="dropdown-menu bg-light">
                                    <li class="py-2 border-0">
                                        <a class="dropdown-item font-bold text-dark" href="{{route('front.page.softwares')}}">
                                            Softwares
                                        </a>
                                     </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item font-bold text-dark" href="{{route('front.page.products')}}">Products<i class="fas fa-chevron-down"></i></a>
                                        <ul class="dropdown-menu bg-light">

                                            @foreach ($product_categories as $item)

                                                <li><a class="dropdown-item font-bold text-dark" href="{{route('front.page.category.show' , $item)}}">{{$item->category_name}}</a></li>

                                            @endforeach


                                        </ul>
                                    </li>

                                </ul>
                            </li>


                              {{-- <li class="dropdown dropdown-full-color dropdown-primary">
                                 <a style="margin-left: 0px !important;" class="dropdown-item dropdown-toggle" href="">
                                 Solutions
                                 </a>
                                 <ul class="dropdown-menu">

                                    <li class="py-2">
                                       <div class="col-12">
                                          <a class="w-100 py-5" href="{{route('front.page.softwares')}}">
                                            Softwares
                                          </a>
                                       </div>
                                    </li>

                                    <li class="py-2">
                                        <div class="col-12">
                                           <a class="w-100 py-5" href="{{route('front.page.products')}}">
                                             Products
                                           </a>
                                           <ul class="dropdown-menu">
                                                <li>
                                                    <a class="" href="">Dji Payloads</a>
                                                </li>
                                           </ul>
                                        </div>
                                     </li>

                                 </ul>
                              </li> --}}
                              <li>
                                 <a style="margin-left: 0px !important;" style="margin-left:0px;" class="nav-link" href="{{ route('front.page.blogs') }}">
                                 Blogs
                                 </a>
                              </li>

                              <li>
                                 <a style="margin-left:0px !important;" class="nav-link" href="{{ route('front.page.contact') }}">
                                 Contact Us
                                 </a>
                              </li>
                              <li>
                                 <a style="margin-left:0px !important; border:1px solid #41bcab; border-radius:20px;" class="nav-link"
                                    href="{{url('/academy')}}">
                                 Academy
                                 </a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                     <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                     <i class="fas fa-bars"></i>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>

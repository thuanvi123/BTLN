<div class="sticky-header header-section ">
    <div class="header-left">
        <!--toggle button start-->
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->
        <!--notification menu end -->
        <div class="clearfix"> </div>
    </div>
    <div class="header-right">




        <div class="profile_details">
            <ul>
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">
                            <span class="prfil-img"><img src="{{ asset('admin_assets/images') }}/2.jpg" alt=""> </span>
                            <div class="user-name">
                                <?php if (is_object( Auth::user() )) : ?>
                                    <p>{{ Auth::user()->name }}</p>
                                    <span>Tài khoản </span>
                                <?php endif; ?>

                            </div>
                            <i class="fa fa-angle-down lnr"></i>
                            <i class="fa fa-angle-up lnr"></i>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <ul class="dropdown-menu drp-mnu">
                        <li> <a href="{{ route('admin.auth.logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> Logout</a>

                            <form id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>
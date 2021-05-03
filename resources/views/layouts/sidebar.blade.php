<style type="text/css">
.modal-footer {
    padding-bottom: 0px !important;
    margin-bottom: 0px !important;
}
</style>
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div data-toggle="tooltip" data-placement="top" title="Edit Image">
                    <img id="userImage" src="{{asset('plugins/images/dinetime/logo.png')}}" alt="user-img" class="img-circle" data-toggle="modal" data-target="#imageModel" data-ui-toggle-class="fade-right">
                </div>
                <a id="sessionName" style="text-transform: uppercase;" href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Session::get('name')}}<span class="caret"></span></a>
                <ul class="dropdown-menu animated flipInY">
                <li><a href="{{ route('profile',['email'=>Session::get('user_id')]) }}"><i class="ti-user"></i> My Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <ul class="nav" id="side-menu">
            <li class="nav-small-cap m-t-10">--- Main Menu</li>
            <li>
                <a href="{{route('dashboard')}}" class="waves-effect {!! (Request::is('/') ? 'active' : '') !!}">
                    <i class="ti-home fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Dashboard  </span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="waves-effect {!! (Request::is('venue/*') ? 'active' : '') !!}">
                    <i class="ti-map-alt fa-fw" data-icon="v"></i>
                        <span class="hide-menu"> Venues <span class="fa arrow"></span></span>
                    </a>
                    <ul class="nav nav-second-level collapse">
                        <li> <a href="{{route('pendingvenues')}}">Pending</a></li>
                        <li> <a href="{{route('publishedvenues')}}">Published</a></li>
                        <li> <a href="{{route('rejectedvenues')}}">Rejected</a></li>
                    </ul>
                </li>
            <li>
                <a id="invoices" href="{{route('deal')}}" class="waves-effect {!! (Request::is('deal/*')? 'active' : '') !!}">
                    <i class="ti-notepad fa-fw" data-icon="l"></i>
                    <span class="hide-menu">Deal</span>
                </a>
            </li>
            <li>
                <a id="invoices" href="{{route('reservation')}}" class="waves-effect {!! (Request::is('reservation/*')? 'active' : '') !!}">
                    <i class="ti-crown fa-fw" data-icon="l"></i>
                    <span class="hide-menu">Reservation</span>
                </a>
            </li>
            @if(Session::get('login_type_id') == 1)
            <li>
                <a id="subscribers" href="{{route('user')}}" class="waves-effect {!! (Request::is('user/*') ? 'active' : '') !!}">
                    <i class="icon-people fa-fw" data-icon="l"></i>
                    <span class="hide-menu"> Users </span>
                </a>
            </li>
            @endif
        </ul>
    </div>
</div>
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
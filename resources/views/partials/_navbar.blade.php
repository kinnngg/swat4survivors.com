<style>
    .navbar
    {
        background: url("/images/head_back.png") no-repeat top right;
        border-bottom-right-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
        margin-top: -20px;
        margin-left: -15px;
        margin-right: -15px;
    }
    .navbar-main
    {
        background: linear-gradient(0deg, rgba(0,0,0,1) 5%, rgba(255,105,180,1) 34%, rgba(0,0,0,1) 92%);
        margin-top: -20px !important;
        margin-left: -15px !important;
        margin-right: -15px !important;
        border-bottom-right-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
    }
    .navbar a
    {
        color: #fff;
    }
    #swatofficer
    {
        position: absolute;
        background: url("/images/swat_officer.png");
        width: 86px;
        height: 62px;
        left: 5px;
        top: -2px;
        z-index: 9999999999;
    }
    .navbar-brand
    {
        margin-top: -18px;
        margin-left: 20px !important;
        z-index: 100;
    }
</style>

<nav class="navbar navbar-default">
    
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div id="swatofficer"></div>
           <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ url('images/logo_back2.png') }}" alt="" style="height: 52px;"></a>
        </div>

        <div id="navbar" class="collapse navbar-collapse" style="font-weight: bold;">
            <ul class="nav navbar-nav" style="font-family: Marcellus SC;">
                <li class="{{ set_active(['statistics*']) }}">{!! link_to_route('statistics-home','Statistics') !!}</li>
                <li><a target="_blank" href="http://knightofsorrow.forumclan.com">Forum</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        More <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="{{ set_active(['rules']) }}"><a href="{{ route('rules') }}">Rules</a></li>
                        <!--<li class="{{ set_active(['tournament*']) }}"><a href="{{ route('tournament.index') }}">Tournaments</a></li>-->
                        <li class="{{ set_active(['banlist*']) }}"><a href="{{ route('bans.index') }}">Banlist</a></li>
                        <li class="{{ set_active(['news*']) }}"><a href="{{ route('news.index') }}">News</a></li>
                        <li class="{{ set_active(['serverchat-history*']) }}"><a href="{{ route('chat.index') }}">Chat History</a></li>
                        <li class="{{ set_active(['polls*']) }}"><a href="{{ route('poll.index') }}">Polls</a></li>
                        <!--<li class="{{ set_active(['us-members*']) }}"><a href="{{ route('us.members') }}">uS| Members</a></li>-->
                        <li class="{{ set_active(['admins-list*']) }}"><a href="{{ route('admin.list') }}">S4S Adminlist</a></li>
                        <li class="{{ set_active(['downloads*']) }}"><a href="{{ route('download') }}">Downloads</a></li>
                        <li class=""><a href="https://swat4stats.com/servers/" target="_blank">Servers</a></li>
                        <li class="{{ set_active(['global-notifications*']) }}"><a href="{{ route('notifications.index') }}">G Notifications</a></li>
                        <li class="{{ set_active(['deleted-players*']) }}"><a href="{{ route('deleted-players') }}">Deleted Players</a></li>
                        <li class="{{ set_active(['extrapoints*']) }}"><a href="{{ route('extrapoints') }}">Awarded Points</a></li>
                        <!--@if(Auth::check() && Auth::user()->isSubAdmin())
                        <li class="{{ set_active(['rules-of-usteam*']) }}"><a href="{{ route('us.rules') }}">uS| Team Rules</a></li>
                        @endif-->
                    </ul>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right" style="font-family: Marcellus SC;">
                @if(Auth::guest())
                    <li class="{{ set_active(['auth/login']) }}"><a class="login"
                                                                    href="{{ url('/auth/login') }}">Login</a></li>
                    <li class="{{ set_active(['auth/register']) }}"><a href="{{ url('/auth/register') }}">Register</a>
                    </li>
                @else
                    <li class="dropdown dropdown-notifications">
                        <a title="Your Notifications" href="#notifications-panel" class="dropdown-toggle notification-openbtn" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i data-count="{{ Auth::user()->notifications()->unread()->count() }}" class="fa fa-bell notification-icon"></i>
                        </a>

                        <div class="dropdown-container dropdown-menu dropdown-menu-right" role="menu">

                            <div class="dropdown-toolbar">
                                <div class="dropdown-toolbar-actions">
                                </div>
                                <h3 class="dropdown-toolbar-title text-bold">Notifications ({{ Auth::user()->notifications()->count() < 15 ? Auth::user()->notifications()->count() : "15" }}/{{ Auth::user()->notifications()->count() }})</h3>
                            </div><!-- /dropdown-toolbar -->

                            <ul class="dropdown-menu notification-dropmenu">
                                <p class="ajax-loader text-center"><img src="/images/loading.gif" alt=""></p>
                            </ul>

                            <div class="dropdown-footer text-center">
                                <a class="small text-bold" href="{{ route('notifications.userindex') }}">» View All</a>
                            </div><!-- /dropdown-footer -->
                        </div><!-- /dropdown-container -->
                    </li><!-- /dropdown -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img class="img" src="{{ Auth::user()->getGravatarLink(20) }}" width="15" height="15"/>
                            {{ Auth::user()->displayName() }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="{{ set_active(['feeds*']) }}"><a href="{{ route('feeds-home') }}">My Feedline</a></li>
                            <li class="{{ set_active(['profile']) }}"><a href="{{ url('/profile') }}">My Profile</a></li>
                            <li class="{{ set_active(['notifications*']) }}"><a href="{{ url('/notifications') }}">Notifications</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="{{ set_active(['messages*']) }}"><a href="{{ route('messages.index') }}">Messages</a></li>

                            @if(Auth::check() && Auth::user()->isSubAdmin())
                                <li role="separator" class="divider"></li>
                                <li class="{{ set_active(['viewserverkeys*']) }}"><a href="{{ route('user.viewkeys') }}">Server Passwords</a></li>
                                @if(Auth::user()->isAdmin())
                                    <li><a href="{{ route('user.searchip') }}">Search Player IP</a></li>
                                    <li><a href="{{ route('firewall.index') }}">Website Firewall</a></li>
                                    <li><a href="{{ route('bans.create') }}">Add Ban</a></li>
                                    <li><a href="{{ route('news.create') }}">Create News</a></li>

                                    <li><a href="{{ route('poll.create') }}">Create Poll</a></li>
                                    <li><a href="{{ route('addpoints.create') }}">Award Points</a></li>
                                    <li><a href="{{ route('trophy.create') }}">Create Trophy</a></li>
                                    <li><a href="{{ route('trophy.grant') }}">Distribute Trophy</a></li>
                                    <li class=""><a style="font-weight: bold;" class="confirm text-green" href="{{ route('restartserver') }}">Reboot Server</a></li>
                                @endif
                            @endif

                            <li role="separator" class="divider"></li>
                            <li class="{{ set_active(['profile/edit']) }}">{!! link_to_route('user.setting','Setting') !!}</li>
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
            <form class="navbar-form navbar-right" role="search" action='/search/'>
                <div class="form-group">
                    <input type="text" id="navsearch" name='q' class="form-control" placeholder="Search Users"
                           autocomplete="off">
                </div>
            </form>
        </div><!--/.nav-collapse -->
    </div>
</nav>

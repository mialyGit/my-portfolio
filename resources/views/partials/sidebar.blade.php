
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">@lang('Main Menu')</li>
            <li>
                <a href="{{ route('dashboard.index') }}" aria-expanded="false">
                    <i class="icon icon-chart-bar-33"></i>
                    <span class="nav-text">@lang('Dashboard')</span>
                </a>
            </li>     

            <li class="nav-label">@lang('Apps')</li>
            <li>
                <a href="{{ route('dashboard.profile') }}" aria-expanded="false">
                    <i class="icon icon-single-04"></i>
                    <span class="nav-text">@lang('Profile')</span>
                </a>
            </li>    
            
        </ul>
    </div>
</div>
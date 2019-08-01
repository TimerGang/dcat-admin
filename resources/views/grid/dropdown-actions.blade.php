<div class="grid-dropdown-actions dropdown">
    <a href="#" style="padding:0 10px;" class="dropdown-toggle " data-toggle="dropdown">
        <i class="fa fa-ellipsis-v"></i>
    </a>
    <ul class="dropdown-menu" style="min-width: 50px !important;box-shadow: 0 2px 3px 0 rgba(0,0,0,.2);border-radius:0;left: -65px;top: 5px;">

        @foreach($default as $action)
            <li>{!! \Dcat\Admin\Support\Helper::render($action) !!}</li>
        @endforeach

        @if(!empty($custom))
            <li class="divider"></li>
            @foreach($custom as $action)
                <li>{!! $action !!}</li>
            @endforeach
        @endif
    </ul>
</div>
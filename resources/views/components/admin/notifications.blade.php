<div class="dropdown dropdown-b" >
    <a href="" class="header-notification" data-toggle="dropdown">
        <i class="fa fa-bell"></i>
        @if(count($notifications) > 0)
        <span class="indicator"></span>
        @endif
    </a>
    <div class="dropdown-menu">
        <div class="dropdown-menu-header">
            <h6 class="dropdown-menu-title">Notifications</h6>
            <div>
                <a href="{{route( 'admin.notifications.markallread')}} ">Mark All as Read</a>
            </div>
        </div>
        <div class="dropdown-list notifications-list">
            @foreach ($notifications as $notification)
            <a href="{{ route('admin.notifications.markasread', [$notification->id, $notification->data['invoice_id']]) }}" class="dropdown-link read ">
                <div class="media">
                    <div class="media-body">
                        <p>({{$notification->data['invoice_id']}}) - {{$notification->data['title']}} (Af
                            {{$notification->data['amount'] }})</p>
                        <span>{{date('M jS, Y', strtotime($notification->created_at)) }}</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>

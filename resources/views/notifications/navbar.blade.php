<style>
    .color-gold
    {
        color: #ffd700 !important;
        text-shadow: 2px 2px 5px #DAA520;
    }
    .media-body .notification-title
    {
        background: #0c0c0c !important;
    }
</style>

@forelse($notifications as $notification)
    <li class="notification pad5 {{ $notification->getUnreadColorClass() }}">
        <div class="media">
            <div class="media-body notification-title">
                {!! $notification->body !!}

                <div class="notification-meta">
                    <small class="timestamp">{{ $notification->created_at->diffForHumans() }}</small>
                </div>
            </div>
        </div>
    </li>
@empty
    <h3 class="text-center color-gold">No Notifications</h3>
@endforelse
<x-app>
    <ul>
        @foreach ($notifications as $notification)
        <li>
            <p>{{ $notification->data['message'] }}</p>
            @if ($notification->read_at)
            <span>既読</span>
            @else
            <span>未読</span>
            @endif
            <?php $notification->markAsRead(); ?>
        </li>
        @endforeach
    </ul>
</x-app>
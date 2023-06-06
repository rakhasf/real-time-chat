<div>
    {{-- der krieg ist veloren.. --}}

    <div class="chatlist_header">
        <div class="title">
            Chat
        </div>

        <div class="img_container">
            <img src="https://picsum.photos/id/237/200/300" alt="">
        </div>

    </div>

    @if (count($conversations) > 0)

    @foreach ($conversations as $conversation)
    <div class="chatlist_body">

        <div class="chatlist_item">
            <div class="chatlist_img_container">
                <img src="https://picsum.photos/id/227/200/300"{{ $this->getChatInstance($conversation, $name = 'id' )}}>
            </div>

            <div class="chatlist_info">
                <div class="top_row">
                    <div class="list_username"{{ $this->getChatInstance($conversation, $name = 'name' )}}>Zirjy</div>
                    <span class="date">{{ $conversation->messages->last()->created_at->shortAbsoluteDiffForHumans }}</span>
                </div>
                <div class="bottom_row">
                    <div class="message_body text-truncate">
                        {{ $this->getChatInstance($conversation->messages->last()->body )}}
                    </div>

                    <div class="unread_count">
                        100
                    </div>

                </div>
            </div>
        </div>

    </div>
    @endforeach

    @else 
    You have no conversations
    @endif

</div>
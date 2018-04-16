@component('mail::message')
    # Message from website cim-italianstyle.com

    Name: {{ $message->name }}
    Email: {{ $message->email }}
    Phone: {{ $message->phone }}
    Message: {{ $message->message }}

    Thanks,
    cim-italianstyle.com
@endcomponent

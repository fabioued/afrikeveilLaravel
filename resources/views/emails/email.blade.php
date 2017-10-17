@component('mail::message')

<span style="color:black">
    You have a new message from {{ $name }}

    Message:{{ $message }}
</span>


@component('mail::panel', ['url' => ''])
#Contacts:

Name: {{ $name }}

Phone: {{ $phone }}

Email: {{ $email }}


@endcomponent

@endcomponent

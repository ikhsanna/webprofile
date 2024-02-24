<x-mail::message>
# You've got an email

<h3>Name: {{$data['name']}}</h3>
<h3>Email: {{$data['email']}}</h3>
<h3>Subject: {{$data['subject']}}</h3>
<p>Message: {{$data['nmessage']}}</p>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

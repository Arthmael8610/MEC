@component('mail::message')
    Welcome to CitizenWarfare, Thank You for Registering at <a href="https://events.citizenwarfare.com" target="_blank">Citizenwarfare</a>

@component('mail::panel')
Lets get your organization members registered, give them this link ---> <a href="Https://events.citizenwarfare.com/join/ref/{{ $organization->refHash }}" target="_blank">https://events.citizenwarfare.com/join/ref/{{ $organization->refHash }}</a>

If you have a questions check out our <a href="https://events.citizenwarfare.com/faq" target="_blank">F.A.Q</a>, otherwise you can reach support <a href="Mailto:support@citizenwarfare.com">support@citizenwarfare.com</a>
@endcomponent


Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
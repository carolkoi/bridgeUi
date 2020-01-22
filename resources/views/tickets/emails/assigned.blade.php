@component('mail::message')
# Dear {!! $staff !!}

You have been assigned below ticket. Kindly resolve the ticket by making an inspection report
detailing out the issue and solution offered.

<h3>Ticket Details</h3>
{!! $issueType !!}
{!! $ticket->description  !!}

@component('mail::button', ['url' => url('tickets/'.$ticket->id)])
View Ticket
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

<?php

namespace App\Mail;

use App\Models\IssueType;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Ticket;

class ticketAssigned extends Mailable
{
    use Queueable, SerializesModels;
    protected $ticket;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('tickets.emails.assigned')
            ->with([
                'staff' => User::find($this->ticket->assign_to)->name,
                'issueType' => IssueType::find($this->ticket->issue_type_id)->issue,
                'ticket' => $this->ticket
            ]);
    }
}

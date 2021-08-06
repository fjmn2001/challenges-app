<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailLogs extends Mailable
{
    use Queueable, SerializesModels;

    private $email;
    private $name;
    private $title;
    private $comment;

    public function __construct(
        string $email,
        string $name,
        string $title,
        string $comment
    )
    {
        $this->email = $email;
        $this->name = $name;
        $this->title = $title;
        $this->comment = $comment;
    }

    public function build()
    {
        return $this->from($this->email, $this->name)
            ->subject($this->title)
            ->view('email')
            ->with([
                'title' => $this->title,
                'comment' => $this->comment,
            ]);
    }
}

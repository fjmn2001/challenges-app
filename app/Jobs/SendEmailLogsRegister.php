<?php

namespace App\Jobs;

use App\Mail\SendMailLogs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailLogsRegister implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

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

    public function handle(): void
    {
        $email = new SendMailLogs($this->email, $this->name,$this->title, $this->comment);
        Mail::to($this->email)->send($email);
    }
}

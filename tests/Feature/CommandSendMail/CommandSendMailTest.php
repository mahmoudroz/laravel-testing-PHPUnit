<?php

namespace Tests\Feature\CommandSendMail;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;

class CommandSendMailTest extends TestCase
{
    public function testCommandSendMail(): void
    {
        Mail::fake();
        $this->artisan("app:send-mail");
        Mail::assertSent(NotifyMail::class);
        // Mail::assertNothingSent();
    }
}

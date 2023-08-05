<?php

namespace App\Mail;

use App\Models\Bill;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DetailEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $bills;

    /**
     * Create a new message instance.
     */
    public function __construct(Bill $bills)
    {
        $this->bills = $bills;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'PhoneHub - Xác Nhận Đơn Hàng',
        );
    }

    /**
     * Get the message content definition.
     */

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
    public function build()
    {
        $title = 'Test title';
        $bills = $this->bills;
      

        return $this->view('mail.showmail', [
            'bills' => $bills,
            'title' => $title
        ]);
    }
}

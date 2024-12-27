<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class EmailMessage extends Mailable
{
	use Queueable, SerializesModels;

	public $data;
	public $type; // Type of the message, e.g., 'contact' or 'quote'

	/**
	 * Create a new message instance.
	 */
	public function __construct($data, string $type)
	{
		$this->data = $data;
		$this->type = $type;
	}

	/**
	 * Get the message envelope.
	 */
	public function envelope(): Envelope
	{
		$fromEmail = $this->data->email ?? 'default@example.com';
		$fromName = $this->data->name ?? 'Anonymous';

		$subject = $this->type === 'quote'
			? "New Quote Request: {$this->data->projectType}"
			: "Contact Message: {$this->data->subject}";

		return new Envelope(
			from: new Address($fromEmail, $fromName),
			subject: $subject,
		);
	}

	/**
	 * Build the email.
	 */
	public function build()
	{
		$view = $this->type === 'quote' ? 'livewire.quoteEmail' : 'pages.contactEmail';

		return $this->view($view)
			->with(['data' => $this->data])
			->subject($this->envelope()->subject)
			->from($this->data->email, $this->data->name);
	}

	/**
	 * Get the message content definition.
	 */
	public function content(): Content
	{
		$view = $this->type === 'quote' ? 'livewire.quoteEmail' : 'pages.contactEmail';
		return new Content(
			view: $view,
			with: [
				'data' => $this->data,
			]
		);
	}

	/**
	 * Get the attachments for the message.
	 *
	 * @return array<int, \Illuminate\Mail\Mailables\Attachment>
	 */
	public function attachments(): array
	{
		return [];
	}
}

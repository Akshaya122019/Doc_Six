<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormSubmittedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;
    public $files = [];

    /**
     * Create a new message instance.
     */
    public function __construct($formData, $files = [])
    {
        $this->formData = $formData;
        $this->files = is_array($files) ? $files : [$files];
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $mail = $this->subject('New Form Submission')
                    ->view('mail.mail')
                    ->with('formData', $this->formData);

        if (!empty($this->files)) {
            foreach ($this->files as $index => $path) {
                if (!empty($path) && file_exists($path)) {
                    $mail->attach($path, [
                        'as'   => 'attachment_' . ($index + 1) . '.pdf',
                        'mime' => 'application/pdf',
                    ]);
                }
            }
        }

        return $mail;
    }
}

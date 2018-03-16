<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UploadCvMail extends Mailable
{
    use Queueable, SerializesModels;

    public $cv;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $cv)
    {
        $this->cv = $cv;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('themes.cim.emails.upload-cv')
            ->subject('Uploaded CV from CIM Italian Style website')
            ->from(['address' => 'info@cim-italianstyle.com', 'name' => 'CIM Italian Style'])
            ->attach(url($this->cv), [
                'as' => 'CV.pdf',
                'mime' => 'application/pdf',
            ]);
    }
}

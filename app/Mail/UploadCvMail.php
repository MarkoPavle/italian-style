<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UploadCvMail extends Mailable
{
    use Queueable, SerializesModels;

    public $path;
    public $extension;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($path, $extension)
    {
        $this->path = $path;
        $this->extension = $extension;
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
            ->attach(url($this->path), [
                'as' => 'CV.'.$this->extension,
                'mime' => 'application/'.$this->extension,
            ]);
    }
}

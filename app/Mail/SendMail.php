<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

use Illuminate\Contracts\Queue\ShouldQueue;


class SendMail extends Mailable

{

    use Queueable, SerializesModels;

    /**

     * The user instance.

     *

     * @var Order

     */

    public $data;

    /**

     * Create a new message instance.

     *

     * @return void

     */

    public function __construct($data)

    {

        $this->data = $data;

    }

    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {

        return $this->from('ashutosh.empli5@gmail.com')->subject("hello")
                ->view('mail')->with('name','Ashutosh');

    }

}
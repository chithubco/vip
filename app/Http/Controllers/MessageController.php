<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Repositories\Message\MessageContract;
	use Sentinel;
	use Illuminate\Support\Facades\Mail;
	// require 'PHPMailerAutoload.php';
	require('vendor/phpmailer/phpmailer/PHPMailerAutoload.php');

	// use phpmailer;


	class MessageController extends Controller
	{

			protected $repo;

			public function __construct(MessageContract $messageContract) {
				$this->repo = $messageContract;
			}

	    /**
	     * Display a listing of the resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function index()
	    {
	        //
	    }

	    /**
	     * Show the form for creating a new resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function create()
	    {
				$user = Sentinel::getUser();
				return view('message.create')->with('user', $user);
	    }

	    /**
	     * Store a newly created resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @return \Illuminate\Http\Response
	     */
	    public function store(Request $request)
	    {
	        $this->validate($request, [
						"title" => "required",
						"message" => "required",
					]);
					$message = $this->repo->create($request);
					if($message){
	 	       return redirect()->back()
	 	               ->with('success', 'Message sent successfully');
	 	     }else{
	 	       return back()
	 	               ->withInput()
	 	               ->with('error', 'Message sending failed. Try Again!!!');
	 	     }
	    }

	    /**
	     * Display the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function show($id)
	    {
	        //
	    }

	    /**
	     * Show the form for editing the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function edit($id)
	    {
	        //
	    }

	    /**
	     * Update the specified resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function update(Request $request, $id)
	    {
	        //
	    }

	    /**
	     * Remove the specified resource from storage.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function delete($id)
	    {
	        //
	    }

			public function sendMail(Request $request){
				$mail = new PHPMailer;

			//$mail->SMTPDebug = 3;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'user@example.com';                 // SMTP username
			$mail->Password = 'secret';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom('from@example.com', 'Mailer');
			$mail->addAddress('favoriabs@gmail.com', 'Joe User');     // Add a recipient
			$mail->addReplyTo('info@example.com', 'Information');
			$mail->addCC('cc@example.com');
			$mail->addBCC('bcc@example.com');
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Here is the subject';
			$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				echo 'Message has been sent';
			}

					// $mail = new PHPMailer;
					//
					// $mail->isSMTP();
					// $mail->Host = 'localhost';
					// $mail->Port = 25;
					//
					// $mail->setFrom('from@example.com', 'First Last');
					// //Send the message to yourself, or whoever should receive contact for submissions
					// $mail->addAddress('favoriabs@gmail.com', 'John Doe');
					// //
					// if ($mail->addReplyTo($request->email, $request->name)) {
					// 	$mail->Subject = $request->subject;
					// 	$mail->isHTML(false);
					// 	$mail->Body = <<<EOT
					// 				Email: {$request->email}
					// 				Name: {$request->name}
					// 				Message: {$request->message}
					// 				EOT;
					// 					//Send the message, check for errors
					// 					if (!$mail->send()) {
					// 							//The reason for failing to send will be in $mail->ErrorInfo
					// 							//but you shouldn't display errors to users - process the error, log it on your server.
					// 							return back()
					// 	 	 	               ->withInput()
					// 	 	 	               ->with('error', 'Message sending failed. Try Again!!!');
					// 					} else {
					// 							return redirect()->back()
					// 	 	 	               ->with('success', 'Thanks for contacting us.');
					// 						}
					// } else {
					// 	$msg = 'Invalid email address, message ignored.';
					// }
			}
}

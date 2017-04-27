<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Repositories\Message\MessageContract;
	use Sentinel;
	use Illuminate\Support\Facades\Mail;


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
				$mail = new \PHPMailer(true); // notice the \  you have to use root namespace here
				 try {
						 $mail->isSMTP(); // tell to use smtp
						 $mail->CharSet = "utf-8"; // set charset to utf8
						 $mail->SMTPAuth = true;  // use smpt auth
						 $mail->SMTPSecure = "ssl"; // or ssl
						 $mail->Host =  'smtp.sendgrid.net';
						 $mail->Port = 465; // most likely something different for you. This is the mailtrap.io port i use for testing.
						 $mail->Username = "apikey";
						 $mail->Password = "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";
						 $mail->setFrom("youremail@yourdomain.de", "Firstname Lastname");
						 $mail->Subject = "Test";
						 $mail->MsgHTML("This is a test");
						 $mail->addAddress("favoriabs@gmail.com", "Recipient Name");
						 $mail->send();
				 } catch (phpmailerException $e) {
						 dd($e);
				 } catch (Exception $e) {
						 dd($e);
				 }
				 die('success');
			}
}

<?php

interface Animal {
	public function communicate();
}

class Dog implements Animal {
	public function communicate(){
		return 'Bark';
	}
}

class Cat implements Animal {
	public function communicate(){
		return 'meow';
	}
}

interface Logger{
	public function execute($message);
}

class LogToFile implements Logger{
	public function execute($message){
		var_dump("Log message: $message");
	}
}

class LogToDatabase implements Logger {
	public function execute($message)
	{
		var_dump("Log to database: $message");
	}
}

class UserController {
	protected $logger;

	public function __construct(Logger $logger){
		$this->logger = $logger;
	}

	public function show(){
		$user = 'JohnDoe';
		$this->logger->execute($user);
	}
}

$ctrl = new UserController(new LogToDatabase());
$ctrl->show();

?>
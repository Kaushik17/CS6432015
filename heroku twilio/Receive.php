<?php

	// make an associative array of senders we know, indexed by phone number
	$people = array(
		"+19172164313" => "Professor",
		
	);

	// if the sender is known, then greet them by name
	// otherwise, consider them just another monkey
	if(!$name = $people[$_REQUEST['From']]) {
		$name = "Monkey";
	}

	// now greet the sender
	header("content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
	<Message><?php echo $name ?>, it was nice talking to you !</Message>
</Response>
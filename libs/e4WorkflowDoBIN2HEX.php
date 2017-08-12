<?php

class e4WorkflowDoBIN2HEX extends e4WorkflowCommands
{
	public function run($inQuery, $args)
	{
		$hash = bin2hex($inQuery);
		if ($args[1] == 'XML')
			return array(array(
				'uid' => 'bin2hex',
				'arg' => $hash,
				'title' => 'bin2hex: '.$hash,
				'icon' => 'icon.png',
				'valid' => 'true'));
		return $hash;
	}
}

?>
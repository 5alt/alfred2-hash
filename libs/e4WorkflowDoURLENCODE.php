<?php

class e4WorkflowDoURLENCODE extends e4WorkflowCommands
{
	public function run($inQuery, $args)
	{
		$hash = urlencode($inQuery);
		if ($args[1] == 'XML')
			return array(array(
				'uid' => 'urlencode',
				'arg' => $hash,
				'title' => 'urlencode: '.$hash,
				'icon' => 'icon.png',
				'valid' => 'true'));
		return $hash;
	}
}

?>
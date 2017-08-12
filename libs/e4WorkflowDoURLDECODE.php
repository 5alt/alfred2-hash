<?php

class e4WorkflowDoURLDECODE extends e4WorkflowCommands
{
	public function run($inQuery, $args)
	{
		$hash = urldecode($inQuery);
		if ($args[1] == 'XML')
			return array(array(
				'uid' => 'urldecode',
				'arg' => $hash,
				'title' => 'urldecode: '.$hash,
				'icon' => 'icon.png',
				'valid' => 'true'));
		return $hash;
	}
}

?>
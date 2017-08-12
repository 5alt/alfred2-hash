<?php

class e4WorkflowDoHEX2BIN extends e4WorkflowCommands
{
	public function run($inQuery, $args)
	{
		$hash = hex2bin($inQuery);
		if ($args[1] == 'XML')
			return array(array(
				'uid' => 'hex2bin',
				'arg' => $hash,
				'title' => 'hex2bin: '.$hash,
				'icon' => 'icon.png',
				'valid' => 'true'));
		return $hash;
	}
}

?>
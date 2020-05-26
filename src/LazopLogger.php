<?php

namespace luau2shabu\Lazada;

use Illuminate\Support\Facades\Log;

class LazopLogger
{
	public function log($logData)
	{
		Log::error($logData);
	}
}
?>

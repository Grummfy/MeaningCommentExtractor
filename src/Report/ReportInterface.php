<?php

namespace Grummfy\WPExtractor\Report;

interface ReportInterface
{
	public function receiveAPlot($key, $values);
	
	public function setFile($file);
	
	public function buildAndPrint();
}

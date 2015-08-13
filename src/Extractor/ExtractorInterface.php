<?php

namespace Grummfy\WPExtractor\Extractor;

use Grummfy\WPExtractor\ExtractorInterface;

interface ExtractorInterface
{
	public function receiveAPattern(PatternInterface $pattern);
	
	public function fillReportWithContentMatch($content, ReportInterface $report);
}

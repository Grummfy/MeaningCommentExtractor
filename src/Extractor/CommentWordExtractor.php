<?php

namespace Grummfy\WPExtractor\Extractor;

use Grummfy\WPExtractor\Report\ReportInterface;

class CommentWordExtractor implements ExtractorInterface
{
	public function receiveAPattern(PatternInterface $pattern)
	{
		return $this;
	}
	
	public function fillReportWithContentMatch($content, ReportInterface $report)
	{
		// match with all patterns
		
		// if match call report
		$matchedPattern->reportShouldBeFilledFromMatch($match, $report);
		
		return $this;
	}
}

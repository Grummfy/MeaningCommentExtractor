<?php

namespace Grummfy\WPExtractor\WordPattern;

class Todo implements WordPatternInterface
{
	public function extractorRequestPatterns(ExtractorInterface $extractor)
	{
		$extractor->receiveAPattern($internalPattern);
		
		return $this;
	}
	
	public function reportShouldBeFilledFromMatch($match, ReportInterface $report)
	{
		$report->receiveAPlot($key, $value);
		
		return $this;
	}
}

/*
 * Notations :
 * // TODO Ab c de f 
 * / * TODO Ab c de f */

<?php

namespace Grummfy\WPExtractor\WordPattern;

class TechnicalDebt implements WordPatternInterface
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
 * // TechDebt[NumberOfTimeHooked, EstimatedTimeToResolve]
 * / * TechDebt[NumberOfTimeHooked, EstimatedTimeToResolve] */

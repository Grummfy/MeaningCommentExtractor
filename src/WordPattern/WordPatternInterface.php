<?php

namespace Grummfy\WPExtractor\WordPattern;

use Grummfy\WPExtractor\Extractor\ExtractorInterface;

interface WordPatternInterface
{
	public function extractorRequestPatterns(ExtractorInterface $extractor);
	
	public function reportShouldBeFilledFromMatch($match, ReportInterface $report);
}

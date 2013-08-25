<?php
class MozKr {
	function __construct($source_url, $target_url, $replace_rule, $insert_rule, $remove_rule) {
		$this->source_url = $source_url;
		$this->target_url = $target_url;
		$this->cache_directory = dirname(__FILE__) . '/../cache/';
		$this->source_file_path = $this->cache_directory . urlencode($source_url);
		$this->target_file_path = $this->cache_directory . urlencode($target_url);

		$this->replace_rule = $replace_rule;
		$this->insert_rule = $insert_rule;
		$this->remove_rule = $remove_rule;
	}

	function get_content() {
		if (file_exists($this->target_file_path)) {
			return file_get_contents($this->target_file_path);
		} else {
			return $this->generate_content();
		}

	}

	function generate_content() {
		$html = $this->get_source_content();

		$html = $this->replace_string($html);
		$html = $this->insert_string($html);
		$html = $this->remove_string($html);

		file_put_contents($this->target_file_path, $html);
		return $html;
	}

	function get_source_content() {
		if (file_exists($this->source_file_path)) {
			return file_get_contents($this->source_file_path);
		} else {
			$html = file_get_contents($this->source_url);
			if (strlen($html) < 1) {
				echo('Cannot get remote source.');
				exit();
			}
			file_put_contents($this->source_file_path, $html);
			return $html;
		}
	}

	function replace_string($html) {
		// $processed = array();
		foreach ($this->replace_rule as $key => $item) {
			$html = str_replace($item['source'], $item['target'], $html);
			// array_push($processed, $key);
		}

		return $html;
	}

	function insert_string($html) {
		foreach ($this->insert_rule as $key => $item) {
			$html = $this->insert_text_by_string($item['before'], $item['after'], $item['insert'], $html);
		}

		return $html;
	}

	function remove_string($html) {
		foreach ($this->remove_rule as $key => $item) {
			$head_position = strpos($html, $item['start']);
			$tail_position = strpos($html, $item['end']);

			if ($head_position === false || $tail_position === false || $head_position > $tail_position) {
				return $source;
			}

			$head = substr($html, 0, $head_position);
			$tail = substr($html, $tail_position + strlen($item['end']));
			$html = $head . $tail;
		}

		return $html;
	}

	function insert_text_by_string ($start, $end, $string, $source) {
		$head_position = strpos($source, $start);
		$tail_position = strpos($source, $end);

		if ($head_position === false || $tail_position === false || $head_position > $tail_position) {
			return $source;
		}

		$head = substr($source, 0, $head_position);
		$tail = substr($source, $tail_position);

		return $head . $start . $string . $tail;
	}

	// function get_process_result() {
	// 	$unprocessed = array();
	// 	foreach ($replace as $key => $value) {
	// 		if (!isset($processed[$key])) {
	// 			array_push($unprocessed, $key);
	// 		}
	// 	}

	// 	if (count($unprocessed) > 0) {
	// 		echo('<!-- ');
	// 		implode(', ', $unprocessed);
	// 		echo(' -->');
	// 	}
	// }
}
?>

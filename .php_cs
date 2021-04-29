<?php

declare(strict_types=1);
/**
 * This file is part of Code Ai.
 *
 * @version 1.0.0
 * @author @小小只^v^ <littlezov@qq.com>  littlezov@qq.com
 * @contact  littlezov@qq.com
 * @link     https://github.com/littlezo
 * @document https://github.com/littlezo/wiki
 * @license  https://github.com/littlezo/MozillaPublicLicense/blob/main/LICENSE
 *
 */
$header = <<<'EOF'
	This file is part of Code Ai.

	@version 1.0.0
	@author @小小只^v^ <littlezov@qq.com>  littlezov@qq.com
	@contact  littlezov@qq.com
	@link     https://github.com/littlezo
	@document https://github.com/littlezo/wiki
	@license  https://github.com/littlezo/MozillaPublicLicense/blob/main/LICENSE

	EOF;

return PhpCsFixer\Config::create()
	->setRiskyAllowed(true)
	->setRules([
		'@PSR2'                 => true,
		'@PSR12'                => true,
		'@PHP54Migration'       => true,
		'@PHP56Migration'       => true,
		// '@PHP56Migration:risky' => true,
		'@PHP70Migration'       => true,
		// '@PHP70Migration:risky' => true,
		'@PHP71Migration'       => true,
		// '@PHP71Migration:risky' => true,
		'@PHP73Migration'       => true,
		'@PHP74Migration'       => true,
		// '@PHP74Migration:risky' => true,
		'@PHP80Migration'       => true,
		'@DoctrineAnnotation'   => true,
		// '@PHP80Migration:risky' => true,
		// '@PSR12:risky'          => true,
		'@PhpCsFixer'           => true,
		// '@PhpCsFixer:risky'     => true,
		'@Symfony'              => true,
		// '@Symfony:risky'        => true,
		'header_comment'        => [
			'commentType' => 'PHPDoc',
			'header'      => $header,
			'separate'    => 'none',
			'location'    => 'after_declare_strict',
		],
		'array_syntax'          => [
			'syntax' => 'short',
		],
		'binary_operator_spaces' => [
			'align_double_arrow' => false,
			'align_equals'       => false,
		],
		'ordered_imports' => [
			'imports_order' => [
				'class', 'function', 'const',
			],
			'sort_algorithm' => 'alpha',
		],
		// 'single_line_comment_style' => [
		// 	'comment_types' => [
		// 	],
		// ],
		'phpdoc_align' => [
			'align' => 'left',
		],
		'multiline_whitespace_before_semicolons' => [
			'strategy' => 'no_multi_line',
		],
		'no_trailing_comma_in_singleline_array' => true,
		'trailing_comma_in_multiline_array'     => false,
		'no_trailing_comma_in_list_call'        => true,
	])
	->setFinder(
		PhpCsFixer\Finder::create()
			->files()
			->name('*.php')
			->exclude('public')
			->exclude('runtime')
			->exclude('vendor')
			->exclude('tests')
			->in(__DIR__)
			->ignoreDotFiles(true)
			->ignoreVCS(true)
	)
	->setIndent("\t")
	// ->setLineEnding("\n")
	->setUsingCache(true);

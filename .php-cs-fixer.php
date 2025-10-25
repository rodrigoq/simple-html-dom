<?php

$finder = PhpCsFixer\Finder::create()
	->in(__DIR__)
;

$config = new PhpCsFixer\Config();

$config = $config->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect());

return $config->setRules([
		// casing
		'constant_case' => true,
		'integer_literal_case' => true,
		'lowercase_keywords' => true,
		'lowercase_static_reference' => true,
		'magic_constant_casing' => true,
		'magic_method_casing' => true,
		'native_function_casing' => true,
		'native_type_declaration_casing' => true,

		// Cast Notation
		'cast_spaces' => ['space' => 'none'],
		'lowercase_cast' => true,
		'modernize_types_casting' => true, // not risky
		'no_short_bool_cast' => true,
		'no_unset_cast' => true,
		'short_scalar_cast' => true,

		// Class Notation
		'modifier_keywords' => ['elements' => ['const', 'method', 'property']],
		'class_attributes_separation' => ['elements' => ['method' => 'one']],
		'class_definition' => true,
		'no_blank_lines_after_class_opening' => true,
		'single_class_element_per_statement' => true,

		// Array Notation
		'array_syntax' => true,
		'no_multiline_whitespace_around_double_arrow' => true,
		'no_whitespace_before_comma_in_array' => true,
		'normalize_index_brace' => true,
		'trim_array_spaces' => true,
		'whitespace_after_comma_in_array' => true,

		// Import
		'no_unused_imports' => true,
		'ordered_imports' => true,
		'single_line_after_imports' => true,
		'no_leading_import_slash' => true,

		// Basic
		// 'braces' => ['position_after_functions_and_oop_constructs' => 'next', 'position_after_control_structures' => 'next', 'position_after_anonymous_constructs' => 'next'],
		'encoding' => true,
		'non_printable_character' => true, //risky
		'octal_notation' => false,
		'psr_autoloading' => true, //risky

		// Alias
		'array_push' => true, //risky
		'backtick_to_shell_exec' => true,
		//Con php 7.4 'modernize_strpos' => true, //risky
		'no_alias_functions' => true, //risky
		'no_alias_language_construct_call' => true,
		'no_mixed_echo_print' => true,
		'set_type_to_cast' => true, //risky

		// Semicolon
		'multiline_whitespace_before_semicolons' => true,
		'no_empty_statement' => true,
		'no_singleline_whitespace_before_semicolons' => true,
		'semicolon_after_instruction' => true,
		'space_after_semicolon' => true,

		// List Notation
		'list_syntax' => true,

		// Namespace Notation
		'blank_line_after_namespace' => true,
		'clean_namespace' => true,
		'no_leading_namespace_whitespace' => true,
		'blank_lines_before_namespace' => ['min_line_breaks' => 2, 'max_line_breaks' => 2],

		// Naming
		'no_homoglyph_names' => true, //risky

		// Operator
		// 'assign_null_coalescing_to_coalesce_equal' => true, //   Use the null coalescing assignment operator ``??=`` where possible.
		'binary_operator_spaces' => true,
		'concat_space' => ['spacing' => 'one'],
		'logical_operators' => true, //risky
		'new_with_parentheses' => ['anonymous_class' => true, 'named_class' => true],
		'no_space_around_double_colon' => true,
		// 'not_operator_with_space' => true, //   Logical NOT operators (``!``) should have leading and trailing whitespaces.
		'object_operator_without_whitespace' => true,
		'operator_linebreak' => true,
		'standardize_not_equals' => true,
		'ternary_operator_spaces' => true,
		// 'ternary_to_null_coalescing' => true, //   Use ``null`` coalescing operator ``??`` where possible. Requires PHP >= 7.0.
		'unary_operator_spaces' => true,

		// PHP Tag
		'blank_line_after_opening_tag' => true,
		'echo_tag_syntax' => true,
		'full_opening_tag' => true,
		'linebreak_after_opening_tag' => true,
		'no_closing_tag' => true,

		// Language Construct
		'declare_equal_normalize' => ['space' => 'single'],
		'declare_parentheses' => true,
		'dir_constant' => true, //risky
		'function_to_constant' => true, //risky
		//ERROR: 'get_class_to_class_keyword' => true, //risky
		'is_null' => true, //risky
		'no_unset_on_property' => true, //risky
		'error_suppression' => true, //risky

		// Comment
		'comment_to_phpdoc' => true, //risky
		'multiline_comment_opening_closing' => true,
		'single_line_comment_style' => true,
		'no_empty_comment' => true,



		// Whitespace
		'array_indentation' => true,
		'compact_nullable_type_declaration' => true,
		'indentation_type' => true,
		'line_ending' => true,
		'method_chaining_indentation' => true,
		// 'no_extra_blank_lines' => true, //   Removes extra blank lines and/or blank lines following configuration.
		'no_spaces_around_offset' => true,
		'spaces_inside_parentheses' => ['space' => 'none'],
		'no_trailing_whitespace' => true,
		'no_whitespace_in_blank_line' => true,
		'types_spaces' => ['space' => 'single'],

		// Control Structure
		'include' => true,
		'no_alternative_syntax' => true,
		'no_trailing_comma_in_singleline' => ['elements' => ['arguments', 'array_destructuring', 'array', 'group_import']],
		'no_unneeded_control_parentheses' => true,
		'no_unneeded_braces' => true,
		'switch_case_semicolon_to_colon' => true,
		'switch_case_space' => true,
		'trailing_comma_in_multiline' => true,
		'no_useless_else' => true,
		// 'simplified_if_return' => true,
		// 'no_superfluous_elseif' => true,


		// // Function Notation
		'combine_nested_dirname' => true, //risky
		'type_declaration_spaces' => ['elements' => ['function', 'property']],
		'implode_call' => true, //risky
		'lambda_not_used_import' => true,
		'method_argument_space' => ['on_multiline' => 'ignore'],
		'no_spaces_after_function_name' => true,
		'regular_callable_call' => true, //risky
		'return_type_declaration' => ['space_before' => 'one'],
		'void_return' => true, //risky
		'function_declaration' => ['closure_function_spacing' => 'none'],

		// Return Notation
		'no_useless_return' => true,
		'return_assignment' => true,

		// String Notation
		'string_length_to_empty' => true, //risky
		'no_binary_string' => true,
		//Revisar
		// 'single_quote' => true,

		// PHPDoc
		'align_multiline_comment' => true,
		'no_blank_lines_after_phpdoc' => true,
		'no_empty_phpdoc' => true,
		'phpdoc_indent' => true,
		'phpdoc_line_span' => ['property' => 'single'],
		'phpdoc_separation' => true,
		'phpdoc_single_line_var_spacing' => true,
		'phpdoc_to_comment' => true,
		'phpdoc_trim_consecutive_blank_line_separation' => true,
		'phpdoc_trim' => true,
		'phpdoc_var_annotation_correct_order' => true,

		// '@PSR12' => true,
		// 'strict_param' => true,
		// 'array_syntax' => ['syntax' => 'short'],
	])
->setRiskyAllowed(true)
->setFinder($finder)
->setIndent("\t")
->setLineEnding("\n")
;
// PHPUnit
// -------
//
// 'php_unit_construct' => true, //risky
//
//   PHPUnit assertion method calls like ``->assertSame(true, $foo)`` should be written with dedicated method like ``->assertTrue($foo)``.
// 'php_unit_dedicate_assert' => true, //risky
//
//   PHPUnit assertions like ``assertInternalType``, ``assertFileExists``, should be used over ``assertTrue``.
// 'php_unit_dedicate_assert_internal_type' => true, //risky
//
//   PHPUnit assertions like ``assertIsArray`` should be used over ``assertInternalType``.
// 'php_unit_expectation' => true, //risky
//
//   Usages of ``->setExpectedException*`` methods MUST be replaced by ``->expectException*`` methods.
// 'php_unit_fqcn_annotation' => true,
//
//   PHPUnit annotations should be a FQCNs including a root namespace.
// 'php_unit_internal_class' => true,
//
//   All PHPUnit test classes should be marked as internal.
// 'php_unit_method_casing' => true,
//
//   Enforce camel (or snake) case for PHPUnit test methods, following configuration.
// 'php_unit_mock' => true, //risky
//
//   Usages of ``->getMock`` and ``->getMockWithoutInvokingTheOriginalConstructor`` methods MUST be replaced by ``->createMock`` or ``->createPartialMock`` methods.
// 'php_unit_mock_short_will_return' => true, //risky
//
//   Usage of PHPUnit's mock e.g. ``->will($this->returnValue(..))`` must be replaced by its shorter equivalent such as ``->willReturn(...)``.
// 'php_unit_namespaced' => true, //risky
//
//   PHPUnit classes MUST be used in namespaced version, e.g. ``\PHPUnit\Framework\TestCase`` instead of ``\PHPUnit_Framework_TestCase``.
// 'php_unit_no_expectation_annotation' => true, //risky
//
//   Usages of ``@expectedException*`` annotations MUST be replaced by ``->setExpectedException*`` methods.
// 'php_unit_set_up_tear_down_visibility' => true, //risky
//
//   Changes the visibility of the ``setUp()`` and ``tearDown()`` functions of PHPUnit to ``protected``, to match the PHPUnit TestCase.
// 'php_unit_size_class' => true,
//
//   All PHPUnit test cases should have ``@small``, ``@medium`` or ``@large`` annotation to enable run time limits.
// 'php_unit_strict' => true, //risky
//
//   PHPUnit methods like ``assertSame`` should be used instead of ``assertEquals``.
// 'php_unit_test_annotation' => true, //risky
//
//   Adds or removes @test annotations from tests, following configuration.
// 'php_unit_test_case_static_method_calls' => true, //risky
//
//   Calls to ``PHPUnit\Framework\TestCase`` static methods must all be of the same type, either ``$this->``, ``self::`` or ``static::``.
// 'php_unit_test_class_requires_covers' => true,
//
//   Adds a default ``@coversNothing`` annotation to PHPUnit test classes that have no ``@covers*`` annotation.



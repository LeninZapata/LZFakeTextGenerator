<?php
require_once '../LZFakeTextGenerator.php';
$FAKE = new LZFakeTextGenerator;

echo $FAKE->set_tag_inline( 'This is my text that I want to mix randomly with HTML inline tag A', ['a',] );echo "<hr />";
echo $FAKE->set_tag_inline( $FAKE->get_sentence(10,20), ['a','strong','em'] );echo "<hr />";
echo $FAKE->set_tag_inline( $FAKE->get_paragraph('long',true), $FAKE->all_tag_inline_supported, true );echo "<hr />";
echo $FAKE->set_tag_inline( $FAKE->get_paragraphs(),  $FAKE->all_tag_inline_supported, true );echo "<hr />";
echo $FAKE->set_tag_block( $FAKE->get_paragraphs(5), ['h','pre','ul','dl','blockquote'], true );echo "<hr />";
echo $FAKE->set_tag_block( $FAKE->get_paragraphs(5), ['h','pre','ul','dl','blockquote'], false, true );echo "<hr />";
echo $FAKE->set_tag_block( $FAKE->get_paragraphs(5), $FAKE->all_tag_block_supported, false, true );echo "<hr />";
echo $FAKE->set_tag_block( $FAKE->get_paragraphs(2), $FAKE->all_tag_block_supported, true, true );echo "<hr />";
echo $FAKE->set_tag_block( $FAKE->set_tag_inline($FAKE->get_paragraphs(5)), $FAKE->all_tag_block_supported, true, true );echo "<hr />";
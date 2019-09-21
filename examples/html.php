<?php
require_once '../LZFakeTextGenerator.php';
$FAKE = new LZFakeTextGenerator;

echo $FAKE->set_tag_inline( 'This is my text that I want to mix randomly with HTML inline tag', ['a',] );echo "<hr />";
echo $FAKE->set_tag_inline( $FAKE->get_sentence(10,20), ['a','strong','em'] );echo "<hr />";
echo $FAKE->set_tag_inline( $FAKE->get_paragraph('long',true), $FAKE->tag_inline_support, true );echo "<hr />";
echo $FAKE->set_tag_inline( $FAKE->get_paragraphs(),  $FAKE->tag_inline_support, true );echo "<hr />";
echo $FAKE->set_tag_block( $FAKE->get_paragraphs(5), ['h','pre','ul','dl','blockquote'], true );echo "<hr />";
echo $FAKE->set_tag_block( $FAKE->get_paragraphs(5), ['h','pre','ul','dl','blockquote'], false, true );echo "<hr />";
echo $FAKE->set_tag_block( $FAKE->get_paragraphs(5), $FAKE->tag_block_support, false, true );echo "<hr />";
echo $FAKE->set_tag_block( $FAKE->get_paragraphs(2), $FAKE->tag_block_support, true, true );echo "<hr />";
echo $FAKE->set_tag_block( $FAKE->set_tag_inline($FAKE->get_paragraphs(5)), $FAKE->tag_block_support, true, true );echo "<hr />";
<?php
require_once '../LZFakeTextGenerator.php';
$FAKE = new LZFakeTextGenerator;

//$FAKE->set_frec_taginl_paragraph(100);
//$FAKE->set_frec_taginl_sentence(100);
//$FAKE->set_frec_tagblock(50);

// change to link custom
$FAKE->set_new_link_a('https://google.com');

echo $FAKE->set_tag_inline( 'This is my text that I want to mix randomly with HTML inline tag A', ['a',] );echo "<hr />";
echo $FAKE->set_tag_inline( $FAKE->get_sentence(10,20), ['a','strong','em'] );echo "<hr />";
echo $FAKE->set_tag_inline( $FAKE->get_paragraph('long',true), $FAKE->all_tag_inline_supported, true );echo "<hr />";
echo $FAKE->set_tag_inline( $FAKE->get_paragraphs(),  $FAKE->all_tag_inline_supported, true );echo "<hr />";
echo $FAKE->set_tag_block( $FAKE->get_paragraphs(5), ['h','pre','ul','dl','blockquote'], true );echo "<hr />";
echo $FAKE->set_tag_block( $FAKE->get_paragraphs(5), ['h','pre','ul','dl','blockquote'], false, true );echo "<hr />";
echo $FAKE->set_tag_block( $FAKE->get_paragraphs(5), $FAKE->all_tag_block_supported, false, true );echo "<hr />";
echo $FAKE->set_tag_block( $FAKE->get_paragraphs(2), $FAKE->all_tag_block_supported, true, true );echo "<hr />";
echo $FAKE->set_tag_block( $FAKE->set_tag_inline($FAKE->get_paragraphs(5)), $FAKE->all_tag_block_supported, true, true );echo "<hr />";
echo $FAKE->set_tag_block( $FAKE->get_paragraphs(5), ['h1','h2','h3','h4','h5','h6','h7']) ;echo "<hr />";
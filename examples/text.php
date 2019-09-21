<?php
require_once '../LZFakeTextGenerator.php';
$FAKE = new LZFakeTextGenerator;

echo $FAKE->get_word();echo "<hr />";
echo $FAKE->get_words();echo "<hr />";
echo $FAKE->get_words(5);echo "<hr />";
echo $FAKE->get_sentence();echo "<hr />";
echo $FAKE->get_sentence(8,18);echo "<hr />";
echo $FAKE->get_sentence(8,18, true);echo "<hr />";
echo $FAKE->get_paragraph();echo "<hr />";
echo $FAKE->get_paragraph('long',true);echo "<hr />";
echo $FAKE->get_paragraphs();echo "<hr />";
echo $FAKE->get_paragraphs(2);echo "<hr />";
<?php
require_once '../LZFakeTextGenerator.php';
$FAKE = new LZFakeTextGenerator;

$FAKE->set_collection_image([
    'https://images.unsplash.com/photo-1570602630574-7d33a994d04c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1534&q=80',
    'https://images.unsplash.com/photo-1570554882031-4546e3e3bed5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1556&q=80',
    'https://images.unsplash.com/photo-1567416592215-fb3c07cfb7c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1494&q=80',
    'https://images.unsplash.com/photo-1570520482746-af035285c22b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1534&q=80',
    'https://images.unsplash.com/photo-1570304816344-ea43cb167098?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1558&q=80'
]);

$FAKE->set_attr_image([
    'alt'    => 'AAAA',
    'title'  => 'BBBB',
    'width'  => '300',
    'height' => '300',
    'class'  => 'wp',
]);

echo    $FAKE->set_imagen_in_content(
            'block',
            $FAKE->get_paragraphs(5)
        );
echo "<hr />";
echo    $FAKE->set_imagen_in_content(
    'inline',
    $FAKE->get_paragraphs(5)
);
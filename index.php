<?php
require 'DocumentStore.php';
require 'Documentable.php';
require 'HtmlDocument.php';
require 'StreamDocument.php';

$documentStore = new DocumentStore();

$htmlDoc = new HtmlDocument('https://php.net');
$documentStore->addDocument($htmlDoc);

$streamDoc = new StreamDocument(fopen('./test.txt', 'rb'));
$documentStore->addDocument($streamDoc);

var_dump($documentStore->getDocuments());

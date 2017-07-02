<?php

class StreamDocument implements Documentable
{
    protected $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function getId()
    {
        return 'filename-' . (int)$this->filename;
    }

    public function getContent()
    {
        return file_get_contents($this->filename);
    }
}

<?php

class StreamDocument implements Documentable
{
    protected $resource;
    protected $buffer;

    public function __construct($resource, $buffer = 4096)
    {
        $this->resource = $resource;
        $this->buffer = $buffer;
    }

    public function getId()
    {
        return 'resource-' . (int)$this->resource;
    }

    public function getContent()
    {
        // return file_get_contents($this->resource);
        $streamContent = '';
        rewind($this->resource);

        if ($this->resource) {
            // while (feof($this->resource) === false) {
            //     $streamContent .= fread($this->resource, $this->buffer);
            // }
            $streamContent = stream_get_contents($this->resource);
        }

        fclose($this->resource);
        return $streamContent;
    }
}

<?php

class TplHandler
{
    private array $tplFills;
    public string $tplFile;
    private string $tplFilePrepared;

    public function __construct(string $tplFile)
    {
        $this->tplFile = $tplFile;
        $this->getContents($this->tplFile);
    }

    public function getContents (string $tplFile) :void
    {
        $this->tplFilePrepared = file_get_contents($tplFile);
    }

    public function creator (array $tplFills) :string
    {
        $this->tplFills = $tplFills;

        foreach ($this->tplFills as $key => $value)
        {
            $this->tplFilePrepared = str_replace("{".$key."}", $value, $this->tplFilePrepared);
        }

        return $this->tplFilePrepared;
    }
}
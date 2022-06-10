<?php

namespace TplHandler;

class TplHandler
{
//    private array $tplFills;
//    public string $tplFile;
//    private string $tplFilePrepared;

//    public function __construct(string $tplFile)
//    {
//        $this->tplFile = $tplFile;
//        $this->setContents($this->tplFile);
//    }

//    public function setContents (string $tplFile) :void
//    {
//        $this->tplFilePrepared = file_get_contents($tplFile);
//    }

    public function creator (string $tplFile, array $tplFills) :string
    {
//        $this->tplFills = $tplFills;
        $tplFilePrepared = file_get_contents($tplFile);

        foreach ($tplFills as $key => $value)
        {
            $tplFilePrepared = str_replace("{".$key."}", $value, $tplFilePrepared);
        }

        return $tplFilePrepared;
    }
}
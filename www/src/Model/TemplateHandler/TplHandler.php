<?php

namespace TplHandler;

class TplHandler
{

    public function creator (string $tplFile, array $tplFills) :string
    {
        $tplFilePrepared = file_get_contents($tplFile);

        foreach ($tplFills as $key => $value)
        {
            $tplFilePrepared = str_replace("{".$key."}", $value, $tplFilePrepared);
        }

        return $tplFilePrepared;
    }



    public function require(string $template, array $fills = []): void
    {
        require $template;
    }
}
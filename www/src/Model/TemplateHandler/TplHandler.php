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

    /** reminder: try to @extract within method, not in template */
    public function require(string $template, array $fills = []): void
    {
        require $template;
    }

    public function inherit(string $parentTemplate, string $childTemplate): void
    {
        $parentString = file_get_contents($parentTemplate);

        $childString = file_get_contents($childTemplate);
//        preg_match('/{{CONTENT:(.*\n)*:endCONTENT:}}/m', $childString, $matches);
        preg_match('/echo\s"<content>";(.*\n)*echo\s"<\/content>";/m', $childString, $matches);
        $childContent = $matches[0];

//        echo preg_replace('/{{CONTENT:(.*\n)*:endCONTENT:}}/', $childContent, $parentString);
        echo preg_replace('/<content>\n(.*\n)*<\/content>/m', $childContent, $parentString);

    }
}
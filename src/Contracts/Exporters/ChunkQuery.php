<?php

namespace Zx\EasyExcel\Contracts\Exporters;

interface ChunkQuery
{
    /**
     * @return \Generator[]
     */
    public function makeGenerators();
}

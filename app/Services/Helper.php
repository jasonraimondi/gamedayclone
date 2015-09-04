<?php

namespace Gameday\Services;

class Helper
{
    public function schoolName($id)
    {
        return \Gameday\School::findOrFail($id)->name;
    }

}

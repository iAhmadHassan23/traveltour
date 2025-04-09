<?php

if (!function_exists('includeRouteFiles')) {

    /**
     * Loops through a folder and requires all PHP files
     * Searches sub-directories as well.
     * @param $folder
     */
    function includeRouteFiles($folder)
    {
        $directory      = $folder;
        $handle         = opendir($directory);
        $directory_list = [$directory];

        while (false !== ($filename = readdir($handle))) {
            if ($filename != '.' && $filename != '..' && is_dir($directory . $filename)) {
                array_push($directory_list, $directory . $filename . '/');
            }
        }

        foreach ($directory_list as $directory) {
            foreach (glob($directory . '*.php') as $filename) {
                require $filename;
            }
        }
    }
}

if (!function_exists('codeGenerator')) {
    function codeGenerator($Table = null, $Column = null, $Length = 6)
    {
        $Code = strtoupper(substr(sha1(mt_rand()), 0, $Length));
        if ($Table) {
            $DBCount = DB::table($Table)->where($Column, $Code)->count();
            if ($DBCount > 0) {
                $Code = codeGenerator($Table, $Column, $Length);
            }
        }
        return $Code;
    }
}

if (!function_exists('checkStatus')) {
    function checkStatus($value)
    {
        if ($value == 0) {
            return '<span class="badge badge-danger">Draft</span>';
        } elseif ($value == 1) {
            return '<span class="badge badge-success">Published</span>';
        } elseif ($value == 2) {
            return '<span class="badge badge-info">Waiting</span>';
        } else {
            return '<span class="badge badge-warning">Review</span>';
        }
    }
}

if (!function_exists('indexStatus')) {
    function indexStatus($value)
    {
        if ($value == 1) {
            return '<span class="badge badge-success">Index</span>';
        } else {
            return '<span class="badge badge-danger">No Index</span>';
        }
    }
}

if (!function_exists('publishStatus')) {
    function publishStatus($value)
    {
        if ($value == 1) {
            return '<span class="badge badge-success">Publish</span>';
        } else {
            return '<span class="badge badge-danger">Un Publish</span>';
        }
    }
}

if (!function_exists('content_sections')) {
    function content_sections()
    {
        $folderPath = './dashboard/sections/';
        $files      = [];
        if (is_dir($folderPath)) {
            $filesAndDirs = scandir($folderPath);
            $fileNames    = array_filter($filesAndDirs, function ($item) use ($folderPath) {
                return !is_dir($folderPath . '/' . $item) && $item !== '.' && $item !== '..';
            });
            natsort($fileNames); 
            foreach ($fileNames as $file) {
                $keyname = explode('.', $file);
                $files[$keyname[0]] = asset('dashboard/sections/'.$file);

                //create css file
//                $cssFilePath = './assets/css/sections/'.$keyname[0].'.css';
//                if (!file_exists($cssFilePath)) {
//                    $cssContent = '/* Section '. $keyname[0] . ' */';
//                    file_put_contents($cssFilePath, $cssContent);
//                }

//                $viewFilePath = resource_path('views/components/'. $keyname[0] . '.blade.php');
//                if (!file_exists($viewFilePath)) {
//                    $viewconnt = '/* Section '. $keyname[0] . ' */';
//                    file_put_contents($viewFilePath, $viewconnt);
//                }
            }
        }
        return  $files;
    }
}

if (!function_exists('multipleSelect')) {
    function multipleSelect($rows, $value)
    {
        foreach ($rows as $row) {
            if ($row->id == $value) {
                return 'selected';
            }
        }
        return false;
    }
}

if(!function_exists('mix_styles')){
    function mix_styles($cssFiles){
        $cssContent = '';

        foreach ($cssFiles as $file) {
            $cssContent .= file_get_contents($file);
        }

        header('Content-Type: text/css');
        echo $cssContent;

    }
}

if(!function_exists('currency')){
    function currency($value){
        return '<sup>$</sup>'.$value;
    }
}

if(!function_exists('setting_value')){
    function setting_value($values, $key = null){
        $values = json_decode($values, true);
        if(is_null($key))
            return $values;

        if (isset($values[$key])){
            return $values[$key];
        }
        return null;
    }
}

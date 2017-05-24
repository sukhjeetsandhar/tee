<?php
if(env('APP_ENV') == 'local'){
    function getStorageUrl($path = null)
    {
        if ($path) {
            return url('src/storage/app/public/' . $path, []);
        }
        return url('src/storage/app/public', []);
    }

    function assetUrl($path = null)
    {
        if ($path) {
            return url('src/public/'.$path, []);
        }
        return url('src/public', []);
    }

}else{
    function getStorageUrl($path = null)
    {
        if ($path) {
            return url('src/storage/app/public/' . $path, [], true);
        }
        return url('src/storage/app/public', [], true);
    }

    function assetUrl($path = null)
    {
        if ($path) {
            return url('src/public/'.$path, [], true);
        }
        return url('src/public', [], true);
    }

}




function storagePath($path = null)
    {
        if ($path) {
            $path = trim($path, '/');
            return storage_path() . '/app/public/' . $path;
        }
        return storage_path() . '/app/public';
    }

    function gravatar($email = 'xyz.com'){
        return 'https://www.gravatar.com/avatar/' . md5($email) .'?s=50&d=mm';
    }
    function active($path, $active = 'active')
    {
        return Request::is($path) ? $active : '';
    }
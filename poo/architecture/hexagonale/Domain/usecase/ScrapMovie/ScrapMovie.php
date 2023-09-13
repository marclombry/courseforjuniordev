<?php 

require '../../../Port/in/IScrap.php';

class ScrapMovie implements IScrap
{

    public static function download(string $fileMovie, string $fileDownload)
    {
        $result = file_put_contents($fileDownload, file_get_contents($fileMovie));

        if(!$result) {
            return 'error donwload dosent work';
        }
        return 'download success';
    }


}
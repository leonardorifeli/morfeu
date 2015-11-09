<?php

namespace Morfeu\Bundle\EntityBundle\Entity;

use Morfeu\Bundle\BusinessBundle\Service\UploadFileService;
use Symfony\Component\HttpFoundation\File\File;

abstract class BaseEntity
{

    public function upload($file, $extension = array('png', 'jpg'), $maxSize = 2097152)
    {
        $upload = new UploadFileService();
        $upload->setFormatExtensions($extension);
        $upload->setMaxSize($maxSize);
        $upload->setUploadDir($this->getUploadDir());
        $upload->setFile($file);

        $this->path = $upload->upload();

        return $upload->getFileName();
    }

    public function removeUpload($file)
    {
        $upload = new UploadFileService();
        $upload->setUploadDir($this->getUploadDir());

        $upload->setFile($file);

        $upload->removeUpload();
    }

    protected function getUploadDir()
    {
        return "uploads/" . substr(strrchr(get_class($this), "\\"), 1);
    }

    public function getImageComplete($file)
    {
        $result = null;

        if($file){
            $result = "uploads/" . substr(strrchr(get_class($this), "\\"), 1) . "/{$file}";
        }

        return $result;
    }

}

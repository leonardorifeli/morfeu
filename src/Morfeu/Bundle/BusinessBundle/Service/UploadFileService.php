<?php

namespace Morfeu\Bundle\BusinessBundle\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class UploadFileService
{

    private $uploadDir;
    private $fileName;
    private $fileType;
    private $forceFileName;
    private $maxSize = 314572800;
    private $formatsExtensions = array("png", "jpg", "jpeg", "pdf", "doc", "xls", "ppt", "docx", "xlsx", "pptx", "zip", "rar");

    /**
     * Set path
     *
     * @param UploadedFile $file
     * @return ProductVariantImage
     */
    public function setFile($file = null)
    {
        $this->path = $file;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getFile()
    {
        return $this->path;
    }


    public function setFormatExtensions($formatExtensions)
    {
        if (is_array($formatExtensions)) {
            $this->formatsExtensions = $formatExtensions;
        }
    }

    /**
     * set max size of file - baseaded in byte
     * @param $maxSize
     */
    public function setMaxSize($maxSize)
    {
        $this->maxSize = $maxSize;
    }


    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        $this->setFileName($this->getFile());
        $this->setFileType($this->getFile());

        if ($this->getFile()->getClientSize() > ($this->maxSize)) {
            throw new \Exception('O arquivo selecionado excede o tamanho máximo. Por gentileza, verifique.');
        }

        if (!in_array(strtolower($this->getFileType()), $this->formatsExtensions)) {
            throw new \Exception('A extensão do arquivo selecionado é inválida. Por gentileza, verifique.');
        }

        $this->getFile()->move($this->getUploadRootDir(), $this->getFileName());

    }

    private function setFileType($file)
    {
        $ext = explode('.', $file->getClientOriginalName());
        if (isset($ext[count($ext) - 1])) $this->fileType = $ext[count($ext) - 1];

        return $this->fileType;
    }

    public function getFileType()
    {
        return $this->fileType;
    }

    private function setFileName($file)
    {
        $fileName = str_replace(' ', '', $file->getClientOriginalName());
        $this->setFileType($file);
        $count = 0;
        while (file_exists($this->getUploadRootDir() . '/' . $fileName)) {
            $count++;
            if (strpos($fileName, '_')) $fileName = substr($fileName, 0, strpos($fileName, '_')) . '.' . $this->getFileType();
            $fileName = str_replace('.' . $this->getFileType(), '_' . $count . '.' . $this->getFileType(), $fileName);
        }

        $this->fileName = $fileName;

        return $this->fileName;
    }

    public function getFileName()
    {
        if ($this->forceFileName) {
            return $this->forceFileName;
        }
        return $this->fileName;
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        $file = $this->getAbsolutePath();

        if ($file) {
            try {
                unlink($file);

                return true;
            } catch (\Exception $e) {
                return $e;
            }
        }
    }

    public function getAbsolutePath()
    {
        return ((null === $this->path) ? null : $this->getUploadRootDir() . '/' . $this->path);
    }

    public function getWebPath()
    {
        return ((null === $this->path) ? null : $this->getUploadDir() . '/' . $this->path);
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__ . '/../../../../../web/' . $this->getUploadDir();
    }

    public function setUploadDir($uploadDir)
    {
        $this->uploadDir = $uploadDir;
    }

    private function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return $this->uploadDir;
    }


    /**
     * Sets the value of forceFileName.
     *
     * @param mixed $forceFileName the force file name
     *
     * @return self
     */
    public function setForceFileName($forceFileName)
    {
        $this->forceFileName = $forceFileName;

        return $this;
    }
}

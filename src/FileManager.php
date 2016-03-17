<?php
/**
 * Created by NetBeans IDE.
 * User: boltegg
 */

class FileManager
{
    public function write($path, $content)
    {
        if (file_exists($path)) {

        } else {

            $dirPath = explode(DIRECTORY_SEPARATOR, $path);
            $fileName = array_pop($dirPath);

            $this->createDir($dirPath);
        }
        return $this->writeFile($path, $content);
    }

    public function read($file){
        if(file_exists($file)){
            return file_get_contents($file);
        } else {
            return false;
        }
    }

    public function createDir($dirs)
    {
        if(DIRECTORY_SEPARATOR == '/'){
            $dirs[0] = '/' . $dirs[0];
        }

        $dirPath = '';
        foreach ($dirs as $dir) {
            $dirPath = $dirPath . $dir . '/';
            if (!file_exists($dirPath)) {
                mkdir($dirPath);
            }
        }
    }

    protected function writeFile($path, $content)
    {
        $file = fopen($path, "w") or die("Unable to open file!");
        $status = fwrite($file, $content);
        fclose($file);

        if(file_get_contents($path) == $content){
            return true;
        } else {
            return false;
        }
    }
}
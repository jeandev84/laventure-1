<?php
namespace App\Service;



use Laventure\Component\Http\File\UploadedFile;

/**
 * @FileUploader
*/
class FileUploader
{

     /**
      * @var string
     */
     protected $path;


     /**
      * Constructor path
      *
      * Here name $path is already in container Dependency Injection
      * But if we use more advance param not resolved,
      * In this cas you must create a service provider for you service
      * for example FileUploaderServiceProvider and in instance you project
      * you can inject needs parameters, whose not already resolved.
      *
      * @param string $path
     */
     public function __construct(string $path)
     {
          $this->path = $path;
     }




     /**
      * @param UploadedFile $file
      * @return false|string|null
     */
     public function upload(UploadedFile $file)
     {
          $path = $this->path . '/uploads';

          return $file->move($path);
     }
}
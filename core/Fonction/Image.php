<?php
namespace Core\Fonction;

class Image {
    

   static function upload($file, $name_dir, $slug){



    if(strpos($file['type'], 'image') !== false){

                    //en prod il faudra peut être adapté pour trouver le repertoire
                    
                    $dir = $_SERVER['DOCUMENT_ROOT'].DS.'mvcbachelor'.DS.'web'.DS.'images'.DS.$name_dir.DS;
                     if(!file_exists($dir)) mkdir($dir,0777);


                /* recup l'extension du fichier */     
           $path_part = pathinfo($file['name']);
           $s_extension = $path_part['extension'];
            
            $nomfichier = $slug.'.'.$s_extension;
            move_uploaded_file($file['tmp_name'],$dir.$nomfichier);
            //ça peut servir si on redimensionne
            copy($dir.$nomfichier,$dir.'big'.DS.$nomfichier);

                
             
        
            $result = true;  
                    
        }else{
            $result = false;  

        }

       return $result;
   }
    
}

?>
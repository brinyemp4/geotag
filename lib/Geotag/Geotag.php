<?php
namespace Geotag;

use Exception;

class Geotag implements GeotagInterface
{
    public $geotagResource;
    public function __construct($geotagResource = null)
    {
        $this->geotagResource = $geotagResource;
    }

    public function read()
    {
        if (!isset($this->geotagResource)) 
        {
            throw new Exception("You need to specify geotag resource.");
        }

        if (!file_exists($this->geotagResource))
        {
            throw new Exception(sprintf('File - "%s" does not exist.', $this->geotagResource));
        }

        return exif_read_data($this->geotagResource);
    }

    public function write($data = [])
    {
        
    }
}

?>
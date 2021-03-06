<?php

namespace Glory\Bundle\ThemeBundle\Model;

/**
 * Description of Theme
 *
 * @author ForeverGlory
 */
class Theme
{

    protected $name;
    protected $dir;
    protected $format;
    protected $empty = true;
    protected $parent;
    protected $condition;

    public function __construct($data = array())
    {
        if (!empty($data)) {
            foreach ($data as $key => $val) {
                $this->$key = $val;
            }
            $this->empty = false;
        }
    }

    public function getDir()
    {
        return $this->dir;
    }

    public function isEmpty()
    {
        return $this->empty;
    }

    public function getName()
    {
        return $this->name;
    }

    public function generatePath($bundle, $path, $file)
    {
        return $this->dir . '/' . $this->formatBundle($bundle) . '/' . $this->formatPath($path) . '/' . $this->formatFile($file);
    }

    public function formatBundle($bundle)
    {
        return $bundle->getName();
    }

    public function formatPath($path)
    {
        return $path;
    }

    public function formatFile($file)
    {
        return $file;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function getCondition()
    {
        return $this->condition;
    }

}

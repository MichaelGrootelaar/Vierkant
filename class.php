<?php
  Class vierkant {
    public $width;
    public $height;
    public $color;

    function setWidth($width) {
      $this->width = $width;
    }

    function getWidth() {
      return $this->width;
    }

    function setHeight($height) {
      $this->height = $height;
    }

    function getHeight() {
      return $this->height;
    }

    function setColor($color) {
      $this->color = $color;
    }

    function getColor() {
      return $this->color;
    }
  }

  Class circle extends vierkant {
    public $radius;

    function setRadius($radius){
      $this->radius = $radius;
    }

    function getRadius(){
      return $this->radius;
    }
  }

  Class driehoek extends vierkant {
    public $rotation;

    function setRotation($rotation) {
      $this->rotation = $rotation;
    }

    function getRotation() {
      return $this->rotation;
    }
  }
?>

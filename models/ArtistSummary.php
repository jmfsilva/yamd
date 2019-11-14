<?php
class ArtistSummary {

    private $id;
    private $name;
    private $url;
    private $image;
    private $listeners;
    private $playcount;

    public function __construct($json)
    {
        $this->id = isset($json['mbid']) ? $json['mbid'] : "";
        $this->name = $json['name'];
        $this->url = isset($json['url']) ? $json['url'] : "";
        $this->image = isset($json['image']) ? $json['image'][3]['#text'] : "";
        $this->listeners = isset($json['listeners']) ? $json['listeners'] : "";
        $this->playcount = isset($json['playcount']) ? $json['playcount'] : "";
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getListeners()
    {
        return $this->listeners;
    }

    public function getPlaycount()
    {
        return $this->playcount;
    }
}
?>
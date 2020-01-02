<?php
class PagedList {
    private $items;
    private $totalResults;
    private $startIndex;
    private $itemsPerPage;
    private $startPage;

    public function __construct($items, $pageInfo)
    {
        $this->items = $items;
        $this->totalResults = (int)$pageInfo['opensearch:totalResults'];
        $this->startIndex = (int)$pageInfo['opensearch:startIndex'];
        $this->itemsPerPage = (int)$pageInfo['opensearch:itemsPerPage'];
        $this->startPage = (int)$pageInfo['opensearch:Query']['startPage'];
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getTotalResults()
    {
        return $this->totalResults;
    }

    public function getStartIndex()
    {
        return $this->startIndex;
    }

    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    public function getStartPage()
    {
        return $this->startPage;
    }


}
?>
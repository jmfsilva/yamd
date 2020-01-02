<?php
interface IMusicService {
    public function getTopArtists($page, $limit);
    public function searchArtists($q, $page, $limit);
}
?>
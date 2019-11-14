<?php
interface IMusicService {
    public function getArtist($id);
    public function getArtistTopAlbums($id);
    public function getAlbum($id);
    public function searchArtists($q, $page, $limit);
    public function searchAlbums($q, $page, $limit);
    public function searchTracks($q, $page, $limit);
    public function getTopArtists($page, $limit);
    public function getTopTracks($page, $limit);
}
?>
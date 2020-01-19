<?php
require 'IMusicService.php';
require 'PagedList.php';
require 'ArtistSummary.php';

$API_KEY = "59ce0a6364b337c95718781def05ffb6";
$BASE_URL = "http://ws.audioscrobbler.com/2.0/";

class LastFmMusicService implements IMusicService {

    private function getFromApi($url) { 
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_URL, $GLOBALS['BASE_URL'] . $url . "&format=json&api_key=" . $GLOBALS['API_KEY']);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
        ));
        $result = json_decode(curl_exec($ch), true);
        curl_close($ch);
        return $result;
    }

    public function searchArtists($q, $page, $limit) {
        $results = $this->getFromApi("?method=artist.search&artist=$q&page=$page&limit=$limit")['results'];
        function mapArtist($artists) {
            return new ArtistSummary($artists);
        }
        $artists = array_map('mapArtist', $results['artistmatches']['artist']);
        return new PagedList($artists, $results);
    }

    public function getTopArtists($page, $limit) {
        $results = $this->getFromApi("?method=chart.gettopartists&page=$page&limit=$limit");
        function mapArtist($artists) {
            return new ArtistSummary($artists);
        }
        return array_map('mapArtist', $results['artists']['artist']);
    }
}
?>
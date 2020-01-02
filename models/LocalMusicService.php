<?php
require 'IMusicService.php';
require 'ArtistSummary.php';

class LocalMusicService implements IMusicService {
	private function getFromLocal($filename) {
		$json = file_get_contents( __DIR__ . $filename);
		return json_decode($json,true);
	}

	public function getTopArtists($page, $size) {
		$results = $this->getFromLocal('/data/topArtists.json');
		function mapArtist($artists) {
            return new ArtistSummary($artists);
        }
        return array_map('mapArtist', $results['artists']['artist']);
	}

	public function searchArtists($q, $page, $limit) {
		$results = $this->getFromLocal('/data/searchArtists.json')['results'];
		function mapArtist($artists) {
            return new ArtistSummary($artists);
        }
        $artists = array_map('mapArtist', $results['artistmatches']['artist']);
        return new PagedList($artists, $results);
	}
}
?>
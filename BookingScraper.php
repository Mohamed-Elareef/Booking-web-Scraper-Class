<?php

class BookingScraper {
    private $url;
    private $html;

    public function __construct($url) {
        $this->url = $url;
        $this->html = $this->getHTML();
    }

    private function getHTML() {
        // Use cURL to retrieve HTML source code
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $html = curl_exec($ch);
        curl_close($ch);

        return $html;
    }

    public function getHotelName() {
        // Use PHP Simple HTML DOM Parser to parse HTML
        $dom = new simple_html_dom();
        $dom->load($this->html);
        // Extract hotel name
        return $dom->find('h1', 0)->plaintext;
    }

    public function getHotelRating() {
        // Use PHP Simple HTML DOM Parser to parse HTML
        $dom = new simple_html_dom();
        $dom->load($this->html);
        // Extract hotel rating
        return $dom->find('span.review-score-widget__score', 0)->plaintext;
    }

    public function getHotelReviews() {
        // Use PHP Simple HTML DOM Parser to parse HTML
        $dom = new simple_html_dom();
        $dom->load($this->html);
        // Extract hotel reviews
        return $dom->find('span.review-score-widget__text', 0)->plaintext;
    }

    public function getHotelPrice() {
        // Use PHP Simple HTML DOM Parser to parse HTML
        $dom = new simple_html_dom();
        $dom->load($this->html);
        // Extract hotel price
        return $dom->find('div.bui-price-display__value', 0)->plaintext;
    }
}

?>

# Booking Scraper

A simple PHP class that can be used to scrape hotel data from a hotel page on [Booking.com](https://www.booking.com/). The class uses the [PHP Simple HTML DOM Parser](https://simplehtmldom.sourceforge.io/) to parse the HTML source code of the web page and extract the specific data you are interested in.

## Getting Started

These instructions will help you use the class to scrape hotel data from a hotel page on Booking.com.

### Prerequisites

You will need to have the following software installed on your machine:
- PHP
- [cURL](https://www.php.net/manual/en/book.curl.php)
- [PHP Simple HTML DOM Parser](https://simplehtmldom.sourceforge.io/)

### Installing

1. Download the `BookingScraper.php` file.
2. Include the file in your project:
```php
require_once 'BookingScraper.php';
```
```php
$scraper = new BookingScraper('https://www.booking.com/hotel/us/example.html');
```

### Usage
You can use the following methods to extract specific data from the hotel page:


```php
getHotelName(): Returns the hotel name.
getHotelRating(): Returns the hotel rating.
getHotelReviews(): Returns the number of hotel reviews.
getHotelPrice(): Returns the hotel price.
```

### Example :

```php
$name = $scraper->getHotelName();
$rating = $scraper->getHotelRating();
$reviews = $scraper->getHotelReviews();
$price = $scraper->getHotelPrice();
```

### Note
Please be aware that scraping of public websites without permission is against their terms of service and could result in legal action. Additionally, the website might update their HTML structure and the scraper will break.


Please keep in mind that scraping the website without permission from the owner is illegal, and could lead to legal action, so make sure to always check the website's terms of service before scraping.



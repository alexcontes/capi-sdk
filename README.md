# seoaudit-sdk

## First release

Just released v1.0.1 which has Domdetailer API included.

## Installation

You can install **seoaudit-sdk** via composer or by downloading the source.

#### Via Composer:

**seoaudit-sdk** is available on Packagist as the
[`seoaudit/sdk`](http://packagist.org/packages/seoaudit/sdk) package.

## Quickstart

### Generate Domdetailer results for a domain

```php
// Send an SMS using Twilio's REST API and PHP
<?php
$api_key = "XXXXXXXXXXXXXXXXXXXX"; // Your API Key from SEOAudit

$client = new SEOAudit\Rest\Client($api_key);
$domdetailer_result = $client->domdetailer->get('google.com');

print $domdetailer_result;
```

That will output JSON that looks like this:

```javascript
{"domain":"google.com","mozLinks":"6859689","mozPA":"96.47","mozDA":"100","mozRank":"9.46","mozTrust":"9.33","mozSpam":"1","majesticStatReturned":"root","FB_comments":0,"FB_shares":44737849,"google_plus_one":0,"pinterest_pins":11278,"linkedin":5434,"majesticLinks":39102397978,"majesticRefDomains":18815934,"majesticRefEDU":285809230,"majesticRefGov":150016067,"majesticRefSubnets":426424,"majesticCF":100,"majesticTTF0Name":"Computers\/Internet\/Searching","majesticTTF0Value":93,"majesticTTF1Name":"Recreation\/Travel","majesticTTF1Value":91,"majesticTTF2Name":"Computers\/Internet\/On the Web","majesticTTF2Value":90,"majesticTF":99}
```

## Documentation

The documentation for the SEOAudit REST API is located [here][apidocs].

The PHP library documentation can be found [here][documentation].

## Versions

`seoaudit-sdk`'s current version is v1.0.1.

## Prerequisites

* PHP >= 5.3
* The PHP JSON extension

# Getting help

If you need help installing or using the library, please contact Web1 Support at alex@web1.co first. 

If you've instead found a bug in the library or would like new features added, go ahead and open issues or pull requests against this repo!

[apidocs]: https://spotlightlink.here
[documentation]: https://spotlightlink.here

# capi-sdk

## First release

Just released v1.0.1 which has Domdetailer API included.

## Installation

You can install **capi-sdk** via composer or by downloading the source.

#### Via Composer:

**capi-sdk** is available on Packagist as the
[`capi/sdk`](http://packagist.org/packages/capi/sdk) package.

## Quickstart

### Check Domain via Domdetailer

```php
// Check Domain via Domdetailer
<?php
$api_key = "XXXXXXXXXXXXXXXXXXXX"; // Your API Key from CAPI

$client = new CAPI\Rest\Client($api_key);
$domdetailer_result = $client->get('domdetailer/check-domain', ['domain' => 'google.com']);

print $domdetailer_result;
```

That will output JSON that looks like this:

```javascript
{"domain":"google.com","mozLinks":"6859689","mozPA":"96.47","mozDA":"100","mozRank":"9.46","mozTrust":"9.33","mozSpam":"1","majesticStatReturned":"root","FB_comments":0,"FB_shares":44737849,"google_plus_one":0,"pinterest_pins":11278,"linkedin":5434,"majesticLinks":39102397978,"majesticRefDomains":18815934,"majesticRefEDU":285809230,"majesticRefGov":150016067,"majesticRefSubnets":426424,"majesticCF":100,"majesticTTF0Name":"Computers\/Internet\/Searching","majesticTTF0Value":93,"majesticTTF1Name":"Recreation\/Travel","majesticTTF1Value":91,"majesticTTF2Name":"Computers\/Internet\/On the Web","majesticTTF2Value":90,"majesticTF":99}
```

## Documentation

The documentation for the CAPI REST API is located [here][apidocs].

The PHP library documentation can be found [here][documentation].

## Versions

`capi-sdk`'s current version is v1.0.1.

## Prerequisites

* PHP >= 5.3
* The PHP JSON extension

# Getting help

If you need help installing or using the library, please contact Web1 Support at alex@web1.co first. 

If you've instead found a bug in the library or would like new features added, go ahead and open issues or pull requests against this repo!

[apidocs]: https://spotlightlink.here
[documentation]: https://spotlightlink.here

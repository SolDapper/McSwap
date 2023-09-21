# McSwap
The Open Source Compressed NFT Swap Interface.
* Developed by [SolDapper](https://twitter.com/SolDapper) Web3 Studio in support of [McDegens DAO](https://twitter.com/McDegensDAO)

## Demo
[McSwap.xyz](https://mcswap.xyz)

## Support
[Discord](https://discord.com/invite/mcdegensdao)

## Requirements
* A registered domain name.
* Basic Linux web hosting with PHP.
* [Helius](https://www.helius.dev) or other cNFT compatible RPC endpoint.

## Install

## Configure
1. Open the RPC proxy config file: [config/config.php](https://github.com/McDegens-DAO/McSwap/blob/main/config/config.php)
* Add your Helius key on line #2
* Add your domain to the whitelist
```php
<?php
$key = "YOUR_HELIUS_KEY";
$path = "https://rpc.helius.xyz/?api-key=".$key;
$whitelist = array("https://your-domain-name.com");
```
2. Open the javascript settings file: [config/settings.js](https://github.com/McDegens-DAO/McSwap/blob/main/config/settings.js)
```javascript
var s = "JavaScript syntax highlighting";
alert(s);
```






## Skins

## Deeplinks

## Create Swap Proposal

## Execute Swap Proposal

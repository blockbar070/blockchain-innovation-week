<?php

$logos = [];

$logos[] = [
  'name' => 'btc',
  'title' => 'Bitcoin',
  'urls' => [
    './lineup/the-huge-potential-for-bitcoin-komodo',
    './lineup/what-is-blockchain-why-should-i-care',
    './lineup/ama-met-robert-reinder-nederhoed-en-thomas-kemmere'
  ],
];

$logos[] = [
  'name' => 'espeo',
  'title' => 'Espeo Blockchain',
  'urls' => ['https://espeoblockchain.com/'],
];

$logos[] = [
  'name' => 'tht',
  'title' => 'The Hague Tech',
  'urls' => ['https://www.thehaguetech.com/'],
];

$logos[] = [
  'name' => 'impactcity',
  'title' => 'Impact City',
  'urls' => ['https://impactcity.nl/']
];

$logos[] = [
  'name' => 'rchain',
  'title' => 'RChain',
  'urls' => [
    './lineup/rchain-workshop-coding-smart-contracts',
    './lineup/concurrent-computation-for-a-secure-scalable-and-sustainable-blockchain'
  ]
];

$logos[] = [
  'name' => 'zcash',
  'title' => 'ZCash',
  'urls' => [
    './lineup/zksnarks-what-do-they-do'
  ]
];

$logos[] = [
  'name' => 'pepe',
  'title' => 'CryptoPepes',
  'urls' => [
    'https://cryptopepes.io'
  ]
];

$logos[] = [
  'name' => 'komodo',
  'title' => 'Komodo',
  'urls' => [
    './lineup/barterdex-workshop',
    './lineup/the-huge-potential-for-bitcoin-komodo'
  ]
];

$logos[] = [
  'name' => 'trezor',
  'title' => 'Trezor',
  'urls' => ['./lineup/why-how-to-use-hardware-wallets']
];

$logos[] = [
  'name' => 'steemit',
  'title' => 'Steemit',
  'urls' => [
    './lineup/why-how-to-use-hardware-wallets',
    './lineup/steemit-earn-money-by-using-social-media',
    './lineup/your-first-steps-on-steemit'
  ]
];

$logos[] = [
  'name' => 'eos',
  'title' => 'EOS',
  'urls' => ['./lineup/eos-the-governed-chain']
];

$logos[] = [
  'name' => 'dtube',
  'title' => 'DTube',
  'urls' => ['https://d.tube/']
];

$logos[] = [
  'name' => 'ethereum',
  'title' => 'Ethereum',
  'urls' => [
    './lineup/cryptopepes-a-brief-introduction',
    './lineup/ethergoo-and-idle-games',
    './lineup/human-readable-smart-contracts'
  ]
];

$logos[] = [
  'name' => 'rabobank',
  'title' => 'Rabobank',
  'urls' => [
    './lineup/public-blockchain-technology-generations-their-challenges-and-solutions',
    './lineup/ethereum-in-an-enterprise-context-quorum'
  ]
];

$logos[] = [
  'name' => 'ing',
  'title' => 'ING',
  'urls' => [
    './lineup/how-to-preserve-privacy-on-a-blockchain'
  ]
];

$logos[] = [
  'name' => 'pii',
  'title' => 'Peace Innovation Institute',
  'urls' => [
    './lineup/peace-innovation-lab',
    './lineup/what-implemented-impact-looks-like-meet-the-doers',
    './lineup/collaborative-open-innovation-in-science-with-knowledge-knockon-effects'
  ]
];

function getAllLogos($logos) {
  // Randomize logos
  shuffle($logos);
  // Cut the last logo of
  array_splice($logos, -1);
  // Show all items
  foreach ($logos as $key => $logo) {
    $randomUrl = $logo['urls'][rand(0, sizeof($logo['urls'])-1)];
    ?>
    <li class="item">
      <a href="<?php echo $randomUrl; ?>"
         title="<?php echo $logo['title']; ?>"
         target="<?php echo strpos($randomUrl, 'http') >= -1 ? '_blank' : '_self'; ?>">
        <img src="./assets/img/logo/<?php echo $logo['name']; ?>.png"
          alt="<?php echo $logo['title']; ?> logo">
      </a>
    </li>
  <?php }
}

?>
<ul class="honeycomb">
  <?php getAllLogos($logos); ?>
</ul>

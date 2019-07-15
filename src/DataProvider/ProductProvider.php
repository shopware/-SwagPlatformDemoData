<?php declare(strict_types=1);

namespace Swag\PlatformDemoData\DataProvider;

use Shopware\Core\Content\Product\Aggregate\ProductVisibility\ProductVisibilityDefinition;
use Shopware\Core\Defaults;
use Shopware\Core\Framework\Uuid\Uuid;

class ProductProvider extends DemoDataProvider
{
    private const LOREM_IPSUM = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.';
    public function getPriority(): int
    {
        return 400;
    }

    public function getAction(): string
    {
        return 'upsert';
    }

    public function getEntity(): string
    {
        return 'product';
    }

    public function getPayload(): array
    {
        $taxId = $this->getTaxId();
        $storefrontSalesChannel = $this->getStorefrontSalesChannel();

        return [
            [
                'id' => '11dc680240b04f469ccba354cbf0b967',
                'productNumber' => 'SW10002',
                'active' => true,
                'taxId' => $taxId,
                'stock' => 10,
                'purchaseUnit' => 1.0,
                'referenceUnit' => 1.0,
                'shippingFree' => true,
                'purchasePrice' => 950,
                'weight' => 45.0,
                'width' => 590.0,
                'height' => 600.0,
                'length' => 840.0,
                'releaseDate' => new \DateTimeImmutable(),
                'displayInListing' => true,
                'name' => [
                    'de-DE' => 'Hauptartikel mit erweiterten Preisen',
                    'en-GB' => 'Product with advanced prices'
                ],
                'description' => [
                    'de-DE' => self::LOREM_IPSUM,
                    'en-GB' => self::LOREM_IPSUM
                ],
                'manufacturer' => [
                    'id' => 'cc1c20c365d34cfb88bfab3c3e81d350',
                    'name' => [
                        'de-DE' => 'Shopware Freizeit',
                        'en-GB' => 'Shopware Freetime'
                    ]
                ],
                'media' => [
                    [
                        'id' => '84356a71233d4b3e9f417dcc8850c82f',
                        'position' => 1,
                        'mediaId' => '84356a71233d4b3e9f417dcc8850c82f'
                    ]
                ],
                'coverId' => '84356a71233d4b3e9f417dcc8850c82f',
                'categories' => [
                    [
                        'id' => '251448b91bc742de85643f5fccd89051'
                    ]
                ],
                'price' => [[
                    'net' => 798.3199999999999,
                    'gross' => 950,
                    'linked' => true,
                    'currencyId' => Defaults::CURRENCY,
                ]],
                'prices' => [
                    [
                        'ruleId' => '28caae75a5624f0d985abd0eb32aa160',
                        'price' => [[
                            'net' => 630.25,
                            'gross' => 750,
                            'linked' => true,
                            'currencyId' => Defaults::CURRENCY,
                        ]],
                        'quantityStart' => 12,
                        'quantityEnd' => null
                    ],
                    [
                        'ruleId' => '28caae75a5624f0d985abd0eb32aa160',
                        'price' => [[
                            'net' => 672.27,
                            'gross' => 800,
                            'linked' => true,
                            'currencyId' => Defaults::CURRENCY,
                        ]],
                        'quantityStart' => 1,
                        'quantityEnd' => 11
                    ]
                ],
                'visibilities' => [
                    [
                        'salesChannelId' => $storefrontSalesChannel,
                        'visibility' => ProductVisibilityDefinition::VISIBILITY_ALL
                    ]
                ]
            ],
            [
                'id' => '1901dc5e888f4b1ea4168c2c5f005540',
                'productNumber' => 'SW100013',
                'active' => false,
                'taxId' => $taxId,
                'stock' => 40,
                'purchaseUnit' => 250.0,
                'referenceUnit' => 250.0,
                'shippingFree' => false,
                'purchasePrice' => 1.99,
                'releaseDate' => new \DateTimeImmutable(),
                'displayInListing' => true,
                'name' => [
                    'de-DE' => 'Hauptartikel mit Bewertungen',
                    'en-GB' => 'Product with reviews'
                ],
                'description' => [
                    'de-DE' => self::LOREM_IPSUM,
                    'en-GB' => self::LOREM_IPSUM
                ],
                'manufacturer' => [
                    'id' => '2326d67406134c88bcf80e52d9d2ecb7',
                    'name' => [
                        'de-DE' => 'Shopware Lebensmittel',
                        'en-GB' => 'Shopware Food'
                    ]
                ],
                'media' => [
                    [
                        'id' => '6968ad64888844679918c638e449ffc5',
                        'position' => 1,
                        'mediaId' => '6968ad64888844679918c638e449ffc5'
                    ]
                ],
                'coverId' => '6968ad64888844679918c638e449ffc5',
                'categories' => [
                    [
                        'id' => 'bb22b05bff9140f3808b1cff975b75eb'
                    ]
                ],
                'price' => [[
                    'net' => 1.67,
                    'gross' => 1.99,
                    'linked' => true,
                    'currencyId' => Defaults::CURRENCY,
                ]],
                'visibilities' => [
                    [
                        'salesChannelId' => $storefrontSalesChannel,
                        'visibility' => ProductVisibilityDefinition::VISIBILITY_ALL
                    ]
                ],
                'properties' => [
                    [
                        'id' => '22bdaee755804c1d8099c0d3696e852c'
                    ],
                    [
                        'id' => '77421c4f75af40c8a57657cdc2ad49a2'
                    ],
                ]
            ],
            [
                'id' => '2a88d9b59d474c7e869d8071649be43c',
                'productNumber' => 'SW10001',
                'active' => true,
                'taxId' => $taxId,
                'stock' => 10,
                'purchaseUnit' => 1.0,
                'referenceUnit' => 1.0,
                'shippingFree' => false,
                'purchasePrice' => 495.95,
                'weight' => 0.17,
                'releaseDate' => new \DateTimeImmutable(),
                'displayInListing' => true,
                'name' => [
                    'de-DE' => 'Hauptartikel',
                    'en-GB' => 'Main product'
                ],
                'description' => [
                    'de-DE' => self::LOREM_IPSUM,
                    'en-GB' => self::LOREM_IPSUM
                ],
                'manufacturer' => [
                    'id' => '7f24e96676e944b0a0addc20d56728cb',
                    'name' => [
                        'de-DE' => 'Shopware Kleidung',
                        'en-GB' => 'Shopware Fashion'
                    ]
                ],
                'media' => [
                    [
                        'id' => '70e352200b5c45098dc65a5b47094a2a',
                        'position' => 1,
                        'mediaId' => '70e352200b5c45098dc65a5b47094a2a'
                    ]
                ],
                'coverId' => '70e352200b5c45098dc65a5b47094a2a',
                'categories' => [
                    [
                        'id' => '251448b91bc742de85643f5fccd89051'
                    ]
                ],
                'price' => [[
                    'net' => 416.76,
                    'gross' => 495.95,
                    'linked' => true,
                    'currencyId' => Defaults::CURRENCY,
                ]],
                'visibilities' => [
                    [
                        'salesChannelId' => $storefrontSalesChannel,
                        'visibility' => ProductVisibilityDefinition::VISIBILITY_ALL
                    ]
                ],
                'properties' => [
                    [
                        'id' => '6f9359239c994b48b7de282ee19a714d'
                    ],
                    [
                        'id' => '78c53f3f6dd14eb4927978415bfb74db'
                    ],
                    [
                        'id' => '7cab88165ae5420f921232511b6e8f7d'
                    ],
                    [
                        'id' => 'dc6f98beeca44852beb078a9e8e21e7d'
                    ],
                ]
            ],
            [
                'id' => '3ac014f329884b57a2cce5a29f34779c',
                'productNumber' => 'SW10006',
                'active' => true,
                'taxId' => $taxId,
                'stock' => 50,
                'purchaseUnit' => 1.0,
                'referenceUnit' => 1.0,
                'shippingFree' => true,
                'purchasePrice' => 20,
                'weight' => 0.15,
                'releaseDate' => new \DateTimeImmutable(),
                'displayInListing' => true,
                'name' => [
                    'de-DE' => 'Hauptartikel mit Kennzeichnung Versandkostenfrei und Hervorhebung',
                    'en-GB' => 'Shipping free product with highlighting'
                ],
                'description' => [
                    'de-DE' => self::LOREM_IPSUM,
                    'en-GB' => self::LOREM_IPSUM
                ],
                'manufacturerId' => 'cc1c20c365d34cfb88bfab3c3e81d350',
                'media' => [
                    [
                        'id' => '2de02991cd0548a4ac6cc35cb11773a0',
                        'position' => 1,
                        'mediaId' => '2de02991cd0548a4ac6cc35cb11773a0'
                    ]
                ],
                'coverId' => '2de02991cd0548a4ac6cc35cb11773a0',
                'categories' => [
                    [
                        'id' => '2185182cbbd4462ea844abeb2a438b33'
                    ]
                ],
                'price' => [[
                    'net' => 15,
                    'gross' => 20,
                    'linked' => true,
                    'currencyId' => Defaults::CURRENCY,
                ]],
                'visibilities' => [
                    [
                        'salesChannelId' => $storefrontSalesChannel,
                        'visibility' => ProductVisibilityDefinition::VISIBILITY_ALL
                    ]
                ],
                'properties' => [
                    [
                        'id' => '5997d91dc0784997bdef68dfc5a08912'
                    ],
                    [
                        'id' => '78c53f3f6dd14eb4927978415bfb74db'
                    ],
                    [
                        'id' => 'c53fa30db00e4a84b4516f6b07c02e8d'
                    ],
                ]
            ],
            [
                'id' => '43a23e0c03bf4ceabc6055a2185faa87',
                'productNumber' => 'SW10005',
                'active' => true,
                'taxId' => $taxId,
                'stock' => 50,
                'purchaseUnit' => 1.0,
                'referenceUnit' => 1.0,
                'shippingFree' => true,
                'purchasePrice' => 19.99,
                'weight' => 0.5,
                'releaseDate' => new \DateTimeImmutable(),
                'displayInListing' => true,
                'name' => [
                    'de-DE' => 'Variantenartikel',
                    'en-GB' => 'Variant product'
                ],
                'description' => [
                    'de-DE' => self::LOREM_IPSUM,
                    'en-GB' => self::LOREM_IPSUM
                ],
                'manufacturerId' => '7f24e96676e944b0a0addc20d56728cb',
                'media' => [
                    [
                        'id' => '102ac62ba27347a688030a05c1790db7',
                        'position' => 1,
                        'mediaId' => '102ac62ba27347a688030a05c1790db7'
                    ]
                ],
                'coverId' => '102ac62ba27347a688030a05c1790db7',
                'categories' => [
                    [
                        'id' => '8de9b484c54f441c894774e5f57e485c'
                    ]
                ],
                'price' => [[
                    'net' => 16.799999999999997,
                    'gross' => 19.99,
                    'linked' => true,
                    'currencyId' => Defaults::CURRENCY,
                ]],
                'visibilities' => [
                    [
                        'salesChannelId' => $storefrontSalesChannel,
                        'visibility' => ProductVisibilityDefinition::VISIBILITY_ALL
                    ]
                ],
                'properties' => [
                    [
                        'id' => '5997d91dc0784997bdef68dfc5a08912'
                    ],
                    [
                        'id' => '7cab88165ae5420f921232511b6e8f7d'
                    ],
                    [
                        'id' => '96638a1c7ab847bbb3ca64167ab30a3e'
                    ],
                    [
                        'id' => 'acfd7586d02848f1ac801f4776efa414'
                    ],
                ],
                'configuratorSettings' => [
                    [
                        'optionId' => 'acfd7586d02848f1ac801f4776efa414',
                    ],
                    [
                        'optionId' => '2bfd278e87204807a890da4a3e81dd90',
                        'mediaId' => '6cbbdc03b43f4207be80b5f752d5a1c4'
                    ],
                    [
                        'optionId' => '5997d91dc0784997bdef68dfc5a08912',
                    ],
                    [
                        'optionId' => '52454db2adf942b2ac079a296f454a10',
                        'mediaId' => 'f69ab8ae42d04e17b2bab5ec2ff0a93c'
                    ],
                    [
                        'optionId' => 'ad735af1ebfb421e93e408b073c4a89a',
                        'mediaId' => '102ac62ba27347a688030a05c1790db7'
                    ]
                ],
                'children' => [
                    [
                        'productNumber' => 'SW10005.1',
                        'stock' => 50,
                        'options' => [
                            [
                                'id' => '2bfd278e87204807a890da4a3e81dd90'
                            ],
                            [
                                'id' => '5997d91dc0784997bdef68dfc5a08912'
                            ]
                        ]
                    ],
                    [
                        'productNumber' => 'SW10005.2',
                        'stock' => 50,
                        'options' => [
                            [
                                'id' => '2bfd278e87204807a890da4a3e81dd90'
                            ],
                            [
                                'id' => 'acfd7586d02848f1ac801f4776efa414'
                            ]
                        ]
                    ],
                    [
                        'productNumber' => 'SW10005.3',
                        'stock' => 50,
                        'options' => [
                            [
                                'id' => '52454db2adf942b2ac079a296f454a10'
                            ],
                            [
                                'id' => '5997d91dc0784997bdef68dfc5a08912'
                            ]
                        ]
                    ],
                    [
                        'productNumber' => 'SW10005.4',
                        'stock' => 50,
                        'options' => [
                            [
                                'id' => '52454db2adf942b2ac079a296f454a10'
                            ],
                            [
                                'id' => 'acfd7586d02848f1ac801f4776efa414'
                            ]
                        ]
                    ],
                    [
                        'productNumber' => 'SW10005.5',
                        'stock' => 50,
                        'options' => [
                            [
                                'id' => 'ad735af1ebfb421e93e408b073c4a89a'
                            ],
                            [
                                'id' => '5997d91dc0784997bdef68dfc5a08912'
                            ]
                        ]
                    ],
                    [
                        'productNumber' => 'SW10005.6',
                        'stock' => 50,
                        'options' => [
                            [
                                'id' => 'ad735af1ebfb421e93e408b073c4a89a'
                            ],
                            [
                                'id' => 'acfd7586d02848f1ac801f4776efa414'
                            ]
                        ]
                    ]
                ]
            ],
            [
                'id' => 'c7bca22753c84d08b6178a50052b4146',
                'productNumber' => 'SW10007',
                'active' => true,
                'taxId' => $taxId,
                'stock' => 50,
                'purchaseUnit' => 1.0,
                'referenceUnit' => 1.0,
                'shippingFree' => true,
                'purchasePrice' => 19.99,
                'releaseDate' => new \DateTimeImmutable(),
                'displayInListing' => true,
                'name' => [
                    'de-DE' => 'Hauptartikel mit Eigenschaften',
                    'en-GB' => 'Main product with properties'
                ],
                'description' => [
                    'de-DE' => self::LOREM_IPSUM,
                    'en-GB' => self::LOREM_IPSUM
                ],
                'manufacturerId' => '7f24e96676e944b0a0addc20d56728cb',
                'media' => [
                    [
                        'id' => '5808d194947f415495d9782d8fdc92ae',
                        'position' => 1,
                        'mediaId' => '5808d194947f415495d9782d8fdc92ae'
                    ]
                ],
                'coverId' => '5808d194947f415495d9782d8fdc92ae',
                'categories' => [
                    [
                        'id' => '2185182cbbd4462ea844abeb2a438b33'
                    ]
                ],
                'price' => [[
                    'net' => 16.799999999999997,
                    'gross' => 19.99,
                    'linked' => true,
                    'currencyId' => Defaults::CURRENCY,
                ]],
                'visibilities' => [
                    [
                        'salesChannelId' => $storefrontSalesChannel,
                        'visibility' => ProductVisibilityDefinition::VISIBILITY_ALL
                    ]
                ],
                'properties' => [
                    [
                        'id' => '41e5013b67d64d3a92b7a275da8af441'
                    ],
                    [
                        'id' => '5193ffa5de8648a1bcfba1fa8a26c02b'
                    ],
                    [
                        'id' => '54147692cbfb43419a6d11e26cad44dc'
                    ],
                    [
                        'id' => '5997d91dc0784997bdef68dfc5a08912'
                    ],
                    [
                        'id' => '78c53f3f6dd14eb4927978415bfb74db'
                    ],
                    [
                        'id' => '96638a1c7ab847bbb3ca64167ab30a3e'
                    ],
                    [
                        'id' => 'acfd7586d02848f1ac801f4776efa414'
                    ],
                ],
                'configuratorSettings' => [
                    [
                        'optionId' => 'acfd7586d02848f1ac801f4776efa414',
                    ],
                    [
                        'optionId' => '41e5013b67d64d3a92b7a275da8af441',
                    ],
                    [
                        'optionId' => '5997d91dc0784997bdef68dfc5a08912',
                    ],
                    [
                        'optionId' => '54147692cbfb43419a6d11e26cad44dc',
                    ],
                ],
                'children' => [
                    [
                        'productNumber' => 'SW10007.1',
                        'stock' => 50,
                        'options' => [
                            [
                                'id' => '41e5013b67d64d3a92b7a275da8af441'
                            ],
                        ]
                    ],
                    [
                        'productNumber' => 'SW10007.2',
                        'stock' => 50,
                        'options' => [
                            [
                                'id' => '54147692cbfb43419a6d11e26cad44dc'
                            ],
                        ]
                    ],
                    [
                        'productNumber' => 'SW10007.3',
                        'stock' => 50,
                        'options' => [
                            [
                                'id' => '5997d91dc0784997bdef68dfc5a08912'
                            ],
                        ]
                    ],
                    [
                        'productNumber' => 'SW10007.4',
                        'stock' => 50,
                        'options' => [
                            [
                                'id' => 'acfd7586d02848f1ac801f4776efa414'
                            ],
                        ]
                    ],
                ]
            ]
        ];
    }

    private function getTaxId(): string
    {
        $result = $this->connection->fetchColumn('
            SELECT LOWER(HEX(COALESCE(
                (SELECT `id` FROM `tax` WHERE tax_rate = "19.00" LIMIT 1),
	            (SELECT `id` FROM `tax`  LIMIT 1)
            )))
        ');

        if (!$result) {
            throw new \RuntimeException('No tax found, please make sure that basic data is available by running the migrations.');
        }

        return (string) $result;
    }

    private function getStorefrontSalesChannel(): string
    {
        $result = $this->connection->fetchColumn('
            SELECT LOWER(HEX(`id`))
            FROM `sales_channel`
            WHERE `type_id` = :storefront_type
        ', ['storefront_type' => Uuid::fromHexToBytes(Defaults::SALES_CHANNEL_TYPE_STOREFRONT)]);

        if (!$result) {
            throw new \RuntimeException('No tax found, please make sure that basic data is available by running the migrations.');
        }

        return (string) $result;
    }
}
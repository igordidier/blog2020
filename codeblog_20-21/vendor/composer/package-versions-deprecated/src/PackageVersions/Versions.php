<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99@c8c9aa8a14cc3d3bec86d0a8c3fa52ea79936855',
  'doctrine/annotations' => '1.10.4@bfe91e31984e2ba76df1c1339681770401ec262f',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.11.0@0d4e1a8b29dd987704842f0465aded378f441dca',
  'doctrine/doctrine-bundle' => '1.12.9@f768b8f4c0de0fe37a5cf83a5cb7f365c70c2c83',
  'doctrine/doctrine-cache-bundle' => '1.4.0@6bee2f9b339847e8a984427353670bad4e7bdccb',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'egulias/email-validator' => '2.1.21@563d0cdde5d862235ffe24a158497f4d490191b5',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'monolog/monolog' => '1.25.5@1817faadd1846cd08be9a49e905dc68823bc38c0',
  'ocramius/proxy-manager' => '2.8.0@ac1dd414fd114cfc0da9930e0ab46063c2f5e62a',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/asset' => 'v4.4.13@384d36d53771955d432f0e0bf6470f1c9e6a716f',
  'symfony/cache' => 'v4.4.13@f45591fff4ecb08825c41f5b7ec51218510301c8',
  'symfony/config' => 'v4.4.13@043bf8652c307ebc23ce44047d215eec889d8850',
  'symfony/console' => 'v4.4.13@b39fd99b9297b67fb7633b7d8083957a97e1e727',
  'symfony/contracts' => 'v1.1.10@011c20407c4b99d454f44021d023fb39ce23b73d',
  'symfony/debug' => 'v4.4.13@aeb73aca16a8f1fe958230fe44e6cf4c84cbb85e',
  'symfony/dependency-injection' => 'v4.4.13@384c2601e5a6228d60b041911d63f010e0885ffb',
  'symfony/doctrine-bridge' => 'v4.4.13@f0a138b4c27cf2d82a818762fe8f58a6cefda92e',
  'symfony/dotenv' => 'v4.4.13@a9eb95c87c2965d0e7dfda9c5e87e4fb590d1f4e',
  'symfony/error-handler' => 'v4.4.13@2434fb32851f252e4f27691eee0b77c16198db62',
  'symfony/event-dispatcher' => 'v4.4.13@3e8ea5ccddd00556b86d69d42f99f1061a704030',
  'symfony/expression-language' => 'v4.4.13@89f0e2c82d8c12975180f993383decbb810ad73e',
  'symfony/filesystem' => 'v4.4.13@27575bcbc68db1f6d06218891296572c9b845704',
  'symfony/finder' => 'v4.4.13@2a78590b2c7e3de5c429628457c47541c58db9c7',
  'symfony/flex' => 'v1.9.4@115e67f76ba95d70946a6e0b15d4578bf04927c3',
  'symfony/form' => 'v4.4.13@6407cd34ff3ff8354966c2e444b8a34d96e87ac8',
  'symfony/framework-bundle' => 'v4.4.13@19298dbd430ae443dadc6a16dbda9cb0ca317060',
  'symfony/http-foundation' => 'v4.4.13@e3e5a62a6631a461954d471e7206e3750dbe8ee1',
  'symfony/http-kernel' => 'v4.4.13@2bb7b90ecdc79813c0bf237b7ff20e79062b5188',
  'symfony/inflector' => 'v4.4.13@3330be44724db42f0aa493002ae63f5d29f8d5f7',
  'symfony/intl' => 'v4.4.13@18e708f12e3d3b64a35761ab191de6302b7de4f6',
  'symfony/mime' => 'v4.4.13@50ad671306d3d3ffb888d95b4fb1859496831e3a',
  'symfony/monolog-bridge' => 'v4.4.13@abcfb15cfc809e449b24a7094aab1d63f4828029',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v4.4.13@376bd3a02e7946dbf90b01563361b47dde425025',
  'symfony/polyfill-intl-icu' => 'v1.18.1@4e45a6e39041a9cc78835b11abc47874ae302a55',
  'symfony/polyfill-intl-idn' => 'v1.18.1@5dcab1bc7146cf8c1beaa4502a3d9be344334251',
  'symfony/polyfill-intl-normalizer' => 'v1.18.1@37078a8dd4a2a1e9ab0231af7c6cb671b2ed5a7e',
  'symfony/polyfill-mbstring' => 'v1.18.1@a6977d63bf9a0ad4c65cd352709e230876f9904a',
  'symfony/polyfill-php72' => 'v1.18.1@639447d008615574653fb3bc60d1986d7172eaae',
  'symfony/polyfill-php73' => 'v1.18.1@fffa1a52a023e782cdcc221d781fe1ec8f87fcca',
  'symfony/polyfill-php80' => 'v1.18.1@d87d5766cbf48d72388a9f6b85f280c8ad51f981',
  'symfony/process' => 'v4.4.13@65e70bab62f3da7089a8d4591fb23fbacacb3479',
  'symfony/property-access' => 'v4.4.13@71039619d0d5b9529f984e7c18e5d6c4e965825b',
  'symfony/property-info' => 'v4.4.13@8205052790eea648f60f2f04a214537425fc900b',
  'symfony/routing' => 'v4.4.13@e3387963565da9bae51d1d3ab8041646cc93bd04',
  'symfony/security-bundle' => 'v4.4.13@ad026271cc5d1b2f57e8f5fbe9f3acc75bd2181e',
  'symfony/security-core' => 'v4.4.13@3a78edfb975d4c35260af257f8dbe931ea9001cf',
  'symfony/security-csrf' => 'v4.4.13@8788f6d4c8555b34d6f32f42b996b937b473f6b3',
  'symfony/security-guard' => 'v4.4.13@699162c3a9fcceb5ec8bce35a3dc2fcb79c6751e',
  'symfony/security-http' => 'v4.4.13@473da00f1244ead079619628a3781622877efdd3',
  'symfony/serializer' => 'v4.4.13@f8e1211fdd045d22bba98054fd7969bec955810a',
  'symfony/serializer-pack' => 'v1.0.3@9bbce72dcad0cca797b678d3bfb764cf923ab28a',
  'symfony/stopwatch' => 'v4.4.13@f51fb90df1154a7f75987198a9689e28f91e6a50',
  'symfony/swiftmailer-bundle' => 'v3.4.0@553d2474288349faed873da8ab7c1551a00d26ae',
  'symfony/translation' => 'v4.4.13@700e6e50174b0cdcf0fa232773bec5c314680575',
  'symfony/twig-bridge' => 'v4.4.13@448aefe8183078330f7e5021032ff6c6410851c9',
  'symfony/twig-bundle' => 'v4.4.13@c83e606bdc54504a1b2bcd8807b5dd139187b4a4',
  'symfony/validator' => 'v4.4.13@cee2f13ddc3fc0cfa2f5b115eaae860cef9c056f',
  'symfony/var-dumper' => 'v4.4.13@1bef32329f3166486ab7cb88599cae4875632b99',
  'symfony/var-exporter' => 'v4.4.13@09f0aec4b8bfc25c1dd306e6203cf055c9886560',
  'symfony/web-link' => 'v4.4.13@b862a104ef3a233b6f12fdbf6b57113308af79ff',
  'symfony/yaml' => 'v4.4.13@e2a69525b11a33be51cb00b8d6d13a9258a296b1',
  'twig/twig' => 'v3.0.5@9b76b1535483cdf4edf01bb787b0217b62bd68a5',
  'webimpress/safe-writer' => '2.1.0@5cfafdec5873c389036f14bf832a5efc9390dcdd',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'doctrine/data-fixtures' => '1.4.4@16a03fadb5473f49aad70384002dfd5012fe680e',
  'doctrine/doctrine-fixtures-bundle' => '3.3.2@a2179f447425d9e784fb9bc224e533a0ab083b98',
  'nikic/php-parser' => 'v4.10.0@1c13d05035deff45f1230ca68bd7d74d621762d9',
  'symfony/browser-kit' => 'v4.4.13@f53310646af9901292488b2ff36e26ea10f545f5',
  'symfony/css-selector' => 'v4.4.13@bf17dc9f6ce144e41f786c32435feea4d8e11dcc',
  'symfony/debug-bundle' => 'v4.4.13@12a020d14b4f6f3a5cfb46cd83836b78be036210',
  'symfony/debug-pack' => 'v1.0.8@7310a66f9f81c9f292ff9089f0b0062386cb83fb',
  'symfony/dom-crawler' => 'v4.4.13@6dd1e7adef4b7efeeb9691fd619279027d4dcf85',
  'symfony/maker-bundle' => 'v1.21.1@da629093c7bf9abd9a6a0f232a43bbb1b88de68d',
  'symfony/phpunit-bridge' => 'v5.1.5@e7d37c91486a0f9eed58a8c23822e1870ea36db5',
  'symfony/profiler-pack' => 'v1.0.5@29ec66471082b4eb068db11eb4f0a48c277653f7',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/web-profiler-bundle' => 'v4.4.13@9dbfc8cd80b6058310f3bd423c194f6da0c09116',
  'symfony/web-server-bundle' => 'v4.4.13@d617765de8a65d4d42f1b2843c7df36645936216',
  'paragonie/random_compat' => '2.*@d1f9c4b53ebe6d38cac79b69f86e711f034ae85a',
  'symfony/polyfill-ctype' => '*@d1f9c4b53ebe6d38cac79b69f86e711f034ae85a',
  'symfony/polyfill-iconv' => '*@d1f9c4b53ebe6d38cac79b69f86e711f034ae85a',
  'symfony/polyfill-php71' => '*@d1f9c4b53ebe6d38cac79b69f86e711f034ae85a',
  'symfony/polyfill-php70' => '*@d1f9c4b53ebe6d38cac79b69f86e711f034ae85a',
  'symfony/polyfill-php56' => '*@d1f9c4b53ebe6d38cac79b69f86e711f034ae85a',
  '__root__' => 'dev-master@d1f9c4b53ebe6d38cac79b69f86e711f034ae85a',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}

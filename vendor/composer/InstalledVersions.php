<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;

/**
 * This class is copied in every Composer installed project and available to all
 *
 * To require it's presence, you can require `composer-runtime-api ^2.0`
 */
class InstalledVersions
{
    private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-main',
    'version' => 'dev-main',
    'aliases' => 
    array (
    ),
    'reference' => '44aae40be807f75ac5d80b050db70cd36fb55ae9',
    'name' => 'vardot/varbase-project',
  ),
  'versions' => 
  array (
    'abraham/twitteroauth' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f5cda73d1deae8b9e3e54f1572a6d28d03e06644',
    ),
    'asm89/stack-cors' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b9c31def6a83f84b4d4a40d35996d375755f0e08',
    ),
    'bower-asset/c3' => 
    array (
      'pretty_version' => 'v0.7.20',
      'version' => '0.7.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '2f3cddb818065f1d0c45f562745d4249e12980ff',
    ),
    'bower-asset/chartjs' => 
    array (
      'pretty_version' => 'v2.7.3',
      'version' => '2.7.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '924a66bae23f7e938531024951f7251d46785473',
    ),
    'bower-asset/d3' => 
    array (
      'pretty_version' => 'v5.16.0',
      'version' => '5.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c15b85ce115be200bd4ca473f97fcd0bb43bba07',
    ),
    'bower-asset/jquery' => 
    array (
      'pretty_version' => '3.6.0',
      'version' => '3.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e786e3d9707ffd9b0dd330ca135b66344dcef85a',
    ),
    'bower-asset/jquery-ui' => 
    array (
      'pretty_version' => '1.12.1',
      'version' => '1.12.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '44ecf3794cc56b65954cc19737234a3119d036cc',
    ),
    'bower-asset/jqueryui-touch-punch' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
      ),
      'reference' => '4bc009145202d9c7483ba85f3a236a8f3470354d',
    ),
    'bower-asset/objectfitpolyfill' => 
    array (
      'pretty_version' => 'v2.3.5',
      'version' => '2.3.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'da2872d6c585655cd5a88ecf324dceec41aeef5e',
    ),
    'caxy/php-htmldiff' => 
    array (
      'pretty_version' => 'v0.1.12',
      'version' => '0.1.12.0',
      'aliases' => 
      array (
      ),
      'reference' => '7fb8aa0ad77864f1d3604ae4a31af9cbabb91485',
    ),
    'chi-teck/drupal-code-generator' => 
    array (
      'pretty_version' => '1.33.1',
      'version' => '1.33.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5f814e980b6f9cf1ca8c74cc9385c3d81090d388',
    ),
    'composer/ca-bundle' => 
    array (
      'pretty_version' => '1.2.10',
      'version' => '1.2.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '9fdb22c2e97a614657716178093cd1da90a64aa8',
    ),
    'composer/installers' => 
    array (
      'pretty_version' => 'v1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ae03311f45dfe194412081526be2e003960df74b',
    ),
    'composer/semver' => 
    array (
      'pretty_version' => '1.7.2',
      'version' => '1.7.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '647490bbcaf7fc4891c58f47b825eb99d19c377a',
    ),
    'cweagans/composer-patches' => 
    array (
      'pretty_version' => '1.7.8',
      'version' => '1.7.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a11aa64120baf5e8e18023c43bf40ac65483b24b',
    ),
    'defuse/php-encryption' => 
    array (
      'pretty_version' => 'v2.3.1',
      'version' => '2.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '77880488b9954b7884c25555c2a0ea9e7053f9d2',
    ),
    'doctrine/annotations' => 
    array (
      'pretty_version' => '1.13.1',
      'version' => '1.13.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
    ),
    'doctrine/cache' => 
    array (
      'pretty_version' => '1.12.1',
      'version' => '1.12.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4cf401d14df219fa6f38b671f5493449151c9ad8',
    ),
    'doctrine/collections' => 
    array (
      'pretty_version' => '1.6.7',
      'version' => '1.6.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '55f8b799269a1a472457bd1a41b4f379d4cfba4a',
    ),
    'doctrine/common' => 
    array (
      'pretty_version' => '2.13.3',
      'version' => '2.13.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f3812c026e557892c34ef37f6ab808a6b567da7f',
    ),
    'doctrine/event-manager' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '41370af6a30faa9dc0368c4a6814d596e81aba7f',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '1.4.4',
      'version' => '1.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '4bd5c1cdfcd00e9e2d8c484f79150f67e5d355d9',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e864bbf5904cb8f5bb334f99209b48018522f042',
    ),
    'doctrine/persistence' => 
    array (
      'pretty_version' => '1.3.8',
      'version' => '1.3.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '7a6eac9fb6f61bba91328f15aa7547f4806ca288',
    ),
    'doctrine/reflection' => 
    array (
      'pretty_version' => '1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fa587178be682efe90d005e3a322590d6ebb59a5',
    ),
    'drupal/ace_editor' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.3',
    ),
    'drupal/action' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/admin_audit_trail' => 
    array (
      'pretty_version' => '1.0.0-alpha1',
      'version' => '1.0.0.0-alpha1',
      'aliases' => 
      array (
      ),
      'reference' => '1.0.0-alpha1',
    ),
    'drupal/admin_toolbar' => 
    array (
      'pretty_version' => '2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.4',
    ),
    'drupal/adminimal_admin_toolbar' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.11',
    ),
    'drupal/adminimal_theme' => 
    array (
      'pretty_version' => '1.6.0',
      'version' => '1.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.6',
    ),
    'drupal/advanced_text_formatter' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2.0.0',
    ),
    'drupal/aggregator' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/allowed_formats' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.3',
    ),
    'drupal/anchor_link' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.7',
    ),
    'drupal/autocomplete_deluxe' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2.0.0',
    ),
    'drupal/automated_cron' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/ban' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/bartik' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/basic_auth' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/better_exposed_filters' => 
    array (
      'pretty_version' => '5.0.0-beta3',
      'version' => '5.0.0.0-beta3',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-5.0-beta3',
    ),
    'drupal/better_normalizers' => 
    array (
      'pretty_version' => '1.0.0-beta4',
      'version' => '1.0.0.0-beta4',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-beta4',
    ),
    'drupal/betterlogin' => 
    array (
      'pretty_version' => '1.5.0',
      'version' => '1.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.5',
    ),
    'drupal/big_pipe' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/blazy' => 
    array (
      'pretty_version' => '2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.4',
    ),
    'drupal/block' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/block_class' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.3',
    ),
    'drupal/block_content' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/block_content_permissions' => 
    array (
      'pretty_version' => '1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.10',
    ),
    'drupal/block_form_alter' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.2',
    ),
    'drupal/block_place' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/book' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/bootstrap' => 
    array (
      'pretty_version' => '3.23.0',
      'version' => '3.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.23',
    ),
    'drupal/bootstrap_barrio' => 
    array (
      'pretty_version' => '5.1.5',
      'version' => '5.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '5.1.5',
    ),
    'drupal/bootstrap_layouts' => 
    array (
      'pretty_version' => '5.2.0',
      'version' => '5.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-5.2',
    ),
    'drupal/breakpoint' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/captcha' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.2',
    ),
    'drupal/charts' => 
    array (
      'pretty_version' => '3.2.0',
      'version' => '3.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.2',
    ),
    'drupal/checklistapi' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.11',
    ),
    'drupal/chosen' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3.0.1',
    ),
    'drupal/chosen_lib' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'drupal/ckeditor' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/ckeditor_bidi' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3.1.0',
    ),
    'drupal/ckeditor_media_embed' => 
    array (
      'pretty_version' => '1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.10',
    ),
    'drupal/claro' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/classy' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/coffee' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.2',
    ),
    'drupal/color' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/color_field' => 
    array (
      'pretty_version' => '2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.4',
    ),
    'drupal/comment' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/config' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/config_filter' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.2',
    ),
    'drupal/config_ignore' => 
    array (
      'pretty_version' => '2.3.0',
      'version' => '2.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.3',
    ),
    'drupal/config_inspector' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.3',
    ),
    'drupal/config_perms' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.0',
    ),
    'drupal/config_translation' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/config_update' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.7',
    ),
    'drupal/consumers' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.11',
    ),
    'drupal/contact' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/content_lock' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.2',
    ),
    'drupal/content_moderation' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/content_moderation_notifications' => 
    array (
      'pretty_version' => '3.3.0',
      'version' => '3.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.3',
    ),
    'drupal/content_planner' => 
    array (
      'pretty_version' => '1.0.0-beta15',
      'version' => '1.0.0.0-beta15',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-beta15',
    ),
    'drupal/content_translation' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/contextual' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core' => 
    array (
      'pretty_version' => '8.9.17',
      'version' => '8.9.17.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a1416f2cc6701acc0cc6725bfeac3715e633fd9c',
    ),
    'drupal/core-annotation' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-assertion' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-bridge' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-class-finder' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-composer-scaffold' => 
    array (
      'pretty_version' => '8.9.17',
      'version' => '8.9.17.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c902d07cb49ef73777e2b33a39e54c2861a8c81d',
    ),
    'drupal/core-datetime' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-dependency-injection' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-diff' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-discovery' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-event-dispatcher' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-file-cache' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-file-security' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-filesystem' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-gettext' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-graph' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-http-foundation' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-php-storage' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-plugin' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-project-message' => 
    array (
      'pretty_version' => '8.9.17',
      'version' => '8.9.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '3f8fa28128f1fef68ee0e6647011a543ef92be5b',
    ),
    'drupal/core-proxy-builder' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-render' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-serialization' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-transliteration' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-utility' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-uuid' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/core-version' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/crop' => 
    array (
      'pretty_version' => '2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.1',
    ),
    'drupal/ctools' => 
    array (
      'pretty_version' => '3.7.0',
      'version' => '3.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.7',
    ),
    'drupal/ctools_block' => 
    array (
      'pretty_version' => '3.7.0',
      'version' => '3.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'drupal/ctools_views' => 
    array (
      'pretty_version' => '3.7.0',
      'version' => '3.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'drupal/datetime' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/datetime_range' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/dblog' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/default_content' => 
    array (
      'pretty_version' => 'dev-2.0.x',
      'version' => 'dev-2.0.x',
      'aliases' => 
      array (
        0 => '2.0.x-dev',
      ),
      'reference' => '1b71f729cb3dab927df29deba5c22c1f0c14e6fd',
    ),
    'drupal/devel' => 
    array (
      'pretty_version' => '4.1.1',
      'version' => '4.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4.1.1',
    ),
    'drupal/diff' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0',
    ),
    'drupal/drd_agent' => 
    array (
      'pretty_version' => '3.13.0',
      'version' => '3.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.13',
    ),
    'drupal/dropzonejs' => 
    array (
      'pretty_version' => '2.5.0',
      'version' => '2.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.5',
    ),
    'drupal/dropzonejs_eb_widget' => 
    array (
      'pretty_version' => '2.5.0',
      'version' => '2.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'drupal/ds' => 
    array (
      'pretty_version' => '3.13.0',
      'version' => '3.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.13',
    ),
    'drupal/ds_extras' => 
    array (
      'pretty_version' => '3.13.0',
      'version' => '3.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'drupal/dynamic_page_cache' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/editor' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/embed' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.4',
    ),
    'drupal/entity' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.2',
    ),
    'drupal/entity_block' => 
    array (
      'pretty_version' => '1.0.0-beta3',
      'version' => '1.0.0.0-beta3',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-beta3',
    ),
    'drupal/entity_browser' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.6',
    ),
    'drupal/entity_browser_enhanced' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0',
    ),
    'drupal/entity_browser_entity_form' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'drupal/entity_browser_generic_embed' => 
    array (
      'pretty_version' => '7.40.0',
      'version' => '7.40.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'drupal/entity_clone' => 
    array (
      'pretty_version' => '1.0.0-beta6',
      'version' => '1.0.0.0-beta6',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-beta6',
    ),
    'drupal/entity_embed' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.1',
    ),
    'drupal/entity_reference' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/entity_reference_revisions' => 
    array (
      'pretty_version' => '1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.9',
    ),
    'drupal/entity_usage' => 
    array (
      'pretty_version' => '2.0.0-beta3',
      'version' => '2.0.0.0-beta3',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.0-beta3',
    ),
    'drupal/entityqueue' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.2',
    ),
    'drupal/entityqueue_form_widget' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2.0.1',
    ),
    'drupal/extlink' => 
    array (
      'pretty_version' => '1.6.0',
      'version' => '1.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.6',
    ),
    'drupal/fast_404' => 
    array (
      'pretty_version' => '2.0.0-alpha5',
      'version' => '2.0.0.0-alpha5',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.0-alpha5',
    ),
    'drupal/features' => 
    array (
      'pretty_version' => '3.12.0',
      'version' => '3.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.12',
    ),
    'drupal/field' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/field_group' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.1',
    ),
    'drupal/field_layout' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/field_ui' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/file' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/file_mdm' => 
    array (
      'pretty_version' => '2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.1',
    ),
    'drupal/filter' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/flood_unblock' => 
    array (
      'pretty_version' => '3.2.0',
      'version' => '3.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3.2.0',
    ),
    'drupal/focal_point' => 
    array (
      'pretty_version' => '1.5.0',
      'version' => '1.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.5',
    ),
    'drupal/forum' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/genpass' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.1',
    ),
    'drupal/google_analytics' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.1',
    ),
    'drupal/google_analytics_reports' => 
    array (
      'pretty_version' => '3.0.0-rc3',
      'version' => '3.0.0.0-RC3',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.0-rc3',
    ),
    'drupal/google_analytics_reports_api' => 
    array (
      'pretty_version' => '3.0.0-rc3',
      'version' => '3.0.0.0-RC3',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'drupal/google_tag' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.4',
    ),
    'drupal/hal' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/help' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/help_topics' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/history' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/honeypot' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2.0.1',
    ),
    'drupal/image' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/image_resize_filter' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.1',
    ),
    'drupal/imageapi_optimize' => 
    array (
      'pretty_version' => 'dev-3.x',
      'version' => 'dev-3.x',
      'aliases' => 
      array (
        0 => '3.x-dev',
      ),
      'reference' => '0aee9762e39c94b0463e174a648216e2fec6ae12',
    ),
    'drupal/imagemagick' => 
    array (
      'pretty_version' => '3.2.0',
      'version' => '3.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.2',
    ),
    'drupal/inline_entity_form' => 
    array (
      'pretty_version' => '1.0.0-rc9',
      'version' => '1.0.0.0-RC9',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-rc9',
    ),
    'drupal/inline_form_errors' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/jquery_ui' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.4',
    ),
    'drupal/jquery_ui_datepicker' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.1',
    ),
    'drupal/jquery_ui_draggable' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.2',
    ),
    'drupal/jquery_ui_droppable' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.2',
    ),
    'drupal/jquery_ui_slider' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.1',
    ),
    'drupal/jquery_ui_touch_punch' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1.0.0',
    ),
    'drupal/jsonapi' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/jsonapi_extras' => 
    array (
      'pretty_version' => '3.19.0',
      'version' => '3.19.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.19',
    ),
    'drupal/l10n_client' => 
    array (
      'pretty_version' => '1.0.0-alpha2',
      'version' => '1.0.0.0-alpha2',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-alpha2',
    ),
    'drupal/language' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/layout_builder' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/layout_builder_at' => 
    array (
      'pretty_version' => '2.12.0',
      'version' => '2.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.12',
    ),
    'drupal/layout_builder_block_sanitizer' => 
    array (
      'pretty_version' => '1.0.0-alpha4',
      'version' => '1.0.0.0-alpha4',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-alpha4',
    ),
    'drupal/layout_builder_component_attributes' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1.2.1',
    ),
    'drupal/layout_builder_modal' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.1',
    ),
    'drupal/layout_builder_restrictions' => 
    array (
      'pretty_version' => '2.9.0',
      'version' => '2.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.9',
    ),
    'drupal/layout_discovery' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/layout_library' => 
    array (
      'pretty_version' => '1.0.0-beta2',
      'version' => '1.0.0.0-beta2',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-beta2',
    ),
    'drupal/lb_ux' => 
    array (
      'pretty_version' => '1.0.0-beta2',
      'version' => '1.0.0.0-beta2',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-beta2',
    ),
    'drupal/length_indicator' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.1',
    ),
    'drupal/libraries' => 
    array (
      'pretty_version' => '3.0.0-beta1',
      'version' => '3.0.0.0-beta1',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.0-beta1',
    ),
    'drupal/libraries_ui' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0',
    ),
    'drupal/link' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/link_attributes' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.11',
    ),
    'drupal/linkit' => 
    array (
      'pretty_version' => '4.3.0',
      'version' => '4.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-4.3',
    ),
    'drupal/locale' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/login_destination' => 
    array (
      'pretty_version' => '2.0.0-beta1',
      'version' => '2.0.0.0-beta1',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.0-beta1',
    ),
    'drupal/mail_edit' => 
    array (
      'pretty_version' => 'dev-1.x',
      'version' => 'dev-1.x',
      'aliases' => 
      array (
        0 => '1.x-dev',
      ),
      'reference' => 'c97c11ac8ad1f36bb6c86b9da934aab398377a7e',
    ),
    'drupal/mailsystem' => 
    array (
      'pretty_version' => '4.3.0',
      'version' => '4.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-4.3',
    ),
    'drupal/masonry' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.2',
    ),
    'drupal/masquerade' => 
    array (
      'pretty_version' => '2.0.0-beta4',
      'version' => '2.0.0.0-beta4',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.0-beta4',
    ),
    'drupal/maxlength' => 
    array (
      'pretty_version' => '1.0.0-rc1',
      'version' => '1.0.0.0-RC1',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-rc1',
    ),
    'drupal/media' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/media_entity_instagram' => 
    array (
      'pretty_version' => '3.0.5',
      'version' => '3.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '3.0.5',
    ),
    'drupal/media_entity_twitter' => 
    array (
      'pretty_version' => '2.7.0',
      'version' => '2.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.7',
    ),
    'drupal/media_library' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/media_library_edit' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.0',
    ),
    'drupal/media_library_form_element' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '2.0.3',
    ),
    'drupal/media_library_theme_reset' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.1',
    ),
    'drupal/media_revisions_ui' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2.0.0',
    ),
    'drupal/menu_admin_per_menu' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.3',
    ),
    'drupal/menu_block' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.7',
    ),
    'drupal/menu_link_content' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/menu_position' => 
    array (
      'pretty_version' => '1.0.0-beta1',
      'version' => '1.0.0.0-beta1',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-beta1',
    ),
    'drupal/menu_ui' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/metatag' => 
    array (
      'pretty_version' => '1.16.0',
      'version' => '1.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.16',
    ),
    'drupal/migrate' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/migrate_drupal' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/migrate_drupal_multilingual' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/migrate_drupal_ui' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/minimal' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/moderation_sidebar' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.4',
    ),
    'drupal/node' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/node_edit_protection' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0',
    ),
    'drupal/openapi' => 
    array (
      'pretty_version' => '2.0.0-rc3',
      'version' => '2.0.0.0-RC3',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.0-rc3',
    ),
    'drupal/openapi_jsonapi' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.0',
    ),
    'drupal/openapi_rest' => 
    array (
      'pretty_version' => '2.0.0-rc2',
      'version' => '2.0.0.0-RC2',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.0-rc2',
    ),
    'drupal/openapi_ui' => 
    array (
      'pretty_version' => '1.0.0-rc3',
      'version' => '1.0.0.0-RC3',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-rc3',
    ),
    'drupal/openapi_ui_redoc' => 
    array (
      'pretty_version' => '1.0.0-rc3',
      'version' => '1.0.0.0-RC3',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-rc3',
    ),
    'drupal/openapi_ui_swagger' => 
    array (
      'pretty_version' => '1.0.0-rc4',
      'version' => '1.0.0.0-RC4',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-rc4',
    ),
    'drupal/options' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/page_cache' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/page_manager' => 
    array (
      'pretty_version' => '4.0.0-beta6',
      'version' => '4.0.0.0-beta6',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-4.0-beta6',
    ),
    'drupal/panels' => 
    array (
      'pretty_version' => '4.6.0',
      'version' => '4.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-4.6',
    ),
    'drupal/paragraphs' => 
    array (
      'pretty_version' => '1.12.0',
      'version' => '1.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.12',
    ),
    'drupal/paragraphs_asymmetric_translation_widgets' => 
    array (
      'pretty_version' => '1.0.0-beta4',
      'version' => '1.0.0.0-beta4',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-beta4',
    ),
    'drupal/paragraphs_edit' => 
    array (
      'pretty_version' => '2.0.0-alpha8',
      'version' => '2.0.0.0-alpha8',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.0-alpha8',
    ),
    'drupal/paragraphs_features' => 
    array (
      'pretty_version' => '1.12.0',
      'version' => '1.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.12',
    ),
    'drupal/paragraphs_previewer' => 
    array (
      'pretty_version' => '1.5.0',
      'version' => '1.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.5',
    ),
    'drupal/password_policy' => 
    array (
      'pretty_version' => '3.0.0-beta1',
      'version' => '3.0.0.0-beta1',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.0-beta1',
    ),
    'drupal/path' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/path_alias' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/pathauto' => 
    array (
      'pretty_version' => '1.8.0',
      'version' => '1.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.8',
    ),
    'drupal/pathologic' => 
    array (
      'pretty_version' => '1.0.0-alpha2',
      'version' => '1.0.0.0-alpha2',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-alpha2',
    ),
    'drupal/persistent_login' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.3',
    ),
    'drupal/prevent_homepage_deletion' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.4',
    ),
    'drupal/quickedit' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/rabbit_hole' => 
    array (
      'pretty_version' => '1.0.0-beta10',
      'version' => '1.0.0.0-beta10',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-beta10',
    ),
    'drupal/rdf' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/recaptcha' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.0',
    ),
    'drupal/redirect' => 
    array (
      'pretty_version' => '1.6.0',
      'version' => '1.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.6',
    ),
    'drupal/responsive_image' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/responsive_preview' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0',
    ),
    'drupal/rest' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/restui' => 
    array (
      'pretty_version' => '1.20.0',
      'version' => '1.20.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.20',
    ),
    'drupal/revision_log_default' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.2',
    ),
    'drupal/roleassign' => 
    array (
      'pretty_version' => '1.0.0-beta1',
      'version' => '1.0.0.0-beta1',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-beta1',
    ),
    'drupal/scheduler' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.4',
    ),
    'drupal/scheduler_content_moderation_integration' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.3',
    ),
    'drupal/schema_metatag' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.2',
    ),
    'drupal/schemata' => 
    array (
      'pretty_version' => '1.0.0-beta2',
      'version' => '1.0.0.0-beta2',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-beta2',
    ),
    'drupal/schemata_json_schema' => 
    array (
      'pretty_version' => '1.0.0-beta2',
      'version' => '1.0.0.0-beta2',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'drupal/script_manager' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.2',
    ),
    'drupal/search' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/search_api' => 
    array (
      'pretty_version' => '1.20.0',
      'version' => '1.20.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.20',
    ),
    'drupal/seckit' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2.0.0',
    ),
    'drupal/security_review' => 
    array (
      'pretty_version' => '1.0.0-alpha2',
      'version' => '1.0.0.0-alpha2',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-alpha2',
    ),
    'drupal/serialization' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/settings_tray' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/seven' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/shield' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.4',
    ),
    'drupal/shortcut' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/simple_oauth' => 
    array (
      'pretty_version' => '4.5.0',
      'version' => '4.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-4.5',
    ),
    'drupal/simple_sitemap' => 
    array (
      'pretty_version' => '3.10.0',
      'version' => '3.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.10',
    ),
    'drupal/simpletest' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/slick' => 
    array (
      'pretty_version' => '2.3.0',
      'version' => '2.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.3',
    ),
    'drupal/slick_views' => 
    array (
      'pretty_version' => '2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.4',
    ),
    'drupal/smart_trim' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.3',
    ),
    'drupal/smtp' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0',
    ),
    'drupal/social_api' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3.0.0',
    ),
    'drupal/social_auth' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3.0.1',
    ),
    'drupal/social_auth_facebook' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3.0.0',
    ),
    'drupal/social_auth_google' => 
    array (
      'pretty_version' => '3.0.0-rc1',
      'version' => '3.0.0.0-RC1',
      'aliases' => 
      array (
      ),
      'reference' => '3.0.0-rc1',
    ),
    'drupal/social_auth_linkedin' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3.0.0',
    ),
    'drupal/social_auth_twitter' => 
    array (
      'pretty_version' => 'dev-2.x',
      'version' => 'dev-2.x',
      'aliases' => 
      array (
        0 => '2.x-dev',
      ),
      'reference' => '93a4b928e68399048f8cde692c6bcc50c30efa38',
    ),
    'drupal/sophron' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.1',
    ),
    'drupal/stage_file_proxy' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.1',
    ),
    'drupal/standard' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/stark' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/statistics' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/styleguide' => 
    array (
      'pretty_version' => '2.0.0-beta1',
      'version' => '2.0.0.0-beta1',
      'aliases' => 
      array (
      ),
      'reference' => '2.0.0-beta1',
    ),
    'drupal/swiftmailer' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.0',
    ),
    'drupal/syslog' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/system' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/taxonomy' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/taxonomy_access_fix' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.1',
    ),
    'drupal/taxonomy_menu' => 
    array (
      'pretty_version' => '3.4.0',
      'version' => '3.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.4',
    ),
    'drupal/telephone' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/text' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/token' => 
    array (
      'pretty_version' => '1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.9',
    ),
    'drupal/token_filter' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.2',
    ),
    'drupal/toolbar' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/total_control' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3.0.1',
    ),
    'drupal/tour' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/tour_builder' => 
    array (
      'pretty_version' => '1.0.0-alpha1',
      'version' => '1.0.0.0-alpha1',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-alpha1',
    ),
    'drupal/tour_ui' => 
    array (
      'pretty_version' => '1.0.0-beta3',
      'version' => '1.0.0.0-beta3',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-beta3',
    ),
    'drupal/tracker' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/ultimate_cron' => 
    array (
      'pretty_version' => '2.0.0-alpha5',
      'version' => '2.0.0.0-alpha5',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.0-alpha5',
    ),
    'drupal/update' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/update_helper' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2.0.0',
    ),
    'drupal/user' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/username_enumeration_prevention' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.2',
    ),
    'drupal/userprotect' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.1',
    ),
    'drupal/varbase_api' => 
    array (
      'pretty_version' => '7.14.0',
      'version' => '7.14.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-7.14',
    ),
    'drupal/varbase_auth' => 
    array (
      'pretty_version' => '6.13.0',
      'version' => '6.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-6.13',
    ),
    'drupal/varbase_blog' => 
    array (
      'pretty_version' => '8.6.0',
      'version' => '8.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-8.6',
    ),
    'drupal/varbase_bootstrap_paragraphs' => 
    array (
      'pretty_version' => '7.17.0',
      'version' => '7.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-7.17',
    ),
    'drupal/varbase_carousels' => 
    array (
      'pretty_version' => '7.7.0',
      'version' => '7.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-7.7',
    ),
    'drupal/varbase_core' => 
    array (
      'pretty_version' => '8.32.0',
      'version' => '8.32.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-8.32',
    ),
    'drupal/varbase_editor' => 
    array (
      'pretty_version' => '7.13.0',
      'version' => '7.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-7.13',
    ),
    'drupal/varbase_email' => 
    array (
      'pretty_version' => '6.5.0',
      'version' => '6.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-6.5',
    ),
    'drupal/varbase_heroslider_media' => 
    array (
      'pretty_version' => '7.16.0',
      'version' => '7.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-7.16',
    ),
    'drupal/varbase_landing' => 
    array (
      'pretty_version' => '7.10.0',
      'version' => '7.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-7.10',
    ),
    'drupal/varbase_layout_builder' => 
    array (
      'pretty_version' => '1.25.0',
      'version' => '1.25.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.25',
    ),
    'drupal/varbase_media' => 
    array (
      'pretty_version' => '7.40.0',
      'version' => '7.40.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-7.40',
    ),
    'drupal/varbase_search' => 
    array (
      'pretty_version' => '6.8.0',
      'version' => '6.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-6.8',
    ),
    'drupal/varbase_seo' => 
    array (
      'pretty_version' => '6.19.0',
      'version' => '6.19.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-6.19',
    ),
    'drupal/varbase_styleguide' => 
    array (
      'pretty_version' => '6.8.0',
      'version' => '6.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-6.8',
    ),
    'drupal/varbase_total_control' => 
    array (
      'pretty_version' => '6.15.0',
      'version' => '6.15.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-6.15',
    ),
    'drupal/varbase_workflow' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2.0.0',
    ),
    'drupal/vartheme' => 
    array (
      'pretty_version' => '6.9.0',
      'version' => '6.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-6.9',
    ),
    'drupal/vartheme_admin' => 
    array (
      'pretty_version' => '6.11.0',
      'version' => '6.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-6.11',
    ),
    'drupal/vartheme_bs4' => 
    array (
      'pretty_version' => '6.31.0',
      'version' => '6.31.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-6.31',
    ),
    'drupal/vartheme_claro' => 
    array (
      'pretty_version' => '2.1.12',
      'version' => '2.1.12.0',
      'aliases' => 
      array (
      ),
      'reference' => '2.1.12',
    ),
    'drupal/vbp_text_and_image' => 
    array (
      'pretty_version' => '7.17.0',
      'version' => '7.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'drupal/views' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/views_bootstrap' => 
    array (
      'pretty_version' => '4.3.0',
      'version' => '4.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-4.3',
    ),
    'drupal/views_bulk_edit' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.6',
    ),
    'drupal/views_bulk_operations' => 
    array (
      'pretty_version' => '3.13.0',
      'version' => '3.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.13',
    ),
    'drupal/views_infinite_scroll' => 
    array (
      'pretty_version' => '1.8.0',
      'version' => '1.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.8',
    ),
    'drupal/views_ui' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/viewsreference' => 
    array (
      'pretty_version' => '2.0.0-beta2',
      'version' => '2.0.0.0-beta2',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.0-beta2',
    ),
    'drupal/vmi' => 
    array (
      'pretty_version' => '2.9.0',
      'version' => '2.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.9',
    ),
    'drupal/webform' => 
    array (
      'pretty_version' => '6.0.4',
      'version' => '6.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '6.0.4',
    ),
    'drupal/webform_analysis' => 
    array (
      'pretty_version' => '1.0.0-beta7',
      'version' => '1.0.0.0-beta7',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-beta7',
    ),
    'drupal/webform_views' => 
    array (
      'pretty_version' => '5.0.0-alpha8',
      'version' => '5.0.0.0-alpha8',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-5.0-alpha8',
    ),
    'drupal/webp' => 
    array (
      'pretty_version' => '1.0.0-beta5',
      'version' => '1.0.0.0-beta5',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.0-beta5',
    ),
    'drupal/workflows' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/workspaces' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.17',
      ),
    ),
    'drupal/yoast_seo' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.7',
    ),
    'e0ipso/shaper' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '7d73018ec4fe8de9730dfe755067cc02460e1a38',
    ),
    'easyrdf/easyrdf' => 
    array (
      'pretty_version' => '0.9.1',
      'version' => '0.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'acd09dfe0555fbcfa254291e433c45fdd4652566',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '2.1.25',
      'version' => '2.1.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '0dbf5d78455d4d6a41d186da50adc1122ec066f4',
    ),
    'ezyang/htmlpurifier' => 
    array (
      'pretty_version' => 'v4.13.0',
      'version' => '4.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '08e27c97e4c6ed02f37c5b2b20488046c8d90d75',
    ),
    'fileeye/mimemap' => 
    array (
      'pretty_version' => '1.1.5',
      'version' => '1.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '9efaad84adce38f2ee49331b2bd684c83fd9aa3b',
    ),
    'google/recaptcha' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '614f25a9038be4f3f2da7cbfd778dc5b357d2419',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '6.5.5',
      'version' => '6.5.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e7d04f1f6450fef59366c399cfad4b9383aa30d',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '1.8.2',
      'version' => '1.8.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc960a912984efb74d0a90222870c72c87f10c91',
    ),
    'harvesthq/chosen' => 
    array (
      'pretty_version' => 'v1.8.7',
      'version' => '1.8.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad86732b668627c131e61ee8f0e6e9ed52e4db8d',
    ),
    'html2text/html2text' => 
    array (
      'pretty_version' => '4.3.1',
      'version' => '4.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '61ad68e934066a6f8df29a3d23a6460536d0855c',
    ),
    'j7mbo/twitter-api-php' => 
    array (
      'pretty_version' => '1.0.6',
      'version' => '1.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '443d22c53d621b3cc6b7e0c56daa60c5ada033f7',
    ),
    'justinrainbow/json-schema' => 
    array (
      'pretty_version' => '5.2.10',
      'version' => '5.2.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
    ),
    'laminas/laminas-diactoros' => 
    array (
      'pretty_version' => '1.8.7p2',
      'version' => '1.8.7.0-patch2',
      'aliases' => 
      array (
      ),
      'reference' => '6991c1af7c8d2c8efee81b22ba97024781824aaa',
    ),
    'laminas/laminas-escaper' => 
    array (
      'pretty_version' => '2.8.0',
      'version' => '2.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2d6dce99668b413610e9544183fa10392437f542',
    ),
    'laminas/laminas-feed' => 
    array (
      'pretty_version' => '2.14.1',
      'version' => '2.14.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '463fdae515fba30633906098c258d3b2c733c15c',
    ),
    'laminas/laminas-stdlib' => 
    array (
      'pretty_version' => '3.4.0',
      'version' => '3.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e89c2268c9cad25099f562f7f015c28c5dd383c9',
    ),
    'laminas/laminas-zendframework-bridge' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '13af2502d9bb6f7d33be2de4b51fb68c6cdb476e',
    ),
    'lcobucci/jwt' => 
    array (
      'pretty_version' => '3.4.5',
      'version' => '3.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '511629a54465e89a31d3d7e4cf0935feab8b14c1',
    ),
    'league/event' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd2cc124cf9a3fab2bb4ff963307f60361ce4d119',
    ),
    'league/oauth2-client' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'badb01e62383430706433191b82506b6df24ad98',
    ),
    'league/oauth2-facebook' => 
    array (
      'pretty_version' => '2.0.5',
      'version' => '2.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '14cead7580cab8caace67f5a61ea5d2a8ff213eb',
    ),
    'league/oauth2-google' => 
    array (
      'pretty_version' => '3.0.4',
      'version' => '3.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '6b79441f244040760bed5fdcd092a2bda7cf34c6',
    ),
    'league/oauth2-linkedin' => 
    array (
      'pretty_version' => '5.1.2',
      'version' => '5.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f9ab661ca37884067ca286412b6c17304d3c2fac',
    ),
    'league/oauth2-server' => 
    array (
      'pretty_version' => '7.4.0',
      'version' => '7.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2eb1cf79e59d807d89c256e7ac5e2bf8bdbd4acf',
    ),
    'league/oauth2server' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'lncd/oauth2' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'lsolesen/pel' => 
    array (
      'pretty_version' => '0.9.10',
      'version' => '0.9.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '04ecb8a29e4b1628414193b0df9294232a44f8a9',
    ),
    'masterminds/html5' => 
    array (
      'pretty_version' => '2.7.5',
      'version' => '2.7.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f640ac1bdddff06ea333a920c95bbad8872429ab',
    ),
    'mkalkbrenner/php-htmldiff-advanced' => 
    array (
      'pretty_version' => '0.0.8',
      'version' => '0.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '3a714b48c9c3d3730baaf6d3949691e654cd37c9',
    ),
    'mnsami/composer-custom-directory-installer' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '85f66323978d0b1cb0e6acc7f69b3e7b912f82d9',
    ),
    'neilime/php-css-lint' => 
    array (
      'pretty_version' => 'v3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5dc9dd1d3238d29a9ff210cd7d934cfee00e5e96',
    ),
    'npm-asset/ace-builds' => 
    array (
      'pretty_version' => '1.4.12',
      'version' => '1.4.12.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'npm-asset/blazy' => 
    array (
      'pretty_version' => '1.8.2',
      'version' => '1.8.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'npm-asset/desandro-matches-selector' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'npm-asset/dropzone' => 
    array (
      'pretty_version' => '5.9.2',
      'version' => '5.9.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'npm-asset/ev-emitter' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'npm-asset/fizzy-ui-utils' => 
    array (
      'pretty_version' => '2.0.7',
      'version' => '2.0.7.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'npm-asset/get-size' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'npm-asset/imagesloaded' => 
    array (
      'pretty_version' => '4.1.4',
      'version' => '4.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'npm-asset/masonry-layout' => 
    array (
      'pretty_version' => '4.2.2',
      'version' => '4.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'npm-asset/outlayer' => 
    array (
      'pretty_version' => '2.1.1',
      'version' => '2.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'npm-asset/slick-carousel' => 
    array (
      'pretty_version' => '1.8.1',
      'version' => '1.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'npm-asset/swagger-ui-dist' => 
    array (
      'pretty_version' => '3.51.0',
      'version' => '3.51.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'oomphinc/composer-installers-extender' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8d3fe38a1723e0e91076920c8bb946b1696e28ca',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v9.99.100',
      'version' => '9.99.100.0',
      'aliases' => 
      array (
      ),
      'reference' => '996434e5492cb4c3edcb9168db6fbb1359ef965a',
    ),
    'pear/archive_tar' => 
    array (
      'pretty_version' => '1.4.14',
      'version' => '1.4.14.0',
      'aliases' => 
      array (
      ),
      'reference' => '4d761c5334c790e45ef3245f0864b8955c562caa',
    ),
    'pear/console_getopt' => 
    array (
      'pretty_version' => 'v1.4.3',
      'version' => '1.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a41f8d3e668987609178c7c4a9fe48fecac53fa0',
    ),
    'pear/pear-core-minimal' => 
    array (
      'pretty_version' => 'v1.10.10',
      'version' => '1.10.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '625a3c429d9b2c1546438679074cac1b089116a7',
    ),
    'pear/pear_exception' => 
    array (
      'pretty_version' => 'v1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b14fbe2ddb0b9f94f5b24cf08783d599f776fff0',
    ),
    'phenx/php-font-lib' => 
    array (
      'pretty_version' => '0.5.2',
      'version' => '0.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ca6ad461f032145fff5971b5985e5af9e7fa88d8',
    ),
    'phpmailer/phpmailer' => 
    array (
      'pretty_version' => 'v6.5.0',
      'version' => '6.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a5b5c43e50b7fba655f793ad27303cd74c57363c',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'roundcube/plugin-installer' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'rsky/pear-core-min' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.10.10',
      ),
    ),
    'shama/baton' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'stack/builder' => 
    array (
      'pretty_version' => 'v1.0.6',
      'version' => '1.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a4faaa6f532c6086bc66c29e1bc6c29593e1ca7c',
    ),
    'swagger-api/swagger-ui' => 
    array (
      'pretty_version' => 'v3.51.1',
      'version' => '3.51.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bb21c6df52eb12cd4bdbf8c29feb500795595fa8',
    ),
    'swiftmailer/swiftmailer' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '15f7faf8508e04471f666633addacf54c0ab5933',
    ),
    'symfony-cmf/routing' => 
    array (
      'pretty_version' => '1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fb1e7f85ff8c6866238b7e73a490a0a0243ae8ac',
    ),
    'symfony/class-loader' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a22265a9f3511c0212bf79f54910ca5a77c0e92c',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a10b1da6fc93080c180bba7219b5ff5b7518fe81',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fcd0b29a7a0b1bb5bfbedc6231583d77fea04814',
    ),
    'symfony/debug' => 
    array (
      'pretty_version' => 'v4.4.25',
      'version' => '4.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a8d2d5c94438548bff9f998ca874e202bb29d07f',
    ),
    'symfony/dependency-injection' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => '51d2a2708c6ceadad84393f8581df1dcf9e5e84b',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => '31fde73757b6bad247c54597beef974919ec6860',
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v4.4.26',
      'version' => '4.4.26.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a501126eb6ec9288a3434af01b3d4499ec1268a0',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b9885fcce6fe494201da4f70a9309770e9d13dc8',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v3.4.49',
      'version' => '3.4.49.0',
      'aliases' => 
      array (
      ),
      'reference' => '5aa72405f5bd5583c36ed6e756acb17d3f98ac40',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '46cd95797e9df938fdd2b03693b5fca5e64b01ce',
    ),
    'symfony/polyfill-iconv' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '63b5bb7db83e5673936d6e3b8b3e022ff6474933',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '65bd267525e82759e7d8c4e8ceea44f398838e65',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8590a5f561694770bdcd3f9b5c69dde6945028e8',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
    ),
    'symfony/polyfill-php56' => 
    array (
      'pretty_version' => 'v1.20.0',
      'version' => '1.20.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '54b8cd7e6c1643d78d011f3be89f3ef1f9f4c675',
    ),
    'symfony/polyfill-php70' => 
    array (
      'pretty_version' => 'v1.20.0',
      'version' => '1.20.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5f03a781d984aae42cebd18e7912fa80f02ee644',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9a142215a36a3888e30d0a9eeea9766764e96976',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'eca0bf41ed421bed1b57c4958bab16aa86b757d0',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b8648cf1d5af12a44a51d07ef9bf980921f15fca',
    ),
    'symfony/psr-http-message-bridge' => 
    array (
      'pretty_version' => 'v1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9ab9d71f97d5c7d35a121a7fb69f74fee95cd0ad',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => '3e522ac69cadffd8131cc2b22157fa7662331a6c',
    ),
    'symfony/serializer' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => '6d69ccc1dcfb64c1e9c9444588643e98718d1849',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => 'be83ee6c065cb32becdb306ba61160d598b1ce88',
    ),
    'symfony/validator' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd25ceea5c99022aecf37adf157c76c31fc5dcbed',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v4.4.26',
      'version' => '4.4.26.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a586efdf2aa832d05b9249e9115d24f6a2691160',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => '88289caa3c166321883f67fe5130188ebbb47094',
    ),
    'tijsverkoyen/css-to-inline-styles' => 
    array (
      'pretty_version' => '2.2.3',
      'version' => '2.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b43b05cf43c1b6d849478965062b6ef73e223bb5',
    ),
    'twbs/bootstrap' => 
    array (
      'pretty_version' => 'v4.6.0',
      'version' => '4.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6ffb0b48e455430f8a5359ed689ad64c1143fac2',
    ),
    'twig/twig' => 
    array (
      'pretty_version' => 'v1.44.4',
      'version' => '1.44.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '4d400421528e9fa40caaffcf7824c172526dd99d',
    ),
    'twitter/bootstrap' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.6.0',
      ),
    ),
    'typo3/phar-stream-wrapper' => 
    array (
      'pretty_version' => 'v3.1.6',
      'version' => '3.1.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '60131cb573a1e478cfecd34e4ea38e3b31505f75',
    ),
    'vardot/varbase' => 
    array (
      'pretty_version' => '8.8.11',
      'version' => '8.8.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '1ae5d8258dbabeb13f30c24c233c79746c934cb7',
    ),
    'vardot/varbase-project' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
      ),
      'reference' => '44aae40be807f75ac5d80b050db70cd36fb55ae9',
    ),
    'vardot/varbase-updater' => 
    array (
      'pretty_version' => '1.2.13',
      'version' => '1.2.13.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aae2f2eaf1ebbde5afb356be07f755742f760e05',
    ),
    'webflo/drupal-finder' => 
    array (
      'pretty_version' => '1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c8e5dbe65caef285fec8057a4c718a0d4138d1ee',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6964c76c7804814a842473e0c8fd15bab0f18e25',
    ),
    'webmozart/path-util' => 
    array (
      'pretty_version' => '2.3.0',
      'version' => '2.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd939f7edc24c9a1bb9c0dee5cb05d8e859490725',
    ),
    'zendframework/zend-diactoros' => 
    array (
      'replaced' => 
      array (
        0 => '~1.8.7.0',
      ),
    ),
    'zendframework/zend-escaper' => 
    array (
      'replaced' => 
      array (
        0 => '^2.6.1',
      ),
    ),
    'zendframework/zend-feed' => 
    array (
      'replaced' => 
      array (
        0 => '^2.12.0',
      ),
    ),
    'zendframework/zend-stdlib' => 
    array (
      'replaced' => 
      array (
        0 => '^3.2.1',
      ),
    ),
  ),
);
    private static $canGetVendors;
    private static $installedByVendor = array();

    /**
     * Returns a list of all package names which are present, either by being installed, replaced or provided
     *
     * @return string[]
     * @psalm-return list<string>
     */
    public static function getInstalledPackages()
    {
        $packages = array();
        foreach (self::getInstalled() as $installed) {
            $packages[] = array_keys($installed['versions']);
        }


        if (1 === \count($packages)) {
            return $packages[0];
        }

        return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
    }

    /**
     * Checks whether the given package is installed
     *
     * This also returns true if the package name is provided or replaced by another package
     *
     * @param  string $packageName
     * @return bool
     */
    public static function isInstalled($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (isset($installed['versions'][$packageName])) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks whether the given package satisfies a version constraint
     *
     * e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:
     *
     *   Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')
     *
     * @param VersionParser $parser      Install composer/semver to have access to this class and functionality
     * @param string        $packageName
     * @param string|null   $constraint  A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package
     *
     * @return bool
     */
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));

        return $provided->matches($constraint);
    }

    /**
     * Returns a version constraint representing all the range(s) which are installed for a given package
     *
     * It is easier to use this via isInstalled() with the $constraint argument if you need to check
     * whether a given version of a package is installed, and not just whether it exists
     *
     * @param  string $packageName
     * @return string Version constraint usable with composer/semver
     */
    public static function getVersionRanges($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            $ranges = array();
            if (isset($installed['versions'][$packageName]['pretty_version'])) {
                $ranges[] = $installed['versions'][$packageName]['pretty_version'];
            }
            if (array_key_exists('aliases', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
            }
            if (array_key_exists('replaced', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
            }
            if (array_key_exists('provided', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
            }

            return implode(' || ', $ranges);
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getPrettyVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['pretty_version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['pretty_version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as reference
     */
    public static function getReference($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['reference'])) {
                return null;
            }

            return $installed['versions'][$packageName]['reference'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @return array
     * @psalm-return array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}
     */
    public static function getRootPackage()
    {
        $installed = self::getInstalled();

        return $installed[0]['root'];
    }

    /**
     * Returns the raw installed.php data for custom implementations
     *
     * @return array[]
     * @psalm-return array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>}
     */
    public static function getRawData()
    {
        return self::$installed;
    }

    /**
     * Lets you reload the static array from another file
     *
     * This is only useful for complex integrations in which a project needs to use
     * this class but then also needs to execute another project's autoloader in process,
     * and wants to ensure both projects have access to their version of installed.php.
     *
     * A typical case would be PHPUnit, where it would need to make sure it reads all
     * the data it needs from this class, then call reload() with
     * `require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
     * the project in which it runs can then also use this class safely, without
     * interference between PHPUnit's dependencies and the project's dependencies.
     *
     * @param  array[] $data A vendor/composer/installed.php data set
     * @return void
     *
     * @psalm-param array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>} $data
     */
    public static function reload($data)
    {
        self::$installed = $data;
        self::$installedByVendor = array();
    }

    /**
     * @return array[]
     */
    private static function getInstalled()
    {
        if (null === self::$canGetVendors) {
            self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
        }

        $installed = array();

        if (self::$canGetVendors) {
            // @phpstan-ignore-next-line
            foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
                if (isset(self::$installedByVendor[$vendorDir])) {
                    $installed[] = self::$installedByVendor[$vendorDir];
                } elseif (is_file($vendorDir.'/composer/installed.php')) {
                    $installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
                }
            }
        }

        $installed[] = self::$installed;

        return $installed;
    }
}

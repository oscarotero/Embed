# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [4.3.0] - 2020-11-04
### Added
- New function `$embed->setSettings()` to pass the settings before get the site info

### Fixed
- PHP 8 compatibility [#394]
- Facebook and Instagram adapted to the new API changes [#392] [#399]

## [4.2.7] - 2020-09-23
### Added
- New option `twitch:parent` to fix Twitch embed with iframes [#384]

### Fixed
- Added `datePublished` check to `PublishedTime` extractor [#385] [#386]
- Added `@property-read` for IDE suppport [#387] [#388]

## [4.2.6] - 2020-08-28
### Fixed
- Code width and height when the provided value is not numeric (ex: 100%) [#380]

## [4.2.5] - 2020-08-01
### Fixed
- Github TypeError exception with some urls [#375]

## [4.2.4] - 2020-07-06
### Fixed
- Ignore invalid urls instead throw an exception
- Updated oembed list of endpoints

## [4.2.3] - 2020-06-12
### Fixed
- Suppport for other non-latin alphabets such Persian or Arabic [#366]

## [4.2.2] - 2020-05-31
### Fixed
- Provided a fallback for oEmbed compatible sites like Instagram that redirects to login page [#357]

## [4.2.1] - 2020-05-25
### Fixed
- Redirect urls like `t.co`.

## [4.2.0] - 2020-05-23
### Added
- Added the `ignored_errors` settings to ignore some curls errors instead throw an exception [#355]
- Support for Twitch embeds [#332]

### Fixed
- Ignored linkedData errors [#356]

## [4.1.1] - 2020-04-24
### Added
- Updated oembed endpoints from `oembed.com`
- Add support for tiktok.com

## [4.1.0] - 2020-04-19
### Added
- Ability to send settings to `CurlClient`. Added the `cookies_path` setting to customize the file used for cookies. [#345]
- `Document::selectCss()` function to select elements using css selectors instead xpath (it requires `symfony/css-selector`)
- `Document::removeCss()` function to remove elements using css selectors instead xpath (it requires `symfony/css-selector`)
- Ability to configure OEmbed parameters from the outside using the `oembed:query_parameters` setting [#346]

## 4.0.0 - 2020-03-13
Full library refactoring.

### Added
- Support for multiple parallel request with `curl_multi`
- Support for PSR-7 Http Messages, PSR-17 Http Factories and PSR-18 Http Client
- `cms` value
- `language` to detect the page language
- `languages` to detect urls to versions in different languages
- `favicon` to detect small favicons (16 or 32px)
- `icon` to detect big icons (from 48px)

### Changed
- Changed providers (oEmbed, Html, OpenGraph etc) by independent detectors (title, url, language etc).
- The `tags` value is renamed to `keywords`
- Use Psr standards instead custom interfaces.
- Improved tests using cached responses.

### Removed
- Support for PHP<7.4
- `type` value (is was very confusing)
- `images` value
- `providerImage` (use `favicon` or `icon` instead)
- Support for files (pdf, jpg, video, etc).

[#332]: https://github.com/oscarotero/Embed/issues/332
[#345]: https://github.com/oscarotero/Embed/issues/345
[#346]: https://github.com/oscarotero/Embed/issues/346
[#355]: https://github.com/oscarotero/Embed/issues/355
[#356]: https://github.com/oscarotero/Embed/issues/356
[#357]: https://github.com/oscarotero/Embed/issues/357
[#366]: https://github.com/oscarotero/Embed/issues/366
[#375]: https://github.com/oscarotero/Embed/issues/375
[#380]: https://github.com/oscarotero/Embed/issues/380
[#384]: https://github.com/oscarotero/Embed/issues/384
[#385]: https://github.com/oscarotero/Embed/issues/385
[#386]: https://github.com/oscarotero/Embed/issues/386
[#387]: https://github.com/oscarotero/Embed/issues/387
[#388]: https://github.com/oscarotero/Embed/issues/388
[#392]: https://github.com/oscarotero/Embed/issues/392
[#394]: https://github.com/oscarotero/Embed/issues/394
[#399]: https://github.com/oscarotero/Embed/issues/399

[4.3.0]: https://github.com/oscarotero/Embed/compare/v4.2.7...v4.3.0
[4.2.7]: https://github.com/oscarotero/Embed/compare/v4.2.6...v4.2.7
[4.2.6]: https://github.com/oscarotero/Embed/compare/v4.2.5...v4.2.6
[4.2.5]: https://github.com/oscarotero/Embed/compare/v4.2.4...v4.2.5
[4.2.4]: https://github.com/oscarotero/Embed/compare/v4.2.3...v4.2.4
[4.2.3]: https://github.com/oscarotero/Embed/compare/v4.2.2...v4.2.3
[4.2.2]: https://github.com/oscarotero/Embed/compare/v4.2.1...v4.2.2
[4.2.1]: https://github.com/oscarotero/Embed/compare/v4.2.0...v4.2.1
[4.2.0]: https://github.com/oscarotero/Embed/compare/v4.1.1...v4.2.0
[4.1.1]: https://github.com/oscarotero/Embed/compare/v4.1.0...v4.1.1
[4.1.0]: https://github.com/oscarotero/Embed/compare/v4.0.0...v4.1.0

# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

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

[#345]: https://github.com/oscarotero/Embed/issues/345
[#346]: https://github.com/oscarotero/Embed/issues/346

[4.1.1]: https://github.com/oscarotero/Embed/compare/v4.1.0...v4.1.1
[4.1.0]: https://github.com/oscarotero/Embed/compare/v4.0.0...v4.1.0

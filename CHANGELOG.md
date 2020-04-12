# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## 4.1.0 - Unreleased
### Added
- Ability to send settings to `CurlClient`. Added the `cookies_path` setting to customize the file used for cookies. #345

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

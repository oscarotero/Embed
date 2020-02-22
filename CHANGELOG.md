# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## 4.0.0 - Unreleased
Full library refactoring.

### Added
- Support for multiple parallel request with `curl_multi`
- Support for PSR-7 Http Messages, PSR-17 Http Factories and PSR-18 Http Client
- `cms` value
- `language` to detect the page language
- `languages` to detect urls to versions in different languages

### Changed
- Changed the providers approach by independent detectors.
- The `tags` value is renamed to `keywords`
- Use Psr standards instead custom interfaces.
- `providerImage` is renamed to `favicon` (small icons) and `icon` (big icons)

### Removed
- `type` value (is was very confusing)
- `images` value
- Support for files (pdf, jpg, video, etc).

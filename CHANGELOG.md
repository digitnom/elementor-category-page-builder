# Changelog

## Version 1.3 (2026-02-03)
**Maintained by:** [Digit Nom](https://taxyz.co.uk/) | **Support:** [☕ Buy Me a Coffee](https://buymeacoffee.com/digitnom)

### Fixed
- **Critical Bug Fix**: Fixed template dropdown not displaying Elementor templates properly
  - Issue: Variable name mismatch in the admin settings page (using `$template` instead of `$page`)
  - Effect: Dropdown was showing only "(ID: )" without template names
  - Resolution: Corrected variable references on lines 206-210 from `$template` to `$page`
  - Now properly displays: Template Name (ID: 123)

### Added
- Donation/Support links in admin interface
- Author information updated
- Enhanced documentation

---

## Version 1.2
- Previous stable version

## Version 1.1
- Initial release features

---

**💝 Like this plugin?** Consider [supporting its development](https://buymeacoffee.com/digitnom)!

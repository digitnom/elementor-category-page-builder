# Elementor Category Archive Override 🎨

![WordPress Plugin Version](https://img.shields.io/badge/version-1.3-blue)
![WordPress](https://img.shields.io/badge/WordPress-5.0%2B-blue)
![PHP](https://img.shields.io/badge/PHP-7.0%2B-purple)
![License](https://img.shields.io/badge/license-GPL%20v2-green)
![Elementor](https://img.shields.io/badge/Elementor-Compatible-pink)

**Create stunning, unique designs for each WordPress category archive using Elementor's visual builder!**

---

## ☕ Support This Free Plugin

This plugin is **100% free and open-source**. If it's helping your website, consider supporting its development!

<a href="https://buymeacoffee.com/digitnom" target="_blank">
  <img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" alt="Buy Me A Coffee" style="height: 60px !important;width: 217px !important;" >
</a>

**Made with ❤️ by [Digit Nom]**

---

## 🔧 Version 1.3 - Bug Fix Release

**Critical bug fixed!** Template dropdown now properly displays Elementor template names.

### What was fixed:
- ✅ Template dropdown was showing only "(ID: )" without template names
- ✅ Variable mismatch in admin settings page corrected
- ✅ Templates now display correctly: "uk-tax-guide (ID: 5171)"

---

## 📖 Table of Contents

- [Features](#-features)
- [Installation](#-installation)
- [How to Use](#-how-to-use)
- [Screenshots](#-screenshots)
- [FAQ](#-faq)
- [Support](#-support)
- [Contributing](#-contributing)
- [License](#-license)

---

## ✨ Features

- **🎨 Individual Designs**: Create unique Elementor template designs for each category
- **📚 Template Library**: Works with Elementor's Template Library (not regular pages)
- **🔄 Override Defaults**: Replace boring theme category pages with stunning custom designs
- **🔍 SEO Friendly**: Preserves category URLs, titles, and canonical tags
- **⚡ Easy to Use**: Simple admin interface to map categories to templates
- **🎯 Flexible**: Use Elementor's Archive Posts widget to automatically display category posts
- **🆓 100% Free**: No premium version, no upsells, completely free forever

---

## 💡 Why Use This Plugin?

Standard WordPress category archives are often bland and limited by your theme's design. This plugin lets you:

1. Design beautiful category pages with Elementor's drag-and-drop builder
2. Create different layouts for different categories (grid for some, list for others)
3. Add custom headers, CTAs, and promotional sections
4. Maintain full SEO compatibility
5. Keep your category URLs unchanged

**Perfect for:**
- Magazine and news websites
- E-commerce category pages
- Portfolio category displays
- Blog category archives
- Any site wanting custom category designs

---

## 📥 Installation

### Method 1: WordPress Admin (Recommended)

1. Download the latest release ZIP file
2. Go to **Plugins → Add New → Upload Plugin**
3. Choose the ZIP file and click **Install Now**
4. Click **Activate**

### Method 2: Manual Installation

1. Download and unzip the plugin
2. Upload `elementor-category-archive-override` folder to `/wp-content/plugins/`
3. Go to **Plugins** in WordPress admin
4. Find "Elementor Category Archive Override" and click **Activate**

### Requirements

- WordPress 5.0 or higher
- PHP 7.0 or higher
- Elementor (Free version works perfectly!)

---

## 🚀 How to Use

### Step 1: Create Your Elementor Template

1. Go to **Templates → Saved Templates** in WordPress admin
2. Click **Add New** → Select **Page** as the template type
3. Design your category archive template with Elementor
4. **Important:** Use Elementor's **"Archive Posts"** widget to display posts
5. Save/Publish the template

### Step 2: Map Categories to Templates

1. Go to **Category Archives** in the WordPress admin menu
2. You'll see a table with all your categories
3. For each category, select the Elementor template from the dropdown
4. Click **Save Category Mappings**

### Step 3: View Your Custom Design

1. Click the "View" button next to any mapped category
2. OR visit the category URL directly (e.g., `yoursite.com/category/news/`)
3. Enjoy your custom Elementor design! 🎉

---

## 📸 Screenshots

*(Add screenshots here showing the admin interface and example category designs)*

---

## 💬 FAQ

### Q: Do I need Elementor Pro?
**A:** No! The free version of Elementor works perfectly.

### Q: Will this affect my SEO?
**A:** No. The plugin preserves category URLs, titles, and canonical tags. SEO plugins continue to work normally.

### Q: Can I use different designs for each category?
**A:** Yes! That's the main purpose. Create multiple Elementor templates and map each category to a different one.

### Q: What happens if I unmap a category?
**A:** It will revert to using your theme's default category template.

### Q: How do I show posts in my Elementor template?
**A:** Use Elementor's "Archive Posts" widget. It will automatically display posts from the current category.

### Q: Does it work with custom taxonomies?
**A:** Currently, this plugin only supports standard WordPress categories. Custom taxonomy support may be added in future versions.

---

## 🛠️ Troubleshooting

### Templates Not Showing in Dropdown (FIXED in v1.3)
This was a bug in earlier versions. Update to v1.3 to fix this issue.

### Category Shows Default Theme Template
**Check:**
- Is Elementor activated?
- Is the Elementor template published (not draft)?
- Did you save the mapping in plugin settings?
- Clear all caches

### Posts Not Displaying
**Solution:**
- Add Elementor's "Archive Posts" widget to your template
- Configure it to show posts from current archive
- Make sure your category has published posts

---

## 📞 Support

- **Bug Reports & Feature Requests**: [GitHub Issues](https://github.com/digitnom/elementor-category-archive-override/issues)
- **Documentation**: See [README.md](README.md), [INSTALLATION-CHECKLIST.md](INSTALLATION-CHECKLIST.md), and [USAGE-EXAMPLES.md](USAGE-EXAMPLES.md)

### Need Help?
If you're getting value from this plugin, please consider:
- ⭐ **Star this repository** on GitHub
- ☕ **[Buy me a coffee](https://buymeacoffee.com/digitnom)** to support development
- 📢 **Share** with others who might find it useful

---

## 🤝 Contributing

Contributions are welcome! Here's how you can help:

1. **Fork** this repository
2. Create a **feature branch** (`git checkout -b feature/amazing-feature`)
3. **Commit** your changes (`git commit -m 'Add some amazing feature'`)
4. **Push** to the branch (`git push origin feature/amazing-feature`)
5. Open a **Pull Request**

### Ideas for Contributions:
- Add support for custom taxonomies
- Improve admin UI/UX
- Add more example templates
- Improve documentation
- Translate to other languages
- Report bugs or suggest features

---

## 📜 Changelog

See [CHANGELOG.md](CHANGELOG.md) for detailed version history.

**Version 1.3** (2026-02-03)
- Fixed: Template dropdown not displaying properly
- Added: Enhanced donation sections
- Updated: Author information

---

## 📄 License

This plugin is licensed under **GPL v2 or later** - the same license as WordPress itself.

```
Copyright (C) 2026 Digit Nom

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
```

See [LICENSE](LICENSE) file for full license text.

---

## 👨‍💻 About the Developer

**Digit Nom**
- 🌐 Tested Website: [https://taxyz.co.uk/](https://taxyz.co.uk/)
- ☕ Support: [Buy Me a Coffee](https://buymeacoffee.com/digitnom)

Built with ❤️ for WordPress enthusiasts who love Elementor!

---

## ⭐ Show Your Support

If this plugin helped you, please:
- ⭐ **Star this repository**
- ☕ **[Buy me a coffee](https://buymeacoffee.com/digitnom)**
- 📢 **Share** with your network
- 💬 **Leave feedback**

Thank you for using Elementor Category Archive Override! 🎉

---

**[⬆ Back to Top](#elementor-category-archive-override-)**

# INSTALLATION & TESTING CHECKLIST

## ☕ Support This Plugin

If this plugin helps you, consider [buying me a coffee](https://buymeacoffee.com/digitnom)! Your support helps maintain this free plugin. 💝

---

## Pre-Installation Checklist

- [ ] WordPress 5.0+ installed
- [ ] PHP 7.0+ available
- [ ] Elementor plugin installed and activated
- [ ] At least one category exists on your site
- [ ] Backup your site (recommended)

---

## Installation Steps

### Step 1: Upload Plugin
- [ ] Upload plugin folder to `/wp-content/plugins/`
- [ ] Folder should be named `elementor-category-archive-override`
- [ ] Verify all files are present:
  - [ ] elementor-category-archive-override.php (main file)
  - [ ] uninstall.php
  - [ ] README.md
  - [ ] templates/category-elementor.php

### Step 2: Activate Plugin
- [ ] Go to WordPress Admin → Plugins
- [ ] Find "Elementor Category Archive Override"
- [ ] Click "Activate"
- [ ] Verify no error messages appear

### Step 3: Verify Elementor Check
- [ ] If Elementor is NOT installed, you should see a warning notice
- [ ] If Elementor IS installed, no warning should appear
- [ ] New menu item "Category Archives" should appear in admin sidebar

---

## Creating Your First Category Template

### Step 1: Create Elementor Page
- [ ] Go to Pages → Add New
- [ ] Name it "Test Category Template"
- [ ] Click "Edit with Elementor"
- [ ] Add at minimum:
  - [ ] Archive Title widget
  - [ ] Archive Posts widget (in grid or list layout)
- [ ] Click "Publish"
- [ ] Note the page ID or title for next step

### Step 2: Map to Category
- [ ] Go to Category Archives menu (in WordPress admin)
- [ ] Find a test category (or create one if needed)
- [ ] In the dropdown, select "Test Category Template"
- [ ] Click "Save Mappings"
- [ ] Verify "Settings Saved Successfully!" message appears
- [ ] Verify the mapping appears in "Current Mappings" section below

### Step 3: Test the Category Page
- [ ] Click "View" button next to the category in settings
- [ ] OR manually visit the category URL (e.g., yoursite.com/category/test/)
- [ ] Verify:
  - [ ] Your Elementor design appears (not default theme archive)
  - [ ] Category name displays correctly
  - [ ] Posts from that category are shown
  - [ ] Pagination works (if you have many posts)
  - [ ] URL is still the category URL (not the page URL)

---

## Full Feature Testing

### Admin Interface Tests
- [ ] Settings page loads without errors
- [ ] All categories are listed
- [ ] Only Elementor-built pages appear in dropdowns
- [ ] Can save mappings successfully
- [ ] Can change mappings
- [ ] Can remove mappings (select "Use Default Archive")
- [ ] Preview button opens category in new tab
- [ ] Current Mappings section shows active mappings

### Frontend Tests
- [ ] Category with mapped page shows Elementor design
- [ ] Category without mapping shows default theme template
- [ ] Correct category posts are displayed
- [ ] Category title is correct
- [ ] Category description shows (if set)
- [ ] Pagination works correctly
- [ ] Post count is accurate

### SEO Tests
- [ ] Page title shows category name (check browser tab)
- [ ] URL is category URL (not page URL)
- [ ] Canonical URL points to category (view page source, search for "canonical")
- [ ] Breadcrumbs work correctly (if your theme has them)
- [ ] Meta description is appropriate

### Compatibility Tests
- [ ] Works with your theme
- [ ] Works with Elementor free version
- [ ] Works with Elementor Pro (if you have it)
- [ ] Works with caching plugins (clear cache first)
- [ ] Works on mobile devices
- [ ] Works with different Elementor widgets:
  - [ ] Archive Title widget
  - [ ] Archive Description widget
  - [ ] Archive Posts widget
  - [ ] Posts widget (with Current Query)

### Multiple Category Tests
- [ ] Create 2-3 different Elementor pages
- [ ] Map them to different categories
- [ ] Verify each category shows its correct design
- [ ] Verify categories don't interfere with each other

---

## Advanced Testing

### Dynamic Content Tests
- [ ] Archive Title dynamic tag works
- [ ] Archive Description dynamic tag works
- [ ] Archive URL dynamic tag works
- [ ] Category ID is accessible

### Performance Tests
- [ ] Page loads in reasonable time
- [ ] No console errors (F12 → Console tab)
- [ ] No PHP errors (check error logs)
- [ ] Works with page caching enabled

### Edge Cases
- [ ] Empty category (no posts) displays correctly
- [ ] Category with 1 post works
- [ ] Category with 100+ posts works
- [ ] Deleting mapped page doesn't break site
- [ ] Deactivating plugin returns to default templates
- [ ] Reactivating plugin restores mappings

---

## Common Issues Checklist

### If Elementor design doesn't show:
- [ ] Verify page was built with Elementor (check page edit mode)
- [ ] Verify page is Published (not Draft)
- [ ] Verify mapping was saved
- [ ] Clear all caches
- [ ] Check for JavaScript errors in browser console
- [ ] Try with default WordPress theme

### If wrong posts show:
- [ ] Verify Archive Posts widget is used
- [ ] OR verify Posts widget has "Current Query" source
- [ ] Check category assignment of posts
- [ ] Clear query caches

### If SEO issues:
- [ ] Check canonical tag in page source
- [ ] Verify category URL in browser address bar
- [ ] Test with SEO plugin (Yoast, Rank Math, etc.)
- [ ] Clear SEO plugin cache

---

## Final Verification

- [ ] Admin interface is user-friendly
- [ ] No PHP warnings or errors
- [ ] No JavaScript console errors
- [ ] All mapped categories work correctly
- [ ] Unmapped categories use default templates
- [ ] Plugin can be deactivated cleanly
- [ ] Plugin can be reactivated without issues
- [ ] Documentation is clear and helpful

---

## Before Going Live

- [ ] Test on staging site first
- [ ] Create Elementor designs for all important categories
- [ ] Map categories to appropriate designs
- [ ] Test all category URLs
- [ ] Clear all caches
- [ ] Test on multiple devices
- [ ] Test with real user accounts
- [ ] Backup before deploying to production

---

## Maintenance Checklist

### Monthly
- [ ] Verify all category mappings still work
- [ ] Check for broken Elementor designs
- [ ] Test new categories get added to settings

### When Adding New Categories
- [ ] Create Elementor template if needed
- [ ] Map in Category Archives settings
- [ ] Test the category page

### When Updating Elementor
- [ ] Re-test category archives after update
- [ ] Verify Elementor content still displays
- [ ] Check for any new widget features

---

## Support Checklist

If you encounter issues:

1. [ ] Review README.md
2. [ ] Check USAGE-EXAMPLES.md
3. [ ] Review this checklist
4. [ ] Test with default theme
5. [ ] Test with only Elementor + this plugin active
6. [ ] Check WordPress debug log
7. [ ] Check browser console for errors
8. [ ] Clear ALL caches
9. [ ] Try different category/page combination

---

## Success Indicators

✅ Plugin activated without errors
✅ Menu item appears in admin
✅ Settings page loads correctly
✅ Can map categories to Elementor pages
✅ Mapped categories show Elementor design
✅ Unmapped categories show default design
✅ SEO is preserved (correct titles, URLs, canonical)
✅ Posts display correctly per category
✅ Pagination works
✅ Mobile responsive
✅ No performance issues

---

**If all checkboxes are ticked, your plugin is working perfectly! 🎉**

---

## 💝 Enjoyed This Plugin?

[☕ Buy Me a Coffee](https://buymeacoffee.com/digitnom) | [Visit Website](https://taxyz.co.uk/) | Made with ❤️ by Digit Nom

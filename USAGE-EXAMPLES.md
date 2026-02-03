# USAGE EXAMPLES

## ☕ Enjoying This Plugin?

If these examples help you create amazing category archives, consider [buying me a coffee](https://buymeacoffee.com/digitnom)! 💝

---

## Example 1: Simple Category Archive with Posts Grid

### Scenario
You want to create a custom design for your "News" category with a grid layout.

### Steps

1. **Create New Page**
   - Go to Pages → Add New
   - Name it "News Archive Template"

2. **Design with Elementor**
   - Click "Edit with Elementor"
   - Add a section with Archive Title widget (displays "News")
   - Add Archive Description widget
   - Add Archive Posts widget:
     - Set layout to Grid
     - Choose columns (e.g., 3 columns)
     - Configure styling as desired
   - Publish the page

3. **Map to Category**
   - Go to Category Archives in admin menu
   - Find "News" category in the list
   - Select "News Archive Template" from dropdown
   - Click Save Mappings

4. **Test**
   - Visit yoursite.com/category/news/
   - You should see your Elementor design!

---

## Example 2: Different Designs for Different Categories

### Scenario
You want unique designs for "Technology", "Lifestyle", and "Business" categories.

### Steps

1. **Create Three Pages**
   - "Tech Category Template" - with dark modern design
   - "Lifestyle Category Template" - with bright, airy design
   - "Business Category Template" - with professional corporate design

2. **Design Each Page**
   
   **Tech Template:**
   - Dark background
   - Grid layout with large featured images
   - Tech-style fonts and colors
   
   **Lifestyle Template:**
   - Light pastel colors
   - Masonry layout
   - Elegant typography
   
   **Business Template:**
   - Professional blue/gray color scheme
   - List layout with excerpts
   - Corporate fonts

3. **Map Each Category**
   - Technology → Tech Category Template
   - Lifestyle → Lifestyle Category Template
   - Business → Business Category Template

4. **Result**
   - /category/technology/ shows dark modern design
   - /category/lifestyle/ shows bright airy design
   - /category/business/ shows professional design

---

## Example 3: Category Archive with Custom Header and CTA

### Scenario
You want a category page with a custom header banner and a call-to-action section.

### Steps

1. **Create Page Structure** (in Elementor)
   
   **Section 1: Hero Header**
   - Full-width section
   - Background image or gradient
   - Archive Title widget (category name)
   - Archive Description widget
   
   **Section 2: Posts Grid**
   - Archive Posts widget
   - 3-column grid
   - Custom styling
   
   **Section 3: Newsletter CTA**
   - Heading: "Subscribe to our [Category Name] updates"
   - Form widget or button
   
   **Section 4: Related Categories**
   - Custom HTML or menu
   - Links to other categories

2. **Use Dynamic Content**
   - In hero section, use Archive Title dynamic tag
   - This will automatically show the correct category name
   - Same for Archive Description

3. **Map to Category**
   - Map this template to your desired category
   
---

## Example 4: Category Archive with Filtering

### Scenario
You want visitors to filter posts by tags within a category.

### Steps

1. **Design the Page**
   - Add Archive Title at top
   - Add Archive Posts widget
   - In the widget settings:
     - Enable pagination
     - Set "Posts Per Page"
     - Can add custom CSS for filters if needed

2. **Advanced (with Elementor Pro)**
   - Use Loop Grid widget
   - Set Query → Source to "Current Query"
   - This will automatically load category posts
   - Enable filtering options in widget settings

---

## Example 5: Keeping Some Categories with Default Template

### Scenario
You want custom Elementor designs for only some categories, others use default theme.

### Steps

1. **Create Elementor Pages** for the categories you want custom designs
   - E.g., create designs for "Featured" and "Tutorials"

2. **Map Only Those Categories**
   - Featured → Featured Category Template
   - Tutorials → Tutorial Category Template
   - Leave other categories UNMAPPED

3. **Result**
   - /category/featured/ → Custom Elementor design
   - /category/tutorials/ → Custom Elementor design
   - /category/blog/ → Default theme template
   - /category/uncategorized/ → Default theme template

---

## Pro Tips

### Tip 1: Reuse Template for Multiple Categories
If you want the same design for multiple categories:
1. Create one Elementor page
2. Map multiple categories to the same page
3. The Archive Title/Description will automatically change per category

### Tip 2: Test Before Publishing
- Create your Elementor page as DRAFT first
- Test the design thoroughly
- Only then publish and map to category

### Tip 3: Use Elementor Global Colors
- Set up global colors in Elementor
- Use them in your category templates
- Easy to maintain consistent branding

### Tip 4: Mobile Optimization
- Always preview mobile layout in Elementor
- Category archives get lots of mobile traffic
- Optimize your grid layouts for mobile

### Tip 5: Performance
- Optimize images in your Elementor designs
- Use lazy loading for images
- Don't overload with too many widgets
- Category archives should load fast

---

## Common Widget Settings for Category Archives

### Archive Title Widget
- Shows the category name
- Automatically updates per category
- Customize typography and color

### Archive Description Widget
- Shows category description (from category settings)
- Only displays if description exists
- Good for SEO

### Archive Posts Widget
- Must have for displaying category posts
- Settings:
  - Layout: Grid/List/Masonry
  - Columns: 1-6
  - Posts Per Page: Your choice
  - Pagination: Yes/No
  - Meta data: Author, date, comments, etc.

### Posts Widget (with Custom Query)
- More flexible than Archive Posts
- Set Source to "Current Query"
- Will display posts from current category
- Good for advanced layouts

---

## Troubleshooting Examples

### Issue: Posts not showing from category
**Solution:** Make sure you're using Archive Posts widget OR Posts widget with "Current Query" source

### Issue: Wrong category name showing
**Solution:** Don't hardcode the category name. Use Archive Title dynamic tag instead

### Issue: Changes not reflecting
**Solution:** 
1. Clear browser cache
2. Clear WordPress cache
3. Re-save the Elementor page
4. Re-save the category mapping

### Issue: Pagination not working
**Solution:** Make sure pagination is enabled in the Archive Posts widget settings

---

## 💝 Support Development

Love this plugin? [☕ Buy Me a Coffee](https://buymeacoffee.com/digitnom)

**Made with ❤️ by [Digit Nom](https://taxyz.co.uk/)**

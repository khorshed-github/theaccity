# 📊 Homepage Static vs Dynamic Content Analysis

**Date:** February 7, 2026  
**Project:** Theaccity  
**File:** `resources/views/web/index.blade.php`

---

## 📋 Summary

| Total Sections | Dynamic Sections | Static Sections | Percentage Dynamic |
|----------------|------------------|-----------------|-------------------|
| 12 | 5 | 7 | **42%** |

---

## ✅ Dynamic Sections (Database-driven)

### **1. Hero Slider Section** ✅
- **Lines:** 7-43
- **Data Source:** `Slider::where('type', 'slider')`
- **Content:**
  - Slider images from database
  - Title and description from database
  - "Get Started" button (link hardcoded)

### **2. Universities Section** ✅
- **Lines:** 127-151
- **Data Source:** `University::where('status', '1')`
- **Content:**
  - University names dynamically displayed
  - University logos (commented out, can be enabled)
  - Section title (static)

### **3. Expert Consultants Section** ✅
- **Lines:** 154-194
- **Data Source:** `Slider::where('type', 'consultants')`
- **Content:**
  - Consultant images
  - Names and descriptions
  - Social links (hardcoded to generic URLs)

### **4. FAQ Section** ✅
- **Lines:** 251-291
- **Data Source:** `Qa::where('type', 'question-answer')`
- **Content:**
  - Questions and answers from database
  - Section title (static)
  - Right side image (static)

### **5. Testimonials Section** ✅
- **Lines:** 293-318
- **Data Source:** `Slider::where('type', 'testimonial')`
- **Content:**
  - Client photos
  - Names and feedback
  - Background image (static)

### **6. News & Blog Section** ✅
- **Lines:** 321-363
- **Data Source:** `News::where('status', '1')`
- **Content:**
  - Blog images
  - Blog titles and dates
  - "Read More" links
  - Section title (static)

### **7. Brand Partners (Bottom)** ✅
- **Lines:** 366-391
- **Data Source:** `University::where('status', '1')`
- **Content:**
  - University names in carousel
  - University logos (commented out)

---

## ❌ Static Sections (Hardcoded)

### **1. About Us Section** ❌ STATIC
- **Lines:** 46-102
- **Content:**
  ```
  ❌ Images: about-4-img-1.png, about-4-img-2.png, about-4-plane-img.png
  ❌ Experience counter: "15+ Years"
  ❌ Heading: "About Us"
  ❌ Mission text (full paragraph)
  ❌ Vision text (full paragraph)
  ❌ "Read More" button
  ```

- **Should be Dynamic:**
  - Company mission/vision text
  - Years of experience
  - Images
  - Description

### **2. Video CTA Section** ❌ STATIC
- **Lines:** 106-124
- **Content:**
  ```
  ❌ Background image: cta-4.png
  ❌ Heading: "We Counsel Students to Get Study"
  ❌ YouTube video link (hardcoded)
  ```

- **Should be Dynamic:**
  - CTA heading/text
  - Video URL
  - Background image

### **3. Counter/Statistics Section** ❌ STATIC
- **Lines:** 197-248
- **Content:**
  ```
  ❌ Happy Clients: 200+
  ❌ Successful Rates: 99%+
  ❌ Visa Process: 15k+
  ❌ Immigration: 600+
  ❌ All counter icons (static images)
  ❌ Background shapes
  ```

- **Should be Dynamic:**
  - Counter numbers
  - Counter labels
  - Icons/images

### **4. Section Titles** ❌ STATIC
- Scattered throughout
- **Content:**
  ```
  ❌ "Universities You Can Visit"
  ❌ "Select the University of Your Choice"
  ❌ "Professional people"
  ❌ "Meet Our Expert Consultants"
  ❌ "Have Any Questions?"
  ❌ "Your Questions, Our Answers"
  ❌ "News & Blog Post"
  ❌ "Latest Insight from News & Blog"
  ```

### **5. Decorative Images** ❌ STATIC
- Background shapes and decorative elements
- **Examples:**
  ```
  ❌ visit-right-shape.png
  ❌ team-4-bg-shape.png
  ❌ counter-plane-img.png
  ❌ counter-bg-shape.png
  ❌ faq-circle-plane-shape.png
  ❌ faq-right-img.png
  ❌ testi-5-bg-img.png
  ```

---

## 🎯 Recommendations for Making Dynamic

### **Priority 1: Critical Content** 🔴

**1. About Us Section:**
```
Create: Settings table or About page management
Fields:
- about_heading
- about_description
- about_mission
- about_vision
- years_of_experience
- about_image_1
- about_image_2
```

**2. Statistics/Counter Section:**
```
Create: Statistics/Counters table
Fields:
- counter_label (e.g., "Happy Clients")
- counter_value (e.g., "200")
- counter_suffix (e.g., "+")
- counter_icon
- display_order
```

**3. Video CTA Section:**
```
Add to Settings table:
- cta_heading
- cta_video_url
- cta_background_image
```

### **Priority 2: Moderate Importance** 🟡

**4. Section Titles:**
```
Add to Settings table:
- university_section_title
- consultant_section_title
- faq_section_title
- blog_section_title
```

### **Priority 3: Optional** 🟢

**5. Social Media Links:**
```
Currently hardcoded:
- Facebook, Instagram, Pinterest, LinkedIn
Should be in Settings table for easy update
```

---

## 📊 Detailed Breakdown

### **Homepage Sections:**

| # | Section Name | Type | Data Source | Editable via Admin? |
|---|--------------|------|-------------|---------------------|
| 1 | Hero Slider | Dynamic | `sliders` table | ✅ Yes |
| 2 | About Us | Static | Hardcoded | ❌ No |
| 3 | Video CTA | Static | Hardcoded | ❌ No |
| 4 | Universities | Dynamic | `university` table | ✅ Yes |
| 5 | Expert Consultants | Dynamic | `sliders` table (consultants) | ✅ Yes |
| 6 | Statistics | Static | Hardcoded | ❌ No |
| 7 | FAQ | Dynamic | `qa` table | ✅ Yes |
| 8 | Testimonials | Dynamic | `sliders` table (testimonial) | ✅ Yes |
| 9 | News & Blogs | Dynamic | `news` table | ✅ Yes |
| 10 | Brand Partners | Dynamic | `university` table | ✅ Yes |

---

## 🔧 Implementation Plan

### **Phase 1: Create Settings Management** (Recommended)

**Step 1: Create Settings Table**
```sql
CREATE TABLE settings (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    setting_key VARCHAR(255) UNIQUE,
    setting_value TEXT,
    setting_type ENUM('text', 'number', 'image', 'textarea'),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

**Step 2: Create Counters/Statistics Table**
```sql
CREATE TABLE homepage_statistics (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    label VARCHAR(255),
    value INT,
    suffix VARCHAR(10),
    icon VARCHAR(255),
    display_order INT,
    status TINYINT DEFAULT 1,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

**Step 3: Admin Panel Pages**
- `/admin/settings` - General settings (About, CTA, etc.)
- `/admin/homepage-statistics` - Counter management

**Step 4: Update Homepage View**
Replace hardcoded values with:
```blade
{{ $settings['about_heading'] ?? 'About Us' }}
{{ $settings['about_description'] ?? 'Default text...' }}
```

---

## ⚡ Quick Wins (Easy Fixes)

### **1. Social Media Links**
```blade
<!-- Current (hardcoded) -->
<a href="https://www.facebook.com/">

<!-- Should be -->
<a href="{{ $settings->facebook_url ?? '#' }}">
```

### **2. Section Titles**
```blade
<!-- Current (hardcoded) -->
<h2>Universities You Can Visit</h2>

<!-- Should be -->
<h2>{{ $settings->university_section_title ?? 'Universities You Can Visit' }}</h2>
```

### **3. Video URL**
```blade
<!-- Current (hardcoded) -->
<a href="https://www.youtube.com/watch?v=kXgJei4u-TA">

<!-- Should be -->
<a href="{{ $settings->cta_video_url ?? '#' }}">
```

---

## 💡 Benefits of Making Dynamic

### **Current Issues:**
❌ Need developer to change text  
❌ Can't update content quickly  
❌ No A/B testing possible  
❌ Hard to localize (multi-language)  
❌ Statistics become outdated

### **After Making Dynamic:**
✅ Admin can update anytime  
✅ Quick content changes  
✅ Easy A/B testing  
✅ Multi-language support ready  
✅ Real-time statistics possible  
✅ SEO optimization easier

---

## 📝 Summary

**Currently Homepage Has:**
- ✅ **5 Dynamic Sections** (Slider, Universities, Consultants, FAQ, Testimonials, News)
- ❌ **7 Static Sections** (About, CTA, Counters, Section Titles, Images)

**To Make Fully Dynamic:**
1. Create `settings` table
2. Create `homepage_statistics` table
3. Add admin panel pages
4. Update blade template variables

**Estimated Time:**
- Settings management: 4-6 hours
- Statistics management: 2-3 hours
- Testing: 1-2 hours
- **Total: 7-11 hours**

---

**Want me to implement dynamic content management?** 🚀

Let me know which sections to prioritize!

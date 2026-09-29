<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K1GP4LL7RM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K1GP4LL7RM');
</script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HarvestTable Kitchen — Wholesome Recipes & Culinary Inspiration</title>
  <meta name="description" content="HarvestTable Kitchen is your home for approachable recipes crafted with fresh ingredients, balanced flavors, and step-by-step guidance.">
  <link rel="stylesheet" href="style.css">
  <!-- Font Awesome 6 CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

  <!-- Top Announcement Bar -->
  <div class="top-announcement-bar">
    <i class="fa-solid fa-seedling"></i> Seasonal recipe ideas for practical home cooking &bull; Browse the recipe collection.
  </div>

  <!-- Site Header -->
  <header class="site-header">
    <div class="container">
      <div class="nav-wrapper">
        <a href="index.html" class="brand-logo">
          <i class="fa-solid fa-utensils"></i>
          <span>HarvestTable <span class="highlight">Kitchen</span></span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="nav-menu">
          <a href="index.html" class="nav-link active">Home</a>
          <a href="about.html" class="nav-link">About Us</a>
          <a href="recipes.html" class="nav-link">Recipes</a>
          <a href="testimonials.html" class="nav-link">Testimonials</a>
          <a href="contact.html" class="nav-link">Contact</a>
        </nav>

        <!-- Header Actions -->
        <div class="nav-actions">
          <a href="recipes.html" class="favorites-btn" aria-label="Favorite Recipes">
            <i class="fa-solid fa-heart"></i>
            <span class="favorites-badge">0</span>
          </a>
          <a href="recipes.html" class="btn btn-amber btn-sm">Explore Recipes</a>
          <button class="hamburger-btn" aria-label="Open Navigation Menu">
            <i class="fa-solid fa-bars"></i>
          </button>
        </div>
      </div>
    </div>
  </header>

  <!-- Mobile Drawer Navigation -->
  <div class="mobile-nav-overlay"></div>
  <aside class="mobile-nav-drawer">
    <div class="mobile-nav-header">
      <div class="brand-logo" style="font-size: 1.5rem;">
        <i class="fa-solid fa-utensils"></i>
        <span>HarvestTable <span class="highlight">Kitchen</span></span>
      </div>
      <button class="mobile-nav-close" aria-label="Close Navigation Menu">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>
    <nav class="mobile-nav-links">
      <a href="index.html" class="active"><i class="fa-solid fa-house"></i> Home</a>
      <a href="about.html"><i class="fa-solid fa-circle-info"></i> About Us</a>
      <a href="recipes.html"><i class="fa-solid fa-book-open"></i> Recipe Catalog (21+)</a>
      <a href="testimonials.html"><i class="fa-solid fa-star"></i> Home Cook Reviews</a>
      <a href="contact.html"><i class="fa-solid fa-envelope"></i> Contact Us</a>
      <a href="privacy-policy.html"><i class="fa-solid fa-shield-halved"></i> Privacy Policy</a>
    </nav>
    <div class="mobile-nav-footer">
      <p style="font-size: 0.85rem; color: #5f6863; margin-bottom: 1rem;">
        <i class="fa-solid fa-location-dot"></i> 450 Culinary Arts Way, San Francisco, CA
      </p>
      <a href="recipes.html" class="btn btn-primary" style="width: 100%;">Browse 21+ Recipes</a>
    </div>
  </aside>

  <!-- Hero Section (Taste.com.au Inspired) -->
  <section class="hero-section">
    <div class="hero-pattern"></div>
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content">
          <div class="section-label" style="color: var(--spice-amber);">
            <i class="fa-solid fa-fire-burner"></i> Wholesome Everyday Cooking
          </div>
          <h1>Recipes for Everyday Cooking</h1>
          <p>
            Explore approachable recipes with clear ingredients, practical instructions, and everyday cooking ideas.
          </p>

          <!-- Interactive Search Bar -->
          <form id="hero-search-form" class="hero-search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" class="hero-search-input" placeholder="Search by dish, ingredient (e.g. salmon, quinoa, pasta)..." required>
            <button type="submit" class="hero-search-btn">Find Recipes</button>
          </form>

          <!-- Popular Search Tags -->
          <div class="popular-tags">
            <span>Popular:</span>
            <a href="recipes.html?search=bowl" class="popular-tag-item">Nourishing Bowls</a>
            <a href="recipes.html?search=salmon" class="popular-tag-item">Wild Salmon</a>
            <a href="recipes.html?search=vegan" class="popular-tag-item">Vegan Dinners</a>
            <a href="recipes.html?search=gluten-free" class="popular-tag-item">Gluten-Free</a>
            <a href="recipes.html?search=dessert" class="popular-tag-item">Healthy Baking</a>
          </div>

          <div class="hero-stats-row">
            <div class="hero-stat-item">
              <h4>21</h4>
              <p>Recipes in the collection</p>
            </div>
            <div class="hero-stat-item">
              <h4>Everyday</h4>
              <p>Practical ingredients</p>
            </div>
            <div class="hero-stat-item">
              <h4>Simple</h4>
              <p>Cooking guidance</p>
            </div>
          </div>
        </div>

        <div class="hero-image-wrapper">
          <div class="hero-image-card">
            <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=900&q=80" alt="Vibrant fresh vegetable and grain salad bowl">
          </div>
          <div class="hero-floating-badge">
            <i class="fa-solid fa-award"></i>
            <div>
              <strong>Recipe Development</strong>
              <span>Recipes are presented for home cooking</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Popular Dish Categories (Taste style) -->
  <section class="section">
    <div class="container">
      <div class="text-center">
        <span class="section-label"><i class="fa-solid fa-layer-group"></i> Meal Categories</span>
        <h2 class="section-title">Cook by Meal &amp; Craving</h2>
        <p class="section-subtitle">
          From energizing morning breakfasts and vibrant grain bowls to comforting family dinners and artisanal desserts.
        </p>
      </div>

      <div class="categories-grid">
        <!-- Category 1 -->
        <div class="category-card">
          <div class="category-img-box">
            <img src="https://images.unsplash.com/photo-1525351484163-7529414344d8?auto=format&fit=crop&w=700&q=80" alt="Breakfast and brunch dishes">
            <span class="category-recipe-count">4 Recipes</span>
          </div>
          <div class="category-info">
            <h3>Appetizers &amp; Starters</h3>
            <p>Crisp roasted chickpeas, whipped ricotta bruschetta, and fresh Vietnamese summer rolls to start any meal.</p>
            <a href="recipes.html" class="category-link">View Starters <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <!-- Category 2 -->
        <div class="category-card">
          <div class="category-img-box">
            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=700&q=80" alt="Healthy bowls and salads">
            <span class="category-recipe-count">4 Recipes</span>
          </div>
          <div class="category-info">
            <h3>Nourishing Bowls</h3>
            <p>Macro-balanced grain bowls, crispy salmon poke, spiced chickpeas, and sesame ginger soba noodles.</p>
            <a href="recipes.html" class="category-link">View Bowls <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <!-- Category 3 -->
        <div class="category-card">
          <div class="category-img-box">
            <img src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?auto=format&fit=crop&w=700&q=80" alt="Main course dinners">
            <span class="category-recipe-count">5 Recipes</span>
          </div>
          <div class="category-info">
            <h3>Weeknight Dinners</h3>
            <p>Pan-seared lemon herb salmon, Tuscan stuffed chicken breasts, butternut squash rigatoni, and savory tagines.</p>
            <a href="recipes.html" class="category-link">View Dinners <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <!-- Category 4 -->
        <div class="category-card">
          <div class="category-img-box">
            <img src="https://images.unsplash.com/photo-1551024709-8f23befc6f87?auto=format&fit=crop&w=700&q=80" alt="Artisan desserts and baking">
            <span class="category-recipe-count">4 Recipes</span>
          </div>
          <div class="category-info">
            <h3>Artisan Desserts</h3>
            <p>Flourless dark chocolate tortes, honey-roasted fig almond tarts, and Meyer lemon olive oil cakes.</p>
            <a href="recipes.html" class="category-link">View Desserts <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Chef's Picks -->
  <section class="section section-tinted">
    <div class="container">
      <div class="text-center">
        <span class="section-label"><i class="fa-solid fa-star"></i> Hand-Selected Favorites</span>
        <h2 class="section-title">Chef Maya's Featured Picks</h2>
        <p class="section-subtitle">
          Tested to perfection in our San Francisco test kitchen. These crowd-pleasers deliver restaurant-quality depth in under 35 minutes.
        </p>
      </div>

      <div class="recipes-grid">
        <!-- Pick 1: Crispy Salmon Poke Bowl -->
        <article class="recipe-card" data-category="bowls">
          <div class="recipe-img-box">
            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=600&q=80" alt="Crispy Salmon Poke Bowl">
            <button class="recipe-favorite-btn" aria-label="Save Recipe"><i class="fa-regular fa-heart"></i></button>
            <span class="recipe-dietary-badge">High-Protein</span>
          </div>
          <div class="recipe-content">
            <div class="recipe-meta-row">
              <span class="recipe-time"><i class="fa-solid fa-clock"></i> 25 Mins</span>
              <span class="recipe-difficulty">Easy</span>
            </div>
            <h3 class="recipe-title">Crispy Salmon Poke Bowl</h3>
            <div class="recipe-rating-stars">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              <span>(64 reviews)</span>
            </div>
            <p class="recipe-description">
              Succulent pan-crisped wild salmon cubes tossed in a tamari-ginger glaze atop warm brown sushi rice, creamy Haas avocado slices, steamed edamame, and pickled watermelon radishes.
            </p>
            <div class="recipe-pairing-tag">
              <i class="fa-solid fa-wine-glass"></i> Pair with: Chilled sparkling cucumber mint water or crisp Sauvignon Blanc.
            </div>
            <div class="recipe-footer">
              <a href="recipes.html" class="btn btn-outline-dark btn-sm">View Full Recipe</a>
              <span style="font-size: 0.85rem; font-weight: 700; color: var(--primary-olive);">520 kcal</span>
            </div>
          </div>
        </article>

        <!-- Pick 2: Tuscan Sun-Dried Tomato Stuffed Chicken -->
        <article class="recipe-card" data-category="mains">
          <div class="recipe-img-box">
            <img src="https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?auto=format&fit=crop&w=600&q=80" alt="Tuscan Stuffed Chicken Breast">
            <button class="recipe-favorite-btn" aria-label="Save Recipe"><i class="fa-regular fa-heart"></i></button>
            <span class="recipe-dietary-badge">Gluten-Free</span>
          </div>
          <div class="recipe-content">
            <div class="recipe-meta-row">
              <span class="recipe-time"><i class="fa-solid fa-clock"></i> 35 Mins</span>
              <span class="recipe-difficulty">Medium</span>
            </div>
            <h3 class="recipe-title">Tuscan Stuffed Chicken</h3>
            <div class="recipe-rating-stars">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              <span>(89 reviews)</span>
            </div>
            <p class="recipe-description">
              Tender organic chicken breasts stuffed with baby spinach, sweet sun-dried tomatoes, and creamy sheep's milk feta, pan-seared and simmered in a velvety garlic-white wine reduction.
            </p>
            <div class="recipe-pairing-tag">
              <i class="fa-solid fa-wine-glass"></i> Pair with: Steamed broccolini and a bright Italian Pinot Grigio.
            </div>
            <div class="recipe-footer">
              <a href="recipes.html" class="btn btn-outline-dark btn-sm">View Full Recipe</a>
              <span style="font-size: 0.85rem; font-weight: 700; color: var(--primary-olive);">480 kcal</span>
            </div>
          </div>
        </article>

        <!-- Pick 3: Honey Roasted Fig Tart -->
        <article class="recipe-card" data-category="desserts">
          <div class="recipe-img-box">
            <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=600&q=80" alt="Rustic Honey Roasted Fig and Almond Tart">
            <button class="recipe-favorite-btn" aria-label="Save Recipe"><i class="fa-regular fa-heart"></i></button>
            <span class="recipe-dietary-badge">Vegetarian</span>
          </div>
          <div class="recipe-content">
            <div class="recipe-meta-row">
              <span class="recipe-time"><i class="fa-solid fa-clock"></i> 40 Mins</span>
              <span class="recipe-difficulty">Easy</span>
            </div>
            <h3 class="recipe-title">Honey Roasted Fig Tart</h3>
            <div class="recipe-rating-stars">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
              <span>(47 reviews)</span>
            </div>
            <p class="recipe-description">
              Golden almond flour shortcrust filled with whipped orange blossom mascarpone, crowned with caramelized black mission figs, fresh thyme sprigs, and a drizzle of raw wildflower honey.
            </p>
            <div class="recipe-pairing-tag">
              <i class="fa-solid fa-wine-glass"></i> Pair with: Warm chamomile blossom tea or an iced espresso tonic.
            </div>
            <div class="recipe-footer">
              <a href="recipes.html" class="btn btn-outline-dark btn-sm">View Full Recipe</a>
              <span style="font-size: 0.85rem; font-weight: 700; color: var(--primary-olive);">310 kcal</span>
            </div>
          </div>
        </article>
      </div>

      <div class="text-center" style="margin-top: 3.5rem;">
        <a href="recipes.html" class="btn btn-primary">
          <i class="fa-solid fa-book-open"></i> Browse All 21 Catalog Recipes
        </a>
      </div>
    </div>
  </section>

  <!-- Why HarvestTable Kitchen Features -->
  <section class="section">
    <div class="container">
      <div class="text-center">
        <span class="section-label"><i class="fa-solid fa-heart-pulse"></i> The HarvestTable Kitchen Standard</span>
        <h2 class="section-title">Cooking Clean Without Compromise</h2>
        <p class="section-subtitle">
          We believe cooking at home should nourish your body, delight your palate, and fit seamlessly into busy modern life.
        </p>
      </div>

      <div class="features-grid">
        <div class="feature-item">
          <div class="feature-icon-box"><i class="fa-solid fa-carrot"></i></div>
          <h3>Whole Fresh Foods</h3>
          <p>Zero ultra-processed fillers, artificial flavorings, or refined sugars. Every recipe relies on real produce, cold-pressed oils, and natural seasonings.</p>
        </div>

        <div class="feature-item">
          <div class="feature-icon-box"><i class="fa-solid fa-stopwatch"></i></div>
          <h3>30-Minute Weeknight Focus</h3>
          <p>Over 70% of our recipes are designed for fast weeknight execution, minimizing prep dishes while maximizing bold, layered flavor profiles.</p>
        </div>

        <div class="feature-item">
          <div class="feature-icon-box"><i class="fa-solid fa-check-double"></i></div>
          <h3>Triple-Tested Precision</h3>
          <p>Each recipe is prepared and refined three separate times across gas and induction stovetops so measurements and cooking times never fail.</p>
        </div>

        <div class="feature-item">
          <div class="feature-icon-box"><i class="fa-solid fa-wheat-awn-circle-exclamation"></i></div>
          <h3>Dietary Adaptable</h3>
          <p>Every dish includes seamless substitutions for gluten-free, dairy-free, vegan, nut-free, and high-protein dietary preferences.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section class="section" style="padding-top: 0;">
    <div class="container">
      <div class="newsletter-section">
        <span class="section-label" style="color: var(--spice-amber);"><i class="fa-solid fa-envelope-open-text"></i> Weekly Culinary Inspiration</span>
        <h2>Join The Wholesome Table</h2>
        <p>
          Get our freshest seasonal recipes, time-saving kitchen hacks, and weekly meal plan guides delivered every Sunday. Plus, receive our free <strong>"20-Minute Weeknight Dinners"</strong> digital cookbook instantly.
        </p>
        <form class="newsletter-form">
          <input type="email" class="newsletter-input" placeholder="Enter your email address..." required>
          <button type="submit" class="btn btn-amber">
            <i class="fa-solid fa-paper-plane"></i> Get Free Cookbook
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- Global Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <!-- Brand Info -->
        <div class="footer-brand">
          <h3><i class="fa-solid fa-utensils"></i> HarvestTable Kitchen</h3>
          <p>
            Dedicated to inspiring wholesome home cooking, celebrating fresh seasonal ingredients, and proving that nutrient-dense dining can be exceptionally flavorful and effortless.
          </p>
          <div class="footer-social-links">
            <a href="#" class="social-icon-btn" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="social-icon-btn" aria-label="Pinterest"><i class="fa-brands fa-pinterest"></i></a>
            <a href="#" class="social-icon-btn" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            <a href="#" class="social-icon-btn" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-col">
          <h4>Explore</h4>
          <div class="footer-links">
            <a href="index.html"><i class="fa-solid fa-chevron-right"></i> Home</a>
            <a href="about.html"><i class="fa-solid fa-chevron-right"></i> About Our Test Kitchen</a>
            <a href="recipes.html"><i class="fa-solid fa-chevron-right"></i> Recipe Catalog (21+ Items)</a>
            <a href="testimonials.html"><i class="fa-solid fa-chevron-right"></i> Home Cook Reviews</a>
            <a href="contact.html"><i class="fa-solid fa-chevron-right"></i> Contact &amp; Inquiries</a>
            <a href="privacy-policy.html"><i class="fa-solid fa-chevron-right"></i> Privacy &amp; Terms</a>
          </div>
        </div>

        <!-- Categories -->
        <div class="footer-col">
          <h4>Recipe Types</h4>
          <div class="footer-links">
            <a href="recipes.html"><i class="fa-solid fa-bowl-food"></i> Appetizers &amp; Starters</a>
            <a href="recipes.html"><i class="fa-solid fa-leaf"></i> Nourishing Grain Bowls</a>
            <a href="recipes.html"><i class="fa-solid fa-drumstick-bite"></i> Weeknight Dinners</a>
            <a href="recipes.html"><i class="fa-solid fa-cookie-bite"></i> Artisan Desserts</a>
            <a href="recipes.html"><i class="fa-solid fa-glass-water"></i> Beverages &amp; Elixirs</a>
            <a href="recipes.html"><i class="fa-solid fa-fire"></i> High-Protein Dishes</a>
          </div>
        </div>

        <!-- Studio Information -->
        <div class="footer-col">
          <h4>Test Kitchen Studio</h4>
          <div class="footer-contact-item">
            <i class="fa-solid fa-location-dot"></i>
            <span>450 Culinary Arts Way, Suite 300<br>San Francisco, CA 94107</span>
          </div>
          <div class="footer-contact-item">
            <i class="fa-solid fa-clock"></i>
            <span>Mon–Fri: 9:00 AM – 5:00 PM PST</span>
          </div>
          <div class="footer-contact-item">
            <i class="fa-solid fa-envelope"></i>
            <span>hello@harvesttablekitchen.example</span>
          </div>
          <div class="footer-contact-item">
            <i class="fa-solid fa-phone"></i>
            <span>(415) 555-0842 (Media &amp; Inquiries)</span>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; 2026 HarvestTable Kitchen Culinary Co. All rights reserved. Crafted with clean culinary passion.</p>
        <p>
          <a href="privacy-policy.html">Privacy Policy</a> &bull; 
          <a href="contact.html">Recipe Permissions</a> &bull; 
          <a href="about.html">Culinary Philosophy</a>
        </p>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>

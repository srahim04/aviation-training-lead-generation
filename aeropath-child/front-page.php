
<?php
get_header();
?>

<nav class="aeropath-nav" aria-label="AeroPath navigation">
    <div class="nav-container">
        <a class="aeropath-logo" href="#home">
            <span class="logo-mark">✈</span>
            Aero<span>Path</span>
        </a>

        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#programs">Programs</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>

        <a class="nav-cta" href="#contact">
            Request Information
        </a>
    </div>
</nav>

<main id="main" class="aeropath-home">

    <!-- HERO BANNER -->
    <section id="home" class="hero">
        <div class="hero-image">
            <img
                src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/hero-aircraft.webp'); ?>"
                alt="Aircraft on an airport runway"
                fetchpriority="high"
            >
        </div>

        <div class="hero-overlay"></div>

        <div class="hero-content">
            <p class="eyebrow">YOUR JOURNEY STARTS HERE</p>

            <h1>Build Your Future<br>in Aviation</h1>

            <p class="hero-description">
                Discover aviation training programs designed
                to help you explore new opportunities,
                build practical knowledge, and take your
                next step with confidence.
            </p>

            <div class="hero-actions">
                <a href="#programs" class="primary-button">
                    Explore Programs
                </a>

                <a href="#contact" class="secondary-button">
                    Request Information
                </a>
            </div>
        </div>
    </section>

    <!-- PROGRAMS -->
    <section id="programs" class="programs-section">
        <div class="section-heading">
            <p class="eyebrow">EXPLORE YOUR POSSIBILITIES</p>
            <h2>Find Your Path in Aviation</h2>
            <p>
                From the flight deck to airport operations,
                explore programs built around your interests.
            </p>
        </div>

        <div class="program-grid">

            <article class="program-card">
                <img
                    class="program-image"
                    src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/pilot-training.jpg'); ?>"
                    alt="Pilot training inside an aircraft cockpit"
                    loading="lazy"
                >
                <div class="program-card-content">
                    <span class="program-category">FLIGHT TRAINING</span>
                    <h3>Private Pilot Training</h3>
                    <p>
                        Explore the fundamentals of flight,
                        aircraft operations, and aviation safety.
                    </p>
                    <a href="#contact" data-program="private-pilot">
                        Explore Program →
                    </a>
                </div>
            </article>

            <article class="program-card">
                <img
                    class="program-image"
                    src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/instrument-training.jpg'); ?>"
                    alt="Aircraft cockpit instruments"
                    loading="lazy"
                >
                <div class="program-card-content">
                    <span class="program-category">FLIGHT TRAINING</span>
                    <h3>Instrument Rating Preparation</h3>
                    <p>
                        Learn about instrument procedures,
                        navigation, and flight planning.
                    </p>
                    <a href="#contact" data-program="instrument">
                        Explore Program →
                    </a>
                </div>
            </article>

            <article class="program-card">
                <img
                    class="program-image"
                    src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/aviation-safety.jpg'); ?>"
                    alt="Aircraft safety inspection"
                    loading="lazy"
                >
                <div class="program-card-content">
                    <span class="program-category">AVIATION SAFETY</span>
                    <h3>Aviation Safety Fundamentals</h3>
                    <p>
                        Understand safety procedures,
                        risk management, and aviation regulations.
                    </p>
                    <a href="#contact" data-program="safety">
                        Explore Program →
                    </a>
                </div>
            </article>

            <article class="program-card">
                <img
                    class="program-image"
                    src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/airport-operations.jpg'); ?>"
                    alt="Airport ground operations"
                    loading="lazy"
                >
                <div class="program-card-content">
                    <span class="program-category">AIRPORT OPERATIONS</span>
                    <h3>Airport Operations Essentials</h3>
                    <p>
                        Discover airport operations,
                        ground services, and daily coordination.
                    </p>
                    <a href="#contact" data-program="airport">
                        Explore Program →
                    </a>
                </div>
            </article>

        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="about-section">
        <div class="about-content">
            <p class="eyebrow">WHY AEROPATH?</p>
            <h2>Your Future Takes Flight Here</h2>
            <p>
                Aviation offers opportunities both in the air
                and on the ground. AeroPath Training is a
                demonstration platform designed to help
                prospective learners explore different
                aviation career pathways.
            </p>
            <a href="#contact" class="primary-button">
                Get Started
            </a>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="contact-section">
        <div class="section-heading">
            <p class="eyebrow">TAKE THE NEXT STEP</p>
            <h2>Ready to Explore Your Options?</h2>
            <p>
                Interested in a training program?
                Complete our demonstration inquiry form below.
            </p>
        </div>

        <form id="inquiry-form" class="inquiry-form">

            <input type="hidden" id="utm-source" name="utm_source">
            <input type="hidden" id="utm-campaign" name="utm_campaign">

            <label for="full-name">Full Name</label>
            <input type="text" id="full-name" name="full-name" required>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>

            <label for="program">Program of Interest</label>
            <select id="program" name="program" required>
                <option value="">Select a program</option>
                <option value="private-pilot">Private Pilot Training</option>
                <option value="instrument">Instrument Rating Preparation</option>
                <option value="safety">Aviation Safety Fundamentals</option>
                <option value="airport">Airport Operations Essentials</option>
            </select>

            <label for="message">Message</label>
            <textarea
                id="message"
                name="message"
                rows="4"
                placeholder="Tell us what you're interested in..."
            ></textarea>

            <button type="submit" class="primary-button">
                Submit Inquiry
            </button>

            <p id="form-message" role="status" aria-live="polite"></p>
        </form>

        <p class="demo-disclaimer">
            Portfolio demonstration only. No inquiries are stored or emailed.
        </p>
    </section>

</main>

<?php get_footer(); ?>

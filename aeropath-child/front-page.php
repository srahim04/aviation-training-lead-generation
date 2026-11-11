
<?php
// Load the WordPress header and navigation.
get_header();
?>

<main id="main" class="aeropath-home">

    <section class="hero">
        <div class="hero-content">
            <p class="eyebrow">AVIATION TRAINING MADE SIMPLE</p>
            <h1>Build Your Future in Aviation</h1>
            <p>
                Explore practical aviation training programs,
                learn new skills, and take the next step
                toward your career goals.
            </p>
            <a href="#programs" class="primary-button">
                Explore Programs
            </a>
            
            <a href="#contact" class="secondary-button">
                Request Information
            </a>
        </div>

        <div class="hero-image">
            <img
                src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/hero-aircraft.jpg'); ?>"
                alt="Aircraft on an airport runway"
            >
        </div>
    </section>


    <section id="programs" class="programs-section">
        <div class="section-heading">
            <p class="eyebrow">OUR PROGRAMS</p>
            <h2>Find the Right Training Program</h2>
            <p>
                Browse our training options and discover
                which program matches your interests.
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
                <span class="program-category">FLIGHT TRAINING</span>
                <h3>Private Pilot Training</h3>
                <p>
                    Learn the fundamentals of flight,
                    aircraft operations, and aviation safety.
                </p>
                <a href="#contact" data-program="private-pilot">Request Information →</a>
            </article>

            <article class="program-card">

                <img
                    class="program-image"
                    src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/instrument-training.jpg'); ?>"
                    alt="Aircraft cockpit instruments and navigation controls"
                    loading="lazy"
                >
                <span class="program-category">FLIGHT TRAINING</span>
                <h3>Instrument Rating Preparation</h3>
                <p>
                    Explore instrument procedures,
                    navigation, and flight planning.
                </p>
                <a href="#contact" data-program="instrument">Request Information →</a>
            </article>

            <article class="program-card">

                <img
                    class="program-image"
                    src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/aviation-safety.jpg'); ?>"
                    alt="Aircraft safety inspection"
                    loading="lazy"
                >
                <span class="program-category">AVIATION SAFETY</span>
                <h3>Aviation Safety Fundamentals</h3>
                <p>
                    Understand safety procedures,
                    risk management, and aviation regulations.
                </p>
                <a href="#contact" data-program="safety">Request Information →</a>
            </article>

            <article class="program-card">

                <img
                    class="program-image"
                    src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/airport-operations.jpg'); ?>"
                    alt="Airport ground operations near an aircraft"
                    loading="lazy"
                >
                <span class="program-category">AIRPORT OPERATIONS</span>
                <h3>Airport Operations Essentials</h3>
                <p>
                    Learn about airport operations,
                    ground services, and daily coordination.
                </p>
                <a href="#contact" data-program="airport">Request Information →</a>
            </article>

        </div>
    </section>

    <section class="about-section">
        <div class="about-content">
            <p class="eyebrow">WHY AEROPATH?</p>
            <h2>Training That Fits Your Goals</h2>
            <p>
                Whether you're interested in flying,
                aviation safety, or airport operations,
                AeroPath Training helps you explore
                different paths in the aviation industry.
            </p>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <div class="section-heading">
            <p class="eyebrow">GET STARTED</p>
            <h2>Interested in a Program?</h2>
            <p>
                Fill out the form below to request
                more information about our training options.
            </p>
        </div>

        <form id="inquiry-form" class="inquiry-form">

            <label for="full-name">Full Name</label>
            <input
                type="text"
                id="full-name"
                name="full-name"
                required
            >

            <label for="email">Email Address</label>
            <input
                type="email"
                id="email"
                name="email"
                required
            >

            <label for="program">Program of Interest</label>
            <select id="program" name="program" required>
                <option value="">Select a program</option>
                <option value="private-pilot">
                    Private Pilot Training
                </option>
                <option value="instrument">
                    Instrument Rating Preparation
                </option>
                <option value="safety">
                    Aviation Safety Fundamentals
                </option>
                <option value="airport">
                    Airport Operations Essentials
                </option>
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
    </section>

</main>

<?php
// Load the WordPress footer.
get_footer();
?>

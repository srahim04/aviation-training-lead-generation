## Website Demo

[**Watch the AeroPath Training Website Demo**](https://github.com/srahim04/aviation-training-lead-generation/releases/tag/v1.0)

I recorded a walkthrough of the AeroPath Training website to show how the different features work, including the training programs, sticky navigation, inquiry form, and responsive mobile layout.

I also discuss the performance improvements and Google Tag Manager setup I worked on. Screenshots of the website, tracking tests, and Lighthouse results are available in the `screenshots/` folder.

## Digital Marketing & Analytics

I created a simulated Google Ads Search campaign for AeroPath Training to explore how search advertising could help people discover aviation training programs and encourage them to request more information.

The campaign plan includes:

- Aviation training keywords and search targeting
- Sample Google Search ad headlines and descriptions
- Geographic targeting and a proposed advertising budget
- Conversion goals for program exploration and training inquiries

[View Google Ads Campaign & Tracking Plan](docs/google-ads-campaign.md)

### Google Tag Manager Implementation

I added Google Tag Manager to the WordPress website to test how visitor interactions could be tracked.

I configured the following triggers:

- Explore Programs Click
- Request Information Click
- Demo Inquiry Success

I also set up two tags:

- **Google Analytics:** Configured to fire when the page loads
- **GA4 – Demo Inquiry Success:** Configured to fire when someone successfully submits the demo inquiry form

I tested the setup using Google Tag Manager's Preview mode and Tag Assistant. Both tags fired successfully during testing, including the inquiry success tag after a valid form submission.

The `demo_inquiry_success` event was used to distinguish successful form submissions from visitors simply clicking the inquiry button.

Screenshots of the tags, triggers, and successful testing are included in the `screenshots/` folder.

### Google Analytics 4

I connected the Google Analytics tag through Google Tag Manager and developed a measurement plan for tracking how visitors interact with the website.

The plan focuses on:

- Visitors exploring aviation training programs
- Visitors clicking Request Information
- Successful demo inquiry submissions

This project uses a local WordPress website and a demonstration form. No real customer information was collected, and no paid advertising campaigns were launched.

### Website Performance & SEO Testing

I used Google Lighthouse to test the website's performance, accessibility, best practices, and SEO using mobile device emulation.

**Lighthouse Results:**

- **Performance: 98/100**
- **Accessibility: 93/100**
- **Best Practices: 78/100**
- **SEO: 100/100**

I also optimized the homepage airplane image by converting it to WebP, reducing its file size to approximately 54 KB while keeping the image quality suitable for the website.

The Lighthouse audit was conducted in a local WordPress environment. HTTPS-related findings associated with local development contributed to the Best Practices score.

The full Lighthouse report and supporting screenshots are available in the `screenshots/` folder.

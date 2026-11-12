## Website Demo

[**Watch the AeroPath Training Website Demo**](https://github.com/srahim04/aviation-training-lead-generation/releases/tag/v1.0)

I recorded a walkthrough of the AeroPath Training website to show how the different features work, including the training programs, sticky navigation, inquiry form, and responsive mobile layout.

I also discuss the performance improvements and Google Tag Manager setup I worked on. Screenshots of the website, tracking tests, and Lighthouse results are available in the `screenshots/` folder.

## Lead Generation & Website Analytics

I wanted AeroPath Training to do more than display aviation training programs. I designed the website to help visitors explore their options, find programs they're interested in, and easily request more information.

I connected the training program buttons to an interactive inquiry form with JavaScript validation and a confirmation message after a successful demo submission.

I also integrated Google Tag Manager and configured tracking to explore how these interactions could be measured.

### Google Tag Manager Implementation

I configured three triggers to track different visitor interactions:

- **Explore Programs Click:** When someone clicks the Explore Programs button
- **Request Information Click:** When someone clicks Request Information
- **Demo Inquiry Success:** When someone successfully completes the demo inquiry form

I also set up two tags:

- **Google Analytics:** Configured to fire when the website loads
- **GA4 – Demo Inquiry Success:** Configured to fire after a successful demo inquiry

For the inquiry form, I used JavaScript to push a custom `demo_inquiry_success` event to the `dataLayer` after the form passes validation.

I tested the setup using Google Tag Manager's Preview mode and Tag Assistant. Both tags fired successfully, including the inquiry success tag after a valid demo submission.

Screenshots of the tracking setup and testing are available in the `screenshots/` folder.

### Google Analytics 4

I configured Google Analytics 4 through Google Tag Manager and created a measurement plan focused on three interactions:

- Visitors exploring aviation training programs
- Visitors clicking Request Information
- Visitors successfully completing the demo inquiry form

Although the tags fired successfully in Tag Assistant, I didn't independently confirm the events appearing in GA4 Realtime reporting.

This helped me explore how website analytics could be used to understand visitor interest and support lead-generation efforts.

The inquiry form is a demonstration and doesn't send or store real customer information.

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

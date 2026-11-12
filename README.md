## Website Demo

[**Watch the AeroPath Training Website Demo**](https://github.com/srahim04/aviation-training-lead-generation/releases/tag/v1.0)

I recorded a walkthrough of AeroPath Training showing the training programs, navigation, inquiry form, and mobile layout. I also go over the changes I made to improve the website's performance and how I set up Google Tag Manager.

Screenshots of the website, tracking tests, and Lighthouse results are in the `screenshots/` folder.

## Lead Generation & Website Analytics

When building AeroPath Training, I wanted visitors to be able to do more than just browse the training programs. I added ways for them to explore different courses and request more information if something interested them.

I used JavaScript to connect the program buttons to an inquiry form, check that the required fields were filled out, and display a confirmation message after a successful submission.

I also set up Google Tag Manager to track how visitors interact with different parts of the website.

### Google Tag Manager

I created three triggers to track:

- **Explore Programs Click:** When someone clicks the Explore Programs button
- **Request Information Click:** When someone clicks the Request Information button
- **Demo Inquiry Success:** When someone completes the inquiry form successfully

I also configured two tags:

- **Google Analytics:** Fires when the website loads
- **GA4 – Demo Inquiry Success:** Fires after a successful form submission

For the inquiry form, I added JavaScript that pushes a `demo_inquiry_success` event to the `dataLayer` once the form passes validation.

I used Google Tag Manager's Preview mode and Tag Assistant to check that everything was working. Both tags fired during testing, including the inquiry success tag after submitting a valid form.

I included screenshots of the triggers, tags, and test results in the `screenshots/` folder.

### Google Analytics 4

I set up Google Analytics 4 through Google Tag Manager and outlined three interactions I wanted to measure:

- How visitors explore the training programs
- How often they click Request Information
- When they successfully submit the demo inquiry form

The tags fired correctly in Tag Assistant, although I wasn't able to independently verify the events in GA4 Realtime.

This part of the project helped me get more familiar with setting up website tracking and understanding what information would be useful when reviewing how visitors use a site.

The inquiry form is only a demo, so it doesn't send or store actual customer information.

### Website Performance & SEO

I used Google Lighthouse to check the website's performance, accessibility, best practices, and SEO on mobile.

**Lighthouse Results:**

- **Performance:** 98/100
- **Accessibility:** 93/100
- **Best Practices:** 78/100
- **SEO:** 100/100

One of the changes I made was converting the homepage airplane image to WebP. This brought the file size down to around 54 KB without noticeably affecting how it looked on the website.

I ran the Lighthouse test on my local WordPress site. Some HTTPS-related issues from the local setup contributed to the lower Best Practices score.

The full Lighthouse report and screenshots are available in the `screenshots/` folder.

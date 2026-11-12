# Digital Marketing & Website Analytics

## Overview

When I built AeroPath Training, I wanted to think about more than just how the website looked. I also wanted to understand how visitors would explore the training programs, what would encourage them to request more information, and how those interactions could be tracked.

I worked with Google Tag Manager and Google Analytics 4 to explore the analytics side of the website and how it could support lead generation.

## Lead Generation

I designed the website so visitors could easily move from browsing training programs to requesting more information.

Each training program includes a Learn More button that directs visitors to the inquiry section. I also added a Request Information button to make the form easy to access.

The form uses JavaScript validation and displays a confirmation message after a successful demo submission.

Since this is a portfolio project, the form doesn't send or store real customer information.

## Google Tag Manager

I integrated Google Tag Manager into the WordPress website and configured triggers for three interactions:

- Explore Programs clicks
- Request Information clicks
- Successful demo inquiry submissions

For the inquiry form, I used JavaScript to push a custom `demo_inquiry_success` event into the `dataLayer` after successful validation.

I also configured a Google Analytics tag and a GA4 inquiry success tag. I tested them using Tag Assistant and confirmed that both fired successfully.

This helped me understand how a website can distinguish between someone exploring its content and someone completing an inquiry.

## Google Analytics 4

I configured Google Analytics 4 through Google Tag Manager and planned how the website could measure visitor engagement.

I focused on three interactions:

- Visitors exploring training programs
- Visitors clicking Request Information
- Visitors successfully completing the demo inquiry form

Although the tags fired successfully in Tag Assistant, I wasn't able to confirm the events appearing in GA4 Realtime reporting.

## How This Connects to Digital Marketing

The goal was to build a website that could support more than just displaying information.

By connecting the training programs to an inquiry form and setting up interaction tracking, I explored how a business could understand visitor interest and identify opportunities to improve its lead-generation process.

This gave me hands-on experience connecting WordPress development, website usability, conversion-focused design, and marketing analytics.

Screenshots of my Google Tag Manager setup and testing are available in the repository's `screenshots/` folder.

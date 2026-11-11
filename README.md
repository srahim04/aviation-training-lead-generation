# Aviation Training Digital Marketing & Lead Generation Platform

## About the Project

I built AeroPath Training as a practice WordPress website to explore how web development and digital marketing can work together for an aviation training organization.

I wanted to create a website where visitors could easily explore training programs, find information, and submit an inquiry. I also focused on making the website responsive and easy to navigate.

AeroPath Training is a fictional organization created for this project.

## What I Built

- A custom WordPress child theme using Astra
- A homepage featuring four aviation training programs
- Responsive layouts using HTML, CSS, and media queries
- Desktop and mobile navigation menus
- An interactive inquiry form using JavaScript
- Basic form validation and a confirmation message
- An SEO meta description for the homepage
- Mobile performance and accessibility testing using Google Lighthouse

The inquiry form is a demonstration feature. It validates information in the browser but does not send or store submissions.

## Tools Used

WordPress, LocalWP, PHP, HTML5, CSS3, JavaScript, Astra, Google Chrome DevTools, Google Lighthouse, GitHub

## Lighthouse Results

I tested the website using Google Lighthouse in mobile mode.

| Category | Score |
|---|---|
| Performance | 99 |
| Accessibility | 93 |
| Best Practices | 78 |
| SEO | 100 |

The website was tested locally over HTTP. The Best Practices score was affected by HTTPS-related checks in the local development environment.

## Project Files

- [WordPress child theme](aeropath-child/) — Custom PHP, CSS, and JavaScript files
- [Website screenshots](screenshots/AeroPath%20Screenshots/) — Homepage, training programs, inquiry form, and mobile layout
- [Lighthouse report](screenshots/AeroPath%20Screenshots/06-lighthouse-mobile.pdf) — Mobile testing results

## How to Run the Website

1. Install WordPress locally using LocalWP.
2. Install the free Astra theme.
3. Copy the `aeropath-child` folder into `wp-content/themes/`.
4. Activate AeroPath Child under Appearance → Themes.
5. Create a page called Home and set it as the static homepage under Settings → Reading.
6. Create a WordPress navigation menu with links to the homepage sections.
7. Open the website to view the training programs and test the demo inquiry form.

This project helped me practice WordPress customization, responsive design, JavaScript interactions, SEO, and website testing.

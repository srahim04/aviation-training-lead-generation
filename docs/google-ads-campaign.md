
# AeroPath Training — Simulated Google Ads Search Campaign

## Campaign Overview

This is a simulated Google Ads Search campaign designed for AeroPath Training, a fictional aviation training provider. The goal is to attract people interested in aviation training programs and encourage them to explore courses or complete a demo inquiry form.

This campaign was created as a portfolio planning exercise. No advertisements were launched, no advertising budget was spent, and no real leads were collected.

## Campaign Settings

| Setting | Proposed Configuration |
|---|---|
| Campaign name | AeroPath Training — Search Lead Generation |
| Campaign type | Google Ads Search |
| Primary objective | Leads |
| Geographic targeting | United States |
| Language | English |
| Audience | People researching aviation training and career pathways |
| Proposed daily budget | $15 (simulation only) |
| Bidding strategy | Maximize Conversions (proposed) |
| Landing page | AeroPath Training WordPress homepage (local demo) |

## Keyword Targeting

The following keywords are proposed targets, not keywords from a live campaign or verified search-volume research.

| Ad Group | Keyword | Match Type |
|---|---|---|
| Pilot Training | "pilot training programs" | Phrase |
| Pilot Training | "private pilot training" | Phrase |
| Pilot Training | [aviation pilot courses] | Exact |
| Aircraft Maintenance | "aircraft maintenance training" | Phrase |
| Aircraft Maintenance | "aviation maintenance courses" | Phrase |
| Airport Operations | "airport operations training" | Phrase |
| Airport Operations | [airport operations course] | Exact |
| Aviation Safety | "aviation safety training" | Phrase |
| Aviation Safety | [aviation safety course] | Exact |

### Proposed Negative Keywords

- free
- jobs
- salary
- simulator game
- toys

These would be reviewed against actual search terms if the campaign were launched.

## Sample Responsive Search Ad

### Headlines

1. Explore Aviation Training
2. Start Your Aviation Journey
3. Discover Pilot Training
4. Learn Aviation Safety
5. Explore Airport Operations
6. Aircraft Maintenance Courses
7. Find Your Training Path
8. Build Your Aviation Skills
9. Explore Available Programs
10. Request Program Information

### Descriptions

1. Explore aviation training pathways and discover programs that match your interests.
2. Learn about pilot training, airport operations, aircraft maintenance, and aviation safety.
3. Compare training options and find a pathway that fits your aviation career goals.
4. Browse aviation programs and request more information through our demo inquiry form.

## Proposed Conversion Goals

| Event | User Action | Measurement Plan |
|---|---|---|
| select_programs | Clicks Explore Programs | GTM click trigger; proposed GA4 event |
| request_information | Clicks Request Information | GTM click trigger; proposed GA4 event |
| demo_inquiry_success | Completes the demo inquiry form successfully | JavaScript dataLayer event; GTM custom event trigger; proposed GA4 key event |

The primary proposed conversion is demo_inquiry_success. Because the form is a demonstration and does not send or store inquiries, this is a simulated conversion, not a real lead.

## Google Tag Manager Testing

The following interactions were verified using Tag Assistant on the local WordPress website:

- Explore Programs click detected with Click Text = Explore Programs
- Request Information click detected with Click Text = Request Information
- Successful demo inquiry detected through the custom JavaScript event demo_inquiry_success

The website pushes demo_inquiry_success to the dataLayer only after client-side form validation succeeds.

## GA4 Measurement Plan

A Google Analytics 4 account/property setup was started, but no valid web data stream or Measurement ID was connected to the local website.

Proposed GA4 events:
- select_programs
- request_information
- demo_inquiry_success

If GA4 were connected to a valid web data stream, these events could be sent through GTM and tested in GA4 DebugView. The demo_inquiry_success event could then be designated as a key event.

## Implementation Status

**Implemented and tested:** Local WordPress website, inquiry form validation, GTM container installation, click detection, and custom demo inquiry event detection.

**Planned but not deployed:** GA4 event tags, GA4 key-event reporting, and the simulated Google Ads campaign.

No paid advertising, real form submissions, or actual conversion performance is claimed.

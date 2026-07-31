# Laravel Component Specification

Version: 1.0

Project: Ashuraj Srivastav Portfolio

---

# 1. Purpose

This document defines all reusable Blade components used throughout the portfolio.

The application must follow a component-driven architecture to ensure:

- Reusability
- Maintainability
- Consistency
- Scalability

All UI elements should be built as reusable Blade components wherever possible.

---

# 2. Component Directory Structure

resources/
ÀÄÄ views/
    ÀÄÄ components/
        ÃÄÄ layout/
        ÃÄÄ navigation/
        ÃÄÄ hero/
        ÃÄÄ sections/
        ÃÄÄ cards/
        ÃÄÄ timeline/
        ÃÄÄ forms/
        ÃÄÄ ui/
        ÀÄÄ footer/

---

# 3. Layout Components

## x-layout

Purpose

Master layout for all pages.

Responsibilities

- HTML structure
- Head metadata
- Navbar
- Footer
- Theme support
- Asset loading

Props

$title

$description

$keywords

$image

---

## x-container

Purpose

Maintain consistent page width.

Responsibilities

Responsive padding

Maximum width

Center alignment

---

## x-section

Purpose

Provide consistent spacing between sections.

Props

id

class

background

padding

---

# 4. Navigation Components

## x-navbar

Contains

Logo

Navigation links

Resume button

Theme switch

Mobile menu

Sticky behavior

---

## x-mobile-menu

Slide-out navigation.

Contains same links as desktop.

---

## x-nav-link

Reusable navigation item.

Props

href

label

active

---

# 5. Hero Components

## x-hero

Contains

Headline

Subheadline

Description

Buttons

Profile photo

Social links

Trust indicators

---

## x-social-links

Displays

GitHub

LinkedIn

Email

---

## x-cta-buttons

Primary button

Secondary button

Reusable everywhere.

---

# 6. UI Components

## x-button

Variants

Primary

Secondary

Outline

Ghost

Danger

Sizes

Small

Medium

Large

Props

href

type

icon

loading

disabled

---

## x-badge

Technology badges.

Examples

Laravel

PHP

Moodle

Bootstrap

MySQL

---

## x-heading

Reusable section heading.

Props

title

subtitle

alignment

---

## x-divider

Simple reusable divider.

---

# 7. Card Components

## x-project-card

Contains

Project image

Title

Summary

Technology badges

View Details button

---

## x-service-card

Contains

Icon

Title

Description

Features

Learn More

---

## x-stat-card

Displays

Value

Title

Description

Example

40%

API Improvement

---

## x-skill-card

Contains

Category

Technologies

Icons

---

# 8. Timeline Components

## x-timeline

Container.

---

## x-timeline-item

Contains

Company

Role

Duration

Description

Achievements

Technologies

---

# 9. Form Components

## x-input

Text input.

Supports

Validation

Placeholder

Required

---

## x-textarea

Reusable textarea.

---

## x-select

Reusable dropdown.

---

## x-contact-form

Contains

Name

Email

Subject

Message

Submit button

Validation

Success message

---

# 10. Footer Components

## x-footer

Contains

Logo

Quick links

Social links

Copyright

Back to top

---

# 11. Project Components

## x-project-gallery

Displays project screenshots.

---

## x-project-tech-stack

Technology badges.

---

## x-project-metrics

Displays

Users

Performance

Timeline

Role

---

## x-related-projects

Displays similar projects.

---

# 12. Experience Components

## x-company-card

Company

Role

Duration

Achievements

---

# 13. Resume Components

## x-resume-preview

Displays embedded resume.

---

## x-download-resume

Download button.

Reusable.

---

# 14. Utility Components

## x-alert

Success

Error

Warning

Info

---

## x-empty-state

Illustration

Message

Button

---

## x-loading

Spinner

Skeleton

Progress

---

## x-breadcrumb

Supports

Project pages

Future blog

---

# 15. Theme Components

## x-theme-toggle

Switch between

Light

Dark

Preference saved in browser.

---

# 16. Component Naming Rules

All components must:

Follow Laravel naming conventions.

Have meaningful names.

Accept props instead of hardcoded values.

Remain reusable.

Avoid duplicated markup.

---

# 17. Component Styling Rules

No inline CSS.

No inline JavaScript.

Use Bootstrap utility classes.

Custom CSS only when necessary.

---

# 18. Accessibility

Every component must:

Use semantic HTML.

Support keyboard navigation.

Have proper ARIA labels.

Maintain sufficient color contrast.

---

# 19. Performance

Components should:

Avoid unnecessary DOM nesting.

Lazy load images.

Minimize JavaScript.

Use optimized assets.

---

# 20. Success Criteria

Every page should be assembled from reusable Blade components.

No duplicated UI code should exist across pages.

Components should be easy to extend as the portfolio evolves into a business website.

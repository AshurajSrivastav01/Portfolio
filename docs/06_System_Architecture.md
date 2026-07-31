# System Architecture

Version: 1.0

Project: Ashuraj Srivastav Portfolio

---

# 1. Purpose

This document defines the overall architecture of the Laravel portfolio application.

The goal is to build a production-ready application that is clean, modular, scalable, maintainable, and follows Laravel best practices.

The application should be simple enough for a portfolio while leaving room for future expansion into a software company website.

---

# 2. Technology Stack

Backend

Laravel 12

Frontend

Blade Templates

Bootstrap 5.3

JavaScript

Vanilla JavaScript

Build Tool

Vite

Icons

Bootstrap Icons

Package Manager

Composer

NPM

Deployment

Render

Version Control

GitHub

---

# 3. Architectural Principles

The application should follow:

 MVC Architecture

 DRY Principle

 KISS Principle

 SOLID Principles where applicable

 Separation of Concerns

 Component-Based UI

 Configuration Driven Content

 Reusable Blade Components

---

# 4. Folder Structure

app/

    Http/
        Controllers/

    Providers/

    View/

bootstrap/

config/

database/

public/

resources/

    css/

    js/

    views/

        layouts/

        pages/

        projects/

        services/

        components/

routes/

storage/

tests/

---

# 5. Route Structure

/

/about

/projects

/projects/{slug}

/services

/experience

/contact

/resume

---

Future

/blog

/blog/{slug}

/case-studies

---

# 6. Route Organization

Use web.php

Group related routes.

Example

Home

Projects

Services

Contact

Resume

Future blog routes should be isolated.

---

# 7. Controller Architecture

HomeController

AboutController

ProjectController

ServiceController

ExperienceController

ContactController

ResumeController

Each controller should have a single responsibility.

Avoid placing business logic inside controllers.

---

# 8. Content Management Strategy

Initially:

Use configuration files.

config/

projects.php

services.php

skills.php

experience.php

education.php

certifications.php

No database required.

Future versions may migrate to MySQL.

---

# 9. View Structure

layouts/

app.blade.php

partials/

navbar.blade.php

footer.blade.php

pages/

home.blade.php

about.blade.php

projects.blade.php

project-details.blade.php

services.blade.php

experience.blade.php

contact.blade.php

resume.blade.php

404.blade.php

---

# 10. Blade Components

Reusable components only.

Examples

<x-navbar>

<x-footer>

<x-project-card>

<x-service-card>

<x-button>

<x-badge>

<x-section>

<x-heading>

Avoid duplicated HTML.

---

# 11. Asset Management

CSS

Bootstrap

Custom CSS

JavaScript

Vite

Image optimization

Responsive images

SVG icons where appropriate

---

# 12. Configuration Files

Store reusable content inside

config/projects.php

config/services.php

config/skills.php

config/social.php

config/experience.php

config/profile.php

Controllers should retrieve data from configuration rather than hardcoding values.

---

# 13. Contact Form



Production Website

---

# 22. Scalability

Future architecture should support:

Blog

Admin Panel

Testimonials

CMS

API

Authentication

Products

Agency Website

Without requiring major refactoring.

---

# 23. Coding Standards

PSR-12

Meaningful naming

Reusable methods

Small controllers

No duplicated logic

Consistent formatting

Clear comments only where necessary

---

# 24. Documentation

The repository should include:

README.md

Installation Guide

Deployment Guide

Environment Setup

Project Structure

Screenshots

License

---

# 25. Success Criteria

The architecture is successful if:

The project is easy to understand.

New pages can be added easily.

Components are reusable.

Configuration changes require minimal code updates.

The application is production-ready.

The project follows Laravel best practices.POST

/contact

Validation

Form Request

Email notification

Success message

Spam protection (future)

---

# 14. Error Handling

404

500

Validation errors


Deployment


Graceful user-friendly pages.

Log exceptions using Laravel logging.

---

# 15. SEO Architecture

Each page should support:

Title

Description

Keywords

Canonical URL

Open Graph Image

Twitter Card



Automatic Build

Structured Data

Meta tags should be dynamic.

---

# 16. Performance

Optimize assets

Cache configuration

Optimize routes

Lazy load images

Minimize JavaScript

Use Laravel optimization commands before deployment.

---

# 17. Security


Render


CSRF protection

XSS prevention

Input validation

Escaped output

Secure environment variables

Never expose secrets.

---

# 18. Environment Configuration

Environment variables

APP_NAME

APP_ENV



GitHub Repository

APP_URL

MAIL_*

No sensitive values committed to GitHub.

Use .env.example.

---

# 19. Logging

Use Laravel logging.

Separate production and development logging.

Log contact form failures.

---

# 20. Testing Strategy

Future support for:

Feature Tests

Unit Tests

Contact Form Tests

Route Tests

---

# 21. Deployment Architecture

Developer



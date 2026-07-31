

Production Website

---

# 4. Prerequisites

Before deployment ensure:

û Project builds successfully

û All tests pass

û Environment variables configured

û Images optimized

û README updated

û .env.example available

---

# 5. Environment Variables

Required variables

APP_NAME

APP_ENV=production

APP_KEY

APP_DEBUG=false

APP_URL

LOG_CHANNEL

CACHE_STORE

SESSION_DRIVER

QUEUE_CONNECTION

MAIL_MAILER

MAIL_HOST

MAIL_PORT

MAIL_USERNAME

MAIL_PASSWORD

MAIL_FROM_ADDRESS

MAIL_FROM_NAME

Never commit the `.env` file.

---

# 6. Build Commands

Install PHP dependencies

composer install --no-dev --optimize-autoloader

Install JavaScript dependencies

npm install

Build frontend assets

npm run build

Generate application key (first deployment only)

php artisan key:generate

---

# 7. Production Optimization

Run before deployment:

php artisan config:cache

php artisan route:cache

php artisan view:cache

php artisan optimize

---

# 8. Storage

If file uploads are added in the future:

Create symbolic link

php artisan storage:link

Current portfolio does not require persistent uploads.

---

# 9. Logging

Use Laravel logging.

Production log level:

Error

Critical

Emergency

Avoid verbose debug logging.

---

# 10. Error Pages

Provide custom pages for:

404

500

503

Users should always have a way back to the homepage.

---

# 11. Security Checklist

Before deployment verify:

û APP_DEBUG=false

û Secure APP_KEY

û HTTPS enabled

û No secrets in repository

û Input validation enabled

û CSRF protection active

û Escaped Blade output

---

# 12. Performance Checklist

û Assets compiled

û Images compressed

û Vite production build generated

û Configuration cached

û Routes cached

û Views cached

û Lazy loading enabled

---

# 13. SEO Checklist

û Unique page titles

û Meta descriptions

û Open Graph tags

û Twitter Cards

û Sitemap.xml

û robots.txt

û Canonical URLs

û Structured Data

---

# 14. Browser Compatibility

Support latest versions of:

Chrome

Firefox

Edge

Safari

Responsive support:

Desktop

Tablet

Mobile

---

# 15. Monitoring

Regularly verify:

Website availability

Broken links

Contact form functionality

Deployment status

Performance metrics

---

# 16. Backup Strategy

GitHub serves as the source of truth.

Keep:

Code

Documentation

Assets

Configuration examples

under version control.

---

# 17. Git Workflow

Main Branch

Production-ready code

Feature Branches

feature/home-page

feature/projects

feature/contact

Merge using Pull Requests where practical.

---

# 18. Release Checklist

Before every release:

û Code reviewed

û Responsive testing complete

û Lighthouse >95

û SEO verified

û Accessibility checked

û Contact form tested

û Resume download tested

û Navigation verified

---

# 19. Future Deployment Enhancements

Support future deployment of:

Blog

Admin Panel

CMS

API

Authentication

without changing deployment architecture.

---

# 20. Success Criteria

Deployment is successful when:

The website is accessible via HTTPS.

Automatic deployments work correctly.

The application loads without errors.

All pages function correctly.

Performance and SEO goals are achieved.

The deployment process is repeatable and well documented.

Render Auto Deploy



GitHub Repository

# Deployment Guide

Version: 1.0


Git Push


Project: Ashuraj Srivastav Portfolio

---

# 1. Purpose

This document defines the deployment strategy for the portfolio website.

The application will be deployed using Render with GitHub integration to support continuous deployment and easy maintenance.

---

# 2. Hosting Platform

Production Hosting

Render

Version Control

GitHub

Domain

Custom Domain (Future)

SSL

Enabled by Render

---

# 3. Deployment Workflow

Developer



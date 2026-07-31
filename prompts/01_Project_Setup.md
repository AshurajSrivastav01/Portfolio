# Portfolio Website - Milestone 1

You are a Senior Laravel Developer.

Using the documentation in the `/docs` folder as the source of truth, generate the initial Laravel project architecture.

## Tech Stack

- Laravel 12
- Blade Templates
- Bootstrap 5.3
- Bootstrap Icons
- Vite
- Vanilla JavaScript

---

## Objective

Create a clean, production-ready Laravel project that will act as the foundation of the portfolio website.

Do NOT build all pages yet.

Focus only on project setup and reusable architecture.

---

## Tasks

### 1. Configure Bootstrap

Install Bootstrap 5.3.

Configure Vite.

Configure Bootstrap Icons.

---

### 2. Create Folder Structure

Create clean folders.

Example:

resources/views/

layouts/

components/

pages/

projects/

services/

partials/

---

### 3. Master Layout

Create

resources/views/layouts/app.blade.php

It should include

- meta tags placeholder
- navbar include
- footer include
- Bootstrap assets
- Vite assets
- page content slot

---

### 4. Navigation

Create responsive navbar.

Desktop

Mobile

Sticky

Dark mode toggle placeholder

No business logic.

---

### 5. Footer

Create reusable footer.

Include

Navigation

Social links placeholder

Copyright

Back to top

---

### 6. Blade Components

Generate reusable components.

Examples

<x-button>

<x-heading>

<x-section>

<x-badge>

<x-container>

Do not hardcode content.

---

### 7. Configuration Files

Generate

config/profile.php

config/services.php

config/projects.php

config/social.php

Populate with placeholder data.

---

### 8. Routes

Generate

/

about

projects

services

experience

contact

resume

Each route should return its corresponding Blade view.

---

### 9. Controllers

Generate

HomeController

AboutController

ProjectController

ServiceController

ExperienceController

ContactController

ResumeController

Controllers should remain thin.

---

### 10. Views

Generate placeholder pages only.

No final UI yet.

---

### 11. Assets

Configure

Bootstrap

Custom CSS

Custom JS

Bootstrap Icons

---

### 12. Code Quality

Follow

PSR-12

Laravel Best Practices

Reusable Components

No duplicated code

---

### Deliverables

Return:

1. Folder structure

2. Files created

3. Installation commands

4. Composer packages

5. NPM packages

6. Configuration changes

7. Generated code

Do NOT continue to Milestone 2.

Stop after project setup.

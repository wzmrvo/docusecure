---
name: playwright-cli
description: Browser automation and end-to-end testing for web apps using Playwright. Use when asked to test pages, automate browser interactions, check if features work in a real browser, or write E2E tests for the app.
---

# Playwright CLI Skill

Browser automation and E2E testing for your Laravel app using Playwright.

## Prerequisites

Install Playwright CLI globally:
```bash
npm install -g @playwright/cli@latest
```

Then install browsers:
```bash
npx playwright install chromium
```

## How to Use

### Run a quick browser check
```bash
playwright-cli open http://localhost:8000
```

### Take a screenshot
```bash
playwright-cli screenshot http://localhost:8000 screenshot.png
```

### Generate a test
```bash
playwright-cli codegen http://localhost:8000
```

### Run existing tests
```bash
npx playwright test
```

## Usage Triggers

Activate when user asks to:
- "Test my login page"
- "Check if X works in browser"  
- "Write E2E tests for..."
- "Automate browser testing"
- "Take a screenshot of my app"
- "Check my site in a real browser"

## Notes

- Laravel dev server runs on http://localhost:8000 (php artisan serve)
- Use accessibility snapshots for efficient interaction
- Playwright supports Chromium, Firefox, and WebKit

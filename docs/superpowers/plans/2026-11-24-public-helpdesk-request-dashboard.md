# Public Helpdesk Request Dashboard Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Replace the unauthenticated `/helpdesk` operations preview with a public support request dashboard that contains no employee identity or sign-out affordance.

**Architecture:** Keep the existing Blade layout and shared sidebar, but add a public-helpdesk mode to the sidebar theme map. Replace only the helpdesk view content and make the direct route a public request surface.

**Tech Stack:** Laravel Blade, Tailwind CSS via the existing layout, PHPUnit feature tests.

**Spec:** Approved in the conversation by the user on 2026-11-24.

## Global Constraints

- Frontend-only scope: no authentication, database, account unlock, or backend workflow changes.
- Public `/helpdesk` must not show an employee name, Node ID, MIS token, sign-out control, or staff-only unlock/identity actions.
- Retain the existing violet support theme and shared 256px sidebar shell.
- Preserve existing dark/light theme behavior and responsive layout.

## Review Focus

- Direct `/helpdesk` access: must render even without login; test `/helpdesk` for public request content and absence of employee identity.
- Sidebar identity leakage: must not render Node ID or sign-out in public helpdesk mode; test the sidebar text and links.
- Public request form: required fields and submission affordances must have labels and keyboard-visible controls.
- Mobile overflow: sidebar and main content must remain within a 390px viewport without horizontal overflow.
- Legacy helpdesk operations content: must not remain in the public view or expose unlock/lookup controls.

---

### Task 1: Public Helpdesk Contract Test

**Files:**
- Modify: `tests/Feature/SidebarThemeTest.php`

**Interfaces:**
- Consumes: Laravel test HTTP helpers and named `helpdesk` route.
- Produces: A feature test that proves the public `/helpdesk` contract.

- [ ] **Step 1: Add assertions for public helpdesk content and no staff-session affordances.**

In `test_role_screens_render_a_consistent_accessible_sidebar`, add `helpdesk` route coverage already present and add a separate test method named `test_helpdesk_route_is_a_public_request_dashboard`.

Assert `/helpdesk` returns 200, renders `data-sidebar="helpdesk"`, contains `Create a Support Request`, and does not contain `Mark Villareal`, `HD-MIS-TOKEN-44`, `Sign Out Session`, `Unlock Account`, or `Institutional NetID Lookup`.

- [ ] **Step 2: Run the focused test and verify it fails for the missing public copy.**

Run: `php artisan test --filter=test_helpdesk_route_is_a_public_request_dashboard`
Expected: FAIL because the current page contains staff operations copy.

### Task 2: Public Helpdesk Sidebar Mode

**Files:**
- Modify: `resources/views/components/sidebar.blade.php`

**Interfaces:**
- Consumes: `$role === 'helpdesk'` theme configuration.
- Produces: A public helpdesk sidebar with support navigation and no footer identity/session controls.

- [ ] **Step 1: Change the helpdesk theme metadata to public support copy.**

Set `section_label` to `Support & Requests`, `tier_label` to `PUBLIC SUPPORT`, and replace the helpdesk links with `Create a Request`, `Track a Request`, `Support Status`, and `Help & FAQs`.

- [ ] **Step 2: Replace the helpdesk footer identity with a public return/action area.**

When `$role === 'helpdesk'`, do not render Node ID, employee name, initials, subtitle, or Sign Out Session. Render a compact public-support card with “Need account access?” and a link to `institutional-account-request`, plus a link to the login route.

- [ ] **Step 3: Run the focused test and verify it passes.**

Run: `php artisan test --filter=test_helpdesk_route_is_a_public_request_dashboard`
Expected: PASS.

### Task 3: Replace Helpdesk Operations View

**Files:**
- Modify: `resources/views/helpdesk/index.blade.php`

**Interfaces:**
- Consumes: Existing `layouts.app` content section and violet sidebar mode.
- Produces: A public dashboard with request creation, request tracking, service status, and FAQ/support channels.

- [ ] **Step 1: Replace the operations dashboard with public support content.**

Use a request-first layout: page heading, concise support context, “Create a Support Request” form, “Track a Request” card, service-status card, and office-hours/support-channel card.

Add visible labels for requester name, institutional NetID or email, issue category, priority, and message. Add `@csrf`, but keep the form frontend-only and prevent any claim of real submission by using an explicit demo submission confirmation.

- [ ] **Step 2: Remove unlock, identity lookup, ticket queue, employee-duty, and modal operations code.**

The resulting view must contain no unlock account action, NetID lookup tool, staff ticket queue, or modal.

- [ ] **Step 3: Run full Laravel tests and Blade compilation.**

Run:
- `php artisan test`
- `php artisan view:cache`
- `git diff --check`
Expected: all tests pass and all Blade templates compile.

### Task 4: Browser and Responsive Verification

**Files:**
- No file creation

**Interfaces:**
- Consumes: Running Laravel preview and `/helpdesk`.
- Produces: Verified desktop/mobile screenshots and DOM checks.

- [ ] **Step 1: Start the preview server and open `/helpdesk` in the browser.**

Verify public copy, violet sidebar, visible active navigation, and absence of identity/sign-out content.

- [ ] **Step 2: Check desktop and 390px viewport.**

Verify no horizontal overflow and that the sidebar/content/footer fit the viewport; correct only layout issues revealed by inspection.

- [ ] **Step 3: Run the Impeccable detector on the changed files.**

Report findings and fix only issues introduced or directly relevant to the helpdesk screen.

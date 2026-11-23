# Role Frontend Modal Polish Implementation Plan

**Goal:** Align authentication and role workflows with consistent dark navy/gold modal interactions without adding real backend behavior.

**Architecture:** Reuse the existing Blade modal component and small page scripts. Keep standalone auth pages navy/gold; replace mismatched redirects with confirmation modals; pass selected Tier 4 document metadata through the existing Tier 4 route.

**Tech Stack:** Laravel Blade, Tailwind CSS, vanilla JavaScript, existing role routes.

**Spec:** User-approved frontend scope covering 2FA, account request, admin deposit, Helpdesk, login, and Tier 1–4 actions.

## Tasks

- [ ] Align the 2FA page and institutional account request page to the dark navy/gold theme and local CvSU logo.
- [ ] Add realistic Login and Account Request confirmation modals.
- [ ] Replace the Helpdesk inline-only submission result with a success modal.
- [ ] Replace the deposit-page provisioning redirect with review/seal and document-success modals.
- [ ] Link Tier 4 library elevation buttons to a preselected clearance request; add direct-page file selection.
- [ ] Add simple modal affordances for Tier 1–3 document action buttons.

---
name: image-to-code
description: >-
  Convert a screenshot, mockup, or design image into real working code.
  Use when the user uploads an image of a UI, wireframe, or design and
  wants it turned into HTML/CSS, Blade templates, or any other frontend code.
  Also triggered when user says "build this", "make this", "turn this into code",
  or shares a screenshot of a UI they want to replicate.
---

# Image to Code Skill

Turn any UI screenshot, wireframe, or design mockup into real working code
for your Laravel/Blade project.

## How It Works

1. User uploads an image (screenshot, mockup, Figma export, photo of a sketch)
2. Analyse the layout: sections, components, colors, typography, spacing
3. Write a brief plan: component list, layout structure, color tokens
4. Generate the code — Blade template + Tailwind CSS by default
5. Point out anything ambiguous (icons, fonts, images not in the screenshot)

## Output Format

- **Laravel projects**: Blade template + Tailwind CSS utility classes
- **Static**: Plain HTML + CSS if no framework is specified
- Always use semantic HTML5 elements
- Always include responsive breakpoints (mobile-first)
- Extract colors as CSS custom properties or Tailwind config values

## Rules

- Reproduce the layout as closely as possible — spacing, alignment, hierarchy
- Do not invent content not visible in the image
- Note any assets (images, icons, fonts) that need to be sourced
- Apply Taste Skill house rules if the design-taste-frontend skill is active
- Ask for clarification if critical details are unclear (e.g., hover states, interactions)

## Usage Triggers

Activate when user:
- Uploads any image and asks to "build this", "code this", "make this"
- Says "turn this design into code"
- Shares a screenshot and says "I want my site to look like this"
- Uploads a wireframe or mockup

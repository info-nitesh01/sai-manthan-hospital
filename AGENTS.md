# AGENTS.md

## Project overview
This repository is a static marketing website for a healthcare/medical brand called Pluxes. It is composed of standalone HTML pages in the project root, shared CSS in `css/`, shared JavaScript in `js/`, and static assets in `images/`.

## Working conventions
- Keep edits consistent with the existing template structure: each page is a full HTML document with shared header/footer patterns and page-specific sections.
- Prefer updating shared styling in `css/custom.css` instead of rewriting page-specific inline styles.
- Prefer updating shared behavior in `js/function.js` instead of adding ad hoc logic in individual pages.
- Preserve existing class names, IDs, and asset paths unless the task explicitly requires a redesign.
- Do not modify vendor library files under `js/*.min.js` unless absolutely necessary; use the wrapper logic in `js/function.js` to configure behavior.
- Keep relative links working from the project root. Most pages use paths such as `index.html`, `about.html`, `services.html`, `contact.html`, etc.

## Typical implementation workflow
1. Identify the page to change from the root HTML files.
2. Match the existing section structure and Bootstrap layout before editing.
3. Add or adjust CSS in `css/custom.css` when new styles are required.
4. Add or adjust initialization logic in `js/function.js` for animations, sliders, counters, and menu behavior.
5. Re-check the page in a browser to confirm the layout and interactions still work.

## Validation
There is no package.json, build pipeline, or automated test suite in this project. Validation is manual:
- open the affected HTML page in a browser or local preview;
- verify links, styles, and JS interactions render without console errors;
- confirm any moved assets still resolve under the same directory structure.

## Content and design expectations
- Maintain the medical/healthcare branding and tone already used by the template.
- Keep the design consistent with the existing hero sections, cards, reviews, service blocks, and call-to-action patterns.
- For new pages, mirror the established page structure and reuse the same CSS classes/sections where possible.

## Useful files
- `index.html`: landing page reference implementation and general layout patterns
- `css/custom.css`: primary site styling
- `js/function.js`: shared interactive behavior and animation setup
- `images/`: static media assets

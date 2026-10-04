# Govind Mudavadkar | Portfolio

Personal portfolio site: <https://govindrm7.github.io/My_Portfolio/>

A single-page, scroll-first site. No framework, no build step, no jQuery or
Bootstrap. Just one `index.html` holding the markup, styles, scripts and an
inline SVG icon sprite.

## Structure

| Path | What it is |
|------|------------|
| `index.html` | The entire site |
| `assets/govind.jpg` | Headshot (640x640, rendered as a circular avatar) |

## Features

- Light and dark themes that follow the OS, with a toggle persisted to `localStorage`
- Scroll-spy navigation and reveal-on-scroll, both disabled under `prefers-reduced-motion`
- Responsive from 360px up, with no horizontal overflow
- Google Fonts is the only external request

## Editing

**Certifications.** Add objects to the `CERTIFICATIONS` array near the top of
the `<script>` block. The section and its nav link appear automatically. The
first four show by default and the rest sit behind a "Show all" toggle.

```js
var CERTIFICATIONS = [
  { name: 'Certificate name', issuer: 'Issuer', date: 'Mar 2026', url: 'https://...' }
];
```

**Everything else.** Edit the relevant `<section>` directly.

## Local preview

```sh
python3 -m http.server 8000
# open http://localhost:8000
```

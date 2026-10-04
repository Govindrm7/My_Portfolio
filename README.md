# Govind Mudavadkar — Portfolio

Personal portfolio site: <https://govindrm7.github.io/My_Portfolio/>

A single-page, scroll-first site. No framework, no build step, no jQuery/Bootstrap —
one `index.html` with inline CSS and ~150 lines of vanilla JS.

## Structure

| Path | What it is |
|------|------------|
| `index.html` | The entire site — markup, styles, scripts, inline SVG icon sprite |
| `assets/govind.jpg` | Headshot (640×640, used as a circular avatar) |

## Features

- Light/dark theme that follows the OS and can be toggled (persisted to `localStorage`)
- Scroll-spy navigation, reveal-on-scroll, and a role typewriter — all disabled under
  `prefers-reduced-motion`
- Responsive from 360px up, no horizontal overflow
- External requests: Google Fonts only

## Editing

**Certifications** — add objects to the `CERTIFICATIONS` array near the top of the
`<script>` block. The section and its nav link appear automatically; the first four
show by default and the rest sit behind a "Show all" toggle.

```js
var CERTIFICATIONS = [
  { name: 'Certificate name', issuer: 'Issuer', date: 'Mar 2026', url: 'https://…' }
];
```

**Everything else** — edit the relevant `<section>` directly.

## Local preview

```sh
python3 -m http.server 8000
# open http://localhost:8000
```

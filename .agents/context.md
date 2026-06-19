# Dig4E Video — agent context

## What this repo is

The Video module of Dig4E — an online course on standards and best practices for digitizing analog videotape into encoded digital files.

This site is built on the [Tsugi](https://www.tsugi.org/) framework using the embedded-Tsugi pattern (Tsugi lives in a `tsugi/` subfolder and powers lessons, LTI tools, and quizzes).

## Tsugi setup (required for local dev)

The `tsugi/` folder is **not** in this git repo (see `.gitignore`). The site will not run until you check out and configure Tsugi:

1. Clone Tsugi into this repo:
   ```
   cd <repo-root>
   git clone https://github.com/tsugiproject/tsugi
   ```
2. Copy `tsugi/config-dist.php` to `tsugi/config.php` and configure it per https://www.tsugi.org/ — including the **Embedded Tsugi** settings (`$wwwroot`, `$CFG->apphome`, `$CFG->tool_folders`, `$CFG->lessons`, etc.). `sanity.php` will walk you through missing configuration if you hit the site before setup is complete.
3. Site-specific settings (service name, theme, `lessons.json` path) live in `tsugi_settings.php` at the repo root, which is included at the end of `tsugi/config.php`.

Do not edit `tsugi/vendor/` — treat Tsugi as an upstream dependency.

## Stack

- **Tsugi** under `tsugi/` (see setup above)
- **Koseu** LMS routes via `koseu.php` (`/lessons`, `/assignments`, badges, map, etc.)
- Course content: `lessons.json`
- Site chrome: `index.php`, `top.php`, `nav.php`, `materials.php`
- Lesson styling: `css/lessons.css`
- Local Tsugi settings: `tsugi_settings.php`
- LTI tools: `tools/`

## Conventions

- Preserve `lessons.json` module structure when editing course content
- Brand accent color: `#575294`
- Match patterns used in the imaging and audio siblings where the sites are intentionally parallel

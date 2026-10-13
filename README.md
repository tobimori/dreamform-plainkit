# DreamForm Plainkit

This is an example [Kirby](https://getkirby.com) site for [DreamForm](https://plugins.andkindness.com/dreamform), showing a multi-step job application form with a custom field.

The form is styled to look like the Kirby Panel, using a single plain CSS file (`assets/css/site.css`) without a build step. It works without JavaScript, but is progressively enhanced with [HTMX 4](https://four.htmx.org/) to avoid full page reloads and to validate fields while typing.

## Requirements

- PHP 8.3, 8.4 or 8.5
- [Composer](https://getcomposer.org/)

## Get up and running

```bash
git clone https://github.com/tobimori/dreamform-plainkit df-plainkit && cd df-plainkit
composer install
composer start
```

Open `http://localhost:8000` and you're ready to go. `composer install` also creates a `.env` file with a random `CONTENT_SALT`. Kirby uses it as its [content salt](https://getkirby.com/docs/reference/system/options/content#salt-for-drafts-and-media-files), and DreamForm derives the secret for encrypting HTMX requests from it.

## What's inside

- `site/templates/default.php` renders the form and attaches the CSS classes to DreamForm's markup
- `assets/css/site.css` contains the Panel-like styles, including dark mode
- `site/snippets/layout.php` is the HTML shell, loading HTMX 4
- `site/snippets/dreamform/success.php` overrides DreamForm's success snippet
- `site/plugins/dreamform-demo` registers a custom LinkedIn field
- `site/config/config.php` sets the content salt and enables HTMX 4 mode, live validation and sessionless guards

Read the [demo guide](https://plugins.andkindness.com/dreamform/docs/developers/demo) for a walkthrough.

# ESDF Website

Secure WordPress site for **esdf-eg.com**

## Structure

- `wp-content/mu-plugins/` - Must-use plugins (security headers)
- `wp-content/plugins/` - Plugins
- `wp-content/themes/` - Themes
- `wp-content/uploads/` - Media uploads (excluded from Git)
- `.htaccess` - Security-hardened Apache rules
- `.cpanel.yml` - cPanel Git deployment configuration

## Deployment

This repository is configured for automatic deployment to cPanel via Git push.
